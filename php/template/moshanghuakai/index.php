<?
$p=$_WEITE['web_pic_url']."moshanghuakai/";
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
#container >div,#container > img,#titleup>img,#titledown>img
{
    position: absolute;
}
#mo1
{
    left: -222px;
    top: -128px;
    opacity: 0;
}
#mo2
{
    left: -155px;
    top: 589px;
    opacity: 0;
}
#moxian1
{
    left: 58px;
    top: 504px;
    -webkit-transform-origin: 10% 50%;
    opacity: 0;
}
#moxian2
{
    left: 61px;
    top: 171px;
    width: 390px;
    -webkit-transform-origin: 10% 50%;
    opacity: 0;
}
#hua1
{
    left: 373px;
    top: 127px;
    opacity: 0;
    -webkit-transform-origin: 50% 90%;
}
#mofen
{
    left: 33px;
    top: 396px;
    opacity: 0;
}
#heye1
{
    left: 43px;
    top: 471px;
    opacity: 0;
}
#mozi
{
    left: 72px;
    top: 398px;
    opacity: 0;
}
#shangzi
{
    left: 148px;
    top: 417px;
    opacity: 0;
}
#huazi
{
    left: 142px;
    top: 469px;
    opacity: 0;
}
#kaizi
{
    left: 205px;
    top: 468px;
    opacity: 0;
}
#heye2
{
    left: 242px;
    top: 573px;
    opacity: 0;
    width: 95px;
    height: 107px;
}
#lianhua1
{
    left: 300px;
    top: 542px;
    opacity: 0;
    width: 97px;
    height: 116px;
}
#lianhua2
{
    left: 405px;
    top: 561px;
    opacity: 0;
    width: 23px;
    height: 72px;
}
#heye3
{
    left: 341px;
    top: 629px;
    opacity: 0;
}
.div1v
{
    width: 437px;
    height: 639px;
    left: 30px;
    top: 50px;
    overflow: hidden;
    box-shadow: 5px 3px 20px #03202B;
    opacity: 0;
}
.div1h
{
    width: 437px;
    height: 309px;
    left: 30px;
    top: 192px;
    overflow: hidden;
    box-shadow: 5px 3px 20px #03202B;
    opacity: 0;
}
.div21h
{
    width: 437px;
    height: 290px;
    left: 30px;
    top: 56px;
    overflow: hidden;
    box-shadow: 5px 3px 20px #03202B;
    opacity: 0;
}
.div22h
{
    width: 437px;
    height: 290px;
    left: 30px;
    top: 383px;
    overflow: hidden;
    box-shadow: 5px 3px 20px #03202B;
    opacity: 0;
}
.div21v
{
    width: 250px;
    height: 350px;
    left: 215px;
    top: 29px;
    overflow: hidden;
    box-shadow: 5px 3px 20px #03202B;
    opacity: 0;
}
.div22v
{
    width: 250px;
    height: 350px;
    left: 28px;
    top: 342px;
    overflow: hidden;
    box-shadow: 5px 3px 20px #03202B;
    opacity: 0;
}
#div41h
{
    width: 410px;
    height: 290px;
    left: 66px;
    top: 60px;
    overflow: hidden;
    box-shadow: 5px 3px 20px #03202B;
    opacity: 0;
}
#div42h
{
    width: 410px;
    height: 290px;
    left: 13px;
    top: 380px;
    overflow: hidden;
    box-shadow: 5px 3px 20px #03202B;

    opacity: 0;
}
#div41v
{
    width: 250px;
    height: 350px;
    left: 225px;
    top: 39px;
    overflow: hidden;
    box-shadow: 5px 3px 20px #03202B;
    opacity: 0;
}
#div42v
{
    width: 250px;
    height: 350px;
    left: 28px;
    top: 342px;
    overflow: hidden;
    box-shadow: 5px 3px 20px #03202B;
    opacity: 0;
}
</style>
<style type="text/css">
@-webkit-keyframes fadein
{
    from  {opacity: 0}
    to    {opacity: 1}
}
@-webkit-keyframes modian_in
{
    from  {-webkit-transform: scale(0.3);opacity: 1}
    to    {-webkit-transform: scale(1);opacity: 1}
}
@-webkit-keyframes heye3_in
{
    from  {-webkit-transform: scale(0.3);opacity: 0}
    to    {-webkit-transform: scale(1);opacity: 1}
}
@-webkit-keyframes heye1_in
{
    from  {-webkit-transform: scale(0.2);opacity: 0}
    to    {-webkit-transform: scale(1);opacity: 1}
}
@-webkit-keyframes heye_ani
{
    from  {-webkit-transform: rotate(0deg);}
    to    {-webkit-transform: rotate(5deg);}
}
@-webkit-keyframes mo1_in
{
    from  {-webkit-transform: translate(50px,-20px);opacity: 0}
    to    {-webkit-transform: translate(0px,0px);opacity: 1}
}
@-webkit-keyframes title_in
{
    from  {-webkit-transform: scale(1.05,1);opacity: 0}
    to    {-webkit-transform: scale(1,1);opacity: 1}
}
@-webkit-keyframes shuiwen
{
    0%  {-webkit-transform: scale(0.8);opacity: 0}
    50% {-webkit-transform: scale(1);opacity: 1}
    100%{-webkit-transform: scale(1.2);opacity: 0}
}
@-webkit-keyframes shuiwen2
{
    0%  {opacity: 0}
    30% {opacity: 1}
    70% {opacity: 1}
    100%{opacity: 0}
}
@-webkit-keyframes guangdian1
{
    0%   {opacity: 0;-webkit-transform:translate(0px,0px);}
    20%  {opacity: 1;-webkit-transform: translate(0px,0px);}
    100% {opacity: 1;-webkit-transform: translate(-377px,0px);}
}
@-webkit-keyframes guangdian2
{
    0%   {opacity: 0;-webkit-transform: translate(0px,0px);}
    20%  {opacity: 1;-webkit-transform: translate(0px,0px);}
    100% {opacity: 1;-webkit-transform: translate(377px,0px);}
}
@-webkit-keyframes yuwei
{
    from  {-webkit-transform: rotate(-20deg);}
    to    {-webkit-transform: rotate(20deg);}
}
@-webkit-keyframes yuchi1
{
    from  {-webkit-transform: scale(-0.5,1.3);}
    to    {-webkit-transform: scale(-1.2,1);}
}
@-webkit-keyframes yuchi2
{
    from  {-webkit-transform: scale(0.5,1.3);}
    to    {-webkit-transform: scale(1.2,1);}
}
@-webkit-keyframes yuyou1
{
    0%  {-webkit-transform: rotate(0deg);}
    70% {-webkit-transform: rotate(-51deg);}
    100%{-webkit-transform: rotate(-51deg);}
}
@-webkit-keyframes yuyou11
{
    0%  {-webkit-transform: rotate(90deg);}
    70% {-webkit-transform: rotate(90deg);}
    75% {-webkit-transform: translate(0px,0px) rotate(-189deg);}
    100%{-webkit-transform: translate(0px,190px) rotate(-189deg);}
}
@-webkit-keyframes yuyou2
{
    0%  {-webkit-transform: translate(0px,0px) rotate(-80deg);}
    60% {-webkit-transform: translate(25px,-160px) rotate(-65deg);}
    65% {-webkit-transform: translate(25px,-156px) rotate(-45deg);}
    100%{-webkit-transform: translate(125px,-209px) rotate(-25deg);}
}
@-webkit-keyframes fadeout
{
    from  {opacity: 1}
    to    {opacity: 0}
}
@-webkit-keyframes title_out
{
    from  {-webkit-transform: scale(1);opacity: 1}
    to    {-webkit-transform: scale(1.2);opacity: 0}
}
@-webkit-keyframes div1_in
{
    from  {-webkit-transform: scale(1.05);opacity: 0}
    to    {-webkit-transform: scale(1);opacity: 1}
}
@-webkit-keyframes div1_out
{
    from  {-webkit-transform: translate(0px,0px);opacity: 1}
    to    {-webkit-transform: translate(0px,-30px);opacity: 0}
}
@-webkit-keyframes div2_in
{
    from  {-webkit-transform: translate(0px,30px);opacity: 0}
    to    {-webkit-transform: translate(0px,0px);opacity: 1}
}
@-webkit-keyframes div21_out
{
    from  {-webkit-transform: translate(0px,0px);opacity: 1}
    to    {-webkit-transform: translate(40px,0px);opacity: 0}
}
@-webkit-keyframes div22_out
{
    from  {-webkit-transform: translate(0px,0px);opacity: 1}
    to    {-webkit-transform: translate(-40px,0px);opacity: 0;}
}
@-webkit-keyframes div3_in
{
    from  {-webkit-transform: translate(0px,-50px);opacity: 0}
    to    {-webkit-transform: translate(0px,0px);opacity: 1}
}
@-webkit-keyframes div3_out
{
    from  {-webkit-transform: translate(0px,0px);opacity: 1}
    to    {-webkit-transform: translate(0px,20px);opacity: 0}
}
@-webkit-keyframes div41_in
{
    from  {-webkit-transform: translate(30px,0px);opacity: 0}
    to    {-webkit-transform: translate(0px,0px);opacity: 1}
}
@-webkit-keyframes div42_in
{
    from  {-webkit-transform: translate(-30px,0px);opacity: 0}
    to    {-webkit-transform: translate(0px,0px);opacity: 1}
}
@-webkit-keyframes div41_out
{
    from  {-webkit-transform: translate(0px,0px);opacity: 1}
    to    {-webkit-transform: translate(30px,0px);opacity: 0}
}
@-webkit-keyframes div42_out
{
    from  {-webkit-transform: translate(0px,0px);opacity: 1}
    to    {-webkit-transform: translate(-30px,0px);opacity: 0}
}
</style>
<div id='container'>
    <img src='<?=$p?>images/bbg.jpg'>

    <div id='titleup'>    
        <img id='moxian2' src='<?=$p?>images/moxian5.png'>
        <img id='hua1' src='<?=$p?>images/jiaobiao.png'>
    </div>

    <div id='titledown' style='width:500px;height:815px;'>
        <img id='moxian1' src='<?=$p?>images/moxian5.png'>
        <img id='mofen' src='<?=$p?>images/mofen.png'>
        <img id='heye1' src='<?=$p?>images/heyewenzi.png'>
        <img id='mozi' src='<?=$p?>images/mo01.png'>
        <img id='shangzi' src='<?=$p?>images/mo03.png'>
        <img id='huazi' src='<?=$p?>images/mo02.png'>
        <img id='kaizi' src='<?=$p?>images/mo04.png'>
    </div>


    <div id='div1v' class='div1v' style='display:none'>
        <img id='img1v' style='position:absolute'>
    </div>
    <div id='div1h' class='div1h' style='display:none'>
        <img id='img1h' style='position:absolute'>
    </div>

    <div id='div21h' class='div21h' style='display:none'>
        <img id='img21h' style='position:absolute'>
    </div>
    <div id='div22h' class='div22h' style='display:none'>
        <img id='img22h' style='position:absolute'>
    </div>
    <div id='div22v' class='div22v' style='display:none'>
        <img id='img22v' style='position:absolute'>
    </div>
    <div id='div21v' class='div21v' style='display:none'>
        <img id='img21v' style='position:absolute'>
    </div>

    <div id='div3v' class='div1v' style='display:none'>
        <img id='img3v' style='position:absolute'>
    </div>
    <div id='div3h' class='div1h' style='display:none'>
        <img id='img3h' style='position:absolute'>
    </div>

    <div id='div41h' style='display:none'>
        <img id='img41h' style='position:absolute'>
    </div>
    <div id='div42h' style='display:none'>
        <img id='img42h' style='position:absolute'>
    </div>
    <div id='div42v' style='display:none'>
        <img id='img42v' style='position:absolute'>
    </div>
    <div id='div41v' style='display:none'>
        <img id='img41v' style='position:absolute'>
    </div>




    <img id='mo1' src='<?=$p?>images/mo022.png'>

    <img id='mo2' src='<?=$p?>images/mo011.png'>
    <div id='heye2'>
        <img src='<?=$p?>images/heye2.png' style='position:absolute;-webkit-animation: heye_ani 2s ease-in-out infinite alternate;-webkit-transform-origin: 95% 95%;'>
    </div>
    <div id='lianhua1'>
        <img src='<?=$p?>images/lianhua2.png' style='position:absolute;-webkit-animation: heye_ani 2.5s 0.5s ease-in-out infinite alternate;-webkit-transform-origin: 62% 95%;'>
    </div>
    <div id='lianhua2'>
        <img src='<?=$p?>images/lianhua1.png' style='position:absolute;-webkit-animation: heye_ani 2.5s ease-in-out infinite alternate;-webkit-transform-origin: 31% 89%;'>
    </div>


    <div style='position:absolute;top:770px;left:-38px;-webkit-transform-origin:828% -1967%;width:13px;height:25px;-webkit-transform: rotate(0deg);-webkit-animation: yuyou1 18s linear infinite'>
        <div style='width:33px;height:40px;-webkit-transform: rotate(90deg);position:absolute;-webkit-animation: yuyou11 18s linear infinite'>
            <img src='<?=$p?>images/012.png' style='position:absolute;left:12px;top:0px;'>
            <img src='<?=$p?>images/013.png' style='position:absolute;left:19px;top:8px;-webkit-animation: yuchi2 1s linear infinite alternate;-webkit-transform-origin: 0% 33%;'>
            <img src='<?=$p?>images/013.png' style='position:absolute;left:17px;top:8px;-webkit-transform-origin: 0% 33%;-webkit-transform: scale(-1,1);-webkit-animation: yuchi1 1s linear infinite alternate'>
            <img src='<?=$p?>images/011.png' style='position:absolute;left:14px;top:20px;-webkit-transform-origin: 49% 18%;-webkit-animation: yuwei 0.8s linear infinite alternate'>
        </div>
    </div>

    <div style='position:absolute;top:694px;left:300px;width:13px;height:25px;-webkit-transform: rotate(-65deg);'>
        <div style='width:33px;height:40px;-webkit-transform: rotate(90deg);position:absolute;'>
            <img src='<?=$p?>images/012.png' style='position:absolute;left:12px;top:0px;'>
            <img src='<?=$p?>images/013.png' style='position:absolute;left:19px;top:8px;-webkit-animation: yuchi2 1s linear infinite alternate;-webkit-transform-origin: 0% 33%;'>
            <img src='<?=$p?>images/013.png' style='position:absolute;left:17px;top:8px;-webkit-transform-origin: 0% 33%;-webkit-transform: scale(-1,1);-webkit-animation: yuchi1 1s linear infinite alternate'>
            <img src='<?=$p?>images/011.png' style='position:absolute;left:14px;top:20px;-webkit-transform-origin: 49% 18%;-webkit-animation: yuwei 0.8s linear infinite alternate'>
        </div>
    </div>

    <div style='position:absolute;top:824px;left:377px;width:13px;height:25px;-webkit-transform: rotate(-80deg);-webkit-animation: yuyou2 9s linear infinite'>
        <div style='width:33px;height:40px;-webkit-transform: rotate(90deg);position:absolute;'>
            <img src='<?=$p?>images/012.png' style='position:absolute;left:12px;top:0px;'>
            <img src='<?=$p?>images/013.png' style='position:absolute;left:19px;top:8px;-webkit-animation: yuchi2 1s linear infinite alternate;-webkit-transform-origin: 0% 33%;'>
            <img src='<?=$p?>images/013.png' style='position:absolute;left:17px;top:8px;-webkit-transform-origin: 0% 33%;-webkit-transform: scale(-1,1);-webkit-animation: yuchi1 1s linear infinite alternate'>
            <img src='<?=$p?>images/011.png' style='position:absolute;left:14px;top:20px;-webkit-transform-origin: 49% 18%;-webkit-animation: yuwei 0.8s linear infinite alternate'>
        </div>
    </div>

    <img id='heye3' src='<?=$p?>images/heye.png'>

    <div id='pagetitle' style='position:absolute;width:308px;height:250px;top:213px;left:107px;font-size:40px;color:#000;overflow:hidden;-webkit-transform-origin: 100% 50%'>
        <div style='position:absolute;width:308px;height:250px;top:0px;left:0px;overflow:hidden;'>
            <div style='position:absolute;width:308px;height:250px;display:table;overflow:hidden;'>
                <div id='titlecontent' style='width:308px;height:250px;vertical-align:middle;display:table-cell;text-align:center;font-size:40px;line-height:50px;'></div>
            </div>
        </div>
    </div>

    <img src='<?=$p?>images/wtd.png' style='left:300px;top:650px;-webkit-animation: shuiwen 5s linear infinite;-webkit-transform-origin: 50% 0%;'>
    <img src='<?=$p?>images/guangdian.png' style='left:270px;top:635px;-webkit-animation: shuiwen2 3s linear infinite'>
    <img src='<?=$p?>images/guangdian01.png' style='position:absolute;left:90px;top:707px;opacity:0.5;'>
    <div style='left:340px;top:707px;width:127px;height:129px;-webkit-animation: guangdian1 3s linear infinite;overflow:hidden'>
        <img src='<?=$p?>images/guangdian01.png' style='position:absolute;left:-250px;-webkit-animation: guangdian2 3s linear infinite'>
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
    id('mo1').style.webkitAnimation = 'mo1_in 1.5s ease-out both';
    id('mo2').style.webkitAnimation = 'fadein 1.5s linear both';
    id('mofen').style.webkitAnimation = 'modian_in 1.5s 0.3s ease-out forwards';
    id('heye3').style.webkitAnimation = 'heye3_in 1.5s 0.3s ease-out both';
    id('moxian2').style.webkitAnimation = 'heye3_in 1.8s 0.7s ease-out both';
    id('moxian1').style.webkitAnimation = 'heye3_in 1.1s 0.7s ease-out both';
    id('mozi').style.webkitAnimation = 'fadein 1.7s 0.7s ease-in both';
    id('heye1').style.webkitAnimation = 'heye1_in 1s 0.7s linear both';
    id('shangzi').style.webkitAnimation = 'fadein 0.8s 1.3s ease-in both';
    id('huazi').style.webkitAnimation = 'fadein 1s 1.5s ease-in both';
    id('kaizi').style.webkitAnimation = 'fadein 1s 2s ease-in both';
    id('hua1').style.webkitAnimation = 'heye3_in 1s 2s ease-out both';
    id('heye2').style.webkitAnimation = 'fadein 1s 1s ease-in-out both';
    id('lianhua1').style.webkitAnimation = 'fadein 1s 1.5s ease-in-out both';
    id('lianhua2').style.webkitAnimation = 'fadein 1s 2s ease-in-out both';

    id('pagetitle').style.webkitTransformOrigin = '50% 0%';
    id('pagetitle').style.webkitAnimation = 'title_in 1s 1.5s ease-in-out both';

    id('titlecontent').innerHTML = e_desc;
    if(e_desc.length>14&&e_desc.length<22)
    {
        id('titleup').style.top = '42px';
        id('titledown').style.top = '0px';
    }
    else if(e_desc.length<15)
    {
        id('titleup').style.top = '72px';
        id('titledown').style.top = '-20px';
    }
    else
    {
        id('titleup').style.top = '0px';
        id('titledown').style.top = '0px';
    }
}

