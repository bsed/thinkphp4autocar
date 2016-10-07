<?php
class XkuserAction extends Action {
	
	
	public function login(){
		$this -> assign("uname",$_COOKIE['uname']);
		$this -> display();
	}
	
	
	/**
	 * 登录
	 */
	public function loginHandle(){
		if($_POST['perAccount'] && $_POST['password'] && $_POST['captcha']){
			if(md5($_POST['captcha']) != $_SESSION['verify']){
				$data['error'] = "验证码错误";
				$this->ajaxReturn($data,'JSON');
			}
			$userName = $_POST['perAccount'];
			$pwd = $_POST['password'];
			$condition['username'] = $userName;
			$condition['is_admin'] = 1;
			$wuser = M("user") -> where($condition) -> find();
			if($wuser){
				if($wuser['password'] == md5($pwd)){
					session(C("USER_AUTH_KEY"),$wuser['id']);
					session('uid',$wuser['id']);
					session('uname',$userName);
					setcookie(C("USER_AUTH_KEY"), $wuser['id'], time () + 3600 * 24 * 365 * 50, '/' );
					setcookie('uname', $userName, time () + 3600 * 24 * 365 * 50, '/' );
					
					if($wuser['username'] == C('RBAC_SUPERADMIN')){
						session(C('ADMIN_AUTH_KEY'), true);
					}
					import('@.ORG.RBAC');
					RBAC::saveAccessList();
					$data['error'] = "";
				}else{
					$data['error'] = "用户名或者密码错误";
				}
			}else{
				$data['error'] = "该用户不存在或被拉黑删除";
			}
		}else{
			$data['error'] = "请完善信息";
		}
		$this->ajaxReturn($data,'JSON');
	}
	
	/**
	 * 生成验证码
	 */
	public function verify()
	{
		import('@.ORG.Image');
		Image::buildImageVerify(4,1,'png');
	}
	
	/**
	 * 退出
	 */
	public function logout(){
		session_unset();
		session_destroy();
		$this->redirect('Admin/Xkuser/login');
	}
	
}