<?php
?>

		
	<div class="page-content-inner">

		<!-- clients -->
		<div class="dashboard-container">

	<div class="col-md-12 col-xs-12 header-main">
				<div class="col-md-12 col-xs-12">
					<span style="font-size: 18px;">Manage Plan Years</span> <span
						style="font-size: 22px;" class="pull-right"> <i
						class="fa fa-heart-o" aria-hidden="true"
						style="margin-right: 15px;"></i> <i class="fa fa-list menuBtn"
						aria-hidden="true"></i></span>

				</div>

			</div>

		<div class="container">

				<div class="row padding-top-20 padding-bottom-20">
					<div class="col-lg-12">
						<section class="panel">
					
							<div class="panel-body">
							<?php if(Yii::$app->user->identity->usertype == 1){?>
							<div class="row">
							<div class="col-md-12 padding-top-10 padding-bottom-10">
							<div class="col-md-2 padding-left-8"><label class="margin-top-10"><b> Select a Firm :</b></label></div>
								<div class="col-md-4">
								<select class="form-control">
								<option selected="" value="Tata Firm">Tata Firm</option>
						          <option value="Capgemini">Capgemini</option>
						          <option value="Tech Mahindra">Tech Mahendra</option>
								</select></div>
								</div>
								</div>
								<div class="row">
							<div class="col-md-12 padding-top-10 padding-bottom-10">
							<div class="col-md-2 padding-left-8"><label class="margin-top-10"><b> Select a Client :</b></label></div>
								<div class="col-md-4">
								<select class="form-control">
								<option selected="" value="Tata Firm">Tata motors</option>
						          <option value="Capgemini">Tata Consultancy</option>
								</select></div>
								</div>
								</div>
								<?php }?>
						<div class="row">
							<div class="col-md-12 padding-top-10 padding-bottom-10">
							<div class="col-md-2 padding-left-8"><label class="margin-top-10"><b> Select a Plan Year:</b></label></div>
								<div class="col-md-4">
								<select class="form-control" id="plan_year_value">
								<option value="1" <?php if(!empty($get_plan_type) && $get_plan_type['id']==1){echo 'selected';}?>>Medical & Rx</option>
								<option value="2" <?php if(!empty($get_plan_type) && $get_plan_type['id']==2){echo 'selected';}?>>Dental</option>
								<option value="3" <?php if(!empty($get_plan_type) && $get_plan_type['id']==3){echo 'selected';}?>>Vision</option>
								</select></div>
								</div>
								</div>
								<!-- div starting for Manage Clients grid 
								<div class="">
									<div class="demo-container" ng-app="DemoApp"
										ng-controller="DemoController">
										<div dx-data-grid="dataGridOptions"></div>
										
									</div>
								</div>
-->
								<!-- div end for Manage Clients grid -->
							</div>
						</section>
					</div>
				</div>

			</div>
			
			
			

		</div>
	</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.2/jszip.min.js"></script>
<script
	src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.16/angular.min.js"></script>
<script src="https://cdn3.devexpress.com/jslib/16.2.4/js/dx.all.js"></script>


<script type="text/javascript"
	src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/firm/manageplans.js"></script>
	
	<script>
	
	var DemoApp = angular.module('DemoApp',['dx']);


DemoApp.controller('DemoController', function DemoController($scope) {
 
	
		    
    $scope.events = "";
      $scope.filterRow = {
        visible: true,
        applyFilter: "auto"
    };
    $scope.dataGridOptions = {
        dataSource: <?php echo $data;?>,
        paging: {
            enabled: false
        },
		   bindingOptions: {
            filterRow: "filterRow",
            headerFilter: "headerFilter"
        },
		
        "export": {
            enabled: true,
            fileName: "manageplans",
            allowExportSelectedData: true
        },
       
      
           editing: {
            mode: "row",
             editEnabled: true,
                removeEnabled: false,
                insertEnabled: true,
        }, 
        columns: [
           
			{
                dataField: "type",
                caption: "Type"
				
            },
			{
                dataField: "shorttitle",
                caption: "Short Title"
            },
			 {
                dataField: "startdate",
                caption: "Start Date"
            }, 
			 {
                dataField: "enddate",
                caption: "End Date"
            },
            {
                dataField: "funding",
                caption: "Funding",
			    allowEditing: false,
            }, 
			{
                dataField: "plandetails",
				 caption: "Edit",
				 allowEditing: false,
				 cellTemplate: function (container, options) {
                           $('<a>Edit</a>')
                               .attr('href', options.value )
                               .appendTo(container);
                       }
             
			},
           {
                dataField: "inputclaims",
				caption: "Go",
				 allowEditing: false,
				 cellTemplate: function (container, options) {
                           $('<a>Go</a>')
                               .attr('href',options.value)
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
		
		
	$(document).ready( function (){
		 $("#clients_id_ul").css("display","block");
		  $("#clients_id").addClass("left-menu-list-opened");
	 $("#clients_id  li.manage_plans_li a.manage_plans").css("color","black");
		 $(".dx-toolbar-before").html('<strong class="font-16">Plan Years</strong>');
	});
	
	</script>