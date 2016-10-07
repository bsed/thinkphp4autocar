<?php
class ShopAction extends Action{
	
	/**
	 * 洗车
	 */
	public function plist(){
		$pageNo = $_GET['pageNo'] ? $_GET['pageNo'] : 1;
		$longitude = $_GET['longitude'];
		$latitude = $_GET['latitude'];
		$type = $_GET['type'];
// 		logx($pageNo.",".$longitude.",".$latitude.",".$type);
// 		if($longitude && $latitude && $type){
		if($type){
			$pageSize = C("PAGE_SIZE");
			$firstIndex = ($pageNo - 1) * $pageSize;
			$limit = "{$firstIndex},{$pageSize}";
			$list = array();
			switch ($type){
				case 1:
					$where['xiche'] = array('neq',0);
					$list = M("shop") -> where($where) -> field("id,name,image,tel,longitude,latitude,address,score,xiche price,desc,content,pcontent") -> limit($limit) -> select();
					break;
				case 2:
					$where['weixiu'] = array('neq',0);
					$list = M("shop") -> where($where) -> field("id,name,image,tel,longitude,latitude,address,score,weixiu price,desc,content,pcontent") -> limit($limit) -> select();
					break;
				case 3:
					$where['baoyang'] = array('neq',0);
					$list = M("shop") -> where($where) -> field("id,name,image,tel,longitude,latitude,address,score,baoyang price,desc,content,pcontent") -> limit($limit) -> select();
					break;
			}
			for($i = 0;$i < count($list);$i++){
				$list[$i]['distance'] = getDistance($latitude,$longitude,$list[$i]['latitude'],$list[$i]['longitude']);
				$list[$i]['image'] = file_domain('public').'/upload/'.$list[$i]['image'];
			}
			$returnValue['error'] = "";
			if($list){
				$returnValue['list'] = $list;
			}else{
				$returnValue['list'] = array();
			}
		}else{
			$returnValue['error'] = "缺少参数";
		}
		
		$this -> ajaxReturn($returnValue);
	}
	
	/**
	 * 广告
	 */
	public function ad(){
		$type = $_GET['type'];
		$list = array();
		switch ($type){
			case 1:
				$where['type'] = $type;
				$list = M("ad") -> field("image,content,title") -> where($where) -> select();
				break;
			case 2:
				$where['type'] = $type;
				$list = M("ad") -> field("image,content,title") -> where($where) -> select();
				break;
		}
		$returnValue['error'] = "";
		if($list){
			for($i = 0;$i < count($list);$i++){
				$list[$i]['image'] = file_domain('public').'/upload/'.$list[$i]['image'];
			}
			$returnValue['list'] = $list;
		}else{
			$returnValue['list'] = array();
		}
		$this -> ajaxReturn($returnValue);
	}
	
	/**
	 * 二手车
	 */
	public function usedcar(){
		$pageNo = $_GET['pageNo'] ? $_GET['pageNo'] : 1;
		$pageSize = C("PAGE_SIZE");
		$firstIndex = ($pageNo - 1) * $pageSize;
		$limit = "{$firstIndex},{$pageSize}";
		$list = M("usedcar")  -> field("id,name,image,price,content") -> limit($limit) -> select();
		$returnValue['error'] = "";
		if($list){
			for($i = 0;$i < count($list);$i++){
				$list[$i]['image'] = file_domain('public').'/upload/'.$list[$i]['image'];
			}
			$returnValue['list'] = $list;
		}else{
			$returnValue['list'] = array();
		}
		$this -> ajaxReturn($returnValue);
	}
	
	/**
	 * 车辆信息
	 */
	public function carinfo(){
		if($GLOBALS["HTTP_RAW_POST_DATA"]){
			$param = json_decode($GLOBALS["HTTP_RAW_POST_DATA"],true);
			$userId = $param['userId'];
			$where["user_id"] = $userId;
			$list = M("ownerinfo") -> field("cpnum,phone,idcard1,idcard2,xscard1,xscard2,jscard1,jscard2") -> where($where) -> find();
			$returnValue['error'] = "";
			if($list){
				$returnValue['info'] = $list;
			}else{
				$returnValue['info'] = "";
			}
		}else{
			$returnValue['error'] = "非法请求";
		}
		$this -> ajaxReturn($returnValue);
	}
	
