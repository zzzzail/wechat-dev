<?
$p=$_WEITE['web_pic_url']."xuandongxingkong/";
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
        height: 880px;
        position: absolute;
        overflow: hidden;
        top: -65px;
        left: 0px;
        background-color: black;
       
    }
     @-webkit-keyframes liuxing
    {
        0%{-webkit-transform:translate(0px,0px) rotate(0deg);opacity: 1;-webkit-animation-timing-function:linear;}
/*            5%{-webkit-transform:translate(-50px,-10px) #viewer_id#rotate(0deg);opacity: 1}*/
        30%{-webkit-transform:translate(-500px,100px) rotate(-5deg);opacity: 0;-webkit-animation-timing-function:ease-in;}
        100%{-webkit-transform:translate(-500px,100px) rotate(-5deg);opacity: 0;-webkit-animation-timing-function:ease-in;}
    }
    @-webkit-keyframes fadein
    {
        from {opacity: 0}
        to   {opacity: 1}
    }
    @-webkit-keyframes fadeout
    {
        from {opacity: 1}
        to   {opacity: 0}
    }
</style>
<link rel="stylesheet" href="<?=$p?>images/style.css" />
<script type="text/javascript" src="<?=$p?>images/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="<?=$p?>images/ipresenter.packed.js"></script>

<div id='container' class='container'>
    <img src='<?=$p?>images/s.jpg' style='position:absolute;top:0px;left:0px;height:900px;'>
    <img src='<?=$p?>images/2000.png' style='position:absolute;top:100px;left:500px;-webkit-animation: liuxing 5s ease-in 1s infinite;'>
    <img src='<?=$p?>images/2000.png' style='position:absolute;top:200px;left:500px;-webkit-animation: liuxing 5s ease-in 2s infinite;'>
    <img src='<?=$p?>images/2000.png' style='position:absolute;top:300px;left:500px;-webkit-animation: liuxing 5s ease-in infinite;'>
    <img src='<?=$p?>images/2000.png' style='position:absolute;top:0px;left:500px;-webkit-animation: liuxing 5s ease-in 1.5s infinite;'>
    <img src='<?=$p?>images/2000.png' style='position:absolute;top:400px;left:500px;-webkit-animation: liuxing 5s ease-in 3s infinite;'>
    <img src='<?=$p?>images/2000.png' style='position:absolute;top:500px;left:500px;-webkit-animation: liuxing 5s ease-in 4s infinite;'>
    <div id="ipresenter">
        <div id='xuandiv1' class="step" data-x="0" data-y="0" data-pausetime="3000">
            <img id='xuanimg1' width='400'/>
        </div>
        <div id='xuandiv2' class="step" data-x="1500" data-y="0" data-rotatex="180" data-easing="easeInOutQuint" data-pausetime="3000">
            <img id='xuanimg2' width='400'/>
        </div>
        <div id='xuandiv3' class="step" data-x="3000" data-y="0" data-rotatey="180" data-pausetime="3000">
            <img id='xuanimg3' width='400'/>
        </div>
        <div id='xuandiv4' class="step" data-x="4500" data-y="0" data-rotatex="180" data-pausetime="3000">
            <img id='xuanimg4' width='400'/>
        </div>
        <div id='xuandiv5' class="step" data-x="6000" data-y="0" data-rotate="180" data-pausetime="3000">
            <img id='xuanimg5' width='400'/>
        </div>
        <div id='xuandiv6' class="step" data-x="7500" data-y="0" data-rotatey="180" data-pausetime="3000">
            <img id='xuanimg6' width='400'/>
        </div>
        <div id='xuandiv7' class="step" data-x="9000" data-y="0" data-pausetime="3000">
            <img id='xuanimg7' width='400'/>
        </div>
        <div id='xuandiv8' class="step" data-x="10500" data-y="0" data-rotate="80" data-pausetime="3000">
            <img id='xuanimg8' width='400'/>
        </div>
        <div id='xuandiv9' class="step" data-x="12000" data-y="0" data-rotatex="180" data-pausetime="3000">
            <img id='xuanimg9' width='400'/>
        </div>
        <div id='xuandiv10' class="step" data-x="13500" data-y="0" data-rotatey="180" data-pausetime="3000">
            <img id='xuanimg10' width='400'/>
        </div>
        <div id='xuandiv11' class="step" data-x="13000" data-y="0" data-rotatey="-180" data-pausetime="3000">
            <img id='xuanimg11' width='400'/>
        </div>
        <div id='xuandiv12' class="step" data-x="16500" data-y="0" data-rotatey="180" data-pausetime="3000">
            <img id='xuanimg12' width='400'/>
        </div>
    </div>

