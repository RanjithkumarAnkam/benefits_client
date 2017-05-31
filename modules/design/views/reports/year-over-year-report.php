<?php 
use kartik\grid\GridView;
use yii\data\ArrayDataProvider;
?>

<section class="page-content padding-0">
	<div class="col-md-12">
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
		<!-- clients -->
		<div class="row dashboard-container">

			<div class="col-md-12 col-xs-12 header-main">
				<div class="col-md-12 col-xs-12">
					<span class="font-18">Reports</span> <span
						style="font-size: 22px;" class="pull-right"></span>

				</div>

			</div>
		</div>
		<div class="container">
		
		<div class="row">
		<div class="col-md-6 action-coloumn">
		<a onclick="history.go(-1);">&lt;&lt;Back</a>
		</div>
		<div class="col-md-6 action-coloumn" align="right">
		<button class="btn btn-rounded btn-primary" type="button">
                            <i aria-hidden="true" class="fa fa-download"></i>
                            Download
                        </button>
		</div>
		</div>
		</div>
		<div class="container reports-container">
		<div class="row">
		<div class="col-md-12">
		<div class="col-md-6 margin-top-15 ">
		<img class="img-responsive"	src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/images/logo/company-logo.png" 
						alt="Contact Us">
		</div>
		<div class="col-md-6" align="right">
		<span class="display-block left-head">ABC Engineering</span>
		<span class="display-block left-head">Plan Year Budget Report</span>
		<span class="display-block left-head">Medical & Pharmacy Plan</span>
		</div>
		</div>
		</div>
		 <div class="row">
				<div class="col-md-12">
					<div class="col-md-6">
						<div class="widget back-widget box-shadow widget-six">
							<div class="widget-header">

								<strong class="margin-right-10">Total Paid Plan Claims By Month</strong>
								
							</div>

							<br />
							<div class="margin-bottom-50">
							<div id="paid_plan_claims" style="min-width: 310px; height: 300px; margin: 0 auto"></div>
							
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="widget back-widget box-shadow widget-six">
							<div class="widget-header">

								<strong class="margin-right-10">Total Paid Plan Claims By Month</strong>
								
							</div>

							<br />
							<div class="margin-bottom-50">
							<div id="paid_plan_claims_area" style="min-width: 310px; height: 300px; margin: 0 auto"></div>
							
							</div>
						</div>
					</div>
						
				
					
				</div>
			</div>
			
			
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-4">

						<div class="box-head-claim margin-top-0">2009 Plan Year</div>
						<div class="box-border  padding-6 back-lightgrey">
									 
								 	<table style="width: 100%">
										<thead>

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
					<div class="col-md-4">
						<div class="box-head-claim margin-top-0">2010 Plan Year</div>
						<div class="box-border  padding-6 back-lightgrey">
						
								 
								<table style="width: 100%">
										<thead>

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
						
					<div class="col-md-4">
						<div class="box-head-claim margin-top-0">2011 Plan Year</div>
						<div class="box-border  padding-6 back-lightgrey">
						
								 
									<table style="width: 100%">
										<thead>

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
			
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-4">

						<div class="box-head-claim margin-top-0">2012 Plan Year</div>
						<div class="box-border  padding-6 back-lightgrey">
									 
								 	<table style="width: 100%">
										<thead>

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
					<div class="col-md-4">
						<div class="box-head-claim margin-top-0">2013 Plan Year</div>
						<div class="box-border  padding-6 back-lightgrey">
						
								 
								<table style="width: 100%">
										<thead>

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
						
					<div class="col-md-4">
						<div class="box-head-claim margin-top-0">2014 Plan Year</div>
						<div class="box-border  padding-6 back-lightgrey">
						
								 
									<table style="width: 100%">
										<thead>

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
			
		<!-- <div class="row">
				<div class="col-md-12">
					<div class="col-md-6">

						<div class="col-md-12 back-header-color padding-bottom-10 margin-bottom-10">
							

							

							<div class="col-md-12">
								<div class="col-md-12 back-white border-radius-8 padding-bottom-10">
									<div class="font-21 text-align-center padding-bottom-10">Average Total Cost / Month</div>

									<table style="width: 100%">
										<thead>

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

						
						</div>
					</div>
					<div class="col-md-6">
						<div class="col-md-12 back-header-color padding-bottom-10 margin-bottom-10">
							

							

							<div class="col-md-12">
								<div class="col-md-12 back-white border-radius-8 padding-bottom-10">
									<div class="font-21 text-align-center padding-bottom-10">Actual Vs Budgeted</div>

									<table style="width: 50%" class="pull-left">
										

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
									<table style="width: 50%;background-color: rgba(44, 168, 50, 0.5);"  class="pull-left">
										

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
			</div>-->
			
			 <div class="row">
				<div class="col-md-12">
				 
							 <div class="box-head-claim">Report Details</div>
								<div class="col-md-12 back-white border-radius-8 padding-bottom-10">
									 
									 <div class="box-border  padding-6 back-lightgrey">
						
								 
									<table style="width: 100%">
										<thead>

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

									<?php
									/*
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

function filter($item) {
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

$filteredresultData = array_filter($resultData, 'filter');


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
//'mergeHeader'=>true
            ],
			[
"attribute" => "pharmacyclaim",
'label' => 'Net Pharmacy Claim',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
//'mergeHeader'=>true
],
[
"attribute" => "dentalclaim",
'label' => '',
'width'=>'150px',
//'pageSummary' => true,
//'mergeHeader'=>true
],
[
"attribute" => "netclaim",
'label' => 'Total Monthly Net Claims',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
//'mergeHeader'=>true
],
[
"attribute" => "administrationfees",
'label' => 'Administration Fees',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
//'pageSummary'=>true,
//'mergeHeader'=>true
],



[
"attribute" => "reinsurancepremiums",
'label' => 'Reinsurance Premiums',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
//'mergeHeader'=>true
],


[
"attribute" => "expectedclaims",
'label' => 'Total Monthly Plan Costs',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
//'mergeHeader'=>true
],
[
"attribute" => "monthlyenrollment",
'label' => 'Monthly Employee Enrollment',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
//'mergeHeader'=>true
],
[
"attribute" => "monthlymemberenrollment",
'label' => 'Monthly Member Enrollment',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
//'mergeHeader'=>true
],
[
"attribute" => "monthlybudget",
'label' => 'Monthly Budget',
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
														/*	'toolbar' =>  [
																/*
																'{export}',
																'{toggleData}'*/
													/*		],
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
															//'pageSummary'=>true,
															// 'showFooter'=>True,
															'panel' => [
																'type' => GridView::TYPE_PRIMARY,
																'footer' => false,
															],
														]);
															
															
														*/	?>
									
								</div>
			 
					
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 margin-bottom-10" align="right">
				<div class="col-md-12">
				Page 1 of 2
				</div>
				</div>
			</div>
			</div>
			
			<div class="container reports-container">
			
				<div class="row">
		<div class="col-md-12">
		<div class="col-md-6 margin-top-15 ">
		<img class="img-responsive"	src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/images/logo/company-logo.png" 
						alt="Contact Us">
		</div>
		<div class="col-md-6" align="right">
		<span class="display-block left-head">ABC Engineering</span>
		<span class="display-block left-head">Plan Year Budget Report</span>
		<span class="display-block left-head">Medical & Pharmacy Plan</span>
		</div>
		</div>
		</div>
		
			<div class="row">
			<div class="col-md-12">
			<div class="box-head-claim margin-top-0">Plan Details</div>
						<div class="box-border  padding-6 back-lightgrey">
									 
								 	<table style="width: 100%">
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
			<div class="row">
				<div class="col-md-12 margin-bottom-10" align="right">
				<div class="col-md-12">
				Page 2 of 2
				</div>
				</div>
			</div>
			</div>
			<style>
		table, th, td {
    border: 1px solid black;
}
</style>
			<script>

