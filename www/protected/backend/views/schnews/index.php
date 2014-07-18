<?php
/* @var $this SchnewsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Schnews',
);

$this->menu=array(
	array('label'=>'Create Schnews', 'url'=>array('create')),
	array('label'=>'Manage Schnews', 'url'=>array('admin')),
);
?>

<h1>Schnews</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
