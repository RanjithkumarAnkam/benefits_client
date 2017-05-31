<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use kartik\grid\GridView;



?>
<style>
body.body-blue .arrow-icon-2{
    background: transparent;
    opacity: 0.7 !important;
    min-width: 203px !important;
    margin-top: 13px !important;
}
body.body-blue .btn-group>.arrow-icon-2:before, .dropdown-toggle>.arrow-icon-2:before, .dropdown>.arrow-icon-2:before{
	content:none;
}
body.body-blue .btn-group>.arrow-icon-2:after, .dropdown-toggle>.arrow-icon-2:after, .dropdown>.arrow-icon-2:after{
	content:none;
}
body.body-blue .dropdown-menu .dropdown-list:hover{
    background: transparent;
}
.nav-tabs-horizontal .nav-tabs .nav-item .plan-link.active:hover{
	border-bottom-color:white!important ;
}
.nav-tabs-horizontal .nav-tabs .nav-item .plan-link.active, .nav-tabs-horizontal .nav-tabs .nav-item .plan-link:focus{
	border-bottom-color:white!important ;
}
.nav-tabs-horizontal .nav-tabs .nav-item .plan-link.active{
	background:none !important;
}
.nav-tabs-horizontal .nav-tabs .nav-item .plan-link:hover{
	border-bottom-color:white!important ;
}
body.body-blue .plan-link:hover{
	color:white !important ;
}
body.body-blue .plan-link.active{
	color:white !important;
}
</style>
<section class="page-content padding-0">
	<div class="dashboard-container">

			<div class="col-md-12 padding-0">
				 
				<div class="breadcrumb-description-plans">
				<div class="col-md-12 blue-breadcrumb-plans ">
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 padding-right-0 padding-left-0">
				 
				<div class="breadcrumb-description color-white padding-right-0 padding-left-0">
					<span class="">Clients &#62; Client Name</span>

				</div>
				</div>
				<div class="col-lg-4 col-md-8 col-sm-8 col-xs-8 padding-top-7">
				<div class="" align="center">
                        <div class="nav-tabs-horizontal">
                            <ul class="nav nav-tabs border-bottom" role="tablist">
                                <li class="nav-item hover width-27">
                                    <a class="nav-link plan-link active color-white no-wrap" href="javascript: void(0);" data-toggle="tab" onclick="tabChange(1);" data-target="#home1" role="tab">Medical Plan</a>
                                </li>
                                <li class="nav-item hover width-27">
                                    <a class="nav-link plan-link color-white no-wrap" href="javascript: void(0);" data-toggle="tab" onclick="tabChange(2);" data-target="#profile1" role="tab">Dental Plan</a>
                                </li>
                                <li class="nav-item hover width-27 ">
                                    <a class="nav-link plan-link color-white dropdown-icon-li no-wrap" href="javascript: void(0);" onclick="tabChange(3);" data-toggle="tab" data-target="#messages1" role="tab">Vision Plan</a>
                              
                              <div class="dropdown line-height-0">
										<a
											class="pull-right dropdown-months dropdown-toggle back-drop"
											data-toggle="dropdown">  <i class="fa fa-caret-down color-white vertical-align-bottom" aria-hidden="true"></i>

										</a>
										<ul class="dropdown-menu">
											<li><a href="#">Plan 1</a></li>
											<li><a href="#">Plan 2</a></li>
											<li><a href="#">Plan 3</a></li>
										</ul>
									</div>
									
                                </li>
                            
                               <li class="color-white">
                                  <span class="glyphicon glyphicon-plus margin-top-9 cursor-pointer"  data-toggle="tooltip" data-placement="bottom" title="Add New Plan"></span>
                                    <span  data-toggle="tooltip" data-placement="bottom" title="Edit Plan">    <a class="glyphicon glyphicon-pencil margin-top-9 cursor-pointer color-white edit-plan" id="edit_plan" data-toggle="modal" ></a> </span>
                                </li>
                                
                            </ul>
                            
                        </div>
                        
                    </div>
				</div>
				<div class="col-lg-4">
				</div>
				</div>
					<div class="container">
			<div class="col-md-12">
					<div class="tab-content padding-vertical-20">
                                <div class="tab-pane active" id="home1" role="tabpanel">
                                    <div class="col-md-2">
                               </div>
                               <div class="col-md-10" align="center">
                               <div class="col-md-2 fontcolor-blue"><u>Jan 17 - Dec 17</u></div>
                               <div class="col-md-2">Jan 16 - Dec 16</div>
                               <div class="col-md-2">Jan 15 - Dec 15</div>
                               <div class="col-md-2">Jan 14 - Dec 14
                                 <div class="dropdown line-height-0">
										<a
											class="pull-right dropdown-months dropdown-toggle back-drop"
											data-toggle="dropdown">  <i class="fa fa-caret-down vertical-align-bottom" aria-hidden="true"></i>

										</a>
										<ul class="dropdown-menu">
											<li><a href="#">Jan 13 - Dec 13</a></li>
											<li><a href="#">Jan 12 - Dec 12</a></li>
											<li><a href="#">Jan 11 - Dec 11</a></li>
										</ul>
									</div>
                                </div>
                               <div class="col-md-2">
                             <span   data-toggle="tooltip"  data-placement="bottom" title="Add New Plan Year"> <a class="glyphicon glyphicon-plus cursor-pointer" data-toggle="modal" data-target="#medical"></a></span>
                                     <a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl();?>/firm-plan/client-medical-self-insured#home2" class="glyphicon glyphicon-pencil cursor-pointer"  data-toggle="tooltip" data-placement="bottom" title="Edit Plan Year"></a>
                                     </div>
                               </div>
                              
                                </div>
                                <div class="tab-pane" id="profile1" role="tabpanel">
                                     <div class="col-md-2">
                               </div>
                               <div class="col-md-10" align="center">
                               <div class="col-md-2 fontcolor-blue"><u>Jan 17 - Dec 17</u></div>
                              <div class="col-md-2">Jan 16 - Dec 16</div>
                               <div class="col-md-2">Jan 15 - Dec 15</div>
                               <div class="col-md-2">Jan 14 - Dec 14
                                 <div class="dropdown line-height-0">
										<a
											class="pull-right dropdown-months dropdown-toggle back-drop"
											data-toggle="dropdown">  <i class="fa fa-caret-down vertical-align-bottom" aria-hidden="true"></i>

										</a>
										<ul class="dropdown-menu">
											<li><a href="#">Jan 13 - Dec 13</a></li>
											<li><a href="#">Jan 12 - Dec 12</a></li>
											<li><a href="#">Jan 11 - Dec 11</a></li>
										</ul>
									</div>
                                </div>
                               <div class="col-md-2">
                            <span   data-toggle="tooltip"  data-placement="bottom" title="Add New Plan Year"> <a class="glyphicon glyphicon-plus cursor-pointer" data-toggle="modal" data-target="#dental"></a></span>
                                     <a  href="<?php echo Yii::$app->getUrlManager()->getBaseUrl();?>/firm-plan/client-dental-self-insured#home2" class="glyphicon glyphicon-pencil cursor-pointer" data-toggle="tooltip" data-placement="bottom" title="Edit Plan Year"></a>
                                     </div>
                               </div>
                           
                                </div>
                                <div class="tab-pane" id="messages1" role="tabpanel">
                                       <div class="col-md-2">
                               </div>
                               <div class="col-md-10" align="center">
                               <div class="col-md-2 fontcolor-blue"><u>Jan 17 - Dec 17</u></div>
                               <div class="col-md-2">Jan 16 - Dec 16</div>
                               <div class="col-md-2">Jan 15 - Dec 15</div>
                               <div class="col-md-2">Jan 14 - Dec 14
                                 <div class="dropdown line-height-0">
										<a
											class="pull-right dropdown-months dropdown-toggle back-drop"
											data-toggle="dropdown">  <i class="fa fa-caret-down vertical-align-bottom" aria-hidden="true"></i>

										</a>
										<ul class="dropdown-menu">
											<li><a href="#">Jan 13 - Dec 13</a></li>
											<li><a href="#">Jan 12 - Dec 12</a></li>
											<li><a href="#">Jan 11 - Dec 11</a></li>
										</ul>
									</div>
                                </div>
                               <div class="col-md-2">
							   
                               <span   data-toggle="tooltip"  data-placement="bottom" title="Add New Plan Year"> <a class="glyphicon glyphicon-plus cursor-pointer" data-toggle="modal" data-target="#vision"></a></span>
                                     <a  href="<?php echo Yii::$app->getUrlManager()->getBaseUrl();?>/firm-plan/client-vision-self-insured#home2" class="glyphicon glyphicon-pencil cursor-pointer"  data-toggle="tooltip" data-placement="bottom" title="Edit Plan Year"></a>
                                     </div>
                               </div>
                            
                             
                            </div>
                            </div>
					</div>
				</div>

			</div>
		</div>
	
	<script>
	
	function tabChange(id){
		$('#edit_plan').attr('data-target','');
		if(id == 1 ){
			$('#edit_plan').attr('data-target','#medical');
		}else if(id == 2){
			$('#edit_plan').attr('data-target','#dental');
		}else{
			$('#edit_plan').attr('data-target','#vision');
		}
			
	
	}
