<?php
if(!defined('IN_IWEITE')) {
	exit('Access Denied');
}
?>
<div class="head" id="header">
  <div class="head_box">
    <div class="inner wrp">
      <h1 class="logo"><a href="main.php" title="<?=$_WEITE["web_title"]?>"></a></h1>
      <div class="account" >
        <div class="account_meta account_info account_meta_primary"> <a href="system_admin.php" class="nickname"><?=$admin_username?></a> <span class="type_wrp"> <a href="#" class="type icon_subscribe_label">正版授权</a> </span> <a href="system_admin.php"><img src="images/temp/logo-100.jpg" class="avatar"></a> </div>
  <div class="account_meta account_logout account_meta_primary"><a id="logout" href="lib/ajax_admin.php?action=logout">退出</a></div>
      </div>
    </div>
  </div>
</div>