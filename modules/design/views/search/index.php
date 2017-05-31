<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use kartik\grid\GridView;


$states = array (
		'AL' => 'Alabama',
		'AK' => 'Alaska',
		'AZ' => 'Arizona',
		'AR' => 'Arkansas',
		'CA' => 'California',
		'CO' => 'Colorado',
		'CT' => 'Connecticut',
		'DE' => 'Delaware',
		'DC' => 'District of Columbia',
		'FL' => 'Florida',
		'GA' => 'Georgia',
		'HI' => 'Hawaii',
		'ID' => 'Idaho',
		'IL' => 'Illinois',
		'IN' => 'Indiana',
		'IA' => 'Iowa',
		'KS' => 'Kansas',
		'KY' => 'Kentucky',
		'LA' => 'Louisiana',
		'ME' => 'Maine',
		'MD' => 'Maryland',
		'MA' => 'Massachusetts',
		'MI' => 'Michigan',
		'MN' => 'Minnesota',
		'MS' => 'Mississippi',
		'MO' => 'Missouri',
		'MT' => 'Montana',
		'NE' => 'Nebraska',
		'NV' => 'Nevada',
		'NH' => 'New Hampshire',
		'NJ' => 'New Jersey',
		'NM' => 'New Mexico',
		'NY' => 'New York',
		'NC' => 'North Carolina',
		'ND' => 'North Dakota',
		'OH' => 'Ohio',
		'OK' => 'Oklahoma',
		'OR' => 'Oregon',
		'PA' => 'Pennsylvania',
		'RI' => 'Rhode Island',
		'SC' => 'South Carolina',
		'SD' => 'South Dakota',
		'TN' => 'Tennessee',
		'TX' => 'Texas',
		'UT' => 'Utah',
		'VT' => 'Vermont',
		'VA' => 'Virginia',
		'WA' => 'Washington',
		'WV' => 'West Virginia',
		'WI' => 'Wisconsin',
		'WY' => 'Wyoming' 
);

?>

