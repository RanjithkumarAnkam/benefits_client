var DemoApp = angular.module('DemoApp',['dx']);


DemoApp.controller('DemoController', function DemoController($scope) {
 
	
		    
    $scope.events = "";
      $scope.filterRow = {
        visible: true,
        applyFilter: "auto"
    };
    $scope.dataGridOptions = {
        dataSource: employees,
        paging: {
            enabled: false
        },
		   bindingOptions: {
            filterRow: "filterRow",
            headerFilter: "headerFilter"
        },
		
        "export": {
            enabled: true,
            fileName: "Companies",
            allowExportSelectedData: true
        },
       
      
         editing: {
            mode: "",
            allowUpdating: false,
           
        }, 
        columns: [
           
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
                caption: "M.I"
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
				 cellTemplate: function (container, options) {
                           $('<a>Active</a>')
                               .attr('href','#')
                              // .attr('target', '_blank')
                               .appendTo(container);
                       }
              /*  caption: "Status",
                width: 125,
                lookup: {
                    dataSource: statusID,
                    displayExpr: "Name",
                    valueExpr: "ID"
                }*/
            },
           {
                dataField: "action",
				 cellTemplate: function (container, options) {
                           $('<a>Resend Password</a>')
                               .attr('href','#')
                              // .attr('target', '_blank')
                               .appendTo(container);
                       }
              /*  caption: "Status",
                width: 125,
                lookup: {
                    dataSource: statusID,
                    displayExpr: "Name",
                    valueExpr: "ID"
                }*/
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
		   
		    "userid": "sampath@gmail.com",
		    "firstname": "Sampath",
		    "middleinitial": "K",
		    "lastname": "Narayanan",
		    "jobtitle": "Manager",
		    "phone": "895-989-8898 extn 234",
		    "access": "Super admin,View dashboard financial,Add firm",
		    "status": "Action",
		    "action": "Resend",
		    
		   
		},{
		    "ID": 2,
		   
		    "userid": "robert@gmail.com",
		    "firstname": "Robert",
		    "middleinitial": "K",
		    "lastname": "Narayanan",
		    "jobtitle": "Manager",
		    "phone": "895-989-8898 extn 234",
		    "access": "Super admin,View dashboard financial,Add firm",
		    "status": "Action",
		   "action": "Resend",
		    
		   
		},{
		    "ID": 3,
		   
		    "userid": "robert@gmail.com",
		    "firstname": "Sampath",
		    "middleinitial": "K",
		    "lastname": "Narayanan",
		    "jobtitle": "Manager",
		    "phone": "895-989-8898 extn 234",
		    "access": "Super admin,View dashboard financial,Add firm",
		    "status":"Action",
		    "action": "Resend",
		    
		   
		},{
		    "ID": 4,
		   
		    "userid": "robert@gmail.com",
		    "firstname": "Sampath",
		    "middleinitial": "K",
		    "lastname": "Narayanan",
		    "jobtitle": "Manager",
		    "phone": "895-989-8898 extn 234",
		    "access": "Super admin,View dashboard financial,Add firm",
		    "status": "Action",
		    "action": "Resend",
		    
		   
		},{
		    "ID": 5,
		   
		    "userid": "robert@gmail.com",
		    "firstname": "Sampath",
		    "middleinitial": "K",
		    "lastname": "Narayanan",
		    "jobtitle": "Manager",
		    "phone": "895-989-8898 extn 234",
		    "access": "Super admin,View dashboard financial,Add firm",
		    "status": "Action",
		     "action": "Resend",
		    
		   
		},
		
		];

		