<?
$p=$_WEITE['web_pic_url']."heimao/";
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
	    background-image: url(<?=$p?>images/bg2.jpg); 
	}

    #cat{
          position: absolute;
          width: 167px;
          height: 277px;
          left: 36px;
          top: 437px;
          z-index: 9;
          -webkit-transform-origin: 50% 100%;
          -webkit-animation:cat 1s linear infinite alternate;
    }

    @-webkit-keyframes cat{
        from  {-webkit-transform: rotate(0deg);}
        to    {-webkit-transform: rotate(5deg);}
    }


    #mouse{
        position: absolute;
        width:118px;
        height:178px; 
        left:382px;
        top:223px;
        z-index: 8;
        -webkit-transform-origin: 100% 100%;
        -webkit-animation:mouse 1s linear infinite alternate;
    }

    @-webkit-keyframes mouse{
        from  {-webkit-transform: rotate(0deg);}
        to    {-webkit-transform: rotate(5deg);}
    }

    #catmouth{
        position: absolute;
        width:309px;
        height: 87px;
        left:-30px;
        top:507px;

        z-index: 10;
        -webkit-transform-origin: 53% 50%;
        -webkit-animation:catmouth 1s linear infinite alternate;
    }

        @-webkit-keyframes catmouth{
        from  {-webkit-transform: rotate(0deg);opacity:1;}
        to    {-webkit-transform: rotate(10deg);opacity:0.5;}
    }

    #duck{
        position: absolute;
        width:104px;
        height:121px; 
        left:373px;
        top:483px;
        z-index:8;
        -webkit-transform-origin: 50% 0%;
        -webkit-animation:duck 1s linear infinite alternate;
    }

        @-webkit-keyframes duck{
        from  {-webkit-transform: rotate(0deg);}
        to    {-webkit-transform: rotate(-10deg);}
    }

    #robot{
		  position: absolute;
		  width: 68px;
		  height: 73px;
		  left: 15px;
		  top: 327px;
          -webkit-transform-origin: 50% 0%;
          -webkit-animation:robot 2s linear infinite alternate;


    }

    @-webkit-keyframes robot{
    	from  {-webkit-transform: rotate(0deg);}
        to    {-webkit-transform: rotate(10deg);}
    }

    #fly{
        position: absolute;
        width:56px;
        height: 43px;
        left:227px;
        top:323px;
        z-index: 8;
        opacity: 0;
        -webkit-transform-origin: 50% 50%;
        -webkit-animation:fly 8s 2s linear infinite;

    }

    @-webkit-keyframes fly{        
        0% {-webkit-transform: scale(0,0) translate(0px,0px);opacity:1}
        30%   {-webkit-transform: scale(2,2) translate(-200px,-100px);opacity: 1}
        100%   {-webkit-transform: scale(2,2) translate(-200px,-100px);opacity: 1}
    }

    #bklight{
        position: absolute;
        width:500px;
        height:434px; 
        left:0;
        top:176px;
        z-index: 9;
        opacity: 0.7;
        -webkit-animation:light 3s linear infinite ;
    }

    @-webkit-keyframes light
    {
        0%     {opacity: 0}
        5%     {opacity: 1}
        10%    {opacity: 0}
        15%    {opacity: 1}
        30%     {opacity: 0}
        100%   {opacity: 0}
    }

    @-webkit-keyframes light1
    {
        0%     {opacity: 0.5}
        5%     {opacity: 1}
        10%    {opacity: 0.5}
        15%    {opacity: 1}
        100%   {opacity: 1}
    }

    #eye{
        position: absolute;
        width:71px;
        height:21px;
        left:220px;
        top:53px;
        -webkit-transform-origin: 50% 50%;
        -webkit-animation:eye 2s linear infinite alternate;

    }

    @-webkit-keyframes eye{
        from   {opacity: 0}
        to     {opacity: 1}
    }

    #catgun{
        position: absolute;
        width:66px;
        height:123px;
        left:-14px;
        top:335px;
        z-index: 10;
        -webkit-transform-origin: 100% 100%;
        -webkit-animation:gun 1s linear infinite alternate;
    }
    @-webkit-keyframes gun{

        from  {-webkit-transform: translate(0px,0px) scale(1,1);}
        to    {-webkit-transform: translate(22px,-5px) scale(1.7,1.7);}
    }




    #bottom{
        position: absolute;
        width:500px;
        height:140px; 
        left:0;
        top:610px;
        z-index: 1;
    }

