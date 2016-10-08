<?php
return array(
	'DEFAULT_THEME'  	=> 	'hc1',
    'THEME_LIST'		=>	'hc1,hc2',
    'TMPL_DETECT_THEME' => 	true, // 自动侦测模板主题

	'URL_HTML_SUFFIX' => '',
	'ADMIN_AUTO_KEY' =>'superadmin', //超级管理员别名
	'USER_AUTH_ON' =>true,             //是否开启验证
	'USER_AUTH_TYPE' =>2,              //验证类型 1登陆验证   2时时验证
	'USER_AUTH_KEY' => 'userId',      //用户认证识别号
	'NOT_AUTH_MODULE' => 'Index,User',  //无需认证的控制器
	'NOT_AUTH_ACTION' =>'',         //无需认证的动作方法
	'RBAC_ROLE_TABLE' => 'hcwx_role',  //角色表名称
	'RBAC_USER_TABLE' => 'hcwx_role_user',    //角色与用户的中间表名称
	'RBAC_ACCESS_TABLE' => 'hcwx_access',     //权限表名称
	'RBAC_NODE_TABLE' => 'hcwx_node',         //节点表名称
	'HEAD_URL'	=>	"http://freefood.qiniudn.com/",
	
	'LISTROWS' => 10 //每页显示的条数
	
);
?>