<?
$p=$_WEITE['web_pic_url']."dielianhua/";
?>
<style type="text/css">
	
*
{
    padding: 0px;
    margin: 0px;
    -webkit-box-sizing: border-box;
}

body
{
    /*background-color: black;*/
}

#container
{
    width: 500px;
    height: 815px;
    position: absolute;
    overflow: hidden;
}
#container > div,#container >img
{
    position: absolute;
}

#shuzhi
{
    left: -30px;
    top: 109px;
    -webkit-transform-origin: 2.8% 92%;
    -webkit-transform: rotate(-74deg);
    z-index: 10;
}
#hudie
{
    left: 193px;
    top: 83px;
    width: 50px;
    height: 50px;
    -webkit-transform: translate(0px,0px) rotate(41deg);
    z-index: 10;
}
#hudie > img,#hudie>div
{
    position: absolute;
}
#linekuang
{
    width: 368px;
    height: 46px;
    left:87px;
    top:622px;
    overflow: hidden;
    opacity: 0;
}
#div1h
{
    width: 450px;
    height: 300px;
    left: 30px;
    top: 217px;
    opacity: 0;
}
#div1v
{
    width: 300px;
    height: 450px;
    left: 100px;
    top: 95px;
}
.boxh
{
    width: 419px;
    height: 279px;
    left: 11px;
    top: 11px;
    overflow: hidden;
    position: absolute;
    border-radius: 0px 40px 0px 0px;
}
.boxv
{
    width: 292px;
    height: 438px;
    left: 7px;
    top: -2px;
    overflow: hidden;
    position: absolute;
    border-radius: 40px 0px 0px 0px;
}
#div2h
{
    width: 450px;
    height: 300px;
    left: 30px;
    top: 217px;
    -webkit-transform: rotate(-10deg);
    opacity: 0;
}
#div2v
{
    width: 300px;
    height: 450px;
    left: 100px;
    top: 135px;
    -webkit-transform: rotate(-10deg);
}
#div3h
{
    width: 450px;
    height: 300px;
    left: 30px;
    top: 217px;
    -webkit-transform: rotate(9deg);
    opacity: 0;
}
#div3v
{
    width: 300px;
    height: 450px;
    left: 100px;
    top: 131px;
    -webkit-transform: rotate(3deg);
    opacity: 0;
}
#div4h
{
    width: 450px;
    height: 300px;
    left: 30px;
    top: 217px;
    -webkit-transform: rotate(0deg);
    opacity: 0;
}
#div4v
{
    width: 300px;
    height: 450px;
    left: 100px;
    top: 95px;
}
#div5h
{
    width: 450px;
    height: 300px;
    left: 30px;
    top: 217px;
    -webkit-transform: rotate(7deg);
}
#div5v
{
    width: 300px;
    height: 450px;
    left: 90px;
    top: 147px;
    -webkit-transform: rotate(9deg);
    opacity: 0;
}
</style>
<style type="text/css">
@-webkit-keyframes shuzhi_in
{
    from  {-webkit-transform: rotate(-74deg);}
    to    {-webkit-transform: rotate(0deg);}
}
@-webkit-keyframes shuzhi_out
{
    from  {-webkit-transform: rotate(0deg);}
    to    {-webkit-transform: rotate(-74deg);}
}
@-webkit-keyframes hudie_in
{
    to    {-webkit-transform: translate(0px,0px) rotate(41deg);}
    from  {-webkit-transform: translate(-262px,185px) rotate(41deg);}
}
@-webkit-keyframes fadein
{
    from  {opacity: 0}
    to    {opacity: 1}
}
@-webkit-keyframes fadeout
{
    from  {opacity: 1}
    to    {opacity: 0}
}
@-webkit-keyframes hudie_out
{
    0%   {-webkit-transform: translate(0px,0px) rotate(41deg);}
    100%  {-webkit-transform: translate(-96px,31px) rotate(-24deg);}
}
@-webkit-keyframes hudie_out1
{
    from  {-webkit-transform: translate(-96px,31px) rotate(-24deg);}
    to    {-webkit-transform: translate(-281px,-101px) rotate(-57deg);}
}
@-webkit-keyframes hudieying
{
    0%   {-webkit-transform: translate(0px,0px);}
    100%  {-webkit-transform: translate(12px,-19px);}
}
@-webkit-keyframes hudieying1
{
    100%   {-webkit-transform: translate(0px,0px);}
    0%  {-webkit-transform: translate(12px,-19px);}
}
@-webkit-keyframes linekuang_in
{
    from  {-webkit-transform: translate(-368px,0px);opacity: 1}
    to    {-webkit-transform: translate(0px,0px);opacity: 1}
}
@-webkit-keyframes linekuang_out
{
    from  {-webkit-transform: translate(0px,0px);opacity: 1}
    to    {-webkit-transform: translate(368px,0px);opacity: 1}
}
@-webkit-keyframes linekuang1_in
{
    from  {-webkit-transform: translate(360px,0px);}
    to    {-webkit-transform: translate(0px,0px);}
}
@-webkit-keyframes linekuang1_out
{
    from  {-webkit-transform: translate(0px,0px);}
    to    {-webkit-transform: translate(-368px,0px);}
}
@-webkit-keyframes xin_in
{
    0%   {-webkit-transform: scale(0);}
    80%  {-webkit-transform: scale(1.1);}
    100% {-webkit-transform: scale(1);}
}
@-webkit-keyframes xin_out
{
    100%   {-webkit-transform: scale(0);}
    20%  {-webkit-transform: scale(1.1);}
    0% {-webkit-transform: scale(1);}
}
@-webkit-keyframes xin1_in
{
    0%   {-webkit-transform: scale(-0,0);}
    80%  {-webkit-transform: scale(-1.1,1.1);}
    100% {-webkit-transform: scale(-1,1);}
}
@-webkit-keyframes xin1_out
{
    100%   {-webkit-transform: scale(-0,0);}
    20%  {-webkit-transform: scale(-1.1,1.1);}
    0% {-webkit-transform: scale(-1,1);}
}
@-webkit-keyframes div1_in
{
    from  {-webkit-transform: scale(1.15) rotate(10deg);opacity: 0}
    to    {-webkit-transform: scale(1) rotate(0deg);opacity: 1}
}
@-webkit-keyframes div1_out
{
    from  {-webkit-transform: scale(1) rotate(0deg);opacity: 1}
    to    {-webkit-transform: scale(1) rotate(0deg);opacity: 0}
}
@-webkit-keyframes div2_in
{
    from  {-webkit-transform: scale(1.05) rotate(-20deg);opacity: 0;}
    to    {-webkit-transform: scale(1) rotate(-10deg);opacity: 1}
}
@-webkit-keyframes div2_out
{
    from  {-webkit-transform: scale(1) rotate(-10deg);opacity: 1}
    to    {-webkit-transform: scale(1) rotate(-10deg);opacity: 0}
}
@-webkit-keyframes div3v_in
{
    from  {-webkit-transform: scale(1.05) rotate(15deg);opacity: 0}
    to    {-webkit-transform: scale(1) rotate(3deg);opacity: 1}
}
@-webkit-keyframes div3v_out
{
    from  {-webkit-transform: scale(1) rotate(3deg);opacity: 1}
    to    {-webkit-transform: scale(1) rotate(3deg);opacity: 0}
}
@-webkit-keyframes div3h_in
{
    from  {-webkit-transform: scale(1.05) rotate(15deg);opacity: 0}
    to    {-webkit-trasnform: scale(1) rotate(9deg);opacity: 1}
}
@-webkit-keyframes div3h_out
{
    from  {-webkit-trasnform: scale(1) rotate(9deg);opacity: 1}
    to    {-webkit-trasnform: scale(1) rotate(9deg);opacity: 0}
}
@-webkit-keyframes zhiye_in
{
    from  {-webkit-transform:translate(-187px,5px) scale(-0.7,0.7) rotate(225deg);opacity: 0}
    to    {-webkit-transform:translate(-65px,-48px) scale(-1,1) rotate(185deg);opacity: 1}
}
@-webkit-keyframes zhiye_out
{
    from  {-webkit-transform:translate(-65px,-48px) scale(-1,1) rotate(185deg);opacity: 1}
    to    {-webkit-transform:translate(-65px,-64px) scale(-1.5,1) rotate(194deg);opacity: 0}
}
@-webkit-keyframes hua_in
{
    from  {-webkit-transform:translate(-15px,64px) scale(0.5) rotate(0deg);opacity: 0}
    to    {-webkit-transform:translate(34px,64px) scale(1) rotate(0deg);opacity: 1}
}
@-webkit-keyframes hua_out
{
    from  {-webkit-transform:translate(34px,64px) scale(1) rotate(0deg);opacity: 1}
    to    {-webkit-transform:translate(34px,55px) scale(1.2) rotate(0deg);opacity: 0}
}
@-webkit-keyframes zhen_in
{
    0%   {-webkit-transform:translate(0px,0px) scale(1.4) rotate(0deg);opacity: 0}
    60%  {-webkit-transform:translate(0px,0px) scale(1) rotate(0deg);}
    80%  {-webkit-transform:translate(0px,0px) scale(1.02) rotate(12deg);}
    100% {-webkit-transform:translate(0px,0px) scale(1) rotate(17deg);opacity: 1}
}
@-webkit-keyframes zhen_out
{
    from  {-webkit-transform:translate(0px,0px) scale(1) rotate(17deg);opacity: 1;}
    to    {-webkit-transform:translate(-120px,77px) scale(1) rotate(17deg);opacity: 1}
}
@-webkit-keyframes zhipian
{
    0%   {-webkit-transform: translate(0px,0px) rotate(63deg);-webkit-animation-timing-function:cubic-bezier(.36,.01,.75,.99);}
    40%  {-webkit-transform: translate(-224px,14px) rotate(91deg);-webkit-animation-timing-function:cubic-bezier(.36,.01,.75,.99);}
    70%  {-webkit-transform: translate(-86px,79px) scale(0.8) rotate(63deg);-webkit-animation-timing-function:cubic-bezier(.36,.01,.75,.99);}
    100% {-webkit-transform: translate(-176px,113px) scale(0.6) rotate(91deg);-webkit-animation-timing-function:cubic-bezier(.36,.01,.75,.99);}
}
@-webkit-keyframes zhipian_out
{
    from  {-webkit-transform: translate(-176px,113px) scale(0.6) rotate(91deg);;}
    to    {-webkit-transform: translate(-18px,150px) scale(0.6) rotate(114deg);}
}
@-webkit-keyframes zhixin1_in
{
    0%  {-webkit-transform: rotate(49deg) scale(0.5);opacity: 0}
    80% {-webkit-transform: rotate(49deg) scale(1.1);opacity: 1}
    100%{-webkit-transform: rotate(49deg) scale(1);opacity: 1}
}
@-webkit-keyframes zhixin2_in
{
    0%  {-webkit-transform: scale(0.5);opacity: 0}
    80% {-webkit-transform: scale(1.1);opacity: 1}
    100%{-webkit-transform: scale(1);opacity: 1} 
}
@-webkit-keyframes div5v_in
{
    from  {-webkit-transform: translate(390px,-464px) rotate(9deg);opacity: 0}
    to    {-webkit-transform: rotate(9deg);opacity: 1}
}
@-webkit-keyframes div5v_out
{
    from  {-webkit-transform: rotate(9deg);opacity: 1}
    to    {-webkit-transform: rotate(9deg);opacity: 0}
}
@-webkit-keyframes div5h_in
{
    from  {-webkit-transform: translate(390px,-464px) rotate(7deg);opacity: 0}
    to    {-webkit-transform: rotate(7deg);opacity: 1}
}
@-webkit-keyframes div5h_out
{
    from  {-webkit-transform: rotate(7deg);opacity: 1}
    to    {-webkit-transform: rotate(7deg);opacity: 0}
}
@-webkit-keyframes chibang1
{
    0%   {-webkit-transform: scale(0,1);}
    5%  {-webkit-transform: scale(1,1);}
    10%  {-webkit-transform: scale(0,1);}
    15%  {-webkit-transform: scale(1,1);}
    20%  {-webkit-transform: scale(0,1);}
    25%  {-webkit-transform: scale(1,1);}
    30%  {-webkit-transform: scale(0,1);}
    50%  {-webkit-transform: scale(1,1);}
    70%  {-webkit-transform: scale(0,1);}
    85%  {-webkit-transform: scale(1,1);}
    100% {-webkit-transform: scale(0,1);}
}
@-webkit-keyframes chibang2
{
    0%   {-webkit-transform: scale(-0,1);}
    5%  {-webkit-transform: scale(-1,1);}
    10%  {-webkit-transform: scale(-0,1);}
    15%  {-webkit-transform: scale(-1,1);}
    20%  {-webkit-transform: scale(-0,1);}
    25%  {-webkit-transform: scale(-1,1);}
    30%  {-webkit-transform: scale(-0,1);}
    50%  {-webkit-transform: scale(-1,1);}
    70%  {-webkit-transform: scale(-0,1);}
    85%  {-webkit-transform: scale(-1,1);}
    100% {-webkit-transform: scale(-0,1);}
}
</style>
<div id='container'>
    <img src='<?=$p?>images/bg.jpg'>
  

    <img id='shuzhi' src='<?=$p?>images/zhi.png'>

    <div id='hudie'>
        <div id='hudieying' style='-webkit-transform-origin: 51% 53%;left:-30px;top:19px;width:89px;height:84px;'>
            <img src='<?=$p?>images/03ying.png' style='position:absolute;-webkit-animation: chibang1 3.5s linear infinite alternate'>
        </div>
        <img src='<?=$p?>images/03.png' style='-webkit-transform-origin: 1% 57%;-webkit-transform: scale(-1,1);top:0px;left:30px;-webkit-animation: chibang2 3.5s linear infinite alternate'>
        <img src='<?=$p?>images/03.png' style='-webkit-transform-origin: 1% 57%;left:30px;top:0px;-webkit-animation: chibang1 3.5s linear infinite alternate'>
        <img src='<?=$p?>images/04.png' style='left:19px;top:-6px;'>
    </div>

    <div id='pagetitle' style='position:absolute;width:329px;height:200px;top:350px;left:122px;font-size:40px;color:#4C4B4B;overflow:hidden;font-weight:bold;text-align:right;'>
        <div id='line1' style='width:329px;'></div>
        <div id='line2' style='width:329px;'></div>
        <div id='line3' style='width:329px;'></div>
        <div id='line4' style='width:329px;'></div>
    </div>

    <div id='linekuang'>
        <img id='linekuang1' src='<?=$p?>images/01.png' style='position:absolute;left:0px;'>
    </div>
    <img id='xin1' src="<?=$p?>images/02.png" style="left: 101px;top: 632px;-webkit-transform: scale(0)">
    <img id='xin2' src="<?=$p?>images/02.png" style="left: 151px;top: 636px;-webkit-transform: scale(-0,0);">
    <img id='xin3' src="<?=$p?>images/02.png" style="left: 198px;top: 652px;-webkit-transform: scale(0)">
    <img id='xin4' src="<?=$p?>images/02.png" style="left: 241px;top: 645px;-webkit-transform: scale(-0,0);">
    <img id='xin5' src="<?=$p?>images/02.png" style="left: 298px;top: 633px;-webkit-transform: scale(0)">
    <img id='xin6' src="<?=$p?>images/02.png" style="left: 356px;top: 629px;-webkit-transform: scale(-0,0);">
    <img id='xin7' src="<?=$p?>images/02.png" style="left: 409px;top: 624px;-webkit-transform: scale(0)">

    <div id='div1h' style='display:none'>
        <div class='boxh'>
            <img id='img1h' style='position:absolute'>
        </div>
        <img src='<?=$p?>images/kuang.png' style='position:absolute;-webkit-transform: translate(7px,-100px) rotate(80deg);width:418px;'>
    </div>

    <div id='div2h' style='display:none'>
        <div class='boxh'>
            <img id='img2h' style='position:absolute'>
        </div>
        <img src='<?=$p?>images/kuang.png' style='position:absolute;-webkit-transform: translate(7px,-100px) rotate(80deg);width:418px;'>
    </div>
    <div id='div1v' style='display:none'>
        <div class='boxv'>
            <img id='img1v' style='position:absolute'>
        </div>
        <img src="<?=$p?>images/kuang.png" style="position:absolute;-webkit-transform: translate(-53px,-51px) rotate(-10deg);">
    </div>
    <div id='div2v' style='display:none'>
        <div class='boxv'>
            <img id='img2v' style='position:absolute'>
        </div>
        <img src="<?=$p?>images/kuang.png" style="position:absolute;-webkit-transform: translate(-53px,-51px) rotate(-10deg);">
    </div>
    <div id='div3v' style='display:none'>
        <div class='boxv'>
            <img id='img3v' style='position:absolute'>
        </div>
        <img src="<?=$p?>images/kuang.png" style="position:absolute;-webkit-transform: translate(-53px,-51px) rotate(-10deg);">
    </div>
    <div id='div3h' style='display:none'>
        <div class='boxh'>
            <img id='img3h' style='position:absolute'>
        </div>
        <img src='<?=$p?>images/kuang.png' style='position:absolute;-webkit-transform: translate(7px,-100px) rotate(80deg);width:418px;'>
    </div>

    <div id='div4h' style='display:none'>
        <div class='boxh'>
            <img id='img4h' style='position:absolute'>
        </div>
        <img src='<?=$p?>images/kuang.png' style='position:absolute;-webkit-transform: translate(7px,-100px) rotate(80deg);width:418px;'>
    </div>

    <div id='div4v' style='display:none'>
        <div class='boxv'>
            <img id='img4v' style='position:absolute'>
        </div>
        <img src='<?=$p?>images/kuang.png' style="position:absolute;-webkit-transform: translate(-53px,-51px) rotate(-10deg);">
    </div>

    <div id='div5v' style='display:none'>
        <div class='boxv'>
            <img id='img5v' style='position:absolute'>
        </div>
        <img src="<?=$p?>images/kuang.png" style="position:absolute;-webkit-transform: translate(-53px,-51px) rotate(-10deg);">
    </div>
    <div id='div5h' style='display:none'>
        <div class='boxh'>
            <img id='img5h' style='position:absolute'>
        </div>
        <img src='<?=$p?>images/kuang.png' style='position:absolute;-webkit-transform: translate(7px,-100px) rotate(80deg);width:418px;'>
    </div>

    <img id='zhiye' src='<?=$p?>images/021.png' style='opacity:0;z-index:10;'>
    <img id='hua' src='<?=$p?>images/023.png' style='opacity:0;z-index:10;'>

    <img id='zhen' src='<?=$p?>images/zhen.png' style='opacity:0;left:20px;top:85px;z-index:10;'>

    <img id="zhixin1" src="<?=$p?>images/024.png" style="left: 427px;top: 636px;-webkit-transform: rotate(49deg);width: 50px;opacity:0;z-index:10;">
    <img id="zhixin2" src="<?=$p?>images/024.png" style="left: 372px;top: 596px;-webkit-transform: rotate(0deg);width: 69px;opacity:0;z-index:10;">

    <img id='xin' src='<?=$p?>images/xin.png' style='left:487px;top:478px;-webkit-transform: translate(0px,0px) rotate(63deg);z-index:10;'>
