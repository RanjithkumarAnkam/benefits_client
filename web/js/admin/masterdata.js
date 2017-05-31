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
            mode: "row",
             editEnabled: true,
                removeEnabled: true,
                insertEnabled: true,
        }, 
        columns: [
           
			{
                dataField: "lookupname",
                caption: "Lookup Name"
				
            },
			{
                dataField: "lookupoption",
                caption: "Lookup Option"
            },
			
			{
                dataField: "status",
				 allowEditing: false,
				 cellTemplate: function (container, options) {
                           $('<a>Active</a>')
                               .attr('href','#')
                              // .attr('target', '_blank')
                               .appendTo(container);
                       }
            
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
           
        },
			onRowPrepared: function (e) {
		back(e);
		},
    };
   
    
});
		
	
	 
		
		var employees = [{
		    "ID": 1,
		    "lookupname": "Module",
		    "lookupoption": "Plan Claims Reporting",
		    "status": "Active",
		},{
		    "ID": 2,
		   "lookupname": "Module",
		    "lookupoption": "Population Health Management",
		    "status": "Active",
		    
		   
		},{
		    "ID": 3,
		   "lookupname": "Module",
		    "lookupoption": "Stewardship Reporting",
		    "status": "Active",
		    
		   
		},{
		    "ID": 4,
		  "lookupname": "Module",
		    "lookupoption": "Plan RFP Quoting Assistant",
		    "status": "Active",
		    
		   
		}];

		