<?
$p=$_WEITE['web_pic_url']."xiariqingzhu/";
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
        background-image: url(<?=$p?>images/bg.jpg);
        overflow: hidden;
        position: absolute;
    }
    #container >img
    {
        position: absolute;
    }

    @-webkit-keyframes shengzi
    {
        0%  {-webkit-transform:rotate(0deg);}
        25% {-webkit-transform:rotate(-5deg);}
        75% {-webkit-transform:rotate(5deg);}
        100%{-webkit-transform:rotate(0deg);}
    }

    @-webkit-keyframes huabu
    {
        0%  {-webkit-transform:translate(0px,0px);}
        25% {-webkit-transform:translate(20px,0px);}
        75% {-webkit-transform:translate(-20px,0px);}
        100%{-webkit-transform:translate(0px,0px);}
    }

    #zhuzi
    {
        top: -30px;
        left: -5px;
        width: 178px;
        height: 850px;
        -webkit-transform-origin: 35% 94%;
        -webkit-animation: zhuzi 2s linear infinite alternate;
    }

    @-webkit-keyframes zhuzi
    {
        from    {-webkit-transform: rotate(0deg);}
        to      {-webkit-transform: rotate(2deg);}
    }

    #back
    {
        -webkit-animation: back 2s ease-in-out infinite alternate;
    }

    @-webkit-keyframes back
    {
        from  {-webkit-transform: translate(0px,0px);}
        to    {-webkit-transform: translate(50px,0px);}
    }

    #huabu
    {
        position: absolute;
        -webkit-animation: huabu 3s linear infinite;
    }

    #img_con
    {
        position: absolute;
        background-color: white;
        width: 348px;
        height: 490px;
        top: 130px;
        left: 75px;
        overflow: hidden;
    }

    #biankuang1
    {
        position: absolute;
        top: 68px;
        left: 48px;
    }

    #biankuang2
    {
        position: absolute;
        top: 610px;
        left: 48px;
    }

    #shengzi1
    {
        left: 107px;
    }

    #shengzi2
    {
        left: 337px;
    }

    .shengzi
    {
        top: -120px;
        -webkit-transform-origin: 39.47% 4%;
        -webkit-animation: shengzi 3s linear infinite;
        position: absolute;
    }

    @-webkit-keyframes ye_ani1
    {
        from  {-webkit-transform:translate(0px,0px) rotate(0deg);}
        to    {-webkit-transform:translate(350px,350px) rotate(360deg);}
    }

    @-webkit-keyframes ye_ani2
    {
        from  {-webkit-transform:rotateY(0deg)}
        to    {-webkit-transform:rotateY(1500deg)}
    }

    @-webkit-keyframes ye_con6_ani
    {
        from  {-webkit-transform:translate(0px,0px) rotate(0deg);}
        to    {-webkit-transform:translate(400px,500px) rotate(180deg);}
    }

    #ye3
    {
        left: 250px;
        top: -100px;
        -webkit-animation: ye_ani1 5s linear infinite;
    }

    #ye6
    {
        -webkit-animation: ye_ani2 8s 2s linear infinite;
    }

    #ye6_con
    {
        left: 120px;
        top: -120px;
        position: absolute;
        -webkit-animation: ye_con6_ani 6s 2s linear infinite;
    }

    #ye2
    {
        left: -50px;
        top: -200px;
        -webkit-animation: ye2_ani 10s linear infinite;
    }

    @-webkit-keyframes ye2_ani
    {
        from   {-webkit-transform:translate(0px,0px) rotate(0deg);}
        to     {-webkit-transform:translate(600px,800px) rotate(480deg);}
    } 

    #ye1
    {
        left: -100px;
        top: -100px;
        -webkit-animation: ye1_ani 10s 4s linear infinite;
    }

    @-webkit-keyframes ye1_ani
    {
        from  {-webkit-transform: translate(0px,0px) rotate(0deg);}
        to    {-webkit-transform: translate(600px,1000px) rotate(500deg);}
    }

    #ye4
    {
        left: 100px;
        top: -100px;
        -webkit-animation: ye1_ani 9s 7s linear infinite;
    }

    #ye5_con
    {
        position: absolute;
        top: 200px;
        left: -100px;
        -webkit-animation: ye5_con_ani 8s 2s linear infinite;
    }

    @-webkit-keyframes ye5_con_ani
    {
        from {-webkit-transform: translate(0px,0px) rotate(0deg);}
        to   {-webkit-transform: translate(700px,700px) rotate(240deg);}
    }

    @-webkit-keyframes ye5_ani
    {
        from  {-webkit-transform:rotateY(0deg);}
        to    {-webkit-transform:rotateY(360deg);}
    }

    #ye5
    {
        -webkit-animation: ye5_ani 2.5s linear infinite alternate;
    }

    #content
    {
        position: absolute;
        top: -800px;
        /*-webkit-animation: content_ani 5s linear infinite;*/
    }

    @-webkit-keyframes content_ani
    {
        0%  {-webkit-transform: translate(0px,0px);}
        15% {-webkit-transform: translate(0px,820px);}
        19% {-webkit-transform: translate(0px,780px);}
        24% {-webkit-transform: translate(0px,800px);}
        85% {-webkit-transform: translate(0px,800px);}
        90% {-webkit-transform: translate(0px,850px);}
        100%{-webkit-transform: translate(0px,0px);}
    }

    #myimg
    {
        position: absolute;
    }
    @-webkit-keyframes fadeout
    {
        from  {opacity: 1}
        to    {opacity: 0}
    }
    @-webkit-keyframes fadein
    {
        from  {opacity: 0}
        to    {opacity: 1}
    }
