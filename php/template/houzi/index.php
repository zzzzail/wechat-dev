<?
$p=$_WEITE['web_pic_url']."houzi/";
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

#container > div ,#container >img
{
    position: absolute;
}
.diwen 
{
    width: 600px;
    height: 150px;
}
#di1
{
    left: -25px;
    top: 730px;
    -webkit-animation: diwen_in 2s linear both;
}
#di2
{
    left: -65px;
    top: 701px;
    -webkit-animation: diwen_in 2s 0.3s linear both;
}
#di3
{
    left: -32px;
    top: 675px;
    -webkit-animation: diwen_in 2s 0.6s linear both;
}
#di4
{
    left: -66px;
    top: 655px;
    -webkit-animation: diwen_in 2s .9s linear both;
}
.diwen
{
    position: absolute;
}
#denglong1
{
    top:-40px;
    -webkit-animation: denglong 2s ease-in-out infinite alternate;
    -webkit-transform-origin: 60% 0%;
}
#denglong2
{
    left:100px;
    top:-80px;
    -webkit-animation: denglong 2s 1s ease-in-out infinite alternate backwards;
    -webkit-transform-origin: 60% 0%;
}
#mei
{
    left:220px;
    top:0px;
}
#diwen1
{
    -webkit-animation: diwen 2.5s linear infinite;
}
#diwen2
{
    -webkit-animation: diwen 2.5s 0.5s linear infinite;
}
#diwen3
{
    -webkit-animation: diwen 2.5s 1s linear infinite;
}
#diwen4
{
    -webkit-animation: diwen 2.5s 1.5s linear infinite;
}
#pagetitle
{
    left:59px;
    top:190px;
    width: 401px;
    height: 471px;
    opacity: 0;
}
#titlebox
{
    width: 354px;
    height: 183px;
    top: 130px;
    left: 15px;
    position: absolute;
    overflow: hidden;
}
#titlecell
{
    width: 354px;
    height: 183px;
    display: table;
}
#titlecontent
{
    width: 354px;
    height: 183px;
    display: table-cell;
    vertical-align: middle;
    text-align: center;
    font-size: 40px;
    line-height: 40px;
    color: #FFE632;
    font-weight: bold;
    text-shadow: 7px 9px 7px #76011B;
}
.divv
{
    width: 400px;
    height: 566px;
    left: 51px;
    top: 111px;
    overflow: hidden;
    opacity: 0;
    box-shadow: 9px 10px 17px #5E051B;
}
.divh 
{
    width: 462px;
    height: 341px;
    left: 17px;
    top: 233px;
    overflow: hidden;
    opacity: 0;
    box-shadow: 9px 10px 17px #5E051B;
}
#word1>img,#word1>div
{
    position: absolute;
    opacity: 0;
}
#word1
{
    left: 288px;
    top: 470px;
}
#word2
{
    left: 55px;
    top: 548px;
    width: 186px;
    height: 100px;
    opacity: 0;
}
#word3
{
    left: 320px;
    top: 467px;
    width: 172px;
    height: 126px;
    opacity: 0;
}
#word2>img,#word2>div ,#word3>img,#word3>div ,#word4>img,#word4>div,#word5>img,#word5>div
{
    position: absolute;
}
#yu1_2
{
    background-image: url(<?=$p?>images/zi2.png);
    background-position: 0px 0px;
    width: 126px;
    height: 148px;
    left: -36px;
    top: -60px;
    -webkit-transform-origin: 70% 70%;
    -webkit-transform: rotate(-30deg) ;
}
#yu2_2
{
    background-image: url(<?=$p?>images/zi2.png);
    background-position: -161px -86px;
    width: 60px;
    height: 100px;
    left: 136px;
    top: 11px;
    -webkit-transform-origin: 15% 70%;
    -webkit-transform: rotate(30deg);
}
#jiantou_2
{
    background-image: url(<?=$p?>images/zi2.png);
    background-position: -351px 2px;
    width: 48px;
    height: 79px;
    left: 121px;
    top: -66px;
}
#ri_3
{
    left:73px;
    top:60px;
    width: 58px;
    height: 73px;
}
#word4
{
    left: 16px;
    top: 496px;
    opacity: 0;
}
#ciren_4
{
    left: 0px;
    top: 53px;
}
#jiantou_4
{
    left: 104px;
    top: -2px;
}
#ruyi1_4
{
    left: 81px;
    top: 78px;
    width: 97px;
    height: 63px;
}
#ruyi2_4
{
    left: 150px;
    top: 105px;
    width: 67px;
    height: 39px;
}
#jiantou_5
{
    left: 127px;
    top: -4px;
    opacity: 0;
}
#xin1_5
{
    left: 10px;
    top: 73px;
    -webkit-transform: scale(0);
}
#xin2_5
{
    left: 52px;
    top: 73px;
    -webkit-transform: scale(0);
}
#xin3_5
{
    left: 93px;
    top: 73px;
    -webkit-transform: scale(0);
}
#xin4_5
{
    left: 134px;
    top: 73px;
    -webkit-transform: scale(0);
}
#zi_5
{
    left: 11px;
    top: 2px;
    opacity: 0;
}
#word5
{
    left: 0px;
    top: 500px;
}
</style>
<style type="text/css">
@-webkit-keyframes denglong
{
    from  {-webkit-transform: rotate(-3deg);}
    to    {-webkit-transform: rotate(3deg);}
}
@-webkit-keyframes diwen_in
{
    0%  {-webkit-transform: translate(0px,139px);-webkit-animation-timing-function: cubic-bezier(.46,.61,.73,1);}
    51%  {-webkit-transform: translate(0px,-14px);-webkit-animation-timing-function: cubic-bezier(.2,0,.81,1)}
    76%  {-webkit-transform: translate(0px,7px);-webkit-animation-timing-function: linear;}
    100%  {-webkit-transform: translate(0px,0px);-webkit-animation-timing-function: linear;}
}
@-webkit-keyframes diwen
{
    0%   {-webkit-transform: translate(0px,0px);}
    50%  {-webkit-transform: translate(0px,10px);}
    100% {-webkit-transform: translate(0px,0px);}
}
@-webkit-keyframes title_in
{
    0%  {-webkit-transform: scale(1.2);opacity: 0;}
    80% {-webkit-transform: scale(0.95);opacity: 1}
    100%{-webkit-transform: scale(1);opacity: 1}
}

