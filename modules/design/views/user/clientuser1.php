<?php
$states = array (
		'AL' => 'Alabama',
		'AK' => 'Alaska',
		'AZ' => 'Arizona',
		'AR' => 'Arkansas',
		'CA' => 'California',
		'CO' => 'Colorado',
		'CT' => 'Connecticut',
		'DE' => 'Delaware',
		'DC' => 'District of Columbia',
		'FL' => 'Florida',
		'GA' => 'Georgia',
		'HI' => 'Hawaii',
		'ID' => 'Idaho',
		'IL' => 'Illinois',
		'IN' => 'Indiana',
		'IA' => 'Iowa',
		'KS' => 'Kansas',
		'KY' => 'Kentucky',
		'LA' => 'Louisiana',
		'ME' => 'Maine',
		'MD' => 'Maryland',
		'MA' => 'Massachusetts',
		'MI' => 'Michigan',
		'MN' => 'Minnesota',
		'MS' => 'Mississippi',
		'MO' => 'Missouri',
		'MT' => 'Montana',
		'NE' => 'Nebraska',
		'NV' => 'Nevada',
		'NH' => 'New Hampshire',
		'NJ' => 'New Jersey',
		'NM' => 'New Mexico',
		'NY' => 'New York',
		'NC' => 'North Carolina',
		'ND' => 'North Dakota',
		'OH' => 'Ohio',
		'OK' => 'Oklahoma',
		'OR' => 'Oregon',
		'PA' => 'Pennsylvania',
		'RI' => 'Rhode Island',
		'SC' => 'South Carolina',
		'SD' => 'South Dakota',
		'TN' => 'Tennessee',
		'TX' => 'Texas',
		'UT' => 'Utah',
		'VT' => 'Vermont',
		'VA' => 'Virginia',
		'WA' => 'Washington',
		'WV' => 'West Virginia',
		'WI' => 'Wisconsin',
		'WY' => 'Wyoming' 
);
?>



