var DemoApp = angular.module('DemoApp',['dx']);


DemoApp.controller('DemoController', function DemoController($scope) {
 
    
    $scope.events = "";
    
    $scope.dataGridOptions = {
        dataSource: employees,
       
        "export": {
            enabled: true,
            fileName: "Employees",
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
                dataField: "firmname",
                caption: "Client Name"
            },

            {
                dataField: "Firstname",
                caption: "First Name"
            },
            {
                dataField: "lastname",
                caption: "Last Name"
            },	
			 "email",
            {
                dataField: "jobtitle",
                caption: "Job Title"
            },			
            
           
           
           
			
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
			 {
                dataField: "action",
                caption: "Resend Invite"
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
		    "firmname": "Robert Company",
		    "Firstname": "Robert",
		    "middlename": "Mr.",
		    "lastname": "Teja",
		    "email": "robert@gmail.com",
			 "jobtitle": "Employee",
			  "status": 1,
			  "action": "Resend Password",
		   
		},
		{
		    "ID": 2,
		    "firmname": "Rangu Company",
		    "Firstname": "Vijay",
		    "middlename": "Mr.",
		    "lastname": "Kunmar",
		    "email": "vijay@gmail.com",
			 "jobtitle": "Client Manager",
			  "status": 1,
			  "action": "Resend Password",
		   
		},
		{
		    "ID": 3,
		    "firmname": "Suresh Company",
		    "Firstname": "Rajani",
		    "middlename": "Mr.",
		    "lastname": "Kanth",
		    "email": "rajani@gmail.com",
			 "jobtitle": "Delivery",
			  "status": 1,
			  "action": "Resend Password",
		   
		},
		{
		    "ID": 4,
		    "firmname": "Praveen Company",
		    "Firstname": "Mahesh",
		    "middlename": "Mr.",
		    "lastname": "Kumar",
		    "email": "mahesh@gmail.com",
			 "jobtitle": "Accounts",
			  "status": 1,
			  "action": "Resend Password",
		   
		}];

		
		var statusID = [{
		    "ID": 1,
		    "Name": "Active"
		}, {
		    "ID": 2,
		    "Name": "Inactive"
		}];