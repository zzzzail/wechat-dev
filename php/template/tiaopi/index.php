<?
$p=$_WEITE['web_pic_url']."tiaopi/";
?>
<style type='text/css'>

	@-webkit-keyframes lt_in
	{
		0%   {-webkit-transform: translate(-500px, -750px)}
		80%  {-webkit-transform: translate(40px, 40px)}
		100% {-webkit-transform: translate(0px, 0px)}
	}

	@-webkit-keyframes lb_in
	{
		0%   {-webkit-transform: translate(-500px, 750px)}
		80%  {-webkit-transform: translate(40px, -40px)}
		100% {-webkit-transform: translate(0px, 0px)}
	}

	@-webkit-keyframes zoom_in
	{
		0%   {-webkit-transform: scale(0, 0)}
		80%  {-webkit-transform: scale(1.2, 1.2)}
		100% {-webkit-transform: scale(1, 1);}
	}

	@-webkit-keyframes rb_out
	{
		0%   {-webkit-transform: translate(0px, 0px)}
		20%  {-webkit-transform: translate(-40px, -40px)}
		100% {-webkit-transform: translate(500px, 750px)}
	}

	@-webkit-keyframes rt_out
	{
		0%   {-webkit-transform: translate(0px, 0px)}
		20%  {-webkit-transform: translate(-40px, 40px)}
		100% {-webkit-transform: translate(500px, -750px)}
	}

	@-webkit-keyframes zoom_out
	{
		0%   {-webkit-transform: scale(1, 1)}
		20%  {-webkit-transform: scale(1.2, 1.2)}
		100% {-webkit-transform: scale(0, 0)}
	}

	@-webkit-keyframes mm1
	{
		0%   {-webkit-transform: translate(-50px, 0px)}
		100% {-webkit-transform: translate(0px, 0px)}
	}

	@-webkit-keyframes mm2
	{
		0%   {-webkit-transform: translate(0px, 0px)}
		100% {-webkit-transform: translate(-50px, 0px)}
	}

	@-webkit-keyframes mm3
	{
		0%   {-webkit-transform: translate(0px, 0px)}
		100% {-webkit-transform: translate(0px, -50px)}
	}

	@-webkit-keyframes mm4
	{
		0%   {-webkit-transform: translate(0px, -50px)}
		100% {-webkit-transform: translate(0px, 0px)}
	}

	@-webkit-keyframes mm5
	{
		0%   {-webkit-transform: translate(-50px, -50px)}
		100% {-webkit-transform: translate(0px, 0px)}
	}

	@-webkit-keyframes mm6
	{
		0%   {-webkit-transform: translate(0px, 0px)}
		100% {-webkit-transform: translate(-50px, -50px)}
	}

	@-webkit-keyframes mm7
	{
		0%   {-webkit-transform: translate(-50px, -50px)}
		100% {-webkit-transform: translate(0px, -100px)}
	}

	@-webkit-keyframes mm8
	{
		0%   {-webkit-transform: translate(-50px, -50px)}
		100% {-webkit-transform: translate(-100px, 0px)}
	}

	@-webkit-keyframes m1
	{
		0%   {-webkit-transform: translate(0px, 0px)}
		100% {-webkit-transform: translate(50px, 0px);}
	}

	@-webkit-keyframes m2
	{
		0%   {-webkit-transform: translate(0px, 0px)}
		100% {-webkit-transform: translate(-50px, 0px);}
	}

	@-webkit-keyframes m3
	{
		0%   {-webkit-transform: translate(0px, 0px)}
		100% {-webkit-transform: translate(0px, 50px);}
	}

	@-webkit-keyframes m4
	{
		0%   {-webkit-transform: translate(0px, 0px)}
		100% {-webkit-transform: translate(0px, -50px);}
	}

	@-webkit-keyframes m5
	{
		0%   {-webkit-transform: translate(0px, 0px)}
		100% {-webkit-transform: translate(50px, 50px);}
	}

	@-webkit-keyframes m6
	{
		0%   {-webkit-transform: translate(0px, 0px)}
		100% {-webkit-transform: translate(50px, -50px);}
	}

	@-webkit-keyframes m7
	{
		0%   {-webkit-transform: translate(0px, 0px)}
		100% {-webkit-transform: translate(-50px, 50px);}
	}

	@-webkit-keyframes m8
	{
		0%   {-webkit-transform: translate(0px, 0px)}
		100% {-webkit-transform: translate(-50px, -50px);}
	}

	body
	{
		margin: 0px;
		padding: 0px;
		background-color: black;
	}

	#container
	{
		position: absolute;
		left: 0px;
		top: 100px;
		width: 500px;
		height: 500px;
		background-color: black;
		overflow: hidden;
	}

	#cover
	{
		position: absolute;
		z-index: 0;
		overflow: hidden;
		margin: 0px;
		padding: 0px;
	}

	#coverimg
	{
		position: absolute;
		z-index: 0;
		margin: 0px;
		padding: 0px;
	}

