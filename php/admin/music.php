<?php 
require_once '../include/common.inc.php';
require_once 'session.php';
$music="selected";

if ($action=="dell"){
	$query = $db->query("delete from {$tablepre}music_class where tid=$id");
}

if($action == 'add'){
$title=daddslashes($title);
$fkeys=filterhtml($fkeys);
$sid = intval(isset($sid)) && is_numeric($sid) ? intval($sid) : 0;

if ($title == "") {
  msboxback("标题不可以为空");
  exit;
}	


$sql="insert into {$tablepre}music_class(title,fdes,dateline,sid) value ('$title','$fkeys','$timestamp',$sid)";
$query = $db->query($sql);
/////////////////////////////////
msboxurl("发布成功!","music.php");
}

if($action == 'edit'){
$title=daddslashes($title);
$fkeys=filterhtml($fkeys);
$sid = intval(isset($sid)) && is_numeric($sid) ? intval($sid) : 0;

if ($title == "") {
  msboxback("活动标题不可以为空");
  exit;
}	


$sql="update {$tablepre}music_class set title='$title',fdes='$fkeys',sid=$sid where tid=$id ";
$query = $db->query($sql);
/////////////////////////////////
msboxurl("编辑成功!","music.php");
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
<script>
function isValid()
{
  var title=$("#title").val();
  if(title=="")
  {
    alert("名称不能为空!");
    $("#title").focus();
    return false;
  }
  return true;
  
 }
</script>






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

<?
  if($do=="add"){
  ?>
  <div class="col_main">                    <div class="main_hd main_hd_bd">        <h2 class="title_border">音乐分类管理<p class="extra_info mini_tips icon_after align_title"></p></h2>  
  
    <div class="page_nav"><a href="#" class="icon_goback">返回上一层</a> 添加分类</div></div><div class="main_bd">
	
	<div class="js_new_vote vote_edit"> <div class="tc_dialog_content vote_container">
    <form action="" method="post" name="myform" onSubmit="javascript:return isValid();">
      <input name="action" id="action" type="hidden" value="add">
		<div class="vote_meta">
	        <div class="vote_meta_detail">
				<div class="frm_control_group">
					<label for="" class="frm_label" style="width:80px">名称</label>
					<div class="frm_controls">
						<span class="frm_input_box with_counter counter_in append vote_title count"><input autofocus="" type="text" placeholder="" class="frm_input frm_msg_content" id="title" name="title" ></span>
						<span class="frm_tips"></span>
					</div>
				</div>
				
				
				<div class="frm_control_group">
					<label for="" class="frm_label" style="width:80px">关键字</label>
					<div class="frm_controls">
						<span class="frm_input_box with_counter counter_in append vote_title count"><input autofocus="" type="text" placeholder="" value="" class="frm_input frm_msg_content" id="fkeys" name="fkeys" ></span>
						<span class="frm_tips">根据关键字提音乐,不填写则使用分类名称</span>
					</div>
				</div>
				
			<div class="frm_control_group">
					<label for="" class="frm_label" style="width:80px">排序</label>
					<div class="frm_controls">
						<span class="frm_input_box with_counter counter_in append vote_title count"><input autofocus="" type="text" value="99" placeholder="" class="frm_input frm_msg_content" name="sid" id="sid" onKeyPress="if(!this.value.match(/^[\+\-]?\d*?\.?\d*?$/))this.value=this.t_value;else this.t_value=this.value;if(this.value.match(/^(?:[\+\-]?\d+(?:\.\d+)?)?$/))this.o_value=this.value" onKeyUp="if(!this.value.match(/^[\+\-]?\d*?\.?\d*?$/))this.value=this.t_value;else this.t_value=this.value;if(this.value.match(/^(?:[\+\-]?\d+(?:\.\d+)?)?$/))this.o_value=this.value" onBlur="if(!this.value.match(/^(?:[\+\-]?\d+(?:\.\d+)?|\.\d*?)?$/))this.value=this.o_value;else{if(this.value.match(/^\.\d+$/))this.value=0+this.value;if(this.value.match(/^\.$/))this.value=0;this.o_value=this.value}"></span>
						<span class="frm_tips">数字越大越靠前</span>
					</div>
				</div>
	        </div>
	    </div>
	<input type="submit" value="提交保存信息" class="btn btn_primary js_complete_bnt" id=btnadd  style="margin:20px; margin-left:40%" />
	</div>   </div>   </div>   
   
	</form>
  <?
  }elseif($do=="edit"){
  
	$query = $db->query("select  * from   {$tablepre}music_class where tid=$id order by tid desc");
	$rss=$db->fetch_array($query);
	
  ?>
  <input name="tid" id=tid type="hidden" value="<?=$rss["id"]?>">
  <div class="col_main">                    <div class="main_hd main_hd_bd">        <h2 class="title_border">音乐分类管理<p class="extra_info mini_tips icon_after align_title"></p></h2>  
  
    <div class="page_nav"><a href="#" class="icon_goback">返回上一层</a> 编辑分类</div></div><div class="main_bd">
	
	<div class="js_new_vote vote_edit"> <div class="tc_dialog_content vote_container">
    
	<form action="" method="post" name="myform" onSubmit="javascript:return isValid();">
      <input name="action" id="action" type="hidden" value="edit">
	  <input name="id" id="id" type="hidden" value="<?=$rss["tid"]?>">
		<div class="vote_meta">
	        <div class="vote_meta_detail">
				<div class="frm_control_group" >
					<label for="" class="frm_label" style="width:80px">名称</label>
					<div class="frm_controls">
						<span class="frm_input_box with_counter counter_in append vote_title count"><input autofocus="" value="<?=$rss["title"]?>" type="text" placeholder="" class="frm_input frm_msg_content" id="title" name="title" ></span>
						<span class="frm_tips"></span>
					</div>
				</div>
				
				
				
				<div class="frm_control_group">
					<label for="" class="frm_label" style="width:80px">专题关键字</label>
					<div class="frm_controls" >
						<span class="frm_input_box with_counter counter_in append vote_title count"><input autofocus="" type="text" placeholder="" value="<?=$rss["fdes"]?>" class="frm_input frm_msg_content" id="fkeys" name="fkeys" ></span>
						<span class="frm_tips">根据关键字提音乐,不填写则使用分类名称</span>
					</div>
				</div>
				
				
				
			<div class="frm_control_group">
					<label for="" class="frm_label" style="width:80px">排序</label>
					<div class="frm_controls">
						<span class="frm_input_box with_counter counter_in append vote_title count"><input autofocus="" type="text" value="<?=$rss["sid"]?>" placeholder="" class="frm_input frm_msg_content" name="sid" id="sid" onKeyPress="if(!this.value.match(/^[\+\-]?\d*?\.?\d*?$/))this.value=this.t_value;else this.t_value=this.value;if(this.value.match(/^(?:[\+\-]?\d+(?:\.\d+)?)?$/))this.o_value=this.value" onKeyUp="if(!this.value.match(/^[\+\-]?\d*?\.?\d*?$/))this.value=this.t_value;else this.t_value=this.value;if(this.value.match(/^(?:[\+\-]?\d+(?:\.\d+)?)?$/))this.o_value=this.value" onBlur="if(!this.value.match(/^(?:[\+\-]?\d+(?:\.\d+)?|\.\d*?)?$/))this.value=this.o_value;else{if(this.value.match(/^\.\d+$/))this.value=0+this.value;if(this.value.match(/^\.$/))this.value=0;this.o_value=this.value}"></span>
						<span class="frm_tips">数字越大越靠前</span>
					</div>
				</div>
	        </div>
	    </div>
	
	
	<input type="submit" value="提交保存信息" class="btn btn_primary js_complete_bnt" id=btnadd  style="margin:20px; margin-left:40%" /></div>
  
</div></div>
  <?
  }else{
  ?>
   <div class="main_hd main_hd_bd">
    <h2 class="title_border">音乐分类管理
      <p class="extra_info mini_tips icon_after align_title"></p>
    </h2>
  </div>
  <div class="main_bd">
  
  
    <div class="topbar group"><a data-bb="custom_form" class="btn btn_primary btn_add js_add_btn" id="jssdkSet" href="music.php?do=add"><i class="icon14_common add_white"></i>新建分类</a></div>
    <div class="table_wrp with_border">
	
	
      <table class="table" cellspacing="0">
        <thead class="thead">
          <tr>
		  <th class="table_cell"><div class="td_panel">ID</div></th>
            <th class="table_cell "><div class="td_panel">名称</div></th>
 			<th class="table_cell "><div class="td_panel">关键字</div></th>
            <th class="table_cell "><div class="td_panel">排序</div></th>
            <th class="table_cell "  style="text-align:center"><div class="td_panel">操作</div></th>
          </tr>
        </thead>
        <tbody class="tbody js_list_body">
          <?
		  $sql="select * from {$tablepre}music_class order by sid desc,tid desc" ;
		$query = $db->query($sql);
		while($rs=$db->fetch_array($query)){
		  ?>
		  <tr id=tr_<?=$rs["id"]?>>
		  <td class="table_cell"><div class="td_panel "><?=$rs["tid"]?></div></td>
           <td class="table_cell "><div class="td_panel "><?=$rs["title"]?></div></td>
			<td class="table_cell"><div class="td_panel "><?=$rs["fdes"]?></div></td>
			<td class="table_cell"><div class="td_panel "><?=$rs["sid"]?></div></td>
			
            <td class="table_cell " style="text-align:center"><div class="td_panel">  <a href="?do=edit&id=<?=$rs["tid"]?>" class="app_edit" tid=<?=$rs["tid"]?>>编辑</a>
<a href="?action=dell&id=<?=$rs["tid"]?>" class="app_del" tid=<?=$rs["tid"]?> onClick="javascript:return confirm('确定要删除吗？');">删除</a></div></td>
          </tr> <?
		 }
		 ?>
        </tbody>
      </table>
	  
    </div><?
	  }
	  ?>
    <div class="pagination_wrp pageNavigator"></div>
  </div>
</div>
</div>
<?
include 'foot.php';
?>
