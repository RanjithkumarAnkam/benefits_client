
  <section class="page-content  padding-0">
	<div class="page-content-inner">

	
		<div class="dashboard-container">

			<div class="header-main" id="header">
				<span class="font-18">Plan Details</span><a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl();  ?>/clients/manageplans?id=1" class="btn btn-success pull-right line-height-13"> Back</a>
			</div>
			<div class="col-md-12">

				<div class="load-gif" id="loadGif" style="display: block;">
					<div class="procressing_plz_wait">
						Processing please wait .... <img class="gif-img-prop"
							src="<?php echo Yii::$app->getUrlManager()->getBaseUrl();  ?>/images/j-max-loader.gif" />
					</div>
				</div>

				<!-- Loading GIF Div end -->

				<div class="panel-body" ng-app="DemoApp" ng-controller="DemoController">
					<div class="cui-ecommerce--cart">
						<div id="cart-checkout" class="cui-wizard">
							<h3>
								<i class="icmn-users4 cui-wizard--steps--icon"></i> <span
									class="cui-wizard--steps--title">Step 1</span>
							</h3>
							<section class="padding-0">
								<div class="col-lg-12 col-xs-12 padding-bottom-0 padding-left-0">


									<div class="widget widget-six col-md-12 padding-top-10 padding-bottom-10">
									
										<div class="panel-body">
										<h6 class="col-md-12 margin-top-10">Enter Plan Basics</h6>
							               <div class="col-md-12">
										   
										   <!-- 
										 <table style="width:100%">
											  <tr class="back-grey">
												<th>Plan Type(auto)</th>
												<th>Medical & Rx</th> 
											  </tr>
											    <tr>
												<td>Name of Plan *</td>
												<td><input type="text" class="form-control" value="Group Medical Plan"></td>
											  </tr>
											  <tr>
												<td>Administrative Carrier/Vendor*</td>
												<td><input type="text" class="form-control" value="United Health Care"></td>
											  </tr>
											   <tr>
												<td>Network*</td>
												<td><input type="text" class="form-control" value="UHC Plus"></td>
											  </tr>
											   <tr>
												<td>Pharmacy Benefit Manager *</td>
												<td><input type="text" class="form-control" value="Caremark"></td>
											  </tr>
											   <tr>
												<td>Renewal Plan Year *</td>
												<td><input type="text" class="form-control" value="2016"></td>
											  </tr>
											   <tr>
												<td>Annual Fee/Commission on Plan  *</td>
												<td><input type="text" class="form-control" value="$75,000"></td>
											  </tr>
											   <tr>
												<td>Budget</td>
												<td><input type="text" class="form-control" value="$1,345,555"></td>
											  </tr>
											   <tr>
												<td>Any Notes</td>
												<td><a href="#">+ Add Notes</a></td>
											  </tr>
											  <tr>
												<td>Plan Funding *</td>
												<td><input type="text" class="form-control" value="Partially Self Insured"></td>
											  </tr>
											  
											</table>
