<?
$p=$_WEITE['web_pic_url']."jiniance/";
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
        /*background-image: url(http://stu.kagirl.cn/image/jiniance/1.jpg); */
    }
    #container > img,#container > div
    {
        position: absolute;
    }
    #yezi
    {
        left: -7px;
        top: -6px;
        width: 337px;
        height: 273px;
        /*-webkit-transform: skew(0deg,0deg);*/
        -webkit-transform-origin: -50% 37%;
        /*-webkit-animation: yemove 1.3s linear infinite alternate;*/
    }
    #yezi1
    {
        top: 0px;
        position: absolute;
        left: 0px;
        width: 337px;
        height: 273px;
        -webkit-animation: yemove 1.3s linear infinite alternate;
        -webkit-transform-origin: 0% 20%;
    }
    #page11h
    {
        width: 382px;
        height: 270px;
        left: 79px;
        top: 123px;
        background-color: #fff;
        box-shadow: 3px 4px 13px #50250B;
    }
    #page11s
    {
        width: 270px;
        height: 382px;
        left: 195px;
        top: 44px;
        background-color: #fff;
        box-shadow: 3px 4px 13px #50250B;
    }
    #page12h
    {
        width: 397px;
        height: 276px;
        top: 414px;
        left: 26px;
        background-color: #fff;
        box-shadow: 3px 4px 13px #50250B;
    }
    #page12s
    {
        width: 276px;
        height: 397px;
        left: 36px;
        top: 377px;
        background-color: #fff;
        box-shadow: 3px 4px 13px #50250B;
    }
    #word1
    {
        left: 322px;
        top: 664px;
        width: 142px;
        height: 110px;
    }
    #yeying
    {
        position: absolute;
        top: -4px;
        left: 8px
    }
    @-webkit-keyframes yemove
    {
        from {-webkit-transform: skew(0deg,0deg);}
        to   {-webkit-transform: skew(0deg,2deg);}
    }
    @-webkit-keyframes yeziin
    {
        from  {-webkit-transform: translate(0px,-267px);}
        to    {-webkit-transform: translate(0px,0px);}
    }
    @-webkit-keyframes page11hin
    {
        from  {-webkit-transform: translate(463px,60px) rotate(43deg);}
        to    {-webkit-transform: translate(0px,0px) rotate(0deg);}
    }
    @-webkit-keyframes page11hout
    {
        from {-webkit-transform: translate(0px,0px) rotate(0deg);}
        to   {-webkit-transform: translate(410px,-266px) rotate(47.8deg);}
    }
    @-webkit-keyframes page12hin
    {
        from {-webkit-transform: translate(-418px,49px) rotate(-65.4deg);}
        to   {-webkit-transform: translate(0px,0px) rotate(0deg);}
    }
    @-webkit-keyframes page12hout
    {
        from {-webkit-transform: translate(0px,0px) rotate(0deg);}
        to   {-webkit-transform: translate(-376px,-690px) rotate(-50deg);}
    }
    @-webkit-keyframes word1
    {
        from {-webkit-transform: scale(1);}
        to   {-webkit-transform: scale(1.1);}
    }
    @-webkit-keyframes word1move
    {
        0%  {-webkit-transform: translate(251px,0px);}
        80% {-webkit-transform: translate(-10px,0px);}
        100%{-webkit-transform: translate(0px,0px);}
    }
    @-webkit-keyframes yeziout
    {
        from {-webkit-transform: translate(0px,0px);}
        to   {-webkit-transform: translate(6px,-77px) rotate(-35deg);}
    }
    @-webkit-keyframes page2sin 
    {
        from {-webkit-transform: translate(4px,638px) rotate(-90deg);opacity: 0}
        to   {-webkit-transform: translate(0px,0px) rotate(-7.5deg);opacity: 1}
    }
    @-webkit-keyframes page2sout
    {
        from {-webkit-transform: translate(0px,0px) rotate(-7.5deg);opacity: 1}
        to   {-webkit-transform: translate(-362.4px,602.47px) rotate(-56.49deg);opacity: 0;}
    }
    @-webkit-keyframes chibang
    {
        from {-webkit-transform: rotateX(0deg);}
        to   {-webkit-transform: rotateX(50deg);}
    }
    @-webkit-keyframes hudie
    {
        0%  {-webkit-transform: translate(0px,0px) rotate(-40deg);}
        60% {-webkit-transform: translate(480px,-480px) rotate(-40deg);}
        85% {-webkit-transform: translate(480px,-480px) rotate(-40deg);}
        100% {-webkit-transform: translate(640px,-640px) rotate(-40deg);}
    }
    @-webkit-keyframes chibang
    {
        0%  {-webkit-transform: scale(1,1);}
        4%  {-webkit-transform: scale(1,0.2)}
        8%  {-webkit-transform: scale(1),1;}
        12%  {-webkit-transform: scale(1,0.2)}
        16%  {-webkit-transform: scale(1,1);}
        20%  {-webkit-transform: scale(1,0.2)}
        24%  {-webkit-transform: scale(1,1);}
        28%  {-webkit-transform: scale(1,0.2)}
        32%  {-webkit-transform: scale(1,1);}
        36%  {-webkit-transform: scale(1,0.2)}
        40%  {-webkit-transform: scale(1,1);}
        44%  {-webkit-transform: scale(1,0.2)}
        48%  {-webkit-transform: scale(1,1);}
        52%  {-webkit-transform: scale(1,0.2)}
        57%  {-webkit-transform: scale(1,1);}
        63%  {-webkit-transform: scale(1,0.2)-webkit-timing-function: ease-out;}
        69%  {-webkit-transform: scale(1);}
        80%  {-webkit-transform: scale(1,1);}
        85%  {-webkit-transform: scale(1,0.2)}
        89%  {-webkit-transform: scale(1,1);}
        94%  {-webkit-transform: scale(1,0.2)}
        100%  {-webkit-transform: scale(1);}
    }
    #page2s
    {
        position: absolute;
        width: 411px;
        height: 575px;
        left: 39px;
        top: 99px;
        background-color: #fff;
        box-shadow: 3px 4px 13px #50250B;
    }
    #page2h 
    {
        position: absolute;
        width: 460px;
        height: 300px;
        left: 11px;
        top: 226px;
        background-color: #fff;
        box-shadow: 3px 4px 13px #50250B;
    }
    #hudie
    {
        left: -161px;
        top: 778px;
        -webkit-transform: rotate(-40deg);
    }
    #hudie > img
    {
        position: absolute;
    }
    @-webkit-keyframes word2move
    {
        from {-webkit-transform: rotateX(0deg);}
        to   {-webkit-transform: rotateX(90deg);}
    }
    @-webkit-keyframes word3move
    {
        to {-webkit-transform: rotateX(0deg);}
        from   {-webkit-transform: rotateX(90deg);}       
    }
    #word2
    {
        left: 333px;
        top: 672px;
        width: 142px;
        height: 110px; 
        -webkit-transform: rotateX(90deg);
    }
    @-webkit-keyframes word2
    {
        from {-webkit-transform: translate(0px,0px);}
        to   {-webkit-transform: translate(0px,-5px);}
    }
    #page32h
    {
        width: 368px;
        height: 263px;
        left: 10px;
        top: 358px;
        background-color: #fff;
        -webkit-transform: rotate(82.1deg);
        box-shadow: 3px 4px 13px #50250B;

    }
    #page32s
    {
        width: 261px;
        height: 347px;
        left: 25px;
        top: 321px;
        background-color: #fff;
        box-shadow: 3px 4px 13px #50250B;
    }
    #page31s
    {
        height: 368px;
        width: 263px;
        left: 248px;
        top: 109px;
        background-color: #fff;
        box-shadow: 3px 4px 13px #50250B;
    }
    #page31h
    {
        width: 368px;
        height: 263px;
        left: 116px;
        top: 150px;
        background-color: #fff;
        -webkit-transform: rotate(82.5deg);
        box-shadow: 3px 4px 13px #50250B;
    }
    @-webkit-keyframes page31hin
    {
        from {-webkit-transform: translate(0px,0px) rotate(82.5deg);opacity: 0}
        to   {-webkit-transform: translate(-55px,-61px) rotate(10.6deg);opacity: 1}
    }
    @-webkit-keyframes page32hin
    {
        from  {-webkit-transform: translate(0px,0px) rotate(82.1deg);opacity: 0}
        to    {-webkit-transform: translate(56px,97px) rotate(-10.2deg);opacity: 1}
    }
    @-webkit-keyframes page31hout
    {
        from  {-webkit-transform: translate(-55px,-61px) rotate(10.6deg);}
        to    {-webkit-transform: translate(306px,644px) rotate(-18.19deg);}
    }
    @-webkit-keyframes page32hout
    {
        from  {-webkit-transform: translate(56px,97px) rotate(-10.2deg);}
        to    {-webkit-transform: translate(-381px,400px) rotate(21.5deg);}
    }
    @-webkit-keyframes paperin
    {
        from {-webkit-transform: translate(-227px,-26px) rotate(-80.90deg);}
        to   {-webkit-transform: translate(0px,0px) rotate(0deg);}
    }
    @-webkit-keyframes panin
    {
        from {-webkit-transform: translate(-252px,-46px) rotate(-68.2deg);}
        to   {-webkit-transform: translate(0px,0px) rotate(0deg)}
    }
    @-webkit-keyframes panout
    {
        from {-webkit-transform: translate(0px,0px) rotate(0deg);}
        to   {-webkit-transform: translate(-276px,264px) rotate(127.4deg);}
    }
    @-webkit-keyframes paperout
    {
        from  {-webkit-transform: translate(0px,0px) rotate(0deg);}
        to    {-webkit-transform: translate(-213px,202px) rotate(59deg);}
    }
    #paper
    {
        left: 5px;
        top: 301px;
    }
    #pan
    {
        left: 155px;
        top: 365px;
    }
    #page4h
    {
        width: 460px;
        height: 338px;
        left: 29px;
        top: 338px;
        background-color: #fff;
        box-shadow: 3px 4px 13px #50250B;
    }
    #page4s
    {
        width: 336px;
        height: 509px;
        left: 68px;
        top: 216px;
        background-color: #fff;
        box-shadow: 3px 4px 13px #50250B;

    }
    @-webkit-keyframes page4hin
    {
        from  {-webkit-transform: translate(-9px,-728px) rotate(0deg);}
        to    {-webkit-transform: translate(0px,0px) rotate(-8.7deg);}
    }
    @-webkit-keyframes page4hout
    {
        from  {-webkit-transform: translate(0px,0px) rotate(-8.7deg);}
        to    {-webkit-transform: translate(-495px,-35px) rotate(-90deg);}
    }
    #cafe
    {
        left: 24px;
        top: 20px;
    }
    @-webkit-keyframes cafein
    {
        from  {-webkit-transform: translate(0px,-337px);}
        to    {-webkit-transform: translate(0px,0px);}
    }
    @-webkit-keyframes cafeout
    {
        to  {-webkit-transform: translate(0px,-337px);}
        from    {-webkit-transform: translate(0px,0px);}
    }
    @-webkit-keyframes douzhuan
    {
        from   {-webkit-transform: rotate(-180deg);}
        /*to     {-webkit-transform: rotate(360deg);}*/
    }
    #dou1
    {
        width: 34px;
        height: 40px;
        left: 288px;
        top: 240px;
    }
    #dou2
    {
        width: 34px;
        height: 40px;
        left: 270px;
        top: 277px;
    }
    #dou22
    {
        position: absolute;
        -webkit-transform: rotate(36.9deg);
    }
    @-webkit-keyframes dou1in
    {
        from  {-webkit-transform: translate(-4px,-291px);}
        to    {-webkit-transform: translate(0px,0px);}
    }
    @-webkit-keyframes dou2in
    {
        from   {-webkit-transform: translate(-5px,-322px);}
        to     {-webkit-transform: translate(0px,0px);}
    }
    @-webkit-keyframes dou1out
    {
        to  {-webkit-transform: translate(-4px,-291px);}
        from    {-webkit-transform: translate(0px,0px);}
    }
    @-webkit-keyframes dou2out
    {
        to   {-webkit-transform: translate(-5px,-322px);}
        from {-webkit-transform: translate(0px,0px);}
    }
    #qi
    {
        left: 94px;
        top: -69px;
        opacity: 0;
    }
    @-webkit-keyframes qi
    {
        0% {opacity: 0}
        30%{opacity: 1}
        100% {-webkit-transform: translate(30px,-30px);opacity: 0}
    }

