var mongoose 	= require("mongoose"),
	Schema 		= mongoose.Schema;

//销售员
var salesmanSchema = new Schema({
	cell:String,

	name:String,

	stats:{
		clicked:{type:Number,default:0},
		count:{type:Number,default:0},
		registered:{type:Number,default:0},
		recharge:{type:Number,default:0}
	},

	created_at:{type:Date,default:Date.now}	
})



module.exports = exports = salesmanSchema;