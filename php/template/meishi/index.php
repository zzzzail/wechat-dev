<?
$p=$_WEITE['web_pic_url']."meishi/";
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
#container > div,#container >img
{
    position: absolute;
}
#diaopai
{
/*    left: 49px;
    top: 0px;*/

    -webkit-transform: translate(-53px,-80px) rotate(45deg);
}
#foodword
{
    left: 172px;
    top: 18px;
}
#zhuobu
{
/*    left: 0px;
    top: 170px;*/

    -webkit-transform: translate(-612px,504px) rotate(-30deg);
}
#pan
{
/*    left: 7px;
    top: 202px;*/
    -webkit-transform: translate(-47px, -501px);
}
#kuaizi
{
/*    left: 251px;
    top: 394px;*/
    -webkit-transform: translate(251px,815px);
}
#shaozi
{
/*    left: 195px;
    top: 430px;*/
    -webkit-transform: translate(195px,845px);
}
#div1
{
    width: 561px;
    height: 561px;
    -webkit-transform: translate(163px,-463px) rotate(-30deg);
    -webkit-transform-origin: 0% 0%;
}
#qipao1,#qipao2,#pao1,#pao2
{
    -webkit-transform-origin: 80% 0%;
}
#qipao3,#pao3
{
    -webkit-transform-origin: 92% 4%;
}
#qipao4,#pao4
{
    -webkit-transform-origin: 100% 23%;
}
#qipao5,#pao5
{
    -webkit-transform-origin: 92% 4%;
}
#qipao6,#pao6
{
    -webkit-transform-origin: 78% 0.5%;
}
#div2
{
    width: 488px;
    height: 481px;
    -webkit-transform:translate(-586px,131px) rotate(73deg);
}
#daocha
{
    -webkit-transform: translate(325px,840px) rotate(41deg);
}
#div31
{
    width: 394px;
    height: 394px;
    -webkit-transform: translate(-500px,-5px) rotate(90deg);
}
#div32 
{
    width: 352px;
    height: 352px;
    -webkit-transform: translate(-461px,364px) rotate(90deg);
}
#div41
{
    width: 368px;
    height: 368px;
    -webkit-transform: translate(600px,51px) rotate(-90deg);
}
#div42
{
    width: 403px;
    height: 403px;
    -webkit-transform: translate(585px,293px) rotate(-101deg);
}
#div51
{
    width: 386px;
    height: 386px;
    -webkit-transform: translate(-406px,-117px) rotate(-360deg);
}
#div52
{
    width: 385px;
    height: 385px;
    -webkit-transform: translate(-406px,495px) rotate(-360deg);
}
#div6
{
    width: 515px;
    height: 515px;
    -webkit-transform: translate(-16px,168px) scale(2) rotate(-360deg);
    opacity: 0;

}
.paopao_ani
{
    -webkit-animation: paopao_ani 0.4s linear infinite alternate;
}
</style>
<style type="text/css">
@-webkit-keyframes paopao_ani 
{
    from {-webkit-transform: scale(1);}
    to   {-webkit-transform: scale(1.1);}
}
@-webkit-keyframes pan_in_0
{
    from {-webkit-transform: translate(-47px, -501px);}
    to   {-webkit-transform: translate(7px,199px);}
}

@-webkit-keyframes diaopai_in_0
{
    from  {-webkit-transform: translate(-53px,-80px) rotate(45deg);}
    to    {-webkit-transform: translate(48px,0px) rotate(0deg);}
}

@-webkit-keyframes zhuobu_in_0
{
    from {-webkit-transform: translate(-612px,504px) rotate(-30deg);}
    to   {-webkit-transform: translate(0px,167px) rotate(0deg);}
}
@-webkit-keyframes shaozi_in_0
{
    from {-webkit-transform: translate(195px,845px);}
    to   {-webkit-transform: translate(195px,430px);}
}
@-webkit-keyframes kuaizi_in_0
{
    from {-webkit-transform: translate(251px,815px);}
    to   {-webkit-transform: translate(251px,395px);}
}
@-webkit-keyframes foodword_in_0
{
    from  {-webkit-transform: translate(100px,0px);opacity: 0}
    to    {-webkit-transform: translate(0px,0px);opacity: 1}
}

