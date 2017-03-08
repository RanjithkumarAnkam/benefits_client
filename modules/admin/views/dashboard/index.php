
<section class="page-content padding-0">
	<div class="page-content-inner">

		<!-- Dashboard -->
		<div class="dashboard-container">


			<div class="col-md-12 col-xs-12 header-main">
				<div class="col-md-12 col-xs-12">
					<span style="font-size: 18px;">Dashboard</span> <span
						style="font-size: 22px;" class="pull-right"> <i
						class="fa fa-heart-o" aria-hidden="true"
						style="margin-right: 15px;"></i> <i class="fa fa-list menuBtn"
						aria-hidden="true"></i></span>

				</div>

			</div>



			<div class="row">
				<div class="col-md-12">
					<div class="col-xl-3 col-lg-6 col-sm-6 col-xs-12 media-width">
						<div class="widget widget-seven background-success">
							<div class="widget-body">
								<div href="javascript: void(0);" class="widget-body-inner">
									<h5 class="text-uppercase pull-left line-height-35">SEARCH
										FIRMS</h5>
									<span class=" pull-right"><h5 class="text-uppercase margin-0">
											<button type="button" data-toggle="tooltip"
												data-placement="top" title="Add Firm"
												class="btn btn-icon btn-success-outline margin-inline dashboard-add-button dashboard-add-white-button">
												<i class="fa fa-plus color-green" aria-hidden="true"></i>
											</button>
										</h5></span>
									<div class="typeahead__container pull-left">
										<div class="typeahead__field">
											<div class="typeahead__query">
												<div class="input-group width-full">
													<input id="example2" class="form-control" name=""
														type="text" placeholder="Keyword Search"
														autocomplete="off" /> <span class="input-group-btn"> <a
														href="javascript: void(0);"
														class="btn btn-default search-icon border-color-none padding-top-9 padding-bottom-8">
															<i class="fa fa-search color-black"></i>
													</a>
													</span>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-sm-6 col-xs-12 media-width">
						<div class="widget widget-seven background-default">
							<div class="widget-body">
								<div href="javascript: void(0);" class="widget-body-inner">
									<h5 class="text-uppercase pull-left line-height-35">FIRM USERS</h5>
									<span class=" pull-right"><h5 class="text-uppercase margin-0">
											<button type="button" data-toggle="tooltip"
												data-placement="top" title="Add Firm User"
												class="btn btn-icon btn-default-outline margin-inline dashboard-add-button dashboard-add-white-button">
												<i class="fa fa-plus color-secondary" aria-hidden="true"></i>
											</button>
										</h5></span>
									<div class="typeahead__container pull-left">
										<div class="typeahead__field">
											<div class="typeahead__query">
												<div class="input-group width-full">
													<input id="example2" class="form-control" name=""
														type="text" placeholder="Keyword Search"
														autocomplete="off" /> <span class="input-group-btn"> <a
														href="javascript: void(0);"
														class="btn btn-default search-icon border-color-none padding-top-9 padding-bottom-8">
															<i class="fa fa-search color-black"></i>
													</a>
													</span>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-lg-6 col-sm-6 col-xs-12 media-width">
						<div class="widget widget-seven">
							<div class="widget-body">
								<div href="javascript: void(0);" class="widget-body-inner">
									<h5 class="text-uppercase pull-left line-height-35">CLIENT
										COMPANIES</h5>
									<span class=" pull-right"><h5 class="text-uppercase margin-0">
											<button type="button" data-toggle="tooltip"
												data-placement="top" title="Add Client Company"
												class="btn btn-icon btn-secondary margin-inline dashboard-add-button">
												<i class="fa fa-plus" aria-hidden="true"></i>
											</button>
										</h5></span>
									<div class="typeahead__container pull-left">
										<div class="typeahead__field">
											<div class="typeahead__query">
												<div class="input-group width-full">
													<input id="example2" class="form-control" name=""
														type="text" placeholder="Keyword Search"
														autocomplete="off" /> <span class="input-group-btn"> <a
														href="javascript: void(0);"
														class="btn btn-default search-icon border-color-none padding-top-9 padding-bottom-8">
															<i class="fa fa-search color-black"></i>
													</a>
													</span>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-sm-6 col-xs-12 media-width">
						<div class="widget widget-seven">
							<div class="widget-body">
								<div href="javascript: void(0);" class="widget-body-inner">
									<h5 class="text-uppercase pull-left line-height-35">COMPANY
										USERS</h5>
									<span class=" pull-right"><h5 class="text-uppercase margin-0">
											<button type="button" data-toggle="tooltip"
												data-placement="top" title="Add Client Company User"
												class="btn btn-icon btn-secondary margin-inline dashboard-add-button">
												<i class="fa fa-plus" aria-hidden="true"></i>
											</button>
										</h5></span>
									<div class="typeahead__container pull-left">
										<div class="typeahead__field">
											<div class="typeahead__query">
												<div class="input-group width-full">
													<input id="example2" class="form-control" name=""
														type="text" placeholder="Keyword Search"
														autocomplete="off" /> <span class="input-group-btn"> <a
														href="javascript: void(0);"
														class="btn btn-default search-icon border-color-none padding-top-9 padding-bottom-8">
															<i class="fa fa-search color-black"></i>
													</a>
													</span>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>



			<div class="col-md-12 padding-right-0 padding-left-0">
				<div class="col-lg-4 col-xs-12">
					<div class="widget widget-six" style="min-height: 336px;">
						<div class="widget-header">

							<strong class="margin-right-10">Firms (by module)</strong>

						</div>
						<br>
						<div class="margin-bottom-50">

							<!-- Doughnut Chart -->
							<canvas id="chart-doughnut" width="400" height="200"></canvas>
							<!-- End Doughnut Chart -->
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-xs-12">
					<div class="widget widget-six" style="min-height: 336px;">
						<div class="widget-header">

							<strong class="margin-right-10">Total Plans (by plan type)</strong>

						</div>
						<br>
						<div class="margin-bottom-50">

							<!-- Doughnut Chart -->
							<canvas id="chart-doughnut2" width="400" height="200"></canvas>
							<!-- End Doughnut Chart -->
						</div>
					</div>
				</div>






				<div class="col-lg-4 col-xs-12">

					<div class="widget widget-six" style="min-height: 336px;">
						<div class="widget-header">

							<strong class="margin-right-10">Billing by Month / Year</strong>

						</div>


						<div class="row padding-10 padding-top-14">
							<div class="col-md-5">
								<label class="font-14 line-height-30"> Select Month/Year </label>
							</div>
							<div class="col-md-7">
								<select class="form-control">
									<option>January 2017</option>
									<option>Febraury 2017</option>
									<option>March 2017</option>
									<option>April 2017</option>
								</select>
							</div>

						</div>

						<div class="row padding-11">
							<div class="col-md-12">
								<div class="widget widget-seven background-info" style="background-image: url(<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/themes/clean-ui/common/img/temp/photos/9.jpeg)">
									<div class="widget-body">
										<div href="javascript: void(0);" class="widget-body-inner">
											<h5 class="text-uppercase">Monthly Billing</h5>
											<i class="counter-icon icmn-cash3"></i> <span
												class="counter-count"> <i class="icmn-arrow-up5"></i> $<span
												class="counter-init" data-from="25" data-to="1654">1654</span>
											</span>
										</div>
									</div>
								</div>
							</div>

						</div>


					</div>
				</div>





			</div>
			<div class=" col-md-12 ">

				<div class="widget widget-six">

					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<div class="">


									<div class="demo-container" ng-app="DemoApp"
										ng-controller="DemoController">
										<div dx-data-grid="dataGridOptions"></div>

									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>


