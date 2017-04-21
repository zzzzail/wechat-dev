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

class Wechat {
  constructor() {
    this.appId = wechatCfg.appId;
    this.secret = wechatCfg.secret;
    this.tokenCacheFile = wechatCfg.tokenCacheFile;
    this.ticketCacheFile = wechatCfg.ticketCacheFile;

    this._getAccessToken = this._getAccessToken.bind(this);
    this.getAccessToken = this.getAccessToken.bind(this);
    this.saveAccessToken = this.saveAccessToken.bind(this);
    this.isValidAccessToken = this.isValidAccessToken.bind(this);
    this.updateAccessToken = this.updateAccessToken.bind(this);
    this._getJsapiTicket = this._getJsapiTicket.bind(this);
    this.getJsapiTicket = this.getJsapiTicket.bind(this);
    this.saveJsapiTicket = this.saveJsapiTicket.bind(this);
    this.isValidJsapiTicket = this.isValidJsapiTicket.bind(this);
    this.updateJsapiTicket = this.updateJsapiTicket.bind(this);
    this.createNonceStr = this.createNonceStr.bind(this);
    this.createTimestamp = this.createTimestamp.bind(this);
    this._createSign = this._createSign.bind(this);
    this.createSign = this.createSign.bind(this);
  }

  _getAccessToken() {
    const _self = this;
    return new Promise((resolve, reject) => {
      fs.readFile(_self.tokenCacheFile, 'utf-8', (err, data) => {
        if (err) {
          return reject(err);
        } else return resolve(data);
      })
    });
  }

  // 获取AccessToken的方法
  getAccessToken() {
    const _self = this;
    if (this.accessTokenStore && this.accessTokenStore.access_token && this.accessTokenStore.expires_in) {
      if (this.isValidAccessToken(this.accessTokenStore)) {
        return Promise.resolve(this.accessTokenStore);
      }
    }

    return this._getAccessToken()
      .catch((err) => {
        const existsFile = fs.existsSync(_self.tokenCacheFile);
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
  saveAccessToken(data) {
    const _self = this;
    return new Promise((resolve, reject) => {
      fs.writeFile(_self.tokenCacheFile, JSON.stringify(data), (err) => {
        if (err) reject(err);
        else resolve(data);
      })
    })
  }

  // 检查 AccessToken 合法性
  isValidAccessToken(data) {
    if (!data || !data.access_token || !data.expires_in) {
      return false;
    }

    const expires_in = data.expires_in;
    const now = (new Date().getTime());
    if (now < expires_in) {
      return true;
    } else {
      return false;
    }
  }

  // 更新 AccessToken
  updateAccessToken() {
    const appId = this.appId;
    const secret = this.secret;
    const url = wechatCfg.api.access_token.get + '&appid=' + appId + '&secret=' + secret;
    return new Promise((resolve, reject) => {
      request({url: url, json: true})
        .then((response) => {
          const data = response.body;
          const now = (new Date().getTime());
          const expires_in = now + (data.expires_in - 20) * 1000;
          data.expires_in = expires_in;

          resolve(data);
        })
    })
  }

  _getJsapiTicket() {
    const _self = this;
    return new Promise((resolve, reject) => {
      fs.readFile(_self.ticketCacheFile, 'utf-8', (err, data) => {
        if (err) return reject(err);
        else return resolve(data);
      })
    });
  }

  // 获取JsapiTicket的方法
  getJsapiTicket(token) {
    const _self = this;
    if (this.jsapiTicketStore && this.jsapiTicketStore.ticket && this.jsapiTicketStore.expires_in) {
      if (this.isValidJsapiTicket(this.jsapiTicketStore)) {
        return Promise.resolve(this.jsapiTicketStore);
      }
    }

    return this._getJsapiTicket()
      .catch((err) => {
        const existsFile = fs.existsSync(_self.ticketCacheFile);
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
  saveJsapiTicket(data) {
    const _self = this;
    return new Promise((resolve, reject) => {
      fs.writeFile(_self.ticketCacheFile, JSON.stringify(data), (err) => {
        if (err) reject(err);
        else resolve(data);
      })
    })
  }

  // 检查JsapiTicket合法性
  isValidJsapiTicket(data) {
    if (!data || !data.ticket || !data.expires_in) {
      return false;
    }

    const expires_in = data.expires_in;
    const now = (new Date().getTime());
    if (now < expires_in) {
      return true;
    } else {
      return false;
    }
  }

  // 更新JsapiTicket
  updateJsapiTicket(token) {
    const url = wechatCfg.api.jsapi_ticket.get + '&access_token=' + token.access_token + '&type=jsapi';
    return new Promise((resolve, reject) => {
      request({url: url, json: true})
        .then((response) => {
          const data = response.body;
          const now = (new Date().getTime());
          const expires_in = now + (data.expires_in - 20) * 1000;
          data.expires_in = expires_in;

          resolve(data);
        })
    })
  }

  // 生成随机字符串
  createNonceStr() {
    return Math.random().toString(36).substr(2, 15);
  }

  // 生成时间戳
  createTimestamp() {
    return parseInt(new Date().getTime() / 1000, 10) + '';
  }

  _createSign(noncestr, timestamp, ticket, url) {
    const params = [
      'noncestr=' + noncestr,
      'jsapi_ticket=' + ticket,
      'timestamp=' + timestamp,
      'url=' + url
    ]
    const str = params.sort().join('&');
    const shasum = crypto.createHash('sha1');
    shasum.update(str);
    return shasum.digest('hex');
  }

  // 微信签名算法
  createSign(ticket, url) {
    const noncestr = this.createNonceStr();
    const timestamp = this.createTimestamp();
    const signature = this._createSign(noncestr, timestamp, ticket, url);

    return {
      noncestr: noncestr,
      timestamp: timestamp,
      signature: signature
    }
  }

}

const xmlTemplate = require('./util').xmlTemplate;

Wechat.prototype.reply = function (replyMessage) {
  let message = this.wechatMessage;
  let xml = xmlTemplate(message, replyMessage);
  this.status = 200;
  this.type = 'application/xml';
  return this.body = xml;
}

module.exports = Wechat;
