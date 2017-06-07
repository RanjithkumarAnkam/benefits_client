<?php 
use yii\data\ArrayDataProvider;
use kartik\grid\GridView; 
use yii\helpers\Html;
use kartik\alert\Alert;
?>
<section class="page-content padding-0">

	 

 <style>
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

	<div class="page-content-inner">


		<div class="row">
		<div class="col-md-12 blue-breadcrumb-plans" align="center">
			
				<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 padding-top-7 float-initial">
				<div class="" align="center">
                        <div class="nav-tabs-horizontal">
                            <ul class="nav nav-tabs border-bottom display-inblock" role="tablist">
                                <li class="nav-item hover">
                                    <a class="nav-link plan-link active color-white no-wrap" href="javascript: void(0);" data-toggle="tab" data-target="#home5" role="tab">Client Plan Performance & Projections</a>
                                </li>
                                <li class="nav-item hover">
                                    <a class="nav-link plan-link color-white no-wrap" href="javascript: void(0);" data-toggle="tab" data-target="#profile5" role="tab">Most Recent Usage</a></li>
                                
                                <li class="nav-item hover">
                                    <a class="nav-link plan-link color-white dropdown-icon-li no-wrap" href="javascript: void(0);" data-toggle="tab" data-target="#messages5" role="tab">Firm Client, Renewal, Fee Analytics</a>
                                    </li>
                             
                            </ul>
                            
                        </div>
                        
                    </div>
				</div>
				
				</div>
			<!--<div class="col-md-12 back-color"
				style="background: #13a9cc; padding-top: 7px; padding-left: 30px;">
				<div>
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item"><a class="nav-link link active color-white backcolor"
							href="javascript: void(0);" data-toggle="tab"
							data-target="#home5" role="tab">Client Plan Performance & Projections</a>
						</li>
						<li class="nav-item"><a class="nav-link link color-white backcolor"
							href="javascript: void(0);" data-toggle="tab"
							data-target="#profile5" role="tab">Most Recent Usage</a></li>
						<li class="nav-item"><a class="nav-link link color-white redrawchart-firm backcolor"
							href="javascript: void(0);" data-toggle="tab" 
							data-target="#messages5" role="tab">Firm Client, Renewal, Fee Analytics</a>
						</li>

					</ul>

				</div>
			</div>-->

			<div class="tab-content padding-vertical-20">
				<div class="tab-pane active" id="home5" role="tabpanel">
					<div class="col-md-12 padding-left-10 padding-right-10 padding-top-10">
						<div class="col-md-12 alert-div ">
				<?php
				if ($flash = Yii::$app->session->getFlash ( 'success' )) {
					
					echo Alert::widget ( [ 
							'type' => Alert::TYPE_SUCCESS,
							'icon' => 'glyphicon glyphicon-ok-sign',
							'body' => $flash,
							'delay' => 0 
					] );
				}
				?>

				<?php
				if ($flash = Yii::$app->session->getFlash ( 'error' )) {
					
					echo Alert::widget ( [ 
							'type' => Alert::TYPE_DANGER,
							'icon' => 'glyphicon glyphicon-remove-sign',
							'body' => $flash,
							'delay' => 0 
					] );
				}
				?>
				</div>
						<div class="col-md-6 col-xs-12 padding-left-10 padding-right-10">
							<div class="widget box-shadow widget-six">
								<div class="widget-header text-align-left ">

									<span class="margin-right-10 unique-firms no-wrap">Plan Over / Under budget by Renewal Date</span> <a data-toggle="modal" data-target="#chart-modal-planrenewalyear" class="chart-modal pull-right"> <img
										src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/images/logo/maximize_icon.png">
									</a>
								</div>

								<br />
								<div class=" ">
									<div id="container-planrenewalyear"
									style="min-width: 300px; height: 250px; margin: 0 auto"></div>

								</div>
							</div>
						</div>

						<div class="col-md-6 col-xs-12 padding-left-10 padding-right-10">

							<div class="widget box-shadow widget-six">
								<div class="widget-header text-align-left">

									<span class="margin-right-10 unique-firms no-wrap">Renewal Projections % Over Current Year Budget</span> <a data-toggle="modal" data-target="#chart-modal-renewalprojections" class="chart-modal pull-right"
										class="pull-right"> <img
										src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/images/logo/maximize_icon.png">
									</a>
								</div>

								<br />
								<div class=" ">
									<div id="renewal_projections"
										style="min-width: 300px; height: 250px; margin: 0 auto"></div>

								</div>
							</div>
						</div>
						
						<div class="col-md-6 col-xs-12 padding-left-10 padding-right-10">
							<div class="widget box-shadow widget-six">
								<div class="widget-header text-align-left">

									<span class="margin-right-10 unique-firms no-wrap">Claims Trend Analysis By Renewal Date</span> <a data-toggle="modal" data-target="#chart-modal-claimstrendanalysis" class="chart-modal pull-right"> <img
										src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/images/logo/maximize_icon.png">
									</a>
								</div>

								<br />
								<div class=" ">
									<div id="claims_trend_analysis"
									style="min-width: 300px; height: 250px; margin: 0 auto"></div>

								</div>
							</div>
						</div>
						
						
						
							<div class="col-md-6 col-xs-12 padding-left-10 padding-right-10">
							
							<div class="widget box-shadow widget-six">
								<div class="widget-header text-align-left ">

									<span class="margin-right-10 unique-firms">Most Recent Client Users</span> 
								</div>

								
								<div class="row">
								<div class="col-md-12 padding-15">
								<div class="">
								
									<?php
								
