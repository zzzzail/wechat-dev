<?
$p=$_WEITE['web_pic_url']."qingfengdieying/";
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
    #ye1
    {
        position: absolute;
        top: -10px;
        left: 0px;
        -webkit-transform-origin: 20% 0%;
        -webkit-animation: ye1 2s linear infinite alternate;
    }
    #ye2
    {
        position: absolute;
        top: 0px;
        left: 290px;
        -webkit-transform-origin: 50% 0%;
        -webkit-animation: ye1 2s linear 1s infinite alternate;
    }
    #container > img
    {
        position: absolute;
    }
    #qianhua
    {
        top: 549px;
        left: 153px;
    }
    .shengzi
    {
        position: absolute;
        top: -47px;
        left: 200px;
        width: 121px;
        height: 251px;
        -webkit-transform-origin: 50% 0%;
        -webkit-animation: shengzi 2s ease-in-out infinite alternate;
    }
    #imgbox
    {
        position: absolute;
        width: 347px;
        height: 485px;
        background-color: #fff;
        left: -121px;
        top: 202px;
        -webkit-transform: rotate(7deg);
    }
    #star
    {
        top: 660px;
        left: 380px;
        width: 60px;
        -webkit-animation: star 2s ease infinite alternate;
    }
    @-webkit-keyframes ye1
    {
        from {-webkit-transform: translate(0px,0px) rotate(0deg);}
        to   {-webkit-transform: translate(-5px,0px) rotate(2deg);}
    }
    @-webkit-keyframes star
    {
        from {-webkit-transform: rotate(0deg) scale(0.6,0.6);opacity: 0.7}
        to   {-webkit-transform: rotate(60deg) scale(1,1);opacity: 1}
    }
    @-webkit-keyframes chi2
    {
        from {-webkit-transform: rotateY(0deg);}
        to   {-webkit-transform: rotateY(60deg);}
    }
    @-webkit-keyframes chi1
    {
        from {-webkit-transform: rotateY(0deg) scale(-1,1);}
        to   {-webkit-transform: rotateY(60deg) scale(-1,1);}
    }
    .hudie
    {
        position: absolute;
        width: 150px;
        height: 200px;
    }
    .chi1
    {
        position: absolute;
        left: 62px;
        -webkit-transform: scale(-1,1);
        -webkit-transform-origin: 0% 50%;
        -webkit-animation: chi1 0.5s ease-out infinite alternate;
    }
    .chi2
    {
        position: absolute;
        left: 60px;
        -webkit-transform-origin: 0% 50%;
        -webkit-animation: chi2 0.5s ease-out infinite alternate;
    }
    .hudie > img
    {
        position: absolute;
    }
    .star1
    {
        width: 35px;
        opacity: 0;
        left: 39px;
        top: 80px;
        -webkit-animation: star1 2s 1.5s linear infinite;
    }
    .star3
    {
        width: 38px;
        opacity: 0;
        left: 39px;
        top: 80px;
        -webkit-animation: star3 2s linear infinite;
    }
    .star2
    {
        width: 35px;
        opacity: 0;
        left: 49px;
        top: 80px;
        -webkit-animation: star2 2s linear 0.5s infinite;
    }
    .star4
    {
        width: 45px;
        opacity: 0;
        left: 49px;
        top: 80px;
        -webkit-animation: star4 2.5s linear 1s infinite;
    }
    @-webkit-keyframes star1
    {
        0%   {-webkit-transform: translate(0px,0px) rotate(0deg) scale(0.5,0.5);opacity: 0.7}
        50%  {-webkit-transform: translate(-20px,28px) rotate(100deg) scale(1,1);opacity: 0.7}
        70%  {-webkit-transform: translate(-24px,34px) rotate(120deg) scale(1,1);opacity: 0}
        100% {opacity: 0}
    }
    @-webkit-keyframes star2
    {
        0%   {-webkit-transform: translate(0px,0px) rotate(0deg) scale(0.5,0.5);opacity: 0.7}
        50%  {-webkit-transform: translate(20px,28px) rotate(100deg) scale(1,1);opacity: 0.7}
        70%  {-webkit-transform: translate(24px,34px) rotate(120deg) scale(1,1);opacity: 0}
        100% {opacity: 0}
    }
    @-webkit-keyframes star3
    {
        0%   {-webkit-transform: translate(0px,0px) rotate(0deg) scale(0.5,0.5);opacity: 0.7}
        50%  {-webkit-transform: translate(-5px,58px) rotate(100deg) scale(1.2,1.2);opacity: 0.7}
        70%  {-webkit-transform: translate(-8px,64px) rotate(120deg) scale(1.2,1.2);opacity: 0}
        100% {opacity: 0}
    }
    @-webkit-keyframes star4
    {
        0%   {-webkit-transform: translate(0px,0px) rotate(0deg) scale(0.5,0.5);opacity: 0.7}
        50%  {-webkit-transform: translate(10px,98px) rotate(100deg) scale(1.2,1.2);opacity: 0.7}
        70%  {-webkit-transform: translate(15px,100px) rotate(120deg) scale(1.2,1.2);opacity: 0}
        100% {opacity: 0}
    }
    @-webkit-keyframes dian
    {
        0%   {-webkit-transform: translate(0px,0px);opacity: 0}
        20%  {-webkit-transform: translate(0px,-20px);opacity: 1}
        80%  {-webkit-transform: translate(0px,-100px);opacity: 0}

    }
    @-webkit-keyframes dian1
    {
        0%   {-webkit-transform: translate(0px,0px);opacity: 0}
        20%  {-webkit-transform: translate(0px,-40px);opacity: 1}
        80%  {-webkit-transform: translate(0px,-160px);opacity: 0}       
    }
    .kuang
    {
        position: absolute;
        top: 146px;
        left: -145px;
    }
    .shengzi1
    {
        position: absolute;
    }
    #dian1
    {
        top: 163px;
        left: 325px;
        width: 20px;
        opacity: 0;
        -webkit-animation: dian1 4s linear infinite;
    }
    #dian2
    {
        top: 212px;
        left: 451px;
        width: 20px;
        opacity: 0;
        -webkit-animation: dian1 4s 2s linear infinite;
    }
    #dian3
    {
        width: 40px;
        top: 630px;
        left: 5px;
        opacity: 0;
        -webkit-animation: dian 3s linear infinite;
    }
    #dian4
    {
        width: 40px;
        top: 720px;
        left: 40px;
        opacity: 0;
        -webkit-animation: dian 3s 2s linear infinite;
    }
    #dian5
    {
        width: 40px;
        top: 670px;
        left: 110px;
        opacity: 0;
        -webkit-animation: dian 3s 1s linear infinite;
    }
    @-webkit-keyframes shengzi
    {
        from {-webkit-transform: rotate(-1.5deg);}
        to   {-webkit-transform: rotate(1.5deg);}
    }
    @-webkit-keyframes fei1
    {
        0% {-webkit-transform: translate(0px,0px) rotate(0deg);}
        70% {-webkit-transform: translate(50px,-150px) rotate(90deg);}
        100% {-webkit-transform: translate(50px,-150px) rotate(90deg);}
    }
    @-webkit-keyframes fei2
    {
        0% {-webkit-transform: translate(0px,0px) rotate(0deg);}
        70% {-webkit-transform: translate(-100px,100px) rotate(-180deg);}
        100% {-webkit-transform: translate(-100px,100px) rotate(-180deg);}        
    }
    #hudiearea1
    {
        position: absolute;
        width: 450px;
        height: 450px;
        left: 50px;
        -webkit-transform-origin: 100% 0%;
        -webkit-animation: fei1 10s linear infinite;
    }
    #hudiearea2
    {
        position: absolute;
        width: 250px;
        height: 500px;
        top: -100px;
        left: 0px;
        -webkit-transform-origin: 0% 50%;
        -webkit-animation: fei2 10s 5s linear infinite;
    }
    #hudie1
    {
        -webkit-transform: scale(0.6,0.6) rotate(-90deg);
        top: 350px;
        left: 500px;
    }
    #hudie2
    {
        -webkit-transform: scale(0.4,0.4) rotate(90deg);
        top: 370px;
        left: -150px;
    }
    .imgbox
    {
        position: absolute;
        top: 221px;
        left: -105px;
        width: 333px;
        height: 400px;
        -webkit-transform: rotate(6.5deg);
        background-color: #fff;
        overflow: hidden;
    }
    .imgbox1
    {
        position: absolute;
        top: 221px;
        left: -92px;
        width: 333px;
        height: 205px;
        -webkit-transform: rotate(6.5deg);
        background-color: #fff;
        overflow: hidden;
    }
    #page1,#page2
    {
        position: absolute;
        top: 0px;
        left: 0px;
        width: 500px;
        height: 750px;
        -webkit-transform-origin: 50% -50%;
        display: none;
        /*-webkit-animation: pagein 10s linear infinite;*/
    }
    @-webkit-keyframes pagein
    {
        0%  {-webkit-transform: translate(-150px,0px) rotate(30deg);-webkit-animation-timing-function:ease-in-out;}
        25% {-webkit-transform: translate(0px,0px) rotate(-3deg);-webkit-animation-timing-function:ease-in-out;}
        37% {-webkit-transform: translate(0px,0px) rotate(2deg);-webkit-animation-timing-function:ease-in-out;}
        45% {-webkit-transform: translate(0px,0px) rotate(0deg);-webkit-animation-timing-function:ease-in-out;}
        55% {-webkit-transform: translate(0px,0px) rotate(0deg);-webkit-animation-timing-function:ease-in-out;}
        60% {-webkit-transform: translate(0px,0px) rotate(0deg);-webkit-animation-timing-function:ease-in-out;}
        70% {-webkit-transform: translate(0px,0px) rotate(3deg);-webkit-animation-timing-function:ease-in-out;}
        95%{-webkit-transform: translate(150px,0px) rotate(-30deg);-webkit-animation-timing-function:ease-in-out;}
        100%{-webkit-transform: translate(150px,0px) rotate(-30deg);-webkit-animation-timing-function:ease-in-out;}
    }
    .ying
    {
        position: absolute;
        top: 150px;
        left: -138px;
    }
    .ying1
    {
        position: absolute;
        width: 446px;
        height: 340px;
        top: 186px;
        left: -126px;
        -webkit-transform: skew(3deg,2deg);
    }
    @-webkit-keyframes fadeout
    {
        from  {opacity: 1}
        to    {opacity: 0}
    }
    @-webkit-keyframes fadein
    {
        from  {opacity: 0}
        to    {opacity: 1}
    }
