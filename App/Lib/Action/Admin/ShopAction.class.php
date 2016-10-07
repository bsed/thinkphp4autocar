<?php
class ShopAction extends CommonAction{
	
	public function orders(){
		import('@.ORG.Page');
		$count = M("order") -> where($where) -> count();
		$Page = new Page($count);// 实例化分页类 传入总记录数
		$show = $Page->show();// 分页显示输出
		$limit = $Page->firstRow.','.$Page->listRows;
		$list = M("order")  -> limit($limit) -> select();
		for($i = 0;$i < count($list);$i++){
			$user = $this -> getUserInfo($list[$i]['user_id']);
			$list[$i]['username'] = $user['username'];
			$list[$i]['cpnum'] = $user['cpnum'];
		}
		$this -> assign("list",$list);
		$this -> assign('page',$show);
		$this -> display();
	}
	
	/**
	 * 获取用户信息
	 */
	public function getUserInfo($id){
		$where['id'] = $id;
		$user = M("user") -> field("username,cpnum") -> where($where) -> find();
		return $user;
	}
	
	public function users(){
		import('@.ORG.Page');
		$where['username'] = array('neq','admin');
		$count = M("user") -> where($where) -> count();
		$Page = new Page($count);// 实例化分页类 传入总记录数
		$show = $Page->show();// 分页显示输出
		$limit = $Page->firstRow.','.$Page->listRows;
		$list = M("user") -> field("id,username,created_time") -> where($where) -> limit($limit) -> select();
		$this -> assign("user",$list);
		$this -> assign('page',$show);
		$this -> display();
	}
	
	public function userinfo(){
		if($_GET['id']){
			$where['user_id'] = $_GET['id'];
			$info = M("ownerinfo") -> where($where) -> find();
			$where1['id'] = $_GET['id'];
			$info1 = M("user") -> field("username,dengji_date,zhengjian_date") -> where($where1) -> find();
			$this -> assign('info',$info);
			$this -> assign('info1',$info1);
			$this -> display();
		}
	}
	
	public function nodate(){
		import('@.ORG.Page');
		$count = M("shenche_nodate") -> count();
		$Page = new Page($count);// 实例化分页类 传入总记录数
		$show = $Page->show();// 分页显示输出
		$limit = $Page->firstRow.','.$Page->listRows;
		
		$list = M("shenche_nodate") -> limit($limit) -> select();
		$this -> assign('list',$list);
		$this -> assign('page',$show);
		$this -> display();
	}
	
	public function addNodateHandle(){
		if($_POST['nodate']){
			$where['nodate'] = $_POST['nodate'];
			$nodate = M("shenche_nodate") -> where($where) -> find();
			if($nodate){
				$returnval['error'] = "该日期之前已添加";
				$this->ajaxReturn($returnval,'JSON');
			}
			
			$data['nodate'] = $_POST['nodate'];
			$rs = M("shenche_nodate") -> add($data);
			if($rs){
				$returnval['error'] = "";
			}else{
				$returnval['error'] = "添加失败";
			}
		}else{
			$returnval['error'] = "请完善信息";
		}
		$this->ajaxReturn($returnval,'JSON');
	}
	
	public function deleteNodate(){
		if($_POST['id']){
			$where['id'] = $_POST['id'];
			$rs = M("shenche_nodate") -> where($where) -> delete();
			if($rs){
				$returnval['error'] = "";
			}else{
				$returnval['error'] = "删除失败";
			}
		}else{
			$returnval['error'] = "删除失败";
		}
		$this->ajaxReturn($returnval,'JSON');
	}
	
	/**
	 * 救援列表
	 */
	public function jiuyuan(){
		import('@.ORG.Page');
		$count = M("rescue") -> count();
		$Page = new Page($count);// 实例化分页类 传入总记录数
		$show = $Page->show();// 分页显示输出
		$limit = $Page->firstRow.','.$Page->listRows;
		
		$list = M() -> table("cgj_rescue r")
			-> field("u.cpnum,u.username,r.address,r.latitude,r.longitude,r.created_time")
			-> join("cgj_user u ON r.user_id = u.id")
			-> order("r.created_time DESC")
			-> limit($limit)
			-> select();
		
		$this -> assign("list",$list);
		$this -> assign('page',$show);
		$this -> display();
	}
	
