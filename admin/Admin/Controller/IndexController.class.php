<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }
    public function head(){
    	//var_dump(get_defined_constants(true));
    	$this->display();
    }
    public function left(){
    	$this->display();
    }
    public function right(){
    	$this->display();
    }
    public function _empty(){
    	echo '页面不存在！';
    }
}