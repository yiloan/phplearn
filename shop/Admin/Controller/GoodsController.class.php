<?php
//后台商品控制器
namespace Admin\Controller;
use Think\Controller;
class GoodsController extends Controller{
    //商品列表展示
    function showlist(){
        //使用数据模型Model
        //实例化model对象
        $goods=new \Model\GoodsModel(); //3.1.3   3.2
        show_bug($goods);
        //$qq=new \Model\QqModel();
        //show_bug($qq);
        
        $this -> display();
    }
    //添加商品
    function add(){
        $this -> display();
    }
    //修改商品
    function upd(){
        $this -> display();
    }
    function getMoney(){
         return "1000元";
     }
}
