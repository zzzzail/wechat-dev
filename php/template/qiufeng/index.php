<?
$p=$_WEITE['web_pic_url']."qiufeng/";
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
    #back
    {
        position: absolute;
    }
    #houye,#qianye,#fenggai,#mupai,#img_box,#img_box1,#dingzuo,#dingyou,#qianmu,#houmu,#xiaye,#zuosuo,#yousuo
    {
        position: absolute;
    }
    #houye
    {
        left: 200px;
        top: -30px;
        -webkit-animation: houyemove 2s linear infinite alternate;
    }
    #qianye
    {
        left: -30px;
        -webkit-animation: qianyemove 2s linear infinite alternate;
    }
    #mupai
    {
        width: 460px;
        height: 610px;
        top: 110px;
        left:23px;
/*        -webkit-transform: translate(-10px,0px);*/
        -webkit-animation: mupaimove 2s linear infinite alternate;
    }
    #img_box, #img_box1
    {
        /*background-color: #ffffff;*/
        width: 320px;
        height: 445px;
        top: 105px;
        left: 75px;
        overflow: hidden;
    }
    #dingzuo
    {
        top: 106px;
        left: 77px;
        width: 35px;
    }
    #dingyou
    {
        width: 35px;
        top: 106px;
        left: 352px;
    }
    #houmu
    {
        left: -5px;
        -webkit-transform-origin: 50% 0%;
        -webkit-animation: houmumove 2s linear infinite alternate;
    }
    #qianmu
    {
        top: 63px;
        left: -40px;
        width: 200px;
        height: 770px;
        -webkit-transform-origin: 0% 100%;
        -webkit-animation: qianmumove 3s linear infinite alternate;
    }
    #xiaye
    {
        top: 385px;
        left: -30px;
        -webkit-animation: xiayemove 3s linear infinite alternate;
        -webkit-transform-origin: 60% 70%;
    }
    #zuosuo
    {
        top: 30px;
        left: 35px;
        -webkit-transform-origin: 50% 0%;
        /*-webkit-transform: rotate(2.5deg);*/
        -webkit-animation: yaobai 2s linear infinite alternate;
    }
    #yousuo
    {
        top: 30px;
        left: 445px;
        -webkit-transform-origin: 50% 0%;
        -webkit-animation: yaobai 2s linear infinite alternate;
    }
    @-webkit-keyframes yaobai
    {
        from {-webkit-transform: rotate(-2.5deg);}
        to   {-webkit-transform: rotate(2.5deg);}
    }
    @-webkit-keyframes mupaimove
    {
        from {-webkit-transform: translate(10px,0px);}
        to   {-webkit-transform: translate(-10px,0px);}
    }
    @-webkit-keyframes qianmumove
    {
        from {-webkit-transform: rotate(1.5deg);}
        to   {-webkit-transform: rotate(0deg);}
    }
    @-webkit-keyframes houmumove
    {
        from {-webkit-transform: translate(0px,0px);}
        to   {-webkit-transform: translate(-7px,0px);}
    }
    @-webkit-keyframes xiayemove
    {
        from {-webkit-transform: translate(5px,0px) rotate(2deg);}
        to   {-webkit-transform: translate(0px,0px) rotate(0deg);}
    }
    @-webkit-keyframes houyemove
    {
        from {-webkit-transform: translate(15px,0px);}
        to   {-webkit-transform: translate(0px,0px);}
    }
    @-webkit-keyframes qianyemove
    {
        from {-webkit-transform: translate(5px,0px);}
        to   {-webkit-transform: translate(0px,0px);}
    }
    @-webkit-keyframes fade
    {
        0%  {opacity: 1}
        20%    {opacity: 0}
        100% {opacity: 0}
    }
    canvas
    {
        position: absolute;
        -webkit-transform-origin: 0% 0%;
        top: 0px;
        left: 0px;
    }
    .img_con
    {
        position: absolute;
        left: 0px;
        top: 0px;
    }
    #canvas1
    {
         /*-webkit-animation: fade 5s linear 5s infinite alternate;*/
    }
    @-webkit-keyframes blurbox
    {
        0%   {opacity: 0}
        15%  {opacity: 1}
        85%  {opacity: 1}
        100% {opacity: 0}
    }
    @-webkit-keyframes blurimg
    {
        0%   {opacity: 1}
        15%  {opacity: 1}
        30%  {opacity: 0}
        70%  {opacity: 0}
        85%  {opacity: 1}
        100% {opacity: 1}
    }
    @-webkit-keyframes first_box
    {
        0%   {opacity: 1}
        80%  {opacity: 1}
        100% {opacity: 0}
    }
