/**
 * @author zail
 * @email zzzzail@163.com
 * 2017/4/19
 * @description 配置文件
 *
 */

const path = require('path');
const _ = require('lodash');
const staticDir = path.join(__dirname, '../../public');
const viewDir = path.join(__dirname, '../../public/views');

let config = {
  title: '点影微信服务号',
  env: 'production',
  appName: 'wechat-open',
  port: 4800,
  keys: '',
  middleware: [
    {
      name: 'initial'
    }, {
      name: 'bodyparser',
      params: {}
    }, {
      name: 'koa-static',
      params: staticDir
    }, {
      name: 'ejs',
      params: {
        root: viewDir,
        layout: false,
        viewExt: 'ejs',
        cache: true,
        debug: true
      }
    }, {
      name: 'mongoose',
      params: {
        uri: `mongodb://localhost/dianying-open`,
        options: {}
      }
    }, {
      name: 'router'
    }
  ]
}

if (process.env.NODE_ENV == 'local' || process.env.NODE_ENV == 'development') {
  config = _.assign(config, local);
}

module.exports = config