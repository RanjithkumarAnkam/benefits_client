<section class="page-content  padding-0">
	<div class="page-content-inner">

		<!-- clients -->
		<div class="dashboard-container"  ng-app="DemoApp" ng-controller="DemoController">

			<div class="header-main">
				<span class="font-22">Claims Input</span><a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl();  ?>/clients/manageplans?id=1" class="btn btn-success pull-right line-height-13"> Back</a>
			</div>
			
			<div class="col-lg-12">
			<section class="panel">
					
			<div class="panel-body">
			<div class="row">
			 <div class="col-md-12">
			<div class="demo-container">
					 <div dx-data-grid="dataGridOptions"></div>
			</div>
			</div>
			</div>
			</div>
			</section>
			</div>
			
			<div class="col-lg-12">
			<section class="panel">
					
			<div class="panel-body">
			<div class="row">
			
			<div class="col-md-12">
			<h4>Select Item For Entry</h4>
			<!-- Nav tabs -->
			<ul class="nav nav-tabs" role="tablist">
			  <li class="nav-item">
				<a class="nav-link active" data-toggle="tab" href="#monthlyfinancial" role="tab">Monthly Financial</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#largeclaims" role="tab">Large Claims</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#networkperfomance" role="tab">Network Perfomance</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#pharmacyperfomance" role="tab">Pharmacy Perfomance</a>
			  </li>
			</ul>

			<!-- Tab panes -->
			<div class="tab-content">
			  <div class="tab-pane active" id="monthlyfinancial" role="tabpanel">
			  <div class="col-md-12">
			  <div class="demo-container" style="margin-top: 10px;">
					 <div dx-data-grid="dataGridOptionsclient"></div>
			</div>
			  
			  </div>
			   </div>
			  <div class="tab-pane" id="largeclaims" role="tabpanel">
			   <div class="col-md-12">
				  <div class="demo-container largeclaims" style="margin-top: 10px;">
						 <div dx-data-grid="dataGridOptionslargeclaims"></div>
				</div>
			  
			  </div>
			  
			  
			  
			  </div>
			  <div class="tab-pane" id="networkperfomance" role="tabpanel">
			  <div class="demo-container " style="margin-top: 10px;">
						 <div dx-data-grid="dataGridOptionsnetworkperfomance"></div>
				</div>
			  
			  </div>
			  <div class="tab-pane" id="pharmacyperfomance" role="tabpanel">
			  <div class="demo-container " style="margin-top: 10px;">
						<div class="padding-bottom-30" dx-data-grid="dataGridOptionspharmacyperfomance"></div>
						<div dx-data-grid="dataGridOptionspharmacydrugs"></div>
				</div>
			  
			  
			  </div>
			</div>
			</div>
			</div>
			</div>
			</section>
			</div>
			

		</div>
		
		
		
				
	</div>
</section>

<script
	src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.2/jszip.min.js"></script>
<script
	src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.16/angular.min.js"></script>
<script src="https://cdn3.devexpress.com/jslib/16.2.4/js/dx.all.js"></script>

<script type="text/javascript"
	src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/firm/medical/medical-full.js"></script>
	
	<script>
	$(document).ready(function(){
//	$("#loadGif").show();
     $("#clients_id_ul").css("display","block");
		  $("#clients_id").addClass("left-menu-list-opened");
	 $("#clients_id  li.manage_plans_li a.manage_plans").css("color","black");
	
	 $("#largeclaims .dx-toolbar-before").html('<div class="form-group col-md-12"><label class="font-16 col-xs-5">Data as of : </label><span class=" col-xs-7"><select class="form-control" id="plan_value">'
								+'<option value="Medical &amp; Rx">January 2017</option>'
								+'<option value="Dental">February 2017</option>'
								+'<option value="Vision">March 2017</option>'
								+'</select></span></div>');
	 $("#networkperfomance .dx-toolbar-before").html('<div class="form-group col-md-12"><label class="font-16 col-xs-5">Data as of : </label><span class=" col-xs-7"><select class="form-control" id="plan_value">'
								+'<option value="Medical &amp; Rx">January 2017</option>'
								+'<option value="Dental">February 2017</option>'
								+'<option value="Vision">March 2017</option>'
								+'</select></span></div>');
	 $("#pharmacyperfomance .dx-toolbar-before").html('<div class="form-group col-md-12"><label class="font-16 col-xs-5">Data as of : </label><span class=" col-xs-7"><select class="form-control" id="plan_value">'
								+'<option value="Medical &amp; Rx">January 2017</option>'
								+'<option value="Dental">February 2017</option>'
								+'<option value="Vision">March 2017</option>'
								+'</select></span></div>');
	 
		    $("#cart-checkout").steps({
		        headerTag: "h3",
		        bodyTag: "section",
		        transitionEffect: 0,
		        autoFocus: true,
				
				
		    });


});
	</script>