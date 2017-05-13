<?php 
session_start();
header("Content-type: text/html; charset=utf-8");
require_once '../include/common.inc.php';
//var url	= "data/music_api.php?";
//url	= url + 'type=' + e_music_type;
//url	= url + "&start=" + e_music_page;
// url	= url + "&count=" + e_music_num;
////
//http://music.qq.com/musicbox/shop/v3/data/hit/hit_all.js
//http://music.qq.com/musicbox/shop/v3/data/hit/hit_newsong.js
//http://music.qq.com/musicbox/shop/v3/data/random/1/random1.js
$type= intval(isset($type)) && is_numeric($type) ? intval($type) : 0;
$is_openid_music= intval(isset($is_openid_music)) && is_numeric($is_openid_music) ? intval($is_openid_music) : 0;

if(!$music){

	if($is_openid_music){
		
		$rss=$db->fetch_first("select * from {$tablepre}openid_music where  tid=$type   order by tid asc limit 1");
		$w=$rss["fdes"];
		if(!$w){
			$w=$rss["title"];
		}
	
	}else{
		$rss=$db->fetch_first("select * from {$tablepre}music_class where  tid=$type   order by tid asc limit 1");
		$w=$rss["fdes"];
		if(!$w){
			$w=$rss["title"];
		}
	}
	
	if(!$start){
	$e_music_page=2;
	}else{
	$e_music_page=$start+1;
	}
	
$url="https://auth-external.music.qq.com/open/fcgi-bin/fcg_weixin_music_search.fcg?remoteplace=txt.weixin.officialaccount&w=$w&platform=weixin&jsonCallback=MusicJsonCallback&perpage=10&curpage=$e_music_page";

$json = file_get_contents($url);
if (empty($json)){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt ($ch, CURLOPT_URL, $TOKEN_URL);
		curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
		$json = curl_exec($ch);
		curl_close($ch);
}
$x=str_replace("MusicJsonCallback(",'',$json);
$x=substr($x,0,strlen($x)-1);
$obj=json_decode($x, true); 
if($obj["curnum"]){

//{ "albumname" : "轻音乐特选系列-悠悠四季", "downUrl" : "http://stream10.qqmusic.qq.com/30579807.mp3", "f" : "579807|沉睡的精灵|9091|纯音乐|49142|轻音乐特选系列-悠悠四季|2017655|248|10|1|3|0|3984866|0|0|0|0|0|0|0|000i7DPI4JwmZS|0049g5XN3DYLV9|000Y19vH0rDWkk", "id" : 579807, "m4a" : "http://ws.stream.qqmusic.qq.com/579807.m4a?fromtag=46", "ring" : 0, "singername" : "纯音乐 - 轻音乐特选系列-悠悠四季", "songname" : "沉睡的精灵", "t" : 1 },

	for($i=0;$i<=20;$i++){
				if($obj["list"][$i]["m4a"]){
						$v=$obj["list"][$i]["f"];
						$vv=explode("|",$v);
						$songname=$obj["list"][$i]["songname"];
						$id=$obj["list"][$i]["id"];
						$songname=$vv[3]."-".$vv[1];
						
						$mp4=addslashes($obj["list"][$i]["m4a"]);
						$h.='{"musicname":"'.$id.'","title":"'.$songname.'","url":"'.$mp4.'"},';
				}
	}
}
if($h){
$h = substr($h,0,strlen($h)-1); 
}
$html="[".$h."]";
echo $html;
exit;

}else{

$url="https://auth-external.music.qq.com/open/fcgi-bin/fcg_weixin_music_search.fcg?remoteplace=txt.weixin.officialaccount&w=$music&platform=weixin&jsonCallback=MusicJsonCallback&perpage=20&curpage=1";

$json = file_get_contents($url);
if (empty($json)){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt ($ch, CURLOPT_URL, $TOKEN_URL);
		curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
		$json = curl_exec($ch);
		curl_close($ch);
}
$x=str_replace("MusicJsonCallback(",'',$json);
$x=substr($x,0,strlen($x)-1);
$obj=json_decode($x, true); 
if($obj["curnum"]){

for($i=0;$i<=20;$i++){
				if($obj["list"][$i]["m4a"]){
						$v=$obj["list"][$i]["f"];
						$vv=explode("|",$v);
						$songname=$obj["list"][$i]["songname"];
						$songname=$vv[3]."-".$vv[1];
						
						$id=$obj["list"][$i]["id"];
						$mp4=addslashes($obj["list"][$i]["m4a"]);
						$h.='{"musicname":"'.$id.'","title":"'.$songname.'","stock":"0","url":"'.$mp4.'"},';
				}
	}
}
if($h){
$h = substr($h,0,strlen($h)-1); 
}
$html="[".$h."]";
echo $html;

}
$db->free_result($query);
$db->close();
?>