</style>

<script>

var colors  = [
	'#A7DBD8','#F38630','#FF4E50','#E0E4CC','#69D2E7','#E0E4CC','#A7DBD8','#F38630','#FF4E50','#E0E4CC','#69D2E7','#E0E4CC',
	'#F39A7A','#FCF372','#FCE274','#D8E9BD','#FDE0C0','#CBDD71','#F39A7A','#FCF372','#FCE274','#D8E9BD','#FDE0C0','#CBDD71',
	'#D3E8D5','#D0DC30','#F0E907','#D1E5AA','#FBE6E5','#B7CE40','#D3E8D5','#D0DC30','#F0E907','#D1E5AA','#FBE6E5','#B7CE40'
];

var bubbles = [];

var show_in_ani  = ['lt_in', 'lb_in', 'zoom_in'];
var show_out_ani = ['rt_out', 'rb_out', 'zoom_out'];
var img_mov_ani  = ['mm1', 'mm2', 'mm3', 'mm4', 'mm5', 'mm6', 'mm7', 'mm8'];//['m1', 'm2', 'm3', 'm4', 'm5', 'm6', 'm7', 'm8'];
var show_images  = [];

var show_out_timer = 0;
var show_in_timer = 0;
var switch_img_timer = 0;
var curr_index = 0;
var ci = 0;
var started = false;
var resize_timer = 0;
var clean_bubble_ani_timer = 0;
var is_android = false;

function test_android()
{
    var u = navigator.userAgent;

    return u.indexOf('Android') > -1;
}

function reset_scene()
{
	var cover = document.getElementById('cover');
	cover.style.webkitTransition = '';
	cover.style.webkitAnimation = '';

	clearTimeout(show_out_timer);
	clearTimeout(show_in_timer);
	clearTimeout(switch_img_timer);
	clearTimeout(resize_timer);
	clearTimeout(clean_bubble_ani_timer);

	show_images  = [];
	show_out_timer = 0;
	show_in_timer = 0;
	switch_img_timer = 0;
	curr_index = 0;
	ci = 0;
	started = false;
	resize_timer = 0;
	clean_bubble_ani_timer = 0;

	start_up();
}

function create_bubble(r, x, y, z)
{
	var one = document.createElement('div');
	bubbles.push(one);
	one.style.position = 'absolute';
	one.style.borderRadius = '99em';
	one.style.opacity = 0.98;
	one.style.zIndex = z;

	one.style.backgroundColor = colors[ci];
	ci++;
	ci = ci % colors.length;
	one.style.left = Math.floor((x - r/2)) + 'px';
	one.style.top  = Math.floor((y - r/2)) + 'px';
	one.style.width = Math.floor(r) + 'px';
	one.style.height = Math.floor(r) + 'px';
	one.style.visibility = 'hidden';

	container.appendChild(one);
}

