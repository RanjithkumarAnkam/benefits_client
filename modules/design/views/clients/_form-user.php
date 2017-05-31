

<!-- Loading GIF Div start -->
<div class="load-gif" id="loadGif" style="display: block;">
	<div class="procressing_plz_wait">
		Processing please wait .... <img class="gif-img-prop"
			src="<?php echo Yii::$app->getUrlManager()->getBaseUrl();  ?>/images/j-max-loader.gif" />
	</div>
</div>

<!-- Loading GIF Div end -->

<div class="panel-body">
	<div class="cui-ecommerce--cart">
		<div id="cart-checkout" class="cui-wizard">
			<h3>
				<i class="icmn-info cui-wizard--steps--icon"></i> <span
					class="cui-wizard--steps--title">Contact Information</span>
			</h3>
			<section class="padding-0">
				<div class="col-lg-12 col-xs-12 padding-bottom-0 padding-left-0">


					<div class="widget widget-six col-md-12 padding-top-10 padding-bottom-10">
						<!--<div class="widget-header">

							<strong class="margin-right-10">Contact Information</strong>

						</div>-->
						<div class="panel-body">
							<div class="col-md-12">
							
							<div class="col-md-4">
									<label for="form_control_1" class="padding-left-8 margin-bottom-0 font-14 padding-bottom-5 color-blue">Client Company</label>
							 <select class="form-control edited select-border-color" id="form_control">
									<option>Select Client Company List</option>
							<option>ABC Company</option>
							</select> 
						
					
								</div>
							


								<div class="col-md-4">
									
					<div
						class="form-group form-md-line-input form-md-floating-label has-success margin-bottom-5 margin-top-8">
						<input type="text" required="" class="form-control borders"> <label  class="margin-bottom-0">First
							Name<span class="imp-red">*</span>
						</label> <span></span>
					</div>

				
								</div>


								<div class="col-md-4">
										<div
						class="form-group form-md-line-input form-md-floating-label has-success margin-bottom-5 margin-top-8">
						<input type="text" required="" class="form-control borders"> <label  class="margin-bottom-0">Middle
							Initial<span class="imp-red">*</span>
						</label> <span></span>
					</div>

				
								</div>
							</div>


							<div class="col-md-12">
								<div class="col-md-4">
										<div
						class="form-group form-md-line-input form-md-floating-label has-success margin-bottom-5">
						<input type="text" required="" class="form-control borders"> <label class="margin-bottom-0" >Last
							Name<span class="imp-red">*</span>
						</label> <span></span>
					</div>

					
								</div>


								<div class="col-md-4">
									<div
						class="form-group form-md-line-input form-md-floating-label has-success margin-bottom-5">
						<input type="text" required="" class="form-control borders"> <label class="margin-bottom-0">Your
							Title<span class="imp-red">*</span>
						</label> <span></span>
					</div>

					
								</div>


								<div class="col-md-4">
									<div
						class="form-group form-md-line-input form-md-floating-label has-success margin-bottom-5">
						<input type="text" required="" class="form-control borders"> <label class="margin-bottom-0">Email
							Id<span class="imp-red">*</span>
						</label> <span></span>
					</div>

					
								</div>
							</div>


							<div class="col-md-12">
								<div class="col-md-4">
									<div class="row">
						<div class="col-md-12 padding-0">
							<div class="col-md-8">
								<div
									class="form-group form-md-line-input form-md-floating-label has-success margin-bottom-5">
									<input type="text" required="" class="form-control borders"> <label class="margin-bottom-0">Phone
										number<span class="imp-red">*</span>
									</label> <span></span>
								</div>

							</div>
							<div class="col-md-4">

								<div
									class="form-group form-md-line-input form-md-floating-label has-success margin-bottom-5">
									<input type="text" required="" class="form-control borders"> <label class="margin-bottom-0">Ext
										No.<span class="imp-red">*</span>
									</label> <span></span>
								</div>
							</div>
						</div>
					</div>
								
								</div>


								<div class="col-md-4">
									
								</div>


								<div class="col-md-4">
								
								</div>
							</div>



							


						</div>
					</div>
				</div>
				<!-- div end for Client Company Details  -->
			</section>

			<h3>
				<i class="icmn-user-check cui-wizard--steps--icon"></i> <span
					class="cui-wizard--steps--title">Access Priviledge</span>
			</h3>
			<section class="padding-0">
				<div class="col-lg-12 col-xs-12 padding-bottom-10 padding-left-0">


					<div class="widget widget-six col-md-12 padding-top-10 padding-bottom-10">
					<!--	<div class="widget-header">

							<strong class="margin-right-10">Access Priviledge</strong>

						</div>-->
						<div class="panel-body">
							<div class="col-md-12">
								<div class="col-md-4">
								<div class="form-group form-md-checkboxes">
		<label for="form_control_1">Permissions</label>
		<div class="md-checkbox-list">
			<div class="md-checkbox">
				<input type="checkbox" id="checkbox2_1" name="checkboxes1[]" value="1" class="md-check" checked>
				<label for="checkbox2_1">
					<span class="inc"></span>
					<span class="check"></span>
					<span class="box"></span> Admin Access</label>
			</div>
			<div class="md-checkbox">
				<input type="checkbox" id="checkbox2_2" name="checkboxes1[]" value="1" class="md-check">
				<label for="checkbox2_2">
					<span></span>
					<span class="check"></span>
					<span class="box"></span>  Firm Access </label>
			</div>
			<div class="md-checkbox">
				<input type="checkbox" id="checkbox2_3" name="checkboxes1[]" value="1" class="md-check">
				<label for="checkbox2_3">
					<span></span>
					<span class="check"></span>
					<span class="box"></span>  Clent Access </label>
			</div>
		</div>
	</div>
								</div>

								<div class="col-md-8 margin-top-100" id="save_button">
					<button type="button" class="btn btn-success pull-right">Save</button>
				</div>
							</div>


							
						</div>
					</div>
				</div>
			</section>

			<!--<h3>
				<i class="icmn-toggle-off cui-wizard--steps--icon"></i> <span
					class="cui-wizard--steps--title">Active / Inactive</span>
			</h3>
			<section class="padding-0">
				<div class="col-lg-12 col-xs-12 padding-bottom-10 padding-left-0">


					<div class="widget widget-six col-md-12">-->
					<!--	<div class="widget-header">

							<strong class="margin-right-10">Active / Inactive</strong>

						</div>-->
					<!--	<div class="panel-body">
							<div class="col-md-12 padding-top-10">
								<div class="col-md-4">
										<div class="row">
										<div class="form-group col-md-12">
											<div class="row">
												<div class="col-md-12">
												<label for="form_control_1">Status</label>
														<div class="md-radio-list">
															<div class="md-radio">
																<input type="radio" id="radio1" name="radio1"
																	class="md-radiobtn"> <label for="radio1"> <span
																	class="inc"></span> <span class="check"></span> <span
																	class="box"></span> Active
																</label>
															</div>
															<div class="md-radio">
																<input type="radio" id="radio2" name="radio1"
																	class="md-radiobtn" checked=""> <label for="radio2"> <span
																	class="inc"></span> <span class="check"></span> <span
																	class="box"></span> Inactive
																</label>
															</div>
													
														</div>
												
												</div>
											</div>


										</div>
									</div>
								</div>
								
			
				<div class="col-md-8 margin-top-60">
					<button type="button" class="btn btn-success pull-right">Save & Update</button>
				</div>
				
							</div>
						</div>
					</div>
				</div>
			</section>-->

			

		</div>
	</div>
