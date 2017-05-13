<?php 
require_once '../include/common.inc.php';
require_once 'session.php';
$template="selected";

if ($action=="dell"){
	$query = $db->query("delete from {$tablepre}template  where tid=$id");
}

if ($action=="ok"){
	$query = $db->query("update {$tablepre}template set isok=0");
	
	$query = $db->query("update {$tablepre}template set isok=1 where tid=$id");
}




if($action == 'add'){
$title=daddslashes($title);
$music=filterhtml($music);
$fdir=getpic(filterhtml($fdir));
$fpic=getpic(filterhtml($fpic));
$sid = intval(isset($sid)) && is_numeric($sid) ? intval($sid) : 0;
$classid = intval(isset($classid)) && is_numeric($classid) ? intval($classid) : 0;
if ($title == "") {
  msboxback("标题不可以为空");
  exit;
}	

if ($music == "") {
  msboxback("音乐字不为空");
  exit;
}	

if ($fdir == "") {
  msboxback("目录不为空");
  exit;
}	

if ($fpic == "") {
  msboxback("缩略图不为空");
  exit;
}	

$sql="insert into {$tablepre}template(classid,title,fpic,music,fdir,dateline,sid) value ($classid,'$title','$fpic','$music','$fdir','$timestamp',$sid)";
$query = $db->query($sql);
/////////////////////////////////
msboxurl("发布成功!","template.php");
}

