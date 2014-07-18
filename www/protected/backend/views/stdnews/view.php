<?php
/* @var $this StdnewsController */
/* @var $model Stdnews */

$this->breadcrumbs=array(
	'Stdnews'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Stdnews', 'url'=>array('index')),
	array('label'=>'Create Stdnews', 'url'=>array('create')),
	array('label'=>'Update Stdnews', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Stdnews', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Stdnews', 'url'=>array('admin')),
);
?>

<h1>View Stdnews #<?php echo $model->id; ?></h1>

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
