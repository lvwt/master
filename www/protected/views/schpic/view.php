<?php
/* @var $this SchpicController */
/* @var $model Schpic */

$this->breadcrumbs=array(
	'Schpics'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Schpic', 'url'=>array('index')),
	array('label'=>'Create Schpic', 'url'=>array('create')),
	array('label'=>'Update Schpic', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Schpic', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Schpic', 'url'=>array('admin')),
);
?>

<h1>View Schpic #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'intro',
		'content',
		'pic',
	),
)); ?>
