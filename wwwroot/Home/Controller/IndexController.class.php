<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        echo 'home hello,world!';
    }
    
    public function telephone()
    {
    	echo "home telephone";
    }
    
}