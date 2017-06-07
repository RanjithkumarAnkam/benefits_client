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
use yii\helpers\Url;

?>

<div class="col-md-12 ">
                    <div>
                        <ul class="nav nav-tabs mb-4 blue-nav-tabs" role="tablist">
						
						<?php $permissions = Yii::$app->session['permissions'];
				        
							if(in_array(\app\models\User::EditClient, $permissions) || in_array(\app\models\User::FirmAdministratorAccess, $permissions) || in_array(\app\models\User::SuperAdmin, $permissions) ){
						?>
                            <li class="nav-item">
                                <a class="color-black " id="anchor-pb-1" data-target="#home5" data-toggle="tab" href="javascript: void(0);" role="tab" aria-expanded="true" onclick="toggleclient(1)">Client Details
								<i class="fa fa-info-circle" title="Client Details" data-container="body" data-toggle="popover-hover" data-placement="right" data-content="Update basic details of the client company." ></i>
								</a>
                            </li>
							
							<?php } ?>
							
							<?php if(in_array(\app\models\User::ClientUser, $permissions) || in_array(\app\models\User::FirmAdministratorAccess, $permissions) || in_array(\app\models\User::SuperAdmin, $permissions) ){ ?>
							
                            <li class="nav-item "  <?php if(empty($client_id)){?> data-toggle="tooltip" data-placement="bottom" title="First enter Client details." <?php }?>>
                                <a  class="color-black " id="anchor-pb-5" data-target="#profile5" data-toggle="tab" href="javascript: void(0);" role="tab" aria-expanded="false" onclick="toggleclient(2)">Client Users 
								<i class="fa fa-info-circle" title="Client Users" data-container="body" data-toggle="popover-hover" data-placement="right" data-content="Update basic details of the client user." ></i>
								</a>
								
                            </li>
							
							<?php } ?>
                          
                        </ul>
                        <div class="tab-content blue-nav-content">
						
						<?php if(in_array(\app\models\User::EditClient, $permissions) || in_array(\app\models\User::FirmAdministratorAccess, $permissions) || in_array(\app\models\User::SuperAdmin, $permissions) )
						{ ?>
                            <div class="tab-pane col-md-12 padding-15 " id="client-form" role="tabcard" aria-expanded="true" style="border-top:none;">
							<?php $form = ActiveForm::begin(['action'=>Yii::$app->urlManager->createUrl("user/updateclientdetails"),'options' => ['id' => 'client_details_search']]); ?>
							<div class="">
											<div class="col-md-8 padding-0">

												<div class="col-md-12 padding-0 margin-bottom-20">
													<fieldset class="fieldset-box">

														<legend>Client Details</legend>
														<div class="col-md-12 padding-0">
															<div class="col-md-6">
																<div class="form-group ">
																	<label class="form-control-label" for="l0">Firm Name *</label>
																	<?php
																	echo $form->field ( $model, 'add_firm_id', [ 
																			'inputOptions' => [ 
																					'class' => 'form-control edited',
																					'onchange' => 'getSelectedFirmDetails(this.value);' 
																			] 
																	] )->dropDownList ( $firmList, [ 
																			'prompt' => 'Select Firm' 
																	] )->label ( false );
																	?>	
																</div>

															</div>
															<div class="col-md-6">

																<div class="form-group ">
																	<label class="form-control-label" for="l0">Client Name
																		*</label>
																	<?= $form->field($model, 'client_name', ['inputOptions' => ['class' => 'form-control','onkeypress'=>'return firmname(event);',]])->textInput(['maxlength' => true])->label(false); ?>
																</div>

															</div>
														</div>
														<input type="hidden" value="<?php echo $encrypt_client_id;?>" name="encrypt_client_id">
														<div class="col-md-12 padding-0">
															<div class="col-md-6">

																<div class="form-group ">
																	<label class="form-control-label" for="l0">Business
																		Address 1*</label>
																<?= $form->field($model, 'address_1', ['inputOptions' => ['class' => 'form-control','onkeypress'=>'return firmname(event);',]])->textInput(['maxlength' => true])->label(false); ?>
															</div>

															</div>
															<div class="col-md-6">
																<div class="form-group ">
																	<label class="form-control-label" for="l0">Business
																		Address 2 </label>
																<?= $form->field($model, 'address_2', ['inputOptions' => ['class' => 'form-control','onkeypress'=>'return firmname(event);',]])->textInput(['maxlength' => true])->label(false); ?>
															</div>
															</div>
														</div>
														
															<div class="col-md-12 padding-0">
														
															
															<div class="col-md-6">
															<label class="form-control-label" for="l0">Billing
																		Address * </label>
																<?= $form->field($model, 'billing_address', ['inputOptions' => ['class' => 'form-control','onkeypress'=>'return firmname(event);',]])->textInput(['maxlength' => true])->label(false); ?>
															
															</div>
															
															<div class="col-md-6 margin-top-40">
															<label class="mt-checkbox mt-checkbox-outline margin-bottom-10">
																Same as Business Address 1 
																<input type="checkbox" value="1" name="business_address_check" class=" business-address-check"> <span></span>
															</label>
															</div>
														</div>
														
														
														<div class="col-md-12 padding-0">
															<div class="col-md-6">
																<div class="form-group ">
																	<label class="form-control-label" for="l0">City *</label>
																<?= $form->field($model, 'city', ['inputOptions' => ['class' => 'form-control','onkeypress'=>'return alpha(event);',]])->textInput(['maxlength' => true])->label(false); ?>
															</div>
															</div>
															<div class="col-md-6">
																<div class="form-group ">
																	<label class="form-control-label" for="l0">State *</label>
																<?php
																echo $form->field ( $model, 'add_state', [ 
																		'inputOptions' => [ 
																				'class' => 'form-control' 
																		] 
																] )->dropDownList ( $stateList, [ 
																		'prompt' => 'Select' 
																] )->label ( false );
																?>
															</div>
															</div>
														</div>
														<div class="col-md-12 padding-0">
															<div class="col-md-6">

																<div class="form-group ">
																	<label class="form-control-label" for="l0">Zip Code*</label>
																<?= $form->field($model, 'zip', ['inputOptions' => ['class' => 'form-control numbers']])->textInput(['maxlength' => 5])->label(false); ?>
															</div>
															</div>
															<div class="col-md-6">
																<div class="form-group ">
																	<label class="form-control-label" for="l0">Website</label>
																<?= $form->field($model, 'website', ['inputOptions' => ['class' => 'form-control']])->textInput(['maxlength' => true])->label(false); ?>
															</div>
															</div>
														</div>
														<div class="col-md-12 padding-0">
															<div class="col-md-6">
																<div class="form-group row">
																	<div class="col-md-12 ">
																		<div class="col-md-12 padding-0">
																			<div class="col-xs-9 padding-0">
																				<label class="form-control-label" for="l0">Phone *</label>
																			</div>
																			<div class="col-xs-3 padding-right-0 hidden">
																				<label class="form-control-label" for="l0">Extension </label>
																			</div>
																		</div>
																		<div class="col-md-12 padding-0">
																			<div class="col-xs-12 padding-0">
																			<?= $form->field($model, 'phone', ['inputOptions' => ['class' => 'form-control us-phone-mask-input']])->textInput(['maxlength' => true])->label(false); ?>
																		</div>
																			<div class="col-xs-3 padding-right-0 hidden">
																				<input type="text" class="form-control numbers"
																					placeholder="ext" value="040">
																			</div>
																		</div>
																	</div>
																</div>
															</div>

															<div class="col-md-6 hidden">
																<div class="form-group ">
																	<label class="form-control-label" for="l0">Mobile</label>
																	<input type="text"
																		class="form-control us-phone-mask-input" value=""
																		maxlength="14">
																</div>
															</div>

															<div class="col-md-6">
																<div class="form-group ">
																	<label class="form-control-label" for="l0">Upload
																		Client Logo<span class="fa fa-info-circle information-icon" title="Upload Client Logo" data-container="body" data-toggle="popover-hover" data-placement="right" data-content="Recommended dimensions are 400x400 pixels."></span></label>
																<?= $form->field($model, 'company_logo', ['inputOptions' => ['class' => 'form-control','tabindex'=>'1']])->fileInput(['accept'=>'image/x-png, image/jpeg'])->label ( false ); ?>
															</div>

															</div>
														</div>


													</fieldset>
												</div>


												<div class="col-md-12 padding-0 margin-bottom-20">
													<fieldset class="fieldset-box">

														<legend>
															Service Team <i class="fa fa-info-circle margin-left-5"
																title="Service Team" data-container="body"
																data-toggle="popover-hover" data-placement="right"
																data-content="Select the primary team to service this client account."></i>
														</legend>
														<div class="col-md-12 padding-0">
															<div class="col-md-6">
																<div class="form-group ">
																	<label class="form-control-label" for="l0">Primary
																		Consultant*</label> 
																	
																<?php
																if (! empty ( \Yii::$app->request->get () )) {
																	echo $form->field ( $model, 'add_primary_consultant', [ 
																			'inputOptions' => [ 
																					'class' => 'form-control edited',
																					'id' => 'primary_consultant_dd' 
																			] 
																	] )->dropdownList ($firmusersList, [ 
																			'prompt' => 'Select' 
																	] )->label ( false );
																} else {
																	echo $form->field ( $model, 'add_primary_consultant', [ 
																			'inputOptions' => [ 
																					'class' => 'form-control edited',
																					'id' => 'primary_consultant_dd' 
																			] 
																	] )->dropdownList ( [ 
																			'prompt' => 'Select Firm First' 
																	] )->label ( false );
																}
																?>	
															
															
															</div>
															</div>
															<div class="col-md-6">

																<div class="form-group">
																	<label class="form-control-label" for="l0">Primary
																		Account Manager*</label>
																<?php
																if (! empty ( \Yii::$app->request->get () )) {
																	echo $form->field ( $model, 'add_primary_account_manager', [
																			'inputOptions' => [
																			'class' => 'form-control edited',
																			'id' => 'primary_account_manager_dd'
																			]
																			] )->dropdownList ($firmusersList, [
																					'prompt' => 'Select'
																					] )->label ( false );
																} else {
																	echo $form->field ( $model, 'add_primary_account_manager', [ 
																			'inputOptions' => [ 
																					'class' => 'form-control edited',
																					'id' => 'primary_account_manager_dd' 
																			] 
																	] )->dropdownList ( [ 
																			'prompt' => 'Select Firm First' 
																	] )->label ( false );
																}
																?>	
															</div>
															</div>
														</div>
														<div class="col-md-6">

															<div class="form-group">
																<label class="form-control-label" for="l0">Primary
																	Service Rep*</label>
																<?php
																if (! empty ( \Yii::$app->request->get () )) {
																	echo $form->field ( $model, 'add_primary_service_rep', [
																			'inputOptions' => [
																			'class' => 'form-control edited',
																			'id' => 'primary_service_rep_dd'
																			]
																			] )->dropdownList ($firmusersList, [
																					'prompt' => 'Select'
																					] )->label ( false );
																} else {
																	echo $form->field ( $model, 'add_primary_service_rep', [ 
																			'inputOptions' => [ 
																					'class' => 'form-control edited',
																					'id' => 'primary_service_rep_dd' 
																			] 
																	] )->dropdownList ( [ 
																			'prompt' => 'Select Firm First' 
																	] )->label ( false );
																}
																?>	
															</div>
														</div>

													</fieldset>
												</div>

											</div>

											<div class="col-md-4 padding-right-0">

												<div class="col-md-12 padding-0 margin-bottom-20">
													<fieldset class="fieldset-box">

														<legend>Access &amp; Settings</legend>
														<div class="form-group">
															<label class="form-control-label" for="l0">Select
																Employer Size*</label>
															<?php
															echo $form->field ( $model, 'add_employer_size_category', [ 
																	'inputOptions' => [ 
																			'class' => 'form-control' 
																	] 
															] )->dropDownList ( $employersizeList, [ 
																	'prompt' => 'Select' 
															] )->label ( false );
															?>
														</div>

														<div class="form-group ">
															<label class="form-control-label" for="l0">Select
																Industry Code*</label>
																<?php
																
																echo $form->field ( $model, 'add_industry_code', [ 
																		'inputOptions' => [ 
																				'class' => 'form-control' 
																		] 
																] )->dropDownList ( $industryList, [ 
																		'prompt' => 'Select' 
																] )->label ( false );
																?>
														</div>
														<!--<div
															class=" col-md-12 padding-0  height-100 col-xs-hidden"></div>-->
														<div class=" col-md-12 padding-0">
															<label class="form-control-label" for="l0">Bill Client
																Usage to <i class="fa fa-info-circle margin-left-5"
																title="Bill Client Usage to" data-container="body"
																data-toggle="popover-hover" data-placement="right"
																data-content="Select if you would like this module to be billed directly to the client each month or if it should be billed to your firm.  The selection made on client as of the first of each month will be used to generate the billing."></i>
															</label>

															<div class="mt-radio-inline padding-0">
																<label class="mt-radio mt-radio-outline">Firm <input <?php if($model->bill_to == 'firm'){?>checked<?php }?>
																	type="radio" value="firm" name="Clients[bill_to]"/> <span></span>
																</label> <label class="mt-radio mt-radio-outline">
																	Client <input type="radio" value="client"  <?php if($model->bill_to == 'client'){?>checked<?php }?>
																	name="Clients[bill_to]"/> <span></span>
																</label>
															</div>

														</div>



														<div class="">
															<label class="form-control-label" for="l0">Logo to use in
																Reporting <i class="fa fa-info-circle margin-left-5"
																title="Logo to use in Reporting" data-container="body"
																data-toggle="popover-hover" data-placement="right"
																data-content="Select if you would like your firms logo to be used in the client claims reporting, or if you would prefer to use the actual clients logo instead."></i>
															</label>
															<div class="mt-radio-inline  padding-0">
																<label class="mt-radio mt-radio-outline">Use Firm Logo <input <?php if($model->logo_use_type == 'firm'){?>checked<?php }?>
																	type="radio" value="firm" name="Clients[logo_use_type]"> <span></span>
																</label> <label class="mt-radio mt-radio-outline"> Use
																	Client Logo <input type="radio" value="client" <?php if($model->logo_use_type == 'client'){?>checked<?php }?>
																	name="Clients[logo_use_type]"> <span></span>
																</label>
															</div>
															<!--<input type="file" id="input-file-now" class="dropify" />-->
														</div>
													</fieldset>
												</div>

												<div class="col-md-12 padding-0 margin-bottom-20">
													<fieldset class="fieldset-box">

														<legend>
															Client Subscriptions <i
																class="fa fa-info-circle margin-left-5"
																title="Client Subscriptions" data-container="body"
																data-toggle="popover-hover" data-placement="right"
																data-content="Select to activate a module for this client, as well as the service level you would like to use for the client.  To learn more about all service level details, please review the details on the website for a full listing of what is included in each package."></i>
														</legend>
														<div class="form-group">
															<div id="client_form_modules">
															<?php if(!empty($client_id)){?>
																<?php foreach($modules as $module){?>																	
																	<label class="form-control-label"><?php echo $module['option_value'];?></label>
																	<div class="">
																		 <label class="mt-checkbox mt-checkbox-outline"> Activate
																			<input class="client_module_selection input_available_client_packages"   type="checkbox" <?php if($active_modules == $module['option_id']){ ?> checked <?php }?> name="activate_module" value="<?php echo $module['option_id'];?>"> <span></span>
																		</label>
																	</div>
																<?php } ?>
															<?php } else{?>
																<label class="form-control-label">Select Firm First</label>
																<div class="">
																	<!-- <label class="mt-checkbox mt-checkbox-outline"> Activate
																		<input type="checkbox" value="1" name=""
																		<?php //if(!empty($client_id)){?> checked <?php //}?>> <span></span>
																	</label> -->
																</div>
															<?php } ?>
															</div>
															<div id="packages_block" class=" <?php if(empty($client_id)){?> hidden <?php }?> ">
																<div class="mt-radio-inline  padding-0">
																<?php 
																foreach($available_packages as $available_package){ ?>
																	<label class="mt-radio mt-radio-outline"><?php echo $available_package['option_value']; ?> <input class="client_package_selection"
																			type="radio" value="<?php echo $available_package['option_id']; ?>" name="client_activate_module" <?php if(!empty($client_active_modules) && ($client_active_modules->package_type == $available_package['option_id'])){?> checked <?php }?>> <span></span>
																	</label> 
															<?php	}
																
																?>																	
																</div>
															</div>
														</div>

														<div class="form-group  <?php if(empty($client_id)){?> hidden <?php }?>" id="client_num_and_amount_block">
															<div class="row">
																<div class="col-md-12">
																	<div class="pull-left">
																		<label class="margin-bottom-0 margin-right-2">Client#</label>
																		<button type="button" id="no_of_client_for_this_firm"
																			class="btn btn-default cursor-default"><?php if(!empty($client_id)){ echo $client_count; } else {echo '#'; } ?></button>
																	</div>
																	<div class="pull-left margin-left-10">
																		<label class="margin-bottom-0 margin-right-2">$/Mo</label>
																		<button type="button" id="amount_of_client_package_for_this_firm"
																			class="btn btn-default cursor-default"><?php if(!empty($client_active_modules)){ echo '$ '.$client_active_modules->amount; } ?></button>
																	</div>
																	<div>
																		<legend>
																			<i class="fa fa-info-circle margin-left-5"
																				title="Pricing Details" data-container="body"
																				data-toggle="popover-hover" data-placement="right"
																				data-content="Client number is automatically added by the system and then associated with your firm client pricing list.  The client pricing list is the master list used to determine how much will be billed for each of your clients per month, and allows us to easily apply volume discounts.  As an example your price might be $150 per month on the first 10 clients, and then reduce to $125 per month starting with client #11."></i>
																		</legend>
																	</div>
																</div>
															</div>

														</div>
													</fieldset>

												</div>
											</div>
										</div>
								<div class="col-md-12 padding-0 bg-sky-blue border-ddd"
											align="right" style="border-top: none;">

											<div class="modal-footer-btn padding-15">

												<?= Html::submitButton($model->isNewRecord ? 'Save' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-modal-lightblue' : 'btn btn-primary']) ?><a
							class="btn btn-default client-close-btn margin-left-5"
							  >Cancel</a>


											</div>
										</div>										
										<?php ActiveForm::end(); ?>
							</div>
							<?php } ?>
							<?php if(in_array(\app\models\User::ClientUser, $permissions) || in_array(\app\models\User::FirmAdministratorAccess, $permissions) || in_array(\app\models\User::SuperAdmin, $permissions) ){ ?>
							
							 <div class="tab-pane col-md-12 padding-15 " id="client-grid" role="tabcard" aria-expanded="false" style="border-top:none;">
							
							<div class="">
							<div class="row padding-10" align="right">
							
																<?= Html::a('Add New User', ['addclientuser', 'clientId' => $encrypt_client_id,'clientUserId'=>''], ['class' => 'btn  btn-modal-blue view-search-client-user']) ?>
															</div>
															
													<?php 
															$gridColumns = [
															[
																//'class' => 'kartik\grid\EditableColumn',
																'attribute' => 'first_name',
																//'pageSummary' => 'Page Total',
																'vAlign'=>'middle',
																'hAlign' => GridView::ALIGN_CENTER,
																'format'=>'raw',
																'headerOptions' => ['class' => 'blue-grid-head'],
																'value' => function ($model, $key, $index, $widget) {
																	$a_first_name = '';
																	if (! empty ( $model->first_name )) {
																		
																		
													
																	$encrypt_client_id = EncryptDecryptComponent::encrytedUser ( $model->client_id );
																	$client_user_id = EncryptDecryptComponent::encrytedUser ( $model->client_user_id );
																	$a_first_name = '<u class="color-blue" >'.Html::a($model->first_name, ['addclientuser', 'clientId' => $encrypt_client_id,'clientUserId'=>$client_user_id], ['class' => 'view-search-client-user color-blue']).'<u>';
																	}
																	else
																	{
																		$a_first_name = 'NA';
																	}
																	return $a_first_name;
																},
																//'editableOptions'=>['header'=>'Name', 'size'=>'md']
															],
															[
																//'class' => 'kartik\grid\EditableColumn',
																'attribute' => 'last_name',
																'format'=>'raw',
																//'pageSummary' => 'Page Total',
																'vAlign'=>'middle',
																'hAlign' => GridView::ALIGN_CENTER,
																'headerOptions' => ['class' => 'blue-grid-head'],
																'value' => function ($model, $key, $index, $widget) {
																	$a_first_name = '';
																	if (! empty ( $model->last_name )) {
																		
																		$encrypt_client_id = EncryptDecryptComponent::encrytedUser ( $model->client_id );
																		$client_user_id = EncryptDecryptComponent::encrytedUser ( $model->client_user_id );
																	
																		$a_first_name = '<u class="color-blue" >'.Html::a($model->last_name, ['addclientuser', 'clientId' => $encrypt_client_id,'clientUserId'=>$client_user_id], ['class' => 'view-search-client-user color-blue']).'<u>';
																	}
																	else
																	{
																		$a_first_name = 'NA';
																	}
																	return $a_first_name;
																},
																//'editableOptions'=>['header'=>'Name', 'size'=>'md']
															],
														  
															[ 
											
																'attribute' => 'user.username',
																'headerOptions' => [ 
																		'class' => 'blue-grid-head' 
																],
																'vAlign' => 'middle',
																'filter' => false 
														],
															[
																//'class' => 'kartik\grid\EditableColumn',
																'attribute' => 'phone',
																'headerOptions' => ['class' => 'blue-grid-head'],
																'hAlign' => GridView::ALIGN_CENTER,
																//'pageSummary' => 'Page Total',
																'vAlign'=>'middle',
																'format' => 'raw',
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
																	//'editableOptions'=>['header'=>'Name', 'size'=>'md']
															],
															 [
																//'class' => 'kartik\grid\EditableColumn',
																'attribute' => 'title',
																'label' => 'Job Title',
																'headerOptions' => ['class' => 'blue-grid-head'],
																'hAlign' => GridView::ALIGN_CENTER,
																//'pageSummary' => 'Page Total',
																'vAlign'=>'middle',
																	//'editableOptions'=>['header'=>'Name', 'size'=>'md']
															],
															[
																//'class'=>'kartik\grid\BooleanColumn',
																'attribute'=>'is_primary',
																'label' => 'Primary Contact',
																'format'=>'raw',
																'headerOptions' => ['class' => 'blue-grid-head'],
																'hAlign' => GridView::ALIGN_CENTER,
																'value' => function ($model, $key, $index, $widget) {
																	$a_first_name = '';
																	if (! empty ( $model->is_primary )) {
																		$a_first_name = 'Yes';
																	}
																	else
																	{
																		$a_first_name = 'No';
																	}
																	return $a_first_name;
																},
																'vAlign'=>'middle',
															],
															[
																//'class'=>'kartik\grid\BooleanColumn',
																'attribute'=>'is_billing', 
																'label' => 'Billing Contact',
																'format'=>'raw',
																'hAlign' => GridView::ALIGN_CENTER,
																'headerOptions' => ['class' => 'blue-grid-head'],
																'value' => function ($model, $key, $index, $widget) {
																	$a_first_name = '';
																	if (! empty ( $model->is_billing )) {
																		$a_first_name = 'Yes';
																	}
																	else
																	{
																		$a_first_name = 'No';
																	}
																	return $a_first_name;
																},
																'vAlign'=>'middle',
															],
															
															 [
																//'class' => 'kartik\grid\EditableColumn',
																'attribute' => 'actions',
																'attribute' => 'Actions',
																//'pageSummary' => 'Page Total',
																'width'=> '100px',
																'format'=>'raw',
																'headerOptions' => ['class' => 'blue-grid-head'],
																'hAlign' => GridView::ALIGN_CENTER,
																'value' => function ($model, $key, $index, $widget) {
																if ($model->is_active == 1) {
																	$link = '<div class="col-md-6"><a class="display-block color-blue" href="#resend_activation_link" data-toggle="modal" >
																			<img src="/images/resend.png" alt="Resend Email" class="width-16"  data-toggle="tooltip" data-placement="bottom" title="Resend Password" onclick="Sendresendpassword(&#39;' . EncryptDecryptComponent::encrytedUser ( $model->user_id ) . '&#39;);">
																			</a></div><div class="col-md-6">
																			<a class="display-block color-blue" href="#alert_screen" data-toggle="modal"><img src="/images/deactivate.png"  class="width-20px" data-toggle="tooltip" data-placement="bottom" title="Deactivate User" onclick="ChangeactivateclientText(&#39;' . EncryptDecryptComponent::encrytedUser ( $model->client_user_id ) . '&#39;);">
																		</a>
																			</div>';
																} else {
																	$link = '<div class="col-md-6"><a class="display-block color-blue" href="#resend_activation_link" data-toggle="modal" >
																			<img src="/images/resend.png" alt="Resend Email" class="width-16"  data-toggle="tooltip" data-placement="bottom" title="Resend Password" onclick="Sendresendpassword(&#39;' . EncryptDecryptComponent::encrytedUser ( $model->user_id ) . '&#39;);">
																			</a></div>
																			
																			<div class="col-md-6">
																			
																			<a class="display-block color-blue" href="#alert_screen" data-toggle="modal"><img src="/images/activate.png"  class="width-20px" data-toggle="tooltip" data-placement="bottom"  title="Activate User" onclick="ChangeDeactivateclientText(&#39;' . EncryptDecryptComponent::encrytedUser ( $model->client_user_id ) . '&#39;);"></a></div>';
																}
																return $link;
															},
																'vAlign'=>'middle',
																	//'editableOptions'=>['header'=>'Name', 'size'=>'md']
															],
															/*[
																'class' => 'kartik\grid\ActionColumn',
																'dropdown' => false,
																'vAlign'=>'middle',
																'urlCreator' => function($action, $model, $key, $index) { return '#'; },
																'viewOptions'=>['title'=>'title', 'data-toggle'=>'tooltip'],
																'updateOptions'=>['title'=>'title', 'data-toggle'=>'tooltip'],
																'deleteOptions'=>['title'=>'title', 'data-toggle'=>'tooltip'], 
															],
															['class' => 'kartik\grid\CheckboxColumn']*/
														];
														echo GridView::widget([
															'dataProvider' => $dataProvider,
															//'filterModel' =>false,
															'columns' => $gridColumns,
															'containerOptions' => ['style'=>'overflow: auto'], // only set when $responsive = false
														   /* 'beforeHeader'=>[
																[
																	'columns'=>[
																		['content'=>'Header Before 1', 'options'=>['colspan'=>4, 'class'=>'text-center warning']], 
																		['content'=>'Header Before 2', 'options'=>['colspan'=>4, 'class'=>'text-center warning']], 
																		['content'=>'Header Before 3', 'options'=>['colspan'=>3, 'class'=>'text-center warning']], 
																	],
																	'options'=>['class'=>'skip-export'] // remove this row from export
																]
															],*/
															'toolbar' =>  [
																/*
																'{export}',
																'{toggleData}'*/
															],
															'pjax' => true,
															'pjaxSettings' =>[
															'timeout'=>5000,
															'filterUrl'=> Url::to(["user/clientdetails"]),
															'options'=>[
																'id'=>'client-user-grid-pjax',
																'enablePushState' => false,
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
															'heading'=>false,
																'type' => GridView::TYPE_PRIMARY,
																'footer' => false,
															],
														]);
															
															
															?>
															
							</div>
							</div>
							<?php } ?>
							</div>
</div>
	<!-- Loading GIF div starts -->
						<div class="load-gif" id="loading-client-indicator" style="display:none;">
							<div class="procressing_plz_wait">
								<img class=""
									src="<?php echo Yii::$app->getUrlManager()->getBaseUrl();  ?>/images/default.gif" />
							</div>
						</div>

		<!-- Loading GIF div end -->		
</div>
<?php 
$this->registerJs(
		"
		
		$('.select2').select2();
		$(\"[data-toggle=tooltip]\").tooltip();
		$(\"[data-toggle=popover-hover]\").popover({ trigger: \"manual\" , html: true, animation:false,

   })
	.on(\"mouseenter\", function () {
		var _this = this;
		$(this).popover(\"show\");
		$(\".popover\").on(\"mouseleave\", function () {
			$(_this).popover('hide');
		});
	}).on(\"mouseleave\", function () {
		var _this = this;
		setTimeout(function () {
			if (!$(\".popover:hover\").length) {
				$(_this).popover(\"hide\");
			}
		}, 300);
	});
		
		
		$('a[data-toggle=\"tab\"]').on('shown.bs.tab', function (e) {
		  e.target // newly activated tab
		  e.relatedTarget // previous active tab
		})
		
		
		
		


	
");
?>
<script>
$(document).ready(function(){
	
		 $(document).on('change', 'input[name=activate_module]', function () {
		if($('.input_available_client_packages').is(':checked')){ 
								$("#packages_block").removeClass("pointer-disable");
							}else{
								$("#packages_block").addClass("pointer-disable");
								$('#packages_block input').removeAttr('checked');
							}
	});		
	
	
	$('input.business-address-check').change(function(){

		if ($('input.business-address-check').is(':checked')) {
			
			var address_1 = '';
			address_1 = $('#clients-address_1').val();
			 $('#clients-billing_address').val(address_1);
		}	

		});
		
$(".nav.nav-tabs>li:first a").addClass("active");
$(".tab-content div.tab-pane:first ").addClass("active");
});	
function toggleclient(id)
{
	if(id == 1)
	{
		$('#client-form').addClass('active');
		$('#client-grid').removeClass('active');
	}
	else if(id == 2)
	{
		$('#client-form').removeClass('active');
		$('#client-grid').addClass('active');
	}
	
}



	/***** function to get firm users based on selected firm *****/
	function getSelectedFirmDetails(value){
		 var data= 'firm_id='+value;
		   
		  $.ajax({
			type: 'POST',
		    url: '<?php echo Yii::$app->urlManager->createUrl("user/getselectedfirmdetails"); ?>',
			data:data,
			processData:false,
			dataType:'json',
			success:function(data){
				
				/** creating firm user dropdowns ***/
				if(data.firm_users.length > 0){
					var options = '<option value="">Select</option>';				
					for(var i=0;i< data.firm_users.length;i++){
						options += '<option value="'+data.firm_users[i]['firm_user_id']+'">'+data.firm_users[i]['firm_user_fullname']+'</option>';
					}
				}
				else{
					var options = '<option value="">No Firm User Available</option>';
				}
				
				$('#primary_consultant_dd').html('');
				$('#primary_consultant_dd').append(options);
				$('#primary_account_manager_dd').html('');
				$('#primary_account_manager_dd').append(options);
				$('#primary_service_rep_dd').html('');
				$('#primary_service_rep_dd').append(options);

				/*** creating modules design ***/	
				if(data.firm_modules.length > 0){
					var div = '';	
					for(var i=0;i< data.firm_modules.length;i++){
						div += '<label class="form-control-label">'+data.firm_modules[i]['option_value']+'</label><div class=""><label class="mt-checkbox mt-checkbox-outline"> Activate<input class="input_available_client_packages" type="checkbox" value="'+data.firm_modules[i]['module_id']+'" name="activate_module"> <span></span></label></div>';
					}
					$('#packages_block').removeClass("hidden");
					$('#client_num_and_amount_block').removeClass("hidden");
				}
				else{
					div = '<label class="form-control-label">No modules available for the Firm</label>';
				}
				$('#client_form_modules').html(div);


				/***** now showing the number of the adding client  ***/
				$('#no_of_client_for_this_firm').html(data.client_count);
				$('#amount_of_client_package_for_this_firm').html('$0');
				$('input[name=activate_module]').change();
		    },	
		  
		  });
	}

	$('.client_package_selection').click(function(){
		/*var selected_modules = '';
		$('.input_available_client_packages').each(function(){
			if(this.checked){
				selected_modules += this.value + ',';
			}
		})
		selected_modules = selected_modules.replace(/,\s*$/, "");
		*/

		var selected_module = $('.input_available_client_packages').val();
		var client_num = $('#no_of_client_for_this_firm').html();
		var data = 'package_type='+this.value+'&module='+selected_module+'&clientnum='+client_num;
		//alert(data);
		 $.ajax({
				type: 'POST',
			    url: '<?php echo Yii::$app->urlManager->createUrl("user/getselectedmodulepackagedetails"); ?>',
				data:data,
				processData:false,
				dataType:'json',
				success:function(result){
					
					/** showing package amount ***/
					if(result.length > 0){
						$('#amount_of_client_package_for_this_firm').html('$ '+result[0]['amount']);
					}
					else{
						$('#amount_of_client_package_for_this_firm').html('$ 0');
					}					
			    },	
			  
			  });
		
		
	});


</script>