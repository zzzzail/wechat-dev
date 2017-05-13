<?php 
session_start();
header("Content-type: text/html; charset=utf-8");
require_once 'include/common.inc.php';

$openid=daddslashes($openid);
if(!$openid){
echo "相册不存在";
exit;
}

$o= $db->fetch_first("select * from {$tablepre}openid where openid='$openid' order by tid desc limit 1");
if(!$o){
	echo "相册不存在";
	exit;
}
$openid=$o["openid"];


$snn=daddslashes($sn);


if(!$snn){
	echo "相册不存在";
	exit;
}

$g= $db->fetch_first("select * from {$tablepre}gongzhonghao where sn='$snn' and isok=1 order by tid desc limit 1");
if(!$g){
	echo "公众号不存在";
	exit;
}

$sn=$g["sn"];
$gh=$g["gh"];

$guanzhu_url=$g["furl"];
$g_appid=$g["appid"];
$g_appsecret=$g["appsecret"];

require_once 'include/wx_jsdk_class.php';

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="format-detection" content="telephone=no,email=no">
<meta name="ML-Config" content="fullscreen=yes,preventMove=no">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-capable" content="yes">
<title>我的音乐相册</title>
<script src="assets/js/viewport.js"></script>
        <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
        <script>

            var module_inits = [];

            wx.config({
			  debug: false,
                appId: '<?php echo $signPackage["appId"];?>',
				timestamp: <?php echo $signPackage["timestamp"];?>,
				nonceStr: '<?php echo $signPackage["nonceStr"];?>',
				signature: '<?php echo $signPackage["signature"];?>',
                jsApiList : [
                   'hideAllNonBaseMenuItem']
                });
            
            function load_init_modules()
            {
                for(var i=0; i<module_inits.length; i++)
                {
                    module_inits[i]();
                }
            }

            function call_me(fun)
            {
                module_inits.push(fun);
            }

            var ua = navigator.userAgent.toLowerCase();  

            if(ua.match(/MicroMessenger/i) == 'micromessenger')
            {  
                wx.ready(load_init_modules);
            }
            else
            {
                onload = load_init_modules;
            }

        </script>

