<?
$p=$_WEITE['web_pic_url']."piaoliuping/";
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
    #bg{
      position: absolute;
      width: 500px;
      top:0 ;
      left:0;
    }

    #botton{
      position: absolute;
      width: 301px;
      height: 134px;
      left: 86px;
      top: 604px;
/*      z-index: 10;*/

    }
    

    #aixin{
      position: absolute;
      left: 249px;

      top: 640px;
      width: 76px;
      height:76px;
/*      z-index: 10;*/
    }

    #boat{
      position: absolute;
      width: 97px;
      height: 193px;
      left:-97px;
      top:282px;
/*      z-index: 10;*/
    }
    #sai{
      position: absolute;
      width: 47px;
      height: 29px;
      left:65px;
      top:615px;
/*      z-index: 10;*/
    }
    #cloud1{
      position: absolute;
      width: 248px;
      height: 167px;
      left:-248px;
      top:186px;
      /*z-index: 10;*/
      -webkit-animation:cloud1 40s linear 0s infinite;
    }
    #cloud2{
      position: absolute;
      width: 399px;
      height: 131px;
      left:499px;
      top:26px;
      /*z-index: 10;*/
      -webkit-animation:cloud2 45s linear .2s infinite;
    }


    .fla{
      position: absolute;
      width: 29px;
      height:29px;
      left:286px;
      top: 678px; 
      opacity: 0;
      -webkit-transform-origin:50% 50%;
      /*z-index: 10;*/
    }
    
    #cloud{
      position: absolute;
      width: 536px;
      height: 397px;
      left:-18px;
      top:0px;
      opacity: 0;
      /*z-index: 1;*/
      -webkit-transform-origin:0% 0%;
      -webkit-animation:cloud 120s linear .2s infinite;
    }
    @-webkit-keyframes cloud
        {
            0%{-webkit-transform:translate(0px,0px) scale(1,1);opacity: 0}
            4%{-webkit-transform:translate(0px,0px) scale(1,1);opacity: 1}
            50%{-webkit-transform:translate(0px,-397px) scale(1.7,1.7);opacity: 1}
            100%{-webkit-transform:translate(0px,-794px) scale(1.7,1.7);opacity: 1}
        }
    @-webkit-keyframes cloudTwo
    {
        0%{-webkit-transform:translate(0px,0px) scale(1,0);}
        50%{
          -webkit-transform:translate(0px,-397px) scale(1,1);opacity: 1}
        }
        100%{-webkit-transform:translate(0px,-794px) scale(1.7,1.7);}
    }


    @-webkit-keyframes cloud1
        {
            0%{-webkit-transform:translate(0px,0px) scale(1,1);opacity: 1}
            100%{-webkit-transform:translate(800px,0px) scale(1.4,1.4);opacity: 1}
        }

    @-webkit-keyframes cloud2
        {
            0%{-webkit-transform:translate(0px,0px) scale(1,1);opacity: 1;}
            100%{-webkit-transform:translate(-950px,0px) scale(1.4,1.4);opacity: 1;}
        }

    @-webkit-keyframes shuiwen
        {
            0%{-webkit-transform:scale(1,1);opacity: 0;}
            50%{-webkit-transform:scale(1,1.2);opacity: 1}
            100%{-webkit-transform:scale(1,1.4);opacity: 0}
        }
    @-webkit-keyframes shuiwen1
        {
            0%{-webkit-transform:scale(1,1.2);opacity: 1}
            50%{-webkit-transform:scale(1,1.4);opacity: 0}
            50.01%{-webkit-transform:scale(1,1);opacity: 0;}
            100%{-webkit-transform:scale(1,1.2);opacity: 1}
        }
    @-webkit-keyframes fade{
      0%{opacity:1}
      100%{opacity:0}
    }
    @-webkit-keyframes boatMove {
      0%{
      -webkit-transform:translate(0px,0px);
      } 
      100%{
      -webkit-transform:translate(606px,0px);
      } 
    }
    @-webkit-keyframes fla1{
      0%{-webkit-transform:translate(0px,0px) scale(0.3,0.3);opacity: 0}  
      8%{-webkit-transform:translate(-230px,-75px) rotate(30deg) scale(0.5,0.5);opacity: 1;} 
      12%{-webkit-transform:translate(-272px,-105px)  scale(0.7,0.7);} 
      16%{-webkit-transform:translate(-202px,-205px) scale(1,1);} 
      19%{-webkit-transform:translate(-175px,-262px) rotate(-20deg);} 
      28%{-webkit-transform:translate(-130px,-347px);opacity: 0}
      100%{-webkit-transform:translate(-163px,-500px);} 
    }

    @-webkit-keyframes fla2{
      0%{-webkit-transform:translate(0px,0px) scale(0.3,0.3);opacity: 0}  

      8%{-webkit-transform:translate(-230px,-75px) scale(0.5,0.5);opacity: 1;}
      12%{-webkit-transform:translate(-260px,-40px) rotate(0deg) scale(0.7,0.7);} 
      16%{-webkit-transform:translate(-140px,-105px) scale(1,1);} 
      21%{-webkit-transform:translate(-120px,-195px) scale(1,1);;} 
      29%{-webkit-transform:translate(3px,-347px) rotate(45deg); opacity: 0}
      100%{-webkit-transform:translate(-163px,-500px);} 
    }

    @-webkit-keyframes fla3{
       0%{-webkit-transform:translate(0px,0px) scale(0.3,0.3);opacity: 0}  
      8%{-webkit-transform:translate(-230px,-75px) scale(0.5,0.5);opacity: 1;}
      12%{-webkit-transform:translate(-200px,-84px) scale(0.7,0.7) rotate(0deg);} 
      16%{-webkit-transform:translate(-217px,-195px) scale(1,1);} 
      21%{-webkit-transform:translate(-217px,-243px) scale(1,1);} 
      29%{-webkit-transform:translate(-185px,-347px) rotate(-45deg);opacity: 0}
      100%{-webkit-transform:translate(-163px,-500px);} 
    }
    #page1
    {
        position: absolute;
        left: 0px;
    }
    #page2,#pagetitle
    {
        position: absolute;
    }
    #box1 > img,#box2 > img,#boxtitle > img
    {
        position: absolute;
    }
    @-webkit-keyframes qiqiu
    {
        from  {-webkit-transform: rotate(0deg);}
        to    {-webkit-transform: rotate(10deg);}
    }
    @-webkit-keyframes qiqiu1
    {
        from  {-webkit-transform: rotate(0deg);}
        to    {-webkit-transform: rotate(-10deg);}
    }
    @-webkit-keyframes showup
    {
        0% {-webkit-transform: translate(0px,900px);-webkit-timing-function: ease-out;}
        32% {-webkit-transform: translate(0px,120px);-webkit-timing-function: linear}
        68% {-webkit-transform: translate(0px,-120px);-webkit-timing-function: linear}
        100%{-webkit-transform: translate(0px,-700px);-webkit-timing-function: ease-in}
    }
    @-webkit-keyframes huangdong
    {
        from {-webkit-transform: translate(-20px,0px);}
        to   {-webkit-transform: translate(20px,0px);}
    }
    @-webkit-keyframes title_out
    {
      from {-webkit-transform: translate(0px,0px);}
      to   {-webkit-transform: translate(0px,-700px);}
    }
