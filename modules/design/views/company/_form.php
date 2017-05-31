<?php 

$states = array(
    'AL'=>'Alabama',
    'AK'=>'Alaska',
    'AZ'=>'Arizona',
    'AR'=>'Arkansas',
    'CA'=>'California',
    'CO'=>'Colorado',
    'CT'=>'Connecticut',
    'DE'=>'Delaware',
    'DC'=>'District of Columbia',
    'FL'=>'Florida',
    'GA'=>'Georgia',
    'HI'=>'Hawaii',
    'ID'=>'Idaho',
    'IL'=>'Illinois',
    'IN'=>'Indiana',
    'IA'=>'Iowa',
    'KS'=>'Kansas',
    'KY'=>'Kentucky',
    'LA'=>'Louisiana',
    'ME'=>'Maine',
    'MD'=>'Maryland',
    'MA'=>'Massachusetts',
    'MI'=>'Michigan',
    'MN'=>'Minnesota',
    'MS'=>'Mississippi',
    'MO'=>'Missouri',
    'MT'=>'Montana',
    'NE'=>'Nebraska',
    'NV'=>'Nevada',
    'NH'=>'New Hampshire',
    'NJ'=>'New Jersey',
    'NM'=>'New Mexico',
    'NY'=>'New York',
    'NC'=>'North Carolina',
    'ND'=>'North Dakota',
    'OH'=>'Ohio',
    'OK'=>'Oklahoma',
    'OR'=>'Oregon',
    'PA'=>'Pennsylvania',
    'RI'=>'Rhode Island',
    'SC'=>'South Carolina',
    'SD'=>'South Dakota',
    'TN'=>'Tennessee',
    'TX'=>'Texas',
    'UT'=>'Utah',
    'VT'=>'Vermont',
    'VA'=>'Virginia',
    'WA'=>'Washington',
    'WV'=>'West Virginia',
    'WI'=>'Wisconsin',
    'WY'=>'Wyoming',
);
?><div class="container">

				<div class="row padding-bottom-20">
					<div class="col-lg-12">
						<section class="panel">
					
							<div class="panel-body row">
							

<div class="col-md-12">
<div class="col-md-6 padding-0 action-coloumn">
<?php if(!empty($company_id)){ ?>
		<a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/search">&lt;&lt;Back</a>
		<?php }else{?>
		<a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl().Yii::$app->params['dashboard_url']; ?>">&lt;&lt;Back</a>	
		<?php }?>
		</div>
<div class="col-md-6 " align="right"> 
<?php //if(!empty($company_id)){ ?>
<a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl().''.\Yii::$app->params['save_changes']; ?>" class="btn btn-rounded btn-primary margin-inline">Save Changes</a>
<?php// }else{?>
<!--<a href="<?php //echo Yii::$app->getUrlManager()->getBaseUrl().''.\Yii::$app->params['save_changes']; ?>" class="btn btn-rounded btn-primary margin-inline">Save Changes</a>-->
<?php //}?>
<a class="btn btn-rounded btn-default margin-inline" onclick="cancelButton(<?php echo Yii::$app->user->identity->usertype;?>);">Cancel</a>
</div>
</div>

<header class="pageTitle">
<div class="col-md-12"> 
<!--<span class="btn btn-primary-outline btn-sm btn-rounded user-detail">Company</span>-->

<?php if(!empty($company_id)){ ?>
<a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/dashboard/clients" class="btn btn-success btn-sm btn-rounded">Go to Client Dashboard</a>
<?php } ?>
</div>

</header>