<section class="page-content padding-0">
	<div class="page-content-inner">

		<!-- Dashboard -->
		<div class="dashboard-container">


			<div class="col-md-12 col-xs-12 header-main">
				<div class="col-md-12 col-xs-12">
					<span class="font-18">Clients</span>

				</div>

			</div>


			<div class="row container" ng-app="DemoApp"
				ng-controller="DemoController" style="margin: auto;">

				<div class="col-md-12">
					<div class="nav-tabs-horizontal horizontal-nav">
						<ul class="nav nav-tabs  main-tabs" role="tablist">
							<li class="nav-item col-md-3 div-element"><a id="main-anchor-1"
								class="nav-link active main-tab-menu" data-toggle="tab" data-target="#home2"
								href="#home2" role="tab"> <span class="number">1.</span><span
									class="desc"> <label>Create Client</label>
								</span>
							</a> <!--  <a class="nav-link active" href="javascript: void(0);" data-toggle="tab" data-target="#home2" role="tab">
                                        <i class="icmn-home icon"></i>
                                       
                                    </a>--></li>
						<!--	<li class="nav-item col-md-3 div-element"><a class="nav-link main-tab-menu"
								href="#profile2" data-toggle="tab" id="main-anchor-2"
								data-target="#profile2" role="tab"><span class="number">2.</span>
									<span class="desc"> <label>Create Client User</label>
								</span> </a></li>-->
						
						</ul>
					</div>
				</div>

				<div class="col-lg-12">
					<div class="tab-content padding-vertical-20">
						<div class="tab-pane active" id="home2" role="tabpanel">
							<div class="col-md-12">
								<div class="col-md-12">
									<div class="nav-tabs-horizontal">

										<ul class="nav nav-tabs mb-4" role="tablist">
											<li class="nav-item"><a class="nav-link active"
												id="anchor-pb-1" href="#planbasics" data-toggle="tab"
												data-target="#planbasics" role="tab"><span
													class="number-left">1.</span> Client Details</a></li>
											<!--<li class="nav-item"><a class="nav-link" href="#planandrates"
												id="anchor-pb-2" data-toggle="tab"
												data-target="#planandrates" role="tab"><span
													class="number-left">2.</span> Reinsurance Plans and Rates</a>
											</li>-->
											<li class="nav-item"><a class="nav-link left-side"
												href="#typestotrack" id="anchor-pb-3" data-toggle="tab"
												data-target="#typestotrack" role="tab"><span
													class="number-left">2.</span> Access & Settings</a></li>
										<li class="nav-item padding-0  margin-0"><a
												class="nav-link left-side "
												href="#subscription" data-toggle="tab"
												id="anchor-pb-4" data-target="#subscription"
												role="tab"><span class="number-left">3.</span>Subscription</a></li>
										<li class="nav-item padding-0  margin-0"><a
												class="nav-link left-side "
												href="#subscription" data-toggle="tab"
												id="anchor-pb-5" data-target="#clientuser"
												role="tab"><span class="number-left">4.</span>Create Client User</a></li>
										</ul>
									</div>
								</div>
								<div class="col-md-12">
									<div class="tab-content padding-vertical-10 ">
										<div class="tab-pane active" id="planbasics" role="tabpanel">
											<fieldset>
											<legend> Client Details</legend>
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
										</fieldset>
											<div class="col-md-12 padding-20">
												<button type="button" class="btn btn-primary" disabled
													onclick="previousButton(0);">Previous</button>
												&nbsp;&nbsp;&nbsp;
												<button type="button" class="btn btn-primary pull-right"
													onclick="nextButton(1);">Next</button>
											</div>

										</div>
								 
										<div class="tab-pane" id="typestotrack" role="tabpanel">

											<fieldset>

											<legend>Access & Settings</legend>
			
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
				
										</fieldset>
											<div class="col-md-12 padding-20">
												<button type="button" class="btn btn-primary"
													onclick="previousButton(2);">Previous</button>
												&nbsp;&nbsp;&nbsp;
												<button type="button" class="btn btn-primary pull-right"
													onclick="nextButton(3);">Next</button>
											</div>
										</div>
										
										<div class="tab-pane" id="subscription"
											role="tabpanel">

											<fieldset>
												<legend>Subscriptions</legend>

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
                         
								
                                </form>
											</fieldset>
											<div class="col-md-12 padding-20">
												<button type="button" class="btn btn-primary"
													onclick="previousButton(7);">Previous</button>
												&nbsp;&nbsp;&nbsp;
												<button type="button" class="btn btn-primary pull-right"
													onclick="nextButton(4);">Next</button>
											</div>
										</div>
										
										
												<div class="tab-pane" id="clientuser"
											role="tabpanel">

												<fieldset>
												<legend>User Details</legend>


												<form class="ng-pristine ng-valid">
							<?php if(Yii::$app->user->identity->usertype == 1){?>
							
							 <div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Select Firm *</label>
                                </div>
                                <div class="col-md-8 form-group ">
                                  <select
										class="form-control"
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
                                    <label class="form-control-label" for="l0">Select Client *</label>
                                </div>
                                <div class="col-md-8 form-group ">
                                  <select
										class="form-control"
										id="form_control">
										<option>Select Client</option>
										<option>Raviteja</option>
										<option>Praveen</option>
										<option>Firm 2</option>
										<option>Firm 3</option>
									</select>
                                </div>
                            </div>
						
								
							<?php }?>
							
                          <div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">First Name*</label>
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
                                    <label class="form-control-label" for="l0">Job Title *</label>
                                </div>
                                <div class="col-md-8 form-group ">
                                <input type="text" class="form-control" placeholder="Job Title" >
                                </div>
                            </div>
                         
						 <div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Email Address *</label>
                                </div>
                                <div class="col-md-8 form-group ">
                                <input type="text" class="form-control" placeholder="email" >
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
                                    <input type="text" class="form-control" placeholder="ext">
                                </div>
								 
                            </div>
							<div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Cellular *</label>
                                </div>
                                <div class="col-md-8 form-group ">
                                <input type="text" class="form-control" placeholder="Cellular" >
                                </div>
                            </div>
                           
                            
                           
                        </form>
											</fieldset>
											<div class="col-md-12 padding-20">
												<button type="button" class="btn btn-primary"
													onclick="previousButton(3);">Previous</button>
												&nbsp;&nbsp;&nbsp;
												<button type="button" class="btn btn-primary pull-right"
													onclick="nextButton(8);">Next</button>
											</div>
										</div>
										

									</div>
								</div>
							</div>

						</div>



					<!--	<div class="tab-pane" id="profile2" role="tabpanel">
							<div class="col-md-12">
								<div class="col-md-12">
									<div class="nav-tabs-horizontal">

										<ul class="nav nav-tabs mb-4" role="tablist">
											<li class="nav-item col-md-3 padding-0 margin-0"><a
												class="nav-link left-side active"
												href="#year_project_assumption" data-toggle="tab"
												id="anchor-pb-6" data-target="#year_project_assumption"
												role="tab"><span class="number-left">1.</span> Client User Details</a></li>
											<li class="nav-item col-md-3 padding-0  margin-0"><a
												class="nav-link left-side "
												href="#claims_project_assumption" data-toggle="tab"
												id="anchor-pb-7" data-target="#claims_project_assumption"
												role="tab"><span class="number-left">2.</span>Client User Access & Settings</a></li>
												
											

										</ul>
									</div>
								</div>
								<div class="col-md-12">
									<div class="tab-content padding-vertical-10 ">

										<div class="tab-pane active" id="year_project_assumption"
											role="tabpanel">
										
											<div class="col-md-12 padding-20">
												<button type="button" class="btn btn-primary"
													onclick="previousButton(5);">Previous</button>
												&nbsp;&nbsp;&nbsp;
												<button type="button" class="btn btn-primary pull-right"
													onclick="nextButton(6);">Next</button>
											</div>
										</div>



										<div class="tab-pane" id="claims_project_assumption"
											role="tabpanel">

											<fieldset>
												<legend>Access & Settings</legend>

												<div id="client_user_actions" class="">
						<?php if(!empty($client_user_id)){ ?>
				<div class="action-coloumn">
				 <a id="modal-alert" href="#alert_screen" data-toggle="modal">Deactivate User</a>
				</div>
				<div class="action-coloumn">
					 <a id="modal-alert" href="#reset_password" data-toggle="modal">Reset Password</a>
				</div>
				<?php } ?>
				<div class="md-checkbox-list  margin-bottom-50 col-md-3">
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
												
					<div class="md-checkbox-list margin-bottom-50 col-md-3">
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
						</div>
											</fieldset>
											<div class="col-md-12 padding-20">
												<button type="button" class="btn btn-primary"
													onclick="previousButton(7);">Previous</button>
												&nbsp;&nbsp;&nbsp;
												<button type="button" class="btn btn-primary pull-right"
													onclick="nextButton(8);">Finish</button>
											</div>
										</div>
									
									
										
									</div>
								</div> 
							</div>
						</div>

					-->
						
					</div>


				</div>
			</div>



		</div>
		<style>
