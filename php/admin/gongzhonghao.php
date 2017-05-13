<?php 
require_once '../include/common.inc.php';
include "../include/snoopy.class.php";

require_once 'session.php';


$gongzhonghao_menu="selected";

if ($action=="dell"){

	$query = $db->query("select  * from   {$tablepre}gongzhonghao where tid=$id order by tid desc");
	$rss=$db->fetch_array($query);
	$sn=$rss["sn"];
	$query = $db->query("delete from {$tablepre}gongzhonghao  where tid=$id");
	////删除下面所有的用户
	
	$query = $db->query("delete from {$tablepre}openid  where gh='$sn'");
	$query = $db->query("delete from {$tablepre}app  where gh='$sn'");
	$query = $db->query("select * from {$tablepre}app_list where gh='$sn'");
			while($rsss=$db->fetch_array($query)){
				if($rsss["fpic"]){
					if(strstr($rsss["fpic"],"http://"))
					{
					$f=$rsss["fpic"];
					////删除七牛图片
					if($rsss["ishttp"]==2){
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
					}
					}else{
						 $f="../".$rsss["fpic"];
					     unlink($f);
					}
	
				}
				$db->query("delete from {$tablepre}app_list  where  tid=$rsss[tid]");
			}
}

if ($action=="ok"){
	$query = $db->query("update {$tablepre}gongzhonghao set isok=$fok where tid=$id");
}


if($action == 'add'){
$title=daddslashes($title);
$appid=filterhtml($appid);
$appsecret=getpic(filterhtml($appsecret));
$statdate=strtotime($statdate);
$enddate=strtotime($enddate);

$isok = intval(isset($isok)) && is_numeric($isok) ? intval($isok) : 0;
$furl=$title;
if ($title == "") {
  msboxback("请输入素材地址");
  exit;
}	

if ($appid == "") {
  msboxback("appid不为空");
  exit;
}	

if ($appsecret == "") {
  msboxback("appsecret不为空");
  exit;
}	


///preg_match_all('/http:\/\/([.a-zA-Z0-9_&=?\/]*)#rd/',$title,$match);
//if(!$match[1]){
 //msboxback("请输入正确的微信图文素材地址");
// exit;
//}

$send_snoopy = new Snoopy; 
$send_snoopy->fetch($title);
$result = $send_snoopy->results;


preg_match('|var nickname =(.*)\;|',$result,$match); 
$nickname=trim(str_replace("\"","",$match[1]));
preg_match('|var user_name =(.*)\;|',$result,$match); 
$user_name=trim(str_replace("\"","",$match[1]));


$xxx=explode("hd_head_img",$result);
$yyy=explode("||(window.location.protocol+",$result);
$zzz= str_replace($yyy[1],"",$xxx[1]);
$mmm=str_replace("\"||(window.location.protocol+","",$zzz);
$fpic=trim(str_replace(": \"","",$mmm));


if(!$nickname){
	msboxback("微信地址输入错误");
	exit;
}

if(!$user_name){
	msboxback("微信地址输入错误");
	exit;
}

$overdateline=$timestamp+3600*24*365;
$sn = uniqid();
$pass=md5($appsecret);

$sql="insert into {$tablepre}gongzhonghao(title,furl,fpic,appid,appsecret,dateline,isok,startdateline,overdateline,gh,sn,pass) value ('$nickname','$furl','$fpic','$appid','$appsecret','$timestamp',$isok,'$statdate','$enddate','$user_name','$sn','$pass')";
$query = $db->query($sql);

/////////////////////////////////
msboxurl("发布成功!","gongzhonghao.php");
}

if($action == 'edit'){
$furl=filterhtml($furl);
$appid=filterhtml($appid);
$appsecret=filterhtml($appsecret);
$isok = intval(isset($isok)) && is_numeric($isok) ? intval($isok) : 0;
$statdate=strtotime($statdate);
$enddate=strtotime($enddate);


if ($appid == "") {
  msboxback("appid不为空");
  exit;
}	

if ($appsecret == "") {
  msboxback("appsecret不为空");
  exit;
}	

if($old===$appsecret){
	$sql="update {$tablepre}gongzhonghao set startdateline='$statdate',overdateline='$enddate',furl='$furl',appid='$appid',appsecret='$appsecret',isok=$isok where tid=$id ";
}else{
	$pass=md5($appsecret);
	$sql="update {$tablepre}gongzhonghao set pass='$pass',furl='$furl',startdateline='$statdate',overdateline='$enddate',appid='$appid',appsecret='$appsecret',isok=$isok where tid=$id ";
}

$query = $db->query($sql);
msboxurl("编辑成功!","gongzhonghao.php");
}

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="renderer" content="webkit">
<meta charset="utf-8">
<title>
<?=$_WEITE["web_title"]?>
</title>
<link  rel="stylesheet" type="text/css" href="css/base/layout_head.css"/>
<link  rel="stylesheet" type="text/css" href="css/base/base.css"/>
<link  rel="stylesheet" type="text/css" href="css/base/lib.css"/>
<link  rel="stylesheet" href="css/base/vote_list.css">
<link  rel="stylesheet" type="text/css" href="css/base/pop.css"/>
 <link o rel="stylesheet" href="css/base/vote_edit.css"> 
 <link rel="stylesheet" type="text/css" href="css/base/pagination.css" />
 <script src="js/jquery.min.js"></script>
 <script src="js/My97DatePicker/WdatePicker.js" type="text/javascript"></script>
