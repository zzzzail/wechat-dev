<?
$p=$_WEITE['web_pic_url']."donganguanxian/";
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
#container > div,#container > img
{
    position: absolute;
}
#bg2
{
    -webkit-animation: bg2 7s linear infinite;
}
#bg3
{
    -webkit-animation: bg3 7s linear infinite;
}
#bg4
{
    -webkit-animation: bg4 7s linear infinite;
}
#word3
{
    -webkit-animation: word3 4s linear infinite;
}
#worddot
{
    -webkit-animation: worddot 4s linear infinite;
}
#word8
{
    -webkit-animation: word8 4s linear infinite;
}
#square1
{
    left: 194px;
    top: 18px;
    -webkit-animation: square1 3s linear infinite;
}
#square2
{
    left: 0px;
    top: 131px;
    -webkit-animation: blink 3s linear infinite;
}
#square3
{
    left: 0px;
    top: 245px;
    -webkit-animation: blink 3s 1s linear infinite;
    opacity: 0;
}
#square4
{
    left: 278px;
    top: 226px;
    -webkit-animation: blink 3s 2.1s linear infinite;
    opacity: 0;
}
#square5
{
    left: 278px;
    top: 282px;
    -webkit-animation: blink 3s 2.7s linear infinite;
    opacity: 0;
}
#square6
{
    left: 167px;
    top: 282px;
    -webkit-animation: blink 3s 1.9s linear infinite;
    opacity: 0;
}
#square7
{
    left: 194px;
    top: 397px;
    -webkit-animation: blink 3s 1s linear infinite;
    opacity: 0;
}
#square8
{
    left: 83px;
    top: 395px;
    -webkit-animation: blink 3s 2.8s linear infinite;
    opacity: 0;
}
#square9
{
    left: 83px;
    top: 453px;
    -webkit-animation: blink 3s 1.1s linear infinite;
    opacity: 0;
}
#square10
{
    left: 83px;
    top: 567px;
    -webkit-animation: blink 3s 1.5s linear infinite;
    opacity: 0;
}
#square11
{
    left: 27px;
    top: 548px;
    -webkit-animation: blink 3s 0.6s linear infinite;
    opacity: 0;
}
#square12
{
    left: 167px;
    top: 567px;
    -webkit-animation: blink 3s 1.5s linear infinite;
    opacity: 0;
}
#square13
{
    left: 0px;
    top: 623px;
    -webkit-animation: blink 3s 0.8s linear infinite;
    opacity: 0;
}
#square14
{
    left: 0px;
    top: 680px;
    -webkit-animation: blink 3s 2.4s linear infinite;
    opacity: 0;
}
#square15
{
    left: 0px;
    top: 793px;
    -webkit-animation: blink 3s 0.2s linear infinite;
    opacity: 0;
}
#square16
{
    left: 278px;
    top: 718px;
    -webkit-animation: blink 3s 1.7s linear infinite;
    opacity: 0;
}
#square17
{
    left: 278px;
    top: 754px;
    -webkit-animation: blink 3s 1.3s linear infinite;
    opacity: 0;
}
#square18
{
    left: 472px;
    top: 604px;
    -webkit-animation: blink 3s 1s linear infinite;
    opacity: 0;
}
#square19
{
    left: 472px;
    top: 547px;
    -webkit-animation: blink 3s 0.4s linear infinite;
    opacity: 0;
}
#lineup > img,#linedown > img
{
    position: absolute;
}
#linetop,#linebottom
{
    -webkit-animation: lineblink 2s linear infinite;
}
#lineup
{
    left: -18px;
    top: 373px;
    /*-webkit-transform: translate(0px,-120px);*/
}
#linedown
{
    left: -8px;
    top: 382px;
    /*-webkit-transform: translate(0px,120px);*/
}
#titlebg
{
    width: 500px;
    height: 240px;
    left: 0px;
    top: 280px;
    background-color: rgba(186,1,180,0.3);
}
#div1,#div2
{
    position: absolute;
    width: 500px;
    overflow: hidden;
    opacity: 0;
}
</style>
<style type="text/css">
@-webkit-keyframes bg2
{
    0%   {opacity: 0}
    5%   {opacity: 0}
    19%  {opacity: 1}
    78%  {opacity: 1}
    100% {opacity: 0}
}
@-webkit-keyframes bg3
{
    0%   {opacity: 0}
    23%  {opacity: 0}
    36%  {opacity: 1}
    61%  {opacity: 1}
    75%  {opacity: 0}
    100% {opacity: 0}
}
@-webkit-keyframes bg4
{
    0%   {opacity: 0}
    36%  {opacity: 0}
    46%  {opacity: 1}
    56%  {opacity: 0}
    100% {opacity: 0}
}
@-webkit-keyframes word3
{
    0%  {opacity: 0}
    3%  {opacity: 0}
    8%  {opacity: 1}
    19% {opacity: 1}
    24% {opacity: 0}
    78% {opacity: 0}
    79% {opacity: 0.5}
    89% {opacity: 1}
    95% {opacity: 0.5}
    100%{opacity: 0}
}
@-webkit-keyframes worddot
{
    0%  {opacity: 0}
    24% {opacity: 0}
    25% {opacity: 1}
    38% {opacity: 1}
    39% {opacity: 0}
    78% {opacity: 0}
    79% {opacity: 0.5}
    89% {opacity: 1}
    95% {opacity: 0.5}
    100%{opacity: 0}
}
@-webkit-keyframes word8
{
    0%  {opacity: 0}
    38% {opacity: 0}
    39% {opacity: 1}
    59% {opacity: 1}
    64% {opacity: 0}
    78% {opacity: 0}
    79% {opacity: 0.5}
    89% {opacity: 1}
    95% {opacity: 0.5}
    100%{opacity: 0}
}
@-webkit-keyframes square1
{
    0%  {opacity: 0}
    3%  {opacity: 0.5}
    10% {opacity: 0.5}
    11% {opacity: 0}
    100%{opacity: 0}
}
@-webkit-keyframes blink
{
    0%  {opacity: 0}
    18% {opacity: 0}
    20% {opacity: 0.5}
    25% {opacity: 1}
    27% {opacity: 0.5}
    29% {opacity: 1}
    31% {opacity: 1}
    33% {opacity: 0}
    100% {opacity: 0}
}
@-webkit-keyframes lineblink
{
    0%  {opacity: 0}
    30% {opacity: 0}
    42% {opacity: 0.7}
    54% {opacity: 0}
    66% {opacity: 0.7}
    78% {opacity: 0}
    100%{opacity: 0}
}
@-webkit-keyframes lineup
{
    from  {-webkit-transform: translate(0px,0px);}
    to    {-webkit-transform: translate(0px,-120px);}
}
@-webkit-keyframes linedown
{
    from  {-webkit-transform: translate(0px,0px);}
    to    {-webkit-transform: translate(0px,120px);}
}
@-webkit-keyframes titlescale
{
    from  {-webkit-transform: scale(1,0);}
    to    {-webkit-transform: scale(1,1);}
}
@-webkit-keyframes fadein
{
    from  {opacity: 0}
    to    {opacity: 1}
}
@-webkit-keyframes fadeout
{
    from  {opacity: 1}
    to    {opacity: 0}
}
@-webkit-keyframes title_out
{
    from  {opacity: 1;-webkit-transform: translate(0px,0px) scale(1);}
    to    {opacity: 0.5;-webkit-transform: translate(500px,0px) scale(1);}
}
@-webkit-keyframes divbegin
{
    from  {-webkit-transform: scale(1,0);opacity: 0}
    to    {-webkit-transform: scale(1,1);opacity: 1}
}
</style>

