<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>首页</title>
</head>
<body>
<!-- <table> -->
	
<!-- 	<?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
	<td><?php echo ($vo["id"]); ?></td>
	<td><?php echo ($vo["list"]); ?></td>
	<td><?php echo ($vo["qihao"]); ?></td>
	<td><?php echo ($vo["name"]); ?></td>
</tr><?php endforeach; endif; else: echo "" ;endif; ?> -->
<!-- </table> -->

<!-- <?php echo ($page); ?> -->
<a href="<?php echo U('Hjlist/index');?>">沪江社刊管理</a>
<a href="<?php echo U('Game/index');?>">小游戏</a>
<a href="<?php echo U('Game/baidu');?>">百度地图</a>
</body>
</html>