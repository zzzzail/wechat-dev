/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/4/21
 * @description
 */

module.exports = async function (message) {
	let ctx = this;
	const Response = ctx.mongoose.model('Response');
	const Material = ctx.mongoose.model('Material');
	let content = message.Content;
	let reply = ' ';
	if (message.MsgType == 'event') {
		let response;
		if (message.Event == 'subscribe') {
			response = await Response.findOne({keyword: {$in: ['subscribe']}}).exec();
		}
		if (message.event == 'unsubscribe') {
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
				console.log('material', material);
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
	}
	
	return reply;
}