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
                dataField: "Clientname",
				 cellTemplate: function (container, options) {
                           $('<a>'+ options.value +'</a>')
                                .attr('href','/admin/clients/editclient?id=sdfd45sdfsd')
                              // .attr('target', '_blank')
                               .appendTo(container);
                       }
            },
            
           
            "Firstname",
            "lastname",
            "email",
			"jobtitle",
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
		    "Clientname": "Robert Company",
		    "Firstname": "Robert",
		    "lastname": "Mr.",
		    "email": "robert@gmail.com",
			 "jobtitle": "Employee",
			  "status": "Active",
			  "action": "Resend Password",
		   
		},
		{
		    "ID": 2,
		    "Clientname": "Ravi Company",
		    "Firstname": "Robert",
		    "lastname": "Rangu",
		    "email": "rangu@gmail.com",
			 "jobtitle": "Manager",
			  "status": "Inactive",
			  "action": "Resend Password",
		   
		}];

		
		function clientdetails(){
		
			
		}