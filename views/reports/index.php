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
		 
		
		<div class="container reports-container">
		
			<div class="row">
		<div class="col-md-12">
		<div class="col-md-12 padding-bottom-15">
		<div class="col-md-4">
		<img class="img-responsive" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/images/logo/company-logo.png" alt="Export">
		</div>
		<div class="col-md-5">
		<span class="display-block engineer">ABC ENGINEERING</span>
		<span class=" left-head" style="font-size: 13px;"><b>Claims Trend Report</b></span> |
		<span class=" left-head" style="font-size: 13px;"><b>Medicals Claims</b></span>
		</div>
  <div class="col-md-3" align="right">
		<img class="img-responsive" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/images/logo/benefits.png" alt="Export" style="background: black; width: 200px;height: 38px;">

		</div>
		</div>
		</div>
		</div>
		 <div class="row">
				<div class="col-md-12">
					<div class="col-md-6 col-xs-12">
					<div class="box-head-claim margin-top-0">Claim Trend Analysis</div>
						<div class="widget back-widget box-shadow widget-six">
							<div class="widget-header">

								<strong class="margin-right-10">Claim Trend Analysis</strong>
								
							</div>

							<br />
							<div class="margin-bottom-50">
							<div id="module_subscription" style="min-width: 310px; height: 200px; margin: 0 auto"></div>
							
							</div>
						</div>
					</div>

						<div class="col-md-6 col-xs-12">
						<div class="box-head-claim margin-top-0">Comments</div>
						<div class="box-border padding-comment back-lightgrey">
							<p>
As of January 2015, your 12 month Medical Claims trend is -6.1%. The 24 month trend on this plan is -5.0%
It is often helpful to compare these figures to what these same trend amounts were 6 month, 12 months and 24 months ago. By doing this you can gauge the current health of your claims trends.</p>


<p>The trend on these plans claims over prior periods were as follows:</p>
<table class="width-100">
<thead>
<tr>
				<th class="text-align-center"></th>
				<th class="text-align-center">12 Month Trend</th> 
				<th class="text-align-center">24 Month Trend</th>
			  </tr>
</thead>
<tbody class="text-align-center">
  <tr class="tr-back-firm">
				<td>6 Months Ago</td>
				<td>-1.5%</td> 
				<td>-4.24%</td>
			  </tr>
			   <tr class="tr-back-firm">
				<td>12 Months Ago</td>
				<td>-1.4%</td> 
				<td>-2.24%</td>
			  </tr>
			   <tr class="tr-back-firm">
				<td>24 Months Ago</td>
				<td>-1.3%</td> 
				<td>-3.24%</td>
			  </tr>
</tbody>
</table>
							
						</div>
						
					</div>
				
					
				</div>
			</div>
			
			<div class="row">
			<div class="col-md-12 padding-15">
			<div class="box-head-claim">Report Description</div>
						<div class="box-border padding-6 back-lightgrey">
							<p>
							
The Plan Claim Trend report is designed to help you understand the true trend rate for claims experienced under your plan.  By adjusting the claims experience
for reimbursements, and tracking the actual enrollment by month on your plan, the report can then calculate a rolling 12 and 24 month average of claims per
enrollment unit.  Next, by comparing these rolling average figures to the same figure a year ago, we can view the actual claims trend for your plan.
</p>


<p>In this report, a 12 month and 24 month rolling view of trend is provided.  Generally speaking it is important to look at both, as the 12 month trend can
be more volatile that the 24 month rolling average view of trend due to the fact that it considers fewer data points.</p>
</div></div>
			</div>
			
			<div class="row">
			<div class="col-md-12 padding-15" id="claim_trend">
			<div class="box-head-claim">Report Details</div>
			<?php