</style>

<div id='container'>
    <!-- <img src='<?=$p?>images/demo.jpg'> -->
    <img src='<?=$p?>images/BG.jpg'>

    <img id='dian1' src='<?=$p?>images/dian01.png'>
    <img id='dian2' src='<?=$p?>images/dian01.png'>

    <div id='contentbox' style='position:absolute;top:0px;left:0px;opacity:0;'>
        <div id='page1'>
            <div class='shengzi' id='page_v1'>
                <img class='ying' src='<?=$p?>images/ying.png'>
                <div class='imgbox'>
                    <img id='img_v1' style='position:absolute'>
                </div>
                <img class='kuang' src='<?=$p?>images/kuang.png'>
                <img class='shengzi1' src='<?=$p?>images/shengzi.png'>
            </div>
            <div class='shengzi' id='page_h1'>
                <img class='ying1' src='<?=$p?>images/ying.png'>
                <div class='imgbox1'>
                    <img id='img_h1' style='position:absolute'>
                </div>
                <img class='kuang' src='<?=$p?>images/kuang1.png'>
                <img class='shengzi1' src='<?=$p?>images/shengzi.png'>
            </div>
        </div>
        <div id='page2'>
            <div class='shengzi' id='page_v2'>
                <img class='ying' src='<?=$p?>images/ying.png'>
                <div class='imgbox'>
                    <img id='img_v2' style='position:absolute'>
                </div>
                <img class='kuang' src='<?=$p?>images/kuang.png'>
                <img class='shengzi1' src='<?=$p?>images/shengzi.png'>
            </div>
            <div class='shengzi' id='page_h2'>
                <img class='ying1' src='<?=$p?>images/ying.png'>
                <div class='imgbox1'>
                    <img id='img_h2' style='position:absolute'>
                </div>
                <img class='kuang' src='<?=$p?>images/kuang1.png'>
                <img class='shengzi1' src='<?=$p?>images/shengzi.png'>
            </div>
        </div>
    </div>

    <div id='pagetitle' style='position:absolute;width:440px;height:200px;top:250px;left:30px;font-size:40px;color:#fff;overflow:hidden;'>
        <div style='display:table;width:440px;height:200px;top:0px;left:0px;position:absolute;text-align:center;'>
            <div id='titlecontent' style='display:table-cell;width:440px;height:200px;vertical-align:middle;padding-left:10px;padding-right:10px;line-height:65px;oveflow:hidden;text-shadow:1px 1px 1px #000'></div>
        </div>
    </div>
    <img id='qianhua' src='<?=$p?>images/qianhua.png'>
    <img id='star' src='<?=$p?>images/01.png'>

    <img id='dian3' src='<?=$p?>images/dian01.png'>
    <img id='dian4' src='<?=$p?>images/dian01.png'>
    <img id='dian5' src='<?=$p?>images/dian01.png'>
    

    <div id='hudiearea1'>
        <div class='hudie' id='hudie1'>
            <img class='chi1' src='<?=$p?>images/chi01.png'>
            <img class='chi2' src='<?=$p?>images/chi01.png'>
            <img class='star1' src='<?=$p?>images/01.png'> 
            <img class='star2' src='<?=$p?>images/01.png'> 
            <img class='star3' src='<?=$p?>images/01.png'>
            <img class='star4' src='<?=$p?>images/01.png'>
        </div>
    </div>

    <div id='hudiearea2'>
        <div class='hudie' id='hudie2'>
            <img class='chi1' src='<?=$p?>images/chi01.png'>
            <img class='chi2' src='<?=$p?>images/chi01.png'>
            <img class='star1' src='<?=$p?>images/01.png'> 
            <img class='star2' src='<?=$p?>images/01.png'> 
            <img class='star3' src='<?=$p?>images/01.png'>
            <img class='star4' src='<?=$p?>images/01.png'>
        </div>
    </div>

    <img id='ye1' src='<?=$p?>images/ye01.png'>
    <img id='ye2' src='<?=$p?>images/ye02.png'>

