<link rel="stylesheet" type="text/css" href="assets/css/menu.css" />
<div class="e-menu" id="e-menu" >
	<div class="e-menu-item" onClick="e_templates(1)">
		<div>选模板</div>
		<div class="e-opacity-back"></div>
	</div>
	<div class="e-menu-item" onClick="e_musics(2)">
		<div>选音乐</div>
		<div class="e-opacity-back"></div>
	</div>
	<div class="e-menu-item" onClick="e_pics(3)">
		<div>增删图</div>
		<div class="e-opacity-back"></div>
	</div>
	<div class="e-menu-item" onClick="e_words(4)">
		<div>写标题</div>
		<div class="e-opacity-back"></div>
	</div>
</div>
<div id="e-wind" style="display:none">
	<div id="e-wind-title">
		<div id="e-title-words">选择模板</div>
		<div id="e-wind-close" onClick="reflush()">×</div>
	</div>
	<div id="e-wind-content">
	
	<div id="e-content-1">
	<div id='e-template-menu'>
	
			<?
			$sql="select * from {$tablepre}template_class  order by sid desc,tid desc" ;
			$query = $db->query($sql);
			$i=0;
			while($rs=$db->fetch_array($query)){
			if(!$i){
			$tem_id=$rs["tid"];
		  ?>
			<div  id="e-template-type-c<?=$rs["tid"]?>" onclick="e_template_type('<?=$rs["tid"]?>')"><?=$rs["title"]?></div>
			<?
			}else{
			?>
			<div  id="e-template-type-c<?=$rs["tid"]?>"  style="color:rgb(214,66,90)" onclick="e_template_type('<?=$rs["tid"]?>')"><?=$rs["title"]?></div>
			<?
			}
			$i++;
			}
			?>
			</div>
		<div id='e-template-box' >
		<?
		$sql="select * from {$tablepre}template order by isok desc, sid desc,tid desc" ;
		$query=$db->query($sql);
		while($tem=$db->fetch_array($query)){
		?>
<div   id='template-c<?=$tem["tid"]?>' class="e-template-item"  onClick="e_template_click('<?=$tem["fdir"]?>')">
				<img src="<?=$tem["fpic"]?>">
				<span><?=$tem["title"]?></span>
			</div>
		<?
		}
		?>
		</div>
		
		<div class="e-content-bottom"></div>
	</div>
		<div id="e-content-2">
			<div id="e-music-menu">
				<?
				$is_openid_music=0;
				$rss= $db->fetch_first("select * from {$tablepre}openid_music  where gh='$gh'  limit 1");
				if(!$rss){
				
				$sql="select * from {$tablepre}music_class order by  sid desc,tid asc";
				$query=$db->query($sql);
				$i=0;
				while($rs=$db->fetch_array($query)){
				if(!$i){
					$index=$rs["tid"];
				}
				?>
				<div id="e-music-type-<?=$rs["tid"]?>" <? if($i){?> style="color:rgb(214,66,90)" <? } ?> onClick="e_music_type_click('<?=$rs["tid"]?>')"><?=$rs["title"]?></div>
				<?
				$i++;
				}
				}else{
				$is_openid_music=1;
				$sql="select * from {$tablepre}openid_music  where gh='$gh' order by  sid desc,tid asc";
				$query=$db->query($sql);
				$i=0;
				while($rs=$db->fetch_array($query)){
				if(!$i){
					$index=$rs["tid"];
				}
				?>
				<div id="e-music-type-<?=$rs["tid"]?>" <? if($i){?> style="color:rgb(214,66,90)" <? } ?> onClick="e_music_type_click('<?=$rs["tid"]?>')"><?=$rs["title"]?></div>
				<?
				$i++;
				}
				}
				?>
				<div id='more_music' style='position:absolute;width:80px;height:40px;border-radius:5px;margin-top:5px;left:410px;color:white;background-color:#44B549;border-radius:5px;font-size:20px;line-height:40px;text-align:center;padding-left:0px;' onclick='search_musicshow()'>搜索</div>
				
	    	</div>
			<div id="e-mp3box" onscroll="e_more_music()">
			
			</div>
			
    	</div>
    	<div id="e-content-3" style="z-index:999999999">
    		<div class="e-addpic-btn" onClick="e_add_pic()">新增图片</div>
    		<div class="e-addpic-tip" id="e-addpic-tip">
    			<span>返回公众号输入界面，并点击下方”添加图片“按钮，来增加图片。</span>
    			<img src="assets/images/help2.jpg">
    			<span>确定增加图片吗？</span>
    			<div onClick="e_addpic_ok()">确定</div>
    			<div onClick="e_addpic_cancle()">取消</div>
    		</div>
    		<div id="e-pics-content"></div>
    		<div class="e-addpic-btn" style="margin-bottom:190px" onClick="reflush()">完成</div>
    	</div>
    	<div id="e-content-4">
    		
    		<div class="e-share-title">
    			<textarea id="e-share-title" maxlength="15" rows="1" placeholder="分享标题(限15字)..."></textarea>
    		</div>
    		<div class="e-share-words">
    			<textarea id="e-share-words" maxlength="30" rows="3" placeholder="分享文字(限30字)..."></textarea>
    		</div>
    		<div class="e-share-ok" onClick="e_set_desc()">确定</div>
    	</div>
	</div>
