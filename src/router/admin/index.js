/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/5/8
 * @description
 *
 */

const router = new require('koa-router')({
	prefix: '/admin'
});
const {isLogin} = require('../../controller/admin/publicController');
const {
	getLogin,
	postLogin,
	getLogout,
	getIndex
} = require('../../controller/admin/indexController');

module.exports = function () {
	
	router.get('/login', getLogin);
	router.post('/login', postLogin);
	router.get('/logout', getLogout);
	router.get('/', isLogin, getIndex);
	router.get('/index', isLogin, getIndex);
	
	// 素材管理路由
	require('./material')(router);
	
	// 自动回复管理路由
	require('./reply')(router);
	
	// 系统管理管理路由
	require('./system')(router);
	
	// 微信用户管理路由
	require('./wechatUser')(router);
	
	return router;
}