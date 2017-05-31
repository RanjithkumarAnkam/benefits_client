$(function () {
	
		




var chart_claims_report =Highcharts.chart('module_subscription', {

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
   // var chart = $('#container').highcharts();
    $('#claims_trend_report_modal').on('show.bs.modal', function() {
        $('#module_subscription').css('visibility', 'hidden');
    });
    $('#claims_trend_report_modal').on('shown.bs.modal', function() {
        $('#module_subscription').css('visibility', 'initial');
        chart_claims_report.reflow();
    });   
	
	
	/**********end******************/
	
	
	/***********plan year claim***************/
	
var plan_year_claim_modal =	Highcharts.chart('paid_plan_claims', {

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
    categories: ["Jan-17", "Feb-17", "Mar-17", "Apr-17", "May-17", "Jun-17","Jul-17", "Aug-17", "Sep-17", "Oct-17", "Nov-17", "Dec-17"]
},
yAxis: {
	labels: {
     style: {
         color: 'black'
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
            color: (Highcharts.theme && Highcharts.theme.textColor) || 'black'
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
	itemStyle: { "color": "black" },
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
            color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'black'
        }
    }
},
series: [{
	type: 'column',
	 backgroundColor: 'transparent',
    name: 'Medical Plan (Net)',
    data: [200000, 400000, 1000000, 600000,100000, 900000, 550000, 200000,600000, 500000, 100000, 200000]
}, {
	type: 'column',
	 backgroundColor: 'transparent',
    name: 'Pharmacy Plan (Net)',
    data: [400000, 800000, 200000, 100000,80000, 550000, 900000, 300000,800000, 200000, 80000, 400000]
}
, {
        type: 'spline',
        name: 'Expected Monthly Claims',
        data: [400000, 400000, 400000, 400000,400000, 400000, 400000, 400000,400000, 400000, 400000, 400000],
        marker: {
            lineWidth: 2,
            lineColor: Highcharts.getOptions().colors[3],
            fillColor: 'black'
        }
    },
	{
        type: 'spline',
        name: 'Maximum Monthly Claims',
        data: [800000, 800000, 800000, 800000,800000, 800000, 800000, 800000,800000, 800000, 800000, 800000],
        marker: {
            lineWidth: 2,
            lineColor: Highcharts.getOptions().colors[3],
            fillColor: 'black'
        }
    },
]
});


var plan_year_claim_modal2 = Highcharts.chart('paid_plan_claims_area', {
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
         color: 'black'
     },
   
},
	 
        categories: ["Jan-17", "Feb-17", "Mar-17", "Apr-17", "May-17", "Jun-17","Jul-17", "Aug-17", "Sep-17", "Oct-17", "Nov-17", "Dec-17"],
        tickmarkPlacement: 'on',
        title: {
		 style: {
	         color: 'black',
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
         color: 'black'
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
	itemStyle: { "color": "black" },
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
        name: 'Medical Plan (Net)',
		type: 'area',
        data: [200000, 400000, 1000000, 600000,100000, 900000, 550000, 200000,600000, 500000, 100000, 200000]
    }, {
        name: 'Pharmacy Plan (Net)',
		type: 'area',
        data: [400000, 800000, 200000, 100000,80000, 550000, 900000, 300000,800000, 200000, 80000, 400000]
    }, {
        type: 'spline',
        name: 'Expected Monthly Claims',
        data: [0, 200000, 300000, 400000,500000, 600000, 700000, 800000,900000, 1000000, 1000000, 1000000],
        marker: {
            lineWidth: 2,
            lineColor: Highcharts.getOptions().colors[3],
            fillColor: 'white'
        }
    },
	{
        type: 'spline',
        name: 'Maximum Monthly Claims',
        data: [0, 200000, 800000, 800000,800000, 800000, 800000, 800000,800000, 800000, 800000, 800000],
        marker: {
            lineWidth: 2,
            lineColor: Highcharts.getOptions().colors[3],
            fillColor: 'white'
        }
    },]
});

 
	
	
 // var chart = $('#container').highcharts();
    $('#paid_plan_claims_area').on('show.bs.modal', function() {
        $('#paid_plan_claims_area').css('visibility', 'hidden');
		  $('#paid_plan_claims').css('visibility', 'hidden');
    });
    $('#paid_plan_claims_area').on('shown.bs.modal', function() {
        $('#paid_plan_claims_area').css('visibility', 'initial');
		 $('#paid_plan_claims').css('visibility', 'initial');
		  plan_year_claim_modal.reflow();
        plan_year_claim_modal2.reflow();
    });
	
	
/******* total year *****/
var total_plan_year_claim_modal = Highcharts.chart('total_paid_plan_claims', {

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
    categories: ["Jan-17", "Feb-17", "Mar-17", "Apr-17", "May-17", "Jun-17","Jul-17", "Aug-17", "Sep-17", "Oct-17", "Nov-17", "Dec-17"]
},
yAxis: {
	labels: {
     style: {
         color: 'black'
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
            color: (Highcharts.theme && Highcharts.theme.textColor) || 'black'
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
	itemStyle: { "color": "black" },
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
            color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'black'
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
            fillColor: 'black'
        }
    },
	
]
});



