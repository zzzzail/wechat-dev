<?
$p=$_WEITE['web_pic_url']."wennuanshiguang/";
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
#container >img,#container > div
{
    position: absolute;
}
#pagetitle
{
    width: 456px;
    height: 254px;
    left: 24px;
    top: 199px;
    opacity: 0;
}
#flower1 > img,#flower2> img,#hudie>img
{
    position: absolute;
}
#hudie
{
    left: 527px;
    top: 600px;
    -webkit-transform: translate(0px,0px) rotate(45deg);
    width: 91px;
    height: 141px;
}
.wordbg
{
    position: absolute;
    background-color: rgba(255,255,255,0.45);
    height: 163px;
    width: 500px;
    left: -94px;
    top: 40px;
    opacity: 0;
}
.wordbg1
{
    position: absolute;
    background-color: rgba(255,255,255,0.2);
    height: 163px;
    width: 500px;
    left: -54px;
    top: 80px;
    opacity: 0;
}
.wordbg_2
{
    position: absolute;
    background-color: rgba(255,255,255,0.45);
    height: 102px;
    width: 500px;
    left: -94px;
    top: 62px;
    opacity: 0;
}
.wordbg1_2
{
    position: absolute;
    background-color: rgba(255,255,255,0.2);
    height: 102px;
    width: 500px;
    left: -64px;
    top: 102px;
    opacity: 0;
}
.wordbg_1
{
    position: absolute;
    background-color: rgba(255,255,255,0.45);
    height: 74px;
    width: 500px;
    left: -94px;
    top: 84px;
    opacity: 0;
}
.wordbg1_1
{
    position: absolute;
    background-color: rgba(255,255,255,0.2);
    height: 74px;
    width: 500px;
    left: -64px;
    top: 120px;
    opacity: 0;
}
#div1
{
    width: 438px;
    height: 438px;
    left: 30px;
    top: 165px;
    display: none;
}
#div4
{
    width: 438px;
    height: 438px;
    left: 30px;
    top: 165px;
    display: none;
}
[id^='div'] >img,[id^='div'] > div
{
    position: absolute;
}
.box1
{
    border-radius:189px;
    width:378px;
    height:378px;
    left:29px;
    top:34px;
}
#div2v
{
    width: 391px;
    height: 564px;
    left: 57px;
    top: 113px;
    display: none;
}
.box2v
{
    width: 335px;
    height: 508px;
    left: 28px;
    top: 30px;
}
#div2h
{
    width: 477px;
    height: 335px;
    left: 18px;
    top: 205px;
    display: none;
}
.box2h
{
    position: absolute;
    left: 27px;
    top: 22px;
    width: 414px;
    height: 277px;
}
#div3v
{
    width: 391px;
    height: 564px;
    left: 57px;
    top: 113px;
    display: none;
}
#div3h
{
    width: 477px;
    height: 335px;
    left: 18px;
    top: 205px;
    display: none;
}
</style>
<style type="text/css">
@-webkit-keyframes rotateright
{
    from  {-webkit-transform: rotate(0deg);}
    to    {-webkit-transform: rotate(80deg);}
}
@-webkit-keyframes rotate2
{
    from  {-webkit-transform: rotate(0deg);}
    to    {-webkit-transform: rotate(-30deg);}
}
@-webkit-keyframes rotate3
{
    from  {-webkit-transform: rotate(0deg);}
    to    {-webkit-transform: rotate(10deg);}
}
@-webkit-keyframes rotate4
{
    from  {-webkit-transform: rotate(0deg);}
    to    {-webkit-transform: rotate(360deg);}
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
@-webkit-keyframes fadeinright
{
    from  {opacity: 0;-webkit-transform: translate(-15px,0px);}
    to    {opacity: 1;-webkit-transform: translate(0px,0px);}
}
@-webkit-keyframes in_scale
{
    from  {-webkit-transform: scale(0.1);}
    to    {-webkit-transform: scale(1);}
}
@-webkit-keyframes chibang
{
    0%  {-webkit-transform: scale(1,1);}
    8%  {-webkit-transform: scale(1,0.1);}
    24% {-webkit-transform: scale(1,1);}
    32% {-webkit-transform: scale(1,0.1);}
    48% {-webkit-transform: scale(1,1);}
    72% {-webkit-transform: scale(1,0.1);}
    100%{-webkit-transform: scale(1,1);}
}
@-webkit-keyframes chibang1
{
    0%  {-webkit-transform: scale(1,-1);}
    8%  {-webkit-transform: scale(1,-0.1);}
    24% {-webkit-transform: scale(1,-1);}
    32% {-webkit-transform: scale(1,-0.1);}
    48% {-webkit-transform: scale(1,-1);}
    72% {-webkit-transform: scale(1,-0.1);}
    100%{-webkit-transform: scale(1,-1);}
}
@-webkit-keyframes hudie_fly
{
    0%   {-webkit-transform: translate(0px,0px) rotate(50deg);}
    55%  {-webkit-transform: translate(-320px,-270px) rotate(45deg)}
    100% {-webkit-transform: translate(-635px,-503px) rotate(15deg);}

}
@-webkit-keyframes out_title
{
    from  {-webkit-transform: translate(0px,0px) scale(1,1);opacity: 1}
    to    {-webkit-transform: translate(-127px,350px) scale(.6,.6);opacity: 1}
}
@-webkit-keyframes change_title_color
{
    from  {color: #FF9900;}
    to    {color: #8E4A00;}
}
@-webkit-keyframes in_worddi
{
    from  {opacity: 0;-webkit-transform: translate(-30px,0px);}
    to    {opacity: 1;-webkit-transform: translate(0px,0px);}
}
@-webkit-keyframes in_div1
{
    from {-webkit-transform: translate(500px,0px) rotate(90deg);}
    to   {-webkit-transform: translate(0px,0px) rotate(0deg);}
}
@-webkit-keyframes out_div1
{
    from  {-webkit-transform: translate(0px,0px) rotate(0deg);}
    to    {-webkit-transform: translate(550px,0px) rotate(90deg);}
}
@-webkit-keyframes flower1_to2
{
    from  {-webkit-transform: translate(0px,0px) scale(1);}
    to    {-webkit-transform: translate(13px,-54px) scale(1);}
}
@-webkit-keyframes flower2_to2
{
    from  {-webkit-transform: translate(0px,0px) scale(1);}
    to    {-webkit-transform: translate(7px,61px) scale(1);}
}
@-webkit-keyframes in_div2v
{
    from  {-webkit-transform: translate(-600px,0px);}
    to    {-webkit-transform: translate(0px,0px);}
}
@-webkit-keyframes out_div2v
{
    to    {-webkit-transform: translate(-600px,0px);}
    from  {-webkit-transform: translate(0px,0px);}
}
@-webkit-keyframes flower1_to3
{
    0%   {-webkit-transform: translate(13px,-54px) scale(1);}
    50%  {-webkit-transform: translate(-27px,-80px) scale(1);}
    100% {-webkit-transform: translate(13px,-54px) scale(1);}
}
@-webkit-keyframes flower2_to3
{
    from  {-webkit-transform: translate(7px,61px) scale(1);}
    to    {-webkit-transform: translate(-409px,565px) scale(1);}
}
@-webkit-keyframes flower2_to3h
{
    from  {-webkit-transform: translate(7px,61px) scale(1);}
    to    {-webkit-transform: translate(-409px,465px) scale(1);}
}
@-webkit-keyframes in_div3v
{
    from  {-webkit-transform: translate(444px,-586px);}
    to    {-webkit-transform: translate(0px,0px);}
}
@-webkit-keyframes in_div3h
{
    from  {-webkit-transform: translate(485px,-438px);}
    to    {-webkit-transform: translate(0px,0px);}
}
@-webkit-keyframes out_div3v
{
    to    {-webkit-transform: translate(444px,-586px);}
    from  {-webkit-transform: translate(0px,0px);}
}
@-webkit-keyframes out_div3h
{
    to    {-webkit-transform: translate(485px,-438px);}
    from  {-webkit-transform: translate(0px,0px);}
}
@-webkit-keyframes in_div4
{
    from  {-webkit-transform: translate(-500px,0px);}
    to    {-webkit-transform: translate(0px,0px);}
}
@-webkit-keyframes out_div4
{
    from  {-webkit-transform: translate(0px,0px);opacity: 1}
    to    {-webkit-transform: translate(0px,-300px);opacity: 0}
}
@-webkit-keyframes flower1_to4
{
    from  {-webkit-transform: translate(13px,-54px) scale(1);}
    to    {-webkit-transform: translate(0px,0px) scale(1);}
}
@-webkit-keyframes flower2h_to4
{
    from  {-webkit-transform: translate(-409px,465px) scale(1);}
    to    {-webkit-transform: translate(-2px,543px) scale(1);;}
}
@-webkit-keyframes flower2_to4
{
    from  {-webkit-transform: translate(-409px,565px) scale(1);}
    to    {-webkit-transform: translate(-2px,543px) scale(1);}
}
@-webkit-keyframes flower2_to1
{
    from  {-webkit-transform: translate(-2px,543px) scale(1);}
    to    {-webkit-transform: translate(0px,0px) scale(1);}
}
@-webkit-keyframes rotate_kuang
{
    from  {-webkit-transform: rotate(0deg);}
    to    {-webkit-transform: rotate(360deg);}
}
</style>

<div id='container'>
    <img src='<?=$p?>images/bg.jpg'>
   

    <div id='div1'>
        <div id='img1' class='box1'></div>
        <img id='kuang1' src='<?=$p?>images/ying.png'>
        <img id='ying1' src='<?=$p?>images/yuankuang.png'>
    </div>
    
    <div id='div2v'>
        <div id='img2v' class='box2v'></div>
        <img src='<?=$p?>images/ying1.png'>
        <img src='<?=$p?>images/kuang01.png'>
    </div>
    <div id='div2h'>
        <div id='img2h' class='box2h'></div>
        <img src='<?=$p?>images/ying1.png' style='-webkit-transform: rotate(-90deg);left:71px;top:-69px;width:335px;'>
        <img src='<?=$p?>images/kuang01.png' style='-webkit-transform: rotate(-90deg);left:71px;top:-69px;width:320px;'>
    </div>

    <div id='div3v'>
        <div id='img3v' class='box2v'></div>
        <img src='<?=$p?>images/ying1.png'>
        <img src='<?=$p?>images/kuang01.png'>
    </div>
    <div id='div3h'>
        <div id='img3h' class='box2h'></div>
        <img src='<?=$p?>images/ying1.png' style='-webkit-transform: rotate(-90deg);left:71px;top:-69px;width:335px;'>
        <img src='<?=$p?>images/kuang01.png' style='-webkit-transform: rotate(-90deg);left:71px;top:-69px;width:320px;'>
    </div>

    <div id='div4'>
        <div id='img4' class='box1'></div>
        <img id='kuang4' src='<?=$p?>images/ying.png' style='-webkit-animation: rotate_kuang 15s linear infinite'>
        <img id='ying4' src='<?=$p?>images/yuankuang.png' style='-webkit-animation: rotate_kuang 15s linear infinite'>
    </div>

    <div id='flower1' style='width:131px;height:135px;left:21px;top:73px;-webkit-transform: scale(0.1)'>
        <img src='<?=$p?>images/003.png' style='left:-2px;-webkit-animation: rotate3 2s linear infinite alternate;'>
        <img src='<?=$p?>images/002.png' style='left:5px;top:3px;-webkit-animation: rotateleft 2s linear infinite alternate'>
        <img src='<?=$p?>images/001.png' style='left:10px;top:7px;-webkit-animation: rotateright 3s ease-in-out infinite alternate'>
    </div>

    <div id='flower2' style='width:113px;height:116px;left:376px;top:6px;-webkit-transform: scale(0.1)'>
        <img src='<?=$p?>images/006.png' style='left:0px;top:0px;-webkit-animation: rotate4 15s linear infinite;-webkit-transform-origin: 52% 46%'>
        <img src='<?=$p?>images/002.png' style='left:10px;top:3px;width:100px;-webkit-animation: rotate4 12s linear infinite;-webkit-transform-origin: 50% 52%'>
        <img src='<?=$p?>images/004.png' style='left:21px;top:12px;width:80px;-webkit-animation: rotate4 7s linear infinite;-webkit-transform-origin: 49% 54%'>
    </div>

    <div id='pagetitle'>
        <img id='titledi' src='<?=$p?>images/biaotidi.png'>
        <div id='wordbg'>
        </div>
        <div id='wordbg1'>
        </div>
        <div id='pagecontent' style='position:absolute;width:366px;height:163px;top:40px;left:40px;overflow:hidden;'>
            <div style='position:absolute;width:366px;height:163px;display:table;overflow:hidden;'>
                <div id='titlecontent' style='width:366px;height:163px;vertical-align:middle;display:table-cell;text-align:center;font-size:35px;line-height:50px;color:#ff9900;font-weight:blod;'></div>
            </div>
        </div>
    </div>
    <img src='<?=$p?>images/jiao.png' style='left:-116px;top:-192px;'>
    <img src='<?=$p?>images/jiao.png' style='left:332px;top:654px;'>
    
    <div id='hudie'>
        <img src='<?=$p?>images/yingzi.png' style='-webkit-animation: chibang 2s linear infinite;left:25px;top:18px;opacity:0.7;'>
        <img src='<?=$p?>images/chibang.png' style='-webkit-transform-origin: 50% 100%;-webkit-animation: chibang 2s linear infinite'>
        <img src='<?=$p?>images/shenzi.png' style='left:-9px;top:43px'>
        <img src='<?=$p?>images/chibang.png' style='-webkit-transform-origin: 50% 100%;-webkit-transform: scale(1,-1);-webkit-animation: chibang1 2s linear infinite'>
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
var delaytime=5000;
var type_before = 0;
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
        img.onerror = image_onerror;
        img.onload=image_onload;
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
    if((have_num >= 10 || slider_images_url.length == (have_num+error_num)) && canshow == true)
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
    var img=event.target;
    var index = img.index;
    if(index < 18)
    {
        have_num++;
    }
    Onload_imgs_url[index] = img.src;
    image_size_height[index] = img.height;
    image_size_width[index] = img.width;

    if((have_num +error_num >= 10 || slider_images_url.length == (have_num+error_num)) && canshow == true)
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
var linenum = 1;
function id(name)
{
    return document.getElementById(name);
}
function showtitle()
{
    id('titlecontent').innerHTML = e_desc;
    id('pagetitle').style.webkitAnimation = 'fadein 0.5s linear both';
    id('pagecontent').style.webkitAnimation = 'fadeinright 0.6s 0.5s ease-out both';
    id('flower1').style.webkitAnimation = 'in_scale 0.8s linear both';
    id('flower2').style.webkitAnimation = 'in_scale 1s linear both';
    id('hudie').style.webkitAnimation = 'hudie_fly 8s linear both';

    if(e_desc.length>0)
    {
        linenum = e_desc.length/10;
        if(linenum > 3)
        linenum = 3;        
    }
}
function distitle()
{
    if(linenum == 3)
    {
        id('wordbg').className = 'wordbg';
        id('wordbg1').className = 'wordbg1';
    }
    else if(linenum == 2)
    {
        id('wordbg').className = 'wordbg_2';
        id('wordbg1').className = 'wordbg1_2';
    }
    else
    {
        id('wordbg').className = 'wordbg_1';
        id('wordbg1').className = 'wordbg1_1';
    }

    id('pagetitle').style.webkitAnimation = 'out_title 1.7s 0.2s linear both';
    id('wordbg').style.webkitAnimation = 'in_worddi 1.7s 0.2s linear both';
    id('wordbg1').style.webkitAnimation = 'in_worddi 1.7s 0.2s linear both';
    id('titledi').style.webkitAnimation = 'fadeout 1.7s 0.2s linear both';
    id('titlecontent').style.webkitAnimation = 'change_title_color 1.7s 0.2s linear both';

    beginshow();
}

function show1()
{
    id('div4').style.webkitAnimation = 'out_div4 1.8s linear both';
    id('flower2').style.webkitAnimation = 'flower2_to1 1.8s linear both';

    if(image_url_index == Onload_imgs_url.length)
        image_url_index = 0;
    setImage('1');
    image_url_index++;

    id('div1').style.webkitAnimation = 'in_div1 1s 0.8s linear both';

    id('kuang1').style.webkitAnimation = 'rotate_kuang 15s 1.5s linear infinite';
    id('ying1').style.webkitAnimation = 'rotate_kuang 15s 1.5s linear infinite';
    timeout1 = setTimeout(show2,4000)
}
function beginshow()
{
    if(image_url_index == Onload_imgs_url.length)
        image_url_index = 0;
    setImage('1');
    image_url_index++;

    id('div1').style.webkitAnimation = 'in_div1 1s 0.8s linear both';

    id('kuang1').style.webkitAnimation = 'rotate_kuang 15s 1.5s linear infinite';
    id('ying1').style.webkitAnimation = 'rotate_kuang 15s 1.5s linear infinite';
    timeout2 = setTimeout(show2,4000)
}
function show2()
{
    if(image_url_index == Onload_imgs_url.length)
        image_url_index = 0;
    setImage('2');
    image_url_index++;

    id('div1').style.webkitAnimation = 'out_div1 1.8s linear both';
    id('div2h').style.webkitAnimation = 'in_div2v 1.8s linear both';
    id('div2v').style.webkitAnimation = 'in_div2v 1.8s linear both';

    id('flower1').style.webkitAnimation = 'flower1_to2 1.8s linear both';
    id('flower2').style.webkitAnimation = 'flower2_to2 1.8s linear both';

    timeout3 = setTimeout(show3,4000)
}

function show3()
{
    if(image_url_index == Onload_imgs_url.length)
        image_url_index = 0;
    setImage('3');
    var img_bili = image_size_width[image_url_index]/image_size_height[image_url_index];
    if(img_bili>1)
    {
        type_before = 0;
        id('flower2').style.webkitAnimation = 'flower2_to3h 1.7s 0.1s linear both';
    }
    else
    {
        type_before = 1;
        id('flower2').style.webkitAnimation = 'flower2_to3 1.7s 0.1s linear both';
    }
    
    image_url_index++;

    id('div3h').style.webkitAnimation = 'in_div3h 1.8s linear both';
    id('div3v').style.webkitAnimation = 'in_div3v 1.8s linear both';

    id('flower1').style.webkitAnimation = 'flower1_to3 1.7s 0.1s linear both';

    id('div2h').style.webkitAnimation = 'out_div2v 1.8s linear both';
    id('div2v').style.webkitAnimation = 'out_div2v 1.8s linear both';
    id('hudie').style.webkitAnimation = '';

    timeout4 = setTimeout(show4,4000)
}

function show4()
{
    if(type_before == 0)
    {
        id('flower2').style.webkitAnimation = 'flower2h_to4 2.2s linear both';
    }
    else
    {
        id('flower2').style.webkitAnimation = 'flower2_to4 2.2s linear both';
    }
    id('div3h').style.webkitAnimation = 'out_div3h 2.2s linear both';
    id('div3v').style.webkitAnimation = 'out_div3v 2.2s linear both';

    if(image_url_index == Onload_imgs_url.length)
        image_url_index = 0;
    setImage('4');
    image_url_index++;

    id('div4').style.webkitAnimation = 'in_div4 2.2s linear both';
    id('flower1').style.webkitAnimation = 'flower1_to4 2.2s linear both';
    
    id('hudie').style.webkitAnimation = 'hudie_fly 8s linear both';

    timeout5 = setTimeout(show1,4000)
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
    var img;
    var height;
    var width;

    if(idname == '1' || idname == '4')
    {   
        div = id('div'+idname);
        div.style.display = 'block';
        img = id('img' + idname)
        img.style.backgroundImage =  "url(" +  Onload_imgs_url[image_url_index] + ")";
        if(img_bili>=1)
        {
            img.style.backgroundSize = (378*img_bili) + "px " + 378 + "px";
            img.style.backgroundPosition = '-'+((378*img_bili-378)/2) + "px " + 0 + "px";
        }
        else
        {
            img.style.backgroundSize = 378 + "px " + (378/img_bili) + "px";
            img.style.backgroundPosition = 0 + "px " + '-'+((378/img_bili-378)/2) + "px";
        }
    }
    else
    {
        if(img_bili > 1)
        {
            div = id('div'+idname+'h');
            div1 = id('div'+idname+'v');
            width = 414;
            height = 277;
            img = id('img'+idname + 'h');
        }
        else
        {
            div = id('div'+idname+'v');
            div1 = id('div'+idname+'h');
            width = 335;
            height = 508;
            img = id('img'+idname + 'v');
        }

        div.style.display = 'block';
        div1.style.display = 'none';
        img.style.backgroundImage =  "url(" +  Onload_imgs_url[image_url_index] + ")";

        if(img_bili > (width/height))
        {
            img.style.backgroundSize = (height*img_bili) + "px " + height + "px";
            img.style.backgroundPosition = '-'+((height*img_bili-width)/2) + "px " + 0 + "px";
        }
        else
        {
            img.style.backgroundSize = width + "px " + (width/img_bili) + "px";
            img.style.backgroundPosition = "0px -" + ((width/img_bili-height)/2) + "px";
        }   
    }

    console.log(img.style.backgroundImage);

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

    id('div1').style.display = 'none';
    id('div2v').style.display = 'none';
    id('div2h').style.display = 'none';
    id('div3h').style.display = 'none';
    id('div3v').style.display = 'none';
    id('div4').style.display = 'none';

    id('div1').style.webkitAnimation = '';
    id('div2v').style.webkitAnimation = '';
    id('div2h').style.webkitAnimation = '';
    id('div3h').style.webkitAnimation = '';
    id('div3v').style.webkitAnimation = '';
    id('div4').style.webkitAnimation = '';

    id('flower1').style.webkitAnimation = '';
    id('flower2').style.webkitAnimation = '';

    id('pagetitle').style.webkitAnimation = '';
    id('wordbg').style.webkitAnimation = '';
    id('wordbg1').style.webkitAnimation = '';
    id('titledi').style.webkitAnimation = '';
    id('titlecontent').style.webkitAnimation = '';
    id('kuang1').style.webkitAnimation = '';
    id('ying1').style.webkitAnimation = '';
    id('hudie').style.webkitAnimation = '';
    id('titlecontent').innerHTML = '';
}
</script>


