<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use kartik\grid\GridView;
use yii\helpers\Url;
use app\components\EncryptDecryptComponent;

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
$industry =         array(
									    'Manufacturing',
										'Wholesale Trade Retail Trade',
										'Professional / Scientific / Technical Services',
										'Health Care & Social Assistance',
										'Real Estate, Renting & Leasing',
										'Public Administration, Educational, Utilities',
										'Information Technology',
										'Arts, Entertainment, Recreation',
										'Accommodation & Food Services',
										'Construction',
										'Agricultural, Forestry, Fishing & Hunting',
										'Oil & gas',
										'Management of Companies',
										'Administration & Support',
									
);            
asort($industry);   
?>

<section class="page-content padding-0">
<div class="row">
	<div class="search-header">
	<div class="col-lg-12 search-header-inner">
			<div class="col-md-3 div-search ">
				<div class="search-block">
                    <div class="form-input-icon form-input-icon-right">
                        <i class="icmn-search"></i>
                        <input type="text" class="form-control form-control-sm" id="textsearch" placeholder="Search" <?php if(!empty(\Yii::$app->request->Get('search'))){ ?> value="<?php echo \Yii::$app->request->Get('search'); ?>" <?php }?>>
                        <button type="button" class="search-block-submit " onclick="textsearch();"></button>
                    </div>
                </div>
				</div>
 
							<div class="col-md-9 aplhabets-div  ">
							<ul class="categoryList  font-white">
							<li><div class="categoryButton all"  data-toggle="tooltip" onclick="search('all');" data-placement="bottom" title="Total Records : <?php echo isset($counts['total'])?$counts['total']:0; ?>">All</div></li>
							<li><div class="categoryButton a" data-toggle="tooltip" onclick="search('a');" data-placement="bottom" title="Total Records : <?php echo isset($counts['a'])?$counts['a']:0; ?>">A</div></li>
							<li><div class="categoryButton b" data-toggle="tooltip" onclick="search('b');" data-placement="bottom" title="Total Records : <?php echo isset($counts['b'])?$counts['b']:0; ?>">B</div></li>
							<li><div class="categoryButton c" data-toggle="tooltip" onclick="search('c');" data-placement="bottom" title="Total Records : <?php echo isset($counts['c'])?$counts['c']:0; ?>">C</div></li>
							<li><div class="categoryButton d" data-toggle="tooltip" onclick="search('d');" data-placement="bottom" title="Total Records : <?php echo isset($counts['d'])?$counts['d']:0; ?>">D</div></li>
							<li><div class="categoryButton e" data-toggle="tooltip" onclick="search('e');" data-placement="bottom" title="Total Records : <?php echo isset($counts['e'])?$counts['e']:0; ?>">E</div></li>
							<li><div class="categoryButton f" data-toggle="tooltip" onclick="search('f');" data-placement="bottom" title="Total Records : <?php echo isset($counts['f'])?$counts['f']:0; ?>">F</div></li>
							<li><div class="categoryButton g" data-toggle="tooltip" onclick="search('g');" data-placement="bottom" title="Total Records : <?php echo isset($counts['g'])?$counts['g']:0; ?>">G</div></li>
							<li><div class="categoryButton h" data-toggle="tooltip" onclick="search('h');" data-placement="bottom" title="Total Records : <?php echo isset($counts['h'])?$counts['h']:0; ?>">H</div></li>
							<li><div class="categoryButton i" data-toggle="tooltip" onclick="search('i');" data-placement="bottom" title="Total Records : <?php echo isset($counts['i'])?$counts['i']:0; ?>">I</div></li>
							<li><div class="categoryButton j" data-toggle="tooltip" onclick="search('j');" data-placement="bottom" title="Total Records : <?php echo isset($counts['j'])?$counts['j']:0; ?>">J</div></li>
							<li><div class="categoryButton k" data-toggle="tooltip" onclick="search('k');" data-placement="bottom" title="Total Records : <?php echo isset($counts['k'])?$counts['k']:0; ?>">K</div></li>
							<li><div class="categoryButton l" data-toggle="tooltip" onclick="search('l');" data-placement="bottom" title="Total Records : <?php echo isset($counts['l'])?$counts['l']:0; ?>">L</div></li>
							<li><div class="categoryButton m" data-toggle="tooltip" onclick="search('m');" data-placement="bottom" title="Total Records : <?php echo isset($counts['m'])?$counts['m']:0; ?>">M</div></li>
							<li><div class="categoryButton n" data-toggle="tooltip" onclick="search('n');" data-placement="bottom" title="Total Records : <?php echo isset($counts['n'])?$counts['n']:0; ?>">N</div></li>
							<li><div class="categoryButton o" data-toggle="tooltip" onclick="search('o');" data-placement="bottom" title="Total Records : <?php echo isset($counts['o'])?$counts['o']:0; ?>">O</div></li>
							<li><div class="categoryButton p" data-toggle="tooltip" onclick="search('p');" data-placement="bottom" title="Total Records : <?php echo isset($counts['p'])?$counts['p']:0; ?>">P</div></li>
							<li><div class="categoryButton q" data-toggle="tooltip" onclick="search('q');" data-placement="bottom" title="Total Records : <?php echo isset($counts['q'])?$counts['q']:0; ?>">Q</div></li>
							<li><div class="categoryButton r" data-toggle="tooltip" onclick="search('r');" data-placement="bottom" title="Total Records : <?php echo isset($counts['r'])?$counts['r']:0; ?>">R</div></li>
							<li><div class="categoryButton s" data-toggle="tooltip" onclick="search('s');" data-placement="bottom" title="Total Records : <?php echo isset($counts['s'])?$counts['s']:0; ?>">S</div></li>
							<li><div class="categoryButton t" data-toggle="tooltip" onclick="search('t');" data-placement="bottom" title="Total Records : <?php echo isset($counts['t'])?$counts['t']:0; ?>">T</div></li>
							<li><div class="categoryButton u" data-toggle="tooltip" onclick="search('u');" data-placement="bottom" title="Total Records : <?php echo isset($counts['u'])?$counts['u']:0; ?>">U</div></li>
							<li><div class="categoryButton v" data-toggle="tooltip" onclick="search('v');" data-placement="bottom" title="Total Records : <?php echo isset($counts['v'])?$counts['v']:0; ?>">V</div></li>
							<li><div class="categoryButton w" data-toggle="tooltip" onclick="search('w');" data-placement="bottom" title="Total Records : <?php echo isset($counts['w'])?$counts['w']:0; ?>">W</div></li>
							<li><div class="categoryButton x" data-toggle="tooltip" onclick="search('x');" data-placement="bottom" title="Total Records : <?php echo isset($counts['x'])?$counts['x']:0; ?>">X</div></li>
							<li><div class="categoryButton y" data-toggle="tooltip" onclick="search('y');" data-placement="bottom" title="Total Records : <?php echo isset($counts['y'])?$counts['y']:0; ?>">Y</div></li>
							<li><div class="categoryButton z" data-toggle="tooltip" onclick="search('z');" data-placement="bottom" title="Total Records : <?php echo isset($counts['z'])?$counts['z']:0; ?>">Z</div></li>
							<li><div class="categoryButton num" onclick="search('num');">#</div></li>
							</ul>
							
							</div>
							
						</div>
	</div>
	</div>
	
	
	<div class="page-content col-md-12">
	<div class="container">
	<div class="col-md-12 border-ddd widget  pull-left width-100">
							<div class="col-md-12 margin-top-15 margin-bottom-10 color-blue hide">	<strong class="margin-right-10">Search Results</strong>
							</div>
								
								<div class="col-md-12  padding-0">
								
								<?php foreach ($users as $user) { ?>
								
								
								<div class="col-xl-4 col-md-6 col-xs-12 padding-10">
								
								<div class="col-xs-12 padding-0 border-ddd">
								<div class="col-xs-12  padding-6 search-user-box-new">
								<div class="col-xs-3 margin-top-10 padding-0" align="center">
								<span class="avatar-search  margin-bottom-35" href="javascript:void(0);"> <img src="<?php echo Url::home(); ?>images<?php 
								if($user['usertype']==1){ if($user['admin_pic']){ echo '/admin_user/'.$user['admin_pic']; }else{ echo '/defaultuserimg.png';}}elseif ($user['usertype']==2){
									if($user['firm_pic']){ echo '/firm_user/'.$user['firm_pic']; }else{ echo '/defaultuserimg.png';}}else{ if($user['client_pic']){ echo '/client_user/'.$user['client_pic']; }else{ echo '/defaultuserimg.png';} }
								 ?>" alt="NA">
				</span>
				
				<span class=" margin-top-10" href="javascript:void(0);"> <img width="30" src="<?php echo Url::home(); ?>images<?php 
				if($user['usertype']==1){ echo '/logo/sir_logo.png';}
				elseif ($user['usertype']==2){if($user['firm_logo']){ echo '/firm-logos/'.$user['firm_logo']; }else{ echo '/no_logo.png';}}
				else{ if($user['company_logo']){ echo '/client_logo/'.$user['company_logo']; }else{ echo '/no_logo.png';} }
				 ?>" alt="NA">
				</span>
								</div>
								<div class="col-xs-9  margin-top-10" style="font-family: arial;">
								<div class="col-xs-12 padding-0  margin-bottom-35">
								<div class="col-xs-9 ">
								<div class="no-wrap"><?php echo $user['usertype']==1?$user['admin_user']:($user['usertype']==2?$user['firm_user']:$user['client_user']); ?></div>
								<div class="no-wrap">
								<?php if($user['usertype']==1){ if($user['admin_contact']){?> <span class="us-phone-mask-input"><?php echo $user['admin_contact'];?></span> <?php }else { echo 'NA'; } }
								elseif($user['usertype']==2){ if($user['firm_contact']){?> <span class="us-phone-mask-input"><?php echo $user['firm_contact'];?></span><?php }else { echo 'NA'; } }
								elseif($user['usertype']==3){ if($user['client_contact']){?> <span class="us-phone-mask-input"><?php echo $user['client_contact'];?></span><?php }else { echo 'NA'; } }
								
								 ?>
								</div>
								<div class="no-wrap"><a href="mailto:><?php echo $user['username']; ?>" class="color-blue"><?php echo $user['username']; ?></a></div>
								</div>
							<!--	<div class="col-xs-3 pull-right">
								<a data-toggle="modal" data-target="#update_firm_user"><img src="/images/design/drop-down-arrow.png" alt="Alternative text to the image" data-toggle="tooltip" data-placement="bottom" title="Click to update firm user"></a>
								</div>-->
								<div class="col-xs-3">
								<?php 
								if($user['usertype']==1){ 
                            $admin_user_id = EncryptDecryptComponent::encrytedUser ( $user['admin_id'] );
								?>
								<a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/user/updateadminuser?adminId=<?php echo $admin_user_id;?>" class="color-blue admin-view"><i class="fa fa-pencil-square-o"alt="Alternative text to the image" data-toggle="tooltip" data-placement="bottom" title="Click to update admin user"></i></a> 
								<?php }elseif($user['usertype']==2){ 
								$encrypt_firm_id = EncryptDecryptComponent::encrytedUser ( $user['firm_id'] );
								$firm_user_id = EncryptDecryptComponent::encrytedUser ( $user['firm_user_id'] );
								
								?>
								<a  href="/user/addfirmuser?firmId=<?php echo $encrypt_firm_id;?>&firmUserId=<?php echo $firm_user_id;?>" class="color-blue search-edit view"><i class="fa fa-pencil-square-o"alt="Alternative text to the image" data-toggle="tooltip" data-placement="bottom" title="Click to update firm user"></i></a>
								<?php }elseif($user['usertype']==3){ 
								$encrypt_client_id = EncryptDecryptComponent::encrytedUser ( $user['client_id'] );
								$client_user_id = EncryptDecryptComponent::encrytedUser ( $user['client_user_id'] );
								
								?>
								<a  href="/user/addclientuser?clientId=<?php echo $encrypt_client_id;?>&clientUserId=<?php echo $client_user_id;?>" class="color-blue search-edit view-client"><i class="fa fa-pencil-square-o"alt="Alternative text to the image" data-toggle="tooltip" data-placement="bottom" title="Click to update client user"></i></a>
								<?php } ?>
								</div>
								</div>
								<div class="col-xs-12 padding-0  ">
								<div class="col-xs-9 ">
								<div class="no-wrap"><?php echo $user['usertype']==1?'Admin':($user['usertype']==2?'Firm':'Client'); ?></div>
								</div>
								<div class="col-xs-3 pull-right">
								<div class="color-blue pull-left margin-right-10" data-toggle="tooltip" data-placement="bottom" title=<?php echo $user['usertype']==1?'"Click to view Admin dashboard"':($user['usertype']==2?'"Click to view firm dashboard"':'"Click to view Client dashboard"'); ?> >
								<?php 
								if($user['usertype']==1){ ?>
								<a class="fa fa-dashboard color-blue" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/dashboard/admin"></a>
								<?php }else if($user['usertype']==2){?>
								<a class="fa fa-dashboard color-blue" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/dashboard/firms"></a>
								<?php }else{?>
								<a class="fa fa-dashboard color-blue" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/dashboard/clients"></a>
								<?php }?>
								</div>
								<?php 
								if($user['usertype']==1){ ?>
								<a data-toggle="modal" data-target="#update_admin" class="color-blue"><i class="fa fa-pencil-square-o"alt="Alternative text to the image" data-toggle="tooltip" data-placement="bottom" title="Click to update admin user"></i></a>
								<?php }else if($user['usertype']==2){
									$encrypt_firm_id = EncryptDecryptComponent::encrytedUser ( $user['firm_id'] );
									
									?>
								<a  href="user/firmdetails?id=<?php echo $encrypt_firm_id;?>" class="color-blue view-firm-detail" ><i class="fa fa-pencil-square-o"alt="Alternative text to the image" data-toggle="tooltip" data-placement="bottom" title="Click to update firm"></i></a>
								<a data-toggle="modal" data-target="#update_firm" class="color-blue"><i class="fa fa-pencil-square-o"alt="Alternative text to the image" data-toggle="tooltip" data-placement="bottom" title="Click to update firm"></i></a>
								<?php }else{
									$encrypt_client_id = EncryptDecryptComponent::encrytedUser ( $user['client_id'] );
									?>
								
								<a  href="/user/clientuser?id=<?php echo $encrypt_client_id;?>" class="color-blue " target="_blank"><i class="fa fa-pencil-square-o"alt="Alternative text to the image" data-toggle="tooltip" data-placement="bottom" title="Click to update client"></i></a>
								<!--<a data-toggle="modal" data-target="#update_client" class="color-blue"><i class="fa fa-pencil-square-o"alt="Alternative text to the image" data-toggle="tooltip" data-placement="bottom" title="Click to update client"></i></a>-->
								<?php }?>
								
								<!--<a data-toggle="modal" data-target="#update_firm" ><img src="/images/design/drop-down-arrow.png" alt="Alternative text to the image" data-toggle="tooltip" data-placement="bottom" title="Click to update firm"></a>
								-->
								</div>
								<div class="col-xs-9 ">
								<div class="no-wrap"><b><?php echo $user['usertype']==1?'SIR':($user['usertype']==2?($user['firm_name']?$user['firm_name']:'NA'):($user['client_name']?$user['client_name']:'NA')); ?></b></div>
								</div>
								</div>
								</div>
								 </div>
								</div>
							</div>
						
						
						
						<?php  } ?>
						
						<?php /*if(Yii::$app->user->identity->usertype == 1 || Yii::$app->user->identity->usertype == 2 || Yii::$app->user->identity->usertype == 3){?>
						<div class="col-xl-4 col-md-6 col-xs-12 padding-10">
								
								<div class="col-xs-12 padding-0 border-ddd">
								<div class="col-xs-12  padding-6 search-user-box-new">
								<div class="col-xs-3 margin-top-10 padding-0" align="center">
								<span class="avatar-search  margin-bottom-35" href="javascript:void(0);"> <img src="/themes/clean-ui/common/img/temp/avatars/1.jpg" alt="Alternative text to the image">
				</span>
				
				<span class=" margin-top-10" href="javascript:void(0);"> <img width="65"src="/images/design/firm_logo3.png" alt="Alternative text to the image">
				</span>
								</div>
								<div class="col-xs-9  margin-top-10" style="font-family: arial;">
								<div class="col-xs-12 padding-0  margin-bottom-35">
								<div class="col-xs-9 ">
								<div class="no-wrap">Ravi Teja</div>
								<div class="no-wrap">888-999-1234</div>
								<div class="no-wrap"><a href="mailto:ravi@gmail.com" class="color-blue">ravi@gmail.com</a></div>
								</div>
								
								<div class="col-xs-3 pull-right">
								<a data-toggle="modal" data-target="#update_client_user" class="color-blue"><i class="fa fa-pencil-square-o"alt="Alternative text to the image" data-toggle="tooltip" data-placement="bottom" title="Click to update client user"></i></a>
								</div>
						
								
								</div>
								<div class="col-xs-12 padding-0  ">
								<div class="col-xs-9 ">
								<div class="no-wrap">Client</div>
								</div>
								
								
								<div class="col-xs-3 pull-right">
								<div class="color-blue pull-left margin-right-10" data-toggle="tooltip" data-placement="bottom" title="Click to view client dashboard" ><a class="fa fa-dashboard color-blue" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/dashboard/clients"></a></div>
							 
								<a data-toggle="modal" data-target="#update_client" class="color-blue"><i class="fa fa-pencil-square-o"alt="Alternative text to the image" data-toggle="tooltip" data-placement="bottom" title="Click to update client"></i></a>
						 
								
								</div>
								<div class="col-xs-9 ">
								<div class="no-wrap"><b>ECM Insurance Solutions</b></div>
								</div>
								</div>
								</div>
								 </div>
								</div>
							</div>
							<?php } ?>
						
						
					
						
						
						
						
						
						<?php if(Yii::$app->user->identity->usertype == 1 ){?>
						
						<div class="col-xl-4 col-md-6 col-xs-12 padding-10">
								
								<div class="col-xs-12 padding-0 border-ddd">
								<div class="col-xs-12  padding-6 search-user-box-new">
								<div class="col-xs-3 margin-top-10 padding-0" align="center">
								<span class="avatar-search  margin-bottom-35" href="javascript:void(0);"> <img src="/themes/clean-ui/common/img/temp/avatars/1.jpg" alt="Alternative text to the image">
				</span>
				
				<span class=" margin-top-10" href="javascript:void(0);"> <img width="65"src="/images/design/firm_logo4.png" alt="Alternative text to the image">
				</span>
								</div>
								<div class="col-xs-9  margin-top-10" style="font-family: arial;">
								<div class="col-xs-12 padding-0  margin-bottom-35">
								<div class="col-xs-9 ">
								<div class="no-wrap">Admin Teja</div>
								<div class="no-wrap">888-999-1234</div>
								<div class="no-wrap"><a href="mailto:ravi@gmail.com" class="color-blue">ravi@gmail.com</a></div>
								</div>
								<div class="col-xs-3 pull-right">
								<a data-toggle="modal" data-target="#update_admin" class="color-blue"><i class="fa fa-pencil-square-o"alt="Alternative text to the image" data-toggle="tooltip" data-placement="bottom" title="Click to update admin user"></i></a>
								</div>
								</div>
								<div class="col-xs-12 padding-0  ">
								<div class="col-xs-9 ">
								<div class="no-wrap">Admin</div>
								</div>
								<div class="col-xs-3 pull-right">
								<div class="color-blue pull-left margin-right-10" data-toggle="tooltip" data-placement="bottom" title="Click to view admin dashboard" ><a class="fa fa-dashboard color-blue" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/dashboard/admin"></a></div>
								</div>
								<div class="col-xs-9 ">
								<div class="no-wrap"><b>SKY Insurance Tech</b></div>
								</div>
								</div>
								</div>
								 </div>
								</div>
							</div>
							
						
							<?php }*/ ?>
						
						
						
	 
	
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
                                <a class=" active" data-target="#home5" data-toggle="tab" href="javascript: void(0);" role="tab" aria-expanded="true">Firm Details
								<span class="fa fa-info-circle information-icon" title="Firm details" data-container="body" data-toggle="popover-hover" data-placement="right" data-content="Enter in the basic details of the firm "></span></a>
                            </li>
                            <li class="nav-item">
                                <a class="" data-target="#profile5" data-toggle="tab" href="javascript: void(0);" role="tab" aria-expanded="false">Firm Users
								<span class="fa fa-info-circle information-icon" title="Firm Users" data-container="body" data-toggle="popover-hover" data-placement="right" data-content="Enter in the basic details of the firm user"></span></a>
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
									
										<input type="text" class="form-control numbers" value="533323" placeholder="Zip">
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
										
									
                                    <label class="form-control-label" for="l0">Phone *</label>
									
							 	<input type="text" class="form-control us-phone-mask-input" value="<?php if(!empty($firm_id)){?>9999999999<?php }?>" maxlength="14">
													
														</div >
									</div>
									
										
							</div>
								 
									<div class="col-md-6 ">
									
														<div class="form-group">
															<label class="form-control-label" for="l0">Firm
																Locations *
																	<span class="fa fa-info-circle information-icon" title="Firm Locations" data-container="body" data-toggle="popover-hover" data-placement="right" data-content="Enter in the various firm locations.  These locations will later be used when entering your firm users to associate which of your users are from which locations."></span>
																	</label>
														
															<input type="text" class="form-control" value="Dallas"
																placeholder="Location">
															
														</div>
													



													<div class="row">
														<div class="form-group col-md-12 " align="right">
															<label><a onclick="addLocation();" class="color-blue"><u>Add Additional
																		Locations</u></a></label>
														</div>
													</div>

														<div class=" hide" id="">
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
															<label class="form-control-label" for="l0"><b>Activate Modules
																<span class="fa fa-info-circle information-icon" title="Activate Modules" data-container="body" data-toggle="popover-hover" data-placement="right" data-content="Select the modules to activate for this firm"></span>
																</b></label>
														
															<label class="mt-checkbox mt-checkbox-outline"> Plan
																Claims Reporting <input type="checkbox" value="1" checked
																name=""> <span></span>
															</label>
														</div>
														
																	<div class="">
                                <div class="form-group ">
                                    <label class="form-control-label" for="l0">Upload Firm Logo </label>
                               
                                <input type="file" class="form-control">
                                </div>
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
																'hAlign' => GridView::ALIGN_CENTER,
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
																'hAlign' => GridView::ALIGN_CENTER,
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
																'format'=>'raw',
																'vAlign'=>'middle',
																'hAlign' => GridView::ALIGN_CENTER,
																	'value' => function ($model, $key, $index, $widget) {
																	$phone_number = '';
																	if (! empty ( $model->phone )) {
																		$phone_number = '<span class="us-phone-mask-input">'.$model->phone.'</span>';
																	}
																	else
																	{
																		$phone_number = 'NA';
																	}
																	return $phone_number;
																},
																	//'editableOptions'=>['header'=>'Name', 'size'=>'md']
															],
															 [
																//'class' => 'kartik\grid\EditableColumn',
																'attribute' => 'jobtitle',
																'label' => 'Job Title',
																'hAlign' => GridView::ALIGN_CENTER,
																'headerOptions' => ['class' => 'blue-grid-head'],
																'vAlign'=>'middle',
																	//'editableOptions'=>['header'=>'Name', 'size'=>'md']
															],
															[
																//'class'=>'kartik\grid\BooleanColumn',
																'attribute'=>'is_primary', 
																'format'=>'raw',
																'label'=>'Primary Contact',
																'hAlign' => GridView::ALIGN_CENTER,
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
																'label'=>'Billing Contact',
																'hAlign' => GridView::ALIGN_CENTER,
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
																	//$link = '<div class="col-md-6"><a class="display-block color-blue" href="#resend_activation_link" data-toggle="modal" ><i class="fa fa-repeat"  data-toggle="tooltip" data-placement="bottom" title="Resend Password"></i></a></div><div class="col-md-6"><a class="display-block color-blue" href="#alert_screen" data-toggle="modal"><i class="fa fa-thumbs-o-down "  data-toggle="tooltip" data-placement="bottom" title="Deactivate User"></i></a></div>';
																	//return $link;
																	$link = '
																	<div class="col-md-6"><a class="display-block color-blue" href="#resend_activation_link" data-toggle="modal" >
																	<img src="/images/resend.png" alt="Benefits Client Template" class="width-16"  data-toggle="tooltip" data-placement="bottom" title="Resend Password" >
</a></div><div class="col-md-6"><a class="display-block color-blue" href="#alert_screen" data-toggle="modal"><i class="fa fa-thumbs-o-down "  data-toggle="tooltip" data-placement="bottom" title="Deactivate User"></i></a></div>';
																	return $link;
																},
																'vAlign'=>'middle',
																	//'editableOptions'=>['header'=>'Name', 'size'=>'md']
															],
														 
														];
														echo GridView::widget([
															'dataProvider' => $dataProvider,
															//'filterModel' => $searchModel,
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
							<!--<div class="modal-footer-btn ">
							
							<a href=""  class="btn btn-modal-blue">
								Save
							</a>
							
							 <button class="btn btn-default"  data-dismiss="modal">Cancel</button>
						
							
							
							</div>-->
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
                                <a class=" active" data-target="#client_details" data-toggle="tab" href="javascript: void(0);" role="tab" aria-expanded="true">Client Details
								<i class="fa fa-info-circle" title="Client Details" data-container="body" data-toggle="popover-hover" data-placement="right" data-content="Enter in the basic details of the client company." ></i>
								</a>
                            </li>
                            <li class="nav-item">
                                <a class="" data-target="#client_users" data-toggle="tab" href="javascript: void(0);" role="tab" aria-expanded="false">Client Users
								<i class="fa fa-info-circle" title="Client Users" data-container="body" data-toggle="popover-hover" data-placement="right" data-content="Enter in the basic details of the client user" ></i>
								</a>
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
                                   
									
										 <input type="text" class="form-control" placeholder="" value="Tata Company">
                                    
									</div>
								
								</div>
								<div class="col-md-6">
								
									<div class="form-group ">
										<label class="form-control-label" for="l0">Business Address 1*</label>
                                    <input type="text" class="form-control" placeholder="" value="Greenville">
									</div>
									
								</div>
								<div class="col-md-6">	
									<div class="form-group ">
										   <label class="form-control-label" for="l0">Business Address 2 </label>
                                    <input type="text" class="form-control" placeholder="" value="USA">
                                   
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group ">
										 <label class="form-control-label" for="l0">City *</label>
                                    <input type="text" class="form-control" placeholder="" value="dallas">
                                   
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
                                    <input type="text" class="form-control numbers" placeholder="" value="5000852">
                                  
									</div>
								</div>
								<div class="col-md-6">
								<div class="form-group ">
										  <label class="form-control-label" for="l0">Website</label>
                                    <input type="text" class="form-control" placeholder="" value="www.tata.com">
                                   
									</div>
									</div>
								<div class="col-md-6">
									<div class="form-group row">
									<div class="col-md-12 ">
									 <div class="col-md-12 padding-0">
									<div class="col-xs-9 padding-0">
                                    <label class="form-control-label" for="l0">Phone *</label>
									</div>
									<div class="col-xs-3 padding-right-0 hidden">
									<label class="form-control-label" for="l0">Extension </label>
									</div>
									</div>
										<div class="col-md-12 padding-0">
														<div class="col-xs-12 padding-0">
														<input type="text" class="form-control us-phone-mask-input" value="" maxlength="14">
														</div>
														<div class="col-xs-3 padding-right-0 hidden">
														<input type="text" class="form-control numbers" placeholder="ext" value="040">
														</div>
														</div>
														</div >
									</div>
									</div>
									
									<div class="col-md-6 hidden">
									<div class="form-group ">
										<label class="form-control-label" for="l0">Mobile #</label>
									
										<input type="text" class="form-control us-phone-mask-input" value="" maxlength="14">
									</div>
									</div>
									
									<div class="col-md-6">							
<div class="form-group ">
									 <label class="form-control-label" for="l0">Upload Client Logo
									 <span class="fa fa-info-circle information-icon" title="Upload Client Logo" data-container="body" data-toggle="popover-hover" data-placement="right" data-content="Recommended dimensions are 400x400 pixels."></span>
									 </label>
							<input type="file" class="form-control">
                                
									</div>	
								
								</div>
									
								
								
								
								</fieldset>
								</div>
								
								
								<div class="col-md-12 padding-0 margin-bottom-20">
								<fieldset class="fieldset-box">

											<legend>Service Team <i class="fa fa-info-circle margin-left-5" title="Service Team" data-container="body" data-toggle="popover-hover" data-placement="right" data-content="Select the primary team to service this client account." ></i></legend>	
											
												<div class="col-md-6">
									<div class="form-group ">
									 <label class="form-control-label" for="l0">Primary Consultant*</label>
								<select
										class="form-control edited"
										id="form_control">
										<option>Select Primary Consultant</option>
										<option>Raviteja</option>
										<option selected>Praveen</option>
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
										<option value="Firm 2" selected>Firm 2</option>
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
										<option value="Firm 2" selected>Firm 2</option>
										<option value="Firm 3">Firm 3</option>
										
									</select>
								
                                 
															
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
										<option>Select</option>
										<option>< 25</option>
										<option selected>25 -49</option>
										<option>50 - 99</option> 
										<option>100 - 199</option>
										<option>200 - 499</option>
										<option>500 - 999</option>
										<option>1000 - 4999</option>
										<option>5000+</option>
										
										
									</select> 
											</div>	
											
									<div class="form-group ">
														 <label class="form-control-label" for="l0">Select Industry Code*</label>
								<select
										class="form-control edited"
										id="form_control">
										<option>Select</option>
											<?php foreach($industry as $key=>$value){?>
										
										<option><?php echo $value;?></option>
										
										<?php }?>
										
									</select> 
                        
															
														</div>
														<div class=" col-md-12 padding-0 margin-top-15 height-50 col-xs-hidden" ></div>
														<div class=" col-md-12 padding-0 margin-top-20">
															<label class="form-control-label" for="l0">Bill Client Usage to <i class="fa fa-info-circle margin-left-5" title="Bill Client Usage to" data-container="body" data-toggle="popover-hover" data-placement="right" data-content="Select if you would like this module to be billed directly to the client each month or if it should be billed to your firm.  The selection made on client as of the first of each month will be used to generate the billing." ></i></label>
														
															   
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
																	<label class="form-control-label" for="l0">Logo to use in Reporting <i class="fa fa-info-circle margin-left-5" title="Logo to use in Reporting" data-container="body" data-toggle="popover-hover" data-placement="right" data-content="Select if you would like your firms logo to be used in the client claims reporting, or if you would prefer to use the actual clients logo instead." ></i></label>
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

											<legend>Client Subscriptions <i class="fa fa-info-circle margin-left-5" title="Client Subscriptions" data-container="body" data-toggle="popover-hover" data-placement="right" data-content="Select to activate a module for this client, as well as the service level you would like to use for the client.  To learn more about all service level details, please review the details on the website for a full listing of what is included in each package." ></i></legend>	
														<div class="form-group">
														<label class="form-control-label">Self Insured Reporting*</label>
							<div class="">
									 <label class="mt-checkbox mt-checkbox-outline">   Activate
										<input type="checkbox" value="1" name="" checked>
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
															['class' => 'kartik\grid\SerialColumn','headerOptions' => ['class' => 'blue-grid-head'],],
															[
																//'class' => 'kartik\grid\EditableColumn',
																'attribute' => 'first_name',
																//'pageSummary' => 'Page Total',
																'vAlign'=>'middle',
																'format'=>'raw',
																'hAlign' => GridView::ALIGN_CENTER,
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
																'hAlign' => GridView::ALIGN_CENTER,
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
																'hAlign' => GridView::ALIGN_CENTER,
																	//'editableOptions'=>['header'=>'Name', 'size'=>'md']
															],
															[
																//'class' => 'kartik\grid\EditableColumn',
																'attribute' => 'phone',
																'headerOptions' => ['class' => 'blue-grid-head'],
																//'pageSummary' => 'Page Total',
																'vAlign'=>'middle',
																'format'=>'raw',
																'hAlign' => GridView::ALIGN_CENTER,
																	'value' => function ($model, $key, $index, $widget) {
																	$phone_number = '';
																	if (! empty ( $model->phone )) {
																		$phone_number = '<span class="us-phone-mask-input">'.$model->phone.'</span>';
																	}
																	else
																	{
																		$phone_number = 'NA';
																	}
																	return $phone_number;
																},
																	//'editableOptions'=>['header'=>'Name', 'size'=>'md']
															],
															 [
																//'class' => 'kartik\grid\EditableColumn',
																'attribute' => 'jobtitle',
																'label' => 'Job Title',
																'headerOptions' => ['class' => 'blue-grid-head'],
																//'pageSummary' => 'Page Total',
																'vAlign'=>'middle',
																'hAlign' => GridView::ALIGN_CENTER,
																	//'editableOptions'=>['header'=>'Name', 'size'=>'md']
															],
															[
																//'class'=>'kartik\grid\BooleanColumn',
																'attribute'=>'is_primary',
																'label' => 'Primary Contact',																
																'format'=>'raw',
																'hAlign' => GridView::ALIGN_CENTER,
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
																'label' => 'Billing Contact',																
																'format'=>'raw',
																'hAlign' => GridView::ALIGN_CENTER,
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
																'hAlign' => GridView::ALIGN_CENTER,
																'headerOptions' => ['class' => 'blue-grid-head'],
																'value' => function ($model, $key, $index, $widget) {
																	$link = '<div class="col-md-6"><a class="display-block color-blue" href="#resend_activation_link" data-toggle="modal" ><i class="fa fa-repeat"  data-toggle="tooltip" data-placement="bottom" title="Resend Password"></i></a></div><div class="col-md-6"><a class="display-block color-blue" href="#alert_screen" data-toggle="modal"><i class="fa fa-thumbs-o-down "  data-toggle="tooltip" data-placement="bottom" title="Deactivate User"></i></a></div>';
																	return $link;
																},
																'vAlign'=>'middle',
																	//'editableOptions'=>['header'=>'Name', 'size'=>'md']
															],
														
														];
														echo GridView::widget([
															'dataProvider' => $dataProvider,
															//'filterModel' => $searchModel,
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
							<!--<div class="modal-footer-btn ">
							<a href=""  class="btn btn-modal-blue" >
								Save
							</a>
							
							 <button class="btn btn-default"  data-dismiss="modal">Cancel</button>
						
							
							
							</div>-->
						</div>
						</div>
						
					</div>
					
				</div>
				
				
	<div class="modal fade " id="update_firm_details" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header modal-header-color">
							 
							<button type="button" class="close-modal modal-opacity close-modal-blue firm-close-btn" aria-hidden="true">
								X
							</button>
							<h4 class="modal-title color-white" id="myModalLabel">
								Update Firm
							</h4>
						</div>
						<div class="modal-body col-md-12">
						
						<!-- Loading GIF div starts -->
						<div class="load-gif" id="loading-indicator" style="position: inherit;">
							<div class="procressing_plz_wait">
								<img class=""
									src="<?php echo Yii::$app->getUrlManager()->getBaseUrl();  ?>/images/default.gif" />
							</div>
						</div>

						<!-- Loading GIF div end -->

						</div>
						<div class="modal-footer">
							
						</div>
						</div>
						</div>
						</div>
 <?php 
    
    
    
    $this->registerJs(
    		"
    $('.view-firm-detail').click(function(e){
       e.preventDefault();
		
		$('#update_firm_details').modal('show').find('.modal-body').load($(this).attr('href'));
		$('.select2').select2();
      
});


	$(document).on('click', '.firm-close-btn', function () { 
	 
		 $('#update_firm_details').modal().find('.modal-body').html('<div class=\"load-gif\" id=\"loading-indicator\" style=\"position: inherit;\"><div class=\"procressing_plz_wait\"><img src=\"/images/default.gif\" /></div></div>');
		$('#update_firm_details').modal('hide');
		});
	

	");

    ?>
    
				<script>
				function textsearch(){

					val=$("#textsearch").val();
					if(val){

						url='<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/search?search='+val;

						window.location.href = url;

						}

						}

				
				function search(key=''){
					if(key){

						url='<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/search?key='+key;

						window.location.href = url;
						//alert();

						}else{
							url='<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/search';

							window.location.href = url;
							}
					}
				$(document).ready(function(){
				$('#search_link').addClass('page-active');

				<?php if(!empty(\Yii::$app->request->Get('key'))){ ?>
				 $('.categoryButton').removeClass('selected');
				 $(".<?php echo \Yii::$app->request->Get('key'); ?>").addClass('selected');

				<?php } ?>

				$(".categoryButton").click(function() {
					 $('.categoryButton').removeClass('selected');
					 $(this).addClass('selected');
				});
				
					$(document).on('click', '.view-search-firm-user', function (e) {
					e.preventDefault();
					
					//$('#update_firm_details').modal('show').find('.modal-body').html('<div class=\"load-gif\" id=\"loading-indicator\" style=\"position: inherit;\"><div class=\"procressing_plz_wait\"><img src=\"/images/default.gif\" /></div></div>');
					//$('#update_firm_details').modal('hide');
					
					$('#create_firm_user').find('.modal-content').load($(this).attr('href'));
					$('#create_firm_user').modal('show');
					$('.select2').select2();
					
					
					});
					
					$(document).on('hidden.bs.modal', '#create_firm_user', function () {
						$('body').addClass('modal-open');
					});

					});
					

				</script>