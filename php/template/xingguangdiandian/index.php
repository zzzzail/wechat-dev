<?
$p=$_WEITE['web_pic_url']."xingguangdiandian/";
?>
<style type="text/css">

    *
    {
        padding: 0px;
        margin: 0px;
        -webkit-box-sizinf:border:border-box;
    }

    body
    {
        background-color:black;
    }

    #container
    {
        width: 500px;
        height: 750px;
        position: absolute;
        overflow: hidden;
        background-image: url(<?=$p?>images/bk.jpg); 
    }

    #huajuan
    {
        position: absolute;
        width: 500px;
        height: 750px;
        -webkit-animation: huajuanmove 2s linear infinite alternate;
        z-index: 1;
    }
    #img_div
    {
        position: absolute;
        top: 124px;
        left: 76px;
        width: 332px;
        height: 507px;
        /*background-color: #ffffff;*/
        overflow: hidden;
    }

    #downbox
    {
        position: absolute;
        top: 124px;
        width: 500px;
        height: 570px;
        overflow: hidden;
        margin: 0px;
        padding: 0px;
    }
    #down1
    {
        position: absolute;
        left: 59px;
        /*-webkit-animation: changedown1 2s linear forwards;*/
    }

    #up
    {
         position: absolute;
         top: 106px;
         left: 59px;
    }

    #front_box,#back_box
    {
        -webkit-transform-origin: 50% 0%;
        position: absolute;
        overflow: hidden;
    }

    @-webkit-keyframes changedown1
    {
        from   {-webkit-transform: translate(0px,0px);}
        to     {-webkit-transform: translate(0px,-132px);}
    }
    @-webkit-keyframes changebox
    {
        from   {height: 507px;}
        to     {height: 332px;}
    }

    #left
    {
        position: absolute;
        left: 57px;
        top: 180px;
        width: 83px;
        height: 339px;
        -webkit-transform-origin: 50% 0%;
        -webkit-animation: changeleft 2s linear forwards;
    }
    #right
    {
        position: absolute;
        width: 90px;
        top: 180px;
        left: 371px;
        height: 339px;
        -webkit-transform-origin: 50% 0%;
        -webkit-animation: changeright 2s linear forwards;
    }
    #down
    {
        position: absolute;
        top: 520px;
        left: 0px;
        -webkit-animation: changedown 2s linear forwards;
    }
    
    @-webkit-keyframes changedown
    {
        from   {-webkit-transform:translate(0px,0px);}
        to     {-webkit-transform:translate(0px,-132px);}
    }
    @-webkit-keyframes changeleft
    {
        from   {-webkit-transform: scale(1,1);}
        to     {-webkit-transform: scale(1,.61);}
    }
    @-webkit-keyframes changeright
    {
        from   {-webkit-transform: scale(1,1);}
        to     {-webkit-transform: scale(1,.61);}
    }

    



    #guangban1{
        position: absolute;
        height:52px;
        width:52px;
        left: 65px;
        top:23px;
        opacity: 0;
        -webkit-animation:g1 5s 2s infinite linear both;
    }

    @-webkit-keyframes g1{
      0%   {-webkit-transform:opacity:0;}
      13%  {-webkit-transform:scale(.5,.5);opacity:1;}
      25%  {-webkit-transform:scale(0,0);opacity:0;}
      100% {-webkit-transform:scale(0,0);opacity:0;}

    }

    #guangban2{
        position: absolute;
        height:52px;
        width:52px;
        left:408px;
        top:70px;
        opacity: 0;
        -webkit-animation:g2 4s 2.7s infinite linear both;
    }


    @-webkit-keyframes g2{
      0%   {-webkit-transform:opacity:0;}
      20%  {-webkit-transform:scale(1.5,1.5);opacity:1;}
      40%  {-webkit-transform:scale(0,0);opacity:0;}
      100% {-webkit-transform:scale(0,0);opacity:0;}

    }



    #guangban3{
        position: absolute;
        height:52px;
        width:52px;
        left:-6px; 
        top:252px;
        opacity: 0;
        -webkit-animation:g2 4s 3.3s infinite linear both;
    }

    #guangban4{
        position: absolute;
        height:52px;
        width:52px;
        left: 20px;
        top:584px;
        -webkit-animation:g2 4s 4.3s infinite linear both;
    }

    #guangban5{
        position: absolute;
        height:52px;
        width:52px;
        left: 388px;
        top:522px;
        -webkit-animation:g2 4s 4.8s infinite linear both;
    }

    #guangban7{
        position: absolute;
        height:52px;
        width:52px;
        left: 238px;
        top: 412px;
        -webkit-animation:g7 8s 2.5s infinite linear both;
    }

    @-webkit-keyframes g7{
      0%   {-webkit-transform:opacity:0;}
      30%  {-webkit-transform:scale(3,3);opacity:1;}
      60%  {-webkit-transform:scale(0,0);opacity:0;}
      100% {-webkit-transform:scale(0,0);opacity:0;}

    }

    #guangban6{
        position: absolute;
        height:52px;
        width:52px;
        left: 93px;
        top:120px;
        -webkit-animation:g3 6s 3s infinite ease both;
    }

    @-webkit-keyframes g3{
      0%   {-webkit-transform:scale(8,8);opacity:0.7;}
      30%  {-webkit-transform:scale(10,10);opacity:0.7;}
      60%  {-webkit-transform:scale(10,10);opacity:0.7;}
      100%  {-webkit-transform:scale(8,8);opacity:0.7;}
    }

    #liuxing1{
        position: absolute;
        width: 42px;
        height: 49px;
        left:220px;
        top:-60px;
        -webkit-animation:zhuan1 1s infinite linear both; 
     }

    #liuxing2{
        position: absolute;
        width: 42px;
        height: 49px;
        left:370px;
        top:-60px;
        -webkit-animation:zhuan1 1s infinite linear both; 
        
    }

    #move1{
        -webkit-animation:move1 5s .2s infinite linear both; 
    }

    #move2{
        -webkit-animation:move2 5s .7s infinite linear both; 
    }

    @-webkit-keyframes move1
    {
        0%   {-webkit-transform: translate(0px,0px);}
        20%     {-webkit-transform: translate(-350px,150px);}
        100%     {-webkit-transform: translate(-350px,150px);}

    }

    @-webkit-keyframes move2
    {
        0%  {-webkit-transform: translate(0px,0px);}
        20%     {-webkit-transform: translate(-500px,285px);}
        100%     {-webkit-transform: translate(-500px,285px);}
    }

    .shan{
        -webkit-animation:shan1 .1s infinite linear both; 
    }

    @-webkit-keyframes shan1
    {
        from   {-webkit-transform: scale(0.9,0.9);opacity:0}
        to     {-webkit-transform: scale(0.9,0.9);opacity:1}
    }

    @-webkit-keyframes zhuan1
    {
        from   {-webkit-transform: rotate(0deg)}
        to     {-webkit-transform: rotate(360deg)}
    }









    #fanguang
    {
        position: absolute;
     
        width: 365px;
        height: 262px;
        top: -262px;
        left: 0px;
        overflow: hidden;
    }

    @-webkit-keyframes fanguang
    {
        from  {-webkit-transform: translate(0px,0px)}
        to    {-webkit-transform: translate(0px,700px)}
    }




