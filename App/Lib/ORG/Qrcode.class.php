<?php
include "qrlib.php";
class GenerateQrcode
{
	
	public function getQrcode($str,$name){
		$PNG_TEMP_DIR = ROOT_PATH.DIRECTORY_SEPARATOR.'Public'.DIRECTORY_SEPARATOR.'qrcode'.DIRECTORY_SEPARATOR;
		$PNG_WEB_DIR = __ROOT__.'/Public/qrcode/';
		if (!file_exists($PNG_TEMP_DIR))
			mkdir($PNG_TEMP_DIR);
		$filename = $PNG_TEMP_DIR.$name.'.png';
		QRcode::png($str, $filename, 'M', '6', 2);
		return $PNG_WEB_DIR.basename($filename);
	}
}
        
    