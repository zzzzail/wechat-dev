<?php 
session_start();
header("Content-type: text/html; charset=utf-8");
require_once 'include/common.inc.php';
require_once 'include/wx_jsdk_class.php';
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

$g= $db->fetch_first("select * from {$tablepre}gongzhonghao where sn='$gh' and isok=1 order by tid desc limit 1");
if(!$g){
	echo "公众号不存在";
	exit;
}

$snn=$g["sn"];
$gh=$g["gh"];
$guanzhu_url=$g["furl"];
$g_appid=$g["appid"];
$g_appsecret=$g["appsecret"];
$gid=$g["tid"];

if(time()<=$g["overdateline"] && time()>=$g["startdateline"]){
}else{
	echo "<img src='assets/images/guoqi.jpg' width='100%' height='100%' >";
	exit;
}

$rss=$db->fetch_first("select * from {$tablepre}app where  sn='$sn' order by tid asc limit 1");
if(!$rss){
	echo "相册不存在";
	exit;
}

$db->query("update {$tablepre}app set views=views+1 where tid=$rss[tid]");
 
if($rss["music"]){
	$music=$rss["music"];
}else{
	$music ="http://ws.stream.qqmusic.qq.com/101387.m4a?fromtag=46";
}

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="format-detection" content="telephone=no,email=no">
<meta name="ML-Config" content="fullscreen=yes,preventMove=no">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-capable" content="yes">
<title><?=$rss["title"]?></title>
 	<script src="assets/js/viewport.js"></script>
    <script src='http://res.wx.qq.com/open/js/jweixin-1.0.0.js'></script>
    <script>
  			wx.config({
               debug: false,
               appId: '<?php echo $signPackage["appId"];?>',
				timestamp: <?php echo $signPackage["timestamp"];?>,
				nonceStr: '<?php echo $signPackage["nonceStr"];?>',
				signature: '<?php echo $signPackage["signature"];?>',
                jsApiList: [
					'onMenuShareTimeline',
					'onMenuShareAppMessage',
					'hideMenuItems',
					'showMenuItems',
					'hideAllNonBaseMenuItem'
				]
            });
            var module_inits = [];
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
			 document.ontouchmove = function(e)
            {
                e.preventDefault();
            } 
</script>
<script>
var slider_images_url = [];
<?
$sql="select * from {$tablepre}app_list where fid=$rss[tid]  order by sid desc,tid asc";
$query=$db->query($sql);
while($rs=$db->fetch_array($query)){
if(strstr($rs["fpic"],"http://"))
{
$slider_images_url=$rs["fpic"]."?imageView2/1/w/640/q/75";
}else{
 $slider_images_url=$_WEITE['web_weburl'].$rs["fpic"]; 
}
?>
slider_images_url.push('<?=$slider_images_url?>');
<?
}
?>
var e_bookid = '<?=$rss["tid"]?>';
var e_desc = '<?=preg_replace("/\s/","",$rss["title"])?>';
var e_ftitle = '<?=preg_replace("/\s/","",$rss["fdes"])?>';
var e_scene = '<?=$rss["template"]?>';
var editmode =  false;
var wxid = 'iweite';
var e_sn = '<?=$rss["sn"]?>';
var e_gh = '<?=$snn?>';
var guanzhu_url = '<?=$guanzhu_url?>';
var e_music_url = '<?=$music?>';
</script>


<div style="position: fixed;left:10px; top:15px; white-space: nowrap; text-shadow: rgb(0, 0, 0) 0px 0px 3.2px; z-index:9999999"><div style="margin:2px 2px 2px 2px;color:#ffffff; font-family:黑体; font-size:20px;">人气：<?=$rss["views"]?>　 分享：<?=$rss["shares"]?></div></div></div>


