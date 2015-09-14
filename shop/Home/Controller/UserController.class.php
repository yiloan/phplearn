<?php

namespace Home\Controller;
use Think\Controller;

class UserController extends Controller {
    public function login(){
    	//echo U("User/login");
    	//echo "<br />";
      	//echo "login";
      	$this 	->	display();
    }
    public function register(){
    	//echo "register";
            $this->display();

    }
 

}