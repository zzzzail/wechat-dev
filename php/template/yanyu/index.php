<?
$p=$_WEITE['web_pic_url']."yanyu/";
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
#container>div,#container > img 
{
    position: absolute;
}
#shuzhi
{
    left: 175px;
    top: 35px;
    -webkit-transform-origin: 100% 90%;
    -webkit-animation: shuzhi 3s linear infinite alternate;
    -webkit-transform: rotate(-5deg);
    width: 337px;
    height: 131px;
}
#san
{
    -webkit-transform: scale(.5);
    left: 100px;
    top: 110px;
    width: 300px;
    height: 300px;
    position: absolute;
}
#yun1
{
    left: -500px;
    top: -300px;
    -webkit-animation: yun1 40s linear infinite;
    opacity: 0;
}
#yun2
{
    left: -303px;
    top: 232px;
    -webkit-animation: yun1 25s 1s linear infinite;
    opacity: 0;
}
#yun3
{
    left: -437px;
    top: 308px;
    -webkit-animation: yun1 22s 7s linear infinite;
    opacity: 0;
}
#dian
{
    left: 127px;
    top: 125px;
    position: absolute;
}
#yusan
{
    position: absolute;
    -webkit-animation: yusan 15s linear infinite;
}
#wordbg
{
    left: 28px;
    top: 60px;
    -webkit-transform: scale(0.6);
    position: absolute;
    opacity: 0;
    width: 444px;
    height: 706px;
}
#worddiv
{
    width: 500px;
    height: 300px;
    overflow: hidden;
}
#div1h
{
/*    left: 32px;
    top: 253px;
    width: 436px;
    height: 300px;
    border-top: 5px solid #fff;
    border-bottom: 5px solid #fff;
    overflow: hidden;
*/}
.divh
{
    left: 32px;
    top: 253px;
    width: 436px;
    height: 300px;
    border-top: 7px solid #fff;
    border-bottom: 7px solid #fff;
    overflow: hidden;
    /*opacity: 0.3;*/
    opacity: 0;
    position: absolute;
}
.mask1_1h
{
    left: -350px;
    top: 253px;
    width: 350px;
    height: 300px;
    border-top: 7px solid #fff;
    border-bottom: 7px solid #fff;
    overflow: hidden;
    /*background-color: #fff;*/
    position: absolute;
}
.mask1_2h
{
    left: 436px;
    top: 253px;
    width: 350px;
    height: 300px;
    border-top: 7px solid #fff;
    border-bottom: 7px solid #fff;
    overflow: hidden;
    /*background-color: #fff;*/
    position: absolute;
}
.mask1_1v
{
    left: 0px;
    top: 555px;
    width: 370px;
    height: 400px;
    border-left: 5px solid #fff;
    border-right: 5px solid #fff;
    overflow: hidden;
    background-color: #fff;
    position: absolute;
}
.mask1_2v
{
    left: 0px;
    top: -400px;
    width: 370px;
    height: 400px;
    border-left: 5px solid #fff;
    border-right: 5px solid #fff;
    overflow: hidden;
    background-color: #fff;
    position: absolute;
}
.mask2_1h
{
    left: -436px;
    top: 253px;
    width: 436px;
    height: 300px;
    border-top: 7px solid #fff;
    border-bottom: 7px solid #fff;
    overflow: hidden;
    /*background-color: #fff;*/
    position: absolute;
}
.mask2_2h
{
    left: 436px;
    top: 253px;
    width: 436px;
    height: 300px;
    border-top: 7px solid #fff;
    border-bottom: 7px solid #fff;
    overflow: hidden;
    /*background-color: #fff;*/
    position: absolute;
}
.mask2_1v
{
    left: 0px;
    top: 555px;
    width: 370px;
    height: 555px;
    border-left: 5px solid #fff;
    border-right: 5px solid #fff;
    border-bottom: 5px solid #fff;
    overflow: hidden;
    /*background-color: #fff;*/
    position: absolute;
}
.mask2_2v
{
    left: 0px;
    top: -555px;
    width: 370px;
    height: 555px;
    border-left: 5px solid #fff;
    border-right: 5px solid #fff;
    border-top: 5px solid #fff;
    overflow: hidden;
    /*background-color: #fff;*/
    position: absolute;
}
.maskimg1_1h
{
    left: 350px;
    position: absolute;
    opacity: 0.7;
}
.maskimg1_2h
{
    left: -436px;
    position: absolute;
    opacity: 0.7;
}
.maskimg1_1v
{
    top: -555px;
    left: -5px;
    position: absolute;
    width: 370px;
    height: 400px;
    border-left: 5px solid #fff;
    border-right: 5px solid #fff;
    opacity: 0.7;
}
.maskimg1_2v
{
    top: 400px;
    left: -5px;
    position: absolute;
    width: 370px;
    height: 400px;
    border-left: 5px solid #fff;
    border-right: 5px solid #fff;
    opacity: 0.7;
}
.maskimg2_1h
{
    left: 436px;
    position: absolute;
    opacity: 1;
}
.maskimg2_2h
{
    left: -436px;
    position: absolute;
    opacity: 1;
}
.maskimg2_1v
{
    top: -555px;
    left: -5px;
    position: absolute;
    width: 370px;
    height: 555px;
    border-left: 5px solid #fff;
    border-right: 5px solid #fff;
    opacity: 1;
}
.maskimg2_2v
{
    top: 555px;
    left: -5px;
    position: absolute;
    width: 370px;
    height: 555px;
    border-left: 5px solid #fff;
    border-right: 5px solid #fff;
    opacity: 1;
}
.divv
{
    left: 65px;
    top: 130px;
    width: 370px;
    height: 555px;
    border: 5px solid #fff;
    background-color: #fff;
    overflow: hidden;
    opacity: 0;
    position: absolute;
}
#jiantou1h
{
    left: -500px;
    top: 0px;
    position: absolute;
    opacity: 0.3;
}
#jiantou2h
{
    left: 500px;
    position: absolute;
    top: 0px;
    opacity: 0.3;
    -webkit-transform: scale(-1,1);
}
#jiantou1v
{
    position: absolute;
    top: 667px;
    -webkit-transform: rotate(-90deg);
    height: 365px;
    left: -114px;
    opacity: 0.3;
}
#jiantou2v
{
    position: absolute;
    top: -483px;
    -webkit-transform: rotate(90deg);
    height: 365px;
    left: -114px;
    opacity: 0.3;
}
#huaban
{
    position: absolute;
    left: -1px;
    top: 10px;
    -webkit-animation: flower 10s linear infinite
}
</style>
<style type="text/css">
@-webkit-keyframes shuzhi
{
    from  {-webkit-transform: rotate(-4deg);}
    to    {-webkit-transform: rotate(1deg);}
}
@-webkit-keyframes yun1
{
    0%  {-webkit-transform: translate(0px,0px);opacity: 0}
    15% {-webkit-transform: translate(168px,0px);opacity: 1}
    85% {-webkit-transform: translate(952px,0px);opacity: 1}
    100%{-webkit-transform: translate(1120px);opacity: 0}
}
@-webkit-keyframes san_in
{
    0%  {-webkit-transform: scale(0.5);}
    33% {-webkit-transform: scale(1);}
    100%{-webkit-transform: translate(0px,370px) scale(1);}
}
@-webkit-keyframes yusan
{
    from  {-webkit-transform: rotate(0deg);}
    to    {-webkit-transform: rotate(360deg);}
}

