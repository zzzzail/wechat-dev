<?
$p=$_WEITE['web_pic_url']."menghuan/";
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
    height: 100%;
    position: absolute;
    overflow: hidden;
}
#container >img,#container > div
{
    position: absolute;
}
#change_bg
{
    top: 503px;
}
#sky_rotate
{
    top: 0px;
    left: -80px;
    -webkit-animation: rotateing 50s linear infinite;
}
#lake_rotate
{
    top: 510px;
    left: -100px;
    width: 625px;
    height: 504px;
    -webkit-transform: scale(0.8,0.2);
    opacity: 0.3;
    /*-webkit-animation: lake_rotate 35s linear infinite;*/
}
#lake_in
{
    position: absolute;
    -webkit-animation: rotateing_back 50s linear infinite;
}
#deng1
{
    left: 174px;
    width: 15px;
    top: 700px;
    height: 20px;
    -webkit-animation: fadechange 2s linear infinite alternate;
}
#deng2
{
    left: 270px;
    top: 700px;
    -webkit-animation: fadechange 2s 1s linear infinite alternate;
}
#deng3
{
    left: 310px;
    top: 700px;
    width: 12px;
    -webkit-animation: fadechange 2s 0.5s linear infinite alternate;
}
#deng4
{
    left: 382px;
    top: 701px;
    width: 9px;
    -webkit-animation: fadechange 2s 1.5s linear infinite alternate;
}
#deng5
{
    left: 467px;
    top: 705px;
    -webkit-animation: fadechange 2s 2s linear infinite alternate;
}
#div1>div
{
    position: absolute;
}
.divh
{
    left: 17px;
    top: 192px;
    position: absolute;
    background-color: #fff;
    width: 467px;
    height: 290px;
    overflow: hidden;
}
.divv
{
    left: 62px;
    top: 108px;
    position: absolute;
    background-color: #fff;
    width: 375px;
    height: 520px;
    overflow: hidden;
}
.kuangv
{
    left: 43px;
    top: 86px;
    position: absolute;
}
.kuangh
{
    left: 17px;
    top: 170px;
    position: absolute;
}
#div1h,#div1v,#div2v,#div2h
{
    /*-webkit-transform: translate(500px,0px);from liangziyun*/
    position: absolute;
}
#div1,#div2
{
    -webkit-transform: translate(500px,0px);
    width: 500px;
    height: 815px;
}
</style>
<style type="text/css">
@-webkit-keyframes rotateing
{
    from  {-webkit-transform: rotate(0deg);}
    to    {-webkit-transform: rotate(360deg);}
}
@-webkit-keyframes rotateing_back
{
    from  {-webkit-transform: rotate(360deg);}
    to    {-webkit-transform: rotate(0deg);}
}
@-webkit-keyframes fadechange
{
    from  {opacity: 1}
    to    {opacity: 0.5}
}
@-webkit-keyframes fadein_left
{
    from  {opacity: 0;-webkit-transform: translate(500px,0px);}
    to    {opacity: 1;-webkit-transform: translate(0px,0px);}
}
@-webkit-keyframes fadeout_left
{
    from  {opacity: 1;-webkit-transform: translate(0px,0px);}
    to    {opacity: 0;-webkit-transform: translate(-500px,0px);}
}
@-webkit-keyframes fadeout_down
{
    from  {opacity: 1;-webkit-transform: translate(0px,0px);}
    to    {opacity: 0;-webkit-transform: translate(0px,500px);}
}
@-webkit-keyframes fadein_down
{
    from  {opacity: 0;-webkit-transform: translate(0px,-500px);}
    to    {opacity: 1;-webkit-transform: translate(0px,0px);}
}
@-webkit-keyframes fadein_up
{
    from  {opacity: 0;-webkit-transform: translate(0px,500px);}
    to    {opacity: 1;-webkit-transform: translate(0px,0px);}
}
@-webkit-keyframes fadeout_up
{
    from  {opacity: 1;-webkit-transform: translate(0px,0px);}
    to    {opacity: 0;-webkit-transform: translate(-500px,0px);}
}
@-webkit-keyframes fadeout_center
{
    from  {opacity: 1;-webkit-transform: scale(1);}
    to    {opacity: 0;-webkit-transform: scale(.4);}
}
</style>

<div id='container'>
    

    <img id='change_bg' src='<?=$p?>images/01.jpg'>
    <img src='<?=$p?>images/bg.png'>
    <img id='sky_rotate' src='<?=$p?>images/xing.png'>

    <div id='lake_rotate'>
        <img id='lake_in' src='<?=$p?>images/xing.png'>
    </div>

    <img id='deng1' src='<?=$p?>images/01.png'>
    <img id='deng2' src='<?=$p?>images/01.png'>
    <img id='deng3' src='<?=$p?>images/01.png'>
    <img id='deng4' src='<?=$p?>images/01.png'>
    <img id='deng5' src='<?=$p?>images/01.png'>

    <div id='pagetitle' style='position:absolute;width:398px;height:250px;top:192px;left:51px;font-size:40px;color:#301B5F;-webkit-transform-origin: 100% 50%;-webkit-transform: translate(500px,0px)'>
        <img src='<?=$p?>images/bt.png'>
        <div style='position:absolute;width:324px;height:250px;top:0px;left:35px;overflow:hidden;'>
            <div style='position:absolute;width:324px;height:250px;display:table;overflow:hidden;'>
                <div id='titlecontent' style='width:324px;height:250px;vertical-align:middle;display:table-cell;text-align:center;font-size:30px;line-height:50px;'></div>
            </div>
        </div>
    </div>

    <div id='div1'>
        <div id='div1h'>
            <img class='kuangh' src='<?=$p?>images/kuang.png'>
            <div class='divh'>
               <img id='img1h' style='position:absolute'>
            </div>
        </div>

        <div id='div1v'>
            <img class='kuangv' src='<?=$p?>images/kuang2.png'>
            <div class='divv'>
                <img id='img1v' style='position:absolute'>
            </div>
        </div>
    </div>

    <div id='div2'>
        <div id='div2h'>
            <img class='kuangh' src='<?=$p?>images/kuang.png'>
            <div class='divh'>
               <img id='img2h' style='position:absolute'>
            </div>
        </div>

        <div id='div2v'>
            <img class='kuangv' src='<?=$p?>images/kuang2.png'>
            <div class='divv'>
                <img id='img2v' style='position:absolute'>
            </div>
        </div>
    </div>