</style>

<div id='container'>
    <img id='back' src='<?=$p?>images/1.png'>

    <img id='zhuzi' src='<?=$p?>images/2.png'>
    
    <img id='ye4' src='<?=$p?>images/2000.png'>

    <div id='contentbox' style='position:absolute;top:0px;left:0px;opacity:0;'>
        <div id='content'>
            <div id='huabu'>
                <div id='img_con'>
                    <img id='myimg'>
                </div>
                <img id='biankuang1' src='<?=$p?>images/11.png'>
                <img id='biankuang2' src='<?=$p?>images/12.png'>
            </div>

            <img id='shengzi1' class='shengzi' src='<?=$p?>images/13.png'>
            <img id='shengzi2' class='shengzi' src='<?=$p?>images/13.png'>
        </div>
    </div>

    <div id='pagetitle' style='position:absolute;width:440px;height:200px;top:250px;left:30px;font-size:40px;color:#fff;overflow:hidden;'>
        <div style='display:table;width:440px;height:200px;top:0px;left:0px;position:absolute;text-align:center;'>
            <div id='titlecontent' style='display:table-cell;width:440px;height:200px;vertical-align:middle;padding-left:10px;padding-right:10px;line-height:65px;oveflow:hidden;text-shadow:1px 1px 1px #000'></div>
        </div>
    </div>

    <img id='ye1' src='<?=$p?>images/15.png'>
    <img id='ye2' src='<?=$p?>images/14.png'>
    <img id='ye3' src='<?=$p?>images/3.png'>
    

    <div id='ye5_con'>
        <img id='ye5' src='<?=$p?>images/4.png'>
    </div>

    <div id='ye6_con'>
        <img id='ye6' src='<?=$p?>images/3.png'>
    </div>

</div>

<script>
var image_size_width=[];
var image_size_height=[];

var image_url_index=0;
var canshow = true;
var myimg;
var reshow = false;
var timeout;
var timeout1;
var timeout0;
var have_num = 0;
var error_num = 0;
var delaytime = 4000;
function id (name)
{
    return document.getElementById(name);
}

