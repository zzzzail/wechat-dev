<?
$p=$_WEITE['web_pic_url']."yuzhongmanhu/";
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
    background-color: #fff;
}

#container
{
    width: 500px;
    height: 815px;
    position: absolute;
    overflow: hidden;
}
#container>img, #container>div
{
    position: absolute;
}
#page1_1
{
    left: 29px;
    top: 571px;
    opacity: 0;
}
#page1_2
{
    left: 177px;
    top: 690px;
    opacity: 0;
}
#pagemask
{
    width: 500px;
    height: 815px;
    background-color: #fff;
    opacity: 0;
}
#page2,#page3,#page4,#page5,#page6
{
    left: 0px;
    width: 500px;
    height: 815px;
    top: 0px;
    opacity: 0;
}
#page2 > div,#page2 > img,#page1>div,#page1>img,#page3>div,#page3>img,#page4>div,#page4>img,#page5>div,#page5>img,#page6>div,#page6>img
{
    position: absolute;
}
#page2_1
{
    left: 0px;
    top: 0px;
    -webkit-transform-origin: 0% 50%;
}
#page2_2
{
    left: 0px;
    top: 489px;
    -webkit-transform-origin: 100% 100%;
}
#page2_3
{
    left: 22px;
    top: 560px;
}
#page2_4
{
    left: 87px;
    top: 630px;
}
#div2h
{
    left: 0px;
    top: 126px;
    width: 600px;
    height: 467px;
    /*overflow: hidden;*/
    display: none;
}
#div2v
{
    left: 0px;
    top: 126px;
    width: 500px;
    height: 600px;
    /*overflow: hidden;*/
    display: none;
}
#page3_1
{
    left: 88px;
    top: 623px
}
#page3_2
{
    left: 23px;
    top: 562px;
}
#page3_3
{
    left: 45px;
    top: 98px;
    width: 48px;
    height: 62px;
}
#page3_4
{
    left: 0px;
    top: -4px;
    -webkit-transform-origin: 0% 0%;
}
#page3_5
{
    left: 0px;
    top: 542px;
    -webkit-transform-origin: 100% 100%;
}
#div3h
{
    left: 0px;
    top: 122px;
    width: 600px;
    height: 470px;
    /*overflow: hidden;*/
    display: none;
}
#div3v
{
    left: 0px;
    top: 122px;
    width: 500px;
    height: 600px;
    /*overflow: hidden;*/
    display: none;
}
#kite
{
    position: absolute;
    left: 0px;
    top: 0px;
    -webkit-animation: kite_fly 2s linear infinite alternate;
}
#page4_1
{
    left: 8px;
    top: 146px;
}
#page4_2
{
    left: 135px;
    top: 706px;
}
#page4_3
{
    left: 0px;
    top: 0px;
}
#page4_4
{
    left: -5px;
    top: -9px;
}
#page4_5
{
    left: -4px;
    top: 610px;
}
#div4h
{
    left: -100px;
    top: 176px;
    width: 600px;
    height: 470px;
    /*overflow: hidden;*/
    display: none;
}
#div4v
{
    left: 0px;
    top: 46px;
    width: 500px;
    height: 600px;
    /*overflow: hidden;*/
    display: none;
}
#page5_1
{
    left: 370px;
    top: 616px;
}
#page5_2
{
    left: 390px;
    top: 543px;
}
#page5_3
{
    left: -3px;
    top: 489px;
}
#page5_4
{
    left: -4px;
    top: 0px;
}
#page5_5
{
    left: 0px;
    top: 0px;
}
#div5h
{
    left: 0px;
    top: 129px;
    width: 600px;
    height: 464px;
    /*overflow: hidden;*/
    display: none;
}
#div5v
{
    left: 0px;
    top: 129px;
    width: 500px;
    height: 600px;
    /*overflow: hidden;*/
    display: none;
}
#page6_1
{
    left: 99px;
    top: 605px;
}
#page6_2
{
    left: 22px;
    top: 538px;
}
#page6_3
{
    left: -3px;
    top: 495px;
}
#page6_4
{
    left: -5px;
    top: -7px;
}
#page6_5
{
    left: 0px;
    top: 0px;
}
#div6h
{
    left: 0px;
    top: 127px;
    width: 600px;
    height: 467px;
    /*overflow: hidden;*/
    display: none;
}
#div6v
{
    left: 0px;
    top: 127px;
    width: 500px;
    height: 600px;
    /*overflow: hidden;*/
    display: none;
}
</style>
<style type="text/css">
@-webkit-keyframes fadein_up
{
    from  {-webkit-transform: translate(0px,30px);opacity: 0}
    to    {-webkit-transform: translate(0px,0px);opacity: 1}
}
@-webkit-keyframes fadeout_up
{
    from  {-webkit-transform: translate(0px,0px);opacity: 1}
    to    {-webkit-transform: translate(0px,-30px);opacity: 0}
}
@-webkit-keyframes fadein_right
{
    from  {-webkit-transform: translate(-30px,0px);opacity: 0}
    to    {-webkit-transform: translate(0px,0px);opacity: 1}
}
@-webkit-keyframes fadein_down
{
    from  {-webkit-transform: translate(0px,-30px);opacity: 0}
    to    {-webkit-transform: translate(0px,0px);opacity: 1}
}
@-webkit-keyframes fadeout_down
{
    from  {-webkit-transform: translate(0px,0px);opacity: 1}
    to    {-webkit-transform: translate(0px,30px);opacity: 0}
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
@-webkit-keyframes page21_in
{
    from  {-webkit-transform: scale(1.05,1);}
    to    {-webkit-transform: scale(1,1);}
}
@-webkit-keyframes div_up
{
    from  {-webkit-transform: translate(0px,0px);}
    to    {-webkit-transform: translate(0px,-137px);}
}
@-webkit-keyframes div_left
{
    from  {-webkit-transform: translate(0px,0px);}
    to    {-webkit-transform: translate(-100px,0px);}
}
@-webkit-keyframes div_right
{
    from  {-webkit-transform: translate(0px,0px);}
    to    {-webkit-transform: translate(100px,0px);}
}
@-webkit-keyframes div_down
{
    from  {-webkit-transform: translate(0px,0px);}
    to    {-webkit-transform: translate(0px,137px);}
}
@-webkit-keyframes fadeinout
{
    0%   {opacity: 0}
    50%  {opacity: 1}
    100% {opacity: 0}
}
@-webkit-keyframes page2_out
{
    from  {-webkit-transform: scale(1);opacity: 1}
    to    {-webkit-transform: scale(1.05);opacity: 0}
}
@-webkit-keyframes page31_in
{
    from  {-webkit-transform: scale(1.3);opacity: 0}
    to    {-webkit-transform: scale(1);opacity: 1}
}
@-webkit-keyframes kite_fly
{
    from  {-webkit-transform: translate(0px,0px) rotate(0deg);}
    to    {-webkit-transform: translate(12px,-10px) rotate(20deg);}
}
@-webkit-keyframes div3v_in
{
    from  {-webkit-transform: translate(0px,0px);}
    to    {-webkit-transform: translate(0px,-130px);}
}
@-webkit-keyframes page35_out
{
    from  {-webkit-transform: translate(0px,0px);opacity: 1}
    to    {-webkit-transform: translate(0px,50px);opacity: 1}
}
@-webkit-keyframes page31_out
{
    from  {-webkit-transform: translate(0px,0px);opacity: 1}
    to    {-webkit-transform: translate(0px,-50px);opacity: 1}
}
@-webkit-keyframes page41_in
{
    0%    {-webkit-transform: scale(0.5);opacity: 0}
    70%   {-webkit-transform: scale(1.2);opacity: 1}
    100%  {-webkit-transform: scale(1);opacity: 1}
}
@-webkit-keyframes page45_in
{
    from  {-webkit-transform: translate(0px,30px);opacity: 1}
    to    {-webkit-transform: translate(0px,0px);opacity: 1}
}
@-webkit-keyframes div4v_in
{
    from  {-webkit-transform: translate(0px,0px);}
    to    {-webkit-transform: translate(0px,130px);}
}
@-webkit-keyframes page44_out
{
    from  {-webkit-transform: translate(0px,0px);}
    to    {-webkit-transform: translate(0px,-50px);}
}
@-webkit-keyframes page45_out
{
    from  {-webkit-transform: translate(0px,0px);}
    to    {-webkit-transform: translate(0px,50px);}
}
@-webkit-keyframes page41_out
{
    from  {-webkit-transform: scale(1);}
    to    {-webkit-transform: scale(1.2);}
}
@-webkit-keyframes page53_in
{
    from  {-webkit-transform: translate(0px,30px);}
    to    {-webkit-transform: translate(0px,0px);}
}
@-webkit-keyframes page54_in
{
    from  {-webkit-transform: translate(0px,-30px);}
    to    {-webkit-transform: translate(0px,0px);}
}
@-webkit-keyframes page51_in
{
    from  {-webkit-transform: translate(-20px,0px);opacity: 0}
    to    {-webkit-transform: translate(0px,0px);opacity: 1}
}
@-webkit-keyframes div5v_in
{
    from  {-webkit-transform: translate(0px,0px);}
    to    {-webkit-transform: translate(0px,-136px);}
}
@-webkit-keyframes page51_out
{
    from  {-webkit-transform: translate(0px,0px);opacity: 1}
    to    {-webkit-transform: translate(50px,0px);opacity: 0}
}
@-webkit-keyframes page61_in
{
    from  {-webkit-transform: translate(60px,0px);}
    to    {-webkit-transform: translate(0px,0px);}
}
@-webkit-keyframes div6v_in
{
    from  {-webkit-transform: translate(0px,0px);}
    to    {-webkit-transform: translate(0px,-133px);}
}
@-webkit-keyframes page61_out
{
    from  {-webkit-transform: translate(0px,0px);opacity: 1}
    to    {-webkit-transform: translate(-30px,0px);opacity: 0}
}
@-webkit-keyframes divh_inleft
{
    from  {-webkit-transform: translate(0px,0px);}
    to    {-webkit-transform: translate(-100px,0px);}
}
@-webkit-keyframes divh_inright
{
    from  {-webkit-transform: translate(0px,0px);}
    to    {-webkit-transform: translate(100px,0px);}
}
@-webkit-keyframes rainning
{
    from  {-webkit-transform: translate(0px,0px);}
    to    {-webkit-transform: translate(0px,1600px);}
}
@-webkit-keyframes rainning1
{
    from  {-webkit-transform: translate(0px,0px) scale(1,-1);}
    to    {-webkit-transform: translate(0px,1600px) scale(1,-1);}
}
@-webkit-keyframes snow1
{
    from  {-webkit-transform: translate(0px,0px);}
    to    {-webkit-transform: translate(-30px,0px);}
}
@-webkit-keyframes snow2
{
    from  {-webkit-transform: translate(0px,0px);}
    to    {-webkit-transform: translate(30px,20px);}
}
@-webkit-keyframes snow3
{
    from  {-webkit-transform: translate(0px,0px);}
    to    {-webkit-transform: translate(-20px,20px);}
}
@-webkit-keyframes snow4
{
    from  {-webkit-transform: translate(0px,0px);}
    to    {-webkit-transform: translate(-30px,0px);}
}
@-webkit-keyframes snowing
{
    0%  {-webkit-transform: translate(0px,0px);}
    100%{-webkit-transform: translate(-350px,700px);}
}
@-webkit-keyframes pugongying
{
    0%  {-webkit-transform: translate(0px,0px);opacity: 1}
    70% {-webkit-transform: translate(280px,-420px);opacity: 1}
    100%{-webkit-transform: translate(400px,-600px);opacity: 0}
}
@-webkit-keyframes yaopugongying
{
    from  {-webkit-transform: rotate(-20deg);}
    to    {-webkit-transform: rotate(20deg);}
}
@-webkit-keyframes light
{
    from  {opacity: 0.5}
    to    {opacity: 1}
}
@-webkit-keyframes jingling
{
    from  {-webkit-transform: translate(37px,34px) rotate(-25deg)}
    to    {-webkit-transform: translate(37px,34px) rotate(-60deg);}
}
@-webkit-keyframes jingling1
{
    from  {-webkit-transform: translate(49px,37px) rotate(-145deg);}
    to    {-webkit-transform: translate(49px,37px) rotate(-125deg);}
}
@-webkit-keyframes jinglingup
{
    from  {-webkit-transform: translate(0px,0px) rotate(40deg) scale(0.5);}
    to    {-webkit-transform: translate(0px,-50px) rotate(40deg) scale(0.5);}
}
@-webkit-keyframes jinglingdown
{
    from  {-webkit-transform: translate(0px,0px) rotate(40deg) scale(0.5);}
    to    {-webkit-transform: translate(0px,50px) rotate(40deg) scale(0.5);}
}
@-webkit-keyframes jinglingmoving
{
    from  {-webkit-transform: translate(0px,0px);}
    to    {-webkit-transform: translate(1100px,0px);}
}
</style>

<div id='container'>
    <div id='page1'>
        <img src='<?=$p?>images/01g.jpg'>
        <img id='page1_1' src='<?=$p?>images/011.png'>
        <img id='page1_2' src='<?=$p?>images/012.png'>

        <div id='pagetitle' style='position:absolute;width:400px;height:200px;top:264px;left:50px;font-size:36px;color:#fff;overflow:hidden;border:6px solid rgba(255,255,255,0.7)'>
            <div style='position:absolute;width:360px;height:150px;top:19px;left:17px;overflow:hidden;'>
                <div style='position:absolute;width:360px;height:150px;display:table;overflow:hidden;'>
                    <div id='titlecontent' style='width:360px;height:150px;vertical-align:middle;display:table-cell;text-align:center;line-height:50px;'></div>
                </div>
            </div>
        </div>
    </div>


    <div id='page2'>

        <div id='div2h'>
            <img id='img2h' style='position:absolute'>
        </div>
        <div id='div2v'>
            <img id='img2v' style='position:absolute'>
        </div>

        <img id='page2_1' src='<?=$p?>images/021.png'>
        <img id='page2_2' src='<?=$p?>images/022.png'>
        <img id='page2_3' src='<?=$p?>images/023.png'>
        <img id='page2_4' src='<?=$p?>images/024.png'>

        <img src='<?=$p?>images/rain.png' style='width:300px;height:800px;opacity:0.3;-webkit-animation: rainning 6s linear infinite'>
        <img src='<?=$p?>images/rain.png' style='width:300px;height:800px;left:300px;opacity:0.3;-webkit-animation: rainning 6s linear infinite'>
        <img src='<?=$p?>images/rain.png' style='width:300px;height:800px;opacity:0.3;top:-800px;-webkit-animation: rainning1 6s linear infinite;-webkit-transform: scale(1,-1);'>
        <img src='<?=$p?>images/rain.png' style='width:300px;height:800px;left:300px;top:-800px;opacity:0.3;-webkit-animation: rainning1 6s linear infinite;-webkit-transform: scale(1,-1)'>
        <img src='<?=$p?>images/rain.png' style='width:300px;height:800px;opacity:0.3;top:-1600px;-webkit-animation: rainning1 6s linear infinite;'>
        <img src='<?=$p?>images/rain.png' style='width:300px;height:800px;left:300px;top:-1600px;opacity:0.3;-webkit-animation: rainning1 6s linear infinite;'>

    </div>

    <div id='page3'>

        <div id='div3h'>
            <img id='img3h' style='position:absolute'>
        </div>
        <div id='div3v'>
            <img id='img3v' style='position:absolute'>
        </div>

        <img id='page3_4' src='<?=$p?>images/034.png'>
        <img id='page3_5' src='<?=$p?>images/035.png'>
        <img id='page3_1' src='<?=$p?>images/031.png'>
        <img id='page3_2' src='<?=$p?>images/032.png'>
        <div id='page3_3'>
            <img id='kite' src='<?=$p?>images/033.png'>
        </div>

        <div id='snow' style='top:-100px'>
            <img src='<?=$p?>images/snow.png' style='position:absolute;left:195px;top:195px;-webkit-animation: snow1 1.5s ease-in-out infinite alternate;'>
            <img src='<?=$p?>images/snow.png' style='position:absolute;left:311px;top:146px;-webkit-animation: snow2 1.5s ease-in-out infinite alternate;'>
            <img src='<?=$p?>images/snow.png' style='position:absolute;left:457px;top:168px;-webkit-animation: snow3 1.5s ease-in-out infinite alternate;'>
            <img src='<?=$p?>images/snow.png' style='position:absolute;left:372px;top:222px;-webkit-animation: snow4 1.5s ease-in-out infinite alternate;'>
        </div>
        
    </div>

    <div id='page5'>

        <div id='div5h'>
            <img id='img5h' style='position:absolute'>
        </div>
        <div id='div5v'>
            <img id='img5v' style='position:absolute'>
        </div>

        <img id='page5_3' src='<?=$p?>images/053.png'>
        <div id='page5_4'>
            <img src='<?=$p?>images/055.png' style='position:absolute;left: 35px;top: 109px;-webkit-animation: light 1s linear infinite alternate'>
            <img src='<?=$p?>images/055.png' style='position:absolute;left:435px;top:149px;-webkit-animation: light 1s linear 0.6s infinite alternate'>
            <img src='<?=$p?>images/055.png' style='position:absolute;left:-11px;top:180px;-webkit-animation: light 1s linear 0.3s infinite alternate'>
            <img src='<?=$p?>images/054.png' style='position:absolute'>
        </div>
        <img id='page5_1' src='<?=$p?>images/051.png'>
        <img id='page5_2' src='<?=$p?>images/052.png'>

    </div>

    <div id='page4'>

        <div id='div4h'>
            <img id='img4h' style='position:absolute'>
        </div>
        <div id='div4v'>
            <img id='img4v' style='position:absolute'>
        </div>

        <div id='pugongying' style='top:484px;left:-181px'>
            <img src='<?=$p?>images/043.png' style='position:absolute;left:195px;top:195px;--webkit-animation: snow1 2s ease-in-out infinite alternate;'>
            <img src='<?=$p?>images/043.png' style='position:absolute;left:311px;top:146px;-webkit-animation: snow2 2s ease-in-out infinite alternate;'>
            <img src='<?=$p?>images/043.png' style='position:absolute;left:457px;top:168px;-webkit-animation: snow3 2s ease-in-out infinite alternate;'>
            <img src='<?=$p?>images/043.png' style='position:absolute;left:372px;top:222px;-webkit-animation: snow4 2s ease-in-out infinite alternate;'>
        </div>

        <img id='page4_4' src='<?=$p?>images/044.png'>
        <img id='page4_5' src='<?=$p?>images/045.png'>
        <img id='page4_1' src='<?=$p?>images/041.png'>
        <img id='page4_2' src='<?=$p?>images/042.png'>


    </div>

    <div id='page6'>

        <div id='div6h'>
            <img id='img6h' style='position:absolute'>
        </div>
        <div id='div6v'>
            <img id='img6v' style='position:absolute'>

        </div>

        <img id='page6_3' src='<?=$p?>images/063.png'>
        <img id='page6_4' src='<?=$p?>images/064.png'>
        <img id='page6_1' src='<?=$p?>images/061.png'>
        <img id='page6_2' src='<?=$p?>images/062.png'>

        <div id='jingling' style='position:absolute;left:-350px;'>
           <div style='position:absolute;width:50px;height:50px;-webkit-transform: rotate(40deg) scale(0.7);left:-200px;top:251px;-webkit-animation: jinglingdown 0.8s linear infinite alternate'>
                <img src='<?=$p?>images/066.png' style='position:absolute;-webkit-transform: translate(49px,37px) rotate(-145deg);-webkit-transform-origin: 0% 50%;-webkit-animation: jingling1 0.2s linear infinite alternate'>
                <img src='<?=$p?>images/066.png' style='position:absolute;-webkit-transform: translate(43px,39px) rotate(-88deg);-webkit-transform-origin: 0% 50%;'>
                <img src='<?=$p?>images/066.png' style='position:absolute;-webkit-transform: translate(37px,34px) rotate(-25deg);-webkit-transform-origin: 0% 50%;-webkit-animation: jingling 0.2s linear infinite alternate'>
            </div>
           <div style='position:absolute;width:50px;height:50px;-webkit-transform: rotate(40deg) scale(0.7);left:-100px;top:451px;-webkit-animation: jinglingup 0.8s linear infinite alternate'>
                <img src='<?=$p?>images/066.png' style='position:absolute;-webkit-transform: translate(49px,37px) rotate(-145deg);-webkit-transform-origin: 0% 50%;-webkit-animation: jingling1 0.2s linear infinite alternate'>
                <img src='<?=$p?>images/066.png' style='position:absolute;-webkit-transform: translate(43px,39px) rotate(-88deg);-webkit-transform-origin: 0% 50%;'>
                <img src='<?=$p?>images/066.png' style='position:absolute;-webkit-transform: translate(37px,34px) rotate(-25deg);-webkit-transform-origin: 0% 50%;-webkit-animation: jingling 0.2s linear infinite alternate'>
            </div>
           <div style='position:absolute;width:50px;height:50px;-webkit-transform: rotate(40deg) scale(0.7);left:20px;top:325px;-webkit-animation: jinglingdown 0.8s linear infinite alternate'>
                <img src='<?=$p?>images/066.png' style='position:absolute;-webkit-transform: translate(49px,37px) rotate(-145deg);-webkit-transform-origin: 0% 50%;-webkit-animation: jingling1 0.2s linear infinite alternate'>
                <img src='<?=$p?>images/066.png' style='position:absolute;-webkit-transform: translate(43px,39px) rotate(-88deg);-webkit-transform-origin: 0% 50%;'>
                <img src='<?=$p?>images/066.png' style='position:absolute;-webkit-transform: translate(37px,34px) rotate(-25deg);-webkit-transform-origin: 0% 50%;-webkit-animation: jingling 0.2s linear infinite alternate'>
            </div>
           <div style='position:absolute;width:50px;height:50px;-webkit-transform: rotate(40deg) scale(0.7);left:218px;top:307px;-webkit-animation: jinglingup 0.8s linear infinite alternate'>
                <img src='<?=$p?>images/066.png' style='position:absolute;-webkit-transform: translate(49px,37px) rotate(-145deg);-webkit-transform-origin: 0% 50%;-webkit-animation: jingling1 0.2s linear infinite alternate'>
                <img src='<?=$p?>images/066.png' style='position:absolute;-webkit-transform: translate(43px,39px) rotate(-88deg);-webkit-transform-origin: 0% 50%;'>
                <img src='<?=$p?>images/066.png' style='position:absolute;-webkit-transform: translate(37px,34px) rotate(-25deg);-webkit-transform-origin: 0% 50%;-webkit-animation: jingling 0.2s linear infinite alternate'>
            </div>
           <div style='position:absolute;width:50px;height:50px;-webkit-transform: rotate(40deg) scale(0.7);left:271px;top:428px;-webkit-animation: jinglingdown 0.8s linear infinite alternate'>
                <img src='<?=$p?>images/066.png' style='position:absolute;-webkit-transform: translate(49px,37px) rotate(-145deg);-webkit-transform-origin: 0% 50%;-webkit-animation: jingling1 0.2s linear infinite alternate'>
                <img src='<?=$p?>images/066.png' style='position:absolute;-webkit-transform: translate(43px,39px) rotate(-88deg);-webkit-transform-origin: 0% 50%;'>
                <img src='<?=$p?>images/066.png' style='position:absolute;-webkit-transform: translate(37px,34px) rotate(-25deg);-webkit-transform-origin: 0% 50%;-webkit-animation: jingling 0.2s linear infinite alternate'>
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
var delaytime=5000;
var type_before = 0;
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
        img.onerror = image_onerror;
        img.onload=image_onload;
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
    if((have_num >= 10 || slider_images_url.length == (have_num+error_num)) && canshow == true)
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
    if(index < 18)
    {
        have_num++;
    }
    Onload_imgs_url[index] = img.src;
    image_size_height[index] = img.height;
    image_size_width[index] = img.width;

    if((have_num +error_num >= 10 || slider_images_url.length == (have_num+error_num)) && canshow == true)
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
    id('pagetitle').style.webkitAnimation = 'fadein_down 1s ease-out both';
    id('page1_1').style.webkitAnimation = 'fadein_right 1s ease-out both';
    id('page1_2').style.webkitAnimation = 'fadein_up 1s ease-out both';

}
function distitle()
{
    id('pagetitle').style.webkitAnimation = 'fadeout_up 1s ease-in both';
    id('page1_2').style.webkitAnimation = 'fadeout_down 1s ease-in both';
    id('page1').style.webkitAnimation = 'fadeout 0.8s linear both';

    timeout1 = setTimeout(show1,800)
}