</div>



<script>
var image_size_width=[];
var image_size_height=[];
var image_url_index=0;
var have_num = 0;
var error_num = 0;
var canshow = true;
var reshow = false;
var timeout0;
var timeout1;
var timeout2;
var timeout3;
var timeout4;
var timeout5;
var timeout6;

var delaytime=5000;
function id(name)
{
    return document.getElementById(name);
}
function load_images()
{

    div1h = id('div1h');
    div1v = id('div1v');
    div2h = id('div2h');
    div2v = id('div2v');
    div3h = id('div3h');
    div3v = id('div3v');
    div4h = id('div4h');
    div4v = id('div4v');
    div5h = id('div5h');
    div5v = id('div5v');
    linekuang = id('linekuang');
    linekuang1 = id('linekuang1');
    xin1 = id('xin1');
    xin2 = id('xin2');
    xin3 = id('xin3');
    xin4 = id('xin4');
    xin5 = id('xin5');
    xin6 = id('xin6');
    xin7 = id('xin7');


    reshow = false;
    image_size_width=[];
    image_size_height=[];
    Onload_imgs_url=[];
    image_url_index=0;
    have_num = 0;
    error_num = 0;
    begin_titletime = new Date();
    begin_titletime = begin_titletime.getTime();
    showtitle();
    canshow = true;
    for(var i=0;i<slider_images_url.length;i++)
    {
        var img=new Image();
        img.index=i;
        img.src=slider_images_url[i];
        img.onload=image_onload;
        img.onerror= image_onerror;
        Onload_imgs_url[i] = 'loading';
    }       
}

