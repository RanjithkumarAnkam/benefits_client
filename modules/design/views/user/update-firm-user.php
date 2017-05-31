

	<div class="col-md-12 ">

		<!-- clients -->
		<div class="row dashboard-container">

			<div class="col-md-12 col-xs-12 header-main">
				<div class="col-md-12 col-xs-12">
					<span class="font-18">Update user</span> <span
						style="font-size: 22px;" class="pull-right"></span>

				</div>

			</div>
		</div>
		
		
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
				<p class="box-head">Step 1: User details <a class="fa fa-info-circle information-icon"class="btn btn-default-outlined margin-inline" title="User details" data-container="body" data-toggle="popover-hover" data-placement="right" data-content="Please enter contact information" ></a></p>
				<div class="">
				
				<div class="col-md-12 box-border box-padding">
				 
						
						<form>
						
						
							
							<?php //if(Yii::$app->user->identity->usertype == 1){?>
						<!--	<div id="firm_name_div">
							
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
							</div>-->
							<?php //}else if(Yii::$app->user->identity->usertype == 2) {?>
							
							
						<!-- 
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
							</div>-->
							<?php //} ?>
							
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
                                    <label class="form-control-label" for="l0">Email Id*</label>
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
                                    <label class="form-control-label" for="l0">Mobile #</label>
                                </div>
                                   <div class="col-md-8 form-group ">
                                    <input type="text" class="form-control us-phone-mask-input" placeholder="Mobile #">
                                </div>
                            </div>
                      
                           
                        </form>
				</div>
				</div>
				</div>
				
				
				
				
<div class="col-md-6" id="action_div">
				<p class="box-head">Step 2: Settings <a class="fa fa-info-circle information-icon"class="btn btn-default-outlined margin-inline" title=" Settings" data-container="body" data-toggle="popover-hover" data-placement="right" data-content="Please select the appropriate privileges for this user." ></a></p>
				<div class="">
				
				<div class="col-md-12 box-border box-padding">
			
				
				<div id="firm_user_actions">
				<?php if(!empty($firm_user_id)){ ?>
				<div class="action-coloumn">
				 <a id="modal-alert" href="#alert_screen" data-toggle="modal">Deactivate User</a>
				</div>
				<div class="action-coloumn">
				 <a id="modal-alert" href="#reset_password" data-toggle="modal">Reset Password</a>
				</div>
				<?php } ?>
					
<div class="col-md-12 padding-0">
 <h6 class="action_head">Set This User As:</h6> 
						 <div class="col-md-12 padding-0">
						   <div class="col-md-9 padding-0">
                           <label class="mt-checkbox mt-checkbox-outline">     Firm Primary Contact
										<input type="checkbox" value="1" name="">
										<span></span>
									</label> 
                           </div>
                  
                           <div class="col-md-9 padding-0">
                           <label class="mt-checkbox mt-checkbox-outline">    Firm Billing Contact
										<input type="checkbox" value="1" name="">
										<span></span>
									</label> 
                           </div>
                        
			 
						 </div>
						 
						 </div>		

						 
				<div class="col-md-6 padding-0">
				<div class="md-checkbox-list margin-bottom-50">
				<div class="action_head">Access / Permissions:</div>
				<label class="mt-checkbox mt-checkbox-outline">  Administrator Access 
                                                            <input type="checkbox" value="1" name="">
                                                            <span></span>
                                                        </label> 
			
						</div>
						
			
						</div>
						<div class="col-md-6">
				<div class="md-checkbox-list margin-bottom-50">
				<div class="action_head">View / Edit Clients:</div>
	
				<label class="mt-checkbox mt-checkbox-outline">   My Locations
										<input type="checkbox" value="1" name="">
										<span></span>
									</label> 
				<label class="mt-checkbox mt-checkbox-outline">  All Firm Locations
										<input type="checkbox" value="1" name="">
										<span></span>
									</label> 
						   
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
			 
    })

	
	
</script>

	</div>
	
	
	
		
