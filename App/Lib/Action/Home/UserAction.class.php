<?php
class UserAction extends Action{
	
	/**
	 * 登录
	 */
	public function login(){
		if($GLOBALS["HTTP_RAW_POST_DATA"]){
			$param = json_decode($GLOBALS["HTTP_RAW_POST_DATA"],true);
			$phoneNum = $param['phonenum'];
			$password = $param['password'];
			$where['username'] = $phoneNum;
			$user = M("user") -> field("id,username,nickname,password") -> where($where) -> find();
			if($user){
				if($user['password'] == md5($password)){
					$returnValue['error'] = "";
					$returnValue['user'] = $user;
				}else{
					$returnValue['error'] = "用户名或密码错误";
				}
			}else{
				$returnValue['error'] = "用户名或密码错误";
			}
		}else{
			$returnValue['error'] = "非法请求";
		}
		$this -> ajaxReturn($returnValue);
	}
	
	public function test(){
		$param = json_decode($GLOBALS["HTTP_RAW_POST_DATA"],true);
		$phoneNum = '13813640866';
		$password = '123';
		$where['username'] = $phoneNum;
		$user = M("user") -> field("id,username,nickname,password") -> where($where) -> find();
		if($user){
			if($user['password'] == md5($password)){
				$returnValue['error'] = "";
				$returnValue['user'] = $user;
			}else{
				$returnValue['error'] = "用户名或密码错误";
			}
		}else{
			$returnValue['error'] = "用户名或密码错误";
		}
		$this -> ajaxReturn($returnValue);
	}
	
	/**
	 * 注册
	 */
	public function register(){
		if($GLOBALS["HTTP_RAW_POST_DATA"]){
			$param = json_decode($GLOBALS["HTTP_RAW_POST_DATA"],true);
			$phonenum = $param['phonenum'];
			$password1 = $param['password1'];
			$password2 = $param['password2'];
			$djdate = $param['djdate'];
			$lqdate = $param['lqdate'];
			if($password1 != $password2){
				$returnValue['error'] = "两次输入的密码不一致";
				$this -> ajaxReturn($returnValue);
			}
			$where['username'] = $phonenum;
			$user = M("user") -> field("id,username") -> where($where) -> find();
			if($user){
				$returnValue['error'] = "该手机号已被注册";
				$this -> ajaxReturn($returnValue);
			}
			
			$data = array(
					'username' => $phonenum,
					'password' => md5($password1),
					'dengji_date' => $djdate,
					'zhengjian_date' => $lqdate,
					'created_by' => $phonenum,
					'created_time' => time(),
					'last_modified_by' => $phonenum,
					'last_modified_time' => time()
			);
			$rs = M("user") -> add($data);
			if($rs){
				$where1['username'] = $phonenum;
				$user = M("user") -> field("id,username") -> where($where1) -> find();
				$returnValue['error'] = "";
				$returnValue['user'] = $user;
			}else{
				$returnValue['error'] = "注册失败";
			}
		}else{
			$returnValue['error'] = "非法请求";
		}
		$this -> ajaxReturn($returnValue);
	}
	
	/**
	 * 找回密码
	 */
	public function findPassword(){
		if($GLOBALS["HTTP_RAW_POST_DATA"]){
			$param = json_decode($GLOBALS["HTTP_RAW_POST_DATA"],true);
			$phonenum = $param['phonenum'];
			$password1 = $param['password1'];
			$password2 = $param['password2'];
			if($password1 != $password2){
				$returnValue['error'] = "两次输入的密码不一致";
				$this -> ajaxReturn($returnValue);
			}
			$where['username'] = $phonenum;
			$data = array(
					'password' => md5($password1),
					'last_modified_by' => $phonenum,
					'last_modified_time' => time()
			);
			$rs = M("user") -> where($where) -> save($data);
			if($rs){
				$returnValue['error'] = "";
			}else{
				$returnValue['error'] = "修改失败";
			}
		}else{
			$returnValue['error'] = "非法请求";
		}
		$this -> ajaxReturn($returnValue);
	}
	
	public function getQiniuToken(){
		import('@.ORG.rs');
		$bucket = 'freefood';
		$accessKey = 'TREv5IgZqCEzQe9DcXXj1fRRyHFolQEDr-XuQWnj';
		$secretKey = 'Rl_nEqLrmegeiijtSiLCcjFGLOChRv-7NOPMgN1K';
	
		Qiniu_SetKeys($accessKey, $secretKey);
		$putPolicy = new Qiniu_RS_PutPolicy($bucket);
		$upToken = $putPolicy->Token(null);
		if($upToken){
			$returnValue['responseMsg']['error'] = "";
			$returnValue['responseMsg']['success'] = "S";
			$returnValue['responseMsg']['qiniuToken'] = $upToken;
		}else{
			$returnValue['responseMsg']['error'] = "GUQT-E-001";//数据库操作失败
			$returnValue['responseMsg']['success'] = "";
		}
		$this -> ajaxReturn($returnValue);
	}
	
	/**
	 * 验证验证码
	 */
	public function validCode($phone,$code){
		$where['phone'] = $phone;
		$where['code'] = $code;
		$result = M("code") -> where($where) -> order("created_time DESC") -> find();
		if($result){
			if($result['invalid_time'] < time()){
				return false;
			}else{
				return true;
			}
		}else{
			return false;
		}
	}
	
