<?
$p=$_WEITE['web_pic_url']."jinhouhesui/";
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

#container > div,#container > img
{
    position: absolute;
}

#up
{
    left:-117px;
    top:-10px;
    -webkit-animation: upmove 2.5s cubic-bezier(.28,.01,.78,1) infinite alternate;
}
#down
{
    -webkit-transform: scale(-1,-1);
    top: 700px;
    left: -117px;
    -webkit-animation: downmove 1.8s cubic-bezier(.28,.01,.78,1) infinite alternate;
}
#down1
{
    -webkit-transform: scale(-1,-1);
    top: 684px;
    left: -149px;
    -webkit-animation: downmove 2s cubic-bezier(.28,.01,.78,1) infinite alternate;
}
#di
{
    top: 752px;
    left: -8px;
}
#yun1
{
    left: -150px;
    top: 64px;
    -webkit-animation: yunmove 10s linear infinite;
}
#yun2
{
    left: -150px;
    top: 570px;
    -webkit-animation: yunmove 10s 5s linear infinite;
}
#houzidiv
{
    left: 237px;
    top: 510px;
    width: 263px;
    height: 246px;
}
#houzidiv > img,#houzidiv > div
{
    position: absolute;
}
#denglong1
{
    -webkit-animation: denglong1 2s 0.4s cubic-bezier(.28,.01,.78,1) infinite alternate;
}
#denglong2
{
    -webkit-animation: denglong2 2s 0.3s cubic-bezier(.28,.01,.78,1) infinite alternate;
}
#denglong3
{
    -webkit-animation: denglong3 2s 0.2s cubic-bezier(.28,.01,.78,1) infinite alternate;
}
#denglong4
{
    -webkit-animation: denglong4 2s 0.1s cubic-bezier(.28,.01,.78,1) infinite alternate;
}
#denglongwei
{
    -webkit-animation: denglongwei 2s cubic-bezier(.28,.01,.78,1) infinite alternate;
}
.zi1
{
    left: 389px;
    top: 118px;
    width: 100px;
    height: 113px;
    -webkit-transform: scale(0,1);
}

