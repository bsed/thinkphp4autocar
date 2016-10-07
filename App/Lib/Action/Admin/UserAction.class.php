<?php
class UserAction extends CommonAction{
	
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
			$info1 = M("user") -> field("dengji_date,zhengjian_date") -> where($where1) -> find();
			$this -> assign('info',$info);
			$this -> assign('info1',$info1);
			$this -> display();
		}
	}
	
}