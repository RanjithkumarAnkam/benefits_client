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
		<span class="display-block left-head">Large Claim Analyzer</span>
		<span class="display-block left-head">Medical & Pharmacy Plan</span>
		</div>
		</div>
		</div>
		
		 <div class="row">
				<div class="col-md-12">
					<div class="col-md-6">
					<div class="box-head-claim">Large Claim Evaluation, By Diagnosis Type</div>
						<div class="widget back-widget box-shadow widget-six">
							<div class="widget-header">

									 By Diagnosis Type
							</div>

							<br />
							<div class="margin-bottom-50">
							<div id="diagnosis_container" style="min-width: 310px; height: 300px; margin: 0 auto"></div>
							
							</div>
						</div>
					</div>
					<div class="col-md-6">
					<div class="box-head-claim">Large Claim Evaluation, By Member Type</div>
						<div class="widget back-widget box-shadow widget-six">
							<div class="widget-header">

									 By Member Type
							</div>

							<br />
							<div class="margin-bottom-50">
							<div id="member_container" style="min-width: 310px; height: 300px; margin: 0 auto"></div>
							
							</div>
						</div>
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
		<span class="display-block left-head">Large Claim Analyzer</span>
		<span class="display-block left-head">Medical & Pharmacy Plan</span>
		</div>
		</div>
		</div>
			 <div class="row">
				<div class="col-md-12">
				 
							 <div class="box-head-claim">Large Claim Summary </div>
								<div class="col-md-12 back-white border-radius-8 padding-bottom-10">
									 <div class="box-border  padding-6 back-lightgrey">
						
								 
									<table class="table-class" style="width: 100%">
										<thead>

											<tr>

												<th class="text-align-center" style="width: 20%;">Plan Year</th>
												<th class="text-align-center" >2009</th>
												<th class="text-align-center" >2010</th>
												<th class="text-align-center" >2011</th>
												<th class="text-align-center">2012</th>
												<th class="text-align-center" >2013</th>
												<th class="text-align-center" >2014</th>
												
											</tr>
											
										</thead>

										<tbody class="text-align-center ">
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td rowspan="6">Prior, Historical Large Claims Trended Forward to Renewal Plan Year</td> 
												<td>$58975</td>
												<td>$69001</td>
												<td>$14008</td>
												<td>$62791</td>
												<td>$132248</td>
												<td>$175010</td>
												
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>$58975</td>
												<td>$69001</td>
												<td>$14008</td>
												<td>$62791</td>
												<td>$132248</td>
												<td>$175010</td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>$58975</td>
												<td>$69001</td>
												<td>$14008</td>
												<td>$62791</td>
												<td>$132248</td>
												<td>$175010</td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>$58975</td>
												<td>$69001</td>
												<td>$14008</td>
												<td>$62791</td>
												<td>$132248</td>
												<td>$175010</td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td></td>
												<td></td>
												<td>$14008</td>
												<td>$62791</td>
												<td></td>
												<td></td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td></td>
												<td></td>
												<td>$14008</td>
												<td>$62791</td>
												<td></td>
												<td></td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												
											</tr>
											<tr class=""  style="background-color: #000;color:white">
												<td>Total Large Claim Claim Amount</td> 
												<td>$58975</td>
												<td>$69001</td>
												<td>$14008</td>
												<td>$62791</td>
												<td>$132248</td>
												<td>$175010</td>
												
											</tr>
											<tr class="tr-back-firm"  style="background-color: transparent;">
												<td>Total Number of Large Claims</td> 
												<td>9</td>
												<td>14</td>
												<td>12</td>
												<td>10</td>
												<td>8</td>
												<td>7</td>
												
											</tr>
											<tr class="tr-back-firm"  style="background-color: transparent;">
												<td>Average Claim Size</td> 
												<td>105,705</td>
												<td>108,879</td>
												<td>95,188</td>
												<td>106,650</td>
												<td>90,669</td>
												<td>118,985</td>
												
											</tr>
											<tr class="tr-back-firm"  style="background-color: transparent;">
												<td>Median Claim Size</td> 
												<td>93,254</td>
												<td>92,260</td>
												<td>95,188</td>
												<td>93,254</td>
												<td>90,669</td>
												<td>93,254</td>
												
											</tr>
											
											<tr class="tr-back-firm"  style="background-color: transparent;">
												<td>Largest Claim</td> 
												<td>293,254</td>
												<td>292,260</td>
												<td>195,188</td>
												<td>193,254</td>
												<td>190,669</td>
												<td>193,254</td>
												
											</tr>
											
											<tr class="tr-back-firm"  style="background-color: transparent;">
												<td>Smallest Claim</td> 
												<td>23,254</td>
												<td>22,260</td>
												<td>25,188</td>
												<td>23,254</td>
												<td>20,669</td>
												<td>23,254</td>
												
											</tr>
											
										</tbody>
									</table>
									
								</div>
									
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
		<span class="display-block left-head">Large Claim Analyzer</span>
		<span class="display-block left-head">Medical & Pharmacy Plan</span>
		</div>
		</div>
		</div>
			 <div class="row">
				<div class="col-md-12">
				 
							 <div class="box-head-claim">Large Claim Detail Report - 2014 Plan year </div>
								
			 	<div class="col-md-12 padding-0">
															
															<?php
