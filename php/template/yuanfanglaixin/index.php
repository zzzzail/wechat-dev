<?
$p=$_WEITE['web_pic_url']."yuanfanglaixin/";
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
#container > div,#container > img
{
    position: absolute;
}
#ye
{
    left: -9px;
    top: -9px;
    -webkit-transform-origin: 25% 15%;
    -webkit-animation: shuye 1.5s ease-in-out infinite alternate;
}
#ye1
{
    width: 100px;
    left: 45px;
    top: -16px;
    -webkit-transform-origin: 25% 15%;
    -webkit-animation: shuye 1.5s ease-in-out 0.5s infinite alternate;
}
#huapen
{
    left: 294px;
    top: 575px;
}
#hudie1
{
    width: 135px;
    height: 135px;
    -webkit-transform: scale(0.6);
    position: absolute;
}
#hudie1ying
{
    width: 135px;
    height: 135px;
    left: 0px;
    top: 0px;
    -webkit-transform: scale(0.6);
    position: absolute;
}
#hudie2
{
    width: 135px;
    height: 135px;
    -webkit-transform: scale(-0.6);
    position: absolute;
    left: 21px;
    top: 88px;
}
#hudie2ying
{
    width: 135px;
    height: 135px;
    -webkit-transform: scale(-0.6);
    position: absolute;
    left: 21px;
    top: 88px;
}
#hudiearea
{
    width: 135px;
    height: 524px;
    /*background: #fff;*/
    left: 132px;
    top: 0px;
    -webkit-transform-origin: 50% 100%;
    -webkit-transform: rotate(0deg);
}
#hudieareaying
{
    width: 135px;
    height: 524px;
    /*background: #fff;*/
    left: 132px;
    top: 8px;
    opacity: 0.3;
    -webkit-transform-origin: 50% 100%;
    -webkit-transform: rotate(0deg);
}
#hudiearea2
{
    width: 150px;
    height: 150px;
    /*background-color: #fff;*/
    left: 344px;
    top: 545px;
    position: absolute;
    -webkit-animation: hudiearea2 15s linear infinite;
}
#hudiearea2ying
{
    width: 150px;
    height: 150px;
    /*background-color: #fff;*/
    left: 349px;
    top: 552px;
    opacity: 0.3;
    position: absolute;
    -webkit-animation: hudiearea2 15s linear infinite;
}
#pagetitle
{
    width: 500px;
    height: 815px;
    background-color: rgba(0,0,0,0.5);
    color: #fff;
    font-size: 38px;
    text-align: center;
    line-height: 55px;
    pointer:none;
    z-index: 10;
}
.threeline
{
    position: absolute;
    height: 55px;
    left: 0px;
    width: 420px;
    line-height: 200px;
}
.oneline
{
    position: absolute;
    height: 100px;
    left: 0px;
    width: 420px;
    line-height: 400px;
}
.twoline
{
    position: absolute;
    height: 80px;
    line-height: 80px;
    left: 0px;
    width: 420px;
    line-height: 300px;
}
#div11h
{
    position: absolute;
    width: 400px;
    height: 275px;
    left: 92px;
    top: 53px;
    /*-webkit-transform: rotate(20deg);*/
    -webkit-transform: translate(0px,0px) scale(1) rotate(0deg);
}
#div12h
{
    position: absolute;
    width: 400px;
    height: 275px;
    left: 71px;
    top: 309px;
    -webkit-transform: translate(0px,0px) scale(1) rotate(0deg);
    /*-webkit-transform: rotate(7deg);*/
}
.box11h
{
    position: absolute;
    overflow: hidden;
    width: 349px;
    height: 222px;
    left: 21px;
    top: 19px;
}
#div11v
{
    width: 275px;
    height: 400px;
    left: 219px;
    top: 5px;
    -webkit-transform: translate(0px,0px) rotate(6deg);
}
#div12v
{
    width: 275px;
    height: 409px;
    left: 65px;
    top: 234px;
    -webkit-transform: translate(0px,0px) rotate(-18deg);
}
.box11v
{
    position: absolute;
    overflow: hidden;
    left: 23px;
    top: 20px;
    width: 227px;
    height: 349px;
}
#div2h
{
    width: 400px;
    height: 275px;
    -webkit-transform: translate(0px,0px) rotate(11deg) scale(1.20);
    left: 59px;
    top: 181px;
}
#div2v 
{
    width: 275px;
    height: 409px;
    left: 115px;
    top: 111px;
    -webkit-transform: translate(12px,31px) rotate(-2deg) scale(1.3);
}
#div3v
{
    width: 275px;
    height: 409px;
    left: 139px;
    top: 53px;
    /*-webkit-transform-origin: 100% 0%;*/
}
#div3h
{
    width: 400px;
    height: 275px;
    -webkit-transform: translate(0px,0px) rotate(13deg) scale(1.2);
    left: 60px;
    top: 162px;
}
</style>
<style type="text/css">
@-webkit-keyframes chibang1
{
    0% {-webkit-transform: scale(1,1);}
    7% {-webkit-transform: scale(1,0.1);}
    14%{-webkit-transform: scale(1,1);}
    21%{-webkit-transform: scale(1,0.1);}
    28%{-webkit-transform: scale(1,1);}
    35%{-webkit-transform: scale(1,0.1);}
    42%{-webkit-transform: scale(1,1);}
    49%{-webkit-transform: scale(1,0.1);}
    56%{-webkit-transform: scale(1,1);}
    70%{-webkit-transform: scale(1,0.1);}
    100%{-webkit-transform: scale(1,1);}
}
@-webkit-keyframes chibang2
{
    0% {-webkit-transform: scale(1,-1);}
    7% {-webkit-transform: scale(1,-0.1);}
    14%{-webkit-transform: scale(1,-1);}
    21%{-webkit-transform: scale(1,-0.1);}
    28%{-webkit-transform: scale(1,-1);}
    35%{-webkit-transform: scale(1,-0.1);}
    42%{-webkit-transform: scale(1,-1);}
    49%{-webkit-transform: scale(1,-0.1);}
    56%{-webkit-transform: scale(1,-1);}
    70%{-webkit-transform: scale(1,-0.1);}
    100%{-webkit-transform: scale(1,-1);}
}
@-webkit-keyframes hudiearea
{
    0%  {-webkit-transform: rotate(-43deg);}
    60%  {-webkit-transform: rotate(49deg);opacity: 1}
    61%  {-webkit-transform: rotate(49deg);opacity: 0}
    100%  {-webkit-transform: rotate(49deg);opacity: 0}
}
@-webkit-keyframes chibang3
{
    0% {-webkit-transform: scale(1,1);}
    3% {-webkit-transform: scale(1,0.1);}
    6% {-webkit-transform: scale(1,1);}
    9% {-webkit-transform: scale(1,0.1);}
    12% {-webkit-transform: scale(1,1);}
    15% {-webkit-transform: scale(1,0.1);}
    18% {-webkit-transform: scale(1,1);}
    21% {-webkit-transform: scale(1,0.1);}
    24% {-webkit-transform: scale(1,1);}
    27% {-webkit-transform: scale(1,0.1);}
    30% {-webkit-transform: scale(1,1);}
    33% {-webkit-transform: scale(1,0.1);}
    36% {-webkit-transform: scale(1,1);}
    39% {-webkit-transform: scale(1,0.1);}
    42% {-webkit-transform: scale(1,1);}
    45% {-webkit-transform: scale(1,0.1);}
    48% {-webkit-transform: scale(1,1);}
    51% {-webkit-transform: scale(1,0.1);}
    54% {-webkit-transform: scale(1,1);}
    57% {-webkit-transform: scale(1,0.1);}
    60% {-webkit-transform: scale(1,1);}
    63% {-webkit-transform: scale(1,0.1);}
    97% {-webkit-transform: scale(1,0.1);}
    100%{-webkit-transform: scale(1,1);}
}
@-webkit-keyframes chibang4
{
    0% {-webkit-transform: scale(1,-1);}
    3% {-webkit-transform: scale(1,-0.1);}
    6% {-webkit-transform: scale(1,-1);}
    9% {-webkit-transform: scale(1,-0.1);}
    12% {-webkit-transform: scale(1,-1);}
    15% {-webkit-transform: scale(1,-0.1);}
    18% {-webkit-transform: scale(1,-1);}
    21% {-webkit-transform: scale(1,-0.1);}
    24% {-webkit-transform: scale(1,-1);}
    27% {-webkit-transform: scale(1,-0.1);}
    30% {-webkit-transform: scale(1,-1);}
    33% {-webkit-transform: scale(1,-0.1);}
    36% {-webkit-transform: scale(1,-1);}
    39% {-webkit-transform: scale(1,-0.1);}
    42% {-webkit-transform: scale(1,-1);}
    45% {-webkit-transform: scale(1,-0.1);}
    48% {-webkit-transform: scale(1,-1);}
    51% {-webkit-transform: scale(1,-0.1);}
    54% {-webkit-transform: scale(1,-1);}
    57% {-webkit-transform: scale(1,-0.1);}
    60% {-webkit-transform: scale(1,-1);}
    63% {-webkit-transform: scale(1,-0.2);}
    97% {-webkit-transform: scale(1,-0.2);}
    100%{-webkit-transform: scale(1,-1);}
}
@-webkit-keyframes hudiearea2
{
    0%  {-webkit-transform: rotate(0deg);}
    15% {-webkit-transform: rotate(90deg);}
    30% {-webkit-transform: rotate(180deg);}
    45% {-webkit-transform: rotate(270deg);}
    60% {-webkit-transform: rotate(360deg);}
    100%{-webkit-transform: rotate(360deg);}
}
@-webkit-keyframes hudie2plus
{
    0%  {-webkit-transform: translate(0px,0px);}
    30% {-webkit-transform: translate(50px,0px);}
    60% {-webkit-transform: translate(0px,0px);}
    100%{-webkit-transform: translate(0px,0px);}
}
@-webkit-keyframes in_fadeup
{
    from  {-webkit-transform: translate(0px,60px);opacity: 0}
    to    {-webkit-transform: translate(0px,0px);opacity: 1}
}
@-webkit-keyframes out_fadeup
{
    from  {-webkit-transform: translate(0px,0px);opacity: 1}
    to    {-webkit-transform: translate(0px,-50px);opacity: 0}
}
@-webkit-keyframes fadeout
{
    from  {opacity: 1}
    to    {opacity: 0}
}
@-webkit-keyframes in_div12h
{
    0%  {-webkit-transform: translate(-103px,155px) rotate(27deg) scale(0.7,0.65);}
    32% {-webkit-transform: translate(-30px,40px) rotate(25deg) scale(.70);-webkit-animation-timing-function: ease-out;}
    80% {-webkit-transform: translate(0px,0px) rotate(7deg) scale(1.03);-webkit-animation-timing-function: ease-out;}
    100%{-webkit-transform: translate(0px,0px) rotate(7deg) scale(1.0);}
}
@-webkit-keyframes in_div11h
{
    0%    {-webkit-transform: translate(-120px,408px) scale(.6) rotate(27deg);}
    40%   {-webkit-transform: translate(-20px,165px) scale(.75) rotate(25deg);}
    80%   {-webkit-transform: translate(0px,0px) scale(1.02) rotate(20deg);-webkit-animation-timing-function: ease-out;}
    100%  {-webkit-transform: translate(0px,0px) scale(1.0) rotate(20deg);}
}
@-webkit-keyframes out_div11h
{
    0%  {-webkit-transform: translate(0px,0px) scale(1) rotate(20deg);opacity: 1}
    100%{-webkit-transform: translate(206px,-299px) scale(1) rotate(38deg);opacity: 0}
/*    0%,60% {opacity: 1}
    100%   {opacity: 0}*/
}
@-webkit-keyframes out_div12h
{
    0%  {-webkit-transform: translate(0px,0px) rotate(7deg) scale(1.0);opacity: 1}
    100%{-webkit-transform: translate(-191px,-583px) scale(1) rotate(-30deg);opacity: 0}
/*    0%,60% {opacity: 1}
    100%   {opacity: 0}*/
}
@-webkit-keyframes in_div11v
{
    0%   {-webkit-transform: translate(-198px,390px) rotate(-57deg) scale(.6);}
    50%  {-webkit-transform: translate(-25px,100px) rotate(-21deg) scale(.8);}
    80%  {-webkit-transform: translate(0px,0px) rotate(6deg) scale(1.03);}
    100% {-webkit-transform: translate(0px,0px) rotate(6deg) scale(1.0);}
}
@-webkit-keyframes in_div12v
{
    0%   {-webkit-transform: translate(-15px,179px) rotate(-64deg) scale(.60);}
    32%  {-webkit-transform: translate(20px,53px) rotate(-32deg) scale(.65);}
    80%  {-webkit-transform: translate(0px,0px) rotate(-18deg) scale(1.05);}
    100% {-webkit-transform: translate(0px,0px) rotate(-18deg) scale(1.00);}
}
@-webkit-keyframes out_div11v
{
    0%   {-webkit-transform: translate(0px,0px) rotate(6deg);opacity: 1}
    100% {-webkit-transform: translate(190px,-190px) rotate(-37deg);opacity: 0}
/*    0%,70% {opacity: 1}
    100%   {opacity: 0}*/
}
@-webkit-keyframes out_div12v
{
    0%  {-webkit-transform: translate(0px,0px) rotate(-18deg);opacity: 1}
    100%{-webkit-transform: translate(-222px,-468px) rotate(-36deg);opacity: 0}
/*    0%,70% {opacity: 1}
    100%   {opacity: 0}*/
}
@-webkit-keyframes in_div2h 
{
    0%   {-webkit-transform: translate(-85px,275px) rotate(20deg) scale(0.65,0.6);}
    50%  {-webkit-transform: translate(0px,50px) rotate(15deg) scale(0.8);}
    100% {-webkit-transform: translate(0px,0px) rotate(11deg) scale(1.2);}
}
@-webkit-keyframes in_div2v 
{
    0%   {-webkit-transform: translate(-118px,269px) rotate(-56deg) scale(0.6,0.5);}
    38%  {-webkit-transform: translate(20px,190px) rotate(-20deg) scale(0.65);}
    100% {-webkit-transform: translate(12px,31px) rotate(-2deg) scale(1.3);}
}
@-webkit-keyframes out_div2v
{
    0%   {-webkit-transform: translate(12px,31px) rotate(-2deg) scale(1.3);opacity: 1}
    100% {-webkit-transform: translate(1px,-307px) rotate(-2deg) scale(1.3);opacity: 0}
/*    0%,20% {opacity: 1}
    100%   {opacity: 0}*/
}
@-webkit-keyframes out_div2h 
{
    0%   {-webkit-transform: translate(0px,0px) rotate(11deg) scale(1.2);opacity: 1}
    100% {-webkit-transform: translate(-353px,-90px) rotate(11deg) scale(1.20);opacity: 0}
/*    0%,20% {opacity: 1}
    100%   {opacity: 0}*/
}
@-webkit-keyframes in_div3v
{
    0%   {-webkit-transform: translate(-94px,351px) rotate(-59deg) scale(0.6)}
    55%  {-webkit-transform: translate(89px,3px) rotate(6deg) scale(0.8);}
    100% {-webkit-transform: translate(-16px,72px) rotate(-6deg) scale(1.4);}
}
@-webkit-keyframes in_div3h
{
    0%  {-webkit-transform: translate(-94px,303px) rotate(28deg) scale(0.60,0.5);}
    55% {-webkit-transform: translate(93px,-50px) rotate(10deg) scale(0.8);}
    100%{-webkit-transform: translate(-2px,25px) rotate(11deg) scale(1.2);}
}
@-webkit-keyframes out_div3h
{
    0%  {-webkit-transform: translate(-2px,25px) rotate(11deg) scale(1.2);opacity: 1}
    100%{-webkit-transform: translate(305px,-329px) rotate(79deg) scale(0.8);opacity: 0}
/*    0%,30%  {opacity: 1}
    100%    {opacity: 0}*/
}
@-webkit-keyframes out_div3v
{
    0%  {-webkit-transform: translate(-16px,72px) rotate(-6deg) scale(1.4);opacity: 1}
    100% {-webkit-transform: translate(212px,-188px) rotate(82deg) scale(0.8);opacity: 0}
/*    0%,30% {opacity: 1}
    100%   {opacity: 0}*/
}
@-webkit-keyframes shuye
{
    from  {-webkit-transform: rotate(0deg);}
    to    {-webkit-transform: rotate(5deg);}
}
@-webkit-keyframes yezi
{
    from  {-webkit-transform: rotate(0deg);}
    to    {-webkit-transform: rotate(1080deg);}
}
</style>
<div id='container'>
    <img src='<?=$p?>images/bg.jpg'>
    <!-- <img src='<?=$p?>images/demo3.jpg' width='500'> -->

    <img id='ye' src='<?=$p?>images/ye1.png'>
    <img id='ye1' src='<?=$p?>images/ye1.png'>

    <img id='huapen' src='<?=$p?>images/xiaohua.png'>

    <img src='<?=$p?>images/di.png' style='left:-11px;top:474px;'>

    <div id='div3h' style='display:none;-webkit-transform: translate(-94px,303px) rotate(28deg) scale(0.60,0.5);'>
        <img src='<?=$p?>images/didid.png' style='width:275px;height:400px;-webkit-transform: rotate(92deg);left:59px;top:-66px;position:absolute;'>
        <div class='box11h'>
            <img id='img3h' style='position:absolute'>
        </div>
    </div>
    <div id='div3v' style='display:none;-webkit-transform: translate(-94px,351px) rotate(-59deg) scale(0.6)'>
        <img src='<?=$p?>images/didid.png' style='width:275px;position:absolute;-webkit-transform: rotate(2deg)'>
        <div class='box11v'>
            <img id='img3v' style='position:absolute'>
        </div>
    </div>
    <div id='div2h' style='display:none;-webkit-transform: translate(-85px,275px) rotate(20deg) scale(0.65,0.6);'>
        <img src='<?=$p?>images/didid.png' style='width:275px;height:400px;-webkit-transform: rotate(92deg);left:59px;top:-66px;position:absolute;'>
        <div class='box11h'>
            <img id='img2h' style='position:absolute'>
        </div>
    </div>
    <div id='div2v' style='display:none;-webkit-transform: translate(-118px,269px) rotate(-56deg) scale(0.6,0.5);'>
        <img src='<?=$p?>images/didid.png' style='width:275px;position:absolute;-webkit-transform: rotate(2deg)'>
        <div class='box11v'>
            <img id='img2v' style='position:absolute'>
        </div>
    </div>

    <div id='div11h' style='display:none;-webkit-transform: translate(-120px,408px) scale(.6) rotate(27deg);'>
        <img src='<?=$p?>images/didid.png' style='width:275px;height:400px;-webkit-transform: rotate(92deg);left:59px;top:-66px;position:absolute;'>
        <div class='box11h'>
            <img id='img11h' style='position:absolute'>
        </div>
    </div>

    <div id='div11v' style='display:none;-webkit-transform: translate(-198px,390px) rotate(-57deg) scale(.6);'>
        <img src='<?=$p?>images/didid.png' style='width:275px;position:absolute;-webkit-transform: rotate(2deg)'>
        <div class='box11v'>
            <img id='img11v' style='position:absolute'>
        </div>
    </div>
    <div id='div12h' style='display:none;-webkit-transform: translate(-103px,155px) rotate(27deg) scale(0.7,0.65);'>
        <img src='<?=$p?>images/didid.png' style='width:275px;height:400px;-webkit-transform: rotate(92deg);left:59px;top:-66px;position:absolute;'>
        <div class='box11h'>
            <img id='img12h' style='position:absolute'>
        </div>
    </div>
    <div id='div12v' style='display:none;-webkit-transform: translate(-15px,179px) rotate(-64deg) scale(.60);'>
        <img src='<?=$p?>images/didid.png' style='width:275px;position:absolute;-webkit-transform: rotate(2deg)'>
        <div class='box11v'>
            <img id='img12v' style='position:absolute'>
        </div>
    </div>

    <img src='<?=$p?>images/mian.png' style='left:-11px;top:474px;z-index:5'>
    <img src='<?=$p?>images/ye.png' style='left:183px;top:635px;width:24px;z-index:5;-webkit-animation: yezi 10s ease-out infinite alternate'>

    <div id='hudieareaying' style='-webkit-animation: hudiearea 12s linear infinite;z-index:5'>
        <div id='hudie1ying'>
            <img src='<?=$p?>images/ying.png' style='position:absolute;-webkit-transform: scale(1,-1);-webkit-transform-origin: 50% 0%;top:61px;-webkit-animation: chibang2 4s linear infinite'>
            <img src='<?=$p?>images/ying.png' style='position:absolute;left:0px;top:63px;-webkit-transform-origin: 50% 0%;-webkit-animation: chibang1 4s linear infinite'>
            <img src='<?=$p?>images/shen1.png' style='position:absolute;left:40px;top:44px;'>
        </div>
    </div>
    <div style='position:absolute;-webkit-animation: hudie2plus 15s linear infinite;z-index:5'>
        <div id='hudiearea2ying'>
            <div id='hudie2ying'>
                <img src='<?=$p?>images/shen1.png' style='position:absolute;left:40px;top:44px;'>
                <img src='<?=$p?>images/ying.png' style='position:absolute;-webkit-transform: scale(1,-1);-webkit-transform-origin: 50% 0%;top:61px;-webkit-animation: chibang4 15s linear infinite'>
                <img src='<?=$p?>images/ying.png' style='position:absolute;left:0px;top:63px;-webkit-transform-origin: 50% 0%;-webkit-animation: chibang3 15s linear infinite'>
                
            </div>
        </div>
    </div>

    <div id='hudiearea' style='-webkit-animation: hudiearea 12s linear infinite;z-index:5'>
        <div id='hudie1'>
            <img src='<?=$p?>images/02.png' style='position:absolute;-webkit-transform: scale(1,-1);-webkit-transform-origin: 50% 0%;top:61px;-webkit-animation: chibang2 4s linear infinite'>
            <img src='<?=$p?>images/02.png' style='position:absolute;left:0px;top:63px;-webkit-transform-origin: 50% 0%;-webkit-animation: chibang1 4s linear infinite'>
            <img src='<?=$p?>images/shen.png' style='position:absolute;left:40px;top:44px;'>
        </div>
    </div>
    <div style='position:absolute;-webkit-animation: hudie2plus 15s linear infinite;z-index:5'>
        <div id='hudiearea2'>
            <div id='hudie2'>
                <img src='<?=$p?>images/shen.png' style='position:absolute;left:40px;top:44px;'>
                <img src='<?=$p?>images/02.png' style='position:absolute;-webkit-transform: scale(1,-1);-webkit-transform-origin: 50% 0%;top:61px;-webkit-animation: chibang4 15s linear infinite'>
                <img src='<?=$p?>images/02.png' style='position:absolute;left:0px;top:63px;-webkit-transform-origin: 50% 0%;-webkit-animation: chibang3 15s linear infinite'>
                
            </div>
        </div>
    </div>

    <div id='pagetitle'>
        <div style='position:absolute;width:420px;top:100px;height:200px;left:40px;'>
            <div id='line1'>
            </div>
            <div id='line2'>
            </div>
            <div id='line3'>
            </div>
        </div>
    </div>
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

