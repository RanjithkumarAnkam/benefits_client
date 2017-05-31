
<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>

<section class="page-content">
	<div class="page-content-inner single-page-login-alpha" >

		<!-- Login Alpha Page -->
		<div class="single-page-block-header">
			<div class="row">
				<div class="col-lg-4">
					<div class="logo" style="max-width: none;">
						<a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/site/login"> <img
							src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/images/logo/benefits.png"
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
					<div class="single-page-block-inner" style="padding:30px;padding-bottom:10px;margin-bottom: 10px;;">
						<div class="single-page-block-form">
							
							<div class="col-xs-6">
							<h4 >
								 Please Sign In
							</h4>
							</div>
							<div class="col-xs-6" align="right">
							<i class="fa fa-unlock-alt  margin-right-10"></i>Secure
							</div>
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
								
         <?= $form->field($model, 'username')->textInput(['autofocus' => true,'id'=>'validation-email','placeholder'=>'Email or Username','data-validation'=>'[EMAIL]'])->label(false) ?>                                
     </div>
		<div class="form-group">
					
        <?= $form->field($model, 'password')->passwordInput(['id'=>'validation-password','placeholder'=>'Password','data-validation'=>'[L>=6]','class'=>'form-control password','data-validation-message'=>'$ must be at least 6 characters'])->label(false)?>
	 
	 </div>
	 
	 <div class="form-group">            
        <?= Html::submitButton('Sign In', ['class' => 'btn btn-primary width-150', 'name' => 'login-button']) ?>          
    </div>
	 
	
						
	 <div class="col-md-12">
	 <div class="col-md-6">
	<div class="form-group">
        <?= $form->field($model, 'rememberMe')->checkbox()?>
 	 </div>
	 </div>
	 
	<div class="col-md-6 pull-right">
	<a href="#" class="pull-right">Forgot Password</a>
	<p class="help-block help-block-error"></p>
	</div>
	 </div>
	 </div>
							<div class="form-group ">            
        <?php // Html::submitButton('Sign In', ['class' => 'btn btn-primary width-150', 'name' => 'login-button']) ?>          
    </div>
							<!-- <div class="form-group" style="color:#24222f;">
								<div class="social-login">
									<span class="title"> Use another service to Log In </span>
									<div class="social-container">
										<a href="javascript: void(0);" class="btn btn-icon"> <i style="color:#24222f;"
											class="icmn-facebook"></i>
										</a> <a href="javascript: void(0);" class="btn btn-icon"> <i style="color:#24222f;"
											class="icmn-google"></i>
										</a> <a href="javascript: void(0);" class="btn btn-icon"> <i style="color:#24222f;"
											class="icmn-windows"></i>
										</a> <a href="javascript: void(0);" class="btn btn-icon"> <i style="color:#24222f;"
											class="icmn-twitter"></i>
										</a>
									</div>
								</div>
							</div> -->

    <?php ActiveForm::end(); ?>
                        
						</div>
					</div>
				</div>
				
				
				
			</div>
			<div id="u1527" class="single-page-block" align="center">
			  <p class="font-45"><span>Reporting.&nbsp; Analytics.&nbsp; Simple.</span></p>
			</div>
			
			<div class="single-page-block-footer text-center">
			<ul class="list-unstyled list-inline">
				<li><a href="javascript: void(0);" style="color:#FFF !important; font-weight:bold;font-size:12px;">Sky Insurance Technologies 2017
						</a></li>
						<li><a href="javascript: void(0);" style="color:#FFF !important; font-weight:bold;font-size:12px;">18 Interchange Blvd, Greenville SC 29615</a></li>
				<li><a href="javascript: void(0);" style="color:#FFF !important; font-weight:bold;font-size:12px;">User Agreement</a></li>
				<li><a href="javascript: void(0);" style="color:#FFF !important; font-weight:bold;font-size:12px;">Privacy Policy</a></li>
				<li><a href="javascript: void(0);" style="color:#FFF !important; font-weight:bold;font-size:12px;">Contact Us</a></li>
				<li><a href="javascript: void(0);" style="color:#FFF !important; font-weight:bold;font-size:12px;">Help</a></li>
				<li><a href="javascript: void(0);" style="color:#FFF !important; font-weight:bold;font-size:12px;">Subscribe</a></li>
			</ul>
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

<div class="main-backdrop">
	<!-- -->
</div>
<style>
.single-page-block-header{
	padding: 10px !important;
}
.single-page-block-footer{
	padding: 10px !important;
}
body.single-page .page-content .page-content-inner{
	
	height:100%;
}


</style>