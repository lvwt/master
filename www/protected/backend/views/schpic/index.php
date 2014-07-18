<?php
/* @var $this SchpicController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Schpics',
);

$this->menu=array(
	array('label'=>'Create Schpic', 'url'=>array('create')),
	array('label'=>'Manage Schpic', 'url'=>array('admin')),
);
?>

<h1>Schpics</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
