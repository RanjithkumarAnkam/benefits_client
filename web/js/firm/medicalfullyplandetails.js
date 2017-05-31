

var DemoApp = angular.module('DemoApp',['dx']);


DemoApp.controller('DemoController', function DemoController($scope) {
 
    
    $scope.events = "";
     $scope.filterRow = {
        visible: true,
        applyFilter: "auto"
    };
	
    $scope.dataGridOptions = {
        dataSource: monthlyfinancials,
        paging: {
            enabled: false
        },
		   bindingOptions: {
            filterRow: "filterRow",
            headerFilter: "headerFilter"
        },
        "export": {
            enabled: false,
            fileName: "Monthly Financials",
            allowExportSelectedData: false
        },
		showColumnLines: true,
        showRowLines: true,
		showBorders: true,
        rowAlternationEnabled: true,
        editing: {
            mode: "",
            allowUpdating: true,
			 allowAdding: true,
        }, 
        columns: [
             
           
           {
                dataField: "tier",
                caption: "Name Tier"
            },
            {
                dataField: "specific",
                caption: "Specific Premiums"
            },
              {
                dataField: "aggregate",
                caption: "Aggregate Premiums"
            },
            {
                dataField: "expected",
                caption: "Expected Claim Factors"
            },
             {
                dataField: "aggregated",
                caption: "Aggregated Claim Factors"
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
            allowUpdating: true,
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
	
     $scope.dataGridOptions2 = {
        dataSource: claimstotract,
        paging: {
            enabled: false
        },
		   bindingOptions: {
            filterRow: "filterRow",
            headerFilter: "headerFilter"
        },
        "export": {
            enabled: false,
            fileName: "Claims To Track",
            allowExportSelectedData: false
        },
		showColumnLines: true,
        showRowLines: true,
		showBorders: true,
        rowAlternationEnabled: true,
        editing: {
            mode: "",
            allowUpdating: true,
			 allowAdding: true,
        }, 
        columns: [
             
           
           {
                dataField: "type",
                caption: "Entry Type"
            },
            {
                dataField: "item",
                caption: "Item Name"
            },
              {
                dataField: "claim",
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
           
        },
		onRowPrepared: function (e) {
		back(e);
		},
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
		showColumnLines: true,
        showRowLines: true,
		showBorders: true,
        rowAlternationEnabled: true,
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
                dataField: "tier",
                caption: "Name Tier"
            },
            {
                dataField: "hmoplan",
                caption: "Hmo Plan"
            },
              {
                dataField: "hmoenrollment",
                caption: "HMO Enrollment"
            },
			 {
                dataField: "ppoplan",
                caption: "PPO Plan"
            },
			 {
                dataField: "ppoenrollment",
                caption: "PPO Enrollment"
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
	
	  $scope.dataGridOptions4 = {
        dataSource: remindermedical,
        paging: {
            enabled: false
        },
        "export": {
            enabled: false,
            fileName: "remindermedical",
            allowExportSelectedData: false
        },
		showColumnLines: true,
        showRowLines: true,
		showBorders: true,
        rowAlternationEnabled: true,
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
                dataField: "periodstart",
                caption: "Period Start Month"
            },
            {
                dataField: "periodend",
                caption: "Period End Month"
            },
            {
                dataField: "creditibility",
                caption: "Credibility %"
            },
              {
                dataField: "medicaltrend",
                caption: "Annualized Trend %"
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
	
	 $scope.dataGridOptions5 = {
        dataSource: reminderpharmacy,
        paging: {
            enabled: false
        },
        "export": {
            enabled: false,
            fileName: "reminderpharmacy",
            allowExportSelectedData: false
        },
		showColumnLines: true,
        showRowLines: true,
		showBorders: true,
        rowAlternationEnabled: true,
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
                dataField: "periodstart",
                caption: "Period Start Month"
            },
            {
                dataField: "periodend",
                caption: "Period End Month"
            },
            {
                dataField: "creditibility",
                caption: "Credibility %"
            },
              {
                dataField: "medicaltrend",
                caption: "Pharmacy Trend %"
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
	
	 $scope.dataGridOptions6 = {
        dataSource: reminderhra,
        paging: {
            enabled: false
        },
        "export": {
            enabled: false,
            fileName: "reminderhra",
            allowExportSelectedData: false
        },
		showColumnLines: true,
        showRowLines: true,
		showBorders: true,
        rowAlternationEnabled: true,
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
                dataField: "periodstart",
                caption: "Period Start Month"
            },
            {
                dataField: "periodend",
                caption: "Period End Month"
            },
            {
                dataField: "creditibility",
                caption: "Credibility %"
            },
              {
                dataField: "medicaltrend",
                caption: "HRA Trend %"
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
	 $scope.dataGridOptions7 = {
        dataSource: reminderdental,
        paging: {
            enabled: false
        },
        "export": {
            enabled: false,
            fileName: "reminderdental",
            allowExportSelectedData: false
        },
		showColumnLines: true,
        showRowLines: true,
		showBorders: true,
        rowAlternationEnabled: true,
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
                dataField: "periodstart",
                caption: "Period Start Month"
            },
            {
                dataField: "periodend",
                caption: "Period End Month"
            },
            {
                dataField: "creditibility",
                caption: "Credibility %"
            },
              {
                dataField: "medicaltrend",
                caption: "Dental Trend %"
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
		showColumnLines: true,
        showRowLines: true,
		showBorders: true,
        rowAlternationEnabled: true,
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
                dataField: "periodstart",
                caption: "Period Start Month"
            },
            {
                dataField: "periodend",
                caption: "Period End Month"
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
           
        },
		onRowPrepared: function (e) {
		back(e);
		},
    };
	
	$scope.dataGridOptions9 = {
        dataSource: reminderhsa,
        paging: {
            enabled: false
        },
        "export": {
            enabled: false,
            fileName: "reminderhsa",
            allowExportSelectedData: false
        },
		showColumnLines: true,
        showRowLines: true,
		showBorders: true,
        rowAlternationEnabled: true,
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
                dataField: "periodstart",
                caption: "Period Start Month"
            },
            {
                dataField: "periodend",
                caption: "Period End Month"
            },
            {
                dataField: "creditibility",
                caption: "Credibility %"
            },
              {
                dataField: "medicaltrend",
                caption: "HSA Trend %"
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
	
	$scope.dataGridOptions10 = {
        dataSource: renewalmedical,
        paging: {
            enabled: false
        },
        "export": {
            enabled: false,
            fileName: "renewalmedical",
            allowExportSelectedData: false
        },
		showColumnLines: true,
        showRowLines: true,
		showBorders: true,
        rowAlternationEnabled: true,
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
                dataField: "periodstart",
                caption: "Period Start Month"
            },
            {
                dataField: "periodend",
                caption: "Period End Month"
            },
            {
                dataField: "creditibility",
                caption: "Credibility %"
            },
              {
                dataField: "medicaltrend",
                caption: "Medical Trend %"
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
	
	$scope.dataGridOptions11 = {
        dataSource: renewalpharmacy,
        paging: {
            enabled: false
        },
        "export": {
            enabled: false,
            fileName: "renewalpharmacy",
            allowExportSelectedData: false
        },
		showColumnLines: true,
        showRowLines: true,
		showBorders: true,
        rowAlternationEnabled: true,
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
                dataField: "periodstart",
                caption: "Period Start Month"
            },
            {
                dataField: "periodend",
                caption: "Period End Month"
            },
            {
                dataField: "creditibility",
                caption: "Credibility %"
            },
              {
                dataField: "medicaltrend",
                caption: "Pharmacy Trend %"
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
	
	$scope.dataGridOptions12 = {
        dataSource: renewalhra,
        paging: {
            enabled: false
        },
        "export": {
            enabled: false,
            fileName: "renewalhra",
            allowExportSelectedData: false
        },
		showColumnLines: true,
        showRowLines: true,
		showBorders: true,
        rowAlternationEnabled: true,
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
                dataField: "periodstart",
                caption: "Period Start Month"
            },
            {
                dataField: "periodend",
                caption: "Period End Month"
            },
            {
                dataField: "creditibility",
                caption: "Credibility %"
            },
              {
                dataField: "medicaltrend",
                caption: "HRA Trend %"
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
	
	$scope.dataGridOptions13 = {
        dataSource: renewaldental,
        paging: {
            enabled: false
        },
        "export": {
            enabled: false,
            fileName: "renewaldental",
            allowExportSelectedData: false
        },
		showColumnLines: true,
        showRowLines: true,
		showBorders: true,
        rowAlternationEnabled: true,
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
                dataField: "periodstart",
                caption: "Period Start Month"
            },
            {
                dataField: "periodend",
                caption: "Period End Month"
            },
            {
                dataField: "creditibility",
                caption: "Credibility %"
            },
              {
                dataField: "medicaltrend",
                caption: "Dental Trend %"
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
		showColumnLines: true,
        showRowLines: true,
		showBorders: true,
        rowAlternationEnabled: true,
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
                dataField: "periodstart",
                caption: "Period Start Month"
            },
            {
                dataField: "periodend",
                caption: "Period End Month"
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
           
        },
		onRowPrepared: function (e) {
		back(e);
		},
    };
	
	$scope.dataGridOptions15 = {
        dataSource: renewalhsa,
        paging: {
            enabled: false
        },
        "export": {
            enabled: false,
            fileName: "renewalhsa",
            allowExportSelectedData: false
        },
		showColumnLines: true,
        showRowLines: true,
		showBorders: true,
        rowAlternationEnabled: true,
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
                dataField: "periodstart",
                caption: "Period Start Month"
            },
            {
                dataField: "periodend",
                caption: "Period End Month"
            },
            {
                dataField: "creditibility",
                caption: "Credibility %"
            },
              {
                dataField: "medicaltrend",
                caption: "HSA Trend %"
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
	
	
    $scope.dataGridOptionsnetworkperfomance = {
	        dataSource: networkperfomance,
			 bindingOptions: {
            showColumnHeaders: false
			},
	        paging: {
	            enabled: false
	        },
	        "export": {
	            enabled: true,
	            fileName: "networkperfomance",
	            allowExportSelectedData: true
	        },
			showColumnLines: true,
        showRowLines: true,
		showBorders: true,
        rowAlternationEnabled: true,
	        editing: {
	            mode: "row",
	            allowUpdating: true,
	            allowDeleting: false,
	            allowAdding: false
	        }, 
	        columns: [
	            
				  {
	                dataField:  "head1",
	                caption: "",
					allowEditing: false,
	            },
				  {
	                dataField: "head2",
	                caption: "",
					/*onEditingStart: function(e) {
        
					if(e.data.ID==4 || e.data.ID==5)
					{
					e.cancel=true;
					}
				},*/
	            },
				
			 ],
	        onEditingStart: function(e) {
	           	if(e.data.ID==4 || e.data.ID==5)
					{
					e.cancel=true;
					}
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
		
	    $scope.dataGridOptionslargeclaims = {
	        dataSource: largeclaims,
	        paging: {
	            enabled: false
	        },
	        "export": {
	            enabled: true,
	            fileName: "Companies",
	            allowExportSelectedData: true
	        },
			showColumnLines: true,
        showRowLines: true,
		showBorders: true,
        rowAlternationEnabled: true,
	        editing: {
	            mode: "row",
	            allowUpdating: false,
	            allowDeleting: false,
	            allowAdding: false
	        }, 
	        columns: [
	            
				  {
	                dataField:  "claimantid",
	                caption: "Claimant ID"
	            },
				  {
	                dataField: "enrollmentstatus",
	                caption: "Enrollment Status"
	            },
				{
	                dataField: "membertype",
	                caption: "Member Type"
	            },
				{
	                dataField: "age",
	                caption: "Age"
	            },
				{
	                dataField: "gender",
	                caption: "Gender"
	            },
				{
	                dataField: "planclaims",
	                caption: "Plan Claims"
	            },
				{
	                dataField: "condition",
	                caption: "Condition"
	            },
				{
	                dataField: "progonosis",
	                caption: "Prognosis"
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
	   
	   
	   
$scope.dataGridOptionsclient = {
    dataSource: {
        store: {
            type: "array",
            key: "ID",
            data: orders
        }
    },
    
			showColumnLines: true,
        showRowLines: true,
		showBorders: true,
        rowAlternationEnabled: true,
	editing: {
	            mode: "batch",
	            allowUpdating: true,
	            allowDeleting: false,
	            allowAdding: false
	        },
    columns: [{
            dataField: "name",
            width: 180,
            caption: "",
			allowEditing :false
			
        },{
            dataField: "jan",
            alignment: "right",
            format: "currency",
            caption: "Jan ",
        }, {
            dataField: "feb",
            alignment: "right",
            format: "currency",
            caption: "Feb ",
        }, 
        {
            dataField: "mar",
            alignment: "right",
            format: "currency",
            caption: "Mar ",
        }, 
		{
            dataField: "apr",
            alignment: "right",
            format: "currency",
            caption: "Apr ",
        }, 
		{
            dataField: "may",
            alignment: "right",
            format: "currency",
            caption: "May ",
        }, 
		{
            dataField: "jun",
            alignment: "right",
            format: "currency",
            caption: "Jun ",
        }, 
		{
            dataField: "jul",
            alignment: "right",
            format: "currency",
            caption: "Jul ",
        }, 
		{
            dataField: "aug",
            alignment: "right",
            format: "currency",
            caption: "Aug ",
        }, 
		{
            dataField: "sep",
            alignment: "right",
            format: "currency",
            caption: "Sep",
        }, 
		{
            dataField: "oct",
            alignment: "right",
            format: "currency",
            caption: "Oct",
        }, 
		{
            dataField: "nov",
            alignment: "right",
            format: "currency",
            caption: "Nov",
        }, 
		{
            dataField: "dec",
            alignment: "right",
            format: "currency",
            caption: "Dec",
        }, 
		
    ],
	onCellPrepared: function (e) {
                if (e.rowType != 'data' )
                    return;

				

				
				
                var currentTotal = 0;

                if (e.column.dataField == "jan") {
                    
					if(e.value != 'final' && e.value !="first"){
					if(e.data.ID==6){
					janValTotal -= e.value;
					}else{
					janValTotal += e.value;
					}
					}
					
					

                    if (e.value == 'first'){
					currentTotal = janValTotal;
					}else if(e.value == 'final'){
					currentTotal = janValTotal;
					}
                        
                }

                if (e.column.dataField == "feb"  ) {
                    

                    if(e.value != 'final' && e.value !="first")
					{
					if(e.data.ID==6){
					febValTotal -= e.value;
					}else{
					febValTotal += e.value;
					}
					}
                       
						
					if (e.value == 'first'){
					currentTotal = febValTotal;
					}else if(e.value == 'final'){
					currentTotal = febValTotal;
					}
                }
				
				if (e.column.dataField == "mar" ) {
                   

                    if(e.value != 'final' && e.value !="first")
					{
					if(e.data.ID==6){
					marValTotal -= e.value;
					}else{
					marValTotal += e.value;
					}
					}
                         
						
					if (e.value == 'first'){
					currentTotal = marValTotal;
					}else if(e.value == 'final'){
					currentTotal = marValTotal;
					}
                }
				
				if (e.column.dataField == "apr" ) {
                    

                    if(e.value != 'final' && e.value !="first")
					{
					if(e.data.ID==6){
					aprValTotal -= e.value;
					}else{
					aprValTotal += e.value;
					}
					}
                        
						
					if (e.value == 'first'){
					currentTotal = aprValTotal;
					}else if(e.value == 'final'){
					currentTotal = aprValTotal;
					}
                }
				
				 if (e.column.dataField == "may"  ) {
                    

                    if(e.value != 'final' && e.value !="first")
					{
					if(e.data.ID==6){
					mayValTotal -= e.value;
					}else{
					mayValTotal += e.value;
					}
					}
                        
						
					if (e.value == 'first'){
					currentTotal = mayValTotal;
					}else if(e.value == 'final'){
					currentTotal = mayValTotal;
					}
                }
				
				if (e.column.dataField == "jun" ) {
                    

                    if(e.value != 'final' && e.value !="first")
					{
					if(e.data.ID==6){
					junValTotal -= e.value;
					}else{
					junValTotal += e.value;
					}
					}
                        
						
					if (e.value == 'first'){
					currentTotal = junValTotal;
					}else if(e.value == 'final'){
					currentTotal = junValTotal;
					}
                }
				
				if (e.column.dataField == "jul" ) {
                    

                    if(e.value != 'final' && e.value !="first")
					{
					if(e.data.ID==6){
					julValTotal -= e.value;
					}else{
					julValTotal += e.value;
					}
					}
                        
						
					if (e.value == 'first'){
					currentTotal = julValTotal;
					}else if(e.value == 'final'){
					currentTotal = julValTotal;
					}
                }
				
				if (e.column.dataField == "aug" ) {
                    

                    if(e.value != 'final' && e.value !="first")
					{
					if(e.data.ID==6){
					augValTotal -= e.value;
					}else{
					augValTotal += e.value;
					}
					}
						
					if (e.value == 'first'){
					currentTotal = augValTotal;
					}else if(e.value == 'final'){
					currentTotal = augValTotal;
					}
                }
				
				if (e.column.dataField == "sep" ) {
                    

                    if(e.value != 'final' && e.value !="first")
					{
					if(e.data.ID==6){
					sepValTotal -= e.value;
					}else{
					sepValTotal += e.value;
					}
					}
                    
						
					if (e.value == 'first'){
					currentTotal = sepValTotal;
					}else if(e.value == 'final'){
					currentTotal = sepValTotal;
					}
                } 
				
				if (e.column.dataField == "oct" ) {
                    

                    if(e.value != 'final' && e.value !="first")
					{
					if(e.data.ID==6){
					octValTotal -= e.value;
					}else{
					octValTotal += e.value;
					}
					}
						
					if (e.value == 'first'){
					currentTotal = octValTotal;
					}else if(e.value == 'final'){
					currentTotal = octValTotal;
					}
                }
				
				if (e.column.dataField == "nov" ) {
                    
                    if(e.value != 'final' && e.value !="first")
					{
					if(e.data.ID==6){
					novValTotal -= e.value;
					}else{
					novValTotal += e.value;
					}
					}
                       
						
					if (e.value == 'first'){
					currentTotal = novValTotal;
					}else if(e.value == 'final'){
					currentTotal = novValTotal;
					}
                }
				
				if (e.column.dataField == "dec" ) {
                    
                   if(e.value != 'final' && e.value !="first")
					{
					if(e.data.ID==6){
					decValTotal -= e.value;
					}else{
					decValTotal += e.value;
					}
					}
                        
						
					if (e.value == 'first'){
					currentTotal = decValTotal;
					}else if(e.value == 'final'){
					currentTotal = decValTotal;
					}
                }

                if (currentTotal != 0) {
                    e.cellElement.addClass("gray");
                    e.cellElement.html('$'+currentTotal);
                }
				
				
            },
			 onEditingStart: function(e) {
        
        if(e.data.ID==1 || e.data.ID==2)
        {
        e.cancel=true;
        }
    },
	
	onRowPrepared: function (e) {
		back(e);
		},
    
};

		
		
	   
	    $scope.dataGridOptionspharmacydrugs = {
	        dataSource: pharmacydrugs,
	        paging: {
	            enabled: false
	        },
	        "export": {
	            enabled: true,
	            fileName: "pharmacydrugs",
	            allowExportSelectedData: true
	        },
			showColumnLines: true,
        showRowLines: true,
		showBorders: true,
        rowAlternationEnabled: true,
	        editing: {
	            mode: "row",
	            allowUpdating: true,
	            allowDeleting: false,
	            allowAdding: true
	        }, 
	        columns: [
	            
				  {
	                dataField:  "top10",
	            },
				  {
	                dataField: "drugname",
	            },
				{
	                dataField: "condition",
	            },
				{
	                dataField: "planspend",
	            },
				{
	                dataField: "uniquenumbers",
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


	    $scope.dataGridOptionspharmacyperfomance = {
	        dataSource: pharmacyperformance,
	        paging: {
	            enabled: false
	        },
	        "export": {
	            enabled: true,
	            fileName: "pharmacyperformance",
	            allowExportSelectedData: true
	        },
			showColumnLines: true,
        showRowLines: true,
		showBorders: true,
        rowAlternationEnabled: true,
	        editing: {
	            mode: "row",
	            allowUpdating: true,
	            allowDeleting: false,
	            allowAdding: false
	        }, 
	        columns: [
	            
				   {
	                dataField:  "head1",
	                caption: "Description of item",
					allowEditing: false,
	            },
				  {
	                dataField: "head2",
	                caption: "Percentage or amount",
					/*onEditingStart: function(e) {
        
					if(e.data.ID==4 || e.data.ID==5)
					{
					e.cancel=true;
					}
				},*/
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
	           
	        },onRowPrepared: function (e) {
		back(e);
		},
			
	    };	
	    
	    $scope.dataGridOptionscontribution1 = {
	            dataSource: contribution1,
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
			showColumnLines: true,
        showRowLines: true,
		showBorders: true,
        rowAlternationEnabled: true,
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
	                    dataField: "tier",
	                    caption: "Name Tier"
	                },
	                {
	                    dataField: "monthlyrates",
	                    caption: "Monthly Rates"
	                },
	                  {
	                    dataField: "monthlyenrollment",
	                    caption: "Monthly Enrollment"
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
	    
	    $scope.dataGridOptionscontribution2 = {
	            dataSource: contribution1,
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
			showColumnLines: true,
        showRowLines: true,
		showBorders: true,
        rowAlternationEnabled: true,
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
	  	                    dataField: "tier",
	  	                    caption: "Name Tier"
	  	                },
	  	                {
	  	                    dataField: "monthlyrates",
	  	                    caption: "Monthly Rates"
	  	                },
	  	                  {
	  	                    dataField: "monthlyenrollment",
	  	                    caption: "Monthly Enrollment"
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
	    
	    $scope.dataGridOptionscontribution3 = {
	            dataSource: contribution1,
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
			showColumnLines: true,
        showRowLines: true,
		showBorders: true,
        rowAlternationEnabled: true,
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
	  	                    dataField: "tier",
	  	                    caption: "Name Tier"
	  	                },
	  	                {
	  	                    dataField: "monthlyrates",
	  	                    caption: "Monthly Rates"
	  	                },
	  	                  {
	  	                    dataField: "monthlyenrollment",
	  	                    caption: "Monthly Enrollment"
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
	    
	    $scope.dataGridOptionscontribution4 = {
	            dataSource: contribution1,
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
			showColumnLines: true,
        showRowLines: true,
		showBorders: true,
        rowAlternationEnabled: true,
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
	  	                    dataField: "tier",
	  	                    caption: "Name Tier"
	  	                },
	  	                {
	  	                    dataField: "monthlyrates",
	  	                    caption: "Monthly Rates"
	  	                },
	  	                  {
	  	                    dataField: "monthlyenrollment",
	  	                    caption: "Monthly Enrollment"
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
			
		 $scope.dataGridOptionscontribution5 = {
	            dataSource: contribution1,
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
			showColumnLines: true,
        showRowLines: true,
		showBorders: true,
        rowAlternationEnabled: true,
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
	                    dataField: "tier",
	                    caption: "Name Tier"
	                },
	                {
	                    dataField: "monthlyrates",
	                    caption: "Monthly Rates"
	                },
	                  {
	                    dataField: "monthlyenrollment",
	                    caption: "Monthly Enrollment"
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
		 $scope.dataGridOptionscontribution6 = {
	            dataSource: contribution1,
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
			showColumnLines: true,
        showRowLines: true,
		showBorders: true,
        rowAlternationEnabled: true,
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
	                    dataField: "tier",
	                    caption: "Name Tier"
	                },
	                {
	                    dataField: "monthlyrates",
	                    caption: "Monthly Rates"
	                },
	                  {
	                    dataField: "monthlyenrollment",
	                    caption: "Monthly Enrollment"
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
	
  	var monthlyfinancials = [{
		    "ID": 1,
		    "tier": "Single",
		    "specific": "$25.00",
		    "aggregate": "$2.00.",
		    "expected": "$200.00",
			 "aggregated": "$275.00",
		},
		{
		    "ID": 2,
		    "tier": "Employee  + Spouse",
		   "specific": "$25.00",
		    "aggregate": "$2.00.",
		    "expected": "$200.00",
			 "aggregated": "$275.00",
		},
		{
		    "ID": 3,
		    "tier": "Employee  + child(ren)",
		   "specific": "$25.00",
		    "aggregate": "$2.00.",
		    "expected": "$200.00",
			 "aggregated": "$275.00",
		},
		];
	
var claimstotract = [{
		    "ID": 1,
		     "type": "Claim Reimbursement",
		    "item": "Stop Loss Reimbursement",
		    "claim": "Medical claims",
		},
		{
		    "ID": 2,
		     "type": "Claim Reimbursement",
		    "item": "Drug Rebates",
		    "claim": "Rx claims",
		},
		{
		    "ID": 3,
		     "type": "Cost Item",
		    "item": "Administrative Fees",
		    "claim": "",
		},
		];
		
		var enrollmentdata = [{
		    "ID": 1,
			"sno":'tier 1',
		     "tier": "Single",
		    "hmoplan": "$300.00",
		    "hmoenrollment": "54",
			 "ppoplan": "$350.00",
			  "ppoenrollment": "68",
		},
		{
		    "ID": 2,
			"sno":'tier 2',
		     "tier": "Employee  + Spouse",
		    "hmoplan": "$300.00",
		    "hmoenrollment": "54",
			 "ppoplan": "$350.00",
			  "ppoenrollment": "68",
		},
		{
		    "ID": 3,
			"sno":'tier 3',
		     "tier": "Employee + Child(ren)",
		    "hmoplan": "$300.00",
		    "hmoenrollment": "54",
			 "ppoplan": "$350.00",
			  "ppoenrollment": "68",
		},
		];
		
		var contribution1 = [{
		    "ID": 1,
			"sno":'tier 1',
		     "tier": "Single",
		    "monthlyrates": "$325.00",
		    "monthlyenrollment": "68",
		},
		{
		    "ID": 2,
			"sno":'tier 2',
			  "tier": "Employee + Spouse",
			    "monthlyrates": "$715.00",
			    "monthlyenrollment": "154",
		},
		{
		    "ID": 3,
			"sno":'tier 3',
			  "tier": "Employee + Child(ren)",
			    "monthlyrates": "$950.00",
			    "monthlyenrollment": "99",
		},
		{
		    "ID": 4,
			"sno":'tier 4',
			  "tier": "Family",
			    "monthlyrates": "$1125.00",
			    "monthlyenrollment": "205",
		},
		];
		
		
		var medical = [{
		    "ID": 1,
		     "claimmonths": "Period #1",
		     "periodstart":"1",
		     "periodend":"12",
		    "creditibility": "80%",
		    "medicaltrend": "9.4%",
		},
		{
		    "ID": 2,
		    "claimmonths": "Period #1",
		     "periodstart":"13",
		     "periodend":"24",
		    "creditibility": "20%",
		    "medicaltrend": "9.4%",
		}];
		
		var remindermedical = [{
		    "ID": 1,
		     "claimmonths": "Period #1",
		     "periodstart":"1",
		     "periodend":"12",
		    "creditibility": "80%",
		    "medicaltrend": "9.4%",
		},
		{
		    "ID": 2,
		    "claimmonths": "Period #1",
		     "periodstart":"13",
		     "periodend":"24",
		    "creditibility": "20%",
		    "medicaltrend": "9.4%",
		}];
		var reminderpharmacy = [{
		    "ID": 1,
		     "claimmonths": "Period #1",
		     "periodstart":"1",
		     "periodend":"12",
		    "creditibility": "80%",
		    "medicaltrend": "9.4%",
		},
		{
		    "ID": 2,
		    "claimmonths": "Period #1",
		     "periodstart":"13",
		     "periodend":"24",
		    "creditibility": "20%",
		    "medicaltrend": "9.4%",
		}];
		var reminderhsa = [{
		    "ID": 1,
		     "claimmonths": "Period #1",
		     "periodstart":"1",
		     "periodend":"12",
		    "creditibility": "80%",
		    "medicaltrend": "9.4%",
		},
		{
		    "ID": 2,
		    "claimmonths": "Period #1",
		     "periodstart":"13",
		     "periodend":"24",
		    "creditibility": "20%",
		    "medicaltrend": "9.4%",
		}];
		var reminderdental = [{
		    "ID": 1,
		     "claimmonths": "Period #1",
		     "periodstart":"1",
		     "periodend":"12",
		    "creditibility": "80%",
		    "medicaltrend": "9.4%",
		},
		{
		    "ID": 2,
		    "claimmonths": "Period #1",
		     "periodstart":"13",
		     "periodend":"24",
		    "creditibility": "20%",
		    "medicaltrend": "9.4%",
		}];
		var remindervision = [{
		    "ID": 1,
		     "claimmonths": "Period #1",
		     "periodstart":"1",
		     "periodend":"12",
		    "creditibility": "80%",
		    "medicaltrend": "9.4%",
		},
		{
		    "ID": 2,
		    "claimmonths": "Period #1",
		     "periodstart":"13",
		     "periodend":"24",
		    "creditibility": "20%",
		    "medicaltrend": "9.4%",
		}];
		var reminderhra = [{
		    "ID": 1,
		     "claimmonths": "Period #1",
		     "periodstart":"1",
		     "periodend":"12",
		    "creditibility": "80%",
		    "medicaltrend": "9.4%",
		},
		{
		    "ID": 2,
		    "claimmonths": "Period #1",
		     "periodstart":"13",
		     "periodend":"24",
		    "creditibility": "20%",
		    "medicaltrend": "9.4%",
		}];
		var renewalmedical = [{
		    "ID": 1,
		     "claimmonths": "Period #1",
		     "periodstart":"1",
		     "periodend":"12",
		    "creditibility": "80%",
		    "medicaltrend": "9.4%",
		},
		{
		    "ID": 2,
		    "claimmonths": "Period #1",
		     "periodstart":"13",
		     "periodend":"24",
		    "creditibility": "20%",
		    "medicaltrend": "9.4%",
		}];
		var renewalpharmacy = [{
		    "ID": 1,
		     "claimmonths": "Period #1",
		     "periodstart":"1",
		     "periodend":"12",
		    "creditibility": "80%",
		    "medicaltrend": "9.4%",
		},
		{
		    "ID": 2,
		    "claimmonths": "Period #1",
		     "periodstart":"13",
		     "periodend":"24",
		    "creditibility": "20%",
		    "medicaltrend": "9.4%",
		}];
		var renewalhsa = [{
		    "ID": 1,
		     "claimmonths": "Period #1",
		     "periodstart":"1",
		     "periodend":"12",
		    "creditibility": "80%",
		    "medicaltrend": "9.4%",
		},
		{
		    "ID": 2,
		    "claimmonths": "Period #1",
		     "periodstart":"13",
		     "periodend":"24",
		    "creditibility": "20%",
		    "medicaltrend": "9.4%",
		}];
		var renewalhra = [{
		    "ID": 1,
		     "claimmonths": "Period #1",
		     "periodstart":"1",
		     "periodend":"12",
		    "creditibility": "80%",
		    "medicaltrend": "9.4%",
		},
		{
		    "ID": 2,
		    "claimmonths": "Period #1",
		     "periodstart":"13",
		     "periodend":"24",
		    "creditibility": "20%",
		    "medicaltrend": "9.4%",
		}];
		var renewalvision = [{
		    "ID": 1,
		     "claimmonths": "Period #1",
		     "periodstart":"1",
		     "periodend":"12",
		    "creditibility": "80%",
		    "medicaltrend": "9.4%",
		},
		{
		    "ID": 2,
		    "claimmonths": "Period #1",
		     "periodstart":"13",
		     "periodend":"24",
		    "creditibility": "20%",
		    "medicaltrend": "9.4%",
		}];
		var renewaldental = [{
		    "ID": 1,
		     "claimmonths": "Period #1",
		     "periodstart":"1",
		     "periodend":"12",
		    "creditibility": "80%",
		    "medicaltrend": "9.4%",
		},
		{
		    "ID": 2,
		    "claimmonths": "Period #1",
		     "periodstart":"13",
		     "periodend":"24",
		    "creditibility": "20%",
		    "medicaltrend": "9.4%",
		}];
		

		   	var costitemsassumptions = [{
		    "entrytype": 'Cost Item',
		     "itemname": "HRA Fees",
		     "change":true,
		     "flatamount":true,
		    "renewalamount": "4%",
		},
		 ];
		
		
		var networkperfomance = [{
			        "ID":"1",
				    "head1": "Network Utilization %",
				    "head2": "95%",
					},
					{
						"ID":"2",
				    "head1": "Total Sumitted Charges",
				    "head2": "$4000000",
					},
					{
						"ID":"3",
				    "head1": "Total Allowed Charges",
				    "head2": "$2500000",
					},
					{
						"ID":"4",
				    "head1": "Total Savings",
				    "head2": "1500000",
					},
					{
						"ID":"5",
				    "head1": "Discount %",
				    "head2": "37.5%",
					},
				];

				var janValTotal = 0;
		            var febValTotal = 0;
					var marValTotal = 0;
		            var aprValTotal = 0;
					var mayValTotal = 0;
		            var junValTotal = 0;
					var julValTotal = 0;
		            var augValTotal = 0;
					var sepValTotal = 0;
		            var octValTotal = 0;
					var novValTotal = 0;
		            var decValTotal = 0;
					

		var orders = [{
			"ID":1,
								"name":"Employee Enrollment",
								"jan": 200,
								"feb": 50,
		    "mar": 250,
		    "apr": 250,
			 "may": 250,
			  "jun": 250,
			   "jul": 250,
			    "aug": 250,
				 "sep": 250,
				  "oct": 250,
				   "nov": 250,
				   "dec": 250,
		  
		},
		{
			"ID":2,
			"name":"Member Enrollment",
		    "jan": 600,
		    "feb": 600,
		    "mar": 600,
		    "apr": 600,
			 "may": 600,
			  "jun": 600,
			   "jul": 600,
			    "aug": 600,
				 "sep": 600,
				  "oct": 600,
				   "nov": 600,
				   "dec": 600,
		  
		},
		{
			"ID":3,
			"name":"Medical Claims",
		    "jan": 100,
		    "feb": 600,
		    "mar": 600,
		    "apr": 600,
			 "may": 500,
			  "jun": 600,
			   "jul": 300,
			    "aug": 600,
				 "sep": 600,
				  "oct": 600,
				   "nov": 600,
				   "dec": 600,
		  
		},
			{
			"ID":4,
			"name":"Pharmacy Claims",
		    "jan": 100,
		    "feb": 600,
		    "mar": 600,
		    "apr": 600,
			 "may": 500,
			  "jun": 600,
			   "jul": 300,
			    "aug": 600,
				 "sep": 600,
				  "oct": 600,
				   "nov": 600,
				   "dec": 600,
		  
		},
			{
			"ID":5,
			"name":"Stop Loss Reimbursements",
		    "jan": 100,
		    "feb": 600,
		    "mar": 600,
		    "apr": 600,
			 "may": 500,
			  "jun": 600,
			   "jul": 300,
			    "aug": 600,
				 "sep": 600,
				  "oct": 600,
				   "nov": 600,
				   "dec": 600,
		  
		},
			{
			"ID":6,
			"name":"Pooling Charges",
		    "jan": 100,
		    "feb": 600,
		    "mar": 600,
		    "apr": 600,
			 "may": 500,
			  "jun": 600,
			   "jul": 300,
			    "aug": 600,
				 "sep": 600,
				  "oct": 600,
				   "nov": 600,
				   "dec": 600,
		  
		},
		{
			"ID":7,
			"name":"Gross Total",
		    "jan": "first",
		    "feb": "first",
		    "mar": "first",
		    "apr": "first",
			 "may": "first",
			  "jun": "first",
			   "jul": "first",
			    "aug": "first",
				 "sep": "first",
				  "oct": "first",
				   "nov": "first",
				   "dec": "first",
		  
		},
		{
			"ID":8,
								"name":"Employee Contributions",
								"jan": 200,
								"feb": 50,
		    "mar": 250,
		    "apr": 250,
			 "may": 250,
			  "jun": 250,
			   "jul": 250,
			    "aug": 250,
				 "sep": 250,
				  "oct": 250,
				   "nov": 250,
				   "dec": 250,
		  
		},
		{
			"ID":9,
			"name":"COBRA Premiums",
		    "jan": 600,
		    "feb": 600,
		    "mar": 600,
		    "apr": 600,
			 "may": 600,
			  "jun": 600,
			   "jul": 600,
			    "aug": 600,
				 "sep": 600,
				  "oct": 600,
				   "nov": 600,
				   "dec": 600,
		  
		},
{
			"ID":9,
			"name":"Member Copays, Coinsurance & Deductibles",
		    "jan": 600,
		    "feb": 600,
		    "mar": 600,
		    "apr": 600,
			 "may": 600,
			  "jun": 600,
			   "jul": 600,
			    "aug": 600,
				 "sep": 600,
				  "oct": 600,
				   "nov": 600,
				   "dec": 600,
		  
		},
		{
			"ID":10,
			"name":"Net Total",
		    "jan": "final",
		    "feb": "final",
		    "mar": "final",
		    "apr": "final",
			 "may": "final",
			  "jun": "final",
			   "jul": "final",
			    "aug": "final",
				 "sep": "final",
				  "oct": "final",
				   "nov": "final",
				   "dec": "final",
		  
		}
		];

		var largeclaims = [{
				    "claimantid": "7891",
				    "enrollmentstatus": "Active",
					"membertype": "Employee",
					"age": "47",
					"gender": "Male",
					"planclaims": "$175,668",
					"condition": "Cancer",
					"progonosis": "$100,000 next year",
				  
				},
				{
				    "claimantid": "7891",
				    "enrollmentstatus": "Active",
					"membertype": "Employee",
					"age": "47",
					"gender": "Male",
					"planclaims": "$175,668",
					"condition": "Cancer",
					"progonosis": "$100,000 next year",
				  
				},
				{
				    "claimantid": "7891",
				    "enrollmentstatus": "Active",
					"membertype": "Employee",
					"age": "47",
					"gender": "Male",
					"planclaims": "$175,668",
					"condition": "Cancer",
					"progonosis": "$100,000 next year",
				  
				},
				{
				    "claimantid": "7891",
				    "enrollmentstatus": "Active",
					"membertype": "Employee",
					"age": "47",
					"gender": "Male",
					"planclaims": "$175,668",
					"condition": "Cancer",
					"progonosis": "$100,000 next year",
				  
				},
				{
				    "claimantid": "7891",
				    "enrollmentstatus": "Active",
					"membertype": "Employee",
					"age": "47",
					"gender": "Male",
					"planclaims": "$175,668",
					"condition": "Cancer",
					"progonosis": "$100,000 next year",
				  
				},
				{
				    "claimantid": "7891",
				    "enrollmentstatus": "Active",
					"membertype": "Employee",
					"age": "47",
					"gender": "Male",
					"planclaims": "$175,668",
					"condition": "Cancer",
					"progonosis": "$100,000 next year",
				  
				},
				{
				    "claimantid": "7891",
				    "enrollmentstatus": "Active",
					"membertype": "Employee",
					"age": "47",
					"gender": "Male",
					"planclaims": "$175,668",
					"condition": "Cancer",
					"progonosis": "$100,000 next year",
				  
				},
				{
				    "claimantid": "7891",
				    "enrollmentstatus": "Active",
					"membertype": "Employee",
					"age": "47",
					"gender": "Male",
					"planclaims": "$175,668",
					"condition": "Cancer",
					"progonosis": "$100,000 next year",
				  
				},


		];


		var pharmacyperformance = [{
			        "ID":"1",
				    "head1": "Total Prescriptions",
				    "head2": "1200",
					},
				{
			        "ID":"2",
				    "head1": " Generic Filled",
				    "head2": "890",
					},
					{
			        "ID":"3",
				    "head1": "Mail Order",
				    "head2": "54",
					},
					{
			        "ID":"4",
				    "head1": "Formulary Brand Compliance Rate",
				    "head2": "75%",
					},
					{
			        "ID":"4",
				    "head1": "Average Brand Discount",
				    "head2": "14%",
					},
					{
			        "ID":"4",
				    "head1": "Average Generic Discount",
				    "head2": "27%",
					},
				

		];


		var pharmacydrugs = [{
				    "top10": "1",
				    "drugname": "capecitabine",
					"condition": "Cancer",
					"planspend": "20222",
					"uniquenumbers": "1",
				  
				},
				{
				    "top10": "2",
				    "drugname": "capecitabine",
					"condition": "Cancer",
					"planspend": "20222",
					"uniquenumbers": "1",
				  
				},
				{
				    "top10": "3",
				    "drugname": "capecitabine",
					"condition": "Cancer",
					"planspend": "20222",
					"uniquenumbers": "1",
				  
				},
				{
				    "top10": "",
				    "drugname": "",
					"condition": "Total",
					"planspend": "$100000",
					"uniquenumbers": "",
				  
				},
			
				
		];
		
			