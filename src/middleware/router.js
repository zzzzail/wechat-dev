/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/4/19
 * @description 路由
 *
 */

const router = require('koa-router')();
const {isLogin} = require('../controller/publicController');
const {getLogin, postLogin, getLogout, getIndex} = require('../controller/indexController');
const {
  getResponseWelcome,
  getResponseAuto,
  getResponseAutoEdit,
  postResponseAutoEdit,
	putResponseAutoEdit,
	deleteResponseAutoEdit
} = require('../controller/responseController');
const {isUniform, getAdminUserId, putAdminUserId} = require('../controller/adminController');
const {
  getMaterialForever,
  deleteMaterialForever,
	getMaterialList,
  getMaterialForeverUpload,
  postMaterialForeverUpload} = require('../controller/materialController');
const {getWechatUser} = require('../controller/wechatUserController');

module.exports = function (app) {
  router.get('/login', getLogin);
  router.post('/login', postLogin);
  router.get('/logout', getLogout);
  router.get('/', isLogin, getIndex);
  router.get('/index', isLogin, getIndex);

  // 回复管理
  router.get('/response/welcome', isLogin, getResponseWelcome);
  router.get('/response/auto', isLogin, getResponseAuto);
  router.get('/response/auto/:_id', isLogin, getResponseAutoEdit);
  router.post('/response/auto/:_id', isLogin, postResponseAutoEdit);
	router.put('/response/auto/:_id', isLogin, putResponseAutoEdit);
	router.delete('/response/auto/:_id', isLogin, deleteResponseAutoEdit);

  // 素材管理
  router.get('/material/forever', isLogin, getMaterialForever);
  router.delete('/material/forever', isLogin, deleteMaterialForever);
	router.get('/material/list', isLogin, getMaterialList);
  router.get('/material/forever/upload', isLogin, getMaterialForeverUpload);
  router.post('/material/forever/upload', isLogin, postMaterialForeverUpload)

  // 微信用户管理
  router.get('/wechat/user', isLogin, getWechatUser);

  // 系统设置
  router.get('/admin/user/:_id', isLogin, isUniform, getAdminUserId);
  router.put('/admin/user/:_id', isLogin, isUniform, putAdminUserId);

  app
    .use(router.routes())
    .use(router.allowedMethods())
}