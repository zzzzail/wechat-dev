<?
$p=$_WEITE['web_pic_url']."xingfushiguang/";
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
        /*background-image: url(http://hg.jielanhua.cn/ps/love1/love1_back.jpg); */
    }
    #container > img, #container > div
    {
        position: absolute;
    }

    #div1
    {
        left: 0px;
        top: 86px;
    }
    #guang
    {
        left: 6px;
        top: 370px;
    }
    #zi11
    {
        left: 126px;
        top: 687px;
    }
    #zi12
    {
        left: 35px;
        top: 713px;
    }
    #love
    {
        left: 62px;
        top: 485px;
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

    @-webkit-keyframes guangup
    {
        from  {-webkit-transform: translate(0px,400px);opacity: 0}
        to    {-webkit-transform: translate(0px,0px);opacity: 1}
    }
    #box1
    {
        width: 478px;
        height: 478px;
        top: 6px;
        left: 14px;
        position: absolute;
        -webkit-mask: url(<?=$p?>images/mask1.png);
    }
    #div2
    {
        left: -26px;
        top: 149px;
        width: 553px;
        height: 487px;
    }
    #box2
    {
        position: absolute;
        top: 22px;
        left: 21px;
        width: 510px;
        height: 443px;
        -webkit-mask: url(<?=$p?>images/mask2.png);
        overflow: hidden;
    }
    #zi21
    {
        left: 175px;
        top: 87px;
    }
    #zi22
    {
        left: 175px;
        top: 111px;
    }
    #div3
    {
        left: -7.5px;
        top: 106px;
    }
    #box3
    {
        position: absolute;
        top: 26px;
        left: 24px;
        width: 464px;
        height: 358px;
        overflow: hidden;
        -webkit-mask: url(<?=$p?>images/mask3.png);
    }
    #zi31
    {
        left: 54px;
        top: 551px;
    }
    #zi32
    {
        left: 88px;
        top: 573px;
    }
    #div41
    {
        width: 341px;
        height: 330px;
        left: 225px;
        top: 56px;
    }
    #box41
    {
        position: absolute;
        top: 10px;
        left: 12px;
        width: 310px;
        height: 310px;
        overflow: hidden;
        -webkit-mask: url(<?=$p?>images/mask41.png);
    }
    #div42
    {
        left: -54px;
        top: 226px;
        width: 385px;
        height: 377px;
    }
    #box42
    {
        position: absolute;
        width: 362px;
        height: 357px;
        left: 11px;
        top: 10px;
        overflow: hidden;
        -webkit-mask: url(<?=$p?>images/mask42.png);
    }
    #zi41
    {
        left: 337px;
        top: 466px;
    }
    #zi42
    {
        left: 338px;
        top: 488px;
    }
    #zi43
    {
        left: 338px;
        top: 508px;
    }
    #zi44
    {
        left: 338px;
        top: 530px;
    }
    #div51
    {
        left: -72px;
        top: 72px;
    }
    #box51
    {
        position: absolute;
        width: 425px;
        height: 347px;
        overflow: hidden;
        top: 17px;
        left: 16px;
        -webkit-mask: url(<?=$p?>images/mask51.png);
    }
    #div52
    {
        left: 171px;
        top: 279px;
    }
    #box52
    {
        position: absolute;
        left: 14px;
        top: 17px;
        width: 350px;
        height: 290px;
        overflow: hidden;
        -webkit-mask: url(<?=$p?>images/mask52.png);
    }
    #zi51
    {
        left: 20px;
        top: 521px;
    }
    #zi52
    {
        left: 21px;
        top: 542px;
    }
    #zi53
    {
        left: 21px;
        top: 563px;
    }
    #zi54
    {
        left: 20px;
        top: 583px;
    }
    #div61
    {
        left: 245px;
        top: 4.5px;
    }
    #box61
    {
        width: 273px;
        height: 273px;
        top: 9px;
        left: 12px;
        position: absolute;
        overflow: hidden;
        -webkit-mask: url(<?=$p?>images/mask61.png);
    }
    #div62
    {
        left: -42px;
        top: 134px;
    }
    #box62
    {
        top: 8px;
        left: 11px;
        width: 357px;
        height: 357px;
        overflow: hidden;
        position: absolute;
        -webkit-mask: url(<?=$p?>images/mask63.png);
    }
    #div63
    {
        left: 232px;
        top: 332px;
    }
    #box63
    {
        width: 273px;
        height: 273px;
        top: 9px;
        left: 11px;
        position: absolute;
        -webkit-mask: url(<?=$p?>images/mask61.png);
    }
    #zi61
    {
        left: 53px;
        top: 546px;
    }
    #zi62
    {
        left: 53px;
        top: 567px;
    }
    #zi63
    {
        left: 53px;
        top: 588px;
    }
    #pagetitle
    {
        width: 440px;
        left: 30px;
        /*background-color: #fff;*/
        font-size: 44px;
        color: #C790A1;
        height: 160px;
        top: 300px;
    }
    @-webkit-keyframes skewtitle
    {
        from  {-webkit-transform: skewX(0deg);}
        to    {-webkit-transform: skewX(90deg);}
    }
    @-webkit-keyframes fade_in_out
    {
        0%   {opacity: 0}
        30%  {opacity: 1}
        70%  {opacity: 1}
        100% {opacity: 0}
    }
    #love1
    {
        left: 62px;
        top: 594px
    }
    #guang1
    {
        left: 10px;
        top: 487px;
    }
    @-webkit-keyframes hua3
    {
        0%  {-webkit-transform: translate(0px,0px) rotate(0deg); }
        70% {-webkit-transform: translate(-600px,700px) rotate(500deg);}
        100%{-webkit-transform: translate(-600px,700px) rotate(500deg);}
    }
    @-webkit-keyframes hua1
    {
        0%  {-webkit-transform: translate(0px,0px) rotate(0deg);}
        80%{-webkit-transform: translate(-450px,900px) rotate(500deg);}
        100%{-webkit-transform: translate(-450px,900px) rotate(500deg);}
    }
    @-webkit-keyframes hua2
    {
        0%  {-webkit-transform: translate(0px,0px) rotate(0deg);}
        80%{-webkit-transform: translate(450px,900px) rotate(500deg);}
        100%{-webkit-transform: translate(450px,900px) rotate(500deg);}
    }
</style>

<div id='container'>
    <img id='bg' src='<?=$p?>images/bg.jpg'>

    <img id='bg1' style='opacity:0' src='<?=$p?>images/bg1.jpg'>
    <div id='div1' style='opacity:0'>
        <img src='<?=$p?>images/xiang1.png' style='position:absolute'>
        <div id='box1'>
            <img id='img1' style='position:absolute'>
        </div>
    </div>

    <img id='bg2' style='opacity:0' src='<?=$p?>images/bg2.jpg'>
    <div id='div2' style='opacity:0'>
        <img src='<?=$p?>images/xiang2.png'>
        <div id='box2'>
            <img id='img2' style='position:absolute'>
        </div>
    </div>

    <div id='div3' style='opacity:0'>
        <img src='<?=$p?>images/xiang3.png'>
        <div id='box3'>
            <img id='img3' style='position:absolute'>
        </div>
    </div>

    <img id='bg4' style='opacity:0' src='<?=$p?>images/bg3.jpg'>
    <div id='div41' style='opacity:0'>
        <img src='<?=$p?>images/xiang41.png'>
        <div id='box41'>
            <img id='img41' style='position:absolute'>
        </div>
    </div>
    <div id='div42' style='opacity:0'>
        <img src='<?=$p?>images/xiang42.png'>
        <div id='box42'>
            <img id='img42' style='position:absolute'>
        </div>
    </div>
    
    <div id='div51' style='opacity:0'>
        <img src='<?=$p?>images/xiang51.png'>
        <div id='box51'>
            <img id='img51' style='position:absolute'>
        </div>
    </div>
    <div id='div52' style='opacity:0'>
        <img src='<?=$p?>images/xiang52.png'>
        <div id='box52'>
            <img id='img52' style='position:absolute'>
        </div>
    </div>

    <div id='div61' style='opacity:0'>
        <img src='<?=$p?>images/xiang61.png'>
        <div id='box61'>
            <img id='img61' style='position:absolute'>
        </div>
    </div>
    <div id='div63' style='opacity:0'>
        <img src='<?=$p?>images/xiang61.png'>
        <div id='box63'>
            <img id='img63' style='position:absolute'>
        </div>
    </div>
    <div id='div62' style='opacity:0'>
        <img src='<?=$p?>images/xiang63.png'>
        <div id='box62'>
            <img id='img62' style='position:absolute'>
        </div>
    </div>  
   

    <img id='love' style='opacity:0;position:absolute' src='<?=$p?>images/LOVE.png'>
    <img id='guang' style='opacity:0' src='<?=$p?>images/guang.png'>
    <img id='love1' style='opacity:0' src='<?=$p?>images/LOVE.png'>
    <img id='guang1' style='opacity:0' src='<?=$p?>images/guang.png'>
    <img id='zi11' style='opacity:0' src='<?=$p?>images/zi11.png'>
    <img id='zi12' style='opacity:0' src='<?=$p?>images/zi12.png'>
    <img id='zi21' style='opacity:0' src='<?=$p?>images/zi21.png'>
    <img id='zi22' style='opacity:0' src='<?=$p?>images/zi22.png'>
    <img id='zi31' style='opacity:0' src='<?=$p?>images/zi31.png'>
    <img id='zi32' style='opacity:0' src='<?=$p?>images/zi32.png'>
    <img id='zi41' style='opacity:0' src='<?=$p?>images/zi41.png'>
    <img id='zi42' style='opacity:0' src='<?=$p?>images/zi42.png'>
    <img id='zi43' style='opacity:0' src='<?=$p?>images/zi43.png'>
    <img id='zi44' style='opacity:0' src='<?=$p?>images/zi44.png'>
    <img id='zi51' style='opacity:0' src='<?=$p?>images/zi51.png'>
    <img id='zi52' style='opacity:0' src='<?=$p?>images/zi52.png'>
    <img id='zi53' style='opacity:0' src='<?=$p?>images/zi53.png'>
    <img id='zi54' style='opacity:0' src='<?=$p?>images/zi54.png'>
    <img id='zi61' style='opacity:0' src='<?=$p?>images/zi61.png'>
    <img id='zi62' style='opacity:0' src='<?=$p?>images/zi62.png'>
    <img id='zi63' style='opacity:0' src='<?=$p?>images/zi63.png'>
   
    <div id='pagetitle' style='opacity:0;pointer:none' >
        <div id='pagebox' style='display:table;width:440px;height:150px;position:absolute;overflow:hidden;'>
            <div id='titleword' style='display:table-cell;vertical-align:middle;height:150px;width:440px;text-align:center;top:0px;left:0px;overflow:hidden;line-height:150%;'></div>
        </div>
    </div>

    <img src='<?=$p?>images/hua3.png' style='left:500px;top:20px;-webkit-animation: hua3 9s 1s linear infinite'>
    <img src='<?=$p?>images/hua1.png' style='left:500px;top:-50px;-webkit-animation: hua1 9s linear infinite'>
    <img src='<?=$p?>images/hua1.png' style='left:-50px;top:30px;-webkit-animation: hua2 9s 3s linear infinite'>
</div>
<script>
function id(name)
{
    return document.getElementById(name)
}
function beginshow()
{
    if(reshow == true)
        return;
    if(image_url_index == Onload_imgs_url.length)
        image_url_index = 0;
    setImage('1');
    image_url_index++; 
    id('bg1').style.webkitAnimation = 'fadein 2s ease-out forwards';
    
    id('love').style.webkitAnimation = 'fadein 1s ease-out 2s forwards';
    id('div1').style.webkitAnimation = '';
    setTimeout(function()
    {
        id('div1').style.webkitAnimation = 'fade_in_out 5s ease-in-out 1s forwards';
    },100)
    id('guang').style.webkitAnimation = 'fadein 0.7s ease-in 2.5s forwards';
    id('zi11').style.webkitAnimation = 'fadein 0.7s ease-in 3.2s forwards';
    id('zi12').style.webkitAnimation = 'fadein 0.7s ease-in 4s forwards';

    timeout3 = setTimeout(show2,5000);
}
function clearnodes()
{

    clearTimeout(timeout1);
    clearTimeout(timeout2);
    clearTimeout(timeout3);
    clearTimeout(timeout4);
    clearTimeout(timeout5);
    clearTimeout(timeout6);
    clearTimeout(timeout7);
    clearTimeout(timeout8);
    clearTimeout(timeout9);
    clearTimeout(timeout10);
    clearTimeout(timeout11);
    clearTimeout(timeout12);
    clearTimeout(timeout13);
    clearTimeout(timeout14);
    clearTimeout(timeout15);
    var idname = ['div1','div2','div3','div41','div42','div51','div52','div61','div62','div63','zi11','zi12','zi21','zi22','zi31','zi32','zi41','zi42','zi43','zi44','zi51','zi52','zi53','zi54','zi61','zi62','zi63','bg1','bg2','bg4','love','love1','guang','guang1'];
    // console.log(timeout1);
    for(var i=0;i<idname.length;i++)
    {
        var obj = id(idname[i]);
        console.log(obj.id);
        obj.style.webkitAnimation = '';
    }
}
function show1()
{
    if(reshow == true)
        return;
    id('bg4').style.webkitAnimation = 'fadeout 1s linear both';
    id('guang1').style.webkitAnimation = 'fadeout 1s linear both';
    id('love1').style.webkitAnimation = 'fadeout 1s ease-out both';
    id('zi61').style.webkitAnimation = 'fadeout .5s linear .2s both';
    id('zi62').style.webkitAnimation = 'fadeout .5s linear .4s both';
    id('zi63').style.webkitAnimation = 'fadeout .5s linear .6s both';

    timeout4 = setTimeout(function()
    {
        if(reshow == true)
            return;
        if(image_url_index == Onload_imgs_url.length)
            image_url_index = 0;
        setImage('1');
        image_url_index++; 
        var love = id('love');
        love.style.left = '62px';
        love.style.top = '485px';

        id('bg1').style.webkitAnimation = 'fadein 2s ease-out both';
        id('div1').style.webkitAnimation = '';
        setTimeout(function()
        {
            id('div1').style.webkitAnimation = 'fade_in_out 5s ease-in-out both';
        },100)
        id('love').style.webkitAnimation = 'fadein 1s 2s ease-in both';
        id('guang').style.webkitAnimation = 'fadein 0.7s 2.5s ease-in both';
        id('zi11').style.webkitAnimation = 'fadein 0.7s ease-in 3.2s both';
        id('zi12').style.webkitAnimation = 'fadein 0.7s ease-in 4s both';

        timeout5 = setTimeout(show2,5000);
    },1500)
}
function show2()
{
    if(reshow == true)
        return;
    id('love').style.webkitAnimation = 'fadeout 1s linear both';
    id('zi11').style.webkitAnimation = 'fadeout 1s linear both';
    id('zi12').style.webkitAnimation = 'fadeout 1s linear both';
    id('guang').style.webkitAnimation = 'fadeout 1s linear both';
    id('bg1').style.webkitAnimation = 'fadeout 1s linear both';

    timeout6 = setTimeout(function()
    {
        if(reshow == true)
            return;
        if(image_url_index == Onload_imgs_url.length)
            image_url_index = 0;
        setImage('2');
        image_url_index++; 

        id('bg2').style.webkitAnimation = 'fadein 1.5s ease-in-out both';
        id('div2').style.webkitAnimation = '';
        setTimeout(function()
        {
            id('div2').style.webkitAnimation = 'fade_in_out 5s 1s ease-in-out both';
        },100)
        var love = id('love1')
        love.style.left = '62px';
        love.style.top = '594px';
        love.style.webkitAnimation = 'fadein 1.5s 2s ease-in-out both';
        var guang = id('guang1');
        guang.style.left = '10px';
        guang.style.top = '487px';
        guang.style.webkitAnimation = 'fadein 1.5s 2.5s ease-in-out both';
        id('zi21').style.webkitAnimation = 'fadein 1s ease-in-out 3s both';
        id('zi22').style.webkitAnimation = 'fadein 1s ease-in-out 3.8s both';

        timeout7 = setTimeout(show3,5500)
    },1500)

}

function show3()
{
    if(reshow == true)
        return;
    // id('div2').style.webkitAnimation = 'fadeout 1s ease-out both';
    id('zi21').style.webkitAnimation = 'fadeout 1s ease-out both';
    id('zi22').style.webkitAnimation = 'fadeout 1s ease-out both';
    id('guang1').style.webkitAnimation = 'fadeout 1s linear both';
    id('bg2').style.webkitAnimation = 'fadeout 1s ease-out both';

    timeout8 = setTimeout(function()
    {
        if(reshow == true)
            return;
        if(image_url_index == Onload_imgs_url.length)
            image_url_index = 0;
        setImage('3');
        image_url_index++; 
        id('bg2').style.webkitAnimation = 'fadein 1s linear both';
        id('div3').style.display = 'block';
        id('zi31').style.display = 'block';
        id('zi32').style.display = 'block';
        id('div3').style.webkitAnimation = '';
        setTimeout(function()
        {
            id('div3').style.webkitAnimation = 'fade_in_out 5s ease-in 1s both';
        },100)
        id('guang1').style.webkitAnimation = 'fadein 1s ease-in 1s both';
        id('zi31').style.webkitAnimation = 'fadein 1s ease-in-out 2s both';
        id('zi32').style.webkitAnimation = 'fadein 1s ease-in-out 3s both';
        timeout9 = setTimeout(show4,5000)
    },1500)
}

function show4()
{
    if(reshow == true)
        return;
    // id('div3').style.webkitAnimation = 'fadeout 1s ease-out both';
    id('zi31').style.webkitAnimation = 'fadeout 1s ease-out both';
    id('zi32').style.webkitAnimation = 'fadeout 1s ease-out both';
    id('guang1').style.webkitAnimation = 'fadeout 1s linear both';
    id('bg2').style.webkitAnimation = 'fadeout 1s ease-out both';

    timeout10 = setTimeout(function()
    {
        if(reshow == true)
            return;
        if(image_url_index == Onload_imgs_url.length)
            image_url_index = 0;
        setImage('41');
        image_url_index++; 
        if(image_url_index == Onload_imgs_url.length)
            image_url_index = 0;
        setImage('42');
        image_url_index++; 
        id('bg4').style.webkitAnimation = 'fadein 1s linear both';
        id('div41').style.webkitAnimation = '';
        id('div42').style.webkitAnimation = '';
        setTimeout(function()
        {
            id('div41').style.webkitAnimation = 'fade_in_out 5s 0.8s ease-in both';
            id('div42').style.webkitAnimation = 'fade_in_out 5s 1.5s ease-in both';
        },100)
        id('guang1').style.webkitAnimation = 'fadein 1s 1.7s ease-in both';
        id('zi41').style.webkitAnimation = 'fadein 0.8s 2s ease-out both';
        id('zi42').style.webkitAnimation = 'fadein 0.8s 2.5s ease-out both';
        id('zi43').style.webkitAnimation = 'fadein 0.8s 3s ease-out both';
        id('zi44').style.webkitAnimation = 'fadein 0.8s 3.5s ease-out both';

        timeout11 = setTimeout(show5,5000)
    },1500)
}

function show5()
{
    if(reshow == true)
        return;
    id('bg4').style.webkitAnimation = 'fadeout 1s ease-out both';
    id('guang1').style.webkitAnimation = 'fadeout 1s linear both';
    id('zi41').style.webkitAnimation = 'fadeout 1s ease-out both';
    id('zi42').style.webkitAnimation = 'fadeout 1s .1s ease-out both';
    id('zi43').style.webkitAnimation = 'fadeout 1s .2s ease-out both';
    id('zi44').style.webkitAnimation = 'fadeout 1s .3s ease-out both';

    timeout12 = setTimeout(function()
    {
        if(reshow == true)
            return;
        if(image_url_index == Onload_imgs_url.length)
            image_url_index = 0;
        setImage('51');
        image_url_index++; 
        if(image_url_index == Onload_imgs_url.length)
            image_url_index = 0;
        setImage('52');
        image_url_index++; 
        id('bg2').style.webkitAnimation = 'fadein 1s linear both';
        id('div51').style.webkitAnimation = '';
        id('div52').style.webkitAnimation = '';
        setTimeout(function()
        {
            id('div51').style.webkitAnimation = 'fade_in_out 5s ease-in 1s both';
            id('div52').style.webkitAnimation = 'fade_in_out 5s ease-in 1.7s both';
        },100)
        id('guang1').style.webkitAnimation = 'fadein 1s ease-in 2.3s both';
        id('zi51').style.webkitAnimation = 'fadein .8s linear 2.5s both';
        id('zi52').style.webkitAnimation = 'fadein .8s linear 3s both';
        id('zi53').style.webkitAnimation = 'fadein .8s linear 3.5s both';
        id('zi54').style.webkitAnimation = 'fadein .8s linear 4s both';

        timeout13 = setTimeout(show6,5000)
    },1600)
}

function show6()
{
    if(reshow == true)
        return;
    id('bg2').style.webkitAnimation = 'fadeout 1s linear both';
    id('guang1').style.webkitAnimation = 'fadeout 1s ease-in both';
    id('zi51').style.webkitAnimation = 'fadeout 1s linear both';
    id('zi52').style.webkitAnimation = 'fadeout 1s linear 0.1s both';
    id('zi53').style.webkitAnimation = 'fadeout 1s linear 0.2s both';
    id('zi54').style.webkitAnimation = 'fadeout 1s linear 0.3s both';

    timeout14 = setTimeout(function()
    {
        if(reshow == true)
            return;
        if(image_url_index == Onload_imgs_url.length)
            image_url_index = 0;
        setImage('61');
        image_url_index++; 
        if(image_url_index == Onload_imgs_url.length)
            image_url_index = 0;
        setImage('62');
        image_url_index++; 
        if(image_url_index == Onload_imgs_url.length)
            image_url_index = 0;
        setImage('63');
        image_url_index++; 
        id('bg4').style.webkitAnimation = 'fadein 1s linear both';
        id('div61').style.webkitAnimation = '';
        id('div62').style.webkitAnimation = '';
        id('div63').style.webkitAnimation = '';
        setTimeout(function()
        {
            id('div61').style.webkitAnimation = 'fade_in_out 5s ease-in 1s both';
            id('div62').style.webkitAnimation = 'fade_in_out 5s ease-in 1.5s both';
            id('div63').style.webkitAnimation = 'fade_in_out 5s ease-in 2s both';
        },100)
        id('guang1').style.webkitAnimation = 'fadein 1s ease-in 2.5s both';
        id('zi61').style.webkitAnimation = 'fadein .8s linear 3s both';
        id('zi62').style.webkitAnimation = 'fadein .8s linear 3.2s both';
        id('zi63').style.webkitAnimation = 'fadein .8s linear 3.4s both';

        timeout15 = setTimeout(show1,6000);
    },1500)
}
var image_size_width=[];
var image_size_height=[];

var image_url_index=0;
var have_num = 0;
var error_num = 0;
var canshow = true;
var reshow = false;
function loadimages()
{
    begin_titletime = new Date();
    begin_titletime = begin_titletime.getTime();
    showtitle();
    // return;
    image_size_width=[];
    image_size_height=[];
    Onload_imgs_url=[];
    image_ready_num=18;
    image_url_index=0;
    have_num = 0;
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
function showtitle()
{
    id('titleword').innerHTML = e_desc;
    id('pagebox').style.webkitAnimation = '';
    id('pagetitle').style.webkitAnimation = 'fadein 1s linear both';
}
function distitle()
{
    id('pagebox').style.webkitAnimation = 'skewtitle 0.5s ease both';
    id('pagetitle').style.webkitAnimation = 'fadeout 1s linear both';
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
        clearnodes();
        var end_titletime = new Date();
        end_titletime = end_titletime.getTime();
        var dis_titletime = Math.abs(end_titletime-begin_titletime);
        if(dis_titletime>2000)
        {
            distitle();
            timeout1 = setTimeout(beginshow,1000);
        }
        else
        {
            dis_titletime = 2000- dis_titletime;
            timeout1 = setTimeout(function()
                {
                    distitle();
                    timeout2 = setTimeout(beginshow,1000);
                },dis_titletime);
        }
    }
}
function image_onload(event)
{
    var img = event.target;
    var index = img.index;

    if(index < 10)
    {
        have_num++;
    }
    Onload_imgs_url[index] = img.src;
    image_size_height[index] = img.height;
    image_size_width[index] = img.width;

    if((have_num+error_num >=10 || slider_images_url.length == (have_num+error_num)) && canshow == true)
    {   
        reshow = false;
        canshow =false;
        if(have_num == 0)
            return;
        clearnodes();
        var end_titletime = new Date();
        end_titletime = end_titletime.getTime();
        var dis_titletime = Math.abs(end_titletime-begin_titletime);
        if(dis_titletime>2000)
        {
            distitle();
            timeout1 = setTimeout(beginshow,1000);
        }
        else
        {
            dis_titletime = 2000- dis_titletime;
            timeout1 = setTimeout(function()
                {
                    distitle();
                    timeout2 = setTimeout(beginshow,1000);
                },dis_titletime);
        }

    }
}
var divwidth = {'1':478,'2':510,'3':464,'41':310,'42':362,'51':425,'52':350,'61':273,'62':357,'63':273};
var divheight = {'1':478,'2':443,'3':358,'41':310,'42':357,'51':347,'52':290,'61':273,'62':357,'63':273};
var timeout1;
var timeout2;
var timeout3;
var timeout4;
var timeout5;
var timeout6;
var timeout7;
var timeout8;
var timeout9;
var timeout10;
var timeout11;
var timeout12;
var timeout13;
var timeout14;
var timeout15;
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

    var div = id('div'+idname);

    var height = divheight[idname];
    var width = divwidth[idname];

    var img = id('img'+idname);
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
}
call_me(loadimages);
function reload_scene()
{
    reshow = true;
    clearnodes();
    setTimeout(loadimages,300);
}
</script>