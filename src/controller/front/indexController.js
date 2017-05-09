/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/5/9
 * @description
 *
 */

// 微信jssdk
exports.getOpenWechatJs = async (ctx, next) => {
  let tokenData = await ctx.wechat.getAccessToken();
  let ticketData = await ctx.wechat.getJsapiTicket(tokenData);
  let ticket = ticketData.ticket;
  let url = ctx.headers.referer || ctx.href;
  if (url) {
    let params = ctx.wechat.createSign(ticket, url);
    params.appId = ctx.wechat.appId;
    ctx.type = "application/javascript";
    return ctx.body = `
			wx.config({
			  debug: false,
			  appId: '${params.appId}',
			  timestamp: ${params.timestamp},
			  nonceStr: '${params.noncestr}',
			  signature: '${params.signature}',
			  jsApiList: [
				  'onMenuShareTimeline',
					'onMenuShareAppMessage',
					'onMenuShareQQ',
					'onMenuShareWeibo',
					'onMenuShareQZone',
					'startRecord',
					'stopRecord',
					'onVoiceRecordEnd',
					'playVoice',
					'pauseVoice',
					'stopVoice',
					'onVoicePlayEnd',
					'uploadVoice',
					'downloadVoice',
					'chooseImage',
					'previewImage',
					'uploadImage',
					'downloadImage',
					'translateVoice',
					'getNetworkType',
					'openLocation',
					'getLocation',
					'hideOptionMenu',
					'showOptionMenu',
					'hideMenuItems',
					'showMenuItems',
					'hideAllNonBaseMenuItem',
					'showAllNonBaseMenuItem',
					'closeWindow',
					'scanQRCode',
					'chooseWXPay',
					'openProductSpecificView',
					'addCard',
					'chooseCard',
					'openCard'
			  ]
			});
		`
  }
}

// 首页
exports.getIndex = async (ctx, next) => {
  return ctx.render('front/index');
}
