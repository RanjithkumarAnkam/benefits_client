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
<!--
<div class="col-md-12"> 
<!--<span class="btn btn-primary-outline btn-sm btn-rounded user-detail">Firm User</span> 

<?php 

//if($usertype == 1){ ?>
<a href="<?php //echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/dashboard/admin" class="btn btn-success btn-sm btn-rounded">Go to Admin Dashboard</a>
<?php //}else if($usertype == 2){ ?>
<a href="<?php //echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/dashboard/firms" class="btn btn-success btn-sm btn-rounded ">Go to Firm Dashboard</a>
<?php //}else if($usertype == 3){ ?>
<a href="<?php //echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/dashboard/clients" class="btn btn-success btn-sm btn-rounded ">Go to Client Dashboard</a>
<?php //} ?>
</div>
-->

</header>


<div class="col-md-6">
				<p class="box-head">Step 1: User details <a class="fa fa-info-circle information-icon"class="btn btn-default-outlined margin-inline" title="User details" data-container="body" data-toggle="popover-hover" data-placement="right" data-content="Please select a user type and enter in contact information" ></a></p>
				<div class="">
				
				<div class="col-md-12 box-border box-padding">
				 
						
						<form>
						
						 <div class="row">
                                <div class="col-md-4 form-group ">
								
                                    <label class="form-control-label" for="l0">User Type  <?php if(!empty($usertype)){?>  <?php }else{?>*<?php } ?></label>
								
                                </div>
                           <div class="col-md-8 form-group ">
						   
						    <?php if(!empty($usertype)){
								?>  
							 <label class="form-control-label">
                            <?php switch($usertype){
								case 1:
								 echo "Admin";
								break;
								case 2:
									 echo 'Firm';
								break;
								case 3:
									 echo 'Client';
								break;
							}?>
							</label>
							<?php } ?>
								<select
										class="form-control <?php if(!empty($usertype)){?> hide <?php } ?>"
										id="usertype_dropdown" onchange="changeusertype(this.value)"  <?php if(!empty($usertype)){?> disabled <?php } ?>>
										<option value="">Select</option>
										<?php if(Yii::$app->user->identity->usertype == 1){?>
										<option value="1">Admin</option>
										<?php } ?>
										<?php if(Yii::$app->user->identity->usertype == 1 || Yii::$app->user->identity->usertype == 2 ){?>
										<option  value="2">Firm</option>
										<?php } ?>
										<option value="3">Client</option>
										
									</select> 
							
                                 </div>
								</div>
								
							
							<?php if(Yii::$app->user->identity->usertype == 1){?>
							<div id="firm_name_div">
							
						 <div class="row hidden" id="firm_name_inner_div" >
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Firm Name *</label>
                                </div>
                           <div class="col-md-8 form-group ">
								<select
										class="form-control "
										id="form_control">
										<option>Select Firm</option>
										<option>Raviteja</option>
										<option>Praveen</option>
										<option>Firm 2</option>
										<option>Firm 3</option>
									</select> 
                                 </div>
								</div>
							
									 <div class="row hidden" id="firm_locations" >
                            <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Select Locations *</label>
                                </div>
								  <div class="col-md-8 form-group ">
                            <select class="form-control height-120 select2" multiple>
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
						 <div id="client_name_div" class="hidden">
						 <div class="row">
                            <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Select Client *</label>
                                </div>
								  <div class="col-md-8 form-group ">
                            <select class="form-control " >
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
							<?php }else if(Yii::$app->user->identity->usertype == 2) {?>
							
							 <div class="row" id="firm_locations">
                            <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Select Locations *</label>
                                </div>
								  <div class="col-md-8 form-group ">
                            <select class="form-control height-120 select2" multiple>
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
						 
							<div id="client_name_div" class="hidden">
						 <div class="row">
                            <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Select Client *</label>
                                </div>
								  <div class="col-md-8 form-group ">
                            <select class="form-control " >
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
							<?php } ?>
							
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
                                    <input type="text" class="form-control" placeholder="Email">
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
                                    <input type="text" class="form-control" placeholder="Ext">
                                </div>
								 
                            </div>
							<div class="row">
                                <div class="col-md-4 form-group">
                                    <label class="form-control-label" for="l0">Cellular</label>
                                </div>
                                   <div class="col-md-8 form-group ">
                                    <input type="text" class="form-control" placeholder="Cellular">
                                </div>
                            </div>
                      
                           
                        </form>
				</div>
				</div>
				</div>
				
				
				
				