/*    @-webkit-keyframes first_canvas
    {
        0%   {opacity: 0}
        60%　{opacity: 0}
        75%  {opacity: 1;-webkit-animation-timing-function:ease-out;}
        100% {opacity: 0}
    }*/
    @-webkit-keyframes first_img
    {
        0%   {opacity: 1}
        50%  {opacity: 1}
        80%  {opacity: 0}
        100% {opacity: 0}
    }
    @-webkit-keyframes second_box
    {
        0%   {opacity: 0}
        15%  {opacity: 1}
        85%  {opacity: 1}
        100% {opacity: 0}
    }
/*    @-webkit-keyframes second_canvas
    {
        0%  {opacity: 1}
        15% {opacity: 1}
        30% {opacity: 0}
        60% {opacity: 0}
        85% {opacity: 1}
        100%{opacity: 1}
    }*/
    @-webkit-keyframes second_img
    {
        0%  {opacity: 0}
        15% {opacity: 0}
        30% {opacity: 1}
        60% {opacity: 1}
        85% {opacity: 0}
        100%{opacity: 0}
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
    @-webkit-keyframes feng3
    {
        0%  {-webkit-transform: translate(0px,0px)}
        70% {-webkit-transform: translate(600px,800px)}
        100% {-webkit-transform: translate(600px,800px)}
    }
    @-webkit-keyframes fengye3
    {
        from  {-webkit-transform: rotate(0deg);}
        to    {-webkit-transform: rotate(20deg);}
    }
    @-webkit-keyframes fengye
    {
        0%  {-webkit-transform: translate(0px,0px) rotate(0deg);}
        60% {-webkit-transform: translate(700px,400px) rotate(540deg);}
        100%{-webkit-transform: translate(700px,400px) rotate(540deg);}
    }
    @-webkit-keyframes fengye1
    {
        0%  {-webkit-transform: translate(0px,0px) rotate(0deg);}
        60% {-webkit-transform: translate(500px,700px) rotate(360deg);}
        100% {-webkit-transform: translate(500px,700px) rotate(360deg);}
    }
    @-webkit-keyframes fengye2
    {
        0%  {-webkit-transform: translate(0px,0px) rotate(0deg);}
        80% {-webkit-transform: translate(300px,950px) rotate(360deg);}
        100% {-webkit-transform: translate(300px,950px) rotate(360deg);}
    }
    @-webkit-keyframes fengye4
    {
        0%   {-webkit-transform: translate(0px,0px) rotate(0deg);}
        50%  {-webkit-transsform: translate(125px,350px) rotate(360deg);}
        /*80% {-webkit-transform: translate(250px,700px) rotate(540deg);}*/
        100% {-webkit-transform: translate(250px,700px) rotate(540deg);}
    }
    @-webkit-keyframes fengye5
    {
        0%  {-webkit-transform: translate(0px,0px)}
        60% {-webkit-transform: translate(400px,480px)}
        100%{-webkit-transform: translate(400px,480px)}
    }
    @-webkit-keyframes fengye6
    {
        from  {-webkit-transform: rotate(0deg);}
        to    {-webkit-transform: rotate(360deg);}
    }
    #img1,#img
    {
        box-shadow: 3px 3px 10px #000;
    }
    @-webkit-keyframes aa_in_fade_down
    {
        0%{
            opacity:0;
            -webkit-transform:translateY(-50px)
        }
        100%{
            opacity:1;
            -webkit-transform:translateY(0)
        }
    }

    @-webkit-keyframes aa_out_fade_down
    {
       0%{
            opacity:1;
            -webkit-transform:translateY(0)
        }
       100%{
            opacity:0;
            -webkit-transform:translateY(50px)
        }
    }
</style>
<script type="text/javascript" src='<?=$p?>images/StackBlur.js'></script>
<div id='container'>
    <img id='back' src='<?=$p?>images/bg.jpg' style='opacity:0.5;width:500px;height:815px;'>

    <img id='houmu' src='<?=$p?>images/houmu.png'>

    <img src='<?=$p?>images/fengyuan.png' style='position:absolute;top:123px;left:-100px;-webkit-animation: fengye 12s linear infinite'>
    <img src='<?=$p?>images/fengyuan.png' style='position:absolute;top:200px;left:-100px;-webkit-animation: fengye1 15s 5s linear infinite'>
    <img src='<?=$p?>images/fengyuan.png' style='position:absolute;top:-100px;left:100px;-webkit-animation: fengye2 10s 8s linear infinite'>
    <img id='qianmu' src='<?=$p?>images/qianmu.png'>


    <img id='zuosuo' src='<?=$p?>images/zuo.png'>
    <img id='yousuo' src='<?=$p?>images/yousuo.png'>

    <div id='mupai'>
        <img src='<?=$p?>images/mupai.png' style='width:460px;'>
            <div id='img_box' style='display:none'>
                <div id='img_con' class='img_con'>
                    <canvas id='canvas'></canvas>
                    <img id='img'  width='310' style='position:absolute;left:0px;top:0px;'>
                </div>
            </div>

            <div id='img_box1' style='opacity:0'>
                <div id='img_con1' class='img_con'>
                    <canvas id='canvas1'></canvas>
                    <img id='img1' width='310' style='position:absolute;left:0px;top:0px;'>
                </div>
            </div>

        <img id='dingzuo' src='<?=$p?>images/ding.png'>
        <img id='dingyou' src='<?=$p?>images/ding.png'>

        <div id='pagetitle' style='position:absolute;width:356px;height:200px;top:217px;left:53px;font-size:35px;color:#653C29;overflow:hidden;opacity:1;'>
            <div style='display:table;width:336px;height:200px;top:0px;left:10px;position:absolute;text-align:center;overflow:hidden;position:absolute;'>
                <div id='titlecontent' style='display:table-cell;width:336px;height:200px;vertical-align:middle;line-height:150%;oveflow:hidden;position:absolute;'></div>
            </div>
        </div>

    </div>

    <div style='position:absolute;left:94px;top:102px;-webkit-animation: fengye5 13s 8s linear infinite'>
        <img src='<?=$p?>images/ye.png' style='position:absolute;-webkit-animation: fengye6 8s linear infinite'>
        <img src='<?=$p?>images/ying.png' style='opacity:0.7;position:absolute;top:20px;left:40px;-webkit-animation: fengye6 8s linear infinite'>
    </div>
    <img src='<?=$p?>images/ye.png' style='position:absolute;top:56px;left:255px;-webkit-animation: fengye4 10s linear infinite'>
    <img id='houye' src='<?=$p?>images/houye.png'>

    <img id='xiaye' src='<?=$p?>images/xiaye.png'>
    <img id='qianye' src='<?=$p?>images/houye.png'>

    <img id='fenggai' src='<?=$p?>images/fenga.png'>

    <div style='position:absolute;top:-100px;left:-100px;-webkit-animation: feng3 13s 3s linear infinite;'>
        <img src='<?=$p?>images/fengyuan3.png' style='position:absolute;-webkit-animation: fengye3 3s ease-in-out infinite alternate'>
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
var delaytime = 4000;
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

    id('img1').style.webkitAnimation = '';
    id('img').style.webkitAnimation = '';
    id('img_box1').style.webkitAnimation = '';
    id('img_box').style.webkitAnimation = '';
    clearTimeout(timeout0);
    clearTimeout(timeout1);
    clearTimeout(timeout2);
    clearTimeout(timeout3);
    canshow = true;


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
    id('pagetitle').style.webkitAnimation = 'aa_in_fade_down 1s linear both';
    id('titlecontent').innerHTML = e_desc;
}
function distitle()
{
    id('pagetitle').style.webkitAnimation = 'aa_out_fade_down 1s linear both';
    setTimeout(first_show,1000);
}
function image_onload(event)
{
    if(reshow == true)
        return;

    var img=event.target;
    var index = img.index;
    if(index<10)
        have_num++;
    console.log(Onload_imgs_url[index]);
    console.log(have_num + '-' + error_num);
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

function first_show() //第一张模糊淡化
{
    if(reshow == true)
            return;
    id('img_box').style.display = 'block';
    while(Onload_imgs_url[image_url_index] == 'not find' || Onload_imgs_url[image_url_index] == 'loading')
    {
        console.log(Onload_imgs_url[image_url_index]);
        image_url_index++;
        if(image_url_index == Onload_imgs_url.length)
            image_url_index = 0;
    }
    id('img').src = Onload_imgs_url[image_url_index];
    var canvas = id('canvas');
    // canvas.style.opacity = 0;
    var cxt = canvas.getContext('2d');

    var n_img = new Image();
    n_img.id = 'n_img';
    n_img.crossOrigin = 'anonymous';
    n_img.src = Onload_imgs_url[image_url_index];
    console.log(n_img.src);
    canvas.appendChild(n_img);

    n_img.onload = function()
    {
        if(reshow == true)
            return;
        var canvas = id('canvas');
        stackBlurImage('n_img','canvas',50);
        var canvas_bili = 310/canvas.width;
        canvas.style.webkitTransform = 'scale('+canvas_bili+')';
        cut_images('img_con');

        timeout1 = setTimeout(second_show,1000);
    }
}

function cut_images(pagename)
{
    if(reshow == true)
            return;
    var img_bili = image_size_width[image_url_index]/image_size_height[image_url_index];
    var img_obj = id(pagename);
    if(img_bili<(310/445))
    {
        img_obj.style.top = -((310/img_bili-445)/2)+'px';
    }
    else
    {
        img_obj.style.top = '0px';
    }
}

function second_show()
{
    if(reshow == true)
            return;
    image_url_index++;
    if(image_url_index ==  Onload_imgs_url.length)
    {
        image_url_index = 0;
    }
    while(Onload_imgs_url[image_url_index] == 'not find' || Onload_imgs_url[image_url_index] == 'loading')
    {
        console.log(Onload_imgs_url[image_url_index]);
        image_url_index++;
        if(image_url_index == Onload_imgs_url.length)
            image_url_index = 0;
    }
    id('img_box1').style.opacity = 0;
    id('img_box1').style.webkitAnimation = '';
    id('img1').style.webkitAnimation = '';
    id('img1').src = Onload_imgs_url[image_url_index];
    console.log(id('img1').src);
    var canvas = id('canvas1');
    if(id('n_img1'))
        canvas.removeChild(id('n_img1'));
    var cxt = canvas.getContext('2d');

    var n_img = new Image();
    n_img.id = 'n_img1';
    n_img.crossOrigin = 'anonymous';
    n_img.src = Onload_imgs_url[image_url_index];
    canvas.appendChild(n_img);

    n_img.onload = function()
    {
        if(reshow == true)
            return;
        var canvas = id('canvas1');
        stackBlurImage('n_img1','canvas1',50);
        var canvas_bili = 310/canvas.width;
        canvas.style.webkitTransform = 'scale('+canvas_bili+')';
        cut_images('img_con1');

        id('img_box').style.webkitAnimation = 'fadeout 1s linear 1s both';
        id('img').style.webkitAnimation = 'fadeout 1.5s linear forwards';

        id('img1').style.opacity = 0;
        id('img_box1').style.webkitAnimation = 'fadein 1s linear 1s both';
        id('img1').style.webkitAnimation = 'fadein 1s 2s linear both';


        timeout2 = setTimeout(third_show,4000);
    }
}

function third_show()
{
    if(reshow == true)
            return;
    image_url_index ++;
    if(image_url_index == Onload_imgs_url.length)
    {
        image_url_index = 0;
    }
    while(Onload_imgs_url[image_url_index] == 'not find' || Onload_imgs_url[image_url_index] == 'loading')
    {
        console.log(Onload_imgs_url[image_url_index]);
        image_url_index++;
        if(image_url_index == Onload_imgs_url.length)
            image_url_index = 0;
    }
    id('img_box').style.opacity = 0;
    id('img_box').style.webkitAnimation = '';
    id('img').style.webkitAnimation = '';
    id('img').src = Onload_imgs_url[image_url_index];
    console.log(id('img').src);
    var canvas = id('canvas');
    canvas.removeChild(id('n_img'));
    var cxt = canvas.getContext('2d');

    var n_img = new Image();
    n_img.id = 'n_img';
    n_img.crossOrigin = 'anonymous';
    n_img.src = Onload_imgs_url[image_url_index];
    canvas.appendChild(n_img);

    n_img.onload = function()
    {
        if(reshow == true)
            return;
        var canvas = id('canvas');
        stackBlurImage('n_img','canvas',50);
        var canvas_bili = 310/canvas.width;
        canvas.style.webkitTransform = 'scale('+canvas_bili+')';
        cut_images('img_con');

        id('img_box1').style.webkitAnimation = 'fadeout 1s linear 1s both';
        id('img1').style.webkitAnimation ='fadeout 1s linear forwards';
        id('img_box').style.webkitAnimation = 'fadein 1s linear 1s both';
        id('img').style.webkitAnimation = 'fadein 1s linear 2s both';

        timeout3 = setTimeout(second_show,4000);
    }

}

call_me(load_images);

// function reload_scene()
// {
//     reshow = true;
//     id('titlecontent').innerHTML = '';
//     id('pagetitle').style.webkitAnimation = '';
//     id('img_box1').style.webkitAnimation = '';
//     id('img1').style.webkitAnimation ='';
//     id('img_box').style.webkitAnimation = '';
//     id('img').style.webkitAnimation = '';

//     setTimeout(load_images,100);
// }
</script>