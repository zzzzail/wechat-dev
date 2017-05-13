<?php 
session_start();
header("Content-type: text/html; charset=utf-8");
require_once 'include/common.inc.php';
require_once 'data/app_session.php';
$query = $db->query("select  * from   {$tablepre}gongzhonghao where tid=$weite_uid order by tid desc");
$rsss=$db->fetch_array($query);

$qarr=json_decode($rsss["qiniu"],true);



if(!$rsss) exit(); 

if($action == 'edit') {

	$isok = intval(isset($isok)) && is_numeric($isok) ? intval($isok) : 0;
	
	$qhost=addslashes(filterhtml(trim($qhost)));
	if($qhost==="")
	{
		msboxback("七牛解析域名不能为空!");
	}
	$qdir=addslashes(filterhtml(trim($qdir)));
	if($qdir==="")
	{
		msboxback("存储文件夹名不能为空");
	}
	
	$qacc=addslashes(filterhtml(trim($qacc)));
	if($qacc==="")
	{
		msboxback("Access Key不能为空!");
	}
	
	$qkey=addslashes(filterhtml(trim($qkey)));
	if($qkey==="")
	{
		msboxback("Secret Key不能为空!");
	}
	
	$qn='{"isok":"'.$isok.'","qhost":"'.$qhost.'","qacc":"'.$qacc.'","qkey":"'.$qkey.'","qdir":"'.$qdir.'"}';
	
	$sql="update  {$tablepre}gongzhonghao set qiniu='$qn' where tid=$weite_uid";
	$query = $db->query($sql);
	msboxurl("修改成功!","member_qiniu.php");
	
}

include 'web_head.php';
?>
<div class="upload-main">
  <div class="upload-box w1200">
    <h3 style="font-weight:700">七牛设置</h3>
    <div class="up-list">
      <div id="mainlist">
	  
	  
	   <style>
	  .up-list .list .name{ width:200px}
	  </style>
<script>
function isValid()
{
  	var qhost=$("#qhost").val();
  	var qdir=$("#qdir").val();
  var qacc=$("#qacc").val();
  
  var qkey=$("#qkey").val();
  
  
	  if(qhost=="")
	  {
		alert("七牛解析域名不能为空!");
		$("#qhost").focus();
		return false;
	  }
	  
	  if(qdir=="")
	  {
		alert("存储文件夹名不能为空!");
		$("#qdir").focus();
		return false;
	  }
	  
	   if(qacc=="")
	  {
		alert("Access Key不能为空!");
		$("#qacc").focus();
		return false;
	  }
	  
	   if(qkey=="")
	  {
		alert("Secret Key不能为空!");
		$("#qkey").focus();
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
	
        <div class="list up-file clearfix"><span class="name fl">是否开通:</span>
        <div class="right clearfix ps-relative">
          <p class="fl weizi">
		  <input type="checkbox" value="1" <? if($qarr["isok"]){?> checked="checked" <? }?> id=isok name=isok style="width:30px; height:30px; margin-top:10px" />
		  </p>
         
        </div>
      </div>
	  
	  
	  
	   <div class="list up-file clearfix"><span class="name fl">七牛解析域名:</span>
        <div class="right clearfix ps-relative">
          <p class="fl weizi"><input name="qhost" id=qhost  type="text" class="boxinput" value="<?=$qarr["qhost"]?>" /></p>
         
        </div>
      </div>
	  
	  
	   <div class="list up-file clearfix"><span class="name fl"> 存储文件夹名:</span>
        <div class="right clearfix ps-relative">
          <p class="fl weizi"><input name="qdir" id=qdir  type="text" class="boxinput" value="<?=$qarr["qdir"]?>" /></p>
         
        </div>
      </div>
	  
	  
	  <div class="list up-file clearfix"><span class="name fl"> Access Key:</span>
        <div class="right clearfix ps-relative">
          <p class="fl weizi"><input name="qacc" id=qacc  type="text" class="boxinput" value="<?=$qarr["qacc"]?>" /></p>
         
        </div>
      </div>
	  
	  
	  <div class="list up-file clearfix"><span class="name fl"> Secret Key:</span>
        <div class="right clearfix ps-relative">
          <p class="fl weizi"><input name="qkey" id=qkey  type="text" class="boxinput" value="<?=$qarr["qkey"]?>" /></p>
         
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
