<?php
define('NOROBOT', TRUE);
require_once '../../include/common.inc.php';

if($action=="login"){

	$cookietime="31536000";
	$username=addslashes(filterhtml(trim($username)));
	$password=addslashes(filterhtml(trim($userpass)));
	
	

	if($username==="" ||  $password==="" )
	{
		echo'{"state":0,"msg":"信息不完善"}';
		exit;
	}
	
	$query = $db->query("select * from {$tablepre}admin  where username='$username' limit 1");
	$pass=$db->fetch_array($query);
	if($pass)
	{
		if(md5($password)===$pass["password"])
		{
			$iweite_uid=$pass["id"];
			$iweite_pw=$pass["password"];
			$iweite_secques="iweite.com";
			$logincount=intval($pass["logincount"]);
			$query = $db->query("update  {$tablepre}admin  set logintime='$timestamp',loginip='$onlineip',logincount=$logincount+1 where id=$iweite_uid");
		
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