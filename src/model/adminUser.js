/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/4/21
 * @description
 */

const mongoose = require('mongoose');
const Schema = mongoose.Schema;

const adminUserSchema = new Schema({
  username: String,
  password: String
});

module.exports = mongoose.model('adminUser', adminUserSchema);