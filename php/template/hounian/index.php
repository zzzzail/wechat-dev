<?
$p=$_WEITE['web_pic_url']."hounian/";
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
    background-color: black;
}

#container
{
    width: 500px;
    height: 815px;
    position: absolute;
    /*overflow: hidden;*/
}
#container > img,#container >div
{
    position: absolute;
}
#down1
{
    left: 0px;
    top: 593px;
    -webkit-transform-origin: 0% 100%;
    opacity: 0;
}
#down2
{
    left: 150px;
    top: 714px;
    opacity: 0;
}
#up1
{
    left: -5px;
    top: 0px;
    opacity: 0;
    -webkit-transform-origin: 0% 50%;
    width: 354px;
    height: 132px;
}
#up1>div,#div1>img
{
    position: absolute;
}
#denglong1
{
    left: 31px;
    top: 50px;
    width: 96px;
    height: 179px;
    -webkit-transform: translate(0px,0px) rotate(0deg);
    -webkit-transform-origin: 50% 0%;
}
#denglong1>img
{
    position: absolute;
    -webkit-transform-origin: 50% 0%;
    -webkit-animation: denglongyao 1.5s ease-in-out infinite alternate;
}
#denglong2
{
    left: 222px;
    top: 109px;
    width: 61px;
    height: 131px;
    -webkit-transform: translate(0px,0px) rotate(0deg);
    -webkit-transform-origin: 50% 0%;
}
#denglong2 >img
{
    position: absolute;
    -webkit-transform-origin: 50% 0%;
    -webkit-animation: denglongyao 1.5s 1.5s ease-in-out infinite alternate;
}
#zi2
{
    left: 0px;
    top: 0px;
    opacity: 0;
}
#zi0
{
    left: 111px;
    top: 1px;
    opacity: 0;
}
#zi1
{
    left: 258px;
    top: 0px;
    opacity: 0;
}
#zi6
{
    left: 321px;
    top: 1px;
    opacity: 0;
}
#houzi
{
    left: -50px;
    top: -114px;
    -webkit-transform: translate(-100px,0px) rotate(0deg);
    width: 104px;
    height: 143px;
}
#houziin
{
    -webkit-transform-origin: 50% 100%;
    position: absolute;
    -webkit-animation: houzi_yao 1s linear infinite alternate;
}
.xin
{
    position: absolute;
    opacity: 0;
}
#zi>img
{
    position: absolute;
}
#zi
{
    left: 39px;
    top: 300px;
    width: 417px;
    height: 134px;
    -webkit-transform-origin: 50% 50%;
}
#word1
{
    left: 30px;
    top: 397px;
    background-color: #C1010D;
    width: 10px;
    height: 35px;
    opacity: 0;
}
#upzi
{
    left: 400px;
    top: 10px;
    width: 70px;
}
.divv
{
    width: 437px;
    height: 580px;
    left: 30px;
    top: 103px;
    overflow: hidden;
    box-shadow: 3px 4px 13px #3C3B3B;
    opacity: 0;
}
.divh
{
    width: 437px;
    height: 309px;
    left: 30px;
    top: 235px;
    overflow: hidden;
    box-shadow: 3px 4px 13px #3C3B3B;
    opacity: 0;
}

