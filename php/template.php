<?php 
session_start();
header("Content-type: text/html; charset=utf-8");
require_once 'include/common.inc.php';
?>
<?php 
include 'web_head.php';
?><style>
.top{padding:20px  30px 30px 30px;border-bottom:1px solid #e8e8e8;}
</style>

     <div class="top"></div>
 

  <div class="con " >
  
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