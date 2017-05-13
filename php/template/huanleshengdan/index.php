<?
$p=$_WEITE['web_pic_url']."huanleshengdan/";
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

#container1
{
    width: 500px;
    height: 815px;
    position: absolute;
    overflow: hidden;
}
#container1>div,#container1>img
{
    position: absolute;
}
.imgbox
{
    left: 30px;
    top: 23px;
    width: 368px;
    height: 368px;
    overflow: hidden;
    position: absolute;
}
</style>
<style type="text/css">
@-webkit-keyframes imgchange
{
    0%{opacity: 1}
    8.46%{opacity: 1;}
    25%{opacity: 0}
    83.7%{opacity: 0}
    100%{opacity: 1}
}
@-webkit-keyframes showimg1
{
    from  {-webkit-transform: translate(496px,672px) rotate(45deg);opacity: 1}
    to    {-webkit-transform: translate(0px,0px) rotate(-8deg);opacity: 1}
}
@-webkit-keyframes disimg1
{
    from  {-webkit-transform: translate(0px,0px) rotate(-8deg);opacity: 1}
    to    {-webkit-transform: translate(0px,0px) rotate(-8deg);opacity: 0}
}
@-webkit-keyframes showimg2
{
    from  {-webkit-transform: translate(496px,672px) rotate(-45deg);opacity: 1}
    to    {-webkit-transform: translate(0px,0px) rotate(-1deg);opacity: 1}
}
@-webkit-keyframes disimg2
{
    from  {-webkit-transform: translate(0px,0px) rotate(-1deg);opacity: 1}
    to    {-webkit-transform: translate(0px,0px) rotate(-1deg);opacity: 0}
}
@-webkit-keyframes showimg3
{
    from  {-webkit-transform: translate(496px,672px) rotate(45deg);opacity: 1}
    to    {-webkit-transform: translate(0px,0px) rotate(10deg);opacity: 1}
}
@-webkit-keyframes disimg3
{
    from  {-webkit-transform: translate(0px,0px) rotate(10deg);opacity: 1}
    to    {-webkit-transform: translate(0px,0px) rotate(10deg);opacity: 0}
}
@-webkit-keyframes showimg4
{
    from  {-webkit-transform: translate(496px,672px) rotate(-45deg);opacity: 1}
    to    {-webkit-transform: translate(0px,0px) rotate(-2deg);opacity: 1}
}
@-webkit-keyframes disimg4
{
    from  {-webkit-transform: translate(0px,0px) rotate(-2deg);opacity: 1}
    to    {-webkit-transform: translate(0px,0px) rotate(-2deg);opacity: 0}
}
@-webkit-keyframes showimg5
{
    from  {-webkit-transform: translate(496px,672px) rotate(45deg);opacity: 1}
    to    {-webkit-transform: translate(0px,0px) rotate(1deg);opacity: 1} 
}
@-webkit-keyframes disimg5
{
    from  {-webkit-transform: translate(0px,0px) rotate(1deg);opacity: 1} 
    to    {-webkit-transform: translate(0px,0px) rotate(1deg);opacity: 0} 
}
@-webkit-keyframes showtitle
{
    from  {-webkit-transform: translate(0px,50px);opacity: 0}
    to    {-webkit-transform: translate(0px,0px);opacity: 1}
}
@-webkit-keyframes distitle1
{
    from  {-webkit-transform: translate(0px,0px);opacity: 1}
    to    {-webkit-transform: translate(0px,-50px);opacity: 0}
}
@-webkit-keyframes distitle
{
    from  {-webkit-transform: translate(0px,0px);opacity: 1}
    to    {-webkit-transform: translate(-124px,-304px) scale(0.6);}
}
</style>
<script src="<?=$p?>images/fleaves.min.js"></script>
<link rel="stylesheet" href="<?=$p?>images/leavesGeneral.css" type="text/css" media="screen" charset="utf-8">
<div id='container1'>
    <img src='<?=$p?>images/01.jpg' style='width:500px;height:815px;-webkit-animation:imgchange 12s linear 9s infinite'>
    <img src='<?=$p?>images/02.jpg' style='width:500px;height:815px;-webkit-animation:imgchange 12s linear 6s infinite'>
    <img src='<?=$p?>images/03.jpg' style='width:500px;height:815px;-webkit-animation:imgchange 12s linear 3s infinite'>
    <img src='<?=$p?>images/04.jpg' style='width:500px;height:815px;-webkit-animation:imgchange 12s linear infinite'>

    <div id='div1' style='left:25px;top:114px;display:none;z-index:1;'>
        <div class='imgbox'>
            <img id='img1' style='position:absolute'>
        </div>
        <img src='<?=$p?>images/kuang.png' style='position:ansolute'>
    </div>
    <div id='div2' style='left:39px;top:133px;display:none;z-index:2'>
        <div class='imgbox'>
            <img id='img2' style='position:absolute'>
        </div>
        <img src='<?=$p?>images/kuang.png' style='position:ansolute'>
    </div>
    <div id='div3' style='left:38px;top:136px;display:none;z-index:3'>
        <div class='imgbox'>
            <img id='img3' style='position:absolute'>
        </div>
        <img src='<?=$p?>images/kuang.png' style='position:ansolute'>
    </div>
    <div id='div4' style='left:25px;top:111px;display:none;z-index:4'>
        <div class='imgbox'>
            <img id='img4' style='position:absolute'>
        </div>
        <img src='<?=$p?>images/kuang.png' style='position:ansolute'>
    </div>
    <div id='div5' style='left:28px;top:127px;display:none;z-index:5'>
        <div class='imgbox'>
            <img id='img5' style='position:absolute'>
        </div>
        <img src='<?=$p?>images/kuang.png' style='position:ansolute'>
    </div>


    <div id='pagetitle' style='position:absolute;width:370px;height:227px;top:247px;left:65px;font-size:40px;color:#fff;overflow:hidden;text-shadow:1px 5px 4px rgba(0, 0, 0, 0.2);font-weight:bold;'>
        <div style='position:absolute;width:370px;height:227px;top:0px;left:0px;overflow:hidden;'>
            <div style='position:absolute;width:370px;height:227px;display:table;overflow:hidden;'>
                <div id='titlecontent' style='width:370px;height:227px;vertical-align:middle;display:table-cell;text-align:center;'></div>
            </div>
        </div>
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
var timeout6;
var delaytime=5000;

