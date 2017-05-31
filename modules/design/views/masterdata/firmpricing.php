


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
					<span class="">Master Data &#62; Firm Pricing </span>

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
                                    <label class="form-control-label color-white" for="l0">Firm Name :</label>
                                
								<input type="text" class="form-control" value="Bentles Yates"/>
                                </div>
                            </div>
						 </div>
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
				 
						 
						 <div class="col-md-3 margin-top-30">
						 <div class="form-group ">
                                    <label class="form-control-label color-white" for="l0"></label>
									<a  href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/design/user/firmuser?id=1" class="btn  btn-modal-blue" >Firm Details</a>
									</div>
						 </div>
			
			</div>
			
			<div class="">
			<?php
								
$resultData = [
array("firmclientmodule"=>"F788","systemclient"=>"Firm 1","clientname"=>"Client 1","basic"=>"$1200","fullservice"=>"$2000","bulk"=>"$3000"),
array("firmclientmodule"=>"F788","systemclient"=>"Firm 1","clientname"=>"Client 1","basic"=>"$1200","fullservice"=>"$2000","bulk"=>"$3000"),
array("firmclientmodule"=>"F788","systemclient"=>"Firm 1","clientname"=>"Client 1","basic"=>"$1200","fullservice"=>"$2000","bulk"=>"$3000"),
array("firmclientmodule"=>"F788","systemclient"=>"Firm 1","clientname"=>"Client 1","basic"=>"$1200","fullservice"=>"$2000","bulk"=>"$3000"),
array("firmclientmodule"=>"F788","systemclient"=>"Firm 1","clientname"=>"Client 1","basic"=>"$1200","fullservice"=>"$2000","bulk"=>"$3000"),
array("firmclientmodule"=>"F788","systemclient"=>"Firm 1","clientname"=>"Client 1","basic"=>"$1200","fullservice"=>"$2000","bulk"=>"$3000"),
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

$firmclientmodule = Yii::$app->request->getQueryParam('firmclientmodule', '');
$systemclient = Yii::$app->request->getQueryParam('systemclient', '');
$clientname = Yii::$app->request->getQueryParam('clientname', '');
$basic = Yii::$app->request->getQueryParam('basic', '');
$fullservice = Yii::$app->request->getQueryParam('fullservice', '');
$bulk = Yii::$app->request->getQueryParam('bulk', '');
 

$searchModel = ['firmclientmodule' =>$firmclientmodule  ,'systemclient' =>$systemclient  , 'clientname' => $clientname,'basic'=>$basic
,'fullservice'=>$fullservice
,'bulk'=>$bulk];

$dataProvider = new ArrayDataProvider([
        
        'allModels' => $filteredresultData,
        'sort' => [
            'attributes' => [ 'firmclientmodule','systemclient', 'clientname','basic'
			,'fullservice'
			,'bulk'],
        ],
		'pagination' => [
        'pageSize' => 10,
    ],
]);

$gridColumns = [
            ['class' => 'yii\grid\SerialColumn'],
            
[
            'attribute' => 'firmclientmodule', 
			'label' => 'Firm Client # for Module',
'headerOptions' => ['class' => 'blue-grid-head'],
			 'filter' => '<input class="form-control" name="firmclientmodule" value="'. $searchModel['firmclientmodule'] .'" type="text">',
			 
            	'value' => function ($model, $key, $index, $widget) {
					 $firm_name = '<a  href="#update_firm_details" data-toggle="modal" class="color-blue"><u>'.$model['firmclientmodule'].'</u></a>';									 
				 return $firm_name; 
					},
           
			'format'=>'raw',

            ],
			[
            "attribute" => "systemclient",
'headerOptions' => ['class' => 'blue-grid-head'],
            'filter' => '<input class="form-control" name="systemclient" value="'. $searchModel['systemclient'] .'" type="text">',
            'value' => 'systemclient',
'label' => 'System Client #',
            ],
           
            [
            'attribute' => 'clientname', 
'headerOptions' => ['class' => 'blue-grid-head'],
			 'filter' => '<input class="form-control" name="website" value="'. $searchModel['clientname'] .'" type="text">',
            'value' => 'clientname',
'label' => 'Client Name',
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