$resultData = [
    array("username"=>"Ravi Teja","client"=>"Company 1","logindate"=>"2/1/2017","logintime"=>"9:00 AM"),
    array("username"=>"Ravi Teja","client"=>"Company 2","logindate"=>"2/1/2017","logintime"=>"9:00 AM"),
array("username"=>"Ravi Teja","client"=>"Company 3","logindate"=>"2/1/2017","logintime"=>"9:00 AM"),
array("username"=>"Ravi Teja","client"=>"Company 4","logindate"=>"2/1/2017","logintime"=>"9:00 AM"),
array("username"=>"Ravi Teja","client"=>"Company 5","logindate"=>"2/1/2017","logintime"=>"9:00 AM"),];

function filter($item) {
    $mailfilter = Yii::$app->request->getQueryParam('filteremail', '');
    if (strlen($mailfilter) > 0) {
        if (strpos($item['option'], $mailfilter) != false) {
            return true;
        } else {
            return false;
        }
    } else {
        return true;
    }
}

$filteredresultData = array_filter($resultData, 'filter');
/*

$mailfilter = Yii::$app->request->getQueryParam('filtername', '');
$namefilter = Yii::$app->request->getQueryParam('filteremail', '');
$statusfilter = Yii::$app->request->getQueryParam('filterstatus', '');
$searchModel = ['username' => $mailfilter, 'logins' => $namefilter,'type'=>$statusfilter];
*/
$dataProvider = new ArrayDataProvider([
        
        'allModels' => $filteredresultData,
        'sort' => [
            'attributes' => [ 'username', 'client','logindate','logintime'],
        ],
]);

