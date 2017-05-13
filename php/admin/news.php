<?php 
require_once '../include/common.inc.php';
require_once 'session.php';
$news="selected";

$classid2= isset($classid2) && is_numeric($classid2) ? intval($classid2) : 0;
$views= isset($views) && is_numeric($views) ? intval($views) : 0;
$shares= isset($shares) && is_numeric($shares) ? intval($shares) : 0;
$uid= isset($uid) && is_numeric($uid) ? intval($uid) : 0;
$title=daddslashes($title);

if($classid2){
	$addsql.=" and classid=$classid2";
}
if($title){
	$addsql.=" and sn='".trim($title)."' or  title like '%".trim($title)."%'";
}

$order="order by tid desc";

if($views){
	$order="order by views desc,tid desc";
}

if ($action=="xz" ){
$db->query("update {$tablepre}openid set isok=1 where openid='$openid'");
msboxback("此用户已经限制上传");
}


if ($action=="del" ){ 
	$db->query("delete from {$tablepre}app  where  tid=$id");
	$query = $db->query("select * from {$tablepre}app_list where fid=$id");
	while($rs=$db->fetch_array($query)){
	if($rs["fpic"]){
					if(strstr($rs["fpic"],"http://"))
					{
					$f=$rs["fpic"];
					////删除七牛图片
					if($rs["ishttp"]==2){
					require_once("../include/qiniu/rs.php");
					$qz="http://".$_WEITE['qiniu_weburl']."/";
					$file_name=str_replace($qz,'',$f);
					$bucket = $_WEITE['qiniu_fdir'];
					$key1 = $file_name;
					$accessKey = $_WEITE['qiniu_access'];
					$secretKey = $_WEITE['qiniu_secret'];
					Qiniu_SetKeys($accessKey, $secretKey);
					$client = new Qiniu_MacHttpClient(null);
					$err = Qiniu_RS_Delete($client, $bucket, $key1);
					//echo "====> Qiniu_RS_Delete result: \n";
					}
					////删除七牛图片
					}else{
						 $f="../".$rs["fpic"];
					     unlink($f);
					}
	
	}
		$db->query("delete from {$tablepre}app_list  where  tid=$rs[tid]");
	}
	
}

