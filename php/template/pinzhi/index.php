<?
$p=$_WEITE['web_pic_url']."pinzhi/";
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
#container > div,#container > img, #word > img
{
    position: absolute;
}
#word>img
{
    opacity: 0;
}
#word
{
    left: 340px;
    top: 26px;
}
.divv
{
    width: 400px;
    height: 600px;
    overflow: hidden;
    position: absolute;
}
#divv 
{
    left: 60px;
    top: 90px;
    opacity: 0;
}
.divv_cell
{
    width: 400px;
    height: 75px;   
/*    left: 62px;*/
    overflow: hidden;
    position: absolute;
}

.divv_img
{
    position: absolute;
    width: 400px;
    height: 75px;
    left: 0px;

}
.divv_cell2
{
    position: absolute;
    overflow: hidden;
    width: 200px;
    height: 300px;
}
.divh_cell2
{
    position: absolute;
    overflow: hidden;
    width: 240px;
    height: 175px;
}
/*.divv_img2
{
    position: absolute;
    width: 200px;
    height: 300px;
}*/
.divv_cell3
{
    position: absolute;
    width: 100px;
    height: 100px;
    overflow: hidden;
}
.divh_cell3
{
    position: absolute;
    width: 95px;
    height: 90px;
    overflow: hidden;
}

.divh
{
    width: 475px;
    height: 350px;
    overflow: hidden;
    left: 0px;
    top: 0px;
    position: absolute;
}
#divh
{
    left: 11px;
    top: 200px;
    opacity: 0;
}

.divh_cell
{
    width: 475px;
    height: 70px;
    position: absolute;
    overflow: hidden;
    left: 0px;
}
.divh_img
{
    width: 475px;
    height: 70px;
    position: absolute;
}

#maskh
{
    position: absolute;
    width: 492px;
    height: 367px;
    left: -4px;
    top: -2px;
}
#maskv
{
    position: absolute;
    width: 420px;
    height: 621px;
    left: -8px;
    top: -7px;
}
</style>
<style type="text/css">
@-webkit-keyframes fadein
{
    from   {opacity: 0}
    to     {opacity: 1}
}
@-webkit-keyframes fadeout
{
    from  {opacity: 1}
    to    {opacity: 0}
}
@-webkit-keyframes keepfadeout
{
    from  {opacity: 1}
    to    {opacity: 1}
}
@-webkit-keyframes xing
{
    0%  {-webkit-transform: scale(0.5) rotate(0deg);opacity: 0}
    40% {-webkit-transform: scale(1) rotate(90deg);opacity: 1}
    80% {-webkit-transform: scale(1) rotate(170deg);opacity: 0}
    100%{opacity: 0}
}
@-webkit-keyframes xing1
{
    0%  {opacity: 0;-webkit-transform: scale(0) rotate(0deg);}
    50% {opacity: 1;-webkit-transform: scale(1) rotate(180deg);}
    100%{opacity: 0;-webkit-transform: scale(0) rotate(360deg);}
}
@-webkit-keyframes xing2
{
    from  {-webkit-transform: scale(0) rotate(0deg);opacity: 0}
    to    {-webkit-transform: scale(1) rotate(-50deg);opacity: 1}
}
@-webkit-keyframes ani_1
{
    from  {-webkit-transform: translate(0px,-75px);}
    to    {-webkit-transform: translate(0px,0px);}
}
@-webkit-keyframes anih_1
{
    from  {-webkit-transform: translate(0px,-70px);}
    to    {-webkit-transform: translate(0px,0px);}
}
@-webkit-keyframes ani_2
{
    from  {-webkit-transform: translate(0px,75px);}
    to    {-webkit-transform: translate(0px,0px);}
}
@-webkit-keyframes anih_2
{
    from  {-webkit-transform: translate(0px,70px);}
    to    {-webkit-transform: translate(0px,0px);}
}
@-webkit-keyframes aniout_1
{
    from  {-webkit-transform: translate(0px,0px);}
    to    {-webkit-transform: translate(0px,-76px);}
}
@-webkit-keyframes aniouth_1
{
    from  {-webkit-transform: translate(0px,0px);}
    to    {-webkit-transform: translate(0px,-70px);}
}

@-webkit-keyframes line2_div
{
    from  {-webkit-transform: translate(0px,0px);}
    to    {-webkit-transform: translate(500px,0px);}
}
@-webkit-keyframes line2_img
{
    from  {-webkit-transform: translate(0px,0px);}
    to    {-webkit-transform: translate(-500px,0px);}
}