Highcharts.chart('paid_plan_claims', {

chart: {
     backgroundColor: 'transparent',
     polar: true,
    // type: 'column',
  
  },
  title: {
 text: ''
},
exporting: { enabled: false },
xAxis: {
	labels: {
     style: {
         color: 'white'
     },
   
},
	  title: {
		 style: {
	         color: 'white',
	      },
       enabled: true,
       text: ''
   },
    categories: ["2009", "2010", "2011", "2012", "2013", "2014"]
},
yAxis: {
	labels: {
     style: {
         color: 'white'
     },
   
},
    min: 0,
    title: {
        text: ''
    },
    stackLabels: {
        enabled: false,
        style: {
            fontWeight: 'normal',
            color: (Highcharts.theme && Highcharts.theme.textColor) || 'white'
        }
    }
},
legend: {
    align: 'center',
   // x: -30,
    verticalAlign: 'bottom',
    //y: 25,
    floating: false,
   // backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'white',
   // borderColor: '#CCC',
  //  borderWidth: 1,
    shadow: false,
	itemStyle: { "color": "white" },
},
tooltip: {
    headerFormat: '<b>{point.x}</b><br/>',
    pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
},
plotOptions: {
    column: {
        stacking: 'normal',
        dataLabels: {
            enabled: false,
            color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'
        }
    }
},
series: [{
	type: 'column',
	 backgroundColor: 'transparent',
    name: 'Medical Plan (Net)',
    data: [ 400000, 900000, 550000, 200000,600000, 600000 ]
}, {
	type: 'column',
	 backgroundColor: 'transparent',
    name: 'Pharmacy Plan (Net)',
    data: [ 800000, 550000, 900000, 300000,800000, 600000]
}
, {
	type: 'column',
	 backgroundColor: 'transparent',
    name: 'Fixed Costs',
    data: [ 800000, 550000, 900000, 300000,800000, 600000]
}
, {
        type: 'spline',
        name: 'Employee Cost Share',
        data: [800000, 800000, 800000, 800000,800000, 800000],
        marker: {
            lineWidth: 2,
            lineColor: Highcharts.getOptions().colors[3],
            fillColor: 'white'
        }
    },
	 {
        type: 'spline',
        name: 'Budget',
        data: [400000, 400000, 400000, 400000,400000, 400000],
        marker: {
            lineWidth: 2,
            lineColor: Highcharts.getOptions().colors[3],
            fillColor: 'white'
        }
    },
	
]
});



