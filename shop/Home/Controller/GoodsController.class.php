<?php 

namespace Home\Controller;
use Think\Controller;
//Controller父类：ThinkPHP/Library/Think/Controller.class.php
class GoodsController extends Controller{
	function showList(){
             //获得User控制器的number方法返回的信息
            //当前UserController会通过自动加载机制引入
            //ThinkPHP/Library/Think.class.php
            //function autoload()  
            $user = new UserController();
            
            //通过快捷函数实例化控制器对象
            //new一个控制器对象给我们返回
            //A([项目://][模块]/控制器标志)
            $user=A("User");//通过快捷函数实例化一个控制器
            echo $user->number();
            
            $goods=A("Admin/Goods");
            echo $goods->getMoney();
            
            //跨项目、夸模块指定控制器
            //$index=A("book://Home/index");
            //echo $index->getName();
            
            //简便操作
            //R("[项目：//][模块/]控制器/操作方法")
            //实例化对象之后再调用其对于的方法
            echo R("User/number");
            
            echo R("Admin/Goods/getMoney");
            echo R("book://Home/Index/getName");
            
             $this ->display();
	}
	function detail(){
		//echo "detail";
                $this->display();
	}
        
        //避免该方法被重复再各个控制器中书写，可以把该方法放到父类
        //function __call($m ,$arg){ }
     

}



?>