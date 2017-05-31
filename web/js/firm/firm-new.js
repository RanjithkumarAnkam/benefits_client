var DemoApp = angular.module('DemoApp', ['dx']);

		var DemoApp = angular.module('DemoApp',['dx']);
		
		DemoApp.controller('DemoController', function DemoController($scope) {
    $scope.gridOptions = {
        dataSource: {
            store: {
                type: "array",
                key: "ID",
                data: employees
            }
        },
		 editing: {
            mode: "row",
            allowUpdating: false,
            allowDeleting: false,
            allowAdding: false
        }, 
        columns: [
             
			  {
                dataField:  "client#",
                caption: "client#"
            },
			  {
                dataField: "package1",
                caption: "Basic"
            },
			  {
                dataField: "package2",
                caption: "Full Service"
            },
			{
                dataField: "package3",
                caption: "Bulk"
            },
           
            
            
            
       ],
	   onRowPrepared: function (e) {
		back(e);
		},
    };
    
    $scope.completedValue = function(rowData) {
        return rowData.Status == "Completed";
    };
    
});


var employees = [
    
   
   {
       
        "client#": "Praveen",
        "package1": "$149",
        "package2": "$299",
        "package3": "$499",
       
    }, {
       
        "client#": "Ranjith",
        "package1": "$149",
        "package2": "$299",
        "package3": "$99",
    }, {
       
        "client#": "Sai",
         "package1": "$149",
        "package2": "$299",
        "package3": "$99",
    }, {
        
       "client#": "Raviteja",
        "package1": "$149",
        "package2": "$299",
        "package3": "$99",
    }, {
		
       "client#": "Sampath",
         "package1": "$149",
        "package2": "$299",
        "package3": "$99",
    }
 ];