<?
$p=$_WEITE['web_pic_url']."huijia/";
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
#container > div,#container > img
{
    position: absolute;
}

#line1
{
    left: 255px;
    top: 46px;
    height: 300px;
    width: 5px;
    -webkit-transform-origin: 50% 100%;
}
#line2
{
    left: 255px;
    top: 346px;
    width: 5px;
    height: 300px;
    -webkit-transform-origin: 50% 0%;
}
#yuan
{
    left: 104px;
    top: 179px;
    -webkit-transform: scale(0);
}
#yuan1
{
    left: 143px;
    top: 270px;
    opacity: 0;
}
#line3
{
    width: 230px;
    height: 5px;
    background-color: #D3BFAE;
    left: 19px;
    top: 327px;
    -webkit-transform-origin: 100% 50%;
    -webkit-transform: scale(0,1);
}
#line4
{
    width: 221px;
    height: 5px;
    background-color: #D3BFAE;
    left: 261px;
    top: 327px;
    -webkit-transform-origin: 0% 50%;
    -webkit-transform: scale(0,1);
}
#word1
{
    left: 343px;
    top: 27px;
    opacity: 0;
}
#huochediv
{
    left: 21px;
    top: 511px;
    width: 180px;
    height: 180px;
    opacity: 0;
    /*background-color: #fff;*/
}
#huoche
{
    left: 48px;
    top: 41px;
    position: absolute;
    -webkit-transform-origin: 50% 80%;
    -webkit-animation: huoche 0.5s linear infinite alternate;
}
#yun
{
    left: 97px;
    top: 51px;
    width: 55px;
    position: absolute;
    -webkit-animation: yunduo 1.4s linear infinite;
}
#yun1
{
    left: 97px;
    top: 51px;
    width: 55px;
    position: absolute;
    -webkit-animation: yunduo 1.4s 0.7s linear infinite backwards;
}
#div1h,#div4h
{
    width: 550px;
    height: 400px;
    /*background-color: #000;*/
    left: 22px;
    top: 165px;
    overflow: hidden;
    opacity: 0;
    /*display: none;*/
}
#div1v,#div4v
{
    width: 490px;
    height: 750px;
    background-color: #000;
    left: 21px;
    top: 0px;
    overflow: hidden;
    opacity: 0;
}
#div2v
{
    width: 500px;
    height: 780px;
    overflow: hidden;
    left: 0px;
    top:0px;
    opacity: 0;
}
#div2h
{
    width: 500px;
    height: 350px;
    overflow: hidden;
    left: 0px;
    top: 180px;
    opacity: 0;
}
#word2
{
    left: 25px;
    top: 553px;
    opacity: 0;
}
#feijidiv
{
    left: 297px;
    top: 3px;
    width: 200px;
    height: 200px;
}
#yun2
{
    left: 31px;
    top: 40px;
    width: 50px;
    position: absolute;
    opacity: 0;
}
#yun3
{
    left: 110px;
    top: 49px;
    width: 60px;
    position: absolute;
    opacity: 0;
}
#feiji
{
    left: 59px;
    top: 39px;
    position: absolute;
    width: 100px;
    opacity: 0;
}
#yun4
{
    left: 48px;
    top: 81px;
    width: 85px;
    position: absolute;
    opacity: 0;
}
#div3v
{
    width: 500px;
    height: 780px;
    overflow: hidden;
    opacity: 0;
}
#div3h
{
    width: 500px;
    height: 350px;
    overflow: hidden;
    top: 190px;
    opacity: 0;
}
#word3
{
    left: 28px;
    top: 33px;
    opacity: 0;
}
#jiaozi
{
    left: 328px;
    top: 571px;
    opacity: 0;
}
#word4
{
    left: 339px;
    top: 31px;
    opacity: 0;
}
#zixingche
{
    left: 51px;
    top: 592px;
    opacity: 0;
}
#lupai
{
    left: 35px;
    top: 565px;
    -webkit-transform-origin: 20% 90%;
    opacity: 0;
}
#aixin1
{
    -webkit-transform: translate(-10px,76px) rotate(32deg) scale(0.8);
    width: 146px;
    height: 50px;
    opacity: 0;
}
#aixin2
{
    -webkit-transform: translate(60px,51px) rotate(-21deg) scale(.7);
    width: 146px;
    height: 53px;
    opacity: 0;
}
#div5v
{
    width: 530px;
    height: 800px;
    overflow: hidden;
    opacity: 0;
}
#div5h
{
    width: 530px;
    height: 353px;
    overflow: hidden;
    top: 175px;
    opacity: 0;
}
#feijixian
{
    left: 98px;
    top: 79px;
    width: 102px;
    opacity: 0;
    position: absolute;
}
</style>
<style type="text/css">
@-webkit-keyframes line1_in
{
    0%  {-webkit-transform: translate(0px,-325px) scale(1,1);opacity: 1}
    65% {-webkit-transform: translate(0px,0px) scale(1,1);opacity: 1}
    99% {-webkit-transform: translate(0px,0px) scale(1,.5);opacity: 1}
    100%{-webkit-transform: translate(0px,0px) scale(1,.5);opacity: 0;}
}
@-webkit-keyframes line2_in
{
    0%  {-webkit-transform: translate(0px,345px) scale(1,1);opacity: 1}
    65% {-webkit-transform: translate(0px,0px) scale(1,1);opacity: 1}
    99% {-webkit-transform: translate(0px,0px) scale(1,.4);opacity: 1}
    100%{-webkit-transform: translate(0px,0px) scale(1,.4);opacity: 0}
}
@-webkit-keyframes yuan_in
{
    0%    {-webkit-transform: scale(0);}
    60%   {-webkit-transform: scale(1.1);}
    80%   {-webkit-transform: scale(0.95);}
    100%  {-webkit-transform: scale(1);}
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
@-webkit-keyframes title_out
{
    from  {-webkit-transform: scale(1,1);opacity: 1}
    to    {-webkit-transform: scale(0.7,0.7);opacity: 0}
}
@-webkit-keyframes yuan_out
{
    0%    {-webkit-transform: scale(1);opacity: 1}
    50%   {-webkit-transform: scale(0.05);opacity: 1}
    100%  {-webkit-transform: scale(0.05);opacity: 0}
}
@-webkit-keyframes yuan1_out
{
    0%   {-webkit-transform: scale(1);opacity: 1}
    20%  {-webkit-transform: scale(1.1);opacity: 0.8}
    100% {-webkit-transform: scale(0.5);opacity: 0}
}
@-webkit-keyframes line3_out
{
    0%  {-webkit-transform: scale(0,1);}
    50% {-webkit-transform: scale(1,1);}
    100%{-webkit-transform: translate(-250px,0px) scale(1,1);}
}
@-webkit-keyframes line4_out
{
    0%  {-webkit-transform: scale(0,1);}
    50% {-webkit-transform: scale(1,1);}
    100%{-webkit-transform: translate(250px,0px) scale(1,1);}
}
@-webkit-keyframes yunduo
{
    0%  {-webkit-transform: translate(-50px,34px) scale(.4);opacity: 0}
    10% {-webkit-transform: translate(-50px,34px) scale(.4);opacity: 1}
    100%{-webkit-transform: translate(10px,-10px) scale(1);opacity: 0}
}
@-webkit-keyframes huoche
{
    from  {-webkit-transform: scale(1,1);}
    to    {-webkit-transform: scale(1.02,0.95);}
}
@-webkit-keyframes huoche_in
{
    from  {opacity: 0;-webkit-transform: translate(0px,0px);}
    to    {opacity: 1;-webkit-transform: translate(-42px,0px);}
}
@-webkit-keyframes word1_in
{
    from  {opacity: 0;-webkit-transform: scale(0.8);}
    to    {opacity: 1;-webkit-transform: scale(1);}
}
@-webkit-keyframes word1_out
{
    from  {opacity: 1;-webkit-transform: scale(1);}
    to    {opacity: 0;-webkit-transform: scale(.8);}
}
@-webkit-keyframes div1h_in
{
    0%   {-webkit-transform: translate(0px,0px);opacity: 0;}
    50%  {-webkit-transform: translate(-30px,0px);opacity: 1}
    100% {-webkit-transform: translate(-60px,0px);opacity: 1}
}
@-webkit-keyframes div1h_out
{
    from  {-webkit-transform: translate(-60px,0px);opacity: 1}
    to    {-webkit-transform: translate(-90px,0px);opacity: 0}
}
@-webkit-keyframes huoche_out
{
    from  {opacity: 1;-webkit-transform: translate(-42px,0px);}
    to    {opacity: 0;-webkit-transform: translate(-80px,0px);}
}
@-webkit-keyframes div1v_in
{
    0%  {-webkit-transform: translate(0px,0px);opacity: 0}
    50% {-webkit-transform: translate(-10px,0px);opacity: 1}
    100%{-webkit-transform: translate(-20px,0px);opacity: 1}
}
@-webkit-keyframes div1v_out
{
    from  {-webkit-transform: translate(-20px,0px);opacity: 1}
    to    {-webkit-transform: translate(-30px,0px);opacity: 0;}
}
@-webkit-keyframes div2v_in
{
    from  {-webkit-transform: scale(1.1);opacity: 0}
    to    {-webkit-transform: scale(1);opacity: 1}
}
@-webkit-keyframes feiji_in
{
    from  {-webkit-transform: translate(102px,58px) rotate(-17deg) scale(.5);opacity: 1}
    to    {-webkit-transform: translate(0px,0px) rotate(0deg) scale(1);opacity: 1}
}
@-webkit-keyframes fadeinyun
{
    from  {opacity: 1;-webkit-transform: scale(0.6);}
    to    {opacity: 1;-webkit-transform: scale(1);}
}
@-webkit-keyframes yun_out
{
    0%   {opacity: 1;-webkit-transform: scale(1);}
    30%  {opacity: 1;-webkit-transform: scale(1.1);}
    100% {opacity: 0;-webkit-transform: scale(0.6);}
}
@-webkit-keyframes feiji_out
{
    0%  {-webkit-transform: translate(0px,0px) rotate(0deg) scale(1);opacity: 1;}
    100%{-webkit-transform: translate(-150px,-150px) rotate(0deg) scale(1);opacity: 1}
}
@-webkit-keyframes word3_in
{
    0%  {-webkit-transform: scale(.5);opacity: 0}
    70% {-webkit-transform: scale(1.1);opacity: 1}
    100%{-webkit-transform: scale(1);opacity: 1}
}
@-webkit-keyframes word3_out
{
    0%  {-webkit-transform: scale(1);opacity: 1}
    30% {-webkit-transform: scale(1.1);opacity: 1}
    100%{-webkit-transform: scale(.5);opacity: 0}
}
@-webkit-keyframes word4_in
{
    from  {opacity: 0;-webkit-transform: scale(1.2);}
    to    {opacity: 1;-webkit-transform: scale(1);}
}
@-webkit-keyframes word4_out
{
    from  {opacity: 1;-webkit-transform: scale(1);}
    to    {opacity: 0;-webkit-transform: scale(1.2);}
}
@-webkit-keyframes zixingche_in
{
    from  {opacity: 1;-webkit-transform: translate(50px,0px);}
    to    {opacity: 1;-webkit-transform: translate(0px,0px);}
}
@-webkit-keyframes zixingche_out
{
    from  {opacity: 1;-webkit-transform: translate(0px,0px);}
    to    {opacity: 0;-webkit-transform: translate(-30px,0px);}
}
@-webkit-keyframes lupai_in
{
    from  {opacity: 1;-webkit-transform: rotate(-90deg);}
    to    {opacity: 1;-webkit-transform: rotate(0deg);}
}
@-webkit-keyframes lupai_out
{
    from  {opacity: 1;-webkit-transform: rotate(0deg);}
    to    {opacity: 0;-webkit-transform: rotate(-90deg);}
}
@-webkit-keyframes chibangmove
{
    from  {-webkit-transform: scale(1,1);}
    to    {-webkit-transform: scale(0.3,1);}
}
@-webkit-keyframes chibangmove1
{
    from  {-webkit-transform: scale(-1,1);}
    to    {-webkit-transform: scale(-0.3,1);}
}
@-webkit-keyframes aixin2
{
    from  {-webkit-transform: translate(87px,82px) rotate(-41deg) scale(.8);opacity: 0}
    to    {-webkit-transform: translate(60px,51px) rotate(-21deg) scale(.7);opacity: 1}
}
@-webkit-keyframes aixin2_out
{
    from  {-webkit-transform: translate(60px,51px) rotate(-21deg) scale(.7);opacity: 1}
    to    {-webkit-transform: translate(100px,-45px) rotate(1deg) scale(.7);opacity: 1}
}
@-webkit-keyframes aixin1
{
    from  {-webkit-transform: translate(-32px,113px) rotate(40deg) scale(0.7);opacity: 0}
    to    {-webkit-transform: translate(-10px,76px) rotate(32deg) scale(0.8);opacity: 1}
}
@-webkit-keyframes aixin1_out
{
    from  {-webkit-transform: translate(-10px,76px) rotate(32deg) scale(0.8);opacity: 1}
    to    {-webkit-transform: translate(-10px,-44px) rotate(3deg) scale(0.8);opacity: 1}
}
@-webkit-keyframes word5_in
{
    from  {opacity: 0;-webkit-transform: rotate(-90deg);}
    to    {opacity: 1;-webkit-transform: rotate(0deg);}
}
@-webkit-keyframes word5_out
{
    from  {opacity: 1;-webkit-transform: rotate(0deg) scale(1);}
    to    {opacity: 0;-webkit-transform: rotate(90deg) scale(1.3);}
}
@-webkit-keyframes div5_in
{
    from  {-webkit-transform: scale(1.05);opacity: 0}
    to    {-webkit-transform: scale(1);opacity: 1}
}
@-webkit-keyframes div5_out
{
    from  {-webkit-transform: translate(0px,0px) scale(1);opacity: 1}
    to    {-webkit-transform: translate(-30px,-30px) scale(1);opacity: 0}
}
</style>
<div id='container'>
    <img src='<?=$p?>images/2016bg.jpg'>

    <img id='line1' src='<?=$p?>images/jiang2.png'>
    <img id='line2' src='<?=$p?>images/jiang2.png'>

    <div id='line3'></div>
    <div id='line4'></div>

    <img id='yuan' src='<?=$p?>images/jiang.png'>
    <img id='yuan1' src='<?=$p?>images/jiang1.png'>

    <div id='div1h' style='display:none'>
        <img id='img1h' style='position:absolute'>
    </div>
    <div id='div1v' style='display:none'>
        <img id='img1v' style='position:absolute'>
    </div>

    <div id='div2v' style='display:none'>
        <img id='img2v' style='position:absolute'>
    </div>
    <div id='div2h' style='display:none'>
        <img id='img2h' style='position:absolute'>
    </div>

    <div id='div3v' style='display:none'>
        <img id='img3v' style='position:absolute'>
    </div>
    <div id='div3h' style='display:none'>
        <img id='img3h' style='position:absolute'>
    </div>

    <div id='div4h' style='display:none'>
        <img id='img4h' style='position:absolute'>
    </div>
    <div id='div4v' style='display:none'>
        <img id='img4v' style='position:absolute'>
    </div>

    <div id='div5v' style='display:none'>
        <img id='img5v' style='position:absolute'>
    </div>
    <div id='div5h' style='display:none'>
        <img id='img5h' style='position:absolute'>
    </div>

    <img id='word1' src='<?=$p?>images/zlan.png'>
    <div id='huochediv'>
        <img id='huoche' src='<?=$p?>images/zlan1.png'>
        <img id='yun' src='<?=$p?>images/zlan2.png'>
        <img id='yun1' src='<?=$p?>images/zlan2.png'>
    </div>

    <img id='word2' src='<?=$p?>images/huang.png'>
    <div id='feijidiv'>
        <img id='yun2' src='<?=$p?>images/huang4.png'>
        <img id='yun3' src='<?=$p?>images/huang4.png'>
        <img id='feiji' src='<?=$p?>images/guang1.png'>
        <img id='feijixian' src='<?=$p?>images/guang2.png'>
        <img id='yun4' src='<?=$p?>images/huang3.png'>
    </div>

    <img id='word3' src='<?=$p?>images/lv.png'>
    <img id='jiaozi' src='<?=$p?>images/lv3.png'>

    <img id='word4' src='<?=$p?>images/zi.png'>
    <img id='zixingche' src='<?=$p?>images/zi2.png'>
    <img id='lupai' src='<?=$p?>images/zi3.png'>

    <img id="word5" src="<?=$p?>images/lan.png" style="left: 330px;top: 546px;opacity:0;">
    <div id='aixin1'>
        <img src="<?=$p?>images/chibang.png" style="left: 97px;-webkit-transform-origin: 0% 35%;top: 0px;position: absolute;-webkit-animation: chibangmove 0.4s linear infinite alternate">
        <img src="<?=$p?>images/chibang.png" style="-webkit-transform-origin: 0% 35%;-webkit-transform: scale(-1,1);left: 51px;top: 0px;position: absolute;-webkit-animation: chibangmove1 0.4s linear infinite alternate">
        <img src="<?=$p?>images/xin.png" style="left: 50px;top: 0px;width: 50px;position:absolute">
    </div>
    <div id='aixin2'>
        <img src="<?=$p?>images/chibang.png" style="left: 97px;-webkit-transform-origin: 0% 35%;top: 0px;position: absolute;-webkit-animation: chibangmove 0.4s linear infinite alternate">
        <img src="<?=$p?>images/chibang.png" style="-webkit-transform-origin: 0% 35%;-webkit-transform: scale(-1,1);left: 51px;top: 0px;position: absolute;-webkit-animation: chibangmove1 0.4s linear infinite alternate">
        <img src="<?=$p?>images/xin.png" style="left: 50px;top: 0px;width: 50px;position:absolute">
    </div>

    <img src='<?=$p?>images/2016.png'>
    <div id='pagetitle' style='position:absolute;width:178px;height:110px;top:274px;left:166px;font-size:22px;overflow:hidden;color:#fff'>
        <div style='position:absolute;width:178px;height:110px;top:0px;left:0px;overflow:hidden;'>
            <div style='position:absolute;width:178px;height:110px;display:table;overflow:hidden;'>
                <div id='titlecontent' style='width:178px;height:110px;vertical-align:middle;display:table-cell;text-align:center;'></div>
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
var delaytime=5000;
var timeout0;
var timeout1;
var timeout2;
var timeout3;
var timeout4;
var timeout5;
var timeout6;
var timeout7;
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
    id('line1').style.webkitAnimation = 'line1_in 1.5s linear both';
    id('line2').style.webkitAnimation = 'line2_in 1.5s linear both';

    id('yuan').style.webkitAnimation = 'yuan_in 0.6s 1s ease-out both';
    id('yuan1').style.webkitAnimation = 'fadein 0.4s 1.4s linear both';
    id('pagetitle').style.webkitAnimation = 'fadein 0.7s 1.6s linear both';
    id('titlecontent').innerHTML = e_desc;

}

