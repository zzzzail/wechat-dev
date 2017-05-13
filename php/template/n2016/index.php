<?
$p=$_WEITE['web_pic_url']."n2016/";
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
        height: 788px;
        position: absolute;
        overflow: hidden;
    }
    #container >img,#container >div
    {
        position: absolute;
    }
    #line_up,#line_down,#line_center
    {
        background-color:#fff;
        height:3px;
        width:500px;
        left:0px;
        top:380px;
    }
    #line_left
    {
        background-color: #fff;
        width: 3px;
        top: 380px;
        height: 500px;
        left: 54px;
    }
    #line_right
    {
        background-color: #fff;
        width: 3px;
        top: -118px;
        height: 500px;
        left: 445px;
    }

    @-webkit-keyframes test1
    {
        from {height: 0px;}
        to   {height: 300px;}
    }
    @-webkit-keyframes mask1
    {
        0% {opacity: 0}
        55%{opacity: 1}
        90%{opacity: 1}
        100%{opacity: 0}
    }
    @-webkit-keyframes line_up1_1h
    {
        from  {-webkit-transform: translate(0px,0px);}
        to    {-webkit-transform: translate(0px,-140px);}
    }
    @-webkit-keyframes line_down1_1h
    {
        from  {-webkit-transform: translate(0px,0px);}
        to    {-webkit-transform: translate(0px,140px);}
    }
    #div1h
    {
        /*background-color: #fff;*/
        -webkit-transform: scale(1,0);
    }
    .divh
    {
        border: 3px solid #fff;
        left: 55px;
        top: 241px;
        width: 393px;
        height: 280px;  
        overflow: hidden;
        position: absolute;
        /*background-color: #fff;*/
    }
    .divs
    {
        border: 3px solid #fff;
        left: 55px;
        top: 81px;
        width: 393px;
        height: 600px;
        overflow: hidden;  
        position: absolute;
        /*background-color: #fff;*/
    }
    #div1s
    {
        /*background-color: #fff;*/
        -webkit-transform: scale(1,0);
    }
    @-webkit-keyframes showdiv1
    {
        from {-webkit-transform: scale(1,0);}
        to   {-webkit-transform: scale(1,1);}
    }
    @-webkit-keyframes line_up_1h
    {
        from  {-webkit-transform: translate(0px,0px);}
        to    {-webkit-transform: translate(0px,-140px);}
    }
    @-webkit-keyframes line_up1h_dis
    {
        from  {-webkit-transform: translate(0px,-140px);}
        to    {-webkit-transform: translate(0px,140px);}
    }
    @-webkit-keyframes line_down_1h
    {
        from  {-webkit-transform: translate(0px,0px);}
        to    {-webkit-transform: translate(0px,140px);}
    }
    @-webkit-keyframes line_up_1s
    {
        from  {-webkit-transform: translate(0px,0px);}
        to    {-webkit-transform: translate(0px,-300px);}
    }
    @-webkit-keyframes line_down_1s
    {
        from  {-webkit-transform: translate(0px,0px);}
        to    {-webkit-transform: translate(0px,300px);}
    }
    @-webkit-keyframes line_right1h_dis
    {
        from  {-webkit-transform: translate(0px,0px);}
        to    {-webkit-transform: translate(-391px,140px);}
    }
    #div2h
    {
        display: none;
    }
    #div2s
    {
        display: none;
    }
    @-webkit-keyframes div1h_dis
    {
        from  {-webkit-transform: scale(1,1);}
        to    {-webkit-transform: scale(0,0);}
    }
    @-webkit-keyframes div_1h_to_2h
    {
        from  {-webkit-transform: translate(390px, -279px);}
        to    {-webkit-transform: translate(0px,0px);}
    }
    @-webkit-keyframes line_left2_dis
    {
        from  {-webkit-transform: scale(1,1);}
        to    {-webkit-transform: scale(1,0);}
    }
    #line_up2
    {
        height: 3px;
        background-color: #fff;
        width: 1000px;
        top: 241px;
        left: 56px;
        display: none;
    }
    #line_right2
    {
        width: 3px;
        background-color: #fff;
        height: 2000px;
        top: 243px;
        left: 445px;
        display: none;
    }
    @-webkit-keyframes div_1h_to_2s
    {
        from  {-webkit-transform: translate(390px,-439px);}
        to    {-webkit-transform: translate(0px,0px);}
    }

    @-webkit-keyframes line_down_1h_to_2s
    {
        from  {-webkit-transform: translate(0px,140px);}
        to    {-webkit-transform: translate(0px,299px);}
    }
    @-webkit-keyframes line_up_1h_to_2s
    {
        from  {-webkit-transform: translate(0px,-140px);}
        to    {-webkit-transform: translate(0px,299px);}
    }
    @-webkit-keyframes div1h_2s
    {
        from  {-webkit-transform: translate(0px,0px) scale(1,1);}
        to    {-webkit-transform: translate(0px,160px) scale(0,0);}
    }
    @-webkit-keyframes line_right_1h_to_2s
    {
        from  {-webkit-transform: translate(0px,0px);}
        to    {-webkit-transform: translate(-390px,0px);}
    }
    #line_left2
    {
        width: 3px;
        background-color: #fff;
        height: 500px;
        top: 0px;
        left: 54px;
        display: none;
    }
    @-webkit-keyframes line_left2_1h_to_2s
    {
        from  {-webkit-transform: translate(390px,0px);}
        to    {-webkit-transform: translate(0px,0px);}
    }
    @-webkit-keyframes line_up_1s_to_1s
    {
        from  {-webkit-transform: translate(0px,-300px);}
        to    {-webkit-transform: translate(0px,300px);}
    }
    @-webkit-keyframes div_1s_to_2s
    {
        from  {-webkit-transform: translate(390px, -599px);}
        to    {-webkit-transform: translate(0px,0px);}
    }
    @-webkit-keyframes div_1s_dis
    {
        from  {-webkit-transform:translate(0px,0px) scale(1,1);}
        to    {-webkit-transform:translate(0px,-160px) scale(0,0);}
    }
    @-webkit-keyframes line_down_1s_to_2h
    {
        from  {-webkit-transform: translate(0px,300px);}
        to    {-webkit-transform: translate(0px,140px);}
    }
    @-webkit-keyframes line_up_1s_to_2h
    {
        from  {-webkit-transform: translate(0px,-300px);}
        to    {-webkit-transform: translate(0px,140px);}
    }
    #content_box
    {
        position: absolute;
        top: 0px;
        left: 0px;
        width: 500px;
        height: 815px;
    }
    #content_box > img,#content_box>div
    {
        position: absolute;
    }
    @-webkit-keyframes box_2s_to_3s
    {
        0% {-webkit-transform: translate(0px,0px) scale(1,1) rotate(0deg);opacity: 1}
        45% {-webkit-transform: translate(18px,-25px) scale(0.65,.65) rotate(-90deg);opacity: 1}
        80%{-webkit-transform: translate(18px,-25px) scale(0.65,1.53) rotate(-90deg);opacity: 1}
        100%{-webkit-transform: translate(18px,-25px) scale(0.65,1.53) rotate(-90deg);opacity: 0}
    }
    @-webkit-keyframes box_2s_to_3h
    {
        0%  {-webkit-transform: translate(0px,0px) scale(1,1) rotate(0deg);opacity: 1}
        80%  {-webkit-transform: translate(18px,-25px) scale(.65,.71) rotate(-90deg);opacity: 1}
        100%  {-webkit-transform: translate(18px,-25px) scale(.65,.71) rotate(-90deg);opacity: 0}
    }
    @-webkit-keyframes box_2h_to_3h
    {
        0% {-webkit-transform: translate(0px,0px) scale(1,1) rotate(0deg);opacity: 1}
        45% {-webkit-transform: translate(37px,-25px) scale(1,1) rotate(-90deg);opacity: 1}
        80%{-webkit-transform: translate(37px,-25px) scale(1.4,.7) rotate(-90deg);opacity: 1}
        100%{-webkit-transform: translate(37px,-25px) scale(1.4,.7) rotate(-90deg);opacity: 0}
    }
    @-webkit-keyframes box_2h_to_3s
    {
        0%  {-webkit-transform: translate(0px,0px) scale(1,1) rotate(0deg);opacity: 1}
        80% {-webkit-transform: translate(37px,-23px) scale(1.4,1.54) rotate(-90deg);opacity: 1}
        100% {-webkit-transform: translate(37px,-23px) scale(1.4,1.54) rotate(-90deg);opacity: 0}
    }
    #page3
    {
        position: absolute;
        top: 0px;
        left: 0px;
        width: 500px;
        height: 815px;
        opacity: 0;
    }
    @-webkit-keyframes fadein
    {
        from  {opacity: 0}
        to    {opacity: 1}
    }
    @-webkit-keyframes div3_out
    {
        from  {-webkit-transform: translate(391px,0px);opacity: 1}
        to    {-webkit-transform: translate(391px,0px);opacity: 0}
    }
    #page4
    {
        position: absolute;
        top: 0px;
        left: 0px;
        width: 500px;
        height: 815px;
        opacity: 0
    }
    @-webkit-keyframes div_3s_to_4s
    {
        0%  {-webkit-transform: translate(0px,0px);opacity: 1}
        100% {-webkit-transform: translate(391px,0px);opacity: 0}
    }
    @-webkit-keyframes div_4s_show
    {
        from  {-webkit-transform: translate(-391px,0px);opacity: 0.3}
        to    {-webkit-transform: translate(0px,0px);opacity: 1}
    }
    @-webkit-keyframes line_left4s_out
    {
        from  {-webkit-transform: translate(0px,0px);}
        to    {-webkit-transform: translate(0px,-680px);}
    }
    @-webkit-keyframes line_up4s_out
    {
        from  {-webkit-transform: translate(0px,0px);}
        to    {-webkit-transform: translate(448px,0px);}
    }
    @-webkit-keyframes line_right4s_out
    {
        from  {-webkit-transform: translate(0px,0px);}
        to    {-webkit-transform: translate(0px,816px);}
    }
    @-webkit-keyframes line_down4s_out
    {
        from  {-webkit-transform: translate(0px,0px);}
        to    {-webkit-transform: translate(-448px,0px);}
    }
    @-webkit-keyframes fadeout
    {
        from  {opacity: 1}
        to    {opacity: 0}
    }
    #line_center
    {
        -webkit-transform: scale(0,1);
        -webkit-transform-origin: 0% 50%;
    }
    @-webkit-keyframes line_center_show
    {
        from  {-webkit-transform: scale(0,1);}
        to    {-webkit-transform: scale(1,1);}
    }
    @-webkit-keyframes mask2
    {
        from  {-webkit-transform: translate(0px,0px) rotate(-30deg);}
        to    {-webkit-transform: translate(0px,1000px) rotate(-30deg);}
    }
    @-webkit-keyframes pagetitleshow
    {
        from  {-webkit-transform: scale(1,0);}
        to    {-webkit-transform: scale(1,1);}
    }
