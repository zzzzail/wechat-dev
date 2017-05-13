jQuery(document).ready(function($) {
	
	$('.delete').click(function(){
		 var id=$(this).attr("supervoteid");
		 $("#tr_"+id).remove(); 
	})
	
	
	$('#btnedit').click(function () {
							  
				var $tid=$('#tid');
				var $title=$('#title');
				if (!$title.val()) {
					alert('请输入用户组标题');
					 $('#title').focus();
					return false;
				}
			 
				var op="";
				$("#zxxFriMain .zxx_fri_a").each(function(){	
					 if($(this).hasClass("zxx_fri_on")){
						op+=$(this).attr("data-key").toString()+"|"
					}
				})	
				
				var data = {}; 
				data.tid =$tid.val();
				data.title =$title.val();
				data.shumu =$('#shumu').val();
				data.mbs =$('#mbs').val();
				data.shumu =$('#shumu').val();
				data.jifen =$("#jifen").val();
				data.price =$("#price").val();
				data.isfanli =$("#isfanli").val();
				data.sid =$("#sid").val();
				data.modules =op;
				data.action = "edit";
				jQuery.ajax({ 
					type:"POST", 
					url: "lib/ajax_members_group.php", 
					data:data, 
					dataType: "json", 
					contentType: "application/x-www-form-urlencoded; charset=utf-8", 
					beforeSend: function(XMLHttpRequest){ 
					}, success:function(data) {
						if(data.state==1){
							alert("编辑成功");
							location.href='members_group.php'
						}
					}, error:function(){ 
						alert("出错,请刷新后重试");
					} 
				});
	  return false;
	
	});
	
	
				$("#btnadd").click(function(event){ 
				event.stopPropagation(); 
								 
				var $title=$('#title');
				if (!$title.val()) {
					alert('请输入用户组标题');
					 $('#title').focus();
					return false;
				}
			 
				
				var op="";
				$("#zxxFriMain .zxx_fri_a").each(function(){	
					 if($(this).hasClass("zxx_fri_on")){
						op+=$(this).attr("data-key").toString()+"|"
					}
				})	
				
				var data = {}; 
				data.title =$title.val();
				data.shumu =$('#shumu').val();
				data.mbs =$('#mbs').val();
				data.shumu =$('#shumu').val();
				data.jifen =$("#jifen").val();
				data.price =$("#price").val();
				data.isfanli =$("#isfanli").val();
				data.sid =$("#sid").val();
				data.modules =op;
				data.action = "add";
				jQuery.ajax({ 
					type:"POST", 
					url: "lib/ajax_members_group.php", 
					data:data, 
					dataType: "json", 
					contentType: "application/x-www-form-urlencoded; charset=utf-8", 
					beforeSend: function(XMLHttpRequest){ 
					}, success:function(data) {
						if(data.state==1){
							alert("添加成功");
							location.href='members_group.php'
						}
					}, error:function(){ 
						alert("出错,请刷新后重试");
					} 
				});
	  return false;
     });
	
$('.app_del').click(function () {
		var tid=$(this).attr("tid");
			var msg = "确定要删除吗？请确认！";   
			if (confirm(msg)==true){   
		
			 var data = {}; 
				data.tid =tid;	
				data.action = "dell";
				jQuery.ajax({ 
					type:"POST", 
					url: "lib/ajax_members_group.php", 
					data:data, 
					dataType: "json", 
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
});	