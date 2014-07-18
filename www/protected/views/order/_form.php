<?php
/* @var $this OrderController */
/* @var $model Order */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'order-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'sid'); ?>
		<?php echo $form->textField($model,'sid'); ?>
		<?php echo $form->error($model,'sid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'uid'); ?>
		<?php echo $form->textField($model,'uid'); ?>
		<?php echo $form->error($model,'uid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'uname'); ?>
		<?php echo $form->textField($model,'uname',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'uname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'utel'); ?>
		<?php echo $form->textField($model,'utel',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'utel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'add'); ?>
		<?php echo $form->textField($model,'add',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'add'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'time'); ?>
		<?php echo $form->textField($model,'time'); ?>
		<?php echo $form->error($model,'time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ps'); ?>
		<?php echo $form->textArea($model,'ps',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ps'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'payway'); ?>
		<?php echo $form->textField($model,'payway'); ?>
		<?php echo $form->error($model,'payway'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'state'); ?>
		<?php echo $form->textField($model,'state'); ?>
		<?php echo $form->error($model,'state'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->