<?
$p=$_WEITE['web_pic_url']."kuailebaobei/";
?>
<style type="text/css">
    
    @-webkit-keyframes in_lightspeed
    {
          0% {
            -webkit-transform: translate3d(100%, 0, 0) skewX(-30deg);
            transform: translate3d(100%, 0, 0) skewX(-30deg);
            opacity: 0;
          }
          60% {
            -webkit-transform: skewX(20deg);
            transform: skewX(20deg);
            opacity: 1;
          }
          80% {
            -webkit-transform: skewX(-5deg);
            transform: skewX(-5deg);
            opacity: 1;
          }
          100% {
            -webkit-transform: none;
            transform: none;
            opacity: 1;
          }
    }
    @-webkit-keyframes out_lightspeed
    {
          100% {
            -webkit-transform: translate3d(-100%, 0, 0) skewX(30deg);
            transform: translate3d(-100%, 0, 0) skewX(30deg);
            opacity: 0;
          }
          40% {
            -webkit-transform: skewX(-20deg);
            transform: skewX(-20deg);
            opacity: 1;
          }
          20% {
            -webkit-transform: skewX(5deg);
            transform: skewX(5deg);
            opacity: 1;
          }
          0% {
            -webkit-transform: none;
            transform: none;
            opacity: 1;
          }
    }

    *
    {
        padding: 0px;
        margin: 0px;
        -webkit-box-sizing: border-box;
    }

    body
    {
        background-color: #ffc400;
    }

    #container
    {
        width: 500px;
        height: 815px;
        position: absolute;
        overflow: hidden;
    }
    .m_star
    {
        position: absolute;
        top: 0px;
    }
    @-webkit-keyframes m_starmove
    {
        0%  {-webkit-transform: scale(0) rotate(0deg);opacity: 1}
        90% {-webkit-transform: scale(1) rotate(900deg);opacity: 1}
        100%{-webkit-transform: scale(1) rotate(920deg);opacity: 0}
    }
    @-webkit-keyframes m_fadein
    {
        from  {opacity: 0}
        to    {opacity: 1}
    }
    @-webkit-keyframes m_fadeout
    {
        from  {opacity: 1}
        to    {opacity: 0}
    }
    @-webkit-keyframes zhayan
    {
        0%  {opacity: 1}
        95% {opacity: 1}
        97% {opacity: 0}
        100%{opacity: 0} 
    }
    #m_star1
    {
        top: 0px;
        left: 309px;
        -webkit-animation: m_starmove 5s 1s ease-out infinite both;
    }
    #m_star2
    {
        top: 181px;
        left: 16px;
        -webkit-animation: m_starmove 5s 3s ease-out infinite both;
    }
    #m_star3
    {
        top: 154px;
        left: 268px;
        -webkit-animation: m_starmove 5s 4s ease-out infinite both;
    }
    #m_star4
    {
        top: 568px;
        left: 0px;
        -webkit-animation: m_starmove 5s 2s ease-out infinite both;
    }
    #m_star5
    {
        top: 502px;
        left: 300px;
        -webkit-animation: m_starmove 5s ease-out infinite both;
    }
    #m_star6
    {
        top: 715px;
        left: 368px;
        -webkit-animation: m_starmove 5s ease-out infinite both;
    }
    #m_dot1
    {
        position: absolute;
        top: 0px;
        left: 0px;
        -webkit-animation: m_fadeout 2s linear infinite alternate;
    }
    #m_dot2
    {
        position: absolute;
        top: 0px;
        left: 0px;
        -webkit-transform: scale(-1);
        -webkit-animation: m_fadein 2s linear infinite alternate;
    }
    #children
    {
        position: absolute;
        top: 0px;left: 0px;
    }
    #m_children
    {
        position: absolute;
        top: 30px;
        left: 9px;
    }
    #m_eye
    {
        position: absolute;
        top: 40px;
        left: 213px;
        -webkit-animation: zhayan 4s linear infinite;
    }
    #m_eye1
    {
        position: absolute;
        top: 40px;
        left: 213px;
    }
    #banana
    {
        position: absolute;
        top: 131px;
        left: 17px;
    }
    #cloud1
    {
        position: absolute;
        top: 200px;
        left: 105px;
        /*-webkit-animation: cloud1 2s linear infinite;*/
    }
    #cloud2
    {
        position: absolute;
        top: 668px;
        left: 417px;
        /*-webkit-animation: cloud1 2s 1s linear infinite both;*/
    }
    #imgdiv1
    {
        position: absolute;
        top: 175px;
        left: 0px;
        -webkit-transform-origin: 70% 100%;
    }
    #imgbox1
    {
        position: absolute;
        top: 33px;
        left: 23px;
        width: 452px;
        height: 476px;
        -webkit-mask: url(<?=$p?>images/mask1.png);
        overflow: hidden;
    }
    #minion1
    {
        position: absolute;
        top: 620px;
        left: 75px;
    }
    #minion2
    {
        position: absolute;
        top: 113px;
        left: 396px;
        -webkit-transform-origin: 20% 80%;
    }
    #minion3
    {
        position: absolute;
        top: 213px;
        left: 58px;
        opacity: 0;
    }
    #fengche
    {
        position: absolute;
        left: -7px;
        top: 545px;
    }
    @-webkit-keyframes child1
    {
        0%   {-webkit-transform: translate(0px,-300px);}
        95%   {-webkit-transform: translate(0px,10px);}
        100% {-webkit-transform: translate(0px,0px);}
    }
    @-webkit-keyframes m_in_bounce_down
    {
        0%{opacity:0;-webkit-transform:translateY(-2000px)}
        60%{opacity:1;-webkit-transform:translateY(30px)}
        80%{-webkit-transform:translateY(-10px)}
        100%{-webkit-transform:translateY(0)}
    }
    @-webkit-keyframes m_in_bounce_right
    {
        0%{opacity:0;-webkit-transform:translateX(-2000px)}
        60%{opacity:1;-webkit-transform:translateX(30px)}
        80%{-webkit-transform:translateX(-10px)}
        100%{-webkit-transform:translateX(0)}
    }
    @-webkit-keyframes m_in_bounce_left
    {
        0%{opacity:0;-webkit-transform:translateX(2000px)}
        60%{opacity:1;-webkit-transform:translateX(-30px)}
        80%{-webkit-transform:translateX(10px)}
        100%{-webkit-transform:translateX(0)}
    }
    @-webkit-keyframes cloud1
    {
        0%   {-webkit-transform: translate(0px,0px);opacity:0;}
        20%  {-webkit-transform: translate(12px,0px);opacity: 1}
        100% {-webkit-transform: translate(60px,0px);opacity:0;}
    }
    @-webkit-keyframes cloud2
    {
        0%   {-webkit-transform: translate(0px,0px);opacity:0;}
        20%  {-webkit-transform: translate(-12px,0px);opacity: 1}
        100% {-webkit-transform: translate(-40px,0px);opacity:0;}
    }
    @-webkit-keyframes m_in_bounce_center
    {
        0%{opacity:0;-webkit-transform:scale(.3)}
        50%{opacity:1;-webkit-transform:scale(1.05)}
        70%{-webkit-transform:scale(.9)}
        100%{-webkit-transform:scale(1)}
    }
    @-webkit-keyframes m_in_bounce_up
    {
        0%{opacity:0;-webkit-transform:translateY(2000px)}
        60%{opacity:1;-webkit-transform:translateY(-30px)}
        80%{-webkit-transform:translateY(10px)}
        100%{-webkit-transform:translateY(0)}
    }
    @-webkit-keyframes m_out_bounce_up
    {
        0%{-webkit-transform:translateY(0)}
        20%{opacity:1;-webkit-transform:translateY(20px)}
        100%{opacity:0;-webkit-transform:translateY(-2000px)}
    } 
    @-webkit-keyframes m_out_bounce_left
    {
        0%{-webkit-transform:translateX(0)}
        20%{opacity:1;-webkit-transform:translateX(20px)}
        100%{opacity:0;-webkit-transform:translateX(-2000px)}
    }
    @-webkit-keyframes m_out_bounce_right
    {
        0%{-webkit-transform:translateX(0)}
        20%{opacity:1;-webkit-transform:translateX(-20px)}
        100%{opacity:0;-webkit-transform:translateX(2000px)}
    }
    @-webkit-keyframes m_out_bounce_down
    {
        0%{-webkit-transform:translateY(0)}
        20%{opacity:1;-webkit-transform:translateY(-20px)}
        100%{opacity:0;-webkit-transform:translateY(2000px)}
    }
    @-webkit-keyframes m_out_bounce_center
    {
        0%{-webkit-transform:scale(1)}
        25%{-webkit-transform:scale(.95)}
        50%{opacity:1;-webkit-transform:scale(1.1)}
        100%{opacity:0;-webkit-transform:scale(.3)}
    }
    @-webkit-keyframes littleminionin
    {
        0%  {-webkit-transform: translate(60px,60px);opacity: 1}
        80% {-webkit-transform: translate(-2px,-2px);opacity: 1}
        100%{-webkit-transform: translate(0px,0px);opacity: 1}
    }
    @-webkit-keyframes littleminionout
    {
        0%  {-webkit-transform: translate(0px,0px);opacity: 1}
        20% {-webkit-transform: translate(-2px,-2px);opacity: 1}
        100%{-webkit-transform: translate(60px,60px);opacity: 1}
    }
    @-webkit-keyframes minion2out
    {
        0%  {-webkit-transform: translate(0px,0px) rotate(0deg) scale(1);}
        50% {-webkit-transform: translate(100px,50px) rotate(-70deg) scale(0.6);}
        100%{-webkit-transform: translate(200px,90px) rotate(-90deg) scale(0.2);}
    }
    @-webkit-keyframes m_out_gun_right
    {
        0%  {-webkit-transform: translate(0px,0px) rotate(0deg);}
        10% {-webkit-transform: translate(0px,0px) rotate(-3deg);}
        100% {-webkit-transform: translate(150px,0px) rotate(90deg);}

    }
    #cloud
    {
        position: absolute;top: 0px;left: 0px;
    }
    #minion4
    {
        position: absolute;
        top: 0px;
        left: 0px;
    }
    #minion5
    {
        position: absolute;
        top: 0px;
        left: 0px;
    }
    #imgdiv2h
    {
        position: absolute;
        top: -5px;
        left: 0px;
    }
    #imgdiv2s
    {
        position: absolute;
        top: 176px;
        left: 49px;
    }
    #kuang2h
    {
        position: absolute;
        top: 275px;
        left: 14px;
        -webkit-transform: rotate(-10deg) scale(.97);
    }
    #kuang2s
    {
        position: absolute;
        top: 0px;
        left: 0px;
        -webkit-transform: rotate(5deg) scale(.97);
    }
    #imgbox2h
    {
        position: absolute;
        top: 297px;
        left: 34px;
        width: 432px;
        height: 316px;
        -webkit-transform: rotate(-10deg);
        -webkit-mask: url(<?=$p?>images/mask2h.png);
        overflow: hidden;
    }
    #imgbox2s
    {
        position: absolute;
        top: 19px;
        left: 20px;
        width: 316px;
        height: 432px;
        -webkit-transform: rotate(5deg);
        -webkit-mask: url(<?=$p?>images/mask2s.png);
        overflow: hidden;
    }

    @-webkit-keyframes fengche2
    {
        from  {-webkit-transform: translate(0px,50px) scale(-1.2,1.2) rotate(-40deg);}
        to    {-webkit-transform: translate(0px,0px) scale(-1.2,1.2) rotate(0deg);}
    }
    @-webkit-keyframes fengche3
    {
        to  {-webkit-transform: translate(0px,50px) scale(-1.2,1.2) rotate(-40deg);}
        from    {-webkit-transform: translate(0px,0px) scale(-1.2,1.2) rotate(0deg);}
    }
    @-webkit-keyframes littleminionin2
    {
        0%  {-webkit-transform: translate(0px,100px);opacity: 1}
        80% {-webkit-transform: translate(0px,-10px);opacity: 1}
        100%{-webkit-transform: translate(0px,0px);opacity: 1}
    }
    @-webkit-keyframes littleminionout2
    {
        100%  {-webkit-transform: translate(0px,100px);opacity: 1}
        20% {-webkit-transform: translate(0px,-10px);opacity: 1}
        0%{-webkit-transform: translate(0px,0px);opacity: 1}
    }
    #minion6
    {
        position: absolute;
        top: 0px;
        left: 0px;
    }
    #cloud3
    {
        position: absolute;
        top: 0px;
        left: 0px;
        display: none;
    }
    #imgdiv31h
    {
        position: absolute;
        width: 420px;
        height: 316px;
        top: 75px;
        left: 8px;
    }
    #imgbox31h
    {
        position: absolute;
        width: 383px;
        height: 280px;
        top: 16px;
        left: 20px;
        -webkit-mask: url(<?=$p?>images/mask31h.png);
        overflow: hidden;
    }
    #imgdiv32h
    {
        position: absolute;
        width: 349px;
        height: 259px;
        top: 417px;
        left: 0px;
    }
    #imgbox32h
    {
        position: absolute;
        width: 313px;
        height: 219px;
        top: 19px;
        left: 19px;
        -webkit-mask: url(<?=$p?>images/mask32h.png);
        overflow: hidden;
    }
    #imgdiv31s
    {
        position: absolute;
        top: 12px;
        left: 153px;
        width: 316px;
        height: 420px;
    }
    #imgbox31s
    {
        position: absolute;
        top: 18px;
        left: 21px;
        width: 280px;
        height: 383px;
        -webkit-mask: url(<?=$p?>images/mask31s.png);
        overflow: hidden;
    }
    #imgdiv32s
    {
        position: absolute;
        width: 219px;
        height: 313px;
        top: 382px;
        left: 38px;
    }
    #imgbox32s
    {
        position: absolute;
        width: 219px;
        height: 313px;
        top: 20px;
        left: 23px;
        -webkit-mask: url(<?=$p?>images/mask32s.png);
        overflow: hidden;
    }
    @-webkit-keyframes children3
    {
        from  {-webkit-transform: translate(163px,167px) rotate(-12deg);}
        to    {-webkit-transform: translate(0px,0px) rotate(-12deg);}
    }
    @-webkit-keyframes children3_out
    {
        to  {-webkit-transform: translate(163px,167px) rotate(-12deg);}
        from    {-webkit-transform: translate(0px,0px) rotate(-12deg);}
    }
    @-webkit-keyframes minion6_3
    {
        from  {-webkit-transform: translate(95px,0px);}
        to    {-webkit-transform: translate(0px,0px);}
    }
    @-webkit-keyframes minion6_3_out
    {
        to  {-webkit-transform: translate(95px,0px);}
        from    {-webkit-transform: translate(0px,0px);}
    }
    @-webkit-keyframes fengche6
    {
        from  {-webkit-transform: rotate(71deg);}
        to    {-webkit-transform: rotate(10deg);}
    }
    @-webkit-keyframes fengche6_out
    {
        to  {-webkit-transform: rotate(71deg);}
        from    {-webkit-transform: rotate(10deg);}
    }
    @-webkit-keyframes minion2_3
    {
        from  {-webkit-transform: translate(6px,-97px);}
        to    {-webkit-transform: translate(0px,0px);}
    }
    @-webkit-keyframes minion2_3_out
    {
        to  {-webkit-transform: translate(6px,-97px);}
        from    {-webkit-transform: translate(0px,0px);}
    }
    @-webkit-keyframes minion3_3
    {
        0%   {-webkit-transform: translate(35px,61px);opacity: 0}
        80%  {-webkit-transform: translate(8px,-10px);}
        100% {-webkit-transform: translate(0px,0px);opacity: 1}
    }
    @-webkit-keyframes minion3_3_out
    {
        100%   {-webkit-transform: translate(35px,61px);opacity: 0}
        20%  {-webkit-transform: translate(8px,-10px);}
        0% {-webkit-transform: translate(0px,0px);opacity: 1}
    }
    #imgdiv41h
    {
        position: absolute;
        width: 378px;
        height: 269px;
        left: 126px;
        top: 272px;
    }
    #imgbox41h
    {
        overflow: hidden;
        position: absolute;
        width: 337px;
        height: 229px;
        top: 21px;
        left: 21px;
        -webkit-mask: url(<?=$p?>images/mask41h.png);
    }
    #imgdiv42h
    {
        position: absolute;
        width: 299px;
        height: 214px;
        left: 11px;
        top: 543px;
    }
    #imgbox42h
    {
        position: absolute;
        width: 270px;
        height: 184px;
        top: 16px;
        left: 13px;
        overflow: hidden;
        -webkit-mask: url(<?=$p?>images/mask42h.png);
    }
    @-webkit-keyframes m_children4
    {
        from  {-webkit-transform: translate(-12px,-210px) rotate(-13deg);}
        to    {-webkit-transform: translate(0px,0px) rotate(-13deg);}
    }
    @-webkit-keyframes m_children4_out
    {
        to  {-webkit-transform: translate(-12px,-210px) rotate(-13deg);}
        from    {-webkit-transform: translate(0px,0px) rotate(-13deg);}
    }
    @-webkit-keyframes banana4
    {
        from  {-webkit-transform: translate(-284px,25px) rotate(-12.5deg);}
        to    {-webkit-transform: translate(0px,0px) rotate(-12.5deg);}
    }
    @-webkit-keyframes banana4_out
    {
        to  {-webkit-transform: translate(-284px,25px) rotate(-12.5deg);}
        from    {-webkit-transform: translate(0px,0px) rotate(-12.5deg);}
    }
    @-webkit-keyframes minion2_4
    {
        from  {-webkit-transform: translate(0px,-241px);}
        to    {-webkit-transform: translate(0px,0px);}
    }
    @-webkit-keyframes minion2_4_out
    {
        to  {-webkit-transform: translate(0px,-241px);}
        from    {-webkit-transform: translate(0px,0px);}
    }
    #m4{
        position: absolute;
        left: 90px;
        top: 6px;
    }
    #m5
    {
        position: absolute;
        top: 384px;
        left: 39px
    }
    @-webkit-keyframes m4
    {
        from  {-webkit-transform: translate(0px,0px);}
        to    {-webkit-transform: translate(0px,7px);}
    }
    @-webkit-keyframes m5
    {
        from  {-webkit-transform: translate(0px,7px);}
        to    {-webkit-transform: translate(0px,0px);}
    }
    @-webkit-keyframes showm4
    {
        from {-webkit-transform: translate(0px,90px);opacity: 0}
        to   {-webkit-transform: translate(0px,0px);opacity: 1}
    }
    @-webkit-keyframes showm4_out
    {
        100% {-webkit-transform: translate(0px,90px);opacity: 0}
        0%   {-webkit-transform: translate(0px,0px);opacity: 1}
        20%   {-webkit-transform: translate(0px,-10px);opacity: 1}
    }
    @-webkit-keyframes showm5
    {
        0%  {-webkit-transform: translate(-121px,0px);}
        80% {-webkit-transform: translate(10px,0px);}
        100%{-webkit-transform: translate(0px,0px);}
    }
    @-webkit-keyframes showm5_out
    {
        100%  {-webkit-transform: translate(-121px,0px);}
        20% {-webkit-transform: translate(10px,0px);}
        0%{-webkit-transform: translate(0px,0px);}
    }
    @-webkit-keyframes m_4_1
    {
        from {-webkit-transform: translate(194px,0px);}
        to   {-webkit-transform: translate(0px,0px);}
    }
    @-webkit-keyframes m_4_1_out
    {
        to {-webkit-transform: translate(194px,0px);}
        from   {-webkit-transform: translate(0px,0px);}
    }
    @-webkit-keyframes m_4_2
    {
        from {-webkit-transform: translate(194px,0px) scale(-1,1);}
        to   {-webkit-transform: translate(0px,0px) scale(-1,1);}
    }
    @-webkit-keyframes m_4_2_out
    {
        to {-webkit-transform: translate(194px,0px) scale(-1,1);}
        from   {-webkit-transform: translate(0px,0px) scale(-1,1);}
    }
    #imgdiv41s
    {
        position: absolute;
        left: 221px;
        top: 216px;
    }
    #imgdiv42s
    {
        position: absolute;
        left: 49px;
        top: 482px;
    }
    #imgbox41s
    {
        position: absolute;
        top: 21px;
        left: 20px;
        overflow: hidden;
        width: 229px;
        height: 337px;
        -webkit-mask: url(<?=$p?>images/mask41s.png);
    }
    #imgbox42s
    {
        position: absolute;
        top: 14px;
        left: 17px;
        overflow: hidden;
        width: 184px;
        height: 270px;
        -webkit-mask: url(<?=$p?>images/mask42s.png);
    }
    #imgdiv51h
    {
        position: absolute;
        left: 9px;
        top: 193px;
    }
    #imgbox51h
    {
        position: absolute;;
        overflow: hidden;
        top: 20px;
        left: 17px;
        height: 268px;
        width: 366px;
        -webkit-mask: url(<?=$p?>images/mask51h.png);
    }
    #imgdiv52h
    {
        position: absolute;
        left: 165px;
        top: 499px;
    }
    #imgbox52h
    {
        position: absolute;
        top: 17px;
        left: 16px;
        width: 290px;
        height: 214px;
        overflow: hidden;
        -webkit-mask: url(<?=$p?>images/mask52h.png);
    }
    #imgdiv51s
    {
        position: absolute;
        left: 35px;
        top: 140px;
    }
    #imgbox51s
    {
        position: absolute;;
        overflow: hidden;
        top: 19px;
        left: 19px;
        height: 366px;
        width: 268px;
        -webkit-mask: url(<?=$p?>images/mask51s.png);
    }
    #imgdiv52s
    {
        position: absolute;
        left: 242px;
        top: 452px;
    }
    #imgbox52s
    {
        position: absolute;
        top: 16px;
        left: 16px;
        width: 214px;
        height: 290px;
        overflow: hidden;
        -webkit-mask: url(<?=$p?>images/mask52s.png);
    }
    @-webkit-keyframes m_children5
    {
        from {-webkit-transform: translate(-21px,-161px) rotate(-11deg);}
        to   {-webkit-transform: translate(0px,0px) rotate(0deg);}
    }
    @-webkit-keyframes m_children5_out
    {
        to {-webkit-transform: translate(-21px,-161px) rotate(-11deg);}
        from   {-webkit-transform: translate(0px,0px) rotate(0deg);}
    }
    @-webkit-keyframes banana5_out
    {
        to {-webkit-transform: translate(-21px,-261px) rotate(-11deg);}
        from   {-webkit-transform: translate(0px,0px) rotate(0deg);}
    }
    #imgdiv6h
    {
        position: absolute;
        left: -28px;
        top: 208px;
    }
    #imgdiv6s
    {
        position: absolute;
        left: 72px;
        top: 199px;
    }
    #imgbox6h
    {
        position: absolute;
        overflow: hidden;
        width: 519px;
        height: 400px;
        top: 19px;
        left: 18px;
        -webkit-mask: url(<?=$p?>images/mask6h.png);
    }
    #imgbox6s
    {
        position: absolute;
        overflow: hidden;
        top: 20px;
        left: 21px;
        width: 316px;
        height: 432px;
        -webkit-mask: url(<?=$p?>images/mask6s.png);
    }
    @-webkit-keyframes m63
    {
        from {-webkit-transform: translate(150px,170px);}
        to   {-webkit-transform: translate(0px,0px);}
    }
    @-webkit-keyframes m63_out 
    {
        to {-webkit-transform: translate(150px,170px);}
        from   {-webkit-transform: translate(0px,0px);}
    }
