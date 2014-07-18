
<div class="sec_title">新闻列表</div>
	<div class="news_list">
		<ul>
<?php foreach($model as $v){?>
			<li><a href="<?php echo p()->createUrl('schnews/view',array('id'=>$v->id))?>"><?php echo $v->title?></a></li>
<?php }?>
		</ul>
	</div>