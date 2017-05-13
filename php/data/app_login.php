<?php 
session_start();
header("Content-type: text/html; charset=utf-8");
require_once '../include/common.inc.php';
if($action=="login"){

	$cookietime="31536000";
	$username=addslashes(filterhtml(trim($appname)));
	$password=addslashes(filterhtml(trim($apppass)));
	
	if($username==="" ||  $password==="" )
	{
		echo'{"state":0,"msg":"信息不完善"}';
		exit;
	}
	
	$query = $db->query("select * from {$tablepre}gongzhonghao  where appid='$username' and isok=1 order by tid desc limit 1");
	$pass=$db->fetch_array($query);
	if($pass)
	{
		if(md5($password)===$pass["pass"])
		{
			$iweite_uid=$pass["tid"];
			$iweite_pw=$pass["pass"];
			$iweite_secques="iweite.huace";
		
			if(time()<=$pass["overdateline"] && time()>=$pass["startdateline"]){
			}else{
				echo'{"state":0,"msg":"帐户过期"}';
				exit;
			}
		
		dsetcookie('iweite',authcode("$iweite_pw\t$iweite_secques\t$iweite_uid",'ENCODE'), $cookietime, 1, true);
			
		unset($username,$password);
		echo'{"state":1,"msg":"main.php"}';
		exit;
		}
		else
		{
		echo'{"state":0,"msg":"用户名或者密码有错误"}';
		exit;
		}
	}
	else
	{
		echo'{"state":0,"msg":"用户名或者密码有错误"}';
		exit;
	}	
}
?>