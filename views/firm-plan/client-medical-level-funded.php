<?php
use yii\data\ArrayDataProvider;
use kartik\grid\GridView;
use yii\helpers\Html;
?>


<!--   View for Medical Fully Insured     -->

<style>
.table-backcolor > thead > tr > th {
    border-bottom: 1px solid #f7971e;
}
 tbody.body::before {
    content: '';
    display: block;
    height: 4px;
}
.border-bottom{ 
border-bottom: 2px solid #13a9cc;border-right: 2px solid #13a9cc;border-left: 2px solid #13a9cc;
}
.border-top{ 
border-top: 2px solid #13a9cc;border-right: 2px solid #13a9cc;border-left: 2px solid #13a9cc;
}
.border-right-left{ 
border-right: 2px solid #13a9cc;border-left: 2px solid #13a9cc;
}
.border-bottom-one{ 
border-bottom: 2px solid #f7971e;border-right: 2px solid #f7971e;border-left: 2px solid #f7971e;
}
.border-top-one{ 
border-top: 2px solid #f7971e;border-right: 2px solid #f7971e;border-left: 2px solid #f7971e;
}
.border-right-left-one{ 
border-right: 2px solid #f7971e;border-left: 2px solid #f7971e;
}
</style>
<!-- section start here-->

<section class="page-content padding-0">
	

		<!-- Dashboard -->
		<div class="dashboard-container">
 
			<!--  bread crums -->
			<div class="blue-breadcrumb col-md-12 padding-0">
				<a class="breadcrumb-back-btn" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl().Yii::$app->params['dashboard_url']; ?>">
				<i class="fa fa-angle-left" aria-hidden="true"></i>
				</a>
				<div class="breadcrumb-description">
					<span class="">Clients &gt; <a class="color-white" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/dashboard/clients"><u>Client Name - Group Medical - Prior (2016)</u></a> &gt; Level Funded</span>

				</div>

			</div>
			<!--end  bread crums -->
		
		</div>
		<!-- page Content -->
		<div class="page-content col-md-12 pull-left width-100"  ng-app="DemoApp" ng-controller="DemoController" >
		
		<div class="">
			<div class="col-md-12 border-ddd widget padding-0">
			<div class="search-header padding-10">
			
				<ul class="nav nav-pills col-md-12 main-pills" id="main_tab">
						<li class="col-md-2"></li>
					  <li href="#account_setup_block" data-toggle="tab" class="col-md-2" align="center"><img src="/images/design/account_setup_sel.png"  class="avatar"
							alt="Alternative text to the image" id="main-anchor-1" onclick="addHasttag(1);">
							<p class="font-white margin-0">Account Setup</p></li>
					  <li href="#cost_projections_block" data-toggle="tab" class="col-md-2" align="center"><img src="/images/design/cost_projectionsl.png" class="avatar"
							alt="Alternative text to the image" id="main-anchor-2" onclick="addHasttag(2);">
							<p class="font-white margin-0">Cost Projections</p></li>
					  <li href="#input_monthly_block" data-toggle="tab" class="col-md-2" align="center"><img src="/images/design/monthly_inputs.png" class="avatar"
							alt="Alternative text to the image" id="main-anchor-3" onclick="addHasttag(3);">
							<p class="font-white margin-0">Input Monthly Financials</p></li>
					  <li href="#generate_reports_block" data-toggle="tab" class="col-md-2" align="center"><img src="/images/design/reports.png" class="avatar"
							alt="Alternative text to the image" id="main-anchor-4" onclick="addHasttag(4);">
							<p class="font-white margin-0 ">Generate Reports</p></li>
						<li class="col-md-2"></li>
				</ul>
			
			</div>
			<div class="tab-content clearfix">
				<div class="tab-pane" id="account_setup_block">
					<div class="col-md-12  padding-10 ul-block">
						<ul class="nav nav-pills nav-wizard inner-block-ul">
							<li href="#planbasics" data-toggle="tab" class="active inner-block-li"  id="anchor-pb-1"><a><div class="inner-block-digits pull-left">1</div><span class="inner-block-text">Plan Basics</span></a></li>
							<!--<li href="#planandrates" data-toggle="tab" class="inner-block-li"  id="anchor-pb-2"><a><div class="inner-block-digits pull-left">2</div><span class="inner-block-text">Reinsurance Plans and Rates</span></a></li>-->
							<li href="#typestotrack" data-toggle="tab" class="inner-block-li" id="anchor-pb-3"><a><div class="inner-block-digits pull-left">2</div><span class="inner-block-text">Claim Types to Track
								<i class="fa fa-info-circle margin-left-5" data-container="body" data-toggle="popover-hover" data-placement="bottom" data-content="Select the various types of claims you want to track on this plan, each month." data-original-title="Claim Types to Track"></i>
								</span></a></li>
							<li href="#itemtracking" data-toggle="tab" class="inner-block-li" id="anchor-pb-4"><a><div class="inner-block-digits pull-left">3</div><span class="inner-block-text">Additional Financial Entries</span></a></li>
							<li href="#empcontribtion" data-toggle="tab" class="inner-block-li" id="anchor-pb-5"><a><div class="inner-block-digits pull-left">4</div><span class="inner-block-text">Contributions & Enrollment</span></a></li>
						</ul>
					</div>
					
					<div class="col-md-12 padding-0">
					<div class="tab-content clearfix">
						<div class="tab-pane active " id="planbasics" role="tabpanel">
						<div class="border-top-bottom-ddd col-md-12 padding-0">
							<div class="container margin-top-10 margin-bottom-10">
							
									<div class="col-md-12 padding-0">
							<div class="col-md-4">
								<div class="form-group ">
																			<label class="form-control-label" for="l0">Name of
																				the Plan<i class="fa fa-info-circle margin-left-5" title="Name of the Plan" data-container="body" data-toggle="popover-hover" data-placement="right" data-content="Name the plan in a way you would normally talk about the plan, such as Group PPO Plan"></i></label>
																			<input type="text" class="form-control placeholder-italics" value="" >
																		</div>
							</div>
							<div class="col-md-4">
							<div class="form-group ">
																			<label class="form-control-label" for="l0">Network <i class="fa fa-info-circle margin-left-5"  data-container="body" data-toggle="popover-hover" data-placement="right" data-content="Enter the name of the network where employees are directed for care, such as Cigna, Blue Cross or Ameritas" data-original-title="Network"></i>
																			</label>
																			<input type="text" class="form-control placeholder-italics" value=""
																				value="UHC Plus">
																		</div>
							</div>
							<div class="col-md-4">
							<div class="form-group ">
																			<label class="form-control-label" for="l0">Plan Funding <i class="fa fa-info-circle margin-left-5"  data-container="body" data-toggle="popover-hover" data-placement="right" data-content="Choose the plan funding for this plan as partially self insured, self insured, fully insured or level funded" data-original-title="Plan Funding"></i>
																			</label>
																			<input
																				type="text" class="form-control placeholder-italics"
																				value="Level Funded"  disabled>
																		
																		</div>
						
							</div>
							</div>
							
							
							<div class="col-md-12 padding-0">
							<div class="col-md-4">
								<div class="form-group ">
																			<label class="form-control-label" for="l0">Insurance Carrier
																			<i class="fa fa-info-circle margin-left-5"  data-container="body" data-toggle="popover-hover" data-placement="right" data-content="Enter your TPAs name or the name of the carrier who is administrating the plans claims, such as United Healthcare or Cypress Benefit Administrators." data-original-title="Insurance Carrier"></i>
																			</label>
																			<input type="text" class="form-control placeholder-italics" value=""
																				 >
																		</div>
							</div>
							<div class="col-md-4">
							<div class="form-group ">
																			<label class="form-control-label" for="l0">Pharmacy
																				Benefit Manager <i class="fa fa-info-circle margin-left-5"  data-container="body" data-toggle="popover-hover" data-placement="right" data-content="Enter the name of the pharmacy benefit manager such as Express Scripts or Southern Scripts." data-original-title="Pharmacy Benefit Manager"></i>
																			</label>
																			<input type="text" class="form-control placeholder-italics" value=""
																				value="Caremark" >
																		</div>
							</div>
							<div class="col-md-4">
						<div class="form-group ">
																			<label class="form-control-label" for="l0"> Total Plan Budget 
																			<i class="fa fa-info-circle margin-left-5"  data-container="body" data-toggle="popover-hover" data-placement="right" data-content="Enter in the expected or budgeted amount of total plan costs on the plan for the plan year, including both claims and fixed costs.  Do not adjust this amount of employee premiums, COBRA contributions or other employee plan costs shares." data-original-title="Total Plan Budget"></i>
																			</label>
																			<div class="input-group">
																				<span class="input-group-addon">
																					<i class="fa fa-usd  color-black"></i>
																				</span>
																				<input class="form-control price" type="text" >
																			</div>
																		</div>
						
							</div>
							</div>
							<div class="col-md-12 padding-0">
							
							 
							<div class="col-md-4">
	<div class="form-group ">
																			<label class="form-control-label" for="l0">Annual Consulting Fee<i class="fa fa-info-circle margin-left-5"  data-container="body" data-toggle="popover-hover" data-placement="right" data-content="Enter in the total amount of commissions and other consulting fees your firm will receive on this plan for the plan year." data-original-title="Annual Consulting Fee"></i>
																			</label>
																			<input type="text" class="form-control placeholder-italics"
																				value="" >
																		</div>
																		
							</div>
							</div>
							<div class="col-md-12 padding-0">
<div class="col-md-8">
  <div class="form-group ">
																	<label class="form-control-label" for="l0">Plan Change Summary Details<i class="fa fa-info-circle margin-left-5"  data-container="body" data-toggle="popover-hover" data-placement="right" data-content="Enter in the details of changes made to this plan from the prior plan year.  This section is intended to provide a quick log of changes for your records." data-original-title="Plan Change Summary Details"></i>
																	</label>
																		<textarea class="form-control placeholder-italics"  rows="2"></textarea>
																</div>	
																</div>
