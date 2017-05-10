/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/4/27
 * @description 微信开发所有配置信息
 *
 */

const path = require('path');
const wechatApiPrefix = 'https://api.weixin.qq.com/cgi-bin/';

module.exports = {
  appId: "wx41cbb84cb6b1c9ee",
  secret: "c1b8b203c9f67a3907f0c9a6c9067a63",
  token: 'ZhangErGouWechatDeveloper',
  tokenCacheFile: path.join(__dirname, '../../', 'cache/wechat/tokenCache.txt'),
  siteTokenCacheFile: path.join(__dirname, '../../', 'cache/wechat/siteTokenCache.txt'),
  ticketCacheFile: path.join(__dirname, '../../', 'cache/wechat/ticketCache.txt'),
  api: {
    access_token: {
      get: wechatApiPrefix + 'token?grant_type=client_credential&'
    },
    site_access_token: {
      get: 'https://api.weixin.qq.com/sns/oauth2/?'
    },
    jsapi_ticket: {
      get: wechatApiPrefix + 'ticket/getticket?'
    },
    materialForever: {
      post: wechatApiPrefix + 'material/add_material?',
      del: wechatApiPrefix + 'material/del_material?'
    }
  }
}