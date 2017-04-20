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

exports.formatMessage = function (data) {
  if (typeof data == 'object') {
    let keys = Object.keys(data);

    for (let i=0; i<keys.length; i++) {
      let key = keys[i]
      let item = data[key];
      if (Array.isArray(item) && item.length == 1) {
        let val = item[0];
        if (typeof val == 'string') {
          data[key] = (val || '').trim();
        }
      }
    }
  }
}