	/**
	 * 提交车辆信息
	 */
	public function addcarinfo(){
		if($GLOBALS["HTTP_RAW_POST_DATA"]){
			$param = json_decode($GLOBALS["HTTP_RAW_POST_DATA"],true);
			$cpnum = $param['cpnum'];
			$phone = $param['phone'];
			$userId = $param['userId'];
			$idcard1 = $param['idcard1'];
			$idcard2 = $param['idcard2'];
			$xscard1 = $param['xscard1'];//行驶证
			$xscard2 = $param['xscard2'];
			$jscard1 = $param['jscard1'];//驾驶证
			$jscard2 = $param['jscard2'];
			$where['created_by'] = $userId;
			$info = M("ownerinfo") -> where($where) -> find();
			if($info){
				$data = array(
						'id' => $info['id'],
						'cpnum' => $cpnum,
						'phone' => $phone,
						'idcard1' => $idcard1,
						'idcard2' => $idcard2,
						'xscard1' => $xscard1,
						'xscard2' => $xscard2,
						'jscard1' => $jscard1,
						'jscard2' => $jscard2,
						'user_id' => $userId,
						'last_modified_by' => $userId,
						'last_modified_time' => time(),
				);
				M("ownerinfo") -> save($data);
				$returnValue['error'] = "";
				$where1["user_id"] = $userId;
				$list = M("ownerinfo") -> field("cpnum,phone,idcard1,idcard2,xscard1,xscard2,jscard1,jscard2") -> where($where1) -> find();
				$returnValue['info'] = $list;
			}else{
				$data = array(
						'cpnum' => $cpnum,
						'phone' => $phone,
						'idcard1' => $idcard1,
						'idcard2' => $idcard2,
						'xscard1' => $xscard1,
						'xscard2' => $xscard2,
						'jscard1' => $jscard1,
						'jscard2' => $jscard2,
						'user_id' => $userId,
						'created_by' => $userId,
						'created_time' => time(),
						'last_modified_by' => $userId,
						'last_modified_time' => time(),
				);
				$rs = M("ownerinfo") -> add($data);
				if($rs){
					$where1["user_id"] = $userId;
					$list = M("ownerinfo") -> field("cpnum,phone,idcard1,idcard2,xscard1,xscard2,jscard1,jscard2") -> where($where1) -> find();
					$returnValue['info'] = $list;
					$returnValue['error'] = "";
				}else{
					$returnValue['error'] = "保存失败";
				}
			}
		}else{
			$returnValue['error'] = "非法请求";
		}
		$this -> ajaxReturn($returnValue);
	}
	
	/**
	 * 道路救援
	 */
	public function rescue(){
		if($GLOBALS["HTTP_RAW_POST_DATA"]){
			$param = json_decode($GLOBALS["HTTP_RAW_POST_DATA"],true);
			$userId = $param['userId'];
			$address = $param['address'];
			$longitude = $param['longitude'];
			$latitude = $param['latitude'];
			
			$data = array(
					'user_id' => $userId,
					'address' => $address,
					'longitude' => $longitude,
					'latitude' => $latitude,
					'created_by' => $userId,
					'created_time' => time(),
					'last_modified_by' => $userId,
					'last_modified_time' => time(),
			);
			$rs = M("rescue") -> add($data);
			if($rs){
				$returnValue['error'] = "";
			}else{
				$returnValue['error'] = "提交失败";
			}
		}else{
			$returnValue['error'] = "非法请求";
		}
		$this -> ajaxReturn($returnValue);
	}
	
	/**
	 * 审车
	 */
	public function shenche(){
		if($GLOBALS["HTTP_RAW_POST_DATA"]){
			$param = json_decode($GLOBALS["HTTP_RAW_POST_DATA"],true);
			$userId = $param['userId'];
			$scdate = $param['scdate'];
			$where["user_id"] = $userId;
			$where["scdate"] = $scdate;
			
			$where1['nodate'] = $scdate;
			$nodate = M("shenche_nodate") -> where($where1) -> find();
			if($nodate){
				$returnValue['error'] = "该日期不能审车，请选择其他日期";
				$this -> ajaxReturn($returnValue);
			}
			
			$list = M("shenche") -> field("scdate") -> where($where) -> find();
			//当日的审车数
			$condition['scdate'] = $scdate;
			$count = M("shenche") -> where($condition) -> count();
			$condition1['id'] = 1;
			$mcount = M("shenchenum") -> where($condition1) -> getField("num");
			if($count <= $mcount){
				if($list){
					$returnValue['error'] = "该日期您已经提交过审车了";
				}else{
					$data = array(
							'user_id' => $userId,
							'scdate' => $scdate,
							'created_by' => $userId,
							'created_time' => time(),
							'last_modified_by' => $userId,
							'last_modified_time' => time(),
					);
					$rs = M("shenche") -> add($data);
					if($rs){
						$returnValue['error'] = "";
					}else{
						$returnValue['error'] = "提交失败";
					}
				}
			}else{
				$returnValue['error'] = "该日期审车名额已满，请选择其他日期";
			}
		}else{
			$returnValue['error'] = "非法请求";
		}
		$this -> ajaxReturn($returnValue);
	}
	
