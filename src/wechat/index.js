/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/4/19
 * @description wechat类
 */

const fs = require('fs');
const Promise = require('bluebird');
const request = Promise.promisify(require('request'));
const crypto = require('crypto');
const mkp = require('mkp');
const cfg = require('../config/config');
const wechatCfg = cfg.wechat;
const xmlTemplate = require('./util').xmlTemplate;

class Wechat {
  constructor() {
    this.appId = wechatCfg.appId;
    this.secret = wechatCfg.secret;
    this.tokenCacheFile = wechatCfg.tokenCacheFile;
    this.ticketCacheFile = wechatCfg.ticketCacheFile;

    this.getAccessToken();
  }
}

Wechat.prototype._getAccessToken = function () {
  let _self = this;
  return new Promise((resolve, reject) => {
    fs.readFile(_self.tokenCacheFile, 'utf-8', (err, data) => {
      if (err) {
        return reject(err);
      } else return resolve(data);
    })
  });
}

// 获取AccessToken的方法
Wechat.prototype.getAccessToken = function () {
  let _self = this;
  if (this.accessTokenStore && this.accessTokenStore.access_token && this.accessTokenStore.expires_in) {
    if (this.isValidAccessToken(this.accessTokenStore)) {
      return Promise.resolve(this.accessTokenStore);
    }
  }

  return this._getAccessToken()
    .catch((err) => {
      let existsFile = fs.existsSync(_self.tokenCacheFile);
      if (!existsFile) {
        mkp(_self.tokenCacheFile, (err) => {
          if (err) return Promise.reject(err);
          else return _self.updateAccessToken();
        })
      } else {
        return Promise.reject(err);
      }
    })
    .then((data) => {
      try {
        data = JSON.parse(data);
      } catch (e) {
        return _self.updateAccessToken();
      }

      if (_self.isValidAccessToken(data)) {
        return Promise.resolve(data);
      } else {
        return _self.updateAccessToken();
      }
    })
    .then((data) => {
      _self.accessTokenStore = {
        access_token: data.access_token,
        expires_in: data.expires_in
      }

      return _self.saveAccessToken(data);
    })
}

// 保存 AccessToken
Wechat.prototype.saveAccessToken = function (data) {
  let _self = this;
  return new Promise((resolve, reject) => {
    fs.writeFile(_self.tokenCacheFile, JSON.stringify(data), (err) => {
      if (err) reject(err);
      else resolve(data);
    })
  })
}

// 检查 AccessToken 合法性
Wechat.prototype.isValidAccessToken = function (data) {
  if (!data || !data.access_token || !data.expires_in) {
    return false;
  }

  let expires_in = data.expires_in;
  let now = (new Date().getTime());
  if (now < expires_in) {
    return true;
  } else {
    return false;
  }
}

// 更新 AccessToken
Wechat.prototype.updateAccessToken = function () {
  let appId = this.appId;
  let secret = this.secret;
  let url = `${wechatCfg.api.access_token.get}&appid=${appId}&secret=${secret}`;
  return new Promise((resolve, reject) => {
    request({url: url, json: true})
      .then((response) => {
        let data = response.body;
        let now = (new Date().getTime());
        let expires_in = now + (data.expires_in - 20) * 1000;
        data.expires_in = expires_in;

        resolve(data);
      })
  })
}

Wechat.prototype._getJsapiTicket = function () {
  let _self = this;
  return new Promise((resolve, reject) => {
    fs.readFile(_self.ticketCacheFile, 'utf-8', (err, data) => {
      if (err) return reject(err);
      else return resolve(data);
    })
  });
}

