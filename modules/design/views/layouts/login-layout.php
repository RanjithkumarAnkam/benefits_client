<?php
use yii\helpers\Html;
use yii\helpers\Url;
use app\models\PasswordForm;
use yii\widgets\ActiveForm;
use app\assets\AppAsset;
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	
    
     
</head>
<body class="theme-default login colorful-enabled" id="body_color">
    <?php $this->beginBody()?>
 <?php //$this->render ( 'left-main.php' )?>
 <?=$this->render ( 'header-main.php' )?>
 <section class="page-content page-content-0 padding-0">
 <?php echo $content;?>
 	</section>
 <?php //echo $this->render ( 'footer.php' )?>

<div class="main-backdrop"><!-- --></div>


	<!-- jQuery 2.1.4 -->
<div class="col-md-12">

<div class="col-lg-1 col-md-2 pull-right help-button" id="help_button" align="right">
<div><i class="fa fa-info-circle"></i> <span class="">Help</span>
</div>

</div>

<div class="col-md-3  pull-right help-box ui-widget-content" id="help_box_div" style="display:none;">
<div class="col-md-12 help-box-header" align="center">Help<span><a class="fa fa-minus help-box-minus" id="help_box_btn"></a></span></div>
<div  class="col-md-12 help-box-body">
<p class="margin-bottom-0 padding-10">Lorem ipsum dolor sit amet, ad duo fugit latine, vero repudiare dissentiet at sed. Ne usu rebum graeco graecis. Ex bonorum delenit pri, id vitae euismod vix. Labore noster cum an. Eu pro reque persecuti, sea stet legendos accusata an, at cibo detraxit recteque mel.</p>
<p class="margin-bottom-0 padding-10">Lorem ipsum dolor sit amet, ad duo fugit latine, vero repudiare dissentiet at sed. Ne usu rebum graeco graecis. Ex bonorum delenit pri, id vitae euismod vix. Labore noster cum an. Eu pro reque persecuti, sea stet legendos accusata an, at cibo detraxit recteque mel.</p>

</div>



</div>


</div>

