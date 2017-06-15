<?php
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;
use yii\helpers\Html;
use kartik\alert\Alert;
use dosamigos\tinymce\TinyMce;
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
				<span class="">Email Templates</span>

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
			<?php $form = ActiveForm::begin(); ?>
				<div class="col-md-12 border-ddd widget padding-15">
					<ul class="nav nav-tabs mb-4 blue-main-nav-admin" role="tablist">
						<li class="nav-item"><a class="nav-link  active color-white"
							id="anchor-pb-1" data-target="#home5" data-toggle="tab"
							href="javascript: void(0);" role="tab" aria-expanded="true">Email
								Templates <span class="fa fa-info-circle information-icon"
								title="" data-container="body" data-toggle="popover-hover"
								data-placement="right"
								data-content="Update email templates"
								data-original-title="Email
								Templates"></span>
						</a></li>


					</ul>
					<div class="col-md-12 margin-top-10">

						<div class="col-md-6 padding-0">
							<div class="form-group ">
								<label class="form-control-label" for="l0">Email Type*</label>
				<?php
				echo $form->field ( $modelEmailTypes, 'email_type_id', [ 
						'inputOptions' => [ 
								'class' => 'form-control' 
						] 
				]
				 )->dropDownList ( $all_email_types, [ 
						'prompt' => '-Select-',
						'onchange' => ' changeemail(this.value);' 
				] )->label ( false );
				?>
				</div>
						</div>
					</div>

					<div class="col-md-12">
						<div class="col-md-6 padding-0">

							<div class="form-group ">
								<label class="form-control-label" for="l0">Email Subject*</label>
						<?= $form->field($modelEmailTemplates, 'subject', ['inputOptions' => ['class' => 'form-control']])->textInput(['maxlength' => true])->label(false); ?>
							</div>
						</div>
					</div>


					<div class="col-md-12">


						<div class="form-group ">
							<label class="form-control-label" for="l0">Email Body*</label>
					<?=$form->field ( $modelEmailTemplates, 'body' )->widget ( TinyMce::className (), [ 'clientOptions' => [ 'plugins' => [
							
    "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak",
    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
    "table contextmenu directionality emoticons template textcolor paste fullpage textcolor colorpicker textpattern"
   ],
		'theme' => 'modern',
		'toolbar1' => "undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
		'toolbar2' => "preview media | forecolor backcolor emoticons fontselect fontsizeselect | codesample help",
		'height' => 480
		] ] )->label ( false )?>
							</div>

					</div>
					<div class="col-md-12 padding-0 bg-sky-blue border-ddd"
						align="right" style="border-top: none;">

						<div class="modal-footer-btn padding-15">
													<?= Html::submitButton($modelEmailTemplates->isNewRecord ? 'Save' : 'Update', ['class' => $modelEmailTemplates->isNewRecord ? 'btn btn-primary' : 'btn btn-primary']) ?> <a
								class="btn btn-default"
								href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/search"
								tabindex="1">Cancel</a>
						</div>
					</div>
				</div>
				 <?php ActiveForm::end(); ?>
			</div>
		</div>

	</div>

</div>