</div>	
													 
														

															

														

															
							</div>
							</div>
							<div class="col-md-12 padding-0 bg-sky-blue " align="right" style="border-top:none;">
								
								<div class="modal-footer-btn padding-15">
								
								 <button type="button" class="btn btn-modal-blue" disabled onclick="previousButton(0);">&lt; Previous</button>
								  &nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-modal-blue " onclick="nextButton(1);">Save and Next &gt; </button>
									&nbsp;&nbsp;&nbsp;<a type="button" class="btn btn-default pull-right" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/firm-plan/client-plan-years?id=1">Cancel</a>
								
								
								</div>
								</div>
						</div>
					
				
						<div class="tab-pane  " id="typestotrack" role="tabpanel">
						<div class="border-top-bottom-ddd col-md-12 padding-0">
							<div class="container margin-top-10 margin-bottom-10">
							<fieldset class="fieldset-box">

											<legend>Claim Types <i class="fa fa-info-circle margin-left-5" data-container="body" data-toggle="popover-hover" data-placement="right" data-content="Select the claim types you would like to track for this plan by entering in monthly claims amounts." data-original-title="Claim Types"></i></legend>	
						
							<div class="col-md-12">

																<div class="">
																	<div class="md-checkbox col-md-12">
																		<div class="col-md-6">
																		<label class="mt-checkbox mt-checkbox-outline">Medical Claims
																				<input type="checkbox">
																			<span></span>
																		</label>
																			
																		</div>
																	</div>
																	<div class="md-checkbox col-md-12">
																		<div class="col-md-6">
																		<label class="mt-checkbox mt-checkbox-outline">Dental Claims
																				<input type="checkbox">
																			<span></span>
																		</label>
																			
																			
																		</div>
																	</div>
																	
																	
																	<div class="md-checkbox col-md-12">
																		<div class="col-md-6">
																		<label class="mt-checkbox mt-checkbox-outline">Total Claims
																				<input type="checkbox">
																			<span></span>
																		</label>
																			
																		</div>
																	</div>

																 
																</div>
															</div>
							</fieldset>
							</div>
							</div>
							<div class="col-md-12 padding-0 bg-sky-blue " align="right" style="border-top:none;">
								
								<div class="modal-footer-btn padding-15">
								
								 <button type="button" class="btn btn-modal-blue"  onclick="previousButton(2);">&lt; Previous</button>
								  &nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-modal-blue " onclick="nextButton(3);">Save and Next &gt; </button>
							&nbsp;&nbsp;&nbsp;<a type="button" class="btn btn-default pull-right" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/firm-plan/client-plan-years?id=1">Cancel</a>
								
								
								</div>
								</div>
						
								</div>
						
						<div class="tab-pane  " id="itemtracking" role="tabpanel">
						<div class="border-top-bottom-ddd col-md-12 padding-0">
							<div class="container margin-top-10 margin-bottom-10">
							
											<div class="col-md-12">

										<fieldset class="fieldset-box">

											<legend>Employee & Member Contributions to Track <i class="fa fa-info-circle margin-left-5" data-container="body" data-toggle="popover-hover" data-placement="right" data-content="In order to show a true employer net cost, we must deduct the amount of costs paid by the employee and other covered members.  Select any employee contributions or other cost shares you would like to track on the plan.  Once completed, this will change the Monthly Financials input table to allow for the entering of these financial figures." data-original-title="Employee & Member contributions to Track"></i></legend>	
											<div class="col-md-12 padding-0">
											
												
												<div class="row">
											<div class="col-md-12 padding-top-10 ">
												<div class="col-md-12 hide">
													<label class="font-2rem " ><span class="fontcolor-blue">Employee & Member Contributions to
														Track</span>
														 <i class="fa fa-info-circle margin-left-5" data-container="body" data-toggle="popover-hover" data-placement="right" data-content="In order to show a true employer net cost, we must deduct the amount of costs paid by the employee and other covered members.  Select any employee contributions or other cost shares you would like to track on the plan.  Once completed, this will change the Monthly Financials input table to allow for the entering of these financial figures." data-original-title="Employee & Member contributions to Track"></i>
														 </label>
												</div>

											</div>

											
												<div class="col-md-12">
												
													<div class="md-checkbox">
													
																		<label class="mt-checkbox mt-checkbox-outline"> Employee
															Contribution Totals by Month
																				<input type="checkbox" >
																			<span></span>
																		</label>
														
													</div>
													

													<div class="md-checkbox">
													<label class="mt-checkbox mt-checkbox-outline">COBRA
															Premiums
																				<input type="checkbox" >
																			<span></span>
																		</label>
														
													</div>
												

													<div class="md-checkbox">
													<label class="mt-checkbox mt-checkbox-outline">Member
															Copays, Coinsurance and Deductibles<input type="checkbox" >
																			<span></span>
																		</label>
														
													</div>
													
												</div>
											
											</div>
												
												</div>
							</fieldset>	
							</div>
							</div>
							</div>
							<div class="col-md-12 padding-0 bg-sky-blue " align="right" style="border-top:none;">
								
								<div class="modal-footer-btn padding-15">
								
								 <button type="button" class="btn btn-modal-blue"  onclick="previousButton(3);">&lt; Previous</button>
								  &nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-modal-blue " onclick="nextButton(4);">Save and Next &gt; </button>
							&nbsp;&nbsp;&nbsp;<a type="button" class="btn btn-default pull-right" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/firm-plan/client-plan-years?id=1">Cancel</a>
								
								
								</div>
								</div>
						
								</div>
					
						<div class="tab-pane  " id="empcontribtion" role="tabpanel">
						<div class="border-top-bottom-ddd col-md-12 padding-0">
							<div class="container margin-top-10 margin-bottom-10">
							<div class="col-md-12">
							<div class="col-md-2">
							</div>
							<div class="col-md-8">
                               <div class="col-md-12 padding-0">
							   <div class="col-md-2">
												</div>
												<div class="col-md-12 form-group padding-0">
													<div class="col-md-5">
														<label># of Employee  Contribution Strategies
														 <i class="fa fa-info-circle margin-left-5" data-container="body" data-toggle="popover-hover" data-placement="right" data-content="Select the number of various employee contribution structures you would like to track on this plan.  Once selected, below you will see your selected number of tables where you can then enter in the number of contribution tiers for each structure, name the tiers and enter in monthly premium rates.  Finally, enter the average monthly enrollment for each structure." data-original-title="Plan Contribution Strategies"></i>
														 </label>
													</div>
													<div class="col-md-5">
														<select class="form-control" id="select_employee_contribution" onchange="employeeContribution();">
														<option value="">Select</option>
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">4</option>
															<option value="5">5</option>
														</select>
													</div>
												</div>

												
												</div>
												
												<div class="col-md-12 padding-0 margin-bottom-20" id="contribution_strategies">
												
										
                                            </div>
										 
											</div>
											</div>
							</div>
							</div>
							<div class="col-md-12 padding-0 bg-sky-blue " align="right" style="border-top:none;">
								
								<div class="modal-footer-btn padding-15">
								
								 <button type="button" class="btn btn-modal-blue"  onclick="previousButton(4);">&lt; Previous</button>
								  &nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-modal-blue " onclick="nextButton(5);">Save and Next &gt; </button>
							&nbsp;&nbsp;&nbsp;<a type="button" class="btn btn-default pull-right" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/firm-plan/client-plan-years?id=1">Cancel</a>
								
								
								</div>
								</div>
						
								</div>
						<!--<div class="tab-pane  " id="empcontribtion" role="tabpanel">
						<div class="border-top-bottom-ddd col-md-12 padding-0">
							<div class="container margin-top-10 margin-bottom-10">
							<div class="col-md-12 header-reimbursment">

												<div class="col-md-12 form-group padding-0">
													<div class="col-md-6">
														<label># of Plan Contribution Strategies</label>
													</div>
													<div class="col-md-6">
														<select class="form-control">
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">4</option>
															<option value="5">5</option>
														</select>
													</div>
												</div>

												<div class="col-md-12 form-group padding-0">
													<div class="col-md-6">
														<label># of Contribution Tiers</label>
													</div>
													<div class="col-md-6">
														<select class="form-control">
															<option value="1">1 Tier</option>
															<option value="2">2 Tiers</option>
															<option value="3">3 Tiers</option>
															<option value="4">4 Tiers</option>
															<option value="5">5 Tiers</option>
														</select>
													</div>
												</div>
												<div class="col-md-12 padding-0 margin-bottom-20">
												<div class="col-md-12 padding-0">
													<div class="col-md-6">
														<label> Plan 1 Contribution Name</label>
													</div>
													<div class="col-md-6">
														<input class="form-control  placeholder-italics" />
													</div>
												</div>

												<div class="col-md-12   padding-0">
													<div class="">
														<div class="demo-container">
															<div dx-data-grid="dataGridOptionscontribution1"></div>
														</div>
													</div>
												</div>
												</div>
												<div class="col-md-12">
													<div class="col-md-6">
														<label> Plan 2 Contribution Name</label>
													</div>
													<div class="col-md-6">
														<input class="form-control  placeholder-italics" />
													</div>
												</div>
												<div class="col-md-12">
													<div class="">
														<div class="demo-container">
															<div dx-data-grid="dataGridOptionscontribution2"></div>
														</div>
													</div>
												</div>

											</div>
							</div>
							</div>
							<div class="col-md-12 padding-0 bg-sky-blue " align="right" style="border-top:none;">
								
								<div class="modal-footer-btn padding-15">
								
								 <button type="button" class="btn btn-modal-blue"  onclick="previousButton(4);">&lt; Previous</button>
								  &nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-modal-blue" onclick="nextButton(5);">Save and Next &gt; </button>
							&nbsp;&nbsp;&nbsp;<a type="button" class="btn btn-default pull-right" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/firm-plan/client-plan-years?id=1">Cancel</a>
								
								
								</div>
								</div>
						
								</div>
								-->
					</div>
					</div>
				</div>
				<div class="tab-pane" id="cost_projections_block">
					<div class="col-md-12  padding-10 ul-block">
						<ul class="nav nav-pills nav-wizard">
							<!--<li href="#year_project_assumption" data-toggle="tab" class="active inner-block-li" id="anchor-pb-6"><a><div class="inner-block-digits pull-left">1</div><span class="inner-block-text" title="Remainder of Year Claim Projection Assumptions">Remainder of Year Claim...</span></a></li>--->
							<li href="#claims_project_assumption" data-toggle="tab" class="active inner-block-li" id="anchor-pb-7"><a><div class="inner-block-digits pull-left">1</div><span class="inner-block-text">Renewal Projection
							 <i class="fa fa-info-circle margin-left-5" data-container="body" data-toggle="popover-hover" data-placement="bottom" data-content="In this section, you can enter in the details to be used for financial projections of future claims.  The system uses mid-point to mid-point underwriting to determine future claims.  The necessary components to perform these calculations is to determine how many prior months of claims you would like to use in your calculations, the credibility to apply to those claims and the annualized trend to use.  The system will then perform month by month calculations to estimate future claims based upon prior history." data-original-title="Renewal Projection"></i>
							 </span></a></li>
							<li href="#cost_project_assumption" data-toggle="tab" class="inner-block-li" id="anchor-pb-8"><a><div class="inner-block-digits pull-left">2</div><span class="inner-block-text" title="Renewal Cost Item Renewal Assumptions">Renewal Cost Items
							<i class="fa fa-info-circle margin-left-5" data-container="body" data-toggle="popover-hover" data-placement="bottom" data-content="At renewal cost items are likely to change.  In order to illustrate this in the renewal projection reporting, please enter in the estimated percentage change over the current plan year, as well as any notes associated with your projection." data-original-title="Renewal Cost Items"></i>
							</span></a></li>
							<li href="#contribution_project_assumption" data-toggle="tab" class="inner-block-li" id="anchor-pb-9"><a><div class="inner-block-digits pull-left">3</div><span class="inner-block-text" title="Renewal Employee Contribution & Average Enrollment Assumption">Renewal Contributions</span></a></li>
						</ul>
					</div>
					
					<div class="col-md-12 padding-0">
					<div class="tab-content clearfix">
					
						<div class="tab-pane  active" id="claims_project_assumption" role="tabpanel">
						<div class="border-top-bottom-ddd col-md-12 padding-0">
							<div class="container margin-top-10 margin-bottom-10">
							
														<div class="col-md-12">
																<div class="md-radio-list">
																	<div class="md-radio">
																		<input type="radio" id="radio10" name="radio10"
																			checked class="md-radiobtn"> <label for="radio10"> <span
																			class="inc"></span> <span class="check"></span> <span
																			class="box"></span> Target Claims Ratio
																		</label>
																	</div>

																	<div class="md-radio">
																		<input type="radio" id="radio11" name="radio10"
																			class="md-radiobtn"> <label for="radio11"> <span
																			class="inc"></span> <span class="check"></span> <span
																			class="box"></span> Assumed Renewal %
																		</label>
																	</div>

																</div>
																<div class="">
																	<label>Enter Assumed% : </label> <label>75.00%</label>
																</div>
															</div>

							</div>
							</div>
							<div class="col-md-12 padding-0 bg-sky-blue " align="right" style="border-top:none;">
								
								<div class="modal-footer-btn padding-15">
								
								 <button type="button" class="btn btn-modal-blue"  onclick="previousButton(6);">&lt; Previous</button>
								  &nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-modal-blue " onclick="nextButton(7);">Save and Next &gt; </button>
							&nbsp;&nbsp;&nbsp;<a type="button" class="btn btn-default pull-right" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/firm-plan/client-plan-years?id=1">Cancel</a>
								
								
								</div>
								</div>
						
						</div>
						
						
						<div class="tab-pane  " id="cost_project_assumption" role="tabpanel">
						<div class="border-top-bottom-ddd col-md-12 padding-0">
							<div class="container margin-top-10 margin-bottom-10">
							

															<div class="col-md-12">
