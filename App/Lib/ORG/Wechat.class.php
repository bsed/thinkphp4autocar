<?php
class wechat
{
	private $app_id;
    private $app_secret;
    private $access_token;
    
	public function __construct($appid,$appsecret)
    {
        $this->app_id = $appid;
        $this->app_secret = $appsecret;
        $this->access_token = $this -> get_access_token();
    }
	
    //验证消息
    public function valid()
    {
        $echoStr = $_GET["echostr"];
        if($this->checkSignature()){
            echo $echoStr;
            exit;
        }
    }

    //检查签名
    private function checkSignature()
    {
        $signature = $_GET["signature"];
        $timestamp = $_GET["timestamp"];
        $nonce = $_GET["nonce"];
        $token = TOKEN;
        $tmpArr = array($token, $timestamp, $nonce);
        sort($tmpArr, SORT_STRING);
        $tmpStr = implode($tmpArr);
        $tmpStr = sha1($tmpStr);

        if($tmpStr == $signature){
            return true;
        }else{
            return false;
        }
    }

    //响应消息
    public function responseMsg()
    {
        $postStr = $GLOBALS["HTTP_RAW_POST_DATA"];
        if (!empty($postStr)){
        	$access_token = $this->access_token;//获取access_token
            $this->createmenu($access_token);//创建菜单
                
            $postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
            $RX_TYPE = trim($postObj->MsgType);

            switch ($RX_TYPE)
            {
                case "event":
                    $result = $this->receiveEvent($postObj);
                    break;
                case "text":
                    $result = $this->receiveText($postObj);
                    break;
                case "image":
                    //$result = $this->receiveImage($postObj);
                    $result = $this->transmitService($postObj);
                    break;
                case "voice":
                    //$result = $this->receiveVoice($postObj);
                    $result = $this->transmitService($postObj);
                    break;
                case "link":
                    //$result = $this->receiveLink($postObj);
                    $result = $this->transmitService($postObj);
                    break;
                case "location":
                    //$result = $this->receiveLocation($postObj);
                    $result = $this->transmitService($postObj);
                    break;
                case "video":
                    //$result = $this->receiveVideo($postObj);
                    $result = $this->transmitService($postObj);
                    break;
                default:
                    $result = "unknown msg type: ".$RX_TYPE;
                    break;
            }
            echo $result;
        }else {
            echo "";
            exit;
        }
    }

	public function https_request($url,$data = null){
	    $curl = curl_init();
	    curl_setopt($curl, CURLOPT_URL, $url);
	    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
	    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
	    if (!empty($data)){
	        curl_setopt($curl, CURLOPT_POST, 1);
	        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
	    }
	    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	    $output = curl_exec($curl);
	    curl_close($curl);
	    return $output;
	}

	private function transmitService($object)
	    {
	        $xmlTpl = "<xml>
	<ToUserName><![CDATA[%s]]></ToUserName>
	<FromUserName><![CDATA[%s]]></FromUserName>
	<CreateTime>%s</CreateTime>
	<MsgType><![CDATA[transfer_customer_service]]></MsgType>
	</xml>";
        $result = sprintf($xmlTpl, $object->FromUserName, $object->ToUserName, time());
        return $result;
    }
    
    //接收事件消息
    private function receiveEvent($object)
    {
        $content = "";
        switch ($object->Event)
        {
            case "subscribe":
            	$arr[0] = array(
				            	 	'Title' => "华晨中华4S店",
				            	 	'Description' => '欢迎访问官方微信网站',
				            	 	'PicUrl' => "http://hczh.sinaapp.com/App/Tpl/Home/hc1/Public/images/wx_main.jpg",
				            	 	'Url' => "http://hczh.sinaapp.com/?cid=".$_GET['cid']
				            	 );
				$result = $this->transmitNews($object, $arr);
                break;
             case "CLICK":
                switch ($object->EventKey)
                {
                    case "HC_KEFU":
                        $content = "点击左下角图标，切换到聊天模式。直接输入您的问题，我们会为您转接人工客服，美女客服会在第一时间回复您";
                        break;
                    default:
                        $content = "点击菜单：".$object->EventKey;
                        break;
                }
                $result = $this->transmitText($object, $content);
                break;
            case "MASSSENDJOBFINISH":
	            $content = "消息ID：".$object->MsgID.
	                       "\n结果：".$object->Status.
	                       "\n粉丝数：".$object->TotalCount.
	                       "\n过滤：".$object->FilterCount.
	                       "\n发送成功：".$object->SentCount.
	                       "\n发送失败：".$object->ErrorCount;
	            $result = $this->transmitText($object, $content);
	            break;
            /*case "unsubscribe":
                $content = "取消关注";
                break;
            case "SCAN":
                $content = "扫描场景 ".$object->EventKey;
                break;
            case "LOCATION":
                $content = "上传位置：纬度 ".$object->Latitude.";经度 ".$object->Longitude;
                break;
            case "VIEW":
                $content = "跳转链接 ".$object->EventKey;
                break;*/
            default:
                $content = "receive a new event: ".$object->Event;
                break;
        }
        //$result = $this->transmitText($object, $content);
        return $result;
    }
    
    

//接收文本消息
    private function receiveText($object)
    {
    	$result = "";
        $keyword = trim($object->Content);
        if($keyword){
            $result = $this->transmitService($object);
        }
    	if($keyword == "密码"){
            $content = "<a href='http://portal.ximotech.com/index.php/portal/wxportal?hash=x12Mo200&key=866866866'>上网认证</a>";
            $result = $this->transmitText($object, $content);
        }
        return $result;
    }
    
