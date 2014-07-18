<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->

<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->

<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->

<head>

	<meta charset="utf-8" />

	<title>Metronic | Layouts - Blank Page</title>

	<meta content="width=device-width, initial-scale=1.0" name="viewport" />

	<meta content="" name="description" />

	<meta content="" name="author" />

	<!-- BEGIN GLOBAL MANDATORY STYLES -->

	<link href="<?php echo Yii::app()->request->baseUrl; ?>/media/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/media/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>

	<link href="<?php echo Yii::app()->request->baseUrl; ?>/media/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

	<link href="<?php echo Yii::app()->request->baseUrl; ?>/media/css/style-metro.css" rel="stylesheet" type="text/css"/>

	<link href="<?php echo Yii::app()->request->baseUrl; ?>/media/css/style.css" rel="stylesheet" type="text/css"/>

	<link href="<?php echo Yii::app()->request->baseUrl; ?>/media/css/style-responsive.css" rel="stylesheet" type="text/css"/>

	<link href="<?php echo Yii::app()->request->baseUrl; ?>/media/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>

	<link href="<?php echo Yii::app()->request->baseUrl; ?>/media/css/uniform.default.css" rel="stylesheet" type="text/css"/>

	<!-- END GLOBAL MANDATORY STYLES -->

	<link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/media/image/favicon.ico" />

</head>

<!-- END HEAD -->

<!-- BEGIN BODY -->

