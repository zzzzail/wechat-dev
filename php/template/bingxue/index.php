<?
$p=$_WEITE['web_pic_url']."bingxue/";
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
#container > img, #container > div
{
    position: absolute;
}
#pagetitle
{
    width: 420px;
    height: 200px;
    top: 300px;
    left: 40px;
    color: #fff;
    font-size: 40px;
    text-align: center;
    line-height: 55px;
    font-weight: bold;
}

#linetop
{
    height: 2px;
    width: 420px;
    position: absolute;
    background-color: #fff;
    opacity: 0;
}
#linebottom
{
    height: 2px;
    width: 420px;
    position: absolute;
    background-color: #fff;
    opacity: 0;
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
#div11h
{
    width: 441px;
    height: 297px;
    left: 30px;
    top: 96px;
    border: 7px solid #fff;
    overflow: hidden;
}
#div12h
{
    width: 441px;
    height: 297px;
    left: 30px;
    top: 424px;
    border: 7px solid #fff;
    overflow: hidden;
}
#div11v
{
    height: 420px;
    width: 280px;
    left: 196px;
    top: 27px;
    border: 7px solid #fff;
    overflow: hidden;
}
#div12v
{
    height: 420px;
    width: 280px;
    left: 22px;
    top: 340px;
    border: 7px solid #fff;
    overflow: hidden;
}
#div2v,#div3v
{
    position: absolute;
    width: 440px;
    height: 661px;
    top: 69px;
    left: 29px;
    border: 7px solid #fff;
    overflow: hidden;
}
#div2h,#div3h
{
    width: 450px;
    height: 344px;
    top: 191px;
    left: 24px;
    border: 7px solid #fff;
    overflow: hidden;
}
#div4h
{
    position: absolute;
    border: 7px solid #fff;
    width: 441px;
    height: 300px;
    top: 365px;
    left: 26px;
    -webkit-transform: translate(0px,0px) rotate(-15deg);
    overflow: hidden;
}
#div4v
{
    position: absolute;
    border: 7px solid #fff;
    width: 381px;
    height: 550px;
    top: 158px;
    left: 49px;
    -webkit-transform: translate(0px,0px) rotate(-10deg);
    overflow: hidden;
}
#div5v
{
    position: absolute;
    overflow: hidden;
    border: 7px solid #fff;
    width: 364px;
    height: 551px;
    left: 55px;
    top: 138px;
    -webkit-transform: translate(0px,0px) rotate(10deg);
}
#div5h
{
    position: absolute;
    overflow: hidden;
    border: 7px solid #fff;
    width: 448px;
    height: 317px;
    left: 30px;
    top: 238px;
    -webkit-transform: translate(0px,0px) rotate(8deg);
}
</style>
<style type="text/css">
@-webkit-keyframes in_fadedown
{
    from  {-webkit-transform: translate(0px,-50px);opacity: 0}
    to    {-webkit-transform: translate(0px,0px);opacity: 1}
}
@-webkit-keyframes out_fadedown
{
    from  {-webkit-transform: translate(0px,0px);opacity: 1}
    to    {-webkit-transform: translate(0px,50px);opacity: 0}
}
@-webkit-keyframes in_fadedown1
{
    from  {-webkit-transform: translate(0px,-70px);opacity: 0}
    to    {-webkit-transform: translate(0px,0px);opacity: 1}
}
@-webkit-keyframes in_faderight
{
    from  {-webkit-transform: translate(-100px,0px);opacity: 0}
    to    {-webkit-transform: translate(0px,0px);opacity: 1}
}
@-webkit-keyframes out_fadeup
{
    from  {-webkit-transform: translate(0px,0px);opacity: 1}
    to    {-webkit-transform: translate(0px,-100px);opacity: 0}
}
@-webkit-keyframes in_faderotateh
{
    from  {-webkit-transform: translate(0px,0px) rotate(0deg);opacity: 0}
    to    {-webkit-transform: translate(0px,0px) rotate(-15deg);opacity: 1}
}
@-webkit-keyframes in_faderotatev
{
    from  {-webkit-transform: translate(0px,0px) rotate(0deg);opacity: 0}
    to    {-webkit-transform: translate(0px,0px) rotate(-10deg);opacity: 1}
}
@-webkit-keyframes out_faderotateh
{
    from  {-webkit-transform: translate(0px,0px) rotate(-15deg);opacity: 1}
    to    {-webkit-transform: translate(0px,80px) rotate(-30deg);opacity: 0}
}
@-webkit-keyframes out_faderotatev
{
    from  {-webkit-transform: translate(0px,0px) rotate(-10deg);opacity: 1}
    to    {-webkit-transform: translate(0px,80px) rotate(-30deg);opacity: 0}
}
@-webkit-keyframes in_div5v
{
    from  {-webkit-transform: translate(-418px,-53px) rotate(0deg);}
    to    {-webkit-transform: translate(0px,0px) rotate(10deg);}
}
@-webkit-keyframes in_div5h
{
    from  {-webkit-transform: translate(-481px,-46px) rotate(0deg);}
    to    {-webkit-transform: translate(0px,0px) rotate(8deg);}
}
@-webkit-keyframes out_div5v
{
    from  {-webkit-transform: translate(0px,0px) rotate(10deg);opacity: 1}
    to    {-webkit-transform: translate(-50px,176px) rotate(10deg);opacity: 0}
}
@-webkit-keyframes out_div5h
{
    from  {-webkit-transform: translate(0px,0px) rotate(8deg);opacity: 1}
    to    {-webkit-transform: translate(-40px,170px) rotate(8deg);opacity: 0}
}
@-webkit-keyframes xuehua1
{
    0%  {-webkit-transform: translate(0px,0px) rotate(0deg) scale(.1);opacity: 1}
    90% {-webkit-transform: translate(100px,-117px) rotate(-500deg) scale(1.0);opacity: 0.2}
    100%{-webkit-transform: translate(113px,-127px) rotate(-510deg) scale(1.0);opacity: 0}
}
@-webkit-keyframes flowsnow
{
    0%  {-webkit-transform: translate(0px,0px) rotate(0deg);}
    100%{-webkit-transform: translate(0px,650px) rotate(200deg);}
    0%,100%{opacity: 0}
    10%,90%{opacity: 1}
}
@-webkit-keyframes snowrotate
{
    from  {-webkit-transform: rotate(0deg);}
    to    {-webkit-transform: rotate(360deg);}
}
@-webkit-keyframes starshining
{
    0%   {-webkit-transform: scale(0) rotate(0deg);}
    15%  {-webkit-transform: scale(2) rotate(90deg);}
    30% {-webkit-transform: scale(0) rotate(180deg);}
    100% {-webkit-transform: scale(0) rotate(180deg);}
}
</style>

<div id='container'>
    <img src='<?=$p?>images/11.jpg'>

    <!-- <img src='<?=$p?>images/demo5.jpg'> -->

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

    <div id='div12v' style='display:none'>
        <img id='img12v' style='position:absolute'>
    </div>
    <div id='div12h' style='display:none'>
        <img id='img12h' style='position:absolute'>
    </div>
    <div id='div11h' style='display:none'>
        <img id='img11h' style='position:absolute'>
    </div>
    <div id='div11v' style='display:none'>
        <img id='img11v' style='position:absolute'>
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

    <img src='<?=$p?>images/13.png'>

    <img id='xian' style='position:absolute;left:0px;top:100px;width:600px;'>
    <img id='xuehua1' src='<?=$p?>images/xue2.png' style="left: 120px;top:265px;-webkit-transform: translate(0px,0px) rotate(0deg) scale(.3);opacity:0;">
    <img id='xuehua2' src='<?=$p?>images/xue1.png' style='left:35px;top:25px;-webkit-animation: flowsnow 20s linear infinite;'>
    <img id='xuehua3' src='<?=$p?>images/xue3.png' style='left:170px;top:25px;-webkit-animation: flowsnow 15s 3s linear infinite;'>
    <img id='xuehua4' src='<?=$p?>images/xue3.png' style='left:239px;top:650px;-webkit-animation: snowrotate 15s linear infinite;display:none'>
    <img id='star1' src='<?=$p?>images/ying.png' style='left:368px;top:670px;-webkit-animation: starshining 7s linear infinite'>
    <img id='star2' src='<?=$p?>images/ying.png' style='left:56px;top:388px;-webkit-animation: starshining 7s 2s linear infinite both'>
    <img id='star3' src='<?=$p?>images/ying.png' style='left:63px;top:42px;-webkit-animation: starshining 7s 4s linear infinite both'>
    <img id='star4' src='<?=$p?>images/ying.png' style='left:209px;top:76px;width:30px;-webkit-animation: starshining 7s 6s linear infinite both'>
    <img id='star5' src='<?=$p?>images/ying.png' style='left:340px;top:52px;width:30px;-webkit-animation: starshining 7s 1s linear infinite both'>
    <img id='star6' src='<?=$p?>images/ying.png' style='left:375px;top:86px;-webkit-animation: starshining 7s 3s linear infinite both'>
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
var delaytime=6000;
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
    loadxianimage();
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
    var line1 = id('line1');
    var line2 = id('line2');
    var line3 = id('line3');
    var linetop = id('linetop');
    var linebottom = id('linebottom');
    id('xian').style.top = '100px';
    id('xian').style.webkitTransform = 'translate(0px,0px) rotate(0deg)';
    if(e_desc.length>20)//3��
    {

        line1.innerHTML = e_desc.substring(0,10);
        line1.className = 'threeline';
        line1.style.top = '28px';
        line1.style.webkitAnimation = 'in_fadedown 0.7s linear 1.2s both';
        line2.innerHTML = e_desc.substring(10,20);
        line2.style.top = '78px';
        line2.className = 'threeline';
        line2.style.webkitAnimation = 'in_fadedown 0.7s linear 0.8s both';
        line3.innerHTML = e_desc.substring(20,e_desc.length);
        line3.style.top = '128px';
        line3.className = 'threeline';
        line3.style.webkitAnimation = 'in_fadedown 0.7s linear 0.4s both';

        linetop.style.top = '0px';
        linetop.style.webkitAnimation = 'in_fadedown 0.7s linear 1.6s both';

        linebottom.style.top = '200px';
        linebottom.style.webkitAnimation = 'in_fadedown 0.7s linear both';

        timeout1 = setTimeout(function()
        {
            xian = setInterval(xian_ani,50);
        },2300)
    }
    else if(e_desc.length<11)//1��
    {
        line1.innerHTML = e_desc;
        line1.className = 'oneline';
        line1.style.top = '0px';
        line1.style.webkitAnimation = 'in_fadedown 0.7s linear 0.4s both';

        line2.innerHTML = '';
        line3.innerHTML = '';

        linetop.style.top = '0px';
        linetop.style.webkitAnimation = 'in_fadedown 0.7s linear 0.8s both';

        linebottom.style.top = '98px';
        linebottom.style.webkitAnimation = 'in_fadedown 0.7s linear both';

        timeout2 = setTimeout(function()
        {
            xian = setInterval(xian_ani,50);
        },1500)
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

        linetop.style.top = '0px';
        linebottom.style.top = '150px';
        linebottom.style.webkitAnimation = 'in_fadedown 0.7s linear both';
        line2.style.webkitAnimation = 'in_fadedown 0.7s 0.4s linear both';
        line1.style.webkitAnimation = 'in_fadedown 0.7s 0.8s linear both';
        linetop.style.webkitAnimation = 'in_fadedown 0.7s 1.2s linear both';
        timeout3 = setTimeout(function()
        {
            xian = setInterval(xian_ani,50);
        },1900)
    }
}
function distitle()
{
    // return;
    id('linebottom').style.webkitAnimation = 'out_fadedown 0.7s linear both';
    var line1 = id('line1');
    var line2 = id('line2');
    var line3 = id('line3');
    var linetop = id('linetop');
    if(e_desc.length>20)
    {
        line3.style.webkitAnimation = 'out_fadedown 0.7s 0.3s linear both';
        line2.style.webkitAnimation = 'out_fadedown 0.7s 0.6s linear both';
        line1.style.webkitAnimation = 'out_fadedown 0.7s 0.9s linear both';
        linetop.style.webkitAnimation = 'out_fadedown 0.7s 1.2s linear both';
    }
    else if(e_desc.length<11)
    {
        line1.style.webkitAnimation = 'out_fadedown 0.7s 0.3s linear both';
        linetop.style.webkitAnimation = 'out_fadedown 0.7s 0.6s linear both';
    }
    else
    {
        line2.style.webkitAnimation = 'out_fadedown 0.7s 0.3s linear both';
        line1.style.webkitAnimation = 'out_fadedown 0.7s 0.6s linear both';
        linetop.style.webkitAnimation = 'out_fadedown 0.7s 0.9s linear both';
    }

    timeout4 = setTimeout(show1,1000);
}

