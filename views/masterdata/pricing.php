<?php
use yii\data\ArrayDataProvider;
use kartik\grid\GridView;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\LookupOptions;
use yii\helpers\ArrayHelper;
use kartik\alert\Alert;
use yii\widgets\Pjax;
use yii\bootstrap\Modal;
use yii\helpers\Url;
?>
<!--  View For Pricing screen-->
<div class="col-md-12">


	<div class="row dashboard-container">

		<!--  For Bread Crumb-->
		<div class="blue-breadcrumb col-md-12 padding-0">
			<a class="breadcrumb-back-btn"
				href="<?php echo Yii::$app->getUrlManager()->getBaseUrl().Yii::$app->params['dashboard_url']; ?>">
				<i class="fa fa-angle-left" aria-hidden="true"></i>
			</a>
			<div class="breadcrumb-description">
				<span class="">Master Data &#62; System Pricing </span>

			</div>

		</div>

		<!-- End For Bread Crumb-->
	</div>

	<!--  Container Start-->
	<div class="container">
		<div class="page-content col-md-12">
			<div class="col-md-12  padding-0 alert-div">
<?php
if ($flash = Yii::$app->session->getFlash ( 'success' )) {
	
	echo Alert::widget ( [ 
			'type' => Alert::TYPE_SUCCESS,
			'icon' => 'glyphicon glyphicon-ok-sign',
			'body' => $flash,
			'delay' => 0 
	] );
}
?>

<?php
if ($flash = Yii::$app->session->getFlash ( 'error' )) {
	
	echo Alert::widget ( [ 
			'type' => Alert::TYPE_DANGER,
			'icon' => 'glyphicon glyphicon-remove-sign',
			'body' => $flash,
			'delay' => 0 
	] );
}
?>
</div>

<?php Pjax::begin(['timeout' => 5000,'id' => 'form-pjax']); ?>
			<div
				class="col-md-12 pull-left border-ddd widget padding-15 width-100">
				<div class="col-md-12 profile-pic-background padding-6">
					<?php $form = ActiveForm::begin(['enableClientValidation' => false,'options' => ['enctype' => 'multipart/form-data','validateOnSubmit' => true,'enableAjaxValidation' => false,'data-pjax' => true ]]); ?>
					<div class="col-md-3">
					
					<?php echo $form->field($model_search_pricing, 'module_id',[
                 
                    'labelOptions' => [ 'class' => 'color-white' ]
    ])->dropDownList(ArrayHelper::map(LookupOptions::find()->where(['option_type'=>2,'option_status'=>1])->All(), 'option_id', 'option_value'), ['onchange'=>'this.form.submit()']); ?>
						
					</div>
					<?php ActiveForm::end(); ?>
					
					
					<div class="col-md-9 margin-top-30" align="right">
						<div class="form-group ">
							<a 
								class="btn  btn-modal-blue" onclick="showaddmodal();">Add</a>
						</div>
					</div>

				</div>

				<div class="">
			<?php
			
			$gridColumns = [ 
					// ['class' => 'yii\grid\SerialColumn'],
					
					[ 
							'attribute' => 'client_number',
							'headerOptions' => [ 
									'class' => 'blue-grid-head' 
							],
							'format' => 'raw',
							
							'value' => function ($model, $key, $index) {

								return '<a class="update-dialog color-blue" data-form-id="'.$model['client_number'].'^'.$model['module_id'].'"><u>'.$model['client_number'].'</u></a>';
							},
							'label' => 'Client #' 
					],
					[ 
							'attribute' => 'basic',
							'headerOptions' => [ 
									'class' => 'blue-grid-head' 
							],
							'label' => 'Basic' ,
							'value' => function ($model, $key, $index) {
								return Yii::$app->formatter->asCurrency($model['basic'],'$');
							}
					],
					[ 
							'attribute' => 'full_service',
							'headerOptions' => [ 
									'class' => 'blue-grid-head' 
							],
							'label' => 'Full Service',
							'value' => function ($model, $key, $index) {
								return Yii::$app->formatter->asCurrency($model['full_service'],'$');
							}
					],
					[ 
							'attribute' => 'bulk',
							'headerOptions' => [ 
									'class' => 'blue-grid-head' 
							],
							'label' => 'Bulk',
							'value' => function ($model, $key, $index) {
								return Yii::$app->formatter->asCurrency($model['bulk'],'$');
							} 
					] 
			];
			echo GridView::widget ( [ 
					'dataProvider' => $dataProvider,
					// 'filterModel' => $searchModel,
					'columns' => $gridColumns,
					'containerOptions' => [ 
							'style' => 'overflow: auto' 
					], // only set when $responsive = false
					
					'toolbar' => [ ],
					
					'pjax' => true,
					'bordered' => true,
					'striped' => true,
					'condensed' => false,
					'responsive' => true,
					'hover' => true,
					
					// 'floatHeader' => true,
					// 'floatHeaderOptions' => ['scrollingTop' => true],
					'showPageSummary' => false,
					'panel' => [ 
							'heading' => false,
							'type' => GridView::TYPE_PRIMARY,
							'footer' => false 
					] 
			] );
			
			?>
			</div>



			</div>
			<?php Pjax::end(); ?>
		</div>
	</div>
	<!--  Container End-->

