<?php
use yii\data\ArrayDataProvider;
use kartik\grid\GridView;
use yii\helpers\Html;
use app\components\EncryptDecryptComponent;
?>
<!--  View For Firm Pricing-->
<div class="col-md-12">


	<div class="row dashboard-container">
		<!--  For Bread Crumb-->
		<div class="blue-breadcrumb col-md-12 padding-0">
			<a class="breadcrumb-back-btn"
				href="<?php echo Yii::$app->getUrlManager()->getBaseUrl().Yii::$app->params['dashboard_url']; ?>">
				<i class="fa fa-angle-left" aria-hidden="true"></i>
			</a>
			<div class="breadcrumb-description">
				<span class="">Master Data &#62; Firm Pricing </span>

			</div>

		</div>
		<!-- End For Bread Crumb-->
	</div>

	<!--  Container Start-->
	<div class="container">
		<div class="page-content col-md-12">

			<div
				class="col-md-12 pull-left border-ddd widget padding-15 width-100">
				<div class="col-md-12 profile-pic-background padding-6">
					<div class="col-md-3">
						<div class="">
							<div class="form-group ">
								<label class="form-control-label color-white" for="l0">Firm Name
									:</label> <select class="form-control" id="firm_value">
									<option value="">Select</option>
								<?php foreach ($firm_list as $each_firm){ ?>  
								<option
										<?php if(!empty(\Yii::$app->request->Get('firm')) && \Yii::$app->request->Get('firm')==EncryptDecryptComponent::encrytedUser($each_firm['firm_id'])) { echo 'selected';} ?>
										value="<?php echo EncryptDecryptComponent::encrytedUser($each_firm['firm_id']); ?>"><?php echo $each_firm['firm_name']; ?> </option> 
								<?php }?></select>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="">
							<div class="form-group ">
								<label class="form-control-label color-white" for="l0">Select a
									Module :</label> <select class="form-control" id="module_value">
									<option value="">Select</option>
							<?php foreach ($modules as $module){?>
							
								  <option
										<?php if(!empty(\Yii::$app->request->Get('module')) && \Yii::$app->request->Get('module')==EncryptDecryptComponent::encrytedUser($module['option_id'])) { echo 'selected';} ?>
										value="<?php echo EncryptDecryptComponent::encrytedUser($module['option_id']); ?>"><?php echo $module['option_value']; ?></option>
						    <?php } ?>  
								</select>
							</div>
						</div>
					</div>


					<div class="col-md-3 margin-top-30">
						<div class="form-group ">
							<label class="form-control-label color-white" for="l0"></label>
							<button class="btn  btn-modal-blue" onclick="clentbyfirm();">Search</button>
							<!--  <a  href="<?php// echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/user/firmuser?id=1"  >Firm Details</a> -->
						</div>
					</div>

				</div>

				<div class="">
			<?php
			
			$historyresultData = [ 
					array (
							"clientname" => "Client 1",
							"notes" => "",
							"amount" => "$2000",
							"paymentdate" => "10-1-2017" 
					) 
			];
			function filter2($item) {
				$mailfilter = Yii::$app->request->getQueryParam ( 'website', '' );
				if (strlen ( $mailfilter ) > 0) {
					if (strpos ( $item ['website'], $mailfilter ) != false) {
						return true;
					} else {
						
						return false;
					}
				} else {
					return true;
				}
			}
			
			$filteredresultData = array_filter ( $resultData, 'filter2' );
			
			$clientno = Yii::$app->request->getQueryParam ( 'clientno', '' );
			$clientname = Yii::$app->request->getQueryParam ( 'clientname', '' );
			$packagetype = Yii::$app->request->getQueryParam ( 'packagetype', '' );
			$billto = Yii::$app->request->getQueryParam ( 'billto', '' );
			$signupdate = Yii::$app->request->getQueryParam ( 'signupdate', '' );
			$price = Yii::$app->request->getQueryParam ( 'price', '' );
			
			$searchModel = [ 
					'clientno' => $clientno,
					'clientname' => $clientname,
					'packagetype' => $packagetype,
					'price' => $price,
					'billto' => $billto,
					'signupdate' => $signupdate 
			];
			
			$dataProvider = new ArrayDataProvider ( [ 
					
					'allModels' => $filteredresultData,
					'sort' => [ 
							'attributes' => [ 
									'client_id',
									'client_name',
									'packagetype',
									'amount',
									'bill_to',
									'created_date' 
							] 
					],
					'pagination' => [ 
							'pageSize' => 10 
					] 
			] );
			
			$historyfilteredresultData = array_filter ( $historyresultData, 'filter2' );
			$dataProvider_payment_history = new ArrayDataProvider ( [ 
					
					'allModels' => $historyfilteredresultData,
					'sort' => [ 
							'attributes' => [ 
									'clientname',
									'paymentdate',
									'amount',
									'notes' 
							] 
					],
					'pagination' => [ 
							'pageSize' => 10 
					] 
			] );
			
			$gridColumns = [ 
					[ 
							'class' => 'yii\grid\SerialColumn' 
					],
					
					[ 
							'attribute' => 'client_id',
							'label' => 'Client # ',
							'headerOptions' => [ 
									'class' => 'blue-grid-head' 
							],
							'filter' => '<input class="form-control" name="clientno" value="' . $searchModel ['clientno'] . '" type="text">',
							
							'value' => function ($model, $key, $index, $widget) {
								// print_r($model); die();
							$firm_name = '<a  onclick="particularclient(\''.EncryptDecryptComponent::encrytedUser($model ['client_id']).'\');" href="#"  class="color-blue"><u>' . $model ['client_id'] . '</u></a>';
								return $firm_name;
							},
							
							'format' => 'raw' 
					
					],
					
					[ 
							'attribute' => 'client_name',
							'headerOptions' => [ 
									'class' => 'blue-grid-head' 
							],
							'filter' => '<input class="form-control" name="website" value="' . $searchModel ['clientname'] . '" type="text">',
							'value' => 'client_name',
							'label' => 'Client Name' 
					],
					[ 
							'attribute' => 'packagetype',
							'headerOptions' => [ 
									'class' => 'blue-grid-head' 
							],
							'filter' => '<input class="form-control" name="website" value="' . $searchModel ['packagetype'] . '" type="text">',
							'value' => 'packagetype',
							'label' => 'Package Type' 
					],
					[ 
							'attribute' => 'amount',
							'headerOptions' => [ 
									'class' => 'blue-grid-head' 
							],
							'filter' => '<input class="form-control" name="website" value="' . $searchModel ['price'] . '" type="text">',
							'value' => 'amount',
							'label' => 'Price Per Month' 
					],
					[ 
							'attribute' => 'bill_to',
							'headerOptions' => [ 
									'class' => 'blue-grid-head' 
							],
							'filter' => '<input class="form-control" name="website" value="' . $searchModel ['billto'] . '" type="text">',
							'value' => 'bill_to',
							'label' => 'Bill To (Firm/Client)' 
					],
					[ 
							'attribute' => 'created_date',
							'headerOptions' => [ 
									'class' => 'blue-grid-head' 
							],
							'filter' => '<input class="form-control" name="website" value="' . $searchModel ['signupdate'] . '" type="text">',
							'value' => 'created_date',
							'label' => 'Signup Date' 
					],
					[ 
							"attribute" => "actions",
							'headerOptions' => [ 
									'class' => 'blue-grid-head' 
							],
							'filter' => false,
							'value' => function ($model, $key, $index, $widget) {
								
								$user_name = '<a id="modal-payment" href="#payment_history" data-toggle="modal"><i class="fa fa-eye padding-5" data-toggle="tooltip" data-placement="Top" title="View" style="color:#27a4b0""></i></a>';
								
								return $user_name;
							},
							'format' => 'raw',
							'label' => 'View Payment History' 
					
					] 
			
			];
			echo GridView::widget ( [ 
					'dataProvider' => $dataProvider,
					// 'filterModel' => $searchModel,
					'columns' => $gridColumns,
					'containerOptions' => [ 
							'style' => 'overflow: auto' 
					], // only set when $responsive = false
					
					'toolbar' => [ 
					],
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
		</div>
	</div>

	<!--  Container End-->
</div>
</div>

<div class="modal fade" id="payment_history" role="dialog"
	aria-labelledby="myModalLabel" aria-hidden="true"
	data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header modal-header-color">

				<button type="button"
					class="close-modal modal-opacity close-modal-blue"
					data-dismiss="modal" aria-hidden="true">X</button>
				<h4 class="modal-title color-white" id="myModalLabel">Payment
					History</h4>
			</div>
			<div class="modal-body">
				<form>
						
						
							
							
							<?php
							
							$historygridColumns = [ 
									[ 
											'class' => 'yii\grid\SerialColumn' 
									],
									
									[ 
											'attribute' => 'clientname',
											'headerOptions' => [ 
													'class' => 'blue-grid-head' 
											],
											// 'filter' => '<input class="form-control" name="website" value="'. $searchModel['clientname'] .'" type="text">',
											'value' => 'clientname',
											'label' => 'Client Name' 
									],
									[ 
											'attribute' => 'paymentdate',
											'headerOptions' => [ 
													'class' => 'blue-grid-head' 
											],
											// 'filter' => '<input class="form-control" name="website" value="'. $searchModel['packagetype'] .'" type="text">',
											'value' => 'paymentdate',
											'label' => 'Pyament Date' 
									],
									[ 
											'attribute' => 'amount',
											'headerOptions' => [ 
													'class' => 'blue-grid-head' 
											],
											// 'filter' => '<input class="form-control" name="website" value="'. $searchModel['price'] .'" type="text">',
											'value' => 'amount',
											'label' => 'Amount' 
									],
									[ 
											'attribute' => 'notes',
											'headerOptions' => [ 
													'class' => 'blue-grid-head' 
											],
											// 'filter' => '<input class="form-control" name="website" value="'. $searchModel['billto'] .'" type="text">',
											'value' => 'notes',
											'label' => 'Notes' 
									] 
							
							];
							
							echo GridView::widget ( [ 
									'dataProvider' => $dataProvider_payment_history,
									// 'filterModel' => $searchModel,
									'columns' => $historygridColumns,
									'containerOptions' => [ 
											'style' => 'overflow: auto' 
									], // only set when $responsive = false
									
									'toolbar' => [ 
									],
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
                         
							</form>

			</div>


			<div class="modal-footer footer-background">

				<button type="button" class="btn btn-default" data-dismiss="modal">
					Close</button>
				<a id="modal_go" class="btn btn-primary"> Save </a>
			</div>
		</div>

	</div>
</div>
<script>
	$(document).ready(function(){
		$('#masterdata_link').addClass('page-active');
	});

	function clentbyfirm(){

		var firm_val = $("#firm_value").val();
		var module = $("#module_value").val();

		url='<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/masterdata/firmpricing?firm='+firm_val+'&module='+module;

		window.location.href = url;
		//alert(firm_val);
		}

	function particularclient(client){

			
		
			var data = 'client_id='+client;
			staticurl='/';
			$.ajax({
			type: 'POST',
		    url: staticurl + "masterdata/particularclientupdate",
			data:data,
			processData:false,
			dataType:'json',
			success:function(data){
				//console.log(data);
				if (data) {

					$("#update_client_billto").val(data.bill_to);
					$("#update_client_package").val(data.package_type);
					$("#update_client_amount").val(data.amount);
					$("#update_particular_client_btn").attr('onclick','updateclientpackage("'+client+'");');
					$("#update_specific_firm_details").modal('show');
					//toastr.success(data.success);	
					
				}else
				{
					toastr.error(data.error);			
				}	
	//	$('#update_specific_firm_details').modal('hide');		
		    },	
		  
		  });	
			
		

		
		}


	function updateclientpackage(client){

			
		
			var data = $("#specific_client").serialize()+'&client_id='+client;
			staticurl='/';
			$.ajax({
			type: 'POST',
		    url: staticurl + "masterdata/updateclientpackage",
			data:data,
			processData:false,
			dataType:'json',
			success:function(data){
			//	console.log(data);
				if (data.success) {

				//	$("#update_client_billto").val(data.bill_to);
				//	$("#update_client_package").val(data.package_type);
				//	$("#update_client_amount").val(data.amount);
				//	$("#update_particular_client_btn").attr('onclick','updateclientpackage('+client+');');
					$("#update_specific_firm_details").modal('hide');
					toastr.success(data.message);	
					
				}else
				{
					toastr.error(data.message);			
				}	
	//	$('#update_specific_firm_details').modal('hide');		
		    },	
		  
		  });	
			
		

		
		}
	</script>
	
	<div class="modal fade" id="update_specific_firm_details" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header modal-header-color">
							 
							<button type="button" class="close-modal modal-opacity close-modal-blue" data-dismiss="modal" aria-hidden="true">
								X
							</button>
							<h4 class="modal-title color-white" id="myModalLabel">
								Update Firm Pricing
							</h4>
						</div>
						<div class="modal-body row">
							
                         <form id="specific_client" name="specific_client">
						 
				
						 
						 <div class="col-md-12 padding-0">
						 <div class="col-md-6">
						   <div class="">
                                <div class=" form-group ">
                                    <label class="form-control-label" for="l0">Package Type *</label>
                                
                            <select class="form-control" name="package" id="update_client_package">
                            <?php foreach ($packages as $package){ ?>
							<option value="<?php echo $package['option_id']; ?>"><?php echo $package['option_value']; ?></option>
							<?php } ?>
							
							</select>
                                </div>
                            </div>
						 </div>
						  <div class="col-md-6">
						  <div class="">
                                <div class="form-group ">
                                    <label class="form-control-label" for="l0">Bill To *</label>
                               
                                <select class="form-control" name="billto" id="update_client_billto"><option value="firm">Firm</option><option value="client">Client</option></select>
                                </div>
                            </div>
						 </div>
						 </div>
						 
						  <div class="col-md-12 padding-0">
						 <div class="col-md-6">
						 <div class="">
                                <div class="form-group ">
                                    <label class="form-control-label" for="l0">Amount *</label>
                                
                              <input type="text" maxlength="5" class="form-control numbers" id="update_client_amount" name="amount" placeholder="" />
                                </div>
                            </div>
						 </div>
						
						 </div>
						   
                        </form>

											
								</div>
								
							<div class="modal-footer footer-background">
							 <button id="update_particular_client_btn"  class="btn btn-modal-blue">
								Save  
							</button>
							 	<a href="#"  class="btn btn-default"  data-dismiss="modal">
								Cancel
							</a>
							
						</div>
						</div>
						
					</div>
					
				</div>	