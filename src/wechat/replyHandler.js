/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/4/21
 * @description
 */

module.exports = function (message) {
  if (message.MsgType == 'event') {
    if (message.Event == 'subscribe') {
      return '谢谢您订阅点影,';
    } else if (message.event == 'unsubscribe') {
      console.log('无情取关');
      return '';
    } else if (message.Event == 'LOCATION') {
      return `您所在的位置是, ${message.Latitude} / ${message.Longitude} - ${message.Precision}`;
    } else if (message.Event == 'CLICK') {
      return `点击了${message.EventKey}`;
    } else if (message.Event == 'VIEW') {
      return `打开网页 ${message.EventKey}`;
    } else {
      return '';
    }
  } else if (message.MsgType == 'text') {
    let content = message.Content;
    let reply = `额, 您说的'${content}'太复杂了.`;

    // 回复策略
    if (content == '1') {
      reply = '您回复的1, 我不知道回复啥';
    } else if (content == '2') {
      reply = [{
        title: '张二狗的日常测试',
        description: '张二狗的日常测试, 这是一个无法描述的工作量, 其工作量之巨大, 工作之艰难, 难以言表',
        picUrl: 'http://loocall.com/imgv2/logo.jpg',
        url: 'http://loocall.com'
      }]
    } else if (content == '3') {
      reply = {
        type: 'image',
        mediaId: 'http://loocall.com/imgv2/logo.jpg'
      }
    }

    return reply;
  }

  return '欢迎回复';
}