var mongoose 	= require("mongoose"),
	Schema 		= mongoose.Schema;

var moment = require("moment");

//创建后不允许更改
var cardSchema = new Schema({
	user_id:{type:Schema.Types.ObjectId},

	name:String,					//卡名字

	code:{type:Number},				//用于兑换的码

	type:{type:Number}, 			// 1:折扣券 ，2：代金券， 3：服务体验券  , 4: 台历代金券
	value:{type:Number,default:0},			// type=1，意思是优惠幅度。type=2：意思是金额单位为元。type=3

	received:{type:Boolean,default:false},	//是否已被领取
	used:{type:Boolean,default:false},    	//是否已使用

	expiry_date:{						//有效期
		begin:Date,
		end:Date,
	},

	salesman:{
		_id:String,
		name:String
	},

	tips:{type:String,default:false},			//使用成功后的提示

	extra:{
		batch:{type:Number},
		operator:{type:String},
	},

	updated_at:{type:Date,default:Date.now},
	created_at:{type:Date,default:Date.now}
})


cardSchema.statics.newCard = function(name,type,value,userId,expiryDate){
	var card = new this({
		name:name,
		type:type,
		value:value,
		received:userId?true:false,
	})

	if(userId){
		card.user_id = userId;
	}

	if(expiryDate){
		card.expiry_date.begin = moment(expiryDate.begin).toDate(),
		card.expiry_date.end =  moment(expiryDate.end).toDate()
	}


	return function(done){
		card.save(function(err,c){
			return done(err,c);
		})
	}

}

//领取
cardSchema.statics.exchange = function(code,userId){
	return this.update({code:code,received:false},{$set:{user_id:userId,received:true}}).exec();
}

cardSchema.methods.verify = function(orderType){   //根据订单类型检查优惠券是否可用
	console.log(this);
	if(orderType == 1){
		if(this.type!=1 && this.type!=2){
			return false;
		}
	}

	// if(this.expiry_date.begin.getTime() > new Date().getTime() || 
	// 	this.expiry_date.end.getTime() < new Date().getTime()){
	// 	return false;
	// }



	return true;
}

cardSchema.methods.isAvailable = function(){
	
	if(this.expiry_date.begin.getTime() > new Date().getTime() || 
		this.expiry_date.end.getTime() < new Date().getTime()){
		return false;
	}

	if(this.used){
		return false;
	}

	return true;
}


cardSchema.statics.newCouponCard = function(name,value,userId,expiryDate){
	return this.newCard(name,1,value,userId,expiryDate);
}

cardSchema.statics.newCashCouponCard = function(name,value,userId,expiryDate){
	return this.newCard(name,2,value,userId,expiryDate);
}

cardSchema.statics.newExperienceCard = function(name,value,userId,expiryDate){
	return this.newCard(name,3,value,userId,expiryDate);
}


cardSchema.statics.createCardByProduct = function(product,userId,batch,expiryDate){
	var that = this;

	return function(done){
		var type = product.type;

		var code = batch + "" + randomeStr(8);

		switch(type){
			case 0:
				var card = new that({
					name:product.name,
					tips:"您已成功兑换礼品卡",
					type:3,
					code:code,
					extra:{
						batch:batch,
						operator:"自动生成"
					},
					value:product.num,
					received:userId?true:false,
				});

				if(userId){
					card.user_id = userId;
				}

				if(expiryDate){
					card.expiry_date.begin = moment(expiryDate.begin).toDate(),
					card.expiry_date.end =  moment(expiryDate.end).toDate()
				}

				card.save(function(err,c){
					return done(err,c);
				})
				break;
			default:
				done(new Error("无法处理的产品类型！！！"));
		}
	}
}


function randomeStr(len){
	var str = "";
	for(var i = 0;i<len;i++){
		str += Math.floor(Math.random()*10);
	}
	return str;
}

module.exports = exports = cardSchema;