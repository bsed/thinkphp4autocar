<?php 
require_once 'vendor/autoload.php';

use JPush\Model as M;
use JPush\JPushClient;
use JPush\Exception\APIConnectionException;
use JPush\Exception\APIRequestException;

class Push{
	
	public function pushMsg(){
		$br = '<br/>';
		$client = new JPushClient("1b6a8f0bf9c72f8f4fb9d06c", "f93c51e4f87f06ff3e6b9947");
		return $client;
		
		
	}
}

?>