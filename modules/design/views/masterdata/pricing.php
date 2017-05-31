 


<?php
use yii\data\ArrayDataProvider;
use kartik\grid\GridView; 
use yii\helpers\Html;
?>

	<div class="col-md-12">

		<!-- clients -->
		<div class="row dashboard-container">

					<div class="blue-breadcrumb col-md-12 padding-0">
				<a class="breadcrumb-back-btn" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl().Yii::$app->params['dashboard_url']; ?>">
				<i class="fa fa-angle-left" aria-hidden="true"></i>
				</a>
				<div class="breadcrumb-description">
					<span class="">Master Data &#62; System Pricing </span>

				</div>

			</div>
				</div>
			
			
			<div class="container">
			<div class="page-content col-md-12">
		
			<div class="col-md-12 pull-left border-ddd widget padding-15 width-100">
			<div class="col-md-12 profile-pic-background padding-6">
					 
					<div class="col-md-3">
						   <div class="">
                                <div class="form-group ">
                                    <label class="form-control-label color-white" for="l0">Select a Module :</label>
                                
							<select class="form-control">
								  <option selected="" value="Plan Claims Reporting">Plan Claims Reporting</option>
						      
								</select>
                                </div>
                            </div>
						 </div>
				 
						 
					<!--	 <div class="col-md-3 margin-top-30">
						 <div class="form-group ">
                                    <label class="form-control-label color-white" for="l0"></label>
									<a class="btn  btn-modal-blue" >Go</a>
									</div>
						 </div>-->
			
			</div>
			
			<div class="">
			<?php
								
$resultData = [
array( "client"=>"1","basic"=>"$149","fullservice"=>"$299","bulk"=>"$499"),
array( "client"=>"2","basic"=>"$149","fullservice"=>"$299","bulk"=>"$99"),
array( "client"=>"3","basic"=>"$149","fullservice"=>"$299","bulk"=>"$99"),
array( "client"=>"4","basic"=>"$149","fullservice"=>"$299","bulk"=>"$99"),
array( "client"=>"5","basic"=>"$149","fullservice"=>"$299","bulk"=>"$99"),
];
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

 
$client  = Yii::$app->request->getQueryParam('client', '');
$basic = Yii::$app->request->getQueryParam('basic', '');
$fullservice = Yii::$app->request->getQueryParam('fullservice', '');
$bulk = Yii::$app->request->getQueryParam('bulk', '');
 

$searchModel = [  'client' => $client,'basic'=>$basic
,'fullservice'=>$fullservice
,'bulk'=>$bulk];

$dataProvider = new ArrayDataProvider([
        
        'allModels' => $filteredresultData,
        'sort' => [
            'attributes' => [ 'client','basic'
			,'fullservice'
			,'bulk'],
        ],
		'pagination' => [
        'pageSize' => 10,
    ],
]);

$gridColumns = [
           // ['class' => 'yii\grid\SerialColumn'],
            
 
            [
            'attribute' => 'client', 
'headerOptions' => ['class' => 'blue-grid-head'],
			 'filter' => '<input class="form-control" name="website" value="'. $searchModel['client'] .'" type="text">',
			 'format'=>'raw',
            	'value' => function ($model, $key, $index, $widget) {
					 $client_no = '<a  href="#update_pricing_details" data-toggle="modal" class="color-blue"><u>'.$model['client'].'</u></a>';									 
				 return $client_no;
					},
'label' => 'Client #',
            ],
			 [
            'attribute' => 'basic', 
'headerOptions' => ['class' => 'blue-grid-head'],
			 'filter' => '<input class="form-control" name="website" value="'. $searchModel['basic'] .'" type="text">',
            'value' => 'basic',
'label' => 'Basic',
            ],
			 [
            'attribute' => 'fullservice', 
'headerOptions' => ['class' => 'blue-grid-head'],
			 'filter' => '<input class="form-control" name="website" value="'. $searchModel['fullservice'] .'" type="text">',
            'value' => 'fullservice',
'label' => 'Full Service',
            ],
			 [
            'attribute' => 'bulk', 
'headerOptions' => ['class' => 'blue-grid-head'],
			 'filter' => '<input class="form-control" name="website" value="'. $searchModel['bulk'] .'" type="text">',
            'value' => 'bulk',
'label' => 'Bulk',
            ],
			
		
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
	</div>