var total_plan_year_claim_modal2 = Highcharts.chart('total_paid_plan_claims_area', {
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
         color: 'black'
     },
   
},
	 
        categories: ["Jan-17", "Feb-17", "Mar-17", "Apr-17", "May-17", "Jun-17","Jul-17", "Aug-17", "Sep-17", "Oct-17", "Nov-17", "Dec-17"],
        tickmarkPlacement: 'on',
        title: {
		 style: {
	         color: 'black',
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
         color: 'black'
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
	itemStyle: { "color": "black" },
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

// var chart = $('#container').highcharts();
    $('#total_paid_plan_claims_area').on('show.bs.modal', function() {
        $('#total_paid_plan_claims_area').css('visibility', 'hidden');
		  $('#total_paid_plan_claims').css('visibility', 'hidden');
    });
    $('#total_paid_plan_claims_area').on('shown.bs.modal', function() {
        $('#total_paid_plan_claims_area').css('visibility', 'initial');
		 $('#total_paid_plan_claims').css('visibility', 'initial');
		  total_plan_year_claim_modal.reflow();
        total_plan_year_claim_modal2.reflow();
    });
/*******end total year ****/


/***** for budget ****/
var bugetreport1 = Highcharts.chart('budget_report', {

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
    categories: ["Jan-17", "Feb-17", "Mar-17", "Apr-17", "May-17", "Jun-17","Jul-17", "Aug-17", "Sep-17", "Oct-17", "Nov-17", "Dec-17"]
},
yAxis: {
	labels: {
     style: {
         color: 'black'
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
            color: (Highcharts.theme && Highcharts.theme.textColor) || 'black'
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
	itemStyle: { "color": "black" },
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
            color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'black'
        }
    }
},
series: [{
	type: 'column',
	 backgroundColor: 'transparent',
    name: 'Medical Plan (Net)',
    data: [200000, 400000, 1000000, 600000,100000, 900000, 550000, 200000,600000, 500000, 100000, 200000]
}, {
	type: 'column',
	 backgroundColor: 'transparent',
    name: 'Pharmacy Plan (Net)',
    data: [400000, 800000, 200000, 100000,80000, 550000, 900000, 300000,800000, 200000, 80000, 400000]
}
, {
	type: 'column',
	 backgroundColor: 'transparent',
    name: 'Fixed Costs',
    data: [400000, 800000, 200000, 100000,80000, 550000, 900000, 300000,800000, 200000, 80000, 400000]
}
, {
        type: 'spline',
        name: 'Monthly Budget',
        data: [400000, 400000, 400000, 400000,400000, 400000, 400000, 400000,400000, 400000, 400000, 400000],
        marker: {
            lineWidth: 2,
            lineColor: Highcharts.getOptions().colors[3],
            fillColor: 'black'
        }
    },
	
]
});



var buget_report2 = Highcharts.chart('budget_report2', {
	
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
         color: 'black'
     },
   
},
	 
        categories: ["Jan-17", "Feb-17", "Mar-17", "Apr-17", "May-17", "Jun-17","Jul-17", "Aug-17", "Sep-17", "Oct-17", "Nov-17", "Dec-17"],
        tickmarkPlacement: 'on',
        title: {
		 style: {
	         color: 'black',
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
         color: 'black'
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
	itemStyle: { "color": "black" },
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
            fillColor: 'black'
        }
    },
	]
});

 $('#buget_report_modal').on('show.bs.modal', function() {
        $('#budget_report').css('visibility', 'hidden');
		  $('#budget_report2').css('visibility', 'hidden');
    });
    $('#buget_report_modal').on('shown.bs.modal', function() {
        $('#budget_report').css('visibility', 'initial');
		 $('#budget_report2').css('visibility', 'initial');
		  bugetreport1.reflow();
        buget_report2.reflow();
    });
/***** end for budget *******/



/***********for year over year **********/


var yearoveryear= Highcharts.chart('year_over_year1', {

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
    categories: ["2009", "2010", "2011", "2012", "2013", "2014"]
},
yAxis: {
	labels: {
     style: {
         color: 'black'
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
            color: (Highcharts.theme && Highcharts.theme.textColor) || 'black'
        }
    }
},
legend: {
    align: 'center',
   // x: -30,
    verticalAlign: 'bottom',
    //y: 25,
    floating: false,
   // backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'black',
   // borderColor: '#CCC',
  //  borderWidth: 1,
    shadow: false,
	itemStyle: { "color": "black" },
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
            color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'black'
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
            fillColor: 'black'
        }
    },
	 {
        type: 'spline',
        name: 'Budget',
        data: [400000, 400000, 400000, 400000,400000, 400000],
        marker: {
            lineWidth: 2,
            lineColor: Highcharts.getOptions().colors[3],
            fillColor: 'black'
        }
    },
	
]
});



