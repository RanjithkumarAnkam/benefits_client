
<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>

<section class="page-content">
	<div class="page-content-inner single-page-login-alpha" style="background-image: url(<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/themes/clean-ui/common/img/temp/login/4.jpg)">

		<!-- Login Alpha Page -->
		<div class="single-page-block-header">
			<div class="row">
				<div class="col-lg-4">
					<div class="logo" style="max-width: none;">
						<a href="javascript: history.back();"> <img
							src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/images/logo/111.png"
							alt="Benefit Client Template" />
						</a>
					</div>
				</div>

			</div>
		</div>
		<div class="single-page-block">
			<div class="row">
				<div class="col-xl-12">
					<div class=""></div>
					<div class="single-page-block-inner" style="padding:30px;padding-bottom:10px;background-position:602px;background-image: url('<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/themes/clean-ui/common/img/temp/login/3.jpg')">
						<div class="single-page-block-form">
							<h3 class="text-center">
								<i class="icmn-enter margin-right-10"></i> Login Form
							</h3>
							<br />
                        
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
								<label class="form-label">Username</label>
         <?= $form->field($model, 'username')->textInput(['autofocus' => true,'id'=>'validation-email','placeholder'=>'Email or Username','data-validation'=>'[EMAIL]'])->label(false) ?>                                
     </div>
							<div class="form-group">
								<label class="form-label">Password</label> 
        <?= $form->field($model, 'password')->passwordInput(['id'=>'validation-password','placeholder'=>'Password','data-validation'=>'[L>=6]','class'=>'form-control password','data-validation-message'=>'$ must be at least 6 characters'])->label(false)?>
	 
	 </div>
							<div class="form-group">
        <?= $form->field($model, 'rememberMe')->checkbox()?>
 	 </div>
							<div class="form-group">            
        <?= Html::submitButton('Sign In', ['class' => 'btn btn-primary width-150', 'name' => 'login-button']) ?>          
    </div>
							<div class="form-group">
								<div class="social-login">
									<span class="title"> Use another service to Log In </span>
									<div class="social-container">
										<a href="javascript: void(0);" class="btn btn-icon"> <i
											class="icmn-facebook"></i>
										</a> <a href="javascript: void(0);" class="btn btn-icon"> <i
											class="icmn-google"></i>
										</a> <a href="javascript: void(0);" class="btn btn-icon"> <i
											class="icmn-windows"></i>
										</a> <a href="javascript: void(0);" class="btn btn-icon"> <i
											class="icmn-twitter"></i>
										</a>
									</div>
								</div>
							</div>

    <?php ActiveForm::end(); ?>
                        
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="single-page-block-footer text-center">
			<ul class="list-unstyled list-inline">
				<li><a href="javascript: void(0);" style="color:#FFF !important; font-weight:bold;">Sky Insurance Technologies 2017
						18 Interchange Blvd, Greenville SC 29615</a></li>
				<li><a href="javascript: void(0);" style="color:#FFF !important; font-weight:bold;">User Agreement</a></li>
				<li><a href="javascript: void(0);" style="color:#FFF !important; font-weight:bold;">Privacy Policy</a></li>
				<li><a href="javascript: void(0);" style="color:#FFF !important; font-weight:bold;">Contact Us</a></li>
				<li><a href="javascript: void(0);" style="color:#FFF !important; font-weight:bold;">Help</a></li>
				<li><a href="javascript: void(0);" style="color:#FFF !important; font-weight:bold;">Subscribe</a></li>
			</ul>
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

<div class="main-backdrop">
	<!-- -->
</div>