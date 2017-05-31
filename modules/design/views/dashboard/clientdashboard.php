<?php 
use yii\data\ArrayDataProvider;
use kartik\grid\GridView; 
use yii\helpers\Html;
?>
<section class="page-content padding-0">

	

	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script src="https://code.highcharts.com/modules/exporting.js"></script>

 

	<div class="page-content-inner">


		<div class="row">
			<div class="col-md-12 back-color"
				style="background: #13a9cc; padding-top: 7px; padding-left: 30px;">
				<div>
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item"><a class="nav-link link active color-white backcolor"
							href="javascript: void(0);" data-toggle="tab"
							data-target="#home5" role="tab">Trend Analysis</a>
						</li>
					
					</ul>

				</div>
			</div>

			<div class="tab-content padding-vertical-20">
				<div class="tab-pane active" id="home5" role="tabpanel">
					<div class="col-md-12 padding-top-10 padding-right-10 padding-left-10">
						
						<div class="col-md-6 col-xs-12 padding-right-10 padding-left-10">
							<div class="widget box-shadow widget-six">
								<div class="widget-header text-align-left">

									<span class="margin-right-10 unique-firms no-wrap">Trend Analysis</span> <a data-toggle="modal" data-target="#chart-modal-trendanalysis" class="chart-modal pull-right"> <img
										src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/images/logo/maximize_icon.png">
									</a>
								</div>

								<br />
								<div class="margin-bottom-20">
									<div id="trend_analysis"
										style="min-width: 300px; height: 250px; margin: 0 auto"></div>

								</div>
							</div>
						</div>
						
							<div class="col-md-6 col-xs-12 padding-right-10 padding-left-10">
							<div class="widget box-shadow widget-six">
								<div class="widget-header text-align-left">

									<span class="margin-right-10 unique-firms no-wrap">Trend Analysis</span> <a data-toggle="modal" data-target="#chart-modal-trendanalysis2" class="chart-modal pull-right"> <img
										src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/images/logo/maximize_icon.png">
									</a>
								</div>

								<br />
								<div class="margin-bottom-20">
									<div id="trend_analysis_two"
										style="min-width: 300px; height: 250px; margin: 0 auto"></div>

								</div>
							</div>
						</div>
						
					 
						
						
							<div class="col-md-12 padding-right-10 padding-left-10">
							
							<div class="widget box-shadow widget-six">
								<div class="widget-header text-align-left ">

									<span class="margin-right-10 unique-firms">Users</span> 
								</div>

								
								<div class="row">
								<div class="col-md-12 padding-15">
								<div class="">
								
									<?php
								
$resultData = [
    array("position"=>"Manager","username"=>"Ravi Teja","email"=>"ravirangu@gmail.com","phone"=>"999999999","ext"=>"040"),
   array("position"=>"Manager","username"=>"Ravi Teja","email"=>"ravirangu@gmail.com","phone"=>"999999999","ext"=>"040"),
    array("position"=>"Manager","username"=>"Ravi Teja","email"=>"ravirangu@gmail.com","phone"=>"999999999","ext"=>"040"),
	 array("position"=>"Manager","username"=>"Ravi Teja","email"=>"ravirangu@gmail.com","phone"=>"999999999","ext"=>"040"),
	  array("position"=>"Manager","username"=>"Ravi Teja","email"=>"ravirangu@gmail.com","phone"=>"999999999","ext"=>"040"),
	  ];

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
            'attributes' => ['position', 'username', 'email','phone','ext'],
        ],
]);

$gridColumns = [
            

            [
            'attribute' => 'position', 
'headerOptions' => ['class' => 'blue-grid-head'],
			 'filter' => false,
			 'value' => 'position',
            	/*'value' => function ($model, $key, $index, $widget) {
				
					 $user_name = '<a  href="#update_client_user" data-toggle="modal" class="color-blue"><u>'.$model['position'].'</u></a>';	
				 
															 
				 return $user_name;
					},*/
					'format'=>'raw',
'label' => 'Position',
            ],
            [
            "attribute" => "username",
'headerOptions' => ['class' => 'blue-grid-head'],
            'filter' => false,
            'value' => 'username',
'label' => 'User Name',
            ],
			[
            "attribute" => "email",
'headerOptions' => ['class' => 'blue-grid-head'],
            'filter' => false,
            'value' => 'email',
'label' => 'Email',
            ],
			[
            "attribute" => "phone",
'headerOptions' => ['class' => 'blue-grid-head'],
            'filter' => false,
            'value' => 'phone',
'label' => 'Phone',
            ],
			[
            "attribute" => "ext",
'headerOptions' => ['class' => 'blue-grid-head'],
            'filter' => false,
            'value' => 'ext',
'label' => 'Extn',
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
			

			</div>

		</div>

	</div>

 
</section>

 <script type="text/javascript"
	src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/design/admin/dashboard-client.js"></script>

	<div class="modal fade" id="chart-modal-trendanalysis" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header modal-header-color">
       <button type="button" class="close-modal modal-opacity close-modal-blue" data-dismiss="modal" aria-hidden="true">
								X
							</button>
        <h4 class="modal-title color-white" id="myModalLabel">Trend Analysis</h4>
      </div>
      <div class="modal-body">
        <div class="panel panel-default">
          <div class="panel-body">
            <div id="modal_trendanalysis"></div>
          </div>
        </div>
      </div>
     
    </div>
  </div>
</div>

<div class="modal fade" id="chart-modal-trendanalysis2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header modal-header-color">
       <button type="button" class="close-modal modal-opacity close-modal-blue" data-dismiss="modal" aria-hidden="true">
								X
							</button>
        <h4 class="modal-title color-white" id="myModalLabel">Trend Analysis</h4>
      </div>
      <div class="modal-body">
        <div class="panel panel-default">
          <div class="panel-body">
            <div id="modal_trendanalysis2"></div>
          </div>
        </div>
      </div>
     
    </div>
  </div>
</div>