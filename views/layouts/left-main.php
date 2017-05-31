

<nav class="left-menu" left-menu>
    <div class="logo-container">
        <a href="" class="logo" style="max-width:none;height:auto;">
             <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/images/logo/benefits.png" alt="Benefits Client Template" />
            <img class="logo-inverse" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/common/img/logo-inverse.png" alt="Clean UI Admin Template" />
            
        </a>
    </div>
    <div class="left-menu-inner scroll-pane">
        <ul class="left-menu-list left-menu-list-root list-unstyled">
           
          <li class="left-menu-list-color-primary" id="dashboard">
                <a class="left-menu-link" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/dashboard/admin">
                    <i class="left-menu-link-icon icmn-home2"><!-- --></i>
                    Home
                </a>
            </li>
           
         
          
            <li class="left-menu-list-submenu left-menu-list-color-info" id="master_data">
                <a class="left-menu-link" href="javascript: void(0);">
                    <i class="left-menu-link-icon icmn-files-empty2"><!-- --></i>
                    MasterData
                </a>
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
                  
					
					<li  class="lookup_li">
                        <a class="left-menu-link lookup_a" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/masterdata/lookupoptions">
                            Lookup Options
                        </a>
                    </li>
					
					<li  class="account_li">
                        <a class="left-menu-link firm_a" href="#">
                            Account Settings
                        </a>
                    </li>
					
					<li  class="element_li">
                        <a class="left-menu-link firm_a" href="#">
                            Element Master
                        </a>
                    </li>
                    <?php }?>
                      <?php if(Yii::$app->user->identity->usertype == 1 || Yii::$app->user->identity->usertype == 2){?>
					 <li class="lookup_li">
                         <a class="left-menu-link lookup_a" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/masterdata/addplans">
                           Plans
                        </a>
                    </li>
                            <?php }?>
                </ul>
            </li>
           

        </ul>
    </div>
</nav>