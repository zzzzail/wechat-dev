<?
$p=$_WEITE['web_pic_url']."baobao/";
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
    
    #baby_back
    {
        position: absolute;
        width: 500px;
        height: 815px;
    }

    #baby_page_0_0
    {
        position: absolute;
        top: 260px;
        left: -50px;
    }
    .baby_div_0_0
    {
        position: absolute;
        -webkit-transform: scale(0.64,0.64);
    }

    #baby_page_0_1
    {
        position: absolute;
        top: 30px;
        left: -175px;

    }
    .baby_div_0_1
    {
        -webkit-transform:scale(0.4,0.4) rotate(-35deg)
    }


    #baby_page_1_0
    {
        position: absolute;
        top: 270px;
        left: -60px;

    }
    .baby_div_1_0
    {
        -webkit-transform:scale(0.64,0.64)
    }

    #baby_page_1_1
    {
        position: absolute;
        top: 46px;
        left: 10px;

    }
    .baby_div_1_1
    {
        -webkit-transform:scale(0.4,0.4) 
    }


    #baby_page_2_0
    {
        position: absolute;
        top: 260px;
        left: -105px;

    }
    .baby_div_2_0
    {
        -webkit-transform:scale(0.6,0.6)
    }

    #baby_page_2_1
    {
        position: absolute;
        top: 45px;
        left: 15px;

    }
    .baby_div_2_1
    {
        -webkit-transform:scale(0.45,0.45) 
    }


    #baby_page_3_0
    {
        position: absolute;
        top: 25px;
        left:-180px;
    }
    .baby_div_3_0
    {
        -webkit-transform:scale(0.37,0.37) rotate(-22deg)
    }
    #baby_page_3_1
    {
        position: absolute;
        top: 180px;
        left: -60px;
    }
    .baby_div_3_1
    {
        -webkit-transform:scale(0.62,0.62) rotate(1deg);
/*      width: 350px;
        height: 250px;*/
    }
    #baby_page_3_2
    {
        position: absolute;
        top: 370px;
        left: 50px;
    }
    .baby_div_3_2
    {
        -webkit-transform:scale(0.31,0.31) rotate(-20deg);
    }


    #baby_page_4_0
    {
        position: absolute;
        top: 20px;
        left:-165px;
    }
    .baby_div_4_0
    {
        -webkit-transform:scale(0.43,0.43)
    }
    #baby_page_4_1
    {
        position: absolute;
        top: 100px;
        left: 30px;
    }
    .baby_div_4_1
    {
        -webkit-transform:scale(0.37,0.37)
    }
    #baby_page_4_2
    {
        position: absolute;
        top: 300px;
        left: -20px;
    }
    .baby_div_4_2
    {
        -webkit-transform:scale(0.53,0.53);
    }


    #baby_page_5_0
    {
        position: absolute;
        top: 135px;
        left:-70px;
    }
    .baby_div_5_0
    {
        -webkit-transform:scale(0.75,0.75) rotate(9deg);
    }



    .baby_biankuang
    {
        position: absolute;
    }
    .baby_image_div
    {
        position: absolute;
        top: 14px;
        left: 20px;
/*      width: 647px; 
        height: 419px;*/


    }

    div[id^='baby_page']
    {
        display: none;
        width: 680px;
        height: 441px;
    }

    div[class^='baby_div']
    {
        width: 647px;
        height: 419px;
        -webkit-mask: url('<?=$p?>images/1.png');
        overflow: hidden;
        
    }
    img[class^='baby_div']
    {
        top: -14px;
        left: -20px;
        position: absolute;
    }

</style>


<style type="text/css">
     @-webkit-keyframes aa_in_bounce_center
    {
        0%{
            opacity:0;
            -webkit-transform:scale(.3)
        }
        50%{
            opacity:1;
            -webkit-transform:scale(1.05)
        }
        70%{
            -webkit-transform:scale(.9);
            opacity: 1;
        }
        100%{
            -webkit-transform:scale(1);
            opacity: 1;
        }
    }
    @-webkit-keyframes aa_out_bounce_center
    {
        0%{
            -webkit-transform:scale(1);
            opacity: 1
        }
        25%{
            -webkit-transform:scale(.95);
            opacity: 1
        }
        50%{
            opacity:1;
            -webkit-transform:scale(1.1)
        }
        100%{
            opacity:0;
            -webkit-transform:scale(.3)
        }
    }
    
/*---������---*/
    @-webkit-keyframes aa_in_bounce_down
    {
        0%{
            opacity:0;
            -webkit-transform:translateY(-2000px)
        }
        60%{
            opacity:1;
            -webkit-transform:translateY(30px)
        }
        80%{
            opacity: 1;
            -webkit-transform:translateY(-10px)
        }
        100%{
            opacity: 1;
            -webkit-transform:translateY(0)
        }
    }

    @-webkit-keyframes aa_out_bounce_down
    {
        0%{
            opacity: 1;
            -webkit-transform:translateY(0)
        }
        20%{
            opacity:1;
            -webkit-transform:translateY(-20px)
        }
        100%{
            opacity:0;
            -webkit-transform:translateY(2000px)
        }
    }
/*---������---*/
    @-webkit-keyframes aa_in_bounce_up
    {
        0%{
            opacity:0;
            -webkit-transform:translateY(2000px)
        }
        60%{
            opacity:1;
            -webkit-transform:translateY(-30px)
        }
        80%{
            -webkit-transform:translateY(10px)
        }
        100%{
            -webkit-transform:translateY(0)
        }
    }
    @-webkit-keyframes aa_out_bounce_up
    {
       0%{
        -webkit-transform:translateY(0)
        }
        20%{
            opacity:1;
            -webkit-transform:translateY(20px)
        }
        100%{
            opacity:0;
            -webkit-transform:translateY(-2000px)
        }
    }   
/*---������---*/
    @-webkit-keyframes aa_in_bounce_left
    {
        0%{
            opacity:0;
            -webkit-transform:translateX(-2000px)
        }
        60%{
            opacity:1;
            -webkit-transform:translateX(30px)
        }
        80%{
            -webkit-transform:translateX(-10px)
        }
        100%{
            -webkit-transform:translateX(0)
        }
    }
    @-webkit-keyframes aa_out_bounce_left
    {
        0%{
            -webkit-transform:translateX(0)
        }
        20%{
            opacity:1;
            -webkit-transform:translateX(20px)
        }
        100%{
            opacity:0;
            -webkit-transform:translateX(-2000px)
        }
    }

