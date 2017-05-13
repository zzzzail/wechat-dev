jQuery(document).ready(function($) {
	  
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
	 
	
	$('.isopen').click(function () {
	   var flag=$(this).attr("flag");
		var tid=$(this).attr("tid");
       var left = parseInt($(this).offset().left) + 10,
           top = parseInt($(this).offset().top) - 10,
           obj = $(this);
		   
		if(flag==0){	 
         	$(this).append('<div class="zhans"><b>-关闭<\/b></\div>');
			var color="#009900";
			var html="<font color='#FF0000'>关</font>";
			var f=1;
		}else{
			$(this).append('<div class="zhans"><b>+开启<\/b></\div>');
			var color="#dc0000";
			var html="<font color='#000000'>开</font>";
			var f=0;
		}
		
         $('.zhans').css({
             'position': 'absolute',
             'z-index': '1',
             'color': color,
             'left': left + 'px',
             'top': top + 'px'
         }).animate({
             top: top - 100,
             left: left + 100
         }, 'slow', function () {
             $(this).fadeIn('fast').remove();
             $("#isopen"+tid).html(html);
			 $("#isopen"+tid).attr("flag",f);
			 ////ajax
			 
			 var data = {}; 
				data.tid =tid;			
				data.flag = flag;
				data.action = "isopen";
				jQuery.ajax({ 
					type:"POST", 
					url: "lib/ajax_members.php", 
					data:data, 
					dataType: "json", 
					beforeSend: function(XMLHttpRequest){ 
					}, success:function(data) {
					}, error:function(){ 
						alert("出错,请刷新后重试");
					} 
				});
			 ////ajax
         });
         return false;
     });
	 
	 
	 
	 
	 
	
	$('.user_admin').click(function(){
				$(".msg_content").html('')				
				var id=$(this).attr("id");
				var data = {}; 
				data.tid =id;	
				data.action = "edit_admin";
				jQuery.ajax({ 
					type:"POST", 
					url: "lib/ajax_members.php", 
					data:data, 
					dataType: "json", 
					beforeSend: function(XMLHttpRequest){ 
					}, success:function(data) {
						if(data.state==1){
						$(".dialog_hd h3").html("编辑权限")
						$(".msg_content").html(data.msg)
						$('.theme-popover-mask').fadeIn(100);
						$('.dialog_add').show();
						}
					}, error:function(){ 
						alert("出错,请刷新后重试");
					} 
				});
				
		return false;		
	})
	
	
	$('.user_group').click(function(){
	var id=$(this).attr("id");
				var data = {}; 
				data.tid =id;	
				data.action = "edit_class";
				jQuery.ajax({ 
					type:"POST", 
					url: "lib/ajax_members.php", 
					data:data, 
					dataType: "json", 
					beforeSend: function(XMLHttpRequest){ 
					}, success:function(data) {
						if(data.state==1){
						$(".dialog_hd h3").html("更换用户组")
						$(".msg_content").html(data.msg)
						$('.theme-popover-mask').fadeIn(100);
						$('.dialog_add').show();
						}
					}, error:function(){ 
						alert("出错,请刷新后重试");
					} 
				});
		return false;
	})
	
	
	$('.btn_open').click(function(){
			var tid=$('#tid').val(); 
			var action=$('#action').val(); 
			
			
		if(action=="edit_class_do"){
			var $classid=$('#classid');
			if (!$classid.val()) {
	    		alert('请选择分类！');
	    		 $('#classid').focus();
	    		return false;
	    	}
			
			var $statdate=$('#statdate');
			if (!$statdate.val()) {
	    		alert('请输入日期！');
	    		 $('#statdate').focus();
	    		return false;
	    	}
			
			var $enddate=$('#enddate');
			if (!$enddate.val()) {
	    		alert('请输入日期！');
	    		 $('#enddate').focus();
	    		return false;
	    	}
			
			
			var data = {}; 
				data.tid =tid;
				data.classid =$classid.val();
				data.statdate =$statdate.val();
				data.enddate =$enddate.val();
				data.action = "edit_class_do";
				
				
				jQuery.ajax({ 
					type:"POST", 
					url: "lib/ajax_members.php", 
					data:data, 
					dataType: "json", 
					beforeSend: function(XMLHttpRequest){ 
					}, success:function(data) {
						if(data.state==1){
							//alert("修改成功")
							$('.theme-popover-mask').fadeOut(100);
							$('.dialog_add').hide();
							$("#"+tid).html("<font color=#009966>"+data.msg+"</font>")
						}
					}, error:function(){ 
						alert("出错,请刷新后重试");
					} 
				});
				
			}if(action=="edit_admin_do"){
			
			var islogo=0;
			var banquan=0;
			var $mbs=$('#mbs');
			var $appnums=$('#appnums');
						
			$("input[id='islogo']:checked").each(function(){
				islogo=1
			});
			
			$("input[id='banquan']:checked").each(function(){
				banquan=1
			});
			
			
			var data = {}; 
				data.tid =tid;
				data.islogo =islogo;
				data.banquan =banquan;
				data.mbs =$mbs.val();
				data.appnums =$appnums.val();
				data.action = "edit_admin_do";
				
				jQuery.ajax({ 
					type:"POST", 
					url: "lib/ajax_members.php", 
					data:data, 
					dataType: "json", 
					beforeSend: function(XMLHttpRequest){ 
					}, success:function(data) {
						if(data.state==1){
							alert("编辑成功")
							$('.theme-popover-mask').fadeOut(100);
							$('.dialog_add').hide();
						}
					}, error:function(){ 
						alert("出错,请刷新后重试");
					} 
				});
			
			}if(action=="edit_do"){
			
			var $telpass=$('#telpass');
			var $qq=$('#qq');
			var $price=$('#price');
		
		
			var data = {}; 
				data.tid =tid;
				data.telpass =$telpass.val();
				data.qq =$qq.val();
				data.price =$price.val();
				data.action = "edit_do";
				jQuery.ajax({ 
					type:"POST", 
					url: "lib/ajax_members.php", 
					data:data, 
					dataType: "json", 
					beforeSend: function(XMLHttpRequest){ 
					}, success:function(data) {
						if(data.state==1){
							alert("编辑成功")
							$("#price_"+tid).html(data.msg)
							$('.theme-popover-mask').fadeOut(100);
							$('.dialog_add').hide();
						}
					}, error:function(){ 
						alert("出错,请刷新后重试");
					} 
				});
			
		}
			return false;	
				
	 });
	
	
	 $('.app_edit').click(function () {
		var tid=$(this).attr("tid");
			
			 var data = {}; 
				data.tid =tid;	
				data.action = "edit";
				jQuery.ajax({ 
					type:"POST", 
					url: "lib/ajax_members.php", 
					data:data, 
					dataType: "json", 
					beforeSend: function(XMLHttpRequest){ 
					}, success:function(data) {
						if(data.state==1){
							$(".dialog_hd h3").html("基本信息修改")
							$(".msg_content").html(data.msg)
							$('.theme-popover-mask').fadeIn(100);
							$('.dialog_add').show();
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
					url: "lib/ajax_members.php", 
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
	    	var $classid = $('#classid2');
			top.location.href='members.php?title='+$SearchInput.val()+"&classid2="+$classid.val();
	});
	
	
	$('.closed').click(function(){
		$('.theme-popover-mask').fadeOut(100);
		$('.dialog_add').hide();
	})
	
}) ;