<?php 
session_start();
header("Content-type: text/html; charset=utf-8");
require_once '../include/common.inc.php';

$rss=$db->fetch_first("select * from {$tablepre}app where  tid=$tid order by tid asc limit 1");
if(!$rss){
	echo "0";
	exit;
}
$db->query("update {$tablepre}app set  shares=shares+1  where tid=$rss[tid] limit 1");

echo "1";
$db->free_result($query);
$db->close();
?>