<div class="modal fade" id="modal-firm-details" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							 
							<button type="button" class="close-modal" data-dismiss="modal" aria-hidden="true">
								X
							</button>
							<h4 class="modal-title" id="myModalLabel">
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
						<div class="modal-footer">
							 
							<button type="button" class="btn btn-default" data-dismiss="modal">
								Close
							</button> 
							<a id="modal_go"  class="btn btn-primary">
								Go
							</a>
						</div>
					</div>
					
				</div>
				
			</div>


			<div class="modal fade" id="primary-contact" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							 
							<button type="button" class="close-modal" data-dismiss="modal" aria-hidden="true">
								X
							</button>
							<h4 class="modal-title" id="myModalLabel">
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
                                    <input type="text" class="form-control" placeholder="First Name" >
                                </div>
                            </div>
							
							<div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Last Name *</label>
                                </div>
                                <div class="col-md-8 form-group ">
                                    <input type="text" class="form-control" placeholder="Last Name" >
                                </div>
                            </div>
							<div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Email *</label>
                                </div>
                                <div class="col-md-8 form-group ">
                                    <input type="text" class="form-control" placeholder="Email" >
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
                                    <input type="text" class="form-control" placeholder="Ext">
                                </div>
								 
                            </div>
							
							</form>
					
                            </div>
								 
								
							<div class="modal-footer">
							 
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
				
				<div class="modal fade" id="add-primary-contact" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							 
							<button type="button" class="close-modal" data-dismiss="modal" aria-hidden="true">
								X
							</button>
							<h4 class="modal-title" id="myModalLabel">
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
                                    <input type="text" class="form-control" placeholder="First Name" >
                                </div>
                            </div>
							
							<div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Last Name *</label>
                                </div>
                                <div class="col-md-8 form-group ">
                                    <input type="text" class="form-control" placeholder="Last Name" >
                                </div>
                            </div>
							<div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Email *</label>
                                </div>
                                <div class="col-md-8 form-group ">
                                    <input type="text" class="form-control" placeholder="Email" >
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
                                    <input type="text" class="form-control" placeholder="Ext">
                                </div>
								 
                            </div>
							
							</form>
								</div>
								
							<div class="modal-footer">
							 
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
				
				
				
			<div class="modal fade" id="billing-contact" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							 
							<button type="button" class="close-modal" data-dismiss="modal" aria-hidden="true">
								X
							</button>
							<h4 class="modal-title" id="myModalLabel">
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
                                    <input type="text" class="form-control" placeholder="First Name" >
                                </div>
                            </div>
							
							<div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Last Name *</label>
                                </div>
                                <div class="col-md-8 form-group ">
                                    <input type="text" class="form-control" placeholder="Last Name" >
                                </div>
                            </div>
							<div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Email *</label>
                                </div>
                                <div class="col-md-8 form-group ">
                                    <input type="text" class="form-control" placeholder="Email" >
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
                                    <input type="text" class="form-control" placeholder="Ext">
                                </div>
								 
                            </div>
							
							</form>
								</div>
								
							<div class="modal-footer">
							 
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
						<div class="modal-header">
							 
							<button type="button" class="close-modal" data-dismiss="modal" aria-hidden="true">
								X
							</button>
							<h4 class="modal-title" id="myModalLabel">
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
                                    <input type="text" class="form-control" placeholder="First Name" >
                                </div>
                            </div>
							
							<div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Last Name *</label>
                                </div>
                                <div class="col-md-8 form-group ">
                                    <input type="text" class="form-control" placeholder="Last Name" >
                                </div>
                            </div>
							<div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Email *</label>
                                </div>
                                <div class="col-md-8 form-group ">
                                    <input type="text" class="form-control" placeholder="Email" >
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
                                    <input type="text" class="form-control" placeholder="Ext">
                                </div>
								 
                            </div>
							
							</form>
								</div>
								
							<div class="modal-footer">
							 
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
				
				<div class="modal fade" id="alert_screen" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-sm">
					<div class="modal-content">
						<div class="modal-header">
							 
							<button type="button" class="close-modal" data-dismiss="modal" aria-hidden="true">
								X
							</button>
							<h4 class="modal-title" id="myModalLabel">
								Deactivate user
							</h4>
						</div>
						<div class="modal-body">
					<p>Do You Want to Deactivate the User ?</p>
							
			
								</div>
								
							<div class="modal-footer">
							 
							<button type="button" class="btn btn-default" data-dismiss="modal">
								No
							</button> 
							<a id="modal_go1"  class="btn btn-primary" data-dismiss="modal">
								Yes
							</a>
						</div>
						</div>
						
					</div>
					
				</div>
				
				<div class="modal fade" id="reset_password" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-sm">
					<div class="modal-content">
						<div class="modal-header">
							 
							<button type="button" class="close-modal" data-dismiss="modal" aria-hidden="true">
								X
							</button>
							<h4 class="modal-title" id="myModalLabel">
								Reset Password
							</h4>
						</div>
						<div class="modal-body">
					<p>Do You Want to Reset Password For this User ?</p>
							
			
								</div>
								
							<div class="modal-footer">
							 
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
				
				
				<div class="modal fade" id="cancel_modal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-sm">
					<div class="modal-content">
						<div class="modal-header">
							 
							<button type="button" class="close-modal" data-dismiss="modal" aria-hidden="true">
								X
							</button>
							<h4 class="modal-title" id="myModalLabel">
								Cancellation
							</h4>
						</div>
						<div class="modal-body">
					<p>Do You Want to Cancel ?</p>
							
			
								</div>
								
							<div class="modal-footer">
							 
							<button type="button" class="btn btn-default" data-dismiss="modal">
								No
							</button> 
							<a id="modal_go3"  class="btn btn-primary">
								Yes
							</a>
						</div>
						</div>
						
					</div>
					
				</div>
				
					<div class="modal fade" id="firm_dashboard" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							 
							<button type="button" class="close-modal" data-dismiss="modal" aria-hidden="true">
								X
							</button>
							<h4 class="modal-title" id="myModalLabel">
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
								
							<div class="modal-footer">
							 
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

				

 <?php $this->endBody()?>
	

<!-- Vendors Scripts -->
    <!-- v1.0.0 -->
   
						
<script>
    $(document).ready(function() {
    toastr.options = {
    "closeButton": true,
    "timeOut": 5000,
    }
	$("[data-toggle=popover]").popover();
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
	 
    });
	
	$('.us-phone-mask-input').mask('(000) 000-0000', {placeholder: "(___) ___-____"});
	
	setInterval(function(){ 
	 $(".dx-toolbar-after").find(".dx-item-content").find('i').removeClass('dx-icon-export-to');
	  $(".dx-toolbar-after").find(".dx-item-content").find('i').addClass('dx-icon-download');
	  }, 0);
 
	/* $( function() {
		$( "#help_box_div" ).draggable();
	  } );*/
    </script>
	

</body>
	
	
</html>
<?php $this->endPage(); ?>