@-webkit-keyframes div2_0
{
    from  {-webkit-transform: translate(0px,0px);}
    to    {-webkit-transform: translate(-200px,-300px);}
}
@-webkit-keyframes div2_1
{
    from  {-webkit-transform: translate(0px,0px);}
    to    {-webkit-transform: translate(200px,-300px);}
}
@-webkit-keyframes div2_2
{
    from  {-webkit-transform: translate(0px,0px);}
    to    {-webkit-transform: translate(-200px,300px);}
}
@-webkit-keyframes div2_3
{
    from  {-webkit-transform: translate(0px,0px);}
    to    {-webkit-transform: translate(200px,300px);}
}
@-webkit-keyframes div2h_0
{
    from  {-webkit-transform: translate(0px,0px);}
    to    {-webkit-transform: translate(-240px,-175px);}
}
@-webkit-keyframes div2h_1
{
    from  {-webkit-transform: translate(0px,0px);}
    to    {-webkit-transform: translate(240px,-175px);}
}
@-webkit-keyframes div2h_2
{
    from  {-webkit-transform: translate(0px,0px);}
    to    {-webkit-transform: translate(-240px,175px);}
}
@-webkit-keyframes div2h_3
{
    from  {-webkit-transform: translate(0px,0px);}
    to    {-webkit-transform: translate(240px,175px);}
}
</style>

<div id='container'>
    <img src='<?=$p?>images/bg.jpg'>


    <div id='divv'>
        <div id='div4' class='divv'>
        </div>
        <div id='div3' class='divv'>
        </div>
        <div id='div2' class='divv'>
        </div>
        <div id='div1' class='divv'>
        </div>

        <img id='maskv' src='<?=$p?>images/kuang1.png'>
    </div>

    <div id='divh'>
        <div id='div4h' class='divh'>
        </div>
        <div id='div3h' class='divh'>
        </div>
        <div id='div2h' class='divh'>
        </div>
        <div id='div1h' class='divh'>
        </div>
        <img id='maskh' src='<?=$p?>images/kuang2.png'>
    </div>


    <img id='line1' style='top:669px;'>

<!--     <div style='width:150px;height:100px;border-radius:50%;overflow:hidden;-webkit-animation: line2_div 5s linear infinite;left:0px;top:671px;-webkit-mask:-webkit-linear-gradient(left, rgba(0,0,0,0),rgba(0,0,0,1), rgba(0,0,0,0));'>
        <img id='line1' src='<?=$p?>images/line1.png' style='position:absolute;-webkit-animation: line2_img 5s linear infinite'>
    </div -->
    <img src='<?=$p?>images/up.png'>
    <img src='<?=$p?>images/xing.png' style='left:126px;top:600px;-webkit-animation: xing 5s linear infinite'>
    <img src='<?=$p?>images/xing.png' style='left: 308px;top: 8px;width: 35px;-webkit-animation: xing1 3s linear infinite'>
    <img src='<?=$p?>images/xing.png' style='left: 290px;top: 39px;width: 40px;-webkit-animation: xing2 1.5s linear infinite alternate'>

    <div id='word'>
        <img id='word1' src='<?=$p?>images/wenzi2.png'>
        <img id='word2' src='<?=$p?>images/wenzi3.png' style='left:25px;top:0px;'>
        <img id='word3' src='<?=$p?>images/wenzi1.png'>
        <img id='word4' src='<?=$p?>images/wenzi4.png' style='left:25px;'>
        <img id='word5' src='<?=$p?>images/wenzi.png'>
        <img id='word6' src='<?=$p?>images/wenzi5.png' style='left:25px;'>
    </div>

    <div id='pagetitle' style="position:absolute;width: 306px;height: 75px;top: 353px;left: 101px;">
        <img src='<?=$p?>images/title.png' style='position:absolute;left:-21px;top:-75px'>
        <div style="position:absolute;width:410px;height:200px;width: 306px;height: 75px;display:table;overflow:hidden;">
            <div id="titlecontent" style="width:410px;height:200px;vertical-align:middle;display:table-cell;text-align:center;font-size: 28px;line-height: 25px;width: 306px;height: 75px;color: #1D1D1C;text-shadow:2px 0px 1px #818180">
            </div>
        </div>
    </div>

</div>



<script>
var img_biliv = (400/600);
var img_bilih = (475/350);

function show1()
{
    var container = id('div1');

    var img_bili = image_size_width[image_url_index]/image_size_height[image_url_index];
    if(img_bili>img_biliv)
    {
        var img_height = 600;
        var img_width = 600*img_bili;
        var img_left = -(img_width-400)/2;
        var img_top = 0;
    }
    else
    {
        var img_width = 400;
        var img_height = 400/img_bili;
        var img_left = 0;
        var img_top = -(img_height-600)/2;
    }

    for(var i = 0;i<8;i++)
    {
        var div = document.createElement('div');
        div.className = 'divv_cell';
        div.style.top = i*75+'px';

        var div_img = document.createElement('div');
        div_img.className = 'divv_img';
        div_img.id = 'img1_'+i;
        div_img.style.backgroundSize = img_width+'px '+img_height + 'px';
        div_img.style.backgroundPosition = img_left+'px '+(img_top-75*i)+'px';
        div_img.style.webkitAnimation = 'ani_1 1s linear both';

        div_img.style.backgroundImage = 'url('+Onload_imgs_url[image_url_index]+')';

        div.appendChild(div_img);

        container.appendChild(div);
    }

    container = id('div1h');
    for(var i=0;i<5;i++)
    {
        var div = document.createElement('div');
        div.className = 'divh_cell';
        div.style.top = i*70 + 'px';

        var div_img = document.createElement('div');
        div_img.className = 'divh_img';
        div_img.id = 'img1h_'+i;

        div.appendChild(div_img);

        container.appendChild(div);
    }


    image_url_index++;

}

