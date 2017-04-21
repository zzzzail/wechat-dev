/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/4/21
 * @description
 */

const xtpl = require('xtpl/lib/xtpl');
const Path = require('path');

const xtplRender = function (path, data, option) {
  return function () {
    return new Promise(function (resolve, reject) {
      xtpl.render(path, data, option, function (error, content) {
        if (error) {
          reject(error)
        } else {
          resolve(content)
        }
      });
    })
  };
}

const merge = function (target, source) {
  for (var key in source) {
    target[key] = source[key];
  }
}


const xtplApp = function (app, option) {
  option = option || {};
  var views = option.views;
  var extname = option.extname || 'xtpl';

  async function render(path, data, opt) {

    var context = {};

    // merge koa ctx.state, notice: koa < 0.14.0 have no ctx.state
    merge(context, this.state || {});
    merge(context, data);

    var filePath;

    if (path.charAt(0) === '/') {
      filePath = path;
    } else {
      filePath = Path.resolve(views, path + '.' + extname);
    }

    var html = await xtplRender(filePath, context, option)();
    if (!opt || opt.write !== false) {
      this.type = 'html';
      this.body = html;
    }
    return html;
  }

  app.context.render = render;
  return app;
};

module.exports = function (app, params) {
  xtplApp(app, params);
}