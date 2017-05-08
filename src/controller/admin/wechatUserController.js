/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/4/26
 * @description
 */

exports.getWechatUser = async (ctx, next) => {
  return ctx.render('admin/wechatUser/index')
}