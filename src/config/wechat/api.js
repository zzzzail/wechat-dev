/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/5/16
 * @description 微信开发接口 API
 * 
 */

const wechatApiPrefix = 'https://api.weixin.qq.com/cgi-bin/'

module.exports = {
  access_token: {
    get: wechatApiPrefix + 'token?grant_type=client_credential&'
  },
  site_access_token: {
    get: 'https://api.weixin.qq.com/sns/oauth2/access_token?'
  },
  jsapi_ticket: {
    get: wechatApiPrefix + 'ticket/getticket?'
  },
  materialForever: {
    post: wechatApiPrefix + 'material/add_material?',
    del: wechatApiPrefix + 'material/del_material?'
  },
  user_info: {
    get: "https://api.weixin.qq.com/sns/userinfo?"
  }
}