/*---������---*/
    @-webkit-keyframes aa_in_bounce_right
    {
        0%{
            opacity:0;
            -webkit-transform:translateX(2000px)
        }
        60%{
            opacity:1;
            -webkit-transform:translateX(-30px)
        }
        80%{
            -webkit-transform:translateX(10px)
        }
        100%{
            -webkit-transform:translateX(0)
        }
    }
    @-webkit-keyframes aa_out_bounce_right
    {
        0%{
            -webkit-transform:translateX(0)
        }
        20%{
            opacity:1;
            -webkit-transform:translateX(-20px)
        }
        100%{
            opacity:0;
        -webkit-transform:translateX(2000px)
        }
    }

    @-webkit-keyframes aa_in_roll
    {
          0% {
            opacity: 0;
            -webkit-transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
            transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
          }

          100% {
            opacity: 1;
            -webkit-transform: none;
            transform: none;
          }
    }
    @-webkit-keyframes aa_out_roll
    {
        0%{
            opacity:1;
            -webkit-transform:translateX(0px) rotate(0deg)
        }
        100%{
            opacity:0;
            -webkit-transform:translateX(100%) rotate(120deg)
        }
    }


    @-webkit-keyframes ani_0_0
    {
        0%{
            opacity:0;
            -webkit-transform:translateX(2000px);
            -webkit-animation-timing-function: ease;
        }
        14%{
            opacity:1;
            -webkit-transform:translateX(-30px)
        }
        32%{
            -webkit-transform:translateX(10px)
        }
        40%{
            -webkit-transform:translateX(0);
            -webkit-animation-timing-function: ease;
        }
        60%{
            -webkit-transform:translateX(0);
            -webkit-animation-timing-function: ease;
        }
        80%{
            opacity:1;
            -webkit-transform:translateX(-20px)
        }
        100%{
            opacity:0;
        -webkit-transform:translateX(2000px);
        -webkit-animation-timing-function: ease;
        }
    }
    @-webkit-keyframes ani_0_1
    {
        /*0%{
            opacity:0;
            -webkit-transform:translateY(-2000px)
        }
        24%{
            opacity:1;
            -webkit-transform:translateY(30px)
        }
        32%{
            -webkit-transform:translateY(-10px)
        }
        40%{
            -webkit-transform:translateY(0)
        }*/
        0% {
            opacity: 0;
            -webkit-transform: scale3d(.1, .1, .1) translate3d(-1000px, 0, 0);
            transform: scale3d(.1, .1, .1) translate3d(-1000px, 0, 0);
            -webkit-animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
            animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
        }

        24% {
            opacity: 1;
            -webkit-transform: scale3d(.475, .475, .475) translate3d(10px, 0, 0);
            transform: scale3d(.475, .475, .475) translate3d(10px, 0, 0);
            -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
            animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
        }
        40%{
        -webkit-transform:translateY(0)
        }
        70%{
        -webkit-transform:translateY(0)
        }
        /*68%{
            opacity:1;
            -webkit-transform:translateY(20px)
        }
        100%{
            opacity:0;
            -webkit-transform:translateY(-2000px)
        }*/
        86% {
            opacity: 1;
            -webkit-transform: scale3d(.475, .475, .475) translate3d(42px, 0, 0);
            transform: scale3d(.475, .475, .475) translate3d(42px, 0, 0);
          }

          100% {
            opacity: 0;
            -webkit-transform: scale(.1) translate3d(-2000px, 0, 0);
            transform: scale(.1) translate3d(-2000px, 0, 0);
            -webkit-transform-origin: left center;
            transform-origin: left center;
          }
    }
    @-webkit-keyframes ani_1_0
    {
        0%{
            opacity:0;
            -webkit-transform:translateX(-2000px)
        }
        14%{
            opacity:1;
            -webkit-transform:translateX(30px)
        }
        32%{
            -webkit-transform:translateX(-10px)
        }
        40%{
            -webkit-transform:translateX(0)
        }
        60%{
            -webkit-transform:translateX(0)
        }
        78%{
            opacity:1;
            -webkit-transform:translateX(-20px)
        }
        100%{
            opacity:0;
        -webkit-transform:translateX(2000px)
        }
    }
    @-webkit-keyframes ani_1_1
    {
        0%{
            opacity:0;
            -webkit-transform:translateX(2000px)
        }
        14%{
            opacity:1;
            -webkit-transform:translateX(-30px)
        }
        32%{
            -webkit-transform:translateX(10px)
        }
        40%{
            -webkit-transform:translateX(0)
        }
        60%{
            -webkit-transform:translateX(0)
        }
        78%{
            opacity:1;
            -webkit-transform:translateX(20px)
        }
        100%{
            opacity:0;
            -webkit-transform:translateX(-2000px)
        }
    }
    @-webkit-keyframes ani_2_0
    {
        0%{
            opacity:0;
            -webkit-transform:translateY(2000px)
        }
        14%{
            opacity:1;
            -webkit-transform:translateY(-30px)
        }
        32%{
            -webkit-transform:translateY(10px)
        }
        40%{
            -webkit-transform:translateY(0)
        }
        60%{
        -webkit-transform:translateY(0)
        }
        78%{
            opacity:1;
            -webkit-transform:translateY(20px)
        }
        100%{
            opacity:0;
            -webkit-transform:translateY(-2000px)
        }
    }
    @-webkit-keyframes ani_2_1
    {
        0%{
            opacity:0;
            -webkit-transform:translateY(-2000px)
        }
        14%{
            opacity:1;
            -webkit-transform:translateY(30px)
        }
        32%{
            -webkit-transform:translateY(-10px)
        }
        40%{
            -webkit-transform:translateY(0)
        }
        60%{
            -webkit-transform:translateY(0)
        }
        78%{
            opacity:1;
            -webkit-transform:translateY(-20px)
        }
        100%{
            opacity:0;
            -webkit-transform:translateY(2000px)
        }
    }
    @-webkit-keyframes ani_3_0
    {
        0%{
            opacity:0;
            -webkit-transform:translateY(-2000px)
        }
        14%{
            opacity:1;
            -webkit-transform:translateY(30px)
        }
        32%{
            -webkit-transform:translateY(-10px)
        }
        40%{
            -webkit-transform:translateY(0)
        }
        60%{
        -webkit-transform:translateY(0)
        }
        78%{
            opacity:1;
            -webkit-transform:translateY(20px)
        }
        100%{
            opacity:0;
            -webkit-transform:translateY(-2000px)
        }
    }
    @-webkit-keyframes ani_3_1
    {
        0%{
            opacity:0;
            -webkit-transform:scale(.3)
        }
        10%{
            opacity:1;
            -webkit-transform:scale(1.05)
        }
        28%{
            -webkit-transform:scale(.9)
        }
        40%{
            -webkit-transform:scale(1)
        }
        60%{
            -webkit-transform:scale(1)
        }
        70%{
            -webkit-transform:scale(.95)
        }
        90%{
            opacity:1;
            -webkit-transform:scale(1.1)
        }
        100%{
            opacity:0;
            -webkit-transform:scale(.3)
        }
    }
    @-webkit-keyframes ani_3_2
    {
        0%{
            opacity:0;
            -webkit-transform:translateY(2000px)
        }
        14%{
            opacity:1;
            -webkit-transform:translateY(-30px)
        }
        32%{
            -webkit-transform:translateY(10px)
        }
        40%{
            -webkit-transform:translateY(0)
        }
        60%{
            -webkit-transform:translateY(0)
        }
        78%{
            opacity:1;
            -webkit-transform:translateY(-20px)
        }
        100%{
            opacity:0;
            -webkit-transform:translateY(2000px)
        }
    }
    @-webkit-keyframes ani_4_0
    {
        0%{
            opacity:0;
            -webkit-transform:translateY(-2000px)
        }
        14%{
            opacity:1;
            -webkit-transform:translateY(30px)
        }
        32%{
            -webkit-transform:translateY(-10px)
        }
        40%{
            -webkit-transform:translateY(0)
        }
        60%{
        -webkit-transform:translateY(0)
        }
        78%{
            opacity:1;
            -webkit-transform:translateY(20px)
        }
        100%{
            opacity:0;
            -webkit-transform:translateY(-2000px)
        }
    }
    @-webkit-keyframes ani_4_1
    {
        0%{
            opacity:0;
            -webkit-transform:translateX(2000px)
        }
        14%{
            opacity:1;
            -webkit-transform:translateX(-30px)
        }
        32%{
            -webkit-transform:translateX(10px)
        }
        40%{
            -webkit-transform:translateX(0)
        }
        60%{
            -webkit-transform:translateX(0)
        }
        78%{
            opacity:1;
            -webkit-transform:translateX(-20px)
        }
        100%{
            opacity:0;
        -webkit-transform:translateX(2000px)
        }
    }
    @-webkit-keyframes ani_4_2
    {
        0%{
            opacity:0;
            -webkit-transform:translateY(2000px)
        }
        14%{
            opacity:1;
            -webkit-transform:translateY(-30px)
        }
        32%{
            -webkit-transform:translateY(10px)
        }
        40%{
            -webkit-transform:translateY(0)
        }
        60%{
            -webkit-transform:translateY(0)
        }
        78%{
            opacity:1;
            -webkit-transform:translateY(-20px)
        }
        100%{
            opacity:0;
            -webkit-transform:translateY(2000px)
        }
    }

    @-webkit-keyframes qiqiufei
    {
        from{-webkit-transform:translate(0px,0px);}
        to{-webkit-transform:translate(-700px,-700px);}
    }

    @-webkit-keyframes qiqiumove
    {
        from{-webkit-transform:rotate(-5deg);}
        to{-webkit-transform:rotate(5deg);}
    }

    @-webkit-keyframes yunmove
    {
        from{-webkit-transform:translate(0px,0px);}
        to{-webkit-transform:translate(-700px,0px);}
    }

    @-webkit-keyframes diandian
    {
        0%{opacity: 1}
        50%{opacity: 1}
        51%{opacity: 0}
        100%{opacity: 0}
    }
    .vertical_div
    {
        position: absolute;
        width: 441px;
        height: 680px;
    }
    .vertical_box
    {
        position: absolute;
        -webkit-mask: url(<?=$p?>images/2.png);
        width: 419px;
        height: 647px;
        top: 20px;
        left: 12px;
        overflow: hidden;
    }
    .vertical_border_0_0
    {
        position: absolute;
        -webkit-transform: scale(.64,.64) rotate(90deg);
        top: 119px;
        left: -120px;
    }
    .vertical_border_0_1
    {
        position: absolute;
        -webkit-transform: scale(.4,.4) rotate(55deg);
        left: -120px;
        top: 120px;
    }
    .vertical_border_1_0
    {
        position: absolute;
        -webkit-transform: scale(.64,.64) rotate(90deg);
        top: 120px;
        left: -119px;
    }
    .vertical_border_1_1
    {
        position: absolute;
        -webkit-transform: scale(.4,.4) rotate(90deg);
        top: 120px;
        left: -119px;
    }
    .vertical_border_2_0
    {
        position: absolute;
        -webkit-transform: scale(.6,.6) rotate(90deg);
        top: 120px;
        left: -119px;
    }
    .vertical_border_2_1
    {
        position: absolute;
        -webkit-transform: scale(.45,.45) rotate(90deg);
        top: 120px;
        left: -119px;
    }
    .vertical_border_3_0
    {
        position: absolute;
        -webkit-transform: scale(.37,.37) rotate(68deg);
        top: 120px;
        left: -119px;
    }
    .vertical_border_3_1
    {
        position: absolute;
        -webkit-transform: scale(.62,.62) rotate(91deg);
        top: 120px;
        left: -119px;
    }
    .vertical_border_3_2
    {
        position: absolute;
        -webkit-transform: scale(.31,.31) rotate(70deg);
        top: 120px;
        left: -119px;
    }
    .vertical_border_4_0
    {
        position: absolute;
        -webkit-transform: scale(.43,.43) rotate(90deg);
        top: 120px;
        left: -119px;
    }
    .vertical_border_4_1
    {
        position: absolute;
        -webkit-transform: scale(.37,.37) rotate(90deg);
        top: 120px;
        left: -119px;
    }
    .vertical_border_4_2
    {
        position: absolute;
        -webkit-transform: scale(.53,.53) rotate(90deg);
        top: 120px;
        left: -119px;
    }
    .vertical_border_5_0
    {
        position: absolute;
        -webkit-transform: scale(.75,.75) rotate(99deg);
        top: 120px;
        left: -119px;
    }
    #vertical_baby_page_0_0
    {
        position: absolute;
        left: 100px;
        top: 120px;
        display: none;
    }
    #vertical_baby_page_0_1
    {
        position: absolute;
        left: -70px;
        top: -100px;
        display: none;
    }
    #vertical_baby_page_1_0
    {
        position: absolute;
        top: 110px;
        left: -60px;
        display: none;
    }
    #vertical_baby_page_1_1
    {
        position: absolute;
        top: -90px;
        left: 170px;
        display: none;
    }
    #vertical_baby_page_2_0
    {
        position: absolute;
        top: 120px;
        left: -70px;
        display: none;
    }
    #vertical_baby_page_2_1
    {
        position: absolute;
        top: -70px;
        left: 160px;
        display: none;
    }
    #vertical_baby_page_3_0
    {
        position: absolute;
        top: -110px;
        left: -110px;
        display: none;
    }
    #vertical_baby_page_3_1
    {
        position: absolute;
        top: 40px;
        left: 50px;
        display: none;
    }
    #vertical_baby_page_3_2
    {
        position: absolute;
        top: 250px;
        left: 180px;
        display: none;
    }
    #vertical_baby_page_4_0
    {
        position: absolute;
        top: -80px;
        left: -90px;
        display: none;
    }
    #vertical_baby_page_4_1
    {
        position: absolute;
        left: 150px;
        top: -60px;
        display: none;
    }
    #vertical_baby_page_4_2
    {
        position: absolute;
        top: 170px;
        left: 50px;
        display: none;
    }
    #vertical_baby_page_5_0
    {
        position: absolute;
        top: 50px;
        left: 30px;
        display: none;
    }

    @-webkit-keyframes aa_in_bounce_center
    {
        0%{
            opacity:0;
            -webkit-transform:scale(.3)
        }
        50%{
            opacity:1;
            -webkit-transform:scale(1.05)
        }
        70%{
            -webkit-transform:scale(.9);
            opacity:1;
        }
        100%{
            -webkit-transform:scale(1);
            opacity: 1;
        }
    }
    @-webkit-keyframes aa_out_bounce_center
    {
        0%{
            -webkit-transform:scale(1);
            opacity: 1;
        }
        25%{
            -webkit-transform:scale(.95);
            opacity:1;
        }
        50%{
            opacity:1;
            -webkit-transform:scale(1.1)
        }
        100%{
            opacity:0;
            -webkit-transform:scale(.3)
        }
    }
