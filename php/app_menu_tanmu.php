<style>
	#canvas{
	 position:absolute; z-index:999999999
}
	.b-menu
	{
		position: fixed;
		top: 100%;
		left: 0px;
		height: 40px;
		margin-top:-50px;
		width: 100%;
		z-index: 10000000032;
		-webkit-box-sizing: border-box;
	}

	.b-menu-item
	{
		position: relative;
		float: left;
		width: 80px;
		height: 100%;
		line-height: 40px;
		text-align: center;
		font-size: 15pt;
		border: 1px solid #666666;
		border-radius: 7px;
		color: white;
		margin-left: 34px;
		-webkit-box-sizing: border-box;
	}
	.b-opacity-back
	{
		position: absolute;
		top: 0px;
		left: 0px;
		width: 100%;
		height: 100%;
		z-index: -1;
		background-color: black;
		border-radius: 7px;
		opacity: 0.68;
		-webkit-box-sizing: border-box;
	}

	#b-wind
	{
		position: absolute;
		top: 0px;
		left: 0px;
		width: 100%;
		height:420px;
		background-color: white;
		overflow: hidden;
		z-index: 10000000033;
		-webkit-box-sizing: border-box;
	}

	#b-wind-title
	{
		position: relative;
		width: 100%;
		height: 60px;
		background-color: #44B549;
		color: white;
		font-size: 18pt;
		line-height: 60px;
		padding-left: 4%;
		-webkit-box-sizing: border-box;
	}

	#b-wind-close
	{
		position: absolute;
		top: 0px;
		float: right;
		right: 20px;
		height: 100%;
		line-height: 60px;
		font-size: 40pt;
		-webkit-box-sizing: border-box;
	}

	#b-wind-content
	{
		width: 100%;
		height: 100%;
		overflow-y:auto;
		-webkit-overflow-scrolling: touch;
		-webkit-box-sizing: border-box;
	}
  .b-share-title , .b-share-ok , .b-share-ok2 ,.b-share-ok3
	{
		position: relative;
		float: left;
		width:450px;
		left: 25px;
		margin-top: 40px;
		-webkit-border-radius: 7px;
		background-color:#e3e3e3;
		-webkit-box-sizing: border-box;
	}

	 #b-share-title
	{
		line-height:33px;
		width:440px;
		padding-left:10px;
		-webkit-background-clip: padding-box;
		background: rgba(227, 227, 227,1);
		-webkit-border-radius: 7px;
		font-size:18pt;
		resize:none;
		border:none;
		outline:none;
		-webkit-box-sizing: border-box;
	}

	#b-share-title
	{
		line-height: 65px;
		-webkit-box-sizing: border-box;
	}

	.b-share-ok
	{
		color: white;
		font-size: 18pt;
		font-weight: bold;
		height: 70px;
		line-height: 70px;
		text-align: center;
		background-color: #44B549;
		-webkit-box-sizing: border-box;
	}
	
	
	.b-share-ok2
	{
		color: white;
		font-size: 18pt;
		font-weight: bold;
		height: 70px;
		line-height: 70px;
		text-align: center;
		background-color:#666666;
		-webkit-box-sizing: border-box;
	}
	.b-share-ok3
	{
		color: white;
		font-size: 18pt;
		font-weight: bold;
		height: 70px;
		line-height: 70px;
		text-align: center;
		background-color:#FF6600;
		-webkit-box-sizing: border-box;
	}
	
@-webkit-keyframes shake {  
  
    0%, 100% {-webkit-transform: translateX(0);}  
    10%, 30%, 50%, 70%, 90% {-webkit-transform: translateX(-10px);}  
    20%, 40%, 60%, 80% {-webkit-transform: translateX(10px);}  
}  
@-moz-keyframes shake {  
    0%, 100% {-moz-transform: translateX(0);}  
    10%, 30%, 50%, 70%, 90% {-moz-transform: translateX(-10px);}  
    20%, 40%, 60%, 80% {-moz-transform: translateX(10px);}  
}  
	</style>
	
