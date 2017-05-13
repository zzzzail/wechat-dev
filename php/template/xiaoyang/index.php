<?
$p=$_WEITE['web_pic_url']."xiaoyang/";
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
        height: 100%;
        position: absolute;
        overflow: hidden;
    }
    * {padding:0px;margin:0px;}
    p {width:300px;}
    #bb {position: absolute;width:500px;left:0px;top:675px;height:140px;z-index: 1;}
    #res {position: absolute;top:820px;left:240px;width:50px;height: 30px;z-index: 2;}

    #yun1 {position: absolute;left:30px;top:120px;width:100px;-webkit-animation:yun 3s linear infinite;z-index:1;}
    #yun2 {position: absolute;left:160px;top:60px;width:130px;-webkit-animation:yun 4s linear infinite;z-index:1;}
    #yun3 {position: absolute;left:300px;top:30px;width:200px;-webkit-animation:yun 5s linear infinite;z-index:1;}
 
    .bg {position: absolute;z-index:1;}
    #gunzi {left:80px;top:690px;width:10px;}
    #fengche {left:75px;top:680px;width:25px;-webkit-animation: rotates 2s linear infinite;}
    #yang1 {left:30px;top:750px;width:30px;-webkit-animation: run 3s linear infinite;}
    #yang2 {left:130px;top:760px;width:30px;-webkit-animation: run 5s linear infinite;}
    #yang3 {left:420px;top:760px;width:30px;-webkit-animation: run 8s linear infinite;}
    #yang4 {left:-40px;top:670px;width:30px;-webkit-animation:jump1 4s linear infinite;}
    #yang5 {left:-40px;top:670px;width:30px;-webkit-animation:jump2 5s linear infinite;}

    .yun {position: absolute;opacity: 0;}
    #yun4 {left:-250px;top:300px;}
    #yun5 {left:-100px;top:270px;}
    #yun6 {left:-100px;top:370px;}
    #yun7 {left:-30px;top:320px;}
    #yun8 {left:-170px;top:240px;}
    #yun9 {left:-160px;top:300px;}
    #yun10 {left:-210px;top:370px;}


    #text {position:absolute;left:-200px;top:310px;font:40px  Arial bold;opacity: 0;}

    .show {position: absolute;left:600px;top:170px;opacity: 1;overflow: hidden;}
    .demo  {position: relative;left:0px;top:0px;z-index:1;overflow: hidden;}
    img.con1 {position: absolute;left:0px;top:0px;}
    img.con2 {position: absolute;left:0px;top:0px;}

    .con1 {position: absolute;width: 440px;height: 304px;background-color: transparent;left: 20px;top: 85px;
        border-radius: 25px;overflow: hidden;}
    .con2 {position: absolute;width: 340px;height: 460px;background-color:transparent;left: 23px;top: 140px;
        border-radius: 20px;overflow: hidden;}
    

    @-webkit-keyframes yun {
        0% {transform:translate(0px);}
        40% {transform:translate(20px);}
        100% {transform:translate(0px);}
    }

    @-webkit-keyframes rotates {
        from {transform: rotate(0deg);}
        to {transform: rotate(360deg);}
    }

     @-webkit-keyframes run {
        0% {transform:translate(0px) rotateY(180deg);}
        49% {transform:translate(30px) rotateY(180deg);}
        50% {transform:translate(30px) rotateY(0deg);}
        99% {transform:translate(0px) rotateY(0deg);}
        100% {transform:translate(0px) rotateY(180deg);}
    }

    @-webkit-keyframes piao {
        0% {opacity: 0;}
        20% {transform:translate(300px,40px);opacity: 1;}
        30% {transform:translate(340px,60px);opacity: 1;}
        40% {transform:translate(290px,40px);opacity: 1;}
        50% {transform:translate(320px,30px);opacity: 1;}
        60% {transform:translate(250px,40px);opacity: 1;}
        95% {transform:translate(300px,60px);opacity: 1;}
        100% {transform:translate(500px,200px);opacity: 0;}
    }

    @-webkit-keyframes jump1 {
        0% {transform:rotateY(180deg)}
        20% {transform:translate(100px,10px) rotateY(180deg)}
        30% {transform:translate(150px,20px) rotateY(180deg)}
        50% {transform:translate(300px,90px) rotateY(180deg)}
        55% {transform:translate(330px,95px) rotateY(180deg)}
        65% {transform:translate(380px,60px) rotateY(180deg)}
        75% {transform:translate(420px,80px) rotateY(180deg)}
        100% {transform:translate(530px,50px) rotateY(180deg)} 
    }

    @-webkit-keyframes jump2 {
        0% {transform:rotateY(180deg)}
        20% {transform:translate(100px,10px) rotateY(180deg)}
        30% {transform:translate(150px,20px) rotateY(180deg)}
        50% {transform:translate(300px,90px) rotateY(180deg)}
        55% {transform:translate(330px,90px) rotateY(180deg)}
        75% {transform:translate(420px,80px) rotateY(180deg)}
        100% {transform:translate(530px,50px) rotateY(180deg)} 
    }


    @-webkit-keyframes dis1 {
        0% {transform: rotate(90deg);opacity: 1;}
        20% {transform: translate(-610px,60px) rotate(0deg) ;opacity: 1;}
        40% {transform: translate(-600px,40px);opacity: 1;}
        50% {transform: translate(-580px,90px);opacity: 1;}
        85% {transform: translate(-600px,50px);opacity: 1;}
        100% {transform:translate(-1100px,200px) rotate(-90deg);opacity: 1;}
    }

    @-webkit-keyframes dis2 {
         0% {opacity: 1;}
        10% {transform: translate(-510px,-120px) ;opacity: 1;}
        20% {transform: translate(-610px,-100px) ;opacity: 1;}
        40% {transform: translate(-580px,-100px);opacity: 1;}
        50% {transform: translate(-600px,-120px);opacity: 1;}
        60% {transform: translate(-580px,-90px);opacity: 1;}
        80% {transform: translate(-590px,-130px);opacity: 1;}
        90% {transform: translate(-640px,-110px);opacity: 1;}
        100% {transform: translate(-1200px,-160px);;opacity: 1;}
    }

    @-webkit-keyframes dis3 {
        0% {left:0px;top:820px;opacity: 1;}
        20% {transform: translateY(-580px);opacity: 1;}
        40% {transform: translateY(-540px);opacity: 1;}
        50% {transform: translateY(-580px);opacity: 1;}
        80% {transform: translateY(-510px);opacity: 1;}
        100% {left:10px;top:820px;opacity: 1;}
    }

    @-webkit-keyframes dis4 {
        0% {transform: rotate(90deg);opacity: 1;}
        20% {transform: translate(-610px,-120px) rotate(0deg) ;opacity: 1;}
        40% {transform: translate(-600px,-100px);opacity: 1;}
        50% {transform: translate(-580px,-150px);opacity: 1;}
        85% {transform: translate(-600px,-110px);opacity: 1;}
        100% {transform:translate(-1100px,200px) rotate(-90deg);opacity: 1;}
    }

    @-webkit-keyframes dis5 {
        0% {left:0px;top:820px;opacity: 1;}
        20% {transform: translateY(-770px);opacity: 1;}
        40% {transform: translateY(-730px);opacity: 1;}
        50% {transform: translateY(-770px);opacity: 1;}
        80% {transform: translateY(-700px);opacity: 1;}
        100% {left:10px;top:820px;opacity: 1;}
    }
