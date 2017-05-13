<?php
session_start();
header("Content-type: text/html; charset=utf-8");
require_once '../include/common.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="renderer" content="webkit">
<meta charset="utf-8">
<title><?=$_WEITE["web_title"]?></title>
<link rel="stylesheet" href="css/login.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript">
if(window.parent.frames[0]){window.parent.location.href=location.href;}
</script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/login.js"></script>
</head>


<body style="background: #006666 url(images/login/005.jpg) no-repeat fixed center top;background-size: 100%; margin:0px auto; padding:0; overflow:hidden">

<div id="body" class="body page_login" style="margin-top:12%">

  <div class="login_frame" style="width:370px; height:250PX;  margin:0px auto;  padding-top:30px;">
    <h3  style="text-align:center;text-shadow: -1px -1px 0 #fff,1px 1px 0 #333,1px 1px 0 #444; margin-bottom:30px; height:40px; font-size:25PX;  font-family: 宋体"><?=$_WEITE["web_title"]?></h3>
   
    <form class="login_form" id="loginForm">
	<input type="hidden" name="formhash" id=formhash value="<?=FORMHASH?>" />
      <div class="login_input_panel" id="js_mainContent">
        <div class="login_input"> <i class="icon_login un"> </i>
          <input type="text" placeholder="&nbsp;用户名" name="username" id="username">
        </div>
        <div class="login_input"> <i class="icon_login pwd"> </i>
          <input type="password" placeholder="&nbsp;密码"  id="userpass" name="userpass">
        </div>
      </div>
      <div class="login_btn_panel"> <a class="btn_login" title="点击登录" href="javascript:" id="loginBt">登录</a> </div>
    </form>
  </div>
</div>

</body>
</html>