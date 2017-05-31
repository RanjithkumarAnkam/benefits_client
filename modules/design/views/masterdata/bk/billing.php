<?php
?>

<section class="page-content">
	<div class="page-content-inner">

		<!-- clients -->
		<div class="dashboard-container">
<script>
		$(document).ready(function(){
	 $("ul .left-menu-list .list-unstyled").css("display","block");
	  
});
</script>
			<div class="row padding-bottom-20">
				<div class="col-md-12 header">
					<b class="padding-left-10">MasterData</b>
				</div>
			</div>

			<div class="margin-bottom-10">

				<ul class="list-unstyled breadcrumb">
					<li><a href="javascript: void(0);">Masterdata</a></li>
					<li><a href="javascript: void(0);">System Billing</a></li>

				</ul>

			</div>
			<div class="col-md-12 padding-0">

				<div class="row padding-top-20 padding-bottom-20">
					<div class="col-lg-12">
						<section class="panel">
							<div class="panel-heading">
								<h3>System Billing</h3>
							</div>
							<div class="panel-body">
							<div class="row">
							<div class="col-md-12 padding-top-10 padding-bottom-10">
							<div class="col-md-2"><label class="margin-top-10"><b> Select a Module</b></label></div>
								<div class="col-md-4">
								<select class="form-control">
								<option>January 2017</option>
								<option>Febraury 2017</option>
								<option>March 2017</option>
								<option>April 2017</option>
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

<script
	src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.16/angular.min.js"></script>
<script src="https://cdn3.devexpress.com/jslib/16.2.4/js/dx.all.js"></script>


<script type="text/javascript"
	src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/admin/billing.js"></script>