<div id='container'>
    <img id='bg1' src='<?=$p?>images/02.jpg'>
    <img id='bg2' src='<?=$p?>images/03.jpg'>
    <img id='bg3' src='<?=$p?>images/04.jpg'>
    <img id='bg4' src='<?=$p?>images/06.jpg'>

    <img id='word3' src='<?=$p?>images/3.png'>
    <img id='worddot' src='<?=$p?>images/dot.png'>
    <img id='word8' src='<?=$p?>images/8.png'>

    <img id='square1' src='<?=$p?>images/05.png'>
    <img id='square2' src='<?=$p?>images/05.png'>
    <img id='square3' src='<?=$p?>images/05.png'>
    <img id='square4' src='<?=$p?>images/05.png'>
    <img id='square5' src='<?=$p?>images/05.png'>
    <img id='square6' src='<?=$p?>images/05.png'>
    <img id='square7' src='<?=$p?>images/05.png'>
    <img id='square8' src='<?=$p?>images/05.png'>
    <img id='square9' src='<?=$p?>images/05.png'>
    <img id='square10' src='<?=$p?>images/05.png'>
    <img id='square11' src='<?=$p?>images/05.png'>
    <img id='square12' src='<?=$p?>images/05.png'>
    <img id='square13' src='<?=$p?>images/05.png'>
    <img id='square14' src='<?=$p?>images/05.png'>
    <img id='square15' src='<?=$p?>images/05.png'>
    <img id='square16' src='<?=$p?>images/05.png'>
    <img id='square17' src='<?=$p?>images/05.png'>
    <img id='square18' src='<?=$p?>images/05.png'>
    <img id='square19' src='<?=$p?>images/05.png'>

    <div id='div1'>
        <img id='img1' style='position:absolute'>
    </div>
    <div id='div2'>
        <img id='img2' style='position:absolute'>
    </div>


    <div id='lineup'>
        <img src='<?=$p?>images/shang01.png'>
        <img id='linetop' src='<?=$p?>images/shang012.png'>
    </div>
    <div id='linedown'>
        <img src='<?=$p?>images/02.png'>
        <img id='linebottom' src='<?=$p?>images/xia012.png'>
    </div>

    <div id='titlebg'>
    </div>
    <div id='pagetitle' style='position:absolute;width:340px;height:226px;top:281px;left:80px;font-size:33px;color:#fff;overflow:hidden;line-height:40px;'>
        <div style='position:absolute;width:340px;height:226px;top:0px;left:0px;overflow:hidden;'>
            <div style='position:absolute;width:340px;height:226px;display:table;overflow:hidden;'>
                <div id='titlecontent' style='width:340px;height:226px;vertical-align:middle;display:table-cell;text-align:center;'></div>
            </div>
        </div>
    </div>