<section class="page-content padding-0">
<div class="row">
	<div class="search-header">
	<div class="col-lg-12 search-header-inner">
			<div class="col-md-3 div-search ">
				<div class="search-block">
                    <div class="form-input-icon form-input-icon-right">
                        <i class="icmn-search"></i>
                        <input type="text" class="form-control form-control-sm" placeholder="Search within the result...">
                        <button type="submit" class="search-block-submit "></button>
                    </div>
                </div>
				</div>
 
							<div class="col-md-9 aplhabets-div  ">
							<ul class="categoryList  font-white">
							<li><div class="categoryButton selected"  data-toggle="tooltip" data-placement="bottom" title="Total Records : 58">All</div></li>
							<li><div class="categoryButton" data-toggle="tooltip" data-placement="bottom" title="Total Records : 18">A</div></li>
							<li><div class="categoryButton" data-toggle="tooltip" data-placement="bottom" title="Total Records : 18">B</div></li>
							<li><div class="categoryButton" data-toggle="tooltip" data-placement="bottom" title="Total Records : 18">C</div></li>
							<li><div class="categoryButton" data-toggle="tooltip" data-placement="bottom" title="Total Records : 18">D</div></li>
							<li><div class="categoryButton" data-toggle="tooltip" data-placement="bottom" title="Total Records : 18">E</div></li>
							<li><div class="categoryButton" data-toggle="tooltip" data-placement="bottom" title="Total Records : 18">F</div></li>
							<li><div class="categoryButton" data-toggle="tooltip" data-placement="bottom" title="Total Records : 18">G</div></li>
							<li><div class="categoryButton" data-toggle="tooltip" data-placement="bottom" title="Total Records : 18">H</div></li>
							<li><div class="categoryButton" data-toggle="tooltip" data-placement="bottom" title="Total Records : 18">I</div></li>
							<li><div class="categoryButton" data-toggle="tooltip" data-placement="bottom" title="Total Records : 18">J</div></li>
							<li><div class="categoryButton" data-toggle="tooltip" data-placement="bottom" title="Total Records : 18">K</div></li>
							<li><div class="categoryButton" data-toggle="tooltip" data-placement="bottom" title="Total Records : 18">L</div></li>
							<li><div class="categoryButton" data-toggle="tooltip" data-placement="bottom" title="Total Records : 18">M</div></li>
							<li><div class="categoryButton" data-toggle="tooltip" data-placement="bottom" title="Total Records : 18">N</div></li>
							<li><div class="categoryButton" data-toggle="tooltip" data-placement="bottom" title="Total Records : 18">O</div></li>
							<li><div class="categoryButton" data-toggle="tooltip" data-placement="bottom" title="Total Records : 18">P</div></li>
							<li><div class="categoryButton" data-toggle="tooltip" data-placement="bottom" title="Total Records : 18">Q</div></li>
							<li><div class="categoryButton" data-toggle="tooltip" data-placement="bottom" title="Total Records : 18">R</div></li>
							<li><div class="categoryButton" data-toggle="tooltip" data-placement="bottom" title="Total Records : 18">S</div></li>
							<li><div class="categoryButton" data-toggle="tooltip" data-placement="bottom" title="Total Records : 18">T</div></li>
							<li><div class="categoryButton" data-toggle="tooltip" data-placement="bottom" title="Total Records : 18">U</div></li>
							<li><div class="categoryButton" data-toggle="tooltip" data-placement="bottom" title="Total Records : 18">V</div></li>
							<li><div class="categoryButton" data-toggle="tooltip" data-placement="bottom" title="Total Records : 18">W</div></li>
							<li><div class="categoryButton" data-toggle="tooltip" data-placement="bottom" title="Total Records : 18">X</div></li>
							<li><div class="categoryButton" data-toggle="tooltip" data-placement="bottom" title="Total Records : 18">Y</div></li>
							<li><div class="categoryButton" data-toggle="tooltip" data-placement="bottom" title="Total Records : 18">Z</div></li>
							<li><div class="categoryButton">#</div></li>
							</ul>
							
							</div>
							
						</div>
	</div>
	</div>
	
	
	<div class="page-content col-md-12">
	<div class="">
	<div class="col-md-12 border-ddd widget  pull-left width-100">
							<div class="col-md-12 margin-top-15 margin-bottom-10 color-blue">	<strong class="margin-right-10">Search Results<small><span class="font-size-12">( click on the links below result to view User details, Firm or client details, Plans, or dashboard)</span> </small></strong>
							</div>
								
								<div class="col-md-12  padding-0">
								
								<?php if(Yii::$app->user->identity->usertype == 1 || Yii::$app->user->identity->usertype == 2){?>
								<div class="col-xl-3 col-md-6 col-xs-12 padding-6">
								
								<div class="col-xs-12 padding-0 border-ddd">
								<div class="col-xs-12  padding-6 search-user-box">
								<div class="search-user-box-dashboard" data-toggle="tooltip" data-placement="bottom" title="Click to view firm dashboard" ><a class="fa fa-dashboard" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/design/dashboard/firms"></a></div>
								<div class="col-xs-2 padding-0" align="center">
								<span class="avatar margin-top-10 margin-bottom-35" href="javascript:void(0);"> <img src="/themes/clean-ui/common/img/temp/avatars/1.jpg" alt="Alternative text to the image">
				</span>
				
				<span class=" margin-top-10" href="javascript:void(0);"> <img width="65"src="/images/design/firm_logo.png" alt="Alternative text to the image">
				</span>
								</div>
								<div class="col-xs-9" style="font-family: arial;">
								<!--<i class="fa fa-filter pull-right font-18"></i>-->
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">First Name</label>
								</div>
								<div class="col-xs-7">
								<span>: <a  data-toggle="modal" data-target="#update_firm_user"><u class="">Ravi</u></a></span>
								</div> 
								</div>
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">Last Name</label>
								</div>
								<div class="col-xs-7">
								<span>: <a data-toggle="modal" data-target="#update_firm_user"><u class="">Teja</u></a></span>
								</div> 
								</div>
								
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">User Type</label>
								</div>
								<div class="col-xs-7">
								<span>: Firm</span>
								</div> 
								</div>
								
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">Firm/Client</label>
								</div>
								<div class="col-xs-7">
								<span>: <a data-toggle="modal" data-target="#update_firm" ><u class="">Unity</u></a></span>
								</div> 
								</div>
								
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">Plans</label>
								</div>
								<div class="col-xs-7">
								<span>: <a href="/design/firm-plan/client-plan-years?id=1"><u class="">Manage Plans</u></a></span>
								</div> 
								</div>
								
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">Email</label>
								</div>
								<div class="col-xs-7">
								<span>: ravi@gmail.com</span>
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
							</div>
						
						
						<?php } ?>
						
						
						<?php if(Yii::$app->user->identity->usertype == 1 || Yii::$app->user->identity->usertype == 2 || Yii::$app->user->identity->usertype == 3){?>
						<div class="col-xl-3 col-md-6 col-xs-12 padding-6">
								<div class="col-xs-12 padding-0 border-ddd">
								<div class="col-xs-12  padding-6 search-user-box">
								<div class="search-user-box-dashboard" data-toggle="tooltip" data-placement="bottom" title="Click to view client dashboard" ><a class="fa fa-dashboard" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/design/dashboard/clients"></a></div>
								
								<div class="col-xs-2 padding-0" align="center">
								<span class="avatar margin-top-10 margin-bottom-35" href="javascript:void(0);"> <img src="/web/themes/clean-ui/common/img/temp/avatars/1.jpg" alt="Alternative text to the image">
				</span>
				
				<span class=" margin-top-10" href="javascript:void(0);"> <img width="65"src="/images/design/firm_logo3.png" alt="Alternative text to the image">
				</span>
								</div>
								<div class="col-xs-9" style="font-family: arial;">
								<!--<i class="fa fa-filter pull-right font-18"></i>-->
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">First Name</label>
								</div>
								<div class="col-xs-7">
								<span>: <a data-toggle="modal" data-target="#update_client_user"><u class="">Praveen</u></a></span>
								</div> 
								</div>
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">Last Name</label>
								</div>
								<div class="col-xs-7">
								<span>: <a data-toggle="modal" data-target="#update_client_user"><u class="">Singh</u></a></span>
								</div> 
								</div>
								
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">User Type</label>
								</div>
								<div class="col-xs-7">
								<span>: Client</span>
								</div> 
								</div>
								
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">Firm/Client</label>
								</div>
								<div class="col-xs-7">
								<span>: <a data-toggle="modal" data-target="#update_client"><u class="">Lotus ETA</u></a></span>
								</div> 
								</div>
								
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">Plans</label>
								</div>
								<div class="col-xs-7">
								<span>: <a href="/design/firm-plan/client-plan-years?id=1"><u class="">Manage Plans</u></a></span>
								</div> 
								</div>
								
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">Email</label>
								</div>
								<div class="col-xs-7">
								<span>: praveen@gmail.com</span>
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
							</div>
							
							<?php } ?>
						
						
						<?php if(Yii::$app->user->identity->usertype == 1 || Yii::$app->user->identity->usertype == 2 ){?>
							
							
								<div class="col-xl-3 col-md-6 col-xs-12 padding-6">
								<div class="col-xs-12 padding-0 border-ddd">
								<div class="col-xs-12  padding-6 search-user-box">
								<div class="search-user-box-dashboard" data-toggle="tooltip" data-placement="bottom" title="Click to view firm dashboard" ><a class="fa fa-dashboard" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/design/dashboard/firms"></a></div>
								<div class="col-xs-2 padding-0" align="center">
								<span class="avatar margin-top-10 margin-bottom-35" href="javascript:void(0);"> <img src="/web/themes/clean-ui/common/img/temp/avatars/1.jpg" alt="Alternative text to the image">
				</span>
				
				<span class=" margin-top-10" href="javascript:void(0);"> <img width="65"src="/images/design/firm_logo.png" alt="Alternative text to the image">
				</span>
								</div>
								<div class="col-xs-9" style="font-family: arial;">
								<!--<i class="fa fa-filter pull-right font-18"></i>-->
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">First Name</label>
								</div>
								<div class="col-xs-7">
								<span>: <a data-toggle="modal" data-target="#update_firm_user"><u class="">Ranjith</u></a></span>
								</div> 
								</div>
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">Last Name</label>
								</div>
								<div class="col-xs-7">
								<span>: <a data-toggle="modal" data-target="#update_firm_user"><u class="">Ankam</u></a></span>
								</div> 
								</div>
								
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">User Type</label>
								</div>
								<div class="col-xs-7">
								<span>: Firm</span>
								</div> 
								</div>
								
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">Firm/Client</label>
								</div>
								<div class="col-xs-7">
								<span>: <a data-toggle="modal" data-target="#update_firm"><u class="">Unity</u></a></span>
								</div> 
								</div>
								
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">Plans</label>
								</div>
								<div class="col-xs-7">
								<span>: <a href="/design/firm-plan/client-plan-years?id=1"><u class="">Manage Plans</u></a></span>
								</div> 
								</div>
								
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">Email</label>
								</div>
								<div class="col-xs-7">
								<span>: ravi@gmail.com</span>
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
							</div>
						
						<?php } ?>
						
						
						<?php if(Yii::$app->user->identity->usertype == 1 || Yii::$app->user->identity->usertype == 2 ){?>
						
						<div class="col-xl-3 col-md-6 col-xs-12 padding-6">
								<div class="col-xs-12 padding-0 border-ddd">
								<div class="col-xs-12  padding-6 search-user-box">
								<div class="search-user-box-dashboard" data-toggle="tooltip" data-placement="bottom" title="Click to view firm dashboard" ><a class="fa fa-dashboard" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/design/dashboard/firms"></a></div>
								<div class="col-xs-2 padding-0" align="center">
								<span class="avatar margin-top-10 margin-bottom-35" href="javascript:void(0);"> <img src="/web/themes/clean-ui/common/img/temp/avatars/1.jpg" alt="Alternative text to the image">
				</span>
				
				<span class=" margin-top-10" href="javascript:void(0);"> <img width="65"src="/images/design/firm_logo.png" alt="Alternative text to the image">
				</span>
								</div>
								<div class="col-xs-9" style="font-family: arial;">
								<!--<i class="fa fa-filter pull-right font-18"></i>-->
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">First Name</label>
								</div>
								<div class="col-xs-7">
								<span>: <a data-toggle="modal" data-target="#update_firm_user"><u class="">Sainath</u></a></span>
								</div> 
								</div>
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">Last Name</label>
								</div>
								<div class="col-xs-7">
								<span>: <a data-toggle="modal" data-target="#update_firm_user"><u class="">Banala</u></a></span>
								</div> 
								</div>
								
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">User Type</label>
								</div>
								<div class="col-xs-7">
								<span>: Firm</span>
								</div> 
								</div>
								
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">Firm/Client</label>
								</div>
								<div class="col-xs-7">
								<span>: <a data-toggle="modal" data-target="#update_firm"><u class="">Unity</u></a></span>
								</div> 
								</div>
								
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">Plans</label>
								</div>
								<div class="col-xs-7">
								<span>: <a href="/design/firm-plan/client-plan-years?id=1"><u class="">Manage Plans</u></a></span>
								</div> 
								</div>
								
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">Email</label>
								</div>
								<div class="col-xs-7">
								<span>: ravi@gmail.com</span>
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
							</div>
						<?php } ?>
						
						
						<?php if(Yii::$app->user->identity->usertype == 1 ){?>
						<div class="col-xl-3 col-md-6 col-xs-12 padding-6">
								<div class="col-xs-12 padding-0 border-ddd">
								<div class="col-xs-12  padding-6 search-user-box">
								<div class="search-user-box-dashboard" data-toggle="tooltip" data-placement="bottom" title="Click to view admin dashboard" ><a class="fa fa-dashboard" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/design/dashboard/admin"></a></div>
								<div class="col-xs-2 padding-0" align="center">
								<span class="avatar margin-top-10 margin-bottom-35" href="javascript:void(0);"> <img src="/web/themes/clean-ui/common/img/temp/avatars/1.jpg" alt="Alternative text to the image">
				</span>
				
				<span class=" margin-top-10" href="javascript:void(0);"> <img width="65"src="/images/design/firm_logo4.png" alt="Alternative text to the image">
				</span>
								</div>
								<div class="col-xs-9" style="font-family: arial;">
								<!--<i class="fa fa-filter pull-right font-18"></i>-->
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">First Name</label>
								</div>
								<div class="col-xs-7">
								<span>: <a  data-toggle="modal" data-target="#update_admin"><u class="">Ravi</u></a></span>
								</div> 
								</div>
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">Last Name</label>
								</div>
								<div class="col-xs-7">
								<span>: <a data-toggle="modal" data-target="#update_admin" ><u class="">Teja</u></a></span>
								</div> 
								</div>
								
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">User Type</label>
								</div>
								<div class="col-xs-7">
								<span>: Admin</span>
								</div> 
								</div>
								
								<div class="col-md-12 padding-0 hidden">
								<div class="col-xs-5">
								<label class="margin-0">Firm/Client</label>
								</div>
								<div class="col-xs-7">
								<span>: <a href="#"><u class="">Unity</u></a></span>
								</div> 
								</div>
								
								<div class="col-md-12 padding-0 hidden" >
								<div class="col-xs-5">
								<label class="margin-0">Plans</label>
								</div>
								<div class="col-xs-7">
								<span>: <a href="/design/firm-plan/client-plan-years?id=1"><u class="">Manage Plans</u></a></span>
								</div> 
								</div>
								
								<div class="col-md-12 padding-0 no-wrap">
								<div class="col-xs-5">
								<label class="margin-0">Email</label>
								</div>
								<div class="col-xs-7">
								<span>: ravi@gmail.com</span>
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
							</div>
							<?php } ?>
						
						
						
	 
	
	</div>
	</div>
	</div>
