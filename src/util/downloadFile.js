/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/5/10
 * @description 下载文件
 *
 * @param url 下载链接
 * @param filepath 文件存放路径
 * @param filename 文件名 (默认 UUID 生成)
 *
 */

const Promise = require('bluebird')
const fs = require('fs')
const mkp = require('mkp')
const request = require('request')
const uuidV1 = require('uuid/v1')

module.exports = (url, filepath, filename = uuidV1()) => {
	if (!url || !filepath) return
	
	let havePath = fs.existsSync(filepath)
	if (!havePath) {
		try {
			mkp.sync(filepath)
		} catch (err) {
			throw err
		}
	}
	let fullfile
	let interimfile = filepath + '/' + uuidV1()
	let interimStream = fs.createWriteStream(interimfile)
	return new Promise((resolve, reject) => {
		request
			.get(url)
			.on('response', (res) => {
				let type = res.headers['content-type']
				type = '.' + type.substring(type.lastIndexOf('/') + 1)
				filename = filename + type
				fullfile = filepath + '/' + filename
			})
			.pipe(interimStream)
			.on('error', (err) => {
				reject(err)
			})
			.on('close', () => {
				fs.renameSync(interimfile, fullfile)
				resolve(fullfile)
			})
	})
}
