<?
$p=$_WEITE['web_pic_url']."ailvtu/";
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
        background-image: url(<?=$p?>images/1.jpg);
        /*left: 500px; */
    }
    .box
    {
        width: 500px;
        height: 815px;
        position: absolute;
        -webkit-transform-origin: 50% 200%;
        display: none;
        -webkit-transform: rotate(30deg);
    }
/*    #box_1
    {
        -webkit-animation: div_rotate 2s linear forwards;
    }*/
    #box_1_border
    {
        position: absolute;
        top: 182px;
        left: 5px;
    }
    #box_2_border
    {
        position: absolute;
        top: 212px;
        left: -38px;
    }
    #box_3_border
    {
        position: absolute;
        top: 170px;
        left: -31px;
    }
    #box_4_border
    {
        position: absolute;
        top: 225px;
    }
    #box_5_border
    {
        position: absolute;
        top: 203px;
        left: -50px;
    }
    #box_6_border
    {
        position: absolute;
        top: 155px;
        left: -45px;
    }
    #box_6_1_border
    {
        position: absolute;
        top: 390px;
        left: 190px;

    }
    #box_7_border
    {
        position: absolute;
        top: 186px;
    }
    #img_div_0
    {
        position: absolute;
        width: 417px;
        height: 426px;
        top: 275px;
        left: 48px;
        -webkit-mask: url(<?=$p?>images/2.png);
    }
    #img_div_1
    {
        position: absolute;
        width: 480px;
        height: 392px;
        -webkit-mask: url(<?=$p?>images/2000.png);
        top: 302px;
        left: 10px;

    }
    #img_div_2
    {
        position: absolute;
        width: 488px;
        height: 421px;
        -webkit-mask: url(<?=$p?>images/3.png);
        top: 282px;
        left: 11px;

    }
    #img_div_3
    {
        position: absolute;
        width: 403px;
        height: 420px;
        -webkit-mask: url(<?=$p?>images/4.png);
        top: 277px;
        left: 52px;
        /*overflow: hidden;*/
    }
    #img_div_4
    {
        position: absolute;
        width: 508px;
        height: 408px;
        -webkit-mask: url(<?=$p?>images/5.png);
        top: 290px;
        left: -4px;

    }
    #img_div_5
    {
        position: absolute;
        width: 416px;
        height: 426px;
        -webkit-mask: url(<?=$p?>images/6.png);
        top: 249px;
        left: -3px;
    }
    #img_div_5_1
    {
        position: absolute;
        width: 315px;
        height: 314px;
        -webkit-mask: url(<?=$p?>images/7.png);
        top: 428px;
        left: 227px;

    }
    #img_div_6
    {
        position: absolute;
        width: 320px;
        height: 336px;
        -webkit-mask: url(<?=$p?>images/9.png);
        top: 379px;
        left: 66px;

    }
    #img_div_7
    {
        position: absolute;
        width: 233px;
        height: 193px;
        -webkit-mask: url(<?=$p?>images/10.png);
        top: 235px;
        left: 238px;
    }
    @-webkit-keyframes div_rotate
    {
        0%   {-webkit-transform: rotate(30deg);-webkit-animation-timing-function: ease-out;}
        20.25%  {-webkit-transform: rotate(-2deg);}
        24%  {-webkit-transform: rotate(0deg);}
        37.5%  {-webkit-transform: rotate(0deg);}
        54.75%  {-webkit-transform: rotate(0deg);}
        58.5%  {-webkit-transform: rotate(2deg);-webkit-animation-timing-function: ease-in;}
        75% {-webkit-transform: rotate(-30deg);}
        100% {-webkit-transform: rotate(-30deg);}
    }

    @-webkit-keyframes div_rotate_in
    {
        0%   {-webkit-transform: rotate(30deg);}
        80%  {-webkit-transform: rotate(-2deg);-webkit-animation-timing-function: ease-out;}
        100%  {-webkit-transform: rotate(0deg);}
/*        50%  {-webkit-transform: rotate(0deg);}
        78%  {-webkit-transform: rotate(2deg);-webkit-animation-timing-function: ease-in;}
        100% {-webkit-transform: rotate(-30deg);}*/
    }

    @-webkit-keyframes div_rotate_out
    {
/*        0%   {-webkit-transform: rotate(30deg);-webkit-animation-timing-function: ease-out;}
        27%  {-webkit-transform: rotate(-2deg);}
        32%  {-webkit-transform: rotate(0deg);}*/
        0%  {-webkit-transform: rotate(0deg);}
        16%  {-webkit-transform: rotate(2deg);-webkit-animation-timing-function: ease-in;}
        100% {-webkit-transform: rotate(-30deg);}
    }
    @-webkit-keyframes cloudmove
    {
        from{-webkit-transform:translate(0px,0px);}
        to  {-webkit-transform:translate(-700px,0px);}
    }
    .cloud
    {
        position: absolute;
        left: 500px;
    }

    @-webkit-keyframes heart0_1_ani
    {
        0%   {-webkit-transform:translate(70px,290px) rotate(-20deg) scale(0.5,0.5);opacity: 1}
        70% {-webkit-transform:translate(20px,210px) rotate(-30deg) scale(1,1);opacity: 1}
        100% {-webkit-transform:translate(0px,170px) rotate(-30deg) scale(1.2,1.2);opacity: 0}
    }

    @-webkit-keyframes heart0_0_ani
    {
        0%   {-webkit-transform:translate(100px,330px) rotate(20deg);opacity: 1}
        70%  {-webkit-transform:translate(130px,160px) rotate(20deg);opacity: 1}
        100% {-webkit-transform:translate(150px,110px) rotate(20deg);opacity: 0}
    }

    @-webkit-keyframes heart0_2_ani
    {
        0%   {-webkit-transform:translate(100px,340px) rotate(40deg);opacity: 1}
        50%  {-webkit-transform:translate(140px,320px) rotate(40deg);;opacity: 1}
        100% {-webkit-transform:translate(180px,260px) rotate(40deg);opacity: 0}
    }

    @-webkit-keyframes heart1_1_ani
    {
        0%   {-webkit-transform:translate(370px,640px) rotate(-20deg) scale(0.5,0.5);opacity: 1}
        70%  {-webkit-transform:translate(320px,560px) rotate(-30deg) scale(1,1);opacity: 1}
        100% {-webkit-transform:translate(300px,520px) rotate(-30deg) scale(1.2,1.2);opacity: 0}
    }

    @-webkit-keyframes heart1_0_ani
    {
        0%   {-webkit-transform:translate(400px,680px) rotate(20deg);opacity: 1}
        70%  {-webkit-transform:translate(430px,510px) rotate(20deg);opacity: 1}
        100% {-webkit-transform:translate(450px,460px) rotate(20deg);opacity: 0}
    }

    @-webkit-keyframes heart1_2_ani
    {
        0%   {-webkit-transform:translate(400px,690px) rotate(40deg);opacity: 1}
        50%  {-webkit-transform:translate(440px,670px) rotate(40deg);;opacity: 1}
        100% {-webkit-transform:translate(480px,610px) rotate(40deg);opacity: 0}
    }

    @-webkit-keyframes heart2_1_ani
    {
        0%   {-webkit-transform:translate(70px,640px) rotate(-20deg) scale(0.5,0.5);opacity: 1}
        70%  {-webkit-transform:translate(20px,560px) rotate(-30deg) scale(1,1);opacity: 1}
        100% {-webkit-transform:translate(00px,520px) rotate(-30deg) scale(1.2,1.2);opacity: 0}
    }

    @-webkit-keyframes heart2_0_ani
    {
        0%   {-webkit-transform:translate(100px,680px) rotate(20deg);opacity: 1}
        70%  {-webkit-transform:translate(130px,510px) rotate(20deg);opacity: 1}
        100% {-webkit-transform:translate(150px,460px) rotate(20deg);opacity: 0}
    }

    @-webkit-keyframes heart2_2_ani
    {
        0%   {-webkit-transform:translate(100px,690px) rotate(40deg);opacity: 1}
        50%  {-webkit-transform:translate(140px,670px) rotate(40deg);;opacity: 1}
        100% {-webkit-transform:translate(180px,610px) rotate(40deg);opacity: 0}
    }

    @-webkit-keyframes heart3_1_ani
    {
        0%   {-webkit-transform:translate(370px,400px) rotate(-20deg) scale(0.5,0.5);opacity: 1}
        70% {-webkit-transform:translate(320px,320px) rotate(-30deg) scale(1,1);opacity: 1}
        100% {-webkit-transform:translate(300px,280px) rotate(-30deg) scale(1.2,1.2);opacity: 0}
    }

    @-webkit-keyframes heart3_0_ani
    {
        0%   {-webkit-transform:translate(400px,440px) rotate(20deg);opacity: 1}
        70%  {-webkit-transform:translate(430px,270px) rotate(20deg);opacity: 1}
        100% {-webkit-transform:translate(450px,220px) rotate(20deg);opacity: 0}
    }

    @-webkit-keyframes heart3_2_ani
    {
        0%   {-webkit-transform:translate(400px,450px) rotate(40deg);opacity: 1}
        50%  {-webkit-transform:translate(440px,430px) rotate(40deg);;opacity: 1}
        100% {-webkit-transform:translate(480px,370px) rotate(40deg);opacity: 0}
    }
    .img_con
    {
        position: absolute;
    }

    @-webkit-keyframes aa_in_flip_x
    {
        0%{
            -webkit-transform:perspective(400px) rotateX(90deg);
            opacity:0
        }
        40%{
            -webkit-transform:perspective(400px) rotateX(-10deg)
        }
        70%{
            -webkit-transform:perspective(400px) rotateX(10deg)
        }
        100%{
            -webkit-transform:perspective(400px) rotateX(0deg);
            opacity:1
        }
    }
    @-webkit-keyframes aa_out_flip_x
    {
        0%{
            -webkit-transform:perspective(400px) rotateX(0deg);
            opacity:1
        }
        100%{
            -webkit-transform:perspective(400px) rotateX(90deg);
            opacity:0
        }
    }
