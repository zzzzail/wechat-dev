<?
$p=$_WEITE['web_pic_url']."laodongjie/";
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
    background-image: url('<?=$p?>images/bg.jpg')
}
.diqiu
{
    position: absolute;
    top: 719px;
}
.page
{
    width: 500px;
    height: 815px;
    position: absolute;
    -webkit-transform-origin: 50% 208%;
    -webkit-transform: rotate(0deg);
}
.title_tiao
{
    left: 235px;
    top: 544px;
    position: absolute;
}
.title_xin
{
    position: absolute;
    left: 54px;
    top: 214px;
}
.title_shaz
{
    position: absolute;
    left: 285px;
    top: 453px;
    -webkit-transform: rotate(11deg);
}
.shukuang
{
    left: 70px;
    top: 131px;
    position: absolute;
}
.yezishu
{
    left: 290px;
    top: 536px;
    position: absolute;
    -webkit-transform: rotate(5deg);
}
.shutu
{
    width: 330px;
    height: 450px;
    background-color: #fff;
    position: absolute;
    left: 83px;
    top: 144px;
    overflow: hidden;
}
.hengtu
{
    width: 383px;
    height: 280px;
    top: 255px;
    left: 59px;
    position: absolute;
    background-color: #fff;
    overflow: hidden;
}
.hengkuang
{
    left: 44px;
    top: 242px;
    position: absolute;
}
.fengche
{
    position: absolute;
    left: 303px;
    top: 626px;
    -webkit-transform: rotate(6deg);
}
.fengchi
{
    position: absolute;
    left: 296px;
    top: 539px;
    -webkit-animation: fengchemoving 5s linear infinite;
}
.dengta
{
    position: absolute;
    left: 368px;
    top: 545px;
    -webkit-transform: rotate(10deg);
    -webkit-animation: dengtamoving 1.5s linear infinite alternate;
}
.huoshan
{
    position: absolute;
    left: 284px;
    top: 600px;
    -webkit-transform: rotate(11deg);
}
.qiqiu
{
    position: absolute;
    left: -209px;
    top: 12px;
    width: 180px;
    -webkit-animation: qiqiumoving 20s linear infinite;
}

.yun1 
{
    position: absolute;
    left: 115px;
    top: 27px;
    -webkit-transform: translate(-376px,3px) rotate(-3deg);
    /*-webkit-transform-origin: 50% 700%;*/
    /*-webkit-transform: rotate(-35deg);*/
    -webkit-animation: yun1 18s linear infinite;
}
.yun2
{
    position: absolute;
    left: 115px;
    top: 15px;
    width: 200px;
/*    -webkit-transform-origin: 50% 800%;
    -webkit-transform: rotate(-35deg);*/
    -webkit-transform: translate(-376px,3px) rotate(-3deg);
    -webkit-animation: yun1 20s 5s linear infinite;
}
#bird
{
    position: absolute;
    left: 505px;
    top: 578px;
    width: 80px;
}
</style>
<style type="text/css">
@-webkit-keyframes page_in
{
    from  {-webkit-transform: rotate(19deg);}
    to    {-webkit-transform: rotate(0deg);}
}
@-webkit-keyframes page1_in
{
    from  {-webkit-transform: rotate(23deg);}
    to    {-webkit-transform: rotate(0deg);}
}

