<?
$p=$_WEITE['web_pic_url']."qingrenjie/";
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
#container> div,#container> img
{
    position: absolute;
}
#shang
{
    left: 0px;
    -webkit-animation: shangmove 10s linear infinite alternate;
}
#xian
{
    -webkit-animation: xianmove 4s linear infinite alternate;
}
#wenzi
{
    left: 154px;
    top: 719px;
    -webkit-animation: wenzimove 4s linear infinite;
}
#xindiv
{
    width: 500px;
    left: 0px;
    top: 0px;
    height: 500px;

}
#xindiv > img
{
    position: absolute;
}
.sanjiaoup
{
    width: 0;
    height: 0;
    border-left: 40px solid transparent;
    border-right: 40px solid transparent;
    border-bottom: 60px solid rgba(160,199,238,1);
    opacity: 0;
    /*border-bottom: 60px solid rgba(160,199,0,0.5);*/
    /*background-color: #fff;*/
}
.sanjiaodown
{
    width: 0;
    height: 0;
    border-left: 40px solid transparent;
    border-right: 40px solid transparent;
    /*border-bottom: 60px solid rgba(160,199,238,0.5);*/
    border-top: 60px solid rgba(160,199,238,1);
    opacity: 0;
    /*background-color: #fff;*/
}
#sanjiao1
{
    left: 79px;
    top: 291px;
}
#sanjiao2
{
    left: 167px;
    top: 291px;
}
#sanjiao3
{
    left: 250px;
    top: 291px; 
}
#sanjiao4
{
    left: 332px;
    top: 291px;  
}
#sanjiao5
{
    left: 123px;
    top: 353px;
}
#sanjiao6
{
    left: 209px;
    top: 353px;
}
#sanjiao7
{
    left: 291px;
    top: 353px;  
}
#sanjiao8
{
    left: 82px;
    top: 412px;
}
#sanjiao9
{
    left: 165px;
    top: 412px; 
}
#sanjiao10
{
    left: 249px;
    top: 412px;
}
#sanjiao11
{
    left: 330px;
    top: 412px; 
}
#sanjiao12
{
    left: 124px;
    top: 472px;
}
#sanjiao13
{
    left: 207px;
    top: 472px;
}
#sanjiao14
{
    left: 289px;
    top: 472px;
}
#sanjiao15
{
    left: 123px;
    top: 293px;
}
#sanjiao16
{
    left: 209px;
    top: 291px;
}
#sanjiao17
{
    left: 291px;
    top: 290px;
}
#sanjiao18
{
    left: 80px;
    top: 353px;
}
#sanjiao19
{
    left: 166px;
    top: 353px;
}
#sanjiao20
{
    left: 250px;
    top: 353px;
}
#sanjiao21
{
    left: 334px;
    top: 353px;
}
#sanjiao22
{
    left: 124px;
    top: 411px;
}
#sanjiao23
{
    left: 207px;
    top: 412px;
}
#sanjiao24
{
    left: 290px;
    top: 410px;

}
#sanjiao25
{
    left: 81px;
    top: 473px;
}
#sanjiao26
{
    left: 166px;
    top: 472px;
}
#sanjiao27
{
    left: 248px;
    top: 471px;
}
#sanjiao28
{
   left: 330px;
    top: 471px; 
}
#div1,#div2,#div1_view,#div2_view,#div3,#div3_view
{
    border: 5px solid #fff;
    box-shadow: 7px 14px 20px #666;
    position: absolute;
    opacity: 0;
}

</style>
<style type="text/css">
@-webkit-keyframes shangmove
{
    from  {-webkit-transform: translate(0px,0px);}
    to    {-webkit-transform: translate(-80px,0px);}
}
@-webkit-keyframes xianmove
{
    from  {-webkit-transform: translate(0px,0px);}
    to    {-webkit-transform: translate(-80px,0px);}
}
@-webkit-keyframes wenzimove
{
    0%   {opacity: 1;-webkit-transform: scale(1,1);}
    35%  {opacity: 0.5;-webkit-transform: scale(1,1);}
    70%  {opacity: 1;-webkit-transform: scale(1,1);}
    85%  {opacity: 1;-webkit-transform: scale(1,0);}
    100% {opacity: 1;-webkit-transform: scale(1,1);}
}
@-webkit-keyframes titlein
{
    from  {opacity: 0;-webkit-transform: translate(0px,-20px);}
    to    {opacity: 1;-webkit-transform: translate(0px,0px);}
}