</div>



<script>
var image_size_width=[];
var image_size_height=[];

var image_url_index=0;
var have_num = 0;
var error_num = 0;

var canshow = true;
var reshow = false;
var timeout1;
var timeout2;
var timeout3;
var timeout4;
var timeout5;
var timeout6;
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
    id('page1').style.webkitAnimation = '';
    id('page2').style.webkitAnimation = '';
    id('page1').style.display = 'none';
    id('page2').style.display = 'none';
    clearTimeout(timeout1);
    clearTimeout(timeout2);
    clearTimeout(timeout3);
    clearTimeout(timeout4);
    clearTimeout(timeout5);
    clearTimeout(timeout6);

    begin_titletime = new Date();
    begin_titletime = begin_titletime.getTime();
    id('titlecontent').innerHTML = e_desc;
    id('pagetitle').style.webkitAnimation = '';

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

function distitle()
{
    id('pagetitle').style.webkitAnimation = 'fadeout 1s linear both';
    id('contentbox').style.webkitAnimation = 'fadein 1s linear 0.5s both';
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
            timeout5 = setTimeout(begin_show,500);
        }
        else
        {
            dis_titletime = delaytime- dis_titletime;
            timeout5 = setTimeout(function()
                {
                    distitle();
                    timeout6 = setTimeout(begin_show,500);
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
    if(index < 10)
        have_num++;

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
            timeout5 = setTimeout(begin_show,1000);
        }
        else
        {
            dis_titletime = delaytime- dis_titletime;
            timeout5 = setTimeout(function()
                {
                    distitle();
                    timeout6 = setTimeout(begin_show,1000);
                },dis_titletime);
        }
    }
}
function begin_show()
{
    if(reshow == true)
        return;

    if(image_url_index == Onload_imgs_url.length)
        image_url_index = 0;
    cut_image(1);
    image_url_index++;
    id('page1').style.display = 'none';
    id('page1').style.webkitAnimation = '';
    timeout1 = setTimeout(function()
    {
        id('page1').style.display = 'block';
        id('page1').style.webkitAnimation = 'pagein 10s linear forwards';
    },100);


    timeout2 = setTimeout(next_show,7000);
}
function next_show()
{
    if(reshow == true)
        return;

    if(image_url_index == Onload_imgs_url.length)
        image_url_index = 0;
    cut_image(2);
    image_url_index++;
    id('page2').style.display = 'none';
    id('page2').style.webkitAnimation = '';
    timeout3 = setTimeout(function()
    {
        id('page2').style.display = 'block';
        id('page2').style.webkitAnimation = 'pagein 10s linear forwards';
    },100);

    timeout4 = setTimeout(begin_show,7000);
}

