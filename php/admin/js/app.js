jQuery(document).ready(function($) {
	 $('.recommend').click(function () {
	   var flag=$(this).attr("flag");
		var tid=$(this).attr("tid");
       var left = parseInt($(this).offset().left) + 10,
           top = parseInt($(this).offset().top) - 10,
           obj = $(this);
		   
		if(flag==0){	 
         	$(this).append('<div class="zhans"><b>-取消<\/b></\div>');
			var color="#009900";
			var html="<font color='#000000'>关</font>";
			var f=1;
		}else{
			$(this).append('<div class="zhans"><b>+推荐<\/b></\div>');
			var color="#dc0000";
			var html="<font color='#FF0000'>荐</font>";
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
             $("#re"+tid).html(html);
			 $("#re"+tid).attr("flag",f);
				var data = {}; 
				data.tid =tid;			
				data.flag = flag;
				data.action = "recommend";
				jQuery.ajax({ 
					type:"POST", 
					url: "lib/ajax_apps.php", 
					data:data, 
					dataType: "json", 
					contentType: "application/x-www-form-urlencoded; charset=utf-8", 
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
	 
	 
	 
	 
	 
	 $('.indexshow').click(function () {
	   var flag=$(this).attr("flag");
		var tid=$(this).attr("tid");
       var left = parseInt($(this).offset().left) + 10,
           top = parseInt($(this).offset().top) - 10,
           obj = $(this);
		   
		if(flag==0){	 
         	$(this).append('<div class="zhans"><b>-隐藏<\/b></\div>');
			var color="#000000";
			var html="<font color='#000000'>隐</font>";
			var f=1;
		}else{
			$(this).append('<div class="zhans"><b>+显示<\/b></\div>');
			var color="#dc0000";
			var html="<font color='#ff0000'>显</font>";
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
             $("#indexshow"+tid).html(html);
			 $("#indexshow"+tid).attr("flag",f);
			 ////ajax
			 
			 var data = {}; 
				data.tid =tid;			
				data.flag = flag;
				data.action = "indexshow";
				jQuery.ajax({ 
					type:"POST", 
					url: "lib/ajax_apps.php", 
					data:data, 
					dataType: "json", 
					contentType: "application/x-www-form-urlencoded; charset=utf-8", 
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
					url: "lib/ajax_apps.php", 
					data:data, 
					dataType: "json", 
					contentType: "application/x-www-form-urlencoded; charset=utf-8", 
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
	 
	 
	 
	 
	 
	 
	 $('.app_del').click(function () {
		var tid=$(this).attr("tid");
			var msg = "确定要删除吗？请确认！";   
			if (confirm(msg)==true){   
		
			 var data = {}; 
				data.tid =tid;	
				data.action = "dell";
				jQuery.ajax({ 
					type:"POST", 
					url: "lib/ajax_apps.php", 
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
			top.location.href='apps.php?title='+$SearchInput.val()+"&classid2="+$classid.val();
	});
	 
	$('#classid2').change(function(){ 
	var $SearchInput = $('#msgSearchInput');
	var $classid = $('#classid2');
	top.location.href='apps.php?title='+$SearchInput.val()+"&classid2="+$classid.val();
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
		
	$('.avatar').mouseover(function(){
		var id=$(this).attr("id");
		$("#qr_"+id).css('display','block');
	});	
 	$('.avatar').mouseout(function(){
 		var id=$(this).attr("id");
		$("#qr_"+id).css('display','none'); 
 	 });
	
	 $('.btn_open').click(function(){
			var tid=$('#tid').val(); 
			
			var $classid=$('#classid_'+tid);
			if (!$classid.val()) {
	    		alert('请选择分类！');
	    		 $('#classid').focus();
	    		return false;
	    	}
			
			
			var data = {}; 
				data.tid =tid;
				data.classid =$classid.val();
				data.action = "editclass";
				jQuery.ajax({ 
					type:"POST", 
					url: "lib/ajax_apps.php", 
					data:data, 
					dataType: "json", 
					contentType: "application/x-www-form-urlencoded; charset=utf-8", 
					beforeSend: function(XMLHttpRequest){ 
					}, success:function(data) {
						if(data.state==1){
							top.location.reload()
						}
					}, error:function(){ 
						alert("出错,请刷新后重试");
					} 
				});
			
			
			
	 });
	
	$('.jssdkSet').click(function(){
	var id=$(this).attr("id");
				var data = {}; 
				data.tid =id;	
				data.action = "getclass";
				jQuery.ajax({ 
					type:"POST", 
					url: "lib/ajax_apps.php", 
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
	$('.closed').click(function(){
		$('.theme-popover-mask').fadeOut(100);
		$('.dialog_add').hide();
	})
}) ;