</style>
<style type="text/css">
    #pagetitle
    {
        position: absolute;
        top: 0px;
        left: 0px;
        width: 500px;
        height: 815px;
        background-color: rgba(0,0,0,0.5);
    }
    #pageword1
    {
        position: absolute;
        font-size: 40px;
        color: #fff;
        width: 500px;
        padding: 12px;
        line-height: 150%;
        text-align: center;
        top: 100px;
        left: 0px;
        height: 100px;
        overflow: hidden;
    }
    #pagewordin1
    {
        position: absolute;
        font-size: 40px;
        color: #fff;
        width: 500px;
        /*padding: 12px;*/
        /*line-height: 150%;*/
        text-align: center;
        top: -100px;
        left: 0px;
        height: 100px;
        overflow: hidden;
    }
    #pagewordin11
    {
        position: absolute;
        top: 0px;
        left: 0px;
        font-size: 40px;
        width: 500px;
        /*line-height: 100%;*/
        height: 200px;
        display: table;
    }
    #pageword2
    {
        position: absolute;
        font-size: 40px;
        color: #fff;
        width: 500px;
        padding: 12px;
        line-height: 150%;
        text-align: center;
        top: 0px;
        left: 0px;
        height: 100px;
        overflow: hidden;

    }
    #pagewordin2
    {
        position: absolute;
        font-size: 40px;
        color: #fff;
        width: 500px;
        /*padding: 12px;*/
        /*line-height: 150%;*/
        text-align: center;
        top: 100px;
        left: 0px;
        height: 100px;
        overflow: hidden;

    }
    #pagewordin22
    {
        position: absolute;
        top: -100px;
        left: 0px;
        font-size: 40px;
        /*line-height: 150%;*/
        height: 200px;
        display: table;
        width: 500px;
    }
    #title1
    {
        position: absolute;
        top: 250px;
        height: 200px;
        width: 500px;
        overflow: hidden;
    }
    #title11
    {
        position: absolute;
        top: 0px;
        height: 200px;
        width: 500px;
        overflow: hidden;
    }
    @-webkit-keyframes titleline1
    {
        0% {-webkit-transform: translate(0px,0px) scale(0,1);}
        100% {-webkit-transform: translate(0px,0px) scale(1,1);}
/*        33.333% {-webkit-transform: translate(0px,-100px) scale(1,1);}
        50%{-webkit-transform: translate(0px,0px) scale(1,1);}
        66.666%{-webkit-transform: translate(0px,100px) scale(1,1);}
        80%{-webkit-transform: translate(0px,100px) scale(1,1);}
        100%{-webkit-transform: translate(0px,-100px) scale(1,1);}*/

    }
    @-webkit-keyframes titleline2
    {
        0% {-webkit-transform: translate(0px,0px) scale(1,1);}
        20% {-webkit-transform: translate(0px,-100px) scale(1,1);}
        40%{-webkit-transform: translate(0px,0px) scale(1,1);}
        60%{-webkit-transform: translate(0px,100px) scale(1,1);}
        100%{-webkit-transform: translate(0px,100px) scale(1,1);}
/*        100%{-webkit-transform: translate(0px,-100px) scale(1,1);}*/

    }
    @-webkit-keyframes titleline3
    {
/*        0% {-webkit-transform: translate(0px,0px) scale(1,1);}
        20% {-webkit-transform: translate(0px,-100px) scale(1,1);}
        40%{-webkit-transform: translate(0px,0px) scale(1,1);}
        60%{-webkit-transform: translate(0px,100px) scale(1,1);}*/
        0%{-webkit-transform: translate(0px,100px) scale(1,1);}
        100%{-webkit-transform: translate(0px,-100px) scale(1,1);}

    }
    @-webkit-keyframes pageword1
    {
        from {-webkit-transform: translate(0px,0px);}
        to   {-webkit-transform: translate(0px,-100px);}
    }
    @-webkit-keyframes pagewordin1
    {
        from {-webkit-transform: translate(0px,0px);}
        to   {-webkit-transform: translate(0px,100px);}
    }
    @-webkit-keyframes title1
    {
        from {-webkit-transform: translate(0px,0px);}
        to   {-webkit-transform: translate(0px,-200px);}
    }
    @-webkit-keyframes title11
    {
        from {-webkit-transform: translate(0px,0px);}
        to   {-webkit-transform: translate(0px,200px);}
    }
    @-webkit-keyframes titlefadeout
    {
        from {opacity: 1}
        to   {opacity: 0}
    }
