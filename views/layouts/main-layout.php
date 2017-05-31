<?php
use yii\helpers\Html;
use yii\helpers\Url;
use app\models\PasswordForm;
use yii\widgets\ActiveForm;
use app\assets\AppAsset;

use yii\data\ArrayDataProvider;
use kartik\grid\GridView;


/* @var $this \yii\web\View */
/* @var $content string */
AppAsset::register($this);
?>

<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
<meta charset="<?= Yii::$app->charset ?>" />
<meta name="viewport" content="width=device-width, initial-scale=0.9">
    <?= Html::csrfMetaTags()?>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= Html::encode($this->title) ?></title>
		
    <link href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/common/img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
    <link href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/common/img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
    <link href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/common/img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
    <link href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/common/img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
    <link href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/common/img/favicon.png" rel="icon" type="image/png">
   

    <!-- HTML5 shim and Respond.js for < IE9 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

	<?php $this->head()?>
	 <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/jquery/jquery.min.js"></script>
	<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css"/>
	<script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/vendors/tether/dist/js/tether.min.js"></script>
   
    
     
</head>
<body class="theme-default body-blue colorful-enabled firm-plan-body" id="body_color">
    <?php $this->beginBody()?>
 <?php //$this->render ( 'left-main.php' )?>
 <?=$this->render ( 'header-main.php' )?>
 <section class="page-content page-content-0 padding-0 back-lightblue">
 <?php echo $content;?>
 	</section>
 <?php //echo $this->render ( 'footer.php' )?>

<div class="main-backdrop"><!-- --></div>


	<!-- jQuery 2.1.4 -->
<div class="col-md-12">

<div class="col-lg-1 col-md-2 pull-right help-button" id="help_button" align="right">
<div class="margin-right-3"><i class="fa fa-info-circle"></i> <span class="">Help</span>
</div>

</div>

<div class="col-md-3  pull-right help-box ui-widget-content" id="help_box_div" style="display:none;">
<div class="col-md-12 help-box-header" align="center">Contact @ 9999-999-999<span><a class="fa fa-minus help-box-minus" id="help_box_btn"></a></span></div>
<div  class="col-md-12 help-box-body">
<p class="margin-bottom-0 padding-10">Lorem ipsum dolor sit amet, ad duo fugit latine, vero repudiare dissentiet at sed. Ne usu rebum graeco graecis. Ex bonorum delenit pri, id vitae euismod vix. Labore noster cum an. Eu pro reque persecuti, sea stet legendos accusata an, at cibo detraxit recteque mel.</p>
<p class="margin-bottom-0 padding-10">Lorem ipsum dolor sit amet, ad duo fugit latine, vero repudiare dissentiet at sed. Ne usu rebum graeco graecis. Ex bonorum delenit pri, id vitae euismod vix. Labore noster cum an. Eu pro reque persecuti, sea stet legendos accusata an, at cibo detraxit recteque mel.</p>

</div>



</div>


</div>

<div id="pswd_info" style="top: 22%;;right: 80px;">
	<h5>Suggested Password Combinations:</h5>
	<ul style="list-style: none;">
		<li id="letter" class="invalid">At least <strong>one letter</strong></li>
		<li id="capital" class="invalid">At least <strong>one capital letter</strong></li>
		<li id="number" class="invalid">At least <strong>one number</strong></li>
		<li id="specialchar" class="invalid">At least <strong>one special character</strong></li>
		<li id="length" class="invalid">Be at least <strong>8 characters</strong></li>
	</ul>
</div>

  <!-- ---------- change password modal --------------- -->

	<form  class="" id="change-password-form">
<div class="modal fade" id="myModal-change-pswd" tabindex="-1"
	role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"  data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog pswd-pop">
		<div class="modal-content">
			<div class="modal-header modal-header-color">
				<button type="button" class="close-modal modal-opacity close-modal-blue" data-dismiss="modal" onclick="resetchangepassword();"
					aria-hidden="true">&times;</button>
				<h4 class="modal-title color-white" id="myModalLabel">Change Password</h4>
			</div>
			<div class="modal-body" style="float: left;">
				
				<div class="form-group col-md-12">
				<div class="col-sm-4 add-mem">
					<label class="add-member-label">Email:</label>
				</div>
				<div class="col-sm-8">
					<span class="form-control"><?php echo Yii::$app->user->identity->username; ?></span> 
				</div>
				</div>
				<div class="form-group col-md-12">
				<div class="col-sm-4 add-mem">
					<label class="add-member-label">Current Password:<span class="red">*</span></label>
				</div>
				<div class="col-sm-8">

					<input type="password" class="form-control add-member-input"
						placeholder="Current Password.." id="current-password" name="oldpass"/> <span
						class="error-msg red" id="current-password-error"></span>
				</div>
				</div>
				<div class="form-group col-md-12">
				<div class="col-sm-4 add-mem">
					<label class="add-member-label">New Password:<span class="red">*</span></label>
				</div>
				<div class="col-sm-8">
					<input type="password" class="form-control add-member-input"
						placeholder="New Password.." id="new-password" name="newpass"/> <span
						class="error-msg red" id="new-password-error"></span>
				</div>
				</div>
				<div class="form-group col-md-12">
				<div class="col-sm-4 add-mem">
					<label class="add-member-label">Confirm Password:<span class="red">*</span></label>
				</div>
				<div class="col-sm-8">
					<input type="password" class="form-control add-member-input"
						placeholder="Confirm Password.." id="new-confirm-password" name="repeatnewpass"/> <span
						class="error-msg red" id="confirm-password-error"></span> <label
						class="error-msg" id="display-password-error"></label>
				</div>
				</div>
				
			</div>
			<div class="modal-footer" style="border-top: none;">
				<button type="button" class="btn btn-primary" id="chng_pwd_btn" onclick="return changepassword();">Save
					Changes</button>
				<button type="button" class="btn btn-default" data-dismiss="modal"
					onclick="resetchangepassword();">Close</button>



			</div>
		</div>
	</div>
</div>
</form>


<div class="modal fade" id="modal-firm-details" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header modal-header-color">
							 
							<button type="button" class="close-modal modal-opacity close-modal-blue" data-dismiss="modal" aria-hidden="true">
								X
							</button>
							<h4 class="modal-title color-white" id="myModalLabel">
								Firm / Client Details
							</h4>
						</div>
						<div class="modal-body">
							<div class="row">
							<div class="col-md-12 padding-top-10 padding-bottom-10">
							<div class="col-md-4 padding-left-8"><label class="margin-top-10"><b> Select a Firm :</b></label></div>
								<div class="col-md-8">
								<select class="form-control" id="firm_id">
								<option selected="" value="Tata Firm">Tata Firm</option>
						          <option value="Capgemini">Capgemini</option>
						          <option value="Tech Mahindra">Tech Mahendra</option>
								</select></div>
								</div>
								</div>
								<div class="row">
							<div class="col-md-12 padding-top-10 padding-bottom-10">
							<div class="col-md-4 padding-left-8"><label class="margin-top-10"><b> Select a Client :</b></label></div>
								<div class="col-md-8">
								<select class="form-control" id="client_id">
								<option selected="" value="Tata Firm">Tata motors</option>
						          <option value="Capgemini">Tata Consultancy</option>
								</select></div>
								</div>
								</div>
						</div>
						<div class="modal-footer footer-background">
							 <a id="modal_go"  class="btn  btn-modal-blue" href="#">
								Go
							</a>
							<button type="button" class="btn btn-default" data-dismiss="modal">
								Close
							</button> 
							
						</div>
					</div>
					
				</div>
				
			</div>

			
<div class="modal fade" id="modal-firm-list" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header modal-header-color">
							 
							<button type="button" class="close-modal modal-opacity close-modal-blue" data-dismiss="modal" aria-hidden="true">
								X
							</button>
							<h4 class="modal-title color-white" id="myModalLabel">
								Firm Details
							</h4>
						</div>
						<div class="modal-body">
							<div class="row">
							<div class="col-md-12 padding-top-10 padding-bottom-10">
							<div class="col-md-4 padding-left-8"><label class="margin-top-10"><b> Select a Firm :</b></label></div>
								<div class="col-md-8">
								<select class="form-control" id="firm_id">
								<option selected="" value="Tata Firm">Tata Firm</option>
						          <option value="Capgemini">Capgemini</option>
						          <option value="Tech Mahindra">Tech Mahendra</option>
								</select></div>
								</div>
								</div>
							 
						</div>
						<div class="modal-footer footer-background">
							 
							<button type="button" class="btn btn-default" data-dismiss="modal">
								Close
							</button> 
							<a id="modal_go_firmlist"  class="btn btn-primary">
								Go
							</a>
						</div>
					</div>
					
				</div>
				
			</div>

			

			<div class="modal fade" id="primary-contact" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header modal-header-color">
							 
							<button type="button" class="close-modal modal-opacity close-modal-blue" data-dismiss="modal" aria-hidden="true">
								X
							</button>
							<h4 class="modal-title color-white" id="myModalLabel">
								Primary Contact Details
							</h4>
						</div>
						<div class="modal-body">
						<form>
						
						 <div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">First Name *</label>
                                </div>
                                <div class="col-md-8 form-group ">
                                    <input type="text" class="form-control" placeholder=" " >
                                </div>
                            </div>
							
							<div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Last Name *</label>
                                </div>
                                <div class="col-md-8 form-group ">
                                    <input type="text" class="form-control" placeholder=" " >
                                </div>
                            </div>
							<div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Email *</label>
                                </div>
                                <div class="col-md-8 form-group ">
                                    <input type="text" class="form-control" placeholder="" >
                                </div>
                            </div>
							<div class="row">
							 
                               <div class="col-md-4 form-group">
                                    <label class="form-control-label" for="l0">Phone *</label>
                                </div>
                                  <div class="col-md-5 form-group ">
                                   <input type="text" class="form-control us-phone-mask-input">
                                </div> 
								    
                                  <div class="col-md-3 form-group ">
                                    <input type="text" class="form-control" placeholder="">
                                </div>
								 
                            </div>
							
							</form>
					
                            </div>
								 
								
							<div class="modal-footer footer-background">
							 
							<button type="button" class="btn btn-default" data-dismiss="modal">
								Close
							</button> 
							<a id="modal_go"  class="btn btn-primary">
								Save
							</a>
						</div>
						</div>
						
					</div>
				</div>
				
					
				
				
				<div class="modal fade" id="add-primary-contact" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header modal-header-color">
							 
							<button type="button" class="close-modal modal-opacity close-modal-blue" data-dismiss="modal" aria-hidden="true">
								X
							</button>
							<h4 class="modal-title color-white" id="myModalLabel">
								Primary Contact Details
							</h4>
						</div>
						<div class="modal-body">
						<form>
						
						 <div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">First Name *</label>
                                </div>
                                <div class="col-md-8 form-group ">
                                    <input type="text" class="form-control" placeholder=" " >
                                </div>
                            </div>
							
							<div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Last Name *</label>
                                </div>
                                <div class="col-md-8 form-group ">
                                    <input type="text" class="form-control" placeholder=" " >
                                </div>
                            </div>
							<div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Email *</label>
                                </div>
                                <div class="col-md-8 form-group ">
                                    <input type="text" class="form-control" placeholder="" >
                                </div>
                            </div>
							<div class="row">
							 
                               <div class="col-md-4 form-group">
                                    <label class="form-control-label" for="l0">Phone *</label>
                                </div>
                                  <div class="col-md-5 form-group ">
                                   <input type="text" class="form-control us-phone-mask-input">
                                </div> 
								    
                                  <div class="col-md-3 form-group ">
                                    <input type="text" class="form-control" placeholder="">
                                </div>
								 
                            </div>
							
							</form>
								</div>
								
							<div class="modal-footer footer-background">
							 
							<button type="button" class="btn btn-default" data-dismiss="modal">
								Close
							</button> 
							<a id="modal_go"  class="btn btn-primary">
								Save
							</a>
						</div>
						</div>
						
					</div>
					
				</div>
				
				
				
			<div class="modal fade" id="billing-contact" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header modal-header-color">
							 
							<button type="button" class="close-modal modal-opacity close-modal-blue" data-dismiss="modal" aria-hidden="true">
								X
							</button>
							<h4 class="modal-title color-white" id="myModalLabel">
								Billing Contact Details
							</h4>
						</div>
						<div class="modal-body">
					<form>
						
						 <div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">First Name *</label>
                                </div>
                                <div class="col-md-8 form-group ">
                                    <input type="text" class="form-control" placeholder=" " >
                                </div>
                            </div>
							
							<div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Last Name *</label>
                                </div>
                                <div class="col-md-8 form-group ">
                                    <input type="text" class="form-control" placeholder=" " >
                                </div>
                            </div>
							<div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Email *</label>
                                </div>
                                <div class="col-md-8 form-group ">
                                    <input type="text" class="form-control" placeholder="" >
                                </div>
                            </div>
							<div class="row">
							 
                               <div class="col-md-4 form-group">
                                    <label class="form-control-label" for="l0">Phone *</label>
                                </div>
                                  <div class="col-md-5 form-group ">
                                   <input type="text" class="form-control us-phone-mask-input">
                                </div> 
								    
                                  <div class="col-md-3 form-group ">
                                    <input type="text" class="form-control" placeholder="">
                                </div>
								 
                            </div>
							
							</form>
								</div>
								
							<div class="modal-footer footer-background">
							 
							<button type="button" class="btn btn-default" data-dismiss="modal">
								Close
							</button> 
							<a id="modal_go"  class="btn btn-primary">
								Save
							</a>
						</div>
						</div>
						
					</div>
					
				</div>
				
				<div class="modal fade" id="add-billing-contact" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header modal-header-color">
							 
							<button type="button" class="close-modal modal-opacity close-modal-blue" data-dismiss="modal" aria-hidden="true">
								X
							</button>
							<h4 class="modal-title color-white" id="myModalLabel">
								Billing Contact Details
							</h4>
						</div>
						<div class="modal-body">
						<form>
						
						 <div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">First Name *</label>
                                </div>
                                <div class="col-md-8 form-group ">
                                    <input type="text" class="form-control" placeholder="" >
                                </div>
                            </div>
							
							<div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Last Name *</label>
                                </div>
                                <div class="col-md-8 form-group ">
                                    <input type="text" class="form-control" placeholder=" " >
                                </div>
                            </div>
							<div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Email *</label>
                                </div>
                                <div class="col-md-8 form-group ">
                                    <input type="text" class="form-control" placeholder="" >
                                </div>
                            </div>
							<div class="row">
							 
                               <div class="col-md-4 form-group">
                                    <label class="form-control-label" for="l0">Phone *</label>
                                </div>
                                  <div class="col-md-5 form-group ">
                                   <input type="text" class="form-control us-phone-mask-input">
                                </div> 
								    
                                  <div class="col-md-3 form-group ">
                                    <input type="text" class="form-control" placeholder="">
                                </div>
								 
                            </div>
							
							</form>
								</div>
								
							<div class="modal-footer footer-background">
							 
							<button type="button" class="btn btn-default" data-dismiss="modal">
								Close
							</button> 
							<a id="modal_go"  class="btn btn-primary">
								Save
							</a>
						</div>
						</div>
						
					</div>
					
				</div>
				
				<!-- modal popup to activate or deactivate the user -->
				
				<div class="modal fade" id="alert_screen" role="dialog"
					aria-labelledby="myModalLabel" aria-hidden="true"
					data-backdrop="static" data-keyboard="false"
					style="z-index: 9999 !important;">
					<div class="modal-dialog modal-sm">
						<div class="modal-content">
							<div class="modal-header modal-header-color">

								<button type="button"
									class="close-modal modal-opacity close-modal-blue"
									data-dismiss="modal" aria-hidden="true">X</button>
								<h4 class="modal-title color-white" id="mydeactivateModalLabel">Deactivate
									user</h4>
							</div>
							<div class="modal-body">
								<p id="mydeactivateModalBodyText">Do You Want to Deactivate the User ?</p>


							</div>

							<div class="modal-footer footer-background">

								<button type="button" class="btn btn-default" data-dismiss="modal">
									No</button>
								<a id="deactivate_modal_go1" class="btn btn-primary" data-dismiss="modal"> Yes
								</a>
							</div>
						</div>

					</div>

				</div>
				
				
				<div class="modal fade" id="alert_firm_screen" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false" style="z-index: 9999 !important;">
				<div class="modal-dialog modal-sm">
					<div class="modal-content">
						<div class="modal-header modal-header-color">
							 
							<button type="button" class="close-modal modal-opacity close-modal-blue" data-dismiss="modal" aria-hidden="true">
								X
							</button>
							<h4 class="modal-title color-white" id="firm_status_change_ModalLabel">
								Deactivate Firm
							</h4>
						</div>
						<div class="modal-body">
					<p id="firm_status_change_ModalText">Do You Want to Deactivate the Firm ?</p>
							
			
								</div>
								
							<div class="modal-footer footer-background">
							 
							<button type="button" class="btn btn-default" data-dismiss="modal">
								No
							</button> 
							<a id="firm_status_change_button"  class="btn btn-primary" data-dismiss="modal">
								Yes
							</a>
						</div>
						</div>
						
					</div>
					
				</div>
				
				<div class="modal fade" id="reset_password" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="z-index: 9999 !important;">
				<div class="modal-dialog modal-sm">
					<div class="modal-content">
						<div class="modal-header modal-header-color">
							 
							<button type="button" class="close-modal modal-opacity close-modal-blue" data-dismiss="modal" aria-hidden="true">
								X
							</button>
							<h4 class="modal-title color-white" id="myModalLabel">
								Reset Password
							</h4>
						</div>
						<div class="modal-body">
					<p>Do You Want to Reset Password For this User ?</p>
							
			
								</div>
								
							<div class="modal-footer footer-background">
							 
							<button type="button" class="btn btn-default" data-dismiss="modal">
								No
							</button> 
							<a id="modal_go2"  class="btn btn-primary" data-dismiss="modal">
								Yes
							</a>
						</div>
						</div>
						
					</div>
					
				</div>
				
				<div class="modal fade" id="resend_activation_link" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
				style="z-index: 9999 !important;">
				<div class="modal-dialog modal-sm">
					<div class="modal-content">
						<div class="modal-header modal-header-color">
							 
							<button type="button" class="close-modal modal-opacity close-modal-blue" data-dismiss="modal" aria-hidden="true">
								X
							</button>
							<h4 class="modal-title color-white" id="myModalLabel">
								Resend Activation Link
							</h4>
						</div>
						<div class="modal-body">
					<p>Do You Want to Resend Activation Link For this User ?</p>
							
			
								</div>
								
							<div class="modal-footer footer-background">
							 
							<button type="button" class="btn btn-default" data-dismiss="modal">
								No
							</button> 
							<a id="resend_activation_link_btn"  class="btn btn-primary">
								Yes
							</a>
						</div>
						</div>
						
					</div>
					
				</div>
				
				<div class="modal fade" id="cancel_modal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
				<div class="modal-dialog modal-sm">
					<div class="modal-content">
						<div class="modal-header modal-header-color">
							 
							<button type="button" class="close-modal modal-opacity close-modal-blue" data-dismiss="modal" aria-hidden="true">
								X
							</button>
							<h4 class="modal-title color-white" id="myModalLabel">
								Cancellation
							</h4>
						</div>
						<div class="modal-body">
					<p>Do You Want to Cancel ?</p>
							
			
								</div>
								
							<div class="modal-footer footer-background">
							 
							<button type="button" class="btn btn-default" data-dismiss="modal">
								No
							</button> 
							<a id="modal_go3"  class="btn  btn-modal-blue">
								Yes
							</a>
						</div>
						</div>
						
					</div>
					
				</div>
				
				<div class="modal fade" id="package_list" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-md">
					<div class="modal-content">
						<div class="modal-header modal-header-color">
							 
							<button type="button" class="close-modal modal-opacity close-modal-blue" data-dismiss="modal" aria-hidden="true">
								X
							</button>
							<h4 class="modal-title color-white" id="myModalLabel">
								Package Details
							</h4>
						</div>
						<div class="modal-body">
						
						<form>
						
						 <div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Basic</label>
                                </div> 
                            </div>
							
						 <div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Full Service</label>
                                </div> 
                            </div>
							
						 <div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Bulk</label>
                                </div> 
                            </div>
							
							</form>
				 
								</div>
								
							<div class="modal-footer footer-background">
							 
							<button type="button" class="btn btn-primary" data-dismiss="modal">
								Cancel
							</button> 
							 
						</div>
						</div>
						
					</div>
					
				</div>
				
					<div class="modal fade" id="firm_dashboard" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header modal-header-color">
							 
							<button type="button" class="close-modal modal-opacity close-modal-blue" data-dismiss="modal" aria-hidden="true">
								X
							</button>
							<h4 class="modal-title color-white" id="myModalLabel">
								Filtering
							</h4>
						</div>
						<div class="modal-body">
					<form>
						
						 <div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Locations</label>
                                 <div class="col-md-12 ">
							       <div class="mt-radio-inline  padding-0">
                                                        <label  class="mt-checkbox mt-checkbox-outline">Green Ville
                                                            <input type="checkbox" value="1" checked name="test">
                                                            <span></span>
                                                        </label>
                                                        <label  class="mt-checkbox mt-checkbox-outline"> Atlanta
                                                            <input type="checkbox" value="1" name="test">
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-checkbox mt-checkbox-outline"> Topeka
                                                            <input type="checkbox" value="1" name="test">
                                                            <span></span>
                                                        </label>
                                                    </div>
											</div>
                                </div>
                                <div class="col-md-4 form-group ">
                                   <label class="form-control-label" for="l0">Firm Users</label>
                                   <div class="col-md-12 ">
                                   <div class="mt-radio-inline  padding-0">
                                                        <label  class="mt-checkbox mt-checkbox-outline">John
                                                            <input type="checkbox" value="1" checked name="test">
                                                            <span></span>
                                                        </label>
                                                        <label  class="mt-checkbox mt-checkbox-outline"> Praveen
                                                            <input type="checkbox" value="1" name="test">
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-checkbox mt-checkbox-outline"> Radha
                                                            <input type="checkbox" value="1" name="test">
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                    </div>
                                </div>
                                 <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Clients</label>
                                    <div class="col-md-12 ">
                                    <div class="mt-radio-inline  padding-0">
                                                        <label  class="mt-checkbox mt-checkbox-outline">Company 1
                                                            <input type="checkbox" value="1" checked name="test">
                                                            <span></span>
                                                        </label>
                                                        <label  class="mt-checkbox mt-checkbox-outline"> Company 2
                                                            <input type="checkbox" value="1" name="test">
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-checkbox mt-checkbox-outline"> Company 3
                                                            <input type="checkbox" value="1" name="test">
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                    </div>
                                </div>
                            </div>
							
							
							
							</form>
								</div>
								
							<div class="modal-footer footer-background">
							 
							<button type="button" class="btn btn-default" data-dismiss="modal">
								Close
							</button> 
							<a id=""  class="btn btn-primary">
								Search 
							</a>
						</div>
						</div>
						
					</div>
					
				</div>









<!-- Create Firm User modal start-->
<div class="modal fade" id="create_firm_user" role="dialog"
	aria-labelledby="myModalLabel" aria-hidden="true"
	data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog modal-lg">
		<div class="modal-content col-md-12 padding-0">
			
			
		</div>
	</div>
</div>		
<!-- Create Firm User modal end-->




				
				
