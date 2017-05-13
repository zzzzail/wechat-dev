<?
$p=$_WEITE['web_pic_url']."zuji/";
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
    position: absolute;
    width: 500px;
    height: 815px;
    /*left: 1000px;*/
    overflow: hidden;
}
#bgbox >img,#bgbox > div
{
    position: absolute;
}
#lvxing_bg
{
    top: 0px;
    left: 0px;
}
#lvxing_zhinanzhen
{
    position: absolute;
    left: 21px;
    top: 61px;
    width: 86px;
    height: 86px;
    -webkit-transform: rotate(18.7deg)
}
#lvxing_pan
{
    position: absolute;
    width: 86px;
    
}
#lvxing_zhen
{
    position: absolute;
    width: 7px;
    top: 13px;
    left: 40px
}
#lvxing_hua1
{
    width: 130px;
    top: 574px;
    left: 381px;
    -webkit-transform: rotate(-15deg);
    opacity: 0;
}
#lvxing_hua1ying
{
    width: 130px;
    top: 604px;
    left: 391px;
    -webkit-transform: rotate(-15deg);
    opacity: 0;
}

#lvxing_hua2
{
    width: 100px;
    top: 78px;
    left: 615px;
    -webkit-transform: rotate(61deg);
    opacity: 0;
}
#lvxing_hua2ying
{
    width: 100px;
    top: 90px;
    left: 620px;
    -webkit-transform: rotate(61deg);
    opacity: 0;
}
#lvxing_hua3
{
    width: 125px;
    top: 231px;
    left: 878px;
    -webkit-transform: rotate(59deg);
    opacity: 0;
}
#lvxing_hua3ying
{
    width: 125px;
    top: 261px;
    left: 888px;
    -webkit-transform: rotate(59deg);
    opacity: 0;
}
#div1s
{
    width: 373px;
    height: 548px;
    background-color: #fff;
    top: 120px;
    left: 508px;
    box-shadow: 25px 34px 15px rgba(50, 50, 50, 0.31);
    -webkit-transform-origin: 0% 90%;
    -webkit-transform: rotate(0deg);
    display: none;
    overflow: hidden;
    border: 7px solid #fff;
}
#div1h
{
    width: 400px;
    height: 280px;
    background-color: #fff;
    top: 254px;
    left: 515px;
    box-shadow: 25px 34px 15px rgba(50, 50, 50, 0.31);
    -webkit-transform-origin: 0% 90%;
    -webkit-transform: rotate(0deg);
    display: none;
    overflow: hidden;
    border: 7px solid #fff;
}

