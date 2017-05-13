<?
$p=$_WEITE['web_pic_url']."yuanxiao/";
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
#denglong1
{
    left: 37px;
    top: 0px;
    -webkit-transform-origin: 50% 0%;
    -webkit-animation: denglong 1.5s 0.5s ease-in-out infinite alternate;
}
#denglong2
{
    left: -20px;
    top: 5px;
    -webkit-transform-origin: 50% 0%;
    -webkit-animation: denglong 1.5s ease-in-out infinite alternate;
}
#dukou
{
    left: -5px;
    width: 215px;
    top: 588px;
}
#zhugan
{
    left: 166px;
    top: 504px;
    width: 61px;
    height: 202px;
    -webkit-transform-origin: 0% 100%;
    -webkit-animation: ganzi 2s ease-in-out infinite alternate;
}
#deng 
{
    left: 47px;
    top: -2px;
    width: 20px;
    position: absolute;
}
#guang
{
    left: 42px;
    top: 10px;
    width: 29px;
    position: absolute;
    -webkit-animation: guang 0.5s linear infinite alternate;
}
#shuiwen
{
    left: 203px;
    top: 680px;
    -webkit-animation: shuiwen 2s ease-in-out infinite alternate;
}
#worddiv
{
    left: 0px;
    top: 370px;
    width: 500px;
    height: 10px;
    background-color: rgba(255,255,255,0.1);
}
#shanzi
{
    /*-webkit-transform: translate(0px,120px) rotate(-179deg) scale(.3);*/
    left: 118px;
    top: 153px;
    -webkit-transform-origin: 50% 60%;
    width: 253px;
    height: 183px;
}
#yuanxiaozi
{
    position: absolute;
    left: 63px;
    top: 29px;
    opacity: 0;
}
#shan1,#shan3,#shan4
{
    left: 50px;
    top: 160px;
    width: 400px;
    height: 195px;
    overflow: hidden;
    position: absolute;
    /*background-color: #fff;*/
}
#shan2
{
    left: 50px;
    top: 160px;
    width: 400px;
    height: 195px;
    overflow: hidden;
    position: absolute;
}