function show1h()
{
    var container = id('div1h');

    var img_bili = image_size_width[image_url_index]/image_size_height[image_url_index];
    if(img_bili>img_bilih)
    {
        var img_height = 350;
        var img_width = 350*img_bili;
        var img_left = -(img_width-475)/2;
        var img_top = 0;
    }
    else
    {
        var img_width = 475;
        var img_height = 475/img_bili;
        var img_left = 0;
        var img_top = -(img_height-350)/2;
    }
    for(var i=0;i<5;i++)
    {
        var div = document.createElement('div');
        div.className = 'divh_cell';
        div.style.top = i*70 + 'px';

        var div_img = document.createElement('div');
        div_img.className = 'divh_img';
        div_img.id = 'img1h_'+i;

        div_img.style.backgroundSize = img_width+'px '+img_height + 'px';
        div_img.style.backgroundPosition = img_left+'px '+(img_top-70*i)+'px';
        div_img.style.webkitAnimation = 'anih_1 1s linear both';

        div_img.style.backgroundImage = 'url('+Onload_imgs_url[image_url_index]+')';

        div.appendChild(div_img);

        container.appendChild(div);
    }

    container = id('div1');
    for(var i = 0;i<8;i++)
    {
        var div = document.createElement('div');
        div.className = 'divv_cell';
        div.style.top = i*75+'px';

        var div_img = document.createElement('div');
        div_img.className = 'divv_img';
        div_img.id = 'img1_'+i;

        div.appendChild(div_img);

        container.appendChild(div);
    }

    image_url_index++;

}

function showpage2()
{
    setImageindex();

    if(before_type)
    {
        if(img_type)
        {
            show2();
        }
        else
        {
            show2_vtoh();
        }
    }
    else
    {
        if(img_type)
        {
            show2_htov();
        }
        else
        {
            show2h();
        }
    }

    before_type = img_type;
    image_url_index++;

    setTimeout(showpage3,4000)
}
function show2()
{
    for(var i = 0;i<8; i++)
    {
        var img = id('img1_'+i);
        img.style.webkitAnimation = 'aniout_1 1s linear both';
    }

    cut2();

}

function show2_vtoh()
{
    for(var i = 0;i<8; i++)
    {
        var img = id('img1_'+i);
        img.style.webkitAnimation = 'fadeout 1s linear both';
    }
    id('divv').style.webkitAnimation = 'fadeout 1s linear both';

    cut2h();
    id('divh').style.webkitAnimation = 'fadein 1s 1s linear both';
}

function show2_htov()
{
    for(var i = 0;i<5; i++)
    {
        var img = id('img1h_'+i);
        img.style.webkitAnimation = 'fadeout 1s linear both';
    }
    id('divh').style.webkitAnimation = 'fadeout 1s linear both';

    cut2();
    id('divv').style.webkitAnimation = 'fadein 1s 1s linear both';
}

function show2h()
{
    for(var i = 0;i<5;i++)
    {
        var img = id('img1h_'+i);
        img.style.webkitAnimation = 'aniouth_1 1s linear both';
    }

    cut2h();

    // setTimeout(show3h,4000);
}

function cleanshow1()
{
    for(var i = 0;i<8; i++)
    {
        var img = id('img1_'+i);
        if(img == null)
            return;
        img.style.webkitAnimation = '';
        img.style.backgroundImage = '';
    }
}

function cleanshow1h()
{
    for(var i = 0;i<5; i++)
    {
        var img = id('img1h_'+i);
        if(img == null)
            return;
        img.style.webkitAnimation = '';
        img.style.backgroundImage = '';
    }
}

