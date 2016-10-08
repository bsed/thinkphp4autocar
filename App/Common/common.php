<?php
function create_uuid($prefix = "hcqc"){    //可以指定前缀
    $str = md5(uniqid(mt_rand(), true));   
    $uuid  = substr($str,0,8) . '-';   
    $uuid .= substr($str,8,4) . '-';   
    $uuid .= substr($str,12,4) . '-';   
    $uuid .= substr($str,16,4) . '-';   
    $uuid .= substr($str,20,12);   
    return $prefix . $uuid;
}

function https_request($url,$data = null){
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

/**
 * 
 * 显示uid
 * @param $uid
 */
function sendUID($uid){
	return empty($uid) ? 0 : $uid;
}

function logx($operation, $result ,$userId){
	$data = array(
			'id'			=> create_uuid(),
			'operation'		=> $operation,
			'result'		=> $result,
			'created'		=> date('Y-m-d H:i:s', time()),
			'created_by'	=> $userId
	);
	M("log") -> add($data);
}


/**
 * 
 * 打印数组
 * @param $array
 */
function p ($array)
{
	dump($array, 1, '<pre>', 0);
}

/**
 * 
 * Enter description here ...
 * @param $msgu
 * @param $msgp
 */
function setPassword($msgu,$msgp){
	if($msgu!="" && $msgp!=""){
		$delmsg = md5($msgu);
		$rname = substr($delmsg,4,1).",".substr($delmsg,8,1).",".substr($delmsg,14,1).",".substr($delmsg,18,1);
		$rnamearray = explode(',',$rname);
		$rpass = md5($msgp);
		$r_msg = str_replace($rnamearray, "", $rpass);
	}else{
		$r_msg = $msgp;
	}
	return $r_msg;
}

/**
 * 生成Token
 * @param unknown $userId
 * @return string
 */
function generateToken($userId){
	return md5(md5(time().$userId).time());
}

/**
 * 验证token
 */
function validateToken($userId,$token){
	$condition["id"] = $userId;
	$userToken = M("UserToken") -> where($condition) -> getField("token");
	if($token){
		if($userToken == $token){
			return true;
		}else{
			return false;
		}
	}else{
		return false;
	}
}

/**
 * 检查该用户的昵称是否为空
 */
function checkUserInfo($userId){
	$condition['id'] = $userId;
	$user = M("userInfo") -> where($condition) -> find();
	if(empty($user['nickname']) || $user['nickname'] == ""){
		return "NN";
	}elseif(empty($user['gender']) || $user['gender'] == ""){
		return "GN";
	}elseif(empty($user['avatar']) || $user['avatar'] == ""){
		return "AN";
	}else{
		return 0;
	}
}

/**
 * 验证用户是否存在
 */
function validateUser($username){
	$condition['username'] = $username;
	$pwd = M("UserToken") -> where($condition) -> getField("password");
	return $pwd;
}

/**
 * 验证后台用户是否存在
 */
function validateWUser($username){
	$condition['username'] = $username;
	$pwd = M("wuser") -> where($condition) -> getField("password");
	return $pwd;
}

/**
 * 判断该昵称是否存在
 * @param unknown $nickName
 * @return mixed
 */
function validateNickname($nickName){
	$condition['nickname'] = $nickName;
	$rs = M("userInfo") -> where($condition) -> select();
	return $rs;
}

function validatePhoneNum($phoneNum){
	$condition['phoneNum'] = $phoneNum;
	$rs = M("userInfo") -> where($condition) -> select();
	return $rs;
}

function uploadErrorInfo($errorType){
	switch ($errorType){
		case '1':
			$error = 'The uploaded file exceeds the upload_max_filesize directive in php.ini';
			break;
		case '2':
			$error = 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form';
			break;
		case '3':
			$error = 'The uploaded file was only partially uploaded';
			break;
		case '4':
			$error = 'No file was uploaded.';
			break;
		
		case '6':
			$error = 'Missing a temporary folder';
			break;
		case '7':
			$error = 'Failed to write file to disk';
			break;
		case '8':
			$error = 'File upload stopped by extension';
			break;
		case '999':
		default:
			$error = 'No error code avaiable';
	}
	return $error;
}

function getAppInfoByCategoryId($categoryId){
	$condition['ac.category_id'] = $categoryId;
	$condition['a.is_del'] = 'F';
	$appInfoList =	M() -> table("djh_app_info a")
					-> join("djh_app_category ac ON a.id = ac.app_id")
					-> where($condition)
					-> select();
	if($appInfoList){
		return $appInfoList;
	}else{
		return array();
	}
}

function getCollectedAppByUserId($userId){
	$condition['ac.user_id'] = $userId;
	$condition['a.is_del'] = 'F';
	$appInfoList =	M() -> table("djh_app_info a")
						-> join("djh_user_app_collection ac ON a.id = ac.app_id")
						-> where($condition)
						-> select();
	if($appInfoList){
		return $appInfoList;
	}else{
		return array();
	}
}

function getPraiseAppByUserId($userId){
	$condition['ac.user_id'] = $userId;
	$condition['a.is_del'] = 'F';
	$appInfoList =	M() -> table("djh_app_info a")
						-> join("djh_user_app_praise ac ON a.id = ac.app_id")
						-> where($condition)
						-> select();
	if($appInfoList){
		return $appInfoList;
	}else{
		return array();
	}
}

function getTrampleAppByUserId($userId){
	$condition['ac.user_id'] = $userId;
	$condition['a.is_del'] = 'F';
	$appInfoList =	M() -> table("djh_app_info a")
						-> join("djh_user_app_trample ac ON a.id = ac.app_id")
						-> where($condition)
						-> select();
	if($appInfoList){
		return $appInfoList;
	}else{
		return array();
	}
}


function time_tran($the_time){
	$dur = time() - $the_time;
	if($dur < 0){
		return date("Y-m-d",$the_time);
	}else{
		if($dur < 60){
			return $dur.'秒';
		}else{
			if($dur < 3600){
				return floor($dur/60).'分钟前';
			}else{
				if($dur < 86400){
					return floor($dur/3600).'小时前';
				}else{
					if($dur <= 86400 * 30){//3天内
						return floor($dur/86400).'天前';
					}else{
						return date("Y-m-d",$the_time);
					}
				}
			}
		}
	}
}

function time_using($the_time){
	$dur = time() - $the_time;
	if($dur < 0){
		return date("Y-m-d",$the_time);
	}else{
		if($dur < 60){
			return $dur.'秒';
		}else{
			if($dur < 3600){
				return floor($dur/60).'分钟';
			}else{
				if($dur < 86400){
					return floor($dur/3600).'小时';
				}else{
					return floor($dur/86400).'天';
				}
			}
		}
	}
}

function getDistance($lat1, $lng1, $lat2, $lng2){
	$radLat1 = $lat1 * (3.1415926535898 / 180);
	$radLat2 = $lat2 * (3.1415926535898 / 180);
	 
	$a = $radLat1 - $radLat2;
	$b = ($lng1 * (3.1415926535898 / 180)) - ($lng2 * (3.1415926535898 / 180));
	 
	$s = 2 * asin(sqrt(pow(sin($a/2),2) + cos($radLat1)*cos($radLat2)*pow(sin($b/2),2)));
	$s = $s * 6378.137;
	$s = round($s * 10000) / 10000;
	return $s;
}

