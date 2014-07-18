	<div class="sec_title">学校展示</div>
	<div class="school_list flclear">
		<ul>
<?php foreach($model as $v){?>		
			<li><a href="<?php echo Yii::app()->createUrl('master/view',array('id'=>$v['id']))?>"><img src="<?php echo $v['pic']?>" alt=""><span><?php echo $v['name']?></span></a></li>
<?php }?>
		</ul>
	</div>