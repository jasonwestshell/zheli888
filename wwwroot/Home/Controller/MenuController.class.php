<?php
namespace Home\Controller;
use Think\Controller;
class MenuController extends Controller {
	
	public function index()
	{
		echo "home menu index";
	}
	
	public function menulist()
	{
		echo "home menu menulist".time();
	}

}