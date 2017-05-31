
	var DemoApp = angular.module('DemoApp',['dx']);


		DemoApp.controller('DemoController', function DemoController($scope) {
		 
		    
		
		     $scope.dataGridOptionsmostactive = {
		        dataSource: mostactive,
		        paging: {
		            enabled: false
		        },
		        "export": {
		            enabled: true,
		            fileName: "mostactiveusers",
		           // allowExportSelectedData: true
		        },
		        editing: {
		            mode: "row",
		            allowUpdating: false,
		            allowDeleting: false,
		            allowAdding: false
		        }, 
				 filterRow: { 
            visible: true
        },
		        columns: [
					{
					    dataField:  "userid",
					    caption: "User ID"
					},
					  {
		                dataField:  "logins",
		                caption: "# of Logins"
		            },
					  {
		                dataField: "usertype",
		                caption: "User type"
		            },
		           ],
		        onEditingStart: function(e) {
		           
		        },
		        onInitNewRow: function(e) {
		            
		        },
		        onRowInserting: function(e) {
		            
		        },
		        onRowInserted: function(e) {
		            
		        },
		        onRowUpdating: function(e) {
		            
		        },
		        onRowUpdated: function(e) {
		           
		        },
		        onRowRemoving: function(e) {
		            
		        },
		        onRowRemoved: function(e) {
		           
		        },
					onRowPrepared: function (e) {
				back(e);
		},
				
		    };
			
			  $scope.dataGridOptionsappfunc = {
		        dataSource: appfunctioanlity,
		        paging: {
		            enabled: false
		        },
		        "export": {
		            enabled: true,
		            fileName: "applicationfunctionality",
		            allowExportSelectedData: true
		        },
		        editing: {
		            mode: "row",
		            allowUpdating: false,
		            allowDeleting: false,
		            allowAdding: false
		        }, 
				 filterRow: { 
            visible: true
        },
		        columns: [
					{
					    dataField:  "websitepage",
					    caption: "Website Page"
					},
					  {
		                dataField:  "helpressed",
		                caption: "# of times Help Pressed"
		            },
					  {
		                dataField: "contactpressed",
		                caption: "# of times Conatact Pressed"
		            },
		           ],
		        onEditingStart: function(e) {
		           
		        },
		        onInitNewRow: function(e) {
		            
		        },
		        onRowInserting: function(e) {
		            
		        },
		        onRowInserted: function(e) {
		            
		        },
		        onRowUpdating: function(e) {
		            
		        },
		        onRowUpdated: function(e) {
		           
		        },
		        onRowRemoving: function(e) {
		            
		        },
		        onRowRemoved: function(e) {
		           
		        },
					onRowPrepared: function (e) {
				back(e);
		},
				
		    };
			
			  $scope.dataGridOptionshelpneed = {
		        dataSource: helpneeded,
		        paging: {
		            enabled: false
		        },
		        "export": {
		            enabled: true,
		            fileName: "helpneeded",
		            allowExportSelectedData: true
		        },
				 filterRow: { 
            visible: true
        },
		        editing: {
		            mode: "row",
		            allowUpdating: false,
		            allowDeleting: false,
		            allowAdding: false
		        }, 
		        columns: [
					{
					    dataField:  "userid",
					    caption: "User ID"
					},
					  {
		                dataField:  "pressed",
		                caption: "# of times Help or Contact"
		            },
					  {
		                dataField: "usertype",
		                caption: "User type"
		            }, ],
		        onEditingStart: function(e) {
		           
		        },
		        onInitNewRow: function(e) {
		            
		        },
		        onRowInserting: function(e) {
		            
		        },
		        onRowInserted: function(e) {
		            
		        },
		        onRowUpdating: function(e) {
		            
		        },
		        onRowUpdated: function(e) {
		           
		        },
		        onRowRemoving: function(e) {
		            
		        },
		        onRowRemoved: function(e) {
		           
		        },
					onRowPrepared: function (e) {
				back(e);
		},
				
		    };
			
			    $scope.selectAllMode = "allPages";
    $scope.showCheckBoxesMode = "onClick";
    
    $scope.dataGridOptionslargestfirm = {
		        dataSource: largefirms,
        
        selection: {
            mode: "multiple"
        },
   
        filterRow: { 
            visible: true
        },
        columns: [
					{
					    dataField:  "firmname",
					    caption: "Firm Name"
					},
					  {
		                dataField:  "clients",
		                caption: "# of Clients"
		            },],
					onRowPrepared: function (e) {
				back(e);
		},
    };
			
		});
	
		
	var largefirms = [{
		    "firmname":"Tata",
			"clients":"5"
		  }, {
		    "firmname":"Tata1",
			"clients":"5"
		  }, 
		  {
		    "firmname":"Tata2",
			"clients":"5"
		  }, 
		  {
		    "firmname":"Tata3",
			"clients":"5"
		  }, 
		  {
		    "firmname":"Tata4",
			"clients":"5"
		  }, 
		  {
		    "firmname":"Tata5",
			"clients":"5"
		  }, 
		  {
		    "firmname":"Tata6",
			"clients":"5"
		  }, 
		  {
		    "firmname":"Tata7",
			"clients":"5"
		  }, 
		  {
		    "firmname":"Tata8",
			"clients":"5"
		  }, 
		  {
		    "firmname":"Tata9",
			"clients":"5"
		  }, 
		  {
		    "firmname":"Tata10",
			"clients":"5"
		  }, 
		  {
		    "firmname":"Tata11",
			"clients":"5"
		  }, 
		  {
		    "firmname":"Tata12",
			"clients":"5"
		  }, 
		  {
		    "firmname":"Tata13",
			"clients":"5"
		  }, 
		  {
		    "firmname":"Tata14",
			"clients":"5"
		  }, 
		   {
		    "firmname":"Tata15",
			"clients":"5"
		  },
		   {
		    "firmname":"Tata16",
			"clients":"5"
		  },
		   {
		    "firmname":"Tata17",
			"clients":"5"
		  },
		   {
		    "firmname":"Tata18",
			"clients":"5"
		  },
		   {
		    "firmname":"Tata19",
			"clients":"5"
		  },];

		var mostactive = [{
		    "userid": "ravi",
		    "logins":"45",
		    "usertype": "Admin",
			}, {
		    "userid": "praveen",
		    "logins":"65",
		    "usertype": "Client",
			},{
		    "userid": "ranjith",
		    "logins":"56",
		    "usertype": "Admin",
			},
			{
		    "userid": "akshay",
		    "logins":"45",
		    "usertype": "Admin",
			},
			{
		    "userid": "vamsi",
		    "logins":"56",
		    "usertype": "Admin",
			},
			];
		
		var appfunctioanlity = [{
		    "websitepage": "url",
		    "helpressed":"26",
		    "contactpressed": "89",
			}, {
		    "websitepage": "url",
		    "helpressed":"26",
		    "contactpressed": "89",
			},
			{
		    "websitepage": "url",
		    "helpressed":"26",
		    "contactpressed": "89",
			},
			{
		    "websitepage": "url",
		    "helpressed":"26",
		    "contactpressed": "89",
			},
			{
		    "websitepage": "url",
		    "helpressed":"26",
		    "contactpressed": "89",
			},
			];
		
		var helpneeded = [{
		     "userid": "ravi",
		    "pressed":"45",
		    "usertype": "Admin",
			}, {
		    "userid": "praveen",
		    "pressed":"65",
		    "usertype": "Client",
			},{
		    "userid": "ranjith",
		    "pressed":"56",
		    "usertype": "Admin",
			},
			{
		    "userid": "akshay",
		    "pressed":"45",
		    "usertype": "Admin",
			},
			{
		    "userid": "vamsi",
		    "pressed":"56",
		    "usertype": "Admin",
			},
			];

	
