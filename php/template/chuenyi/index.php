<?
$p=$_WEITE['web_pic_url']."chuenyi/";
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
#ye1
{
    left: -42px;
    top: -48px;
    -webkit-transform-origin: 25% 0%;
    -webkit-animation: yezi1 1.5s cubic-bezier(.27,0,.78,1) infinite alternate;
}
#ye2
{
    left: 178px;
    top: -90px;
    -webkit-transform-origin: 50% 0%;
    -webkit-animation: yezi1 1.7s cubic-bezier(.27,0,.78,1) infinite alternate;
}
#ye3
{
    left: 294px;
    top: -50px;
    -webkit-transform-origin: 50% 0%;
    -webkit-animation: yezi1 1.5s cubic-bezier(.27,0,.78,1) infinite alternate;
}
#ye4
{
    -webkit-transform: scale(-1,1);
    -webkit-transform-origin: 25% 0%;
    left: 451px;
    top: -59px;
    -webkit-animation: yezi2 1.8s cubic-bezier(.27,0,.78,1) infinite alternate;
}
#ye5
{
    left: -11px;
    top: -50px;
    -webkit-transform-origin: 50% 0%;
    -webkit-animation: yezi1 2s cubic-bezier(.27,0,.78,1) infinite alternate;
}
#ya
{
    width: 97px;
    height: 179px;
    top: 546px;
    left: 354px;
    -webkit-transform-origin:100% 100%;
    -webkit-animation: yezi3 4s cubic-bezier(.27,0,.78,1) infinite alternate;
}
#ya > img
{
    position: absolute;
}
#shuye1
{
    left: -54px;
    top: 29px;
    -webkit-transform-origin: 96% 10%;
    -webkit-animation: yezi4 3s linear infinite alternate;
}
#shuye2
{
    left: 3px;
    top: -77px;
    -webkit-transform-origin: 37% 100%;
    -webkit-animation: yezi1 3s linear infinite alternate;
}
#yedi
{
    left: 0px;
    top: 680px;
}
#xing1
{
    left: 453px;
    top: 705px;
    -webkit-animation: xing2 3s linear infinite;
}
#xing2
{
    left: 228px;
    top: 699px;
    -webkit-animation: xing3 3s 2s linear infinite;
}
#xing3
{
    left: 37px;
    top: 760px;
    -webkit-animation: xing4 3s 1s linear infinite;
}
#xing4
{
    left: 373px;
    top: 568px;
    -webkit-animation: xing1 3s linear infinite;
}
#wenzi
{
    width: 100px;
    height: 100px;
    left: 230px;
    top: 179px;
    position: absolute;
}
.chi1
{
    left: 0px;
    top: 0px;
    position: absolute;
    -webkit-transform-origin: 89% 92%;
    -webkit-animation: chibang1 0.08s linear infinite alternate;

}
.chi2
{
    left: 5px;
    top: 0px;
    position: absolute;
    -webkit-transform-origin: 89% 92%;
    -webkit-transform: scale(-1,1);
    -webkit-animation: chibang2 0.08s linear infinite alternate;

}
.tui1
{
    left: 18px;
    top: 29px;
    position: absolute;
}
.tui2
{
    left: 30px;
    top: 29px;
    position: absolute;
    -webkit-transform: scale(-1,1);
}
.yan
{
    left: 19px;
    top: 22px;
    position: absolute;
}
.xian
{
    position: absolute;
    left: 25px;
    top: 42px;
}
#wenzi1
{
    position: absolute;
    left: -100px;
    top: 400px;
    -webkit-animation: wenzi1 15s linear infinite;
}
#wenzi1div
{
    -webkit-animation: wenzi1div 15s linear infinite;
}
#wenzi2
{
    position: absolute;
    left: 0px;
    top: 670px;
    -webkit-animation: wenzi1 18s 3s linear infinite;
}
#wenzi2div
{
    left: 600px;
    -webkit-animation: wenzi2div 18s 3s linear infinite;;
}
#juxing
{
    left: 209px;
    -webkit-transform: scale(2.5,-1);
    top: 243px;
    opacity: 0.5;
    position: absolute;
}
#titlemoving
{
    position: absolute;
    -webkit-animation: titlemoving 1s linear infinite alternate;
}
#div1
{
    border: 6px solid #fff;
    width: 460px;
    height: 300px;
    position: absolute;
    left: 20px;
    top: 220px;
    overflow: hidden;
}
#div2
{
    border: 6px solid #fff;
    width: 380px;
    height: 600px;
    position: absolute;
    top: 100px;
    left: 60px;
    overflow: hidden;
}

