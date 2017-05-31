	<?php 
use yii\data\ArrayDataProvider;
use kartik\grid\GridView; 
use yii\helpers\Html;
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
			
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-top-7 float-initial">
				 
                        <div class="nav-tabs-horizontal">
                            <ul class="nav nav-tabs border-bottom display-inblock" role="tablist">
                                <li class="nav-item hover">
                                    <a class="nav-link plan-link active color-white no-wrap" href="javascript: void(0);" data-toggle="tab" data-target="#home5" role="tab">Financial and Basic Statistics</a>
                                </li>
                                <li class="nav-item hover">
                                    <a class="nav-link plan-link color-white no-wrap" href="javascript: void(0);" data-toggle="tab" data-target="#profile5" role="tab">User Analytics</a></li>
                                
                                <li class="nav-item hover">
                                    <a class="nav-link plan-link color-white dropdown-icon-li no-wrap" href="javascript: void(0);" data-toggle="tab" data-target="#messages5" role="tab">Firm And Client Analytics</a>
                                    </li>
                             
                            </ul>
                            
                        </div>
                        
                     
				</div>
				
				</div>
		<!--	<div class="col-md-12 back-color"
				style="background: #13a9cc; padding-top: 7px; padding-left: 30px;">
				<div>
					 <ul class="nav nav-tabs border-bottom display-inblock" role="tablist">
                                <li class="nav-item hover">
                                    <a class="nav-link plan-link active color-white no-wrap" href="javascript: void(0);" data-toggle="tab" data-target="#home5" role="tab">Financial and Basic Statistics</a>
                                </li>
                                <li class="nav-item hover">
                                    <a class="nav-link plan-link color-white no-wrap" href="javascript: void(0);" data-toggle="tab" data-target="#profile5" role="tab">User Analytics</a></li>
                                
                                <li class="nav-item hover">
                                    <a class="nav-link plan-link color-white dropdown-icon-li no-wrap" href="javascript: void(0);" data-toggle="tab" data-target="#messages5" role="tab">Firm And Client Analytics</a>
                                    </li>
                             
                            </ul>
				</div>
			</div>-->

			<div class="tab-content padding-vertical-20">
			<!-- tab for Financial and Basic Statistics-->
				<div class="tab-pane active" id="home5" role="tabpanel">
					<div class="col-md-12 padding-left-10 padding-right-10 padding-top-10">
						<div class="col-md-3 col-xs-12  padding-left-10 padding-right-10">
							<div class="widget box-shadow widget-six">
								<div class="widget-header text-align-left ">

									<span class="margin-right-10 unique-firms">Earning Details</span>
									<a data-toggle="modal" data-target="#chart-modal-earningdetails" class="chart-modal pull-right"
										data-toggle="modal"> <img
										src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/images/logo/maximize_icon.png">
									</a>
									<div class="dropdown">
										<a
											class="pull-right dropdown-months dropdown-toggle margin-left-42"
											data-toggle="dropdown"> <img
											src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/images/logo/dropdown.png">

										</a>
										<ul class="dropdown-menu upper-icon">
											<li><a href="#">April 2017</a></li>
											<li><a href="#">May 2017</a></li>
											<li><a href="#">June 2017</a></li>
										</ul>
									</div>



								</div>

								<br />
								<div class=" ">
									<div id="earnings-details"
										style="min-width: 300px; height: 245px; margin: 0 auto"></div>
									<div id="addText"
										style="position: absolute; left: 0px; top: 0px;"></div>
								</div>
							</div>

						</div>
						<div class="col-md-4 col-xs-12  padding-left-10 padding-right-10">
							<div class="widget box-shadow widget-six">
								<div class="widget-header text-align-left ">

									<span class="margin-right-10 unique-firms">Unique Firms On the
										System</span> <a data-toggle="modal" data-target="#chart-modal-uniquefirms" class="chart-modal pull-right"> <img
										src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/images/logo/maximize_icon.png">
									</a>
								</div>

								<br />
								<div class=" ">
									<div id="unique_firms"
										style="min-width: 300px; height: 250px; margin: 0 auto"></div>

								</div>
							</div>
						</div>

						<div class="col-md-5 col-xs-12  padding-left-10 padding-right-10">

							<div class="widget box-shadow widget-six">
								<div class="widget-header text-align-left">

									<span class="margin-right-10 unique-firms">User Logins</span> <a data-toggle="modal" data-target="#chart-modal-userlogins" class="chart-modal pull-right"
										class="pull-right"> <img
										src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/images/logo/maximize_icon.png">
									</a>
								</div>

								<br />
								<div class=" ">
									<div id="user_login"
										style="min-width: 300px; height: 250px; margin: 0 auto"></div>

								</div>
							</div>
						</div>
					</div>

					<div class="col-md-12 padding-left-10 padding-right-10">

						<div class="col-md-6 col-xs-12 padding-left-10 padding-right-10">
							<div class="widget box-shadow widget-six">
								<div class="widget-header text-align-left">

									<span class="margin-right-10 unique-firms">Companies and Module
										subscription</span> <a data-toggle="modal" data-target="#chart-modal-modulesubscription" class="chart-modal pull-right"> <img
										src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/images/logo/maximize_icon.png">
									</a>
								</div>

								<br />
								<div class=" ">
									<div id="module_subscription"
										style="min-width: 300px; height: 250px; margin: 0 auto"></div>

								</div>
							</div>
						</div>

						<div class="col-lg-6 col-xs-12 padding-left-10 padding-right-10">
							<div class="widget box-shadow widget-six">
								<div class="widget-header text-align-left">

									<span class="margin-right-10 unique-firms">Plans On System By
										Month</span> <a data-toggle="modal" data-target="#chart-modal-plans" class="chart-modal pull-right"> <img
										src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/images/logo/maximize_icon.png">
									</a>


								</div>

								<br />
								<div class=" ">
									<div id="plan_on_system"
										style="min-width: 300px; height: 250px; margin: 0 auto"></div>

								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- tab end for Financial and Basic Statistics-->
					<!-- tab for User Analytics-->
				<div class="tab-pane" id="profile5" role="tabpanel">


					<div class="col-md-12 padding-10">
					 
							
							<div class="col-md-6 col-sm-12 col-xs-12 padding-left-10 padding-right-10">
							
							<div class="widget box-shadow widget-six">
								<div class="widget-header text-align-left ">

									<span class="margin-right-10 unique-firms">Most
										Active Users</span> 
								</div>

								
								<div class="row">
								<div class="col-md-12">
								<div class="">
								
									<?php
								
