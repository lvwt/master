<?php
/* @var $this GradeController */
/* @var $model Grade */

$this->breadcrumbs=array(
	'Grades'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Grade', 'url'=>array('index')),
	array('label'=>'Manage Grade', 'url'=>array('admin')),
);
?>

<h1>导入成绩表</h1>
<?php $form=$this->beginWidget('CActiveForm', array('id'=>'product-form', 'htmlOptions'=>array('enctype'=>'multipart/form-data'), 'enableAjaxValidation'=>false,)); ?>
<div>
<?php echo $form->labelEx($model,'times');?>
<?php echo $form->FileField($model,'times');?>
<?php echo $form->error($model,'times');?>
</div>
<?php echo CHtml::submitButton('上传'); ?>
<?php $this->endWidget();?>