</div>

<script>

var change_list = ['<?=$p?>images/01.jpg','<?=$p?>images/01.jpg','<?=$p?>images/01.jpg','<?=$p?>images/01.jpg','<?=$p?>images/01.jpg','<?=$p?>images/01.jpg','<?=$p?>images/01.jpg','<?=$p?>images/01.jpg','<?=$p?>images/01.jpg','<?=$p?>images/01.jpg','<?=$p?>images/01.jpg','<?=$p?>images/01.jpg',]

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

var delaytime=4000;
function id(name)
{
    return document.getElementById(name);
}
function load_images()
{
    change_bg();
    load_imagesbegin();
}
function load_imagesbegin()
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
            liangziyun_fromkawa();
        }
        else
        {
            dis_titletime = delaytime- dis_titletime;
            timeout0 = setTimeout(function()
                {
                    liangziyun_fromkawa();
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
            liangziyun_fromkawa();
        }
        else
        {
            dis_titletime = delaytime- dis_titletime;
            timeout0 = setTimeout(function()
                {
                    liangziyun_fromkawa();
                },dis_titletime);
        }

    }
}
function showtitle()
{
    id('pagetitle').style.webkitAnimation = 'fadein_left 1.5s cubic-bezier(.27,.4,.83,1) both';
    id('titlecontent').innerHTML = e_desc;
}
function liangziyun_fromkawa()
{
    id('pagetitle').style.webkitAnimation = 'fadeout_left 2s ease-in both';
    showkawa1();
}
function showkawa1()
{
    setImage('1');
    id('div1').style.webkitAnimation = 'fadein_left 2s ease-out both';
    timeout1 = setTimeout(showkawa2,5000)
}
function showkawa2()
{
    setImage('2');
    id('div1').style.webkitAnimation = 'fadeout_left 1.5s ease-in both';
    id('div2').style.webkitAnimation = 'fadein_left 2s ease-out both';
    timeout2 = setTimeout(showkawa3,5000)
}
function showkawa3()
{
    setImage('1');
    id('div2').style.webkitAnimation = 'fadeout_left 1.5s ease-in both';
    id('div1').style.webkitAnimation = 'fadein_left 2s ease-out both';
    timeout3 = setTimeout(showkawa4,5000)
}
function recordname()
{
    
}
function showkawa4()
{
    setImage('2');
    id('div1').style.webkitAnimation = 'fadeout_down 1.5s ease-in both';
    id('div2').style.webkitAnimation = 'fadein_down 2s ease-out both';
    timeout4 = setTimeout(showkawa5,5000)
}

function showkawa5()
{
    setImage('1');
    id('div2').style.webkitAnimation = 'fadeout_up 1.5s ease-in both';
    id('div1').style.webkitAnimation = 'fadein_up 2s ease-out both';
    timeout5 = setTimeout(showkawa6,5000)
}

function showkawa6()
{
    setImage('2');
    id('div1').style.webkitAnimation = 'fadeout_center 1.5s ease-in both';
    id('div2').style.webkitAnimation = 'fadein_left 2s ease-out both';
    timeout6 = setTimeout(showkawa3,5000);
}

function change_bg()
{
    change_div = id('change_bg');
    change_index = 0;
    recordname();
    setInterval(changing,100)
}

function changing()
{
    change_div.src=change_list[change_index];
    change_index++;
    if(change_index == change_list.length)
        change_index = 0;
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
        div1 = id('div'+idname+'v');
        width = 467;
        height = 300;
    }
    else
    {
        divname = idname + 'v';
        div = id('div'+idname+'v');
        div1 = id('div'+idname+'h');
        width = 375;
        height = 520;
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
    if(image_url_index==Onload_imgs_url.length)
        image_url_index = 0;
}


call_me(load_images);

function reload_scene()
{
    clearnode();
    reshow = true;
    setTimeout(load_imagesbegin,100);
}

function clearnode()
{
    id('div1').style.webkitAnimation = '';
    id('div2').style.webkitAnimation = '';
    id('pagetitle').style.webkitAnimation = '';
    clearTimeout(timeout0);
    clearTimeout(timeout1);
    clearTimeout(timeout2);
    clearTimeout(timeout3);
    clearTimeout(timeout4);
    clearTimeout(timeout5);
    clearTimeout(timeout6);
}
</script>