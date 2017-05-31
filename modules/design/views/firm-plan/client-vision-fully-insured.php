<?php
use yii\data\ArrayDataProvider;
use kartik\grid\GridView;
use yii\helpers\Html;
?>


<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<section class="page-content padding-0">
	

		<!-- Dashboard -->
		<div class="dashboard-container">

			
			<div class="blue-breadcrumb col-md-12 padding-0">
				<a class="breadcrumb-back-btn" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl().Yii::$app->params['dashboard_url']; ?>">
				<i class="fa fa-angle-left" aria-hidden="true"></i>
				</a>
				<div class="breadcrumb-description">
					<span class="">Master Data &gt; <a class="color-white" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/design/firm-plan/client-plan-years?id=3"><u>Manage Plans - Group Vision - Prior (2016)</u></a> &gt; Fully Insured</span>

				</div>

			</div>
			
		
		</div>
		
		<div class="page-content col-md-12 pull-left width-100"  ng-app="DemoApp" ng-controller="DemoController" >
		
		<div class="">
			<div class="col-md-12 border-ddd widget padding-0">
			<div class="search-header padding-10">
			
				<ul class="nav nav-pills col-md-12 main-pills" id="main_tab">
						<li class="col-md-2"></li>
					  <li href="#account_setup_block" data-toggle="tab" class="active col-md-2" align="center"><img src="/images/design/account_setup_sel.png"  class="avatar"
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
				<div class="tab-pane active" id="account_setup_block">
					<div class="col-md-12  padding-10 ul-block">
						<ul class="nav nav-pills nav-wizard inner-block-ul">
							<li href="#planbasics" data-toggle="tab" class="active inner-block-li"  id="anchor-pb-1"><a><div class="inner-block-digits pull-left">1</div><span class="inner-block-text">Plan Basics</span></a></li>
							<li href="#planandrates" data-toggle="tab" class="inner-block-li"  id="anchor-pb-2"><a><div class="inner-block-digits pull-left">2</div><span class="inner-block-text">Reinsurance Plans and Rates</span></a></li>
							<li href="#typestotrack" data-toggle="tab" class="inner-block-li" id="anchor-pb-3"><a><div class="inner-block-digits pull-left">3</div><span class="inner-block-text">Claim Types to Track</span></a></li>
							<li href="#itemtracking" data-toggle="tab" class="inner-block-li" id="anchor-pb-4"><a><div class="inner-block-digits pull-left">4</div><span class="inner-block-text">Additional Financial Entries</span></a></li>
							<li href="#empcontribtion" data-toggle="tab" class="inner-block-li" id="anchor-pb-5"><a><div class="inner-block-digits pull-left">5</div><span class="inner-block-text">Emp Contributions &amp; Avg Enr</span></a></li>
						</ul>
					</div>
					
					<div class="col-md-12 padding-0">
					<div class="tab-content clearfix">
						<div class="tab-pane active " id="planbasics" role="tabpanel">
						<div class="border-top-bottom-ddd col-md-12 padding-0">
							<div class="container margin-top-10 margin-bottom-10">
														<div class="col-md-4">
														
																		<div class="form-group ">
																			<label class="form-control-label" for="l0">Name of
																				the Plan</label>
																			<input type="text" class="form-control placeholder-italics" value=""
																				placeholder="e.g. Group Vision Plan">
																		</div>
																		
																		
																		<div class="form-group ">
																			<label class="form-control-label" for="l0">Network
																			</label>
																			<input type="text" class="form-control placeholder-italics" value=""
																				value="UHC Plus" placeholder="e.g. Cigna">
																		</div>
																		
																		
																		<div class="form-group ">
																			<label class="form-control-label" for="l0">Select
																				Renewal Plan Year
																			</label>
																			<select
																				class="form-control edited"
																				id="renewal_plan_year" id="form_control">
																				<option value="1">2015</option>
																				<option value="2">2016</option>
																				<option value="3" selected>2017</option>

																			</select>
																		</div>
																		
																		<div class="form-group ">
																			<label class="form-control-label" for="l0">Budget
																			</label>
																			<input type="text" class="form-control placeholder-italics"
																				value=""
																				placeholder="e.g. $2,345,700">
																		</div>
																		
																		
																		
																		
																		
																		
																		
															</div>

															<div class="col-md-4">
																
																<div class="form-group ">
																			<label class="form-control-label" for="l0">Administrative
																				Carrier/Vendor 
																			</label>
																			<input type="text" class="form-control placeholder-italics" value=""
																				placeholder="e.g. Cypress Benefit Administrators">
																		</div>
																		
																<!--<div class="form-group ">
																			<label class="form-control-label" for="l0">Pharmacy
																				Benefit Manager <span class="imp-red">*</span>
																			</label>
																			<input type="text" class="form-control placeholder-italics" value=""
																				value="Caremark" placeholder="e.g. Cigna">
																		</div> -->
																		<div class="form-group ">
																			<label class="form-control-label" for="l0">Annual
																				Fee/Commission on Plan
																			</label>
																			<input type="text" class="form-control placeholder-italics"
																				value="" placeholder="e.g. $67,500">
																		</div>
																	<div class="form-group ">
																			<label class="form-control-label" for="l0">Additional
																				Notes
																			</label>
																				<textarea class="form-control placeholder-italics" placeholder="e.g. Enter any notes " rows="1"></textarea>
																		
																		</div>	
															
															</div>

															

															<div class="col-md-4">
																<div class="form-group ">
																			<label class="form-control-label" for="l0">Plan Funding
																			</label>
																			<input
																				type="text" class="form-control placeholder-italics"
																				value="Fully Insured" placeholder="e.g. Fully Insured  (since this is fully insured vision)" disabled>
																		
																		</div>
																	<div class="form-group ">
																	<label class="form-control-label" for="l0">Plan Change Summary of Changes From
																				Prior Year Plan
																	</label>
																		<textarea class="form-control placeholder-italics"  placeholder="e.g. Moved from self insured to a fully insured plan, left the plan designs the same as last year, ..." rows="2"></textarea>
																	
																</div>
															</div>

															
							</div>
							</div>
							<div class="col-md-12 padding-0 bg-sky-blue " align="right" style="border-top:none;">
								
								<div class="modal-footer-btn padding-15">
								
								 <button type="button" class="btn btn-modal-blue" disabled onclick="previousButton(0);">&lt; Previous</button>
								  &nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-modal-blue" onclick="nextButton(1);">Save and Next &gt; </button>
							&nbsp;&nbsp;&nbsp;<a type="button" class="btn btn-default pull-right" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/design/firm-plan/client-plan-years?id=3">Cancel</a>
								
								
								</div>
								</div>
						</div>
					
						<div class="tab-pane" id="planandrates" role="tabpanel">
							<div class="border-top-bottom-ddd col-md-12 padding-0">
							<div class="container margin-top-10 margin-bottom-10">
							
							
								<div class="col-md-12 header-reimbursment">

												<div class="col-md-12 form-group padding-0">
													<div class="col-md-6">
														<label># of Plan Plans Offered Strategies</label>
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
														<label># of Premium Tiers</label>
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
														<label> Plan 1</label>
													</div>
													<div class="col-md-6">
														<input class="form-control  placeholder-italics" placeholder="e.g. PPO"/>
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
												
												<div class="col-md-12 padding-0 margin-bottom-20">
												<div class="col-md-12 padding-0">
													<div class="col-md-6">
														<label> Plan 2</label>
													</div>
													<div class="col-md-6">
														<input class="form-control  placeholder-italics" placeholder="e.g. HMO"/>
													</div>
												</div>

												<div class="col-md-12   padding-0">
													<div class="">
														<div class="demo-container">
															<div dx-data-grid="dataGridOptionscontribution2"></div>
														</div>
													</div>
												</div>
												</div>
												

											</div>
							</div>
							</div>
							<div class="col-md-12 padding-0 bg-sky-blue " align="right" style="border-top:none;">
								
								<div class="modal-footer-btn padding-15">
								
								 <button type="button" class="btn btn-modal-blue"  onclick="previousButton(1);">&lt; Previous</button>
								  &nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-modal-blue" onclick="nextButton(2);">Save and Next &gt; </button>
							&nbsp;&nbsp;&nbsp;<a type="button" class="btn btn-default pull-right" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/design/firm-plan/client-plan-years?id=3">Cancel</a>
								
								
								</div>
								</div>
						</div>
						
						<div class="tab-pane  " id="typestotrack" role="tabpanel">
						<div class="border-top-bottom-ddd col-md-12 padding-0">
							<div class="container margin-top-10 margin-bottom-10">
							<div class="col-md-12">

																<div class="">
																	
																	<div class="md-checkbox col-md-12">
																		<div class="col-md-6">
																		
																		<label class="mt-checkbox mt-checkbox-outline">Vision Claims
																				<input type="checkbox">
																			<span></span>
																		</label>
																			
																		</div>
																	</div>
																	
																	<div class="md-checkbox col-md-12">
																		<div class="col-md-6">
																		<label class="mt-checkbox mt-checkbox-outline">HRA Claims
																				<input type="checkbox">
																			<span></span>
																		</label>
																			
																		</div>
																	</div>

																	
																</div>
															</div>
							
							</div>
							</div>
							<div class="col-md-12 padding-0 bg-sky-blue " align="right" style="border-top:none;">
								
								<div class="modal-footer-btn padding-15">
								
								 <button type="button" class="btn btn-modal-blue"  onclick="previousButton(2);">&lt; Previous</button>
								  &nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-modal-blue " onclick="nextButton(3);">Save and Next &gt; </button>
							&nbsp;&nbsp;&nbsp;<a type="button" class="btn btn-default pull-right" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/design/firm-plan/client-plan-years?id=3">Cancel</a>
								
								
								</div>
								</div>
						
								</div>
						
						<div class="tab-pane  " id="itemtracking" role="tabpanel">
						<div class="border-top-bottom-ddd col-md-12 padding-0">
							<div class="container margin-top-10 margin-bottom-10">
							

											<div class="col-md-12 header-reimbursment">
												<div class="col-md-6">
													<label class="font-2rem">Employee & Member Contributions to
														Track</label>
												</div>

											</div>

											<div class="col-md-12 ">
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
							</div>
							<div class="col-md-12 padding-0 bg-sky-blue " align="right" style="border-top:none;">
								
								<div class="modal-footer-btn padding-15">
								
								 <button type="button" class="btn btn-modal-blue"  onclick="previousButton(3);">&lt; Previous</button>
								  &nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-modal-blue" onclick="nextButton(4);">Save and Next &gt; </button>
							&nbsp;&nbsp;&nbsp;<a type="button" class="btn btn-default pull-right" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/design/firm-plan/client-plan-years?id=3">Cancel</a>
								
								
								</div>
								</div>
						
								</div>
					
						
						<div class="tab-pane  " id="empcontribtion" role="tabpanel">
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
														<input class="form-control  placeholder-italics"  placeholder="e.g. PPO"/>
													</div>
												</div>

												<div class="col-md-12   padding-0">
													<div class="">
														<div class="demo-container">
															<div dx-data-grid="dataGridOptionscontribution3"></div>
														</div>
													</div>
												</div>
												</div>
												
												<div class="col-md-12 padding-0 margin-bottom-20">
												<div class="col-md-12 padding-0">
													<div class="col-md-6">
														<label> Plan 2 Contribution Name</label>
													</div>
													<div class="col-md-6">
														<input class="form-control  placeholder-italics"  placeholder="e.g. HMO"/>
													</div>
												</div>

												<div class="col-md-12   padding-0">
													<div class="">
														<div class="demo-container">
															<div dx-data-grid="dataGridOptionscontribution4"></div>
														</div>
													</div>
												</div>
												</div>
												

											</div>
							</div>
							</div>
							<div class="col-md-12 padding-0 bg-sky-blue " align="right" style="border-top:none;">
								
								<div class="modal-footer-btn padding-15">
								
								 <button type="button" class="btn btn-modal-blue"  onclick="previousButton(4);">&lt; Previous</button>
								  &nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-modal-blue " onclick="nextButton(5);">Save and Next &gt; </button>
							&nbsp;&nbsp;&nbsp;<a type="button" class="btn btn-default pull-right" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/design/firm-plan/client-plan-years?id=3">Cancel</a>
								
								
								</div>
								</div>
						
								</div>
								
					</div>
					</div>
				</div>
				<div class="tab-pane" id="cost_projections_block">
					<div class="col-md-12  padding-10 ul-block">
						<ul class="nav nav-pills nav-wizard">
							<li href="#claims_project_assumption" data-toggle="tab" class="inner-block-li active" id="anchor-pb-7"><a><div class="inner-block-digits pull-left">1</div><span class="inner-block-text">Renewal Claims Projection Assumptions</span></a></li>
							<li href="#cost_project_assumption" data-toggle="tab" class="inner-block-li" id="anchor-pb-8"><a><div class="inner-block-digits pull-left">2</div><span class="inner-block-text" title="Renewal Cost Item Renewal Assumptions">Renewal Cost Item Renewal Assumptions</span></a></li>
							<li href="#contribution_project_assumption" data-toggle="tab" class="inner-block-li" id="anchor-pb-9"><a><div class="inner-block-digits pull-left">3</div><span class="inner-block-text" title="Renewal Employee Contribution & Average Enrollment Assumption">Renewal Employee Contribution...</span></a></li>
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
								  &nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-modal-blue" onclick="nextButton(7);">Save and Next &gt; </button>
							&nbsp;&nbsp;&nbsp;<a type="button" class="btn btn-default pull-right" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/design/firm-plan/client-plan-years?id=3">Cancel</a>
								
								
								</div>
								</div>
						
						</div>
						
						
						<div class="tab-pane  " id="cost_project_assumption" role="tabpanel">
						<div class="border-top-bottom-ddd col-md-12 padding-0">
							<div class="container margin-top-10 margin-bottom-10">
							
															<div class="col-md-12">
																<div class="col-md-6">
																	<label>Renewal Cost # of Items</label>
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

															<div class="col-md-12">
															
															<div class="demo-container" id="checkbox-inline">
																			<div dx-data-grid="dataGridOptions16"></div>
																		</div>
															
															</div>
							</div>
							</div>
							<div class="col-md-12 padding-0 bg-sky-blue " align="right" style="border-top:none;">
								
								<div class="modal-footer-btn padding-15">
								
								 <button type="button" class="btn btn-modal-blue"  onclick="previousButton(7);">&lt; Previous</button>
								  &nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-modal-blue" onclick="nextButton(8);">Save and Next &gt; </button>
							&nbsp;&nbsp;&nbsp;<a type="button" class="btn btn-default pull-right" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/design/firm-plan/client-plan-years?id=3">Cancel</a>
								
								
								</div>
								</div>
						
						</div>
						
						<div class="tab-pane  " id="contribution_project_assumption" role="tabpanel">
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
														<input class="form-control  placeholder-italics"  placeholder="e.g. PPO"/>
													</div>
												</div>

												<div class="col-md-12   padding-0">
													<div class="">
														<div class="demo-container">
															<div dx-data-grid="dataGridOptionscontribution5"></div>
														</div>
													</div>
												</div>
												</div>
												
												<div class="col-md-12 padding-0 margin-bottom-20">
												<div class="col-md-12 padding-0">
													<div class="col-md-6">
														<label> Plan 2 Contribution Name</label>
													</div>
													<div class="col-md-6">
														<input class="form-control  placeholder-italics"  placeholder="e.g. HMO"/>
													</div>
												</div>

												<div class="col-md-12   padding-0">
													<div class="">
														<div class="demo-container">
															<div dx-data-grid="dataGridOptionscontribution6"></div>
														</div>
													</div>
												</div>
												</div>
												

											</div>
							</div>
							</div>
				
							<div class="col-md-12 padding-0 bg-sky-blue " align="right" style="border-top:none;">
								
								<div class="modal-footer-btn padding-15">
								
								 <button type="button" class="btn btn-modal-blue"  onclick="previousButton(8);">&lt; Previous</button>
								  &nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-modal-blue" onclick="nextButton(9);">Save and Next &gt; </button>
							&nbsp;&nbsp;&nbsp;<a type="button" class="btn btn-default pull-right" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/design/firm-plan/client-plan-years?id=3">Cancel</a>
								
								
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
							<!--<li href="#large_claims" data-toggle="tab" class="inner-block-li" id="anchor-pb-11"><a><div class="inner-block-digits pull-left">2</div><span class="inner-block-text">Large Claims</span></a></li>-->
							<li href="#network_performance" data-toggle="tab" class="inner-block-li" id="anchor-pb-12"><a><div class="inner-block-digits pull-left">2</div><span class="inner-block-text">Network Performance</span></a></li>
							<!--<li href="#pharmacy_performance" data-toggle="tab" class="inner-block-li" id="anchor-pb-13"><a><div class="inner-block-digits pull-left">4</div><span class="inner-block-text">Pharmacy Performance</span></a></li>-->
						</ul>
					</div>
					
					
					<div class="col-md-12 padding-0">
					<div class="tab-content clearfix">
					
						<div class="tab-pane  active" id="monthly_financials" role="tabpanel">
						<div class="border-top-bottom-ddd col-md-12 padding-0">
							<div class="container margin-top-10 margin-bottom-10">
							<table class="table table-hover table-backcolor nowrap editable-table" id="editable_monthly_financials">
                            <thead class="blue-grid-head">
                            <tr>
                                <th></th>
                                <th class="column-1 no-wrap color-white">Jan-2016</th>
                                <th class="column-2 no-wrap color-white">Feb-2016</th>
                                <th class="column-3 no-wrap color-white">Mar-2016</th>
                                <th class="column-4 no-wrap color-white">Apr-2016</th>
                                <th class="column-5 no-wrap color-white">May-2016</th>
                                 <th class="column-6 no-wrap color-white">June-2016</th>
                                  <th class="column-7 no-wrap color-white">July-2016</th>
                                   <th class="column-8 no-wrap color-white">Aug-2016</th>
                                    <th class="column-9 no-wrap color-white">Sep-2016</th>
                                     <th class="column-10 no-wrap color-white">Oct-2016</th>
                                      <th class="column-11 no-wrap color-white">Nov-2016</th>
                                       <th class="column-12 no-wrap color-white">Dec-2016</th>
                            </tr>
                            </thead>
 
                            <tbody>
                            <tr>
                                <td class="header-td">Employee Enrollment</td>
                                <td class="column-1 column-td" id="1">200</td>
                                <td class="column-2 column-td" id="2">50</td>
                                <td class="column-3 column-td" id="3">250</td>
                                <td class="column-4 column-td" id="4">250</td>
                                <td class="column-5 column-td" id="5">250</td>
                                <td class="column-6 column-td" id="6">200</td>
                                <td class="column-7 column-td" id="7">200</td>
                                <td class="column-8 column-td" id="8">225</td>
                                <td class="column-9 column-td" id="9">200</td>
                                <td class="column-10 column-td" id="10">222</td>
                                <td class="column-11 column-td" id="11">222</td>
                                <td class="column-12 column-td" id="12">222</td>
                            </tr>
                              <tr>
                                <td class="header-td">Member Enrollment</td>
                                <td class="column-1 column-td" id="1">200</td>
                                <td class="column-2 column-td" id="2">50</td>
                                <td class="column-3 column-td" id="3">250</td>
                                <td class="column-4 column-td" id="4">250</td>
                                <td class="column-5 column-td" id="5">250</td>
                                <td class="column-6 column-td" id="6">200</td>
                                <td class="column-7 column-td" id="7">200</td>
                                <td class="column-8 column-td" id="8">225</td>
                                <td class="column-9 column-td" id="9">200</td>
                                <td class="column-10 column-td" id="10">222</td>
                                <td class="column-11 column-td" id="11">222</td>
                                <td class="column-12 column-td" id="12">222</td>
                            </tr>
                              
                             
                              <tr>
                               <td class="header-td">Vision Claims</td>
                               <td class="column-1 column-td" id="1">$200</td>
                                <td class="column-2 column-td" id="2">$50</td>
                                <td class="column-3 column-td" id="3">$250</td>
                                <td class="column-4 column-td" id="4">$250</td>
                                <td class="column-5 column-td" id="5">$250</td>
                                <td class="column-6 column-td" id="6">$200</td>
                                <td class="column-7 column-td" id="7">$200</td>
                                <td class="column-8 column-td" id="8">$225</td>
                                <td class="column-9 column-td" id="9">$200</td>
                                <td class="column-10 column-td" id="10">$222</td>
                                <td class="column-11 column-td" id="11">$222</td>
                                <td class="column-12 column-td" id="12">$222</td>
                            </tr>
                             
                             
                            
                            
                            <tr class="header-td back-gray">
                               <td class="header-td">Gross Total</td>
                               <td class="column-1 column-td" id="1">$200</td>
                                <td class="column-2 column-td" id="2">$50</td>
                                <td class="column-3 column-td" id="3">$250</td>
                                <td class="column-4 column-td" id="4">$250</td>
                                <td class="column-5 column-td" id="5">$250</td>
                                <td class="column-6 column-td" id="6">$200</td>
                                <td class="column-7 column-td" id="7">$200</td>
                                <td class="column-8 column-td" id="8">$225</td>
                                <td class="column-9 column-td" id="9">$200</td>
                                <td class="column-10 column-td" id="10">$222</td>
                                <td class="column-11 column-td" id="11">$222</td>
                                <td class="column-12 column-td" id="12">$222</td>
                            </tr>
                            
                             <tr>
                               <td class="header-td">Employee Contributions</td>
                               <td class="column-1 column-td" id="1">$200</td>
                                <td class="column-2 column-td" id="2">$50</td>
                                <td class="column-3 column-td" id="3">$250</td>
                                <td class="column-4 column-td" id="4">$250</td>
                                <td class="column-5 column-td" id="5">$250</td>
                                <td class="column-6 column-td" id="6">$200</td>
                                <td class="column-7 column-td" id="7">$200</td>
                                <td class="column-8 column-td" id="8">$225</td>
                                <td class="column-9 column-td" id="9">$200</td>
                                <td class="column-10 column-td" id="10">$222</td>
                                <td class="column-11 column-td" id="11">$222</td>
                                <td class="column-12 column-td" id="12">$222</td>
                            </tr>
                            
                             <tr>
                               <td class="header-td">Cobra Premiums</td>
                               <td class="column-1 column-td" id="1">$200</td>
                                <td class="column-2 column-td" id="2">$50</td>
                                <td class="column-3 column-td" id="3">$250</td>
                                <td class="column-4 column-td" id="4">$250</td>
                                <td class="column-5 column-td" id="5">$250</td>
                                <td class="column-6 column-td" id="6">$200</td>
                                <td class="column-7 column-td" id="7">$200</td>
                                <td class="column-8 column-td" id="8">$225</td>
                                <td class="column-9 column-td" id="9">$200</td>
                                <td class="column-10 column-td" id="10">$222</td>
                                <td class="column-11 column-td" id="11">$222</td>
                                <td class="column-12 column-td" id="12">$222</td>
                            </tr>
                            
                             <tr>
                               <td class="header-td">Member Copays,Coinsurance and Deductibles</td>
                               <td class="column-1 column-td" id="1">$200</td>
                                <td class="column-2 column-td" id="2">$50</td>
                                <td class="column-3 column-td" id="3">$250</td>
                                <td class="column-4 column-td" id="4">$250</td>
                                <td class="column-5 column-td" id="5">$250</td>
                                <td class="column-6 column-td" id="6">$200</td>
                                <td class="column-7 column-td" id="7">$200</td>
                                <td class="column-8 column-td" id="8">$225</td>
                                <td class="column-9 column-td" id="9">$200</td>
                                <td class="column-10 column-td" id="10">$222</td>
                                <td class="column-11 column-td" id="11">$222</td>
                                <td class="column-12 column-td" id="12">$222</td>
                            </tr>
                            	 <tr>
                               <td class="header-td">Expected Monthly Claims</td>
                               <td class="column-1 column-td" id="1">$200</td>
                                <td class="column-2 column-td" id="2">$50</td>
                                <td class="column-3 column-td" id="3">$250</td>
                                <td class="column-4 column-td" id="4">$250</td>
                                <td class="column-5 column-td" id="5">$250</td>
                                <td class="column-6 column-td" id="6">$200</td>
                                <td class="column-7 column-td" id="7">$200</td>
                                <td class="column-8 column-td" id="8">$225</td>
                                <td class="column-9 column-td" id="9">$200</td>
                                <td class="column-10 column-td" id="10">$222</td>
                                <td class="column-11 column-td" id="11">$222</td>
                                <td class="column-12 column-td" id="12">$222</td>
                            </tr>
							 <tr>
                               <td class="header-td">Maximum Monthly Claims</td>
                               <td class="column-1 column-td" id="1">$200</td>
                                <td class="column-2 column-td" id="2">$50</td>
                                <td class="column-3 column-td" id="3">$250</td>
                                <td class="column-4 column-td" id="4">$250</td>
                                <td class="column-5 column-td" id="5">$250</td>
                                <td class="column-6 column-td" id="6">$200</td>
                                <td class="column-7 column-td" id="7">$200</td>
                                <td class="column-8 column-td" id="8">$225</td>
                                <td class="column-9 column-td" id="9">$200</td>
                                <td class="column-10 column-td" id="10">$222</td>
                                <td class="column-11 column-td" id="11">$222</td>
                                <td class="column-12 column-td" id="12">$222</td>
                            </tr>
                             <tr class="header-td back-gray">
                               <td class="header-td">Net Total</td>
                               <td class="column-1 column-td" id="1">$200</td>
                                <td class="column-2 column-td" id="2">$50</td>
                                <td class="column-3 column-td" id="3">$250</td>
                                <td class="column-4 column-td" id="4">$250</td>
                                <td class="column-5 column-td" id="5">$250</td>
                                <td class="column-6 column-td" id="6">$200</td>
                                <td class="column-7 column-td" id="7">$200</td>
                                <td class="column-8 column-td" id="8">$225</td>
                                <td class="column-9 column-td" id="9">$200</td>
                                <td class="column-10 column-td" id="10">$222</td>
                                <td class="column-11 column-td" id="11">$222</td>
                                <td class="column-12 column-td" id="12">$222</td>
                            </tr>
                            </tbody>
                        </table>
											
							</div>
							</div>
							<div class="col-md-12 padding-0 bg-sky-blue " align="right" style="border-top:none;">
								
								<div class="modal-footer-btn padding-15">
								
								 <button type="button" class="btn btn-modal-blue"  onclick="previousButton(9);">&lt; Previous</button>
								  &nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-modal-blue" onclick="nextButton(10);">Save and Next &gt; </button>
							&nbsp;&nbsp;&nbsp;<a type="button" class="btn btn-default pull-right" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/design/firm-plan/client-plan-years?id=3">Cancel</a>
								
								
								</div>
								</div>
						
						</div>
						
						
						
						<div class="tab-pane  " id="network_performance" role="tabpanel">
						<div class="border-top-bottom-ddd col-md-12 padding-0">

							<div class="container margin-top-10 margin-bottom-10">

							<div class="demo-container " id="network_performance_div" style="margin-top: 10px;">
																<div dx-data-grid="dataGridOptionsnetworkperfomance"></div>
															</div>
							</div>
							</div>
							<div class="col-md-12 padding-0 bg-sky-blue " align="right" style="border-top:none;">
								
								<div class="modal-footer-btn padding-15">
								
								 <button type="button" class="btn btn-modal-blue"  onclick="previousButton(10);">&lt; Previous</button>
								  &nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-modal-blue" onclick="nextButton(11);">Save and Next &gt; </button>
							&nbsp;&nbsp;&nbsp;<a type="button" class="btn btn-default pull-right" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/design/firm-plan/client-plan-years?id=3">Cancel</a>
								
								
								</div>
								</div>
						
						</div>
						
						<div class="tab-pane  " id="pharmacy_performance" role="tabpanel">
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
								<a class="color-blue"> <u class="pull-right" id="pharmacy-description" href="#pharmacy_performance_description"
										data-toggle="modal">Add</u></a>
								</div>
								</div>
								</div>
															<div class="col-md-12 padding-0">
															
															<?php
