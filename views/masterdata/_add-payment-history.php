<?php
use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\widgets\DatePicker;

?>
<div class="modal-header modal-header-color">

	<button type="button"
		class="close-modal modal-opacity close-modal-blue client-user-modal-close"
		data-dismiss="modal" aria-hidden="true">X</button>
	<h4 class="modal-title color-white" id="myModalLabel">
	<?php if($model->isNewRecord){ ?>
	Add Payment History
	<?php }else{ ?>
	Update Payment History
	<?php }?></h4>
</div>
<?php $form = ActiveForm::begin(['enableClientValidation'=>true,'action'=>Yii::$app->urlManager->createUrl("masterdata/savepaymenthistory") ,'options' => ['id' => 'form_add_payment_history']]); ?>
<div class="modal-body row">

	<input type="hidden" name="SupportVariable[subscription_id]"
		value="<?php echo $encrypt_subscription_id; ?>" /> <input
		type="hidden" name="SupportVariable[payment_id]"
		value="<?php echo $encrypt_payment_id; ?>" />



	<div class="col-md-12 padding-0">
		<div class="col-md-6">
			<label class="form-control-label">Invoice No. *</label>
			<?= $form->field($model, 'invoice_no', ['inputOptions' => ['class' => 'form-control']])->textInput(['maxlength' => true])->label(false); ?>
		</div>
		<div class="col-md-6">
			<label class="form-control-label">Invoice Date *</label>
			<?php //echo $form->field($model, 'invoice_date', ['inputOptions' => ['class' => 'form-control']])->textInput(['maxlength' => true])->label(false); ?>
		<?php
		
echo $form->field ( $model, 'invoice_date' )->widget ( DatePicker::classname (), [ 
				'options' => [ 
						'placeholder' => '' 
				],
				'pluginOptions' => [ 
						'autoclose' => true,
						'format' => 'yyyy-mm-dd' 
				] 
		] )->label ( false );
		?>
		
		</div>
	</div>

	<div class="col-md-12 padding-0">
		<div class="col-md-6">
			<label class="form-control-label">Payment Due Date *</label>
			<?php // = $form->field($model, 'payment_due_date', ['inputOptions' => ['class' => 'form-control']])->textInput(['maxlength' => true])->label(false); ?>
		<?php
		
echo $form->field ( $model, 'payment_due_date' )->widget ( DatePicker::classname (), [ 
				'options' => [ 
						'placeholder' => '' 
				],
				'pluginOptions' => [ 
						'autoclose' => true,
						'format' => 'yyyy-mm-dd' 
				] 
		] )->label ( false );
		?>
		
		</div>
		<div class="col-md-6">
			<label class="form-control-label">Payment Date </label>
			<?php //  $form->field($model, 'payment_date', ['inputOptions' => ['class' => 'form-control']])->textInput(['maxlength' => true])->label(false); ?>
		<?php
		
echo $form->field ( $model, 'payment_date' )->widget ( DatePicker::classname (), [ 
				'options' => [ 
						'placeholder' => '' 
				],
				'pluginOptions' => [ 
						'autoclose' => true,
						'format' => 'yyyy-mm-dd' 
				] 
		] )->label ( false );
		?>
		
		</div>
	</div>

	<div class="col-md-12 padding-0">
		<div class="col-md-6">
			<label class="form-control-label">Payment Amount </label>
			<?php
	if(!empty($model->amount)){
		$model->amount = Yii::$app->formatter->asCurrency($model->amount,'');
	}		
			
echo $form->field ( $model, 'amount', [ 
					'addon' => [ 
							'prepend' => [ 
									'content' => '$' 
							] 
					],'inputOptions' => ['class' => 'price form-control  '] 
			] )->textInput(['class' => 'price form-control  ','maxlength'=>'9'])->label ( false );
			?>
		</div>


		<div class="col-md-6">
			<label class="form-control-label">Notes</label>
			<?= $form->field($model, 'notes', ['inputOptions' => ['class' => 'form-control']])->textarea(['maxlength' => true])->label(false); ?>
		</div>
	</div>




</div>

<div class="modal-footer footer-background">

	<?= Html::submitButton($model->isNewRecord ? 'Save' : 'Update', ['class' => 'btn btn-primary'])?>
	<a href="#" class="btn btn-default client-user-modal-close"
		data-dismiss="modal"> Cancel </a>

</div>
<?php ActiveForm::end(); ?>
<!-- Loading GIF div starts -->
<div class="load-gif" id="loading-indicator-payment-history"
	style="display: none;">
	<div class="procressing_plz_wait">
		<img class=""
			src="<?php echo Yii::$app->getUrlManager()->getBaseUrl();  ?>/images/default.gif" />
	</div>
</div>

<!-- Loading GIF div end -->

