

<div class="u-mask-layer" style="width:100%;height:100%; display:none"></div>
<div class="m-loginDialog" style=" display: none">
<style>
.u-mask-layer {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 10000;
    background: #000;
    opacity: 0.4;
}
.m-loginDialog {
    display: ;
    position: fixed;
    z-index: 10002;
    top: 20%;
    left: 50%;
    width: 520px;
    margin-left: -260px;
    background: #fff;
    box-shadow: 0 0 2px 2px rgba(66,66,66,0.35);
}
.m-loginDialog .close-btn,
.m-loginDialog .back-password-validate .close-validate-btn{
    display:block;
    position: absolute;
    right: 10px;
    top: 10px;

    width: 15px;
    height: 17px;
    background: url(assets/index/images/close_icon.png);
}
.m-loginDialog .login,
.m-loginDialog .register,
.m-loginDialog .back-password-validate,
.m-loginDialog .reset-password,
.m-loginDialog .reset-sucess-tip {
    display: none;
}


.m-loginDialog .header{
    height: 38px;
    width: 100%;
    margin-top: 25px;
    padding-bottom: 10px;
    background: url(assets/index/images/login_logo.png) no-repeat center 0;
}



.m-loginDialog .login .title,
.m-loginDialog .register .title,
.m-loginDialog .back-password-validate .title,
.m-loginDialog .reset-password .title,
.m-loginDialog .reset-sucess-tip .title{
    position: relative;
    margin-top: 21px;
    height: 33px;
    line-height: 33px;
    text-align: center;
}
.m-loginDialog .login .title {
    margin-top: 10px;
}
.m-loginDialog .login hr,
.m-loginDialog .register hr,
.m-loginDialog .back-password-validate hr,
.m-loginDialog .reset-password hr,
.m-loginDialog .reset-sucess-tip hr {
    position: absolute;
    width: 87px;
    border: none;
    height: 1px;
    background: #D9D7D7;
}
.m-loginDialog .login .left,
.m-loginDialog .register .left,
.m-loginDialog .back-password-validate .left,
.m-loginDialog .reset-password .left,
.m-loginDialog .reset-sucess-tip .left {
    top: 17px;
    left: 90px;
}

.m-loginDialog .login .right ,
.m-loginDialog .register .right,
.m-loginDialog .back-password-validate .right,
.m-loginDialog .reset-password .right,
.m-loginDialog .reset-sucess-tip .right{
    top: 17px;
    left: 344px;
}

.m-loginDialog .login {
}
.m-loginDialog .login .other {
    width: 342px;
    height: 43px;
    margin: 0 auto;
    margin-top: 5px;
    padding-bottom: 10px;
}
.m-loginDialog .login .other a {
    display: block;
    width: 110px;
    height: 40px;
    line-height: 40px;
    padding-left: 35px;

    text-align: center;
    color: #fff;
}
.m-loginDialog .login  .qq-btn,
.m-loginDialog .login  .weixin-btn {
    width: 151px;
    height: 40px;
}

/*璐﹀彿鐧婚檰*/
.m-loginDialog .login .account {
    position: relative;

}
.m-loginDialog .login .login-input,
.m-loginDialog .login .login-other,
.m-loginDialog .register .register-input, 
.m-loginDialog .register .sure-password,
.m-loginDialog .reset-password .input-password,
.m-loginDialog .reset-password .input-password,
.m-loginDialog .reset-password .sure-password{
    height: 81px;
    width: 338px;
    border: 1px solid #cccccc;
    margin: 0 auto;
    margin-top: 5px;
}
.m-loginDialog .login .login-other {
    width: 332px;
    padding: 0 4px;
    height: 20px;
    line-height: 20px;
    border: 0;
    margin-top: 10px;
}
.m-loginDialog .login .login-other span {
    display: inline-block;
}
.m-loginDialog .login .login-other span.login-auto {
    position: relative;
    padding-left: 20px;
}
.m-loginDialog .login .login-other .input-chk {
    display: inline-block;
    width: 14px;
    height: 14px;
    position: absolute;
    top: 3px;
    left: 0;
}
.m-loginDialog .login .login-email,
.m-loginDialog .login .login-password,
.m-loginDialog .register .register-email,
.m-loginDialog .register .register-password,
.m-loginDialog .register .sure-password,
.m-loginDialog .reset-password .input-password,
.m-loginDialog .reset-password .sure-password{
    position: relative;
    height: 40px;
}
.m-loginDialog .login  .login-email,
.m-loginDialog .register .register-email,
.m-loginDialog .register .sure-password{
     border-bottom: 1px solid #cccccc;
}
.m-loginDialog .login input.input-txt,
.m-loginDialog .register input,
.m-loginDialog .back-password-validate input,
.m-loginDialog .reset-password input
{
    border:none;
    height: 39px;
    line-height: 20px;
    padding-left: 10px;
    width:97%;
    background-color: rgba(0,0,0,0);
    font-size: 14px;
    color: #444;
}

