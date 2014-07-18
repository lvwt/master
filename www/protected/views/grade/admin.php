<?php
/* @var $this GradeController */
/* @var $model Grade */

$this->breadcrumbs=array(
	'Grades'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Grade', 'url'=>array('index')),
	array('label'=>'Create Grade', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#grade-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Grades</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'grade-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'times',
		'学号',
		'考号',
		'姓名',
		'班级',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