	/**
	 * 救援列表
	 */
	public function shenche(){
		import('@.ORG.Page');
		$count = M("shenche") -> count();
		$Page = new Page($count);// 实例化分页类 传入总记录数
		$show = $Page->show();// 分页显示输出
		$limit = $Page->firstRow.','.$Page->listRows;
	
		$list = M() -> table("cgj_shenche r")
					-> field("u.cpnum,u.username,r.scdate,r.user_id,r.created_time")
					-> join("cgj_user u ON r.user_id = u.id")
					-> order("r.created_time DESC")
					-> limit($limit)
					-> select();
	
		$this -> assign("list",$list);
		$this -> assign('page',$show);
		$this -> display();
	}
	
	/**
	 * 店铺列表
	 */
	public function shop(){
		import('@.ORG.Page');
		$count = M("shop") -> count();
		$Page = new Page($count);// 实例化分页类 传入总记录数
		$show = $Page->show();// 分页显示输出
		$limit = $Page->firstRow.','.$Page->listRows;
		$list = M("shop") -> limit($limit) -> order("created_time DESC") -> select();
		$this -> assign("list",$list);
		$this -> assign('page',$show);
		$this -> display();
	}
	
	public function addShopHandle(){
		if($_POST['thumbnailName'] && $_POST['name'] && $_POST['score'] && $_POST['desc']){
			$data = array(
					'name' => $_POST['name'],
					'image' => $_POST['thumbnailName'],
					'desc' => $_POST['desc'],
					'content' => $_POST['content'],
					'pcontent' => $_POST['pcontent'],
					'score' => $_POST['score'],
					'xiche' => $_POST['xiche'],
					'weixiu' => $_POST['weixiu'],
					'baoyang' => $_POST['baoyang'],
					'longitude' => $_POST['longitude'],
					'latitude' => $_POST['latitude'],
					'created_by' => $_SESSION[C("USER_AUTH_KEY")],
					'created_time' => time(),
					'last_modified_by' => $_SESSION[C("USER_AUTH_KEY")],
					'last_modified_time' => time(),
			);
			$rs = M("shop") -> add($data);
			if($rs){
				$data['error'] = "";
			}else{
				$data['error'] = "添加失败";
			}
		}else{
			$data['error'] = "请完善信息";
		}
		$this->ajaxReturn($data,'JSON');
	}
	
	public function editShopHandle(){
		if($_POST['id'] && $_POST['thumbnailName'] && $_POST['name'] && $_POST['score'] && $_POST['desc']){
			$data = array(
					'id' => $_POST['id'],
					'name' => $_POST['name'],
					'image' => $_POST['thumbnailName'],
					'desc' => $_POST['desc'],
					'content' => $_POST['content'],
					'pcontent' => $_POST['pcontent'],
					'score' => $_POST['score'],
					'xiche' => $_POST['xiche'],
					'weixiu' => $_POST['weixiu'],
					'baoyang' => $_POST['baoyang'],
					'longitude' => $_POST['longitude'],
					'latitude' => $_POST['latitude'],
					'last_modified_by' => $_SESSION[C("USER_AUTH_KEY")],
					'last_modified_time' => time(),
			);
			M("shop") -> save($data);
			$data['error'] = "";
		}else{
			$data['error'] = "请完善信息";
		}
		$this->ajaxReturn($data,'JSON');
	}
	
	public function deleteShopHandle(){
		if($_POST['id']){
			$where['id'] = $_POST['id'];
			$rs = M("shop") -> where($where) -> delete();
			if($rs){
				$data['error'] = "";
			}else{
				$data['error'] = "删除失败";
			}
		}else{
			$data['error'] = "删除失败";
		}
		$this->ajaxReturn($data,'JSON');
	}
	
	public function editShop(){
		if($_GET['id']){
			$where['id'] = $_GET['id'];
			$shop = M("shop") -> where($where) -> find();
			$this -> assign('shop',$shop);
			$this -> display();
		}
	}
	