$resultData = [
    array("username"=>"Ravi Teja","logins"=>"89","type"=>"Firm"),
    array("username"=>"Ravi Teja","logins"=>"89","type"=>"Firm"),
array("username"=>"Ravi Teja","logins"=>"89","type"=>"Firm"),
array("username"=>"Ravi Teja","logins"=>"89","type"=>"Firm"),
array("username"=>"Ravi Teja","logins"=>"89","type"=>"Firm"),];

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
            ['class' => 'yii\grid\SerialColumn',
			'headerOptions' => ['class' => 'blue-grid-head'],
			],
            

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
								
								<div class="col-md-12 padding-top-10">
										<form>
											<div class="col-md-8">
												<div class="form-group row">
													<div class="col-md-5">
														<label class="form-control-label" for="l0">Start Date:</label>
													</div>
													<div class="col-md-7">
														<input type="text"
															class="form-control datepicker-only-init"
															placeholder="Select Date" />
													</div>
												</div>
											</div>
											<div class="col-md-8">
												<div class="form-group row">
													<div class="col-md-5">
														<label class="form-control-label" for="l0">End Date:</label>
													</div>
													<div class="col-md-7">
														<input type="text"
															class="form-control datepicker-only-init"
															placeholder="Select Date" />
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group row">
												<a class="btn btn-primary pull-right" href="#apply-activeusers" data-toggle="modal">
												Apply</a>
												</div>
											</div>

										</form>
									</div>
							</div>
							</div>
							</div>
							
								</div>
							 

								
								<div class="col-md-6 col-sm-12 col-xs-12 padding-left-10 padding-right-10">
							
							<div class="widget box-shadow widget-six">
								<div class="widget-header text-align-left ">

									<span class="margin-right-10 unique-firms">Application
										Functionality</span> 
								</div>

								
								<div class="row">
								<div class="col-md-12">
								<div class="">
								
									<?php
								
