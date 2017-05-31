<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use app\components\EncryptDecryptComponent;
?>


<div class="modal-header modal-header-color">
							 
							<button type="button" class="close-modal modal-opacity close-modal-blue" data-dismiss="modal" aria-hidden="true">
								X
							</button>
							<h4 class="modal-title color-white" id="myModalLabel">
								Update Admin User
							</h4>
						</div>
						   <?php $form = ActiveForm::begin(['enableClientValidation'=>true,'action'=>Yii::$app->urlManager->createUrl("user/saveupdateadminuser"),'options' => ['id' => 'update_admin_user']]); ?>
					
						<div class="modal-body  col-md-12">
						
							 <input type="hidden" id="admin_user"
		name="SupportVariable[admin_user_id]"
		value="<?php echo $encrypt_admin_user_id ?>" />
		
						 <div class="col-md-12 padding-0">
						 <div class="col-md-6">
						   <div class="">
                                
                                <?= $form->field($model, 'first_name', ['inputOptions' => ['class' => 'form-control']])->textInput(['maxlength' => true]); ?>
                          
                            </div>
						 </div>
						  <div class="col-md-6">
						  <div class="">
                               
                                <?= $form->field($model, 'last_name', ['inputOptions' => ['class' => 'form-control']])->textInput(['maxlength' => true]); ?>
                                
                            </div>
						 </div>
						 </div>
						 
						  <div class="col-md-12 padding-0">
						
						  <div class="col-md-6">
						   <div class="">
                              
                                <?= $form->field($modelUser, 'username', ['inputOptions' => ['class' => 'form-control']])->textInput(['maxlength' => true])->label('Email Id'); ?>
                               
                            </div>
						 </div>
						 <div class="col-md-6 ">
						   <div class="">
							 
                               <div class="">
							   
							   <div class="col-md-12 padding-0">
									<div class="col-md-9 padding-0">
                                     <?= $form->field($model, 'phone')->textInput(['class' => 'form-control us-phone-mask-input'])->label('Phone',['class'=>'form-control-label']); ?>
									</div>
									<div class="col-md-3 padding-right-0">
										<?= $form->field($model, 'extension')->textInput(['class' => 'form-control numbers','maxlength'=>'5'])->label('Extension',['class'=>'form-control-label']); ?>
									</div>
									</div>
							 
                                </div>
								 
                            </div>
						 </div>
						 </div>
						   <div class="col-md-12 padding-0">
						 
						  <div class="col-md-6">
						  
						<div class="">
                               <?= $form->field($model, 'mobile', ['inputOptions' => ['class' => 'form-control us-phone-mask-input']])->textInput(['maxlength' => true])->label('Mobile'); ?>
                                 
                                
                          </div>
						 </div>
						 
						 <div class="col-md-6">
						 <div class="">
							 <?= $form->field($model, 'profile_pic')->fileInput(['class' => 'form-control'])->label('Profile Image',['class'=>'form-control-label']); ?>
						 </div>
						 </div>
						 </div>
						 <div class="col-md-12 padding-0">
						 <div class="col-md-12">
						
						  <div class="col-md-6">
									 <h6 class="action_head">Access Privileges:
									  <span class="fa fa-info-circle information-icon" title="Access Privileges" data-container="body" data-toggle="popover-hover" data-placement="right" data-content="Select if you would like for the user to have super administrator privileges in the system to performing all functions including changing the access level of other administrative users.  <br> Select if this user should be able to access financial performance of the entire application."></span>
									  </h6>				

													<div class="md-checkbox-list ">
															 <?php foreach ($rightslist as $rights){ if($rights['category']==1){ ?>
														 <div class="width-100 pull-left">
															<label
											class="mt-checkbox mt-checkbox-outline margin-bottom-10 ">
																<?php echo $rights['description']; ?> <input
											type="checkbox" value="<?php echo $rights['right_id']; ?>"
											name="AdminUserRights[<?php echo str_replace(' ','_',$rights['description']); ?>]"
											
											<?php if(!empty($adminuserRights) && in_array($rights['right_id'], $adminuserRights)){echo 'checked'; }?>>
											<span></span>
										</label>
															</div>
														 <?php }} ?>	
															
														</div>
																														</div>
								 <div class="col-md-6">
						 
						   <div class="">
													<h6 class="action_head">Settings:</h6>
