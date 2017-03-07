var DemoApp = angular.module('DemoApp',['dx']);


DemoApp.controller('DemoController', function DemoController($scope) {
 
    
    $scope.events = "";
    
    $scope.dataGridOptions = {
        dataSource: employees,
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
                dataField: "Firm",
                caption: "Title"
            }, 
            "Clientname",
            "Plantype",
            "Fees",
            
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
		
	
		$(function(){
				
			  <!-- Start JS and CSS Links -->

				
		      
		        // DOUGHTNUT CHART
		        var doughnutCtx = document.getElementById('chart-doughnut').getContext('2d');

		        var chartDoughnut = {
		            labels: [
		                "Plans Claims Reporting",
		                "Population Health",
		                "Stewardship Reporting"
		            ],
		            datasets: [
		                {
		                    data: [300, 50, 100],
		                    backgroundColor: [
		                        "#01a8fe",
		                        "#fb434a",
		                        "#f39834"
		                    ],
		                    hoverBackgroundColor: [
		                        "#01a8fe",
		                        "#fb434a",
		                        "#f39834"
		                    ]
		                }]
		        };

		        new Chart(doughnutCtx, {
		            type: 'doughnut',
		            data: chartDoughnut
		        });


		        // DOUGHTNUT CHART
		        var doughnutCtx = document.getElementById('chart-doughnut2').getContext('2d');

		        var chartDoughnut = {
		            labels: [
		                "Medical & Rx",
		                "Dental",
		                "Vision"
		            ],
		            datasets: [
		                {
		                    data: [300, 50, 100],
	                    backgroundColor: [
  		                        "#6a7a84",
  		                        "#01a8fe",
  		                        "#fb434a"
  		                    ],
  		                    hoverBackgroundColor: [
  		                        "#6a7a84",
  		                        "#01a8fe",
  		                        "#fb434a"
  		                    ]
		                }]
		        };

		        new Chart(doughnutCtx, {
		            type: 'doughnut',
		            data: chartDoughnut
		        });
		        

		        var firms = [
		                     "Ravi Consulting", "Benefit Brokers", "Tata Consulting", "Capgemini", "Igate", "Patni Solutions",
		                 ];

		                 $.typeahead({
		                     input: "#example1",
		                     order: "asc",
		                     minLength: 1,
		                     source: {
		                         data: firms
		                     },
		                     cancelButton: false
		                 });
		                 
                 var firmusers = [
 		                     "Ravi teja", "Praveen Singh", "Ranjith", "Mahesh", "Vinod", "Sainath",
 		                 ];

 		                 $.typeahead({
 		                     input: "#example1",
 		                     order: "asc",
 		                     minLength: 1,
 		                     source: {
 		                         data: firmusers
 		                     },
 		                     cancelButton: false
 		                 });
 		                 
 		                var clients = [
 		    		                     "Ravi teja company", "Praveen Singh company", "Ranjith company", "Mahesh company", "Vinod company", "Sainath company",
 		    		                 ];

 		    		                 $.typeahead({
 		    		                     input: "#example3",
 		    		                     order: "asc",
 		    		                     minLength: 1,
 		    		                     source: {
 		    		                         data: clients
 		    		                     },
 		    		                     cancelButton: false
 		    		                 });
 		    		                 
		                var clientusers = [
		    		                     "Ravi teja", "Praveen Singh", "Ranjith", "Mahesh", "Vinod", "Sainath",
		    		                 ];

		    		                 $.typeahead({
		    		                     input: "#example4",
		    		                     order: "asc",
		    		                     minLength: 1,
		    		                     source: {
		    		                         data: clientusers
		    		                     },
		    		                     cancelButton: false
		    		                 });
			    
});
		
		var employees = [{
		    "ID": 1,
		    "Firm": "Robert Company",
		    "Clientname": "Robert",
		    "Plantype": "Mr.",
		    "Fees": "989",
		   
		}, {
		    "ID": 2,
		    "Firm": "Ravi company",
		    "Clientname": "Ravi",
		    "Plantype": "Mr.",
		    "Fees": "989",
		   
		}, {
		    "ID": 3,
		    "Firm": "Pavan company",
		    "Clientname": "Pavan",
		    "Plantype": "Mr.",
		    "Fees": "989",
		   
		}, {
		    "ID": 4,
		    "Firm": "Angad Company",
		    "Clientname": "Angad",
		    "Plantype": "Mr.",
		    "Fees": "989",
		   
		}, {
		    "ID": 5,
		    "Firm": "Vinod Company",
		    "Clientname": "Vinod",
		    "Plantype": "Mr.",
		    "Fees": "989",
		   
		}, {
		    "ID": 6,
		    "Firm": "Akshay Company",
		    "Clientname": "Akshay",
		    "Plantype": "Mr.",
		    "Fees": "989",
		   
		}, {
		    "ID": 7,
		    "Firm": "Sai Company",
		    "Clientname": "Sai",
		    "Plantype": "Mr.",
		    "Fees": "989",
		   
		}];

		