<?
include 'template/'.$rss["template"].'/index.php';
?>
<link type="text/css" rel="stylesheet" href="assets/css/guanzhu.css?ver=3" /> 
<link rel="stylesheet" type="text/css" href="assets/css/buttons.css" />
<script type="text/javascript" src="assets/js/xmlHttp.js"></script>
<script type="text/javascript">
		
		if(typeof(objid) === "undefined")
		{
			var objid = function(id)
			{
				return document.getElementById(id);
			}
		}

		function random(min,max)
		{
		    return Math.floor(min+Math.random()*(max-min));
		}

		function share_url()
		{
			
			<?
			if($_WEITE['web_return_url']){
			?>
			return "<?=$_WEITE['web_return_url']?>share.php?sn=" +e_sn+"&gh="+ e_gh;
			
			<?
			}else{
			?>
			return "<?=$_WEITE['web_weburl']?>html.php?sn=" +e_sn+"&gh="+ e_gh;
			<?
			}
			?>
		}

		function on_weixin_share()
		{
			
			wx.hideAllNonBaseMenuItem();
			
			wx.showMenuItems({
			    menuList: ["menuItem:share:appMessage","menuItem:share:timeline"]
			});
			wx.hideMenuItems({
			    menuList: ["menuItem:copyUrl","menuItem:share:facebook","menuItem:openWithQQBrowser","menuItem:openWithSafari", "menuItem:share:qq","menuItem:share:QZone","menuItem:favorite", "menuItem:profile","menuItem:addContact","menuItem:refresh"] 
			});
			
			var desc = e_ftitle.replace("<br>", "\n").replace("<br/>", "\n");
			
			
			wx.onMenuShareAppMessage({
			   title   : e_desc,
			    desc    : e_ftitle,
			    link    : share_url(),
			    imgUrl  : slider_images_url[0],
			    type    : 'link',
			    success: function () { 
			            share_callback('message');
			    },
			    cancel: function () { 
			    }
			});

			wx.onMenuShareTimeline({
			    title  : e_ftitle,
			    link   : share_url(),
			    imgUrl : slider_images_url[0],
			    success: function () { 
			            share_callback('timeline');
			    },
			    cancel: function () { 
			    }
			});
			wx.onMenuShareQQ({
			   title   : e_desc,
			    desc    : e_ftitle,
			    link    : share_url(),
			    imgUrl  : slider_images_url[0],
			    type    : 'link',
			    success: function () { 
			            share_callback('qq');
			    },
			    cancel: function () { 
			    }
			});

			wx.onMenuShareQZone({
			    title   : e_desc,
			    desc    : e_ftitle,
			    link    : share_url(),
			    imgUrl  : slider_images_url[0],
			    type    : 'link',
			    success: function () { 
			            share_callback('message');
			    },
			    cancel: function () { 
			    }
			});

		}

		function share_callback(type)
		{
			var url = "data/share.php?tid="+e_bookid+"&s="+type;
			XMLHttp.sendReq('GET', url, '', function(objXMLHttp){
			});
		}

		function on_wx_music_init()
		{
			if(e_desc != "")
			{
				document.title =e_desc.replace("<br>", "\n").replace("<br/>", "\n");;
			}
			else
			{
				document.title = "音乐相册";
			}
			
			create_music();
			on_weixin_share();
			if(editmode == false)
			{
			
				var obj = document.getElementById("guanzhu_container");
				obj.style.visibility = 'visible';
				if(navigator.userAgent.match(/MicroMessenger/) == null)
				{
					obj.innerHTML = "自己做相册";
				}
			}
		}

		call_me(on_wx_music_init);

		//音乐播放

		var music_header   = '';
		var e_music_player = new Audio();

		function play_music()
		{
		    if(e_music_url == '')
		    {
		        return ;
		    }
		    e_music_player.src  = e_music_url;
		    e_music_player.loop = 'loop';
		    e_music_player.play();
		    
		    if(objid('sound_image'))
		    {
		        objid('sound_image').style.webkitAnimation     = "zhuan 1s linear infinite";
		    }
		    
		    bplay = 1;
		}

		function create_music()
		{
		    if(e_music_url == '')
		    {
		        return ;
		    }
		    
		    play_music();

		    sound_div = document.createElement("div");
		    sound_div.setAttribute("ID", "cardsound");
		    sound_div.style.cssText = "position:fixed;right:20px;top:25px;z-index:1000000033;visibility:visible;";
		    sound_div.onclick = switchsound;

bg_htm  = "<img id='sound_image' src='<?=$_WEITE['web_weburl']?>assets/images/music_note_big.png' style='-webkit-animation:zhuan 1s linear infinite'>";
		    txt_htm = "<div id='music_txt' style='color:white;position:absolute;left:-40px;top:30px;width:60px'></div>"

		    sound_div.innerHTML = bg_htm  + txt_htm;

		    document.body.appendChild(sound_div);
		} 

		var bplay = 0;              
		
		function switchsound()
		{
		    au = e_music_player;
		    ai = objid('sound_image');
		    if(au.paused)
		    {
		        bplay = 1;
		        au.play();
		        ai.style.webkitAnimation     = "zhuan 1s linear infinite";
		        objid("music_txt").innerHTML = "打开";
		        objid("music_txt").style.visibility = "visible";
		        setTimeout(function(){objid("music_txt").style.visibility="hidden"}, 2500);
		    }
		    else
		    {
		        bplay = 0;
		        au.pause();
		        ai.style.webkitAnimation     = "";
		        objid("music_txt").innerHTML = "关闭";
		        objid("music_txt").style.visibility = "visible";
		        setTimeout(function(){objid("music_txt").style.visibility="hidden"}, 2500);
		    }
		}

		function visit_guanzhu()
		{
			if(navigator.userAgent.match(/MicroMessenger/))
			{
				location.href = guanzhu_url;
			}
			else
			{
				location.href = guanzhu_url;
			}
		}

		function get_address()
		{
			
		}
		function get_address_callback(objXMLHttp)
		{
			
		}
</script>
<?
if($_WEITE['web_guazhu_rand']){
	$r= $db->fetch_first("select furl from {$tablepre}gongzhonghao where  isok=1 order by rand()  limit 1");
	$guanzhu_url=$r["furl"];
}
?>
<a id="guanzhu_container"  href="<?=$guanzhu_url?>" class="large green button" style="visibility:hidden;text-align:center;line-height:30px;font-size:22px;position:fixed;bottom:20px;left:150px;width:200px;height:45px;z-index:1000000023;-webkit-animation:guangzhu_ani 0.8s linear infinite alternate">自己做相册</a>
<?
if($_WEITE['web_islrc']){
?>
<?
include 'app_menu_lrc.php';
?>
<?
}
?>


<?
if($_WEITE['web_isbooks']){
?>
<?
include 'app_menu_tanmu.php';
?>
<?
}
?>
<?
$db->free_result($query);
$db->close();
?>