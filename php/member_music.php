<?php 
session_start();
header("Content-type: text/html; charset=utf-8");
require_once 'include/common.inc.php';
require_once 'data/app_session.php';
$addsql=" and gh='$rss[sn]'";
include 'web_head.php';



if($ac==="do_add"){
	$title=daddslashes($title);
	$fkeys=filterhtml($fdes);
	$sid = intval(isset($sid)) && is_numeric($sid) ? intval($sid) : 0;
	if ($title == "") {
	  msboxback("标题不可以为空");
	  exit;
	}
	$sql="insert into {$tablepre}openid_music(title,fdes,dateline,sid,gh) value ('$title','$fkeys','$timestamp',$sid,'$rss[sn]')";
	$query = $db->query($sql);
	msboxurl("发布成功!","member_music.php");
}

if($ac==="do_edit"){
	$title=daddslashes($title);
	$fkeys=filterhtml($fdes);
	$sid = intval(isset($sid)) && is_numeric($sid) ? intval($sid) : 0;
	if ($title == "") {
	  msboxback("标题不可以为空");
	  exit;
	}
	$sql="update {$tablepre}openid_music set title='$title',fdes='$fkeys',sid=$sid where tid=$tid and  gh='$rss[sn]'";
	$query = $db->query($sql);
	msboxurl("编辑成功!","member_music.php");
}



