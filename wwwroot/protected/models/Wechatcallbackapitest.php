<?php
class wechatCallbackapiTest
{
	public function valid(){
		$echoStr = $_GET['echostr'];
		if($this->checkSignature()){
			echo $echoStr;
			exit;
		}
	}


	private function checkSignature()
	{
		$signature = $_GET['signature'];
		$timestamp = $_GET['timestamp'];
		$nonce = $_GET['nonce'];

		$token = TOKEN;
		$tmpArr = array($token,$timestamp,$nonce);
		sort($tmpArr);
		$tmpStr = implode($tmpArr);
		$tmpStr = sha1($tmpStr);

		if( $tmpStr == $signature){
			return true;
		}else{
			return false;
		}
	}

	public function responseMsg()
	{
		$postStr = $GLOBALS['HTTP_RAW_POST_DATA'];
		if(!empty($postStr)){
			$postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
			$fromUsername = $postObj->FromUserName;
			$toUsername = $postObj->ToUserName;
			$keyword = trim($postObj->Content);
			$time = time();
			$textTpl = "<xml>
						<ToUserName><![CDATA[%s]]></ToUserName>
						<FromUserName><![CDATA[%s]]></FromUserName>
						<CreateTime>%s</CreateTime>
						<MsgType><![CDATA[%s]]></MsgType>
						<Content><![CDATA[%s]]></Content>
						<FuncFlag>0</FuncFlag>
						</xml>";
			if($keyword == '?' || $keyword=='？')
			{
				$msgType = 'text';
				$content = "现在的时间是".date('Y-m-d H:i:s',time())."赶紧睡觉！";
				$result = sprintf($textTpl,$fromUsername,$toUsername,$time,$msgType,$content);
				echo $result;
			}
		}else{
			echo "";
			exit;
		}
	}


	
	
	
	
	
	
	
}