</style>

<div id='container'>
    <img src='<?=$p?>images/100.png' class='cloud' style='top:100px;width:70px;-webkit-animation:cloudmove 10s linear 5s infinite'>
    <img src='<?=$p?>images/101.png' class='cloud' style='top:30px;width:120px;-webkit-animation:cloudmove 9s linear 2s infinite'>

    <img src='<?=$p?>images/101.png' class='cloud' style='top:250px;width:120px;-webkit-animation:cloudmove 9s linear 4.5s infinite'>

    <img src='<?=$p?>images/101.png' class='cloud' style='top:200px;width:50px;-webkit-animation:cloudmove 11s linear infinite'>

    <img src='<?=$p?>images/101.png' class='cloud' style='top:400px;width:100px;-webkit-animation:cloudmove 7s linear 3s infinite'>

    <img src='<?=$p?>images/101.png' class='cloud' style='top:550px;width:50px;-webkit-animation:cloudmove 12s linear 7.5 infinite'>

    <img src='<?=$p?>images/101.png' class='cloud' style='top:630px;width:130px;-webkit-animation:cloudmove 9s linear 6s infinite'>

    <img src='<?=$p?>images/101.png' class='cloud' style='top:700px;width:200px;-webkit-animation:cloudmove 8s linear 1.5s infinite'>



    <div id='box_0' class='box'>
        <img id='box_1_border' src='<?=$p?>images/102.png'>
        <div id='img_div_0'>
            <img id='img0' class='img_con'>
        </div>
    </div>

    <div id='box_1' class='box'>
        <img id='box_2_border' src='<?=$p?>images/103.png'>
        <div id='img_div_1'>
            <img id='img1' class='img_con'>
        </div>
    </div>

    <div id='box_2' class='box'>
        <img id='box_3_border' src='<?=$p?>images/104.png'>
        <div id='img_div_2'>
            <img id='img2' class='img_con'>
        </div>
    </div>

    <div id='box_3' class='box'>
        <img id='box_4_border' src='<?=$p?>images/105.png'>
        <div id='img_div_3'>
            <img id='img3' class='img_con'>
        </div>
    </div>

    <div id='box_4' class='box'>
        <img id='box_5_border' src='<?=$p?>images/106.png'>
        <div id='img_div_4'>
            <img id='img4' class='img_con'>
        </div>
    </div>

    <div id='box_5' class='box'>
        <img id='box_6_border' src='<?=$p?>images/102.png'>
        <div id='img_div_5'>
            <img id='img5_0' class='img_con'>
        </div>

        <img id='box_6_1_border' src='<?=$p?>images/107.png'>
        <div id='img_div_5_1'>
            <img id='img5_1' class='img_con'>
        </div>
    </div>

    <div id='box_6' class='box'>
        <img id='box_7_border' src='<?=$p?>images/108.png'>
        <div id='img_div_6'>
            <img id='img6_0' class='img_con'>
        </div>
        <div id='img_div_7'>
            <img id='img6_1' class='img_con'>
        </div>
    </div>


    <div id='heart_div' style='position:absolute;'>
        <img id='heart1' src='<?=$p?>images/109.png' style='position:absolute;opacity:0;'>
        <img id='heart0' src='<?=$p?>images/109.png' style='position:absolute;width:50px;opacity:0;'>
        <img id='heart2' src='<?=$p?>images/109.png' style='position:absolute;width:55px;opacity:0;'>

    </div>

    <div id='pagetitle' style='position:absolute;width:410px;height:200px;top:290px;left:45px;font-size:40px;color:#fff;overflow:hidden;text-shadow:5px 6px 4px rgba(0, 0, 0, 0.2);'>
        <div style='position:absolute;width:410px;height:200px;top:0px;left:0px;overflow:hidden;'>
            <div style='position:absolute;width:410px;height:200px;display:table;overflow:hidden;'>
                <div id='titlecontent' style='width:410px;height:200px;vertical-align:middle;display:table-cell;text-align:center;font-size:40px;line-height:70px;color:#975D49;'></div>
            </div>
        </div>
    </div>