.divimg
{
    position: absolute;
    border: 6px solid #fff;
    overflow: hidden;
}
.divcon
{
    width: 500px;
    height: 815px;
    position: absolute;
    opacity: 0;
    -webkit-transform-origin: 90% 20%;
}
.wenzi_1
{
    position: absolute;
    left: 53px;
}
.wenzi_2
{
    position: absolute;
    left: 390px;
}

#div1box
{
    position: absolute;
    -webkit-animation: div1moving 1.5s ease-in-out infinite alternate;
}
#div2box
{
    position: absolute;
    -webkit-animation: div2moving 1.5s ease-in-out infinite alternate;
}
#div3box
{
    position: absolute;
    -webkit-animation: div1moving 1.5s ease-in-out infinite alternate;
}
#div4box
{
    position: absolute;
    -webkit-animation: div1moving 1.5s ease-in-out infinite alternate;
}
#pagetitle
{
	opacity: 0;
}
</style>
<style type="text/css">
@-webkit-keyframes yezi1
{
    from  {-webkit-transform: rotate(0deg);}
    to    {-webkit-transform: rotate(3deg);}
}
@-webkit-keyframes yezi2
{
    from  {-webkit-transform: rotate(0deg) scale(-1,1);}
    to    {-webkit-transform: rotate(-3deg) scale(-1,1);}
}
@-webkit-keyframes yezi3
{
    from  {-webkit-transform: rotate(0deg) scale(0.7);}
    to    {-webkit-transform: rotate(5deg) scale(0.7);}
}
@-webkit-keyframes yezi4
{
    from  {-webkit-transform: rotate(0deg);}
    to    {-webkit-transfrom: rotate(-3deg);}
}
@-webkit-keyframes xing1
{
    0%   {-webkit-transform: rotate(0deg);opacity: 0}
    30%  {-webkit-transform: rotate(60deg);opacity: 1}
    60%  {-webkit-transform: rotate(120deg);opacity: 0}
    100% {opacity: 0}
}
@-webkit-keyframes xing2
{
    0%   {opacity: 0;-webkit-transform: translate(0px,0px) rotate(60deg);}
    30%  {opacity: 1;-webkit-transform: translate(0px,-45px) rotate(42deg);}
    100% {opacity: 0;-webkit-transform: translate(0px,-150px) rotate(0deg);}
}
@-webkit-keyframes xing3
{
    from  {opacity: 1;-webkit-transform: translate(0px,0px);}
    to    {opacity: 0;-webkit-transform: translate(0px,-100px);}
}
@-webkit-keyframes xing4
{
    0%   {opacity: 0;-webkit-transform: translate(0px,0px) rotate(-60deg);}
    30%  {opacity: 1;-webkit-transform: translate(0px,-45px) rotate(-42deg);}
    100% {opacity: 0;-webkit-transform: translate(0px,-150px) rotate(0deg);}
}
@-webkit-keyframes chibang1
{
    from  {-webkit-transform: rotate(0deg);}
    to    {-webkit-transform: rotate(-70deg);}
}
@-webkit-keyframes chibang2
{
    from  {-webkit-transform: rotate(0deg) scale(-1,1);}
    to    {-webkit-transform: rotate(70deg) scale(-1,1);}
}
@-webkit-keyframes wenzi1
{
    0%   {-webkit-transform: translate(0px,0px);-webkit-animation-timing-function: ease-out;}
    35%  {-webkit-transform: translate(420px,0px);-webkit-animation-timing-function: ease-in-out;}
    65%  {-webkit-transform: translate(200px,0px);-webkit-animation-timing-function: ease-in-out;}
    100% {-webkit-transform: translate(620px,0px);-webkit-animation-timing-function: ease-in;}
}
@-webkit-keyframes wenzi1div
{
    0%   {-webkit-transform: translate(0px,0px);-webkit-animation-timing-function: ease-in-out;}
    50%  {-webkit-transform: translate(0px,-150px);-webkit-animation-timing-function: ease-in-out;}
    100% {-webkit-transform: translate(0px,-300px);-webkit-animation-timing-function: ease-in-out;}
}
@-webkit-keyframes wenzi2div
{
    0%   {-webkit-transform: translate(0px,0px) scale(-1,1);-webkit-animation-timing-function: ease-in-out;}
    50%  {-webkit-transform: translate(0px,-150px) scale(-1,1);-webkit-animation-timing-function: ease-in-out;}
    100% {-webkit-transform: translate(0px,-300px) scale(-1,1);-webkit-animation-timing-function: ease-in-out;}
}
@-webkit-keyframes titlemoving
{
    from  {-webkit-transform: translate(0px,0px);}
    to    {-webkit-transform: translate(0px,-10px);}
}
@-webkit-keyframes title_in
{
    from  {opacity: 0;-webkit-transform: translate(0px,200px);}
    to    {opacity: 1;-webkit-transform: translate(0px,0px);}
}
@-webkit-keyframes title_out
{
    from  {opacity: 1;-webkit-transform: translate(0px,0px);}
    to    {opacity: 0;-webkit-transform: translate(0px,-300px);}
}
@-webkit-keyframes div1_in
{
    from  {-webkit-transform: translate(-400px,0px);opacity: 0}
    to    {-webkit-transform: translate(0px,0px);opacity: 1}
}
@-webkit-keyframes div1_out
{
    from  {-webkit-transform: translate(0px,0px);opacity: 1}
    to    {-webkit-transform: translate(400px,0px);opacity: 0}
}
@-webkit-keyframes div1moving
{
    from  {-webkit-transform: translate(-5px,0px);}
    to    {-webkit-transform: translate(5px,0px);}
}
@-webkit-keyframes div2moving
{
    from  {-webkit-transform: translate(0px,-5px);}
    to    {-webkit-transform: translate(0px,5px);}
}
@-webkit-keyframes div2_in
{
    from  {-webkit-transform: translate(0px,400px);opacity: 0}
    to    {-webkit-transform: translate(0px,0px);opacity: 1}
}
@-webkit-keyframes div2_out
{
    from  {-webkit-transform: translate(0px,0px);opacity: 1}
    to    {-webkit-transform: translate(0px,-400px);opacity: 0}
}
@-webkit-keyframes div3_in
{
    from  {-webkit-transform: translate(400px,0px);opacity: 0}
    to    {-webkit-transform: translate(0px,0px);opacity: 1}
}
@-webkit-keyframes div3_out
{
    from  {-webkit-transform: translate(0px,0px);opacity: 1}
    to    {-webkit-transform: translate(-400px,0px);opacity: 0}
}
@-webkit-keyframes div4_in
{
    from  {-webkit-transform: scale(0.3);opacity: 0}
    to    {-webkit-transform: scale(1);opacity: 1}
}
@-webkit-keyframes div4_out
{
    from  {-webkit-transform: translate(0px,0px) scale(1);opacity: 1}
    to    {-webkit-transform: translate(-400px,400px) scale(1);opacity: 0}
}
</style>

