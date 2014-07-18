<?php
/* @var $this SchnewsController */
/* @var $model Schnews */

$this->breadcrumbs=array(
	'Schnews'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Schnews', 'url'=>array('index')),
	array('label'=>'Manage Schnews', 'url'=>array('admin')),
);
?>

<h1>Create Schnews</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>