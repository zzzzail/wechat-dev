<?
$p=$_WEITE['web_pic_url']."xuehua/";
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
    #snow_top
    {
        top: -30px;
        left: -10px;
        -webkit-animation: snow_top 3s linear infinite alternate;
    }
    @-webkit-keyframes snow_top
    {
        from  {-webkit-transform: translate(0px,0px);}
        to    {-webkit-transform: translate(-50px,0px);}
    }
    #div1v,#div1vmask,#div1vlight
    {
        width: 381px;
        height: 553px;
        background-color: #fff;
        top: 100px;
        left: 62px;
        overflow: hidden;
    }
    #div1h,#div1hmask,#div1hlight
    {
        width: 440px;
        height: 300px;
        background-color: #fff;
        top: 230px;
        left: 18px;
        overflow: hidden;
    }
    #div1v,#div1h
    {
        opacity: 1;
        border: 6px solid #fff;
        opacity: 0;
        position: absolute;
    }
    #div1vmask,#div1hmask
    {
        -webkit-transform: translate(-368px,0px) scale(.5,.01);
        box-shadow: 22px 24px 20px rgba(8, 7, 7, 0.5);
        position: absolute;
    }
    #div1vlight,#div1hlight
    {
        opacity: 0.1;
        -webkit-transform: scale(1,0);
        position: absolute;
    }
    @-webkit-keyframes show_div1vmask
    {
        0%  {-webkit-transform: translate(-368px,0px) scale(.5,.01);opacity: 0.5;-webkit-animation-timing-function:linear;}
        50% {-webkit-transform: translate(0px,0px) scale(1,.01);opacity:0.2;-webkit-animation-timing-function:ease-out;}
        100% {-webkit-transform: translate(0px,0px) scale(1,1);opacity: 0.7}
    }
    @-webkit-keyframes out_div1vmask
    {
        0%  {-webkit-transform: translate(0px,0px) scale(1,1);opacity:1 ;-webkit-animation-timing-function: ease-out;}
        50% {-webkit-transform: translate(0px,0px) scale(.8,.01);opacity: 0.5}
        100%{-webkit-transform: translate(500px,0px) scale(.8,.01);opacity: 0.1}
    }
    @-webkit-keyframes show_div1vlight
    {
        0% {-webkit-transform: scale(1,0);opacity: 0.2}
        99%{-webkit-transform: scale(1,1);opacity: 0.2}
        100%{-webkit-transform: scale(1,1);opacity: 0}
    }
    @-webkit-keyframes out_div1vlight
    {
        0% {-webkit-transform: scale(1,0);opacity: 0.1}
        95%{-webkit-transform: scale(1,1);opacity: 1}
        100%{opacity: 0}
    }
    @-webkit-keyframes fadein
    {
        from {opacity: 0}
        to   {opacity: 1}
    }
    @-webkit-keyframes fadeout
    {
        from {opacity: 1}
        to   {opacity: 0}
    }

    .div2h
    {
        width: 450px;
        height: 300px;
        background-color: #fff;
        box-shadow: 12px 24px 20px rgba(8, 7, 7, 0.5);
        overflow: hidden;
        border: 4px solid #fff;
    }
    .div2v
    {
        width: 350px;
        height: 500px;
        background-color: #fff;
        box-shadow: 12px 24px 20px rgba(8, 7, 7, 0.5);
        overflow: hidden;
        border: 4px solid #fff;
    }
    #div21h
    {
        left: 25px;
        top: 150px;
        -webkit-transform: translate(0px,0px) scale(.7);
        position: absolute;
    }
    #div21v
    {
        left: 91px;
        top: 24px;
        -webkit-transform: translate(0px,0px) scale(.5);
        position: absolute
    }
    #div22h
    {
        left: 25px;
        top: 320px;
        -webkit-transform: translate(0px,0px) scale(.7);
        position: absolute;
    }
    #div22v
    {
        left: 92px;
        top: 320px;
        -webkit-transform: translate(0px,0px) scale(.5);
        position: absolute;
    }
    @-webkit-keyframes in_div21h
    {
        0%  {-webkit-transform: translate(415px,-7px) scale(.7);opacity: 1;-webkit-animation-timing-function: ease-out;}
        14% {-webkit-transform: translate(11px,-7px) scale(.7);-webkit-animation-timing-function: ease-in-out;}
        28% {-webkit-transform: translate(-4px,45px) scale(1);-webkit-animation-timing-function: ease-in-out;}
        42% {-webkit-transform: translate(-4px,45px) scale(1);-webkit-animation-timing-function: ease-in-out;}
        70% {-webkit-transform: translate(2px,-94px) scale(.6);-webkit-animation-timing-function: ease-in-out;}
        85% {-webkit-transform: translate(2px,-94px) scale(.6);-webkit-animation-timing-function: ease-in-out;}
        100% {-webkit-transform: translate(-420px,-7px) scale(.7);opacity: 1;-webkit-animation-timing-function: ease-in;}
    }
    @-webkit-keyframes in_div21v
    {
        0%  {-webkit-transform: translate(350px,-7px) scale(.5);opacity: 1;-webkit-animation-timing-function: ease-out;}
        14% {-webkit-transform: translate(0px,-7px) scale(.5);-webkit-animation-timing-function: ease-in-out;}
        28% {-webkit-transform: translate(-9px,39px) scale(.85);-webkit-animation-timing-function: ease-in-out;}
        42% {-webkit-transform: translate(-9px,39px) scale(.85);-webkit-animation-timing-function: ease-in-out;}
        70% {-webkit-transform: translate(-9px,-101px) scale(.35);-webkit-animation-timing-function: ease-in-out;}
        85% {-webkit-transform: translate(-9px,-101px) scale(.35);-webkit-animation-timing-function: ease-in-out;}
        100% {-webkit-transform: translate(-360px,-7px) scale(.5);opacity: 1;-webkit-animation-timing-function: ease-in;}
    }
    @-webkit-keyframes in_div22h
    {
        0%  {-webkit-transform: translate(-420px,106px) scale(.7);opacity: 1;-webkit-animation-timing-function: ease-out;}
        14% {-webkit-transform: translate(-5px,106px) scale(.7);-webkit-animation-timing-function: ease-in-out;}
        28% {-webkit-transform: translate(-9px,158px) scale(.55);-webkit-animation-timing-function: ease-in-out;}
        42% {-webkit-transform: translate(-9px,158px) scale(.55);-webkit-animation-timing-function: ease-in-out;}
        70% {-webkit-transform: translate(0px,-4px) scale(1);-webkit-animation-timing-function: ease-in-out;}
        85% {-webkit-transform: translate(0px,-4px) scale(1);-webkit-animation-timing-function: ease-in-out;}
        100% {-webkit-transform: translate(415px,106px) scale(.7);opacity: 1;-webkit-animation-timing-function: ease-in;}
    }
    @-webkit-keyframes in_div22v
    {
        0%  {-webkit-transform: translate(-370px,0px) scale(.5);opacity: 1;-webkit-animation-timing-function: ease-out;}
        14% {-webkit-transform: translate(-8px,0px) scale(.5);-webkit-animation-timing-function: ease-in-out;}
        28% {-webkit-transform: translate(-14px,69px) scale(.35);-webkit-animation-timing-function: ease-in-out;}
        42% {-webkit-transform: translate(-14px,69px) scale(.35);-webkit-animation-timing-function: ease-in-out;}
        70% {-webkit-transform: translate(-14px,-89px) scale(.85);-webkit-animation-timing-function: ease-in-out;}
        85% {-webkit-transform: translate(-14px,-89px) scale(.85);-webkit-animation-timing-function: ease-in-out;}
        100% {-webkit-transform: translate(370px,0px) scale(.5);opacity: 1;-webkit-animation-timing-function: ease-in;}
    }
    #div31h
    {
        top: 0px;
        left: 0px;
       -webkit-transform: translate(0px,0px) rotate(0deg) scale(1);
        opacity: 1;
        position: absolute;
    }
    #div32h
    {
        top: 0px;
        left: 0px;
        -webkit-transform: translate(0px,0px) rotate(0deg) scale(1);
        opacity: 1;
        position: absolute;
    }
    #div33h
    {
        top: 0px;
        left: 0px;
        -webkit-transform: translate(0px,0px) rotate(0deg) scale(1);
        opacity: 1;
        position: absolute;
    }
    @-webkit-keyframes fadeout1
    {
        0% {opacity: 1}
        90%{opacity: 1}
        100%{opacity: 0}
    }
    @-webkit-keyframes in_div31h
    { 
        0%   {-webkit-transform: translate(-355px,515px) rotate(0deg) scale(.52);}
        8%  {-webkit-transform: translate(-115px,467px) rotate(-21deg) scale(.52);}
        20%  {-webkit-transform: translate(-86px,488px) rotate(-21deg) scale(.52);}
        36%  {-webkit-transform: translate(-86px,488px) rotate(-21deg) scale(.52);}
        48%  {-webkit-transform: translate(-86px,488px) rotate(-21deg) scale(.52);}
        64%  {-webkit-transform: translate(-86px,488px) rotate(-21deg) scale(.52);}
        76%  {-webkit-transform: translate(31px,172px) rotate(0deg) scale(.96);}
        90%  {-webkit-transform: translate(31px,172px) rotate(0deg) scale(.96);}
        100% {-webkit-transform: translate(-355px,515px) rotate(0deg) scale(.52);}
    }
    @-webkit-keyframes in_div32h
    {
        0%  {-webkit-transform: translate(22px,750px) rotate(0deg) scale(.52);}
        8%  {-webkit-transform: translate(27px,486px) rotate(-37deg) scale(.52)}
        20% {-webkit-transform: translate(102px,499px) rotate(-30deg) scale(.52);}
        36% {-webkit-transform: translate(102px,499px) rotate(-30deg) scale(.52);}
        48% {-webkit-transform: translate(31px,172px) rotate(0deg) scale(.96);}
        64% {-webkit-transform: translate(31px,172px) rotate(0deg) scale(.96);}
        76% {-webkit-transform: translate(-86px,488px) rotate(-21deg) scale(.52)}
        90% {-webkit-transform: translate(-86px,488px) rotate(-21deg) scale(.52)}
        100%{-webkit-transform: translate(22px,750px) rotate(0deg) scale(.52);}
    }
    @-webkit-keyframes in_div33h
    {
        0%  {-webkit-transform: translate(402px,521px) rotate(0deg) scale(.52);}
        8%  {-webkit-transform: translate(141px,480px) rotate(-36deg) scale(.52);}
        20% {-webkit-transform: translate(31px,172px) rotate(0deg) scale(.96);}
        36% {-webkit-transform: translate(31px,172px) rotate(0deg) scale(.96);}
        48% {-webkit-transform: translate(102px,499px) rotate(-30deg) scale(.52);}
        64% {-webkit-transform: translate(102px,499px) rotate(-30deg) scale(.52);}
        76% {-webkit-transform: translate(102px,499px) rotate(-30deg) scale(.52);}
        90% {-webkit-transform: translate(102px,499px) rotate(-30deg) scale(.52);}
        100%{-webkit-transform: translate(402px,521px) rotate(0deg) scale(.52);}
    }
    @-webkit-keyframes in_div31v
    { 
        0%   {-webkit-transform: translate(-271px,391px) rotate(20deg) scale(.52);}
        8%   {-webkit-transform: translate(-36px,391px) rotate(67deg) scale(.52);}
        20%  {-webkit-transform: translate(-7px,414px) rotate(67deg) scale(.52);}
        36%  {-webkit-transform: translate(-7px,414px) rotate(67deg) scale(.52);}
        48%  {-webkit-transform: translate(-7px,414px) rotate(67deg) scale(.52);}
        64%  {-webkit-transform: translate(-7px,414px) rotate(67deg) scale(.52);}
        76%  {-webkit-transform: translate(114px,71px) rotate(0deg) scale(.96);}
        90%  {-webkit-transform: translate(114px,71px) rotate(0deg) scale(.96);}
        100% {-webkit-transform: translate(-355px,515px) rotate(0deg) scale(.52);}
    }
    @-webkit-keyframes in_div32v
    {
        0%  {-webkit-transform: translate(97px,700px) rotate(77deg) scale(.52);}
        8%  {-webkit-transform: translate(97px,415px) rotate(50deg) scale(.52)}
        20% {-webkit-transform: translate(180px,425px) rotate(58deg) scale(.52);}
        36% {-webkit-transform: translate(180px,425px) rotate(58deg) scale(.52);}
        48% {-webkit-transform: translate(114px,71px) rotate(0deg) scale(.96);}
        64% {-webkit-transform: translate(114px,71px) rotate(0deg) scale(.96);}
        76% {-webkit-transform: translate(-7px,414px) rotate(67deg) scale(.52)}
        90% {-webkit-transform: translate(-7px,414px) rotate(67deg) scale(.52)}
        100%{-webkit-transform: translate(22px,750px) rotate(0deg) scale(.52);}
    }
    @-webkit-keyframes in_div33v
    {
        0%  {-webkit-transform: translate(471px,419px) rotate(23deg) scale(.52);}
        8%  {-webkit-transform: translate(210px,408px) rotate(48deg) scale(.5)}
        20% {-webkit-transform: translate(114px,71px) rotate(0deg) scale(.96);}
        36% {-webkit-transform: translate(114px,71px) rotate(0deg) scale(.96);}
        48% {-webkit-transform: translate(180px,425px) rotate(58deg) scale(.52);}
        64% {-webkit-transform: translate(180px,425px) rotate(58deg) scale(.52);}
        76% {-webkit-transform: translate(180px,425px) rotate(58deg) scale(.52);}
        90% {-webkit-transform: translate(180px,425px) rotate(58deg) scale(.52);}
        100%{-webkit-transform: translate(432px,551px) rotate(0deg) scale(.52);}
    }
    @-webkit-keyframes ani_zuoyou
    {
        from  {-webkit-transform: translate(5px,0px);}
        to    {-webkit-transform: translate(10px,0px);}
    }
    @-webkit-keyframes ani_shangxia
    {
        from  {-webkit-transform: translate(0px,-4px);}
        to    {-webkit-transform: translate(0px,4px);}
    }
    @-webkit-keyframes ani_zhuangdong
    {
        from  {-webkit-transform: rotate(-3deg);}
        to    {-webkit-transform: rotate(3deg);}
    }
    .zuoyou
    {
        position: absolute;
        top: 0px;
        left: 0px;
        -webkit-animation: ani_zuoyou 1s linear infinite alternate;
    }
    .shangxia1
    {
        position: absolute;
        left: 0px;
        top: 0px;
        -webkit-animation: ani_shangxia 1s linear infinite alternate;
    }
    .shangxia2
    {
        position: absolute;
        left: 0px;
        top: 0px;
        -webkit-animation: ani_shangxia 1s linear 1s infinite alternate;
    }
    .zhuangdong1h
    {
        -webkit-animation: ani_zhuangdong 2s linear infinite alternate;
    }
    .zhuangdong2h
    {
        -webkit-animation: ani_zhuangdong 2s 1.3s linear infinite alternate;
    }
    .zhuangdong3h
    {
        -webkit-animation: ani_zhuangdong 2s 0.6s linear infinite alternate;
    }
    .div3hzhuang
    {
        position: absolute;
        left: 0px;
        top: 0px;
        width: 450px;
        height: 300px;
        background-color: #fff;
        box-shadow: 12px 24px 20px rgba(8, 7, 7, 0.5);
        overflow: hidden;
        border: 4px solid #fff;
    }
    .div3vzhuang
    {
        position: absolute;
        left: 0px;
        top: 0px;
        width: 300px;
        height: 450px;
        background-color: #fff;
        box-shadow: 12px 24px 20px rgba(8, 7, 7, 0.5);
        overflow: hidden;
        border: 4px solid #fff;
    }
    .div3h
    {
        width: 450px;
        height: 300px;
    }
    .div3v
    {
        width: 300px;
        height: 450px;
    }
    #div31v
    {
        top: 0px;
        left: 0px;
       -webkit-transform: translate(0px,0px) rotate(0deg) scale(1);
        opacity: 1;
        position: absolute;
    }
    #div32v
    {
        top: 0px;
        left: 0px;
        -webkit-transform: translate(0px,0px) rotate(0deg) scale(1);
        opacity: 1;
        position: absolute;
    }
    #div33v
    {
        top: 0px;
        left: 0px;
        -webkit-transform: translate(0px,0px) rotate(0deg) scale(1);
        opacity: 1;
        position: absolute;
    }
    @-webkit-keyframes xuehua1
    {
        from  {-webkit-transform: translate(0px,0px) rotate(0deg);}
        to    {-webkit-transform: translate(0px,1000px) rotate(360deg);}
    }
    @-webkit-keyframes xuehua
    {
        0%  {-webkit-transform: translate(0px,0px) rotate(0deg);opacity: 1}
        68% {-webkit-transform: translate(0px,700px) rotate(252deg);opacity: 1}
        68.5% {-webkit-transform: translate(0px,700px) rotate(252deg);opacity: 0}
        69% {-webkit-transform: translate(0px,-300px) rotate(252deg);opacity: 0}
        70% {-webkit-transform: translate(0px,-300px) rotate(252deg);opacity: 1}
        100%{-webkit-transform: translate(0px,0px) rotate(0deg);opacity: 1}

    }
    @-webkit-keyframes wordrotate
    {
        0%  {-webkit-transform: translate(-150px,0px) rotate(-400deg);opacity: 0}
        50%  {-webkit-transform: translate(-75px,0px) rotate(-200deg);opacity: 0.2}
        100%{-webkit-transform: translate(0px,0px) rotate(0deg);opacity: 1}
    }
    @-webkit-keyframes wordrotateout
    {
        100%  {-webkit-transform: translate(100px,0px) rotate(400deg);opacity: 0}
        50%  {-webkit-transform: translate(50px,0px) rotate(200deg);opacity: 0.5}
        0%{-webkit-transform: translate(0px,0px) rotate(0deg);opacity: 1}
    }