<div id='container'>
    <img src='<?=$p?>images/bg.jpg'>

    <img id='ye3' src='<?=$p?>images/ye03.png'>
    <img id='ye5' src='<?=$p?>images/ye03.png'>
    <img id='ye2' src='<?=$p?>images/ye02.png'>
    <img id='ye1' src='<?=$p?>images/ye01.png'>
    <img id='ye4' src='<?=$p?>images/ye01.png'>


    <div id='pagetitle'>
        <div id='titlemoving'>
            <img id='juxing' src='<?=$p?>images/juxing.png'>
             <div style='position: absolute;width: 212px;height: 238px;top: 262px;left: 149px;overflow: hidden;'>
                <div style='position:absolute;width:212px;height:238px;top:0px;left:0px;overflow:hidden;'>
                    <div style='position:absolute;width:212px;height:238px;display:table;overflow:hidden;'>
                        <div id='titlecontent' style='width:212px;height:238px;vertical-align:middle;display:table-cell;text-align:center;font-size:32px;line-height:45px;color:#3F6E08;font-weight:bold;'></div>
                    </div>
                </div>
            </div>

            <div id='wenzi'>
                <img src='<?=$p?>images/chi.png' class='chi1'>
                <img src='<?=$p?>images/chi.png' class='chi2'>
                <img src='<?=$p?>images/yan.png' class='yan'>
                <img src='<?=$p?>images/tui.png' class='tui1'>
                <img src='<?=$p?>images/tui.png' class='tui2'>
                <img src='<?=$p?>images/xian.png' class='xian'>
            </div>
            
        </div>
    </div>


    <div id='div1box'>
        <div id='div1con' class='divcon'>
            <div id='div1' class='divimg'>
                <img id='img1' style='position:absolute'>
            </div>
            <div id='wenzi1_1' class='wenzi_1'>
                    <img src='<?=$p?>images/chi.png' class='chi1'>
                    <img src='<?=$p?>images/chi.png' class='chi2'>
                    <img src='<?=$p?>images/yan.png' class='yan'>
                    <img src='<?=$p?>images/tui.png' class='tui1'>
                    <img src='<?=$p?>images/tui.png' class='tui2'>
                    <img src='<?=$p?>images/xian.png' class='xian'>
            </div>
            <div id='wenzi1_2' class='wenzi_2'>
                    <img src='<?=$p?>images/chi.png' class='chi1'>
                    <img src='<?=$p?>images/chi.png' class='chi2'>
                    <img src='<?=$p?>images/yan.png' class='yan'>
                    <img src='<?=$p?>images/tui.png' class='tui1'>
                    <img src='<?=$p?>images/tui.png' class='tui2'>
                    <img src='<?=$p?>images/xian.png' class='xian'>
            </div>
        </div>
    </div>

    <div id='div2box'>
        <div id='div2con' class='divcon'>
            <div id='div2' class='divimg'>
                <img id='img2' style='position:absolute'>
            </div>
            <div id='wenzi2_1' class='wenzi_1'>
                    <img src='<?=$p?>images/chi.png' class='chi1'>
                    <img src='<?=$p?>images/chi.png' class='chi2'>
                    <img src='<?=$p?>images/yan.png' class='yan'>
                    <img src='<?=$p?>images/tui.png' class='tui1'>
                    <img src='<?=$p?>images/tui.png' class='tui2'>
                    <img src='<?=$p?>images/xian.png' class='xian'>
            </div>
            <div id='wenzi2_2' class='wenzi_2'>
                    <img src='<?=$p?>images/chi.png' class='chi1'>
                    <img src='<?=$p?>images/chi.png' class='chi2'>
                    <img src='<?=$p?>images/yan.png' class='yan'>
                    <img src='<?=$p?>images/tui.png' class='tui1'>
                    <img src='<?=$p?>images/tui.png' class='tui2'>
                    <img src='<?=$p?>images/xian.png' class='xian'>
            </div>
        </div>
    </div>

    <div id='div3box'>
        <div id='div3con' class='divcon'>
            <div id='div3' class='divimg'>
                <img id='img3' style='position:absolute'>
            </div>
            <div id='wenzi3_1' class='wenzi_1'>
                    <img src='<?=$p?>images/chi.png' class='chi1'>
                    <img src='<?=$p?>images/chi.png' class='chi2'>
                    <img src='<?=$p?>images/yan.png' class='yan'>
                    <img src='<?=$p?>images/tui.png' class='tui1'>
                    <img src='<?=$p?>images/tui.png' class='tui2'>
                    <img src='<?=$p?>images/xian.png' class='xian'>
            </div>
            <div id='wenzi3_2' class='wenzi_2'>
                    <img src='<?=$p?>images/chi.png' class='chi1'>
                    <img src='<?=$p?>images/chi.png' class='chi2'>
                    <img src='<?=$p?>images/yan.png' class='yan'>
                    <img src='<?=$p?>images/tui.png' class='tui1'>
                    <img src='<?=$p?>images/tui.png' class='tui2'>
                    <img src='<?=$p?>images/xian.png' class='xian'>
            </div>
        </div>
    </div>

    <div id='div4box'>
        <div id='div4con' class='divcon'>
            <div id='div4' class='divimg'>
                <img id='img4' style='position:absolute'>
            </div>
            <div id='wenzi4_1' class='wenzi_1'>
                    <img src='<?=$p?>images/chi.png' class='chi1'>
                    <img src='<?=$p?>images/chi.png' class='chi2'>
                    <img src='<?=$p?>images/yan.png' class='yan'>
                    <img src='<?=$p?>images/tui.png' class='tui1'>
                    <img src='<?=$p?>images/tui.png' class='tui2'>
                    <img src='<?=$p?>images/xian.png' class='xian'>
            </div>
            <div id='wenzi4_2' class='wenzi_2'>
                    <img src='<?=$p?>images/chi.png' class='chi1'>
                    <img src='<?=$p?>images/chi.png' class='chi2'>
                    <img src='<?=$p?>images/yan.png' class='yan'>
                    <img src='<?=$p?>images/tui.png' class='tui1'>
                    <img src='<?=$p?>images/tui.png' class='tui2'>
                    <img src='<?=$p?>images/xian.png' class='xian'>
            </div>
        </div>
    </div>

    <div id='wenzi1div'>
        <div id='wenzi1'>
            <img src='<?=$p?>images/chi.png' class='chi1'>
            <img src='<?=$p?>images/chi.png' class='chi2'>
            <img src='<?=$p?>images/yan.png' class='yan'>
        </div>
    </div>


    <div id='wenzi2div'>
        <div id='wenzi2'>
            <img src='<?=$p?>images/chi.png' class='chi1'>
            <img src='<?=$p?>images/chi.png' class='chi2'>
            <img src='<?=$p?>images/yan.png' class='yan'>
        </div>
    </div>

    <div id='ya'>
        <img src='<?=$p?>images/jing01.png'>
        <img id='shuye1' src='<?=$p?>images/ye05.png'>
        <img id='shuye2' src='<?=$p?>images/ye06.png'>
    </div>

    <img id='xing2' src='<?=$p?>images/xingmang.png'>
    <img id='xing3' src='<?=$p?>images/xingmang.png'>
    <img id='yedi' src='<?=$p?>images/yedi.png'>

    <img id='xing1' src='<?=$p?>images/xingmang.png'>
    <img id='xing4' src='<?=$p?>images/xingmang.png'>

