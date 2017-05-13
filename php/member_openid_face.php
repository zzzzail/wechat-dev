<?php 
session_start();
header("Content-type: text/html; charset=utf-8");
require_once 'include/common.inc.php';
require_once 'data/app_session.php';

					$sn=$rss["sn"];
					$gid=$rss["tid"];
					$guanzhu_url=$rss["furl"];
					$g_appid=$rss["appid"];
					$g_appsecret=$rss["appsecret"];


					$TOKEN_URL  = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".$g_appid."&secret=".$g_appsecret;
					if (ini_get('allow_url_fopen') == 1 && function_exists('curl_init')){
						$json = file_get_contents($TOKEN_URL);
						if (empty($json)){
							$ch = curl_init();
							curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
							curl_setopt ($ch, CURLOPT_URL, $TOKEN_URL);
							curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
							$json = curl_exec($ch);
							curl_close($ch);
						}
						$result = json_decode($json,true);
						$ACC_TOKEN = $result['access_token'];
					}else{
						echo "空间不支持！请询问空间商是否开启curl和allow_url_fopen";
						exit;
					}				

				$i=1;
				$query = $db->query("select * from {$tablepre}openid where gh='$sn' order by tid desc  limit 100");
				while($rs=$db->fetch_array($query)){
					$openid=$rs["openid"];
					if(trim($rs["username"])=="匿名" || trim($rs["username"])==""){
						$url="https://api.weixin.qq.com/cgi-bin/user/info?access_token=".$ACC_TOKEN."&openid=".$openid."&lang=zh_CN";
						$res=https_request($url);
						//print_r($res);
						$arr= json_decode($res,true);
						$subscribe=$arr["subscribe"];
						$openid=$arr["openid"];
						if($subscribe){
							$nickname=addslashes(trim($arr["nickname"]));
							$headimgurl=trim($arr["headimgurl"]);
							
							$db->query("update {$tablepre}openid set username='$nickname',face='$headimgurl',subscribe=$subscribe where openid='$openid'");
							//echo "update {$tablepre}openid set username='$nickname',face='$headimgurl',subscribe=$subscribe where openid='$openid'";
						}	
						$i++;
					}
				}
				$msg="一共".$i."个用户头像更新完毕.";
				
				$msg.="<br>关闭此页面即可";
				
				echo $msg;
?>


