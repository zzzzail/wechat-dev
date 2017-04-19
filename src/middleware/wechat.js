/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/4/19
 * @description
 */

const Wechat = require('../wechat');

module.exports = function(app) {

  const wechat = new Wechat();

  app.use(async(ctx, next) => {
    ctx.wechat = wechat;
    await next();
  });

}
