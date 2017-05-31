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
					<span class="font-18">Firms</span>

				</div>

			</div>


			<div class="row container" ng-app="DemoApp"
				ng-controller="DemoController" style="margin: auto;">

				<div class="col-md-12">
					<div class="nav-tabs-horizontal horizontal-nav">
						<ul class="nav nav-tabs  main-tabs" role="tablist">
							<li class="nav-item col-md-3 div-element "><a id="main-anchor-1"
								class="nav-link active main-tab-menu" data-toggle="tab"
								data-target="#home2" href="#home2" role="tab"> <span
									class="number">1.</span><span class="desc"> <label>Update Firm</label>
								</span>
							</a> <!--  <a class="nav-link active" href="javascript: void(0);" data-toggle="tab" data-target="#home2" role="tab">
                                        <i class="icmn-home icon"></i>
                                       
                                    </a>--></li>
							<!--	<li class="nav-item col-md-3 div-element"><a class="nav-link main-tab-menu"
								href="#profile2" data-toggle="tab" id="main-anchor-2"
								data-target="#profile2" role="tab"><span class="number">2.</span>
									<span class="desc"> <label>Create Firm User</label>
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
													class="number-left">1.</span> Firm Details</a></li>
											<!--<li class="nav-item"><a class="nav-link" href="#planandrates"
												id="anchor-pb-2" data-toggle="tab"
												data-target="#planandrates" role="tab"><span
													class="number-left">2.</span> Reinsurance Plans and Rates</a>
											</li>-->
											<li class="nav-item"><a class="nav-link left-side"
												href="#typestotrack" id="anchor-pb-3" data-toggle="tab"
												data-target="#typestotrack" role="tab"><span
													class="number-left">2.</span> Access & Settings</a></li>
								<li class="nav-item cursor-nodrop " 
								id="firm_users"><a class="nav-link left-side pointer-disable"
								href="#firmusers" id="anchor-pb-4"
								data-target="#firmusers" role="tab"><span class="number-left">3.</span>
									Firm Users
								</a></li>
								
										<li class="nav-item hide"
								id="update_firmtab"><a class="nav-link left-side"
								href="#updatefirm" data-toggle="tab" id="anchor-pb-6"
								data-target="#updatefirm" role="tab"><span class="number-left">4.</span>
									Update Firm User
								</a></li>
								
								<li class="nav-item hide"
								id="new_firmtab"><a class="nav-link left-side"
								href="#newfirm" data-toggle="tab" id="anchor-pb-5"
								data-target="#newfirm" role="tab"><span class="number-left">4.</span>
									Create Firm User
								</a></li>

										</ul>

									</div>
								</div>
								<div class="col-md-12">
									<div class="tab-content padding-vertical-10 ">
										<div class="tab-pane active" id="planbasics" role="tabpanel">
											<fieldset>
												<legend> Firm Details</legend>
												<form class="col-md-12">
													<div class="row">
														<div class="col-md-4 form-group ">
															<label class="form-control-label" for="l0">Firm Name *</label>
														</div>
														<div class="col-md-8 form-group ">
															<input type="text" class="form-control" value="Raviteja"
																placeholder="Firm Name">
														</div>
													</div>
													<div class="row">
														<div class="col-md-4 form-group ">
															<label class="form-control-label" for="l0">Business
																Address 1*</label>
														</div>
														<div class="col-md-8 form-group ">
															<input type="text" class="form-control" value="greenville"
																placeholder="Business Address 1">
														</div>
													</div>
													<div class="row">
														<div class="col-md-4 form-group ">
															<label class="form-control-label" for="l0">Business
																Address 2</label>
														</div>
														<div class="col-md-8 form-group ">
															<input type="text" class="form-control" value="USA"
																placeholder="Business Address 2">
														</div>
													</div>


													<div class="row">
														<div class="col-md-4 form-group">
															<label class="form-control-label" for="l0">City </label>
														</div>
														<div class="col-md-8 form-group ">
															<input type="text" class="form-control" value="Dallas"
																placeholder="City">
														</div>
													</div>
													<div class="row">
														<div class="col-md-4 form-group">
															<label class="form-control-label" for="l0">State *</label>
														</div>
														<div class="col-md-8 form-group ">
															<select class="form-control edited" id="">
										<?php foreach($states as $key=>$value){?>
										
										<option <?php if($value == 'Texas'){echo 'Selected'; }?>><?php echo $value;?></option>
										
										<?php }?>
									</select>
														</div>
													</div>
													<div class="row">
														<div class="col-md-4 form-group">
															<label class="form-control-label" for="l0">Zip *</label>
														</div>
														<div class="col-md-8 form-group ">
															<input type="text" class="form-control" placeholder="Zip" value="533323">
														</div>
													</div>
													<div class="row">
														<div class="col-md-4 form-group">
															<label class="form-control-label" for="l0">Website</label>
														</div>
														<div class="col-md-8 form-group ">
															<input type="text" class="form-control" value="www.sir.com"
																placeholder="Website">
														</div>
													</div>
													<div class="row">

														<div class="col-md-4 form-group">
															<label class="form-control-label" for="l0">Phone *</label>
														</div>
														<div class="col-md-8 form-group ">
															<input type="text" class="form-control" value="9999999999"
																id="us-phone-mask-input">
														</div>



													</div>
													<div class="row">
														<div class="col-md-4 form-group">
															<label class="form-control-label" for="l0">Cellular</label>
														</div>
														<div class="col-md-8 form-group ">
															<input type="text" class="form-control" value="9999999999"
																placeholder="Cellular">
														</div>
													</div>

													<div class="row">
														<div class="col-md-4 form-group">
															<label class="form-control-label" for="l0">Select
																Locations *</label>
														</div>
														<div class="col-md-8 form-group ">
															<input type="text" class="form-control" value="Dallas"
																placeholder="Location">
															<!--<select class="form-control height-120 select2 select-border  locations" multiple>
										<option selected>Option 1</option>
										<option>Option 3</option>
										<option>Option 4</option>
										<option>Option 5</option>
										<option>Option 6</option>
										<option>Option 7</option>
										<option>Option 8</option>
									</select>-->
														</div>
													</div>



													<div class="row">
														<div class="form-group col-md-12 " align="right">
															<label><a onclick="addLocation();"><u>Add Additional
																		Locations</u></a></label>
														</div>
													</div>

													<div class="col-lg-12 hide padding-bottom-10"
														id="add_location">
														<div class="col-md-4 form-group">
															<label class="form-control-label" for="l0">Add Location</label>
														</div>
														<div class="col-md-6 form-group ">
															<input type="text" class="form-control">
														</div>
														<div class="col-md-2">
															<button type="button" class="btn btn-primary"
																onclick="addLocation();">Save</button>
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
				<?php if(!empty($firm_id)){ ?>
				<div class="action-coloumn">
													<a id="modal-alert" href="#alert_screen"
														data-toggle="modal">Deactivate Company & Company Users</a>
												</div>
				<?php } ?>
				 <div class="col-md-12">
													<div class="col-md-6">
														<label>Activate Modules</label>
														<div class="md-checkbox-list">
															<label class="mt-checkbox mt-checkbox-outline"> Plan
																Claims Reporting <input type="checkbox" value="1" checked
																name=""> <span></span>
															</label>
															<!--<div class="md-checkbox">
										<input type="checkbox" id="checkbox2_3" name="" value="1" class="md-check">
										<label for="checkbox2_3">
											<span></span>
											<span class="check"></span>
											<span class="box"></span>  Population Health Management </label>
									</div>-->
														</div>
													</div>

													<div class="col-md-6">
														<div class="margin-bottom-10">
															<div class="">
																<input type="file" id="input-file-now" class="dropify" />
															</div>

														</div>
													</div>
													<!--   <div class="col-md-12">
														<hr>
													</div>
													<div class="row">
														<div class="action-coloumn col-md-12">
															<div class="col-md-6 padding-0">
																<div class="col-md-8">Firm Primary Contact</div>
																<div class="col-md-4"> 
						   <?php //if(!empty($firm_id)){?>
							   <a id="modal-primarycontact" href="#primary-contact"
																		data-toggle="modal">Bill Smith</a>
						<?php  // }else{?>
							   <a id="modal-primarycontact" href="#add-primary-contact"
																		data-toggle="modal">Add</a>
						<?php  // }?>
				
				</div>
															</div>
														</div>
													</div>




													<div class="row">
														<div class="action-coloumn col-md-12">
															<div class="col-md-6 padding-0">
																<div class="col-md-8">Firm Billing Contact</div>
																<div class="col-md-4"> 
						 
						   <?php //if(!empty($firm_id)){?>
							   <a id="modal-primarycontact" href="#billing-contact"
																		data-toggle="modal">View</a>
						<?php  // }else{?>
							    <a id="modal-primarycontact" href="#add-billing-contact"
																		data-toggle="modal">Add</a>
						<?php  // }?>
				</div>
															</div>

															<div class="col-md-6 padding-0">
																<div class="">
																	<div class="">
																		<label class="mt-checkbox mt-checkbox-outline"> Same
																			as primary contact information <input type="checkbox"
																			value="1" name=""> <span></span>
																		</label>
																	</div>
																</div>
															</div>
														</div>
													</div>