function cut2()
{
    var container = id('div2');

    var img_bili = image_size_width[image_url_index]/image_size_height[image_url_index];
    if(img_bili>img_biliv)
    {
        var img_height = 600;
        var img_width = 600*img_bili;
        var img_left = -(img_width-400)/2;
        var img_top = 0;
    }
    else
    {
        var img_width = 400;
        var img_height = 400/img_bili;
        var img_left = 0;
        var img_top = -(img_height-600)/2;
    }

    for(var i=0;i<4;i++)
    {
        var div = document.createElement('div');
        div.className = 'divv_cell2';
        div.id = 'div2_'+i;      

        div.style.backgroundImage = 'url('+Onload_imgs_url[image_url_index]+')';
        div.style.backgroundSize = img_width+'px '+img_height + 'px';

        if(i==0)
        {
            div.style.backgroundPosition = img_left + 'px '+img_top + 'px';
        }
        else if(i == 1)
        {
            div.style.left = '200px';
            div.style.backgroundPosition = (img_left-200) + 'px '+img_top + 'px';
        }
        else if(i==2)
        {
            div.style.top = '300px';
            div.style.backgroundPosition = (img_left) + 'px '+(img_top-300) + 'px';
        }
        else if(i==3)
        {
            div.style.left = '200px';
            div.style.top = '300px';
            div.style.backgroundPosition = (img_left-200) + 'px '+(img_top-300) + 'px';
        }

        // div.appendChild(img);

        container.appendChild(div);

    }

    container = id('div2h')
    for(var i=0;i<4;i++)
    {
        var div = document.createElement('div');
        div.className = 'divh_cell2';
        div.id = 'div2h_'+i;

        if(i==1)
        {
            div.style.left = '240px';
        }
        else if(i==2)
        {
            div.style.top = '175px';
        }
        else if(i==3)
        {
            div.style.left = '240px';
            div.style.top = '175px';
        }

        container.appendChild(div);
    }
}

function cut2h()
{
    var container = id('div2h');

    var img_bili = image_size_width[image_url_index]/image_size_height[image_url_index];
    if(img_bili>img_bilih)
    {
        var img_height = 350;
        var img_width = 350*img_bili;
        var img_left = -(img_width-475)/2;
        var img_top = 0;
    }
    else
    {
        var img_width = 475;
        var img_height = 475/img_bili;
        var img_left = 0;
        var img_top = -(img_height-350)/2;
    }

    for(var i=0;i<4;i++)
    {
        var div = document.createElement('div');
        div.className = 'divh_cell2';
        div.id = 'div2h_'+i;

        div.style.backgroundImage = 'url('+Onload_imgs_url[image_url_index]+')';
        div.style.backgroundSize = img_width+'px '+img_height + 'px';

        if(i==0)
        {
            div.style.backgroundPosition = img_left + 'px '+img_top + 'px';
        }
        else if(i==1)
        {
            div.style.left = '240px';
            div.style.backgroundPosition = (img_left-240) + 'px '+img_top + 'px';
        }
        else if(i==2)
        {
            div.style.top = '175px';
            div.style.backgroundPosition = img_left + 'px '+(img_top-175) + 'px';
        }
        else if(i==3)
        {
            div.style.left = '240px';
            div.style.top = '175px';
            div.style.backgroundPosition = (img_left-240) + 'px '+(img_top-175) + 'px';
        }

        container.appendChild(div);
    }


    container = id('div2');
    for(var i=0;i<4;i++)
    {
        var div = document.createElement('div');
        div.className = 'divv_cell2';
        div.id = 'div2_'+i;      

        if(i==0)
        {
            div.style.backgroundPosition = img_left + 'px '+img_top + 'px';
        }
        else if(i == 1)
        {
            div.style.left = '200px';
        }
        else if(i==2)
        {
            div.style.top = '300px';
        }
        else if(i==3)
        {
            div.style.left = '200px';
            div.style.top = '300px';
        }
        container.appendChild(div);

    }


}

function cleanshow2()
{
    for(var i = 0;i<4;i++)
    {
        var div = id('div2_'+i);
        if(div == null)
            return;
        div.style.webkitAnimation = '';
        div.style.backgroundImage = '';
    }
}

function cleanshow2h()
{
    for(var i = 0;i<4;i++)
    {
        var div = id('div2h_'+i);
        if(div==null)
            return;
        div.style.webkitAnimation = '';
        div.style.backgroundImage = '';
    } 
}

function showpage3()
{
    setImageindex();

    if(before_type)
    {
        if(img_type)
        {
            show3();
        }
        else
        {
            show3_vtoh();
        }
    }
    else
    {
        if(img_type)
        {
            show3_htov();
        }
        else
        {
            show3h();
        }
    }

    before_type = img_type;
    image_url_index++;

    setTimeout(showpage4,4000)
}

function show3()
{
    id('div2_0').style.webkitAnimation = 'div2_0 1.5s linear both';
    id('div2_1').style.webkitAnimation = 'div2_1 1.5s linear both';
    id('div2_2').style.webkitAnimation = 'div2_2 1.5s linear both';
    id('div2_3').style.webkitAnimation = 'div2_3 1.5s linear both';

    cut3();

}

function show3_vtoh()
{
    id('divv').style.webkitAnimation = 'fadeout 1s linear both';
    cut3h();
    id('divh').style.webkitAnimation = 'fadein 1s 1s linear both';
}