	public function test(){
	$cpnum = $param['cpnum'];
			$phone = 123;
			$userId = 1;
			$idcard1 = "123";
			$idcard2 = "123";
			$xscard1 = "123";//行驶证
			$xscard2 = "123";
			$jscard1 = "123";//驾驶证
			$jscard2 = "123";
			$where['created_by'] = $userId;
			$info = M("ownerinfo") -> where($where) -> find();
			if($info){
				$data = array(
						'id' => $info['id'],
						'cpnum' => $cpnum,
						'phone' => $phone,
						'idcard1' => $idcard1,
						'idcard2' => $idcard2,
						'xscard1' => $xscard1,
						'xscard2' => $xscard2,
						'jscard1' => $jscard1,
						'jscard2' => $jscard2,
						'user_id' => $userId,
						'last_modified_by' => $userId,
						'last_modified_time' => time(),
				);
				M("ownerinfo") -> save($data);
				$returnValue['error'] = "";
			}else{
				$data = array(
						'cpnum' => $cpnum,
						'phone' => $phone,
						'idcard1' => $idcard1,
						'idcard2' => $idcard2,
						'xscard1' => $xscard1,
						'xscard2' => $xscard2,
						'jscard1' => $jscard1,
						'jscard2' => $jscard2,
						'user_id' => $userId,
						'created_by' => $userId,
						'created_time' => time(),
						'last_modified_by' => $userId,
						'last_modified_time' => time(),
				);
				$rs = M("ownerinfo") -> add($data);
				if($rs){
					$where1["user_id"] = $userId;
					$list = M("ownerinfo") -> field("cpnum,phone,idcard1,idcard2,xscard1,xscard2,jscard1,jscard2") -> where($where1) -> find();
					$returnValue['info'] = $list;
					$returnValue['error'] = "";
				}else{
					$returnValue['error'] = "保存失败";
				}
			}
		
		$this -> ajaxReturn($returnValue);
	}
	
	/**
	 * 下单
	 */
	public function addOrder(){
		if($GLOBALS["HTTP_RAW_POST_DATA"]){
			$param = json_decode($GLOBALS["HTTP_RAW_POST_DATA"],true);
			$userId = $param['userId'];
			$shopId = $param['shopId'];
			$name = $param['name'];
			$orderId = $param['orderId'];
			$type = $param['type'];
			$price = $param['price'];//单价
			$num = $param['num'];
			$totalPrice = $price * $num;
			$data = array(
					'name' => $name,
					'user_id' => $userId,
					'shop_id' => $shopId,
					'order_id' => $orderId,
					'type' => $type,
					'price' => $price,
					'num' => $num,
					'total_price' => $totalPrice,
					'created_by' => $userId,
					'created_time' => time(),
					'last_modified_by' => $userId,
					'last_modified_time' => time(),
			);
			$rs = M("order") -> add($data);
			if($rs){
				$returnValue['error'] = "";
			}else{
				$returnValue['error'] = "下单失败";
			}
		}else{
			$returnValue['error'] = "非法请求";
		}
		$this -> ajaxReturn($returnValue);
	}
	
	/**
	 * 我的订单
	 */
	public function myOrder(){
		if($GLOBALS["HTTP_RAW_POST_DATA"]){
			$param = json_decode($GLOBALS["HTTP_RAW_POST_DATA"],true);
			$userId = $param['userId'];
			$pageNo = $param['pageNo'];
			$where['user_id'] = $userId;
			
			$pageSize = C("PAGE_SIZE");
			$firstIndex = ($pageNo - 1) * $pageSize;
			$limit = "{$firstIndex},{$pageSize}";
			$order = M("order") -> field("order_id orderId,price,num,total_price,created_time") -> limit($limit) -> where($where) -> select();
			if($order){
				for($i = 0;$i < count($order);$i++){
					$order[$i]['created_time'] = date('Y-m-d', $order[$i]['created_time']);
				}
				$returnValue['error'] = "";
				$returnValue['list'] = $order;
			}else{
				$returnValue['error'] = "";
				$returnValue['list'] = array();
			}
		}else{
			$returnValue['error'] = "非法请求";
		}
		$this -> ajaxReturn($returnValue);
	}
	
	
}