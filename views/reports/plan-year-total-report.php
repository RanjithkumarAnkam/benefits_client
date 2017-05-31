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
		<div class="container  reports-container">
		
		<div class="row">
		<div class="col-md-12">
		<div class="col-md-6 margin-top-15 ">
		<img class="img-responsive"	src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/images/logo/company-logo.png" 
						alt="Contact Us">
		</div>
		<div class="col-md-6" align="right">
		<span class="display-block left-head">ABC Engineering</span>
		<span class="display-block left-head">Plan Year Total Cost Report</span>
		<span class="display-block left-head">Medicals Claims</span>
		</div>
		</div>
		</div>
		
		 <div class="row">
				<div class="col-md-12">
					<div class="col-md-6">
						<div class="widget back-widget box-shadow widget-six">
							<div class="widget-header">

								<strong class="margin-right-10">Total and Net Plan Costs By Month</strong>
								
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

								<strong class="margin-right-10">Total and Net Plan Costs By Month</strong>
								
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

					<div class="box-head-claim margin-top-0">Member Cost Share</div>
						<div class="box-border  padding-6 back-lightgrey">
						
									<table style="width: 100%">
										<thead>

											<tr>

												<th class="text-align-center">Expenditures</th>
												<th class="text-align-center">Amount</th>
												<th class="text-align-center">Gross</th>
												<th class="text-align-center">Net</th>
												
											</tr>
										</thead>

										<tbody class="text-align-center">
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Employer Expenditures</td>
												<td>5,801,115</td>
												<td>$398</td>
												<td>$179</td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Employee/Member Costs</td>
												<td>2,612,492</td>
												<td>$216</td>
												<td>$97</td>
												
											</tr>
											<tr  style="background-color: white;">
												<td>Total</td>
												<td><u>8,413,607</u></td>
												<td>$577</td>
												<td>$314</td>
											</tr>
											
										</tbody>
									</table>
									
					

						
						</div>
					</div>
					<div class="col-md-4">
							<div class="box-head-claim margin-top-0">Fixed / Variable Cost Allocation</div>
						<div class="box-border  padding-6 back-lightgrey">
								 
									<table style="width: 100%">
											<thead>

											<tr>

												<th class="text-align-center">Costs</th>
												<th class="text-align-center">Amount</th>
												<th class="text-align-center">Gross</th>
												<th class="text-align-center">Net</th>
												
											</tr>
										</thead>

										<tbody class="text-align-center">
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Fixed Costs</td>
												<td>5,801,115</td>
												<td>$398</td>
												<td>$179</td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Claim Costs</td>
												<td>2,612,492</td>
												<td>$216</td>
												<td>$97</td>
												
											</tr>
											<tr  style="background-color: white;">
												<td>Total</td>
												<td><u>8,413,607</u></td>
												<td>$577</td>
												<td>$314</td>
											</tr>
											
										</tbody>
									</table>
									
							 
							</div>

						
						</div>
			 
						
				<div class="col-md-4">
						<div class="box-head-claim margin-top-0">Average Cost Evalution</div>
						<div class="box-border  padding-6 back-lightgrey">
									 
									<table style="width: 100%">
									<thead>

											<tr>

												<th class="text-align-center">Costs</th>
												<th class="text-align-center">Amount</th>
												<th class="text-align-center">Gross</th>
												<th class="text-align-center">Net</th>
												
											</tr>
										</thead>

										<tbody class="text-align-center">
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Ave. Fixed Costs / Mo</td>
												<td>5,801,115</td>
												<td>$398</td>
												<td>$179</td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Ave. Claim Costs / Mo</td>
												<td>2,612,492</td>
												<td>$216</td>
												<td>$97</td>
												
											</tr>
											<tr  style="background-color: white;">
												<td>Total</td>
												<td><u>8,413,607</u></td>
												<td>$577</td>
												<td>$314</td>
											</tr>
											
										</tbody>
									</table>
									
								</div>
							</div>

						
					 
					
				</div>
			</div>
			
			 <div class="row">
				<div class="col-md-12 " id="plan_year_total_report">
				 
							 <div class="box-head-claim">Report Description</div>
								<div class="col-md-12 back-white border-radius-8 padding-bottom-10">
									 

									<?php
