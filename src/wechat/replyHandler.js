/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/4/21
 * @description
 */

const path = require('path');
const downloadFile = require('../util/downloadFile');
let cache = {};

module.exports = async function (message) {
	let ctx = this;
	const Reply = ctx.mongoose.model('admin-reply');
	const Material = ctx.mongoose.model('admin-material');
	let content = message.Content;
	let reply = '';
	if (message.MsgType == 'event') {
		let reply;
		if (message.Event == 'subscribe') {
			reply = await Reply.findOne({keyword: {$in: ['subscribe']}}).exec();
		}
		if (message.Event == 'unsubscribe') {
			reply = await Reply.findOne({keyword: {$in: ['unsubscribe']}}).exec();
		}
		if (message.Event == 'LOCATION') {
			reply = await Reply.findOne({keyword: {$in: ['LOCATION']}}).exec();
		}
		if (message.Event == 'CLICK') {
			reply = await Reply.findOne({keyword: {$in: ['CLICK']}}).exec();
		}
		if (message.Event == 'VIEW') {
			reply = await Reply.findOne({keyword: {$in: ['VIEW']}}).exec();
		}
		// 电子相册事件
		if (message.Event == 'pic_photo_or_album') {
		  let key = message.EventKey;
      cache[message.FromUserName] = key;
    }
		let material;
		
		if (reply) {
			if (reply.type == 'text') {
				reply = reply.content;
			} else {
				material = await Material.findOne({_id: reply.content}).exec();
			}
			if (content.type == 'image') {
				reply = {
					type: 'image',
					content: {
						mediaId: material.wechat.media_id
					}
				}
			}
			if (content.type == 'voice') {
				reply = {
					type: 'voice',
					content: {
						mediaId: material.wechat.media_id
					}
				}
			}
			if (content.type == 'video') {
				reply = {
					type: 'video',
					content: {
						mediaId: material.wechat.media_id,
						title: material.description.title,
						description: material.description.introduction
					}
				}
			}
		}
	} else if (message.MsgType == 'text') {
		let reply = await Reply.findOne({keyword: {$in: [content]}}).exec();
		let material;
		if (reply) {
			if (reply.type == 'text') {
				reply = reply.content;
			} else {
				material = await Material.findOne({_id: reply.content}).exec();
			}
			if (reply.type == 'image') {
				reply = {
					type: 'image',
					content: {
						mediaId: material.wechat.media_id
					}
				}
			}
			if (reply.type == 'voice') {
				reply = {
					type: 'voice',
					content: {
						mediaId: material.wechat.media_id
					}
				}
			}
			if (reply.type == 'video') {
				reply = {
					type: 'video',
					content: {
						mediaId: material.wechat.media_id,
						title: material.description.title,
						description: material.description.introduction
					}
				}
			}
		}
	} else if (message.MsgType == 'image') {
    const WechatAlbum = ctx.mongoose.model('wechat-album');
    
    // 缓存中有用户的key则为电子相册事件
    let key;
    if (cache[message.FromUserName]) {
      key = cache[message.FromUserName];
      let album;
      let uri = await downloadFile(message.PicUrl, path.join(__dirname, '../../public/upload/wechat/album'));
      uri = uri.substring(uri.lastIndexOf('/upload'));
	    if (key == 'create') { // 创建电子相册
        cache[message.FromUserName] = 'add';
        album = new WechatAlbum({
          openId: message.FromUserName,
          title: '这个相册里有我的照片和故事,打开看看吧.',
          list: [{
            wechatUrl: message.PicUrl,
            uri: uri
          }]
        });
      } else if (key == 'add') { // 增加到相册
        album = await WechatAlbum.findOne({openId: message.FromUserName}).sort({'meta.createAt': -1}).exec();
        if (!album) {
          album = new WechatAlbum({
            openId: message.FromUserName,
            title: '这个相册里有我的照片和故事,打开看看吧.',
            list: []
          })
        }
        album.list.push({
          wechatUrl: message.PicUrl,
          uri: uri
        })
      }
  
      await album.save();
	    
      reply = `<a href="http://open.shuitagushi.com/wechat/album/${album._id}">
          已收到您的图片,点击这里开始制作
        </a>
        <br>
        点击"添加图片"上传更多图片`;
    } else {
	    console.log('不是电子相册!');
    }
  }
	
	return reply;
}
