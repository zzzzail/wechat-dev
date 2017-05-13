<?php header("Content-type: text/html; charset=utf-8"); ?>
<?
if(!defined('IN_IWEITE')) {
	exit('Access Denied');
}

if(!$admin_uid){
	@header("location:login.php");
	exit;
}else{
	$rss= $db->fetch_first("select * from {$tablepre}admin  where id=$admin_uid and password='$iweite_pw' limit 1");
	if(!$rss){
		@header("location:login.php");
		exit;
	}
}
?>