@-webkit-keyframes worddiv
{
    from  {height: 300px;}
    to    {height: 800px;}
}
@-webkit-keyframes fadein
{
    from  {opacity: 0}
    to    {opacity: 1}
}
@-webkit-keyframes divfadein
{
    from  {opacity: 0;-webkit-transform: scale(1,0.9);}
    to    {opacity: 0.3;-webkit-transform: scale(1,0.9);}
}
@-webkit-keyframes divfadeinv
{
    from  {opacity: 0;-webkit-transform: scale(0.9,1);}
    to    {opacity: 0.3;-webkit-transform: scale(0.9,1);}
}
@-webkit-keyframes fadeout
{
    from  {opacity: 1}
    to    {opacity: 0}
}
@-webkit-keyframes wordbg_out
{
    from  {-webkit-transform: scale(0.6);opacity: 1}
    to    {-webkit-transform: scale(1);opacity: 1}
}
@-webkit-keyframes san_down
{
    from  {-webkit-transform: translate(0px,370px) scale(1);}
    to    {-webkit-transform: translate(0px,560px) scale(1);}
}
@-webkit-keyframes jiantou_toright
{
    from  {-webkit-transform: translate(0px,0px);}
    to    {-webkit-transform: translate(1000px,0px);}
}
@-webkit-keyframes jiantou_toleft
{
    from  {-webkit-transform: translate(0px,0px) scale(-1,1);}
    to    {-webkit-transform: translate(-1000px,0px) scale(-1,1);}
}
@-webkit-keyframes jiantou_todown
{
    from  {-webkit-transform: translate(0px,0px) rotate(90deg);}
    to    {-webkit-transform: translate(0px,1140px) rotate(90deg);}
}
@-webkit-keyframes jiantou_toup
{
    from  {-webkit-transform: translate(0px,0px) rotate(-90deg);}
    to    {-webkit-transform: translate(0px,-1140px) rotate(-90deg);}
}
@-webkit-keyframes flower
{
    from  {-webkit-transform: translate(0px,0px) rotate(0deg);}
    to    {-webkit-transform: translate(250px,800px) rotate(150deg);}
}
@-webkit-keyframes divmask_1
{
    from  {-webkit-transform: translate(0px,0px) scale(1,1.1);}
    to    {-webkit-transform: translate(890px,0px) scale(1,1.1);}
}
@-webkit-keyframes divmask-1
{
    from  {-webkit-transform: translate(0px,0px) scale(1,1.1);}
    to    {-webkit-transform: translate(500px,0px) scale(1,1.1);}
}
@-webkit-keyframes divmask_2
{
    from  {-webkit-transform: translate(0px,0px);opacity: 0.7;}
    to    {-webkit-transform: translate(-890px,0px);opacity: 0.7;}
}
@-webkit-keyframes divmask-2
{
    from  {-webkit-transform: translate(0px,0px);opacity: 1;}
    to    {-webkit-transform: translate(-500px,0px);opacity: 1;}
}
@-webkit-keyframes mask1h_toright
{
    from  {-webkit-transform: translate(0px,0px) scale(1,1);}
    to    {-webkit-transform: translate(786px,0px) scale(1,1);}
}
@-webkit-keyframes maskimg1h_toright
{
    from  {-webkit-transform: translate(0px,0px) scale(1,1);}
    to    {-webkit-transform: translate(-786px,0px) scale(1,1);}
}
@-webkit-keyframes mask2h_toright
{
    from  {-webkit-transform: translate(0px,0px) scale(1,1);}
    to    {-webkit-transform: translate(436px,0px) scale(1,1);}
}
@-webkit-keyframes maskimg2h_toright
{
    from  {-webkit-transform: translate(0px,0px) scale(1,1);}
    to    {-webkit-transform: translate(-436px,0px) scale(1,1);}
}
@-webkit-keyframes mask1v_toup
{
    from  {-webkit-transform: translate(0px,0px) scale(1);}
    to    {-webkit-transform: translate(0px,-955px) scale(1);}
}
@-webkit-keyframes maskimg1v_toup
{
    from  {-webkit-transform: translate(0px,0px) scale(1);}
    to    {-webkit-transform: translate(0px,955px) scale(1);}
}
@-webkit-keyframes mask2v_toup
{
    from  {-webkit-transform: translate(0px,0px) scale(1);}
    to    {-webkit-transform: translate(0px,-555px) scale(1);}
}
@-webkit-keyframes maskimg2v_toup
{
    from  {-webkit-transform: translate(0px,0px) scale(1);}
    to    {-webkit-transform: translate(0px,555px) scale(1);}
}
</style>

