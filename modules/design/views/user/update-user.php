

	<div class="col-md-12 ">

		<!-- clients -->
		<div class="row dashboard-container">

			<div class="col-md-12 col-xs-12 header-main">
				<div class="col-md-12 col-xs-12">
					<span class="font-18">Update user</span> <span
						style="font-size: 22px;" class="pull-right"></span>

				</div>

			</div>
		</div>
		
		
		 <?= $this->render('_form',['admin_user_id'=>$admin_user_id,
		'firm_user_id'=>$firm_user_id,
		'client_user_id'=>$client_user_id,
		'usertype'=>$usertype])?>

	</div>
	
	
	
		
