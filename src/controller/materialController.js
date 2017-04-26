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

// 上传永久素材
exports.postMaterialForeverUpload = async (ctx, next) => {
  let wechat = ctx.wechat;
  let uploadFilePath = ctx.body.files.media.path;
  let uri = uploadFilePath.slice(uploadFilePath.indexOf('upload/') - 1);

  let wechatMaterial = await wechat.uploadMaterialForever('image', uploadFilePath);
  if (wechatMaterial.errcode) {
    throw new Error(`Wechat material upload fails: ${wechatMaterial.errmsg}`);
  }

  const Material = ctx.mongoose.model('Material');
  let material = new Material({
    type: 'image',
    uri: uri,
    wechat: {
      media_id: wechatMaterial.media_id,
      url: wechatMaterial.url
    }
  });
  material = await material.save();

  return ctx.body = material;
}