$(document).ready(function(){
	
	
	//$("#dashboard").addClass("left-menu-list-opened");
	 $(".dx-toolbar-before").html('<strong class="font-16">Plan Renewals</strong>');
    $("#slider-1").ionRangeSlider({
        min: 0,
        max: 100,
        from: 50,
        step: 10,
        grid: true,
        grid_num: 10
    });

    
	 $('.menuBtn').click(function(event) {
		    value = $('#menu').css('right') === '0px' ? '-50%' : '0px';
		      $('#menu').animate({
		          right: value
		      });
		});

		
	 $(".dx-toolbar-before").html('<strong class="font-16"></strong>');
	 
	 /*
    new Chartist.Bar(".chart-stacked-bar", {
        labels: ["Jan-16", "Feb-16", "Mar-16", "Apr-16", "May-16", "Jun-16","Jul-16", "Aug-16", "Sep-16", "Oct-16", "Nov-16", "Dec-16"],
        series: [
            [60, 50, 10, 20,60, 50, 10, 20,60, 50, 10, 20],
            [40, 30, 10, 10,50, 40, 30, 10, 10,50, 8, 10],
            [30, 20, 5, 10,40, 30, 5, 10,50, 40, 5, 10]
        ],
       
    }, {
        stackBars: !0,
        axisY: {
            labelInterpolationFnc: function(value) {
                return value 
            }
        },
        plugins: [
            Chartist.plugins.tooltip()
        ]
    }).on("draw", function(data) {
        "bar" === data.type && data.element.attr({
            style: "stroke-width: 30px"
        })
    });
	
	
	 new Chartist.Bar(".chart-stacked-bar-two", {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        series: [
            [60, 50, 10, 20,60, 50, 10, 20,60, 50, 10, 20],
            [40, 30, 10, 10,50, 40, 30, 10, 10,50, 8, 10],
            [30, 20, 5, 10,40, 30, 5, 10,50, 40, 5, 10]
        ],
       
    }, {
        stackBars: !0,
        axisY: {
            labelInterpolationFnc: function(value) {
                return value 
            }
        },
        plugins: [
            Chartist.plugins.tooltip()
        ]
    }).on("draw", function(data) {
        "bar" === data.type && data.element.attr({
            style: "stroke-width: 30px"
        })
    });
	
	
	
	 new Chartist.Bar(".chart-client-break", {
        labels: ["Manufacturing", "Wholesale Trade & Retail Trade", "Professional / Scientific", "Health Care & Social Assistance", "Finance & Insurance", "Public Administration","Information", "Construction", "Managment of Companies"],
        series: [
            [60, 50, 10, 20,60, 50, 10, 20,60],
            [40, 30, 10, 10,50, 40, 30, 10, 10],
            [30, 20, 5, 10,40, 30, 5, 10,50], 
			[60, 50, 10, 20,60, 50, 10, 20,60],
			 [40, 30, 10, 10,50, 40, 30, 10, 10],
            [30, 20, 5, 10,40, 30, 5, 10,50], 
			[60, 50, 10, 20,60, 50, 10, 20,60],
        ],
       
    }, {
        stackBars: !0,
        axisY: {
            labelInterpolationFnc: function(value) {
                return value 
            }
        },
        plugins: [
            Chartist.plugins.tooltip()
        ]
    }).on("draw", function(data) {
        "bar" === data.type && data.element.attr({
            style: "stroke-width: 30px"
        })
    });
	
	
		     // LINE
		        new Chartist.Line(".chart-line", {
		            labels:["Jan-16", "Feb-16", "Mar-16", "Apr-16", "May-16", "Jun-16","Jul-16", "Aug-16", "Sep-16", "Oct-16", "Nov-16", "Dec-16"],
		            series: [
		                     [10,20,30,40,50,60,70,80,90,100,110,120],
		                        [15,25,35,45,55,65,75,85,95,155,115,125],
		                [18,28,38,48,58,68,78,88,98,188,118,128]
		            ]
		        }, {
		            fullWidth: !0,
		            chartPadding: {
		                right: 40
		            },
		            plugins: [
		                Chartist.plugins.tooltip()
		            ]
		        });
		        
		        // LINE two
		        new Chartist.Line(".chart-line-two", {
		            labels: ["Jan-16", "Feb-16", "Mar-16", "Apr-16", "May-16", "Jun-16","Jul-16", "Aug-16", "Sep-16", "Oct-16", "Nov-16", "Dec-16"],
		            series: [
                  [50, 40, 30, 70, 50, 10, 30, 40, 80, 10, 60, 80],
		             
		            ]
		        }, {
		            fullWidth: !0,
		            chartPadding: {
		                right: 40
		            },
		            plugins: [
		                Chartist.plugins.tooltip()
		            ]
		        });

		        // OVERLAPPING BAR
		        var overlappingData = {
		                    labels: ["Jan-16", "Feb-16", "Mar-16", "Apr-16", "May-16", "Jun-16","Jul-16", "Aug-16", "Sep-16", "Oct-16", "Nov-16", "Dec-16"],
		                    series: [
		                        [50, 40, 30, 70, 50, 10, 30, 40, 80, 10, 60, 80],
		                        [30, 20, 90, 50, 40, 60, 40, 60, 70, 80, 70, 40]
		                    ]
		                },
		                overlappingOptions = {
		                    seriesBarDistance: 10,
		                    plugins: [
		                        Chartist.plugins.tooltip()
		                    ]
		                },
		                overlappingResponsiveOptions = [
		                    ["", {
		                        seriesBarDistance: 5,
		                        /*axisX: {
		                            labelInterpolationFnc: function(value) {
		                                return value[0]
		                            }
		                        }
		                    }]
		                ];

		        new Chartist.Bar(".chart-overlapping-bar", overlappingData, overlappingOptions, overlappingResponsiveOptions);
*/

});

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
           categories: ['Jan-17', 'Feb-17', 'Mar-17', 'Apr-17', 'May-17', 'Jun-17',
               'Jul-17', 'Aug-17', 'Sep-17', 'Oct-17', 'Nov-17', 'Dec-17']
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
        layout: 'horizontal',
        align: 'center',
        verticalAlign: 'bottom',
        itemStyle: { "color": "white" }
    },

   /* plotOptions: {
        series: {
            pointStart: 2010
        }
    },*/
    exporting: { enabled: false },
    series: [{
        name: 'Companies',
        data: [43934, 52503, 57177, 69658, 97031, 119931, 137133, 154175]
    }, {
        name: 'Reporting',
        data: [24916, 24064, 29742, 29851, 32490, 30282, 38121, 40434]
    }, {
        name: 'Population Health',
        data: [11744, 17722, 16005, 19771, 20185, 24377, 32147, 39387]
    }]

});