<p><a id="modal-alert" href="#alert_screen" class="color-blue"
														data-toggle="modal">
														<?php $encrpt_admin_id = EncryptDecryptComponent::encrytedUser ( $model->admin_id )?>
														<?php if($model->is_active == 0){?><u onclick="ChangeadminDeactivateText('<?php echo $encrpt_admin_id;?>')" id="active_admin_user_text">Activate User</u><?php }else{?>
														<u onclick="ChangeadminactivateText('<?php echo $encrpt_admin_id;?>')" id="active_admin_user_text">Deactivate User</u>
														<?php }?></a></p>
														<p><a id="modal-alert" href="#resend_activation_link" class="color-blue"  onclick="Sendresendpassword('<?php echo EncryptDecryptComponent::encrytedUser ( $model->user_id ) ;?>')"
														data-toggle="modal"><u>Reset Password</u></a></p>
														</div>
						 </div>	
																														
																														</div>
																														<span class="col-md-12 border-bottom-1 padding-10"></span>
														<div class="col-md-12  padding-top-5">
								<div class="col-md-4">

									<h6 class="action_head">Admin Access  
									<span class="fa fa-info-circle information-icon" title="Admin Access" data-container="body" data-toggle="popover-hover" data-placement="right" data-content="Select if this user will be able to add and edit the information of other admin users.  <br><br> 
														<u>Add/Edit Admin User</u> - access to add and edit the information of other admin users.<br><br>  
														<u>System Pricing</u> - access to view and edit the overall pricing in the system charged to firms or clients.<br><br>
														<u>System Billing</u> - access to view the billing for the month including all details of firms and clients billing.<br><br>
														<u>Firm Pricing</u> - access to edit the pricing assigned to a firm for the application (note: all admin users will be able to view the pricing assigned to a firm and their clients to assist with customer service).
														"></span>
									</h6>
									<div class="md-checkbox-list">
														 
														 <?php foreach ($rightslist as $rights){ if($rights['category']==2){ ?>
														 <div class="width-100 pull-left">
														<label
											class="mt-checkbox mt-checkbox-outline no-wrap margin-bottom-10">
																<?php echo $rights['description']; ?> <input
											type="checkbox" value="<?php echo $rights['right_id']; ?>"
											name="AdminUserRights[<?php echo str_replace(' ','_',$rights['description']); ?>]"
											<?php if(!empty($adminuserRights) && in_array($rights['right_id'], $adminuserRights)){echo 'checked'; }?>>
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
													<label
											class="mt-checkbox mt-checkbox-outline no-wrap margin-bottom-10 ">
																<?php echo $rights['description']; ?> <input
											type="checkbox" value="<?php echo $rights['right_id']; ?>"
											name="AdminUserRights[<?php echo str_replace(' ','_',$rights['description']); ?>]"
											<?php if(!empty($adminuserRights) && in_array($rights['right_id'], $adminuserRights)){echo 'checked'; }?>>
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
												 <label
											class="mt-checkbox mt-checkbox-outline no-wrap margin-bottom-10 ">
																<?php echo $rights['description']; ?> <input
											type="checkbox" value="<?php echo $rights['right_id']; ?>"
											name="AdminUserRights[<?php echo str_replace(' ','_',$rights['description']); ?>]"
											<?php if(!empty($adminuserRights) && in_array($rights['right_id'], $adminuserRights)){echo 'checked'; }?>>
											<span></span>
										</label>
											</div>		
													 <?php }} ?>   
                                                  
												       </div>

								</div>



							</div>			
													</div>


												
            <!-- Loading GIF div starts -->
<div class="load-gif" id="loading-indicator" style="display: none;">
	<div class="procressing_plz_wait">
		<img class=""
			src="<?php echo Yii::$app->getUrlManager()->getBaseUrl();  ?>/images/default.gif" />
	</div>
</div>

<!-- Loading GIF div end -->            
                        
</div>
									
								
					<div class="modal-footer footer-background col-md-12">
					<?= Html::submitButton('Save', ['class' => 'btn btn-modal-lightblue'])?>
					<button class="btn btn-default firm-user-modal-close" data-dismiss="modal">Cancel</button>
</div>
	<?php ActiveForm::end(); ?>				
							<!-- <div class="modal-footer col-md-12 footer-background">
							 
							<a href=""  class="btn btn-modal-blue">
								Save 
							</a>
							 	<a href="#"  class="btn btn-default"  data-dismiss="modal">
								Cancel
							</a>
							
						</div>-->
						