</section>
				
				
				
								
<div class="modal fade" id="update_firm" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header modal-header-color">
							 
							<button type="button" class="close-modal modal-opacity close-modal-blue" data-dismiss="modal" aria-hidden="true">
								X
							</button>
							<h4 class="modal-title color-white" id="myModalLabel">
								Update Firm
							</h4>
						</div>
						<div class="modal-body col-md-12">
						<div class="col-md-12">
                    <div>
                        <ul class="nav nav-tabs mb-4 blue-nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class=" active" data-target="#home5" data-toggle="tab" href="javascript: void(0);" role="tab" aria-expanded="true">Firm Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="" data-target="#profile5" data-toggle="tab" href="javascript: void(0);" role="tab" aria-expanded="false">Firm Users</a>
                            </li>
                          
                        </ul>
                        <div class="tab-content blue-nav-content">
                            <div class="tab-pane col-md-12 padding-15 active" id="home5" role="tabcard" aria-expanded="true">
                                <div class="col-md-8 padding-0">
								
								<div class="col-md-12 padding-0 margin-bottom-20">	
<fieldset class="fieldset-box">

											<legend>Firm Details</legend>
									<div class="col-md-12 ">
										<div class="form-group ">
											<label class="form-control-label" for="l0">Firm Name *</label>
										
											<input type="text" class="form-control" value="Ravi" placeholder="Firm Name">
										</div>
										</div>
									
									<div class="col-md-6 ">
									<div class="form-group ">
										<label class="form-control-label" for="l0">Business Address 1*</label>
									
										<input type="text" class="form-control" value="greenville" placeholder="Business Address 1">
									</div>
									
									</div>
									<div class="col-md-6 ">
									
									<div class="form-group ">
										<label class="form-control-label" for="l0">Business Address 2</label>
									
										<input type="text" class="form-control" value="greenville" placeholder="Business Address 2">
									</div>
									
									</div>
									<div class="col-md-6">
									
									<div class="form-group ">
										<label class="form-control-label" for="l0">City</label>
									
										<input type="text" class="form-control" value="Dallas" placeholder="City">
									</div>
									
									
									</div>
									<div class="col-md-6 ">
									
									
									<div class="form-group ">
										<label class="form-control-label" for="l0">State *</label>
									
										<select class="form-control edited" id="">
										<?php foreach($states as $key=>$value){?>
										
										<option  <?php if(!empty($firm_id)){?><?php if($value == 'Texas'){echo 'Selected'; }?><?php }?> ><?php echo $value;?></option>
										
										<?php }?>
									</select>
									</div>
									
									
									</div>
									<div class="col-md-6 ">
									<div class="form-group ">
										<label class="form-control-label" for="l0">Zip *</label>
									
										<input type="text" class="form-control" value="533323" placeholder="Zip">
									</div>
									
									</div>
									<div class="col-md-6 ">
									
								<div class="form-group ">
										<label class="form-control-label" for="l0">Website</label>
									
										<input type="text" class="form-control"  value="www.sir.com"placeholder="Website">
									</div>
									
									</div>
									<div class="col-md-6 ">
									<div class="form-group row">
									<div class="col-md-12 ">
										 <div class="col-md-12 padding-0">
									<div class="col-xs-9 padding-0">
                                    <label class="form-control-label" for="l0">Phone *</label>
									</div>
									<div class="col-xs-3 padding-right-0">
									<label class="form-control-label" for="l0">Extn </label>
									</div>
									</div>
									
										<div class="col-md-12 padding-0">
														<div class="col-xs-9 padding-0">
														<input type="text" class="form-control us-phone-mask-input" value="9999999999" maxlength="14">
														</div>
														<div class="col-xs-3 padding-right-0">
														<input type="text" class="form-control" placeholder="ext" value="040">
														</div>
														</div>
														</div >
									</div>
									</div>
									<div class="col-md-6 ">
									<div class="form-group ">
										<label class="form-control-label" for="l0">Mobile #</label>
									
										<input type="text" class="form-control us-phone-mask-input" value="9999999999"
																placeholder="Mobile #">
									</div>
									</div>
									<div class="col-md-6 ">
									
														<div class="form-group">
															<label class="form-control-label" for="l0">Firm
																Locations *</label>
														
															<input type="text" class="form-control" value="Dallas"
																placeholder="Location">
															
														</div>
													



													<div class="row">
														<div class="form-group col-md-12 " align="right">
															<label><a onclick="addLocation();" class="color-blue"><u>Add Additional
																		Locations</u></a></label>
														</div>
													</div>

														<div class=" hide" id="add_location">
														<div class="form-group">
																<label class="form-control-label" for="l0">New Location</label>
														
															<input type="text" class="form-control" Placeholder="Add New Location">
														</div>
														<div class="col-md-12 padding-0" align="right">
															<button type="button" class="btn  btn-modal-blue"
																onclick="addLocation();">Add</button>
																<button class="btn btn-default" onclick="addLocation();">Cancel</button>
														</div>
													</div>
										</div>	
									
									
									
									
									
									</fieldset>
									
									</div>
								</div>
								
								<div class="col-md-4 padding-0">
								
								<div class="col-md-12 padding-0 margin-bottom-20">	
