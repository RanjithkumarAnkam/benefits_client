
	$(function () {
		
		
		/*var DemoApp = angular.module('DemoApp',['dx']);


		DemoApp.controller('DemoController', function DemoController($scope) {
		 
		    
		    $scope.events = "";
		    
		    $scope.dataGridOptions = {
		        dataSource: expiringplan,
		        paging: {
		            enabled: false
		        },
		        "export": {
		            enabled: true,
		            fileName: "expiringplan",
		            allowExportSelectedData: true
		        },
		        editing: {
		            mode: "row",
		            allowUpdating: false,
		            allowDeleting: false,
		            allowAdding: false
		        }, 
		        columns: [
					{
					    dataField:  "position",
					    caption: "Position"
					},
					  {
		                dataField:  "name",
		                caption: "Name"
		            },
					  {
		                dataField: "email",
		                caption: "Email"
		            },
		            {
		                dataField: "Phone",
		                caption: "Phone"
		            },
					  {
		                dataField: "ext",
		                caption: "Ext."
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
		           
		        }
		    };
		   
		});
		
		var expiringplan = [{
		    "position": "Consultant",
		    "name":"John Smith",
		    "email": "John@smith.com",
		    "Phone": "888-555-6966",
		    "ext": "14",
		    
		   
		}, {
		    "position": "Account Manager",
		    "name":"John Smith",
		    "email": "John@smith.com",
		    "Phone": "888-555-6966",
		    "ext": "14",
		    
		   
		},{
		    "position": "Service Rep",
		    "name":"John Smith",
		    "email": "John@smith.com",
		    "Phone": "888-555-6966",
		    "ext": "14",
		    
		   
		}, ];
		
	
*/
Highcharts.chart('trend_analysis', {

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
		 colors: [  '#f7971e','#13a9cc'],
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
      name: '12 Months Analysis',
      data: [10, 15, 20, 30, 40, 45, 65, 80]
  }, {
        name: '24 Months Analysis',
        data: [13, 14, 16, 17, 20, 21, 24, 25]
    } ]

});

Highcharts.chart('trend_analysis_two', {

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

   
    exporting: { enabled: false },
    series: [{
        name: '24 Months Analysis',
        data: [43934, 52503, 57177, 69658, 97031, 119931, 137133, 154175]
    }, {
        name: '12 Months Analysis',
        data: [24916, 24064, 29742, 29851, 32490, 30282, 38121, 40434]
    },]

});	



/************for  modal pop up ***************************/
var chart_trendanalysis  = Highcharts.chart('modal_trendanalysis', {
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
		 colors: [  '#f7971e','#13a9cc'],
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
      name: '12 Months Analysis',
      data: [10, 15, 20, 30, 40, 45, 65, 80]
  }, {
        name: '24 Months Analysis',
        data: [13, 14, 16, 17, 20, 21, 24, 25]
    } ]

});
 // var chart = $('#container').highcharts();
    $('#chart-modal-trendanalysis').on('show.bs.modal', function() {
        $('#modal_trendanalysis').css('visibility', 'hidden');
    });
    $('#chart-modal-trendanalysis').on('shown.bs.modal', function() {
        $('#modal_trendanalysis').css('visibility', 'initial');
        chart_trendanalysis.reflow();
    });        

/****************************** end for modal popup *********************/	
	
	
/************for  modal pop up ***************************/
var chart_trendanalysis2  = Highcharts.chart('modal_trendanalysis2', {
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
  series: [{
      name: '12 Months Analysis',
      data: [10, 15, 20, 30, 40, 45, 65, 80]
  }, {
        name: '24 Months Analysis',
        data: [13, 14, 16, 17, 20, 21, 24, 25]
    } ]

});
 // var chart = $('#container').highcharts();
    $('#chart-modal-trendanalysis2').on('show.bs.modal', function() {
        $('#modal_trendanalysis2').css('visibility', 'hidden');
    });
    $('#chart-modal-trendanalysis2').on('shown.bs.modal', function() {
        $('#modal_trendanalysis2').css('visibility', 'initial');
        chart_trendanalysis2.reflow();
    });        

/****************************** end for modal popup *********************/	
	  });  