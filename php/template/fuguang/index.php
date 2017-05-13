<?
$p=$_WEITE['web_pic_url']."fuguang/";
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
#di1
{
    width: 835px;
    height: 520px;
    left: -152px;
    top: 693px;
    -webkit-transform: rotate(6deg);
    -webkit-animation: di1move 8s linear infinite alternate;

}
#di3 
{
    position: absolute;
    width: 835px;
    height: 520px;
    opacity: 0.7;
    background-color: rgba(0,220,255,0.18);
    -webkit-animation: changecolor 16s linear infinite alternate;
}
#di2
{
    width: 835px;
    height: 520px;
    opacity: 0.7;
    left: -342px;
    top: 636px;
    -webkit-transform: rotate(6deg);
    background-color: rgba(255,255,255,0.7);
    -webkit-animation: di2move 5s linear infinite alternate;
}
#xing1
{
    left: -499px;
    top: -1103px;
    -webkit-animation: xingxing 30s linear infinite;
}
#xing2
{
    left: 134px;
    top: -992px;
    -webkit-animation: xingxing 40s linear infinite;
}
#pagetitle
{
    background: -webkit-linear-gradient(left,rgba(255,255,255,0),rgba(255,255,255,0.6),rgba(255,255,255,0));
    width: 500px;
    height: 180px;
    left: 0px;
    top: 300px;
    color: #fff;
}
#div1>div
{
    position: absolute;
    -webkit-transform-origin: 100% 50%;
}
#div1
{
    background-color: none;
}
#div2>div,#div3>div
{
    position: absolute;
}
</style>

<style type="text/css">
@-webkit-keyframes fadein
{
    from  {opacity: 0;}
    to    {opacity: 1;}
}
@-webkit-keyframes fadeout
{
    from  {opacity: 1}
    to    {opacity: 0}
}
@-webkit-keyframes changecolor
{
    0%   {background-color: rgba(0,220,255,0.18);}
    25%  {background-color: rgba(255,245,80,0.48);}
    50%  {background-color: rgba(255,153,255,0.35);}
    75%  {background-color: rgba(51,204,102,0.35);}
    100% {background-color: rgba(0,220,255,0.18);}

}
@-webkit-keyframes div1_cellin
{
    from  {opacity: 0;-webkit-transform: translate(-30px,0px) scale(1.05,1);}
    to    {opacity: 1;-webkit-transform: translate(0px,0px) scale(1,1);}
}
@-webkit-keyframes shine1
{
    0%  {opacity: 1}
    50% {opacity: 0.8}
    100%{opacity: 1}
}
@-webkit-keyframes shine3
{
    0%  {opacity: 1}
    50% {opacity: 0.8}
    100%{opacity: 1}
}
@-webkit-keyframes div2_in1
{
    from  {-webkit-transform: translate(0px,100px);opacity: 0}
    to    {-webkit-transform: translate(0px,0px);opacity: 1}
}
@-webkit-keyframes div2_in2
{
    from  {-webkit-transform: translate(0px,-100px);opacity: 0}
    to    {-webkit-transform: translate(0px,0px);opacity: 1}
}
@-webkit-keyframes shine2
{
    0%  {opacity: 1}
    50% {opacity: 0.6}
    100%{opacity: 1}
}
@-webkit-keyframes div2_out
{
    from  {-webkit-transform: translate(0px,0px);opacity: 1}
    to    {-webkit-transform: translate(0px,100px);opacity: 0}
}
@-webkit-keyframes div3_in
{
    0%   {-webkit-transform: translate(0px,100px);-webkit-animation-timing-function: ease-out;opacity: 0;}
    60%  {-webkit-transform: translate(0px,-10px);-webkit-animation-timing-function: ease-in-out;opacity: 0.6;}
    100% {-webkit-transform: translate(0px,0px);opacity: 1;}
}
@-webkit-keyframes div3_out
{
    0%  {-webkit-transform: translate(0px,0px);-webkit-animation-timing-function: ease-out;opacity: 1}
    30% {-webkit-transform: translate(0px,5px);-webkit-animation-timing-function: ease-in-out;opacity: 0.3;}
    100%{-webkit-transform: translate(0px,-30px);opacity: 0;}

}
@-webkit-keyframes xingxing
{
    from  {-webkit-transform: rotate(0deg);}
    to    {-webkit-transform: rotate(360deg);}
}
@-webkit-keyframes di2move
{
    from  {-webkit-transform: rotate(6deg);;}
    to    {-webkit-transform: translate(246px,72px) rotate(-9deg);}
}