function show1()
{
    setImage('2');
    id('page2').style.webkitAnimation = 'fadein 0.6s ease-in both';
    id('page2_1').style.webkitAnimation = 'page21_in 1s ease-out both';
    id('page2_2').style.webkitAnimation = 'page21_in 1s ease-out both';
    id('page2_3').style.webkitAnimation = 'fadein_down 1s 0.5s ease-out both';
    id('page2_4').style.webkitAnimation = 'fadein_up 1s 0.5s ease-out both';
    id('div2v').style.webkitAnimation = 'div_up 8s cubic-bezier(.13,.24,.6,.97) both';
    id('div2h').style.webkitAnimation = 'divh_inleft 8s cubic-bezier(.13,.24,.6,.97) both';

    id('page3_4').style.webkitAnimation = '';
    id('page3_5').style.webkitAnimation = '';
    id('page3_3').style.webkitAnimation = '';
    id('page3_1').style.webkitAnimation = '';
    id('page3_2').style.webkitAnimation = '';
    id('div3v').style.webkitAnimation = '';
    id('div3h').style.webkitAnimation = '';
    id('snow').style.webkitAnimation = '';

    timeout2 = setTimeout(show2,7000)
}
function show2()
{
    setImage('3');
    id('page2').style.webkitAnimation = 'page2_out 0.5s linear both';
    id('page3').style.webkitAnimation = 'fadein 0.5s 0.5s linear both';
    id('page3_4').style.webkitAnimation = 'page21_in 1s 0.5s ease-out both';
    id('page3_5').style.webkitAnimation = 'page21_in 1s 0.5s ease-out both';
    id('page3_3').style.webkitAnimation = 'fadein 1s 0.5s linear both';
    id('page3_1').style.webkitAnimation = 'page31_in 1s 0.7s ease-out both';
    id('page3_2').style.webkitAnimation = 'page31_in 1s 0.9s ease-out both';
    id('div3v').style.webkitAnimation = 'div3v_in 8s 0.5s cubic-bezier(.13,.24,.6,.97) both';
    id('div3h').style.webkitAnimation = 'divh_inleft 8s 0.5s cubic-bezier(.13,.24,.6,.97) both';
    id('snow').style.webkitAnimation = 'snowing 10s linear both';

    // id('page4').style.webkitAnimation = '';
    id('page4_1').style.webkitAnimation = '';
    id('page4_2').style.webkitAnimation = '';
    id('page4_5').style.webkitAnimation = '';
    id('div4v').style.webkitAnimation = '';
    id('div4h').style.webkitAnimation = '';
    id('pugongying').style.webkitAnimation = '';
    id('page4_4').style.webkitAnimation = '';

    timeout3 = setTimeout(show3,7000)
}
function show3()
{
    setImage('4');
    id('page3').style.webkitAnimation = 'fadeout 0.5s linear both';
    id('page3_5').style.webkitAnimation = 'page35_out 0.8s linear both';
    id('page3_1').style.webkitAnimation = 'page31_out 0.8s linear both';
    id('page3_2').style.webkitAnimation = 'page31_out 0.8s linear both';

    id('page4').style.webkitAnimation = 'fadein 0.6s 0.5s linear both';
    id('page4_1').style.webkitAnimation = 'page41_in 1s 0.8s linear both';
    id('page4_2').style.webkitAnimation = 'page41_in 1s 0.8s linear both';
    id('page4_5').style.webkitAnimation = 'page45_in 1s ease-out both';
    id('div4v').style.webkitAnimation = 'div4v_in 8s 0.5s cubic-bezier(.13,.24,.6,.97) both';
    id('div4h').style.webkitAnimation = 'divh_inright 8s 0.5s cubic-bezier(.13,.24,.6,.97) both';
    id('pugongying').style.webkitAnimation = 'pugongying 10s linear both';

    id('page5').style.webkitAnimation = '';
    id('page5_3').style.webkitAnimation = '';
    id('page5_4').style.webkitAnimation = '';
    id('page5_2').style.webkitAnimation = '';
    id('page5_1').style.webkitAnimation = '';
    id('div5v').style.webkitAnimation = '';
    id('div5h').style.webkitAnimation = '';

    timeout4 = setTimeout(show4,7000)
}
function show4()
{
    setImage('5');
    id('page4').style.webkitAnimation = 'fadeout 0.5s linear both';
    id('page4_5').style.webkitAnimation = 'page45_out 0.8s linear both';
    id('page4_4').style.webkitAnimation = 'page44_out 0.8s linear both';
    id('page4_1').style.webkitAnimation = 'page41_out 0.8s linear both';
    id('page4_2').style.webkitAnimation = 'page41_out 0.8s linear both';

    id('page5').style.webkitAnimation = 'fadein 0.6s 0.5s linear both';
    id('page5_3').style.webkitAnimation = 'page53_in 1s 0.5s ease-out both';
    id('page5_4').style.webkitAnimation = 'page54_in 1s 0.5s ease-out both';
    id('page5_2').style.webkitAnimation = 'page51_in 1s 0.8s ease-out both';
    id('page5_1').style.webkitAnimation = 'page51_in 1s 1s ease-out both';
    id('div5v').style.webkitAnimation = 'div5v_in 8s 0.5s cubic-bezier(.13,.24,.6,.97) both';
    id('div5h').style.webkitAnimation = 'divh_inleft 8s 0.5s cubic-bezier(.13,.24,.6,.97) both';

    id('page6').style.webkitAnimation = '';
    id('page6_1').style.webkitAnimation = '';
    id('page6_2').style.webkitAnimation = '';
    id('div6v').style.webkitAnimation = '';
    id('div6h').style.webkitAnimation = '';
    id('jingling').style.webkitAnimation = '';

    timeout5 = setTimeout(show5,7000)
}
function show5()
{
    setImage('6');
    id('page5_2').style.webkitAnimation = 'page51_out 1s ease-in both';
    id('page5_1').style.webkitAnimation = 'page51_out 1s 0.2s ease-in both';
    id('page5').style.webkitAnimation = 'fadeout 0.8s 0.8s linear both';

    id('page6').style.webkitAnimation = 'fadein 1s 1.5s linear both';
    id('page6_1').style.webkitAnimation = 'page61_in 1.5s 1.5s ease-out both';
    id('page6_2').style.webkitAnimation = 'page61_in 1.5s 1.3s ease-out both';
    id('div6v').style.webkitAnimation = 'div5v_in 8s 0.5s cubic-bezier(.13,.24,.6,.97) both';
    id('div6h').style.webkitAnimation = 'divh_inleft 8s 0.5s cubic-bezier(.13,.24,.6,.97) both';
    id('jingling').style.webkitAnimation = 'jinglingmoving 10s linear both';
    
    id('page2').style.webkitAnimation = '';
    id('page2_1').style.webkitAnimation = '';
    id('page2_2').style.webkitAnimation = '';
    id('page2_3').style.webkitAnimation = '';
    id('page2_4').style.webkitAnimation = '';
    id('div2v').style.webkitAnimation = '';
    id('div2h').style.webkitAnimation = '';

    timeout6 = setTimeout(show11,7000)
}
function show11()
{
    setImage('2');
    id('page6_2').style.webkitAnimation = 'page61_out 1s ease-in both';
    id('page6_1').style.webkitAnimation = 'page61_out 1s 0.2s ease-in both';
    id('page6').style.webkitAnimation = 'fadeout 1s 0.5s linear both';

    id('page2').style.webkitAnimation = 'fadein 0.6s 1.2s ease-in both';
    id('page2_1').style.webkitAnimation = 'page21_in 1s 1.2s ease-out both';
    id('page2_2').style.webkitAnimation = 'page21_in 1s 1.2s ease-out both';
    id('page2_3').style.webkitAnimation = 'fadein_down 1s 1.7s ease-out both';
    id('page2_4').style.webkitAnimation = 'fadein_up 1s 1.7s ease-out both';
    id('div2v').style.webkitAnimation = 'div_up 8s 1.5s cubic-bezier(.13,.24,.6,.97) both';

    id('page3_4').style.webkitAnimation = '';
    id('page3_5').style.webkitAnimation = '';
    id('page3_3').style.webkitAnimation = '';
    id('page3_1').style.webkitAnimation = '';
    id('page3_2').style.webkitAnimation = '';
    id('div3v').style.webkitAnimation = '';
    id('div3h').style.webkitAnimation = '';
    id('snow').style.webkitAnimation = '';

    timeout7 = setTimeout(show2,8000)
}
var divwidth = {'2h':600,'2v':500,'3h':600,'3v':500,'4h':600,'4v':500,'5h':600,'5v':500,'6h':600,'6v':500};
var divheight = {'2h':467,'2v':600,'3h':470,'3v':600,'4h':470,'4v':600,'5h':464,'5v':600,'6h':467,'6v':600};

