<?
$p=$_WEITE['web_pic_url']."3d/";
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
        position: absolute;
        width: 500px;
        height: 500px;
        left: 0px;
        top: 100px;
        background-color: black;
        -webkit-perspective: 1000;
    }

    #cubeout
    {
        position: absolute;
        width: 500px;
        height: 500px;
        left:0px;
        top:0px;
        -webkit-transform-style: preserve-3d;
        -webkit-transform: translateZ(-250px);
    }

    #cube
    {
        position: absolute;
        width: 500px;
        height: 500px;
        left: 0px;
        top: 0px;
        -webkit-transform-style: preserve-3d;
        --webkit-animation: round 15s linear 10;
    }

    #front
    {
        position: absolute;
        -webkit-backface-visibility:hidden;
        width: 500px;
        height: 500px;
        left: 0px;
        top: 0px;
        background-color: black;
        -webkit-transform: translateZ(250px);
    }

    #back
    {
        position: absolute;
        -webkit-backface-visibility:hidden;
        width: 500px;
        height: 500px;
        left: 0px;
        top: 0px;
        background-color: black;
        -webkit-transform: translateZ(-250px) rotateY(180deg);
    }

    #left
    {
        position: absolute;
        -webkit-backface-visibility: hidden;
        width: 500px;
        height: 500px;
        left: 0px;
        top: 0px;
        background-color: black;
        -webkit-transform: rotateY(-90deg) translateZ(250px);
    }

    #right
    {
        position: absolute;
        -webkit-backface-visibility: hidden;
        width: 500px;
        height: 500px;
        left: 0px;
        top: 0px;
        background-color: black;
        -webkit-transform: rotateY(90deg) translateZ(250px);
    }

    #top
    {
        position: absolute;
        -webkit-backface-visibility: hidden;
        width: 500px;
        height: 500px;
        left: 0px;
        top: 0px;
        background-color: black;
        -webkit-transform: rotateX(90deg) translateZ(250px);
    }

    #bottom
    {
        position: absolute;
        -webkit-backface-visibility: hidden;
        width: 500px;
        height: 500px;
        left: 0px;
        top: 0px;
        background-color: black;
        -webkit-transform: rotateX(-90deg) translateZ(250px);
    }

    @-webkit-keyframes round
    {
        0%   {-webkit-transform: translateZ(-200px) rotateY(0deg)}
        100% {-webkit-transform: translateZ(-200px) rotateY(-360deg)}
    }

    @-webkit-keyframes to_right
    {
        0%   {-webkit-transform: rotateY(0deg)}
        30%  {-webkit-transform: rotateY(-15deg)}
        60%  {-webkit-transform: rotateY(220deg)}
        80%  {-webkit-transform: rotateY(165deg)}
        100% {-webkit-transform: rotateY(180deg)}
    }

    @-webkit-keyframes to_left
    {
        0%   {-webkit-transform: rotateY(0deg)}
        30%  {-webkit-transform: rotateY(15deg)}
        60%  {-webkit-transform: rotateY(-220deg)}
        80%  {-webkit-transform: rotateY(-165deg)}
        100% {-webkit-transform: rotateY(-180deg)}
    }

    @-webkit-keyframes to_up
    {
        0%   {-webkit-transform: rotateX(0deg)}
        30%  {-webkit-transform: rotateX(-15deg)}
        60%  {-webkit-transform: rotateX(220deg)}
        80%  {-webkit-transform: rotateX(165deg)}
        100% {-webkit-transform: rotateX(180deg)}
    }

    @-webkit-keyframes to_down
    {
        0%   {-webkit-transform: rotateX(0deg)}
        30%  {-webkit-transform: rotateX(15deg)}
        60%  {-webkit-transform: rotateX(-220deg)}
        80%  {-webkit-transform: rotateX(-165deg)}
        100% {-webkit-transform: rotateX(-180deg)}
    }

    @-webkit-keyframes step_back
    {
        0%   {-webkit-transform: translateZ(-250px);}
        50%  {-webkit-transform: translateZ(-400px);}
        100% {-webkit-transform: translateZ(-250px);}
    }

</style>

<script>

var show_images = [];
var started = false;
var show_count = 0;
var front_img = null;
var back_img = null;

var to_right = 'to_right 2s ease-in-out both';
var to_left  = 'to_left  2s ease-in-out both';
var to_up    = 'to_up    2s ease-in-out both';
var to_down  = 'to_down  2s ease-in-out both';

var swap_anis = [to_right, to_left, to_up, to_down];

var back_css1 = 'translateZ(-250px) rotateY(180deg)';
var back_css2 = 'translateZ(-250px) rotateZ(180deg) rotateY(180deg)';

var css_sel = to_right;
var begin_show_timer = 0;
var clean_swap_timer = 0;
var swap_timer = 0;
var apply_set_back_timer = 0;

