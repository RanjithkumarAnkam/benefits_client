
<section class="page-content">
	<div class="page-content-inner">

		<!-- Dashboard -->
		<div class="dashboard-container">


			<div class="row padding-bottom-20">
				<div class="col-md-12 header">
					<b class="padding-left-10">Dashboard</b>
				</div>
			</div>

			<div class="margin-bottom-10">

				<ul class="list-unstyled breadcrumb">
					<li><a href="javascript: void(0);">Admin</a></li>
					<li><a href="javascript: void(0);">Dashboard</a></li>

				</ul>

			</div>


			<section class="panel">
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12 padding-bottom-20">
							<div class="col-lg-3 col-sm-6 col-xs-12 padding-bottom-10">
								<label>Search Firms</label> <select class="form-control">
									<option value="1">value 1</option>
									<option value="2">value 2</option>
									<option value="3">value 3</option>
									<option value="4">value 4</option>
									<option value="5">value 5</option>
								</select>
								<button
									class="btn btn-info margin-top-5  pull-right color-orange btn-sm"
									type="button">+ New</button>
							</div>

							<div class="col-lg-3 col-sm-6 col-xs-12 padding-bottom-10">
								<label>Search Firm Users</label> <select class="form-control">
									<option value="1">value 1</option>
									<option value="2">value 2</option>
									<option value="3">value 3</option>
									<option value="4">value 4</option>
									<option value="5">value 5</option>
								</select>
								<button
									class="btn btn-info margin-top-5 pull-right color-orange btn-sm"
									type="button">+ New</button>
							</div>
							<div class="col-lg-3 col-sm-6 col-xs-12 padding-bottom-10">
								<label>Search Clients</label> <select class="form-control">
									<option value="1">value 1</option>
									<option value="2">value 2</option>
									<option value="3">value 3</option>
									<option value="4">value 4</option>
									<option value="5">value 5</option>
								</select>
								<button
									class="btn btn-info margin-top-5 pull-right color-orange btn-sm" 
									type="button">+ New</button>
							</div>
							<div class="col-lg-3 col-sm-6 col-xs-12 padding-bottom-10">
								<label>Search Client Users</label> <select class="form-control">
									<option value="1">value 1</option>
									<option value="2">value 2</option>
									<option value="3">value 3</option>
									<option value="4">value 4</option>
									<option value="5">value 5</option>
								</select>
								<button
									class="btn btn-info margin-top-5 pull-right color-orange btn-sm"
									type="button">+ New</button>
							</div>
						</div>
					</div>
				</div>
			</section>


			<div class="row padding-top-20 padding-bottom-20">
				<div class="col-md-12">


					<div class="col-md-7 padding-left-0">
						<section class="panel">
							<div class="panel-body">
								<div class="row">
									<div class="col-md-12">
										<div class="col-md-6">
											<label class="font-16"><b>Select Month/Year</b></label>
										</div>
										<div class="col-md-6">
											<select class="form-control">
												<option>2017</option>
												<option>2016</option>
												<option>2015</option>
												<option>2014</option>
											</select>
										</div>
									</div>
								</div>

								<div class="row padding-top-20 padding-bottom-10">
									<div class="col-md-12">
										<div class="col-md-6">
											<label class="font-16"><b>Monthly Billing</b></label>
										</div>
										<div class="col-md-6">$6566.6562</div>
									</div>
								</div>
							</div>
						</section>


						<div class="padding-top-20 padding-bottom-20">
						<section class="panel">
							<div class="panel-body">
							<div class="row">
							<div class="col-lg-12">

								<label class="font-16 padding-bottom-10"><b>Plan Renewals</b></label>

								<div class="">


									<div class="demo-container" ng-app="DemoApp"
										ng-controller="DemoController">
										<div dx-data-grid="dataGridOptions"></div>

									</div>
								</div>

							</div>
							</div>
							</div>
							</section>
						</div>


					</div>

					<div class="col-md-5">

						<div class="col-md-12">
						<section class="panel">
						<div class="panel-heading">
						<h4 class="text-center">Firms (by module)</h4>
						</div>
						<div class="panel-body">
							<div class="margin-bottom-50">
								<!-- Doughnut Chart -->
								<canvas id="chart-doughnut" width="400" height="200"></canvas>
								<!-- End Doughnut Chart -->
							</div>
							</div>
							</section>
						</div>

						<div class="col-md-12">
						<section class="panel">
						<div class="panel-heading">
							<h4 class="text-center">Total Plans (by plan type)</h4>
							</div>
							<br />
								<div class="panel-body">
							<div class="margin-bottom-50">
								<!-- Doughnut Chart -->
								<canvas id="chart-doughnut-2" width="400" height="200"></canvas>
								<!-- End Doughnut Chart -->
							</div>
							</div>
							</section>
						</div>
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
	src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/admin/dasboard.js"></script>