
	
<div class="school_survey flclear">
		<ul>
<?php foreach($model as $v){?>			
			<li>
				<img src="<?php echo $v['pic']?>" alt="">
				<span>
					<p><?php echo $v['name']?></p>
					<p><?php echo $v['intro']?></p>

				</span>
			</li>
<?php }?>			
		</ul>
	</div>