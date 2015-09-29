<?php 

//设置消息投，消除乱码
header("content-type:text/html;charset=utf-8");


//定义css，js，img常量
define("SITE_URL", "http://www.1116.com:11010/");
define("CSS_URL", SITE_URL."shop/public/Home/css/");//定义css
define("IMG_URL", SITE_URL."shop/public/Home/img/");//定义img
define("JS_URL", SITE_URL."shop/public/Home/js/");//定义js

define("ADMIN_SITE_URL", "http://www.1116.com:11010/");
define("ADMIN_CSS_URL", SITE_URL."shop/public/Admin/css/");//定义css
define("ADMIN_IMG_URL", SITE_URL."shop/public/Admin/img/");//定义img
define("ADMIN_JS_URL", SITE_URL."shop/public/Admin/js/");//定义js
//
/**
 * 调整模式
 *	默认是生产模式(每次启动都会加载common~runtime.php文件，不会重写生成) ,把它调整为DEBUG模式
 *	DEBUG模式(每次启动就重写加载文件，会在生成文件)
 */
define("APP_DEBUG", true);

//引入框架文件
include "../ThinkPHP/ThinkPHP.php";

?>