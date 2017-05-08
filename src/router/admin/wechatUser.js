/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/5/8
 * @description 微信用户路由
 *
 */

const {isLogin} = require('../../controller/admin/publicController');
const {getWechatUser} = require('../../controller/admin/wechatUserController');

module.exports = router => {
	router.get('/wechat/user', isLogin, getWechatUser);
}