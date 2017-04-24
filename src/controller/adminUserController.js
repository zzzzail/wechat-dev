/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/4/24
 * @description
 */

// 系统管理员管理
exports.getAdminUser = async (ctx, next) => {
  let user = ctx.state._loginUser;
  console.log(user);
  return ctx.render('admin/user');
}