function show3h()
{
    id('div2h_0').style.webkitAnimation = 'div2h_0 1.5s linear both';
    id('div2h_1').style.webkitAnimation = 'div2h_1 1.5s linear both';
    id('div2h_2').style.webkitAnimation = 'div2h_2 1.5s linear both';
    id('div2h_3').style.webkitAnimation = 'div2h_3 1.5s linear both';

    cut3h();

}

function show3_htov()
{
    id('divh').style.webkitAnimation = 'fadeout 1s linear both';
    cut3();
    id('divv').style.webkitAnimation = 'fadein 1s 1s linear both';
}

function cut3()
{
    var container = id('div3');

    var img_bili = image_size_width[image_url_index]/image_size_height[image_url_index];
    if(img_bili>img_biliv)
    {
        var img_height = 600;
        var img_width = 600*img_bili;
        var img_left = -(img_width-400)/2;
        var img_top = 0;
    }
    else
    {
        var img_width = 400;
        var img_height = 400/img_bili;
        var img_left = 0;
        var img_top = -(img_height-600)/2;
    }

    for(var i =0; i<4;i++)
    {
        for(var j=0;j<6;j++)
        {
            var div = document.createElement('div');
            div.className = 'divv_cell3';
            div.id= 'div_'+i+'_'+j;

            div.style.backgroundSize = img_width + 'px '+img_height + 'px';
            div.style.backgroundImage = 'url('+Onload_imgs_url[image_url_index]+')';
            div.style.backgroundPosition = (img_left-i*100)+'px '+(img_top-j*100)+'px';

            div.style.left = i*100+'px';
            div.style.top = j*100 + 'px';

            var delayanitime = (4000+rand(0,1000))/1000;
            div.style.webkitAnimation = 'fadeout 1s '+delayanitime + 's linear both';

            container.appendChild(div);
        }
    }

    container = id('div3h')
    for(var i=0;i<5;i++)
    {
        for(var j=0;j<5;j++)
        {
            var div = document.createElement('div');
            div.className = 'divh_cell3';
            div.id = 'divh_'+ i + '_'+j;

            div.style.left = i*95 + 'px';
            div.style.top = j*70 + 'px';

            var delayanitime = (4000+rand(0,1000))/1000;
            div.style.webkitAnimation = 'fadeout 1s '+delayanitime + 's linear both';

            container.appendChild(div);
        }
    }

}

function cut3h()
{
    var container = id('div3h');

    var img_bili = image_size_width[image_url_index]/image_size_height[image_url_index];
    if(img_bili>img_bilih)
    {
        var img_height = 350;
        var img_width = 350*img_bili;
        var img_left = -(img_width-475)/2;
        var img_top = 0;
    }
    else
    {
        var img_width = 475;
        var img_height = 475/img_bili;
        var img_left = 0;
        var img_top = -(img_height-350)/2;
    }

    for(var i=0;i<5;i++)
    {
        for(var j=0;j<5;j++)
        {
            var div = document.createElement('div');
            div.className = 'divh_cell3';
            div.id = 'divh_'+ i + '_'+j;

            div.style.backgroundSize = img_width + 'px '+img_height + 'px';
            div.style.backgroundImage = 'url('+Onload_imgs_url[image_url_index]+')';

            div.style.left = i*95 + 'px';
            div.style.top = j*70 + 'px';

            div.style.backgroundPosition = (img_left-i*95) + 'px '+(img_top-j*70)+'px';

            var delayanitime = (4000+rand(0,1000))/1000;
            div.style.webkitAnimation = 'fadeout 1s '+delayanitime + 's linear both';

            container.appendChild(div);
        }
    }

    container = id('div3');
    for(var i =0; i<4;i++)
    {
        for(var j=0;j<6;j++)
        {
            var div = document.createElement('div');
            div.className = 'divv_cell3';
            div.id= 'div_'+i+'_'+j;

            div.style.left = i*100+'px';
            div.style.top = j*100 + 'px';

            var delayanitime = (4000+rand(0,1000))/1000;

            container.appendChild(div);
        }
    }

}


function cleanshow3()
{
    for(var i=0;i<4;i++)
    {
        for(var j=0;j<6;j++)
        {
            var div = id('div_'+i+'_'+j);
            if(div == null)
                return;
            div.style.webkitAnimation = '';
            div.style.backgroundImage = '';
        }
    }
}

function cleanshow3h()
{
    for(var i=0;i<5;i++)
    {
        for(var j=0;j<5;j++)
        {
            var div = id('divh_'+i+'_'+j);
            if(div == null)
                return;
            div.style.webkitAnimation = '';
            div.style.backgroundImage = '';
        }
    }
}

