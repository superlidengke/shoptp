<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	//$user=new UserController();
    	$user=A('User');
    	echo $user->number();
    	$goods=A('Admin/Goods');
    	//echo $goods->goodsNumber();
    	echo R('Admin/Goods/goodsNumber');
        $this->display();
    }
    public function lists(){
    	echo 'lists';
    }
    public function _empty(){
    	echo '页面不存在！';
    }
}