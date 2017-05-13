<?
$p=$_WEITE['web_pic_url']."liming/";
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
    height: 100%;
    position: absolute;
    overflow: hidden;
}
#container >div,#container > img
{
    position: absolute;
}
#guang1
{
    left: 40px;
    top: 455px;
    -webkit-animation: guangyun 5s linear infinite;
    -webkit-transform-origin: 50% 100%;
}
#di
{
    left: 0px;
    top: 598px;
}

#yun1,#yun4
{
    left: -159px;
    top: -92px;
    width: 800px;
    -webkit-animation: yun1 50s linear infinite;
    position: absolute;
}
#yun2,#yun5
{
    left: 407px;
    top: -247px;
    width: 800px;
    -webkit-animation: yun2 30s linear infinite;
    position: absolute;
}
#yun3,#yun6
{
    left: 500px;
    top: -150px;
    width: 800px;
    -webkit-animation: yun3 40s 10s linear infinite;
    position: absolute;
}
#bird1
{
    left: 243px;
    top: 615px;
    -webkit-transform: scale(0.3);
    -webkit-animation: niao_1 15s ease-in infinite;
    opacity: 0;
}
#bird1ying
{
    left: 242px;
    top: 687px;
    -webkit-transform: scale(0.3,-0.3);
    -webkit-animation: niao_2 15s ease-in infinite;
    opacity: 0;
}
.yundiv
{
    width: 500px;
    height: 500px;
    position: absolute;
}
#yundiv1
{
    position: absolute;
    top: 500px;
    -webkit-transform: scale(1,-0.2);
    opacity: 0.3;
}
#bird2
{
    position: absolute;
    -webkit-transform: scale(0.3);
    left: 473px;
    top: 606px;
    -webkit-animation: niao2 23s linear infinite;
}
#bird2ying
{
    position: absolute;
    -webkit-transform: scale(0.3,-0.3);
    left: 473px;
    top: 681px;
    -webkit-animation: niao2ying 23s linear infinite;

}
#div1>div
{
    position: absolute;
}
.divh
{
    left: 17px;
    top: 192px;
    position: absolute;
    background-color: #fff;
    width: 467px;
    height: 290px;
    overflow: hidden;
}
.divv
{
    left: 62px;
    top: 108px;
    position: absolute;
    background-color: #fff;
    width: 375px;
    height: 520px;
    overflow: hidden;
}
.kuangv
{
    left: 43px;
    top: 86px;
    position: absolute;
}
.kuangh
{
    left: 17px;
    top: 170px;
    position: absolute;
}
#div1h,#div1v,#div2v,#div2h
{
    /*-webkit-transform: translate(500px,0px);*/
    position: absolute;
}
#div1,#div2
{
    -webkit-transform: translate(500px,0px);
    width: 500px;
    height: 815px;
}
</style>
<style type="text/css">
@-webkit-keyframes guangyun
{
    0%   {opacity: 0}
    42%  {opacity: 1;-webkit-transform: scale(1);}
    100% {opacity: 0;-webkit-transform: scale(1.2);}
}
@-webkit-keyframes yunmove
{
    0%  {opacity: 0.2;-webkit-transform: translate(0px,0px) scale(1,-0.2);}
    50% {opacity: 0.5;-webkit-transform: translate(-500px,0px) scale(1,-0.2);}
    100%{opacity: 0.2;-webkit-transform: translate(-1000px,0px) scale(1,-0.2);}
}
@-webkit-keyframes yun1
{
    0%  {-webkit-transform: translate(0px,0px);opacity: 0.7}
    33% {-webkit-transform: translate(-520px,0px);opacity: 0.7}
    35% {-webkit-transform: translate(-520px,0px);opacity: 0}
    36% {-webkit-transform: translate(630px,0px);opacity: 0}
    40% {-webkit-transform: translate(630px,0px);opacity: 0}
    100%{-webkit-transform: translate(0px,0px);opacity: 0.7}
}
@-webkit-keyframes yun2
{
    from  {-webkit-transform: translate(0px,0px) scale(1,0.8);}
    to    {-webkit-transform: translate(-1200px,0px) scale(1,0.8);}
}
@-webkit-keyframes yun3
{
    from  {-webkit-transform: translate(0px,0px) scale(1,-1);}
    to    {-webkit-transform: translate(-1300px,0px) scale(1,-1);}
}
@-webkit-keyframes niao_1
{
    0%   {-webkit-transform: scale(0.3);opacity: 0}
    30%   {-webkit-transform: scale(0.3);opacity: 0}
    32%  {-webkit-transform: scale(0.1);opacity: 1}
    100% {-webkit-transform: translate(-324px,-181px) scale(0.8);opacity: 1}
}
@-webkit-keyframes niao_2
{
    0%  {-webkit-transform: scale(0.3,-0.3);opacity: 0}
    30%  {-webkit-transform: scale(0.3,-0.3);opacity: 0}
    32%  {-webkit-transform: scale(0.1,-0.1);opacity: 1}
    100%{-webkit-transform: translate(-324px,105px) scale(0.8,-0.8);opacity: 1} 
}
@-webkit-keyframes niao2
{
    0%  {-webkit-transform: scale(0.2);}
    40% {-webkit-transform: scale(0.2);}
    100%{-webkit-transform: translate(-538px,140px) scale(0.4);}
}
@-webkit-keyframes niao2ying
{
    0%  {-webkit-transform: scale(0.2,-0.2);}
    40% {-webkit-transform: scale(0.2,-0.2);}
    100%{-webkit-transform: translate(-538px,100px) scale(0.4,-0.4);}
}
@-webkit-keyframes fadein_left
{
    from  {opacity: 0;-webkit-transform: translate(500px,0px);}
    to    {opacity: 1;-webkit-transform: translate(0px,0px);}
}
@-webkit-keyframes fadeout_left
{
    from  {opacity: 1;-webkit-transform: translate(0px,0px);}
    to    {opacity: 0;-webkit-transform: translate(-500px,0px);}
}
@-webkit-keyframes fadeout_down
{
    from  {opacity: 1;-webkit-transform: translate(0px,0px);}
    to    {opacity: 0;-webkit-transform: translate(0px,500px);}
}
@-webkit-keyframes fadein_down
{
    from  {opacity: 0;-webkit-transform: translate(0px,-500px);}
    to    {opacity: 1;-webkit-transform: translate(0px,0px);}
}
@-webkit-keyframes fadein_up
{
    from  {opacity: 0;-webkit-transform: translate(0px,500px);}
    to    {opacity: 1;-webkit-transform: translate(0px,0px);}
}
@-webkit-keyframes fadeout_up
{
    from  {opacity: 1;-webkit-transform: translate(0px,0px);}
    to    {opacity: 0;-webkit-transform: translate(-500px,0px);}
}
@-webkit-keyframes fadeout_center
{
    from  {opacity: 1;-webkit-transform: scale(1);}
    to    {opacity: 0;-webkit-transform: scale(.4);}
}
</style>

