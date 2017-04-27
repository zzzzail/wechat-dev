/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/4/21
 * @description
 */

const mongoose = require('mongoose');
const Schema = mongoose.Schema;

let adminUserSchema = new Schema({
  // 昵称
  nickname: String,
  // 登录用户名
  username: String,
  // 密码
  password: String,
  // 邮箱
  email: String,
  // 手机号码
  phone: String
});

adminUserSchema.index({username: 1});

module.exports = mongoose.model('AdminUser', adminUserSchema);