function distitle()
{
    id('pagetitle').style.webkitAnimation = 'title_out 0.3s linear both';
    id('yuan1').style.webkitAnimation = 'yuan1_out 0.3s linear 0.2s both';
    id('yuan').style.webkitAnimation = 'yuan_out 0.8s ease-out 0.3s both';

    id('line3').style.webkitAnimation = 'line3_out 1s linear 0.5s both';
    id('line4').style.webkitAnimation = 'line4_out 1s linear 0.5s both';

    timeout1 = setTimeout(show1,1000)
}
function show1()
{
    setImage('1');
    id('word1').style.webkitAnimation = 'word1_in 0.8s linear both';
    id('huochediv').style.webkitAnimation = 'huoche_in 1s ease-out both';

    id('div1h').style.webkitAnimation = 'div1h_in 4s cubic-bezier(.28,.41,.81,.99) both';
    id('div1v').style.webkitAnimation = 'div1v_in 4s linear both';

    timeout2 = setTimeout(show2,5000)
}

function show2()
{
    setImage('2');
    id('word1').style.webkitAnimation = 'word1_out 0.8s linear both';
    id('huochediv').style.webkitAnimation = 'huoche_out 0.8s linear both';

    id('div1h').style.webkitAnimation = 'div1h_out 1s ease-in both';
    id('div1v').style.webkitAnimation = 'div1v_out 1s ease-in both';

    id('word2').style.webkitAnimation = 'fadein 0.8s 0.2s linear both';

    id('div2v').style.webkitAnimation = 'div2v_in 1s 0.2s linear both';
    id('div2h').style.webkitAnimation = 'div2v_in 1s 0.2s linear both';

    id('yun2').style.webkitAnimation = 'fadeinyun 0.3s 1.4s linear forwards';
    id('yun3').style.webkitAnimation = 'fadeinyun 0.3s 1.2s linear forwards';
    id('yun4').style.webkitAnimation = 'fadeinyun 0.3s 1s linear forwards';
    id('feiji').style.webkitAnimation = 'feiji_in 0.5s 1.2s ease-out forwards';
    id('feijixian').style.webkitAnimation = 'fadein 0.5s 1s linear both';

    timeout3 = setTimeout(show3,5000)
}

