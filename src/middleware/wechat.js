/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/4/19
 * @description
 */

const sha1 = require('sha1');
const config = require('../config/config');
const Wechat = require('../wechat');
const getRawBody = require('raw-body');
const util = require('../wechat/util');

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
    let str = [token, timestamp, nonce].sort().join('');
    let sha = sha1(str);
    if (ctx.method == 'GET') {
      if (sha == signature) {
        return ctx.body = echostr;
      }
      await next();
    } else if (ctx.method == 'POST') {
      if (sha != signature) {
        await next();
      }

      let data = await getRawBody(ctx.req);
      let content = await util.parseXMLAsync(data);
      let message = util.formatMessage(content.xml);
      console.log('微信post数据', message);

      ctx.wechat.reply.call(this, ctx, next, message);
      await next();

      // if (message.MsgType == 'event') {
      //   if (message.Event == 'subscribe') {
      //     let now = new Date().getTime();
      //
      //     ctx.status = 200;
      //     ctx.type = 'application/xml';
      //     return ctx.body = `
      //       <xml>
      //         <ToUserName><![CDATA[${message.FromUserName}]]></ToUserName>
      //         <FromUserName><![CDATA[${message.ToUserName}]]></FromUserName>
      //         <CreateTime>${now}</CreateTime>
      //         <MsgType><![CDATA[text]]></MsgType>
      //         <Event><![CDATA[欢迎您订阅点影公众号.]]></Event>
      //       </xml>
      //     `;
      //   } else if (message.event == 'unsubscribe') {
      //
      //   }
      // } else if (message.MsgType == 'text') {
      //
      // }

    } else {
      await next();
    }

  })

}
