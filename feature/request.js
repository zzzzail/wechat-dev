/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/5/10
 * @description
 *
 */

// const fs = require('fs')
// const Promise = require('bluebird')
// const request = require('request')
//
// let url = 'https://gss0.bdstatic.com/5bVWsj_p_tVS5dKfpU_Y_D3/res/r/image/2017-05-10/c255b7a558127b35bd16c2a524ea32f4.jpg'
// let file = fs.createWriteStream('file')
//
// request
// 	.get(url)
// 	.on('response', function (response) {
// 		let type = response.headers['content-type']
// 		type = '.' + type.substring(type.lastIndexOf('/') + 1)
// 		console.log(type)
// 	})
// 	.pipe(file)
// 	.on('close', function () {
// 		fs.renameSync('file', `file.jpeg`)
// 		console.log('close')
// 	})


// const downloadFile = require('../src/util/downloadFile')
// const path = require('path')
//
// downloadFile(
// 	'https://gss0.bdstatic.com/5bVWsj_p_tVS5dKfpU_Y_D3/res/r/image/2017-05-10/c255b7a558127b35bd16c2a524ea32f4.jpg',
// 	path.join(__dirname, 'img')
// )
// .then((data) => {
// 	console.log(data)
// })

let url = '/public/upload/wechat/album'
url = url.substring(url.lastIndexOf('/upload'))
console.log(url)