</style>

<div id='container'>
    <img id='m_dot1' src='<?=$p?>images/dian.png'>
    <img id='m_dot2' src='<?=$p?>images/dian.png'>
    <img id='m_star1' class='m_star' src='<?=$p?>images/star.png'>
    <img id='m_star2' class='m_star' src='<?=$p?>images/star.png'>
    <img id='m_star3' class='m_star' src='<?=$p?>images/star.png'>
    <img id='m_star4' class='m_star' src='<?=$p?>images/star.png'>
    <img id='m_star5' class='m_star' src='<?=$p?>images/star.png'>
    <img id='m_star5' class='m_star' src='<?=$p?>images/star.png'>

    <img id='banana' style='display:none' src='<?=$p?>images/bana.png'>
    <div id='m_children' style='display:none'>
        <img src='<?=$p?>images/chil.png'>
        <img id='m_eye1' src='<?=$p?>images/eye1.png'>
        <img id='m_eye' src='<?=$p?>images/eye.png'>
    </div>
    <div id='cloud' style='display:none'>
        <img id='cloud1' src='<?=$p?>images/yun2.png'>
        <img id='cloud2' src='<?=$p?>images/yun1.png'>
        <img id='cloud3' src='<?=$p?>images/yun3.png'>

    </div>
   <img id='minion4' style='display:none;opacity:0;' src='<?=$p?>images/minion4.png'>
    <img id='minion3' style='display:none' src='<?=$p?>images/minion3.png'>
    <div id='imgdiv1' style='display:none'>
        <div id='imgbox1'>
            <img id='img1' style='position:absolute'>
        </div>
        <img style='postiion:absolute;-webkit-transform: scale(.99,.99)' src='<?=$p?>images/kuang11.png'>
    </div>

    <div id='imgdiv2h' style='display:none'>
        <div id='imgbox2h'>
            <img id='img2h' style='position:absolute'>
        </div>
        <img id='kuang2h' src='<?=$p?>images/kuang12h.png'>
    </div>   
    <div id='imgdiv2s' style='display:none;'>
        <div id='imgbox2s'>
            <img id='img2s' style='position:absolute'>
        </div>
        <img id='kuang2s' src='<?=$p?>images/kuang12s.png'>
    </div>

    <img id='minion6' style='display:none' src='<?=$p?>images/minion6.png'>

    <div id='imgdiv31h' style='display:none'>
        <div id='imgbox31h'>
            <img id='img31h' style='position:absolute'>
        </div>
        <img style='postiion:absolute;-webkit-transform: scale(.99,.99)' src='<?=$p?>images/kuang131h.png'>
    </div>
    <div id='imgdiv32h' style='display:none'>
        <div id='imgbox32h'>
            <img id='img32h' style='position:absolute'>
        </div>
        <img style='postiion:absolute;-webkit-transform: scale(.99,.99)' src='<?=$p?>images/kuang132h.png'>
    </div>

    <div id='imgdiv31s' style='display:none'>
        <div id='imgbox31s'>
             <img id='img31s' style='position:absolute'>
        </div>
        <img style='postiion:absolute;-webkit-transform: scale(.98,.98)' src='<?=$p?>images/kuang131s.png'>
    </div>
    <div id='imgdiv32s' style='display:none'>
        <div id='imgbox32s'>
             <img id='img32s' style='position:absolute'>
        </div>
        <img style='postiion:absolute;-webkit-transform: scale(.98,.98)' src='<?=$p?>images/kuang132s.png'>
    </div>

    <div id='imgdiv41h' style='display:none'>
        <div id='imgbox41h'>
            <img id='img41h' style='position:absolute'>
        </div>
        <img style='postiion:absolute;-webkit-transform: scale(.95,.95)' src='<?=$p?>images/kuang141h.png'>
    </div>
    <div id='imgdiv42h' style='display:none'>
        <div id='imgbox42h'>
            <img id='img42h' style='position:absolute'>
        </div>
        <img style='postiion:absolute;-webkit-transform: scale(.95,.95)' src='<?=$p?>images/kuang142h.png'>
    </div>

    <div id='imgdiv41s' style='display:none'>
        <div id='imgbox41s'>
             <img id='img41s' style='position:absolute'>
        </div>
        <img style='postiion:absolute;-webkit-transform: scale(.95,.95)' src='<?=$p?>images/kuang141s.png'>
    </div>
    <div id='imgdiv42s' style='display:none'>
        <div id='imgbox42s'>
             <img id='img42s' style='position:absolute'>
        </div>
        <img style='postiion:absolute;-webkit-transform: scale(.95,.95)' src='<?=$p?>images/kuang142s.png'>
    </div>
    <div id='m4' style='display:none'>
        <img style='position:absolute;-webkit-animation: m4 1s linear infinite alternate' src='<?=$p?>images/m4.png'>
    </div>
    <div id='m5' style='display:none'>
        <img style='position:absolute;-webkit-animation: m5 1s linear infinite alternate' src='<?=$p?>images/m5.png'>
    </div>

    <div id='imgdiv51h' style='display:none'>
        <div id='imgbox51h'>
            <img id='img51h' style='position:absolute'>
        </div>
        <img style='postiion:absolute;-webkit-transform: scale(.99,.99)' src='<?=$p?>images/kuang151h.png'>
    </div>
    <div id='imgdiv52h' style='display:none'>
        <div id='imgbox52h'>
            <img id='img52h' style='position:absolute'>
        </div>
        <img style='postiion:absolute;-webkit-transform: scale(.99,.99)' src='<?=$p?>images/kuang152h.png'>
    </div>

    <div id='imgdiv51s' style='display:none'>
        <div id='imgbox51s'>
             <img id='img51s' stle='position:absolute'>
        </div>
        <img style='postiion:absolute;-webkit-transform: scale(.99,.99)' src='<?=$p?>images/kuang151s.png'>
    </div>
    <div id='imgdiv52s' style='display:none'>
        <div id='imgbox52s'>
             <img id='img52s' style='position:absolute'>
        </div>
        <img style='postiion:absolute;-webkit-transform: scale(.99,.99)' src='<?=$p?>images/kuang152s.png'>
    </div>
    <div id='m51' style='position:absolute;display:none'>
        <img style='position:absolute;-webkit-animation: m4 1s linear infinite alternate' src='<?=$p?>images/m51.png'>
    </div>
    <div id='m52' style='position:absolute;display:none'>
        <img style='position:absolute;-webkit-animation: m5 1s linear infinite alternate' src='<?=$p?>images/m52.png'>
    </div>

    <div id='imgdiv6h' style='display:none;'>
        <div id='imgbox6h'>
            <img id='img6h' style='position:absolute'>
        </div>
        <img style='postiion:absolute;-webkit-transform: scale(.99,.99)' id='kuang6h' src='<?=$p?>images/kuang16h.png'>
    </div>   
    <div id='imgdiv6s' style='display:none;'>
        <div id='imgbox6s'>
            <img id='img6s' style='position:absolute'>
        </div>
        <img style='postiion:absolute;-webkit-transform: scale(.99,.99)' id='kuang6s' src='<?=$p?>images/kuang16s.png'>
    </div>
    <div id='m61' style='position:absolute;display:none'>
        <img style='position:absolute;-webkit-animation: m4 1s linear infinite alternate' src='<?=$p?>images/m61.png'>
    </div>
    <div id='m62' style='position:absolute;display:none'>
        <img style='position:absolute;-webkit-animation: m5 1s linear infinite alternate' src='<?=$p?>images/m62.png'>
    </div>
    <img id='minion2' style='display:none' src='<?=$p?>images/minion2.png'>
    <img id='minion8' style='display:none;position:absolute' src='<?=$p?>images/minion8.png'>
 
    <img id='minion5' style='display:none' src='<?=$p?>images/minion5.png'>
    <img id='fengche' style='display:none' src='<?=$p?>images/fengche.png'>
    <img id='minion1' style='display:none' src='<?=$p?>images/minion1.png'>
    <img id='m63' style='position:absolute;display:none' src='<?=$p?>images/m63.png'>

    <div id='pagetitle' style='position:absolute;border:10px solid #fff;border-radius:10px;width:400px;height:200px;left:50px;top:230px;font-size:36px;color:#fff;opacity:0;'>
        <div style='position:absolute;width:360px;height:160px;left:10px;top:10px;overflow:hidden;'>
            <div style='display:table;width:360px;height:160px;text-align:center;'>
                <div id='titlecontent' style='display:table-cell;width:360px;height:160px;vertical-align:middle;line-height:150%;'></div>
            </div>
        </div>
    </div>
