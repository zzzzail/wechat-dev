/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/5/8
 * @description 系统设置路由
 *
 */

const {isLogin} = require('../../controller/admin/publicController');
const {
	isUniform,
	getAdminUserId,
	putAdminUserId
} = require('../../controller/admin/systemController');

module.exports = router => {
	router.get('/system/user/:_id', isLogin, isUniform, getAdminUserId);
	router.put('/system/user/:_id', isLogin, isUniform, putAdminUserId);
}