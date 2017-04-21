/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/4/19
 * @description 首页controller
 */

const sha1 = require('sha1');
const config = require('../config/config');

exports.getLogin = async (ctx, next) => {
  return ctx.render('login');
}

exports.getIndex = async (ctx, next) => {
  return ctx.render('index');
}