<script>
function isValid()
{
  var title=$("#title").val();
  var appid=$("#appid").val();
  var appsecret=$("#appsecret").val();
   
  
  if(title=="")
  {
    alert("素材地址不能为空!");
    $("#title").focus();
    return false;
  }
  
  
  if(appid=="")
  {
    alert("appid不可以空!");
    $("#appid").focus();
	 return false;
  }
   
  if(appsecret=="")
  {
    alert("appsecret不能为空!");
    $("#appsecret").focus();
	 return false;
  }
 
 
  return true;
  
 }
 
</script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body class="zh_CN"  style="margin:0px">
<?
include 'head.php';
?>

</div>
<div id="body" class="body page_index">
  <?
include 'left.php';
?>
</div>
<div class="col_main">

<?
  if($do=="add"){
  ?>
  <div class="col_main">                    <div class="main_hd main_hd_bd">        <h2 class="title_border">添加公众号</h2>  
  
  </div><div class="main_bd">
	
	<div class="js_new_vote vote_edit"> <div class="tc_dialog_content vote_container">
    <form action="" method="post" name="myform" onSubmit="javascript:return isValid();">
      <input name="action" id="action" type="hidden" value="add">
		<div class="vote_meta">
	        <div class="vote_meta_detail">
				<div class="frm_control_group">
					<label for="" class="frm_label" style="width:80px">素材地址</label>
					<div class="frm_controls">
						<span class="frm_input_box with_counter counter_in append vote_title count"><input autofocus="" type="text" placeholder="" class="frm_input frm_msg_content" id="title" name="title" ></span>
						<span class="frm_tips">此素材为公众号关注素材地址</span>
					</div>
				</div>
				
				
				<div class="frm_control_group">
					<label for="" class="frm_label" style="width:80px">AppID</label>
					<div class="frm_controls">
						<span class="frm_input_box with_counter counter_in append vote_title count"><input autofocus="" type="text" placeholder="" value="" class="frm_input frm_msg_content" id="appid" name="appid" ></span>
						<span class="frm_tips">公众号的Appid</span>
					</div>
				</div>
				
				<div class="frm_control_group">
					<label for="" class="frm_label" style="width:80px">AppSecret</label>
					<div class="frm_controls">
						<span class="frm_input_box with_counter counter_in append vote_title count"><input autofocus="" type="text" placeholder="" value="" class="frm_input frm_msg_content" id="appsecret" name="appsecret" ></span>
						<span class="frm_tips"></span>
					</div>
				</div>
				<?
				$startdateline=time();
				$overdateline=time()+365*24*3600;
				?>
				<div class="frm_control_group">
					<label for="" class="frm_label" style="width:80px">有效期</label>
					<div class="frm_controls">
						<input type="input" class="px" id="statdate" value="<?=date("Y-m-d H:i:s",$startdateline)?>" onClick="WdatePicker()" name="statdate" onFocus="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})"  style="height:30px; line-height:30px; border:1px solid #dcdcdc"/>
        到
    <input type="input" class="px" id="enddate" value="<?=date("Y-m-d H:i:s",$overdateline)?>" name="enddate" onClick="WdatePicker()" onFocus="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})"  style="height:30px; line-height:30px; border:1px solid #dcdcdc"/>
						<span class="frm_tips">默认是一年有效期</span>
					</div>
				</div>
				
				
				
				
				
			<div class="frm_control_group">
					<label for="" class="frm_label" style="width:80px">开启</label>
				<div class="frm_controls"  style="line-height:35px">
						
						<input name="isok" id=isok type="checkbox" value="1">
						
						<span class="frm_tips">是否开启和关闭，此功能和有效期配合使用</span>
					</div>
				</div>
	        </div>
	    </div>
	<input type="submit" value="提交保存信息" class="btn btn_primary js_complete_bnt" id=btnadd  style="margin:20px; margin-left:40%" />
	</div>   </div>   </div>   
   
	</form>
  <?
  }elseif($do=="edit"){
  
	$query = $db->query("select  * from   {$tablepre}gongzhonghao where tid=$id order by tid desc");
	$rss=$db->fetch_array($query);
  ?>
  <input name="tid" id=tid type="hidden" value="<?=$rss["tid"]?>">
  <div class="col_main">                    <div class="main_hd main_hd_bd">        <h2 class="title_border">编辑公众号</h2>  
  
    </div><div class="main_bd">
	
	<div class="js_new_vote vote_edit"> <div class="tc_dialog_content vote_container">
	<form action="" method="post" name="myform" onSubmit="javascript:return isValid();">
      <input name="action" id="action" type="hidden" value="edit">
	  <input name="id" id="id" type="hidden" value="<?=$rss["tid"]?>">
	   <input name="old" id="old" type="hidden" value="<?=$rss["appsecret"]?>">
	  
		<div class="vote_meta">
	        <div class="vote_meta_detail">
				<div class="frm_control_group" >
					<label for="" class="frm_label" style="width:80px">公众号名称</label>
					<div class="frm_controls"  style="line-height:35px">
						<img src="<?=$rss["fpic"]?>" width="50" height="50" style="margin-bottom:-10px"><br>
						<?=$rss["title"]?>
						<span class="frm_tips"></span>
					</div>
				</div>
				
				<div class="frm_control_group" >
					<label for="" class="frm_label" style="width:80px">素材地址</label>
					<div class="frm_controls">
						<span class="frm_input_box with_counter counter_in append vote_title count"><input autofocus="" value="<?=$rss["furl"]?>" type="text" placeholder="" class="frm_input frm_msg_content" id="furl" name="furl"   ></span>
						<span class="frm_tips">用于引导关注的素材地址</span>
					</div>
				</div>
				
				<div class="frm_control_group">
					<label for="" class="frm_label" style="width:80px">AppID</label>
					<div class="frm_controls">
						<span class="frm_input_box with_counter counter_in append vote_title count"><input autofocus="" type="text" placeholder="" value="<?=$rss["appid"]?>" class="frm_input frm_msg_content" id="appid" name="appid" ></span>
						<span class="frm_tips">公众号的Appid</span>
					</div>
				</div>
			
				
				<div class="frm_control_group">
					<label for="" class="frm_label" style="width:80px">AppSecret</label>
					<div class="frm_controls">
						<span class="frm_input_box with_counter counter_in append vote_title count"><input autofocus="" type="text" placeholder="" value="<?=$rss["appsecret"]?>" class="frm_input frm_msg_content" id="appsecret" name="appsecret" ></span>
						<span class="frm_tips">公众号的AppSecret</span>
					</div>
				</div>
				
				<div class="frm_control_group">
					<label for="" class="frm_label" style="width:80px">有效期</label>
					<div class="frm_controls">
						
	<input type="input" class="px" id="statdate" value="<?=date("Y-m-d H:i:s",$rss["startdateline"])?>" onClick="WdatePicker()" name="statdate" onFocus="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})"  style="height:30px; line-height:30px; border:1px solid #dcdcdc"/>
        到
    <input type="input" class="px" id="enddate" value="<?=date("Y-m-d H:i:s",$rss["overdateline"])?>" name="enddate" onClick="WdatePicker()"  style="height:30px; line-height:30px; border:1px solid #dcdcdc" onFocus="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})"/>
						
						<span class="frm_tips">公众号使用有效期</span>
					</div>
				</div>
				
			
				<div class="frm_control_group">
					<label for="" class="frm_label" style="width:80px">开启</label>
					<div class="frm_controls"  style="line-height:35px">
						
	<input name="isok" id=isok type="checkbox" value="1" <? if($rss["isok"]){?>  checked="checked"  <? }?>>
					
						<span class="frm_tips">是否开启和关闭，此功能和有效期配合使用</span>
					</div>
				</div>
			
				
			
			
			
	        </div>
	    </div>
	
	<input type="submit" value="提交保存信息" class="btn btn_primary js_complete_bnt" id=btnadd  style="margin:20px; margin-left:40%" /></div>
  
</div></div>
  <?
  }else{
  ?>
   <div class="main_hd main_hd_bd">
    <h2 class="title_border">公众号管理
      <p class="extra_info mini_tips icon_after align_title"><a href="#" target="_blank">公众号说明 <i class="icon_mini_tips document_link"></i></a></p>
    </h2>
  </div>
  <div class="main_bd">
  
  
    <div class="topbar group"><a data-bb="custom_form" class="btn btn_primary btn_add js_add_btn" id="jssdkSet" href="gongzhonghao.php?do=add"><i class="icon14_common add_white"></i>新建公众号</a></div>
    <div class="table_wrp with_border">
	
	
      <table class="table" cellspacing="0">
        <thead class="thead">
          <tr>
		  
		   <th class="table_cell " style=" text-align:center"><div class="td_panel">封面</div></th>
            <th class="table_cell " style=" text-align:center"><div class="td_panel">名称</div></th>
			<th class="table_cell " style=" text-align:center"><div class="td_panel">Appid</div></th>
			 <th class="table_cell " style=" text-align:center"><div class="td_panel">AppSecret</div></th>
            <th class="table_cell " style=" text-align:center"><div class="td_panel">开启</div></th>
			 <th class="table_cell " style=" text-align:center"><div class="td_panel">配置</div></th>
			 <th class="table_cell " style=" text-align:center"><div class="td_panel">有效期</div></th>
			 
            <th class="table_cell "  style="text-align:center"><div class="td_panel">操作</div></th>
          </tr>
        </thead>
        <tbody class="tbody js_list_body">
        
		  <?
			$pagesize=20;
			$page=intval($page);
			if($page<=0 && !$page)
			{
				$page=1;
			}
			$offset=($page-1)*$pagesize;
			if($offset<0)
			{
				$offset=0;
			}
			
			$query = $db->query("select tid from {$tablepre}gongzhonghao where tid>0 $addsql");
			$total= $db->num_rows($query);
			$pagenum=ceil($total/$pagesize);
			$url="gongzhonghao.php";
			$kmulti = multi($total,$pagesize, $page, $url, $idd);
			$query = $db->query("select * from {$tablepre}gongzhonghao where tid>0 $addsql $order limit $offset,$pagesize");
			while($rs=$db->fetch_array($query)){
			?>
		  
		  <tr id=tr_<?=$rs["tid"]?> >
                  <td class="table_cell user"  style="text-align:center"><a  class="avatar" id=a<?=$rs["tid"]?> target="_blank" href="<?=$rs["furl"]?>"><img src="<?=$rs["fpic"]?>"  class="js_msgSenderAvatar"  style="width:50px; height:50px; margin:10px" >
                      </a></td>
					<td class="table_cell user"  style="text-align:center"><?=$rs["title"]?>
					 </div></td>
					
           <td class="table_cell " style=" text-align:center"><div class="td_panel "><?=$rs["appid"]?></div></td>
		   <td class="table_cell " style=" text-align:center"><div class="td_panel "><?=$rs["appsecret"]?></div></td>
		   
			<td class="table_cell" style=" text-align:center"><div class="td_panel ">
			<?
			if($rs["isok"]){
			?>
			<a href="?action=ok&fok=0&id=<?=$rs["tid"]?>"><img src="images/ico/1.png" style="width:25px;"></a>
			<?
			}else{
			?>
			<a href="?action=ok&fok=1&id=<?=$rs["tid"]?>"><img src="images/ico/2.png" style="width:25px;"></a>
			<?
			}
			?>
			</div></td>
			
			 <th class="table_cell " style=" text-align:center"><div class="td_panel"><a href="gongzhonghao_api.php?id=<?=$rs["tid"]?>"><img src="images/ico/icon_menu_setup.png"></a></div></th>
			
			 <th class="table_cell " style=" text-align:center"><div class="td_panel">
			 <?
			 if(time()<=$rs["overdateline"] && time()>=$rs["startdateline"]){
			 ?>
			  <img src="images/ico/1.png" style="width:25px;">
			 <?
			 }else{
			 ?>
			 <img src="images/ico/2.png" style="width:25px;">
			 <?
			 }
			 ?>
			 
			 </div></th>
			
			
            <td class="table_cell " style="text-align:center"><div class="td_panel">  <a href="?do=edit&id=<?=$rs["tid"]?>" class="app_edit" tid=<?=$rs["tid"]?>>编辑</a>
<a href="?action=dell&id=<?=$rs["tid"]?>" class="app_del" tid=<?=$rs["tid"]?> onClick="javascript:return confirm('确定要删除吗？');">删除</a></div></td>
          </tr> <?
		  $i++;
		 }
		 ?>
        </tbody>
      </table>
    </div><?
	  }
	  ?>
    <div class="tool_area">
            <div class="pagination_wrp js_pageNavigator">
			
              <div class="pagination" > 
			  
			 
				<ul style="float:right">
				<?php echo $kmulti	?></ul>
			</div>
            </div>
          </div>
  </div>
</div>
</div>
<?
include 'foot.php';
?>