<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
<?=$_WEITE['web_title']?>
</title>
<meta name="keywords" content="<?=$_WEITE['web_title']?>" />
<meta name="description" content="<?=$_WEITE['web_title']?>" />
<link rel="stylesheet" type="text/css" href="assets/index/css/base.css?id=12456" />
<link rel="stylesheet" type="text/css" href="assets/index/css/index.css?id=132" />
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/js/jquery.qrcode.min.js"></script>
<script>
 $(function() {
	$(".exit,#user-c").mouseenter(function() {
		$("#user-c").show();
	}).mouseleave(function() {
		$("#user-c").hide();
	}); 
	
	$('#login_out').click(function(){
				var data = {}; 
				data.action = "login_out";
				jQuery.ajax({ 
					type:"POST", 
					url: "data/ajax_members.php", 
					data:data, 
					dataType: "json", 
					contentType: "application/x-www-form-urlencoded; charset=utf-8", 
					beforeSend: function(XMLHttpRequest){ 
					}, success:function(data) {
						if(data.state==1){
							location.href='index.php'
						}else{
						alert(data.msg);
						}
					}, error:function(){ 
						alert("出错,请刷新后重试");
					} 
				});
	})
});
</script>
</head>
<body>
<div class="head-wrap">
  <div class="head w1200">
    <div class="head-logo2 fl"><a href="index.php" title="长寿俱乐部音乐相册">长寿俱乐部微信音乐相册</a></div>
    <ul class="nav">
      <li class="fl"><a href="index.php" title="首页" class="current">首页</a></li>
      <li class="fl"><a href="template.php" title="模版" >模版</a></li>
      <li class="fl"><a href="help.php"  >使用教程</a></li>
      <!--<li class="fl"><a href="https://item.taobao.com/item.htm?id=526399048631" target="_blank" >淘宝店铺</a></li>
	  <li class="fl"><a href="http://sighttp.qq.com/authd?IDKEY=d39be81e0dc54742061535ce5f0dbbcb2c2a2f00a78227c6" target="_blank"  style="color:#FF0000" >我要购买系统</a></li>-->
    </ul>
	
	
    <ul class="button fr">
		<?
		if($weite_uid){
		?>
      <li class="fl exit"  style="position:relative">
	  <span class="uc" style="display:inline-block;_padding-top:18px;">Hi,<i><?=$weite_username?></i><a href="main.php" class="vip forver-vip"  style="background: url(assets/index/images/head-iconV1.2.png) -6px -45px no-repeat;"></a>
	  </span> 
	  
	  <div id="user-c" style="display:;">
	  <a href="member_app.php"  class="user-ht" >相册管理</a>
	  <a href="member_openid.php"  class="user-ht" >用户管理</a>
	  <a href="member_pics.php"  class="user-ht" >图片管理</a>
	   <a href="member_music.php"  class="user-ht" >音乐管理</a>
	  
	   <a href="member_qiniu.php"  class="user-ht" >七牛上传</a>
	  <a href="member_token.php"  class="user-ht" >公众号对接</a>
	  <a href="member_info.php"  class="user-ht" >密码修改</a>
	  <a href="javascript:void(0)" title="退出"  id=login_out class="user-iload">安全退出</a>
	  </div>
	  
	  </li>
	  <?
	  }else{
	  ?>
	   <li class="fl enroll"><a href="javascript:void(0)" id=login>代理登陆</a></li>
	  <?
	  }
	  ?>
    </ul>
  </div>
</div>