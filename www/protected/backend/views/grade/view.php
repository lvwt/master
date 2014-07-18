<?php
/* @var $this GradeController */
/* @var $model Grade */

$this->breadcrumbs=array(
	'Grades'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Grade', 'url'=>array('index')),
	array('label'=>'Create Grade', 'url'=>array('create')),
	array('label'=>'Update Grade', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Grade', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Grade', 'url'=>array('admin')),
);
?>

<h1>View Grade #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'times',
		'学号',
		'考号',
		'姓名',
		'班级',
		'总分',
		'标准分',
		'班名',
		'校名',
		'语文',
		'班名1',
		'校名1',
		'数学',
		'班名2',
		'校名2',
		'英语',
		'班名3',
		'校名3',
		'物理',
		'班名4',
		'校名4',
		'化学',
		'班名5',
		'校名5',
		'生物',
		'班名6',
		'校名6',
		'政治',
		'班名7',
		'校名7',
		'历史',
		'班名8',
		'校名8',
		'地理',
		'班名9',
		'校名9',
		'时间',
	),
)); ?>