</style>

<div id='container'>
    <img src='<?=$p?>images/bg1.jpg'>
    
    <img id='snow_top' src='<?=$p?>images/shang.png'>

    <!-- <div id='div1v'></div> -->
    <div class='zuoyou'><div id='div1vmask' style='display:none'></div></div>
    <div class='zuoyou'><div id='div1v' style='display:none'><img id='img1v' style='position:absolute'></div></div>
    <div class='zuoyou'><div id='div1vlight' style='display:none'></div></div>

    <div class='zuoyou'><div id='div1hmask' style='display:none'></div></div>
    <div class='zuoyou'><div id='div1h' style='display:none'><img id='img1h' style='position:absolute'></div></div>
    <div class='zuoyou'><div id='div1hlight' style='display:none'></div></div>

    <div class='shangxia1'><div id='div21h' class='div2h' style='display:none'><img id='img21h' style='position:absolute'></div></div>
    <div class='shangxia2'><div id='div22h' class='div2h' style='display:none'><img id='img22h' style='position:absolute'></div></div>

    <div class='shangxia1'><div id='div21v' class='div2v' style='display:none'><img id='img21v' style='position:absolute'></div></div>
    <div class='shangxia2'><div id='div22v' class='div2v' style='display:none'><img id='img22v' style='position:absolute'></div></div>

    <div id='div31h' class='div3h' style='display:none'><div class='zhuangdong1h div3hzhuang'><img id='img31h' style='position:absolute'></div></div>
    <div id='div32h' class='div3h' style='display:none'><div class='zhuangdong2h div3hzhuang'><img id='img32h' style='position:absolute'></div></div>
    <div id='div33h' class='div3h' style='display:none'><div class='zhuangdong3h div3hzhuang'><img id='img33h' style='position:absolute'></div></div>

    <div id='div31v' class='div3v' style='display:none'><div class='zhuangdong1h div3vzhuang'><img id='img31v' style='position:absolute'></div></div>
    <div id='div32v' class='div3v' style='display:none'><div class='zhuangdong2h div3vzhuang'><img id='img32v' style='position:absolute'></div></div>
    <div id='div33v' class='div3v' style='display:none'><div class='zhuangdong3h div3vzhuang'><img id='img33v' style='position:absolute'></div></div>

    <img id='snow1' src='<?=$p?>images/150.png' style='left:320px;top:-155px;'>
    <img id='snow' src='<?=$p?>images/150.png' style='left:39px;top:134px;'>

    <div id='pagetitle' style='pointer:none'>
        <div style='width:440px;left:30px;height:180px;font-size:40px;color:#fff;position:absolute;top:250px;overflow:hidden;text-align:center;text-shadow: 1px 1px 1px #000'>
            <div style='width:440px;height:180px;position:absolute;display:table'>
                <div id='titlecontent' style='width:400px;height:150px;display:table-cell;vertical-align:middle;line-height:150%;'>
                </div>
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
var delaytime;
var img_bili;
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
        Onload_imgs_url[i] = 'loading';
        img.onload=image_onload;
        img.onerror = image_onerror;
    }       
}
function image_onerror()
{
    var img = event.target;
    var index = img.index;
    error_num ++;
    Onload_imgs_url[index] = 'not find';
    console.log(Onload_imgs_url[index]);
    console.log(have_num + '-' + error_num);
    if((have_num >= 10 || slider_images_url.length == (have_num+error_num)) && canshow == true)
    {   
        reshow = false;
        canshow =false;
        if(have_num == 0)
            return;
        var end_titletime = new Date();
        end_titletime = end_titletime.getTime();
        var dis_titletime = Math.abs(end_titletime-begin_titletime);
        if(e_desc.length<30)
        {
            delaytime = (e_desc.length*0.2 +2)*1000;
        }
        else
        {
            delaytime = (30*0.2 +2)*1000;
        }
        
        if(dis_titletime>delaytime)
        {
            distitle();
            timeout0 = setTimeout(show1,1500);
        }
        else
        {
            dis_titletime = delaytime- dis_titletime;
            timeout0 = setTimeout(function()
                {
                    distitle();
                    timeout5 = setTimeout(show1,1500);
                },dis_titletime);
        }    }
}
function image_onload(event)
{
    if(reshow == true)
        return;

    var img=event.target;
    var index = img.index;

    Onload_imgs_url[index] = img.src;
    image_size_height[index] = img.height;
    image_size_width[index] = img.width;
    have_num++;
    console.log(Onload_imgs_url[index]);
    console.log(have_num + '-' + error_num);
    if((have_num >= 10 || slider_images_url.length == (have_num+error_num)) && canshow == true)
    {   
        reshow = false;
        canshow =false;
        if(have_num == 0)
            return;
        var end_titletime = new Date();
        end_titletime = end_titletime.getTime();
        var dis_titletime = Math.abs(end_titletime-begin_titletime);
        if(e_desc.length<30)
        {
            delaytime = (e_desc.length*0.2 +2)*1000;
        }
        else
        {
            delaytime = (30*0.2 +2)*1000;
        }
        
        if(dis_titletime>delaytime)
        {
            distitle();
            timeout0 = setTimeout(show1,1500);
        }
        else
        {
            dis_titletime = delaytime- dis_titletime;
            timeout0 = setTimeout(function()
                {
                    distitle();
                    timeout5 = setTimeout(show1,1500);
                },dis_titletime);
        }
    }
}
function showtitle()
{
    if(reshow == true)
        return;
    var content = id('titlecontent');
    var html_text = '<div id="texttitle" style="display:block;width:440px;">';

    for(var i = 0;i<e_desc.length;i++)
    {
        var j = i%11;
        html_text = html_text + '<span id="span'+i+'" style="position:relative;-webkit-animation: wordrotate 1.5s linear '+j*0.2+'s both">'+ e_desc[i]+'</span>';
        if(j == 10)
            html_text = html_text + '<br>';
    }
    content.innerHTML = html_text + '</div>';
}
function distitle()
{
    if(reshow == true)
        return;
    var content = id('titlecontent');
    var html_text = '<div id="texttitle" style="display:block;width:440px;">';

    for(var i = 0;i<e_desc.length;i++)
    {
        var j = 11-i%11;
        html_text = html_text + '<span id="span'+i+'" style="position:relative;-webkit-animation: wordrotateout 1s linear '+j*0.1+'s both">'+ e_desc[i]+'</span>';
        if(i%11 == 10)
            html_text = html_text + '<br>';
    }
    content.innerHTML = html_text + '</div>'
    id('snow').style.webkitAnimation = 'xuehua 15s linear infinite';
    id('snow1').style.webkitAnimation = 'xuehua1 15s 2s linear infinite';
}

