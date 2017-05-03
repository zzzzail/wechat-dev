/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/4/21
 * @description 回复controller
 */

exports.getResponseWelcome = async (ctx, next) => {
	const Response = ctx.mongoose.model('Response');
	let response = await Response.findOne({keyword: ["welcome"]}).exec();
	if (response && response.type != 'text') {
		const Material = ctx.mongoose.model('Material');
		let material = await Material.findOne({_id: response.content}).exec();
		response.material = material;
	}
	
	console.log(response);
	response = response || undefined
  return ctx.render('response/welcome', {response});
}

exports.getResponseAuto = async (ctx, next) => {
  const Response = ctx.mongoose.model('Response');
  let type = ctx.query.type;
  let responses = await Response.find({type}).exec();
	const Material = ctx.mongoose.model('Material');
  if (type == 'image') {
	  for (let i=0; i<responses.length; i++) {
		  let material = await Material.findOne({_id: responses[i].content}).exec();
		  responses[i].content = `<img src="${material.uri}">`;
	  }
  }
  if (type == 'voice') {
	  for (let i=0; i<responses.length; i++) {
		  let material = await Material.findOne({_id: responses[i].content}).exec();
		  responses[i].content = `<audio controls src="${material.uri}"></audio>`;
	  }
  }
	if (type == 'video') {
		for (let i=0; i<responses.length; i++) {
			let material = await Material.findOne({_id: responses[i].content}).exec();
			responses[i].content = `<video controls src="${material.uri}"></video>`;
		}
	}

  return ctx.render('response/auto/index', {responses});
}

exports.getResponseAutoEdit = async (ctx, next) => {
	let type = ctx.query.type;
	let _id = ctx.params._id;
  if (_id == 'edit') return ctx.render(`response/auto/edit_${type}`);

  const Response = ctx.mongoose.model('Response');
	let response = await Response.findOne({_id}).exec();
	response.keyword = response.keyword.join(' ');
	
	
  return ctx.render(`response/auto/edit_${type}`, {response});
}

exports.postResponseAutoEdit = async (ctx, next) => {
  const Response = ctx.mongoose.model('Response');
  let response;
  let type = ctx.body.type;
  let keyword = ctx.body.keyword;
  let content = ctx.body.content;
  let enable = ctx.body.enable;

  let _id = ctx.params._id;
  if (_id == 'edit') {
    response = new Response({
      type,
      keyword,
      content,
      enable
    })
  } else {
    response = await Response.findOne({_id});
    response.type = type;
    response.keyword = keyword;
    response.content = content;
    response.enable = enable;
  }

  response = await response.save();
  return ctx.body = {
    success: true
  };
}

exports.putResponseAutoEdit = async (ctx, next) => {
	const Response = ctx.mongoose.model('Response');
	let _id = ctx.params._id;
	let response = await Response.findOne({_id}).exec();
	
	let enable = ctx.body.enable;
	if (enable != undefined) {
		response.enable = enable;
	}
	
	response = await response.save();
	return ctx.body = {
		success: true
	};
}

exports.deleteResponseAutoEdit = async (ctx, next) => {
	const Response = ctx.mongoose.model('Response');
	let _id = ctx.params._id;
	let response = await Response.findOne({_id}).exec();
	
	await response.remove();
	return ctx.body = {
		success: true
	}
}