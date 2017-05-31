

		
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
            allowUpdating: false,
            allowDeleting: false,
            allowAdding: false
        }, 
        columns: [
            {
                dataField: "firm",
                caption: "Firm"
            },
            {
                dataField: "firmname",
                caption: "Firm Name"
            },
            "client",
            {
                dataField: "clientname",
                caption: "Client Name"
            },
            {
                dataField: "billto",
                caption: "Bill To.."
            },
            
            "module",
            {
                dataField: "packagedescription",
                caption: "Package Description"
            },
            {
                dataField: "annualcharge",
                caption: "Annual Charge"
            },
            {
                dataField: "monthlycharge",
                caption: "Monthly Charge"
            },
            {
                dataField: "billingcompanyname",
                caption: "Billing Company Name"
            },
            {
                dataField: "billingcontact",
                caption: "Billing Contact"
            },
            {
                dataField: "billingaddress",
                caption: "Billing Address"
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
		    "firm": "F7888",
		    "firmname": "Firm 1",
		    "client": "12345",
		    "clientname": "Client 1",
		    "billto": "Firm",
		    "module": "Plan Claims Reporting",
		    "packagedescription": "Package 1",
		    "annualcharge": "$3000",
		    "monthlycharge": "$250",
		    "billingcompanyname": "etc",
		    "billingcontact": "etc",
		    "billingaddress": "etc",
		   
		}, {
		    "ID": 2,
		    "firm": "F7888",
		    "firmname": "Firm 1",
		    "client": "12345",
		    "clientname": "Client 1",
		    "billto": "Firm",
		    "module": "Plan Claims Reporting",
		    "packagedescription": "Package 1",
		    "annualcharge": "$3000",
		    "monthlycharge": "$250",
		    "billingcompanyname": "etc",
		    "billingcontact": "etc",
		    "billingaddress": "etc",
		   
		}, {
		    "ID": 3,
		    "firm": "F7888",
		    "firmname": "Firm 1",
		    "client": "12345",
		    "clientname": "Client 1",
		    "billto": "Firm",
		    "module": "Plan Claims Reporting",
		    "packagedescription": "Package 1",
		    "annualcharge": "$3000",
		    "monthlycharge": "$250",
		    "billingcompanyname": "etc",
		    "billingcontact": "etc",
		    "billingaddress": "etc",
		   
		}, {
		    "ID": 4,
		    "firm": "F7888",
		    "firmname": "Firm 1",
		    "client": "12345",
		    "clientname": "Client 1",
		    "billto": "Firm",
		    "module": "Plan Claims Reporting",
		    "packagedescription": "Package 1",
		    "annualcharge": "$3000",
		    "monthlycharge": "$250",
		    "billingcompanyname": "etc",
		    "billingcontact": "etc",
		    "billingaddress": "etc",
		   
		}, {
		    "ID": 5,
		    "firm": "F7888",
		    "firmname": "Firm 1",
		    "client": "12345",
		    "clientname": "Client 1",
		    "billto": "Firm",
		    "module": "Plan Claims Reporting",
		    "packagedescription": "Package 1",
		    "annualcharge": "$3000",
		    "monthlycharge": "$250",
		    "billingcompanyname": "etc",
		    "billingcontact": "etc",
		    "billingaddress": "etc",
		   
		}, {
		    "ID": 6,
		    "firm": "F7888",
		    "firmname": "Firm 1",
		    "client": "12345",
		    "clientname": "Client 1",
		    "billto": "Firm",
		    "module": "Plan Claims Reporting",
		    "packagedescription": "Package 1",
		    "annualcharge": "$3000",
		    "monthlycharge": "$250",
		    "billingcompanyname": "etc",
		    "billingcontact": "etc",
		    "billingaddress": "etc",
		   
		}, {
		    "ID": 7,
		    "firm": "F7888",
		    "firmname": "Firm 1",
		    "client": "12345",
		    "clientname": "Client 1",
		    "billto": "Firm",
		    "module": "Plan Claims Reporting",
		    "packagedescription": "Package 1",
		    "annualcharge": "$3000",
		    "monthlycharge": "$250",
		    "billingcompanyname": "etc",
		    "billingcontact": "etc",
		    "billingaddress": "etc",
		   
		}];

	