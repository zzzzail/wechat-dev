<?php 
///////////////////////////////////////////
//自定义关键字规则
///////////////////////////////////////////

//公众号无下拉
//关键字n
//自定义接口回复-- 添加自定义接口回复--触发关键字填写N 
//关键字F
//自定义接口回复-- 添加自定义接口回复--触发关键字填写F



///////////////////////////////////////////
//公众号有下拉
//建立下拉菜单
//--新建相册 菜单动作（触发关键字）---iweite_n
//--添加图片 菜单动作（拍照或者相册发图）---iweite_add
//--我的相册 菜单动作（触发关键字）---iweite_f
//--相册咨询  菜单动作（链接）---http://dh.iweite.com/help.php
///////////////////////////////////////////



///每一个公众号的变量都不一样，请买家自行修改
///////////////////////////////////////////
$iweite_sn = '56cd6e06ba31c';
$iweite_url = 'http://dh.iweite.com';
$iweite_data_url =$iweite_url."/data/data.php?sn=".$iweite_sn;

$iweite_msg="/玫瑰新建相册成功,点下拉菜单-添加图片-就可以了。";
////////////////////////////////////////////////


$message = $this->message;
$fromUsername=$this->message['fromusername'];
$PicUrl=$this->message['picurl'];
$type = $this->message['type'];
$MsgType = $this->message['msgtype'];
$content=$this->message['content'];

if($MsgType == 'image'){ 

							
								$data ='{
								  "action":"image",
								  "openid":"'.$fromUsername.'",
								  "mid":"1001",
								  "picurl":"'.$PicUrl.'"
								}';
								$response = ihttp_request($iweite_data_url,$data);
								$arr = @json_decode($response['content'], true);
								$errcode=$arr["errcode"];
								$msg=$arr["errmsg"];
								$fid=$arr["errtid"];
								if(!$errcode){
									$html="<a href='".$iweite_url."/app.php?sn=".$iweite_sn."&isfrom=wx&openid=$fromUsername&tid=$fid'>".$msg."</a>";
									return $this->respText($html);		
								}else{
									return $this->respText($msg);	
								}
							
						
}else{
								if($content=="iweite_n"){
									$data ='{
									  "action":"n",
									  "openid":"'.$fromUsername.'"
									}';
							        $response = ihttp_request($iweite_data_url,$data);
							        $arr = @json_decode($response['content'], true);
									$msg=$arr["errmsg"];
									$msg=$iweite_msg;
									return $this->respText($msg);	
									}
									if($content=="iweite_f"){
									
									$data ='{
									  "action":"iweite_f",
									  "openid":"'.$fromUsername.'"
									}';
									$response = ihttp_request($iweite_data_url,$data);
							        $arr = @json_decode($response['content'], true);
									$list = unserialize(base64_decode($arr["list"]));
									$dateArray = array();
										foreach ($list as $v=>$a) 
										{ 
							
											$dateArray[] = array("title"=>strval($a["title"]), 
											"description"=>strval($a["fdes"]), 
											"picurl"=>strval($a["fpic"]), 
											"url" =>strval($a["url"])
											);
										 } 							
									return $this->respNews($dateArray);
									}
									
									if(strtolower($content)=="n"){
									$data ='{
									  "action":"n",
									  "openid":"'.$fromUsername.'"
									}';
							        $response = ihttp_request($iweite_data_url,$data);
							        $arr = @json_decode($response['content'], true);
									$msg=$arr["errmsg"];
									return $this->respText($msg);	
									}
									
									if(strtolower($content)=="f"){
									
									$data ='{
									  "action":"iweite_f",
									  "openid":"'.$fromUsername.'"
									}';
									$response = ihttp_request($iweite_data_url,$data);
							        $arr = @json_decode($response['content'], true);
									$list = unserialize(base64_decode($arr["list"]));
									$dateArray = array();
										foreach ($list as $v=>$a) 
										{ 
							
											$dateArray[] = array("title"=>strval($a["title"]), 
											"description"=>strval($a["fdes"]), 
											"picurl"=>strval($a["fpic"]), 
											"url" =>strval($a["url"])
											);
										 } 							
									return $this->respNews($dateArray);
								}

	
								 

}
