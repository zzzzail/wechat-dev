<?php 
session_start();
header("Content-type: text/html; charset=utf-8");
require_once '../include/common.inc.php';
$fdes=daddslashes($fdes);
if(!$action){
	echo "0";
	exit;
}
if(!$tid){
	echo "0";
	exit;
}
if(!$fdes){
	echo "0";
	exit;
}


$rss=$db->fetch_first("select sn,gh,tid from {$tablepre}app where  tid=$tid  order by tid asc limit 1");
if(!$rss){
	echo "0";
	exit;
}

$sn=$rss["sn"];
$gh=$rss["gh"];
$tid=$rss["tid"];
$fdes=strip_tags($fdes);
$fdes=filterhtml($fdes);

$sql="insert into {$tablepre}books(isok,classid,title,sn,gh,dateline) value (1,$tid,'$fdes','$sn','$gh','$timestamp')";
$query = $db->query($sql);
echo'{"state":1,"msg":"OK"}';
$db->free_result($query);
$db->close();
?>