</style>

<div id='container'>
    <div id="bg">
        <img src="<?=$p?>images/bg.jpg" />
        <img id="bb" src="<?=$p?>images/bb.png" />

        <img id="yun1" src="<?=$p?>images/yuna.png" />
        <img id="yun2" src="<?=$p?>images/yuna.png" />
        <img id="yun3" src="<?=$p?>images/yuna.png" />

        <img id="gunzi" class="bg" src="<?=$p?>images/gunzi.png" />
        <img id="fengche" class="bg" src="<?=$p?>images/fengche.png" />

        <img id="yang1" class="bg" src="<?=$p?>images/yang.png" />
        <img id="yang2" class="bg" src="<?=$p?>images/yang.png" />
        <img id="yang3" class="bg" src="<?=$p?>images/yang.png" />
        <img id="yang4" class="bg" src="<?=$p?>images/yang.png" />
        <img id="yang5" class="bg" src="<?=$p?>images/yang.png" />

        <img id="yun4" class="yun" src="<?=$p?>images/yun.png" />
        <img id="yun5" class="yun" src="<?=$p?>images/yun.png" />
        <img id="yun6" class="yun" src="<?=$p?>images/yun.png" />
        <img id="yun7" class="yun" src="<?=$p?>images/yun.png" />
        <img id="yun8" class="yun" src="<?=$p?>images/yun.png" />
        <img id="yun9" class="yun" src="<?=$p?>images/yun.png" />
        <img id="yun10" class="yun" src="<?=$p?>images/yun.png" />
    </div>

    <div id="text">
        <div id='pagetitle'>
            <div style='position:absolute;width:270px;height:184px;top:-30px;left:0px;overflow:hidden;'>
                <div style='position:absolute;width:270px;height:184px;display:table;overflow:hidden;'>
                    <div id='titlecontent' style='width:270px;height:184px;vertical-align:middle;display:table-cell;text-align:center;font-size:25px;line-height:45px;color:#555555;'></div>
                </div>
            </div>
        </div>
    </div>
    <input type="button" id="res" value="reset"/>



    <div id="show0" class="show">
        <img src="" id="bg0" class="demo"/>
         <div id="con0"></div>              
    </div>

    <div id="show1" class="show">
        <img src="" id="bg1" class="demo"/>
        <div id="con1"></div>                
    </div>

    <div id="show2" class="show">
        <img src="" id="bg2" class="demo"/>
        <div id="con2"></div>                
    </div>
</div>



<script>
rate=[];
image_size_width=[];
image_size_height=[];
image_index=0;
var clear1=0;
var clear2=0;
var clear3=0;
var clear4=0;
var clear5=0;
var clear6=0;
var clear7=0;



