<?php 
session_start();
header("Content-type: text/html; charset=utf-8");
require_once 'include/common.inc.php';
?>
<?php 
include 'web_head.php';
?>
<div class="banner">
  <div class="banner-center">
    <div class="offical">
      <p class="p1">音乐相册 ，一键制作！</p>
      <p class="p2">多种模板，随心选择 ，海量音乐，随意替换</p>
      
    </div>
  </div>
</div>

<div class="book">
  <div class="bookright">
    <p class="why">为什么要用音乐相册</p>
    <p class="xiaoguo">这是一个需要宣泄的时代，我快乐！我悲伤！<br>
      纯粹的文字已经不足以表达我们的情感；<br>
      智能相册一键制作，永久的保存。</p>
    <p class="desgin">已有<span>48973</span>在使用长寿俱乐部音乐相册</p>
  </div>
</div>
<div class="line"></div>

<div class="step">
  <p>使用教程</p>
  <dl class="fl">
    <dt><img src="assets/index/images/step01.jpg"  /><span class="step-icon"></span></dt>
    <dd><span class="fl number">step 1 </span><span class="fl">:关注官方公众号</span></dd>
  </dl>
  <dl class="fl">
    <dt><img src="assets/index/images/step02.jpg"  /><span class="step-icon"></span></dt>
    <dd><span class="fl number">step 2 </span><span class="fl">:开始，输入字母"N"开始图片</span></dd>
  </dl>
  <dl class="fl">
    <dt><img src="assets/index/images/step03.jpg"  /></dt>
    <dd><span class="fl number">step 3 </span><span class="fl">:完成，字母"F"查看相册效果</span></dd>
  </dl>
</div>

<div class="con-wrap" id="yj">
  <div class="con">
  <a name="mb" id=mb></a>
  
    <div class="list-wrap ">
      <div class="list-box w1200 ">
	  <?
		$sql="select * from {$tablepre}template order by sid desc,tid desc" ;
		$query = $db->query($sql);
		$i=1;
		while($rs=$db->fetch_array($query)){
		$logo=$_WEITE['web_weburl']."demo.php?tid=".$rs["tid"];
		  ?>
        <div class="list fl"  style="position:relative" rel=<?=$rs["tid"]?> >
			<img src="<?=$rs["fpic"]?>" />
          <div class="bottom" >
            <p><?=$rs["title"]?></p>
          </div>
		  <p  id=p<?=$rs["tid"]?> style="display:none; width:180px; height:160px; background:#FF9966; padding:0px; position:absolute; left:-5px; top:8px">
		  
		</p>
		<script> 
			$("#p<?=$rs["tid"]?>").qrcode({
                      render: "canvas", //table方式
                      width: 150, //宽度
                      height:150, //高度
                      text: "<?=$logo?>"
                });
		</script>
        </div>
		
		<?
		  $i++;
		 }
		 ?>
		</div>
      <div style="clear:both;width:100%;height:20px"></div>
    </div>
  
  </div>
</div>

<script type="text/javascript" charset="utf-8">
  $(function() {
	
		$('.list').mouseover(function(){
			var id=$(this).attr("rel");
			$("#p"+id).show();
		});	
	
		 $('.list').mouseout(function(){
			var id=$(this).attr("rel");
			$("#p"+id).hide();
		 });
	 
});
</script>


<?php 

include 'web_foot.php';
?>