<fieldset class="fieldset-box">

											<legend>Module and Settings</legend>
								<div class="col-md-12">
									<div class="form-group ">
															
														
															<p><a id="modal-alert" href="#alert_firm_screen" class="color-blue"
														data-toggle="modal"><u>Deactivate Firm</u></a></p>
															
														</div>
														
														<div class="form-group">
															<label class="form-control-label" for="l0"><b>Activate Modules</b></label>
														
															<label class="mt-checkbox mt-checkbox-outline"> Plan
																Claims Reporting <input type="checkbox" value="1" checked
																name=""> <span></span>
															</label>
														</div>
														
															<div class="form-group">
																<input type="file" id="input-file-now" class="dropify" />
															</div> 

														
													
								</div> 

</fieldset>

</div>
								
								</div>
							 </div>
                            <div class="tab-pane col-md-12 padding-15" id="profile5" role="tabcard" aria-expanded="false">
							<div class="row padding-10" align="right">
							
																<a class="btn  btn-modal-blue" href="#create_firm_user" data-toggle="modal" >  
																		Add New User</a>
															</div>
							<?php 
															$gridColumns = [
															['class' => 'kartik\grid\SerialColumn'],
															[
																//'class' => 'kartik\grid\EditableColumn',
																'attribute' => 'first_name',
																//'pageSummary' => 'Page Total',
																'headerOptions' => ['class' => 'blue-grid-head'],
																'vAlign'=>'middle',
																'format'=>'raw',
																'value' => function ($model, $key, $index, $widget) {
																	$a_first_name = '';
																	if (! empty ( $model->first_name )) {
																		$a_first_name = '<a  href="#update_firm_user" data-toggle="modal" class="color-blue"><u>'.$model->first_name.'</u></a>';
																	}
																	else
																	{
																		$a_first_name = 'NA';
																	}
																	return $a_first_name;
																},
																//'editableOptions'=>['header'=>'Name', 'size'=>'md']
															],
															[
																//'class' => 'kartik\grid\EditableColumn',
																'attribute' => 'last_name',
																'format'=>'raw',
																'headerOptions' => ['class' => 'blue-grid-head'],
																'vAlign'=>'middle',
																'value' => function ($model, $key, $index, $widget) {
																	$a_first_name = '';
																	if (! empty ( $model->last_name )) {
																		$a_first_name = '<a  href="#update_firm_user" data-toggle="modal" class="color-blue"><u>'.$model->last_name.'</u></a>';
																	}
																	else
																	{
																		$a_first_name = 'NA';
																	}
																	return $a_first_name;
																},
																//'editableOptions'=>['header'=>'Name', 'size'=>'md']
															],
														   [
																//'class' => 'kartik\grid\EditableColumn',
																'attribute' => 'email',
																'headerOptions' => ['class' => 'blue-grid-head'],
																'vAlign'=>'middle',
																	//'editableOptions'=>['header'=>'Name', 'size'=>'md']
															],
															[
																//'class' => 'kartik\grid\EditableColumn',
																'attribute' => 'phone',
																'headerOptions' => ['class' => 'blue-grid-head'],
																'vAlign'=>'middle',
																	//'editableOptions'=>['header'=>'Name', 'size'=>'md']
															],
															 [
																//'class' => 'kartik\grid\EditableColumn',
																'attribute' => 'jobtitle',
																'label' => 'Job Title',
																'headerOptions' => ['class' => 'blue-grid-head'],
																'vAlign'=>'middle',
																	//'editableOptions'=>['header'=>'Name', 'size'=>'md']
															],
															[
																//'class'=>'kartik\grid\BooleanColumn',
																'attribute'=>'is_primary', 
																'format'=>'raw',
																'headerOptions' => ['class' => 'blue-grid-head'],
																'value' => function ($model, $key, $index, $widget) {
																	$a_first_name = '';
																	if (! empty ( $model->is_primary )) {
																		$a_first_name = 'Yes';
																	}
																	else
																	{
																		$a_first_name = 'No';
																	}
																	return $a_first_name;
																},
																'vAlign'=>'middle',
															],
															[
																//'class'=>'kartik\grid\BooleanColumn',
																'attribute'=>'is_billing', 
																'format'=>'raw',
																'headerOptions' => ['class' => 'blue-grid-head'],
																'value' => function ($model, $key, $index, $widget) {
																	$a_first_name = '';
																	if (! empty ( $model->is_billing )) {
																		$a_first_name = 'Yes';
																	}
																	else
																	{
																		$a_first_name = 'No';
																	}
																	return $a_first_name;
																},
																'vAlign'=>'middle',
															],
															 [
																//'class' => 'kartik\grid\EditableColumn',
																'attribute' => 'actions',
																'attribute' => 'Actions',
																//'pageSummary' => 'Page Total',
																'width'=> '100px',
																'format'=>'raw',
																'headerOptions' => ['class' => 'blue-grid-head'],
																'value' => function ($model, $key, $index, $widget) {
																	$link = '<div class="col-md-6"><a class="display-block color-blue" href="#resend_activation_link" data-toggle="modal" ><i class="fa fa-repeat"  data-toggle="tooltip" data-placement="bottom" title="Resend Password"></i></a></div><div class="col-md-6"><a class="display-block color-blue" href="#alert_screen" data-toggle="modal"><i class="fa fa-thumbs-o-down "  data-toggle="tooltip" data-placement="bottom" title="Deactivate User"></i></a></div>';
																	return $link;
																},
																'vAlign'=>'middle',
																	//'editableOptions'=>['header'=>'Name', 'size'=>'md']
															],
															/*[
																'class' => 'kartik\grid\ActionColumn',
																'dropdown' => false,
																'vAlign'=>'middle',
																'urlCreator' => function($action, $model, $key, $index) { return '#'; },
																'viewOptions'=>['title'=>'title', 'data-toggle'=>'tooltip'],
																'updateOptions'=>['title'=>'title', 'data-toggle'=>'tooltip'],
																'deleteOptions'=>['title'=>'title', 'data-toggle'=>'tooltip'], 
															],
															['class' => 'kartik\grid\CheckboxColumn']*/
														];
														echo GridView::widget([
															'dataProvider' => $dataProvider,
															'filterModel' => $searchModel,
															'columns' => $gridColumns,
															'containerOptions' => ['style'=>'overflow: auto'], // only set when $responsive = false
														   /* 'beforeHeader'=>[
																[
																	'columns'=>[
																		['content'=>'Header Before 1', 'options'=>['colspan'=>4, 'class'=>'text-center warning']], 
																		['content'=>'Header Before 2', 'options'=>['colspan'=>4, 'class'=>'text-center warning']], 
																		['content'=>'Header Before 3', 'options'=>['colspan'=>3, 'class'=>'text-center warning']], 
																	],
																	'options'=>['class'=>'skip-export'] // remove this row from export
																]
															],*/
															'toolbar' =>  [
																/*
																'{export}',
																'{toggleData}'*/
															],
															'pjax' => true,
															'bordered' => true,
															'striped' => true,
															'condensed' => false,
															'responsive' => true,
															'hover' => true,
														
												
														   // 'floatHeader' => true,
														   // 'floatHeaderOptions' => ['scrollingTop' => true],
															'showPageSummary' => false,
															'panel' => [
																'heading'=>false,
																'type' => GridView::TYPE_PRIMARY,
																'footer' => false,
															],
														]);
															
															
															?>
                            </div>
                           
                        </div>
                    </div>
                </div>
								</div>
								
							<div class="modal-footer">
							<div class="modal-footer-btn ">
							
							<a href=""  class="btn btn-modal-blue">
								Save
							</a>
							
							 <button class="btn btn-default"  data-dismiss="modal">Cancel</button>
						
							
							
							</div>
						</div>
						</div>
						
					</div>
					
				</div>
				
				
											
