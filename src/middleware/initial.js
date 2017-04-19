/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/4/19
 * @description 第一个中间件
 */

const config = require('../config/config');

module.exports = function (app) {
  app.keys = config.keys;

  app.use(async (ctx, next) => {
    ctx.state.title = config.title;
    ctx.state.moment = require('moment');
    ctx.state._ = require('lodash');
    await next();
  })

  // 解决 404, 500 的问题
  app.use(async (ctx, next) => {
    try {
      await next();
    } catch (err) {
      console.log(err);
      ctx.status = 500;
      ctx.body = '500 服务器错误.';
    }
    if (parseInt(ctx.status) == 404) {
      ctx.body = '404 页面不存在.';
    }
  })
}