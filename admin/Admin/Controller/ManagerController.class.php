<?php
namespace Admin\Controller;
use Think\Controller;
class ManagerController extends Controller {
    public function login(){
       $this->display();
    }
   
    public function _empty(){
    	echo '页面不存在！';
    }
}