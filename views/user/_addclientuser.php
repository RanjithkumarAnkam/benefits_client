<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>
<div class="modal-header modal-header-color">

	<button type="button"
		class="close-modal modal-opacity close-modal-blue client-user-modal-close"
		data-dismiss="modal" aria-hidden="true">X</button>
	<h4 class="modal-title color-white" id="myModalLabel">
	<?php if($model->isNewRecord){ ?>
	Add Client User
	<?php }else{ ?>
	Update Client User
	<?php }?></h4>
</div>
<?php $form = ActiveForm::begin(['enableClientValidation'=>true,'action'=>$model->isNewRecord ? Yii::$app->urlManager->createUrl("user/saveclientuser") : Yii::$app->urlManager->createUrl("user/updateclientuser"),'options' => ['id' => 'form_add_client_user']]); ?>
<div class="modal-body row">

	<input type="hidden" id="firm_user_for_firm"
		name="SupportVariable[client_id]" value="<?php echo $encrypt_client_id; ?>" />

	<input type="hidden" id="firm_user_for_firm"
		name="SupportVariable[client_user_id]"
		value="<?php echo $encrypt_client_user_id; ?>" />



	<div class="col-md-12 padding-0">
		<div class="col-md-6">
			<label class="form-control-label" for="l0">First Name *</label>
			<?= $form->field($model, 'first_name', ['inputOptions' => ['class' => 'form-control']])->textInput(['maxlength' => true,'onkeypress'=>'return username(event);'])->label(false); ?>
		</div>
		<div class="col-md-6">
			<label class="form-control-label" for="l0">Last Name *</label>
			<?= $form->field($model, 'last_name', ['inputOptions' => ['class' => 'form-control']])->textInput(['maxlength' => true,'onkeypress'=>'return username(event);'])->label(false); ?>
		</div>
	</div>

	<div class="col-md-12 padding-0">
		<div class="col-md-6">
			<label class="form-control-label" for="l0">Title</label>
			<?= $form->field($model, 'title', ['inputOptions' => ['class' => 'form-control']])->textInput(['maxlength' => true,'onkeypress'=>'return username(event);'])->label(false); ?>
		</div>
		<div class="col-md-6">
			<label class="form-control-label" for="l0">Email Address *</label>
			<?= $form->field($modelUser, 'username', ['inputOptions' => ['class' => 'form-control']])->textInput(['maxlength' => true])->label(false); ?>
		</div>
	</div>
	<div class="col-md-12 padding-0">
		<div class="col-md-6 ">
			<div class="">

				<div class="">

					<div class="col-md-12 padding-0">
						<div class="col-md-9 padding-0">
									<label class="form-control-label" for="l0">Phone *</label>
												 <?= $form->field($model, 'phone')->textInput(['class' => 'form-control us-phone-mask-input'])->label(false); ?>
											</div>
						<div class="col-md-3 padding-right-0">
									<label class="form-control-label" for="l0">Extension</label>
												<?= $form->field($model, 'extension')->textInput(['class' => 'form-control numbers','maxlength'=>'6'])->label(false); ?>
											</div>
					</div>
				</div>

			</div>
		</div>
		<div class="col-md-6">
			<label class="form-control-label" for="l0">Mobile</label>
			<?= $form->field($model, 'mobile', ['inputOptions' => ['class' => 'form-control  us-phone-mask-input']])->textInput(['maxlength' => true])->label(false); ?>
		</div>
	</div>

	<div class="col-md-12 padding-0">
		<div class="col-md-6">
			<label class="form-control-label" for="l0">Profile Image <span class="fa fa-info-circle information-icon" title="Profile Image" data-container="body" data-toggle="popover-hover" data-placement="right" data-content="Recommended dimensions are 400x400 pixels."></span></label>
			 <?= $form->field($model, 'profile_pic')->fileInput(['class' => 'form-control','accept'=>"image/x-png,image/gif,image/jpeg,image/tif,image/bmp,image/jpg"])->label('Profile Image',['class'=>'form-control-label'])->label(false); ?>
		</div>
	</div>
	<div class="col-md-12">
		<div class="col-md-6">
			<h6 class="action_head">Set up this user as: <i class="fa fa-info-circle" title="Set Up This User As" data-container="body" data-toggle="popover-hover" data-placement="right" data-content="Select if this user will be the primary point of contact for the firm and/or the billing contact for the client.  If neither, simply leave blank." ></i></h6>
			<div class="">
				<div class="col-md-9 padding-0">
					<label class="mt-checkbox mt-checkbox-outline margin-bottom-10">
								Client Primary Contact <input type="hidden" value="0" class="primary-contact-checkbox"
								name="ClientUser[is_primary]" /> <input type="checkbox" value="1"
								<?php echo $model->is_primary ? 'checked' : '';?> class="primary-contact-checkbox"
								name="ClientUser[is_primary]"> <span></span>
					</label>
					
				</div>

				<div class="col-md-9 padding-0">
				
					<label class="mt-checkbox mt-checkbox-outline margin-bottom-10">
								Client Billing Contact <input type="hidden" value="0" class="billing-contact-checkbox"
								name="ClientUser[is_billing]" /> <input type="checkbox" value="1"
								<?php echo $model->is_billing ? 'checked' : '';?> class="billing-contact-checkbox"
								name="ClientUser[is_billing]"> <span></span>
							</label>
				</div>


			</div>

		</div>

	</div>



