<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use kartik\alert\Alert;
?>
<div class="page-content-inner ">

	<!-- clients -->
	<div class="dashboard-container">

		<div class="blue-breadcrumb col-md-12 padding-0">
			<a class="breadcrumb-back-btn"
				href="<?php echo Yii::$app->getUrlManager()->getBaseUrl().Yii::$app->params['dashboard_url']; ?>">
				<i class="fa fa-angle-left" aria-hidden="true"></i>
			</a>
			<div class="breadcrumb-description">
				<span class="">Profile</span>

			</div>

		</div>

		<div class="container">
			<div class="page-content col-md-12">

				<div class="col-md-12  padding-0 alert-div">
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

		<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
			<div class="col-md-12 border-ddd widget padding-15">

					<div class="col-md-12 padding-15 profile-pic-background">
						<div class="col-md-4 col-md-offset-4" align="center">

							<div class="profile-pic-box">
								<div class="col-xs-2" align="center">

									<!--	<a class="fa fa-trash-o font-20 profile-photo-icon"></a>-->
								</div>

								<div class="col-xs-8" align="center">
									<div class="profile-avatar">
										<img src="<?php 
										if(!empty($userdetailModel->profile_pic)){
											if($usertype == 1)
											{
											echo \Yii::$app->urlManager->createAbsoluteUrl ( '/images/admin_user' ).'/'.$userdetailModel->profile_pic;
											}
											else if($usertype == 2)
											{
											echo \Yii::$app->urlManager->createAbsoluteUrl ( '/images/firm_user' ).'/'.$userdetailModel->profile_pic;
											}
											else if($usertype == 3)
											{
											echo \Yii::$app->urlManager->createAbsoluteUrl ( '/images/client_user' ).'/'.$userdetailModel->profile_pic;
											}
											
											
										}else
										{
										echo \Yii::$app->urlManager->createAbsoluteUrl ( '/images/defaultuserimg.png' );	
										}
										?>"

										>
									</div>
								</div>

								<div class="col-xs-2" align="center">
									<!--<a class="fa fa-picture-o  font-14 profile-photo-icon"></a>-->
								</div>
							</div>


						</div>


					</div>

					<div class="">



						<div class="col-md-12 padding-0 margin-top-10">
							<div class="col-md-6">
								<div class="">
                                 <?= $form->field($userdetailModel, 'first_name')->textInput(['maxlength' => 15, 'class' => 'form-control'])->label('First Name',['class'=>'form-control-label']); ?>
                            </div>
							</div>
							<div class="col-md-6">
								<div class="">
                               <?= $form->field($userdetailModel, 'last_name')->textInput(['maxlength' => 15, 'class' => 'form-control'])->label('Last Name',['class'=>'form-control-label']); ?>
                            </div>
							</div>
						</div>

						<div class="col-md-12 padding-0">

							<div class="col-md-6">
												<div class="form-group field-user-username required ">
												<label class="form-control-label" for="user-username">Email ID</label>
													<div class="form-control" disabled><?php echo $user_parent->username ;?> </div>
												</div>
							
							
							</div>
							<div class="col-md-6 ">
								<div class="">

									<div class="col-md-12 padding-0">
										<div class="col-md-9 padding-0">
												 <?= $form->field($userdetailModel, 'phone')->textInput(['class' => 'form-control us-phone-mask-input'])->label('Phone',['class'=>'form-control-label']); ?>
											</div>
										<div class="col-md-3 padding-right-0">
												<?= $form->field($userdetailModel, 'extension')->textInput(['class' => 'form-control numbers','maxlength'=>'5'])->label('Extension',['class'=>'form-control-label']); ?>
											</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12 padding-0">

							<div class="col-md-6">

								<div class="">
                                <?= $form->field($userdetailModel, 'mobile')->textInput(['class' => 'form-control us-phone-mask-input'])->label('Mobile #',['class'=>'form-control-label']); ?>
                            </div>
							</div>

							<div class="col-md-6">

								<div class="">
                                <?= $form->field($userdetailModel, 'profile_pic')->fileInput(['class' => 'form-control'])->label('Profile Image',['class'=>'form-control-label']); ?>
                            </div>
							</div>

						</div>






					</div>

					<div class="col-md-12 padding-0 bg-sky-blue border-ddd"
						align="right" style="border-top: none;">

						<div class="modal-footer-btn padding-15">
								
									<?= Html::submitButton('Save', ['class' => 'btn btn-primary'])?>
								 <a
								href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/design/search"
								class="btn btn-default"> Cancel </a>


						</div>
					</div>
				</div>
				<?php ActiveForm::end(); ?>
			</div>
		</div>
	</div>



</div>