function summer_load_image ()
{
    reshow = false;
    clearTimeout(timeout);
    clearTimeout(timeout1);
    clearTimeout(timeout0);
    id('pagetitle').style.webkitAnimation = '';
    image_size_width=[];
    image_size_height=[];
    Onload_imgs_url=[];

    image_url_index=0;
    have_num = 0;
    error_num = 0;

    canshow = true;
    myimg=id('myimg');
    begin_titletime = new Date();
    begin_titletime = begin_titletime.getTime();
    id('titlecontent').innerHTML = e_desc;
    id('content').style.webkitAnimation='';

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

Onload_imgs_url = new Array();
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

function image_onload (event)
{
    if(reshow ==true)
        return;

    var img=event.target;
    var index = img.index;

    if(index<10)
    {
        have_num++;
    }
    Onload_imgs_url[index]=img.src;
    image_size_width[index]=img.width;
    image_size_height[index]=img.height;

    if((have_num+error_num >= 10 || slider_images_url.length == (have_num+error_num)) && canshow == true)
    {

        canshow=false;
        reshow = false;

        if(have_num == 0)
            return;

        var end_titletime = new Date();
        end_titletime = end_titletime.getTime();
        var dis_titletime = Math.abs(end_titletime-begin_titletime);
        if(dis_titletime>delaytime)
        {
            distitle();
            timeout1 = setTimeout(begin_show,1000);
        }
        else
        {
            dis_titletime = delaytime- dis_titletime;
            timeout1 = setTimeout(function()
                {
                    distitle();
                    timeout2 = setTimeout(begin_show,1000);
                },dis_titletime);
        }
    }

    // img.
}

function distitle()
{
    id('pagetitle').style.webkitAnimation = 'fadeout 1s linear both';
    id('contentbox').style.webkitAnimation = 'fadein 1s linear 0.5s both';

    // setTimeout(begin_show,1000)
}
function begin_show ()
{
    if(reshow ==true)
        return;
    console.log('begin'+reshow);

    if(image_url_index==Onload_imgs_url.length)
        image_url_index=0;
    cut_image();
    id('content').style.webkitAnimation='content_ani 4s linear both';
    image_url_index++;

    timeout = setTimeout(clean_ani,4500);
}

function clean_ani ()
{
    if(reshow ==true)
        return;
    // console.log('clean'+reshow);
    id('content').style.webkitAnimation='';
    setTimeout(begin_show,100);
}

function cut_image ()
{
    while(Onload_imgs_url[image_url_index] == 'not find' || Onload_imgs_url[image_url_index] == 'loading')
    {
        console.log(Onload_imgs_url[image_url_index]);
        image_url_index++;
        if(image_url_index == Onload_imgs_url.length)
            image_url_index = 0;
    }
    var img_width=image_size_width[image_url_index];
    var img_height=image_size_height[image_url_index];
    var img_bili=img_width/img_height;

    if(img_bili>=(348/490))
    {
        // myimg.height=490;
        // myimg.width=490*img_bili;
        // myimg.style.top='0px';
        // myimg.style.left='-'+((myimg.width-348)/2)+'px';

        myimg.width=348;
        myimg.height=348/img_bili;
        myimg.style.top='0px';
        myimg.style.left='0px';

        id('biankuang2').style.top=(myimg.height+119)+'px';
        id('img_con').style.height=myimg.height+'px';
    }
    else
    {
        myimg.width=348;
        myimg.height=348/img_bili;
        myimg.style.left='0px';
        myimg.style.top='-'+((myimg.height-490)/2)+'px';

        id('biankuang2').style.top='610px';
        id('img_con').style.height='490px';
    }

    myimg.src=Onload_imgs_url[image_url_index];
    console.log(myimg.src);
}

call_me(summer_load_image);

function reload_scene()
{
    reshow = true;
    console.log('end');
    summer_load_image();

}

</script>