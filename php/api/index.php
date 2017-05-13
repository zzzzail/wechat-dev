<?php 
header("Content-type: text/html; charset=utf-8");
require_once '../include/common.inc.php';

$sn=daddslashes($sn);
if(!$sn){
	exit("1");
}

$rss= $db->fetch_first("select * from {$tablepre}gongzhonghao where sn='$sn' order by tid desc limit 1");
if(!$rss){
	exit("2");
}



$token=$rss["appid"];
$sn=$rss["sn"];
if(time()<=$rss["overdateline"] && time()>=$rss["startdateline"]){
}else{
 	exit("3");
}

$php="../cache/msg/".$sn.".php";
if(file_exists($php)){
	require_once $php;
}

define("Weburl",$_WEITE['web_weburl']);
define("TOKEN",$token);
define("SN",$sn);

$wechatObj = new wechatCallbackapiTest();
if (isset($_GET['echostr'])) {
    $wechatObj->valid();
}else{
    $wechatObj->responseMsg();
}

class wechatCallbackapiTest
{
   
   public function valid()
    {
        $echoStr = $_GET["echostr"];
        if($this->checkSignature()){
            echo $echoStr;
            exit;
        }
    }

   private function checkSignature()
	{
        $signature = $_GET["signature"];
        $timestamp = $_GET["timestamp"];
        $nonce = $_GET["nonce"];	
        		
		$token = TOKEN;
		$tmpArr = array($token, $timestamp, $nonce);
		sort($tmpArr, SORT_STRING);
		$tmpStr = implode( $tmpArr );
		$tmpStr = sha1( $tmpStr );
		
		if( $tmpStr == $signature ){
			return true;
		}else{
			return false;
		}
	}
	
	
	
	
	
private function transmitText($object, $content)
    {
        $textTpl = "<xml>
<ToUserName><![CDATA[%s]]></ToUserName>
<FromUserName><![CDATA[%s]]></FromUserName>
<CreateTime>%s</CreateTime>
<MsgType><![CDATA[text]]></MsgType>
<Content><![CDATA[%s]]></Content>
</xml>";
        $result = sprintf($textTpl, $object->FromUserName, $object->ToUserName, time(), $content);
        return $result;
    }	
	
	
	

private function transmitNews($object, $arr_item, $flag = 0)
    {
        if(!is_array($arr_item))
            return;

        $itemTpl = "    <item>
        <Title><![CDATA[%s]]></Title>
        <Description><![CDATA[%s]]></Description>
        <PicUrl><![CDATA[%s]]></PicUrl>
        <Url><![CDATA[%s]]></Url>
    </item>
";
        $item_str = "";
        foreach ($arr_item as $item)
        $item_str .= sprintf($itemTpl, $item['Title'], $item['Description'], $item['Picurl'], $item['Url']);

        $newsTpl = "<xml>
		<ToUserName><![CDATA[%s]]></ToUserName>
		<FromUserName><![CDATA[%s]]></FromUserName>
		<CreateTime>%s</CreateTime>
		<MsgType><![CDATA[news]]></MsgType>
		<Content><![CDATA[]]></Content>
		<ArticleCount>%s</ArticleCount>
		<Articles>
		$item_str</Articles>
		<FuncFlag>%s</FuncFlag>
		</xml>";

        $resultStr = sprintf($newsTpl, $object->FromUserName, $object->ToUserName, time(), count($arr_item), $flag);
        return $resultStr;
    }

	public function https_curl($url, $data = null)
		{
				$curl = curl_init();
				curl_setopt($curl, CURLOPT_URL, $url);
				curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
				curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
				if (!empty($data)){
					curl_setopt($curl, CURLOPT_POST, 1);
					curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
				}
				curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
				$output = curl_exec($curl);
				curl_close($curl);
				return $output;
	}
	
	public function ToParams($urlObj)
			{
				$buff = "";
				foreach ($urlObj as $k => $v)
				{
					if($k != "sign"){
						$buff .= $k . "=" . $v . "&";
					}
				}
				
			$buff = trim($buff, "&");
			return $buff;
	}
	
