<?
$p=$_WEITE['web_pic_url']."yuandan/";
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
        background: url(<?=$p?>images/bg.jpg);
    }
    #cleararea >div, #cleararea >img
    {
        position: absolute;
    }
    #yezi1
    {
        left: -34px;
        top: -11px;
    }
    #a2016_1
    {
        left: 72px;
        top: 116px;
    }
    #xinnianhao
    {
        left: 288px;
        top: 84px;
    }
/*    #zi1
    {
        left: 62px;
        top: 663px;
    }
    #yingwen1
    {
        left: 137px;
        top: 719px;
    }*/

    #yedi
    {
        left: 392px;
        top: 733px;
    }
    #div1h
    {
        left: 24px;
        top: 286px;
        width: 449px;
        height: 303px;
        background-color: #C81D1D;
        display: none;
    }
    #box1h
    {
        left: 10px;
        top: 10px;
        width: 428px;
        height: 280px;
        position: absolute;
        overflow: hidden;
    }
    #div1s
    {
        left: 95px;
        top: 186px;
        width: 309px;
        height: 472px;
        background-color: #C81D1D;
    }
    #box1s
    {
        left: 10px;
        top: 10px;
        width: 288px;
        height: 451px;
        position: absolute;
        overflow: hidden;
    }
    #line1
    {
        left: 432px;
        top: 165px;
        width: 1px;
        height: 490px;
        background-color: #000;

    }
    .letter1
    {
        left: 63px;
        top: 676px;
    }
    .letter2
    {
        left: 93px;
        top: 676px;
    }
    .letter3
    {
        left: 123px;
        top: 676px;
    }
    .letter4
    {
        left: 151px;
        top: 676px;
    }
    .letter5
    {
        left: 182px;
        top: 676px;
    }
    .letter6
    {
        left: 210px;
        top: 676px;
    }
    .letter7
    {
        left: 243px;
        top: 694px;
    }
    .letter8
    {
        left: 263px;
        top: 676px;
    }
    .letter9
    {
        left: 292px;
        top: 675px;   
    }
    .letter10
    {
        left: 320px;
        top: 676px;
    }
    .letter11
    {
        left: 349px;
        top: 676px;
    }
    .letter12
    {
        left: 380px;
        top: 676px;
    }
    .letter13
    {
        left: 407px;
        top: 676px;
    }
    #yi_2
    {
        left: 63px;
        top: 684px;
    }
    #er_2
    {
        left: 349px;
        top: 680px;
    }
    #san_2
    {
        left: 409px;
        top: 678px;
    }

    #yezi2
    {
        left: -70px;
        top: -18px;
    }
    #a2016_2
    {
        left: 307px;
        top: 99px;
    }
    #xinnianhao2
    {
        left: 86px;
        top: 128px;
    }
    #line2
    {
        width: 1px;
        height: 382px;
        left: 420px;
        top: 243px;
        background-color: #000;
    }
    #zi2
    {
        left: 36px;
        top: 663px;
    }
    #yingwen2
    {
        left: 125px;
        top: 717px;
    }
    #div2h
    {
        left: 24px;
        top: 274px;
        width: 448px;
        height: 300px;
        background-color: #C81D1D;
    }
    #box2h
    {
        left: 10px;
        top: 10px;
        width: 425px;
        height: 280px;
        position: absolute;
        overflow: hidden;
    }
    #div2s
    {
        left: 110px;
        top: 242px;
        width: 290px;
        height: 416px;
        background-color: #C81D1D;
    }
    #box2s
    {
        left: 8px;
        top: 8px;
        width: 272px;
        height: 400px;
        position: absolute;
        overflow: hidden;
    }
    @-webkit-keyframes div2in
    {
        from  {-webkit-transform: translate(465px,-162px);opacity: 0}
        to    {-webkit-transform: translate(0px,0px);opacity: 1}
    }
    @-webkit-keyframes div2out
    {
        to    {-webkit-transform: translate(465px,-162px);opacity: 0}
        from  {-webkit-transform: translate(0px,0px);opacity: 1}
    }
    @-webkit-keyframes xiangji
    {
        from  {-webkit-transform: translate(-200px,0px);opacity: 0;}
        to    {-webkit-transform: translate(0px,0px);opacity: 1}
    }
    @-webkit-keyframes xiangji_out
    {
        to    {-webkit-transform: translate(-200px,0px);opacity: 0;}
        from  {-webkit-transform: translate(0px,0px);opacity: 1}
    }
    @-webkit-keyframes line2
    {
        from  {-webkit-transform: translate(0px,-400px);opacity: 0}
        to    {-webkit-transform: translate(0px,0px);opacity: 1} 
    }
    @-webkit-keyframes line2_out
    {
        to    {-webkit-transform: translate(0px,-400px);opacity: 0}
        from  {-webkit-transform: translate(0px,0px);opacity: 1} 
    }

    #div31h
    {
        left: 35px;
        top: 208px;
        width: 347px;
        height: 245px;
        background-color: #C81D1D;
    }
    #box31h
    {
        left: 5px;
        top: 5px;
        width: 337px;
        height: 235px;
        position: absolute;
        overflow: hidden;
    }
    #div32h
    {
        left: 188px;
        top: 423px;
        width: 278px;
        height: 208px;
        background-color: #C81D1D;
    }
    #box32h
    {
        left: 5px;
        top: 5px;
        width: 268px;
        height: 198px;
        position: absolute;
        overflow: hidden;
    }
    #div31s
    {
        left: 41px;
        top: 156px;
        width: 237px;
        height: 352px;
        background-color: #C81D1D;
    }
    #box31s
    {
        left: 5px;
        top: 5px;
        width: 227px;
        height: 342px;
        position: absolute;
        overflow: hidden;
    }
    #div32s
    {
        left: 258px;
        top: 333px;
        width: 200px;
        height: 306px;
        background-color: #C81D1D;
    }
    #box32s
    {
        left: 5px;
        top: 5px;
        width: 190px;
        height: 296px;
        position: absolute;
        overflow: hidden;
    }
    #a2016_3
    {
        left: 36px;
        top: 538px;
    }
    #xinnianhao_3
    {
        left: 273px;
        top: 89px;
    }
    #si_3
    {
        left: 123px;
        top: 679px;
    }
    #lai_3
    {
        left: 180px;
        top: 676px;
    }
    #wu_3
    {
        left: 320px;
        top: 676px;
    }
    #bin_3
    {
        left: 378px;
        top: 675px;
    }
    @-webkit-keyframes div31in
    {
        from  {-webkit-transform: translate(-300px,0px);opacity: 0}
        to    {-webkit-transform: translate(0px,0px);opacity: 1}
    }
    @-webkit-keyframes div31out
    {
        to    {-webkit-transform: translate(-300px,0px);opacity: 0}
        from  {-webkit-transform: translate(0px,0px);opacity: 1}
    }
    @-webkit-keyframes div32in
    {
        from  {-webkit-transform: translate(300px,0px);opacity: 0}
        to    {-webkit-transform: translate(0px,0px);opacity: 1}
    }
    @-webkit-keyframes div32out
    {
        to    {-webkit-transform: translate(300px,0px);opacity: 0}
        from  {-webkit-transform: translate(0px,0px);opacity: 1}
    }
    @-webkit-keyframes line3
    {
        from  {-webkit-transform: translate(0px,400px);opacity: 0}
        to    {-webkit-transform: translate(0px,0px);opacity: 1}
    }
    @-webkit-keyframes line3_out
    {
        to    {-webkit-transform: translate(0px,400px);opacity: 0}
        from  {-webkit-transform: translate(0px,0px);opacity: 1}
    }
    #xinnianhao_4
    {
        left: 61px;
        top: 182px;
        width: 79px;
    }
    #a2016_4
    {
        left: 336px;
        top: 483px;
        width: 150px;
    }
    #div41h
    {
        left: 179px;
        top: 97px;
        width: 279px;
        height: 266px;
        background-color:  #C81D1D;
        -webkit-transform-origin: 0% 100%;
    }
    #box41h
    {
        left: 5px;
        top: 5px;
        width: 269px;
        height: 256px;
        position: absolute;
        overflow: hidden;
    }
    #div42h
    {
        left: 38px;
        top: 373px;
        width: 279px;
        height: 267px;
        background-color:  #C81D1D;
        -webkit-transform-origin: 100% 100%;
    }
    #box42h
    {
        left: 5px;
        top: 5px;
        width: 269px;
        height: 256px;
        position: absolute;
        overflow: hidden;
    }
    #div41s
    {
        left: 224px;
        top: 39px;
        width: 235px;
        height: 349px;
        background-color:  #C81D1D;
        -webkit-transform-origin: 0% 100%;
    }
    #box41s
    {
        left: 5px;
        top: 5px;
        width: 225px;
        height: 339px;
        position: absolute;
        overflow: hidden;
    }
    #div42s
    {
        left: 51px;
        top: 330px;
        width: 220px;
        height: 330px;
        background-color:  #C81D1D;
        -webkit-transform-origin: 100% 100%;
    }
    #box42s
    {
        left: 5px;
        top: 5px;
        width: 210px;
        height: 320px;
        position: absolute;
        overflow: hidden;
    }
    #line41
    {
        left: 422px;
        top: 77px;
        width: 2px;
        height: 308px;
        background-color: #000;
    }
    #line42
    {
        left: 71px;
        top: 359px;
        width: 1px;
        height: 298px;
        background-color: #000;
    }
    #zi_4
    {
        left: 288px;
        top: 675px;
    }
    @-webkit-keyframes div4in
    {
        from  {-webkit-transform: scale(.2);opacity: 0}
        to    {-webkit-transform: scale(1);opacity: 1}
    }
    @-webkit-keyframes div4out
    {
        from  {-webkit-transform: scale(1);opacity: 1}
        to    {-webkit-transform: scale(.2);opacity: 0}
    }
    @-webkit-keyframes line41in
    {
        from   {-webkit-transform: translate(0px,-400px);opacity: 0}
        to     {-webkit-transform: translate(0px,0px);opacity: 1}
    }
    @-webkit-keyframes line41out
    {
        to    {-webkit-transform: translate(0px,-400px);opacity: 0}
        from  {-webkit-transform: translate(0px,0px);opacity: 1}
    }
    @-webkit-keyframes line42in
    {
        from   {-webkit-transform: translate(0px,400px);opacity: 0}
        to     {-webkit-transform: translate(0px,0px);opacity: 1}
    }
    @-webkit-keyframes line42out
    {
        to     {-webkit-transform: translate(0px,400px);opacity: 0}
        from   {-webkit-transform: translate(0px,0px);opacity: 1}
    }
    @-webkit-keyframes yumaoqiu
    {
        from  {-webkit-transform: translate(300px,0px);opacity: 0}
        to    {-webkit-transform: translate(0px,0px);opacity: 1}
    }
    @-webkit-keyframes yumaoqiu_out
    {
        to    {-webkit-transform: translate(300px,0px);opacity: 0}
        from  {-webkit-transform: translate(0px,0px);opacity: 1}
    }

    #div51h
    {
        left: 27px;
        top: 216px;
        width: 223px;
        height: 183px;
        background-color: #C81D1D;
    }
    #box51h
    {
        left: 5px;
        top: 5px;
        width: 213px;
        height: 173px;
        position: absolute;
        overflow: hidden;
    }
    #div52h
    {
        left: 260px;
        top: 217px;
        width: 223px;
        height: 183px;
        background-color: #C81D1D;
    }
    #box52h
    {
        left: 5px;
        top: 5px;
        width: 213px;
        height: 173px;
        position: absolute;
        overflow: hidden;
    }
    #div53h
    {
        left: 27px;
        top: 408px;
        width: 320px;
        height: 230px;
        background-color: #C81D1D;
    }
    #box53h
    {
        left: 5px;
        top: 5px;
        width: 310px;
        height: 220px;
        position: absolute;
        overflow: hidden;
    }
    #div51s
    {
        left: 45px;
        top: 104px;
        width: 180px;
        height: 270px;
        background-color: #C81D1D;
    }
    #box51s
    {
        left: 5px;
        top: 5px;
        width: 170px;
        height: 260px;
        position: absolute;
        overflow: hidden;
    }
    #div52s
    {
        left: 282px;
        top: 159px;
        width: 146px;
        height: 222px;
        background-color: #C81D1D;
    }
    #box52s
    {
        left: 5px;
        top: 5px;
        width: 136px;
        height: 212px;
        position: absolute;
        overflow: hidden;
    }
    #div53s
    {
        left: 113px;
        top: 356px;
        width: 210px;
        height: 316px;
        background-color: #C81D1D;
    }
    #box53s
    {
        left: 5px;
        top: 5px;
        width: 200px;
        height: 306px;
        position: absolute;
        overflow: hidden;
    }
    #a2016_6
    {
        left: 106px;
        top: 81px;
    }   
    #xinnianhao_6
    {
        left: 287px;
        top: 70px;
    }
    #a2016_5
    {
        left: 286px;
        top: 95px;
    }   
    #xinnianhao_5
    {
        left: 360px;
        top: 419px;
    }
    #zi5
    {
        left: 37px;
        top: 680px;
        width: 426px;
        height: 55px;
    }
    #yingwen5
    {
        top: 733px;
        left: 103px;
    }
    #qing5
    {
        left: 50px;
        top: 683px;
    }
    #chun5
    {
        left: 83px;
        top: 683px;
    }
    #shi5
    {
        left: 116px;
        top: 684px;
    }
    #da5
    {
        left: 149px;
        top: 683px;
    }
    #kai5
    {
        left: 182px;
        top: 684px;
    }
    #le5
    {
        left: 215px;
        top: 684px;
    }
    #jiu5
    {
        left: 248px;
        top: 683px;
    }
    #he5
    {
        left: 281px;
        top: 683px;
    }
    #bu5
    {
        left: 314px;
        top: 685px;
    }
    #shang5
    {
        left: 347px;
        top: 683px;
    }
    #de5
    {
        left: 380px;
        top: 683px;
    }
    #shu5
    {
        left: 413px;
        top: 683px;
    }
    @-webkit-keyframes line5
    {
        from  {-webkit-transform: translate(0px,-300px);opacity: 0}
        to    {-webkit-transform: translate(0px,0px);opacity: }
    }
    @-webkit-keyframes line5_out
    {
        to    {-webkit-transform: translate(0px,-300px);opacity: 0}
        from  {-webkit-transform: translate(0px,0px);opacity: }
    }
    @-webkit-keyframes bao
    {
        from  {-webkit-transform: translate(200px,0px);opacity: 0}
        to    {-webkit-transform: translate(0px,0px);opacity: 1}
    }
    @-webkit-keyframes bao_out
    {
        to    {-webkit-transform: translate(200px,00px);opacity: 0}
        from  {-webkit-transform: translate(0px,0px);opacity: 1}
    }

    #div61h
    {
        left: 25px;
        top: 202px;
        width: 230px;
        height: 150px;
        background-color: #C81D1D;
        -webkit-transform-origin: 100% 100%;
    }
    #box61h
    {
        position: absolute;
        width: 220px;
        height: 140px;
        left: 5px;
        top: 5px;
        overflow: hidden;
    }
    #div62h
    {
        left: 258px;
        top: 164px;
        width: 220px;
        height: 160px;
        background-color: #C81D1D;
        -webkit-transform-origin: 0% 100%;
    }
    #box62h
    {
        position: absolute;
        left: 5px;
        top: 5px;
        width: 210px;
        height: 150px;
        overflow: hidden;
    }
    #div63h
    {
        left: 65px;
        top: 363px;
        width: 370px;
        height: 254px;
        background-color: #C81D1D;
        -webkit-transform-origin: 0% 100%;
    }
    #box63h
    {
        position: absolute;
        top: 5px;
        left: 5px;
        width: 360px;
        height: 244px;
        overflow: hidden;
    }
    #div61s
    {
        left: 45px;
        top: 161px;
        width: 150px;
        height: 224px;
        background-color: #C81D1D;
        -webkit-transform-origin: 100% 100%;
    }
    #box61s
    {
        position: absolute;
        width: 140px;
        height: 214px;
        left: 5px;
        top: 5px;
        overflow: hidden;
    }
    #div62s
    {
        left: 313px;
        top: 147px;
        width: 159px;
        height: 251px;
        background-color: #C81D1D;
    }
    #box62s
    {
        position: absolute;
        left: 5px;
        top: 5px;
        width: 149px;
        height: 241px;
        overflow: hidden;
    }
    #div63s
    {
        left: 136px;
        top: 312px;
        width: 231px;
        height: 343px;
        background-color: #C81D1D;
        -webkit-transform-origin: 0% 100%;
    }
    #box63s
    {
        position: absolute;
        top: 5px;
        left: 5px;
        width: 221px;
        height: 333px;
        overflow: hidden;
    }
    #zi6
    {
        left: 37px;
        top: 650px;
    }
    #yingwen6
    {
        left: 139px;
        top: 703px;
    }
    #qing6
    {
        left: 50px;
        top: 654px;
    }
    #chun6
    {
        left: 83px;
        top: 654px;
    }
    #shi6
    {
        left: 118px;
        top: 654px;
    }
    #yi6
    {
        left: 152px;
        top: 670px;
    }
    #chang6
    {
        left: 182px;
        top: 654px;
    }
    #xiang6
    {
        left: 215px;
        top: 654px;
    }
    #feng6
    {
        left: 248px;
        top: 654px;
    }
    #dou6
    {
        left: 281px;
        top: 680px;
    }
    #wang6
    {
        left: 314px;
        top: 654px;
    }
    #bu6
    {
        left: 347px;
        top: 654px;
    }
    #diao6
    {
        left: 380px;
        top: 654px;
    }
    #le6
    {
        left: 413px;
        top: 654px;
    }
    @-webkit-keyframes line6
    {
        from  {-webkit-transform: translate(0px,-300px);opacity: 0}
        to    {-webkit-transform: translate(0px,0px);opacity: 1}
    }
    @-webkit-keyframes line6_out
    {
        to    {-webkit-transform: translate(0px,-300px);opacity: 0}
        from  {-webkit-transform: translate(0px,0px);opacity: 1}
    }