.m-loginDialog .login .login-btn,
.m-loginDialog .register .register-btn{
    width: 341px;
    height: 40px;
    line-height: 40px;
    border-radius: 2px;
    margin: 0 auto;
    margin-top: 17px;
    text-align: center;
    color: #fff;
    font-size: 16px;
    background: #5fb336;
}
.m-loginDialog .login .login-btn {
    margin-top: 10px;
}
.m-loginDialog .login .login-btn:hover,
.m-loginDialog .register .register-btn:hover{
    background-color: #55a130;
}
.m-loginDialog .login .tip-text {
    height: 30px;
    width: 341px;
    margin: 0 auto;
    margin-top: 5px;
    line-height: 30px;
    position: relative;
}
.m-loginDialog .login .tip-text span {
    display: block;
}
.m-loginDialog .register .register-input {
    height: 122px;
}
.m-loginDialog .register .sure-password {
    margin-top: 0;
    border:none;
}
.m-loginDialog .register .register-password {
    border-bottom: 1px solid #cccccc;
}
.m-loginDialog .register .register-txt {
    width: 341px;
    margin-top: 10px;
    margin-left: auto;
    margin-right: auto;
    text-align: center;
    line-height: 30px;
}

.m-loginDialog .footersize {
    height:23px;
    margin-top: 15px;
    line-height: 23px;
    background: #eeeeee;
    text-align: center;
    color:#888888; overflow:hidden; font-size:12px
}



.m-loginDialog .back-password-validate {

}
.m-loginDialog .back-password-validate .sended-validate-tip {
    display: none;
    
    position: absolute;
    z-index: 100;
    top: -50px;

    width: 520px;
    height: 184px;

    background: #fff;
    border: 1px solid #ccc;
}

.m-loginDialog .back-password-validate .sended-validate-tip .tip-text {
    width: 372px;
    height: 46px;
    padding-left: 40px;
    margin-left: auto;
    margin-right: auto;
    margin-top: 50px;

    background: #fff url(./img/hint_icon1.png) 0 4px no-repeat;
    color: #5fb336;
    font-size: 16px;
}

.m-loginDialog .back-password-validate .sended-validate-tip .green-btn {
    display: block;
    width: 100px;
    height: 30px;
    border-radius: 2px;
    line-height: 30px;
    margin-left: auto;
    margin-right: auto;
    margin-top: 20px;

    color: #fff;
    background: #5fb336;
    text-align: center;
    font-size: 16px;
}
.m-loginDialog .back-password-validate .get-validate-word,
.m-loginDialog .back-password-validate .input-validate {
    width: 341px;
	margin-top: 5px;
}
.m-loginDialog .back-password-validate  .email {
    position: relative;
    float: left;
    width: 208px;
    height: 39px;
    border: 1px solid #cccccc;
}
.m-loginDialog .back-password-validate .get-validate-btn {
    float: right;
    width: 100px;
    height: 39px;
    line-height: 39px;
    border-radius: 2px;
    text-align: center;
    background: #61b335;
    color: #fff;
}
.m-loginDialog .back-password-validate .get-validate-btn.z-btn-gray{
    background: gray;
}
.m-loginDialog .back-password-validate .get-validate-btn:hover{
    background-color: #55a130;
}
.m-loginDialog .back-password-validate .get-validate-btn.z-btn-gray:hover {
    background: gray;
}