	//-------------------------------------短信验证-------------------------------------
	/**
	 * 发送模板短信
	 * @param to 手机号码集合,用英文逗号分开
	 * @param datas 内容数据 格式为数组 例如：array('Marry','Alon')，如不需替换请填 null
	 * @param $tempId 模板Id,测试应用和未上线应用使用测试模板请填写1，正式应用上线后填写已申请审核通过的模板ID
	 */
	public function sendTemplateSMS($to,$datas,$tempId)
	{
		import('@.ORG.CCPRestSmsSDK');
		// 初始化REST SDK
		// 		global $accountSid,$accountToken,$appId,$serverIP,$serverPort,$softVersion;
		//主帐号,对应开官网发者主账号下的 ACCOUNT SID
		$accountSid= 'aaf98f89544cd9d901545c335a191305';
		//主帐号令牌,对应官网开发者主账号下的 AUTH TOKEN
		$accountToken= '745211081847471393c7e1e785dc5c6a';
		//应用Id，在官网应用列表中点击应用，对应应用详情中的APP ID
		//在开发调试的时候，可以使用官网自动为您分配的测试Demo的APP ID
		$appId='aaf98f89544cd9d901547ebec8632d7e';
		//请求地址
		//沙盒环境（用于应用开发调试）：sandboxapp.cloopen.com
// 		生产环境（用户应用上线使用）：app.cloopen.com
// 		$serverIP='sandboxapp.cloopen.com';
		$serverIP='app.cloopen.com';
		//请求端口，生产环境和沙盒环境一致
		$serverPort='8883';
		//REST版本号，在官网文档REST介绍中获得。
		$softVersion='2013-12-26';
	
		$rest = new REST($serverIP,$serverPort,$softVersion);
		$rest->setAccount($accountSid,$accountToken);
		$rest->setAppId($appId);
	
		// 发送模板短信
		// 		echo "Sending TemplateSMS to $to <br/>";
		$result = $rest->sendTemplateSMS($to,$datas,$tempId);
		if($result == NULL ) {
			// 			echo "result error!";
			$returnValue['error'] = "result error!";
			break;
		}
		if($result->statusCode!=0) {
			// 		     echo "error code :" . $result->statusCode . "<br>";
// 					     echo "error msg :" . $result->statusMsg . "<br>";
			$returnValue['error'] = "" . $result->statusMsg;
			//TODO 添加错误处理逻辑
		}else{
			// 		     echo "Sendind TemplateSMS success!<br/>";
			// 获取返回信息
			$smsmessage = $result->TemplateSMS;
			// 	     	 echo "dateCreated:".$smsmessage->dateCreated."<br/>";
			//          	 echo "smsMessageSid:".$smsmessage->smsMessageSid."<br/>";
			$returnValue['error'] = "";
			//TODO 添加成功处理逻辑
		}
		$this -> ajaxReturn($returnValue);
	}
	
	/**
	 * 注册短信验证（容联-云通讯）
	 */
	public function verificationSMS(){
		if($_GET['phonenum']){
			$num = rand(1000,9999);
			$this -> sendTemplateSMS($_GET['phonenum'],array($num,'15'),"90032");
// 			$this -> sendTemplateSMS($_GET['phonenum'],array($num,'15'),"1");
		}
	}
	
	public function testsms(){
		$phone = "18061099968";
		$num = rand(1000,9999);
		$this -> sendTemplateSMS($phone,array($num,'15'),"1");
	}
	
	public function createCode($phone,$code,$ip){
		$where['phone'] = $phone;
		$where['ip'] = $ip;
		$result = M("code") -> where($where) -> order("created_time DESC") -> find();
		if($result){
			if(time() - $result['created_time'] > 60){
				$invalid_time = time() + 15 * 60;
				$data = array(
						'id' => create_uuid(),
						'phone'	=>	$phone,
						'code'	=>	$code,
						'ip'	=> $ip,
						'invalid_time' => $invalid_time,
						'created_time'	=>	time()
				);
				return M("code") -> add($data);
			}else{
				return false;
			}
		}else{
			$invalid_time = time() + 15 * 60;
			$data = array(
					'id' => create_uuid(),
					'phone'	=>	$phone,
					'code'	=>	$code,
					'ip'	=> $ip,
					'invalid_time' => $invalid_time,
					'created_time'	=>	time()
			);
			return M("code") -> add($data);
		}
	
	}
	
	/**
	 * 获取IP地址
	 * @return Ambigous <string, unknown>
	 */
	public function GetIP(){
		if(!empty($_SERVER["HTTP_CLIENT_IP"])){
			$cip = $_SERVER["HTTP_CLIENT_IP"];
		}
		elseif(!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
			$cip = $_SERVER["HTTP_X_FORWARDED_FOR"];
		}
		elseif(!empty($_SERVER["REMOTE_ADDR"])){
			$cip = $_SERVER["REMOTE_ADDR"];
		}
		else{
			$cip = "无法获取！";
		}
		return $cip;
	}
	/**
	 * 找回密码短信验证（容联-云通讯）
	 */
	public function findPasswordSMS(){
		if($_POST){
			if($_POST['phoneNum'] && $_POST['code']){
				$this -> sendTemplateSMS($_POST['phoneNum'],array($_POST['code'],'30'),"26378");
			}else{
				$returnValue['error'] = "SS-E-001";
				$returnValue['success'] = "";
				$this -> ajaxReturn($returnValue);
			}
		}
	}
	
}