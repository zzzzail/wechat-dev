/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/4/19
 * @description 首页controller
 */

exports.getIndex = async (ctx, next) => {
  return ctx.render('index');
}