-->											
										 
								<div class="col-md-6">
									<div
										class="form-group form-md-line-input form-md-floating-label has-success margin-bottom-5">
										<input type="text" required="" value="Group Medical Plan" class="form-control borders"> <label
											class="padding-left-8 margin-bottom-0">Name of Plan <span
											class="imp-red">*</span></label> <span></span>
									</div>
								</div>

								<div class="col-md-6">
									<div
										class="form-group form-md-line-input form-md-floating-label has-success margin-bottom-5">
										<input type="text" required="" value="United Health Care" class="form-control borders"> <label
											class="padding-left-8 margin-bottom-0">Administrative Carrier/Vendor<span
											class="imp-red">*</span></label> <span></span>
									</div>
								</div>
										</div>
										
										 <div class="col-md-12">
								<div class="col-md-6">
									<div
										class="form-group form-md-line-input form-md-floating-label has-success margin-bottom-5">
										<input type="text" required="" value="UHC Plus" class="form-control borders"> <label
											class="padding-left-8 margin-bottom-0">Network* <span
											class="imp-red">*</span></label> <span></span>
									</div>
								</div>

								<div class="col-md-6">
									<div
										class="form-group form-md-line-input form-md-floating-label has-success margin-bottom-5">
										<input type="text" required="" value="Caremark" class="form-control borders"> <label
											class="padding-left-8 margin-bottom-0">Pharmacy Benefit Manager *<span
											class="imp-red">*</span></label> <span></span>
									</div>
								</div>
										</div>
										
										<div class="col-md-12">
								<div class="col-md-6">
									<div
										class="form-group form-md-line-input form-md-floating-label has-success margin-bottom-5">
										<input type="text" required="" value="2017" class="form-control borders"> <label
											class="padding-left-8 margin-bottom-0">Renewal Plan Year * <span
											class="imp-red">*</span></label> <span></span>
									</div>
								</div>

								<div class="col-md-6">
									<div
										class="form-group form-md-line-input form-md-floating-label has-success margin-bottom-5">
										<input type="text" required="" value="$2700.00" class="form-control borders"> <label
											class="padding-left-8 margin-bottom-0">Annual Fee/Commission on Plan *<span
											class="imp-red">*</span></label> <span></span>
									</div>
								</div>
										</div>
										
										<div class="col-md-12">
								<div class="col-md-6">
									<div
										class="form-group form-md-line-input form-md-floating-label has-success margin-bottom-5">
										<input type="text" required="" value="$1,345,555" class="form-control borders"> <label
											class="padding-left-8 margin-bottom-0">Budget	 <span
											class="imp-red">*</span></label> <span></span>
									</div>
								</div>

								<div class="col-md-6">
										<div
										class="form-group form-md-line-input form-md-floating-label has-success margin-bottom-5">
										<input type="text" required="" value="$500.00" class="form-control borders"> <label
											class="padding-left-8 margin-bottom-0">Contract Pooling Level<span
											class="imp-red">*</span></label> <span></span>
									</div>
								</div>
										</div>
										
										<div class="col-md-12">
										<div class="col-md-6">
										<div class="form-group form-md-line-input form-md-floating-label">
                                                    <textarea class="form-control" rows="1"></textarea>
                                                    <label for="form_control_1" class=" margin-bottom-0">Any Notes</label>
                                                </div>
								
								</div>
									<div class="col-md-6">
									<div class="form-group form-md-line-input form-md-floating-label has-success margin-bottom-5">
										<input type="text" required="" value="Fully Insured" class="form-control borders"> <label
											class="padding-left-8 margin-bottom-0">Plan Funding <span
											class="imp-red">*</span></label> <span></span>
									</div>
								</div>
									
								</div>
									</div>
								</div>
								</div>
								<!-- div end for Client Company Details  -->
							</section>

							
							<h3>
								<i class="icmn-info cui-wizard--steps--icon"></i> <span
									class="cui-wizard--steps--title">Step 2</span>
							</h3>
							<section class="padding-0">
								<div class="col-lg-12 col-xs-12 padding-bottom-10 padding-left-0">
							 <div class="widget widget-six col-md-12">
							<h6 class="col-md-12 margin-top-10">Plans and Fully Insured Rates</h6>
							 
                                    <div class="row">
												
													<div class="widget widget-six col-md-12">

														<div class="panel-body">

															<!-- div starting for Manage Clients grid -->
															<div class="">
																<div class="demo-container" >
																	<div dx-data-grid="dataGridOptions3"></div>
																</div>
															</div>

															<!-- div end for Manage Clients grid -->
														</div>
													</div>
												
											</div>
                                    </div>
									</div>
									</section>

							<h3>
								<i class="icmn-link2 cui-wizard--steps--icon"></i> <span
									class="cui-wizard--steps--title">Step 3</span>
							</h3>
							<section class="padding-0">
								<div class="col-lg-12 col-xs-12 padding-bottom-10 padding-left-0">
								 <div class="widget widget-six col-md-12">
										<h6 class="col-md-12 margin-top-10">Enter Renewal Projection Assumptions</h6>
										<div class="col-md-12">
											<div class="md-radio-list">
														<div class="md-radio">
															<input type="radio" id="radio10" name="radio10" checked
																class="md-radiobtn"> <label for="radio10"> <span
																class="inc"></span> <span class="check"></span> <span
																class="box"></span> Target Claims Ratio
															</label>
														</div>
                                                        
														<div class="md-radio">
															<input type="radio" id="radio11" name="radio10"
																class="md-radiobtn"> <label for="radio11"> <span
																class="inc"></span> <span class="check"></span> <span
																class="box"></span> Assumed Renewal %
															</label>
														</div>

													</div>
											<div class="">
											<label>Enter Assumed% : </label>
											<label>75.00%</label>
														</div>		
													</div>
													</div>
								</div>
							</section>

							<h3>
								<i class="icmn-coins cui-wizard--steps--icon"></i> <span
									class="cui-wizard--steps--title">Step 4</span>
							</h3>
							<section class="padding-0">
								<div class="col-lg-12 col-xs-12 padding-bottom-10 padding-left-0">
									<div
										class="widget widget-six col-md-12 padding-top-10 padding-bottom-10">
										
										<div class="panel-body">
												<h6 class="col-md-12 margin-top-10">Including :</h6>
                                    <div class="col-md-12 padding-left-30">
									<ul>
									<li>Monthly claims</li>
									<li>Monthly enrollment</li>
									<li>Claims reimbursements</li>
									<li>Fixed costs</li>
									<li>Large claims</li>
									<li>Network performance</li>
									<li>Pharmacy benefit manager performance</li>
									
									</ul>
								<!--	<div class="col-md-12"><a class="btn btn-success pull-right">Go</a></div>
									</div>-->
										</div>
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

