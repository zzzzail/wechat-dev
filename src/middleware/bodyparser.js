/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/4/19
 * @description
 */

const koaBody = require('koa-body');

module.exports = function (app, param) {
  app.use(koaBody(param));
  app.use(async (ctx, next) => {
    if (ctx.request.method == 'POST' || ctx.request.method == 'PUT') {
      ctx.body = ctx.request.body;
    }
    await next();
  });
}