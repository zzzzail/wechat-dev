/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/5/18
 * @description
 *
 */

const router = new require('koa-router')({
  prefix: '/common'
});
const {
  postSendCellCode
} = require('../../controller/common/indexController');

module.exports = function () {
  
  router.post('/sendCelCode', postSendCellCode);
  
  return router;
}