</style>

<div id='baby_container' style='width:500px;height:815px;position:absolute;overflow:hidden;'>
    <img id='baby_back' src='<?=$p?>images/bg.jpg'>

    <img src='<?=$p?>images/3.png' style='position:absolute;top:270px;left:500px;-webkit-animation:yunmove 12s linear 9s infinite'>
    <img src='<?=$p?>images/3.png' style='position:absolute;top:170px;left:500px;width:60px;-webkit-animation:yunmove 12s linear 6s infinite'>
    <img src='<?=$p?>images/4.png' style='position:absolute;top:210px;left:500px;width:50px;-webkit-animation:yunmove 12s linear 3s infinite'>
    <img src='<?=$p?>images/4.png' style='position:absolute;top:30px;left:500px;width:40px;-webkit-animation:yunmove 12s linear infinite'>

    <img src='<?=$p?>images/5.png' style='position:absolute;top:140px;left:150px;-webkit-transform-origin:100% 100%;-webkit-animation:qiqiumove 4s ease-in-out infinite alternate'>
    <img src='<?=$p?>images/6.png' style='position:absolute;top:120px;left:260px;-webkit-transform-origin:100% 100%;-webkit-animation:qiqiumove 4s ease-in-out 1s infinite alternate;-webkit-transform:rotate(-5deg)'>


    <div id='baby_page_0_0'>
        <div class='baby_div_0_0'>
            <img id='baby_img_0_0' style='position:absolute;'>
        </div>
        <img class='baby_div_0_0' src='<?=$p?>images/7.png'>
        <img class='baby_div_0_0' src='<?=$p?>images/8.png' style='position:absolute;-webkit-animation:diandian 0.5s linear infinite alternate'>
    </div>

    <div id='vertical_baby_page_0_0' class='vertical_div'>
        <div class='vertical_box baby_div_0_0'>
            <img id='vertical_baby_img_0_0' style='position:absolute;'>
        </div>
        <img class='vertical_border_0_0' src='<?=$p?>images/7.png' >
        <img class='vertical_border_0_0' src='<?=$p?>images/8.png' style='-webkit-animation:diandian 0.5s linear infinite alternate'>
    </div>

    <div id='baby_page_0_1'>
        <div class='baby_div_0_1'>
            <img id='baby_img_0_1' style='position:absolute;'>
        </div>
        <img class='baby_div_0_1' src='<?=$p?>images/7.png'>
        <img class='baby_div_0_1' src='<?=$p?>images/8.png' style='position:absolute;-webkit-animation:diandian 0.5s linear infinite alternate'>
    </div>

    <div id='vertical_baby_page_0_1' class='vertical_div'>
        <div class='vertical_box baby_div_0_1'>
            <img id='vertical_baby_img_0_1' style='position:absolute;'>
        </div>
        <img class='vertical_border_0_1' src='<?=$p?>images/7.png' >
        <img class='vertical_border_0_1' src='<?=$p?>images/8.png' style='-webkit-animation:diandian 0.5s linear infinite alternate'>
    </div>



    <div id='baby_page_1_0'>
        <div class='baby_div_1_0'>
            <img id='baby_img_1_0' style='position:absolute;'>
        </div>
        <img class='baby_div_1_0' src='<?=$p?>images/7.png'>
        <img class='baby_div_1_0' src='<?=$p?>images/8.png' style='position:absolute;-webkit-animation:diandian 0.5s linear infinite alternate'>
    </div>

    <div id='vertical_baby_page_1_0' class='vertical_div'>
        <div class='vertical_box baby_div_1_0'>
            <img id='vertical_baby_img_1_0' style='position:absolute;'>
        </div>
        <img class='vertical_border_1_0' src='<?=$p?>images/7.png' >
        <img class='vertical_border_1_0' src='<?=$p?>images/8.png' style='-webkit-animation:diandian 0.5s linear infinite alternate'>
    </div>

    <div id='baby_page_1_1'>
        <div class='baby_div_1_1'>
            <img id='baby_img_1_1' style='position:absolute;'>
        </div>
        <img class='baby_div_1_1' src='<?=$p?>images/7.png'>
        <img class='baby_div_1_1' src='<?=$p?>images/8.png' style='position:absolute;-webkit-animation:diandian 0.5s linear infinite alternate'>
    </div>

    <div id='vertical_baby_page_1_1' class='vertical_div'>
        <div class='vertical_box baby_div_1_1'>
            <img id='vertical_baby_img_1_1' style='position:absolute;'>
        </div>
        <img class='vertical_border_1_1' src='<?=$p?>images/7.png' >
        <img class='vertical_border_1_1' src='<?=$p?>images/8.png' style='-webkit-animation:diandian 0.5s linear infinite alternate'>
    </div>


    <div id='baby_page_2_0'>
        <div class='baby_div_2_0'>
            <img id='baby_img_2_0' style='position:absolute;'>
        </div>
        <img class='baby_div_2_0' src='<?=$p?>images/7.png'>
        <img class='baby_div_2_0' src='<?=$p?>images/8.png' style='position:absolute;-webkit-animation:diandian 0.5s linear infinite alternate'>
    </div>

    <div id='vertical_baby_page_2_0' class='vertical_div'>
        <div class='vertical_box baby_div_2_0'>
            <img id='vertical_baby_img_2_0' style='position:absolute;'>
        </div>
        <img class='vertical_border_2_0' src='<?=$p?>images/7.png' >
        <img class='vertical_border_2_0' src='<?=$p?>images/8.png' style='-webkit-animation:diandian 0.5s linear infinite alternate'>
    </div>

    <div id='baby_page_2_1'>
        <div class='baby_div_2_1'>
            <img id='baby_img_2_1' style='position:absolute;'>
        </div>
        <img class='baby_div_2_1' src='<?=$p?>images/7.png'>
        <img class='baby_div_2_1' src='<?=$p?>images/8.png' style='position:absolute;-webkit-animation:diandian 0.5s linear infinite alternate'>
    </div>

    <div id='vertical_baby_page_2_1' class='vertical_div'>
        <div class='vertical_box baby_div_2_1'>
            <img id='vertical_baby_img_2_1' style='position:absolute;'>
        </div>
        <img class='vertical_border_2_1' src='<?=$p?>images/7.png' >
        <img class='vertical_border_2_1' src='<?=$p?>images/8.png' style='-webkit-animation:diandian 0.5s linear infinite alternate'>
    </div>


    <div id='baby_page_3_0'>
        <div class='baby_div_3_0'>
            <img id='baby_img_3_0' style='position:absolute;'>
        </div>
        <img class='baby_div_3_0' src='<?=$p?>images/7.png'>
        <img class='baby_div_3_0' src='<?=$p?>images/8.png' style='position:absolute;-webkit-animation:diandian 0.5s linear infinite alternate'>
    </div>

    <div id='vertical_baby_page_3_0' class='vertical_div'>
        <div class='vertical_box baby_div_3_0'>
            <img id='vertical_baby_img_3_0' style='position:absolute;'>
        </div>
        <img class='vertical_border_3_0' src='<?=$p?>images/7.png' >
        <img class='vertical_border_3_0' src='<?=$p?>images/8.png' style='-webkit-animation:diandian 0.5s linear infinite alternate'>
    </div>

    <div id='baby_page_3_2'>
        <div class='baby_div_3_2'>
            <img id='baby_img_3_2' style='position:absolute;'>
        </div>
        <img class='baby_div_3_2' src='<?=$p?>images/7.png'>
        <img class='baby_div_3_2' src='<?=$p?>images/8.png' style='position:absolute;-webkit-animation:diandian 0.5s linear infinite alternate'>
    </div>

    <div id='vertical_baby_page_3_2' class='vertical_div'>
        <div class='vertical_box baby_div_3_2'>
            <img id='vertical_baby_img_3_2' style='position:absolute;'>
        </div>
        <img class='vertical_border_3_2' src='<?=$p?>images/7.png' >
        <img class='vertical_border_3_2' src='<?=$p?>images/8.png' style='-webkit-animation:diandian 0.5s linear infinite alternate'>
    </div>

    <div id='baby_page_3_1'>
        <div class='baby_div_3_1'>
            <img id='baby_img_3_1' style='position:absolute;'>
        </div>
        <img class='baby_div_3_1' src='<?=$p?>images/7.png'>
        <img class='baby_div_3_1' src='<?=$p?>images/8.png' style='position:absolute;-webkit-animation:diandian 0.5s linear infinite alternate'>
    </div>

    <div id='vertical_baby_page_3_1' class='vertical_div'>
        <div class='vertical_box baby_div_3_1'>
            <img id='vertical_baby_img_3_1' style='position:absolute;'>
        </div>
        <img class='vertical_border_3_1' src='<?=$p?>images/7.png' >
        <img class='vertical_border_3_1' src='<?=$p?>images/8.png' style='-webkit-animation:diandian 0.5s linear infinite alternate'>
    </div>


    <div id='baby_page_4_0'>
        <div class='baby_div_4_0'>
            <img id='baby_img_4_0' style='position:absolute;'>
        </div>
        <img class='baby_div_4_0' src='<?=$p?>images/7.png'>
        <img class='baby_div_4_0' src='<?=$p?>images/8.png' style='position:absolute;-webkit-animation:diandian 0.5s linear infinite alternate'>
    </div>

    <div id='vertical_baby_page_4_0' class='vertical_div'>
        <div class='vertical_box baby_div_4_0'>
            <img id='vertical_baby_img_4_0' style='position:absolute;'>
        </div>
        <img class='vertical_border_4_0' src='<?=$p?>images/7.png' >
        <img class='vertical_border_4_0' src='<?=$p?>images/8.png' style='-webkit-animation:diandian 0.5s linear infinite alternate'>
    </div>

    <div id='baby_page_4_1'>
        <div class='baby_div_4_1'>
            <img id='baby_img_4_1' style='position:absolute;'>
        </div>
        <img class='baby_div_4_1' src='<?=$p?>images/7.png'>
        <img class='baby_div_4_1' src='<?=$p?>images/8.png' style='position:absolute;-webkit-animation:diandian 0.5s linear infinite alternate'>
    </div>

    <div id='vertical_baby_page_4_1' class='vertical_div'>
        <div class='vertical_box baby_div_4_1'>
            <img id='vertical_baby_img_4_1' style='position:absolute;'>
        </div>
        <img class='vertical_border_4_1' src='<?=$p?>images/7.png' >
        <img class='vertical_border_4_1' src='<?=$p?>images/8.png' style='-webkit-animation:diandian 0.5s linear infinite alternate'>
    </div>

    <div id='baby_page_4_2'>
        <div class='baby_div_4_2'>
            <img id='baby_img_4_2' style='position:absolute;'>
        </div>
        <img class='baby_div_4_2' src='<?=$p?>images/7.png'>
        <img class='baby_div_4_2' src='<?=$p?>images/8.png' style='position:absolute;-webkit-animation:diandian 0.5s linear infinite alternate'>
    </div>

    <div id='vertical_baby_page_4_2' class='vertical_div'>
        <div class='vertical_box baby_div_4_2'>
            <img id='vertical_baby_img_4_2' style='position:absolute;'>
        </div>
        <img class='vertical_border_4_2' src='<?=$p?>images/7.png' >
        <img class='vertical_border_4_2' src='<?=$p?>images/8.png' style='-webkit-animation:diandian 0.5s linear infinite alternate'>
    </div>

    <div id='baby_page_5_0'>
        <div class='baby_div_5_0'>
            <img id='baby_img_5_0' style='position:absolute;'>
        </div>
        <img class='baby_div_5_0' src='<?=$p?>images/7.png'>
        <img class='baby_div_5_0' src='<?=$p?>images/8.png' style='position:absolute;-webkit-animation:diandian 0.5s linear infinite alternate'>
    </div>

    <div id='vertical_baby_page_5_0' class='vertical_div'>
        <div class='vertical_box baby_div_5_0'>
            <img id='vertical_baby_img_5_0' style='position:absolute;'>
        </div>
        <img class='vertical_border_5_0' src='<?=$p?>images/7.png' >
        <img class='vertical_border_5_0' src='<?=$p?>images/8.png' style='-webkit-animation:diandian 0.5s linear infinite alternate'>
    </div>

    <img src='<?=$p?>images/9.png' style='position:absolute;width:70px;top:580px;left:500px;-webkit-animation:qiqiufei 12s linear infinite'>
    <img src='<?=$p?>images/10.png' style='position:absolute;width:50px;top:250px;left:500px;-webkit-animation:qiqiufei 12s 3s linear infinite'>
    <img src='<?=$p?>images/10.png' style='position:absolute;width:50px;top:700px;left:500px;-webkit-animation:qiqiufei 12s 9s linear infinite'>
    <img src='<?=$p?>images/9.png' style='position:absolute;width:70px;top:800px;left:340px;-webkit-animation:qiqiufei 12s 6s linear infinite'>

    <div id='pagetitle' style='position:absolute;width:410px;height:200px;top:238px;left:45px;font-size:40px;color:#B57932;overflow:hidden;opacity:0;'>
        <div style='position:absolute;width:410px;height:200px;top:0px;left:0px;overflow:hidden;'>
            <div style='position:absolute;width:410px;height:200px;display:table;overflow:hidden;'>
                <div id='titlecontent' style='width:410px;height:200px;vertical-align:middle;display:table-cell;text-align:center;font-size:40px;line-height:70px;'></div>
            </div>
        </div>
    </div>

