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
                removeEnabled: false,
                insertEnabled: false,
        }, 
		selection: {mode: 'none'},
            width: 'auto',
        columns: [
            {
                dataField: "clientno",
                caption: "Firm Client # For Module",
				 allowEditing: false,
            },
            {
                dataField: "systemno",
                caption: "System Client #",
				 allowEditing: false,
            },
            {
                dataField: "clientname",
                caption: "Client Name",
				 allowEditing: false,
            },
            {
                dataField: "package1",
                caption: "Package 1"
            },
            
            {
                dataField: "package2",
                caption: "Package 2"
            },
            {
                dataField: "package3",
                caption: "Package 3"
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
		    "clientno": "F7888",
		    "systemno": "Firm 1",
		    "clientname": "Client 1",
		    "package1": "$1200",
		    "package2": "$2000",
		    "package3": "$3000",
		}, {
		    "ID": 2,
		    "clientno": "F7888",
		    "systemno": "Firm 1",
		    "clientname": "Client 1",
		    "package1": "$1200",
		    "package2": "$2000",
		    "package3": "$3000",
		   
		}, {
		    "ID": 3,
		    "clientno": "F7888",
		    "systemno": "Firm 1",
		    "clientname": "Client 1",
		    "package1": "$1200",
		    "package2": "$2000",
		    "package3": "$3000",
		   
		}, {
		    "ID": 4,
		    "clientno": "F7888",
		    "systemno": "Firm 1",
		    "clientname": "Client 1",
		    "package1": "$1200",
		    "package2": "$2000",
		    "package3": "$3000",
		   
		}, {
		    "ID": 5,
		    "clientno": "F7888",
		    "systemno": "Firm 1",
		    "clientname": "Client 1",
		    "package1": "$1200",
		    "package2": "$2000",
		    "package3": "$3000",
		   
		}, {
		    "ID": 6,
		    "clientno": "F7888",
		    "systemno": "Firm 1",
		    "clientname": "Client 1",
		    "package1": "$1200",
		    "package2": "$2000",
		    "package3": "$3000",
		   
		}, {
		    "ID": 7,
		    "clientno": "F7888",
		    "systemno": "Firm 1",
		    "clientname": "Client 1",
		    "package1": "$1200",
		    "package2": "$2000",
		    "package3": "$3000",
		   
		}];

		