@-webkit-keyframes page_out
{
    from  {-webkit-transform: rotate(0deg);}
    to    {-webkit-transform: rotate(-18deg);}
}
@-webkit-keyframes page0_back
{
    from  {-webkit-transform: rotate(-18deg);}
    to    {-webkit-transform: rotate(-35deg);}
}
@-webkit-keyframes page1_out
{
    from  {-webkit-transform: rotate(0deg);}
    to    {-webkit-transform: rotate(-19deg);}
}
@-webkit-keyframes page1_back
{
    from  {-webkit-transform: rotate(-19deg);}
    to    {-webkit-transform: rotate(-35deg);}
}
@-webkit-keyframes page2_out
{
    from  {-webkit-transform: rotate(0deg);}
    to    {-webkit-transform: rotate(-17deg);}
}
@-webkit-keyframes page2_back
{
    from  {-webkit-transform: rotate(-17deg);}
    to    {-webkit-transform: rotate(-30deg);}
}
@-webkit-keyframes fengchemoving
{
    from  {-webkit-transform: rotate(0deg);}
    to    {-webkit-transform: rotate(360deg);}
}
@-webkit-keyframes page4_out
{
    from  {-webkit-transform: rotate(0deg);}
    to    {-webkit-transform: rotate(-22deg);}
}
@-webkit-keyframes page4_back
{
    from {-webkit-transform: rotate(-22deg);}
    to   {-webkit-transform: rotate(-35deg);}
}
@-webkit-keyframes qiqiumoving
{
    from  {-webkit-transform: rotate(-3deg);}
    to    {-webkit-transform: translate(687px,32px) rotate(6deg);}
}
@-webkit-keyframes yun1
{
    from  {-webkit-transform: translate(-376px,3px) rotate(-3deg);}
    to    {-webkit-transform: translate(376px,3px) rotate(3deg);}
}
@-webkit-keyframes bird
{
    from  {-webkit-transform: translate(0px,0px);}
    to    {-webkit-transform: translate(-600px,-10px) scale(1.7);}
}
@-webkit-keyframes div_out
{
    from  {-webkit-transform: rotate(0deg);}
    to    {-webkit-transform: rotate(-10deg);}
}
@-webkit-keyframes dengtamoving
{
    from  {-webkit-transform: rotate(10deg);}
    to    {-webkit-transform: rotate(15deg);}
}
</style>

<div id='container'>

    <img class='diqiu' src='<?=$p?>images/dizi3.png'>

    <img class='yun2' src='<?=$p?>images/yun.png'>
    <img class='yun1' src='<?=$p?>images/yun.png'>

    <div id='page4' class='page' style='-webkit-transform: rotate(23deg)'>
        
        <div id='div4' class='page'>
            <img class='title_tiao' src='<?=$p?>images/tiao.png'>
            <div id='div4v' class='shutu'>
                <img id='img4v' style='position:absolute'>
            </div>
            <img id='kuang4v' class='shukuang' src='<?=$p?>images/shu.png'>

            <div id='div4h' class='hengtu'>  
                <img id='img4h' style='position:absolute'>
            </div>
            <img id='kuang4h' class='hengkuang' src='<?=$p?>images/heng.png'>
        </div>
        

        <img class='huoshan' src='<?=$p?>images/shan.png'>
    </div>


    <div id='page3' class='page' style='-webkit-transform: rotate(23deg)'>

        <div id='div3' class='page'>
            <img class='title_tiao' src='<?=$p?>images/tiao.png'>
            <div id='div3v' class='shutu'>
                <img id='img3v' style='position:absolute'>
            </div>
            <img id='kuang3v' class='shukuang' src='<?=$p?>images/shu.png'>

            <div id='div3h' class='hengtu'>
                <img id='img3h' style='position:absolute'>
            </div>
            <img id='kuang3h' class='hengkuang' src='<?=$p?>images/heng.png'>
        </div>

        <img class='dengta' src='<?=$p?>images/dengta.png'>
    </div>


    <div id='page2' class='page' style='-webkit-transform: rotate(23deg)'>

        <div id='div2' class='page'>
            <img class='title_tiao' src='<?=$p?>images/tiao.png'>
            <div id='div2v' class='shutu'>
                <img id='img2v' style='position:absolute'>
            </div>
            <img id='kuang2v' class='shukuang' src='<?=$p?>images/shu.png'>

            <div id='div2h' class='hengtu'>
                <img id='img2h' style='position:absolute'>
            </div>
            <img id='kuang2h' class='hengkuang' src='<?=$p?>images/heng.png'>
        </div>

        <img class='fengche' src='<?=$p?>images/fengche.png'>
        <img class='fengchi' src='<?=$p?>images/fengchi.png'>
    </div>

    <div id='page1' class='page' style='-webkit-transform: rotate(23deg)'>
        
        <div id='div1' class='page'>
            <img class='title_tiao' src='<?=$p?>images/tiao.png'>
            <div id='div1v' class='shutu'>
                <img id='img1v' style='position:absolute'>
            </div>
            <img id='kuang1v' class='shukuang' src='<?=$p?>images/shu.png'>

            <div id='div1h' class='hengtu'>
                <img id='img1h' style='position:absolute'>
            </div>
            <img id='kuang1h' class='hengkuang' src='<?=$p?>images/heng.png'>
        </div>

        <img class='yezishu' src='<?=$p?>images/yezishu.png'>
    </div>

    <div id='page0' class='page' style='-webkit-transform: rotate(19deg)'>
        <img class='title_tiao' src='<?=$p?>images/tiao.png'>
        <img class='title_xin' src='<?=$p?>images/xin.png'>
        <img class='title_shaz' src='<?=$p?>images/shaz.png'>

        <div id='pagetitle' style='position:absolute;width:276px;height:200px;top:270px;left:103px;font-size:30px;overflow:hidden;'>
            <div style='position:absolute;width:276px;height:200px;top:0px;left:0px;overflow:hidden;'>
                <div style='position:absolute;width:276px;height:200px;display:table;overflow:hidden;'>
                    <div id='titlecontent' style='width:276px;height:200px;vertical-align:middle;display:table-cell;text-align:center;color:#000;'></div>
                </div>
            </div>
        </div>
    </div>

    <img class='qiqiu' src='<?=$p?>images/qiqiu.png'>
    <img id='bird' src='<?=$p?>images/b1.gif'>



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

