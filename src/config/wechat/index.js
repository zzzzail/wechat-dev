/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/5/16
 * @description 微信配置
 *
 */

module.exports = {
  appId: "wx41cbb84cb6b1c9ee",
  secret: "c1b8b203c9f67a3907f0c9a6c9067a63",
  token: 'wx41cbb84cb6b1c9ee',
  cache: require('./cache')('dyfwh'),
  api: require('./api')
}
