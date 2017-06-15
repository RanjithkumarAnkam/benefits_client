<?php
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use kartik\grid\GridView;
use SebastianBergmann\CodeCoverage\Report\PHP;
use app\models\States;
use kartik\alert\Alert;
use app\components\EncryptDecryptComponent;
use yii\web\View;
?>

<?php $permissions = Yii::$app->session['permissions']; ?>

<style>
.select2-search__field{
	color:black;
}
</style>
<section class="page-content padding-0">
	<div class="page-content-inner">

		<!-- Dashboard -->
		<div class="dashboard-container">


			<div class="blue-breadcrumb col-md-12 padding-0">
				<a class="breadcrumb-back-btn" onclick="history.go(-1)"> <i
					class="fa fa-angle-left" aria-hidden="true"></i>
				</a>
				<div class="breadcrumb-description">
					<!--<span class="">New &#62; <?php //if(!empty($firm_id)){?>Update Firm<?php //}else{?>Create Firm<?php //}?></span> -->
					<span class="">New &#62; <span style="padding:0;vertical-align:baseline;" id="add_update_firm_label"></span></span>

				</div>

			</div>
		</div>

		<div class="container">
			<div class="page-content col-md-12">
				<div class="">
					<div class="">
<div class="col-md-12 alert-div padding-0">
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
						<div class="col-md-12 border-ddd widget padding-15">

							

							<div>
								<ul class="nav nav-tabs mb-4 blue-main-nav" role="tablist">
									<li class="nav-item" ><a id="anchor-pb-1"
										class="nav-link  color-white" data-target="#home5"
										data-toggle="tab" onclick="changeCreateFirmText();" role="tab"
										aria-expanded="true">Firm Details <span
											class="fa fa-info-circle information-icon"
											title="Firm details" data-container="body"
											data-toggle="popover-hover" data-placement="right"
											data-content="<?php if(empty($firm_id)){ ?>Enter in the<?php }else{ ?> Update <?php } ?> basic details of the firm. "></span>
									</a></li>
									<li class="nav-item  cursor-nodrop" id="firm_users" <?php if(empty($firm_id)){?> data-toggle="tooltip" data-placement="bottom" title="First enter Firm details." <?php }?>>
									<a
										id="anchor-pb-4" class="nav-link color-white pointer-disable"
										<?php if(!empty($firm_id)){ ?> data-target="#profile5" data-toggle="tab"
										onclick="changeCreateFirmUserText();" role="tab" aria-expanded="false" <?php } ?>>Firm
											Users <span class="fa fa-info-circle information-icon"
											title="Firm Users" data-container="body"
											data-toggle="popover-hover" data-placement="right"
											data-content="<?php if(empty($firm_id)){ ?>Enter in the<?php }else{ ?> Update <?php } ?> the basic details of the firm user."></span>
									</a></li>

								</ul>
								<div class="tab-content blue-main-nav-content ">
									<div class="tab-pane" id="home5" role="tabcard"
										aria-expanded="true">
										 
										<?php $form = ActiveForm::begin(['action' => $model->isNewRecord ? '/user/firmuser' : '/user/firmuser?id='.$firm_id.'', 'id' => 'forum_post', 'method' => 'post',]); ?>
										<div class="col-md-12 padding-15 border-ddd"
											style="border-top: none; border-bottom: none;">
											<div class="">

												<div class="col-md-8 padding-0">


													<div class="col-md-12 padding-0 margin-bottom-20">
														<fieldset class="fieldset-box">

															<legend>Firm Details</legend>
															<div class="col-md-12 ">

																<div class="form-group ">
																	<label class="form-control-label" for="l0">Firm Name *</label>
																	<?= $form->field($model, 'firm_name', ['inputOptions' => ['class' => 'form-control','tabindex'=>'1','onkeypress'=>'return firmname(event);',]])->textInput(['maxlength' => true])->label(false); ?>
																</div>

															</div>


															<div class="col-md-12 p-0">
															<div class="col-md-6 ">
																<div class="form-group ">
																	<label class="form-control-label" for="l0">Business
																		Address 1*</label>
																	<?= $form->field($model, 'address_1', ['inputOptions' => ['class' => 'form-control firmname','tabindex'=>'1','onkeypress'=>'return firmname(event);',]])->textInput(['maxlength' => true])->label(false); ?>
																</div>

															</div>
															<div class="col-md-6 ">

																<div class="form-group ">
																	<label class="form-control-label" for="l0">Business
																		Address 2</label>
																	<?= $form->field($model, 'address_2', ['inputOptions' => ['class' => 'form-control firmname','tabindex'=>'1','onkeypress'=>'return firmname(event);',]])->textInput(['maxlength' => true])->label(false); ?>
																</div>

															</div>
															</div>
															
															
															
														
															<div class="col-md-12 p-0">
															<div class="col-md-6  ">

																<div class="form-group ">
																	<label class="form-control-label" for="l0">City *</label>
																	<?= $form->field($model, 'city', ['inputOptions' => ['class' => 'form-control alpha','tabindex'=>'1']])->textInput(['maxlength' => true])->label(false); ?>
																</div>

															</div>
															<div class="col-md-6  ">

																<div class="form-group ">
																	<label class="form-control-label" for="l0">State *</label>
																	<?php
																	
																	$states = States::find ()->all ();
																	$stateList = ArrayHelper::map ( $states, 'state_id', 'state_name' );
																	
																	echo $form->field ( $model, 'state', [ 
																			'inputOptions' => [ 
																					'class' => 'form-control' ,'tabindex'=>'1',
																			] 
																	] )->dropDownList ( $stateList, [ 
																			'prompt' => 'Select' 
																	] )->label ( false );
																	?>
																</div>


															</div>
															</div>
															
															<div class="col-md-12 p-0">
															<div class="col-md-6  ">

																<div class="form-group ">
																	<label class="form-control-label" for="l0">Zip Code*</label>
																	<?= $form->field($model, 'zip', ['inputOptions' => ['class' => 'form-control numbers','tabindex'=>'1']])->textInput(['maxlength' => 5])->label(false); ?>
																</div>


															</div>
															<div class="col-md-6 ">

																<div class="form-group ">
																	<label class="form-control-label" for="l0">Website</label>
																	<?= $form->field($model, 'website', ['inputOptions' => ['class' => 'form-control','tabindex'=>'1']])->textInput(['maxlength' => true])->label(false); ?>
																</div>

															</div>
															</div>
															<div class="col-md-12 p-0">
															<div class="col-md-6 ">

																<div class="form-group row">
																	<div class="col-md-12 ">
																		<label class="form-control-label" for="l0">Phone *</label>
																		<?= $form->field($model, 'phone', ['inputOptions' => ['class' => 'form-control us-phone-mask-input','tabindex'=>'1']])->textInput(['maxlength' => true])->label(false); ?>
																	</div>
																</div>


															</div>

															<div class="col-md-6  ">


																<!--<div class="form-group field-firms-locations">
																	<label class="form-control-label" for="l0">Firm
																		Locations * <span
																		class="fa fa-info-circle information-icon"
																		title="Firm Locations" data-container="body"
																		data-toggle="popover-hover" data-placement="right"
																		data-content="Enter in the various firm locations.  These locations will later be used when entering your firm users to associate which of your users are from which locations."></span>
																	</label> 
																	
																	<select class="form-control height-120 select2 select-border  locations" multiple id="firm_locations" name="firm_locations[]">
																	<?php //if(!empty($firm_locations)){
																		//foreach($firm_locations as $location){
																		?>
																	<option value="<?php// echo $location->location_id; ?>" selected><?php// echo $location->location_name; ?></option>
																	<?php //}} ?>
																	</select>
																	<input type="text" value="<?php //echo $location_name;?>" class="form-control hidden" id="firm_locations_hidden" name="firm_locations_hidden" placeholder="">
																	<div class="help-block"></div>
																</div> -->


																<!--<div class="form-group field-firms-locations">
																	
																	
																	<label class="form-control-label" for="l0">Firm
																		Locations * <span
																		class="fa fa-info-circle information-icon"
																		title="Firm Locations" data-container="body"
																		data-toggle="popover-hover" data-placement="right"
																		data-content="Enter in the various firm locations.  These locations will later be used when entering your firm users to associate which of your users are from which locations."></span>
																	</label>
																	
																	<?php 
																	/*$selected = array();
																	if(!empty($firm_locations)){
																		
																	
																	
																	foreach($firm_locations as $locations){
																		
																		//array_push($selected,'9');
																		$selected[$locations->location_id] = array('selected' => 'selected');
																			
																	}
																	/*
																	$selected   = array(
																				  '9' => array('selected' => 'selected'),
																				  '10' => array('selected' => 'selected'),
																				);*/
																/*	$firm_locations = ArrayHelper::map ( $firm_locations, 'location_id', 'location_name' );
																	
																	}
																	
																	
																	echo $form->field ( $model, 'firm_locations[]', [
																		'inputOptions' => [
																		'class' => 'form-control select2','tabindex'=>'1', 
																		'multiple' => true,
																		'selected' => 'selected',
																		'name'=>'firm_locations[]',
																		]
																		] )->dropDownList ( $firm_locations ,array( 'options'=>$selected))->label ( false );
																		
																	*/?>

																</div>-->

																<div class="form-group field-firms-locations">
																	
																	
																	<label class="form-control-label" for="l0">Firm
																		Locations * <span
																		class="fa fa-info-circle information-icon"
																		title="Firm Locations" data-container="body"
																		data-toggle="popover-hover" data-placement="right"
																		data-content="Enter in the various firm locations.  These locations will later be used when entering your firm users to associate which of your users are from which locations."></span>
																	</label>
																	<?php if($model->isNewRecord){?>
																	 <span class="hide" id="span_location_id">
																	<?php 
																	$selected = array();
																	if(!empty($firm_locations) ){
																		
																	
																	
																	foreach($firm_locations as $locations){
																		
																		//array_push($selected,'9');
																		$selected[$locations->location_id] = array('selected' => 'selected');
																			
																	}
																	/*
																	$selected   = array(
																				  '9' => array('selected' => 'selected'),
																				  '10' => array('selected' => 'selected'),
																				);*/
																	$firm_locations = ArrayHelper::map ( $firm_locations, 'location_id', 'location_name' );
																}	
																	
																	
																	
																	echo $form->field ( $model, 'firm_locations[]', [
																		'inputOptions' => [
																		'class' => 'form-control select2','tabindex'=>'1', 
                                                                       
																		'multiple' => true,
																		'selected' => 'selected',
																		'name'=>'firm_locations[]',
																		]
																		] )->dropDownList ( $firm_locations ,array( 'options'=>$selected))->label ( false );
																		
																								
																								?>
 </span>
															
																	<div id="input_location-id">
																		<div class="form-group field-firms-firm_locations required">
																			<input type="text" class="form-control" id="firms-firm_location" onblur="showAddtionallocation();" name="firm_locations[]" value="">
																			<div class="help-block"></div>
																			</div>
																			</div>
																			
																	
																</div>
																	
																	<?php }else{?>
																		<?php 
																	$selected = array();
																	if(!empty($firm_locations) && !empty($firm_id)){
																		
																	
																	
																	foreach($firm_locations as $locations){
																		
																		//array_push($selected,'9');
																		$selected[$locations->location_id] = array('selected' => 'selected');
																			
																	}
																	/*
																	$selected   = array(
																				  '9' => array('selected' => 'selected'),
																				  '10' => array('selected' => 'selected'),
																				);*/
																	$firm_locations = ArrayHelper::map ( $firm_locations, 'location_id', 'location_name' );
																
																	}
																	
																	
																	echo $form->field ( $model, 'firm_locations[]', [
																		'inputOptions' => [
																		'class' => 'form-control select2','tabindex'=>'1', 
                                                                       
																		'multiple' => true,
																		'selected' => 'selected',
																		'name'=>'firm_locations[]',
																		]
																		] )->dropDownList ( $firm_locations ,array( 'options'=>$selected))->label ( false );
																		
																							
																								?>
																	<?php }?>

																	
																	
																	<div class="row <?php if(empty($firm_locations)){?>hide<?php }?>" id="label_additional_locations">
																	<div class="form-group col-md-12 " align="right">
																		<label><a onclick="addLocation();" class="color-blue"><u  tabindex="1">Add
																					Additional Locations</u></a></label>
																	</div>
																</div>

																<div class=" hide" id="add_location">
																	<div class="form-group">
																		<label class="form-control-label" for="l0">New
																			Location</label> <input type="text" onkeypress="return firmname(event);",
																			id="input_add_location" class="form-control firmname"
																			Placeholder="">
																	</div>
																	<div class="col-md-12 padding-0" align="right">
																		<button type="button" class="btn  btn-modal-blue" id="add_location_button"
																			onclick="addLocationsOnebyOne();">Add</button>
																		<button class="btn btn-default"
																			onclick="addLocation();" type="button">Close</button>
																	</div>
																</div>
															</div>
															</div>
															
															
															<div class="col-md-12 ">
														
															
															
															
															<div class="col-md-6 ">
															<label class="mt-checkbox mt-checkbox-outline margin-bottom-10">
																Same as Business Address  
																<input type="checkbox" value="1" name="billing_address_check" class="billing-address-check" tabindex="1"> <span></span>
															</label>
															</div>
														</div>
														
														<div class="col-md-12 p-0">
															<div class="col-md-6 ">
																<div class="form-group ">
																	<label class="form-control-label" for="l0">Billing
																		Address 1*</label>
																	<?= $form->field($model, 'billing_address_1', ['inputOptions' => ['class' => 'form-control firmname','tabindex'=>'1','onkeypress'=>'return firmname(event);',]])->textInput(['maxlength' => true])->label(false); ?>
																</div>

															</div>
															<div class="col-md-6 ">

																<div class="form-group ">
																	<label class="form-control-label" for="l0">Billing
																		Address 2</label>
																	<?= $form->field($model, 'billing_address_2', ['inputOptions' => ['class' => 'form-control firmname','tabindex'=>'1','onkeypress'=>'return firmname(event);',]])->textInput(['maxlength' => true])->label(false); ?>
																</div>

															</div>
															</div>
															
															
															
														
															<div class="col-md-12 p-0">
															<div class="col-md-6  ">

																<div class="form-group ">
																	<label class="form-control-label" for="l0">Billing City *</label>
																	<?= $form->field($model, 'billing_city', ['inputOptions' => ['class' => 'form-control alpha','tabindex'=>'1']])->textInput(['maxlength' => true])->label(false); ?>
																</div>

															</div>
															<div class="col-md-6  ">

																<div class="form-group ">
																	<label class="form-control-label" for="l0">Billing State *</label>
																	<?php
																	
																	$states = States::find ()->all ();
																	$stateList = ArrayHelper::map ( $states, 'state_id', 'state_name' );
																	
																	echo $form->field ( $model, 'billing_state', [ 
																			'inputOptions' => [ 
																					'class' => 'form-control' ,'tabindex'=>'1',
																			] 
																	] )->dropDownList ( $stateList, [ 
																			'prompt' => 'Select' 
																	] )->label ( false );
																	?>
																</div>


															</div>
															</div>
															
															<div class="col-md-12 p-0">
															<div class="col-md-6  ">

																<div class="form-group ">
																	<label class="form-control-label" for="l0">Billing Zip Code*</label>
																	<?= $form->field($model, 'billing_zip', ['inputOptions' => ['class' => 'form-control numbers','tabindex'=>'1']])->textInput(['maxlength' => 5])->label(false); ?>
																</div>


															</div>
															
															</div>





														</fieldset>

													</div>

												</div>


												<div class="col-md-4 padding-right-0">
													<div class="col-md-12 padding-0 margin-bottom-20">
														<fieldset class="fieldset-box">

															<legend>Module and Settings</legend>	
								<?php if(Yii::$app->user->identity->usertype ==  1){?>
								<?php if(!empty($firm_id)){ ?>
								
									<div class="form-group ">


																<p>
																	<?php if($model['is_active']){ ?>
																		<a id="modal-alert" href="#alert_firm_screen"
																			class="color-blue" data-toggle="modal" ><u  tabindex="1" id="firm_change_status_label" onclick="deactivateFirm('<?php echo $firm_id;?>');">Deactivate
																				Firm</u></a>
																	<?php } else{?>
																		<a id="modal-alert" href="#alert_firm_screen"
																			class="color-blue" data-toggle="modal" ><u  tabindex="1" id="firm_change_status_label" onclick="activateFirm('<?php echo $firm_id;?>');">Activate
																				Firm</u></a>
																	<?php }?>
																</p>


															</div>
														<?php }?>
														<?php }?>
														
														<div class="form-group">
																<label class="form-control-label" for="l0"><b  tabindex="1">Activate
																		Modules <span
																		class="fa fa-info-circle information-icon"
																		title="Activate Modules" data-container="body"
																		data-toggle="popover-hover" data-placement="right"
																		data-content="Select the modules to activate for this firm."></span>
																</b></label>
																<p>
																<?php 
																$i=0;
																foreach($modules as $module){?>
																	<label class="mt-checkbox mt-checkbox-outline margin-bottom-5"> <?php echo $module['option_value'];?>																		
																		 <input type="checkbox"  tabindex="1"
																		<?php 
																		
																		if(!empty($active_modules_arr)) {if(in_array($module['option_id'],$active_modules_arr)){?>checked<?php }}elseif($i==0){?>checked<?php }?> name="activate_module[<?php echo $module['option_id'];?>]" value="1" > <span></span>
																		
																	</label>
																	<?php 
																	$i++;
																	} ?>
																</p>
															</div>


															<div class="">
																<div class="form-group ">
																	<label class="form-control-label" for="l0">Upload Firm
																		Logo <span class="fa fa-info-circle information-icon" title="Upload Firm Logo" data-container="body" data-toggle="popover-hover" data-placement="right" data-content="Recommended dimensions are 400x400 pixels."></span></label>
																	<?= $form->field($model, 'firm_logo', ['inputOptions' => ['class' => 'form-control','tabindex'=>'1',]])->fileInput(['accept'=>'image/x-png, image/jpeg'])->label(false); ?>
																</div>
															</div>

														</fieldset>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12 padding-0 bg-sky-blue border-ddd"
											align="right" style="border-top: none;">

											<div class="modal-footer-btn padding-15">
													<?= Html::submitButton($model->isNewRecord ? 'Save' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-modal-lightblue' : 'btn btn-primary','tabindex'=>'1',]) ?> <a
													class="btn btn-default"
													href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/search"  tabindex="1">Cancel</a>
											</div>
										</div>
										 <?php ActiveForm::end(); ?>
									</div>
									<div class="tab-pane col-md-12 padding-15 border-ddd"
										id="profile5" role="tabcard" aria-expanded="false"
										style="border-top: none;">
										<div class="">

											<div class="row padding-10" align="right">
												<?php if(!$model->isNewRecord){ ?>
												<?php if(in_array(\app\models\User::FirmUser, $permissions) || in_array(\app\models\User::SuperAdmin, $permissions)  || in_array(\app\models\User::FirmAdministratorAccess, $permissions) ){ ?>
												<?= Html::a('Add New User', ['addfirmuser', 'firmId' => $encrypt_firm_id,'firmUserId'=>''], ['class' => 'btn  btn-modal-blue view']) ?>
												<?php } ?>
												<?php } ?>
											</div>
							<?php
							$gridColumns = [ 
									[ 
											
											'attribute' => 'first_name',
											
											'headerOptions' => [ 
													'class' => 'blue-grid-head' 
											],
											'vAlign' => 'middle',
											'format' => 'raw',
											'filter' => false,
											'hAlign' => GridView::ALIGN_CENTER,
											'value' => function ($model, $key, $index, $widget) {
												$a_first_name = '';
												if (! empty ( $model->first_name )) {
													
													$encrypt_firm_id = EncryptDecryptComponent::encrytedUser ( $model->firm_id );
													$firm_user_id = EncryptDecryptComponent::encrytedUser ( $model->firm_user_id );
													$a_first_name = '<u class="color-blue" >'.Html::a($model->first_name, ['addfirmuser', 'firmId' => $encrypt_firm_id,'firmUserId'=>$firm_user_id], ['class' => 'view color-blue']).'<u>';
													} else {
													$a_first_name = 'NA';
												}
												return $a_first_name;
											} 
									],
									[ 
											
											'attribute' => 'last_name',
											'format' => 'raw',
											'headerOptions' => [ 
													'class' => 'blue-grid-head' 
											],
											'vAlign' => 'middle',
											'hAlign' => GridView::ALIGN_CENTER,
											'filter' => false,
											'value' => function ($model, $key, $index, $widget) {
												$a_first_name = '';
												if (! empty ( $model->last_name )) {
													$encrypt_firm_id = EncryptDecryptComponent::encrytedUser ( $model->firm_id );
													$firm_user_id = EncryptDecryptComponent::encrytedUser ( $model->firm_user_id );
													$a_first_name = '<u class="color-blue" >'.Html::a($model->last_name, ['addfirmuser', 'firmId' => $encrypt_firm_id,'firmUserId'=>$firm_user_id], ['class' => 'view color-blue']).'<u>';
														
												} else {
													$a_first_name = 'NA';
												}
												return $a_first_name;
											} 
									],
									[ 
											
											'attribute' => 'user.username',
											'headerOptions' => [ 
													'class' => 'blue-grid-head' 
											],
											'hAlign' => GridView::ALIGN_CENTER,
											'vAlign' => 'middle',
											'filter' => false 
									],
									[ 
											
											'attribute' => 'phone',
											'headerOptions' => [ 
													'class' => 'blue-grid-head' 
											],
											'hAlign' => GridView::ALIGN_CENTER,
											'format' => 'raw',
											'vAlign' => 'middle',
											'value' => function ($model, $key, $index, $widget) {
																	$phone_number = '';
																	if (! empty ( $model->phone )) {
																		$phone_number = '<span class="us-phone-mask-input">'.$model->phone.'</span>';
																	}
																	else
																	{
																		$phone_number = 'NA';
																	}
																	return $phone_number;
																},
											'filter' => false 
									],
									[ 
											
											'attribute' => 'title',
											'label' => 'Job Title',
											'headerOptions' => [ 
													'class' => 'blue-grid-head' 
											],
											'hAlign' => GridView::ALIGN_CENTER,
											'vAlign' => 'middle',
											'filter' => false 
									],
									[ 
											
											'attribute' => 'is_primary',
											'format' => 'raw',
											'filter' => false,
											'hAlign' => GridView::ALIGN_CENTER,
											'label' => 'Primary Contact',
											'headerOptions' => [ 
													'class' => 'blue-grid-head' 
											],
											'value' => function ($model, $key, $index, $widget) {
												$a_first_name = '';
												if (! empty ( $model->is_primary )) {
													$a_first_name = 'Yes';
												} else {
													$a_first_name = 'No';
												}
												return $a_first_name;
											},
											'vAlign' => 'middle' 
									],
									[ 
											
											'attribute' => 'is_billing',
											'format' => 'raw',
											'filter' => false,
											'hAlign' => GridView::ALIGN_CENTER,
											'label' => 'Billing Contact',
											'headerOptions' => [ 
													'class' => 'blue-grid-head' 
											],
											'value' => function ($model, $key, $index, $widget) {
												$a_first_name = '';
												if (! empty ( $model->is_billing )) {
													$a_first_name = 'Yes';
												} else {
													$a_first_name = 'No';
												}
												return $a_first_name;
											},
											'vAlign' => 'middle' 
									],
									
									[ 
											
											'attribute' => 'actions',
											'attribute' => 'Actions',
											
											'width' => '100px',
											'format' => 'raw',
											'hAlign' => GridView::ALIGN_CENTER,
											'headerOptions' => [ 
													'class' => 'blue-grid-head' 
											],
											'value' => function ($model, $key, $index, $widget) {
												if ($model->is_active == 1) {
													$link = '<div class="col-md-6"><a class="display-block color-blue" href="#resend_activation_link" data-toggle="modal" >
															<img src="/images/resend.png" alt="Resend Email" class="width-16"  data-toggle="tooltip" data-placement="bottom" title="Resend Password" onclick="Sendresendpassword(&#39;' . EncryptDecryptComponent::encrytedUser ( $model->user_id ) . '&#39;);">
															</a></div><div class="col-md-6">
															<a class="display-block color-blue" href="#alert_screen" data-toggle="modal"><img src="/images/deactivate.png"  class="width-20px" data-toggle="tooltip" data-placement="bottom" title="Deactivate User" onclick="ChangeactivateText(&#39;' . EncryptDecryptComponent::encrytedUser ( $model->firm_user_id ) . '&#39;);">
														</a>
															</div>';
												} else {
													$link = '<div class="col-md-6"><a class="display-block color-blue" href="#resend_activation_link" data-toggle="modal" >
															<img src="/images/resend.png" alt="Resend Email" class="width-16"  data-toggle="tooltip" data-placement="bottom" title="Resend Password" onclick="Sendresendpassword(&#39;' . EncryptDecryptComponent::encrytedUser ( $model->user_id ) . '&#39;);">
															</a></div>
															
															<div class="col-md-6">
															
															<a class="display-block color-blue" href="#alert_screen" data-toggle="modal"><img src="/images/activate.png"  class="width-20px" data-toggle="tooltip" data-placement="bottom"  title="Activate User" onclick="ChangeDeactivateText(&#39;' . EncryptDecryptComponent::encrytedUser ( $model->firm_user_id ) . '&#39;);"></a></div>';
												}
												return $link;
											},
											'vAlign' => 'middle' 
									] 
							];
							echo GridView::widget ( [ 
									'dataProvider' => $dataProvider,
									
									'columns' => $gridColumns,
									'containerOptions' => [ 
											'style' => 'overflow: auto' 
									], // only set when $responsive = false
									
									'toolbar' => [
																/*
																'{export}',
																'{toggleData}'*/
															],
									'pjax' => true,
									'pjaxSettings' =>[
									'options'=>[
											'id'=>'firm-user-grid-pjax',
										]
									], 
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
						</div>

					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<script>


function addnewTab(){
	$('#new_firmtab').removeClass('hide');
	$('#update_firmtab').addClass('hide');			
	$('#main-anchor-1').trigger('click');
	$("#anchor-pb-5").trigger('click');
}
function addupdateTab(){
	$('#update_firmtab').removeClass('hide');
	$('#new_firmtab').addClass('hide');
	$('#main-anchor-1').trigger('click');
	$("#anchor-pb-6").trigger('click');
}
function enableFirm(){

	$('#firm_users').removeClass('cursor-nodrop');
	$('#anchor-pb-4').removeClass('pointer-disable');
	$('#anchor-pb-4').attr('data-toggle','tab');
	$('#anchor-pb-1').trigger('click');
	/*$("#anchor-pb-4").trigger('click');*/
}

function enableFirmusers(){

	$('#firm_users').removeClass('cursor-nodrop');
	$('#anchor-pb-4').removeClass('pointer-disable');
	$('#anchor-pb-4').attr('data-toggle','tab');
	$('#main-anchor-1').trigger('click');
	$("#anchor-pb-4").trigger('click');
}

$(document).ready(function(){
$('#new_link').addClass('page-active');
  $("[data-toggle=tooltip]").tooltip();
<?php if(!empty($firm_id) && !empty(\Yii::$app->request->get ('tab')) && Yii::$app->request->get ('tab')==2){ ?>
enableFirmusers();
<?php }elseif(!empty($firm_id)){?>
enableFirm();
<?php }else{ ?>
$('#anchor-pb-1').trigger('click');
<?php }?>
$(document).on('ready pjax:success', function(){
	$('.view').click(function(e){
	       e.preventDefault();
			
			$('#create_firm_user').modal('show').find('.modal-content').load($(this).attr('href'));
			$('.select2').select2();
	      
	});
});	
$('input.billing-address-check').change(function(){

		if ($('input.billing-address-check').is(':checked')) {
			
			var address_1 = '';
			address_1 = $('#firms-address_1').val();
			address_2 = $('#firms-address_2').val();
			city = $('#firms-city').val();
			state = $('#firms-state').val();
			zip = $('#firms-zip').val();
			 $('#firms-billing_address_1').val(address_1);
			 $('#firms-billing_address_2').val(address_2);
			 $('#firms-billing_city').val(city);
			 $('#firms-billing_state').val(state);
			 $('#firms-billing_zip').val(zip);
		}	

		});
		
		$("#input_add_location").keyup(function(event){
    if(event.keyCode == 13){
        $("#add_location_button").click();
    }
});

});


function changeCreateFirmText(){
	<?php if(!empty($firm_id)){ ?>
		$('#add_update_firm_label').html('Update Firm');
	<?php } else{ ?>
		$('#add_update_firm_label').html('Create Firm');
	<?php } ?>
}
function changeCreateFirmUserText(){	
		$('#add_update_firm_label').html('Manage Firm Users');
}
</script>
<?php $this->registerJs('$("select#firms-firm_locations").trigger("change");', View::POS_READY); ?>