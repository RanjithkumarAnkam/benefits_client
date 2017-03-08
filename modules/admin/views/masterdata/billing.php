<?php
?>

<section class="page-content padding-0">
	<div class="page-content-inner">

		<!-- clients -->
		<div class="dashboard-container">

					<div class="col-md-12 col-xs-12 header-main">
				<div class="col-md-12 col-xs-12">
					<span style="font-size: 18px;">System Billing</span> <span
						style="font-size: 22px;" class="pull-right"> <i
						class="fa fa-heart-o" aria-hidden="true"
						style="margin-right: 15px;"></i> <i class="fa fa-list menuBtn"
						aria-hidden="true"></i></span>

				</div>

			</div>
				</div>
			<div class="col-md-12">

				<div class="row padding-top-20 padding-bottom-20">
					<div class="col-lg-12">
						<section class="panel">
					
							<div class="panel-body">
							
								
						<div class="row">
							<div class="col-md-12 padding-top-10 padding-bottom-10">
							<div class="col-md-2 padding-left-8"><label class="margin-top-10"><b> Select a Module :</b></label></div>
								<div class="col-md-4">
								<select class="form-control">
								<option selected="" value="Plan Claims Reporting">Plan Claims Reporting</option>
						          <option value="Population Health Management">Population Health Management</option>
						          <option value="Stewardship Reporting">Stewardship Reporting</option>
						          <option value="Plan RFP Quoting Assistant">Plan RFP Quoting Assistant</option>
						          <option value="Sales Activity Tracking">Sales Activity Tracking</option>
								</select></div>
								</div>
								</div>
								
								<div class="row">
							<div class="col-md-12 padding-top-10 padding-bottom-10">
							<div class="col-md-2 padding-left-8"><label class="margin-top-10"><b> Select a Year :</b></label></div>
								<div class="col-md-4">
								<select class="form-control" id="year_value" onchange="yearFunction();">
								<option value="2015">2015</option>
								<option value="2016">2016</option>
								<option value="2017">2017</option>
								</select></div>
								</div>
								</div>
								
								<div class="row">
							<div class="col-md-12 padding-top-10 padding-bottom-10">
							<div class="col-md-2 padding-left-8"><label class="margin-top-10"><b> Select a Month :</b></label></div>
								<div class="col-md-4">
								<select class="form-control" id="month_value">
								<option>January</option>
								<option>Febraury</option>
								<option>March</option>
								<option>April</option>
								<option>May</option>
								<option>June</option>
								<option>July</option>
								<option>August</option>
								<option>September</option>
								<option>October</option>
								<option>November</option>
								<option>December</option>
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
	src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/admin/billing.js"></script>
	
	<script>
		$(document).ready(function(){
	 $("#master_data").css("display","block");
	 $("#master_data  li.billing_li a.billing_a").css("color","black");
	 $(".dx-toolbar-before").html('<strong class="font-16">System Billing</strong>');
});

	function yearFunction(){
		
		
			var value = $('#year_value').val();
			var html = '';
			if(value == '2017'){
				html += '<option>January</option><option>Febuary</option><option>March</option>'
				$('#month_value').html(''); 
				$('#month_value').append(html);
			}else{
				html = '<option>January</option><option>Febraury</option><option>March</option><option>April</option><option>May</option><option>June</option><option>July</option><option>August</option><option>September</option><option>October</option><option>November</option><option>December</option>';
			     $('#month_value').html(''); 
				$('#month_value').append(html);
			}
			
		}
</script>