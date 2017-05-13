<?php 
require_once '../include/common.inc.php';
require_once 'session.php';
$books="selected";
$title=daddslashes($title);
$classid = intval(isset($classid)) && is_numeric($classid) ? intval($classid) : 0;
if($title){
	$addsql.=" and  title like '%".trim($title)."%'";
}

if($classid){
	$addsql.=" and  classid=$classid";
}

if ($action=="del"){
	$query = $db->query("delete from {$tablepre}books  where tid=$id");
}

if ($action=="delete" ){ 
	$i=0;
	while(@$ChkID[$i]){
			$db->query("delete from {$tablepre}books  where  tid=".$ChkID[$i]);
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
	    	var $classid = $('#classid');
			top.location.href='books.php?title='+$SearchInput.val()+"&classid="+$classid.val();
	});
	 
	$('#classid2').change(function(){ 
	var $SearchInput = $('#msgSearchInput');
	var $classid = $('#classid');
	top.location.href='books.php?title='+$SearchInput.val()+"&classid="+$classid.val();
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
    <h2>评论管理</h2>
    <div class="title_tab" id="topTab"></div>
    <div class="extra_info search_bar"  style="border-bottom:2px solid #00CC66"> &nbsp; <span class="frm_input_box search append" style="margin-top:-30px; width:480px"> <a id="msgSearchBtn" href="javascript:void(0);" class="frm_input_append"><i class="icon16_common search_gray">搜索</i>&nbsp;</a>
	<input name="classid" id=classid type="hidden" value="<?=$classid?>">
	<input id="msgSearchInput" value="<?=$title?>" type="text" placeholder="留言内容" style="float:left; width:250px; padding-left:5px" class="frm_input">
	  
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
                  <th class="table_cell user no_extra" style="width:80px"> <div class="group_select"  style="width:100%">
                    
                    <input type="checkbox" class="group_select_label" id="IDAll" style="height:17px; width:17px; background:#FFFFFF; border:1px solid #dcdcdc">
                    全选
                    &nbsp; </th><th class="table_cell user no_extra" style="text-align:center; width:400px"> 内容 </th>
                  <th class="table_cell user no_extra" style="text-align:center;width:80px">相册 </th><th class="table_cell user no_extra" style="text-align:center;width:150px">时间 </th>
                  
                  <th class="table_cell user no_extra"  style="text-align:center; width:50px">操作 </th>
                </tr>
              </thead>
              <tbody class="tbody" id="userGroups">
			<?
			$order="order by tid desc";
			$pagesize=20;
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
			
			$query = $db->query("select * from {$tablepre}books  where tid>0 $addsql");
			$total= $db->num_rows($query);
			$pagenum=ceil($total/$pagesize);
			$url="books.php?classid=$classid&title=$title";
			$kmulti = multi($total,$pagesize, $page, $url, $idd);
			$query = $db->query("select * from {$tablepre}books where tid>0 $addsql $order limit $offset,$pagesize");
			while($rs=$db->fetch_array($query)){
			?>
            <tr id=tr_<?=$rs["tid"]?> >
                  <td >
                  <input class="frm_checkbox_label js_select" type="checkbox" value="<?=$rs["tid"]?>" name="ChkID[]" id="check<?=$rs["tid"]?>" style="height:17px; width:17px; background:#FFFFFF; border:1px solid #dcdcdc"> </td>
                   <td class="table_cell user_category" style="text-align:left"><?=$rs["title"]?></td>
                  <td class="table_cell user_category jssdkSet" id="<?=$rs["tid"]?>">
				<a href="../html.php?sn=<?=$rs["sn"]?>&gh=<?=$rs["gh"]?>"  target="_blank"><img title="" src="images/ico/attachimg.gif" width="20"></a>
				  </td>	 <td class="table_cell user_category jssdkSet" id="<?=$rs["tid"]?>">
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

</body>
</html>