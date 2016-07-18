var config = require("./config/main.json");

var app = require("koa")();
    koaRouter = require("koa-router")();



exports.createWebApplication = function(){

    var params = config.params,
    components = config.components,
    routers = config.routers,
    middlewares = config.middlewares;
    
    //设置中间件
    if(middlewares){
        middlewares.forEach(function(mdlName){

            //var md = middleware(mdlName);
            var paramArray = [];
            if(mdlName instanceof Array){
                
                for(var i=1;i<mdlName.length;i++){
                    var tmp = mdlName[i];
                    if(tmp.startsWith("param:")){
                        paramArray.push(params[tmp.replace("param:","")]);
                    }else{
                        paramArray.push(tmp);
                    }
                }
                var mdlName = mdlName[0];
            }else{   
                //md = md(components[mdlName]);
                if(components[mdlName])
                    paramArray.push(components[mdlName]);
            }

            var md = middleware(mdlName);

            //console.log(mdlName,paramArray,md,"..");

            md = md.apply(this,paramArray);

            app.use(md);
        })
    }
    
    
    //启动路由
    for(var uri in routers){
        var value = routers[uri];
        
        var method = value[0];
        
        var fn = koaRouter[method];
        
        if(!fn){
            throw "koa-router don't hava "+method+" method";
        }
        
        var paramsArray = [];
        
        paramsArray.push(uri);  //第一个参数是uri
        
        for(var i = 1;i<value.length;i++){
            var ps = value[i];
            
            if(i == value.length-1){
                var tmp = ps.split("."),
                    name = tmp[0],
                    mthStr = tmp[1];
                    
                var mth =  controller(name.replace("Controller",""))[mthStr];
                
                if(!mth){
                    throw Error("未找到响应的控制器方法，controller:"+name+",method:"+mthStr);
                }
                
                paramsArray.push(mth);    //控制器模块
            }else{
                if(ps instanceof Array){
                    var md = ps[0];
                    var ps1 = ps[1];
                    
                    paramsArray.push(middleware(md)(params[ps1]));
                    
                }else{
                    paramsArray.push(middleware(ps)(components[ps]));
                }                    //中间件模块
            }
        }
        
        //fn("",function*(){});
        //fn.apply(this,paramsArray);
        //koaRouter[method]("/user/app",function*(){});
        //koaRouter[method].apply(this,paramsArray);
        fn.apply(koaRouter,paramsArray);
    }
    
    app.use(koaRouter.routes()).use(koaRouter.allowedMethods());
    
    app.on("error",function(err){
		console.error(err.stack || err);
	})
    
    return app;
}


function middleware(name){
    
    try{
        mdl = require("./middleware/"+name+".js");    
    }catch(e){
        if(e.code != "MODULE_NOT_FOUND"){
            throw e;
        }

        mdl = require(name);
    }
  
    /*  
    if(!mdl){
        throw Error("don't found middleware");
    }*/
    
    return mdl;
}

function controller(name){
    ctrl = require("./controllers/"+name+"_controller.js");
    
    if(!ctrl){
        throw Error("don't found controller");
    }
    
    return ctrl;
}