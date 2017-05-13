jQuery(document).ready(function($) {
				
	$("#jssdkSet").click(function(event){ 
		event.stopPropagation(); 
		$('.theme-popover-mask').fadeIn(100);
		$('.dialog_add').show();
		$('.dialog_hd h3').html("创建分类");
		
		$(".msg_content").html($("#viewTpl").html())
		
	})
	
	
	$('.closed').click(function(){
		$('.theme-popover-mask').fadeOut(100);
		$('.dialog_add').hide();;
		top.location.reload()
	})
	
	
	$(".delete").click(function(event){ 
		event.stopPropagation(); 
		 var id=$(this).attr("supervoteid");
		 $("#tr_"+id).remove(); 
	})
	
		
		
		
		
	$(".app_add").click(function(event){ 
			event.stopPropagation(); 
		
			var tid=$('#tid').val();
			var $sid=$('#sid'); 
			var $fpic=$('#fpic'); 
			var $title=$('#title');
			if (!$title.val()) {
	    		alert('请输入分类名称！');
	    		 $('#title').focus();
	    		return false;
	    	}
			
			
			if (!$sid.val()) {
	    		alert('请输入分类排序！');
	    		 $('#sid').focus();
	    		return false;
	    	}
			
			if(tid==0){
				console.log("开始");
				var data = {}; 
				data.title =$title.val();
				data.sid =$sid.val();
				data.fpic =$fpic.val();
				data.action = "class_add";
				jQuery.ajax({ 
					type:"POST", 
					url: "lib/ajax_template_class.php", 
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
				data.title =$title.val();
				data.sid =$sid.val();
				data.tid =tid;
				data.fpic =$fpic.val();
				data.action = "class_edit";
				jQuery.ajax({ 
					type:"POST", 
					url: "lib/ajax_template_class.php", 
					data:data, 
					dataType: "json",
					contentType: "application/x-www-form-urlencoded;charset=utf-8", 
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
	
		$(".app_edit").click(function(event){ 
		event.stopPropagation(); 
		var tid=$(this).attr("tid");
				var data = {}; 
				data.tid =tid;	
				data.action = "edit_class";
				jQuery.ajax({ 
					type:"POST", 
					url: "lib/ajax_template_class.php", 
					data:data, 
					dataType: "json",
					contentType: "application/x-www-form-urlencoded; charset=utf-8", 
					beforeSend: function(XMLHttpRequest){ 
					}, success:function(data) {
						if(data.state==1){
							
							$(".msg_content").html($(".msg_content").html()+data.msg)
							
							$('.dialog_hd h3').html("编辑分类");
							
							$('.theme-popover-mask').fadeIn(100);
							$('.dialog_add').show();
							
							
						}
					}, error:function(){ 
						alert("出错,请刷新后重试");
					} 
				});
			
			
	   return false;
     });
	
	
	
	$(".app_del").click(function(event){ 
		event.stopPropagation(); 
		var tid=$(this).attr("tid");
			var msg = "确定要删除吗？请确认！";   
			if (confirm(msg)==true){   
		
			 var data = {}; 
				data.tid =tid;	
				data.action = "class_dell";
				jQuery.ajax({ 
					type:"POST", 
					url: "lib/ajax_template_class.php", 
					data:data, 
					dataType: "json",
					contentType: "application/x-www-form-urlencoded; charset=utf-8", 
					beforeSend: function(XMLHttpRequest){ 
					}, success:function(data) {
						if(data.state==1){
						 $("#tr_"+tid).remove(); 
						}
					}, error:function(){ 
						alert("出错,请刷新后重试");
					} 
				});
			}
	   return false;
     });
	 
}) ;