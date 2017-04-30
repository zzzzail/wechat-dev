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
const viewPath = path.join(__dirname, '../../public/views');
const local = require('./local');

let config = {
  version: '1.0.0',
  title: '点影微信服务号', // 网站标题
  keywords: '点影微信服务号', // 网站关键字
  description: '管理点影微信公众号', // 网站说明
  company: '洛客科技 loocall', // 公司名称
  telephone: '', // 公司电话
  icp: '', // 网站备案号
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
        strict: false,
        formidable: {
          keepExtensions: true, // 保留上传文件格式
          maxFieldsSize: (10 * 1024 * 1024),
          uploadDir: path.join(__dirname, '../../public/upload')
        }
      }
    }, {
      name: 'koa-static',
      params: staticDir
    }, {
      name: 'xtpl',
      params: {
	      viewPath: viewPath,
	      partialsPath: path.join(viewPath, 'partials'),
	      defaultLayout: 'layout',
	      disableCache: false
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
  wechat: require('./wechatConfig')
}

if (process.env.NODE_ENV == 'local' || process.env.NODE_ENV == 'development') {
  config = _.assign(config, local);
}

module.exports = config