if ($action=="delete" ){ 
	$i=0;
	while(@$ChkID[$i]){
		
			$query = $db->query("select * from {$tablepre}app_list where fid=".$ChkID[$i]);	
			while($rs=$db->fetch_array($query)){
			$f="../".$rs["fpic"];
			
			
				if($rs["fpic"]){
						if(strstr($rs["fpic"],"http://"))
						{
						$f=$rs["fpic"];
						////删除七牛图片
						if($rs["ishttp"]==2){
						require_once("../include/qiniu/rs.php");
						$qz="http://".$_WEITE['qiniu_weburl']."/";
						$file_name=str_replace($qz,'',$f);
						$bucket = $_WEITE['qiniu_fdir'];
						$key1 = $file_name;
						$accessKey = $_WEITE['qiniu_access'];
						$secretKey = $_WEITE['qiniu_secret'];
						Qiniu_SetKeys($accessKey, $secretKey);
						$client = new Qiniu_MacHttpClient(null);
						$err = Qiniu_RS_Delete($client, $bucket, $key1);
						//echo "====> Qiniu_RS_Delete result: \n";
						}
						////删除七牛图片
						}else{
							 $f="../".$rs["fpic"];
							 unlink($f);
						}
					}
			
				$db->query("delete from {$tablepre}app_list  where  tid=$rs[tid]");
			
			}
			
			$db->query("delete from {$tablepre}app  where  tid=".$ChkID[$i]);
			
		$i++;
	}
}

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
<script>
jQuery(document).ready(function($) {
	 $('#msgSearchBtn').click(function () {
			var $SearchInput = $('#msgSearchInput');
	    	var $classid = $('#classid2');
			top.location.href='news.php?title='+$SearchInput.val()+"&classid2="+$classid.val();
	});
	 
	$('#classid2').change(function(){ 
	var $SearchInput = $('#msgSearchInput');
	var $classid = $('#classid2');
	top.location.href='news.php?title='+$SearchInput.val()+"&classid2="+$classid.val();
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
</script>
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
    <h2>相册管理</h2>
    <div class="title_tab" id="topTab"></div>
    <div class="extra_info search_bar"  style="border-bottom:2px solid #00CC66"> &nbsp; <span class="frm_input_box search append" style="margin-top:-30px; width:480px"> <a id="msgSearchBtn" href="javascript:void(0);" class="frm_input_append"><i class="icon16_common search_gray">搜索</i>&nbsp;</a>
	
	<input id="msgSearchInput" value="<?=$title?>" type="text" placeholder="名称/SN" style="float:left; width:250px; padding-left:5px" class="frm_input">
	  
      </span> 
	
	 </div>
  </div>
  
  
  
  <div class="main_bd">
    <div class="inner_container_box side_r cell_layout ">
      <div class="inner_main">
        <div class="bd">
          <div class="table_wrp user_list">
<form action="" method="post" name="form1" id="form1">
<input type="hidden" name="action" id="action" value="">
<input type="hidden" name="id" id="id" value="">
            <table class="table" cellspacing="0">
              <thead class="thead">
                <tr>
                  <th class="table_cell user no_extra" style="width:300px"> <div class="group_select">
                    
                    <input type="checkbox" class="group_select_label" id="IDAll" style="height:17px; width:17px; background:#FFFFFF; border:1px solid #dcdcdc">
                    全选
                    &nbsp; </th>
					
                  <th class="table_cell user no_extra" style="text-align:center; width:100px">公众号 </th>
                  
                  <th class="table_cell user no_extra" style="text-align:center; width:120px">浏览/分享 </th> 			<th class="table_cell  no_extra" style="text-align:center; width:20px"> 图片 </th>
				<th class="table_cell  no_extra" style="text-align:center; width:20px"> 限制 </th> 
				<th class="table_cell user no_extra" style="text-align:center; width:20px"> 评论 </th>  
				  <th class="table_cell user no_extra" style="text-align:center;width:160px">日期 </th>
                  <th class="table_cell user no_extra"  style="text-align:center; width:50px">操作 </th>
                </tr>
              </thead>
              <tbody class="tbody" id="userGroups">
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
			
			$query = $db->query("select tid from {$tablepre}app where tid>0 $addsql");
			$total= $db->num_rows($query);
			$pagenum=ceil($total/$pagesize);
			$url="news.php?title=".$title."&classid2=".$classid2;
			$kmulti = multi($total,$pagesize, $page, $url, $idd);
			$query = $db->query("select * from {$tablepre}app where tid>0 $addsql $order limit $offset,$pagesize");
			while($rs=$db->fetch_array($query)){
			if($rs["fpic"]){
			
				if(strstr($rs["fpic"],"http://"))
				{
					$f=$rs["fpic"];
				}else{
				 $f="../".$rs["fpic"];
				}
			
			
			}else{
			$f="images/temp/none.png";
			}
			
			
			?>
            <tr id=tr_<?=$rs["tid"]?> >
                  <td class="table_cell user"><div class="user_info" style="position:relative"> <a target="_blank" href="../html.php?sn=<?=$rs["sn"]?>&gh=<?=$rs["gh"]?>" target="_blank"  class="remark_name" ><?=$rs["title"]?></a>
				  <a href="../html.php?sn=<?=$rs["sn"]?>&gh=<?=$rs["gh"]?>"  class="avatar" id=a<?=$rs["tid"]?> target="_blank"><img src="<?=$f?>"  class="js_msgSenderAvatar" >
                      </a>
                  <input class="frm_checkbox_label js_select" type="checkbox" value="<?=$rs["tid"]?>" name="ChkID[]" id="check<?=$rs["tid"]?>" style="height:17px; width:17px; background:#FFFFFF; border:1px solid #dcdcdc">
                     
					  
                    </div></td>
                  
                  <td class="table_cell user_category">
					<?
					$o= $db->fetch_first("select * from {$tablepre}gongzhonghao where 	sn='$rs[gh]' order by tid desc limit 1");
					if(!$o){
						echo "--";
					}else{
					echo $o["title"];
					}
					?>
				  </td>
                  <td class="table_cell user_category"><?=$rs["views"]?>
                    /
                    <?=$rs["shares"]?></td>
					
					<td class="table_cell user_category"><a href="news_pics.php?id=<?=$rs["tid"]?>" target="_blank"><img src="images/ico/attachimg.gif"></a></td>
					
				
					
					<td class="table_cell user_category">
					<a href="members.php?title=<?=$rs["openid"]?>" target="_self"><img title="限制此用户继续上传任何相册" src="images/ico/admin.gif" width="20"></a>
					</td>
					
						<td class="table_cell user_category"><a href="books.php?classid=<?=$rs["tid"]?>" target="_blank"><img src="images/ico/attachimg.gif"></a></td>
					
					 <td class="table_cell user_category jssdkSet" id="<?=$rs["tid"]?>">
				  <?=date("Y-m-d H:i:s",$rs["dateline"])?>
				  </td>
                  <td class="table_cell user_category" style=" width:50px">
				  
				 
				  <a href="?action=del&id=<?=$rs["tid"]?>"  onClick="javascript:return confirm('确定要删除吗？');">删除</a></td>
                </tr>
                <?
				}
				?>
              </tbody>
            </table>
			
          </div>
          <div class="tool_area">
            <div class="pagination_wrp js_pageNavigator">
			
              <div class="pagination" > 
			  <ul style="float:left">
			  <input name=""  type="submit" value="批量删除" class="btn btn_primary btn_add js_add_btn"  onClick="javascript:if(true==confirm('确定要删除所选吗？')){$('#action').val('delete');}else{return false;};">
			  </ul>
				<ul style="float:right">
				<?php echo $kmulti	?></ul>
			</div>
            </div>
          </div>
		  </form>
        </div>
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
</script>
</body>
</html>