</div>


<div id='search_music' style='position:absolute;width:500px;height:815px;background-color:white;top:0px;left:0px;z-index:10003;display:none;'>
	<div style='position:relative;width:500px;height:60px;background-color:#44B549;color:white;padding-left:20px;font-size:25px;line-height:60px;'>搜索音乐</div>
	<div style='color:white;font-size:40pt;line-height:60px;position:absolute;width:60px;height:60px;top:0px;left:440px;' onclick='close_searchmusic()'>×</div>
	<input id='search_musicname' style='width:380px;height:50px;position:relative;margin:20px 0px 0px 15px;font-size:20px;padding-left:5px;' placeholder='请输入您想查找的歌曲名称'/>
	<div id='search_music_submit' style='position:absolute;width:87px;color:white;background-color:#44B549;height:50px;left:403px;top:81px;font-size:23px;text-align:center;line-height:50px;border-radius:10px;' onclick='search_music()'>搜索</div>
	<div id='search_music_result' style='position:relative;margin: 20px 0px 0px 20px;width:460px;height:600px;overflow:auto;'>
		<div id='search_music_result_div' style='display:none;border:0px;' class="e-mp3box-item">
		</div>
	</div>

</div>

<link type="text/css" rel="stylesheet" href="assets/css/guanzhu.css?ver=3" /> 
<link rel="stylesheet" type="text/css" href="assets/css/buttons.css" />
<script type="text/javascript" src="assets/js/xmlHttp.js"></script>


