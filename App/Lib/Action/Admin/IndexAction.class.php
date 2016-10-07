<?php
class IndexAction extends CommonAction{
	
	public function index(){
		$this -> redirect("Admin/User/users");
	}
}