/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/4/19
 * @description 首页controller
 */

const sha1 = require('sha1');
const config = require('../config/config');

exports.getIndex = async (ctx, next) => {
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
    }
  }

  const {
    getAccessToken,
    getJsapiTicket,
    createSign
  } = ctx.wechat;
  const tokenData = await getAccessToken();

  return ctx.render('index');
}