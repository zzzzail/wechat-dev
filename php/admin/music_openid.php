<?php 
require_once '../include/common.inc.php';
require_once 'session.php';
$music_openid="selected";

if ($action=="dell"){
	$query = $db->query("delete from {$tablepre}openid_music where tid=$id");
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
<link  rel="stylesheet" href="css/base/vote_list.css">
<link  rel="stylesheet" type="text/css" href="css/base/pop.css"/>
 <link o rel="stylesheet" href="css/base/vote_edit.css"> 
 <script src="js/jquery.min.js"></script>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body class="zh_CN"  style="margin:0px">
<?
include 'head.php';
?>

</div>
<div id="body" class="body page_index">
  <?
include 'left.php';
?>
</div>
<div class="col_main">


   <div class="main_hd main_hd_bd">
    <h2 class="title_border">音乐分类管理
      <p class="extra_info mini_tips icon_after align_title"></p>
    </h2>
  </div>
  <div class="main_bd">
  
  
    <div class="topbar group"></div>
    <div class="table_wrp with_border">
	
      <table class="table" cellspacing="0">
        <thead class="thead">
          <tr>
		  <th class="table_cell"><div class="td_panel">ID</div></th>
            <th class="table_cell "><div class="td_panel">名称</div></th>
 			<th class="table_cell "><div class="td_panel">关键字</div></th>
            <th class="table_cell "><div class="td_panel">公众号</div></th>
            <th class="table_cell "  style="text-align:center"><div class="td_panel">操作</div></th>
          </tr>
        </thead>
        <tbody class="tbody js_list_body">
          
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
			
			$query = $db->query("select tid from {$tablepre}openid_music ");
			$total= $db->num_rows($query);
			$pagenum=ceil($total/$pagesize);
			$url="music_openid.php";
			$kmulti = multi($total,$pagesize, $page, $url, $idd);
			$query = $db->query("select * from {$tablepre}openid_music  $order limit $offset,$pagesize");
			while($rs=$db->fetch_array($query)){
			?>
		  <tr id=tr_<?=$rs["id"]?>>
		  <td class="table_cell"><div class="td_panel "><?=$rs["tid"]?></div></td>
           <td class="table_cell "><div class="td_panel "><?=$rs["title"]?></div></td>
			<td class="table_cell"><div class="td_panel "><?=$rs["fdes"]?></div></td>
			<td class="table_cell"><div class="td_panel ">
			<?
					$o= $db->fetch_first("select * from {$tablepre}gongzhonghao where 	sn='$rs[gh]' order by tid desc limit 1");
					if(!$o){
						echo "--";
					}else{
					echo $o["title"];
					}
					?>
			</div></td>
			
            <td class="table_cell " style="text-align:center"><div class="td_panel">
<a href="?action=dell&id=<?=$rs["tid"]?>" class="app_del" tid=<?=$rs["tid"]?> onClick="javascript:return confirm('确定要删除吗？');">删除</a></div></td>
          </tr> <?
		 }
		 ?>
        </tbody>
      </table>
	  
    </div>
          <div class="tool_area">
            <div class="pagination_wrp js_pageNavigator">
			
              <div class="pagination" > 
				<ul style="float:right">
				<?php echo $kmulti	?></ul>
			</div>
            </div>
          </div>
		
  </div>
</div>
</div>
<?
include 'foot.php';
?>
