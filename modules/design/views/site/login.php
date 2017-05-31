
<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>

<section class="page-content">
	<div class="page-content-inner single-page-login-alpha" style="background-image: url(<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/images/design/Login_bg2.png)">

		<!-- Login Alpha Page -->
		
		<div class="single-page-block login" style="padding:0px !important;">
			<div class="row">
				<div class="col-xl-12">
					<div class=""></div>
					<div class="single-page-block-inner" >
						<div class="single-page-block-form">
							
										<div class="logo" style="max-width: none;" align="center">
											<a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/site/login"> <img class="login-logo"
												src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/images/logo/benefits.png"
												alt="Benefit Client Template" />
											</a>
										</div>
									
                        <div class="col-md-12 padding-0 margin-top-65">
                        <?php
																								
$form = ActiveForm::begin ( [ 
																										'id' => 'form-validation',
																										'fieldConfig' => [ 
																												'labelOptions' => [ 
																														'class' => 'form-label' 
																												] 
																										] 
																								] );
																								?>
    
     <div class="form-group">
								<label class="form-label font-white">Username</label>
         <?= $form->field($model, 'username')->textInput(['id'=>'validation-email','placeholder'=>'Email or Username'])->label(false) ?>                                
     </div>
		<div class="form-group">
					<label class="form-label font-white">Password</label> 
        <?= $form->field($model, 'password')->passwordInput(['id'=>'validation-password','placeholder'=>'Password','data-validation'=>'[L>=6]','class'=>'form-control password'])->label(false)?>
	 
	 </div>
	 <div class="col-md-12  padding-0">
	 <div class="col-md-6  padding-0">
	<div class="form-group">
        <label class="mt-checkbox mt-checkbox-outline  font-white"> Remember Me
                                                            <input type="checkbox" value="1" name="checkbox6">
                                                            <span></span>
                                                        </label>
 	 </div>
	 </div>
	 
	<div class="col-md-6 pull-right  padding-0">
	<a href="#" class="pull-right  font-white" style="color:white!important;">Forgot Password</a>
	<p class="help-block help-block-error"></p>
	</div>
	 </div>
	 
							<div class="form-group">            
        <?= Html::submitButton('Sign In', ['class' => 'btn btn-primary col-xs-12', 'name' => 'login-button']) ?>          
    </div>
							

    <?php ActiveForm::end(); ?>
                  </div> 
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
				
						<li><a href="javascript: void(0);" >18 Interchange Blvd, Greenville SC 29615</a></li>
				<li><a href="javascript: void(0);" >User Agreement</a></li>
				<li><a href="javascript: void(0);" >Privacy Policy</a></li>
				<li><a href="javascript: void(0);" >Contact Us</a></li>
				<li><a href="javascript: void(0);" >Help</a></li>
				<li><a href="javascript: void(0);" >Subscribe</a></li>
			</ul>
			<div class="single-page-copyright">
			Copyright &copy; 2017 Sky Insurance Technologies
			</div>
		</div>
		</div>
		
		<!-- End Login Alpha Page -->

	</div>
	<?php
	
$this->registerJs ( "  $(function() {

        // Add class to body for change layout settings
        $('body').addClass('single-page');

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
        $('.password').password({
            eyeClass: '',
            eyeOpenClass: 'icmn-eye',
            eyeCloseClass: 'icmn-eye-blocked'
        });

    });" );
	?>
	
	<!-- End Page Scripts -->
</section>
