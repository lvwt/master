<?php
/* @var $this SchpicController */
/* @var $model Schpic */

$this->breadcrumbs=array(
	'Schpics'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Schpic', 'url'=>array('index')),
	array('label'=>'Create Schpic', 'url'=>array('create')),
	array('label'=>'View Schpic', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Schpic', 'url'=>array('admin')),
);
?>

<h1>Update Schpic <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>