</div>

<script>
function id(name)
{
    return document.getElementById(name)
}

var image_size_width=[];
var image_size_height=[];
var image_url_index=0;
var have_num = 0;
var error_num = 0;
var canshow = true;
var reshow = false;
var delaytime=5000;
var timeout = [];

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
            tokawa_liangziyun();
        }
        else
        {
            dis_titletime = delaytime- dis_titletime;
            timeout[0] = setTimeout(function()
                {
                    tokawa_liangziyun();
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
            tokawa_liangziyun();
        }
        else
        {
            dis_titletime = delaytime- dis_titletime;
            timeout[0] = setTimeout(function()
                {
                    tokawa_liangziyun();
                },dis_titletime);
        }

    }
}

function showtitle()
{
    id('lineup').style.webkitAnimation = 'lineup 0.6s linear both';
    id('linedown').style.webkitAnimation = 'linedown 0.6s linear both';
    id('titlebg').style.webkitAnimation = 'titlescale 0.6s linear both';

    id('titlecontent').innerHTML = e_desc;
    id('pagetitle').style.webkitAnimation = 'fadein 0.3s 0.5s linear both';

}
function tokawa_liangziyun()
{
    id('titlebg').style.webkitAnimation = 'title_out 1s linear both';
    id('pagetitle').style.webkitAnimation = 'fadeout 0.3s linear both';

    setImageindex();
    set_img_position(1);
    create_img_ani(false);

    timeout[1] = setTimeout(show2,4000)
}

function show2()
{
    
    create_img_ani(true,2);
    // set_img_position(2);

    timeout[2] = setTimeout(show1,4000);
}

function show1()
{
    create_img_ani(true,1);

    timeout[3] = setTimeout(show2,4000)
}