    //接收文本消息
    /*private function receiveText($object)
    {
        switch ($object->Content)
        {
            case "文本":
                $arr[0] = array(
				            	 	'Title' => "华晨中华如皋4S店",
				            	 	'Description' => '欢迎访问官方微信网站',
				            	 	'PicUrl' => "http://hczh.sinaapp.com/App/Tpl/Home/hc1/Public/images/wx_main.jpg",
				            	 	'Url' => "http://hczh.sinaapp.com/?cid=".$_GET['cid']
				            	 );
				 $result = $this->transmitNews($object, $arr);
                break;
            case "图文":
            case "单图文":
                $content = array();
                $content[] = array("Title"=>"单图文标题",  "Description"=>"单图文内容", "PicUrl"=>"http://discuz.comli.com/weixin/weather/icon/cartoon.jpg", "Url" =>"http://m.cnblogs.com/?u=txw1958");
                break;
            case "多图文":
                $content = array();
                $content[] = array("Title"=>"多图文1标题", "Description"=>"", "PicUrl"=>"http://discuz.comli.com/weixin/weather/icon/cartoon.jpg", "Url" =>"http://m.cnblogs.com/?u=txw1958");
                $content[] = array("Title"=>"多图文2标题", "Description"=>"", "PicUrl"=>"http://d.hiphotos.bdimg.com/wisegame/pic/item/f3529822720e0cf3ac9f1ada0846f21fbe09aaa3.jpg", "Url" =>"http://m.cnblogs.com/?u=txw1958");
                $content[] = array("Title"=>"多图文3标题", "Description"=>"", "PicUrl"=>"http://g.hiphotos.bdimg.com/wisegame/pic/item/18cb0a46f21fbe090d338acc6a600c338644adfd.jpg", "Url" =>"http://m.cnblogs.com/?u=txw1958");
                break;
            case "音乐":
                $content = array("Title"=>"最炫民族风", "Description"=>"歌手：凤凰传奇", "MusicUrl"=>"http://121.199.4.61/music/zxmzf.mp3", "HQMusicUrl"=>"http://121.199.4.61/music/zxmzf.mp3");
                break;
            default:
                $content = date("Y-m-d H:i:s",time());
                break;
        }*/
       /* if(is_array($content)){
            if (isset($content[0]['PicUrl'])){
                $result = $this->transmitNews($object, $content);
            }else if (isset($content['MusicUrl'])){
                $result = $this->transmitMusic($object, $content);
            }
        }else{
            $result = $this->transmitText($object, $content);
        }*/
       /* return $result;
    }*/

    
//回复文本消息
    private function transmitText($object, $content)
    {
        $textTpl = "<xml>
<ToUserName><![CDATA[%s]]></ToUserName>
<FromUserName><![CDATA[%s]]></FromUserName>
<CreateTime>%s</CreateTime>
<MsgType><![CDATA[text]]></MsgType>
<Content><![CDATA[%s]]></Content>
</xml>";
        $result = sprintf($textTpl, $object->FromUserName, $object->ToUserName, time(), $content);
        return $result;
    }

