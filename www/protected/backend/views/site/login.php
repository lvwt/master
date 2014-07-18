<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>登陆</title>
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
	<!-- BEGIN PAGE LEVEL STYLES -->
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/media/css/login-soft.css" rel="stylesheet" type="text/css"/>
	<!-- END PAGE LEVEL STYLES -->
	<link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/media/image/favicon.ico" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
	<!-- BEGIN LOGO -->
	<div class="logo">
     
	</div>
	<!-- END LOGO -->
	<!-- BEGIN LOGIN -->
	<div class="content">
		<!-- BEGIN LOGIN FORM --><?php $form=$this->beginWidget('CActiveForm', array(	'id'=>'login-form',	'enableClientValidation'=>true,	'htmlOptions'=>array('class'=>"form-vertical login-form"),	'clientOptions'=>array(		'validateOnSubmit'=>true,	),)); ?>
			<h3 class="form-title">登陆账户</h3>
			<div class="alert alert-error hide">
				<button class="close" data-dismiss="alert"></button>
				<span>密码</span>
			</div>
			<div class="control-group">
				<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
				<label class="control-label visible-ie8 visible-ie9">用户名</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-user"></i>						<?php echo $form->textField($model,'username',array('class'=>'m-wrap placeholder-no-fix','placeholder'=>'用户名')); ?>
					</div>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label visible-ie8 visible-ie9">密码</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-lock"></i>						<?php echo $form->passwordField($model,'password',array('class'=>'m-wrap placeholder-no-fix','placeholder'=>'密码')); ?>
					</div>
				</div>
			</div>
			<div class="form-actions">

				<button  class="btn blue pull-right">
				登陆 <i class="m-icon-swapright m-icon-white"></i>
				</button>            
			</div>
	

		<?php $this->endWidget(); ?>
		<!-- END LOGIN FORM -->        
		
	</div>
	<!-- END LOGIN -->
	<!-- BEGIN COPYRIGHT -->
	<div class="copyright">
		2014 & 西安格昂
	</div>
	<!-- END COPYRIGHT -->
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
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/media/js/jquery.validate.min.js" type="text/javascript"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/media/js/jquery.backstretch.min.js" type="text/javascript"></script>
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/media/js/app.js" type="text/javascript"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/media/js/login-soft.js" type="text/javascript"></script>      
	<!-- END PAGE LEVEL SCRIPTS --> 
	<script>
		jQuery(document).ready(function() {     
		  App.init();

		});
	</script>
	<!-- END JAVASCRIPTS -->
<script type="text/javascript">  var _gaq = _gaq || [];  _gaq.push(['_setAccount', 'UA-37564768-1']);  _gaq.push(['_setDomainName', 'keenthemes.com']);  _gaq.push(['_setAllowLinker', true]);  _gaq.push(['_trackPageview']);  (function() {    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })();</script></body>
<!-- END BODY -->
</html>