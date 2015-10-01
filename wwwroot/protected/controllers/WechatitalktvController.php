<?php

class WechatitalktvController extends Controller
{
	
	public function actionIndex()
	{
		
		define("TOKEN","italktv");
		
		$wechatObj = new wechatCallbackapiTest();
		
		if(isset($_GET['echostr'])){
			$wechatObj->valid();
		}else{
			$wechatObj->responseMsg();
		}
		
	}
	
}

