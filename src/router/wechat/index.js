/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/5/10
 * @description
 *
 */

const router = new require('koa-router')({
	prefix: '/wechat'
});
const {
  getIndex,
  getLogin
} = require('../../controller/wechat/indexController');

module.exports = function () {
  
  // 首页
  router.get('/', getIndex);
  router.get('/index', getIndex);
  router.get('/login', getLogin);
  
  // open
  require('./open')(router);
  
  // album
  require('./album')(router);
  
  return router;
}
