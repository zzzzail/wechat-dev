/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/5/9
 * @description
 *
 */

exports.getIndex = async (ctx, next) => {
  
	return ctx.body = '恭喜您登陆成功!';
}

// 微信登录
exports.getLogin = async (ctx, next) => {
  return ctx.render('wechat/login');
}
