/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/4/20
 * @description
 */

const Promise = require('bluebird');
const xml2js = require('xml2js');
const xmlCompiled = require('./xmlCompiled');

exports.parseXMLAsync = function (xml) {
  return new Promise((resolve, reject) => {
    xml2js.parseString(xml, {trim: true}, (err, content) => {
      if (err) reject(err);
      else resolve(content);
    })
  })
}

exports.formatMessage = function (message) {
  if (typeof message == 'object') {
    let keys = Object.keys(message);

    for (let i=0; i<keys.length; i++) {
      let key = keys[i]
      let item = message[key];
      if (!Array.isArray(item) || item.length == 0) continue;

      if (item.length == 1) {
        let val = item[0];

        if (typeof val == 'object') {
          message[key] = formatMessage(val);
        } else {
          message[key] = (val || '').trim();
        }
      } else {
        message[key] = [];
        for (let j=0; j<item.length; j++) {
          message[key].push(formatMessage(item[j]));
        }
      }
    }
  }

  return message;
}

exports.xmlTemplate = function (message, content) {
  let type = 'text';
  let toUserName = message.FromUserName;
  let fromUserName = message.ToUserName;

  if (Array.isArray(content)) {
    type = 'news';
  }

  type = content.type || type;

  let info = {
    msgType: type,
    content,
    createTime: new Date().getTime(),
    toUserName,
    fromUserName
  }

  return xmlCompiled(info);
}