<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nick'); ?>
		<?php echo $form->textField($model,'nick',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nick'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tel'); ?>
		<?php echo $form->textField($model,'tel',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'tel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'add'); ?>
		<?php echo $form->textField($model,'add',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'add'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ordersum'); ?>
		<?php echo $form->textField($model,'ordersum'); ?>
		<?php echo $form->error($model,'ordersum'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'moneysum'); ?>
		<?php echo $form->textField($model,'moneysum',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'moneysum'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->