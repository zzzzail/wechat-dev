<?php 
session_start();
header("Content-type: text/html; charset=utf-8");
require_once '../include/common.inc.php';
	
	$cookietime="3600*24*30";
	
	$string= file_get_contents('php://input');
	$obj=json_decode($string); 
	$action=$obj->action;
	$openid=$obj->openid; 
	
	if(!$openid)  exit('{"errcode":"1","errmsg":"参数错误"}');
	
	$sn=daddslashes($sn);
	if(!$sn) exit('{"errcode":"1","errmsg":"参数错误"}');
	
	$rss= $db->fetch_first("select * from {$tablepre}gongzhonghao where sn='$sn' order by tid desc limit 1");
	if(!$rss){
	 	exit('{"errcode":"1","errmsg":"参数错误"}');
	}
	
	////获取用户信息
	$gh=$rss["sn"];
	$gh_frist=$rss["frist"];
	//$gh_id=$rss["sn"];
	$gh_qiniu=$rss["qiniu"];
	$qarr=json_decode($gh_qiniu,true);
	if(time()<=$rss["overdateline"] && time()>=$rss["startdateline"]){
	}else{
		exit('{"errcode":"1","errmsg":"帐户过期"}');
	}
	
	dsetcookie("openid",$openid,$cookietime, 1, true);
	
	$o= $db->fetch_first("select * from {$tablepre}openid where openid='$openid' order by tid desc limit 1");
	if(!$o){
		$nickname="匿名";
		$headimgurl=$_WEITE['web_weburl']."assets/images/logo.jpg";
		$db->query("insert into {$tablepre}openid(openid,dateline,username,face,gh) value ('$openid','$timestamp','$nickname','$headimgurl','$gh')");
	}else{
		if($action=="f" || $action=="iweite_f"){
		}else{
			if($o["isok"]){
				echo '{"errcode":"1","errmsg":"您的上传图片总数已经达到上限,请更换微信号"}';
				exit;
			}
		}
	}
			

if($action=="getcookie"){	
	
	if(!$appid){
	$appid=0;
	}
	echo '{"errcode":"0","appid":"'.$appid.'"}';
	exit;
}


//关注
if($action=="subscribe"){

		$o= $db->fetch_first("select * from {$tablepre}openid where openid='$openid' order by tid desc limit 1");
		if(!$o){
			$nickname="匿名";
		$headimgurl=$_WEITE['web_weburl']."assets/images/logo.jpg";
			$db->query("insert into {$tablepre}openid(openid,dateline,username,face,gh) value ('$openid','$timestamp','$nickname','$headimgurl','$gh')");
		}
		
	if($gh_frist){
		$msg=$gh_frist;
	}else{
		$msg="\ue307想制作音乐相册吗?\ue305[1]发送字母N开始制作\ue305[2]发送字母F可以查看您的音乐相册";
	}
	
	
	echo '{"errcode":"0","errmsg":"'.$msg.'"}';
	exit;
}

///取消关注
if($action=="unsubscribe"){
	$db->query("update {$tablepre}openid set subscribe=0 where openid='$openid'");
	///删除制作的所有的卡片
	if($_WEITE['web_isgz']){
		$db->query("delete from {$tablepre}app where openid='$openid'");
		$query = $db->query("select * from {$tablepre}app_list where openid='$openid'");
		while($rsss=$db->fetch_array($query)){
				if($rsss["fpic"]){
					if(strstr($rsss["fpic"],"http://"))
					{
					$f=$rsss["fpic"];
					////删除七牛图片
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
					}else{
						 $f="../".$rsss["fpic"];
					     unlink($f);
					}
				}
				$db->query("delete from {$tablepre}app_list  where  tid=$rsss[tid]");
		}
	}
	exit;
}


//下拉菜单
if($action=="iweite_add"){
	
}
//下拉菜单
if($action=="iweite_n"){
	////获取基本的模版设置
	$db->query("update {$tablepre}app  set  isok=0 where openid='$openid'");
	$rss= $db->fetch_first("select * from {$tablepre}template where  isok=1 order by tid desc limit 1");
	$sn = uniqid();
	$sql="insert into {$tablepre}app (title,fdes,openid,dateline,isok,template,music,sn,gh) value ('音乐相册','音乐相册,打开看看','$openid','$timestamp',1,'$rss[fdir]','$rss[music]','$sn','$gh')";
	$query = $db->query($sql);
	$tid=$db->insert_id($query); 
	dsetcookie("appid",$tid,$cookietime,1,true);
	
	
	$msg="\ue032相册创建成功,点这里开始制作";
	echo '{"errcode":"0","errmsg":"'.$msg.'"}';
	exit;

}

