<?php
use kartik\grid\GridView;
use yii\helpers\Url;
use app\components\EncryptDecryptComponent;
?>
<div class="width-100 margin-bottom-10" align="right">
	<a class="btn btn-modal-lightblue btn-sm add-view-payment-history"
		tabindex="1"  data-toggle="tooltip" data-placement="bottom"  title="Add Payment"
		data-href="<?php echo Yii::$app->getUrlManager()->getBaseUrl();  ?>/masterdata/paymenthistorydetails?subscription_id=<?php echo $encrypt_subscription_id?>&payment_id=">Add</a>
</div>



<?php

$historygridColumns = [ 
		
		[ 
				'attribute' => 'invoice_no',
				'headerOptions' => [ 
						'class' => 'blue-grid-head' 
				],
				'value' => 'invoice_no',
				'label' => 'Invoice No.' 
		],
		[ 
				'attribute' => 'invoice_date',
				'headerOptions' => [ 
						'class' => 'blue-grid-head' 
				],
				'value' => 'invoice_date',
				'label' => 'Invoice Date' 
		],
		[ 
				// 'attribute' => 'billing_contact',
				'headerOptions' => [ 
						'class' => 'blue-grid-head' 
				],
				 'value' =>  function ($model, $key, $index, $widget) {
				 
				 if($model->subscription->client->bill_to == 'firm'){
				 	
				 $client_id = 'firm';
				 
				 }else if($model->subscription->client->bill_to == 'client')
				 {
				 	$client_id = $model->billingcontactclient;
				 }
				 	
				 
				 return $client_id;
				},
				'label' => 'Billing Contact' 
		],
		[ 
				'attribute' => 'payment_due_date',
				'headerOptions' => [ 
						'class' => 'blue-grid-head' 
				],
				'value' => 'payment_due_date',
				'label' => 'Payment Due Date' 
		],
		[ 
				'attribute' => 'payment_date',
				'headerOptions' => [ 
						'class' => 'blue-grid-head' 
				],
				'value' => 'payment_date',
				'label' => 'Payment Date' 
		],
		[ 
				'attribute' => 'amount',
				'headerOptions' => [ 
						'class' => 'blue-grid-head' 
				],
				'value' => 'amount',
				'label' => 'Amount',
				'value' => function ($model, $key, $index) {
					return Yii::$app->formatter->asCurrency($model->amount,'$');
				},
		],
		[ 
				'attribute' => 'notes',
				'headerOptions' => [ 
						'class' => 'blue-grid-head' 
				],
				'value' => 'notes',
				'label' => 'Notes',
				 
		],
		[ 
				
				'attribute' => 'actions',
				'attribute' => 'Actions',
				
				'width' => '100px',
				'format' => 'raw',
				'hAlign' => GridView::ALIGN_CENTER,
				'headerOptions' => [ 
						'class' => 'blue-grid-head' 
				],
				'value' => function ($model, $key, $index, $widget) {
				
						$link = '<div class="col-md-12"><a  data-toggle="tooltip" data-placement="bottom"  title="Update Payment" class="add-view-payment-history" tabindex="1" data-href="paymenthistorydetails?subscription_id='.EncryptDecryptComponent::encrytedUser ( $model->subscription_id ).'&payment_id='.EncryptDecryptComponent::encrytedUser ( $model->payment_id ).'"><i class="fa fa-pencil"></i></a></div>';
					return $link;
				},
				'vAlign' => 'middle' 
		] 
]
;

echo GridView::widget ( [ 
		'dataProvider' => $dataProvider,
		// 'filterModel' => $searchModel,
		'columns' => $historygridColumns,
		'id' => 'payment-history-grid',
		'containerOptions' => [ 
				'style' => 'overflow: auto' 
		],
		// only set when $responsive = false
		// only set when $responsive = false
		'rowOptions' => function ($model, $index, $widget, $grid) {
			return [ 
					'style' => 'text-align:center;' 
			];
		},
		'toolbar' => [ ],
		'pjax' => true,
		'pjaxSettings' => [ 
				'timeout' => 3000,
				'filterUrl' => Url::to ( [ 
						"masterdata/paymenthistory" 
				] ),
				'options' => [ 
						'id' => 'payment-history-grid-pjax',
						'enablePushState' => false 
				] 
		],
		'bordered' => true,
		'striped' => true,
		'condensed' => false,
		'responsive' => true,
		'hover' => true,
		
		// 'floatHeader' => true,
		// 'floatHeaderOptions' => ['scrollingTop' => true],
		'showPageSummary' => false,
		'panel' => [ 
				'heading' => false,
				'type' => GridView::TYPE_PRIMARY,
				'footer' => false 
		] 
] );
?>
                         
<?php 
$this->registerJs(
		"
		$(\"[data-toggle=tooltip]\").tooltip();
		$(\"[data-toggle=popover-hover]\").popover({ trigger: \"manual\" , html: true, animation:false,

   });");						
