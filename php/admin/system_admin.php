<?
define('NOROBOT', TRUE);
require_once '../include/common.inc.php';
require_once 'session.php';
$admin_menu="selected";
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="renderer" content="webkit">
<meta charset="utf-8">
<title><?=$_WEITE["web_title"]?></title>
<link  rel="stylesheet" type="text/css" href="css/base/layout_head.css"/>
<link  rel="stylesheet" type="text/css" href="css/base/base.css"/>
<link  rel="stylesheet" type="text/css" href="css/base/lib.css"/>
<link  rel="stylesheet" href="css/base/vote_list.css">
<link  rel="stylesheet" type="text/css" href="css/base/pop.css"/>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body class="zh_CN">
<?
include 'head.php';
?>
<div id="body" class="body page_index">
<?
include 'left.php';
?>
</div>
  <div class="col_main">
    <div class="main_hd main_hd_bd">
      <h2 class="title_border">管理员管理
      </h2>
    </div>
    <div class="main_bd">
      <div class="topbar group"><a data-bb="custom_form" class="btn btn_primary btn_add js_add_btn" id="jssdkSet" href="javascript:;"><i class="icon14_common add_white"></i>新建管理员</a></div>
      <div class="table_wrp with_border">
        <table class="table" cellspacing="0">
          <thead class="thead">
            <tr>
			
			<th class="table_cell "><div class="td_panel">ID</div></th>
              <th class="table_cell "><div class="td_panel">用户名</div></th>
			  <th class="table_cell "><div class="td_panel">登陆次数</div></th>
			  
              <th class="table_cell" ><div class="td_panel">最后登陆时间</div></th>
              <th class="table_cell " ><div class="td_panel">操作</div></th>
            </tr>
          </thead>
          <tbody class="tbody js_list_body">
		  <?
		  $sql="select * from {$tablepre}admin order by id asc" ;
		$query = $db->query($sql);
		while($rs=$db->fetch_array($query)){
		  ?>
            <tr id=tr_<?=$rs["id"]?>>
              <td class="table_cell "><div class="td_panel td_catname"><?=$rs["id"]?></div></td>
              <td class="table_cell"><div class="td_panel"><?=$rs["username"]?></div></td>
			  
			   <td class="table_cell "><div class="td_panel"><?=$rs["logincount"]?></div></td>
			    <td class="table_cell " ><div class="td_panel"><?=date("Y-m-d h:i:s",$rs["logintime"])?></div></td>
<td class="table_cell" ><div class="td_panel">
<a href="javascript:void(0);" class="app_edit" tid=<?=$rs["id"]?>>编辑</a>
<a href="javascript:void(0)" class="app_del" tid=<?=$rs["id"]?> >删除</a>
</div></td>
        </tr>
         <?
		 }
		 ?>
		  
          </tbody>
        </table>
      </div>
      <div class="pagination_wrp pageNavigator"></div>
    </div>
  </div></div>
<?
include 'foot.php';
?>
<div class="dialog_wrp dialog_add" style="width: 726px; margin-left: -363px; margin-top: -256px; display:none ">
	<div class="dialog">
		<div class="dialog_hd">
			<h3>添加管理员</h3>
			<a href="javascript:;" onClick="return false" class="icon16_opr closed pop_closed">关闭</a>
		</div>
		<div class="dialog_bd"  style=" padding-top:30px; padding-bottom:30px">
   		<div class="page_msg  default popup_private">  
        <div class="inner group">   
            <div class="msg_content">
			  
			
             </div> 
        </div>
    </div>
</div>
<div class="dialog_ft">
            <span class="btn btn_primary btn_input js_btn_p app_add"><button type="button" class="js_btn" data-index="0">确定</button></span>
            <span class="btn btn_default btn_input js_btn_p"><button type="button" class="js_btn closed" data-index="1">取消</button></span>
		</div>
	</div>
</div>
<div class="theme-popover-mask"></div>


<script type="html/text" id="viewTpl">
 <div class="frm_jssdk">
			  <input name='tid' id=tid type='hidden' value='0' />
                <div class="frm_control_group w50 btn_input_group l">
                    <label for="" class="frm_label">用户名</label>
                    <div class="frm_controls">
                        <span class="frm_input_box">
                            <input type="text" name="uname"  id="uname" class="frm_input js_domain1">
                        </span>
                    </div>
					<br>
					 <label for="" class="frm_label">密码</label>
                    <div class="frm_controls">
                        <span class="frm_input_box">
                            <input type="text" value="" id=upass name="upass" class="frm_input js_domain1" >
                        </span>
                    </div>
                </div>
            	</div>
</div>
</script>

<script src="js/jquery.min.js"></script>
<script src="js/admin.js"></script>
</body>
</html>