function image_onerror(event)
{
    var img = event.target;
    var index = img.index;
    if(index<10)
        error_num ++;
    Onload_imgs_url[index] = 'not find';
    console.log(Onload_imgs_url[index]);
    console.log(have_num + '-' + error_num);
    if((have_num+error_num >= 10 || slider_images_url.length == (have_num+error_num)) && canshow == true)
    {   
        reshow = false;
        canshow =false;
        if(have_num == 0)
            return;
        var end_titletime = new Date();
        end_titletime = end_titletime.getTime();
        var dis_titletime = Math.abs(end_titletime-begin_titletime);
        if(dis_titletime>delaytime)
        {
            distitle();
        }
        else
        {
            dis_titletime = delaytime- dis_titletime;
            timeout0 = setTimeout(function()
                {
                    distitle();
                },dis_titletime);
        }
    }
}

function image_onload(event)
{
    if(reshow == true)
        return;

    var img = event.target;
    var index = img.index;

    if(index<10)
    {
        have_num++;
    }
    Onload_imgs_url[index] = img.src;
    image_size_height[index] = img.height;
    image_size_width[index] = img.width;

    console.log(Onload_imgs_url[index]);
    console.log(have_num + '-' + error_num);

    if((have_num + error_num >= 10 ||slider_images_url.length == (have_num+error_num)) && canshow == true)
    {   
        reshow = false;
        canshow =false;
        if(have_num == 0)
            return;
        var end_titletime = new Date();
        end_titletime = end_titletime.getTime();
        var dis_titletime = Math.abs(end_titletime-begin_titletime);
        if(dis_titletime>delaytime)
        {
            distitle();
        }
        else
        {
            dis_titletime = delaytime- dis_titletime;
            timeout0 = setTimeout(function()
                {
                    distitle();
                },dis_titletime);
        }

    }
}
function id(name)
{
    return document.getElementById(name);
}
function showtitle()
{
    id('shuzhi').style.webkitAnimation = 'shuzhi_in 1s ease-out both';
    id('hudie').style.webkitAnimation = 'hudie_in 2s ease-out both';
    var line1 = id('line1');
    var line2 = id('line2');
    var line3 = id('line3');
    var line4 = id('line4');

    if(e_desc.length<9)
    {
        line1.innerHTML = e_desc;
        line2.innerHTML = '';
        line3.innerHTML = '';
        line4.innerHTML = '';
        line1.style.webkitAnimation = 'fadein 2s 1s linear both';

    }
    else if(e_desc.length<17)
    {
        line1.innerHTML = e_desc.substring(0,8);
        line2.innerHTML = e_desc.substring(8,16);
        line3.innerHTML = '';
        line4.innerHTML = '';
        line1.style.webkitAnimation = 'fadein 2s 1s linear both';
        line2.style.webkitAnimation = 'fadein 2s 1.5s linear both';
    }
    else if(e_desc.length<25)
    {
        line1.innerHTML = e_desc.substring(0,8);
        line2.innerHTML = e_desc.substring(8,16);
        line3.innerHTML = e_desc.substring(16,24);
        line4.innerHTML = '';
        line1.style.webkitAnimation = 'fadein 2s 1s linear both';
        line2.style.webkitAnimation = 'fadein 2s 1.5s linear both';
        line3.style.webkitAnimation = 'fadein 2s 2s linear both';
    }
    else
    {
        line1.innerHTML = e_desc.substring(0,8);
        line2.innerHTML = e_desc.substring(8,16);
        line3.innerHTML = e_desc.substring(16,24);
        line4.innerHTML = e_desc.substring(24,32);
        line1.style.webkitAnimation = 'fadein 2s 1s linear both';
        line2.style.webkitAnimation = 'fadein 2s 1.5s linear both';
        line3.style.webkitAnimation = 'fadein 2s 2s linear both';
        line4.style.webkitAnimation = 'fadein 2s 2.5s linear both';
    }

    // timeout1 = setTimeout(distitle,5000)
}