///我的相册
if($action=="iweite_f"){
	$o= $db->fetch_first("select * from {$tablepre}openid where openid='$openid' order by tid desc limit 1");
	$uid=$o["tid"];
	$info=array();
	$title="我的相册";
	$fdes="我的相册";
	$fpic=$_WEITE['web_weburl']."assets/images/f.jpg";
	$url=$_WEITE['web_weburl']."myapp.php?sn=".$gh."&isfrom=wx&openid=".$o["openid"];
	$info[$i]["title"]=$title;
	$info[$i]["fdes"]=$fdes;
	$info[$i]["url"]=$url;
	$info[$i]["fpic"]=$fpic;
	echo'{"errcode":"0","list":"'.base64_encode(serialize($info)).'"}';
	exit;
}

///初始话场景
if($action=="n"){
	$db->query("update {$tablepre}app  set  isok=0 where openid='$openid'");

	$rss= $db->fetch_first("select * from {$tablepre}template where  isok=1 order by tid desc limit 1");
	$sn = uniqid();
	$sql="insert into {$tablepre}app (title,fdes,openid,dateline,isok,template,music,sn,gh) value ('音乐相册','音乐相册,打开看看','$openid','$timestamp',1,'$rss[fdir]','$rss[music]','$sn','$gh')";
	$query = $db->query($sql);
	$tid=$db->insert_id($query); 
	dsetcookie("appid",$tid,$cookietime, 1, true);
	
	$msg="\ue032创建成功,开始添加图片,点右下角+选择图片就可以了";
	
	iweitelog($msg);
	echo '{"errcode":"0","errmsg":"'.$msg.'"}';
	exit;
	
}

///结束制作
if($action=="s"){
$rss= $db->fetch_first("select * from {$tablepre}app where  openid='$openid' and isok=0 order by tid desc limit 1");


	if($rss){
		$fid=$rss["tid"];
		$rs=$db->fetch_first("select fpic from {$tablepre}app_list where  fid=$fid  order by tid asc limit 1");
		if($rs){
			$fpic=$rs["fpic"];
		}else{
			$fpic="assets/images/logo.jpg";
		}
		$db->query("update {$tablepre}app set fpic='$fpic',template='yuandan' where tid=$fid");
		
		$msg="\ue305制作完毕,点此查看效果";
		echo '{"errcode":"0","errmsg":"'.$msg.'","errtid":"'.$fid.'"}';
		
		exit;
		
	}else{
		echo '{"errcode":"0","errmsg":"请输入字母N重新开始."}';
		exit;
	}
	
}

if($action=="f"){

	$info=array();
	$sql="select * from {$tablepre}app where openid='$openid'  order by tid desc limit 7 ";
	$query=$db->query($sql);
	
	$num=$db->num_rows($query);
	if($num){
	
			$fpic=$_WEITE['web_weburl']."assets/images/f.jpg";
			$url=$_WEITE['web_weburl']."myapp.php?sn=".$gh."&isfrom=wx&openid=".$o["openid"];
			$info[0]["title"]="我的相册";
			$info[0]["fdes"]="我的相册";
			$info[0]["url"]=$url;
			$info[0]["fpic"]=$fpic;
	
		$i=1;
		while($rs=$db->fetch_array($query)){
			$title=$rs["title"];
			$fdes="用力点我查看...";
			
			if($rs["fpic"]){
				if(strstr($rs["fpic"],"http://"))
				{
				$fpic=$rs["fpic"];
				}else{
				$fpic=$_WEITE['web_weburl'].$rs["fpic"];
				}
			}else{
				$fpic=$_WEITE['web_weburl']."images/temp/none.png";
			}
			
			
			$url=$_WEITE['web_weburl']."app.php?sn=".$gh."&isfrom=wx&openid=".$openid."&tid=".$rs["tid"];
			$info[$i]["title"]=$title;
			$info[$i]["fdes"]=$fdes;
			$info[$i]["url"]=$url;
			$info[$i]["fpic"]=$fpic;
			$i++;
		}
		
		
		
		echo'{"errcode":"0","list":"'.base64_encode(serialize($info)).'"}';
		exit;
	}else{
		echo'{"errcode":"1","errmsg":"您还没有制作自己的相册哦,输入N开始制作吧"}';
		exit;
	}

}

