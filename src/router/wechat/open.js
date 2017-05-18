/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/5/18
 * @description
 *
 */

const {getOpenWechatJs} = require('../../controller/wechat/openController');

module.exports = function (router) {
  router.get('/open/js/wechat.js', getOpenWechatJs);
}