</script>
	</section>
					<div class="modal fade" id="medical" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header modal-header-color">
							 
							<button type="button" class="close-modal modal-opacity close-modal-blue" data-dismiss="modal" aria-hidden="true">
								X
							</button>
							<h4 class="modal-title color-white" id="myModalLabel">
								Group Medical Plan
							</h4>
						</div>
						<div class="modal-body row">
							
                         <form>
						 <div class="col-md-12">
						 <div class="col-md-6">
						   <div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Plan</label>
                                </div>
                                <div class="col-md-8 form-group ">
                             <input type="text" class="form-control" placeholder="First Name" Value="Group Medical Plan" disabled >
                                </div>
                            </div>
						 </div>
						  <div class="col-md-6">
						   <div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Plan Year</label>
                                </div>
                                <div class="col-md-8 form-group ">
                             <select class="form-control">
							 <option>Prior</option>
							 <option selected="">Current</option>
							 <option>Renewal</option>
							 </select>
                                </div>
                            </div>
						 </div>
						 </div>
						 
						  <div class="col-md-12">
						 
						  <div class="col-md-6">
						   <div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Start Date: *</label>
                                </div>
                                <div class="col-md-8 form-group ">
                             <input type="text" class="form-control datepicker-only-init" placeholder="Select Date" />
                                </div>
                            </div>
						 </div>
						  <div class="col-md-6">
						   <div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">End Date: *</label>
                                </div>
                                <div class="col-md-8 form-group ">
                             <input type="text" class="form-control datepicker-only-init" placeholder="Select Date" />
                                </div>
                            </div>
						 </div>
						 </div>
						   <div class="col-md-12">
						<div class="col-md-6">
						  <div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Plan Year Title</label>
                                </div>
                                <div class="col-md-8 form-group ">
                             <input type="text" class="form-control" placeholder="Plan Year Title"  >
                                </div>
                            </div>
						 </div>
						<div class="col-md-6">
						   <div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Plan Funding:</label>
                                </div>
                                <div class="col-md-8 form-group ">
                           <select class="form-control">
								<option>Partially Self Insured</option>
								<option>Fully Insured</option>
								<option>Level Insured</option>
								</select>
                                </div>
                            </div>
						 </div>
						 </div>
                        </form>

											
								</div>
								
							<div class="modal-footer">
							 <a href=""  class="btn btn-modal-blue">
								Save
							</a>
							
							<button type="button" class="btn btn-default" data-dismiss="modal">
								Close
							</button> 
							
						</div>
						</div>
						
					</div>
					
				</div>
				
					
