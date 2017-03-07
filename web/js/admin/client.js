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
            allowUpdating: true,
            allowDeleting: false,
            allowAdding: true
        }, 
        columns: [
            {
                dataField: "Clientname",
                caption: "Client Name"
            }, 
            
           
            "Firstname",
            "lastname",
            "email",
			"jobtitle",
			 {
                dataField: "status",
                caption: "Status",
                width: 125,
                lookup: {
                    dataSource: statusID,
                    displayExpr: "Name",
                    valueExpr: "ID"
                }
            },
			"action",
            
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
		    "Firstname": "Robert",
		    "lastname": "Mr.",
		    "email": "robert@gmail.com",
			 "jobtitle": "Employee",
			  "status": 1,
			  "action": "Resend Password",
		   
		},
		{
		    "ID": 2,
		    "Clientname": "Ravi Company",
		    "Firstname": "Robert",
		    "lastname": "Rangu",
		    "email": "rangu@gmail.com",
			 "jobtitle": "Manager",
			  "status": 2,
			  "action": "Resend Password",
		   
		}];

		
		var statusID = [{
		    "ID": 1,
		    "Name": "Active"
		}, {
		    "ID": 2,
		    "Name": "Inactive"
		}];