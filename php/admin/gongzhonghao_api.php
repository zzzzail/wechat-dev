<?php
define('NOROBOT', TRUE);
require_once '../include/common.inc.php';
require_once 'session.php';
$gongzhonghao_menu="selected";
$query = $db->query("select  * from   {$tablepre}gongzhonghao where tid=$id order by tid desc");
$rss=$db->fetch_array($query);
$tid=$rss["tid"];


	if($action == 'add'){
		$title=daddslashes($body);
		
		if ($title == "") {
		  msboxback("请输入下拉内容");
		  exit;
		}	
		
		
		$TOKEN_URL = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".$rss['appid']."&secret=".$rss['appsecret'];
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
		$body=stripslashes($body);
		//echo $body;
	
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.weixin.qq.com/cgi-bin/menu/create?access_token=".$ACC_TOKEN); 
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST"); 
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE); 
		curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)'); 
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
			curl_setopt($ch, CURLOPT_AUTOREFERER, 1); 
			curl_setopt($ch, CURLOPT_POSTFIELDS,trim($body)); 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
			$tmpInfo = curl_exec($ch); 
			if (curl_errno($ch)) {  
			echo  curl_error($ch); 
			}else{
			curl_close($ch); 
			//echo $tmpInfo;
		    $result = json_decode($tmpInfo,true);
		    $errcode = $result['errcode'];
				if($errcode){
					$msg=$tmpInfo;
				}else{
					////更新JSON
					$menu=base64_encode($body);
					$db->query("update {$tablepre}gongzhonghao set menu='$menu' where tid=$tid");
					$msg="生成成功,24小时后生效(有时候几分钟后也生效)";
				}
			}
		
		}else{
			echo "空间不支持！请询问空间商是否开启curl和allow_url_fopen";
		}

		msboxurl($msg,"gongzhonghao.php");
		exit;
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
  <div class="main_hd">
    <h2>公众号对接</h2>
    <div class="title_tab" id="topTab"></div>
		<div class="extra_info search_bar"  style="border-bottom:2px solid #00CC66"> &nbsp; <span class="frm_input_box search append" style="margin-top:-30px; width:480px; border:0"> 
		  </span> 
		 </div>
  </div>
  

 <div class="mp_news_area notices_box"  style="margin-top:20px" >
    <div class="title_bar">
      <h3>公众号API</h3>
    </div>
    <ul class="mp_news_list">
	
	 <li class="mp_news_item"  style="text-align:left; padding-left:15px">
	
	 <img src="<?=$rss["fpic"]?>"  class="js_msgSenderAvatar"  style="width:50px; height:50px; margin:10px 0 0 10px" ></li>
	 <li class="mp_news_item"  style="text-align:left; padding-left:15px">公众号SN:<?=$rss["sn"]?></li>
	  <li class="mp_news_item"  style="text-align:left; padding-left:15px">公众号名称:<?=$rss["title"]?></li>
     <li class="mp_news_item"  style="text-align:left; padding-left:15px">AppID(应用ID):<?=$rss["appid"]?></li>
	 <li class="mp_news_item"  style="text-align:left; padding-left:15px">AppSecret(应用密钥):<?=$rss["appsecret"]?></li>
	 <li class="mp_news_item"  style="text-align:left; padding-left:15px">URL(服务器地址):<?=$_WEITE['web_weburl']?>api/index.php?sn=<?=$rss["sn"]?></li>
	 <li class="mp_news_item"  style="text-align:left; padding-left:15px">Token(令牌):<?=$rss["appid"]?></li>
	 <li class="mp_news_item"  style="text-align:left"></li>
    </ul>
	
	
	
	
	<div class="title_bar"  style="margin-top:15px">
      <h3>下拉菜单配置</h3>
    </div>
    <ul class="mp_news_list">
	<form action="" method="post" name="form1" id="form1">
<input type="hidden" name="action" id="action" value="add">
<input type="hidden" name="id" id="id" value="<?=$rss["tid"]?>">
	 <li class="mp_news_item"  style="text-align:left; padding-left:15px">
	 body <textarea name="body" cols="" rows=""  style="margin:10px; width:600px; height:350px">
	 <?
	 if($rss["menu"]){
	 echo base64_decode($rss["menu"]);
	 }else{
	 ?>{
    "button": [
        {
            "name": "开始制作",
            "sub_button": [
                {
                   "type": "pic_photo_or_album",
                    "name": "创建相册",
                    "key": "iweite_n", 
					"sub_button": []
                },
                {
                    "type": "pic_photo_or_album",
                    "name": "添加图片",
                    "key": "iweite_add", 
					"sub_button": []
                }
            ]
        },
		{
            "type": "click",
            "name": "我的相册",
            "key": "iweite_f"
        },
        {
            "type": "view",
            "name": "相册咨询",
            "url": "<?=$_WEITE[web_weburl]?>help.php"
        }
    ]
}
<?
}
?></textarea>
	 </li>
	 <li class="mp_news_item"  style="text-align:left; padding-left:15px">
	 <input type="submit" value="生成下拉菜单" class="btn btn_primary js_complete_bnt" id=btnadd  style="margin:20px; margin-left:40%" />

	 </li>
	 
	 </form>
	 
    </ul>
  </div>
	
	
	
	
  </div>
  
  
  
  <div class="pagination_wrp pageNavigator"></div>
 
</div>
</div>
<?
include 'foot.php';
?>
