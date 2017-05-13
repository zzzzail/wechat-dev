<?
define('NOROBOT', TRUE);
require_once '../include/common.inc.php';
require_once 'session.php';
$template_class="selected";
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
<link onerror="wx_loaderror(this)" rel="stylesheet" href="css/base/vote_list.css">
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
     <div class="main_hd">
    <h2>模版分类</h2>
    <div class="title_tab" id="topTab"></div>
    <div class="extra_info search_bar"  style="border-bottom:1px solid #00CC66"> 
	 <div class="topbar group"><a data-bb="custom_form" class="btn btn_primary btn_add js_add_btn" id="jssdkSet" href="javascript:;"><i class="icon14_common add_white"></i>新建分类</a></div>
	 </div>
  </div>
	
	
    <div class="main_bd">
     
      <div class="table_wrp with_border">
        <table class="table" cellspacing="0">
          <thead class="thead">
            <tr>
			  <th class=" vote_num" style="width:80px;text-align:center"><div class="td_panel">分类ID</div></th>
              <th class="table_cell vote_title"><div class="td_panel">分类名称</div></th>
			  
              <th class="table_cell vote_num" style="text-align:center"><div class="td_panel">分类排序</div></th>
              <th class="table_cell last_child no_extra vote_opr" style="text-align:center"><div class="td_panel">操作</div></th>
            </tr>
          </thead>
          <tbody class="tbody js_list_body">
		<?
		$sql="select * from {$tablepre}template_class  order by sid desc,tid desc" ;
		$query = $db->query($sql);
		while($rs=$db->fetch_array($query)){
		  ?>
            <tr id=tr_<?=$rs["tid"]?>>
			<td class="table_cell vote_num" style="width:80px;text-align:center"><div class="td_panel"><?=$rs["tid"]?></div></td>
              <td class="table_cell vote_title"><div class="td_panel td_catname"><?=$rs["title"]?></div></td>
			 
              <td class="table_cell vote_num" style="text-align:center"><div class="td_panel"><?=$rs["sid"]?></div></td>
              <td class="table_cell last_child no_extra vote_opr" style="text-align:center"><div class="td_panel">
			  <a href="javascript:void(0)" class="app_edit" tid=<?=$rs["tid"]?>>编辑</a>
<a href="javascript:void(0)" class="app_del" tid=<?=$rs["tid"]?> >删除</a>

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
<script src="js/jquery.min.js"></script>

<div class="dialog_wrp dialog_add" style="width: 726px; margin-left: -363px; margin-top: -256px; display:none ">
	<div class="dialog">
		<div class="dialog_hd">
			<h3>创建新分类</h3>
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

<div id="viewTpl" style="display:none">
              <div class="frm_jssdk">
			  <input name='tid' id=tid type='hidden' value='0' />
                <div class="frm_control_group w50 btn_input_group l">
                    <label for="" class="frm_label">分类名称</label>
                    <div class="frm_controls">
                        <span class="frm_input_box">
                            <input type="text" id=title name="title" class="frm_input js_domain1">
                        </span>
                    </div>
					<br>
					 <label for="" class="frm_label">分类排序</label>
                    <div class="frm_controls">
                        <span class="frm_input_box">
                            <input type="text" value="99" id=sid name="sid" class="frm_input js_domain1"  onkeypress="if(!this.value.match(/^[\+\-]?\d*?\.?\d*?$/))this.value=this.t_value;else this.t_value=this.value;if(this.value.match(/^(?:[\+\-]?\d+(?:\.\d+)?)?$/))this.o_value=this.value" onKeyUp="if(!this.value.match(/^[\+\-]?\d*?\.?\d*?$/))this.value=this.t_value;else this.t_value=this.value;if(this.value.match(/^(?:[\+\-]?\d+(?:\.\d+)?)?$/))this.o_value=this.value" onBlur="if(!this.value.match(/^(?:[\+\-]?\d+(?:\.\d+)?|\.\d*?)?$/))this.value=this.o_value;else{if(this.value.match(/^\.\d+$/))this.value=0+this.value;if(this.value.match(/^\.$/))this.value=0;this.o_value=this.value}">
                        </span>
						 <p class="frm_msg fail js_fail" style="display: block; color:#999999 ">从大到小显示</p>
                    </div>
                </div>
            </div>
			

</div>




<script src="js/jquery.min.js"></script>
<script src="js/template_class.js"></script>


</body>
</html>