@-webkit-keyframes titleout
{
    from  {opacity: 1;-webkit-transform: translate(0px,00px);}
    to    {opacity: 0;-webkit-transform: translate(0px,20px);}
}

@-webkit-keyframes div1_in
{
    from  {opacity: 0;-webkit-transform: scale(1.2);}
    to    {opacity: 1;-webkit-transform: scale(1);}
}
@-webkit-keyframes div1_out
{
    from  {opacity: 1;-webkit-transform: scale(1);}
    to    {opacity: 0;-webkit-transform: scale(1);}
}
@-webkit-keyframes div1_view_in
{
    from  {opacity: 0;-webkit-transform: scale(1.2);}
    to    {opacity: 0.3;-webkit-transform: scale(1.8);}
}
@-webkit-keyframes div1_view_out
{
    from  {opacity: 0.3;-webkit-transform: scale(1.8);}
    to    {opacity: 0;-webkit-transform: scale(1.8);}
}
@-webkit-keyframes div2_in
{
    from  {opacity: 0;-webkit-transform: translate(0px,0px) scale(1.2);}
    to    {opacity: 1;-webkit-transform: translate(0px,30px) scale(1);}
}
@-webkit-keyframes div2_out 
{
    from  {opacity: 1;-webkit-transform: translate(0px,30px) scale(1);}
    to    {opacity: 0;-webkit-transform: translate(0px,60px) scale(1);}
}
@-webkit-keyframes div2_view_in
{
    from  {opacity: 0;-webkit-transform: translate(0px,0px) scale(1.8);}
    to    {opacity: 0.3;-webkit-transform: translate(-50px,0px) scale(1.8);}
}
@-webkit-keyframes div2_view_out
{
    from  {opacity: 0.3;-webkit-transform: translate(-50px,0px) scale(1.8);}
    to    {opacity: 0;-webkit-transform: translate(-80px,0px) scale(1.8);}
}
@-webkit-keyframes div3_in 
{
    from  {opacity: 0;-webkit-transform: translate(30px,0px) scale(1.2);}
    to    {opacity: 1;-webkit-transform: translate(0px,0px) scale(1);}
}
@-webkit-keyframes div3_view_in
{
    from  {opacity: 0;-webkit-transform: translate(0px,0px) scale(1.8);}
    to    {opacity: 0.3;-webkit-transform: translate(50px,0px) scale(1.8);}
}
@-webkit-keyframes div3_out
{
    from  {opacity: 1;-webkit-transform: translate(0px,0px) scale(1);}
    to    {opacity: 0;-webkit-transform: translate(0px,20px) scale(1);}
}
@-webkit-keyframes div3_view_out
{
    from  {opacity: 0.3;-webkit-transform: translate(50px,0px) scale(1.8);}
    to    {opacity: 0;-webkit-transform: translate(100px,0px) scale(1.8);}
}
@-webkit-keyframes moving_down
{
    from  {-webkit-transform: translate(0px,-25px);}
    to    {-webkit-transform: translate(0px,25px);}
}
@-webkit-keyframes moving_up
{
    from  {-webkit-transform: translate(0px,25px);}
    to    {-webkit-transform: translate(0px,-25px);}
}
@-webkit-keyframes moving_left
{
    from  {-webkit-transform: translate(25px,0px);}
    to    {-webkit-transform: translate(-25px,0px);}
}
@-webkit-keyframes moving_right
{
    from  {-webkit-transform: translate(-25px,0px);}
    to    {-webkit-transform: translate(25px,0px);}
}
</style>

