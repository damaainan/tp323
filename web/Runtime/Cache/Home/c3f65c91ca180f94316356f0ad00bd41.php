<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>页面展示</title>
</head>
<body>
	期号：<a href="http://<?php echo ($result["list"]); ?>" target="_blank"><?php echo ($result["qihao"]); ?></a>
	名称：<a href="http://<?php echo ($result["list"]); ?>" target="_blank"><?php echo ($result["name"]); ?></a>
	所属社刊：<?php echo ($result["book"]); ?>
</body>
</html>