function show1()
{
    setImage('1');
    img_bili = image_size_width[image_url_index]/image_size_height[image_url_index];
    image_url_index++;
    if(image_url_index == Onload_imgs_url.length)
        image_url_index = 0;
    if(img_bili > 1)
    {
        id('div1hmask').style.display = 'block';
        id('div1h').style.display = 'block';
        id('div1hlight').style.display = 'block';
        id('div1vmask').style.display = 'none';
        id('div1v').style.display = 'none';
        id('div1vlight').style.display = 'none';
        id('div1hmask').style.webkitAnimation = 'show_div1vmask 1s ease-out both';
        id('div1h').style.webkitAnimation = 'fadein 0.3s linear 1s both';
        id('div1hlight').style.webkitAnimation = 'show_div1vlight 0.8s linear 1s both';  
    }
    else
    {
        id('div1vmask').style.display = 'block';
        id('div1v').style.display = 'block';
        id('div1vlight').style.display = 'block';
        id('div1hmask').style.display = 'none';
        id('div1h').style.display = 'none';
        id('div1hlight').style.display = 'none';
        id('div1vmask').style.webkitAnimation = 'show_div1vmask 1s ease-out both';
        id('div1v').style.webkitAnimation = 'fadein 0.3s linear 1s both';
        id('div1vlight').style.webkitAnimation = 'show_div1vlight 0.8s linear 1s both'; 
    }
    timeout1 = setTimeout(show1_out,4000)
}
function show1_out()
{
    id('div1vmask').style.opacity = 1;
    id('div1vlight').style.webkitAnimation = 'out_div1vlight 0.8s ease-out both';
    id('div1v').style.webkitAnimation = 'fadeout1 0.7s ease-out both';
    id('div1vmask').style.webkitAnimation = 'out_div1vmask 1s 0.9s linear both';
    id('div1hmask').style.opacity = 1;
    id('div1hlight').style.webkitAnimation = 'out_div1vlight 0.8s ease-out both';
    id('div1h').style.webkitAnimation = 'fadeout1 0.7s ease-out both';
    id('div1hmask').style.webkitAnimation = 'out_div1vmask 1s 0.9s linear both';


    id('div21v').style.webkitAnimation = '';
    id('div22v').style.webkitAnimation = '';
    id('div21h').style.webkitAnimation = '';
    id('div22h').style.webkitAnimation = '';
    id('div21v').style.display = 'none';
    id('div22v').style.display = 'none';
    id('div21h').style.display = 'none';
    id('div22h').style.display = 'none';
    timeout2 = setTimeout(show2,1500);
}
function show2()
{
    setImage('21');
    img_bili = image_size_width[image_url_index]/image_size_height[image_url_index];
    if(img_bili > 1)
    {
        id('div21h').style.webkitAnimation = 'in_div21h 7s linear both';
    }
    else
    {
        id('div21v').style.webkitAnimation = 'in_div21v 7s linear both';
    }
    image_url_index++;
    if(image_url_index == Onload_imgs_url.length)
        image_url_index = 0;

    setImage('22');
    img_bili = image_size_width[image_url_index]/image_size_height[image_url_index];
    if(img_bili > 1)
    {
        id('div22h').style.webkitAnimation = 'in_div22h 7s linear both';
    }
    else
    {
        id('div22v').style.webkitAnimation = 'in_div22v 7s linear both';
    }
    image_url_index++;
    if(image_url_index == Onload_imgs_url.length)
        image_url_index = 0;

    id('div31h').style.display = 'none';
    id('div32h').style.display = 'none';
    id('div33h').style.display = 'none';
    id('div31h').style.webkitAnimation = '';
    id('div32h').style.webkitAnimation = '';
    id('div33h').style.webkitAnimation = '';
    id('div31v').style.display = 'none';
    id('div32v').style.display = 'none';
    id('div33v').style.display = 'none';
    id('div31v').style.webkitAnimation = '';
    id('div32v').style.webkitAnimation = '';
    id('div33v').style.webkitAnimation = '';
    timeout3 = setTimeout(show3,7000);
}
function show3()
{
    setImage('33');
    img_bili = image_size_width[image_url_index]/image_size_height[image_url_index];
    if(img_bili > 1)
    {
        id('div33h').style.webkitAnimation = 'in_div33h 14s linear both';
    }
    else
    {
        id('div33v').style.webkitAnimation = 'in_div33v 14s linear both';
    }
    image_url_index++;
    if(image_url_index == Onload_imgs_url.length)
        image_url_index = 0;

    setImage('32');
    img_bili = image_size_width[image_url_index]/image_size_height[image_url_index];
    if(img_bili > 1)
    {
        id('div32h').style.webkitAnimation = 'in_div32h 14s linear both';
    }
    else
    {
        id('div32v').style.webkitAnimation = 'in_div32v 14s linear both';
    }
    image_url_index++;
    if(image_url_index == Onload_imgs_url.length)
        image_url_index = 0;

    setImage('31');
    img_bili = image_size_width[image_url_index]/image_size_height[image_url_index];
    if(img_bili > 1)
    {
        id('div31h').style.webkitAnimation = 'in_div31h 14s linear both';
    }
    else
    {
        id('div31v').style.webkitAnimation = 'in_div31v 14s linear both';
    }
    image_url_index++;
    if(image_url_index == Onload_imgs_url.length)
        image_url_index = 0;

    timeout4 = setTimeout(show1,14000);
}


