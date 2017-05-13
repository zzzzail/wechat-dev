<?php
header("Content-type: text/html; charset=utf-8"); 
define('NOROBOT', TRUE);
require_once '../../include/common.inc.php';
require_once '../session.php';


if($action=="class_add"){

	$title=addslashes(filterhtml(trim($title)));
	
	if(!$title){
		echo'{"state":0,"msg":"请输入分类名称"}';
		exit;
	}
	
	$rss= $db->fetch_first("select * from {$tablepre}class where title='$title'  limit 1");
	if(!$rss){
		$sql="insert into {$tablepre}class(title,sid,dateline) value ('$title',$sid,'$timestamp')";
		$query = $db->query($sql);
		echo'{"state":1,"msg":"OK"}';
	}else{
		echo'{"state":0,"msg":"分类已经存在,请重新输入"}';
	}
}


if($action=="class_edit"){
	$title=addslashes(filterhtml(trim($title)));
	if(!$title){
		echo'{"state":0,"msg":"请输入分类名称"}';
		exit;
	}
	
	$query = $db->query("select * from {$tablepre}class where title='$title' and tid<>$tid ");
	$rows= $db->num_rows($query);
	
	if($rows>=1)
	{
		echo'{"state":0,"msg":"有重复的,换一个试试吧"}';
		exit;
	}
	
	$rss= $db->fetch_first("select * from {$tablepre}class where tid=$tid  limit 1");
	if($rss){
		$tid=$rss["tid"];
		$sql="update {$tablepre}class set title='$title',sid=$sid where tid=$tid";
		$query = $db->query($sql);
		echo'{"state":1,"msg":"OK"}';
	}else{
		echo'{"state":0,"msg":"分类不存在,请重新输入"}';
	}
}


if($action=="edit_class"){
	$rss= $db->fetch_first("select * from {$tablepre}class where tid=$tid  limit 1");
	if($rss){
	$tid=$rss["tid"];
	$sid=$rss["sid"];
	$title=$rss["title"];
	 $html="<div class='frm_jssdk'>";
	 $html.="<input name='tid' id=tid type='hidden' value='".$tid."' />";
      $html.="<div class='frm_control_group w50 btn_input_group l'>";
        $html.="<label for='' class='frm_label'>分类名称</label>";
         $html.="<div class='frm_controls'>";
           $html.="<span class='frm_input_box'>";
            $html.="<input type='text' id=title name='title' value='".$title."' class='frm_input js_domain1'>";
              $html.="</span>";
               $html.="</div>";
				 $html.="<br>";
					$html.=" <label for='' class='frm_label'>分类排序</label>";
                     $html.=" <div class='frm_controls'>";
                        $html.=" <span class='frm_input_box'>";
                            $html.=" <input type='text' value='".$sid."' id='sid' name='sid' class='frm_input js_domain1'  >";
        $html.="</span>";
		$html.=" <p class='frm_msg fail js_fail' style='display: block; color:#999999 '>从大到小显示</p>";
        $html.=" </div>";
        $html.=" </div>";
        $html.="  </div>";
		
		echo'{"state":1,"msg":"'.$html.'"}';
		
	}else{
		echo'{"state":0,"msg":"参数错误"}';
	}
}


if($action=="class_dell"){
	$rss= $db->fetch_first("select * from {$tablepre}class where tid=$tid  limit 1");
	if($rss){
		///删除分类下所有的素材
	
		$db->query("delete from {$tablepre}class where tid=$tid");
		echo'{"state":1,"msg":"OK"}';
	}else{
		echo'{"state":0,"msg":"参数错误"}';
	}
}

$db->close();
?>