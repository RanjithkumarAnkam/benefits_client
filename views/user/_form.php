<?php 

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use kartik\alert\Alert;
?>

<div class="container">
<div class="page-content col-md-12">
<div class="alert-div">
		<?php 
if($flash = Yii::$app->session->getFlash('success')){

echo  Alert::widget([
    'type' => Alert::TYPE_SUCCESS,
	'icon' => 'glyphicon glyphicon-ok-sign',
    'body' => $flash,
    'delay' => 0
]);

}
?>

<?php 
if($flash = Yii::$app->session->getFlash('error')){

echo  Alert::widget([
    'type' => Alert::TYPE_DANGER,
	'icon' => 'glyphicon glyphicon-remove-sign',
    'body' => $flash,
    'delay' => 0
]);

}
?>
</div>
			<div class="col-md-12 border-ddd widget padding-15">
			  <ul class="nav nav-tabs mb-4 blue-main-nav-admin" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link  active color-white" id="anchor-pb-1" data-target="#home5" data-toggle="tab" href="javascript: void(0);" role="tab" aria-expanded="true">Create Admin User
								  <span class="fa fa-info-circle information-icon" title="Admin User details" data-container="body" data-toggle="popover-hover" data-placement="right" data-content="Enter in the basic details of the administrative user."></span>
								  </a>
                            </li>
                           
                          
                        </ul>
						
			 <div class="tab-content  blue-main-nav-content ">
			 <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
                            <div class="tab-pane active col-md-12 padding-15  border-ddd" id="home5" role="tabcard" aria-expanded="true" style="border-top:none;">			
			<div class="">
		
						 
					
						 <div class="col-md-12 padding-0">
						 <div class="col-md-6">
						   <div class="">
                                <?= $form->field($model_admin_users, 'first_name')->textInput(['maxlength' => 15, 'class' => 'form-control'])->label('First Name',['class'=>'form-control-label']); ?>
                            </div>
						 </div>
						  <div class="col-md-6">
						  <div class="">
                               <?= $form->field($model_admin_users, 'last_name')->textInput(['maxlength' => 15, 'class' => 'form-control'])->label('Last Name',['class'=>'form-control-label']); ?>
                            </div>
						 </div>
						 </div>
						 
						  <div class="col-md-12 padding-0">
						
						  <div class="col-md-6">
						   <div class="">
                               <?= $form->field($model_users, 'username')->textInput([ 'class' => 'form-control'])->label('Email ID',['class'=>'form-control-label']); ?>
                            </div>
						 </div>
						 <div class="col-md-6 ">
						   <div class="">
							 
                             <div class="">
										
										<div class="col-md-12 padding-0">
											<div class="col-md-9 padding-0">
												 <?= $form->field($model_admin_users, 'phone')->textInput(['class' => 'form-control us-phone-mask-input'])->label('Phone',['class'=>'form-control-label']); ?>
											</div>
											<div class="col-md-3 padding-right-0">
												<?= $form->field($model_admin_users, 'extension')->textInput(['class' => 'form-control numbers','maxlength'=>'5'])->label('Extension',['class'=>'form-control-label']); ?>
											</div>
										</div>
									</div>
								 
                            </div>
						 </div>
						 </div>
						   <div class="col-md-12 padding-0">
						 
						  <div class="col-md-6">
						  
							<div class="">
                               <?= $form->field($model_admin_users, 'mobile')->textInput(['class' => 'form-control us-phone-mask-input'])->label('Mobile #',['class'=>'form-control-label']); ?>
                            </div>
						 </div>
						 
						 						  <div class="col-md-6">
						  
							<div class="">
							 
                                <div class="form-group ">
                                    <label class="form-control-label" for="l0">Profile Image <span class="fa fa-info-circle information-icon" title="Profile Image" data-container="body" data-toggle="popover-hover" data-placement="right" data-content="Recommended dimensions are 400x400 pixels."></span></label>
                               
                                <?= $form->field($model_admin_users, 'profile_pic')->fileInput(['class' => 'form-control'])->label('Profile Image',['class'=>'form-control-label'])->label(false); ?>
                                </div>
                            </div>
						 </div>
						 </div>
						<div class="col-md-12 padding-0">
							<div class="col-md-12 padding-top-5">
								<h6 class="action_head">Access Privileges: 
								<span class="fa fa-info-circle information-icon" title="Access Privileges" data-container="body" data-toggle="popover-hover" data-placement="right"
						 data-content="Select if you would like for the user to have super administrator privileges in the system to performing all functions including changing the access level of other administrative users.<br>
Next, select if this user should be able to access financial performance of the entire application."></span>
</h6>
								<div class="col-md-4">


									<div class="md-checkbox-list ">
														 <?php foreach ($rightslist as $rights){ if($rights['category']==1){ ?>
														 <div class="width-100 pull-left">
															<label
											class="mt-checkbox mt-checkbox-outline margin-bottom-10 ">
																<?php echo $rights['description']; ?> <input
											type="checkbox" value="<?php echo $rights['right_id']; ?>"
											name="AdminUserRights[<?php echo str_replace(' ','_',$rights['description']); ?>]"
											<?php if(!empty($rights['user_right_id'])){echo 'checked'; }?>>
											<span></span>
										</label>
															</div>
														 <?php }} ?>	
														
														</div>
								</div>
							</div>
							<div class="col-md-12  padding-top-5">
								<div class="col-md-4">

									<h6 class="action_head">Admin Access  
									<span class="fa fa-info-circle information-icon" title="Admin Access" data-container="body" data-toggle="popover-hover" data-placement="right"
														 
														 data-content="Select if this user will be able to add and edit the information of other admin users.  <br><br> 
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
											<?php if(!empty($rights['user_right_id'])){echo 'checked'; }?>>
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
											<?php if(!empty($rights['user_right_id'])){echo 'checked'; }?>>
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
											<?php if(!empty($rights['user_right_id'])){echo 'checked'; }?>>
											<span></span>
										</label>
											</div>		
													 <?php }} ?>   
                                                  
												       </div>

								</div>



							</div>

						</div>


												
                        
                     
						 </div>
						 
						 <div class="col-md-12 padding-0 bg-sky-blue border-ddd" align="right" style="border-top:none;">
								
								<div class="modal-footer-btn padding-15">
								<?= Html::submitButton('Save', ['class' => 'btn btn-modal-lightblue']) ?>
							 <a class="btn btn-default"
								href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/search">Cancel</a>

								
								
								</div>
								</div>
			</div>
			
			<?php ActiveForm::end(); ?>
			</div>	
			</div>
			</div>
	</div>				