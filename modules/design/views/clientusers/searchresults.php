<?php
?>

<section class="page-content">
	<div class="page-content-inner">

		<!-- clients -->
		<div class="dashboard-container">

			<div class="row padding-bottom-20">
				<div class="col-md-12 header">
					<b class="padding-left-10">Clients</b>
				</div>
			</div>

			<div class="margin-bottom-10">

				<ul class="list-unstyled breadcrumb">
					<li><a href="javascript: void(0);">Client Users</a></li>
					<li><a href="javascript: void(0);">Search Result</a></li>

				</ul>

			</div>
			<div class="col-md-12 padding-0">

				<div class="row padding-top-20 padding-bottom-20">
					<div class="col-lg-12">
						<section class="panel">
							<div class="panel-heading">
								<h3>Manage Client Users</h3>
							</div>
							<div class="panel-body">
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
	src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/admin/clientusersearch.js"></script>