</style>
<style type="text/css">
    @-webkit-keyframes fadein
    {
        from  {opacity: 0}
        to    {opacity: 1}
    }
    @-webkit-keyframes fadeout
    {
        to    {opacity: 0}
        from  {opacity: 1}
    }
    @-webkit-keyframes in_center
    {
        0% {opacity: 0;-webkit-transform: scale3d(.3, .3, .3);transform: scale3d(.3, .3, .3);}
        50% {opacity: 1;}
        100% {-webkit-transform: scale3d(1,1,1);opacity: 1}
    }
    @-webkit-keyframes out_center
    {
        100% {opacity: 0;-webkit-transform: scale3d(.3, .3, .3);transform: scale3d(.3, .3, .3);}
        50% {opacity: 1;}
        0% {opacity: 1;-webkit-transform: scale3d(1,1,1);}
    }
    @-webkit-keyframes line1s
    {
        from  {opacity: 1}
    }
    @-webkit-keyframes zixingche
    {
        from  {-webkit-transform: translate(185px,0px);opacity: 0}
        to    {-webkit-transform: translate(0px,0px);opacity: 1}
    }
    @-webkit-keyframes line1
    {
        from  {-webkit-transform: translate(0px,-300px);opacity: 0}
        to    {-webkit-transform: translate(0px,0px);opacity: 1}
    }
    @-webkit-keyframes zixingche_out
    {
        to    {-webkit-transform: translate(185px,0px);opacity: 0}
        from  {-webkit-transform: translate(0px,0px);opacity: 1}
    }
    @-webkit-keyframes line1_out
    {
        to    {-webkit-transform: translate(0px,-300px);opacity: 0}
        from  {-webkit-transform: translate(0px,0px);opacity: 1}
    }
    @-webkit-keyframes showzimu
    {
        from  {-webkit-transform: translate(10px,-5px);opacity: 0}
        to    {-webkit-transform: translate(0px,0px);opacity: 1}
    }
    @-webkit-keyframes diszimu
    {
        to    {-webkit-transform: translate(10px,-5px);opacity: 0}
        from  {-webkit-transform: translate(0px,0px);opacity: 1}       
    }