@-webkit-keyframes title_out
{
    0%  {-webkit-transform: scale(1);opacity: 1}
    50% {-webkit-transform: scale(1.1);opacity: 1}
    100%{-webkit-transform: scale(0.6);opacity: 0}
}
@-webkit-keyframes div1_in
{
    from  {-webkit-transform: translate(0px,30px);opacity: 0}
    to    {-webkit-transform: translate(0px,0px);opacity: 1}
}
@-webkit-keyframes div1_out
{
    from  {-webkit-transform: translate(0px,0px);opacity: 1}
    to    {-webkit-transform: translate(0px,-30px);opacity: 0}
}
@-webkit-keyframes div2_in
{
    from  {-webkit-transform: translate(0px,-30px);opacity: 0}
    to    {-webkit-transform: translate(0px,0px);opacity: 1}
}
@-webkit-keyframes div2_out
{
    from  {-webkit-transform: translate(0px,0px);opacity: 1}
    to    {-webkit-transform: translate(0px,30px);opacity: 0}
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
@-webkit-keyframes div3_in
{
    from  {-webkit-transform: scale(1.15);opacity: 0}
    to    {-webkit-transform: scale(1);opacity: 1}
}
/*��һĻ�����ֶ���*/
@-webkit-keyframes word1_0
{
    from {-webkit-transform: scale(1);opacity: 1}
    to   {-webkit-transform: scale(1.06);opacity: 0.8}
}
@-webkit-keyframes word1_1
{
    from {-webkit-transform: translate(0px,0px);opacity: 1}
    to   {-webkit-transform: translate(0px,10px);opacity: 1}
}
@-webkit-keyframes word1_2
{
    from  {-webkit-transform: scale(1);opacity: 1}
    to    {-webkit-transform: scale(1.1);opacity: 1}
}
@-webkit-keyframes word1_3
{
    0%  {-webkit-transform: rotate(0deg);opacity: 1}
    32% {-webkit-transform: rotate(0deg);opacity: 1}
    100%{-webkit-transform: rotate(360deg);opacity: 1}
}
@-webkit-keyframes word1_4
{
    from  {-webkit-transform: rotate(0deg) scale(1);opacity: 1}
    to    {-webkit-transform: rotate(10deg) scale(1.1);opacity: 1}
}
@-webkit-keyframes word1_5
{
    from  {-webkit-transform: translate(0px,0px);opacity: 1}
    to    {-webkit-transform: translate(-8px,-8px);opacity: 1}
}
@-webkit-keyframes word1_6
{
    0%   {-webkit-transform: translate(0px,0px) rotate(0deg);opacity: 1}
    50%  {-webkit-transform: translate(0px,0px) rotate(0deg);opacity: 1}
    51%  {-webkit-transform: translate(0px,0px) rotate(30deg);opacity: 1}
    100% {-webkit-transform: translate(0px,0px) rotate(30deg);opacity: 1}
}
/*�ڶ�Ļ�����ֶ���*/
@-webkit-keyframes word2_1
{
    from  {-webkit-transform: scale(0.6);opacity: 0}
    to    {-webkit-transform: scale(1);opacity: 1}
}
@-webkit-keyframes word2_2
{
    from  {-webkit-transform: rotate(-50deg);opacity: 0}
    to    {-webkit-transform: rotate(0deg);opacity: 1}
}
@-webkit-keyframes word2_3
{
    from  {-webkit-transform: rotate(50deg);opacity: 0}
    to    {-webkit-transform: rotate(0deg);opacity: 1}
}
@-webkit-keyframes word2_4
{
    from  {-webkit-transform: scale(.8);}
    to    {-webkit-transform: scale(1);}
}
@-webkit-keyframes word2_out
{
    from  {-webkit-transform: rotate(0deg);opacity: 1}
    to    {-webkit-transform: rotate(-70deg);opacity: 0}
}
@-webkit-keyframes word3_1
{
    from  {-webkit-transform: rotate(-270deg);}
    to    {-webkit-transform: rotate(0deg);}
}
@-webkit-keyframes word3_2
{
    from  {-webkit-transform: rotate(0deg);}
    to    {-webkit-transform: rotate(25deg);}
}
@-webkit-keyframes word3_in
{
    from  {-webkit-transform: scale(.7);opacity: 0}
    to    {-webkit-transform: scale(1);opacity: 1}
}
@-webkit-keyframes word3_out
{
    from  {-webkit-transform: scale(1);opacity: 1}
    to    {-webkit-transform: scale(1.2);opacity: 0}
}
@-webkit-keyframes div3_out
{
    from  {-webkit-transform: scale(1);opacity: 1}
    to    {-webkit-transform: scale(.6);opacity: 0}
}
@-webkit-keyframes div4_in
{
    from  {-webkit-transform: translate(-50px,0px);opacity: 0}
    to    {-webkit-transform: translate(0px,0px);opacity: 1}
}
@-webkit-keyframes div4_out
{
    from  {-webkit-transform: translate(0px,0px);opacity: 1}
    to    {-webkit-transform: translate(50px,0px);opacity: 0}
}
@-webkit-keyframes div5_in
{
    from  {-webkit-transform: translate(50px,0px);opacity: 0}
    to    {-webkit-transform: translate(0px,0px);opacity: 1}
}
@-webkit-keyframes div5_out
{
    from  {-webkit-transform: translate(0px,0px);opacity: 1}
    to    {-webkit-transform: translate(-50px,0px);opacity: 0}
}
/*����Ļ����*/
@-webkit-keyframes word4_1
{
    from  {-webkit-transform: scale(.9);opacity: 0}
    to    {-webkit-transform: scale(1);opacity: 1}
}
@-webkit-keyframes word4_2
{
    from  {-webkit-transform: translate(20px,0px);opacity: 0}
    to    {-webkit-transform: translate(0px,0px);opacity: 1}
}
@-webkit-keyframes word4_3
{
    from  {-webkit-transform: translate(50px,0px);opacity: 0}
    to    {-webkit-transform: translate(0px,0px);opacity: 1}
}
@-webkit-keyframes word4_4
{
    from  {opacity: 1}
    to    {opacity: 0.3}
}
@-webkit-keyframes word4_out
{
    from  {-webkit-transform: translate(0px,0px);opacity: 1}
    to    {-webkit-transform: translate(-50px,0px);opacity: 0}
}
/*����Ļ����*/
@-webkit-keyframes word5_1
{
    0%   {-webkit-transform: scale(0.2);}
    80%  {-webkit-transform: scale(1.5);}
    100% {-webkit-transform: scale(1);}
}
@-webkit-keyframes word5_2
{
    from  {-webkit-transform: translate(0px,0px);opacity: 1}
    to    {-webkit-transform: translate(5px,-5px);opacity: 1}
}
@-webkit-keyframes word5_3
{
    from  {-webkit-transform: scale(1);}
    to    {-webkit-transform: scale(1.25);}
}
</style>

<div id='container'>
    <img src='<?=$p?>images/bg.jpg'>

    <div id='div1h' class='divh'>
        <img id='img1h' style='position:absolute'>
    </div>
    <div id='div1v' class='divv'>
        <img id='img1v' style='position:absolute'>
    </div>

    <div id='div2v' class='divv'>
        <img id='img2v' style='position:absolute'>
    </div>
    <div id='div2h' class='divh'>
        <img id='img2h' style='position:absolute'>
    </div>

    <div id='div3v' class='divv'>
        <img id='img3v' style='position:absolute'>
    </div>
    <div id='div3h' class='divh'>
        <img id='img3h' style='position:absolute'>
    </div>

    <div id='div4v' class='divv'>
        <img id='img4v' style='position:absolute'>
    </div>
    <div id='div4h' class='divh'>
        <img id='img4h' style='position:absolute'>
    </div>

    <div id='div5v' class='divv'>
        <img id='img5v' style='position:absolute'>
    </div>
    <div id='div5h' class='divh'>
        <img id='img5h' style='position:absolute'>
    </div>

    <img id='denglong1' src='<?=$p?>images/denglong.png'>
    <img id='denglong2' src='<?=$p?>images/denglong.png'>
    <img id='mei' src='<?=$p?>images/mei.png'>

    <div id='di4' class='diwen'>
        <img id='diwen4' width='600' src='<?=$p?>images/di.png'>
    </div>
    <div id='di3' class='diwen'>
        <img id='diwen3' width='600' src='<?=$p?>images/di.png'>
    </div>
    <div id='di2' class='diwen'>
        <img id='diwen2' width='600' src='<?=$p?>images/di.png'>
    </div>
    <div id='di1' class='diwen'>
        <img id='diwen1' width='600' src='<?=$p?>images/di.png'>
    </div>

    <div id="word1">
        <img id='jiantou_1' src="<?=$p?>images/jiantou.png" style="left: 38px;top: -3px;">
        <img id='ciren_1' src="<?=$p?>images/ciren.png" style="left: 63px;top: 54px;">
        <img id='hou_1' src="<?=$p?>images/hou.png" style="left: -12px;top: 95px;">
        <img id='nian_1' src="<?=$p?>images/nian.png" style="left: 68px;top: 98px;">
        <img id='bi_1' src="<?=$p?>images/bi.png" style="left: 102px;top: 106px;">
        <img id='fa_1' src="<?=$p?>images/fa.png" style="left: 145px;top: 102px;">
        <img id='yuanbao1_1' src="<?=$p?>images/1.png" style="left: 87px;top: -17px;">
        <img id='yuanbao2_1' src="<?=$p?>images/1.png" style="left: 143px;top: 42px;">
        <img id='yuanbao3_1' src="<?=$p?>images/1.png" style="left: -3px;top: 40px;">
    </div>

    <div id='word2'>
        <div id='yu1_2'></div>
        <div id='yu2_2'></div>
        <div id='jiantou_2'></div>
        <img id='hongyun_2' src='<?=$p?>images/zi21.png'>
    </div>

    <div id='word3'>
        <img id='zhengzheng_3' src='<?=$p?>images/zi4.png'>
        <div id='ri_3'>
            <img src='<?=$p?>images/zi41.png' style='position:absolute;-webkit-animation: word3_2 1s linear infinite alternate'>
        </div>
    </div>

    <div id='word4'>
        <img id='ciren_4' src='<?=$p?>images/zi31.png'>
        <img id='jiantou_4' src='<?=$p?>images/zi32.png'>
        <div id='ruyi1_4'>
            <img id='ruyi1' src='<?=$p?>images/zi33.png'>
        </div>
        <div id='ruyi2_4'>
            <img id='ruyi2' src='<?=$p?>images/zi34.png'>
        </div>
    </div>

    <div id='word5'>
        <img id='xin1_5' src='<?=$p?>images/xin.png'>
        <img id='xin2_5' src='<?=$p?>images/xin.png'>
        <img id='xin3_5' src='<?=$p?>images/xin.png'>
        <img id='xin4_5' src='<?=$p?>images/xin.png'>
        <img id='zi_5' src='<?=$p?>images/zi5.png'>
        <img id='jiantou_5' src='<?=$p?>images/zi32.png'>
    </div>


    <div id='pagetitle'>
        <img src='<?=$p?>images/title.png'>
        <div id='titlebox'>
            <div id='titlecell'>
                <div id='titlecontent'></div>
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
var timeout7;
var timeout8;
var timeout9;
var timeout10;
var timeout11;

var delaytime=5000;
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
function id(name)
{
    return document.getElementById(name);
}

function showtitle()
{
    var pagetitle = id('pagetitle');
    var titlecontent = id('titlecontent');

    pagetitle.style.webkitAnimation = 'title_in 0.8s linear both';
    titlecontent.innerHTML = e_desc;

    // setTimeout(distitle,3000)
}

function distitle()
{
    id('pagetitle').style.webkitAnimation = 'title_out 1s linear both';

    timeout1 = setTimeout(show1,1000);
}

function show1()
{
    setImage('1');
    id('div1h').style.webkitAnimation = 'div1_in 1.5s cubic-bezier(.27,.27,.77,1) both';
    id('div1v').style.webkitAnimation = 'div1_in 1.5s cubic-bezier(.27,.27,.77,1) both';

    showword1();
    clearani2();

    timeout2 = setTimeout(show2,4000);
}

function showword1()
{
    var objname = ['ciren_1','hou_1','nian_1','bi_1','fa_1','jiantou_1','yuanbao1_1','yuanbao2_1','yuanbao3_1'];

    for(var i = 0;i < objname.length; i ++)
    {
        id(objname[i]).style.webkitAnimation = 'fadein 0.5s linear '+ i*0.1 + 's both'; 
    }

    timeout3 = setTimeout(showword1move,1500);

}

function showword1move()
{
    id('jiantou_1').style.webkitAnimation = 'word1_5 0.5s linear infinite alternate';
    id('ciren_1').style.webkitAnimation = ' word1_0 0.5s linear infinite alternate';
    id('hou_1').style.webkitAnimation = 'word1_1 0.8s linear infinite alternate';
    id('nian_1').style.webkitAnimation = 'word1_2 0.8s linear infinite alternate';
    id('bi_1').style.webkitAnimation = 'word1_3 2.5s linear infinite';
    id('fa_1').style.webkitAnimation = 'word1_4 0.4s linear infinite alternate';
    id('yuanbao1_1').style.webkitAnimation = 'word1_6 0.7s linear infinite';
    id('yuanbao2_1').style.webkitAnimation = 'word1_6 0.7s 0.2s linear infinite backwards';
    id('yuanbao3_1').style.webkitAnimation = 'word1_6 0.7s 0.5s linear infinite backwards';
}

function clearani1()
{
    var objname = ['word1','ciren_1','hou_1','nian_1','bi_1','fa_1','jiantou_1','yuanbao1_1','yuanbao2_1','yuanbao3_1','div1h','div1v'];

    for(var i = 0;i < objname.length; i ++)
    {
        id(objname[i]).style.webkitAnimation = ''; 
    }
}

function show2()
{
    setImage('2');

    id('div1h').style.webkitAnimation = 'div1_out 1.2s cubic-bezier(.2,.01,.71,.72) both';
    id('div1v').style.webkitAnimation = 'div1_out 1.2s cubic-bezier(.2,.01,.71,.72) both';
    id('word1').style.webkitAnimation = 'fadeout 1.2s linear both';

    id('div2v').style.webkitAnimation = 'div2_in 1.5s 0.5s cubic-bezier(.27,.27,.77,1) both';
    id('div2h').style.webkitAnimation = 'div2_in 1.5s 0.5s cubic-bezier(.27,.27,.77,1) both';

    showword2();
    clearani3();

    timeout4 = setTimeout(show3,4000)
}

function showword2()
{
    id('word2').style.webkitAnimation = 'fadein 1s 1s linear both';
    id('hongyun_2').style.webkitAnimation = 'word2_1 0.8s linear both';
    id('yu2_2').style.webkitAnimation = 'word2_3 1s 1.3s cubic-bezier(.65,.68,.72,.98) both';
    id('yu1_2').style.webkitAnimation = 'word2_2 1s 1.5s cubic-bezier(.65,.68,.72,.98) both';
    id('jiantou_2').style.webkitAnimation = 'word2_4 0.5s linear infinite alternate';

}

function clearani2()
{
    var objname = ['word2','hongyun_2','yu2_2','yu1_2','jiantou_2','div2h','div2v'];

    for(var i = 0;i < objname.length; i ++)
    {
        id(objname[i]).style.webkitAnimation = ''; 
    }
}

function show3()
{
    setImage('3');

    id('div2v').style.webkitAnimation = 'div2_out 1.2s cubic-bezier(.2,.01,.71,.72) both';
    id('div2h').style.webkitAnimation = 'div2_out 1.2s cubic-bezier(.2,.01,.71,.72) both';
    id('word2').style.webkitAnimation = 'word2_out 1s linear both';

    id('div3v').style.webkitAnimation = 'div3_in 1.2s 0.5s linear both';
    id('div3h').style.webkitAnimation = 'div3_in 1.2s 0.5s linear both';

    showword3();
    clearani4();

    timeout5 = setTimeout(show4,4000)
}

function showword3()
{
    id('word3').style.webkitAnimation = 'word3_in 1s 0.5s both';
    id('ri_3').style.webkitAnimation = 'word3_1 2s 1s ease-out both';
}

function clearani3()
{
    var objname = ['word3','ri_3','div3h','div3v'];

    for(var i = 0;i < objname.length; i ++)
    {
        id(objname[i]).style.webkitAnimation = ''; 
    }
}

function show4()
{
    setImage('4');

    id('div3v').style.webkitAnimation = 'div3_out 1.2s cubic-bezier(.2,.01,.71,.72) both';
    id('div3h').style.webkitAnimation = 'div3_out 1.2s cubic-bezier(.2,.01,.71,.72) both';
    id('word3').style.webkitAnimation = 'word3_out 1s linear both';

    id('div4v').style.webkitAnimation = 'div4_in 1.2s 0.5s linear both';
    id('div4h').style.webkitAnimation = 'div4_in 1.2s 0.5s linear both';

    showword4();
    clearani5();

    timeout6 = setTimeout(show5,4000);
}

function showword4()
{
    id('word4').style.webkitAnimation = 'fadein 0.2s 0.8s linear both';
    id('jiantou_4').style.webkitAnimation = 'word4_1 0.7s 0.8s linear both';
    id('ciren_4').style.webkitAnimation = 'fadein 0.7s 0.8s linear both';
    id('ruyi1_4').style.webkitAnimation = 'word4_2 0.7s 0.8s linear both';
    id('ruyi2_4').style.webkitAnimation = 'word4_3 0.7s 0.8s linear both';

    timeout7 = setTimeout(showword4move,1500)
}

function showword4move()
{
    id('ruyi1').style.webkitAnimation = 'word4_4 0.6s 0.2s ease-out infinite alternate';
    id('ciren_4').style.webkitAnimation = 'word4_4 0.6s ease-out infinite alternate';
    id('ruyi2').style.webkitAnimation = 'word4_4 0.6s 0.4s ease-out infinite alternate';
}

function clearani4()
{
    var objname = ['word4','jiantou_4','ciren_4','ruyi1_4','ruyi2_4','div4h','div4v'];

    for(var i = 0;i < objname.length; i ++)
    {
        id(objname[i]).style.webkitAnimation = ''; 
    }
} 

function show5()
{
    setImage('5');

    id('div4v').style.webkitAnimation = 'div4_out 1.2s cubic-bezier(.2,.01,.71,.72) both';
    id('div4h').style.webkitAnimation = 'div4_out 1.2s cubic-bezier(.2,.01,.71,.72) both';
    id('word4').style.webkitAnimation = 'word4_out 1s linear both';

    id('div5v').style.webkitAnimation = 'div5_in 1.2s 0.5s linear both';
    id('div5h').style.webkitAnimation = 'div5_in 1.2s 0.5s linear both';

    showword5();
    clearani1();

    timeout8 = setTimeout(show1_1,4000)
}


function showword5()
{
    id('xin4_5').style.webkitAnimation = 'word5_1 0.5s linear both';
    id('xin3_5').style.webkitAnimation = 'word5_1 0.5s 0.1s linear forwards';
    id('xin2_5').style.webkitAnimation = 'word5_1 0.5s 0.2s linear forwards';
    id('xin1_5').style.webkitAnimation = 'word5_1 0.5s 0.3s linear forwards';
    id('zi_5').style.webkitAnimation = 'fadein 0.5s 0.8s linear both';
    id('jiantou_5').style.webkitAnimation = 'word5_2 0.5s 0.8s linear infinite alternate';

    timeout9 = setTimeout(showword5move,1000);
}

function showword5move()
{
    id('xin1_5').style.webkitAnimation = 'word5_3 0.5s linear infinite alternate';
    id('xin2_5').style.webkitAnimation = 'word5_3 0.5s linear infinite alternate';
    id('xin3_5').style.webkitAnimation = 'word5_3 0.5s linear infinite alternate';
    id('xin4_5').style.webkitAnimation = 'word5_3 0.5s linear infinite alternate';
}

function clearani5()
{
    var objname = ['xin1_5','xin2_5','xin3_5','xin4_5','word5','jiantou_5','zi_5','div5h','div5v'];

    for(var i = 0;i < objname.length; i ++)
    {
        id(objname[i]).style.webkitAnimation = ''; 
    }
}

function show1_1()
{
    setImage('1');

    id('div5v').style.webkitAnimation = 'div5_out 1.2s cubic-bezier(.2,.01,.71,.72) both';
    id('div5h').style.webkitAnimation = 'div5_out 1.2s cubic-bezier(.2,.01,.71,.72) both';
    id('word5').style.webkitAnimation = 'fadeout 1s linear both';

    id('div1h').style.webkitAnimation = 'div1_in 1.5s 1s cubic-bezier(.27,.27,.77,1) both';
    id('div1v').style.webkitAnimation = 'div1_in 1.5s 1s cubic-bezier(.27,.27,.77,1) both';

    clearani2();
    timeout11 = setTimeout(showword1,1000)

    timeout10 = setTimeout(show2,5000);
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
        width = 462;
        height = 341;
    }
    else
    {
        divname = idname + 'v';
        div = id('div'+idname+'v');
        div1 = id('div'+idname+'h');
        width = 400;
        height = 566;
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
     clearTimeout(timeout7);
     clearTimeout(timeout8);
     clearTimeout(timeout9);
     clearTimeout(timeout10);
     clearTimeout(timeout11);

     clearani1();
     clearani2();
     clearani3();
     clearani4();
     clearani5();

     id('pagetitle').style.webkitAnimation = '';
     id('titlecontent').innerHTML = '';
}

</script>