<div class="modal fade" id="dental" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header modal-header-color">
							 
							<button type="button" class="close-modal modal-opacity  close-modal-blue" data-dismiss="modal" aria-hidden="true">
								X
							</button>
							<h4 class="modal-title color-white" id="myModalLabel">
								Group Dental Plan
							</h4>
						</div>
						<div class="modal-body row">
							
                         <form>
						 <div class="col-md-12">
						 <div class="col-md-6">
						   <div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Plan</label>
                                </div>
                                <div class="col-md-8 form-group ">
                             <input type="text" class="form-control" placeholder="First Name" Value="Group Dental Plan" disabled >
                                </div>
                            </div>
						 </div>
						  <div class="col-md-6">
						   <div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Plan Year</label>
                                </div>
                                <div class="col-md-8 form-group ">
                            <select class="form-control">
							 <option>Prior</option>
							 <option selected="">Current</option>
							 <option>Renewal</option>
							 </select>
                                </div>
                            </div>
						 </div>
						 </div>
						 
						  <div class="col-md-12">
						 
						
						  <div class="col-md-6">
						   <div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Start Date: *</label>
                                </div>
                                <div class="col-md-8 form-group ">
                             <input type="text" class="form-control datepicker-only-init" placeholder="Select Date" />
                                </div>
                            </div>
						 </div>
						 
						   <div class="col-md-6">
						   <div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">End Date: *</label>
                                </div>
                                <div class="col-md-8 form-group ">
                             <input type="text" class="form-control datepicker-only-init" placeholder="Select Date" />
                                </div>
                            </div>
						 </div>
						 </div>
						   <div class="col-md-12">
						 <div class="col-md-6">
						  <div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Plan Year Title</label>
                                </div>
                                <div class="col-md-8 form-group ">
                             <input type="text" class="form-control" placeholder="Plan Year Title"  >
                                </div>
                            </div>
						 </div>
						  <div class="col-md-6">
						   <div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Plan Funding:</label>
                                </div>
                                <div class="col-md-8 form-group ">
                            <select class="form-control">
								<option>Partially Self Insured</option>
								<option>Fully Insured</option>
								</select>
                                </div>
                            </div>
						 </div>
						 </div>
                        </form>

											
								</div>
								
							<div class="modal-footer">
							 <a href=""  class="btn btn-modal-blue">
								Save
							</a>
							<button type="button" class="btn btn-default" data-dismiss="modal">
								Close
							</button> 
							
						</div>
						</div>
						
					</div>
					
				</div>
				
					
