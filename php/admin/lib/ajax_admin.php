<?php
header("Content-type: text/html; charset=utf-8"); 
define('NOROBOT', TRUE);
require_once '../../include/common.inc.php';
require_once '../session.php';
if($action=="logout"){
	dsetcookie('iweite');
	$iweite_uid = 0;
	$iweite_pw=$iweite_secques='';
	msboxurl("退出成功！","../login.php");
}	


if($action=="dell"){
	$query = $db->query("select * from {$tablepre}admin ");
	$rows= $db->num_rows($query);
	if($rows==1)
	{
	echo'{"state":0,"msg":"您得至少保证有一个用户吧"}';
	exit;
	}
	
	$rss= $db->fetch_first("select * from {$tablepre}admin where id=$tid limit 1");
	if($rss){
		 $db->query("delete from {$tablepre}admin where id=$tid");
	}
	echo'{"state":1,"msg":"OK"}';
}

if($action == 'add') {
	$uname=filterhtml($uname);
	$upass=md5(filterhtml($upass));
	if($uname==="" || $upass==="")
	{
	echo'{"state":0,"msg":"请填写详细信息"}';
	exit;
	}
	
	$query = $db->query("select * from {$tablepre}admin where username='$uname'");
	$rows= $db->num_rows($query);
	
	if($rows>=1)
	{
		echo'{"state":0,"msg":"貌似有重复的用户名,换一个试试吧"}';
		exit;
	}
	
	$sql="insert into {$tablepre}admin(username,password,logintime,loginip,dateline) value ('$uname','$upass','$timestamp','$onlineip','$timestamp')";
	$query = $db->query($sql);
	echo'{"state":1,"msg":"添加成功!"}';
}


if($action == 'edit_do') {

	$uname=filterhtml($uname);
	if($uname==="")
	{
	echo'{"state":0,"msg":"请填写详细信息"}';
	exit;
	}
	$query = $db->query("select * from {$tablepre}admin where username='$uname' and id<>$tid");
	$rows= $db->num_rows($query);
	
	if($rows>=1)
	{
		echo'{"state":0,"msg":"貌似有重复的用户名,换一个试试吧"}';
		exit;
	}
	$upass=filterhtml($upass);
	if($upass){
		$upass=md5(filterhtml($upass));
		$sql="update  {$tablepre}admin set username='$uname',password='$upass' where id=$tid";
		$query = $db->query($sql);
		
	}else{
		$sql="update  {$tablepre}admin set username='$uname' where id=$tid";
		$query = $db->query($sql);
	}
	
		echo'{"state":1,"msg":"修改成功!"}';
}







if($action == 'eidt_admin') {
	$rss= $db->fetch_first("select * from {$tablepre}admin where id=$tid  limit 1");
	if($rss){
		$html="<div class='frm_jssdk'>";
		$html.="<input name='tid' id=tid type='hidden' value='".$rss["id"]."' />";
         $html.="<div class='frm_control_group w50 btn_input_group l'>";
          $html.="<label for='' class='frm_label'>用户名</label>";
$html.="<div class='frm_controls'>";
$html.="<span class='frm_input_box'>";
$html.="<input type='text' name='uname' value=".$rss["username"]."  id='uname' class='frm_input js_domain1'>";
 $html.="</span>";
              $html.=" </div>";
				$html.="<br>";
				$html.=" <label for='' class='frm_label'>密码</label>";
                 $html.="<div class='frm_controls'>";
                 $html.=" <span class='frm_input_box'>";
                 $html.=" <input type='text' value='' id=upass name='upass' class='frm_input js_domain1' >";
                $html.=" </span>";$html.=" <p class='frm_msg fail js_fail' style='display: block; color:#999999 '>为空则不修改</p>";
                 $html.="</div>";
                $html.="</div>";
            	$html.="</div>";
				$html.="</div>";
		echo'{"state":1,"msg":"'.$html.'"}';

	}

}

$db->close();
?>