var DemoApp = angular.module('DemoApp',['dx']);


DemoApp.controller('DemoController', function DemoController($scope) {
 
    
    $scope.events = "";
     $scope.filterRow = {
        visible: true,
        applyFilter: "auto"
    };

 $scope.dataGridOptionsdentalfully = {
        dataSource: dentalfully,
        paging: {
            enabled: false
        },
		   bindingOptions: {
            filterRow: "filterRow",
            headerFilter: "headerFilter"
        },
        "export": {
            enabled: false,
            fileName: "dentalfully",
            allowExportSelectedData: false
        },
        editing: {
            mode: "",
            allowUpdating: true,
			 allowAdding: true,
        }, 
        columns: [
             
            {
                dataField: "sno",
                caption: "",
				 allowFiltering: false,
            },
           {
                dataField: "tiervision",
                caption: "Name Tier"
            },
            {
                dataField: "planrates",
                caption: "Base Plan Rates"
            },
              {
                dataField: "planenrollment",
                caption: "Base Plan Enrollment"
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
	
	
	 $scope.dataGridOptionsdentalselfinsured = {
        dataSource: dentalselfinsured,
        paging: {
            enabled: false
        },
		   bindingOptions: {
            filterRow: "filterRow",
            headerFilter: "headerFilter"
        },
        "export": {
            enabled: false,
            fileName: "dentalselfinsured",
            allowExportSelectedData: false
        },
        editing: {
            mode: "",
            allowUpdating: true,
			 allowAdding: true,
        }, 
        columns: [
             
            {
                dataField: "type",
                caption: "Entry Type",
				 allowFiltering: false,
            },
           {
                dataField: "itemname",
                caption: "Item Name"
            },
            {
                dataField: "claimsimpact",
                caption: "Claims Impact"
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
	
	
	
	$scope.dataGridOptions14 = {
        dataSource: renewaldental,
        paging: {
            enabled: false
        },
        "export": {
            enabled: false,
            fileName: "renewaldental",
            allowExportSelectedData: false
        },
        editing: {
            mode: "",
            allowUpdating: true,
			 allowAdding: false,
        }, 
        columns: [
             
           {
                dataField: "claimmonths",
                caption: "Claim Months %",
				 allowEditing: false,
            },
            {
                dataField: "creditibility",
                caption: "Credibility %"
            },
              {
                dataField: "medicaltrend",
                caption: "Vision Trend %"
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
	
	
	 $scope.dataGridOptions8 = {
        dataSource: reminderdental,
        paging: {
            enabled: false
        },
        "export": {
            enabled: false,
            fileName: "reminderdental",
            allowExportSelectedData: false
        },
        editing: {
            mode: "",
            allowUpdating: true,
			 allowAdding: false,
        }, 
        columns: [
             
           {
                dataField: "claimmonths",
                caption: "Claim Months %",
				 allowEditing: false,
            },
            {
                dataField: "creditibility",
                caption: "Credibility %"
            },
              {
                dataField: "medicaltrend",
                caption: "Vision Trend %"
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
	
	  $scope.dataGridOptions3 = {
        dataSource: enrollmentdata,
        paging: {
            enabled: false
        },
		   bindingOptions: {
            filterRow: "filterRow",
            headerFilter: "headerFilter"
        },
        "export": {
            enabled: false,
            fileName: "enrollmentdata",
            allowExportSelectedData: false
        },
        editing: {
            mode: "",
            allowUpdating: true,
			 allowAdding: true,
        }, 
        columns: [
             
            {
                dataField: "sno",
                caption: "",
				 allowFiltering: false,
            },
           {
                dataField: "tiervision",
                caption: "Name Tier"
            },
            {
                dataField: "planrates",
                caption: "Base Plan "
            },
              {
                dataField: "planenrollment",
                caption: "Base Enrollment"
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

var dentalselfinsured = [{
		    "ID": 1,
			"type": 'Claim Reimbursement',
		    "itemname": "Claim Reimbursemen",
		    "claimsimpact": "Vision Claims",
		   
		},
		{
		    "ID": 2,
			"type": 'Cost Item',
		    "itemname": "Adminstrative Fees",
		     "claimsimpact": " ",
		},
		];
	var enrollmentdata = [{
		    "ID": 1,
			"sno": 'tier 1',
		    "tiervision": "Single",
		    "planrates": "$25.00",
		    "planenrollment": "$2.00.",
		},
		{
		    "ID": 2,
			"sno": 'tier 2',
		    "tiervision": "Single",
		    "planrates": "$25.00",
		    "planenrollment": "$2.00.",
		},
		{
		    "ID": 3,
			"sno": 'tier 3',
		    "tiervision": "Single",
		    "planrates": "$25.00",
		    "planenrollment": "$2.00.",
		},
		];
	var reminderdental = [{
		    "ID": 1,
		     "claimmonths": "1-12",
		    "creditibility": "80%",
		    "medicaltrend": "9.4%",
		},
		{
		    "ID": 2,
		     "claimmonths": "12-24",
		    "creditibility": "20%",
		    "medicaltrend": "9.4%",
		}];
		
			var renewaldental = [{
		    "ID": 1,
		     "claimmonths": "1-12",
		    "creditibility": "80%",
		    "medicaltrend": "9.4%",
		},
		{
		    "ID": 2,
		     "claimmonths": "12-24",
		    "creditibility": "20%",
		    "medicaltrend": "9.4%",
		}];			
	
		
var dentalfully = [{
		    "ID": 1,
			"sno": 'tier 1',
		    "tiervision": "Single",
		    "planrates": "$25.00",
		    "planenrollment": "$2.00.",
		   
		},
		{
		    "ID": 2,
			"sno": 'tier 2',
		    "tiervision": "Employee  + Spouse",
		    "planrates": "$25.00",
		    "planenrollment": "$2.00.",
		},
		{
		    "ID": 3,
			"sno": 'tier 3',
		    "tiervision": "Employee  + child(ren)",
		    "planrates": "$25.00",
		    "planenrollment": "$2.00.",
		},
		];