/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/4/25
 * @description
 */

var Util = function () {
}

// 获取上传文件大小 单位为KB
Util.__proto__.getFileSize = function (id) {
  var ele = document.getElementById(id);
  return (ele.files[0].size / 1024).toFixed(2);
}

// 解析url中带的参数
Util.__proto__.QueryString = function (name, url) {
  var url = url || window.location.href;
  name = name.replace(/[\[\]]/g, '\\$&');
  var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)');
  var results = regex.exec(url);
  if (!results) return null;
  if (!results[2]) return '';
  return decodeURIComponent(results[2].replace(/\+/g, " "));
}

Util.__proto__.confirm = function (text) {
  return new Promise(function (resolve, reject) {
    if (!layer) reject(new Error('请引入layer弹出框!'));

    layer.confirm(text, {btn: ['确定', '取消']},
      function () {
        resolve(true);
      });
  })
}

window.Util = Util;