<?php
$backend = dirname(dirname(__FILE__));
$frontend = dirname($backend);
Yii::setPathOfAlias('backend',$backend);
$frontendArray = require_once($frontend.'/config/main.php');
$backendArray = array(
    'language'=>'zh_cn',
	'name'=>'学校管理',
    'basePath'=>$frontend,
    'viewPath'=>$backend.'/views',
    'controllerPath'=>$backend.'/controllers',
    'runtimePath'=>$backend.'/runtime',
	'import'=>array(
		'application.models.*',
		'application.components.*',
        'backend.models.*',
        'backend.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'123_gii',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
	),

	// application components
	'components'=>array(

		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
        'yexcel' => array(
            'class' => 'ext.yexcel.Yexcel'
                          ),
	),


	'params'=>CMap::mergeArray(require($frontend.'/config/params.php'),require($backend.'/config/params.php')),
);
return CMap::mergeArray($frontendArray,$backendArray);