if($action=="image"){
//$appid=$_DCOOKIE['appid'];
	
	$mid=$obj->mid; 
	$url=$obj->picurl;
	
	
	$rsss=$db->fetch_first("select tid from {$tablepre}app_list where  mid='$mid'  order by tid desc limit 1");
	if(!$rsss){
	
	$rss= $db->fetch_first("select tid,fpic from {$tablepre}app where isok=1 and openid='$openid' order by tid desc");
	if(!$rss){
		$rss= $db->fetch_first("select tid,fpic from {$tablepre}app where openid='$openid' order by tid desc");
	}
	
	if($rss){
		$fid=$rss["tid"];
		$fengmian=$rss["fpic"];
		$isfengmian=1;
	}else{
		///设置下兼容
		$db->query("update {$tablepre}app  set  isok=0 where openid='$openid'");
		$rss= $db->fetch_first("select * from {$tablepre}template where  isok=1 order by tid desc limit 1");
		$sn = uniqid();
		$sql="insert into {$tablepre}app (title,fdes,openid,dateline,isok,template,music,sn,gh) value ('音乐相册','音乐相册,打开看看','$openid','$timestamp',1,'$rss[fdir]','$rss[music]','$sn','$gh')";
		$query = $db->query($sql);
		$fid=$db->insert_id($query);
		///设置下兼容
		$isfengmian=0;
		$fengmian="";
		//$msg="\ue305创建错误,请重新创建相册.";
		//echo '{"errcode":"1","errmsg":"'.$msg.'"}';
		//exit;
	}
		
		
	$query = $db->query("select * from {$tablepre}app_list where openid='$openid' and fid=$fid order by tid desc ");
	$num=$db->num_rows($query);
						
	if($num<=$_WEITE['app_mums']){
		
	if($qarr["isok"]){
		$ishttp=1;
		function urlsafe_base64_encode($str){ 
			$find = array("+","/"); 
			$replace = array("-", "_"); 
			return str_replace($find, $replace, base64_encode($str)); 
			} 
	
			function generate_access_token($access_key, $secret_key, $url, $params = ''){ 
			$parsed_url = parse_url($url); 
			$path = $parsed_url['path']; 
			$access = $path; 
			if (isset($parsed_url['query'])) { 
			$access .= "?" . $parsed_url['query']; 
			} 
			$access .= "\n"; 
			if($params){ 
			if (is_array($params)){ 
			$params = http_build_query($params); 
			} 
			$access .= $params; 
			} 
			$digest = hash_hmac('sha1', $access, $secret_key, true); 
			return $access_key.':'.urlsafe_base64_encode($digest); 
			}
			
			
			function send($url, $header = '') { 
				$curl = curl_init($url); 
				curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
				curl_setopt($curl, CURLOPT_HEADER,1); 
				curl_setopt($curl, CURLOPT_HTTPHEADER, $header); 
				// curl_setopt($curl, CURLOPT_POST, 1); 
				$con = curl_exec($curl); 
				return $con; 
			} 
			
			
			$bucket = $qarr["qdir"];
			$access_key =$qarr["qacc"]; 
			$secret_key = $qarr["qkey"]; 
			
			$extension = substr($url, strrpos($url, '.') + 1);
			$fetch = urlsafe_base64_encode($url);
			$time = date("Ymd");
			$uniqid = uniqid();
			$key = 'image_'.$time.'_'.$uniqid.'.jpg';
			$enurl = $bucket.':'.$key;
			$to = urlsafe_base64_encode($enurl);
			$url = 'http://iovip.qbox.me/fetch/'. $fetch .'/to/' . $to;
			$access_token = generate_access_token($access_key, $secret_key, $url);
			$header[] = 'Content-Type: application/json'; 
			$header[] = 'Authorization: QBox '. $access_token; 
			
			$con = send('iovip.qbox.me/fetch/'.$fetch.'/to/'.$to, $header); 
			if($con==="false"){
				$msg="第$num张图片上传失败，请重新上传";
				echo '{"errcode":"1","errmsg":"'.$msg.'"}';
				exit;
			}else{
				$fpic="http://".$qarr["qhost"]."/image_".$time.'_'.$uniqid.'.jpg';
			}
		}else{
		
			if(!$_WEITE['qiniu_isok']){///本地上传
			
				$url="http://read.html5.qq.com/image?src=fav&q=5&r=0&imgflag=7&imageUrl=".$url;
				$curl = curl_init();
				curl_setopt($curl, CURLOPT_URL, $url);
				curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
				curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
				curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
				$result = curl_exec($curl);
				curl_close($curl);
				
				if($result){
				$sn = uniqid();
				$ymd = date("Ymd");
				$uploadDir="../attachments/". $ymd . "/";
				
				if (!file_exists($uploadDir)) {
					mkdir($uploadDir);
				}
			
				$filename=$uploadDir.$sn.".jpg";
				
				$fpic="attachments/".$ymd."/".$sn.".jpg";
				
				
				$handle  = fopen ($filename,"w"); 
				if (!is_writable ($filename)){ 
				}
				if (!fwrite ($handle,$result)){  
				} 
				fclose ($handle);
				
				$ishttp=0;
				}else{
				 $isfalse=1;
				}
				
				
				
				
			}else{///七牛上传
			
			$ishttp=2;
			function urlsafe_base64_encode($str){ 
			$find = array("+","/"); 
			$replace = array("-", "_"); 
			return str_replace($find, $replace, base64_encode($str)); 
			} 
	
			
			function generate_access_token($access_key, $secret_key, $url, $params = ''){ 
			$parsed_url = parse_url($url); 
			$path = $parsed_url['path']; 
			$access = $path; 
			if (isset($parsed_url['query'])) { 
			$access .= "?" . $parsed_url['query']; 
			} 
			$access .= "\n"; 
			if($params){ 
			if (is_array($params)){ 
			$params = http_build_query($params); 
			} 
			$access .= $params; 
			} 
			$digest = hash_hmac('sha1', $access, $secret_key, true); 
			return $access_key.':'.urlsafe_base64_encode($digest); 
			}
			
			
			function send($url, $header = '') { 
				$curl = curl_init($url); 
				curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
				curl_setopt($curl, CURLOPT_HEADER,1); 
				curl_setopt($curl, CURLOPT_HTTPHEADER, $header); 
				// curl_setopt($curl, CURLOPT_POST, 1); 
				$con = curl_exec($curl); 
				return $con; 
			} 
			
			
			
			$bucket = $_WEITE['qiniu_fdir'];
			$access_key =$_WEITE['qiniu_access']; 
			$secret_key = $_WEITE['qiniu_secret']; 
			
			
			
			$extension = substr($url, strrpos($url, '.') + 1);
			$fetch = urlsafe_base64_encode($url);
			$time = date("Ymd");
			$uniqid = uniqid();
			$key = 'image_'.$time.'_'.$uniqid.'.jpg';
			$enurl = $bucket.':'.$key;
			$to = urlsafe_base64_encode($enurl);
			$url = 'http://iovip.qbox.me/fetch/'. $fetch .'/to/' . $to;
			$access_token = generate_access_token($access_key, $secret_key, $url);
			$header[] = 'Content-Type: application/json'; 
			$header[] = 'Authorization: QBox '. $access_token; 
			
			$con = send('iovip.qbox.me/fetch/'.$fetch.'/to/'.$to, $header); 
			if($con==="false"){
				$msg="第$num张图片上传失败，请重新上传";
				echo '{"errcode":"1","errmsg":"'.$msg.'"}';
				exit;
			}else{
				$fpic="http://".$_WEITE['qiniu_weburl']."/image_".$time.'_'.$uniqid.'.jpg';
			}
		}	
		
	}
		
		if(!$isfalse){
		$db->query("insert into {$tablepre}app_list (fid,openid,fpic,sid,dateline,gh,ishttp) value ($fid,'$openid','$fpic',0,'$timestamp','$gh','$ishttp')");
		
		
		$num=$num+1;
		
		///更新封面
		if(!$fengmian){
			if($num==1){
				$db->query("update {$tablepre}app set fpic='$fpic' where tid=$fid and openid='$openid'");
			}
		}
		
		if($num==$_WEITE['app_mums']){
			$rs=$db->fetch_first("select fpic from {$tablepre}app_list where  fid=$fid  order by tid asc limit 1");
			if($rs){
				$fpic=$rs["fpic"];
			}else{
				$fpic="assets/images/logo.jpg";
			}
			$db->query("update {$tablepre}app set fpic='$fpic' where tid=$fid");
			
			$msg="\ue305最多".$_WEITE['app_mums']."张图片哦.制作完毕,点这里查看效果";
			echo '{"errcode":"0","errmsg":"'.$msg.'","errtid":"'.$fid.'"}';
			$db->free_result($query);
			$db->close();
			exit;
		
		}else{
		
			$query = $db->query("select * from {$tablepre}app_list where openid='$openid' and fid=$fid order by tid desc ");
			$num=$db->num_rows($query);
		
		
			$msg="\ue348已收到第".$num."张图片,点这里开始制作";
			echo '{"errcode":"0","errmsg":"'.$msg.'","errtid":"'.$fid.'"}';
			$db->free_result($query);
			$db->close();
			exit;
		}
		}
		
		
	}else{
	
		$rs=$db->fetch_first("select fpic from {$tablepre}app_list where  fid=$fid  order by tid asc limit 1");
		if($rs){
			$fpic=$rs["fpic"];
		}else{
			$fpic="assets/images/logo.jpg";
		}
		$db->query("update {$tablepre}app set isok=1,fpic='$fpic' where tid=$fid");
		
	$msg="\ue305最多".$_WEITE['app_mums']."张图片哦.制作完毕,点这里查看效果";
	echo '{"errcode":"0","errmsg":"'.$msg.'","errtid":"'.$fid.'"}';
	$db->free_result($query);
$db->close();
	
	exit;
	}
	}
}
?>