</style>
<div id='container'>
    <img src='<?=$p?>images/bg.jpg'>
    <!-- <img src='<?=$p?>images/1.jpg'> -->
    <div id='page11h' style='display:none'>
        <div style='position:absolute;width:368px;height:256px;top:7px;left:7px;overflow:hidden;'>
            <img id='img11h' style='position:absolute' src='<?=$p?>images/1.jpg'>
        </div>
    </div>
    <div id='page11s' style='display:none'>
        <div style='position:absolute;height:368px;width:256px;top:7px;left:7px;overflow:hidden;'>
            <img id='img11s' style='position:absolute' src='<?=$p?>images/1.jpg'>
        </div>
    </div>
    <div id='page12h' style='display:none'>
        <div style='position:absolute;height:262px;width:383px;top:7px;left:7px;overflow:hidden;'>
            <img id='img12h' style='position:absolute' src='<?=$p?>images/1.jpg'>
        </div>
    </div>
    <div id='page12s' style='display:none'>
        <div style='position:absolute;width:262px;height:383px;top:7px;left:7px;overflow:hidden;'>
            <img id='img12s' style='position:absolute' src='<?=$p?>images/1.jpg'>
        </div>
    </div>
    <div id='word1'>
        <img style='position:absolute;-webkit-animation: word1 0.8s linear infinite alternate' src='<?=$p?>images/Aut.png'>
    </div>
    <div id='word2'>
        <img style='position:absolute;-webkit-animation: word2 0.8s linear infinite alternate' src='<?=$p?>images/Aut2.png'>
    </div>
    <div id='yezi' style='display:none;'>
        <div id='yezi1'>
            <img id='yeying' src='<?=$p?>images/hyy.png'>
            <img src='<?=$p?>images/hy.png'>
        </div>
    </div>
    <div id='page32h' style='display:none'>
        <div style='position:absolute;width:354px;height:249px;top:7px;left:7px;overflow:hidden;'>
            <img id='img32h' style='position:absolute' src='<?=$p?>images/1.jpg'>
        </div>
    </div>
    <div id='page31h' style='display:none'>
        <div style='position:absolute;width:354px;height:249px;top:7px;left:7px;overflow:hidden;'>
            <img id='img31h' style='position:absolute' src='<?=$p?>images/1.jpg'>
        </div>
    </div>
    <div id='page32s' style='display:none'>
        <div style='position:absolute;width:247px;height:333px;top:7px;left:7px;overflow:hidden;'>
            <img id='img32s' style='position:absolute' src='<?=$p?>images/1.jpg'>
        </div>
    </div>
    <div id='page31s' style='display:none'>
        <div style='position:absolute;height:354px;width:249px;top:7px;left:7px;overflow:hidden;'>
            <img id='img31s' style='position:absolute' src='<?=$p?>images/1.jpg'>
        </div>
    </div>
    <img id='paper' style='display:none' src='<?=$p?>images/zhip.png'>
    <img id='pan' style='display:none' src='<?=$p?>images/bi.png'>
    <div id='page2s' style='display:none'>
        <div style='position:absolute;width:397px;height:561px;top:7px;left:7px;overflow:hidden;'>
            <img id='img2s' style='position:absolute' src='<?=$p?>images/1.jpg'>
        </div>
    </div>
    <div id='page2h' style='display:none;'>
        <div style='position:absolute;width:446px;height:286px;top:7px;left:7px;overflow:hidden;'>
            <img id='img2h' style='position:absolute' src='<?=$p?>images/1.jpg'>
        </div>
    </div>
    <div id='hudie'>
        <img id='chishangying' src='<?=$p?>images/chiying01.png' style='left:-16px;top:14px;-webkit-transform-origin: 50% 100%;;opacity:0.6'>
        <img src='<?=$p?>images/shenying.png' style='left:6px;top:69px;opacity:0.6'>
        <img id='chixiaying' src='<?=$p?>images/chiying.png' style='left:-15px;top:90px;-webkit-transform-origin: 50% 0%;opacity:0.6'>

        <img id='chishang' src='<?=$p?>images/chi01.png' style='left:0px;top:0px;-webkit-transform-origin: 50% 100%;-webkit-animation:chibang 6s linear infinite'>
        <img src='<?=$p?>images/shenzi.png' style='left:22px;top:57px;'>
        <img id='chixia' src='<?=$p?>images/chi.png' style='left:0px;top:78px;-webkit-transform-origin: 50% 0%;-webkit-animation:chibang 6s linear infinite'>

    </div>
    <div id='page4h' style='display:none'>
        <div style='position:absolute;width:446px;height:324px;top:7px;left:7px;overflow:hidden;'>
            <img id='img4h' style='position:absolute' src='<?=$p?>images/1.jpg'>
        </div>
    </div>
    <div id='page4s' style='display:none'>
        <div style='position:absolute;width:322px;height:495px;top:7px;left:7px;overflow:hidden;'>
            <img id='img4s' style='position:absolute' src='<?=$p?>images/1.jpg'>
        </div>
    </div>
    <img id='cafe' style='display:none' src='<?=$p?>images/coffee.png'>
    <div id='dou1' style='display:none'>
        <img id='dou11' src='<?=$p?>images/dou.png'>
    </div>
    <div id='dou2' style='display:none'>
        <img id='dou22' src='<?=$p?>images/dou.png'>
    </div>
    <img id='qi' src='<?=$p?>images/qi.png'>

    <div id='pagetitle' style='display:none;'>
        <div id='title1'>
            <div id='title11'>
                <div id='pageword1'><div id='pagewordin1'><div id='pagewordin11'><div id='titleword1' style='display:table-cell;vertical-align: middle;padding:20px;'></div></div></div></div>
                <div id='pageword2'><div id='pagewordin2'><div id='pagewordin22'><div id='titleword2' style='display:table-cell;vertical-align: middle;padding:20px;'></div></div></div></div>
            </div>
        </div>
        <div id='titleline' style='background-color:#fff;position:absolute;height:3px;top:350px;width:500px;-webkit-transform-origin:0% 0%;-webkit-transform: scale(0,1)'></div>
    </div>