@-webkit-keyframes di1move
{
    from  {-webkit-transform: rotate(6deg);}
    to    {-webkit-transform: translate(74px,12px) rotate(-9deg);}
}
@-webkit-keyframes xingxing1
{
    0%  {-webkit-transform: rotate(0deg);opacity: 0}
    26% {-webkit-transform: rotate(18deg);opacity: 1}
    27% {-webkit-transform: rotate(18deg);opacity: 0}
    36% {-webkit-transform: rotate(0deg);opacity: 0}
    37% {-webkit-transform: rotate(0deg);opacity: 1}
    62% {-webkit-transform: rotate(-25deg);opacity: 1}
    63% {-webkit-transform: rotate(-25deg);opacity: 0}
    67% {-webkit-transform: rotate(0deg);opacity: 0}
    68% {-webkit-transform: rotate(0deg);opacity: 1}
    69% {-webkit-transform: rotate(-10deg);opacity: 1}
    79% {-webkit-transform: rotate(-10deg);opacity: 0}
    80% {-webkit-transform: rotate(0deg);opacity: 1}
    100%{-webkit-transform: rotate(10deg);opacity: 1}
}

@-webkit-keyframes xingxing2
{
    0%  {-webkit-transform: translate(0px,0px);opacity: 0}
    70% {-webkit-transform: translate(0px,0px);opacity: 0}
    78% {-webkit-transform: translate(0px,0px);opacity: 1}
    100%{-webkit-transform: translate(40px,20px) rotate(30deg);opacity: 0}
}
@-webkit-keyframes xingxing3
{
    0%  {-webkit-transform: translate(0px,0px) rotate(0deg);opacity: 0}
    50% {-webkit-transform: translate(0px,0px) rotate(0deg);opacity: 0}
    70% {-webkit-transform: translate(0px,0px) rotate(0deg);opacity: 1}
    100%{-webkit-transform: translate(10px,20px) rotate(50deg);opacity: 0} 
}
</style>

<div id='container'>
    <img src='<?=$p?>images/bg.jpg'>



    <div id='div1'>
        <div id='div11'></div>
        <div id='div12'></div>
        <div id='div13'></div>
    </div>

    <div id='div2'>
        <div id='div21'></div>
        <div id='div22'></div>
        <div id='div23'></div>
    </div>

    <div id='div3'>
        <div id='div31'></div>
        <div id='div32'></div>
        <div id='div33'></div>
    </div>


    <img id='xing1' src='<?=$p?>images/bian2.png'>
    <img id='xing2' src='<?=$p?>images/bian2.png'>

    <div id='di2'></div>
    <div id='di1'>
        <div id='di3'></div>
    </div>
    <div id='pagetitle'>
        <div style="position:absolute;width: 380px;height:180px;top:0px;left: 60px;overflow:hidden;">
            <div style='position:absolute;width:380px;height:180px;display:table;overflow:hidden;'>
                <div id='titlecontent' style='width:380px;height:180px;vertical-align:middle;display:table-cell;text-align:center;font-size:35px;'></div>
            </div>
        </div>
    </div>

    <img src='<?=$p?>images/bian2.png' style='width:125px;top:224px;left:22px;-webkit-transform: rotate(0deg);-webkit-animation: xingxing1 4s linear infinite'>
    <img src='<?=$p?>images/bian2.png' style='width:95px;top:210px;left:120px;-webkit-animation: xingxing2 5s linear infinite'>
    <img src='<?=$p?>images/bian2.png' style='width:60px;left:412px;top:538px;-webkit-animation: xingxing3 4s linear infinite'>

</div>



<script>
var image_size_width=[];
var image_size_height=[];
var image_url_index=0;
var have_num = 0;
var error_num = 0;
var canshow = true;
var reshow = false;
var delaytime=5000;
// var timeout0;
// var timeout1;
// var timeout2;
// var timeout3;
// var timeout4;
// var timeout5;
// var timeout6;
// var timeout7;
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
function id(name)
{
    return document.getElementById(name);
}

