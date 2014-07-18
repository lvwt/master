
<div class="container-fluid" style="padding-left:0px!important;">
<h1>新闻管理</h1>

<p>

</p>

<div class="row-fluid ">
	<div class="span12">
     <!-- BEGIN INLINE TABS PORTLET-->
     <div class="portlet box green">
     <div class="portlet-title">
     <div class="caption"><i class="icon-group"></i></div>
     <div class="tools">
     <a href="javascript:;" class="collapse"></a>
       <a href="#portlet-config" data-toggle="modal" class="config"></a>
								</div>
							</div>
							<div class="portlet-body">
								<div class="row-fluid">
									<div class="span12">
										<!--BEGIN TABS-->
										<div class="tabbable tabbable-custom">
						
							
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-grid',
	'dataProvider'=>$model->search(),
    'pager'=>array(
        'maxButtonCount'=>8,
        'firstPageLabel'=>'首页',
        'lastPageLabel'=>'末页',
        'nextPageLabel'=>'>>',
        'prevPageLabel'=>'<<',
        'header'=>'',
        ),
    'itemsCssClass'=>'table table-striped table-bordered table-hover dataTable',
	'summaryText'=>false,
    'columns'=>array(
		    	array(
				    		'class'=>'CCheckBoxColumn',
				    		'value'=>'$data->id',
				    		'htmlOptions'=>array(
				    		'width'=>'5px',				    		
				    		),
				    	),	
	    		array(
		    				'name'=>'id',
		    				'value'=>'$data->id',
		    				'htmlOptions'=>array(
		    						'width'=>'30px',
		    						'align'=>'left',
			    				),
			    		),
	    		array(
		    				'name'=>'title',
		    				'value'=>'$data->title',
		    				'htmlOptions'=>array(
		    						'width'=>'30px',
		    						'align'=>'left',
			    				),
			    		),
                array(
		    				'name'=>'addtime',
		    				'value'=>'$data->addtime',
		    				'htmlOptions'=>array(
		    						'width'=>'30px',
		    						'align'=>'left',
			    				),
			    		),
                array(
		    				'name'=>'hits',
		    				'value'=>'$data->hits',
		    				'htmlOptions'=>array(
		    						'width'=>'30px',
		    						'align'=>'left',
			    				),
			    		),

              
		/*
		'moneysum',
		*/
                array(
			    				'class'=>'CButtonColumn',
			    				'header'=>'操作',
			    				'template'=>'{view}　 {update}　{delete}',
			    				'updateButtonLabel'=>'编辑',
			    				'viewButtonLabel'=>'查看',
			    				'deleteButtonLabel'=>'删除',
			    		),
	),
)); ?>
											
												<div class="tab-pane" id="tab_1_2">

												</div>

												<div class="tab-pane" id="tab_1_3">

												</div>
										</div>

										<!--END TABS-->

									</div>

									<div class="space10 visible-phone"></div>

									<div class="span6">
									</div>

								</div>

							</div>
						</div>
						<!-- END INLINE TABS PORTLET-->
					</div>
				</div>
</div>