</div>


<script>
function id(name)
{
    return document.getElementById(name);
}
var image_size_width=[];
var image_size_height=[];
var image_url_index=0;
var have_num = 0;
var error_num = 0;
var canshow = true;
var reshow = false;
var timeout1;
var timeout2;
var timeout3;
var timeout4;
var timeout5;
var timeout6;
var timeout7;
var timeout8;

var begin_titletime;
function loadimages()
{
    id('pagetitle').style.display = 'none';
    id('pageword1').style.display = 'none';
    id('pageword2').style.display = 'none';
    id('pagewordin1').style.display = 'none';
    id('pagewordin2').style.display = 'none';
    id('title1').style.display = 'none';
    id('title11').style.display = 'none';
    id('pagetitle').style.webkitAnimation = '';
    id('pageword1').style.webkitAnimation = '';
    id('pageword2').style.webkitAnimation = '';
    id('pagewordin1').style.webkitAnimation = '';
    id('pagewordin2').style.webkitAnimation = '';
    id('title1').style.webkitAnimation = '';
    id('title11').style.webkitAnimation = '';
    showtitle();
    reshow = false;
    image_size_width=[];
    image_size_height=[];
    Onload_imgs_url=[];
    image_url_index=0;
    have_num = 0;
    error_num = 0;

    clearTimeout(timeout1);
    clearTimeout(timeout2);
    clearTimeout(timeout3);
    clearTimeout(timeout4);
    clearTimeout(timeout5);
    clearTimeout(timeout6);
    clearTimeout(timeout7);
    // clearTimeout(timeout8);

    id('page11h').style.display = 'none';
    id('page11s').style.display = 'none';
    id('page12h').style.display = 'none';
    id('page12s').style.display = 'none';
    id('page2h').style.display = 'none';
    id('page2s').style.display = 'none';
    id('page31h').style.display = 'none';
    id('page32h').style.display = 'none';
    id('page31s').style.display = 'none';
    id('page32s').style.display = 'none';
    id('page4h').style.display = 'none';
    id('page4s').style.display = 'none';
    id('page4s').style.display = 'none';
    id('cafe').style.display = 'none';
    id('dou1').style.display = 'none';
    id('dou2').style.display = 'none';
    id('pan').style.display = 'none';
    id('paper').style.display = 'none';
    id('hudie').style.display = 'none';
    id('yezi').style.display = 'none';
    id('word1').style.display = 'none';
    id('word2').style.display = 'none';
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
    if((have_num+error_num >= 10 || slider_images_url.length == (have_num+error_num)) && canshow == true)
    {   
        canshow = false;
        if(have_num == 0)
            return;
        var end_titletime = new Date();
        end_titletime = end_titletime.getTime();
        if(end_titletime-begin_titletime>7000)
        {
            show1();
        }
        else
        {
            var dis_titletime = end_titletime-begin_titletime;
            dis_titletime = 7000- dis_titletime;
            timeout5 = setTimeout(show1,dis_titletime);
        }

    }
}
function image_onload(event)
{
    // console.log(this.complete);
    if(reshow == true)
        return;
    var img = event.target;
    var index = img.index;
    if(index <10)
        have_num ++ ;
    Onload_imgs_url[index] = img.src;
    image_size_height[index] = img.height;
    image_size_width[index] = img.width;

    console.log(Onload_imgs_url[index]);
    console.log(have_num + '-' + error_num);
    if((have_num + error_num >= 10 || slider_images_url.length == (have_num+error_num)) && canshow == true)
    {   
        canshow = false;
        if(have_num == 0)
            return;
        var end_titletime = new Date();
        end_titletime = end_titletime.getTime();
        if(end_titletime-begin_titletime>7000)
        {
            show1();
        }
        else
        {
            var dis_titletime = end_titletime-begin_titletime;
            dis_titletime = 7000- dis_titletime;
            timeout5 = setTimeout(show1,dis_titletime);
        }

    }
}
function showtitle()
{

    begin_titletime = new Date();
    begin_titletime = begin_titletime.getTime();
    setword();
    id('pagetitle').style.display = 'block';
    id('pageword1').style.display = 'block';
    id('pageword2').style.display = 'block';
    id('pagewordin1').style.display = 'block';
    id('pagewordin2').style.display = 'block';
    id('title1').style.display = 'block';
    id('title11').style.display = 'block';

}

