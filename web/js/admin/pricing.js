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
            allowUpdating: true,
            allowDeleting: false,
            allowAdding: true
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
       
        "client#": "1",
        "package1": "$149",
        "package2": "$299",
        "package3": "$499",
       
    }, {
       
        "client#": "2",
        "package1": "$149",
        "package2": "$299",
        "package3": "$99",
    }, {
       
        "client#": "3",
         "package1": "$149",
        "package2": "$299",
        "package3": "$99",
    }, {
        
       "client#": "4",
        "package1": "$149",
        "package2": "$299",
        "package3": "$99",
    }, {
		
       "client#": "5",
         "package1": "$149",
        "package2": "$299",
        "package3": "$99",
    }
 ];