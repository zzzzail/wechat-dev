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

exports.getIndex = async (ctx, next) => {
  
	return ctx.body = '恭喜您登陆成功!';
}

// 微信登录
exports.getLogin = async (ctx, next) => {
  let code = ctx.query.code;
  let state = ctx.query.state;
  if(!code || !state) {
    return ctx.redirect(`https://open.weixin.qq.com/connect/oauth2/authorize?appid=${wechatCfg.appId}&redirect_uri=${ctx.href}&response_type=code&scope=snsapi_userinfo&state=STATE#wechat_redirect`)
  }
  
  let siteAccessToken = await ctx.wechat.getSiteAccessToken(code);
  console.log(siteAccessToken);
  
  return ctx.render('wechat/login');
}