</div>



<script>
var page_index=0;
var heart_array=[0,1,0,2,0,2,3];
var images_height=[];
var images_width=[];
var image_url_index=0;

var border_size=[[{w:417,h:426}],[{w:480,h:392}],[{w:488,h:421}],[{w:403,h:420}],[{w:508,h:408}],[{w:416,h:426},{w:315,h:314}],[{w:320,h:336},{w:233,h:193}]]

var delaytime = 4000;
function id (name)
{
    return document.getElementById(name);
}

function show_page ()
{
    // alert();
    if(reshow==true)
        return;
    if (page_index==7)
    {
        page_index=0;
    }
    if (image_url_index==Onload_imgs_url.length) 
    {
        image_url_index=0;
    };
    if(page_index<5)
    {
        // var img_obj=id('img'+page_index);
        cut_image(page_index,2);
        image_url_index++
    }
    else
    {
        cut_image(page_index,0);
        image_url_index++;
        if (image_url_index==Onload_imgs_url.length)
        {
            image_url_index=0;
        };
        cut_image(page_index,1)
        image_url_index++;
    }


    
    id('box_'+page_index).style.display='block';
    id('box_'+page_index).style.webkitAnimation='div_rotate_in 1s ease-in-out forwards';
    showheart(page_index);
    if (page_index==0)
    {
        id('box_5').style.display='none';
        id('box_5').style.webkitAnimation='';
    }
    else if(page_index==1)
    {
        id('box_6').style.display='none';
        id('box_6').style.webkitAnimation='';
    }
    else
    {
        id('box_'+(page_index-2)).style.display='none';
        id('box_'+(page_index-2)).style.webkitAnimation='';
    }
    
    timeout1 = setTimeout(function()
        {

            id('box_'+page_index).style.webkitAnimation='div_rotate_out 0.8s linear forwards';
            page_index++;
            // show_page();
            timeout2 = setTimeout(show_page,500);
        },3000);
}