<div class="col-md-1">
</div>
<div class="col-md-10">

															<div class="col-md-12 margin-top-10">
																<div class="col-md-6">
									<p class="box-head "><span class="fontcolor-blue">Renewal Cost Items</span><i class="fa fa-info-circle margin-left-5" data-container="body" data-toggle="popover-hover" data-placement="left" data-content="Click on Row Cell to Edit" data-original-title="Edit Cell"></i></p>
									
								</div>
								<div class="col-md-6" align="right">
									<span>
									</span>
								</div>
									
			<table class="table table-hover table-backcolor" id="editable_renewal_cost_items" style="table-layout:fixed;">
                            <thead>
                                <tr> 
                                   
									<th class="text-align-center" id="costitems-column-1">Item Name</th>
									<th class="text-align-center" id="costitems-column-2">Estimated Renewal</th>
									<th class="text-align-center" id="costitems-column-3">Notes</th>
									<th class="text-align-center" id="costitems-column-4">Add New Item</th>
                                     
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                
									  <td id="costitems-left-header-1">Stop Loss Premiums</td>
									   <td><div class="input-group"><span class="input-group-addon"><i class="fa fa-usd  color-black"></i></span><input type="text" id="costitems-2-1" class="form-control reinsurance-rates-td price price" value="4"></div></td>
									    <td><input type="text" id="costitems-3-1" class="form-control reinsurance-rates-td" value="Any Notes"></td>
									 <td class="add_costitems_button" align="center"><div class="add-icon cursor-pointer"><span class="" onclick="addCostitems();"><u>Add</u></span></div></td>
                                  </tr>
                                 
                                 <!--    <tr>
                                  
									    <td id="costitems-left-header-2">Administrative Fees</td>
									   <td><div class="input-group"><span class="input-group-addon"><i class="fa fa-usd  color-black"></i></span><input type="text" id="costitems-2-2" class="form-control reinsurance-rates-td text-align-center" value="4%"></div></td>
									    <td><input type="text" id="costitems-3-2" class="form-control reinsurance-rates-td text-align-center" value="Any Notes%"></td>
									     <td class="add_costitems_button" align="center"><div class="add-icon"><span class="" onclick="addCostitems();"><u>Add</u></span></div></td>
                                  </tr>-->
								   
                            </tbody>
                        </table>
					 
						
															<!--<div class="demo-container" id="checkbox-inline">
																			<div dx-data-grid="dataGridOptions16"></div>
																		</div>-->
															
															</div>
															</div>
															</div>
							</div>
							</div>
							<div class="col-md-12 padding-0 bg-sky-blue " align="right" style="border-top:none;">
								
								<div class="modal-footer-btn padding-15">
								
								 <button type="button" class="btn btn-modal-blue"  onclick="previousButton(7);">&lt; Previous</button>
								  &nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-modal-blue" onclick="nextButton(8);">Save and Next &gt; </button>
							&nbsp;&nbsp;&nbsp;<a type="button" class="btn btn-default pull-right" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/firm-plan/client-plan-years?id=1">Cancel</a>
								
								
								</div>
								</div>
						
						</div>
						
						<div class="tab-pane  " id="contribution_project_assumption" role="tabpanel">
							<div class="border-top-bottom-ddd col-md-12 padding-0">
							<div class="container margin-top-10 margin-bottom-10">
							<div class="col-md-12">
							<div class="col-md-2">
							</div>
							<div class="col-md-8">
                               <div class="col-md-12 padding-0">
							   <div class="col-md-2">
												</div>
												<div class="col-md-12 form-group padding-0">
													<div class="col-md-5">
														<label># of Employee  Contribution Strategies
															 <i class="fa fa-info-circle margin-left-5" data-container="body" data-toggle="popover-hover" data-placement="right" data-content="Select the number of various employee contribution structures you would like to track on this plan.  Once selected, below you will see your selected number of tables where you can then enter in the number of contribution tiers for each structure, name the tiers and enter in monthly premium rates.  Finally, enter the average monthly enrollment for each structure." data-original-title="Plan Contribution Strategies"></i>
														 </label>
													</div>
													<div class="col-md-5">
														<select class="form-control" id="select_renewal_employee_contribution" onchange="employeerenewalContribution();">
														<option value="">Select</option>
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">4</option>
															<option value="5">5</option>
														</select>
													</div>
												</div>

												
												</div>
												
												<div class="col-md-12 padding-0 margin-bottom-20" id="renewal_contribution_strategies">
												</div>
												</div>
												</div>
							</div>
							</div>
							
							<div class="col-md-12 padding-0 bg-sky-blue " align="right" style="border-top:none;">
								
								<div class="modal-footer-btn padding-15">
								
								 <button type="button" class="btn btn-modal-blue"  onclick="previousButton(8);">&lt; Previous</button>
								  &nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-modal-blue " onclick="nextButton(9);">Save and Next &gt; </button>
							&nbsp;&nbsp;&nbsp;<a type="button" class="btn btn-default pull-right" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/firm-plan/client-plan-years?id=1">Cancel</a>
								
								
								</div>
								</div>
						
						</div>
						
					</div>
					</div>
					
				</div>
				<div class="tab-pane" id="input_monthly_block">
					<div class="col-md-12  padding-10 ul-block">
						<ul class="nav nav-pills nav-wizard">
							<li href="#monthly_financials" data-toggle="tab" class="active inner-block-li" id="anchor-pb-10"><a><div class="inner-block-digits pull-left">1</div><span class="inner-block-text">Monthly Financials</span></a></li>
							<li href="#large_claims" data-toggle="tab" class="inner-block-li" id="anchor-pb-11"><a><div class="inner-block-digits pull-left">2</div><span class="inner-block-text">Large Claims</span></a></li>
							<li href="#network_performance" data-toggle="tab" class="inner-block-li" id="anchor-pb-12"><a><div class="inner-block-digits pull-left">3</div><span class="inner-block-text">Network Performance</span></a></li>
							<li href="#pharmacy_performance" data-toggle="tab" class="inner-block-li" id="anchor-pb-13"><a><div class="inner-block-digits pull-left">4</div><span class="inner-block-text">Pharmacy Performance</span></a></li>
						</ul>
					</div>
					
					
					<div class="col-md-12 padding-0">
					<div class="tab-content clearfix">
					
						<div class="tab-pane  active" id="monthly_financials" role="tabpanel">
						<div class="border-top-bottom-ddd col-md-12 padding-0">
							<div class=" margin-top-10 margin-bottom-10" style="padding: 0px 20px 0px 20px;">
								<table class="table table-hover table-backcolor" id="editable_monthly_financials" style="table-layout:fixed;">
                          
							  <thead>
                            <tr >
                                <th class="width-12"></th>
                                <th class="column-1 no-wrap text-align-center" id="inputfinance-column-2">Jan-16</th>
                                <th class="column-2 no-wrap text-align-center" id="inputfinance-column-3">Feb-16</th>
                                <th class="column-3 no-wrap text-align-center" id="inputfinance-column-4">Mar-16</th>
                                <th class="column-4 no-wrap text-align-center " id="inputfinance-column-5">Apr-16</th>
                                <th class="column-5 no-wrap text-align-center " id="inputfinance-column-6">May-16</th>
                                <th class="column-6 no-wrap text-align-center " id="inputfinance-column-7">June-16</th>
                                <th class="column-7 no-wrap text-align-center " id="inputfinance-column-8">July-16</th>
                                <th class="column-8 no-wrap text-align-center " id="inputfinance-column-9">Aug-16</th>
                                <th class="column-9 no-wrap text-align-center " id="inputfinance-column-10">Sep-16</th>
                                <th class="column-10 no-wrap text-align-center " id="inputfinance-column-11">Oct-16</th>
                                <th class="column-11 no-wrap text-align-center " id="inputfinance-column-12">Nov-16</th>
                                <th class="column-12 no-wrap text-align-center " id="inputfinance-column-13">Dec-16</th>
                            </tr>
                            </thead>
                            <tbody >
                                <tr class="border-top-one">
                                
									  <td id="inputfinance-left-header-1" class="vertical-align-inherit">Employee Enrollment</td>
									   <td><input type="text" id="inputfinance-2-1" class="form-control reinsurance-rates-td price text-align-center padding-l-r-8" value="200"></td>
									    <td><input type="text" id="inputfinance-3-1" class="form-control reinsurance-rates-td price  text-align-center padding-l-r-8" value="50"></td>
										<td><input type="text" id="inputfinance-4-1" class="form-control reinsurance-rates-td price  text-align-center padding-l-r-8" value="200"></td>
									    <td><input type="text" id="inputfinance-5-1" class="form-control reinsurance-rates-td  price text-align-center padding-l-r-8" value="50"></td>
										<td><input type="text" id="inputfinance-6-1" class="form-control reinsurance-rates-td  price text-align-center padding-l-r-8" value="200"></td>
									    <td><input type="text" id="inputfinance-7-1" class="form-control reinsurance-rates-td  price text-align-center padding-l-r-8" value="50"></td>
										<td><input type="text" id="inputfinance-8-1" class="form-control reinsurance-rates-td price  text-align-center padding-l-r-8" value="200"></td>
									    <td><input type="text" id="inputfinance-9-1" class="form-control reinsurance-rates-td price  text-align-center padding-l-r-8" value="50"></td>
										<td><input type="text" id="inputfinance-10-1" class="form-control reinsurance-rates-td price  text-align-center padding-l-r-8" value="200"></td>
									    <td><input type="text" id="inputfinance-11-1" class="form-control reinsurance-rates-td price  text-align-center padding-l-r-8" value="50"></td>
										<td><input type="text" id="inputfinance-12-1" class="form-control reinsurance-rates-td price  text-align-center padding-l-r-8" value="200"></td>
									 <td><input type="text" id="inputfinance-13-1" class="form-control reinsurance-rates-td  price text-align-center padding-l-r-8" value="200"></td>
                                  </tr>
                                 
                                     <tr class="border-bottom-one">
                                  
									   <td id="inputfinance-left-header-2" class="vertical-align-inherit">Member Enrollment</td>
									   <td><input type="text" id="inputfinance-2-2" class="form-control reinsurance-rates-td price  text-align-center padding-l-r-8" value="200"></td>
									    <td><input type="text" id="inputfinance-3-2" class="form-control reinsurance-rates-td price  text-align-center padding-l-r-8" value="50"></td>
										<td><input type="text" id="inputfinance-4-2" class="form-control reinsurance-rates-td price  text-align-center padding-l-r-8" value="200"></td>
									    <td><input type="text" id="inputfinance-5-2" class="form-control reinsurance-rates-td price  text-align-center padding-l-r-8" value="50"></td>
										<td><input type="text" id="inputfinance-6-2" class="form-control reinsurance-rates-td price  text-align-center padding-l-r-8" value="200"></td>
									    <td><input type="text" id="inputfinance-7-2" class="form-control reinsurance-rates-td price  text-align-center padding-l-r-8" value="50"></td>
										<td><input type="text" id="inputfinance-8-2" class="form-control reinsurance-rates-td price  text-align-center padding-l-r-8" value="200"></td>
									    <td><input type="text" id="inputfinance-9-2" class="form-control reinsurance-rates-td price  text-align-center padding-l-r-8" value="50"></td>
										<td><input type="text" id="inputfinance-10-2" class="form-control reinsurance-rates-td price  text-align-center padding-l-r-8" value="200"></td>
									    <td><input type="text" id="inputfinance-11-2" class="form-control reinsurance-rates-td price  text-align-center padding-l-r-8" value="50"></td>
										<td><input type="text" id="inputfinance-12-2" class="form-control reinsurance-rates-td  price text-align-center padding-l-r-8" value="200"></td>
									     <td><input type="text" id="inputfinance-13-2" class="form-control reinsurance-rates-td price  text-align-center padding-l-r-8" value="200"></td>
                                  </tr>
								  </tbody>
								  <tbody class="body"> 
								      <tr class="border-top">
                               
									   <td id="inputfinance-left-header-3" class="vertical-align-inherit">Medical Claims</td>
									   <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-2-3" class="form-control price  padding-left-0 padding-l-r-8 reinsurance-rates-td text-align-center price" value="200.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-3-3" class="form-control price  padding-left-0 padding-l-r-8 reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-4-3" class="form-control price  padding-left-0 padding-l-r-8 reinsurance-rates-td text-align-center price" value="200.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-5-3" class="form-control price  padding-left-0 padding-l-r-8 reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-6-3" class="form-control price  padding-left-0 padding-l-r-8 reinsurance-rates-td text-align-center price" value="200.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-7-3" class="form-control  price padding-left-0 padding-l-r-8 reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-8-3" class="form-control  price padding-left-0 padding-l-r-8 reinsurance-rates-td text-align-center price" value="200.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-9-3" class="form-control  price padding-left-0 padding-l-r-8 reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-10-3" class="form-control price  padding-left-0 padding-l-r-8 reinsurance-rates-td text-align-center price" value="200.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-11-3" class="form-control price  padding-left-0 padding-l-r-8 reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-12-3" class="form-control  price padding-left-0 padding-l-r-8 reinsurance-rates-td text-align-center price" value="200.00"></div></td>
									     <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-13-3" class="form-control price  padding-left-0 padding-l-r-8 reinsurance-rates-td text-align-center price" value="50.00"></div></td>
                                  </tr>
								  
								     <tr class="border-right-left border-bottom">
                                  
									   <td id="inputfinance-left-header-4" class="vertical-align-inherit">Pharmacy Claims</td>
									   <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-2-4" class="form-control price  padding-left-0 padding-l-r-8 reinsurance-rates-td text-align-center price" value="200.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-3-4" class="form-control price  padding-left-0 padding-l-r-8 reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-4-4" class="form-control price  padding-left-0 padding-l-r-8 reinsurance-rates-td text-align-center price" value="200.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-5-4" class="form-control  price padding-left-0 padding-l-r-8 reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-6-4" class="form-control  price padding-left-0  padding-l-r-8 reinsurance-rates-td text-align-center price" value="200.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-7-4" class="form-control  price padding-left-0  padding-l-r-8 reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-8-4" class="form-control  price padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-9-4" class="form-control  price padding-left-0  padding-l-r-8 reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-10-4" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-11-4" class="form-control price  padding-left-0  padding-l-r-8 reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-12-4" class="form-control price  padding-left-0  padding-l-r-8 reinsurance-rates-td text-align-center price" value="50.00"></div></td>
									     <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-13-4" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
                                  </tr>
								  
                                  </tbody>
                                <tbody class="body"> 
								     <tr class="border-right-left-one border-top-one">
                                  
									  <td id="inputfinance-left-header-5" class="vertical-align-inherit">Stop Loss Reimbursement</td>
									     <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-2-5" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="200.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-3-5" class="form-control price  padding-left-0  padding-l-r-8 reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-4-5" class="form-control price  padding-left-0  padding-l-r-8 reinsurance-rates-td text-align-center price" value="200.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-5-5" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-6-5" class="form-control  price padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="200.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-7-5" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-8-5" class="form-control price  padding-left-0  padding-l-r-8 reinsurance-rates-td text-align-center price" value="50.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-9-5" class="form-control  price padding-left-0  padding-l-r-8 reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-10-5" class="form-control price  padding-left-0  padding-l-r-8 reinsurance-rates-td text-align-center price" value="50.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-11-5" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-12-5" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
									     <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-13-5" class="form-control  price padding-left-0  padding-l-r-8 reinsurance-rates-td text-align-center price" value="50.00"></div></td>
                                 </tr>
								   <tr class="border-right-left-one border-bottom-one">
                                  
									  <td id="inputfinance-left-header-6" class="vertical-align-inherit">Wellness Credits</td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-2-6" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="200.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-3-6" class="form-control  price padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-4-6" class="form-control  price padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="200.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-5-6" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-6-6" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="200.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-7-6" class="form-control price  padding-left-0  padding-l-r-8 reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-8-6" class="form-control  price padding-left-0  padding-l-r-8 reinsurance-rates-td text-align-center price" value="50.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-9-6" class="form-control  price padding-left-0  padding-l-r-8 reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-10-6" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-11-6" class="form-control price  padding-left-0  padding-l-r-8 reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-12-6" class="form-control  price padding-left-0  padding-l-r-8 reinsurance-rates-td text-align-center price" value="50.00"></div></td>
									     <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-13-6" class="form-control price  padding-left-0  padding-l-r-8 reinsurance-rates-td text-align-center price" value="50.00"></div></td>
                                 </tr>
								  
                                   </tbody>
                                  <tbody class="body"> 
								   <tr class="header-td back-gray color-white">
                                  
									  <td id="inputfinance-left-header-7">Gross Total</td>
									   <td id="inputfinance-2-7 text-align-center"  >$200.00</td>
									    <td id="inputfinance-3-7 text-align-center"  >$200.00</td>
										<td id="inputfinance-4-7 text-align-center"  >$200.00</td>
									    <td id="inputfinance-5-7 text-align-center"  >$200.00</td>
										<td id="inputfinance-6-7 text-align-center"  >$200.00</td>
									    <td id="inputfinance-7-7 text-align-center" >$200.00</td>
										<td id="inputfinance-8-7 text-align-center" >$200.00</td>
									    <td id="inputfinance-9-7 text-align-center"  >$200.00</td>
										<td id="inputfinance-10-7 text-align-center" >$200.00</td>
									    <td id="inputfinance-11-7 text-align-center"  >$200.00</td>
										<td id="inputfinance-12-7 text-align-center" >$200.00</td>
									     <td id="inputfinance-13-7 text-align-center" >$200.00</td>
                                  </tr>
								 </tbody>
								   
                                  <tbody class="body"> 
							
							 <tr class="border-top">
                                  
									  <td id="inputfinance-left-header-8" class="vertical-align-inherit">Employee Contribution</td>
									     <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-2-8" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="200.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-3-8" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-4-8" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="200.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-5-8" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-6-8" class="form-control price  padding-left-0  padding-l-r-8 reinsurance-rates-td text-align-center price" value="200.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-7-8" class="form-control  price padding-left-0  padding-l-r-8 reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-8-8" class="form-control price  padding-left-0  padding-l-r-8 reinsurance-rates-td text-align-center price" value="50.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-9-8" class="form-control  price padding-left-0  padding-l-r-8 reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-10-8" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-11-8" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-12-8" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
									     <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-13-8" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
                                 </tr>
								  <tr class="border-right-left">
                                  
									  <td id="inputfinance-left-header-9" class="vertical-align-inherit">Cobra Premium</td>
									     <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-2-9" class="form-control  price padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="200.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-3-9" class="form-control  price padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-4-9" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="200.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-5-9" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-6-9" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="200.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-7-9" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-8-9" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-9-9" class="form-control  price padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-10-9" class="form-control  price padding-left-0  padding-l-r-8 reinsurance-rates-td text-align-center price" value="50.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-11-9" class="form-control  price padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-12-9" class="form-control price  padding-left-0  padding-l-r-8 reinsurance-rates-td text-align-center price" value="50.00"></div></td>
									     <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-13-9" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
                                 </tr>
								  <tr class="border-bottom">
                                  
									  <td id="inputfinance-left-header-10" class="vertical-align-inherit">Member Copays,Coinsurance and Deductibles</td>
									     <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-2-10" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="200.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-3-10" class="form-control price  padding-left-0  padding-l-r-8 reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-4-10" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="200.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-5-10" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-6-10" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="200.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-7-10" class="form-control  price padding-left-0  padding-l-r-8 reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-8-10" class="form-control price  padding-left-0  padding-l-r-8 reinsurance-rates-td text-align-center price" value="50.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-9-10" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-10-10" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
									    <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-11-10" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
										<td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-12-10" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
									     <td><div class="input-group"><span class="input-group-addon padding-left-4 padding-right-4"><i class="fa fa-usd  color-black"></i></span><input type="text" id="inputfinance-13-10" class="form-control price  padding-left-0 padding-l-r-8  reinsurance-rates-td text-align-center price" value="50.00"></div></td>
                                 </tr>
                                  </tbody>
                                  
                                
                                  <tbody class="body">
                                  
                              <tr class="header-td back-gray color-white">
                               <td class="header-td" id="inputfinance-left-header-11">Net Total</td>
                               <td class="column-1 column-td text-align-center"  id="inputfinance-2-11" >$110.00</td>
                                <td class="column-2 column-td text-align-center"  id="inputfinance-3-11" >$50.00</td>
                                <td class="column-3 column-td text-align-center"  id="inputfinance-4-11" >$250.00</td>
                                <td class="column-4 column-td text-align-center"  id="inputfinance-5-11" >$250.00</td>
                                <td class="column-5 column-td text-align-center"  id="inputfinance-6-11" >$250.00</td>
                                <td class="column-6 column-td text-align-center"  id="inputfinance-7-11" >$110.00</td>
                                <td class="column-7 column-td text-align-center"  id="inputfinance-8-11" >$110.00</td>
                                <td class="column-8 column-td text-align-center"  id="inputfinance-9-11" >$225.00</td>
                                <td class="column-9 column-td text-align-center"  id="inputfinance-10-11" >$200.00</td>
                                <td class="column-10 column-td text-align-center"  id="inputfinance-11-11" >$222.00</td>
                                <td class="column-11 column-td text-align-center"  id="inputfinance-12-11" >$222.00</td>
                                <td class="column-12 column-td text-align-center"  id="inputfinance-13-11" >$222.00</td>
                            </tr>
                            </tbody>
							
							  
                        </table>
									
											
							</div>
							</div>
							<div class="col-md-12 padding-0 bg-sky-blue " align="right" style="border-top:none;">
								
								<div class="modal-footer-btn padding-15">
								
								 <button type="button" class="btn btn-modal-blue"  onclick="previousButton(9);">&lt; Previous</button>
								  &nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-modal-blue " onclick="nextButton(10);">Save and Next &gt; </button>
							&nbsp;&nbsp;&nbsp;<a type="button" class="btn btn-default pull-right" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/firm-plan/client-plan-years?id=1">Cancel</a>
								
								
								</div>
								</div>
						
						</div>
						
						<div class="tab-pane  " id="large_claims" role="tabpanel">
						<div class="border-top-bottom-ddd col-md-12 padding-0">
							<div class="container margin-top-10 margin-bottom-10">
							
							<div class="row">
							<div class="col-md-12 col-xs-12 padding-top-10 padding-bottom-10">
							<div class="col-md-2 col-xs-3 padding-left-8"><label class="margin-top-10"> Plan Year Data As of :</label></div>
								<div class="col-md-4 col-xs-7">
								<select class="form-control" id="claim_value">
								<option value="">January 2017</option>
								<option value="">February 2017</option>
								<option value="">March 2017</option></select>
								</div>
								<div class="col-md-6 col-xs-2 margin-top-10" align="right">
								<a class="color-blue"> <u class="pull-right" id="create-claim" href="#create_claim"
										data-toggle="modal">Add New Claimant</u></a>
										
								
								</div>
								</div>
								</div>
															<div class="col-md-12 padding-0">
															
													<table class="table table-hover table-backcolor" id="editable_cost_items" style="table-layout:fixed;">
                            <thead>
                                <tr> 
                                   
									<th class="text-align-center" id="largeclaims-column-1">#</th>
									<th class="text-align-center" id="largeclaims-column-2">Claimant Id</th>
									<th class="text-align-center" id="largeclaims-column-3">Enrollment Status</th>
									<th class="text-align-center" id="largeclaims-column-4">Member Type</th>
									<th class="text-align-center" id="largeclaims-column-5">Age</th>
									<th class="text-align-center" id="largeclaims-column-6">Gender</th>
									<th class="text-align-center" id="largeclaims-column-7">Plan Claims</th>
									<th class="text-align-center" id="largeclaims-column-8">Condition</th>
									<th class="text-align-center" id="largeclaims-column-9">Prognosis</th>
                                     
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                
									  <td id="largeclaims-left-header-1" class="text-align-center">1</td>
									   <td><input type="text" id="largeclaims-2-1" class="form-control reinsurance-rates-td text-align-center" value="7899665"></td>
									    <td><input type="text" id="largeclaims-3-1" class="form-control reinsurance-rates-td text-align-center" value="Active"></td>
										<td><input type="text" id="largeclaims-4-1" class="form-control reinsurance-rates-td text-align-center" value="Employee"></td>
										<td><input type="text" id="largeclaims-5-1" class="form-control reinsurance-rates-td text-align-center" value="24"></td>
										<td><input type="text" id="largeclaims-6-1" class="form-control reinsurance-rates-td text-align-center" value="Male"></td>
										<td><input type="text" id="largeclaims-7-1" class="form-control reinsurance-rates-td text-align-center" value="17,8,222.00"></td>
										<td><input type="text" id="largeclaims-8-1" class="form-control reinsurance-rates-td text-align-center" value="Cancer"></td>
										<td><input type="text" id="largeclaims-9-1" class="form-control reinsurance-rates-td text-align-center" value="10000 Next Year"></td>
									
                                  </tr>
                                 
                                     <tr>
                                  
									  <td id="largeclaims-left-header-2" class="text-align-center">2</td>
									   <td><input type="text" id="largeclaims-2-2" class="form-control reinsurance-rates-td text-align-center" value="7899665"></td>
									    <td><input type="text" id="largeclaims-3-2" class="form-control reinsurance-rates-td text-align-center" value="Active"></td>
										<td><input type="text" id="largeclaims-4-2" class="form-control reinsurance-rates-td text-align-center" value="Employee"></td>
										<td><input type="text" id="largeclaims-5-2" class="form-control reinsurance-rates-td text-align-center" value="24"></td>
										<td><input type="text" id="largeclaims-6-2" class="form-control reinsurance-rates-td text-align-center" value="Male"></td>
										<td><input type="text" id="largeclaims-7-2" class="form-control reinsurance-rates-td text-align-center" value="17,8,222.00"></td>
										<td><input type="text" id="largeclaims-8-2" class="form-control reinsurance-rates-td text-align-center" value="Cancer"></td>
										<td><input type="text" id="largeclaims-9-2" class="form-control reinsurance-rates-td text-align-center" value="10000 Next Year"></td>
									     
                                  </tr>
								   
                            </tbody>
                        </table>
					 
																<!-- <div class="demo-container largeclaims"
																	style="margin-top: 10px;">
																	<div dx-data-grid="dataGridOptionslargeclaims"></div>
																</div>-->

															</div>
						</div>
								</div>
						<div class="col-md-12 padding-0 bg-sky-blue " align="right" style="border-top:none;">
								
								<div class="modal-footer-btn padding-15">
								
								 <button type="button" class="btn btn-modal-blue"  onclick="previousButton(10);">&lt; Previous</button>
								  &nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-modal-blue " onclick="nextButton(11);">Save and Next &gt; </button>
							&nbsp;&nbsp;&nbsp;<a type="button" class="btn btn-default pull-right" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/firm-plan/client-plan-years?id=1">Cancel</a>
								
								
								</div>
								</div>
						</div>
						
						
						
						
						<div class="tab-pane  " id="network_performance" role="tabpanel">
						<div class="border-top-bottom-ddd col-md-12 padding-0">
							<div class="container margin-top-10 margin-bottom-10">
								<div class="col-md-12">
							<div class="col-md-1">
							</div>
							<div class="col-md-10">
							<fieldset class="fieldset-box">

											<legend>Network performance</legend>
							<div class="col-md-12">
								<table class="table table-hover table-backcolor" id="editable_cost_items" style="table-layout:fixed;">
                            <thead>
                                <tr> 
                                   
									<th class="text-align-center" id="network-column-1">Utilization</th>
									<th class="text-align-center" id="network-column-2">Amount</th>
								 
                                     
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
									  <td id="network-left-header-1" class="text-align-center">Network Utilization %</td>
									   <td><input type="text" id="network-2-1" class="form-control reinsurance-rates-td text-align-center" value="95%"></td>
                                  </tr>
                                 
                                   <tr>
									  <td id="network-left-header-2" class="text-align-center">Total Sumitted Charges</td>
									   <td><input type="text" id="network-2-2" class="form-control reinsurance-rates-td text-align-center" value="1000"></td>
                                  </tr>
								  
								  <tr>
									  <td id="network-left-header-3" class="text-align-center">Total Allowed Charges</td>
									   <td><input type="text" id="network-2-3" class="form-control reinsurance-rates-td text-align-center" value="25000"></td>
                                  </tr>
								  <tr>
									  <td id="network-left-header-4" class="text-align-center">Total Savings</td>
									   <td><input type="text" id="network-2-4" class="form-control reinsurance-rates-td text-align-center" value="150000"></td>
                                  </tr>
								  <tr>
									  <td id="network-left-header-5" class="text-align-center">Discount %</td>
									   <td><input type="text" id="network-2-5" class="form-control reinsurance-rates-td text-align-center" value="34.7%"></td>
                                  </tr>
								   
                            </tbody>
                        </table>
					 
					 
					 
						
						
						<!--	<div class="demo-container " style="margin-top: 10px;">
																<div dx-data-grid="dataGridOptionsnetworkperfomance"></div>
															</div>-->
															<div class="row">
							<div class="col-md-12 col-xs-12 padding-top-10 padding-bottom-10">
							<div class="col-md-4 col-xs-3 padding-left-8"><label class="margin-top-10"> Plan Year Data As of :</label></div>
								<div class="col-md-6 col-xs-7">
								<select class="form-control" id="claim_value">
								<option value="">January 2017</option>
								<option value="">February 2017</option>
								<option value="">March 2017</option></select>
								</div>
								<div class="col-md-6 col-xs-2 margin-top-10" align="right">
								
								</div>
								</div>
								</div>
								</div>
								</fieldset>
							
							</div>
							<div class="col-md-1">
							</div>
							
							</div>
 
															<div class="row">
							 
								</div>
							</div>
								</div>
						<div class="col-md-12 padding-0 bg-sky-blue " align="right" style="border-top:none;">
								
								<div class="modal-footer-btn padding-15">
								
								 <button type="button" class="btn btn-modal-blue"  onclick="previousButton(11);">&lt; Previous</button>
								  &nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-modal-blue " onclick="nextButton(12);">Save and Next &gt; </button>
							&nbsp;&nbsp;&nbsp;<a type="button" class="btn btn-default pull-right" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/firm-plan/client-plan-years?id=1">Cancel</a>
								
								
								</div>
								</div>
						</div>
						
						<div class="tab-pane  " id="pharmacy_performance" role="tabpanel">
						<div class="border-top-bottom-ddd col-md-12 padding-0">
							<div class="container margin-top-10 margin-bottom-10">
							 <div class="col-md-12">
							<div class="col-md-12">
							<div class="col-md-1">
							</div>
							<div class="col-md-10">
							
							<fieldset class="fieldset-box"> 
											<legend>Pharmacy performance</legend>
											<div class="row">
							<div class="col-md-12 col-xs-12 padding-top-10 padding-bottom-10">
							<div class="col-md-6 col-xs-3 padding-left-8"><label class="margin-top-10"> Plan Year Data As of :</label></div>
								<div class="col-md-6 col-xs-7">
								<select class="form-control" id="claim_value">
								<option value="">January 2017</option>
								<option value="">February 2017</option>
								<option value="">March 2017</option></select>
								</div>
							 
								</div>
								</div>
															<div class="col-md-12 padding-0">
															
							<table class="table table-hover table-backcolor" id="" style="table-layout:fixed;">
                            <thead>
                                <tr> 
                                   
									<th class="text-align-center" id="pharmacy-column-1">Description of Item</th>
									<th class="text-align-center" id="pharmacy-column-2">Percentage or Amount</th>
								 
                                     
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
									  <td id="pharmacy-left-header-1" class="text-align-center">Total Prescriptions</td>
									   <td><input type="text" id="pharmacy-2-1" class="form-control reinsurance-rates-td text-align-center" value="125"></td>
                                  </tr>
                                 
                                   <tr>
									  <td id="pharmacy-left-header-2" class="text-align-center">Generic Filled</td>
									   <td><input type="text" id="pharmacy-2-2" class="form-control reinsurance-rates-td text-align-center" value="100"></td>
                                  </tr>
								  
								  <tr>
									  <td id="pharmacy-left-header-3" class="text-align-center">Mail Order</td>
									   <td><input type="text" id="pharmacy-2-3" class="form-control reinsurance-rates-td text-align-center" value="50"></td>
                                  </tr>
								  <tr>
									  <td id="pharmacy-left-header-4" class="text-align-center">Formulary Brand Compliance Rate</td>
									   <td><input type="text" id="pharmacy-2-4" class="form-control reinsurance-rates-td text-align-center" value="12.5%"></td>
                                  </tr>
								  <tr>
									  <td id="pharmacy-left-header-5" class="text-align-center">Average Brand Discount</td>
									   <td><input type="text" id="pharmacy-2-5" class="form-control reinsurance-rates-td text-align-center" value="34.7%"></td>
                                  </tr>
								    <tr>
									  <td id="pharmacy-left-header-6" class="text-align-center">Average Generic Discount</td>
									   <td><input type="text" id="pharmacy-2-6" class="form-control reinsurance-rates-td text-align-center" value="34.7%"></td>
                                  </tr>
								   
                            </tbody>
                        </table>
						
		
															</div>
											</fieldset>
						
							</div>
						<div class="col-md-1">
							</div>
						</div>
							<div class="col-md-12">
							<div class="col-md-1">
							</div>
							<div class="col-md-10">
							<fieldset class="fieldset-box margin-top-10"> 
											<legend>Pharmacy performance</legend>
											<div class="row">
							<div class="col-md-12 col-xs-12 padding-top-10 padding-bottom-10">
							<div class="col-md-3 col-xs-3 padding-left-8"><label class="margin-top-10"> Plan Year Data As of :</label></div>
								<div class="col-md-4 col-xs-7">
								<select class="form-control" id="claim_value">
								<option value="">January 2017</option>
								<option value="">February 2017</option>
								<option value="">March 2017</option></select>
								</div>
								<div class="col-md-4 col-xs-2 margin-top-10" align="right">
								<a class="color-blue"> <u class="pull-right" id="drug-details" href="#drug_details"
										data-toggle="modal">Add</u></a>
								</div>
								</div>
								</div>
															<div class="col-md-12 padding-0">
															
															<table class="table table-hover table-backcolor" id="" style="table-layout:fixed;">
                            <thead>
                                <tr> 
                                   
									<th class="text-align-center" id="pharmacymedical-column-1">Top 20</th>
									<th class="text-align-center" id="pharmacymedical-column-2">Drug Name</th>
									<th class="text-align-center" id="pharmacymedical-column-3">Condition</th>
									<th class="text-align-center" id="pharmacymedical-column-4">Plan Spend</th>
									<th class="text-align-center" id="pharmacymedical-column-5">Unique Numbers</th>
								 
                                     
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
									  <td id="pharmacymedical-left-header-1" class="text-align-center">1</td>
									   <td> <div class="typeahead__container">
                                <div class="typeahead__field">
                                    <div class="typeahead__query">
                                        <div class="input-group">
                                            <input type="text" id="pharmacymedical-2-1" class="form-control reinsurance-rates-td text-align-center example1"  name="" autocomplete="off"  value="capecitabine"
                                                   autocomplete="off" />
                                            <span class="input-group-btn">
                                               
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           </td>
									    <td><input type="text" id="pharmacymedical-3-1" class="form-control reinsurance-rates-td text-align-center" value="Cancer"></td>
										 <td><input type="text" id="pharmacymedical-4-1" class="form-control reinsurance-rates-td text-align-center" value="4,75,522"></td>
										  <td><input type="text" id="pharmacymedical-5-1" class="form-control reinsurance-rates-td text-align-center" value="12"></td>
                                  </tr>
								    <tr>
									  <td id="pharmacymedical-left-header-2" class="text-align-center">2</td>
									   <td><div class="typeahead__container">
                                <div class="typeahead__field">
                                    <div class="typeahead__query">
                                        <div class="input-group">
                                            <input type="text" id="pharmacymedical-2-2" class="form-control reinsurance-rates-td text-align-center example2"  name="" autocomplete="off"  value="capecitabine"
                                                   autocomplete="off" />
                                            <span class="input-group-btn">
                                               
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div></td>
									    <td><input type="text" id="pharmacymedical-3-2" class="form-control reinsurance-rates-td text-align-center" value="Cancer"></td>
										 <td><input type="text" id="pharmacymedical-4-2" class="form-control reinsurance-rates-td text-align-center" value="4,75,522"></td>
										  <td><input type="text" id="pharmacymedical-5-2" class="form-control reinsurance-rates-td text-align-center" value="12"></td>
                                  </tr>
								    <tr>
									  <td id="pharmacymedical-left-header-3" class="text-align-center">3</td>
									   <td><div class="typeahead__container">
                                <div class="typeahead__field">
                                    <div class="typeahead__query">
                                        <div class="input-group">
                                            <input type="text" id="pharmacymedical-2-3" class="form-control reinsurance-rates-td text-align-center example3"  name="" autocomplete="off"  value="capecitabine"
                                                   autocomplete="off" />
                                            <span class="input-group-btn">
                                               
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div></td>
									    <td><input type="text" id="pharmacymedical-3-3" class="form-control reinsurance-rates-td text-align-center" value="Cancer"></td>
										 <td><input type="text" id="pharmacymedical-4-3" class="form-control reinsurance-rates-td text-align-center" value="4,75,522"></td>
										  <td><input type="text" id="pharmacymedical-5-3" class="form-control reinsurance-rates-td text-align-center" value="12"></td>
                                  </tr>
								    <tr>
									  <td id="pharmacymedical-left-header-4" class="text-align-center">4</td>
									   <td><div class="typeahead__container">
                                <div class="typeahead__field">
                                    <div class="typeahead__query">
                                        <div class="input-group">
                                            <input type="text" id="pharmacymedical-2-4" class="form-control reinsurance-rates-td text-align-center example4"  name="" autocomplete="off"  value="capecitabine"
                                                   autocomplete="off" />
                                            <span class="input-group-btn">
                                               
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div></td>
									    <td><input type="text" id="pharmacymedical-3-4" class="form-control reinsurance-rates-td text-align-center" value="Cancer"></td>
										 <td><input type="text" id="pharmacymedical-4-4" class="form-control reinsurance-rates-td text-align-center" value="4,75,522"></td>
										  <td><input type="text" id="pharmacymedical-5-4" class="form-control reinsurance-rates-td text-align-center" value="12"></td>
                                  </tr>
								    <tr>
									  <td id="pharmacymedical-left-header-5" class="text-align-center">5</td>
									   <td><div class="typeahead__container">
                                <div class="typeahead__field">
                                    <div class="typeahead__query">
                                        <div class="input-group">
                                            <input type="text" id="pharmacymedical-2-5" class="form-control reinsurance-rates-td text-align-center example5"  name="" autocomplete="off"  value="capecitabine"
                                                   autocomplete="off" />
                                            <span class="input-group-btn">
                                               
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div></td>
									    <td><input type="text" id="pharmacymedical-3-5" class="form-control reinsurance-rates-td text-align-center" value="Cancer"></td>
										 <td><input type="text" id="pharmacymedical-4-5" class="form-control reinsurance-rates-td text-align-center" value="4,75,522"></td>
										  <td><input type="text" id="pharmacymedical-5-5" class="form-control reinsurance-rates-td text-align-center" value="12"></td>
                                  </tr>
								    <tr>
									  <td id="pharmacymedical-left-header-6" class="text-align-center">6</td>
									   <td><div class="typeahead__container">
                                <div class="typeahead__field">
                                    <div class="typeahead__query">
                                        <div class="input-group">
                                            <input type="text" id="pharmacymedical-2-6" class="form-control reinsurance-rates-td text-align-center example6"  name="" autocomplete="off"  value="capecitabine"
                                                   autocomplete="off" />
                                            <span class="input-group-btn">
                                               
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div></td>
									    <td><input type="text" id="pharmacymedical-3-6" class="form-control reinsurance-rates-td text-align-center" value="Cancer"></td>
										 <td><input type="text" id="pharmacymedical-4-6" class="form-control reinsurance-rates-td text-align-center" value="4,75,522"></td>
										  <td><input type="text" id="pharmacymedical-5-6" class="form-control reinsurance-rates-td text-align-center" value="12"></td>
                                  </tr>
								    <tr>
									  <td id="pharmacymedical-left-header-7" class="text-align-center">7</td>
									   <td><div class="typeahead__container">
                                <div class="typeahead__field">
                                    <div class="typeahead__query">
                                        <div class="input-group">
                                            <input type="text" id="pharmacymedical-2-7" class="form-control reinsurance-rates-td text-align-center example7"  name="" autocomplete="off"  value="capecitabine"
                                                   autocomplete="off" />
                                            <span class="input-group-btn">
                                               
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div></td>
									    <td><input type="text" id="pharmacymedical-3-7" class="form-control reinsurance-rates-td text-align-center" value="Cancer"></td>
										 <td><input type="text" id="pharmacymedical-4-7" class="form-control reinsurance-rates-td text-align-center" value="4,75,522"></td>
										  <td><input type="text" id="pharmacymedical-5-7" class="form-control reinsurance-rates-td text-align-center" value="12"></td>
                                  </tr>
								    <tr>
									  <td id="pharmacymedical-left-header-8" class="text-align-center">8</td>
									   <td><div class="typeahead__container">
                                <div class="typeahead__field">
                                    <div class="typeahead__query">
                                        <div class="input-group">
                                            <input type="text" id="pharmacymedical-2-8" class="form-control reinsurance-rates-td text-align-center example8"  name="" autocomplete="off"  value="capecitabine"
                                                   autocomplete="off" />
                                            <span class="input-group-btn">
                                               
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div></td>
									    <td><input type="text" id="pharmacymedical-3-8" class="form-control reinsurance-rates-td text-align-center" value="Cancer"></td>
										 <td><input type="text" id="pharmacymedical-4-8" class="form-control reinsurance-rates-td text-align-center" value="4,75,522"></td>
										  <td><input type="text" id="pharmacymedical-5-8" class="form-control reinsurance-rates-td text-align-center" value="12"></td>
                                  </tr>
								    <tr>
									  <td id="pharmacymedical-left-header-9" class="text-align-center">9</td>
									   <td><div class="typeahead__container">
                                <div class="typeahead__field">
                                    <div class="typeahead__query">
                                        <div class="input-group">
                                            <input type="text" id="pharmacymedical-2-9" class="form-control reinsurance-rates-td text-align-center example9"  name="" autocomplete="off"  value="capecitabine"
                                                   autocomplete="off" />
                                            <span class="input-group-btn">
                                               
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div></td>
									    <td><input type="text" id="pharmacymedical-3-9" class="form-control reinsurance-rates-td text-align-center" value="Cancer"></td>
										 <td><input type="text" id="pharmacymedical-4-9" class="form-control reinsurance-rates-td text-align-center" value="4,75,522"></td>
										  <td><input type="text" id="pharmacymedical-5-9" class="form-control reinsurance-rates-td text-align-center" value="12"></td>
                                  </tr>  <tr>
									  <td id="pharmacymedical-left-header-10" class="text-align-center">10</td>
									   <td><div class="typeahead__container">
                                <div class="typeahead__field">
                                    <div class="typeahead__query">
                                        <div class="input-group">
                                            <input type="text" id="pharmacymedical-2-10" class="form-control reinsurance-rates-td text-align-center example10"  name="" autocomplete="off"  value="capecitabine"
                                                   autocomplete="off" />
                                            <span class="input-group-btn">
                                               
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div></td>
									    <td><input type="text" id="pharmacymedical-3-10" class="form-control reinsurance-rates-td text-align-center" value="Cancer"></td>
										 <td><input type="text" id="pharmacymedical-4-10" class="form-control reinsurance-rates-td text-align-center" value="4,75,522"></td>
										  <td><input type="text" id="pharmacymedical-5-10" class="form-control reinsurance-rates-td text-align-center" value="12"></td>
                                  </tr>  <tr>
									  <td id="pharmacymedical-left-header-11" class="text-align-center">11</td>
									   <td><div class="typeahead__container">
                                <div class="typeahead__field">
                                    <div class="typeahead__query">
                                        <div class="input-group">
                                            <input type="text" id="pharmacymedical-2-11" class="form-control reinsurance-rates-td text-align-center example11"  name="" autocomplete="off"  value="capecitabine"
                                                   autocomplete="off" />
                                            <span class="input-group-btn">
                                               
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div></td>
									    <td><input type="text" id="pharmacymedical-3-11" class="form-control reinsurance-rates-td text-align-center" value="Cancer"></td>
										 <td><input type="text" id="pharmacymedical-4-11" class="form-control reinsurance-rates-td text-align-center" value="4,75,522"></td>
										  <td><input type="text" id="pharmacymedical-5-11" class="form-control reinsurance-rates-td text-align-center" value="12"></td>
                                  </tr>  <tr>
									  <td id="pharmacymedical-left-header-12" class="text-align-center">12</td>
									   <td><div class="typeahead__container">
                                <div class="typeahead__field">
                                    <div class="typeahead__query">
                                        <div class="input-group">
                                            <input type="text" id="pharmacymedical-2-12" class="form-control reinsurance-rates-td text-align-center example12"  name="" autocomplete="off"  value="capecitabine"
                                                   autocomplete="off" />
                                            <span class="input-group-btn">
                                               
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div></td>
									    <td><input type="text" id="pharmacymedical-3-12" class="form-control reinsurance-rates-td text-align-center" value="Cancer"></td>
										 <td><input type="text" id="pharmacymedical-4-12" class="form-control reinsurance-rates-td text-align-center" value="4,75,522"></td>
										  <td><input type="text" id="pharmacymedical-5-12" class="form-control reinsurance-rates-td text-align-center" value="12"></td>
                                  </tr>  <tr>
									  <td id="pharmacymedical-left-header-13" class="text-align-center">13</td>
									   <td><div class="typeahead__container">
                                <div class="typeahead__field">
                                    <div class="typeahead__query">
                                        <div class="input-group">
                                            <input type="text" id="pharmacymedical-2-13" class="form-control reinsurance-rates-td text-align-center example13"  name="" autocomplete="off"  value="capecitabine"
                                                   autocomplete="off" />
                                            <span class="input-group-btn">
                                               
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div></td>
									    <td><input type="text" id="pharmacymedical-3-13" class="form-control reinsurance-rates-td text-align-center" value="Cancer"></td>
										 <td><input type="text" id="pharmacymedical-4-13" class="form-control reinsurance-rates-td text-align-center" value="4,75,522"></td>
										  <td><input type="text" id="pharmacymedical-5-13" class="form-control reinsurance-rates-td text-align-center" value="12"></td>
                                  </tr>  <tr>
									  <td id="pharmacymedical-left-header-14" class="text-align-center">14</td>
									   <td><div class="typeahead__container">
                                <div class="typeahead__field">
                                    <div class="typeahead__query">
                                        <div class="input-group">
                                            <input type="text" id="pharmacymedical-2-14" class="form-control reinsurance-rates-td text-align-center example14"  name="" autocomplete="off"  value="capecitabine"
                                                   autocomplete="off" />
                                            <span class="input-group-btn">
                                               
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div></td>
									    <td><input type="text" id="pharmacymedical-3-14" class="form-control reinsurance-rates-td text-align-center" value="Cancer"></td>
										 <td><input type="text" id="pharmacymedical-4-14" class="form-control reinsurance-rates-td text-align-center" value="4,75,522"></td>
										  <td><input type="text" id="pharmacymedical-5-14" class="form-control reinsurance-rates-td text-align-center" value="12"></td>
                                  </tr>
								    <tr>
									  <td id="pharmacymedical-left-header-15" class="text-align-center">15</td>
									   <td><div class="typeahead__container">
                                <div class="typeahead__field">
                                    <div class="typeahead__query">
                                        <div class="input-group">
                                            <input type="text" id="pharmacymedical-2-15" class="form-control reinsurance-rates-td text-align-center example15"  name="" autocomplete="off"  value="capecitabine"
                                                   autocomplete="off" />
                                            <span class="input-group-btn">
                                               
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div></td>
									    <td><input type="text" id="pharmacymedical-3-15" class="form-control reinsurance-rates-td text-align-center" value="Cancer"></td>
										 <td><input type="text" id="pharmacymedical-4-15" class="form-control reinsurance-rates-td text-align-center" value="4,75,522"></td>
										  <td><input type="text" id="pharmacymedical-5-15" class="form-control reinsurance-rates-td text-align-center" value="12"></td>
                                  </tr>
								    <tr>
									  <td id="pharmacymedical-left-header-16" class="text-align-center">16</td>
									   <td><div class="typeahead__container">
                                <div class="typeahead__field">
                                    <div class="typeahead__query">
                                        <div class="input-group">
                                            <input type="text" id="pharmacymedical-2-16" class="form-control reinsurance-rates-td text-align-center example16"  name="" autocomplete="off"  value="capecitabine"
                                                   autocomplete="off" />
                                            <span class="input-group-btn">
                                               
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div></td>
									    <td><input type="text" id="pharmacymedical-3-16" class="form-control reinsurance-rates-td text-align-center" value="Cancer"></td>
										 <td><input type="text" id="pharmacymedical-4-16" class="form-control reinsurance-rates-td text-align-center" value="4,75,522"></td>
										  <td><input type="text" id="pharmacymedical-5-16" class="form-control reinsurance-rates-td text-align-center" value="12"></td>
                                  </tr>
								    <tr>
									  <td id="pharmacymedical-left-header-17" class="text-align-center">17</td>
									   <td><div class="typeahead__container">
                                <div class="typeahead__field">
                                    <div class="typeahead__query">
                                        <div class="input-group">
                                            <input type="text" id="pharmacymedical-2-17" class="form-control reinsurance-rates-td text-align-center example17"  name="" autocomplete="off"  value="capecitabine"
                                                   autocomplete="off" />
                                            <span class="input-group-btn">
                                               
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div></td>
									    <td><input type="text" id="pharmacymedical-3-17" class="form-control reinsurance-rates-td text-align-center" value="Cancer"></td>
										 <td><input type="text" id="pharmacymedical-4-17" class="form-control reinsurance-rates-td text-align-center" value="4,75,522"></td>
										  <td><input type="text" id="pharmacymedical-5-17" class="form-control reinsurance-rates-td text-align-center" value="12"></td>
                                  </tr>
								    <tr>
									  <td id="pharmacymedical-left-header-18" class="text-align-center">18</td>
									   <td><div class="typeahead__container">
                                <div class="typeahead__field">
                                    <div class="typeahead__query">
                                        <div class="input-group">
                                            <input type="text" id="pharmacymedical-2-18" class="form-control reinsurance-rates-td text-align-center example18"  name="" autocomplete="off"  value="capecitabine"
                                                   autocomplete="off" />
                                            <span class="input-group-btn">
                                               
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div></td>
									    <td><input type="text" id="pharmacymedical-3-18" class="form-control reinsurance-rates-td text-align-center" value="Cancer"></td>
										 <td><input type="text" id="pharmacymedical-4-18" class="form-control reinsurance-rates-td text-align-center" value="4,75,522"></td>
										  <td><input type="text" id="pharmacymedical-5-18" class="form-control reinsurance-rates-td text-align-center" value="12"></td>
                                  </tr>
								    <tr>
									  <td id="pharmacymedical-left-header-19" class="text-align-center">19</td>
									   <td><div class="typeahead__container">
                                <div class="typeahead__field">
                                    <div class="typeahead__query">
                                        <div class="input-group">
                                            <input type="text" id="pharmacymedical-2-19" class="form-control reinsurance-rates-td text-align-center example19"  name="" autocomplete="off"  value="capecitabine"
                                                   autocomplete="off" />
                                            <span class="input-group-btn">
                                               
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div></td>
									    <td><input type="text" id="pharmacymedical-3-19" class="form-control reinsurance-rates-td text-align-center" value="Cancer"></td>
										 <td><input type="text" id="pharmacymedical-4-19" class="form-control reinsurance-rates-td text-align-center" value="4,75,522"></td>
										  <td><input type="text" id="pharmacymedical-5-19" class="form-control reinsurance-rates-td text-align-center" value="12"></td>
                                  </tr>
								    <tr>
									  <td id="pharmacymedical-left-header-20" class="text-align-center">20</td>
									   <td><div class="typeahead__container">
                                <div class="typeahead__field">
                                    <div class="typeahead__query">
                                        <div class="input-group">
                                            <input type="text" id="pharmacymedical-2-20" class="form-control reinsurance-rates-td text-align-center example20"  name="" autocomplete="off"  value="capecitabine"
                                                   autocomplete="off" />
                                            <span class="input-group-btn">
                                               
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div></td>
									    <td><input type="text" id="pharmacymedical-3-20" class="form-control reinsurance-rates-td text-align-center" value="Cancer"></td>
										 <td><input type="text" id="pharmacymedical-4-20" class="form-control reinsurance-rates-td text-align-center" value="4,75,522"></td>
										  <td><input type="text" id="pharmacymedical-5-20" class="form-control reinsurance-rates-td text-align-center" value="12"></td>
                                  </tr>
								  <tr>
									  <td class="text-align-center"></td>
									   <td></td>
									    <td></td>
										 <td class="text-align-center">4,54,578,42.00</td>
										  <td></td>
                                  </tr>
								  
                                  
								   
                            </tbody>
                        </table>
						
														

															</div>
											</fieldset>
							
							</div>
							<div class="col-md-1">
							</div>
							</div>
							 
							 
							</div>						 
														
							</div>
								</div>
						<div class="col-md-12 padding-0 bg-sky-blue " align="right" style="border-top:none;">
								
								<div class="modal-footer-btn padding-15">
								
								 <button type="button" class="btn btn-modal-blue"  onclick="previousButton(12);">&lt; Previous</button>
								  &nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-modal-blue " onclick="nextButton(13);">Save and Next &gt; </button>
							&nbsp;&nbsp;&nbsp;<a type="button" class="btn btn-default pull-right" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/firm-plan/client-plan-years?id=1">Cancel</a>
								
								
								</div>
								</div>
						</div>
						
						
						
						
						</div>
								</div>
						
				</div>
				<div class="tab-pane" id="generate_reports_block">
						<div class="col-md-12  padding-10 ul-block">
						<ul class="nav nav-pills nav-wizard">
							<li href="#" data-toggle="tab" class="active inner-block-li"><a href="#" data-toggle="tab"><div class="inner-block-digits pull-left">1</div><span class="inner-block-text">Reports</span></a></li>
						</ul>
						</div>
						<div class="border-top-bottom-ddd col-md-12 padding-0">
						<div class="container margin-top-10 margin-bottom-10">
						<?php
								