    public function responseMsg()
    {
	
	   global $db,$tablepre,$timestamp,$_WEITE;
 	   $postStr = $GLOBALS["HTTP_RAW_POST_DATA"];
       if(!empty($postStr)){
		
			$postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);        
			$keyword = trim($postObj->Content);
			$fromUsername = $postObj->FromUserName;//发送人  
			$toUsername = $postObj->ToUserName;//接收人  
			$MsgType = $postObj->MsgType;//消息类型 
			$Event= trim($postObj->Event); //实践类型
			$MsgId = $postObj->MsgId;//消息id  
			$PicUrl = $postObj->PicUrl;//消息id  
			$time = time();//当前时间做为回复时间  
			$MediaId = $postObj->MediaId;//消息id  
	 		
			$jdata = array();
			$jdata["openid"] =$fromUsername;
			$jdata["sn"] =SN;
			ksort($jdata);
			$nonce= sha1($this->ToParams($jdata));
			
			$url =Weburl."data/data.php?sn=".SN."&iweite=".$nonce;
			//$file = fopen($MsgId.".txt","w");
			//fwrite($file,"MsgType".$MsgType."Event".$Event."EventKey".$postObj->EventKey."11111111");
			//fclose($file);
			
			
				if($Event==="CLICK"){
							if($postObj->EventKey=="iweite_f"){
								$json ='{
									  "action":"iweite_f",
									  "openid":"'.$fromUsername.'"
									}';
									$res=$this->https_curl($url,$json);
									$arr=json_decode($res,true);
									$list = unserialize(base64_decode($arr["list"]));
									$dateArray = array();
										foreach ($list as $v=>$a) 
										{ 
										
									$dateArray[] = array("Title"=>$a["title"], 
									"Description"=>$a["fdes"], 
									"Picurl"=>$a["fpic"], 
									"Url" =>$a["url"]);
										 } 							
									$resultStr = $this->transmitNews($postObj, $dateArray,0);
									echo $resultStr;
									exit;
							}
					
				}elseif($Event==="subscribe"){
				
					$json ='{
					  "action":"subscribe",
					  "openid":"'.$fromUsername.'"
					}';
					$res=$this->https_curl($url,$json);
					$arr=json_decode($res,true);
					$msg=$arr["errmsg"];
					$msg=preg_replace("/\[url=(.+?)\](.+?)\[\/url\]/is","<a href='\\1'>\\2</a>",$msg);
					$resultStr =$this->transmitText($postObj,$msg);
					echo $resultStr;
					exit;
					
					
				}elseif($Event==="unsubscribe"){
					$json ='{
					  "action":"unsubscribe",
					  "openid":"'.$fromUsername.'"
					}';
					$res=$this->https_curl($url,$json);
					exit;
				}elseif($Event==="pic_photo_or_album"){
						
						if($postObj->EventKey=="iweite_n"){
							$json ='{
							  "action":"iweite_n",
							  "openid":"'.$fromUsername.'",
							   "mid":"'.$MediaId.'"
							}';
							$res=$this->https_curl($url,$json);
							$arr=json_decode($res,true);
							$msg=$arr["errmsg"];
							//$resultStr =$this->transmitText($postObj,$msg);
							//echo $resultStr;
							exit;
						}
						
						if($postObj->EventKey=="iweite_add"){
							$json ='{
							  "action":"iweite_add",
							  "openid":"'.$fromUsername.'",
							   "mid":"'.$MediaId.'"
							}';
							$res=$this->https_curl($url,$json);
							$arr=json_decode($res,true);
							$msg=$arr["errmsg"];
							//$resultStr =$this->transmitText($postObj,$msg);
							//echo $resultStr;
							exit;
						}
						
							
						}else{
				
							if($MsgType == 'image'){ 
						
								$json ='{
								  "action":"image",
								  "openid":"'.$fromUsername.'",
								  "mid":"'.$MediaId.'",
								  "picurl":"'.$PicUrl.'"
								}';
								$res=$this->https_curl($url,$json);
							    $arr=json_decode($res,true);
								$msg=$arr["errmsg"];
								if(!$errcode){
									$msg=$arr["errmsg"];
									$fid=$arr["errtid"];
									
$html="<a href='".Weburl."app.php?sn=".SN."&isfrom=wx&openid=$fromUsername&tid=$fid'>".$msg."</a>";
									
									$resultStr =$this->transmitText($postObj,$html);
									echo $resultStr;
									exit;
								}else{
									$resultStr =$this->transmitText($postObj,$msg);
									echo $resultStr;
									exit;
								}
								
							}
				              
			    			if($MsgType == 'text'){ 
			
							   //输入文字来获取开始结
								if(strtolower($keyword)=="n"){
									$json ='{
									  "action":"n",
									  "openid":"'.$fromUsername.'"
									}';
									$res=$this->https_curl($url,$json);
									$arr=json_decode($res,true);
									$msg=$arr["errmsg"];
									$resultStr =$this->transmitText($postObj,$msg);
									echo $resultStr;
									exit;
								}elseif(strtolower($keyword)=="s"){
									$json ='{
									  "action":"s",
									  "openid":"'.$fromUsername.'"
									}';
									$res=$this->https_curl($url,$json);
									$arr=json_decode($res,true);
									$msg=$arr["errmsg"];
									$fid=$arr["errtid"];
									
