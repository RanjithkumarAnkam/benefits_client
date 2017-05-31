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
		<span class="display-block left-head">Plan Year Claim Report</span>
		<span class="display-block left-head">Medical & Pharmacy Plan</span>
		</div>
		</div>
		</div>
		
		 <div class="row">
				<div class="col-md-12">
					<div class="col-md-6">
					<div class="box-head-claim">Stop Loss Deductible Level Analyzer, By Contract Year</div>
						<div class="widget back-widget box-shadow widget-six">
							<div class="widget-header">

									Analyzer Graph, By Contract Year
							</div>

							<br />
							<div class="margin-bottom-50">
							<div id="paid_plan_claims" style="min-width: 310px; height: 300px; margin: 0 auto"></div>
							
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="box-head-claim">Stop Loss Deductible Level Analyzer, By Contract Year</div>
						<div class="box-border padding-6 back-lightgrey">
							<p>
							
The stop loss deductible level analyzer (By Contract Year) is designed to assist clients in determining the most efficient deductible based upon prior year large claim experience.  We begin by taking the prior year large claims and trending them forward to the renewal plan year period of time.  The analyzer then evaluates how each proposed specific deductible level would have performed with the various year claims patterns.
</p>


<p>The goal in purchasing specific reinsurance is to minimize the total payments by the client of specific reinsurance premiums plus paid claims.  By evaluating how each deductible level performed historically, it can be helpful in choosing this level.</p>
<p>The most efficient deductible level graphed above is typically the colored line with the lowest+smoothest line.  Lowest line would mean the combined costs were the lowest, while evaluating the smoothness of the line you can gain an understanding of the volatility from year to year of each deductible level. </p>
<p>At times the graph above will not be fully conclusive, while at other times the decision will be very clear.  Simply use the graph above along with your understanding of the current health of your covered population to predict and thus choose your most efficient level.</p>
</div>
					</div>
						
				
					
				</div>
			</div>
			
		<hr style="border-top: 1px solid #ddd;">
		<div class="row margin-bottom-10">
				<div class="col-md-12">
				<div class="col-md-12">
				<div class="box-border  padding-6 back-lightgrey">
									 
								 	<table class=" " style="width: 100%">
										<thead>

											<tr>

												<th class="text-align-center">Specific Deductible Level</th>
												<th class="text-align-center">100,000 ($)</th>
												<th class="text-align-center">125,000 ($)</th>
												<th class="text-align-center">150,000 ($)</th>
												<th class="text-align-center">175,000 ($)</th>
												<th class="text-align-center">200,000 ($)</th>
												
											</tr>
										</thead>

										<tbody class="text-align-center">
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Average Paid Claims</td>
												<td>1,773,665</td>
												<td>1,770,321</td>
												<td>1,741,998</td>
												<td>1,779,155</td>
												<td>1,775,321</td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Median Paid Claims</td>
												<td>1,773,665</td>
												<td>1,770,321</td>
												<td>1,741,998</td>
												<td>1,779,155</td>
												<td>1,775,321</td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Largest Claim Year</td>
												<td>1,773,665</td>
												<td>1,770,321</td>
												<td>1,741,998</td>
												<td>1,779,155</td>
												<td>1,775,321</td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Smallest Claim Year</td>
												<td>1,773,665</td>
												<td>1,770,321</td>
												<td>1,741,998</td>
												<td>1,779,155</td>
												<td>1,775,321</td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>Overall Average</td>
												<td>1,773,665</td>
												<td>1,770,321</td>
												<td>1,741,998</td>
												<td>1,779,155</td>
												<td>1,775,321</td>
												
											</tr>
											
										</tbody>
									</table>
								 
						</div>
				</div>
						</div>
				</div>
		<div class="row margin-bottom-10">
				<div class="col-md-12">
					<div class="col-md-6">
						<div class="margin-bottom-10">
						<div class="box-head-claim margin-top-0">Stop Loss Deductible Level Analyzer, Combined Plan Year Analysis</div>
						
						</div>
						<div class="widget back-widget box-shadow widget-six">
							<div class="widget-header">

									Analyzer Graph, Combined Plan Year Analysis
							</div>

							<br />
							<div class="margin-bottom-50">
							<div id="combined_plan_analysis" style="min-width: 310px; height: 300px; margin: 0 auto"></div>
							
							</div>
						</div>
						
					</div>
					<div class="col-md-6">
						<div class="box-head-claim margin-top-0">Stop Loss Deductible Level Analyzer, Combined Plan Year Analysis</div>
						<div class="box-border padding-6 back-lightgrey">
							<p>
							
The stop loss deductible level analyzer (Combined Plan Year) is another helpful tool in choosing the most efficient specific deductible level.  We begin again by taking prior plan year large claims and trending them forward to the renewal plan year period of time.  We then evaluate how each proposed deductible level would have performed in terms of claims payments.  (In this analysis, we will be analyzing the combination of all plan years performance at the various deductible levels.)
</p>