var delaytime=5000;
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
            liangziyun_kawa();
        }
        else
        {
            dis_titletime = delaytime- dis_titletime;
            timeout0 = setTimeout(function()
                {
                    liangziyun_kawa();
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
            liangziyun_kawa();
        }
        else
        {
            dis_titletime = delaytime- dis_titletime;
            timeout0 = setTimeout(function()
                {
                    liangziyun_kawa();
                },dis_titletime);
        }

    }
}

function showtitle()
{
    id('titlecontent').innerHTML = e_desc;

    id('page0').style.webkitAnimation = 'page_in 3s ease-out both';
    id('bird').style.webkitAnimation = 'bird 3s linear both';

}

function liangziyun_kawa()
{
    setImage('1');
    id('page0').style.webkitAnimation = 'page_out 2s cubic-bezier(.22,.25,.72,1) both';

    id('page1').style.webkitAnimation = 'page1_in 2s cubic-bezier(.22,.25,.72,1) both';

    timeout1 = setTimeout(show2,4000)
}

function show2()
{
    setImage('2');
    id('page0').style.webkitAnimation = 'page0_back 2s cubic-bezier(.22,.25,.72,1) both';
    id('page1').style.webkitAnimation = 'page1_out 2s cubic-bezier(.22,.25,.72,1) both';
    id('div1').style.webkitAnimation = 'div_out 2s linear both';
    id('div2').style.webkitAnimation = '';

    id('page2').style.webkitAnimation = 'page1_in 2s cubic-bezier(.22,.25,.72,1) both';

    timeout2 = setTimeout(show3,4000)
}

function show3()
{
    setImage('3');
    id('page0').style.display = 'none';
    id('page4').style.display = 'none';
    id('page1').style.display = 'block';
    id('page2').style.display = 'block';
    id('page3').style.display = 'block';
    id('page1').style.webkitAnimation = 'page1_back 2s cubic-bezier(.22,.25,.72,1) both';
    id('page2').style.webkitAnimation = 'page2_out 2s cubic-bezier(.22,.25,.72,1) both';
    id('div2').style.webkitAnimation = 'div_out 2s linear both';
    id('div3').style.webkitAnimation = '';

    id('page3').style.webkitAnimation = 'page1_in 2s cubic-bezier(.22,.25,.72,1) both';

    timeout3 = setTimeout(show4,4000)
}

