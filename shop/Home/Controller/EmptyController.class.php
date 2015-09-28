<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Home\Controller;
use Think\Controller;

/**
 * Description of EmptyController
 *
 * @author Administrator
 */
class EmptyController extends Controller{
    function _empty(){
        echo "<img src='".IMG_URL."404.gif"."' alt='' />" ;
    }
    
}
