<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use kartik\grid\GridView;
use yii\helpers\Url;
use app\components\EncryptDecryptComponent;
use kartik\alert\Alert;
use yii\widgets\LinkPager;
use yii\widgets\ListView;
use yii\widgets\Pjax;

/* $states = array (
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
asort($industry);   */
?>

<section class="page-content padding-0">
 <?php Pjax::begin(['id'=>'search-pjax-div']); ?>
<div class="">
	<div class="search-screen-header">
	<div class="col-lg-12 search-header-inner">
			<div class="col-md-3 div-search ">
				<div class="search-block">
                    <div class="form-input-icon form-input-icon-right">
                        <i class="icmn-search"></i>
						<form>
                        <input type="text" class="form-control form-control-sm" name="search" maxlength="20" id="textsearch" placeholder="Search" <?php if(!empty(\Yii::$app->request->Get('search'))){ ?> value="<?php echo \Yii::$app->request->Get('search'); ?>" <?php }?>>
                       
						<button type="submit" class="search-block-submit " ></button>
						</form>
                    </div>
                </div>
				</div>
 
							<div class="col-md-9 aplhabets-div  ">
							<ul class="categoryList  font-white">
							<li><input type="button" class="btn-info categoryButton all" data-toggle="tooltip" onclick="search('all');" data-placement="bottom" title="Total Records : <?php echo isset($counts['total'])?$counts['total']:0; ?>" value="All"></li>
							<li><input type="button" class="btn-info categoryButton a" data-toggle="tooltip" onclick="search('a');" data-placement="bottom" title="Total Records : <?php echo isset($counts['a'])?$counts['a']:0; ?>" value="A"></li>
							<li><input type="button" class="btn-info categoryButton b" data-toggle="tooltip" onclick="search('b');" data-placement="bottom" title="Total Records : <?php echo isset($counts['b'])?$counts['b']:0; ?>" value="B"></li>
							<li><input type="button" class="btn-info categoryButton c" data-toggle="tooltip" onclick="search('c');" data-placement="bottom" title="Total Records : <?php echo isset($counts['c'])?$counts['c']:0; ?>" value="C"></li>
							<li><input type="button" class="btn-info categoryButton d" data-toggle="tooltip" onclick="search('d');" data-placement="bottom" title="Total Records : <?php echo isset($counts['d'])?$counts['d']:0; ?>" value="D"></li>
							<li><input type="button" class="btn-info categoryButton e" data-toggle="tooltip" onclick="search('e');" data-placement="bottom" title="Total Records : <?php echo isset($counts['e'])?$counts['e']:0; ?>" value="E"></li>
							<li><input type="button" class="btn-info categoryButton f" data-toggle="tooltip" onclick="search('f');" data-placement="bottom" title="Total Records : <?php echo isset($counts['f'])?$counts['f']:0; ?>" value="F"></li>
							<li><input type="button" class="btn-info categoryButton g" data-toggle="tooltip" onclick="search('g');" data-placement="bottom" title="Total Records : <?php echo isset($counts['g'])?$counts['g']:0; ?>" value="G"></li>
							<li><input type="button" class="btn-info categoryButton h" data-toggle="tooltip" onclick="search('h');" data-placement="bottom" title="Total Records : <?php echo isset($counts['h'])?$counts['h']:0; ?>" value="H"></li>
							<li><input type="button" class="btn-info categoryButton i" data-toggle="tooltip" onclick="search('i');" data-placement="bottom" title="Total Records : <?php echo isset($counts['i'])?$counts['i']:0; ?>" value="I"></li>
							<li><input type="button" class="btn-info categoryButton j" data-toggle="tooltip" onclick="search('j');" data-placement="bottom" title="Total Records : <?php echo isset($counts['j'])?$counts['j']:0; ?>" value="J"></li>
							<li><input type="button" class="btn-info categoryButton k" data-toggle="tooltip" onclick="search('k');" data-placement="bottom" title="Total Records : <?php echo isset($counts['k'])?$counts['k']:0; ?>" value="K"></li>
							<li><input type="button" class="btn-info categoryButton l" data-toggle="tooltip" onclick="search('l');" data-placement="bottom" title="Total Records : <?php echo isset($counts['l'])?$counts['l']:0; ?>" value="L"></li>
							<li><input type="button" class="btn-info categoryButton m" data-toggle="tooltip" onclick="search('m');" data-placement="bottom" title="Total Records : <?php echo isset($counts['m'])?$counts['m']:0; ?>" value="M"></li>
							<li><input type="button" class="btn-info categoryButton n" data-toggle="tooltip" onclick="search('n');" data-placement="bottom" title="Total Records : <?php echo isset($counts['n'])?$counts['n']:0; ?>" value="N"></li>
							<li><input type="button" class="btn-info categoryButton o" data-toggle="tooltip" onclick="search('o');" data-placement="bottom" title="Total Records : <?php echo isset($counts['o'])?$counts['o']:0; ?>" value="O"></li>
							<li><input type="button" class="btn-info categoryButton p" data-toggle="tooltip" onclick="search('p');" data-placement="bottom" title="Total Records : <?php echo isset($counts['p'])?$counts['p']:0; ?>" value="P"></li>
							<li><input type="button" class="btn-info categoryButton q" data-toggle="tooltip" onclick="search('q');" data-placement="bottom" title="Total Records : <?php echo isset($counts['q'])?$counts['q']:0; ?>" value="Q"></li>
							<li><input type="button" class="btn-info categoryButton r" data-toggle="tooltip" onclick="search('r');" data-placement="bottom" title="Total Records : <?php echo isset($counts['r'])?$counts['r']:0; ?>" value="R"></li>
							<li><input type="button" class="btn-info categoryButton s" data-toggle="tooltip" onclick="search('s');" data-placement="bottom" title="Total Records : <?php echo isset($counts['s'])?$counts['s']:0; ?>" value="S"></li>
							<li><input type="button" class="btn-info categoryButton t" data-toggle="tooltip" onclick="search('t');" data-placement="bottom" title="Total Records : <?php echo isset($counts['t'])?$counts['t']:0; ?>" value="T"></li>
							<li><input type="button" class="btn-info categoryButton u" data-toggle="tooltip" onclick="search('u');" data-placement="bottom" title="Total Records : <?php echo isset($counts['u'])?$counts['u']:0; ?>" value="U"></li>
							<li><input type="button" class="btn-info categoryButton v" data-toggle="tooltip" onclick="search('v');" data-placement="bottom" title="Total Records : <?php echo isset($counts['v'])?$counts['v']:0; ?>" value="V"></li>
							<li><input type="button" class="btn-info categoryButton w" data-toggle="tooltip" onclick="search('w');" data-placement="bottom" title="Total Records : <?php echo isset($counts['w'])?$counts['w']:0; ?>" value="W"></li>
							<li><input type="button" class="btn-info categoryButton x" data-toggle="tooltip" onclick="search('x');" data-placement="bottom" title="Total Records : <?php echo isset($counts['x'])?$counts['x']:0; ?>" value="X"></li>
							<li><input type="button" class="btn-info categoryButton y" data-toggle="tooltip" onclick="search('y');" data-placement="bottom" title="Total Records : <?php echo isset($counts['y'])?$counts['y']:0; ?>" value="Y"></li>
							<li><input type="button" class="btn-info categoryButton z" data-toggle="tooltip" onclick="search('z');" data-placement="bottom" title="Total Records : <?php echo isset($counts['z'])?$counts['z']:0; ?>" value="Z"></li>
							<li><input type="button" class="btn-info categoryButton num" onclick="search('num');" value="#"></li>
							</ul>
							
							</div>
							
						</div>
	</div>
	</div>
	

	<div class="page-content col-md-12 search-page-content">
	<div class="container">
	
	<?php if(empty(\Yii::$app->request->Get('key')) && empty(\Yii::$app->request->Get('search'))){ ?>
								
								<div class="widget width-100 padding-50 font-20 color-blue" align="center">
								To view the list enter search string or select an alphabet.
								</div>
								
								<?php }else{ ?>
								
	<div class="alert-div">
<?php 
$permissions = Yii::$app->session['permissions'];

if($flash = Yii::$app->session->getFlash('success')){

echo  Alert::widget([
    'type' => Alert::TYPE_SUCCESS,
	'icon' => 'glyphicon glyphicon-ok-sign',
    'body' => $flash,
    'delay' => 0
]);

}
?>

<?php 
if($flash = Yii::$app->session->getFlash('error')){

echo  Alert::widget([
    'type' => Alert::TYPE_DANGER,
	'icon' => 'glyphicon glyphicon-remove-sign',
    'body' => $flash,
    'delay' => 0
]);

}
?>
</div>
	<?php 
	// display pagination
	if(!empty($users)){
		
	echo ListView::widget([
	    'dataProvider' => $users_provider,
	    'pager' => [
	        'firstPageLabel' => 'first',
	        'lastPageLabel' => 'last',
	        'prevPageLabel' => 'previous',
	        'nextPageLabel' => 'next',
	        'maxButtonCount' => 5,
	    ],
		'layout' => "<div class=\"col-md-12  padding-0 \"><div class=\"col-md-6 padding-0 margin-top-10\" align=\"left\">{summary}</div><div class=\"col-md-6  padding-0 search-screen-pagination\"  align=\"right\">{pager}</div></div>",
	]);

	
	
	?>
	
	
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
				else{ if($user['company_logo']){ echo '/client-logos/'.$user['company_logo']; }else{ echo '/no_logo.png';} }
				 ?>" alt="NA">
				</span>
								</div>
								<div class="col-xs-9  margin-top-10" style="font-family: arial;">
								<div class="col-xs-12 padding-0  margin-bottom-35">
								<div class="col-xs-9 ">
								<div class="no-wrap"><?php if($user['usertype']==1){
									$admin = (strlen($user['admin_user']) > 20) ? substr($user['admin_user'],0,20).'...' : $user['admin_user'];
									echo $admin;
								}else if($user['usertype']==2){
									$firm = (strlen($user['firm_user']) > 20) ? substr($user['firm_user'],0,20).'...' : $user['firm_user'];
									echo $firm; 
								}else{
									$client = (strlen($user['client_user']) > 20) ? substr($user['client_user'],0,20).'...' : $user['client_user'];
									echo $client; 
								}  ?></div>
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
								<?php if(in_array(\app\models\User::AdminUser, $permissions) || in_array(\app\models\User::SuperAdmin, $permissions)){ ?>
								<?php if($user['user_id'] != \Yii::$app->user->identity->user_id){ 


									?>
								<a data-href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/user/updateadminuser?adminId=<?php echo $admin_user_id;?>" class="color-blue search-edit admin-view"><i class="fa fa-pencil-square-o" alt="Alternative text to the image" data-toggle="tooltip" data-placement="bottom" title="Click to update admin user"></i></a> 
								<?php }?>
								<?php }?>
								
								<?php }elseif($user['usertype']==2){ 
								$encrypt_firm_id = EncryptDecryptComponent::encrytedUser ( $user['firm_id'] );
								$firm_user_id = EncryptDecryptComponent::encrytedUser ( $user['firm_user_id'] );
								
								?>
								
								<?php if(in_array(\app\models\User::FirmUser, $permissions) || in_array(\app\models\User::SuperAdmin, $permissions)  || in_array(\app\models\User::FirmAdministratorAccess, $permissions)){ ?>
								
								<?php if($user['user_id'] != \Yii::$app->user->identity->user_id){ ?>
								<a  data-href="<?php echo Yii::$app->homeUrl; ?>user/addfirmuser?firmId=<?php echo $encrypt_firm_id;?>&firmUserId=<?php echo $firm_user_id;?>" class="color-blue search-edit view-update"><i class="fa fa-pencil-square-o"alt="Alternative text to the image" data-toggle="tooltip" data-placement="bottom" title="Click to update firm user"></i></a>
								<?php }?>
								
								<?php }?>
								
								<?php }elseif($user['usertype']==3){ 
								$encrypt_client_id = EncryptDecryptComponent::encrytedUser ( $user['client_id'] );
								$client_user_id = EncryptDecryptComponent::encrytedUser ( $user['client_user_id'] );
								
								?>
								
								<?php if(in_array(\app\models\User::ClientUser, $permissions) || in_array(\app\models\User::SuperAdmin, $permissions)  || in_array(\app\models\User::FirmAdministratorAccess, $permissions)){ ?>
								<a  data-href="<?php echo Yii::$app->homeUrl; ?>user/addclientuser?clientId=<?php echo $encrypt_client_id;?>&clientUserId=<?php echo $client_user_id;?>" class="color-blue search-edit view-update-client"><i class="fa fa-pencil-square-o"alt="Alternative text to the image" data-toggle="tooltip" data-placement="bottom" title="Click to update client user"></i></a>
								<?php }?>
								
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
							<!--	<a data-toggle="modal" data-target="#update_admin" class="color-blue"><i class="fa fa-pencil-square-o"alt="Alternative text to the image" data-toggle="tooltip" data-placement="bottom" title="Click to update admin user"></i></a>-->
								<?php }else if($user['usertype']==2){
									$encrypt_firm_id = EncryptDecryptComponent::encrytedUser ( $user['firm_id'] );
									
									?>
									
								<?php if(in_array(\app\models\User::FirmUser, $permissions) || in_array(\app\models\User::SuperAdmin, $permissions)  || in_array(\app\models\User::FirmAdministratorAccess, $permissions) || in_array(\app\models\User::EditFirm, $permissions)){ ?>	
								<a  data-href="<?php echo Yii::$app->homeUrl; ?>user/firmdetails?id=<?php echo $encrypt_firm_id;?>" class="color-blue view-firm-detail" ><i class="fa fa-pencil-square-o"alt="Alternative text to the image" data-toggle="tooltip" data-placement="bottom" title="Click to update firm"></i></a>
								<?php } ?>
								
								<!--<a data-toggle="modal" data-target="#update_firm" class="color-blue"><i class="fa fa-pencil-square-o"alt="Alternative text to the image" data-toggle="tooltip" data-placement="bottom" title="Click to update firm"></i></a>-->
								<?php }else{
									$encrypt_client_id = EncryptDecryptComponent::encrytedUser ( $user['client_id'] );
									?>
								<?php if(in_array(\app\models\User::ClientUser, $permissions) || in_array(\app\models\User::SuperAdmin, $permissions)  || in_array(\app\models\User::FirmAdministratorAccess, $permissions) || in_array(\app\models\User::EditClient, $permissions)){ ?>	
								<a  data-href="<?php echo Yii::$app->homeUrl; ?>user/clientdetails?id=<?php echo $encrypt_client_id;?>" class="color-blue view-client-detail" target="_blank"><i class="fa fa-pencil-square-o"alt="Alternative text to the image" data-toggle="tooltip" data-placement="bottom" title="Click to update client"></i></a>
								<?php } ?>
								
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
						
						
						
						
						
	 
	
	</div>
	</div>
	
	<?php }else{ ?> 
	<div  class="list-view widget width-100 padding-50 font-20 color-blue"><div class="empty" align="center">No results found.</div></div>
	<?php } }  ?>
	</div>
	<?php Pjax::end(); ?>
