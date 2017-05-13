<?
$p=$_WEITE['web_pic_url']."qingxi/";
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
#kuang1
{
    background-image: url('<?=$p?>images/011.png');
    width: 218px;
    height: 225px;
    background-position: -281px 0px;
    -webkit-transform: translate(0px,650px) scale(-1,-1);
}
#yezi1
{
    left: 199px;
    top: 17px;
    -webkit-animation: yezimove 13s linear infinite;
}
#yezi2
{
    left: 398px;
    top: 108px;
    -webkit-animation: yezimove 15s 4s linear infinite;
}
#yezi3
{
    left: 509px;
    top: 517px;
    -webkit-animation: yezimove 12s 2s linear infinite;
}
#pagetitle
{
    left: 102px;
    top: 273px;
}
#div1v,#div3v,#div4v
{
    left: 40px;
    top: 98px;
    width: 420px;
    height: 620px;
    border: 7px solid #fff;
    overflow: hidden;
    opacity: 0;
    position: absolute;
}
#div1h,#div3h,#div4h
{
    left: 25px;
    top: 240px;
    width: 450px;
    height: 300px;
    border: 7px solid #fff;
    overflow: hidden;
    position: absolute;
    opacity: 0;
}
#word1
{
    left: 341px;
    top: 577px;
    opacity: 0;
}
#word2
{
    left: 358px;
    top: 473px;
    opacity: 0;
}
#div21h
{
    left: 25px;
    width: 450px;
    height: 300px;
    top: 139px;
    border: 6px solid #fff;
    overflow: hidden;
    opacity: 0;
    position: absolute;
}
#div22h
{
    left: 25px;
    width: 360px;
    height: 240px;
    top: 469px;
    border: 6px solid #fff;
    overflow: hidden;
    opacity: 0;
    position: absolute;
}
#div21v
{
    left: 165px;
    width: 293px;
    height: 400px;
    top: 58px;
    border: 6px solid #fff;
    overflow: hidden;
    opacity: 0;
    position: absolute;
}
#div22v
{
    left: 22px;
    width: 250px;
    height: 320px;
    top: 409px;
    border: 6px solid #fff;
    overflow: hidden;
    position: absolute;
    opacity: 0;
}
#word3
{
    left: 10px;
    top: 579px;
    opacity: 0;
}
#word4
{
    left: 334px;
    top: 584px;
    opacity: 0;
}
#div51h
{
    left: 25px;
    top: 74px;
    width: 450px;
    height: 300px;
    border: 7px solid #fff;
    overflow: hidden;
    opacity: 0;
    position: absolute;
}
#div52h
{
    left: 25px;
    top: 392px;
    width: 450px;
    height: 300px;
    border: 7px solid #fff;
    overflow: hidden;
    opacity: 0;
    position: absolute;
}
#div51v
{
    left: 220px;
    top: 56px;
    width: 270px;
    height: 370px;
    border: 7px solid #fff;
    overflow: hidden;
    opacity: 0;
    position: absolute;
}
#div52v
{
    left: 15px;
    top: 368px;
    width: 270px;
    height: 370px;
    border: 7px solid #fff;
    overflow: hidden;
    opacity: 0;
    position: absolute;
}
#word5
{
    left: 355px;
    top: 455px;
    opacity: 0;
}
</style>
<style type="text/css">
@-webkit-keyframes yezimove
{
    from  {-webkit-transform: translate(0px,0px) rotate(0deg);}
    to    {-webkit-transform: translate(-700px, 700px) rotate(360deg);}
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
@-webkit-keyframes div1_in
{
    from  {-webkit-transform: translate(20px,0px);opacity: 0}
    to    {-webkit-transform: translate(0px,0px);opacity: 1}
}
@-webkit-keyframes div1_out
{
    from  {-webkit-transform: translate(0px,0px);opacity: 1}
    to    {-webkit-transform: translate(-20px,0px);opacity: 0}
}
@-webkit-keyframes con1
{
    from  {-webkit-trasnform: translate(20px,0px);}
    to    {-webkit-transform: translate(-10px,0px);}
}
@-webkit-keyframes div21h_in
{
    from  {-webkit-transform: translate(0px,50px);opacity: 0}
    to    {-webkit-transform: translate(0px,0px);opacity: 1}
}
@-webkit-keyframes con2
{
    from  {-webkit-transform: translate(0px,-8px);}
    to    {-webkit-transform: translate(0px,8px);}
}
@-webkit-keyframes div3_in
{
    from  {-webkit-transform: translate(0px,-30px);opacity: 0}
    to    {-webkit-transform: translate(0px,0px);opacity: 1}
}
@-webkit-keyframes div3_out
{
    from  {-webkit-transform: translate(0px,0px);opacity: 1}
    to    {-webkit-transform: translate(0px,-30px);opacity: 0}
}
@-webkit-keyframes con3
{
    from  {-webkit-transform: translate(0px,10px);}
    to    {-webkit-transform: translate(0px,-10px);}
}
@-webkit-keyframes word4_in
{
    from  {-webkit-transform: translate(0px,-20px);opacity: 0}
    to    {-webkit-transform: translate(0px,0px);opacity: 1}
}
@-webkit-keyframes word4_out
{
    from  {-webkit-transform: translate(0px,0px);opacity: 1}
    to    {-webkit-transform: translate(0px,-20px);opacity: 0}
}
@-webkit-keyframes con5
{
    from  {-webkit-transform: translate(0px,-20px);}
    to    {-webkit-transform: translate(0px,0px);}
}
@-webkit-keyframes div51_in
{
    from  {-webkit-transform: translate(-100px,-70px);opacity: 0}
    to    {-webkit-transform: translate(0px,0px);opacity: 1}
}
@-webkit-keyframes div51_out
{
    from  {-webkit-transform: translate(0px,0px);opacity: 1}
    to    {-webkit-transform: translate(100px,70px);opacity: 0}
}
@-webkit-keyframes div52_in
{
    from  {-webkit-transform: translate(100px,70px);opacity: 0}
    to    {-webkit-transform: translate(0px,0px);opacity: 1}
}
@-webkit-keyframes div52_out
{
    from  {-webkit-transform: translate(0px,0px);opacity: 1}
    to    {-webkit-transform: translate(-100px,-70px);opacity: 0}
}
@-webkit-keyframes word5_in
{
    from  {-webkit-transform: translate(0px,20px);opacity: 0}
    to    {-webkit-transform: translate(0px,0px);opacity: 1}
}
@-webkit-keyframes word5_out
{
    from  {-webkit-transform: translate(0px,0px);opacity: 1}
    to    {-webkit-transform: translate(0px,20px);opacity: 0}
}
</style>

<div id='container'>
    <img src='<?=$p?>images/bg.jpg'>

    <img src='<?=$p?>images/011.png' style='top:-20px;'>


    <img id='yezi1' src='<?=$p?>images/yez.png'>
    <img id='yezi2' src='<?=$p?>images/yez.png'>
    <img id='yezi3' src='<?=$p?>images/yez.png'>

    <div id='kuang1'></div>

    <div id='con1'>
        <div id='div1v'>
            <img id='img1v' style='position:absolute'>
        </div>
        <div id='div1h'>
            <img id='img1h' style='position:absolute'>
        </div>
    </div>
    <img id='word1' src='<?=$p?>images/chuqing.png'>

    <div id='con2'>
        <div id='div21h'>
            <img id='img21h' style='position:absolute'>
        </div>
        <div id='div21v'>
            <img id='img21v' style='position:absolute'>
        </div>
        <div id='div22h'>
            <img id='img22h' style='position:absolute'>
        </div>
        <div id='div22v'>
            <img id='img22v' style='position:absolute'>
        </div>
    </div>
    <img id='word2' src='<?=$p?>images/rumeng.png'>

    <div id='con3'>
        <div id='div3v'>
            <img id='img3v' style='position:absolute'>
        </div>
        <div id='div3h'>
            <img id='img3h' style='position:absolute'>
        </div>
    </div>
    <img id='word3' src='<?=$p?>images/xianqu.png'>

    
    <div id='con4'>
        <div id='div4v'>
            <img id='img4v' style='position:absolute'>
        </div>
        <div id='div4h'>
            <img id='img4h' style='position:absolute'>
        </div>
    </div>
    <img id='word4' src='<?=$p?>images/yueqing.png'>

    <div id='con5'>
        <div id='div51h'>
            <img id='img51h' style='position:absolute'>
        </div>
        <div id='div51v'>
            <img id='img51v' style='position:absolute'>
        </div>
        <div id='div52h'>
            <img id='img52h' style='position:absolute'>
        </div>
        <div id='div52v'>
            <img id='img52v' style='position:absolute'>
        </div>
    </div>
    <img id='word5' src='<?=$p?>images/yanyu.png'>

    <div id='pagetitle' style='opacity:0;'>
        <img src='<?=$p?>images/title.png'>
        <div style='position:absolute;width:314px;height:239px;top:0px;left:0px;overflow:hidden;'>
            <div style='position:absolute;width:243px;height:232px;display:table;overflow:hidden;left:37px;top:4px;'>
                <div id='titlecontent' style='width:243px;height:232px;vertical-align:middle;display:table-cell;text-align:center;color:#3DEEFE;font-size:30px;'></div>
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

var timeout = [];

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
            to_liangziyunkawa();
        }
        else
        {
            dis_titletime = delaytime- dis_titletime;
            timeout[0] = setTimeout(function()
                {
                    to_liangziyunkawa();
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
            to_liangziyunkawa();
        }
        else
        {
            dis_titletime = delaytime- dis_titletime;
            timeout[0] = setTimeout(function()
                {
                    to_liangziyunkawa();
                },dis_titletime);
        }

    }
}
function id(name)
{
    return document.getElementById(name)
}


