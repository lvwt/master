<div class="sec_title">成绩查询</div>
<?php if(empty($model)){?>
                        <p style="text-align:center;"><br/>你好, <?php echo Std::model()->findByAttributes(array('sid'=>$user->sid))->name;?> ,考试成绩尚未公布。<br/></p><p><br/></p>
<?php }else{?>     
<div class="scorehead">姓名：<?php echo $model->姓名?>&nbsp;&nbsp;时间：<?php echo $model->times?>&nbsp;&nbsp;考号 ：<?php echo $model->考号?></div>
	<div class="score_list">
		<ul>
			<li>课程名称</li>
			<li>考试成绩</li>
            <li>班级排名</li>
			<li>学校排名</li>
		</ul>
		<ul class="scoreul">
			<li>总分</li>
			<li><?php echo $model->总分?></li>
			<li><?php echo $model->班名?></li>
			<li><?php echo $model->校名?></li>
		</ul>
		<ul class="scoreul">
			<li>语文</li>
			<li><?php echo $model->语文?></li>
			<li><?php echo $model->班名1?></li>
			<li><?php echo $model->校名1?></li>
		</ul>
		<ul class="scoreul">
			<li>数学</li>
			<li><?php echo $model->数学?></li>
			<li><?php echo $model->班名2?></li>
			<li><?php echo $model->校名2?></li>
		</ul>
		<ul class="scoreul">
			<li>英语</li>
			<li><?php echo $model->英语?></li>
			<li><?php echo $model->班名3?></li>
			<li><?php echo $model->校名3?></li>
		</ul>
		<ul class="scoreul">
			<li>物理</li>
			<li><?php echo $model->物理?></li>
			<li><?php echo $model->班名4?></li>
			<li><?php echo $model->校名4?></li>
		</ul>
		<ul class="scoreul">
			<li>化学</li>
			<li><?php echo $model->化学?></li>
			<li><?php echo $model->班名5?></li>
			<li><?php echo $model->校名5?></li>
		</ul>
		<ul class="scoreul">
			<li>生物</li>
			<li><?php echo $model->生物?></li>
			<li><?php echo $model->班名6?></li>
			<li><?php echo $model->校名6?></li>
		</ul>
		<ul class="scoreul">
			<li>政治</li>
			<li><?php echo $model->政治?></li>
			<li><?php echo $model->班名7?></li>
			<li><?php echo $model->校名7?></li>
		</ul>
		<ul class="scoreul">
			<li>历史</li>
			<li><?php echo $model->历史?></li>
			<li><?php echo $model->班名8?></li>
			<li><?php echo $model->校名8?></li>
		</ul>
		<ul class="scoreul">
			<li>地理</li>
			<li><?php echo $model->地理?></li>
			<li><?php echo $model->班名9?></li>
			<li><?php echo $model->校名9?></li>
		</ul>

	</div>
<?php }?>