function id(name){
    return document.getElementById(name);
}
                        
function load_images(){
    showtitle();
    rate=[];
    image_size_width=[];
    image_size_height=[];
    image_index=0;
    if(tupian==null){
        for(i=0;i<slider_images_url.length;i++){
            var tupian=new Image();
            tupian.src=slider_images_url[i];
            tupian.id="img"+i;
            tupian.index=i;
            tupian.onload=onload_image;
        }
    }                
}

function onload_image(event){
    var img = event.target;
    var index=img.index;
    image_size_width[index]= img.width;
    image_size_height[index]= img.height;

    console.log(image_size_width[index]); 

    var w=image_size_width[index];
    var h=image_size_height[index];
    console.log(index);
    rate[index]=(w/h);
    console.log(rate[index]);


    if(rate[index]>1){
        if(rate[index]>(440/304)){
            h= 304;
            w= rate[index]*304;
            img.style.top = '0px';
            img.style.left = -((rate[index]*304-440)/2) + 'px';
        }else{
            w= 440;
            h= 440/rate[index];
            img.style.left = '0px';
            img.style.top = -((440/rate[index]-304)/2) + 'px';
        }
    }

    if(rate[index]<1){
        if(rate[index]>(340/460)){
            h= 460;
            w= rate[index]*460;
            img.style.top = '0px';
            img.style.left = -((rate[index]*460-340)/2) + 'px';
            console.log('left:'+img.style.left);
        }else{
            w= 340;
            h= 340/rate[index];
            img.style.left = '0px';
            img.style.top = -((340/rate[index]-460)/2) + 'px';
            console.log(img.style.left);
        }
    }

    img.width=w;
    img.height=h;
    //alert('width:'+img.width+',height:'+img.height);

    adddiv(index);

    if(rate[index]>1){
        id("bg"+index).src="<?=$p?>images/heng.png";
        id("con"+index).appendChild(img);
        id("con"+index).setAttribute("class","con1");                   
        id("img"+index).style.left="10px";
        id("img"+index).style.top="80px";   
    }
    if(rate[index]<1){
        id("bg"+index).src="<?=$p?>images/shu.png";
        id("con"+index).appendChild(img);
        id("con"+index).setAttribute("class","con2");                   
        id("img"+index).style.left="20px";
        id("img"+index).style.top="100px";
    }
}


function showtitle(){                  
    for (var i=4;i<=10;i++){
     id("yun"+i).style.webkitAnimation="piao 5s linear";
    }
    id("titlecontent").innerHTML=e_desc;
    id("text").style.webkitAnimation="piao 5s linear";
    clear1=setTimeout(function(){
        if(id("img0")){
            dis11();
        }},5000);        
}
            
function dis00(){
    for(var i=0;i<image_index;i++){
        id("show"+i).style.webkitAnimation="";
    }
    image_index=0;   
                       
}   

function dis11(){
    if(rate[image_index]>1){
        id("show"+image_index).style.webkitAnimation="dis1 6s linear";
    }else{
        id("show"+image_index).style.webkitAnimation="dis4 6s linear";
    }               
    
    image_index++;
    clear2=setTimeout(function(){
        if(id("img"+image_index)){                          
            dis22();                       
        }else{
            dis00();
            clear3=setTimeout(dis22,200);
        }
    },6000);        
}

function dis22(){                
    id("show"+image_index).style.webkitAnimation="dis2 6s linear";
    image_index++;
    clear4=setTimeout(function(){
        if(id("img"+image_index)){
            dis33();               
        }else{
            dis00();
            clear5=setTimeout(dis33,300);
        }
    },6000);       
}

function dis33(){               
    if(rate[image_index]>1){
        id("show"+image_index).style.webkitAnimation="dis3 6s linear";
    }else{
        id("show"+image_index).style.webkitAnimation="dis5 6s linear";
    }
    image_index++;
    clear6=setTimeout(function(){
        if(id("img"+image_index)){
            dis11();               
        }else{
            dis00();
            clear7=setTimeout(dis11,300);
        }
    },6000);  
}

function adddiv(i){
    if(i>2){
        var container=id("container");
        var newshow=document.createElement("div");
        container.appendChild(newshow);
        var newcon=document.createElement("div");               
        newshow.appendChild(newcon);
        var newbg=document.createElement("img");
        newshow.appendChild(newbg);
        newshow.setAttribute("id","show"+i);
        newshow.setAttribute("class","show");
        newcon.setAttribute("id","con"+i);
        newbg.setAttribute("id","bg"+i);
        newbg.setAttribute("class","demo");
        
    }
}


function reload_scene(){
        dis00();

        clearTimeout(clear1);
        clearTimeout(clear2);
        clearTimeout(clear3);
        clearTimeout(clear4);
        clearTimeout(clear5);
        clearTimeout(clear6);
        clearTimeout(clear7);

        for (var k=4;k<=10;k++){
            id("yun"+k).style.webkitAnimation="";
        }
        id("text").style.webkitAnimation="";

        setTimeout(load_images,100);
        
    }


call_me(load_images);

</script>


