<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use demogorgorn\ajax\AjaxSubmitButton;
?>
<div class="modal-header modal-header-color">

	<button type="button"
		class="close-modal modal-opacity close-modal-blue firm-user-modal-close"
		data-dismiss="modal" aria-hidden="true">X</button>
	<h4 class="modal-title color-white" id="myModalLabel">
	<?php if($model->isNewRecord){ ?>
	Create Firm User
	<?php }else{ ?>
	Update Firm User
	<?php }?>
	</h4>
</div>
<?php $form = ActiveForm::begin(['enableClientValidation'=>true,'action'=>$model->isNewRecord ? Yii::$app->urlManager->createUrl("user/savefirmuser") : Yii::$app->urlManager->createUrl("user/updatefirmuser"),'options' => ['id' => 'add_firm_user']]); ?>
<!-- <form id="form_create_firm_user" action="/self_insured/user/createfirmuser" onsubmit="return false;" enctype="multipart/form-data"> -->
<div class="modal-body col-md-12">

	<input type="hidden" id="firm_user_for_firm"
		name="SupportVariable[firm_id]" value="<?php echo $encrypt_firm_id ?>" />

	<input type="hidden" id="firm_user_for_firm"
		name="SupportVariable[firm_user_id]"
		value="<?php echo $encrypt_firm_user_id ?>" />

	<div class="col-md-12 padding-0">
		<div class="col-md-6">
		<label class="form-control-label">First Name*</label>
							<?= $form->field($model, 'first_name', ['inputOptions' => ['class' => 'form-control']])->textInput(['maxlength' => true,'onkeypress'=>'return username(event);'])->label(false); ?>
						</div>
		<div class="col-md-6">
		<label class="form-control-label">Last Name*</label>
							<?= $form->field($model, 'last_name', ['inputOptions' => ['class' => 'form-control']])->textInput(['maxlength' => true,'onkeypress'=>'return username(event);'])->label(false); ?>
						</div>
	</div>





	<div class="col-md-12 padding-0">
		<div class="col-md-6">
		 <label class="form-control-label">Title</label>
							<?= $form->field($model, 'title', ['inputOptions' => ['class' => 'form-control']])->textInput(['maxlength' => true])->label(false); ?>

						</div>
		<div class="col-md-6">
			<div class="form-group">
				<label class="form-control-label" for="l0"> Locations</label> 
				<label class="mt-checkbox mt-checkbox-outline margin-bottom-0 margin-top-7 pull-right">Same as Firm locations<input type="checkbox" value="1" class="same_firm_locations"name="same_firm_locations">
							<span></span>
						</label>
				<select
					class="form-control height-120 select2 select-border  locations"
					multiple id="firm_user_locations" name="firm_user_locations[]">
							<?php
							
							if (! empty ( $firm_locations )) {
								foreach ( $firm_locations as $location ) {
									?>
							<option value="<?php echo $location->location_id; ?>"
						<?php if(!empty($firmuserLocations) && in_array($location->location_id, $firmuserLocations)){echo 'selected'; }?>><?php echo $location->location_name; ?></option>
							<?php }} ?>
							</select> <input type="text" value="<?php echo $location_name;?>"
					class="form-control hidden" id="firm_locations_hidden"
					name="firm_locations_hidden" placeholder="">

			</div>
		</div>
	</div>



	<div class="col-md-12 padding-0">
		<div class="col-md-6">
		 <label class="form-control-label">Email Address*</label>
							<?= $form->field($modelUser, 'username', ['inputOptions' => ['class' => 'form-control']])->textInput(['maxlength' => true])->label(false); ?>
						</div>
		<div class="col-md-6 ">
			<div class="">

				<div class="">

					<div class="col-md-12 padding-0">
						<div class="col-md-9 padding-0">
						 <label class="form-control-label">Phone*</label>
												 <?= $form->field($model, 'phone')->textInput(['class' => 'form-control us-phone-mask-input'])->label(false); ?>
											</div>
						<div class="col-md-3 padding-right-0">
						 <label class="form-control-label">Extension</label>
												<?= $form->field($model, 'extension')->textInput(['class' => 'form-control numbers','maxlength'=>'6'])->label(false); ?>
											</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="col-md-12 padding-0">
		<div class="col-md-6">
		<label class="form-control-label">Mobile</label>
							<?= $form->field($model, 'mobile', ['inputOptions' => ['class' => 'form-control us-phone-mask-input']])->textInput(['maxlength' => true])->label(false); ?>
						</div>
		<div class="col-md-6">
		 <label class="form-control-label">Profile Image  <span class="fa fa-info-circle information-icon" title="" data-container="body" data-toggle="popover-hover" data-placement="right" data-content="Recommended dimensions are 400x400 pixels." data-original-title="Upload Firm Logo"></span></label>
							 <?= $form->field($model, 'profile_pic')->fileInput(['class' => 'form-control','accept'=>"image/x-png,image/gif,image/jpeg,image/tif,image/bmp,image/jpg"])->label(false); ?>
						</div>
	</div>

	<div id="firm_user_actions">
		<div class="col-md-12">
			<div class="<?php echo $model->isNewRecord ? 'col-md-6' : 'col-md-6' ?> margin-top-5">
				<div class="">
					<h6 class="action_head">
						Set Up This User As: <span
							class="fa fa-info-circle information-icon"
							title="Set Up This User As" data-container="body"
							data-toggle="popover-hover" data-placement="right"
							data-content="Select if this user will be the primary point of contact for the firm and/or the billing contact for the firm.  If neither, simply leave blank."></span>
					</h6>
					<div class="col-md-12 padding-0">
						<div class="col-md-9 padding-0">
							<label class="mt-checkbox mt-checkbox-outline margin-bottom-10">
								Firm Primary Contact <input type="hidden" value="0" class="primary-contact-checkbox"
								name="FirmUsers[is_primary]" /> <input type="checkbox" value="1"
								<?php echo $model->is_primary ? 'checked' : '';?>
								name="FirmUsers[is_primary]"  class="primary-contact-checkbox"> <span></span>
							</label>
						</div>

						<div class="col-md-9 padding-0">
							<label class="mt-checkbox mt-checkbox-outline margin-bottom-10">
								Firm Billing Contact <input type="hidden" value="0" class="billing-contact-checkbox"
								name="FirmUsers[is_billing]" /> <input type="checkbox" value="1"
								<?php echo $model->is_billing ? 'checked' : '';?> class="billing-contact-checkbox"
								name="FirmUsers[is_billing]"> <span></span>
							</label>
						</div>
					</div>
				</div>
			</div>
			
			<?php if(Yii::$app->user->identity->user_id != $model->user_id){?>
			
				<div class="<?php echo $model->isNewRecord ? 'col-md-6' : 'col-md-6' ?> margin-top-5">
				<div class="">
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
							class="mt-checkbox mt-checkbox-outline margin-bottom-10 ">
																<?php echo $rights['description']; ?> <input
							type="checkbox" value="<?php echo $rights['right_id']; ?>"
							
							<?php if(Yii::$app->user->identity->usertype==1 || in_array($rights['right_id'],$currentuserrights)){?>name="FirmUserRights[<?php echo str_replace(' ','_',$rights['description']); ?>]" <?php }else{?> disabled readonly<?php }?>
							<?php if(!$model->isNewRecord){ if(!empty($firmuserRights) && in_array($rights['right_id'], $firmuserRights)){echo 'checked'; }}elseif(Yii::$app->user->identity->usertype == 1){?>checked <?php } ?>>
							<span></span>
						</label>
															
														 <?php }} ?>
														 
						<div class="action_head margin-top-5">
							<b>View / Edit Clients: <span
								class="fa fa-info-circle information-icon"
								title="View / Edit Clients" data-container="body"
								data-toggle="popover-hover" data-placement="top"
								data-content="As a default, all firm users will be able to view/edit details of clients they are directly attached to as a primary consultant, account manager or service representative.  In addition, you can add the ability for this user to view other clients to which they are not directly attached either by selecting My Locations or All Firm Locations. <br>
