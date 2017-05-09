/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/4/19
 * @description 路由
 *
 */


module.exports = function (app) {
	let frontRouter = require('../router/front')();
	let adminRouter = require('../router/admin')();
	
  app
    .use(frontRouter.routes())
    .use(frontRouter.allowedMethods());
  app
    .use(adminRouter.routes())
    .use(adminRouter.allowedMethods());
}
