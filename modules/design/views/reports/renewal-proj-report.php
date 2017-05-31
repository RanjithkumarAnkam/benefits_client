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
		<span class="display-block left-head">Renewal Contract Year Financial Projection Report</span>
		<span class="display-block left-head">Medical & Pharmacy Plan</span>
		</div>
		</div>
		</div>
		 <div class="row">
				<div class="col-md-12">
				 <div class="box-head-claim col-md-12"><u>2015 Plan Year Renewal Projection</u></div>
					<div class="col-md-12">
										 <fieldset>
								 
									<legend>Experience Period #1</legend>
											<div class="col-md-12 padding-0  margin-bottom-15">
											<table class="" style="width: 100%;">
											<tbody class="text-align-center">
										
											<tr>
												<td>Projected Employee Enrollment</td>
												<td>1,204	</td>
												<td>Assumed most recent enrollment month</td>
												
											</tr>
											<tr>
											<td>Projected Member Enrollment</td>
												<td>2223	</td>
												<td>Assumed most recent enrollment month</td>
											</tr>
											
											</tbody>
										</table>
											</div>
									 
										</fieldset>
					<!--	<div class="widget back-widget box-shadow widget-six">
							<div class="widget-header">

								<strong class="margin-right-10">Total Paid Plan Claims By Month (Actual & Projected)</strong>
								
							</div>

							<br />
							<div class="margin-bottom-50">
							<div id="paid_plan_claims" style="min-width: 310px; height: 300px; margin: 0 auto"></div>
							
							</div>
						</div>-->
					</div>
				<div class="col-md-12">
										 <fieldset>
								 
									<legend>Fixed Cost Items</legend>
											<div class="col-md-12 padding-0  margin-bottom-15">
											<table class="" style="width: 100%;">
											<tbody class="text-align-center">
										
											<tr>
												<td>Administration Fees		</td>
												<td>637,975		</td>
												<td>Assume 4% increase over current contract year, based upon most recent month fees.</td>
												
											</tr>
											<tr>
											<td>Reinsurance Premiums			</td>
												<td>84,2223	</td>
												<td>Assume 20% increase over current contract year, based upon most recent month fees.</td>
											</tr>
											<tr>
											<td><u><b>Total</b></u>		</td>
												<td><b>1,52,2223</b>	</td>
												<td> </td>
											</tr>
											
											</tbody>
										</table>
											</div>
									 
										</fieldset>
			 
					</div>
						
				<div class="col-md-12">
										 <fieldset>
								 
									<legend>Claim Cost Items</legend>
											<div class="col-md-12 padding-0  margin-bottom-15">
											<table class="" style="width: 100%;">
											<tbody class="text-align-center">
										
											<tr>
												<td>Net Medical Claims		</td>
												<td>7,992,717					</td>
											 	
											</tr>
											<tr>
											<td>Net Pharmacy Claims				</td>
												<td>2,277,771		</td>
										 	</tr>
											<tr>
											<td><u><b>Total</b></u>		</td>
												<td><b>10,270,488	</b>	</td>
												 
											</tr>
											
											</tbody>
										</table>
											</div>
									 
										</fieldset>
			 
					</div>
						
					
				</div>
			</div>
			
			 <div class="row">
				<div class="col-md-12">
				 <div class="box-head-claim col-md-12"><u>Total Overall Plan Cost Projection</u></div>
					<div class="col-md-12">
										 <fieldset>
										 <legend>Cost Projection</legend>
										 
										 <div class="col-md-12 padding-0  margin-bottom-15">
											<table class="" style="width: 100%;">
											<tbody class="text-align-center">
										
											<tr>
												<td><u><b>Projected Annual Total	</b></u>	</td>
												<td>$11,792,849						</td>
											 	
											</tr>
											<tr>
											<td><u><b>Net Pharmacy Claims</b></u>				</td>
												<td>$816.23			</td>
										 	</tr>
											<tr>
											<td><u><b>Total</b></u>		</td>
												<td><b>$442.08		</b>	</td>
												 
											</tr>
											
											</tbody>
										</table>
											</div>
										 </fieldset>
										 </div>
										 </div>
										 </div>
										 			
			 <div class="row">
				<div class="col-md-12">
				 
							 <div class="box-head-claim">Plan Year Financials (YTD)</div>
								<div class="col-md-12 back-white border-radius-8 padding-bottom-10">
									 

									<?php
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
/*[
"attribute" => "monthlybudget",
'label' => 'Monthly Budget',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
//'mergeHeader'=>true
//*],*/



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
															
															
															?>
									
								</div>
			 
					
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 margin-bottom-10" align="right">
				<div class="col-md-12">
				Page 1 of 3
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
		<span class="display-block left-head">Renewal Contract Year Financial Projection Report</span>
		<span class="display-block left-head">Medical & Pharmacy Plan</span>
		</div>
		</div>
		</div>
		 <div class="row">
				<div class="col-md-12 margin-bottom-15">
					 <div class="box-head-claim col-md-12"><u>Underwriting Assumptions</u></div>
				<div class="col-md-6   ">
										<fieldset>

												<legend>Experience Period #1</legend>
											<div class="col-md-12 padding-0  margin-bottom-15">
											<table class="" style="width: 100%;">
											<tbody class="text-align-center">
											<tr>
												<td></td>
												<td bgcolor="#d56700"><u><font color="white">From</font></u></td>
												<td bgcolor="#d56700"><u><font color="white">To</font></u></td>
												<td bgcolor="#d56700"><u><font color="white">Period Mid-Point</font></u></td>
												<td bgcolor="#00bd00"><u><font color="white">Creditiblity %</font></u></td>
												<td bgcolor="#0048bd"><u><font color="white">Trend Months</font></u></td>
											</tr>
											<tr>
												<td>Projection Period</td>
												<td bgcolor="#f6dfd5">Sep-14</td>
												<td bgcolor="#f6dfd5">Dec-14</td>
												<td bgcolor="#f6dfd5">Oct-14</td>
												<td bgcolor="#0000"></td>
												<td bgcolor="#0000"></td>
											</tr>
											<tr>
												<td>Experience Period #1</td>
												<td bgcolor="#f6dfd5">Sep-13</td>
												<td bgcolor="#f6dfd5">Aug-14</td>
												<td bgcolor="#f6dfd5">Feb-14</td>
												<td bgcolor="#ddf8de">80%</td>
												<td bgcolor="#dde6f8">8.01</td>
											</tr>
											
											</tbody>
										</table>
											</div>
											
											<div class="col-md-6 padding-0  margin-bottom-15">
											<table class="" style="width: 100%;">
											<tbody class="text-align-center">
											<tr>
												<td></td>
												<td bgcolor="#c1a344"><u><font color="white">Trend Assumptions</font></u></td>
												</tr>
											<tr>
												<td>Medical Claims</td>
												<td bgcolor="#f0e4c0">9.75%</td>
												
											</tr>
											<tr>
												<td>Pharmacy Claims</td>
												<td bgcolor="#f0e4c0">11.20%</td>
												
											</tr>
											
											</tbody>
										</table>
											</div>
											
											<div class="col-md-12 back-white padding-0">
									 

									<?php
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

