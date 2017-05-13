jQuery(document).ready(function($) {
	
	$('#jssdkSet').click(function(){
		
		$('.theme-popover-mask').fadeIn(100);
		$('.dialog_add').show();
		$('.dialog_hd h3').html("添加管理员");
		$(".msg_content").html($("#viewTpl").html())
		$("#tid").val("0");
	})

	
	$('.closed').click(function(){
		$('.theme-popover-mask').fadeOut(100);
		$('.dialog_add').hide();
	})
	
	
	$('.app_add').unbind('click').click(function () {
			var tid=$('#tid').val();
			var $upass=$('#upass'); 
			
			
			var $uname=$('#uname');
			if (!$uname.val()) {
	    		alert('请输入名称！');
	    		 $('#uname').focus();
	    		return false;
	    	}
			
			
			if(tid==0){
				
				if (!$upass.val()) {
					alert('请输入密码！');
					 $('#sid').focus();
					return false;
				}
				var data = {}; 
				data.uname =$uname.val();
				data.upass =$upass.val();
				data.action = "add";
				jQuery.ajax({ 
					type:"POST", 
					url: "lib/ajax_admin.php", 
					data:data, 
					dataType: "json", 
					contentType: "application/x-www-form-urlencoded; charset=utf-8", 
					beforeSend: function(XMLHttpRequest){ 
					}, success:function(data) {
						if(data.state==1){
							alert("添加成功");
							top.location.reload()
						}else{
							alert(data.msg);
						}
					}, error:function(){ 
						alert("出错,请刷新后重试");
					} 
				});
			}else{
			
			
			var data = {}; 
				data.tid =tid;
				data.uname =$uname.val();
				data.upass =$upass.val();
				data.action = "edit_do";
				jQuery.ajax({ 
					type:"POST", 
					url: "lib/ajax_admin.php", 
					data:data, 
					dataType: "json", 
					contentType: "application/x-www-form-urlencoded; charset=utf-8", 
					beforeSend: function(XMLHttpRequest){ 
					}, success:function(data) {
						if(data.state==1){
							alert("编辑成功");
							top.location.reload()
						}else{
							alert(data.msg);
						}
					}, error:function(){ 
						alert("出错,请刷新后重试");
					} 
				});
			
			
			}
			return false;	
			
	 });
	
	
	
	$('.app_edit').click(function(){
				var tid=$(this).attr("tid");
				var data = {}; 
				data.tid =tid;	
				data.action = "eidt_admin";
				jQuery.ajax({ 
					type:"POST", 
					url: "lib/ajax_admin.php", 
					data:data, 
					dataType: "json", 
					contentType: "application/x-www-form-urlencoded; charset=utf-8", 
					beforeSend: function(XMLHttpRequest){ 
					}, success:function(data) {
						if(data.state==1){
							$(".msg_content").html(data.msg)
							$('.theme-popover-mask').fadeIn(100);
							$('.dialog_add').show();
						}
					}, error:function(){ 
						alert("出错,请刷新后重试");
					} 
				});
		
	})
	
	
	
	 $('.app_del').click(function () {
		var tid=$(this).attr("tid");
			var msg = "确定要删除吗？请确认！";   
			if (confirm(msg)==true){   
			
				var data = {}; 
				data.tid =tid;	
				data.action = "dell";
				jQuery.ajax({ 
					type:"POST", 
					url: "lib/ajax_admin.php", 
					data:data, 
					dataType: "json", 
					
					beforeSend: function(XMLHttpRequest){ 
					}, success:function(data) {
						if(data.state==1){
						 $("#tr_"+tid).remove(); 
						}else{
							alert(data.msg);
						}
					}, error:function(){ 
						alert("出错,请刷新后重试");
					} 
				});
			}
	   return false;
     });
	 
	 
}) ;