Highcharts.chart('paid_plan_claims_area', {
    chart: {
		backgroundColor: 'transparent',
        
    },
    title: {
        text: ''
    },
    subtitle: {
        text: ''
    },
	exporting: { enabled: false },
    xAxis: {
		labels: {
     style: {
         color: 'white'
     },
   
},
	 
           categories: ["2009", "2010", "2011", "2012", "2013", "2014"],
        tickmarkPlacement: 'on',
        title: {
		 style: {
	         color: 'white',
	      },
       enabled: true,
       text: ''
   },
    },
    yAxis: {
		  title: {
            text: ''
        },
        labels: {
            
			style: {
         color: 'white'
     },
	 
        }
    },
	legend: {
    align: 'center',
   // x: -30,
    verticalAlign: 'bottom',
    //y: 25,
    floating: false,
   // backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'white',
   // borderColor: '#CCC',
  //  borderWidth: 1,
    shadow: false,
	itemStyle: { "color": "white" },
},
    tooltip: {
        split: true,
        valueSuffix: ' millions'
    },
    plotOptions: {
        area: {
            stacking: 'normal',
            lineColor: '#666666',
            lineWidth: 1,
            marker: {
                lineWidth: 1,
                lineColor: '#666666'
            }
        }
    },
    series: [
	 {
        name: 'Fixed Costs',
		type: 'area',
        data: [600000, 600000, 900000, 1000000, 1000000,1000000]
    },
	{
        name: 'Medical Plan (Net)',
		type: 'area',
        data: [ 600000, 600000, 900000, 1000000, 1000000,1000000]
    }, {
        name: 'Pharmacy Plan (Net)',
		type: 'area',
        data: [ 600000, 600000, 900000, 1000000, 1000000,1000000]
    }
	, {
        type: 'spline',
        name: 'Expected Monthly Claims',
        data: [ 600000, 700000,800000, 900000, 1300000, 1500000],
        marker: {
            lineWidth: 2,
            lineColor: Highcharts.getOptions().colors[3],
            fillColor: 'white'
        }
    },
	 {
        type: 'spline',
        name: 'Expected Monthly Claims',
        data: [ 600000, 700000,800000, 900000, 1300000, 1500000],
        marker: {
            lineWidth: 2,
            lineColor: Highcharts.getOptions().colors[3],
            fillColor: 'white'
        }
    },
	]
});
			</script>
			
<style>
body.blue .back-widget{
	
	background: rgb(1, 38, 67) !important;
	color:white !important;
}
body.blue .colorwhite>.dx-datagrid{
	color:white !important;
}

</style>
		</div>
		
		</section>