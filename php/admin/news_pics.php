<?php 
require_once '../include/common.inc.php';
require_once 'session.php';
$news="selected";
$query = $db->query("select openid from {$tablepre}app where tid=$id");
$rs=$db->fetch_array($query);
$o=$rs["openid"];
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="renderer" content="webkit">
<meta charset="utf-8">
<title>
<?=$_WEITE["web_title"]?>
</title>
<link  rel="stylesheet" type="text/css" href="css/base/layout_head.css"/>
<link  rel="stylesheet" type="text/css" href="css/base/base.css"/>
<link  rel="stylesheet" type="text/css" href="css/base/lib.css"/>
<link  rel="stylesheet" href="css/base/page_user.css">

<link rel="stylesheet" type="text/css" href="css/base/pagination.css" />
<link rel="stylesheet" type="text/css" href="css/base/pop.css"/>
<script src="js/jquery.min.js"></script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body class="zh_CN">
<?
include 'head.php';
?>
<div id="body" class="body page_user">
<?
include 'left.php';
?>
</div>
<div class="col_main">
  <div class="main_hd">
    <h2>图片管理</h2>
    <div class="title_tab" id="topTab"></div>
    <div class="extra_info search_bar"  style="border-bottom:2px solid #00CC66"><A href="members.php?title=<?=$o?>" target="_self"><?=$o?></A>
	 </div>
  </div>
  
  
  
  <div class="main_bd">
    <div class="inner_container_box side_r cell_layout ">
      <div class="inner_main">
       
          
<form action="" method="post" name="form1" id="form1">
<input type="hidden" name="action" id="action" value="">
<input type="hidden" name="id" id="id" value="">
            <table class="table" cellspacing="0">
              <tbody class="tbody" id="userGroups"> 
			  <tr  >
			<?
			$i=1;
			$query = $db->query("select  * from {$tablepre}app_list where fid=$id  order by tid desc");
			while($rs=$db->fetch_array($query)){
			if(strstr($rs["fpic"],"http://"))
				{
					$f=$rs["fpic"];
				}else{
					 $f="../".$rs["fpic"];
				}
			?>
			<td  id=t<?=$rs["tid"]?>  style="padding:2px; position:relative; width:20%">
			<img src="<?=$f?>" width="150" height="150"  style="float:left; clear:both" />
			<div onClick="return dell(<?=$rs["tid"]?>)"  style="cursor:pointer; height:25px; line-height:25px; background: #DAEFC5; color:#000000; display:block; width:150px; position:absolute; left:2px; bottom:0px" >删除</div></td>
			  <?
				  if($i%5==0){
				 	 echo "</tr><tr  >";
				  }
				  
			  $i++;
			  }
			  ?>
			  </tr>
              </tbody>
            </table>
		  </form>
      </div>
    </div>
  </div>
</div></div>
<?
	include 'foot.php';
?>
<script src="js/jquery.lazyload.js?v=1.9.1"></script>
<script type="text/javascript" charset="utf-8">
  $(function() {
      $("img.lazy").lazyload({effect: "fadeIn"});
	  
	  
  });
  
  function dell(tid){
			var msg = "确定要删除吗？请确认！";   
			if (confirm(msg)==true){ 
			 var data = {}; 
				data.tid =tid;	
				data.action = "dell";
				jQuery.ajax({ 
					type:"POST", 
					url: "lib/ajax_pic.php", 
					data:data, 
					dataType: "json", 
					beforeSend: function(XMLHttpRequest){ 
					}, success:function(data) {
						$("#t"+tid).hide();
					}, error:function(){ 
						alert("出错,请刷新后重试");
					} 
				});
			}
  		};
</script>

</body>
</html>