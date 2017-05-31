
<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\alert\Alert;
use yii\captcha\Captcha;


?>

<section class="page-content">
	<div class="page-content-inner single-page-login-alpha" style="background-image: url(<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/images/design/Login_bg2.png)">

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

		<div class="single-page-block login padding-0">
			<div class="row">
				<div class="col-xl-12">
					<div class="row"><div class="col-md-12 padding-left-30 padding-top-10">
  <img class="sir-logo" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/images/logo/sir_logo.png" alt="Benefit Client Template">
  </div></div>
  
  <!--  starting block for login block-->
					<div class="single-page-block-inner" >
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
																										'id' => 'email-form-validation',
																										'fieldConfig' => [ 
																												'labelOptions' => [ 
																														'class' => 'form-label' 
																												] 
																										] 
																								] );
																								?>
    
    
							
         <?= $form->field($model, 'username')->textInput(['id'=>'validation-email','placeholder'=>'Email or Username']) ?>                                
     
	
					
        <?= $form->field($model, 'password')->passwordInput(['id'=>'validation-password','placeholder'=>'Password','data-validation'=>'[L>=6]','class'=>'form-control password'])?>
	 
	
	 <div class="col-md-12  padding-0">
	 <div class="col-md-6  padding-0">
										<div class="form-group field-loginform-rememberme has-success">
										
										<label  class="mt-checkbox mt-checkbox-outline color-black">
										Remember Me
										<input type="hidden" name="LoginForm[rememberMe]" value="0"><input type="checkbox" id="loginform-rememberme" name="LoginForm[rememberMe]" value="1" checked aria-invalid="false">
										<span></span>
										</label>
										<p class="help-block help-block-error"></p>
										
										
										</div>
										
									</div>
	 
	<div class="col-md-6 pull-right  padding-0">
	<p class="pull-right color-black  cursor-pointer" id="forgot_password_link"
											><u>Forgot Password</u></p>
	
	</div>
	 </div>
	 
							<div class="form-group">            
        <?= Html::submitButton('Sign In', ['class' => 'btn btn-primary col-xs-12 login-button', 'name' => 'login-button','id'=>'login_button']) ?>          
    </div>
							

    <?php ActiveForm::end(); ?>
                  </div> 
</div>				  
						</div>
				  <!--  starting block for login block-->	
					
					</div>
				</div>
			</div>
			
			<div class="single-page-desc">
			<span class="single-page-desc-text">Reporting . Analytics . Simple</span>
			</div>
			<div class="single-page-block-footer text-center">
			<ul class="list-unstyled list-inline">
				
						<li><a href="javascript: void(0);" >18 Interchange Blvd, Greenville SC 29615</a></li>
				<li><a href="javascript: void(0);" >User Agreement</a></li>
				<li><a href="javascript: void(0);" >Privacy Policy</a></li>
				<li><a href="javascript: void(0);" >Contact Us</a></li>
				<li><a href="javascript: void(0);" >Help</a></li>
				<li><a href="javascript: void(0);" >Subscribe</a></li>
			</ul>
			<div class="single-page-copyright">
			Copyright &copy; 2017 Sky Tech Analytics
			</div>
		</div>
		</div>
		
		<!-- End Login Alpha Page -->

	</div>
	
	
	<!-- Forgot Password modal starts -->
	
	<div class="modal fade" id="forgot-password" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false" style="display: none;">
				<div class="modal-dialog" style="width: 450px;">
					<div class="modal-content">
						<div class="modal-header modal-header-color">
							 
							<button type="button" class="close-modal modal-opacity close-modal-blue" data-dismiss="modal" aria-hidden="true">
								X
							</button>
							<h4 class="modal-title color-white" id="myModalLabel">
								Forgot Password
							</h4>
						</div>
						
						 <?php $form = ActiveForm::begin([
			                    'id' => 'forgot-password-form',
						 		//'data-pjax' => '',
						 		'options'=>['class'=>'form-align'],
			                ]); ?>
						<div class="modal-body">
						
							<?= $form->field($modelforgotpassword, 'username')->label('Enter your Username / Email Id') ?>
							
							<?= $form->field($modelforgotpassword, 'captcha')->widget(Captcha::className())->hint('Please click on captcha image to change captcha') ?>
		
						</div>
						<div class="modal-footer footer-background">
							 <?= Html::submitButton('Go', ['class' => 'btn  btn-primary ']) ?>
							<button type="button" class="btn btn-default" data-dismiss="modal">
								Close
							</button> 
							
						</div>
						 <?php ActiveForm::end(); ?>
						
					</div>
					
				</div>
				
			</div>
	<!-- Forgot password ends -->
	
	<?php
	
$this->registerJs ( "  $(function() {

       

        // Form Validation
        $('#form-validation').validate({
            submit: {
                settings: {
                    inputContainer: '.form-group',
                    errorListClass: 'form-control-error',
                    errorClass: 'has-danger'
                }
            }
        });

        // Show/Hide Password
      //  $('.password').password({
       //     eyeClass: '',
       //     eyeOpenClass: 'icmn-eye',
       //     eyeCloseClass: 'icmn-eye-blocked'
      //  });
		
		
		$('#forgot_password_link').click(function(){
		
		$('#forgotpasswordform-username').val('');
		$('.field-forgotpasswordform-username').removeClass('has-error');
		$('.field-forgotpasswordform-username').removeClass('has-success');
		$('.field-forgotpasswordform-username').find('.help-block-error').html('');
		
		$('#forgotpasswordform-captcha').val('');
		$('.field-forgotpasswordform-captcha').removeClass('has-error');
		$('.field-forgotpasswordform-captcha').removeClass('has-success');
		$('.field-forgotpasswordform-captcha').find('.help-block-error').html('');

		$('#forgot-password').modal('show');
		});
		
    });" );
	
	
if($modelforgotpassword->hasErrors())
{
	$this->registerJs (  "  $(function() {

	$('#forgot-password').modal('show');
		
	});" );
}


	?>
	
	<!-- End Page Scripts -->
</section>
