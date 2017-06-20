/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/4/19
 * @description 路由
 *
 */

const path = require('path')
const fs = require('fs')

module.exports = function (app) {

  let routerPath = path.join(__dirname, '../router')
  let walk = rp => {
    fs.readdirSync(rp)
      .forEach(file => {
        let filePath = path.join(rp, `${file}`)
        let stat = fs.statSync(filePath)
        if (stat.isFile()) {
          if (/(.*)\.(js|jsx|coffee)/.test(file)) {
            app
              .use(require(filePath)().routes())
              .use(require(filePath)().allowedMethods())
          } else if (stat.isDirectory()) {
            walk(filePath)
          }
        }
      })
  }

  walk(routerPath)
}