function showpage4()
{
    setImageindex();

    if(before_type)
    {
        if(img_type)
        {
            cut4();
        }
        else
        {
            show4_vtoh();
        }
    }
    else
    {
        if(img_type)
        {
            show4_htov();
        }
        else
        {
            cut4();
        }
    }

    before_type = img_type;
    image_url_index++;

    cleanshow1();
    cleanshow1h();

    setTimeout(shownextpage1,4000)
}

function rand(min,max)
{
    return min+Math.floor(Math.random()*(max-min+1));
}

function show4_htov()
{
    id('divh').style.webkitAnimation = 'fadeout 1s linear both';
    id('divv').style.webkitAnimation = 'fadein 1s 1s linear both';

    cut4();
}

function show4_vtoh()
{
    id('divv').style.webkitAnimation = 'fadeout 1s linear both';
    id('divh').style.webkitAnimation = 'fadein 1s 1s linear both';

    cut4();

}



function cut4()
{
    var img_bili = image_size_width[image_url_index]/image_size_height[image_url_index];

    if(img_type)
    {
        if(img_bili>img_biliv)
        {
            var img_height = 600;
            var img_width = 600*img_bili;
            var img_left = -(img_width-400)/2;
            var img_top = 0;
        }
        else
        {
            var img_width = 400;
            var img_height = 400/img_bili;
            var img_left = 0;
            var img_top = -(img_height-600)/2;
        }
        var div = id('div4');
    }
    else
    {
        if(img_bili>img_bilih)
        {
            var img_height = 350;
            var img_width = 350*img_bili;
            var img_left = -(img_width-475)/2;
            var img_top = 0;
        }
        else
        {
            var img_width = 475;
            var img_height = 475/img_bili;
            var img_left = 0;
            var img_top = -(img_height-350)/2;
        }
        var div = id('div4h');
    }
    div.style.backgroundImage = 'url('+Onload_imgs_url[image_url_index]+')';
    div.style.backgroundSize = img_width +'px '+img_height + 'px';
    div.style.backgroundPosition = img_left + 'px '+img_top  +'px';
}

function shownextpage1()
{
    setImageindex();

    if(before_type)
    {
        if(img_type)
        {
            shownext1();
        }
        else
        {
            shownext1_vtoh();
        }
    }
    else
    {
        if(img_type)
        {
            shownext1_htov();
        }
        else
        {
            shownext1();
        }
    }

    before_type = img_type;
    image_url_index++;

    cleanshow2();
    cleanshow2h();

    setTimeout(shownextpage2,4000)
}

function shownext1_vtoh()
{
    id('divv').style.webkitAnimation = 'fadeout 1s linear both';
    id('divh').style.webkitAnimation = 'fadein 1s 1s linear both';

    shownext1();
}

function shownext1_htov()
{
    id('divh').style.webkitAnimation = 'fadeout 1s linear both';
    id('divv').style.webkitAnimation = 'fadein 1s 1s linear both';

    shownext1();
}

function shownext1()
{
    var img_bili = image_size_width[image_url_index]/image_size_height[image_url_index];

    if(img_type)
    {
        if(img_bili>img_biliv)
        {
            var img_height = 600;
            var img_width = 600*img_bili;
            var img_left = -(img_width-400)/2;
            var img_top = 0;
        }   
        else
        {
            var img_width = 400;
            var img_height = 400/img_bili;
            var img_left = 0;
            var img_top = -(img_height-600)/2;
        }  
        var divheight = 75;

        for(var i=0;i<8;i++)
        {
            var div_img = id('img1_'+i);

            div_img.style.webkitAnimation = 'ani_1 1s linear both';
            div_img.style.backgroundImage = 'url('+Onload_imgs_url[image_url_index]+')';
            div_img.style.backgroundSize = img_width + 'px ' + img_height + 'px';   
            div_img.style.backgroundPosition = img_left + 'px '+ (img_top - divheight*i)+'px';

        }
    }
    else
    {
        if(img_bili>img_bilih)
        {
            var img_height = 350;
            var img_width = 350*img_bili;
            var img_left = -(img_width-475)/2;
            var img_top = 0;
        }   
        else
        {
            var img_width = 475;
            var img_height = 475/img_bili;
            var img_left = 0;
            var img_top = -(img_height-350)/2;
        }    

        var divheight = 70;

        for(var i=0;i<5;i++)
        {
            var div_img = id('img1h_'+i);

            div_img.style.webkitAnimation = 'ani_1 1s linear both';
            div_img.style.backgroundImage = 'url('+Onload_imgs_url[image_url_index]+')';
            div_img.style.backgroundSize = img_width + 'px ' + img_height + 'px';   
            div_img.style.backgroundPosition = img_left + 'px '+ (img_top - divheight*i)+'px';

        }
    }

}

