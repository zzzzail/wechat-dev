<?
$p=$_WEITE['web_pic_url']."guyuen/";
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
        background-color: #f9f6e5;
    }

    #container
    {
        width: 500px;
        height: 750px;
        position: absolute;
        overflow: hidden;
        background-image: url(<?=$p?>images/bg.jpg); 
    }
    #huajuan
    {
        position: absolute;
        width: 500px;
        height: 750px;
        -webkit-animation: huajuanmove 2s linear infinite alternate;
    }
    #img_div
    {
        position: absolute;
        top: 155px;
        left: 110px;
        width: 288px;
        height: 420px;
        /*height: 288px;*/
        background-color: #ffffff;
        overflow: hidden;
        /*-webkit-animation: changebox 2s linear forwards;*/
    }
    #heye1
    {
        position: absolute;
        top: 590px;
        -webkit-transform-origin: 1.95% 77.33%;
        -webkit-animation: heye_rotate 2s ease-in-out infinite alternate;
    }
    #heye2
    {
        position: absolute;
        top: 610px;
        left: 70px;
        -webkit-transform-origin: 50% 100%;
        -webkit-animation: heye_rotate1 1.5s ease-in-out infinite alternate;
    }
    #heye3
    {
        position: absolute;
        top: 700px;
        left: 190px;
        -webkit-animation: hehua1 2s ease-in infinite alternate;
    }
    #heye4
    {
        position: absolute;
        top: 600px;
        left: 160px;
        -webkit-transform-origin: 50% 100%;
        -webkit-animation: heye_rotate 2s ease-in-out infinite alternate;
    }
    #heye5
    {
        position: absolute;
        top: 680px;
        left: 240px;
        -webkit-animation: hehua1 1.5s ease-in-out infinite alternate;
    }
    #cloud1
    {
        position: absolute;
        top: 80px;
        left: 500px;
        -webkit-animation: cloudtoleft 8s linear infinite;
    }
    #cloud2
    {
        position: absolute;
        top: 430px;
        left: -300px;
        -webkit-animation: cloudtoright 8s linear infinite;
    }
    @-webkit-keyframes cloudtoleft
    {
        from  {-webkit-transform: translate(0px,0px);}
        to    {-webkit-transform: translate(-700px,0px);}
    }
    @-webkit-keyframes cloudtoright
    {
        from  {-webkit-transform: translate(0px,0px);}
        to    {-webkit-transform: translate(800px,0px);}
    }
    #niao1
    {
        position: absolute;
        top: 140px;
        left: 500px;
        -webkit-animation: fly1 12s linear infinite;
    }
    #niao2
    {
        position: absolute;
        top: 320px;
        left: -100px;
        opacity: 0.7;
        -webkit-animation: fly2 10s linear 2s infinite;

    }
    @-webkit-keyframes fly1
    {
        from  {-webkit-transform: translate(0px,0px) scale(0.7,0.7);}
        to    {-webkit-transform: translate(-600px,140px) scale(1,1);}
    }
    @-webkit-keyframes fly2
    {
        from  {-webkit-transform: translate(0px,0px) scale(0.8,0.8);}
        to    {-webkit-transform: translate(600px,100px) scale(0.4,0.4);}
    }

    @-webkit-keyframes huajuanmove
    {
        from  {-webkit-transform: translate(0px,-8px);}
        to    {-webkit-transform: translate(0px,8px);}
    }

    @-webkit-keyframes heye_rotate
    {
        from  {-webkit-transform: rotate(0deg);}
        to    {-webkit-transform: rotate(5deg);}
    }
    @-webkit-keyframes heye_rotate1
    {
        from  {-webkit-transform: rotate(0deg);}
        to    {-webkit-transform: rotate(2.5deg);}
    }
    @-webkit-keyframes hehua1
    {
        from  {-webkit-transform: translate(0px,0px);}
        to    {-webkit-transform: translate(7px,0px);}
    }
    #up
    {
        position: absolute;
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
    #downbox
    {
        position: absolute;
        top: 180px;
        width: 500px;
        height: 570px;
        overflow: hidden;
        margin: 0px;
        padding: 0px;
    }
    #down1
    {
        position: absolute;
        /*-webkit-animation: changedown1 2s linear forwards;*/
    }
    @-webkit-keyframes changedown1
    {
        from   {-webkit-transform: translate(0px,0px);}
        to     {-webkit-transform: translate(0px,-132px);}
    }
    @-webkit-keyframes changebox
    {
        from   {height: 420px;}
        to     {height: 288px;}
    }
    #modian1
    {
        position: absolute;
        opacity: 0;
        /*-webkit-animation: modian1 2s linear forwards;*/
    }
    #modian2
    {
        position: absolute;
        opacity: 0;
        top: 150px;
        left: 60px;
        opacity: 0;
        /*-webkit-animation: modian2 2.5s 0.3s linear forwards;*/
    }
    #modian3
    {
        position: absolute;
        opacity: 0;
        width: 100px;
        top: 300px;
        left: 30px;
        /*-webkit-animation: modian1 2s 0.8s linear forwards;*/
    }
    #modian4
    {
        position: absolute;
        opacity: 0;
        width: 130px;
        top: -20px;
        left: 200px;
        /*-webkit-animation: modian1 2s 0.5s linear forwards;*/
    }
    @-webkit-keyframes modian1
    {
        from  {-webkit-transform: scale(.3,.3);opacity: 0.5;}
        to    {-webkit-transform: scale(1,1);opacity: 0;}
    }
    @-webkit-keyframes modian2
    {
        from  {-webkit-transform: scale(.5,.5);opacity: 0.5}
        to    {-webkit-transform: scale(1.5,1.5);opacity: 0}
    }
    @-webkit-keyframes fadeout
    {
        from   {opacity: 1}
        to     {opacity: 0}
    }
    @-webkit-keyframes fadein
    {
        from   {opacity: 0}
        to     {opacity: 1}
    }
    #front_box,#back_box
    {
        -webkit-transform-origin: 50% 0%;
        position: absolute;
        overflow: hidden;
        /*-webkit-animation: fadeout 3s 0.5s linear forwards;*/
    }
</style>

<div id='container'>

    <img id='niao2' src='<?=$p?>images/2000.gif'>

    <div id='huajuan' style='opacity:0;'>
        <div id='img_div'>
            <div id='back_box'>
                <img id='my_imgback' style='position:absolute;'>
            </div>
            <div id='front_box'>
                <img id='my_imgfront' style='position:absolute;'>
            </div>
            <img id='modian1' src='<?=$p?>images/1.png'>
            <img id='modian2' src='<?=$p?>images/1.png'>
            <img id='modian3' src='<?=$p?>images/1.png'>
            <img id='modian4' src='<?=$p?>images/1.png'>
        </div>

        <div id='downbox'>
            <img id='down1' src='<?=$p?>images/2.png'>
        </div>

        <img id='up' src='<?=$p?>images/3.png'>
        
    </div>

    <img id='heye1' src='<?=$p?>images/5.png'>
    <img id='heye4' src='<?=$p?>images/100.png'>
    <img id='heye2' src='<?=$p?>images/200.pn'>
    <img id='heye3' src='<?=$p?>images/300.pn'>
    <img id='heye5' src='<?=$p?>images/400.pn'>

    <img id='cloud1' src='<?=$p?>images/6.png'>
    <img id='cloud2' src='<?=$p?>images/6.png'>

    <img id='niao1' src='<?=$p?>images/200.gif'>

    <div id='pagetitle' style='position:absolute;width:420px;height:150px;left:40px;top:240px;overflow:hidden;font-size:40px;color:#000;text-align:center;line-height:50px;pointer:none;'>
        <div style='display:table;width:440px;height:150px;width:420px;'>
            <div id='titlecontent' style='display:table-cell;vertical-align:middle;width:420px;'></div>
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
var delaytime = 4000;
function id (name)
{
    return document.getElementById(name);
}

function load_images ()
{
    begin_titletime = new Date();
    begin_titletime = begin_titletime.getTime();

    change_imgdiv=id('img_div');
    change_down=id('down1');

    first_img=id('my_imgfront');
    second_img=id('my_imgback');

    first_box=id('front_box');
    second_box=id('back_box');
    id('titlecontent').innerHTML = e_desc;

    for(var i=0;i<slider_images_url.length;i++)
    {
        var img=new Image();
        img.index=i;
        img.src=slider_images_url[i];
        img.onload=img_onload;
    }
}

function distitle()
{
    id('pagetitle').style.webkitAnimation = 'fadeout 1s linear both';
    id('huajuan').style.webkitAnimation = 'fadein 1s 1s linear both';
}
function img_onload (event)
{
    var img=event.target;
    var img_index=img.index;
    images_width[img_index]=img.width;
    images_height[img_index]=img.height;
    load_num++;

    if (load_num==slider_images_url.length)
    {
        load_num=0;
        createStyle();
        var end_titletime = new Date();
        end_titletime = end_titletime.getTime();
        var dis_titletime = Math.abs(end_titletime-begin_titletime);
        if(dis_titletime>delaytime)
        {
            distitle();
            timeout1 = setTimeout(beginshow,1000);
        }
        else
        {
            dis_titletime = delaytime- dis_titletime;
            timeout1 = setTimeout(function()
                {
                    distitle();
                    timeout2 = setTimeout(beginshow,1000);
                },dis_titletime);
        }
    };

}

function createStyle ()
{
    for(var i=0;i<slider_images_url.length;i++)
    {
        if (images_width[i]/images_height[i]<(288/420))
        {
            images_position[i]=420;
        }
        else
        {
            images_position[i]=288*images_height[i]/images_width[i];
        };
    }
    if(slider_images_url.length>1)
    {
        for(var i=0;i<slider_images_url.length;i++)
        {
            var j=i+1;
            if(j==slider_images_url.length)
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
            var translate_y1=420-images_position[i];
            var translate_y2=420-images_position[j];
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
    }

    change_imgdiv.style.height=images_position[0]+'px';
    change_down.style.webkitTransform='translate(0px,-'+(420-images_position[0])+'px)';
    // alert();

}

function beginshow ()
{

    if(load_num==slider_images_url.length)
        load_num=0;
    var next_num=load_num+1;
    if(next_num==slider_images_url.length)
        next_num=0;

    cutimage(0,load_num);
    first_img.src=slider_images_url[load_num];
    cutimage(1,next_num);
    second_img.src=slider_images_url[next_num];
    cleanmoshui();

    setTimeout(function()
    {
        change_imgdiv.style.webkitAnimation='change_box'+load_num+'to'+next_num+' 2s linear forwards';
        change_down.style.webkitAnimation='change_img'+load_num+'to'+next_num+' 2s linear forwards';

        // console.log(change_imgdiv.style.webkitAnimation);
        
        showmoshui();


        first_box.style.webkitAnimation='change_box_out'+load_num+'to'+next_num+' 2s linear forwards';
        second_box.style.webkitAnimation='change_box_sec_in'+load_num+'to'+next_num+' 2s linear forwards';
        // console.log(second_box.style.webkitAnimation)
        
        load_num++;

        setTimeout(nextshow,4500);
    },3000);

}

function nextshow ()
{
    if(load_num==slider_images_url.length)
        load_num=0;
    var next_num=load_num+1;
    if(next_num==slider_images_url.length)
        next_num=0;

    // first_img.style.opacity=0;

    cutimage(0,next_num);
    first_img.src=slider_images_url[next_num];
    cleanmoshui();


    setTimeout(function()
    {
        change_imgdiv.style.webkitAnimation='change_box'+load_num+'to'+next_num+' 2s linear forwards';
        change_down.style.webkitAnimation='change_img'+load_num+'to'+next_num+' 2s linear forwards';

        // console.log(change_imgdiv.style.webkitAnimation);
        
        showmoshui();

        first_box.style.webkitAnimation='change_box_in'+load_num+'to'+next_num+' 2s linear forwards';
        console.log(first_box.style.webkitAnimation);
        second_box.style.webkitAnimation='change_box_sec_out'+load_num+'to'+next_num+' 2s linear forwards';
        
        load_num++;

        setTimeout(nextnextshow,4500);

    },3000)
}

function nextnextshow ()
{
    if(load_num==slider_images_url.length)
        load_num=0;
    var next_num=load_num+1;
    if(next_num==slider_images_url.length)
        next_num=0;

    first_img.style.opacity=1;
    cutimage(1,next_num);
    second_img.src=slider_images_url[next_num];
    cleanmoshui();

    

    setTimeout(function()
    {
        change_imgdiv.style.webkitAnimation='change_box'+load_num+'to'+next_num+' 2s linear forwards';
        change_down.style.webkitAnimation='change_img'+load_num+'to'+next_num+' 2s linear forwards';

        // console.log(change_imgdiv.style.webkitAnimation);

        showmoshui();

        first_box.style.webkitAnimation='change_box_out'+load_num+'to'+next_num+' 2s linear forwards';
        second_box.style.webkitAnimation='change_box_sec_in'+load_num+'to'+next_num+' 2s linear forwards';
        
        load_num++;
        setTimeout(nextshow,4500);

    },3000)
}


function showmoshui ()
{
    id('modian1').style.webkitAnimation='modian1 2s linear forwards';
    id('modian2').style.webkitAnimation='modian2 2.5s 0.3s linear forwards';
    id('modian3').style.webkitAnimation='modian1 2s 0.8s linear forwards';
    id('modian4').style.webkitAnimation='modian1 2s 0.5s linear forwards';
}

function cleanmoshui ()
{
    id('modian1').style.webkitAnimation='';
    id('modian2').style.webkitAnimation='';
    id('modian3').style.webkitAnimation='';
    id('modian4').style.webkitAnimation='';
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

    if (img_bili<(288/420)) 
    {
        myimg.width=288;
        myimg.height=288/img_bili;
        myimg.style.left='0px';
        myimg.style.top='-'+((myimg.height-420)/2)+'px';
        
        mybox.style.width='288px';
        mybox.style.height='420px';
    }
    else
    {
        myimg.width=288;
        myimg.height=288/img_bili;
        myimg.style.top='0px';
        myimg.style.left='0px';

        mybox.style.width='288px';
        mybox.style.height=288/img_bili+'px';
    }
}
call_me(load_images);

</script>