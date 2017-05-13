jQuery(document).ready(function($) {
	
	 $('.app_del').click(function () {
		var tid=$(this).attr("tid");
		var msg = "确定要删除吗？请确认！";   
		if (confirm(msg)==true){  
			 var data = {}; 
				data.tid =tid;	
				data.action = "dell";
				jQuery.ajax({ 
					type:"POST", 
					url: "lib/ajax_media.php", 
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
	 
	 
	 $('#msgSearchBtn').click(function () {
			var $SearchInput = $('#msgSearchInput');
			top.location.href='media.php?title='+$SearchInput.val();
	});
	 
	
	 
	 $("#IDAll").click(function(){
		  $("[type='checkbox']").each(function() {
		   if($(this).prop("checked"))
		   {
			$(this).attr("checked", false);
			$("#IDAll").prop("checked", false);
		   }
		   else
		   {
			$(this).prop("checked", true);
				$("#IDAll").prop("checked",true);
		   }
		  });
		 });
}) ;