</div>

<div class="row padding-top-20 padding-bottom-20">
	<div class="col-lg-12">
		<div class="widget widget-six col-md-12">
						
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
		</div>
	</div>
</div>


 <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.2/jszip.min.js"></script>
 <script
	src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.16/angular.min.js"></script>
<script src="https://cdn3.devexpress.com/jslib/16.2.4/js/dx.all.js"></script>


<script type="text/javascript"
	src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/admin/clientusers.js"></script>
	<script type="text/javascript">
$(document).ready(function(){
//$("#loadGif").show();
	$("#clients_id").addClass("left-menu-list-opened");
	 $("#clients_id_ul").css("display","block");
	 
	 $("#clients_id_ul  li.client_users_li a.client-users").css("color","black");
	 $(".cui-wizard .actions li a[href='#next']").addClass("button");
	 
	$(".dx-toolbar-before").html('<strong class="font-16">Manage Client Users</strong>');
	 $(".actions").addClass("padding-top-0");

	   $("#cart-checkout").steps({
	        headerTag: "h3",
	        bodyTag: "section",
	        transitionEffect: 0,
	        autoFocus: true
	    });
	 
});
window.onload = function(){
	 setTimeout(function() {
   $("#loadGif").hide();
  }, 1000);
	
};
</script> 
