/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/5/10
 * @description
 *
 */

const router = new require('koa-router')({
	prefix: '/wechat'
})
const {
  getIndex,
  getLogin
} = require('../controller/wechat/indexController')
const {
  getOpenWechatJs
} = require('../controller/wechat/openController')
const {
  getAlbumList,
  getAlbumArticle,
  getAlbumTemplate
} = require('../controller/wechat/albumController')

module.exports = function () {
  // 首页
  router.get('/', getIndex)
  router.get('/index', getIndex)
  router.get('/login', getLogin)
  
  // open
  router.get('/open/js/wechat.js', getOpenWechatJs)
  
  // album
  router.get('/album/list', getAlbumList)
  router.get('/album/:_id', getAlbumArticle)
  router.get('/album/template', getAlbumTemplate)
  
  return router
}