var yearoveryear2=Highcharts.chart('year_over_year2', {
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
         color: 'black'
     },
   
},
	 
           categories: ["2009", "2010", "2011", "2012", "2013", "2014"],
        tickmarkPlacement: 'on',
        title: {
		 style: {
	         color: 'black',
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
         color: 'black'
     },
	 
        }
    },
	legend: {
    align: 'center',
   // x: -30,
    verticalAlign: 'bottom',
    //y: 25,
    floating: false,
   // backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'black',
   // borderColor: '#CCC',
  //  borderWidth: 1,
    shadow: false,
	itemStyle: { "color": "black" },
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
            fillColor: 'black'
        }
    },
	]
});


 $('#year_over_year_modal').on('show.bs.modal', function() {
        $('#year_over_year1').css('visibility', 'hidden');
		  $('#year_over_year2').css('visibility', 'hidden');
    });
    $('#year_over_year_modal').on('shown.bs.modal', function() {
        $('#year_over_year1').css('visibility', 'initial');
		 $('#year_over_year2').css('visibility', 'initial');
		  yearoveryear.reflow();
        yearoveryear2.reflow();
    });
/***end year over year ******/


/********** remainder year project  *************/
var reminderyear1 = Highcharts.chart('remainderprojectreport', {

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
    categories: ["Jan-17", "Feb-17", "Mar-17", "Apr-17", "May-17", "Jun-17","Jul-17", "Aug-17", "Sep-17", "Oct-17", "Nov-17", "Dec-17"]
},
yAxis: {
	labels: {
     style: {
         color: 'black'
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
            color: (Highcharts.theme && Highcharts.theme.textColor) || 'black'
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
	itemStyle: { "color": "black" },
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
            color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'black'
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
            fillColor: 'black'
        }
    },
	
]
});



var reminderyear2 =Highcharts.chart('remainderprojectreport2', {
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
         color: 'black'
     },
   
},
	 
        categories: ["Jan-17", "Feb-17", "Mar-17", "Apr-17", "May-17", "Jun-17","Jul-17", "Aug-17", "Sep-17", "Oct-17", "Nov-17", "Dec-17"],
        tickmarkPlacement: 'on',
        title: {
		 style: {
	         color: 'black',
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
         color: 'black'
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
	itemStyle: { "color": "black" },
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


 $('#remiander_year_modal').on('show.bs.modal', function() {
        $('#remainderprojectreport').css('visibility', 'hidden');
		  $('#remianderprojectreport2').css('visibility', 'hidden');
    });
    $('#remiander_year_modal').on('shown.bs.modal', function() {
        $('#remainderprojectreport').css('visibility', 'initial');
		 $('#remianderprojectreport2').css('visibility', 'initial');
		  reminderyear1.reflow();
        reminderyear2.reflow();
    });
/**********end reaminder year project*********/


/*******stop loss analuser************/

var stoplossanalyser = Highcharts.chart('stop_loss_analyser', {

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
    categories: ["2008", "2009", "2010", "2011", "2012", "2013","2014", "2015"]
},
yAxis: {
	labels: {
     style: {
         color: 'black'
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
            color: (Highcharts.theme && Highcharts.theme.textColor) || 'black'
        }
    }
},
legend: {
    align: 'center',
   // x: -30,
    verticalAlign: 'bottom',
    //y: 25,
    floating: false,
   // backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'black',
   // borderColor: '#CCC',
  //  borderWidth: 1,
    shadow: false,
	itemStyle: { "color": "black" },
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
            color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'black'
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
            fillColor: 'black'
        }
    },
	{
        type: 'spline',
        name: '$125,000 Ded',
        data: [150000, 300000, 450000, 300000,150000, 300000, 450000,300000],
        marker: {
            lineWidth: 2,
            lineColor: Highcharts.getOptions().colors[3],
            fillColor: 'black'
        }
    },
	{
        type: 'spline',
        name: '$150,000 Ded',
        data: [150000, 250000, 400000, 350000,150000, 350000, 400000,350000],
        marker: {
            lineWidth: 2,
            lineColor: Highcharts.getOptions().colors[3],
            fillColor: 'black'
        }
    },
	{
        type: 'spline',
        name: '$175,000 Ded',
        data: [95000, 100000, 250000, 350000,150000, 350000, 400000,350000],
        marker: {
            lineWidth: 2,
            lineColor: Highcharts.getOptions().colors[3],
            fillColor: 'black'
        }
    },
	{
        type: 'spline',
        name: '$200,000 Ded',
        data: [100000, 100000, 250000, 350000,150000, 350000, 400000,350000],
        marker: {
            lineWidth: 2,
            lineColor: Highcharts.getOptions().colors[3],
            fillColor: 'black'
        }
    },
]
});



