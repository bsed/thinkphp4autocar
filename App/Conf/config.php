<?php
return array(
	'SHOW_PAGE_TRACE'=>false,
	'URL_HTML_SUFFIX'=>'.html',
	
	'URL_MODEL'                 =>  3, 
    'DB_TYPE'                   =>  'mysql',
    'DB_HOST'                   =>  'localhost',
    'DB_NAME'                   =>  'cheguanjia',
    'DB_USER'                   =>  'root',
    'DB_PWD'                    =>  '',
    'DB_PORT'                   =>  '3306',
    'DB_PREFIX'                 =>  'cgj_',
    'APP_GROUP_LIST'            =>  'Home,Admin',
    'DEFAULT_GROUP'             =>  'Home',
	'TAG_NESTED_LEVEL' 	=>5,

	'TOKEN_ON'=>true, 
	'TOKEN_NAME'=>'__hash__', 
	'TOKEN_TYPE'=>'md5', 
	'TOKEN_RESET'=>true,
	'PAGE_SIZE'	=>15,
	
);
?>