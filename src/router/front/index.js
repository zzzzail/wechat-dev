/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/5/9
 * @description
 *
 */

const router = new require('koa-router')();
const {getIndex} = require('../../controller/front/indexController');

module.exports = function () {
  // 首页
  router.get('/', getIndex);
  router.get('/index', getIndex);
  
  return router;
}
