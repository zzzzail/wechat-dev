/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/5/10
 * @description album router
 *
 */

const {
	getAlbumList,
	getAlbumArticle
} = require('../../controller/wechat/albumController');

module.exports = function (router) {  
  router.get('/album/list', getAlbumList);
  router.get('/album/:_id', getAlbumArticle);
  
  return router;
}