#lvxing_feiji
{
    position: absolute;
    top: 530px;
    left: -70px;
    -webkit-transform: scale(-1,1) rotate(21deg);
}
#lvxing_area
{
    position: absolute;
    width: 10px;
    height: 565px;
    left: 580px;
    -webkit-transform-origin: 100% 0%;
    /*-webkit-animation: feiji 3s linear infinite;*/
}
#bgbox,#page4
{
    position: absolute;
    width: 1630px;
    height: 1630px;
    top: -815px;
    left: 0px;
    overflow: hidden;
}
#coverbox
{
    position: absolute;
    width: 500px;
    height: 815px;
    overflow: hidden;
    top: 0px;
    left: 0px;
}
#coverbox > img,#coverbox > div,#page1 > img,#page1 > div
{
    position: absolute;
}
#lvxing_cover
{
    position: absolute;
    width: 
}
#lvxing_biaoqian
{
    left: 103px;
    top: 1021px;
    width: 312px;
    height: 410px;
    /*opacity: 0;*/
}
#contentbox
{
    width: 253px;
    height: 247px;
    left: 20px;
    top: 60px;
    position: absolute;
    display: table;
    text-align: center;
}
#titlecontent
{
    width: 265px;
    height: 257px;
    display: table-cell;
    vertical-align: middle;
    color: #423F3F;
    line-height: 150%;
    font-size: 35px;
    text-shadow: 8px 5px 3px rgba(117, 116, 116, 0.5)

}
#page1,#page2
{
    position: absolute;
    width: 500px;
    height: 815px;
    top: 0px;
    left: 0px;
}
#div21h
{
    position: absolute;
    background-color: #fff;
    width: 432px;
    height: 313px;
    top: 84px;
    left: 31px;
    -webkit-transform:translate(-169px,0px) rotate(-81deg);
    box-shadow: 6px 16px 16px #4B4134;
    -webkit-transform-origin: 0% 95%;
    overflow: hidden;
    display: none;
    border: 7px solid #fff;
}
#div22h
{
    position: absolute;
    background-color: #fff;
    width: 350px;
    height: 250px;
    top: 451px;
    left: 74px;
    box-shadow: 6px 16px 16px #4B4134;
    opacity: 0;
    display: none;
    overflow: hidden;
    border: 7px solid #fff;
}
#page3
{
    position: absolute;
    width: 500px;
    height: 815px;
    top: 0px;
    left: 0px;
}
#div3s
{
    position: absolute;
    width: 400px;
    height: 600px;
    background-color: #fff;
    box-shadow: 25px 19px 20px rgba(81, 63, 52, 0.6);
    left: 56px;
    top: 97px;
    -webkit-transform:translate(600px,220px) rotate(38deg);
    overflow: hidden;
    display: none;
    border: 7px solid #fff;
}
#div41s
{
    position: absolute;
    width: 400px;
    height: 600px;
    left: 609px;
    top: 642px;
    background-color: #fff;
    box-shadow: 25px 19px 20px rgba(81, 63, 52, 0.6);
    display: none;
    overflow: hidden;
    border: 7px solid #fff;
}
#div41h
{
    position: absolute;
    width: 400px;
    height: 280px;
    left: 609px;
    top: 802px;
    background-color: #fff;
    box-shadow: 25px 19px 20px rgba(81, 63, 52, 0.6);
    display: none;
    overflow: hidden;
    border: 7px solid #fff;
}
#div42s
{
    position: absolute;
    width: 380px;
    height: 580px;
    left: 56px;
    top: 912px;
    background-color: #fff;
    box-shadow: 25px 19px 20px rgba(81, 63, 52, 0.6);
    display: none;
    overflow: hidden;
    border: 7px solid #fff;
}
#div42h
{
    position: absolute;
    width: 383px;
    height: 276px;
    left: 52px;
    top: 1081px;
    background-color: #fff;
    box-shadow: 25px 19px 20px rgba(81, 63, 52, 0.6);
    display: none;
    overflow: hidden;
    border: 7px solid #fff;
}
#div21s
{
    position: absolute;
    background-color: #fff;
    width: 280px;
    height: 400px;
    top: 33px;
    left: 116px;
    -webkit-transform:translate(-169px,0px) rotate(-81deg);
    box-shadow: 6px 16px 16px #4B4134;
    -webkit-transform-origin: 0% 95%;
    overflow: hidden;
    display: none;
    border: 7px solid #fff;
}
#div22s
{
    position: absolute;
    background-color: #fff;
    width: 230px;
    height: 320px;
    top: 443px;
    left: 140px;
    box-shadow: 6px 16px 16px #4B4134;
    opacity: 0;
    overflow: hidden;
    display: none;
    border: 7px solid #fff;
}
#div3h
{
    position: absolute;
    width: 440px;
    height: 320px;
    background-color: #fff;
    box-shadow: 25px 19px 20px rgba(81, 63, 52, 0.6);
    left: 31px;
    top: 201px;
    -webkit-transform: translate(600px,220px) rotate(38deg);
    overflow: hidden;
    display: none;
    border: 7px solid #fff;
}
#lvxing_jiaoyin
{
    position: absolute;
    left: 300px;
    top: 200px;
}
</style>
<style type="text/css">
@-webkit-keyframes hua1
{
    0%  {-webkit-transform: scale(0.5) rotate(-15deg);opacity: 1}
    20% {-webkit-transform: scale(1.2) rotate(-15deg);-webkit-animation-timing-function: ease-in-out;opacity: 1}
    100%{-webkit-transform: scale(0.8) rotate(315deg);opacity: 1}
}
@-webkit-keyframes hua2
{
    0%  {-webkit-transform: scale(0) rotate(0deg);opacity: 1}
    100%{-webkit-transform: scale(1) rotate(421deg);opacity: 1}
}
@-webkit-keyframes hua1ying
{
    0%  {-webkit-transform: scale(0.5) rotate(-15deg);opacity: 0.5}
    20% {-webkit-transform: scale(1.2) rotate(-15deg);-webkit-animation-timing-function: ease-in-out;opacity: 0.5}
    100%{-webkit-transform: scale(0.8) rotate(315deg);opacity: 0.5}
}
@-webkit-keyframes hua2ying
{
    0%  {-webkit-transform: scale(0) rotate(0deg);opacity: 0.5}
    100%{-webkit-transform: scale(1) rotate(421deg);opacity: 0.5}
}
@-webkit-keyframes feiji
{
    from  {-webkit-transform: rotate(0deg) translate(0px,0px);}
    to    {-webkit-transform: rotate(90deg) translate(-200px,100px);}
}
@-webkit-keyframes feijia
{
    from  {-webkit-transform: scale(-1,1) rotate(21deg);}
    to    {-webkit-transform: scale(-0.4,0.4) rotate(21deg);}
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
@-webkit-keyframes bgmove1
{
    from  {-webkit-transform: translate(0px,0px) rotate(0deg);}
    to    {-webkit-transform: translate(-450px,0px) rotate(0deg);}
}
@-webkit-keyframes bgmove2
{
    from  {-webkit-transform: translate(-450px,0px) rotate(0deg);}
    to    {-webkit-transform: translate(-355px,625px) rotate(45deg)}
}
@-webkit-keyframes bgmove3
{
    from  {-webkit-transform: translate(-355px,625px) rotate(45deg);}
    to    {-webkit-transform: translate(-1130px,533px) rotate(0deg);}
}
@-webkit-keyframes bgmove4
{
    from  {-webkit-transform: translate(-1130px,533px) rotate(0deg);}
    to    {-webkit-transform: translate(0px,0px) rotate(0deg);}
}
@-webkit-keyframes jiaoyinmove
{
    to  {-webkit-transform: translate(1130px,-533px) rotate(0deg);}
    from    {-webkit-transform: translate(0px,0px) rotate(0deg);}
}
@-webkit-keyframes div1move
{
    from  {-webkit-transform: translate(20px,0px) rotate(10deg);}
    to    {-webkit-transform: translate(0px,0px) rotate(0deg);}
}
@-webkit-keyframes page1out
{
    from  {-webkit-transform: translate(-450px,0px) rotate(0deg);}
    to    {-webkit-transform: translate(-17px,346px) rotate(41deg);}
}
@-webkit-keyframes div21hmove
{
    from  {-webkit-transform: translate(-169px,0px) rotate(-81deg);}
    to    {-webkit-transform: translate(0px,0px) rotate(0deg);}
}
@-webkit-keyframes div22hmove
{
    0%    {-webkit-transform: scale(.2);opacity: 0}
    80%   {-webkit-transform: scale(1.1);opacity: 1}
    90%  {-webkit-transform: scale(1);opacity: 1}
    100%  {-webkit-transform: scale(1.05);opacity: 1}
}
@-webkit-keyframes page2out
{
    from  {-webkit-transform: translate(0px,0px) rotate(0deg);}
    to    {-webkit-transform: translate(-382px,0px) rotate(-26deg);}
}
@-webkit-keyframes div3smove
{
    to    {-webkit-transform: translate(0px,0px) rotate(0deg);}
    from  {-webkit-transform:translate(600px,220px) rotate(38deg);}
}
@-webkit-keyframes page3out
{
    from  {-webkit-transform: translate(0px,0px) rotate(0deg);}
    to    {-webkit-transform: translate(1130px,-533px) rotate(0deg);}
}
@-webkit-keyframes page4out
{
    from  {-webkit-transform: translate(0px,0px) rotate(0deg);}
    to    {-webkit-transform: translate(-450px,0px) rotate(0deg);}
}
@-webkit-keyframes zhinanzhen1
{
    from  {-webkit-transform: rotate(0deg);}
    to    {-webkit-transform: rotate(-52deg);}
}
@-webkit-keyframes zhinanzhen2
{
    from  {-webkit-transform: rotate(-52deg);}
    to    {-webkit-transform: rotate(40deg);}
}
@-webkit-keyframes zhinanzhen3
{
    from  {-webkit-transform: rotate(40deg);}
    to    {-webkit-transform: rotate(0deg);}
}

@-webkit-keyframes jiao1
{
    0%  {-webkit-transform: translate(-188px,-211px) scale(-1,1) rotate(-117deg);opacity: 1}
    /*to  {-webkit-transform: translate(-188px,-211px) scale(-1,1) rotate(-117deg);opacity: 1}*/
    90%  {-webkit-transform: translate(-314px,-223px) scale(-1,1) rotate(-104deg);opacity: 1}
    100%  {-webkit-transform: translate(-314px,-223px) scale(-1,1) rotate(-104deg);opacity: 0}
}
@-webkit-keyframes jiao2
{
    0%  {-webkit-transform: translate(-193px,-165px) scale(1,1) rotate(-264deg);opacity: 1}
    /*to    {-webkit-transform: translate(-193px,-165px) scale(1,1) rotate(-264deg);opacity: 1}*/
    90%  {-webkit-transform: translate(-304px,-171px) scale(1,1) rotate(-281deg);opacity: 1}
    100%  {-webkit-transform: translate(-304px,-171px) scale(1,1) rotate(-281deg);opacity: 0}
}
@-webkit-keyframes jiao3 
{
    from  {-webkit-transform: translate(-209px,-206px) scale(-1,1) rotate(-121deg);opacity: 1}
    to    {-webkit-transfrom: translate(-310px,-225px) scale(-1,1) rotate(-108deg);opacity: 1}
}
@-webkit-keyframes jiao4 
{
    0%  {-webkit-transform: translate(-240px,-144px) scale(1,1) rotate(97deg);opacity: 1}
    100% {-webkit-transform: translate(-280px,-144px) scale(1,1) rotate(97deg);opacity: 1}
/*    90%    {-webkit-transform: translate(-320px,-148px) scale(1,1) rotate(73deg);opacity: 1}
    100%    {-webkit-transform: translate(-320px,-148px) scale(1,1) rotate(73deg);opacity: 1}*/
}
@-webkit-keyframes jiao5 
{
    from  {opacity: 1}
    to    {opacity: 1}
}
</style>

<div id='container'>
    <div id='bgbox'>
        <img id='lvxing_bg' src='<?=$p?>images/bg.jpg'>

        <div id='lvxing_biaoqian'>
            <img src='<?=$p?>images/biaoqian.png'>
            <div id='contentbox'>
                <div id='titlecontent'></div>
            </div>
        </div>

    </div>

    <div id='coverbox'>
        <img id='lvxing_cover' src='<?=$p?>images/fovered.png'>

    </div>
    <div id='page4'>
        <div id='div41s'>
            <img id='img41s' style='position:absolute'>
        </div>
        <div id='div41h'>
            <img id='img41h' style='position:absolute'>
        </div>
        <div id='div42s'>
            <img id='img42s' style='position:absolute'>
        </div>
        <div id='div42h'>
            <img id='img42h' style='position:absolute'>
        </div>
    </div>
    <div id='page1'>
        <div id='div1s'>
            <img id='img1s' style='position:absolute'>
        </div>
        <div id='div1h'>
            <img id='img1h' style='position:absolute'>
        </div>
        <img id='lvxing_hua1ying' src='<?=$p?>images/huayingzi.png'>
        <img id='lvxing_hua2ying' src='<?=$p?>images/huayingzi.png'>
        <img id='lvxing_hua3ying' src='<?=$p?>images/huayingzi.png'>
        <img id='lvxing_hua1' src='<?=$p?>images/hua2.png'>
        <img id='lvxing_hua2' src='<?=$p?>images/hua3.png'>
        <img id='lvxing_hua3' src='<?=$p?>images/hua2.png'>
    </div>
    <div id='page2' style='-webkit-transform-origin: 50% 100%'>
        <div id='div21h'>
            <img id='img21h' style='position:absolute'>
        </div>
        <div id='div21s'>
            <img id='img21s' style='position:absolute'>
        </div>
        <div id='div22h'>
            <img id='img22h' style='position:absolute'>
        </div>
        <div id='div22s'>
            <img id='img22s' style='position:absolute'>
        </div>
    </div>
    <div id='lvxing_jiaoyin'>
        <div style='position:absolute;top:-111px;left:-83px;'>
            <img id='jiaoya1' src='<?=$p?>images/jiaoya.png' style='position:absolute;width:47px;-webkit-transform: translate(44px,0px) scale(-1,1) rotate(-115deg);opacity:0;'>
            <img id='jiaoya3' src='<?=$p?>images/jiaoya.png' style='position:absolute;width:47px;-webkit-transform: translate(227px,90px) scale(-1,1) rotate(-136deg);opacity:0;'>
         
            <img id='jiaoya2' src='<?=$p?>images/jiaoya.png' style='position:absolute;width:47px;-webkit-transform: translate(109px,90px) scale(1,1) rotate(-248deg);opacity:0;'>
    
            <img id='jiaoyin8' src='<?=$p?>images/jiaoya.png' style='position:absolute;width:47px;-webkit-transform: translate(-83px,19px) scale(1,1) rotate(-261deg);opacity:0;'>
        </div>
        <img id='jiaoyin7' src='<?=$p?>images/jiaoya.png' style='position:absolute;width:47px;-webkit-transform: translate(-187px,-200px) scale(-1,1) rotate(242deg);opacity:0;'>
        <img id='jiao1' src='<?=$p?>images/jiaoya.png' style='position:absolute;width:47px;-webkit-transform: translate(-188px,-211px) scale(-1,1) rotate(-117deg);opacity:0;'>
        <img id='jiao2' src='<?=$p?>images/jiaoya.png' style='position:absolute;width:47px;-webkit-transform: translate(-188px,-211px) scale(-1,1) rotate(-117deg);opacity:0;'>
        <img id='jiao3' src='<?=$p?>images/jiaoya.png' style='position:absolute;width:47px;-webkit-transform: translate(-188px,-211px) scale(-1,1) rotate(-117deg);opacity:0;'>
        <img id='jiao4' src='<?=$p?>images/jiaoya.png' style='position:absolute;width:47px;-webkit-transform: translate(-188px,-211px) scale(-1,1) rotate(-117deg);opacity:0;'>
    </div>
    <div id='page3'>
        <div id='div3s'>
            <img id='img3s' style='position:absolute'>
        </div>
        <div id='div3h'>
            <img id='img3h' style='position:absolute'>
        </div>
    </div>



    <div id='lvxing_zhinanzhen'>
        <img id='lvxing_pan' src='<?=$p?>images/N.png'>
        <img id='lvxing_zhen' src='<?=$p?>images/z.png'>
    </div>
    <div id='lvxing_area'>
        <img id='lvxing_feiji' src='<?=$p?>images/feiji.png'>
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
var delaytime=4000;
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
            show1();
        }
        else
        {
            dis_titletime = delaytime- dis_titletime;
            timeout0 = setTimeout(function()
                {
                    show1();
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
    if(index < 10)
    {
        have_num++;
    }

    Onload_imgs_url[index] = img.src;
    image_size_height[index] = img.height;
    image_size_width[index] = img.width;

    if((have_num +error_num >= 10 || slider_images_url.length == (have_num + error_num)) && canshow == true)
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
            show1();
        }
        else
        {
            dis_titletime = delaytime- dis_titletime;
            timeout0 = setTimeout(function()
                {
                    show1();
                },dis_titletime);
        }
    }
}
function id(name)
{
    return document.getElementById(name);
}
function show1()
{
    if(reshow == true)
        return;
    if(image_url_index == Onload_imgs_url.length)
        image_url_index = 0;
    setImage('1');
    image_url_index++;

    id('page1').style.display = 'block';
    id('lvxing_hua1ying').style.display = 'block';
    id('lvxing_hua1').style.display = 'block';
    id('lvxing_hua2').style.display = 'block';
    id('lvxing_hua2ying').style.display = 'block';
    id('lvxing_hua3').style.display = 'block';
    id('lvxing_hua3ying').style.display = 'block';

    id('bgbox').style.webkitAnimation = 'bgmove1 1.8s ease-in-out both';
    id('page1').style.webkitAnimation = 'bgmove1 1.8s ease-in-out both';
    id('lvxing_hua1').style.webkitAnimation = 'hua1 2s linear both';
    id('lvxing_hua1ying').style.webkitAnimation = 'hua1ying 2s linear both';
    id('lvxing_hua2').style.webkitAnimation = 'hua2 1.5s ease-out 0.5s both';
    id('lvxing_hua2ying').style.webkitAnimation = 'hua2ying 1.5s ease-out 0.5s both';
    id('lvxing_hua3').style.webkitAnimation = 'hua1 2s linear 1.5s forwards';
    id('lvxing_hua3ying').style.webkitAnimation = 'hua1ying 2s linear 1.5s forwards';
    id('div1h').style.webkitAnimation = 'div1move 2s linear both';
    id('div1s').style.webkitAnimation = 'div1move 2s linear both';

    id('div41h').style.display = 'none';
    id('div41s').style.display = 'none';
    id('page4').style.webkitAnimation = 'page4out 1.8s ease-in-out both';

    cleanshow3();
    cleanjiaoyin();

    timeout1 = setTimeout(show2,4000);
}
function cleanshow1()
{
    if(reshow == true)
        return;
    id('page1').style.display = 'none';
    id('page1').style.webkitAnimation = '';
    id('lvxing_hua1').style.webkitAnimation = '';
    id('lvxing_hua1ying').style.webkitAnimation = '';
    id('lvxing_hua2').style.webkitAnimation = '';
    id('lvxing_hua2ying').style.webkitAnimation = '';
    id('lvxing_hua3').style.webkitAnimation = '';
    id('lvxing_hua3ying').style.webkitAnimation = '';
    id('div1h').style.webkitAnimation = '';
    id('div1s').style.webkitAnimation = '';
    id('lvxing_hua1').style.display = 'none';
    id('lvxing_hua1ying').style.display = 'none';
    id('lvxing_hua2').style.display = 'none';
    id('lvxing_hua2ying').style.display = 'none';
    id('lvxing_hua3').style.display = 'none';
    id('lvxing_hua3ying').style.display = 'none';
    id('div1h').style.display = 'none';
    id('div1s').style.display = 'none';
}
function show2()
{
    if(reshow == true)
        return;
    if(image_url_index == Onload_imgs_url.length)
        image_url_index = 0;
    setImage('21');
    image_url_index++;
    if(image_url_index == Onload_imgs_url.length)
        image_url_index = 0;
    setImage('22');
    image_url_index++;

    id('lvxing_feiji').style.display = 'block';
    id('lvxing_area').style.display = 'block';

    id('page2').style.display = 'block';
    id('bgbox').style.webkitAnimation = 'bgmove2 2s ease-out both';
    id('page1').style.webkitAnimation = 'page1out 2s ease-out both';
    id('div21h').style.webkitAnimation = 'div21hmove 2s ease-in-out both';
    id('div21s').style.webkitAnimation = 'div21hmove 2s ease-in-out both';
    id('div22h').style.webkitAnimation = 'div22hmove 1.5s 1.5s ease-out both';
    id('div22s').style.webkitAnimation = 'div22hmove 1.5s 1.5s ease-out both';
    id('lvxing_area').style.webkitAnimation = 'feiji 3s linear both';
    id('lvxing_feiji').style.webkitAnimation = 'feijia 3s linear both';
    id('lvxing_zhen').style.webkitAnimation = 'zhinanzhen1 2s linear both';

    cleanshow4();
    if(image_url_index == Onload_imgs_url.length)
        image_url_index = 0;
    setImage('3');
    image_url_index++;

    timeout2 = setTimeout(show3,4000);
}
function cleanshow2()
{
    if(reshow == true)
        return;
    id('div21h').style.display = 'none';
    id('div22h').style.display = 'none';
    id('div21s').style.display = 'none';
    id('div22s').style.display = 'none';
    id('lvxing_area').style.display = 'none';
    id('lvxing_feiji').style.display = 'none';
    id('div21h').style.webkitAnimation = '';
    id('div22h').style.webkitAnimation = '';
    id('div21s').style.webkitAnimation = '';
    id('div22s').style.webkitAnimation = '';
    id('lvxing_area').style.webkitAnimation = '';
    id('lvxing_feiji').style.webkitAnimation = '';
    id('page2').style.display = 'none';
    id('page2').style.webkitAnimation = '';
}
function show3()
{
    if(reshow == true)
        return;

    id('page2').style.display = 'block';
    id('page3').style.display = 'block';
    id('lvxing_biaoqian').style.display = 'none';
    id('lvxing_biaoqian').style.webkitAnimation = '';

    id('bgbox').style.webkitAnimation = 'bgmove3 3.5s ease-out both';
    id('page2').style.webkitAnimation = 'page2out 3.5s ease-out both';
    id('div3s').style.webkitAnimation = 'div3smove 3.5s ease-out both';
    id('div3h').style.webkitAnimation = 'div3smove 3.5s ease-out both';
    id('lvxing_zhen').style.webkitAnimation = 'zhinanzhen2 3.5s linear both';

    cleanshow1();
    showjiaoyin();
    if(image_url_index == Onload_imgs_url.length)
        image_url_index = 0;
    setImage('41');
    image_url_index++;
    if(image_url_index == Onload_imgs_url.length)
        image_url_index = 0;
    setImage('42');
    image_url_index++;
    timeout3 = setTimeout(show4,5000)
}
function cleanshow3()
{
    if(reshow == true)
        return;
    id('div3s').style.webkitAnimation = '';
    id('div3s').style.display = 'none';
    id('div3h').style.webkitAnimation = '';
    id('div3h').style.display = 'none';   
}
function show4()
{
    if(reshow == true)
        return;


    id('page3').style.display = 'block';
    id('page4').style.display = 'block';

    id('bgbox').style.webkitAnimation = 'bgmove4 8s linear both';
    id('page4').style.webkitAnimation = 'bgmove4 8s linear both';
    id('lvxing_jiaoyin').style.webkitAnimation = 'jiaoyinmove 8s linear both';
    id('page3').style.webkitAnimation = 'page3out 8s linear both';
    id('lvxing_zhen').style.webkitAnimation = 'zhinanzhen3 8s linear both';

    cleanshow2();
    if(image_url_index == Onload_imgs_url.length)
        image_url_index = 0;
    setImage('1');
    image_url_index++;
    timeout4 = setTimeout(show1,9000);
}
function cleanshow4()
{
    if(reshow == true)
        return;
    id('page3').style.display = 'none';
    id('page4').style.display = 'none';
    id('page3').style.webkitAnimation = '';
    id('page4').style.webkitAnimation = '';
}

