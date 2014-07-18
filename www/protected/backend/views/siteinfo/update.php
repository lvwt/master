<?php
/* @var $this SiteinfoController */
/* @var $model Site */

$this->breadcrumbs=array(
	'Sites'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Site', 'url'=>array('index')),
	array('label'=>'Create Site', 'url'=>array('create')),
	array('label'=>'View Site', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Site', 'url'=>array('admin')),
);
?>

<h1 style="text-align:center"> <?php  if($model->id==1)echo '学校概况';else echo "招生简介" ?></h1>
<br/>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>