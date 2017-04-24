/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/4/24
 * @description
 */

// 是否登录
exports.isLogin = async (ctx, next) => {
  if (ctx.session.userToken) {
    let userToken = ctx.session.userToken;
    const AdminUser = ctx.mongoose.model('AdminUser');
    let user = await AdminUser.findOne({username: userToken.username}).exec();
    if (user.password == userToken.password) {
      ctx.state._loginUser = user;
      await next();
    } else {
      return ctx.render('login', {errorMsg: '登录过期, 请重新登录.'});
    }
  } else {
    return ctx.redirect('/login');
  }
}