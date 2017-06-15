<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use kartik\alert\Alert;
?>
<div class="page-content-inner ">

	<!-- clients -->
	<div class="dashboard-container">

		<div class="blue-breadcrumb col-md-12 padding-0">
			<a class="breadcrumb-back-btn"
				href="<?php echo Yii::$app->getUrlManager()->getBaseUrl().Yii::$app->params['dashboard_url']; ?>">
				<i class="fa fa-angle-left" aria-hidden="true"></i>
			</a>
			<div class="breadcrumb-description">
				<span class="">Profile</span>

			</div>

		</div>

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

		<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
			<div class="col-md-12 border-ddd widget padding-15">

					<div class="col-md-12 padding-15 profile-pic-background hidden">
						<div class="col-md-4 col-md-offset-4" align="center">

							<div class="profile-pic-box">
								<div class="col-xs-2" align="center">

									<!--	<a class="fa fa-trash-o font-20 profile-photo-icon"></a>-->
								</div>

								<div class="col-xs-8" align="center">
									<div class="profile-avatar">
										<img src="<?php 
										if(!empty($userdetailModel->profile_pic)){
											if($usertype == 1)
											{
											echo \Yii::$app->urlManager->createAbsoluteUrl ( '/images/admin_user' ).'/'.$userdetailModel->profile_pic;
											}
											else if($usertype == 2)
											{
											echo \Yii::$app->urlManager->createAbsoluteUrl ( '/images/firm_user' ).'/'.$userdetailModel->profile_pic;
											}
											else if($usertype == 3)
											{
											echo \Yii::$app->urlManager->createAbsoluteUrl ( '/images/client_user' ).'/'.$userdetailModel->profile_pic;
											}
											
											
										}else
										{
										echo \Yii::$app->urlManager->createAbsoluteUrl ( '/images/defaultuserimg.png' );	
										}
										?>"

										>
									</div>
								</div>

								<div class="col-xs-2" align="center">
									<!--<a class="fa fa-picture-o  font-14 profile-photo-icon"></a>-->
								</div>
							</div>


						</div>


					</div>

					<div class="">



						<div class="col-md-12 padding-0">
							<div class="col-md-6">
								<div class="">
								<label class="form-control-label">First Name*</label>
                                 <?= $form->field($userdetailModel, 'first_name')->textInput(['maxlength' => 15, 'class' => 'form-control','onkeypress'=>'return username(event);'])->label(false); ?>
                            </div>
							</div>
							<div class="col-md-6">
								<div class="">
								<label class="form-control-label">Last Name*</label>
                               <?= $form->field($userdetailModel, 'last_name')->textInput(['maxlength' => 15, 'class' => 'form-control','onkeypress'=>'return username(event);'])->label(false); ?>
                            </div>
							</div>
						</div>

						<div class="col-md-12 padding-0">

							<div class="col-md-6">
												<div class="form-group field-user-username required ">
												<label class="form-control-label" for="user-username">Email Address</label>
													<div class="form-control" disabled><?php echo $user_parent->username ;?> </div>
												</div>
							
							
							</div>
							<div class="col-md-6 ">
								<div class="">

									<div class="col-md-12 padding-0">
										<div class="col-md-9 padding-0">
										<label class="form-control-label">Phone*</label>
												 <?= $form->field($userdetailModel, 'phone')->textInput(['class' => 'form-control us-phone-mask-input'])->label(false); ?>
											</div>
										<div class="col-md-3 padding-right-0">
										<label class="form-control-label">Extension</label>
												<?= $form->field($userdetailModel, 'extension')->textInput(['class' => 'form-control numbers','maxlength'=>'6'])->label(false); ?>
											</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12 padding-0">

							<div class="col-md-6">

								<div class="">
								<label class="form-control-label">Mobile</label>
                                <?= $form->field($userdetailModel, 'mobile')->textInput(['class' => 'form-control us-phone-mask-input'])->label(false); ?>
                            </div>
							</div>

							<div class="col-md-6">

								<div class="">
								 <label class="form-control-label">Profile Image<span class="fa fa-info-circle information-icon" title="" data-container="body" data-toggle="popover-hover" data-placement="right" data-content="Recommended dimensions are 400x400 pixels." data-original-title="Upload Profile Image"></span></label>
                                <?= $form->field($userdetailModel, 'profile_pic')->fileInput(['class' => 'form-control','accept'=>"image/x-png,image/gif,image/jpeg,image/tif,image/bmp,image/jpg"])->label(false); ?>
                            </div>
							</div>

						</div>






					</div>
					
					<?php if($usertype == 1){?>
						<div class="col-md-12 padding-top-5  padding-left-0">

							<div class="col-md-4">
								<h6 class="action_head">
									Access Privileges: <span
										class="fa fa-info-circle information-icon"
										title="Access Privileges" data-container="body"
										data-toggle="popover-hover" data-placement="right"
										data-content="Select if you would like for the user to have super administrator privileges in the system to performing all functions including changing the access level of other administrative users.<br>
										Next, select if this user should be able to access financial
										performance of theentireapplication."></span>
								</h6>

								<div class="md-checkbox-list ">
														 <?php foreach ($rightslist as $rights){ if($rights['category']==1){ ?>
														 <div class="width-100 pull-left">
										<label class="mt-checkbox mt-checkbox-outline margin-bottom-10 pointer-disable ">
																<?php echo $rights['description']; ?> 
											<input type="checkbox" class="primary-contact-checkbox pointer-disable"  <?php if(in_array($rights['right_id'], $currentuserrights)){ ?>checked<?php } ?>>
						 <span></span>
										</label>
									</div>
														 <?php }} ?>	
														
														</div>
							</div>
						</div>
						<div class="col-md-12  padding-top-5 padding-left-0">

							<div class="col-md-4">

								<h6 class="action_head">
									Admin Access : <span class="fa fa-info-circle information-icon"
										title="Admin Access" data-container="body"
										data-toggle="popover-hover" data-placement="right"
										data-content="Select if this user will be able to add and edit the information of other admin users.  <br><br>
										<u>Add/Edit Admin User</u> - access to add and edit the
										information of other admin users.<br> <br> <u>System Pricing</u>
										- access to view and edit the overall pricing in the system
										charged to firms or clients.<br> <br> <u>System Billing</u> -
										access to view the billing for the month including all details
										of firms and clients billing.<br> <br> <u>Firm Pricing</u> -
										access to edit the pricing assigned to a firm for the
										application (note: all admin users will be able to view the
										pricing assigned to a firm and their clients to assist with
										customer service). "></span>
								</h6>
								<div class="md-checkbox-list">
														 
														 <?php foreach ($rightslist as $rights){ if($rights['category']==2){ ?>
														 <div class="width-100 pull-left">
										<label class=" no-wrap mt-checkbox mt-checkbox-outline margin-bottom-10 pointer-disable">
																<?php echo $rights['description']; ?> 
										<input type="checkbox" class="primary-contact-checkbox pointer-disable"  <?php if(in_array($rights['right_id'], $currentuserrights)){ ?>checked<?php } ?>>
						 <span></span>
										</label>

									</div>
                                                  <?php }} ?>
																	</div>

							</div>


							<div class="col-md-4">
								<h6 class="action_head">Firm Access</h6>
								<div class="md-checkbox-list ">							
 <?php foreach ($rightslist as $rights){ if($rights['category']==3){ ?>
 <div class="width-100 pull-left">
										<label class="no-wrap mt-checkbox mt-checkbox-outline margin-bottom-10 pointer-disable ">
																<?php echo $rights['description']; ?> 
																<input type="checkbox" class="primary-contact-checkbox pointer-disable"  <?php if(in_array($rights['right_id'], $currentuserrights)){ ?>checked<?php } ?>>
						 <span></span>
										</label>
									</div>										
 <?php }} ?>
		

												</div>
							</div>
							<div class="col-md-4">
								<h6 class="action_head">Client Access</h6>
								<div class="md-checkbox-list ">	
												<?php foreach ($rightslist as $rights){ if($rights['category']==4){ ?>  
												<div class="width-100 pull-left">
										<label class=" no-wrap mt-checkbox mt-checkbox-outline margin-bottom-10 pointer-disable ">
																<?php echo $rights['description']; ?> 
															<input type="checkbox" class="primary-contact-checkbox pointer-disable"  <?php if(in_array($rights['right_id'], $currentuserrights)){ ?>checked<?php } ?>>
						 <span></span>
										
										</label>
									</div>		
													 <?php }} ?>   
                                                  
												       </div>

							</div>



						</div>
					<?php }
					else if($usertype == 2){
					?>
					
					<div class="col-md-6">
					<h6 class="action_head">
						Set Up This User As: <span
							class="fa fa-info-circle information-icon"
							title="Set Up This User As" data-container="body"
							data-toggle="popover-hover" data-placement="right"
							data-content="Select if this user will be the primary point of contact for the firm and/or the billing contact for the firm.  If neither, simply leave blank."></span>
					</h6>
					<div class="col-md-12 padding-0">
						<div class="col-md-9 padding-0">
							<label class="mt-checkbox mt-checkbox-outline margin-bottom-10 pointer-disable">
								Firm Primary Contact  <input type="checkbox" class="primary-contact-checkbox pointer-disable"  <?php if(!empty($userdetailModel->is_primary) && $userdetailModel->is_primary == 1){ ?>checked<?php } ?>>
							 <span></span>
							</label>
						</div>

						<div class="col-md-9 padding-0">
							<label class="mt-checkbox mt-checkbox-outline margin-bottom-10 pointer-disable">
								Firm Billing Contact  <input type="checkbox" class="primary-contact-checkbox pointer-disable"  <?php if(!empty($userdetailModel->is_billing) && $userdetailModel->is_billing == 1){ ?>checked<?php } ?>>
							 <span></span>
							</label>
						</div>
					</div>
				</div>
				
					<div class="col-md-5">
					<h6 class="action_head">
						Access Privileges: <span
							class="fa fa-info-circle information-icon"
							title="Access Privileges" data-container="body"
							data-toggle="popover-hover" data-placement="right"
							data-content="Select if this user will have full administrative functionality in the system which includes the ability to view and edit all information regarding all clients, add net clients to the system and view all firm billing information."></span>
					</h6>

					<div class="md-checkbox-list">
						 <?php foreach ($rightslist as $rights){ if($rights['category']==1){ ?>
															<label
							class="mt-checkbox mt-checkbox-outline margin-bottom-10 pointer-disable">
																<?php echo $rights['description']; ?>
																
						<input type="checkbox" class="primary-contact-checkbox pointer-disable"  <?php if(in_array($rights['right_id'], $currentuserrights)){ ?>checked<?php } ?>>
						 <span></span>
						</label>
															
														 <?php }} ?>
														 
						<div class="action_head ">
							<b>View / Edit Clients:</b> <span class="fa fa-info-circle information-icon"
								title="View / Edit Clients" data-container="body"
								data-toggle="popover-hover" data-placement="top"
								data-content="As a default, all firm users will be able to view/edit details of clients they are directly attached to as a primary consultant, account manager or service representative.  In addition, you can add the ability for this user to view other clients to which they are not directly attached either by selecting My Locations or All Firm Locations. <br>
<u>My Locations</u> - <br>
if selected, the user will be able to view/edit clients and firm locations associated to their user profile, even if they are not directly tied to the client from the client set up page.<br>
<u>All Firm Locations</u> - <br>
user will have full access to view/edit all clients in the system at all firm locations, even if the firm location is not on their user profile."></span>
							
						</div>
						<div class="col-md-6 padding-0">
							 <?php foreach ($rightslist as $rights){ if($rights['category']==5){ ?>
				 									<div class="width-100 pull-left">
														<label
								class="no-wrap mt-checkbox mt-checkbox-outline margin-bottom-10 pointer-disable ">
																<?php echo $rights['description']; ?> 

							<input type="checkbox" class="primary-contact-checkbox pointer-disable"  <?php if(in_array($rights['right_id'], $currentuserrights)){ ?>checked<?php } ?>>
						 <span></span>
							</label>
									</div>			
														
                                                  <?php }} ?>
						</div>
						 
					</div>
				</div>
					
					<?php }else if($usertype == 3){ ?>
						<div class="col-md-6">
					<h6 class="action_head">
						Set Up This User As: <span
							class="fa fa-info-circle information-icon"
							title="Set Up This User As" data-container="body"
							data-toggle="popover-hover" data-placement="right"
							data-content="Select if this user will be the primary point of contact for the firm and/or the billing contact for the firm.  If neither, simply leave blank."></span>
					</h6>
							<div class="col-md-12 padding-0">
						<div class="col-md-9 padding-0">
							<label class="mt-checkbox mt-checkbox-outline margin-bottom-10 pointer-disable">
								Firm Primary Contact  <input type="checkbox" class="primary-contact-checkbox pointer-disable"  <?php if(!empty($userdetailModel->is_primary) && $userdetailModel->is_primary == 1){ ?>checked<?php } ?>>
							 <span></span>
							</label>
						</div>

						<div class="col-md-9 padding-0">
							<label class="mt-checkbox mt-checkbox-outline margin-bottom-10 pointer-disable">
								Firm Billing Contact  <input type="checkbox" class="primary-contact-checkbox pointer-disable"  <?php if(!empty($userdetailModel->is_billing) && $userdetailModel->is_billing == 1){ ?>checked<?php } ?>>
							 <span></span>
							</label>
						</div>
					</div>
				</div>
					
					<?php } ?>
					<div class="col-md-12">
					<p><b>Note:-</b>&nbsp&nbsp Your account Access privileges are as above, If you need more Privilege, please Contact your administrator.</p>
					</div>
					
					
					<div class="col-md-12 padding-0 bg-sky-blue border-ddd"
						align="right" style="border-top: none;">

						<div class="modal-footer-btn padding-15">
								
									<?= Html::submitButton('Save', ['class' => 'btn btn-primary'])?>
								 <a
								href="<?php echo Yii::$app->getUrlManager()->getBaseUrl().Yii::$app->params['dashboard_url']; ?>"
								class="btn btn-default"> Cancel </a>


						</div>
					</div>
				</div>
				<?php ActiveForm::end(); ?>
			</div>
		</div>
	</div>



</div>