<?php
return array(
    //'配置项'=>'配置值'
    
    //重写URL访问模式
    'URL_MODEL'             =>  3,       // URL访问模式,可选参数0、1、2、3,代表以下四种模式：
    // 0 (普通模式); 1 (PATHINFO 模式) ; 2 (REWRITE  模式); 3 (兼容模式)  默认为PATHINFO 模式

    //让显示日志追踪信息
    'SHOW_PAGE_TRACE' =>true, 
    //URL地址大小写不敏感设置     
    'URL_CASE_INSENSITIVE'  =>  false,   // 默认false 表示URL区分大小写 true则表示不区分大小写
    
     /* 数据库链接设置*/
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'shop',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '123456',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'sw_',    // 数据库表前缀
    //以下字段没有其作用，
    //1.如果是调试模式就不起作用
    //2.false也不起作用
    'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8

);