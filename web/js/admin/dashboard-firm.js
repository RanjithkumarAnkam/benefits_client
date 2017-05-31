
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
  /*  new Chartist.Bar(".chart-stacked-bar", {
        labels: ["Jan-17", "Feb-17", "Mar-17", "Apr-17", "May-17", "Jun-17","Jul-17", "Aug-17", "Sep-17", "Oct-17", "Nov-17", "Dec-17"],
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
	*/
	/*
	 new Chartist.Bar(".chart-stacked-bar-two", {
		 labels: ["Jan-17", "Feb-17", "Mar-17", "Apr-17", "May-17", "Jun-17","Jul-17", "Aug-17", "Sep-17", "Oct-17", "Nov-17", "Dec-17"],
        series: [
            [60000, 50000, 10000, 20000,60000, 50000, 10000, 20000,60000, 50000, 10000, 15000],
	 [40000, 30000, 10000, 10000,50000, 40000, 30000, 10000, 10000,50000, 80000, 10000],
            [30000, 20000, 50000, 10000,40000, 30000, 5000, 10000,5000, 40000, 5000, 10000]
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
	*/
	
	
	Highcharts.chart('renewalfees_container', {
    
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
        data: [60000, 50000, 10000, 20000,60000, 50000, 10000, 20000,60000, 50000, 10000, 15000]
    }, {
        name: 'Dental Plan',
        data: [40000, 30000, 10000, 10000,50000, 40000, 30000, 10000, 10000,50000, 80000, 10000]
    }, {
        name: 'Vision Plan',
        data: [40000, 30000, 10000, 10000,50000, 40000, 30000, 10000, 10000,50000, 80000, 10000]
    }]
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
	
	
	
	
	/*
	
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
	
	*/
		     // LINE
		        new Chartist.Line(".chart-line", {
		            labels: ["Jan", "Feb", "Mar", "Apr", "Mar", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
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
		        
		     

});



Highcharts.chart('container', {
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
            text: '%Over Budget (%)'
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
    	 name: 'Medical Plans',
        color: '#f39834',
        data: [[0, -1], [2, -2]]

    }, {
    	name: 'RX Plans',
        color: '#01a8fe',
        data: [[3, 1], [4, 2]]
    },{
    	name: 'Dental Plans',
        color: 'green',
        data: [[5, -3], [11, 2]]
    }]
  
});

// renewal projections
Highcharts.chart('renewal_projections', {
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
            text: '%Increase Expected (%)'
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
        name: 'Medical Plans',
        color: '#f39834',
        data: [[0, -1], [2, -2]]

    }, {
    //	 showInLegend: false,    
        name: 'RX Plans',
        color: '#01a8fe',
        data: [[3, 1], [4, 2]]
    },{
    //	 showInLegend: false,    
        name: 'Dental Plans',
        color: 'green',
        data: [[5, -3], [11, 2]]
    }]
  
});

/// renewal projections




/// claims trend analysis
Highcharts.chart('claims_trend_analysis', {
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
     categories: ['Jan-17', 'Feb-17', 'Mar-17', 'Apr-17', 'May-17', 'Jun-17',
         'Jul-17', 'Aug-17', 'Sep-17', 'Oct-17', 'Nov-17', 'Dec-17']
 },
 yAxis: {
     title: {
    	 style: {
 	         color: 'white',
 	      },
         text: 'PMPM Trend'
     },
 labels: {
     style: {
         color: 'white'
     },
   
},
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
                     lineColor: 'white'
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
     name: 'Medical Trend, 12 Months',
     color: '#ffbe8e',
     data: [[0, -1], [2, -2]]

 }, {
 	 //showInLegend: false,    
     name: 'RX Trend, 12 Months',
     color: '#ffd771',
     data: [[3, 1], [4, 2]]
 },{
 	// showInLegend: false,    
     name: 'Dental Trend, 12 Months',
     color: '#a1d091',
     data: [[6, -3], [9, 10]]
 },{
  //showInLegend: false,    
     name: 'Medical Trend, 24 Months',
     color: '#d15725',
     data: [[2, -7], [5, 8]]
 },{
 	// showInLegend: false,    
     name: 'RX Trend, 24 Months',
     color: '#c68d29',
     data: [[7, -5], [1, 7]]
 },{
 	// showInLegend: false,    
     name: 'Dental Trend, 24 Months',
     color: '#4c823f',
     data: [[1, 1], [1, 2]]
 }]

});

/// claims trend analysis
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