.m-loginDialog .back-password-validate .input-validate {
    position: relative;
    border: 1px solid #cccccc;
    margin-top: 15px;
}
.m-loginDialog .back-password-validate  .back-password-btn {
   width: 341px;
   margin-top: 10px; 
}
.m-loginDialog .back-password-validate  .back-password-btn:hover {
     background-color: #55a130;

     color: #fff;
}
.m-loginDialog .back-password-validate .tip-text,
.m-loginDialog .reset-password .tip-text {
    height: 22px;
    line-height: 22px;    
    width: 341px;
    margin: 15px auto;
    margin-bottom: 30px;
}
.m-loginDialog .back-password-validate .telephone,
.m-loginDialog .reset-password .telephone{
    float: left;
    height: 22px;
    line-height: 22px;
    padding-left: 35px;
    background: url(./img/telphone.png) no-repeat 0 center;
}



.m-loginDialog .reset-password {
    
}
.m-loginDialog .reset-password .reset-password-btn {
    width: 341px;
    margin-top: 10px;
    margin-left: auto;
    margin-right: auto;
}



.m-loginDialog  .reset-sucess-tip {

}

.m-loginDialog  .reset-sucess-tip .sucess-text {
    width: 341px;
    margin: 0 auto;

    font-size: 16px;
    text-align: center;
}

.m-loginDialog  .reset-sucess-tip .login-text-tip {
    height: 20px;
    width: 90px;
    margin: 30px auto;
    padding-bottom: 5px;
    border-bottom: 1px solid #5fb336;
   
    text-align: center;
    font-size: 16px;
}

input:-webkit-autofill {
    -webkit-box-shadow: 0 0 0px 1000px white inset;
}

/
.pointer{
    cursor: pointer;
}
.j-login.pointer:hover, .j-forget-password.pointer:hover, .j-register.pointer:hover, .register-txt .provision:hover{
	text-decoration: underline;
}

</style>
<div class="header" ></div>
<span class="close-btn pointer" ></span>
<div class="login"  style="display:block">
        <div class="account">
            <form id="form-login" action="" method="post">
            <div class="login-input">
                <div class="login-email">
                    <input type="text" name="appname" id=appname class="input-txt" placeholder="请输入AppId">
                </div>
                <div class="login-password">
                    <input type="password" name="apppass" id=apppass class="input-txt" placeholder="请输入密码">
                </div>
            </div>
           
            </form>
            <div class="login-btn pointer">
                登录
            </div>
            
           
        </div>
        
        <!-- 脚部浏览器兼容提示 -->
        <div class="footersize" style=" height:30px; line-height:30px" >
            <span class="f-color-green">提示:</span>
            为了获得更好的体验建议使用谷歌浏览器（chrome）！
        </div>
    </div>
 </div>
<script>
jQuery(document).ready(function($) {
	$('#login').click(function(){
		//$('.theme-popover-mask').fadeOut(100);
		$('.u-mask-layer').show();
		$('.m-loginDialog').show();
	})
	
	$('.close-btn').click(function(){
		$('.m-loginDialog').hide();
		$('.u-mask-layer').hide();
	})
	
	$('.login-btn').click(function(){
		
			
			var $appname=$('#appname');
			if (!$appname.val()) {
	    		alert('请输入用户名！');
	    		 $('#appname').focus();
	    		return false;
	    	}
			
			var $apppass=$('#apppass');
			if (!$apppass.val()) {
	    		alert('请输入密码！');
	    		 $('#apppass').focus();
	    		return false;
	    	}
			
				var data = {}; 
				data.appname =$appname.val();
				data.apppass =$apppass.val();
				data.action = "login";
				jQuery.ajax({ 
					type:"POST", 
					url: "data/app_login.php", 
					data:data, 
					dataType: "json", 
					contentType: "application/x-www-form-urlencoded; charset=utf-8", 
					beforeSend: function(XMLHttpRequest){ 
					}, success:function(data) {
						if(data.state==1){
							location.href='main.php'
						}else{
						alert(data.msg);
						}
					}, error:function(){ 
						alert("出错,请刷新后重试");
					} 
				});
			
		
	})
	
}) ;
</script>
<div id="cgts"><span id="cgtstext"></span>
  <div class="xiasanjiaots"></div>
</div>
<div class="footer w1200" >
  <p>点影-旗下微信音乐相册，为您提供更优质的音乐相册模板，为您打造，专属定制，这个世界上独一无二的酷炫微卡。。</p>
  <p class="copyright">CopyRight &copy; 2012-2017 www.loocall.com,All Rights Reserved. </div>
</div>
<div style="display:none">
  <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_5829903'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s23.cnzz.com/stat.php%3Fid%3D5829903%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
</div>
</body>
</html>
