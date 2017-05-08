/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/5/8
 * @description 回复路由
 *
 */

const {isLogin} = require('../../controller/admin/publicController');
const {
	getReplyWelcome,
	getReplyAuto,
	getReplyAutoEdit,
	postReplyAutoEdit,
	putReplyAutoEdit,
	deleteReplyAutoEdit
} = require('../../controller/admin/replyController');

module.exports = router => {
	// 回复管理
	router.get('/reply/welcome', isLogin, getReplyWelcome);
	router.get('/reply/auto', isLogin, getReplyAuto);
	router.get('/reply/auto/:_id', isLogin, getReplyAutoEdit);
	router.post('/reply/auto/:_id', isLogin, postReplyAutoEdit);
	router.put('/reply/auto/:_id', isLogin, putReplyAutoEdit);
	router.delete('/reply/auto/:_id', isLogin, deleteReplyAutoEdit);
}