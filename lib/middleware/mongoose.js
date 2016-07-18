var mongoose    = require("mongoose"),
    fs          = require("fs"),
    path        = require("path");
    
    
module.exports = function(config){
    mongoose.connect(config.uri,config.options);

	var modelPath = __dirname+"/../models";

	dir = fs.readdirSync(modelPath);
	
	for(var i in dir){
	    var current = dir[i];
	    
	    if(current == ".DS_Store"){
	        break;
	    }
	    
	    var ms = require("../models/"+current);
		var modelName = path.basename(current,".js");
		modelName = camelName(modelName);
		eval(camelName(modelName) + " = mongoose.model(modelName,ms);");
	}
	
	/*
	dir.forEach(function(i){
		if(i == ".DS_Store")
			return;
		
		var ms = require("../models/"+i)
		var modelName = path.basename(i,".js");
		mongoose.model(modelName,ms);
	})*/

	return function *(next){
		this.mongoose = mongoose;

		yield next;
	}
}

function camelName(name){
	if(!name || name === ""){
		return "";
	}
	
	var camels = name.split("_");
	var result = "";
	for(var i in camels){
		var camel = camels[i];
		result += camel.charAt(0).toUpperCase()+camel.slice(1);
	}
	
	return result;
}