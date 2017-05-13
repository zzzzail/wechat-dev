<?php 
session_start();
header("Content-type: text/html; charset=utf-8");
require_once 'include/common.inc.php';
require_once 'include/wx_jsdk_class.php';

if(!is_mobile()){
header("location:index.php");
exit;
}


if(!$tid){
	echo "不存在";
	exit;
}
$rss= $db->fetch_first("select * from {$tablepre}template where tid=$tid order by tid desc limit 1");
if(!$rss){
	echo "不存在";
	exit;
}
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
					'onMenuShareQQ',
					'onMenuShareQZone',
					'hideMenuItems',
					'showMenuItems'
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
for (var i=1;i<=9;i++)
{
	slider_images_url.push('<?=$_WEITE['web_weburl']?>assets/demo/'+i+'.jpeg');
}
var e_bookid = '<?=$rss["tid"]?>';
var e_desc = '音乐想册 打开看看';
var e_ftitle = '音乐想册';
var e_openid = "iweite";
var e_scene = '<?=$rss["fdir"]?>';
var editmode =  false;
var wxid = 'iweite';
var e_sn = '<?=$rss["tid"]?>';
var guanzhu_url = '<?=$_WEITE['guanzhu_url']?>';
var e_music_url = '<?=$rss["music"]?>';
</script>
<?
include 'template/'.$rss["fdir"].'/index.php';
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
			return "<?=$_WEITE['web_weburl']?>demo.php?tid="+ e_bookid;
		}

		function on_weixin_share()
		{
			wx.hideAllNonBaseMenuItem();
			wx.showMenuItems({
			    menuList: ["menuItem:share:appMessage", "menuItem:share:timeline","menuItem:favorite", "menuItem:profile", "menuItem:addContact", "menuItem:refresh"] // 要显示的菜单项，所有menu项见附录3
			});
			
			wx.hideMenuItems({
			    menuList: ["menuItem:copyUrl","menuItem:share:facebook","menuItem:openWithQQBrowser","menuItem:openWithSafari","menuItem:share:qq", "menuItem:share:QZone"] // 要显示的菜单项，所有menu项见附录3
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
		    sound_div.style.cssText = "position:fixed;right:20px;top:25px;z-index:50;visibility:visible;";
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
	</script><?

$r= $db->fetch_first("select furl from {$tablepre}gongzhonghao where  isok=1 order by rand()  limit 1");
$guanzhu_url=$r["furl"];

?>
<a id="guanzhu_container"  href="<?=$guanzhu_url?>" class="large green button" style="visibility:hidden;text-align:center;line-height:30px;font-size:22px;position:fixed;bottom:20px;left:150px;width:200px;height:45px;z-index:10000;-webkit-animation:guangzhu_ani 0.8s linear infinite alternate">自己做相册</a>

<?
$db->free_result($query);
$db->close();
?>