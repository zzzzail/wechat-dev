jQuery(document).ready(function($) {
	$('#loginBt').click(function(){
			
	    	var $username = $('#username');
	    	var $password = $('#userpass');
			
	    	if (!$username.val()) {
	    		alert('请输入用户名！');
	    		 $('#userName').focus();
	    		return false;
	    	}
			
	        if (!$password.val()) {
	            alert('请输入密码！');
	            $('#userPass').focus();
	            return false;
	        }
			
			var data = {}; 
			data.username =$username.val();			
            data.userpass = $password.val();
			data.action = "login";
			data.formhash =$('#formhash').val();
			jQuery.ajax({ 
                type:"POST", 
                url: "lib/ajax_login.php", 
                data:data, 
                dataType: "json", 
                beforeSend: function(XMLHttpRequest){ 
                    
                }, success:function(data) { 
					if(data.state==1){
					  location.href=data.msg;
					}
					else{
					   alert(data.msg);
					}
                }, error:function(){ 
                    alert("登陆出错,请尝试重新登陆");
                } 
            });
	})							
}) ;