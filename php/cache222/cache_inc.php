<?
////网站基本设置
$_WEITE['web_weburl'] = 'http://oldman.loocall.com/';//后面必须带/
$_WEITE['web_title'] = '长寿俱乐部-微信音乐相册制作'; 

/////JSDK分享转发,必须是认正的公众号，配合JSDK安全域名使用，具体配置方法参考 2.JSDK配置.txt
$_WEITE['appid']='wx92d61d1558adac3c';
$_WEITE['appsecret']='8afedc4a16bcc26bc2cbd78d93437d79';


/////诱导分享地址。此地址可以为空，当做诱导分享的时候，可以借助此域名跳转,必须同时解析到相册
$_WEITE['web_return_url']='http://oldman.loocall.com/';///后面必须加


/////是否开启歌词效果
$_WEITE['web_islrc']=1;//0是关闭 1开启


/////是否开启弹幕
$_WEITE['web_isbooks']=1;//0是关闭 1开启


/////取消关注则删除制作的所有的信息
$_WEITE['web_isgz']=0;


/////开启制作连接关注跳转随机,仅现所有代理都是自己的帐户
$_WEITE['web_guazhu_rand']=0;

////模版图片调用路径，用来区分七牛和本地，固定参数不可以改
$_WEITE['web_pic_url']=$_WEITE['web_weburl'].'template/';


/////全局第三方七牛参数
$_WEITE['qiniu_isok']=0;//是否开启
$_WEITE['qiniu_weburl']='7xpxuw.com1.z0.glb.clouddn.com';//七牛解析域名
$_WEITE['qiniu_fdir']='huace';//存储文件夹名
$_WEITE['qiniu_access']='AfqsKIMqCaJIqR7dBH7fNwgeRZVR0phd0sz7zdRk';//Access Key
$_WEITE['qiniu_secret']='m82-1D5tTl2Knp4zCJiw92V3msIeWiSsZCLCS3hD';///Secret Key



///图片上传数量，固定参数不可以改
$_WEITE['app_mums']=9;

///COOKIE加密，固定参数不可以改
$_WEITE['cookie_qz']=md5("iweite");


?>
