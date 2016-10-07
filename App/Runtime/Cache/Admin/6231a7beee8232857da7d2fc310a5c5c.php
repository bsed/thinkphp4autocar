<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<title>梧州学院</title>
</head>
<body>
<h1><?php echo ($job["title"]); ?></h1>
<p>创建者：<?php echo ($job["created_by"]); ?></p>
<p>创建时间：<?php echo (date("Y-m-d",$job["created_time"])); ?></p>
<div><?php echo ($job["content"]); ?></div>
</body>
</html>