<div id='container'>
    <img src='<?=$p?>images/bg.png'>

    <img id='yun1' src='<?=$p?>images/yun.png'>
    <img id='yun2' src='<?=$p?>images/yun.png'>
    <img id='yun3' src='<?=$p?>images/yun.png'>

    <div id='worddiv'>
        <div id='wordbg'>
            <img src='<?=$p?>images/shang01.png'>
            <div id='pagetitle' style='position:absolute;width:232px;height:269px;top:120px;left:106px;font-size:40px;color:#fff;overflow:hidden;-webkit-transform: scale(1.7)'>
                <div style='position:absolute;width:232px;height:269px;top:0px;left:0px;overflow:hidden;'>
                    <div style='position:absolute;width:232px;height:269px;display:table;overflow:hidden;'>
                        <div id='titlecontent' style='width:232px;height:269px;vertical-align:middle;display:table-cell;text-align:center;font-size:30px;line-height:150%;color:#0084AC;'></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div id='div1' style='position:absolute;left:0px;top:0px;'>
    <div id='div1h' class='divh'>
        <img id='img1h' style='position:absolute'>
        <!-- <img id='jiantou1h' src='<?=$p?>images/jiantou.png'> -->
    </div>

    <div style='width:436px;left:32px;top:0px;height:800px;overflow:hidden;position:absolute'>
        <div id='mask1_1h' class='mask1_1h'>
            <div class='maskimg1_1h'>
                <img id='maskimg1_1h' style='position:asbolute'>
            </div>
        </div>
        <div id='mask2_1h' class='mask2_1h'>
            <div class='maskimg2_1h'>
                <img id='maskimg2_1h' style='position:absolute'>
            </div>
        </div>
    </div>

    <div id='div1v' class='divv'>
        <img id='img1v' style='position:absolute'>
    </div>

    <div style='width:370px;left:65px;top:130px;height:555px;overflow:hidden;position:absolute'>
        <div id='mask1_1v' class='mask1_1v'>
            <div class='maskimg1_1v'>
                <img id='maskimg1_1v' style='position:absolute'>
            </div>
        </div>
        <div id='mask2_1v' class='mask2_1v'>
            <div class='maskimg2_1v'>
                <img id='maskimg2_1v' style='position:absolute'>
            </div>
        </div>
        <div id='div1vline' style='width:370px;left:0px;top:0px;height:555px;width:370px;border-top:5px solid #fff;border-bottom:5px solid #fff;opacity:0;position:absolute'>
        </div>
    </div>