.main-tabs li:not (:first-child )::before {
	content: '';
	position: absolute;
	top: 2.9em;
	left: -3em;
	width: 4em;
	height: .2em;
	background: dodgerblue;
	z-index: -1;
}

.nav-item {
	text-align: center;
}

.padding-left-24 {
	padding-left: 24px;
}

.main-tabs a.nav-link {
	line-height: 3 !important;
	border: 1px solid rgba(1, 168, 254, 0) !important;
}

.icon {
	font-size: 50px;
	vertical-align: middle;
}

.horizontal-nav .nav-tabs .nav-item .nav-link.active,.nav-tabs-horizontal .nav-tabs .nav-item .main-tabs a.nav-link:focus
	{
	border-top: 10px solid #2c3f4c !important;
	border-bottom: 0px solid rgba(1, 168, 254, 0) !important;
	background-color: #01a8fe !important;
	color: #fff !important;
}

.horizontal-nav .nav-tabs .nav-item .nav-link.active:hover {
	border-top: 10px solid #01a8fe !important;
	background-color: #01a8fe !important;
}

.horizontal-nav .nav-tabs .nav-item .nav-link:hover {
	background-color: #2c3f4c !important;
	border-top: 10px solid #2c3f4c !important;
	color: #fff !important;
}

.horizontal-nav .nav-tabs .nav-item .nav-link {
	background-color: #2c3f4c !important;
	border-top: 10px solid #01a8fe !important;
	color: #fff !important;
}

.div-element {
	flex-direction: row;
	flex-wrap: wrap;
	justify-content: center;
	align-items: center;
	margin: 0px 0px 10px 0 !important;
}

.panel-heading {
	background-color: #01a8fe;
	color: white;
}

.padding-right-20 {
	padding-right: 20px;
}