</section>
<div id="menu" style="right: -50%;">

	<div class="col-md-12 col-xs-12 col-sm-12 padding-18">
		<ul>
			<li>Member Type
				<ul>
					<li><input type="checkbox">&nbsp;Admin</li>
					<li><input type="checkbox">&nbsp;Firm</li>
					<li><input type="checkbox">&nbsp;Client</li>
				</ul>

			</li>

		</ul>
		<hr>
		<ul>
			<li>Age
				<div class="margin-bottom-50">
					<input type="text" id="slider-1" name="example_name" value="" />
				</div>
			</li>
		</ul>
		<hr>
		<ul>
			<li>Gender
				<ul>
					<li><input type="checkbox">&nbsp;Male</li>
					<li><input type="checkbox">&nbsp;Female</li>
				</ul>
			</li>
		</ul>
		<hr>

	</div>
	<!--   <div class="footer-search pull-right">
    <button class="btn btn-primary">Search</button>
     <button class="btn btn-default menuBtn">Cancel</button>
    </div>-->
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.2/jszip.min.js"></script>
<script
	src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.16/angular.min.js"></script>
<script src="https://cdn3.devexpress.com/jslib/16.2.4/js/dx.all.js"></script>


<script type="text/javascript"
	src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/admin/dashboard.js"></script>

<script>
$(document).ready(function(){
	 $(".dx-toolbar-before").html('<strong class="font-16">Plan Renewals</strong>');
    $("#slider-1").ionRangeSlider({
        min: 0,
        max: 100,
        from: 50,
        step: 10,
        grid: true,
        grid_num: 10
    });

    
	 $('.menuBtn').click(function(event) {
		    value = $('#menu').css('right') === '0px' ? '-50%' : '0px';
		      $('#menu').animate({
		          right: value
		      });
		});

});
</script>