<?php 
session_start();
header("Content-type: text/html; charset=utf-8");
require_once '../include/common.inc.php';

				$openid=daddslashes($openid);
				if(!$openid){
					echo "0";
					exit;
				}
				
				$o= $db->fetch_first("select * from {$tablepre}openid where openid='$openid' order by tid desc limit 1");
				if(!$o){
					echo "0";
					exit;
				}
				$openid=$o["openid"];

				
				$sn=daddslashes($sn);
				if(!$sn){
					echo "相册不存在";
					exit;
				}
				
				$g= $db->fetch_first("select * from {$tablepre}gongzhonghao where sn='$sn' and isok=1 order by tid desc limit 1");
				if(!$g){
					echo "公众号不存在";
					exit;
				}
				
				$sn=$g["sn"];
				$gh=$g["gh"];
				$guanzhu_url=$g["furl"];
				$g_appid=$g["appid"];
				$g_appsecret=$g["appsecret"];




			$pagesize=3;
			$page=intval($page);
			if($page<=0 && !$page)
			{
				$page=1;
			}
			$offset=($page-1)*$pagesize;
			if($offset<0)
			{
				$offset=0;
			}
			$h="";
			$query = $db->query("select * from {$tablepre}app where openid='$openid' and gh='$sn'");
			$total= $db->num_rows($query);
			$pagenum=ceil($total/$pagesize);
			$url="news.php";
			$kmulti = multi($total,$pagesize, $page, $url, $idd);
			$query = $db->query("select * from {$tablepre}app where openid='$openid' and gh='$sn' order by tid desc limit $offset,$pagesize");
			while($rs=$db->fetch_array($query)){
			
			
			if($_WEITE['web_return_url']){
			
			$url=$_WEITE['web_return_url']."share.php?sn=$rs[sn]&gh=$rs[gh]";
			
			
			}else{
			
			$url=$_WEITE['web_weburl']."html.php?sn=$rs[sn]&gh=$rs[gh]";
			
			}
			
			
			
	$h.="<div class='item' id=".$rs["tid"].">";
	$h.="<div class='item-pic' onClick=\"location.href='".$url."'\" style=\"background-image:url(".$rs["fpic"].")\"></div>";
	$h.="<div class=\"item-pv\">浏览次数：".$rs["views"]."&nbsp;&nbsp;转发分享：".$rs["shares"]."</div>";
	$h.="<div class=\"item-edit\" onClick=\"location.href='app.php?sn=".$sn."&openid=".$openid."&tid=".$rs["tid"]."';\">编辑</div>";
	$h.="<div class=\"item-del\" onClick=\"del_book('".$rs["tid"]."')\">删除</div>";
	$h.=" </div>";
	$h.="</div>";
		}
		
echo $h;
$db->free_result($query);
$db->close();
?>