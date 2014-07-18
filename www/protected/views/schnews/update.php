<?php
/* @var $this SchnewsController */
/* @var $model Schnews */

$this->breadcrumbs=array(
	'Schnews'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Schnews', 'url'=>array('index')),
	array('label'=>'Create Schnews', 'url'=>array('create')),
	array('label'=>'View Schnews', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Schnews', 'url'=>array('admin')),
);
?>

<h1>Update Schnews <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>