<div id='container'>
    <img id='kawa' src='<?=$p?>images/bg.jpg'>
   

    <img id='xian' src='<?=$p?>images/xian.png'>
    <div id='xindiv'>
    </div>

    <div id='view_box'>
        <div id='div1_view'></div>
        <div id='div2_view'></div>
        <div id='div3_view'></div>
    </div>

    <div id='div_box'>
        <div id='div1'></div>
        <div id='div2'></div>
        <div id='div3'></div>
    </div>

    <div id='sanjiao1' class='sanjiaoup'></div>
    <div id='sanjiao2' class='sanjiaoup'></div>
    <div id='sanjiao3' class='sanjiaoup'></div>
    <div id='sanjiao4' class='sanjiaoup'></div>
    <div id='sanjiao5' class='sanjiaoup'></div>
    <div id='sanjiao6' class='sanjiaoup'></div>
    <div id='sanjiao7' class='sanjiaoup'></div>
    <div id='sanjiao8' class='sanjiaoup'></div>
    <div id='sanjiao9' class='sanjiaoup'></div>
    <div id='sanjiao10' class='sanjiaoup'></div>
    <div id='sanjiao11' class='sanjiaoup'></div>
    <div id='sanjiao12' class='sanjiaoup'></div>
    <div id='sanjiao13' class='sanjiaoup'></div>
    <div id='sanjiao14' class='sanjiaoup'></div>

    <div id='sanjiao15' class='sanjiaodown'></div>
    <div id='sanjiao16' class='sanjiaodown'></div>
    <div id='sanjiao17' class='sanjiaodown'></div>
    <div id='sanjiao18' class='sanjiaodown'></div>
    <div id='sanjiao19' class='sanjiaodown'></div>
    <div id='sanjiao20' class='sanjiaodown'></div>
    <div id='sanjiao21' class='sanjiaodown'></div>
    <div id='sanjiao22' class='sanjiaodown'></div>
    <div id='sanjiao23' class='sanjiaodown'></div>
    <div id='sanjiao24' class='sanjiaodown'></div>
    <div id='sanjiao25' class='sanjiaodown'></div>
    <div id='sanjiao26' class='sanjiaodown'></div>
    <div id='sanjiao27' class='sanjiaodown'></div>
    <div id='sanjiao28' class='sanjiaodown'></div>

    <img id='shang' src='<?=$p?>images/shang.png'>
    <img id='wenzi' src='<?=$p?>images/wenzi.png'>

    <div id='pagetitle' style='position:absolute;width:248px;height:200px;top:314px;left:124px;overflow:hidden;'>
        <div style='position:absolute;width:248px;height:200px;top:0px;left:0px;overflow:hidden;'>
            <div style='position:absolute;width:248px;height:200px;display:table;overflow:hidden;'>
                <div id='titlecontent' style='width:248px;height:200px;vertical-align:middle;display:table-cell;text-align:center;font-size:30px;color:#515151;line-height:150%;'></div>
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
var delaytime=5000;
var timeout0;
var timeout1;
var timeout2;
var timeout3;
var timeout4;
var timeout5;
var timeout6;
var timeout7;
var timeout8;

