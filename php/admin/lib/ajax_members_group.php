<?php
define('NOROBOT', TRUE);
require_once '../../include/common.inc.php';
require_once '../session.php';
if($action=="dell"){
	$rss= $db->fetch_first("select * from {$tablepre}user_group where id=$tid  limit 1");
	if($rss){
		$db->query("delete from {$tablepre}user_group where id=$tid");
		echo'{"state":1,"msg":"OK"}';
	}else{
		echo'{"state":0,"msg":"参数错误"}';
	}
}


if($action=="edit"){
	$rss= $db->fetch_first("select * from {$tablepre}user_group where id=$tid  limit 1");
	if(!$rss){
		echo'{"state":0,"msg":"分类不存在"}';
		exit;
	}
	
	$title=addslashes(filterhtml(trim($title)));
	$modules=addslashes(filterhtml(trim($modules)));
	
	$jifen = intval(isset($jifen)) && is_numeric($jifen) ? intval($jifen) : 0;
	$mbs = intval(isset($mbs)) && is_numeric($mbs) ? intval($mbs) : 0;
	$price = intval(isset($price)) && is_numeric($price) ? intval($price) : 0;
	$shumu = intval(isset($shumu)) && is_numeric($shumu) ? intval($shumu) : 0;
	$isfanli = intval(isset($isfanli)) && is_numeric($isfanli) ? intval($isfanli) : 0;
	
	if($title==="" )
	{
		echo'{"state":0,"msg":"分类不存在"}';
		exit;
	}
	
	$query = $db->query("select * from {$tablepre}user_group where title='$title' and id<>$tid ");
	$rows= $db->num_rows($query);
	if($rows>=1)
	{
		echo'{"state":0,"msg":"貌似有重复的,换一个试试吧"}';
		exit;
	}
	
	$sql="update {$tablepre}user_group set title='$title',mbs=$mbs,isfanli=$isfanli,price=$price,jifen=$jifen,shumu=$shumu,sid=$sid,dateline='$timestamp',content='$modules' where id=$tid";
	$query = $db->query($sql);
	echo'{"state":1,"msg":"OK"}';
}


if($action=="add"){
	$title=addslashes(filterhtml(trim($title)));
	$modules=addslashes(filterhtml(trim($modules)));
	
	$jifen = intval(isset($jifen)) && is_numeric($jifen) ? intval($jifen) : 0;
	$mbs = intval(isset($mbs)) && is_numeric($mbs) ? intval($mbs) : 0;
	$price = intval(isset($price)) && is_numeric($price) ? intval($price) : 0;
	$shumu = intval(isset($shumu)) && is_numeric($shumu) ? intval($shumu) : 0;
	$isfanli = intval(isset($isfanli)) && is_numeric($isfanli) ? intval($isfanli) : 0;
	if(!$title){
		echo'{"state":0,"msg":"请输入分类名称"}';
		exit;
	}
	
	$rss= $db->fetch_first("select * from {$tablepre}user_group where title='$title'  limit 1");
	if(!$rss){
		$sql="insert into {$tablepre}user_group(title,mbs,price,isfanli,fdes,sid,dateline,shumu,jifen,content) value ('$title',$mbs,$price,$isfanli,'$fdes',$sid,'$timestamp',$shumu,$jifen,'$modules')";
		$query = $db->query($sql);
		echo'{"state":1,"msg":"OK"}';
	}else{
		echo'{"state":0,"msg":"分类已经存在,请重新输入"}';
		
	}
}
$db->close();
?>