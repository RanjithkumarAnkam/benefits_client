var DemoApp = angular.module('DemoApp', [ 'dx' ]);

DemoApp.controller('DemoController', function DemoController($scope) {

	$scope.events = "";

	$scope.dataGridOptions = {
		dataSource : employees,
		paging : {
			enabled : false
		},
		bindingOptions: {
            filterRow: "filterRow",
            headerFilter: "headerFilter"
        },
        searchPanel: {
            visible: true,
            width: 240,
            placeholder: "Search..."
        },
		"export" : {
			enabled : true,
			fileName : "Companies",
			allowExportSelectedData : true
		},
		editing : {
			mode : "row",
			allowUpdating : true,
			allowDeleting : false,
			allowAdding : true
		},
		columns : [ {
			dataField : "Firm Name",
			caption : "Firm Name"
		},

		"Primary Contact", "Primary Contact Telephone",
				"Primary Contact Email",

				{
					dataField : "Status",
					caption : "Status",
					width : 125,
					lookup : {
						dataSource : statusID,
						displayExpr : "Name",
						valueExpr : "ID"
					}
				}, "action", "Last Login date",

		],
		onEditingStart : function(e) {

		},
		onInitNewRow : function(e) {

		},
		onRowInserting : function(e) {

		},
		onRowInserted : function(e) {

		},
		onRowUpdating : function(e) {

		},
		onRowUpdated : function(e) {

		},
		onRowRemoving : function(e) {

		},
		onRowRemoved : function(e) {

		}
	};

});

var employees = [ {
	"ID" : 1,
	"Firm Name" : "Firm 1",
	"Primary Contact" : "Robert",
	"Primary Contact Telephone" : "3434343343",
	"Primary Contact Email" : "robert@gmail.com",
	"Status" : 1,
	"action" : "Resend Password",
	"Last Login date" : "10/10/2017",

}, {
	"ID" : 2,
	"Firm Name" : "Firm 2",
	"Primary Contact" : "Robert",
	"Primary Contact Telephone" : "343434343",
	"Primary Contact Email" : "rangu@gmail.com",
	"Status" : 2,
	"action" : "Resend Password",
	"Last Login date" : "10/10/2017",

} ];

var statusID = [ {
	"ID" : 1,
	"Name" : "Active"
}, {
	"ID" : 2,
	"Name" : "Inactive"
} ];