</div>



<script>

function id(name)
{
    return document.getElementById(name)
}

function showtitle()
{
    id('pagetitle').style.webkitAnimation = 'title_in 1.5s ease-out both';
    id('titlecontent').innerHTML = e_desc;
}

function distitle()
{
    id('pagetitle').style.webkitAnimation = 'title_out 2.5s ease-in both';

    setTimeout(show1,2000)
}

function show1()
{
    setImageindex();
    set_items_position('1');

    id('div1con').style.webkitAnimation = 'div1_in 2s ease-out both';

    setTimeout(show2,6000)
}

function show2()
{
    setImageindex();
    set_items_position('2');

    id('div1con').style.webkitAnimation = 'div1_out 1.5s ease-in both'
    id('div2con').style.webkitAnimation = 'div2_in 2s ease-out 1s both';

    setTimeout(show3,6000)
}

function show3()
{
    setImageindex();
    set_items_position('3');

    id('div2con').style.webkitAnimation = 'div2_out 1.5s ease-in both'
    id('div3con').style.webkitAnimation = 'div3_in 2s ease-out 1s both';

    setTimeout(show4,6000)
}

function show4()
{
    setImageindex();
    set_items_position('4');

    id('div3con').style.webkitAnimation = 'div3_out 1.5s ease-in both'
    id('div4con').style.webkitAnimation = 'div4_in 2s ease-out 1s both';

    setTimeout(show1_1,6000)

}

