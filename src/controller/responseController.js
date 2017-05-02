/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/4/21
 * @description 回复controller
 */

exports.getResponseWelcome = async (ctx, next) => {
  return ctx.render('response/welcome');
}

exports.getResponseAuto = async (ctx, next) => {
  const Response = ctx.mongoose.model('Response');
  let type = ctx.query.type;
  let responses;
  if (type == 'text') {
    responses = await Response.find({type}).exec();
  } else {
    responses = await Response.find({type}).exec();
  }

  return ctx.render('response/auto/index', {responses});
}

exports.getResponseAutoEdit = async (ctx, next) => {
  let _id = ctx.params._id;
  if (_id == 'edit') return ctx.render('response/auto/edit');

  let type = ctx.query.type;
  const Response = ctx.mongoose.model('Response');
  let response = await Response.findOne({_id, type}).exec();
  response.keyword = response.keyword.join(' ');

  return ctx.render('response/auto/edit', {response});
}

exports.postResponseAutoEdit = async (ctx, next) => {
  const Response = ctx.mongoose.model('Response');
  let response;
  let type = ctx.body.type;
  let keyword = ctx.body.keyword;
  let rule = ctx.body.rule;
  let content = ctx.body.content;
  let enable = ctx.body.enable;

  let _id = ctx.params._id;
  if (_id == 'edit') {
    response = new Response({
      type,
      keyword,
      rule,
      content,
      enable
    })
  } else {
    response = await Response.findOne({_id});
    response.type = type;
    response.keyword = keyword;
    response.rule = rule;
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