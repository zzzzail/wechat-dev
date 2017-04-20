/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/4/20
 * @description
 */

const Promise = require('bluebird');
const xml2js = require('xml2js');

exports.parseXMLAsync = function (xml) {
  return new Promise((resolve, reject) => {
    xml2js.parseString(xml, {trim: true}, (err, content) => {
      if (err) reject(err);
      else resolve(content);
    })
  })
}