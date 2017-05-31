<div class="container">

				<div class="row padding-bottom-20">
					<div class="col-lg-12">
						<section class="panel">
					
							<div class="panel-body row">
							

<div class="col-md-12">
<div class="col-md-6 padding-0 action-coloumn">
<?php if(!empty($firm_user_id)){ ?>
		<a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/search">&lt;&lt;Back</a>
		<?php }else{?>
		<a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl().Yii::$app->params['dashboard_url']; ?>">&lt;&lt;Back</a>
		<?php }?>
		</div>
<div class="col-md-6 " align="right"> 
<?php //if(!empty($firm_user_id)){ ?>
<a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl().''.\Yii::$app->params['save_changes']; ?>" class="btn btn-rounded btn-primary margin-inline">Save Changes</a>
<?php //}else{?>
<!--<a href="<?php //echo Yii::$app->getUrlManager()->getBaseUrl().''.\Yii::$app->params['save_changes']; ?>" class="btn btn-rounded btn-primary margin-inline pointer-events">Save Changes</a>-->
<?php //}?>
<a  class="btn btn-rounded btn-default margin-inline" onclick="cancelButton(<?php echo Yii::$app->user->identity->usertype;?>);">Cancel</a>
</div>
</div>

<header class="pageTitle">
<div class="col-md-12"> 
<!--<span class="btn btn-primary-outline btn-sm btn-rounded user-detail">Firm User</span>-->

<?php if(!empty($firm_user_id)){ ?>
<a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/dashboard/firms" class="btn btn-success btn-sm btn-rounded">Go to Firm Dashboard</a>
<?php } ?>
</div>

</header>


<div class="col-md-6">
				<p class="box-head">Step 1: User details <a class="fa fa-info-circle information-icon"class="btn btn-default-outlined margin-inline" title="User details" data-container="body" data-toggle="popover-hover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." ></a></p>
				<div class="">
				
				<div class="col-md-12 box-border box-padding">
				 
						
						<form>
						
 
							
							<?php if(Yii::$app->user->identity->usertype == 1){?>
						 <div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Firm Name *</label>
                                </div>
                           <div class="col-md-8 form-group ">
								<select
										class="form-control edited"
										id="form_control">
										<option>Select Firm</option>
										<option>Raviteja</option>
										<option>Praveen</option>
										<option>Firm 2</option>
										<option>Firm 3</option>
									</select> 
                                 </div>
								</div>
							
									 <div class="row">
                            <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Select Locations *</label>
                                </div>
								  <div class="col-md-8 form-group ">
                            <select class="form-control height-120 select2 locations" multiple>
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
							<?php }?>
							
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
                               <div class="col-md-4 form-group">
                                    <label class="form-control-label" for="l0">Job Title *</label>
                                </div>
                                  <div class="col-md-8 form-group ">
                                    <input type="text" class="form-control" placeholder="Job title">
                                </div>
                            </div>
							<div class="row">
                                <div class="col-md-4 form-group">
                                    <label class="form-control-label" for="l0">Email Address*</label>
                                </div>
                                   <div class="col-md-8 form-group ">
                                    <input type="text" class="form-control" placeholder="email">
                                </div>
                            </div>
							<div class="row">
							 
                               <div class="col-md-4 form-group">
                                    <label class="form-control-label" for="l0">Phone *</label>
                                </div>
                                  <div class="col-md-5 form-group ">
                                   <input type="text" class="form-control" id="us-phone-mask-input">
                                </div> 
								    
                                  <div class="col-md-3 form-group ">
                                    <input type="text" class="form-control" placeholder="ext">
                                </div>
								 
                            </div>
							<div class="row">
                                <div class="col-md-4 form-group">
                                    <label class="form-control-label" for="l0">Cellular *</label>
                                </div>
                                   <div class="col-md-8 form-group ">
                                    <input type="text" class="form-control" placeholder="cellular">
                                </div>
                            </div>
                      
                           
                        </form>
				</div>
				</div>
				</div>
				
				
				
				
