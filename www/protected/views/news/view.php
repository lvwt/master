
  <div class="wel count_page">  
    <div class="share_title"><em>首页&gt;</em>新闻资讯</div>    
    <div class="flclear newsinfo_details">
      <div class="newstitle">
        <h1><?php echo $model->title?></h1>
        <span>
       <strong>发布时间：<?php echo substr($model->addtime,0,10)?></strong>
       <strong>点击：<?php echo $model->hits?></strong>
        </span>
      </div>

      <div class="newsdetails">

        <p>
<?php echo $model->content?>
        </p>
      </div>
 

    </div>  


  </div>