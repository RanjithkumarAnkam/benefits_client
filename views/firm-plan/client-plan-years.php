<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use kartik\grid\GridView;



?>

<section class="page-content padding-0">
	<div class="dashboard-container">

			<div class="blue-breadcrumb col-md-12 padding-0">
				<a class="breadcrumb-back-btn" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl().Yii::$app->params['dashboard_url']; ?>">
				<i class="fa fa-angle-left" aria-hidden="true"></i>
				</a>
				<div class="breadcrumb-description">
					<span class=""><?php if(Yii::$app->user->identity->usertype == 1){ ?>Master Data &gt; <?php }?>Manage Plans</span>

				</div>

			</div>
		</div>
	
	<div class="page-content col-md-12 pull-left width-100">
	
	<div class="">
	<div class="search-header">
	<div class="col-lg-12 search-header-inner pull-left width-100">
	
	<?php if(Yii::$app->user->identity->usertype == 1 ||  Yii::$app->user->identity->usertype == 2 ){?>
	
	<?php if(Yii::$app->user->identity->usertype == 1){ ?>
			<div class="col-md-3 div-search ">
			
				<div class="col-md-4 padding-left-0 padding-right-0 padding-top-8">
				<label class="font-white">Select Firm</label>
				</div>
				<div class="col-md-8 padding-0 ">
				<select class="form-control ">
				<option>Select Firm</option>
				<option selected="selected">Tata</option>
				</select>
				</div>
				
				</div>
				
				<?php } ?>
				<div class="col-md-3 div-search ">
				 
				<div class="col-md-4 padding-left-0 padding-right-0 padding-top-8">
				<label class="font-white">Select Client</label>
				</div>
					<div class="col-md-8 padding-0">
				<select class="form-control ">
				<option>Select Client</option>
				<option selected="selected">Tata Motors</option>
				</select>
				</div>
				</div>
	<?php } ?>
							<div class="col-md-5 aplhabets-div  " style="    max-width: 502px; padding-top:8px;">
							
							<div class="mt-radio-inline  padding-0">
                                                        <label class="mt-radio mt-radio-outline color-white">Group Medical Plan
                                                            <input type="radio" id="1" name="plan_type" value="1" <?php if($get_plan_type['id'] == 1){echo 'checked';}?>>
                                                            <span class="bg-white"></span>
                                                        </label>
                                                        <label class="mt-radio mt-radio-outline color-white">Group Dental Plan
                                                            <input type="radio" id="2" name="plan_type"  value="2" <?php if($get_plan_type['id'] == 2){echo 'checked';}?>>
                                                            <span class="bg-white"></span>
                                                        </label>
														 <label class="mt-radio mt-radio-outline color-white">Group Vision Plan
                                                            <input type="radio" id="3" name="plan_type"  value="3" <?php if($get_plan_type['id'] == 3){echo 'checked';}?>>
                                                            <span class="bg-white"></span>
                                                        </label>
                                                    </div>
													
							
							
							</div>
							<div class="col-md-1">
								<div class="form-group ">
                                    <label class="form-control-label color-white" for="l0"></label>
									<a class="btn  btn-modal-blue" onclick="planDetails();">Go</a>
									</div>
								</div>
							
						</div>
	</div>
	</div>
	
	<div class="">
	<div class="col-md-12 padding-0 widget pull-left width-100">
							<div class=" col-md-12 margin-top-15 margin-bottom-10 color-blue pull-left width-100">	
							<div class="col-md-4 col-xs-12">
							<strong class="margin-right-10">Search Results<small><span class="font-size-12">( click on the links below result to view Plan Details)</span> </small></strong>
							</div>
							<div class="col-md-8  col-xs-12 pull-right">
							<input type="button" class="btn btn-modal-blue pull-right cursor-nodrop" id="add_new_plan" onclick="createplan();" value="Add New Plan">
							
							<div class="col-md-4 col-xs-6 pull-right">
							<select id="selected_plan" class="form-control" onchange="addNewplan();">
							<option value="">Select New Plan</option>
							<option value="medical">Medical Plan</option>
							<option value="vision">Vision Plan</option>
							<option value="dental">Dental Plan</option>
							</select>
							</div>
							
							</div>
							</div>
						
								<div class="col-md-12  padding-0 border-top-ddd">
								
								 <?php if($get_plan_type['id'] == 1){ ?>
								<div class="col-xl-3 col-md-6 col-xs-12 padding-6">
								<div class="col-xs-12 padding-0 border-ddd">
								<div class="col-xs-12  padding-6 search-user-box">
								<div class="col-xs-2 padding-0 margin-top-35" align="center">
								
				
				<span class=" margin-top-10" href="javascript:void(0);"> <img width="65"src="/images/design/firm_logo.png" alt="Alternative text to the image">
				</span>
								</div>
								<div class="col-xs-10" style="font-family: arial;">
								<!--<i class="fa fa-filter pull-right font-18"></i>-->
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">Plan</label>
								</div>
								<div class="col-xs-7">
								<span>: <a  data-toggle="modal" data-target="#medical"><u class="">Group Medical</u></a></span>
								</div> 
								</div>
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">Plan Year</label>
								</div>
								<div class="col-xs-7">
								<span>: Prior</span>
								</div> 
								</div>
								
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">Plan Year Title</label>
								</div>
								<div class="col-xs-7">
								<span>: 2014 Plan Year</span>
								</div> 
								</div>
								
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">Start Date</label>
								</div>
								<div class="col-xs-7">
								<span>: Jan 2014</span>
								</div> 
								</div>
								
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">End Date</label>
								</div>
								<div class="col-xs-7">
								<span>: Dec 2014</span>
								</div> 
								</div>
								
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">Plan Funding</label>
								</div>
								<div class="col-xs-7">
								<span>: Partially Self Insured</span>
								</div> 
								</div>
								
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">Last Login</label>
								</div>
								<div class="col-xs-7">
								<span>: 1/12/2017</span>
								</div> 
								</div>
								</div>
								
								 </div>
								</div>
								<div class="col-xs-12 border-ddd pd-botm-2 pd-top-2 bg-light-blue" style="font-family: arial;">
								<a type="button" class="pull-right btn btn-modal-blue" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl();?>/firm-plan/client-medical-self-insured#home2">Add / Update Financials</a>
								 </div>
							</div>
						
						
					
						
						
					
						<div class="col-xl-3 col-md-6 col-xs-12 padding-6">
								<div class="col-xs-12 padding-0 border-ddd">
								<div class="col-xs-12  padding-6 search-user-box">
								<div class="col-xs-2 padding-0 margin-top-35" align="center">
								
				
				<span class=" margin-top-10" href="javascript:void(0);"> <img width="65"src="/images/design/firm_logo.png" alt="Alternative text to the image">
				</span>
								</div>
								<div class="col-xs-10" style="font-family: arial;">
								<!--<i class="fa fa-filter pull-right font-18"></i>-->
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">Plan</label>
								</div>
								<div class="col-xs-7">
								<span>: <a  data-toggle="modal" data-target="#medical"><u class="">Group Medical</u></a></span>
								</div> 
								</div>
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">Plan Year</label>
								</div>
								<div class="col-xs-7">
								<span>: Prior</span>
								</div> 
								</div>
								
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">Plan Year Title</label>
								</div>
								<div class="col-xs-7">
								<span>: 2014 Plan Year</span>
								</div> 
								</div>
								
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">Start Date</label>
								</div>
								<div class="col-xs-7">
								<span>: Jan 2014</span>
								</div> 
								</div>
								
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">End Date</label>
								</div>
								<div class="col-xs-7">
								<span>: Dec 2014</span>
								</div> 
								</div>
								
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">Plan Funding</label>
								</div>
								<div class="col-xs-7">
								<span>: Fully Insured</span>
								</div> 
								</div>
								
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">Last Login</label>
								</div>
								<div class="col-xs-7">
								<span>: 1/12/2017</span>
								</div> 
								</div>
								</div>
								
								 </div>
								</div>
								<div class="col-xs-12 border-ddd pd-botm-2 pd-top-2 bg-light-blue" style="font-family: arial;">
								<a type="button" class="pull-right btn btn-modal-blue" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl();?>/firm-plan/client-medical-fully-insured#home2">Add / Update Financials</a>
								
								 </div>
							</div>
							
						
						
						
						
							
							
								<div class="col-xl-3 col-md-6 col-xs-12 padding-6">
								<div class="col-xs-12 padding-0 border-ddd">
								<div class="col-xs-12  padding-6 search-user-box">
								<div class="col-xs-2 padding-0 margin-top-35" align="center">
								
				
				<span class=" margin-top-10" href="javascript:void(0);"> <img width="65"src="/images/design/firm_logo.png" alt="Alternative text to the image">
				</span>
								</div>
								<div class="col-xs-10" style="font-family: arial;">
								<!--<i class="fa fa-filter pull-right font-18"></i>-->
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">Plan</label>
								</div>
								<div class="col-xs-7">
								<span>: <a  data-toggle="modal" data-target="#medical"><u class="">Group Medical</u></a></span>
								</div> 
								</div>
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">Plan Year</label>
								</div>
								<div class="col-xs-7">
								<span>: Prior</span>
								</div> 
								</div>
								
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">Plan Year Title</label>
								</div>
								<div class="col-xs-7">
								<span>: 2014 Plan Year</span>
								</div> 
								</div>
								
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">Start Date</label>
								</div>
								<div class="col-xs-7">
								<span>: Jan 2014</span>
								</div> 
								</div>
								
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">End Date</label>
								</div>
								<div class="col-xs-7">
								<span>: Dec 2014</span>
								</div> 
								</div>
								
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">Plan Funding</label>
								</div>
								<div class="col-xs-7">
								<span>: Level Funded</span>
								</div> 
								</div>
								
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">Last Login</label>
								</div>
								<div class="col-xs-7">
								<span>: 1/12/2017</span>
								</div> 
								</div>
								</div>
								
								 </div>
								</div>
								<div class="col-xs-12 border-ddd pd-botm-2 pd-top-2 bg-light-blue" style="font-family: arial;">
								<a type="button" class="pull-right btn btn-modal-blue" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl();?>/firm-plan/client-medical-level-funded#home2">Add / Update Financials</a>
								
								 </div>
							</div>
						
								 <?php }?>
						
						
						
						
							
							 <?php if($get_plan_type['id'] == 2){?>
								<div class="col-xl-3 col-md-6 col-xs-12 padding-6">
								<div class="col-xs-12 padding-0 border-ddd">
								<div class="col-xs-12  padding-6 search-user-box">
								<div class="col-xs-2 padding-0 margin-top-35" align="center">
								
				
				<span class=" margin-top-10" href="javascript:void(0);"> <img width="65"src="/images/design/firm_logo.png" alt="Alternative text to the image">
				</span>
								</div>
								<div class="col-xs-10" style="font-family: arial;">
								<!--<i class="fa fa-filter pull-right font-18"></i>-->
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">Plan</label>
								</div>
								<div class="col-xs-7">
								<span>: <a  data-toggle="modal" data-target="#dental"><u class="">Group Dental</u></a></span>
								</div> 
								</div>
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">Plan Year</label>
								</div>
								<div class="col-xs-7">
								<span>: Prior</span>
								</div> 
								</div>
								
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">Plan Year Title</label>
								</div>
								<div class="col-xs-7">
								<span>: 2014 Plan Year</span>
								</div> 
								</div>
								
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">Start Date</label>
								</div>
								<div class="col-xs-7">
								<span>: Jan 2014</span>
								</div> 
								</div>
								
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">End Date</label>
								</div>
								<div class="col-xs-7">
								<span>: Dec 2014</span>
								</div> 
								</div>
								
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">Plan Funding</label>
								</div>
								<div class="col-xs-7">
								<span>: Partially Self Insured</span>
								</div> 
								</div>
								
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">Last Login</label>
								</div>
								<div class="col-xs-7">
								<span>: 1/12/2017</span>
								</div> 
								</div>
								</div>
								
								 </div>
								</div>
								<div class="col-xs-12 border-ddd pd-botm-2 pd-top-2 bg-light-blue" style="font-family: arial;">
								<a type="button" class="pull-right btn btn-modal-blue" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl();?>/firm-plan/client-dental-self-insured#home2">Add / Update Financials</a>
								 </div>
							</div>
						
						
							<div class="col-xl-3 col-md-6 col-xs-12 padding-6">
								<div class="col-xs-12 padding-0 border-ddd">
								<div class="col-xs-12  padding-6 search-user-box">
								<div class="col-xs-2 padding-0 margin-top-35" align="center">
								
				
				<span class=" margin-top-10" href="javascript:void(0);"> <img width="65"src="/images/design/firm_logo.png" alt="Alternative text to the image">
				</span>
								</div>
								<div class="col-xs-10" style="font-family: arial;">
								<!--<i class="fa fa-filter pull-right font-18"></i>-->
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">Plan</label>
								</div>
								<div class="col-xs-7">
								<span>: <a  data-toggle="modal" data-target="#dental"><u class="">Group Dental</u></a></span>
								</div> 
								</div>
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">Plan Year</label>
								</div>
								<div class="col-xs-7">
								<span>: Prior</span>
								</div> 
								</div>
								
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">Plan Year Title</label>
								</div>
								<div class="col-xs-7">
								<span>: 2014 Plan Year</span>
								</div> 
								</div>
								
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">Start Date</label>
								</div>
								<div class="col-xs-7">
								<span>: Jan 2014</span>
								</div> 
								</div>
								
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">End Date</label>
								</div>
								<div class="col-xs-7">
								<span>: Dec 2014</span>
								</div> 
								</div>
								
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">Plan Funding</label>
								</div>
								<div class="col-xs-7">
								<span>: Fully Insured</span>
								</div> 
								</div>
								
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">Last Login</label>
								</div>
								<div class="col-xs-7">
								<span>: 1/12/2017</span>
								</div> 
								</div>
								</div>
								
								 </div>
								</div>
								<div class="col-xs-12 border-ddd pd-botm-2 pd-top-2 bg-light-blue" style="font-family: arial;">
								<a type="button" class="pull-right btn btn-modal-blue" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl();?>/firm-plan/client-dental-fully-insured#home2">Add / Update Financials</a>
								 </div>
							</div>
							 <?php }?>
						
							 <?php if($get_plan_type['id'] == 3){?>
								<div class="col-xl-3 col-md-6 col-xs-12 padding-6">
								<div class="col-xs-12 padding-0 border-ddd">
								<div class="col-xs-12  padding-6 search-user-box">
								<div class="col-xs-2 padding-0 margin-top-35" align="center">
								
				
				<span class=" margin-top-10" href="javascript:void(0);"> <img width="65"src="/images/design/firm_logo.png" alt="Alternative text to the image">
				</span>
								</div>
								<div class="col-xs-10" style="font-family: arial;">
								<!--<i class="fa fa-filter pull-right font-18"></i>-->
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">Plan</label>
								</div>
								<div class="col-xs-7">
								<span>: <a  data-toggle="modal" data-target="#vision"><u class="">Group Vision</u></a></span>
								</div> 
								</div>
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">Plan Year</label>
								</div>
								<div class="col-xs-7">
								<span>: Prior</span>
								</div> 
								</div>
								
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">Plan Year Title</label>
								</div>
								<div class="col-xs-7">
								<span>: 2014 Plan Year</span>
								</div> 
								</div>
								
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">Start Date</label>
								</div>
								<div class="col-xs-7">
								<span>: Jan 2014</span>
								</div> 
								</div>
								
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">End Date</label>
								</div>
								<div class="col-xs-7">
								<span>: Dec 2014</span>
								</div> 
								</div>
								
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">Plan Funding</label>
								</div>
								<div class="col-xs-7">
								<span>: Partially Self Insured</span>
								</div> 
								</div>
								
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">Last Login</label>
								</div>
								<div class="col-xs-7">
								<span>: 1/12/2017</span>
								</div> 
								</div>
								</div>
								
								 </div>
								</div>
								<div class="col-xs-12 border-ddd pd-botm-2 pd-top-2 bg-light-blue" style="font-family: arial;">
								<a type="button" class="pull-right btn btn-modal-blue" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl();?>/firm-plan/client-vision-self-insured#home2">Add / Update Financials</a>
								
								 </div>
							</div>
						
						
							<div class="col-xl-3 col-md-6 col-xs-12 padding-6">
								<div class="col-xs-12 padding-0 border-ddd">
								<div class="col-xs-12  padding-6 search-user-box">
								<div class="col-xs-2 padding-0 margin-top-35" align="center">
								
				
				<span class=" margin-top-10" href="javascript:void(0);"> <img width="65"src="/images/design/firm_logo.png" alt="Alternative text to the image">
				</span>
								</div>
								<div class="col-xs-10" style="font-family: arial;">
								<!--<i class="fa fa-filter pull-right font-18"></i>-->
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">Plan</label>
								</div>
								<div class="col-xs-7">
								<span>: <a  data-toggle="modal" data-target="#vision"><u class="">Group Vision</u></a></span>
								</div> 
								</div>
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">Plan Year</label>
								</div>
								<div class="col-xs-7">
								<span>: Prior</span>
								</div> 
								</div>
								
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">Plan Year Title</label>
								</div>
								<div class="col-xs-7">
								<span>: 2014 Plan Year</span>
								</div> 
								</div>
								
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">Start Date</label>
								</div>
								<div class="col-xs-7">
								<span>: Jan 2014</span>
								</div> 
								</div>
								
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">End Date</label>
								</div>
								<div class="col-xs-7">
								<span>: Dec 2014</span>
								</div> 
								</div>
								
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">Plan Funding</label>
								</div>
								<div class="col-xs-7">
								<span>: Fully Insured</span>
								</div> 
								</div>
								
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">Last Login</label>
								</div>
								<div class="col-xs-7">
								<span>: 1/12/2017</span>
								</div> 
								</div>
								</div>
								
								 </div>
								</div>
								<div class="col-xs-12 border-ddd pd-botm-2 pd-top-2 bg-light-blue" style="font-family: arial;">
								<a type="button" class="pull-right btn btn-modal-blue" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl();?>/firm-plan/client-vision-fully-insured#home2">Add / Update Financials</a>
								
								 </div>
							</div>
							 <?php }?>
						
						
						
	 
	
	</div>
	</div>
	</div>
</section>
				
				
				
								

				<script>
				
				function createplan(){
					var val= $("#selected_plan").val();
					if(val!=undefined && val!=''){
					 $("#"+val).modal('show');	
					}
					
				}
				
				$(document).ready(function(){
					
					
						
					$('.dropify').dropify({
                messages: {
        'default': 'Please Upload Firm Logo',
        'replace': 'Drag and drop or click to replace',
        'remove':  'Remove',
        'error':   'Ooops, something wrong happended.'
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
			
			
			$('#manage_plans_link').addClass('page-active');
				$('#masterdata_link').addClass('page-active');
			  });
			  
			  function planDetails(){
				var id =  $("input[name=plan_type]:checked").val();
				window.location = "<?php echo Yii::$app->getUrlManager()->getBaseUrl();?>/firm-plan/client-plan-years?id="+ id;
			  }
				</script>
				
				
				
				
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