function id(name)
{
    return document.getElementById(name);
}
function loading()
{
    div1 = id('div1');
    div2 = id('div2');
    div3 = id('div3');

    div1_view = id('div1_view');
    div2_view = id('div2_view');
    div3_view = id('div3_view');

    view_box = id('view_box');
    div_box = id('div_box');

    createheart();
    load_images();
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
function id(name)
{
    return document.getElementById(name);
}

function rand(min,max)
{
    return min+Math.floor(Math.random()*(max-min+1));
}

function showtitle()
{
    id('titlecontent').innerHTML = e_desc;
    id('pagetitle').style.webkitAnimation = 'titlein 1s 1.5s linear both';

    showsanjiao();
}

function createheart()
{
    var con_div = id('xindiv');

    for(var i = 0;i < 20; i++)
    {
        var img = document.createElement('img');
        img.style.width = '39px';
        img.style.left = rand(0,460) + 'px';
        img.style.top = rand(-20,10) + 'px';
        // img.style.webkitAnimation = 'xinmove 5s '+0.25*i+'s linear infinite';
        img.src='<?=$p?>images/xin.png';

        var csstext='@-webkit-keyframes heart'+i+' {from{-webkit-transform: translate(0px,0px) rotate(0deg);opacity:1} to{-webkit-transform: translate(0px,500px) rotate('+rand(-360,360)+'deg);opacity:0}}';
        // console.log(csstext);
        var style=document.createElement('style');
        document.head.appendChild(style);
        var sheet=style.sheet;
        sheet.insertRule(csstext,0);

        img.style.webkitAnimation = 'heart'+i+' 5s '+0.25*i+'s linear infinite';

        con_div.appendChild(img);
    } 
}

var sanjiaolist = ['sanjiao1','sanjiao18','sanjiao15','sanjiao5','sanjiao19','sanjiao2','sanjiao6','sanjiao16','sanjiao20','sanjiao3','sanjiao17','sanjiao7','sanjiao21','sanjiao4','sanjiao8','sanjiao25','sanjiao22','sanjiao12','sanjiao26','sanjiao9','sanjiao13','sanjiao23','sanjiao27','sanjiao10','sanjiao24','sanjiao14','sanjiao28','sanjiao11'];
var sanjiaotype = true;
function showsanjiao()
{
    sanjiaoindex = 0;

    inter = setInterval(function()
    {
        var img = id(sanjiaolist[sanjiaoindex]);
        img.style.opacity = 0.3;

        sanjiaoindex ++ ;

        if(sanjiaoindex >14)
        {
            var img = id(sanjiaolist[sanjiaoindex-14])
            img.style.opacity = 1;

            if(sanjiaoindex == 28)
            {
                clearInterval(inter); 
                return;
            }
                    
        }

    },100)
}

function distitle()
{
    var rand_x = [];
    var rand_y = [];
    for(var i =0;i<28;i++)
    {
        if(i%2 == 0)
        {
            rand_x[i] = -rand(400,500);
            rand_y[i] = rand(-600,600);
            var csstext='@-webkit-keyframes heartmove'+i+' {from{-webkit-transform: translate(0px,0px)} to{-webkit-transform: translate('+rand_x[i]+'px,'+rand_y[i]+'px)}}';
        }
        else{
            rand_x[i] = rand(400,500);
            rand_y[i] = rand(-600,600);
            var csstext='@-webkit-keyframes heartmove'+i+' {from{-webkit-transform: translate(0px,0px)} to{-webkit-transform: translate('+rand_x[i]+'px,'+rand_y[i]+'px)}}';
        }
        
        var style=document.createElement('style');
        document.head.appendChild(style);
        var sheet=style.sheet;
        sheet.insertRule(csstext,0);

        var img = id(sanjiaolist[i]);

        img.style.webkitAnimation = 'heartmove'+i+' '+rand(15,25)/10+'s linear both';
        // console.log(img.style.webkitAnimtion);
    }

    for(var i=0;i<28;i++)
    {
        var csstext = '@-webkit-keyframes moveto' + i + ' {from{-webkit-transform: translate('+rand_x[i]+'px,'+rand_y[i]+'px)} to{-webkit-transform: translate('+(-rand_x[i])+'px,'+(-rand_y[i])+'px)}}';
        var style = document.createElement('style');
        console.log(csstext);
        document.head.appendChild(style);
        var sheet = style.sheet;
        sheet.insertRule(csstext,0);

        var csstext1 = '@-webkit-keyframes moveback' + i + ' {from{-webkit-transform: translate('+(-rand_x[i])+'px,'+(-rand_y[i])+'px)} to{-webkit-transform: translate('+rand_x[i]+'px,'+rand_y[i]+'px)}}';
        var style1 = document.createElement('style');
        console.log(csstext1);
        document.head.appendChild(style1);
        var sheet1 = style1.sheet;
        sheet1.insertRule(csstext1,0);
    }

    id('pagetitle').style.webkitAnimation = 'titleout 0.7s linear both';

    timeout1 = setTimeout(kawa_liangziyun,300);
}


function kawa_liangziyun()
{

    setImageindex();

    view_box.style.webkitAnimation = 'moving_down 5s linear both';
    div_box.style.webkitAnimation = 'moving_up 5s linear both';

    div1.style.backgroundImage = 'url('+Onload_imgs_url[image_url_index]+')';
    div1_view.style.backgroundImage = 'url('+Onload_imgs_url[image_url_index]+')';

    img_bili = image_size_width[image_url_index]/image_size_height[image_url_index];

    if(img_bili>1)
    {
        var img_width = 440;
    }
    else
    {
        if(img_bili < (500/800))
            var img_width = 400;
        else
            var img_width = 420;
    }

    var img_height = img_width/img_bili;
    div1.style.backgroundSize = img_width+'px '+img_height + 'px';
    div1_view.style.backgroundSize = img_width+'px '+img_height + 'px';
    div1.style.width = img_width+'px';
    div1_view.style.width = img_width+'px';
    div1.style.left = (500-img_width)/2+'px';
    div1_view.style.left = (500-img_width)/2+'px';

    if(img_bili < (500/800))//ͼƬ����
    {

        div1.style.backgroundPosition = '0px -'+(img_height-780)/2+'px';
        div1_view.style.backgroundPosition = '0px -'+(img_height-780)/2+'px';
        div1.style.height = '600px';
        div1_view.style.height = '600px';
        div1.style.top = '90px';
        div1_view.style.top = '90px';
    }
    else
    {
        div1.style.backgroundPosition = '0px 0px';
        div1_view.style.backgroundPosition = '0px 0px';
        div1.style.height = img_height + 'px';
        div1_view.style.height = img_height + 'px';
        div1.style.top = (780-img_height)/2+'px';
        div1_view.style.top = (780-img_height)/2+'px';
    }
    
    div1.style.webkitAnimation = 'div1_in 1.5s ease-in-out both';
    div1_view.style.webkitAnimation = 'div1_view_in 1.5s ease-in-out both';

    
    timeout2 = setTimeout(show2,5000)
}

function show2()
{
    sanjiaoani();

    div1.style.webkitAnimation = 'div1_out 1s linear both';
    div1_view.style.webkitAnimation = 'div1_view_out 1s linear both';

    image_url_index ++;
    setImageindex();

    div2.style.backgroundImage = 'url('+Onload_imgs_url[image_url_index]+')';
    div2_view.style.backgroundImage = 'url('+Onload_imgs_url[image_url_index]+')';

    img_bili = image_size_width[image_url_index]/image_size_height[image_url_index];

    if(img_bili>1)
    {
        var img_width = 440;
    }
    else
    {
        if(img_bili < (500/800))
            var img_width = 400;
        else
            var img_width = 420;
    }

    var img_height = img_width/img_bili;
    div2.style.backgroundSize = img_width+'px '+img_height + 'px';
    div2_view.style.backgroundSize = img_width+'px '+img_height + 'px';
    div2.style.width = img_width+'px';
    div2_view.style.width = img_width+'px';
    div2.style.left = (500-img_width)/2+'px';
    div2_view.style.left = (500-img_width)/2+'px';

    if(img_bili < (500/800))//ͼƬ����
    {

        div2.style.backgroundPosition = '0px -'+(img_height-780)/2+'px';
        div2_view.style.backgroundPosition = '0px -'+(img_height-780)/2+'px';
        div2.style.height = '600px';
        div2_view.style.height = '600px';
        div2.style.top = '90px';
        div2_view.style.top = '90px';
    }
    else
    {
        div2.style.backgroundPosition = '0px 0px';
        div2_view.style.backgroundPosition = '0px 0px';
        div2.style.height = img_height + 'px';
        div2_view.style.height = img_height + 'px';
        div2.style.top = (780-img_height)/2+'px';
        div2_view.style.top = (780-img_height)/2+'px';
    }
    
    div2.style.webkitAnimation = 'div2_in 1.5s 1s ease-in-out both';
    div2_view.style.webkitAnimation = 'div2_view_in 1.5s 1s ease-in-out both';

    timeout3 = setTimeout(function()
    {
        view_box.style.webkitAnimation = 'moving_right 5s linear both';
        div_box.style.webkitAnimation = 'moving_down 5s linear both';
    },1000)

    timeout4 = setTimeout(show3,5000)
}

function show3()
{
    sanjiaoani();


    div2.style.webkitAnimation = 'div2_out 1s linear both';
    div2_view.style.webkitAnimation = 'div2_view_out 1s linear both';

    image_url_index ++;
    setImageindex();

    div3.style.backgroundImage = 'url('+Onload_imgs_url[image_url_index]+')';
    div3_view.style.backgroundImage = 'url('+Onload_imgs_url[image_url_index]+')';

    img_bili = image_size_width[image_url_index]/image_size_height[image_url_index];

    if(img_bili>1)
    {
        var img_width = 440;
    }
    else
    {
        if(img_bili < (500/800))
            var img_width = 400;
        else
            var img_width = 420;
    }

    var img_height = img_width/img_bili;
    div3.style.backgroundSize = img_width+'px '+img_height + 'px';
    div3_view.style.backgroundSize = img_width+'px '+img_height + 'px';
    div3.style.width = img_width+'px';
    div3_view.style.width = img_width+'px';
    div3.style.left = (500-img_width)/2+'px';
    div3_view.style.left = (500-img_width)/2+'px';

    if(img_bili < (500/800))//ͼƬ����
    {

        div3.style.backgroundPosition = '0px -'+(img_height-780)/2+'px';
        div3_view.style.backgroundPosition = '0px -'+(img_height-780)/2+'px';
        div3.style.height = '600px';
        div3_view.style.height = '600px';
        div3.style.top = '90px';
        div3_view.style.top = '90px';
    }
    else
    {
        div3.style.backgroundPosition = '0px 0px';
        div3_view.style.backgroundPosition = '0px 0px';
        div3.style.height = img_height + 'px';
        div3_view.style.height = img_height + 'px';
        div3.style.top = (760-img_height)/2+'px';
        div3_view.style.top = (760-img_height)/2+'px';
    }
    
    div3.style.webkitAnimation = 'div3_in 1.5s 1s ease-in-out both';
    div3_view.style.webkitAnimation = 'div3_view_in 1.5s 1s ease-in-out both';

    timeout5 = setTimeout(function()
    {
        view_box.style.webkitAnimation = 'moving_left 5s linear both';
        div_box.style.webkitAnimation = 'moving_up 5s linear both';
    },1000)

    timeout6 = setTimeout(show4,5000)
}

function show4()
{
    sanjiaoani();

    div3.style.webkitAnimation = 'div3_out 1s linear both';
    div3_view.style.webkitAnimation = 'div3_view_out 1s linear both';

    image_url_index++;
    setImageindex();
    div1.style.backgroundImage = 'url('+Onload_imgs_url[image_url_index]+')';
    div1_view.style.backgroundImage = 'url('+Onload_imgs_url[image_url_index]+')';

    img_bili = image_size_width[image_url_index]/image_size_height[image_url_index];

    if(img_bili>1)
    {
        var img_width = 440;
    }
    else
    {
        if(img_bili < (500/800))
            var img_width = 400;
        else
            var img_width = 420;
    }

    var img_height = img_width/img_bili;
    div1.style.backgroundSize = img_width+'px '+img_height + 'px';
    div1_view.style.backgroundSize = img_width+'px '+img_height + 'px';
    div1.style.width = img_width+'px';
    div1_view.style.width = img_width+'px';
    div1.style.left = (500-img_width)/2+'px';
    div1_view.style.left = (500-img_width)/2+'px';

    if(img_bili < (500/800))//ͼƬ����
    {

        div1.style.backgroundPosition = '0px -'+(img_height-780)/2+'px';
        div1_view.style.backgroundPosition = '0px -'+(img_height-780)/2+'px';
        div1.style.height = '600px';
        div1_view.style.height = '600px';
        div1.style.top = '90px';
        div1_view.style.top = '90px';
    }
    else
    {
        div1.style.backgroundPosition = '0px 0px';
        div1_view.style.backgroundPosition = '0px 0px';
        div1.style.height = img_height + 'px';
        div1_view.style.height = img_height + 'px';
        div1.style.top = (780-img_height)/2+'px';
        div1_view.style.top = (780-img_height)/2+'px';
    }
    
    div1.style.webkitAnimation = 'div1_in 1.5s 1s ease-in-out both';
    div1_view.style.webkitAnimation = 'div1_view_in 1.5s 1s ease-in-out both';

    timeout7 = setTimeout(function()
    {
        view_box.style.webkitAnimation = 'moving_up 5s linear both';
        div_box.style.webkitAnimation = 'moving_down 5s linear both';
    },1000)

    timeout8 = setTimeout(show2,5000)
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

function sanjiaoani()
{
    for(var i =0;i<28;i++)
    {
        var img = id(sanjiaolist[i]);
        if(sanjiaotype)
            img.style.webkitAnimation = 'moveto'+i+' '+rand(20,30)/10+'s ease-out both';
        else
            img.style.webkitAnimation = 'moveback'+i+' '+rand(20,30)/10+'s ease-out both';

    }
    sanjiaotype = !sanjiaotype;
    // console.log(sanjiaotype);
    console.log(id(sanjiaolist[0]).style.webkitAnimation)
}
call_me(loading);

function reload_scene()
{
    clearnode();
    reshow = true;
    setTimeout(load_images,100);
}

function clearnode()
{
    for(var i=0;i<28;i++)
    {
        id(sanjiaolist[i]).style.webkitAnimation = '';
    }

    div1.style.webkitAnimation = '';
    div1_view.style.webkitAnimation = '';
    div2.style.webkitAnimation = '';
    div2_view.style.webkitAnimation = '';
    div3.style.webkitAnimation = '';
    div3_view.style.webkitAnimation = '';
    view_box.style.webkitAnimation = '';
    div_box.style.webkitAnimation = '';

    clearInterval(inter);

    clearTimeout(timeout0);
    clearTimeout(timeout1);
    clearTimeout(timeout2);
    clearTimeout(timeout3);
    clearTimeout(timeout4);
    clearTimeout(timeout5);
    clearTimeout(timeout6);
    clearTimeout(timeout7);
    clearTimeout(timeout8);
}
</script>