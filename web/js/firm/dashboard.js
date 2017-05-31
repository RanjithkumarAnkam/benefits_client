
	var DemoApp = angular.module('DemoApp',['dx']);


		DemoApp.controller('DemoController', function DemoController($scope) {
		 
		    
		    $scope.events = "";
		    
		    $scope.dataGridOptions = {
		        dataSource: employe,
		        paging: {
		            enabled: false
		        },
		        "export": {
		            enabled: true,
		            fileName: "Companies",
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
		                dataField:  "Clientname",
		                caption: "Client Name"
		            },
					  {
		                dataField: "Plantype",
		                caption: "Plan type"
		            },
					  {
		                dataField: "Fees",
		                caption: "Fees"
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
		   
		   
		   $scope.dataGridOptionsclient = {
		        dataSource: employe,
		        paging: {
		            enabled: false
		        },
		        "export": {
		            enabled: true,
		            fileName: "Companies",
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
		                dataField:  "Clientname",
		                caption: "Client Name List"
		            }
		           
		            
		            
		            
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
		
		var employe = [{
		    "ID": 1,
		    "Clientname": "Robert",
		    "Plantype": "Medical & Rx",
		    "Fees": "$134,000",
		   
		}, {
		    "ID": 2,
		    "Clientname": "Ravi",
		    "Plantype": "Medical & Rx",
		    "Fees": "$75,000",
		   
		}, {
		    "ID": 3,
		    "Clientname": "Pavan",
		    "Plantype": "Medical & Rx",
		    "Fees": "$10,000",
		   
		}, {
		    "ID": 4,
		    "Clientname": "Angad",
		    "Plantype": "Medical & Rx",
		    "Fees": "$5,000",
		   
		},
		 {
		    "ID": 5,
		    "Clientname": "Tete",
		    "Plantype": "Medical & Rx",
		    "Fees": "$5,000",
		   
		}];
		
		


		
$(document).ready(function(){
	 $(".dx-toolbar-before").html('<strong class="font-16"></strong>');
    new Chartist.Bar(".chart-stacked-bar", {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun","Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
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
	
	
	 new Chartist.Bar(".chart-stacked-bar", {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun","Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
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
	
	
	// DOUGHTNUT CHART
		        var doughnutCtx = document.getElementById('chart-doughnut').getContext('2d');

		        var chartDoughnut = {
		            labels: [
		                "Medical & Rx",
		                "Dental",
		                "Vision"
		            ],
		            datasets: [
		                {
		                    data: [300, 50, 100],
	                    /*backgroundColor: [
  		                        "#6a7a84",
  		                        "#01a8fe",
  		                        "#fb434a"
  		                    ],
  		                    hoverBackgroundColor: [
  		                        "#6a7a84",
  		                        "#01a8fe",
  		                        "#fb434a"
  		                    ]*/
							backgroundColor: [
		                        "#90d8f6",
		                        "#f59440",
		                        "#a7a9ac"
		                    ],
		                    hoverBackgroundColor: [
		                        "#90d8f6",
		                        "#f59440",
		                        "#a7a9ac"
		                    ]
		                }]
		        };

		        new Chart(doughnutCtx, {
		            type: 'doughnut',
		            data: chartDoughnut
		        });
});