<div id='container'>
    <img src='<?=$p?>images/bg.jpg'>
    <img id='guang1' src='<?=$p?>images/guang01.png'>
    <img id='di' src='<?=$p?>images/di.png'>

    <div id='yundiv' class='yundiv'>
        <img id='yun1' src='<?=$p?>images/yun.png'>
        <img id='yun2' src='<?=$p?>images/yun.png'>
        <img id='yun3' src='<?=$p?>images/yun.png'>
    </div>

    <div id='yundiv1' class='yundiv'>
        <img id='yun4' src='<?=$p?>images/yun.png'>
        <img id='yun5' src='<?=$p?>images/yun.png'>
        <img id='yun6' src='<?=$p?>images/yun.png'>
    </div>

    <img id='bird1' src='<?=$p?>images/b1.gif'>
    <img id='bird1ying' src='<?=$p?>images/b2.gif'>

    <img id='bird2' src='<?=$p?>images/b1.gif'>
    <img id='bird2ying' src='<?=$p?>images/b2.gif'>

    <div id='pagetitle' style='position:absolute;width:398px;height:250px;top:192px;left:51px;font-size:40px;color:#013490;-webkit-transform-origin: 100% 50%;-webkit-transform: translate(500px,0px)'>
        <img src='<?=$p?>images/biaoyti.png'>
        <div style='position:absolute;width:324px;height:250px;top:0px;left:35px;overflow:hidden;'>
            <div style='position:absolute;width:324px;height:250px;display:table;overflow:hidden;'>
                <div id='titlecontent' style='width:324px;height:250px;vertical-align:middle;display:table-cell;text-align:center;font-size:30px;line-height:50px;'></div>
            </div>
        </div>
    </div>

    <div id='div1'>
        <div id='div1h'>
            <img class='kuangh' src='<?=$p?>images/32heng.png'>
            <div class='divh'>
               <img id='img1h' style='position:absolute'>
            </div>
        </div>

        <div id='div1v'>
            <img class='kuangv' src='<?=$p?>images/32kuang.png'>
            <div class='divv'>
                <img id='img1v' style='position:absolute'>
            </div>
        </div>
    </div>

    <div id='div2'>
        <div id='div2h'>
            <img class='kuangh' src='<?=$p?>images/32heng.png'>
            <div class='divh'>
               <img id='img2h' style='position:absolute'>
            </div>
        </div>

        <div id='div2v'>
            <img class='kuangv' src='<?=$p?>images/32kuang.png'>
            <div class='divv'>
                <img id='img2v' style='position:absolute'>
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