function cut_image(pageindex)
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
    
    if(img_bili>1)//���h
    {
        id('page_v'+pageindex).style.display = 'none';
        id('page_h'+pageindex).style.display = 'block';

        var img_obj = id('img_h'+pageindex);
        img_obj.src = Onload_imgs_url[image_url_index];

        if(img_bili>(333/205))
        {
            img_obj.style.height = '205px';
            img_obj.style.width = img_bili*205 + 'px';
            img_obj.style.top = '0px';
            img_obj.style.left = -((img_bili*205-333)/2) + 'px';
        }
        else
        {
            img_obj.style.width = '333px';
            img_obj.style.height = 333/img_bili + 'px';
            img_obj.style.left = '0px';
            img_obj.style.top = -((333/img_bili-205)/2) + 'px';
        }
    }
    else //����v
    {
        id('page_v'+pageindex).style.display = 'block';
        id('page_h'+pageindex).style.display = 'none';

        var img_obj = id('img_v'+pageindex);
        img_obj.src = Onload_imgs_url[image_url_index];

        if(img_bili>(333/400))
        {
            img_obj.style.height = '400px';
            img_obj.style.width = img_bili*400 + 'px';
            img_obj.style.top = '0px';
            img_obj.style.left = -((img_bili*400-333)/2) + 'px';
            console.log('left:'+img_obj.style.left);
        }
        else
        {
            img_obj.style.width = '333px';
            img_obj.style.height = 333/img_bili + 'px';
            img_obj.style.left = '0px';
            img_obj.style.top = -((333/img_bili-400)/2) + 'px';
            console.log(img_obj.style.left)
        }   
    }
    console.log(img_obj.src);
}
call_me(load_images);

function reload_scene()
{
    reshow = true;
    id('titlecontent').innerHTML = '';
    id('pagetitle').style.webkitAnimation = '';
    setTimeout(load_images,100);
}
</script>