<?php 
require_once '../include/common.inc.php';
require_once 'session.php';
$template_count="selected";

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
 <link o rel="stylesheet" href="css/base/vote_edit.css">  <link rel="stylesheet" type="text/css" href="css/base/pagination.css" />
 <script src="js/jquery.min.js"></script>
<link rel="stylesheet" href="../include/kindeditor/themes/default/default.css" />
<link rel="stylesheet" href="../include/kindeditor/plugins/code/prettify.css" />
<script charset="utf-8" src="../include/kindeditor/kindeditor.js"></script>
<script charset="utf-8" src="../include/kindeditor/lang/zh_CN.js"></script>
<script charset="utf-8" src="../include/kindeditor/plugins/code/prettify.js"></script>

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
    <h2 class="title_border">模版使用统计
      <p class="extra_info mini_tips icon_after align_title"><a href="#" target="_blank">模版说明 <i class="icon_mini_tips document_link"></i></a></p>
    </h2>
  </div>
  <div class="main_bd">
  
    <div class="table_wrp with_border">
	
	
      <table class="table" cellspacing="0">
        <thead class="thead">
          <tr>
		  <th class="table_cell"><div class="td_panel">ID</div></th>
            <th class="table_cell " style=" text-align:center"><div class="td_panel">名称</div></th>
			  <th class="table_cell " style=" text-align:center"><div class="td_panel">封面</div></th>
			<th class="table_cell " style=" text-align:center"><div class="td_panel">使用数</div></th>
          </tr>
        </thead>
        <tbody class="tbody js_list_body">
         
		  <?
			$i=1;
			$query = $db->query("select template,count(template) as sumshul from {$tablepre}app group by template order by sumshul desc");
			while($rs=$db->fetch_array($query)){
			
			
			$squery = $db->query("select  * from   {$tablepre}template where fdir='$rs[template]' order by tid desc limit 1");
			$rsss=$db->fetch_array($squery);
			?>
		  <tr ><td class="table_cell " style=" text-align:center"><div class="td_panel "><?=$i?></div></td>
		  <td class="table_cell " style=" text-align:center"><div class="td_panel "><?=$rsss["title"]?></div></td>
		  
		 <td class="table_cell " style=" text-align:center"><div class="td_panel "><img src="../<?=$rsss["fpic"]?>" width="50" height="50"></div></td>
		  
           
		   <td class="table_cell " style=" text-align:center"><div class="td_panel "><?=$rs["sumshul"]?></div></td>
          </tr> <?
		  $i++;
		 }
		 ?>
        </tbody>
      </table>
	  
    </div>
	
	
  </div>
</div>
</div>
<?
include 'foot.php';
?>