<body class="page-header-fixed">

	<!-- BEGIN HEADER -->

	<div class="header navbar navbar-inverse navbar-fixed-top">

		<!-- BEGIN TOP NAVIGATION BAR -->

		<div class="navbar-inner">

			<div class="container-fluid">

				<!-- BEGIN LOGO -->

				<a class="brand" href="index.html">

				<img src="<?php echo Yii::app()->request->baseUrl; ?>/media/image/logo.png" alt="logo" />

				</a>

				<!-- END LOGO -->

				<!-- BEGIN RESPONSIVE MENU TOGGLER -->

         

				<!-- END RESPONSIVE MENU TOGGLER -->            

				<!-- BEGIN TOP NAVIGATION MENU -->              

				<ul class="nav pull-right">



					<!-- BEGIN USER LOGIN DROPDOWN -->

					<li class="dropdown user">

						<a href="#" class="dropdown-toggle" data-toggle="dropdown">

						<img alt="" src="media/image/avatar1_small.jpg" />

						<span class="username">管理员</span>

						<i class="icon-angle-down"></i>

						</a>

						<ul class="dropdown-menu">

							<li><a href="<?php echo Yii::app()->createUrl('site/') ?>"><i class="icon-user"></i>  个人账户</a></li>

							<li><a href="<?php echo Yii::app()->createUrl('site/logout') ?>"><i class="icon-key"></i> 退出登录</a></li>

						</ul>

					</li>

					<!-- END USER LOGIN DROPDOWN -->

				</ul>

				<!-- END TOP NAVIGATION MENU --> 

			</div>

		</div>

		<!-- END TOP NAVIGATION BAR -->

	</div>

	<!-- END HEADER -->

	<!-- BEGIN CONTAINER -->   

	<div class="page-container row-fluid">

		<!-- BEGIN SIDEBAR -->

		<div class="page-sidebar nav-collapse collapse">

			<!-- BEGIN SIDEBAR MENU -->        

			<ul class="page-sidebar-menu">

				<li>

					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->

					<div class="sidebar-toggler hidden-phone"></div>

					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->

				</li><br />

				<li class="<?php echo Yii::app()->controller->id=='grade'?'active':'start'?>">
					<a href="">
					<i class="icon-home"></i>
					<span class="title">成绩管理</span>
					<span class="selected"></span>
					<span class="arrow"></span>
					</a>
					<ul class="sub-menu">
						<li >
							<a href="<?php echo Yii::app()->createUrl('grade/create')?>">
							成绩导入</a>
						</li>
						<li >
							<a href="<?php echo Yii::app()->createUrl('grade/admin')?>">
							成绩管理</a>
						</li>
					</ul>
				</li>
				<li class="<?php echo Yii::app()->controller->id=='stdnews'?'active':'start'?>">
					<a href="">
					<i class="icon-home"></i>
					<span class="title">学生天地</span>
					<span class="selected"></span>
					<span class="arrow"></span>
					</a>
					<ul class="sub-menu">
						<li >
							<a href="<?php echo Yii::app()->createUrl('stdnews/create')?>">
							添加</a>
						</li>
						<li >
							<a href="<?php echo Yii::app()->createUrl('stdnews/admin')?>">
							管理</a>
						</li>
					</ul>
				</li>
				<li class="<?php echo Yii::app()->controller->id=='schnews'?'active':'start'?>">
					<a href="">
					<i class="icon-home"></i>
					<span class="title">教研园地</span>
					<span class="selected"></span>
					<span class="arrow"></span>
					</a>
					<ul class="sub-menu">
						<li >
							<a href="<?php echo Yii::app()->createUrl('schnews/create')?>">
							添加</a>
						</li>
						<li >
							<a href="<?php echo Yii::app()->createUrl('schnews/admin')?>">
							管理</a>
						</li>
					</ul>
				</li>
				<li class="<?php echo Yii::app()->controller->id=='teacher'?'active':'start'?>">
					<a href="">
					<i class="icon-home"></i>
					<span class="title">师资队伍</span>
					<span class="selected"></span>
					<span class="arrow"></span>
					</a>
					<ul class="sub-menu">
						<li >
							<a href="<?php echo Yii::app()->createUrl('teacher/create')?>">
							新增</a>
						</li>
						<li>
							<a href="<?php echo Yii::app()->createUrl('teacher/admin')?>">
							管理</a>
						</li>
					</ul>
				</li>
				<li class="<?php echo Yii::app()->controller->id=='schpic'?'active':'start'?>">
					<a href="">
					<i class="icon-home"></i>
					<span class="title">学校展示</span>
					<span class="selected"></span>
					<span class="arrow"></span>
					</a>
					<ul class="sub-menu">
						<li >
							<a href="<?php echo Yii::app()->createUrl('schpic/create')?>">
							新增</a>
						</li>
						<li>
							<a href="<?php echo Yii::app()->createUrl('schpic/admin')?>">
							管理</a>
						</li>
					</ul>
				</li>
				<li class="<?php echo Yii::app()->controller->id=='siteinfo'?'active':'start'?>">
					<a href="">
					<i class="icon-home"></i>
					<span class="title">学校信息</span>
					<span class="selected"></span>
					<span class="arrow"></span>
					</a>
					<ul class="sub-menu">
						<li >
							<a href="<?php echo Yii::app()->createUrl('siteinfo/update',array('id'=>1))?>">
							学校概况</a>
						</li>
						<li >
							<a href="<?php echo Yii::app()->createUrl('siteinfo/update',array('id'=>2))?>">
							招生简介</a>
						</li>
					</ul>
				</li>
			</ul>

			<!-- END SIDEBAR MENU -->

		</div>

		<!-- END SIDEBAR -->

		<!-- BEGIN PAGE -->

        <?php echo $content; ?>

		<!-- END PAGE -->    

	</div>

	<!-- END CONTAINER -->

	<!-- BEGIN FOOTER -->

	<div class="footer">

		<div class="footer-inner">

			 西安格昂

		</div>

		<div class="footer-tools">

			<span class="go-top">

			<i class="icon-angle-up"></i>

			</span>

		</div>

	</div>

	<!-- END FOOTER -->

	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->

	<!-- BEGIN CORE PLUGINS -->

	<script src="<?php echo Yii::app()->request->baseUrl; ?>/media/js/jquery-1.10.1.min.js" type="text/javascript"></script>

	<script src="<?php echo Yii::app()->request->baseUrl; ?>/media/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>

	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->

	<script src="<?php echo Yii::app()->request->baseUrl; ?>/media/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      

	<script src="<?php echo Yii::app()->request->baseUrl; ?>/media/js/bootstrap.min.js" type="text/javascript"></script>

	<!--[if lt IE 9]>

	<script src="<?php echo Yii::app()->request->baseUrl; ?>/media/js/excanvas.min.js"></script>

	<script src="<?php echo Yii::app()->request->baseUrl; ?>/media/js/respond.min.js"></script>  

	<![endif]-->   

	<script src="<?php echo Yii::app()->request->baseUrl; ?>/media/js/jquery.slimscroll.min.js" type="text/javascript"></script>

	<script src="<?php echo Yii::app()->request->baseUrl; ?>/media/js/jquery.blockui.min.js" type="text/javascript"></script>  

	<script src="<?php echo Yii::app()->request->baseUrl; ?>/media/js/jquery.cookie.min.js" type="text/javascript"></script>

	<script src="<?php echo Yii::app()->request->baseUrl; ?>/media/js/jquery.uniform.min.js" type="text/javascript" ></script>

	<!-- END CORE PLUGINS -->

	<script src="<?php echo Yii::app()->request->baseUrl; ?>/media/js/app.js"></script>      

	<script>

		jQuery(document).ready(function() {    

		   App.init();

		});

	</script>

	<!-- END JAVASCRIPTS -->

<script type="text/javascript">  var _gaq = _gaq || [];  _gaq.push(['_setAccount', 'UA-37564768-1']);  _gaq.push(['_setDomainName', 'keenthemes.com']);  _gaq.push(['_setAllowLinker', true]);  _gaq.push(['_trackPageview']);  (function() {    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })();</script></body>

<!-- END BODY -->

</html>