function shownextpage2()
{
    setImageindex();

    if(before_type)
    {
        if(img_type)
        {
            shownext2();
        }
        else
        {
            shownext2_vtoh();
        }
    }
    else
    {
        if(img_type)
        {
            shownext2_htov();
        }
        else
        {
            shownext2();
        }
    }

    before_type = img_type;
    image_url_index++;

    cleanshow3();
    cleanshow3h();

    setTimeout(shownextpage3,4000)
}

function shownext2()
{
    getimginfo();
    if(before_type && img_type)
    {
        for(var i = 0;i<8; i++)
        {
            var img = id('img1_'+i);
            img.style.webkitAnimation = 'aniout_1 1s linear both';
        }
    }
    else if((!before_type) && (!img_type))
    {
        for(var i = 0;i<5; i++)
        {
            var img = id('img1h_'+i);
            img.style.webkitAnimation = 'aniout_1 1s linear both';
        }
    }
    if(img_type)
    {
        var divheight = 300;
        var divwidth = 200;
        var divname = 'div2_';
    }
    else
    {
        var divheight = 175;
        var divwidth = 240;
        var divname = 'div2h_';
    }

    for(var i=0;i<4;i++)
    {
        div = id(divname+i);
        div.style.backgroundSize = img_width + 'px '+img_height + 'px';
        div.style.backgroundImage = 'url('+Onload_imgs_url[image_url_index]+')';

        if(i==0)
        {
            div.style.backgroundPosition = img_left + 'px '+img_top + 'px';
        }
        else if(i==1)
        {
            div.style.backgroundPosition = (img_left -divwidth) + 'px '+img_top + 'px';
        }
        else if(i==2)
        {
            div.style.backgroundPosition = img_left + 'px '+ (img_top-divheight)+'px';
        }
        else
        {
            div.style.backgroundPosition = (img_left-divwidth) + 'px ' + (img_top -divheight) + 'px';
        }
    }

}

function shownext2_vtoh()
{
    id('divv').style.webkitAnimation = 'fadeout 1s linear both';
    id('divh').style.webkitAnimation = 'fadein 1s 1s linear both';

    shownext2();
}

function shownext2_htov()
{
    id('divh').style.webkitAnimation = 'fadeout 1s linear both';
    id('divv').style.webkitAnimation = 'fadein 1s 1s linear both';

    shownext2();
}


var img_height;
var img_width;
var img_left;
var img_top;
function getimginfo()
{
    var img_bili = image_size_width[image_url_index]/image_size_height[image_url_index];

    if(img_type)
    {
        if(img_bili>img_biliv)
        {
            img_height = 600;
            img_width = 600*img_bili;
            img_left = -(img_width-400)/2;
            img_top = 0;
        }   
        else
        {
            img_width = 400;
            img_height = 400/img_bili;
            img_left = 0;
            img_top = -(img_height-600)/2;
        }  
    }
    else
    {
        if(img_bili>img_bilih)
        {
            img_height = 350;
            img_width = 350*img_bili;
            img_left = -(img_width-475)/2;
            img_top = 0;
        }   
        else
        {
            img_width = 475;
            img_height = 475/img_bili;
            img_left = 0;
            img_top = -(img_height-350)/2;
        }    
    }

}

function shownextpage3()
{
    setImageindex();

    if(before_type)
    {
        if(img_type)
        {
            shownext3();
        }
        else
        {
            shownext3_vtoh();
        }
    }
    else
    {
        if(img_type)
        {
            shownext3_htov();
        }
        else
        {
            shownext3();
        }
    }

    before_type = img_type;
    image_url_index++;

    setTimeout(shownextpage4,4000)
}

function shownext3_vtoh()
{
    id('divv').style.webkitAnimation = 'fadeout 1s linear both';
    id('divh').style.webkitAnimation = 'fadein 1s 1s linear both';

    shownext3();
}

function shownext3_htov()
{
    id('divh').style.webkitAnimation = 'fadeout 1s linear both';
    id('divv').style.webkitAnimation = 'fadein 1s 1s linear both';

    shownext3();
}