$resultData = [
    array("user"=>"Raviteja","usertype"=>"Client","website"=>"Client","help"=>"89"),
    array("user"=>"Praveen","usertype"=>"Client","website"=>"Client","help"=>"89"),
array("user"=>"Ranjith","usertype"=>"Firm","website"=>"Client","help"=>"89"),
array("user"=>"Sai","usertype"=>"Client","website"=>"Client","help"=>"89"),
array("user"=>"Deepak","usertype"=>"Firm","website"=>"Client","help"=>"89"),];

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
           ['class' => 'yii\grid\SerialColumn',
			'headerOptions' => ['class' => 'blue-grid-head'],
			],
            
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
								
								<div class="col-md-12 padding-top-10">
										<form>
											<div class="col-md-8">
												<div class="form-group row">
													<div class="col-md-5">
														<label class="form-control-label" for="l0">Start Date:</label>
													</div>
													<div class="col-md-7">
														<input type="text"
															class="form-control datepicker-only-init"
															placeholder="Select Date" />
													</div>
												</div>
											</div>
											<div class="col-md-8">
												<div class="form-group row">
													<div class="col-md-5">
														<label class="form-control-label" for="l0">End Date:</label>
													</div>
													<div class="col-md-7">
														<input type="text"
															class="form-control datepicker-only-init"
															placeholder="Select Date" />
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group row">
													<a class="btn btn-primary pull-right" href="#apply-application_funtionality" data-toggle="modal">
												Apply</a>
												</div>
											</div>

										</form>
									</div>
							</div>
							</div>
							</div>
							
								</div>
								
								<!-- <div class="col-md-4">
							
							<div class="widget box-shadow widget-six">
								<div class="widget-header text-align-left ">

									<span class="margin-right-10 unique-firms">Help Needed By User</span> 
								</div>

								
								<div class="row">
								<div class="col-md-12">
								<div class="">
								
									<?php/*
								
$resultData = [
    array("user"=>"Ravi Teja","helpcontact"=>"89","usertype"=>"Firm"),
  array("user"=>"Ravi Teja","helpcontact"=>"89","usertype"=>"Firm"),
array("user"=>"Ravi Teja","helpcontact"=>"89","usertype"=>"Firm"),
array("user"=>"Ravi Teja","helpcontact"=>"89","usertype"=>"Firm"),
array("user"=>"Ravi Teja","helpcontact"=>"89","usertype"=>"Firm"),];
/*
function filter2($item) {
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
*/
/*$filteredresultData = array_filter($resultData, 'filter');


$mailfilter = Yii::$app->request->getQueryParam('user', '');
$namefilter = Yii::$app->request->getQueryParam('helpcontact', '');
$statusfilter = Yii::$app->request->getQueryParam('usertype', '');
$searchModel = ['user' => $mailfilter, 'helpcontact' => $namefilter,'usertype'=>$statusfilter];

$dataProvider = new ArrayDataProvider([
        
        'allModels' => $filteredresultData,
        'sort' => [
            'attributes' => [ 'user', 'helpcontact','usertype'],
        ],
]);

$gridColumns = [
            ['class' => 'yii\grid\SerialColumn'],
            

            [
            'attribute' => 'user', 
'headerOptions' => ['class' => 'blue-grid-head'],
			 'filter' => '<input class="form-control" name="user" value="'. $searchModel['user'] .'" type="text">',
            'value' => 'user',
'label' => 'User Name',
            ],
            [
            "attribute" => "helpcontact",
'headerOptions' => ['class' => 'blue-grid-head'],
            'filter' => '<input class="form-control" name="helpcontact" value="'. $searchModel['helpcontact'] .'" type="text">',
            'value' => 'helpcontact',
'label' => '# of times "Help" or "contact"',
            ],
			
			[
            "attribute" => "usertype",
'headerOptions' => ['class' => 'blue-grid-head'],
            'filter' => '<input class="form-control" name="usertype" value="'. $searchModel['usertype'] .'" type="text">',
            'value' => 'usertype',
'label' => 'User Type',
            ]
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
		/*'toolbar' =>  [
		/*
		 '{export}',
'{toggleData}'*/
	/*	],
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
															
											*/				
															?>

								</div>
								
								<div class="col-md-12 padding-top-10">
										<form>
											<div class="col-md-8">
												<div class="form-group row">
													<div class="col-md-5">
														<label class="form-control-label" for="l0">Start Date:</label>
													</div>
													<div class="col-md-7">
														<input type="text"
															class="form-control datepicker-only-init"
															placeholder="Select Date" />
													</div>
												</div>
											</div>
											<div class="col-md-8">
												<div class="form-group row">
													<div class="col-md-5">
														<label class="form-control-label" for="l0">End Date:</label>
													</div>
													<div class="col-md-7">
														<input type="text"
															class="form-control datepicker-only-init"
															placeholder="Select Date" />
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group row">
													<button class="btn btn-primary pull-right" type="button">Apply</button>
												</div>
											</div>

										</form>
									</div>
							</div>
							</div>
							</div>
							
								</div>	
								-->
						

						
						 
					</div>
  
				</div>
			<!-- tab end for User Analytics-->
               <!-- tab for Firm And Client Analytics-->
			<div class="tab-pane" id="messages5" role="tabpanel">
					<div class="col-md-12 padding-10">
						<div class="col-md-12 padding-0">
            
            
           
								
				<div class="col-lg-4 padding-left-10 padding-right-10">
				
				 <div class="widget box-shadow widget-six">
								<div class="widget-header text-align-left ">

									<span class="margin-right-10 unique-firms">Largest Firms On Application</span> 
								</div>

								
								<div class="padding-10">
								<div class="">
								<div class="">
								<div>
				<label class="mt-checkbox mt-checkbox-outline">Select All
                                                            <input type="checkbox" class="firm-check-all" id="select_all">
                                                            <span></span>
                                                        </label>
				</div>
				
				<table class="table-line" style="width:100%">
				
				<thead>
				  <tr>
				<th class="text-align-center borders-right"></th>
				<th class="text-align-center tr-back-color">Firm Name</th> 
				<th class="text-align-center tr-back-color"># of Total Clients</th>
			  </tr></thead>
			  
				<tbody class="">
			<tr class="tr-back">
				<td class=" borders-right">
				<label class="mt-checkbox mt-checkbox-outline"><input type="checkbox" class="firm-checkbox" > <span></span></label>
				</td>
				<td class="td-back"><a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/user/firmuser?id=1" class="color-blue"><u>Firm1</u></td> 
				<td class="td-back">4</td>
			  </tr>
			   <tr class="tr-back">
				<td class=" borders-right"><label class="mt-checkbox mt-checkbox-outline"><input type="checkbox" class="firm-checkbox" > <span></span></label></td>
				<td class="td-back"><a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/user/firmuser?id=1" class="color-blue"><u>Firm1</u></td> 
				<td class="td-back">4</td>
			  </tr>
			  <tr class="tr-back">
				<td class=" borders-right"><label class="mt-checkbox mt-checkbox-outline"><input type="checkbox" class="firm-checkbox" > <span></span></label></td>
				<td class="td-back"><a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/user/firmuser?id=1" class="color-blue"><u>Firm1</u></td> 
				<td class="td-back">4</td>
			  </tr>
			 <tr class="tr-back">
				<td class=" borders-right"><label class="mt-checkbox mt-checkbox-outline"><input type="checkbox" class="firm-checkbox" > <span></span></label></td>
				<td class="td-back"><a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/user/firmuser?id=1" class="color-blue"><u>Firm1</u></td> 
				<td class="td-back">4</td>
			  </tr>
			 <tr class="tr-back">
				<td class=" borders-right"><label class="mt-checkbox mt-checkbox-outline"><input type="checkbox" class="firm-checkbox" > <span></span></label></td>
				<td class="td-back"><a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/user/firmuser?id=1" class="color-blue"><u>Firm1</u></td> 
				<td class="td-back">4</td>
			  </tr>
			 <tr class="tr-back">
				<td class=" borders-right"><label class="mt-checkbox mt-checkbox-outline"><input type="checkbox" class="firm-checkbox" > <span></span></label></td>
				<td class="td-back"><a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/user/firmuser?id=1" class="color-blue"><u>Firm1</u></td> 
				<td class="td-back">4</td>
			  </tr>
			  <tr class="tr-back">
				<td class=" borders-right"><label class="mt-checkbox mt-checkbox-outline"><input type="checkbox" class="firm-checkbox" > <span></span></label></td>
				<td class="td-back"><a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/user/firmuser?id=1" class="color-blue"><u>Firm1</u></td> 
				<td class="td-back">4</td>
			  </tr>
			  <tr class="tr-back">
				<td class=" borders-right"><label class="mt-checkbox mt-checkbox-outline"><input type="checkbox" class="firm-checkbox" > <span></span></label></td>
				<td class="td-back"><a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/user/firmuser?id=1" class="color-blue"><u>Firm1</u></td> 
				<td class="td-back">4</td>
			  </tr>
			  <tr class="tr-back">
				<td class=" borders-right"><label class="mt-checkbox mt-checkbox-outline"><input type="checkbox" class="firm-checkbox" > <span></span></label></td>
				<td class="td-back"><a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/user/firmuser?id=1" class="color-blue"><u>Firm1</u></td> 
				<td class="td-back">4</td>
			  </tr>
			  <tr class="tr-back">
				<td class=" borders-right"><label class="mt-checkbox mt-checkbox-outline"><input type="checkbox" class="firm-checkbox" > <span></span></label></td>
				<td class="td-back"><a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/user/firmuser?id=1" class="color-blue"><u>Firm1</u></td>  
				<td class="td-back">4</td>
			  </tr>
			  <tr class="tr-back">
				<td class=" borders-right"><label class="mt-checkbox mt-checkbox-outline"><input type="checkbox" class="firm-checkbox" > <span></span></label></td>
				<td class="td-back"><a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/user/firmuser?id=1" class="color-blue"><u>Firm1</u></td> 
				<td class="td-back">4</td>
			  </tr>
			  <tr class="tr-back">
				<td class=" borders-right"><label class="mt-checkbox mt-checkbox-outline"><input type="checkbox" class="firm-checkbox" > <span></span></label></td>
				<td class="td-back"><a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/user/firmuser?id=1" class="color-blue"><u>Firm1</u></td> 
				<td class="td-back">4</td>
			  </tr>
			   <tr class="tr-back">
				<td class=" borders-right"><label class="mt-checkbox mt-checkbox-outline"><input type="checkbox" class="firm-checkbox" > <span></span></label></td>
				<td class="td-back"><a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/user/firmuser?id=1" class="color-blue"><u>Firm1</u></td> 
				<td class="td-back">4</td>
			  </tr>
			   <tr class="tr-back">
				<td class=" borders-right"><label class="mt-checkbox mt-checkbox-outline"><input type="checkbox" class="firm-checkbox" > <span></span></label></td>
				<td class="td-back"><a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/user/firmuser?id=1" class="color-blue"><u>Firm1</u></td> 
				<td class="td-back">4</td>
			  </tr>
			<tr class="tr-back">
				<td class=" borders-right"><label class="mt-checkbox mt-checkbox-outline"><input type="checkbox" class="firm-checkbox" > <span></span></label></td>
				<td class="td-back"><a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/user/firmuser?id=1" class="color-blue"><u>Firm1</u></td> 
				<td class="td-back">4</td>
			  </tr>
			  <tr class="tr-back">
				<td class=" borders-right"><label class="mt-checkbox mt-checkbox-outline"><input type="checkbox" class="firm-checkbox" > <span></span></label></td>
				<td class="td-back"><a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/user/firmuser?id=1" class="color-blue"><u>Firm1</u></td> 
				<td class="td-back">4</td>
			  </tr>
			<tr class="tr-back">
				<td class=" borders-right"><label class="mt-checkbox mt-checkbox-outline"><input type="checkbox" class="firm-checkbox" > <span></span></label></td>
				<td class="td-back"><a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/user/firmuser?id=1" class="color-blue"><u>Firm1</u></td> 
				<td class="td-back">4</td>
			  </tr>
			  <tr class="tr-back">
				<td class=" borders-right"><label class="mt-checkbox mt-checkbox-outline"><input type="checkbox" class="firm-checkbox" > <span></span></label></td>
				<td class="td-back"><a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/user/firmuser?id=1" class="color-blue"><u>Firm1</u></td> 
				<td class="td-back">4</td>
			  </tr>
			   <tr class="tr-back">
				<td class=" borders-right"><label class="mt-checkbox mt-checkbox-outline"><input type="checkbox" class="firm-checkbox" > <span></span></label></td>
				<td class="td-back"><a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/user/firmuser?id=1" class="color-blue"><u>Firm1</u></td> 
				<td class="td-back">4</td>
			  </tr>
			   <tr class="tr-back">
				<td class=" borders-right"><label class="mt-checkbox mt-checkbox-outline"><input type="checkbox" class="firm-checkbox" > <span></span></label></td>
				<td class="td-back"><a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/user/firmuser?id=1" class="color-blue"><u>Firm1</u></td> 
				<td class="td-back">4</td>
			  </tr>
			  <tr class="tr-back">
				<td class=" borders-right"><label class="mt-checkbox mt-checkbox-outline"><input type="checkbox" class="firm-checkbox" > <span></span></label></td>
				<td class="td-back"><a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/user/firmuser?id=1" class="color-blue"><u>Firm1</u></td> 
				<td class="td-back">4</td>
			  </tr>
			  <tr class="tr-back">
				<td class=" borders-right"><label class="mt-checkbox mt-checkbox-outline"><input type="checkbox" class="firm-checkbox" > <span></span></label></td>
				<td class="td-back"><a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/user/firmuser?id=1" class="color-blue"><u>Firm1</u></td> 
				<td class="td-back">4</td>
			  </tr>
			  <tr class="tr-back">
				<td class=" borders-right"><label class="mt-checkbox mt-checkbox-outline"><input type="checkbox" class="firm-checkbox" > <span></span></label></td>
				<td class="td-back"><a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/user/firmuser?id=1" class="color-blue"><u>Firm1</u></td> 
				<td class="td-back">4</td>
			  </tr>
			   <tr class="tr-back">
				<td class=" borders-right"><label class="mt-checkbox mt-checkbox-outline"><input type="checkbox" class="firm-checkbox" > <span></span></label></td>
				<td class="td-back"><a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/user/firmuser?id=1" class="color-blue"><u>Firm1</u></td> 
				<td class="td-back">4</td>
			  </tr>
			   <tr class="tr-back">
				<td class=" borders-right"><label class="mt-checkbox mt-checkbox-outline"><input type="checkbox" class="firm-checkbox" > <span></span></label></td>
				<td class="td-back"><a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/user/firmuser?id=1" class="color-blue"><u>Firm1</u></td> 
				<td class="td-back">4</td>
			  </tr>
			  <tr class="tr-back">
				<td class=" borders-right"><label class="mt-checkbox mt-checkbox-outline"><input type="checkbox" class="firm-checkbox" > <span></span></label></td>
				<td class="td-back"><a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/user/firmuser?id=1" class="color-blue"><u>Firm1</u></td> 
				<td class="td-back">4</td>
			  </tr>
			   <tr class="tr-back">
				<td class=" borders-right"><label class="mt-checkbox mt-checkbox-outline"><input type="checkbox" class="firm-checkbox" > <span></span></label></td>
				<td class="td-back"><a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/user/firmuser?id=1" class="color-blue"><u>Firm1</u></td> 
				<td class="td-back">4</td>
			  </tr>
			   <tr class="tr-back">
				<td class=" borders-right"><label class="mt-checkbox mt-checkbox-outline"><input type="checkbox" class="firm-checkbox" > <span></span></label></td>
				<td class="td-back"><a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/user/firmuser?id=1" class="color-blue"><u>Firm1</u></td> 
				<td class="td-back">4</td>
			  </tr>
			  <tr class="tr-back">
				<td class=" borders-right"><label class="mt-checkbox mt-checkbox-outline"><input type="checkbox" class="firm-checkbox" > <span></span></label></td>
				<td class="td-back"><a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/user/firmuser?id=1" class="color-blue"><u>Firm1</u></td> 
				<td class="td-back">4</td>
			  </tr>
			    <tr class="tr-back">
				<td class=" borders-right"><label class="mt-checkbox mt-checkbox-outline"><input type="checkbox" class="firm-checkbox" > <span></span></label></td>
				<td class="td-back"><a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/user/firmuser?id=1" class="color-blue"><u>Firm1</u></td> 
				<td class="td-back">4</td>
			  </tr>
			   <tr class="tr-back">
				<td class=" borders-right"><label class="mt-checkbox mt-checkbox-outline"><input type="checkbox" class="firm-checkbox" > <span></span></label></td>
				<td class="td-back"><a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/user/firmuser?id=1" class="color-blue"><u>Firm1</u></td> 
				<td class="td-back">4</td>
			  </tr>
			  <tr class="tr-back">
				<td class=" borders-right"><label class="mt-checkbox mt-checkbox-outline"><input type="checkbox" class="firm-checkbox" > <span></span></label></td>
				<td class="td-back"><a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/user/firmuser?id=1" class="color-blue"><u>Firm1</u></td> 
				<td class="td-back">4</td>
			  </tr>
			   <tr class="tr-back">
				<td class=" borders-right"><label class="mt-checkbox mt-checkbox-outline"><input type="checkbox" class="firm-checkbox" > <span></span></label></td>
				<td class="td-back"><a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/user/firmuser?id=1" class="color-blue"><u>Firm1</u></td> 
				<td class="td-back">4</td>
			  </tr>
			  
			  </tbody>
			</table>
			
								</div>
								</div>
								</div>
								</div>
			<!-- <div class="col-md-12 back-white border-radius-8 border-1 padding-10">
			<div class="font-21 text-align-center padding-bottom-10">Largest Firms On Application</div>
				<div>
				<label class="mt-checkbox mt-checkbox-outline">Select All
                                                            <input type="checkbox" class="firm-check-all" id="select_all">
                                                            <span></span>
                                                        </label>
				</div>
				
			
			</div>-->
				</div>
				<div class="col-lg-8 padding-left-10 padding-right-10">
					<div class="col-lg-12  padding-0">
					
					<div class="widget box-shadow widget-six">
								<div class="widget-header text-align-left">

									<span class="margin-right-10 unique-firms">Client Break Down
										</span> <a data-toggle="modal" data-target="#chart-modal-clientbreakdown" class="chart-modal pull-right"> <img
										src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/images/logo/maximize_icon.png">
									</a>
								</div>

								<br />
								<div class="margin-bottom-50">
									<div id="client_break_down"
										style="min-width: 300px; height: 250px; margin: 0 auto"></div>

								</div>
							</div> 
					</div>

					<div class="col-lg-12  padding-0">
						<div class="widget box-shadow widget-six">
							<div class="widget-header text-align-left">

								<span class="margin-right-10 unique-firms">Plan Renewals</span>		
								
								<a data-toggle="modal" data-target="#chart-modal-planrenewal" class="chart-modal pull-right"> <img
										src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/images/logo/maximize_icon.png">
									</a>						
							</div>

							<br />
							<div class="margin-bottom-50">
								<div id="plan_renewal_month" style="min-width: 300px; height: 200px; margin: 0 auto"></div>
							  
							</div>
						</div>
					</div>
				</div>
				</div>
					</div>
				</div>
