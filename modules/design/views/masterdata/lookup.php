 

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
					<span class="">Master Data &#62; Lookup Options </span>

				</div>

			</div>
				</div>
			
			
			<div class="container">
			<div class="page-content col-md-12">
		
			<div class="col-md-12 pull-left border-ddd widget padding-15 width-100">
			
				 <div class="form-group" align="right"> 
									<a class="btn  btn-modal-blue" href="#add_lookup_options" data-toggle="modal">Add</a>
									</div>
			<!--<div class="col-md-12 profile-pic-background padding-6">
					 
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
				  
			</div>-->
			
			<div class="">
			<?php
								
$resultData = [
array( "module"=>"Module","option"=>"Plan Claims Reporting","status"=>"Active" ),
array( "module"=>"Module","option"=>"Population Health Management","status"=>"Active" ),
array( "module"=>"Module","option"=>"Stewardship Reporting","status"=>"Active" ),
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

 
$module  = Yii::$app->request->getQueryParam('module', '');
$option = Yii::$app->request->getQueryParam('option', '');
$status = Yii::$app->request->getQueryParam('status', '');
 
 

$searchModel = [  'module' => $module,'option'=>$option ,'status'=>$status];

$dataProvider = new ArrayDataProvider([
        
        'allModels' => $filteredresultData,
        'sort' => [
            'attributes' => [ 'module','option'
			 ],
        ],
		'pagination' => [
        'pageSize' => 10,
    ],
]);

$gridColumns = [
           // ['class' => 'yii\grid\SerialColumn'],
            
 
            [
            'attribute' => 'module', 
'headerOptions' => ['class' => 'blue-grid-head'],
			 'filter' => '<input class="form-control" name="website" value="'. $searchModel['module'] .'" type="text">',
			 'format'=>'raw',
            	'value' => function ($model, $key, $index, $widget) {
					 $client_no = '<a  href="#update_lookup_options" data-toggle="modal" class="color-blue"><u>'.$model['module'].'</u></a>';									 
				 return $client_no;
					},
'label' => 'Lookup Name',
            ],
			 [
            'attribute' => 'option', 
'headerOptions' => ['class' => 'blue-grid-head'],
			 'filter' => '<input class="form-control" name="website" value="'. $searchModel['option'] .'" type="text">',
            'value' => 'option',
'label' => 'Lookup Options',
            ],
			  [
            'attribute' => 'status', 
'headerOptions' => ['class' => 'blue-grid-head'],
			 'filter' => '<input class="form-control" name="website" value="'. $searchModel['status'] .'" type="text">',
			 'format'=>'raw',
           'value' => function ($model, $key, $index, $widget) {
					 $status = '<a data-toggle="modal" class="color-blue"><u>'.$model['status'].'</u></a>';									 
				 return $status;
					},
'label' => 'Status',
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