<div class="modal fade" id="update_client" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header modal-header-color">
							 
							<button type="button" class="close-modal modal-opacity close-modal-blue" data-dismiss="modal" aria-hidden="true">
								X
							</button>
							<h4 class="modal-title color-white" id="myModalLabel">
								Update Client
							</h4>
						</div>
						<div class="modal-body col-md-12">
						<div class="col-md-12">
                    <div>
                        <ul class="nav nav-tabs mb-4 blue-nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class=" active" data-target="#client_details" data-toggle="tab" href="javascript: void(0);" role="tab" aria-expanded="true">Client Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="" data-target="#client_users" data-toggle="tab" href="javascript: void(0);" role="tab" aria-expanded="false">Client Users</a>
                            </li>
                          
                        </ul>
                        <div class="tab-content blue-nav-content">
                            <div class="tab-pane col-md-12 padding-15 active" id="client_details" role="tabcard" aria-expanded="true">
                              <div class="col-md-8 padding-0">
							
							<div class="col-md-12 padding-0 margin-bottom-20">	
							<fieldset class="fieldset-box">

											<legend>Client Details</legend>	
								<div class="col-md-6">
									<div class="form-group ">
										<label class="form-control-label" for="l0">Firm Name *</label>
									
											<select
										class="form-control edited"
										id="form_control">
										<option>Select Firm</option>
										<option selected>Raviteja</option>
										<option>Praveen</option>
										<option>Firm 2</option>
										<option>Firm 3</option>
									</select> 
									</div>
									
								</div>
								<div class="col-md-6">
								
									<div class="form-group ">
										 <label class="form-control-label" for="l0">Client Name *</label>
                                   
									
										 <input type="text" class="form-control" placeholder="Client Name" <?php if(!empty($client_id)){?>value="Tata Company"<?php }?>>
                                    
									</div>
								
								</div>
								<div class="col-md-6">
								
									<div class="form-group ">
										<label class="form-control-label" for="l0">Business Address 1*</label>
                                    <input type="text" class="form-control" placeholder="Business Address 1" <?php if(!empty($client_id)){?>value="Greenville"<?php }?>>
									</div>
									
								</div>
								<div class="col-md-6">	
									<div class="form-group ">
										   <label class="form-control-label" for="l0">Business Address 2 </label>
                                    <input type="text" class="form-control" placeholder="Business Address 2" <?php if(!empty($client_id)){?>value="USA"<?php }?>>
                                   
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group ">
										 <label class="form-control-label" for="l0">City *</label>
                                    <input type="text" class="form-control" placeholder="City" <?php if(!empty($client_id)){?>value="dallas"<?php }?>>
                                   
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group ">
									 <label class="form-control-label" for="l0">State *</label>
                                      	<select
										class="form-control edited"
										id="">
										<?php foreach($states as $key=>$value){?>
										
										<option <?php if(!empty($client_id)){?><?php if($value == 'Texas'){echo 'selected';}?><?php }?>><?php echo $value;?></option>
										
										<?php }?>
									</select> 
										</div>
								</div>
								<div class="col-md-6">
									
									<div class="form-group ">
											  <label class="form-control-label" for="l0">Zip *</label>
                                    <input type="text" class="form-control" placeholder="Zip" <?php if(!empty($client_id)){?>value="5000852"<?php }?>>
                                  
									</div>
								</div>
								<div class="col-md-6">
								<div class="form-group ">
										  <label class="form-control-label" for="l0">Website</label>
                                    <input type="text" class="form-control" placeholder="Website" <?php if(!empty($client_id)){?>value="www.tata.com"<?php }?>>
                                   
									</div>
									</div>
								<div class="col-md-6">
									<div class="form-group row">
									<div class="col-md-12 ">
									 <div class="col-md-12 padding-0">
									<div class="col-xs-9 padding-0">
                                    <label class="form-control-label" for="l0">Phone *</label>
									</div>
									<div class="col-xs-3 padding-right-0">
									<label class="form-control-label" for="l0">Extn </label>
									</div>
									</div>
										<div class="col-md-12 padding-0">
														<div class="col-xs-9 padding-0">
														<input type="text" class="form-control us-phone-mask-input" value="" maxlength="14">
														</div>
														<div class="col-xs-3 padding-right-0">
														<input type="text" class="form-control" placeholder="ext" value="040">
														</div>
														</div>
														</div >
									</div>
									</div>
									
									<div class="col-md-6 ">
									<div class="form-group ">
										<label class="form-control-label" for="l0">Mobile #</label>
									
										<input type="text" class="form-control us-phone-mask-input" value="" maxlength="14">
									</div>
									</div>
									
								<div class="col-md-6">
									<div class="form-group ">
									 <label class="form-control-label" for="l0">Primary Consultant*</label>
								<select
										class="form-control edited"
										id="form_control">
										<option>Select Primary Consultant</option>
										<option>Raviteja</option>
										<option <?php if(!empty($client_id)){?>selected<?php }?>>Praveen</option>
										<option>Firm 2</option>
										<option>Firm 3</option>
										
									</select> 
                                
									</div>
									</div>
								<div class="col-md-6">
									
														<div class="form-group">
															    <label class="form-control-label" for="l0">Primary Account Manager*</label>
										<select class="form-control edited" id="form_control">
										<option value="Select Account Manager">Select Account Manager</option>
										<option value="Raviteja">Raviteja</option>
										<option value="Praveen">Praveen</option>
										<option value="Firm 2" <?php if(!empty($client_id)){?>selected<?php }?>>Firm 2</option>
										<option value="Firm 3">Firm 3</option>
										
									</select>
								
                                 
															
														</div>
													</div>
													
									<div class="col-md-6">
									
														<div class="form-group">
															    <label class="form-control-label" for="l0">Primary Service Rep*</label>
										<select class="form-control edited" id="form_control">
										<option value="Select Account Manager">Select Service Rep</option>
										<option value="Raviteja">Raviteja</option>
										<option value="Praveen">Praveen</option>
										<option value="Firm 2" <?php if(!empty($client_id)){?>selected<?php }?>>Firm 2</option>
										<option value="Firm 3">Firm 3</option>
										
									</select>
								
                                 
															
														</div>
													</div>
													
	<div class="col-md-6">							
