<?
$p=$_WEITE['web_pic_url']."qixi/";
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
    @-webkit-keyframes guangban
    {
        from {-webkit-transform:scale(1,1);}
        to   {-webkit-transform:scale(0.7,0.7);}
    }
    @-webkit-keyframes cat1
    {
        0%    {-webkit-transform:translate(-4px,0px) rotate(-5deg);}
        32%   {-webkit-transform:translate(-4px,0px) rotate(-5deg);}
        39%   {-webkit-transform:translate(15px,9px) rotate(-5deg);}
        46%   {-webkit-transform:translate(27px,7px) rotate(12deg);}
        50.5% {-webkit-transform:translate(27px,0px) rotate(5deg);}
        55%   {-webkit-transform:translate(27px,2px) rotate(5deg);}
        62%   {-webkit-transform:translate(15px,9px) rotate(-5deg);}
        69%   {-webkit-transform:translate(27px,7px) rotate(12deg);}
        73.5% {-webkit-transform:translate(27px,0px) rotate(5deg);}
        78%   {-webkit-transform:translate(27px,2px) rotate(5deg);}
        85%   {-webkit-transform:translate(15px,9px) rotate(-5deg);}

        100%  {-webkit-transform:translate(-4px,0px) rotate(-5deg);}
    }
    @-webkit-keyframes cat2
    {
        0%    {-webkit-transform:translate(2px,0px);}
        19%   {-webkit-transform:translate(2px,0px);}
        24%   {-webkit-transform:translate(-3px,-1px) rotate(-2deg);}
        29%   {-webkit-transform:translate(2px,0px) rotate(0deg);} 
        40%   {-webkit-transform:translate(2px,0px) rotate(0deg);}
        50.5% {-webkit-transform:translate(8px,2px) rotate(3deg);}
        62%   {-webkit-transform:translate(2px,0px) rotate(0deg);}
        /*63%   {-webkit-transform:translate(2px,0px) rotate(0deg);}*/
        73.5% {-webkit-transform:translate(7px,2px) rotate(3deg);}
        85%   {-webkit-transform:translate(2px,0px) rotate(0deg);}
        100%  {-webkit-transform:translate(2px,0px);}
    }   
    @-webkit-keyframes cat3
    {
        0%    {-webkit-transform:translate(0px,0px);}
        12.5% {-webkit-transform:translate(0px,0px);}
        13.7% {-webkit-transform:translate(0px,0px) rotate(8deg);}
        14.9% {-webkit-transform:translate(0px,0px) rotate(0deg);}
        16.1% {-webkit-transform:translate(0px,0px) rotate(8deg);}
        17.3% {-webkit-transform:translate(0px,0px) rotate(0deg);}
        100%  {-webkit-transform:translate(0px,0px);}
    }
    @-webkit-keyframes cat4
    {
        0%    {-webkit-transform:translate(0px,0px);}
        5%    {-webkit-transform:translate(0px,0px);}
        6.5%  {-webkit-transform:translate(0px,0px) rotate(-8deg);}
        8%    {-webkit-transform:translate(0px,0px) rotate(0deg);}
        9.5%  {-webkit-transform:translate(0px,0px) rotate(-8deg);}
        11%   {-webkit-transform:translate(0px,0px) rotate(0deg);}

        100%  {-webkit-transform:translate(0px,0px);}
    }
    @-webkit-keyframes cat5
    {
        0%    {-webkit-transform:translate(2px,0px) rotate(2deg);}
        19%   {-webkit-transform:translate(2px,0px) rotate(2deg);}
        24%   {-webkit-transform:translate(-1px,-1px) rotate(0deg);}
        29%   {-webkit-transform:translate(2px,0px) rotate(2deg);}
        39%   {-webkit-transform:translate(2px,0px) rotate(2deg);}
        50.5% {-webkit-transform:translate(5px,2px) rotate(5deg);}
        62%   {-webkit-transform:translate(2px,0px) rotate(2deg);}
        /*65%   {-webkit-transform:translate(2px,0px) rotate(2deg);}*/
        73.5% {-webkit-transform:translate(5px,2px) rotate(5deg);}
        85%   {-webkit-transform:translate(2px,0px) rotate(2deg);}
        100%  {-webkit-transform:translate(2px,0px) rotate(2deg);}
    }
    @-webkit-keyframes cat6
    {
        0%    {-webkit-transform:translate(1px,0px) rotate(-10deg);}
        32%   {-webkit-transform:translate(1px,0px) rotate(-10deg);}
        39%   {-webkit-transform:translate(7px,2px) rotate(0deg);}
        46%   {-webkit-transform:translate(7px,2px) rotate(5deg) scale(1,1.15);}
        55%   {-webkit-transform:translate(7px,2px) rotate(5deg) scale(1,1.15);}
        62%   {-webkit-transform:translate(7px,2px) rotate(0deg);}
        69%   {-webkit-transform:translate(7px,2px) rotate(5deg) scale(1,1.15);}
        78%   {-webkit-transform:translate(7px,2px) rotate(5deg) scale(1,1.15);}
        85%   {-webkit-transform:translate(7px,2px) rotate(0deg);}
        100%  {-webkit-transform:translate(1px,0px) rotate(-10deg);}
    }
    @-webkit-keyframes xin1
    {
        0%    {-webkit-transform:translate(0px,0px) rotate(-20deg);opacity: 0}
        24%   {-webkit-transform:translate(0px,0px) rotate(-20deg);opacity: 1}
        50%   {-webkit-transform:translate(-120px,-250px) rotate(-20deg);opacity: 0}
        100%  {-webkit-transform:translate(0px,0px) rotate(-20deg);opacity: 0}
    }
    @-webkit-keyframes xin2
    {
        0%    {opacity: 0}
        48%   {-webkit-transform:rotate(-10deg) scale(.5,.5);opacity: 0}
        49%   {-webkit-transform:rotate(-10deg) scale(1,1);opacity: 1}
        /*60%   {-webkit-transform:translate(-20px,-35px) rotate(-10deg) scale(1,1);opacity: 1}*/
        75%   {-webkit-transform:translate(-100px,-180px) rotate(-10deg) scale(1,1);opacity: 0}
        100%  {opacity: 0}
    }
    @-webkit-keyframes xin3
    {
        0%    {opacity: 0}
        71%   {-webkit-transform:rotate(-10deg) scale(.5,.5);opacity: 0}
        73%   {-webkit-transform:rotate(-10deg) scale(1,1);opacity: 1}
        /*60%   {-webkit-transform:translate(-20px,-35px) rotate(-10deg) scale(1,1);opacity: 1}*/
        95%   {-webkit-transform:translate(-100px,-180px) rotate(-10deg) scale(1,1);opacity: 0}
        100%  {opacity: 0}
    }
    @-webkit-keyframes xin4
    {
        0%    {opacity: 0}
        50%   {-webkit-transform:rotate(25deg) scale(.7,.7);opacity: 0}
        52%   {-webkit-transform:rotate(25deg) scale(1,1);opacity: 1}
        72%   {-webkit-transform:translate(80px,-120px) rotate(25deg) scale(1,1);opacity: 0}
        100%  {opacity: 0}
    }
    @-webkit-keyframes xin5
    {
        0%    {opacity: 0}
        70%   {-webkit-transform:rotate(25deg) scale(.7,.7);opacity: 0}
        72%   {-webkit-transform:rotate(25deg) scale(1,1);opacity: 1}
        90%   {-webkit-transform:translate(80px,-120px) rotate(25deg) scale(1,1);opacity: 0}
        100%  {opacity: 0}
    }
    @-webkit-keyframes xin6
    {
        0%    {-webkit-transform:translate(0px,0px) rotate(-20deg);opacity: 0}
        50%   {-webkit-transform:translate(0px,0px) rotate(-20deg);opacity: 1}
        70%   {-webkit-transform:translate(80px,-160px) rotate(-20deg);opacity: 0}
        100%  {-webkit-transform:translate(0px,0px) rotate(-20deg);opacity: 0}
    }
    @-webkit-keyframes xin7
    {
        0%    {-webkit-transform:translate(0px,0px) rotate(-20deg);opacity: 0}
        70%   {-webkit-transform:translate(0px,0px) rotate(-20deg);opacity: 1}
        90%   {-webkit-transform:translate(80px,-160px) rotate(-20deg);opacity: 0}
        100%  {-webkit-transform:translate(0px,0px) rotate(-20deg);opacity: 0}
    }
    @-webkit-keyframes yao1
    {
        0%    {-webkit-transform:rotate(4deg);-webkit-animation-timing-function:ease-in-out;opacity: 1}
        17%   {-webkit-transform:rotate(5deg);-webkit-animation-timing-function:ease-in-out;}
        34%   {-webkit-transform:rotate(4deg);-webkit-animation-timing-function:ease-in-out;}
        51%   {-webkit-transform:rotate(5deg);-webkit-animation-timing-function:ease-in-out;}
        68%   {-webkit-transform:rotate(4deg);-webkit-animation-timing-function:ease-in-out;}
        /*70%   {-webkit-transform:rotate(10deg);-webkit-animation-timing-function:ease-in-out;}*/
        100%  {-webkit-transform:translate(-340px,300px) rotate(50deg);opacity: 1}
    }
    @-webkit-keyframes yao
    {   
        0%    {-webkit-transform:rotate(4deg);opacity: 0}
        20%    {-webkit-transform:rotate(4deg);-webkit-animation-timing-function:ease-in-out;opacity: 1}
        33%   {-webkit-transform:rotate(5deg);-webkit-animation-timing-function:ease-in-out;}
        46%   {-webkit-transform:rotate(4deg);-webkit-animation-timing-function:ease-in-out;}
        59%   {-webkit-transform:rotate(5deg);-webkit-animation-timing-function:ease-in-out;}
        72%   {-webkit-transform:rotate(4deg);-webkit-animation-timing-function:ease-in-out;}
        /*70%   {-webkit-transform:rotate(10deg);-webkit-animation-timing-function:ease-in-out;}*/
        100%  {-webkit-transform:translate(-340px,300px) rotate(50deg);opacity: 1}
    }
    @-webkit-keyframes yao_dev
    {   
        0%    {-webkit-transform:rotate(4deg);opacity: 0}
        20%    {-webkit-transform:rotate(4deg);-webkit-animation-timing-function:ease-in-out;opacity: 1}
        33%   {-webkit-transform:rotate(5deg);-webkit-animation-timing-function:ease-in-out;}
        46%   {-webkit-transform:rotate(4deg);-webkit-animation-timing-function:ease-in-out;}
        59%   {-webkit-transform:rotate(5deg);-webkit-animation-timing-function:ease-in-out;}
        72%   {-webkit-transform:rotate(4deg);-webkit-animation-timing-function:ease-in-out;}
        /*70%   {-webkit-transform:rotate(10deg);-webkit-animation-timing-function:ease-in-out;}*/
        100%  {-webkit-transform:translate(-340px,300px) rotate(50deg);opacity: 1}
    }
    @-webkit-keyframes faguang
    {
        from {-webkit-transform:scale(1,1);opacity: 0.8}
        to   {-webkit-transform:scale(1.2,1.2);opacity: 1}
    }
    @-webkit-keyframes yueliang
    {
        from {-webkit-transform:rotate(0deg);}
        to   {-webkit-transform:rotate(-8deg);}
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
</style>

<div id='container'>
    <img src='<?=$p?>images/bg1.jpg' style='opacity:1'>

    <div id='guangban' style='position:absolute;width:600px;height:180px;top:400px;left:-50px;-webkit-transform:rotate(-12deg)'></div>

    <div id='allpage' style='position:absolute;left:0px;top:0px;opacity:0;'>
        <div id='page2' style='position:absolute;top:85px;left:98px;width:367px;height:220px;-webkit-transform-origin:0% 0%;-webkit-transform:rotate(4deg);opacity:0;z-index:9;'>
            <img id='kuang2' src='<?=$p?>images/kuang.png' style='position:absolute;width:367px;height:220px;'>
            <div id='box2' style='position:absolute;overflow:hidden;width:341px;height:200px;top:10px;left:13px;'>
                <img id='img2' style='position:absolute' src='<?=$p?>images/1.jpg'>
            </div>
        </div>

        <div id='page1' style='position:absolute;top:85px;left:98px;width:367px;height:540px;-webkit-transform-origin:0% 0%;-webkit-transform:rotate(4deg);opacity:0;z-index:10;'>
            <img id='kuang1' src='<?=$p?>images/kuang.png' style='position:absolute;width:367px;height:540px;'>
            <div id='box1' style='position:absolute;overflow:hidden;width:341px;height:520px;top:10px;left:13px;'>
                <img id='img1' style='position:absolute' src='<?=$p?>images/1.jpg'>
            </div>
        </div>
    </div>

    <div style='position:absolute;width:172px;height:152px;left:40px;top:10px;z-index:20'>
        <img src='<?=$p?>images/yueguang.png' style='position:absolute;-webkit-animation:faguang 1.5s ease-in-out infinite alternate'>
        <img src='<?=$p?>images/yueliang.png' style='position:absolute;left:30px;top:41px;-webkit-animation:yueliang 1.5s ease-in-out infinite alternate'>
    </div>
    


    <div style='position:absolute;top:-50px;left:0px;opacity:1;z-index:20'>
        <img src='<?=$p?>images/xin.png' style='position:absolute;left:245px;top:570px;width:30px;-webkit-animation: xin1 10s linear infinite'>
        <img src='<?=$p?>images/xin.png' style='position:absolute;left:219px;top:581px;width:35px;-webkit-transform:rotate(-10deg);-webkit-animation: xin2 10s linear infinite'>
        <img src='<?=$p?>images/xin.png' style='position:absolute;left:219px;top:581px;width:35px;-webkit-transform:rotate(-10deg);-webkit-animation: xin3 10s linear infinite'>
        <img src='<?=$p?>images/xin.png' style='position:absolute;left:240px;top:505px;width:50px;-webkit-transform:rotate(20deg);-webkit-animation: xin4 10s linear infinite'>
        <img src='<?=$p?>images/xin.png' style='position:absolute;left:240px;top:505px;width:50px;-webkit-transform:rotate(20deg);-webkit-animation: xin5 10s linear infinite'>
        <img src='<?=$p?>images/xin.png' style='position:absolute;left:280px;top:570px;width:20px;-webkit-animation: xin6 10s linear infinite'>
        <img src='<?=$p?>images/xin.png' style='position:absolute;left:280px;top:570px;width:20px;-webkit-animation: xin7 10s linear infinite'>
        <img src='<?=$p?>images/miaopi1.png' style='position:absolute;left:136px;top:647px;'>

        <img src='<?=$p?>images/heizhong.png' style='position:absolute;left:250px;top:605px;-webkit-animation:cat5 10s linear infinite;'>
        <div style='position:absolute;left:242px;top:560px;-webkit-animation:cat2 10s linear infinite;width:50px;height:67px;'>
            <img src='<?=$p?>images/heiyou.png' style='position:absolute;left:44px;top:-21px;-webkit-animation:cat4 10s linear infinite;-webkit-transform-origin:50% 67%;'>

            <img src='<?=$p?>images/heitou.png' style='position:absolute;'>

            <img src='<?=$p?>images/heizuo.png' style='position:absolute;left:-7px;top:-11px;-webkit-animation:cat3 10s linear infinite;-webkit-transform-origin:100% 90%;'>
        </div>

        
        <img src='<?=$p?>images/baitou.png' style='position:absolute;left:150px;top:576px;-webkit-animation:cat1 10s linear infinite;-webkit-transform-origin: 85% 50%;'>
        <img src='<?=$p?>images/baizhong.png' style='position:absolute;left:160px;top:627px;-webkit-animation:cat6 10s linear infinite;-webkit-transform-origin: 23.65% 91.11%;'>


    </div>

    <div id='pagetitle' style='position:absolute;width:410px;height:200px;top:200px;left:45px;font-size:40px;color:#fff;overflow:hidden;font-weight:bold;text-shadow:5px 6px 4px rgba(0, 0, 0, 0.2);opacity:0;'>
        <div style='position:absolute;width:410px;height:200px;top:0px;left:0px;overflow:hidden;'>
            <div style='position:absolute;width:410px;height:200px;display:table;overflow:hidden;'>
                <div id='titlecontent' style='width:410px;height:200px;vertical-align:middle;display:table-cell;text-align:center;font-size:40px;line-height:70px;color:#fff;'></div>
            </div>
        </div>
    </div>

</div>



<script>
var Onload_imgs_url = [];
var image_size_width= [];
var image_size_height= [];

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

var delaytime = 4000;
function id(name)
{
    return document.getElementById(name);
}

function rand(min,max)
{
    return min+Math.floor(Math.random()*(max-min+1));
}

function create_guangban()
{
    var num = 40;
    var color = ['#eefb33','#7384ff','#ff8f4c'];

    for(var i=0; i<num;i++)
    {
        var radius = rand(10,20);
        var div = document.createElement('div')
        div.style.position = 'absolute';
        div.style.top = rand(0,170)+'px';
        div.style.left = rand(0,600)+'px';
        div.style.width = radius*2+'px';
        div.style.height = radius*2+'px';
        div.style.borderRadius = radius+'px';
        div.style.opacity = 0.3;
        div.style.webkitAnimation = 'guangban 1.5s '+rand(0,40)/10+'s'+' linear infinite alternate'
        div.style.backgroundColor = color[i%3];
        id('guangban').appendChild(div);
    }
}

function myInit()
{
    create_guangban();
    image_load();
}
function image_load()
{

    begin_titletime = new Date();
    begin_titletime = begin_titletime.getTime();
    showtitle();

    if(reshow ==true)
        return;
    for(var i =0;i<slider_images_url.length;i++)
    {
        var img = new Image();
        img.src = slider_images_url[i];
        img.index = i;
        Onload_imgs_url[i] = 'loading';
        img.onload = img_onload;
        img.onerror = img_onerror;
    }
}
function img_onerror(event)
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

function img_onload(event)
{
    if(reshow ==true)
        return;
    var img=event.target;
    var index = img.index;
    if(index<10)
    {
        have_num++;     
    }
    Onload_imgs_url[index]=img.src;
    image_size_width[index]=img.width;
    image_size_height[index]=img.height;      

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
function showtitle()
{
    id('pagetitle').style.webkitAnimation = 'fadein 1s linear both';
    id('titlecontent').innerHTML = e_desc;
}
function distitle()
{
    id('pagetitle').style.webkitAnimation = 'fadeout 1s linear both';
    id('allpage').style.webkitAnimation = 'fadein 1s 0.5s linear both';
    timeout7 = setTimeout(beginshow,100);
}
function beginshow()
{
    if(reshow ==true)
        return;
    set_page_size(1);
    id('page1').style.webkitAnimation = 'yao1 5s linear 1s forwards';
    image_url_index++;
    if(image_url_index == Onload_imgs_url.length)
    {
        image_url_index = 0;
    }
    timeout1 = setTimeout(function()
    {
        set_page_size(2);
        id('page2').style.webkitAnimation = 'yao 8s linear forwards';
        image_url_index++;
        if(image_url_index == Onload_imgs_url.length)
        {
            image_url_index = 0;
        }
        timeout2 = setTimeout(function()
        {
            nextshow();
        },6000);

    },4000);

}

function nextshow()
{
    if(reshow ==true)
        return;
    id('page1').style.zIndex = 9;
    id('page2').style.zIndex = 10;
    set_page_size(1);
    id('page1').style.display = 'none';
    id('page1').style.webkitAnimation = '';
    timeout3 = setTimeout(function()
    {
        id('page1').style.display = 'block';
        id('page1').style.webkitAnimation = 'yao 8s linear forwards';
    },100)

    image_url_index++;
    if(image_url_index == Onload_imgs_url.length)
    {
        image_url_index = 0;
    }

    timeout4 = setTimeout(function()
    {
        nextnextshow();
    },6000)
}
function nextnextshow()
{
    if(reshow ==true)
        return;
    id('page2').style.zIndex = 9;
    id('page1').style.zIndex = 10;
    set_page_size(2);
    id('page2').style.display = 'none';
    id('page2').style.webkitAnimation = '';
    timeout5 = setTimeout(function()
    {
        id('page2').style.display = 'block';
        id('page2').style.webkitAnimation = 'yao 8s linear forwards';
    },100)
    image_url_index++;
    if(image_url_index == Onload_imgs_url.length)
    {
        image_url_index = 0;
    }
    timeout6 = setTimeout(function()
    {
        nextshow();
    },6000)
}


function reshow_clean()
{
    Onload_imgs_url = [];
    image_size_width= [];
    image_size_height= [];

    image_url_index=0;
    have_num = 0;
    error_num = 0;
    canshow = true;
    reshow = false;
    clearTimeout(timeout0);
    clearTimeout(timeout1);
    clearTimeout(timeout2);
    clearTimeout(timeout3);
    clearTimeout(timeout4);
    clearTimeout(timeout5);
    clearTimeout(timeout6);
    clearTimeout(timeout7);
    id('page1').style.webkitAnimation = '';
    id('page2').style.webkitAnimation = '';

    id('titlecontent').innerHTML = '';
    id('allpage').style.webkitAnimation = '';
    id('pagetitle').style.webkitAnimation = '';
}

function set_page_size(pageindex)
{
    if(reshow ==true)
        return;
    var box_height;
    while(Onload_imgs_url[image_url_index] == 'not find' || Onload_imgs_url[image_url_index] == 'loading')
    {
        console.log(Onload_imgs_url[image_url_index]);
        image_url_index++;
        if(image_url_index == Onload_imgs_url.length)
            image_url_index = 0;
    }
    var img_bili = image_size_width[image_url_index]/image_size_height[image_url_index];

    if(img_bili<(341/520))
        box_height = 520;
    else
        box_height = 341/(img_bili);

    id('page'+pageindex).style.width = '367px';
    id('page'+pageindex).style.height = (box_height+20)+'px';
    id('kuang'+pageindex).style.width = '367px';
    id('kuang'+pageindex).style.height = (box_height+20)+'px';
    id('box'+pageindex).style.width = '341px';
    id('box'+pageindex).style.height = box_height+'px';

    var img = id('img'+pageindex);
    img.src = Onload_imgs_url[image_url_index];

    if(img_bili<(341/520))
    {
        img.style.width = '341px';
        img.style.height = (341/img_bili)+'px';
        img.style.top = '-'+((341/img_bili)-520)/2+'px';
        img.style.left = '0px';
    }
    else
    {
        img.style.width = '341px';
        img.style.top = '0px';
        img.style.left = '0px';
        img.style.height = (341/img_bili)+'px';
    }

    console.log(img.src);
}

call_me(myInit);

function reload_scene()
{
    reshow = true;
    reshow_clean();
    setTimeout(image_load,100);

}
</script>