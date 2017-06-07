 <?php
 use app\models\FirmUsers;
 use app\components\EncryptDecryptComponent;
 use app\components\SessionCheckComponent;

 $result = SessionCheckComponent::RedirectionandSessioncreation();

 if(Yii::$app->user->identity->usertype == 2){
	$user_id = Yii::$app->user->identity->user_id;
 $firm_id = '';
 $encrpt_firm_id ='';
 $model_firm_users = FirmUsers::find()->select('firm_id')->where(['user_id'=>$user_id])->one();

 if(!empty($model_firm_users)){
 	$firm_id = $model_firm_users->firm_id;
 	$encrpt_firm_id = EncryptDecryptComponent::encrytedUser ($firm_id);
 }

 }
 
 $permissions = Yii::$app->session['permissions'];
 ?> 
<nav class="left-menu media-hide" left-menu >
    <div class="logo-container">
        <a href="" class="logo" style="max-width:none;height:auto;">
             <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl().''.$result['profile_logo']; ?>" alt="Benefits Client Template" style="height:44px;" />
            <img class="logo-inverse" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/common/img/logo-inverse.png" alt="Clean UI Admin Template" />
            
        </a>
    </div>
    <div class="left-menu-inner scroll-pane">
        <ul class="left-menu-list left-menu-list-root list-unstyled">
           
          <li class="left-menu-list-color-primary" id="dashboard">
                <a class="left-menu-link"  href="<?php echo Yii::$app->getUrlManager()->getBaseUrl().''.\Yii::$app->params['dashboard_url']; ?>">
                    <i class="left-menu-link-icon icmn-home2"><!-- --></i>
                    Dashboard
                </a>
            </li>
           <?php if(Yii::$app->user->identity->usertype == 1 || Yii::$app->user->identity->usertype == 2  || Yii::$app->user->identity->usertype == 3){?>
          <li class="left-menu-list-color-primary hidden" id="">
                <a class="left-menu-link" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/user/add-user">
                    <i class="left-menu-link-icon icmn-pencil5"><!-- --></i>
                    Create User
                </a>
            </li>
		   <?php }?>
		   
		     <?php if(Yii::$app->user->identity->usertype == 1){?>
          <li class="left-menu-list-color-primary " id="">
                <a class="left-menu-link" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/user/adminuser">
                    <i class="left-menu-link-icon icmn-pencil5"><!-- --></i>
                    Create Admin User
                </a>
            </li>
		   <?php }?>
		   
		     <?php if(Yii::$app->user->identity->usertype == 1){?>
			 <li class="left-menu-list-color-primary" id="">
                <a class="left-menu-link" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/user/firmuser">
                    <i class="left-menu-link-icon icmn-pencil5"><!-- --></i>
                    Create Firm
                </a>
            </li>
			  <?php }?>
			  
			  <?php if(Yii::$app->user->identity->usertype == 2 && !empty($encrpt_firm_id)){?>
			 <li class="left-menu-list-color-primary" id="">
                <a class="left-menu-link" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/user/firmuser?id=<?php echo $encrpt_firm_id;?>&tab=2">
                    <i class="left-menu-link-icon icmn-pencil5"><!-- --></i>
                    Add Firm User
                </a>
            </li>
           <?php }?>
		     
						 
					 
		   
			   <?php if(Yii::$app->user->identity->usertype == 1 || Yii::$app->user->identity->usertype == 2){?>
			 <li class="left-menu-list-color-primary" id="">
                <a class="left-menu-link" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/user/clientuser">
                    <i class="left-menu-link-icon icmn-pencil5"><!-- --></i>
                    Create Client
                </a>
            </li>
           <?php }?>
		   
		   <?php if(Yii::$app->user->identity->usertype == 3){?>
		   <li class="left-menu-list-color-primary" id="">
                <a class="left-menu-link" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/user/clientuser?id=1&tab=2">
                    <i class="left-menu-link-icon icmn-pencil5"><!-- --></i>
                   Create Client User
                </a>
            </li>
		    <li class="left-menu-list-color-primary" id="">
                <a class="left-menu-link" href="#">
                    <i class="left-menu-link-icon icmn-pencil5"><!-- --></i>
                   Reports
                </a>
            </li>
			
		   <?php }?>
		   
		    <?php if(Yii::$app->user->identity->usertype == 1){?>
            <li class="left-menu-list-submenu left-menu-list-color-info" id="master_data">
                <a class="left-menu-link" href="javascript: void(0);">
                    <i class="left-menu-link-icon icmn-files-empty2"><!-- --></i>
                    MasterData
                </a>
						   <?php //}?>
                <ul class="left-menu-list list-unstyled"  id="master_data_ul">
                <?php if(Yii::$app->user->identity->usertype == 1){?>
                    <li class="billing_li">
                        <a class="left-menu-link billing_a" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/masterdata/systembilling">
                            System Billing	
                        </a>
                    </li>
                    <li class="pricing_li">
                        <a class="left-menu-link pricing_a" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/masterdata/systempricing">
                            System Pricing
                        </a>
                    </li>
					<?php }?>
                   <li class="pricing_li">
                        <a class="left-menu-link pricing_a" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/masterdata/firmpricing">
                            Firm Pricing
                        </a>
                    </li>
					<?php //}?>
					
					  <?php //if(Yii::$app->user->identity->usertype == 1){?>
					<li class="pricing_li hide">
                        <a class="left-menu-link pricing_a"  href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/masterdata/addplans">
                           Plans
                        </a>
                    </li>
					
				<li class="pricing_li hide">
                        <a class="left-menu-link pricing_a" <?php if(Yii::$app->user->identity->usertype == 1){?>onclick="openDesignfirmmodal(2);"<?php }else{?>
						 href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/firm-plan/client-plan-years?id=1" <?php }?>>
                          Manage Plans
                        </a>
                    </li>
				
			<!--	<li class="pricing_li">
                        <a class="left-menu-link pricing_a" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/masterdata/systempricing">
                            Reporting
                        </a>
                    </li>-->
					<?php //}?>
					
					 <?php //if(Yii::$app->user->identity->usertype == 1){?>
					<li  class="lookup_li">
                        <a class="left-menu-link lookup_a" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/masterdata/lookupoptions">
                            Lookup Options
                        </a>
                    </li>
					
					
					
					<li  class="element_li hide">
                        <a class="left-menu-link firm_a" href="#">
                            Element Master
                        </a>
                    </li>
                    <?php }?>
                    
                     <?php if(Yii::$app->user->identity->usertype == 2){?>
                       <li class="left-menu-list-color-primary hide"  >
                <a class="left-menu-link" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/firm-plan/client-plan-years?id=1">
                    <i class="left-menu-link-icon icmn-pencil5"><!-- --></i>
                   Manage Plans
                </a>
            </li>
			 
                     <?php }?>    
					  <?php if(Yii::$app->user->identity->usertype == 2){?>
					   <li class="left-menu-list-color-primary" id="">
                <a class="left-menu-link"  href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/masterdata/firmpricing">
                    <i class="left-menu-link-icon icmn-pencil5"> </i>
                  Firm Pricing
                </a>
            </li>
			 <?php }?>    
                </ul>
            </li>
           

        </ul>
    </div>
</nav>

<!-- left end header start-->

<nav class="top-menu transistion top-nav">
	<div class="menu-icon-container items-class hidden-md-up">
		<div class="animate-menu-button left-menu-toggle">
			<div>
				<!-- -->
			</div>
		</div>
	</div>
	
	<div class="menu-icon-container image-class hidden-md-up margin-15">
		<div class="">
			<img src="/images/logo/benefits.png" class="max-width-140" alt="Benefits Client Template">
		</div>
	</div>
	
	<!-- <div class="hidden-md-up">
		<div class="menu-user-block pull-right padding-20">
			<div class="dropdown dropdown-avatar pull-right">
				<a href="javascript: void(0);" class="dropdown-toggle"
					data-toggle="dropdown" aria-expanded="false"> <span class="avatar"
					href="javascript:void(0);"> <img
						src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/common/img/temp/avatars/1.jpg"
						alt="Alternative text to the image">
				</span>
				</a>
				<ul class="dropdown-menu arrow-icon dropdown-menu-right arrow padding-0 margin-0" aria-labelledby=""
					role="menu">
					<a class="dropdown-item dropdown-a color-white" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl().''.\Yii::$app->params['profile_url']; ?>"><i
						class="dropdown-icon icmn-user"></i> Profile</a>
					 <div class="dropdown-divider margin-0"></div>
					
					  <a class="dropdown-item dropdown-a color-white" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/site/logout"><i
						class="dropdown-icon icmn-exit"></i> Logout</a>
				</ul>
			</div>
		</div>
	</div>-->
	
		
	
	<div class="menu transistion-menu header-top col-md-10 masterhead padding-left-0  media-hide-header">
	
	    <div class="logo-container col-md-2  media-hide-header">
        <a href="" class="logo" style="max-width:none;height:auto;">
             <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl().''.$result['profile_logo'];?>" style="height:44px;" class="width-198 img-transistion" alt="Benefits Client Template" />
               
        </a>
    </div>

		
		<!-- <div class="menu-user-block col-md-2 media-hide-header">
			<div class="dropdown dropdown-avatar pull-right">
				<a href="javascript: void(0);" class="dropdown-toggle"
					data-toggle="dropdown" aria-expanded="false"> <span class="avatar"
					href="javascript:void(0);"> <img
						src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/common/img/temp/avatars/1.jpg"
						alt="Alternative text to the image">
				</span>
				</a>
				<ul class="dropdown-menu dropdown-menu-right arrow" aria-labelledby=""
					role="menu">
					<a class="dropdown-item" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl().''.\Yii::$app->params['profile_url']; ?>"><i
						class="dropdown-icon icmn-user"></i> Profile</a>
					 <div class="dropdown-divider"></div>
					
					  <a class="dropdown-item" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/site/logout"><i
						class="dropdown-icon icmn-exit"></i> Logout</a>
				</ul>
			</div>
		</div>-->
		<ul class="actions  media-hide-header">
		<?php //if(Yii::$app->controller->id != 'dashboard'){?>
		<li class="vertical-align-top">
		<a class="disable-hover" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl().''.\Yii::$app->params['dashboard_url']; ?>" ><i class="fa fa-home font-40" id="home_color"></i></a>
		</li>
		<?php //}?>
		<li>
				<a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl().''.\Yii::$app->params['search_url']; ?>" class="disable-hover" id="search_link"><b>Search</b></a>
		</li>
		
		<?php if(in_array(\app\models\User::SuperAdmin, $permissions)  || in_array(\app\models\User::FirmAdministratorAccess, $permissions) || in_array(\app\models\User::EditFirm, $permissions) || in_array(\app\models\User::EditClient, $permissions)  || in_array(\app\models\User::AdminUser, $permissions)){ ?>
		<li>
		<div class="menu-user-block">
			<div class="dropdown dropdown-avatar">
				<a href="javascript: void(0);" class="dropdown-toggle disable-hover" id="new_link"
					data-toggle="dropdown" aria-expanded="false"><b> New</b>
				</a>
				<ul class="dropdown-menu arrow-icon dropdown-menu-right arrow padding-0" aria-labelledby=""
					role="menu">
					
					 <?php if(Yii::$app->user->identity->usertype == 1){?>
					 
					 <?php if(in_array(\app\models\User::SuperAdmin, $permissions)  || in_array(\app\models\User::FirmAdministratorAccess, $permissions) || in_array(\app\models\User::AdminUser, $permissions)){ ?>
					<a class="dropdown-item dropdown-a color-white" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/user/adminuser">Create Admin User</a>
					   <div class="dropdown-divider margin-0"></div>
						  <?php }?>
						 <?php }?>
							  
					  <?php if(Yii::$app->user->identity->usertype == 1){?>
					  
					  <?php if(in_array(\app\models\User::SuperAdmin, $permissions)  || in_array(\app\models\User::FirmAdministratorAccess, $permissions) || in_array(\app\models\User::EditFirm, $permissions)){ ?>
					  
					<a class="dropdown-item dropdown-a color-white" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/user/firmuser">Create Firm</a>
					 <div class="dropdown-divider margin-0"></div> 
					  <?php }?>
					  <?php }?>
					  
					     <?php if(Yii::$app->user->identity->usertype == 1 || Yii::$app->user->identity->usertype == 2){?>
					<a class="dropdown-item hidden dropdown-a color-white" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/firms/firm-user">Create Firm User</a>
					
							<?php }?>
							
							
						  <?php if(Yii::$app->user->identity->usertype == 2 && !empty($encrpt_firm_id)){?>
						 <?php if(in_array(\app\models\User::SuperAdmin, $permissions)  || in_array(\app\models\User::FirmAdministratorAccess, $permissions) || in_array(\app\models\User::EditFirm, $permissions)){ ?>
					<a class="dropdown-item dropdown-a color-white" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/user/firmuser?id=<?php echo $encrpt_firm_id;?>&tab=2">Add Firm User</a>
						<?php }?>	
						<?php }?>	
						
					    <?php if(Yii::$app->user->identity->usertype == 1 || Yii::$app->user->identity->usertype == 2){?>
						<?php if(in_array(\app\models\User::SuperAdmin, $permissions)  || in_array(\app\models\User::FirmAdministratorAccess, $permissions) || in_array(\app\models\User::EditClient, $permissions)){ ?>	
					<a class="dropdown-item dropdown-a color-white" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/user/clientuser">Create Client</a>
						<?php }?>
						 <?php }?>
						 
							  
				</ul>
			</div>
		</div>
		</li>
		 <?php }?>
		
		
		  <?php if(Yii::$app->user->identity->usertype == 3){?>
		<li>
				<a href="#" class="disable-hover"><b>Reports</b></a>
		</li>
		 <?php }?>
		 
		   <?php if(Yii::$app->user->identity->usertype == 1){?>
		<li>
		<div class="menu-user-block">
			<div class="dropdown dropdown-avatar">
				<a href="javascript: void(0);" class="dropdown-toggle disable-hover" id="masterdata_link"
					data-toggle="dropdown" aria-expanded="false"><b> Master Data</b>
				</a>
				
				<ul class="dropdown-menu arrow-icon dropdown-menu-right arrow padding-0" aria-labelledby=""
					role="menu">
					  <?php //if(Yii::$app->user->identity->usertype == 1){?>
					  
					 <?php if(in_array(\app\models\User::SuperAdmin, $permissions) || in_array(\app\models\User::SystemBilling, $permissions)){ ?>
					<a class="dropdown-item dropdown-a color-white" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/masterdata/systembilling">
                            System Billing	
                        </a>
					 <?php } ?>
					 
					 <?php if(in_array(\app\models\User::SuperAdmin, $permissions) || in_array(\app\models\User::SystemPricing, $permissions)){ ?>
					 <a class="dropdown-item dropdown-a color-white" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/masterdata/systempricing">
                            System Pricing
                        </a>
						<?php } ?>
						
						 <?php if(in_array(\app\models\User::SuperAdmin, $permissions) || in_array(\app\models\User::FirmPricing, $permissions)){ ?>
                     	 <a class="dropdown-item dropdown-a color-white" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/masterdata/firmpricing">
                            Firm Pricing
                        </a>
						<?php } ?>
                      <div class="dropdown-divider margin-0"></div>
                        <?php //}?>
                      <?php //if(Yii::$app->user->identity->usertype == 1){?>
					  
					    
                      <a class="dropdown-item hide" <?php //if(Yii::$app->user->identity->usertype == 1){?> <?php //}else{?> 
                       href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/masterdata/addplans" <?php //}?>>
                           Plans
                        </a>    
						
                         <a class="dropdown-item dropdown-a color-white hide" <?php if(Yii::$app->user->identity->usertype == 1){?>onclick="openDesignfirmmodal(2);"<?php }else{?>
						 href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/firm-plan/client-plan-years?id=1" <?php }?>>
						 
                           Manage Plans
                        </a>
                 
                     <!--    <a class="dropdown-item dropdown-a color-white" <?php if(Yii::$app->user->identity->usertype == 1){?><?php }?>>
                           Reporting
                        </a>
                 -->
						 
                    <?php //}?>
					
					  <?php //if(Yii::$app->user->identity->usertype == 1){?>
					  
					  <div class="dropdown-divider margin-0"></div>
					   <a class="dropdown-item dropdown-a color-white" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/masterdata/lookupoptions">
                            Lookup Options
                        </a>
              
               
                    <a class="dropdown-item dropdown-a color-white hide" href="#">
                            Element Master
                        </a>
					 <?php //}?>
				</ul>
			</div>
		</div>
		</li>
		<?php }?>
		
		<?php if(Yii::$app->user->identity->usertype == 2){?>
		<li class="hide">
				<a  id="manage_plans_link" class="disable-hover" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/firm-plan/client-plan-years?id=1"><b>Manage Plans</b></a>
		</li>
		
		 <?php }?> 
		 
		 <?php if(Yii::$app->user->identity->usertype == 2){?>
		 <li class="hidden">
				<a <?php if(Yii::$app->user->identity->usertype == 1){?>onclick="openDesignfirmmodal(1);"<?php }else{?>
				href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/firm-list" <?php }?> class="color-white">View</a>
		</li>
		 <?php }?> 
	
		
		</ul>
		
		
	</div>
	
	<div class="menu transistion-menu header-top profile col-md-2 back-color masterhead padding-left-0 pull-right back-color-profile" id="profile_details">
	<div class="menu-user-block col-md-12">
			<div class="dropdown dropdown-avatar pull-right">
				<a href="javascript: void(0);" class="dropdown-toggle profile-icon"
					data-toggle="dropdown" aria-expanded="false"> <span class="avatar media-hide-img"
					href="javascript:void(0);"> <img
						src="<?php echo Yii::$app->getUrlManager()->getBaseUrl().''.$result['profile_pic']; ?>"
						alt="Alternative text to the image">
				</span><span class="header-name media-hide-profilename"><span class="font-14">Welcome</span> <span class="font-14"><?php echo $result['logged_user_fullname'];?></span></span>
				</a>
				<ul class="dropdown-menu arrow-icon dropdown-menu-right arrow padding-0 margin-0" aria-labelledby=""
					role="menu" style="margin-top:6px !important;">
					<a class="dropdown-item dropdown-a color-white" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/profile"><i
						class="dropdown-icon icmn-user"></i> Profile</a>
					 <div class="dropdown-divider margin-0"></div>
					<a class="dropdown-item dropdown-a color-white" data-toggle="modal" data-target="#myModal-change-pswd"><i
						class="dropdown-icon fa fa-repeat"></i> Change Password</a>
						<div class="dropdown-divider margin-0"></div>
					<?php if(Yii::$app->user->identity->usertype == 2 || Yii::$app->user->identity->usertype == 3){?>
		
					<?php if(in_array(\app\models\User::IsBilling, $permissions) ){ ?>	
					<a   class="dropdown-item dropdown-a color-white"  href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/masterdata/firmpricing"><i
						class="dropdown-icon fa fa-money"></i>Firm Pricing</a>
					<div class="dropdown-divider margin-0"></div>
					
					<?php }?> 
				<?php }?> 
						
					  <a class="dropdown-item dropdown-a color-white" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/site/logout"><i
						class="dropdown-icon icmn-exit"></i> Logout</a>
				</ul>
			</div>
		</div>
	</div>
	
</nav>

 <!--
 <div class="modal fade" id="modal-firm-details" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							 
							<button type="button" class="close-modal" data-dismiss="modal" aria-hidden="true">
								X
							</button>
							<h4 class="modal-title" id="myModalLabel">
								Firm / Client Details
							</h4>
						</div>
						<div class="modal-body">
							<div class="row">
							<div class="col-md-12 padding-top-10 padding-bottom-10">
							<div class="col-md-4 padding-left-8"><label class="margin-top-10"><b> Select a Firm :</b></label></div>
								<div class="col-md-8">
								<select class="form-control" id="firm_id">
								<option selected="" value="Tata Firm">Tata Firm</option>
						          <option value="Capgemini">Capgemini</option>
						          <option value="Tech Mahindra">Tech Mahendra</option>
								</select></div>
								</div>
								</div>
								<div class="row">
							<div class="col-md-12 padding-top-10 padding-bottom-10">
							<div class="col-md-4 padding-left-8"><label class="margin-top-10"><b> Select a Client :</b></label></div>
								<div class="col-md-8">
								<select class="form-control" id="client_id">
								<option selected="" value="Tata Firm">Tata motors</option>
						          <option value="Capgemini">Tata Consultancy</option>
								</select></div>
								</div>
								</div>
						</div>
						<div class="modal-footer">
							 
							<button type="button" class="btn btn-default" data-dismiss="modal">
								Close
							</button> 
							<a href="<?php //echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/firm-plan/client-plan-years" class="btn btn-primary">
								Go
							</a>
						</div>
					</div>
					
				</div>
				
			</div>-->
