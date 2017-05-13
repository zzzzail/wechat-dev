<?php 
session_start();
header("Content-type: text/html; charset=utf-8");
require_once 'include/common.inc.php';
require_once 'data/app_session.php';
$addsql=" and gh='$rss[sn]'";
include 'web_head.php';
?>

<div class="upload-main">
  <div class="upload-box w1200">
    <h3 style="font-weight:700">用户管理
	<span class="delbtn"  style="float:right; font-size:14px; width:150px; text-align:center; padding:5px; margin-right:15px"><a href="member_openid_face.php" target="_blank"  style="color:#FFFFFF" >更新用户信息</a></span>
	</h3>
    <div class="up-list">
      
	<div id="mainlist">
	  <div class="paihang-title">
		  <ul class="nameTit">
		  <li >ID</li>
		  <li>用户头像</li>
		  <li  style="width:500px">用户呢称</li>
		  
		   <li style="width:300px">注册时间</li>
		   <li >操作</li>
		  </ul>
	  </div>
	  
		   <div class="rankListBox">
		   <div class="rankList">
		  <?
			$pagesize=12;
			$page=intval($page);
			if($page<=0 && !$page)
			{
				$page=1;
			}
			$offset=($page-1)*$pagesize;
			if($offset<0)
			{
				$offset=0;
			}
			$i=1;
			
			$query = $db->query("select tid from {$tablepre}openid where tid>0 $addsql order by tid desc");
			$total= $db->num_rows($query);
			$pagenum=ceil($total/$pagesize);
			$url="member_openid.php";
			$kmulti = multi($total,$pagesize, $page, $url, $idd);
			$query = $db->query("select * from {$tablepre}openid where tid>0 $addsql order by tid desc $order limit $offset,$pagesize");
			$k=($page-1)*$pagesize;
			while($rs=$db->fetch_array($query)){
			
			if($i%2==0){
			$c="odd";
			}else{
			$c="even";
			}
			
			?>
		   <div class="rankall rankListItem <?=$c?>" rel=<?=$rs["tid"]?>  style="position:relative" id="td<?=$rs["tid"]?>">
		   
		   <div class="commom_div "><?=($k+1)?></div>
		   <div class="commom_div" ><img src="<?=$rs["face"]?>">
		   </div>
		   <div class="commom_div" style="width:500px"><span class="blodTotal"> <?
				  if($rs["username"]!="匿名"){
				  echo $rs["username"];
				  }else{
				  echo $rs["openid"];
				  }
				  ?></span></div> 
		   
		    <div class="commom_div " style="width:300px"><span class="blodTotal"> <?=date("Y-m-d H:i:s",$rs["dateline"])?></span></div> 
			<div class="commom_div "><span class="blodTotal">  <a href="javascript:void(0)"  class="delbtn del" rel="<?=$rs["tid"]?>">删除</a></span></div>
		   </div>
		   <?
		   $i++;
		   $k++;
			}
			?>
		  </div>
	  
	 </div>
	 </div>
	 <div id="showpage"> <?php echo $kmulti	?></div>
	  
     </div>
  </div>
</div>
<script>

 $(function() {

          $(".rankListItem").mouseover(function(){
                $(this).css("background-color","#f5f5f5");
          });
		  
		  $(".rankListItem").mouseout(function(){
                $(this).css("background-color","#fff");
          });
		  
		  
		$('.rankListItem').mouseover(function(){
			var id=$(this).attr("rel");
			$("#p"+id).show();
		});	
	
		 $('.rankListItem').mouseout(function(){
			var id=$(this).attr("rel");
			$("#p"+id).hide();
		 });

		  
		$('.del').click(function () {
		var tid=$(this).attr("rel");
			var msg = "确定要删除吗？请确认！";   
			if (confirm(msg)==true){  
			 var data = {}; 
				data.tid =tid;	
				data.action = "dell_user";
				jQuery.ajax({ 
					type:"POST", 
					url: "data/ajax_members.php", 
					data:data, 
					dataType: "json", 
					beforeSend: function(XMLHttpRequest){ 
					}, success:function(data) {
						if(data.state==1){
						 $("#td"+tid).remove(); 
						}
					}, error:function(){ 
						alert("出错,请刷新后重试");
					} 
				});
			}
	   return false;
     });
		 
		
		  
      })
</script>
<?php 
include 'web_foot.php';
?>