</section>
				
				
				
								


				
							
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
						
						
	<div class="modal fade " id="update_client_details" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header modal-header-color">
							 
							<button type="button" class="close-modal modal-opacity close-modal-blue client-close-btn" aria-hidden="true">
								X
							</button>
							<h4 class="modal-title color-white" id="myModalLabel">
								Update Client
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
   $(document).on('click', '.view-firm-detail', function (e) {
       e.preventDefault();
		
		$('#update_firm_details').modal('show').find('.modal-body').load($(this).attr('data-href'));
		$('.select2').select2();
      
});


$(document).on('click', '.view-update', function (e) {
       e.preventDefault();
		
		$('#create_firm_user').find('.modal-content').load($(this).attr('data-href'));
		$('#create_firm_user').modal('show');
		$('.select2').select2();
      
});

$(document).on('click', '.view-update-client', function (e) { 

       e.preventDefault();
		
		$('#add_client_user').find('.modal-content').load($(this).attr('data-href'));
		$('#add_client_user').modal('show');
		$('.select2').select2();
      
});

 
$(document).on('click', '.view-client-detail', function (e) { 
       e.preventDefault();
		
		$('#update_client_details').modal('show').find('.modal-body').load($(this).attr('data-href'));
		$('.select2').select2();
      
});



	$(document).on('click', '.firm-close-btn', function () { 
	 
		 $('#update_firm_details').modal().find('.modal-body').html('<div class=\"load-gif\" id=\"loading-indicator\" style=\"position: inherit;\"><div class=\"procressing_plz_wait\"><img src=\"/images/default.gif\" /></div></div>');
		$('#update_firm_details').modal('hide');
		});
	

	$(document).on('click', '.client-close-btn', function () { 
	 
		 $('#update_client_details').modal().find('.modal-body').html('<div class=\"load-gif\" id=\"loading-indicator\" style=\"position: inherit;\"><div class=\"procressing_plz_wait\"><img src=\"/images/default.gif\" /></div></div>');
		$('#update_client_details').modal('hide');
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
					
					$('#create_firm_user').find('.modal-content').load($(this).attr('href'));
					$('#create_firm_user').modal('show');
					$('.select2').select2();
					
					
					});


					$(document).on('click', '.view-search-client-user', function (e) {
						e.preventDefault();
						
						$('#add_client_user').find('.modal-content').load($(this).attr('href'));
						$('#add_client_user').modal('show');
						$('.select2').select2();
						
						
						});
					
					
					$(document).on('hidden.bs.modal', '#create_firm_user', function () {
						if($('#update_firm_details').hasClass('in'))
						{
						$('body').addClass('modal-open');
						}
					});


					$(document).on('hidden.bs.modal', '#add_client_user', function () {
						
						if($('#update_client_details').hasClass('in'))
						{
						$('body').addClass('modal-open');
						}
					});
					
					
					$(document).on('hidden.bs.modal', '#alert_screen', function () {
						
						if($('#update_admin').hasClass('in'))
						{
						$('body').addClass('modal-open');
						}
						
						if($('#update_client_details').hasClass('in'))
						{
						$('body').addClass('modal-open');
						}
						
						if($('#update_firm_details').hasClass('in'))
						{
						$('body').addClass('modal-open');
						}
						
					});
					
					$(document).on('hidden.bs.modal', '#resend_activation_link', function () {
						
						if($('#update_admin').hasClass('in'))
						{
						$('body').addClass('modal-open');
						}
						
						if($('#update_client_details').hasClass('in'))
						{
						$('body').addClass('modal-open');
						}
						
						if($('#update_firm_details').hasClass('in'))
						{
						$('body').addClass('modal-open');
						}
						
					});
					
					
					});
				</script>