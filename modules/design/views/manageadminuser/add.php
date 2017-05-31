

	<div class="page-content-inner ">

		<!-- clients -->
		<div class="dashboard-container">

			<div class="blue-breadcrumb col-md-12 padding-0">
				<a class="breadcrumb-back-btn" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl().Yii::$app->params['dashboard_url']; ?>">
				<i class="fa fa-angle-left" aria-hidden="true"></i>
				</a>
				<div class="breadcrumb-description">
					<span class="">New &#62; Create Admin User</span>

				</div>

			</div>
		</div>
		
		
		 <?= $this->render('_form')?>

	</div>
	
	<script>
	$(document).ready(function(){
		$('#new_link').addClass('page-active');
	});
	</script>
	
		