/*    #kuang{
        position: absolute;
        width:437px;
        height: 542px;
        left: 43px;
        top:104px;
        z-index: 7;

    }*/
    
    #downbox
    {
        position: absolute;
        top: 226px;
        width: 500px;
        height: 407px;
        overflow: hidden;
        margin: 0px;
        padding: 0px;
    }
    #down1
    {
        position: absolute;
        left: 47px;
        z-index: 7;
        /*-webkit-animation: changedown1 2s linear forwards;*/
    }

    #up
    {
         position: absolute;
         top: 82px;
         left: 36px;

    }
    
    
     @-webkit-keyframes changedown
    {
        from   {-webkit-transform:translate(0px,0px);}
        to     {-webkit-transform:translate(0px,-132px);}
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


     #front_box,#back_box
    {
        -webkit-transform-origin: 50% 0%;
        position: absolute;
        overflow: hidden;
        /*-webkit-animation: fadeout 3s 0.5s linear forwards;*/
    }

    #huajuan
    {
        position: absolute;
        width: 500px;
        height: 750px;
        /*-webkit-animation: huajuanmove 2s linear infinite alternate;*/
    }

    @-webkit-keyframes huajuanmove
    {
        from  {-webkit-transform: translate(0px,0px);}
        to    {-webkit-transform: translate(0px,16px);}
    }

    #img_div
    {
        position: absolute;
        top:226px;
        left: 121px;
        width: 277px;
        height: 377px;
        /*height: 288px;*/
        background-color: #ffffff;
        overflow: hidden;
        /*-webkit-animation: changebox 2s linear forwards;*/
    }

/*---中心弹跳---*/
    @-webkit-keyframes aa_in_bounce_center
    {
        0%{
            opacity:0;
            -webkit-transform:scale(.3)
        }
        50%{
            opacity:1;
            -webkit-transform:scale(1.05)
        }
        70%{
            -webkit-transform:scale(.9)
        }
        100%{
            -webkit-transform:scale(1)
        }
    }
    @-webkit-keyframes aa_out_bounce_center
    {
        0%{
            -webkit-transform:scale(1)
        }
        25%{
            -webkit-transform:scale(.95)
        }
        50%{
            opacity:1;
            -webkit-transform:scale(1.1)
        }
        100%{
            opacity:0;
            -webkit-transform:scale(.3)
        }
    }

    /*---往下跳---*/
    @-webkit-keyframes aa_in_bounce_down
    {
        0%{
            opacity:0;
            -webkit-transform:translateY(-2000px)
        }
        60%{
            opacity:1;
            -webkit-transform:translateY(30px)
        }
        80%{
            -webkit-transform:translateY(-10px)
        }
        100%{
            -webkit-transform:translateY(0)
        }
    }

    @-webkit-keyframes aa_out_bounce_down
    {
        0%{
            -webkit-transform:translateY(0)
        }
        20%{
            opacity:1;
            -webkit-transform:translateY(-20px)
        }
        100%{
            opacity:0;
            -webkit-transform:translateY(2000px)
        }
    }
/*---往上跳---*/
    @-webkit-keyframes aa_in_bounce_up
    {
        0%{
            opacity:0;
            -webkit-transform:translateY(2000px)
        }
        60%{
            opacity:1;
            -webkit-transform:translateY(-30px)
        }
        80%{
            -webkit-transform:translateY(10px)
        }
        100%{
            -webkit-transform:translateY(0)
        }
    }
    @-webkit-keyframes aa_out_bounce_up
    {
       0%{
        -webkit-transform:translateY(0)
        }
        20%{
            opacity:1;
            -webkit-transform:translateY(20px)
        }
        100%{
            opacity:0;
            -webkit-transform:translateY(-2000px)
        }
    }  






</style>

<div id = 'container'>
        
    <div id='huajuan' style='opacity:0;'>

        <div id='img_div'>
            <div id='back_box'>
                <img id='my_imgback' style='position:absolute;' src='<?=$p?>images/8.jpg'>
            </div>
            <div id='front_box'>
                <img id='my_imgfront' style='position:absolute;' src='<?=$p?>images/9.jpg'>
            </div>
        </div>        



        <div id = 'downbox'>
            
              <img id = 'down1' src='<?=$p?>images/down.png'>
            
        </div>
        
        <img id ='up' src='<?=$p?>images/up.png'>        

    </div>
        <!-- <img id='kuang' src='<?=$p?>images/01.png'> -->
    <img id ='cat' src='<?=$p?>images/02.png'>
    <img id ='mouse' src='<?=$p?>images/03.png'>
    <img id ='catmouth' src='<?=$p?>images/04.png'>
    <img id ='duck' src='<?=$p?>images/05.png'>
    <img id ='robot' src='<?=$p?>images/06.png'>
    <img id ='fly' src='<?=$p?>images/07.png'>
    <img id ='bklight' src='<?=$p?>images/light2.png'>
    <img id = 'eye' src='<?=$p?>images/09.png'>
    <img id = 'catgun' src='<?=$p?>images/10.png'>



</div>

<script type="text/javascript">
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

var temp_flag = 0;
function id (name)
{
    return document.getElementById(name);
}

function load_images ()
{
    change_imgdiv=id('img_div');
    change_down=id('down1');

    first_img=id('my_imgfront');
    second_img=id('my_imgback');

    first_box=id('front_box');
    second_box=id('back_box');

    for(var i=0;i<slider_images_url.length;i++)
    {
        var img=new Image();
        img.index=i;
        img.src=slider_images_url[i];
        img.onload=img_onload;
    }
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
   
        id('huajuan').style.opacity=1;
        
        beginshow();

       
    };

}

