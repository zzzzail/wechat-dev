/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/4/21
 * @description 回复controller
 */

exports.getReplyWelcome = async (ctx, next) => {
	const Reply = ctx.mongoose.model('admin-reply')
	let reply = await Reply.findOne({keyword: ["welcome"]}).exec()
	if (reply && reply.type != 'text') {
		const Material = ctx.mongoose.model('admin-material')
		let material = await Material.findOne({_id: reply.content}).exec()
		reply.material = material
	}
	
	console.log(reply)
	reply = reply || undefined
  return ctx.render('admin/reply/welcome', {reply})
}

exports.getReplyAuto = async (ctx, next) => {
  const Reply = ctx.mongoose.model('admin-reply')
  let type = ctx.query.type
  let replys = await Reply.find({type}).exec()
	const Material = ctx.mongoose.model('admin-material')
  if (type == 'image') {
	  for (let i=0; i<replys.length; i++) {
		  let material = await Material.findOne({_id: replys[i].content}).exec()
		  replys[i].content = `<img src="${material.uri}">`
	  }
  }
  if (type == 'voice') {
	  for (let i=0; i<replys.length; i++) {
		  let material = await Material.findOne({_id: replys[i].content}).exec()
		  replys[i].content = `<audio controls src="${material.uri}"></audio>`
	  }
  }
	if (type == 'video') {
		for (let i=0; i<replys.length; i++) {
			let material = await Material.findOne({_id: replys[i].content}).exec()
			replys[i].content = `<video controls src="${material.uri}"></video>`
		}
	}

  return ctx.render('admin/reply/auto/index', {replys})
}

exports.getReplyAutoEdit = async (ctx, next) => {
	let type = ctx.query.type
	let _id = ctx.params._id
  if (_id == 'edit') return ctx.render(`reply/auto/edit_${type}`)

  const Reply = ctx.mongoose.model('admin-reply')
	let reply = await Reply.findOne({_id}).exec()
	reply.keyword = reply.keyword.join(' ')
	
	
  return ctx.render(`admin/reply/auto/edit_${type}`, {reply})
}

exports.postReplyAutoEdit = async (ctx, next) => {
  const Reply = ctx.mongoose.model('admin-reply')
  let reply
  let type = ctx.body.type
  let keyword = ctx.body.keyword
  let content = ctx.body.content
  let enable = ctx.body.enable

  let _id = ctx.params._id
  if (_id == 'edit') {
    reply = new Reply({
      type,
      keyword,
      content,
      enable
    })
  } else {
    reply = await Reply.findOne({_id})
    reply.type = type
    reply.keyword = keyword
    reply.content = content
    reply.enable = enable
  }

  reply = await reply.save()
  return ctx.body = {
    success: true
  }
}

exports.putReplyAutoEdit = async (ctx, next) => {
	const Reply = ctx.mongoose.model('admin-reply')
	let _id = ctx.params._id
	let reply = await Reply.findOne({_id}).exec()
	
	let enable = ctx.body.enable
	if (enable != undefined) {
		reply.enable = enable
	}
	
	reply = await reply.save()
	return ctx.body = {
		success: true
	}
}

exports.deleteReplyAutoEdit = async (ctx, next) => {
	const Reply = ctx.mongoose.model('admin-reply')
	let _id = ctx.params._id
	let reply = await Reply.findOne({_id}).exec()
	
	await reply.remove()
	return ctx.body = {
		success: true
	}
}