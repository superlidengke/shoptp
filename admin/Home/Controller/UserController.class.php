<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    public function number(){
       return '目前会员200万';
    }
    
    public function _empty(){
    	echo '页面不存在！';
    }
}