$html="<a href='".Weburl."app.php?sn=".SN."&isfrom=wx&openid=$fromUsername&tid=$fid'>".$msg."</a>";
									$resultStr =$this->transmitText($postObj,$html);
									echo $resultStr;
									exit;
								}elseif(strtolower($keyword)=="f"){
									$json ='{
									  "action":"f",
									  "openid":"'.$fromUsername.'"
									}';
									$res=$this->https_curl($url,$json);
									$arr=json_decode($res,true);
									
									if(!$arr["errcode"]){
										$list = unserialize(base64_decode($arr["list"]));
										$dateArray = array();
										foreach ($list as $v=>$a) 
										{ 
										
									$dateArray[] = array("Title"=>$a["title"], 
									"Description"=>$a["fdes"], 
									"Picurl"=>$a["fpic"], 
									"Url" =>$a["url"]);
										 } 							
										$resultStr = $this->transmitNews($postObj, $dateArray,0);
									
									}else{
										$msg=$arr["errmsg"];
										$resultStr =$this->transmitText($postObj,$msg);
									}
									echo $resultStr;
									exit;
								}else{
								////////////字母输入结束								
								//////////////////////用户输入关键词开始
								
								$php="../cache/msg/".SN.".php";
								if(file_exists($php)){

									$web_keys=explode("|",$_WEITE['web_keys']);
									$web_keys_flag=explode("|",$_WEITE['web_keys_flag']);
									for($i=0;$i<count($web_keys);$i++){
									
										   if(strtolower($keyword)==$web_keys[$i]){
											if($web_keys_flag[$i]){
												$dateArray = array();
												$dateArray[] = array("Title"=>$_WEITE['web_keys_title'][$i], 
															"Description"=>$_WEITE['web_keys_fdes'][$i], 
															"Picurl"=>$_WEITE['web_keys_fpic'][$i], 
															"Url" =>$_WEITE['web_keys_furl'][$i]);
													$resultStr = $this->transmitNews($postObj, $dateArray,0);
													echo $resultStr;
													exit;
												
											}else{
											$resultStr =$this->transmitText($postObj,$_WEITE['web_keys_title'][$i]);
											echo $resultStr;
											exit;
											}
								 			}
										}
									}
								}
								
							}
							
				//全部结束
				}	
				
		}else{
		echo "<meta http-equiv='refresh' content='1;URL=../index.php' />";
		exit;
		}
    }
}
?>