</style>

<div id='container'>
    <img src='<?=$p?>images/bg.jpg'>
    <img src='<?=$p?>images/guangban01.png' style='opacity:0;left:103px;top:170px;-webkit-animation: fadein 1.5s linear infinite alternate'>
    <img src='<?=$p?>images/guangban01.png' style='opacity:0;left:19px;top:595px;-webkit-animation: fadein 1.5s linear 0.5s infinite alternate'>
    <img src='<?=$p?>images/guangban02.png' style='opacity:0;left:303px;top:295px;-webkit-animation: fadein 1.5s linear 1s infinite alternate'>
    <img src='<?=$p?>images/guangban03.png' style='opacity:0;left:343px;top:684px;-webkit-animation: fadein 1.5s linear 0.5s infinite alternate'>

    <div id='content_box'>
        <div id='div1h' class='divh'><img id='img1h' style='position:absolute'></div>
        <div id='div1s' class='divs'><img id='img1s' style='position:absolute'></div>

        <div id='div2h' class='divh'>    
            <img id='img2h' style='position:absolute'>
            <div id='div2hmask1' style='position:absolute;width:600px;height:80px;background-color:rgba(252,238,13,0.3);-webkit-transform: rotate(-30deg);left:-100px;top:-204px;'></div>
            <div id='div2hmask2' style='position:absolute;width:600px;height:80px;background-color:rgba(252,238,13,0.3);-webkit-transform: rotate(-30deg);left:-100px;top:-204px;'></div>
        </div>
        <div id='div2s' class='divs'>
            <img id='img2s' style='position:absolute'>
            <div id='div2smask1' style='position:absolute;width:600px;height:80px;background-color:rgba(252,238,13,0.3);-webkit-transform: rotate(-30deg);left:-100px;top:-204px;'></div>
            <div id='div2smask2' style='position:absolute;width:600px;height:80px;background-color:rgba(252,238,13,0.3);-webkit-transform: rotate(-30deg);left:-100px;top:-204px;'></div>
        </div>

        <div id='div1hmask' class='divh' style='background-color:rgba(252,238,13,0.3);opacity:0;border:0px;'></div>
        <div id='div1smask' class='divs' style='background-color:rgba(252,238,13,0.3);opacity:0;border:0px;'></div>
        <div id='line_up' style='display:none'></div>
        <div id='line_down' style='display:none'></div>
        <div id='line_left' style='-webkit-transform-origin: 50% 100%;-webkit-transform: scale(1,0)'></div>
        <div id='line_right' style='-webkit-transform-origin: 50% 0%;-webkit-transform: scale(1,0)'></div>

        <div id='line_left2'></div>
        <div id='line_up2'></div>
        <div id='line_right2'></div>
    </div>

    <div id='page3'>
        <div id='div3h' class='divh'><img id='img3h' style='position:absolute'></div>
        <div id='div3s' class='divs'><img id='img3s' style='position:absolute'></div>

        <div id='line_up3' style='height:3px;width:1000px;top:80px;left:55px;background-color:#fff;position:absolute'></div>
        <div id='line_down3' style='height:3px;width:1000px;top:678px;left:-553px;background-color:#fff;position:absolute'></div>
        <div id='line_left3' style='width:3px;height:1000px;top:-320px;left:54px;background-color:#fff;position:absolute'></div>
        <div id='line_right3' style='width:3px;height:1000px;top:0px;left:445px;background-color:#fff;position:absolute'></div>
    </div>

    <div id='page4'>
        <div id='div4s' class='divs'><img id='img4s' style='position:absolute'></div>
        <div id='div4h' class='divh'><img id='img4h' style='position:absolute'></div>
        <div id='line_up4' style='height:3px;width:1000px;top:80px;left:55px;background-color:#fff;position:absolute'></div>
        <div id='line_down4' style='height:3px;width:1000px;top:678px;left:-553px;background-color:#fff;position:absolute'></div>
        <div id='line_left4' style='width:3px;height:1000px;top:-320px;left:54px;background-color:#fff;position:absolute'></div>
        <div id='line_right4' style='width:3px;height:1000px;top:0px;left:445px;background-color:#fff;position:absolute'></div>
    </div>

    <div id='line_center'></div>

    <div id='pagetitle' style='position:absolute;width:500px;top:225px;height:150px;left:0px;line-heignt:150%;font-size:40px;color:#fff;-webkit-transform-origin: 50% 100%;-webkit-transform: scale(1,0)'>
        <div style='display:table;width:460px;height:150px;text-align:center;text-shadow: 1px 1px 1px #4A4A4A;position:absolute;left:20px;'>
            <div id='titlecontent' style='display:table-cell;vertical-align:bottom;width:460px;height:150px;'></div>
        </div>
    </div>

