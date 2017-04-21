/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/4/21
 * @description 回复controller
 */

exports.getAutoResponse = async (ctx, next) => {
  return ctx.render('response/index');
}