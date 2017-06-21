/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/4/24
 * @description
 */

const sha1 = require('sha1')

// 判断登录用户和传入id是否一致
exports.isUniform = async (ctx, next) => {
  const AdminUser = ctx.mongoose.model('admin-user')
  let _id = ctx.params._id
  let user = await AdminUser.findOne({_id: _id}).exec()
  let loginUser = ctx.state._loginUser
  if (loginUser._id.toString() != user._id.toString()) {
    return ctx.redirect('/admin/logout')
  }
  await next()
}

// 个人资料
exports.getAdminUserId = async (ctx, next) => {
  return ctx.render('admin/system/user')
}

// 修改个人资料
exports.putAdminUserId = async (ctx, next) => {
  let email = ctx.body.email
  let phone = ctx.body.phone
  let nickname = ctx.body.nickname
  let password = ctx.body.password

  let user = ctx.state._loginUser
  user.email = email
  user.phone = phone
  user.nickname = nickname
  if (password) {
    user.password = sha1(password)
  }

  user = await user.save()

  return ctx.body = {
    success: true
  }
}