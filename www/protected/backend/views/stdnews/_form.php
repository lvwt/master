<?php
/* @var $this NewsController */
/* @var $model News */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'news-form',
	'enableAjaxValidation'=>false,
)); ?>

	<br />

	<?php echo $form->errorSummary($model); ?>

	<div class=>
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class=>
		<?php echo $form->labelEx($model,'content'); ?>
		<?php
        $this->widget('ext.dxheditor.DxhEditor', array(
            'model' =>$model,
            'attribute' => 'content',
        	'name'=>'Stdnews[content]',	
            'htmlOptions' => array('style' => 'width: 95%; height: 300px;'),
            'language' => 'zh-cn', 
            'options' => array(
                'upMultiple' => 5,
                'upLinkUrl' => BASEURL.'/upload.php',
                'upLinkExt' => 'zip,rar,7z,txt,doc,xls,ppt,docx,xlsx,pptx',
                'upImgUrl' => BASEURL.'/upload.php',
                'html5Upload'=>false,
            ),
        ));
        ?>	

	</div>

	<div class="">
		<?php echo $form->labelEx($model,'hits'); ?>
		<?php echo $form->textField($model,'hits'); ?>
		<?php echo $form->error($model,'hits'); ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? '创建' : '保存'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->