function showtitle()
{
    id('pagetitle').style.webkitAnimation = 'fadein 1s linear both';
    id('titlecontent').innerHTML = e_desc;

}

function to_liangziyunkawa()
{
    id('pagetitle').style.webkitAnimation = 'fadeout 1s linear both';
    show1();
}

function show1()
{
    setImage('1');
    id('div1v').style.webkitAnimation = 'div1_in 2s 1s ease-out both';
    id('div1h').style.webkitAnimation = 'div1_in 2s 1s ease-out both';
    id('con1').style.webkitAnimation = 'con1 2s 3s linear both';
    id('word1').style.webkitAnimation = 'fadein 2s 1s linear both';

    timeout[1] = setTimeout(show2,4000)
}

function show2()
{
    setImage('21');
    setImage('22');
    id('div1v').style.webkitAnimation = 'div1_out 1s ease-in both';
    id('div1h').style.webkitAnimation = 'div1_out 1s ease-in both';
    id('word1').style.webkitAnimation = 'fadeout 2s linear both';

    id('div21h').style.webkitAnimation = 'div21h_in 2s 1s ease-out both';
    id('div22h').style.webkitAnimation = 'div21h_in 1.8s 1.2s ease-out both';
    id('div21v').style.webkitAnimation = 'div21h_in 2s 1s ease-out both';
    id('div22v').style.webkitAnimation = 'div21h_in 1.8s 1.2s ease-out both';

    id('con2').style.webkitAnimation = 'con2 3s linear 3s both';

    id('word2').style.webkitAnimation = 'fadein 2s linear 1s both';

    id('con3').style.webkitAnimation = '';

    timeout[2] = setTimeout(show3,5000)
}

