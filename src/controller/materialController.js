/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/4/24
 * @description 素材管理
 */

exports.getMaterialForever = async (ctx, next) => {
  return ctx.render('material/forever/index');
}

exports.getMaterialForeverUpload = async (ctx, next) => {
  return ctx.render('material/forever/upload');
}

exports.postMaterialForeverUpload = async (ctx, next) => {
  console.log(ctx.body);
  let wechat = ctx.wechat;
  let uploadFilePath = ctx.body.files.media.path;
  let a = await wechat.uploadMaterialForever('image', uploadFilePath);
  console.log(a);
  return ctx.body = '123';
}