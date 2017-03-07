var DemoApp = angular.module('DemoApp', [ 'dx' ]);

DemoApp.controller('DemoController', function DemoController($scope) {

	$scope.events = "";
	  $scope.filterRow = {
		         visible: false,
		         applyFilter: "auto"
		     };
		     
		     $scope.headerFilter = {
		         visible: false
		     };
		     
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
			fileName : "Firm-user",
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

		"First Name", "Middle Initial", "Last Name", "Email", "Job Title", {
			dataField : "Status",
			caption : "Status",
			width : 125,
			lookup : {
				dataSource : statusID,
				displayExpr : "Name",
				valueExpr : "ID"
			}
		}, "action", "Last Login Date",

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
	"First Name" : "Robert",
	"Middle Initial" : "K",
	"Last Name" : "Mr.",
	"Email" : "robert@gmail.com",
	"Job Title" : "Employee",
	"Status" : 1,
	"action" : "Resend Password",
	"Last Login Date" : "12/12/2017",

}, {
	"ID" : 2,
	"Firm Name" : "Firm 2",
	"First Name" : "Robert",
	"Middle Initial" : "R",
	"Last Name" : "Rangu",
	"Email" : "rangu@gmail.com",
	"Job Title" : "Manager",
	"Status" : 2,
	"action" : "Resend Password",
	"Last Login Date" : "12/12/2017",

} ];

var statusID = [ {
	"ID" : 1,
	"Name" : "Active"
}, {
	"ID" : 2,
	"Name" : "Inactive"
} ];