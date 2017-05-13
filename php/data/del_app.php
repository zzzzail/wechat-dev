<?php 
session_start();
header("Content-type: text/html; charset=utf-8");
require_once '../include/common.inc.php';
$openid=daddslashes($openid);
if(!$openid){
	echo "0";
	exit;
}
if(!$tid){
	echo "0";
	exit;
}
$o= $db->fetch_first("select * from {$tablepre}openid where openid='$openid' order by tid desc limit 1");
if(!$o){
	echo "0";
	exit;
}
$openid=$o["openid"];

$rss=$db->fetch_first("select * from {$tablepre}app where  tid=$tid and openid='$openid'  order by tid asc limit 1");
if(!$rss){
	echo "0";
	exit;
}
$db->query("delete from {$tablepre}app  where tid=$rss[tid] and openid='$openid'  limit 1");
		
			$query = $db->query("select * from {$tablepre}app_list  where fid=$rss[tid]");
			while($rsss=$db->fetch_array($query)){
				if($rsss["fpic"]){
					if(strstr($rsss["fpic"],"http://"))
					{
					$f=$rsss["fpic"];
					////É¾³ýÆßÅ£Í¼Æ¬
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
						}
					}else{
						 $f=$rsss["fpic"];
					     unlink($f);
					}
	
				}
				$db->query("delete from {$tablepre}app_list  where  tid=$rsss[tid]");
			}



echo "1";
$db->free_result($query);
$db->close();
?>
