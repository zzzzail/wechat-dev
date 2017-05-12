/**
 * @author zail
 * @email zzzzail@163.com
 * @deprecated  2017/5/12
 * @description 模版 model
 * 
 */

const mongoose = require('mongoose');
const Schema = mongoose.Schema;

let templateSchema = new Schema({
	name: String,
	thum: String
});

module.exports = mongoose.model('wechat-template', templateSchema)