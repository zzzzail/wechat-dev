<?php
header("Content-type: text/html; charset=utf-8"); 
define('NOROBOT', TRUE);
require_once '../../include/common.inc.php';
require_once '../session.php';

if($action=="list"){

$html="<style>*{ margin:0; padding:0;}
body { font:12px/1.5 Arial; color:#666; background:#EDEDED;}
ul,li{ list-style:none;}
a{ color:#666; text-decoration:none;}
a:hover{ text-decoration:none; color:#000;}
img{border:0 none;}

#waterfall{ text-align:center; width:1000px; margin:0 auto;}
#waterfall img{ width:203px;}
#waterfall .cell{ padding:10px 0px 5px 0px; width:223px;border:1px solid #E3E3E3; background:#fff; margin-top:20px;box-shadow: 0px 2px 3px 1px #ccc;}
#waterfall .cell:hover{box-shadow: 0px 2px 3px 1px #999;}
</style>";

			if($openid){
				$addsql=" and openid='$openid'";
			}
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
			$html="";
			while($rs=$db->fetch_array($query)){
				if(strstr($rs["fpic"],"http://"))
				{
					$f=$rs["fpic"];
				}else{
				 $f="../".$rs["fpic"];
				}

			
$html.='<div class="cell" id=t'.$rs["tid"].' >';
$html.='<img src='.$f.' ><p onclick="return dell('.$rs["tid"].')"  style="cursor:pointer" >删除</p></div>';
			
			
			
			
			
	
			}
			
echo $html;
exit;
}


if($action=="dell"){

			$query = $db->query("select * from {$tablepre}app_list where tid=$tid");
			while($rsss=$db->fetch_array($query)){
				if($rsss["fpic"]){
					if(strstr($rsss["fpic"],"http://"))
					{
					$f=$rsss["fpic"];
					////删除七牛图片
					if($rs["ishttp"]==2){
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
						 $f="../".$rsss["fpic"];
					     unlink($f);
					}
				}
				$db->query("delete from {$tablepre}app_list  where  tid=$rsss[tid]");
			}
			echo '{"state":1}';
			exit;

}


$db->close();
?>