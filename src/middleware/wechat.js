/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/4/19
 * @description
 */

const sha1 = require('sha1');
const config = require('../config/config');
const Wechat = require('../wechat');

module.exports = function (app) {

  const wechat = new Wechat();

  app.use(async (ctx, next) => {
    ctx.wechat = wechat;
    await next();
  });

  app.use(async (ctx, next) => {
    const query = ctx.query;
    let token = config.wechat.token;
    let signature = query.signature;
    let echostr = query.echostr;
    let timestamp = query.timestamp;
    let nonce = query.nonce;
    if (signature && echostr && timestamp && nonce) {
      let str = [token, timestamp, nonce].sort().join('');
      let sha = sha1(str);
      if (sha == signature) {
        return ctx.body = echostr;
      } else {
        return ctx.body = '不要碰爸爸的微信公众号.🙂';
      }
    } else {
      await next();
    }
  })

}
