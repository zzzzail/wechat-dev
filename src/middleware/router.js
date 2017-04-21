/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/4/19
 * @description 路由
 *
 */

const router = require('koa-router')();
const {getLogin, postLogin, isLogin, getIndex} = require('../controller/indexController');
const {getAutoResponse} = require('../controller/responseController');

module.exports = function (app) {
  router.get('/login', getLogin);
  router.post('/login', postLogin);
  router.get('/', isLogin, getIndex);
  router.get('/index', isLogin, getIndex);
  router.get('/auto-response', isLogin, getAutoResponse);

  app
    .use(router.routes())
    .use(router.allowedMethods())
}