</style>

<div id = 'container'>

    <div id='huajuan' style='opacity:0;'>
        <div id ='img_div'>
            <div id = 'back_box'>
                <img id = 'my_imgback' style='position:absolute;' src='http://tu.kagirl.net/pic/view/8.jpg'> 
            </div>
            <div id='front_box'>
                <img id='my_imgfront' style='position:absolute;' src='http://tu.kagirl.net/pic/view/9.jpg'>
            </div>  

       
            <img id='fanguang' src='<?=$p?>images/fanguang.png'>



        </div>

        <div id = 'downbox'>
            
              <img id = 'down1' src='<?=$p?>images/down1.png'>
            
        </div>
        
        <img id ='up' src='<?=$p?>images/up1.png'>        

    </div>

    <img id='guangban1' src='<?=$p?>images/guangban.png'>
    <img id='guangban2' src='<?=$p?>images/guangban.png'>
    <img id='guangban3' src='<?=$p?>images/guangban.png'>
    <img id='guangban4' src='<?=$p?>images/guangban.png'>
    <img id='guangban5' src='<?=$p?>images/guangban.png'>
    <img id='guangban7' src='<?=$p?>images/guangban.png'>
    <img id='guangban6' src='<?=$p?>images/guangban.png'>


    <div id="move1">
        <div class = 'shan'>
           <img id='liuxing1' src='<?=$p?>images/liuxing.png'>
        </div>
    </div>
    <div id="move2">
        <div class = 'shan'>
           <img id='liuxing2' src='<?=$p?>images/liuxing.png'>
        </div>
    </div>