.padding-left-32 {
	padding-left: 32px;
}

.color-white {
	color: white;
}

.nav-tabs li>* .number {
	font-size: 20px;
	padding-left: 5px;
}

.number-left {
	font-size: 14px;
	padding-left: 5px;
}

ul .desc {
	padding-top: 0px;
}

.nav-tabs li>* .desc {
	font-weight: normal;
	padding-left: 5px;
}

.nav-tabs li>* .desc label {
	font-size: 1.1em;
	cursor: pointer !important;
	margin-bottom: 0 !important;
	max-width: 100%;
	font-weight: 700;
}

.left-side {
	text-align: left !important;
	padding-left: 10px !important;
}

.nav-tabs-left .nav-item .active {
	background: #2c3f4c !important;
	color: #fff !important;
	position: relative;
	width: 200px;
	text-align: center;
	line-height: 40px;
}

.nav-tabs-left .nav-item:hover,.nav-tabs-left .nav-item .active:hover {
	background: #2c3f4c;
	color: #fff !important;
}

.nav-tabs-left .nav-item a.left-side:hover {
	color: white !important;
}

.nav-tabs-left .nav-item .active:after {
	content: "";
	position: absolute;
	height: 0;
	width: 0;
	left: 100%;
	top: -2px;
	border: 30px solid transparent;
	border-left: 20px solid #2c3f4c;
}

.padding-20 {
	padding: 20px;
}

body.blue .panel {
	background-color: rgba(1, 168, 254, 0) !important;
}

fieldset {
	border: 1px solid #c0c0c0;
	margin: 0 2px;
	padding: 0.35em 0.625em 0.75em;
}

legend {
	width: inherit;
}

