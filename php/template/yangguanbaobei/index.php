<?
$p=$_WEITE['web_pic_url']."yangguanbaobei/";
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
    overflow: hidden;
}
#container > img, #container > div
{
    position: absolute;
}
#pagetitle
{
    width: 402px;
    height: 326px;
    left: 52px;
    top: 200px;
    -webkit-transform: translate(460px,0px);
}
#kawaword
{
    position: absolute;
    top: 670px;
    left: -55px;
    width: 101px;
    height: 32px;
    overflow: hidden;
}
#yun
{
    left: 290px;
    top: 100px;
}
#taiyang
{
    left: 363px;
    top: 23px;
    width: 128px;
    height: 126px;
}
#div11v
{
    position: absolute;
    width: 265px;
    height: 377px;
    top: 55px;
    left: 63px;
    -webkit-transform: translate(-334px,0px) rotate(0deg);
}
#div12v
{
    position: absolute;
    width: 265px;
    height: 377px;
    top: 355px;
    left: 141px;
    -webkit-transform: translate(370px,0px) rotate(7deg);
    -webkit-transform-origin: 100% 100%;
}
#rili
{
    left: 351px;
    top: 59px;
    width: 99px;
    height: 113px;
    -webkit-transform: translate(0px,-300px);
}
#page2
{
    position: absolute;
    width: 500px;
    height: 815px;
    left: 0px;
    top: 0px;
    -webkit-transform-origin: 50% 70%;
}
#huoli
{
    position: absolute;
    top: 125px;
    left: 56px;
    width: 181px;
    height: 53px;
    -webkit-transform: rotate(-10deg);
}
#div2h
{
    position: absolute;
    top: 243px;
    left: 48px;
    width: 402px;
    height: 326px;
}
#zaocan
{
    position: absolute;
    top: 629px;
    left: 241px;
    width: 215px;
    height: 126px;
}
#div3v
{
    width: 331px;
    height: 471px;
    left: 79px;
    top: 168px;
    -webkit-transform-origin: 50% 100%;
}
#cake
{
    left: 70px;
    top: 97px;
    width: 108px;
    -webkit-transform-origin: 50% 100%;
    height: 87px;
}
#tong
{
    left: 392px;
    top: 593px;
    width: 100px;
    height: 172px;
    -webkit-transform-origin: 50% 100%;
}
#sucai
{
    left: 305px;
    top: 655px;
    -webkit-transform-origin: 50% 100%;
    width: 94px;
    height: 97px;
}
#div4h
{
    width: 402px;
    height: 326px;
    left: 52px;
    top: 200px;
    -webkit-transform: translate(460px,0px);
}
#div4v
{
    width: 331px;
    height: 471px;
    left: 88px;
    top: 149px;
}
#div11h
{
    left: 39px;
    top: 117px;
    -webkit-transform: rotate(9deg);
}
#div12h
{
    left: 101px;
    top: 382px;
    -webkit-transform: rotate(-5deg);
}
#div2v
{
    position: absolute;
    width: 331px;
    height: 471px;
    left: 89px;
    top: 171px;
}
#div3h
{
    width: 420px;
    height: 326px;
    left: 47px;
    top: 170px;
}
</style>
<style type="text/css">
@-webkit-keyframes kuangfade
{
    0%  {opacity: 1}
    33% {opacity: 1}
    34% {opacity: 0}
    100%{opacity: 0}
}
@-webkit-keyframes word_to_right
{
    0%  {-webkit-transform: translate(0px,0px);}
    45% {-webkit-transform: translate(101px,0px);}
    100%{-webkit-transform: translate(101px,0px);}
}
@-webkit-keyframes word_to_left
{
    0%   {-webkit-transform: translate(0px,0px);}
    45%  {-webkit-transform: translate(-101px,0px);}
    100% {-webkit-transform: translate(-101px,0px);}
}
@-webkit-keyframes draw_word
{
    0%  {-webkit-transform: translate(0px,0px);}
    4%  {-webkit-transform: translate(0px,27px);}
    6%  {-webkit-transform: translate(7px,16px);}
    7%  {-webkit-transform: translate(1px,21px);}
    9%  {-webkit-transform: translate(7px,29px);}
    11% {-webkit-transform: translate(28px,19px);}
    13% {-webkit-transform: translate(17px,19px);}
    16% {-webkit-transform: translate(17px,30px);}
    18% {-webkit-transform: translate(30px,19px);}
    20% {-webkit-transform: translate(31px,26px);}
    22% {-webkit-transform: translate(37px,18px);}
    24% {-webkit-transform: translate(42px,29px);}
    26% {-webkit-transform: translate(48px,21px);}
    28% {-webkit-transform: translate(52px,30px);}
    30% {-webkit-transform: translate(56px,19px);}
    32% {-webkit-transform: translate(71px,19px);}
    34% {-webkit-transform: translate(65px,19px);}
    36% {-webkit-transform: translate(65px,28px);}
    38% {-webkit-transform: translate(75px,20px);}
    40% {-webkit-transform: translate(78px,27px);}
    41% {-webkit-transform: translate(87px,27px);}
    100%{-webkit-transform: translate(87px,27px);}
}
@-webkit-keyframes pancil
{
    0%  {-webkit-transform: rotate(0deg);}
    40%   {-webkit-transform: rotate(0deg);}
    61%   {-webkit-transform: rotate(1deg);}
    99%  {-webkit-trnasform: rotate(1deg);}
}
@-webkit-keyframes in_title
{
    from  {-webkit-transform: translate(460px,0px);}
    to    {-webkit-transform: translate(0px,0px);}
}
@-webkit-keyframes in_yun
{
    0%  {-webkit-transform: translate(0px,-300px);opacity: 1}
    80% {-webkit-transform: translate(0px,10px);opacity: 1}
    90% {-webkit-transform: translate(0px,-5px);opacity: 1}
    100%{-webkit-transform: translate(0px,0px);opacity: 1}
}
@-webkit-keyframes out_title
{
    0%    {-webkit-transform: translate(0px,0px);-webkit-animation-timing-function: ease-out;}
    20%   {-webkit-transform: translate(10px,0px);-webkit-animation-timing-function: ease-in;}
    100%  {-webkit-transform: translate(-500px,0px);}
}
@-webkit-keyframes out_yun
{
    0%   {-webkit-transform: translate(0px,0px);-webkit-animation-timing-function: ease-out;}
    20%  {-webkit-transform: translate(-10px,0px);-webkit-animation-timing-function: ease-in;}
    100% {-webkit-transform: translate(250px,0px);}
}
@-webkit-keyframes in_div11v
{
    0%   {-webkit-transform: translate(-334px,0px) rotate(0deg);-webkit-animation-timing-function: ease-out;}
    80%  {-webkit-transform: translate(0px,0px) rotate(20deg);-webkit-animation-timing-function: ease-out;}
    100% {-webkit-transform: translate(0px,0px) rotate(18deg);-webkit-animation-timing-funtion: ease-out}
}
@-webkit-keyframes in_div11h
{
    0%   {-webkit-transform: translate(-417px,0px) rotate(0deg);-webkit-animation-timing-function: ease-out;}
    80%  {-webkit-transform: translate(0px,0px) rotate(7deg);-webkit-animation-timing-function: ease-out;}
    100% {-webkit-transform: translate(0px,0px) rotate(9deg);-webkit-animation-timing-funtion: ease-out}
}
@-webkit-keyframes in_div12v
{
    0%   {-webkit-transform: translate(370px,0px) rotate(7deg);-webkit-animation-timing-funtion: ease-out;}
    80%  {-webkit-transform: translate(0px,0px) rotate(10deg);-webkit-animation-timing-funtion: ease-out;}
    100% {-webkit-transform: translate(0px,0px) rotate(12deg);-webkit-animation-timing-funtion: ease-out}
}
@-webkit-keyframes in_div12h
{
    0%   {-webkit-transform: translate(406px,0px) rotate(0deg);-webkit-animation-timing-funtion: ease-out;}
    80%  {-webkit-transform: translate(0px,0px) rotate(-3deg);-webkit-animation-timing-funtion: ease-out;}
    100% {-webkit-transform: translate(0px,0px) rotate(-5deg);-webkit-animation-timing-funtion: ease-out}
}
@-webkit-keyframes out_rili
{
    from  {-webkit-transform: translate(0px,0px) rotate(0deg);}
    to    {-webkit-transform: translate(0px,-300px) rotate(-18deg);}
}
@-webkit-keyframes out_div12v
{
    from  {-webkit-transform: translate(0px,0px) rotate(12deg);}
    to    {-webkit-transform: translate(550px,-350px) rotate(90deg) scale(0.35);}
}
@-webkit-keyframes out_div11v
{
    from  {-webkit-transform: translate(0px,0px) rotate(18deg);}
    to    {-webkit-transform: translate(-424px,-27px) rotate(120deg) scale(0.5);}
}
@-webkit-keyframes out_div12h
{
    from  {-webkit-transform: translate(0px,0px) rotate(-5deg);}
    to    {-webkit-transform: translate(534px,-300px) rotate(90deg) scale(.5);}
}
@-webkit-keyframes out_div11h
{
    from  {-webkit-transform: translate(0px,0px) rotate(9deg);}
    to    {-webkit-transform: translate(-324px,-35px) rotate(120deg) scale(.5)}
}
@-webkit-keyframes in_page2
{
    0%  {-webkit-transform: scale(0.2);opacity: 0}
    70% {-webkit-transform: scale(1.05);opacity: 1;-webkit-animation-timing-funtion: ease-in-out;}
    100%{-webkit-transform: scale(1);opacity: 1;-webkit-animation-timing-funtion: ease-out;}
}
@-webkit-keyframes in_sun_3
{
    0%  {-webkit-transform:translate(-195px,31px) rotate(0deg) scale(0.2);opacity: 1}
    70% {-webkit-transform:translate(-124px,-20px) rotate(0deg) scale(.8);}
    100%{-webkit-transform: translate(-95px,-10px) rotate(0deg) scale(1);opacity: 1}
}
@-webkit-keyframes out_sun_3
{
    from  {-webkit-transform: translate(-95px,-10px) rotate(0deg) scale(1);opacity: 1}
    to    {-webkit-transform: translate(141px,-10px) rotate(100deg) scale(1);opacity: 1}
}
@-webkit-keyframes in_zaocan
{
    0%  {-webkit-transform: translate(0px,-5px) scale(.0) rotate(-3deg);}
    70% {-webkit-transform: translate(0px,-5px) scale(1) rotate(-3deg);-webkit-animation-timing-function: ease-in;}
    95%{-webkit-transform: translate(0px,0px) scale(1) rotate(1deg);-webkit-animation-timing-funtion: ease-out;}
    100%{-webkit-transform: translate(0px,0px) scale(1) rotate(0deg);-webkit-animation-timing-funtion: ease-out;}
}
@-webkit-keyframes out_zaocan
{
    0%  {-webkit-transform: translate(0px,0px) scale(1) rotate(0deg);}
    20% {-webkit-transform: translate(0px,-15px) scale(1) rotate(0deg);}
    100%{-webkit-transform: translate(0px,10px) scale(0) rotate(0deg);}
}
@-webkit-keyframes out_div2h
{
    0%   {-webkit-transform: translate(0px,0px) scale(1) rotate(0deg);}
    20%  {-webkit-transform: translate(0px,0px) rotate(-4deg) scale(1.1)}
    95% {-webkit-transform: translate(0px,0px) rotate(4deg) scale(0);opacity: 1}
    100% {-webkit-transform: translate(0px,0px) rotate(4deg) scale(0);opacity: 0;}
}
@-webkit-keyframes out_huoli
{
    0%   {-webkit-transform: translate(0px,0px) scale(1) rotate(-10deg);}
    20%  {-webkit-transform: translate(0px,0px) scale(1.1) rotate(-10deg);}
    95%  {-webkit-transform: translate(0px,0px) scale(0.2) rotate(-10deg);opacity: 1}
    100% {-webkit-transform: translate(0px,0px) scale(0.2) rotate(-10deg);opacity: 0;}
}
@-webkit-keyframes in_div3v
{
    0%  {-webkit-transform: translate(0px,-700px) scale(1,1.05);}
    60% {-webkit-transform: translate(0px,0px) scale(1,1.05);}
    80% {-webkit-transform: translate(0px,0px) scale(1.02,.98);}
    100%{-webkit-transform: translate(0px,0px) scale(1,1);}
}
@-webkit-keyframes in_tong
{
    0%  {-webkit-transform: translate(0px,250px) scale(1,1.05);}
    70% {-webkit-transform: translate(0px,-30px) scale(1,1.05);}
    90% {-webkit-transform: translate(0px,0px) scale(1,.95);}
    100%{-webkit-transform: translate(0px,0px) scale(1);} 
}
@-webkit-keyframes in_cake
{
    0%  {-webkit-transform: translate(0px,-185px) scale(1,1)}
    80% {-webkit-transform: translate(0px,0px) scale(1,1.05);}
    90% {-webkit-transform: translate(0px,0px) scale(1,.95);}
    100%{-webkit-transform: translate(0px,0px) scale(1,1);}
}
@-webkit-keyframes in_yun3
{
    from  {-webkit-transform: translate(222px,-57px);}
    to    {-webkit-transform: translate(-415px,-57px);}
}
@-webkit-keyframes out_cake
{
    0%  {-webkit-transform: translate(0px,0px) rotate(0deg);}
    15% {-webkit-transform: translate(-26px,-19px) rotate(6deg);}
    25% {-webkit-transform: translate(-52px,0px) rotate(0deg);}
    45% {-webkit-transform: translate(-110px,-19px) rotate(6deg);}
    65% {-webkit-transform: translate(-200px,0px) rotate(0deg);}
    85% {-webkit-transform: translate(-300px,-19px) rotate(6deg);}
    100% {-webkit-transform: translate(-400px,0px) rotate(0deg);}
}
@-webkit-keyframes out_div3v
{
    0%  {-webkit-transform: translate(0px,0px) rotate(0deg);}
    10% {-webkit-transform: translate(-26px,-2px) rotate(2.5deg);}
    20% {-webkit-transform: translate(-52px,0px) rotate(0deg);}
    40% {-webkit-transform: translate(-110px,-2px) rotate(2.5deg);}
    60% {-webkit-transform: translate(-200px,0px) rotate(0deg);}
    80% {-webkit-transform: translate(-350px,-2px) rotate(2.5deg);}
    100%{-webkit-transform: translate(-500px,0px) rotate(0deg);}
}
@-webkit-keyframes out_tong
{
    0%  {-webkit-transform: translate(0px,0px);}
    9.9%  {-webkit-transform: translate(0px,0px);}
    10% {-webkit-transform: translate(10px,-10px);}
    20% {-webkit-transform: translate(10px,-10px);}
    20.1% {-webkit-transform: translate(25px,0px);}
    30% {-webkit-transform: translate(25px,0px);}
    40% {-webkit-transform: translate(25px,0px);}
    40.1% {-webkit-transform: translate(42px,-10px);}
    50% {-webkit-transform: translate(42px,-10px);}
    60% {-webkit-transform: translate(42px,-10px);}
    60.1% {-webkit-transform: translate(60px,0px);}
    70% {-webkit-transform: translate(60px,0px);}
    70.1% {-webkit-transform: translate(90px,-10px);}
    80% {-webkit-transform: translate(90px,-10px);}
    80.1% {-webkit-transform: translate(120px,-10px);}
    90% {-webkit-transform: translate(120px,-10px);}
    90.1% {-webkit-transform: translate(200px,0px);}
    100%{-webkit-transform: translate(200px,0px);}
}
@-webkit-keyframes shouhui
{
    0% {-webkit-transform: rotate(0deg);}
    33%{-webkit-transform: rotate(0deg);}
    34%{-webkit-transform: rotate(2deg);}
    77%{-webkit-transform: rotate(2deg);}
    78%{-webkit-transform: rotate(0deg);}
    100%{-webkit-transform: rotate(0deg);}
}
@-webkit-keyframes shouhui1
{
    0% {-webkit-transform: rotate(0deg);}
    33%{-webkit-transform: rotate(0deg);}
    34%{-webkit-transform: rotate(1.5deg);}
    77%{-webkit-transform: rotate(1.5deg);}
    78%{-webkit-transform: rotate(0deg);}
    100%{-webkit-transform: rotate(0deg);}
}
</style>