    //回复图文消息
    private function transmitNews($object, $newsArray)
    {
        if(!is_array($newsArray)){
            return;
        }
        $itemTpl = "    <item>
        <Title><![CDATA[%s]]></Title>
        <Description><![CDATA[%s]]></Description>
        <PicUrl><![CDATA[%s]]></PicUrl>
        <Url><![CDATA[%s]]></Url>
    </item>
";
        $item_str = "";
        foreach ($newsArray as $item){
            $item_str .= sprintf($itemTpl, $item['Title'], $item['Description'], $item['PicUrl'], $item['Url']);
        }
        $newsTpl = "<xml>
<ToUserName><![CDATA[%s]]></ToUserName>
<FromUserName><![CDATA[%s]]></FromUserName>
<CreateTime>%s</CreateTime>
<MsgType><![CDATA[news]]></MsgType>
<Content><![CDATA[]]></Content>
<ArticleCount>%s</ArticleCount>
<Articles>
$item_str</Articles>
</xml>";

        $result = sprintf($newsTpl, $object->FromUserName, $object->ToUserName, time(), count($newsArray));
        return $result;
    }

/**
     * 获取access_token
     */
    public function get_access_token()
    {
        $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".$this->app_id."&secret=".$this->app_secret;
        $data = json_decode(file_get_contents($url),true);
        if($data['access_token']){
            return $data['access_token'];
        }else{
            return "获取access_token错误";
        }
    }
    
/**
     * 创建菜单
     * @param $access_token 已获取的ACCESS_TOKEN
     */
    public function createmenu($access_token)
    {
        $url = "https://api.weixin.qq.com/cgi-bin/menu/create?access_token=".$access_token;
        /*array(
               'name'=>urlencode("优惠券"),
               'type'=>'view',
               'url'=>'http://rgwy2.sinaapp.com/index.php?s=/Preference/pref_list'
        )
        */
        $arr = array( 
            'button' =>array(
                array(
                    'name'=>urlencode("保养预约"),
                    'sub_button'=>array(
                        array(
                            'name'=>urlencode("预约"),
                            'type'=>'view',
                            'url'=>'http://hczh.sinaapp.com/index.php?s=/Maintenance/appointment'
                        ),
                        array(
                            'name'=>urlencode("一键检测"),
                            'type'=>'view',
                            'url'=>'http://hczh.sinaapp.com/index.php?s=/Maintenance/check'
                        ),
                    )
                ),
                array(
                    'name'=>urlencode("我的服务"),
                    'sub_button'=>array(
                		array(
                            'name'=>urlencode("访问官网"),
                            'type'=>'view',
                            'url'=>"http://hczh.sinaapp.com/?cid=".$_GET['cid']
                        ),
                        array(
                            'name'=>urlencode("解绑注销"),
                            'type'=>'view',
                            'url'=>'http://hczh.sinaapp.com/index.php?s=/Index/unBound'
                        ),
                    )
                ),
                array(
                      'name'=>urlencode("人工客服"),
                      'type'=>'click',
                      'key'=>'HC_KEFU'
                )
                /*array(
                    'name'=>urlencode("公司信息"),
                    'sub_button'=>array(
                        array(
                            'name'=>urlencode("关于我"),
                            'type'=>'click',
                            'key'=>'VCX_ABOUTME'
                        ),
                        array(
                            'name'=>urlencode("工作信息"),
                            'type'=>'click',
                            'key'=>'VCX_JOBINFORMATION'
                        )
                    )
                )*/
            )
        );
        $jsondata = urldecode(json_encode($arr));
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch,CURLOPT_POST,1);
        curl_setopt($ch,CURLOPT_POSTFIELDS,$jsondata);
        $respose_data = curl_exec($ch);
        curl_close($ch);
        //$this->logger("T ".$respose_data);
    }
    /**
     * 查询菜单
     * @param $access_token 已获取的ACCESS_TOKEN
     */
    
    private function getmenu($access_token)
    {
        # code...
        $url = "https://api.weixin.qq.com/cgi-bin/menu/get?access_token=".$access_token;
        $data = file_get_contents($url);
        return $data;
    }
    /**
     * 删除菜单
     * @param $access_token 已获取的ACCESS_TOKEN
     */
    
    private function delmenu($access_token)
    {
        # code...
        $url = "https://api.weixin.qq.com/cgi-bin/menu/delete?access_token=".$access_token;
        $data = json_decode(file_get_contents($url),true);
        if ($data['errcode']==0) {
            # code...
            return true;
        }else{
            return false;
        }
    }
    
	private function logger($log_content)
    {
        if(isset($_SERVER['HTTP_APPNAME'])){   //SAE
            sae_set_display_errors(false);
            sae_debug($log_content);
            sae_set_display_errors(true);
        }else if($_SERVER['REMOTE_ADDR'] != "127.0.0.1"){ //LOCAL
            $max_size = 10000;
            $log_filename = "log.xml";
            if(file_exists($log_filename) and (abs(filesize($log_filename)) > $max_size)){unlink($log_filename);}
            file_put_contents($log_filename, date('H:i:s')." ".$log_content."\r\n", FILE_APPEND);
        }
    }
    
	public function getGroup(){
    	$url = "https://api.weixin.qq.com/cgi-bin/groups/get?access_token=".$this->access_token;
		$result = $this -> https_request($url,null);
		$groupId = array();
		$i = 0;
		$arr = json_decode($result,true);
	    foreach($arr as $val){
	    	foreach($val as $v){
	    		if($v['count'] > 0){
	    			$groupId[$i] = $v['id'];
	    			$i++;
	    		}
	    	}
		}
		p($arr);
		//p($groupId);
		//return $groupId;
    }
    
    public function getUser(){
    	$url = "https://api.weixin.qq.com/cgi-bin/user/get?access_token=".$this->access_token;
		$result = $this -> https_request($url,null);
		//p(json_decode($result, true));
		return json_decode($result, true);
    }
    
    /**
     * 群发消息
     * Enter description here ...
     * @param unknown_type $groupid
     * @param unknown_type $type
     * @param unknown_type $data
     */
    public function mass_send_group($groupid, $type, $data){
    	$msg = array(
    		'filter'	=> array('group_id' => $groupid),
    		'msgtype'	=> $type
    	);
    	switch ($type) {
    		case 'text':
    			$msg[$type] = array('content'	=> $data);
    			break;
    		case 'image':
    			break;
    		case 'voice':
    			break;
    		case 'mpvideo':
    			break;
    		case 'mpnews':
    			$msg[$type] = array('media_id'	=> $data);
    			break;
    	}
    	p($msg);
    	$url = "https://api.weixin.qq.com/cgi-bin/message/mass/sendall?access_token=".$this->access_token;
    	$res = $this -> https_request($url, json_encode($msg));
    	p(json_decode($res, true));
    	//return json_decode($res, true);
    }
    
    /**
     * 群发消息
     * Enter description here ...
     * @param unknown_type $openid
     * @param unknown_type $type
     * @param unknown_type $data
     */
    public function mass_send_openid($openid, $type, $data){
    	$msg = array(
    		'touser'	=> $openid,
    		'msgtype'	=> $type
    	);
    	switch ($type) {
    		case 'text':
    			$msg[$type] = array('content'	=> $data);
    			break;
    		case 'image':
    			break;
    		case 'voice':
    			break;
    		case 'mpvideo':
    			break;
    		case 'mpnews':
    			$msg[$type] = array('media_id'	=> $data);
    			break;
    	}
    	p($msg);
    	$url = "https://api.weixin.qq.com/cgi-bin/message/mass/send?access_token=".$this->access_token;
    	$res = $this -> https_request($url, json_encode($msg));
    	p(json_decode($res, true));
    	//return json_decode($res, true);
    }
    
    /**
     * 
     * Enter description here ...
     * @param unknown_type $news
     * 
     * $news[] = array(
     * 				"thumb_media_id"		=>	$thumb_media_id1,
     *         		"author"				=>	"",
     *              "title"					=>	"微信公众平台开发",
     *              "content_source_url"	=>	"",
     *              "content" 				=>	"",
     *              "digest" =>""
     *           );
     */
    public function upload_news($news){
    	/*foreach ($news as &$item){
    		foreach ($item as $k => $v){
    			$item[$k] = urlencode($v);
    		}
    	}*/
    	$data = array("articles" => $news);
    	$url = "https://api.weixin.qq.com/cgi-bin/media/uploadnews?access_token=".$this->access_token;
    	$res = $this -> https_request($url, json_encode($data));
    	p(json_decode($res, true));
    	return json_decode($res, true);
    }
    
    public function upload_thumb($filepath){
		$filedata = array("media"  => "@".$filepath);
		$url = "http://file.api.weixin.qq.com/cgi-bin/media/upload?access_token=".$this->access_token."&type=thumb";
		$res = $this -> https_request($url, $filedata);
		p(json_decode($res, true));
		return json_decode($res, true);
    }
}
?>