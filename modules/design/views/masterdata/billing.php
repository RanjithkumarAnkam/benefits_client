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
					<span class="">Master Data &#62; System Billing </span>

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
					<div class="col-md-3">
						   <div class="">
                                <div class="form-group ">
                                    <label class="form-control-label color-white" for="l0">Select a Year :</label>
                                
								<select class="form-control" id="year_value" onchange="yearFunction();">
								<option value="2015">2015</option>
								<option value="2016">2016</option>
								<option value="2017">2017</option>
								</select>
                                </div>
                            </div>
						 </div>
					<div class="col-md-3">
						   <div class="">
                                <div class="form-group ">
                                    <label class="form-control-label color-white" for="l0">Select a Month :</label>
                                
								<select class="form-control" id="month_value">
								<option>January</option>
								<option>Febraury</option>
								<option>March</option>
								<option>April</option>
								<option>May</option>
								<option>June</option>
								<option>July</option>
								<option>August</option>
								<option>September</option>
								<option>October</option>
								<option>November</option>
								<option>December</option>
								</select>
                                </div>
                            </div>
						 </div>
						 
						 <div class="col-md-3 margin-top-30">
						 <div class="form-group ">
                                    <label class="form-control-label color-white" for="l0"></label>
									<a class="btn  btn-modal-blue" >Go</a>
									</div>
						 </div>
			
			</div>
			
			<div class="col-md-12 padding-0">
			<?php
								
$resultData = [
array("firm"=>"F788","firmname"=>"Firm 1","client"=>"12345","clientname"=>"Client 1","billto"=>"Firm","module"=>"Plain Claim Reporting","packagedescription"=>"Package 1","annualcharge"=>"3000","monthlycharge"=>"250","billingcompanyname"=>"etc","billingcontact"=>"etc","billingaddress"=>"etc"),
array("firm"=>"F789","firmname"=>"Firm 2","client"=>"12345","clientname"=>"Client 1","billto"=>"Firm","module"=>"Plain Claim Reporting","packagedescription"=>"Package 1","annualcharge"=>"3000","monthlycharge"=>"250","billingcompanyname"=>"etc","billingcontact"=>"etc","billingaddress"=>"etc"),
array("firm"=>"F790","firmname"=>"Firm 3","client"=>"12345","clientname"=>"Client 1","billto"=>"Firm","module"=>"Plain Claim Reporting","packagedescription"=>"Package 1","annualcharge"=>"3000","monthlycharge"=>"250","billingcompanyname"=>"etc","billingcontact"=>"etc","billingaddress"=>"etc"),
array("firm"=>"F791","firmname"=>"Firm 4","client"=>"12345","clientname"=>"Client 1","billto"=>"Firm","module"=>"Plain Claim Reporting","packagedescription"=>"Package 1","annualcharge"=>"3000","monthlycharge"=>"250","billingcompanyname"=>"etc","billingcontact"=>"etc","billingaddress"=>"etc"),
array("firm"=>"F732","firmname"=>"Firm 5","client"=>"12345","clientname"=>"Client 1","billto"=>"Firm","module"=>"Plain Claim Reporting","packagedescription"=>"Package 1","annualcharge"=>"3000","monthlycharge"=>"250","billingcompanyname"=>"etc","billingcontact"=>"etc","billingaddress"=>"etc"),
array("firm"=>"F784","firmname"=>"Firm 6","client"=>"12345","clientname"=>"Client 1","billto"=>"Firm","module"=>"Plain Claim Reporting","packagedescription"=>"Package 1","annualcharge"=>"3000","monthlycharge"=>"250","billingcompanyname"=>"etc","billingcontact"=>"etc","billingaddress"=>"etc"),
array("firm"=>"F778","firmname"=>"Firm 1","client"=>"12345","clientname"=>"Client 1","billto"=>"Firm","module"=>"Plain Claim Reporting","packagedescription"=>"Package 1","annualcharge"=>"3000","monthlycharge"=>"250","billingcompanyname"=>"etc","billingcontact"=>"etc","billingaddress"=>"etc"),
array("firm"=>"F758","firmname"=>"Firm 1","client"=>"12345","clientname"=>"Client 1","billto"=>"Firm","module"=>"Plain Claim Reporting","packagedescription"=>"Package 1","annualcharge"=>"3000","monthlycharge"=>"250","billingcompanyname"=>"etc","billingcontact"=>"etc","billingaddress"=>"etc"),
array("firm"=>"F748","firmname"=>"Firm 1","client"=>"12345","clientname"=>"Client 1","billto"=>"Firm","module"=>"Plain Claim Reporting","packagedescription"=>"Package 1","annualcharge"=>"3000","monthlycharge"=>"250","billingcompanyname"=>"etc","billingcontact"=>"etc","billingaddress"=>"etc"),
array("firm"=>"F738","firmname"=>"Firm 1","client"=>"12345","clientname"=>"Client 1","billto"=>"Firm","module"=>"Plain Claim Reporting","packagedescription"=>"Package 1","annualcharge"=>"3000","monthlycharge"=>"250","billingcompanyname"=>"etc","billingcontact"=>"etc","billingaddress"=>"etc"),
array("firm"=>"F728","firmname"=>"Firm 1","client"=>"12345","clientname"=>"Client 1","billto"=>"Firm","module"=>"Plain Claim Reporting","packagedescription"=>"Package 1","annualcharge"=>"3000","monthlycharge"=>"250","billingcompanyname"=>"etc","billingcontact"=>"etc","billingaddress"=>"etc"),
array("firm"=>"F718","firmname"=>"Firm 1","client"=>"12345","clientname"=>"Client 1","billto"=>"Firm","module"=>"Plain Claim Reporting","packagedescription"=>"Package 1","annualcharge"=>"3000","monthlycharge"=>"250","billingcompanyname"=>"etc","billingcontact"=>"etc","billingaddress"=>"etc"),
array("firm"=>"F708","firmname"=>"Firm 1","client"=>"12345","clientname"=>"Client 1","billto"=>"Firm","module"=>"Plain Claim Reporting","packagedescription"=>"Package 1","annualcharge"=>"3000","monthlycharge"=>"250","billingcompanyname"=>"etc","billingcontact"=>"etc","billingaddress"=>"etc"),
  array("firm"=>"F744","firmname"=>"Firm 1","client"=>"12345","clientname"=>"Client 1","billto"=>"Firm","module"=>"Plain Claim Reporting","packagedescription"=>"Package 1","annualcharge"=>"3000","monthlycharge"=>"250","billingcompanyname"=>"etc","billingcontact"=>"etc","billingaddress"=>"etc")];
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