function show1()
{
    id('div5h').style.webkitAnimation = 'out_div5h 1.2s ease-in both';
    id('div5v').style.webkitAnimation = 'out_div5h 1.2s ease-in both';

    if(image_url_index == Onload_imgs_url.length)
        image_url_index = 0;
    setImage('11');
    image_url_index++;
    if(image_url_index == Onload_imgs_url.length)
        image_url_index = 0;
    setImage('12');
    image_url_index++;

    id('div12h').style.webkitAnimation = 'in_fadedown1 1.6s 0.9s ease-in-out both';
    id('div11h').style.webkitAnimation = 'in_fadedown1 1.6s 1.2s ease-in-out both';
    id('div12v').style.webkitAnimation = 'in_fadedown1 1.6s 0.9s ease-in-out both';
    id('div11v').style.webkitAnimation = 'in_fadedown1 1.6s 1.2s ease-in-out both';

    timeout5 = setTimeout(show2,4500)
}
function show2()
{
    id('div12h').style.webkitAnimation = 'out_fadedown 1.6s ease-in both';
    id('div11h').style.webkitAnimation = 'out_fadedown 1.6s ease-in 0.5s both';
    id('div12v').style.webkitAnimation = 'out_fadedown 1.6s ease-in both';
    id('div11v').style.webkitAnimation = 'out_fadedown 1.6s ease-in 0.5s both';

    if(image_url_index == Onload_imgs_url.length)
        image_url_index = 0;
    setImage('2');
    image_url_index++;

    id('div2v').style.webkitAnimation = 'in_fadedown1 1.8s 2.2s ease-out both';
    id('div2h').style.webkitAnimation = 'in_fadedown1 1.8s 2.2s ease-out both';

    timeout6 = setTimeout(show3,5000)
}
function show3()
{
    id('div2v').style.webkitAnimation = 'out_fadedown 1.5s ease-in both';
    id('div2h').style.webkitAnimation = 'out_fadedown 1.5s ease-in both';

    if(image_url_index == Onload_imgs_url.length)
        image_url_index = 0;
    setImage('3');
    image_url_index++;

    id('div3h').style.webkitAnimation = 'in_faderight 1.5s 1.4s ease-out both';
    id('div3v').style.webkitAnimation = 'in_faderight 1.5s 1.4s ease-out both';

    timeout7 = setTimeout(show4,4000);
}
function show4()
{
    id('div3h').style.webkitAnimation = 'out_fadeup 1.5s ease-in both';
    id('div3v').style.webkitAnimation = 'out_fadeup 1.5s ease-in both';

    if(image_url_index == Onload_imgs_url.length)
        image_url_index = 0;
    setImage('4');
    image_url_index++;

    id('div4h').style.webkitAnimation = 'in_faderotateh 1.5s 0.8s ease-out both';
    id('div4v').style.webkitAnimation = 'in_faderotateh 1.5s 0.8s ease-out both';

    xianindex = 1;
    timeout8 = setTimeout(function()
    {
        id('xian').style.top = '150px';
        id('xuehua1').style.webkitAnimation = 'xuehua1 3s .5s ease-out forwards'
        xian = setInterval(xian_ani,50);
    },2300)
    setTimeout(show5,4000);
}
function show5()
{
    id('div4h').style.webkitAnimation = 'out_faderotateh 1.5s ease-in both';
    id('div4v').style.webkitAnimation = 'out_faderotateh 1.5s ease-in both';

    if(image_url_index == Onload_imgs_url.length)
        image_url_index = 0;
    setImage('5');
    image_url_index++;

    id('div5h').style.webkitAnimation = 'in_div5h 2s ease-out both';
    id('div5v').style.webkitAnimation = 'in_div5h 2s ease-out both';

    timeout9 = setTimeout(show1,4000);
}

