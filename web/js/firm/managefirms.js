var DemoApp = angular.module('DemoApp',['dx']);


DemoApp.controller('DemoController', function DemoController($scope) {
 
	
		    
    $scope.events = "";
      $scope.filterRow = {
        visible: false,
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
            mode: "row",
             editEnabled: false,
                removeEnabled: false,
                insertEnabled: false,
        }, 
        columns: [
           
			  {
                dataField: "name",
				 caption: "Name (Last, First)",
				 allowEditing: false,
				 cellTemplate: function (container, options) {
                           $('<a>Last, First</a>')
                               .attr('href',options.value)
                              // .attr('target', '_blank')
                               .appendTo(container);
                       }
            },
			{
                dataField: "usertype",
                caption: "User Type"
            },
			 {
                dataField: "company",
				 caption: "Company",
				 allowEditing: false,
				 cellTemplate: function (container, options) {
                           $('<a>'+options.value+'</a>')
                               .attr('href',"#")
                              // .attr('target', '_blank')
                               .appendTo(container);
                       }
            },
			 {
                dataField: "email",
                caption: "Email"
            },
            {
                dataField: "lastlogin",
                caption: "Last Login"
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
   
      $scope.dataGridOptionsfirmusers = {
        dataSource: employee,
        paging: {
            enabled: false
        },
		   bindingOptions: {
            filterRow: "filterRow",
            headerFilter: "headerFilter"
        },
		searchPanel: {
        visible: true
    },
		
        "export": {
            enabled: true,
            fileName: "Companies",
            allowExportSelectedData: true
        },
       
      
           editing: {
            mode: "row",
             editEnabled: false,
                removeEnabled: false,
                insertEnabled: false,
        }, 
        columns: [
           
			  {
                dataField: "name",
				 caption: "Name (Last, First)",
				 allowEditing: false,
				 cellTemplate: function (container, options) {
                           $('<a>Last, First</a>')
                               .attr('href',options.value)
                              // .attr('target', '_blank')
                               .appendTo(container);
                       }
            },
			{
                dataField: "usertype",
                caption: "User Type"
            },
			 {
                dataField: "company",
				 caption: "Company",
				 allowEditing: false,
				 cellTemplate: function (container, options) {
                           $('<a>'+options.value+'</a>')
                               .attr('href',"#")
                              // .attr('target', '_blank')
                               .appendTo(container);
                       }
            },
			 {
                dataField: "email",
                caption: "Email"
            },
            {
                dataField: "lastlogin",
                caption: "Last Login"
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
		    
		   
		    "name": "/firms/update-firm?firm_id=1",
		    "usertype": "Firm",
		    "company": "Sky Ins Tech",
		    "email": "Last@sky.com",
		    "lastlogin": "1/2/2017",
		    
		    
		   
		},{
		   
		    "name": "/firms/update-firm?firm_id=1",
		    "usertype": "Firm",
		    "company": "Sky Ins Tech",
		    "email": "Last@sky.com",
		    "lastlogin": "1/2/2017",
		    
		   
		},{
		   
		    "name": "/firms/update-firm?firm_id=1",
		    "usertype": "Firm",
		    "company": "Sky Ins Tech",
		    "email": "Last@sky.com",
		    "lastlogin": "1/2/2017",
		    
		   
		},{
		   
		    "name": "/firms/update-firm?firm_id=1",
		    "usertype": "Firm",
		    "company": "Sky Ins Tech",
		    "email": "Last@sky.com",
		    "lastlogin": "1/2/2017",
		    
		   
		},{
		   
		    "name": "/firms/update-firm?firm_id=1",
		    "usertype": "Firm",
		    "company": "Sky Ins Tech",
		    "email": "Last@sky.com",
		    "lastlogin": "1/2/2017",
		    
		   
		},
		
		];
		
			var employee = [{
		    
		   
		    "name": "/firms/updatefirm-user?firm_user_id=1",
		    "usertype": "Firm",
		    "company": "Sky Ins Tech",
		    "email": "Last@sky.com",
		    "lastlogin": "1/2/2017",
		    
		    
		   
		},{
		   
		    "name": "/firms/updatefirm-user?firm_user_id=1",
		    "usertype": "Firm",
		    "company": "Sky Ins Tech",
		    "email": "Last@sky.com",
		    "lastlogin": "1/2/2017",
		    
		   
		},{
		   
		    "name": "/firms/updatefirm-user?firm_user_id=1",
		    "usertype": "Firm",
		    "company": "Sky Ins Tech",
		    "email": "Last@sky.com",
		    "lastlogin": "1/2/2017",
		    
		   
		},{
		   
		    "name": "/firms/updatefirm-user?firm_user_id=1",
		    "usertype": "Firm",
		    "company": "Sky Ins Tech",
		    "email": "Last@sky.com",
		    "lastlogin": "1/2/2017",
		    
		   
		},{
		   
		    "name": "/firms/updatefirm-user?firm_user_id=1",
		    "usertype": "Firm",
		    "company": "Sky Ins Tech",
		    "email": "Last@sky.com",
		    "lastlogin": "1/2/2017",
		    
		   
		},
		
		];

		