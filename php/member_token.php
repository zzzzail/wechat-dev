<?php 
session_start();
header("Content-type: text/html; charset=utf-8");
require_once 'include/common.inc.php';
require_once 'data/app_session.php';

$query = $db->query("select  * from   {$tablepre}gongzhonghao where tid=$weite_uid order by tid desc");
$rsss=$db->fetch_array($query);
if(!$rsss) exit(); 


if($action == 'edit') {
	$str=trim($frist);
//$str=stripslashes($str);
 $str=strip_tags($str);
 $str=preg_replace("/\s+/", ' ', $str); //过滤多余回车 
 $str=preg_replace("/<[ ]+/si",'<',$str); //过滤<__("<"号后面带空格
 $str=preg_replace("/<\!--.*?-->/si",'',$str); //注释 
 $str=preg_replace("/<(\!.*?)>/si",'',$str); //过滤DOCTYPE 
 $str=preg_replace("/<(\/?html.*?)>/si",'',$str); //过滤html标签 
 $str=preg_replace("/<(\/?head.*?)>/si",'',$str); //过滤head标签 
 $str=preg_replace("/<(\/?meta.*?)>/si",'',$str); //过滤meta标签 
 $str=preg_replace("/<(\/?body.*?)>/si",'',$str); //过滤body标签 
 $str=preg_replace("/<(\/?link.*?)>/si",'',$str); //过滤link标签 
 $str=preg_replace("/<(\/?form.*?)>/si",'',$str); //过滤form标签 
 $str=preg_replace("/cookie/si","COOKIE",$str); //过滤COOKIE标签
 $str=preg_replace("/<(applet.*?)>(.*?)<(\/applet.*?)>/si",'',$str); //过滤applet标签 
 $str=preg_replace("/<(\/?applet.*?)>/si",'',$str); //过滤applet标签
 $str=preg_replace("/<(style.*?)>(.*?)<(\/style.*?)>/si",'',$str); //过滤style标签 
 $str=preg_replace("/<(\/?style.*?)>/si",'',$str); //过滤style标签 
 $str=preg_replace("/<(title.*?)>(.*?)<(\/title.*?)>/si",'',$str); //过滤title标签 
 $str=preg_replace("/<(\/?title.*?)>/si",'',$str); //过滤title标签 
 $str=preg_replace("/<(object.*?)>(.*?)<(\/object.*?)>/si",'',$str); //过滤object标签 
 $str=preg_replace("/<(\/?objec.*?)>/si",'',$str); //过滤object标签 
 $str=preg_replace("/<(noframes.*?)>(.*?)<(\/noframes.*?)>/si",'',$str); //过滤noframes标签 
 $str=preg_replace("/<(\/?noframes.*?)>/si",'',$str); //过滤noframes标签
 $str=preg_replace("/<(i?frame.*?)>(.*?)<(\/i?frame.*?)>/si",'',$str); //过滤frame标签 
 $str=preg_replace("/<(\/?i?frame.*?)>/si",'',$str); //过滤frame标签
 $str=preg_replace("/<(script.*?)>(.*?)<(\/script.*?)>/si",'',$str); //过滤script标签 
 $str=preg_replace("/<(\/?script.*?)>/si",'',$str); //过滤script标签 
 $str=preg_replace("/javascript/si","JAVASCRIPT",$str); //过滤script标签 
 $str=preg_replace("/vbscript/si","VBSCRIPT",$str); //过滤script标签 
 $str=preg_replace("/on([a-z]+)\s*=/si","ON\\1=",$str); //过滤script标签 
 $str=preg_replace("/&#/si","&＃",$str); //过滤script标签，如javAsCript:alert('aabb)
 $frist=daddslashes($str);

	if($frist==="")
	{
		msboxback("信息不能为空!");
	}
	
	$sql="update  {$tablepre}gongzhonghao set frist='$frist' where tid=$weite_uid";
	$query = $db->query($sql);
	msboxurl("修改成功!","member_token.php");
	
}

include 'web_head.php';


?>
<div class="upload-main">
  <div class="upload-box w1200">
    <h3 style="font-weight:700">公众号设置</h3>
    <div class="up-list">
      <div id="mainlist">
	  <style>
	  .up-list .list .name{ width:200px}
	  </style>
	  
	  <div class="list up-file clearfix" style="height:100px; line-height:100px"><span class="name fl">公众号名称</span>
        <div class="right clearfix ps-relative">
          <p class="fl weizi"> <img src="<?=$rsss["fpic"]?>"  class="js_msgSenderAvatar"  style="width:50px; height:50px; margin:10px 0 0 0px" ><br><?=$rsss["title"]?></p>
         
        </div>
      </div>
	  <div class="list up-file clearfix"><span class="name fl">AppID(应用ID):</span>
        <div class="right clearfix ps-relative">
          <p class="fl weizi"><?=$rsss["appid"]?></p>
         
        </div>
      </div>
         
        <div class="list up-file clearfix"><span class="name fl">AppSecret(应用密钥):</span>
        <div class="right clearfix ps-relative">
          <p class="fl weizi"><?=$rsss["appsecret"]?></p>
         
        </div>
      </div>
	  
	   <div class="list up-file clearfix"><span class="name fl">URL(服务器地址):</span>
        <div class="right clearfix ps-relative">
          <p class="fl weizi"><?=$_WEITE['web_weburl']?>api/index.php?sn=<?=$rss["sn"]?></p>
         
        </div>
      </div>
	  
	   <div class="list up-file clearfix"><span class="name fl">Token(令牌):</span>
        <div class="right clearfix ps-relative">
          <p class="fl weizi"><?=$rsss["appid"]?></p>
         
        </div>
      </div>
	 <form action="" method="post" name="myform" onSubmit="javascript:return isValid();">
      <input name="action" id="action" type="hidden" value="edit">
	  <div class="list up-file clearfix"  style="height:270px"><span class="name fl"> 首次关注:</span>
        <div class="right clearfix ps-relative">
          <p class="fl weizi">
<textarea name="frist" cols="" rows=""  class="boxinput"  style="height:200px"><?=$rsss["frist"]?></textarea>
<br>
添加连接格式为:
[url=http://wwww.163.com]内容[/url]</p>
          <p class="fl weizi"> 添加换行格式为:
            \n </p>
        </div>
      </div>
	   <div class="list up-file clearfix"><span class="name fl"></span>
        <div class="right clearfix ps-relative">
          <p class="fl weizi"><input name="" type="submit" value="提交"  style="font-size:14px;display:block;height: 35px;line-height:35px;border: 1px solid #20c7a2;color: #ffffff;background-color: #20c7a2;border-radius: 4px;   width:250px;" /></p>
        </div>
      </div>
	  </form>
	  
	   <div class="list up-file clearfix"><span class="name fl"></span>
        <div class="right clearfix ps-relative">
          <p class="fl weizi"></p>
         
        </div>
      </div>
	  
	  
      </div>
    </div>
  </div>
</div>
<?php 
include 'web_foot.php';
?>
