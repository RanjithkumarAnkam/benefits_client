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
            allowAdding: true,
        }, 
        columns: [
            {
                dataField: "username",
                caption: "User's Name"
            }, 
            
           
            {
                dataField: "firmname",
                caption: "Firm Name"
            }, 
           
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
			"lastlogin",
            
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
		    "username": "Robert Company",
		    "firmname": "Robert",
		    "email": "robert@gmail.com",
			 "jobtitle": "Employee",
			  "status": 1,
			  "action": "Resend Password",
			  "lastlogin": "12-12-2016",
		   
		},
		{
		    "ID": 2,
		    "username": "Robert Company",
		    "firmname": "Robert",
		    "email": "robert@gmail.com",
			 "jobtitle": "Employee",
			  "status": 1,
			  "action": "Resend Password",
			  "lastlogin": "12-12-2016",
		   
		},
		{
		    "ID": 3,
		    "username": "Robert Company",
		    "firmname": "Robert",
		    "email": "robert@gmail.com",
			 "jobtitle": "Employee",
			  "status": 1,
			  "action": "Resend Password",
			  "lastlogin": "12-12-2016",
		   
		},
		{
		    "ID": 4,
		    "username": "Robert Company",
		    "firmname": "Robert",
		    "email": "robert@gmail.com",
			 "jobtitle": "Employee",
			  "status": 1,
			  "action": "Resend Password",
			  "lastlogin": "12-12-2016",
		   
		}];

		
		var statusID = [{
		    "ID": 1,
		    "Name": "Active"
		}, {
		    "ID": 2,
		    "Name": "Inactive"
		}];