	/**
	 * 店铺列表
	 */
	public function usedcar(){
		import('@.ORG.Page');
		$count = M("usedcar") -> count();
		$Page = new Page($count);// 实例化分页类 传入总记录数
		$show = $Page->show();// 分页显示输出
		$limit = $Page->firstRow.','.$Page->listRows;
		$list = M("usedcar") -> order("created_time DESC") -> limit($limit) -> select();
		$this -> assign("list",$list);
		$this -> assign('page',$show);
		$this -> display();
	}
	
	public function addUsedcarHandle(){
		if($_POST['thumbnailName'] && $_POST['name'] && $_POST['price']){
			$data = array(
					'name' => $_POST['name'],
					'image' => $_POST['thumbnailName'],
					'price' => $_POST['price'],
					'content' => $_POST['content'],
					'created_by' => $_SESSION[C("USER_AUTH_KEY")],
					'created_time' => time(),
					'last_modified_by' => $_SESSION[C("USER_AUTH_KEY")],
					'last_modified_time' => time(),
			);
			$rs = M("usedcar") -> add($data);
			if($rs){
				$data['error'] = "";
			}else{
				$data['error'] = "添加失败";
			}
		}else{
			$data['error'] = "请完善信息";
		}
		$this->ajaxReturn($data,'JSON');
	}
	
	public function editUsedcarHandle(){
		if($_POST['id'] && $_POST['thumbnailName'] && $_POST['name'] && $_POST['price']){
			$data = array(
					'id' => $_POST['id'],
					'name' => $_POST['name'],
					'image' => $_POST['thumbnailName'],
					'price' => $_POST['price'],
					'content' => $_POST['content'],
					'last_modified_by' => $_SESSION[C("USER_AUTH_KEY")],
					'last_modified_time' => time(),
			);
			M("usedcar") -> save($data);
			$data['error'] = "";
		}else{
			$data['error'] = "请完善信息";
		}
		$this->ajaxReturn($data,'JSON');
	}
	
	public function deleteUsedcarHandle(){
		if($_POST['id']){
			$where['id'] = $_POST['id'];
			$rs = M("usedcar") -> where($where) -> delete();
			if($rs){
				$data['error'] = "";
			}else{
				$data['error'] = "删除失败";
			}
		}else{
			$data['error'] = "删除失败";
		}
		$this->ajaxReturn($data,'JSON');
	}
	
	public function editUsedcar(){
		if($_GET['id']){
			$where['id'] = $_GET['id'];
			$shop = M("usedcar") -> where($where) -> find();
			$this -> assign('car',$shop);
			$this -> display();
		}
	}
	
	/**
	 * 店铺列表
	 */
	public function lunbo(){
		import('@.ORG.Page');
		$where['type'] = 1;
		$count = M("ad") -> where($where) -> count();
		$Page = new Page($count);// 实例化分页类 传入总记录数
		$show = $Page->show();// 分页显示输出
		$limit = $Page->firstRow.','.$Page->listRows;
		$list = M("ad") -> where($where) -> limit($limit) -> select();
		$this -> assign("list",$list);
		$this -> assign('page',$show);
		$this -> display();
	}
	
	public function ad(){
		import('@.ORG.Page');
		$where['type'] = 2;
		$count = M("ad") -> where($where) -> count();
		$Page = new Page($count);// 实例化分页类 传入总记录数
		$show = $Page->show();// 分页显示输出
		$limit = $Page->firstRow.','.$Page->listRows;
		$list = M("ad") -> where($where)-> limit($limit) -> select();
		$this -> assign("list",$list);
		$this -> assign('page',$show);
		$this -> display();
	}
	
	public function addadHandle(){
		if($_POST['thumbnailName'] && $_POST['type']){
			$data = array(
					'image' => $_POST['thumbnailName'],
					'title' => $_POST['title'],
					'content' => $_POST['content'],
					'type' => $_POST['type'],
					'created_by' => $_SESSION[C("USER_AUTH_KEY")],
					'created_time' => time(),
					'last_modified_by' => $_SESSION[C("USER_AUTH_KEY")],
					'last_modified_time' => time(),
			);
			$rs = M("ad") -> add($data);
			if($rs){
				$data['error'] = "";
			}else{
				$data['error'] = "添加失败";
			}
		}else{
			$data['error'] = "请完善信息";
		}
		$this->ajaxReturn($data,'JSON');
	}
	
