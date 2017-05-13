<script>
function showLRC(u){
	var url="<?=$_WEITE['web_weburl']?>iweite_get_url.php?url="+u;
 		XMLHttp.sendReq('GET', url, '', function(objXMLHttp){
				var result = objXMLHttp.responseText;
				
				if(result.length == undefined || result.length == 0){
					objid("lyricBar_t").style.visibility = "hidden";
					e_music_player.addEventListener("timeupdate", function () { 
					}, false); 
				}else{
				
				var lyric=parseLyric(result);
				parsed = {};
				parsedids = {};
				var i = 0;
				var m = 0;
				for(var k in lyric){
					var txt = lyric[k];
					if(!txt)txt = "....";
					parsed[k] = {
						index:i,
						text:txt,
						top:k
					};
					parsedids[m] = {
						top:k
					};
					m++;
					i++;
					e_music_player.addEventListener("timeupdate", function () { 
					updateLyric()
					}, false); 
					//e_music_player.ontimeupdate = function(e) {
						//updateLyric()
					///}
				} 
				}
				 
 });

}

var text_temp;
function updateLyric(){
    var data =parsed;
	
    if(!data)return;
    var currentTime = Math.round(e_music_player.currentTime);
    var lrc = data[currentTime];
	
    if(!lrc)return;
	var index = lrc.index;
    var text =  lrc.text;
	var top = lrc.top;
	//console.log(parsedids);
    if(text != text_temp){
        locationLrc(lrc);
        text_temp = text;
    }
    function locationLrc(lrc){
		var t=parseInt(parsedids[index+1].top)-parseInt(parsedids[index].top);
		var tt=parseInt(currentTime)-parseInt(parsedids[index].top);
		
		
		var hh=lrc.text+"<span class='lyricMask' style='width: 0%; -webkit-animation:StretchleftIn0 "+t+"s linear "+tt+"s'>"+lrc.text+"</span>";
		objid("lyricBar_t").innerHTML =hh;
    }
}


function parseLyric(lrc) {
    var lyrics = lrc.split("\n");
    var lrcObj = {};
    for(var i=0;i<lyrics.length;i++){
        var lyric = decodeURIComponent(lyrics[i]);
        var timeReg = /\[\d*:\d*((\.|\:)\d*)*\]/g;
        var timeRegExpArr = lyric.match(timeReg);
        if(!timeRegExpArr)continue;
        var clause = lyric.replace(timeReg,'');

        for(var k = 0,h = timeRegExpArr.length;k < h;k++) {
            var t = timeRegExpArr[k];
            var min = Number(String(t.match(/\[\d*/i)).slice(1)),
                sec = Number(String(t.match(/\:\d*/i)).slice(1));
            var time = min * 60 + sec;
            lrcObj[time] = clause;
        }
    }
    return lrcObj;
}
showLRC("<?=$music?>");
</script>
<style>
.lyricBar {
  position: absolute;
  bottom:90px;
  left:0px;
   width:500px;
    position: absolute;
    overflow: hidden;
  text-align: center;
  font-size: 25px;
  z-index: 99999999; color:#FFFFFF
}
.lyricBar ul {
  list-style-type: none;
  margin: 0px;
  -webkit-margin-before: 0px;
  -webkit-margin-after: 0px;
  -webkit-margin-start: 0px;
  -webkit-margin-end: 0px;
  -webkit-padding-start: 0px;
}
.lyricBar span{
  white-space:nowrap;
  height: 30px;
  line-height:30px;
  position:relative;
  bottom: 0px;
  color: #fff; font-size:25px;
  text-shadow: 0 2px 2px rgba(0,0,0,.8);
}
.lyricBar .lyricMask{
  text-align: left;
  overflow: hidden;
  position: absolute;
  left: 0px;
  width: 0%;
  top:-1px;
  color: #6d55fe;
  text-shadow: 0 2px 1px #fff;
}

@-webkit-keyframes StretchleftIn0 {
    0% {width: 0%;}
    90% {width: 100%;}
    100% {width: 100%;}
}
@keyframes StretchleftIn0 {
    0% {width: 0%;}
    90% {width: 100%;}
    100% {width: 100%;}
}

@-webkit-keyframes StretchleftIn1 {
    0% {width: 0%;}
    90% {width: 100%;}
    100% {width: 100%;}
}
@keyframes StretchleftIn1 {
    0% {width: 0%;}
    90% {width: 100%;}
    100% {width: 100%;}
}


</style>
<div class="lyricBar" style="visibility: visible;">
     <ul>
		<li><span id=lyricBar_t></span></li>
	</ul>
</div>