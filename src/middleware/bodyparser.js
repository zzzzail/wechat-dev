/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/4/19
 * @description
 */

const path = require('path')
const fs = require('fs')
const mkp = require('mkp')
const koaBody = require('koa-body')

module.exports = function (app, param) {

  // 上传文件
  param.formidable.onFileBegin = function (name, file) {
    let fileName = file.path.slice(file.path.lastIndexOf('/') + 1)
    let filePath = file.path.slice(0, file.path.lastIndexOf('/') + 1)
    let date = new Date()
    let todayPath = `${date.getFullYear()}_${date.getMonth() + 1}_${date.getDate()}`
    filePath = path.join(filePath, todayPath + '/')
    let exists = fs.existsSync(filePath)
    if (!exists) {
      try {
        mkp.sync(filePath)
      } catch (err) {
        console.log(err)
      }
    }
    file.path = path.join(filePath, fileName)
  }

  app.use(koaBody(param))
  app.use(async (ctx, next) => {
    if (ctx.request.method != 'GET') {
      ctx.body = ctx.request.body
    }
    await next()
  })
}