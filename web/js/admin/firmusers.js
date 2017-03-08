var DemoApp = angular.module('DemoApp',['dx']);


DemoApp.controller('DemoController', function DemoController($scope) {
 
    
    $scope.events = "";
    
	  $scope.filterRow = {
        visible: true,
        applyFilter: "auto"
    };
	
    $scope.dataGridOptions = {
        dataSource: employees,
       
	    bindingOptions: {
            filterRow: "filterRow",
            headerFilter: "headerFilter"
        },
      
        "export": {
            enabled: true,
            fileName: "Employees",
            allowExportSelectedData: true
        },
       
        editing: {
           mode: "",
            allowUpdating: false,
        }, 
        columns: [
           {
                dataField: "firmname",
				 cellTemplate: function (container, options) {
                           $('<a>'+ options.value +'</a>')
                                .attr('href','/admin/firm/updatefirm-user?id=sdfd45sdfsd')
                              // .attr('target', '_blank')
                               .appendTo(container);
                       }
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
		    "firmname": "Robert Company",
		    "Firstname": "Robert",
		    "middlename": "Mr.",
		    "lastname": "Teja",
		    "email": "robert@gmail.com",
			 "jobtitle": "Employee",
			  "status": "Active",
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
			  "status":  "Active",
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
			  "status":  "InActive",
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
			  "status":  "InActive",
			  "action": "Resend Password",
		   
		}];

			function firmuserdetails(){
			
		}
	