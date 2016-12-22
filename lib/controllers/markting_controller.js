var moment = require("moment");


exports.salesmanLoginGet = function*(){

	yield this.render("markting/salesman/login");
}

exports.salesmanLoginPost = function*(){
	var cell = this.request.body.cell;

	var salesman = yield Salesman.findOne({cell:cell}).exec();
	//console.log(salesman);
	if(!salesman){
		this.cookies.set("cell","deleted",{expires:new Date(1)});
		return this.redirect("/markting/salesman/login");
	}

	this.cookies.set("cell",cell,{httpOnly:false,signed:false,expires:new Date(2099,1,1),secure:false})

	this.redirect("/markting/salesman/"+salesman._id);
}

exports.salesmanLogout = function*(){
	this.cookies.set("cell","deleted",{expires:new Date(1)});
	this.redirect("login");
}

exports.salesman = function*(){
	var id = this.params.id;

	var salesman = yield Salesman.findOne({_id:id}).exec();

	if(!salesman){
		return;
	}


	var startOfMonth = moment().startOf("month").toDate(),
		endOfMonth = moment().endOf("month").toDate();

	//console.log(startOfMonth,endOfMonth);

	var guest = yield UserExtra.aggregate([
		{$unwind:"$source"},
		{$group:{_id:"$cell",cell:{$first:"$cell"},source:{$last:"$source"}}},
		{$match:{"source._id":salesman._id,"source.type":"salesman","source.ctime":{$gt:startOfMonth,$lt:endOfMonth}}},
		{$sort:{"source.ctime":-1}}
		]).exec();

	var registered = yield UserExtra.aggregate([
		{$unwind:"$source"},
		{$group:{_id:"$cell",cell:{$first:"$cell"},source:{$last:"$source"},events:{$first:"$events"}}},
		{$match:{"source._id":salesman._id,"source.type":"salesman"}},
		{$unwind:"$events"},
		{$match:{"events.type":"1001","events.ctime":{$gt:startOfMonth,$lt:endOfMonth}}},
		{$group:{_id:"$cell",cell:{$first:"$cell"},events:{$last:"$events"}}},
		{$sort:{"events.ctime":-1}}
		]).exec();


	//console.log(registered);

	var purchased = yield UserExtra.aggregate([
		{$unwind:"$source"},
		{$group:{_id:"$cell",cell:{$first:"$cell"},source:{$last:"$source"},events:{$first:"$events"}}},
		{$match:{"source._id":salesman._id,"source.type":"salesman","source.ctime":{$gt:startOfMonth,$lt:endOfMonth}}},
		{$unwind:"$events"},
		{$match:{"events.type":"2001","events.extra.first":true,"events.ctime":{$gt:startOfMonth,$lt:endOfMonth}}},
		{$group:{_id:"$cell",cell:{$first:"$cell"},events:{$last:"$events"}}},
		{$sort:{"events.ctime":-1}}
		]).exec();
 

	function nearTime(date){
		var gap = new Date().getTime() - date.getTime();
		if(gap > (1000*60*60*24)){
			return parseInt(gap/(1000*60*60*24))+"天前";
		}else if(gap > (1000*60*60)){
			return parseInt(gap/(1000*60*60)) +"小时前";
		}else if(gap > (1000*60)){
			return parseInt(gap/(1000*60)) + "分钟前";
		}else{
			return "刚刚";
		}
	}

	yield this.render("markting/salesman/show",{
		guestCount:guest.length,
		registeredCount:registered.length,
		purchasedCount:purchased.length,
		guest:guest.slice(0,500),
		registered:registered.slice(0,300),
		purchased:purchased,
		fn:{nearTime:nearTime}
	});
}

exports.activity  = function*(){

	var version = this.query.version;

	if(!version){
		version = "v1";
	}

	var id = this.params.id;

	var salesman = yield Salesman.findOne({_id:id}).exec();

	if(!salesman){
		return this.status = 404;
	}

	var cardCount = yield Card.count({"salesman._id":id}).exec(),
		remainder = 10000 - cardCount;

	//console.log(cardCount,remainder);

	yield this.render("markting/activity/"+version,{cardCount:cardCount,remainder:remainder,salesman:salesman});
}

exports.receiveCard = function*(){
	var id = this.params.id;

	var body = this.request.body;
		cell = body.cell;

	var salesman = yield Salesman.findOne({_id:id}).exec();

	if(!salesman){
		return this.body = {retcode:1,message:"不存在的渠道"};
	}

	var user = yield User.findOne({cell:cell}).exec();
	if(user){
		return this.body = {retcode:1,message:"您已是点影用户，无法领取优惠券"};
	}

	var result = yield UserExtra.pushSource(cell,"salesman",{_id:salesman._id,name: salesman.name,cell:salesman.cell});

	return this.body = {retcode:0,data:{value:result}};

}