</div>
<script>
var image_size_width=[];
var image_size_height=[];
var image_ready_num=0;
var image_url_index=0;
var have_num = 0;
var canshow = true;
var reshow = false;
var timeout1;
var timeout2;
var timeout3;
var timeout4;
var timeout5;
var delaytime;

var img_height_h = 280;
var img_width_h = 393;
var img_left_h = 55;
var img_top_h = 220;

var img_height_s = 600;
var img_width_s = 393;
var img_left_s = 55;
var img_top_s = 80;

var before;//falseÎªºá°æ,trueÎªÊú°æ

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
    image_ready_num=18;
    image_url_index=0;
    have_num = 0;
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
        Onload_imgs_url[index] = img.src;
        image_size_height[index] = img.height;
        image_size_width[index] = img.width;
        have_num++;
    }
    else
    {
        Onload_imgs_url[image_ready_num] = img.src;
        image_size_width[image_ready_num] = img.width;
        image_size_height[image_ready_num] = img.height;
        image_ready_num++;
    }
    console.log(index+': '+image_size_width[index]+'---'+have_num);
    if((have_num >= 18 || slider_images_url.length == have_num) && canshow == true)
    {   
        console.log(slider_images_url.length+'--'+have_num);
        reshow = false;
        canshow =false;
        var end_titletime = new Date();
        end_titletime = end_titletime.getTime();
        var dis_titletime = Math.abs(end_titletime-begin_titletime);
        
        if(dis_titletime>5000)
        {
            distitle()
            begin_show();
        }
        else
        {
            setTimeout(function()
            {
                distitle();
                begin_show();
            },5000-dis_titletime)
        }
        
        
    }
}
function showtitle()
{
    var line_center = id('line_center');
    line_center.style.webkitAnimation = 'line_center_show 1s linear both';
    var pagetitle = id('pagetitle');
    id('titlecontent').innerHTML = e_desc;
    pagetitle.style.webkitAnimation = 'pagetitleshow 1s linear 1s both';

    id('line_left').style.webkitAnimation = 'pagetitleshow 2s ease-out 1s both';
    id('line_right').style.webkitAnimation = 'pagetitleshow 2s ease-out 1s both';
}
function distitle()
{
    id('pagetitle').style.webkitAnimation = 'fadeout 1s linear both';
}
function begin_show()
{
    id('line_center').style.display = 'none';
    id('line_up').style.display = 'block';
    id('line_down').style.display = 'block';

    img_bili = image_size_width[image_url_index]/image_size_height[image_url_index];
    setImage(1,image_url_index,img_bili);

    id('div1h').style.webkitTransformOrigin = '50% 50%';
    id('div1h').style.webkitAnimation = 'showdiv1 1s linear both';
    id('div1s').style.webkitTransformOrigin = '50% 50%';
    id('div1s').style.webkitAnimation = 'showdiv1 1s linear both';

    var div1hmask = id('div1hmask');
    var div1smask = id('div1smask');
    if(img_bili>1)
    {

        id('line_up').style.webkitAnimation = 'line_up_1h 1s linear both';
        id('line_down').style.webkitAnimation = 'line_down_1h 1s linear both';
        div1hmask.style.display = 'block';
        div1smask.style.display = 'none';
        div1hmask.style.webkitAnimation = 'mask1 0.3s 2 2s both';
    }
    else
    {
        id('line_up').style.webkitAnimation = 'line_up_1s 1s linear both';
        id('line_down').style.webkitAnimation = 'line_down_1s 1s linear both';
        div1hmask.style.display = 'none';
        div1smask.style.display = 'block';
        id('div1smask').style.webkitAnimation = 'mask1 0.3s 2 2s both';
    }

    setTimeout(show2,3000)
}
function show2 () 
{
    if(img_bili>1)
        before = false;
    else
        before = true;

    image_url_index++;
    if(image_url_index == Onload_imgs_url.length)
        image_url_index = 0;
    img_bili = image_size_width[image_url_index]/image_size_height[image_url_index];

    setImage(2,image_url_index,img_bili);

    var line_up2 = id('line_up2');
    line_up2.style.display = 'block';
    var line_right2 = id('line_right2');
    line_right2.style.display = 'block';

    var line_left = id('line_left');
    // line_left.style.display = 'block';
    // line_left.style.webkitTransformOrigin = '50% 0%';

    var div2smask1 = id('div2smask1');
    var div2smask2 = id('div2smask2');
    var div2hmask1 = id('div2hmask1');
    var div2hmask2 = id('div2hmask2');
    div2smask1.style.webkitAnimation = 'mask2 1.5s 3s linear both';
    div2smask2.style.webkitAnimation = 'mask2 1.5s 3.3s linear both';
    div2hmask1.style.webkitAnimation = 'mask2 1.5s 3s linear both';
    div2hmask2.style.webkitAnimation = 'mask2 1.5s 3.3s linear both';


    if(img_bili>1)
    {
        var div = id('div2h');
        div.style.display = 'block';
        
        if(before)
        {
            //s->h
            id('line_left2').style.display = 'block';
            div.style.webkitTransform = 'translate(390px, -439px)';
            div.style.webkitAnimation = 'div_1h_to_2s 2s linear both';

            div_before = id('div1s');
            div_before.style.webkitAnimation = 'div_1s_dis 2s linear both';
            div_before.style.webkitTransformOrigin = '0% 100%';

            id('line_up').style.webkitAnimation = 'line_up_1s_to_2h 2s linear both';
            id('line_down').style.webkitAnimation = 'line_down_1s_to_2h 2s linear both';

            var line_left = id('line_left');
            line_left.style.top = '82px';
            line_left.style.height = '746px';
            line_left.style.webkitTransformOrigin = '50% 59%';
            line_left.style.webkitAnimation = 'line_left2_dis 2s linear both';
            id('line_right').style.display = 'none';
            id('line_left2').style.display = 'block';
            id('line_left2').style.webkitTransform = 'translate(390px, -439px)';
            id('line_left2').style.webkitAnimation = 'div_1h_to_2s 2s linear both';
            id('line_up2').style.top = '241px';
            id('line_up2').style.left = '56px';
            id('line_up2').style.webkitTransform = 'translate(390px, -439px)';
            id('line_up2').style.webkitAnimation = 'div_1h_to_2s 2s linear both';
            id('line_right2').style.webkitTransform = 'translate(390px, -439px)';
            id('line_right2').style.webkitAnimation = 'div_1h_to_2s 2s linear both';
        }
        else
        {
            //h->h
            div.style.webkitTransform = 'translate(390px, -279px)';
            div.style.webkitAnimation = 'div_1h_to_2h 2s linear both';
            
            line_up2.style.webkitTransform = 'translate(390px,-279px)';
            line_up2.style.webkitAnimation = 'div_1h_to_2h 2s linear both';
            line_right2.style.webkitTransform = 'translate(390px,-279px)';
            line_right2.style.webkitAnimation = 'div_1h_to_2h 2s linear both';

            div_before = id('div1h');
            div_before.style.webkitAnimation = 'div1h_dis 2s linear both';
            div_before.style.webkitTransformOrigin = '0% 100%';

            line_left.style.top = '523px';
            line_left.style.height = '300px';
            line_left.style.webkitAnimation = 'line_left2_dis 2s linear both';

            line_up2.style.top = '241px';
            line_up2.style.left = '56px';
            line_right2.style.top = '243px';
            line_right2.style.left = '445px';

            id('line_up').style.webkitAnimation = 'line_up1h_dis 2s linear both';
            id('line_right').style.webkitAnimation = 'line_right1h_dis 2s linear both';
        }
    }
    else
    {
        var div = id('div2s');
        div.style.display = 'block';
        if(before)
        {
            //s->s
            id('line_right').style.display = 'none';
            id('line_left2').style.display = 'block';
            div.style.webkitTransform = 'translate(390px, -599px)';
            div.style.webkitAnimation = 'div_1s_to_2s 2s linear both';

            div_before = id('div1s');
            div_before.style.webkitAnimation = 'div1h_dis 2s linear both';
            div_before.style.webkitTransformOrigin = '0% 100%';

            id('line_up').style.webkitAnimation = 'line_up_1s_to_1s 2s linear both';
            var line_left = id('line_left');
            line_left.style.top = '682px';
            line_left.style.height = '200px';
            line_left.style.webkitTransformOrigin = '50% 0%';
            line_left.style.webkitAnimation = 'line_left2_dis 2s linear both';

            id('line_up2').style.top = '81px';
            id('line_up2').style.left = '56px';

            id('line_left2').style.webkitTransform = 'translate(390px, -599px)';
            id('line_left2').style.webkitAnimation = 'div_1s_to_2s 2s linear both';
            id('line_right2').style.webkitTransform = 'translate(390px, -599px)';
            id('line_right2').style.webkitAnimation = 'div_1s_to_2s 2s linear both';
            id('line_up2').style.webkitTransform = 'translate(390px, -599px)';
            id('line_up2').style.webkitAnimation = 'div_1s_to_2s 2s linear both';
        }
        else
        {
            //h->s
            id('line_right').style.display = 'none';
            div.style.webkitTransform = 'translate(390px, -439px)';
            div.style.webkitAnimation = 'div_1h_to_2s 2s linear both';

            div_before = id('div1h');
            div_before.style.webkitAnimation = 'div1h_2s 2s linear both';
            div_before.style.webkitTransformOrigin = '0% 100%';

            line_up2.style.top = '81px';
            line_up2.style.left = '56px';
            line_right2.style.top = '82px';
            line_right2.style.left = '445px';
            line_up2.style.webkitAnimation = 'div_1h_to_2s 2s linear both';
            line_right2.style.webkitAnimation = 'div_1h_to_2s 2s linear both';

            id('line_left2').style.display = 'block';
            id('line_left2').style.webkitAnimation = 'line_left2_1h_to_2s 2s linear both';

            id('line_left').style.webkitTransformOrigin = '50% 60%';
            id('line_left').style.webkitAnimation = 'line_left2_dis 2s linear both';
            id('line_down').style.webkitAnimation = 'line_down_1h_to_2s 2s linear both';
            id('line_up').style.webkitAnimation = 'line_up_1h_to_2s 2s linear both';
        }
    }

    setTimeout(show3,4000)
}
function show3()
{
    if(img_bili>1)
        before = false;
    else
        before = true;
    image_url_index++;
    if(image_url_index == Onload_imgs_url.length)
        image_url_index = 0;
    img_bili = image_size_width[image_url_index]/image_size_height[image_url_index];
    setImage(3,image_url_index,img_bili);

    id('line_left3').style.webkitAnimation = '';
    id('line_right3').style.webkitAnimation = '';
    id('line_up3').style.webkitAnimation = '';
    id('line_down3').style.webkitAnimation = '';

    id('page4').style.display = 'none';
    id('page4').style.webkitAnimation = '';
    id('div4s').style.webkitAnimation = '';
    id('div4h').style.webkitAnimation = '';

    id('line_left4').style.display = 'none';
    id('line_right4').style.display = 'none';
    id('line_up4').style.display = 'none';
    id('line_down4').style.display = 'none';
    id('line_left4').style.webkitAnimation = '';
    id('line_right4').style.webkitAnimation = '';
    id('line_up4').style.webkitAnimation = '';
    id('line_down4').style.webkitAnimation = '';
    id('line_center').style.webkitAnimation = '';


    if(img_bili>1)
    {
        if(before)
        {
            //s->h
            var box = id('content_box');
            box.style.webkitAnimation = 'box_2s_to_3h 2s linear both';

            id('page3').style.webkitAnimation = 'fadein 0.5s linear 1.8s both';
            var line_left3 = id('line_left3');
            line_left3.style.top = '-484px';
            line_left3.style.left = '54px';
            line_left3.style.height = '1000px';
            var line_right3 = id('line_right3');
            line_right3.style.top = '206px';
            line_right3.style.height = '351px';
            line_right3.style.left = '445px';
            var line_up3 = id('line_up3');
            line_up3.style.top = '241px';
            line_up3.style.left = '55px';
            line_up3.style.width = '1000px';
            var line_down3 = id('line_down3');
            line_down3.style.top = '518px';
            line_down3.style.left = '-553px';
            line_down3.style.width = '1000px';
            
        }
        else
        {
            //h->h
            var box = id('content_box');
            box.style.webkitAnimation = 'box_2h_to_3h 2s linear both';

            id('page3').style.webkitAnimation = 'fadein 0.5s linear 1.8s both';
            var line_left3 = id('line_left3');
            line_left3.style.top = '-484px';
            line_left3.style.left = '54px';
            line_left3.style.height = '1000px';
            var line_right3 = id('line_right3');
            line_right3.style.top = '206px';
            line_right3.style.height = '351px';
            line_right3.style.left = '445px';
            var line_up3 = id('line_up3');
            line_up3.style.top = '241px';
            line_up3.style.left = '55px';
            line_up3.style.width = '1000px';
            var line_down3 = id('line_down3');
            line_down3.style.top = '518px';
            line_down3.style.left = '-553px';
            line_down3.style.width = '1000px';
        }
    }
    else
    {
        if(before)
        {
            //s->s
            var box = id('content_box');
            box.style.webkitAnimation = 'box_2s_to_3s 2s linear both';

            id('page3').style.webkitAnimation = 'fadein 0.5s linear 1.8s both';
            var line_left3 = id('line_left3');
            line_left3.style.top = '-320px';
            line_left3.style.left = '54px';
            line_left3.style.height = '1000px';
            var line_right3 = id('line_right3');
            line_right3.style.top = '0px';
            line_right3.style.left = '445px';
            line_right3.style.height = '1000px';
            var line_up3 = id('line_up3');
            line_up3.style.top = '80px';
            line_up3.style.left = '55px';
            line_up3.style.width = '1000px';
            var line_down3 = id('line_down3');
            line_down3.style.top = '678px';
            line_down3.style.left = '-553px';
            line_down3.style.width = '1000px';
        }
        else
        {
            //h->s
            var box = id('content_box');
            box.style.webkitAnimation = 'box_2h_to_3s 2s linear both';

            id('page3').style.webkitAnimation = 'fadein 0.5s linear 1.8s both';
            var line_left3 = id('line_left3');
            line_left3.style.top = '-320px';
            line_left3.style.left = '54px';
            line_left3.style.height = '1000px';
            var line_right3 = id('line_right3');
            line_right3.style.top = '0px';
            line_right3.style.left = '445px';
            line_right3.style.height = '1000px';
            var line_up3 = id('line_up3');
            line_up3.style.top = '80px';
            line_up3.style.left = '55px';
            line_up3.style.width = '1000px';
            var line_down3 = id('line_down3');
            line_down3.style.top = '678px';
            line_down3.style.left = '-553px';
            line_down3.style.width = '1000px';
        }
    }

    setTimeout(show4,4000)
}
function show4()
{
    if(img_bili>1)
        before = false;
    else
        before = true;
    image_url_index++;
    if(image_url_index == Onload_imgs_url.length)
        image_url_index = 0;
    img_bili = image_size_width[image_url_index]/image_size_height[image_url_index];

    setImage(4,image_url_index,img_bili);
    id('page4').style.display = 'block';
    id('line_up4').style.display =  'block';
    id('line_down4').style.display =  'block';
    id('line_left4').style.display =  'block';
    id('line_right4').style.display =  'block';
    id('content_box').style.display = 'none';
    if(img_bili > 1)
    {
        if(before)
        {
            //s->h
            var page3 = id('page3');
            page3.style.webkitAnimation = 'div_3s_to_4s 2s ease-in-out both';
            var page4 = id('page4');
            page4.style.webkitAnimation = 'div_4s_show 2s ease-in-out both';

            var line_left4 = id('line_left4');
            line_left4.style.top = '-484px';
            line_left4.style.left = '54px';
            var line_right4 = id('line_right4');
            line_right4.style.top = '242px';
            line_right4.style.left = '445px';
            var line_up4 = id('line_up4');
            line_up4.style.top = '241px';
            line_up4.style.left = '125px';
            var line_down4 = id('line_down4');
            line_down4.style.top = '518px';
            line_down4.style.left = '-553px';
            id('line_left3').style.webkitAnimation = 'line_right4s_out 2s linear both';

        }
        else
        {
            //h->h
            var page3 = id('page3');
            page3.style.webkitAnimation = 'div_3s_to_4s 2s ease-in-out both';
            var page4 = id('page4');
            page4.style.webkitAnimation = 'div_4s_show 2s ease-in-out both';

            var line_left4 = id('line_left4');
            line_left4.style.top = '-484px';
            line_left4.style.left = '54px';
            var line_right4 = id('line_right4');
            line_right4.style.top = '242px';
            line_right4.style.left = '445px';

            id('line_left3').style.webkitAnimation = 'line_right4s_out 2s linear both';
            var line_up4 = id('line_up4');
            line_up4.style.top = '241px';
            line_up4.style.left = '125px';
            var line_down4 = id('line_down4');
            line_down4.style.top = '518px';
            line_down4.style.left = '-553px';

        }
    }
    else
    {
        if(before)
        {
            //s->s
            var page3 = id('page3');
            page3.style.webkitAnimation = 'div_3s_to_4s 2s ease-in-out both';
            var page4 = id('page4');
            page4.style.webkitAnimation = 'div_4s_show 2s ease-in-out both';

            var line_left4 = id('line_left4');
            line_left4.style.top = '-320px';
            line_left4.style.left = '54px';
            var line_right4 = id('line_right4');
            line_right4.style.top = '0px';
            line_right4.style.left = '445px';
            var line_up4 = id('line_up4');
            line_up4.style.top = '81px';
            line_up4.style.left = '125px';
            var line_down4 = id('line_down4');
            line_down4.style.top = '678px';
            line_down4.style.left = '-553px';

        }
        else
        {
            //h->s
            var page3 = id('page3');
            page3.style.webkitAnimation = 'div_3s_to_4s 2s ease-in-out both';
            var page4 = id('page4');
            page4.style.webkitAnimation = 'div_4s_show 2s ease-in-out both';

            // id('line_down3').style.display = 'none';
            var line_left4 = id('line_left4');
            line_left4.style.top = '-320px';
            line_left4.style.left = '54px';
            var line_right4 = id('line_right4');
            line_right4.style.top = '0px';
            line_right4.style.left = '445px';
            var line_up4 = id('line_up4');
            line_up4.style.top = '81px';
            line_up4.style.left = '125px';
            line_up4.style.width = '392px';
            var line_down4 = id('line_down4');
            line_down4.style.top = '678px';
            line_down4.style.left = '-553px';

        }
    }

    setTimeout(show5,4000)
}
function show5()
{
    if(img_bili>1)
        before = false;
    else
        before = true;

    id('line_left4').style.display = 'block';
    id('line_right4').style.display = 'block';
    id('line_up4').style.display = 'block';
    id('line_down4').style.display = 'block';

    if(before)
    {
        id('div4s').style.webkitAnimation = 'fadeout 2s ease-out both';
        id('line_left4').style.webkitAnimation = 'line_left4s_out 2s linear both';
        id('line_up4').style.webkitAnimation = 'line_up4s_out 2s linear both';
        id('line_right4').style.webkitAnimation = 'line_right4s_out 2s linear both';
        id('line_down4').style.webkitAnimation = 'line_down4s_out 2s linear both';
    }
    else
    {
        id('div4h').style.webkitAnimation = 'fadeout 2s ease-out both';
        id('line_left4').style.webkitAnimation = 'line_left4s_out 2s linear both';
        id('line_up4').style.webkitAnimation = 'line_up4s_out 2s linear both';
        id('line_right4').style.webkitAnimation = 'line_right4s_out 2s linear both';
        id('line_down4').style.webkitAnimation = 'line_down4s_out 2s linear both';
    }

    // return;
    id('line_center').style.display = 'block';
    id('line_center').style.webkitAnimation = 'line_center_show 1s 1s linear both';
    clearshow1();
    setTimeout(function()
    {
        id('content_box').style.display = 'block';
        image_url_index++;
        if(image_url_index == Onload_imgs_url.length)
            image_url_index = 0;
        img_bili = image_size_width[image_url_index]/image_size_height[image_url_index];  
        setImage(1,image_url_index,img_bili);

        id('div1h').style.webkitTransformOrigin = '50% 50%';
        id('div1h').style.webkitAnimation = 'showdiv1 1s linear both';
        id('div1s').style.webkitTransformOrigin = '50% 50%';
        id('div1s').style.webkitAnimation = 'showdiv1 1s linear both';

        id('line_up').style.display = 'block';
        id('line_down').style.display = 'block';
        id('line_center').style.display = 'none';
        var div1smask = id('div1smask');
        var div1hmask = id('div1hmask');
        if(img_bili>1)
        {
            id('line_up').style.webkitAnimation = 'line_up_1h 1s linear both';
            id('line_down').style.webkitAnimation = 'line_down_1h 1s linear both';
            div1hmask.style.display = 'block';
            div1smask.style.display = 'none';
            div1hmask.style.webkitAnimation = 'mask1 0.3s 2 2s linear both';
        }
        else
        {
            id('line_up').style.webkitAnimation = 'line_up_1s 1s linear both';
            id('line_down').style.webkitAnimation = 'line_down_1s 1s linear both';
            div1hmask.style.display = 'none';
            div1smask.style.display = 'block';
            div1smask.style.webkitAnimation = 'mask1 0.3s 2 2s linear both';
        }

        setTimeout(show2,4000);
    },2200)
}
function clearshow1()
{
    var div1h = id('div1h');
    var div1s = id('div1s');
    div1h.style.display = 'none';
    div1s.style.display = 'none';
    div1h.style.webkitAnimation = '';
    div1s.style.webkitAnimation = '';

    var line_up = id('line_up');
    var line_down = id('line_down');
    line_up.style.display = 'none';
    line_down.style.display = 'none';
    id('line_up').style.webkitAnimation = '';
    id('line_down').style.webkitAnimation = '';

    var content = id('content_box');
    content.style.display = 'none';
    content.style.webkitAnimation = '';

    var div2s = id('div2s');
    div2s.style.display = 'none';
    div2s.style.webkitAnimation = '';
    var div2h = id('div2h');
    div2h.style.display = 'none';
    div2h.style.webkitAnimation = '';
    var line_left2 = id('line_left2');
    line_left2.style.display = 'none';
    line_left2.style.webkitAnimation = '';
    var line_right2 = id('line_right2');
    line_right2.style.display = 'none';
    line_right2.style.webkitAnimation = '';
    var line_up2 = id('line_up2');
    line_up2.style.display = 'none';
    line_up2.style.webkitAnimation = '';
    line_left.style.webkitAnimation = '';
    line_left.style.display = 'none';

    id('div1hmask').style.webkitAnimation = '';
    id('div1smask').style.webkitAnimation = '';
    id('div2hmask1').style.webkitAnimation = '';
    id('div2hmask2').style.webkitAnimation = '';
    id('div2smask1').style.webkitAnimation = '';
    id('div2smask2').style.webkitAnimation = '';
    // id('page4').style.webkitAnimation = '';
}
function setImage(pageindex,image_url_index,img_bili)
{
    var divh = id('div'+pageindex+'h');
    var divs = id('div'+pageindex+'s');
    if(img_bili>1)
    {
        divh.style.display = 'block';
        divs.style.display = 'none';

        var img = id('img'+pageindex+'h');
        img.src = Onload_imgs_url[image_url_index];

        if(img_bili>393/280)
        {
            img.style.height = '280px';
            img.style.width = 280*img_bili + 'px';
            img.style.top = '0px';
            img.style.left = -((280*img_bili-393)/2)+'px';
        }
        else
        {
            img.style.width = '393px';
            img.style.height = 393/img_bili + 'px';
            img.style.left = '0px';
            img.style.top = -((393/img_bili-280)/2) + 'px';
        }
    }
    else
    {
        divh.style.display = 'none';
        divs.style.display = 'block';

        var img = id('img'+pageindex+'s');
        img.src = Onload_imgs_url[image_url_index];

        if(img_bili>393/600)
        {
            img.style.height = '600px';
            img.style.width = 600*img_bili + 'px';
            img.style.top = '0px';
            img.style.left = -((600*img_bili-393)/2)+'px';
        }
        else
        {
            img.style.width = '393px';
            img.style.height = 393/img_bili + 'px';
            img.style.left = '0px';
            img.style.top = -((393/img_bili-600)/2) + 'px';
        }
    }
}


call_me(load_images);

</script>