function distitle () 
{
    id('pagetitle').style.webkitTransformOrigin = '50% 50%';
    id('titleup').style.webkitAnimation = 'fadeout 2s linear both';
    id('pagetitle').style.webkitAnimation = 'title_out 2s linear both';
    id('titledown').style.webkitAnimation = 'title_out 2s linear both';

    timeout1 = setTimeout(show1,1000)
}

function show1 () 
{
    setImage('1');
    id('div1v').style.webkitAnimation = 'div1_in 1.2s cubic-bezier(.34,.03,.48,.99) both';
    id('div1h').style.webkitAnimation = 'div1_in 1.2s cubic-bezier(.34,.03,.48,.99) both';

    timeout2 = setTimeout(show2,4000)
}
function show2 () 
{
    setImage('21');
    setImage('22');
    id('div1v').style.webkitAnimation = 'div1_out 1.2s cubic-bezier(.34,.03,.48,.99) both';
    id('div1h').style.webkitAnimation = 'div1_out 1.2s cubic-bezier(.34,.03,.48,.99) both';

    id('div21h').style.webkitAnimation = 'div2_in 1.5s 0.4s cubic-bezier(.34,.03,.48,.99) both';
    id('div22h').style.webkitAnimation = 'div2_in 1.5s 0.4s cubic-bezier(.34,.03,.48,.99) both';
    id('div21v').style.webkitAnimation = 'div2_in 1.5s 0.4s cubic-bezier(.34,.03,.48,.99) both';
    id('div22v').style.webkitAnimation = 'div2_in 1.5s 0.4s cubic-bezier(.34,.03,.48,.99) both';

    timeout3 = setTimeout(show3,4000)
}
function show3 () 
{
    setImage('3');
    id('div21h').style.webkitAnimation = 'div21_out 1s cubic-bezier(.36,.03,.74,.99) both';
    id('div22h').style.webkitAnimation = 'div22_out 1s cubic-bezier(.36,.03,.74,.99) both';
    id('div21v').style.webkitAnimation = 'div21_out 1s cubic-bezier(.36,.03,.74,.99) both';
    id('div22v').style.webkitAnimation = 'div22_out 1s cubic-bezier(.36,.03,.74,.99) both';

    id('div3v').style.webkitAnimation = 'div3_in 1.5s 0.4s cubic-bezier(.34,.03,.48,.99) both';
    id('div3h').style.webkitAnimation = 'div3_in 1.5s 0.4s cubic-bezier(.34,.03,.48,.99) both';

    timeout4 = setTimeout(show4,4000)
}
function show4 () 
{
    setImage('41');
    setImage('42');
    id('div3v').style.webkitAnimation = 'div3_out 1s cubic-bezier(.36,.03,.74,.99) both';
    id('div3h').style.webkitAnimation = 'div3_out 1s cubic-bezier(.36,.03,.74,.99) both';

    id('div41h').style.webkitAnimation = 'div41_in 1.5s 0.4s cubic-bezier(.34,.03,.48,.99) both';
    id('div42h').style.webkitAnimation = 'div42_in 1.5s 0.4s cubic-bezier(.34,.03,.48,.99) both';
    id('div41v').style.webkitAnimation = 'div41_in 1.5s 0.4s cubic-bezier(.34,.03,.48,.99) both';
    id('div42v').style.webkitAnimation = 'div42_in 1.5s 0.4s cubic-bezier(.34,.03,.48,.99) both';
    timeout5 = setTimeout(show1_1,4000)
}
function show1_1 () 
{
    setImage('1');
    id('div41h').style.webkitAnimation = 'div41_out 1s cubic-bezier(.36,.03,.74,.99) both';
    id('div42h').style.webkitAnimation = 'div42_out 1s cubic-bezier(.36,.03,.74,.99) both';
    id('div41v').style.webkitAnimation = 'div41_out 1s cubic-bezier(.36,.03,.74,.99) both';
    id('div42v').style.webkitAnimation = 'div42_out 1s cubic-bezier(.36,.03,.74,.99) both';

    id('div1v').style.webkitAnimation = 'div1_in 1.5s 0.5s cubic-bezier(.34,.03,.48,.99) both';
    id('div1h').style.webkitAnimation = 'div1_in 1.5s 0.5s cubic-bezier(.34,.03,.48,.99) both';

    timeout6 = setTimeout(show2,4000);
}
var divwidth = {'1h':437,'1v':437,'21h':437,'22h':437,'21v':250,'22v':250,'3h':437,'3v':437,'41h':410,'42h':410,'41v':250,'42v':250};
var divheight = {'1h':309,'1v':639,'21h':290,'22h':290,'21v':350,'22v':350,'3h':309,'3v':639,'41h':290,'42h':290,'41v':350,'42v':350};

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

    image_url_index++;
    if(image_url_index==Onload_imgs_url.length)
        image_url_index = 0;
    // console.log(width,height,img.style.left,img.style.top,img.width,img.height);
}
call_me(load_images);
function reload_scene()
{
    clearnode();
    reshow = true;
    setTimeout(load_images,100);
}
function clearnode () 
{
    id('div1h').style.webkitAnimation = '';
    id('div1v').style.webkitAnimation = '';
    id('div21h').style.webkitAnimation = '';
    id('div22h').style.webkitAnimation = '';
    id('div21v').style.webkitAnimation = '';
    id('div22v').style.webkitAnimation = '';
    id('div3h').style.webkitAnimation = '';
    id('div3v').style.webkitAnimation = '';
    id('div41h').style.webkitAnimation = '';
    id('div42h').style.webkitAnimation = '';
    id('div41v').style.webkitAnimation = '';
    id('div42v').style.webkitAnimation = '';
    id('div1h').style.display = 'none';
    id('div1v').style.display = 'none';
    id('div21h').style.display = 'none';
    id('div22h').style.display = 'none';
    id('div21v').style.display = 'none';
    id('div22v').style.display = 'none';
    id('div3h').style.display = 'none';
    id('div3v').style.display = 'none';
    id('div41h').style.display = 'none';
    id('div42h').style.display = 'none';
    id('div41v').style.display = 'none';
    id('div42v').style.display = 'none';

    id('mo1').style.webkitAnimation = '';
    id('mo2').style.webkitAnimation = '';
    id('mofen').style.webkitAnimation = '';
    id('heye3').style.webkitAnimation = '';
    id('moxian2').style.webkitAnimation = '';
    id('moxian1').style.webkitAnimation = '';
    id('mozi').style.webkitAnimation = '';
    id('heye1').style.webkitAnimation = '';
    id('shangzi').style.webkitAnimation = '';
    id('huazi').style.webkitAnimation = '';
    id('kaizi').style.webkitAnimation = '';
    id('hua1').style.webkitAnimation = '';
    id('heye2').style.webkitAnimation = '';
    id('lianhua1').style.webkitAnimation = '';
    id('lianhua2').style.webkitAnimation = '';
    id('pagetitle').style.webkitAnimation = '';
    id('titledown').style.webkitAnimation = '';
    id('titleup').style.webkitAnimation = '';

    id('titlecontent').innerHTML = '';

    clearTimeout(timeout0);
    clearTimeout(timeout1);
    clearTimeout(timeout2);
    clearTimeout(timeout3);
    clearTimeout(timeout4);
    clearTimeout(timeout5);
    clearTimeout(timeout6);

}
</script>
