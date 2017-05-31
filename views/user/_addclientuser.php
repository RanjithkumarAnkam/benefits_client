<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>
<div class="modal-header modal-header-color">

	<button type="button"
		class="close-modal modal-opacity close-modal-blue"
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
			<?= $form->field($model, 'first_name', ['inputOptions' => ['class' => 'form-control']])->textInput(['maxlength' => true]); ?>
		</div>
		<div class="col-md-6">
			<?= $form->field($model, 'last_name', ['inputOptions' => ['class' => 'form-control']])->textInput(['maxlength' => true]); ?>
		</div>
	</div>

	<div class="col-md-12 padding-0">
		<div class="col-md-6">
			<?= $form->field($model, 'title', ['inputOptions' => ['class' => 'form-control']])->textInput(['maxlength' => true]); ?>
		</div>
		<div class="col-md-6">
			<?= $form->field($modelUser, 'username', ['inputOptions' => ['class' => 'form-control']])->textInput(['maxlength' => true]); ?>
		</div>
	</div>
	<div class="col-md-12 padding-0">
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
		<div class="col-md-6">

			<?= $form->field($model, 'mobile', ['inputOptions' => ['class' => 'form-control  us-phone-mask-input']])->textInput(['maxlength' => true])->label('Mobile'); ?>
		</div>
	</div>

	<div class="col-md-12 padding-0">
		<div class="col-md-6">
			<label class="form-control-label" for="l0">Profile Image <span class="fa fa-info-circle information-icon" title="Profile Image" data-container="body" data-toggle="popover-hover" data-placement="right" data-content="Recommended dimensions are 400x400 pixels."></span></label>
			 <?= $form->field($model, 'profile_pic')->fileInput(['class' => 'form-control'])->label('Profile Image',['class'=>'form-control-label'])->label(false); ?>
		</div>
	</div>
	<div class="col-md-12">
		<div class="col-md-6">
			<h6 class="action_head">Set Up This User As: <i class="fa fa-info-circle" title="Set Up This User As" data-container="body" data-toggle="popover-hover" data-placement="right" data-content="Select if this user will be the primary point of contact for the firm and/or the billing contact for the client.  If neither, simply leave blank." ></i></h6>
			<div class="">
				<div class="col-md-9 padding-0">
					<label class="mt-checkbox mt-checkbox-outline margin-bottom-10">
								Client Primary Contact <input type="hidden" value="0"
								name="ClientUser[is_primary]" /> <input type="checkbox" value="1"
								<?php echo $model->is_primary ? 'checked' : '';?>
								name="ClientUser[is_primary]"> <span></span>
					</label>
					
				</div>

				<div class="col-md-9 padding-0">
				
					<label class="mt-checkbox mt-checkbox-outline margin-bottom-10">
								Client Billing Contact <input type="hidden" value="0"
								name="ClientUser[is_billing]" /> <input type="checkbox" value="1"
								<?php echo $model->is_billing ? 'checked' : '';?>
								name="ClientUser[is_billing]"> <span></span>
							</label>
				</div>


			</div>

		</div>

	</div>



</div>

<div class="modal-footer footer-background">

	<?= Html::submitButton('Save', ['class' => 'btn btn-primary'])?>
	<a href="#"
		class="btn btn-default" data-dismiss="modal"> Cancel </a>

</div>
<?php ActiveForm::end(); ?>
<!-- Loading GIF div starts -->
<div class="load-gif" id="loading-indicator" style="display: none;">
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
});
$(document).on('ready pjax:success', function(){
	$('.view-client').click(function(e){
	       e.preventDefault();
			
			$('#add_client_user').modal('show').find('.modal-content').load($(this).attr('href'));
			$('.select2').select2();
	      
	});
});
</script>
