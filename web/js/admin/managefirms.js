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
            fileName: "Manage Firms",
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
                               .attr('href','/admin/firm/update-firm?id=sdfd45sdfsd')
                              // .attr('target', '_blank')
                               .appendTo(container);
                       }
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
				 cellTemplate: function (container, options) {
                           $('<a>Active</a>')
                               .attr('href','#')
                              // .attr('target', '_blank')
                               .appendTo(container);
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
		    "status": "Active",
		    "lastlogin": "08-09-2015",
		  
		}, {
		    "ID": 2,
		    "firmname": "Firm 1",
		    "primarycontact": "12345",
		    "primarytel": "Client 1",
		    "primaryemail": "Firm",
		    "status": "Active",
		    "lastlogin": "08-09-2015",
		   
		}, {
		    "ID": 3,
		    "firmname": "Firm 1",
		    "primarycontact": "12345",
		    "primarytel": "Client 1",
		    "primaryemail": "Firm",
		    "status": "Active",
		    "lastlogin": "08-09-2015",
		   
		}, {
		    "ID": 4,
		    "firmname": "Firm 1",
		    "primarycontact": "12345",
		    "primarytel": "Client 1",
		    "primaryemail": "Firm",
		    "status": "Active",
		    "lastlogin": "08-09-2015",
		   
		}, {
		    "ID": 5,
		    "firmname": "Firm 1",
		    "primarycontact": "12345",
		    "primarytel": "Client 1",
		    "primaryemail": "Firm",
		    "status": "Active",
		    "lastlogin": "08-09-2015",
		   
		}, {
		    "ID": 6,
		    "firmname": "Firm 1",
		    "primarycontact": "12345",
		    "primarytel": "Client 1",
		    "primaryemail": "Firm",
		    "status": "Active",
		    "lastlogin": "08-09-2015",
		   
		}, {
		    "ID": 7,
		    "firmname": "Firm 1",
		    "primarycontact": "12345",
		    "primarytel": "Client 1",
		    "primaryemail": "Firm",
		    "status":"Active",
		    "lastlogin": "08-09-2015",
		   
		}];

		var statusID = [{
		    "ID": 1,
		    "Name": "Active"
		}, {
		    "ID": 2,
		    "Name": "Inactive"
		}];
		
		function firmdetails(){
		
			
		}