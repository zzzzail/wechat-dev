/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/5/8
 * @description 管理后台 路由
 *
 */

const router = new require('koa-router')({
	prefix: '/admin'
})
const {isLogin} = require('../controller/admin/publicController')
const {
	getLogin,
	postLogin,
	getLogout,
	getIndex
} = require('../controller/admin/indexController')
const {
	getMaterialForever,
	deleteMaterialForever,
	getMaterialList,
	getMaterialForeverUpload,
	postMaterialForeverUpload
} = require('../controller/admin/materialController')
const {
	getReplyWelcome,
	getReplyAuto,
	getReplyAutoEdit,
	postReplyAutoEdit,
	putReplyAutoEdit,
	deleteReplyAutoEdit
} = require('../controller/admin/replyController')
const {
	isUniform,
	getAdminUserId,
	putAdminUserId
} = require('../controller/admin/systemController')
const {
	getWechatUser
} = require('../controller/admin/wechatUserController')

module.exports = function () {
	
	router.get('/login', getLogin)
	router.post('/login', postLogin)
	router.get('/logout', getLogout)
	router.get('/', isLogin, getIndex)
	router.get('/index', isLogin, getIndex)
	
	// 素材管理路由
	router.get('/material/forever', isLogin, getMaterialForever)
	router.delete('/material/forever', isLogin, deleteMaterialForever)
	router.get('/material/list', isLogin, getMaterialList)
	router.get('/material/forever/upload', isLogin, getMaterialForeverUpload)
	router.post('/material/forever/upload', isLogin, postMaterialForeverUpload)
	
	// 自动回复管理路由
	router.get('/reply/welcome', isLogin, getReplyWelcome)
	router.get('/reply/auto', isLogin, getReplyAuto)
	router.get('/reply/auto/:_id', isLogin, getReplyAutoEdit)
	router.post('/reply/auto/:_id', isLogin, postReplyAutoEdit)
	router.put('/reply/auto/:_id', isLogin, putReplyAutoEdit)
	router.delete('/reply/auto/:_id', isLogin, deleteReplyAutoEdit)
	
	// 系统管理管理路由
	router.get('/system/user/:_id', isLogin, isUniform, getAdminUserId)
	router.put('/system/user/:_id', isLogin, isUniform, putAdminUserId)
	
	// 微信用户管理路由
	router.get('/wechat/user', isLogin, getWechatUser)
	
	return router
}