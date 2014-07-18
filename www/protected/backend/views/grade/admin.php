
<div class="container-fluid" style="padding-left:0px!important;">
<h1>学生成绩</h1>

<p>

</p>


										<div class="tabbable tabbable-custom">

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'grade-grid',
	'dataProvider'=>$model->search(),
    'itemsCssClass'=>'table table-striped table-bordered table-hover dataTable',
	'summaryText'=>false,
	'columns'=>array(
		'姓名',
		'班级',		
		'总分',
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
		
		array(
			'class'=>'CButtonColumn',
			    				'template'=>'{update}{delete}',
			    				'updateButtonLabel'=>'编辑',
			    				'deleteButtonLabel'=>'删除',
		),
	),
)); ?>


</div>