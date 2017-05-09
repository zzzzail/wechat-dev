/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/4/21
 * @description
 */

let cache = {};

module.exports = async function (message) {
	let ctx = this;
	const Response = ctx.mongoose.model('admin-reply');
	const Material = ctx.mongoose.model('admin-material');
	let content = message.Content;
	let reply = '';
	if (message.MsgType == 'event') {
		let response;
		if (message.Event == 'subscribe') {
			response = await Response.findOne({keyword: {$in: ['subscribe']}}).exec();
		}
		if (message.Event == 'unsubscribe') {
			response = await Response.findOne({keyword: {$in: ['unsubscribe']}}).exec();
		}
		if (message.Event == 'LOCATION') {
			response = await Response.findOne({keyword: {$in: ['LOCATION']}}).exec();
		}
		if (message.Event == 'CLICK') {
			response = await Response.findOne({keyword: {$in: ['CLICK']}}).exec();
		}
		if (message.Event == 'VIEW') {
			response = await Response.findOne({keyword: {$in: ['VIEW']}}).exec();
		}
		// 电子相册事件
		if (message.Event == 'pic_photo_or_album') {
		  let key = message.EventKey;
      cache[message.FromUserName] = key;
    }
		let material;
		
		if (response) {
			if (response.type == 'text') {
				reply = response.content;
			} else {
				material = await Material.findOne({_id: response.content}).exec();
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
		let response = await Response.findOne({keyword: {$in: [content]}}).exec();
		let material;
		if (response) {
			if (response.type == 'text') {
				reply = response.content;
			} else {
				material = await Material.findOne({_id: response.content}).exec();
			}
			if (response.type == 'image') {
				reply = {
					type: 'image',
					content: {
						mediaId: material.wechat.media_id
					}
				}
			}
			if (response.type == 'voice') {
				reply = {
					type: 'voice',
					content: {
						mediaId: material.wechat.media_id
					}
				}
			}
			if (response.type == 'video') {
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
	  let key;
	  // 缓存中有用户的key则为电子相册事件
	  if (cache[message.FromUserName]) {
	    key = cache[message.FromUserName];
      cache[message.FromUserName] = null;
	    console.log(key);
	    
    } else {
	    console.log('不是电子相册!');
    }
  }
	
	return reply;
}
