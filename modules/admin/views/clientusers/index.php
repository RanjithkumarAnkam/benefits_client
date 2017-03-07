<section class="page-content">
	<div class="page-content-inner">

		<!-- clients -->
		<div class="dashboard-container">
   <div class="margin-bottom-10">
                <ul class="list-unstyled breadcrumb">
                    <li>
                        <a href="javascript: void(0);">Clients</a>
                    </li>
                    <li>
                        <a href="javascript: void(0);">Add Client User</a>
                    </li>
                   
                </ul>
            </div>
			<div class="row padding-bottom-20">
				<div class="col-md-12 header">
					<b>Client Users</b>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12 padding-bottom-20 padding-left-0 padding-right-0">

				<!-- div starting for Client Company Details  -->
					<div class="col-lg-4 col-xs-12 padding-bottom-10 padding-left-0">

						<section class="panel">
					<div class="panel-heading">
						<h3>Contact Information</h3>
					</div>
						<div class="panel-body">
						
						<div
							class="form-group form-md-line-input form-md-floating-label has-success">
							<select class="form-control edited" id="form_control_1">
								<option>Select Client Company List</option>
								<option>ABC Company</option>
							</select> <label for="form_control_1">Client Company<span
								class="imp-red">*</span></label>
						</div>



						<div
							class="form-group form-md-line-input form-md-floating-label has-success">
							<input type="text" required="" class="form-control"> <label>First Name<span
								class="imp-red">*</span></label> <span></span>
						</div>

						<div
							class="form-group form-md-line-input form-md-floating-label has-success">
							<input type="text" required="" class="form-control"> <label>Middle Name<span
								class="imp-red">*</span></label> <span></span>
						</div>
						
						<div
							class="form-group form-md-line-input form-md-floating-label has-success">
							<input type="text" required="" class="form-control"> <label>Last Name<span
								class="imp-red">*</span></label> <span></span>
						</div>

						<div
							class="form-group form-md-line-input form-md-floating-label has-success">
							<input type="text" required="" class="form-control"> <label>Your Title<span
								class="imp-red">*</span></label> <span></span>
						</div>
						
						<div
							class="form-group form-md-line-input form-md-floating-label has-success">
							<input type="text" required="" class="form-control"> <label>Email Id<span
								class="imp-red">*</span></label> <span></span>
						</div>
						
						<div class="row">
						<div class="col-md-12 padding-0">
						<div class="col-md-8">
							<div
							class="form-group form-md-line-input form-md-floating-label has-success margin-top-10">
							<input type="text" required="" class="form-control"> <label>Phone
								number<span class="imp-red">*</span>
							</label> <span></span>
						</div>

						</div>
						<div class="col-md-4">

						<div
							class="form-group form-md-line-input form-md-floating-label has-success margin-top-10">
							<input type="text" required="" class="form-control"> <label>Ext
								No.<span class="imp-red">*</span>
							</label> <span></span>
						</div>
						</div>
						</div>
						</div>
						
					</div>
					</section>
					</div>
                      <!-- div end for Client Company Details  -->
					<!-- div starting for Billing Information -->
					<div class="col-lg-4 col-xs-12 padding-bottom-10 padding-left-0">
						 
						
					<section class="panel">
					<div class="panel-heading">
						<h3>Access Priviledges</h3>
					</div>
					<div class="panel-body">
						<div
							class="form-group form-md-line-input form-md-floating-label has-success">
							<select class="form-control edited" id="form_control_1">
								<option>Admin Level Access</option>
								<option>No Admin Level Access</option>
							</select> <label for="form_control_1">Admin Level Access<span
								class="imp-red">*</span></label>
						</div>
						</div>
						</section>
						</div>
						
					<div class="col-lg-4 col-xs-12 padding-bottom-10 padding-left-0  padding-right-0">
							<section class="panel">
					<div class="panel-heading">
						<h3>Activate /Inactivate</h3>
					</div>
					
					<div class="panel-body">

						<div
							class="form-group form-md-line-input form-md-floating-label has-success">
							<select class="form-control edited" id="form_control_1">
								<option>Active</option>
								<option>In active</option>
							</select> <label for="form_control_1">Status<span class="imp-red">*</span></label>
						</div>
						</div>
						</section>
                       
                        
					</div>
						</div>
					</div>
				 	

				</div>
			</div>

			<div class="row">
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
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.16/angular.min.js"></script>
 <script src="https://cdn3.devexpress.com/jslib/16.2.4/js/dx.all.js"></script> 

	  	
 <script type="text/javascript"
	  	src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/admin/clientusers.js"></script>