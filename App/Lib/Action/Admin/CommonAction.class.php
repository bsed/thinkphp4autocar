<?php
class CommonAction extends Action
{
	
	public function _initialize()
	{
		if(!isset($_COOKIE[C("USER_AUTH_KEY")])) 
		{
			$this->redirect('Admin/Xkuser/login');
		}
	}

}


?>