$resultData = [
    array("sno"=>"1","reporttitle"=>"Claims Trend Report","reportdescription"=>"Claims Trend Report","dataavailable"=>"Yes","generatedon"=>"1st May 2017 9:00 am"),
    array("sno"=>"2","reporttitle"=>"Plan Year Claims Only Report","reportdescription"=>"Plan Year Claims Only Report","dataavailable"=>"Yes","generatedon"=>"1st May 2017 9:00 am"),
	 array("sno"=>"3","reporttitle"=>"Plan Year Total Report","reportdescription"=>"Plan Year Total Report","dataavailable"=>"Yes","generatedon"=>"1st May 2017 9:00 am"),
	  array("sno"=>"4","reporttitle"=>"Budget Report","reportdescription"=>"Budget Report","dataavailable"=>"Yes","generatedon"=>"1st May 2017 9:00 am"),
	   array("sno"=>"5","reporttitle"=>"Year Over Year Report","reportdescription"=>"Year Over Year Report","dataavailable"=>"Yes","generatedon"=>"1st May 2017 9:00 am"),
	   array("sno"=>"6","reporttitle"=>"Remainder Year Project Report","reportdescription"=>"Remainder Year Project Report","dataavailable"=>"Yes","generatedon"=>"1st May 2017 9:00 am"),
	   array("sno"=>"7","reporttitle"=>"Med Rx-Renewal Project Report","reportdescription"=>"Med Rx-Renewal Project Report","dataavailable"=>"Yes","generatedon"=>"1st May 2017 9:00 am"),
	   array("sno"=>"8","reporttitle"=>"Stop Loss Analyser Report","reportdescription"=>"Stop Loss Analyser Report","dataavailable"=>"Yes","generatedon"=>"1st May 2017 9:00 am"),
	   array("sno"=>"9","reporttitle"=>"50 % of Spec Report","reportdescription"=>"50 % of Spec Report","dataavailable"=>"Yes","generatedon"=>"1st May 2017 9:00 am"),
	 ];