<div id='container' style='background:url(<?=$p?>images/bg.jpg)'>
  
    <div id='pagetitle'>
        <img id='titlekuang' src='<?=$p?>images/kuang1.png' style='left:52px;top:200px;'>
        <div style='position:absolute;width:350px;height:263px;top:25px;left:26px;overflow:hidden;'>
            <div style='position:absolute;width:350px;height:263px;display:table;overflow:hidden;'>
                <div id='titlecontent' style='width:350px;height:263px;vertical-align:middle;display:table-cell;text-align:center;font-size:40px;line-height:70px;color:#325355;'></div>
            </div>
        </div>
    </div>

    <div id='div4h' style='display:none'>
        <div style='position:absolute;width: 383px;height: 297px;overflow: hidden;top: 7px;left: 9px;'>
            <img id='img4h' style='position:absolute'>
        </div>
        <img id='kuang4h' style='position:absolute' src='<?=$p?>images/kuang1.png'>
    </div>
    <div id='div4v' style='display:none'>
        <div style='position:absolute;width: 315px;height: 456px;overflow: hidden;top: 4px;left: 7px;'>
            <img id='img4v' style='position:absolute'>
        </div>
        <img id='kuang4v' style='position:absolute' src='<?=$p?>images/kuang04.png'>
    </div>

    <div id='yun' style='left:290px;top:100px;'>
        <img src='<?=$p?>images/yun.png' style='position:absolute;-webkit-animation: shouhui 0.4s linear infinite'>
    </div>
    <div id='yun1' style='left:290px;top:100px;display:none'>
        <img src='<?=$p?>images/yun.png' style='position:absolute;-webkit-animation: shouhui 0.4s linear infinite'>
    </div>
    <div id='taiyang'>
        <img id='guang' src='<?=$p?>images/guang1.png'>
        <img src='<?=$p?>images/s.png' style='position:absolute;left:32px;top:33px;'>
    </div>

    <div id='div11v' style='display:none'>
        <div style='position:absolute;width: 252px;height: 363px;overflow: hidden;top: 3px;left: 5px;'>
            <img id='img11v' style='position:absolute'>
        </div>
        <img id='kuang11v' style='position:absolute' src='<?=$p?>images/kuang04.png' width='265'>
    </div>
    <div id='div11h' style='display:none'>
        <div style='position:absolute;width: 323px;height: 252px;overflow: hidden;top: 6px;left: 9px;'>
            <img id='img11h' style='position:absolute'>
        </div>
        <img id='kuang11h' style='position:absolute' src='<?=$p?>images/kuang1.png' width='340'>
    </div>
    <div id='div12v' style='display:none'>
        <div style='position:absolute;width: 252px;height: 363px;overflow: hidden;top: 3px;left: 5px;'>
            <img id='img12v' style='position:absolute'>
        </div>
        <img id='kuang12v' style='position:absolute' src='<?=$p?>images/kuang04.png' width='265'>
    </div>
    <div id='div12h' style='display:none'>
        <div style='position:absolute;width:325px;height:249px;overflow:hidden;top:6px;left:8px;'>
            <img id='img12h' style='position:absolute'>
        </div>
        <img id='kuang12h' style='position:absolute' src='<?=$p?>images/kuang1.png' width='340'>
    </div>
    <div id='rili' style='display:none'>
        <img src='<?=$p?>images/rili.png' style='position:absolute;-webkit-animation: shouhui 0.4s linear infinite'>
    </div>

    <div id='page2' style='display:none'>
        <div id='huoli'>
            <img src='<?=$p?>images/huoli.png' style='position:absolute;-webkit-animation: shouhui 0.4s linear infinite'>
        </div>
        <div id='div2h'>
            <div style='position:absolute;width: 384px;height: 295px;overflow: hidden;top: 8px;left: 9px;'>
                <img id='img2h' style='position:absolute'>
            </div>
            <img id='kuang2h' style='position:absolute' src='<?=$p?>images/kuang1.png'>
        </div>
        <div id='div2v'>
            <div style='position:absolute;width: 315px;height: 452px;overflow: hidden;top: 8px;left: 7px;'>
                <img id='img2v' style='position:absolute'>
            </div>
            <img id='kuang2v' style='position:absolute' src='<?=$p?>images/kuang04.png'>
        </div>
    </div>

    <div id='zaocan' style='display:none'>
        <img src='<?=$p?>images/zaocan.png' style='position:absolute;-webkit-animation:shouhui1 0.4s linear infinite'>
    </div>

    
    <div id='div3v' style='display:none'>
        <div style='position:absolute;width: 315px;height: 452px;overflow: hidden;top: 8px;left: 7px;'>
            <img id='img3v' style='position:absolute'>
        </div>
        <img id='kuang3v' style='position:absolute' src='<?=$p?>images/kuang04.png'>
    </div>
    <div id='div3h' style='display:none'>
        <div style='position:absolute;width: 385px;height: 297px;overflow: hidden;top: 7px;left: 8px;'>
            <img id='img3h' style='position:absolute'>
        </div>
        <img id='kuang3h' style='position:absolute' src='<?=$p?>images/kuang1.png'>
    </div>
    <div id='cake' style='display:none'>
        <img src='<?=$p?>images/cake.png' style='position:absolute;-webkit-animation: shouhui 0.4s linear infinite;width:108px;'>
    </div>
    <div id='tong' style='display:none'>
        <img src='<?=$p?>images/tong.png' style='position:absolute;-webkit-animation: shouhui 0.4s linear infinite;width:100px;'>
    </div>
    <div id='sucai' style='display:none'>
        <img src='<?=$p?>images/sucai1.png' style='position:absolute;-webkit-animation: shouhui 0.4s linear infinite'>
    </div>

    <div id='kawaword'>
        <img id='kawawordin' src='<?=$p?>images/kawa.png' style='position:absolute;top:0px;left:101px;width:101px;'>
    </div>
    <div id='bi' style='position:absolute;left:48px;top:589px;-webkit-transform: translate(0px,0px);width:115px;height:93px;'>
        <img id='bi' src='<?=$p?>images/bi.png' style='position:absolute;-webkit-animation: shouhui 0.3s linear infinite;'>
    </div>
    <img id='dixian' src='<?=$p?>images/01.png' style='position:absolute;left:46px;top:705px;'>
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
var timeout7;
var timeout8;
var timeout9;
var timeout10;
var delaytime=5000;
function id(name)
{
    return document.getElementById(name);
}
function load_init()
{
    // ani_init();
    load_images();
}
function load_images()
{
    id('bi').style.webkitAnimation = 'draw_word 5s linear infinite';
    id('kawaword').style.webkitAnimation = 'word_to_right 5s linear infinite';
    id('kawawordin').style.webkitAnimation = 'word_to_left 5s linear infinite';
    reshow = false;
    image_size_width=[];
    image_size_height=[];
    Onload_imgs_url=[];
    image_url_index=0;
    have_num = 0;
    error_num = 0;
    begin_titletime = new Date();
    begin_titletime = begin_titletime.getTime();
    canshow = true;
    showtitle();
    for(var i=0;i<slider_images_url.length;i++)
    {
        var img=new Image();
        img.index=i;
        img.src=slider_images_url[i];
        Onload_imgs_url[i] = img.src;
        img.onload=image_onload;
        img.onerror = image_onerror;

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
    if(index < 10)
        have_num ++ ;

    Onload_imgs_url[index] = img.src;
    image_size_height[index] = img.height;
    image_size_width[index] = img.width;

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
function ani_init()
{
    dixian = id('dixian');
    wordin = id('titlekuang');
    guang = id('guang')
    kuang11h = id('kuang11h');
    kuang11v = id('kuang11v');
    kuang12h = id('kuang12h');
    kuang12v = id('kuang12v');
    kuang2h = id('kuang2h');
    kuang2v = id('kuang2v');
    kuang3h = id('kuang3h');
    kuang3v = id('kuang3v');
    kuang4h = id('kuang4h');
    kuang4v = id('kuang4v');
    setInterval(kuang_ani,200);
}
var line_index = 1;
var divwidth = {'11h':323,'12h':325,'11v':252,'12v':252,'2h':384,'2v':315,'3h':385,'3v':315,'4h':383,'4v':315};
var divheight = {'11h':252,'12h':249,'11v':363,'12v':363,'2h':295,'2v':452,'3h':315,'3v':452,'4h':297,'4v':456};
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
    }
    else
    {
        divname = idname + 'v';
        div = id('div'+idname+'v');
        div1 = id('div'+idname+'h');
    }

    div.style.display = 'block';
    div1.style.display = 'none';


    var height = divheight[divname];
    var width = divwidth[divname];

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
}
function showtitle()
{
    id('titlecontent').innerHTML = e_desc;
    id('yun').style.display = 'block';
    id('taiyang').style.display = 'block';
    id('pagetitle').style.webkitAnimation = 'in_title 0.5s ease-out both';
    id('yun').style.webkitAnimation = 'in_yun 0.8s linear both';
    id('taiyang').style.webkitAnimation = 'in_yun 0.8s 0.2s linear both';

    // setTimeout(distitle,2000)
}
function distitle()
{
    id('pagetitle').style.webkitAnimation = 'out_title 0.6s linear both';
    id('yun').style.webkitAnimation = 'out_yun 0.6s linear both';
    id('taiyang').style.webkitAnimation = 'out_yun 0.6s 0.2s linear both';

    timeout1 = setTimeout(function()
    {
        if(image_url_index == Onload_imgs_url.length)
            image_url_index = 0;
        setImage('11');
        image_url_index ++;
        if(image_url_index == Onload_imgs_url.length)
            image_url_index = 0;
        setImage('12');
        image_url_index ++;
        id('rili').style.display = 'block';
        id('div11v').style.webkitAnimation = 'in_div11v 0.6s ease-out both';
        id('div12v').style.webkitAnimation = 'in_div12v 0.6s ease-out both';
        id('div11h').style.webkitAnimation = 'in_div11h 0.6s ease-out both';
        id('div12h').style.webkitAnimation = 'in_div12h 0.6s ease-out both';
        id('rili').style.webkitAnimation = 'in_yun 0.8s linear both';

        timeout2 = setTimeout(out_page2,2000)
    },500)
}
function out_page2()
{
    id('rili').style.webkitAnimation = 'out_rili 0.6s ease-in both';
    id('div11v').style.webkitAnimation = 'out_div11v 0.6s ease-in both';
    id('div12v').style.webkitAnimation = 'out_div12v 0.6s ease-in both';
    id('div11h').style.webkitAnimation = 'out_div11h 0.6s ease-in both';
    id('div12h').style.webkitAnimation = 'out_div12h 0.6s ease-in both';

    timeout3 = setTimeout(function()
    {
        id('page2').style.display = 'block';
        id('zaocan').style.display = 'block';
        id('taiyang').style.opacity = 0;
        if(image_url_index == Onload_imgs_url.length)
            image_url_index = 0;
        setImage('2');
        image_url_index ++;
        id('page2').style.webkitAnimation = 'in_page2 0.6s 0.4s ease-out both';
        id('taiyang').style.webkitAnimation = 'in_sun_3 .7s 1.1s linear forwards';
        id('zaocan').style.webkitAnimation = 'in_zaocan 0.7s 0.4s ease-out both';

        timeout4 = setTimeout(out_page3,3000)
    },100)
}
function out_page3()
{
    id('zaocan').style.webkitAnimation = 'out_zaocan 0.5s ease-in both';
    id('div2h').style.webkitAnimation = 'out_div2h 0.7s ease-in-out both';
    id('div2v').style.webkitAnimation = 'out_div2h 0.7s ease-in-out both';
    id('huoli').style.webkitAnimation = 'out_huoli 0.7s ease-in-out both';
    id('taiyang').style.webkitAnimation = 'out_sun_3 0.7s ease-in both';

    timeout5 = setTimeout(function()
    {
        id('tong').style.display = 'block';
        id('sucai').style.display = 'block';
        id('cake').style.display = 'block';
        if(image_url_index == Onload_imgs_url.length)
            image_url_index = 0;
        setImage('3');
        image_url_index ++;
        id('div3h').style.webkitAnimation = 'in_div3v .8s ease-out both';
        id('div3v').style.webkitAnimation = 'in_div3v .8s ease-out both';
        id('tong').style.webkitAnimation = 'in_tong .8s 0.2s ease-out both';
        id('sucai').style.webkitAnimation = 'in_tong .8s 0.4s ease-out both';
        id('cake').style.webkitAnimation = 'in_cake .5s 0.5s linear both';
        id('yun1').style.display = 'block';
        id('yun1').style.webkitAnimation = 'in_yun3 5s 1s linear both';

        timeout6 = setTimeout(out_page4,3000)
    },300)
}
function out_page4()
{
    id('cake').style.webkitAnimation = 'out_cake 1.4s linear both';
    id('div3v').style.webkitAnimation = 'out_div3v 1.4s linear both';
    id('div3h').style.webkitAnimation = 'out_div3v 1.4s linear both';
    id('tong').style.webkitAnimation = 'out_tong 1.8s linear both';
    id('sucai').style.webkitAnimation = 'out_tong 1.8s linear 0.2s both';

    timeout7 = setTimeout(function()
    {
        if(image_url_index == Onload_imgs_url.length)
            image_url_index = 0;
        setImage('4');
        image_url_index ++;
        id('div4h').style.webkitAnimation = 'in_title 0.5s ease-out both';
        id('div4v').style.webkitAnimation = 'in_title 0.5s ease-out both';
        id('yun').style.webkitAnimation = 'in_yun .8s linear both';
        id('taiyang').style.webkitAnimation = 'in_yun .8s 0.2s linear both';

        timeout8 = setTimeout(out_page1,2000);
    },2000)
}

