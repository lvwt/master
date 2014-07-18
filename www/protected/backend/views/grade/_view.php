<?php
/* @var $this GradeController */
/* @var $data Grade */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('times')); ?>:</b>
	<?php echo CHtml::encode($data->times); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('学号')); ?>:</b>
	<?php echo CHtml::encode($data->学号); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('考号')); ?>:</b>
	<?php echo CHtml::encode($data->考号); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('姓名')); ?>:</b>
	<?php echo CHtml::encode($data->姓名); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('班级')); ?>:</b>
	<?php echo CHtml::encode($data->班级); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('总分')); ?>:</b>
	<?php echo CHtml::encode($data->总分); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('标准分')); ?>:</b>
	<?php echo CHtml::encode($data->标准分); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('班名')); ?>:</b>
	<?php echo CHtml::encode($data->班名); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('校名')); ?>:</b>
	<?php echo CHtml::encode($data->校名); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('语文')); ?>:</b>
	<?php echo CHtml::encode($data->语文); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('班名1')); ?>:</b>
	<?php echo CHtml::encode($data->班名1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('校名1')); ?>:</b>
	<?php echo CHtml::encode($data->校名1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('数学')); ?>:</b>
	<?php echo CHtml::encode($data->数学); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('班名2')); ?>:</b>
	<?php echo CHtml::encode($data->班名2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('校名2')); ?>:</b>
	<?php echo CHtml::encode($data->校名2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('英语')); ?>:</b>
	<?php echo CHtml::encode($data->英语); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('班名3')); ?>:</b>
	<?php echo CHtml::encode($data->班名3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('校名3')); ?>:</b>
	<?php echo CHtml::encode($data->校名3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('物理')); ?>:</b>
	<?php echo CHtml::encode($data->物理); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('班名4')); ?>:</b>
	<?php echo CHtml::encode($data->班名4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('校名4')); ?>:</b>
	<?php echo CHtml::encode($data->校名4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('化学')); ?>:</b>
	<?php echo CHtml::encode($data->化学); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('班名5')); ?>:</b>
	<?php echo CHtml::encode($data->班名5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('校名5')); ?>:</b>
	<?php echo CHtml::encode($data->校名5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('生物')); ?>:</b>
	<?php echo CHtml::encode($data->生物); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('班名6')); ?>:</b>
	<?php echo CHtml::encode($data->班名6); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('校名6')); ?>:</b>
	<?php echo CHtml::encode($data->校名6); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('政治')); ?>:</b>
	<?php echo CHtml::encode($data->政治); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('班名7')); ?>:</b>
	<?php echo CHtml::encode($data->班名7); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('校名7')); ?>:</b>
	<?php echo CHtml::encode($data->校名7); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('历史')); ?>:</b>
	<?php echo CHtml::encode($data->历史); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('班名8')); ?>:</b>
	<?php echo CHtml::encode($data->班名8); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('校名8')); ?>:</b>
	<?php echo CHtml::encode($data->校名8); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('地理')); ?>:</b>
	<?php echo CHtml::encode($data->地理); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('班名9')); ?>:</b>
	<?php echo CHtml::encode($data->班名9); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('校名9')); ?>:</b>
	<?php echo CHtml::encode($data->校名9); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('时间')); ?>:</b>
	<?php echo CHtml::encode($data->时间); ?>
	<br />

	*/ ?>

</div>