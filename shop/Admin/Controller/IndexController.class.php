<?php
//后台首页控制器
//商品控制器
namespace Admin\Controller;
use Think\Controller;

class IndexController extends Controller{
    //首页frameset html框架集成方法
    function index(){
        //echo "后台首页";
        $this -> display(); 
    }
    //展示后台头部页面
    function head(){
        //获得当前系统都给我们提供了什么常量可以使用(系统和自定义的)
        //get_defined_constants([true]);
        //var_dump(get_defined_constants(true));
        $this ->display();
    }
    //左边页面
    function left(){
        $this ->display();
    }
    //右边页面
    function right(){
        $this->display();
    }
    
}
