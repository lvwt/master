<?php
/* @var $this SiteinfoController */
/* @var $model Site */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'site-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row" style="padding-left:5%;">
		<?php
        $this->widget('ext.dxheditor.DxhEditor', array(
            'model' =>$model,
            'attribute' => 'content',
        	'name'=>'Siteinfo[content]',	
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

		<?php echo $form->error($model,'content'); ?>
	</div>
<br />
	<div class="row buttons" style="padding-left:90%;">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : '保存'); ?>
	</div>
<br/>

<?php $this->endWidget(); ?>

</div><!-- form -->