<div class="form-group ">
									 <label class="form-control-label" for="l0">Upload Company Logo</label>
							<input type="file" class="form-control">
                                
									</div>	
								
								</div>
								
								
								</fieldset>
								</div>
								
								</div>
								
								<div class="col-md-4 padding-right-0">
								
		<div class="col-md-12 padding-0 margin-bottom-20">	
<fieldset class="fieldset-box">

											<legend>Access &amp; Settings</legend>	
<div class="form-group">
   <label class="form-control-label" for="l0">Select Employer Size*</label>
								<select
										class="form-control edited"
										id="form_control">
										<option>0-50</option>
										<option <?php if(!empty($client_id)){?>selected <?php }?>> 50-100</option>
										<option>100-200</option>
										<option>200-300</option>
										
									</select> 
											</div>	
											
									<div class="form-group ">
														 <label class="form-control-label" for="l0">Select Industry Code*</label>
								<select
										class="form-control edited"
										id="form_control">
										<option>Manufacturing Industry</option>
										<option>Raviteja</option>
										<option >Praveen</option>
										<option>Firm 2</option>
										<option <?php if(!empty($client_id)){?>selected<?php }?>>Firm 3</option>
										
									</select> 
                        
															
														</div>
														
														<div class="">
															<label class="form-control-label" for="l0">Bill Client Usage to:</label>
														
															   
				              <div class="mt-radio-inline padding-0">
                                                        <label class="mt-radio mt-radio-outline">Firm
                                                            <input type="radio" value="1" name="test1" checked>
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-radio mt-radio-outline"> Client
                                                            <input type="radio" value="1" name="test1">
                                                            <span></span>
                                                        </label>
                                                    </div> 
													
														</div>
														
														
														
															<div class="">
																	<label class="form-control-label" for="l0">Logo to use in Reporting</label>
							     <div class="mt-radio-inline  padding-0">
                                                        <label class="mt-radio mt-radio-outline">Use Firm Logo 
                                                            <input type="radio" value="1" name="test3" checked>
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-radio mt-radio-outline"> Use Client Logo 
                                                            <input type="radio" value="1" name="test3">
                                                            <span></span>
                                                        </label>
                                                    </div>
																<!--<input type="file" id="input-file-now" class="dropify" />-->
															</div>
															</fieldset>
