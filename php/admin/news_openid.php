<?php
define('NOROBOT', TRUE);
require_once '../include/common.inc.php';
require_once 'session.php';
$news_openid="selected";

if($ac=="list"){

					
					
	$TOKEN_URL  = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".$_WEITE['appid']."&secret=".$_WEITE['appsecret'];
	if (ini_get('allow_url_fopen') == 1 && function_exists('curl_init')){
		$json = file_get_contents($TOKEN_URL);
		if (empty($json)){
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
			curl_setopt ($ch, CURLOPT_URL, $TOKEN_URL);
			curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
			$json = curl_exec($ch);
			curl_close($ch);
		}
		$result = json_decode($json,true);
		$ACC_TOKEN = $result['access_token'];
	}else{
		echo "空间不支持！请询问空间商是否开启curl和allow_url_fopen";
		exit;
	}
						
										

					$i=1;
					$query = $db->query("select * from {$tablepre}openid limit 100");
				while($rs=$db->fetch_array($query)){
					$openid=$rs["openid"];
					if(trim($rs["username"])=="匿名" || trim($rs["username"])==""){
						$url="https://api.weixin.qq.com/cgi-bin/user/info?access_token=".$ACC_TOKEN."&openid=".$openid."&lang=zh_CN";
						$res=https_request($url);
						//print_r($res);
						$arr= json_decode($res,true);
						$subscribe=$arr["subscribe"];
						$openid=$arr["openid"];
						if($subscribe){
							$nickname=addslashes(trim($arr["nickname"]));
							$headimgurl=trim($arr["headimgurl"]);
							
							$db->query("update {$tablepre}openid set username='$nickname',face='$headimgurl',subscribe=$subscribe where openid='$openid'");
							//echo "update {$tablepre}openid set username='$nickname',face='$headimgurl',subscribe=$subscribe where openid='$openid'";
							
						}	
						$i++;
					}
				}
				unlink("../cache/access_token.json");
				unlink("../cache/jsapi_ticket.json");
				$msg="一共".$i."个用户头像更新完毕.";
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
 <div class="mp_news_area notices_box" style="margin-top:30px">
    <div class="title_bar">
      <h3>用户同步头像</h3>
    </div>
    <ul class="mp_news_list">
	<?
	if($ac=="list"){
	?>
	 <li class="mp_news_item"  style="text-align:center"><?=$msg?></li>
     
	 <?
	 }else{
	 ?> 
	  <li class="mp_news_item"  style="text-align:center">此功能只针对具备获取用户头像和呢称的公众号</li>
      <li class="mp_news_item" style="text-align:center"> <a href="?ac=list"> <strong>点此同步</strong> <span class="read_more"><?=$d?></span> </a> </li>
   <?
	 }
	 ?> 
    </ul>
  </div>
  <div class="pagination_wrp pageNavigator"></div>
 
</div>
</div>
<?
include 'foot.php';
?>