<div class="col-md-6" id="action_div">
				<p class="box-head">Step 2: Access and Settings <a class="fa fa-info-circle information-icon"class="btn btn-default-outlined margin-inline" title="Actions & Settings" data-container="body" data-toggle="popover-hover" data-placement="right" data-content="Please select the appropriate privileges for this user." ></a></p>
				<div class="">
				
				<div class="col-md-12 box-border box-padding">
				<div id="action_select_div" >
				<p>Select User Type From Step 1</p>
				</div>
				<div id="admin_user_actions" class="hidden" >
				<div class="col-md-12 padding-0">
				 <div class="col-md-6">
				<?php if(!empty($admin_user_id)){ ?>
				<div class="action-coloumn">
				 <a id="modal-alert" href="#alert_screen" data-toggle="modal">Deactivate User</a>
				</div>
				<div class="action-coloumn">
				 <a id="modal-alert1" href="#reset_password" data-toggle="modal">Reset Password</a>
				</div>
				
				<?php } ?>
				<div class="md-checkbox-list">
													<label class="mt-checkbox mt-checkbox-outline">Super Admin
                                                            <input type="checkbox" value="1" name="test">
                                                            <span></span>
                                                        </label>
													<label class="mt-checkbox mt-checkbox-outline">View  Dashboard  Financials
                                                            <input type="checkbox" value="1" name="checkbox22">
                                                            <span></span>
                                                        </label>

				 </div>
				 
				 <div class="form-group">
				 <label><u>Admin Access</u></label>
				 <div class="md-checkbox-list">
				 
													<label class="mt-checkbox mt-checkbox-outline">Add / Edit Admin Users
                                                            <input type="checkbox" value="1" name="checkbox2">
                                                            <span></span>
                                                        </label>
														<label class="mt-checkbox mt-checkbox-outline"> System Pricing
                                                            <input type="checkbox" value="2" name="checkbox2">
                                                            <span></span>
                                                        </label>
														<label class="mt-checkbox mt-checkbox-outline">System Billing
                                                            <input type="checkbox" value="3" name="checkbox2">
                                                            <span></span>
                                                        </label>
														<label class="mt-checkbox mt-checkbox-outline">Firm Pricing
                                                            <input type="checkbox" value="4" name="checkbox2">
                                                            <span></span>
                                                        </label>
														
                                                  
									</div>	
</div>	

												</div>
											
												 <div class="col-md-6">
				 <div class="margin-bottom-10">
										<div class="">
							<input type="file" id="input-file-now" class="dropify" />
						</div>

							</div>
							</div>
							
												</div>
												<div class="col-md-12 padding-0">
												
												 <div class="col-md-12">									
