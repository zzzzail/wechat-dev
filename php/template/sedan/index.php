<?
$p=$_WEITE['web_pic_url']."sedan/";
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
#container>div,#container>img
{
    position: absolute;
}
#deng
{
    left: 205px;
    top: -134px;
}
#guang1
{
    left: 156px;
    top: 108px;
    -webkit-animation: guang1 4s linear infinite;
}
#guang2
{
    left: 9px;
    top: 94px;
    -webkit-animation: guang2 4s linear infinite;
}
#kuang1
{
    left: 45px;
    top: 271px;
    width: 410px;
    height: 179px;
    background-color: rgba(255,255,255,0.5);
    opacity: 0;
}
#kuang2
{
    left: 65px;
    top: 303px;
    width: 369px;
    height: 115px;
    background-color: rgba(255,255,255,0.5);
    opacity: 0;
}
.divv
{
    width: 440px;
    height: 600px;
    top: 101px;
    left: 30px;
    background-color: #fff;
    -webkit-transform-origin: 50% 42%;
    overflow: hidden;
    opacity: 0;
}
.divh
{
    width: 440px;
    height: 310px;
    top: 230px;
    left: 30px;
    background-color: #fff;
    -webkit-transform-origin: 50% 42%;
    overflow: hidden;
    opacity: 0;
}
.boxh
{
    position: absolute;
    left: 10px;
    top: 10px;
    width: 420px;
    height: 290px;
    overflow: hidden;
    opacity: 0;
}
.boxv
{
    position: absolute;
    left: 10px;
    top: 10px;
    width: 420px;
    height: 580px;
    overflow: hidden;
    opacity: 0;
}
</style>
<style type="text/css">
@-webkit-keyframes guang1
{
    0%  {opacity: 0.3}
    15% {opacity: 1}
    85% {opacity: 1}
    100%{opacity: 0.3}
}
@-webkit-keyframes guang2
{
    0%  {opacity: 0}
    10% {opacity: 0.3}
    30% {opacity: 1}
    50% {opacity: 0.3}
    70% {opacity: 1}
    90% {opacity: 0.3}
    100%{opacity: 0}
}
@-webkit-keyframes kuang1
{
    0%  {opacity: 0;-webkit-transform: scale(0.2,0.02);}
    20% {opacity: 1;-webkit-transform: scale(1,0.02);}
    40% {opacity: 1;-webkit-transform: scale(1,1);}
    60% {opacity: 1;-webkit-transform: scale(1,0.5);}
    90% {opacity: 0;-webkit-transform: scale(0.3,0.15);}
    100%{opacity: 0;}
}
@-webkit-keyframes kuang2
{
    0%  {opacity: 0;-webkit-transform: scale(1,0.02);}
    20% {opacity: 0;-webkit-transform: scale(1,0.02);}
    30% {opacity: 1;-webkit-transform: scale(1,0.3);}
    60% {opacity: 1;-webkit-transform: scale(1,2);}
    80% {opacity: 0.7;-webkit-transform: scale(0.8,1.2);}
    100%{opacity: 0;-webkit-transform: scale(0.6,0.9);}
}
@-webkit-keyframes title_in
{
    0%  {opacity: 0}
    40% {opacity: 0;-webkit-transform: scale(1);}
    70% {opacity: 0.6;-webkit-transform: scale(1.05);}
    100%{opacity: 1;-webkit-transform: scale(1);}
}
@-webkit-keyframes kuang2_out
{
    0%  {opacity: 0;-webkit-transform: scale(0.5,0.5);}
    20% {opacity: 1;-webkit-transform: scale(1,2);}
    30% {opacity: 1;-webkit-transform: scale(1.05,1.9);}
    40% {opacity: 1;-webkit-transform: scale(1.05,1.5);}
    50% {opacity: 1;-webkit-transform: scale(1,0.4);}
    60% {opacity: 1;-webkit-transform: scale(1,0.4);}
    70% {opacity: 1;-webkit-transform: scale(1,0.04);}
    90% {opacity: 0;-webkit-transform: scale(0.3,0.02);}
    100%{opacity: 0}
}
@-webkit-keyframes title_out
{
    0%  {opacity: 1;-webkit-transform: scale(1);}
    10% {opacity: 1;-webkit-transform: scale(1.05);}
    30% {opacity: 0;-webkit-transform: scale(1);}
    100%{opacity: 0;}
}
@-webkit-keyframes kuang1_out
{
    0%  {opacity: 0}
    10% {opacity: 0;-webkit-transform: scale(0.6,0.2);}
    20% {opacity: 1;-webkit-transform: scale(1.05,0.4);}
    30% {opacity: 1;-webkit-transform: scale(1.05,0.65);}
    40% {opacity: 1;-webkit-transform: scale(1.05,0.95);}
    50% {opacity: 1;-webkit-transform: scale(1,1.1);}
    60% {opacity: 1;-webkit-transform: scale(1,0.7);}
    70% {opacity: 1;-webkit-transform: scale(0.9,0.03);}
    90% {opacity: 0;-webkit-transform: scale(0.3,0.02);}
    100%{opacity: 0}
}
@-webkit-keyframes div1h_in
{
    0%  {opacity: 0;-webkit-transform: scale(1.05,0.01);}
    35% {opacity: 0;-webkit-transform: scale(1.05,0.01);}
    40% {opacity: 1;-webkit-transform: scale(1.05,0.01);}
    80% {opacity: 1;-webkit-transform: scale(1,1);}
    100%{opacity: 1;-webkit-transform: scale(1,1);}
}
@-webkit-keyframes div1v_in
{
    0%  {opacity: 0;-webkit-transform: scale(1.05,0.01);}
    35% {opacity: 0;-webkit-transform: scale(1.05,0.01);}
    40% {opacity: 1;-webkit-transform: scale(1.05,0.01);}
    90% {opacity: 1;-webkit-transform: scale(0.97,1.03);-webkit-animation-function-timing: ease-out;}
    100% {opacity: 1;-webkit-transform: scale(1,1);}
    /*100%{opacity: 1;-webkit-transform: scale(1,1);}*/
}
@-webkit-keyframes div1v_out
{
    0% {opacity: 1;-webkit-transform: scale(1,1);}
    10%{opacity: 1;-webkit-transform: scale(0.97,1.03);}
    30%{opacity: 1;-webkit-transform: scale(1.05,0.01);}
    35% {opacity: 0;-webkit-transform: scale(1.05,0.01);}
    100%{opacity: 0}
}
@-webkit-keyframes div1h_out
{
    0% {opacity: 1;-webkit-transform: scale(1,1);}
    10%{opacity: 1;-webkit-transform: scale(0.97,1.03);}
    30%{opacity: 1;-webkit-transform: scale(1.05,0.01);}
    35% {opacity: 0;-webkit-transform: scale(1.05,0.01);}
    100%{opacity: 0}
}
@-webkit-keyframes box_out
{
    0% {opacity: 1}
    30%{opacity: 0}
    100%{opacity: 0}
}
@-webkit-keyframes box_in
{
    0%  {opacity: 0}
    60% {opacity: 0}
    100%{opacity: 1}
}
@-webkit-keyframes shan
{
    0%  {opacity: 0;-webkit-transform: scale(0) rotate(0deg);}
    14% {opacity: 1;-webkit-transform: scale(1) rotate(360deg);}
    28% {opacity: 0;-webkit-transform: scale(0) rotate(720deg);}
    100%{opacity: 0;}
}
@-webkit-keyframes xuehua
{
    0%  {opacity: 0;-webkit-transform: translate(0px,0px) rotate(0deg);}
    16% {opacity: 1;-webkit-transform: translate(0px,30px) rotate(15deg);}
    60%{opacity: 0;-webkit-transform: translate(0px,120px) rotate(60deg);}
    100%{opacity: 0;}
}
@-webkit-keyframes word_ani
{
    0%  {opacity: 0}
    8%  {opacity: 0}
    10%  {opacity: 1}
    20% {opacity: 1}
    22% {opacity: 0}
    24% {opacity: 0}
    26% {opacity: 1}
    28% {opacity: 1}
    30% {opacity: 0}
    32% {opacity: 0}
    34% {opacity: 1}
    36% {opacity: 1}
    38% {opacity: 0}
    40% {opacity: 0}
    42% {opacity: 1}
    44% {opacity: 1}
    46% {opacity: 0}
    48% {opacity: 1}
    50% {opacity: 1}
    80% {opacity: 1}
    82% {opacity: 0}
    100%{opacity: 0}
}
</style>
<div id='container'>
    <img src='<?=$p?>images/bg.jpg'>

    <div id='pagetitle' style='position:absolute;width:370px;height:227px;top:247px;left:65px;font-size:40px;color:#fff;overflow:hidden;text-shadow:1px 5px 4px rgba(0, 0, 0, 0.2);'>
        <div style='position:absolute;width:370px;height:227px;top:0px;left:0px;overflow:hidden;'>
            <div style='position:absolute;width:370px;height:227px;display:table;overflow:hidden;'>
                <div id='titlecontent' style='width:370px;height:227px;vertical-align:middle;display:table-cell;text-align:center;'></div>
            </div>
        </div>
    </div>

    <div id='div1h' class='divh'>
        <div id='box1h' class='boxh'>
            <img id='img1h' style='position:absolute' src='<?=$p?>images/1.jpg'>
        </div>
    </div>
    <div id='div1v' class='divv'>
        <div id='box1v' class='boxv'>
            <img id='img1v' style='position:absolute' src='<?=$p?>images/1.jpg'>
        </div>
    </div>

    <div id='div2h' class='divh'>
        <div id='box2h' class='boxh'>
            <img id='img2h' style='position:absolute' src='<?=$p?>images/1.jpg'>
        </div>
    </div>
    <div id='div2v' class='divv'>
        <div id='box2v' class='boxv'>
            <img id='img2v' style='position:absolute' src='<?=$p?>images/1.jpg'>
        </div>
    </div>

    <div id='kuang1'></div>
    <div id='kuang2'></div>

    <img id='deng' src='<?=$p?>images/deng.png'>
    <img src='<?=$p?>images/up.png'>
    <img id='guang1' src='<?=$p?>images/guang1.png'>
    <img id='guang2' src='<?=$p?>images/guang2.png'>

    <img src='<?=$p?>images/01.png' style='left:87px;top:702px;'>
    <img id='word2' src='<?=$p?>images/02.png' style='left:87px;top:702px;'>

    <img src='<?=$p?>images/shan.png' style='left:76px;top:-21px;opacity:0;-webkit-animation: shan 7s 2s linear infinite'>
    <img src='<?=$p?>images/shan.png' style='left:129px;top:50px;opacity:0;width:50px;-webkit-animation: shan 7s 1s linear infinite'>
    <img src='<?=$p?>images/shan.png' style='left:378px;top:-9px;opacity:0;width:60px;-webkit-animation: shan 7s linear infinite'>
    <img src='<?=$p?>images/shan.png' style='left:54px;top:667px;width:70px;opacity:0;-webkit-animation: shan 7s 3s linear infinite'>
    <img src='<?=$p?>images/shan.png' style='left:221px;top:697px;width:60px;opacity:0;-webkit-animation: shan 7s 5s linear infinite'>
    <img src='<?=$p?>images/shan.png' style='left:372px;top:701px;width:50px;opacity:0;-webkit-animation: shan 7s 4s linear infinite'>

    <img src='<?=$p?>images/xue.png' style='left:348px;top:79px;-webkit-animation: xuehua 5s linear infinite;opacity:0;'>
    <img src='<?=$p?>images/xue.png' style='left:33px;top:382px;-webkit-animation: xuehua 5s 1.2s linear infinite;opacity:0;'>
    <img src='<?=$p?>images/xue.png' style='left:380px;top:536px;-webkit-animation: xuehua 5s 2.5s linear infinite;opacity:0;'>
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
var delaytime=5000;
function id(name)
{
    return document.getElementById(name);
}
function load_images()
{
    kuang1 = id('kuang1');
    kuang2 = id('kuang2');
    div1v = id('div1v');
    div1h = id('div1h');
    div2v = id('div2v');
    div2h = id('div2h');
    box1v = id('box1v');
    box1h = id('box1h');
    box2v = id('box2v');
    box2h = id('box2h');
    img1v = id('img1v');
    img1h = id('img1h');
    img2v = id('img2v');
    img2h = id('img2h');
    word2 = id('word2');

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
function id (name) 
{
    return document.getElementById(name);
}

function showtitle () 
{
    kuang1.style.webkitAnimation = 'kuang1 1s linear both';
    kuang2.style.webkitAnimation = 'kuang2 1s linear both';
    id('titlecontent').innerHTML = e_desc;
    id('pagetitle').style.webkitAnimation = 'title_in 1s linear both';

}
function distitle()
{
    setImage('1');
    word2.style.webkitAnimation = '';
    kuang1.style.webkitAnimation = 'kuang1_out 1s linear both';
    kuang2.style.webkitAnimation = 'kuang2_out 1s linear both';
    id('pagetitle').style.webkitAnimation = 'title_out 1s linear both';
    div1v.style.webkitAnimation = 'div1v_in 1s linear both';
    box1v.style.webkitAnimation = 'box_in 1s linear both';
    div1h.style.webkitAnimation = 'div1h_in 1s linear both';
    box1h.style.webkitAnimation = 'box_in 1s linear both';
    // id('div1h').style.webkitAnimation = 'div1h_in 1s linear both';
    timeout1 = setTimeout(function()
    {
        word2.style.webkitAnimation = 'word_ani 3s linear both';
    },1000)

    timeout2 = setTimeout(clearshow,3000);
    timeout3 = setTimeout(show2,4000);
}
function clearshow () 
{
    kuang1.style.webkitAnimation = '';
    kuang2.style.webkitAnimation = '';
    
}
function show2 () 
{
    setImage('2');
    word2.style.webkitAnimation = '';
    div1v.style.webkitAnimation = 'div1v_out 1.2s linear both';
    box1v.style.webkitAnimation = 'box_out 1.2s linear both';
    div1h.style.webkitAnimation = 'div1h_out 1.2s linear both';
    box1h.style.webkitAnimation = 'box_out 1.2s linear both';
    kuang1.style.webkitAnimation = 'kuang1_out 1.2s linear both';
    kuang2.style.webkitAnimation = 'kuang2_out 1.2s linear both';
    div2h.style.webkitAnimation = 'div1h_in 1.2s linear both';
    box2h.style.webkitAnimation = 'box_in 1.2s linear both';
    div2v.style.webkitAnimation = 'div1v_in 1.2s linear both';
    box2v.style.webkitAnimation = 'box_in 1.2s linear both';
    timeout4 = setTimeout(function()
    {
        word2.style.webkitAnimation = 'word_ani 3s linear both';
    },1000)

    timeout5 = setTimeout(clearshow,2000);
    timeout6 = setTimeout(show1,4000);
}
function show1 () 
{
    setImage('1');
    word2.style.webkitAnimation = '';
    div2h.style.webkitAnimation = 'div1h_out 1.2s linear both';
    box2h.style.webkitAnimation = 'box_out 1.2s linear both';
    div2v.style.webkitAnimation = 'div1v_out 1.2s linear both';
    box2v.style.webkitAnimation = 'box_out 1.2s linear both';
    kuang1.style.webkitAnimation = 'kuang1_out 1.2s linear both';
    kuang2.style.webkitAnimation = 'kuang2_out 1.2s linear both';
    div1v.style.webkitAnimation = 'div1v_in 1.2s linear both';
    box1v.style.webkitAnimation = 'box_in 1.2s linear both';
    div1h.style.webkitAnimation = 'div1h_in 1.2s linear both';
    box1h.style.webkitAnimation = 'box_in 1.2s linear both';
    timeout7 = setTimeout(function()
    {
        word2.style.webkitAnimation = 'word_ani 3s linear both';
    },1000)

    timeout8 = setTimeout(clearshow,2000);
    timeout9 = setTimeout(show2,4000);
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
    var width = 420;

    if(img_bili > 1)
    {
        divname = idname + 'h';
        div = id('div'+idname+'h');
        div1 = id('div'+idname+'v');
        height = 290;
    }
    else
    {
        divname = idname + 'v';
        div = id('div'+idname+'v');
        div1 = id('div'+idname+'h');
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
    kuang1.style.webkitAnimation = '';
    kuang2.style.webkitAnimation = '';
    box1h.style.webkitAnimation = '';
    box1v.style.webkitAnimation = '';
    box2h.style.webkitAnimation = '';
    box2v.style.webkitAnimation = '';
    div1h.style.webkitAnimation = '';
    div1v.style.webkitAnimation = '';
    div2h.style.webkitAnimation = '';
    div2v.style.webkitAnimation = '';
    div1h.style.display = 'none';
    div1v.style.display = 'none';
    div2h.style.display = 'none';
    div2v.style.display = 'none';
    word2.style.webkitAnimation = '';
    id('titlecontent').innerHTML = '';
    id('pagetitle').style.webkitAnimation = '';

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
}
</script>