</div>
</div>

<div class="modal fade" id="add_pricing_details" role="dialog"
	aria-labelledby="myModalLabel" aria-hidden="true"
	data-backdrop="static" data-keyboard="false" style="display: none;">
	<div class="modal-dialog ">
				 <?php $form = \kartik\form\ActiveForm::begin(['action'=>'addsystempricing','enableClientValidation' => false],['options' => ['enctype' => 'multipart/form-data']]); ?>
					<div class="modal-content">
			<div class="modal-header modal-header-color">

				<button type="button"
					class="close-modal modal-opacity close-modal-blue"
					data-dismiss="modal" aria-hidden="true">X</button>
				<h4 class="modal-title color-white" id="myModalLabel">Add System
					Pricing</h4>
			</div>
			<div class="modal-body row">

			



				<div class="col-md-12 padding-0">
					<div class="col-md-6">
						<div class="form-group field-systempricing-basic required">
							<label class="form-control-label" for="systempricing-basic">Basic</label>
							
							<div class="input-group"><span class="input-group-addon">$</span>
							<input type="text" id="systempricing-basic" class="form-control price"
								name="SystemPricing[basic]" maxlength="15" aria-required="true">

							
							</div>
							<div class="help-block"></div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group field-systempricing-full_service required">
							<label class="form-control-label"
								for="systempricing-full_service">Full Service</label> 
								<div class="input-group"><span class="input-group-addon">$</span>
								<input
								type="text" id="systempricing-full_service" class="form-control price"
								name="SystemPricing[full_service]" maxlength="15"
								aria-required="true">

							
							</div>
							<div class="help-block"></div>
						</div>
					</div>
				</div>

				<div class="col-md-12 padding-0">
					<div class="col-md-6">
						<div class="form-group field-systempricing-bulk required">
							<label class="form-control-label" for="systempricing-bulk">Bulk</label>
							<div class="input-group"><span class="input-group-addon">$</span>
							<input type="text" id="systempricing-bulk" class="form-control price"
								name="SystemPricing[bulk]" maxlength="15" aria-required="true">

							
							</div>
							<div class="help-block"></div>
						</div>
						<div class="form-group field-systempricingsearch-module_id">

							<input type="hidden" id="systempricing-module_id"
								class="form-control" name="SystemPricing[module_id]"
								value="<?php echo $model_search_pricing->module_id; ?>">

							<div class="help-block"></div>
						</div>
					</div>

				</div>

			

			</div>

			<div class="modal-footer footer-background">
				<?= Html::submitButton('Save', ['class' => 'btn btn-modal-blue','onclick'=>'return validateaddpricing();']) ?> <a
					href="#" class="btn btn-default" data-dismiss="modal"> Cancel </a>

			</div>
		</div>
						<?php \kartik\form\ActiveForm::end(); ?>
					</div>