<div class="modal fade" id="vision" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header modal-header-color">
							 
							<button type="button" class="close-modal modal-opacity  close-modal-blue" data-dismiss="modal" aria-hidden="true">
								X
							</button>
							<h4 class="modal-title color-white" id="myModalLabel">
								Group Vision Plan
							</h4>
						</div>
						<div class="modal-body row">
							
                         <form>
						 <div class="col-md-12">
						 <div class="col-md-6">
						   <div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Plan</label>
                                </div>
                                <div class="col-md-8 form-group ">
                             <input type="text" class="form-control" placeholder="First Name" Value="Group Vision Plan" disabled >
                                </div>
                            </div>
						 </div>
						  <div class="col-md-6">
						   <div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Plan Year</label>
                                </div>
                                <div class="col-md-8 form-group ">
                             <select class="form-control">
							 <option>Prior</option>
							 <option selected="">Current</option>
							 <option>Renewal</option>
							 </select>
                                </div>
                            </div>
						 </div>
						 </div>
						 
						  <div class="col-md-12">
						
						  <div class="col-md-6">
						   <div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Start Date: *</label>
                                </div>
                                <div class="col-md-8 form-group ">
                             <input type="text" class="form-control datepicker-only-init" placeholder="Select Date" />
                                </div>
                            </div>
						 </div>
						  <div class="col-md-6">
						   <div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">End Date: *</label>
                                </div>
                                <div class="col-md-8 form-group ">
                             <input type="text" class="form-control datepicker-only-init" placeholder="Select Date" />
                                </div>
                            </div>
						 </div>
						 </div>
						   <div class="col-md-12">
						
						  <div class="col-md-6">
						  <div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Plan Year Title</label>
                                </div>
                                <div class="col-md-8 form-group ">
                             <input type="text" class="form-control" placeholder="Plan Year Title"  >
                                </div>
                            </div>
						 </div>
						  <div class="col-md-6">
						   <div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Plan Funding:</label>
                                </div>
                                <div class="col-md-8 form-group ">
								<select class="form-control">
								<option>Partially Self Insured</option>
								<option>Fully Insured</option>
								</select>
                           
                                </div>
                            </div>
						 </div>
						 </div>
                        </form>

											
								</div>
								
							<div class="modal-footer">
							 
							<a href=""  class="btn btn-modal-blue">
								Save
							</a>
							<button type="button" class="btn btn-default" data-dismiss="modal">
								Close
							</button> 
						</div>
						</div>
						
					</div>
					
				</div>