<?
$p=$_WEITE['web_pic_url']."wucaipaopao/";
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
        margin: 0px;
        padding: 0px;
    }

    @-webkit-keyframes img_div_ani_0
    {
        0%{background-color:rgba(255,0,0,0.8);}
        14.14%{background-color:rgba(255,128,0,0.8)} 
        28.28%{background-color:rgba(255,255,0,0.8)} 
        42.41%{background-color:rgba(0,255,0,0.8)} 
        56.56%{background-color:rgba(0,255,255,0.8)} 
        70.7%{background-color:rgba(0,0,255,0.8)} 
        84.84%{background-color:rgba(128,0,255,0.8)} 
        100%{background-color:rgba(255,0,0,0.8)}
    }
    
/*    #img_div_0
    {
        position: absolute;
        -webkit-border-radius: 230px;
        width: 460px;
        height: 460px;
        background-color: white;

        -webkit-animation: img_div_ani_0 10s linear infinite;
    }*/

    .div_box
    {
        position: absolute;
        -webkit-border-radius: 230px;
        width: 460px;
        height: 460px;
        z-index: 1;
        background-color: white;
        overflow: hidden;
        /*border: 5px solid #ffffff;*/
        /*bor*/
        /*-webkit-transform: scale3d(.1, .1, .1) translate3d(-1000px,-2000px, 0);*/
        

    }

    #div_box_0
    {
        top: 120px;
        left: 20px;
        /*-webkit-animation: aa_zoom_0 5s linear infinite;*/
    }

    #div_box_1
    {
        top: 120px;
        left: 20px;
        /*-webkit-animation: aa_zoom_1 5s linear infinite;*/
    }

    #content_2
    {
        top: 100px;
        left: 20px;
    }
    @-webkit-keyframes div_box_ani_0
    {
        0%   {-webkit-transform: translate(-200px,0px) scale(0.15,0.15);}
        20%  {-webkit-transform: translate(-230px,-250px) scale(0.15,0.15);}
        40%  {-webkit-transform: translate(-60px,-500px) scale(1,1)}
        60%  {-webkit-transform: translate(110px,-500px)}
        80%  {-webkit-transform: translate(-80px,-700px);}
        100%  {-webkit-transform: translate(80px,-900px);}
    }

    @-webkit-keyframes aa_in_zoom_left
    {
        0% {
            opacity: 0;
            -webkit-transform: scale3d(.1, .1, .1) translate3d(-1000px, 0, 0);
            transform: scale3d(.1, .1, .1) translate3d(-1000px, 0, 0);
            -webkit-animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
            animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
        }

        60% {
            opacity: 1;
            -webkit-transform: scale3d(.475, .475, .475) translate3d(10px, 0, 0);
            transform: scale3d(.475, .475, .475) translate3d(10px, 0, 0);
            -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
            animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
        }
    }

    @-webkit-keyframes aa_zoom_0
    {
        0% {
            -webkit-transform: scale(.1,.1) translate(-1000px, 0);
            opacity: 1;
            /*-webkit-animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);*/
        }
        15% {
            -webkit-transform: scale(.1,.1) translate(10px, 0);
            /*-webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);*/
        }
        22.5% {
            -webkit-transform:scale(.9,.9) translate(0px,0px);
        }
        35% {
            -webkit-transform:scale(1,1) translate(0px,0px);
        }
/*        55% {
            -webkit-transform:scale3d(1,1,1) translate(0px,0px);
        }*/
        44% {
            -webkit-transform: scale(.1, .1) translate(42px, 0);
         }
        50% {
            -webkit-transform: scale(.1,.1) translate(-2000px, 0);
            opacity: 1;
            /*-webkit-transform-origin: left center;*/
          }
        51% 
        {
            opacity: 0;
        }
        100% 
        {
            opacity: 0;
        }
    }

    @-webkit-keyframes aa_zoom_1
    {
        0% {
            -webkit-transform: scale(.1, .1) translate(1000px, 0);
            -webkit-animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
            opacity: 1

        }
        17% {
            -webkit-transform: scale(.1, .1) translate(-10px, 0);
            /*-webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);*/
        }
        22.5% {
            -webkit-transform:scale(.9,.9) translate(0px,0px);
        }
        35% {
            -webkit-transform:scale(1,1) translate(0px,0px);
        }
/*        55% {
            -webkit-transform:scale(1,1,1) translate(0px,0px);
        }*/
        44% {
            -webkit-transform: scale(.1,.1) translate(-42px, 0);
         }
        50% {
            -webkit-transform: scale(.1,.1) translate(2000px, 0);
            opacity: 1;
            /*-webkit-transform-origin: left center;*/
          }
        51% {opacity: 0}
        100%{opacity: 0}
    }


    @-webkit-keyframes con_0
    {
        0%{-webkit-transform:translate(0px,0px);-webkit-animation-timing-function: ease-in-out;opacity: 1}
        30%{-webkit-transform:translate(0px,-530px);-webkit-animation-timing-function: ease-in-out;opacity: 1}
/*      55%{-webkit-transform:translate(0px,-400px);-webkit-animation-timing-function: ease-in-out;}*/
        50%{-webkit-transform:translate(0px,-900px);-webkit-animation-timing-function: ease-in-out;opacity: 1}
        51%{opacity: 0}
        100%{opacity: 0}
    }

    @-webkit-keyframes aa_zoom_up
    {
        0% {
            opacity: 0;
            -webkit-transform: translate(0px,450px) scale(.1, .1);
            /*-webkit-animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);*/
        }

        20% {
            opacity: 1;
            -webkit-transform: translate(0px,450px) scale(0.1,0.1);
            /*-webkit-animation-timing-function: ease-in-out;*/
        }

        25% {
            -webkit-transform: translate(0px,0px) scale(.4,.4);
        }

        27% {
            -webkit-transform: translate(0px,-30px) scale(1,1) rotate(5deg);
        }
        42% {
            -webkit-transform: translate(0px,-70px) scale(1,1);
        }

        47% {
            opacity: 1;
            -webkit-transform: translate(0px,-200px) scale(0.1,0.1);
            /*-webkit-animation-timing-function: ease-in-out;*/
        }

        50% {
            opacity: 0;
            -webkit-transform: translate(0px,-500px) scale(0.1,0.1);
/*            -webkit-transform-origin: center bottom;*/
            /*-webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);*/
        }
        100%
        {
            opacity: 0;
        }
    }

    @-webkit-keyframes aa_zoom_up
    {
        0% {
            opacity: 0;
            -webkit-transform: translate(0px,450px) scale(.1, .1);
            /*-webkit-animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);*/
        }

        20% {
            opacity: 1;
            -webkit-transform: translate(0px,450px) scale(0.1,0.1);
            /*-webkit-animation-timing-function: ease-in-out;*/
        }

        25% {
            -webkit-transform: translate(0px,0px) scale(.4,.4);
        }

        27% {
            -webkit-transform: translate(0px,-30px) scale(1,1) rotate(10deg);
        }
        42% {
            -webkit-transform: translate(0px,-70px) scale(1,1);
        }

        47% {
            opacity: 1;
            -webkit-transform: translate(0px,-200px) scale(0.1,0.1);
            /*-webkit-animation-timing-function: ease-in-out;*/
        }

        50% {
            opacity: 0;
            -webkit-transform: translate(0px,-500px) scale(0.1,0.1);
/*            -webkit-transform-origin: center bottom;*/
            /*-webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);*/
        }
        100%
        {
            opacity: 0;
        }
    }
    @-webkit-keyframes aa_zoom_up1
    {
        0% {
            opacity: 0;
            -webkit-transform: translate(0px,450px) scale(.1, .1);
            /*-webkit-animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);*/
        }

        20% {
            opacity: 1;
            -webkit-transform: translate(0px,450px) scale(0.1,0.1);
            /*-webkit-animation-timing-function: ease-in-out;*/
        }

        25% {
            -webkit-transform: translate(0px,0px) scale(.4,.4);
        }

        27% {
            -webkit-transform: translate(0px,-30px) scale(1,1) rotate(-10deg);
        }
        42% {
            -webkit-transform: translate(0px,-70px) scale(1,1);
        }

        47% {
            opacity: 1;
            -webkit-transform: translate(0px,-200px) scale(0.1,0.1);
            /*-webkit-animation-timing-function: ease-in-out;*/
        }

        50% {
            opacity: 0;
            -webkit-transform: translate(0px,-500px) scale(0.1,0.1);
/*            -webkit-transform-origin: center bottom;*/
            /*-webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);*/
        }
        100%
        {
            opacity: 0;
        }
    }
    #content_0, #content_1, #div_box_2
    {
        position: absolute;
        display: none;
        z-index: 5;
/*        -webkit-border-radius: 230px;*/
    }

    #content_0
    {
        top: 500px;
        /*-webkit-animation: con_0 10s linear infinite;*/
    }

    #content_1
    {
        top: 500px;
        /*-webkit-animation:con_0 10s linear infinite;*/
    }

    #div_box_2
    {
        /*-webkit-animation:aa_zoom_up 10s linear infinite;*/
        top: 100px;
        left: 20px;
    }

    @-webkit-keyframes test
    {
        from{-webkit-transform: translate(0px,0px);}
        to{-webkit-transform:translate(0px,-900px);}
    }

    @-webkit-keyframes scale1
    {
        from{-webkit-transform: scale(0.1,0.1);}
        to{-webkit-transform:scale(3,3);}
    }

    @-webkit-keyframes paopao1
    {
        0%   {-webkit-transform: translate(0px,0px) scale(.15,.15);-webkit-timing-function:linear;}
        25%  {-webkit-transform: translate(122px,-314px) scale(.3,.3);-webkit-timing-function:linear;}
        50%  {-webkit-transform: translate(0px,-586px) scale(.9,.9);-webkit-timing-function:linear}
        57%  {-webkit-transform: translate(0px,-586px) scale(1,1);-webkit-timing-function:linear}
        81.5%{-webkit-transform: translate(142px,-800px) scale(.2,.2);-webkit-timing-function:linear}
        100% {-webkit-transform: translate(34px,-964px) scale(.2,.2);-webkit-timing-function:linear}
    }
    @-webkit-keyframes paopao2
    {
        0%  {-webkit-transform: translate(-100px,0px) scale(.2,.2);opacity: 0;-webkit-animation-timing-function:ease;}
        15% {-webkit-transform: translate(30px,-500px) scale(.9,.9);-webkit-animation-timing-function:linear;opacity: 1}

        20% {-webkit-transform: translate(31px,-512px) scale(.9,.92);opacity: 1;-webkit-animation-timing-function:linear;}
        25% {-webkit-transform: translate(32px,-524px) scale(.92,.9);opacity: 1;-webkit-animation-timing-function:linear;}
        30% {-webkit-transform: translate(31px,-537px) scale(.9,.92);opacity: 1;-webkit-animation-timing-function:linear;}


        
        /*30% {-webkit-transform: translate(0px,-600px) scale(.9,.9);}*/
        35% {-webkit-transform: translate(30px,-550px) scale(.9,.9);-webkit-animation-timing-function:ease;opacity: 1}
        50% {-webkit-transform: translate(-100px,-1000px) scale(.2,.2);opacity: 0;}
        51% {-webkit-transform: translate(0px,-1000px) scale(.8,.8);opacity: 0;}
        100% {-webkit-transform: translate(0px,-1000px) scale(.8,.8);opacity: 0;}
    }


    @-webkit-keyframes paopao2
    {
        0%  {-webkit-transform: translate(-100px,0px) scale(.2,.2);opacity: 0;-webkit-animation-timing-function:ease;}
        15% {-webkit-transform: translate(30px,-580px) scale(.9,.9);-webkit-animation-timing-function:linear;opacity: 1}

        20% {-webkit-transform: translate(31px,-605px) scale(.9,.92);opacity: 1;-webkit-animation-timing-function:linear;}
        25% {-webkit-transform: translate(32px,-630px) scale(.92,.9);opacity: 1;-webkit-animation-timing-function:linear;}
        30% {-webkit-transform: translate(31px,-655px) scale(.9,.92);opacity: 1;-webkit-animation-timing-function:linear;}


        
        /*30% {-webkit-transform: translate(0px,-600px) scale(.9,.9);}*/
        35% {-webkit-transform: translate(30px,-680px) scale(.9,.9);-webkit-animation-timing-function:ease;opacity: 1}
        45% {-webkit-transform: translate(-100px,-1000px) scale(.2,.2);opacity: 0;}
        51% {-webkit-transform: translate(0px,-1000px) scale(.8,.8);opacity: 0;}
        100% {-webkit-transform: translate(0px,-1000px) scale(.8,.8);opacity: 0;}
    }

    @-webkit-keyframes paopao3
    {
        0%  {-webkit-transform: translate(0px,0px) scale(.2,.2);opacity: 0;-webkit-animation-timing-function:ease;}
        15% {-webkit-transform: translate(-180px,-580px) scale(.8,.8);-webkit-animation-timing-function:linear;opacity: 1}

        20% {-webkit-transform: translate(-181px,-605px) scale(.8,.82);opacity: 1;-webkit-animation-timing-function:linear;}
        25% {-webkit-transform: translate(-182px,-630px) scale(.82,.8);opacity: 1;-webkit-animation-timing-function:linear;}
        30% {-webkit-transform: translate(-181px,-655px) scale(.8,.82);opacity: 1;-webkit-animation-timing-function:linear;}


        
        /*30% {-webkit-transform: translate(0px,-600px) scale(.8,.8);}*/
        35% {-webkit-transform: translate(-180px,-680px) scale(.8,.8);-webkit-animation-timing-function:ease;opacity: 1}
        45% {-webkit-transform: translate(0px,-1000px) scale(.2,.2);opacity: 0;}
        51% {-webkit-transform: translate(0px,-1000px) scale(.8,.8);opacity: 0;}
        100% {-webkit-transform: translate(0px,-1000px) scale(.8,.8);opacity: 0;}
    }

    .img_box
    {
        position: absolute;
        width: 460px;
        height: 460px;
        border-radius: 230px;

        z-index: 10;
        
        overflow: hidden;
    }
    #img_0,#img_1,#img_2
    {
        top: 150px;
        left: 20px;
        /*-webkit-animation: aa_zoom_up 10s linear infinite;*/
        opacity: 0
    }

    @-webkit-keyframes in_fadeup
    {
        from  {opacity: 0;-webkit-transform: translate(0px,30px);}
        to    {opacity: 1;-webkit-transform: translate(0px,0px);}
    }
    @-webkit-keyframes out_fadeup
    {
        from  {opacity: 1;-webkit-transform: translate(0px,0px);}
        to    {opacity: 0;-webkit-transform: translate(0px,-30px);}
    }
