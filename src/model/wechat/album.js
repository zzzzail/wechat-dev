/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/5/9
 * @description 电子相册
 *
 */

const mongoose = require('mongoose');
const Schema = mongoose.Schema;

let albumSchema = new Schema({
  openId: String, // 微信 OpenID
  title: String, // 标题
  template: String, // 模版名称
  list: [ // 图片列表
    {
      _id: false,
      wechatUrl: String, // 腾讯系域名链接
      uri: String // 本域名 uri
    }
  ],
  meta: { // 元数据
    _id: false,
    likes: {
      type: Number,
      default: 0
    },
    views: { // 浏览次数
      type: Number,
      default: 0
    },
    shares: { // 分享次数
      type: Number,
      default: 0
    },
    createAt: {
      type: Date,
      default: Date.now()
    },
    updateAt: {
      type: Date,
      default: Date.now()
    }
  }
});

// 索引
albumSchema.index({openId: 1});

// 更新 updateAt
albumSchema.pre('save', function (next) {
  if (!this.isNew) {
    this.meta.updateAt = Date.now();
  }
  next();
});

module.exports = mongoose.model('wechat-album', albumSchema);