$resultData = [
    array("claiminantstatus"=>"Active","memtype"=>"Dependent","age"=>"47","Gender"=>"Male","planmedclaims"=>" 85624","planrxclaims"=>"29865","totalplanclaims"=>" 144141","diagnosis"=>"Cancer","prognosis"=>""),
   array("claiminantstatus"=>"Cobra","memtype"=>"Employee","age"=>"32","Gender"=>"Male","planmedclaims"=>" 85624","planrxclaims"=>"29865","totalplanclaims"=>" 144141","diagnosis"=>"Cardiac Arrest","prognosis"=>""),
array("claiminantstatus"=>"Terminated","memtype"=>"Spouse","age"=>"47","Gender"=>"Male","planmedclaims"=>" 85624","planrxclaims"=>"29865","totalplanclaims"=>" 144141","diagnosis"=>"Heart Failure","prognosis"=>""),
array("claiminantstatus"=>"Active","memtype"=>"Dependent","age"=>"47","Gender"=>"Male","planmedclaims"=>" 85624","planrxclaims"=>"29865","totalplanclaims"=>" 144141","diagnosis"=>"Cancer","prognosis"=>""),
array("claiminantstatus"=>"Active","memtype"=>"Dependent","age"=>"47","Gender"=>"Male","planmedclaims"=>" 85624","planrxclaims"=>"29865","totalplanclaims"=>" 144141","diagnosis"=>"Cancer","prognosis"=>""),
array("claiminantstatus"=>"Active","memtype"=>"Dependent","age"=>"47","Gender"=>"Male","planmedclaims"=>" 85624","planrxclaims"=>"29865","totalplanclaims"=>" 144141","diagnosis"=>"Cancer","prognosis"=>""),
array("claiminantstatus"=>"Active","memtype"=>"Dependent","age"=>"47","Gender"=>"Male","planmedclaims"=>" 85624","planrxclaims"=>"29865","totalplanclaims"=>" 144141","diagnosis"=>"Cancer","prognosis"=>""),
array("claiminantstatus"=>"Active","memtype"=>"Dependent","age"=>"47","Gender"=>"Male","planmedclaims"=>" 85624","planrxclaims"=>"29865","totalplanclaims"=>" 144141","diagnosis"=>"Cancer","prognosis"=>""),
array("claiminantstatus"=>"Active","memtype"=>"Dependent","age"=>"47","Gender"=>"Male","planmedclaims"=>" 85624","planrxclaims"=>"29865","totalplanclaims"=>" 144141","diagnosis"=>"Cancer","prognosis"=>""),
array("claiminantstatus"=>"Active","memtype"=>"Dependent","age"=>"47","Gender"=>"Male","planmedclaims"=>" 85624","planrxclaims"=>"29865","totalplanclaims"=>" 144141","diagnosis"=>"Cancer","prognosis"=>""),
array("claiminantstatus"=>"Active","memtype"=>"Dependent","age"=>"47","Gender"=>"Male","planmedclaims"=>" 85624","planrxclaims"=>"29865","totalplanclaims"=>" 144141","diagnosis"=>"Cancer","prognosis"=>""),
array("claiminantstatus"=>"Active","memtype"=>"Dependent","age"=>"47","Gender"=>"Male","planmedclaims"=>" 85624","planrxclaims"=>"29865","totalplanclaims"=>" 144141","diagnosis"=>"Cancer","prognosis"=>""),
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
            'attribute' => 'claiminantstatus', 
            'value' => 'claiminantstatus',
'label' => 'Claimant Status',
'noWrap'=>true,
//'mergeHeader'=>true
            ],
           
			[
"attribute" => "memtype",
'label' => 'Member Type',
'width'=>'150px',
//'pageSummary' => true,
//'format' => ['currency', ''],
//'mergeHeader'=>true
],
[
"attribute" => "age",
'label' => 'Age',
'width'=>'150px',
//'pageSummary' => true,
//'mergeHeader'=>true
],
[
"attribute" => "Gender",
'label' => 'Gender',
'width'=>'150px',
//'pageSummary' => true,
//'mergeHeader'=>true
],
[
"attribute" => "planmedclaims",
'label' => 'Plan Medical Claims',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
//'mergeHeader'=>true
],
[
"attribute" => "planrxclaims",
'label' => 'Plan Rx Claims',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
//'mergeHeader'=>true
],
[
"attribute" => "totalplanclaims",
'label' => 'Total Plan Claims',
'width'=>'150px',
'pageSummary' => true,
'format' => ['currency', ''],
//'mergeHeader'=>true
],
[
"attribute" => "diagnosis",
'label' => 'Diagnosis',
'width'=>'150px',
 
],
[
"attribute" => "prognosis",
'label' => 'Prognosis',
'width'=>'150px',
 
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
															// 'showPageSummary' => true,
															 
															'panel' => [
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
		.table-class table, .table-class th, .table-class td {
    border: 1px solid black;
    border-collapse: collapse;
	border-color:black !important;
}

td{
	empty-cells: show;
}
#plan_year_claims_only #w0-filters{
	display:none;
}
#plan_year_claims_only thead{
	    border-bottom: 1px solid #dddddd;
}
</style>
			<script>

