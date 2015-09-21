<?php 

namespace Home\Controller;
use Think\Controller;
//Controller父类：ThinkPHP/Library/Think/Controller.class.php
class GoodsController extends Controller{
	public  function showList(){
                
		//echo "showList";
             $this ->display();
	}
	public  function detail(){
		//echo "detail";
                $this->display();
	}
        
        //避免该方法被重复再各个控制器中书写，可以把该方法放到父类
        //function __call($m ,$arg){ }

}



?>