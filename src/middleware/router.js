/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/4/19
 * @description 路由
 *
 */

const router = require('koa-router')();
const {getLogin, postLogin, isLogin, getIndex} = require('../controller/indexController');

module.exports = function (app) {
  router.get('/login', getLogin);
  router.post('/login', postLogin);
  router.get('/', isLogin, getIndex);
  router.get('/index', isLogin, getIndex);

  app
    .use(router.routes())
    .use(router.allowedMethods())
}