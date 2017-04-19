/**
 * @author zail
 * @time 2017/4/19
 * @email zzzzail@163.com
 * @description 首页controller
 */

exports.getIndex = async (ctx, next) => {
  return ctx.render('index');
}