<div class="col-md-6">
<div class="col-md-6 padding-left-0">
				<p class="box-head">Step 1: Basic Info <a class="fa fa-info-circle information-icon"class="btn btn-default-outlined margin-inline" title="Basic Info" data-container="body" data-toggle="popover-hover" data-placement="right" data-content="Select the firm of the client and enter in the client contact information.  Next, select the firm associates who service this client according to their role.  " ></a></p>
				</div>
				<div class="col-md-6 padding-right-0">
				<?php if(!empty($company_id)){ ?>
				<label class="margin-top-10">Client ID:  1234566</label>
				<?php } ?>
				</div>
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
							

				<?php } ?>
				
						 
                            <div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Client Name *</label>
                                </div>
                                <div class="col-md-8 form-group ">
                                    <input type="text" class="form-control" placeholder="Client Name" >
                                </div>
                            </div>
							 <div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Business Address 1*</label>
                                </div>
                                <div class="col-md-8 form-group ">
                                    <input type="text" class="form-control" placeholder="Business Address 1" >
                                </div>
                            </div>
							 <div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Business Address 2 </label>
                                </div>
                                <div class="col-md-8 form-group ">
                                    <input type="text" class="form-control" placeholder="Business Address 2" >
                                </div>
                            </div>
							 
							
							<div class="row">
                               <div class="col-md-4 form-group">
                                    <label class="form-control-label" for="l0">City *</label>
                                </div>
                                  <div class="col-md-8 form-group ">
                                    <input type="text" class="form-control" placeholder="City">
                                </div>
                            </div>
							<div class="row">
                               <div class="col-md-4 form-group">
                                    <label class="form-control-label" for="l0">State *</label>
                                </div>
                                  <div class="col-md-8 form-group ">
                                      	<select
										class="form-control edited"
										id="">
										<?php foreach($states as $key=>$value){?>
										
										<option><?php echo $value;?></option>
										
										<?php }?>
									</select> 
                                </div>
                            </div>
							<div class="row">
                               <div class="col-md-4 form-group">
                                    <label class="form-control-label" for="l0">Zip *</label>
                                </div>
                                  <div class="col-md-8 form-group ">
                                    <input type="text" class="form-control" placeholder="Zip">
                                </div>
                            </div>
							<div class="row">
                                <div class="col-md-4 form-group">
                                    <label class="form-control-label" for="l0">Website</label>
                                </div>
                                   <div class="col-md-8 form-group ">
                                    <input type="text" class="form-control" placeholder="Website">
                                </div>
                            </div>
						 
							
                      	  
								
						 <div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Primary Consultant*</label>
                                </div>
                           <div class="col-md-8 form-group ">
								<select
										class="form-control edited"
										id="form_control">
										<option>Select Primary Consultant</option>
										<option>Raviteja</option>
										<option>Praveen</option>
										<option>Firm 2</option>
										<option>Firm 3</option>
										
									</select> 
                                 </div>
								</div>
								
						  <div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Primary Account Manager*</label>
                                </div>
                           <div class="col-md-8 form-group ">
								<select
										class="form-control edited"
										id="form_control">
										<option>Select Account Manager</option>
										<option>Raviteja</option>
										<option>Praveen</option>
										<option>Firm 2</option>
										<option>Firm 3</option>
										
									</select> 
                                 </div>
								</div>
								 
							<div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Primary Service Rep*</label>
                                </div>
                           <div class="col-md-8 form-group ">
								<select
										class="form-control edited"
										id="form_control">
									<option>Select Service Rep</option>
										<option>Raviteja</option>
										<option>Praveen</option>
										<option>Firm 2</option>
										<option>Firm 3</option>
									</select> 
                                 </div>
								</div>	
								 
							 
                           
                        </form>
				</div>
				</div>
				</div>
				
				
				
				