<script>
var my_openid = '<?=$openid?>';
var my_sn = '<?=$sn?>';
</script>
	<style type="text/css">

     
		 body
        {
            margin:0px;
            background-color: #E4E4E4;
        }

		#title
		{
			width: 100%;
			height: 60px;
			background-color: #44B549;
			color: white;
			font-size: 18pt;
			text-align: center;
			line-height: 60px;
		}

		#help-btn
		{
			position: absolute;
			top: 10px;
			right: 20px;
			height: 40px;
			line-height: 40px;
			font-size: 14pt;
			width: 80px;
			background-color: rgb(255, 204, 102);
			border-radius:50px;
		}

		#content
		{
			position: relative;
			width: 100%;
			min-height: 100%;
			background-color: #E4E4E4;
		}

		#promt
		{
			display: none;
			position: absolute;
			width: 100%;
			height: 80%;
			top: 20%;
		}

		#promt>span
		{
			display: block;
			font-size: 18pt;
			text-align: center;
			width: 80%;
			margin: 20px 10% 0 10%;
			height:80px;
			line-height:80px;
		}

		.item
		{
			position: relative;
			width: 450px;
			left: 20px;
			margin-top: 10px;
			height: 320px;
			background-color: white;
			border: 3px solid #ccc;
		}

		.item-pic
		{
			position: relative;
			width: 430px;
			left: 10px;
			margin-top: 10px;
			height: 220px;
			overflow: hidden;
			background-position:center;
			background-size: cover;
		}

		.item-pv
		{
			position: relative;
			width: 100%;
			text-align: center;
			height: 40px;
			line-height: 40px;
			font-size: 12pt;
		}

		.item-edit , .item-del
		{
			position: relative;
			float: left;
			width: 100px;
			height: 40px;
			border-radius: 20px;
			color: white;
			text-align: center;
			line-height: 40px;
			font-size: 15pt;
		}

		.item-edit
		{
			background-color: #FD536C;
			margin-left: 100px;
		}

		.item-del
		{
			background-color: #FFCC66;
			margin-left: 50px;
		}

	</style>
    </head><body><div id="title">我的音乐相册
    	<div onClick="goto_help();" id="help-btn">帮助</div>
        
    </div>
	<div id="content">
		
		<div id="promt">
            <span>您还未制作过任何的音乐相册呢~</span>
        </div>
		</div>
   
    <script type="text/javascript" src="assets/js/xmlHttp.js"></script>
    <script type="text/javascript">

    	function objid(id)
    	{
    		return document.getElementById(id);
    	}

    	function getQueryStr(str)
    	{   
    	   
    	    var reg = new RegExp("(^|&)" + str + "=([^&]*)(&|$)", "i");
    	    var r = window.location.search.substr(1).match(reg);
    	    if (r != null) return (r[2]);
    	    return "";   
    	}

    	onload = function(){
    		openid = my_openid;
    		document.onscroll = get_more;
			
    		get_pages();
    	}

    	var page = 1;
    	function get_pages()
    	{
    	    var url = 'data/my_app.php?sn='+my_sn+'&openid=' + my_openid;
            url = url + '&page=' + page;
            //location.href = url;
			//alert(url)
    	    XMLHttp.sendReq('GET', url, '', get_pages_callback);
    	}


    	function get_pages_callback(objXMLHttp)
    	{
	        var more = objid('more');
		//alert(objXMLHttp.responseText)
		
	        if(objXMLHttp.responseText.length <= 5)
	        {
	            if(more)
	            {
	                more.innerHTML = '已经是最后一页了';
	                setTimeout("objid('more').innerHTML = ''",2000);
	            }
	            else
	            {
	                objid('promt').style.display = 'block';
	                document.body.onscroll = null;
	            }
	        }
	        else
	        {
	            var obj = objid('content');
	            if(more)
	            {
	                document.body.removeChild(more);
	            }
	            obj.innerHTML = obj.innerHTML + objXMLHttp.responseText;
	            page++;
	        }
    	}

    	function get_more()
    	{
    	    if(850 + document.body.scrollTop + 5 >= document.body.scrollHeight)
    	    {
    	        if(objid('more'))
    	        {
    	            return ;
    	        }
    	        var div=document.createElement('div');
    	        div.id="more";
    	        div.style.cssText = 'position:absolute;width:100%;height:70px;top:'+document.body.scrollHeight+'px;line-height:70px;font-size:18pt;text-align:center;';
    	        div.innerHTML = '正在努力加载中...';
    	        document.body.appendChild(div);
    	        get_pages();
    	    }
    	}

    	var delid = '';
    	var del = false;

    	function del_book(bookid)
    	{
    	    if(del)
    	    {
    	        alert('正在删除中...');
    	        return;
    	    }

    	    if(confirm("请不要轻易删除相册，删除后分享及收藏的相册也将会一并删除！\n确定要删除吗？"))
    	    {
    	        var url = 'data/del_app.php?openid=' + my_openid;
                url += '&tid=' + bookid;
    	        delid = bookid;

    	        XMLHttp.sendReq('GET', url, '', del_callback);
    	        del = true;
    	    }

    	    event.stopPropagation();
    	}

    	function del_callback(objXMLHttp)
    	{
    	   
	        if(objXMLHttp.responseText == "0")
	        {
	            alert('删除失败~');
	        }
	        else
	        {
	            objid('content').removeChild(objid(delid));
	            //location.reload();
	        }
	        del = false;
    	}

    	function goto_help()
    	{
    		window.location.href='help.php';
    	}
		
		wx.ready(function(){
		    wx.hideAllNonBaseMenuItem();
		})
    </script><?
$db->free_result($query);
$db->close();
?>
</body></html>