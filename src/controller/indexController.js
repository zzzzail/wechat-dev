/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/4/19
 * @description 首页controller
 */

exports.getIndex = async (ctx, next) => {
  const {
    getAccessToken,
    getJsapiTicket,
    createSign
  } = ctx.wechat;
  const tokenData = await getAccessToken();
  const ticketData = await getJsapiTicket(tokenData);
  const ticket = ticketData.ticket;
  const url = ctx.href;
  const params = createSign(ticket, url);
  params.appId = ctx.wechat.appId;

  return ctx.render('index', params);
}