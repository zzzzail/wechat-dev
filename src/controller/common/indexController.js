/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/5/18
 * @description
 *
 */

const Promise = require('bluebird')
const request = Promise.promisify(require('request'))
const apiPrefix = require('../../config/config').apiPrefix

exports.postSendCellCode = async (ctx, next) => {
  let cell = this.body.cell
  if (!cell) {
    return ctx.body = {
      errcode: 5000,
      errmsg: '手机号码为空.'
    }
  }
  let url = `${apiPrefix}randcode/send`
  let code = await request({url, method: 'POST', form: {cell}, json: true})
    .then((response) => {
      let data = response.body
      Promise.resolve(data)
    })
  
  console.log(code)
  return ctx.body = {
    code
  }
}