</style>

<div style='position:absolute;width:500px;height:800px;overflow:hidden;'>
    <div id='img_0' class='img_box'>
    </div>

    <div id='img_1' class='img_box'>
    </div>

    <div id='img_2' class='img_box'>
    </div>

    <div id='pagetitle' style='position:absolute;width:410px;height:200px;top:238px;left:45px;font-size:40px;color:#fff;overflow:hidden;color:fff;z-index:10'>
        <div style='position:absolute;width:410px;height:200px;top:0px;left:0px;overflow:hidden;'>
            <div style='position:absolute;width:410px;height:200px;display:table;overflow:hidden;'>
                <div id='titlecontent' style='width:410px;height:200px;vertical-align:middle;display:table-cell;text-align:center;font-size:40px;line-height:70px;'></div>
            </div>
        </div>
    </div>

</div>


</div>


</div>
<script>
var num=10;
var radius=10;
var myheight=800;
var mywidth=500;
var con;
var style_bool=true;

function bubble_init () 
{
    
    con=document.createElement('div');
    con.style.height=myheight+'px';
    con.style.width=mywidth+'px';
    con.style.position='absolute';
    con.style.overflow='hidden';
    con.style.backgroundImage='-webkit-radial-gradient(center,rgb(50,50,101) 0%, rgb(4,4,8) 100%)';
    document.body.style.margin='0px';
    document.body.appendChild(con);
    createbubble();

}
function create_style () 
{

    for(var i=0;i<5;i++)
    {
        var csstext='@-webkit-keyframes changecolor'+i+' {0%{background-color:rgba(255,0,0,0.8);-webkit-transform:translate(0%,0%)} 14.14%{background-color:rgba(255,128,0,0.8)} 28.28%{background-color:rgba(255,255,0,0.8)} 42.41%{background-color:rgba(0,255,0,0.8)} 56.56%{background-color:rgba(0,255,255,0.8)} 70.7%{background-color:rgba(0,0,255,0.8)} 84.84%{background-color:rgba(128,0,255,0.8)} 100%{background-color:rgba(255,0,0,0.8);-webkit-transform:translate(0px,-'+(myheight+200)+'px)} 25%{-webkit-transform:translate('+rand(60,120)+'px,-'+(myheight+200)/4+'px)} 75%{-webkit-transform:translate(-'+rand(60,120)+'px,-'+(myheight+200)*3/4+'px)}}';

        var mystyle=document.createElement('style');
        document.head.appendChild(mystyle);
        var sheet = mystyle.sheet;
        sheet.insertRule(csstext, 0);
    }

    for(var i=5;i<10;i++)
    {
        var csstext='@-webkit-keyframes changecolor'+i+' {0%{background-color:rgba(255,0,0,0.8);-webkit-transform:translate(0%,0%)} 14.14%{background-color:rgba(255,128,0,0.8);} 28.28%{background-color:rgba(255,255,0,0.8);} 42.41%{background-color:rgba(0,255,0,0.8);} 56.56%{background-color:rgba(0,255,255,0.8);} 70.7%{background-color:rgba(0,0,255,0.8);} 84.84%{background-color:rgba(128,0,255,0.8);} 100%{background-color:rgba(255,0,0,0.8);-webkit-transform:translate(0px,-'+(myheight+200)+'px);} 25%{-webkit-transform:translate(-'+rand(60,120)+'px,-'+(myheight+200)/4+'px);} 75%{-webkit-transform:translate('+rand(60,120)+'px,-'+(myheight+200)*3/4+'px);}}'
        var style = document.createElement('style');
        document.head.appendChild(style);
        var sheet = style.sheet;
        sheet.insertRule(csstext, 0);
    }

    for(var i=10;i<15;i++)
    {
        var my1=rand(18,30);
        var my2=rand(12,24);
        var csstext='@-webkit-keyframes changecolor'+i+' {0%{box-shadow:50px 50px '+my1+'px '+my2+'px rgba(255,0,0,0.8);-webkit-transform:translate(0%,0%)} 14.14%{box-shadow:50px 50px '+my1+'px '+my2+'px rgba(255,128,0,0.8);} 28.28%{box-shadow:50px 50px '+my1+'px '+my2+'px rgba(255,255,0,0.8);} 42.41%{box-shadow:50px 50px '+my1+'px '+my2+'px rgba(0,255,0,0.8);} 56.56%{box-shadow:50px 50px '+my1+'px '+my2+'px rgba(0,255,255,0.8);} 70.7%{box-shadow:50px 50px '+my1+'px '+my2+'px rgba(0,0,255,0.8);} 84.84%{box-shadow:50px 50px '+my1+'px '+my2+'px rgba(128,0,255,0.8);} 100%{box-shadow:50px 50px '+my1+'px '+my2+'px rgba(255,0,0,0.8);-webkit-transform:translate(0px,-'+(myheight+200)+'px);} 25%{-webkit-transform:translate(-'+rand(60,120)+'px,-'+(myheight+200)/4+'px);} 75%{-webkit-transform:translate('+rand(60,120)+'px,-'+(myheight+200)*3/4+'px);}}'
        var mystyle=document.createElement('style');
        document.head.appendChild(mystyle);
        var sheet = mystyle.sheet;
        sheet.insertRule(csstext, 0);
    }

}