</style>
<style type="text/css">
@-webkit-keyframes down1_in
{
    from  {-webkit-transform: scale(0.9);opacity: 0}
    to    {-webkit-transform: scale(1);opacity: 1}
}
@-webkit-keyframes down2_in
{
    from  {-webkit-transform: translate(0px,0px);opacity: 0}
    to    {-webkit-transform: translate(-50px,0px);opacity: 1}
}
@-webkit-keyframes denglongyao
{
    from  {-webkit-transform: rotate(-4deg);}
    to    {-webkit-transofrm: rotate(4deg);}
}
@-webkit-keyframes denglong_in
{
    from  {-webkit-transform: rotate(30deg);opacity: 0}
    to    {-webkit-transform: rotate(0deg);opacity: 1}
}
@-webkit-keyframes zi_in
{
    0%  {-webkit-transform: translate(0px,0px) scale(1,1);opacity: 0}
    50% {-webkit-transform: translate(0px,-30px) scale(0.9,1.1);opacity: 0.5}
    100%{-webkit-transform: translate(0px,0px) scale(1,1);opacity: 1}
}
@-webkit-keyframes zidiv_in
{
    from  {-webkit-transform: translate(0px,0px) scale(1,1);}
    to    {-webkit-transform: translate(-60px,-55px) scale(0.7,0.7);}
}
@-webkit-keyframes houzi_in
{
    0%  {-webkit-transform: translate(-60px,394px) rotate(15deg);}
    10% {-webkit-transform: translate(56px,353px) rotate(0deg);}
    18% {-webkit-transform: translate(88px,401px)}
    28% {-webkit-transform: translate(155px,360px)}
    36% {-webkit-transform: translate(209px,398px)}
    44% {-webkit-transform: translate(256px,356px)}
    54% {-webkit-transform: translate(316px,402px)}
    64% {-webkit-transform: translate(362px,358px)}
    74% {-webkit-transform: translate(409px,401px)}
    78% {-webkit-transform: translate(409px,407px)}
    86% {-webkit-transform: translate(349px,341px)}
    /*96% {-webkit-transform: translate(277px,594px)}*/
    100%{-webkit-transform: translate(277px,724px)}
}
@-webkit-keyframes xin1
{
    from  {-webkit-transform: translate(20px,30px);opacity: 1}
    to    {-webkit-transform: translate(0px,0px);opacity: 0}
}
@-webkit-keyframes xin2
{
    from  {-webkit-transform: translate(50px,35px) rotate(35deg);opacity: 1}
    to    {-webkit-transform: translate(70px,5px) rotate(35deg);opacity: 0}
}
@-webkit-keyframes xin11
{
    0%    {-webkit-transform: translate(20px,30px);opacity: 1}
    50%   {-webkit-transform: translate(0px,0px);opacity: 0}
    100%  {-webkit-transform: translate(0px,0px);opacity: 0}
}
@-webkit-keyframes xin22
{
    0%   {-webkit-transform: translate(50px,35px) rotate(35deg);opacity: 1}
    50%  {-webkit-transform: translate(70px,5px) rotate(35deg);opacity: 0}
    100%  {-webkit-transform: translate(70px,5px) rotate(35deg);opacity: 0}
}
@-webkit-keyframes fadein
{
    from  {opacity: 0}
    to    {opacity: 1}
}
@-webkit-keyframes title_in
{
    from  {-webkit-transform: translate(0px,50px);opacity: 0}
    to    {-webkit-transform: translate(0px,0px);opacity: 1}
}
@-webkit-keyframes title_out
{
    from  {-webkit-transform: translate(0px,0px);opacity: 1}
    to    {-webkit-transform: translate(-50px,0px);opacity: 0}
}
@-webkit-keyframes upzi_in
{
    from  {-webkit-transform: translate(0px,-20px);opacity: 0}
    to    {-webkit-transform: translate(0px,0px);opacity: 1}
}
@-webkit-keyframes zidiv_out
{
    0%  {-webkit-transform: translate(-60px,-55px) scale(0.7,0.7) skew(0deg);opacity: 1}
    50% {-webkit-transform: translate(-60px,-55px) rotateX(90deg) scale(0.7,0.7) skew(-40deg);opacity: 0.5}
    100% {-webkit-transform: translate(-60px,-55px) rotateX(180deg) scale(0.7,0.7) skew(0deg);opacity: 0}
}
@-webkit-keyframes houzi_yao
{
    from  {-webkit-transform: rotate(-5deg);}
    to    {-webkit-transform: rotate(5deg);}
}
@-webkit-keyframes div1_in
{
    from  {-webkit-transform: scale(1.05);opacity: 0}
    to    {-webkit-transform: scale(1);opacity: 1}
}
@-webkit-keyframes div1_out
{
    from  {-webkit-transform: translate(0px,0px);opacity: 1}
    to    {-webkit-transform: translate(0px,-30px);opacity: 0}
}
@-webkit-keyframes div2_in
{
    from  {-webkit-transform: translate(0px,30px);opacity: 0}
    to    {-webkit-transform: translate(0px,0px);opacity: 1}
}
@-webkit-keyframes div21_out
{
    from  {-webkit-transform: translate(0px,0px);opacity: 1}
    to    {-webkit-transform: translate(40px,0px);opacity: 0}
}
@-webkit-keyframes div22_out
{
    from  {-webkit-transform: translate(0px,0px);opacity: 1}
    to    {-webkit-transform: translate(-40px,0px);opacity: 0;}
}
@-webkit-keyframes div3_in
{
    from  {-webkit-transform: translate(0px,-50px);opacity: 0}
    to    {-webkit-transform: translate(0px,0px);opacity: 1}
}
@-webkit-keyframes div3_out
{
    from  {-webkit-transform: translate(0px,0px);opacity: 1}
    to    {-webkit-transform: translate(0px,20px);opacity: 0}
}
@-webkit-keyframes div41_in
{
    from  {-webkit-transform: translate(30px,0px);opacity: 0}
    to    {-webkit-transform: translate(0px,0px);opacity: 1}
}
@-webkit-keyframes div42_in
{
    from  {-webkit-transform: translate(-30px,0px);opacity: 0}
    to    {-webkit-transform: translate(0px,0px);opacity: 1}
}
@-webkit-keyframes div41_out
{
    from  {-webkit-transform: translate(0px,0px);opacity: 1}
    to    {-webkit-transform: translate(30px,0px);opacity: 0}
}
@-webkit-keyframes div42_out
{
    from  {-webkit-transform: translate(0px,0px);opacity: 1}
    to    {-webkit-transform: translate(-30px,0px);opacity: 0}
}
</style>
<div id='container'>
    <img src='<?=$p?>images/bg.jpg'>


    <div id='div1v' class='divv' style='display:none'>
        <img id='img1v' style='position:absolute'>
    </div>
    <div id='div1h' class='divh' style='display:none'>
        <img id='img1h' style='position:absolute'>
    </div>

    <div id='div2h' class='divh' style='display:none'>
        <img id='img2h' style='position:absolute'>
    </div>
    <div id='div2v' class='divv' style='display:none'>
        <img id='img2v' style='position:absolute'>
    </div>

    <div id='div3v' class='divv' style='display:none'>
        <img id='img3v' style='position:absolute'>
    </div>
    <div id='div3h' class='divh' style='display:none'>
        <img id='img3h' style='position:absolute'>
    </div>

    <div id='div4h' class='divh' style='display:none'>
        <img id='img4h' style='position:absolute'>
    </div>
    <div id='div4v' class='divv' style='display:none'>
        <img id='img4v' style='position:absolute'>
    </div>

    <div id='up1'>
        <img src='<?=$p?>images/001.png'>
        <div id='denglong1'>
            <img src='<?=$p?>images/002.png'>
        </div>
        <div id='denglong2'>
            <img src='<?=$p?>images/003.png'>
        </div>
    </div>

    <div style='left:60px;top:254px'>
        <img id='xin1' src='<?=$p?>images/008.png' class='xin'>
        <img id='xin2' src='<?=$p?>images/008.png' class='xin'>
    </div>
    <div style='left:176px;top:254px'>
        <img id='xin3' src='<?=$p?>images/008.png' class='xin'>
        <img id='xin4' src='<?=$p?>images/008.png' class='xin'>
    </div>
    <div style='left:275px;top:254px'>
        <img id='xin5' src='<?=$p?>images/008.png' class='xin'>
        <img id='xin6' src='<?=$p?>images/008.png' class='xin'>
    </div>
    <div style='left:370px;top:254px'>
        <img id='xin7' src='<?=$p?>images/008.png' class='xin'>
        <img id='xin8' src='<?=$p?>images/008.png' class='xin'>
    </div>
    <div style='left:235px;top:575px'>
        <img id='xin9' src='<?=$p?>images/008.png' class='xin'>
        <img id='xin10' src='<?=$p?>images/008.png' class='xin'>
    </div>

    <div id='zi'>
        <img id='zi2' src='<?=$p?>images/013.png'>
        <img id='zi0' src='<?=$p?>images/011.png'>
        <img id='zi1' src='<?=$p?>images/012.png'>
        <img id='zi6' src='<?=$p?>images/014.png'>
    </div>

    <div id='houzi'>
        <img id='houziin' src='<?=$p?>images/007.png'>
    </div>

    <img id='upzi' src='<?=$p?>images/xin01.png'>

    <div id='word1'>
    </div>
    <div id="pagetitle" style="position:absolute;width:410px;height:200px;top: 390px;left:45px;font-size:40px;color:#C1010D;overflow:hidden;font-weight:bold;opacity:0;">
        <div style="position:absolute;width:410px;height:200px;top:0px;left:0px;overflow:hidden;">
            <div style="position:absolute;width:410px;height:200px;display:table;overflow:hidden;">
                <div id="titlecontent" style="width:410px;height:200px;text-align:left;line-height:50px;"></div>
            </div>
        </div>
    </div>

    <img id='down1' src='<?=$p?>images/004.png'>
    <img id='down2' src='<?=$p?>images/005.png'>
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

