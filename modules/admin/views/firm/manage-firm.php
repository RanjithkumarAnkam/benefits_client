<?php
?>

<section class="page-content padding-0">
	<div class="page-content-inner">

		<!-- clients -->
		<div class="dashboard-container">

				<div class="col-md-12 col-xs-12 header-main">
				<div class="col-md-11 col-xs-11">
					<span style="font-size: 22px;">Manage Firms</span>
				</div>
				<div class="col-md-1 col-xs-1">
					<i class="fa fa-heart-o" aria-hidden="true"></i>&nbsp;&nbsp;<i
						class="fa fa-list menuBtn" aria-hidden="true"></i>
				</div>
			</div>
			<div class="col-md-12">

				<div class="row padding-top-20 padding-bottom-20">
					<div class="col-lg-12">
						<section class="panel">
					
							<div class="panel-body">
							<div class="row">
							<div class="col-md-12 padding-top-10 padding-bottom-10">
							<div class="col-md-2 padding-left-8"><label class="margin-top-10"><b> Search :</b></label></div>
								<div class="col-md-4">
								<input class="form-control" type="text"/>
								</div>
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
	src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/admin/managefirms.js"></script>
	
	<script>
		$(document).ready(function(){
	 $("#master_data").css("display","block");
	 $("#master_data  li.billing_li a.billing_a").css("color","black");
	 $(".dx-toolbar-before").html('<strong class="font-16">Manage Firms</strong>');
});
</script>