<!-- tab end for Firm And Client Analytics-->
			</div>

		</div>

	</div>

 
</section>





<script type="text/javascript"
	src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/design/admin/dashboard.js"></script>


 
<!-- modal for -uniquefirms -->
<div class="modal fade" id="chart-modal-uniquefirms" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header modal-header-color">
       <button type="button" class="close-modal modal-opacity close-modal-blue" data-dismiss="modal" aria-hidden="true">
								X
							</button>
        <h4 class="modal-title color-white" id="myModalLabel">Unique Firms On the System</h4>
      </div>
      <div class="modal-body">
        <div class="panel panel-default">
          <div class="panel-body">
            <div id="modal_uniquefirms"></div>
          </div>
        </div>
      </div>
     
    </div>
  </div>
</div>
<!--end modal for -uniquefirms -->

<!-- modal for -userlogins -->
<div class="modal fade" id="chart-modal-userlogins" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header modal-header-color">
       <button type="button" class="close-modal modal-opacity close-modal-blue" data-dismiss="modal" aria-hidden="true">
								X
							</button>
        <h4 class="modal-title color-white" id="myModalLabel">User Logins</h4>
      </div>
      <div class="modal-body">
        <div class="panel panel-default">
          <div class="panel-body">
            <div id="modal_userlogins"></div>
          </div>
        </div>
      </div>
     
    </div>
  </div>
