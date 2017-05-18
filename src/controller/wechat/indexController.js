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
  let userInfo = await ctx.wechat.getUserInfo(siteAccessToken.access_token, siteAccessToken.openid);
  let openid = userInfo.openid; // 唯一标示
  let nickname = userInfo.nickname; // 昵称
  let sex = userInfo.sex; // 性别, 值为1时是男性,值为2时是女性,值为0时是未知
  let country = userInfo.country; // 国家
  let province = userInfo.province; // 省份
  let city = userInfo.city; // 城市
  let headimgurl = userInfo.headimgurl; // 用户头像
  let privilege = userInfo.privilege; // 用户特权信息，json 数组，如微信沃卡用户为（chinaunicom）
  let unionid = userInfo.unionid; // 只有用户绑定到微信开放平台账号后,才会出现该字段.

  return ctx.render('wechat/login', {
    openid,
    nickname,
    sex,
    country,
    province,
    city,
    headimgurl,
    privilege: privilege.toString(),
    unionid
  });
}