function createbubble() 
{
    create_style();
    for(var j=0;j<num;j++)
    {
        for(var i=0;i<2;i++)
        {
            var mydiv=document.createElement('div');
            mydiv.style.position='absolute';
            mydiv.style.top=rand(myheight,myheight+200)+'px';
            mydiv.style.left=rand(0,mywidth)+'px';
            mydiv.style.width='2px';
            mydiv.style.height='2px';
            mydiv.style.webkitBorderRadius='1px';
            mydiv.style.webkitAnimation='changecolor'+rand(10,15)+' '+rand(8,12)+'s '+j+'s linear infinite';

            con.appendChild(mydiv);
        }
        for(var i=0;i<2;i++)
        {
            var rand_radius=rand(48,60)
            var mydiv=document.createElement('div');
            mydiv.style.position='absolute';
            mydiv.style.top=rand(myheight,myheight+200)+'px';
            mydiv.style.left=rand(0,mywidth)+'px';

            mydiv.style.width=rand_radius+'px';
            mydiv.style.height=rand_radius+'px';
            mydiv.style.webkitBorderRadius=rand_radius/2+'px';

            mydiv.style.webkitAnimation='changecolor'+rand(0,9)+' '+rand(8,12)+'s '+j+'s linear infinite';

            con.appendChild(mydiv);
        }   
    }
}
    