<label><u>Firm Access</u></label>									
 <div class="md-checkbox-list col-md-12 padding-0">							
 <div class="col-md-6 padding-0">
													<label class="mt-checkbox mt-checkbox-outline"> Add / Edit Firm 
                                                            <input type="checkbox" value="1" name="checkbox3">
                                                            <span></span>
                                                        </label> 
														</div>
 <div class="col-md-6 padding-0">
													<label class="mt-checkbox mt-checkbox-outline"> Add / Edit Firm Users
                                                            <input type="checkbox" value="1" name="checkbox4">
                                                            <span></span>
                                                        </label> 
		</div>

												</div>	
												</div>	
												<div class="col-md-12">		
												<label><u>Client Access</u></label>
												 <div class="md-checkbox-list col-md-12 padding-0">	
												  <div class="col-md-6 padding-0">
												 <label class="mt-checkbox mt-checkbox-outline"> Add / Edit Client
                                                            <input type="checkbox" value="1" name="checkbox5">
                                                            <span></span>
                                                        </label> 
													   </div>
													    <div class="col-md-6 padding-0">
                                                   <label class="mt-checkbox mt-checkbox-outline"> Add / Edit Client Users
                                                            <input type="checkbox" value="1" name="checkbox6">
                                                            <span></span>
                                                        </label> 
												       </div>
													</div>
                                              </div>
												
												
					
				  </div>
				
				</div>
				<div id="firm_user_actions" class="hidden">
				<?php if(!empty($firm_user_id)){ ?>
				<div class="action-coloumn">
				 <a id="modal-alert" href="#alert_screen" data-toggle="modal">Deactivate User</a>
				</div>
				<div class="action-coloumn">
				 <a id="modal-alert" href="#reset_password" data-toggle="modal">Reset Password</a>
				</div>
				<?php } ?>
										
				<div class="col-md-6 padding-0">
				<div class="md-checkbox-list margin-bottom-50">
				<div class="action_head">Access / Permissions:</div>
				<label class="mt-checkbox mt-checkbox-outline">  Administrator Access 
                                                            <input type="checkbox" value="1" name="">
                                                            <span></span>
                                                        </label> 
				<!--<label class="mt-checkbox mt-checkbox-outline">  View Protected Health Info
										<input type="checkbox" value="1" name="">
										<span></span>
									</label>
				<label class="mt-checkbox mt-checkbox-outline">  Add New Clients
                                                            <input type="checkbox" value="1" name="">
                                                            <span></span>
                                                        </label>  -->	
														
						
						   
						</div>
						
			<!--	<div class="md-checkbox-list margin-bottom-50">
				<div class="action_head">Add / Edit Firm Employees:</div>
				
					<label class="mt-checkbox mt-checkbox-outline">   Only My Locations
                                                            <input type="checkbox" value="1" name="">
                                                            <span></span>
                                                        </label> 
				<label class="mt-checkbox mt-checkbox-outline">   All Firm Locations
										<input type="checkbox" value="1" name="">
										<span></span>
									</label> 
				
							
						  
						   
						</div>-->
						</div>
						<div class="col-md-6">
				<div class="md-checkbox-list margin-bottom-50">
				<div class="action_head">View / Edit Clients:</div>
							
			<!--	<label class="mt-checkbox mt-checkbox-outline">   Only My Clients
											<input type="checkbox" value="1" name="">
											<span></span>
										</label> -->
				<label class="mt-checkbox mt-checkbox-outline">   My Locations
										<input type="checkbox" value="1" name="">
										<span></span>
									</label> 
				<label class="mt-checkbox mt-checkbox-outline">  All Firm Locations
										<input type="checkbox" value="1" name="">
										<span></span>
									</label> 
									
								
						  
						   
						</div>
					 
					<!--<div class="md-checkbox-list margin-bottom-50">
				<div class="action_head">Firm Contact:</div>
				
				<label class="mt-checkbox mt-checkbox-outline">    Primary Firm Contact
											<input type="checkbox" value="1" name="">
											<span></span>
										</label> 
				<label class="mt-checkbox mt-checkbox-outline">   Billing Firm Contact
										<input type="checkbox" value="1" name="">
										<span></span>
									</label> 
		
							
						</div>	-->
						</div>
						
						</div>
						
					<!--	<div id="client_user_actions" class="hidden  hide">
						<?php // if(!empty($client_user_id)){ ?>
				<div class="action-coloumn">
				 <a id="modal-alert" href="#alert_screen" data-toggle="modal">Deactivate User</a>
				</div>
				<div class="action-coloumn">
					 <a id="modal-alert" href="#reset_password" data-toggle="modal">Reset Password</a>
				</div>
				<?php // } ?>
				<div class="md-checkbox-list  margin-bottom-50 col-md-6">
				<div class="action_head">Access</div>
                                               <label class="mt-checkbox mt-checkbox-outline">  Administrator Access
										<input type="checkbox" value="1" name="">
										<span></span>
									</label> 
				<label class="mt-checkbox mt-checkbox-outline">  View Protected Health Information
                                                            <input type="checkbox" value="1" name="">
                                                            <span></span>
                                                        </label> 
                                                   
                                                </div>
												
					<div class="md-checkbox-list margin-bottom-50 col-md-6">
				<div class="action_head">Client Contact:</div>
				<label class="mt-checkbox mt-checkbox-outline">  Primary Client Contact
										<input type="checkbox" value="1" name="">
										<span></span>
									</label> 
				<label class="mt-checkbox mt-checkbox-outline">  Primary Billing Contact
                                                            <input type="checkbox" value="1" name="">
                                                            <span></span>
                                                        </label> 
						
						</div>
						</div>-->
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
		
		$('.dropify').dropify({
                messages: {
        'default': 'Please Upload Profile Picture',
        'replace': 'Drag and drop or click to replace',
        'remove':  'Remove',
        'error':   'Ooops, something wrong happended.'
    }
            });

            // Used events
            var drEvent = $('#input-file-events').dropify();

            drEvent.on('dropify.beforeClear', function(event, element){
                return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
            });

            drEvent.on('dropify.afterClear', function(event, element){
                alert('File deleted');
            });

            drEvent.on('dropify.errors', function(event, element){
                console.log('Has Errors');
            });

            var drDestroy = $('#input-file-to-destroy').dropify();
            drDestroy = drDestroy.data('dropify')
            $('#toggleDropify').on('click', function(e){
                e.preventDefault();
                if (drDestroy.isDropified()) {
                    drDestroy.destroy();
                } else {
                    drDestroy.init();
                }
            })
			$('#usertype_dropdown').val('<?php echo $usertype; ?>').change();
    })

	
	function changeusertype(val)
	{
		$('#admin_user_actions').addClass('hidden');
		$('#firm_user_actions').addClass('hidden');
		$('#client_user_actions').addClass('hidden');
		$('#action_select_div').addClass('hidden');
		
		<?php if(Yii::$app->user->identity->usertype == 1){?>
		$('#firm_name_inner_div').addClass('hidden');
		$('#client_name_div').addClass('hidden');
		$('#firm_locations').addClass('hidden');
		
		
		<?php }
		else if(Yii::$app->user->identity->usertype == 2){?>
		$('#client_name_div').addClass('hidden');
		$('#firm_locations').addClass('hidden');
		<?php } ?>
		if(val == '')
		{
			$('#action_select_div').removeClass('hidden');
		}
		else if(val == 1)
		{
			$('#admin_user_actions').removeClass('hidden');
			
			
		}
		else if(val == 2)
		{
			$('#firm_user_actions').removeClass('hidden');
			<?php if(Yii::$app->user->identity->usertype == 1){?>
			$('#firm_name_inner_div').removeClass('hidden');
			$('#firm_locations').removeClass('hidden');
			<?php }else if(Yii::$app->user->identity->usertype == 2){ ?>
			$('#firm_locations').removeClass('hidden');
			<?php } ?>
			
		}
		else if(val == 3)
		{
			$('#client_user_actions').removeClass('hidden');
			<?php if(Yii::$app->user->identity->usertype == 1){?>
			$('#firm_name_inner_div').removeClass('hidden');
			$('#client_name_div').removeClass('hidden');
			<?php }
			else if(Yii::$app->user->identity->usertype == 2){?>
			$('#client_name_div').removeClass('hidden');
			<?php } ?>
		}
	}
	
</script>