</div>


<script type="text/javascript">
    
    var images_url_index=0;
    var have_num = 0;
    var error_num = 0;

    var image_size=[];

    var Onload_imgs = new Array();
    var canshow = true;
    var reshow = false;

    var timeout0;
    var timeout1;
    var timeout2;
    var timeout3;
    var timeout4;
    var timeout5;

    var delaytime = 4000;

    function reset_all()
    {
        clearTimeout(timeout0);
        clearTimeout(timeout1);
        clearTimeout(timeout2);
        clearTimeout(timeout3);
        clearTimeout(timeout4);
        clearTimeout(timeout5);

        images_url_index=0;
        have_num = 0;
        error_num = 0;
        
        image_size=[];

        Onload_imgs = [];

        canshow = true;

        id('baby_page_1_0').style.webkitAnimation='';
        id('baby_page_1_1').style.webkitAnimation='';
        id('vertical_baby_page_1_0').style.webkitAnimation='';
        id('vertical_baby_page_1_1').style.webkitAnimation='';
        id('baby_page_2_0').style.webkitAnimation='';
        id('baby_page_2_1').style.webkitAnimation='';
        id('vertical_baby_page_2_0').style.webkitAnimation='';
        id('vertical_baby_page_2_1').style.webkitAnimation='';
        id('baby_page_3_0').style.webkitAnimation='';
        id('baby_page_3_1').style.webkitAnimation='';
        id('baby_page_3_2').style.webkitAnimation='';
        id('vertical_baby_page_3_0').style.webkitAnimation='';
        id('vertical_baby_page_3_1').style.webkitAnimation='';
        id('vertical_baby_page_3_2').style.webkitAnimation='';
        id('baby_page_4_0').style.webkitAnimation='';
        id('baby_page_4_1').style.webkitAnimation='';
        id('baby_page_4_2').style.webkitAnimation='';
        id('vertical_baby_page_4_0').style.webkitAnimation='';
        id('vertical_baby_page_4_1').style.webkitAnimation='';
        id('vertical_baby_page_4_2').style.webkitAnimation='';
        id('baby_page_5_0').style.webkitAnimation='';
        id('vertical_baby_page_5_0').style.webkitAnimation='';
        id('baby_page_0_0').style.webkitAnimation='';
        id('baby_page_0_1').style.webkitAnimation='';
        id('vertical_baby_page_0_0').style.webkitAnimation='';
        id('vertical_baby_page_0_1').style.webkitAnimation='';

        id('baby_page_1_0').style.display = 'none';
        id('baby_page_1_1').style.display = 'none';
        id('vertical_baby_page_1_0').style.display = 'none';
        id('vertical_baby_page_1_1').style.display = 'none';
        id('baby_page_2_0').style.display = 'none';
        id('baby_page_2_1').style.display = 'none';
        id('vertical_baby_page_2_0').style.display = 'none';
        id('vertical_baby_page_2_1').style.display = 'none';
        id('baby_page_3_0').style.display = 'none';
        id('baby_page_3_1').style.display = 'none';
        id('baby_page_3_2').style.display = 'none';
        id('vertical_baby_page_3_0').style.display = 'none';
        id('vertical_baby_page_3_1').style.display = 'none';
        id('vertical_baby_page_3_2').style.display = 'none';
        id('baby_page_4_0').style.display = 'none';
        id('baby_page_4_1').style.display = 'none';
        id('baby_page_4_2').style.display = 'none';
        id('vertical_baby_page_4_0').style.display = 'none';
        id('vertical_baby_page_4_1').style.display = 'none';
        id('vertical_baby_page_4_2').style.display = 'none';
        id('baby_page_5_0').style.display = 'none';
        id('vertical_baby_page_5_0').style.display = 'none';
        id('baby_page_0_0').style.display = 'none';
        id('baby_page_0_1').style.display = 'none';
        id('vertical_baby_page_0_0').style.display = 'none';
        id('vertical_baby_page_0_1').style.display = 'none';

        reshow = false;
        baby_loadimage();
    }
    function baby_show_page_0 () 
    {
        if(reshow == true)
            return;
        var moshi=[0,0];
        for(var i=0;i<2;i++)
        {
            if(images_url_index>=Onload_imgs.length)
                images_url_index=0;

            var id_img=id('baby_img_0_'+i);

            baby_cut_image(0,i);
            if(image_size[images_url_index*2]/image_size[images_url_index*2+1]>1)
                moshi[i] = 0;
            else
                moshi[i] = 1;
                        
            images_url_index++;
        }

        if (moshi[0]==1)
        {
            id('vertical_baby_page_0_0').style.display='block';
            id('vertical_baby_page_0_0').style.webkitAnimation='ani_0_0 5s ease forwards';
        }
        else
        {
            id('baby_page_0_0').style.display='block';
            id('baby_page_0_0').style.webkitAnimation='ani_0_0 5s ease forwards'; 
        }

        if (moshi[1]==1)
        {
            id('vertical_baby_page_0_1').style.display='block';
            id('vertical_baby_page_0_1').style.webkitAnimation='ani_0_1 5s ease forwards';
        }
        else
        {
            id('baby_page_0_1').style.display='block';
            id('baby_page_0_1').style.webkitAnimation='ani_0_1 5s ease forwards';
        }

        id('baby_page_1_0').style.display='none';
        id('baby_page_1_1').style.display='none';
        id('baby_page_1_0').style.webkitAnimation='';
        id('baby_page_1_1').style.webkitAnimation='';

        id('vertical_baby_page_1_0').style.display='none';
        id('vertical_baby_page_1_1').style.display='none';
        id('vertical_baby_page_1_0').style.webkitAnimation='';
        id('vertical_baby_page_1_1').style.webkitAnimation='';

        timeout0 = setTimeout(baby_show_page_1,5000)
            
    }

    function baby_show_page_1 ()
    {
        if(reshow == true)
            return;

        var moshi=[0,0];
        for(var i=0;i<2;i++)
        {
            if(images_url_index>=Onload_imgs.length)
                images_url_index=0;
            
            var id_img=id('baby_img_1_'+i);

            baby_cut_image(1,i);

            if(image_size[images_url_index*2]/image_size[images_url_index*2+1]>1)
                moshi[i] = 0;
            else
                moshi[i] = 1;
            
            images_url_index++;
        }
 
        if (moshi[0]==1) 
        {
            id('vertical_baby_page_1_0').style.display='block';
            id('vertical_baby_page_1_0').style.webkitAnimation='ani_1_0 5s ease forwards';
        }
        else
        {
            id('baby_page_1_0').style.display='block';
            id('baby_page_1_0').style.webkitAnimation='ani_1_0 5s ease forwards';
        }

        if (moshi[1]==1)
        {
            id('vertical_baby_page_1_1').style.display='block';
            id('vertical_baby_page_1_1').style.webkitAnimation='ani_1_1 5s ease forwards';
        }
        else
        {
            id('baby_page_1_1').style.display='block';
            id('baby_page_1_1').style.webkitAnimation='ani_1_1 5s ease forwards';
        }   

        id('baby_page_2_0').style.display='none';
        id('baby_page_2_1').style.display='none';
        id('baby_page_2_0').style.webkitAnimation='';
        id('baby_page_2_1').style.webkitAnimation='';
        id('vertical_baby_page_2_0').style.display='none';
        id('vertical_baby_page_2_1').style.display='none';
        id('vertical_baby_page_2_0').style.webkitAnimation='';
        id('vertical_baby_page_2_1').style.webkitAnimation='';

        timeout1 = setTimeout(baby_show_page_2,5000)

    }

    function baby_show_page_2 ()
    {
        if(reshow == true)
            return;

        var moshi=[0,0];
        for(var i=0;i<2;i++)
        {
            if(images_url_index>=Onload_imgs.length)
                images_url_index=0;
            
            var id_img=id('baby_img_2_'+i);

            baby_cut_image(2,i);
            if(image_size[images_url_index*2]/image_size[images_url_index*2+1]>1)
                moshi[i] = 0;
            else
                moshi[i] = 1;
            
            images_url_index++;
        }

        if (moshi[0]==1)
        {
            id('vertical_baby_page_2_0').style.display='block';
            id('vertical_baby_page_2_0').style.webkitAnimation='ani_2_0 5s ease forwards';
        }
        else
        {
            id('baby_page_2_0').style.display='block';
            id('baby_page_2_0').style.webkitAnimation='ani_2_0 5s ease forwards';
        }

        if (moshi[1]==1)
        {
            id('vertical_baby_page_2_1').style.display='block';
            id('vertical_baby_page_2_1').style.webkitAnimation='ani_2_1 5s ease forwards';
        }
        else
        {
            id('baby_page_2_1').style.display='block';
            id('baby_page_2_1').style.webkitAnimation='ani_2_1 5s ease forwards';       
        }

        id('baby_page_3_0').style.display='none';
        id('baby_page_3_1').style.display='none';
        id('baby_page_3_2').style.display='none';
        id('baby_page_3_0').style.webkitAnimation='';
        id('baby_page_3_1').style.webkitAnimation='';
        id('baby_page_3_2').style.webkitAnimation='';
        id('vertical_baby_page_3_0').style.display='none';
        id('vertical_baby_page_3_1').style.display='none';
        id('vertical_baby_page_3_2').style.display='none';
        id('vertical_baby_page_3_0').style.webkitAnimation='';
        id('vertical_baby_page_3_1').style.webkitAnimation='';
        id('vertical_baby_page_3_2').style.webkitAnimation='';

        timeout2 = setTimeout(baby_show_page_3,5000)
    }

    function baby_show_page_3 ()
    {
        if(reshow == true)
            return;

        var moshi=[0,0,0];
        for(var i=0;i<3;i++)
        {
            if(images_url_index>=Onload_imgs.length)
                images_url_index=0;
            
            var id_img=id('baby_img_3_'+i);

            baby_cut_image(3,i);
            if(image_size[images_url_index*2]/image_size[images_url_index*2+1]>1)
                moshi[i] = 0;
            else
                moshi[i] = 1;
            
            images_url_index++;
        }

        if(moshi[0]==1)
        {
            id('vertical_baby_page_3_0').style.display='block';
            id('vertical_baby_page_3_0').style.webkitAnimation='ani_3_0 5s ease forwards';
        }
        else
        {
            id('baby_page_3_0').style.display='block';
            id('baby_page_3_0').style.webkitAnimation='ani_3_0 5s ease forwards';
        }
        if (moshi[2]==1)
        {
            id('vertical_baby_page_3_2').style.display='block';
            id('vertical_baby_page_3_2').style.webkitAnimation='ani_3_2 5s ease forwards';
        }
        else
        {
            id('baby_page_3_2').style.display='block';
            id('baby_page_3_2').style.webkitAnimation='ani_3_2 5s ease forwards';
        }
        if (moshi[1]==1)
        {
            id('vertical_baby_page_3_1').style.display='block';
            id('vertical_baby_page_3_1').style.webkitAnimation='ani_3_1 5s ease forwards'
        }
        else
        {
            id('baby_page_3_1').style.display='block';
            id('baby_page_3_1').style.webkitAnimation='ani_3_1 5s ease forwards'  
        }

        id('baby_page_4_0').style.display='none';
        id('baby_page_4_1').style.display='none';
        id('baby_page_4_2').style.display='none';
        id('baby_page_4_0').style.webkitAnimation='';
        id('baby_page_4_1').style.webkitAnimation='';
        id('baby_page_4_2').style.webkitAnimation='';
        id('vertical_baby_page_4_0').style.display='none';
        id('vertical_baby_page_4_1').style.display='none';
        id('vertical_baby_page_4_2').style.display='none';
        id('vertical_baby_page_4_0').style.webkitAnimation='';
        id('vertical_baby_page_4_1').style.webkitAnimation='';
        id('vertical_baby_page_4_2').style.webkitAnimation='';

        timeout3 = setTimeout(baby_show_page_4,5000)
    }

    function baby_show_page_4 ()
    {
        if(reshow == true)
            return;

        var moshi=[0,0,0];
        for(var i=0;i<3;i++)
        {
            if(images_url_index>=Onload_imgs.length)
                images_url_index=0;
            
            var id_img=id('baby_img_4_'+i);

            baby_cut_image(4,i);
            if(image_size[images_url_index*2]/image_size[images_url_index*2+1]>1)
                moshi[i] = 0;
            else
                moshi[i] = 1;
            
            images_url_index++;
        }

        if(moshi[0]==1)
        {
            id('vertical_baby_page_4_0').style.display='block';
            id('vertical_baby_page_4_0').style.webkitAnimation='ani_4_0 5s ease forwards';
        }
        else
        {
            id('baby_page_4_0').style.display='block';
            id('baby_page_4_0').style.webkitAnimation='ani_4_0 5s ease forwards';
        }
        if (moshi[1]==1)
        {
            id('vertical_baby_page_4_1').style.display='block';
            id('vertical_baby_page_4_1').style.webkitAnimation='ani_4_1 5s ease forwards';
        }
        else
        {
            id('baby_page_4_1').style.display='block';
            id('baby_page_4_1').style.webkitAnimation='ani_4_1 5s ease forwards';
        }
        if (moshi[2]==1)
        {
            id('vertical_baby_page_4_2').style.display='block';
            id('vertical_baby_page_4_2').style.webkitAnimation='ani_4_2 5s ease forwards';
        }
        else
        {
            id('baby_page_4_2').style.display='block';
            id('baby_page_4_2').style.webkitAnimation='ani_4_2 5s ease forwards';
        }

        id('baby_page_5_0').style.display='none';
        id('baby_page_5_0').style.webkitAnimation='';
        id('vertical_baby_page_5_0').style.display='none';
        id('vertical_baby_page_5_0').style.webkitAnimation='';

        timeout4 = setTimeout(baby_show_page_5,5000);

    }

    function baby_show_page_5 ()
    {
        if(reshow == true)
            return;

        var moshi=0;
        for(var i=0;i<1;i++)
        {
            if(images_url_index>=Onload_imgs.length)
                images_url_index=0;
            
            var id_img=id('baby_img_5_'+i);

            baby_cut_image(5,i);
            if(image_size[images_url_index*2]/image_size[images_url_index*2+1]>1)
                moshi = 0;
            else
                moshi = 1;
            
            images_url_index++;
        }

        if (moshi==1)
        {
            id('vertical_baby_page_5_0').style.display='block';
            id('vertical_baby_page_5_0').style.webkitAnimation='ani_3_1 5s ease forwards';
        }
        else
        {
            id('baby_page_5_0').style.display='block';
            id('baby_page_5_0').style.webkitAnimation='ani_3_1 5s ease forwards';
        }


        id('baby_page_0_0').style.display='none';
        id('baby_page_0_1').style.display='none';
        id('baby_page_0_0').style.webkitAnimation='';
        id('baby_page_0_1').style.webkitAnimation='';
        id('vertical_baby_page_0_0').style.display='none';
        id('vertical_baby_page_0_1').style.display='none';
        id('vertical_baby_page_0_0').style.webkitAnimation='';
        id('vertical_baby_page_0_1').style.webkitAnimation='';

        timeout5 = setTimeout(baby_show_page_0,5000)
    }


    function id(name)
    {
        return document.getElementById(name)
    }

    function baby_cut_image(index,page_index)
    {
        if(reshow == true)
            return;

        while(Onload_imgs[images_url_index] == 'not find' || Onload_imgs[images_url_index] == 'loading')
        {
            console.log(Onload_imgs[images_url_index]);
            images_url_index++;
            if(images_url_index == Onload_imgs.length)
                images_url_index = 0;
        }

        var imgwidth=image_size[images_url_index*2];
        var imgheight=image_size[images_url_index*2+1];

        var img_bili=imgwidth/imgheight;

        if(img_bili<1)
        {

            moshi = 1;
        }
        else
        {
            moshi = 0;
        }
        if (moshi==1)
        {
            var img_obj=id('vertical_baby_img_'+index+'_'+page_index);
        }
        else
        {
            var img_obj=id('baby_img_'+index+'_'+page_index);
        }


        // console.log(imgwidth,imgheight,img_bili);

        if(img_bili>(647/419))
        {
            img_obj.height=419;
            img_obj.width=419*img_bili;
            img_obj.style.top='0px';
            img_obj.style.left='-'+((img_obj.width-647)/2)+'px';
        }
        else
        {
            // alert(img_obj.height)
            if(img_bili<1)
            {
                if(img_bili>(419/647))
                {
                    img_obj.height=647;
                    img_obj.width=647*img_bili;
                    img_obj.style.top='0px';
                    img_obj.style.left='-'+((img_obj.width-419)/2)+'px';
                }
                else
                {
                    img_obj.width=419;
                    img_obj.height=419/img_bili;
                    img_obj.style.left='0px';
                    img_obj.style.top='-'+((img_obj.height-647)/2)+'px';
                }

            }
            else
            {
                img_obj.width=647;
                img_obj.height=647/img_bili;
                img_obj.style.left='0px';
                img_obj.style.top='-'+((img_obj.height-419)/2)+'px';
            }

        }

        img_obj.src=Onload_imgs[images_url_index];
        console.log(img_obj.src);

    }



    function baby_loadimage()
    {

        begin_titletime = new Date();
        begin_titletime = begin_titletime.getTime();
        showtitle();

        for(var i=0;i<slider_images_url.length;i++)
        {
            var img=new Image();
            img.src=slider_images_url[i].replace("?imageView2/1/w/640/q/75","");
            img.index = i;
            Onload_imgs[i] = 'loading';
            img.onload=baby_onload;
            img.onerror = image_onerror;
        }

    }

    function image_onerror(event)
    {
        var img = event.target;
        var index = img.index;
        if(index<10)
            error_num ++;
        Onload_imgs[index] = 'not find';


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

    function baby_onload(event)
    {
        if(reshow == true)
            return;
        var img=event.target;
        var index = img.index;

        if(index<10)
        {
            have_num++;
        }
        Onload_imgs[index]=img.src;
        image_size[index*2]=img.width;
        image_size[index*2+1]=img.height;


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
        id('pagetitle').style.webkitAnimation = 'aa_in_bounce_center 1s ease both';
        id('titlecontent').innerHTML = e_desc;
    }
    function distitle()
    {
        id('pagetitle').style.webkitAnimation = 'aa_out_bounce_center 1s ease both';
        baby_show_page_0();
    }
    call_me(baby_loadimage);

    function reload_scene()
    {
        reshow = true;
        reset_all();
    }
</script>