function showheart(num)
{
    if(reshow==true)
        return;
    index=heart_array[num];
    id('heart0').style.webkitAnimation='heart'+index+'_0_ani 2.5s 0.8s linear';
    id('heart1').style.webkitAnimation='heart'+index+'_1_ani 2.5s 0.8s linear';
    id('heart2').style.webkitAnimation='heart'+index+'_2_ani 2.5s 0.8s linear';
}

function load_image()
{
    Onload_imgs_url = [];
    page_index=0;
    heart_array=[0,1,0,2,0,2,3];
    images_height=[];
    images_width=[];
    image_url_index=0;
    
    have_num = 0;
    error_num = 0;
    
    id('heart0').style.webkitAnimation='';
    id('heart1').style.webkitAnimation='';
    id('heart2').style.webkitAnimation='';
    id('box_0').style.webkitAnimation='';
    id('box_1').style.webkitAnimation='';
    id('box_2').style.webkitAnimation='';
    id('box_3').style.webkitAnimation='';
    id('box_4').style.webkitAnimation='';
    id('box_5').style.webkitAnimation='';
    id('box_6').style.webkitAnimation='';
    canshow=true;

    clearTimeout(timeout1);
    clearTimeout(timeout2);
    clearTimeout(timeout0);

    reshow = false;
    
    begin_titletime = new Date();
    begin_titletime = begin_titletime.getTime();
    showtitle();

    for(var i=0;i<slider_images_url.length;i++)
    {
        var img=new Image();
        img.src=slider_images_url[i];
        img.index = i;
        Onload_imgs_url[i] = 'loading';
        img.onload=img_onload;
        img.onerror = img_onerror;
    }
}

