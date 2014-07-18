<?php
/* @var $this SiteinfoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Siteinfos',
);

$this->menu=array(
	array('label'=>'Create Siteinfo', 'url'=>array('create')),
	array('label'=>'Manage Siteinfo', 'url'=>array('admin')),
);
?>

<h1>Siteinfos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
