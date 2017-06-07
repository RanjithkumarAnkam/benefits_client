
<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
//use yii\captcha\Captcha;
use yii\widgets\Pjax;
use kartik\alert\Alert;
use richweber\recaptcha\Captcha;

?>

<section class="page-content">
	<div class="page-content-inner single-page-login-alpha" style="background-image: url(<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/images/design/Login_bg2.jpg)">

		<!-- Login Alpha Page -->
<div class="col-md-11 margin-top-20 alert-div">
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
		<div class="single-page-block login" style="padding: 0px !important;">
			<div class="row">
			<div class="col-xl-12">
					<div class="row"><div class="col-md-12 padding-left-30 padding-top-10">
  <img class="sir-logo" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/images/logo/sir_logo.png" alt="Benefit Client Template">
  </div></div>
				
					
					<div class="single-page-block-inner">
						<div class="single-page-block-form">

							<div class="logo" style="max-width: none;" align="center">
											<a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/site/login"> <img class="login-logo"
												src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/images/logo/benefits.png"
												alt="Benefit Client Template" />
											</a>
										</div>

							<div class="col-md-12 padding-0 margin-top-50">
              <?php
														
														$form = ActiveForm::begin ( [ 
																'id' => 'form-validation',
																
														] );
														?>
    
   
         <?= $form->field($model_password_form, 'password')->passwordInput(['placeholder'=>'Password']) ?>                                
     
        <?= $form->field($model_password_form, 'confirmpassword')->passwordInput(['placeholder'=>'Confirm Password'])?>
	 
	
				
								<div class="form-group">            
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary col-xs-12 login-button', 'name' => 'login-button','onclick'=>'return validatesetpassword();']) ?>          
    </div>
							

    <?php ActiveForm::end(); ?>
                  </div>
						</div>
					</div>
				
			</div>
		</div>

		<div class="single-page-desc">
			<span class="single-page-desc-text">Reporting . Analytics . Simple</span>
		</div>
		<div class="single-page-block-footer text-center">
			<ul class="list-unstyled list-inline">

				<li><a href="javascript: void(0);">18 Interchange Blvd, Greenville
						SC 29615</a></li>
				<li><a href="javascript: void(0);">User Agreement</a></li>
				<li><a href="javascript: void(0);">Privacy Policy</a></li>
				<li><a href="javascript: void(0);">Contact Us</a></li>
				<li><a href="javascript: void(0);">Help</a></li>
				<li><a href="javascript: void(0);">Subscribe</a></li>
			</ul>
			<div class="single-page-copyright">Copyright &copy; 2017 Sky Tech
				Analytics</div>
		</div>
	</div>

	<!-- End Login Alpha Page -->

	
	
	
	<!-- End Page Scripts -->
</section>
<div id="pswd_info">
		<h5>Suggested Password Combinations:</h5>
		<ul style="list-style: none;">
			<li id="letter" class="invalid">At least <strong>one letter</strong></li>
			<li id="capital" class="invalid">At least <strong>one capital letter</strong></li>
			<li id="number" class="invalid">At least <strong>one number</strong></li>
			<li id="specialchar" class="invalid">At least <strong>one special character</strong></li>
			<li id="length" class="invalid">Be at least <strong>8 characters</strong></li>
		</ul>
	</div>