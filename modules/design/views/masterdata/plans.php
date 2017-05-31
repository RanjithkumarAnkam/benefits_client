<?php
?>

	<div class="page-content-inner">

		<!-- clients -->
		<div class="dashboard-container">

	<div class="col-md-12 col-xs-12 header-main">
				<div class="col-md-12 col-xs-12">
					<span class="font-18">Plans</span> <span
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
					
							<!-- <div class="widget-header">
							<strong class="margin-right-10">Manage Admin Users</strong>	 
							</div>-->
							<div class="panel-body">
							
							<?php if(Yii::$app->user->identity->usertype == 1){?>
							
							<div class="row">
							<div class="col-md-12 padding-top-10 padding-bottom-10">
							<div class="col-md-2 padding-left-8"><label class="margin-top-10"><b> Select a Module :</b></label></div>
								<div class="col-md-4">
								<select class="form-control">
								<option selected="" value="Tata Firm">Plan Claims Reporting</option>
						         
								</select></div>
								</div>
								</div>
								
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
								<?php }?>
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
	</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.2/jszip.min.js"></script>
<script
	src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.16/angular.min.js"></script>
<script src="https://cdn3.devexpress.com/jslib/16.2.4/js/dx.all.js"></script>


<script type="text/javascript"
	src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/firm/masterdata.js"></script>
	
	<script>
	$(document).ready( function (){
		 $("#master_data_ul").css("display","block");
		  $("#master_data").addClass("left-menu-list-opened");
	      $("#master_data  li.lookup_li a.lookup_a").css("color","black");
		 $(".dx-toolbar-before").html('<strong class="font-16">Plans</strong>');
	});
	
	</script>