@-webkit-keyframes linechange
{
    to  {-webkit-transform: scale(1,1);}
}
@-webkit-keyframes shuye 
{
    from  {-webkit-transform: translate(0px,0px) rotate(0deg);}
    to    {-webkit-transform: translate(-600px,750px) rotate(720deg);}

}
@-webkit-keyframes denglong
{
    from  {-webkit-transform: rotate(-5deg);}
    to    {-webkit-transform: rotate(5deg);}
}
</style>
<div id='container'>
    <!-- <img src='http://7xjeju.com2.z0.glb.qiniucdn.com/pic/qingchun/demo1.jpg'> -->
    <div id='cleararea' style='position:absolute'>
    <img id='a2016_1' style='display:none' src='<?=$p?>images/2016.png'>
    <img id='xinnianhao' style='display:none' src='<?=$p?>images/xinnian1.png'>
    <img id='xin_1' class='letter1' style='display:none' src='<?=$p?>images/xin.png'>
    <img id='nian_1' class='letter2' style='display:none;' src='<?=$p?>images/nian.png'>
    <img id='xi_1' class='letter3' style='display:none' src='<?=$p?>images/xi.png'>
    <img id='qi_1' class='letter4' style='display:none' src='<?=$p?>images/qi4.png'>
    <img id='yang_1' class='letter5' style='display:none' src='<?=$p?>images/yang3.png'>
    <img id='yang1_1' class='letter6' style='display:none' src='<?=$p?>images/yang3.png'>
    <img id='dou_1' class='letter7' style='display:none' src='<?=$p?>images/douhao.png'>
    <img id='man_1' class='letter8' style='display:none' src='<?=$p?>images/man.png'>
    <img id='mian_1' class='letter9' style='display:none' src='<?=$p?>images/mian.png'>
    <img id='can_1' class='letter10' style='display:none' src='<?=$p?>images/can.png'>
    <img id='lan_1' class='letter11' style='display:none' src='<?=$p?>images/lan.png'>
    <img id='yang2_1' class='letter12' style='display:none' src='<?=$p?>images/yang2.png'>
    <img id='guang_1' class='letter13' style='display:none' src='<?=$p?>images/guang.png'>
    <img id='yedi' style='display:none' src='<?=$p?>images/yezi3.png'>
    <div id='div1h' style='display:none'><div id='box1h'><img id='img1h' style='position:absolute'></div></div>
    <div id='div1s' style='display:none'><div id='box1s'><img id='img1s' style='position:absolute'></div></div>

    <img id='a2016_2' style='display:none' src='<?=$p?>images/2016.png'>
    <img id='xinnianhao2' style='display:none' src='<?=$p?>images/xinnian1.png'>
    <img id='yi_2' style='display:none' src='<?=$p?>images/yi.png'>
    <img id='sheng_2' class='letter2' style='display:none' src='<?=$p?>images/sheng.png'>
    <img id='jian_2' class='letter3' style='display:none' src='<?=$p?>images/jian.png'>
    <img id='kang_2' class='letter4' style='display:none' src='<?=$p?>images/kang.png'>
    <img id='ping_2' class='letter5' style='display:none' src='<?=$p?>images/ping.png'>
    <img id='an_2' class='letter6' style='display:none' src='<?=$p?>images/an.png'>
    <img id='dou_2' class='letter7' style='display:none' src='<?=$p?>images/douhao.png'>
    <img id='hao_2' class='letter8' style='display:none' src='<?=$p?>images/hao.png'>
    <img id='shi_2' class='letter9' style='display:none' src='<?=$p?>images/shi.png'>
    <img id='jie_2' class='letter10' style='display:none' src='<?=$p?>images/jie1.png'>
    <img id='er_2' style='display:none' src='<?=$p?>images/er.png'>
    <img id='lian_2' class='letter12' style='display:none' src='<?=$p?>images/lian.png'>
    <img id='san_2' style='display:none' src='<?=$p?>images/san.png'>
    <div id='div2h' style='display:none'><div id='box2h'><img id='img2h' style='position:absolute'></div></div> 
    <div id='div2s' style='display:none'><div id='box2s'><img id='img2s' style='position:absolute'></div></div> 

    <img id='xinnianhao_3' style='display:none' src='<?=$p?>images/xinnian1.png'>
    <img id='a2016_3' style='display:none' src='<?=$p?>images/2016.png'>
    <div id='div31h' style='display:none'><div id='box31h'><img id='img31h' style='position:absolute'></div></div>
    <div id='div32h' style='display:none'><div id='box32h'><img id='img32h' style='position:absolute'></div></div>
    <div id='div31s' style='display:none'><div id='box31s'><img id='img31s' style='position:absolute'></div></div>
    <div id='div32s' style='display:none'><div id='box32s'><img id='img32s' style='position:absolute'></div></div>
    <img id='tai_3' class='letter1' style='display:none' src='<?=$p?>images/tai.png'>
    <img id='tou_3' class='letter2' style='display:none' src='<?=$p?>images/tou.png'>
    <img id='si_3' style='display:none' src='<?=$p?>images/si.png'>
    <img id='ji_3' class='letter4' style='display:none' src='<?=$p?>images/ji.png'>
    <img id='lai_3' style='display:none' src='<?=$p?>images/lai.png'>
    <img id='cai_3' class='letter6' style='display:none' src='<?=$p?>images/cai.png'>
    <img id='dou_3' class='letter7' style='display:none' src='<?=$p?>images/douhao.png'>
    <img id='sheng_3' class='letter8' style='display:none' src='<?=$p?>images/sheng.png'>
    <img id='huo_3' class='letter9' style='display:none' src='<?=$p?>images/huo.png'>
    <img id='wu_3' style='display:none' src='<?=$p?>images/wu.png'>
    <img id='cai1_3' class='letter11' style='display:none' src='<?=$p?>images/cai3.png'>
    <img id='bin_3' style='display:none' src='<?=$p?>images/bin.png'>
    <img id='fen_3' class='letter13' style='display:none' src='<?=$p?>images/fen.png'>

    <img id='xinnianhao_4' style='display:none' src='<?=$p?>images/xinnian2.png'>
    <img id='a2016_4' style='display:none' src='<?=$p?>images/2016.png'>
    <div id='div41h' style='display:none'><div id='box41h'><img id='img41h' style='position:absolute'></div></div>
    <div id='div42h' style='display:none'><div id='box42h'><img id='img42h' style='position:absolute'></div></div>
    <div id='div41s' style='display:none'><div id='box41s'><img id='img41s' style='position:absolute'></div></div>
    <div id='div42s' style='display:none'><div id='box42s'><img id='img42s' style='position:absolute'></div></div>
    <img id='shi_4' class='letter1' style='display:none' src='<?=$p?>images/shi.png'>
    <img id='ye_4' class='letter2' style='display:none' src='<?=$p?>images/ye.png'>
    <img id='liu_4' class='letter3' style='display:none' src='<?=$p?>images/liu.png'>
    <img id='liu1_4' class='letter4' style='display:none' src='<?=$p?>images/liu.png'>
    <img id='da_4' class='letter5' style='display:none' src='<?=$p?>images/da.png'>
    <img id='shun_4' class='letter6' style='display:none' src='<?=$p?>images/shun.png'>
    <img id='dou_4' class='letter7' style='display:none' src='<?=$p?>images/douhao.png'>
    <img id='ri_4' class='letter8' style='display:none' src='<?=$p?>images/ri.png'>
    <img id='zi_4' style='display:none' src='<?=$p?>images/zi.png'>
    <img id='qi_4' class='letter10' style='display:none' src='<?=$p?>images/qi.png'>
    <img id='xing_4' class='letter11' style='display:none' src='<?=$p?>images/xing.png'>
    <img id='gao_4' class='letter12' style='display:none' src='<?=$p?>images/gao.png'>
    <img id='zhao_4' class='letter13' style='display:none' src='<?=$p?>images/zhao.png'>

    <img id='xinnianhao_5' style='display:none' src='<?=$p?>images/xinnian2.png'>
    <img id='a2016_5' style='display:none' src='<?=$p?>images/2016.png'>
    <div id='div51h' style='display:none'><div id='box51h'><img id='img51h' style='position:absolute'></div></div>
    <div id='div52h' style='display:none'><div id='box52h'><img id='img52h' style='position:absolute'></div></div>
    <div id='div53h' style='display:none'><div id='box53h'><img id='img53h' style='position:absolute'></div></div>
    <div id='div51s' style='display:none'><div id='box51s'><img id='img51s' style='position:absolute'></div></div>
    <div id='div52s' style='display:none'><div id='box52s'><img id='img52s' style='position:absolute'></div></div>
    <div id='div53s' style='display:none'><div id='box53s'><img id='img53s' style='position:absolute'></div></div>
    <img id='ba_5' style='display:none' class='letter1' src='<?=$p?>images/ba.png'>
    <img id='fang_5' style='display:none' class='letter2' src='<?=$p?>images/fang.png'>
    <img id='hao_5' style='display:none' class='letter3' src='<?=$p?>images/hao.png'>
    <img id='yun_5' style='display:none' class='letter4' src='<?=$p?>images/yun.png'>
    <img id='jie_5' style='display:none' class='letter5' src='<?=$p?>images/jie.png'>
    <img id='lai_5' style='display:none' class='letter6' src='<?=$p?>images/lai.png'>
    <img id='dou_5' style='display:none' class='letter7' src='<?=$p?>images/douhao.png'>
    <img id='fan_5' style='display:none' class='letter8' src='<?=$p?>images/fan.png'>
    <img id='nao_5' style='display:none' class='letter9' src='<?=$p?>images/nao.png'>
    <img id='jiu_5' style='display:none' class='letter10' src='<?=$p?>images/jiu.png'>
    <img id='xiao_5' style='display:none' class='letter11' src='<?=$p?>images/xiao.png'>
    <img id='yun1_5' style='display:none' class='letter12' src='<?=$p?>images/yun.png'>
    <img id='wai_5' style='display:none' class='letter13' src='<?=$p?>images/wai.png'>


    <img id='xinnianhao_6' style='display:none' src='<?=$p?>images/xinnian1.png'>
    <img id='a2016_6' style='display:none' src='<?=$p?>images/2016.png'>
    <div id='div61h' style='display:none'><div id='box61h'><img id='img61h' style='position:absolute'></div></div>
    <div id='div62h' style='display:none'><div id='box62h'><img id='img62h' style='position:absolute'></div></div>
    <div id='div63h' style='display:none'><div id='box63h'><img id='img63h' style='position:absolute'></div></div>
    <div id='div61s' style='display:none'><div id='box61s'><img id='img61s' style='position:absolute'></div></div>
    <div id='div62s' style='display:none'><div id='box62s'><img id='img62s' style='position:absolute'></div></div>
    <div id='div63s' style='display:none'><div id='box63s'><img id='img63s' style='position:absolute'></div></div>
    <img id='ai_6' class='letter1' style='display:none' src='<?=$p?>images/ai.png'>
    <img id='qing_6' class='letter2' style='display:none' src='<?=$p?>images/qing.png'>
    <img id='yang_6' class='letter3' style='display:none' src='<?=$p?>images/yang.png'>
    <img id='mei_6' class='letter4' style='display:none' src='<?=$p?>images/mei.png'>
    <img id='tu_6' class='letter5' style='display:none' src='<?=$p?>images/tu.png'>
    <img id='qi_6' class='letter6' style='display:none' src='<?=$p?>images/qi4.png'>
    <img id='dou_6' class='letter7' style='display:none' src='<?=$p?>images/douhao.png'>
    <img id='wan_6' class='letter8' style='display:none' src='<?=$p?>images/wan.png'>
    <img id='shi_6' class='letter9' style='display:none' src='<?=$p?>images/shi.png'>
    <img id='yang1_6' class='letter10' style='display:none' src='<?=$p?>images/yang.png'>
    <img id='yang2_6' class='letter11' style='display:none' src='<?=$p?>images/yang.png'>
    <img id='de_6' class='letter12' style='display:none' src='<?=$p?>images/de.png'>
    <img id='yi_6' class='letter13' style='display:none' src='<?=$p?>images/yi4.png'>
    </div>
    <div id='pagetitle' style='position:absolute;width:380px;height:200px;left:60px;top:260px;'>
        <div id='upline' style='position:absolute;top:0px;left:-30px;height:3px;width:440px;background-color:#C81D1D;-webkit-transform: scale(0,1);'></div>
        <div id='downline' style='position:absolute;top:200px;left:-30px;height:3px;width:440px;background-color:#C81D1D;-webkit-transform: scale(0,1);'></div>
        <div id='leftline' style='position:absolute;top:-30px;left:0px;height:260px;width:3px;background-color:#C81D1D;-webkit-transform: scale(1,0);'></div>
        <div id='rightline' style='position:absolute;top:-30px;left:380px;height:260px;width:3px;background-color:#C81D1D;-webkit-transform: scale(1,0);'></div>
        <div id='boxtitle' style='position:absolute;width:380px;height:190px;top:0px;left:0px;display:display:table;overflow:hidden;opacity:0;text-shadow: rgb(97, 87, 87) 5px 3px 4px'>
            <div id='wordtitle' style='width:380px;height:200px;display:table-cell;vertical-align:middle;font-size:40px;color:#fff;text-align:center;padding:10px;'></div>
        </div>
    </div>

    <img src='<?=$p?>images/denglong.png' style='left:8px;top:74px;-webkit-transform-origin: 20% 0%;-webkit-animation: denglong 2s ease-in-out infinite alternate;position:absolute'>

    <img id='zikuang' src='<?=$p?>images/niankuang.png' style='left:32px;top:662px;position:absolute;opacity:0;'>