$resultData = [
    array("description"=>"Total Prescriptions","percentage"=>"1200"),
   array("description"=>"Generic Filled","percentage"=>"890"),
array("description"=>"Mail Order","percentage"=>"54"),
array("description"=>"Formulary Brand Compliance Rate","percentage"=>"75%"),
array("description"=>"Average Brand Discount","percentage"=>"14%"),
array("description"=>"Average Generic Discount","percentage"=>"27%"),
     ];

function filter3($item) {
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

$filteredresultData = array_filter($resultData, 'filter3');


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
            'attribute' => 'description', 
            'value' => 'description',
'label' => 'Description of Item',
'noWrap'=>true,
'headerOptions' => ['class' => 'blue-grid-head'],
//'mergeHeader'=>true
            ],
            [
            "attribute" => "percentage",
			'headerOptions' => ['class' => 'blue-grid-head'],
           // 'filter' => '<input class="form-control" name="filteremail" value="'. $searchModel['medicalclaim'] .'" type="text">',
            'value' => function($model, $key, $index, $widget) {
 return '<a class="color-blue" ><u href="#pharmacy_performance_description" data-toggle="modal">'.$model['percentage'].'</u></a>';
},
'format' => 'raw',
'label' => 'Percentage or Amount',
//'width'=>'150px',
 //'pageSummary' => true,
 // 'format' => ['currency', ''],
//'mergeHeader'=>true
            ],	];
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
															// 'showPageSummary' => true,
															 
															'panel' => [
																'heading'=>false,
																'type' => GridView::TYPE_PRIMARY,
																'footer' => false,
															],
														]);
															
															
															?>
																<!-- <div class="demo-container largeclaims"
																	style="margin-top: 10px;">
																	<div dx-data-grid="dataGridOptionslargeclaims"></div>
																</div>-->

															</div>
															
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
								<a class="color-blue"> <u class="pull-right" id="drug-details" href="#drug_details"
										data-toggle="modal">Add</u></a>
								</div>
								</div>
								</div>
															<div class="col-md-12 padding-0">
															
															<?php
