<?php
?>

<section class="page-content padding-0">
	<div class="page-content-inner">

		<!-- clients -->
		<div class="dashboard-container">

					<div class="col-md-12 col-xs-12 header-main">
				<div class="col-md-12 col-xs-12">
					<span style="font-size: 18px;">Firm Pricing</span> <span
						style="font-size: 22px;" class="pull-right"> <i
						class="fa fa-heart-o" aria-hidden="true"
						style="margin-right: 15px;"></i> <i class="fa fa-list menuBtn"
						aria-hidden="true"></i></span>

				</div>

			</div>
			<div class="col-md-12">

				<div class="row padding-top-20 padding-bottom-20">
					<div class="col-lg-12">
						<section class="panel">
					
							<div class="panel-body">
							
							<div class="row">
							<div class="col-md-12 col-xs-12 padding-top-10 padding-bottom-10">
							<div class="col-md-2 col-xs-4 padding-left-8"><label class="margin-top-10"><b> Firm Name<span class="imp-red">*</span> :</b></label></div>
								<div class="col-md-4 col-xs-4">
								<input type="text" class="form-control" value="Bentles Yates"/>
								</div>
								<div class="col-md-4 col-xs-4">
							<a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/admin/firm/add-firm" class="btn btn-warning">Firm Details</a>
								</div>
								</div>
								</div>
								
								
								<div class="row">
							<div class="col-md-12 col-xs-12 padding-top-10 padding-bottom-10">
							<div class="col-md-2 col-xs-4 padding-left-8"><label class="margin-top-10"><b> Select a Module :</b></label></div>
								<div class="col-md-4 col-xs-8">
								<select class="form-control">
								  <option selected="" value="Plan Claims Reporting">Plan Claims Reporting</option>
						          <option value="Population Health Management">Population Health Management</option>
						          <option value="Stewardship Reporting">Stewardship Reporting</option>
						          <option value="Plan RFP Quoting Assistant">Plan RFP Quoting Assistant</option>
						          <option value="Sales Activity Tracking">Sales Activity Tracking</option>
								</select></div>
								</div>
								</div>
								<!-- div starting for Manage Clients grid -->
								<div class="">
									<div class="demo-container" ng-app="DemoApp"
										ng-controller="DemoController">
										<div dx-data-grid="dataGridOptions"></div>
									</div>
								</div>

								<!-- div end for Manage Clients grid -->
							</div>
						</section>
					</div>
				</div>

			</div>

		</div>
	</div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.2/jszip.min.js"></script>
<script
	src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.16/angular.min.js"></script>
<script src="https://cdn3.devexpress.com/jslib/16.2.4/js/dx.all.js"></script>


<script type="text/javascript"
	src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/admin/firmpricing.js"></script>
	
	<script>
		$(document).ready(function(){
	 $("#master_data").css("display","block");
	 $("#master_data  li.firm_li a.firm_a").css("color","black");
	 $(".dx-toolbar-before").html('<strong class="font-16">Firm Billing</strong>');
});
</script>