function showtitle()
{
    id('pagetitle').style.webkitAnimation = 'fadein 0.6s linear both';
    id('titlecontent').innerHTML = e_desc;

    // setTimeout(distitle,4000)
}

function distitle()
{
    id('pagetitle').style.webkitAnimation = 'fadeout 0.6s linear both';
    show1();
}

function show1()
{
    setImageindex();
    var img_bili = image_size_width[image_url_index]/image_size_height[image_url_index];

    var divcontainer = id('div1');
    var img_height  =Math.floor(500/img_bili)-Math.floor(500/img_bili)%3;
    divcontainer.style.width = '500px';
    divcontainer.style.height = img_height+'px';
    divcontainer.style.left = '0px';
    divcontainer.style.top = (788-(img_height))/2+'px';

    var divcells = [id('div11'),id('div12'),id('div13')];
    for(var i=0;i<3;i++)
    {
        divcells[i].style.backgroundImage = 'url('+Onload_imgs_url[image_url_index]+')';
        divcells[i].style.backgroundSize = '500px '+img_height + 'px';
        divcells[i].style.backgroundPosition = '0px -'+i*(img_height/3)+'px';
        divcells[i].style.top = i*(img_height/3)+'px';
        divcells[i].style.width = '500px';
        divcells[i].style.height = img_height/3+'px';

        divcells[i].style.webkitAnimation = 'div1_cellin 0.5s linear '+(0.6-0.3*i)+'s both';
    }

    image_url_index++;
    setTimeout(shine1,1500);

    setTimeout(show2,5000);
}   

function shine1()
{
    id('div1').style.backgroundColor = '#fff';
    id('div12').style.webkitAnimation = 'shine1 0.3s linear both';
    id('div13').style.webkitAnimation = 'shine1 0.3s 0.3s linear both';
    id('div11').style.webkitAnimation = 'shine1 0.3s 0.7s linear both';
}

function show2()
{
    id('div1').style.backgroundColor = 'rgba(0,0,0,0,)';
    id('div1').style.webkitAnimation = 'fadeout 0.7s linear both';

    setImageindex();
    var img_bili = image_size_width[image_url_index]/image_size_height[image_url_index];

    var divcontainer = id('div2');
    var img_height  =Math.floor(501/img_bili);
    divcontainer.style.width = '501px';
    divcontainer.style.height = img_height+'px';
    divcontainer.style.left = '0px';
    divcontainer.style.top = (788-(img_height))/2+'px';

    var divcells = [id('div21'),id('div22'),id('div23')];
    for(var i=0;i<3;i++)
    {
        divcells[i].style.backgroundImage = 'url('+Onload_imgs_url[image_url_index]+')';
        divcells[i].style.backgroundSize = '501px '+img_height + 'px';
        divcells[i].style.backgroundPosition = '-'+i*(501/3)+'px 0px';
        divcells[i].style.top = '0px';
        // divcells[i].style.left = i*(501/3)+'px';
        divcells[i].style.width = '167px';
        divcells[i].style.height = img_height+'px';

        // divcells[i].style.webkitAnimation = 'div1_cellin 0.5s linear '+(0.6-0.3*i)+'s both';
    }

    divcells[0].style.left = '0px';
    divcells[1].style.left = '167px';
    divcells[2].style.left = '333px';

    divcells[0].style.webkitAnimation = 'div2_in1 0.7s 0.2s ease-out both';
    divcells[1].style.webkitAnimation = 'div2_in2 0.7s 0.2s ease-out both';
    divcells[2].style.webkitAnimation = 'div2_in1 0.7s 0.2s ease-out both';

    image_url_index++;

    setTimeout(shine2,1200);

    setTimeout(show3,4000);
}

function shine2()
{
    id('div2').style.backgroundColor = '#fff';
    id('div23').style.webkitAnimation = 'shine2 0.3s linear both';
    id('div22').style.webkitAnimation = 'shine2 0.3s 0.3s linear both';
    id('div21').style.webkitAnimation = 'shine2 0.3s 0.6s linear both';
}