function rand(min,max)
{
    return min+Math.floor(Math.random()*(max-min+1));
}

function id (name)
{
    return document.getElementById(name);
}


var imgs_width=[];
var imgs_height=[];


var img_url_index=0;
var have_num = 0;
var error_num = 0;
 
var Onload_img = new Array();
var canshow = true;

var timeout1;
var timeout2;
var timeout3;
var timeout4;
var timeout5;


var reshow = false;
var delaytime = 4000;

function reset_all()
{
    id('img_0').style.webkitAnimation='';
    id('img_1').style.webkitAnimation='';
    id('img_2').style.webkitAnimation='';
    id('titlecontent').innerHTML = '';
    id('pagetitle').style.webkitAnimation = '';
    clearTimeout(timeout1);
    clearTimeout(timeout2);
    clearTimeout(timeout3);
    clearTimeout(timeout4);
    clearTimeout(timeout5);

    imgs_width=[];
    imgs_height=[];

    begin_titletime = new Date();
    begin_titletime = begin_titletime.getTime();
    showtitle();

    img_url_index=0;
    have_num = 0;
    error_num = 0;


    Onload_img = [];
    canshow = true;

    reshow = false;
    for(var i=0; i<slider_images_url.length; i++)
    {
        var img=new Image();
        img.index=i;
        img.src=slider_images_url[i];
        Onload_img[i] = 'loading';
        img.onload=bubble_onload;
        img.onerror = img_onerror;

    }
}

