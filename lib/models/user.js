var mongoose = require("mongoose"),
	Schema = mongoose.Schema;


var userSchema = new Schema({
	cell:Number,			//手机号码

	access_token:String,

	address:{
		province:String,	//省份
		city:String,       	//城市
		county:String,		//区县
		detail:String,		//详细地址
		phone_num:String,	//手机号码
		recipients:String,			//收件人名字
		postcode:Number		//邮编
	},

	cumulative_months:{type:Number,default:0},		//累计购买月份
	remainder_months:{type:Number,default:0},			//剩余月份
	done_months:{type:Number,default:0},

	extra:{
		months:{type:Number,default:0},						//剩余月份
		done_months:{type:Number,default:0},				//累计消耗
		cumulative_months:{type:Number,default:0},			//累计购买
	},

	created_at:{type:Date,default:Date.now},
	updated_at:{type:Date,default:Date.now}
});


//补充能量
userSchema.statics.refuel = function(userId,month){
	return this.update({_id:userId},{$inc:{cumulative_months:month,remainder_months:month},$set:{updated_at:Date.now()}}).exec();
}

userSchema.statics.refuelExtra = function(userId,month){
	return this.update({_id:userId},{$inc:{"extra.cumulative_months":month,"extra.months":month},$set:{updated_at:Date.now()}}).exec();
}

module.exports = exports = userSchema;