function show3()
{
    setImage('3');
    id('yun2').style.webkitAnimation = 'yun_out 0.5s linear both';
    id('yun3').style.webkitAnimation = 'yun_out 0.5s linear both';
    id('yun4').style.webkitAnimation = 'yun_out 0.5s linear both';
    id('feiji').style.webkitAnimation = 'feiji_out 1s 0.5s linear both';
    id('feijixian').style.webkitAnimation = 'fadeout 1s linear both';
    id('word2').style.webkitAnimation = 'fadeout 0.8s 0.3s linear both';

    id('div2v').style.webkitAnimation = 'fadeout 1s linear both';
    id('div2h').style.webkitAnimation = 'fadeout 1s linear both';

    id('word3').style.webkitAnimation = 'word3_in 1s 0.4s linear both';
    id('jiaozi').style.webkitAnimation = 'word3_in 1s 0.4s linear both';

    id('div3h').style.webkitAnimation = 'fadein 1s 0.4s linear both';
    id('div3v').style.webkitAnimation = 'fadein 1s 0.4s linear both';

    timeout4 = setTimeout(show4,5000)
}
function show4()
{
    setImage('4');
    id('word3').style.webkitAnimation = 'word3_out 0.8s linear both';
    id('jiaozi').style.webkitAnimation = 'word3_out 0.8s linear both';

    id('div3h').style.webkitAnimation = 'fadeout 1s linear both';
    id('div3v').style.webkitAnimation = 'fadeout 1s linear both';

    id('word4').style.webkitAnimation = 'word4_in 0.8s 0.3s linear both';
    id('zixingche').style.webkitAnimation = 'zixingche_in 1s 0.3s ease-out forwards';
    id('lupai').style.webkitAnimation = 'lupai_in 1s 0.3s ease-out forwards';

    id('div4h').style.webkitAnimation = 'div1h_in 4s cubic-bezier(.28,.41,.81,.99) both';
    id('div4v').style.webkitAnimation = 'div1v_in 4s linear both';


    timeout5 = setTimeout(show5,5000)
}
function show5()
{
    setImage('5');
    id('div4h').style.webkitAnimation = 'div1h_out 1s ease-in both';
    id('div4v').style.webkitAnimation = 'div1v_out 1s ease-in both';
    id('word4').style.webkitAnimation = 'word4_out 1s linear both';
    id('zixingche').style.webkitAnimation = 'zixingche_out 1s linear both';
    id('lupai').style.webkitAnimation = 'lupai_out 1s linear both';

    id('aixin1').style.webkitAnimation = 'aixin1 1s 0.5s linear both';
    id('aixin2').style.webkitAnimation = 'aixin2 1s 0.5s linear both';
    id('word5').style.webkitAnimation = 'word5_in 1s 0.5s ease-out both';

    id('div5v').style.webkitAnimation = 'div5_in 1s 0.5s ease-out both';
    id('div5h').style.webkitAnimation = 'div5_in 1s 0.5s ease-out both';

    timeout6 = setTimeout(show1_1,5000)
}
function show1_1()
{
    setImage('1');
    id('div5v').style.webkitAnimation = 'div5_out 1s ease-out both';
    id('div5h').style.webkitAnimation = 'div5_out 1s ease-out both';

    id('aixin1').style.webkitAnimation = 'aixin1_out 1s linear both';
    id('aixin2').style.webkitAnimation = 'aixin2_out 1s linear both';

    id('word5').style.webkitAnimation = 'word5_out 1s linear both';

    id('word1').style.webkitAnimation = 'word1_in 0.8s linear both';
    id('huochediv').style.webkitAnimation = 'huoche_in 1s ease-out both';

    id('div1h').style.webkitAnimation = 'div1h_in 4s cubic-bezier(.28,.41,.81,.99) both';
    id('div1v').style.webkitAnimation = 'div1v_in 4s linear both';
    id('div2h').style.webkitAnimation = '';
    id('div3v').style.webkitAnimation = '';
    id('div4v').style.webkitAnimation = '';
    id('div2v').style.webkitAnimation = '';
    id('div3h').style.webkitAnimation = '';
    id('div4h').style.webkitAnimation = '';

    timeout7 = setTimeout(show2,5000)
}
var divwidth = {'1h':550,'1v':490,'2h':500,'2v':500,'3h':500,'3v':500,'4h':550,'4v':490,'5h':530,'5v':530};
var divheight = {'1h':400,'1v':750,'2h':350,'2v':780,'3h':350,'3v':780,'4h':400,'4v':750,'5h':353,'5v':800};
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
    image_url_index++;
    if(image_url_index == Onload_imgs_url.length)
        image_url_index = 0;
    
    console.log(image_url_index);
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
    id('line1').style.webkitAnimation = '';
    id('line2').style.webkitAnimation = '';
    id('line3').style.webkitAnimation = '';
    id('line4').style.webkitAnimation = '';
    id('yuan').style.webkitAnimation = '';
    id('yuan1').style.webkitAnimation = '';
    id('pagetitle').style.webkitAnimation = '';

    id('div1h').style.webkitAnimation = '';
    id('div1v').style.webkitAnimation = '';
    id('div2h').style.webkitAnimation = '';
    id('div2v').style.webkitAnimation = '';
    id('div3h').style.webkitAnimation = '';
    id('div3v').style.webkitAnimation = '';
    id('div4h').style.webkitAnimation = '';
    id('div4v').style.webkitAnimation = '';
    id('div5h').style.webkitAnimation = '';
    id('div5v').style.webkitAnimation = '';
    id('div1h').style.display = 'none';
    id('div1v').style.display = 'none';
    id('div2h').style.display = 'none';
    id('div2v').style.display = 'none';
    id('div3h').style.display = 'none';
    id('div3v').style.display = 'none';
    id('div4h').style.display = 'none';
    id('div4v').style.display = 'none';
    id('div5h').style.display = 'none';
    id('div5v').style.display = 'none';
    id('word1').style.webkitAnimation = '';
    id('word2').style.webkitAnimation = '';
    id('word3').style.webkitAnimation = '';
    id('word4').style.webkitAnimation = '';
    id('word5').style.webkitAnimation = '';
    id('aixin1').style.webkitAnimation = '';
    id('aixin2').style.webkitAnimation = '';
    id('huochediv').style.webkitAnimation = '';
    id('zixingche').style.webkitAnimation = '';
    id('lupai').style.webkitAnimation = '';
    id('jiaozi').style.webkitAnimation = '';
    id('feiji').style.webkitAnimation = '';
    id('feijixian').style.webkitAnimation = '';

    clearTimeout(timeout0);
    clearTimeout(timeout1);
    clearTimeout(timeout2);
    clearTimeout(timeout3);
    clearTimeout(timeout4);
    clearTimeout(timeout5);
    clearTimeout(timeout6);
    clearTimeout(timeout7);
}
</script>