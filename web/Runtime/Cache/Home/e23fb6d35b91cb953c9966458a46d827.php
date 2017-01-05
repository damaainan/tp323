<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>首页</title>
	<link rel="stylesheet" type="text/css" href="/aws/web/Public/css/page.css">
</head>
<body>
<table>
	
	<?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
	<td><a href="<?php echo U('Hjlist/showPage');?>?id=<?php echo ($vo["id"]); ?>" target="_blank"><?php echo ($vo["id"]); ?></a></td>
	<!-- <td><?php echo ($vo["list"]); ?></td> -->
	<td><?php echo ($vo["qihao"]); ?></td>
	<td><a href="http://<?php echo ($vo["list"]); ?>" target="_blank"><?php echo ($vo["name"]); ?></a></td>
	<!-- <td><a href="<?php echo U();?>" target="_blank">查看详情</a></td> -->
</tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>

<?php echo ($page); ?>

</body>
</html>