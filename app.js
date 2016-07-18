var app = require("./lib/server");

app.createWebApplication().listen(process.env.PORT || 4700, process.env.IP || "0.0.0.0", function(){
  console.log("Chat server listening at");
});