function showtitle()
{
    if(reshow == true)
        return;
    id('lvxing_biaoqian').style.webkitAnimation = 'fadein 1s linear both';
    id('titlecontent').innerHTML = e_desc;
}

var divwidth = {'1h':400,'1s':373,'21h':432,'21s':280,'22h':350,'22s':230,'3h':440,'3s':400,'41h':400,'41s':400,'42h':383,'42s':380};
var divheight = {'1h':280,'1s':548,'21h':313,'21s':400,'22h':250,'22s':320,'3h':320,'3s':600,'41h':280,'41s':600,'42h':276,'42s':580};

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
        div1 = id('div'+idname+'s');
    }
    else
    {
        divname = idname + 's';
        div = id('div'+idname+'s');
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
    // console.log(width,height,img.style.left,img.style.top,img.width,img.height);
}
function showjiaoyin()
{
    if(reshow == true)
        return;
    id('lvxing_jiaoyin').style.display = 'block';
    id('lvxing_jiaoyin').style.webkitAnimation = '';
    id('jiao1').style.webkitAnimation = 'jiao1 1s linear';
    id('jiao2').style.webkitAnimation = 'jiao2 1s 1s linear';
    id('jiao3').style.webkitAnimation = 'jiao1 1s 2s linear';
    id('jiao4').style.webkitAnimation = 'jiao4 0.8s 3s linear forwards';
    id('jiaoyin7').style.webkitAnimation = 'jiao5 1s 3.5s linear forwards';
    id('jiaoyin8').style.webkitAnimation = 'jiao5 1s 4s linear forwards';
    id('jiaoya1').style.webkitAnimation = 'jiao5 1s 4.5s linear forwards';
    id('jiaoya2').style.webkitAnimation = 'jiao5 1s 5s linear forwards';
    id('jiaoya3').style.webkitAnimation = 'jiao5 1s 5.5s linear forwards';
}
function cleanjiaoyin()
{
    if(reshow == true)
        return;
    id('lvxing_jiaoyin').style.display = 'none';
    id('jiao1').style.webkitAnimation = '';
    id('jiao2').style.webkitAnimation = '';
    id('jiao3').style.webkitAnimation = '';
    id('jiao4').style.webkitAnimation = '';
    id('jiaoyin7').style.webkitAnimation = '';
    id('jiaoyin8').style.webkitAnimation = '';
    id('jiaoya1').style.webkitAnimation = '';
    id('jiaoya2').style.webkitAnimation = '';
    id('jiaoya3').style.webkitAnimation = '';
}

call_me(load_images);
function reload_scene()
{
    clearnode();
    reshow = true;
    load_images();

}
function clearnode()
{
    clearTimeout(timeout1);
    clearTimeout(timeout2);
    clearTimeout(timeout3);
    clearTimeout(timeout4);
    clearTimeout(timeout0);

    cleanshow1();
    cleanshow2();
    cleanshow3();
    cleanshow4();
    cleanjiaoyin();
    console.log('test');
    id('bgbox').style.webkitAnimation = '';
    id('page1').style.display = 'none';
    id('lvxing_biaoqian').style.display = 'block';
    id('lvxing_biaoqian').style.webkitAnimation = '';
    
}
</script>