/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/5/10
 * @description album router
 *
 */

const {
	getAlbumList,
	getAlbumArticle,
	getAlbumTemplate
} = require('../../controller/wechat/albumController');

module.exports = function (router) {  
  router.get('/album/list', getAlbumList);
  router.get('/album/:_id', getAlbumArticle);
  router.get('/album/template', getAlbumTemplate);
  
  return router;
}