function bubble_init()
{
	for(var i=0; i<9; i++)
	{
		var x = i % 3;
		var y = Math.floor(i / 3);

		x = 166 * x + 30 + rand(0, 70);
		y = 166 * y + 30 + rand(0, 70); 

		console.log(x);
		create_bubble(230 + rand(0, 50), x, y, rand(100, 105));
	}

	for(var i=0; i<3; i++)
	{
		var x = 80 * rand(0, 6);
		var y = 80 * rand(0, 6);

		console.log(x);
		create_bubble(200, x, y, rand(106, 110));
	}
}

function rand(min, max)
{
	return min + Math.floor(Math.random()*(max-min+1));
}

function clean_bubble_ani()
{
	for(var i=0; i<bubbles.length; i++)
	{
		var wait = rand(0, 12) / 20;
		bubbles[i].style.visibility = 'hidden';
		bubbles[i].style.webkitAnimation = '';
		bubbles[i].style.webkitTransform = 'translate(0px, 0px) scale(1,1)';
		bubbles[i].style.backgroundColor = colors[ci];
		ci++;
		ci = ci % colors.length;
	}

	show_in_timer = setTimeout('show_in()', 1000);
}

function show_out()
{
	var out_ani = show_out_ani[rand(0, show_out_ani.length-1)];

	for(var i=0; i<bubbles.length; i++)
	{
		var wait = rand(0, 12) / 20;
		bubbles[i].style.webkitAnimation = out_ani + ' 0.7s ease-in-out '+wait+'s both'; 
	}

	clean_bubble_ani_timer = setTimeout('clean_bubble_ani()', 2000);
}


function resize_img(index)
{
	var cover = document.getElementById('cover');
	var coverimg = document.getElementById('coverimg');

	coverimg.src = slider_images_url[index];

	var w = show_images[index].width;
	var h = show_images[index].height;

	w = w * (600 / h);
	h = 600;

	if(w < 600)
	{
		h = h * (600 / w);
		w = 600;
	}

	cover.style.left = '-' + (w-500)/2 + 'px';
	cover.style.top  = '-' + (h-500)/2 + 'px';
	cover.style.width = w + 'px';
	cover.style.height = h + 'px';

	coverimg.style.left = '0px';
	coverimg.style.top  = '0px';
	coverimg.style.width = w + 'px';
	coverimg.style.height = h + 'px';

	// if(!is_android)
	// {
		var ani = img_mov_ani[rand(0, img_mov_ani.length-1)];
		cover.style.webkitAnimation = ani + ' 5s linear infinite alternate both';		
	// }
}

function switch_img()
{
	resize_timer = setTimeout('resize_img('+curr_index+')', 1);

	curr_index++;
	curr_index = curr_index % slider_images_url.length;
}


function show_in()
{
	var in_ani = show_in_ani[rand(0, show_in_ani.length-1)];

	for(var i=0; i<bubbles.length; i++)
	{
		var wait = rand(0, 12) / 20;
		bubbles[i].style.visibility = 'visible';
		bubbles[i].style.webkitAnimation = in_ani + ' 0.7s ease-in-out ' + wait + 's both'; 
	}

	show_out_timer = setTimeout("show_out()", 1500);
	switch_img_timer = setTimeout("switch_img()", 1300);
}

function on_image_load(event)
{
	if(show_images.length > 0 && show_images[0].complete && started == false)
	{
		started = true;
		switch_img();
		show_in_timer = setTimeout('show_in()', 2000);
	}
}

function load_images()
{
	for(var i=0; i<slider_images_url.length; i++)
	{
		var img = new Image();
		img.onload = on_image_load;
		img.index  = i;
		img.src = slider_images_url[i];
		show_images.push(img);
	}
}

function start_up()
{
	is_android = test_android();

	bubble_init();
	load_images();	
}

call_me(start_up);

</script>

<div id='container'>
	<div id='cover'>
		<img id='coverimg'>
	</div>
</div>