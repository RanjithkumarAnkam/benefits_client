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
            fileName: "Manage Firms",
            allowExportSelectedData: true
        },
        editing: {
            mode: "row",
            allowUpdating: false,
            allowDeleting: false,
            allowAdding: true
        }, 
        columns: [
           
            {
                dataField: "firmname",
                caption: "Firm Name"
            },
            {
                dataField: "primarycontact",
                caption: "Primary Contact"
            },
            {
                dataField: "primarytel",
                caption: "Primary Contact Telephone"
            },
            {
                dataField: "primaryemail",
                caption: "Primary Email"
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
                dataField: "lastlogin",
                caption: "Last Login"
            },
         //    "action",
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
		    "firmname": "Firm 1",
		    "primarycontact": "12345",
		    "primarytel": "Client 1",
		    "primaryemail": "Firm",
		    "status": 2,
		    "lastlogin": "08-09-2015",
		  
		}, {
		    "ID": 2,
		    "firmname": "Firm 1",
		    "primarycontact": "12345",
		    "primarytel": "Client 1",
		    "primaryemail": "Firm",
		    "status": 1,
		    "lastlogin": "08-09-2015",
		   
		}, {
		    "ID": 3,
		    "firmname": "Firm 1",
		    "primarycontact": "12345",
		    "primarytel": "Client 1",
		    "primaryemail": "Firm",
		    "status": 2,
		    "lastlogin": "08-09-2015",
		   
		}, {
		    "ID": 4,
		    "firmname": "Firm 1",
		    "primarycontact": "12345",
		    "primarytel": "Client 1",
		    "primaryemail": "Firm",
		    "status": 1,
		    "lastlogin": "08-09-2015",
		   
		}, {
		    "ID": 5,
		    "firmname": "Firm 1",
		    "primarycontact": "12345",
		    "primarytel": "Client 1",
		    "primaryemail": "Firm",
		    "status": 2,
		    "lastlogin": "08-09-2015",
		   
		}, {
		    "ID": 6,
		    "firmname": "Firm 1",
		    "primarycontact": "12345",
		    "primarytel": "Client 1",
		    "primaryemail": "Firm",
		    "status": 1,
		    "lastlogin": "08-09-2015",
		   
		}, {
		    "ID": 7,
		    "firmname": "Firm 1",
		    "primarycontact": "12345",
		    "primarytel": "Client 1",
		    "primaryemail": "Firm",
		    "status": 1,
		    "lastlogin": "08-09-2015",
		   
		}];

		var statusID = [{
		    "ID": 1,
		    "Name": "Active"
		}, {
		    "ID": 2,
		    "Name": "Inactive"
		}];