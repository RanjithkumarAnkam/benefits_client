
	var DemoApp = angular.module('DemoApp',['dx']);


		DemoApp.controller('DemoController', function DemoController($scope) {
		 
		    
		    $scope.events = "";
		    
		    $scope.dataGridOptions = {
		        dataSource: employe,
		        paging: {
		            enabled: false
		        },
		        "export": {
		            enabled: false,
		            fileName: "Companies",
		            allowExportSelectedData: false
		        },
		        editing: {
		            mode: "batch",
					allowUpdating: true
		        }, 
		        columns: [
		            
					  {
		                dataField:  "plantype",
		                caption: "Plan Type (auto)",
						 allowEditing: false,
		            },
					  {
		                dataField: "vision",
		                caption: "Vision"
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
		   
		        $scope.dataGridOptionsnetworkperfomance = {
		        dataSource: networkperfomance,
		        paging: {
		            enabled: false
		        },
		        "export": {
		            enabled: true,
		            fileName: "networkperfomance",
		            allowExportSelectedData: true
		        },
		        editing: {
		            mode: "row",
		            allowUpdating: true,
		            allowDeleting: false,
		            allowAdding: false
		        }, 
		        columns: [
		            
					  {
		                dataField:  "head1",
		                caption: "",
						allowEditing: false,
		            },
					  {
		                dataField: "head2",
		                caption: "",
						/*onEditingStart: function(e) {
            
						if(e.data.ID==4 || e.data.ID==5)
						{
						e.cancel=true;
						}
					},*/
		            },
					
				 ],
		        onEditingStart: function(e) {
		           	if(e.data.ID==4 || e.data.ID==5)
						{
						e.cancel=true;
						}
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
			
		  
		  
		  
		   
		    $scope.dataGridOptionslargeclaims = {
		        dataSource: largeclaims,
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
		            allowUpdating: true,
		            allowDeleting: true,
		            allowAdding: true
		        }, 
		        columns: [
		            
					  {
		                dataField:  "claimantid",
		                caption: "Claimant ID"
		            },
					  {
		                dataField: "enrollmentstatus",
		                caption: "Enrollment Status"
		            },
					{
		                dataField: "membertype",
		                caption: "Member Type"
		            },
					{
		                dataField: "age",
		                caption: "Age"
		            },
					{
		                dataField: "gender",
		                caption: "Gender"
		            },
					{
		                dataField: "planclaims",
		                caption: "Plan Claims"
		            },
					{
		                dataField: "condition",
		                caption: "Condition"
		            },
					{
		                dataField: "progonosis",
		                caption: "Prognosis"
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
        dataSource: {
            store: {
                type: "array",
                key: "ID",
                data: orders
            }
        },
        selection: {
            mode: "single"
        },
        columns: [{
                dataField: "name",
                width: 180,
                caption: ""
            },{
                dataField: "jan",
                alignment: "right",
                format: "currency",
                caption: "Jan 2015",
            }, {
                dataField: "feb",
                alignment: "right",
                format: "currency",
                caption: "Feb 2015",
            }, 
            {
                dataField: "mar",
                alignment: "right",
                format: "currency",
                caption: "Mar 2015",
            }, 
			{
                dataField: "apr",
                alignment: "right",
                format: "currency",
                caption: "Apr 2015",
            }, 
			{
                dataField: "may",
                alignment: "right",
                format: "currency",
                caption: "May 2015",
            }, 
			{
                dataField: "jun",
                alignment: "right",
                format: "currency",
                caption: "Jun 2015",
            }, 
			{
                dataField: "jul",
                alignment: "right",
                format: "currency",
                caption: "Jul 2015",
            }, 
			{
                dataField: "aug",
                alignment: "right",
                format: "currency",
                caption: "Aug 2015",
            }, 
			{
                dataField: "sep",
                alignment: "right",
                format: "currency",
                caption: "Sep 2015",
            }, 
			{
                dataField: "oct",
                alignment: "right",
                format: "currency",
                caption: "Oct 2015",
            }, 
			{
                dataField: "nov",
                alignment: "right",
                format: "currency",
                caption: "Nov 2015",
            }, 
			{
                dataField: "dec",
                alignment: "right",
                format: "currency",
                caption: "Dec 2015",
            }, 
			
        ],
        summary: {
            totalItems: [{
                column: "jan",
                summaryType: "sum",
                valueFormat: "currency",
				 customizeText: function(data) {
                    return "$"+data.value;
                }
            },  {
                column: "feb",
                summaryType: "sum",
                valueFormat: "currency",
				customizeText: function(data) {
                    return "$"+data.value;
                }
            }
			
			,  {
                column: "mar",
                summaryType: "sum",
                valueFormat: "currency",
				customizeText: function(data) {
                    return "$"+data.value;
                }
            }
			,  {
                column: "apr",
                summaryType: "sum",
                valueFormat: "currency",
				customizeText: function(data) {
                    return "$"+data.value;
                }
            },  {
                column: "may",
                summaryType: "sum",
                valueFormat: "currency",
				customizeText: function(data) {
                    return "$"+data.value;
                }
            }
			,  {
                column: "jun",
                summaryType: "sum",
                valueFormat: "currency",
				customizeText: function(data) {
                    return "$"+data.value;
                }
            }
			,  {
                column: "jul",
                summaryType: "sum",
                valueFormat: "currency",
				customizeText: function(data) {
                    return "$"+data.value;
                }
            }
			,  {
                column: "aug",
                summaryType: "sum",
                valueFormat: "currency",
				customizeText: function(data) {
                    return "$"+data.value;
                }
            }
			,  {
                column: "sep",
                summaryType: "sum",
                valueFormat: "currency",
				customizeText: function(data) {
                    return "$"+data.value;
                }
            }
			,  {
                column: "oct",
                summaryType: "sum",
                valueFormat: "currency",
				customizeText: function(data) {
                    return "$"+data.value;
                }
            }
			,  {
                column: "nov",
                summaryType: "sum",
                valueFormat: "currency",
				customizeText: function(data) {
                    return "$"+data.value;
                }
            }
			,  {
                column: "dec",
                summaryType: "sum",
                valueFormat: "currency",
				customizeText: function(data) {
                    return "$"+data.value;
                }
            }
			]
        }
    };
    
			
			
		    
		});
		
		var employe = [{
		    "plantype": "Name of Plan *",
		    "vision": "Group Vision Plan",
		  
		   
		   
		}, {
		    "plantype": "Administrative Carrier/Vendor*",
		    "vision": "United Health Care",
		  
		   
		   
		}, {
		    "plantype": "Network*",
		    "vision": "UHC Plus",
		  
		   
		   
		}, {
		    "plantype": "Renewal Plan Year *",
		    "vision": "2016",
		  
		   
		   
		},

		 {
		    "plantype": "Annual Fee/Commission on Plan  *",
		    "vision": "$75,000",
		  
		   
		   
		},

		 {
		    "plantype": "Budget",
		    "vision": "$1,345,555",
		  
		   
		   
		},

		 {
		    "plantype": "Any Notes",
		    "vision": "+ Add Notes",
		  
		   
		   
		},	
	{
		    "plantype": "Plan Funding *",
		    "vision": "Fully Insured",
		  
		   
		   
		},			];
		
		

var networkperfomance = [{
	        "ID":"1",
		    "head1": "Network Utilization %",
		    "head2": "95%",
			},
			{
				"ID":"2",
		    "head1": "Total Sumitted Charges",
		    "head2": "$4000000",
			},
			{
				"ID":"3",
		    "head1": "Total Allowed Charges",
		    "head2": "$2500000",
			},
			{
				"ID":"4",
		    "head1": "Total Savings",
		    "head2": "1500000",
			},
			{
				"ID":"5",
		    "head1": "Discount %",
		    "head2": "37.5%",
			},
		];



var orders = [{
	"name":"Employee Enrollment",
    "jan": 250,
    "feb": 250,
    "mar": 250,
    "apr": 250,
	 "may": 250,
	  "jun": 250,
	   "jul": 250,
	    "aug": 250,
		 "sep": 250,
		  "oct": 250,
		   "nov": 250,
		   "dec": 250,
  
},
{
	"name":"Member Enrollment",
    "jan": 600,
    "feb": 600,
    "mar": 600,
    "apr": 600,
	 "may": 600,
	  "jun": 600,
	   "jul": 600,
	    "aug": 600,
		 "sep": 600,
		  "oct": 600,
		   "nov": 600,
		   "dec": 600,
  
}];

var largeclaims = [{
		    "claimantid": "7891",
		    "enrollmentstatus": "Active",
			"membertype": "Employee",
			"age": "47",
			"gender": "Male",
			"planclaims": "$175,668",
			"condition": "Cancer",
			"progonosis": "$100,000 next year",
		  
		},
		{
		    "claimantid": "7891",
		    "enrollmentstatus": "Active",
			"membertype": "Employee",
			"age": "47",
			"gender": "Male",
			"planclaims": "$175,668",
			"condition": "Cancer",
			"progonosis": "$100,000 next year",
		  
		},
		{
		    "claimantid": "7891",
		    "enrollmentstatus": "Active",
			"membertype": "Employee",
			"age": "47",
			"gender": "Male",
			"planclaims": "$175,668",
			"condition": "Cancer",
			"progonosis": "$100,000 next year",
		  
		},
		{
		    "claimantid": "7891",
		    "enrollmentstatus": "Active",
			"membertype": "Employee",
			"age": "47",
			"gender": "Male",
			"planclaims": "$175,668",
			"condition": "Cancer",
			"progonosis": "$100,000 next year",
		  
		},
		{
		    "claimantid": "7891",
		    "enrollmentstatus": "Active",
			"membertype": "Employee",
			"age": "47",
			"gender": "Male",
			"planclaims": "$175,668",
			"condition": "Cancer",
			"progonosis": "$100,000 next year",
		  
		},
		{
		    "claimantid": "7891",
		    "enrollmentstatus": "Active",
			"membertype": "Employee",
			"age": "47",
			"gender": "Male",
			"planclaims": "$175,668",
			"condition": "Cancer",
			"progonosis": "$100,000 next year",
		  
		},
		{
		    "claimantid": "7891",
		    "enrollmentstatus": "Active",
			"membertype": "Employee",
			"age": "47",
			"gender": "Male",
			"planclaims": "$175,668",
			"condition": "Cancer",
			"progonosis": "$100,000 next year",
		  
		},
		{
		    "claimantid": "7891",
		    "enrollmentstatus": "Active",
			"membertype": "Employee",
			"age": "47",
			"gender": "Male",
			"planclaims": "$175,668",
			"condition": "Cancer",
			"progonosis": "$100,000 next year",
		  
		},


];