function shownext3()
{
    getimginfo();
    if (img_type)
    {
        for(var i=0;i<4;i++)
        {
            for(var j=0;j<6;j++)
            {
                var div = id('div_'+i+'_'+j);

                div.style.backgroundSize = img_width + 'px '+img_height + 'px';
                div.style.backgroundImage = 'url('+Onload_imgs_url[image_url_index]+')';
                div.style.backgroundPosition = (img_left-i*100)+'px '+(img_top-j*100)+'px';

                var delayanitime = (4000+rand(0,1000))/1000;
                div.style.webkitAnimation = 'fadeout 1s '+delayanitime + 's linear both';
            }
        }
        if(before_type)
        {
            id('div2_0').style.webkitAnimation = 'div2_0 1.5s linear both';
            id('div2_1').style.webkitAnimation = 'div2_1 1.5s linear both';
            id('div2_2').style.webkitAnimation = 'div2_2 1.5s linear both';
            id('div2_3').style.webkitAnimation = 'div2_3 1.5s linear both';
        }
    }
    else
    {
        for(var i=0;i<5;i++)
        {
            for(var j=0;j<5;j++)
            {
                var div = id('divh_'+i+'_'+j);

                div.style.backgroundSize = img_width + 'px '+img_height + 'px';
                div.style.backgroundImage = 'url('+Onload_imgs_url[image_url_index]+')';
                div.style.backgroundPosition = (img_left-i*95)+'px '+(img_top-j*70)+'px';

                var delayanitime = (4000+rand(0,1000))/1000;
                div.style.webkitAnimation = 'fadeout 1s '+delayanitime + 's linear both';
            }
        } 
        if(!before_type)
        {
            id('div2h_0').style.webkitAnimation = 'div2h_0 1.5s linear both';
            id('div2h_1').style.webkitAnimation = 'div2h_1 1.5s linear both';
            id('div2h_2').style.webkitAnimation = 'div2h_2 1.5s linear both';
            id('div2h_3').style.webkitAnimation = 'div2h_3 1.5s linear both';
        }
    }
}

function shownextpage4()
{
    setImageindex();

    if(before_type)
    {
        if(img_type)
        {
            shownext4();
        }
        else
        {
            shownext4_vtoh();
        }
    }
    else
    {
        if(img_type)
        {
            shownext4_htov();
        }
        else
        {
            shownext4();
        }
    }

    before_type = img_type;
    image_url_index++;

    cleanshow1();
    cleanshow1h();

    setTimeout(shownextpage1,4000)
}

function shownext4_vtoh()
{
    id('divv').style.webkitAnimation = 'fadeout 1s linear both';
    id('divh').style.webkitAnimation = 'fadein 1s 1s linear both';

    shownext4();
}

function shownext4_htov()
{
    id('divh').style.webkitAnimation = 'fadeout 1s linear both';
    id('divv').style.webkitAnimation = 'fadein 1s 1s linear both';

    shownext4();
}

function shownext4()
{
    getimginfo();
    if(img_type)
    {
        var div = id('div4');
    }
    else
    {
        var div = id('div4h');
    }
    div.style.backgroundImage = 'url('+Onload_imgs_url[image_url_index]+')';
    div.style.backgroundSize = img_width + 'px '+img_height + 'px';
    div.style.backgroundPosition = img_left + 'px '+img_top + 'px';
}

function showtitle()
{
    id('pagetitle').style.webkitAnimation = 'fadein 0.8s linear both';
    id('titlecontent').innerHTML = e_desc;
}

function distitle()
{
    id('pagetitle').style.webkitAnimation = 'fadeout 0.5s linear both';

    setImageindex();
    before_type = img_type;

    if(img_type==true)
    {
        id('divv').style.webkitAnimation = 'fadein 0.5s linear both';
        show1();
    }
    else
    {
        id('divh').style.webkitAnimation = 'fadein 0.5s linear both';
        show1h();
    }

    setTimeout(showpage2,4000)
}

var img_type;
var before_type;
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
    if(image_size_width[image_url_index]/image_size_height[image_url_index]<1)
    {
        img_type = true;
    }
    else
        img_type = false;
}


function id(name)
{
    return document.getElementById(name);
}

var wordindex = 1;

function setupwords()
{
    console.log(wordindex);
    var objname = 'word'+wordindex;
    id(objname).style.webkitAnimation = 'fadeout 1s ease-out both';

    if(wordindex == 1)
    {
        id('word6').style.webkitAnimation = '';
    }
    else
    {
        id('word'+(wordindex-1)).style.webkitAnimation = '';
    }

    wordindex ++;
    if(wordindex == 7)
        wordindex = 1;
    id('word'+wordindex).style.webkitAnimation = 'fadein 1s 0.3s ease-in both';
}

var line1 = id('line1');
var line1index = 1;
function setline1()
{
    if(line1index == 34)
        line1index = 1;
    line1.src='<?=$p?>images/line/'+line1index+'.png';
    line1index ++ ;
}

var image_size_width=[];
var image_size_height=[];
var image_url_index=0;
var have_num = 0;
var error_num = 0;
var canshow = true;
var reshow = false;

var delaytime=5000;
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
    image_url_index=0;
    have_num = 0;
    error_num = 0;
    begin_titletime = new Date();
    begin_titletime = begin_titletime.getTime();
    showtitle();
    canshow = true;
    for(var i=0;i<slider_images_url.length;i++)
    {
        var img=new Image();
        img.index=i;
        img.src=slider_images_url[i];
        img.onload=image_onload;
        img.onerror= image_onerror;
        Onload_imgs_url[i] = 'loading';
    }     

    id('word1').style.webkitAnimation = 'keepfadeout 1s linear both';
    setInterval(setupwords,4000)

    setInterval(setline1,80);  
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
call_me(load_images);

</script>