function create_img_ani(img_bool,pageindex)
{
    var framesname = url_name(Onload_imgs_url[image_url_index]);
	
    if(img_bili<0.8)
    {
        changeheight = 313;
    }
    else
    {
        changeheight = img_height/2;
    }

    if(!img_bool)
    {
        var csstext = '@-webkit-keyframes '+framesname+ 'toup {from {-webkit-transform:translate(0px,-120px)} to {-webkit-transform:translate(0px,-'+changeheight+'px)}}';
        var style=document.createElement('style');
        document.head.appendChild(style);
        var sheet=style.sheet;
        sheet.insertRule(csstext,0);
        id('lineup').style.webkitAnimation = framesname+ 'toup 1s linear both';

        csstext = '@-webkit-keyframes '+framesname+ 'todown {from {-webkit-transform:translate(0px,120px)} to {-webkit-transform:translate(0px,'+changeheight+'px)}}';
        style=document.createElement('style');
        document.head.appendChild(style);
        var sheet=style.sheet;
        sheet.insertRule(csstext,0);
        id('linedown').style.webkitAnimation = framesname + 'todown 1s linear both';

        csstext = '@-webkit-keyframes '+framesname+ 'toscale {0% {-webkit-transform:scale(1,'+(120/changeheight)+');opacity:0} 100% {-webkit-transform: scale(1,1);opacity:1}}'
        var style=document.createElement('style');
        document.head.appendChild(style);
        var sheet=style.sheet;
        sheet.insertRule(csstext,0);

        id('div1').style.webkitAnimation = framesname + 'toscale 1s linear both';

    }
    else
    {
        image_url_index++;
        setImageindex();

        var next_bili = image_size_width[image_url_index]/image_size_height[image_url_index];
        var next_name = url_name(Onload_imgs_url[image_url_index]);
        if(next_bili<0.8)
        {
            next_height = 313;
        }
        else
        {
            next_height = 250/next_bili;
        }

        var csstext = '@-webkit-keyframes upfrom_'+framesname+'_to_'+next_name + ' {from {-webkit-transform: translate(0px,-'+changeheight+'px)} to {-webkit-transform:translate(0px,-'+next_height+'px)}}';
        console.log(csstext);
        style=document.createElement('style');
        document.head.appendChild(style);
        var sheet=style.sheet;
        sheet.insertRule(csstext,0);

        id('lineup').style.webkitAnimation = 'upfrom_'+framesname+'_to_'+next_name + ' 1s linear both';

        var csstext = '@-webkit-keyframes downfrom_'+framesname+'_to_'+next_name + ' {from {-webkit-transform: translate(0px,'+changeheight+'px)} to {-webkit-transform:translate(0px,'+next_height+'px)}}';
        console.log(csstext);
        style=document.createElement('style');
        document.head.appendChild(style);
        var sheet=style.sheet;
        sheet.insertRule(csstext,0);

        id('linedown').style.webkitAnimation = 'downfrom_'+framesname+'_to_'+next_name + ' 1s linear both';

        var csstext = '@-webkit-keyframes outfrom_'+framesname+'_to_'+next_name + ' {from {-webkit-transform: scale(1,1);opacity:1;} to {-webkit-transform:scale(1,'+next_height/changeheight+');opacity:0;}}';
        console.log(csstext);
        style=document.createElement('style');
        document.head.appendChild(style);
        var sheet=style.sheet;
        sheet.insertRule(csstext,0);

        var csstext = '@-webkit-keyframes infrom_'+framesname+'_to_'+next_name + ' {to {-webkit-transform: scale(1,1);opacity:1} from {-webkit-transform:scale(1,'+changeheight/next_height+');opacity:0}}';
        console.log(csstext);
        style=document.createElement('style');
        document.head.appendChild(style);
        var sheet=style.sheet;
        sheet.insertRule(csstext,0);

        if(pageindex == 2)
        {
            set_img_position(2)
            id('div1').style.webkitAnimation = 'outfrom_'+framesname+'_to_'+next_name + ' 1s linear both';
            id('div2').style.webkitAnimation = 'infrom_'+framesname+'_to_'+next_name + ' 1s linear both';
        }
        else
        {
            set_img_position(1)
            id('div1').style.webkitAnimation = 'infrom_'+framesname+'_to_'+next_name + ' 1s linear both';
            id('div2').style.webkitAnimation = 'outfrom_'+framesname+'_to_'+next_name + ' 1s linear both';
        }
        
    }


}

function set_img_position(pageindex)
{
    img_bili = image_size_width[image_url_index]/image_size_height[image_url_index];
    console.log(img_bili);
    img_width = 500;
    img_height = 500/img_bili;

    var div = id('div'+pageindex);
    var img = id('img'+pageindex);

    div.style.width = '500px';
    div.style.left = '0px';
    img.style.width = '500px';
    img.style.height = img_height + 'px';
    img.src = Onload_imgs_url[image_url_index];
    img.style.left = '0px';
    if(img_bili<0.8)
    {
        img.style.top = (625-img_height)/2+'px';

        div.style.height = '625px';
        div.style.top = (800-625)/2 + 'px';
    }
    else
    {
        img.style.top = '0px';

        div.style.height = img_height + 'px';
        div.style.top = (800-img_height)/2 + 'px';
    }
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

function url_name(url)
{
    if(url == null)
    {
        return '';
    }
    else
    {
         var newstr= url.toString().substr(url.lastIndexOf("/") + 1);    
		 var newstr=newstr.replace(".jpg","");  
		  return "iweite"+newstr.replace("?imageView2/1/w/640/q/75","");  
		
    }
}

call_me(load_images);

function reload_scene()
{
    clearnode();
    reshow = true;
    setTimeout(load_images,100);
}

function clearnode()
{
    id('titlebg').style.webkitAnimation = '';
    id('pagetitle').style.webkitAnimation = '';
    id('div1').style.webkitAnimation = '';
    id('div2').style.webkitAnimation = '';
    id('lineup').style.webkitAnimation = '';
    id('linedown').style.webkitAnimation = '';
    id('titlecontent').innerHTML = '';

    for(var i=0;i<4;i++)
    {
        clearTimeout(timeout[i]);
    }
}

</script>