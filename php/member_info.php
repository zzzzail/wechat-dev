<?php 
session_start();
header("Content-type: text/html; charset=utf-8");
require_once 'include/common.inc.php';
require_once 'data/app_session.php';
$query = $db->query("select  * from   {$tablepre}gongzhonghao where tid=$weite_uid order by tid desc");
$rsss=$db->fetch_array($query);
if(!$rsss) exit(); 

if($action == 'edit') {
	$pass1=addslashes(filterhtml(trim($pass1)));
	if($pass1==="")
	{
		msboxback("请填写密码");
	}
	$pass2=addslashes(filterhtml(trim($pass2)));
	
	if($pass1<>$pass2){
	msboxback("两次输入密码不一致");
	}
	
	
	$upass=md5(addslashes(filterhtml(trim($pass1))));
	$sql="update  {$tablepre}gongzhonghao set pass='$upass' where tid=$weite_uid";
	$query = $db->query($sql);
	msboxurl("修改成功!","member_info.php");
}



include 'web_head.php';
?>
<div class="upload-main">
  <div class="upload-box w1200">
    <h3 style="font-weight:700">密码修改</h3>
    <div class="up-list">
      <div id="mainlist">
	  
	  
	   <style>
	  .up-list .list .name{ width:200px}
	  </style>
<script>
function isValid()
{
  	var pass1=$("#pass1").val();
  	var pass2=$("#pass2").val();
  
	  if(pass1=="")
	  {
		alert("新密码不能为空!");
		$("#pass1").focus();
		return false;
	  }
	  
	  if(pass2!=pass1)
	  {
		alert("两次密码输入不一样!");
		$("#pass2").focus();
		 return false;
	  }
  return true;
}
</script>
	  <form action="" method="post" name="myform" onSubmit="javascript:return isValid();">
      <input name="action" id="action" type="hidden" value="edit">
	  <div class="list up-file clearfix" style="height:100px; line-height:100px"><span class="name fl">公众号名称</span>
        <div class="right clearfix ps-relative">
          <p class="fl weizi"> <img src="<?=$rsss["fpic"]?>"  class="js_msgSenderAvatar"  style="width:50px; height:50px; margin:10px 0 0 0px" ><br><?=$rsss["title"]?></p>
         
        </div>
      </div>
	  <div class="list up-file clearfix"><span class="name fl">用户名:</span>
        <div class="right clearfix ps-relative">
          <p class="fl weizi"><input name="" type="text" class="boxinput" value="<?=$rsss["appid"]?>" disabled="disabled" /></p>
         
        </div>
      </div>
         
        <div class="list up-file clearfix"><span class="name fl">新密码:</span>
        <div class="right clearfix ps-relative">
          <p class="fl weizi"><input name="pass1" id=pass1 type="password" class="boxinput" value="" /></p>
         
        </div>
      </div>
	  
	   <div class="list up-file clearfix"><span class="name fl">确认密码:</span>
        <div class="right clearfix ps-relative">
          <p class="fl weizi"><input name="pass2" id=pass2 type="password" class="boxinput" value="" /></p>
         
        </div>
      </div>
	  
	   
	   
      </div>
	   <div class="list up-file clearfix"><span class="name fl"></span>
        <div class="right clearfix ps-relative">
          <p class="fl weizi"><input name="" type="submit" value="提交"  style="font-size:14px;display:block;height: 35px;line-height:35px;border: 1px solid #20c7a2;color: #ffffff;background-color: #20c7a2;border-radius: 4px;   width:250px;" /></p>
         
        </div>
      </div>
          <div class="list up-file clearfix"><span class="name fl"></span>
        <div class="right clearfix ps-relative">
          <p class="fl weizi"></p>
         
        </div>
      </div>
       </form>
      </div>
    </div>
  </div>
</div>
<?php 
include 'web_foot.php';
?>
