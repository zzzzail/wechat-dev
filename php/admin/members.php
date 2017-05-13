<?php 
require_once '../include/common.inc.php';
require_once 'session.php';
$members_menu="selected";


$title=daddslashes($title);

if($title){
$addsql.=" and username='".trim($title)."' or openid='".trim($title)."'";
}


if ($action=="xz" ){

$db->query("update {$tablepre}openid set isok=$isok where tid=$tid");
}

if ($act=="delete" ){ 
	$i=0;
	while(@$ChkID[$i]){
		
		$query = $db->query("select * from {$tablepre}openid where tid=$ChkID[$i]");
		while($rs=$db->fetch_array($query)){
			$openid=$rs["openid"];
			$db->query("delete from {$tablepre}app where openid='$openid'");
			$db->query("delete from {$tablepre}openid where openid='$openid'");
			$query = $db->query("select * from {$tablepre}app_list where openid='$openid'");
			while($rsss=$db->fetch_array($query)){
				if($rsss["fpic"]){
					if(strstr($rsss["fpic"],"http://"))
					{
					$f=$rsss["fpic"];
					////删除七牛图片
					if($rsss["ishttp"]==2){
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
					}
					}else{
						 $f="../".$rsss["fpic"];
					     unlink($f);
					}
	
				}
				$db->query("delete from {$tablepre}app_list  where  tid=$rsss[tid]");
			}
		}
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
<link rel="stylesheet" href="css/base/page_user.css">
<link rel="stylesheet" type="text/css" href="css/base/pagination.css" />
<link  rel="stylesheet" type="text/css" href="css/base/pop.css"/>
<script src="js/jquery.min.js"></script>
<script src="js/members.js"></script>
<script src="../assets/js/My97DatePicker/WdatePicker.js" type="text/javascript"></script>
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
    <h2>用户管理</h2>
    <div class="title_tab" id="topTab"></div>
    <div class="extra_info search_bar"  style="border-bottom:2px solid #00CC66"> &nbsp; <span class="frm_input_box search append" style="margin-top:-30px; width:400px"> <a id="msgSearchBtn" href="javascript:void(0);" class="frm_input_append"><i class="icon16_common search_gray">搜索</i>&nbsp;</a>
      
      <input id="msgSearchInput" value="<?=$title?>" type="text" placeholder="姓名/OPENID" style="float:left; width:275px; padding-left:5px" class="frm_input">
      </span> </div>
  </div>
  <div class="main_bd">
    <div class="inner_container_box side_r cell_layout ">
      <div class="inner_main">
        <div class="bd">
          <div class="table_wrp user_list">
 <form action="" method="post" name="form1" id="form1">
<input type="hidden" name="act" id="act" value="">

            <table class="table" cellspacing="0">
              <thead class="thead">
                <tr>
                  <th class="table_cell"  > <input type="checkbox" class="group_select_label" id="IDAll" style="height:17px; width:17px; background:#FFFFFF; border:1px solid #dcdcdc; " >
                    用户名</th>
                  <th class="table_cell">公众号</th>
				   <th class="table_cell">限制</th>
                  <th class="table_cell">注册时间 </th>
                  <th class="table_cell " >操 作 </th>
                </tr>
              </thead>
              <tbody class="tbody" id="userGroups">
                <?
$pagesize=18;
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
$query = $db->query("select * from {$tablepre}openid  where tid>0 $addsql");
$total= $db->num_rows($query);
$pagenum=ceil($total/$pagesize);
$url="members.php?title=".$title."&classid2=".$classid2;
$kmulti = multi($total,$pagesize,$page, $url, $idd);
$query = $db->query("select * from {$tablepre}openid where tid>0 $addsql order by tid desc limit $offset,$pagesize");
while($rs=$db->fetch_array($query)){
?>
                <tr id="tr_<?=$rs["tid"]?>">
                  <td class="table_cell" ><input class="frm_checkbox_label js_select" type="checkbox" value="<?=$rs["tid"]?>" name="ChkID[]" id="check<?=$rs["tid"]?>" style="height:17px; width:17px; background:#FFFFFF; border:1px solid #dcdcdc">
				  <img src="<?=$rs["face"]?>" style="width:40px; height:40px">
				  <?
				  if($rs["username"]!="匿名"){
				  echo $rs["username"];
				  }else{
				  echo $rs["openid"];
				  }
				  ?>
                  </td>
				  <td class="table_cell  no_extra"><?
					$o= $db->fetch_first("select * from {$tablepre}gongzhonghao where sn='$rs[gh]' order by tid desc limit 1");
					if(!$o){
						echo "--";
					}else{
					echo $o["title"];
					}
					?>
					
					<td class="table_cell user_category">
					<?
					if(!$rs["isok"]){
					?>
					<a href="?action=xz&tid=<?=$rs["tid"]?>&isok=1&page=<?=$page?>&title=<?=$title?>"><img src="images/ico/1.png" width="20"></a>
					<?
					}else{
					?>
					<a href="?action=xz&tid=<?=$rs["tid"]?>&isok=0&page=<?=$page?>&title=<?=$title?>"><img src="images/ico/2.png" width="20"></a>
					<?
					}
					?>
					</td>
                  <td class="table_cell  no_extra"><?=date("Y-m-d h:i:s",$rs["dateline"])?>
                  </td>
                  <td class="table_cell  no_extra" ><a href="javascript:void(0)" class="app_del" tid=<?=$rs["tid"]?> >删除</a> </td>
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
                  <input name=""  type="submit" value="批量删除" class="btn btn_primary btn_add js_add_btn"  onClick="javascript:if(true==confirm('确定要删除所选吗？')){$('#act').val('delete');}else{return false;};">
                </ul>
                <ul style="float:right">
                  <?php echo $kmulti	?>
                </ul>
              </div>
            </div>
          </div>  </form>
        </div>
      </div>
    </div>
  </div>
</div></div>
<?
include 'foot.php';
?>
<div class="dialog_wrp dialog_add" style="width: 726px; margin-left: -363px; margin-top: -240px; display:none">
  <div class="dialog">
    <div class="dialog_hd">
      <h3>标题</h3>
      <a href="javascript:;" onClick="return false" class="icon16_opr closed pop_closed">关闭</a> </div>
    <div class="dialog_bd"  style=" padding-top:30px; padding-bottom:30px">
      <div class="page_msg  default popup_private">
        <div class="inner group">
          <div class="msg_content"> </div>
        </div>
      </div>
    </div>
    <div class="dialog_ft"> <span class="btn btn_primary btn_input js_btn_p">
      <button type="button" class="js_btn btn_open" data-index="0">确定</button>
      </span> <span class="btn btn_default btn_input js_btn_p">
      <button type="button" class="js_btn closed" data-index="1">取消</button>
      </span> </div>
  </div>
</div>
<div class="theme-popover-mask"></div>
<script>
jQuery(document).ready(function($) {
		
});
</script>
</body>
</html>
