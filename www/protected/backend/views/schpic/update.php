<?php
/* @var $this MasterController */
/* @var $model Master */

$this->breadcrumbs=array(
	'Masters'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Master', 'url'=>array('index')),
	array('label'=>'Create Master', 'url'=>array('create')),
	array('label'=>'View Master', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Master', 'url'=>array('admin')),
);
?>

<h1>学校展示</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>