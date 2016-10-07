<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<title>梧州学院</title>
</head>
<body>
<h1><?php echo ($news["title"]); ?></h1>
<p>来源：<?php echo ($news["created_by"]); ?></p>
<p>发表时间：<?php echo (date("Y-m-d",$news["created_time"])); ?></p>
<div><?php echo ($news["content"]); ?></div>
</body>
</html>