</div>

<script>
function showtitle()
{
    id('titlecontent').innerHTML = e_desc;
    id('pagetitle').style.webkitAnimation = 'in_lightspeed 1s ease both';
    var fengche = id('fengche');
    fengche.style.top = '585px';
    fengche.style.left = '-7px';
    fengche.style.display = 'block';
    fengche.style.webkitTransformOrigin = '50% 50%';

    var minion1 = id('minion1');
    // minion2.style.top = '103px';
    // minion2.style.left = '396px';
    minion1.style.display = 'block';
    // minion2.style.webkitTransformOrigin = '20% 80%';
    id('fengche').style.webkitAnimation = 'm_in_bounce_up 0.8s 1s ease both';
    id('minion1').style.webkitAnimation = 'm_in_bounce_up 0.8s 1s ease both';
    
}
function distitle()
{
    id('pagetitle').style.webkitAnimation = 'out_lightspeed 1s ease both';
    showin1();
}
function id(name)
{
    return document.getElementById(name);
}
function showin1 ()
{
    if(reshow == true)
        return;
    if(image_url_index == Onload_imgs_url.length)
        image_url_index = 0;
    m_set_Image('1');
    image_url_index++;

    id('banana').style.display = 'block';
    id('m_children').style.display = 'block';
    id('cloud').style.display = 'block';
    id('fengche').style.display = 'block';
    id('minion1').style.display = 'block';
    id('minion2').style.display = 'block';
    id('minion3').style.display = 'block';
    id('imgdiv1').style.display = 'block';

    var fengche = id('fengche');
    fengche.style.top = '585px';
    fengche.style.left = '-7px';
    fengche.style.webkitTransformOrigin = '50% 50%';

    var minion2 = id('minion2');
    minion2.style.top = '103px';
    minion2.style.left = '396px';
    minion2.style.webkitTransformOrigin = '20% 80%';

    var minion3 = id('minion3');
    minion3.style.top = '213px';
    minion3.style.left = '58px';
    minion3.style.opacity = 0;

    id('imgdiv1').style.webkitTransformOrigin = '50% 50%';
    id('m_children').style.webkitAnimation = 'm_in_bounce_down 0.8s ease both';
    id('banana').style.webkitAnimation = 'm_in_bounce_left 0.8s 0.5s ease both';
    id('fengche').style.webkitAnimation = 'm_in_bounce_up 0.8s 1s ease both';
    id('minion1').style.webkitAnimation = 'm_in_bounce_up 0.8s 1s ease both';
    id('minion2').style.webkitAnimation = 'm_in_bounce_down 0.8s 1s ease both';
    id('imgdiv1').style.webkitAnimation = 'm_in_bounce_center 1s 1s ease both';
    id('minion3').style.webkitAnimation = 'littleminionin 0.6s 2.3s linear forwards';
    id('cloud1').style.webkitAnimation = 'cloud1 2s linear infinite';
    id('cloud2').style.webkitAnimation = 'cloud1 2s 1s linear infinite both';

    timeout1 = setTimeout(showout1,5000);
}

