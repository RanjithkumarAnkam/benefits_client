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
.nav-tabs > li > span > a.custom{
     margin-right: 0px !important;
     line-height: 1 !important; 
     border: 0px solid transparent !important;
         padding: 10px 10px !important;
}
</style>
<section class="page-content padding-0">
	<div class="dashboard-container">

			<div class="col-md-12 padding-0">
				 
				<div class="breadcrumb-description-plans">
				<div class="col-md-12 blue-breadcrumb-plans ">
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 padding-right-0 padding-left-0">
				 
				<div class="breadcrumb-description color-white padding-right-0 padding-left-0">
					<span class="">Clients &#62; Client Name</span>

				</div>
				</div>
				
						<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 padding-right-0 padding-left-0">
				 
				<div class="breadcrumb-description color-white padding-right-0 padding-left-0">
					<span class="font-18">Plans :</span>

				</div>
				</div>
				
				
				<div class="col-lg-6 col-md-8 col-sm-8 col-xs-8 padding-top-7">
				<div class="" align="center">
                        <div class="nav-tabs-horizontal">
                            <ul class="nav nav-tabs border-bottom" role="tablist">
                                <li class="nav-item hover width-27">
                                    <a class="nav-link plan-link active color-white no-wrap" href="javascript: void(0);" data-toggle="tab" onclick="tabChange(1);" data-target="#home1" role="tab">Medical Plan
									 <span data-toggle="tooltip" data-placement="bottom" title="Edit Plan" class="" id="medical_edit" ><span  class="glyphicon glyphicon-pencil cursor-pointer color-white" data-target="#medical" data-toggle="modal" >  </span></span>
									 </a>
									 
                                </li>
                                <li class="nav-item hover width-27">
                                    <a class="nav-link plan-link color-white no-wrap" href="javascript: void(0);" data-toggle="tab" onclick="tabChange(2);" data-target="#profile1" role="tab">Dental Plan
                              <span data-toggle="tooltip" data-placement="bottom" title="Edit Plan" class="hide" id="dental_edit"><span  class="glyphicon glyphicon-pencil cursor-pointer color-white" data-target="#dental" data-toggle="modal" >  </span></span></a>
							 </li>
                                <li class="nav-item hover width-27 ">
                                    <a class="nav-link plan-link color-white no-wrap" href="javascript: void(0);" onclick="tabChange(3);" data-toggle="tab" data-target="#messages1" role="tab">Vision Plan
									 <span data-toggle="tooltip" data-placement="bottom" title="Edit Plan" class="hide" id="vision_edit"><span  class="glyphicon glyphicon-pencil cursor-pointer color-white" data-target="#vision" data-toggle="modal" >  </span></span>
									 </a>
                              
                          <!--  dropdown-icon-li   <div class="dropdown line-height-0">
										<a
											class="pull-right dropdown-months dropdown-toggle back-drop"
											data-toggle="dropdown">  <i class="fa fa-caret-down color-white vertical-align-bottom" aria-hidden="true"></i>

										</a>
										<ul class="dropdown-menu">
											<li><a href="#">Plan 1</a></li>
											<li><a href="#">Plan 2</a></li>
											<li><a href="#">Plan 3</a></li>
										</ul>
									</div>-->
									
                                </li>
                            
                               <li class="color-white  margin-top-7"> 
                                    <span  data-toggle="tooltip" data-placement="bottom" title="Add Plan Year"> <a class="cursor-pointer color-white"  id="add_plan_year" data-toggle="modal" data-target="#medical"><u> Add</u></a></span>
                                </li>
                                
                            </ul>
                            
                        </div>
                        
                    </div>
				</div>
				<div class="col-lg-4">
				</div>
				</div>
					<div class="col-md-12 blue-breadcrumb-plans-down" >
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 padding-right-0 padding-left-0">
				 
				 
				</div>
				
						<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 padding-right-0 padding-left-0">
				 
			<div class="breadcrumb-description color-white padding-right-0 padding-left-0">
			<span class="font-18">Years :</span>
			</div>
				</div>
			 
			<div class="col-md-8 padding-0">
		
					<div class="tab-content">
                                <div class="tab-pane active" id="home1" role="tabpanel">
                                    
                                    
                                    <div class="col-lg-10 col-md-8 col-sm-8 col-xs-8 padding-top-7">
				<div class="" align="center">
                        <div class="nav-tabs-horizontal">
                            <ul class="nav nav-tabs border-bottom" role="tablist">
                                <li class="nav-item hover width-27">
                                    <a class="nav-link plan-link active color-white no-wrap pull-left" href="javascript: void(0);" onclick="downtabChange(1);" data-toggle="tab"  data-target="#home2" role="tab">Jan 17 - Dec 17
									</a>
									<span id="year_one">
									 <a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl();?>/firm-plan/client-medical-self-insured#home2" class="glyphicon glyphicon-pencil custom cursor-pointer pull-left color-white"  data-toggle="tooltip" data-placement="bottom" title="Edit Plan Year"></a>
									  <a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl();?>/firm-plan/client-medical-self-insured#messages2" class="glyphicon glyphicon-usd custom cursor-pointer pull-left color-white"  data-toggle="tooltip" data-placement="bottom" title="Edit Monthly Financials"></a>
									 </span>
									 
                                </li>
                                <li class="nav-item hover width-27">
                                    <a class="nav-link plan-link color-white no-wrap pull-left" href="javascript: void(0);" data-toggle="tab" onclick="downtabChange(2);" data-target="#profile2" role="tab">Jan 16 - Dec 16
                             </a>
                             <span id="year_two" class="hide"> 
                              <a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl();?>/firm-plan/client-medical-self-insured#home2" class="glyphicon glyphicon-pencil custom cursor-pointer pull-left color-white"  data-toggle="tooltip" data-placement="bottom" title="Edit Plan Year"></a>
									  <a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl();?>/firm-plan/client-medical-self-insured#messages2" class="glyphicon glyphicon-usd custom cursor-pointer pull-left color-white"  data-toggle="tooltip" data-placement="bottom" title="Edit Monthly Financials"></a>
									 </span> 
							 </li>
                                <li class="nav-item hover width-30 ">
                                    <a class="nav-link plan-link color-white no-wrap pull-left" href="javascript: void(0);"  onclick="downtabChange(3);" data-toggle="tab" data-target="#messages2" role="tab">Jan 15 - Dec 15
									 </a>
									 <span id="year_three" class="hide">  
									<a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl();?>/firm-plan/client-medical-self-insured#home2" class="glyphicon glyphicon-pencil custom cursor-pointer pull-left color-white"  data-toggle="tooltip" data-placement="bottom" title="Edit Plan Year"></a>
									  <a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl();?>/firm-plan/client-medical-self-insured#messages2" class="glyphicon glyphicon-usd custom cursor-pointer pull-left color-white"  data-toggle="tooltip" data-placement="bottom" title="Edit Monthly Financials"></a>
									 </span>
									    <div class="dropdown">
										<a
											class="dropdown-months dropdown-toggle back-drop padding-15" 
											data-toggle="dropdown">  <i class="fa fa-caret-down vertical-align-bottom color-white" aria-hidden="true"></i>

										</a>
											<ul class="dropdown-menu">
											<li><a href="#">Jan 14 - Dec 14</a></li>
											<li><a href="#">Jan 13 - Dec 13</a></li>
											<li><a href="#">Jan 12 - Dec 12</a></li>
										</ul>
									</div>
									
									
                              
                    
									
                                </li>
                            
                               
                                
                            </ul>
                            
                        </div>
                        
                    </div>
				</div>
				
				
                              <!--  <div class="col-md-12 padding-0" align="center">
                               <div class="col-md-3 "><a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl();?>/firm-plan/client-medical-self-insured#home2" class="fontcolor-blue"><u class="cursor-pointer">Jan 17 - Dec 17</u></a>  <a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl();?>/firm-plan/client-medical-self-insured#home2" class="glyphicon glyphicon-pencil cursor-pointer"  data-toggle="tooltip" data-placement="bottom" title="Edit Plan Year"></a> <a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl();?>/firm-plan/client-medical-self-insured#messages2" class="glyphicon glyphicon-usd cursor-pointer"  data-toggle="tooltip" data-placement="bottom" title="Edit Monthly Financials"></a></div>
                               <div class="col-md-3"><a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl();?>/firm-plan/client-medical-self-insured#home2">Jan 16 - Dec 16</a></div>
                              <!-- <div class="col-md-2"><a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl();?>/firm-plan/client-medical-self-insured#home2">Jan 15 - Dec 15</a></div>-->
                              <!--  <div class="col-md-3"><a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl();?>/firm-plan/client-medical-self-insured#home2">Jan 15 - Dec 15</a>
                                 <div class="dropdown line-height-0">
										<a
											class="pull-right dropdown-months dropdown-toggle back-drop"
											data-toggle="dropdown">  <i class="fa fa-caret-down vertical-align-bottom" aria-hidden="true"></i>

										</a>
										<ul class="dropdown-menu">
											<li><a href="#">Jan 14 - Dec 14</a></li>
											<li><a href="#">Jan 13 - Dec 13</a></li>
											<li><a href="#">Jan 12 - Dec 12</a></li>
										</ul>
									</div>
                                </div>
                               <div class="col-md-2">
                          <!--   <span   data-toggle="tooltip"  data-placement="bottom" title="Add New Plan Year"> <a class="glyphicon glyphicon-plus cursor-pointer"> </a></span>-->
                                   
                                <!--      </div>
                               </div>
                              -->
                                </div>
                                <div class="tab-pane" id="profile1" role="tabpanel">
                                     
                                 <div class="col-lg-10 col-md-8 col-sm-8 col-xs-8 padding-top-7">
				<div class="" align="center">
                        <div class="nav-tabs-horizontal">
                            <ul class="nav nav-tabs border-bottom" role="tablist">
                                <li class="nav-item hover width-27">
                                    <a class="nav-link plan-link active color-white no-wrap pull-left" href="javascript: void(0);" onclick="downtabChangetwo(1);" data-toggle="tab"  data-target="#home2" role="tab">Jan 17 - Dec 17
									</a>
									<span id="year_one_2">
									 <a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl();?>/firm-plan/client-medical-self-insured#home2" class="glyphicon glyphicon-pencil custom cursor-pointer pull-left color-white"  data-toggle="tooltip" data-placement="bottom" title="Edit Plan Year"></a>
									  <a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl();?>/firm-plan/client-medical-self-insured#messages2" class="glyphicon glyphicon-usd custom cursor-pointer pull-left color-white"  data-toggle="tooltip" data-placement="bottom" title="Edit Monthly Financials"></a>
									 </span>
									 
                                </li>
                                <li class="nav-item hover width-27">
                                    <a class="nav-link plan-link color-white no-wrap pull-left" href="javascript: void(0);" data-toggle="tab" onclick="downtabChangetwo(2);" data-target="#profile2" role="tab">Jan 16 - Dec 16
                             </a>
                             <span id="year_two_2" class="hide"> 
                              <a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl();?>/firm-plan/client-medical-self-insured#home2" class="glyphicon glyphicon-pencil custom cursor-pointer pull-left color-white"  data-toggle="tooltip" data-placement="bottom" title="Edit Plan Year"></a>
									  <a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl();?>/firm-plan/client-medical-self-insured#messages2" class="glyphicon glyphicon-usd custom cursor-pointer pull-left color-white"  data-toggle="tooltip" data-placement="bottom" title="Edit Monthly Financials"></a>
									 </span> 
							 </li>
                                <li class="nav-item hover width-30 ">
                                    <a class="nav-link plan-link color-white no-wrap pull-left" href="javascript: void(0);"  onclick="downtabChangetwo(3);" data-toggle="tab" data-target="#messages2" role="tab">Jan 15 - Dec 15
									 </a>
									 <span id="year_three_2" class="hide">  
									<a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl();?>/firm-plan/client-medical-self-insured#home2" class="glyphicon glyphicon-pencil custom cursor-pointer pull-left color-white"  data-toggle="tooltip" data-placement="bottom" title="Edit Plan Year"></a>
									  <a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl();?>/firm-plan/client-medical-self-insured#messages2" class="glyphicon glyphicon-usd custom cursor-pointer pull-left color-white"  data-toggle="tooltip" data-placement="bottom" title="Edit Monthly Financials"></a>
									 </span>
									    <div class="dropdown">
										<a
											class="dropdown-months dropdown-toggle back-drop padding-15"
											data-toggle="dropdown">  <i class="fa fa-caret-down vertical-align-bottom color-white" aria-hidden="true"></i>
 
										</a>
											<ul class="dropdown-menu">
											<li><a href="#">Jan 14 - Dec 14</a></li>
											<li><a href="#">Jan 13 - Dec 13</a></li>
											<li><a href="#">Jan 12 - Dec 12</a></li>
										</ul>
									</div>
									
									
                              
                    
									
                                </li>
                            
                               
                                
                            </ul>
                            
                        </div>
                        
                    </div>
				</div>
                           
                                </div>
                                <div class="tab-pane" id="messages1" role="tabpanel">
                                     
                               <div class="col-lg-10 col-md-8 col-sm-8 col-xs-8 padding-top-7">
				<div class="" align="center">
                        <div class="nav-tabs-horizontal">
                            <ul class="nav nav-tabs border-bottom" role="tablist">
                                <li class="nav-item hover width-27">
                                    <a class="nav-link plan-link active color-white no-wrap pull-left" href="javascript: void(0);" onclick="downtabChangethree(1);" data-toggle="tab"  data-target="#home2" role="tab">Jan 17 - Dec 17
									</a>
									<span id="year_one_3">
									 <a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl();?>/firm-plan/client-medical-self-insured#home2" class="glyphicon glyphicon-pencil custom cursor-pointer pull-left color-white"  data-toggle="tooltip" data-placement="bottom" title="Edit Plan Year"></a>
									  <a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl();?>/firm-plan/client-medical-self-insured#messages2" class="glyphicon glyphicon-usd custom cursor-pointer pull-left color-white"  data-toggle="tooltip" data-placement="bottom" title="Edit Monthly Financials"></a>
									 </span>
									 
                                </li>
                                <li class="nav-item hover width-27">
                                    <a class="nav-link plan-link color-white no-wrap pull-left" href="javascript: void(0);" data-toggle="tab" onclick="downtabChangethree(2);" data-target="#profile2" role="tab">Jan 16 - Dec 16
                             </a>
                             <span id="year_two_3" class="hide"> 
                              <a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl();?>/firm-plan/client-medical-self-insured#home2" class="glyphicon glyphicon-pencil custom cursor-pointer pull-left color-white"  data-toggle="tooltip" data-placement="bottom" title="Edit Plan Year"></a>
									  <a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl();?>/firm-plan/client-medical-self-insured#messages2" class="glyphicon glyphicon-usd custom cursor-pointer pull-left color-white"  data-toggle="tooltip" data-placement="bottom" title="Edit Monthly Financials"></a>
									 </span> 
							 </li>
                                <li class="nav-item hover width-30 ">
                                    <a class="nav-link plan-link color-white no-wrap pull-left" href="javascript: void(0);"  onclick="downtabChangethree(3);" data-toggle="tab" data-target="#messages2" role="tab">Jan 15 - Dec 15
									 </a>
									 <span id="year_three_3" class="hide">  
									<a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl();?>/firm-plan/client-medical-self-insured#home2" class="glyphicon glyphicon-pencil custom cursor-pointer pull-left color-white"  data-toggle="tooltip" data-placement="bottom" title="Edit Plan Year"></a>
									  <a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl();?>/firm-plan/client-medical-self-insured#messages2" class="glyphicon glyphicon-usd custom cursor-pointer pull-left color-white"  data-toggle="tooltip" data-placement="bottom" title="Edit Monthly Financials"></a>
									 </span>
									    <div class="dropdown">
										<a
											class="dropdown-months dropdown-toggle back-drop padding-15"
											data-toggle="dropdown">  <i class="fa fa-caret-down vertical-align-bottom color-white" aria-hidden="true"></i>

										</a>
											<ul class="dropdown-menu">
											<li><a href="#">Jan 14 - Dec 14</a></li>
											<li><a href="#">Jan 13 - Dec 13</a></li>
											<li><a href="#">Jan 12 - Dec 12</a></li>
										</ul>
									</div>
									
									
                              
                    
									
                                </li>
                            
                               
                                
                            </ul>
                            
                        </div>
                        
                    </div>
				</div>
                            
                             
                            </div>
                            </div>
					</div>
					
				</div>

			</div>
		</div>
	
	<script>
	$(document).ready(function(){
		$('#masterdata_link').addClass('page-active');
		$('#manage_plans_link').addClass('page-active');
		
	});
	function tabChange(id){
	//	$('#edit_plan').attr('data-target','');
		switch(id) {
	    case 1:
	    	$('#medical_edit').removeClass('hide');
	    	$('#dental_edit').addClass('hide');
	    	$('#vision_edit').addClass('hide');
			$('#add_plan_year').attr('data-target','#medical');
	        break;
	    case 2:
	    	$('#dental_edit').removeClass('hide');
	    	$('#medical_edit').addClass('hide');
	    	$('#vision_edit').addClass('hide');
			$('#add_plan_year').attr('data-target','#dental');
	        break;
	    case 3:
	    	$('#vision_edit').removeClass('hide');
	    	$('#dental_edit').addClass('hide');
	    	$('#medical_edit').addClass('hide');
			$('#add_plan_year').attr('data-target','#vision');
	        break;
	    default:
	    	$('#medical_edit').removeClass('hide');
    	
	}
	}
		function downtabChange(id){
			//	$('#edit_plan').attr('data-target','');
				switch(id) {
			    case 1:
			    	$('#year_one').removeClass('hide');
			    	$('#year_two').addClass('hide');
			    	$('#year_three').addClass('hide');
			        break;
			    case 2:
			    	$('#year_one').addClass('hide');
			    	$('#year_two').removeClass('hide');
			    	$('#year_three').addClass('hide');
			        break;
			    case 3:
			    	$('#year_one').addClass('hide');
			    	$('#year_two').addClass('hide');
			    	$('#year_three').removeClass('hide');
			        break; 
			}
		}

		function downtabChangetwo(id){
			//	$('#edit_plan').attr('data-target','');
				switch(id) {
			    case 1:
			    	$('#year_one_2').removeClass('hide');
			    	$('#year_two_2').addClass('hide');
			    	$('#year_three_2').addClass('hide');
			        break;
			    case 2:
			    	$('#year_one_2').addClass('hide');
			    	$('#year_two_2').removeClass('hide');
			    	$('#year_three_2').addClass('hide');
			        break;
			    case 3:
			    	$('#year_one_2').addClass('hide');
			    	$('#year_two_2').addClass('hide');
			    	$('#year_three_2').removeClass('hide');
			        break; 
			}
		}

		function downtabChangethree(id){
			//	$('#edit_plan').attr('data-target','');
				switch(id) {
			    case 1:
			    	$('#year_one_3').removeClass('hide');
			    	$('#year_two_3').addClass('hide');
			    	$('#year_three_3').addClass('hide');
			        break;
			    case 2:
			    	$('#year_one_3').addClass('hide');
			    	$('#year_two_3').removeClass('hide');
			    	$('#year_three_3').addClass('hide');
			        break;
			    case 3:
			    	$('#year_one_3').addClass('hide');
			    	$('#year_two_3').addClass('hide');
			    	$('#year_three_3').removeClass('hide');
			        break; 
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
                                    <label class="form-control-label" for="l0">Plan Year Title<i class="fa fa-info-circle margin-left-5" data-container="body" data-toggle="popover-hover" data-placement="bottom" data-content="Enter the title you use to describe this plan.  (e.g. Group PPO plan, Southeast Group Medical Plan, etc)" data-original-title="Plan Year Title"></i></label>
                                </div>
                                <div class="col-md-8 form-group ">
                             <input type="text" class="form-control" placeholder="Plan Year Title"  >
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
						 
						  <div class="col-md-6">
						  <div class="">
						  	<label class="mt-checkbox mt-checkbox-outline">Select this plan year as Default
																				<input type="checkbox">
																			<span></span>
																		</label>
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
                                    <label class="form-control-label" for="l0">Plan Year Title<i class="fa fa-info-circle margin-left-5" data-container="body" data-toggle="popover-hover" data-placement="bottom" data-content="Enter the title you use to describe this plan.  (e.g. Group PPO plan, Southeast Group Medical Plan, etc)" data-original-title="Plan Year Title"></i></label>
                                </div>
                                <div class="col-md-8 form-group ">
                             <input type="text" class="form-control" placeholder="Plan Year Title"  >
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
						 
						   <div class="col-md-6">
						  <div class="">
						  	<label class="mt-checkbox mt-checkbox-outline">Select this plan year as Default
																				<input type="checkbox">
																			<span></span>
																		</label>
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
                                    <label class="form-control-label" for="l0">Plan Year Title<i class="fa fa-info-circle margin-left-5" data-container="body" data-toggle="popover-hover" data-placement="bottom" data-content="Enter the title you use to describe this plan.  (e.g. Group PPO plan, Southeast Group Medical Plan, etc)" data-original-title="Plan Year Title"></i></label>
                                </div>
                                <div class="col-md-8 form-group ">
                             <input type="text" class="form-control" placeholder="Plan Year Title"  >
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
						  <div class="col-md-6">
						  <div class="">
						  	<label class="mt-checkbox mt-checkbox-outline">Select this plan year as Default
																				<input type="checkbox">
																			<span></span>
																		</label>
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