<div class="col-md-6">
				<p class="box-head">Step 2: Access and Settings <a class="fa fa-info-circle information-icon"class="btn btn-default-outlined margin-inline" title="Actions & Settings" data-container="body" data-toggle="popover-hover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." ></a></p>
				<div class="">
				
				<div class="col-md-12 box-border box-padding">
				
				
				<?php if(!empty($firm_user_id)){ ?>
				<div class="action-coloumn">
				 <a id="modal-alert" href="#alert_screen" data-toggle="modal">Deactivate User</a>
				</div>
				<div class="action-coloumn">
				 <a id="modal-alert" href="#reset_password" data-toggle="modal">Reset Password</a>
				</div>
				<?php } ?>
										
				<div class="col-md-6">
				<div class="md-checkbox-list margin-bottom-50">
				<div class="action_head">Access / Permissions:</div>
							<div class="md-checkbox ">
								<input type="checkbox" id="checkbox9" class="md-check">
								<label for="checkbox9">
									<span class="inc"></span>
									<span class="check"></span>
									<span class="box"></span> Administrator Access</label>
							</div>
							<div class="md-checkbox ">
								<input type="checkbox" id="checkbox10" class="md-check">
								<label for="checkbox10">
									<span class="inc"></span>
									<span class="check"></span>
									<span class="box"></span> View Protected Health Information</label>
							</div>
						   <div class="md-checkbox ">
								<input type="checkbox" id="checkbox11" class="md-check">
								<label for="checkbox11">
									<span class="inc"></span>
									<span class="check"></span>
									<span class="box"></span> Add New Clients</label>
							</div>
						   
						</div>
						
				<div class="md-checkbox-list margin-bottom-50">
				<div class="action_head">Add / Edit Firm Employees:</div>
							<div class="md-checkbox ">
								<input type="checkbox" id="checkbox12" class="md-check">
								<label for="checkbox12">
									<span class="inc"></span>
									<span class="check"></span>
									<span class="box"></span> Only My Locations</label>
							</div>
							<div class="md-checkbox ">
								<input type="checkbox" id="checkbox13" class="md-check">
								<label for="checkbox13">
									<span class="inc"></span>
									<span class="check"></span>
									<span class="box"></span> All Firm Locations</label>
							</div>
						  
						   
						</div>
						</div>
						<div class="col-md-6">
				<div class="md-checkbox-list margin-bottom-50">
				<div class="action_head">View / Edit Clients:</div>
							<div class="md-checkbox ">
								<input type="checkbox" id="checkbox14" class="md-check">
								<label for="checkbox14">
									<span class="inc"></span>
									<span class="check"></span>
									<span class="box"></span> Only My Clients</label>
							</div>
							<div class="md-checkbox ">
								<input type="checkbox" id="checkbox15" class="md-check">
								<label for="checkbox15">
									<span class="inc"></span>
									<span class="check"></span>
									<span class="box"></span> Only My Locations Clients</label>
							</div>
							<div class="md-checkbox">
								<input type="checkbox" id="checkbox16" class="md-check">
								<label for="checkbox16">
									<span class="inc"></span>
									<span class="check"></span>
									<span class="box"></span> All Firm Location Clients</label>
							</div>
						  
						   
						</div>
					 
					<div class="md-checkbox-list margin-bottom-50">
				<div class="action_head">Firm Contact:</div>
							<div class="md-checkbox ">
								<input type="checkbox" id="checkbox17" class="md-check">
								<label for="checkbox17">
									<span class="inc"></span>
									<span class="check"></span>
									<span class="box"></span> Primary Firm Contact</label>
							</div>
							<div class="md-checkbox ">
								<input type="checkbox" id="checkbox18" class="md-check">
								<label for="checkbox18">
									<span class="inc"></span>
									<span class="check"></span>
									<span class="box"></span> Billing Firm Contact</label>
							</div>
							
						  
						   
						</div>	
						</div>
				</div>
				</div>
				</div>
				
				</div>
</section>
</div>
				</div>
				</div>

<script>

	
   $(function(){
	   $('#us-phone-mask-input').mask('(000) 000-0000', {placeholder: "(___) ___-____"});
	   $("[data-toggle=popover]").popover();
        $("[data-toggle=popover-hover]").popover({
            trigger: 'hover'
        });

        $("[data-toggle=tooltip]").tooltip();
		
		$('.phone_us').mask('(000) 000-0000');
        $('.select2').select2();
        $('.select2-tags').select2({
            tags: true,
            tokenSeparators: [',', ' ']
        });

        $('.selectpicker').selectpicker();

    })

	
</script>