function showout1()
{
    if(reshow == true)
        return;
    id('imgdiv1').style.webkitTransformOrigin = '70% 100%';
    id('minion3').style.webkitAnimation = 'littleminionout 0.6s linear';
    id('minion2').style.webkitAnimation = 'minion2out 1.5s linear both';
    id('fengche').style.webkitAnimation = 'm_out_bounce_down 1s 1s linear both';
    id('minion1').style.webkitAnimation = 'm_out_bounce_down 1s 1s linear both';
    id('m_children').style.webkitAnimation = 'm_out_bounce_up 1s 1s linear both';
    id('banana').style.webkitAnimation = 'm_out_bounce_right 1s 1.5s linear both';
    id('imgdiv1').style.webkitAnimation = 'm_out_gun_right 1s 1.2s linear both';
    id('cloud').style.webkitAnimation = 'm_fadeout 1s linear 2s linear forwards';

    timeout2 = setTimeout(showin2,2000);
}
function showin2()
{
    if(reshow == true)
        return;
    if(image_url_index == Onload_imgs_url.length)
        image_url_index = 0;
    m_set_Image('2');
    var img_bili = image_size_width[image_url_index]/image_size_height[image_url_index];
    if(img_bili>=1)
    {
        //���
        // id('imgdiv2h').style.display = 'block';
        id('minion4').style.top = '222px';
        id('minion4').style.left = '55px';
        id('imgdiv2h').style.webkitAnimation = 'm_in_bounce_left 1s 0.6s ease both';
        id('minion4').style.webkitAnimation = 'littleminionin2 0.5s 1.5s linear forwards';
    }
    else
    {
                // ����
        // id('imgdiv2h').style.display = 'block';
        id('minion4').style.top = '110px';
        id('minion4').style.left = '110px';
        id('imgdiv2s').style.webkitAnimation = 'm_in_bounce_left 1s 0.6s ease both';
        id('minion4').style.webkitAnimation = 'littleminionin2 0.5s 1.5s linear forwards';
    }
    
    image_url_index++;

    id('banana').style.display = 'block';
    id('m_children').style.display = 'block';
    id('minion2').style.display = 'block';
    id('fengche').style.display = 'block';
    id('cloud').style.display = 'block';
    id('minion4').style.display = 'block';
    id('minion5').style.display = 'block';

    var fengche = id('fengche');
    fengche.style.top = '610px';
    fengche.style.left = '127px';
    fengche.style.webkitTransformOrigin = '100% 100%';
    fengche.style.webkitTransform = 'scale(-1.2,1.2)';

    id('minion5').style.top = '623px';
    id('minion5').style.left = '246px';
    id('cloud1').style.top = '214px';
    id('cloud1').style.left = '105px';
    id('cloud2').style.top = '677px';
    id('cloud2').style.left = '117px';


    id('cloud2').style.webkitAnimation = 'cloud2 2s linear infinite';

    id('m_children').style.webkitAnimation = 'm_in_bounce_down 1s ease both';
    id('banana').style.webkitAnimation = 'm_in_bounce_left 1s ease both';
    id('minion2').style.webkitAnimation = 'm_in_bounce_down 1s 0.5s ease both';

    id('minion5').style.webkitAnimation = 'm_in_bounce_up 1s 0.5s ease both';
    id('fengche').style.webkitAnimation = 'fengche2 1s 0.5s ease both';

    timeout3 = setTimeout(showout2,5000);
}
function showout2()
{
    if(reshow == true)
        return;
    id('minion4').style.webkitAnimation = 'littleminionout2 0.5s linear';
    id('minion5').style.webkitAnimation = 'm_out_bounce_down 1s 0.5s ease both';
    id('fengche').style.webkitAnimation = 'fengche3 1s 0.5s ease both';
    id('minion2').style.webkitAnimation = 'm_out_bounce_up 1s 0.8s ease both';
    id('m_children').style.webkitAnimation = 'm_out_bounce_up 1s 0.8s ease both';

    //���
    id('imgdiv2h').style.webkitAnimation = 'm_out_bounce_right 1s 0.5s ease both';
    //����
    id('imgdiv2s').style.webkitAnimation = 'm_out_bounce_right 1s 0.5s ease both';

    id('banana').style.webkitAnimation = 'm_out_bounce_right 1s 0.8s ease both';

    timeout4 = setTimeout(showin3,1500)

}

