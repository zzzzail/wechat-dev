/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/4/24
 * @description 素材管理
 */

const fs = require('fs');
const path = require('path');

exports.getMaterialForever = async (ctx, next) => {
  let type = ctx.query.type || 'image';
  const Material = ctx.mongoose.model('Material');
  let materials = await Material.find({type}).exec();
  return ctx.render('material/forever/index', {materials});
}

exports.deleteMaterialForever = async (ctx, next) => {
  const Material = ctx.mongoose.model('Material');
  let _id = ctx.body._id;
  let material = await Material.findOne({_id: _id}).exec();

  // 微信删除素材
  let wechat = ctx.wechat;
  let media_id = material.wechat.media_id;
  let wresult = await wechat.deleteMaterialForever(media_id);

  if (wresult.errcode == 0) {
    // 服务器上删除该资源
    let filepath = path.join(__dirname, `../../public${material.uri}`);
    fs.unlinkSync(filepath);

    // 从 mongodb 中删除
    let mresult = await material.remove();
    if (mresult) {
      return ctx.body = {
        success: true
      }
    }
  }

  return ctx.body = {
    success: false,
    errorMsg: '删除失败'
  }
}

exports.getMaterialList = async (ctx, next) => {
	const Material = ctx.mongoose.model('Material');
	let type = ctx.query.type;
	let materials = Material.find({type}).exec();
	
	return ctx.render('material/list', {materials});
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
  if (wechatMaterial.errcode) {
    throw new Error(`Wechat material upload fails: ${wechatMaterial.errmsg}`);
  }

  const Material = ctx.mongoose.model('Material');
  let material = new Material({
    name,
    type,
    uri,
    description,
    wechat: {
      media_id: wechatMaterial.media_id,
      url: wechatMaterial.url
    }
  });
  material = await material.save();

  return ctx.body = material;
}