Onload_imgs_url = new Array();

canshow=true;
function img_onerror (event)
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
function showtitle()
{
    id('titlecontent').innerHTML = e_desc;
    id('pagetitle').style.webkitAnimation = 'aa_in_flip_x 2s ease both';
}
function distitle()
{
    id('pagetitle').style.webkitAnimation = 'aa_out_flip_x 2s ease both';
    show_page();

}
function img_onload (event)
{
    if(reshow==true)
        return;
    var img=event.target;
    var index = img.index;

    if(index < 10)
    {
        have_num++;
    }
    Onload_imgs_url[index]=img.src;
    images_width[index]=img.width;
    images_height[index]=img.height;

    if((have_num+error_num >= 10 || slider_images_url.length ==(have_num+error_num))&&canshow==true)
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

function cut_image (page,page_id)
{
    //2Ϊ������  0,1Ϊ������ҳ��ĵ�0,1����
    if(reshow==true)
        return;
    var img_obj;
    var bd_w;
    var bd_h;
    while(Onload_imgs_url[image_url_index] == 'not find' || Onload_imgs_url[image_url_index] == 'loading')
    {
        console.log(Onload_imgs_url[image_url_index]);
        image_url_index++;
        if(image_url_index == Onload_imgs_url.length)
            image_url_index = 0;
    }
    var img_w=images_width[image_url_index];
    var img_h=images_height[image_url_index];

    var img_bili=img_w/img_h;
    
    if(page_id==2)
    {
        img_obj=id('img'+page);
        bd_w=border_size[page][0].w;
        bd_h=border_size[page][0].h;
    }
    else
    {
        img_obj=id('img'+page+'_'+page_id);
        bd_w=border_size[page][page_id].w;
        bd_h=border_size[page][page_id].h;

    }
         
    var div_bili=bd_w/bd_h;

    if(div_bili>=img_bili)
    {
        img_obj.width=bd_w;
        img_obj.height=bd_w/img_bili;
        img_obj.style.left='0px';
        img_obj.style.top='-'+(img_obj.height-bd_h)/2+'px';

    }
    else
    {
        img_obj.height=bd_h;
        img_obj.width=bd_h*img_bili;
        img_obj.style.top='0px';
        img_obj.style.left='-'+(img_obj.width-bd_w)/2+'px';

    }
    img_obj.src=Onload_imgs_url[image_url_index];


}

call_me(load_image);
var timeout0;
var timeout1;
var timeout2;
var reshow = false;

function reload_scene()
{
    reshow = true;
    id('titlecontent').innerHTML = '';
    id('pagetitle').style.webkitAnimation = '';
    setTimeout(load_image,100)
}

</script>
