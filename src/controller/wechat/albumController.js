/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/5/9
 * @description
 *
 */

const wechatCfg = require('../../config/wechatConfig');

exports.getAlbumIndex = async (ctx, next) => {
	console.log(ctx.href)
	let redirectUrl = 'http://open.shuitagushi.com/wechat/album';

	return ctx.redirect(`https://open.weixin.qq.com/connect/oauth2/authorize?appid=${wechatCfg.appId}&redirect_uri=${redirectUrl}&response_type=get&scope=snsapi_userinfo&state=STATE#wechat_redirect`)
}