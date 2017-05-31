var DemoApp = angular.module('DemoApp',['dx']);


DemoApp.controller('DemoController', function DemoController($scope) {
 
    
    $scope.events = "";
     $scope.filterRow = {
        visible: true,
        applyFilter: "auto"
    };

 $scope.dataGridOptionsvisionfully = {
        dataSource: visionfully,
        paging: {
            enabled: false
        },
		   bindingOptions: {
            filterRow: "filterRow",
            headerFilter: "headerFilter"
        },
        "export": {
            enabled: false,
            fileName: "visionfully",
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
	
	 $scope.dataGridOptionsvisionselfinsured = {
        dataSource: visionselfinsured,
        paging: {
            enabled: false
        },
		   bindingOptions: {
            filterRow: "filterRow",
            headerFilter: "headerFilter"
        },
        "export": {
            enabled: false,
            fileName: "visionselfinsured",
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
	
	
		$scope.dataGridOptions16 = {
        dataSource: costitemsassumptions,
		showColumnLines: true,
        showRowLines: true,
		showBorders: true,
        rowAlternationEnabled: true,
        paging: {
            enabled: false
        },
        "export": {
            enabled: false,
            fileName: "renewalhsa",
            allowExportSelectedData: false
        },
        editing: {
            mode: "",
            allowUpdating: false,
			 allowAdding: true,
        }, 
        columns: [
             
           {
                dataField: "entrytype",
                caption: "Claim Months %",
				// allowEditing: false,
            },
            {
                dataField: "itemname",
                caption: "Item Name"
            },
            {
                dataField: "change",
                caption: "Change % Year Over Year",
				 dataType: "boolean"
            },
			
            {
                dataField: "flatamount",
                caption: "Flat Amount",
				 dataType: "boolean"
            },
              {
                dataField: "renewalamount",
                caption: "Renewal Amount"
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
	
	$scope.dataGridOptions14 = {
        dataSource: renewalvision,
        paging: {
            enabled: false
        },
        "export": {
            enabled: false,
            fileName: "renewalvision",
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
        dataSource: remindervision,
        paging: {
            enabled: false
        },
        "export": {
            enabled: false,
            fileName: "remindervision",
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

   	var costitemsassumptions = [{
		    "entrytype": 'Cost Item',
		     "itemname": "Adminsrative Fees",
		     "change":true,
		     "flatamount":true,
		    "renewalamount": "4%",
		},
		 ];
var visionselfinsured = [{
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
		
		
var visionfully = [{
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
		
		var remindervision = [{
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
		
			var renewalvision = [{
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