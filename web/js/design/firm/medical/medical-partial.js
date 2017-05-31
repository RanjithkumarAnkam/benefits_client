
	var DemoApp = angular.module('DemoApp',['dx']);


		DemoApp.controller('DemoController', function DemoController($scope) {
		 
		    
		    $scope.events = "";
		    
		    $scope.dataGridOptions = {
		        dataSource: employe,
		        paging: {
		            enabled: false
		        },
		        "export": {
		            enabled: false,
		            fileName: "Companies",
		            allowExportSelectedData: false
		        },
		        editing: {
		            mode: "batch",
					allowUpdating: true
		        }, 
		        columns: [
		            
					  {
		                dataField:  "plantype",
		                caption: "Plan Type (auto)",
						 allowEditing: false,
		            },
					  {
		                dataField: "medicalrx",
		                caption: "Medical & Rx"
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
		   
		   
		  
		 /*   $scope.dataGridOptionsnetworkperfomance = {
		        dataSource: networkperfomance,
		        paging: {
		            enabled: false
		        },
		        "export": {
		            enabled: true,
		            fileName: "networkperfomance",
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
					},
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
		           
		        }
		    };
		   */
		    $scope.dataGridOptionsnetworkperfomance = {
		        dataSource: networkperfomance,
		        paging: {
		            enabled: false
		        },
		        "export": {
		            enabled: true,
		            fileName: "networkperfomance",
		            allowExportSelectedData: true
		        },
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
		           
		        }
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
		           
		        }
		    };
		   
		   
		   
    $scope.dataGridOptionsclient = {
        dataSource: {
            store: {
                type: "array",
                key: "ID",
                data: orders
            }
        },
        
		editing: {
		            mode: "batch",
		            allowUpdating: true,
		            allowDeleting: false,
		            allowAdding: false
		        },
        columns: [{
                dataField: "name",
                width: 180,
                caption: ""
            },{
                dataField: "jan",
                alignment: "right",
                format: "currency",
                caption: "Jan 2015",
            }, {
                dataField: "feb",
                alignment: "right",
                format: "currency",
                caption: "Feb 2015",
            }, 
            {
                dataField: "mar",
                alignment: "right",
                format: "currency",
                caption: "Mar 2015",
            }, 
			{
                dataField: "apr",
                alignment: "right",
                format: "currency",
                caption: "Apr 2015",
            }, 
			{
                dataField: "may",
                alignment: "right",
                format: "currency",
                caption: "May 2015",
            }, 
			{
                dataField: "jun",
                alignment: "right",
                format: "currency",
                caption: "Jun 2015",
            }, 
			{
                dataField: "jul",
                alignment: "right",
                format: "currency",
                caption: "Jul 2015",
            }, 
			{
                dataField: "aug",
                alignment: "right",
                format: "currency",
                caption: "Aug 2015",
            }, 
			{
                dataField: "sep",
                alignment: "right",
                format: "currency",
                caption: "Sep 2015",
            }, 
			{
                dataField: "oct",
                alignment: "right",
                format: "currency",
                caption: "Oct 2015",
            }, 
			{
                dataField: "nov",
                alignment: "right",
                format: "currency",
                caption: "Nov 2015",
            }, 
			{
                dataField: "dec",
                alignment: "right",
                format: "currency",
                caption: "Dec 2015",
            }, 
			
        ],
		onCellPrepared: function (e) {
                    if (e.rowType != 'data' )
                        return;

					

					
					
                    var currentTotal = 0;

                    if (e.column.dataField == "jan") {
                        
						if(e.value != 'final' && e.value !="first"){
						if(e.data.ID==3){
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
						if(e.data.ID==3){
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
						if(e.data.ID==3){
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
						if(e.data.ID==3){
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
						if(e.data.ID==3){
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
						if(e.data.ID==3){
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
						if(e.data.ID==3){
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
						if(e.data.ID==3){
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
						if(e.data.ID==3){
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
						if(e.data.ID==3){
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
						if(e.data.ID==3){
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
						if(e.data.ID==3){
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
		        editing: {
		            mode: "row",
		            allowUpdating: false,
		            allowDeleting: false,
		            allowAdding: false
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
		        editing: {
		            mode: "row",
		            allowUpdating: false,
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
		
		var employe = [{
		    "plantype": "Name of Plan *",
		    "medicalrx": "Group Medical Plan",
		  
		   
		   
		}, {
		    "plantype": "Administrative Carrier/Vendor*",
		    "medicalrx": "United Health Care",
		  
		   
		   
		}, {
		    "plantype": "Network*",
		    "medicalrx": "UHC Plus",
		  
		   
		   
		}, {
		    "plantype": "Pharmacy Benefit Manager *",
		    "medicalrx": "Caremark",
		  
		   
		   
		}, 
		 {
		    "plantype": "Renewal Plan Year *",
		    "medicalrx": "2016",
		  
		   
		   
		},
, 
		 {
		    "plantype": "Annual Fee/Commission on Plan  *",
		    "medicalrx": "$75,000",
		  
		   
		   
		},
, 
		 {
		    "plantype": "Budget",
		    "medicalrx": "$1,345,555",
		  
		   
		   
		},

		 {
		    "plantype": "Any Notes",
		    "medicalrx": "+ Add Notes",
		  
		   
		   
		},	
	{
		    "plantype": "Plan Funding *",
		    "medicalrx": "Partially Self Insured",
		  
		   
		   
		},			];
		
		
	   
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
	"name":"Member2 Enrollment",
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
	"name":"Net Total",
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
	"ID":5,
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
	"ID":6,
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
	"ID":7,
	"name":"Final Total",
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
