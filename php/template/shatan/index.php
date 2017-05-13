<?
$p=$_WEITE['web_pic_url']."shatan/";
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
/*        left: 200px;*/
        position: absolute;
        overflow: hidden;
    }
    #container > div,#container > img
    {
        position: absolute;
    }
    #jiusheng
    {
        position: absolute;
        top: -55px;
        left: 260px;
    }
    #jiushengying
    {
        position: absolute;
        top: 38px;
        left: 292px;
    }
    #haiquan
    {
        -webkit-animation: haiquan 2s linear infinite alternate;
    }
    @-webkit-keyframes haiquan
    {
        from  {-webkit-transform: translate(0px,0px);}
        to    {-webkit-transform: translate(5px,10px);}
    }
    .kuang
    {
        width: 285px;
        height: 377px;
        top: 0px;
        left: -110px;
        position: absolute;
        -webkit-transform: translate(687px,386px) rotate(50deg);
        /*-webkit-animation: kuangmove 10s linear infinite;*/

    }
    .kuang1
    {
        width: 285px;
        height: 377px;
        top: 0px;
        left: -110px;
        position: absolute;
        -webkit-transform: translate(687px,386px) rotate(50deg);
        /*-webkit-animation: kuangmove1 10s linear infinite;*/
    }
    .kuangimg
    {
        position: absolute;
        -webkit-transform-origin: 0% 100%;
        -webkit-transform: rotate(15deg);
        /*-webkit-animation: kuang 10s linear infinite;*/
    }

    @-webkit-keyframes kuangmove
    {
        0%  {-webkit-transform: translate(0px,0px);}
        50% {-webkit-transform: translate(158px,134px);}
        70% {-webkit-transform: translate(208px,154px) rotate(-10deg);}
        100%{-webkit-transform: translate(687px,386px) rotate(50deg);}
    }
    @-webkit-keyframes kuangmove1
    {
        0%  {-webkit-transform: translate(0px,386px);}
        50% {-webkit-transform: translate(158px,154px);}
        70% {-webkit-transform: translate(208px,134px) rotate(-10deg);}
        100%{-webkit-transform: translate(687px,0px) rotate(40deg);}
    }
    @-webkit-keyframes kuang
    {
        0%  {-webkit-transform: rotate(-70deg);}
        50% {-webkit-transform: rotate(15deg);}
        100%{-webkit-transform: rotate(15deg)}
    }
    .ying
    {
        position: absolute;
        top: 132px;
        left: 54px;
        -webkit-transform-origin: 0% 100%;
        /*-webkit-transform: translate(-60px,-65px) rotate(15deg);*/
        /*-webkit-animation: yingmove 10s linear infinite;*/
    }
    @-webkit-keyframes yingmove
    {
        0%  {-webkit-transform: translate(0px) rotate(-70deg);}
        50% {-webkit-transform: translate(-40px,-65px) rotate(15deg);}
        70% {-webkit-transform: translate(-40px,-65px) rotate(17deg);}
        100% {-webkit-transform: translate(-1px,-99px) rotate(15deg);}
        /*100% {opacity: 0}*/
    }
    #jijuxie,#jijuxieying
    {
        position: absolute;
        width: 100px;
        height: 100px;
        top: 632px;
        left: 49px;
        -webkit-animation: jijuxie 12s linear infinite;
        -webkit-transform: translate(0px,0px) rotate(-40deg) scale(.8,.8);
    }
    @-webkit-keyframes jijuxie
    {
        0%   {-webkit-transform: translate(0px,0px) rotate(-40deg) scale(.8,.8);}
        6%  {-webkit-transform: translate(0px,0px) rotate(-50deg) scale(.8,.8);}
        11%  {-webkit-transform: translate(0px,0px) rotate(-40deg) scale(.8,.8);}
        30%  {-webkit-transform: translate(-40px,-35px) rotate(-40deg) scale(.8,.8);}
        34%  {-webkit-transform: translate(-40px,-35px) rotate(-47deg) scale(.8,.8);}
        45%  {-webkit-transform: translate(-40px,-35px) rotate(-10deg) scale(.8,.8);}
        70%  {-webkit-transform: translate(0px,0px) rotate(-40deg) scale(.8,.8);}
        100%  {-webkit-transform: translate(0px,0px) rotate(-40deg) scale(.8,.8);}
    }
    #jijuxie > img, #jijuxie > div
    {
        position: absolute;
    }
    #jijuxieying > img, #jijuxieying > div
    {
        position: absolute;
    }
    .tou
    {
        left: 111px;
        top: -12px;
        -webkit-transform: rotate(100deg);
        -webkit-animation: xietou 12s linear infinite;
    }
    @-webkit-keyframes xietou
    {
        0%   {-webkit-transform: translate(-66px,0px) rotate(100deg);}
        6%   {-webkit-transform: translate(-25px,0px) rotate(100deg);}
        11%  {-webkit-transform: translate(0px,0px) rotate(100deg);}
        30%  {-webkit-transform: translate(0px,0px) rotate(100deg);}
        34%  {-webkit-transform: translate(0px,0px) rotate(100deg);}
        45%  {-webkit-transform: translate(-66px,0px) rotate(100deg);}
        70%  {-webkit-transform: translate(-75px,0px) rotate(100deg);}
        100% {-webkit-transform: translate(-75px,0px) rotate(100deg);}        
    }
    .leg3
    {
        -webkit-transform-origin: 0% 80%;
        /*-webkit-transform: translate(-50px,0px) rotate(7deg);*/
        -webkit-animation: leg3 12s linear infinite;
    }
    @-webkit-keyframes leg3
    {
        0%   {-webkit-transform: translate(-50px,0px) rotate(37deg)}
        7%   {-webkit-transform: translate(-20px,0px) rotate(0deg)}
        9%   {-webkit-transform: translate(0px,0px) rotate(5deg)}
        11%  {-webkit-transform: translate(0px,0px) rotate(0deg);}
        30%  {-webkit-transform: translate(0px,0px) rotate(0deg);}
        34%  {-webkit-transform: translate(0px,0px) rotate(0deg);}
        45%  {-webkit-transform: translate(-50px,0px) rotate(7deg);}
        70%  {-webkit-transform: translate(-50px,0px) rotate(7deg);}
        100% {-webkit-transform: translate(-50px,0px) rotate(7deg);}        
    }
    .leg4
    {
        -webkit-transform-origin: 0% 10%;
        -webkit-transform: translate(-34px,0px) rotate(-46deg);
        -webkit-animation: leg4 12s linear infinite;
    }
    @-webkit-keyframes leg4
    {
        0%   {-webkit-transform: translate(-40px,-12px) rotate(-9deg)}
        6%   {-webkit-transform: translate(-40px,-12px) rotate(-9deg)}
        11%  {-webkit-transform: translate(0px,0px) rotate(10deg);}
        30%  {-webkit-transform: translate(0px,0px) rotate(10deg);}
        34%  {-webkit-transform: translate(0px,0px) rotate(10deg);}
        45%  {-webkit-transform: translate(-40px,-12px) rotate(-9deg)}
        70%  {-webkit-transform: translate(-40px,-12px) rotate(-9deg)}
        100% {-webkit-transform: translate(-40px,-12px) rotate(-9deg)}        
    }
    .leg1-1
    {
        -webkit-transform-origin: 100% 100%;
        -webkit-transform: rotate(17deg);
        -webkit-animation: leg1-1 12s linear infinite;
    }
    .leg1
    {
        -webkit-transform-origin: 50% 100%;
        -webkit-transform:translate(14px,12px) rotate(0deg);
        -webkit-animation: leg1 12s linear infinite;
    }
    @-webkit-keyframes leg1
    {
        0%   {-webkit-transform:translate(-56px,-10px) rotate(164deg);}
        /*6%   {-webkit-transform:translate(-56px,-10px) rotate(164deg);}*/
        11%  {-webkit-transform:translate(14px,12px) rotate(0deg)}
        14.5% {-webkit-transform:translate(14px,12px) rotate(5deg)}
        18%   {-webkit-transform:translate(14px,12px) rotate(0deg)}
        21.5% {-webkit-transform:translate(14px,12px) rotate(0deg)}
        25%   {-webkit-transform:translate(14px,12px) rotate(-7deg)}
        28.5% {-webkit-transform:translate(14px,12px) rotate(-7deg)}
        32%   {-webkit-transform:translate(14px,12px) rotate(-10deg)}
/*        30%  {-webkit-transform:translate(0px,0px) rotate(0deg)}
        34%  {-webkit-transform:translate(0px,0px) rotate(0deg)}*/
        45%  {-webkit-transform:translate(-56px,-10px) rotate(164deg)}
        70%  {-webkit-transform:translate(-56px,-10px) rotate(164deg)}
        100% {-webkit-transform:translate(-56px,-10px) rotate(164deg)} 
    }
    @-webkit-keyframes leg1-1
    {
        0%   {-webkit-transform: rotate(17deg)}
        6%   {-webkit-transform: rotate(17deg)}
        11%  {-webkit-transform: rotate(17deg)}
        14.5% {-webkit-transform: rotate(17deg)}
        18%   {-webkit-transform: rotate(27deg)}
        21.5% {-webkit-transform: rotate(27deg)}
        25%   {-webkit-transform: rotate(28deg)}
        28.5% {-webkit-transform: rotate(28deg)}
        32%   {-webkit-transform: rotate(28deg)}
        45%  {-webkit-transform: rotate(17deg)}
        70%  {-webkit-transform: rotate(17deg)}
        100% {-webkit-transform: rotate(17deg)} 
    }
    .leg13
    {
        position: absolute;
        -webkit-transform-origin: 80% 20%;
        -webkit-animation: leg13 12s linear infinite;
    }
    @-webkit-keyframes leg13
    {
        0%   {-webkit-transform: translate(0px,0px) rotate(0deg)}
        6%   {-webkit-transform: translate(0px,0px) rotate(0deg)}
        11%  {-webkit-transform: translate(0px,0px) rotate(0deg)}
        14.5% {-webkit-transform: translate(0px,0px) rotate(0deg)}
        18%   {-webkit-transform: translate(0px,0px) rotate(0deg)}
        21.5% {-webkit-transform: translate(0px,0px) rotate(0deg)}
        25%   {-webkit-transform: translate(0px,0px) rotate(0deg)}
        28.5% {-webkit-transform: translate(0px,0px) rotate(0deg)}
        32%   {-webkit-transform: translate(0px,0px) rotate(-49deg)}
        45%  {-webkit-transform: translate(0px,0px) rotate(0deg)}
        70%  {-webkit-transform: translate(0px,0px) rotate(0deg)}
        100% {-webkit-transform: translate(0px,0px) rotate(0deg)}         
    }
    .leg2
    {
        -webkit-transform-origin: 0% 100%;
        -webkit-transform: translate(13px,11px) rotate(10deg);
        -webkit-animation: leg2 12s linear infinite;
    }
    @-webkit-keyframes leg2
    {
        0%   {-webkit-transform: translate(-60px,24px) rotate(52deg);}
        /*6%   {-webkit-transform:translate(-56px,-10px) rotate(164deg);}*/
        11%  {-webkit-transform: translate(13px,11px) rotate(10deg);}
        14.5% {-webkit-transform:translate(13px,11px) rotate(10deg);}
        18%   {-webkit-transform: translate(13px,11px) rotate(10deg);}
        21.5% {-webkit-transform: translate(13px,11px) rotate(10deg);}
        25%   {-webkit-transform: translate(13px,11px) rotate(-8deg);}
        28.5% {-webkit-transform: translate(13px,11px) rotate(-14deg);}
        32%   {-webkit-transform: translate(13px,11px) rotate(-9deg);}
        45%  {-webkit-transform: translate(-60px,24px) rotate(52deg);}
        70%  {-webkit-transform: translate(-60px,24px) rotate(52deg);}
        100% {-webkit-transform: translate(-60px,24px) rotate(52deg);} 
    }
    .leg22
    {
        -webkit-transform-origin: 80% 80%;
        -webkit-transform: rotate(-71deg);
        -webkit-animation: leg22 12s linear infinite;
    }
    @-webkit-keyframes leg22
    {
        0%   {-webkit-transform: rotate(17deg)}
        6%   {-webkit-transform: rotate(17deg)}
        11%  {-webkit-transform: rotate(17deg);}
        14.5% {-webkit-transform:rotate(-22deg);}
        18%   {-webkit-transform: rotate(-53deg);}
        21.5% {-webkit-transform: rotate(-71deg);}
        25%   {-webkit-transform: rotate(-59deg)}
        28.5% {-webkit-transform: rotate(-30deg)}
        32%   {-webkit-transform: rotate(6deg)}
        45%  {-webkit-transform: rotate(17deg)}
        70%  {-webkit-transform: rotate(17deg)}
        100% {-webkit-transform: rotate(17deg)} 
    }
    .leg5
    {
        -webkit-transform-origin: 0% 50%;
        -webkit-transform: translate(-3px,0px) rotate(21deg);
        -webkit-animation: leg5 12s linear infinite;
    }
    @-webkit-keyframes leg5
    {
        0%   {-webkit-transform: translate(-52px,-27px) rotate(-61deg);}
        /*6%   {-webkit-transform:translate(-56px,-10px) rotate(164deg);}*/
        11%  {-webkit-transform: translate(-3px,0px) rotate(0deg);}
        14.5% {-webkit-transform:translate(-3px,0px) rotate(0deg);}
        18%   {-webkit-transform: translate(-3px,0px) rotate(0deg);}
        21.5% {-webkit-transform: translate(-3px,0px) rotate(21deg);}
        25%   {-webkit-transform: translate(-3px,0px) rotate(19deg);}
        28.5% {-webkit-transform: translate(-3px,0px) rotate(27deg);}
        32%   {-webkit-transform: translate(-3px,0px) rotate(-7deg);}
        45%  {-webkit-transform: translate(-52px,-27px) rotate(-61deg);}
        70%  {-webkit-transform: translate(-52px,-27px) rotate(-61deg);}
        100% {-webkit-transform: translate(-52px,-27px) rotate(-61deg);} 
    }
    .leg5-1
    {
        position: absolute;
        -webkit-transform-origin: 50% 0%;
        -webkit-animation: leg5-1 12s linear infinite;
        -webkit-transform: translate(0px,0px) rotate(-13deg);
    }
    @-webkit-keyframes leg5-1
    {
        0%   {-webkit-transform:translate(0px,0px) rotate(0deg);}
        /*6%   {-webkit-transform:translate(-56px,-10px) rotate(164deg);}*/
        11%  {-webkit-transform:translate(0px,0px) rotate(0deg);}
        14.5% {-webkit-transform:translate(0px,0px) rotate(8deg);}
        18%   {-webkit-transform:translate(0px,0px) rotate(15deg);}
        21.5% {-webkit-transform:translate(0px,0px) rotate(-13deg);}
        25%   {-webkit-transform:translate(0px,0px) rotate(-13deg);}
        28.5% {-webkit-transform:translate(0px,0px) rotate(-21deg);}
        32%   {-webkit-transform:translate(0px,0px) rotate(-7deg);}
        45%  {-webkit-transform:translate(0px,0px) rotate(0deg);}
        70%  {-webkit-transform:translate(0px,0px) rotate(0deg);}
        100% {-webkit-transform:translate(0px,0px) rotate(0deg);} 
    }
    .leg53
    {
        -webkit-transform-origin: 25% 25%;
        -webkit-transform:translate(8px,-4px) rotate(68deg);
        -webkit-animation: leg53 12s linear infinite;
    }
    @-webkit-keyframes leg53
    {
        0%   {-webkit-transform:translate(8px,-4px) rotate(88deg);}
        /*6%   {-webkit-transform:translate(-56px,-10px) rotate(164deg);}*/
        11%  {-webkit-transform:translate(8px,-4px) rotate(88deg);}
        14.5% {-webkit-transform:translate(8px,-4px) rotate(88deg);}
        18%   {-webkit-transform:translate(8px,-4px) rotate(88deg);}
        21.5% {-webkit-transform:translate(8px,-4px) rotate(68deg);}
        25%   {-webkit-transform:translate(8px,-4px) rotate(68deg);}
        28.5% {-webkit-transform:translate(8px,-4px) rotate(68deg);}
        32%   {-webkit-transform:translate(8px,-4px) rotate(120deg);}
        45%  {-webkit-transform:translate(8px,-4px) rotate(88deg);}
        70%  {-webkit-transform:translate(8px,-4px) rotate(88deg);}
        100% {-webkit-transform:translate(8px,-4px) rotate(88deg);}        
    }
    .leg6
    {
        -webkit-transform-origin: 0% 0%;
        -webkit-transform:translate(10px,5px) rotate(-38deg);
        -webkit-animation: leg6 12s linear infinite;
    }
    .leg6-1
    {
        -webkit-transform-origin: 0% 0%;
        -webkit-transform:translate(0px,-7px) rotate(44deg);
        -webkit-animation: leg6-1 12s linear infinite;
    }
    @-webkit-keyframes leg6
    {
        0%   {-webkit-transform:translate(-46px,-20px) rotate(-75deg)}
        /*6%   {-webkit-transform:translate(-56px,-10px) rotate(164deg);}*/
        11%  {-webkit-transform:translate(-5px,0px) rotate(0deg);}
        14.5% {-webkit-transform:translate(0px,0px) rotate(0deg);}
        18%   {-webkit-transform:translate(0px,0px) rotate(0deg);}
        21.5% {-webkit-transform:translate(10px,5px) rotate(-38deg);}
        25%   {-webkit-transform:translate(10px,5px) rotate(-23deg);}
        28.5% {-webkit-transform:translate(10px,5px) rotate(-39deg);}
        32%   {-webkit-transform:translate(10px,5px) rotate(23deg);}
        45%  {-webkit-transform: translate(-46px,-20px) rotate(-75deg)}
        70%  {-webkit-transform: translate(-46px,-20px) rotate(-75deg)}
        100% {-webkit-transform: translate(-46px,-20px) rotate(-75deg)} 
    }
    @-webkit-keyframes leg6-1
    {
        0%   {-webkit-transform:translate(0px,0px) rotate(0deg);}
        /*6%   {-webkit-transform:rotate(164deg);}*/
        11%  {-webkit-transform:translate(0px,0px) rotate(0deg);}
        14.5% {-webkit-transform:translate(-5px,0px) rotate(15deg);}
        18%   {-webkit-transform:translate(-5px,0px) rotate(22deg);}
        21.5% {-webkit-transform:translate(0px,-7px) rotate(44deg);}
        25%   {-webkit-transform:translate(0px,-7px) rotate(44deg);}
        28.5% {-webkit-transform:translate(0px,-7px) rotate(51deg);}
        32%   {-webkit-transform:translate(0px,-7px) rotate(23deg);}
        45%  {-webkit-transform:translate(0px,0px) rotate(0deg);}
        70%  {-webkit-transform:translate(0px,0px) rotate(0deg);}
        100% {-webkit-transform:translate(0px,0px) rotate(0deg);} 
    }
    .leg63
    {
        position: absolute;
        -webkit-transform:translate(0px,0px) rotate(134deg);
        -webkit-animation: leg63 12s linear infinite;
    }
    @-webkit-keyframes leg63
    {
        0%   {-webkit-transform:translate(0px,0px) rotate(93deg);}
        /*6%   {-webkit-transform:rotate(164deg);}*/
        11%  {-webkit-transform:translate(0px,0px) rotate(93deg);}
        14.5% {-webkit-transform:translate(0px,0px) rotate(102deg);}
        18%   {-webkit-transform:translate(0px,0px) rotate(102deg);}
        21.5% {-webkit-transform:translate(0px,0px) rotate(134deg);}
        25%   {-webkit-transform:translate(0px,0px) rotate(99deg);}
        28.5% {-webkit-transform:translate(0px,0px) rotate(82deg);}
        32%   {-webkit-transform:translate(0px,0px) rotate(93deg);}
        45%  {-webkit-transform:translate(0px,0px) rotate(93deg);}
        70%  {-webkit-transform:translate(0px,0px) rotate(93deg);}
        100% {-webkit-transform:translate(0px,0px) rotate(93deg);} 
    }
    #page_h1,#page_v1,#page_h2,#page_v2
    {
        display: none;
    }
    @-webkit-keyframes aa_in_fade_right
    {
        0%{
            opacity:0;
            -webkit-transform:translateX(-50px)
        }
        100%{
            opacity:1;
            -webkit-transform:translateX(0)}
    }
    @-webkit-keyframes aa_out_fade_right
    {
        0%{
            opacity:1;
            -webkit-transform:translateX(0)
        }
        100%{
            opacity:0;
            -webkit-transform:translateX(50px)
        }
    }