var stoplossanalyser2 = Highcharts.chart('stop_loss_analyser2', {

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
         color: 'black'
     },
   
},
	  title: {
		 style: {
	         color: 'black',
	      },
       enabled: true,
       text: 'Proposed Specific Deductible Levels'
   },
    categories: ["$50,000", "$75,000", "$100,000", "$125,000", "$150,000", "$175,000","$200,000", "$225,000"]
},
yAxis: {
	labels: {
     style: {
         color: 'black'
     },
   
},
    min: 0,
    title: {
		style: {
	         color: 'black',
	      },
        text: 'Paid Claims + Premiums'
    },
    stackLabels: {
        enabled: false,
        style: {
            fontWeight: 'normal',
            color: (Highcharts.theme && Highcharts.theme.textColor) || 'black'
        }
    }
},
legend: {
    align: 'center',
   // x: -30,
    verticalAlign: 'bottom',
    //y: 25,
    floating: false,
   // backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'black',
   // borderColor: '#CCC',
  //  borderWidth: 1,
    shadow: false,
	itemStyle: { "color": "black" },
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
            color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'black'
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
            fillColor: 'black'
        }
    },
	{
        type: 'spline',
        name: 'Median Paid Claims',
        data: [150000, 300000, 450000, 300000,150000, 300000, 450000,300000],
        marker: {
            lineWidth: 2,
            lineColor: Highcharts.getOptions().colors[3],
            fillColor: 'black'
        }
    },
	{
        type: 'spline',
        name: 'Largest Claim Year',
        data: [150000, 250000, 400000, 350000,150000, 350000, 400000,350000],
        marker: {
            lineWidth: 2,
            lineColor: Highcharts.getOptions().colors[3],
            fillColor: 'black'
        }
    },
	{
        type: 'spline',
        name: 'Smallest Claim Year',
        data: [95000, 100000, 250000, 350000,150000, 350000, 400000,350000],
        marker: {
            lineWidth: 2,
            lineColor: Highcharts.getOptions().colors[3],
            fillColor: 'black'
        }
    },
	{
        type: 'spline',
        name: 'Overall Average',
        data: [100000, 100000, 250000, 350000,150000, 350000, 400000,350000],
        marker: {
            lineWidth: 2,
            lineColor: Highcharts.getOptions().colors[3],
            fillColor: 'black'
        }
    },
]
});


 $('#stop_loss_modal').on('show.bs.modal', function() {
        $('#stop_loss_analyser').css('visibility', 'hidden');
		  $('#stop_loss_analyser2').css('visibility', 'hidden');
    });
    $('#stop_loss_modal').on('shown.bs.modal', function() {
        $('#stop_loss_analyser').css('visibility', 'initial');
		 $('#stop_loss_analyser2').css('visibility', 'initial');
		  stoplossanalyser.reflow();
        stoplossanalyser2.reflow();
    });
	
	/*********end stop loss analyser*********/
	
	
	/************spec report ***************/
var spec_report1 = Highcharts.chart('diagnosis_container', {


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
	             color: 'black'
	         },
	       
	    },
	    	  title: {
	    		  style: {
	    	 	         color: 'black',
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
	             color: 'black'
	         },
	       
	    },
	        title: {
	        	 style: {
	     	         color: 'black',
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
			itemStyle: { "color": "black" },
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
	                borderColor: 'black',
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


var spec_report2 =Highcharts.chart('member_container', {


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
	             color: 'black'
	         },
	       
	    },
	    	  title: {
	    		  style: {
	    	 	         color: 'black',
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
	        align: 'center',
	       // x: -30,
	        verticalAlign: 'bottom',
	        //y: 25,
	        floating: false,
	       // backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'black',
	       // borderColor: '#CCC',
	      //  borderWidth: 1,
	        shadow: false,
			itemStyle: { "color": "black" },
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
	                borderColor: 'black',
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
	
	
	 $('#spec_report_modal').on('show.bs.modal', function() {
        $('#diagnosis_container').css('visibility', 'hidden');
		  $('#member_container').css('visibility', 'hidden');
    });
    $('#spec_report_modal').on('shown.bs.modal', function() {
        $('#diagnosis_container').css('visibility', 'initial');
		 $('#member_container').css('visibility', 'initial');
		  spec_report1.reflow();
        spec_report2.reflow();
    });
	/****end spec report******************/
});
