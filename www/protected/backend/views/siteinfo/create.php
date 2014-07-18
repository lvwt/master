<?php
/* @var $this SiteinfoController */
/* @var $model Siteinfo */

$this->breadcrumbs=array(
	'Siteinfos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Siteinfo', 'url'=>array('index')),
	array('label'=>'Manage Siteinfo', 'url'=>array('admin')),
);
?>

<h1>Create Siteinfo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>