<?php
/* @var $this SchnewsController */
/* @var $model Schnews */

$this->breadcrumbs=array(
	'Schnews'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Schnews', 'url'=>array('index')),
	array('label'=>'Create Schnews', 'url'=>array('create')),
	array('label'=>'Update Schnews', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Schnews', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Schnews', 'url'=>array('admin')),
);
?>

<h1>View Schnews #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'content',
		'hits',
		'addtime',
	),
)); ?>