</div>

<div id='div2' style='position:absolute;left:0px;top:0px'>
    <div id='div2h' class='divh'>
        <img id='img2h' style='position:absolute'>
    </div>

    <div style='width:436px;left:32px;top:0px;height:800px;overflow:hidden;position:absolute'>
        <div id='mask1_2h' class='mask1_2h'>
            <div class='maskimg1_2h'>
                <img id='maskimg1_2h' style='position:asbolute'>
            </div>
        </div>
        <div id='mask2_2h' class='mask2_2h'>
            <div class='maskimg2_2h'>
                <img id='maskimg2_2h' style='position:absolute'>
            </div>
        </div>
    </div>

    <div id='div2v' class='divv'>
        <img id='img2v' style='position:absolute'>
    </div>

    <div style='width:370px;left:65px;top:130px;height:555px;overflow:hidden;position:absolute'>
        <div id='mask1_2v' class='mask1_2v'>
            <div class='maskimg1_2v'>
                <img id='maskimg1_2v' style='position:absolute'>
            </div>
        </div>
        <div id='mask2_2v' class='mask2_2v'>
            <div class='maskimg2_2v'>
                <img id='maskimg2_2v' style='position:absolute'>
            </div>
        </div>
        <div id='div2vline' style='width:370px;left:0px;top:0px;height:555px;width:370px;border-top:5px solid #fff;border-bottom:5px solid #fff;opacity:0;position:absolute'>
        </div>
    </div>
