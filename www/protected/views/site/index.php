<div class="banner"><img src="<?php echo Yii::app()->request->baseUrl; ?>/image/banner.jpg" alt=""></div>
	<div class="s_title">学生天地<a href="<?php echo p()->createUrl('stdnews')?>">more+</a></div>
	<div class="s_list">
		<ul>
<?php foreach($stdnews as $v){?>
			<li><a href="<?php echo p()->createUrl('stdnews/view',array('id'=>$v->id))?>"><?php echo $v->title?></a></li>
<?php }?>
		</ul>
	</div>
	<div class="s_title">教研园地<a href="<?php echo p()->createUrl('schnews')?>">more+</a></div>
	<div class="s_list">
		<ul>
<?php foreach($schnews as $v){?>
			<li><a href="<?php echo p()->createUrl('schnews/view',array('id'=>$v->id))?>"><?php echo $v->title?></a></li>
<?php }?>
		</ul>
	</div>
	<div class="s_title">学校荣誉<a href="#">more+</a></div>
	<div class="sch_info">
		<p><?php foreach($schpic as $v){?><img src="<?php echo $v->pic?>" alt=""><?php }?></p>
	</div>