#shanye1,#shanye2,#shanye3,#shanye4
{
    position: absolute;
    width: 400px;
    height: 201px;
    -webkit-transform: rotate(-178deg);
    -webkit-transform-origin: 50% 97%;

}
#zhui1,#zhui2,#zhui3,#zhui4
{
    left: 232px;
    top: 338px;
    width: 42px;
    -webkit-transform-origin: 47% 12%;
    -webkit-transform: rotate(-80deg);
    position: absolute;
}
#shanzhi1,#shanzhi2,#shanzhi3,#shanzhi4
{
    left: 51px;
    top: 349px;
    -webkit-transform: scale(-1,1);
    width: 204px;
    position: absolute;
}
#shanarea2
{
    width: 500px;
    height: 500px;
    top: 205px;
    -webkit-transform: scale(-1,-1);
    position: absolute;
}
.divcon
{
    background-color: #fff;
    opacity: 0;
    overflow: hidden;
}
#img1,#img2,#img3
{
    position: absolute;
}
.triangle-upleft
{
    width: 0;
    height: 0;
    border-top: 25px solid #FF3D54;
    border-right: 25px solid transparent;
    position: absolute;
    left: 0px;
    top: 0px;
}
.triangle-upright
{
    width: 0;
    height: 0;
    border-top: 25px solid #FF3D54;
    border-left: 25px solid transparent;
    position: absolute;
    right: 0px;
    top: 0px;
}
.triangle-downleft
{
    width: 0;
    height: 0;
    border-bottom: 25px solid #FF3D54;
    border-right: 25px solid transparent;
    position: absolute;
    bottom: 0px;
    left: 0px;
}
.triangle-downright
{
    width: 0;
    height: 0;
    border-bottom: 25px solid #FF3D54;
    border-left: 25px solid transparent;
    position: absolute;
    bottom: 0px;
    right: 0px;
}
#shandiv1,#shandiv2,#shandiv3,#shandiv4
{
    display: none;
    top: 45px;
    position: absolute;
}
#div1,#div2,#div3
{
    opacity: 0;
}
</style>
<style type="text/css">
@-webkit-keyframes denglong 
{
    from  {-webkit-transform: rotate(0deg);}
    to    {-webkit-transform: rotate(5deg);}
}
@-webkit-keyframes worddiv_in
{
    from  {-webkit-transform: scale(1,1);}
    to    {-webkit-transform: scale(1,19);}
}
@-webkit-keyframes shanzi_in
{
    from  {-webkit-transform: translate(0px,120px) rotate(-179deg) scale(.3);}
    to    {-webkit-transform: translate(0px,0px) rotate(0deg) scale(1);}
}
@-webkit-keyframes ganzi
{
    from  {-webkit-transform: rotate(0deg);}
    to    {-webkit-transform: rotate(4deg);}
}
@-webkit-keyframes guang
{
    from  {opacity: 1}
    to    {opacity: 0.6}
}
@-webkit-keyframes shuiwen
{
    from  {-webkit-transform: translate(0px,0px);opacity: 1}
    to    {-webkit-transform: translate(10px,0px);opacity: 0.5}
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
@-webkit-keyframes title_in
{
    0%  {-webkit-transform: scale(1.5,1);opacity: 0;color:#0F4136;}
    80% {-webkit-transform: scale(1.1,1);opacity: 0.8;color: #fff;}
    100%{-webkit-transform: scale(1,1);opacity: 1;color:#0F4136;}
}
@-webkit-keyframes shanzi_out
{
    to   {-webkit-transform: translate(150px,-173px) rotate(90deg) scale(1);opacity: 0}
    from {-webkit-transform: translate(0px,0px) rotate(0deg) scale(1);opacity: 1}
}
@-webkit-keyframes worddiv_out
{
    from  {-webkit-transform: translate(0px,0px) scale(1,19);}
    to    {-webkit-transform: translate(-500px,0px) scale(1,19);}
}
@-webkit-keyframes title_out
{
    from  {-webkit-transform: scale(1,1);opacity: 1}
    to    {-webkit-transform: translate(-50px,0px) scale(1.5,1);opacity: 0}
}
@-webkit-keyframes shanye1_in
{
    from  {-webkit-transform: rotate(-178deg);}
    to    {-webkit-transform: rotate(0deg);}
}
@-webkit-keyframes shanye2_in
{
    0%   {-webkit-transform: rotate(-178deg);-webkit-animation-timing-function:cubic-bezier(.42,.69,.83,1);opacity: 1}
    45%  {-webkit-transform: rotate(0deg);-webkit-animation-timing-function:cubic-bezier(.42,.69,.83,1);opacity: 1}
    55%  {-webkit-transform: rotate(0deg);-webkit-animation-timing-function:cubic-bezier(.26,0,.9,.88);opacity: 1}
    100% {-webkit-transform: rotate(178deg);-webkit-animation-timing-function:cubic-bezier(.26,0,.9,.88);opacity: 0}
}
@-webkit-keyframes shanye3_in
{
    0%   {-webkit-transform: rotate(-178deg);-webkit-animation-timing-function:cubic-bezier(.42,.69,.83,1);}
    50%  {-webkit-transform: rotate(0deg);-webkit-animation-timing-function:cubic-bezier(.42,.69,.83,1);}
    55%  {-webkit-transform: rotate(0deg);-webkit-animation-timing-function:cubic-bezier(.26,0,.9,.88);}
    100% {-webkit-transform: rotate(178deg);-webkit-animation-timing-function:cubic-bezier(.26,0,.9,.88);}
}
@-webkit-keyframes zhui1
{
    from  {-webkit-transform: rotate(-80deg);}
    to    {-webkit-transform: rotate(0deg);}
}
@-webkit-keyframes div1_in
{
    from  {-webkit-transform: scale(1,0);opacity: 0}
    to    {-webkit-transform: scale(1,1);opacity: 1}
}
@-webkit-keyframes fadeout3
{
    0%  {opacity: 1}
    80% {opacity: 1}
    100%{opacity: 0}
}
@-webkit-keyframes fadeout4
{
    0%  {opacity: 0}
    10%  {opacity: 1}
    60% {opacity: 1}
    100%{opacity: 0} 
}
</style>

<div id='container'>
    <img src='<?=$p?>images/bg.jpg'>

    <img id='denglong1' src='<?=$p?>images/denglou.png'>
    <img id='denglong2' src='<?=$p?>images/denglou.png'>

    <img id='dukou' src='<?=$p?>images/chuangduo01.png'>
    

   

    <img id='shuiwen' src='<?=$p?>images/shuiwen.png'>


    <div id='worddiv'></div>
    <div id='shanzi'>
        <img src='<?=$p?>images/shan.png'>
        <img id='yuanxiaozi' src='<?=$p?>images/yuanxiaojiezi.png'>
    </div>

    <div id='zhugan'>
        <img id='ganzi' src='<?=$p?>images/chuangduo.png' width='61'>
        <img id='deng' src='<?=$p?>images/deng.png'>
        <img id='guang' src='<?=$p?>images/dengguang.png'>
    </div>
    
    <div id='div1' class='divcon'>
        <div id='img1'></div>
        <div class='triangle-upleft'></div>
        <div class='triangle-upright'></div>
        <div class='triangle-downleft'></div>
        <div class='triangle-downright'></div>
    </div>
    <div id='div2' class='divcon'>
        <div id='img2'></div>
        <div class='triangle-upleft'></div>
        <div class='triangle-upright'></div>
        <div class='triangle-downleft'></div>
        <div class='triangle-downright'></div>
    </div>
    <div id='div3' class='divcon'>
        <div id='img3'></div>
        <div class='triangle-upleft'></div>
        <div class='triangle-upright'></div>
        <div class='triangle-downleft'></div>
        <div class='triangle-downright'></div>
    </div>


    <div id='shandiv1'>
        <div id='shanarea1'>
            <div id='shan1'>
                <img id='shanye1' src='<?=$p?>images/03.png'>
            </div>

            <img id='shanzhi1' src='<?=$p?>images/01.png'>
            <img id='zhui1' src='<?=$p?>images/02.png'>
        </div>
    </div>
    <div id='shandiv2'>
        <div id='shanarea2'>
            <div id='shan2'>
                <img id='shanye2' src='<?=$p?>images/03.png'>
            </div>

            <img id='shanzhi2' src='<?=$p?>images/01.png'>
            <img id='zhui2' src='<?=$p?>images/02.png'>
        </div>
    </div>
    <div id='shandiv3'>
        <div id='shanarea3'>
            <div id='shan3'>
                <img id='shanye3' src='<?=$p?>images/03.png'>
            </div>

            <img id='shanzhi3' src='<?=$p?>images/01.png'>
            <img id='zhui3' src='<?=$p?>images/02.png'>
        </div>
    </div>
    <div id='shandiv4'>
        <div id='shanarea4'>
            <div id='shan4'>
                <img id='shanye4' src='<?=$p?>images/03.png'>
            </div>

            <img id='shanzhi4' src='<?=$p?>images/01.png'>
            <img id='zhui4' src='<?=$p?>images/02.png'>
        </div>
    </div>


    <img src='<?=$p?>images/zhegai.png'>

     <div id='pagetitle' style='position: absolute;width: 360px;height: 170px;top: 288px;left: 70px;overflow: hidden;font-weight:bold;'>
        <div style='position:absolute;width:360px;height:170px;top:0px;left:0px;overflow:hidden;'>
            <div style='position:absolute;width:360px;height:170px;display:table;overflow:hidden;'>
                <div id='titlecontent' style='width:360px;height:170px;vertical-align:middle;display:table-cell;text-align:center;font-size:32px;line-height:45px;'></div>
            </div>
        </div>
    </div>

</div>



<script>

function id(name)
{
    return document.getElementById(name);
}
var image_size_width=[];
var image_size_height=[];
var image_url_index=0;
var have_num = 0;
var error_num = 0;
var canshow = true;
var reshow = false;
var delaytime=5500;
var timeout0;
var timeout1;
var timeout2;
var timeout3;
var timeout4;
var timeout5;
var timeout6;
var timeout7;
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

function showtitle()
{
    id('worddiv').style.webkitAnimation = 'worddiv_in 1.5s linear both';
    id('shanzi').style.webkitAnimation = 'shanzi_in 1.5s linear both';

    id('yuanxiaozi').style.webkitAnimation = 'fadein 1s 1.5s linear both';
    id('titlecontent').innerHTML = e_desc;
    id('pagetitle').style.webkitTransformOrigin = '50% 50%';
    id('pagetitle').style.webkitAnimation = 'title_in 1s 1.5s linear both';

    // setTimeout(distitle,5000)
}

function distitle()
{
    id('shanzi').style.webkitAnimation = 'shanzi_out 1.2s linear both';
    id('pagetitle').style.webkitTransformOrigin = '100% 0%';
    id('pagetitle').style.webkitAnimation = 'title_out 1.2s linear both';
    id('worddiv').style.webkitAnimation = 'worddiv_out 1.2s linear both';

    timeout1 = setTimeout(show1,1200)

}
var divheight;
function show1()
{
    // return;
    id('shandiv3').style.opacity = 0;
    id('shandiv3').style.webkitAnimation = '';
    id('shandiv4').style.opacity = 0;
    id('shandiv4').style.webkitAnimation = '';
    id('shandiv1').style.display = 'block';
    id('shandiv2').style.display = 'block';

    id('shanye1').style.webkitAnimation = 'shanye1_in 1.2s linear both';
    id('zhui1').style.webkitAnimation = 'zhui1 0.7s linear both';

    id('shanye2').style.webkitAnimation = 'shanye1_in 1.2s linear both';
    id('zhui2').style.webkitAnimation = 'zhui1 0.7s linear both';

    setImageindex();

    setImage('1')


    var csstext='@-webkit-keyframes imgup'+image_url_index+' {from{-webkit-transform: translate(0px,0px);opacity:1} to{-webkit-transform: translate(0px,-'+divheight/2+'px);opacity:0}}';
    // console.log(csstext);
    var style=document.createElement('style');
    document.head.appendChild(style);
    var sheet=style.sheet;
    sheet.insertRule(csstext,0);

    var csstext='@-webkit-keyframes imgdown'+image_url_index+' {from{-webkit-transform: translate(0px,0px);opacity:1} to{-webkit-transform: translate(0px,'+divheight/2+'px);opacity:0;}}';
    // console.log(csstext);
    var style=document.createElement('style');
    document.head.appendChild(style);
    var sheet=style.sheet;
    sheet.insertRule(csstext,0);

    id('shandiv1').style.webkitAnimation = 'imgdown'+image_url_index + ' 1.2s 1.2s linear both';
    id('shandiv2').style.webkitAnimation = 'imgup'+image_url_index + ' 1.2s 1.2s linear both';
    id('div1').style.webkitAnimation = 'div1_in 1.2s 1.2s linear both';

    image_url_index++;
    timeout2 = setTimeout(show2,5000);
}

function setImage(pageindex)
{

    img_bili = image_size_width[image_url_index]/image_size_height[image_url_index];

    div1 = id('div'+pageindex);
    img1 = id('img'+pageindex);

    if(img_bili > 1)
    {
        //ºáÍ¼

        div1.style.width = '470px';
        div1.style.left = '15px';

        img1.style.top = '0px';
        img1.style.left = '0px';


        if(img_bili > 470/330)
        {
            //×óÓÒ²Ã¼ô
            img_height = 330;
            img_width = 330*img_bili;

            div1.style.height = '330px';
            divheight = 300;

            div1.style.top = (800-img_height)/2 + 'px';

            img1.style.backgroundPosition = (470-img_width)/2 + 'px 0px';

        }
        else
        {
            img_width = 470;
            img_height = 470/img_bili;

            div1.style.height = img_height + 'px';
            divheight = img_height;
            div1.style.top = (800-img_height)/2 + 'px';

            img1.style.backgroundPosition = '0px 0px';
        }

        img1.style.width = div1.style.width;
        img1.style.height = div1.style.height;
    }
    else
    {
        //ÊúÍ¼
        div1.style.width = '414px';
        div1.style.left = '43px';


        if(img_bili < 400/600)
        {
            //ÉÏÏÂ²Ã¼ô
            img_width = 400;
            img_height = 400/img_bili;

            div1.style.height = '614px';
            divheight = 614;
            div1.style.top = (800-600)/2-7 + 'px';
            img1.style.width = '400px';
            img1.style.height = '600px';

            img1.style.backgroundPosition = '0px '+(600-img_height)/2 + 'px';
        }
        else
        {
            img_width = 400;
            img_height = 400/img_bili;

            div1.style.height = img_height+14 + 'px';
            divheight = img_height + 14;
            div1.style.top = (800-img_height)/2-7 + 'px';
            img1.style.width = '400px';
            img1.style.height = img_height + 'px';


            img1.style.backgroundPosition = '0px 0px'
        }

        img1.style.left = '7px';
        img1.style.top = '7px';
    }

    img1.style.backgroundSize = img_width + 'px ' + img_height + 'px';
    img1.style.backgroundImage = 'url('+Onload_imgs_url[image_url_index]+')';


}

function show2()
{
    id('shandiv1').style.webkitAnimation = '';
    id('shandiv1').style.webkitTransform = 'translate(615px,-164px) rotate(85deg) scale(2)';
    id('shandiv2').style.webkitAnimation = '';
    id('shandiv2').style.webkitTransform = 'translate(1275px,-164px) rotate(95deg) scale(2)';
    id('shanye1').style.webkitAnimation = '';
    id('zhui1').style.webkitAnimation = '';
    id('shanye2').style.webkitAnimation = '';
    id('zhui2').style.webkitAnimation = '';

    id('shanye1').style.webkitAnimation = 'shanye2_in 3s linear both';
    id('shanye2').style.webkitAnimation = 'shanye2_in 3s linear both';

    id('div1').style.webkitAnimation = 'fadeout 1s linear both';
    id('div2').style.webkitAnimation = 'fadein 1s 1s linear both';

    setImageindex();

    setImage('2');
    image_url_index++;

    timeout3 = setTimeout(show3,5000);
}

function show3()
{
    id('shandiv2').style.webkitTransform = 'translate(910px,-847px) rotate(65deg) scale(2.2)';
    id('shandiv1').style.webkitTransform  ='translate(296px,-279px) rotate(46deg) scale(2.2)';
    id('shanye1').style.webkitAnimation = 'shanye3_in 3s linear both';
    id('zhui1').style.webkitAnimation = 'zhui1 1.5s linear both';

    id('shanye2').style.webkitAnimation = 'shanye3_in 3s linear both';
    id('zhui2').style.webkitAnimation = 'zhui1 1.5s linear both';

    id('div2').style.webkitAnimation = 'fadeout 1s linear both';
    id('div3').style.webkitAnimation = 'fadein 1s 1s linear both';

    id('shandiv1').style.webkitAnimation = 'fadeout3 3s linear both';
    id('shandiv2').style.webkitAnimation = 'fadeout3 3s linear both';

    setImageindex();
    setImage('3');
    image_url_index++;

    timeout4 = setTimeout(show4,5000)
}

function show4()
{
    id('shandiv1').style.display = 'block';
    id('shandiv3').style.display = 'block';
    id('shandiv4').style.display = 'block';
    id('shandiv1').style.webkitTransform = 'translate(25px, 108px) rotate(0deg) scale(1.4)';
    id('shandiv3').style.webkitTransform = 'translate(-308px, -6px) rotate(0deg) scale(1.4)';
    id('shandiv4').style.webkitTransform = 'translate(25px, -139px) rotate(0deg) scale(1.4)';
    id('shandiv1').style.webkitAnimation = 'fadeout4 3.5s linear both';
    id('shandiv3').style.webkitAnimation = 'fadeout4 3.2s 0.3s linear both';
    id('shandiv4').style.webkitAnimation = 'fadeout4 2.9s 0.6s linear both';

    id('shanye1').style.webkitAnimation = 'shanye1_in 1.5s cubic-bezier(.22,.3,.8,1) both';
    id('shanye3').style.webkitAnimation = 'shanye1_in 1.5s 0.3s cubic-bezier(.22,.3,.8,1) both';
    id('shanye4').style.webkitAnimation = 'shanye1_in 1.5s 0.6s cubic-bezier(.22,.3,.8,1) both';

    id('zhui1').style.webkitAnimation  = '';
    id('zhui3').style.webkitAnimation  = '';
    id('zhui4').style.webkitAnimation  = '';

    timeout5 = setTimeout(function()
    {
        id('zhui1').style.webkitAnimation  = 'zhui1 0.5s linear both';
        id('zhui3').style.webkitAnimation  = 'zhui1 0.5s 0.5s linear both';
        id('zhui4').style.webkitAnimation  = 'zhui1 0.5s 1s linear both';

    },100)

    id('div3').style.webkitAnimation = 'fadeout 2s linear both';

    timeout6 = setTimeout(function()
    {
        id('shanye1').style.webkitAnimation = '';
        id('shanye3').style.webkitAnimation = '';
        id('shanye4').style.webkitAnimation = '';
        id('zhui1').style.webkitAnimation  = '';
        id('zhui3').style.webkitAnimation  = '';
        id('zhui4').style.webkitAnimation  = '';

        timeout7 = setTimeout(show1,100);
    },3500)
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

    id('worddiv').style.webkitAnimation = '';
    id('shanzi').style.webkitAnimation = '';
    id('yuanxiaozi').style.webkitAnimation = '';
    id('pagetitle').style.webkitAnimation = '';
    id('shandiv1').style.webkitAnimation = '';
    id('shandiv2').style.webkitAnimation = '';
    id('shandiv3').style.webkitAnimation = '';
    id('shandiv4').style.webkitAnimation = '';
    id('shanye1').style.webkitAnimation = '';
    id('shanye2').style.webkitAnimation = '';
    id('shanye3').style.webkitAnimation = '';
    id('shanye4').style.webkitAnimation = '';
    id('zhui1').style.webkitAnimation = '';
    id('zhui2').style.webkitAnimation = '';
    id('zhui3').style.webkitAnimation = '';
    id('zhui4').style.webkitAnimation = '';
    id('div1').style.webkitAnimation = '';
    id('div2').style.webkitAnimation = '';
    id('div3').style.webkitAnimation = '';

    id('shandiv1').style.display = 'none';
    id('shandiv2').style.display = 'none';
    id('shandiv3').style.display = 'none';
    id('shandiv4').style.display = 'none';

}
</script>