<script type="text/javascript">
	function objid(id)
	{
		return document.getElementById(id);
	}

	function reflush()
	{
		if(typeof(reload_scene) == "undefined")
		{
			location.reload();
		}
		else
		{
			e_close_wind();
			reload_scene();
		}
	}

	function e_close_wind()
	{
		tool_close();
		objid('e-wind').style.display = 'none';
		
		objid("lyricBar_t").innerHTML ='';
		objid("lyricBar_t").style.visibility = "visible";
		if(objid('e-player'))
		{
			objid('e-player').pause();
		}
		 
	}

	var titles = ["选模板","选音乐","更换图片","写分享的标题"];

	function e_open_wind(index)
	{
		tool_open();

		var wind 					= objid('e-wind');
		wind.style.display 			= 'block';

		for(var i=1;i<=4;i++)
		{
			objid('e-content-' + i).style.display  = 'none';
		}

		objid('e-content-' + index).style.display  = 'block';
	
		objid('e-title-words').innerHTML = titles[index-1];
	}

	//

	//音乐
	var e_music_page   = 1;        
	var e_music_num    = 10; 
	var e_music_header = '';
	var e_music_type   = 'pop';


	function tool_open()
	{
		document.ontouchmove = null;
		objid("lyricBar_t").style.visibility = "hidden";
	}

	function tool_close()
	{
		objid("lyricBar_t").innerHTML ='';
		document.ontouchmove = function(e)
		{
            e.preventDefault();
        }
	}	


	function e_musics(index)
	{
		e_close_wind();
		e_open_wind(index);

		e_music_type  = '<?=$index?>';

		// objid('e-music-type-hot').style.color = 'rgb(214,66,90)';
				
				<?
				if($is_openid_music){
				?>
					<?
					$sql="select * from {$tablepre}openid_music where gh='$gh' order by  sid desc,tid asc";
					$query=$db->query($sql);
					$i=0;
					while($rs=$db->fetch_array($query)){
					?>
					objid('e-music-type-<?=$rs["tid"]?>').style.color = 'rgb(214,66,90)';
					<?
					}
					?>
				<?
				}else{
				?>
				
					<?
					$sql="select * from {$tablepre}music_class order by  sid desc,tid desc";
					$query=$db->query($sql);
					$i=0;
					while($rs=$db->fetch_array($query)){
					?>
					objid('e-music-type-<?=$rs["tid"]?>').style.color = 'rgb(214,66,90)';
					<?
					}
					?>
				
				<?
				}
				?>
				
				
			objid('e-music-type-<?=$index?>').style.color = 'white';

		e_music_page  = 1;

		objid('e-mp3box').innerHTML = '';

		var url = "data/music_api.php?";
	    url = url + 'type=<?=$index?>';
	    url = url + "&start=" + e_music_page;
	    url = url + "&count=" + e_music_num;
url	= url + "&openid=" + e_openid;
url	= url + "&is_openid_music=" + <?=$is_openid_music?>;
	    XMLHttp.sendReq('GET', url, '', e_music_callback);
	}

	function e_more_music()
	{
		var obj = objid('e-mp3box');
		if (e_music_type == 'hot')
			return;
		if(obj.scrollTop + obj.clientHeight + 10 >= obj.scrollHeight)
		{
			var url = "data/music_api.php?";
		    url = url + 'type=' + e_music_type;
		    url = url + "&start=" + e_music_page;
		    url = url + "&count=" + e_music_num;
			url	= url + "&openid=" + e_openid;
			url	= url + "&is_openid_music=" + <?=$is_openid_music?>;
			url	= url + "&sn=" + e_gh;
			
		    XMLHttp.sendReq('GET', url, '', e_music_callback);
		}
	}

	function e_music_type_click(type)
	{
		e_music_type = type;
		e_music_page = 1;

		objid('e-mp3box').innerHTML = '';

				<?
				if($is_openid_music){
				$sql="select * from {$tablepre}openid_music where gh='$gh' order by  sid desc,tid asc";
				$query=$db->query($sql);
				$i=0;
				while($rs=$db->fetch_array($query)){
				?>
				objid('e-music-type-<?=$rs["tid"]?>').style.color = 'rgb(214,66,90)';
				<?
				}
				}else{
				$sql="select * from {$tablepre}music_class order by  sid desc,tid asc";
				$query=$db->query($sql);
				$i=0;
				while($rs=$db->fetch_array($query)){
				?>
				objid('e-music-type-<?=$rs["tid"]?>').style.color = 'rgb(214,66,90)';
				<?
				}
				}
				?>
		objid('e-music-type-' + type).style.color = 'white';
		var url	= "data/music_api.php?";
	    url	= url + 'type=' + e_music_type;
	    url	= url + "&start=" + e_music_page;
	    url	= url + "&count=" + e_music_num;
		url	= url + "&openid=" + e_openid;
		url	= url + "&is_openid_music=" + <?=$is_openid_music?>;
		url	= url + "&sn=" + e_gh;
	    XMLHttp.sendReq('GET', url, '', e_music_callback);
	}




	function e_music_callback(objXMLHttp)
	{
		if(objXMLHttp.responseText == "0")
		{
		    if(objid('e-more-music'))
		    {
		    	objid('e-mp3box').removeChild(objid('e-more-music'));
		    }

		    return ;
		}

		var music_list = JSON.parse(objXMLHttp.responseText);

		if(objid('e-more-music'))
		{
			objid('e-mp3box').removeChild(objid('e-more-music'));
		}

		var mp3box  = objid('e-mp3box');

		var oks_num = document.getElementsByClassName('e-mp3box-item-ok').length;

		for(var i=0; i<music_list.length; i++)
		{
			var one = music_list[i];
			var title = one.title;
			var url = one.url;
			var musicname = one.musicname;
			var div = document.createElement('div');
			
			div.setAttribute('class','e-mp3box-item');

			var htm_txt = '';

			htm_txt += '<div class="e-mp3box-item-img"  id="e-music-img-'+(i+oks_num)+'"><img src="assets/images/yinfu.png"></div>';

			htm_txt += '<div class="e-mp3box-item-title" onclick="e_music_title_click(\''+url+'\','+(i+oks_num)+')">'+title+'</div>';
			
			htm_txt += '<div class="e-mp3box-item-ok" id="e-music-ok-'+(i+oks_num)+'" onclick="e_music_select(\''+url+'\')">确定</div>';

			div.innerHTML = htm_txt;

			mp3box.appendChild(div);
		}

		if(music_list.length == e_music_num)
		{
			var div = document.createElement('div');
			div.setAttribute('class','e-mp3box-item');
			div.id  = 'e-more-music';

			div.innerHTML = '<div class="e-mp3box-item-title" style="text-align:center;width:90%">加载中...</div>';

			mp3box.appendChild(div);
		}

		e_music_page++;
	}

	function e_music_title_click(url,index)
	{
		var oks = document.getElementsByClassName('e-mp3box-item-ok');
		
		for(var i=0;i<oks.length;i++)
		{
			objid('e-music-ok-' + i).style.display = 'none';
			objid('e-music-img-' + i).style.webkitAnimation = '';
		}

		objid('e-music-ok-' + index).style.display = 'block';
		//objid('e-music-img-' + index).style.webkitAnimation = 'zhuan 2.5s linear infinite';

		////暂停音乐,这里也应该清理掉所有的歌词显示，开始新的
		if(e_music_player != null)
		{
		    e_music_player.pause();
		    if(objid('sound_image'))
		    {
		        objid('sound_image').style.webkitAnimation     = "";
		    }
		}


		///播放器不存在的话则建立播放器
		if(objid('e-player') == null)
	    {
	        var player  = document.createElement('audio');
	        player.id   = 'e-player';
	        player.src  = url;
	        player.loop = 'loop';
	        player.play();
	        document.body.appendChild(player);
			
			
	    }
		else if(objid('e-player').src == url)
		{
			////如果当前的和选择一样，暂停了在播放
		    if(objid('e-player').paused)
		    {
		        objid('e-player').play();
				
		    }
		    else
		    {	
		        objid('e-player').pause();
				objid('e-music-img-' + index).style.webkitAnimation = '';
		    }
			
		}
		else
		{
			//不一样的话就重新播放
		    objid('e-player').src = url;
		    objid('e-player').play();
			
			
		}
	}

	function e_music_select(url)
	{
		e_music_url = url;
		
		if(typeof(e_music_url) == "undefined")
		{
			///音乐不存在选择失败吧这个是
			var url = "app.php?";
		    url	= url + 'type=set_music';
		    url	= url + "&tid=" + e_bookid;
		    url	= url + "&music=" + encodeURIComponent(e_music_url);
		    url	= url + "&openid=" + e_openid;
			url	= url + "&sn=" + e_gh;
			
		    XMLHttp.sendReq('GET', url, '', function(){
		    	//location.reload();
		    });
		}
		else
		{
			///如果音乐存在呢
			tool_close();

			if(e_music_player)
			{	
				if(!objid('cardsound'))
				{
					create_music(objid('e-player').src);
					e_music_player.play();
				}

				showLRC(objid('e-player').src);
				e_music_player.src = objid('e-player').src;
				e_music_player.play();
				objid('sound_image').style.webkitAnimation     = "zhuan 1s linear infinite";
				
			}
			else
			{
				create_music(e_music_url);
			}
			///显示新歌词
			
			
			
			e_close_wind();
			var url = "app.php?";
		    url	= url + 'type=set_music';
		    url	= url + "&tid=" + e_bookid;
			 url= url + "&openid=" + e_openid;
		    url	= url + "&music=" + encodeURIComponent(e_music_url);
		    url	= url + "&sn=" + e_gh;
			
		    XMLHttp.sendReq('GET', url, '', function(){
		    	console.log(url)
		    });
		}

		
		
	}

	//删图
	function e_pics(index)
	{
		e_close_wind();
		e_open_wind(index);

		var obj = objid('e-pics-content');

		obj.innerHTML = '';

		for(var i = 0; i<slider_images_url.length;i++)
		{
			var div = document.createElement('div');
			div.id  = 'e-del-pic-' + i;
			div.setAttribute('class','e-del-pic');
			div.style.backgroundImage = 'url('+ slider_images_url[i] +')';

			var photo_id  = slider_images_url[i].replace("<?=$_WEITE['web_weburl']?>","");
			div.innerHTML = '<div class="e-del-ok" onclick="e_del_pic('+i+', \'' + photo_id + '\')"><div class="e-opacity-back"></div><div>×</div></div>';
			obj.appendChild(div);
		}

		obj.style.overflow = 'auto';

		var parent = document.getElementById("e-content-3");
		parent.style.overflow = 'auto';
	}

	function e_add_pic()
	{
		objid('e-addpic-tip').style.display = 'block';
	}

	function e_addpic_ok()
	{
		var url = "app.php?";
	    url = url + 'type=add_photo';
	    url = url + "&tid=" + e_bookid;
		url	= url + "&sn=" + e_gh;
	    XMLHttp.sendReq('GET', url, '', function(){
	    	wx.closeWindow();
	   });
		
	}

	function e_addpic_cancle()
	{
		objid('e-addpic-tip').style.display = 'none';
	}

	function e_del_pic(index, photo_id)
	{
		if(!confirm('确定要删除该照片吗？'))
		{
			return;
		}

		var obj = objid('e-pics-content');
		obj.removeChild(objid('e-del-pic-' + index));
		var photo_urls = slider_images_url.splice(index,1);
		
		on_weixin_share();
		//reset_scene();
		var url = "app.php?";
	    url	= url + 'type=delete_photo';
		url	= url + "&openid=" + e_openid;
	    url	= url + "&tid=" + e_bookid;
	    url	= url + "&photoid=" + photo_id;
	  url	= url + "&sn=" + e_gh;

	    //location.href = url;
	    XMLHttp.sendReq('GET', url, '', function(){});
	}

	//标题
	function e_words(index)
	{
		e_close_wind();
		e_open_wind(index);
		objid('e-share-words').value =e_ftitle;
		objid('e-share-title').value =e_desc;
	}

	function e_set_desc()
	{
		var ftitle= objid('e-share-title');
		var fdes = objid('e-share-words');
		
		
		
			if(ftitle.value == "")
			{
				alert('分享标题不能为空噢~');
				return false;
			}
			
			if(fdes.value == "")
			{
				alert('分享文字不能为空噢~');
				return false;
			}
		
		
			
			 e_desc = ftitle.value;
			 e_ftitle= fdes.value;
			
			
			on_weixin_share();
			document.title = e_desc;

			var url = "app.php?";
		    url = url + 'type=set_desc';
		    url = url + "&tid=" + e_bookid;
		    url = url + "&fdes=" + encodeURIComponent(e_ftitle);
			url = url + "&ftitle=" + encodeURIComponent(e_desc);
		    url	= url + "&openid=" + e_openid;
			url	= url + "&sn=" + e_gh;
			//console.log(url)
			//alert(url)
		    XMLHttp.sendReq('POST', url, '', function(){
		    	reflush();
		    });
		
		//e_close_wind();
	}
	
	
	function search_musicshow()
	{
		objid('search_music').style.display='block';
		var width = document.body.clientWidth;
		var height = document.body.clientHeight;

		var div_height = 500/(width/height);
		objid('search_music_result').style.height = div_height-170 +'px';

	}

		function trim(str)
	{ 
		return str.replace(/(^\s*)|(\s*$)/g,'');
	} 

	music_xml = new XMLHttpRequest();
	function search_music () 
	{
		var word = objid('search_musicname').value;
		
		word = trim(word);
		if(word == ''|| word == null || word == undefined)
		{
			alert('输入不能为空');
		}
		word = encodeURIComponent(word);
		url = 'data/music_api.php?music='+word;

		music_xml.open('GET',url, true);
		music_xml.onreadystatechange = SearchMusic_onCallback;
		music_xml.setRequestHeader('Content-type', 'application/x-www-form-urlencoded'); 
		music_xml.send(null);

	}

	function SearchMusic_onCallback()
	{
		if(music_xml.readyState ==4)
		{
			if(music_xml.status == 200)
			{
				var result = music_xml.responseText;
				result = JSON.parse(result);
				var obj = objid('search_music_result_div');
				// alert(result.length)
				if(result.length == undefined || result.length == 0)
				{	
					var music_value = objid('search_musicname').value;
					music_value = trim(music_value);
					obj.innerHTML = '<div style="line-height:30px;margin-top:10px;font-size:16px;"><p style="font-size:22px;line-height30px;">找不到与<b>"'+music_value+'"</b>相关音乐</p>请确认歌曲名称是否准确？我们已将该音乐记录下来，并会在第一时间添加在音乐库中，请及时留意音乐库的更新。</div>';
					obj.style.display = 'block';
				}
				else
				{
					var htm_txt = '';
					for(var i=0;i<result.length;i++)
					{
						htm_txt += '<div class="e-mp3box-item"><div class="e-mp3box-item-img"><img src="assets/images/yinfu.png"></div><div id="search_music_result_text" class="e-mp3box-item-title" onclick="search_music_title_click('+"'"+result[i]['url']+"'"+','+i+')">'+result[i]['title']+'</div><div id="search_music_btn'+i+'" class="search-mp3box-item-ok" id="search-music-ok-'+i+'" onclick="search_music_select('+"'"+result[i]['url']+"'"+','+i+')">确定</div></div>';
					}
					obj.innerHTML = htm_txt;
					obj.style.display = 'block';
			// htm_txt += '<div class="e-mp3box-item-img"  id="e-music-img-'+(i+oks_num)+'"><img src="http://7oxk50.com2.z0.glb.qiniucdn.com/icon/yinfu.png"></div>';

			// htm_txt += '<div class="e-mp3box-item-title" onclick="e_music_title_click(\''+url+'\','+(i+oks_num)+')">'+title+'</div>';
			
			// htm_txt += '<div class="e-mp3box-item-ok" id="e-music-ok-'+(i+oks_num)+'" onclick="e_music_select(\''+musicname+'\')">确定</div>';

			// 		var str = '<div class="e-mp3box-item-img"><img src="http://7oxk50.com2.z0.glb.qiniucdn.com/icon/yinfu.png"></div><div id="search_music_result_text" class="e-mp3box-item-title" onclick="search_music_title_click('+"'"+result['url']+"'"+')">'+result['title']+'</div><div id="search_music_result_btn" class="e-mp3box-item-ok" id="e-music-ok-0" onclick="search_music_select('+"'"+result['musicname']+"'"+')">确定</div>';
			// 		obj.innerHTML = str;
			// 		obj.style.display = 'block';					
				}

				// objid('search_music_result_text').innerHTML = result['title'];
				// objid('search_music_result_text').onclick="e_music_title_click('"+result['url']+"',0)";
				// objid('search_music_result_btn').onclick = "e_music_select('"+result['musicname']+"')";
				// objid('search_music_result').innerHTML = result;
			}
			else
			{
				console.log('Error: '+ music_xml.status)
			}
		}
	}
	function search_music_title_click(url,index)
	{
		var oks = document.getElementsByClassName('search-mp3box-item-ok');
		
		for(var i=0;i<oks.length;i++)
		{
			oks[i].style.display = 'none';
		}
		objid('search_music_btn'+index).style.display = 'block';
		// objid('e-music-ok-' + index).style.display = 'block';
		//objid('e-music-img-' + index).style.webkitAnimation = 'zhuan 2.5s linear infinite';

		if(e_music_player != null)
		{
		    e_music_player.pause();

		    if(objid('sound_image'))
		    {
		        objid('sound_image').style.webkitAnimation = "";
		    }
		}

		if(objid('e-player') == null)
	    {
	        var player  = document.createElement('audio');
	        player.id   = 'e-player';
	        player.src  = url;
	        player.loop = 'loop';
	        player.play();
	        document.body.appendChild(player);
			
	    }
		else if(objid('e-player').src == url)
		{
			
		    if(objid('e-player').paused)
		    {
		        objid('e-player').play();
				
		    }
		    else
		    {
		        objid('e-player').pause();
				objid('e-music-img-' + index).style.webkitAnimation = '';
		    }
		}
		else
		{
		    objid('e-player').src = url;
		    objid('e-player').play();
		}
	}



	function search_music_select(url)
	{
		objid('search_music').style.display = 'none';
		e_music_url = url;
		
		if(typeof(e_music_url) == "undefined")
		{
		
			var url = "app.php?";
		    url	= url + 'type=set_music';
		    url	= url + "&openid=" + e_openid;
		    url	= url + "&tid=" + e_bookid;
		    url	= url + "&music=" + encodeURIComponent(e_music_url);
url	= url + "&sn=" + e_gh;
		    XMLHttp.sendReq('GET', url, '', function(){
		    	//location.reload();
		    });
		}
		else
		{
			tool_close();

			if(e_music_player)
			{
				if(!objid('cardsound'))
				{
					create_music();
					e_music_player.play();
				}
				showLRC(objid('e-player').src);
				e_music_player.src = objid('e-player').src;
				e_music_player.play();
				objid('sound_image').style.webkitAnimation     = "zhuan 1s linear infinite";
			}
			else
			{
				create_music(e_music_url);
			}
			
			//objid("lyricBar_t").innerHTML ='';
			//showLRC(e_music_url);
			//alert(e_music_url)
			e_close_wind();
			var url = "app.php?";
		    url	= url + 'type=set_music';
		    url	= url + "&openid=" + e_openid;
		    url	= url + "&tid=" + e_bookid;
		    url	= url + "&music=" + encodeURIComponent(e_music_url);
			url	= url + "&sn=" + e_gh;
		    XMLHttp.sendReq('GET', url, '', function(){
		    	//location.reload();
		    });
		}
	
		
	}

	function close_searchmusic()
	{
		objid('search_music').style.display = 'none';
		objid('search_music_result_div').innerHTML = '';
		e_music_player.play();
		reflush();
	}
	
	
	function e_template_type(type)
	{
		var template_box = objid('e-template-box');
type2=type
		type="c"+type
		
		<?
		$x="";
		$x1="";
			$sql="select * from {$tablepre}template_class  order by sid desc,tid desc" ;
			$query = $db->query($sql);
			while($rs=$db->fetch_array($query)){
			$y="";
			$x1="'c".$rs["tid"]."':[";
			
				$sql2="select * from {$tablepre}template where classid=$rs[tid] order by isok desc, sid desc,tid desc" ;
				$query2=$db->query($sql2);
				while($tem2=$db->fetch_array($query2)){
					$y.="'c".$tem2["tid"]."',";
				}
				
				if($y){
					$y = substr($y,0,strlen($y)-1); 
				}
				
			$x.=$x1.$y."],";
			}
			if($x){
				$x = substr($x,0,strlen($x)-1); 
			}
		  ?>
		
			var template_arr = {<?=$x?>};
	
			var all_templates = document.getElementsByClassName('e-template-item')
			for(var i =0;i<all_templates.length;i++)
			{
				all_templates[i].style.display = 'none';
			}
		
			for (var i =0;i<template_arr[type].length;i++)
			{
				objid('template-'+template_arr[type][i]).style.display = 'block';
			}

			for(key in template_arr)
			{
				objid('e-template-type-'+key).style.color = 'rgb(214,66,90)';
			}
		
			objid('e-template-type-c<?=$tem_id?>').style.color = 'rgb(214,66,90)';
			objid('e-template-type-'+type).style.color = '#fff';
		
	}
	
	function e_templates(index)
	{
		e_close_wind();
		e_open_wind(index);
		if(index==1){
			 e_template_type(<?=$tem_id?>)
		}
	
	}
	
	function e_template_click(scene)
	{
		
		var url = 'app.php?type=set_style&tid={1}&scene={2}&openid={3}&sn={4}';

		url = url.replace('{1}', e_bookid);
		url = url.replace('{2}', scene);
		url = url.replace('{3}', e_openid);
		url = url.replace('{4}', e_gh);
		
		location.href = url;
	}
	

</script>
<?
if($_WEITE['web_islrc']){
?>
<?
include 'app_menu_lrc.php';
?>
<?
}else{
?>
<script>
function showLRC(u){

}
</script>
<div class="lyricBar" style="visibility:hidden;">
     <ul>
		<li><span id=lyricBar_t></span></li>
	</ul>
</div>
<?
}
?>
<?
$db->close();
?>