function showin3()
{
    if(reshow == true)
        return;
    if(image_url_index == Onload_imgs_url.length)
        image_url_index = 0;
    m_set_Image('31');
    var img_bili = image_size_width[image_url_index]/image_size_height[image_url_index];
    if(img_bili>=1)
    {
        id('imgdiv31h').style.webkitAnimation = 'm_in_bounce_center 0.7s 0.3s linear both';
    }
    else
    {
        id('imgdiv31s').style.webkitAnimation = 'm_in_bounce_center 1s 0.5s linear both';
    }
    image_url_index++;
    if(image_url_index == Onload_imgs_url.length)
        image_url_index = 0;
    m_set_Image('32');
    var img_bili = image_size_width[image_url_index]/image_size_height[image_url_index];
    if(img_bili>=1)
    {
        id('imgdiv32h').style.webkitAnimation = 'm_in_bounce_center 0.7s 0.7s linear both';
    }
    else
    {
        id('imgdiv32s').style.webkitAnimation = 'm_in_bounce_center 1s 1s linear both';
    }
    image_url_index++;

    id('cloud').style.display = 'block';
    id('cloud1').style.display = 'block';
    id('cloud2').style.display = 'block';
    id('cloud3').style.display = 'block';
    id('minion2').style.display = 'block';
    id('minion3').style.display = 'block';
    id('minion6').style.display = 'block';
    id('fengche').style.display = 'block';
    id('m_children').style.display = 'block';
    id('banana').style.display = 'block';

    id('cloud').style.webkitAnimation = 'm_fadein 0.5s linear forwards';

    var m_children = id('m_children');
    m_children.style.top = '648px';
    m_children.style.left = '14px';
    m_children.style.webkitTransform = 'rotate(-12deg)';
    m_children.style.webkitAnimation = 'children3 1s ease-out both';

    var cloud3 = id('cloud3');
    cloud3.style.top = '391px';
    cloud3.style.left = '303px';
    cloud3.style.webkitAnimation = 'cloud2 1.5s linear infinite both'

    var banana = id('banana');
    banana.style.top = '726px';
    banana.style.left = '241px';
    banana.style.webkitTransform = 'rotate(-11deg)';
    banana.style.webkitAnimation = 'children3 0.5 ease-out both';

    var cloud2 = id('cloud2');
    cloud2.style.top = '275px';
    cloud2.style.left = '438px';
    cloud2.style.webkitAnimation = 'cloud1 1.5s 0.5s linear infinite both'

    var cloud1 = id('cloud1');
    cloud1.style.top = '25px';
    cloud1.style.left = '23px';
    cloud1.style.webkitAnimation = 'cloud1 1.5s linear infinite both'

    var minion2 = id('minion2');
    minion2.style.top = '-3px';
    minion2.style.left = '407px';
    minion2.style.webkitAnimation = 'minion2_3 0.8s linear both';

    var minion3 = id('minion3');
    minion3.style.top = '368px';
    minion3.style.left = '0px';
    minion3.style.webkitAnimation = 'minion3_3 0.8s 0.3s linear both';

    var minion6 = id('minion6');
    minion6.style.top = '547px';
    minion6.style.left = '406px';
    minion6.style.webkitAnimation = 'minion6_3 0.5s ease-out both';

    var fengche = id('fengche');
    fengche.style.top = '466px';
    fengche.style.left = '281px';
    fengche.style.webkitTransformOrigin = '88.98% 95.56%';
    fengche.style.webkitTransform = 'rotate(14deg)';
    fengche.style.webkitAnimation = 'fengche6 0.5s linear both';



    timeout5 = setTimeout(showout3,5000);

}
function showout3()
{
    if(reshow == true)
        return;
    id('imgdiv32h').style.webkitAnimation = 'm_out_bounce_center 0.5s 0.3s linear both';
    id('imgdiv31h').style.webkitAnimation = 'm_out_bounce_center 0.5s 0.5s linear both';
    id('imgdiv32s').style.webkitAnimation = 'm_out_bounce_center 1s 0.5s linear both';
    id('imgdiv31s').style.webkitAnimation = 'm_out_bounce_center 1s 1s linear both';
    id('m_children').style.webkitAnimation = 'children3_out 0.7s 0.5s ease-in both';
    id('banana').style.webkitAnimation = 'children3_out 0.7s 0.5s ease-in both';
    id('minion2').style.webkitAnimation = 'm_out_bounce_up 0.5s 1s linear both';
    id('minion3').style.webkitAnimation = 'minion3_3_out 0.5s linear both';
    id('minion6').style.webkitAnimation = 'minion6_3_out 0.7s 0.5s linear both';
    id('fengche').style.webkitAnimation = 'fengche6_out 1s 0.5s linear both';
    id('cloud').style.webkitAnimation = 'm_fadeout 1s 0.5s linear both';

    timeout6 = setTimeout(showin4,1500);
}

