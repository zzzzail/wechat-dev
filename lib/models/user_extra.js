var mongoose = require("mongoose"),
	Schema = mongoose.Schema;



var userExtraSchema = new Schema({

	cell:Number,						//用户手机号
	
	source:[{
		_id:Schema.Types.ObjectId,
		type:{type:String},     	//user:来自用户，salesman: 地推，销售
		cell:String,				//来源ID
		ctime:{type:Date,default:Date.now}
	}],

	events:[    //用户操作过程中发生的事件， 只能记录少量重要事件，比如注册，充值等等，切勿放频繁更新的事件
		{
			type:Number,			//事件类型，  1001：注册。 2001：充值。  5001:被邀请后，

			extra:Object,

			ctime:{type:Date,default:Date.now}			//事件发生时间
		}
	],

	created_at:{type:Date,default:Date.now},
	updated_at:{type:Date,default:Date.now}
});

//确保信息存在，如果不存在则创建
userExtraSchema.statics.ensureExist = function(cell){
	var _me = this;

	return function(done){
		_me.findOne({cell:cell},function(err,ue){
			if(err){
				return done(err);
			}
			if(ue){
				done(null,ue);
			}else{
				_me({
					cell:cell
				}).save(function(err,ue){
					if(err){
						return done(err);
					}

					done(null,ue);
				});
			}
		});
	}
}

userExtraSchema.statics.pushSource = function(cell,type,s){
	var _me = this;

	return function(done){

		_me.ensureExist(cell)(function(err,ue){
			if(err){
				return done(err);
			}

			var exists = false;
			ue.source.forEach(function(so){   //检查是否已存在
				if(so.cell == s.cell){
					exists = true;
				}
			});

			if(exists){
				return done(null);
			};

			_me.update({_id:ue._id},{
				$push:{source:{type:type,_id:s._id,cell:s.cell}}
			},done);
		});
	}
}

//发射事件，具体事件具体处理
/**
* 接收事件的人，
**/
userExtraSchema.statics.emitEvent = function(cell,type,extra){

	var _me = this;

	return function(done){
		_me.ensureExist(cell)(function(err,ue){
			if(err){
				return done(err);
			}

			_me.update({_id:ue._id},{
				$push:{events:{type:type,extra:extra}}
			},done);


			//具体事件具体处理
			doSomething(_me,ue,type,extra);
		})
	}
}

//根据事件类型做点什么
function doSomething(model,ue,type,extra){

	switch (type){
		case 1001: 			//注册的时候，如果有邀请人，需要奖励
			registerRewards(model,ue,extra);
			break;
		case 2001: 			//第一次购买必须奖励，但要分情况
			purchaseRewards(model,ue,extra);
			break;
	}
}

//注册的奖励
function registerRewards(model,ue,extra){
	if(ue.source.length == 0){
		//没有任何渠道来源，不处理
		return;
	}

	var Card = model.mongoose.model("Card"),
		Salesman = model.mongoose.model("Salesman");

	var source = ue.source[ue.source.length-1];  //取最后一个

	if(type === "user" || type === "salesman"){    //渠道来自用户,写死奖励固定的东西

		Card.newCashCouponCard("点影代金券",6,ue.user_id,{begin:new Date(),end:(function(){
			var date = new Date();
			date.setFullYear(date.getDate().getFullYear() + 3);   //有效期为3年
			return date;
		})});    //注册人自己获得代金券

		//注册人的邀请人在注册时没有奖励
	}else if(type === "salesman"){   //渠道来自销售，根据渠道的情况奖励

	}
}

//充值奖励
function purchaseRewards(model,ue,extra){
	if(ue.source.length == 0){
		//没有任何渠道来源，不处理
		return;
	}
	
	var source = ue.source[ue.source.length-1];  //取最后一个

	//充值只有邀请人获得奖励，其他没有邀请人或者邀请人是渠道的情况是没有奖励的
	if(source.type === "user" && extra.first){

		Card.newCashCouponCard("邀请奖励代金券",15,ue.user_id,{begin:new Date(),end:(function(){
			var date = new Date();
			date.setFullYear(date.getDate().getFullYear() + 3);   //有效期为3年
			return date;
		})});    //奖励邀请人
	}
}


module.exports = exports = userExtraSchema;