if($action==="edit"){
$query = $db->query("select  * from   {$tablepre}openid_music where tid=$tid and gh='$rss[sn]' order by tid desc limit 1");
$m=$db->fetch_array($query);
if(!$m){
	exit();
}
?>
<div class="upload-main">
  <div class="upload-box w1200">
    <h3 style="font-weight:700">编辑音乐分类</h3>
    <div class="up-list">
      <div id="mainlist">
	   <style>
	  .up-list .list .name{ width:200px}
	  </style>
<script>
function isValid()
{
  	var title=$("#title").val();
  
	  if(title=="")
	  {
		alert("分类名称不能为空!");
		$("#title").focus();
		return false;
	  }
	
  return true;
}
</script>
	  <form action="" method="post" name="myform" onSubmit="javascript:return isValid();">
      <input name="ac" id="ac" type="hidden" value="do_edit">
	    <input name="tid" id="tid" type="hidden" value="<?=$m["tid"]?>">
	  <div class="list up-file clearfix"><span class="name fl">分类名称:</span>
        <div class="right clearfix ps-relative">
          <p class="fl weizi"><input name="title" id=title type="text" class="boxinput" value="<?=$m["title"]?>"  /></p>
         
        </div>
      </div>
         
        <div class="list up-file clearfix"><span class="name fl">关键字:</span>
        <div class="right clearfix ps-relative">
          <p class="fl weizi"><input name="fdes" id=fdes type="text" class="boxinput" value="<?=$m["fdes"]?>" /></p>
         <span class="frm_tips"  style="font-size:14px; line-height:35px; color:#aaa; margin-left:5px">根据关键字提音乐,不填写则使用分类名称</span>
        </div>
      </div>
	  
	   <div class="list up-file clearfix"><span class="name fl">排序:</span>
        <div class="right clearfix ps-relative">
          <p class="fl weizi"><input name="sid" id=sid type="text" class="boxinput" value="<?=$m["sid"]?>" onKeyPress="if(!this.value.match(/^[\+\-]?\d*?\.?\d*?$/))this.value=this.t_value;else this.t_value=this.value;if(this.value.match(/^(?:[\+\-]?\d+(?:\.\d+)?)?$/))this.o_value=this.value" onKeyUp="if(!this.value.match(/^[\+\-]?\d*?\.?\d*?$/))this.value=this.t_value;else this.t_value=this.value;if(this.value.match(/^(?:[\+\-]?\d+(?:\.\d+)?)?$/))this.o_value=this.value" onBlur="if(!this.value.match(/^(?:[\+\-]?\d+(?:\.\d+)?|\.\d*?)?$/))this.value=this.o_value;else{if(this.value.match(/^\.\d+$/))this.value=0+this.value;if(this.value.match(/^\.$/))this.value=0;this.o_value=this.value}"/></p>
         <span class="frm_tips"  style="font-size:14px; line-height:35px; color:#aaa; margin-left:5px">数字越大越靠前</span>
        </div>
      </div>
	  
	   
	   
      </div>
	   <div class="list up-file clearfix"><span class="name fl"></span>
        <div class="right clearfix ps-relative">
          <p class="fl weizi"><input name="" type="submit" value="提交"  style="font-size:14px;display:block;height: 35px;line-height:35px;border: 1px solid #20c7a2;color: #ffffff;background-color: #20c7a2;border-radius: 4px;   width:250px;" /></p>
         
        </div>
      </div>
          <div class="list up-file clearfix"><span class="name fl"></span>
        <div class="right clearfix ps-relative">
          <p class="fl weizi"></p>
        </div>
      </div>
       </form>
      </div>
    </div>
  </div>
</div>


<?
}elseif($action==="add"){
?>
<div class="upload-main">
  <div class="upload-box w1200">
    <h3 style="font-weight:700">添加音乐分类</h3>
    <div class="up-list">
      <div id="mainlist">
	   <style>
	  .up-list .list .name{ width:200px}
	  </style>
<script>
function isValid()
{
  	var title=$("#title").val();
  
	  if(title=="")
	  {
		alert("分类名称不能为空!");
		$("#title").focus();
		return false;
	  }
	
  return true;
}
</script>
	  <form action="" method="post" name="myform" onSubmit="javascript:return isValid();">
      <input name="ac" id="ac" type="hidden" value="do_add">
	  <div class="list up-file clearfix"><span class="name fl">分类名称:</span>
        <div class="right clearfix ps-relative">
          <p class="fl weizi"><input name="title" id=title type="text" class="boxinput" value=""  /></p>
         
        </div>
      </div>
         
        <div class="list up-file clearfix"><span class="name fl">关键字:</span>
        <div class="right clearfix ps-relative">
          <p class="fl weizi"><input name="fdes" id=fdes type="text" class="boxinput" value="" /></p>
         <span class="frm_tips"  style="font-size:14px; line-height:35px; color:#aaa; margin-left:5px">根据关键字提音乐,不填写则使用分类名称</span>
        </div>
      </div>
	  
	   <div class="list up-file clearfix"><span class="name fl">排序:</span>
        <div class="right clearfix ps-relative">
          <p class="fl weizi"><input name="sid" id=sid type="text" class="boxinput" value="0" onKeyPress="if(!this.value.match(/^[\+\-]?\d*?\.?\d*?$/))this.value=this.t_value;else this.t_value=this.value;if(this.value.match(/^(?:[\+\-]?\d+(?:\.\d+)?)?$/))this.o_value=this.value" onKeyUp="if(!this.value.match(/^[\+\-]?\d*?\.?\d*?$/))this.value=this.t_value;else this.t_value=this.value;if(this.value.match(/^(?:[\+\-]?\d+(?:\.\d+)?)?$/))this.o_value=this.value" onBlur="if(!this.value.match(/^(?:[\+\-]?\d+(?:\.\d+)?|\.\d*?)?$/))this.value=this.o_value;else{if(this.value.match(/^\.\d+$/))this.value=0+this.value;if(this.value.match(/^\.$/))this.value=0;this.o_value=this.value}"/></p>
         <span class="frm_tips"  style="font-size:14px; line-height:35px; color:#aaa; margin-left:5px">数字越大越靠前</span>
        </div>
      </div>
	  
	   
	   
      </div>
	   <div class="list up-file clearfix"><span class="name fl"></span>
        <div class="right clearfix ps-relative">
          <p class="fl weizi"><input name="" type="submit" value="提交"  style="font-size:14px;display:block;height: 35px;line-height:35px;border: 1px solid #20c7a2;color: #ffffff;background-color: #20c7a2;border-radius: 4px;   width:250px;" /></p>
         
        </div>
      </div>
          <div class="list up-file clearfix"><span class="name fl"></span>
        <div class="right clearfix ps-relative">
          <p class="fl weizi"></p>
        </div>
      </div>
       </form>
      </div>
    </div>
  </div>
</div>
<?
}else{
?>
<div class="upload-main">
  <div class="upload-box w1200">
    <h3 style="font-weight:700">音乐管理
		<span class="delbtn"  style="float:right; font-size:14px; width:150px; text-align:center; padding:5px; margin-right:15px"><a href="member_music.php?action=add" target="_blank"  style="color:#FFFFFF" >添加音乐分类</a></span>
	</h3>
    <div class="up-list">
	<div id="mainlist">
	  <div class="paihang-title">
		  <ul class="nameTit">
		  <li >ID</li>
		  <li>音乐分类</li>
		  <li  style="width:500px">关键字</li>
		   <li style="width:150px">排序</li>
		   <li style="width:150px; text-align:center">操作</li>
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
			$query = $db->query("select tid from {$tablepre}openid_music where tid>0 $addsql order by tid desc");
			$total= $db->num_rows($query);
			$pagenum=ceil($total/$pagesize);
			$url="member_music.php";
			$kmulti = multi($total,$pagesize, $page, $url, $idd);
			$query = $db->query("select * from {$tablepre}openid_music where tid>0 $addsql order by sid desc, tid asc $order limit $offset,$pagesize");
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
		   <div class="commom_div" ><?=$rs["title"]?>
		   </div>
		   <div class="commom_div" style="width:500px"><span class="blodTotal"> 
		   <?
		   if($rs["fdes"]){
		   ?>
		   <?=$rs["fdes"]?>
		   <?
		   }else{
		   ?>
		  --
		   <?
		   }
		   ?>
		   </span></div> 
		   
		    <div class="commom_div " style="width:150px"><span class="blodTotal"> <?=$rs["sid"]?></span></div> 
			<div class="commom_div " style="width:150px; text-align:center"><span class="blodTotal"> <a href="?action=edit&tid=<?=$rs["tid"]?>"  class="delbtn "  style="float:left">编辑</a> <a href="javascript:void(0)"  class="delbtn del" rel="<?=$rs["tid"]?>"  style="float:left; margin-left:5px">删除</a></span></div>
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
				data.action = "dell_music";
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
<?
}
?>
<?
include 'web_foot.php';
?>