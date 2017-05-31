
$(function () {
	
	
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
		   /*     new Chartist.Line(".chart-line", {
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
		        });*/
		        
				
var chart_planrenewalyear = Highcharts.chart('container-planrenewalyear', {
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
            text: '%Over Budget (%)'
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
                pointFormat: ' ABC Engineering, 4.5%',
                backgroundColor: 'transparent',
                borderColor: 'black',
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
		
/************for  modal pop up ***************************/
var chart_planrenewalyear = Highcharts.chart('modal_planrenewalyear', {
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
            text: '%Over Budget (%)'
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
                pointFormat: ' ABC Engineering, 4.5%',
                backgroundColor: 'transparent',
                borderColor: 'black',
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
 // var chart = $('#container').highcharts();
    $('#chart-modal-planrenewalyear').on('show.bs.modal', function() {
        $('#modal_planrenewalyear').css('visibility', 'hidden');
    });
    $('#chart-modal-planrenewalyear').on('shown.bs.modal', function() {
        $('#modal_planrenewalyear').css('visibility', 'initial');
        chart_planrenewalyear.reflow();
    });        

/****************************** end for modal popup *********************/	
	
	
	/******************for commsion fee modal popup *****************/
	
	var chart_commisionfee = Highcharts.chart('modal_commisionfee', {
    
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
	
	 $('#chart-modal-commisionfee').on('show.bs.modal', function() {
        $('#modal_commisionfee').css('visibility', 'hidden');
    });
    $('#chart-modal-commisionfee').on('shown.bs.modal', function() {
        $('#modal_commisionfee').css('visibility', 'initial');
        chart_commisionfee.reflow();
    });  
	
	/*************end for modal popup *////////*************/
	
	var renewalfees_container = Highcharts.chart('renewalfees_container', {
    
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
	
	
	var plan_renewal_month = Highcharts.chart('plan_renewal_month', {
    
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
	colors: [  '#13a9cc','#64b044','#7e3795'],
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
	
	
	
	
	
	
	var client_break_down = Highcharts.chart('client_break_down', {
    
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
        categories: ["Manufacturing", "Wholesale Trade & Retail Trade", "Professional / Scientific", "Health Care & Social Assistance", "Finance & Insurance", "Public Administration","Information", "Construction", "Managment of Companies"]
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
	 colors: [  '#f7971e','#64b044','#7e3795', '#13a9cc' ,'#b9d749' , '#337b5a' , '#568d8a'],
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

	/************ modal for renewal projections **********/
	
	
	var chart_renewalprojections = Highcharts.chart('modal_renewalprojections', {
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
            text: '%Increase Expected (%)'
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
                pointFormat: ' ABC Engineering, 4.5%',
                backgroundColor: 'transparent',
                borderColor: 'black',
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

 // var chart = $('#container').highcharts();
    $('#chart-modal-renewalprojections').on('show.bs.modal', function() {
        $('#modal_renewalprojections').css('visibility', 'hidden');
    });
    $('#chart-modal-renewalprojections').on('shown.bs.modal', function() {
        $('#modal_renewalprojections').css('visibility', 'initial');
        chart_renewalprojections.reflow();
    });   
	
	/*********end modal************/
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
            text: '%Increase Expected (%)'
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
                pointFormat: ' ABC Engineering, 4.5%',
                backgroundColor: 'transparent',
                borderColor: 'black',
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




	/************ modal for claims trendanalysis **********/
	
	
	var chart_claimstrendanalysis = Highcharts.chart('modal_claimstrendanalysis', {
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
     categories: ['Jan-17', 'Feb-17', 'Mar-17', 'Apr-17', 'May-17', 'Jun-17',
         'Jul-17', 'Aug-17', 'Sep-17', 'Oct-17', 'Nov-17', 'Dec-17']
 },
 yAxis: {
     title: {
    	 style: {
 	         color: 'black',
 	      },
         text: 'PMPM Trend'
     },
 labels: {
     style: {
         color: 'black'
     },
   
},
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
		itemStyle: { "color": "" },
    },
 plotOptions: {
     scatter: {
         marker: {
             radius: 5,
             states: {
                 hover: {
                     enabled: true,
                     lineColor: 'black'
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

 // var chart = $('#container').highcharts();
    $('#chart-modal-claimstrendanalysis').on('show.bs.modal', function() {
        $('#modal_claimstrendanalysis').css('visibility', 'hidden');
    });
    $('#chart-modal-claimstrendanalysis').on('shown.bs.modal', function() {
        $('#modal_claimstrendanalysis').css('visibility', 'initial');
        chart_claimstrendanalysis.reflow();
    });   
	
	/*********end modal************/
	

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
     categories: ['Jan-17', 'Feb-17', 'Mar-17', 'Apr-17', 'May-17', 'Jun-17',
         'Jul-17', 'Aug-17', 'Sep-17', 'Oct-17', 'Nov-17', 'Dec-17']
 },
 yAxis: {
     title: {
    	 style: {
 	         color: 'black',
 	      },
         text: 'PMPM Trend'
     },
 labels: {
     style: {
         color: 'black'
     },
   
},
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
		itemStyle: { "color": "" },
    },
 plotOptions: {
     scatter: {
         marker: {
             radius: 5,
             states: {
                 hover: {
                     enabled: true,
                     lineColor: 'black'
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


      /***********************modal breakdown *************************/
                var chart_clientbreakdown =	Highcharts.chart('modal_clientbreakdown', {
                		//$('#container').highcharts({

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
                	    categories: ["Manufacturing", "Wholesale Trade & Retail Trade", "Professional / Scientific", "Health Care & Social Assistance", "Finance & Insurance", "Public Administration","Information", "Construction", "Managment of Companies"]
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
                	            color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'
                	        }
                	    }
                	},
					 colors: [  '#f7971e','#64b044','#7e3795', '#13a9cc' ,'#b9d749' , '#337b5a' , '#568d8a'],
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
                   // var chart = $('#container').highcharts();
                    $('#chart-modal-clientbreakdown').on('show.bs.modal', function() {
                        $('#modal_clientbreakdown').css('visibility', 'hidden');
                    });
                    $('#chart-modal-clientbreakdown').on('shown.bs.modal', function() {
                        $('#modal_clientbreakdown').css('visibility', 'initial');
                        chart_clientbreakdown.reflow();
                    });   
                /***************************end modal ******************/
                    
                    /***********************modal planrenewal *************************/
                    var chart_planrenewal =	Highcharts.chart('modal_planrenewal', {
                    		//$('#container').highcharts({

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
						colors: [  '#13a9cc','#64b044','#7e3795'],
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
                       // var chart = $('#container').highcharts();
                        $('#chart-modal-planrenewal').on('show.bs.modal', function() {
                            $('#modal_planrenewal').css('visibility', 'hidden');
                        });
                        $('#chart-modal-planrenewal').on('shown.bs.modal', function() {
                            $('#modal_planrenewal').css('visibility', 'initial');
                            chart_planrenewal.reflow();
                        });   
                    /***************************end modal ******************/
                        
						
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

/*
 $(".redrawchart-firm").click(function(){ 
 	
	// chartbreakdown.redraw();
	// chartbreakdown.reflow();
	 client_break_down.setSize(1200,250);
	 plan_renewal_month.setSize(640,250);
	 renewalfees_container.setSize(640,250);
 //chart.setSize(w,h)chartrenewalmonth.redraw();
 //chartrenewalmonth.reflow();

 });*/
  $(document).on( 'shown.bs.tab', 'a[data-toggle="tab"]', function () { 
	 client_break_down.reflow();
	 plan_renewal_month.reflow();
	 renewalfees_container.reflow();
 });
});



	
	