function show4()
{
    setImage('4');
    id('page1').style.display = 'none';
    id('page2').style.display = 'block';
    id('page3').style.display = 'block';
    id('page4').style.display = 'block';
    id('page2').style.webkitAnimation = 'page2_back 2s cubic-bezier(.22,.25,.72,1) both';
    id('page3').style.webkitAnimation = 'page_out 2s cubic-bezier(.22,.25,.72,1) both';
    id('div3').style.webkitAnimation = 'div_out 2s linear both';
    id('div4').style.webkitAnimation = '';

    id('page4').style.webkitAnimation = 'page1_in 2s cubic-bezier(.22,.25,.72,1) both';

    timeout4 = setTimeout(show5,4000)
}

function show5()
{
    setImage('1');
    id('page2').style.display = 'none';
    id('page1').style.display = 'block';
    id('page3').style.display = 'block';
    id('page4').style.display = 'block';
    id('page3').style.webkitAnimation = 'page0_back 2s cubic-bezier(.22,.25,.72,1) both';
    id('page4').style.webkitAnimation = 'page4_out 2s cubic-bezier(.22,.25,.72,1) both';
    id('div4').style.webkitAnimation = 'div_out 2s linear both';
    id('div1').style.webkitAnimation = '';

    id('page1').style.webkitAnimation = 'page1_in 2s cubic-bezier(.22,.25,.72,1) both';

    timeout5 = setTimeout(show6,4000)
}

function show6()
{
    setImage('2');
    id('page3').style.display = 'none';
    id('page1').style.display = 'block';
    id('page2').style.display = 'block';
    id('page4').style.display = 'block';
    id('page4').style.webkitAnimation = 'page4_back 2s cubic-bezier(.22,.25,.72,1) both';
    id('page1').style.webkitAnimation = 'page1_out 2s cubic-bezier(.22,.25,.72,1) both';
    id('div1').style.webkitAnimation = 'div_out 2s linear both';
    id('div2').style.webkitAnimation = '';

    id('page2').style.webkitAnimation = 'page1_in 2s cubic-bezier(.22,.25,.72,1) both';

    timeout6 = setTimeout(show3,4000)
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
        width = 383;
        height = 280;
        id('kuang'+idname+'h').style.display = 'block';
        id('kuang'+idname+'v').style.display = 'none';
    }
    else
    {
        divname = idname + 'v';
        div = id('div'+idname+'v');
        div1 = id('div'+idname+'h');
        width = 330;
        height = 450;
        id('kuang'+idname+'v').style.display = 'block';
        id('kuang'+idname+'h').style.display = 'none';
    }

    div.style.display = 'block';
    div1.style.display = 'none';

    var img = id('img'+divname);
    img.src = Onload_imgs_url[image_url_index];

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
    id('page0').style.display = 'block';
    id('page1').style.display = 'block';
    id('page2').style.display = 'block';
    id('page3').style.display = 'none';
    id('page4').style.display = 'none';
    id('page0').style.webkitAnimation = '';
    id('page1').style.webkitAnimation = '';
    id('page2').style.webkitAnimation = '';
    id('page3').style.webkitAnimation = '';
    id('page4').style.webkitAnimation = '';
    id('bird').style.webkitAnimation = '';
    for(var i=1;i<5;i++)
    {
        id('div'+i+'v').style.display = 'none';
        id('div'+i+'h').style.display = 'none';
        id('kuang'+i+'v').style.display = 'none';
        id('kuang'+i+'h').style.display = 'none';
    }
    clearTimeout(timeout0);
    clearTimeout(timeout1);
    clearTimeout(timeout2);
    clearTimeout(timeout3);
    clearTimeout(timeout4);
    clearTimeout(timeout5);
    clearTimeout(timeout6);
}

</script>