function setword()
{
    // if(reshow == true)
    //     return;
    var line = id('titleline');
    id('titleword1').innerHTML = e_desc;
    id('titleword2').innerHTML = e_desc;

    line.style.webkitAnimation = 'titleline1 1s linear both';

    timeout8 = setTimeout(time6,1200);

}

function time6()
{
    id('titleline').style.webkitAnimation = 'titleline2 5s linear both';
    id('pageword1').style.webkitAnimation = 'pageword1 1s linear 0s both';
    id('pagewordin1').style.webkitAnimation = 'pagewordin1 1s linear 0s both';
    id('pageword2').style.webkitAnimation = 'pagewordin1 1s linear 2s both';
    id('pagewordin2').style.webkitAnimation = 'pageword1 1s linear 2s both';
    timeout7 = setTimeout(time7,4000)
}
function time7()
{
    id('titleline').style.webkitAnimation = 'titleline3 1.2s linear both';
    id('title1').style.webkitAnimation = 'title1 1.2s linear both';
    id('title11').style.webkitAnimation = 'title11 1.2s linear both';
    id('pagetitle').style.webkitAnimation  = 'titlefadeout 0.5s 1.5s linear both';
}
function show1()
{
    if(reshow == true)
        return;
    id('page4s').style.webkitAnimation = 'page4hout 1s ease-in both';
    id('page4h').style.webkitAnimation = 'page4hout 1s ease-in both';
    id('cafe').style.webkitAnimation = 'cafeout 1s ease-in both';
    id('dou1').style.webkitAnimation = 'dou1out 1s ease-in both';
    id('dou2').style.webkitAnimation = 'dou2out 1s ease-in both';
    id('word2').style.webkitAnimation = 'word2move 1s linear both';

    id('yezi').style.display = 'block';
    id('word1').style.display = 'block';

    if(image_url_index == Onload_imgs_url.length)
        image_url_index = 0;
    setImage('11');
    image_url_index++;
    if(image_url_index == Onload_imgs_url.length)
        image_url_index = 0;
    setImage('12');
    image_url_index++;

    id('yezi').style.webkitAnimation = 'yeziin 1.5s ease-out both';
    id('word1').style.webkitAnimation = 'word1move 1.5s linear both';
    id('page11s').style.webkitTransformOrigin = '50% 50%';
    id('page12s').style.webkitTransformOrigin = '50% 50%';
    id('page11s').style.webkitAnimation = 'page11hin 1.5s ease-out both';
    id('page12s').style.webkitAnimation = 'page12hin 1.5s ease-out both';
    id('page11h').style.webkitTransformOrigin = '50% 50%';
    id('page12h').style.webkitTransformOrigin = '50% 50%';
    id('page11h').style.webkitAnimation = 'page11hin 1.5s ease-out both';
    id('page12h').style.webkitAnimation = 'page12hin 1.5s ease-out both';

    timeout1 = setTimeout(show2,4000)
}