@-webkit-keyframes zhuobu_in_1
{
    from  {-webkit-transform: translate(0px,167px) rotate(0deg);}
    to    {-webkit-transform: translate(-410px,318px) rotate(0deg);}
}
@-webkit-keyframes zhuobu_in_2
{
    from  {-webkit-transform: translate(-410px,318px) rotate(0deg);}
    to    {-webkit-transform: translate(120px,618px) rotate(-94deg)}
}
@-webkit-keyframes zhuobu_in_3
{
    from  {-webkit-transform: translate(120px,618px) rotate(-94deg)}
    to    {-webkit-transform: translate(304px,-43px) rotate(88deg)}
}
@-webkit-keyframes zhuobu_in_4
{
    from  {-webkit-transform: translate(304px,-43px) rotate(88deg);}
    to    {-webkit-transform: translate(-292px,-224px) rotate(88deg);}
}
@-webkit-keyframes zhuobu_in_5
{
    from  {-webkit-transform: translate(-292px,-224px) rotate(88deg);}
    to    {-webkit-transform: translate(-386px,184px) rotate(88deg)}
}
@-webkit-keyframes zhuobu_in_6
{
    from  {-webkit-transform: translate(-386px,184px) rotate(88deg)}
    to    {-webkit-transform: translate(274px,-175px) rotate(256deg);}
}
@-webkit-keyframes zhuobu_in_11
{
    from  {-webkit-transform: translate(274px,-175px) rotate(256deg);}
    to    {-webkit-transform: translate(-410px,318px) rotate(0deg);}
}
@-webkit-keyframes pan_in_1
{
    from  {-webkit-transform: translate(7px,199px);}
    to    {-webkit-transform: translate(288px,-243px);}
}
@-webkit-keyframes pan_in_2
{
    from {-webkit-transform: translate(288px,-243px);}
    to   {-webkit-transform: translate(270px,-178px);}
}
@-webkit-keyframes pan_in_3
{
    from  {-webkit-transform: translate(270px,-178px);}
    to    {-webkit-transform: translate(240px,-248px);}
}
@-webkit-keyframes pan_in_4
{
    from  {-webkit-transform: translate(240px,-248px);}
    to    {-webkit-transform: translate(-266px,-237px);}
}
@-webkit-keyframes pan_in_5
{
    from  {-webkit-transform: translate(-266px,-237px);}
    to    {-webkit-transform: translate(191px,-227px);}
}
@-webkit-keyframes pan_in_6
{
    from  {-webkit-transform: translate(191px,-227px);}
    to    {-webkit-transform: translate(310px, -171px);}
}
@-webkit-keyframes pan_in_11
{
    from  {-webkit-transform: translate(310px, -171px);}
    to    {-webkit-transform: translate(288px,-243px);}
}
@-webkit-keyframes shaozi_in_1
{
    from {-webkit-transform: translate(195px,430px);}
    to   {-webkit-transform: translate(374px,630px);}
}
@-webkit-keyframes shaozi_in_2
{
    from {-webkit-transform: translate(374px,630px);}
    to   {-webkit-transform: translate(524px,630px);}
}
@-webkit-keyframes shaozi_in_6
{
    from {-webkit-transform: translate(377px,616px);}
    to   {-webkit-transform: translate(374px,630px);}
}
@-webkit-keyframes kuaizi_in_6
{
    from {-webkit-transform: translate(433px,598px);}
    to   {-webkit-transform: translate(430px,611px);}
}
@-webkit-keyframes kuaizi_in_1
{
    from {-webkit-transform: translate(251px,395px);}
    to   {-webkit-transform: translate(430px,611px);}
}
@-webkit-keyframes kuaizi_in_2
{
    from {-webkit-transform: translate(430px,611px);}
    to   {-webkit-transform: translate(580px,611px);}
}
@-webkit-keyframes div_in_1
{
    from {-webkit-transform: translate(163px,-463px) rotate(-30deg) scale(1.42);}
    to   {-webkit-transform: translate(-25px,127px) rotate(0deg) scale(1);}
}
@-webkit-keyframes div_out_1
{
    from  {-webkit-transform: translate(-25px,127px) rotate(0deg) scale(1);}
    to    {-webkit-transform: translate(405px,-107px) rotate(-27deg) scale(1);}
}
@-webkit-keyframes qipao1_in
{
    0%    {-webkit-transform: translate(33px,592px) scale(0);opacity: 1}
    /*80%   {-webkit-transform: translate(33px,592px) scale(1.1);opacity: 1}*/
    100%  {-webkit-transform: translate(33px,592px) scale(1);opacity: 1}
}
@-webkit-keyframes qipao1_out
{
    100%    {-webkit-transform: translate(33px,592px) scale(0);opacity: 1}
/*    99%    {-webkit-transform: translate(33px,592px) scale(0.15);opacity: 1}
    20%   {-webkit-transform: translate(33px,592px) scale(1.1);opacity: 1}*/
    0%  {-webkit-transform: translate(33px,592px) scale(1);opacity: 1}
}
@-webkit-keyframes div_in_2
{
    from  {-webkit-transform: translate(-586px,131px) rotate(73deg);}
    to    {-webkit-transform: translate(14px,152px) rotate(0deg);}
}
@-webkit-keyframes div_out_2
{
    from  {-webkit-transform: translate(14px,152px) rotate(0deg);}
    to    {-webkit-transform: translate(608px,259px) rotate(-30deg);}
}
@-webkit-keyframes daocha_in_2
{
    from  {-webkit-transform: translate(325px,840px) rotate(41deg);}
    to    {-webkit-transform: translate(325px,648px) rotate(41deg);}
}
@-webkit-keyframes daocha_in_3
{
    0%   {-webkit-transform: translate(325px,648px) rotate(41deg);opacity: 1}
    30%  {-webkit-transform: translate(325px,815px) rotate(41deg);opacity: 1}
    33%  {-webkit-transform: translate(325px,815px) rotate(41deg);opacity: 0}
    34%  {-webkit-transform: translate(558px,256px) rotate(-11deg) scale(1.5);opacity: 0}
    35%  {-webkit-transform: translate(558px,256px) rotate(-11deg) scale(1.5);opacity: 1}
    100% {-webkit-transform: translate(385px,186px) rotate(-11deg) scale(1.5);opacity: 1}
}
@-webkit-keyframes qipao2_in
{
    0%   {-webkit-transform: translate(37px,535px) scale(0);opacity: 1}
    /*80%  {-webkit-transform: translate(37px,535px) scale(1.1);opacity: 1}*/
    100% {-webkit-transform: translate(37px,535px) scale(1);opacity: 1}
}
@-webkit-keyframes qipao2_out
{
    100%    {-webkit-transform: translate(37px,535px) scale(0);opacity: 1}
/*    99%    {-webkit-transform: translate(37px,535px) scale(0.15);opacity: 1}
    20%   {-webkit-transform: translate(37px,535px) scale(1.1);opacity: 1}*/
    0%  {-webkit-transform: translate(37px,535px) scale(1);opacity: 1}
}
@-webkit-keyframes div_in_31
{
    from {-webkit-transform: translate(-500px,-5px) rotate(90deg);}
    to   {-webkit-transform: translate(-30px,132px) rotate(0deg);}
}
@-webkit-keyframes div_in_32
{
    from  {-webkit-transform: translate(-461px,364px) rotate(90deg);}
    to    {-webkit-transform: translate(138px,364px) rotate(0deg);}
}
@-webkit-keyframes qipao3_in
{
    0%   {-webkit-transform: translate(32px,567px) scale(0);opacity: 1}
    /*80%  {-webkit-transform: translate(32px,567px) scale(1.1);opacity: 1}*/
    100% {-webkit-transform: translate(32px,567px) scale(1);opacity: 1}
}
@-webkit-keyframes qipao3_out
{
    100%    {-webkit-transform: translate(32px,567px) scale(0);opacity: 1}
/*    99%    {-webkit-transform: translate(32px,567px) scale(0.15);opacity: 1}
    20%   {-webkit-transform: translate(32px,567px) scale(1.1);opacity: 1}*/
    0%  {-webkit-transform: translate(32px,567px) scale(1);opacity: 1}
}
@-webkit-keyframes div_out_31
{
    to   {-webkit-transform: translate(-500px,-5px) rotate(90deg);}
    from {-webkit-transform: translate(-30px,132px) rotate(0deg);}  
}
@-webkit-keyframes div_out_32
{
    to    {-webkit-transform: translate(-461px,364px) rotate(90deg);}
    from  {-webkit-transform: translate(138px,364px) rotate(0deg);}  
}
@-webkit-keyframes shaozi_in_4
{
    from  {-webkit-transform: translate(377px,840px);}
    to    {-webkit-transform: translate(377px,616px);}
}
@-webkit-keyframes shaozi_in_5
{
    to    {-webkit-transform: translate(377px,840px);}
    from  {-webkit-transform: translate(377px,616px);}
}
@-webkit-keyframes kuaizi_in_4
{
    from  {-webkit-transform: translate(433px,815px);}
    to    {-webkit-transform: translate(433px,598px);}
}
@-webkit-keyframes kuaizi_in_5
{
    to    {-webkit-transform: translate(433px,815px);}
    from  {-webkit-transform: translate(433px,598px);}
}
@-webkit-keyframes div_in_41
{
    from  {-webkit-transform: translate(600px,51px) rotate(-90deg)}
    to    {-webkit-transform: translate(158px,135px) rotate(0deg);}
}
@-webkit-keyframes div_out_41
{
    from  {-webkit-transform: translate(158px,135px) rotate(0deg)}
    to    {-webkit-transform: translate(611px,180px) rotate(180deg);}
}
@-webkit-keyframes div_in_42
{
    from  {-webkit-transform: translate(585px,293px) rotate(-101deg)}
    to    {-webkit-transform: translate(-3px,329px) rotate(0deg);}
}
@-webkit-keyframes div_out_42
{
    from  {-webkit-transform: translate(-3px,329px) rotate(0deg);}
    to    {-webkit-transform: translate(637px,148px) rotate(177deg);}
}
@-webkit-keyframes qipao4_in
{
    0%   {-webkit-transform: translate(43px,262px) scale(0);opacity: 1}
    /*80%  {-webkit-transform: translate(43px,262px) scale(1.1);opacity: 1}*/
    100% {-webkit-transform: translate(43px,262px) scale(1);opacity: 1}
}
@-webkit-keyframes qipao4_out
{
    100%    {-webkit-transform: translate(43px,262px) scale(0);opacity: 1}
 /*   99%    {-webkit-transform: translate(43px,262px) scale(0.15);opacity: 1}
    20%   {-webkit-transform: translate(43px,262px) scale(1.1);opacity: 1}*/
    0%  {-webkit-transform: translate(43px,262px) scale(1);opacity: 1}
}
@-webkit-keyframes qipao5_in
{
    0%   {-webkit-transform: translate(14px,536px) scale(0);opacity: 1}
    /*80%  {-webkit-transform: translate(14px,536px) scale(1.1);opacity: 1}*/
    100% {-webkit-transform: translate(14px,536px) scale(1);opacity: 1}
}
@-webkit-keyframes qipao5_out
{
    100%    {-webkit-transform: translate(14px,536px) scale(0);opacity: 1}
/*    99%    {-webkit-transform: translate(14px,536px) scale(0.15);opacity: 1}
    20%   {-webkit-transform: translate(14px,536px) scale(1.1);opacity: 1}*/
    0%  {-webkit-transform: translate(14px,536px) scale(1);opacity: 1}
}
@-webkit-keyframes qipao6_in
{
    0%   {-webkit-transform: translate(37px,556px) scale(0);opacity: 1}
    /*80%  {-webkit-transform: translate(37px,556px) scale(1.1);opacity: 1}*/
    100% {-webkit-transform: translate(37px,556px) scale(1);opacity: 1}
}
@-webkit-keyframes qipao6_out
{
    100%    {-webkit-transform: translate(37px,556px) scale(0);opacity: 1}
/*    99%    {-webkit-transform: translate(37px,556px) scale(0.15);opacity: 1}
    20%   {-webkit-transform: translate(37px,556px) scale(1.1);opacity: 1}*/
    0%  {-webkit-transform: translate(37px,556px) scale(1);opacity: 1}
}
@-webkit-keyframes daocha_out
{
    from  {-webkit-transform: translate(385px,186px) rotate(-11deg) scale(1.5);opacity: 1}
    to    {-webkit-transform: translate(385px,186px) rotate(-11deg) scale(1.5);opacity: 0}
}
@-webkit-keyframes daocha_in_5
{
    from  {-webkit-transform: translate(-298px,306px) rotate(105deg);}
    to    {-webkit-transform: translate(-98px,266px) rotate(105deg);}
}
@-webkit-keyframes daocha_in_6
{
    to    {-webkit-transform: translate(-298px,306px) rotate(105deg);}
    from  {-webkit-transform: translate(-98px,266px) rotate(105deg);}
}
@-webkit-keyframes div_in_51
{
    from  {-webkit-transform: translate(-406px,-117px) rotate(-360deg);}
    to    {-webkit-transform: translate(84px,112px) rotate(0deg);}
}
@-webkit-keyframes div_in_52
{
    from  {-webkit-transform: translate(-406px,495px) rotate(-360deg);}
    to    {-webkit-transform: translate(107px,360px) rotate(0deg);}
}
@-webkit-keyframes div_out_51
{
    to    {-webkit-transform: translate(-606px,-117px) rotate(-180deg);}
    from  {-webkit-transform: translate(84px,112px) rotate(0deg);}
}
@-webkit-keyframes div_out_52
{
    to    {-webkit-transform: translate(-606px,495px) rotate(-180deg);}
    from  {-webkit-transform: translate(107px,360px) rotate(0deg);}
}
@-webkit-keyframes div_in_6
{
    from  {-webkit-transform: translate(-16px,168px) scale(2) rotate(-180deg);opacity: 0}
    to    {-webkit-transform: translate(-16px,168px) scale(1) rotate(0deg);opacity: 1}
}
@-webkit-keyframes div_out_6
{
    from {-webkit-transform: translate(-16px,168px) scale(1) rotate(0deg);opacity: 1}
    to   {-webkit-transform: translate(562px,352px) scale(1) rotate(0);opacity: 1}
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
</style>
<div id='container'>
    <img src='<?=$p?>images/bg.jpg' width='500' height='815'>

  

    <img id='diaopai' src='<?=$p?>images/diaopai.png'>
    

    <img id='zhuobu' src='<?=$p?>images/bu.png'>
    <img id='pan' src='<?=$p?>images/pan.png'>

    <div id='div1'>
        <div id='div1h' style='position:absolute;-webkit-transform: rotate(-12deg);display:none'>
            <div style='position:absolute;width:423px;height:344px;left:0px;top:110px;overflow:hidden'>
                <img id='img1h' style='position:absolute'>
            </div>
            <img src='<?=$p?>images/kuang.png' style='position:absolute;left:-22px;top:94px;'>
        </div>

        <div id='div1v' style='position:absolute;-webkit-transform: rotate(-7deg);display:none'>
            <div style='position:absolute;width:425px;height:490px;left:22px;top:17px;overflow:hidden;'>
                <img id='img1v' style='position:absolute'>
            </div>
            <img src='<?=$p?>images/kuang1.png' style='position:absolute;left:0px;top:0px'>
        </div>
    </div>

    <div id='div2'>
        <div id='div2h' style='position:absolute;display:none'>
            <div style='position:absolute;width:423px;height:344px;left:22px;top:17px;overflow:hidden'>
                <img id='img2h' style='position:absolute'>
            </div>
            <img src='<?=$p?>images/kuang.png' style='position:absolute;left:0px;top:0px'>
        </div>
        <div id='div2v' style='position:absolute;top:-50px;display:none'>
            <div style='position:absolute;width:425px;height:490px;left:22px;top:17px;overflow:hidden;'>
                <img id='img2v' style='position:absolute'>
            </div>
            <img src='<?=$p?>images/kuang1.png' style='position:absolute;left:0px;top:0px'>
        </div>
    </div>

    <div id='div31'>
        <div id='div31h' style='position:absolute;-webkit-transform: translate(6px,-11px) rotate(-10deg) scale(0.7);display:none'>
            <div style='position:absolute;width:423px;height:344px;left:-1px;top:110px;overflow:hidden'>
                <img id='img31h' style='position:absolute'>
            </div>
            <img src='<?=$p?>images/kuang.png' style='position:absolute;left:-22px;top:94px;'>
        </div>

        <div id='div31v' style='position:absolute;-webkit-transform: translate(-5px,-40px) rotate(-10deg) scale(0.7);display:none'>
            <div style='position:absolute;width:425px;height:490px;left:22px;top:17px;overflow:hidden;'>
                <img id='img31v' style='position:absolute'>
            </div>
            <img src='<?=$p?>images/kuang1.png' style='position:absolute;left:0px;top:0px'>
        </div>
    </div>

    <div id='div32'>
        <div id='div32h' style='position:absolute;-webkit-transform: translate(28px,-64px) rotate(1deg) scale(0.7);display:none'>
            <div style='position:absolute;width:423px;height:344px;left:-1px;top:110px;overflow:hidden'>
                <img id='img32h' style='position:absolute'>
            </div>
            <img src='<?=$p?>images/kuang.png' style='position:absolute;left:-22px;top:94px;'>
        </div>

        <div id='div32v' style='position:absolute;-webkit-transform: translate(27px,-73px) rotate(4deg) scale(0.7);display:none'>
            <div style='position:absolute;width:425px;height:490px;left:22px;top:17px;overflow:hidden;'>
                <img id='img32v' style='position:absolute'>
            </div>
            <img src='<?=$p?>images/kuang1.png' style='position:absolute;left:0px;top:0px'>
        </div>
    </div>

    <img id='daocha' src='<?=$p?>images/daocha.png' width='180'>

    <div id='div41'>
        <div id='div41h' style='position:absolute;-webkit-transform: translate(14px,-35px) rotate(-5deg) scale(0.7);display:none'>
            <div style='position:absolute;width:423px;height:344px;left:-1px;top:110px;overflow:hidden'>
                <img id='img41h' style='position:absolute'>
            </div>
            <img src='<?=$p?>images/kuang.png' style='position:absolute;left:-22px;top:94px;'>
        </div>

        <div id='div41v' style='position:absolute;-webkit-transform: translate(-2px,-57px) rotate(-4deg) scale(0.7);display:none'>
            <div style='position:absolute;width:425px;height:490px;left:22px;top:17px;overflow:hidden;'>
                <img id='img41v' style='position:absolute'>
            </div>
            <img src='<?=$p?>images/kuang1.png' style='position:absolute;left:0px;top:0px'>
        </div>
    </div>

    <div id='div42'>
        <div id='div42h' style='position:absolute;-webkit-transform: translate(4px,2px) rotate(-12deg) scale(0.7);display:none'>
            <div style='position:absolute;width:423px;height:344px;left:-1px;top:110px;overflow:hidden'>
                <img id='img42h' style='position:absolute'>
            </div>
            <img src='<?=$p?>images/kuang.png' style='position:absolute;left:-22px;top:94px;'>
        </div>

        <div id='div42v' style='position:absolute;-webkit-transform: translate(-17px,8px) rotate(-13deg) scale(0.7);display:none'>
            <div style='position:absolute;width:425px;height:490px;left:22px;top:17px;overflow:hidden;'>
                <img id='img42v' style='position:absolute'>
            </div>
            <img src='<?=$p?>images/kuang1.png' style='position:absolute;left:0px;top:0px'>
        </div>
    </div>

    <div id='div51'>
        <div id='div51h' style='position:absolute;-webkit-transform: translate(85px,-86px) rotate(9deg) scale(0.7);display:none'>
            <div style='position:absolute;width:423px;height:344px;left:-1px;top:110px;overflow:hidden'>
                <img id='img51h' style='position:absolute'>
            </div>
            <img src='<?=$p?>images/kuang.png' style='position:absolute;left:-22px;top:94px;'>
        </div>

        <div id='div51v' style='position:absolute;-webkit-transform: translate(59px,-82px) rotate(8deg) scale(0.7);display:none'>
            <div style='position:absolute;width:425px;height:490px;left:22px;top:17px;overflow:hidden;'>
                <img id='img51v' style='position:absolute'>
            </div>
            <img src='<?=$p?>images/kuang1.png' style='position:absolute;left:0px;top:0px'>
        </div>
    </div>

    <div id='div52'>
        <div id='div52h' style='position:absolute;-webkit-transform: translate(15px,-25px) rotate(-7deg) scale(0.7);display:none'>
            <div style='position:absolute;width:423px;height:344px;left:-1px;top:110px;overflow:hidden'>
                <img id='img52h' style='position:absolute'>
            </div>
            <img src='<?=$p?>images/kuang.png' style='position:absolute;left:-22px;top:94px;'>
        </div>

        <div id='div52v' style='position:absolute;-webkit-transform: translate(2px,15px) rotate(-6deg) scale(0.7);display:none'>
            <div style='position:absolute;width:425px;height:490px;left:22px;top:17px;overflow:hidden;'>
                <img id='img52v' style='position:absolute'>
            </div>
            <img src='<?=$p?>images/kuang1.png' style='position:absolute;left:0px;top:0px'>
        </div>
    </div>

    <div id='div6'>
        <div id='div6h' style='position:absolute;-webkit-transform: translate(102px,-108px) rotate(10deg) scale(.95);display:none'>
            <div style='position:absolute;width:423px;height:344px;left:3px;top:111px;overflow:hidden'>
                <img id='img6h' style='position:absolute'>
            </div>
            <img src='<?=$p?>images/kuang.png' style='position:absolute;left:-22px;top:94px;'>
        </div>

        <div id='div6v' style='position:absolute;-webkit-transform: translate(74px,-59px) rotate(5deg) scale(.9);display:none'>
            <div style='position:absolute;width:425px;height:490px;left:22px;top:17px;overflow:hidden;'>
                <img id='img6v' style='position:absolute'>
            </div>
            <img src='<?=$p?>images/kuang1.png' style='position:absolute;left:0px;top:0px'>
        </div>
    </div>


    <div id='qipao1' style='width:119px;height:126px;-webkit-transform: scale(0)'><img id='pao1' src='<?=$p?>images/qipao1.png' class='paopao_ani' style='position:absolute'></div>
    <div id='qipao2' style='width:119px;height:126px;-webkit-transform: scale(0)'><img id='pao2' src='<?=$p?>images/qipao2.png' class='paopao_ani' style='position:absolute'></div>
    <div id='qipao3' style='width:119px;height:119px;-webkit-transform: scale(0)'><img id='pao3' src='<?=$p?>images/qipao3.png' class='paopao_ani' style='position:absolute'></div>
    <div id='qipao4' style='width:129px;height:119px;-webkit-transform: scale(0)'><img id='pao4' src='<?=$p?>images/qipao4.png' class='paopao_ani' style='position:absolute'></div>
    <div id='qipao5' style='width:129px;height:119px;-webkit-transform: scale(0)'><img id='pao5' src='<?=$p?>images/qipao5.png' class='paopao_ani' style='position:absolute'></div>
    <div id='qipao6' style='width:124px;height:132px;-webkit-transform: scale(0)'><img id='pao6' src='<?=$p?>images/qipao6.png' class='paopao_ani' style='position:absolute'></div>


    <img id='kuaizi' src='<?=$p?>images/kuaizi.png'>
    <img id='shaozi' src='<?=$p?>images/shaozi.png'>
    

    <img id='foodword' src='<?=$p?>images/word.png'>

    <div id='pagetitle' style='position:absolute;width:350px;height:108px;top:283px;left:65px;font-size:30px;color:#953C1B;overflow:hidden;'>
        <div style='position:absolute;width:350px;height:108px;top:0px;left:0px;overflow:hidden;'>
            <div style='position:absolute;width:350px;height:108px;display:table;overflow:hidden;'>
                <div id='titlecontent' style='width:350px;height:108px;vertical-align:middle;display:table-cell;text-align:center;'></div>
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
var timeout6;
var timeout7;
var timeout8;
var delaytime = 5000;
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

    zhuobu = id('zhuobu');
    kuaizi = id('kuaizi');
    shaozi = id('shaozi');
    pan = id('pan');
    foodword = id('foodword');
    diaopai = id('diaopai');
    daocha = id('daocha');


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
function id(name)
{
    return document.getElementById(name);
}

function showtitle()
{
    id('titlecontent').innerHTML = e_desc;
    id('pagetitle').style.webkitAnimation = 'fadein 1s 1s linear both';

    show0();
}

function distitle()
{
    id('pagetitle').style.webkitAnimation = 'fadeout 1s linear both';
    timeout1 = setTimeout(show1,800);
}
function show0()
{
    zhuobu.style.webkitAnimation = 'zhuobu_in_0 1.2s cubic-bezier(.31,.34,.5,1) both';
    kuaizi.style.webkitAnimation = 'kuaizi_in_0 1.2s cubic-bezier(.31,.34,.5,1) both';
    shaozi.style.webkitAnimation = 'shaozi_in_0 1.2s cubic-bezier(.31,.34,.5,1) both';
    pan.style.webkitAnimation = 'pan_in_0 1.2s cubic-bezier(.31,.34,.5,1) both';
    foodword.style.webkitAnimation = 'foodword_in_0 1.2s cubic-bezier(.31,.34,.5,1) both';
    diaopai.style.webkitAnimation = 'diaopai_in_0 1.2s cubic-bezier(.31,.34,.5,1) both';

}

function show1()
{
    setImage('1');
    zhuobu.style.webkitAnimation = 'zhuobu_in_1 1.5s cubic-bezier(.28,-0.04,.5,1) both';
    kuaizi.style.webkitAnimation = 'kuaizi_in_1 1.5s cubic-bezier(.28,-0.04,.5,1) both';
    shaozi.style.webkitAnimation = 'shaozi_in_1 1.5s cubic-bezier(.28,-0.04,.5,1) both';
    pan.style.webkitAnimation = 'pan_in_1 1.5s cubic-bezier(.28,-0.04,.5,1) both';

    id('div1').style.webkitAnimation ='div_in_1 1.5s cubic-bezier(.28,-0.04,.5,1) both';

    id('qipao1').style.webkitAnimation = 'qipao1_in 0.5s 1.5s ease-in forwards';

    timeout2 = setTimeout(show2,4000)
}

function show2()
{
    setImage('2');
    id('qipao1').style.webkitAnimation = 'qipao1_out 0.5s ease-out both';
    shaozi.style.webkitAnimation = 'shaozi_in_2 1s 0.5s cubic-bezier(.28,-0.04,.5,1) both';
    kuaizi.style.webkitAnimation = 'kuaizi_in_2 1s 0.5s cubic-bezier(.28,-0.04,.5,1) both';
    zhuobu.style.webkitAnimation = 'zhuobu_in_2 1.5s 0.5s cubic-bezier(.28,-0.04,.5,1) both';
    pan.style.webkitAnimation = 'pan_in_2 1.5s 0.5s cubic-bezier(.28,-0.04,.5,1) both';
    id('div1').style.webkitAnimation = 'div_out_1 1.5s 0.5s cubic-bezier(.28,-0.04,.5,1) both';
    daocha.style.webkitAnimation = 'daocha_in_2 1.2s 1s cubic-bezier(.28,-0.04,.5,1) both';
    id('div2').style.webkitAnimation = 'div_in_2 1.5s 0.5s cubic-bezier(.28,-0.04,.5,1) both';

    id('qipao2').style.webkitAnimation = 'qipao2_in 0.5s 2s ease-in forwards';

    timeout3 = setTimeout(show3,4000);
}

function show3()
{
    setImage('31');
    setImage('32');
    id('qipao2').style.webkitAnimation = 'qipao2_out 0.5s ease-out both';
    id('div2').style.webkitAnimation = 'div_out_2 1.5s 0.5s cubic-bezier(.28,-0.04,.5,1) both';
    zhuobu.style.webkitAnimation = 'zhuobu_in_3 2s 0.5s cubic-bezier(.28,-0.04,.5,1) both';
    pan.style.webkitAnimation = 'pan_in_3 1.5s 0.5s cubic-bezier(.28,-0.04,.5,1) both';
    daocha.style.webkitAnimation = 'daocha_in_3 1.5s 0.5s cubic-bezier(.28,-0.04,.5,1) both';

    id('div31').style.webkitAnimation = 'div_in_31 1.5s 0.5s cubic-bezier(.28,-0.04,.5,1) both';
    id('div32').style.webkitAnimation = 'div_in_32 1.5s 0.7s cubic-bezier(.28,-0.04,.5,1) both';

    id('qipao3').style.webkitAnimation = 'qipao3_in 0.5s 2.2s ease-in forwards';

    timeout4 = setTimeout(show4,4000)
}
function show4()
{
    setImage('41');
    setImage('42');
    id('qipao3').style.webkitAnimation = 'qipao3_out 0.5s ease-out both';
    kuaizi.style.webkitAnimation = 'kuaizi_in_4 1.5s 0.5s cubic-bezier(.28,-0.04,.5,1) both';
    shaozi.style.webkitAnimation = 'shaozi_in_4 1.5s 0.5s cubic-bezier(.28,-0.04,.5,1) both';
    id('div31').style.webkitAnimation = 'div_out_31 1.5s 0.5s cubic-bezier(.28,-0.04,.5,1) both';
    id('div32').style.webkitAnimation = 'div_out_32 1.5s 0.5s cubic-bezier(.28,-0.04,.5,1) both';
    pan.style.webkitAnimation = 'pan_in_4 1.5s 0.5s cubic-bezier(.28,-0.04,.5,1) both';
    zhuobu.style.webkitAnimation = 'zhuobu_in_4 1.5s 0.5s cubic-bezier(.28,-0.04,.5,1) both';
    daocha.style.webkitAnimation = 'daocha_out 1s 0.7s linear both';

    id('div41').style.webkitAnimation = 'div_in_41 1.5s 0.5s cubic-bezier(.28,-0.04,.5,1) both';
    id('div42').style.webkitAnimation = 'div_in_42 1.5s 0.5s cubic-bezier(.28,-0.04,.5,1) both';


    id('qipao4').style.webkitAnimation = 'qipao4_in 0.5s 2s ease-in forwards';

    timeout5 = setTimeout(show5,4000)
}
function show5()
{
    setImage('51');
    setImage('52');
    id('qipao4').style.webkitAnimation = 'qipao4_out 0.5s ease-out both';
    kuaizi.style.webkitAnimation = 'kuaizi_in_5 1.5s 0.5s cubic-bezier(.28,-0.04,.5,1) both';
    shaozi.style.webkitAnimation = 'shaozi_in_5 1.5s 0.5s cubic-bezier(.28,-0.04,.5,1) both';
    id('div41').style.webkitAnimation = 'div_out_41 2s 0.5s cubic-bezier(.28,-0.04,.5,1) both';
    id('div42').style.webkitAnimation = 'div_out_42 2s 0.5s cubic-bezier(.28,-0.04,.5,1) both';
    pan.style.webkitAnimation = 'pan_in_5 1.5s 0.5s cubic-bezier(.28,-0.04,.5,1) both';
    zhuobu.style.webkitAnimation = 'zhuobu_in_5 1.5s 0.5s cubic-bezier(.28,-0.04,.5,1) both';
    daocha.style.webkitAnimation = 'daocha_in_5 1.5s 0.5s cubic-bezier(.28,-0.04,.5,1) both';

    id('div51').style.webkitAnimation = 'div_in_51 2s 0.5s cubic-bezier(.28,-0.04,.5,1) both';
    id('div52').style.webkitAnimation = 'div_in_52 2s 0.5s cubic-bezier(.28,-0.04,.5,1) both';

    id('qipao5').style.webkitAnimation = 'qipao5_in 0.5s 2.5s ease-in forwards';

    timeout6 = setTimeout(show6,4000)
}

function show6()
{
    setImage('6');
    id('qipao5').style.webkitAnimation = 'qipao5_out 0.5s ease-out both';

    kuaizi.style.webkitAnimation = 'kuaizi_in_4 1.5s 0.5s cubic-bezier(.28,-0.04,.5,1) both';
    shaozi.style.webkitAnimation = 'shaozi_in_4 1.5s 0.5s cubic-bezier(.28,-0.04,.5,1) both';
    daocha.style.webkitAnimation = 'daocha_in_6 1.5s 0.5s cubic-bezier(.28,-0.04,.5,1) both';
    id('div51').style.webkitAnimation = 'div_out_51 1.5s 0.5s cubic-bezier(.28,-0.04,.5,1) both';
    id('div52').style.webkitAnimation = 'div_out_52 1.5s 0.5s cubic-bezier(.28,-0.04,.5,1) both';
    pan.style.webkitAnimation = 'pan_in_6 1.5s 0.5s cubic-bezier(.28,-0.04,.5,1) both';
    zhuobu.style.webkitAnimation = 'zhuobu_in_6 1.5s 0.5s cubic-bezier(.28,-0.04,.5,1) both';

    id('div6').style.webkitAnimation = 'div_in_6 2s 0.5s ease-out both';

    id('qipao6').style.webkitAnimation = 'qipao6_in 0.5s 2.5s ease-in forwards';

    timeout7 = setTimeout(show1_1,4000)
}
function show1_1()
{
    setImage('1');
    id('qipao6').style.webkitAnimation = 'qipao6_out 0.5s ease-out both';
    pan.style.webkitAnimation = 'pan_in_11 1.5s 0.5s cubic-bezier(.28,-0.04,.5,1) both';
    zhuobu.style.webkitAnimation = 'zhuobu_in_11 1.5s 0.5s cubic-bezier(.28,-0.04,.5,1) both';
    id('div6').style.webkitAnimation = 'div_out_6 1.5s 0.5s cubic-bezier(.28,-0.04,.5,1) both';
    kuaizi.style.webkitAnimation = 'kuaizi_in_6 1.5s 0.5s cubic-bezier(.28,-0.04,.5,1) both';
    shaozi.style.webkitAnimation = 'shaozi_in_6 1.5s 0.5s cubic-bezier(.28,-0.04,.5,1) both';

    id('div1').style.webkitAnimation ='div_in_1 1.5s 0.5s cubic-bezier(.28,-0.04,.5,1) both';

    id('qipao1').style.webkitAnimation = 'qipao1_in 0.5s 2s ease-in forwards';

    timeout8 = setTimeout(show2,4000)
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
    var height;
    var width;

    if(img_bili > 1)
    {
        divname = idname + 'h';
        div = id('div'+idname+'h');
        div1 = id('div'+idname+'v');
        width = 423;
        height = 344;
    }
    else
    {
        divname = idname + 'v';
        div = id('div'+idname+'v');
        div1 = id('div'+idname+'h');
        width = 425;
        height = 490;
    }

    div.style.display = 'block';
    div1.style.display = 'none';


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
    if(image_url_index == Onload_imgs_url.length)
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

function clearnode()
{
    id('div1h').style.display = 'none';
    id('div1v').style.display = 'none';
    id('div2h').style.display = 'none';
    id('div2v').style.display = 'none';
    id('div31h').style.display = 'none';
    id('div31v').style.display = 'none';
    id('div41h').style.display = 'none';
    id('div41v').style.display = 'none';
    id('div32h').style.display = 'none';
    id('div32v').style.display = 'none';
    id('div42h').style.display = 'none';
    id('div42v').style.display = 'none';
    id('div51h').style.display = 'none';
    id('div52h').style.display = 'none';
    id('div51v').style.display = 'none';
    id('div52v').style.display = 'none';
    id('div6h').style.display = 'none';
    id('div6v').style.display = 'none';
    id('div1').style.webkitAnimation = '';
    id('div2').style.webkitAnimation = '';
    id('div31').style.webkitAnimation = '';
    id('div32').style.webkitAnimation = '';
    id('div41').style.webkitAnimation = '';
    id('div42').style.webkitAnimation = '';
    id('div51').style.webkitAnimation = '';
    id('div52').style.webkitAnimation = '';
    id('div6').style.webkitAnimation = '';
    pan.style.webkitAnimation = '';
    zhuobu.style.webkitAnimation = '';
    shaozi.style.webkitAnimation = '';
    kuaizi.style.webkitAnimation = '';
    daocha.style.webkitAnimation = '';
    id('qipao1').style.webkitAnimation = '';
    id('qipao2').style.webkitAnimation = '';
    id('qipao3').style.webkitAnimation = '';
    id('qipao4').style.webkitAnimation = '';
    id('qipao5').style.webkitAnimation = '';
    id('qipao6').style.webkitAnimation = '';
    diaopai.style.webkitAnimation = '';
    id('foodword').style.webkitAnimation = '';
    clearTimeout(timeout0);
    clearTimeout(timeout1);
    clearTimeout(timeout2);
    clearTimeout(timeout3);
    clearTimeout(timeout4);
    clearTimeout(timeout5);
    clearTimeout(timeout6);
    clearTimeout(timeout7);
    clearTimeout(timeout8);
}
</script>