</div>

<div class="col-md-12 padding-0 margin-bottom-20">	
<fieldset class="fieldset-box">

											<legend>Set Client Subscriptions</legend>	
														<div class="form-group">
														<label class="form-control-label">Self Insured Reporting*</label>
							<div class="">
									 <label class="mt-checkbox mt-checkbox-outline">   Activate
										<input type="checkbox" value="1" name="" <?php if(!empty($client_id)){?>checked<?php }?>>
										<span></span>
									</label> 
											</div>
							<div class=" ">
							       <div class="mt-radio-inline  padding-0">
                                                        <label class="mt-radio mt-radio-outline">Basic
                                                            <input type="radio" value="1" checked name="test">
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-radio mt-radio-outline"> Full Service
                                                            <input type="radio" value="1" name="test">
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-radio mt-radio-outline"> Bulk
                                                            <input type="radio" value="1" name="test">
                                                            <span></span>
                                                        </label>
                                                    </div>
											</div>
														</div>
														
														<div class="form-group">
															<div class="row">
															<div class="col-md-12">
							<div class="pull-left">
							 <label class="margin-bottom-0 margin-right-2">Client#</label> 
							<button type="button" class="btn btn-primary cursor-default">4</button>
							</div>
							<div class="pull-left margin-left-10">
							 <label class="margin-bottom-0 margin-right-2">$/Mo</label> 
							<button type="button" class="btn btn-primary cursor-default">$54</button>
							</div>
							</div>
							</div>
							
														</div>
										</fieldset>		
											
								</div>  
								</div>
							 </div>
                            <div class="tab-pane col-md-12 padding-15" id="client_users" role="tabcard" aria-expanded="false">
							<div class="row padding-10" align="right">
							
																<a class="btn  btn-modal-blue" href="#add_client_user" data-toggle="modal">  
																		Add New User</a>
															</div>
								<?php 
															$gridColumns = [
															['class' => 'kartik\grid\SerialColumn'],
															[
																//'class' => 'kartik\grid\EditableColumn',
																'attribute' => 'first_name',
																//'pageSummary' => 'Page Total',
																'vAlign'=>'middle',
																'format'=>'raw',
																'headerOptions' => ['class' => 'blue-grid-head'],
																'value' => function ($model, $key, $index, $widget) {
																	$a_first_name = '';
																	if (! empty ( $model->first_name )) {
																		$a_first_name = '<a  href="#update_client_user" data-toggle="modal" class="color-blue"><u>'.$model->first_name.'</u></a>';
																	}
																	else
																	{
																		$a_first_name = 'NA';
																	}
																	return $a_first_name;
																},
																//'editableOptions'=>['header'=>'Name', 'size'=>'md']
															],
															[
																//'class' => 'kartik\grid\EditableColumn',
																'attribute' => 'last_name',
																'format'=>'raw',
																//'pageSummary' => 'Page Total',
																'vAlign'=>'middle',
																'headerOptions' => ['class' => 'blue-grid-head'],
																'value' => function ($model, $key, $index, $widget) {
																	$a_first_name = '';
																	if (! empty ( $model->last_name )) {
																		$a_first_name = '<a  href="#update_client_user" data-toggle="modal" class="color-blue"><u>'.$model->last_name.'</u></a>';
																	}
																	else
																	{
																		$a_first_name = 'NA';
																	}
																	return $a_first_name;
																},
																//'editableOptions'=>['header'=>'Name', 'size'=>'md']
															],
														   [
																//'class' => 'kartik\grid\EditableColumn',
																'attribute' => 'email',
																'headerOptions' => ['class' => 'blue-grid-head'],
																//'pageSummary' => 'Page Total',
																'vAlign'=>'middle',
																	//'editableOptions'=>['header'=>'Name', 'size'=>'md']
															],
															[
																//'class' => 'kartik\grid\EditableColumn',
																'attribute' => 'phone',
																'headerOptions' => ['class' => 'blue-grid-head'],
																//'pageSummary' => 'Page Total',
																'vAlign'=>'middle',
																	//'editableOptions'=>['header'=>'Name', 'size'=>'md']
															],
															 [
																//'class' => 'kartik\grid\EditableColumn',
																'attribute' => 'jobtitle',
																'label' => 'Job Title',
																'headerOptions' => ['class' => 'blue-grid-head'],
																//'pageSummary' => 'Page Total',
																'vAlign'=>'middle',
																	//'editableOptions'=>['header'=>'Name', 'size'=>'md']
															],
															[
																//'class'=>'kartik\grid\BooleanColumn',
																'attribute'=>'is_primary', 
																'format'=>'raw',
																'headerOptions' => ['class' => 'blue-grid-head'],
																'value' => function ($model, $key, $index, $widget) {
																	$a_first_name = '';
																	if (! empty ( $model->is_primary )) {
																		$a_first_name = 'Yes';
																	}
																	else
																	{
																		$a_first_name = 'No';
																	}
																	return $a_first_name;
																},
																'vAlign'=>'middle',
															],
															[
																//'class'=>'kartik\grid\BooleanColumn',
																'attribute'=>'is_billing', 
																'format'=>'raw',
																'headerOptions' => ['class' => 'blue-grid-head'],
																'value' => function ($model, $key, $index, $widget) {
																	$a_first_name = '';
																	if (! empty ( $model->is_billing )) {
																		$a_first_name = 'Yes';
																	}
																	else
																	{
																		$a_first_name = 'No';
																	}
																	return $a_first_name;
																},
																'vAlign'=>'middle',
															],
														/*	[
																//'class'=>'kartik\grid\BooleanColumn',
																'attribute'=>'status', 
																'label'=>'User Status',
																'format'=>'raw',
																'headerOptions' => ['class' => 'blue-grid-head'],
																'value' => function ($model, $key, $index, $widget) {
																	$a_first_name = '';
																	if (! empty ( $model->status )) {
																		$a_first_name = '<a><u class="color-blue">Active</u></a>';
																	}
																	else
																	{
																		$a_first_name = '<a><u class="color-blue">Inactive</u></a>';
																	}
																	return $a_first_name;
																},
																'vAlign'=>'middle',
															],*/
															 [
																//'class' => 'kartik\grid\EditableColumn',
																'attribute' => 'actions',
																'attribute' => 'Actions',
																//'pageSummary' => 'Page Total',
																'width'=> '100px',
																'format'=>'raw',
																'headerOptions' => ['class' => 'blue-grid-head'],
																'value' => function ($model, $key, $index, $widget) {
																	$link = '<div class="col-md-6"><a class="display-block color-blue" href="#resend_activation_link" data-toggle="modal" ><i class="fa fa-repeat"  data-toggle="tooltip" data-placement="bottom" title="Resend Password"></i></a></div><div class="col-md-6"><a class="display-block color-blue" href="#alert_screen" data-toggle="modal"><i class="fa fa-thumbs-o-down "  data-toggle="tooltip" data-placement="bottom" title="Deactivate User"></i></a></div>';
																	return $link;
																},
																'vAlign'=>'middle',
																	//'editableOptions'=>['header'=>'Name', 'size'=>'md']
															],
															/*[
																'class' => 'kartik\grid\ActionColumn',
																'dropdown' => false,
																'vAlign'=>'middle',
																'urlCreator' => function($action, $model, $key, $index) { return '#'; },
																'viewOptions'=>['title'=>'title', 'data-toggle'=>'tooltip'],
																'updateOptions'=>['title'=>'title', 'data-toggle'=>'tooltip'],
																'deleteOptions'=>['title'=>'title', 'data-toggle'=>'tooltip'], 
															],
															['class' => 'kartik\grid\CheckboxColumn']*/
														];
														echo GridView::widget([
															'dataProvider' => $dataProvider,
															'filterModel' => $searchModel,
															'columns' => $gridColumns,
															'containerOptions' => ['style'=>'overflow: auto'], // only set when $responsive = false
														   /* 'beforeHeader'=>[
																[
																	'columns'=>[
																		['content'=>'Header Before 1', 'options'=>['colspan'=>4, 'class'=>'text-center warning']], 
																		['content'=>'Header Before 2', 'options'=>['colspan'=>4, 'class'=>'text-center warning']], 
																		['content'=>'Header Before 3', 'options'=>['colspan'=>3, 'class'=>'text-center warning']], 
																	],
																	'options'=>['class'=>'skip-export'] // remove this row from export
																]
															],*/
															'toolbar' =>  [
																/*
																'{export}',
																'{toggleData}'*/
															],
															'pjax' => true,
															'bordered' => true,
															'striped' => true,
															'condensed' => false,
															'responsive' => true,
															'hover' => true,
														   // 'floatHeader' => true,
														   // 'floatHeaderOptions' => ['scrollingTop' => true],
															'showPageSummary' => false,
															'panel' => [
															'heading'=>false,
																'type' => GridView::TYPE_PRIMARY,
																'footer' => false,
															],
														]);
															
															
															?>
                            </div>
                           
                        </div>
                    </div>
                </div>
								</div>
								
							<div class="modal-footer">
							<div class="modal-footer-btn ">
							<a href=""  class="btn btn-modal-blue" >
								Save
							</a>
							
							 <button class="btn btn-default"  data-dismiss="modal">Cancel</button>
						
							
							
							</div>
						</div>
						</div>
						
					</div>
					
				</div>
				<script>
				$('#search_link').addClass('page-active');
				$(document).ready(function(){
					
					 $("[data-toggle=popover-hover]").popover({
            trigger: 'hover'
        });
		 $("[data-toggle=tooltip]").tooltip();
					
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
			  });
				</script>