function bubble_loadimage ()
{
    bubble_init();

    img_url_index=0;
    have_num = 0;
    error_num = 0;

    begin_titletime = new Date();
    begin_titletime = begin_titletime.getTime();
    showtitle();

    for(var i=0; i<slider_images_url.length; i++)
    {
        var img=new Image();
        img.index=i;
        img.src=slider_images_url[i];
        Onload_img[i] = 'loading';
        img.onload=bubble_onload;
        img.onerror = img_onerror;

    }
}
function img_onerror(event)
{
    if(reshow == true)
        return;
    var img = event.target;
    var index = img.index;

    if(index<10)
        error_num++;

    if((have_num + error_num == slider_images_url.length || have_num+error_num >=10)&&canshow==true)
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
    id('pagetitle').style.webkitAnimation = 'in_fadeup 1s linear both';
}
function distitle()
{
    id('pagetitle').style.webkitAnimation = 'out_fadeup 1s linear both';
    begin_show_0();
}
function bubble_onload (event)
{
    if(reshow == true)
        return;

    var img=event.target;
    var index = img.index;

    if(index<18)
    {
        have_num ++;
    }
    Onload_img[index]=img.src;
    imgs_width[index]=img.width;
    imgs_height[index]=img.height; 

    if((have_num + error_num == slider_images_url.length || have_num+error_num >=10)&&canshow==true)
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

function begin_show_0 ()
{
    if(reshow == true)
        return;

    if(img_url_index==Onload_img.length)
        img_url_index=0;

    cut_image(0);
    img_url_index++;

    if(style_bool)
    {
        style_bool=false;
        id('img_0').style.webkitAnimation='aa_zoom_up 12s linear forwards';
    }
    else
    {
        style_bool=true;
        id('img_0').style.webkitAnimation='aa_zoom_up1 12s linear forwards';
    }

    timeout1 = setTimeout(begin_show_1,3000)
}

function begin_show_1 ()
{
    if(reshow == true)
        return;
    if(img_url_index==Onload_img.length)
        img_url_index=0;

    cut_image(1);
    img_url_index++;

    if(style_bool)
    {
        style_bool=false;
        id('img_1').style.webkitAnimation='aa_zoom_up 12s linear forwards';
    }
    else
    {
        style_bool=true;
        id('img_1').style.webkitAnimation='aa_zoom_up1 12s linear forwards';
    }

    timeout2 = setTimeout(begin_show_2,3000);
}

function begin_show_2 ()
{
    if(reshow == true)
        return;
    if(img_url_index==Onload_img.length)
        img_url_index=0;

    cut_image(2);
    img_url_index++;


    if(style_bool)
    {
        style_bool=false;
        id('img_2').style.webkitAnimation='aa_zoom_up 12s linear forwards';
    }
    else
    {
        style_bool=true;
        id('img_2').style.webkitAnimation='aa_zoom_up1 12s linear forwards';
    }
    id('img_0').style.webkitAnimation=''

    timeout3 = setTimeout(begin_show_3,3000);
}

function begin_show_3 ()
{
    if(reshow == true)
        return;
    if(img_url_index==Onload_img.length)
        img_url_index=0;

    cut_image(0);
    img_url_index++;

    if(style_bool)
    {
        style_bool=false;
        id('img_0').style.webkitAnimation='aa_zoom_up 12s linear forwards';
    }
    else
    {
        style_bool=true;
        id('img_0').style.webkitAnimation='aa_zoom_up1 12s linear forwards';
    }
    id('img_1').style.webkitAnimation='';

    timeout4 = setTimeout(begin_show_4,3000)
}

function begin_show_4 ()
{
    if(reshow == true)
        return;
    if(img_url_index==Onload_img.length)
        img_url_index=0;

    cut_image(1);
    img_url_index++;

    if(style_bool)
    {
        style_bool=false;
        id('img_1').style.webkitAnimation='aa_zoom_up 12s linear forwards';
    }
    else
    {
        style_bool=true;
        id('img_1').style.webkitAnimation='aa_zoom_up1 12s linear forwards';
    }
    id('img_2').style.webkitAnimation='';

    timeout5 = setTimeout(begin_show_2,3000);
}

function cut_image (num)
{
    if(reshow == true)
        return;
    while(Onload_img[img_url_index] == 'not find' || Onload_img[img_url_index] == 'loading')
    {
        console.log(Onload_img[img_url_index]);
        img_url_index++;
        if(img_url_index == Onload_img.length)
            img_url_index = 0;
    }
    var img_width=imgs_width[img_url_index];
    var img_height=imgs_height[img_url_index];
    var img_bili=img_width/img_height;

    var myimg=id('img_'+num)

    myimg.style.backgroundImage = "url(" + Onload_img[img_url_index] + ")";
    console.log(myimg.style.backgroundImage);

    if(img_bili>=1)
    {

        myimg.style.backgroundSize = (460*img_bili) + "px " + 460 + "px";
        myimg.style.backgroundPosition = '-'+((460*img_bili-460)/2) + "px " + 0 + "px";

    }
    else
    {

        myimg.style.backgroundSize = 460 + "px " + (460/img_bili) + "px";
        myimg.style.backgroundPosition = 0 + "px " + '-'+((460/img_bili-460)/2) + "px";

    }

}
call_me(bubble_loadimage);

function reload_scene()
{
    reshow = true;
    reset_all();
}

</script>