$gridColumns = [
            

            [
            'attribute' => 'username', 
'headerOptions' => ['class' => 'blue-grid-head'],
			 'filter' => false,
            	'value' => function ($model, $key, $index, $widget) {
				
					 $user_name = '<a  href="#update_client_user" data-toggle="modal" class="color-blue"><u>'.$model['username'].'</u></a>';	
				 
															 
				 return $user_name;
					},
					'format'=>'raw',
'label' => 'User Name',
            ],
            [
            "attribute" => "client",
'headerOptions' => ['class' => 'blue-grid-head'],
            'filter' => false,
            'value' => 'client',
'label' => 'Client',
            ],
			[
            "attribute" => "logindate",
'headerOptions' => ['class' => 'blue-grid-head'],
            'filter' => false,
            'value' => 'logindate',
'label' => 'Login Date',
            ],
			[
            "attribute" => "logintime",
'headerOptions' => ['class' => 'blue-grid-head'],
            'filter' => false,
            'value' => 'logintime',
'label' => 'Login Time',
            ],
/*[
'attribute' => 'date',
'format'=>'date',
'filterType'=> \kartik\grid\GridView::FILTER_DATE_RANGE,
'filterWidgetOptions' => [
'presetDropdown' => true,
'pluginOptions' => [
'format' => 'YYYY-MM-DD',
'separator' => ' TO ',
'opens'=>'left',
] ,
'pluginEvents' => [
"apply.daterangepicker" => "function() { apply_filter('date') }",
]
],
],*/
			];
							echo GridView::widget([
		'dataProvider' => $dataProvider,
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
							 

					</div>

					
				</div>
				<div class="tab-pane" id="profile5" role="tabpanel">


					<div class="col-md-12 padding-top-10 padding-left-10 padding-right-10">
					 
							
								
								<div class="col-md-6 padding-left-10 padding-right-10">
							
							<div class="widget box-shadow widget-six">
								<div class="widget-header text-align-left ">

									<span class="margin-right-10 unique-firms">Most Recent Client Plans</span> 
								</div>

								
								<div class="row">
								<div class="col-md-12 padding-15">
								<div class="">
								
									<?php
								
$resultData = [
    array("username"=>"Ravi Teja","client"=>"Company 1","date"=>"2/1/2017","time"=>"9:00 AM","plantype"=>"Group Medical Plan"),
    array("username"=>"Ravi Teja","client"=>"Company 2","date"=>"2/1/2017","time"=>"9:00 AM","plantype"=>"Dental Plan"),
array("username"=>"Ravi Teja","client"=>"Company 3","date"=>"2/1/2017","time"=>"9:00 AM","plantype"=>"Vision"),
array("username"=>"Ravi Teja","client"=>"Company 4","date"=>"2/1/2017","time"=>"9:00 AM","plantype"=>"Group Medical Plan"),
array("username"=>"Ravi Teja","client"=>"Company 5","date"=>"2/1/2017","time"=>"9:00 AM","plantype"=>"Dental Plan"),];

function filter2($item) {
    $mailfilter = Yii::$app->request->getQueryParam('website', '');
    if (strlen($mailfilter) > 0) {
        if (strpos($item['website'], $mailfilter) != false) {
            return true;
            
        } else {

            return false;
        }
    } else {
        return true;
    }
}

$filteredresultData = array_filter($resultData, 'filter2');
/*
$userfilter = Yii::$app->request->getQueryParam('user', '');
$usertypefilter = Yii::$app->request->getQueryParam('usertype', '');
$mailfilter = Yii::$app->request->getQueryParam('website', '');
$namefilter = Yii::$app->request->getQueryParam('helppressed', '');
$statusfilter = Yii::$app->request->getQueryParam('filterstatus', '');

$searchModel = ['user' =>$userfilter  ,'usertype' =>$usertypefilter  ,'website' => $mailfilter, 'help' => $namefilter,'contact'=>$statusfilter];
*/
$dataProvider = new ArrayDataProvider([
        
        'allModels' => $filteredresultData,
        'sort' => [
            'attributes' => [ 'username', 'client','date','time','plantype'],
        ],
]);

$gridColumns = [
            [
            "attribute" => "client",
'headerOptions' => ['class' => 'blue-grid-head'],
            'filter' => false,
           'value' => function ($model, $key, $index, $widget) {
				
					 $user_name = '<a  href="/design/user/clientuser?id=1" class="color-blue"><u>'.$model['client'].'</u></a>';	
				 
															 
				 return $user_name;
					},
					'format'=>'raw',
'label' => 'Client',
            ],
 [
            "attribute" => "plantype",
'headerOptions' => ['class' => 'blue-grid-head'],
            'filter' => false,
            'value' => 'plantype',
'label' => 'Plan Type',
            ],
            [
            'attribute' => 'username', 
'headerOptions' => ['class' => 'blue-grid-head'],
			 'filter' => false,
            	
					'format'=>'raw',
'label' => 'User First,Last Name',
            ],
            
			[
            "attribute" => "date",
'headerOptions' => ['class' => 'blue-grid-head'],
            'filter' => false,
            'value' => 'date',
'label' => 'Date',
            ],
			[
            "attribute" => "time",
'headerOptions' => ['class' => 'blue-grid-head'],
            'filter' => false,
            'value' => 'time',
'label' => 'Time',
            ],
			
/*[
'attribute' => 'date',
'format'=>'date',
'filterType'=> \kartik\grid\GridView::FILTER_DATE_RANGE,
'filterWidgetOptions' => [
'presetDropdown' => true,
'pluginOptions' => [
'format' => 'YYYY-MM-DD',
'separator' => ' TO ',
'opens'=>'left',
] ,
'pluginEvents' => [
"apply.daterangepicker" => "function() { apply_filter('date') }",
]
],
],*/
			];
							echo GridView::widget([
		'dataProvider' => $dataProvider,
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
		'pjax' => false,
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
								
							
<div class="col-md-6 padding-left-10 padding-right-10">
							
							<div class="widget box-shadow widget-six">
								<div class="widget-header text-align-left ">

									<span class="margin-right-10 unique-firms">Entire Client List</span> 
								</div>

								
								<div class="row">
								<div class="col-md-12 padding-15">
								<div class="">
								
									<?php
								
$resultData = [
    array("client"=>"Company 1","active"=>"Yes","consultant"=>"user 1","accountmanager"=>"user 3","servicerep"=>"user 10"),
    array("client"=>"Company 2","active"=>"Yes","consultant"=>"user 1","accountmanager"=>"user 3","servicerep"=>"user 10"),
array("client"=>"Company 3","active"=>"No","consultant"=>"user 2","accountmanager"=>"user 3","servicerep"=>"user 10"),
array("client"=>"Company 4","active"=>"No","consultant"=>"user 3","accountmanager"=>"user 3","servicerep"=>"user 10"),
array("client"=>"Company 5","active"=>"Yes","consultant"=>"user 1","accountmanager"=>"user 3","servicerep"=>"user 10"),];

function filter3($item) {
    $mailfilter = Yii::$app->request->getQueryParam('website', '');
    if (strlen($mailfilter) > 0) {
        if (strpos($item['website'], $mailfilter) != false) {
            return true;
            
        } else {

            return false;
        }
    } else {
        return true;
    }
}

$filteredresultData = array_filter($resultData, 'filter3');
/*
$userfilter = Yii::$app->request->getQueryParam('user', '');
$usertypefilter = Yii::$app->request->getQueryParam('usertype', '');
$mailfilter = Yii::$app->request->getQueryParam('website', '');
$namefilter = Yii::$app->request->getQueryParam('helppressed', '');
$statusfilter = Yii::$app->request->getQueryParam('filterstatus', '');

$searchModel = ['user' =>$userfilter  ,'usertype' =>$usertypefilter  ,'website' => $mailfilter, 'help' => $namefilter,'contact'=>$statusfilter];
*/
$dataProvider = new ArrayDataProvider([
        
        'allModels' => $filteredresultData,
        'sort' => [
            'attributes' => [ 'client','active','consultant','accountmanager','servicerep'],
        ],
]);

$gridColumns = [
            [
            "attribute" => "client",
'headerOptions' => ['class' => 'blue-grid-head'],
            'filter' => false,
            'value' => function ($model, $key, $index, $widget) {
				
					 $user_name = '<a href="/design/user/clientuser?id=1" class="color-blue"><u>'.$model['client'].'</u></a>';	
				 
															 
				 return $user_name;
					},
					'format'=>'raw',
'label' => 'Client',
            ],
 [
            "attribute" => "active",
'headerOptions' => ['class' => 'blue-grid-head'],
            'filter' => false,
            'value' => 'active',
'label' => 'Active',
            ],
           [
            "attribute" => "consultant",
'headerOptions' => ['class' => 'blue-grid-head'],
            'filter' => false,
            'value' => 'consultant',
'label' => 'Consultant',
            ],
            
			 [
            "attribute" => "accountmanager",
'headerOptions' => ['class' => 'blue-grid-head'],
            'filter' => false,
            'value' => 'accountmanager',
'label' => 'Account Manager',
            ],
			 [
            "attribute" => "servicerep",
'headerOptions' => ['class' => 'blue-grid-head'],
            'filter' => false,
            'value' => 'servicerep',
'label' => 'Service Rep',
            ],
			
/*[
'attribute' => 'date',
'format'=>'date',
'filterType'=> \kartik\grid\GridView::FILTER_DATE_RANGE,
'filterWidgetOptions' => [
'presetDropdown' => true,
'pluginOptions' => [
'format' => 'YYYY-MM-DD',
'separator' => ' TO ',
'opens'=>'left',
] ,
'pluginEvents' => [
"apply.daterangepicker" => "function() { apply_filter('date') }",
]
],
],*/
			];
							echo GridView::widget([
		'dataProvider' => $dataProvider,
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
		'pjax' => false,
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
								
						
						 
					</div>

				</div>
				<div class="tab-pane" id="messages5" role="tabpanel">
					<div class="col-md-12 padding-left-10 padding-right-10 padding-top-10">
					 
            
            
           
				
				 
					<div class="col-lg-12 padding-left-10 padding-right-10">
					
					<div class="widget box-shadow widget-six">
								<div class="widget-header text-align-left">

									<span class="margin-right-10 unique-firms">Client Break Down
										</span> <a data-toggle="modal" data-target="#chart-modal-clientbreakdown" class="chart-modal pull-right"> <img
										src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/images/logo/maximize_icon.png">
									</a>
								</div>

								<br />
								<div class=" ">
									<div id="client_break_down"
									style="min-width: 300px; height: 250px; margin: 0 auto"></div>

								</div>
							</div> 
					</div>

					<div class="col-lg-6 padding-left-10 padding-right-10">
						<div class="widget box-shadow widget-six">
							<div class="widget-header text-align-left">

								<span class="margin-right-10 unique-firms">Plans Renewal By Month</span>		
								
								<a data-toggle="modal" data-target="#chart-modal-planrenewal" class="chart-modal pull-right"> <img
										src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/images/logo/maximize_icon.png">
									</a>						
							</div>

							<br />
							<div class=" ">
								<div id="plan_renewal_month" style="min-width: 300px; height: 250px; margin: 0 auto"></div>
							  
							</div>
						</div>
					</div>
					
					<div class="col-lg-6 padding-left-10 padding-right-10">
						<div class="widget box-shadow widget-six">
							<div class="widget-header text-align-left">

								<span class="margin-right-10 unique-firms">Renewal Commision & Fees</span>		
								
								<a data-toggle="modal" data-target="#chart-modal-commisionfee" class="chart-modal pull-right"> <img
										src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/images/logo/maximize_icon.png">
									</a>						
							</div>

							<br />
							<div class=" ">
								<div id="renewalfees_container" style="min-width: 300px; height: 250px; margin: 0 auto"></div>
							  
							</div>
						</div>
					</div>
			 
				 
					</div>
				</div>

			</div>

		</div>

	</div>

 
</section>

<script>
	$(document).ready(function(){
$('#home_color').addClass('color-orange-light');
});
</script>



<script type="text/javascript"
	src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/design/admin/dashboard-firm.js"></script>




<div class="modal fade" id="chart-modal-planrenewalyear" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header modal-header-color">
       <button type="button" class="close-modal modal-opacity close-modal-blue" data-dismiss="modal" aria-hidden="true">
								X
							</button>
        <h4 class="modal-title color-white" id="myModalLabel">Plan Over / Under budget by Renewal Date</h4>
      </div>
      <div class="modal-body">
        <div class="panel panel-default">
          <div class="panel-body">
            <div id="modal_planrenewalyear"></div>
          </div>
        </div>
      </div>
     
    </div>
  </div>
</div>



<div class="modal fade" id="chart-modal-renewalprojections" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header modal-header-color">
       <button type="button" class="close-modal modal-opacity close-modal-blue" data-dismiss="modal" aria-hidden="true">
								X
							</button>
        <h4 class="modal-title color-white" id="myModalLabel">Renewal Projections % Over Current Year Budget</h4>
      </div>
      <div class="modal-body">
        <div class="panel panel-default">
          <div class="panel-body">
            <div id="modal_renewalprojections"></div>
          </div>
        </div>
      </div>
     
    </div>
  </div>
</div>



<div class="modal fade" id="chart-modal-claimstrendanalysis" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header modal-header-color">
       <button type="button" class="close-modal modal-opacity close-modal-blue" data-dismiss="modal" aria-hidden="true">
								X
							</button>
        <h4 class="modal-title color-white" id="myModalLabel">Claims Trend Analysis By Renewal Date</h4>
      </div>
      <div class="modal-body">
        <div class="panel panel-default">
          <div class="panel-body">
            <div id="modal_claimstrendanalysis"></div>
          </div>
        </div>
      </div>
     
    </div>
  </div>
</div>

 
<div class="modal fade" id="chart-modal-clientbreakdown" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header modal-header-color">
     <button type="button" class="close-modal modal-opacity close-modal-blue" data-dismiss="modal" aria-hidden="true">
								X
							</button>
        <h4 class="modal-title color-white" id="myModalLabel">Client Break Down</h4>
      </div>
      <div class="modal-body">
        <div class="panel panel-default">
          <div class="panel-body">
            <div id="modal_clientbreakdown"></div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>
<div class="modal fade" id="chart-modal-planrenewal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header modal-header-color">
      <button type="button" class="close-modal modal-opacity close-modal-blue" data-dismiss="modal" aria-hidden="true">
								X
							</button>
        <h4 class="modal-title color-white" id="myModalLabel">Plan Renewals</h4>
      </div>
      <div class="modal-body">
        <div class="panel panel-default">
          <div class="panel-body">
            <div id="modal_planrenewal"></div>
          </div>
        </div>
      </div>
    <!--  <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div>
  </div>
</div>

<div class="modal fade" id="chart-modal-commisionfee" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header modal-header-color">
      <button type="button" class="close-modal modal-opacity close-modal-blue" data-dismiss="modal" aria-hidden="true">
								X
							</button>
        <h4 class="modal-title color-white" id="myModalLabel">Renewal Commision & Fees</h4>
      </div>
      <div class="modal-body">
        <div class="panel panel-default">
          <div class="panel-body">
            <div id="modal_commisionfee"></div>
          </div>
        </div>
      </div>
    <!--  <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div>
  </div>
</div>

<div class="modal fade" id="apply-activeusers" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header modal-header-color">
      <button type="button" class="close-modal modal-opacity close-modal-blue" data-dismiss="modal" aria-hidden="true">
								X
							</button>
        <h4 class="modal-title color-white" id="myModalLabel">Most Active Users</h4>
      </div>
      <div class="modal-body">
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="col-md-12">
								<div class="">
								
									<?php
								
$resultData = [
    array("username"=>"Ravi Teja","logins"=>"89","type"=>"Firm"),
    array("username"=>"Ravi Teja","logins"=>"89","type"=>"Firm"),
array("username"=>"Ravi Teja","logins"=>"89","type"=>"Firm"),
array("username"=>"Ravi Teja","logins"=>"89","type"=>"Firm"),
array("username"=>"Ravi Teja","logins"=>"89","type"=>"Firm"),];

function filteractive($item) {
    $mailfilter = Yii::$app->request->getQueryParam('filteremail', '');
    if (strlen($mailfilter) > 0) {
        if (strpos($item['option'], $mailfilter) != false) {
            return true;
        } else {
            return false;
        }
    } else {
        return true;
    }
}

$filteredresultData = array_filter($resultData, 'filteractive');


$mailfilter = Yii::$app->request->getQueryParam('filtername', '');
$namefilter = Yii::$app->request->getQueryParam('filteremail', '');
$statusfilter = Yii::$app->request->getQueryParam('filterstatus', '');
$searchModel = ['username' => $mailfilter, 'logins' => $namefilter,'type'=>$statusfilter];

$dataProvider = new ArrayDataProvider([
        
        'allModels' => $filteredresultData,
        'sort' => [
            'attributes' => [ 'username', 'logins','type'],
        ],
]);

$gridColumns = [
            ['class' => 'yii\grid\SerialColumn'],
            

            [
            'attribute' => 'username', 
'headerOptions' => ['class' => 'blue-grid-head'],
			 'filter' => '<input class="form-control" name="filtername" value="'. $searchModel['username'] .'" type="text">',
            	'value' => function ($model, $key, $index, $widget) {
				 if($model['type'] == 'Firm'){
					 $user_name = '<a  href="#update_firm_user" data-toggle="modal" class="color-blue"><u>'.$model['username'].'</u></a>';	
				 }else{
					 $user_name = '<a  href="#update_client_user" data-toggle="modal" class="color-blue"><u>'.$model['username'].'</u></a>';	
				 }
															 
				 return $user_name;
					},
					'format'=>'raw',
'label' => 'User Name',
            ],
            [
            "attribute" => "logins",
'headerOptions' => ['class' => 'blue-grid-head'],
            'filter' => '<input class="form-control" name="filteremail" value="'. $searchModel['logins'] .'" type="text">',
            'value' => 'logins',
'label' => '# of Logins',
            ],
			[
            "attribute" => "type",
'headerOptions' => ['class' => 'blue-grid-head'],
            'filter' => '<input class="form-control" name="filterstatus" value="'. $searchModel['type'] .'" type="text">',
            'value' => 'type',
'label' => 'User Type',
            ],
/*[
'attribute' => 'date',
'format'=>'date',
'filterType'=> \kartik\grid\GridView::FILTER_DATE_RANGE,
'filterWidgetOptions' => [
'presetDropdown' => true,
'pluginOptions' => [
'format' => 'YYYY-MM-DD',
'separator' => ' TO ',
'opens'=>'left',
] ,
'pluginEvents' => [
"apply.daterangepicker" => "function() { apply_filter('date') }",
]
],
],*/
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
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="apply-application_funtionality" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header modal-header-color">
      <button type="button" class="close-modal modal-opacity close-modal-blue" data-dismiss="modal" aria-hidden="true">
								X
							</button>
        <h4 class="modal-title color-white" id="myModalLabel">Application Functionality</h4>
      </div>
      <div class="modal-body">
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="col-md-12">
								<div class="">
								
									<?php
								
$resultData = [
    array("user"=>"Raviteja","usertype"=>"Client","website"=>"Client","help"=>"89"),
    array("user"=>"Praveen","usertype"=>"Client","website"=>"Client","help"=>"89"),
array("user"=>"Ranjith","usertype"=>"Firm","website"=>"Client","help"=>"89"),
array("user"=>"Sai","usertype"=>"Client","website"=>"Client","help"=>"89"),
array("user"=>"Deepak","usertype"=>"Firm","website"=>"Client","help"=>"89"),];

function filter4($item) {
    $mailfilter = Yii::$app->request->getQueryParam('website', '');
    if (strlen($mailfilter) > 0) {
        if (strpos($item['website'], $mailfilter) != false) {
            return true;
            
        } else {

            return false;
        }
    } else {
        return true;
    }
}

$filteredresultData = array_filter($resultData, 'filter4');

$userfilter = Yii::$app->request->getQueryParam('user', '');
$usertypefilter = Yii::$app->request->getQueryParam('usertype', '');
$mailfilter = Yii::$app->request->getQueryParam('website', '');
$namefilter = Yii::$app->request->getQueryParam('helppressed', '');

$searchModel = ['user' =>$userfilter  ,'usertype' =>$usertypefilter  ,'website' => $mailfilter, 'help' => $namefilter,'contact'=>$statusfilter];

$dataProvider = new ArrayDataProvider([
        
        'allModels' => $filteredresultData,
        'sort' => [
            'attributes' => [ 'user','usertype','username', 'logins','type'],
        ],
]);

$gridColumns = [
            ['class' => 'yii\grid\SerialColumn'],
            
[
            'attribute' => 'user', 
'headerOptions' => ['class' => 'blue-grid-head'],
			 'filter' => '<input class="form-control" name="user" value="'. $searchModel['user'] .'" type="text">',
           	'value' => function ($model, $key, $index, $widget) {
				 if($model['usertype'] == 'Firm'){
					 $user_name = '<a  href="#update_firm_user" data-toggle="modal" class="color-blue"><u>'.$model['user'].'</u></a>';	
				 }else{
					 $user_name = '<a  href="#update_client_user" data-toggle="modal" class="color-blue"><u>'.$model['user'].'</u></a>';	
				 }
															 
				 return $user_name;
					},
			'format'=>'raw',
'label' => 'User Name',
            ],
			[
            "attribute" => "usertype",
'headerOptions' => ['class' => 'blue-grid-head'],
            'filter' => '<input class="form-control" name="usertype" value="'. $searchModel['usertype'] .'" type="text">',
            'value' => 'usertype',
'label' => 'User Type',
            ],
            [
            'attribute' => 'website', 
'headerOptions' => ['class' => 'blue-grid-head'],
			 'filter' => '<input class="form-control" name="website" value="'. $searchModel['website'] .'" type="text">',
            'value' => 'website',
'label' => 'Website Page',
            ],
            [
            "attribute" => "help",
			"width" => "200px",
'headerOptions' => ['class' => 'blue-grid-head'],
            'filter' => '<input class="form-control" name="helppressed" value="'. $searchModel['help'] .'" type="text">',
            'value' => 'help',
'label' => '# of times "Help" Pressed',
            ],
		/*	[
            "attribute" => "contact",
'headerOptions' => ['class' => 'blue-grid-head'],
            'filter' => '<input class="form-control" name="contactpressed" value="'. $searchModel['contact'] .'" type="text">',
            'value' => 'contact',
'label' => '# of times "Contact" Pressed',
            ]*/
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
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>