function distitle()
{
    id('line4').style.webkitAnimation = 'fadeout 2s linear both';
    id('line3').style.webkitAnimation = 'fadeout 2s 0.5s linear both';
    id('line2').style.webkitAnimation = 'fadeout 2s 1s linear both';
    id('line1').style.webkitAnimation = 'fadeout 2s 1.5s linear both';

    id('shuzhi').style.webkitAnimation = 'shuzhi_out 2s 1s linear both';
    id('hudie').style.webkitAnimation = 'hudie_out 2s 1s ease-out both';
    id('hudieying').style.webkitAnimation = 'hudieying 2s 1s linear both';

    timeout1 = setTimeout(show1,3000)
}

function show1()
{
    setImage('1');
    linekuang.style.webkitAnimation = 'linekuang_in 2s linear both';
    linekuang1.style.webkitAnimation = 'linekuang1_in 2s linear both';

    xin1.style.webkitAnimation = 'xin_in 0.5s 0.2s linear both';
    xin2.style.webkitAnimation = 'xin1_in 0.5s 0.4s linear both';
    xin3.style.webkitAnimation = 'xin_in 0.5s 0.6s linear both';
    xin4.style.webkitAnimation = 'xin1_in 0.5s 0.8s linear both';
    xin5.style.webkitAnimation = 'xin_in 0.5s 1.4s linear both';
    xin6.style.webkitAnimation = 'xin1_in 0.5s 1.6s linear both';
    xin7.style.webkitAnimation = 'xin_in 0.5s 1.8s linear both';

    div2h.style.webkitAnimation = 'div2_out 1s 1s linear both';
    div2v.style.webkitAnimation = 'div2_out 1s 1s linear both';
    // div1h.style.display = 'block';
    div1h.style.webkitAnimation = 'div1_in 1s 1s cubic-bezier(.61,.74,.81,1) both';
    div1v.style.webkitAnimation = 'div1_in 1s 1s cubic-bezier(.61,.74,.81,1) both';
    div1h.style.zIndex = 5;
    div1v.style.zIndex = 5;
    div2h.style.zIndex = 1;
    div2v.style.zIndex = 1;
    div3v.style.zIndex = 2;
    div3h.style.zIndex = 2;
    div4h.style.zIndex = 3;
    div4v.style.zIndex = 3;
    div5v.style.zIndex = 4;
    div5h.style.zIndex = 4;

    timeout2 = setTimeout(show2,5000)

}
function show2()
{
    setImage('2');
    id('hudie').style.webkitAnimation = 'hudie_out1 2s 1s cubic-bezier(.19,0,.81,1) both';
    id('hudieying').style.webkitAnimation = 'hudieying1 2s 1s linear both';

    div3v.style.webkitAnimation = 'div3v_out 1s linear both';
    div3h.style.webkitAnimation = 'div3h_out 1s linear both';
    // div2h.style.display = 'block';
    div2h.style.webkitAnimation = 'div2_in 1s cubic-bezier(.61,.74,.81,1) both';
    div2v.style.webkitAnimation = 'div2_in 1s cubic-bezier(.61,.74,.81,1) both';
    div1h.style.zIndex = 4;
    div1v.style.zIndex = 4;
    div2h.style.zIndex = 5;
    div2v.style.zIndex = 5;
    div3v.style.zIndex = 1;
    div3h.style.zIndex = 1;
    div4h.style.zIndex = 2;
    div4v.style.zIndex = 2;
    div5v.style.zIndex = 3;
    div5h.style.zIndex = 3;

    timeout3 = setTimeout(show3,3000)
}
function show3()
{
    setImage('3');
    linekuang.style.webkitAnimation = 'linekuang_out 2s linear both';
    linekuang1.style.webkitAnimation = 'linekuang1_out 2s linear both';
    xin1.style.webkitAnimation = 'xin_out 0.5s linear both';
    xin2.style.webkitAnimation = 'xin1_out 0.5s 0.2s linear both';
    xin3.style.webkitAnimation = 'xin_out 0.5s 0.4s linear both';
    xin4.style.webkitAnimation = 'xin1_out 0.5s 0.6s linear both';
    xin5.style.webkitAnimation = 'xin_out 0.5s 1s linear both';
    xin6.style.webkitAnimation = 'xin1_out 0.5s 1.3s linear both';
    xin7.style.webkitAnimation = 'xin_out 0.5s 1.5s linear both';

    div4h.style.webkitAnimation = 'div1_out 2s 1.5s linear both'
    div4v.style.webkitAnimation = 'div1_out 2s 1.5s linear both'
    // div3v.style.display = 'block';
    div3v.style.webkitAnimation = 'div3v_in 2s 1.5s cubic-bezier(.61,.74,.81,1) both';
    div3h.style.webkitAnimation = 'div3h_in 2s 1.5s cubic-bezier(.61,.74,.81,1) both';
    div1h.style.zIndex = 3;
    div1v.style.zIndex = 3;
    div2h.style.zIndex = 4;
    div2v.style.zIndex = 4;
    div3v.style.zIndex = 5;
    div3h.style.zIndex = 5;
    div4h.style.zIndex = 1;
    div4v.style.zIndex = 1;
    div5v.style.zIndex = 2;
    div5h.style.zIndex = 2;

    id('zhiye').style.webkitAnimation = 'zhiye_in 1.5s 2s ease-out both';
    id('hua').style.webkitAnimation = 'hua_in 1.2s 2.5s ease-out both';

    id('zhixin1').style.webkitAnimation = 'zhixin1_in 1s 3.5s linear both';
    id('zhixin2').style.webkitAnimation = 'zhixin2_in 1s 3s linear both';

    timeout4 = setTimeout(show4,7000)
}

