/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/4/26
 * @description 素材
 */

const mongoose = require('mongoose');
const Schema = mongoose.Schema;

const materialSchema = new Schema({
  type: String,
  uri: String,
  wechat: {
    media_id: String,
    url: String
  }
});

module.exports = mongoose.model('Material', materialSchema)