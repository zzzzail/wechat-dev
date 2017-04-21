/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/4/21
 * @description
 */

module.exports = function (info) {
  let contentXml = '';

  switch (info.msgType) {
    case 'text': {
      contentXml = `
        <MsgType><![CDATA[${info.msgType}]]></MsgType>
        <Content><![CDATA[${info.content}]]></Content>`;
    }
    case 'image': {
      contentXml = `
        <MsgType><![CDATA[${info.msgType}]]></MsgType>
        <Image>
          <MediaId><![CDATA[${info.content.mediaId}]]></MediaId>
        </Image>`;
    }
    case 'voice': {
      contentXml = `
      <MsgType><![CDATA[${info.msgType}]]></MsgType>
      <Voice>
        <MediaId><![CDATA[${info.content.mediaId}]]></MediaId>
      </Voice>`;
    }
    case 'video': {
      contentXml = `
      <MsgType><![CDATA[${info.msgType}]]></MsgType>
      <Video>
        <MediaId><![CDATA[${info.content.mediaId}]]></MediaId>
        <Title><![CDATA[${info.content.title}]]></Title>
        <Description><![CDATA[${info.content.description}]]></Description>
      </Video> `;
    }
    case 'music': {
      contentXml = `
      <MsgType><![CDATA[${info.msgType}]]></MsgType>
      <Music>
        <Title><![CDATA[${info.content.title}]]></Title>
        <Description><![CDATA[${info.content.description}]]></Description>
        <MusicUrl><![CDATA[${info.content.musicUrl}]]></MusicUrl>
        <HQMusicUrl><![CDATA[${info.content.hqMusicUrl}]]></HQMusicUrl>
        <ThumbMediaId><![CDATA[${info.content.thumbMediaId}]]></ThumbMediaId>
      </Music>`;
    }
    case 'news': {
      let articles = '';
      info.content.forEach(item => {
        articles += `
        <item>
          <Title><![CDATA[${item.title}]]></Title> 
          <Description><![CDATA[${item.description}]]></Description>
          <PicUrl><![CDATA[${item.picUrl}]]></PicUrl>
          <Url><![CDATA[${item.url}]]></Url>
        </item>`;
      })
      contentXml = `
      <MsgType><![CDATA[${info.msgType}]]></MsgType>
      <ArticleCount>${info.content.length}</ArticleCount>
      <Articles>
        ${articles}
      </Articles>`;
    }
    default:
      contentXml = `
        <MsgType><![CDATA[text]]></MsgType>
        <Content><![CDATA[ ]]></Content>`;
  }

  let xml = `
    <xml>
      <ToUserName><![CDATA[${info.toUserName}]]></ToUserName>
      <FromUserName><![CDATA[${info.fromUserName}]]></FromUserName>
      <CreateTime>${info.createTime}</CreateTime>
      ${contentXml}
    </xml>`;

  return xml;
}