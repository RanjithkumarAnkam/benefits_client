var DemoApp = angular.module('DemoApp',['dx']);


DemoApp.controller('DemoController', function DemoController($scope) {
 
    
    $scope.events = "";
    
    $scope.dataGridOptions = {
        dataSource: employees,
        paging: {
            enabled: false
        },
        "export": {
            enabled: false,
            fileName: "Companies",
            allowExportSelectedData: true
        },
        editing: {
            mode: "",
            allowUpdating: false,
            allowDeleting: false,
            allowAdding: false,
        }, 
        columns: [
                  {
                	 /* headerCellTemplate: function(container) {
                		  container.addClass("padding-15");
                		  $('Usr')
                         .appendTo(container);
                      },*/
                      dataField: "firstname",
      				caption: "First Name",
      				 cellTemplate: function (container, options) {
      					  	//	container.addClass("padding-15");
                                 $('<u><a id="update-firm" href="#update_firm" data-toggle="modal">'+ options.value +'</a></u>')
                                    
                                    // .attr('target', '_blank')
                                     .appendTo(container);
                             }
                  }, 
            
                  {
                 	 /* headerCellTemplate: function(container) {
                 		  container.addClass("padding-15");
                 		  $('Usr')
                          .appendTo(container);
                       },*/
                       dataField: "lastname",
       				caption: "Last Name",
       				 cellTemplate: function (container, options) {
       					  	//	container.addClass("padding-15");
                                  $('<u><a id="update-firm" href="#update_firm" data-toggle="modal">'+ options.value +'</a></u>')
                                     
                                     // .attr('target', '_blank')
                                      .appendTo(container);
                              }
                   }, 
            
           
            "email",
			"jobtitle",
			 {
                dataField: "status",
                caption: "Status",
                width: 125,
 				 cellTemplate: function (container, options) {
                      $('<u><a>'+ options.value +'</a></u>')
                           .attr('href','#')
                         // .attr('target', '_blank')
                          .appendTo(container);
                  }
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
		    "firstname": "Robert",
		    "lastname": "Hood",
		    "email": "robert@gmail.com",
			 "jobtitle": "Employee",
			  "status": 'Inactive',
			 
		   
		},
		{
		    "ID": 2,
		    "firstname": "Ravi",
		    "lastname": "Teja",
		    "email": "ravi@gmail.com",
			 "jobtitle": "Employee",
			  "status": 'Inactive',
			  
		   
		},
		{
		    "ID": 3,
		    "firstname": "Pramod",
		    "lastname": "kumar",
		    "email": "pramod@gmail.com",
			 "jobtitle": "Employee",
			  "status": 'Active',
			 
		   
		},
		{
		    "ID": 4,
		    "firstname": "Akhsay",
		    "lastname": "Kumar",
		    "email": "akshay@gmail.com",
			 "jobtitle": "Employee",
			  "status": 'Inactive',
			  
		   
		}];

		
		var statusID = [{
		    "ID": 1,
		    "Name": "Active"
		}, {
		    "ID": 2,
		    "Name": "Inactive"
		}];