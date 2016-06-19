<?php
namespace Admin\Controller;
use Think\Controller;
class GoodsController extends Controller {
    public function showlists(){
       $this->display();
    }
   
    public function add(){
    	 $this->display();
    }
    public function update(){
    	$this->display();
    }
    public function goodsNumber(){
    	return '商品一千万件';
    }
}