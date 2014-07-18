<?php
/* @var $this GradeController */
/* @var $model Grade */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'grade-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'times'); ?>
		<?php echo $form->textField($model,'times'); ?>
		<?php echo $form->error($model,'times'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sid'); ?>
		<?php echo $form->textField($model,'sid'); ?>
		<?php echo $form->error($model,'sid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'考号'); ?>
		<?php echo $form->textField($model,'考号',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'考号'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'姓名'); ?>
		<?php echo $form->textField($model,'姓名',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'姓名'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'班级'); ?>
		<?php echo $form->textField($model,'班级',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'班级'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'总分'); ?>
		<?php echo $form->textField($model,'总分'); ?>
		<?php echo $form->error($model,'总分'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'标准分'); ?>
		<?php echo $form->textField($model,'标准分'); ?>
		<?php echo $form->error($model,'标准分'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'班名'); ?>
		<?php echo $form->textField($model,'班名'); ?>
		<?php echo $form->error($model,'班名'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'校名'); ?>
		<?php echo $form->textField($model,'校名'); ?>
		<?php echo $form->error($model,'校名'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'语文'); ?>
		<?php echo $form->textField($model,'语文'); ?>
		<?php echo $form->error($model,'语文'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'班名1'); ?>
		<?php echo $form->textField($model,'班名1'); ?>
		<?php echo $form->error($model,'班名1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'校名1'); ?>
		<?php echo $form->textField($model,'校名1'); ?>
		<?php echo $form->error($model,'校名1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'数学'); ?>
		<?php echo $form->textField($model,'数学'); ?>
		<?php echo $form->error($model,'数学'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'班名2'); ?>
		<?php echo $form->textField($model,'班名2'); ?>
		<?php echo $form->error($model,'班名2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'校名2'); ?>
		<?php echo $form->textField($model,'校名2'); ?>
		<?php echo $form->error($model,'校名2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'英语'); ?>
		<?php echo $form->textField($model,'英语'); ?>
		<?php echo $form->error($model,'英语'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'班名3'); ?>
		<?php echo $form->textField($model,'班名3'); ?>
		<?php echo $form->error($model,'班名3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'校名3'); ?>
		<?php echo $form->textField($model,'校名3'); ?>
		<?php echo $form->error($model,'校名3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'物理'); ?>
		<?php echo $form->textField($model,'物理'); ?>
		<?php echo $form->error($model,'物理'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'班名4'); ?>
		<?php echo $form->textField($model,'班名4'); ?>
		<?php echo $form->error($model,'班名4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'校名4'); ?>
		<?php echo $form->textField($model,'校名4'); ?>
		<?php echo $form->error($model,'校名4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'化学'); ?>
		<?php echo $form->textField($model,'化学'); ?>
		<?php echo $form->error($model,'化学'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'班名5'); ?>
		<?php echo $form->textField($model,'班名5'); ?>
		<?php echo $form->error($model,'班名5'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'校名5'); ?>
		<?php echo $form->textField($model,'校名5'); ?>
		<?php echo $form->error($model,'校名5'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'生物'); ?>
		<?php echo $form->textField($model,'生物'); ?>
		<?php echo $form->error($model,'生物'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'班名6'); ?>
		<?php echo $form->textField($model,'班名6'); ?>
		<?php echo $form->error($model,'班名6'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'校名6'); ?>
		<?php echo $form->textField($model,'校名6'); ?>
		<?php echo $form->error($model,'校名6'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'政治'); ?>
		<?php echo $form->textField($model,'政治'); ?>
		<?php echo $form->error($model,'政治'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'班名7'); ?>
		<?php echo $form->textField($model,'班名7'); ?>
		<?php echo $form->error($model,'班名7'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'校名7'); ?>
		<?php echo $form->textField($model,'校名7'); ?>
		<?php echo $form->error($model,'校名7'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'历史'); ?>
		<?php echo $form->textField($model,'历史'); ?>
		<?php echo $form->error($model,'历史'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'班名8'); ?>
		<?php echo $form->textField($model,'班名8'); ?>
		<?php echo $form->error($model,'班名8'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'校名8'); ?>
		<?php echo $form->textField($model,'校名8'); ?>
		<?php echo $form->error($model,'校名8'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'地理'); ?>
		<?php echo $form->textField($model,'地理'); ?>
		<?php echo $form->error($model,'地理'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'班名9'); ?>
		<?php echo $form->textField($model,'班名9'); ?>
		<?php echo $form->error($model,'班名9'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'校名9'); ?>
		<?php echo $form->textField($model,'校名9'); ?>
		<?php echo $form->error($model,'校名9'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'时间'); ?>
		<?php echo $form->textField($model,'时间'); ?>
		<?php echo $form->error($model,'时间'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->