Highcharts.chart('unique_firms', {

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
         categories: ['Jan-17', 'Feb-17', 'Mar-17', 'Apr-17', 'May-17', 'Jun-17',
             'Jul-17', 'Aug-17', 'Sep-17', 'Oct-17', 'Nov-17', 'Dec-17']
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
      layout: 'horizontal',
      align: 'center',
      verticalAlign: 'bottom',
      itemStyle: { "color": "white" }
  },

 /* plotOptions: {
      series: {
          pointStart: 2010
      }
  },*/
  exporting: { enabled: false },
  series: [{
      name: 'Companies',
      data: [10, 15, 20, 30, 40, 45, 65, 80]
  }, ]

});


Highcharts.chart('user_login', {
    chart: {
        type: 'column',
        backgroundColor: 'transparent',
	     polar: true,
    },

	 
    title: {
        text: ''
    },
    subtitle: {
        text: ''
    },
    xAxis: {
    	  categories: ['Jan-17', 'Feb-17', 'Mar-17', 'Apr-17', 'May-17', 'Jun-17',
    	               'Jul-17', 'Aug-17', 'Sep-17', 'Oct-17', 'Nov-17', 'Dec-17'],
        crosshair: true,
   	 labels: {
	         style: {
	             color: 'white'
	         },
	       
	    },
    },
    yAxis: {
        min: 0,
        title: {
            text: ''
        },
   	 labels: {
	         style: {
	             color: 'white'
	         },
	       
	    },
    },
    legend: {
        layout: 'horizontal',
        align: 'center',
        verticalAlign: 'bottom',
        itemStyle: { "color": "white" }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y} </b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    exporting: { enabled: false },
    series: [{
        name: 'Firm Users',
        data: [49, 71, 106, 129, 144, 176, 135, 148, 216, 194, 95, 54]

    }, {
        name: 'Client Users',
        data: [83, 78, 98, 93, 106, 84, 105, 104, 91, 83, 106, 92]

    } ]
});



