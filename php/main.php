<?php 
session_start();
header("Content-type: text/html; charset=utf-8");
require_once 'include/common.inc.php';
require_once 'data/app_session.php';

$query = $db->query("select  * from   {$tablepre}gongzhonghao where tid=$weite_uid order by tid desc");
$rsss=$db->fetch_array($query);
if(!$rsss) exit(); 

include 'web_head.php';
?>
<div class="upload-main">
  <div class="upload-box w1200" style="position:relative">
    <h3 style="font-weight:700">管理中心</h3>
    <div class="up-list">
      <div id="mainlist" >
	  
	  <div style="position:absolute; right:5px; top:20px; height:30px; line-height:30px;  background: #dc0000; color:#fff; text-align:right; padding:0px 15px; 
    -moz-border-radius: 5px;     
    -webkit-border-radius: 5px;   
    border-radius:5px;   ">有效期:<?=date("Y-m-d H:i:s",$rsss["startdateline"])?> 到 <?=date("Y-m-d H:i:s",$rsss["overdateline"])?></div>
	 
	  	  
        <div class="ps-wrap ps-index-conv2" style="height:320px">
          <div class="psb-index_01">
            <div class="con"><a href="member_app.php" title="相册管理" target="_blank">
              <dl class="">
                <dd class="psb-znps"></dd>
                <dt>
                  <h1>相册管理<span class="sx"></span></h1>
                  <p>用户制作的相册的查看浏览</p>
                </dt>
              </dl>
              </a>
			  <a href="member_openid.php" title="用户管理" target="_blank">
              <dl class="">
                <dd class="psb-yshy"></dd>
                <dt>
                  <h1>用户管理<span class="sx"></span></h1>
                  <p>查看关注用户的信息资料<br>
                  </p>
                </dt>
              </dl>
              </a>
			  
			  <a href="member_pics.php"  target="_blank">
              <dl   style="margin-right:0">
                <dd class="psb-qwps"></dd>
                <dt>
                  <h1>图片管理<span class="sx"></span></h1>
                  <p>审核查看违规图片</p>
                </dt>
              </dl>
              </a>
			  
			  <a href="member_music.php"  target="_blank">
              <dl   style="margin-right:0">
                <dd class="psb-music"></dd>
                <dt>
                  <h1>音乐管理<span class="sx"></span></h1>
                  <p>设置自己的音乐分类</p>
                </dt>
              </dl>
              </a>
			  </div>
          </div>
		  
		  
		   </div>
		  
		  
		  
		   <div class="ps-wrap ps-index-conv2" style="height:180px">
		
		
          <div class="psb-index_01">
            <div class="con">
			
			
			
			  
			  
			    <a href="member_qiniu.php"  target="_blank">
             <dl class=" ">
                <dd class="psb-yxps"></dd>
                <dt>
                  <h1>七牛设置<span class="sx"></span></h1>
                  <p>第三方上传插件</p>
                </dt>
              </dl>
              </a>
			  
			   
			    <a href="member_token.php" title="趣味配色" target="_blank">
             <dl class=" ">
                <dd class="psb-tsb"></dd>
                <dt>
                  <h1>公众号设置<span class="sx"></span></h1>
                  <p>公众号关联接口配置</p>
                </dt>
              </dl>
              </a>
			  </div>
          </div>
		  </div>
		  
		  
		  
		     <div class="ps-wrap ps-index-conv2" style="height:180px">
		
		
          <div class="psb-index_01">
            <div class="con">
			
			
			
			  
			  
			    <a href="member_info.php"  target="_blank">
             <dl class=" ">
                <dd class="psb-ctss"></dd>
                <dt>
                  <h1>密码修改<span class="sx"></span></h1>
                  <p>修改用户密码信息</p>
                </dt>
              </dl>
              </a>
			  
			   
			   
			  </div>
          </div>
		  
		  
		  
		  
         
        </div>
      </div>
    </div>
  </div>
</div>
<?php 
include 'web_foot.php';
?>