function setImage(idname)
{
    if(reshow == true)
        return;
    if(image_url_index == Onload_imgs_url.length)
        image_url_index = 0;

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
    id('page1').style.webkitAnimation = '';
    id('page2').style.webkitAnimation = '';
    id('page3').style.webkitAnimation = '';
    id('page4').style.webkitAnimation = '';
    id('page5').style.webkitAnimation = '';
    id('page6').style.webkitAnimation = '';
    id('page3_4').style.webkitAnimation = '';
    id('page3_5').style.webkitAnimation = '';
    id('page3_3').style.webkitAnimation = '';
    id('page3_1').style.webkitAnimation = '';
    id('page3_2').style.webkitAnimation = '';
    id('div3v').style.webkitAnimation = '';
    id('div3h').style.webkitAnimation = '';
    id('snow').style.webkitAnimation = ''; 
    id('page4_1').style.webkitAnimation = '';
    id('page4_2').style.webkitAnimation = '';
    id('page4_5').style.webkitAnimation = '';
    id('div4v').style.webkitAnimation = '';
    id('div4h').style.webkitAnimation = '';
    id('pugongying').style.webkitAnimation = '';
    id('page4_4').style.webkitAnimation = '';
    id('page5').style.webkitAnimation = '';
    id('page5_3').style.webkitAnimation = '';
    id('page5_4').style.webkitAnimation = '';
    id('page5_2').style.webkitAnimation = '';
    id('page5_1').style.webkitAnimation = '';
    id('div5v').style.webkitAnimation = '';
    id('div5h').style.webkitAnimation = '';
    id('page6').style.webkitAnimation = '';
    id('page6_1').style.webkitAnimation = '';
    id('page6_2').style.webkitAnimation = '';
    id('div6v').style.webkitAnimation = '';
    id('div6h').style.webkitAnimation = '';
    id('jingling').style.webkitAnimation = '';
    id('page2_1').style.webkitAnimation = '';
    id('page2_2').style.webkitAnimation = '';
    id('page2_3').style.webkitAnimation = '';
    id('page2_4').style.webkitAnimation = '';
    id('div2v').style.webkitAnimation = '';
    id('div2h').style.webkitAnimation = '';
    id('titlecontent').innerHTML = '';
    id('pagetitle').style.webkitAnimation = '';
    id('page1_1').style.webkitAnimation = '';
    id('page1_2').style.webkitAnimation = '';
    clearTimeout(timeout0);
    clearTimeout(timeout1);
    clearTimeout(timeout2);
    clearTimeout(timeout3);
    clearTimeout(timeout4);
    clearTimeout(timeout5);
    clearTimeout(timeout6);
    clearTimeout(timeout7);
}
</script>


