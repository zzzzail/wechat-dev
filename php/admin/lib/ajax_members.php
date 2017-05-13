<?php
define('NOROBOT', TRUE);
require_once '../../include/common.inc.php';
require_once '../session.php';

if($action=="dell"){
	$db->query("delete from {$tablepre}members  where id=$tid");
	$db->query("delete from {$tablepre}likes where uid=$tid");
	$db->query("delete from {$tablepre}newslist where uid=$tid");
	echo'{"state":1,"msg":"OK"}';

}

if($action=="edit"){
	$rss= $db->fetch_first("select * from {$tablepre}members where id=$tid  limit 1");
	if(!$rss){
	 echo'{"state":0,"msg":"用户不存在"}';
	  exit;
	} 

	$tid=$rss["id"];
	$username=$rss["username"];
	$qq=$rss["qq"];
	$price=$rss["price"];

	
	     $html="<div class='frm_jssdk'>";
	     $html.="<input name='tid' id=tid type='hidden' value='".$tid."' />";
		 $html.="<input name='action' id=action type='hidden' value='edit_do' />";
         $html.="<div class='frm_control_group w50 btn_input_group l'>";
         $html.="<label for='' class='frm_label'>用户名</label>";
         $html.="<div class='frm_controls'>";
         $html.="<span class='frm_input_box'>";
         $html.="<input type='text' id=title name='title' value='".$username."' class='frm_input js_domain1' disabled>";
        $html.="</span>";
        $html.="</div>";
		$html.="<br>";
		
		 $html.="<div class='frm_control_group w50 btn_input_group l'>";
         $html.="<label for='' class='frm_label'>修改密码</label>";
         $html.="<div class='frm_controls'>";
         $html.="<span class='frm_input_box'>";
         $html.="<input type='text' id=telpass name='telpass' value='' class='frm_input js_domain1' >";
        $html.="</span>";
		$html.=" <p class='frm_msg fail js_fail' style='display: block; color:#999999 '>不填写则表示不修改</p>";
        $html.="</div>";
		$html.="<br>";
		
		
		 $html.="<div class='frm_control_group w50 btn_input_group l'>";
         $html.="<label for='' class='frm_label'>联系QQ</label>";
         $html.="<div class='frm_controls'>";
         $html.="<span class='frm_input_box'>";
         $html.="<input type='text' id=qq name='qq' value='".$qq."' class='frm_input js_domain1'>";
        $html.="</span>";
        $html.="</div>";
		$html.="<br>";
		
		
		 $html.="<div class='frm_control_group w50 btn_input_group l'>";
         $html.="<label for='' class='frm_label'>积分</label>";
         $html.="<div class='frm_controls'>";
         $html.="<span class='frm_input_box'>";
         $html.="<input type='text' id=price name='price' value='".$price."' class='frm_input js_domain1'>";
        $html.="</span>";
        $html.="</div>";
		$html.="<br>";
		
        $html.=" </div>";
        $html.="  </div>";
		echo'{"state":1,"msg":"'.$html.'"}';
}


if($action=="edit_do"){
	$rss= $db->fetch_first("select * from {$tablepre}members where id=$tid  limit 1");
	if(!$rss){
	 echo'{"state":0,"msg":"用户不存在"}';
	  exit;
	} 
	$telpass=addslashes(filterhtml(trim($telpass)));
	$qq=addslashes(filterhtml(trim($qq)));
	$price = intval(isset($price)) && is_numeric($price) ? intval($price) : 0;

	if($telpass){
	$passs=md5($telpass);
	$sql="update {$tablepre}members set password='$passs',qq='$qq',price=$price where  id=$tid";
	}else{
	$sql="update {$tablepre}members set qq='$qq',price=$price where  id=$tid";
	}
	
	$query = $db->query($sql);
	echo'{"state":1,"msg":"'.$price.'"}';
}



$db->close();
?>