<p>Next we take various mathematical approaches to these values over all contract years by taking the average, median, largest claim year, smallest claim year of all plan years, and the average of all of these figures which is called the 'Overall Average'. Finally, we add back the premiums that would have to be paid to procure that specific deductible contract.</p>
<p>In the graph to the left you will see the findings graphically.  For evaluation purposes, we are looking for the specific deductible level that is most consistently the lowest data point for all mathematical measures.  Translated, this means that we are looking for the lowest combination of employer paid claims and premiums if we have an average claims year, a median claims year, largest or smallest claims year.  Commonly the lowest Overall Average cost will be the most efficient deductible level.</p>
<p>You can also utilize the table above to evaluate all of the financials.</p>
</div>
							 
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
		<span class="display-block left-head">Plan Year Claim Report</span>
		<span class="display-block left-head">Medical & Pharmacy Plan</span>
		</div>
		</div>
		</div>
			 <div class="row">
				<div class="col-md-12">
				 
							 <div class="box-head-claim">Report Details</div>
								<div class="col-md-12 back-white border-radius-8 padding-bottom-10">
									 <div class="box-border  padding-6 back-lightgrey">
						
								 
									<table class=" " style="width: 100%">
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
												<td rowspan="8">Prior, Historical Large Claims Trended Forward to Renewal Plan Year</td> 
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
												<td>&nbsp;</td>
												<td>&nbsp;</td>
												<td>$14008</td>
												<td>$62791</td>
												<td>&nbsp;</td>
												<td>&nbsp;</td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>&nbsp;</td>
												<td>&nbsp;</td>
												<td>$14008</td>
												<td>$62791</td>
												<td>&nbsp;</td>
												<td>&nbsp;</td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>&nbsp;</td>
												<td>&nbsp;</td>
												<td>&nbsp;</td>
												<td>&nbsp;</td>
												<td>&nbsp;</td>
												<td>&nbsp;</td>
												
											</tr>
											<tr class="tr-back-firm" style="background-color: transparent;">
												<td>&nbsp;</td>
												<td>&nbsp;</td>
												<td>&nbsp;</td>
												<td>&nbsp;</td>
												<td>&nbsp;</td>
												<td>&nbsp;</td>
												
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
				Page 2 of 2
				</div>
				</div>
			</div>
			</div>
			
			<style>
		table, th, td {
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
    categories: ["2008", "2009", "2010", "2011", "2012", "2013","2014", "2015"]
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
series: [
 {
        type: 'spline',
        name: '$100,000 Ded',
        data: [100000, 250000, 400000, 250000,100000, 250000, 400000,250000],
        marker: {
            lineWidth: 2,
            lineColor: Highcharts.getOptions().colors[3],
            fillColor: 'white'
        }
    },
	{
        type: 'spline',
        name: '$125,000 Ded',
        data: [150000, 300000, 450000, 300000,150000, 300000, 450000,300000],
        marker: {
            lineWidth: 2,
            lineColor: Highcharts.getOptions().colors[3],
            fillColor: 'white'
        }
    },
	{
        type: 'spline',
        name: '$150,000 Ded',
        data: [150000, 250000, 400000, 350000,150000, 350000, 400000,350000],
        marker: {
            lineWidth: 2,
            lineColor: Highcharts.getOptions().colors[3],
            fillColor: 'white'
        }
    },
	{
        type: 'spline',
        name: '$175,000 Ded',
        data: [95000, 100000, 250000, 350000,150000, 350000, 400000,350000],
        marker: {
            lineWidth: 2,
            lineColor: Highcharts.getOptions().colors[3],
            fillColor: 'white'
        }
    },
	{
        type: 'spline',
        name: '$200,000 Ded',
        data: [100000, 100000, 250000, 350000,150000, 350000, 400000,350000],
        marker: {
            lineWidth: 2,
            lineColor: Highcharts.getOptions().colors[3],
            fillColor: 'white'
        }
    },
]
});




Highcharts.chart('combined_plan_analysis', {

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
       text: 'Proposed Specific Deductible Levels'
   },
    categories: ["$50,000", "$75,000", "$100,000", "$125,000", "$150,000", "$175,000","$200,000", "$225,000"]
},
yAxis: {
	labels: {
     style: {
         color: 'white'
     },
   
},
    min: 0,
    title: {
		style: {
	         color: 'white',
	      },
        text: 'Paid Claims + Premiums'
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
series: [
 {
        type: 'spline',
        name: 'Average Paid Claims',
        data: [100000, 250000, 400000, 250000,100000, 250000, 400000,250000],
        marker: {
            lineWidth: 2,
            lineColor: Highcharts.getOptions().colors[3],
            fillColor: 'white'
        }
    },
	{
        type: 'spline',
        name: 'Median Paid Claims',
        data: [150000, 300000, 450000, 300000,150000, 300000, 450000,300000],
        marker: {
            lineWidth: 2,
            lineColor: Highcharts.getOptions().colors[3],
            fillColor: 'white'
        }
    },
	{
        type: 'spline',
        name: 'Largest Claim Year',
        data: [150000, 250000, 400000, 350000,150000, 350000, 400000,350000],
        marker: {
            lineWidth: 2,
            lineColor: Highcharts.getOptions().colors[3],
            fillColor: 'white'
        }
    },
	{
        type: 'spline',
        name: 'Smallest Claim Year',
        data: [95000, 100000, 250000, 350000,150000, 350000, 400000,350000],
        marker: {
            lineWidth: 2,
            lineColor: Highcharts.getOptions().colors[3],
            fillColor: 'white'
        }
    },
	{
        type: 'spline',
        name: 'Overall Average',
        data: [100000, 100000, 250000, 350000,150000, 350000, 400000,350000],
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