	public function editadHandle(){
		if($_POST['id'] && $_POST['thumbnailName'] && $_POST['type']){
			$data = array(
					'id' => $_POST['id'],
					'image' => $_POST['thumbnailName'],
					'title' => $_POST['title'],
					'content' => $_POST['content'],
					'type' => $_POST['type'],
					'last_modified_by' => $_SESSION[C("USER_AUTH_KEY")],
					'last_modified_time' => time(),
			);
			$rs = M("ad") -> save($data);
			$data['error'] = "";
		}else{
			$data['error'] = "请完善信息";
		}
		$this->ajaxReturn($data,'JSON');
	}
	
	public function editlunbo(){
		if($_GET['id']){
			$where['id'] = $_GET['id'];
			$shop = M("ad") -> where($where) -> find();
			$this -> assign('ad',$shop);
			$this -> display();
		}
	}
	
	public function editad(){
		if($_GET['id']){
			$where['id'] = $_GET['id'];
			$shop = M("ad") -> where($where) -> find();
			$this -> assign('ad',$shop);
			$this -> display();
		}
	}
	
	public function deleteadHandle(){
		if($_POST['id']){
			$where['id'] = $_POST['id'];
			$rs = M("ad") -> where($where) -> delete();
			if($rs){
				$data['error'] = "";
			}else{
				$data['error'] = "删除失败";
			}
		}else{
			$data['error'] = "删除失败";
		}
		$this->ajaxReturn($data,'JSON');
	}
	
	public function upload(){
		import('@.ORG.UploadFile');
		$upload = new UploadFile();
		//设置上传文件类型
		$upload->allowExts          = explode(',', 'jpg,gif,png,jpeg');
		//设置附件上传目录
		$upload->savePath           = './Public/upload/';
		//设置需要生成缩略图，仅对图像文件有效
		$upload->thumb              = true;
		$upload->autoSub            = true;
		$upload->subType            = 'date';
		$upload->dateFormat 		= 'Ym' ;
		if (!$upload->upload()) {
			//捕获上传异常
			echo json_encode(array(
					'status'	=> $upload->getErrorMsg()
			));
		} else {
			//取得成功上传的文件信息
			$uploadList = $upload->getUploadFileInfo();
			echo json_encode(array(
					'url'		=> $uploadList[0]['savename'],
					'title'		=> htmlspecialchars($_POST['pictitle'], ENT_QUOTES),
					'original'	=> $uploadList[0]['name'],
					'state'		=> 'SUCCESS'
			));
		}
			
	}
	
	public function uploadThumbnailHandle(){
		$error = "";
		$msg = "";
		$fileElementName = 'thumbnail';
		if(!empty($_FILES[$fileElementName]['error']))
		{
			$error = uploadErrorInfo($_FILES[$fileElementName]['error']);
		}elseif(empty($_FILES[$fileElementName]['tmp_name']) || $_FILES['thumbnail']['tmp_name'] == 'none')
		{
			$error = 'No file was uploaded..';
		}else
		{
			$uploadData = $this -> uploadImage("./Public/upload/");
			$msg = $uploadData['savename'];
// 			if(strstr($msg,"http://")){
// 				$msg = str_replace("/autocar","",$msg);
// 			}
			@unlink($_FILES[$fileElementName]);
		}
		echo "{";
		echo				"error: '" . $error . "',\n";
		echo				"msg: '" . $msg . "'\n";
		echo "}";
	}
	
	public function uploadImage($savePath){
		$data = array();
		import('@.ORG.UploadFile');
		$upload = new UploadFile();
		$upload->allowExts          = explode(',', 'jpg,gif,png,jpeg');
		$upload->savePath           = $savePath;
		$upload->thumb              = true;
		$upload->autoSub            = true;
		$upload->subType            = 'date';
		$upload->dateFormat 		= 'Ym' ;
		if (!$upload->upload()) {
	
			$data['errorMsg'] = $upload->getErrorMsg();
			return $data;
		} else {
			$uploadList = $upload->getUploadFileInfo();
			$data['status'] = 1;
			$data['savename'] = $uploadList[0]['savename'];
			return $data;
		}
			
	}
	
