<?php
/* @var $this SchpicController */
/* @var $model Schpic */

$this->breadcrumbs=array(
	'Schpics'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Schpic', 'url'=>array('index')),
	array('label'=>'Manage Schpic', 'url'=>array('admin')),
);
?>

<h1>Create Schpic</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>