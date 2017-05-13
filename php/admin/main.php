<?php
define('NOROBOT', TRUE);
require_once '../include/common.inc.php';
require_once 'session.php';

$daybegin=strtotime(date("Ymd"));  
$dayend=$daybegin+3600*24;
$query = $db->query("select tid from {$tablepre}openid ");
$_IWEITE["members"]=$db->num_rows($query);	

$query = $db->query("select  tid from {$tablepre}openid where datediff(from_unixtime(dateline),from_unixtime('".time()."')) = 0");
$_IWEITE["members_new"]=$db->num_rows($query);	



$query = $db->query("select tid from {$tablepre}app ");
$_IWEITE["apps"]=$db->num_rows($query);	
	
$query = $db->query("select tid from {$tablepre}app where datediff(from_unixtime(dateline),from_unixtime('".time()."')) = 0");
$_IWEITE["apps_new"]=$db->num_rows($query);

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
<link  rel="stylesheet" href="css/base/page_index.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body class="zh_CN">
<?
include 'head.php';
?>
<div id="body" class="body page_index">
<?
include 'left.php';
?>
</div>
<div class="col_main">
  <div class="index_show_area"  style="width:780px; " >
    <div class="index_tap added" >
      <ul class="inner" style="width:500px">
        <li class="index_tap_item total_fans"  style="width:250px"> <a href="members.php"> <span class="tap_inner"> <i class="icon_index_tap"></i> <em class="number"><?=$_IWEITE["members"]?></em> <strong class="title">用户总数</strong> </span> </a> </li>
        <li class="index_tap_item added_fans"  style="width:250px"> <a href="members.php"> <span class="tap_inner no_extra"> <i class="icon_index_tap"></i> <em class="number"><?=$_IWEITE["members_new"]?></em> <strong class="title">今日新增</strong> </span> </a> </li>
      </ul>
    </div>
    <div class="index_tap total">
      <ul class="inner" style="width:442px">
        <li class="index_tap_item added_message extra"  style="width:222px"> <a href="news.php"> <span class="tap_inner"> <i class="icon_index_tap"></i> <em class="number"><?=$_IWEITE["apps"]?></em> <strong class="title">相册总数</strong> </span> </a> </li>
        <li class="index_tap_item added_message extra" style="width:220px"> <a href="news.php"> <span class="tap_inner"> <i class="icon_index_tap"></i> <em class="number"><?=$_IWEITE["apps_new"]?></em><strong class="title">今日新增</strong> </span> </a> </li>
      </ul>
    </div>
  </div>
 <div class="mp_news_area notices_box">
    <div class="title_bar">
      <h3>常见问题</h3>
    </div>
    <ul class="mp_news_list">
      <li class="mp_news_item"> <a href="http://dh.iweite.com/doc/" target="_blank"> <strong>系统服务器基本配置要求. </strong> <span class="read_more"><?=$d?></span> </a> </li>
	  
	   <li class="mp_news_item"> <a href="http://dh.iweite.com/doc/1.php" target="_blank"> <strong>微特音乐相册手动配置教程</strong> <span class="read_more"><?=$d?></span> </a> </li>
	   
	   
	  
    </ul>
  </div>
  <div class="pagination_wrp pageNavigator"></div>
 
</div>
</div>
<?
include 'foot.php';
?>
