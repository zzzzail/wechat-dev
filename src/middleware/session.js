/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/4/21
 * @description
 */

const session = require('koa-session');
const convert = require('koa-convert');

module.exports = function (app, params) {
  app.use(convert(session(params, app)));
  app.use(async (ctx, next) => {
    if (ctx.path == '/favicon.ico') return;

    let n = ctx.session.views || 0;
    ctx.session.views = ++n;
    await next();
  })
}