Highcharts.chart('client_break_down', {

chart: {
     backgroundColor: 'transparent',
     polar: true,
     type: 'column',
  
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
    categories: ["Manufacturing", "Wholesale Trade & Retail Trade", "Professional / Scientific", "Health Care & Social Assistance", "Finance & Insurance", "Public Administration","Information", "Construction", "Managment of Companies"]
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
    name: '<25',
    data: [60, 50, 10, 20,60, 50, 10, 20,60]
}, {
    name: '25-49',
    data: [40, 30, 10, 10,50, 40, 30, 10, 10]
}, {
    name: '50-99',
    data: [30, 20, 5, 10,40, 30, 5, 10,50]
}, {
    name: '100-199',
    data: [60, 50, 10, 20,60, 50, 10, 20,60]
}
, {
    name: '200-499',
    data: [40, 30, 10, 10,50, 40, 30, 10, 10]
}
, {
    name: '500-999',
    data: [30, 20, 5, 10,40, 30, 5, 10,50]
}
, {
    name: '1000+',
    data: [60, 50, 10, 20,60, 50, 10, 20,60]
}
]
});



Highcharts.chart('plan_renewal_month', {

chart: {
     backgroundColor: 'transparent',
     polar: true,
     type: 'column',
  
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
    name: 'Medical Plan',
    data: [60, 50, 10, 20,60, 50, 10, 20,60, 50, 10, 20]
}, {
    name: 'Dental Plan',
    data: [40, 30, 10, 10,50, 40, 30, 10, 10,50, 8, 10]
}, {
    name: 'Vision Plan',
    data: [30, 20, 5, 10,40, 30, 5, 10,50, 40, 5, 10]
}]
});


Highcharts.chart('plan_on_system', {

chart: {
     backgroundColor: 'transparent',
     polar: true,
     type: 'column',
  
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
    name: 'Medical Plan',
    data: [10, 20, 30, 40,60, 50, 10, 20,60, 50, 10, 20]
}, {
    name: 'Dental Plan',
    data: [40, 30, 10, 10,50, 40, 30, 10, 10,50, 8, 10]
}, {
    name: 'Vision Plan',
    data: [30, 20, 5, 10,40, 30, 5, 10,50, 40, 5, 10]
}]
});

function back(e){
		  if (e.rowType == 'data') {
						e.rowElement[0].addEventListener("mouseover", function () {
						  e.rowElement.find("td").css('background', 'rgba(255, 242, 168, 0.29)');
						  e.rowElement.css("transition", "background-color 0.5s");
						});
						e.rowElement[0].addEventListener("mouseleave", function () {
						  e.rowElement.find("td").css('background', "");
						});
					  }
}