<script type="text/javascript">
		$(document).ready(function(){
		
 $("#clients_id_ul").css("display","block");
		  $("#clients_id").addClass("left-menu-list-opened");
	 $("#clients_id  li.manage_plans_li a.manage_plans").css("color","black");
		
	 
		    $("#cart-checkout").steps({
		        headerTag: "h3",
		        bodyTag: "section",
		        transitionEffect: 0,
		        autoFocus: true
		    });
			
			
		    // Basic
            $('.dropify').dropify();

            // Translated
            $('.dropify-fr').dropify({
                messages: {
                    default: 'Glissez-déposez un fichier ici ou cliquez',
                    replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                    remove:  'Supprimer',
                    error:   'Désolé, le fichier trop volumineux'
                }
            });

            // Used events
            var drEvent = $('#input-file-events').dropify();

            drEvent.on('dropify.beforeClear', function(event, element){
                return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
            });

            drEvent.on('dropify.afterClear', function(event, element){
                alert('File deleted');
            });

            drEvent.on('dropify.errors', function(event, element){
                console.log('Has Errors');
            });

            var drDestroy = $('#input-file-to-destroy').dropify();
            drDestroy = drDestroy.data('dropify')
            $('#toggleDropify').on('click', function(e){
                e.preventDefault();
                if (drDestroy.isDropified()) {
                    drDestroy.destroy();
                } else {
                    drDestroy.init();
                }
            })
 $(".dx-toolbar-before").html('<strong class="font-16">Monthly Financials</strong>');
});
window.onload = function(){
	 setTimeout(function() {
   $("#loadGif").hide();
  }, 1000);
  
	var lielement = '<li class="" aria-disabled="false"><a role="menuitem">Update</a></li>';
			
			$('.actions>ul').append(lielement);
			$('.steps >ul>li').removeClass('disabled');
			$('.steps >ul>li').addClass('done');
};
</script>
<style>

th, td {
    padding: 5px;
}
.back-grey{
	background:#eceff4 !important
}
</style>

<script
	src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.2/jszip.min.js"></script>
<script
	src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.16/angular.min.js"></script>
<script src="https://cdn3.devexpress.com/jslib/16.2.4/js/dx.all.js"></script>


<script type="text/javascript"
	src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/firm/medicalplandetails.js"></script>