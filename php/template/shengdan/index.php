<?
$p=$_WEITE['web_pic_url']."shengdan/";
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

#container1
{
    width: 500px;
    height: 815px;
    position: absolute;
    overflow: hidden;
}
#container1 > div,#container1 > img
{
    position: absolute;
}
#laoren
{
    left: 30px;
    top: 460px;
}
.threeline
{
    position: absolute;
    height: 55px;
    left: 0px;
    width: 420px;
}
.oneline
{
    position: absolute;
    height: 100px;
    left: 0px;
    width: 420px;
    line-height: 100px;
}
.twoline
{
    position: absolute;
    height: 80px;
    line-height: 80px;
    left: 0px;
    width: 420px;
}
#pagetitle
{
    width: 420px;
    height: 200px;
    top: 200px;
    left: 40px;
    color: #fff;
    font-size: 40px;
    text-align: center;
    line-height: 55px;
    font-weight: bold;
}
#shengzi1>img,#shengzi2>img,#shengzi1>div,#shengzi2>div
{
    position: absolute;
}
#shengzi1
{
    left: -586px;
    top: -30px;
    opacity: 0;
}
#shengzi2
{
    left: -269px;
    top: 48px;
    -webkit-transform: rotate(-8deg);
    opacity: 0;
}
.imgbox
{
    left:76px;
    top:177px;
    width: 351px;
    height: 351px;
    -webkit-transform: rotate(14.5deg);
    overflow:hidden;
    position:absolute
}
</style>
<style type="text/css">
@-webkit-keyframes showlaoren
{
    from  {-webkit-transform: translate(0px,0px);}
    to    {-webkit-transform: translate(-180px,0px);}
}
@-webkit-keyframes in_fadedown
{
    from  {-webkit-transform: translate(0px,20px);opacity: 0}
    to    {-webkit-transform: translate(0px,0px);opacity: 1}
}
@-webkit-keyframes out_fadedown
{
    from  {-webkit-transform: translate(0px,0px);opacity: 1}
    to    {-webkit-transform: translate(0px,-20px);opacity: 0}
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
@-webkit-keyframes showsheng1
{
    0%   {-webkit-transform: translate(0px,0px);opacity: 0}
    10%  {-webkit-transform: translate(60px,15px);opacity: 1}
    90%  {-webkit-transform: translate(493px,5px);opacity: 1}
    100% {-webkit-transform: translate(564px,-9px);opacity: 0}

}
@-webkit-keyframes showsheng2
{
    0%  {-webkit-transform: translate(0px,0px) rotate(-8deg);opacity: 0}
    9% {-webkit-transform: translate(-80px,-30px) rotate(-6deg);opacity: 1}
    92% {-webkit-transform: translate(-1278px,-487px) rotate(13deg);opacity: 1}
    100% {-webkit-transform: translate(-1378px,-507px) rotate(13deg);opacity: 0}

}
@-webkit-keyframes yaohuang
{
    from  {-webkit-transform: rotate(-4deg);}
    to    {-webkit-transform: rotate(4deg);}
}
@-webkit-keyframes yaohuang1
{
    from  {-webkit-transform: rotate(-4deg) scale(-1,1);}
    to    {-webkit-transform: rotate(4deg) scale(-1,1);}
}
</style>
<script src="<?=$_WEITE['web_weburl']?>template/shengdan/images/fleaves.min.js"></script>
<link rel="stylesheet" href="<?=$_WEITE['web_weburl']?>template/shengdan/images/leavesGeneral.css" type="text/css" media="screen" charset="utf-8">

<div id='container1'>
    <img src='<?=$p?>/images/bg.jpg'>

    <div id='laorendiv' style='opacity:0;'>
        <img id='laoren' src='<?=$p?>/images/7.png' style='position:absolute'>
    </div>

    <div id='pagetitle'>
        <div id='linetop'>
        </div>
        <div id='line1'>
        </div>
        <div id='line2'>
        </div>
        <div id='line3'>
        </div>
        <div id='linebottom'>
        </div>
    </div>

    <div id='shengzi1'>
        <img src='<?=$p?>/images/1.png' style='left:0px;top:0px'>
        <div id='div1' style='left:133px;top:91px;width:488px;height:646px;-webkit-transform-origin: 39% 11%;-webkit-animation: yaohuang 2s linear infinite alternate'>
            <div class='imgbox'>
                <img id='img1' style='position:absolute'>
            </div>
            <img src='<?=$p?>/images/kuang.png' style='position:absolute'>
        </div>
        
        <img src='<?=$p?>/images/9.png' style='left:628px;top:83px;-webkit-transform-origin: 45% 12%;-webkit-animation: yaohuang 1.5s linear infinite alternate'>
        <img src='<?=$p?>/images/2.png' style='left:442px;top:126px;-webkit-transform-origin: 52% 32%;-webkit-animation: yaohuang 1.2s linear infinite alternate'>
        
    </div>

    <div id='shengzi2'>

        <img src='<?=$p?>/images/1.png' style='left:0px;top:54px;-webkit-transform: scale(-1,1) rotate(-4deg)'>
        <img src='<?=$p?>/images/1.png' style='left:1210px;top:41px;-webkit-transform: scale(-1,1) rotate(18deg)'>

        
        <div id='div2' style="left: 243px;top: 50px;width:488px;height:646px;-webkit-transform-origin: 39% 11%;-webkit-animation: yaohuang 1.5s ease-in-out infinite alternate">
            <div class='imgbox'>
                <img id='img2' style='position:absolute'>
            </div>
            <img src="<?=$p?>/images/kuang.png" style='position:absolute'>
        </div>
        <div id='div3' style="left: 814px;top: 148px;width:488px;height:646px;-webkit-transform-origin: 39% 11%;-webkit-animation: yaohuang 1.5s 1.5s ease-in-out infinite alternate">
            <div class='imgbox'>
                <img id='img3' style='position:absolute'>
            </div>
            <img src="<?=$p?>/images/kuang.png" style='position:absolute'>
        </div>
        <div id='div4' style="left: 1494px;top: 126px;width:488px;height:646px;-webkit-transform-origin: 39% 11%;-webkit-animation: yaohuang 1.5s ease-in-out infinite alternate">
            <div class='imgbox'>
                <img id='img4' style='position:absolute'>
            </div>
            <img src="<?=$p?>/images/kuang.png" style='position:absolute'>
        </div>

        <img src="<?=$p?>/images/5.png" style="left: 1324px;top: 186px;-webkit-transform-origin: 31% 14%;-webkit-transform: rotate(0deg);-webkit-animation: yaohuang 1.5s 0.7s linear infinite alternate">
        <img src="<?=$p?>/images/5.png" style="left: 1203px;top: 196px;-webkit-transform-origin: 31% 14%;-webkit-transform: rotate(0deg) scale(-1,1);-webkit-animation: yaohuang1 1.5s linear infinite alternate">

    </div>

    <div id="leafContainer" style='z-index:10'></div>

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

var leafNum = 20;          
var kindNum = 4;           
var kindurl = new Array("http://7xjeju.com2.z0.glb.qiniucdn.com/pic/shengdan1/1.png","http://7xjeju.com2.z0.glb.qiniucdn.com/pic/shengdan1/2.png","http://7xjeju.com2.z0.glb.qiniucdn.com/pic/shengdan1/3.png","http://7xjeju.com2.z0.glb.qiniucdn.com/pic/shengdan1/4.png");

function id(name)
{
    return document.getElementById(name);
}
function Init()
{
    leafinit();
    load_images();
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
    id('laorendiv').style.webkitAnimation = 'fadein 1s linear both';
    id('laoren').style.webkitAnimation = 'showlaoren 6s linear both';
    var line1 = id('line1');
    var line2 = id('line2');
    var line3 = id('line3');

    if(e_desc.length>20)//3��
    {

        line1.innerHTML = e_desc.substring(0,10);
        line1.className = 'threeline';
        line1.style.top = '28px';
        line1.style.webkitAnimation = 'in_fadedown 1s linear both';
        line2.innerHTML = e_desc.substring(10,20);
        line2.style.top = '78px';
        line2.className = 'threeline';
        line2.style.webkitAnimation = 'in_fadedown 1s linear 0.5s both';
        line3.innerHTML = e_desc.substring(20,e_desc.length);
        line3.style.top = '128px';
        line3.className = 'threeline';
        line3.style.webkitAnimation = 'in_fadedown 1s 1s linear both';
    }
    else if(e_desc.length<11)//1��
    {
        line1.innerHTML = e_desc;
        line1.className = 'oneline';
        line1.style.top = '0px';
        line1.style.webkitAnimation = 'in_fadedown 1s linear both';

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

        line1.style.webkitAnimation = 'in_fadedown 1s linear both';
        line2.style.webkitAnimation = 'in_fadedown 1s 0.5s linear both';
    }

    // setTimeout(distitle,5000);
}
function distitle()
{

    var line1 = id('line1');
    var line2 = id('line2');
    var line3 = id('line3');

    id('laorendiv').style.webkitAnimation = 'fadeout 1s linear both';
    if(e_desc.length>20)
    {
        line3.style.webkitAnimation = 'out_fadedown 0.8s 0.8s linear both';
        line2.style.webkitAnimation = 'out_fadedown 0.8s 0.4s linear both';
        line1.style.webkitAnimation = 'out_fadedown 0.8s linear both';
    }
    else if(e_desc.length<11)
    {
        line1.style.webkitAnimation = 'out_fadedown 0.8s linear both';
    }
    else
    {
        line2.style.webkitAnimation = 'out_fadedown 0.8s 0.4s linear both';
        line1.style.webkitAnimation = 'out_fadedown 0.8s linear both';
    }

    timeout1 = setTimeout(show1,1000)
}
function show1()
{
    setImage('1');
    id('shengzi1').style.webkitAnimation = 'showsheng1 7s linear both';

    timeout2 = setTimeout(function()
    {
        id('shengzi2').style.webkitAnimation = '';
    },3000)
    timeout3 = setTimeout(show2,7000);
}
function show2()
{
    id('shengzi2').style.webkitAnimation = 'showsheng2 14s linear both';
    setImage('2');
    setImage('3');
    setImage('4');
    timeout4 = setTimeout(function()
    {
        id('shengzi1').style.webkitAnimation = '';
    },3000)
    timeout5 = setTimeout(show1,13000);
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

    var div = id('div'+idname)
    var img = id('img'+idname);
    img.src = Onload_imgs_url[image_url_index];
    console.log(img.src);

    if(img_bili > 1)
    {
        img.style.top = '0px';
        img.style.height = 351 + 'px';
        img.style.width = 351*img_bili + 'px';
        img.style.left = -((351*img_bili-351)/2)+'px';
    }
    else
    {
        img.style.left = '0px';
        img.style.width = 351+'px';
        img.style.height = 351/img_bili + 'px';
        img.style.top = -((351/img_bili-351)/2) + 'px';
    }
    image_url_index++;
    if(image_url_index == Onload_imgs_url.length)
        image_url_index = 0;
}
call_me(Init);
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
    id('shengzi1').style.webkitAnimation = '';
    id('shengzi2').style.webkitAnimation = '';

    clearTimeout(timeout0);
    clearTimeout(timeout1);
    clearTimeout(timeout2);
    clearTimeout(timeout3);
    clearTimeout(timeout4);
    clearTimeout(timeout5);
}
</script>