</div>

<script>
var load_num=0;
var images_width=[];
var images_height=[];

var change_imgdiv;
var change_down;
var images_position=[];

var first_img;
var second_img;
var first_box;
var second_box;

function id (name)
{
    return document.getElementById(name);
}

var readynum = 0;
var Onload_imgs = new Array();
var canshow = true;



function load_images ()
{
    change_imgdiv=id('img_div');
    change_down=id('down1');

    first_img=id('my_imgfront');
    second_img=id('my_imgback');

    first_box=id('front_box');
    second_box=id('back_box');

    if(slider_images_url.length<2)
    {
        slider_images_url[1]=slider_images_url[0];
    }

    for(var i=0;i<slider_images_url.length;i++)
    {
        var img=new Image();
        // img.index=i;
        img.src=slider_images_url[i];
        img.onload=img_onload;
    }
}

function img_onload (event)
{
    var img=event.target;
    Onload_imgs[readynum]=img.src;
    images_width[readynum]=img.width;
    images_height[readynum]=img.height;


    if(readynum>=1)
    {
        if (images_width[readynum]/images_height[readynum]<(332/507))
        {
            images_position[readynum]=507;
        }
        else
        {
            images_position[readynum]=332*images_height[readynum]/images_width[readynum];
        };

        createStyle(readynum-1);
    }
    else
    {
        if (images_width[0]/images_height[0]<(332/507))
        {
            images_position[0]=507;
        }
        else
        {
            images_position[0]=332*images_height[0]/images_width[0];
        };
        change_imgdiv.style.height=images_position[0]+'px';
        change_down.style.webkitTransform='translate(0px,-'+(507-images_position[0])+'px)';

    }
    readynum++;

    console.log(readynum);
    if ((readynum>1&&canshow==true)||slider_images_url.length==1)
    {
        canshow=false;
        load_num=0;
        
        id('huajuan').style.opacity=1;
        beginshow();
    };

}
function createStyle (num)
{
    var i=num;


    if(Onload_imgs.length>1)
    {
            var j=i+1;
            if(j==Onload_imgs.length)
            {
                j=0;
            }

            //�����ƶ�����div����
            var csstext='@-webkit-keyframes change_box'+i+'to'+j+' {from{height:'+images_position[i]+'px} to{height:'+images_position[j]+'px}}';
            var style=document.createElement('style');
            document.head.appendChild(style);
            // console.log(csstext);
            var sheet=style.sheet;
            sheet.insertRule(csstext,0);


            //�������滭���ƶ�����
            var translate_y1=507-images_position[i];
            var translate_y2=507-images_position[j];
            var csstext='@-webkit-keyframes change_img'+i+'to'+j+' {from{-webkit-transform: translate(0px,-'+translate_y1+'px)} to{-webkit-transform:translate(0px,-'+translate_y2+'px)}}';
            var style=document.createElement('style');
            document.head.appendChild(style);
            // console.log(csstext);
            var sheet=style.sheet;
            sheet.insertRule(csstext,0);

            var scale_y=images_position[j]/images_position[i];
            var csstext='@-webkit-keyframes change_box_in'+i+'to'+j+' {from{-webkit-transform:scale(1,'+1/scale_y+');opacity:0;} to{-webkit-transform:scale(1,1);opacity:1;}}';
            var style=document.createElement('style');
            document.head.appendChild(style);
            var sheet=style.sheet;
            sheet.insertRule(csstext,0);

            var csstext='@-webkit-keyframes change_box_out'+i+'to'+j+' {from{-webkit-transform:scale(1,1);opacity:1;} to{-webkit-transform:scale(1,'+scale_y+');opacity:0;}}';
            var style=document.createElement('style');
            document.head.appendChild(style);
            var sheet=style.sheet;
            sheet.insertRule(csstext,0);
            // console.log(csstext);


            var csstext='@-webkit-keyframes change_box_sec_in'+i+'to'+j+' {from{-webkit-transform:scale(1,'+(1/scale_y)+');} to{-webkit-transform:scale(1,1);}}';
            var style=document.createElement('style');
            document.head.appendChild(style);
            var sheet=style.sheet;
            sheet.insertRule(csstext,0);
            // console.log(csstext);

            var csstext='@-webkit-keyframes change_box_sec_out'+i+'to'+j+' {from{-webkit-transform:scale(1,1);} to{-webkit-transform:scale(1,'+(scale_y)+');}}';
            var style=document.createElement('style');
            document.head.appendChild(style);
            var sheet=style.sheet;
            sheet.insertRule(csstext,0);
        
    }


    // alert();

}


