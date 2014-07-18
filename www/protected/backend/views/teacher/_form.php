<?php
/* @var $this MasterController */
/* @var $model Master */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'master-form',
	'enableAjaxValidation'=>false,
    'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'intro'); ?>
		<?php echo $form->textArea($model,'intro',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'intro'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'pic'); ?>
		<?php echo $form->textField($model,'pic',array('size'=>60,'maxlength'=>255)); ?>
        <?php echo CHtml::activeFileField($model,'pic'); ?>
		<?php echo $form->error($model,'pic'); ?>
	</div>

<?php if(!$model->isNewRecord) {?>
<div>
<?php echo '图片预览' ?><br />
<?php echo '<img src="'.$model->pic.'" style="width:200px;height:200px;"/>'; ?>
</div>
<br />
<?php }?>

	<div class=" buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? '创建' : '保存'); ?>
	</div>
<br />
<?php $this->endWidget(); ?>

</div><!-- form -->