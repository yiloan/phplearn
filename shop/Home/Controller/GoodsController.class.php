<?php 

namespace Home\Controller;
use Think\Controller;

class GoodsController extends Controller{
	public  function showList(){
                
		//echo "showList";
             $this ->display();
	}
	public  function detail(){
		//echo "detail";
                $this->display();
	}

}



?>