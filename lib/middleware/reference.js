

module.exports = exports = function(){
    
    function Reference(ctx){
        var _me = this;
        
        this.do = function*(value,path,modelName,namespace){
            var reference = {};
            reference[namespace] = {};
            
            if(!(path instanceof Array)){
               path = [path]; 
            }
            if(!(value instanceof Array)){
                value = [value];
            }
            
            if(value.length == 0){
                return reference;
            }
            
            var ids = [];
            path.forEach(function(pp){
                var p = pp.split(".");
                goodnight(value,p);
                //console.log(modelName,ids,p);
            })
            
            var Model = ctx.mongoose.model(modelName);
            
            var query;
            if(arguments.length > 5){
                var select = arguments[5];
                query = Model.find({_id:{$in:ids}},select);
            }else{
                query = Model.find({_id:{$in:ids}});
            }
            
            var models = yield query.exec();
            
            
            models.forEach(function(model){
                reference[namespace][model._id] = model;
            })
            
            if(arguments.length>4){
                var tmp = arguments[4];
                if(tmp.length > 0){
                    tmp.splice(0,0,models);
                    reference = _me.merge(yield _me.do.apply(_me,tmp),reference);
                }
            }
            
            return reference;
            
            function goodnight(v,p){
                if(v instanceof Array){
                    v.forEach(function(v1){
                        /*    
                        console.log("..............");
                        console.log(v1,"\n../222");
                        console.log(p);
                        console.log("..............");
                        */
                        var v1v = v1[p[0]];
                        if(!v1v){
                            v1v = v1.get(p[0])
                        }
                        var p1 = p.slice(1);
                        if(p1.length == 0){
                            ids.push(v1v);
                        }else{
                            goodnight(v1v,p1);
                        }
                    })
                }else{
                    var v1 = v[p[0]];
                    var p1 = p.slice(1);
                    if(p1.length == 0 ){
                        ids.push(v1);
                    }else{
                        goodnight(v1,p1);
                    }
                }
            }
            
            
        }
        
        
        this.merge = function(){
            var reference = {};
            
            for(var i in arguments){
                var argument = arguments[i];    
                
                if(argument instanceof Array){
                    var ref = _me.merge.apply(_me,argument);
                    
                    for(var i in ref){
                        if(!reference[i]){
                            reference[i] = ref[i];
                        }else{
                            for(var j in ref[i]){
                                reference[i][j] = ref[i][j];
                            }
                        }
                    }
                    
                }else{
                    for(var i in argument){
                        if(!reference[i]){
                            reference[i] = argument[i];
                        }else{
                            for(var j in argument[i]){
                                reference[i][j] = argument[i][j];
                            }
                        }
                    }
                }
            }
            
            return reference;
        }
        
        
        return this;
    }
    
    return function*(next){
        this.reference = new Reference(this); 
        yield next;
    }
}