.dx-datagrid-rowsview {
	border-bottom: 1px solid #ddd;
	border-left: 1px solid #ddd;
	border-right: 1px solid #ddd;
}
</style>


		<script
			src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.2/jszip.min.js"></script>
		<script
			src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.16/angular.min.js"></script>
		<script src="https://cdn3.devexpress.com/jslib/16.2.4/js/dx.all.js"></script>



		<script type="text/javascript"
			src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/firm/dentalselfplandetails.js"></script>


		<script>
	
		 $(function () {

        $("[data-toggle=popover]").popover();
        $("[data-toggle=popover-hover]").popover({
            trigger: 'hover'
        });

        $("[data-toggle=tooltip]").tooltip();

    });
	
	
	$(document).ready(function(){
		
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

		 $("#large_claims .dx-toolbar-before").html('<div class="form-group col-md-12 padding-0" style="min-width:402px;"><label class="font-16 col-xs-5 line-height-30 padding-0" style="color:black;">Plan Year Data As of: </label><span class=" col-xs-7 padding-0"><select class="form-control" id="plan_value">'
					+'<option value="Medical &amp; Rx">January 2017</option>'
					+'<option value="Dental">February 2017</option>'
					+'<option value="Vision">March 2017</option>'
					+'</select></span></div>');
$("#network_performance .dx-toolbar-before").html('<div class="form-group col-md-12 padding-0" style="min-width:402px;"><label class="font-16 col-xs-5 line-height-30" style="color:black;">Plan Year Data As of: </label><span class=" col-xs-7"><select class="form-control" id="plan_value">'
					+'<option value="Medical &amp; Rx">January 2017</option>'
					+'<option value="Dental">February 2017</option>'
					+'<option value="Vision">March 2017</option>'
					+'</select></span></div>');
$("#pharmacy_performance .dx-toolbar-before").html('<div class="form-group col-md-12 padding-0" style="min-width:402px;"><label class="font-16 col-xs-5 line-height-30 padding-0" style="color:black;">Plan Year Data As of: </label><span class=" col-xs-7"><select class="form-control" id="plan_value">'
					+'<option value="Medical &amp; Rx">January 2017</option>'
					+'<option value="Dental">February 2017</option>'
					+'<option value="Vision">March 2017</option>'
					+'</select></span></div>');
	});

	
	function nextButton(id){
		switch (id){

		case 1:
			$('#main-anchor-1').trigger('click');
			$("#anchor-pb-3").trigger('click');;
			break;
		case 2:
			$('#main-anchor-1').trigger('click');
			$("#anchor-pb-3").trigger('click');;
			break;
		case 3:
			$('#main-anchor-1').trigger('click');
			$("#anchor-pb-4").trigger('click');
			break;
		case 4:
			$('#main-anchor-1').trigger('click');
			$("#anchor-pb-5").trigger('click');
			break;
		case 5:
			$('#main-anchor-2').trigger('click');
			$("#anchor-pb-6").trigger('click');
			break;
		case 6:
			$('#main-anchor-2').trigger('click');
			$("#anchor-pb-7").trigger('click');
			break;
		case 7:
			$('#main-anchor-2').trigger('click');
			$("#anchor-pb-8").trigger('click');
			break;
		case 8:
			$('#main-anchor-2').trigger('click');
			$("#anchor-pb-9").trigger('click');
			break;
		case 9:
			$('#main-anchor-3').trigger('click');
			$("#anchor-pb-10").trigger('click');
			break;
		case 10:
			$('#main-anchor-3').trigger('click');
			$("#anchor-pb-12").trigger('click');
			break;
		case 11:
			$('#main-anchor-4').trigger('click');
			$("#anchor-pb-14").trigger('click');
			break;
		
		
	}
	}
	function previousButton(id){
		switch (id){
		
		case 1:
		$('#main-anchor-1').trigger('click');
			$("#anchor-pb-1").trigger('click');;
			break;
		case 2:
		$('#main-anchor-1').trigger('click');
			$("#anchor-pb-1").trigger('click');;
			break;
		case 3:
		$('#main-anchor-1').trigger('click');
			$("#anchor-pb-4").trigger('click');
			break;
		case 4:
		$('#main-anchor-1').trigger('click');
			$("#anchor-pb-4").trigger('click');
			break;
		case 5:
		$('#main-anchor-1').trigger('click');
			$("#anchor-pb-5").trigger('click');
			break;	
		case 6:
		$('#main-anchor-2').trigger('click');
			$("#anchor-pb-6").trigger('click');
			break;
		case 7:
				$('#main-anchor-1').trigger('click');
					$("#anchor-pb-3").trigger('click');
					break;	
		case 8:
				$('#main-anchor-2').trigger('click');
					$("#anchor-pb-8").trigger('click');
					break;	
		case 9:
				$('#main-anchor-2').trigger('click');
					$("#anchor-pb-9").trigger('click');
					break;	
		case 10:
				$('#main-anchor-3').trigger('click');
					$("#anchor-pb-10").trigger('click');
					break;	
		case 11:
				$('#main-anchor-3').trigger('click');
					$("#anchor-pb-11").trigger('click');
					break;	
		case 12:
				$('#main-anchor-3').trigger('click');
					$("#anchor-pb-12").trigger('click');
					break;	
		case 13:
				$('#main-anchor-3').trigger('click');
					$("#anchor-pb-13").trigger('click');
					break;	
		case 14:
				$('#main-anchor-4').trigger('click');
					$("#anchor-pb-13").trigger('click');
					break;					
		
		}
	}
	
	$('a[data-toggle="tab"].main-tab-menu').on('hide.bs.tab', function (e) {
		var $old_tab = $($(e.target).attr("href"));
		var $new_tab = $($(e.relatedTarget).attr("href"));

		if($new_tab.index() < $old_tab.index()){
			$old_tab.css('position', 'relative').css("right", "0").show();
			$old_tab.animate({"right":"-100%"}, 800, function () {
				$old_tab.css("right", 0).removeAttr("style");
			});
		}
		else {
			$old_tab.css('position', 'relative').css("left", "0").show();
			$old_tab.animate({"left":"-100%"}, 800, function () {
				$old_tab.css("left", 0).removeAttr("style");
			});
		}
	});

	$('a[data-toggle="tab"].main-tab-menu').on('show.bs.tab', function (e) {
		var $new_tab = $($(e.target).attr("href"));
		var $old_tab = $($(e.relatedTarget).attr("href"));

		if($new_tab.index() > $old_tab.index()){
			$new_tab.css('position', 'relative').css("right", "-2500px");
			$new_tab.animate({"right":"0"}, 800);
		}
		else {
			$new_tab.css('position', 'relative').css("left", "-2500px");
			$new_tab.animate({"left":"0"}, 800);
		}
	});

	$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
		// your code on active tab shown
	});
	</script>
	</div>
</section>



