<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nick')); ?>:</b>
	<?php echo CHtml::encode($data->nick); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tel')); ?>:</b>
	<?php echo CHtml::encode($data->tel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('add')); ?>:</b>
	<?php echo CHtml::encode($data->add); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ordersum')); ?>:</b>
	<?php echo CHtml::encode($data->ordersum); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('moneysum')); ?>:</b>
	<?php echo CHtml::encode($data->moneysum); ?>
	<br />


</div>