var delaytime=6000;
function id(name)
{
    return document.getElementById(name);
}
function load_images()
{
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
function showtitle()
{
    id('down1').style.webkitAnimation = 'down1_in 1.2s linear both';
    id('down2').style.webkitAnimation = 'down2_in 1.2s ease-out both';

    id('up1').style.webkitAnimation = 'down1_in 1.5s linear both';
    id('denglong1').style.webkitAnimation = 'denglong_in 1.5s 1s ease-out both';
    id('denglong2').style.webkitAnimation = 'denglong_in 1.5s 1.5s ease-out both';

    id('houzi').style.webkitAnimation = 'houzi_in 3s linear both';
    id('zi2').style.webkitAnimation = 'zi_in 0.5s ease-out 0.5s both';
    id('zi0').style.webkitAnimation = 'zi_in 0.5s ease-out 1s both';
    id('zi1').style.webkitAnimation = 'zi_in 0.5s ease-out 1.6s both';
    id('zi6').style.webkitAnimation = 'zi_in 0.5s ease-out 2.2s both';

    id('xin1').style.webkitAnimation = 'xin1 1s 0.8s linear forwards';
    id('xin2').style.webkitAnimation = 'xin2 1s 0.8s linear forwards';
    id('xin3').style.webkitAnimation = 'xin1 1s 1.3s linear forwards';
    id('xin4').style.webkitAnimation = 'xin2 1s 1.3s linear forwards';
    id('xin5').style.webkitAnimation = 'xin1 1s 1.8s linear forwards';
    id('xin6').style.webkitAnimation = 'xin2 1s 1.8s  linear forwards';
    id('xin7').style.webkitAnimation = 'xin1 1s 2.3s linear forwards';
    id('xin8').style.webkitAnimation = 'xin2 1s 2.3s linear forwards';
    id('xin9').style.webkitAnimation = 'xin11 2s 3s linear forwards infinite';
    id('xin10').style.webkitAnimation = 'xin22 2s 3s linear forwards infinite';

    id('zi').style.webkitAnimation = 'zidiv_in 1s ease-out 3s both';
    id('word1').style.webkitAnimation = 'fadein 1s ease-out 3s both';
    id('pagetitle').style.webkitAnimation = 'title_in 1s ease-out 3s both';
    id('upzi').style.webkitAnimation = 'upzi_in 1s ease-out 3s both';
    id('titlecontent').innerHTML = e_desc;

}

function distitle()
{
    // return;
    id('zi').style.webkitAnimation = 'zidiv_out 1.5s linear both';
    id('pagetitle').style.webkitAnimation = 'title_out 1s linear both';
    id('word1').style.webkitAnimation = 'title_out 1s linear both';

    timeout1 = setTimeout(show1,1000);
}
function show1 () 
{
    setImage('1');
    id('div1v').style.webkitAnimation = 'div1_in 1.2s cubic-bezier(.34,.03,.48,.99) both';
    id('div1h').style.webkitAnimation = 'div1_in 1.2s cubic-bezier(.34,.03,.48,.99) both';

    timeout2 = setTimeout(show2,4000)
}
function show2 () 
{
    setImage('2');
    id('div1v').style.webkitAnimation = 'div1_out 1.2s cubic-bezier(.34,.03,.48,.99) both';
    id('div1h').style.webkitAnimation = 'div1_out 1.2s cubic-bezier(.34,.03,.48,.99) both';

    id('div2h').style.webkitAnimation = 'div2_in 1.5s 0.4s cubic-bezier(.34,.03,.48,.99) both';
    id('div2v').style.webkitAnimation = 'div2_in 1.5s 0.4s cubic-bezier(.34,.03,.48,.99) both';

    timeout3 = setTimeout(show3,4000)
}
function show3 () 
{
    setImage('3');
    id('div2h').style.webkitAnimation = 'div21_out 1s cubic-bezier(.36,.03,.74,.99) both';
    id('div2v').style.webkitAnimation = 'div21_out 1s cubic-bezier(.36,.03,.74,.99) both';


    id('div3v').style.webkitAnimation = 'div3_in 1.5s 0.4s cubic-bezier(.34,.03,.48,.99) both';
    id('div3h').style.webkitAnimation = 'div3_in 1.5s 0.4s cubic-bezier(.34,.03,.48,.99) both';

    timeout4 = setTimeout(show4,4000)
}
function show4 () 
{
    setImage('4');
    id('div3v').style.webkitAnimation = 'div3_out 1s cubic-bezier(.36,.03,.74,.99) both';
    id('div3h').style.webkitAnimation = 'div3_out 1s cubic-bezier(.36,.03,.74,.99) both';

    id('div4h').style.webkitAnimation = 'div41_in 1.5s 0.4s cubic-bezier(.34,.03,.48,.99) both';
    id('div4v').style.webkitAnimation = 'div41_in 1.5s 0.4s cubic-bezier(.34,.03,.48,.99) both';
    timeout5 = setTimeout(show1_1,4000)
}
function show1_1 () 
{
    setImage('1');
    id('div4h').style.webkitAnimation = 'div41_out 1s cubic-bezier(.36,.03,.74,.99) both';
    id('div4v').style.webkitAnimation = 'div41_out 1s cubic-bezier(.36,.03,.74,.99) both';

    id('div1v').style.webkitAnimation = 'div1_in 1.5s 0.5s cubic-bezier(.34,.03,.48,.99) both';
    id('div1h').style.webkitAnimation = 'div1_in 1.5s 0.5s cubic-bezier(.34,.03,.48,.99) both';

    timeout6 = setTimeout(show2,4000);
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

    if(img_bili > 1)
    {
        divname = idname + 'h';
        div = id('div'+idname+'h');
        div1 = id('div'+idname+'v');
        width = 437;
        height = 309;
    }
    else
    {
        divname = idname + 'v';
        div = id('div'+idname+'v');
        div1 = id('div'+idname+'h');
        width = 437;
        height = 580;
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
    if(image_url_index==Onload_imgs_url.length)
        image_url_index = 0;
    // console.log(width,height,img.style.left,img.style.top,img.width,img.height);
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
    clearTimeout(timeout0);
    clearTimeout(timeout1);
    clearTimeout(timeout2);
    clearTimeout(timeout3);
    clearTimeout(timeout4);
    clearTimeout(timeout5);
    clearTimeout(timeout6);

    id('div1h').style.display = 'none';
    id('div1v').style.display = 'none';
    id('div2h').style.display = 'none';
    id('div2v').style.display = 'none';
    id('div3h').style.display = 'none';
    id('div3v').style.display = 'none';
    id('div4h').style.display = 'none';
    id('div4v').style.display = 'none';
    id('div1h').style.webkitAnimation = '';
    id('div1v').style.webkitAnimation = '';
    id('div2h').style.webkitAnimation = '';
    id('div2v').style.webkitAnimation = '';
    id('div3h').style.webkitAnimation = '';
    id('div3v').style.webkitAnimation = '';
    id('div4h').style.webkitAnimation = '';
    id('div4v').style.webkitAnimation = '';
    
    id('down1').style.webkitAnimation = '';
    id('down2').style.webkitAnimation = '';
    id('up1').style.webkitAnimation = '';
    id('denglong1').style.webkitAnimation = '';
    id('denglong2').style.webkitAnimation = '';
    id('houzi').style.webkitAnimation = '';
    id('zi2').style.webkitAnimation = '';
    id('zi0').style.webkitAnimation = '';
    id('zi1').style.webkitAnimation = '';
    id('zi6').style.webkitAnimation = '';
    id('xin1').style.webkitAnimation = '';
    id('xin2').style.webkitAnimation = '';
    id('xin3').style.webkitAnimation = '';
    id('xin4').style.webkitAnimation = '';
    id('xin5').style.webkitAnimation = '';
    id('xin6').style.webkitAnimation = '';
    id('xin7').style.webkitAnimation = '';
    id('xin8').style.webkitAnimation = '';
    id('xin9').style.webkitAnimation = '';
    id('xin10').style.webkitAnimation = '';
    id('zi').style.webkitAnimation = '';
    id('word1').style.webkitAnimation = '';
    id('pagetitle').style.webkitAnimation = '';
    id('upzi').style.webkitAnimation = '';
    id('titlecontent').innerHTML = '';
    
}
</script>