<u>My Locations</u> - <br>
if selected, the user will be able to view/edit clients and firm locations associated to their user profile, even if they are not directly tied to the client from the client set up page.<br>
<u>All Firm Locations</u> - <br>
user will have full access to view/edit all clients in the system at all firm locations, even if the firm location is not on their user profile."></span>
							</b>
						</div>
						<div class="col-md-6 padding-0">
							 <?php foreach ($rightslist as $rights){ if($rights['category']==5){ ?>
				 
														<label
								class="mt-checkbox mt-checkbox-outline no-wrap margin-bottom-10 ">
																<?php echo $rights['description']; ?> <input
								type="checkbox" value="<?php echo $rights['right_id']; ?>"
								<?php if(Yii::$app->user->identity->usertype==1 || in_array($rights['right_id'],$currentuserrights)){?>name="FirmUserRights[<?php echo str_replace(' ','_',$rights['description']); ?>]" <?php }else{?> disabled readonly<?php }?>
								<?php if(!empty($firmuserRights) && in_array($rights['right_id'], $firmuserRights)){echo 'checked'; }?>>
								<span></span>
							</label>
												
														
                                                  <?php }} ?>
						</div>
						 
					</div>
				</div>
			</div>
			
			<?php }?>
		
			
			<?php if(!$model->isNewRecord){?>
			<!--<div class="col-md-3">

								<div class="">
									<h6 class="action_head">Settings:</h6>
									<p>
										<a id="modal-alert" href="#alert_screen" class="color-blue"
											data-toggle="modal"><u id="update_firm_change_status_text" <?php //if($model->is_active == 1){ ?>onclick="ChangeactivateText('<?php //echo $encrypt_firm_user_id;?>');" <?php //}else{ ?> onclick="ChangeDeactivateText('<?php //echo $encrypt_firm_user_id;?>');" <?php //} ?>><?php //echo $model->is_active == 1 ? 'Deactive User' : 'Activate User' ?></u></a>
									</p>
									<p>
										<a id="modal-alert" href="#reset_password" class="color-blue"
											data-toggle="modal"><u>Reset Password</u></a>
									</p>
								</div>
							</div>-->
			<?php } ?>
		</div>
	</div>
	
	<!-- Loading GIF div starts -->