$resultData = [
    array("month"=>"Jan-13","netmedicalclaim"=>"550624","netpharmacyclaim"=>"7470","dentalclaim"=>"","monthlyclaims"=>"558094","adminfee"=>"51698","reinsurancepermium"=>"61765","monthlyplan"=>"671557","monthlyemployeeenrollment"=>"1221","monthlymemberenrollment"=>"2228","employeepremium"=>"145886","cobracontribution"=>"15042","memberpaidcopay"=>"53725","netemployermonthlycost"=>"456905"),
   array("month"=>"Feb-13","netmedicalclaim"=>"550624","netpharmacyclaim"=>"7470","dentalclaim"=>"","monthlyclaims"=>"558094","adminfee"=>"51698","reinsurancepermium"=>"61765","monthlyplan"=>"671557","monthlyemployeeenrollment"=>"1221","monthlymemberenrollment"=>"2228","employeepremium"=>"145886","cobracontribution"=>"15042","memberpaidcopay"=>"53725","netemployermonthlycost"=>"456905"),
   array("month"=>"Mar-13","netmedicalclaim"=>"550624","netpharmacyclaim"=>"7470","dentalclaim"=>"","monthlyclaims"=>"558094","adminfee"=>"51698","reinsurancepermium"=>"61765","monthlyplan"=>"671557","monthlyemployeeenrollment"=>"1221","monthlymemberenrollment"=>"2228","employeepremium"=>"145886","cobracontribution"=>"15042","memberpaidcopay"=>"53725","netemployermonthlycost"=>"456905"),
   array("month"=>"Apr-13","netmedicalclaim"=>"550624","netpharmacyclaim"=>"7470","dentalclaim"=>"","monthlyclaims"=>"558094","adminfee"=>"51698","reinsurancepermium"=>"61765","monthlyplan"=>"671557","monthlyemployeeenrollment"=>"1221","monthlymemberenrollment"=>"2228","employeepremium"=>"145886","cobracontribution"=>"15042","memberpaidcopay"=>"53725","netemployermonthlycost"=>"456905"),
   array("month"=>"May-13","netmedicalclaim"=>"550624","netpharmacyclaim"=>"7470","dentalclaim"=>"","monthlyclaims"=>"558094","adminfee"=>"51698","reinsurancepermium"=>"61765","monthlyplan"=>"671557","monthlyemployeeenrollment"=>"1221","monthlymemberenrollment"=>"2228","employeepremium"=>"145886","cobracontribution"=>"15042","memberpaidcopay"=>"53725","netemployermonthlycost"=>"456905"),
   array("month"=>"June-13","netmedicalclaim"=>"550624","netpharmacyclaim"=>"7470","dentalclaim"=>"","monthlyclaims"=>"558094","adminfee"=>"51698","reinsurancepermium"=>"61765","monthlyplan"=>"671557","monthlyemployeeenrollment"=>"1221","monthlymemberenrollment"=>"2228","employeepremium"=>"145886","cobracontribution"=>"15042","memberpaidcopay"=>"53725","netemployermonthlycost"=>"456905"),
   array("month"=>"July-13","netmedicalclaim"=>"550624","netpharmacyclaim"=>"7470","dentalclaim"=>"","monthlyclaims"=>"558094","adminfee"=>"51698","reinsurancepermium"=>"61765","monthlyplan"=>"671557","monthlyemployeeenrollment"=>"1221","monthlymemberenrollment"=>"2228","employeepremium"=>"145886","cobracontribution"=>"15042","memberpaidcopay"=>"53725","netemployermonthlycost"=>"456905"),
   array("month"=>"Aug-13","netmedicalclaim"=>"550624","netpharmacyclaim"=>"7470","dentalclaim"=>"","monthlyclaims"=>"558094","adminfee"=>"51698","reinsurancepermium"=>"61765","monthlyplan"=>"671557","monthlyemployeeenrollment"=>"1221","monthlymemberenrollment"=>"2228","employeepremium"=>"145886","cobracontribution"=>"15042","memberpaidcopay"=>"53725","netemployermonthlycost"=>"456905"),
   array("month"=>"Sep-13","netmedicalclaim"=>"550624","netpharmacyclaim"=>"7470","dentalclaim"=>"","monthlyclaims"=>"558094","adminfee"=>"51698","reinsurancepermium"=>"61765","monthlyplan"=>"671557","monthlyemployeeenrollment"=>"1221","monthlymemberenrollment"=>"2228","employeepremium"=>"145886","cobracontribution"=>"15042","memberpaidcopay"=>"53725","netemployermonthlycost"=>"456905"),
   array("month"=>"Oct-13","netmedicalclaim"=>"550624","netpharmacyclaim"=>"7470","dentalclaim"=>"","monthlyclaims"=>"558094","adminfee"=>"51698","reinsurancepermium"=>"61765","monthlyplan"=>"671557","monthlyemployeeenrollment"=>"1221","monthlymemberenrollment"=>"2228","employeepremium"=>"145886","cobracontribution"=>"15042","memberpaidcopay"=>"53725","netemployermonthlycost"=>"456905"),
   array("month"=>"Nov-13","netmedicalclaim"=>"550624","netpharmacyclaim"=>"7470","dentalclaim"=>"","monthlyclaims"=>"558094","adminfee"=>"51698","reinsurancepermium"=>"61765","monthlyplan"=>"671557","monthlyemployeeenrollment"=>"1221","monthlymemberenrollment"=>"2228","employeepremium"=>"145886","cobracontribution"=>"15042","memberpaidcopay"=>"53725","netemployermonthlycost"=>"456905"),
   array("month"=>"Dec-13","netmedicalclaim"=>"550624","netpharmacyclaim"=>"7470","dentalclaim"=>"","monthlyclaims"=>"558094","adminfee"=>"51698","reinsurancepermium"=>"61765","monthlyplan"=>"671557","monthlyemployeeenrollment"=>"1221","monthlymemberenrollment"=>"2228","employeepremium"=>"145886","cobracontribution"=>"15042","memberpaidcopay"=>"53725","netemployermonthlycost"=>"456905"),
   
   
      
   
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
            "attribute" => "netmedicalclaim",
           // 'filter' => '<input class="form-control" name="filteremail" value="'. $searchModel['medicalclaim'] .'" type="text">',
            'value' => 'netmedicalclaim',
'label' => 'Net Medical Claims',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
//'mergeHeader'=>true
            ],