// 获取JsapiTicket的方法
Wechat.prototype.getJsapiTicket = function (token) {
  let _self = this;
  if (this.jsapiTicketStore && this.jsapiTicketStore.ticket && this.jsapiTicketStore.expires_in) {
    if (this.isValidJsapiTicket(this.jsapiTicketStore)) {
      return Promise.resolve(this.jsapiTicketStore);
    }
  }

  return this._getJsapiTicket()
    .catch((err) => {
      let existsFile = fs.existsSync(_self.ticketCacheFile);
      if (!existsFile) {
        mkp(_self.ticketCacheFile, (err) => {
          if (err) return Promise.reject(err);
          else return _self.updateJsapiTicket(token);
        })
      } else {
        return Promise.reject(err);
      }
    })
    .then((data) => {
      try {
        data = JSON.parse(data);
      } catch (e) {
        return _self.updateJsapiTicket(token);
      }

      if (_self.isValidJsapiTicket(data)) {
        return Promise.resolve(data);
      } else {
        return _self.updateJsapiTicket(token);
      }
    })
    .then((data) => {
      _self.jsapiTicketStore = {
        ticket: data.ticket,
        expires_in: data.expires_in
      }

      return _self.saveJsapiTicket(data);
    })
}

// 保存JsapiTicket
Wechat.prototype.saveJsapiTicket = function (data) {
  let _self = this;
  return new Promise((resolve, reject) => {
    fs.writeFile(_self.ticketCacheFile, JSON.stringify(data), (err) => {
      if (err) reject(err);
      else resolve(data);
    })
  })
}

// 检查JsapiTicket合法性
Wechat.prototype.isValidJsapiTicket = function (data) {
  if (!data || !data.ticket || !data.expires_in) {
    return false;
  }

  let expires_in = data.expires_in;
  let now = (new Date().getTime());
  if (now < expires_in) {
    return true;
  } else {
    return false;
  }
}

// 更新JsapiTicket
Wechat.prototype.updateJsapiTicket = function (token) {
  let url = `${wechatCfg.api.jsapi_ticket.get}access_token=${token.access_token}&type=jsapi`;
  return new Promise((resolve, reject) => {
    request({url: url, json: true})
      .then((response) => {
        let data = response.body;
        let now = (new Date().getTime());
        let expires_in = now + (data.expires_in - 20) * 1000;
        data.expires_in = expires_in;

        resolve(data);
      })
  })
}

// 生成随机字符串
Wechat.prototype.createNonceStr = function () {
  return Math.random().toString(36).substr(2, 15);
}

// 生成时间戳
Wechat.prototype.createTimestamp = function () {
  return parseInt(new Date().getTime() / 1000, 10) + '';
}

Wechat.prototype._createSign = function (noncestr, timestamp, ticket, url) {
  let params = [
    `noncestr=${noncestr}`,
    `jsapi_ticket=${ticket}`,
    `timestamp=${timestamp}`,
    `url=${url}`
  ]
  let str = params.sort().join('&');
  let shasum = crypto.createHash('sha1');
  shasum.update(str);
  return shasum.digest('hex');
}

// 微信签名算法
Wechat.prototype.createSign = function (ticket, url) {
  let noncestr = this.createNonceStr();
  let timestamp = this.createTimestamp();
  let signature = this._createSign(noncestr, timestamp, ticket, url);

  return {
    noncestr,
    timestamp,
    signature
  }
}

// 微信自动回复
Wechat.prototype.reply = function (replyMessage) {
  let message = this.wechatMessage;
  let xml = xmlTemplate(message, replyMessage);
  this.status = 200;
  this.type = 'application/xml';
  return this.body = xml;
}

// 微信上传素材
Wechat.prototype.uploadMaterialForever = function (type, filePath, description) {
  let _self = this;
  let formData = {
    media: fs.createReadStream(filePath)
  }

  if (type == 'video') {
    formData.description = JSON.stringify(description);
  }

  return new Promise(function (resolve, reject) {
    _self.getAccessToken()
      .then(function (data) {
        let url = `${wechatCfg.api.uploadMaterialForever.post}access_token=${data.access_token}&type=${type}`;
        request({method: 'POST', url, formData, json: true})
          .then(response => {
            let _data = response.body;

            if (_data) {
              resolve(_data);
            } else {
              throw new Error('Upload material fails.');
            }
          })
          .catch(err => {
            reject(err);
          })
      })
  })

}

module.exports = Wechat;
