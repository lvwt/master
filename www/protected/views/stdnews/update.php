<?php
/* @var $this StdnewsController */
/* @var $model Stdnews */

$this->breadcrumbs=array(
	'Stdnews'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Stdnews', 'url'=>array('index')),
	array('label'=>'Create Stdnews', 'url'=>array('create')),
	array('label'=>'View Stdnews', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Stdnews', 'url'=>array('admin')),
);
?>

<h1>Update Stdnews <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>