.zi2
{
    left: 389px;
    top: 230px;
    width: 100px;
    height: 97px;
    background-position: 0px -113px;
    -webkit-transform: scale(0,1);
}
.zi3{
    left: 389px;
    top: 326px;
    width: 100px;
    height: 97px;
    background-position: 0px -209px;
    -webkit-transform: scale(0,1);
}
.zi4
{
    left: 389px;
    top: 422px;
    width: 100px;
    height: 113px;
    background-position: 0px -304px;
    -webkit-transform: scale(0,1);
}
#divcon
{
    width: 500px;
    height: 600px;
    top: 70px;
    overflow: hidden;
}
#div1,#div2
{
    width: 400px;
    height: 600px;
    left: 50px;
    /*top: 70px;*/
    position: absolute;
    opacity: 0;
/*    overflow-y: hidden;
    overflow-x: visible;  */
    /*background-color: #fff;*/
}
#daji1,#daji2,#daji3,#daji4
{
    background-image:url('<?=$p?>images/daji1.png');
}
#caiyun1,#caiyun2,#caiyun3,#caiyun4
{
    background-image: url(<?=$p?>images/caiyun1.png);
}
#hejia1,#hejia2,#hejia3,#hejia4
{
    background-image: url(<?=$p?>images/hejia1.png)
}
#xinxiang1,#xinxiang2,#xinxiang3,#xinxiang4
{
    background-image: url(<?=$p?>images/xinxiang1.png);
}
#xinnian1,#xinnian2,#xinnian3,#xinnian4
{
    background-image: url(<?=$p?>images/xinnian1.png);   
}
#caiyuan1,#caiyuan2,#caiyuan3,#caiyuan4
{
    background-image: url(<?=$p?>images/caiyuan1.png);
}
#haoyun1,#haoyun2,#haoyun3,#haoyun4
{
    background-image: url(<?=$p?>images/haoyun1.png);
}
#jiankang1,#jiankang2,#jiankang3,#jiankang4
{
    background-image: url(<?=$p?>images/jiankang1.png);
}
.zi_1
{
    left: 83px;
    top: 85px;
    width: 92px;
    height: 121px;
    -webkit-transform: scale(1,0);
}
.zi_2
{
    left: 173px;
    top: 85px;
    width: 92px;
    height: 121px;
    background-position: -95px 0px;
    -webkit-transform: scale(1,0);
}
.zi_3
{
    left: 261px;
    top: 85px;
    width: 92px;
    height: 121px;
    background-position: -188px 0px;
    -webkit-transform: scale(1,0);
}
.zi_4
{
    left: 345px;
    top: 85px;
    width: 92px;
    height: 121px;
    background-position: -279px 0px;
    -webkit-transform: scale(1,0);
}
</style>
<style type="text/css">
@-webkit-keyframes yunmove
{
    from  {-webkit-transform: translate(0px,0px);}
    to    {-webkit-transform: translate(650px,0px);}
}
@-webkit-keyframes upmove
{
    from  {-webkit-transform: translate(0px,0px);}
    to    {-webkit-transform: translate(50px,0px);}
}
@-webkit-keyframes downmove
{
    from  {-webkit-transform: scale(-1,-1) translate(0px,0px);}
    to    {-webkit-transform: scale(-1,-1) translate(30px,0px);}
}
@-webkit-keyframes houzitou
{
    from  {-webkit-transform: rotate(-7deg);}
    to    {-webkit-transform: rotate(7deg);}
}
@-webkit-keyframes weibamove
{
    from  {-webkit-transform: rotate(10deg) scale(1,0.95);}
    to    {-webkit-transform: rotate(0deg) scale(1.1,1);}
}
@-webkit-keyframes denglong1
{
    from  {-webkit-transform: rotate(10deg)}
    to    {-webkit-transform: translate(8px,5px) rotate(1deg);}
}
@-webkit-keyframes denglong2
{
    from  {-webkit-transform: rotate(7deg)}
    to    {-webkit-transform: translate(18px,6px) rotate(-7deg);}
}
@-webkit-keyframes denglong3
{
    from  {-webkit-transform: rotate(5deg);}
    to    {-webkit-transform: translate(29px,4px) rotate(-13deg);}
}
@-webkit-keyframes denglong4
{
    from  {-webkit-transform: rotate(6deg)}
    to    {-webkit-transform: translate(40px,3px) rotate(-15deg);}
}
@-webkit-keyframes denglongwei
{
    from  {-webkit-transform: translate(0px,0px);}
    to    {-webkit-transform: translate(48px,5px) rotate(-20deg);}
}
@-webkit-keyframes yanjing1
{
    0%  {opacity: 1}
    1%  {opacity: 1}
    2%  {opacity: 0}
    19% {opacity: 0}
    20% {opacity: 1}
    100%{opacity: 1}
}
@-webkit-keyframes yanjing2
{
    0%  {opacity: 0}
    1%  {opacity: 0}
    2%  {opacity: 1}
    3%  {opacity: 1}
    4%  {opacity: 0}
    17% {opacity: 0}
    18% {opacity: 1}
    19% {opacity: 1}
    20% {opacity: 0}
    100%{opacity: 0}
}
@-webkit-keyframes yanjing3
{
    0%  {opacity: 0}
    3%  {opacity: 0}
    4%  {opacity: 1}
    5%  {opacity: 1}
/*    6%  {opacity: 0}
    16% {opacity: 0}*/
    17% {opacity: 1}
    18% {opacity: 1}
    19% {opacity: 0}
    100%{opacity: 0}
}
@-webkit-keyframes showzi
{
    from  {-webkit-transform: scale(0,1);}
    to    {-webkit-transform: scale(1,1);}
}
@-webkit-keyframes diszi
{
    from  {-webkit-transform: scale(1,1);}
    to    {-webkit-transform: scale(0,1);}
}
@-webkit-keyframes showzi_1
{
    from  {-webkit-transform: scale(1,0);}
    to    {-webkit-transform: scale(1,1);}
}
@-webkit-keyframes diszi_1
{
    from  {-webkit-transform: scale(1,1);}
    to    {-webkit-transform: scale(1,0);}
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

    <img src='<?=$p?>images/088.jpg'>

    <div id='divcon'>
        <div id='div1'>
            <img id='img1' style='position:absolute;box-shadow: rgb(109, 3, 29) 16px 20px 16px;'>
        </div>
        <div id='div2'>
            <img id='img2' style='position:absolute;box-shadow: rgb(109, 3, 29) 16px 20px 16px;'>
        </div>
    </div>



    <img id='up' src='<?=$p?>images/0777.png'>

    
    <img id='down1' src='<?=$p?>images/0777.png'>
    <img id='di' src='<?=$p?>images/di.png'>
    <img id='down' src='<?=$p?>images/0777.png'>
    <img id='yun1' src='<?=$p?>images/066.png'>
    <img id='yun2' src='<?=$p?>images/066.png'>


    <div id="houzidiv">
        <img src="<?=$p?>images/wei.png" style="left: 221px;top: 102px;-webkit-transform-origin: 0% 100%;-webkit-animation: weibamove 2s linear infinite alternate;width:30px;">
        <img id='denglongwei' src='<?=$p?>images/weid.png' style='left:69px;top:183px;'>
        <img id='denglong4' src="<?=$p?>images/denglong.png" style="left: 41px;top: 148px;-webkit-transform: rotate(6deg);width: 75px;">
        <img id='denglong3' src="<?=$p?>images/denglong.png" style="left: 44px;top: 115px;-webkit-transform: rotate(5deg);width: 75px;">
        <img id='denglong2' src="<?=$p?>images/denglong.png" style="left: 47px;top: 81px;-webkit-transform: rotate(7deg);width: 75px;">
        <img id='denglong1' src="<?=$p?>images/denglong.png" style="left: 52px;top: 49px;-webkit-transform: rotate(10deg);width: 75px;">

        <img src="<?=$p?>images/houzi.png" style="left: 87px;top: 42px;width: 185px;">
        <div style="left: 149px;top: 25px;width: 93px;height:101px;-webkit-transform-origin: 40% 90%;-webkit-animation: houzitou 2s linear infinite alternate;">
            <img src="<?=$p?>images/houz2.png" style='width:93px;'>
            <div id='yanjing1' style='opacity:1'>
                <img src="<?=$p?>images/yan01.png" style="left: 41px;top: 55px;position:absolute;width: 22px;">
                <img src="<?=$p?>images/04.png" style="left: 45px;top: 50px;position:absolute">
            </div>
            <div id='yanjing2' style='opacity:0'>
                <img src="<?=$p?>images/yan02.png" style="left: 41px;top: 55px;position:absolute;width: 22px;">
                <img src="<?=$p?>images/04.png" style="left: 45px;top: 52px;position:absolute">
            </div>
            <div id='yanjing3' style='opacity:0'>
                <img src="<?=$p?>images/yan03.png" style="left: 41px;top: 55px;position:absolute;width: 22px;">
                <img src="<?=$p?>images/04.png" style="left: 45px;top: 52px;position:absolute">
            </div>
        </div>
    </div>

    <div id='daji1' class='zi1'></div>
    <div id='daji2' class='zi2'></div>
    <div id='daji3' class='zi3'></div>
    <div id='daji4' class='zi4'></div>

    <div id='caiyun1' class='zi1'></div>
    <div id='caiyun2' class='zi2'></div>
    <div id='caiyun3' class='zi3'></div>
    <div id='caiyun4' class='zi4'></div>

    <div id='hejia1' class='zi1'></div>
    <div id='hejia2' class='zi2'></div>
    <div id='hejia3' class='zi3'></div>
    <div id='hejia4' class='zi4'></div>

    <div id='xinxiang1' class='zi1'></div>
    <div id='xinxiang2' class='zi2'></div>
    <div id='xinxiang3' class='zi3'></div>
    <div id='xinxiang4' class='zi4'></div>

    <div id='xinnian1' class='zi_1'></div>
    <div id='xinnian2' class='zi_2'></div>
    <div id='xinnian3' class='zi_3'></div>
    <div id='xinnian4' class='zi_4'></div>

    <div id='caiyuan1' class='zi_1'></div>
    <div id='caiyuan2' class='zi_2'></div>
    <div id='caiyuan3' class='zi_3'></div>
    <div id='caiyuan4' class='zi_4'></div>

    <div id='haoyun1' class='zi_1'></div>
    <div id='haoyun2' class='zi_2'></div>
    <div id='haoyun3' class='zi_3'></div>
    <div id='haoyun4' class='zi_4'></div>

    <div id='jiankang1' class='zi_1'></div>
    <div id='jiankang2' class='zi_2'></div>
    <div id='jiankang3' class='zi_3'></div>
    <div id='jiankang4' class='zi_4'></div>

     <div id='pagetitle' style='position:absolute;width:410px;height:200px;top:238px;left:45px;overflow:hidden;text-shadow:5px 6px 4px rgba(0, 0, 0, 0.7);'>
        <div style='position:absolute;width:410px;height:200px;top:0px;left:0px;overflow:hidden;'>
            <div style='position:absolute;width:410px;height:200px;display:table;overflow:hidden;'>
                <div id='titlecontent' style='width:410px;height:200px;vertical-align:middle;display:table-cell;text-align:center;font-size:40px;line-height:70px;color:#FFE400;'></div>
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
var delaytime=4000;
var timeout0;
var timeout1;
var timeout2;
var timeout3;
var timeout4;
var timeout5;
var timeout6;

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
var wordh = ['xinnian','caiyuan','haoyun','jiankang'];
var index_h = 0;
var wordv = ['daji','caiyun','hejia','xinxiang'];
var index_v = 0;
var lasttype = false;
function id(name)
{
    return document.getElementById(name)
}

function changeeye()
{
    yanjing1 = id('yanjing1');
    yanjing2 = id('yanjing2');
    yanjing3 = id('yanjing3');
    yanjing1.style.webkitAnimation = 'yanjing1 4s linear infinite';
    yanjing2.style.webkitAnimation = 'yanjing2 4s linear infinite';
    yanjing3.style.webkitAnimation = 'yanjing3 4s linear infinite';

}

function showtitle()
{
    id('pagetitle').style.webkitAnimation = 'fadein 1s linear both';
    id('titlecontent').innerHTML = e_desc;

    div1 = id('div1');
    div2 = id('div2');
    img1 = id('img1');
    img2 = id('img2');

    showwordh();
}

function distitle()
{
    id('pagetitle').style.webkitAnimation = 'fadeout 1s linear both';
    diswordh();
    timeout1 = setTimeout(show1,500);
}

function show1()
{
    changeeye();
    setImageindex();
    img_bili = image_size_width[image_url_index]/image_size_height[image_url_index];

    if(img_bili>1)
    {
        showwordh();
        lasttype = false;
    }
    else
    {
        showwordv();
        lasttype = true;
    }

    div1.style.webkitAnimation = 'fadein 1s 0.5s linear both';
    img1.src = Onload_imgs_url[image_url_index];

    if(img_bili>1)
    {
        img1.style.width = '440px';
        img1.style.height = 440/img_bili + 'px';
        img1.style.left = '-20px';
        img1.style.top = (630-(440/img_bili))/2+'px';
        img1.style.border = '5px solid #FF0000';
    }
    else
    {
        img1.style.width = '400px';
        img1.style.height = 400/img_bili + 'px';
        img1.style.left = '0px';
        img1.style.top = (600-(400/img_bili))/2+'px';
        img1.style.border = '0px solid #FF0000';
    }


    timeout2 = setTimeout(show2,4000)

}

function show2()
{
    if(img_bili > 1)
    {
        diswordh();
    }
    else
    {
        diswordv();
    }

    div1.style.webkitAnimation = 'fadeout 1s linear both';

    image_url_index++;
    setImageindex();
    img_bili = image_size_width[image_url_index]/image_size_height[image_url_index];
    if(img_bili>1)
    {
        if(lasttype == true)
            timeout3 = setTimeout(showwordh,1000);
        else
            timeout3 = setTimeout(showwordh,500);
        lasttype = false;
    }
    else
    {
        if(lasttype == false)
            timeout3 = setTimeout(showwordv,1000);
        else
            timeout3 = setTimeout(showwordv,500);
        lasttype = true;
    }

    div2.style.webkitAnimation = 'fadein 1s 0.5s linear both';
    img2.src = Onload_imgs_url[image_url_index];

    if(img_bili>1)
    {
        img2.style.width = '440px';
        img2.style.height = 440/img_bili + 'px';
        img2.style.left = '-20px';
        img2.style.top = (630-(440/img_bili))/2+'px';
        img2.style.border = '5px solid #FF0000';
    }
    else
    {
        img2.style.width = '400px';
        img2.style.height = 400/img_bili + 'px';
        img2.style.left = '0px';
        img2.style.top = (600-(400/img_bili))/2+'px';
        img2.style.border = '0px solid #FF0000';
    }

    timeout4 = setTimeout(show1_1,4000)
}
function show1_1()
{
    if(img_bili > 1)
    {
        diswordh();
    }
    else
    {
        diswordv();
    }

    div2.style.webkitAnimation = 'fadeout 1s linear both';

    image_url_index++;
    setImageindex();
    img_bili = image_size_width[image_url_index]/image_size_height[image_url_index];
    if(img_bili>1)
    {
        if(lasttype == true)
            timeout5 = setTimeout(showwordh,1000);
        else
            timeout5 = setTimeout(showwordh,500);
        lasttype = false;
    }
    else
    {
        if(lasttype == false)
            timeout5 = setTimeout(showwordv,1000);
        else
            timeout5 = setTimeout(showwordv,500);
        lasttype = true;
    }

    div1.style.webkitAnimation = 'fadein 1s 0.5s linear both';
    img1.src = Onload_imgs_url[image_url_index];

    if(img_bili>1)
    {
        img1.style.width = '440px';
        img1.style.height = 440/img_bili + 'px';
        img1.style.left = '-20px';
        img1.style.top = (630-(440/img_bili))/2+'px';
        img1.style.border = '5px solid #FF0000';
    }
    else
    {
        img1.style.width = '400px';
        img1.style.height = 400/img_bili + 'px';
        img1.style.left = '0px';
        img1.style.top = (600-(400/img_bili))/2+'px';
        img1.style.border = '0px solid #FF0000';
    }

    timeout6 = setTimeout(show2,4000)
}

function setImageindex()
{
    if(image_url_index == Onload_imgs_url.length)
        image_url_index = 0;

    while(Onload_imgs_url[image_url_index] == 'not find' || Onload_imgs_url[image_url_index] == 'loading')
    {
        console.log(Onload_imgs_url[image_url_index]);
        image_url_index++;
        if(image_url_index == Onload_imgs_url.length)
            image_url_index = 0;
    }
}
function showwordh()
{
    var wordname = wordh[index_h];

    id(wordname+'1').style.webkitAnimation = 'showzi_1 0.5s linear both';
    id(wordname+'2').style.webkitAnimation = 'showzi_1 0.5s 0.2s linear both';
    id(wordname+'3').style.webkitAnimation = 'showzi_1 0.5s 0.4s linear both';
    id(wordname+'4').style.webkitAnimation = 'showzi_1 0.5s 0.6s linear both';

    index_h ++ ;
    if(index_h == 4)
        index_h = 0;
}

function diswordh()
{
    if(index_h == 0)
        var wordname = wordh[3];
    else
        var wordname = wordh[index_h-1]
    id(wordname+'1').style.webkitAnimation = 'diszi_1 0.5s linear both';
    id(wordname+'2').style.webkitAnimation = 'diszi_1 0.5s 0.2s linear both';
    id(wordname+'3').style.webkitAnimation = 'diszi_1 0.5s 0.4s linear both';
    id(wordname+'4').style.webkitAnimation = 'diszi_1 0.5s 0.6s linear both';
}
function showwordv()
{
    var wordname = wordv[index_v];

    id(wordname+'1').style.webkitAnimation = 'showzi 0.5s linear both';
    id(wordname+'2').style.webkitAnimation = 'showzi 0.5s 0.2s linear both';
    id(wordname+'3').style.webkitAnimation = 'showzi 0.5s 0.4s linear both';
    id(wordname+'4').style.webkitAnimation = 'showzi 0.5s 0.6s linear both';

    index_v ++ ;
    if(index_v == 4)
        index_v = 0;
}

function diswordv()
{
    if(index_v == 0)
        var wordname = wordv[3];
    else
        var wordname = wordv[index_v-1];
    id(wordname+'1').style.webkitAnimation = 'diszi 0.5s linear both';
    id(wordname+'2').style.webkitAnimation = 'diszi 0.5s 0.2s linear both';
    id(wordname+'3').style.webkitAnimation = 'diszi 0.5s 0.4s linear both';
    id(wordname+'4').style.webkitAnimation = 'diszi 0.5s 0.6s linear both';
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
    for(var i = 0;i<4;i++)
    {
        id(wordh[i]+'1').style.webkitAnimation = '';
        id(wordh[i]+'2').style.webkitAnimation = '';
        id(wordh[i]+'3').style.webkitAnimation = '';
        id(wordh[i]+'4').style.webkitAnimation = '';
        id(wordv[i]+'1').style.webkitAnimation = '';
        id(wordv[i]+'2').style.webkitAnimation = '';
        id(wordv[i]+'3').style.webkitAnimation = '';
        id(wordv[i]+'4').style.webkitAnimation = '';
    }
    id('div1').style.webkitAnimation = '';
    id('div2').style.webkitAnimation = '';
    id('img1').src = '';
    id('img2').src = '';
    id('pagetitle').style.webkitAnimation = '';

    clearTimeout(timeout0);
    clearTimeout(timeout1);
    clearTimeout(timeout2);
    clearTimeout(timeout3);
    clearTimeout(timeout4);
    clearTimeout(timeout5);
    clearTimeout(timeout6);

    index_h = 0;
    index_v = 0;
}

</script>