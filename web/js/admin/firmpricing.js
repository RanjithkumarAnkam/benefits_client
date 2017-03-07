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
            fileName: "Companies",
            allowExportSelectedData: true
        },
        editing: {
            mode: "row",
            allowUpdating: false,
            allowDeleting: false,
            allowAdding: false
        }, 
        columns: [
            {
                dataField: "clientno",
                caption: "Firm Client # For Module"
            },
            {
                dataField: "systemno",
                caption: "System Client #"
            },
            {
                dataField: "clientname",
                caption: "Client Name"
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
           
        }
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

		