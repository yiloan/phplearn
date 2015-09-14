<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
       //echo "study PHP";
       $this->display();
    }
    public function hello(){
    	//echo "Hello World";
            $this->display();

    }
  
}