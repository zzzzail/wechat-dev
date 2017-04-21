/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/4/19
 * @description 配置文件
 *
 */

const path = require('path');
const _ = require('lodash');
const staticDir = path.join(__dirname, '../../public');
const viewDir = path.join(__dirname, '../../public/views');
const local = require('./local');
const wechatApiPrefix = 'https://api.weixin.qq.com/cgi-bin/';

let config = {
  title: '点影微信服务号',
  env: 'production',
  appName: 'dianying-open',
  port: 4700,
  keys: ['dianying-open'],
  middleware: [
    {
      name: 'initial'
    }, {
      name: 'bodyparser',
      params: {
        multipart: true,
        formidable: {
          uploadDir: path.join(__dirname, '../../public/upload')
        }
      }
    }, {
      name: 'koa-static',
      params: staticDir
    }, {
      name: 'xtpl',
      params: {
        views: viewDir
      }
    }, {
      name: 'session',
      params: {
        key: 'koa:sess',
        overwrite: true,
        httpOnly: true,
        signed: true
      }
    }, {
      name: 'mongoose',
      params: {
        uri: `mongodb://localhost/dianying-open`,
        options: {}
      }
    }, {
      name: 'wechat'
    }, {
      name: 'router'
    }
  ],
  // 微信开发所有配置信息
  wechat: {
    appId: "wx41cbb84cb6b1c9ee",
    secret: "c1b8b203c9f67a3907f0c9a6c9067a63",
    token: 'ZhangErGouWechatDeveloper',
    tokenCacheFile: path.join(__dirname, '../../', 'cache/tokenCache.txt'),
    ticketCacheFile: path.join(__dirname, '../../', 'cache/ticketCache.txt'),
    api: {
      access_token: {
        get: wechatApiPrefix + 'token?grant_type=client_credential'
      },
      jsapi_ticket: {
        get: wechatApiPrefix + 'ticket/getticket?'
      }
    }
  }
}

if (process.env.NODE_ENV == 'local' || process.env.NODE_ENV == 'development') {
  config = _.assign(config, local);
}

module.exports = config