$firm = Yii::$app->request->getQueryParam('firm', '');
$firmname = Yii::$app->request->getQueryParam('firmname', '');
$client = Yii::$app->request->getQueryParam('client', '');
$clientname = Yii::$app->request->getQueryParam('clientname', '');
$billto = Yii::$app->request->getQueryParam('billto', '');
$module = Yii::$app->request->getQueryParam('module', '');
$packagedescription = Yii::$app->request->getQueryParam('packagedescription', '');
$annualcharge = Yii::$app->request->getQueryParam('annualcharge', '');
$monthlycharge = Yii::$app->request->getQueryParam('monthlycharge', '');
$billingcompanyname = Yii::$app->request->getQueryParam('billingcompanyname', '');
$billingcontact = Yii::$app->request->getQueryParam('billingcontact', '');
$billingaddress = Yii::$app->request->getQueryParam('billingaddress', '');

$searchModel = ['firm' =>$firm  ,'firmname' =>$firmname  ,'client' => $client, 'clientname' => $clientname,'billto'=>$billto
,'module'=>$module
,'packagedescription'=>$packagedescription
,'annualcharge'=>$annualcharge
,'monthlycharge'=>$monthlycharge
,'billingcompanyname'=>$billingcompanyname
,'billingcontact'=>$billingcontact
,'billingaddress'=>$billingaddress];

