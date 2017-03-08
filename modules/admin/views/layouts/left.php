<nav class="left-menu" left-menu>
    <div class="logo-container">
        <a href="" class="logo">
             <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/images/logo/benefit-clients-logo.png" alt="Benefit Client Template" />
            <img class="logo-inverse" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/clean-ui/common/img/logo-inverse.png" alt="Clean UI Admin Template" />
            
        </a>
    </div>
    <div class="left-menu-inner scroll-pane">
        <ul class="left-menu-list left-menu-list-root list-unstyled">
            
          <li class="left-menu-list-color-primary">
                <a class="left-menu-link" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/admin/dashboard">
                    <i class="left-menu-link-icon icmn-home2"><!-- --></i>
                    Dashboard
                </a>
            </li>
            <li class="left-menu-list-color-success">
                <a class="left-menu-link" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/admin/manageadminuser">
                    <i class="left-menu-link-icon fa fa-group"><!-- --></i>
                    Manage Admin Users
                </a>
            </li>
            
			 <li class="left-menu-list-submenu left-menu-list-color-warning" id="firms_id">
                <a class="left-menu-link" href="javascript: void(0);">
                    <i class="left-menu-link-icon icmn-books"><!-- --></i>
                    Firms
                </a>
                <ul class="left-menu-list list-unstyled" id="firms_id_ul">
                    <li class="firms_li">
                        <a class="left-menu-link firms" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/admin/firm/add-firm">
                             Firms 
                        </a>
                    </li>
                    <li class="firm_users_li">
                         <a class="left-menu-link firm-users" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/admin/firm/firm-user">
                            Firm Users
                        </a>
                    </li>
                </ul>
            </li>
			
             <li class="left-menu-list-submenu left-menu-list-color-warning" id="clients_id">
                <a class="left-menu-link" href="javascript: void(0);">
                    <i class="left-menu-link-icon icmn-books"><!-- --></i>
                    Clients
                </a>
                <ul class="left-menu-list list-unstyled" id="clients_id_ul">
                    <li class="clients_li">
                        <a class="left-menu-link clients" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/admin/clients/addclient">
                             Clients 
                        </a>
                    </li>
                    <li class="client_users_li">
                         <a class="left-menu-link client-users" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/admin/clients/addclientuser">
                            Client Users
                        </a>
                    </li>
                </ul>
            </li>
             
            
            <li class="left-menu-list-separator "><!-- --></li>
          
            <li class="left-menu-list-submenu left-menu-list-color-info">
                <a class="left-menu-link" href="javascript: void(0);">
                    <i class="left-menu-link-icon icmn-files-empty2"><!-- --></i>
                    MasterData
                </a>
                <ul class="left-menu-list list-unstyled"  id="master_data">
                    <li class="billing_li">
                        <a class="left-menu-link billing_a" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/admin/masterdata/systembilling">
                            System Billing	
                        </a>
                    </li>
                    <li class="pricing_li">
                        <a class="left-menu-link pricing_a" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/admin/masterdata/systempricing">
                            System Pricing
                        </a>
                    </li>
                     <li  class="firm_li">
                        <a class="left-menu-link firm_a" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/admin/masterdata/firmpricing">
                            Firm Pricing
                        </a>
                    </li>
                </ul>
            </li>
           

        </ul>
    </div>
</nav>