<div class="modal fade" id="update_firm_user" role="dialog"
	aria-labelledby="myModalLabel" aria-hidden="true"
	data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog modal-lg">

		<div class="modal-content col-md-12 padding-0">
			<div class="modal-header modal-header-color">

				<button type="button"
					class="close-modal modal-opacity close-modal-blue"
					data-dismiss="modal" aria-hidden="true">X</button>
				<h4 class="modal-title color-white" id="myModalLabel">Update Firm
					User</h4>
			</div>
			<form id="form_update_firm_user"
				action="/self_insured/user/updatefirmuser" onsubmit="return false;"
				enctype="multipart/form-data">
				<div class="modal-body col-md-12">
					<input type="hidden" id="update_firm_user_for_firm" name="SupportVariable[firm_user_id]" />
					<div class="col-md-12 padding-0">
						<div class="col-md-6">
							<div class="">
								<div class="form-group ">
									<label class="form-control-label" for="l0">First Name *</label>

									<input type="text" class="form-control"
										id="update_firm_first_name" name="UpdateFirmUser[first_name]" placeholder=" ">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="">
								<div class="form-group ">
									<label class="form-control-label" for="l0">Last Name *</label>

									<input type="text" class="form-control" name="UpdateFirmUser[last_name]"
										id="update_firm_last_name" placeholder=" ">
								</div>
							</div>

						</div>
					</div>





					<div class="col-md-12 padding-0">
						<div class="col-md-6">
							<div class="">
								<div class=" form-group">
									<label class="form-control-label" for="l0">Job Title *</label>

									<input type="text" class="form-control" name="UpdateFirmUser[title]"
										id="update_firm_job_title" placeholder=" ">
								</div>
							</div>

						</div>
						<div class="col-md-6">
							<div class="">
								<div class=" form-group ">
									<label class="form-control-label" for="l0"> Locations *</label>

									<select class="form-control height-120 select2 locations"
										multiple>
										<option selected>Option 1</option>
										<option>Option 3</option>
										<option>Option 4</option>
										<option>Option 5</option>
										<option>Option 6</option>
										<option>Option 7</option>
										<option>Option 8</option>
									</select>
								</div>
							</div>

						</div>
					</div>



					<div class="col-md-12 padding-0">
						<div class="col-md-6">
							<div class="">
								<div class="form-group">
									<label class="form-control-label" for="l0">Email Id*</label> <input
										type="text" class="form-control" id="update_firm_email_id"
										placeholder="" name="UpdateFirmUser[email_id]">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="">

								<div class="form-group col-md-12 padding-0">
									<div class="col-md-12 padding-0">
										<div class="col-md-9 padding-0">
											<label class="form-control-label" for="l0">Phone *</label>
										</div>
										<div class="col-md-3 padding-right-0">
											<label class="form-control-label" for="l0">Extension </label>
										</div>
									</div>

									<div class="col-md-12 padding-0">
										<div class="col-md-9 padding-0">
											<input type="text" class="form-control us-phone-mask-input"
												id="update_firm_phone" name="UpdateFirmUser[phone]">
										</div>
										<div class="col-md-3 padding-right-0">
											<input type="text" class="form-control" placeholder=""
												id="update_firm_extension" name="UpdateFirmUser[extension]">
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>


					<div class="col-md-12 padding-0">
						<div class="col-md-6">
							<div class="">
								<div class="form-group">
									<label class="form-control-label" for="l0">Mobile</label> <input
										type="text" class="form-control us-phone-mask-input"
										id="update_firm_mobile" placeholder="" name="UpdateFirmUser[cellular]">
								</div>
							</div>

						</div>
						<div class="col-md-6">
							<div class="">
								<div class="form-group ">
									<label class="form-control-label" for="l0">Profile Image</label>

									<input type="file" class="form-control us-phone-mask-input" name="UpdateFirmUser[profile_pic]">
								</div>
							</div>
						</div>
					</div>


					<div id="firm_user_actions">




						<div class="col-md-12 margin-top-5">
							<div class="col-md-4">

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
											<label
												class="mt-checkbox mt-checkbox-outline margin-bottom-10">
												Firm Primary Contact 
												<input type="hidden" value="0" name="UpdateFirmUser[is_primary]"/>
												<input type="checkbox"
												id="update_firm_primary_contact" name="UpdateFirmUser[is_primary]"> <span></span>
											</label>
										</div>

										<div class="col-md-9 padding-0">
											<label
												class="mt-checkbox mt-checkbox-outline margin-bottom-10">
												Firm Billing Contact 
												<input type="hidden" value="0" name="UpdateFirmUser[is_billing]"/>
												<input type="checkbox"
												id="update_firm_billing_contact" name="UpdateFirmUser[is_billing]"> <span></span>
											</label>
										</div>


									</div>

								</div>


							</div>

							<div class="col-md-5">
								<div class="">
									<h6 class="action_head">
										Access Privileges: <span
											class="fa fa-info-circle information-icon"
											title="Access Privileges" data-container="body"
											data-toggle="popover-hover" data-placement="right"
											data-content="Select if this user will have full administrative functionality in the system which includes the ability to view and edit all information regarding all clients, add net clients to the system and view all firm billing information."></span>

									</h6>

									<div class="md-checkbox-list">
										<div class="">
											<label
												class="mt-checkbox mt-checkbox-outline  margin-bottom-10">
												Administrator Access <input type="checkbox" value="1"
												checked name=""> <span></span>
											</label>
										</div>
										<div class="action_head margin-top-5">
											<b>View / Edit Clients: <span
												class="fa fa-info-circle information-icon"
												title="View / Edit Clients" data-container="body"
												data-toggle="popover-hover" data-placement="top"
												data-content="As a default, all firm users will be able to view/edit details of clients they are directly attached to as a primary consultant, account manager or service rep.  In addition, you can add the ability for this user to view other clients to which they are not directly attached either by selecting My Location’s or All Firm Locations.  If My Location’s is selected, the user will be able to view/edit all clients associated to all of their firm locations, even if they are not directly tied to the client from the client set up page.  In the same way, by selecting All Firm Locations the user can have full access to view/edit all clients in the system at all firm locations, even if the firm location is no on their user profile."></span>
											</b>
										</div>
										<div class="col-md-6 padding-0">
											<label
												class="mt-checkbox mt-checkbox-outline  margin-bottom-10">
												My Locations <input type="checkbox" value="1"> <span></span>
											</label> <label
												class="mt-checkbox mt-checkbox-outline  margin-bottom-10">
												All Firm Locations <input type="checkbox" value="1" name="">
												<span></span>
											</label>
										</div>
									</div>


								</div>
							</div>

							<div class="col-md-3">

								<div class="">
									<h6 class="action_head">Settings:</h6>
									<p>
										<a id="modal-alert" href="#alert_screen" class="color-blue"
											data-toggle="modal"><u id="update_firm_change_status_text">Deactivate
												User</u></a>
									</p>
									<p>
										<a id="modal-alert" href="#reset_password" class="color-blue"
											data-toggle="modal"><u>Reset Password</u></a>
									</p>
								</div>
							</div>
						</div>


					</div>
				</div>

				<div class="modal-footer footer-background col-md-12">

					<button type="submit" class="btn btn-modal-blue" onclick="updateFirmUser();">Update</button>
					<a href="#"
						class="btn btn-default" data-dismiss="modal"> Cancel </a>

				</div>
			</form>
		</div>

	</div>

</div>	
				
				
				
				
				

<!-- Adding client user-->
<div class="modal fade" id="add_client_user" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						
						</div>
						
					</div>
					
				</div>		

				
				
		
<div class="modal fade" id="update_pricing_details" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header modal-header-color">
							 
							<button type="button" class="close-modal modal-opacity close-modal-blue" data-dismiss="modal" aria-hidden="true">
								X
							</button>
							<h4 class="modal-title color-white" id="myModalLabel">
								Update System Pricing
							</h4>
						</div>
						<div class="modal-body row">
							
                         <form>
						 
				
						 
						 <div class="col-md-12 padding-0">
						 <div class="col-md-6">
						   <div class="">
                                <div class=" form-group ">
                                    <label class="form-control-label" for="l0">Basic *</label>
                                
                             <input type="text" class="form-control" placeholder="Basic" value="">
                                </div>
                            </div>
						 </div>
						  <div class="col-md-6">
						  <div class="">
                                <div class="form-group ">
                                    <label class="form-control-label" for="l0">Full Service *</label>
                               
                                <input type="text" class="form-control" placeholder="Full Service" value="">
                                </div>
                            </div>
						 </div>
						 </div>
						 
						  <div class="col-md-12 padding-0">
						 <div class="col-md-6">
						 <div class="">
                                <div class="form-group ">
                                    <label class="form-control-label" for="l0">Bulk *</label>
                                
                                <input type="text" class="form-control" placeholder="Bulk" value="">
                                </div>
                            </div>
						 </div>
						 
						 </div>
						   
                        </form>

											
								</div>
								
							<div class="modal-footer footer-background">
							<a href=""  class="btn btn-modal-blue">
								Save  
							</a>
							 	<a href="#"  class="btn btn-default"  data-dismiss="modal">
								Cancel
							</a>
							
						</div>
						</div>
						
					</div>
					
				</div>		

				
				
<div class="modal fade" id="add_pricing_details" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header modal-header-color">
							 
							<button type="button" class="close-modal modal-opacity close-modal-blue" data-dismiss="modal" aria-hidden="true">
								X
							</button>
							<h4 class="modal-title color-white" id="myModalLabel">
								Add System Pricing
							</h4>
						</div>
						<div class="modal-body row">
							
                         <form>
						 
				
						 
						 <div class="col-md-12 padding-0">
						 <div class="col-md-6">
						   <div class="">
                                <div class=" form-group ">
                                    <label class="form-control-label" for="l0">Basic *</label>
                                
                             <input type="text" class="form-control" placeholder="Basic" value="">
                                </div>
                            </div>
						 </div>
						  <div class="col-md-6">
						  <div class="">
                                <div class="form-group ">
                                    <label class="form-control-label" for="l0">Full Service *</label>
                               
                                <input type="text" class="form-control" placeholder="Full Service" value="">
                                </div>
                            </div>
						 </div>
						 </div>
						 
						  <div class="col-md-12 padding-0">
						 <div class="col-md-6">
						 <div class="">
                                <div class="form-group ">
                                    <label class="form-control-label" for="l0">Bulk *</label>
                                
                                <input type="text" class="form-control" placeholder="Bulk" value="">
                                </div>
                            </div>
						 </div>
						 
						 </div>
						   
                        </form>

											
								</div>
								
							<div class="modal-footer footer-background">
							<a href=""  class="btn btn-modal-blue">
								Save  
							</a>
							 	<a href="#"  class="btn btn-default"  data-dismiss="modal">
								Cancel
							</a>
							
						</div>
						</div>
						
					</div>
					
				</div>		

				
					
		
<div class="modal fade" id="update_firm_details" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header modal-header-color">
							 
							<button type="button" class="close-modal modal-opacity close-modal-blue" data-dismiss="modal" aria-hidden="true">
								X
							</button>
							<h4 class="modal-title color-white" id="myModalLabel">
								Update Firm Pricing
							</h4>
						</div>
						<div class="modal-body row">
							
                         <form>
						 
				
						 
						 <div class="col-md-12 padding-0">
						 <div class="col-md-6">
						   <div class="">
                                <div class=" form-group ">
                                    <label class="form-control-label" for="l0">Package Type *</label>
                                
                            <select class="form-control">
							<option>Basic</option>
							<option>Full Service</option>
							<option>Bulk</option>
							</select>
                                </div>
                            </div>
						 </div>
						  <div class="col-md-6">
						  <div class="">
                                <div class="form-group ">
                                    <label class="form-control-label" for="l0">Bill To *</label>
                               
                                <input type="text" class="form-control" placeholder="Firm/Client" value="">
                                </div>
                            </div>
						 </div>
						 </div>
						 
						  <div class="col-md-12 padding-0">
						 <div class="col-md-6">
						 <div class="">
                                <div class="form-group ">
                                    <label class="form-control-label" for="l0">Signup Date *</label>
                                
                              <input type="text" class="form-control datepicker-only-init" placeholder="Select Date" />
                                </div>
                            </div>
						 </div>
						
						 </div>
						   
                        </form>

											
								</div>
								
							<div class="modal-footer footer-background">
							 <a href=""  class="btn btn-modal-blue">
								Save  
							</a>
							 	<a href="#"  class="btn btn-default"  data-dismiss="modal">
								Cancel
							</a>
							
						</div>
						</div>
						
					</div>
					
				</div>		
	
				
				
		
	
<div class="modal fade" id="update_lookup_options" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header modal-header-color">
							 
							<button type="button" class="close-modal modal-opacity close-modal-blue" data-dismiss="modal" aria-hidden="true">
								X
							</button>
							<h4 class="modal-title color-white" id="myModalLabel">
								Update Lookup Option
							</h4>
						</div>
						<div class="modal-body row">
							
                         <form>
						 
				
						 
						 <div class="col-md-12 padding-0">
						 <div class="col-md-6">
						   <div class="">
                                <div class=" form-group ">
                                    <label class="form-control-label" for="l0">Lookup Name *</label>
                                
                             <input type="text" class="form-control" placeholder="Lookup Name" value="">
                                </div>
                            </div>
						 </div>
						  <div class="col-md-6">
						  <div class="">
                                <div class="form-group ">
                                    <label class="form-control-label" for="l0">Options *</label>
                               
                                <input type="text" class="form-control" placeholder="Options" value="">
                                </div>
                            </div>
						 </div>
						 </div>
						 
						 
						   
                        </form>

											
								</div>
								
							<div class="modal-footer footer-background">
							 	<a href=""  class="btn btn-modal-blue">
								Save  
							</a>
							 	<a href="#"  class="btn btn-default"  data-dismiss="modal">
								Cancel
							</a>
							
						</div>
						</div>
						
					</div>
					
				</div>		
	

<div class="modal fade" id="add_lookup_options" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header modal-header-color">
							 
							<button type="button" class="close-modal modal-opacity close-modal-blue" data-dismiss="modal" aria-hidden="true">
								X
							</button>
							<h4 class="modal-title color-white" id="myModalLabel">
								Add Lookup Option
							</h4>
						</div>
						<div class="modal-body row">
							
                         <form>
						 
				
						 
						 <div class="col-md-12 padding-0">
						 <div class="col-md-6">
						   <div class="">
                                <div class=" form-group ">
                                    <label class="form-control-label" for="l0">Lookup Name *</label>
                                
                             <input type="text" class="form-control" placeholder="Lookup Name" value="">
                                </div>
                            </div>
						 </div>
						  <div class="col-md-6">
						  <div class="">
                                <div class="form-group ">
                                    <label class="form-control-label" for="l0">Options *</label>
                               
                                <input type="text" class="form-control" placeholder="Options" value="">
                                </div>
                            </div>
						 </div>
						 </div>
						 
						 
						   
                        </form>

											
								</div>
								
							<div class="modal-footer footer-background">
							
							<a href=""  class="btn btn-modal-blue">
								Save  
							</a>
							 	<a href="#"  class="btn btn-default"  data-dismiss="modal">
								Cancel
							</a>
							
						</div>
						</div>
						
					</div>
					
				</div>		
	
										

<div class="modal fade" id="update_client_user" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header modal-header-color">
							 
							<button type="button" class="close-modal modal-opacity close-modal-blue" data-dismiss="modal" aria-hidden="true">
								X
							</button>
							<h4 class="modal-title color-white" id="myModalLabel">
								Update Client User
							</h4>
						</div>
						<div class="modal-body row">
							
                         <form>
						 
				
						 
						 <div class="col-md-12 padding-0">
						 <div class="col-md-6">
						   <div class="">
                                <div class=" form-group ">
                                    <label class="form-control-label" for="l0">First Name*</label>
                                
                             <input type="text" class="form-control" value="praveen">
                                </div>
                            </div>
						 </div>
						  <div class="col-md-6">
						  <div class="">
                                <div class="form-group ">
                                    <label class="form-control-label" for="l0">Last Name *</label>
                               
                                <input type="text" class="form-control" placeholder="" value="singh">
                                </div>
                            </div>
						 </div>
						 </div>
						 
						  <div class="col-md-12 padding-0">
						 <div class="col-md-6">
						 <div class="">
                                <div class="form-group ">
                                    <label class="form-control-label" for="l0">Job Title *</label>
                                
                                <input type="text" class="form-control" placeholder="" value="manager">
                                </div>
                            </div>
						 </div>
						  <div class="col-md-6">
						   <div class="">
                                <div class="form-group ">
                                    <label class="form-control-label" for="l0">Email Id *</label>
                             
                                <input type="text" class="form-control" placeholder="" value="manager@gmail.com">
                                </div>
                            </div>
						 </div>
						 </div>
						   <div class="col-md-12 padding-0">
						 <div class="col-md-6">
						   <div class="form-group row">
									<div class="col-md-12 ">
									
										 <div class="col-md-12 padding-0">
									<div class="col-md-9 padding-0">
                                    <label class="form-control-label" for="l0">Phone *</label>
									</div>
									<div class="col-md-3 padding-right-0">
									 <label class="form-control-label" for="l0">Extension </label>
									</div>
									</div>
									
										<div class="col-md-12 padding-0">
														<div class="col-md-9 padding-0">
														<input type="text" class="form-control us-phone-mask-input" value="9999999999" maxlength="14" >
														</div>
														<div class="col-md-3 padding-right-0">
														<input type="text" class="form-control numbers" placeholder="" value="040">
														</div>
														</div>
														</div>
									</div>
						 </div>
						  <div class="col-md-6">
						  
							<div class="">
                                <div class="form-group ">
                                    <label class="form-control-label" for="l0">Mobile</label>
                               
                                <input type="text" class="form-control us-phone-mask-input" placeholder="" value="9999999999" >
                                </div>
                            </div>
						 </div>
						 </div>
						 
						 <div class="col-md-12 padding-0">
						 <div class="col-md-6">
						 
						 <div class="">
                                <div class="form-group ">
                                    <label class="form-control-label" for="l0">Profile Image <span class="fa fa-info-circle information-icon" title="Profile Image" data-container="body" data-toggle="popover-hover" data-placement="right" data-content="Recommended dimensions are 400x400 pixels."></span></label>
                                
                                <input type="file" class="form-control us-phone-mask-input"  >
                                </div>
                            </div>
						 </div>
						 						 </div>
						 <div class="col-md-12  margin-top-15">
						 <div class="col-md-6">
						 <h6 class="action_head">User Setup Options: <i class="fa fa-info-circle" title="Set Up This User As" data-container="body" data-toggle="popover-hover" data-placement="right" data-content="Select if this user will be the primary point of contact for the firm and/or the billing contact for the client.  If neither, simply leave blank." ></i></h6>
						 <div class="">
						   <div class="col-md-9 padding-0">
                           <label class="mt-checkbox mt-checkbox-outline margin-bottom-10 width-100">     Client Primary Contact
										<input type="checkbox" value="1" name="">
										<span></span>
									</label> 
                           </div>
                  
                           <div class="col-md-9 padding-0">
                           <label class="mt-checkbox mt-checkbox-outline margin-bottom-10 width-100">    Client Billing Contact
										<input type="checkbox" value="1" name="">
										<span></span>
									</label> 
                           </div>
                        
			 
						 </div>
						   
						 </div>
					<!--	 <div class="col-md-6">
						 
						   <div class="">
													<h6 class="action_head">Settings:</h6>
<p><a id="modal-alert" href="#alert_screen" class="color-blue" data-toggle="modal"><u>Deactivate User</u></a></p>
														<p><a id="modal-alert" href="#reset_password" class="color-blue" data-toggle="modal"><u>Reset Password</u></a></p>
														</div>
						 </div>-->
						   <!--<div class="col-md-6">
						   
								 
								<div class="action-coloumn">
								 <a id="modal-alert" href="#alert_screen" data-toggle="modal">Deactivate User</a>
								</div>
								<div class="action-coloumn">
								 <a id="modal-alert1" href="#reset_password" data-toggle="modal">Reset Password</a>
								</div>
						 
						 </div>-->
						 
                        </div>
                        </form>

											
								</div>
								
							<div class="modal-footer footer-background">
							<a href=""  class="btn btn-modal-blue">
								Save 
							</a>
							 	<a href="#"  class="btn btn-default"  data-dismiss="modal">
								Cancel
							</a>
							
						</div>
						</div>
						
					</div>
					
				</div>		

				
		
<div class="modal fade" id="update_admin" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
				<div class="modal-dialog modal-lg">
					<div class="modal-content col-md-12 padding-0">
						 
						
						</div>
						
					</div>
					
				</div>		
		
					
			<!---start claims trend modal-->
<div class="modal fade" id="claims_trend_report_modal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
				<div class="modal-dialog modal-lg">
					<div class="modal-content col-md-12 padding-0">
						<div class="modal-header modal-header-color">
							 
							<button type="button" class="close-modal modal-opacity close-modal-blue" data-dismiss="modal" aria-hidden="true">
								X
							</button>
							<h4 class="modal-title color-white col-md-5 padding-0" id="myModalLabel">
								Claims Trend Report
							</h4>
							
							<span class="modal-title color-white col-md-3 padding-5" id="myModalLabel">
							<span class="pdf-download">
  
  <i class="fa fa-file-pdf-o padding-5" style="font-size: 12px;"></i>
 
  <span class="padding-10" >Download Pdf</span> 
  <i class="fa fa-download padding-5 download-icon" ></i>
</span>
							</span>
							
							<span class="modal-title color-white col-md-1 padding-5 padding-left-0" id="myModalLabel">
							
  
  <i class="fa fa-print padding-5 padding-left-0" style="font-size: 24px;"></i>
  

							</span>
							
						</div>
						<div class="modal-body  col-md-12" style="max-height: 450px;overflow-y: scroll;">
						<div class="row">
		<div class="col-md-12 padding-bottom-15">
		<div class="col-md-12">
		<div class="col-md-4">
		<img class="img-responsive" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/images/logo/company-logo.png" alt="Export">
		</div>
		<div class="col-md-5">
		<span class="display-block engineer">ABC ENGINEERING</span>
		<span class=" left-head" style="font-size: 13px;"><b>Claims Trend Report</b></span> |
		<span class=" left-head" style="font-size: 13px;"><b>Medicals Claims</b></span>
		</div>
  <div class="col-md-3" align="right">
		<img class="img-responsive" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/images/logo/benefits.png" alt="Export" style="  width: 200px;height: 38px;">

		</div>
		</div>
		</div>
		</div>
		
		
		<div class="row">
		<div class="col-md-12 padding-bottom-15">
		<div class="col-md-12 box-body padding-10">
	As of January 2015, your 12 month Medical Claims trend is -6.1%. The 24 month trend on this plan is -5.0%
It is often helpful to compare these figures to what these same trend amounts were 6 month, 12 months and 24 months ago. By doing this you can gauge the current health of your claims trends.</p>

		</div>
		</div>
		</div>
		
		<div class="row">
		<div class="col-md-12 padding-bottom-15">
		<div class="col-md-12 padding-0">
	<div class="col-md-6 padding-left-0">
	<div class="col-md-12 border-ddd padding-10">
							<div class="widget-header">
								<strong class="margin-right-10">Claim Trend Analysis</strong>
							</div>
							<div>
							<div id="module_subscription" style="min-width: 310px; height: 200px; margin: 0 auto"></div>
							
							</div>
	</div>
	</div>
						
	<div class="col-md-6 padding-right-0">
						<div class="col-md-12 border-ddd padding-20">
<p>The trend on these plans claims over prior periods were as follows:</p>
<table class="width-100 table-line" >
<thead class="background-blue">
<tr>
				<th class="text-align-center"></th>
				<th class="text-align-center">12 Month Trend</th> 
				<th class="text-align-center">24 Month Trend</th>
			  </tr>
</thead>
<tbody class="text-align-center">
  <tr class="tr-back-firm">
				<td>6 Months Ago</td>
				<td>-1.5%</td> 
				<td>-4.24%</td>
			  </tr>
			   <tr class="tr-back-firm">
				<td>12 Months Ago</td>
				<td>-1.4%</td> 
				<td>-2.24%</td>
			  </tr>
			   <tr class="tr-back-firm">
				<td>24 Months Ago</td>
				<td>-1.3%</td> 
				<td>-3.24%</td>
			  </tr>
</tbody>
</table>
		</div>
		</div>
		</div>
		</div>
		</div>
		
		
		<div class="row">
		<div class="col-md-12 padding-bottom-15">
		<div class="col-md-12 box-body padding-10 padding-bottom-15">
		<div class="box-head-claim margin-left-0">Report Description</div>
		The Plan Claim Trend report is designed to help you understand the true trend rate for claims experienced under your plan. By adjusting the claims experience for reimbursements, and tracking the actual enrollment by month on your plan, the report can then calculate a rolling 12 and 24 month average of claims per enrollment unit. Next, by comparing these rolling average figures to the same figure a year ago, we can view the actual claims trend for your plan.
<br>
In this report, a 12 month and 24 month rolling view of trend is provided. Generally speaking it is important to look at both, as the 12 month trend can be more volatile that the 24 month rolling average view of trend due to the fact that it considers fewer data points.
  
		</div>
		</div>
		</div>
		
		
		<div class="row">
			<div class="col-md-12" id="claim_trend">
			<div class="col-md-12  padding-10 border-ddd">
			<div class="box-head-claim">Report Details</div>
			<?php
