
	var DemoApp = angular.module('DemoApp',['dx']);


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
      name: '12 Months Analysis',
      data: [10, 15, 20, 30, 40, 45, 65, 80]
  }, {
        name: '24 Months Analysis',
        data: [13, 14, 16, 17, 20, 21, 24, 25]
    } ]

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
        name: '24 Months Analysis',
        data: [43934, 52503, 57177, 69658, 97031, 119931, 137133, 154175]
    }, {
        name: '12 Months Analysis',
        data: [24916, 24064, 29742, 29851, 32490, 30282, 38121, 40434]
    },]

});	