function show4()
{
    setImage('4');
    // div4h.style.webkitAnimation = 'div1_in 1.5s cubic-bezier(.61,.74,.81,1) both';
    div5v.style.webkitAnimation = 'div5v_out 1.5s linear both';
    div5h.style.webkitAnimation = 'div5h_out 1.5s linear both'
    // div4h.style.display = 'block';
    div4h.style.webkitAnimation = 'div1_in 1.5s cubic-bezier(.61,.74,.81,1) both';
    div4v.style.webkitAnimation = 'div1_in 1.5s cubic-bezier(.61,.74,.81,1) both';
    div1h.style.zIndex = 2;
    div1v.style.zIndex = 2;
    div2h.style.zIndex = 3;
    div2v.style.zIndex = 3;
    div3v.style.zIndex = 4;
    div3h.style.zIndex = 4;
    div4h.style.zIndex = 5;
    div4v.style.zIndex = 5;
    div5v.style.zIndex = 1;
    div5h.style.zIndex = 1;

    id('zhiye').style.webkitAnimation = 'zhiye_out 1s 2s ease-out both';
    id('hua').style.webkitAnimation = 'hua_out 1s 2s ease-out both';
    id('zhen').style.webkitAnimation = 'zhen_in 1s 2.7s linear forwards';
    id('xin').style.webkitAnimation = 'zhipian 5s 2.5s linear both';


    id('zhixin1').style.webkitAnimation = 'fadeout 1s 3s linear both';
    id('zhixin2').style.webkitAnimation = 'fadeout 1s 3s linear both';
    timeout5 = setTimeout(show5,5000);
}
function show5()
{

    // div5v.style.webkitAnimation = 'div5v_in 1.5s cubic-bezier(.61,.74,.81,1) both';
    setImage('5');
    div1h.style.webkitAnimation = 'div1_out 1.5s linear both'
    div1v.style.webkitAnimation = 'div1_out 1.5s linear both'
    // div5v.style.display = 'block';
    div5v.style.webkitAnimation = 'div5v_in 1.5s cubic-bezier(.61,.74,.81,1) both';
    div5h.style.webkitAnimation = 'div5h_in 1.5s cubic-bezier(.61,.74,.81,1) both';
    div1h.style.zIndex = 1;
    div1v.style.zIndex = 1;
    div2h.style.zIndex = 2;
    div2v.style.zIndex = 2;
    div3v.style.zIndex = 3;
    div3h.style.zIndex = 3;
    div4h.style.zIndex = 4;
    div4v.style.zIndex = 4;
    div5v.style.zIndex = 5;
    div5h.style.zIndex = 5;


    id('zhen').style.webkitAnimation = 'zhen_out 1.5s 3s linear both';
    
    timeout6 = setTimeout(show6,5000);
}
function show6()
{
    id('xin').style.webkitAnimation = 'zhipian_out 1.5s linear both';
    
    id('linekuang').style.webkitAnimation = 'linekuang_in 2s linear both';
    id('linekuang1').style.webkitAnimation = 'linekuang1_in 2s linear both';

    show1();
}
function setImage(idname)
{
    if(reshow == true)
        return;

    while(Onload_imgs_url[image_url_index] == 'not find' || Onload_imgs_url[image_url_index] == 'loading')
    {
        console.log(Onload_imgs_url[image_url_index]);
        image_url_index++;
        if(image_url_index == Onload_imgs_url.length)
            image_url_index = 0;
    }

    var img_bili = image_size_width[image_url_index]/image_size_height[image_url_index];
    var div;
    var div1;
    var divname;
    var height;
    var width;

    if(img_bili > 1)
    {
        divname = idname + 'h';
        div = id('div'+idname+'h');
        div1 = id('div'+idname+'v');
        height = 279;
        width = 419;
    }
    else
    {
        divname = idname + 'v';
        div = id('div'+idname+'v');
        div1 = id('div'+idname+'h');
        height = 438;
        width = 292;

    }

    div.style.display = 'block';
    div1.style.display = 'none';

    var img = id('img'+divname);
    img.src = Onload_imgs_url[image_url_index];
    console.log(img.src);

    if(img_bili > (width/height))
    {
        img.style.top = '0px';
        img.style.height = height + 'px';
        img.style.width = height*img_bili + 'px';
        img.style.left = -((height*img_bili-width)/2)+'px';
    }
    else
    {
        img.style.left = '0px';
        img.style.width = width+'px';
        img.style.height = width/img_bili + 'px';
        img.style.top = -((width/img_bili-height)/2) + 'px';
    }
    image_url_index++;
    if(image_url_index == Onload_imgs_url.length)
        image_url_index = 0;
}
call_me(load_images);
function reload_scene()
{
    clearnode();
    reshow = true;
    setTimeout(load_images,100);
}
function clearnode()
{
    div1h.style.display = 'none';
    div1h.style.webkitAnimation = '';
    div1v.style.display = 'none';
    div1v.style.webkitAnimation = '';
    div2h.style.display = 'none';
    div2h.style.webkitAnimation = '';
    div2v.style.display = 'none';
    div2v.style.webkitAnimation = '';
    div3h.style.display = 'none';
    div3h.style.webkitAnimation = '';
    div3v.style.display = 'none';
    div3v.style.webkitAnimation = '';
    div4h.style.display = 'none';
    div4h.style.webkitAnimation = '';
    div4v.style.display = 'none';
    div4v.style.webkitAnimation = '';
    div5h.style.display = 'none';
    div5h.style.webkitAnimation = '';
    div5v.style.display = 'none';
    div5v.style.webkitAnimation = '';
    linekuang.style.webkitAnimation = '';
    linekuang1.style.webkitAnimation = '';
    xin1.style.webkitAnimation = '';
    xin2.style.webkitAnimation = '';
    xin3.style.webkitAnimation = '';
    xin4.style.webkitAnimation = '';
    xin5.style.webkitAnimation = '';
    xin6.style.webkitAnimation = '';
    xin7.style.webkitAnimation = '';
    id('zhixin1').style.webkitAnimation = '';
    id('zhixin2').style.webkitAnimation = '';
    id('xin').style.webkitAnimation = '';
    id('hua').style.webkitAnimation = '';
    id('zhen').style.webkitAnimation = '';
    id('hudie').style.webkitAnimation = '';
    id('shuzhi').style.webkitAnimation = '';
    id('hudie').style.webkitAnimation = '';
    id('zhiye').style.webkitAnimation = '';

    clearTimeout(timeout0);
    clearTimeout(timeout1);
    clearTimeout(timeout2);
    clearTimeout(timeout3);
    clearTimeout(timeout4);
    clearTimeout(timeout5);
    clearTimeout(timeout6);

    id('pagetitle').style.webkitAnimation = '';
    id('line1').innerHTML = '';
    id('line2').innerHTML = '';
    id('line3').innerHTML = '';
    id('line4').innerHTML = '';
    id('line1').style.webkitAnimation = '';
    id('line2').style.webkitAnimation = '';
    id('line3').style.webkitAnimation = '';
    id('line4').style.webkitAnimation = '';

}
</script>