</style>

<div id='container'>
<div id="content"><!-- 天空 -->
        <img id="bg" src="<?=$p?>images/2000.jpg">
        
        <div id="cloud"><img src="<?=$p?>images/2000.png"></div>
        <div id="cloudTwo"><img src="<?=$p?>images/2000.png"></div>

        <div style="position:absolute;width:500px;top:401px;height:419px;-webkit-transform-origin:50% 0%;-webkit-animation:shuiwen 4s linear infinite;overflow:hidden;">
        <img src="<?=$p?>images/500.png" style="position:absolute;width:500px;top:0px;">
        </div>
        <div style="position:absolute;width:500px;height:419px;top:401px;-webkit-transform-origin:50% 0%;-webkit-animation:shuiwen1 4s linear infinite;overflow:hidden;">
        <img src="<?=$p?>images/500.png" style="position:absolute;width:500px;top:0px;">
        </div>
        <div id="botton"><img src="<?=$p?>images/200.png"></div>
        <div class="fla" id="blue1" style="-webkit-animation: fla1 30s linear 0s both infinite;"><img src="<?=$p?>images/300.png"></div>
        <div class="fla" id="blue2" style="-webkit-animation: fla1 30s linear 2.5s both infinite;"><img src="<?=$p?>images/300.png"></div>
        <div class="fla" id="orange"><img src="<?=$p?>images/300.png"></div>
        <div class="fla" id="pink" style="-webkit-animation: fla1 30s linear 12.5s both infinite;"><img src="<?=$p?>images/300.png"></div>
        <div class="fla" id="purple" style="-webkit-animation: fla1 30s linear 15s both infinite;"><img src="<?=$p?>images/300.png"></div>
        <div class="fla" id="white" style="-webkit-animation: fla1 30s linear 10s both infinite;"><img src="<?=$p?>images/300.png"></div>
        <div class="fla" id="yellow1" style="-webkit-animation: fla1 30s linear 5s both infinite;"><img src="<?=$p?>images/300.png"></div>
        <div class="fla" id="yellow2" style="-webkit-animation: fla1 30s linear 7.5s both infinite;"><img src="<?=$p?>images/300.png"></div>

        <div class="fla" id="blue11" style="-webkit-animation: fla2 30s linear 1s both infinite;"><img src="<?=$p?>images/300.png"></div>
        <div class="fla" id="blue21" style="-webkit-animation: fla2 30s linear 3.5s both infinite;"><img src="<?=$p?>images/300.png"></div>
        <div class="fla" id="orange1" style="-webkit-animation: fla2 30s linear 18.5s both infinite;"><img src="<?=$p?>images/300.png"></div>
        <div class="fla" id="pink1" style="-webkit-animation: fla2 30s linear 13.5s both infinite;"><img src="<?=$p?>images/300.png"></div>
        <div class="fla" id="purple1" style="-webkit-animation: fla2 30s linear 16s both infinite;"><img src="<?=$p?>images/300.png"></div>
        <div class="fla" id="white1" style="-webkit-animation: fla2 30s linear 11s both infinite;"><img src="<?=$p?>images/300.png"></div>
        <div class="fla" id="yellow11" style="-webkit-animation: fla2 30s linear 6s both infinite;"><img src="<?=$p?>images/300.png"></div>
        <div class="fla" id="yellow21" style="-webkit-animation: fla2 30s linear 8.5s both infinite;"><img src="<?=$p?>images/300.png"></div>

        <div class="fla" id="blue12" style="-webkit-animation: fla3 30s linear 2s both infinite;"><img src="<?=$p?>images/300.png"></div>
        <div class="fla" id="blue22" style="-webkit-animation: fla3 30s linear 4.5s both infinite;"><img src="<?=$p?>images/300.png"></div>
        <div class="fla" id="orange2" style="-webkit-animation: fla3 30s linear 19.5s both infinite;"><img src="<?=$p?>images/300.png"></div>
        <div class="fla" id="pink2" style="-webkit-
        animation: fla3 30s linear 14.5s both infinite;"><img src="<?=$p?>images/300.png"></div>
        <div class="fla" id="purple2" style="-webkit-animation: fla3 30s linear 17s both infinite;"><img src="<?=$p?>images/300.png"></div>
        <div class="fla" id="white2" style="-webkit-animation: fla3 30s linear 12s both infinite;"><img src="<?=$p?>images/300.png"></div>
        <div class="fla" id="yellow12" style="-webkit-animation: fla3 30s linear 7s both infinite;"><img src="<?=$p?>images/300.png"></div>
        <div class="fla" id="yellow22" style="-webkit-animation: fla3 30s linear 9.5s both infinite;"><img src="<?=$p?>images/300.png"></div>
        <div id="aixin"><img src="<?=$p?>images/t2000.jpg"></div>   
  </div>

    <div id='page1' style='display:none;top:-10px;'>
        <div id='box1' style='position:absolute;-webkit-animation: huangdong 2s ease-in-out infinite alternate;'>
            <img src='<?=$p?>images/bbs.png' style='top:30px;left:86px;-webkit-transform-origin: 63.64% 99.76%;-webkit-animation: qiqiu 2s linear infinite alternate'>
            <img src='<?=$p?>images/yb.png' style='top:61px;left: 112px;-webkit-transform-origin: 35.39% 100%;-webkit-animation: qiqiu1 1.5s linear infinite alternate'>
            <img src='<?=$p?>images/eb.png' style='top: 115px;left: 60px;-webkit-transform-origin: 76.37% 100%;-webkit-animation: qiqiu 2.5s linear infinite alternate'>

            <img src='<?=$p?>images/ebs.png' style='top:45px;left: 359px;-webkit-transform-origin: 39.77% 100%;-webkit-animation: qiqiu1 2s linear infinite alternate'>
            <img src='<?=$p?>images/rb.png' style='top: 69px;left:299px;-webkit-transform-origin: 81.25% 100%;-webkit-animation: qiqiu 1.5s linear infinite alternate'>
            <img src='<?=$p?>images/bb.png' style='top:92px;left:356px;-webkit-transform-origin: 40.32% 100%;-webkit-animation: qiqiu1 2.5s linear infinite alternate'>

            <div id='imgdiv1' style='position:absolute;width: 380px;height:380px;top:261px;left:61px;overflow:hidden;'>
                <img id='img1' style='position:absolute;'>
            </div>

            <img id='left1' style='top:248px;left: 28px;-webkit-transform-origin: 50% 0%;width:46px;height:300px;' src='<?=$p?>images/left.png'>
            <img id='right1' style='top:248px;left: 426px;-webkit-transform-origin: 50% 0%;width:46px;height:300px;' src='<?=$p?>images/left.png'>
            <img id='up1' style='width:495px;height:62px;top: 220px;' src='<?=$p?>images/up.png'>
            <img id='down1' style='width:495px;height:62px;top: 500px;' src='<?=$p?>images/down.png'>
        </div>

    </div>
    <div id='page2' style='top:-70px;display:none'>
        <div id='box2' style='position:absolute;-webkit-animation: huangdong 2s ease-in-out infinite alternate;'>
            <img src='<?=$p?>images/bbs.png' style='top:30px;left:86px;-webkit-transform-origin: 63.64% 99.76%;-webkit-animation: qiqiu 2s linear infinite alternate'>
            <img src='<?=$p?>images/yb.png' style='top:61px;left: 112px;-webkit-transform-origin: 35.39% 100%;-webkit-animation: qiqiu1 1.5s linear infinite alternate'>
            <img src='<?=$p?>images/eb.png' style='top: 115px;left: 60px;-webkit-transform-origin: 76.37% 100%;-webkit-animation: qiqiu 2.5s linear infinite alternate'>

            <img src='<?=$p?>images/ebs.png' style='top:45px;left: 359px;-webkit-transform-origin: 39.77% 100%;-webkit-animation: qiqiu1 2s linear infinite alternate'>
            <img src='<?=$p?>images/rb.png' style='top: 69px;left:299px;-webkit-transform-origin: 81.25% 100%;-webkit-animation: qiqiu 1.5s linear infinite alternate'>
            <img src='<?=$p?>images/bb.png' style='top:92px;left:356px;-webkit-transform-origin: 40.32% 100%;-webkit-animation: qiqiu1 2.5s linear infinite alternate'>

            <div id='imgdiv2' style='position:absolute;width: 250px;height:500px;top:261px;left:133px;overflow:hidden;'>
                <img id='img2' style='position:absolute;'>
            </div>

            <img id='left2' style='top:248px;left: 98px;width:46px;height:488px;' src='<?=$p?>images/left.png'>
            <img id='right2' style='top:248px;left: 371px;width:46px;height:488px;' src='<?=$p?>images/left.png'>
            <img id='up2' style='width:351px;height:62px;top: 220px;left: 82px;' src='<?=$p?>images/up.png'>
            <img id='down2' style='width:351px;height:62px;top: 684px;left:82px;' src='<?=$p?>images/down.png'>
        </div>
    </div>

    <div id='pagetitle' style='top:-10px;display:none'>
        <div id='boxtitle' style='position:absolute;-webkit-animation: huangdong 2s ease-in-out infinite alternate;'>
            <img src='<?=$p?>images/bbs.png' style='top:30px;left:86px;-webkit-transform-origin: 63.64% 99.76%;-webkit-animation: qiqiu 2s linear infinite alternate'>
            <img src='<?=$p?>images/yb.png' style='top:61px;left: 112px;-webkit-transform-origin: 35.39% 100%;-webkit-animation: qiqiu1 1.5s linear infinite alternate'>
            <img src='<?=$p?>images/eb.png' style='top: 115px;left: 60px;-webkit-transform-origin: 76.37% 100%;-webkit-animation: qiqiu 2.5s linear infinite alternate'>

            <img src='<?=$p?>images/ebs.png' style='top:45px;left: 359px;-webkit-transform-origin: 39.77% 100%;-webkit-animation: qiqiu1 2s linear infinite alternate'>
            <img src='<?=$p?>images/rb.png' style='top: 69px;left:299px;-webkit-transform-origin: 81.25% 100%;-webkit-animation: qiqiu 1.5s linear infinite alternate'>
            <img src='<?=$p?>images/bb.png' style='top:92px;left:356px;-webkit-transform-origin: 40.32% 100%;-webkit-animation: qiqiu1 2.5s linear infinite alternate'>

            <div style='position:absolute;width: 380px;height:155px;top:261px;left:61px;overflow:hidden;padding:10px;background:url(<?=$p?>images/diban.png);'>
                <div id='titleword' style='position:absolute;width:360px;color:#ffffff;font-size:40px;text-shadow: 1px 1px 2px #44443F;text-align:center;display:table'><div id='titleword1' style='width:500px;height:140px;display:table-cell;vertical-align:middle;line-height:140%;font-size:35px;'></div></div>
            </div>

            <img style='top:248px;left: 28px;-webkit-transform-origin: 50% 0%;width:46px;height:200px;' src='<?=$p?>images/left.png'>
            <img style='top:248px;left: 426px;-webkit-transform-origin: 50% 0%;width:46px;height:200px;' src='<?=$p?>images/left.png'>
            <img style='width:495px;height:62px;top: 220px;' src='<?=$p?>images/up.png'>
            <img style='width:495px;height:62px;top: 400px;' src='<?=$p?>images/down.png'>
        </div>
    </div>
