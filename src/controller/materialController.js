/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/4/24
 * @description 素材管理
 */

exports.getMaterialForever = async (ctx, next) => {
  let type = ctx.query.type || 'image';
  const Material = ctx.mongoose.model('Material');
  let materials = await Material.find({type, isDeleted: false}).exec();
  return ctx.render('material/forever/index', {materials});
}

exports.getMaterialForeverUpload = async (ctx, next) => {
  let type = ctx.query.type || 'image';
  return ctx.render('material/forever/upload_' + type);
}

// 上传永久素材
exports.postMaterialForeverUpload = async (ctx, next) => {
  let wechat = ctx.wechat;
  let uploadFilePath = ctx.body.files.media.path;
  let uri = uploadFilePath.slice(uploadFilePath.indexOf('upload/') - 1);
  let type = ctx.query.type || 'image';

  let name = ctx.body.name;
  let description = null;
  if (type == 'video') {
    description = {
      title: ctx.body.fields.title,
      introduction: ctx.body.fields.introduction
    }
  }

  let wechatMaterial = await wechat.uploadMaterialForever(type, uploadFilePath, description);
  console.log(wechatMaterial);
  if (wechatMaterial.errcode) {
    throw new Error(`Wechat material upload fails: ${wechatMaterial.errmsg}`);
  }

  const Material = ctx.mongoose.model('Material');
  let material = new Material({
    name,
    type,
    uri,
    description,
    isDeleted: false,
    wechat: {
      media_id: wechatMaterial.media_id,
      url: wechatMaterial.url
    }
  });
  material = await material.save();

  return ctx.body = material;
}