$resultData = [
    array("month"=>"Feb-12","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"Mar-12","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"Apr-12","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"May-12","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"June-12","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"July-12","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"Aug-12","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"Sep-12","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"Oct-12","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"Nov-12","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"Dec-12","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"Jan-13","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"Feb-13","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"Mar-13","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"Apr-13","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"May-13","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"June-13","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"July-13","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"Aug-13","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"Sep-13","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"Oct-13","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"Nov-13","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"Dec-13","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"Jan-14","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"Feb-14","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"Mar-14","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"Apr-14","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"May-14","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"June-14","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"July-14","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    array("month"=>"Aug-14","medicalclaim"=>"569207","pharmacyclaim"=>"","dentalclaim"=>"","sslclaim"=>"3365","netclaim"=>"565573","memberenrollment"=>"2290","claims"=>"247","12monthavg"=>"259","24monthavg"=>"261","12monthtrend"=>"-1.6%","24monthtrend"=>"-2.4%"),
    
   
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
            ['class' => 'yii\grid\SerialColumn'],
            

        [
            'attribute' => 'month', 
            'value' => 'month',
			'headerOptions' => ['class' => 'blue-grid-head'],
'label' => 'Month',
//'width'=>'150px',
'noWrap'=>true,
//'mergeHeader'=>true
            ],
            [
            "attribute" => "medicalclaim",
           // 'filter' => '<input class="form-control" name="filteremail" value="'. $searchModel['medicalclaim'] .'" type="text">',
            'value' => 'medicalclaim',
'label' => 'Medical Claim',
'headerOptions' => ['class' => 'blue-grid-head'],
'width'=>'150px',
'format' => ['currency', ''],
//'mergeHeader'=>true
            ],
[
"attribute" => "pharmacyclaim",
'label' => '',
'headerOptions' => ['class' => 'blue-grid-head'],
//'mergeHeader'=>true
],
[
"attribute" => "dentalclaim",
'headerOptions' => ['class' => 'blue-grid-head'],
'label' => '',
//'mergeHeader'=>true
],
[
"attribute" => "sslclaim",
'headerOptions' => ['class' => 'blue-grid-head'],
'label' => 'SSL Claim',
'format' => ['currency', ''],
'mergeHeader'=>true
],
[
"attribute" => "netclaim",
'headerOptions' => ['class' => 'blue-grid-head'],
'label' => 'Net Claim',
'format' => ['currency', ''],
'mergeHeader'=>true
],

[
"attribute" => "memberenrollment",
'headerOptions' => ['class' => 'blue-grid-head'],
'label' => 'Member Enrollment',
'format' => ['currency', ''],
//'mergeHeader'=>true
],
[
"attribute" => "claims",
'headerOptions' => ['class' => 'blue-grid-head'],
'label' => 'Claims / Enrollment',
'format' => ['currency', '$'],
//'mergeHeader'=>true
],
[
"attribute" => "12monthavg",
'headerOptions' => ['class' => 'blue-grid-head'],
'label' => '12 Mo. Rolling Avg',
'format' => ['currency', '$'],
//'mergeHeader'=>true
],
[
"attribute" => "24monthavg",
'headerOptions' => ['class' => 'blue-grid-head'],
'label' => '24 Mo. Rolling Avg',
'format' => ['currency', '$'],
//'mergeHeader'=>true
],
[
"attribute" => "12monthtrend",
'headerOptions' => ['class' => 'blue-grid-head'],
'label' => '12 Month Trend',
//'mergeHeader'=>true
],
[
"attribute" => "24monthtrend",
'headerOptions' => ['class' => 'blue-grid-head'],
'label' => '24 Month Trend',
//'mergeHeader'=>true      
],

			];
								echo GridView::widget([
															'dataProvider' => $dataProvider,
															'filterModel' => $searchModel,
															'columns' => $gridColumns,
														//	'containerOptions' => ['style'=>'overflow: auto'], // only set when $responsive = false
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
			
			<div class="col-md-12 padding-15 hide">
			<div class="box-head-claim">Report Description</div>
						<div class="box-border padding-6 back-lightgrey">
							<p>
			The Plan Claim Trend report is designed to help you understand the true trend rate for claims experienced under your plan.  By adjusting the claims experience
for reimbursements, and tracking the actual enrollment by month on your plan, the report can then calculate a rolling 12 and 24 month average of claims per
enrollment unit.  Next, by comparing these rolling average figures to the same figure a year ago, we can view the actual claims trend for your plan.
</p>


<p>In this report, a 12 month and 24 month rolling view of trend is provided.  Generally speaking it is important to look at both, as the 12 month trend can
be more volatile that the 24 month rolling average view of trend due to the fact that it considers fewer data points.</p>
</div>
			</div>
			</div>
			</div>
			<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
#claim_trend #w0-filters{
	display:none;
}
#claim_trend thead{
	    border-bottom: 1px solid #dddddd;
}
</style>
			<script>
			
Highcharts.chart('module_subscription', {

	  chart: {
	 	     backgroundColor: 'transparent',
	 	     polar: true,
	 	     type: 'line'
	 	   
	 	  },
    title: {
        text: ''
    },

    subtitle: {
        text: ''
    },

    
    xAxis: {
      	 labels: {
            style: {
                color: 'black'
            },
          
       },
       	  title: {
       		  style: {
       	 	         color: 'black',
       	 	      },
                 enabled: true,
                 text: ''
             },
           categories: ['Jan-17', 'Feb-17', 'Mar-17', 'Apr-17', 'May-17', 'Jun-17',
               'Jul-17', 'Aug-17', 'Sep-17', 'Oct-17', 'Nov-17', 'Dec-17']
       },
       yAxis: {
    	   	 labels: {
    	         style: {
    	             color: 'black'
    	         },
    	       
    	    },
    	        title: {
    	        	 style: {
    	     	         color: 'black',
    	     	      },
    	            text: ''
    	        }
    	    },
    legend: {
        layout: 'horizontal',
        align: 'center',
        verticalAlign: 'bottom',
        itemStyle: { "color": "black" }
    },

   /* plotOptions: {
        series: {
            pointStart: 2010
        }
    },*/
    exporting: { enabled: false },
	colors: ['#2f7ed8', '#8bbc21' ],
    series: [{
        name: '12 month Trend',
        data: [-5, -4, -2, 0, 2, 3, 4, 5]
    }, {
        name: '24 Month Trend',
        data: [-6, -8, -2, 0, 3, 4, 5, 10]
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