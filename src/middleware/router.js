/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/4/19
 * @description 路由
 *
 */

const router = require('koa-router')();
const {getIndex, getLogin} = require('../controller/indexController');

module.exports = function (app) {
  router.get('/', getIndex);
  router.get('/login', getLogin);
  router.get('/index', getIndex);

  app
    .use(router.routes())
    .use(router.allowedMethods())
}