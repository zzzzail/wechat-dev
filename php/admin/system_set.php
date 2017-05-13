<?php 
require_once '../include/common.inc.php';
require_once 'session.php';
$set_menu="selected";



if($action == 'logo'){
$query = $db->query("select  * from {$tablepre}set  order by id desc");
$rs=$db->fetch_array($query);
$banquan=json_decode($rs["banquan"],true);

$bq='{"is_banquan":"'.$banquan['is_banquan'].'","banquan_pic":"'.$banquan['banquan_pic'].'","logo":"","banquan_links":"'.$banquan['banquan_links'].'"}';

$sql="update {$tablepre}set  set banquan='$bq'";
$query = $db->query($sql);

$fp = fopen('../cache/cache_inc.php', 'r');
$configfile = fread($fp, filesize('../cache/cache_inc.php'));
fclose($fp);
$configfile = preg_replace("/[$]_WEITE\[\'logo\'\]\s*\=\s*[\"'].*?[\"'];/is", "\$_WEITE['logo'] ='';", $configfile);	
$fp = fopen('../cache/cache_inc.php','w');
fwrite($fp, trim($configfile));
fclose($fp);
}


if($action == 'edit'){
$weburl=daddslashes($weburl);
$title=filterhtml($title);


$sql="update {$tablepre}set  set weburl='$weburl',title ='$title'  where  id=$id";
$query = $db->query($sql);

$fp = fopen('../cache/cache_inc.php', 'r');
$configfile = fread($fp, filesize('../cache/cache_inc.php'));
fclose($fp);

$configfile = preg_replace("/[$]_WEITE\[\'web_weburl\'\]\s*\=\s*[\"'].*?[\"'];/is", "\$_WEITE['web_weburl'] = '$weburl';", $configfile);
$configfile = preg_replace("/[$]_WEITE\[\'web_title\'\]\s*\=\s*[\"'].*?[\"'];/is", "\$_WEITE['web_title'] = '$title';", $configfile);

$fp = fopen('../cache/cache_inc.php','w');
fwrite($fp, trim($configfile));
fclose($fp);

/////////////////////////////////
msboxurl("更新成功!","system_set.php");
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
<link  rel="stylesheet" type="text/css" href="css/base/setting_common.css"/>
<link rel="stylesheet" type="text/css" href="css/base/setting_index.css"/>
<link rel="stylesheet" type="text/css" href="css/base/upload.css"/>
<link rel="stylesheet" type="text/css" href="css/base/pagination.css" />
<link rel="stylesheet" type="text/css" href="css/webuploader.css">
<meta name="renderer" content="webkit"/>


<script src="js/jquery.min.js"></script>
<script src="js/admin.js"></script>
<script type="text/javascript" src="js/webuploader.min.js"></script>
<style>
.account_setting_area{ display:none}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body class="zh_CN">
<?
include 'head.php';
?>
<div id="body" class="body page_setting index">
<?
include 'left.php';
$query = $db->query("select  * from {$tablepre}set  order by id desc");
$rs=$db->fetch_array($query);
?>
</div>
<div class="col_main">
  <div class="main_hd" style="border-bottom:1px solid #dcdcdc">
    <h2>全局设置</h2>
	</div>
  <div class="main_bd">
    <form action="system_set.php" method="post" name="myform" onSubmit="javascript:return isValid();">
      <input name="action" id="action" type="hidden" value="edit">
      <input name="id" id="action" type="hidden" value="<?=$rs["id"]?>">
      <div  id="tab1">
      
        <ul>
          <li class="account_setting_item">
            <h4>系统地址</h4>
            <div class="meta_opr">地址后面必须加/ </div>
            <div class="meta_content"> <span class="frm_input_box">
              <input type="text" name="weburl"  id="weburl" value="<?=$rs["weburl"]?>" class="frm_input js_domain1">
              </span> </div>
          </li>
          <li class="account_setting_item">
            <h4>系统名称</h4>
            <div class="meta_opr"> </div>
            <div class="meta_content"> <span class="frm_input_box">
              <input type="text" name="title" id="title" value="<?=$rs["title"]?>" class="frm_input js_domain1">
              </span> </div>
          </li>
        </ul>
      </div>
      <input type="submit" value="保存全局配置" class="btn btn_primary js_complete_bnt" id=btnadd  style="margin:20px; margin-left:40%" />
    </form>
  </div>
</div>
</div>
</div>

<?
include 'foot.php';
?>


