/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/5/9
 * @description
 *
 */

const Promise = require('bluebird');
const request = Promise.promisify(require('request'));
const wechatCfg = require('../../config/wechatConfig');

exports.getAlbumIndex = async (ctx, next) => {
	let code = ctx.query.code;
	let state = ctx.query.state;
	if(!code || !state) {
		return ctx.redirect(`https://open.weixin.qq.com/connect/oauth2/authorize?appid=${wechatCfg.appId}&redirect_uri=${ctx.href}&response_type=code&scope=snsapi_userinfo&state=STATE#wechat_redirect`)
	}

	let getSiteAccessTokenUrl = `https://api.weixin.qq.com/sns/oauth2/access_token?appid=${wechatCfg.appId}&secret=${wechatCfg.secret}&code=${code}&grant_type=authorization_code`;
	let siteAccessToken = await request(getSiteAccessTokenUrl);
	const getSiteAccessToken = ctx.wechat.getSiteAccessToken;
	let siteAccessToken = await getSiteAccessToken(siteAccessToken.body.refresh_token);

	console.log(siteAccessToken);

	return ctx.body = '登录成功'
}