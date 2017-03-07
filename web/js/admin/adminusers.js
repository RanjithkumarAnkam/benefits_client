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
        paging: {
            enabled: false
        },
        "export": {
            enabled: true,
            fileName: "Companies",
            allowExportSelectedData: true
        },
        bindingOptions: {
            filterRow: "filterRow",
            headerFilter: "headerFilter"
        },
        searchPanel: {
            visible: true,
            width: 240,
            placeholder: "Search..."
        },
      
        editing: {
            mode: "row",
            allowUpdating: true,
            allowDeleting: false,
            allowAdding: true
        }, 
        columns: [
            {
                dataField: "systemid",
                caption: "System ID"
            }, 
            {
                dataField: "userid",
                caption: "User ID"
            }, 
            {
                dataField: "firstname",
                caption: "First Name"
            }, 
            {
                dataField: "middleinitial",
                caption: "MIddle Initial"
            }, 
            {
                dataField: "lastname",
                caption: "Last Name"
            }, 
            {
                dataField: "jobtitle",
                caption: "Job Title"
            }, 
            {
                dataField: "phone",
                caption: "Phone #"
            }, 
            {
                dataField: "access",
                caption: "Access"
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
                dataField: "resendinvite",
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
		    "systemid": "1000",
		    "userid": "robert@gmail.com",
		    "firstname": "Sampath",
		    "middleinitial": "K",
		    "lastname": "Narayanan",
		    "jobtitle": "Manager",
		    "phone": "895-989-8898 extn 234",
		    "access": "Super admin,View dashboard financial,Add firm",
		    "status": 1,
		    "resendinvite": "Resend",
		    
		   
		},{
		    "ID": 1,
		    "systemid": "1002",
		    "userid": "robert@gmail.com",
		    "firstname": "Sampath",
		    "middleinitial": "K",
		    "lastname": "Narayanan",
		    "jobtitle": "Manager",
		    "phone": "895-989-8898 extn 234",
		    "access": "Super admin,View dashboard financial,Add firm",
		    "status": 1,
		    "resendinvite": "Resend",
		    
		   
		},{
		    "ID": 2,
		    "systemid": "1003",
		    "userid": "robert@gmail.com",
		    "firstname": "Sampath",
		    "middleinitial": "K",
		    "lastname": "Narayanan",
		    "jobtitle": "Manager",
		    "phone": "895-989-8898 extn 234",
		    "access": "Super admin,View dashboard financial,Add firm",
		    "status": 1,
		    "resendinvite": "Resend",
		    
		   
		},{
		    "ID": 3,
		    "systemid": "1004",
		    "userid": "robert@gmail.com",
		    "firstname": "Sampath",
		    "middleinitial": "K",
		    "lastname": "Narayanan",
		    "jobtitle": "Manager",
		    "phone": "895-989-8898 extn 234",
		    "access": "Super admin,View dashboard financial,Add firm",
		    "status": 1,
		    "resendinvite": "Resend",
		    
		   
		},{
		    "ID": 4,
		    "systemid": "1005",
		    "userid": "robert@gmail.com",
		    "firstname": "Sampath",
		    "middleinitial": "K",
		    "lastname": "Narayanan",
		    "jobtitle": "Manager",
		    "phone": "895-989-8898 extn 234",
		    "access": "Super admin,View dashboard financial,Add firm",
		    "status": 1,
		    "resendinvite": "Resend",
		    
		   
		},
		
		];

		var statusID = [{
		    "ID": 1,
		    "Name": "Active"
		}, {
		    "ID": 2,
		    "Name": "Inactive"
		}];