if($action == 'edit'){

$title=daddslashes($title);
$music=filterhtml($music);
$fdir=getpic(filterhtml($fdir));
$fpic=getpic(filterhtml($fpic));
$sid = intval(isset($sid)) && is_numeric($sid) ? intval($sid) : 0;
$classid = intval(isset($classid)) && is_numeric($classid) ? intval($classid) : 0;
if ($title == "") {
  msboxback("标题不可以为空");
  exit;
}	

if ($music == "") {
  msboxback("音乐字不为空");
  exit;
}	

if ($fdir == "") {
  msboxback("目录不为空");
  exit;
}	

if ($fpic == "") {
  msboxback("缩略图不为空");
  exit;
}	

$sql="update {$tablepre}template set classid=$classid,title='$title',fpic='$fpic',fdir='$fdir',music='$music',sid=$sid where tid=$id ";
$query = $db->query($sql);
/////////////////////////////////
msboxurl("编辑成功!","template.php?page=$page");
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
 <link o rel="stylesheet" href="css/base/vote_edit.css">  <link rel="stylesheet" type="text/css" href="css/base/pagination.css" />
 <script src="js/jquery.min.js"></script>
<link rel="stylesheet" href="../include/kindeditor/themes/default/default.css" />
<link rel="stylesheet" href="../include/kindeditor/plugins/code/prettify.css" />
<script charset="utf-8" src="../include/kindeditor/kindeditor.js"></script>
<script charset="utf-8" src="../include/kindeditor/lang/zh_CN.js"></script>
<script charset="utf-8" src="../include/kindeditor/plugins/code/prettify.js"></script>
<script>
function isValid()
{
  var title=$("#title").val();
  var fdir=$("#fdir").val();
  var fpic=$("#fpic").val();
   
   var classid = $("#classid");
	if(classid.val()==""){
		alert("温馨提示：\n\n选择分类！");
		classid.focus();
		return false;
	}
  if(title=="")
  {
    alert("名称不能为空!");
    $("#title").focus();
    return false;
  }
  
  
  if(fdir=="")
  {
    alert("目录不可以空!");
    $("#fdir").focus();
	 return false;
  }
   
  if(fpic=="")
  {
    alert("缩略图不能为空!");
    $("#fpic").focus();
	 return false;
  }
  if(music=="")
  {
    alert("音乐不能为空!");
    $("#music").focus();
	 return false;
  }
 
  return true;
  
 }
 
  KindEditor.ready(function(K) {
                    var editor = K.editor({
                        uploadJson: '../include/kindeditor/php/upload_json.php',
                        fileManagerJson: '../include/kindeditor/php/file_manager_json.php',
                        allowFileManager: true
                    });

                    K('.shangchuan').click(function() {
                        var butId = $(this).attr('rel');
                        editor.loadPlugin('image',
                        function() {
                            editor.plugin.imageDialog({
                                showRemote: false,
                                imageUrl: K('#' + butId).val(),
                                clickFn: function(url, title, width, height, border, align) {
                                    K('#' + butId).val(url);
									
									
									$("#pic_"+butId).attr("src",url);
                                    editor.hideDialog();
                                }
                            });
                        });
                    });

                });
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
  <div class="col_main">                    <div class="main_hd main_hd_bd">        <h2 class="title_border">模版管理<p class="extra_info mini_tips icon_after align_title"><a href="#" target="_blank">模版说明  <i class="icon_mini_tips document_link"></i></a></p></h2>  
  
    <div class="page_nav"><a href="#" class="icon_goback">返回上一层</a> 添加模版</div></div><div class="main_bd">
	
	<div class="js_new_vote vote_edit"> <div class="tc_dialog_content vote_container">
    <form action="" method="post" name="myform" onSubmit="javascript:return isValid();">
      <input name="action" id="action" type="hidden" value="add">
		<div class="vote_meta">
	        <div class="vote_meta_detail">
			
			
			
			<div class="frm_control_group">
					<label for="" class="frm_label" style="width:80px">分类</label>
					<div class="frm_controls">
						<span class="frm_input_box with_counter counter_in append vote_title count"> <select id="classid" name="classid" class="form-text" style="height:30px; line-height:30px;  border:0px solid #dcdcdc; width:300px">
				   <option value=""  selected="selected">-选择分类-</option>
		 <?
		$sql="select * from {$tablepre}template_class  order by sid desc,tid desc" ;
		$query = $db->query($sql);
		while($rs=$db->fetch_array($query)){
		  ?>
			<option value="<?=$rs["tid"]?>"><?=$rs["title"]?></option><?
		 }
		 ?>
				</select></span>
						<span class="frm_tips"></span>
					</div>
				</div>
				
			
				<div class="frm_control_group">
					<label for="" class="frm_label" style="width:80px">名称</label>
					<div class="frm_controls">
						<span class="frm_input_box with_counter counter_in append vote_title count"><input autofocus="" type="text" placeholder="" class="frm_input frm_msg_content" id="title" name="title" ></span>
						<span class="frm_tips"></span>
					</div>
				</div>
				
				
				<div class="frm_control_group">
					<label for="" class="frm_label" style="width:80px">目录</label>
					<div class="frm_controls">
						<span class="frm_input_box with_counter counter_in append vote_title count"><input autofocus="" type="text" placeholder="" value="" class="frm_input frm_msg_content" id="fdir" name="fdir" ></span>
						<span class="frm_tips">模版对应的目录</span>
					</div>
				</div>
				
				<div class="frm_control_group">
					<label for="" class="frm_label" style="width:80px">背景音乐</label>
					<div class="frm_controls">
						<span class="frm_input_box with_counter counter_in append vote_title count"><input autofocus="" type="text" placeholder="" value="" class="frm_input frm_msg_content" id="music" name="music" ></span>
						<span class="frm_tips">必须是外连格式比如http://</span>
					</div>
				</div>
				
				<div class="frm_control_group">
					<label for="" class="frm_label" style="width:80px">封面</label>
					<div class="frm_controls">
						<input id="fpic" name="fpic" type="hidden" value="assets/images/banner.jpg" >	
			  <img src="images/temp/none.png" width="80" height="80"  id=pic_fpic><br>
			   <input value="上传图片" type="button"  rel="fpic"  class="shangchuan" style="background: #00CC00; color:#FFFFFF;  border:1px solid #00CC00; padding:5px 10px; cursor:pointer; ">
						<span class="frm_tips">建议大小：200*200</span>
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
  
	$query = $db->query("select  * from   {$tablepre}template where tid=$id order by tid desc");
	$rss=$db->fetch_array($query);
	
  ?>
  <input name="tid" id=tid type="hidden" value="<?=$rss["tid"]?>">
  <div class="col_main">                    <div class="main_hd main_hd_bd">        <h2 class="title_border">模版管理<p class="extra_info mini_tips icon_after align_title"><a href="#" target="_blank">模版说明  <i class="icon_mini_tips document_link"></i></a></p></h2>  
  
    <div class="page_nav"><a href="#" class="icon_goback">返回上一层</a> 编辑模版</div></div><div class="main_bd">
	
	<div class="js_new_vote vote_edit"> <div class="tc_dialog_content vote_container">
    
	<form action="" method="post" name="myform" onSubmit="javascript:return isValid();">
      <input name="action" id="action" type="hidden" value="edit">
	  <input name="id" id="id" type="hidden" value="<?=$rss["tid"]?>">
	  <input name="page" id="page" type="hidden" value="<?=$page?>">
		<div class="vote_meta">
	        <div class="vote_meta_detail">
			
			
			
			<div class="frm_control_group">
					<label for="" class="frm_label" style="width:80px">分类</label>
					<div class="frm_controls">
						<span class="frm_input_box with_counter counter_in append vote_title count"> <select id="classid" name="classid" class="form-text" style="height:30px; line-height:30px;  border:0px solid #dcdcdc; width:300px">
				   <option value=""  selected="selected">-选择分类-</option>
		 <?
		$ssql="select * from {$tablepre}template_class  order by sid desc,tid desc" ;
		$squery = $db->query($ssql);
		while($rsss=$db->fetch_array($squery)){
		  ?>
			<option value="<?=$rsss["tid"]?>" <? if($rss["classid"]==$rsss["tid"]){?> selected="selected" <? } ?>><?=$rsss["title"]?></option><?
		 }
		 ?>
				</select></span>
						<span class="frm_tips"></span>
					</div>
				</div>
			
			
				<div class="frm_control_group" >
					<label for="" class="frm_label" style="width:80px">名称</label>
					<div class="frm_controls">
						<span class="frm_input_box with_counter counter_in append vote_title count"><input autofocus="" value="<?=$rss["title"]?>" type="text" placeholder="" class="frm_input frm_msg_content" id="title" name="title" ></span>
						<span class="frm_tips"></span>
					</div>
				</div>
				
				<div class="frm_control_group">
					<label for="" class="frm_label" style="width:80px">目录</label>
					<div class="frm_controls">
						<span class="frm_input_box with_counter counter_in append vote_title count"><input autofocus="" type="text" placeholder="" value="<?=$rss["fdir"]?>" class="frm_input frm_msg_content" id="fdir" name="fdir" ></span>
						<span class="frm_tips">模版对应的目录</span>
					</div>
				</div>
			
				
				
				<div class="frm_control_group">
					<label for="" class="frm_label" style="width:80px">封面</label>
					<div class="frm_controls">
						<input id="fpic" name="fpic" type="hidden" value="<?=$rss["fpic"]?>" >	
			  <img src="../<?=$rss["fpic"]?>" width="80" height="80"  id=pic_fpic><br>
			   <input value="上传图片" type="button"  rel="fpic"  class="shangchuan" style="background: #00CC00; color:#FFFFFF;  border:1px solid #00CC00; padding:5px 10px; cursor:pointer; ">
						<span class="frm_tips">建议大小：280*200</span>
					</div>
				</div>
				
				
				<div class="frm_control_group">
					<label for="" class="frm_label" style="width:80px">背景音乐</label>
					<div class="frm_controls">
						<span class="frm_input_box with_counter counter_in append vote_title count"><input autofocus="" type="text" placeholder="" value="<?=$rss["music"]?>" class="frm_input frm_msg_content" id="music" name="music" ></span>
						<span class="frm_tips">必须是外连格式比如http://</span>
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
    <h2 class="title_border">模版管理
      <p class="extra_info mini_tips icon_after align_title"><a href="#" target="_blank">模版说明 <i class="icon_mini_tips document_link"></i></a></p>
    </h2>
  </div>
  <div class="main_bd">
  
  
    <div class="topbar group"><a data-bb="custom_form" class="btn btn_primary btn_add js_add_btn" id="jssdkSet" href="template.php?do=add"><i class="icon14_common add_white"></i>新建模版</a></div>
    <div class="table_wrp with_border">
	
	
      <table class="table" cellspacing="0">
        <thead class="thead">
          <tr>
		  <th class="table_cell"><div class="td_panel">ID</div></th>
            <th class="table_cell " style=" text-align:center"><div class="td_panel">名称</div></th>
			 <th class="table_cell " style=" text-align:center"><div class="td_panel">分类</div></th>
			<th class="table_cell " style=" text-align:center"><div class="td_panel">目录</div></th>
			 <th class="table_cell " style=" text-align:center"><div class="td_panel">封面</div></th>
 			<th class="table_cell " style=" text-align:center"><div class="td_panel">默认模版</div></th>
            
            <th class="table_cell "  style="text-align:center"><div class="td_panel">操作</div></th>
          </tr>
        </thead>
        <tbody class="tbody js_list_body">
         
		  <?
			$pagesize=15;
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
			
			$query = $db->query("select tid from {$tablepre}template where tid>0 $addsql");
			$total= $db->num_rows($query);
			$pagenum=ceil($total/$pagesize);
			$url="template.php";
			$i=$pagesize*($page-1)+1;
			$kmulti = multi($total,$pagesize, $page, $url, $idd);
			$query = $db->query("select * from {$tablepre}template where tid>0  order by isok desc, sid desc,tid desc limit $offset,$pagesize");
			while($rs=$db->fetch_array($query)){
			?>
		  <tr id=tr_<?=$rs["tid"]?>>
		  <td class="table_cell"><div class="td_panel "><?=$i?></div></td>
           <td class="table_cell " style=" text-align:center"><div class="td_panel "><?=$rs["title"]?></div></td>
		   
		   <td class="table_cell user_category"  style=" text-align:center">
					<?
					$o= $db->fetch_first("select * from {$tablepre}template_class where tid='$rs[classid]' order by tid desc limit 1");
					if(!$o){
						echo "--";
					}else{
					echo $o["title"];
					}
					?>  
		   
		   <td class="table_cell " style=" text-align:center"><div class="td_panel "><?=$rs["fdir"]?></div></td>
		   <td class="table_cell " style=" text-align:center"><div class="td_panel "><img src="../<?=$rs["fpic"]?>" width="50" height="50"></div></td>
			<td class="table_cell" style=" text-align:center"><div class="td_panel ">
			<?
			if($rs["isok"]){
			?>
			<a href="?action=ok&id=<?=$rs["tid"]?>"><img src="images/ico/1.png" style="width:25px;"></a>
			<?
			}else{
			?>
			<a href="?action=ok&id=<?=$rs["tid"]?>"><img src="images/ico/2.png" style="width:25px;"></a>
			<?
			}
			?>
			
			
			</div></td>
            <td class="table_cell " style="text-align:center"><div class="td_panel">  <a href="?do=edit&id=<?=$rs["tid"]?>&page=<?=$page?>" class="app_edit" tid=<?=$rs["tid"]?>>编辑</a>
<a href="?action=dell&id=<?=$rs["tid"]?>" class="app_del" tid=<?=$rs["tid"]?> onClick="javascript:return confirm('确定要删除吗？');">删除</a></div></td>
          </tr> <?
		  $i++;
		 }
		 ?>
        </tbody>
      </table>
	  
    </div><div class="tool_area">
            <div class="pagination_wrp js_pageNavigator">
			
              <div class="pagination" > 
			  
			 
				<ul style="float:right">
				<?php echo $kmulti	?></ul>
			</div>
            </div>
          </div>
	
	<?
	  }
	  ?>
   
  </div>
</div>
</div>
<?
include 'foot.php';
?>