var delaytime=5000;
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
            liangziyun_kawa();
        }
        else
        {
            dis_titletime = delaytime- dis_titletime;
            timeout0 = setTimeout(function()
                {
                    liangziyun_kawa();
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
            liangziyun_kawa();
        }
        else
        {
            dis_titletime = delaytime- dis_titletime;
            timeout0 = setTimeout(function()
                {
                    liangziyun_kawa();
                },dis_titletime);
        }

    }
}
function showtitle()
{
    id('pagetitle').style.webkitAnimation = 'fadein_left 1.5s cubic-bezier(.27,.4,.83,1) both';
    id('titlecontent').innerHTML = e_desc;

}

function liangziyun_kawa()
{
    id('pagetitle').style.webkitAnimation = 'fadeout_left 2s ease-in both';
    show1();
}

function show1()
{
    setImage('1');
    id('div1').style.webkitAnimation = 'fadein_left 2s ease-out both';

    timeout1 = setTimeout(show2,5000)
}

function show2()
{
    setImage('2');
    id('div1').style.webkitAnimation = 'fadeout_left 1.5s ease-in both';
    id('div2').style.webkitAnimation = 'fadein_left 2s ease-out both';

    timeout2 = setTimeout(show3,5000)
}

function show3()
{
    setImage('1');
    id('div2').style.webkitAnimation = 'fadeout_left 1.5s ease-in both';
    id('div1').style.webkitAnimation = 'fadein_left 2s ease-out both';

    timeout3 = setTimeout(show4,5000)
}

function show4()
{
    setImage('2');
    id('div1').style.webkitAnimation = 'fadeout_down 1.5s ease-in both';
    id('div2').style.webkitAnimation = 'fadein_down 2s ease-out both';

    timeout4 = setTimeout(show5,5000)
}

function show5()
{
    setImage('1');
    id('div2').style.webkitAnimation = 'fadeout_up 1.5s ease-in both';
    id('div1').style.webkitAnimation = 'fadein_up 2s ease-out both';

    timeout5 = setTimeout(show6,5000)
}

function show6()
{
    setImage('2');
    id('div1').style.webkitAnimation = 'fadeout_center 1.5s ease-in both';
    id('div2').style.webkitAnimation = 'fadein_left 2s ease-out both';

    timeout6 = setTimeout(show3,5000);
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
        width = 467;
        height = 300;
    }
    else
    {
        divname = idname + 'v';
        div = id('div'+idname+'v');
        div1 = id('div'+idname+'h');
        width = 375;
        height = 520;
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
    id('div1').style.webkitAnimation = '';
    id('div2').style.webkitAnimation = '';
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
