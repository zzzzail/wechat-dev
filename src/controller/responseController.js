/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/4/21
 * @description 回复controller
 */

exports.getResponseWelcome = async (ctx, next) => {
  return ctx.render('response/welcome');
}

exports.getResponseAuto = async (ctx, next) => {
  return ctx.render('response/auto');
}