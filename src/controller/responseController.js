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
  return ctx.render('response/auto/index');
}

exports.getResponseAutoEdit = async (ctx, next) => {
  let _id = ctx.params._id;
  if (_id == 'edit') return ctx.render('response/auto/edit');

  let type = ctx.query.type;
  const Response = ctx.mongoose.model('Response');
  let response = await Response.findOne({_id, type}).exec();

  return ctx.render('response/auto/edit', response);
}

exports.postResponseAutoEdit = async (ctx, next) => {
  let _id = ctx.params._id;
  const Response = ctx.mongoose.model('Response');

  let response;
  let keyword = ctx.body.keyword;
  let content = ctx.body.content;

  if (_id == 'edit') {
    response = new Response({
      keyword,
      content,
      enable: true
    })
  } else {
    response = await Response.findOne({_id});
    response.keyword = keyword;
    response.content = content;
  }
}