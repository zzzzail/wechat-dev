/**
 * @author zail
 * @time 2017/4/19
 * @email zzzzail@163.com
 * @description
 */

const mongoose = require('mongoose');
const path = require('path');
const fs = require('fs');

module.exports = function (app, param) {
  mongoose.Promise = require('bluebird');
  mongoose.connect(param.uri, param.options);
  const db = mongoose.connection;
  db.on('error', console.error.bind(console, 'connection error:'));
  db.once('open', cb => {
    // yay!
  })

  let modelPath = path.join(__dirname, '../model');
  const walk = mp => {
    fs
      .readdirSync(mp)
      .forEach(file => {
        let filePath = path.join(mp, `/${file}`);
        let stat = fs.statSync(filePath);
        if (stat.isFile()) {
          if (/(.*)\.(js|jsx|coffee)/.test(file)) {
            require(filePath);
          }
        } else if (stat.isDirectory()) {
          walk(filePath);
        }
      })
  }

  walk(modelPath);

  app.use(async (ctx, next) => {
    ctx.mongoose = mongoose;
    await next();
  })
}