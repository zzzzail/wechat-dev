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
    <h3 style="font-weight:700">相册管理</h3>
    <div class="up-list">
      
	<div id="mainlist">
	  <div class="paihang-title">
		  <ul class="nameTit">
		  <li >相册ID</li>
		  <li>相册封面</li>
		  <li  style="width:300px">相册标题</li>
		  <li >作者</li>
		  <li>浏览次数</li>
		   <li>分享次数</li>
		   <li style="width:200px">制作时间</li>
		   <li style="width:40px">操作</li>
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
			
			$query = $db->query("select tid from {$tablepre}app where tid>0 $addsql order by tid desc");
			$total= $db->num_rows($query);
			$pagenum=ceil($total/$pagesize);
			$url="member_app.php";
			$kmulti = multi($total,$pagesize, $page, $url, $idd);
			$query = $db->query("select * from {$tablepre}app where tid>0 $addsql order by tid desc $order limit $offset,$pagesize");
			$k=($page-1)*$pagesize;
			while($rs=$db->fetch_array($query)){
			
			
			if($rs["fpic"]){
			$f=$rs["fpic"];
			}else{
			$f="images/temp/none.png";
			}
			if($i%2==0){
			$c="odd";
			}else{
			$c="even";
			}
			$logo=$_WEITE['web_weburl']."html.php?gh=".$rs["gh"]."&sn=".$rs["sn"];
			?>
		   <div class="rankall rankListItem <?=$c?>" rel=<?=$rs["tid"]?>  style="position:relative" id="td<?=$rs["tid"]?>">
		   
		 <p  id=p<?=$rs["tid"]?> style="display:none; width:100px; height:100px; background:#FF9966; padding:0px; position:absolute; left:0px; top:-40px; z-index:99999; border:5px  solid #fff">
		  
		</p>
		<script> 
			$("#p<?=$rs["tid"]?>").qrcode({
                      render: "canvas", //table方式
                      width: 100, //宽度
                      height:100, //高度
                      text: "<?=$logo?>"
                });
		   </script>
		   <div class="commom_div "><?=($k+1)?></div>
		   <div class="commom_div" ><img src="<?=$f?>">
		   </div>
		   <div class="commom_div" style="width:300px"><span class="blodTotal"><?=$rs["title"]?></span></div> 
		   <div class="commom_div"><span class="blodTotal"><?
					$o= $db->fetch_first("select * from {$tablepre}openid where openid='$rs[openid]' order by tid desc limit 1");
					if(!$o){
						echo "--";
					}else{
					echo $o["username"];
					}
					?></span></div>
		   <div class="commom_div "><span class="blodTotal"><?=$rs["views"]?></span></div>
		   <div class="commom_div "><span class="blodTotal"><?=$rs["shares"]?></span></div>
		    <div class="commom_div " style="width:200px"><span class="blodTotal"> <?=date("Y-m-d H:i:s",$rs["dateline"])?></span></div> 
			<div class="commom_div " style="width:40px"><span class="blodTotal">  <a href="javascript:void(0)"  class="delbtn" rel="<?=$rs["tid"]?>">删除</a></span></div>
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

		  
		$('.delbtn').click(function () {
		var tid=$(this).attr("rel");
			var msg = "确定要删除吗？请确认！";   
			if (confirm(msg)==true){  
			 var data = {}; 
				data.tid =tid;	
				data.action = "dell";
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
