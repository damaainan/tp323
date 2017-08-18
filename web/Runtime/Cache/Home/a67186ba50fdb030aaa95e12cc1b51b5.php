<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>首页</title>
	<link rel="stylesheet" type="text/css" href="/tp323/web/Public/css/main.css">
	
	<link rel="stylesheet" type="text/css" href="/tp323/web/Public/bootstrap/css/bootstrap.min.css">
	<script src="/tp323/web/Public/bootstrap/js/bootstrap.min.js"></script>
	
</head>
<body>
<!-- <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation"> -->
     <!--  <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav> -->

<div class="container">
	
	<ul class="list-group" >
		<li><a href="<?php echo U('Hjlist/index');?>">沪江社刊管理</a></li>
		<li><a href="<?php echo U('Game/index');?>">小游戏</a></li>
		<li><a href="<?php echo U('Game/baidu');?>">百度地图</a></li>
	</ul>



</div>
</body>
</html>