function filter2($item) {
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

$filteredresultData = array_filter($resultData, 'filter2');


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
/*[
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
],*/
[
"attribute" => "monthlymemberenrollment",
'label' => 'Member Enrollment',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
//'mergeHeader'=>true
],
/*[
"attribute" => "monthlybudget",
'label' => 'Monthly Budget',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
//'mergeHeader'=>true
],*/



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
															
															
															?>
									
								</div>
											
											<div class="col-md-12 padding-0  margin-bottom-15">
											<table class="" style="width: 100%;">
											<tbody class="text-align-center">
											<tr bgcolor="#d56700">
												<td ><font color="white">Trend Assumptions</font></td>
												<td ><font color="white"><u>$257.15</u></font></td>
												<td ><font color="white"><u>$87.18</u></font></td>
												</tr>
											<tr bgcolor="#f6dfd5">
												<td>Trend Multiply Factor</td>
												<td >1.0641</td>
												<td >1.0734</td>
												
											</tr>
											<tr bgcolor="#c1a344">
												<td><font color="white">Trended Expected Claims / Enrollment</font></td>
												<td ><font color="white">$273.63</font></td>
												<td ><font color="white">$93.58</font></td>
												
											</tr>
											
											</tbody>
										</table>
											</div>
											
											</fieldset>
										</div>
					<div class="col-md-6">
										<fieldset>

												<legend>Experience Period #2</legend>
											<div class="col-md-12 padding-0  margin-bottom-15">
											<table class="" style="width: 100%;">
											<tbody class="text-align-center">
											<tr>
												<td></td>
												<td bgcolor="#d56700"><u><font color="white">From</font></u></td>
												<td bgcolor="#d56700"><u><font color="white">To</font></u></td>
												<td bgcolor="#d56700"><u><font color="white">Period Mid-Point</font></u></td>
												<td bgcolor="#00bd00"><u><font color="white">Creditiblity %</font></u></td>
												<td bgcolor="#0048bd"><u><font color="white">Trend Months</font></u></td>
											</tr>
											<tr>
												<td>Projection Period</td>
												<td bgcolor="#f6dfd5">Sep-14</td>
												<td bgcolor="#f6dfd5">Dec-14</td>
												<td bgcolor="#f6dfd5">Oct-14</td>
												<td bgcolor="#0000"></td>
												<td bgcolor="#0000"></td>
											</tr>
											<tr>
												<td>Experience Period #1</td>
												<td bgcolor="#f6dfd5">Sep-13</td>
												<td bgcolor="#f6dfd5">Aug-14</td>
												<td bgcolor="#f6dfd5">Feb-14</td>
												<td bgcolor="#ddf8de">20%</td>
												<td bgcolor="#dde6f8">20.02</td>
											</tr>
											
											</tbody>
										</table>
											</div>
											
											<div class="col-md-6 padding-0  margin-bottom-15">
											<table class="" style="width: 100%;">
											<tbody class="text-align-center">
											<tr>
												<td></td>
												<td bgcolor="#c1a344"><u><font color="white">Trend Assumptions</font></u></td>
												</tr>
											<tr>
												<td>Medical Claims</td>
												<td bgcolor="#f0e4c0">9.75%</td>
												
											</tr>
											<tr>
												<td>Pharmacy Claims</td>
												<td bgcolor="#f0e4c0">11.20%</td>
												
											</tr>
											
											</tbody>
										</table>
											</div>
											<div class="col-md-12 back-white padding-0">
									 

									<?php
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
/*[
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
],*/
[
"attribute" => "monthlymemberenrollment",
'label' => 'Member Enrollment',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
//'mergeHeader'=>true
],
/*[
"attribute" => "monthlybudget",
'label' => 'Monthly Budget',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
//'mergeHeader'=>true
],*/



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
															
															
															?>
									
								</div>
								
								<div class="col-md-12 padding-0  margin-bottom-15">
											<table class="" style="width: 100%;">
											<tbody class="text-align-center">
											<tr bgcolor="#d56700">
												<td ><font color="white">Trend Assumptions</font></td>
												<td ><font color="white"><u>$257.15</u></font></td>
												<td ><font color="white"><u>$87.18</u></font></td>
												</tr>
											<tr bgcolor="#f6dfd5">
												<td>Trend Multiply Factor</td>
												<td >1.0641</td>
												<td >1.0734</td>
												
											</tr>
											<tr bgcolor="#c1a344">
												<td><font color="white">Trended Expected Claims / Enrollment</font></td>
												<td ><font color="white">$273.63</font></td>
												<td ><font color="white">$93.58</font></td>
												
											</tr>
											
											</tbody>
										</table>
											</div>
											</fieldset>
										</div>
					
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-12 margin-bottom-10" align="right">
				<div class="col-md-12">
				Page 2 of 3
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
		<span class="display-block left-head">Renewal Contract Year Financial Projection Report</span>
		<span class="display-block left-head">Medical & Pharmacy Plan</span>
		</div>
		</div>
		</div>
		 <div class="row">
				<div class="col-md-12 margin-bottom-15">
					 <div class="box-head-claim col-md-12"><u>COBRA Rate Calculator</u></div>
				<div class="col-md-12">
										<fieldset>

												<legend> Plan 1</legend>
											<div class="col-md-12 padding-0  margin-bottom-15">
											<table class="" style="width: 100%;">
											<tbody class="text-align-center">
												<tr>
												<td></td>
												 
												<td>Current Year Rates</td>
												<td>Current Enrollment</td>
												<td>Rate Slope</td>
												 <td>Cobra Rates</td>
											</tr>
											<tr>
												<td>Employee Only</td>
												<td>514.94</td>
												<td>500</td>
												<td>1.0000</td> 
												<td>$561.00</td> 
											</tr>
											<tr>
												<td>Employee Only</td>
												<td>514.94</td>
												<td>500</td>
												<td>1.0000</td> 
												<td>$1122.00</td> 
											</tr>
											<tr>
												<td>Employee Only</td>
												<td>514.94</td>
												<td>500</td>
												<td>1.0000</td> 
												<td>$561.00</td> 
											</tr>
											<tr>
												<td>Employee Only</td>
												<td>514.94</td>
												<td>500</td>
												<td>1.0000</td> 
												<td>$1561.00</td> 
											</tr>
											
											</tbody>
										</table>
											</div>
											
											
											
									
											
										
											</fieldset>
										</div>
					<div class="col-md-12">
										<fieldset>

												<legend>Plan 2</legend>
											<div class="col-md-12 padding-0  margin-bottom-15">
											<table class="" style="width: 100%;">
											<tbody class="text-align-center">
											<tr>
												<td></td>
												 
												<td>Current Year Rates</td>
												<td>Current Enrollment</td>
												<td>Rate Slope</td>
												 <td>Cobra Rates</td>
											</tr>
											<tr>
												<td>Employee Only</td>
												<td>514.94</td>
												<td>500</td>
												<td>1.0000</td> 
												<td>$561.00</td> 
											</tr>
											<tr>
												<td>Employee Only</td>
												<td>514.94</td>
												<td>500</td>
												<td>1.0000</td> 
												<td>$1122.00</td> 
											</tr>
											<tr>
												<td>Employee Only</td>
												<td>514.94</td>
												<td>500</td>
												<td>1.0000</td> 
												<td>$561.00</td> 
											</tr>
											<tr>
												<td>Employee Only</td>
												<td>514.94</td>
												<td>500</td>
												<td>1.0000</td> 
												<td>$1561.00</td> 
											</tr>
											
											</tbody>
										</table>
											</div>
											
											</fieldset>
										</div>
					
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-12 margin-bottom-10" align="right">
				<div class="col-md-12">
				Page 3 of 3
				</div>
				</div>
			</div>
			
			
			</div>
			<style>
		table, th, td {
    border: 1px solid black;
}
fieldset {
    border: 1px solid #c0c0c0;
    margin: 0 2px;
    padding: 0.35em 0.625em 0.75em;
}
legend {
    width: inherit;
	font-size: 14px;
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
    categories: ["Jan-17", "Feb-17", "Mar-17", "Apr-17", "May-17", "Jun-17","Jul-17", "Aug-17", "Sep-17", "Oct-17", "Nov-17", "Dec-17"]
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
    name: 'Actual Medical Plan (Net)',
    data: [200000, 400000, 1000000, 600000,100000, 900000, 550000, 200000,600000, 500000, 100000, 200000]
}, {
	type: 'column',
	 backgroundColor: 'transparent',
    name: 'Actual Pharmacy Plan (Net)',
    data: [400000, 800000, 200000, 100000,80000, 550000, 900000, 300000,800000, 200000, 80000, 400000]
}
, {
	type: 'column',
	 backgroundColor: 'transparent',
    name: 'Actual Fixed Costs',
    data: [400000, 800000, 200000, 100000,80000, 550000, 900000, 300000,800000, 200000, 80000, 400000]
},
{
	type: 'column',
	 backgroundColor: 'transparent',
    name: 'Projected Medical Plan (Net)',
    data: [200000, 400000, 1000000, 600000,100000, 900000, 550000, 200000,600000, 500000, 100000, 200000]
},
{
	type: 'column',
	 backgroundColor: 'transparent',
    name: 'Projected Pharmacy Plan (Net)',
    data: [200000, 400000, 1000000, 600000,100000, 900000, 550000, 200000,600000, 500000, 100000, 200000]
}
,
 {
	type: 'column',
	 backgroundColor: 'transparent',
    name: 'Projected Fixed Costs',
    data: [400000, 800000, 200000, 100000,80000, 550000, 900000, 300000,800000, 200000, 80000, 400000]
}, {
        type: 'spline',
        name: 'Monthly Budget',
        data: [400000, 400000, 400000, 400000,400000, 400000, 400000, 400000,400000, 400000, 400000, 400000],
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
	 
        categories: ["Jan-17", "Feb-17", "Mar-17", "Apr-17", "May-17", "Jun-17","Jul-17", "Aug-17", "Sep-17", "Oct-17", "Nov-17", "Dec-17"],
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
        data: [200000,200000,  200000, 400000, 550000, 500000, 600000, 600000, 900000, 1000000, 1000000,1000000]
    },
	{
        name: 'Medical Plan (Net)',
		type: 'area',
        data: [200000,200000,  200000, 400000, 550000, 500000, 600000, 600000, 900000, 1000000, 1000000,1000000]
    }, {
        name: 'Pharmacy Plan (Net)',
		type: 'area',
        data: [200000,200000,  200000, 400000, 550000, 500000, 600000, 600000, 900000, 1000000, 1000000,1000000]
    }
	, {
        type: 'spline',
        name: 'Expected Monthly Claims',
        data: [0, 100000, 200000, 300000,400000, 500000, 600000, 700000,800000, 900000, 1300000, 1500000],
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