var delaytime = 5000;
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
    canshow = true;

    showtitle();
    div11v = id('div11v');
    div12v = id('div12v');
    div11h = id('div11h');
    div12h = id('div12h');
    div2h = id('div2h');
    div2v = id('div2v');
    div3h = id('div3h');
    div3v = id('div3v');


    for(var i=0;i<slider_images_url.length;i++)
    {
        var img=new Image();
        img.index=i;
        img.src=slider_images_url[i];
        Onload_imgs_url[i] = 'loading';
        img.onload=image_onload;
        img.onerror = image_onerror;
    }       
}
function image_onerror(event)
{
    var img = event.target;
    var index = img.index;
    if(index<10)
    {
        error_num ++;
    }
    Onload_imgs_url[index] = 'not find';
    console.log(Onload_imgs_url[index]);
    console.log(have_num + '-' + error_num);
    if((have_num+error_num >= 10 || slider_images_url.length == (have_num + error_num)) && canshow == true)
    {   
        reshow = false;
        canshow =false;
        if(have_num == 0)
            return;

        var end_titletime = new Date();
        end_titletime = end_titletime.getTime();
        var dis_titletime = Math.abs(end_titletime-begin_titletime);

        if(image_url_index == Onload_imgs_url.length)
            image_url_index = 0;
        setImage('11');
        image_url_index++;
        if(image_url_index == Onload_imgs_url.length)
            image_url_index = 0;
        setImage('12');
        image_url_index++;
        if(image_url_index == Onload_imgs_url.length)
            image_url_index = 0;
        setImage('2');
        image_url_index++;
        setZIndex(1);
            
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
    var img=event.target;
    var index = img.index;

    if(index<10)
    {
        have_num++;
    }
    Onload_imgs_url[index] = img.src;
    image_size_height[index] = img.height;
    image_size_width[index] = img.width;

    if(((have_num+error_num) >= 10 || slider_images_url.length == (have_num + error_num)) && canshow == true)
    {   
        reshow = false;
        canshow =false;
        if(have_num == 0)
            return;

        var end_titletime = new Date();
        end_titletime = end_titletime.getTime();
        var dis_titletime = Math.abs(end_titletime-begin_titletime);

        if(image_url_index == Onload_imgs_url.length)
            image_url_index = 0;
        setImage('11');
        image_url_index++;
        if(image_url_index == Onload_imgs_url.length)
            image_url_index = 0;
        setImage('12');
        image_url_index++;
        if(image_url_index == Onload_imgs_url.length)
            image_url_index = 0;
        setImage('2');
        image_url_index++;
        setZIndex(1);
            
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
function id (name) 
{
    return document.getElementById(name);
}
function show1 () 
{    
    if(image_url_index == Onload_imgs_url.length)
        image_url_index = 0;
    setImage('2',image_url_index);
    image_url_index++;
    setZIndex(1);
    id('div2h').style.webkitAnimation = '';
    id('div2v').style.webkitAnimation = '';

    id('div3v').style.webkitAnimation = 'out_div3v 1.5s linear both';
    id('div3h').style.webkitAnimation = 'out_div3h 1.5s linear both';

    id('div11h').style.webkitAnimation = 'in_div11h 1.2s 0.5s linear both';
    id('div12h').style.webkitAnimation = 'in_div12h 1.2s 1.5s linear both';
    id('div11v').style.webkitAnimation = 'in_div11v 1.2s 0.5s linear both';
    id('div12v').style.webkitAnimation = 'in_div12v 1.2s 1.5s linear both';

    timeout1 = setTimeout(changediv1index,1000)
    timeout2 = setTimeout(show2,4000)
}
function begin_show()
{
    id('div2h').style.webkitAnimation = '';
    id('div2v').style.webkitAnimation = '';

    id('div3v').style.webkitAnimation = 'out_div3v 1.5s linear both';
    id('div3h').style.webkitAnimation = 'out_div3h 1.5s linear both';

    id('div11h').style.webkitAnimation = 'in_div11h 1.2s 0.5s linear both';
    id('div12h').style.webkitAnimation = 'in_div12h 1.2s 1.5s linear both';
    id('div11v').style.webkitAnimation = 'in_div11v 1.2s 0.5s linear both';
    id('div12v').style.webkitAnimation = 'in_div12v 1.2s 1.5s linear both';

    timeout3 = setTimeout(changediv1index,1000)
    timeout4 = setTimeout(show2,4000)
}
function show2 () 
{

    id('div3h').style.display = 'none';
    id('div3v').style.display = 'none';
    id('div3v').style.webkitAnimation = '';
    id('div3h').style.webkitAnimation = '';

    if(image_url_index == Onload_imgs_url.length)
        image_url_index = 0;
    setImage('3',image_url_index);
    image_url_index++;
    setZIndex(2);
    
    id('div11h').style.webkitAnimation = 'out_div11h 1.2s linear both';
    id('div12h').style.webkitAnimation = 'out_div12h 1.5s linear both';
    id('div11v').style.webkitAnimation = 'out_div11v 1.2s linear both';
    id('div12v').style.webkitAnimation = 'out_div12v 1.5s linear both';

    id('div2h').style.webkitAnimation = 'in_div2h 1.8s linear both';
    id('div2v').style.webkitAnimation = 'in_div2v 1.8s linear both';

    timeout5 = setTimeout(show3,4000)
}
function show3 () 
{
    if(image_url_index == Onload_imgs_url.length)
        image_url_index = 0;
    setImage('11',image_url_index);
    image_url_index++;
    if(image_url_index == Onload_imgs_url.length)
        image_url_index = 0;
    setImage('12',image_url_index);
    image_url_index++;
    setZIndex(3);

    id('div11h').style.webkitAnimation = '';
    id('div12h').style.webkitAnimation = '';
    id('div11v').style.webkitAnimation = '';
    id('div12v').style.webkitAnimation = '';


    id('div2h').style.webkitAnimation = 'out_div2h 1.5s linear both';
    id('div2v').style.webkitAnimation = 'out_div2v 1.5s linear both';

    id('div3h').style.webkitAnimation = 'in_div3h 3s linear both';
    id('div3v').style.webkitAnimation = 'in_div3v 3s linear both';

    timeout6 = setTimeout(show1,4000)
}

function showtitle()
{
    var line1 = id('line1');
    var line2 = id('line2');
    var line3 = id('line3');
    if(e_desc.length>20)//3��
    {

        line1.innerHTML = e_desc.substring(0,10);
        line1.className = 'threeline';
        line1.style.top = '28px';
        line1.style.webkitAnimation = 'in_fadeup 1s linear both';
        line2.innerHTML = e_desc.substring(10,20);
        line2.style.top = '78px';
        line2.className = 'threeline';
        line2.style.webkitAnimation = 'in_fadeup 1s linear 0.5s both';
        if(e_desc.length>30)
        {
            line3.innerHTML = e_desc.substring(20,30);
        }
        else
        {
            line3.innerHTML = e_desc.substring(20,e_desc.length);
        }

        line3.style.top = '128px';
        line3.className = 'threeline';
        line3.style.webkitAnimation = 'in_fadeup 1s linear 1s both';
    }
    else if(e_desc.length<11)//1��
    {
        line1.innerHTML = e_desc;
        line1.className = 'oneline';
        line1.style.top = '0px';
        line1.style.webkitAnimation = 'in_fadeup 1s linear both';

        line2.innerHTML = '';
        line3.innerHTML = '';
    }
    else//2��
    {
        line1.innerHTML = e_desc.substring(0,10);
        line2.innerHTML = e_desc.substring(10,e_desc.length);
        line1.className = 'twoline';
        line2.className = 'twoline';
        line1.style.top = '8px';
        line2.style.top = '67px';
        line3.innerHTML = '';

        line2.style.webkitAnimation = 'in_fadeup 1s 0.5s linear both';
        line1.style.webkitAnimation = 'in_fadeup 1s linear both';
    }
}
function distitle()
{
    var line1 = id('line1');
    var line2 = id('line2');
    var line3 = id('line3');
    var pagetitle = id('pagetitle');
    if(e_desc.length>20)
    {
        line3.style.webkitAnimation = 'out_fadeup 1s 1s linear both';
        line2.style.webkitAnimation = 'out_fadeup 1s 0.5s linear both';
        line1.style.webkitAnimation = 'out_fadeup 1s linear both';
        pagetitle.style.webkitAnimation = 'fadeout 1s 1s linear both';
    }
    else if(e_desc.length<11)
    {
        line1.style.webkitAnimation = 'out_fadeup 1s linear both';
        pagetitle.style.webkitAnimation = 'fadeout 1s linear both';
    }
    else
    {
        line2.style.webkitAnimation = 'out_fadeup 1s 0.5s linear both';
        line1.style.webkitAnimation = 'out_fadeup 1s linear both';
        pagetitle.style.webkitAnimation = 'fadeout 1s 0.5s linear both';
    }
    begin_show();
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
        var width = 349;
        var height = 222;
        divname = idname + 'h';
        div = id('div'+idname+'h');
        div1 = id('div'+idname+'v');
    }
    else
    {
        var width = 227;
        var height = 349;
        divname = idname + 'v';
        div = id('div'+idname+'v');
        div1 = id('div'+idname+'h');
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
}

function setZIndex (pageindex) 
{   
    if(pageindex == 1)
    {
        div11v.style.zIndex = 4;
        div11h.style.zIndex = 4;
        div12h.style.zIndex = 3;
        div12v.style.zIndex = 3;
        div2v.style.zIndex = 2;
        div2h.style.zIndex = 2;
        div3h.style.zIndex = 5;
        div3v.style.zIndex = 5;
    }
    else if(pageindex == 2)
    {
        div11v.style.zIndex = 1;
        div11h.style.zIndex = 1;
        div12h.style.zIndex = 2;
        div12v.style.zIndex = 2;
        div2v.style.zIndex = 4;
        div2h.style.zIndex = 4;
        div3h.style.zIndex = 3;
        div3v.style.zIndex = 3; 
    }
    else
    {
        div11v.style.zIndex = 3;
        div11h.style.zIndex = 3;
        div12h.style.zIndex = 2;
        div12v.style.zIndex = 2;
        div2v.style.zIndex = 1;
        div2h.style.zIndex = 1;
        div3h.style.zIndex = 4;
        div3v.style.zIndex = 4; 
    }
}
function changediv1index()
{
    div11h.style.zIndex = 3;
    div11v.style.zIndex = 3;
    div12h.style.zIndex = 4;
    div12v.style.zIndex = 4;
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
    id('line1').style.webkitAnimation = '';
    id('line2').style.webkitAnimation = '';
    id('line3').style.webkitAnimation = '';
    id('line1').innerHTML = '';
    id('line2').innerHTML = '';
    id('line3').innerHTML = '';
    div11h.style.webkitAnimation = '';
    div11v.style.webkitAnimation = '';
    div12h.style.webkitAnimation = '';
    div12v.style.webkitAnimation = '';
    div2h.style.webkitAnimation = '';
    div2v.style.webkitAnimation = '';
    div3h.style.webkitAnimation = '';
    div3v.style.webkitAnimation = '';
    div11h.style.display = 'none';
    div11v.style.display = 'none';
    div12h.style.display = 'none';
    div12v.style.display = 'none';
    div2h.style.display = 'none';
    div2v.style.display = 'none';
    div3h.style.display = 'none';
    div3v.style.display = 'none';
    id('pagetitle').style.webkitAnimation = '';

    clearTimeout(timeout0);
    clearTimeout(timeout1);
    clearTimeout(timeout2);
    clearTimeout(timeout3);
    clearTimeout(timeout4);
    clearTimeout(timeout5);
    clearTimeout(timeout6);
}
</script>