function show3()
{
    setImage('3');
    id('div21h').style.webkitAnimation = 'fadeout 1s linear both';
    id('div22h').style.webkitAnimation = 'fadeout 1s linear both';
    id('div21v').style.webkitAnimation = 'fadeout 1s linear both';
    id('div22v').style.webkitAnimation = 'fadeout 1s linear both';

    id('word2').style.webkitAnimation = 'fadeout 1s linear both';

    id('div3v').style.webkitAnimation = 'div3_in 2s 1s ease-out both';
    id('div3h').style.webkitAnimation = 'div3_in 2s 1s ease-out both';
    id('word3').style.webkitAnimation = 'fadein 2s 1s linear both';

    id('con3').style.webkitAnimation = 'con3 3s linear 2s linear both';

    id('con4').style.webkitAnimation = '';

    timeout[3] = setTimeout(show4,5000)
}
function show4()
{
    setImage('4');
    id('div3v').style.webkitAnimation = 'div3_out 1s linear both';
    id('div3h').style.webkitAnimation = 'div3_out 1s linear both';
    id('word3').style.webkitAnimation = 'fadeout 1s linear both';

    id('div4v').style.webkitAnimation = 'div1_in 2s 1s ease-out both';
    id('div4h').style.webkitAnimation = 'div1_in 2s 1s ease-out both';
    id('word4').style.webkitAnimation = 'word4_in 2s 1s ease-out both';

    id('con4').style.webkitAnimation = 'con1 3s 2s linear both';

    id('con5').style.webkitAnimation = '';

    timeout[4] = setTimeout(show5,5000)
}
function show5()
{
    setImage('51');
    setImage('52');
    id('div4v').style.webkitAnimation = 'div1_out 1s linear both';
    id('div4h').style.webkitAnimation = 'div1_out 1s linear both';
    id('word4').style.webkitAnimation = 'word4_out 1s linear both';

    id('div51h').style.webkitAnimation = 'div51_in 2s 1s ease-out both';
    id('div52h').style.webkitAnimation = 'div52_in 2s 1s ease-out both';
    id('div51v').style.webkitAnimation = 'div51_in 2s 1s ease-out both';
    id('div52v').style.webkitAnimation = 'div52_in 2s 1s ease-out both';
    id('word5').style.webkitAnimation = 'word5_in 1.5s 1s linear both';

    id('con5').style.webkitAnimation = 'con5 3s 2s linear both';

    id('con1').style.webkitAnimation = '';

    timeout[5] = setTimeout(show1_1,5000)
}
function show1_1()
{
    setImage('1');
    id('div51h').style.webkitAnimation = 'div51_out 1s ease-in both';
    id('div52h').style.webkitAnimation = 'div52_out 1s ease-in both';
    id('div51v').style.webkitAnimation = 'div51_out 1s ease-in both';
    id('div52v').style.webkitAnimation = 'div52_out 1s ease-in both';

    id('word5').style.webkitAnimation = 'word5_out 1s linear both';

    id('div1v').style.webkitAnimation = 'div1_in 2s 1s ease-out both';
    id('div1h').style.webkitAnimation = 'div1_in 2s 1s ease-out both';
    id('con1').style.webkitAnimation = 'con1 2s 3s linear both';
    id('word1').style.webkitAnimation = 'fadein 2s 1s linear both';

    id('con2').style.webkitAnimation = '';

    timeout[6] = setTimeout(show2,5000)
}


var divwidth = {'1h':450,'1v':420,'21h':450,'21v':293,'22h':360,'22v':250,'3h':450,'3v':420,'4h':450,'4v':420,'51h':450,'51v':270,'52h':450,'52v':270};
var divheight = {'1h':300,'1v':620,'21h':300,'21v':400,'22h':240,'22v':320,'3h':300,'3v':620,'4h':300,'4v':620,'51h':300,'51v':370,'52h':300,'52v':370};

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

    console.log(divname);
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
    for(var i=0;i<timeout.length;i++)
    {
        clearTimeout(timeout[i]);
    }
    var divid = ['div1h','div1v','div21h','div22h','div21v','div22v','div3v','div3h','div4h','div4v','div51h','div52h','div51v','div52v'];
    for(var i=0;i<divid.length;i++)
    {
        var div = id(divid[i]);
        div.style.webkitAnimation = '';
        div.style.display = 'none';
    }
    for(var i=1;i<6;i++)
    {
        id('word'+i).style.webkitAnimation = '';
    }
    id('pagetitle').style.webkitAnimation = '';
}

</script>