function setImage(pageid,img_bili)
{
    while(Onload_imgs_url[image_url_index] == 'not find' || Onload_imgs_url[image_url_index] == 'loading')
    {
        console.log(Onload_imgs_url[image_url_index]);
        image_url_index++;
        if(image_url_index == Onload_imgs_url.length)
            image_url_index = 0;
    }
    img_bili = image_size_width[image_url_index]/image_size_height[image_url_index];
    var img_obj;
    var div_obj;
    var div_obj1;
    if(pageid == '1')
    {
        if(img_bili>1)
        {
            img_obj = id('img1h');
            if(img_bili > (440/300))
            {
                img_obj.style.height = '300px';
                img_obj.style.width = 300*img_bili + 'px';
                img_obj.style.top = '0px';
                img_obj.style.left = -((300*img_bili-440)/2)+'px';
            }
            else
            {
                img_obj.style.width = '440px';
                img_obj.style.height = 440/img_bili + 'px';
                img_obj.style.left = '0px';
                img_obj.style.top = -((440/img_bili-300)/2)+'px';
            }
            id('div1v').style.display = 'none';
            id('div1h').style.display = 'block';
        }
        else
        {
            img_obj = id('img1v');
            if(img_bili >(381/553))
            {
                img_obj.style.height = '553px';
                img_obj.style.width = 553*img_bili + 'px';
                img_obj.style.top = '0px';
                img_obj.style.left = -((553*img_bili-381)/2)+'px';
            }
            else
            {
                img_obj.style.width = '381px';
                img_obj.style.height = 381/img_bili + 'px';
                img_obj.style.left = '0px';
                img_obj.style.top = -((381/img_bili-553)/2)+'px';
            }
            id('div1v').style.display = 'block';
            id('div1h').style.display = 'none';
        }
    }
    else
    {
        var imgname = 'img'+pageid;
        var divname = 'div'+pageid;
        if(img_bili > 1)
        {
            img_obj = id(imgname + 'h');
            div_obj = id(divname + 'h');
            div_obj1 = id(divname + 'v');

            div_obj.style.display = 'block';
            div_obj1.style.display = 'none';

            var img_width = 450;
            var img_height = 300

            if(img_bili >(img_width/300))
            {
                img_obj.style.height = img_height+'px';
                img_obj.style.width = img_height*img_bili + 'px';
                img_obj.style.top = '0px';
                img_obj.style.left = -((img_height*img_bili-img_width)/2)+'px';
            }
            else
            {
                img_obj.style.width = img_width+'px';
                img_obj.style.height = img_width/img_bili + 'px';
                img_obj.style.left = '0px';
                img_obj.style.top = -((img_width/img_bili-img_height)/2)+'px';
            }
        }
        else
        {
            img_obj = id(imgname + 'v');
            div_obj = id(divname + 'v');
            div_obj1 = id(divname + 'h');

            div_obj.style.display = 'block';
            div_obj1.style.display = 'none';

            var img_width;
            var img_height;
            if(pageid == '21' || pageid == '22')
            {
                img_width = 350;
                img_height = 500;
            }
            else
            {
                img_width = 300;
                img_height = 450;
            }

            if(img_bili >(img_width/500))
            {
                img_obj.style.height = img_height+'px';
                img_obj.style.width = img_height*img_bili + 'px';
                img_obj.style.top = '0px';
                img_obj.style.left = -((img_height*img_bili-img_width)/2)+'px';
            }
            else
            {
                img_obj.style.width = img_width+'px';
                img_obj.style.height = img_width/img_bili + 'px';
                img_obj.style.left = '0px';
                img_obj.style.top = -((img_width/img_bili-img_height)/2)+'px';
            }
        }
    }
    img_obj.src = Onload_imgs_url[image_url_index];
    console.log(img_obj.id+img_obj.src);
}
call_me(load_images);
function reload_scene()
{
    reshow = true;
    clearnodes();
    load_images();
}
function clearnodes()
{
    id('snow').style.webkitAnimation = '';
    id('snow1').style.webkitAnimation = '';
    id('div1h').style.webkitAnimation = '';
    id('div1v').style.webkitAnimation = '';
    id('div21h').style.webkitAnimation = '';
    id('div22h').style.webkitAnimation = '';
    id('div21v').style.webkitAnimation = '';
    id('div22v').style.webkitAnimation = '';
    id('div31h').style.webkitAnimation = '';
    id('div32h').style.webkitAnimation = '';
    id('div33h').style.webkitAnimation = '';
    id('div31v').style.webkitAnimation = '';
    id('div32v').style.webkitAnimation = '';
    id('div33v').style.webkitAnimation = '';
    id('div1h').style.display = 'none';
    id('div1v').style.display = 'none';
    id('div21h').style.display = 'none';
    id('div22h').style.display = 'none';
    id('div21v').style.display = 'none';
    id('div22v').style.display = 'none';
    id('div31h').style.display = 'none';
    id('div32h').style.display = 'none';
    id('div33h').style.display = 'none';
    id('div31v').style.display = 'none';
    id('div32v').style.display = 'none';
    id('div33v').style.display = 'none';
    id('titlecontent').innerHTML = '';
    id('div1hmask').style.display = 'none';
    id('div1hlight').style.display = 'none';
    id('div1hmask').style.webkitAnimation = '';
    id('div1hlight').style.webkitAnimation = '';
    id('div1vmask').style.display = 'none';
    id('div1vlight').style.display = 'none';
    id('div1vmask').style.webkitAnimation = '';
    id('div1vlight').style.webkitAnimation = '';
    clearTimeout(timeout0);
    clearTimeout(timeout1);
    clearTimeout(timeout2);
    clearTimeout(timeout3);
    clearTimeout(timeout4);
    clearTimeout(timeout5);
}
</script>
