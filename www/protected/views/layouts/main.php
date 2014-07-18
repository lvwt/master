<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta content="black" name="apple-mobile-web-app-status-bar-style" />
<meta content="telephone=no" name="format-detection" />
<title>泾干中学</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/general.css" rel="stylesheet">
</head>
<body>

<div class="conter">
	<div class="headtop"><img src="<?php echo Yii::app()->request->baseUrl; ?>/image/logo.png" alt=""></div>
	<div class="nav_menu flclear">
		<a href="<?php echo p()->createUrl('site')?>">首页</a>
		<a href="<?php echo p()->createUrl('site/intro')?>">学校概况</a>
		<a href="<?php echo p()->createUrl('teacher')?>">师资队伍</a>
		<a href="<?php echo p()->createUrl('schpic')?>">学校展示</a>
		<a href="<?php echo p()->createUrl('schnews')?>">教研园地</a>
		<a href="<?php echo p()->createUrl('stdnews')?>">学生天地</a>
		<a href="#">成绩查询</a>
		<a href="<?php echo p()->createUrl('site/adminsion')?>">招生指南</a>
	</div>


<?php echo $content;?>


   	<a href="tel:029-36222215"><div class="footer"><i></i>拨打咨询电话：029-36222215</div>
</div></a>

</body>
</html>