Highcharts.chart('diagnosis_container', {


	// renewal projections
	 
		  chart: {
	 	     backgroundColor: 'transparent',
	 	     polar: true,
	 	     type: 'scatter',
	 	     zoomType: 'xy'
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
	             color: 'white'
	         },
	       
	    },
	    	  title: {
	    		  style: {
	    	 	         color: 'white',
	    	 	      },
	              enabled: true,
	              text: 'Plan Renewal Month'
	          },
	          categories: ['2008', '2009', '2010', '2011', '2012', '2013',
	       	            '2014', '2015']
	    },
	    yAxis: {
	   	 labels: {
	         style: {
	             color: 'white'
	         },
	       
	    },
	        title: {
	        	 style: {
	     	         color: 'white',
	     	      },
	            text: ' '
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
	    plotOptions: {
	        scatter: {
	            marker: {
	                radius: 5,
	                states: {
	                    hover: {
	                        enabled: true,
	                        lineColor: 'rgb(100,100,100)'
	                    }
	                }
	            },
	            states: {
	                hover: {
	                    marker: {
	                        enabled: false
	                    }
	                }
	            },
	            tooltip: {
	             
	                headerFormat: '<b>{series.name}</b><br>',
	                pointFormat: ' ABC Engineering, 4.5%',
	                backgroundColor: 'transparent',
	                borderColor: 'white',
	            }
	        }
	    },
	    exporting: { enabled: false },
	    series: [{
	    	// showInLegend: false,    
	        name: 'Atrial Fib',
	        color: '#3090C7',
	        data: [[0, 223000], [1, 345600],[2, 265600], [3, 565000], [4, 753400],[5, 435400], [6, 462000], [7, 254000]]

	    }, {
	    //	 showInLegend: false,    
	        name: 'Cancer',
	        color: '#E9AB17',
	        data: [[0, 123000], [1, 245600],[2, 365600], [3, 465000], [4, 553400],[5, 635400], [6, 762000], [7, 854000]]
	    },{
	    //	 showInLegend: false,    
	        name: 'Cancer',
	        color: 'lightgrey',
	        data: [[0, 823000], [1, 745600],[2, 665600], [3, 565000], [4, 453400],[5, 335400], [6, 262000], [7, 154000]]
	    },
	    {
		    //	 showInLegend: false,    
		        name: 'Atrial Fib',
		        color: 'orange',
		        data: [[0, 8200], [1, 74560],[2, 66560], [3, 52000], [4, 45400],[5, 33550], [6, 26250], [7, 15000]]
		    },
	    {
		    //	 showInLegend: false,    
		        name: 'Cervical Disorder',
		        color: '#2B65EC',
		        data: [[0, 83000], [1, 74600],[2, 66500], [3, 55000], [4, 45400],[5, 33400], [6, 22000], [7, 15000]]
		    },
	    {
		    //	 showInLegend: false,    
		        name: 'Atrial Fib',
		        color: 'green',
		        data: [[0, 830200], [1, 746200],[2, 266500], [3, 255000], [4, 245400],[5, 233400], [6, 222000], [7, 152000]]
		    },
	  ]
	  
	});