</div>



<div class="modal fade" id="update_pricing_details" role="dialog"
	aria-labelledby="myModalLabel" aria-hidden="true"
	data-backdrop="static" data-keyboard="false" style="display: none;">
	<div class="modal-dialog ">
				 <?php $form = ActiveForm::begin(['action'=>'updatesystempricing'],['options' => ['enctype' => 'multipart/form-data']]); ?>
				
					<div class="modal-content">
			<div class="modal-header modal-header-color">

				<button type="button"
					class="close-modal modal-opacity close-modal-blue"
					data-dismiss="modal" aria-hidden="true">X</button>
				<h4 class="modal-title color-white" id="myModalLabel">Update System
					Pricing</h4>
			</div>
			<div class="modal-body row">





				<div class="col-md-12 padding-0">
					<div class="col-md-6">
						<div class="form-group field-systempricing-update-basic required">
							<label class="form-control-label" for="systempricing-basic">Basic</label>
							
							<div class="input-group"><span class="input-group-addon">$</span>
							<input type="text" id="systempricing-update-basic" class="form-control price"
								name="SystemPricing[basic]" maxlength="15" aria-required="true">

							
							</div>
							<div class="help-block"></div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group field-systempricing-update-full_service required">
							<label class="form-control-label"
								for="systempricing-full_service">Full Service</label> 
								<div class="input-group"><span class="input-group-addon">$</span>
								<input
								type="text" id="systempricing-update-full_service" class="form-control price"
								name="SystemPricing[full_service]" maxlength="15"
								aria-required="true">

							
							</div>
							<div class="help-block"></div>
						</div>
					</div>
				</div>

				<div class="col-md-12 padding-0">
					<div class="col-md-6">
						<div class="form-group field-systempricing-update-bulk required">
							<label class="form-control-label" for="systempricing-bulk">Bulk</label>
							<div class="input-group"><span class="input-group-addon">$</span>
							<input type="text" id="systempricing-update-bulk" class="form-control price"
								name="SystemPricing[bulk]" maxlength="15" aria-required="true">

							
							</div>
							<div class="help-block"></div>
						</div>
						<div class="form-group field-systempricingsearch-module_id">

							<input type="hidden" id="systempricing-update-module_id"
								class="form-control" name="SystemPricing[module_id]"
								value="">
							<input type="hidden" id="systempricing-update-client_number"
								class="form-control" name="SystemPricing[client_number]"
								value="">
								
							<div class="help-block"></div>
						</div>
					</div>

				</div>




			</div>

			<div class="modal-footer footer-background">
				<?= Html::submitButton('Update', ['class' => 'btn btn-modal-blue','onclick'=>'return validateupdatepricing();']) ?> <a
					href="#" class="btn btn-default" data-dismiss="modal"> Cancel </a>

			</div>
		</div>
						<?php ActiveForm::end(); ?>
					</div>

</div>
<?php


$this->registerJs('$(".update-dialog").click(function(){
   
	form_data = $(this).attr("data-form-id");
	intValArray=form_data.split(\'^\');
    //load ajax and show model 
	client_number = intValArray[0];
	module_id = intValArray[1];
    $.post( "'.Url::toRoute("pricing").'", {client_number:client_number,module_id:module_id}, function( data ) {
	obj = jQuery.parseJSON( data );

	if(obj.success)
	{
	field_data = obj.success;
	basic = field_data.basic;
	bulk = field_data.bulk;
	full_service = field_data.full_service;
	module_id	= field_data.module_id;
	client_number	= field_data.client_number;

	$("#systempricing-update-basic").val(basic);
	$("#systempricing-update-bulk").val(bulk);
	$("#systempricing-update-full_service").val(full_service);
	$("#systempricing-update-module_id").val(module_id);
	$("#systempricing-update-client_number").val(client_number);

    $("#update_pricing_details").modal("show");
	}else
	{


	}

    });  });
');?>