$dataProvider = new ArrayDataProvider([
        
        'allModels' => $filteredresultData,
        'sort' => [
            'attributes' => [ 'firm','firmname','client', 'clientname','billto'
			,'module'
			,'packagedescription'
			,'annualcharge'
			,'monthlycharge'
			,'billingcompanyname'
			,'billingcontact'
			,'billingaddress'],
        ],
		'pagination' => [
        'pageSize' => 10,
    ],
]);

$gridColumns = [
            ['class' => 'yii\grid\SerialColumn'],
            
[
            'attribute' => 'firm', 
			'label' => 'Firm',
'headerOptions' => ['class' => 'blue-grid-head'],
			 'filter' => '<input class="form-control" name="firm" value="'. $searchModel['firm'] .'" type="text">',
           	'value' => 'firm',
			'format'=>'raw',

            ],
			[
            "attribute" => "firmname",
'headerOptions' => ['class' => 'blue-grid-head'],
            'filter' => '<input class="form-control" name="firmname" value="'. $searchModel['firmname'] .'" type="text">',
            'value' => 'firmname',
'label' => 'Firm Name',
            ],
            [
            'attribute' => 'client', 
'headerOptions' => ['class' => 'blue-grid-head'],
			 'filter' => '<input class="form-control" name="website" value="'. $searchModel['client'] .'" type="text">',
            'value' => 'client',
'label' => 'Client',
            ],
            [
            'attribute' => 'clientname', 
'headerOptions' => ['class' => 'blue-grid-head'],
			 'filter' => '<input class="form-control" name="website" value="'. $searchModel['clientname'] .'" type="text">',
            'value' => 'clientname',
'label' => 'Client Name',
            ],
			 [
            'attribute' => 'billto', 
'headerOptions' => ['class' => 'blue-grid-head'],
			 'filter' => '<input class="form-control" name="website" value="'. $searchModel['billto'] .'" type="text">',
            'value' => 'billto',
'label' => 'Bill To',
            ],
			 [
            'attribute' => 'module', 
'headerOptions' => ['class' => 'blue-grid-head'],
			 'filter' => '<input class="form-control" name="website" value="'. $searchModel['module'] .'" type="text">',
            'value' => 'module',
'label' => 'Module',
            ],
			 [
            'attribute' => 'packagedescription', 
'headerOptions' => ['class' => 'blue-grid-head'],
			 'filter' => '<input class="form-control" name="website" value="'. $searchModel['packagedescription'] .'" type="text">',
            'value' => 'packagedescription',
'label' => 'Package Description',
            ],
			 [
            'attribute' => 'annualcharge', 
'headerOptions' => ['class' => 'blue-grid-head'],
			 'filter' => '<input class="form-control" name="website" value="'. $searchModel['annualcharge'] .'" type="text">',
            'value' => 'annualcharge',
'label' => 'Annual Charge',
            ],
			 [
            'attribute' => 'monthlycharge', 
'headerOptions' => ['class' => 'blue-grid-head'],
			 'filter' => '<input class="form-control" name="website" value="'. $searchModel['monthlycharge'] .'" type="text">',
            'value' => 'monthlycharge',
'label' => 'Monthly Charge',
            ],
			 [
            'attribute' => 'billingcompanyname', 
'headerOptions' => ['class' => 'blue-grid-head'],
			 'filter' => '<input class="form-control" name="website" value="'. $searchModel['billingcompanyname'] .'" type="text">',
            'value' => 'billingcompanyname',
'label' => 'Billing Company Name',
            ],
			 [
            'attribute' => 'billingcontact', 
'headerOptions' => ['class' => 'blue-grid-head'],
			 'filter' => '<input class="form-control" name="website" value="'. $searchModel['billingcontact'] .'" type="text">',
            'value' => 'billingcontact',
'label' => 'Billing Contact',
            ],
			 [
            'attribute' => 'billingaddress', 
'headerOptions' => ['class' => 'blue-grid-head'],
			 'filter' => '<input class="form-control" name="website" value="'. $searchModel['billingaddress'] .'" type="text">',
            'value' => 'billingaddress',
'label' => 'Billing Address',
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
		
		 '{export}',
//'{toggleData}'
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
