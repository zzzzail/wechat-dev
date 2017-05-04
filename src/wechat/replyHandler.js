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
		} else if (message.event == 'unsubscribe') {
			response = await Response.findOne({keyword: {$in: ['unsubscribe']}}).exec();
		} else if (message.Event == 'LOCATION') {
			response = await Response.findOne({keyword: {$in: ['LOCATION']}}).exec();
		} else if (message.Event == 'CLICK') {
			response = await Response.findOne({keyword: {$in: ['CLICK']}}).exec();
		} else if (message.Event == 'VIEW') {
			response = await Response.findOne({keyword: {$in: ['VIEW']}}).exec();
		}
		let material;
		
		if (response) {
			if (response.type == 'text') {
				return response.content;
			} else {
				material = await Material.findOne({_id: response.content}).exec();
			}
			if (content.type == 'image') {
				return {
					type: 'image',
					content: {
						mediaId: material.wechat.media_id
					}
				}
			}
			if (content.type == 'voice') {
				return {
					type: 'voice',
					content: {
						mediaId: material.wechat.media_id
					}
				}
			}
			if (content.type == 'video') {
				return {
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
		console.log('text', content);
		let response = await Response.findOne({keyword: {$in: [content]}}).exec();
		console.log('response', response);
		let material;
		if (response) {
			if (response.type == 'text') {
				return response.content;
			} else {
				material = await Material.findOne({_id: response.content}).exec();
				console.log('material', material);
			}
			if (response.type == 'image') {
				return {
					type: 'image',
					content: {
						mediaId: material.wechat.media_id
					}
				}
			}
			if (response.type == 'voice') {
				return {
					type: 'voice',
					content: {
						mediaId: material.wechat.media_id
					}
				}
			}
			if (response.type == 'video') {
				return {
					type: 'video',
					content: {
						mediaId: material.wechat.media_id,
						title: material.description.title,
						description: material.description.introduction
					}
				}
			}
		}
	} else {
		return reply;
	}
}