</div>

<script>
function setword()
{
    id('pagetitle').style.display = 'block';
    var titlediv = id('titleword1');
    titlediv.innerHTML = e_desc;
}

var image_size_width=[];
var image_size_height=[];

var image_url_index=0;
var have_num = 0;
var error_num = 0;
var canshow = true;
var reshow = false;
var timeout1;
var timeout2;
var timeout3;
var timeout4;
var timeout5;
var begin_titletime;

function id(name)
{
    return document.getElementById(name);
}


function loadimages()
{
    id('pagetitle').style.display = 'none';
    showtitle();
    reshow = false;
    image_size_width=[];
    image_size_height=[];
    Onload_imgs_url=[];

    image_url_index=0;
    have_num = 0;
    error_num = 0;

    clearTimeout(timeout1);
    clearTimeout(timeout2);
    clearTimeout(timeout3);
    clearTimeout(timeout4);
    clearTimeout(timeout5);
    id('page1').style.display = 'none';
    id('page2').style.display = 'none';
    id('pagetitle').style.webkitAnimation = '';
    canshow = true;

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
function showtitle()
{
    begin_titletime = new Date();
    begin_titletime = begin_titletime.getTime();
    setword();
    console.log(begin_titletime);
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
        var showtitletime = new Date().getTime();
        if(showtitletime-begin_titletime > 3000)
        {
          id('pagetitle').style.webkitAnimation = 'title_out 1.5s 0.5s ease-in both';

            beginshow();
        }
        else
        {
          var distime = showtitletime-begin_titletime;
          setTimeout(function()
          {
              id('pagetitle').style.webkitAnimation = 'title_out 1.5s 0.5s ease-in both';

                beginshow();
          },3000-distime)
        }
    }
}
function image_onload(event)
{
    if(reshow == true)
        return;

    var img=event.target;
    var index = img.index;

    if(index<10)
        have_num++;
    Onload_imgs_url[index]=img.src;
    image_size_width[index]=img.width;
    image_size_height[index]=img.height;
    if((have_num + error_num >= 10 ||slider_images_url.length == (have_num+error_num)) && canshow == true)
    {

       canshow = false;
       reshow = false;
       if(have_num == 0)
        return;
      console.log(Onload_imgs_url[index]);
      console.log(have_num + '-' + error_num);

        var showtitletime = new Date().getTime();
        if(showtitletime-begin_titletime > 3000)
        {
          id('pagetitle').style.webkitAnimation = 'title_out 1.5s 0.5s ease-in both';

            beginshow();
        }
        else
        {
          var distime = showtitletime-begin_titletime;
          setTimeout(function()
          {
              id('pagetitle').style.webkitAnimation = 'title_out 1.5s 0.5s ease-in both';

                beginshow();
          },3000-distime)
        }
    }
}
function beginshow () {
    if(reshow == true)
      return;
   id('page1').style.display = 'none';
   id('page1').style.webkitAnimation = '';
   if(image_url_index == Onload_imgs_url.length)
        image_url_index = 0;
    setImage(1);
    image_url_index++;
   timeout1 = setTimeout(function()
   {
       id('page1').style.display = 'block';
       id('page1').style.webkitAnimation = 'showup 10s linear both';
   },100)


   timeout4 = setTimeout(nextshow,6000);
}
function nextshow()
{
      if(reshow == true)
        return;
   if(image_url_index == Onload_imgs_url.length)
        image_url_index = 0;
    setImage(2);
    image_url_index++;
    id('page2').style.display = 'none';
   id('page2').style.webkitAnimation = '';
   timeout2 = setTimeout(function()
   {
       id('page2').style.display = 'block';
       id('page2').style.webkitAnimation = 'showup 10s linear both';
   },100)
   timeout3 = setTimeout(beginshow,6000);
}