function filter2($item) {
    $mailfilter = Yii::$app->request->getQueryParam('website', '');
    if (strlen($mailfilter) > 0) {
        if (strpos($item['website'], $mailfilter) != false) {
            return true;
            
        } else {

            return false;
        }
    } else {
        return true;
    }
}

$filteredresultData = array_filter($resultData, 'filter2');
/*
$userfilter = Yii::$app->request->getQueryParam('user', '');
$usertypefilter = Yii::$app->request->getQueryParam('usertype', '');
$mailfilter = Yii::$app->request->getQueryParam('website', '');
$namefilter = Yii::$app->request->getQueryParam('helppressed', '');
$statusfilter = Yii::$app->request->getQueryParam('filterstatus', '');

$searchModel = ['user' =>$userfilter  ,'usertype' =>$usertypefilter  ,'website' => $mailfilter, 'help' => $namefilter,'contact'=>$statusfilter];
*/
$dataProvider = new ArrayDataProvider([
        
        'allModels' => $filteredresultData,
        'sort' => [
            'attributes' => [ 'reporttitle', 'reportdescription','dataavailable','generatedon' ],
        ],
]);

$gridColumns = [
 [
            "attribute" => "sno",
'headerOptions' => ['class' => 'back-report-header'],
            'filter' => false,
           'value' =>'sno',
			'format'=>'raw',
            'label' => 'Sl. No',
            ],
            [
            "attribute" => "reporttitle",
'headerOptions' => ['class' => 'back-report-header'],
            'filter' => false,
           'value' => function ($model, $key, $index, $widget) {
				
					 $user_name = '<a  href="#" data-toggle="modal" class="color-blue pull-left"><u>'.$model['reporttitle'].'</u></a>';	
				 
															 
				 return $user_name;
					},
					'format'=>'raw',
'label' => 'Report Title',
            ],
     [
            "attribute" => "reportdescription",
'headerOptions' => ['class' => 'back-report-header'],
            'filter' => false,
           'value' => function ($model, $key, $index, $widget) {
				
					 $user_name = '<a  href="#" data-toggle="modal" class="color-black pull-left">'.$model['reportdescription'].'</a>';	
				 
															 
				 return $user_name;
					},
					'format'=>'raw',
'label' => 'Report Description',
            ],
			    [
            "attribute" => "dataavailable",
'headerOptions' => ['class' => 'back-report-header'],
            'filter' => false,
           'value' => function ($model, $key, $index, $widget) {
				
					 $user_name = '<a  href="#" data-toggle="modal" class="color-black pull-left">'.$model['dataavailable'].'</a>';	
				 
															 
				 return $user_name;
					},
					'format'=>'raw',
'label' => 'Data Available For Report Generate ?',
            ],
			    [
            "attribute" => "generatedon",
'headerOptions' => ['class' => 'back-report-header'],
            'filter' => false,
           'value' => function ($model, $key, $index, $widget) {
				
					 $user_name = '<a  href="#" data-toggle="modal" class="color-black pull-left">'.$model['generatedon'].'</a>';	
				 
															 
				 return $user_name;
					},
					'format'=>'raw',
'label' => 'Report Generated On',
            ],
			
			 [
            "attribute" => "actions",
'headerOptions' => ['class' => 'back-report-header'],
            'filter' => false,
           'value' => function ($model, $key, $index, $widget) {
			switch($model['sno']){
				
				case 1:
				$value = '<a id="modal-claim_report" href="#claims_trend_report_modal" data-toggle="modal"><i class="fa fa-eye padding-5" data-toggle="tooltip" data-placement="Top" title="View" style="color:#27a4b0""></i></a>';
				break;
				case 2:
				$value = '<a id="modal-plan_year_claim" href="#plan_year_claim_modal" data-toggle="modal"><i class="fa fa-eye padding-5" data-toggle="tooltip" data-placement="Top" title="View" style="color:#27a4b0""></i></a>';
				break;
				case 3:
				$value = '<a id="modal-plan_year_total" href="#total_plan_year_claim_modal" data-toggle="modal"><i class="fa fa-eye padding-5" data-toggle="tooltip" data-placement="Top" title="View" style="color:#27a4b0""></i></a>';
				break;
				case 4:
				$value = '<a id="modal-buget_report" href="#buget_report_modal" data-toggle="modal"><i class="fa fa-eye padding-5" data-toggle="tooltip" data-placement="Top" title="View" style="color:#27a4b0""></i></a>';
				break;
				case 5:
				$value = '<a id="modal-year_over_year" href="#year_over_year_modal" data-toggle="modal"><i class="fa fa-eye padding-5" data-toggle="tooltip" data-placement="Top" title="View" style="color:#27a4b0""></i></a>';
				break;
				case 6:
				$value = '<a id="modal-remiander_year" href="#remiander_year_modal" data-toggle="modal"><i class="fa fa-eye padding-5" data-toggle="tooltip" data-placement="Top" title="View" style="color:#27a4b0""></i></a>';
				break;
				case 7:
				$value = '<a id="modal-med_rx" href="#renewal_med_rx_modal" data-toggle="modal"><i class="fa fa-eye padding-5" data-toggle="tooltip" data-placement="Top" title="View" style="color:#27a4b0""></i></a>';
				break;
				case 8:
				$value = '<a id="modal-stop_loss" href="#stop_loss_modal" data-toggle="modal"><i class="fa fa-eye padding-5" data-toggle="tooltip" data-placement="Top" title="View" style="color:#27a4b0""></i></a>';
				break;
				case 9:
				$value = '<a id="modal-spec_report" href="#spec_report_modal" data-toggle="modal"><i class="fa fa-eye padding-5" data-toggle="tooltip" data-placement="Top" title="View" style="color:#27a4b0""></i></a>';
				break;
				 
				
				
			}
			
					 $user_name = $value.'<i class="fa fa-download padding-5" data-toggle="tooltip" data-placement="Top" title="Download PDF"  style="color:#27a4b0"></i>
					 <i class="fa fa-envelope padding-5" aria-hidden="true" data-toggle="tooltip" data-placement="Top" title="eMail Report" style="color:#27a4b0"></i>
					 <i class="fa fa-exchange padding-5" aria-hidden="true" data-toggle="tooltip" data-placement="Top" title="Recereate Report"  style=" color:#27a4b0"></i>';	
				 
															 
				 return $user_name;
					},
					'format'=>'raw',
'label' => 'Actions',
'width'=>'130px',
            ],
			
/*[
'attribute' => 'date',
'format'=>'date',
'filterType'=> \kartik\grid\GridView::FILTER_DATE_RANGE,
'filterWidgetOptions' => [
'presetDropdown' => true,
'pluginOptions' => [
'format' => 'YYYY-MM-DD',
'separator' => ' TO ',
'opens'=>'left',
] ,
'pluginEvents' => [
"apply.daterangepicker" => "function() { apply_filter('date') }",
]
],
],*/
			];
							echo GridView::widget([
		'dataProvider' => $dataProvider,
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
				</div>
			</div>
		</div>
	</div>
		</div>
		<!-- page Content end-->
	</section>
	
		<!-- section end here-->	
	 
 
<script 
		src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.2/jszip.min.js"></script>
	<script
		src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.16/angular.min.js"></script>
	<script src="https://cdn3.devexpress.com/jslib/16.2.4/js/dx.all.js"></script>

	
<script type="text/javascript"
	src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/design/firm/medicalfullyplandetails.js"></script>
	<script type="text/javascript"
	src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/design/reports/cliams-trend-report.js"></script>
	 
		
		
		
				
<div class="modal fade" id="create_claim" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header modal-header-color">
							 
							<button type="button" class="close-modal modal-opacity  close-modal-blue" data-dismiss="modal" aria-hidden="true">
								X
							</button>
							<h4 class="modal-title color-white" id="myModalLabel">
								Create New Claim
							</h4>
						</div>
						<div class="modal-body row">
							<form>
 <div class="col-md-12">
						   <div class="col-md-6">
						    <div class="row">
													<div class="col-md-4 form-group ">
														<label class="form-control-label" for="l0">Member Type
															Locations *</label>
													</div>
													<div class="col-md-8 form-group ">
														<input type="text" class="form-control"
															 >
													</div>
												</div>
						    
					
						   </div>
						   <div class="col-md-6">
						    	<div class="row">
													<div class="col-md-4 form-group">
														<label class="form-control-label" for="l0">Enrollment Status *</label>
													</div>
													<div class="col-md-8 form-group ">
														<select class="form-control">
															<option selected>Active</option>
															<option>Inactive</option>
															
														</select>
													</div>
												</div>
						
						   </div>
						   </div>
						   
									

  <div class="col-md-12">
						   <div class="col-md-6">
						   <div class="row">
													<div class="col-md-4 form-group">
														<label class="form-control-label" for="l0">Age *</label>
													</div>
													<div class="col-md-8 form-group ">
														<input type="text" class="form-control" 
															 >
													</div>
												</div>
						   </div>
						   <div class="col-md-6">
						   <div class="row">

													<div class="col-md-4 form-group">
														<label class="form-control-label" for="l0">Gender *</label>
													</div>
													<div class="col-md-8 form-group ">
														<select class="form-control">
															<option selected>Male</option>
															<option>Female</option>
															<option>Other</option>
														</select>
													</div>

												 

												</div>
						   </div>
						   </div>	
						   
						    <div class="col-md-12">
						   <div class="col-md-6">
						   <div class="row">
													<div class="col-md-4 form-group">
														<label class="form-control-label" for="l0">Plan Claims *</label>
													</div>
													<div class="col-md-8 form-group ">
														<input type="text" class="form-control" 
															 >
													</div>
												</div>
						   </div>
						   <div class="col-md-6">
						   <div class="row">

													<div class="col-md-4 form-group">
														<label class="form-control-label" for="l0">Condition *</label>
													</div>
													<div class="col-md-8 form-group ">
														<input type="text" class="form-control" 
															 >
													</div>

												 

												</div>
						   </div>
						   </div>
						   
						     <div class="col-md-12">
						   <div class="col-md-6">
						   <div class="row">
													<div class="col-md-4 form-group">
														<label class="form-control-label" for="l0">Prognosis *</label>
													</div>
													<div class="col-md-8 form-group ">
														<input type="text" class="form-control" 
														 >
													</div>
												</div>
						   </div>
						  <div class="col-md-6">
						   <div class="row">
													<div class="col-md-4 form-group ">
														<label class="form-control-label" for="l0">Select Plan Year *</label>
													</div>
													<div class="col-md-8 form-group ">
														 <input type="text"  class="form-control datetimepicker-my"   />
													</div>
												</div>
						   </div>
						   </div>
											</form>

								</div>
								
							<div class="modal-footer">
							 <a type="submit" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/firm-plan/client-medical-self-insured"  class="btn btn-modal-blue">
								Save
							</a>
							<button type="button" class="btn btn-default" data-dismiss="modal">
								Close
							</button> 
							
						</div>
						</div>
						
					</div>
					
				</div>
				
				
					
<div class="modal fade" id="pharmacy_performance_description" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-md">
					<div class="modal-content">
						<div class="modal-header modal-header-color">
							 
							<button type="button" class="close-modal modal-opacity close-modal-blue" data-dismiss="modal" aria-hidden="true">
								X
							</button>
							<h4 class="modal-title color-white" id="myModalLabel">
								Description of Item
							</h4>
						</div>
						<div class="modal-body row">
							<form>
 <div class="col-md-12">
						  
						    <div class="row">
													<div class="col-md-4 form-group ">
														<label class="form-control-label" for="l0">Description Of Item *</label>
													</div>
													<div class="col-md-8 form-group ">
														<input type="text" class="form-control"
															 >
													</div>
												</div>
						    
					
						  
						   
						   </div>
			 <div class="col-md-12">
						  
						    <div class="row">
													<div class="col-md-4 form-group ">
														<label class="form-control-label" for="l0">Percentage or Amount *</label>
													</div>
													<div class="col-md-8 form-group ">
														<input type="text" class="form-control"
															 >
													</div>
												</div>
						    
					
						  
						   
						   </div>			   
					 <div class="col-md-12">
						  
						    <div class="row">
												<div class="col-md-4 form-group ">
														<label class="form-control-label" for="l0">Select Plan Year *</label>
													</div>
													<div class="col-md-8 form-group ">
														 <input type="text" class="form-control datetimepicker-my" />
													</div>
												</div>
						    
					
						  
						   
						   </div>				

											</form>

								</div>
								
							<div class="modal-footer">
							 <a type="submit" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/firm-plan/client-medical-self-insured"  class="btn btn-modal-blue">
								Save
							</a>
							<button type="button" class="btn btn-default" data-dismiss="modal">
								Close
							</button> 
							
						</div>
						</div>
						
					</div>
					
				</div>
				

								
<div class="modal fade" id="drug_details" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header modal-header-color">
							 
							<button type="button" class="close-modal modal-opacity close-modal-blue" data-dismiss="modal" aria-hidden="true">
								X
							</button>
							<h4 class="modal-title color-white" id="myModalLabel">
								Drug Details
							</h4>
						</div>
						<div class="modal-body row">
							<form>
 <div class="col-md-12">
						<div class="col-md-6 ">
						 <div class="row">
													<div class="col-md-4 form-group ">
														<label class="form-control-label" for="l0">Drug name *</label>
													</div>
													<div class="col-md-8 form-group ">
														<input type="text" class="form-control"
															 >
													</div>
												</div>
						</div>  
						<div class="col-md-6 ">
						  <div class="row">
													<div class="col-md-4 form-group ">
														<label class="form-control-label" for="l0">Condition *</label>
													</div>
													<div class="col-md-8 form-group ">
														<input type="text" class="form-control"
															 >
													</div>
												</div>
						</div>
						   </div>
			  <div class="col-md-12">
						<div class="col-md-6 ">
						 <div class="row">
													<div class="col-md-4 form-group ">
														<label class="form-control-label" for="l0">Plan Spend *</label>
													</div>
													<div class="col-md-8 form-group ">
														<input type="text" class="form-control"
															 >
													</div>
												</div>
						</div>  
						<div class="col-md-6 ">
						  <div class="row">
													<div class="col-md-4 form-group ">
														<label class="form-control-label" for="l0">Unique Number *</label>
													</div>
													<div class="col-md-8 form-group ">
														<input type="text" class="form-control"
															 >
													</div>
												</div>
						</div>
						   </div>			   
					 <div class="col-md-12">
						  <div class="col-md-6 ">
						    <div class="row">
													<div class="col-md-4 form-group ">
														<label class="form-control-label" for="l0">Select Plan Year *</label>
													</div>
													<div class="col-md-8 form-group ">
														 <input type="text" class="form-control datetimepicker-my"  />
													</div>
												</div>
												</div>
												  </div>				

											</form>

								</div>
								
							<div class="modal-footer">
							 	<a type="submit" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/firm-plan/client-medical-self-insured"  class="btn  btn-modal-blue">
								Save
							</a>
							<button type="button" class="btn btn-default" data-dismiss="modal">
								Close
							</button> 
						
						</div>
						</div>
						
					</div>
					
				</div>
												
<div class="modal fade" id="add_plan" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header modal-header-color">
							 
							<button type="button" class="close-modal modal-opacity  close-modal-blue" data-dismiss="modal" aria-hidden="true">
								X
							</button>
							<h4 class="modal-title color-white" id="plan_label">
								Add Plan 
							</h4>
						</div>
						<div class="modal-body row">
							
                         <form>
						 <div class="col-md-12">
						 <div class="col-md-6">
						   <div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Period Start Month*</label>
                                </div>
                                <div class="col-md-8 form-group ">
                             <input type="text" class="form-control" >
                                </div>
                            </div>
						 </div>
						  <div class="col-md-6">
						   <div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Period End Month*</label>
                                </div>
                                <div class="col-md-8 form-group ">
                              <input type="text" class="form-control" >
                                </div>
                            </div>
						 </div>
						 </div>
						 
						  <div class="col-md-12">
						
						  <div class="col-md-6">
						   <div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Credibility:</label>
                                </div>
                                <div class="col-md-8 form-group ">
                             <input type="text" class="form-control" >
                                </div>
                            </div>
						 </div>
						  <div class="col-md-6">
						   <div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" id="label_trend" for="l0">Medical Trend</label>
                                </div>
                                <div class="col-md-8 form-group ">
                            <input type="text" class="form-control" >
                                </div>
                            </div>
						 </div>
						 </div>
						  
					
						  </div>
                        </form>

								<div class="modal-footer">
							 
							<a href=""  class="btn btn-modal-blue">
								Save
							</a>
							<button type="button" class="btn btn-default" data-dismiss="modal">
								Close
							</button> 
						</div>			
								</div>
								
							
						</div>
						
					</div>
					
				</div>
				<!-- for enter reinsurance details -->
	<div class="modal fade" id="alert_message" tabindex="-1"
	role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog pswd-pop" style="width: 450px;">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"
					aria-hidden="true" onclick="clearFields();">x</button>
				<h4 class="modal-title" id="myModalLabel">Alert Message</h4>
			</div>
		
			<div class="modal-body">
			<div class="form-group">
				<div class="col-sm-12 add-mem"  style="line-height: 33px;">
					<label class="add-member-label">If you remove that row it will remove it from the input monthly financials table and will remove the data previously entered.</label>
				</div>
				
	</div>
			</div>
			<div class="modal-footer"
				style="border-top: none; margin-right: 15px;">
				<button type="button" class="btn btn-default btn-sm"
					data-dismiss="modal" >No</button>
					   <a id="alert-meassage-id" class="button-remove-modal btn btn-primary btn-sm" >Yes</a>
				
			</div>
	
		</div>
	</div>
</div>
	<div class="modal fade" id="alert_message_select" tabindex="-1"
	role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog pswd-pop" style="width: 450px;">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"
					aria-hidden="true" onclick="clearFields();">x</button>
				<h4 class="modal-title" id="myModalLabel">Alert Message</h4>
			</div>
			
			<div class="modal-body">
			<div class="form-group">
				<div class="col-sm-12 add-mem"  style="line-height: 33px;">
					<label class="add-member-label">If you remove that row it will remove it from the input monthly financials table and will remove the data previously entered.</label>
				</div>
				
	</div>
			</div>
			<div class="modal-footer"
				style="border-top: none; margin-right: 15px;">
				<button type="button" class="btn btn-default btn-sm"
					data-dismiss="modal" >No</button>
					   <a id="alert-meassage-id-select" class="btn btn-primary btn-sm" >Yes</a>
				
			</div>
		
		</div>
	</div>
</div>
<!-- End for enter reinsurance details -->

<div class="modal fade" id="alert_message_contribution" tabindex="-1"
	role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog pswd-pop" style="width: 450px;">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"
					aria-hidden="true" onclick="clearFields();">x</button>
				<h4 class="modal-title" id="myModalLabel">Alert Message</h4>
			</div>
		
			<div class="modal-body">
			<div class="form-group">
				<div class="col-sm-12 add-mem"  style="line-height: 33px;">
					<label class="add-member-label">If you remove that row it will remove it from the input monthly financials table and will remove the data previously entered.</label>
				</div>
				
	</div>
			</div>
			<div class="modal-footer"
				style="border-top: none; margin-right: 15px;">
				<button type="button" class="btn btn-default btn-sm"
					data-dismiss="modal" >No</button>
					   <a id="alert-meassage-id-contribution" class="button-remove-contribution-modal btn btn-primary btn-sm" >Yes</a>
				
			</div>
	
		</div>
	</div>
</div>


<div class="modal fade" id="alert_message_contribution_renewal" tabindex="-1"
	role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog pswd-pop" style="width: 450px;">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"
					aria-hidden="true" onclick="clearFields();">x</button>
				<h4 class="modal-title" id="myModalLabel">Alert Message</h4>
			</div>
		
			<div class="modal-body">
			<div class="form-group">
				<div class="col-sm-12 add-mem"  style="line-height: 33px;">
					<label class="add-member-label">If you remove that row it will remove it from the input monthly financials table and will remove the data previously entered.</label>
				</div>
				
	</div>
			</div>
			<div class="modal-footer"
				style="border-top: none; margin-right: 15px;">
				<button type="button" class="btn btn-default btn-sm"
					data-dismiss="modal" >No</button>
					   <a id="alert-meassage-id-contribution-renewal" class="button-remove-contribution-renewal-modal btn btn-primary btn-sm" >Yes</a>
				
			</div>
	
		</div>
	</div>
</div>
<script>
    $(function() {

        var drugs = [
            "Amyvid", "Quinidine Gluconate", "Trulicity", "TALTZ", "AXIRON","Prozac","Strattera","Symbyax","Cymbalta"
        ];
for(i=1 ; i<= 20 ;i++){
	   $.typeahead({
            input: ".example"+i+"",
            order: "asc",
            minLength: 1,
            source: {
                data: drugs
            },
            cancelButton: false
        });
}
     

    });
</script>
	