function reset_scene()
{
    clearTimeout(begin_show_timer);
    clearTimeout(clean_swap_timer);
    clearTimeout(swap_timer);
    clearTimeout(apply_set_back_timer);

    begin_show_timer = 0;
    clean_swap_timer = 0;
    swap_timer = 0;
    apply_set_back_timer = 0;

    cube.style.webkitAnimation    = '';
    cubeout.style.webkitAnimation = '';
    cube.style.webkitTransform    = '';
    cubeout.style.webkitTransform = 'translateZ(-250px)';

    show_images = [];
    started = false;
    show_count = 0;
    load_images();
    check_to_start();
}

function set_front(img)
{
    var front = document.getElementById('front');
    front.style.backgroundImage = 'url('+img.src+')';
    front.style.backgroundPosition = img.pos;
    front.style.backgroundSize = img.si;
    front.style.backgroundRepeat = 'no-repeat';
}

function set_back(img)
{
    var back = document.getElementById('back');
    back.style.backgroundImage = 'url('+img.src+')';
    back.style.backgroundPosition = img.pos;
    back.style.backgroundSize = img.si;
    back.style.backgroundRepeat = 'no-repeat';
}

function apply_img(side, img)
{
    if(img.ok == false)
    {
        img = show_images[0];
    }

    var div = document.getElementById(side);
    div.style.backgroundImage = 'url('+img.src+')';
    div.style.backgroundPosition = img.pos;
    div.style.backgroundSize = img.si;
    div.style.backgroundRepeat = 'no-repeat';
}

function set_side_imgs()
{
    var ok_imgs = [];

    for(var i=0; i<show_images.length; i++)
    {
        if(show_images[i].ok)
        {
            ok_imgs.push(show_images[i]);
        }
    }


    var l = rand(0, ok_imgs.length-1);
    var t = rand(0, ok_imgs.length-1);
    var r = rand(0, ok_imgs.length-1);
    var b = rand(0, ok_imgs.length-1);

    apply_img('left', ok_imgs[l]);
    apply_img('top', ok_imgs[t]);
    apply_img('right', ok_imgs[r]);
    apply_img('bottom', ok_imgs[b]);
}

function clean_swap()
{
    cubeout.style.webkitAnimation = '';
    show_count++;
    begin_show_timer = setTimeout(begin_show, 1500);    
}

function rand(min, max)
{
    return min + Math.floor(Math.random() * (max-min+1));
}

function apply_set_back()
{
    set_back(back_img);

    if(css_sel == to_up || css_sel == to_down)
    {
        back.style.webkitTransform = back_css2;
    }
    else
    {
        back.style.webkitTransform = back_css1;
    }
}

function pick_next_css()
{
    var css_index = rand(0, swap_anis.length-1);

    if(swap_anis[css_index] == css_sel)
    {
        css_index = (css_index + 1) % swap_anis.length;
    }

    css_sel = swap_anis[css_index];
}

function swap()
{
    pick_next_css();

    cube.style.webkitAnimation = css_sel;
    cubeout.style.webkitAnimation = 'step_back 2.0s ease-in-out both';
    apply_set_back_timer = setTimeout(apply_set_back, 100);
    clean_swap_timer = setTimeout(clean_swap, 2000);
}

function begin_show()
{
    var front = show_count;
    var back  = front + 1;

    front = front % show_images.length;
    back = back % show_images.length;

    front_img = show_images[front];
    back_img = show_images[back];

    set_front(front_img);
    set_side_imgs();

    swap_timer = setTimeout(swap, 100);
}

function on_image_load(event)
{
    var img = event.target;
    console.log('on load ' + img.index);
    img.ok  = true;
    calc_image(img);

    if(!started && img.index == 0)
    {
        set_front(img);
    }

    check_to_start();
}

function check_to_start()
{
    if(started == false && show_images[0].ok && show_images[1].ok)
    {
        started = true;
        begin_show();
    }
}

function calc_image(img)
{
    var w = img.width;
    var h = img.height;

    h = h * (500 / w);
    w = 500;

    if(h < 500)
    {
        w = w * (500 / h);
        h = 500;
    }

    w = Math.floor(w);
    h = Math.floor(h);

    var x = Math.floor((500 - w) / 2);
    var y = Math.floor((500 - h) / 2);

    console.log('resize '+img.width+','+img.height+' to '+w+','+h);

    img.pos = x + 'px ' + y + 'px';
    img.si = w + 'px ' + h + 'px';
}

function load_images()
{
    console.log('load images');
    for(var i=0; i<slider_images_url.length; i++)
    {
        var one = new Image();
        one.ok = false;
        one.onload = on_image_load;
        one.index = i;
        one.crossOrigin = "Anonymous";
        one.src = slider_images_url[i];
        show_images.push(one);
    }

    if(slider_images_url.length == 1)
    {
        show_images.push(show_images[0]);
    }
}

function cubeover_init()
{
    console.log('init');
    load_images();
}

call_me(cubeover_init);

</script>

<div id="container">
    <div id='cubeout'>
        <div id="cube">
            <div id='left'></div>
            <div id='right'></div>
            <div id='top'></div>
            <div id='bottom'></div>
            <div id='front'></div>
            <div id='back'></div>
        </div>
    </div>
</div>