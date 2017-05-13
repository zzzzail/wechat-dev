<?php 
session_start();
header("Content-type: text/html; charset=utf-8");
require_once 'include/common.inc.php';

$sn=daddslashes($sn);
if(!$sn){
	echo "相册不存在";
	exit;
}
$gh=daddslashes($gh);
if(!$gh){
	echo "相册不存在";
	exit;
}
$u=$_WEITE['web_weburl']."html.php?sn=".$sn."&gh=".$gh;
header("Location:$u"); 
//确保重定向后，后续代码不会被执行 
exit;
$db->close();
?>