<div class="col-md-6">
				<p class="box-head">Step 2: Access and Settings <a class="fa fa-info-circle information-icon"class="btn btn-default-outlined margin-inline" title="Actions & Settings" data-container="body" data-toggle="popover-hover" data-placement="right" data-content="Select the client size and industry for benchmarking purposes.  Next, select a primary and billing contact, as well as if this client will be billed to their firm or to the client directly.  Finally, insert a client logo and select if in this clients reporting you would like to use the firms logo or the clients logo. " ></a></p>
				<div class="">
				
				<div class="col-md-12 box-border box-padding">
				
				<?php if(!empty($company_id)){ ?>
				<div class="action-coloumn">
					 <a id="modal-alert" href="#alert_screen" data-toggle="modal">Deactivate Client & Client Users</a>
				</div>
				<?php } ?>
				
				
					 <div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Select Employer Size*</label>
                                </div>
                           <div class="col-md-8 form-group ">
								<select
										class="form-control edited"
										id="form_control">
										<option>0-50</option>
										<option>50-100</option>
										<option>100-200</option>
										<option>200-300</option>
										
									</select> 
                                 </div>
								</div>
				 
                          	 <div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Select Industry Code*</label>
                                </div>
                           <div class="col-md-8 form-group ">
								<select
										class="form-control edited"
										id="form_control">
										<option>Manufacturing Industry</option>
										<option>Raviteja</option>
										<option>Praveen</option>
										<option>Firm 2</option>
										<option>Firm 3</option>
										
									</select> 
                                 </div>
								</div>  
                       
                              <div class="row">
                          <div class="col-md-7 padding-bottom-10">
                           <div class="col-md-9 padding-0">
                           Client Primary Contact
                           </div>
                         <div class="col-md-3"> 
						   <?php if(!empty($company_id)){?>
							   <a id="modal-primarycontact" href="#primary-contact" data-toggle="modal"><u>View</u></a>
						<?php   }else{?>
							    <a id="modal-primarycontact" href="#add-primary-contact" data-toggle="modal"><u>Add</u></a>
						<?php   }?>
				</div>
				</div>
				</div>
				
				 
				
				    <div class="row">
                              <div class="col-md-7 padding-bottom-10">
                           <div class="col-md-9 padding-0">
                           Client Billing Contact
                           </div>
                          <div class="col-md-3"> 
						   <?php if(!empty($company_id)){?>
							   <a id="modal-primarycontact" href="#billing-contact" data-toggle="modal"><u>View</u></a>
						<?php   }else{?>
							    <a id="modal-primarycontact" href="#add-billing-contact" data-toggle="modal"><u>Add</u></a>
						<?php   }?>
				</div>
				</div>
				<div class="col-md-5">
					 
				  <div class="">
				  <label class="mt-checkbox mt-checkbox-outline">   Same as primary
										<input type="checkbox" value="1" name="">
										<span></span>
									</label> 
													</div>
				 
				</div>
				</div>
				
				    <div class="row">
                            <div class=" col-md-12 padding-0">
                           <div class="col-md-6">
                           Bill Client Usage to:
                           </div>
                           <div class="col-md-6"> 
				              <div class="mt-radio-inline padding-0">
                                                        <label class="mt-radio mt-radio-outline">Firm
                                                            <input type="radio" value="1" name="test1" checked>
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-radio mt-radio-outline"> Client
                                                            <input type="radio" value="1" name="test1">
                                                            <span></span>
                                                        </label>
                                                    </div>
				</div>
				</div>
				</div>
				
				 
				  <div class="row">
				 <div class="col-md-12 ">
										<div class="dropify-company-box">
							<input type="file" id="input-file-now" class="dropify" />
						</div>

							</div>
							</div>
							
							<div class="row">
							<div class="col-md-12 padding-top-10">
							     <div class="mt-radio-inline  padding-0">
                                                        <label class="mt-radio mt-radio-outline">Use Firm Logo In Reporting
                                                            <input type="radio" value="1" name="test3" checked>
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-radio mt-radio-outline"> Use Client Logo In Reporting
                                                            <input type="radio" value="1" name="test3">
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                </div>
				</div>
				</div>
				
							
	<div class="col-md-12 padding-0 margin-top-10">
				<p class="box-head">Step 3: Subscriptions <a class="fa fa-info-circle information-icon"class="btn btn-default-outlined margin-inline" title="Subscriptions" data-container="body" data-toggle="popover-hover" data-placement="right" data-content="Activate the appropriate modules for this client, as well as their service package level." ></a></p>
				<div class="">
				
				<div class="col-md-12 box-border box-padding">
				<form class="ng-pristine ng-valid">
                            <div class="row">
                                <div class="col-lg-12">
							<label class="margin-bottom-0 pull-left">Self Insured Reporting*</label>
								<div class="col-md-5 ">
							<div class="">
									 <label class="mt-checkbox mt-checkbox-outline">   Activate
										<input type="checkbox" value="1" name="">
										<span></span>
									</label> 
											</div>
											</div>
											
                                </div>
                                
                                 <div class="col-lg-12">
                                   
							
							<div class="col-md-12 ">
							       <div class="mt-radio-inline  padding-0">
                                                        <label class="mt-radio mt-radio-outline">Basic
                                                            <input type="radio" value="1" checked name="test">
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-radio mt-radio-outline"> Full Service
                                                            <input type="radio" value="1" name="test">
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-radio mt-radio-outline"> Bulk
                                                            <input type="radio" value="1" name="test">
                                                            <span></span>
                                                        </label>
                                                    </div>
											</div>
							<div class="col-md-12 margin-bottom-15">
							<div class="pull-left">
							 <label class="margin-bottom-0 margin-right-2">Client#</label> 
							<button type="button" class="btn btn-primary cursor-default line-height-5">4</button>
							</div>
							<div class="pull-left margin-left-10">
							 <label class="margin-bottom-0 margin-right-2">$/Mo</label> 
							<button type="button" class="btn btn-primary cursor-default line-height-5">$54</button>
							</div>
							</div>
							
							
                                </div>
                                </div>
                          <!-- <div class="dropdown-divider"></div> 

