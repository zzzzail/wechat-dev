<?php header("Content-type: text/html; charset=utf-8"); ?>
<?
if(!defined('IN_IWEITE')) {
	exit('Access Denied');
}

if(!$weite_uid){
	@header("location:index.php");
	exit;
}else{
	$rss= $db->fetch_first("select * from {$tablepre}gongzhonghao  where tid=$weite_uid  limit 1");
	if(!$rss){
		@header("location:index.php");
		exit;
	}else{
			if(time()<=$rss["overdateline"] && time()>=$rss["startdateline"]){
			}else{
				echo'{"state":0,"msg":"ÕÊ»§¹ýÆÚ"}';
				exit;
			}
	}
}
?>