<div class="load-gif" id="loading-indicator-firm-user" style="display: none;">
	<div class="procressing_plz_wait">
		<img class=""
			src="<?php echo Yii::$app->getUrlManager()->getBaseUrl();  ?>/images/default.gif" />
	</div>
</div>

<!-- Loading GIF div end -->
</div> 
<div class="modal-footer footer-background col-md-12">
					<?= Html::submitButton($model->isNewRecord ? 'Save' : 'Update' , ['class' => 'btn btn-modal-lightblue'])?>
					<button class="btn btn-default firm-user-modal-close" data-dismiss="modal">Cancel</button>
</div>
<?php ActiveForm::end(); ?>

<script>
$(document).ready(function(){
	$('.select2').select2();
$("[data-toggle=tooltip]").tooltip();
	$("[data-toggle=popover-hover]").popover({ trigger: "manual" , html: true, animation:false,
//	content: function () {
     //   return 'Please specify a package that you would like to assin to this client. To view package details <a  href="#package_list" data-toggle="modal"><u>click here</u></a>.';
   // }
   })
.on("mouseenter", function () {
    var _this = this;
    $(this).popover("show");
    $(".popover").on("mouseleave", function () {
        $(_this).popover('hide');
    });
}).on("mouseleave", function () {
    var _this = this;
    setTimeout(function () {
        if (!$(".popover:hover").length) {
            $(_this).popover("hide");
        }
    }, 300);
});

<?php if(!empty($get_user_primary)){ ?>

$('input.primary-contact-checkbox').change(function(){

if ($('input.primary-contact-checkbox').is(':checked')) {

toastr.error('You have already made other user as primary contact, this will override previous one.');	
	
}	

});
<?php } ?>


<?php if(!empty($get_user_billing)){ ?>

$('input.billing-contact-checkbox').change(function(){

if ($('input.billing-contact-checkbox').is(':checked')) {

toastr.error('You have already made other user as billing contact, this will override previous one.');	
	
}	

});
<?php } ?>

});

</script>