var leafNum = 15;          
var kindNum = 4;           
var kindurl = new Array("<?=$p?>images/1.png","<?=$p?>images/2.png","<?=$p?>images/3.png","<?=$p?>images/4.png");

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
    div1 = id('div1');
    div2 = id('div2');
    div3 = id('div3');
    div4 = id('div4');
    div5 = id('div5');

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
    id('titlecontent').innerHTML = e_desc;
    id('pagetitle').style.webkitAnimation = 'showtitle 1s linear both';
}
function distitle()
{
    id('pagetitle').style.webkitAnimation = 'distitle 1.5s cubic-bezier(.31,.05,.69,1) both';
    show1();
}
function show1()
{
    setImage('1');
    div2.style.webkitAnimation = 'disimg2 1s linear both';
    div1.style.display = 'block';
    div1.style.webkitAnimation = 'showimg1 1.5s ease-out both';

    div1.style.zIndex = 5;
    div5.style.zIndex = 4;
    div4.style.zIndex = 3;
    div3.style.zIndex = 2;
    div2.style.zIndex = 1;

    timeout2 = setTimeout(show2,3000);
}
function show2()
{
    setImage('2');
    div3.style.webkitAnimation = 'disimg3 1s linear both';
    div2.style.display = 'block';
    div2.style.webkitAnimation = 'showimg2 1.5s ease-out both';

    div2.style.zIndex = 5;
    div1.style.zIndex = 4;
    div5.style.zIndex = 3;
    div4.style.zIndex = 2;
    div3.style.zIndex = 1;

    timeout3 = setTimeout(show3,3000);
}
function show3()
{
    setImage('3');
    div4.style.webkitAnimation = 'disimg4 1s linear both';
    div3.style.display = 'block';
    div3.style.webkitAnimation = 'showimg3 1.5s ease-out both';

    div3.style.zIndex = 5;
    div2.style.zIndex = 4;
    div1.style.zIndex = 3;
    div5.style.zIndex = 2;
    div4.style.zIndex = 1;

    timeout4 = setTimeout(show4,3000);
}
function show4()
{
    setImage('4');
    div5.style.webkitAnimation = 'disimg5 1s linear both';
    div4.style.display = 'block';
    div4.style.webkitAnimation = 'showimg4 1.5s ease-out both';

    div4.style.zIndex = 5;
    div3.style.zIndex = 4;
    div2.style.zIndex = 3;
    div1.style.zIndex = 2;
    div5.style.zIndex = 1;

    timeout5 = setTimeout(show5,3000);
}
function show5()
{
    setImage('5');
    div1.style.webkitAnimation = 'disimg1 1s linear both';
    div5.style.display = 'block';
    div5.style.webkitAnimation = 'showimg5 1.5s ease-out both';
    
    div5.style.zIndex = 5;
    div4.style.zIndex = 4;
    div3.style.zIndex = 3;
    div2.style.zIndex = 2;
    div1.style.zIndex = 1;

    timeout6 = setTimeout(show1,3000);
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
        img.style.height = 368 + 'px';
        img.style.width = 368*img_bili + 'px';
        img.style.left = -((368*img_bili-368)/2)+'px';
    }
    else
    {
        img.style.left = '0px';
        img.style.width = 368+'px';
        img.style.height = 368/img_bili + 'px';
        img.style.top = -((368/img_bili-368)/2) + 'px';
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
    id('div1').style.webkitAnimation = '';
    id('div2').style.webkitAnimation = '';
    id('div3').style.webkitAnimation = '';
    id('div4').style.webkitAnimation = '';
    id('div5').style.webkitAnimation = '';
    id('div1').style.display = 'none';
    id('div2').style.display = 'none';
    id('div3').style.display = 'none';
    id('div4').style.display = 'none';
    id('div5').style.display = 'none';
    id('titlecontent').innerHTML = '';
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