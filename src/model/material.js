/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/4/26
 * @description 素材
 */

const mongoose = require('mongoose');
const Schema = mongoose.Schema;

let materialSchema = new Schema({
  // 素材名称
  name: String,
  // 素材类型
  type: String,
  // 素材本域名下的uri
  uri: String,
  // 素材说明
  description: Object,
  wechat: {
    // 微信媒体id
    media_id: String,
    // 微信url, 只可在腾讯系域名下访问
    url: String
  }
});

module.exports = mongoose.model('Material', materialSchema)