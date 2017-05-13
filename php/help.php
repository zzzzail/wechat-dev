<?php 
session_start();
header("Content-type: text/html; charset=utf-8");
require_once 'include/common.inc.php';
if(!is_mobile()){
include 'web_head.php';
?>
<style>
#view-wrap{width:100%;background:#f2f2f2;padding:30px 0px;}
.view-con{background:#fff;padding-bottom:30px;}
.top{padding:20px  30px 30px 30px;border-bottom:1px solid #e8e8e8;}
.top h3{color:#444444;padding:10px 0 5px 0;}
.top span{font-size:14px;color:#999999;}
.top .info-span  i{background:url(assets/index/images/list-icon.png) no-repeat 0 0;width:14px;height:14px;display:inline-block;margin-right:9px;overflow:hidden;_vertical-align:2px;}
.top .info-view i{background-position:0 0;vertical-align:middle;}
.top .info-shouchang i{background-position:0 -14px;}
.top .info-download i{background-position:0 -30px;}
.top .info-time i{background-position:0 -53px;vertical-align:middle;}
.top .info em{color:#e8e8e8;margin:0 15px;height:20px;}
.top .info{height:20px;line-height:20px;margin-top:15px;}
.top span u{color:#999999;text-decoration:none;}

.right .buttons a{height:42px;text-align:center;line-height:42px;display:inline-block;color:#fff;overflow:hidden;_padding-top:15px;}.right .buttons a i{background:url(assets/index/images/list-icon.png) no-repeat   -14px -69px;width:14px;height:14px;display:inline-block;margin-right:9px;}.right .buttons .collect-icon{width:132px;height:42px;background-color:#52d6d3;display:inline;}.right .buttons .collect-icon i{background-position:0 -73px;}

.right .buttons .collect-icon:hover{background:#4cb3cd;}.right .buttons .download-icon{width:132px;height:42px;background:url(assets/index/images/list-icon.png) no-repeat   -60px -38px;width:168px;background-color:#20c7a2;margin-left:1px;}.right .buttons .download-icon i{background-position:0 -94px;}.right .buttons .download-icon:hover{background:#37bf91;}.pic-show{width:1140px;padding:30px 30px 0;text-align:center;}.pic-show img{margin-bottom:32px;}.pic-bottom  dl,.pic-bottom  dl a{color:#999999;font-size:14px;}.pic-bottom  dl a{padding:0 9px 0 7px;height:25px;line-height:25px;background:#ededed;display:inline-block;margin:0 1px;}.pic-bottom  dl a:hover{background:#dddddd;}.pic-bottom  dl{height:25px;line-height:25px;margin-top:7px;text-align:left;width:890px;overflow:hidden;}.share-button{zoom:1;}



.share-button .qq{transition:all .1s;background-position:0 0;}
.share-button .qq:hover{background-position:-70px 0px;}

.share-button a{float:left;width:50px;line-height:50px;height:50px;background-image:url(assets/index/images/share-icon.png);background-repeat:no-repeat;cursor:pointer;margin:6px 3px 6px 0;text-indent:-100em;overflow:hidden;color:#3a8ceb;display:inline;}

.share-button .weixin{transition:all .2s;background-position:0 -54px;}.share-button .weixin:hover{background-position:-70px -54px;}

.share-button .qzone{transition:all .2s;background-position:0 -107px;}.share-button .qzone:hover{background-position:-70px -107px;}.share-button .weibo{transition:all .2s;background-position:0 -162px;}

.share-button .weibo:hover{background-position:-70px -162px;}.share-button .more{transition:all .2s;background-position:0 -214px;}.share-button .more:hover{background-position:-70px -214px;}.other-wrap{width:100%;background:#f2f2f2;padding-bottom:30px;}.other{width:1200px;padding:30px 0;margin:0 auto;background:#fff;}


.other .other-list{padding-left:20px;}.other h3{font-size:18px;color:#999999;padding-bottom:21px;padding-left:30px;}.other .pic-box{margin:0 10px;float:left;width:270px;height:198px;display:inline-block;}


.other .pic-box img:hover{transform:scale(1.01);}



.weiShare{position:absolute;width:242px;height:287px;background:#fff;z-index:999999;padding:10px;text-align:center; right:0}


    #container
    {
    	width: 100%;	
    }
   
    .right
    {
    	float: left;
	    width: 20px;
	    height: 20px;
	    border-top: 10px solid transparent;
	    border-left: 20px solid #3E3E3E;
	    border-bottom: 10px solid transparent;
	    margin: 10px;

    }
    .down
    {
    	float: left;
	    width: 20px;
	    height: 20px;
	    border-left: 10px solid transparent;
	    border-right: 10px solid transparent;
	    border-top: 20px solid #3E3E3E;
	    margin: 10px;
    }
    .question
    {
    	width:100%;
    	/*padding-left: 10px;*/

    }
    .q_text
    {
    	width:100%;
    	position: relative;
    	left: 0px;
    	top: 0px;
    	font-size: 14px;
    	line-height: 50px;
    	color: #222;
    	background-color: #f5f5f5;
    	padding-left: 10px; text-align:left
    }
    .q_text1
    {
    	width:100%;
    	position: relative;
    	left: 0px;
    	top: 0px;
    	font-size: 14px;
    	line-height: 50px;
    	background-color:#E0EAF6;
    	color: #459AE9;
    	padding-left: 10px;text-align:left
    }
    .answer
    {
    	width:100%;
    	position: relative;
    	padding: 10px 10px 0px 10px;
    	line-height: 35px;
    	font-size: 14px; text-align:left
    }
</style>
</style>
<div id="view-wrap">
  <div class="view-con w1200">
    <div class="top clear hidden">
      <div class="left fl">
        <h3>使用教程</h3>
        <div class="info"><span class="info-span info-view"><i></i>36152 浏览</span></div>
      </div>
      <div class="share-button fr" style="margin-top:10px; width:267px; margin-right:-120px; display:inline; _margin-top:-50px;" data-bd-bind="1445391711764"><a href="#" class="qq" data-cmd="qq" title="分享到QQ好友" onClick="window.open('http://connect.qq.com/widget/shareqq/index.html?url='+encodeURIComponent(document.location.href)+'&amp;site=&amp;style=201&amp;width=32&amp;height=32');return false;"></a><a href="#" class="qzone" data-cmd="qzone" title="分享到QQ空间" onClick="window.open('http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url='+encodeURIComponent(document.location.href));return false;"></a><a href="#" class="weibo" data-cmd="weibo" title="分享到新浪微博" onClick="window.open('http://v.t.sina.com.cn/share/share.php?url='+encodeURIComponent(location.href)+'&amp;title='+encodeURIComponent('')+'&amp;appkey=433903842&amp;pic')"></a></div>
    </div>
    <div class="pic-show hidden" style=" text-align:center; ">
	
	
	
	<div id='container'>
	
	<div id='q1' class='question' style='margin-top: 3px;' onclick='show(1)'>
		<div id='qu1' class='q_text'>1. 如何制作相册？</div>
		<div id='a1' class='answer' style='display:none'>点击下方 “音乐相册(或开始制作)” -> "新建相册"，选择图片上传后，点击“已收到X张图片，点这里开始制作”即自动生成。</div>
	</div>
	<div id='q2' class='question' style='margin-top: 3px;' onclick='show(2)'>
		<div id='qu2' class='q_text'>2. 如何查看或修改以前制作的相册？</div>
		<div id='a2' class='answer' style='display:none'>点击下方 “音乐相册(或开始制作)” => "我的相册"，打开<img src='http://t1.qpic.cn/mblogpic/6a0b79d55ece8c401fe4/460' style='width:200px;'>即可看到所有相册，点击 “编辑” 即可对相册进行修改。</div>
	</div>
	<div id='q3' class='question' style='margin-top: 3px;' onclick='show(3)'>
		<div id='qu3' class='q_text'>3. 相册的安全性和保密性</div>
		<div id='a3' class='answer' style='display:none'>相册都经过安全和保密处理，除非您将相册主动分享出去，否则别人是看不到的。</div>
	</div>
	<div id='q4' class='question' style='margin-top: 3px;' onclick='show(4)'>
		<div id='qu4' class='q_text'>4. 相册是否收费?</div>
		<div id='a4' class='answer' style='display:none'>相册是完全免费的，请放心使用。</div>
	</div>
	<div id='q5' class='question' style='margin-top: 3px;' onclick='show(5)'>
		<div id='qu5' class='q_text'>5. 是否只能上传9张图片？</div>
		<div id='a5' class='answer' style='display:none'>由于微信一次性只能发9张图片，如需继续上传，点击“音乐相册(或开始制作)”->“增加图片”，即可继续添加。建议上传图片数目不要过多，否则加载会打开会比较慢，可分成多个相册制作。</div>
	</div>
	<div id='q6' class='question' style='margin-top: 3px;' onclick='show(6)'>
		<div id='qu6' class='q_text'>6. 如何修改音乐？</div>
		<div id='a6' class='answer' style='display:none'>打开相册，点击下方的“选音乐”，找到喜欢的音乐，并点击右方的“确定”,如：<img src='http://t1.qpic.cn/mblogpic/8543e977b8b6f41f40e0/2000'>也可以点击“搜索”<img src='http://t1.qpic.cn/mblogpic/13fe4abdf84eb263ca08/2000'>快速找到歌曲，由于音乐库在不断更新，有的歌曲暂时搜索不到，我们会及时更新。</div>
	</div>
	<div id='q7' class='question' style='margin-top: 3px;' onclick='show(7)'>
		<div id='qu7' class='q_text'>7. 如何修改图片？</div>
		<div id='a7' class='answer' style='display:none'>打开相册，点击下方的“增删图”，即可删除图片。<img src='http://t1.qpic.cn/mblogpic/dfda43d4520d4b5a26da/2000'></div>
	</div>
	<div id='q8' class='question' style='margin-top: 3px;' onclick='show(8)'>
		<div id='qu8' class='q_text'>8. 如何添加文字？</div>
		<div id='a8' class='answer' style='display:none'>目前只支持修改相册的标题，方法如下：<br>打开相册，点击下方的“改标题”，即可输入文字。</div>
	</div>
	<div id='q9' class='question' style='margin-top: 3px;' onclick='show(9)'>
		<div id='qu9' class='q_text'>9. 相册能制作多少个？保存多久？</div>
		<div id='a9' class='answer' style='display:none'>相册的数目不限数量，如要制作新的相册，点击“新建相册”。<br>对于已经制作的相册，正常情况下，如果您不删除的话，相册将会永久保存。</div>
	</div>
	<div id='q10' class='question' style='margin-top: 3px;' onclick='show(10)'>
		<div id='qu10' class='q_text'>10. 相册过多是否会占用内存？</div>
		<div id='a10' class='answer' style='display:none'>所有相册都保存在我们的服务器中，不会占用您任何的存储空间的，如果您删除了已经分享的相册，那些已经分享出去的相册也会被删除掉。</div>
	</div>
	<div id='q11' class='question' style='margin-top: 3px;' onclick='show(11)'>
		<div id='qu11' class='q_text'>11. 相册打不开，没有音乐或不出照片？</div>
		<div id='a11' class='answer' style='display:none'>浏览相册时，请确保在网络通畅的情况下。如仍有问题，添加微信号kong2698q,并将有问题的相册转发给我们，我们会为您查看问题并及时解决。</div>
	</div>
	<div id='q12' class='question' style='margin-top: 3px;' onclick='show(12)'>
		<div id='qu12' class='q_text'>12. 相册的播放次序问题</div>
		<div id='a12' class='answer' style='display:none'>除了3d类型的模板，绝大部分的模板都是按照顺序播放的。</div>
	</div>

	
</div>
<script>


function show (index) 
{

	var obj = document.getElementById('a'+index);
	if(obj.style.display == 'block')
	{
		obj.style.display = 'none';
		var qu = document.getElementById('qu'+index);
		qu.className = 'q_text';
		return;
	}

	var as = document.getElementsByClassName('answer');
	var q = document.getElementsByClassName('q_text1');
	for(var i = 0; i<q.length; i++)
	{
		q[i].className = 'q_text';
	}
	for(var i = 0; i<as.length;i++)
	{
		as[i].style.display = 'none';
	}
	if(obj.style.display == 'none')
	{
		var qu = document.getElementById('qu'+index);
		qu.className = 'q_text1';
		obj.style.display = 'block';
	}
	else
	{
		var qu = document.getElementById('qu'+index);
		qu.className = 'q_text';
		obj.style.display = 'none';
	}
	
}

</script>
	
	
    </div>
  </div></div>
  <?php 
include 'web_foot.php';
?>
<?
}else{
?>

<?php 
session_start();
header("Content-type: text/html; charset=utf-8");
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
<title>相册常见问题</title>
<style type="text/css">
	*
	{
        padding: 0px;
        margin: 0px;
        -webkit-box-sizing: border-box;
	}

    body
    {
        background-color: white;
    }
    #container
    {
    	width: 500px;	
    }
    #top
    {
    	width: 500px;
    	background-color: #44B549;
    	height: 60px;
    	line-height: 60px;
    	font-size: 30px;
    	color: #fff;
    	text-align: center;
    	font-weight: normal;
    }
    .right
    {
    	float: left;
	    width: 20px;
	    height: 20px;
	    border-top: 10px solid transparent;
	    border-left: 20px solid #3E3E3E;
	    border-bottom: 10px solid transparent;
	    margin: 10px;

    }
    .down
    {
    	float: left;
	    width: 20px;
	    height: 20px;
	    border-left: 10px solid transparent;
	    border-right: 10px solid transparent;
	    border-top: 20px solid #3E3E3E;
	    margin: 10px;
    }
    .question
    {
    	width: 500px;
    	/*padding-left: 10px;*/

    }
    .q_text
    {
    	width: 500px;
    	position: relative;
    	left: 0px;
    	top: 0px;
    	font-size: 23px;
    	line-height: 50px;
    	color: #006666;
    	background-color: #F4F5F9;
    	padding-left: 10px;
    }
    .q_text1
    {
    	width: 500px;
    	position: relative;
    	left: 0px;
    	top: 0px;
    	font-size: 23px;
    	line-height: 50px;
    	background-color:#E0EAF6;
    	color: #459AE9;
    	padding-left: 10px;
    }
    .answer
    {
    	width: 500px;
    	position: relative;
    	padding: 10px 10px 0px 10px;
    	line-height: 35px;
    	font-size: 22px;
    }
</style>

<div id='container'>
	<div id='top' style="text-align:center">
		相册常见问题<b style='font-size:17px;font-weight:normal;position:absolute'>(点击问题查看答案)</b>
	</div>
	<div id='q1' class='question' style='margin-top: 3px;' onclick='show(1)'>
		<div id='qu1' class='q_text'>1. 如何制作相册？</div>
		<div id='a1' class='answer' style='display:none'>点击下方 “音乐相册(或开始制作)” -> "新建相册"，选择图片上传后，点击“已收到X张图片，点这里开始制作”即自动生成。</div>
	</div>
	<div id='q2' class='question' style='margin-top: 3px;' onclick='show(2)'>
		<div id='qu2' class='q_text'>2. 如何查看或修改以前制作的相册？</div>
		<div id='a2' class='answer' style='display:none'>点击下方 “音乐相册(或开始制作)” => "我的相册"，打开<img src='http://t1.qpic.cn/mblogpic/6a0b79d55ece8c401fe4/460' style='width:200px;'>即可看到所有相册，点击 “编辑” 即可对相册进行修改。</div>
	</div>
	<div id='q3' class='question' style='margin-top: 3px;' onclick='show(3)'>
		<div id='qu3' class='q_text'>3. 相册的安全性和保密性</div>
		<div id='a3' class='answer' style='display:none'>相册都经过安全和保密处理，除非您将相册主动分享出去，否则别人是看不到的。</div>
	</div>
	<div id='q4' class='question' style='margin-top: 3px;' onclick='show(4)'>
		<div id='qu4' class='q_text'>4. 相册是否收费?</div>
		<div id='a4' class='answer' style='display:none'>相册是完全免费的，请放心使用。</div>
	</div>
	<div id='q5' class='question' style='margin-top: 3px;' onclick='show(5)'>
		<div id='qu5' class='q_text'>5. 是否只能上传9张图片？</div>
		<div id='a5' class='answer' style='display:none'>由于微信一次性只能发9张图片，如需继续上传，点击“音乐相册(或开始制作)”->“增加图片”，即可继续添加。建议上传图片数目不要过多，否则加载会打开会比较慢，可分成多个相册制作。</div>
	</div>
	<div id='q6' class='question' style='margin-top: 3px;' onclick='show(6)'>
		<div id='qu6' class='q_text'>6. 如何修改音乐？</div>
		<div id='a6' class='answer' style='display:none'>打开相册，点击下方的“选音乐”，找到喜欢的音乐，并点击右方的“确定”,如：<img src='http://t1.qpic.cn/mblogpic/8543e977b8b6f41f40e0/2000'>也可以点击“搜索”<img src='http://t1.qpic.cn/mblogpic/13fe4abdf84eb263ca08/2000'>快速找到歌曲，由于音乐库在不断更新，有的歌曲暂时搜索不到，我们会及时更新。</div>
	</div>
	<div id='q7' class='question' style='margin-top: 3px;' onclick='show(7)'>
		<div id='qu7' class='q_text'>7. 如何修改图片？</div>
		<div id='a7' class='answer' style='display:none'>打开相册，点击下方的“增删图”，即可删除图片。<img src='http://t1.qpic.cn/mblogpic/dfda43d4520d4b5a26da/2000'></div>
	</div>
	<div id='q8' class='question' style='margin-top: 3px;' onclick='show(8)'>
		<div id='qu8' class='q_text'>8. 如何添加文字？</div>
		<div id='a8' class='answer' style='display:none'>目前只支持修改相册的标题，方法如下：<br>打开相册，点击下方的“改标题”，即可输入文字。</div>
	</div>
	<div id='q9' class='question' style='margin-top: 3px;' onclick='show(9)'>
		<div id='qu9' class='q_text'>9. 相册能制作多少个？保存多久？</div>
		<div id='a9' class='answer' style='display:none'>相册的数目不限数量，如要制作新的相册，点击“新建相册”。<br>对于已经制作的相册，正常情况下，如果您不删除的话，相册将会永久保存。</div>
	</div>
	<div id='q10' class='question' style='margin-top: 3px;' onclick='show(10)'>
		<div id='qu10' class='q_text'>10. 相册过多是否会占用内存？</div>
		<div id='a10' class='answer' style='display:none'>所有相册都保存在我们的服务器中，不会占用您任何的存储空间的，如果您删除了已经分享的相册，那些已经分享出去的相册也会被删除掉。</div>
	</div>
	<div id='q11' class='question' style='margin-top: 3px;' onclick='show(11)'>
		<div id='qu11' class='q_text'>11. 相册打不开，没有音乐或不出照片？</div>
		<div id='a11' class='answer' style='display:none'>浏览相册时，请确保在网络通畅的情况下。如仍有问题，添加微信号kong2698q,并将有问题的相册转发给我们，我们会为您查看问题并及时解决。</div>
	</div>
	<div id='q12' class='question' style='margin-top: 3px;' onclick='show(12)'>
		<div id='qu12' class='q_text'>12. 相册的播放次序问题</div>
		<div id='a12' class='answer' style='display:none'>除了3d类型的模板，绝大部分的模板都是按照顺序播放的。</div>
	</div>

	
</div>
<script>
function init_viewport()
{
    if(/Android (\d+\.\d+)/.test(navigator.userAgent))
    {
        var version = parseFloat(RegExp.$1);

        if(version>2.3)
        {
            var phoneScale = parseInt(window.screen.width)/500;
            document.write('<meta name="viewport" content="width=500, minimum-scale = '+ phoneScale +', maximum-scale = '+ phoneScale +', target-densitydpi=device-dpi">');
        }
        else
        {
            document.write('<meta name="viewport" content="width=500, target-densitydpi=device-dpi">');    
        }
    }
    else if(navigator.userAgent.indexOf('iPhone') != -1)
    {
        var phoneScale = parseInt(window.screen.width)/500;
        document.write('<meta name="viewport" content="width=500, height=750,initial-scale=' + phoneScale +', user-scalable=no" /> ');         //0.75   0.82
    }
    else 
    {
        document.write('<meta name="viewport" content="width=500, height=750,initial-scale=0.64" /> ');         //0.75   0.82

    }
}

init_viewport();


function show (index) 
{

	var obj = document.getElementById('a'+index);
	if(obj.style.display == 'block')
	{
		obj.style.display = 'none';
		var qu = document.getElementById('qu'+index);
		qu.className = 'q_text';
		return;
	}

	var as = document.getElementsByClassName('answer');
	var q = document.getElementsByClassName('q_text1');
	for(var i = 0; i<q.length; i++)
	{
		q[i].className = 'q_text';
	}
	for(var i = 0; i<as.length;i++)
	{
		as[i].style.display = 'none';
	}
	if(obj.style.display == 'none')
	{
		var qu = document.getElementById('qu'+index);
		qu.className = 'q_text1';
		obj.style.display = 'block';
	}
	else
	{
		var qu = document.getElementById('qu'+index);
		qu.className = 'q_text';
		obj.style.display = 'none';
	}
	
}

</script>
</embedcode>

<?
}
?>