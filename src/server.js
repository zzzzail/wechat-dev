/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/4/19
 * @description 启动服务文件
 */

const Koa = require('koa')
const app = new Koa()
const fs = require('fs')
const path = require('path')
const config = require('./config/config')
const middleware = config.middleware

module.exports = function () {
  // 根据配置批量加载中间件
  middleware.forEach(md => {
    let { name, params } = md
    let filePath = `./middleware/${name}.js`
    let isFile = fs.existsSync(path.join(__dirname, filePath))

    let requireMiddleware
    if (isFile) {
      requireMiddleware = require(filePath)
      if (params) {
        if(Array.isArray(params)) {
          params.unshift(app)
        } else {
          params = [app, params]
        }
      } else {
        params = [app]
      }
      requireMiddleware.apply(requireMiddleware, params)
    } else {
      requireMiddleware = require(name)
      if (params) {
        if (Array.isArray(params)) {
          requireMiddleware = requireMiddleware.apply(requireMiddleware, params)
        } else {
          requireMiddleware = requireMiddleware.apply(requireMiddleware, [params])
        }
      } else {
        requireMiddleware = requireMiddleware()
      }
      app.use(requireMiddleware)
    }
  })

  app.listen(config.port)
  console.log(`APP Listening at http://127.0.0.1:${config.port}`)
}