</div>
<div id='pagetitle' style='position:absolute;width:500px;height:600px;top:0px;left:0px;font-size:45px;color:#fff;overflow:hidden;opacity:0;'>
    <div style='display:table;width:500px;height:200px;top:280px;left:0px;position:absolute;text-align:center;overflow:hidden;position:absolute;'>
        <div id='titlecontent' style='display:table-cell;width:500px;height:200px;vertical-align:middle;padding-left:10px;padding-right:10px;line-height:150%;oveflow:hidden;position:absolute;text-shadow:1px 1px 1px #000'></div>
    </div>
</div>


<script>
var image_size_width=[];
var image_size_height=[];
var image_ready_num=0;
var image_url_index=0;
var have_num = 0;
var canshow = true;
var reshow = false;
var timeout1;
var inter1;
var pageindex = 1;
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
    image_ready_num=18;
    image_url_index=0;
    have_num = 0;
    // id('page1').style.webkitAnimation = '';
    // id('page2').style.webkitAnimation = '';
    // id('page1').style.display = 'none';
    // id('page2').style.display = 'none';
    // clearTimeout(timeout1);
    // clearTimeout(timeout2);
    begin_titletime = new Date();
    begin_titletime = begin_titletime.getTime();
    showtitle();
    clearTimeout(timeout1);
    clearInterval(inter1);
    canshow = true;


    for(var i=0;i<slider_images_url.length;i++)
    {
        var img=new Image();
        img.index=i;
        img.src=slider_images_url[i];
        img.onload=image_onload;
    }       
}
function showtitle()
{
    if(reshow == true)
        return;
    var content = id('titlecontent');
    content.innerHTML = e_desc;
    id('pagetitle').style.webkitAnimation = 'fadein .5s linear both';
}
function distitle()
{
    if(reshow == true)
        return;
    id('pagetitle').style.webkitAnimation = 'fadeout 1s linear both';
}


function image_onload(event)
{
    if(reshow == true)
        return;

    var img=event.target;
    var index = img.index;

    if(index < 18)
    {
        Onload_imgs_url[index] = img.src;
        image_size_height[index] = img.height;
        image_size_width[index] = img.width;
        have_num++;
    }
    else
    {
        Onload_imgs_url[image_ready_num] = img.src;
        image_size_width[image_ready_num] = img.width;
        image_size_height[image_ready_num] = img.height;
        image_ready_num++;
    }
    if((have_num >= 18 || slider_images_url.length == have_num) && canshow == true)
    {   
        reshow = false;
        canshow =false;
        var end_titletime = new Date();
        end_titletime = end_titletime.getTime();
        var dis_titletime = Math.abs(end_titletime-begin_titletime);
        delaytime = 3000;
        if(dis_titletime>delaytime)
        {
            distitle();
            timeout1 = setTimeout(begin_show,500);
        }
        else
        {
            dis_titletime = delaytime- dis_titletime;
            timeout1 = setTimeout(function()
                {
                    distitle();
                    timeout2 = setTimeout(begin_show,500);
                },dis_titletime);
        }

    }
}

function begin_show()
{
    images_init();
    get_ready();
    timeout1 = setTimeout(function()
    {
        set_next_img();
        inter1 =  setInterval(set_next_img,5000);
    },1000);
}
function set_next_img()
{
    if(pageindex == 13)
        pageindex =1;
    if(image_url_index == Onload_imgs_url.length)
    {
        image_url_index = 0;
    }
    id('xuanimg'+pageindex).src = Onload_imgs_url[image_url_index];
    pageindex++;
    image_url_index++;
}
function reload_scene()
{
    reshow = true;
    Onload_imgs_url = [];
    for(var i =0; i<slider_images_url.length;i++)
    {
        Onload_imgs_url[i] = slider_images_url[i];
    }
    image_url_index = 0;
    images_init();
}

function get_ready()
{
    $(document).ready(function(){
        $('#ipresenter').iPresenter({
            animSpeed: 2500,
            // timer: '360Bar',s
            // timerDiameter: 60,
            // timerStroke: 5,
            // timerPadding: 5,
            // timerColor: '#000',
            // timerBg: '#FFF',
            timerOpacity: 0
            // directionNav: false,
            // controlNav: true
        });
    });
    id('ipresenter').style.webkitAnimation = 'fadein 2s ease-in both';
}

function images_init()
{
    for(var i=1; i<13;i++)
    {
        var img = id('xuanimg'+i);
        if(image_url_index == Onload_imgs_url.length)
            image_url_index = 0;
        img.src= Onload_imgs_url[image_url_index];
        image_url_index++;
    }
    image_url_index = 0;
}

call_me(load_images);

</script>