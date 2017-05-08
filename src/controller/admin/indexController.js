/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/4/19
 * @description 首页controller
 *
 */

const sha1 = require('sha1');

exports.getLogin = async (ctx, next) => {
  if (ctx.session.userToken) {
    return ctx.redirect('/admin/index');
  }
  return ctx.render('login');
}

exports.postLogin = async (ctx, next) => {
  let username = ctx.body.username;
  let password = ctx.body.password;
  const AdminUser = ctx.mongoose.model('admin-user');

  if (username && password) {
    let user = await AdminUser.findOne({username: username}).exec();
    if (sha1(password) == user.password) {
      ctx.session.userToken = {
        username,
        password: sha1(password)
      }
    } else {
      return ctx.render('login', {errorMsg: '密码错误, 请重新登录.'});
    }
  }
  return ctx.redirect('/admin/index');
}

exports.getLogout = async (ctx, next) => {
  ctx.session.userToken = null;
  return ctx.redirect('/admin/login');
}

exports.getIndex = async (ctx, next) => {
  return ctx.render('index');
}