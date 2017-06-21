/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/5/16
 * @description 微信缓存文件
 *
 */

const path = require('path')

module.exports = function(prefix) {
	prefix = prefix ? (prefix + '-') : 'zail-'
  return {
    accessToken: path.join(__dirname, '../../../', `cache/wechat/${prefix}access-token.txt`),
    siteAccessToken: path.join(__dirname, '../../../', `cache/wechat/${prefix}site-access-token.txt`),
    ticket: path.join(__dirname, '../../../', `cache/wechat/${prefix}ticket.txt`)
  }
}