function show1_1()
{
    setImageindex();
    set_items_position('1');

    id('div4con').style.webkitAnimation = 'div4_out 1.5s ease-in both'
    id('div1con').style.webkitAnimation = 'div1_in 2s ease-out 1s both';

    setTimeout(show2,6000)
}


function set_items_position(pageid)
{
    var img_bili = image_size_width[image_url_index]/image_size_height[image_url_index];

    console.log(img_bili);
    var div = id('div'+pageid);
    var img = id('img'+pageid);

    img.src = Onload_imgs_url[image_url_index];

    if(img_bili >= 1)
    {
        id('wenzi'+pageid+'_1').style.top = '158px';
        id('wenzi'+pageid+'_2').style.top = '158px';


        div.style.width = '460px';
        if(img_bili > (460/300))
        {
            div.style.height = '300px';

            img.style.height = '300px';
            img.style.width = 300 * img_bili + 'px';
            img.style.left = (460 - 300 * img_bili)/2 + 'px';
            img.style.top = '0px';
        }
        else
        {
            div.style.height = 460 / img_bili + 'px';

            img.style.width = '460px';
            img.style.height = 460/img_bili+'px';
            img.style.left = '0px';
            img.style.top = '0px';
        }

        div.style.left = '20px';
        div.style.top = '220px';   

    }
    else
    {
        id('wenzi'+pageid+'_1').style.top = '38px';
        id('wenzi'+pageid+'_2').style.top = '38px';

        div.style.width = '380px';
        if(img_bili < (380/600))
        {
            div.style.height = '600px';

            img.style.width = '380px';
            img.style.height = 380 / img_bili + 'px';
            img.style.left = '0px';
            img.style.top = (600-380/img_bili)/2 + 'px';
        }
        else
        {
            div.style.height = 380 / img_bili+ 'px';

            img.style.width = '380px';
            img.style.height = 380 / img_bili + 'px';
            img.style.left = '0px';
            img.style.top = '0px';
        }
        
        div.style.left = '60px';
        div.style.top = '100px';
    }

    image_url_index++;

}


call_me(load_images);
var image_size_width=[];
var image_size_height=[];
var image_url_index=0;
var have_num = 0;
var error_num = 0;
var canshow = true;
var reshow = false;
var delaytime=5500;

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
</script>