</style>

<div id='container'>
    <img src='<?=$p?>images/bg.jpg' style='height:815px;position:absolute;left:0px;'>

    
    <div id='haiquan'>
        <img id='jiushengying' src='<?=$p?>images/jiushengying.png'>
        <img id='jiusheng' src='<?=$p?>images/jiusheng.png'>
    </div>


    <div id='jijuxieying' style='top:640px;left:54px;'>

        <div class='leg1' style='width:19px;height:30px;left:70px;top:-10px'>
            <img class='leg11' src='<?=$p?>images/1a.png'>
            <div class='leg1-1' style='position:absolute;width:53px;height:26px;left:-40px;top:-18px'>
                <img class='leg12' src='<?=$p?>images/4a.png'>

                <img class='leg13' src='<?=$p?>images/0a.png' style='position:absolute;left:-33px;top:1px;'>
            </div>
        </div>

        <div class='leg2' style='width:35px;height:44px;left:79px;top:-18px;'>
            <img class='leg21' src='<?=$p?>images/9a.png'>
            <img class='leg22' src='<?=$p?>images/2a.png' style='position:absolute;left:7px;top:-34px'>
        </div>

        <img class='leg3' style='left:86px;top:1px;' src='<?=$p?>images/3a.png'>

        <img class='leg4' style='left:91px;top:43px;' src='<?=$p?>images/10a.png'>

        <div class='leg5' style='width:53px;height:26px;left:76px;top:52px;'>
            <img class='leg51' style='position:absolute;-webkit-transform: scale(0.81,0.6) rotate(27.3deg)' src='<?=$p?>images/4a.png'>
            <div class='leg5-1' style='position:absolute;width:14px;height:52px;left:28px;top:13px;'>
                <img class='leg52' src='<?=$p?>images/7a.png'>
                <img class='leg53' src='<?=$p?>images/8a.png' style='position:absolute;left:-10px;top:44px;'>
            </div>
        </div>

        <div class='leg6' style='width:35px;height:44px;left:72px;top:49px;'>
            <img class='leg61' style='position:absolute;-webkit-transform: translate(-10px,-12px) rotate(3.8deg) scale(1,-1)' src='<?=$p?>images/9a.png'>
            <div class='leg6-1' style='position:absolute;width:14px;height:52px;left:10px;top:16px'>
                <img class='leg62' style='position:absolute;-webkit-transform: rotate(26.3deg)' src='<?=$p?>images/7a.png'>

                <img class='leg63' style='position:absolute;left:-12px;top:36px;-webkit-transform-origin: 25% 25%;' src='<?=$p?>images/8a.png'>
            </div>
        </div>

        <img class='tou' src='<?=$p?>images/5a.png'>
        <img class='ke' src='<?=$p?>images/11a.png'>
    </div>

    <div id='jijuxie'>

        <div class='leg1' style='width:19px;height:30px;left:70px;top:-10px'>
            <img class='leg11' src='<?=$p?>images/1.png'>
            <div class='leg1-1' style='position:absolute;width:53px;height:26px;left:-40px;top:-18px'>
                <img class='leg12' src='<?=$p?>images/4.png'>

                <img class='leg13' src='<?=$p?>images/0.png' style='position:absolute;left:-33px;top:1px;'>
            </div>
        </div>

        <div class='leg2' style='width:35px;height:44px;left:79px;top:-18px;'>
            <img class='leg21' src='<?=$p?>images/9.png'>
            <img class='leg22' src='<?=$p?>images/2.png' style='position:absolute;left:7px;top:-34px'>
        </div>

        <img class='leg3' style='left:86px;top:1px;' src='<?=$p?>images/3.png'>

        <img class='leg4' style='left:91px;top:43px;' src='<?=$p?>images/10.png'>

        <div class='leg5' style='width:53px;height:26px;left:76px;top:52px;'>
            <img class='leg51' style='position:absolute;-webkit-transform: scale(0.81,0.6) rotate(27.3deg)' src='<?=$p?>images/4.png'>
            <div class='leg5-1' style='position:absolute;width:14px;height:52px;left:28px;top:13px;'>
                <img class='leg52' src='<?=$p?>images/7.png'>
                <img class='leg53' src='<?=$p?>images/8.png' style='position:absolute;left:-10px;top:44px;'>
            </div>
        </div>

        <div class='leg6' style='width:35px;height:44px;left:72px;top:49px;'>
            <img class='leg61' style='position:absolute;-webkit-transform: translate(-10px,-12px) rotate(3.8deg) scale(1,-1)' src='<?=$p?>images/9.png'>
            <div class='leg6-1' style='position:absolute;width:14px;height:52px;left:10px;top:16px'>
                <img class='leg62' style='position:absolute;-webkit-transform: rotate(26.3deg)' src='<?=$p?>images/7.png'>

                <img class='leg63' style='position:absolute;left:-12px;top:36px;-webkit-transform-origin: 25% 25%;' src='<?=$p?>images/8.png'>
            </div>
        </div>

        <img class='tou' src='<?=$p?>images/5.png'>
        <img class='ke' src='<?=$p?>images/11.png'>
    </div>

    <div class='kuang' id='page_v1'>
        <div class='ying' id='ying_v1'>
            <img src='<?=$p?>images/ying.png'>
        </div>
        <div class='kuangimg' id='kuangimg_v1'>
            <img src='<?=$p?>images/kuang.png'>
            <div style='position:absolute;top:15px;left:15px;width:255px;height:347px;overflow:hidden;'>
                <img id='img_v1' style='position:absolute'>
            </div>
        </div>
    </div>

    <div class='kuang' id='page_h1'>
        <div class='ying' id='ying_h1'>
            <img src='<?=$p?>images/ying.png' style='-webkit-transform: rotate(90deg)'>
        </div>
        <div class='kuangimg' id='kuangimg_h1'>
            <img src='<?=$p?>images/kuang.png' style='-webkit-transform: rotate(90deg)'>
            <div style='position:absolute;top:61px;left:-31px;width:347px;height:255px;overflow:hidden;'>
                <img id='img_h1' style='position:absolute'>
            </div>
        </div>
    </div>

    <div class='kuang1' id='page_v2'>
        <div class='ying' id='ying_v2'>
            <img src='<?=$p?>images/ying.png'>
        </div>
        <div class='kuangimg' id='kuangimg_v2'>
            <img src='<?=$p?>images/kuang.png'>
            <div style='position:absolute;top:15px;left:15px;width:255px;height:347px;overflow:hidden;'>
                <img id='img_v2' style='position:absolute'>
            </div>
        </div>
    </div>

    <div class='kuang1' id='page_h2'>
        <div class='ying' id='ying_h2'>
            <img src='<?=$p?>images/ying.png' style='-webkit-transform: rotate(90deg)'>
        </div>
        <div class='kuangimg' id='kuangimg_h2'>
            <img src='<?=$p?>images/kuang.png' style='-webkit-transform: rotate(90deg)'>
            <div style='position:absolute;top:61px;left:-31px;width:347px;height:255px;overflow:hidden;'>
                <img id='img_h2' style='position:absolute'>
            </div>
        </div>
    </div>

    <div id='pagetitle' style='position:absolute;width:410px;height:200px;top:238px;left:45px;font-size:40px;color:#fff;overflow:hidden;font-weight:bold;text-shadow:5px 6px 4px rgba(0, 0, 0, 0.2);'>
        <div style='position:absolute;width:410px;height:200px;top:0px;left:0px;overflow:hidden;'>
            <div style='position:absolute;width:410px;height:200px;display:table;overflow:hidden;'>
                <div id='titlecontent' style='width:410px;height:200px;vertical-align:middle;display:table-cell;text-align:center;font-size:40px;line-height:70px;color:#975D49;'></div>
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

    id('page_v1').style.webkitAnimation = '';
    id('ying_v1').style.webkitAnimation = '';
    id('kuangimg_v1').style.webkitAnimation = '';
    id('page_v2').style.webkitAnimation = '';
    id('ying_v2').style.webkitAnimation = '';
    id('kuangimg_v2').style.webkitAnimation = '';
    id('page_h1').style.webkitAnimation = '';
    id('ying_h1').style.webkitAnimation = '';
    id('kuangimg_h1').style.webkitAnimation = '';
    id('page_h2').style.webkitAnimation = '';
    id('ying_h2').style.webkitAnimation = '';
    id('kuangimg_h2').style.webkitAnimation = '';
    id('page_v1').style.display = 'none';
    id('page_v2').style.display = 'none';
    id('page_h1').style.display = 'none';
    id('page_h2').style.display = 'none';
    clearTimeout(timeout0);
    clearTimeout(timeout1);
    clearTimeout(timeout2);
    clearTimeout(timeout3);
    clearTimeout(timeout4);
    canshow = true;

    for(var i=0;i<slider_images_url.length;i++)
    {
        var img=new Image();
        img.index=i;
        console.log(i);
        img.src=slider_images_url[i];
        Onload_imgs_url[i] = 'loading';
        img.onload = image_onload;
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
    id('pagetitle').style.webkitAnimation = 'aa_in_fade_right 1s ease-out both';
    id('titlecontent').innerHTML = e_desc;
}
function distitle()
{
    id('pagetitle').style.webkitAnimation = 'aa_out_fade_right 1s ease-in both';
    begin_show();
}
function begin_show()
{
    if(reshow == true)
        return;

    if(image_url_index == Onload_imgs_url.length)
        image_url_index = 0;
    cut_image(1);
    image_url_index++;


    timeout1 = setTimeout(next_show,6000);
}
function next_show()
{
    if(reshow == true)
        return;

    if(image_url_index == Onload_imgs_url.length)
        image_url_index = 0;
    cut_image(2);
    image_url_index++;


    timeout2 = setTimeout(begin_show,6000);
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
    
    id('page_h'+pageindex).style.display = 'none';
    id('page_v'+pageindex).style.display = 'none';
    id('page_h'+pageindex).style.webkitAnimation = '';
    id('ying_h'+pageindex).style.webkitAnimation = '';
    id('kuangimg_h'+pageindex).style.webkitAnimation = '';
    id('page_v'+pageindex).style.webkitAnimation = '';
    id('ying_v'+pageindex).style.webkitAnimation = '';
    id('kuangimg_v'+pageindex).style.webkitAnimation = '';

    if(img_bili>1)//ºá°æh
    {


        var img_obj = id('img_h'+pageindex);
        img_obj.src = Onload_imgs_url[image_url_index];

        if(img_bili>(347/255))
        {
            img_obj.style.height = '255px';
            img_obj.style.width = img_bili*255 + 'px';
            img_obj.style.top = '0px';
            img_obj.style.left = -((img_bili*255-347)/2) + 'px';
        }
        else
        {
            img_obj.style.width = '347px';
            img_obj.style.height = 347/img_bili + 'px';
            img_obj.style.left = '0px';
            img_obj.style.top = -((347/img_bili-255)/2) + 'px';
        }
        timeout3 = setTimeout(function()
        {
            console.log(image_url_index,pageindex,'h');
            
            if(pageindex == 1)
                id('page_h'+pageindex).style.webkitAnimation = 'kuangmove 10s linear both';
            else
                id('page_h'+pageindex).style.webkitAnimation = 'kuangmove1 10s linear both';
            id('page_h'+pageindex).style.display = 'block';
            id('ying_h'+pageindex).style.webkitAnimation = 'yingmove 10s linear both';
            id('kuangimg_h'+pageindex).style.webkitAnimation = 'kuang 10s linear both';
            id('page_v'+pageindex).style.display = 'none';
            id('page_h'+pageindex).style.display = 'block';
        },100);
    }
    else //Êú°æv
    {

        var img_obj = id('img_v'+pageindex);
        img_obj.src = Onload_imgs_url[image_url_index];

        if(img_bili>(255/347))
        {
            img_obj.style.height = '347px';
            img_obj.style.width = img_bili*347 + 'px';
            img_obj.style.top = '0px';
            img_obj.style.left = -(img_bili*347-255)/2 + 'px';
        }
        else
        {
            img_obj.style.width = '255px';
            img_obj.style.height = 255/img_bili + 'px';
            img_obj.style.left = '0px';
            img_obj.style.top = -(255/img_bili-347)/2 + 'px';
        }   
        timeout4 = setTimeout(function()
        {
            console.log(image_url_index,pageindex,'v');
            
            if(pageindex == 1)
                id('page_v'+pageindex).style.webkitAnimation = 'kuangmove 8s linear both';
            else
                id('page_v'+pageindex).style.webkitAnimation = 'kuangmove1 8s linear both';
            id('page_v'+pageindex).style.display = 'block';
            id('ying_v'+pageindex).style.webkitAnimation = 'yingmove 8s linear both';
            id('kuangimg_v'+pageindex).style.webkitAnimation = 'kuang 8s linear both';
            id('page_v'+pageindex).style.display = 'block';
            id('page_h'+pageindex).style.display = 'none';

        },100);
    }
    console.log(img_obj.src);
}
call_me(load_images);

function reload_scene()
{
    reshow = true;
    id('titlecontent').innerHTML = '';
    id('pagetitle').style.webkitAnimation = '';
    setTimeout(load_images,100)
    
}

</script>
