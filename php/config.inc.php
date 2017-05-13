<?php

// [CH] 以下变量请根据空间商提供的账号参数修改,如有疑问,请联系服务器提供商

	$dbhost = '127.0.0.1';			// 数据库服务器
	$dbuser = 'root';			// 数据库用户名
	$dbpw = 'root';				// 数据库密码
	$dbname = 'wxphoto';			// 数据库名
	
	
	
// [CH] 如您对 cookie 作用范围有特殊要求, 或录不正常, 请修改下面变量, 否则请保持默认
	$tablepre = 'iweite_huace_';   	// 表名前缀, 同一数据库安装多个请修改此处
	$admin_fdir="admin/";      ///后台管理目录,控制图片上传的,不可修改<br />
	$cookiepre = 'iweite_huace_';			// cookie 前缀
	$cookiedomain = ''; 			// cookie 作用域
	$cookiepath = '/';			// cookie 作用路径
	
// [CH] 小心修改以下变量, 否则可能导致无法正常使用

	$pconnect = 0;				// 数据库持久连接 0=关闭, 1=打开
	$database = 'mysql';			// 数据库类型，请勿修改
	$dbcharset = 'utf8';			// MySQL 字符集, 可选 'gbk', 'big5', 'utf8', 'latin1', 留空为按照字符集设定
	$charset = 'utf-8';			// 页面默认字符集, 可选 'gbk', 'big5', 'utf-8'
	$headercharset = 0;			// 强制页面使用默认字符集，可避免部分服务器空间页面出现乱码，一般无需开启。 0=关闭 1= 开启
