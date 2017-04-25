/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/4/25
 * @description
 */

var Util = function () {}

// 获取上传文件大小 单位为KB
Util.__proto__.getFileSize = function (id) {
  var ele = document.getElementById(id);
  return (ele.files[0].size / 1024).toFixed(2);
}

window.Util = Util;