function setImage(pageindex)
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
    var page = id('page'+pageindex);
    var up = id('up'+pageindex);
    var down = id('down'+pageindex);
    var left = id('left'+pageindex);
    var right = id('right'+pageindex);
    var imgdiv = id('imgdiv'+pageindex);
    var img = id('img'+pageindex);
    img.src = Onload_imgs_url[image_url_index];
    console.log(img.src);

    if(img_bili>=1)
    {
        page.style.top = '-10px';
        up.style.left = '0px';
        up.style.top = '220px';
        up.style.width = '495px';
        up.style.height = '62px';

        left.style.left = '28px';
        left.style.top = '248px';
        left.style.width = '46px';
        left.style.height = 380/img_bili+20+'px';

        right.style.left = '426px';
        right.style.top = '248px';
        right.style.width = '46px';
        right.style.height = left.style.height;

        down.style.left = '0px';
        down.style.top = 380/img_bili+220+'px';
        down.style.width = '495px';
        down.style.height = '62px';

        imgdiv.style.left = '61px';
        imgdiv.style.top = '261px';
        imgdiv.style.width = '380px';
        imgdiv.style.height = '380px';
        img.style.width = '380px';
    }
    else
    {
        page.style.top = '-70px';
        up.style.left = '82px';
        up.style.top = '220px';
        up.style.width = '351px';
        up.style.height = '62px';

        left.style.left = '98px';
        left.style.top = '248px';
        left.style.width = '46px';
        left.style.height = 250/img_bili + 20 + 'px';

        right.style.left = '370px';
        right.style.top = '248px';
        right.style.width = '46px';
        right.style.height = left.style.height;

        down.style.left = '82px';
        down.style.top = 220 + 250/img_bili + 'px';
        down.style.width = '351px';
        down.style.height = '62px';

        imgdiv.style.left = '133px';
        imgdiv.style.top = '261px';
        imgdiv.style.width = '250px';
        imgdiv.style.height = '500px';
        if(img_bili < 0.5)
        {
            left.style.height = '520px';
            right.style.height = '520px';
            down.style.top = '720px';
        }
        img.style.width = '250px';
    }
}
call_me(loadimages);
function reload_scene()
{
    reshow = true;
    loadimages();
}

</script>