<div class="row">
                                <div class="col-lg-12">
							<label class="margin-bottom-0">Population Health*</label> 
                                </div>
                                
                                 <div class="col-lg-12">
                                   
							<div class="col-md-5 padding-top-10">
							<div class="md-checkbox">
									<div class="">
										<input type="checkbox" id="checkbox2_6" name="checkboxes1[]" value="1" class="md-check">
										<label for="checkbox2_6">
											<span></span>
											<span class="check"></span>
											<span class="box"></span>  Activate</label>
											</div>
											</div>
											</div>
							<div class="col-md-5 padding-top-10">
								   <div class="md-radio-list">
														<div class="md-radio">
															<input type="radio" id="radio4" name="radio2" checked
																class="md-radiobtn"> <label for="radio4"> <span
																class="inc"></span> <span class="check"></span> <span
																class="box"></span> Basic
															</label>
														</div>

														<div class="md-radio">
															<input type="radio" id="radio5" name="radio2"
																class="md-radiobtn"> <label for="radio5"> <span
																class="inc"></span> <span class="check"></span> <span
																class="box"></span> Full Service
															</label>
														</div>
														
														<div class="md-radio">
															<input type="radio" id="radio6" name="radio2"
																class="md-radiobtn"> <label for="radio6"> <span
																class="inc"></span> <span class="check"></span> <span
																class="box"></span> Bulk
															</label>
														</div>

													</div>
											</div>
							<div class="col-md-2">
							 <label class="margin-bottom-0">Client#</label> 
							<a class="btn btn-primary line-height-5">4</a>
							 <label class="margin-bottom-0">$/Mo</label> 
							<a class="btn btn-primary line-height-5">$54</a>
							</div>
							
							
                                </div>
                                </div>
-->
								
                                </form>
                                </div>
                                
				</div>
				</div>
				</div>
				
	
				
				</div>
</section>
</div>
				</div>
				</div>
				
				<script type="text/javascript">
				 $(function () {

        $("[data-toggle=popover]").popover();
        $("[data-toggle=popover-hover]").popover({
            trigger: 'hover'
        });

        $("[data-toggle=tooltip]").tooltip();

    });
		$(document).ready(function(){
	
		    // Basic
            $('.dropify').dropify();

            // Translated
            $('.dropify-fr').dropify({
                messages: {
                    default: 'Glissez-déposez un fichier ici ou cliquez',
                    replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                    remove:  'Supprimer',
                    error:   'Désolé, le fichier trop volumineux'
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
});
 
</script>
				