function show2()
{
    if(reshow == true)
        return;
    id('yezi').style.webkitAnimation = 'yeziout 1s linear both';
    id('page11s').style.webkitAnimation = 'page11hout 1.2s ease-in both';
    id('page12s').style.webkitAnimation = 'page12hout 0.8s ease-in both';
    id('page11h').style.webkitAnimation = 'page11hout 1.2s ease-in both';
    id('page12h').style.webkitAnimation = 'page12hout 0.8s ease-in both';
    id('hudie').style.display = 'block';

    id('qi').style.webkitAnimation = '';

    if(image_url_index == Onload_imgs_url.length)
        image_url_index = 0;
    setImage('2');
    image_url_index++;

    id('page2h').style.webkitAnimation = 'page2sin 1.5s ease-out both';
    id('page2s').style.webkitAnimation = 'page2sin 1.5s ease-out both';
    id('hudie').style.webkitAnimation = 'hudie 6s linear both';
    id('chishang').style.webkitAnimation = 'chibang 6s linear infinite';
    id('chixia').style.webkitAnimation = 'chibang 6s linear infinite';
    id('chishangying').style.webkitAnimation = 'chibang 6s linear infinite';
    id('chixiaying').style.webkitAnimation = 'chibang 6s linear infinite';

    timeout2 = setTimeout(show3,4000);
}