function show3()
{
    id('div2').style.backgroundColor = 'rgba(0,0,0,0)';
    id('div23').style.webkitAnimation = 'div2_out 0.8s ease-in both';
    id('div22').style.webkitAnimation = 'div2_out 0.8s 0.3s ease-in both';
    id('div21').style.webkitAnimation = 'div2_out 0.8s 0.6s ease-in both';

    setImageindex();
    var img_bili = image_size_width[image_url_index]/image_size_height[image_url_index];

    var divcontainer = id('div3');
    var img_height  =Math.floor(501/img_bili);
    divcontainer.style.width = '500px';
    divcontainer.style.height = img_height+'px';
    divcontainer.style.left = '0px';
    divcontainer.style.top = (788-(img_height))/2+'px';

    var divcells = [id('div31'),id('div32'),id('div33')];
    for(var i=0;i<3;i++)
    {
        divcells[i].style.backgroundImage = 'url('+Onload_imgs_url[image_url_index]+')';
        divcells[i].style.backgroundSize = '501px '+img_height + 'px';
        divcells[i].style.backgroundPosition = '-'+i*(501/3)+'px 0px';
        divcells[i].style.top = '0px';
        // divcells[i].style.left = i*(501/3)+'px';
        divcells[i].style.width = '167px';
        divcells[i].style.height = img_height+'px';

        divcells[i].style.webkitAnimation = 'div3_in 0.8s linear '+i*0.1+'s both';
    }

    divcells[0].style.left = '0px';
    divcells[1].style.left = '167px';
    divcells[2].style.left = '333px';

    image_url_index++;

    setTimeout(shine3_1,2000);
}

function shine3_1()
{
    id('div3').style.backgroundColor = '#fff';

    id('div31').style.webkitAnimation = 'shine1 0.4s ease-out both';
    id('div32').style.webkitAnimation = 'shine1 0.4s 0.2s ease-out both';
    id('div33').style.webkitAnimation = 'shine1 0.4s 0.4s ease-out both';

    setTimeout(shine3_2,1500)
}

function shine3_2()
{
    id('div33').style.webkitAnimation = 'shine3 0.4s ease-out both';
    id('div32').style.webkitAnimation = 'shine3 0.4s 0.15s ease-out both';
    id('div31').style.webkitAnimation = 'shine3 0.4s 0.3s ease-out both';

    setTimeout(show1_1,1000)
}

function show1_1()
{
    id('div3').style.backgroundColor = 'rgba(0,0,0,0)';

    id('div31').style.webkitAnimation = 'div3_out 0.8s linear both';
    id('div32').style.webkitAnimation = 'div3_out 0.8s 0.15s linear both';
    id('div33').style.webkitAnimation = 'div3_out 0.8s 0.3s linear both';

    setImageindex();
    var img_bili = image_size_width[image_url_index]/image_size_height[image_url_index];

    var divcontainer = id('div1');
    var img_height =Math.floor(500/img_bili)-Math.floor(500/img_bili)%3;
    divcontainer.style.width = '500px';
    divcontainer.style.height = img_height+'px';
    divcontainer.style.left = '0px';
    divcontainer.style.top = (788-(img_height))/2+'px';


    var divcells = [id('div11'),id('div12'),id('div13')];
    id('div1').style.webkitAnimation = '';
    id('div1').style.backgroundColor = 'rgba(0,0,0,0)';
    for(var i=0;i<3;i++)
    {
        divcells[i].style.backgroundImage = 'url('+Onload_imgs_url[image_url_index]+')';
        divcells[i].style.backgroundSize = '500px '+img_height + 'px';
        divcells[i].style.backgroundPosition = '0px -'+i*(img_height/3)+'px';
        divcells[i].style.top = i*(img_height/3)+'px';
        divcells[i].style.width = '500px';
        divcells[i].style.height = img_height/3+'px';

        divcells[i].style.webkitAnimation = 'div1_cellin 0.5s linear '+(0.9-0.3*i)+'s both';
    }
    image_url_index++;
    setTimeout(shine1,2000);

    setTimeout(show2,5000);
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

call_me(load_images);

</script>