function showin4()
{
    if(reshow == true)
        return;

    if(image_url_index == Onload_imgs_url.length)
        image_url_index = 0;
    m_set_Image('41');
    var img_bili = image_size_width[image_url_index]/image_size_height[image_url_index];
    if(img_bili >=1)
    {
        id('imgdiv41h').style.webkitAnimation = 'm_in_bounce_center 0.8s 0.5s ease both';
    }
    else
    {
        id('imgdiv41s').style.webkitAnimation = 'm_in_bounce_center 0.8s 0.5s ease both';
    }
    image_url_index ++;

    if(image_url_index == Onload_imgs_url.length)
        image_url_index = 0;
    m_set_Image('42');
    var img_bili = image_size_width[image_url_index]/image_size_height[image_url_index];
    if(img_bili >=1)
    {
        id('imgdiv42h').style.webkitAnimation = 'm_in_bounce_center 0.8s 0.8s ease both';
    }
    else
    {
        id('imgdiv42s').style.webkitAnimation = 'm_in_bounce_center 0.8s 0.8s ease both';
    }
    image_url_index ++;

    id('minion2').style.display = 'block';
    id('m5').style.display = 'block';
    id('m4').style.display = 'block';
    id('minion8').style.display = 'block';
    id('fengche').style.display = 'block';
    id('m_children').style.display = 'block';
    id('banana').style.display = 'block';

    var m_children = id('m_children');
    m_children.style.top = '75px';
    m_children.style.left = '5px';
    m_children.style.webkitTransform = 'rotate(-13deg)';
    m_children.style.webkitAnimation = 'm_children4 0.5s ease both';


    var banana = id('banana');
    banana.style.top = '202px';
    banana.style.left = '22px';
    banana.style.webkitTransform = 'rotate(-12.5deg)';
    banana.style.webkitAnimation = 'banana4 0.5s 0.5s ease both';

    var minion2 = id('minion2');
    minion2.style.top = '141px';
    minion2.style.left = '365px';
    minion2.style.webkitAnimation = 'minion2_4 0.8s linear both';

    var m4 = id('m4');
    m4.style.webkitAnimation = 'showm4 0.6s linear 0.7s both';

    var m5 = id('m5');
    m5.style.webkitAnimation = 'showm5 0.6s linear 0.7s both';

    var minion8 = id('minion8');
    minion8.style.top = '627px';
    minion8.style.left = '310px';
    minion8.style.webkitAnimation = 'm_4_1 0.5s linear both';

    var fengche = id('fengche');
    fengche.style.top = '522px';
    fengche.style.left = '219px';
    fengche.style.webkitTransform = 'scale(-1,1)';
    fengche.style.webkitTransformOrigin = '88.14% 95.87%';
    fengche.style.webkitAnimation = 'm_4_2 0.5s linear both';

    timeout7 = setTimeout(showout4,5000)
}
function showout4()
{
    if(reshow == true)
        return;
    id('m4').style.webkitAnimation = 'showm4_out 1s ease both';
    id('m5').style.webkitAnimation = 'showm5_out 1s linear both';
    id('banana').style.webkitAnimation = 'banana4_out 0.5s 0.8s ease both';
    id('m_children').style.webkitAnimation = 'm_children4_out 0.5s 0.8s ease both';
    id('minion2').style.webkitAnimation = 'minion2_4_out 0.5s 0.8s ease-in both';
    id('imgdiv41h').style.webkitAnimation = 'm_out_bounce_center 0.8s 0.5s ease both';
    id('imgdiv42h').style.webkitAnimation = 'm_out_bounce_center 0.8s 0.8s ease both';
    id('imgdiv41s').style.webkitAnimation = 'm_out_bounce_center 0.8s 0.5s ease both';
    id('imgdiv42s').style.webkitAnimation = 'm_out_bounce_center 0.8s 0.8s ease both';
    id('minion8').style.webkitAnimation = 'm_4_1_out 0.5s 0.8s linear both';
    id('fengche').style.webkitAnimation = 'm_4_2_out 0.5s 0.8s linear both';

    timeout8 = setTimeout(showin5,1500);

}

