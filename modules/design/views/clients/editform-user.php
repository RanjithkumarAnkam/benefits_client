

<section class="page-content padding-0">
	<div class="page-content-inner">

		<!-- clients -->
		<div class="dashboard-container">
			

			<div class="header-main" id="header">
				<span class="font-18">Edit Client Users</span>
			</div>

			 
			<div class="col-md-12">
		
		 <?= $this->render('_form-user')?>
		    
          </div>

		
	</div>
	<script>
		$(document).ready(function(){
						var html = '<span class="font-18">Update Client User</span><a href="/admin/clients/addclientuser" class="btn btn-success pull-right"> Add</a>';
		//	var button = '<div class="row margin-top-15"><a class="btn btn-success pull-right">Update</a></div>';
			var lielement = '<li class="" aria-disabled="false"><a role="menuitem">Update</a></li>';
			$('#header').html('');
			$('#header').append(html);
		//	$('.update-button').html();
			 $('#save_button').html('');
			$('.actions>ul').append(lielement);
			$('.steps >ul>li').removeClass('disabled');
			$('.steps >ul>li').addClass('done');
		});
		</script>
	</div>
</section>