</div>


<script>
var divwidth = {'1h':428,'1s':288,'2h':425,'2s':257,'31h':337,'32h':268,'31s':227,'32s':190,'41h':269,'42h':269,'41s':225,'42s':210,'51h':213,'52h':213,'53h':310,'51s':170,'52s':136,'53s':200,'61h':220,'62h':210,'63h':360,'61s':140,'62s':149,'63s':221};
var divheight = {'1h':280,'1s':451,'2h':280,'2s':406,'31h':235,'32h':198,'31s':342,'32s':296,'41h':256,'42h':257,'41s':339,'42s':320,'51h':173,'52h':173,'53h':220,'51s':260,'52s':212,'53s':306,'61h':140,'62h':150,'63h':244,'61s':214,'62s':241,'63s':333};
function id(name)
{
    return document.getElementById(name);
}
var image_size_width=[];
var image_size_height=[];
var image_ready_num=0;
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
var timeout7;
var timeout8;
var timeout9;
var timeout10;
var timeout11;
var timeout12;
var timeout13;

var begin_titletime;
function loadimages()
{
    begin_titletime = new Date();
    begin_titletime = begin_titletime.getTime();
    setTimeout(showtitle,100);
    reshow = false;
    image_size_width=[];
    image_size_height=[];
    Onload_imgs_url=[];
    image_ready_num=18;
    image_url_index=0;
    have_num = 0;
    error_num = 0;
    canshow = true;

    for(var i=0;i<slider_images_url.length;i++)
    {
        var img=new Image();
        img.index=i;
        img.src=slider_images_url[i];
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
        var end_titletime = new Date();
        end_titletime = end_titletime.getTime();
        var dis_titletime = Math.abs(end_titletime-begin_titletime);
        if(dis_titletime>5000)
        {
            show1();
        }
        else
        {
            dis_titletime = delaytime- dis_titletime;
            timeout0 = setTimeout(function()
                {
                    show1();
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

    Onload_imgs_url[index] = img.src;
    image_size_height[index] = img.height;
    image_size_width[index] = img.width;
    have_num++;
    console.log(Onload_imgs_url[index]);
    console.log(have_num + '-' + error_num);

    if((have_num >= 10 ||slider_images_url.length == (have_num+error_num)) && canshow == true)
    {   
        canshow = false;
        reshow = false;
        var end_titletime = new Date();
        end_titletime = end_titletime.getTime();
        console.log(end_titletime+'end');
        var dis_titletime = Math.abs(end_titletime-begin_titletime);
        console.log(dis_titletime+'dis');
        if(dis_titletime>5000)
        {
            show1();
        }
        else
        {
            dis_titletime = 5000- dis_titletime;
            // console.log(dis_titletime);
            timeout1 = setTimeout(show1,dis_titletime);
        }

    }
}
function clearnodes()
{
    var node = document.getElementById('cleararea').childNodes;
    for(var i=0;i<node.length;i++)
    {
        if(!(node[i].nodeName == "#text" && !/\s/.test(node.nodeValue)))
        {
            node[i].style.webkitAnimation = '';
            node[i].style.display = 'none';
        }
        // node[i].style.webkitAnimation = '';
        // node[i].style.display = 'none';
    }
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
    id('upline').style.webkitAnimation = '';
    id('downline').style.webkitAnimation = '';
    id('leftline').style.webkitAnimation = '';
    id('rightline').style.webkitAnimation = '';
    id('boxtitle').style.webkitAnimation = '';
    id('pagetitle').style.webkitAnimation = '';
}

function showtitle()
{
    console.log(begin_titletime+'begin');
    id('wordtitle').innerHTML = e_desc;
    id('upline').style.webkitAnimation = 'linechange 1s linear both';
    id('downline').style.webkitAnimation = 'linechange 1s linear both';
    id('leftline').style.webkitAnimation = 'linechange 1s linear both';
    id('rightline').style.webkitAnimation = 'linechange 1s linear both';
    id('boxtitle').style.webkitAnimation = 'fadein 1s 0.5s linear both';


}

function show1()
{
    if(reshow == true)
        return;
    obj_name = ['a2016_6','xinnianhao_6','ai_6','qing_6','yang_6','mei_6','tu_6','qi_6','dou_6','wan_6','shi_6','yang1_6','yang2_6','de_6','yi_6'];
    var delaytime = 0;
    for(var i=14;i>1;i--)
    {
        var obj = id(obj_name[i]);
        obj.style.webkitAnimation = 'diszimu 0.5s linear '+delaytime+'s both';
        delaytime = delaytime + 0.1;
    }
    id('pagetitle').style.webkitAnimation = 'fadeout 1s 1s linear both';
    id('a2016_6').style.webkitAnimation = 'fadeout 1s 0.7s linear both';
    id('xinnianhao_6').style.webkitAnimation = 'bao_out 1s linear 0.7s both';
    id('div63h').style.webkitAnimation = 'div4out 1s 1.2s ease-in both';
    id('div61h').style.webkitAnimation = 'div4out 1s 1.5s ease-in both';
    id('div62h').style.webkitAnimation = 'div4out 1s 1.5s ease-in both';
    id('div63s').style.webkitAnimation = 'div4out 1s 1.2s ease-in both';
    id('div61s').style.webkitAnimation = 'div4out 1s 1.3s ease-in both';
    id('div62s').style.webkitAnimation = 'div4out 1s 1.5s ease-in both';

    timeout2 = setTimeout(function()
    {
        obj_name = ['a2016_1','xinnianhao','xin_1','nian_1','xi_1','qi_1','yang_1','yang1_1','dou_1','man_1','mian_1','can_1','lan_1','yang2_1','guang_1'];
        for(var i =0 ;i <obj_name.length;i++)
        {
            var obj = id(obj_name[i]);
            // console.log(obj_name); 
            obj.style.display = 'block';
        }
        id(obj_name[0]).style.webkitAnimation = 'fadein 0.6s linear both';
        id(obj_name[1]).style.webkitAnimation = 'fadein 0.6s linear both';
        id('div1h').style.webkitAnimation = 'in_center 1s ease-out 0.5s both';
        id('div1s').style.webkitAnimation = 'in_center 1s ease-out 0.5s both';
        id('xinnianhao').style.webkitAnimation = 'zixingche 1.2s ease-out 1s both';
        id('zikuang').style.webkitAnimation = 'fadein 1s linear 1s both';
        // id('yingwen1').style.webkitAnimation = 'fadein 1s linear 1.2s both';

        if(image_url_index == Onload_imgs_url.length)
            image_url_index = 0;
        setImage('1');
        image_url_index++;

        var delaytime = 1.5;
        for (var i =2;i<15;i++)
        {
            var obj = id(obj_name[i])
            obj.style.webkitAnimation = 'showzimu 0.5s linear '+delaytime+'s both';
            delaytime = delaytime + 0.1;
        }
        timeout3 = setTimeout(show2,5000)
    },1500)
}
function show2()
{
    if(reshow == true)
        return;
     obj_name = ['a2016_1','xinnianhao','xin_1','nian_1','xi_1','qi_1','yang_1','yang1_1','dou_1','man_1','mian_1','can_1','lan_1','yang2_1','guang_1'];
     var delaytime = 0;
     for(var i =14 ; i>1; i--)
     {
        var obj = id(obj_name[i]);
        obj.style.webkitAnimation = 'diszimu 0.5s linear '+delaytime +'s both';
        delaytime = delaytime + 0.1;
     }
    id('zikuang').style.webkitAnimation = 'fadeout 1s linear 1.5s both';
    id('a2016_1').style.webkitAnimation = 'fadeout 1s 1.5s ease-in both';
    id('div1s').style.webkitAnimation = 'out_center 1s ease-in 1.5s both';
    id('div1h').style.webkitAnimation = 'out_center 1s ease-in 1.5s both';
    id('xinnianhao').style.webkitAnimation = 'zixingche_out 1s ease-in 1.5s both';

    // return;
    timeout4 = setTimeout(function()
    {
        obj_name = ['a2016_2','xinnianhao2','yi_2','sheng_2','jian_2','kang_2','ping_2','an_2','dou_2','hao_2','shi_2','jie_2','er_2','lian_2','san_2'];
        for(var i = 0;i<obj_name.length;i++)
        {
            var obj = id(obj_name[i])
            obj.style.display = 'block';
        }
        id('a2016_2').style.webkitAnimation = 'fadein 1s linear 0.5s both';
        id('div2s').style.webkitAnimation = 'div2in 1.5s ease-out 0.5s both';
        id('div2h').style.webkitAnimation = 'div2in 1.5s ease-out 0.5s both';
        id('xinnianhao2').style.webkitAnimation = 'xiangji 1.5s linear 0.5s both';
        id('zikuang').style.webkitAnimation = 'fadein 1s linear 0.8s both';

        if(image_url_index == Onload_imgs_url.length)
            image_url_index = 0;
        setImage('2');
        image_url_index++;

        var delaytime = 1.5;
        for(var i = 2;i<15;i++)
        {
            var obj = id(obj_name[i]);
            obj.style.webkitAnimation = 'showzimu 0.5s linear '+delaytime+'s both';
            delaytime = delaytime + 0.1;
        }
        timeout5 = setTimeout(show3,5000);
    },1500)

}
function show3()
{
    if(reshow == true)
        return;
    obj_name = ['a2016_2','xinnianhao2','yi_2','sheng_2','jian_2','kang_2','ping_2','an_2','dou_2','hao_2','shi_2','jie_2','er_2','lian_2','san_2'];

    var delaytime = 0;
    for(var i=14;i>1;i--)
    {
        var obj = id(obj_name[i]);
        obj.style.webkitAnimation = 'diszimu 0.5s linear '+delaytime+'s both';
        delaytime = delaytime + 0.1;
    }
    id('xinnianhao2').style.webkitAnimation = 'xiangji_out 0.7s 1s linear both';
    id('div2h').style.webkitAnimation = 'div2out 1s ease-in 1.2s both';
    id('div2s').style.webkitAnimation = 'div2out 1s ease-in 1.2s both';
    id('a2016_2').style.webkitAnimation = 'fadeout 0.7s linear 1.2s both';

    timeout6 = setTimeout(function()
    {
        obj_name = ['a2016_3','xinnianhao_3','tai_3','tou_3','si_3','ji_3','lai_3','cai_3','dou_3','sheng_3','huo_3','wu_3','cai1_3','bin_3','fen_3'];
        for(var i = 0;i<obj_name.length;i++)
        {
            var obj = id(obj_name[i]);
            obj.style.display = 'block';
        }
        id('xinnianhao_3').style.webkitAnimation = 'fadein 1s linear both';
        id('div31h').style.webkitAnimation = 'div31in 1s ease-out 0.5s both';
        id('div32h').style.webkitAnimation = 'div32in 1s ease-out 0.7s both';
        id('div31s').style.webkitAnimation = 'div31in 1s ease-out 0.5s both';
        id('div32s').style.webkitAnimation = 'div32in 1s ease-out 0.7s both';
        id('a2016_3').style.webkitAnimation = 'fadein 1s linear 0.7s both';

        if(image_url_index == Onload_imgs_url.length)
            image_url_index = 0;
        setImage('31');
        image_url_index++;
        if(image_url_index == Onload_imgs_url.length)
            image_url_index = 0;
        setImage('32');
        image_url_index++;  

        var delaytime = 2;
        for (var i=2;i<15;i++)
        {
            var obj = id(obj_name[i]);
            obj.style.webkitAnimation = 'showzimu 0.5s linear '+delaytime+'s both';
            delaytime = delaytime +0.1;
        }
        timeout7 = setTimeout(show4,5000);
    },1500)
}

function show4()
{
    if(reshow == true)
        return;
    obj_name = ['a2016_3','xinnianhao_3','tai_3','tou_3','si_3','ji_3','lai_3','cai_3','dou_3','sheng_3','huo_3','wu_3','cai1_3','bin_3','fen_3'];
    var delaytime = 0;
    for(var i = 14;i>1;i--)
    {
        var obj = id(obj_name[i]);
        obj.style.webkitAnimation = 'diszimu 0.5s linear '+delaytime +'s both';
        delaytime = delaytime + 0.1;
    }

    id('a2016_3').style.webkitAnimation = 'fadeout 1s linear 0.8s both';
    id('xinnianhao_3').style.webkitAnimation = 'fadeout 1s linear 0.8s both';
    id('div31h').style.webkitAnimation = 'div31out 1s 1s ease-in both';
    id('div32h').style.webkitAnimation = 'div32out 1s 1.2s ease-in both';
    id('div31s').style.webkitAnimation = 'div31out 1s 1s ease-in both';
    id('div32s').style.webkitAnimation = 'div32out 1s 1.2s ease-in both';

    timeout8 = setTimeout(function()
    { 
        obj_name = ['a2016_4','xinnianhao_4','shi_4','ye_4','liu_4','liu1_4','da_4','shun_4','dou_4','ri_4','zi_4','qi_4','xing_4','gao_4','zhao_4'];
        for (var i=0;i<obj_name.length;i++)
        {
            var obj = id(obj_name[i]);
            obj.style.display = 'block';
        }
        id('xinnianhao_4').style.webkitAnimation = 'fadein 1s linear both';
        id('div41h').style.webkitAnimation = 'div4in 1s ease-out 0.5s both';
        id('div42h').style.webkitAnimation = 'div4in 1s ease-out 1s both';
        id('div41s').style.webkitAnimation = 'div4in 1s ease-out 0.5s both';
        id('div42s').style.webkitAnimation = 'div4in 1s ease-out 1s both';
        id('a2016_4').style.webkitAnimation = 'yumaoqiu 1s linear 1.2s both';

        if(image_url_index == Onload_imgs_url.length)
            image_url_index = 0;
        setImage('41');
        image_url_index++; 
        if(image_url_index == Onload_imgs_url.length)
            image_url_index = 0;
        setImage('42');
        image_url_index++; 

        var delaytime = 2;
        for(var i=2;i<15;i++)
        {
            var obj = id(obj_name[i]);
            obj.style.webkitAnimation = 'showzimu 0.5s linear '+delaytime+'s both';
            delaytime = delaytime + 0.1;
        }
        timeout9 = setTimeout(show5,5000)
    },1500)
}
function show5()
{
    if(reshow == true)
        return;
    obj_name = ['a2016_4','xinnianhao_4','shi_4','ye_4','liu_4','liu1_4','da_4','shun_4','dou_4','ri_4','zi_4','qi_4','xing_4','gao_4','zhao_4'];
    var delaytime = 0;
    for(var i=14;i>1;i--)
    {
        var obj = id(obj_name[i]);
        obj.style.webkitAnimation = 'diszimu 0.5s linear '+delaytime+'s both';
        delaytime = delaytime +0.1;
    }
    id('a2016_4').style.webkitAnimation = 'yumaoqiu_out 1s linear .7s both';
    id('xinnianhao_4').style.webkitAnimation = 'fadeout 1s linear 1s both';
    id('div41h').style.webkitAnimation = 'div4out 1.2s ease-in 1s both';
    id('div42h').style.webkitAnimation = 'div4out 1.2s ease-in 1.3s both';
    id('div41s').style.webkitAnimation = 'div4out 1.2s ease-in 1s both';
    id('div42s').style.webkitAnimation = 'div4out 1.2s ease-in 1.3s both';

    timeout10 = setTimeout(function()
    {
        obj_name = ['a2016_5','xinnianhao_5','ba_5','fang_5','hao_5','yun_5','jie_5','lai_5','dou_5','fan_5','nao_5','jiu_5','xiao_5','yun1_5','wai_5'];
        for(var i=0;i<obj_name.length;i++)
        {
            var obj = id(obj_name[i]);
            obj.style.display = 'block';
            // console.log(obj_name[i]);
        }
        id('a2016_5').style.webkitAnimation = 'fadein 1s linear both';
        id('div51h').style.webkitAnimation = 'fadein 1s 0.5s linear both';
        id('div52h').style.webkitAnimation = 'fadein 1s 1s linear both';
        id('div53h').style.webkitAnimation = 'fadein 1s 1.5s linear both';
        id('div51s').style.webkitAnimation = 'fadein 1s 0.5s linear both';
        id('div52s').style.webkitAnimation = 'fadein 1s 1s linear both';
        id('div53s').style.webkitAnimation = 'fadein 1s 1.5s linear both';
        id('xinnianhao_5').style.webkitAnimation = 'bao 1s 2s ease-out both';

        if(image_url_index == Onload_imgs_url.length)
            image_url_index = 0;
        setImage('51');
        image_url_index++; 
        if(image_url_index == Onload_imgs_url.length)
            image_url_index = 0;
        setImage('52');
        image_url_index++; 
        if(image_url_index == Onload_imgs_url.length)
            image_url_index = 0;
        setImage('53');
        image_url_index++; 

        var delaytime = 2.5;
        for(var i=2;i<15;i++)
        {
            var obj = id(obj_name[i]);
            obj.style.webkitAnimation = 'showzimu 0.5s linear '+delaytime + 's both';
            delaytime = delaytime + 0.1;
        }
        timeout11 = setTimeout(show6,5000)
    },1800)
}
function show6()
{
    if(reshow == true)
        return;
    obj_name = ['a2016_5','xinnianhao_5','ba_5','fang_5','hao_5','yun_5','jie_5','lai_5','dou_5','fan_5','nao_5','jiu_5','xiao_5','yun1_5','wai_5'];
    var delaytime = 0;
    for(var i=14;i>1;i--)
    {
        var obj = id(obj_name[i]);
        obj.style.webkitAnimation = 'diszimu 0.5s linear '+delaytime+'s both';
        delaytime = delaytime+ 0.1;
    }
    id('xinnianhao_5').style.webkitAnimation = 'bao_out 1s 1s ease-in both';
    id('a2016_5').style.webkitAnimation = 'fadeout 1s 1s linear both';

    id('div51h').style.webkitAnimation = 'fadeout 1s 1.5s linear both';
    id('div52h').style.webkitAnimation = 'fadeout 1s 1.2s linear both';
    id('div53h').style.webkitAnimation = 'fadeout 1s 1.5s linear both';
    id('div51s').style.webkitAnimation = 'fadeout 1s 1.5s linear both';
    id('div52s').style.webkitAnimation = 'fadeout 1s 1.2s linear both';
    id('div53s').style.webkitAnimation = 'fadeout 1s 1.5s linear both';

    timeout12 = setTimeout(function()
    {
        obj_name = ['a2016_6','xinnianhao_6','ai_6','qing_6','yang_6','mei_6','tu_6','qi_6','dou_6','wan_6','shi_6','yang1_6','yang2_6','de_6','yi_6'];
        for(var i=0;i<obj_name.length;i++)
        {
            var obj = id(obj_name[i])
            obj.style.display = 'block';
        }

        id('a2016_6').style.webkitAnimation = 'fadein 1s linear 0.3s both';
        id('div63h').style.webkitAnimation = 'div4in 1s ease-out 0.5s both';
        id('div61h').style.webkitAnimation = 'div4in 1s ease-out 0.9s both';
        id('div62h').style.webkitAnimation = 'div4in 1s ease-out 1.1s both';
        id('div63s').style.webkitAnimation = 'div4in 1s ease-out 0.5s both';
        id('div61s').style.webkitAnimation = 'div4in 1s ease-out 0.9s both';
        id('div62s').style.webkitAnimation = 'div4in 1s ease-out 1.1s both';
        id('xinnianhao_6').style.webkitAnimation = 'bao 1s linear 1.5s both';

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

        var delaytime = 2;
        for(var i=2;i<15;i++)
        {
            var obj = id(obj_name[i]);
            obj.style.webkitAnimation = 'showzimu 0.5s linear '+delaytime+'s both';
            delaytime = delaytime + 0.1;
        }
        timeout13 = setTimeout(show1,5000)
    },1800)

}
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
        div1 = id('div'+idname+'s');
    }
    else
    {
        divname = idname + 's';
        div = id('div'+idname+'s');
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
}
call_me(loadimages);
function reload_scene()
{
    reshow = true;
    clearnodes();
    setTimeout(loadimages,100)
}
</script>