function beginshow ()
{

    if(load_num==Onload_imgs.length)
        load_num=0;
    var next_num=load_num+1;
    if(next_num==Onload_imgs.length)
        next_num=0;

    cutimage(0,load_num);
    first_img.src=Onload_imgs[load_num];
    cutimage(1,next_num);
    second_img.src=Onload_imgs[next_num];
    cleanfanguang();

    setTimeout(function()
    {
        change_imgdiv.style.webkitAnimation='change_box'+load_num+'to'+next_num+' 2s 0.1s linear forwards';
        change_down.style.webkitAnimation='change_img'+load_num+'to'+next_num+' 2s linear forwards';

        // console.log(change_imgdiv.style.webkitAnimation);
        
        showfanguang();


        first_box.style.webkitAnimation='change_box_out'+load_num+'to'+next_num+' 2s linear forwards';
        second_box.style.webkitAnimation='change_box_sec_in'+load_num+'to'+next_num+' 2s linear forwards';
        // console.log(second_box.style.webkitAnimation)
        
        load_num++;

        setTimeout(nextshow,4500);
    },3000);

}

function nextshow ()
{
    if(load_num==Onload_imgs.length)
        load_num=0;
    var next_num=load_num+1;
    if(next_num==Onload_imgs.length)
        next_num=0;

    // first_img.style.opacity=0;

    cutimage(0,next_num);
    first_img.src=Onload_imgs[next_num];
    cleanfanguang();


    setTimeout(function()
    {
        change_imgdiv.style.webkitAnimation='change_box'+load_num+'to'+next_num+' 2s 0.1s linear forwards';
        change_down.style.webkitAnimation='change_img'+load_num+'to'+next_num+' 2s linear forwards';

        // console.log(change_imgdiv.style.webkitAnimation);
        
        showfanguang();

        first_box.style.webkitAnimation='change_box_in'+load_num+'to'+next_num+' 2s linear forwards';
        console.log(first_box.style.webkitAnimation);
        second_box.style.webkitAnimation='change_box_sec_out'+load_num+'to'+next_num+' 2s linear forwards';
        
        load_num++;

        setTimeout(nextnextshow,4500);

    },3000)
}

function nextnextshow ()
{
    if(load_num==Onload_imgs.length)
        load_num=0;
    var next_num=load_num+1;
    if(next_num==Onload_imgs.length)
        next_num=0;

    first_img.style.opacity=1;
    cutimage(1,next_num);
    second_img.src=Onload_imgs[next_num];
    cleanfanguang();

    

    setTimeout(function()
    {
        change_imgdiv.style.webkitAnimation='change_box'+load_num+'to'+next_num+' 2s 0.1s linear forwards';
        change_down.style.webkitAnimation='change_img'+load_num+'to'+next_num+' 2s linear forwards';

        // console.log(change_imgdiv.style.webkitAnimation);

        showfanguang();

        first_box.style.webkitAnimation='change_box_out'+load_num+'to'+next_num+' 2s linear forwards';
        second_box.style.webkitAnimation='change_box_sec_in'+load_num+'to'+next_num+' 2s linear forwards';
        
        load_num++;
        setTimeout(nextshow,4500);

    },3000)
}


function showfanguang ()
{
    id('fanguang').style.webkitAnimation='fanguang 2s linear forwards';
}

function cleanfanguang ()
{
    id('fanguang').style.webkitAnimation='';
}

function cutimage(img_obj,load_num)
{
    var myimg;
    var mybox;
    if(img_obj==0)
    {
        myimg=first_img;
        mybox=first_box;

    }
    else
    {
        myimg=second_img;
        mybox=second_box;
    }

    var img_height=images_height[load_num];
    var img_width=images_width[load_num];
    var img_bili=img_width/img_height;

    if (img_bili<(332/507)) 
    {
        myimg.width=332;
        myimg.height=332/img_bili;
        myimg.style.left='0px';
        myimg.style.top='-'+((myimg.height-507)/2)+'px';
        
        mybox.style.width='332px';
        mybox.style.height='507px';
    }
    else
    {
        myimg.width=332;
        myimg.height=332/img_bili;
        myimg.style.top='0px';
        myimg.style.left='0px';

        mybox.style.width='332px';
        mybox.style.height=332/img_bili+'px';
    }
}
call_me(load_images);
</script>