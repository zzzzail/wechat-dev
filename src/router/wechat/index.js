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
const {getIndex} = require('../../controller/wechat/indexController');
const {getAlbumIndex} = require('../../controller/wechat/albumController');

module.exports = function () {  
  // 首页
  router.get('/', getIndex);
  router.get('/index', getIndex);

  // album
  router.get('/album', getAlbumIndex);
  
  return router;
}
