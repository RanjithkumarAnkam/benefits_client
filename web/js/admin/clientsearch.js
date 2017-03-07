var DemoApp = angular.module('DemoApp',['dx']);


DemoApp.controller('DemoController', function DemoController($scope) {
 
	
	    
	    $scope.filterRow = {
	        visible: false,
	        applyFilter: "auto"
	    };
	    
	    $scope.headerFilter = {
	        visible: false
	    };
	    
    $scope.events = "";
    
    $scope.dataGridOptions = {
        dataSource: employees,
        
        bindingOptions: {
            filterRow: "filterRow",
            headerFilter: "headerFilter"
        },
        searchPanel: {
            visible: true,
            width: 240,
            placeholder: "Search..."
        }, 
        
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
                dataField: "Clientname",
                caption: "Client Name"
            }, 
            "Firm",
            {
                dataField: "Leadconsultant",
                caption: "Lead Consultant"
            },
            {
                dataField: "Leadaccountmanager",
                caption: "Lead Account Manager"
            },
            {
                dataField: "Leadservicerep",
                caption: "Lead Service Rep"
            },
            {
                dataField: "status",
                caption: "Status",
                width: 125,
                lookup: {
                    dataSource: StatusId,
                    displayExpr: "Name",
                    valueExpr: "ID"
                }
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
		
	
	
		var employees = [{
		    "ID": 1,
		    "Clientname": "Robert Company",
		    "Firm": "Robert Firm",
		    "Leadconsultant": "John brown",
		    "Leadaccountmanager": "989",
		    "Leadservicerep": "989",
		    "status": 1,
		   
		}, {
			 "ID": 2,
			    "Clientname": "sai Company",
			    "Firm": "sai Firm",
			    "Leadconsultant": "brown",
			    "Leadaccountmanager": "venkatesh",
			    "Leadservicerep": "rana",
			    "status": 2,
		   
		}, {
			 "ID": 3,
			    "Clientname": "virinchi Company",
			    "Firm": "virinchi Firm",
			    "Leadconsultant": "John",
			    "Leadaccountmanager": "vinod",
			    "Leadservicerep": "kumar",
			    "status": 1,
		   
		}, {
			 "ID": 4,
			    "Clientname": "uday Company",
			    "Firm": "uday Firm",
			    "Leadconsultant": "pawan",
			    "Leadaccountmanager": "kalyan",
			    "Leadservicerep": "praveen",
			    "status": 2,
		   
		}, {
			 "ID": 5,
			    "Clientname": "vamsi Company",
			    "Firm": "vamsi Firm",
			    "Leadconsultant": "angad brown",
			    "Leadaccountmanager": "mahesh",
			    "Leadservicerep": "prasad",
			    "status": 1,
		   
		}, {
			 "ID": 6,
			    "Clientname": "vinay Company",
			    "Firm": "vinay Firm",
			    "Leadconsultant": "Ravi teja",
			    "Leadaccountmanager": "pramod",
			    "Leadservicerep": "kalyan",
			    "status": 2,
		   
		}, {
			 "ID": 7,
			    "Clientname": "Darshi Company",
			    "Firm": "Darshi Firm",
			    "Leadconsultant": "Arjun Reddy",
			    "Leadaccountmanager": "Ranjith",
			    "Leadservicerep": "Akshya",
			    "status":1,
		   
		}];

		var StatusId = [{
			"ID":1,
			"Name":"Active"
		},
		{
			"ID":2,
			"Name":"Inactive"
		}];