</div>
    <div id='san'>
        <img id='yusan' src='<?=$p?>images/san.png'>
        <img id='dian' src='<?=$p?>images/zhongxin.png'>
    </div>
    <div id='shuzhi'>
        <img id='huaban' src='<?=$p?>images/huabnan.png'>
        <img src='<?=$p?>images/shuzhi.png' style='position:absolute'>
    </div>


    
</div>



<script>

function id(name)
{
    return document.getElementById(name)
}

var image_size_width=[];
var image_size_height=[];
var image_url_index=0;
var have_num = 0;
var error_num = 0;
var canshow = true;
var reshow = false;

var timeout = [];

var allitems = {};

var delaytime=6000;
function id(name)
{
    return document.getElementById(name);
}
function load_images()
{
    creatediv();
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

function creatediv()
{
    var  divid = ['san','wordbg','worddiv','div1','div2','div1h','div1v','div2h','div2v','div1vline','div2vline','mask1_1h','mask2_1h','maskimg1_1h','maskimg2_1h','mask1_1v','mask2_1v','maskimg1_1v','maskimg2_1v','mask1_2h','mask2_2h','maskimg1_2h','maskimg2_2h','mask1_2v','mask2_2v','maskimg1_2v','maskimg2_2v','img1h','img2h','img1v','img2v'];

    for(var i=0;i<divid.length;i++)
    {
        allitems[divid[i]] = id(divid[i]);
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
            timeout[0] = setTimeout(function()
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
            timeout[0] = setTimeout(function()
                {
                    distitle();
                },dis_titletime);
        }

    }
}
function showtitle()
{
    allitems['san'].style.webkitAnimation = 'san_in 3s linear both';
    allitems['wordbg'].style.webkitAnimation = 'fadein 1s linear both';
    allitems['worddiv'].style.webkitAnimation = 'worddiv 3s 1s linear both';

    id('pagetitle').style.webkitAnimation = 'fadein 1s 2s linear both';
    id('titlecontent').innerHTML = e_desc;

    // setTimeout(distitle,4000)
}

function distitle()
{
    id('pagetitle').style.webkitAnimation = 'fadeout 1s 1s linear both';
    allitems['san'].style.webkitAnimation = 'san_down 1.5s linear both';
    allitems['wordbg'].style.webkitAnimation = 'wordbg_out 1.5s linear both';

    show1();
}

function show1()
{
    // return;
    setImage('1');

    allitems['div1h'].style.webkitAnimation = 'divfadein 1s 3s linear both';

    allitems['div1v'].style.webkitAnimation = 'divfadeinv 1s 3s linear both';


    timeout[1] = setTimeout(function()
    {
        allitems['mask1_1h'].style.webkitAnimation = 'mask1h_toright 3s linear both';
        allitems['maskimg1_1h'].style.webkitAnimation = 'maskimg1h_toright 3s linear both';
        allitems['mask2_1h'].style.webkitAnimation = 'mask2h_toright 1.5s 1s linear both';
        allitems['maskimg2_1h'].style.webkitAnimation = 'maskimg2h_toright 1.5s 1s linear both';
        allitems['mask1_1v'].style.webkitAnimation = 'mask1v_toup 3s linear both';
        allitems['maskimg1_1v'].style.webkitAnimation = 'maskimg1v_toup 3s linear both';
        allitems['mask2_1v'].style.webkitAnimation = 'mask2v_toup 1.5s 1s linear both';
        allitems['maskimg2_1v'].style.webkitAnimation = 'maskimg2v_toup 1.5s 1s linear both'; 
        allitems['div1vline'].style.webkitAnimation = 'fadein 0.5s linear 2s both';
    },3500)

    timeout[2] = setTimeout(show2,7000)
}

function show2()
{
    setImage('2');

    allitems['div1'].style.webkitAnimation = 'fadeout 0.8s linear both';

    // return;
    // setTimeout(function()
    // {
        allitems['div2h'].style.webkitAnimation = 'divfadein 1.5s linear both';
        allitems['div2v'].style.webkitAnimation = 'divfadeinv 1.5s linear both';
    // },500)

    timeout[3] = setTimeout(function()
    {
        allitems['mask1_2h'].style.webkitAnimation = 'maskimg1h_toright 3s linear both';
        allitems['maskimg1_2h'].style.webkitAnimation = 'mask1h_toright 3s linear both';
        allitems['mask2_2h'].style.webkitAnimation = 'maskimg2h_toright 1.5s 1s linear both';
        allitems['maskimg2_2h'].style.webkitAnimation = 'mask2h_toright 1.5s 1s linear both';
        allitems['mask1_2v'].style.webkitAnimation = 'maskimg1v_toup 3s linear both';
        allitems['maskimg1_2v'].style.webkitAnimation = 'mask1v_toup 3s linear both';
        allitems['mask2_2v'].style.webkitAnimation = 'maskimg2v_toup 1.5s 1s linear both';
        allitems['maskimg2_2v'].style.webkitAnimation = 'mask2v_toup 1.5s 1s linear both'; 
        allitems['div2vline'].style.webkitAnimation = 'fadein 0.5s linear 2s both';

        allitems['div1'].style.webkitAnimation = '';
        allitems['div1v'].style.webkitAnimation = '';
        allitems['div1h'].style.webkitAnimation = '';
        allitems['mask1_1h'].style.webkitAnimation = '';
        allitems['maskimg1_1h'].style.webkitAnimation = '';
        allitems['mask2_1h'].style.webkitAnimation = '';
        allitems['maskimg2_1h'].style.webkitAnimation = '';
        allitems['mask1_1v'].style.webkitAnimation = '';
        allitems['maskimg1_1v'].style.webkitAnimation = '';
        allitems['mask2_1v'].style.webkitAnimation = '';
        allitems['maskimg2_1v'].style.webkitAnimation = ''; 
        allitems['div1vline'].style.webkitAnimation = '';

    },2000)


    timeout[4] = setTimeout(show3,6000)

}

function show3()
{
    setImage('1');

    allitems['div2'].style.webkitAnimation = 'fadeout 0.8s linear both';

    // setTimeout(function()
    // {
        allitems['div1h'].style.webkitAnimation = 'divfadein 1.5s linear both';
        allitems['div1v'].style.webkitAnimation = 'divfadeinv 1.5s linear both';
    // },500)

    timeout[5] = setTimeout(function()
    {
        allitems['mask1_1h'].style.webkitAnimation = 'mask1h_toright 3s linear both';
        allitems['maskimg1_1h'].style.webkitAnimation = 'maskimg1h_toright 3s linear both';
        allitems['mask2_1h'].style.webkitAnimation = 'mask2h_toright 1.5s 1s linear both';
        allitems['maskimg2_1h'].style.webkitAnimation = 'maskimg2h_toright 1.5s 1s linear both';
        allitems['mask1_1v'].style.webkitAnimation = 'mask1v_toup 3s linear both';
        allitems['maskimg1_1v'].style.webkitAnimation = 'maskimg1v_toup 3s linear both';
        allitems['mask2_1v'].style.webkitAnimation = 'mask2v_toup 1.5s 1s linear both';
        allitems['maskimg2_1v'].style.webkitAnimation = 'maskimg2v_toup 1.5s 1s linear both'; 
        allitems['div1vline'].style.webkitAnimation = 'fadein 0.5s linear 2s both';

        allitems['div2'].style.webkitAnimation = '';
        allitems['div2v'].style.webkitAnimation = '';
        allitems['div2h'].style.webkitAnimation = '';
        allitems['mask1_2h'].style.webkitAnimation = '';
        allitems['maskimg1_2h'].style.webkitAnimation = '';
        allitems['mask2_2h'].style.webkitAnimation = '';
        allitems['maskimg2_2h'].style.webkitAnimation = '';
        allitems['mask1_2v'].style.webkitAnimation = '';
        allitems['maskimg1_2v'].style.webkitAnimation = '';
        allitems['mask2_2v'].style.webkitAnimation = '';
        allitems['maskimg2_2v'].style.webkitAnimation = ''; 
        allitems['div2vline'].style.webkitAnimation = '';    
    },2000)

    timeout[6] = setTimeout(show2,6000)
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

    var maskdiv1;
    var maskdiv1_dev;
    var maskdiv2;
    var maskdiv2_dev;

    if(img_bili > 1)
    {
        divname = idname + 'h';
        div = allitems['div'+idname+'h']
        div1 = allitems['div'+idname+'v']

        maskdiv1 = allitems['mask1_'+idname+'h']
        maskdiv1_dev = allitems['mask1_'+idname+'v']

        maskdiv2 = allitems['mask2_'+idname+'h']
        maskdiv2_dev = allitems['mask2_'+idname+'v']

        allitems['div1vline'].style.display = 'none';
        allitems['div2vline'].style.display = 'none';

        width = 436;
        height = 300;
    }
    else
    {
        divname = idname + 'v';
        div = allitems['div'+idname+'v']
        div1 = allitems['div'+idname+'h']

        maskdiv1 = allitems['mask1_'+idname+'v']
        maskdiv1_dev = allitems['mask1_'+idname+'h']

        maskdiv2 = allitems['mask2_'+idname+'v']
        maskdiv2_dev = allitems['mask2_'+idname+'h']

        width = 370;
        height = 555;
        allitems['div'+idname+'vline'].style.display = 'block';
    }

    div.style.display = 'block';
    div1.style.display = 'none';
    maskdiv1.style.display = 'block';
    maskdiv1_dev.style.display = 'none';
    maskdiv2.style.display = 'block';
    maskdiv2_dev.style.display = 'none';

    var img = allitems['img'+divname]
    var mask1img = allitems['maskimg1_'+divname]
    var mask2img = allitems['maskimg2_'+divname]

    img.src = Onload_imgs_url[image_url_index];
    mask1img.src = Onload_imgs_url[image_url_index];
    mask2img.src = Onload_imgs_url[image_url_index];

    console.log(img.src);

    if(img_bili > (width/height))
    {
        img.style.top = '0px';
        img.style.height = height + 'px';
        img.style.width = height*img_bili + 'px';
        img.style.left = -((height*img_bili-width)/2)+'px';

        mask1img.style.left = mask2img.style.left = img.style.left;
        mask1img.style.top = mask2img.style.top = img.style.top;
        mask1img.style.width = mask2img.style.width = img.style.width;
        mask1img.style.height = mask2img.style.height = img.style.height;
    }
    else
    {
        img.style.left = '0px';
        img.style.width = width+'px';
        img.style.height = width/img_bili + 'px';
        img.style.top = -((width/img_bili-height)/2) + 'px';

        mask1img.style.left = mask2img.style.left = img.style.left;
        mask1img.style.top = mask2img.style.top = img.style.top;
        mask1img.style.width = mask2img.style.width = img.style.width;
        mask1img.style.height = mask2img.style.height = img.style.height;

    }

    image_url_index++;
    if(image_url_index==Onload_imgs_url.length)
        image_url_index = 0;
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
    for(var i=0;i<timeout.length;i++)
    {
        clearTimeout(timeout[i]);
    }
    var divid = ['san','wordbg','worddiv','div1','div2','div1h','div1v','div2h','div2v','div1vline','div2vline','mask1_1h','mask2_1h','maskimg1_1h','maskimg2_1h','mask1_1v','mask2_1v','maskimg1_1v','maskimg2_1v','mask1_2h','mask2_2h','maskimg1_2h','maskimg2_2h','mask1_2v','mask2_2v','maskimg1_2v','maskimg2_2v'];
    for(var i=0;i<divid.length;i++)
    {
        console.log(divid[i]);
        var div = id(divid[i]);
        div.style.webkitAnimation = '';
    }
    id('pagetitle').style.webkitAnimation = '';
}
</script>