<?php 
session_start();
header("Content-type: text/html; charset=utf-8");
require_once '../include/common.inc.php';
if(!$weite_uid){
	echo '{"state":0}';
	exit;
}
$rss= $db->fetch_first("select * from {$tablepre}gongzhonghao  where tid=$weite_uid  limit 1");
if(!$rss){
	echo '{"state":0}';
	exit;
}
$sn=$rss["sn"];
$gh_qiniu=$rss["qiniu"];
$qarr=json_decode($gh_qiniu,true);

if($action=="login_out"){
	dsetcookie('iweite');
	$iweite_uid = 0;
	$iweite_pw=$iweite_secques='';
	echo '{"state":1}';
	exit;
}	

if($action=="dell_music"){
	$rss= $db->fetch_first("select * from {$tablepre}openid_music  where tid=$tid  and gh='$sn' limit 1");
	if(!$rss){
			echo '{"state":0}';
			exit;
	}
	$db->query("delete from {$tablepre}openid_music  where  tid=$rss[tid] and gh='$sn'");	
	echo '{"state":1}';
	exit;	
}

if($action=="dell"){

			if(!$tid){
				echo '{"state":0}';
				exit;
			}

			$rss= $db->fetch_first("select * from {$tablepre}app  where tid=$tid  and gh='$sn' limit 1");
			if(!$rss){
				echo '{"state":0}';
				exit;
			}

			$query = $db->query("select * from {$tablepre}app_list where tid=$rss[tid] and gh='$sn' ");
			while($rsss=$db->fetch_array($query)){
				if($rsss["fpic"]){
					if(strstr($rsss["fpic"],"http://"))
					{
					$f=$rsss["fpic"];
					////删除七牛图片
					if($rsss["ishttp"]==2){
					require_once("../include/qiniu/rs.php");
					$qz="http://".$_WEITE['qiniu_weburl']."/";
					$file_name=str_replace($qz,'',$f);
					$bucket = $_WEITE['qiniu_fdir'];
					$key1 = $file_name;
					$accessKey = $_WEITE['qiniu_access'];
					$secretKey = $_WEITE['qiniu_secret'];
					Qiniu_SetKeys($accessKey, $secretKey);
					$client = new Qiniu_MacHttpClient(null);
					$err = Qiniu_RS_Delete($client, $bucket, $key1);
					}elseif($rsss["ishttp"]==1){
					
					require_once("../include/qiniu/rs.php");
					$qz="http://".$qarr['host']."/";
					$file_name=str_replace($qz,'',$f);
					$bucket = $qarr['qdir'];
					$key1 = $file_name;
					$accessKey = $qarr['qacc'];
					$secretKey = $qarr['qkey'];
					Qiniu_SetKeys($accessKey, $secretKey);
					$client = new Qiniu_MacHttpClient(null);
					$err = Qiniu_RS_Delete($client, $bucket, $key1);
					
					
					
					}
					
					}else{
						 $f=$rsss["fpic"];
					     unlink($f);
					}
				}
				$db->query("delete from {$tablepre}app_list  where  tid=$rsss[tid] and gh='$sn'");
			}
			$db->query("delete from {$tablepre}app where tid=$tid and gh='$sn'");
			echo '{"state":1}';
			exit;
}


if($action=="dell_user"){


			if(!$tid){
				echo '{"state":0}';
				exit;
			}

			$rss= $db->fetch_first("select * from {$tablepre}openid  where tid=$tid  and gh='$sn' limit 1");
			if(!$rss){
				echo '{"state":0}';
				exit;
			}
			$openid=$rss["openid"];

			$db->query("delete from {$tablepre}app where openid='$openid' and gh='$sn'");
			$db->query("delete from {$tablepre}openid_music where gh='$sn'");
			
			$db->query("delete from {$tablepre}openid where openid='$openid'  and gh='$sn'");
			$query = $db->query("select * from {$tablepre}app_list where openid='$openid'  and gh='$sn'");
			while($rsss=$db->fetch_array($query)){
				if($rsss["fpic"]){
					if(strstr($rsss["fpic"],"http://"))
					{
					$f=$rsss["fpic"];
					////删除七牛图片
					
					if($rsss["ishttp"]==2){
					require_once("../include/qiniu/rs.php");
					$qz="http://".$_WEITE['qiniu_weburl']."/";
					$file_name=str_replace($qz,'',$f);
					$bucket = $_WEITE['qiniu_fdir'];
					$key1 = $file_name;
					$accessKey = $_WEITE['qiniu_access'];
					$secretKey = $_WEITE['qiniu_secret'];
					Qiniu_SetKeys($accessKey, $secretKey);
					$client = new Qiniu_MacHttpClient(null);
					$err = Qiniu_RS_Delete($client, $bucket, $key1);
					}elseif($rsss["ishttp"]==1){
					
					require_once("../include/qiniu/rs.php");
					$qz="http://".$qarr['host']."/";
					$file_name=str_replace($qz,'',$f);
					$bucket = $qarr['qdir'];
					$key1 = $file_name;
					$accessKey = $qarr['qacc'];
					$secretKey = $qarr['qkey'];
					Qiniu_SetKeys($accessKey, $secretKey);
					$client = new Qiniu_MacHttpClient(null);
					$err = Qiniu_RS_Delete($client, $bucket, $key1);
					
					}
					
					
					
					
					
					}else{
						 $f=$rsss["fpic"];
					     unlink($f);
					}
	
				}
				$db->query("delete from {$tablepre}app_list  where  tid=$rsss[tid] and gh='$sn'");
			}
	
			echo '{"state":1}';
			exit;
}