	/**
	 * 消息
	 */
	public function message(){
		$msg = M("message") -> find();
		$this -> assign('msg',$msg);
		$this -> display();
	}
	
	/**
	 * 添加消息
	 */
	public function addMsgHandle(){
		if($_POST['content']){
			$msg = M("message") -> find();
			if($msg){
				$data = array(
						'id' => 1,
						'content' => $_POST['content'],
				);
				M("message") -> save($data);
			}else{
				$data = array(
						'content' => $_POST['content'],
				);
				M("message") -> add($data);
			}
			if($_POST['phone']){
				$this -> jpush($_POST['phone'],$_POST['content'],"");
			}else{
				$this -> jpush2($_POST['content'],"");
			}
			$data['error'] = "";
		}else{
			$data['error'] = "请完善信息";
		}
		$this->ajaxReturn($data,'JSON');
	}
	
	/**
	 * 日数额
	 */
	public function peie(){
		$msg = M("shenchenum") -> find();
		$this -> assign('msg',$msg);
		$this -> display();
	}
	
	/**
	 * 添加日数额
	 */
	public function addpeieHandle(){
		if($_POST['content']){
			$msg = M("shenchenum") -> find();
			if($msg){
				$data = array(
						'id' => 1,
						'num' => $_POST['content'],
				);
				M("shenchenum") -> save($data);
			}else{
				$data = array(
						'num' => $_POST['content'],
				);
				M("shenchenum") -> add($data);
			}
			$data['error'] = "";
		}else{
			$data['error'] = "请完善信息";
		}
		$this->ajaxReturn($data,'JSON');
	}
	
	/**
	 * 极光推送
	 * @param 发送给某人 $sendTo
	 * @param 通知栏信息 $notification
	 * @param 活动ID $msg
	 */
	public function jpush($sendTo,$notification,$msg){
		import('@.ORG.Push');
		$Push = new Push();
		$client = $Push -> pushMsg();
		$result = $client->push()
		->setPlatform(JPush\Model\all)
		->setAudience(JPush\Model\alias(array($sendTo)))
		// 		->setNotification(JPush\Model\notification($notification))
		->setNotification(JPush\Model\notification($notification, JPush\Model\ios($notification, 'happy', 1, true)))
		->setMessage(JPush\Model\message($msg, null, null, array('key'=>'value')))
		->setOptions(JPush\Model\options(null, 60, null, true))
		->send();
		// 		logx("Jpush",$result->json,"Jpush");
		// 		echo 'Push Success.' . $br;
		// 		echo 'sendno : ' . $result->sendno . $br;
		// 		echo 'msg_id : ' .$result->msg_id . $br;
		// 		echo 'Response JSON : ' . $result->json . $br;
	}
	
	public function jpush2($notification,$msg){
		import('@.ORG.Push');
		$Push = new Push();
		$client = $Push -> pushMsg();
		$result = $client->push()
		->setPlatform(JPush\Model\all)
		->setAudience(JPush\Model\all)
		->setNotification(JPush\Model\notification($notification, JPush\Model\ios($notification, 'happy', 1, true)))
		->setMessage(JPush\Model\message($msg, null, null, array('key'=>'value')))
		->setOptions(JPush\Model\options(null, 60, null, true))
		->send();
	}
	
	
	/* public function jpushTest(){
		 $notification = "test";
		 import('@.ORG.Push');
		 $Push = new Push();
		 $client = $Push -> pushMsg();
		 $result = $client->push()
		 ->setPlatform(JPush\Model\all)
		 ->setAudience(JPush\Model\all)
		 // 	    ->setNotification(JPush\Model\notification('Hi, JPush'))
		 ->setNotification(JPush\Model\notification($notification, JPush\Model\ios($notification, 'happy', 1, true)))
		 // 		->setNotification(JPush\Model\notification($notification,JPush\Model\android($notification), JPush\Model\ios($notification, $msg, 1, true)))
		 ->send();
		 echo 'Push Success.' . $br;
		 echo 'sendno : ' . $result->sendno . $br;
		 echo 'msg_id : ' .$result->msg_id . $br;
		 echo 'Response JSON : ' . $result->json . $br;
	 } */
}