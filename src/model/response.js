/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/4/24
 * @description 回复model, 欢迎语和自动回复
 */

const mongoose = require('mongoose');
const Schema = mongoose.Schema;

let responseModel = new Schema({
  // 回复类型
  type: String,
  // 关键字
  keyword: Array,
  // 匹配规则 'exact': 完全匹配
  rule: String,
  // 根据关键字回复内容 String OR ObjectId
  content: String,
  // 是否启用
  enable: Boolean
});

responseModel.index({keyword: 1});

module.exports = mongoose.model('Response', responseModel);