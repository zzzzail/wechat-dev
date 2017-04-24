/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/4/24
 * @description
 */

// 系统管理员管理
exports.getAdminUser = async (ctx, next) => {
  return ctx.render('admin/user');
}