function out_page1()
{
    id('div4h').style.webkitAnimation = 'out_title 0.6s linear both';
    id('div4v').style.webkitAnimation = 'out_title 0.6s linear both';
    id('yun').style.webkitAnimation = 'out_yun 0.6s linear both';
    id('taiyang').style.webkitAnimation = 'out_yun 0.6s 0.2s linear both';

    timeout9 = setTimeout(function()
    {
        if(image_url_index == Onload_imgs_url.length)
            image_url_index = 0;
        setImage('11');
        image_url_index ++;
        if(image_url_index == Onload_imgs_url.length)
            image_url_index = 0;
        setImage('12');
        image_url_index ++;
        id('rili').style.display = 'block';
        id('div11v').style.webkitAnimation = 'in_div11v 0.7s ease-out both';
        id('div12v').style.webkitAnimation = 'in_div12v 0.7s ease-out both';
        id('div11h').style.webkitAnimation = 'in_div11h 0.7s ease-out both';
        id('div12h').style.webkitAnimation = 'in_div12h 0.7s ease-out both';
        id('rili').style.webkitAnimation = 'in_yun 1s linear both';

        id('page2').style.display = 'none';
        id('page2').style.webkitAnimation = '';
        id('huoli').style.webkitAnimation = '';
        id('div2h').style.webkitAnimation = '';
        id('div2v').style.webkitAnimation = '';

        timeout10 = setTimeout(out_page2,2000)
    },800)
}
function kuang_ani()
{
    if(line_index == 1)
    {
        dixian.src = '<?=$p?>images/01.png';
        wordin.src = '<?=$p?>images/kuang1.png';
        guang.src = '<?=$p?>images/guang1.png';
        kuang11h.src = '<?=$p?>images/kuang1.png';
        kuang11v.src = '<?=$p?>images/kuang04.png';
        kuang12h.src = '<?=$p?>images/kuang1.png';
        kuang12v.src = '<?=$p?>images/kuang04.png';
        kuang2h.src = '<?=$p?>images/kuang1.png';
        kuang2v.src = '<?=$p?>images/kuang04.png';
        kuang3h.src = '<?=$p?>images/kuang1.png';
        kuang3v.src = '<?=$p?>images/kuang04.png';
        kuang4h.src = '<?=$p?>images/kuang1.png';
        kuang4v.src = '<?=$p?>images/kuang04.png';
    }
    else if(line_index == 2)
    {
        dixian.src = '<?=$p?>images/02.png';
        wordin.src = '<?=$p?>images/kuang2.png';
        guang.src = '<?=$p?>images/guang2.png';
        kuang11h.src = '<?=$p?>images/kuang2.png';
        kuang11v.src = '<?=$p?>images/kuang05.png';
        kuang12h.src = '<?=$p?>images/kuang2.png';
        kuang12v.src = '<?=$p?>images/kuang05.png';
        kuang2h.src = '<?=$p?>images/kuang2.png';
        kuang2v.src = '<?=$p?>images/kuang05.png';
        kuang3h.src = '<?=$p?>images/kuang2.png';
        kuang3v.src = '<?=$p?>images/kuang05.png';
        kuang4h.src = '<?=$p?>images/kuang2.png';
        kuang4v.src = '<?=$p?>images/kuang05.png';
    }
    else
    {
        dixian.src = '<?=$p?>images/03.png';
        wordin.src = '<?=$p?>images/kuang3.png';
        guang.src = '<?=$p?>images/guang3.png';
        kuang11h.src = '<?=$p?>images/kuang3.png';
        kuang11v.src = '<?=$p?>images/kuang06.png';
        kuang12h.src = '<?=$p?>images/kuang3.png';
        kuang12v.src = '<?=$p?>images/kuang06.png';
        kuang2h.src = '<?=$p?>images/kuang3.png';
        kuang2v.src = '<?=$p?>images/kuang06.png';
        kuang3h.src = '<?=$p?>images/kuang3.png';
        kuang3v.src = '<?=$p?>images/kuang06.png';
        kuang4h.src = '<?=$p?>images/kuang3.png';
        kuang4v.src = '<?=$p?>images/kuang06.png';
    }
    line_index ++;
    if(line_index == 4)
        line_index = 1;
}
function reload_scene()
{
    clearnode();
    reshow = true;
    load_images();

}
function clearnode()
{
    id('div11h').style.display = 'none';
    id('div12h').style.display = 'none';
    id('div11v').style.display = 'none';
    id('div12v').style.display = 'none';
    id('div2h').style.display = 'none';
    id('div2v').style.display = 'none';
    id('div3h').style.display = 'none';
    id('div3v').style.display = 'none';
    id('div4v').style.display = 'none';
    id('div4h').style.display = 'none';
    id('page2').style.display = 'none';
    id('tong').style.display = 'none';
    id('sucai').style.display = 'none';
    id('taiyang').style.display = 'none';
    id('cake').style.display = 'none';
    id('yun').style.display = 'none';
    id('yun1').style.display = 'none';
    id('zaocan').style.display = 'none';
    id('rili').style.display = 'none';
    id('div11h').style.webkitAnimation = '';
    id('div12h').style.webkitAnimation = '';
    id('div11v').style.webkitAnimation = '';
    id('div12v').style.webkitAnimation = '';
    id('div2h').style.webkitAnimation = '';
    id('div2v').style.webkitAnimation = '';
    id('div3h').style.webkitAnimation = '';
    id('div3v').style.webkitAnimation = '';
    id('div4v').style.webkitAnimation = '';
    id('div4h').style.webkitAnimation = '';
    id('page2').style.webkitAnimation = '';
    id('tong').style.webkitAnimation = '';
    id('sucai').style.webkitAnimation = '';
    id('taiyang').style.webkitAnimation = '';
    id('cake').style.webkitAnimation = '';
    id('yun').style.webkitAnimation = '';
    id('yun1').style.webkitAnimation = '';
    id('zaocan').style.webkitAnimation = '';
    id('rili').style.webkitAnimation = '';
    clearTimeout(timeout0);
    clearTimeout(timeout1);
    clearTimeout(timeout2);
    clearTimeout(timeout3);
    clearTimeout(timeout4);
    clearTimeout(timeout5);
    clearTimeout(timeout6);
    clearTimeout(timeout7);
    clearTimeout(timeout8);
    clearTimeout(timeout9);
    clearTimeout(timeout10);
}
call_me(load_init);

</script>