$resultData = [
    array("topten"=>"1","drugname"=>"capecitabine","condition"=>"Cancer","planspend"=>"4745","uniquenumbers"=>"1"),
   array("topten"=>"2","drugname"=>"capecitabine","condition"=>"Cancer","planspend"=>"4745","uniquenumbers"=>"1"),
array("topten"=>"3","drugname"=>"capecitabine","condition"=>"Cancer","planspend"=>"4745","uniquenumbers"=>"1"),
array("topten"=>"4","drugname"=>"capecitabine","condition"=>"Cancer","planspend"=>"4745","uniquenumbers"=>"1"),
array("topten"=>"5","drugname"=>"capecitabine","condition"=>"Cancer","planspend"=>"4745","uniquenumbers"=>"1"),
     ];

function filter4($item) {
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

$filteredresultData = array_filter($resultData, 'filter4');


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
            'attribute' => 'topten', 
            'value' => 'topten',
'label' => 'Top 10',
'noWrap'=>true,
'headerOptions' => ['class' => 'blue-grid-head'],
//'mergeHeader'=>true
            ],
            [
            "attribute" => "drugname",
			'headerOptions' => ['class' => 'blue-grid-head'],
           // 'filter' => '<input class="form-control" name="filteremail" value="'. $searchModel['medicalclaim'] .'" type="text">',
           'value' => function($model, $key, $index, $widget) {
	return '<a class="color-blue"><u href="#drug_details" data-toggle="modal">'.$model['drugname'].'</u></a>';
},
'format' =>'raw',
'label' => 'Drug Name',
//'width'=>'150px',
// 'pageSummary' => true,
 // 'format' => ['currency', ''],
//'mergeHeader'=>true
            ],
			[
"attribute" => "condition",
'label' => 'Condition',
'width'=>'150px',
'headerOptions' => ['class' => 'blue-grid-head'],
//'pageSummary' => true,
//'format' => ['currency', ''],
//'mergeHeader'=>true
],
[
"attribute" => "planspend",
'label' => 'Plan Spend',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
'headerOptions' => ['class' => 'blue-grid-head'],
//'mergeHeader'=>true
],
[
"attribute" => "uniquenumbers",
'label' => 'Unique Numbers',
'width'=>'150px',
'headerOptions' => ['class' => 'blue-grid-head'],
//'pageSummary' => true,
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
							<div class="col-md-12 padding-0 bg-sky-blue " align="right" style="border-top:none;">
								
								<div class="modal-footer-btn padding-15">
								
								 <button type="button" class="btn btn-modal-blue"  onclick="previousButton(12);">&lt; Previous</button>
								  &nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-modal-blue " onclick="nextButton(13);">Save and Next &gt; </button>
							&nbsp;&nbsp;&nbsp;<a type="button" class="btn btn-default pull-right" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/design/firm-plan/client-plan-years?id=3">Cancel</a>
								
								
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

function filter_2($item) {
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

$filteredresultData = array_filter($resultData, 'filter_2');
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
		
	</section>
	<script>
	
	$(document).ready(function(){
		
	$('#editable_monthly_financials').editableTableWidget({
			
		});
	 
				 $("[data-toggle=tooltip]").tooltip();
	});	
	
	function nextButton(id){
		switch (id){

		case 1:
			$('#main-anchor-1').trigger('click');
			$("#anchor-pb-2").trigger('click');;
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
			$("#anchor-pb-7").trigger('click');
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
			$("#anchor-pb-2").trigger('click');;
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
		$('#main-anchor-1').trigger('click');
			$("#anchor-pb-5").trigger('click');
			break;
		case 7:
				$('#main-anchor-2').trigger('click');
					$("#anchor-pb-7").trigger('click');
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
	</script>
	
	<script
		src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.2/jszip.min.js"></script>
	<script
		src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.16/angular.min.js"></script>
	<script 
	src="https://cdn3.devexpress.com/jslib/16.2.4/js/dx.all.js"></script>

		
	<script type="text/javascript"
			src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/design/firm/dentalfullyplandetails.js"></script>
		
		<script type="text/javascript"
	src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/design/reports/cliams-trend-report.js"></script>
	
		<style>
		.table-backcolor>tbody>tr:hover, .table-backcolor>tbody>tr:hover>td{
			background: #ddd!important;
		} 
			.table-backcolor, .table-backcolor th,.table-backcolor td {
			border: 1px solid #ddd;
			border-collapse: collapse;
			border-color:#ddd !important;
		}
		.header-td{
		pointer-events:none;
		}

		.back-gray{
		background-color:gray;
		}
		</style>
		
					
				
<div class="modal fade" id="create_claim" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header modal-header-color">
							 
							<button type="button" class="close-modal modal-opacity close-modal-blue" data-dismiss="modal" aria-hidden="true">
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
															placeholder="Member Type">
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
															placeholder="Age">
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
															placeholder="Plan Claims">
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
															placeholder="Condition">
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
															placeholder="Prognosis">
													</div>
												</div>
						   </div>
						  <div class="col-md-6">
						   <div class="row">
													<div class="col-md-4 form-group ">
														<label class="form-control-label" for="l0">Select Plan Year *</label>
													</div>
													<div class="col-md-8 form-group ">
														 <input type="text"   class="form-control datetimepicker-my" placeholder="Select Plan Year" />
													</div>
												</div>
						   </div>
						   </div>
											</form>

								</div>
								
							<div class="modal-footer">
							 <a type="submit" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/design/firm-plan/client-medical-self-insured"  class="btn btn-modal-blue">
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
															placeholder="Drug name">
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
															placeholder="Condition">
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
															placeholder="Plan Spend">
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
															placeholder="Unique Number">
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
														 <input type="text"  class="form-control datetimepicker-my" placeholder="Select Plan Year" />
													</div>
												</div>
												</div>
												  </div>				

											</form>

								</div>
								
							<div class="modal-footer">
							 	<a type="submit" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/design/firm-plan/client-medical-self-insured"  class="btn  btn-modal-blue">
								Save
							</a>
							<button type="button" class="btn btn-default" data-dismiss="modal">
								Close
							</button> 
						
						</div>
						</div>
						
					</div>
					
				</div>
				