/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/5/9
 * @description
 *
 */

const router = new require('koa-router')();
const {getOpenWechatJs, getIndex} = require('../../controller/front/indexController');

module.exports = function () {
  router.get('/open/js/wechat.js', getOpenWechatJs)
  router.get('/', getIndex);
  router.get('/index', getIndex);
  
  return router;
}