</div>
<!--end modal for -userlogins -->

<!-- modal for -earningdetails -->
<div class="modal fade" id="chart-modal-earningdetails" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header modal-header-color">
      <button type="button" class="close-modal modal-opacity close-modal-blue" data-dismiss="modal" aria-hidden="true">
								X
							</button>
        <h4 class="modal-title color-white" id="myModalLabel">Earning Details</h4>
      </div>
      <div class="modal-body">
        <div class="panel panel-default">
          <div class="panel-body">
            <div id="modal_earningdetails"></div>
          </div>
        </div>
      </div>
     
    </div>
  </div>
</div>
<!-- end modal for -earningdetails -->

<!-- modal for -modulesubscription -->
<div class="modal fade" id="chart-modal-modulesubscription" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header modal-header-color">
      <button type="button" class="close-modal modal-opacity close-modal-blue" data-dismiss="modal" aria-hidden="true">
								X
							</button>
        <h4 class="modal-title color-white" id="myModalLabel">Companies and Module subscription</h4>
      </div>
      <div class="modal-body">
        <div class="panel panel-default">
          <div class="panel-body">
            <div id="modal_modulesubscription"></div>
          </div>
        </div>
      </div>
     
    </div>
  </div>
</div>
<!-- end modal for -modulesubscription -->

<!-- modal for -plans -->
<div class="modal fade" id="chart-modal-plans" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header modal-header-color">
    <button type="button" class="close-modal modal-opacity close-modal-blue" data-dismiss="modal" aria-hidden="true">
								X
							</button>
        <h4 class="modal-title color-white" id="myModalLabel">Plans On System by Month</h4>
      </div>
      <div class="modal-body">
        <div class="panel panel-default">
          <div class="panel-body">
            <div id="modal_plans"></div>
          </div>
        </div>
      </div>
    
    </div>
  </div>
</div>
<!-- end modal for plans -->

<!-- modal for -clientbreakdown -->
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
<!-- end modal for -clientbreakdown -->

<!--  modal for -planrenewal -->
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
<!-- end modal for -planrenewal -->

<!-- modal for apply-activeusers -->
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
<!-- end modal for apply-activeusers -->

<!-- modal for apply-application_funtionality -->
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
<!-- end modal for apply-application_funtionality -->