<?
$p=$_WEITE['web_pic_url']."tonghua/";
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
    background-color: white;
}

#container
{
    width: 500px;
    height: 100%;
    position: absolute;
    overflow: hidden;
    background-image: url(<?=$p?>images/bg.jpg)
}
#container > div,#container > img
{
    position: absolute;
}
#pagetitle
{
    position: absolute;
    left: 55px;
    top: 201px;
    width: 400px;
    height: 323px;
    opacity: 0;
}
#div1h,#div2h,#div3h,#div4h
{
    left: 5px;
    top: 191px;
    position: absolute;
}
.divh
{
    width: 320px;
    height: 207px;
    left: 52px;
    top: 68px;
    position: absolute;
    overflow: hidden;
}
#div1v,#div2v,#div3v,#div4v
{
    left: 17px;
    top: 153px;
    position: absolute;
}
.divv
{
    width: 223px;
    height: 327px;
    left: 68px;
    top: 59px;
    position: absolute;
    overflow: hidden;
}
#div1
{
    -webkit-transform: translate(0px,621px);
}
#div2
{
    -webkit-transform: translate(0px,621px);
    left: 50px;
}
#div3
{
    left: 23px;
    top: -16px;
    -webkit-transform: translate(461px,0px);
}
#div4
{
    left: 80px;
    -webkit-transform: translate(0px,-600px);
}
</style>
<style type="text/css">
#pFQI2W33c-an-obj-1 {
    position:absolute;
    -webkit-transform: translate3d(0px, 0px, 0px);
    
    width: 500px;
    height: 815px;
    top:0; left:0;
}

#pFQI2W33c-an-obj-2 {
    position:absolute;
    -webkit-transform: translate3d(88px, 549px, 0px);
    width: 114px;
    height: 116px;
    top:77px; left:0;
    -webkit-animation: ani-pFQI2W33c-an-obj-2-0 2.5127s 0s infinite linear both ;
}

@-webkit-keyframes ani-pFQI2W33c-an-obj-2-0 {
    0% {
        -webkit-transform: translate3d(88px, 549px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg);
        -webkit-animation-timing-function:linear;
    }
    100% {
        -webkit-transform: translate3d(88px, 549px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(360deg);
        -webkit-animation-timing-function:linear;
    }
}

#pFQI2W33c-an-obj-3 {
    position:absolute;
    -webkit-transform: translate3d(28px, 107px, 0px);
    width: 233px;
    height: 133px;
    top:0; left:0;
    -webkit-animation: ani-pFQI2W33c-an-obj-3-0 1.981s 0.0063s infinite linear alternate both ;
}

@-webkit-keyframes ani-pFQI2W33c-an-obj-3-0 {
    0% {
        -webkit-transform: translate3d(28px, 107px, 0px);
        -webkit-animation-timing-function:linear;
    }
    100% {
        -webkit-transform: translate3d(58px, 109px, 0px);
        -webkit-animation-timing-function:linear;
    }
}

#pFQI2W33c-an-obj-4 {
    position:absolute;
    -webkit-transform: translate3d(308px, 85px, 0px);
    width: 233px;
    height: 133px;
    top:0; left:0;
    -webkit-animation: ani-pFQI2W33c-an-obj-4-0 1.981s 0.1646s infinite linear alternate both ;
}

