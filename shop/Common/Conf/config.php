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
);