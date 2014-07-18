
<div class="container-fluid">
<h1>用户管理</h1>

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

											<ul class="nav nav-tabs">
												<li class="active"><a href="<?php echo Yii::app()->createUrl('order/index')?>">未确认订单</a></li>
												<li><a href="<?php echo Yii::app()->createUrl('order/index2')?>">已确认订单</a></li>
												<li><a href="<?php echo Yii::app()->createUrl('order/index3')?>">成功订单</a></li>
												<li><a href="<?php echo Yii::app()->createUrl('order/index4')?>">失败订单</a></li>
												<li><a href="<?php echo Yii::app()->createUrl('order/index5')?>">已取消订单</a></li>
											</ul>
											<div class="tab-content">
												<div class="tab-pane active" id="tab_1_1">
<br />
<div class="btn-group">
<button id="confirm" class="btn green">
确认订单
<i class="icon-plus"></i>
</button>
<button id="invalid" class="btn red" style="margin-left:10px;">
无效订单
<i class="icon-remove-circle"></i>
</button>
</div>								
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
		    				'name'=>'shop',
                            'header'=>'店铺',
		    				'value'=>'$data->shop->name',
		    				'htmlOptions'=>array(
		    						'width'=>'30px',
		    						'align'=>'left',
			    				),
			    		),
                array(
		    				'name'=>'uid',
		    				'value'=>'$data->uid',
		    				'htmlOptions'=>array(
		    						'width'=>'30px',
		    						'align'=>'left',
			    				),
			    		),
                array(
		    				'name'=>'utel',
		    				'value'=>'$data->utel',
		    				'htmlOptions'=>array(
		    						'width'=>'30px',
		    						'align'=>'left',
			    				),
			    		),
                array(
		    				'name'=>'add',
		    				'value'=>'$data->add',
		    				'htmlOptions'=>array(
		    						'width'=>'30px',
		    						'align'=>'left',
			    				),
			    		),
                array(
		    				'name'=>'ps',
		    				'value'=>'$data->ps',
		    				'htmlOptions'=>array(
		    						'width'=>'30px',
		    						'align'=>'left',
			    				),
			    		),
                array(
		    				'name'=>'price',
		    				'value'=>'$data->price',
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
			    				'template'=>'{update}　{delete}',
			    				'updateButtonUrl'=>'Yii::app()->createUrl("user/update",array("id"=>$data->id))',
			    				'updateButtonLabel'=>'编辑',
			    				'viewButtonLabel'=>'查看',
			    				'deleteButtonLabel'=>'删除',
			    		),
	),
)); ?>
												</div>

												<div class="tab-pane" id="tab_1_2">

												</div>

												<div class="tab-pane" id="tab_1_3">

												</div>
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
<script>
     $(function(){
             $("#confirm").click(function(){
                     var checkObj = $(".checker").children();
                     var t = new Array();
                     checkObj.each(function(){
                             if($(this).hasClass('checked'))
                                 t.push($(this).children().val());
                         });
                     $.ajax({
                                 url:'<?php echo $this->createUrl('ajaxConfirm')?>',
                                 data:{i:t.join(',')},
                                 success:function(data){alert()},                             
                         });
                 });

             
         });
</script>