<?
	$b="";
	$query = $db->query("select * from {$tablepre}books where classid=$rss[tid] order by tid desc limit 50");
	while($rs=$db->fetch_array($query)){
		$b.="'".$rs["title"]."',";
	}
	if($b){
		$b= substr($b,0,strlen($b)-1); 
	}else{
		$b="'音乐相册可以弹幕留言了.'";
	}
	?>
	
	
	<canvas id="canvas">嗨帅哥您的浏览器不支持canvas赶紧去升级吧</canvas>
	<script type="text/javascript">
	
	var bcanvas=document.getElementById('canvas');
	var ctx=bcanvas.getContext("2d");
	var width=500;
	var height=815;
	var colorArr=["#ed1941","#225a1f","#401c44","#1b315e","#f36c21","#fdb933","#aa2116","#843900"];
	var textArr=[<?=$b?>]
	bcanvas.width=500;
	bcanvas.height=815;
	//var image=new Image();

	ctx.font = "30px Courier New";
	
	var numArrL=[80,100,5,300,500,430,380,210,280,600,480];//初始的X
	var numArrT=[150,200,350,300,250,400,450,600,660,620];//初始的Y
	
	
	numArrL =numArrL.sort(function(){return Math.random()>0.5?-1:1;}) 
	numArrT =numArrT.sort(function(){return Math.random()>0.5?-1:1;}) 
	colorArr=colorArr.sort(function(){return Math.random()>0.5?-1:1;}) 
	
	
	setInterval(function(){
	ctx.clearRect(0,0,canvas.width,canvas.height);
	ctx.save();
	
	for(var j=0;j<textArr.length;j++){
		numArrL[j]-=(j+1)*0.6;
		ctx.fillStyle = colorArr[j];
		ctx.strokeStyle="#0000ff";
		ctx.shadowColor="black";
		ctx.fillText(textArr[j],numArrL[j],numArrT[j]);
	}
	for(var i=0;i<textArr.length;i++){
		if(numArrL[i]<=-500){
			numArrL[i]=bcanvas.width;
		}
	}
	ctx.restore();
	},30)
</script>
	
<div id="xiala_div" onClick="e_book_show()" style="position:fixed;height: 48px; width: 48px; right: 30px; bottom:80px; z-index: 10000000000; display: block;  transform: translateY(60px);-webkit-animation:shake 4.0s infinite ease-in-out"><div style="height:48px;width:48px;background:url('assets/images/books.png') no-repeat scroll 0 0px transparent;z-index:999999999; text-indent:-8000px" id=e-close-ok >打开弹幕</div></div>

<div id="b-wind" style="display:none">
		<div id="b-wind-title">
			<div id="b-title-words">写留言</div>
			<div id="b-wind-close" onClick="e_book_close();">×</div>
		</div>
	<div id="b-wind-content">
    	<div style="display: block;">
    		<div class="b-share-title">
    			<textarea id="b-share-title" maxlength="30" rows="1" placeholder="输入留言内容(限30字)..."></textarea>
    		</div>
    		<div class="b-share-ok" onClick="e_book()">确定</div>
			<div class="b-share-ok2" id=e_tanmu onClick="e_tanmu()">关闭弹幕</div>
    	</div>
	</div>
</div>


<script>
function ToEditProduction(){
	location.href='<?=$guanzhu_url?>';
}

function e_book_show(){
	objid('b-wind').style.display='block';
	objid('xiala_div').style.display='none';
	
}

function e_book_close(){
	objid('b-wind').style.display='none';
	objid('xiala_div').style.display='block';
}


function e_tanmu(){
	var txt=objid("e_tanmu").innerHTML;
	if(txt=="关闭弹幕"){
		objid('canvas').style.display='none';
		objid('b-wind').style.display='none';
		objid('xiala_div').style.display='block';
		objid('e_tanmu').innerHTML ="开启弹幕";
		objid('e_tanmu').style.backgroundColor='#ff6600';
		
	}else{
		objid('canvas').style.display='';
		objid('b-wind').style.display='none';
		objid('xiala_div').style.display='block';
		objid('e_tanmu').innerHTML ="关闭弹幕";
		objid('e_tanmu').style.backgroundColor='#666666';
	}
}


function e_book()
		{
		var books= objid('b-share-title');
			if(books.value == "")
			{
				alert('至少输入点东西吧~');
				return false;
			}
			var currentLength = books.value.length; 
			if(currentLength>30)
			{
				alert('最多30个字哦');
				return false;
			}
			var url = "data/ajax_books.php?";
		    url = url + 'action=set_books';
		    url = url + "&tid=" + e_bookid;
		    url = url + "&fdes=" + encodeURIComponent(books.value);
		    XMLHttp.sendReq('POST', url, '', function(){
					textArr.push(books.value)
					objid('b-share-title').value='';
					objid('xiala_div').style.display='block';
					objid('b-wind').style.display='none';
					objid('e-close-ok').innerHTML ="打开弹幕" 
		    		alert("留言成功")
		    });
	}
</script>