function  showin5 () {
    if(reshow == true)
        return;
    if(image_url_index == Onload_imgs_url.length)
        image_url_index = 0;
    m_set_Image('51');
    var img_bili = image_size_width[image_url_index]/image_size_height[image_url_index];
    if(img_bili >=1)
    {
        id('imgdiv51h').style.webkitAnimation = 'm_in_bounce_right 0.7s 0.5s ease-out both';
    }
    else
    {
        id('imgdiv51s').style.webkitAnimation = 'm_in_bounce_right 0.7s 0.5s ease-out both';
    }
    image_url_index ++;

    if(image_url_index == Onload_imgs_url.length)
        image_url_index = 0;
    m_set_Image('52');
    var img_bili = image_size_width[image_url_index]/image_size_height[image_url_index];
    if(img_bili >=1)
    {
        id('imgdiv52h').style.webkitAnimation = 'm_in_bounce_left 0.7s 0.5s ease-out both';
    }
    else
    {
        id('imgdiv52s').style.webkitAnimation = 'm_in_bounce_left 0.7s 0.5s ease-out both';
    }
    image_url_index ++;

    id('minion2').style.display = 'block';
    id('m_children').style.display = 'block';
    id('banana').style.display = 'block';
    id('m51').style.display = 'block';
    id('m52').style.display = 'block';

    var m_children = id('m_children');
    m_children.style.top = '28px';
    m_children.style.left = '9px';
    m_children.style.webkitAnimation = 'm_children5 0.5s ease both';

    var banana = id('banana');
    banana.style.top = '140px';
    banana.style.left = '228px';
    banana.style.webkitAnimation = 'm_children5 0.5s ease both';

    var minion2 = id('minion2');
    minion2.style.top = '116px';
    minion2.style.left = '44px';
    minion2.style.webkitAnimation = 'm_in_bounce_down 0.7s ease-out both';

    var m51 = id('m51');
    m51.style.top = '362px';
    m51.style.left = '396px';
    m51.style.webkitAnimation = 'm_in_bounce_left 2s ease-out both';

    var m52 = id('m52');
    m52.style.top = '586px';
    m52.style.left = '34px';
    m52.style.webkitAnimation = 'm_in_bounce_right 2s ease-out both';

    timeout9 = setTimeout(showout5,5000);

}

function  showout5 () 
{
    if(reshow == true)
        return;
    id('m51').style.webkitAnimation = 'm_out_bounce_right 1.5s ease-in both';
    id('m52').style.webkitAnimation = 'm_out_bounce_left 1.5s ease-in both';
    id('m_children').style.webkitAnimation = 'm_children5_out 1s linear both';
    id('banana').style.webkitAnimation = 'banana5_out 1s linear both';
    id('minion2').style.webkitAnimation = 'm_out_bounce_up 1s ease both';

    id('imgdiv51h').style.webkitAnimation = 'm_out_bounce_left 0.8s 0.7s ease-in both';
    id('imgdiv52h').style.webkitAnimation = 'm_out_bounce_right 0.8s 0.7s ease-in both';
    id('imgdiv51s').style.webkitAnimation = 'm_out_bounce_left 1s 0.5s ease-in both';
    id('imgdiv52s').style.webkitAnimation = 'm_out_bounce_right 1s 0.5s ease-in both';

    timeout10 = setTimeout(showin6,1800);
}

