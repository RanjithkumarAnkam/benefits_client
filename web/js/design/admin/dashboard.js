
$(function () {
	/***********************modal unique firms *************************/
var chart_uniquefirms =	Highcharts.chart('modal_uniquefirms', {
		//$('#container').highcharts({
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
	  colors: [  '#f7971e'],
legend: {
  layout: 'horizontal',
  align: 'center',
  verticalAlign: 'bottom',
//  itemStyle: { "color": "white" }
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
   // var chart = $('#container').highcharts();
    $('#chart-modal-uniquefirms').on('show.bs.modal', function() {
        $('#modal_uniquefirms').css('visibility', 'hidden');
    });
    $('#chart-modal-uniquefirms').on('shown.bs.modal', function() {
        $('#modal_uniquefirms').css('visibility', 'initial');
        chart_uniquefirms.reflow();
    });   
/***************************end modal ******************/
    
    
    /***********************modal user logins *************************/
    var chart_userlogins =	Highcharts.chart('modal_userlogins', {
    		//$('#container').highcharts({
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
    		      //       color: 'white'
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
    		      //       color: 'white'
    		         },
    		       
    		    },
    	    },
    	    colors: [  '#f7971e','#13a9cc'],
    	    legend: {
    	        layout: 'horizontal',
    	        align: 'center',
    	        verticalAlign: 'bottom',
    	       // itemStyle: { "color": "white" }
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
       // var chart = $('#container').highcharts();
        $('#chart-modal-userlogins').on('show.bs.modal', function() {
            $('#modal_userlogins').css('visibility', 'hidden');
        });
        $('#chart-modal-userlogins').on('shown.bs.modal', function() {
            $('#modal_userlogins').css('visibility', 'initial');
            chart_userlogins.reflow();
        });   
    /***************************end modal ******************/
        
        
        /***********************modal modulesubscription *************************/
        var chart_modulesubscription =	Highcharts.chart('modal_modulesubscription', {
        		//$('#container').highcharts({
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
         	    colors: [  '#f7971e','#64b044','#7e3795'],
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
           // var chart = $('#container').highcharts();
            $('#chart-modal-modulesubscription').on('show.bs.modal', function() {
                $('#modal_modulesubscription').css('visibility', 'hidden');
            });
            $('#chart-modal-modulesubscription').on('shown.bs.modal', function() {
                $('#modal_modulesubscription').css('visibility', 'initial');
                chart_modulesubscription.reflow();
            });   
        /***************************end modal ******************/
            
            /***********************modal plans *************************/
            var chart_plans =	Highcharts.chart('modal_plans', {
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
            	colors: [  '#13a9cc','#64b044','#7e3795'],
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
               // var chart = $('#container').highcharts();
                $('#chart-modal-plans').on('show.bs.modal', function() {
                    $('#modal_plans').css('visibility', 'hidden');
                });
                $('#chart-modal-plans').on('shown.bs.modal', function() {
                    $('#modal_plans').css('visibility', 'initial');
                    chart_plans.reflow();
                });   
            /***************************end modal ******************/
                
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
                        
                        /***********************modal earningdetails *************************/
                        var chart_earningdetails =	Highcharts.chart('modal_earningdetails', {
                        		//$('#container').highcharts({
                         
                        	    chart: {
                        	        //renderTo: 'earnings-details',
                        	        type: 'pie',
                        	     //   backgroundColor:'#f0f4f5'
                        	    },
                        		  title: {
                        				 style: {
                        			         color: 'black',
                        			      },
                        		       enabled: true,
                        		       text: 'Apr 2016'
                        		   },
                        	    plotOptions: {
                        	        pie: {
                        	            innerSize: '60%'
                        	        }
                        	    },
                        	    exporting: { enabled: false },
                        	    colors: [  '#f7971e'],
                        	    series: [{
                        	        data: [
                        	            ['Details', 44.2],
                        	            
                        	            ]}]
                            });	
                           // var chart = $('#container').highcharts();
                            $('#chart-modal-earningdetails').on('show.bs.modal', function() {
                                $('#modal_earningdetails').css('visibility', 'hidden');
                            });
                            $('#chart-modal-earningdetails').on('shown.bs.modal', function() {
                                $('#modal_earningdetails').css('visibility', 'initial');
                                chart_earningdetails.reflow();
                            });   
                        /***************************end modal ******************/
//$('.unique_firms').highcharts({
	

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
  	  colors: [  '#f7971e'],
  legend: {
      layout: 'horizontal',
      align: 'center',
      verticalAlign: 'bottom',
    //  itemStyle: { "color": "white" }
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

//$('#user_login').highcharts({
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
	      //       color: 'white'
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
	      //       color: 'white'
	         },
	       
	    },
    },
    colors: [  '#f7971e','#13a9cc'],
    legend: {
        layout: 'horizontal',
        align: 'center',
        verticalAlign: 'bottom',
       // itemStyle: { "color": "white" }
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

/*
var chart = $('#user_login_1').highcharts();
$('#-user_login').on('show.bs.modal', function() {
    $('#user_login_1').css('visibility', 'hidden');
});
$('#chart-user_login').on('shown.bs.modal', function() {
    $('#user_login_1').css('visibility', 'initial');
    chart.reflow();
});  
*/

Highcharts.chart('module_subscription', {
//$('#module_subscription').highcharts({
//Highcharts.chart('module_subscription', {

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
    	    colors: [  '#f7971e','#64b044','#7e3795'],
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


//$('#plan_on_system').highcharts({

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
colors: [  '#13a9cc','#64b044','#7e3795'],
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

/*
function reDrawchart(){*/

/*
$('#client_break_downplan_renewal_month').css('visibility', 'initial');
chart.reflow();

$('#client_break_downplan_renewal_month').css('visibility', 'initial');
chart.reflow();
}*/
//var chart = $('.earnings-details').highcharts({
//Highcharts.chart('plan_renewal_month', {
 var chart= new Highcharts.Chart({
    chart: {
        renderTo: 'earnings-details',
        type: 'pie',
     //   backgroundColor:'#f0f4f5'
    },
	  title: {
			 style: {
		         color: 'black',
		      },
	       enabled: true,
	       text: 'Apr 2016'
	   },
    plotOptions: {
        pie: {
            innerSize: '60%'
        }
    },
    exporting: { enabled: false },
    colors: [  '#f7971e'],
    series: [{
        data: [
            ['Details', 44.2],
            
            ]}]
},
                                 
function(chart) { // on complete
    var textX = chart.plotLeft + (chart.plotWidth  * 0.5);
    var textY = chart.plotTop  + (chart.plotHeight * 0.5);

    var span = '<span id="pieChartInfoText" style="position:absolute; text-align:center;">';
    span += '<span style="font-size: 16px">$27,475</span><br>';
    span += '</span>';

    $("#addText").append(span);
    span = $('#pieChartInfoText');
    span.css('left', textX + (span.width() * -0.5));
    span.css('top', textY + (span.height() * -0.5));
});
 
 

 //var chartbreakdown = $('.client_break_down').highcharts({
 var chartbreakdown = Highcharts.chart('client_break_down', {

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



 var chartrenewalmonth = Highcharts.chart('plan_renewal_month', {

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
/*
 $(".redrawchart").click(function(){ 
 	
	// chartbreakdown.redraw();
	// chartbreakdown.reflow();
	 chartbreakdown.setSize(780,300);
	 chartrenewalmonth.setSize(780,300);
 //chart.setSize(w,h)chartrenewalmonth.redraw();
 //chartrenewalmonth.reflow();

 });
 */
  $(document).on( 'shown.bs.tab', 'a[data-toggle="tab"]', function () { 
	 chartbreakdown.reflow();
	 chartrenewalmonth.reflow();
 });
}); 

