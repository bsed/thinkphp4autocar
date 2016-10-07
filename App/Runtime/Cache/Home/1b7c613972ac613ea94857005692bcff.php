<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<script src="__TMPL__Public/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript">
$(function(){
	$("p").css("color","red");
    //平台、设备和操作系统
    var system ={
        win : false,
        mac : false,
        xll : false
    };
    //检测平台
    var p = navigator.platform;
    
    system.win = p.indexOf("Win") == 0;
    system.mac = p.indexOf("Mac") == 0;
    system.x11 = (p == "X11") || (p.indexOf("Linux") == 0);
    
    if(!system.win&&!system.mac&&!system.xll){
    	alert(p);
    	$("img").width(200);
    }
}); 
</script>
<title>梧州学院</title>
</head>
<body>
<h2><?php echo ($job["title"]); ?></h2>
<p>创建者：<?php echo ($job["created_by"]); ?></p>
<p>创建时间：<?php echo (date("Y-m-d",$job["created_time"])); ?></p>
<div><?php echo ($job["content"]); ?></div>
</body>
</html>