function show3()
{
    if(reshow == true)
        return;
    id('page2h').style.webkitAnimation = 'page2sout 1.2s ease-in both';
    id('page2s').style.webkitAnimation = 'page2sout 1.2s ease-in both';
    id('word1').style.webkitAnimation = 'word2move 1s linear both';
    id('word2').style.webkitAnimation = 'word3move 1s 1s linear both';

    id('paper').style.display = 'block';
    id('pan').style.display = 'block';

    if(image_url_index == Onload_imgs_url.length)
        image_url_index = 0;
    setImage('31');
    image_url_index++;
    if(image_url_index == Onload_imgs_url.length)
        image_url_index = 0;
    setImage('32');
    image_url_index++;

    id('page31s').style.webkitAnimation = 'page31hin 1.5s 0.2s ease-out both';
    id('page32s').style.webkitAnimation = 'page32hin 1.5s 0.2s ease-out both';
    id('page31h').style.webkitAnimation = 'page31hin 1.5s 0.2s ease-out both';
    id('page32h').style.webkitAnimation = 'page32hin 1.5s 0.2s ease-out both';
    id('paper').style.webkitAnimation = 'paperin 1.5s 0.8s ease-out both';
    id('pan').style.webkitAnimation = 'panin 1.5s 1.2s ease-out both';

    timeout3 = setTimeout(show4,4000);
}
function show4 ()
{
    if(reshow == true)
        return;
    id('pan').style.webkitAnimation = 'panout 1.5s ease-in both';
    id('paper').style.webkitAnimation = 'paperout 1.5s ease-in both';
    id('page31s').style.webkitAnimation = 'page31hout 1.6s ease-in both';
    id('page32s').style.webkitAnimation = 'page32hout 2s ease-in both';
    id('page31h').style.webkitAnimation = 'page31hout 1.6s ease-in both';
    id('page32h').style.webkitAnimation = 'page32hout 2s ease-in both';

    // id('page4s').style.display = 'block';
    if(image_url_index == Onload_imgs_url.length)
        image_url_index = 0;
    setImage('4');
    image_url_index++;

    id('cafe').style.display = 'block';
    id('dou1').style.display = 'block';
    id('dou2').style.display = 'block';
    id('hudie').style.webkitAnimation = '';

    id('page4s').style.webkitAnimation = 'page4hin 1.9s 0.2s ease-out both';
    id('page4h').style.webkitAnimation = 'page4hin 1.9s 0.2s ease-out both';
    id('dou11').style.webkitAnimation = 'douzhuan 1.3s linear 1 0.5s both';
    id('dou22').style.webkitAnimation = 'douzhuan 1s linear 1 0.7s both';
    id('cafe').style.webkitAnimation = 'cafein 1.3s 0.5s ease-out both';
    id('dou1').style.webkitAnimation = 'dou1in 1s 0.7s ease-out both';
    id('dou2').style.webkitAnimation = 'dou2in 1.3s 0.5s ease-out both';
    id('qi').style.webkitAnimation = 'qi 2.5s 1s linear both';

    timeout4 = setTimeout(show1,4000);

}
var divwidth = {'11h':368,'11s':256,'12h':383,'12s':262,'2h':446,'2s':397,'31h':354,'31s':249,'32h':354,'32s':247,'4h':446,'4s':322};
var divheight = {'11h':256,'11s':368,'12h':262,'12s':383,'2h':286,'2s':561,'31h':249,'31s':354,'32h':249,'32s':333,'4h':322,'4s':495};

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
        div = id('page'+idname+'h');
        div1 = id('page'+idname+'s');
    }
    else
    {
        divname = idname + 's';
        div = id('page'+idname+'s');
        div1 = id('page'+idname+'h');
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
call_me(loadimages);
function reload_scene()
{
    reshow = true;
    loadimages();
}
</script>