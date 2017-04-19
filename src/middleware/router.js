/**
 * @author zail
 * @time 2017/4/19
 * @email zzzzail@163.com
 * @description 路由
 *
 */

const router = require('koa-router')();
const {getIndex} = require('../controller/indexController');

module.exports = function (app) {
  router.get('/', getIndex);
  router.get('/index', getIndex);

  app
    .use(router.routes())
    .use(router.allowedMethods())
}