</div>

<div class="modal-footer footer-background">

	<?= Html::submitButton($model->isNewRecord ? 'Save' : 'Update', ['class' => 'btn btn-primary'])?>
	<a href="#"
		class="btn btn-default client-user-modal-close" data-dismiss="modal"> Cancel </a>

</div>
<?php ActiveForm::end(); ?>
<!-- Loading GIF div starts -->
<div class="load-gif" id="loading-indicator-client" style="display: none;">
	<div class="procressing_plz_wait">
		<img class=""
			src="<?php echo Yii::$app->getUrlManager()->getBaseUrl();  ?>/images/default.gif" />
	</div>
</div>

<!-- Loading GIF div end -->

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


	 $(document).on('click', '.primary-class-yes', function () { 
		 $('input.primary-contact-checkbox').attr('checked',true);
		 $('#primary_billing_button_yes').removeClass('primary-class-yes');
		 $('#primary_billing_button_no').removeClass('primary-class-no');
	 });
	 $(document).on('click', '.primary-class-no', function () { 
		 $('input.primary-contact-checkbox').attr('checked',false);
		 $('#primary_billing_button_yes').removeClass('primary-class-yes');
		 $('#primary_billing_button_no').removeClass('primary-class-no');
	 });

	 $(document).on('click', '.billing-class-yes', function () { 
		 $('input.billing-contact-checkbox').attr('checked',true);
		 $('#primary_billing_button_yes').removeClass('billing-class-yes');
		 $('#primary_billing_button_no').removeClass('billing-class-no');
	 });
	 $(document).on('click', '.billing-class-no', function () { 
		 $('input.billing-contact-checkbox').attr('checked',false);
		 $('#primary_billing_button_yes').removeClass('billing-class-yes');
		 $('#primary_billing_button_no').removeClass('billing-class-no');
	 });


<?php if(!empty($get_user_billing)){ ?>

$('input.billing-contact-checkbox').change(function(){

if ($('input.billing-contact-checkbox').is(':checked')) {

	$('#label_primary_billing').html('<?php echo $get_user_primary->first_name;?> is already Billing Contact, Do you Want to Override it.');
	
	$('#primary_billing_button_yes').addClass('billing-class-yes');
	$('#primary_billing_button_no').addClass('billing-class-no');
	$('#primary_billing').modal('show');
//toastr.error('You have already made other user as billing contact, this will override previous one.');	
	
}	

});
<?php } ?>

<?php if(!empty($get_user_primary)){ ?>

$('input.primary-contact-checkbox').change(function(){
	
	
if ($('input.primary-contact-checkbox').is(':checked')) {

	$('#label_primary_billing').html('<?php echo $get_user_primary->first_name;?> is already Primary Contact, Do you Want to Override it.');
	
	$('#primary_billing_button_yes').addClass('primary-class-yes');
	$('#primary_billing_button_no').addClass('primary-class-no');
	$('#primary_billing').modal('show');
	
//toastr.error('You have already made other user as primary contact, this will override previous one.');	
	
}	

});
<?php } ?>



});

</script>
