<?php
/* @var $this StdnewsController */
/* @var $model Stdnews */

$this->breadcrumbs=array(
	'Stdnews'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Stdnews', 'url'=>array('index')),
	array('label'=>'Manage Stdnews', 'url'=>array('admin')),
);
?>

<h1>Create Stdnews</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>