var xianindex = 1
var src='<?=$p?>images/xian';
function xian_ani()
{
    if(xianindex == 38)
    {
        xianindex = 1;
        clearInterval(xian);
        return;
    }
    xianindex++;
    id('xian').src=src+xianindex+'.png';
}
var divwidth = {'11h':441,'12h':441,'11v':280,'12v':280,'2h':450,'2v':440,'3h':450,'3v':440,'4h':441,'4v':381,'5h':448,'5v':364};
var divheight = {'11h':297,'12h':297,'11v':420,'12v':420,'2h':344,'2v':661,'3h':344,'3v':661,'4h':300,'4v':552,'5h':317,'5v':551};

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
    // console.log(width,height,img.style.left,img.style.top,img.width,img.height);
}
var xiannum = 0;
function loadxianimage()
{
    var imgname = '<?=$p?>images/xian';
    for(var imgindex = 1;imgindex<39;imgindex++)
    {
        var img = new Image();
        img.src = imgname + imgindex + '.png';
        img.onload = xianonload;
    }
}
function xianonload()
{
    xiannum++;
    if(xiannum == 38)
    {
        showtitle();
    }
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
    id('div11h').style.display = 'none';
    id('div12h').style.display = 'none';
    id('div11v').style.display = 'none';
    id('div12v').style.display = 'none';
    id('div2h').style.display = 'none';
    id('div2v').style.display = 'none';
    id('div3h').style.display = 'none';
    id('div3v').style.display = 'none';
    id('div4h').style.display = 'none';
    id('div4v').style.display = 'none';
    id('div5h').style.display = 'none';
    id('div5v').style.display = 'none';
    id('div11h').style.webkitAnimation = '';
    id('div12h').style.webkitAnimation = '';
    id('div11v').style.webkitAnimation = '';
    id('div12v').style.webkitAnimation = '';
    id('div2h').style.webkitAnimation = '';
    id('div2v').style.webkitAnimation = '';
    id('div3h').style.webkitAnimation = '';
    id('div3v').style.webkitAnimation = '';
    id('div4h').style.webkitAnimation = '';
    id('div4v').style.webkitAnimation = '';
    id('div5h').style.webkitAnimation = '';
    id('div5v').style.webkitAnimation = '';
    id('xian').src='<?=$p?>images/xian38.png';
    xiannum = 0;
    xianindex = 1;
    id('xuehua1').style.webkitAnimation = '';
    id('line1').style.webkitAnimation = '';
    id('line2').style.webkitAnimation = '';
    id('line3').style.webkitAnimation= '';
    id('linetop').style.webkitAnimation = '';
    id('linebottom').style.webkitAnimation = '';
    clearInterval(xian);
    
}
</script>