function createStyle ()
{    
    document.getElementById('huajuan').style.webkitAnimation = 'aa_in_bounce_center 1s .2s ease both';
     setTimeout(function(){ 
        document.getElementById('huajuan').style.webkitAnimation = 'huajuanmove 2s linear infinite alternate';
        document.getElementById('up').style.webkitAnimation = 'light1 3s linear infinite';
        document.getElementById('downbox').style.webkitAnimation = 'light1 3s linear infinite';
            setTimeout(function(){
            document.getElementById('up').style.webkitAnimation = '';
            document.getElementById('huajuan').style.webkitAnimation = 'aa_out_bounce_center 1s .2s ease both';  

            },4000);
    },1000);
  

    for(var i=0;i<slider_images_url.length;i++)
    {
        if (images_width[i]/images_height[i]<(277/377))
        {
            images_position[i]=377;
        }
        else
        {
            images_position[i]=277*images_height[i]/images_width[i];
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

            //创建移动外面div动画
            var csstext='@-webkit-keyframes change_box'+i+'to'+j+' {from{height:'+images_position[i]+'px} to{height:'+images_position[j]+'px}}';
            var style=document.createElement('style');
            document.head.appendChild(style);
            // console.log(csstext);
            var sheet=style.sheet;
            sheet.insertRule(csstext,0);


            //创建下面画轴移动动画
            var translate_y1=377-images_position[i];
            var translate_y2=377-images_position[j];
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
    change_down.style.webkitTransform='translate(0px,-'+(377-images_position[0])+'px)';
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

    setTimeout(function()
    {   
        setTimeout(function(){
           document.getElementById('huajuan').style.webkitAnimation = 'aa_in_bounce_down 1s .2s ease both'; 
               setTimeout(function(){
               document.getElementById('huajuan').style.webkitAnimation = 'huajuanmove 2s linear infinite alternate';
               document.getElementById('up').style.webkitAnimation = 'light1 3s linear infinite';
               document.getElementById('downbox').style.webkitAnimation = 'light1 3s linear infinite';
                       setTimeout(function(){
                        document.getElementById('up').style.webkitAnimation = '';
                        document.getElementById('downbox').style.webkitAnimation = '';
                       document.getElementById('huajuan').style.webkitAnimation = 'aa_out_bounce_down 1s .2s ease both'; 
                       },4000);
               },1000);
        },4000);

        
        
        setTimeout(function(){

            change_imgdiv.style.webkitAnimation='change_box'+load_num+'to'+next_num+' 0.2s linear forwards';
            change_down.style.webkitAnimation='change_img'+load_num+'to'+next_num+' 0.2s linear forwards';

            // console.log(change_imgdiv.style.webkitAnimation);
            


            first_box.style.webkitAnimation='change_box_out'+load_num+'to'+next_num+' 0.2s linear forwards';
            second_box.style.webkitAnimation='change_box_sec_in'+load_num+'to'+next_num+' 0.2s linear forwards';
            // console.log(second_box.style.webkitAnimation)
            
            load_num++;
        },3800);
        
        
        setTimeout(nextshow,4000);
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
    cleanfanguang();


    setTimeout(function()
    {   
        setTimeout(function(){
           document.getElementById('huajuan').style.webkitAnimation = 'aa_in_bounce_up 1s .2s ease both'; 
           setTimeout(function(){
           document.getElementById('huajuan').style.webkitAnimation = 'huajuanmove 2s linear infinite alternate';
            document.getElementById('up').style.webkitAnimation = 'light1 3s linear infinite';
            document.getElementById('downbox').style.webkitAnimation = 'light1 3s linear infinite';
               setTimeout(function(){
                document.getElementById('up').style.webkitAnimation = '';
               document.getElementById('downbox').style.webkitAnimation = '';
               document.getElementById('huajuan').style.webkitAnimation = 'aa_out_bounce_up 1s .2s ease both'; 
               },4000);
           },1000);
        },4000);
        
        setTimeout(function(){
        change_imgdiv.style.webkitAnimation='change_box'+load_num+'to'+next_num+' 0.2s linear forwards';
        change_down.style.webkitAnimation='change_img'+load_num+'to'+next_num+' 0.2s linear forwards';

        // console.log(change_imgdiv.style.webkitAnimation);
        

        first_box.style.webkitAnimation='change_box_in'+load_num+'to'+next_num+' 0.2s linear forwards';
        console.log(first_box.style.webkitAnimation);
        second_box.style.webkitAnimation='change_box_sec_out'+load_num+'to'+next_num+' 0.2s linear forwards';
        
        load_num++; 
        },3800);
        
        
        temp_flag = 1 ;
        setTimeout(nextnextshow,4000);
       
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

    

    setTimeout(function()
    {   
        setTimeout(function(){
           document.getElementById('huajuan').style.webkitAnimation = 'aa_in_bounce_center 1s .2s ease both'; 
           setTimeout(function(){
           document.getElementById('huajuan').style.webkitAnimation = 'huajuanmove 2s linear infinite alternate';
            document.getElementById('up').style.webkitAnimation = 'light1 3s linear infinite';
            document.getElementById('downbox').style.webkitAnimation = 'light1 3s linear infinite';
               setTimeout(function(){
                document.getElementById('up').style.webkitAnimation = '';
               document.getElementById('downbox').style.webkitAnimation = '';
               document.getElementById('huajuan').style.webkitAnimation = 'aa_out_bounce_center 1s .2s ease both'; 
               },4000);
           },1000);
        },4000);
     

        setTimeout(function(){
        change_imgdiv.style.webkitAnimation='change_box'+load_num+'to'+next_num+' 0.2s linear forwards';
        change_down.style.webkitAnimation='change_img'+load_num+'to'+next_num+' 0.2s linear forwards';

        // console.log(change_imgdiv.style.webkitAnimation);


        first_box.style.webkitAnimation='change_box_out'+load_num+'to'+next_num+' 0.2s linear forwards';
        second_box.style.webkitAnimation='change_box_sec_in'+load_num+'to'+next_num+' 0.2s linear forwards';
        
        load_num++;
        },3800);
        
        setTimeout(nextshow,4000);

    },3000)
}


function showfanguang ()
{
    // id('fanguang').style.webkitAnimation='fanguang 2s linear forwards';
}

function cleanfanguang ()
{
    // id('fanguang').style.webkitAnimation='';
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

    if (img_bili<(277/377)) 
    {
        myimg.width=277;
        myimg.height=277/img_bili;
        myimg.style.left='0px';
        myimg.style.top='-'+((myimg.height-377)/2)+'px';
        
        mybox.style.width='277px';
        mybox.style.height='377px';
    }
    else
    {
        myimg.width=277;
        myimg.height=277/img_bili;
        myimg.style.top='0px';
        myimg.style.left='0px';

        mybox.style.width='277px';
        mybox.style.height=277/img_bili+'px';
    }
}

call_me(load_images);
</script>