-->

												</div>
											</fieldset>
											<div class="col-md-12 padding-20">
												<button type="button" class="btn btn-primary"
													onclick="previousButton(2);">Previous</button>
												&nbsp;&nbsp;&nbsp; 
                                                     <!--  onclick=enableFirmusers();-->
													<a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/user/updatefirmuser" 
													class="btn btn-primary pull-right">Save</a>
												<!--<button type="button" class="btn btn-primary pull-right"
													/*onclick="nextButton(3);">Save</button>-->
											</div>
										</div>

										<div class="tab-pane" id="firmusers" role="tabpanel">

											<fieldset>

												<legend>Access & Settings</legend>
												<div class="col-md-12">
													<div class="tab-content padding-vertical-10 ">

														<div class="tab-pane active" id="manage_firm_user"
															role="tabpanel">

															<div class="row">
																<a class="col-md-12"><u class="pull-right"
																	onclick="addnewTab();">Add New User</u></a>
															</div>
															<div class="demo-container" ng-app="DemoApp"
																ng-controller="DemoController">
																<div dx-data-grid="dataGridOptions"></div>
															</div>

														</div>

													</div>
												</div>
											</fieldset>
										</div>
										
										<div class="tab-pane" id="newfirm" role="tabpanel">

											<fieldset>
											<legend>User Details</legend>


											<form>
						
 
							
							<?php if(Yii::$app->user->identity->usertype == 1){?>
						 <div class="row hide">
													<div class="col-md-4 form-group ">
														<label class="form-control-label" for="l0">Firm Name *</label>
													</div>
													<div class="col-md-8 form-group ">
														<select class="form-control edited" id="form_control">
															<option>Select Firm</option>
															<option >Raviteja</option>
															<option>Praveen</option>
															<option>Firm 2</option>
															<option>Firm 3</option>
														</select>
													</div>
												</div>

												<div class="row">
													<div class="col-md-4 form-group ">
														<label class="form-control-label" for="l0">Select
															Locations *</label>
													</div>
													<div class="col-md-8 form-group ">
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
							<?php }?>
							
                            <div class="row">
													<div class="col-md-4 form-group ">
														<label class="form-control-label" for="l0">First Name *</label>
													</div>
													<div class="col-md-8 form-group ">
														<input type="text" class="form-control" 
															placeholder="First Name">
													</div>
												</div>

												<div class="row">
													<div class="col-md-4 form-group ">
														<label class="form-control-label" for="l0">Last Name *</label>
													</div>
													<div class="col-md-8 form-group ">
														<input type="text" class="form-control" 
															placeholder="Last Name">
													</div>
												</div>
												<div class="row">
													<div class="col-md-4 form-group">
														<label class="form-control-label" for="l0">Job Title *</label>
													</div>
													<div class="col-md-8 form-group ">
														<input type="text" class="form-control"
															placeholder="Job title">
													</div>
												</div>
												<div class="row">
													<div class="col-md-4 form-group">
														<label class="form-control-label" for="l0">Email Address*</label>
													</div>
													<div class="col-md-8 form-group ">
														<input type="text" class="form-control" 
															placeholder="email">
													</div>
												</div>
												<div class="row">

													<div class="col-md-4 form-group">
														<label class="form-control-label" for="l0">Phone *</label>
													</div>
													<div class="col-md-5 form-group ">
														<input type="text" class="form-control" 
															id="us-phone-mask-input">
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
														<input type="text" class="form-control us-phone-mask-input" 
															placeholder="cellular">
													</div>
												</div>


											</form>

											<div id="firm_user_actions">
				<?php if(!empty($firm_user_id)){ ?>
				<div class="action-coloumn">
													<a id="modal-alert" href="#alert_screen"
														data-toggle="modal">Deactivate User</a>
												</div>
												<div class="action-coloumn">
													<a id="modal-alert" href="#reset_password"
														data-toggle="modal">Reset Password</a>
												</div>
				<?php } ?>
										
				<div class="col-md-12 padding-0">

													<h5 class="action_head">Access / Permissions:</h5>

													<div class="md-checkbox-list col-md-12">
														<div class="col-md-12">
															<label class="mt-checkbox mt-checkbox-outline">
																Administrator Access <input type="checkbox" value="1" 
																name=""> <span></span>
															</label>
														</div>
														<div class="action_head">View / Edit Clients:</div>
														<div class="col-md-6">
															<label class="mt-checkbox mt-checkbox-outline"> My
																Locations <input type="checkbox" value="1" name=""> <span></span>
															</label>
														</div>
														<div class="col-md-6">
															<label class="mt-checkbox mt-checkbox-outline"> All Firm
																Locations <input type="checkbox" value="1" name=""> <span></span>
															</label>
														</div>
													</div>


												</div>

												<div class="col-md-12">
												<span class="pull-right">
												<a class="btn btn-default">Cancel</a>&nbsp;&nbsp;&nbsp;
												<a class="btn btn-primary">Save</a></span>
												</div>
											</div>
											</fieldset>
											
										</div>
										
										<div class="tab-pane" id="updatefirm" role="tabpanel">

												<fieldset>
											<legend>User Details</legend>


											<form class="col-md-12">
						
 
							
							<?php if(Yii::$app->user->identity->usertype == 1){?>
						 <div class="row hide">
													<div class="col-md-4 form-group ">
														<label class="form-control-label" for="l0">Firm Name *</label>
													</div>
													<div class="col-md-8 form-group ">
														<select class="form-control edited" id="form_control">
															<option>Select Firm</option>
															<option selected>Raviteja</option>
															<option>Praveen</option>
															<option>Firm 2</option>
															<option>Firm 3</option>
														</select>
													</div>
												</div>

												<div class="row">
													<div class="col-md-4 form-group ">
														<label class="form-control-label" for="l0">Select
															Locations *</label>
													</div>
													<div class="col-md-8 form-group ">
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
							<?php }?>
							
                            <div class="row">
													<div class="col-md-4 form-group ">
														<label class="form-control-label" for="l0">First Name *</label>
													</div>
													<div class="col-md-8 form-group ">
														<input type="text" class="form-control" value="praveen"
															placeholder="First Name">
													</div>
												</div>

												<div class="row">
													<div class="col-md-4 form-group ">
														<label class="form-control-label" for="l0">Last Name *</label>
													</div>
													<div class="col-md-8 form-group ">
														<input type="text" class="form-control" value="singh"
															placeholder="Last Name">
													</div>
												</div>
												<div class="row">
													<div class="col-md-4 form-group">
														<label class="form-control-label" for="l0">Job Title *</label>
													</div>
													<div class="col-md-8 form-group ">
														<input type="text" class="form-control" value="Manager"
															placeholder="Job title">
													</div>
												</div>
												<div class="row">
													<div class="col-md-4 form-group">
														<label class="form-control-label" for="l0">Email Address*</label>
													</div>
													<div class="col-md-8 form-group ">
														<input type="text" class="form-control" value="praveen@gmail.com"
															placeholder="email">
													</div>
												</div>
												<div class="row">

													<div class="col-md-4 form-group">
														<label class="form-control-label" for="l0">Phone *</label>
													</div>
													<div class="col-md-5 form-group ">
														<input type="text" class="form-control" value="9999999999"
															id="us-phone-mask-input">
													</div>

													<div class="col-md-3 form-group ">
														<input type="text" class="form-control" value="040" placeholder="ext">
													</div>

												</div>
												<div class="row">
													<div class="col-md-4 form-group">
														<label class="form-control-label" for="l0">Cellular *</label>
													</div>
													<div class="col-md-8 form-group ">
														<input type="text" class="form-control us-phone-mask-input" value="9898989899"
															placeholder="cellular">
													</div>
												</div>


											</form>

											<div id="firm_user_actions">
											
				<?php if(!empty($firm_user_id)){ ?>
				<div class="action-coloumn">
													<a id="modal-alert" href="#alert_screen"
														data-toggle="modal">Deactivate User</a>
												</div>
												<div class="action-coloumn">
													<a id="modal-alert" href="#reset_password"
														data-toggle="modal">Reset Password</a>
												</div>
				<?php } ?>
										
				<div class="col-md-12 padding-0">

													<h5 class="action_head">Access / Permissions:</h5>

													<div class="md-checkbox-list col-md-12">
														<div class="col-md-12">
															<label class="mt-checkbox mt-checkbox-outline">
																Administrator Access <input type="checkbox" value="1" checked
																name=""> <span></span>
															</label>
														</div>
														<div class="action_head">View / Edit Clients:</div>
														<div class="col-md-6">
															<label class="mt-checkbox mt-checkbox-outline"> My
																Locations <input type="checkbox" value="1" name=""> <span></span>
															</label>
														</div>
														<div class="col-md-6">
															<label class="mt-checkbox mt-checkbox-outline"> All Firm
																Locations <input type="checkbox" value="1" name=""> <span></span>
															</label>
														</div>
													</div>


												</div>

											</div>
											</fieldset>
										
										</div>
									</div>
								</div>
							</div>

						</div>



					</div>


				</div>
			</div>



		</div>
		<style>
.main-tabs li:not  (:first-child  )::before {
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
	<script type="text/javascript"
			src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/firm/managefirmusers.js"></script>

			

		<script>
	
		 $(function () {

        $("[data-toggle=popover]").popover();
        $("[data-toggle=popover-hover]").popover({
            trigger: 'hover'
        });

        $("[data-toggle=tooltip]").tooltip();

    });
	
	
	$(document).ready(function(){
		
	
		enableFirmusers();
		
		$('.dropify').dropify({
                messages: {
        'default': 'Please Upload Firm Logo',
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
			$('#main-anchor-2').trigger('click');
			$("#anchor-pb-6").trigger('click');
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
			$("#anchor-pb-3").trigger('click');
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
				$('#main-anchor-2').trigger('click');
					$("#anchor-pb-6").trigger('click');
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

		function addnewTab(){
			$('#new_firmtab').removeClass('hide');
			$('#update_firmtab').addClass('hide');			
			$('#main-anchor-1').trigger('click');
			$("#anchor-pb-5").trigger('click');
		}
		function addupdateTab(){
			$('#update_firmtab').removeClass('hide');
			$('#new_firmtab').addClass('hide');
			$('#main-anchor-1').trigger('click');
			$("#anchor-pb-6").trigger('click');
		}
		function enableFirmusers(){

			$('#firm_users').removeClass('cursor-nodrop');
			$('#anchor-pb-4').removeClass('pointer-disable');
			$('#anchor-pb-4').attr('data-toggle','tab');
			$('#main-anchor-1').trigger('click');
			$("#anchor-pb-4").trigger('click');
		}
	</script>
	</div>
</section>