$resultData = [
    array("month"=>"Feb-12","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"Mar-12","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"Apr-12","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"May-12","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"June-12","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"July-12","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"Aug-12","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"Sep-12","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"Oct-12","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"Nov-12","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"Dec-12","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"Jan-13","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"Feb-13","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"Mar-13","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"Apr-13","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"May-13","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"June-13","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"July-13","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"Aug-13","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"Sep-13","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"Oct-13","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"Nov-13","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"Dec-13","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"Jan-14","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"Feb-14","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"Mar-14","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"Apr-14","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"May-14","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"June-14","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"July-14","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"Aug-14","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    
   
    ];

function filter_1($item) {
    $mailfilter = Yii::$app->request->getQueryParam('filteremail', '');
    if (strlen($mailfilter) > 0) {
        if (strpos($item['email'], $mailfilter) != false) {
            return true;
        } else {
            return false;
        }
    } else {
        return true;
    }
}

$filteredresultData = array_filter($resultData, 'filter_1');


$mailfilter = Yii::$app->request->getQueryParam('filteremail', '');
$namefilter = Yii::$app->request->getQueryParam('filtername', '');

$searchModel = [ 'month' => $namefilter, 'medicalclaim' => $mailfilter];

$dataProvider = new ArrayDataProvider([
      //  'key'=>'id',
        'allModels' => $filteredresultData,
        'sort' => [
            'attributes' => [ 'month', 'medicalclaim'],
        ],
]);

$gridColumns = [
            ['class' => 'yii\grid\SerialColumn'],
            

        [
            'attribute' => 'month', 
            'value' => 'month',
			'headerOptions' => ['class' => 'blue-grid-head'],
'label' => 'Month',
//'width'=>'150px',
'noWrap'=>true,
//'mergeHeader'=>true
            ],
            [
            "attribute" => "medicalclaim",
           // 'filter' => '<input class="form-control" name="filteremail" value="'. $searchModel['medicalclaim'] .'" type="text">',
            'value' => 'medicalclaim',
'label' => 'Medical Claim',
'headerOptions' => ['class' => 'blue-grid-head'],
'width'=>'150px',
'format' => ['currency', ''],
//'mergeHeader'=>true
            ],
[
"attribute" => "pharmacyclaim",
'label' => '',
'headerOptions' => ['class' => 'blue-grid-head'],
//'mergeHeader'=>true
],
[
"attribute" => "dentalclaim",
'headerOptions' => ['class' => 'blue-grid-head'],
'label' => '',
//'mergeHeader'=>true
],
[
"attribute" => "sslclaim",
'headerOptions' => ['class' => 'blue-grid-head'],
'label' => 'SSL Claim',
'format' => ['currency', ''],
//'mergeHeader'=>true
],
[
"attribute" => "netclaim",
'headerOptions' => ['class' => 'blue-grid-head'],
'label' => 'Net Claim',
'format' => ['currency', ''],
//'mergeHeader'=>true
],

[
"attribute" => "memberenrollment",
'headerOptions' => ['class' => 'blue-grid-head'],
'label' => 'Member Enrollment',
'format' => ['currency', ''],
//'mergeHeader'=>true
],
[
"attribute" => "claims",
'headerOptions' => ['class' => 'blue-grid-head'],
'label' => 'Claims / Enrollment',
'format' => ['currency', '$'],
//'mergeHeader'=>true
],
[
"attribute" => "12monthavg",
'headerOptions' => ['class' => 'blue-grid-head'],
'label' => '12 Mo. Rolling Avg',
'format' => ['currency', '$'],
//'mergeHeader'=>true
],
[
"attribute" => "24monthavg",
'headerOptions' => ['class' => 'blue-grid-head'],
'label' => '24 Mo. Rolling Avg',
'format' => ['currency', '$'],
//'mergeHeader'=>true
],
[
"attribute" => "12monthtrend",
'headerOptions' => ['class' => 'blue-grid-head'],
'label' => '12 Month Trend',
//'mergeHeader'=>true
],
[
"attribute" => "24monthtrend",
'headerOptions' => ['class' => 'blue-grid-head'],
'label' => '24 Month Trend',
//'mergeHeader'=>true      
],

			];
								echo GridView::widget([
															'dataProvider' => $dataProvider,
															'filterModel' => $searchModel,
															'columns' => $gridColumns,
													 
														'toolbar' =>  [
		/*
		 '{export}',
'{toggleData}'*/
		],
		'pjax' => true,
		'bordered' => true,
		'striped' => true,
		'condensed' => false,
		'responsive' => true,
		'hover' => true,


		// 'floatHeader' => true,
		// 'floatHeaderOptions' => ['scrollingTop' => true],
		'showPageSummary' => false,
		'panel' => [
		'heading'=>false,
		'type' => GridView::TYPE_PRIMARY,
		'footer' => false,
		],
		]);
															
															
															?>
			</div>
				</div>
			
			<div class="col-md-12 padding-15 hide">
			<div class="box-head-claim">Report Description</div>
						<div class="box-border padding-6 back-lightgrey">
							<p>
			The Plan Claim Trend report is designed to help you understand the true trend rate for claims experienced under your plan.  By adjusting the claims experience
for reimbursements, and tracking the actual enrollment by month on your plan, the report can then calculate a rolling 12 and 24 month average of claims per
enrollment unit.  Next, by comparing these rolling average figures to the same figure a year ago, we can view the actual claims trend for your plan.
</p>


<p>In this report, a 12 month and 24 month rolling view of trend is provided.  Generally speaking it is important to look at both, as the 12 month trend can
be more volatile that the 24 month rolling average view of trend due to the fact that it considers fewer data points.</p>
</div>
			</div>
			</div>
		
</div>
											
								
								
							<div class="modal-footer col-md-12 footer-background">
							 
						 
						</div>
						</div>
						
					</div>
					
				</div>		
		<!---end claims trend modal-->
		
		
		<!---start plan Year cliams --> 
<div class="modal fade" id="plan_year_claim_modal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
				<div class="modal-dialog modal-lg">
					<div class="modal-content col-md-12 padding-0">
						<div class="modal-header modal-header-color">
							 
							<button type="button" class="close-modal modal-opacity close-modal-blue" data-dismiss="modal" aria-hidden="true">
								X
							</button>
							<h4 class="modal-title color-white col-md-5 padding-0" id="myModalLabel">
								Plan Year Claims Only Report
							</h4>
							
							<span class="modal-title color-white col-md-3 padding-5" id="myModalLabel">
							<span class="pdf-download">
  
  <i class="fa fa-file-pdf-o padding-5" style="font-size: 12px;"></i>
  
  <span class="padding-10" >Download Pdf</span> 
  <i class="fa fa-download padding-5 download-icon" ></i>
</span>
							</span>
							
							<span class="modal-title color-white col-md-1 padding-5 padding-left-0" id="myModalLabel">
							
  
  <i class="fa fa-print padding-5 padding-left-0" style="font-size: 24px;"></i>
  

							</span>
							
						</div>
						<div class="modal-body  col-md-12" style="max-height: 450px;overflow-y: scroll;">
						<div class="row">
		<div class="col-md-12 padding-bottom-15">
		<div class="col-md-12">
		<div class="col-md-4">
		<img class="img-responsive" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/images/logo/company-logo.png" alt="Export">
		</div>
		<div class="col-md-5">
		<span class="display-block engineer">ABC ENGINEERING</span>
		<span class=" left-head" style="font-size: 13px;"><b>Plan Year Claim Report</b></span> |
		<span class=" left-head" style="font-size: 13px;"><b>Medicals Claims</b></span>
		</div>
  <div class="col-md-3" align="right">
		<img class="img-responsive" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/images/logo/benefits.png" alt="Export" style="  width: 200px;height: 38px;">

		</div>
		</div>
		</div>
		</div>
		
		
 
		
		<div class="row">
		<div class="col-md-12 padding-bottom-15">
		<div class="col-md-12 padding-0">
	<div class="col-md-6 padding-left-0">
	<div class="col-md-12 border-ddd padding-10">
							<div class="widget-header">
								<strong class="margin-right-10">Total Paid Plan Claims By Month</strong>
							</div>
							<div>
							<div id="paid_plan_claims" style="min-width: 310px; height: 200px; margin: 0 auto"></div>
							
							</div>
	</div>
	</div>
						
	<div class="col-md-6 padding-right-0">
					<div class="col-md-12 border-ddd padding-10">
							<div class="widget-header">
								<strong class="margin-right-10">Total Paid Plan Claims By Month</strong>
							</div>
							<div>
							<div id="paid_plan_claims_area" style="min-width: 310px; height: 200px; margin: 0 auto"></div>
							
							</div>
	</div>
		</div>
		</div>
		</div>
		</div>
		
		
		<div class="row">
		<div class="col-md-12 padding-bottom-15">
		<div class="col-md-12 padding-0">
		<div class="col-md-6 padding-left-0">
						<div class="col-md-12 border-ddd padding-10">
<div class="box-head-claim">Average Claims per Month</div>
	<table style="width: 100%" class="table-line">
										<thead class="background-blue">

											<tr>

												<th class="text-align-center">Average Claims</th>
												<th class="text-align-center">Amount</th>
												<th class="text-align-center">Percentage</th>
												
											</tr>
										</thead>

										<tbody class="text-align-center">
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Pharmacy Claims</td>
												<td>183,801</td>
												<td>23.80 %</td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Medical Claims</td>
												<td>588,011</td>
												<td>76.20 %</td>
												
											</tr>
											<tr  style="background-color: white;">
												<td>Total</td>
												<td><u>771,821</u></td>
												<td>100.00 %</td>
												
											</tr>
											
										</tbody>
									</table>
		</div>
		</div>
		
		<div class="col-md-6 padding-right-0">
						<div class="col-md-12 border-ddd padding-10">
<div class="box-head-claim">Fixed / Variable Cost Allocation</div>
	<table style="width: 100%" class="table-line">
										<thead class="background-blue">

											<tr>

												<th class="text-align-center">Average Claims</th>
												<th class="text-align-center">Amount</th>
												<th class="text-align-center">Actual Average / Month</th>
												<th class="text-align-center">% Over / Under</th>
												
											</tr>
										</thead>

										<tbody class="text-align-center">
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Expected Claims</td>
												<td>615000</td>
												<td>771,812</td>
												<td>23.50 %</td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Maximum Claims</td>
												<td>768,850</td>
												<td>771,812</td>
												<td>0.40 %</td>
												
											</tr>
											<tr  style="background-color: white;">
												<td>Total</td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
											
										</tbody>
									</table>
		</div>
		</div>
		</div>
		</div>
		</div>
		
		
		<div class="row">
			<div class="col-md-12" id="claim_trend">
			<div class="col-md-12  padding-10 border-ddd">
			<div class="box-head-claim">Report Details</div>
		<?php
$resultData = [
    array("month"=>"Jan-13","medicalclaim"=>"569207","sslclaim"=>"92424","dentalclaim"=>"","pharmacyclaim"=>"43367","netclaim"=>"565573","drugrebates"=>"2290","expectedclaims"=>"615000","maximumclaim"=>"768750","24monthavg"=>"768750","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"Feb-13","medicalclaim"=>"569207","sslclaim"=>"0","dentalclaim"=>"","pharmacyclaim"=>"44835","netclaim"=>"565573","drugrebates"=>"2290","expectedclaims"=>"615000","maximumclaim"=>"768750","24monthavg"=>"768750","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"Mar-13","medicalclaim"=>"569207","sslclaim"=>"0","dentalclaim"=>"","pharmacyclaim"=>"70704","netclaim"=>"565573","drugrebates"=>"2290","expectedclaims"=>"615000","maximumclaim"=>"768750","24monthavg"=>"768750","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"Apr-13","medicalclaim"=>"569207","sslclaim"=>"0","dentalclaim"=>"","pharmacyclaim"=>"60122","netclaim"=>"565573","drugrebates"=>"2290","expectedclaims"=>"615000","maximumclaim"=>"768750","24monthavg"=>"768750","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"May-13","medicalclaim"=>"569207","sslclaim"=>"0","dentalclaim"=>"","pharmacyclaim"=>"46032","netclaim"=>"565573","drugrebates"=>"2290","expectedclaims"=>"615000","maximumclaim"=>"768750","24monthavg"=>"768750","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"June-13","medicalclaim"=>"569207","sslclaim"=>"164889","dentalclaim"=>"","pharmacyclaim"=>"59585","netclaim"=>"565573","drugrebates"=>"2290","expectedclaims"=>"615000","maximumclaim"=>"768750","24monthavg"=>"$261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"July-13","medicalclaim"=>"569207","sslclaim"=>"163967","dentalclaim"=>"","pharmacyclaim"=>"23042","netclaim"=>"565573","drugrebates"=>"2290","expectedclaims"=>"615000","maximumclaim"=>"768750","24monthavg"=>"$261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"Aug-13","medicalclaim"=>"569207","sslclaim"=>"47137","dentalclaim"=>"","pharmacyclaim"=>"89236","netclaim"=>"565573","drugrebates"=>"2290","expectedclaims"=>"615000","maximumclaim"=>"768750","24monthavg"=>"$261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"Sep-13","medicalclaim"=>"569207","sslclaim"=>"0","dentalclaim"=>"","pharmacyclaim"=>"12256","netclaim"=>"565573","drugrebates"=>"2290","expectedclaims"=>"615000","maximumclaim"=>"768750","24monthavg"=>"$261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"Oct-13","medicalclaim"=>"569207","sslclaim"=>"0","dentalclaim"=>"","pharmacyclaim"=>"44456","netclaim"=>"565573","drugrebates"=>"2290","expectedclaims"=>"615000","maximumclaim"=>"768750","24monthavg"=>"$261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"Nov-13","medicalclaim"=>"569207","sslclaim"=>"0","dentalclaim"=>"","pharmacyclaim"=>"42123","netclaim"=>"565573","drugrebates"=>"2290","expectedclaims"=>"615000","maximumclaim"=>"768750","24monthavg"=>"$261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"Dec-13","medicalclaim"=>"569207","sslclaim"=>"266048","dentalclaim"=>"","pharmacyclaim"=>"56101","netclaim"=>"565573","drugrebates"=>"2290","expectedclaims"=>"615000","maximumclaim"=>"768750","24monthavg"=>"$261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
      
   
    ];

function filteronlyreport($item) {
    $mailfilter = Yii::$app->request->getQueryParam('filteremail', '');
    if (strlen($mailfilter) > 0) {
        if (strpos($item['email'], $mailfilter) != false) {
            return true;
        } else {
            return false;
        }
    } else {
        return true;
    }
}

$filteredresultData = array_filter($resultData, 'filteronlyreport');


$mailfilter = Yii::$app->request->getQueryParam('filteremail', '');
$namefilter = Yii::$app->request->getQueryParam('filtername', '');

$searchModel = [ 'month' => $namefilter, 'medicalclaim' => $mailfilter];

$dataProvider = new ArrayDataProvider([
      //  'key'=>'id',
        'allModels' => $filteredresultData,
        'sort' => [
            'attributes' => [ 'month', 'medicalclaim'],
        ],
]);

$gridColumns = [
            ['class' => 'kartik\grid\SerialColumn'],
            

        [
            'attribute' => 'month', 
            'value' => 'month',
'label' => 'Month',
'width'=>'150px',
'headerOptions' => ['class' => 'blue-grid-head'],
'noWrap'=>true,
//'mergeHeader'=>true
            ],
            [
            "attribute" => "medicalclaim",
           // 'filter' => '<input class="form-control" name="filteremail" value="'. $searchModel['medicalclaim'] .'" type="text">',
            'value' => 'medicalclaim',
'label' => 'Medical Claims',
'width'=>'150px',
'pageSummary' => true,
'headerOptions' => ['class' => 'blue-grid-head'],
  'format' => ['currency', ''],
//'mergeHeader'=>true
            ],
[
"attribute" => "sslclaim",
'label' => 'SSL Claim Reimbursements',
'width'=>'150px',
'pageSummary' => true,
  'format' => ['currency', ''],
  'headerOptions' => ['class' => 'blue-grid-head'],
//'mergeHeader'=>true
],
[
"attribute" => "dentalclaim",
'label' => '',
'width'=>'150px',
'headerOptions' => ['class' => 'blue-grid-head'],
//'mergeHeader'=>true
],

[
"attribute" => "pharmacyclaim",
'label' => 'Pharmacy Claims',
'width'=>'150px',
'headerOptions' => ['class' => 'blue-grid-head'],
'pageSummary' => true,
  'format' => ['currency', ''],
//'mergeHeader'=>true
],
[
"attribute" => "drugrebates",
'label' => 'Drug Rebates',
'width'=>'150px',
'headerOptions' => ['class' => 'blue-grid-head'],
'pageSummary' => true,
  'format' => ['currency', ''],
//'mergeHeader'=>true
],
[
"attribute" => "dentalclaim",
'label' => '',
'width'=>'150px',
'headerOptions' => ['class' => 'blue-grid-head'],
//'mergeHeader'=>true
],

[
"attribute" => "netclaim",
'label' => 'Total Monthly Net Claims',
'width'=>'150px',
'pageSummary' => true,
'headerOptions' => ['class' => 'blue-grid-head'],
  'format' => ['currency', ''],
//'mergeHeader'=>true
],
[
"attribute" => "expectedclaims",
'label' => 'Expected Monthly Claims',
'headerOptions' => ['class' => 'blue-grid-head'],
'width'=>'150px',
'pageSummary' => true,
  'format' => ['currency', ''],
//'mergeHeader'=>true
],
[
"attribute" => "maximumclaim",
'label' => 'Maximum Monthly Claims',
'headerOptions' => ['class' => 'blue-grid-head'],
'width'=>'150px',
'pageSummary' => true,
  'format' => ['currency', ''],
//'mergeHeader'=>true
],




			];
								echo GridView::widget([
															'dataProvider' => $dataProvider,
														//	'filterModel' => $searchModel,
															'columns' => $gridColumns,
															'containerOptions' => ['style'=>'overflow: auto'], // only set when $responsive = false
													 
															'toolbar' =>  [
																/*
																'{export}',
																'{toggleData}'*/
															],
															'pjax' => true,
															'bordered' => true,
															'striped' => true,
															'condensed' => false,
															'responsive' => true,
															'hover' => true,
 
		'showPageSummary' => true,
		'panel' => [
		'heading'=>false,
		'type' => GridView::TYPE_PRIMARY,
		'footer' => false,
		],
		]);
															
															
															?>
			</div>
				</div>
			
 
			</div>
		
</div>
											
								
								
							<div class="modal-footer col-md-12 footer-background">
							 
						 
						</div>
						</div>
						
					</div>
					
				</div>		
		<!-- end plan year --->
		
		<!-- plan year total report --> 
				
<div class="modal fade" id="total_plan_year_claim_modal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
				<div class="modal-dialog modal-lg">
					<div class="modal-content col-md-12 padding-0">
						<div class="modal-header modal-header-color">
							 
							<button type="button" class="close-modal modal-opacity close-modal-blue" data-dismiss="modal" aria-hidden="true">
								X
							</button>
							<h4 class="modal-title color-white col-md-5 padding-0" id="myModalLabel">
								Plan Year Total Report
							</h4>
							
							<span class="modal-title color-white col-md-3 padding-5" id="myModalLabel">
							<span class="pdf-download">
  
  <i class="fa fa-file-pdf-o padding-5" style="font-size: 12px;"></i>
  
  <span class="padding-10" >Download Pdf</span> 
  <i class="fa fa-download padding-5 download-icon" ></i>
</span>
							</span>
							
							<span class="modal-title color-white col-md-1 padding-5 padding-left-0" id="myModalLabel">
							
  
  <i class="fa fa-print padding-5 padding-left-0" style="font-size: 24px;"></i>
  

							</span>
							
						</div>
						<div class="modal-body  col-md-12" style="max-height: 450px;overflow-y: scroll;">
						<div class="row">
		<div class="col-md-12 padding-bottom-15">
		<div class="col-md-12">
		<div class="col-md-4">
		<img class="img-responsive" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/images/logo/company-logo.png" alt="Export">
		</div>
		<div class="col-md-5">
		<span class="display-block engineer">ABC ENGINEERING</span>
		<span class=" left-head" style="font-size: 13px;"><b>Plan Year Total Cost Report</b></span> |
		<span class=" left-head" style="font-size: 13px;"><b>Medicals Claims</b></span>
		</div>
  <div class="col-md-3" align="right">
		<img class="img-responsive" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/images/logo/benefits.png" alt="Export" style="  width: 200px;height: 38px;">

		</div>
		</div>
		</div>
		</div>
		
		
	<!--	<div class="row">
		<div class="col-md-12 padding-bottom-15">
		<div class="col-md-12 box-body padding-10">
	As of January 2015, your 12 month Medical Claims trend is -6.1%. The 24 month trend on this plan is -5.0%
It is often helpful to compare these figures to what these same trend amounts were 6 month, 12 months and 24 months ago. By doing this you can gauge the current health of your claims trends.</p>

		</div>
		</div>
		</div>-->
		
		<div class="row">
		<div class="col-md-12 padding-bottom-15">
		<div class="col-md-12 padding-0">
	<div class="col-md-6 padding-left-0">
	<div class="col-md-12 border-ddd padding-10">
							<div class="widget-header">
								<strong class="margin-right-10">Total and Net Plan Costs By Month</strong>
							</div>
							<div>
							<div id="total_paid_plan_claims" style="min-width: 310px; height: 200px; margin: 0 auto"></div>
							
							</div>
	</div>
	</div>
						
	<div class="col-md-6 padding-right-0">
					<div class="col-md-12 border-ddd padding-10">
							<div class="widget-header">
								<strong class="margin-right-10">Total and Net Plan Costs By Month</strong>
							</div>
							<div>
							<div id="total_paid_plan_claims_area" style="min-width: 310px; height: 200px; margin: 0 auto"></div>
							
							</div>
	</div>
		</div>
		</div>
		</div>
		</div>
		
		
		<div class="row">
		<div class="col-md-12 padding-bottom-15">
		<div class="col-md-12 padding-0">
		<div class="col-md-4 padding-left-0">
						<div class="col-md-12 border-ddd padding-10">
<div class="box-head-claim">Member Cost Share</div>
		<table style="width: 100%" class="table-line">
										<thead class="background-blue">

											<tr>

												<th class="text-align-center">Expenditures</th>
												<th class="text-align-center">Amount</th>
												<th class="text-align-center">Gross</th>
												<th class="text-align-center">Net</th>
												
											</tr>
										</thead>

										<tbody class="text-align-center">
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Employer Expenditures</td>
												<td>5,801,115</td>
												<td>$398</td>
												<td>$179</td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Employee/Member Costs</td>
												<td>2,612,492</td>
												<td>$216</td>
												<td>$97</td>
												
											</tr>
											<tr  style="background-color: white;">
												<td>Total</td>
												<td><u>8,413,607</u></td>
												<td>$577</td>
												<td>$314</td>
											</tr>
											
										</tbody>
									</table>
									
		</div>
		</div>
		
		<div class="col-md-4 ">
						<div class="col-md-12 border-ddd padding-10">
<div class="box-head-claim">Fixed / Variable Cost Allocation</div>
	
									<table style="width: 100%" class="table-line">
											<thead class="background-blue">

											<tr>

												<th class="text-align-center">Costs</th>
												<th class="text-align-center">Amount</th>
												<th class="text-align-center">Gross</th>
												<th class="text-align-center">Net</th>
												
											</tr>
										</thead>

										<tbody class="text-align-center">
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Fixed Costs</td>
												<td>5,801,115</td>
												<td>$398</td>
												<td>$179</td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Claim Costs</td>
												<td>2,612,492</td>
												<td>$216</td>
												<td>$97</td>
												
											</tr>
											<tr  style="background-color: white;">
												<td>Total</td>
												<td><u>8,413,607</u></td>
												<td>$577</td>
												<td>$314</td>
											</tr>
											
										</tbody>
									</table>
		</div>
		</div>
		<div class="col-md-4 padding-right-0">
						<div class="col-md-12 border-ddd padding-10">
<div class="box-head-claim">Average Cost Evalution</div>
	<table style="width: 100%" class="table-line">
									<thead class="background-blue">

											<tr>

												<th class="text-align-center">Costs</th>
												<th class="text-align-center">Amount</th>
												<th class="text-align-center">Gross</th>
												<th class="text-align-center">Net</th>
												
											</tr>
										</thead>

										<tbody class="text-align-center">
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Ave. Fixed Costs / Mo</td>
												<td>5,801,115</td>
												<td>$398</td>
												<td>$179</td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Ave. Claim Costs / Mo</td>
												<td>2,612,492</td>
												<td>$216</td>
												<td>$97</td>
												
											</tr>
											<tr  style="background-color: white;">
												<td>Total</td>
												<td><u>8,413,607</u></td>
												<td>$577</td>
												<td>$314</td>
											</tr>
											
										</tbody>
									</table>
		</div>
		</div>
		</div>
		</div>
		</div>
		
		
		<div class="row">
			<div class="col-md-12" id="claim_trend">
			<div class="col-md-12  padding-10 border-ddd">
			<div class="box-head-claim">Report Details</div>
	<?php
$resultData = [
    array("month"=>"Jan-13","netmedicalclaim"=>"550624","netpharmacyclaim"=>"7470","dentalclaim"=>"","monthlyclaims"=>"558094","adminfee"=>"51698","reinsurancepermium"=>"61765","monthlyplan"=>"671557","monthlyemployeeenrollment"=>"1221","monthlymemberenrollment"=>"2228","employeepremium"=>"145886","cobracontribution"=>"15042","memberpaidcopay"=>"53725","netemployermonthlycost"=>"456905"),
   array("month"=>"Feb-13","netmedicalclaim"=>"550624","netpharmacyclaim"=>"7470","dentalclaim"=>"","monthlyclaims"=>"558094","adminfee"=>"51698","reinsurancepermium"=>"61765","monthlyplan"=>"671557","monthlyemployeeenrollment"=>"1221","monthlymemberenrollment"=>"2228","employeepremium"=>"145886","cobracontribution"=>"15042","memberpaidcopay"=>"53725","netemployermonthlycost"=>"456905"),
   array("month"=>"Mar-13","netmedicalclaim"=>"550624","netpharmacyclaim"=>"7470","dentalclaim"=>"","monthlyclaims"=>"558094","adminfee"=>"51698","reinsurancepermium"=>"61765","monthlyplan"=>"671557","monthlyemployeeenrollment"=>"1221","monthlymemberenrollment"=>"2228","employeepremium"=>"145886","cobracontribution"=>"15042","memberpaidcopay"=>"53725","netemployermonthlycost"=>"456905"),
   array("month"=>"Apr-13","netmedicalclaim"=>"550624","netpharmacyclaim"=>"7470","dentalclaim"=>"","monthlyclaims"=>"558094","adminfee"=>"51698","reinsurancepermium"=>"61765","monthlyplan"=>"671557","monthlyemployeeenrollment"=>"1221","monthlymemberenrollment"=>"2228","employeepremium"=>"145886","cobracontribution"=>"15042","memberpaidcopay"=>"53725","netemployermonthlycost"=>"456905"),
   array("month"=>"May-13","netmedicalclaim"=>"550624","netpharmacyclaim"=>"7470","dentalclaim"=>"","monthlyclaims"=>"558094","adminfee"=>"51698","reinsurancepermium"=>"61765","monthlyplan"=>"671557","monthlyemployeeenrollment"=>"1221","monthlymemberenrollment"=>"2228","employeepremium"=>"145886","cobracontribution"=>"15042","memberpaidcopay"=>"53725","netemployermonthlycost"=>"456905"),
   array("month"=>"June-13","netmedicalclaim"=>"550624","netpharmacyclaim"=>"7470","dentalclaim"=>"","monthlyclaims"=>"558094","adminfee"=>"51698","reinsurancepermium"=>"61765","monthlyplan"=>"671557","monthlyemployeeenrollment"=>"1221","monthlymemberenrollment"=>"2228","employeepremium"=>"145886","cobracontribution"=>"15042","memberpaidcopay"=>"53725","netemployermonthlycost"=>"456905"),
   array("month"=>"July-13","netmedicalclaim"=>"550624","netpharmacyclaim"=>"7470","dentalclaim"=>"","monthlyclaims"=>"558094","adminfee"=>"51698","reinsurancepermium"=>"61765","monthlyplan"=>"671557","monthlyemployeeenrollment"=>"1221","monthlymemberenrollment"=>"2228","employeepremium"=>"145886","cobracontribution"=>"15042","memberpaidcopay"=>"53725","netemployermonthlycost"=>"456905"),
   array("month"=>"Aug-13","netmedicalclaim"=>"550624","netpharmacyclaim"=>"7470","dentalclaim"=>"","monthlyclaims"=>"558094","adminfee"=>"51698","reinsurancepermium"=>"61765","monthlyplan"=>"671557","monthlyemployeeenrollment"=>"1221","monthlymemberenrollment"=>"2228","employeepremium"=>"145886","cobracontribution"=>"15042","memberpaidcopay"=>"53725","netemployermonthlycost"=>"456905"),
   array("month"=>"Sep-13","netmedicalclaim"=>"550624","netpharmacyclaim"=>"7470","dentalclaim"=>"","monthlyclaims"=>"558094","adminfee"=>"51698","reinsurancepermium"=>"61765","monthlyplan"=>"671557","monthlyemployeeenrollment"=>"1221","monthlymemberenrollment"=>"2228","employeepremium"=>"145886","cobracontribution"=>"15042","memberpaidcopay"=>"53725","netemployermonthlycost"=>"456905"),
   array("month"=>"Oct-13","netmedicalclaim"=>"550624","netpharmacyclaim"=>"7470","dentalclaim"=>"","monthlyclaims"=>"558094","adminfee"=>"51698","reinsurancepermium"=>"61765","monthlyplan"=>"671557","monthlyemployeeenrollment"=>"1221","monthlymemberenrollment"=>"2228","employeepremium"=>"145886","cobracontribution"=>"15042","memberpaidcopay"=>"53725","netemployermonthlycost"=>"456905"),
   array("month"=>"Nov-13","netmedicalclaim"=>"550624","netpharmacyclaim"=>"7470","dentalclaim"=>"","monthlyclaims"=>"558094","adminfee"=>"51698","reinsurancepermium"=>"61765","monthlyplan"=>"671557","monthlyemployeeenrollment"=>"1221","monthlymemberenrollment"=>"2228","employeepremium"=>"145886","cobracontribution"=>"15042","memberpaidcopay"=>"53725","netemployermonthlycost"=>"456905"),
   array("month"=>"Dec-13","netmedicalclaim"=>"550624","netpharmacyclaim"=>"7470","dentalclaim"=>"","monthlyclaims"=>"558094","adminfee"=>"51698","reinsurancepermium"=>"61765","monthlyplan"=>"671557","monthlyemployeeenrollment"=>"1221","monthlymemberenrollment"=>"2228","employeepremium"=>"145886","cobracontribution"=>"15042","memberpaidcopay"=>"53725","netemployermonthlycost"=>"456905"),
   
   
      
   
    ];

function filtertotal($item) {
    $mailfilter = Yii::$app->request->getQueryParam('filteremail', '');
    if (strlen($mailfilter) > 0) {
        if (strpos($item['email'], $mailfilter) != false) {
            return true;
        } else {
            return false;
        }
    } else {
        return true;
    }
}

$filteredresultData = array_filter($resultData, 'filtertotal');


$mailfilter = Yii::$app->request->getQueryParam('filteremail', '');
$namefilter = Yii::$app->request->getQueryParam('filtername', '');

$searchModel = [ 'month' => $namefilter, 'medicalclaim' => $mailfilter];

$dataProvider = new ArrayDataProvider([
      //  'key'=>'id',
        'allModels' => $filteredresultData,
        'sort' => [
            'attributes' => [ 'month', 'medicalclaim'],
        ],
]);

$gridColumns = [
            ['class' => 'kartik\grid\SerialColumn'],
            

        [
            'attribute' => 'month', 
            'value' => 'month',
'label' => 'Month',
'width'=>'150px',
'headerOptions' => ['class' => 'blue-grid-head'],
'noWrap'=>true,
//'mergeHeader'=>true
            ],
            [
            "attribute" => "netmedicalclaim",
           // 'filter' => '<input class="form-control" name="filteremail" value="'. $searchModel['medicalclaim'] .'" type="text">',
            'value' => 'netmedicalclaim',
'label' => 'Net Medical Claims',
'width'=>'150px',
'pageSummary' => true,
'headerOptions' => ['class' => 'blue-grid-head'],
'format' => ['currency', ''],
//'mergeHeader'=>true
            ],
[
"attribute" => "netpharmacyclaim",
'label' => 'Net Pharmacy Claims',
'width'=>'150px',
'pageSummary' => true,
'headerOptions' => ['class' => 'blue-grid-head'],
'format' => ['currency', ''],
//'mergeHeader'=>true
],
/*[
"attribute" => "dentalclaim",
'label' => '',
'width'=>'150px',
//'mergeHeader'=>true
],*/
  
[
"attribute" => "monthlyclaims",
'label' => 'Total Monthly Net Claims',
'width'=>'150px',
'pageSummary' => true,
'headerOptions' => ['class' => 'blue-grid-head'],
'format' => ['currency', ''],
//'mergeHeader'=>true
],
[
"attribute" => "adminfee",
'label' => 'Administration Fees',
'width'=>'150px',
'pageSummary' => true,
'headerOptions' => ['class' => 'blue-grid-head'],
'format' => ['currency', ''],
//'mergeHeader'=>true
],
[
"attribute" => "reinsurancepermium",
'label' => 'Reinsurance Premiums',
'width'=>'150px',
'pageSummary' => true,
'headerOptions' => ['class' => 'blue-grid-head'],
'format' => ['currency', ''],
//'mergeHeader'=>true
],

[
"attribute" => "monthlyplan",
'label' => 'Total Monthly Plan Costs',
'width'=>'150px',
'pageSummary' => true,
'headerOptions' => ['class' => 'blue-grid-head'],
'format' => ['currency', ''],
//'mergeHeader'=>true
],
[
"attribute" => "monthlyemployeeenrollment",
'label' => 'Monthly Employee Enrollment',
'width'=>'150px',
'pageSummary' => true,
'headerOptions' => ['class' => 'blue-grid-head'],
'format' => ['currency', ''],
//'mergeHeader'=>true
],
[
"attribute" => "monthlymemberenrollment",
'label' => 'Monthly Member Enrollment',
'width'=>'150px',
'pageSummary' => true,
'headerOptions' => ['class' => 'blue-grid-head'],
'format' => ['currency', ''],
//'mergeHeader'=>true
],
 
[
"attribute" => "employeepremium",
'label' => 'Employee Premiums',
'width'=>'150px',
'pageSummary' => true,
'headerOptions' => ['class' => 'blue-grid-head'],
'format' => ['currency', ''],
//'mergeHeader'=>true
],

[
"attribute" => "cobracontribution",
'label' => 'Cobra Contributions',
'width'=>'150px',
'pageSummary' => true,
'headerOptions' => ['class' => 'blue-grid-head'],
'format' => ['currency', ''],
//'mergeHeader'=>true
],

[
"attribute" => "memberpaidcopay",
'label' => 'Member Paid Ded. Copay etc',
'width'=>'150px',
'pageSummary' => true,
'headerOptions' => ['class' => 'blue-grid-head'],
'format' => ['currency', ''],
//'mergeHeader'=>true
],
[
"attribute" => "netemployermonthlycost",
'label' => 'Total Net Employer Monthly Cost',
'width'=>'150px',
'pageSummary' => true,
'headerOptions' => ['class' => 'blue-grid-head'],
'format' => ['currency', ''],
//'mergeHeader'=>true
],




			];
								echo GridView::widget([
															'dataProvider' => $dataProvider,
														//	'filterModel' => $searchModel,
															'columns' => $gridColumns,
															'containerOptions' => ['style'=>'overflow: auto'], // only set when $responsive = false
														   /* 'beforeHeader'=>[
																[
																	'columns'=>[
																		['content'=>'Header Before 1', 'options'=>['colspan'=>4, 'class'=>'text-center warning']], 
																		['content'=>'Header Before 2', 'options'=>['colspan'=>4, 'class'=>'text-center warning']], 
																		['content'=>'Header Before 3', 'options'=>['colspan'=>3, 'class'=>'text-center warning']], 
																	],
																	'options'=>['class'=>'skip-export'] // remove this row from export
																]
															],*/
															'toolbar' =>  [
																/*
																'{export}',
																'{toggleData}'*/
															],
															'pjax' => true,
															'bordered' => true,
															'striped' => true,
															'condensed' => false,
															'responsive' => true,
															'hover' => true,
//'allowFilterSetting' => false,
//'mergeHeader'=>false,
														   // 'floatHeader' => true,
														   // 'floatHeaderOptions' => ['scrollingTop' => true],
															 'showPageSummary' => true,
															'panel' => [
															'heading'=>false,
																'type' => GridView::TYPE_PRIMARY,
																'footer' => false,
															],
														]);
																
															
															?>
			</div>
				</div> 
			</div>
		
</div>
											
								
								
							<div class="modal-footer col-md-12 footer-background">
							 
						 
						</div>
						</div>
						
					</div>
					
				</div>		
		<!--end plan year total report-->
		
		
				<!---start buget report--> 
<div class="modal fade" id="buget_report_modal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
				<div class="modal-dialog modal-lg">
					<div class="modal-content col-md-12 padding-0">
						<div class="modal-header modal-header-color">
							 
							<button type="button" class="close-modal modal-opacity close-modal-blue" data-dismiss="modal" aria-hidden="true">
								X
							</button>
							<h4 class="modal-title color-white col-md-5 padding-0" id="myModalLabel">
								Plan Year Budget Report
							</h4>
							
							<span class="modal-title color-white col-md-3 padding-5" id="myModalLabel">
							<span class="pdf-download">
  
  <i class="fa fa-file-pdf-o padding-5" style="font-size: 12px;"></i>
  
  <span class="padding-10" >Download Pdf</span> 
  <i class="fa fa-download padding-5 download-icon" ></i>
</span>
							</span>
							
							<span class="modal-title color-white col-md-1 padding-5 padding-left-0" id="myModalLabel">
							
  
  <i class="fa fa-print padding-5 padding-left-0" style="font-size: 24px;"></i>
  

							</span>
							
						</div>
						<div class="modal-body  col-md-12" style="max-height: 450px;overflow-y: scroll;">
						<div class="row">
		<div class="col-md-12 padding-bottom-15">
		<div class="col-md-12">
		<div class="col-md-4">
		<img class="img-responsive" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/images/logo/company-logo.png" alt="Export">
		</div>
		<div class="col-md-5">
		<span class="display-block engineer">ABC ENGINEERING</span>
		<span class=" left-head" style="font-size: 13px;"><b>Plan Year Budget Report</b></span> |
		<span class=" left-head" style="font-size: 13px;"><b>Medicals Claims</b></span>
		</div>
  <div class="col-md-3" align="right">
		<img class="img-responsive" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/images/logo/benefits.png" alt="Export" style="  width: 200px;height: 38px;">

		</div>
		</div>
		</div>
		</div>
		
		
	<!--	<div class="row">
		<div class="col-md-12 padding-bottom-15">
		<div class="col-md-12 box-body padding-10">
	As of January 2015, your 12 month Medical Claims trend is -6.1%. The 24 month trend on this plan is -5.0%
It is often helpful to compare these figures to what these same trend amounts were 6 month, 12 months and 24 months ago. By doing this you can gauge the current health of your claims trends.</p>

		</div>
		</div>
		</div>-->
		
		<div class="row">
		<div class="col-md-12 padding-bottom-15">
		<div class="col-md-12 padding-0">
	<div class="col-md-6 padding-left-0">
	<div class="col-md-12 border-ddd padding-10">
							<div class="widget-header">
								<strong class="margin-right-10">Total Paid Plan Claims By Month</strong>
							</div>
							<div>
							<div id="budget_report" style="min-width: 310px; height: 200px; margin: 0 auto"></div>
							
							</div>
	</div>
	</div>
						
	<div class="col-md-6 padding-right-0">
					<div class="col-md-12 border-ddd padding-10">
							<div class="widget-header">
								<strong class="margin-right-10">Total Paid Plan Claims By Month</strong>
							</div>
							<div>
							<div id="budget_report2" style="min-width: 310px; height: 200px; margin: 0 auto"></div>
							
							</div>
	</div>
		</div>
		</div>
		</div>
		</div>
		
		
		<div class="row">
		<div class="col-md-12 padding-bottom-15">
		<div class="col-md-12 padding-0">
		<div class="col-md-6 padding-left-0">
						<div class="col-md-12 border-ddd padding-10">
<div class="box-head-claim">Average Total Cost / Month</div>
	 <table style="width: 100%" class="table-line">
										<thead class="background-blue">

											<tr>

												<th class="text-align-center">Plan Costs</th>
												<th class="text-align-center">Amount</th>
												<th class="text-align-center">Pepm</th>
												<th class="text-align-center">Pmpm</th>
												
											</tr>
										</thead>

										<tbody class="text-align-center">
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Average Plan Cost / Month</td>
												<td>836,032</td>
												<td>$688</td>
												<td>$597</td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Budgeted Plan Cost / Month</td>
												<td>725,000</td>
												<td>$374</td>
												<td>$325</td>
												
											</tr>
											
											
										</tbody>
									</table>
		</div>
		</div>
		
		<div class="col-md-6 padding-right-0">
						<div class="col-md-12 border-ddd padding-10">
<div class="box-head-claim">Actual Vs Budgeted</div>
	  <table style="width: 50%" class="pull-left table-line">
										

										<tbody class="text-align-center">
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Plan Year Costs (YTD)</td>
												<td>10,032,380</td>
												
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Budgeted Costs (YTD)</td>
												<td>8,700,000</td>
												
												
											</tr>
											
											
										</tbody>
									</table>
									<table style="width: 50%;background-color: rgba(44, 168, 50, 0.5);"  class="pull-left table-line">
										

										<tbody class="text-align-center">
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Plan is under budget ($)</td>
												<td>-$,332,380</td>
												
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Plan is under budget (%)</td>
												<td>-15.3%</td>
												
												
											</tr>
											
											
										</tbody>
									</table>
		</div>
		</div>
		</div>
		</div>
		</div>
		
		
		<div class="row">
			<div class="col-md-12" id="claim_trend">
			<div class="col-md-12  padding-10 border-ddd">
			<div class="box-head-claim">Report Details</div>
			<?php
$resultData = [
    array("month"=>"Jan-13","medicalclaim"=>"569207","administrationfees"=>"51698","dentalclaim"=>"","pharmacyclaim"=>"43367","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1221","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"Feb-13","medicalclaim"=>"569207","administrationfees"=>"50780","dentalclaim"=>"","pharmacyclaim"=>"44835","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1220","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"Mar-13","medicalclaim"=>"569207","administrationfees"=>"50523","dentalclaim"=>"","pharmacyclaim"=>"70704","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1222","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"Apr-13","medicalclaim"=>"569207","administrationfees"=>"50749","dentalclaim"=>"","pharmacyclaim"=>"60122","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1225","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"May-13","medicalclaim"=>"569207","administrationfees"=>"50709","dentalclaim"=>"","pharmacyclaim"=>"46032","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1224","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"June-13","medicalclaim"=>"569207","administrationfees"=>"54889","dentalclaim"=>"","pharmacyclaim"=>"59585","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1228","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"July-13","medicalclaim"=>"569207","administrationfees"=>"53967","dentalclaim"=>"","pharmacyclaim"=>"23042","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1220","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"Aug-13","medicalclaim"=>"569207","administrationfees"=>"47137","dentalclaim"=>"","pharmacyclaim"=>"89236","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1221","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"Sep-13","medicalclaim"=>"569207","administrationfees"=>"54209","dentalclaim"=>"","pharmacyclaim"=>"12256","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1900","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"Oct-13","medicalclaim"=>"569207","administrationfees"=>"53218","dentalclaim"=>"","pharmacyclaim"=>"44456","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1300","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"Nov-13","medicalclaim"=>"569207","administrationfees"=>"52123","dentalclaim"=>"","pharmacyclaim"=>"42123","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1229","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"Dec-13","medicalclaim"=>"569207","administrationfees"=>"58425","dentalclaim"=>"","pharmacyclaim"=>"56101","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1227","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
      
   
    ];

function filterbudget($item) {
    $mailfilter = Yii::$app->request->getQueryParam('filteremail', '');
    if (strlen($mailfilter) > 0) {
        if (strpos($item['email'], $mailfilter) != false) {
            return true;
        } else {
            return false;
        }
    } else {
        return true;
    }
}

$filteredresultData = array_filter($resultData, 'filterbudget');


$mailfilter = Yii::$app->request->getQueryParam('filteremail', '');
$namefilter = Yii::$app->request->getQueryParam('filtername', '');

$searchModel = [ 'month' => $namefilter, 'medicalclaim' => $mailfilter];

$dataProvider = new ArrayDataProvider([
      //  'key'=>'id',
        'allModels' => $filteredresultData,
        'sort' => [
            'attributes' => [ 'month', 'medicalclaim'],
        ],
]);

$gridColumns = [
            ['class' => 'kartik\grid\SerialColumn'],
            

        [
            'attribute' => 'month', 
            'value' => 'month',
'label' => 'Month',
'width'=>'150px',
'noWrap'=>true,
'headerOptions' => ['class' => 'blue-grid-head'],
//'mergeHeader'=>true
            ],
            [
            "attribute" => "medicalclaim",
           // 'filter' => '<input class="form-control" name="filteremail" value="'. $searchModel['medicalclaim'] .'" type="text">',
            'value' => 'medicalclaim',
'label' => 'Net Medical Claim',
'width'=>'150px',
 'pageSummary' => true,
  'format' => ['currency', ''],
  'headerOptions' => ['class' => 'blue-grid-head'],
//'mergeHeader'=>true
            ],
			[
"attribute" => "pharmacyclaim",
'label' => 'Net Pharmacy Claim',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
'headerOptions' => ['class' => 'blue-grid-head'],
//'mergeHeader'=>true
],
[
"attribute" => "dentalclaim",
'label' => '',
'width'=>'150px',
'headerOptions' => ['class' => 'blue-grid-head'],
//'pageSummary' => true,
//'mergeHeader'=>true
],
[
"attribute" => "netclaim",
'label' => 'Total Monthly Net Claims',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
'headerOptions' => ['class' => 'blue-grid-head'],
//'mergeHeader'=>true
],
[
"attribute" => "administrationfees",
'label' => 'Administration Fees',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
'headerOptions' => ['class' => 'blue-grid-head'],
//'pageSummary'=>true,
//'mergeHeader'=>true
],



[
"attribute" => "reinsurancepremiums",
'label' => 'Reinsurance Premiums',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
'headerOptions' => ['class' => 'blue-grid-head'],
//'mergeHeader'=>true
],


[
"attribute" => "expectedclaims",
'label' => 'Total Monthly Plan Costs',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
'headerOptions' => ['class' => 'blue-grid-head'],
//'mergeHeader'=>true
],
[
"attribute" => "monthlyenrollment",
'label' => 'Monthly Employee Enrollment',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
'headerOptions' => ['class' => 'blue-grid-head'],
//'mergeHeader'=>true
],
[
"attribute" => "monthlymemberenrollment",
'label' => 'Monthly Member Enrollment',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
'headerOptions' => ['class' => 'blue-grid-head'],
//'mergeHeader'=>true
],
[
"attribute" => "monthlybudget",
'label' => 'Monthly Budget',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
'headerOptions' => ['class' => 'blue-grid-head'],
//'mergeHeader'=>true
],



			];
								echo GridView::widget([
															'dataProvider' => $dataProvider,
														//	'filterModel' => $searchModel,
															'columns' => $gridColumns,
															'containerOptions' => ['style'=>'overflow: auto'], // only set when $responsive = false
													 
														
		'toolbar' =>  [
																/*
																'{export}',
																'{toggleData}'*/
															],
															'pjax' => true,
															'bordered' => true,
															'striped' => true,
															'condensed' => false,
															'responsive' => true,
															'hover' => true,
//'allowFilterSetting' => false,
//'mergeHeader'=>false,
														   // 'floatHeader' => true,
														   // 'floatHeaderOptions' => ['scrollingTop' => true],
															 'showPageSummary' => true,
															'panel' => [
															'heading'=>false,
																'type' => GridView::TYPE_PRIMARY,
																'footer' => false,
															],
														]);
																
															
															
															?>
									
									</div>
				</div>
			
		
			</div>
		
</div>
											
								
								
							<div class="modal-footer col-md-12 footer-background">
							 
						 
						</div>
						</div>
						
					</div>
					
				</div>		
		<!-- end budget report --->
		
		
		
			<!-- plan year 0ver year --> 
				
<div class="modal fade" id="year_over_year_modal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
				<div class="modal-dialog modal-lg">
					<div class="modal-content col-md-12 padding-0">
						<div class="modal-header modal-header-color">
							 
							<button type="button" class="close-modal modal-opacity close-modal-blue" data-dismiss="modal" aria-hidden="true">
								X
							</button>
							<h4 class="modal-title color-white col-md-5 padding-0" id="myModalLabel">
								 Year Over Year Report
							</h4>
							
							<span class="modal-title color-white col-md-3 padding-5" id="myModalLabel">
							<span class="pdf-download">
  
  <i class="fa fa-file-pdf-o padding-5" style="font-size: 12px;"></i>
  
  <span class="padding-10" >Download Pdf</span> 
  <i class="fa fa-download padding-5 download-icon" ></i>
</span>
							</span>
							
							<span class="modal-title color-white col-md-1 padding-5 padding-left-0" id="myModalLabel">
							
  
  <i class="fa fa-print padding-5 padding-left-0" style="font-size: 24px;"></i>
  

							</span>
							
						</div>
						<div class="modal-body  col-md-12" style="max-height: 450px;overflow-y: scroll;">
						<div class="row">
		<div class="col-md-12 padding-bottom-15">
		<div class="col-md-12">
		<div class="col-md-4">
		<img class="img-responsive" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/images/logo/company-logo.png" alt="Export">
		</div>
		<div class="col-md-5">
		<span class="display-block engineer">ABC ENGINEERING</span>
		<span class=" left-head" style="font-size: 13px;"><b> Year Over Year Report</b></span> |
		<span class=" left-head" style="font-size: 13px;"><b>Medicals Claims</b></span>
		</div>
  <div class="col-md-3" align="right">
		<img class="img-responsive" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/images/logo/benefits.png" alt="Export" style="  width: 200px;height: 38px;">

		</div>
		</div>
		</div>
		</div>
		

		
		<div class="row">
		<div class="col-md-12 padding-bottom-15">
		<div class="col-md-12 padding-0">
	<div class="col-md-6 padding-left-0">
	<div class="col-md-12 border-ddd padding-10">
							<div class="widget-header">
								<strong class="margin-right-10">Total Paid Plan Claims By Month</strong>
							</div>
							<div>
							<div id="year_over_year1" style="min-width: 310px; height: 200px; margin: 0 auto"></div>
							
							</div>
	</div>
	</div>
						
	<div class="col-md-6 padding-right-0">
					<div class="col-md-12 border-ddd padding-10">
							<div class="widget-header">
								<strong class="margin-right-10">Total Paid Plan Claims By Month</strong>
							</div>
							<div>
							<div id="year_over_year2" style="min-width: 310px; height: 200px; margin: 0 auto"></div>
							
							</div>
	</div>
		</div>
		</div>
		</div>
		</div>
		
		
		<div class="row">
		<div class="col-md-12 padding-bottom-15">
		<div class="col-md-12 padding-0">
		<div class="col-md-4 padding-left-0">
						<div class="col-md-12 border-ddd padding-10">
<div class="box-head-claim">2009 Plan Year</div>
			<table class="table-line" style="width: 100%">
										<thead class="background-blue">

											<tr>

												<th class="text-align-center">Expenditure</th>
												<th class="text-align-center">Amount</th>
												<th class="text-align-center">Pepm</th>
												<th class="text-align-center">Pmpm</th>
												
											</tr>
										</thead>

										<tbody class="text-align-center">
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Employer Expenditures</td>
												<td>836,032</td>
												<td>$688</td>
												<td>$597</td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Employee/Member Costs</td>
												<td>725,000</td>
												<td>$374</td>
												<td>$325</td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td><u>Total</u></td>
												<td><u>725,000</u></td>
												<td>##</td>
												<td>##</td>
												
											</tr>
											
										</tbody>
									</table>
									
		</div>
		</div>
		
		<div class="col-md-4 ">
						<div class="col-md-12 border-ddd padding-10">
<div class="box-head-claim">2010 Plan Year</div>
	
									<table class="table-line" style="width: 100%">
										<thead  class="background-blue">

											<tr>

												<th class="text-align-center">Expenditure</th>
												<th class="text-align-center">Amount</th>
												<th class="text-align-center">Pepm</th>
												<th class="text-align-center">Pmpm</th>
												
											</tr>
										</thead>

										<tbody class="text-align-center">
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Employer Expenditures</td>
												<td>836,032</td>
												<td>$688</td>
												<td>$597</td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Employee/Member Costs</td>
												<td>725,000</td>
												<td>$374</td>
												<td>$325</td>
												
											</tr>
											
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td><u>Total</u></td>
												<td><u>725,000</u></td>
												<td>##</td>
												<td>##</td>
												
											</tr>
										</tbody>
									</table>
		</div>
		</div>
		<div class="col-md-4 padding-right-0">
						<div class="col-md-12 border-ddd padding-10">
<div class="box-head-claim">2011 Plan Year</div>
			<table class="table-line"  style="width: 100%">
										<thead class="background-blue">

											<tr>

												<th class="text-align-center">Expenditure</th>
												<th class="text-align-center">Amount</th>
												<th class="text-align-center">Pepm</th>
												<th class="text-align-center">Pmpm</th>
												
											</tr>
										</thead>

										<tbody class="text-align-center">
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Employer Expenditures</td>
												<td>836,032</td>
												<td>$688</td>
												<td>$597</td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Employee/Member Costs</td>
												<td>725,000</td>
												<td>$374</td>
												<td>$325</td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td><u>Total</u></td>
												<td><u>725,000</u></td>
												<td>##</td>
												<td>##</td>
												
											</tr>
											
										</tbody>
									</table>
		</div>
		</div>
		</div>
		</div>
		</div>
		
		
		<div class="row">
		<div class="col-md-12 padding-bottom-15">
		<div class="col-md-12 padding-0">
		<div class="col-md-4 padding-left-0">
						<div class="col-md-12 border-ddd padding-10">
<div class="box-head-claim">2012 Plan Year</div>
		<table class="table-line" style="width: 100%">
										<thead class="background-blue">

											<tr>

												<th class="text-align-center">Expenditure</th>
												<th class="text-align-center">Amount</th>
												<th class="text-align-center">Pepm</th>
												<th class="text-align-center">Pmpm</th>
												
											</tr>
										</thead>

										<tbody class="text-align-center">
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Employer Expenditures</td>
												<td>836,032</td>
												<td>$688</td>
												<td>$597</td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Employee/Member Costs</td>
												<td>725,000</td>
												<td>$374</td>
												<td>$325</td>
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td><u>Total</u></td>
												<td><u>725,000</u></td>
												<td>##</td>
												<td>##</td>
												
											</tr>
											
										</tbody>
									</table>
									
		</div>
		</div>
		
		<div class="col-md-4 ">
						<div class="col-md-12 border-ddd padding-10">
<div class="box-head-claim">2013 Plan Year</div>
	
										<table class="table-line" style="width: 100%">
										<thead class="background-blue">

											<tr>

												<th class="text-align-center">Expenditure</th>
												<th class="text-align-center">Amount</th>
												<th class="text-align-center">Pepm</th>
												<th class="text-align-center">Pmpm</th>
												
											</tr>
										</thead>

										<tbody class="text-align-center">
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Employer Expenditures</td>
												<td>836,032</td>
												<td>$688</td>
												<td>$597</td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Employee/Member Costs</td>
												<td>725,000</td>
												<td>$374</td>
												<td>$325</td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td><u>Total</u></td>
												<td><u>725,000</u></td>
												<td>##</td>
												<td>##</td>
												
											</tr>
											
										</tbody>
									</table>
		</div>
		</div>
		<div class="col-md-4 padding-right-0">
						<div class="col-md-12 border-ddd padding-10">
<div class="box-head-claim">2014 Plan Year</div>
			<table class="table-line" style="width: 100%">
										<thead class="background-blue">

											<tr>

												<th class="text-align-center">Expenditure</th>
												<th class="text-align-center">Amount</th>
												<th class="text-align-center">Pepm</th>
												<th class="text-align-center">Pmpm</th>
												
											</tr>
										</thead>

										<tbody class="text-align-center">
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Employer Expenditures</td>
												<td>836,032</td>
												<td>$688</td>
												<td>$597</td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Employee/Member Costs</td>
												<td>725,000</td>
												<td>$374</td>
												<td>$325</td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td><u>Total</u></td>
												<td><u>725,000</u></td>
												<td>##</td>
												<td>##</td>
												
											</tr>
											
										</tbody>
									</table>
		</div>
		</div>
		</div>
		</div>
		</div>
		
		<div class="row">
			<div class="col-md-12" id="claim_trend">
			<div class="col-md-12  padding-10 border-ddd">
			<div class="box-head-claim">Report Details</div>
	<table class="table-line" style="width: 100%">
										<thead class="background-blue">

											<tr>

												<th class="text-align-center" rowspan=2>Plan Year</th>
												<th class="text-align-center" colspan=2>2009</th>
												<th class="text-align-center" colspan=2>2010</th>
												<th class="text-align-center" colspan=2>2011</th>
												<th class="text-align-center" colspan=2>2012</th>
												<th class="text-align-center" colspan=2>2013</th>
												<th class="text-align-center" colspan=2>2014</th>
												
											</tr>
											<tr>

												
												<th class="text-align-center">Amount</th>
												<th class="text-align-center">Change</th>
												<th class="text-align-center">Amount</th>
												<th class="text-align-center">Change</th>
												<th class="text-align-center">Amount</th>
												<th class="text-align-center">Change</th>
												<th class="text-align-center">Amount</th>
												<th class="text-align-center">Change</th>
												<th class="text-align-center">Amount</th>
												<th class="text-align-center">Change</th>
												<th class="text-align-center">Amount</th>
												<th class="text-align-center">Change</th>
												
											</tr>
										</thead>

										<tbody class="text-align-center">
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Medical Claims</td> 
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Pharmacy Claims</td> 
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Reimbursement</td> 
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Drug  Rebates</td> 
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												
											</tr>
											<tr class="" style="background-color: #000;color:white">
												<td>Net Total Claims</td> 
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Adminstration Fees</td> 
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Reinsurance Premiums</td> 
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												
											</tr>
											<tr class="" style="background-color: #000;color:white">
												<td>Total Plan Costs</td> 
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Employee Premiums</td> 
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Cobra Premiums</td> 
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Member Deb,Copay,etc</td> 
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												
											</tr>
											<tr class="" style="background-color: #000;color:white">
												<td>Cost</td> 
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Average Monthly Employee Enrollment</td> 
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Average Monthly Member Enrollment</td> 
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												<td>$688</td>
												<td>$597</td>
												
											</tr>
											 
											
										</tbody>
									</table>
			</div>
				</div> 
			</div>
		
		
		<div class="row">
			<div class="col-md-12">
			<div class="col-md-12  padding-10 border-ddd">
			<div class="box-head-claim">Report Details</div>
			
			<table class="table-line" style="width: 100%">
									<!--	<thead>

											<tr>

												<th class="text-align-center">Expenditure</th>
												<th class="text-align-center">Amount</th>
												<th class="text-align-center">Pepm</th>
												<th class="text-align-center">Pmpm</th>
												
											</tr>
										</thead>-->

										<tbody class="text-align-center">
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Adminstrative vendor</td>
												<td>United Health Care</td>
												<td>United Health Care</td>
												<td>Blue cross</td>
												<td>Blue cross</td>
												<td>Blue cross</td>
												<td>Blue cross</td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Medical Network</td>
												<td>United Health Care</td>
												<td>United Health Care</td>
												<td>BCBS PPO</td>
												<td>BCBS PPO</td>
												<td>BCBS PPO</td>
												<td>BCBS PPO</td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Pharmacy Network</td>
												<td>Optum RX</td>
												<td>Optum RX</td>
												<td>Caremark</td>
												<td>Caremark</td>
												<td>Caremark</td>
												<td>Caremark</td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Renewal Plan Year</td>
												<td>2010</td>
												<td>2011</td>
												<td>2012 </td>
												<td>2013 </td>
												<td>2014 </td>
												<td>2015 </td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Annual Fee / Commission</td>
												<td>$ 111000</td>
												<td>$ 34343</td>
												<td>$ 6565</td>
												<td>$ 4523</td>
												<td>$ 4523</td>
												<td>$ 4523</td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Budget</td>
												<td>$ 343</td>
												<td>$ 343</td>
												<td>$ 254 </td>
												<td>$ 452 </td>
												<td>$ 452 </td>
												<td>$ 454 </td>
												
											</tr>
											
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Plan Change Detail Summary From Prior Year</td>
												<td>Good cost year, left plans and employee contributions the same as prior year.</td>
												<td>Costs came in as expected for the year, slight plan changes to copays and no employee contribution changes.</td>
												<td>Changed carriers due to UHC renewal, and network/service issues.  Raised deductibles on both plans.  Now Base plan is $1,500 and BuyUp is $500. </td>
												<td>Good cost year, left plans and employee contributions the same as prior year. </td>
												<td>Good cost year, left plans and employee contributions the same as prior year. </td>
												<td>Good cost year, left plans and employee contributions the same as prior year. </td>
												
											</tr>
											
											<tr class="tr-back-firm" style="background-color: transparent;" >
												<td>Reinsurance Carrier</td>
												<td>Optum</td>
												<td>Optum</td>
												<td>Sunlife</td>
												<td>Munich RE</td>
												<td>Munich RE</td>
												<td>Munich RE</td>
												
											</tr>
											
											<tr class="tr-back-firm" style="background-color: transparent;" >
												<td>Specific Covered Benefits</td>
												<td>Med & Rx</td>
												<td>Med & Rx</td>
												<td>Med & Rx</td>
												<td>Med & Rx</td>
												<td>Med & Rx</td>
												<td>Med & Rx</td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;" >
												<td>Specific Contract Type</td>
												<td>12/18</td>
											<td>12/18</td>
											<td>12/18</td>
												<td>Paid</td>
												<td>Paid</td>
												<td>Paid</td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;" >
												<td>Specific Annual maximum</td>
												<td>Unlimited</td>
												<td>Unlimited</td>
												<td>Unlimited</td>
												<td>Unlimited</td>
												<td>Unlimited</td>
												<td>Unlimited</td>
												
											</tr>
												<tr class="tr-back-firm" style="background-color: transparent;" >
												<td>Specific Lifetime maximum</td>
												<td>Unlimited</td>
												<td>Unlimited</td>
												<td>Unlimited</td>
												<td>Unlimited</td>
												<td>Unlimited</td>
												<td>Unlimited</td>
												
											</tr>
											
												<tr class="tr-back-firm" style="background-color: transparent;" >
												<td>Specific Deductible</td>
												<td>$ 120000</td>
												<td>$ 120000</td>
												<td>$ 120000</td>
												<td>$ 120000</td>
												<td>$ 120000</td>
												<td>$ 120000</td>
												
											</tr>
											
												<tr class="tr-back-firm" style="background-color: transparent;" >
												<td>Specific Lasers</td>
												<td>No</td>
												<td>Yes</td>
												<td>No</td>
												<td>No</td>
												<td>Yes</td>
												<td>No</td>
												
											</tr>
											
											
												<tr class="tr-back-firm" style="background-color: transparent;" >
												<td>Lasers Details</td>
												<td>na</td>
												<td>na</td>
												<td>na</td>
												<td>$350,000 laser, $300,000 laser</td>
												<td>na</td>
												<td>na</td>
												
											</tr>
											
												<tr class="tr-back-firm" style="background-color: transparent;" >
												<td>Aggregating Specific</td>
												<td>No</td>
												<td>No</td>
												<td>No</td>
												<td>No</td>
												<td>No</td>
												<td>Yes</td>
												
											</tr>
											
											<tr class="tr-back-firm" style="background-color: transparent;" >
												<td>Amount</td>
												<td>na</td>
												<td>na</td>
												<td>na</td>
												<td>na</td>
												<td>na</td>
												<td>$ 15000</td>
												
											</tr>
											
												<tr class="tr-back-firm" style="background-color: transparent;" >
												<td>Aggregate Covered Benefits</td>
												<td>Med & Rx</td>
												<td>Med & Rx</td>
												<td>Med & Rx</td>
												<td>Med & Rx</td>
												<td>Med & Rx</td>
												<td>Med & Rx</td>
												
											</tr>
											
												<tr class="tr-back-firm" style="background-color: transparent;" >
												<td>Aggregate Contract Type</td>
												<td>12/18</td>
											<td>12/18</td>
											<td>12/18</td>
												<td>Paid</td>
												<td>Paid</td>
												<td>Paid</td>
												
											</tr>
											
												<tr class="tr-back-firm" style="background-color: transparent;" >
												<td>Aggregate Annual Maximum</td>
												<td>Unlimited</td>
												<td>Unlimited</td>
												<td>Unlimited</td>
												<td>Unlimited</td>
												<td>Unlimited</td>
												<td>Unlimited</td>
												
											</tr>
												<tr class="tr-back-firm" style="background-color: transparent;" >
												<td>Aggregate Lifetime Maximum</td>
												<td>Unlimited</td>
												<td>Unlimited</td>
												<td>Unlimited</td>
												<td>Unlimited</td>
												<td>Unlimited</td>
												<td>Unlimited</td>
												
											</tr>
											
												<tr class="tr-back-firm" style="background-color: transparent;" >
												<td>Aggregate Monthly Claim Factors</td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
											
											<tr class="tr-back-firm" style="background-color: transparent;" >
												<td>Employee</td>
												<td>$ 437.25</td>
												<td>$ 437.25</td>
												<td>$ 437.25</td>
												<td>$ 437.25</td>
												<td>$ 437.25</td>
												<td>$ 437.25</td>
											</tr>
											
											<tr class="tr-back-firm" style="background-color: transparent;" >
												<td>Employee & Spouse</td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;" >
												<td>Employee & Child(ren)</td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;" >
												<td>Family</td>
												<td>$ 1125.04</td>
												<td>$ 1164.04</td>
												<td>$ 1164.04</td>
												<td>$ 1164.04</td>
												<td>$ 1164.04</td>
												<td>$ 1164.04</td>
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;" >
												<td>Composite</td>
												<td>$665.56</td>
												<td>$665.56</td>
												<td>$665.56</td>
												<td>$665.56</td>
												<td>$665.56</td>
												<td>$665.56</td>
											</tr>
										</tbody>
									</table>
			</div>
			</div>
			</div>
</div>
											
								
								
							<div class="modal-footer col-md-12 footer-background">
							 
							<a href="#"  class="btn btn-default"  data-dismiss="modal">
								Cancel
							</a>
							<a href="#"  class="btn btn-modal-blue">
								Save  
							</a>
						</div>
						</div>
						
					</div>
					
				</div>		
		<!--end plan year total report-->
		
		
			<!-- remainder plan year report --> 
				
<div class="modal fade" id="remiander_year_modal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
				<div class="modal-dialog modal-lg">
					<div class="modal-content col-md-12 padding-0">
						<div class="modal-header modal-header-color">
							 
							<button type="button" class="close-modal modal-opacity close-modal-blue" data-dismiss="modal" aria-hidden="true">
								X
							</button>
							<h4 class="modal-title color-white col-md-5 padding-0" id="myModalLabel">
								 Remainder Year Project Report
							</h4>
							
							<span class="modal-title color-white col-md-3 padding-5" id="myModalLabel">
							<span class="pdf-download">
  
  <i class="fa fa-file-pdf-o padding-5" style="font-size: 12px;"></i>
  
  <span class="padding-10" >Download Pdf</span> 
  <i class="fa fa-download padding-5 download-icon" ></i>
</span>
							</span>
							
							<span class="modal-title color-white col-md-1 padding-5 padding-left-0" id="myModalLabel">
							
  
  <i class="fa fa-print padding-5 padding-left-0" style="font-size: 24px;"></i>
  

							</span>
							
						</div>
						<div class="modal-body  col-md-12" style="max-height: 450px;overflow-y: scroll;">
						<div class="row">
		<div class="col-md-12 padding-bottom-15">
		<div class="col-md-12">
		<div class="col-md-4">
		<img class="img-responsive" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/images/logo/company-logo.png" alt="Export">
		</div>
		<div class="col-md-5">
		<span class="display-block engineer">ABC ENGINEERING</span>
		<span class=" left-head" style="font-size: 13px;"><b>Remainder Year Project Report</b></span> |
		<span class=" left-head" style="font-size: 13px;"><b>Medicals Claims</b></span>
		</div>
  <div class="col-md-3" align="right">
		<img class="img-responsive" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/images/logo/benefits.png" alt="Export" style="  width: 200px;height: 38px;">

		</div>
		</div>
		</div>
		</div>
		

		
		<div class="row">
		<div class="col-md-12 padding-bottom-15">
		<div class="col-md-12 padding-0">
	<div class="col-md-6 padding-left-0">
	<div class="col-md-12 border-ddd padding-10">
							<div class="widget-header">
								<strong class="margin-right-10">Total Paid Plan Claims By Month</strong>
							</div>
							<div>
							<div id="remainderprojectreport" style="min-width: 310px; height: 250px; margin: 0 auto"></div>
							
							</div>
	</div>
	</div>
						
	<div class="col-md-6 padding-right-0">
					<div class="col-md-12 border-ddd padding-10">
							<div class="widget-header">
								<strong class="margin-right-10">Total Paid Plan Claims By Month</strong>
							</div>
							<div>
							<div id="remainderprojectreport2" style="min-width: 310px; height: 250px; margin: 0 auto"></div>
							
							</div>
	</div>
		</div>
		</div>
		</div>
		</div>
		
		
		
		
		
	
		
		<div class="row">
			<div class="col-md-12 padding-bottom-10" >
			<div class="col-md-12  padding-10 border-ddd">
			<div class="box-head-claim">Report Details</div>
	<?php
$resultData = [
    array("month"=>"Jan-13","medicalclaim"=>"569207","administrationfees"=>"51698","dentalclaim"=>"","pharmacyclaim"=>"43367","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1221","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"Feb-13","medicalclaim"=>"569207","administrationfees"=>"50780","dentalclaim"=>"","pharmacyclaim"=>"44835","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1220","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"Mar-13","medicalclaim"=>"569207","administrationfees"=>"50523","dentalclaim"=>"","pharmacyclaim"=>"70704","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1222","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"Apr-13","medicalclaim"=>"569207","administrationfees"=>"50749","dentalclaim"=>"","pharmacyclaim"=>"60122","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1225","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"May-13","medicalclaim"=>"569207","administrationfees"=>"50709","dentalclaim"=>"","pharmacyclaim"=>"46032","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1224","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"June-13","medicalclaim"=>"569207","administrationfees"=>"54889","dentalclaim"=>"","pharmacyclaim"=>"59585","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1228","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"July-13","medicalclaim"=>"569207","administrationfees"=>"53967","dentalclaim"=>"","pharmacyclaim"=>"23042","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1220","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"Aug-13","medicalclaim"=>"569207","administrationfees"=>"47137","dentalclaim"=>"","pharmacyclaim"=>"89236","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1221","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"Sep-13","medicalclaim"=>"569207","administrationfees"=>"54209","dentalclaim"=>"","pharmacyclaim"=>"12256","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1900","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"Oct-13","medicalclaim"=>"569207","administrationfees"=>"53218","dentalclaim"=>"","pharmacyclaim"=>"44456","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1300","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"Nov-13","medicalclaim"=>"569207","administrationfees"=>"52123","dentalclaim"=>"","pharmacyclaim"=>"42123","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1229","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"Dec-13","medicalclaim"=>"569207","administrationfees"=>"58425","dentalclaim"=>"","pharmacyclaim"=>"56101","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1227","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
      
   
    ];

function filteremainder1($item) {
    $mailfilter = Yii::$app->request->getQueryParam('filteremail', '');
    if (strlen($mailfilter) > 0) {
        if (strpos($item['email'], $mailfilter) != false) {
            return true;
        } else {
            return false;
        }
    } else {
        return true;
    }
}

$filteredresultData = array_filter($resultData, 'filteremainder1'); 


$mailfilter = Yii::$app->request->getQueryParam('filteremail', '');
$namefilter = Yii::$app->request->getQueryParam('filtername', '');

$searchModel = [ 'month' => $namefilter, 'medicalclaim' => $mailfilter];

$dataProvider = new ArrayDataProvider([
      //  'key'=>'id',
        'allModels' => $filteredresultData,
        'sort' => [
            'attributes' => [ 'month', 'medicalclaim'],
        ],
]);

$gridColumns = [
            ['class' => 'kartik\grid\SerialColumn'],
            

        [
            'attribute' => 'month', 
            'value' => 'month',
'label' => 'Month',
'width'=>'150px',
'noWrap'=>true,
'headerOptions' => ['class' => 'blue-grid-head'],
//'mergeHeader'=>true
            ],
            [
            "attribute" => "medicalclaim",
           // 'filter' => '<input class="form-control" name="filteremail" value="'. $searchModel['medicalclaim'] .'" type="text">',
            'value' => 'medicalclaim',
'label' => 'Net Medical Claim',
'width'=>'150px',
 'pageSummary' => true,
  'format' => ['currency', ''],
  'headerOptions' => ['class' => 'blue-grid-head'],
//'mergeHeader'=>true
            ],
			[
"attribute" => "pharmacyclaim",
'label' => 'Net Pharmacy Claim',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
'headerOptions' => ['class' => 'blue-grid-head'],
//'mergeHeader'=>true
],
[
"attribute" => "dentalclaim",
'label' => '',
'width'=>'150px',
'headerOptions' => ['class' => 'blue-grid-head'],
//'pageSummary' => true,
//'mergeHeader'=>true
],
[
"attribute" => "netclaim",
'label' => 'Total Monthly Net Claims',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
'headerOptions' => ['class' => 'blue-grid-head'],
//'mergeHeader'=>true
],
[
"attribute" => "administrationfees",
'label' => 'Administration Fees',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
'headerOptions' => ['class' => 'blue-grid-head'],
//'pageSummary'=>true,
//'mergeHeader'=>true
],



[
"attribute" => "reinsurancepremiums",
'label' => 'Reinsurance Premiums',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
'headerOptions' => ['class' => 'blue-grid-head'],
//'mergeHeader'=>true
],


[
"attribute" => "expectedclaims",
'label' => 'Total Monthly Plan Costs',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
'headerOptions' => ['class' => 'blue-grid-head'],
//'mergeHeader'=>true
],
[
"attribute" => "monthlyenrollment",
'label' => 'Monthly Employee Enrollment',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
'headerOptions' => ['class' => 'blue-grid-head'],
//'mergeHeader'=>true
],
[
"attribute" => "monthlymemberenrollment",
'label' => 'Monthly Member Enrollment',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
'headerOptions' => ['class' => 'blue-grid-head'],
//'mergeHeader'=>true
],
[
"attribute" => "monthlybudget",
'label' => 'Monthly Budget',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
'headerOptions' => ['class' => 'blue-grid-head'],
//'mergeHeader'=>true
],



			];
								echo GridView::widget([
															'dataProvider' => $dataProvider,
														//	'filterModel' => $searchModel,
															'columns' => $gridColumns,
															'containerOptions' => ['style'=>'overflow: auto'], // only set when $responsive = false
														   /* 'beforeHeader'=>[
																[
																	'columns'=>[
																		['content'=>'Header Before 1', 'options'=>['colspan'=>4, 'class'=>'text-center warning']], 
																		['content'=>'Header Before 2', 'options'=>['colspan'=>4, 'class'=>'text-center warning']], 
																		['content'=>'Header Before 3', 'options'=>['colspan'=>3, 'class'=>'text-center warning']], 
																	],
																	'options'=>['class'=>'skip-export'] // remove this row from export
																]
															],*/
															'toolbar' =>  [
																/*
																'{export}',
																'{toggleData}'*/
															],
														'pjax' => true,
															'bordered' => true,
															'striped' => true,
															'condensed' => false,
															'responsive' => true,
															'hover' => true,
//'allowFilterSetting' => false,
//'mergeHeader'=>false,
														   // 'floatHeader' => true,
														   // 'floatHeaderOptions' => ['scrollingTop' => true],
															 'showPageSummary' => true,
															'panel' => [
															'heading'=>false,
																'type' => GridView::TYPE_PRIMARY,
																'footer' => false,
															],
														]);
															
															
															?>
			</div>
				</div> 
			</div>
		
		
		<div class="row">
			<div class="col-md-12">
			<div class="col-md-12  padding-10 border-ddd">
			
					 <div class="box-head-claim col-md-12 margin-left-0">Underwriting Assumptions</div>
				<div class="col-md-6   ">
										<fieldset>

												<legend>Experience Period #1</legend>
											<div class="col-md-12 padding-0  margin-bottom-15">
											<table class="table-line" style="width: 100%;">
											<tbody class="text-align-center">
											<tr>
												<td></td>
												<td bgcolor="#d56700"><u><font color="white">From</font></u></td>
												<td bgcolor="#d56700"><u><font color="white">To</font></u></td>
												<td bgcolor="#d56700"><u><font color="white">Period Mid-Point</font></u></td>
												<td bgcolor="#00bd00"><u><font color="white">Creditiblity %</font></u></td>
												<td bgcolor="#0048bd"><u><font color="white">Trend Months</font></u></td>
											</tr>
											<tr>
												<td>Projection Period</td>
												<td bgcolor="#f6dfd5">Sep-14</td>
												<td bgcolor="#f6dfd5">Dec-14</td>
												<td bgcolor="#f6dfd5">Oct-14</td>
												<td bgcolor="#0000"></td>
												<td bgcolor="#0000"></td>
											</tr>
											<tr>
												<td>Experience Period #1</td>
												<td bgcolor="#f6dfd5">Sep-13</td>
												<td bgcolor="#f6dfd5">Aug-14</td>
												<td bgcolor="#f6dfd5">Feb-14</td>
												<td bgcolor="#ddf8de">80%</td>
												<td bgcolor="#dde6f8">8.01</td>
											</tr>
											
											</tbody>
										</table>
											</div>
											
											<div class="col-md-6 padding-0  margin-bottom-15">
											<table class="table-line" style="width: 100%;">
											<tbody class="text-align-center">
											<tr>
												<td></td>
												<td bgcolor="#c1a344"><u><font color="white">Trend Assumptions</font></u></td>
												</tr>
											<tr>
												<td>Medical Claims</td>
												<td bgcolor="#f0e4c0">9.75%</td>
												
											</tr>
											<tr>
												<td>Pharmacy Claims</td>
												<td bgcolor="#f0e4c0">11.20%</td>
												
											</tr>
											
											</tbody>
										</table>
											</div>
											
											<div class="col-md-12 back-white padding-0">
									 

									<?php
$resultData = [
    array("month"=>"Jan-13","medicalclaim"=>"569207","administrationfees"=>"51698","dentalclaim"=>"","pharmacyclaim"=>"43367","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1221","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"Feb-13","medicalclaim"=>"569207","administrationfees"=>"50780","dentalclaim"=>"","pharmacyclaim"=>"44835","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1220","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"Mar-13","medicalclaim"=>"569207","administrationfees"=>"50523","dentalclaim"=>"","pharmacyclaim"=>"70704","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1222","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"Apr-13","medicalclaim"=>"569207","administrationfees"=>"50749","dentalclaim"=>"","pharmacyclaim"=>"60122","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1225","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"May-13","medicalclaim"=>"569207","administrationfees"=>"50709","dentalclaim"=>"","pharmacyclaim"=>"46032","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1224","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"June-13","medicalclaim"=>"569207","administrationfees"=>"54889","dentalclaim"=>"","pharmacyclaim"=>"59585","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1228","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"July-13","medicalclaim"=>"569207","administrationfees"=>"53967","dentalclaim"=>"","pharmacyclaim"=>"23042","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1220","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"Aug-13","medicalclaim"=>"569207","administrationfees"=>"47137","dentalclaim"=>"","pharmacyclaim"=>"89236","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1221","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"Sep-13","medicalclaim"=>"569207","administrationfees"=>"54209","dentalclaim"=>"","pharmacyclaim"=>"12256","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1900","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"Oct-13","medicalclaim"=>"569207","administrationfees"=>"53218","dentalclaim"=>"","pharmacyclaim"=>"44456","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1300","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"Nov-13","medicalclaim"=>"569207","administrationfees"=>"52123","dentalclaim"=>"","pharmacyclaim"=>"42123","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1229","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"Dec-13","medicalclaim"=>"569207","administrationfees"=>"58425","dentalclaim"=>"","pharmacyclaim"=>"56101","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1227","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
      
   
    ];

function filterreaminder2($item) {
    $mailfilter = Yii::$app->request->getQueryParam('filteremail', '');
    if (strlen($mailfilter) > 0) {
        if (strpos($item['email'], $mailfilter) != false) {
            return true;
        } else {
            return false;
        }
    } else {
        return true;
    }
}

$filteredresultData = array_filter($resultData, 'filterreaminder2');


$mailfilter = Yii::$app->request->getQueryParam('filteremail', '');
$namefilter = Yii::$app->request->getQueryParam('filtername', '');

$searchModel = [ 'month' => $namefilter, 'medicalclaim' => $mailfilter];

$dataProvider = new ArrayDataProvider([
      //  'key'=>'id',
        'allModels' => $filteredresultData,
        'sort' => [
            'attributes' => [ 'month', 'medicalclaim'],
        ],
]);

$gridColumns = [
            ['class' => 'kartik\grid\SerialColumn'],
            

        [
            'attribute' => 'month', 
            'value' => 'month',
'label' => 'Month',
'width'=>'150px',
'noWrap'=>true,
'headerOptions' => ['class' => 'blue-grid-head'],
//'mergeHeader'=>true
            ],
            [
            "attribute" => "medicalclaim",
           // 'filter' => '<input class="form-control" name="filteremail" value="'. $searchModel['medicalclaim'] .'" type="text">',
            'value' => 'medicalclaim',
'label' => 'Net Medical Claim',
'width'=>'150px',
 'pageSummary' => true,
  'format' => ['currency', ''],
  'headerOptions' => ['class' => 'blue-grid-head'],
//'mergeHeader'=>true
            ],
			[
"attribute" => "pharmacyclaim",
'label' => 'Net Pharmacy Claim',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
'headerOptions' => ['class' => 'blue-grid-head'],
//'mergeHeader'=>true
],
[
"attribute" => "dentalclaim",
'label' => '',
'width'=>'150px',
'headerOptions' => ['class' => 'blue-grid-head'],
//'pageSummary' => true,
//'mergeHeader'=>true
],
 
[
"attribute" => "monthlymemberenrollment",
'label' => 'Member Enrollment',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
'headerOptions' => ['class' => 'blue-grid-head'],
//'mergeHeader'=>true
],
/*[
"attribute" => "monthlybudget",
'label' => 'Monthly Budget',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
//'mergeHeader'=>true
],*/



			];
								echo GridView::widget([
															'dataProvider' => $dataProvider,
														//	'filterModel' => $searchModel,
															'columns' => $gridColumns,
															'containerOptions' => ['style'=>'overflow: auto'], // only set when $responsive = false
														   /* 'beforeHeader'=>[
																[
																	'columns'=>[
																		['content'=>'Header Before 1', 'options'=>['colspan'=>4, 'class'=>'text-center warning']], 
																		['content'=>'Header Before 2', 'options'=>['colspan'=>4, 'class'=>'text-center warning']], 
																		['content'=>'Header Before 3', 'options'=>['colspan'=>3, 'class'=>'text-center warning']], 
																	],
																	'options'=>['class'=>'skip-export'] // remove this row from export
																]
															],*/
															'toolbar' =>  [
																/*
																'{export}',
																'{toggleData}'*/
															],
														'pjax' => true,
															'bordered' => true,
															'striped' => true,
															'condensed' => false,
															'responsive' => true,
															'hover' => true,
//'allowFilterSetting' => false,
//'mergeHeader'=>false,
														   // 'floatHeader' => true,
														   // 'floatHeaderOptions' => ['scrollingTop' => true],
															 'showPageSummary' => true,
															'panel' => [
															'heading'=>false,
																'type' => GridView::TYPE_PRIMARY,
																'footer' => false,
															],
														]);
															
															
															?>
									
								</div>
											
											<div class="col-md-12 padding-0  margin-bottom-15">
											<table class="table-line" style="width: 100%;">
											<tbody class="text-align-center">
											<tr bgcolor="#d56700">
												<td ><font color="white">Trend Assumptions</font></td>
												<td ><font color="white"><u>$257.15</u></font></td>
												<td ><font color="white"><u>$87.18</u></font></td>
												</tr>
											<tr bgcolor="#f6dfd5">
												<td>Trend Multiply Factor</td>
												<td >1.0641</td>
												<td >1.0734</td>
												
											</tr>
											<tr bgcolor="#c1a344">
												<td><font color="white">Trended Expected Claims / Enrollment</font></td>
												<td ><font color="white">$273.63</font></td>
												<td ><font color="white">$93.58</font></td>
												
											</tr>
											
											</tbody>
										</table>
											</div>
											
											</fieldset>
										</div>
					<div class="col-md-6">
										<fieldset>

												<legend>Experience Period #2</legend>
											<div class="col-md-12 padding-0  margin-bottom-15">
											<table class="table-line" style="width: 100%;">
											<tbody class="text-align-center">
											<tr>
												<td></td>
												<td bgcolor="#d56700"><u><font color="white">From</font></u></td>
												<td bgcolor="#d56700"><u><font color="white">To</font></u></td>
												<td bgcolor="#d56700"><u><font color="white">Period Mid-Point</font></u></td>
												<td bgcolor="#00bd00"><u><font color="white">Creditiblity %</font></u></td>
												<td bgcolor="#0048bd"><u><font color="white">Trend Months</font></u></td>
											</tr>
											<tr>
												<td>Projection Period</td>
												<td bgcolor="#f6dfd5">Sep-14</td>
												<td bgcolor="#f6dfd5">Dec-14</td>
												<td bgcolor="#f6dfd5">Oct-14</td>
												<td bgcolor="#0000"></td>
												<td bgcolor="#0000"></td>
											</tr>
											<tr>
												<td>Experience Period #1</td>
												<td bgcolor="#f6dfd5">Sep-13</td>
												<td bgcolor="#f6dfd5">Aug-14</td>
												<td bgcolor="#f6dfd5">Feb-14</td>
												<td bgcolor="#ddf8de">20%</td>
												<td bgcolor="#dde6f8">20.02</td>
											</tr>
											
											</tbody>
										</table>
											</div>
											
											<div class="col-md-6 padding-0  margin-bottom-15">
											<table class="table-line" style="width: 100%;">
											<tbody class="text-align-center">
											<tr>
												<td></td>
												<td bgcolor="#c1a344"><u><font color="white">Trend Assumptions</font></u></td>
												</tr>
											<tr>
												<td>Medical Claims</td>
												<td bgcolor="#f0e4c0">9.75%</td>
												
											</tr>
											<tr>
												<td>Pharmacy Claims</td>
												<td bgcolor="#f0e4c0">11.20%</td>
												
											</tr>
											
											</tbody>
										</table>
											</div>
											<div class="col-md-12 back-white padding-0">
									 

									<?php
$resultData = [
    array("month"=>"Jan-13","medicalclaim"=>"569207","administrationfees"=>"51698","dentalclaim"=>"","pharmacyclaim"=>"43367","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1221","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"Feb-13","medicalclaim"=>"569207","administrationfees"=>"50780","dentalclaim"=>"","pharmacyclaim"=>"44835","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1220","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"Mar-13","medicalclaim"=>"569207","administrationfees"=>"50523","dentalclaim"=>"","pharmacyclaim"=>"70704","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1222","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"Apr-13","medicalclaim"=>"569207","administrationfees"=>"50749","dentalclaim"=>"","pharmacyclaim"=>"60122","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1225","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"May-13","medicalclaim"=>"569207","administrationfees"=>"50709","dentalclaim"=>"","pharmacyclaim"=>"46032","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1224","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"June-13","medicalclaim"=>"569207","administrationfees"=>"54889","dentalclaim"=>"","pharmacyclaim"=>"59585","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1228","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"July-13","medicalclaim"=>"569207","administrationfees"=>"53967","dentalclaim"=>"","pharmacyclaim"=>"23042","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1220","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"Aug-13","medicalclaim"=>"569207","administrationfees"=>"47137","dentalclaim"=>"","pharmacyclaim"=>"89236","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1221","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"Sep-13","medicalclaim"=>"569207","administrationfees"=>"54209","dentalclaim"=>"","pharmacyclaim"=>"12256","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1900","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"Oct-13","medicalclaim"=>"569207","administrationfees"=>"53218","dentalclaim"=>"","pharmacyclaim"=>"44456","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1300","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"Nov-13","medicalclaim"=>"569207","administrationfees"=>"52123","dentalclaim"=>"","pharmacyclaim"=>"42123","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1229","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"Dec-13","medicalclaim"=>"569207","administrationfees"=>"58425","dentalclaim"=>"","pharmacyclaim"=>"56101","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1227","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
      
   
    ];

function filteremainder3($item) {
    $mailfilter = Yii::$app->request->getQueryParam('filteremail', '');
    if (strlen($mailfilter) > 0) {
        if (strpos($item['email'], $mailfilter) != false) {
            return true;
        } else {
            return false;
        }
    } else {
        return true;
    }
}

$filteredresultData = array_filter($resultData, 'filteremainder3');


$mailfilter = Yii::$app->request->getQueryParam('filteremail', '');
$namefilter = Yii::$app->request->getQueryParam('filtername', '');

$searchModel = [ 'month' => $namefilter, 'medicalclaim' => $mailfilter];

$dataProvider = new ArrayDataProvider([
      //  'key'=>'id',
        'allModels' => $filteredresultData,
        'sort' => [
            'attributes' => [ 'month', 'medicalclaim'],
        ],
]);

$gridColumns = [
            ['class' => 'kartik\grid\SerialColumn'],
            

        [
            'attribute' => 'month', 
            'value' => 'month',
'label' => 'Month',
'width'=>'150px',
'noWrap'=>true,
'headerOptions' => ['class' => 'blue-grid-head'],
//'mergeHeader'=>true
            ],
            [
            "attribute" => "medicalclaim",
           // 'filter' => '<input class="form-control" name="filteremail" value="'. $searchModel['medicalclaim'] .'" type="text">',
            'value' => 'medicalclaim',
'label' => 'Net Medical Claim',
'width'=>'150px',
 'pageSummary' => true,
  'format' => ['currency', ''],
  'headerOptions' => ['class' => 'blue-grid-head'],
//'mergeHeader'=>true
            ],
			[
"attribute" => "pharmacyclaim",
'label' => 'Net Pharmacy Claim',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
'headerOptions' => ['class' => 'blue-grid-head'],
//'mergeHeader'=>true
],
[
"attribute" => "dentalclaim",
'label' => '',
'width'=>'150px',
'headerOptions' => ['class' => 'blue-grid-head'],
//'pageSummary' => true,
//'mergeHeader'=>true
],

[
"attribute" => "monthlymemberenrollment",
'label' => 'Member Enrollment',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
'headerOptions' => ['class' => 'blue-grid-head'],
//'mergeHeader'=>true
],
/*[
"attribute" => "monthlybudget",
'label' => 'Monthly Budget',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
//'mergeHeader'=>true
],*/



			];
								echo GridView::widget([
															'dataProvider' => $dataProvider,
														//	'filterModel' => $searchModel,
															'columns' => $gridColumns,
															'containerOptions' => ['style'=>'overflow: auto'], // only set when $responsive = false
														   /* 'beforeHeader'=>[
																[
																	'columns'=>[
																		['content'=>'Header Before 1', 'options'=>['colspan'=>4, 'class'=>'text-center warning']], 
																		['content'=>'Header Before 2', 'options'=>['colspan'=>4, 'class'=>'text-center warning']], 
																		['content'=>'Header Before 3', 'options'=>['colspan'=>3, 'class'=>'text-center warning']], 
																	],
																	'options'=>['class'=>'skip-export'] // remove this row from export
																]
															],*/
															'toolbar' =>  [
																/*
																'{export}',
																'{toggleData}'*/
															],
														'pjax' => true,
															'bordered' => true,
															'striped' => true,
															'condensed' => false,
															'responsive' => true,
															'hover' => true,
//'allowFilterSetting' => false,
//'mergeHeader'=>false,
														   // 'floatHeader' => true,
														   // 'floatHeaderOptions' => ['scrollingTop' => true],
															 'showPageSummary' => true,
															'panel' => [
															'heading'=>false,
																'type' => GridView::TYPE_PRIMARY,
																'footer' => false,
															],
														]);
															
															
															?>
									
								</div>
								
								<div class="col-md-12 padding-0  margin-bottom-15">
											<table class="table-line" style="width: 100%;">
											<tbody class="text-align-center">
											<tr bgcolor="#d56700">
												<td ><font color="white">Trend Assumptions</font></td>
												<td ><font color="white"><u>$257.15</u></font></td>
												<td ><font color="white"><u>$87.18</u></font></td>
												</tr>
											<tr bgcolor="#f6dfd5">
												<td>Trend Multiply Factor</td>
												<td >1.0641</td>
												<td >1.0734</td>
												
											</tr>
											<tr bgcolor="#c1a344">
												<td><font color="white">Trended Expected Claims / Enrollment</font></td>
												<td ><font color="white">$273.63</font></td>
												<td ><font color="white">$93.58</font></td>
												
											</tr>
											
											</tbody>
										</table>
											</div>
											</fieldset>
										</div>
					
			
			</div>
			</div>
			</div>
</div>
											
								
								
							<div class="modal-footer col-md-12 footer-background">
							 
						</div>
						</div>
						
					</div>
					
				</div>		
		<!--end remiander year project report-->
		
		
					<!-- renewal project report --> 
				
<div class="modal fade" id="renewal_med_rx_modal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
				<div class="modal-dialog modal-lg">
					<div class="modal-content col-md-12 padding-0">
						<div class="modal-header modal-header-color">
							 
							<button type="button" class="close-modal modal-opacity close-modal-blue" data-dismiss="modal" aria-hidden="true">
								X
							</button>
							<h4 class="modal-title color-white col-md-5 padding-0" id="myModalLabel">
								Med Rx-Renewal Project Report
							</h4>
							
							<span class="modal-title color-white col-md-3 padding-5" id="myModalLabel">
							<span class="pdf-download">
  
  <i class="fa fa-file-pdf-o padding-5" style="font-size: 12px;"></i>
  
  <span class="padding-10" >Download Pdf</span> 
  <i class="fa fa-download padding-5 download-icon" ></i>
</span>
							</span>
							
							<span class="modal-title color-white col-md-1 padding-5 padding-left-0" id="myModalLabel">
							
  
  <i class="fa fa-print padding-5 padding-left-0" style="font-size: 24px;"></i>
  

							</span>
							
						</div>
						<div class="modal-body  col-md-12" style="max-height: 450px;overflow-y: scroll;">
						<div class="row">
		<div class="col-md-12 padding-bottom-15">
		<div class="col-md-12">
		<div class="col-md-4">
		<img class="img-responsive" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/images/logo/company-logo.png" alt="Export">
		</div>
		<div class="col-md-5">
		<span class="display-block engineer">ABC ENGINEERING</span>
		<span class=" left-head" style="font-size: 13px;"><b>Renewal Contract Year Financial Projection Report</b></span> |
		<span class=" left-head" style="font-size: 13px;"><b>Medicals Claims</b></span>
		</div>
  <div class="col-md-3" align="right">
		<img class="img-responsive" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/images/logo/benefits.png" alt="Export" style="  width: 200px;height: 38px;">

		</div>
		</div>
		</div>
		</div>
		

		
		 <div class="row">
				<div class="col-md-12 padding-bottom-10">
				<div class="col-md-12 border-ddd">
				 <div class="box-head-claim col-md-12"><u>2015 Plan Year Renewal Projection</u></div>
					<div class="col-md-12">
										 <fieldset>
								 
									<legend>Experience Period #1</legend>
											<div class="col-md-12 padding-0  margin-bottom-15">
											<table class="table-line" style="width: 100%;">
											<tbody class="text-align-center">
										
											<tr>
												<td>Projected Employee Enrollment</td>
												<td>1,204	</td>
												<td>Assumed most recent enrollment month</td>
												
											</tr>
											<tr>
											<td>Projected Member Enrollment</td>
												<td>2223	</td>
												<td>Assumed most recent enrollment month</td>
											</tr>
											
											</tbody>
										</table>
											</div>
									 
										</fieldset>
					<!--	<div class="widget back-widget box-shadow widget-six">
							<div class="widget-header">

								<strong class="margin-right-10">Total Paid Plan Claims By Month (Actual & Projected)</strong>
								
							</div>

							<br />
							<div class="margin-bottom-50">
							<div id="paid_plan_claims" style="min-width: 310px; height: 300px; margin: 0 auto"></div>
							
							</div>
						</div>-->
					</div>
				<div class="col-md-12">
										 <fieldset>
								 
									<legend>Fixed Cost Items</legend>
											<div class="col-md-12 padding-0  margin-bottom-15">
											<table class="table-line" style="width: 100%;">
											<tbody class="text-align-center">
										
											<tr>
												<td>Administration Fees		</td>
												<td>637,975		</td>
												<td>Assume 4% increase over current contract year, based upon most recent month fees.</td>
												
											</tr>
											<tr>
											<td>Reinsurance Premiums			</td>
												<td>84,2223	</td>
												<td>Assume 20% increase over current contract year, based upon most recent month fees.</td>
											</tr>
											<tr>
											<td><u><b>Total</b></u>		</td>
												<td><b>1,52,2223</b>	</td>
												<td> </td>
											</tr>
											
											</tbody>
										</table>
											</div>
									 
										</fieldset>
			 
					</div>
						
				<div class="col-md-12">
										 <fieldset>
								 
									<legend>Claim Cost Items</legend>
											<div class="col-md-12 padding-0  margin-bottom-15">
											<table class="table-line" style="width: 100%;">
											<tbody class="text-align-center">
										
											<tr>
												<td>Net Medical Claims		</td>
												<td>7,992,717					</td>
											 	
											</tr>
											<tr>
											<td>Net Pharmacy Claims				</td>
												<td>2,277,771		</td>
										 	</tr>
											<tr>
											<td><u><b>Total</b></u>		</td>
												<td><b>10,270,488	</b>	</td>
												 
											</tr>
											
											</tbody>
										</table>
											</div>
									 
										</fieldset>
			 
					</div>
						
					</div>
				</div>
			</div>
			
			 <div class="row">
			 <div class="col-md-12 padding-bottom-10">
				<div class="col-md-12 border-ddd">
				 <div class="box-head-claim col-md-12"><u>Total Overall Plan Cost Projection</u></div>
					<div class="col-md-12">
										 <fieldset>
										 <legend>Cost Projection</legend>
										 
										 <div class="col-md-12 padding-0  margin-bottom-15">
											<table class="table-line" style="width: 100%;">
											<tbody class="text-align-center">
										
											<tr>
												<td><u><b>Projected Annual Total	</b></u>	</td>
												<td>$11,792,849						</td>
											 	
											</tr>
											<tr>
											<td><u><b>Net Pharmacy Claims</b></u>				</td>
												<td>$816.23			</td>
										 	</tr>
											<tr>
											<td><u><b>Total</b></u>		</td>
												<td><b>$442.08		</b>	</td>
												 
											</tr>
											
											</tbody>
										</table>
											</div>
										 </fieldset>
										 </div>
										 </div>
										 </div>
										 </div>
		
		
		
		
	
		
		<div class="row">
			<div class="col-md-12 padding-bottom-10" >
			<div class="col-md-12  padding-10 border-ddd">
			<div class="box-head-claim">Plan Year Financials (YTD)</div>
			
			
									<?php
$resultData = [
    array("month"=>"Jan-13","medicalclaim"=>"569207","administrationfees"=>"51698","dentalclaim"=>"","pharmacyclaim"=>"43367","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1221","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"Feb-13","medicalclaim"=>"569207","administrationfees"=>"50780","dentalclaim"=>"","pharmacyclaim"=>"44835","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1220","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"Mar-13","medicalclaim"=>"569207","administrationfees"=>"50523","dentalclaim"=>"","pharmacyclaim"=>"70704","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1222","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"Apr-13","medicalclaim"=>"569207","administrationfees"=>"50749","dentalclaim"=>"","pharmacyclaim"=>"60122","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1225","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"May-13","medicalclaim"=>"569207","administrationfees"=>"50709","dentalclaim"=>"","pharmacyclaim"=>"46032","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1224","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"June-13","medicalclaim"=>"569207","administrationfees"=>"54889","dentalclaim"=>"","pharmacyclaim"=>"59585","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1228","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"July-13","medicalclaim"=>"569207","administrationfees"=>"53967","dentalclaim"=>"","pharmacyclaim"=>"23042","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1220","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"Aug-13","medicalclaim"=>"569207","administrationfees"=>"47137","dentalclaim"=>"","pharmacyclaim"=>"89236","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1221","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"Sep-13","medicalclaim"=>"569207","administrationfees"=>"54209","dentalclaim"=>"","pharmacyclaim"=>"12256","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1900","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"Oct-13","medicalclaim"=>"569207","administrationfees"=>"53218","dentalclaim"=>"","pharmacyclaim"=>"44456","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1300","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"Nov-13","medicalclaim"=>"569207","administrationfees"=>"52123","dentalclaim"=>"","pharmacyclaim"=>"42123","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1229","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"Dec-13","medicalclaim"=>"569207","administrationfees"=>"58425","dentalclaim"=>"","pharmacyclaim"=>"56101","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1227","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
      
   
    ];

function filterrenewal1($item) {
    $mailfilter = Yii::$app->request->getQueryParam('filteremail', '');
    if (strlen($mailfilter) > 0) {
        if (strpos($item['email'], $mailfilter) != false) {
            return true;
        } else {
            return false;
        }
    } else {
        return true;
    }
}

$filteredresultData = array_filter($resultData, 'filterrenewal1');


$mailfilter = Yii::$app->request->getQueryParam('filteremail', '');
$namefilter = Yii::$app->request->getQueryParam('filtername', '');

$searchModel = [ 'month' => $namefilter, 'medicalclaim' => $mailfilter];

$dataProvider = new ArrayDataProvider([
      //  'key'=>'id',
        'allModels' => $filteredresultData,
        'sort' => [
            'attributes' => [ 'month', 'medicalclaim'],
        ],
]);

$gridColumns = [
            ['class' => 'kartik\grid\SerialColumn'],
            

        [
            'attribute' => 'month', 
            'value' => 'month',
'label' => 'Month',
'width'=>'150px',
'noWrap'=>true,
'headerOptions' => ['class' => 'blue-grid-head'],
//'mergeHeader'=>true
            ],
            [
            "attribute" => "medicalclaim",
           // 'filter' => '<input class="form-control" name="filteremail" value="'. $searchModel['medicalclaim'] .'" type="text">',
            'value' => 'medicalclaim',
'label' => 'Net Medical Claim',
'width'=>'150px',
 'pageSummary' => true,
  'format' => ['currency', ''],
  'headerOptions' => ['class' => 'blue-grid-head'],
//'mergeHeader'=>true
            ],
			[
"attribute" => "pharmacyclaim",
'label' => 'Net Pharmacy Claim',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
'headerOptions' => ['class' => 'blue-grid-head'],
//'mergeHeader'=>true
],
[
"attribute" => "dentalclaim",
'label' => '',
'width'=>'150px',
'headerOptions' => ['class' => 'blue-grid-head'],
//'pageSummary' => true,
//'mergeHeader'=>true
],
[
"attribute" => "netclaim",
'label' => 'Total Monthly Net Claims',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
'headerOptions' => ['class' => 'blue-grid-head'],
//'mergeHeader'=>true
],
[
"attribute" => "administrationfees",
'label' => 'Administration Fees',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
'headerOptions' => ['class' => 'blue-grid-head'],
//'pageSummary'=>true,
//'mergeHeader'=>true
],



[
"attribute" => "reinsurancepremiums",
'label' => 'Reinsurance Premiums',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
'headerOptions' => ['class' => 'blue-grid-head'],
//'mergeHeader'=>true
],


[
"attribute" => "expectedclaims",
'label' => 'Total Monthly Plan Costs',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
'headerOptions' => ['class' => 'blue-grid-head'],
//'mergeHeader'=>true
],
[
"attribute" => "monthlyenrollment",
'label' => 'Monthly Employee Enrollment',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
'headerOptions' => ['class' => 'blue-grid-head'],
//'mergeHeader'=>true
],
[
"attribute" => "monthlymemberenrollment",
'label' => 'Monthly Member Enrollment',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
'headerOptions' => ['class' => 'blue-grid-head'],
//'mergeHeader'=>true
],
/*[
"attribute" => "monthlybudget",
'label' => 'Monthly Budget',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
//'mergeHeader'=>true
//*],*/



			];
								echo GridView::widget([
															'dataProvider' => $dataProvider,
														//	'filterModel' => $searchModel,
															'columns' => $gridColumns,
															'containerOptions' => ['style'=>'overflow: auto'], // only set when $responsive = false
														   /* 'beforeHeader'=>[
																[
																	'columns'=>[
																		['content'=>'Header Before 1', 'options'=>['colspan'=>4, 'class'=>'text-center warning']], 
																		['content'=>'Header Before 2', 'options'=>['colspan'=>4, 'class'=>'text-center warning']], 
																		['content'=>'Header Before 3', 'options'=>['colspan'=>3, 'class'=>'text-center warning']], 
																	],
																	'options'=>['class'=>'skip-export'] // remove this row from export
																]
															],*/
															'toolbar' =>  [
																/*
																'{export}',
																'{toggleData}'*/
															],
															'pjax' => true,
															'bordered' => true,
															'striped' => true,
															'condensed' => false,
															'responsive' => true,
															'hover' => true,
//'allowFilterSetting' => false,
//'mergeHeader'=>false,
														   // 'floatHeader' => true,
														   // 'floatHeaderOptions' => ['scrollingTop' => true],
															 'showPageSummary' => true,
															'panel' => [
															'heading'=>false,
																'type' => GridView::TYPE_PRIMARY,
																'footer' => false,
															],
														]);
															
															
															?>
															
															
	 </div>
				</div> 
			</div>
		
		
		<div class="row">
			<div class="col-md-12 padding-bottom-10">
			<div class="col-md-12  padding-10 border-ddd">
			
					 <div class="box-head-claim col-md-12 margin-left-0">Underwriting Assumptions</div>
				<div class="col-md-6   ">
										<fieldset>

												<legend>Experience Period #1</legend>
											<div class="col-md-12 padding-0  margin-bottom-15">
											<table class="table-line" style="width: 100%;">
											<tbody class="text-align-center">
											<tr>
												<td></td>
												<td bgcolor="#d56700"><u><font color="white">From</font></u></td>
												<td bgcolor="#d56700"><u><font color="white">To</font></u></td>
												<td bgcolor="#d56700"><u><font color="white">Period Mid-Point</font></u></td>
												<td bgcolor="#00bd00"><u><font color="white">Creditiblity %</font></u></td>
												<td bgcolor="#0048bd"><u><font color="white">Trend Months</font></u></td>
											</tr>
											<tr>
												<td>Projection Period</td>
												<td bgcolor="#f6dfd5">Sep-14</td>
												<td bgcolor="#f6dfd5">Dec-14</td>
												<td bgcolor="#f6dfd5">Oct-14</td>
												<td bgcolor="#0000"></td>
												<td bgcolor="#0000"></td>
											</tr>
											<tr>
												<td>Experience Period #1</td>
												<td bgcolor="#f6dfd5">Sep-13</td>
												<td bgcolor="#f6dfd5">Aug-14</td>
												<td bgcolor="#f6dfd5">Feb-14</td>
												<td bgcolor="#ddf8de">80%</td>
												<td bgcolor="#dde6f8">8.01</td>
											</tr>
											
											</tbody>
										</table>
											</div>
											
											<div class="col-md-6 padding-0  margin-bottom-15">
											<table class="table-line" style="width: 100%;">
											<tbody class="text-align-center">
											<tr>
												<td></td>
												<td bgcolor="#c1a344"><u><font color="white">Trend Assumptions</font></u></td>
												</tr>
											<tr>
												<td>Medical Claims</td>
												<td bgcolor="#f0e4c0">9.75%</td>
												
											</tr>
											<tr>
												<td>Pharmacy Claims</td>
												<td bgcolor="#f0e4c0">11.20%</td>
												
											</tr>
											
											</tbody>
										</table>
											</div>
											
											<div class="col-md-12 back-white padding-0">
									 

									<?php
$resultData = [
    array("month"=>"Jan-13","medicalclaim"=>"569207","administrationfees"=>"51698","dentalclaim"=>"","pharmacyclaim"=>"43367","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1221","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"Feb-13","medicalclaim"=>"569207","administrationfees"=>"50780","dentalclaim"=>"","pharmacyclaim"=>"44835","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1220","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"Mar-13","medicalclaim"=>"569207","administrationfees"=>"50523","dentalclaim"=>"","pharmacyclaim"=>"70704","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1222","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"Apr-13","medicalclaim"=>"569207","administrationfees"=>"50749","dentalclaim"=>"","pharmacyclaim"=>"60122","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1225","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"May-13","medicalclaim"=>"569207","administrationfees"=>"50709","dentalclaim"=>"","pharmacyclaim"=>"46032","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1224","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"June-13","medicalclaim"=>"569207","administrationfees"=>"54889","dentalclaim"=>"","pharmacyclaim"=>"59585","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1228","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"July-13","medicalclaim"=>"569207","administrationfees"=>"53967","dentalclaim"=>"","pharmacyclaim"=>"23042","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1220","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"Aug-13","medicalclaim"=>"569207","administrationfees"=>"47137","dentalclaim"=>"","pharmacyclaim"=>"89236","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1221","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"Sep-13","medicalclaim"=>"569207","administrationfees"=>"54209","dentalclaim"=>"","pharmacyclaim"=>"12256","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1900","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"Oct-13","medicalclaim"=>"569207","administrationfees"=>"53218","dentalclaim"=>"","pharmacyclaim"=>"44456","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1300","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"Nov-13","medicalclaim"=>"569207","administrationfees"=>"52123","dentalclaim"=>"","pharmacyclaim"=>"42123","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1229","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"Dec-13","medicalclaim"=>"569207","administrationfees"=>"58425","dentalclaim"=>"","pharmacyclaim"=>"56101","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1227","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
      
   
    ];

function filterrenewal2($item) {
    $mailfilter = Yii::$app->request->getQueryParam('filteremail', '');
    if (strlen($mailfilter) > 0) {
        if (strpos($item['email'], $mailfilter) != false) {
            return true;
        } else {
            return false;
        }
    } else {
        return true;
    }
}

$filteredresultData = array_filter($resultData, 'filterrenewal2');


$mailfilter = Yii::$app->request->getQueryParam('filteremail', '');
$namefilter = Yii::$app->request->getQueryParam('filtername', '');

$searchModel = [ 'month' => $namefilter, 'medicalclaim' => $mailfilter];

$dataProvider = new ArrayDataProvider([
      //  'key'=>'id',
        'allModels' => $filteredresultData,
        'sort' => [
            'attributes' => [ 'month', 'medicalclaim'],
        ],
]);

$gridColumns = [
            ['class' => 'kartik\grid\SerialColumn'],
            

        [
            'attribute' => 'month', 
            'value' => 'month',
'label' => 'Month',
'width'=>'150px',
'noWrap'=>true,
'headerOptions' => ['class' => 'blue-grid-head'],
//'mergeHeader'=>true
            ],
            [
            "attribute" => "medicalclaim",
           // 'filter' => '<input class="form-control" name="filteremail" value="'. $searchModel['medicalclaim'] .'" type="text">',
            'value' => 'medicalclaim',
'label' => 'Net Medical Claim',
'width'=>'150px',
 'pageSummary' => true,
  'format' => ['currency', ''],
  'headerOptions' => ['class' => 'blue-grid-head'],
//'mergeHeader'=>true
            ],
			[
"attribute" => "pharmacyclaim",
'label' => 'Net Pharmacy Claim',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
'headerOptions' => ['class' => 'blue-grid-head'],
//'mergeHeader'=>true
],
[
"attribute" => "dentalclaim",
'label' => '',
'width'=>'150px',
'headerOptions' => ['class' => 'blue-grid-head'],
//'pageSummary' => true,
//'mergeHeader'=>true
],
 
[
"attribute" => "monthlymemberenrollment",
'label' => 'Member Enrollment',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
'headerOptions' => ['class' => 'blue-grid-head'],
//'mergeHeader'=>true
],
/*[
"attribute" => "monthlybudget",
'label' => 'Monthly Budget',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
//'mergeHeader'=>true
],*/



			];
								echo GridView::widget([
															'dataProvider' => $dataProvider,
														//	'filterModel' => $searchModel,
															'columns' => $gridColumns,
															'containerOptions' => ['style'=>'overflow: auto'], // only set when $responsive = false
														   /* 'beforeHeader'=>[
																[
																	'columns'=>[
																		['content'=>'Header Before 1', 'options'=>['colspan'=>4, 'class'=>'text-center warning']], 
																		['content'=>'Header Before 2', 'options'=>['colspan'=>4, 'class'=>'text-center warning']], 
																		['content'=>'Header Before 3', 'options'=>['colspan'=>3, 'class'=>'text-center warning']], 
																	],
																	'options'=>['class'=>'skip-export'] // remove this row from export
																]
															],*/
															'toolbar' =>  [
																/*
																'{export}',
																'{toggleData}'*/
															],
														'pjax' => true,
															'bordered' => true,
															'striped' => true,
															'condensed' => false,
															'responsive' => true,
															'hover' => true,
//'allowFilterSetting' => false,
//'mergeHeader'=>false,
														   // 'floatHeader' => true,
														   // 'floatHeaderOptions' => ['scrollingTop' => true],
															 'showPageSummary' => true,
															'panel' => [
															'heading'=>false,
																'type' => GridView::TYPE_PRIMARY,
																'footer' => false,
															],
														]);
															
															
															?>
									
								</div>
											
											<div class="col-md-12 padding-0  margin-bottom-15">
											<table class="table-line" style="width: 100%;">
											<tbody class="text-align-center">
											<tr bgcolor="#d56700">
												<td ><font color="white">Trend Assumptions</font></td>
												<td ><font color="white"><u>$257.15</u></font></td>
												<td ><font color="white"><u>$87.18</u></font></td>
												</tr>
											<tr bgcolor="#f6dfd5">
												<td>Trend Multiply Factor</td>
												<td >1.0641</td>
												<td >1.0734</td>
												
											</tr>
											<tr bgcolor="#c1a344">
												<td><font color="white">Trended Expected Claims / Enrollment</font></td>
												<td ><font color="white">$273.63</font></td>
												<td ><font color="white">$93.58</font></td>
												
											</tr>
											
											</tbody>
										</table>
											</div>
											
											</fieldset>
										</div>
					<div class="col-md-6">
										<fieldset>

												<legend>Experience Period #2</legend>
											<div class="col-md-12 padding-0  margin-bottom-15">
											<table class="table-line" style="width: 100%;">
											<tbody class="text-align-center">
											<tr>
												<td></td>
												<td bgcolor="#d56700"><u><font color="white">From</font></u></td>
												<td bgcolor="#d56700"><u><font color="white">To</font></u></td>
												<td bgcolor="#d56700"><u><font color="white">Period Mid-Point</font></u></td>
												<td bgcolor="#00bd00"><u><font color="white">Creditiblity %</font></u></td>
												<td bgcolor="#0048bd"><u><font color="white">Trend Months</font></u></td>
											</tr>
											<tr>
												<td>Projection Period</td>
												<td bgcolor="#f6dfd5">Sep-14</td>
												<td bgcolor="#f6dfd5">Dec-14</td>
												<td bgcolor="#f6dfd5">Oct-14</td>
												<td bgcolor="#0000"></td>
												<td bgcolor="#0000"></td>
											</tr>
											<tr>
												<td>Experience Period #1</td>
												<td bgcolor="#f6dfd5">Sep-13</td>
												<td bgcolor="#f6dfd5">Aug-14</td>
												<td bgcolor="#f6dfd5">Feb-14</td>
												<td bgcolor="#ddf8de">20%</td>
												<td bgcolor="#dde6f8">20.02</td>
											</tr>
											
											</tbody>
										</table>
											</div>
											
											<div class="col-md-6 padding-0  margin-bottom-15">
											<table class="table-line" style="width: 100%;">
											<tbody class="text-align-center">
											<tr>
												<td></td>
												<td bgcolor="#c1a344"><u><font color="white">Trend Assumptions</font></u></td>
												</tr>
											<tr>
												<td>Medical Claims</td>
												<td bgcolor="#f0e4c0">9.75%</td>
												
											</tr>
											<tr>
												<td>Pharmacy Claims</td>
												<td bgcolor="#f0e4c0">11.20%</td>
												
											</tr>
											
											</tbody>
										</table>
											</div>
											<div class="col-md-12 back-white padding-0">
									 

									<?php
$resultData = [
    array("month"=>"Jan-13","medicalclaim"=>"569207","administrationfees"=>"51698","dentalclaim"=>"","pharmacyclaim"=>"43367","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1221","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"Feb-13","medicalclaim"=>"569207","administrationfees"=>"50780","dentalclaim"=>"","pharmacyclaim"=>"44835","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1220","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"Mar-13","medicalclaim"=>"569207","administrationfees"=>"50523","dentalclaim"=>"","pharmacyclaim"=>"70704","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1222","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"Apr-13","medicalclaim"=>"569207","administrationfees"=>"50749","dentalclaim"=>"","pharmacyclaim"=>"60122","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1225","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"May-13","medicalclaim"=>"569207","administrationfees"=>"50709","dentalclaim"=>"","pharmacyclaim"=>"46032","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1224","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"June-13","medicalclaim"=>"569207","administrationfees"=>"54889","dentalclaim"=>"","pharmacyclaim"=>"59585","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1228","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"July-13","medicalclaim"=>"569207","administrationfees"=>"53967","dentalclaim"=>"","pharmacyclaim"=>"23042","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1220","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"Aug-13","medicalclaim"=>"569207","administrationfees"=>"47137","dentalclaim"=>"","pharmacyclaim"=>"89236","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1221","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"Sep-13","medicalclaim"=>"569207","administrationfees"=>"54209","dentalclaim"=>"","pharmacyclaim"=>"12256","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1900","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"Oct-13","medicalclaim"=>"569207","administrationfees"=>"53218","dentalclaim"=>"","pharmacyclaim"=>"44456","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1300","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"Nov-13","medicalclaim"=>"569207","administrationfees"=>"52123","dentalclaim"=>"","pharmacyclaim"=>"42123","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1229","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
    array("month"=>"Dec-13","medicalclaim"=>"569207","administrationfees"=>"58425","dentalclaim"=>"","pharmacyclaim"=>"56101","netclaim"=>"565573","reinsurancepremiums"=>"2290","expectedclaims"=>"615000","monthlyenrollment"=>"1227","monthlymemberenrollment"=>"2228","monthlybudget"=>"725000","24monthtrend"=>"-2.4%"),
      
   
    ];

function filterenewal3($item) {
    $mailfilter = Yii::$app->request->getQueryParam('filteremail', '');
    if (strlen($mailfilter) > 0) {
        if (strpos($item['email'], $mailfilter) != false) {
            return true;
        } else {
            return false;
        }
    } else {
        return true;
    }
}

$filteredresultData = array_filter($resultData, 'filterenewal3');


$mailfilter = Yii::$app->request->getQueryParam('filteremail', '');
$namefilter = Yii::$app->request->getQueryParam('filtername', '');

$searchModel = [ 'month' => $namefilter, 'medicalclaim' => $mailfilter];

$dataProvider = new ArrayDataProvider([
      //  'key'=>'id',
        'allModels' => $filteredresultData,
        'sort' => [
            'attributes' => [ 'month', 'medicalclaim'],
        ],
]);

$gridColumns = [
            ['class' => 'kartik\grid\SerialColumn'],
            

        [
            'attribute' => 'month', 
            'value' => 'month',
'label' => 'Month',
'width'=>'150px',
'noWrap'=>true,
'headerOptions' => ['class' => 'blue-grid-head'],
//'mergeHeader'=>true
            ],
            [
            "attribute" => "medicalclaim",
           // 'filter' => '<input class="form-control" name="filteremail" value="'. $searchModel['medicalclaim'] .'" type="text">',
            'value' => 'medicalclaim',
'label' => 'Net Medical Claim',
'width'=>'150px',
 'pageSummary' => true,
  'format' => ['currency', ''],
  'headerOptions' => ['class' => 'blue-grid-head'],
//'mergeHeader'=>true
            ],
			[
"attribute" => "pharmacyclaim",
'label' => 'Net Pharmacy Claim',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
'headerOptions' => ['class' => 'blue-grid-head'],
//'mergeHeader'=>true
],
[
"attribute" => "dentalclaim",
'label' => '',
'width'=>'150px',
'headerOptions' => ['class' => 'blue-grid-head'],
//'pageSummary' => true,
//'mergeHeader'=>true
],

[
"attribute" => "monthlymemberenrollment",
'label' => 'Member Enrollment',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
'headerOptions' => ['class' => 'blue-grid-head'],
//'mergeHeader'=>true
],
/*[
"attribute" => "monthlybudget",
'label' => 'Monthly Budget',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
//'mergeHeader'=>true
],*/



			];
								echo GridView::widget([
															'dataProvider' => $dataProvider,
														//	'filterModel' => $searchModel,
															'columns' => $gridColumns,
															'containerOptions' => ['style'=>'overflow: auto'], // only set when $responsive = false
														   /* 'beforeHeader'=>[
																[
																	'columns'=>[
																		['content'=>'Header Before 1', 'options'=>['colspan'=>4, 'class'=>'text-center warning']], 
																		['content'=>'Header Before 2', 'options'=>['colspan'=>4, 'class'=>'text-center warning']], 
																		['content'=>'Header Before 3', 'options'=>['colspan'=>3, 'class'=>'text-center warning']], 
																	],
																	'options'=>['class'=>'skip-export'] // remove this row from export
																]
															],*/
															'toolbar' =>  [
																/*
																'{export}',
																'{toggleData}'*/
															],
														'pjax' => true,
															'bordered' => true,
															'striped' => true,
															'condensed' => false,
															'responsive' => true,
															'hover' => true,
//'allowFilterSetting' => false,
//'mergeHeader'=>false,
														   // 'floatHeader' => true,
														   // 'floatHeaderOptions' => ['scrollingTop' => true],
															 'showPageSummary' => true,
															'panel' => [
															'heading'=>false,
																'type' => GridView::TYPE_PRIMARY,
																'footer' => false,
															],
														]);
															
															
															?>
									
								</div>
								
								<div class="col-md-12 padding-0  margin-bottom-15">
											<table class="table-line" style="width: 100%;">
											<tbody class="text-align-center">
											<tr bgcolor="#d56700">
												<td ><font color="white">Trend Assumptions</font></td>
												<td ><font color="white"><u>$257.15</u></font></td>
												<td ><font color="white"><u>$87.18</u></font></td>
												</tr>
											<tr bgcolor="#f6dfd5">
												<td>Trend Multiply Factor</td>
												<td >1.0641</td>
												<td >1.0734</td>
												
											</tr>
											<tr bgcolor="#c1a344">
												<td><font color="white">Trended Expected Claims / Enrollment</font></td>
												<td ><font color="white">$273.63</font></td>
												<td ><font color="white">$93.58</font></td>
												
											</tr>
											
											</tbody>
										</table>
											</div>
											</fieldset>
										</div>
					
			
			</div>
			</div>
			</div>

		<div class="row">
			<div class="col-md-12 ">
			<div class="col-md-12  padding-10 border-ddd">

				 <div class="box-head-claim col-md-12 margin-left-0">COBRA Rate Calculator</div>
				<div class="col-md-12">
										<fieldset>

												<legend> Plan 1</legend>
											<div class="col-md-12 padding-0  margin-bottom-15">
											<table class="table-line" style="width: 100%;">
											<tbody class="text-align-center">
												<tr>
												<td></td>
												 
												<td>Current Year Rates</td>
												<td>Current Enrollment</td>
												<td>Rate Slope</td>
												 <td>Cobra Rates</td>
											</tr>
											<tr>
												<td>Employee Only</td>
												<td>514.94</td>
												<td>500</td>
												<td>1.0000</td> 
												<td>$561.00</td> 
											</tr>
											<tr>
												<td>Employee Only</td>
												<td>514.94</td>
												<td>500</td>
												<td>1.0000</td> 
												<td>$1122.00</td> 
											</tr>
											<tr>
												<td>Employee Only</td>
												<td>514.94</td>
												<td>500</td>
												<td>1.0000</td> 
												<td>$561.00</td> 
											</tr>
											<tr>
												<td>Employee Only</td>
												<td>514.94</td>
												<td>500</td>
												<td>1.0000</td> 
												<td>$1561.00</td> 
											</tr>
											
											</tbody>
										</table>
											</div>
											
											
											
									
											
										
											</fieldset>
										</div>
					<div class="col-md-12">
										<fieldset>

												<legend>Plan 2</legend>
											<div class="col-md-12 padding-0  margin-bottom-15">
											<table class="table-line" style="width: 100%;">
											<tbody class="text-align-center">
											<tr>
												<td></td>
												 
												<td>Current Year Rates</td>
												<td>Current Enrollment</td>
												<td>Rate Slope</td>
												 <td>Cobra Rates</td>
											</tr>
											<tr>
												<td>Employee Only</td>
												<td>514.94</td>
												<td>500</td>
												<td>1.0000</td> 
												<td>$561.00</td> 
											</tr>
											<tr>
												<td>Employee Only</td>
												<td>514.94</td>
												<td>500</td>
												<td>1.0000</td> 
												<td>$1122.00</td> 
											</tr>
											<tr>
												<td>Employee Only</td>
												<td>514.94</td>
												<td>500</td>
												<td>1.0000</td> 
												<td>$561.00</td> 
											</tr>
											<tr>
												<td>Employee Only</td>
												<td>514.94</td>
												<td>500</td>
												<td>1.0000</td> 
												<td>$1561.00</td> 
											</tr>
											
											</tbody>
										</table>
											</div>
											
											</fieldset>
										</div>
										
			</div>
			</div>
			</div>
			</div>
											
								
								
							<div class="modal-footer col-md-12 footer-background">
							 
						 
						</div>
						</div>
						
					</div>
					
				</div>		
		<!--end remiander year project report-->
		
		
					<!---start stop loss modal-->
<div class="modal fade" id="stop_loss_modal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
				<div class="modal-dialog modal-lg">
					<div class="modal-content col-md-12 padding-0">
						<div class="modal-header modal-header-color">
							 
							<button type="button" class="close-modal modal-opacity close-modal-blue" data-dismiss="modal" aria-hidden="true">
								X
							</button>
							<h4 class="modal-title color-white col-md-5 padding-0" id="myModalLabel">
								Plan Year Claim Report
							</h4>
							
							<span class="modal-title color-white col-md-3 padding-5" id="myModalLabel">
							<span class="pdf-download">
  
  <i class="fa fa-file-pdf-o padding-5" style="font-size: 12px;"></i>
  
  <span class="padding-10" >Download Pdf</span> 
  <i class="fa fa-download padding-5 download-icon" ></i>
</span>
							</span>
							
							<span class="modal-title color-white col-md-1 padding-5 padding-left-0" id="myModalLabel">
							
  
  <i class="fa fa-print padding-5 padding-left-0" style="font-size: 24px;"></i>
  

							</span>
							
						</div>
						<div class="modal-body  col-md-12" style="max-height: 450px;overflow-y: scroll;">
						<div class="row">
		<div class="col-md-12 padding-bottom-15">
		<div class="col-md-12">
		<div class="col-md-4">
		<img class="img-responsive" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/images/logo/company-logo.png" alt="Export">
		</div>
		<div class="col-md-5">
		<span class="display-block engineer">ABC ENGINEERING</span>
		<span class=" left-head" style="font-size: 13px;"><b>Plan Year Claim Report</b></span> |
		<span class=" left-head" style="font-size: 13px;"><b>Medical & Pharmacy Plan</b></span>
		</div>
  <div class="col-md-3" align="right">
		<img class="img-responsive" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/images/logo/benefits.png" alt="Export" style="  width: 200px;height: 38px;">

		</div>
		</div>
		</div>
		</div>
		
		
		<div class="row">
			<div class="col-md-12 padding-bottom-10">
		<div class="col-md-12 box-body padding-10 border-ddd">
			<p>
							
The stop loss deductible level analyzer (By Contract Year) is designed to assist clients in determining the most efficient deductible based upon prior year large claim experience.  We begin by taking the prior year large claims and trending them forward to the renewal plan year period of time.  The analyzer then evaluates how each proposed specific deductible level would have performed with the various year claims patterns.
</p>


<p>The goal in purchasing specific reinsurance is to minimize the total payments by the client of specific reinsurance premiums plus paid claims.  By evaluating how each deductible level performed historically, it can be helpful in choosing this level.</p>
<p>The most efficient deductible level graphed above is typically the colored line with the lowest+smoothest line.  Lowest line would mean the combined costs were the lowest, while evaluating the smoothness of the line you can gain an understanding of the volatility from year to year of each deductible level. </p>
<p>At times the graph above will not be fully conclusive, while at other times the decision will be very clear.  Simply use the graph above along with your understanding of the current health of your covered population to predict and thus choose your most efficient level.</p>

		</div>
		</div>
		</div>
		
		<div class="row">
		<div class="col-md-12 padding-bottom-10">
		<div class="col-md-12 padding-10 border-ddd">
	<div class="col-md-6 padding-left-0">
	<div class="col-md-12 border-ddd padding-10">
							<div class="widget-header">
								<strong class="margin-right-10">Stop Loss Deductible Level Analyzer, By Contract Year</strong>
							</div>
							<div>
							<div id="stop_loss_analyser" style="min-width: 310px; height: 300px; margin: 0 auto"></div>
							
							</div>
	</div>
	</div>
						
	<div class="col-md-6 padding-right-0">
						<div class="col-md-12 border-ddd padding-10">
	<table class="table-line" style="width: 100%">
										<thead class="background-blue">

											<tr>

												<th class="text-align-center">Specific Deductible Level</th>
												<th class="text-align-center">100,000 ($)</th>
												<th class="text-align-center">125,000 ($)</th>
												<th class="text-align-center">150,000 ($)</th>
												<th class="text-align-center">175,000 ($)</th>
												<th class="text-align-center">200,000 ($)</th>
												
											</tr>
										</thead>

										<tbody class="text-align-center">
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Average Paid Claims</td>
												<td>1,773,665</td>
												<td>1,770,321</td>
												<td>1,741,998</td>
												<td>1,779,155</td>
												<td>1,775,321</td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Median Paid Claims</td>
												<td>1,773,665</td>
												<td>1,770,321</td>
												<td>1,741,998</td>
												<td>1,779,155</td>
												<td>1,775,321</td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Largest Claim Year</td>
												<td>1,773,665</td>
												<td>1,770,321</td>
												<td>1,741,998</td>
												<td>1,779,155</td>
												<td>1,775,321</td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Smallest Claim Year</td>
												<td>1,773,665</td>
												<td>1,770,321</td>
												<td>1,741,998</td>
												<td>1,779,155</td>
												<td>1,775,321</td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Overall Average</td>
												<td>1,773,665</td>
												<td>1,770,321</td>
												<td>1,741,998</td>
												<td>1,779,155</td>
												<td>1,775,321</td>
												
											</tr>
											
										</tbody>
									</table>
								 
		</div>
		</div>
		</div>
		</div>
		</div>
		
		
		<div class="row">
			<div class="col-md-12 padding-bottom-10">
		<div class="col-md-12 box-body padding-10 border-ddd">
				<p>
							
The stop loss deductible level analyzer (Combined Plan Year) is another helpful tool in choosing the most efficient specific deductible level.  We begin again by taking prior plan year large claims and trending them forward to the renewal plan year period of time.  We then evaluate how each proposed deductible level would have performed in terms of claims payments.  (In this analysis, we will be analyzing the combination of all plan years performance at the various deductible levels.)
</p>


<p>Next we take various mathematical approaches to these values over all contract years by taking the average, median, largest claim year, smallest claim year of all plan years, and the average of all of these figures which is called the 'Overall Average'. Finally, we add back the premiums that would have to be paid to procure that specific deductible contract.</p>
<p>In the graph to the left you will see the findings graphically.  For evaluation purposes, we are looking for the specific deductible level that is most consistently the lowest data point for all mathematical measures.  Translated, this means that we are looking for the lowest combination of employer paid claims and premiums if we have an average claims year, a median claims year, largest or smallest claims year.  Commonly the lowest Overall Average cost will be the most efficient deductible level.</p>
<p>You can also utilize the table above to evaluate all of the financials.</p>
		</div>
		</div>
		</div>
		
	<div class="row">
		<div class="col-md-12 padding-bottom-10">
		<div class="col-md-12 padding-10 border-ddd">
	
	<div class="col-md-12 border-ddd padding-10">
							<div class="widget-header">
								<strong class="margin-right-10">Stop Loss Deductible Level Analyzer, Combined Plan Year Analysis</strong>
							</div>
							<div>
							<div id="stop_loss_analyser2" style="min-width: 310px; height: 300px; margin: 0 auto"></div>
							
							</div>
	</div>
	
						
	
		</div>
		</div>
		</div>
		
		
 	<div class="row">
		<div class="col-md-12 padding-bottom-10">
		<div class="col-md-12 padding-10 border-ddd">
									<table class="table-line" style="width: 100%">
										<thead class="background-blue">

											<tr>

												<th class="text-align-center" style="width: 20%;">Plan Year</th>
												<th class="text-align-center" >2009</th>
												<th class="text-align-center" >2010</th>
												<th class="text-align-center" >2011</th>
												<th class="text-align-center">2012</th>
												<th class="text-align-center" >2013</th>
												<th class="text-align-center" >2014</th>
												
											</tr>
											
										</thead>

										<tbody class="text-align-center ">
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td rowspan="8">Prior, Historical Large Claims Trended Forward to Renewal Plan Year</td> 
												<td>$58975</td>
												<td>$69001</td>
												<td>$14008</td>
												<td>$62791</td>
												<td>$132248</td>
												<td>$175010</td>
												
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>$58975</td>
												<td>$69001</td>
												<td>$14008</td>
												<td>$62791</td>
												<td>$132248</td>
												<td>$175010</td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>$58975</td>
												<td>$69001</td>
												<td>$14008</td>
												<td>$62791</td>
												<td>$132248</td>
												<td>$175010</td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>$58975</td>
												<td>$69001</td>
												<td>$14008</td>
												<td>$62791</td>
												<td>$132248</td>
												<td>$175010</td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>&nbsp;</td>
												<td>&nbsp;</td>
												<td>$14008</td>
												<td>$62791</td>
												<td>&nbsp;</td>
												<td>&nbsp;</td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>&nbsp;</td>
												<td>&nbsp;</td>
												<td>$14008</td>
												<td>$62791</td>
												<td>&nbsp;</td>
												<td>&nbsp;</td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>&nbsp;</td>
												<td>&nbsp;</td>
												<td>&nbsp;</td>
												<td>&nbsp;</td>
												<td>&nbsp;</td>
												<td>&nbsp;</td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>&nbsp;</td>
												<td>&nbsp;</td>
												<td>&nbsp;</td>
												<td>&nbsp;</td>
												<td>&nbsp;</td>
												<td>&nbsp;</td>
												
											</tr>
											<tr class=""  style="background-color: #000;color:white">
												<td>Total Large Claim Claim Amount</td> 
												<td>$58975</td>
												<td>$69001</td>
												<td>$14008</td>
												<td>$62791</td>
												<td>$132248</td>
												<td>$175010</td>
												
											</tr>
											<tr class="tr-back-firm"  style="background-color: transparent;">
												<td>Total Number of Large Claims</td> 
												<td>9</td>
												<td>14</td>
												<td>12</td>
												<td>10</td>
												<td>8</td>
												<td>7</td>
												
											</tr>
											<tr class="tr-back-firm"  style="background-color: transparent;">
												<td>Average Claim Size</td> 
												<td>105,705</td>
												<td>108,879</td>
												<td>95,188</td>
												<td>106,650</td>
												<td>90,669</td>
												<td>118,985</td>
												
											</tr>
											<tr class="tr-back-firm"  style="background-color: transparent;">
												<td>Median Claim Size</td> 
												<td>93,254</td>
												<td>92,260</td>
												<td>95,188</td>
												<td>93,254</td>
												<td>90,669</td>
												<td>93,254</td>
												
											</tr>
											
											<tr class="tr-back-firm"  style="background-color: transparent;">
												<td>Largest Claim</td> 
												<td>293,254</td>
												<td>292,260</td>
												<td>195,188</td>
												<td>193,254</td>
												<td>190,669</td>
												<td>193,254</td>
												
											</tr>
											
											<tr class="tr-back-firm"  style="background-color: transparent;">
												<td>Smallest Claim</td> 
												<td>23,254</td>
												<td>22,260</td>
												<td>25,188</td>
												<td>23,254</td>
												<td>20,669</td>
												<td>23,254</td>
												
											</tr>
											
										</tbody>
									</table>
									</div>
		</div>
</div>
</div>
											
								
								
							<div class="modal-footer col-md-12 footer-background">
						
						</div>
						</div>
						
					</div>
					
				</div>		
		<!---end stop loss modal-->
		
		
		<!---start spec report modal-->
<div class="modal fade" id="spec_report_modal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
				<div class="modal-dialog modal-lg">
					<div class="modal-content col-md-12 padding-0">
						<div class="modal-header modal-header-color">
							 
							<button type="button" class="close-modal modal-opacity close-modal-blue" data-dismiss="modal" aria-hidden="true">
								X
							</button>
							<h4 class="modal-title color-white col-md-5 padding-0" id="myModalLabel">
								Large Claim Analyzer
							</h4>
							
							<span class="modal-title color-white col-md-3 padding-5" id="myModalLabel">
							<span class="pdf-download">
  
  <i class="fa fa-file-pdf-o padding-5" style="font-size: 12px;"></i>
  
  <span class="padding-10" >Download Pdf</span> 
  <i class="fa fa-download padding-5 download-icon" ></i>
</span>
							</span>
							
							<span class="modal-title color-white col-md-1 padding-5 padding-left-0" id="myModalLabel">
							
  
  <i class="fa fa-print padding-5 padding-left-0" style="font-size: 24px;"></i>
  

							</span>
							
						</div>
						<div class="modal-body  col-md-12" style="max-height: 450px;overflow-y: scroll;">
						<div class="row">
		<div class="col-md-12 padding-bottom-15">
		<div class="col-md-12">
		<div class="col-md-4">
		<img class="img-responsive" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/images/logo/company-logo.png" alt="Export">
		</div>
		<div class="col-md-5">
		<span class="display-block engineer">ABC ENGINEERING</span>
		<span class=" left-head" style="font-size: 13px;"><b>Large Claim Analyzer</b></span> |
		<span class=" left-head" style="font-size: 13px;"><b>Medical & Pharmacy Plan</b></span>
		</div>
  <div class="col-md-3" align="right">
		<img class="img-responsive" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/images/logo/benefits.png" alt="Export" style=" width: 200px;height: 38px;">

		</div>
		</div>
		</div>
		</div>
		
		
	 
		
		<div class="row">
		<div class="col-md-12 padding-bottom-10">
		<div class="col-md-12 padding-10 border-ddd">
	<div class="col-md-6 padding-left-0">
	<div class="col-md-12 border-ddd padding-10">
							<div class="widget-header">
								<strong class="margin-right-10">Large Claim Evaluation, By Diagnosis Type</strong>
							</div>
							<div>
							<div id="diagnosis_container" style="min-width: 310px; height: 300px; margin: 0 auto"></div>
							
							</div>
	</div>
	</div>
						
	<div class="col-md-6 padding-right-0">
						<div class="col-md-12 border-ddd padding-10">
							<div class="widget-header">
								<strong class="margin-right-10">Large Claim Evaluation, By Member Type</strong>
							</div>
							<div>
							<div id="member_container" style="min-width: 310px; height: 300px; margin: 0 auto"></div>
							
							</div>
	</div>
		</div>
		</div>
		</div>
		</div>
		
		<div class="row">
		<div class="col-md-12 padding-bottom-10">
		<div class="col-md-12 padding-10 border-ddd">
		<table class="table-class table-line" style="width: 100%">
										<thead class="background-blue">

											<tr>

												<th class="text-align-center" style="width: 20%;">Plan Year</th>
												<th class="text-align-center" >2009</th>
												<th class="text-align-center" >2010</th>
												<th class="text-align-center" >2011</th>
												<th class="text-align-center">2012</th>
												<th class="text-align-center" >2013</th>
												<th class="text-align-center" >2014</th>
												
											</tr>
											
										</thead>

										<tbody class="text-align-center ">
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td rowspan="6">Prior, Historical Large Claims Trended Forward to Renewal Plan Year</td> 
												<td>$58975</td>
												<td>$69001</td>
												<td>$14008</td>
												<td>$62791</td>
												<td>$132248</td>
												<td>$175010</td>
												
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>$58975</td>
												<td>$69001</td>
												<td>$14008</td>
												<td>$62791</td>
												<td>$132248</td>
												<td>$175010</td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>$58975</td>
												<td>$69001</td>
												<td>$14008</td>
												<td>$62791</td>
												<td>$132248</td>
												<td>$175010</td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>$58975</td>
												<td>$69001</td>
												<td>$14008</td>
												<td>$62791</td>
												<td>$132248</td>
												<td>$175010</td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td></td>
												<td></td>
												<td>$14008</td>
												<td>$62791</td>
												<td></td>
												<td></td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td></td>
												<td></td>
												<td>$14008</td>
												<td>$62791</td>
												<td></td>
												<td></td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												
											</tr>
											<tr class=""  style="background-color: #000;color:white">
												<td>Total Large Claim Claim Amount</td> 
												<td>$58975</td>
												<td>$69001</td>
												<td>$14008</td>
												<td>$62791</td>
												<td>$132248</td>
												<td>$175010</td>
												
											</tr>
											<tr class="tr-back-firm"  style="background-color: transparent;">
												<td>Total Number of Large Claims</td> 
												<td>9</td>
												<td>14</td>
												<td>12</td>
												<td>10</td>
												<td>8</td>
												<td>7</td>
												
											</tr>
											<tr class="tr-back-firm"  style="background-color: transparent;">
												<td>Average Claim Size</td> 
												<td>105,705</td>
												<td>108,879</td>
												<td>95,188</td>
												<td>106,650</td>
												<td>90,669</td>
												<td>118,985</td>
												
											</tr>
											<tr class="tr-back-firm"  style="background-color: transparent;">
												<td>Median Claim Size</td> 
												<td>93,254</td>
												<td>92,260</td>
												<td>95,188</td>
												<td>93,254</td>
												<td>90,669</td>
												<td>93,254</td>
												
											</tr>
											
											<tr class="tr-back-firm"  style="background-color: transparent;">
												<td>Largest Claim</td> 
												<td>293,254</td>
												<td>292,260</td>
												<td>195,188</td>
												<td>193,254</td>
												<td>190,669</td>
												<td>193,254</td>
												
											</tr>
											
											<tr class="tr-back-firm"  style="background-color: transparent;">
												<td>Smallest Claim</td> 
												<td>23,254</td>
												<td>22,260</td>
												<td>25,188</td>
												<td>23,254</td>
												<td>20,669</td>
												<td>23,254</td>
												
											</tr>
											
										</tbody>
									</table>
		</div>
		</div>
		</div>
		
	 <div class="row">
			<div class="col-md-12 padding-bottom-10" >
			<div class="col-md-12  padding-10 border-ddd">
			<div class="box-head-claim">Report Details</div>
						<?php
$resultData = [
    array("claiminantstatus"=>"Active","memtype"=>"Dependent","age"=>"47","Gender"=>"Male","planmedclaims"=>" 85624","planrxclaims"=>"29865","totalplanclaims"=>" 144141","diagnosis"=>"Cancer","prognosis"=>""),
   array("claiminantstatus"=>"Cobra","memtype"=>"Employee","age"=>"32","Gender"=>"Male","planmedclaims"=>" 85624","planrxclaims"=>"29865","totalplanclaims"=>" 144141","diagnosis"=>"Cardiac Arrest","prognosis"=>""),
array("claiminantstatus"=>"Terminated","memtype"=>"Spouse","age"=>"47","Gender"=>"Male","planmedclaims"=>" 85624","planrxclaims"=>"29865","totalplanclaims"=>" 144141","diagnosis"=>"Heart Failure","prognosis"=>""),
array("claiminantstatus"=>"Active","memtype"=>"Dependent","age"=>"47","Gender"=>"Male","planmedclaims"=>" 85624","planrxclaims"=>"29865","totalplanclaims"=>" 144141","diagnosis"=>"Cancer","prognosis"=>""),
array("claiminantstatus"=>"Active","memtype"=>"Dependent","age"=>"47","Gender"=>"Male","planmedclaims"=>" 85624","planrxclaims"=>"29865","totalplanclaims"=>" 144141","diagnosis"=>"Cancer","prognosis"=>""),
array("claiminantstatus"=>"Active","memtype"=>"Dependent","age"=>"47","Gender"=>"Male","planmedclaims"=>" 85624","planrxclaims"=>"29865","totalplanclaims"=>" 144141","diagnosis"=>"Cancer","prognosis"=>""),
array("claiminantstatus"=>"Active","memtype"=>"Dependent","age"=>"47","Gender"=>"Male","planmedclaims"=>" 85624","planrxclaims"=>"29865","totalplanclaims"=>" 144141","diagnosis"=>"Cancer","prognosis"=>""),
array("claiminantstatus"=>"Active","memtype"=>"Dependent","age"=>"47","Gender"=>"Male","planmedclaims"=>" 85624","planrxclaims"=>"29865","totalplanclaims"=>" 144141","diagnosis"=>"Cancer","prognosis"=>""),
array("claiminantstatus"=>"Active","memtype"=>"Dependent","age"=>"47","Gender"=>"Male","planmedclaims"=>" 85624","planrxclaims"=>"29865","totalplanclaims"=>" 144141","diagnosis"=>"Cancer","prognosis"=>""),
array("claiminantstatus"=>"Active","memtype"=>"Dependent","age"=>"47","Gender"=>"Male","planmedclaims"=>" 85624","planrxclaims"=>"29865","totalplanclaims"=>" 144141","diagnosis"=>"Cancer","prognosis"=>""),
array("claiminantstatus"=>"Active","memtype"=>"Dependent","age"=>"47","Gender"=>"Male","planmedclaims"=>" 85624","planrxclaims"=>"29865","totalplanclaims"=>" 144141","diagnosis"=>"Cancer","prognosis"=>""),
array("claiminantstatus"=>"Active","memtype"=>"Dependent","age"=>"47","Gender"=>"Male","planmedclaims"=>" 85624","planrxclaims"=>"29865","totalplanclaims"=>" 144141","diagnosis"=>"Cancer","prognosis"=>""),
     ];

function filterspecreport($item) {
    $mailfilter = Yii::$app->request->getQueryParam('filteremail', '');
    if (strlen($mailfilter) > 0) {
        if (strpos($item['email'], $mailfilter) != false) {
            return true;
        } else {
            return false;
        }
    } else {
        return true;
    }
}

$filteredresultData = array_filter($resultData, 'filterspecreport');


$mailfilter = Yii::$app->request->getQueryParam('filteremail', '');
$namefilter = Yii::$app->request->getQueryParam('filtername', '');

$searchModel = [ 'month' => $namefilter, 'medicalclaim' => $mailfilter];

$dataProvider = new ArrayDataProvider([
      //  'key'=>'id',
        'allModels' => $filteredresultData,
        'sort' => [
            'attributes' => [ 'month', 'medicalclaim'],
        ],
]);

$gridColumns = [
            ['class' => 'kartik\grid\SerialColumn'],
            

        [
            'attribute' => 'claiminantstatus', 
            'value' => 'claiminantstatus',
'label' => 'Claimant Status',
'noWrap'=>true,
'headerOptions' => ['class' => 'blue-grid-head'],
//'mergeHeader'=>true
            ],
           
			[
"attribute" => "memtype",
'label' => 'Member Type',
'width'=>'150px',
'headerOptions' => ['class' => 'blue-grid-head'],
//'pageSummary' => true,
//'format' => ['currency', ''],
//'mergeHeader'=>true
],
[
"attribute" => "age",
'label' => 'Age',
'width'=>'150px',
'headerOptions' => ['class' => 'blue-grid-head'],
//'pageSummary' => true,
//'mergeHeader'=>true
],
[
"attribute" => "Gender",
'label' => 'Gender',
'width'=>'150px',
'headerOptions' => ['class' => 'blue-grid-head'],
//'pageSummary' => true,
//'mergeHeader'=>true
],
[
"attribute" => "planmedclaims",
'label' => 'Plan Medical Claims',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
'headerOptions' => ['class' => 'blue-grid-head'],
//'mergeHeader'=>true
],
[
"attribute" => "planrxclaims",
'label' => 'Plan Rx Claims',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
'headerOptions' => ['class' => 'blue-grid-head'],
//'mergeHeader'=>true
],
[
"attribute" => "totalplanclaims",
'label' => 'Total Plan Claims',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
'headerOptions' => ['class' => 'blue-grid-head'],
//'mergeHeader'=>true
],
[
"attribute" => "diagnosis",
'label' => 'Diagnosis',
'width'=>'150px',
'headerOptions' => ['class' => 'blue-grid-head'],
 
],
[
"attribute" => "prognosis",
'label' => 'Prognosis',
'width'=>'150px',
'headerOptions' => ['class' => 'blue-grid-head'],
 
],


			];
								echo GridView::widget([
															'dataProvider' => $dataProvider,
														//	'filterModel' => $searchModel,
															'columns' => $gridColumns,
															'containerOptions' => ['style'=>'overflow: auto'], // only set when $responsive = false
														 
															'toolbar' =>  [
																/*
																'{export}',
																'{toggleData}'*/
															],
														'pjax' => true,
															'bordered' => true,
															'striped' => true,
															'condensed' => false,
															'responsive' => true,
															'hover' => true,
//'allowFilterSetting' => false,
//'mergeHeader'=>false,
														   // 'floatHeader' => true,
														   // 'floatHeaderOptions' => ['scrollingTop' => true],
															 'showPageSummary' => true,
															'panel' => [
															'heading'=>false,
																'type' => GridView::TYPE_PRIMARY,
																'footer' => false,
															],
														]);
															 
															
															?>
			</div>
				</div> 
			</div>
		
	 
		
		
 
</div>
											
								
								
							<div class="modal-footer col-md-12 footer-background">
							 
							
						<!--	<a href="#"  class="btn btn-modal-blue">
								Save  
							</a>
							<a href="#"  class="btn btn-default"  data-dismiss="modal">
								Cancel
							</a>-->
						</div>
						</div>
						
					</div>
					
				</div>		
		<!---end spec report modal-->
		
<?php 
    
    
    
    $this->registerJs(
    		"
    $('.view').click(function(e){
       e.preventDefault();
		
		$('#create_firm_user').find('.modal-content').load($(this).attr('href'));
		$('#create_firm_user').modal('show');
		$('.select2').select2();
      
	});
	
	 $('.admin-view').click(function(e){
       e.preventDefault();
		
		$('#update_admin').find('.modal-content').load($(this).attr('href'));
		$('#update_admin').modal('show');
		$('.select2').select2();
      
	});
	
	");

    ?>
	
	  <?php 
    
    
    
    $this->registerJs(
    		"
    $('.view-client').click(function(e){
       e.preventDefault();
		
		$('#add_client_user').modal('show').find('.modal-content').load($(this).attr('href'));
		$('.select2').select2();
      
});
	
	");

    ?>
     <?php
				$this->registerJs ( "
			 $('body').on('beforeSubmit', 'form#add_firm_user', function () {
			 	var form = $(this);
			 	// return false if form still have some validation errors
			 	if (form.find('.has-error').length) {
			 		return false;
			 	}
				    var formData = new FormData($(\"#add_firm_user\")[0]);
			 	// submit form
				$(\"#loading-indicator\").show();
			 	$.ajax({
			 		url:  form.attr('action'),
			 		type: 'post',
			 		data: formData,
					enctype: 'multipart/form-data',
			 		success: function (response) {
			 			if(response=='success')
                            {
							toastr.success('Firm user details updated successfully');
                            $('#create_firm_user').modal('hide');
							$('#create_firm_user').find('.modal-content').html('');
							if ( $( \"#w1-pjax\" ).length ) {
							$.pjax.reload({container:'#w1-pjax'});
							}
							}else{
                          	  $.each(response, function(key, val) {
                                   $('#'+key).after('<div class=\"help-block\">'+val+'</div>');
								   $('#'+key).closest(\".form-group\").removeClass('has-success');
                                   $('#'+key).closest(\".form-group\").addClass('has-error');
                                   });
                            }
						$(\"#loading-indicator\").hide();
			 		},
					cache: false,
			        contentType: false,
			        processData: false
			 	});
			 	return false;
			 });
			 " );
				?>
 <?php $this->endBody()?>
	

<!-- Vendors Scripts -->
    <!-- v1.0.0 -->
   
						
<script>

	  window.onload = init();
    $(document).ready(function() {
		
	


    toastr.options = {
    "closeButton": true, 
    "timeOut": 5000,
    }
	
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


//	$("[data-toggle=popover]").popover();
	$("[data-toggle=tooltip]").tooltip();
	//$("[data-toggle=popover-hover]").popover({
     //       trigger: 'hover',html: true
      //  });
	$('#help_button').click(function(){
		$('#help_box_div').toggle();
		$('#help_button').toggle();
		
	});
	
	$('#help_box_btn').click(function(){
		$('#help_box_div').toggle();
		$('#help_button').toggle();
		
	});
	  $('.select2').select2();
        $('.select2-tags').select2({
            tags: true,
            tokenSeparators: [',', ' ']
        });

       // $('.selectpicker').selectpicker();
	  $('.datepicker-only-init').datetimepicker({
            widgetPositioning: {
                horizontal: 'left'
            },
            icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down"
            },
            format: 'LL'
        });
	 
	  $('.datetimepicker-my').datetimepicker({
                viewMode: 'years',
                format: 'MM/YYYY'
            });
    });
	
	$('.us-phone-mask-input').mask('(000) 000-0000', {placeholder: "(___) ___-____"});
	
	setInterval(function(){ 
	 $(".dx-toolbar-after").find(".dx-item-content").find('i').removeClass('dx-icon-export-to');
	  $(".dx-toolbar-after").find(".dx-item-content").find('i').addClass('dx-icon-download');
	  }, 0);
 
	/* $( function() {
		$( "#help_box_div" ).draggable();
	  } );*/
	 
	   function init() {
        window.addEventListener('scroll', function(e){
            var distanceY = window.pageYOffset || document.documentElement.scrollTop,
                shrinkOn = 100,
                header = document.querySelector("nav.transistion");
				img = document.querySelector("div.transistion-menu");
				imgpartii = document.querySelector("div.profile");
				imgsize = document.querySelector(".img-transistion");
				itemsscreenimgsize = document.querySelector(".items-class");
				smallscreenimgsize = document.querySelector(".image-class");
			//	margindropdown = document.querySelector("ul.arrow-icon");
            if (distanceY > shrinkOn) {
                classie.add(header,"smaller");
				  classie.add(img,"paddingtop-10");
				   classie.add(imgsize,"width-100");
				     classie.add(imgpartii,"profile-part");
					 classie.add(itemsscreenimgsize,"margin-top-10");
					 classie.add(smallscreenimgsize,"margin-top-2");
				//	  classie.add(margindropdown,"margin-top-6");
            } else {
                if (classie.has(header,"smaller")) {
                    classie.remove(header,"smaller");
                }
				 if (classie.has(img,"paddingtop-10")) {
                    classie.remove(img,"paddingtop-10");
                }
				 if (classie.has(imgsize,"width-100")) {
                    classie.remove(imgsize,"width-100");
                }
				 if (classie.has(imgpartii,"profile-part")) {
	                    classie.remove(imgpartii,"profile-part");
	              }
				  if (classie.has(itemsscreenimgsize,"margin-top-10")) {
	                    classie.remove(itemsscreenimgsize,"margin-top-10");
	              }
				  if (classie.has(smallscreenimgsize,"margin-top-2")) {
	                    classie.remove(smallscreenimgsize,"margin-top-2");
	              }
				//  if (classie.has(margindropdown,"margin-top-6")) {
	          //          classie.remove(margindropdown,"margin-top-6");
	          //    }
            }
        });
    }
	
	
function saveFirmUser()
{
	
	//var file_data = $('#profile_image').prop('files')[0];  
   var data=$("#form_create_firm_user").serialize();
  // var data = new FormData($('#form_create_firm_user')[0]);
 
  $.ajax({
	type: 'POST',
    url: '<?php echo Yii::$app->urlManager->createUrl("user/savefirmuser"); ?>',
	data:data,
	processData:false,
	dataType:'json',
	success:function(data){
		
		if (data['fail']) {
			
			if (data['fail']['username']) {
				
				document.getElementById("email_id").style.borderColor = "red";
				document.getElementById("email_id").focus();
				toastr.error(data['fail']['username']);
			}
		}else if(data['success'])
		{
			toastr.success('Firm user added successfully');
			setTimeout(location.reload.bind(location), 3000);
			
		}
		
    },	
  
  });
 
}
	

function updateFirmUser(){
	
   var data=$("#form_update_firm_user").serialize();
	
  $.ajax({
	type: 'GET',
    url: '<?php echo Yii::$app->urlManager->createUrl("user/updatefirmuser"); ?>',
	data:data,
	processData:false,
	dataType:'json',
	success:function(data){
		
		if (data['fail']) {
			
			if (data['fail']['username']) {
				
				document.getElementById("update_firm_email_id").style.borderColor = "red";
				document.getElementById("update_firm_email_id").focus();
				toastr.error(data['fail']['username']);
			}
		}else if(data['success'])
		{
			if(data['email']){
				toastr.success('Firm user details updated successfully, please check your email & verify to activate account');
			}
			else{
				toastr.success('Firm user details updated successfully');
			}
			setTimeout(location.reload.bind(location), 3000);
			
		}
		
    },	
  
  });
}	
				
    </script>
  
</body>
	
	
</html>
<?php $this->endPage(); ?>