/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/4/19
 * @description 首页controller
 */

exports.getIndex = async (ctx, next) => {
  console.log(ctx.query);
  const {
    getAccessToken,
    getJsapiTicket,
    createSign
  } = ctx.wechat;
  const tokenData = await getAccessToken();

  return ctx.render('index');
}