function  showin6 () 
{
    if(reshow == true)
        return;
    if(image_url_index == Onload_imgs_url.length)
        image_url_index = 0;
    m_set_Image('6');
    var img_bili = image_size_width[image_url_index]/image_size_height[image_url_index];
    if(img_bili >=1)
    {
        id('imgdiv6h').style.webkitAnimation = 'm_in_bounce_center 1s 0.5s ease-out both';
    }
    else
    {
        id('imgdiv6s').style.webkitAnimation = 'm_in_bounce_center 1s 0.5s ease-out both';
    }
    image_url_index++;
    id('m61').style.display = 'block';
    id('m62').style.display = 'block';
    id('m63').style.display = 'block';
    id('m_children').style.display = 'block';
    id('banana').style.display = 'block';

    var m_children = id('m_children');
    m_children.style.top = '45px';
    m_children.style.left = '5px';
    m_children.style.webkitTransform = 'rotate(-13deg)';
    m_children.style.webkitAnimation = 'm_children4 0.5s ease both';

    var banana = id('banana');
    banana.style.top = '182px';
    banana.style.left = '22px';
    banana.style.webkitTransform = 'rotate(-12.5deg)';
    banana.style.webkitAnimation = 'banana4 0.5s 0.3s ease both';

    var m61 = id('m61');
    m61.style.top = '626px';
    m61.style.left = '43px';

    var m62 = id('m62');
    m62.style.top = '174px';
    m62.style.left = '413px'; 

    var m63 = id('m63');
    m63.style.top = '540px';
    m63.style.left = '304px';

    id('m61').style.webkitAnimation = 'm_in_bounce_right 2s ease-out both';
    id('m62').style.webkitAnimation = 'm_in_bounce_left 2s ease-out both';

    id('m63').style.webkitAnimation = 'm63 0.7s ease-out both';

    timeout11 = setTimeout(showout6,5000)
}
function showout6 () 
{
    if(reshow == true)
        return;
    id('banana').style.webkitAnimation = 'banana4_out 0.5s 0.8s ease both';
    id('m_children').style.webkitAnimation = 'm_children4_out 0.5s 0.8s ease both';
    id('m61').style.webkitAnimation = 'm_out_bounce_left 1.5s ease-in both';
    id('m62').style.webkitAnimation = 'm_out_bounce_right 1.5s ease-in both';
    id('m63').style.webkitAnimation = 'm63_out 0.8s 0.5s ease both';
    id('imgdiv6h').style.webkitAnimation = 'm_out_bounce_center 0.8s 0.5s ease-in both';
    id('imgdiv6s').style.webkitAnimation = 'm_out_bounce_center 1s 1s ease-in both';
    timeout12 = setTimeout(showin1,1500);
}

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
var timeout7;
var timeout8;
var timeout9;
var timeout10;
var timeout11;
var timeout12;
var delaytime=4000;
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
    showtitle();
    begin_titletime = new Date();
    begin_titletime = begin_titletime.getTime();

    clearTimeout(timeout0);
    clearTimeout(timeout1);
    clearTimeout(timeout2);
    clearTimeout(timeout3);
    clearTimeout(timeout4);
    clearTimeout(timeout5);
    clearTimeout(timeout6);
    clearTimeout(timeout7);
    clearTimeout(timeout8);
    clearTimeout(timeout9);
    clearTimeout(timeout1);
    clearTimeout(timeout11);
    clearTimeout(timeout12);
    id('imgdiv1').style.display = 'none';
    id('imgdiv2s').style.display = 'none';
    id('imgdiv2h').style.display = 'none';
    id('imgdiv31h').style.display = 'none';
    id('imgdiv32h').style.display = 'none';
    id('imgdiv31s').style.display = 'none';
    id('imgdiv32s').style.display = 'none';
    id('imgdiv41h').style.display = 'none';
    id('imgdiv42h').style.display = 'none';
    id('imgdiv41s').style.display = 'none';
    id('imgdiv42s').style.display = 'none';
    id('imgdiv51h').style.display = 'none';
    id('imgdiv52h').style.display = 'none';
    id('imgdiv51s').style.display = 'none';
    id('imgdiv52s').style.display = 'none';
    id('imgdiv6h').style.display = 'none';
    id('imgdiv6s').style.display = 'none';
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
    if(index<10)
        have_num++;

    Onload_imgs_url[index]=img.src;
    image_size_width[index]=img.width;
    image_size_height[index]=img.height;

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
var imgdiv_width = {'1':'450','2':'432','31':'383','32':'313','41':'337','42':'270','51':'366','52':'290'}
var imgdiv_height = {'1':'475','2':'316','31':'280','32':'219','41':'229','42':'184','51':'268','52':'214'}
function  m_set_Image (boxindex) 
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
    if(boxindex == '1')
    {
        var img1 = id('img1');
        img1.src = Onload_imgs_url[image_url_index];
        m_cut_Image('img1',img_bili,450,475);
    }
    else if(boxindex == '6')
    {
        if(img_bili >=1)
        {
            id('imgdiv6h').style.display = 'block';
            id('imgdiv6s').style.display = 'none';
            var img1 = id('img6h');
            img1.src = Onload_imgs_url[image_url_index];
            m_cut_Image('img6h',img_bili,519,400);
        }
        else
        {
            id('imgdiv6s').style.display = 'block';
            id('imgdiv6h').style.display = 'none';
            var img1 = id('img6s');
            img1.src = Onload_imgs_url[image_url_index];
            m_cut_Image('img6s',img_bili,316,432)
        }        
    }
    else
    {
        
        if(img_bili >=1)
        {
            id('imgdiv'+boxindex+'h').style.display = 'block';
            id('imgdiv'+boxindex+'s').style.display = 'none';
            var img1 = id('img'+boxindex+'h');
            img1.src = Onload_imgs_url[image_url_index];
            m_cut_Image('img'+boxindex+'h',img_bili,imgdiv_width[boxindex],imgdiv_height[boxindex])
        }
        else
        {
            id('imgdiv'+boxindex+'s').style.display = 'block';
            id('imgdiv'+boxindex+'h').style.display = 'none';
            var img1 = id('img'+boxindex+'s');
            img1.src = Onload_imgs_url[image_url_index];
            m_cut_Image('img'+boxindex+'s',img_bili,imgdiv_height[boxindex],imgdiv_width[boxindex])
        }
    }
    console.log(img1.src);
    console.log(image_url_index);
}
function  m_cut_Image (imgid,img_bili,width,height) 
{
    if(reshow == true)
        return;
    var img = id(imgid);
    if(img_bili > (width/height))
    {
        img.style.height = height + 'px';
        img.style.width = height*img_bili +'px';
        img.style.top = '0px';
        img.style.left = -(height*img_bili-width)/2 +'px';
    }
    else
    {
        img.style.width = width +'px';
        img.style.height = width/img_bili +'px';
        img.style.left = '0px';
        img.style.top = -(width/img_bili-height)/2 +'px';
    }
}
call_me(load_images);
function reload_scene()
{
    reshow = true;
    id('titlecontent').innerHTML = '';
    id('pagetitle').style.webkitAnimation = '';
    setTimeout(function()
        {
            load_images();
        
        },100)
    
}
</script>