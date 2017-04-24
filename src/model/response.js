/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/4/24
 * @description 回复model, 欢迎语和自动回复
 */

const mongoose = require('mongoose');
const Schema = mongoose.Schema;

const responseModel = new Schema({
  keyword: String, // 关键字
  response: Object, // 根据关键字回复内容
  enable: Boolean, // 是否启用
});

responseModel.index({request: 1});

module.exports = mongoose.model('Response', responseModel);