Highcharts.chart('member_container', {


	// renewal projections
	 
		  chart: {
	 	     backgroundColor: 'transparent',
	 	     polar: true,
	 	     type: 'scatter',
	 	     zoomType: 'xy'
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
	             color: 'white'
	         },
	       
	    },
	    	  title: {
	    		  style: {
	    	 	         color: 'white',
	    	 	      },
	              enabled: true,
	              text: 'Plan Renewal Month'
	          },
	        categories: ['2008', '2009', '2010', '2011', '2012', '2013',
	            '2014', '2015']
	    },
	    yAxis: {
	   	 labels: {
	         style: {
	             color: 'white'
	         },
	       
	    },
	        title: {
	        	 style: {
	     	         color: 'white',
	     	      },
	            text: ''
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
	    plotOptions: {
	        scatter: {
	            marker: {
	                radius: 5,
	                states: {
	                    hover: {
	                        enabled: true,
	                        lineColor: 'rgb(100,100,100)'
	                    }
	                }
	            },
	            states: {
	                hover: {
	                    marker: {
	                        enabled: false
	                    }
	                }
	            },
	            tooltip: {
	             
	                headerFormat: '<b>{series.name}</b><br>',
	                pointFormat: ' ',
	                backgroundColor: 'transparent',
	                borderColor: 'white',
	            }
	        }
	    },
	    exporting: { enabled: false },
	    series: [{
	    	// showInLegend: false,    
	        name: 'Dependent',
	        color: '#f39834',
	        data: [[0, 223000], [1, 345600],[2, 265600], [3, 565000], [4, 753400],[5, 435400], [6, 462000], [7, 254000]]

	    }, {
	    //	 showInLegend: false,    
	        name: 'Spouse',
	        color: '#01a8fe',
	        data: [[0, 123000], [1, 245600],[2, 365600], [3, 465000], [4, 553400],[5, 635400], [6, 762000], [7, 854000]]
	    },{
	    //	 showInLegend: false,    
	        name: 'Spouse',
	        color: 'green',
	        data: [[0, 823000], [1, 745600],[2, 665600], [3, 565000], [4, 453400],[5, 335400], [6, 262000], [7, 154000]]
	    }]
	  
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