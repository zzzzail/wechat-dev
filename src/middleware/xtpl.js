/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/4/21
 * @description
 *
 */

const convert = require('koa-convert');
const hbs = require('koa-hbs');
const co = require('co');

module.exports = function (app, params) {
	app.use(convert(hbs.middleware(params)));
	
	app.use(async (ctx, next) => {
		const render = ctx.render;
		ctx.render = async function _convertedRender() {
			return co.call(ctx, render.apply(ctx, arguments));
		}
		await next();
	});
	
}