if($action=="pic_dell"){

			if(!$tid){
				echo '{"state":0}';
				exit;
			}

			$rss= $db->fetch_first("select * from {$tablepre}app_list  where tid=$tid  and gh='$sn' limit 1");
			if(!$rss){
				echo '{"state":0}';
				exit;
			}


			$query = $db->query("select * from {$tablepre}app_list where tid=$tid  and gh='$sn' ");
			while($rsss=$db->fetch_array($query)){
				if($rsss["fpic"]){
					if(strstr($rsss["fpic"],"http://"))
					{
					$f=$rsss["fpic"];
					////删除七牛图片
					
					if($rsss["ishttp"]==2){
					require_once("../include/qiniu/rs.php");
					$qz="http://".$_WEITE['qiniu_weburl']."/";
					$file_name=str_replace($qz,'',$f);
					$bucket = $_WEITE['qiniu_fdir'];
					$key1 = $file_name;
					$accessKey = $_WEITE['qiniu_access'];
					$secretKey = $_WEITE['qiniu_secret'];
					Qiniu_SetKeys($accessKey, $secretKey);
					$client = new Qiniu_MacHttpClient(null);
					$err = Qiniu_RS_Delete($client, $bucket, $key1);
					}elseif($rsss["ishttp"]==1){
					
					require_once("../include/qiniu/rs.php");
					$qz="http://".$qarr['host']."/";
					$file_name=str_replace($qz,'',$f);
					$bucket = $qarr['qdir'];
					$key1 = $file_name;
					$accessKey = $qarr['qacc'];
					$secretKey = $qarr['qkey'];
					Qiniu_SetKeys($accessKey, $secretKey);
					$client = new Qiniu_MacHttpClient(null);
					$err = Qiniu_RS_Delete($client, $bucket, $key1);
					
					}
					
					
					}else{
						 $f=$rsss["fpic"];
					     unlink($f);
					}
				}
				$db->query("delete from {$tablepre}app_list  where  tid=$rsss[tid]  and gh='$sn' ");
			}
			echo '{"state":1}';
			exit;
}


if($action=="pic_list"){

			$html="<style>
			ul,li{ list-style:none;}
			img{border:0 none;}
			#waterfall{ text-align:center; width:1200px; margin:0 auto;}
			#waterfall img{ width:143px;}
			#waterfall .cell{ padding:10px 0px 5px 0px; width:163px;border:1px solid #E3E3E3; background:#fff; margin-top:20px;box-shadow: 0px 2px 3px 1px #ccc;}
			#waterfall .cell:hover{box-shadow: 0px 2px 3px 1px #999;}
			#waterfall .cell p{ font-size:12px}
			.delbtn{font-size: 12px;display:block;height: 20px;line-height: 20px;border: 1px solid #20c7a2;color: #ffffff;background-color: #20c7a2;border-radius: 4px; width:38px; margin-top:18px}
.delbtn:hover{ color:#FFFFFF; background:#FF6600; border:1px solid #FF6600}
			</style>";

			
			$addsql=" and gh='$sn'";
		
			
			$pagesize=20;
			$page=intval($page)+1;
			if($page<=0 && !$page)
			{
				$page=1;
			}
			$offset=($page-1)*$pagesize;
			if($offset<0)
			{
				$offset=0;
			}
			
			$query = $db->query("select tid from {$tablepre}app_list where tid>0 $addsql");
			$total= $db->num_rows($query);
			$pagenum=ceil($total/$pagesize);
			$query = $db->query("select * from {$tablepre}app_list where tid>0  $addsql order by tid desc limit $offset,$pagesize");
			
			while($rs=$db->fetch_array($query)){
				if(strstr($rs["fpic"],"http://"))
				{
					$f=$rs["fpic"];
				}else{
				 $f=$rs["fpic"];
				}
			
$html.='<div class="cell" id=t'.$rs["tid"].' >';
$html.='<img src='.$f.' ><p onclick="return dell('.$rs["tid"].')"  style="cursor:pointer; text-align:center; margin-left:40px; margin-top:5px; padding:0px 15px;font-size: 12px;display:block;height: 20px;line-height: 20px;border: 1px solid #20c7a2;color: #ffffff;background-color: #20c7a2;border-radius: 4px; width:38px; margin-top:18px">删除</p></div>';
			
			}
		$db->free_result($query);
$db->close();	
echo $html;
exit;

}

$db->free_result($query);
$db->close();
?>
