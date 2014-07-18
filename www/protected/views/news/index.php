
  <div class="wel count_page">  
    <div class="share_title"><em>首页&gt;</em>新闻资讯</div>    
    <div class="flclear newsinfo_list">
      <ul>
<?php foreach($news as $v){?>
                           <li><a href=<?php echo Yii::app()->createUrl('news/view',array('id'=>$v['id']));?>><span><?php echo $v['title']?></span><em><?php echo substr($v['addtime'],0,10)?></em></a></li>
<?php } ?>
      </ul>

    </div>  
<br />
<div style="float:right;height:20px;margin-right:40px;"><?php $this->widget('CLinkPager',array('pages'=>$page,'nextPageLabel'=>'下一页','header'=>'','prevPageLabel'=>'上一页','firstPageLabel'=>'首页','lastPageLabel'=>'末页',)); ?></div>
<br /><br />

  </div>