[
"attribute" => "netpharmacyclaim",
'label' => 'Net Pharmacy Claims',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
//'mergeHeader'=>true
],
/*[
"attribute" => "dentalclaim",
'label' => '',
'width'=>'150px',
//'mergeHeader'=>true
],*/
  
[
"attribute" => "monthlyclaims",
'label' => 'Total Monthly Net Claims',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
//'mergeHeader'=>true
],
[
"attribute" => "adminfee",
'label' => 'Administration Fees',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
//'mergeHeader'=>true
],
[
"attribute" => "reinsurancepermium",
'label' => 'Reinsurance Premiums',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
//'mergeHeader'=>true
],

[
"attribute" => "monthlyplan",
'label' => 'Total Monthly Plan Costs',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
//'mergeHeader'=>true
],
[
"attribute" => "monthlyemployeeenrollment",
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
"attribute" => "employeepremium",
'label' => 'Employee Premiums',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
//'mergeHeader'=>true
],

[
"attribute" => "cobracontribution",
'label' => 'Cobra Contributions',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
//'mergeHeader'=>true
],

[
"attribute" => "memberpaidcopay",
'label' => 'Member Paid Ded. Copay etc',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
//'mergeHeader'=>true
],
[
"attribute" => "netemployermonthlycost",
'label' => 'Total Net Employer Monthly Cost',
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
															'panel' => [
																'type' => GridView::TYPE_PRIMARY,
																'footer' => false,
															],
														]);
															
															
															?>
									
								</div>
			 
					
				</div>
			</div>
			</div>
			<style>
		table, th, td {
    border: 1px solid black;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
#plan_year_total_report #w0-filters{
	display:none;
}
#plan_year_total_report thead{
	    border-bottom: 1px solid #dddddd;
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
    name: 'Net Medical Plan (Net)',
    data: [200000, 400000, 1000000, 600000,100000, 900000, 550000, 200000,600000, 500000, 100000, 200000]
}, {
	type: 'column',
	 backgroundColor: 'transparent',
    name: 'Net Pharmacy Plan (Net)',
    data: [400000, 800000, 200000, 100000,80000, 550000, 900000, 300000,800000, 200000, 80000, 400000]
},
{
	type: 'column',
	 backgroundColor: 'transparent',
    name: 'Adminstration Fees',
    data: [200000, 400000, 1000000, 600000,100000, 900000, 550000, 200000,600000, 500000, 100000, 200000]
}, {
	type: 'column',
	 backgroundColor: 'transparent',
    name: 'Reinsurance Premiums',
    data: [400000, 800000, 200000, 100000,80000, 550000, 900000, 300000,800000, 200000, 80000, 400000]
},

 {
        type: 'spline',
        name: 'Total Net Employer Monthly Cost',
        data: [400000, 500000, 600000, 470000,40000, 900000, 500000, 510000,520000, 900000, 400000, 400000],
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
    series: [{
        name: 'Net Medical Claims',
		type: 'area',
        data: [200000, 400000, 1000000, 600000,100000, 900000, 550000, 200000,600000, 500000, 100000, 200000]
    }, {
        name: 'Net Pharmacy Claims',
		type: 'area',
        data: [400000, 800000, 200000, 100000,80000, 550000, 900000, 300000,800000, 200000, 80000, 400000]
    }, {
        name: 'Total Fixed Costs',
		type: 'area',
        data: [400000, 800000, 200000, 100000,80000, 550000, 900000, 300000,800000, 200000, 80000, 400000]
    }, 
	{
        name: 'Total Net Employer Costs',
		type: 'area',
        data: [400000, 800000, 200000, 100000,80000, 550000, 900000, 300000,800000, 200000, 80000, 400000]
    }, ]
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