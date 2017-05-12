/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/5/9
 * @description
 *
 */

const Promise = require('bluebird');
const request = Promise.promisify(require('request'));
const cfg = require('../../config/config');
const wechatCfg =  cfg.wechat;
const debug = cfg.debug;

exports.getAlbumList = async (ctx, next) => {
	const Album = ctx.mongoose.model('wechat-album');
	let code = ctx.query.code;
	let state = ctx.query.state;
	
	// 测试
	if (debug) {
		let openId = "or_13wCCOtetkP-GJPJ564SByL1U";
		let albums = await Album.find({openId}).exec();
		return ctx.render('wechat/album/list', {albums});
	}
	
	if(!code || !state) {
		return ctx.redirect(`https://open.weixin.qq.com/connect/oauth2/authorize?appid=${wechatCfg.appId}&redirect_uri=${ctx.href}&response_type=code&scope=snsapi_userinfo&state=STATE#wechat_redirect`)
	}

	let getSiteAccessTokenUrl = `https://api.weixin.qq.com/sns/oauth2/access_token?appid=${wechatCfg.appId}&secret=${wechatCfg.secret}&code=${code}&grant_type=authorization_code`;
	let siteAccessToken = await request(getSiteAccessTokenUrl);
	siteAccessToken = JSON.parse(siteAccessToken.body);

	// const wechat = ctx.wechat;
	// let siteRefreshAccessToken = await wechat.getSiteAccessToken(siteAccessToken.refresh_token);

	let albums = await Album.find({openId: siteAccessToken.openid}).exec();
	return ctx.render('wechat/album/list', {albums});
}

// 相册详情页
exports.getAlbumArticle = async (ctx, next) => {
	const Album = ctx.mongoose.model('wechat-album');
	let _id = ctx.params._id;
	let album = await Album.findOne({_id}).exec();
	if (album) {
		return ctx.render(`wechat/album/template_${album.template}`, {
		  title: album.title,
			list: album.list,
			album
		});
	}
}