@-webkit-keyframes ani-pFQI2W33c-an-obj-4-0 {
    0% {
        -webkit-transform: translate3d(308px, 85px, 0px);
        -webkit-animation-timing-function:linear;
    }
    100% {
        -webkit-transform: translate3d(345px, 87px, 0px);
        -webkit-animation-timing-function:linear;
    }
}
</style>
<style type="text/css">
@-webkit-keyframes title_in
{
    from  {-webkit-transform: scale(1.2);opacity: 0}
    to    {-webkit-transform: scale(1);opacity: 1}
}
@-webkit-keyframes title_out
{
    from  {-webkit-transform: scale(1);opacity: 1}
    to    {-webkit-transform: scale(1) translate(0px,-500px);opacity: 1}
}
@-webkit-keyframes div1_in
{
    from  {-webkit-transform: translate(0px,621px);}
    to    {-webkit-transform: translate(0px,0px);}
}
@-webkit-keyframes div1_out
{
    from  {-webkit-transform: translate(0px,0px);}
    to    {-webkit-transform: translate(0px,-600px);}
}
@-webkit-keyframes div2_in
{
    from  {-webkit-transform: translate(0px, 621px);}
    to    {-webkit-transform: translate(0px,-30px);}
}
@-webkit-keyframes div2_out
{
    from  {-webkit-transform: translate(0px,-30px);}
    to    {-webkit-transform: translate(-378px,-600px);}
}
@-webkit-keyframes div3_in
{
    from  {-webkit-transform: translate(461px,0px);}
    to    {-webkit-transform: translate(0px,0px);}
}
@-webkit-keyframes div3_out
{
    from  {-webkit-transform: translate(0px,0px);}
    to    {-webkit-transform: translate(0px,620px);}
}
@-webkit-keyframes div4_in
{
    from  {-webkit-transform: translate(0px,-600px);}
    to    {-webkit-transform: translate(0px,0px);}
}
@-webkit-keyframes div4_out
{
    from  {-webkit-transform: translate(0px,0px);}
    to    {-webkit-transform: translate(0px,-600px);}
}
</style>
<div id='container'>

    <div id='pagetitle'>
        <img src='<?=$p?>images/hk.png' width='400'>
        <div style='position:absolute;width:284px;height:184px;top:67px;left:55px;overflow:hidden;'>
            <div style='position:absolute;width:284px;height:184px;display:table;overflow:hidden;'>
                <div id='titlecontent' style='width:284px;height:184px;vertical-align:middle;display:table-cell;text-align:center;font-size:30px;line-height:45px;color:#555555;opacity:0;'></div>
            </div>
        </div>
    </div>

    <div id='div1'>
        <div id='div1h' style='display:none'>
            <img src='<?=$p?>images/hk.png'>
            <div class='divh'>
                <img id='img1h' style='position:absolute'>
            </div>
        </div>
        <div id='div1v' style='display:none'>
            <img src='<?=$p?>images/sk.png'>
            <div class='divv'>
                <img id='img1v' style='position:absolute'>
            </div>
        </div>
    </div>
    <div id='div2'>
        <div id='div2h' style='display:none'>
            <img src='<?=$p?>images/hk.png'>
            <div class='divh'>
                <img id='img2h' style='position:absolute'>
            </div>
        </div>
        <div id='div2v' style='display:none'>
            <img src='<?=$p?>images/sk.png'>
            <div class='divv'>
                <img id='img2v' style='position:absolute'>
            </div>
        </div>
    </div>
    <div id='div3'>
        <div id='div3h' style='display:none'>
            <img src='<?=$p?>images/hk.png'>
            <div class='divh'>
                <img id='img3h' style='position:absolute'>
            </div>
        </div>
        <div id='div3v' style='display:none'>
            <img src='<?=$p?>images/sk.png'>
            <div class='divv'>
                <img id='img3v' style='position:absolute'>
            </div>
        </div>
    </div>
    <div id='div4'>
        <div id='div4h' style='display:none'>
            <img src='<?=$p?>images/hk.png'>
            <div class='divh'>
                <img id='img4h' style='position:absolute'>
            </div>
        </div>
        <div id='div4v' style='display:none'>
            <img src='<?=$p?>images/sk.png'>
            <div class='divv'>
                <img id='img4v' style='position:absolute'>
            </div>
        </div>
    </div>




    <div id="pFQI2W33c-an-obj-1"><div><img  height="815" width="500"  src="<?=$p?>images/biankuang140.jpg" style='-webkit-mask-image:url(<?=$p?>images/biankuang140cover.png);'></div></div>
    <div id="pFQI2W33c-an-obj-2"><div><img  height="116" width="114"  src="http://7u2r5e.com2.z0.glb.qiniucdn.com/tiezhi/biankuang140/biankuang140_1.png"></div></div>
    <div id="pFQI2W33c-an-obj-3"><div><img  height="85" width="150"  src="http://7u2r5e.com2.z0.glb.qiniucdn.com/tiezhi/biankuang140/biankuang140_2.png"></div></div>
    <div id="pFQI2W33c-an-obj-4"><div><img  height="85" width="150"  src="http://7u2r5e.com2.z0.glb.qiniucdn.com/tiezhi/biankuang140/biankuang140_2.png"></div></div>

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
function id(name)
{
    return document.getElementById(name);
}


function showtitle()
{
    id('pagetitle').style.webkitAnimation = 'title_in 0.5s ease-in both';
    id('titlecontent').innerHTML = e_desc;
    id('titlecontent').style.webkitAnimation = 'title_in 0.5s 0.2s ease-in both';
}

function liangziyun_fromkawa()
{
    setImage('1');
    id('pagetitle').style.webkitAnimation = 'title_out 4s cubic-bezier(.26,.01,.7,.7) both';
    id('div1').style.webkitAnimation = 'div1_in 4s cubic-bezier(.24,.2,.64,.99) both';

    timeout1 = setTimeout(show2,5000)
}

function show2()
{
    setImage('2')
    id('div1').style.webkitAnimation = 'div1_out 4s 1s cubic-bezier(.26,.01,.7,.7) both';
    id('div2').style.webkitAnimation = 'div2_in 4s ease-out both';

    timeout2 = setTimeout(show3, 6000)
}
function show3()
{
    setImage('3')
    id('div2').style.webkitAnimation = 'div2_out 4s ease-in both';
    id('div3').style.webkitAnimation = 'div3_in 4s ease-out both';

    timeout3 = setTimeout(show4,5000)
}
function show4()
{
    setImage('4')
    id('div3').style.webkitAnimation = 'div3_out 4s ease-in both';
    id('div4').style.webkitAnimation = 'div4_in 4s ease-out both';

    timeout4 = setTimeout(show1,5000)
}
function show1()
{
    setImage('1')
    id('div4').style.webkitAnimation = 'div4_out 4s ease-in both';
    id('div1').style.webkitAnimation = 'div1_in 4s ease-out both';

    timeout5 = setTimeout(show2,5000);
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
        width = 320;
        height = 207;
    }
    else
    {
        divname = idname + 'v';
        div = id('div'+idname+'v');
        div1 = id('div'+idname+'h');
        width = 223;
        height = 327;
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
    setTimeout(load_images,100);
}

function clearnode()
{
    id('div1').style.webkitAnimation = '';
    id('div2').style.webkitAnimation = '';
    id('div3').style.webkitAnimation = '';
    id('div4').style.webkitAnimation = '';
    id('pagetitle').style.webkitAnimation = '';
    id('titlecontent').style.webkitAnimation = '';
    clearTimeout(timeout0);
    clearTimeout(timeout1);
    clearTimeout(timeout2);
    clearTimeout(timeout3);
    clearTimeout(timeout4);
    clearTimeout(timeout5);
}
</script>