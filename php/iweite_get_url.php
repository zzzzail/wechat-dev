<?php 
session_start();
header("Content-type: text/html; charset=utf-8");
require_once 'include/common.inc.php';
if(!$url) exit('');
if(strstr($url,"http://ws.stream.qqmusic.qq.com/")){
$base = basename($url);
$base_arr=explode(".",$base);
$xml_name=$base_arr[0];
$xml_yu=$xml_name%100;

$xml_string = file_get_contents("http://music.qq.com/miniportal/static/lyric/".$xml_yu."/".$xml_name.".xml");
$x = trim($xml_string);
$x =simplexml_load_string($x);

		$xxx=explode("[offset:0]",$x); 
		$xxx=trim($xxx[1]);
		$xxx = preg_replace("/\t/","",$xxx);
		echo  $xxx; 
	
}else{
 	echo "";
}
?>