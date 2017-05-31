<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use kartik\grid\GridView;

$states = array (
		'AL' => 'Alabama',
		'AK' => 'Alaska',
		'AZ' => 'Arizona',
		'AR' => 'Arkansas',
		'CA' => 'California',
		'CO' => 'Colorado',
		'CT' => 'Connecticut',
		'DE' => 'Delaware',
		'DC' => 'District of Columbia',
		'FL' => 'Florida',
		'GA' => 'Georgia',
		'HI' => 'Hawaii',
		'ID' => 'Idaho',
		'IL' => 'Illinois',
		'IN' => 'Indiana',
		'IA' => 'Iowa',
		'KS' => 'Kansas',
		'KY' => 'Kentucky',
		'LA' => 'Louisiana',
		'ME' => 'Maine',
		'MD' => 'Maryland',
		'MA' => 'Massachusetts',
		'MI' => 'Michigan',
		'MN' => 'Minnesota',
		'MS' => 'Mississippi',
		'MO' => 'Missouri',
		'MT' => 'Montana',
		'NE' => 'Nebraska',
		'NV' => 'Nevada',
		'NH' => 'New Hampshire',
		'NJ' => 'New Jersey',
		'NM' => 'New Mexico',
		'NY' => 'New York',
		'NC' => 'North Carolina',
		'ND' => 'North Dakota',
		'OH' => 'Ohio',
		'OK' => 'Oklahoma',
		'OR' => 'Oregon',
		'PA' => 'Pennsylvania',
		'RI' => 'Rhode Island',
		'SC' => 'South Carolina',
		'SD' => 'South Dakota',
		'TN' => 'Tennessee',
		'TX' => 'Texas',
		'UT' => 'Utah',
		'VT' => 'Vermont',
		'VA' => 'Virginia',
		'WA' => 'Washington',
		'WV' => 'West Virginia',
		'WI' => 'Wisconsin',
		'WY' => 'Wyoming' 
);

?>



<section class="page-content padding-0">
	<div class="page-content-inner">

		<!-- Dashboard -->
				<div class="dashboard-container">


			<div class="blue-breadcrumb col-md-12 padding-0">
				<a class="breadcrumb-back-btn" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl().Yii::$app->params['dashboard_url']; ?>">
				<i class="fa fa-angle-left" aria-hidden="true"></i>
				</a>
				<div class="breadcrumb-description">
					<span class="">New &#62; <?php if(!empty($firm_id)){?>Update Client<?php }else{?>Create Client<?php }?></span>

				</div>

			</div>
			</div>

			<div class="container">
			<div class="page-content col-md-12">
			<div class="">
			<div class="">
			
			<div class="col-md-12 border-ddd widget padding-15">
                    <div>
                        <ul class="nav nav-tabs mb-4 blue-main-nav" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link  color-white" id="anchor-pb-1" data-target="#home5" data-toggle="tab" href="javascript: void(0);" role="tab" aria-expanded="true">Client Details</a>
                            </li>
                            <li class="nav-item cursor-nodrop">
                                <a  class="nav-link color-white pointer-disable" id="anchor-pb-5" data-target="#profile5" data-toggle="tab" href="javascript: void(0);" role="tab" aria-expanded="false">Client Users</a>
                            </li>
                          
                        </ul>
                        <div class="tab-content blue-main-nav-content ">
                            <div class="tab-pane " id="home5" role="tabcard" aria-expanded="true" style="border-top:none;">
							<div class="col-md-12 padding-15  border-ddd">
							<div class="col-md-8 padding-0">
							
							<div class="col-md-12 padding-0 margin-bottom-20">	
							<fieldset class="fieldset-box">

											<legend>Client Details</legend>	
								<div class="col-md-6">
									<div class="form-group ">
										<label class="form-control-label" for="l0">Firm Name *</label>
									
											<select
										class="form-control edited"
										id="form_control">
										<option>Select Firm</option>
										<option selected>Raviteja</option>
										<option>Praveen</option>
										<option>Firm 2</option>
										<option>Firm 3</option>
									</select> 
									</div>
									
								</div>
								<div class="col-md-6">
								
									<div class="form-group ">
										 <label class="form-control-label" for="l0">Client Name *</label>
                                   
									
										 <input type="text" class="form-control" placeholder="Client Name" <?php if(!empty($client_id)){?>value="Tata Company"<?php }?>>
                                    
									</div>
								
								</div>
								<div class="col-md-6">
								
									<div class="form-group ">
										<label class="form-control-label" for="l0">Business Address 1*</label>
                                    <input type="text" class="form-control" placeholder="Business Address 1" <?php if(!empty($client_id)){?>value="Greenville"<?php }?>>
									</div>
									
								</div>
								<div class="col-md-6">	
									<div class="form-group ">
										   <label class="form-control-label" for="l0">Business Address 2 </label>
                                    <input type="text" class="form-control" placeholder="Business Address 2" <?php if(!empty($client_id)){?>value="USA"<?php }?>>
                                   
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group ">
										 <label class="form-control-label" for="l0">City *</label>
                                    <input type="text" class="form-control" placeholder="City" <?php if(!empty($client_id)){?>value="dallas"<?php }?>>
                                   
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group ">
									 <label class="form-control-label" for="l0">State *</label>
                                      	<select
										class="form-control edited"
										id="">
										<?php foreach($states as $key=>$value){?>
										
										<option <?php if(!empty($client_id)){?><?php if($value == 'Texas'){echo 'selected';}?><?php }?>><?php echo $value;?></option>
										
										<?php }?>
									</select> 
										</div>
								</div>
								<div class="col-md-6">
									
									<div class="form-group ">
											  <label class="form-control-label" for="l0">Zip *</label>
                                    <input type="text" class="form-control" placeholder="Zip" <?php if(!empty($client_id)){?>value="5000852"<?php }?>>
                                  
									</div>
								</div>
								<div class="col-md-6">
								<div class="form-group ">
										  <label class="form-control-label" for="l0">Website</label>
                                    <input type="text" class="form-control" placeholder="Website" <?php if(!empty($client_id)){?>value="www.tata.com"<?php }?>>
                                   
									</div>
									</div>
								<div class="col-md-6">
									<div class="form-group row">
									<div class="col-md-12 ">
									 <div class="col-md-12 padding-0">
									<div class="col-xs-9 padding-0">
                                    <label class="form-control-label" for="l0">Phone *</label>
									</div>
									<div class="col-xs-3 padding-right-0">
									<label class="form-control-label" for="l0">Extn </label>
									</div>
									</div>
										<div class="col-md-12 padding-0">
														<div class="col-xs-9 padding-0">
														<input type="text" class="form-control us-phone-mask-input" value="" maxlength="14">
														</div>
														<div class="col-xs-3 padding-right-0">
														<input type="text" class="form-control" placeholder="ext" value="040">
														</div>
														</div>
														</div >
									</div>
									</div>
									
									<div class="col-md-6 ">
									<div class="form-group ">
										<label class="form-control-label" for="l0">Mobile #</label>
									
										<input type="text" class="form-control us-phone-mask-input" value="" maxlength="14">
									</div>
									</div>
									
								<div class="col-md-6">
									<div class="form-group ">
									 <label class="form-control-label" for="l0">Primary Consultant*</label>
								<select
										class="form-control edited"
										id="form_control">
										<option>Select Primary Consultant</option>
										<option>Raviteja</option>
										<option <?php if(!empty($client_id)){?>selected<?php }?>>Praveen</option>
										<option>Firm 2</option>
										<option>Firm 3</option>
										
									</select> 
                                
									</div>
									</div>
								<div class="col-md-6">
									
														<div class="form-group">
															    <label class="form-control-label" for="l0">Primary Account Manager*</label>
										<select class="form-control edited" id="form_control">
										<option value="Select Account Manager">Select Account Manager</option>
										<option value="Raviteja">Raviteja</option>
										<option value="Praveen">Praveen</option>
										<option value="Firm 2" <?php if(!empty($client_id)){?>selected<?php }?>>Firm 2</option>
										<option value="Firm 3">Firm 3</option>
										
									</select>
								
                                 
															
														</div>
													</div>
													
									<div class="col-md-6">
									
														<div class="form-group">
															    <label class="form-control-label" for="l0">Primary Service Rep*</label>
										<select class="form-control edited" id="form_control">
										<option value="Select Account Manager">Select Service Rep</option>
										<option value="Raviteja">Raviteja</option>
										<option value="Praveen">Praveen</option>
										<option value="Firm 2" <?php if(!empty($client_id)){?>selected<?php }?>>Firm 2</option>
										<option value="Firm 3">Firm 3</option>
										
									</select>
								
                                 
															
														</div>
													</div>
													
	<div class="col-md-6">							
<div class="form-group ">
									 <label class="form-control-label" for="l0">Upload Company Logo</label>
							<input type="file" class="form-control">
                                
									</div>	
								
								</div>
								
								
								</fieldset>
								</div>
								
								</div>
								
								<div class="col-md-4 padding-right-0">
								
		<div class="col-md-12 padding-0 margin-bottom-20">	
<fieldset class="fieldset-box">

											<legend>Access &amp; Settings</legend>	
<div class="form-group">
   <label class="form-control-label" for="l0">Select Employer Size*</label>
								<select
										class="form-control edited"
										id="form_control">
										<option>0-50</option>
										<option <?php if(!empty($client_id)){?>selected <?php }?>> 50-100</option>
										<option>100-200</option>
										<option>200-300</option>
										
									</select> 
											</div>	
											
									<div class="form-group ">
														 <label class="form-control-label" for="l0">Select Industry Code*</label>
								<select
										class="form-control edited"
										id="form_control">
										<option>Manufacturing Industry</option>
										<option>Raviteja</option>
										<option >Praveen</option>
										<option>Firm 2</option>
										<option <?php if(!empty($client_id)){?>selected<?php }?>>Firm 3</option>
										
									</select> 
                        
															
														</div>
														
														<div class="">
															<label class="form-control-label" for="l0">Bill Client Usage to:</label>
														
															   
				              <div class="mt-radio-inline padding-0">
                                                        <label class="mt-radio mt-radio-outline">Firm
                                                            <input type="radio" value="1" name="test1" checked>
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-radio mt-radio-outline"> Client
                                                            <input type="radio" value="1" name="test1">
                                                            <span></span>
                                                        </label>
                                                    </div> 
													
														</div>
														
														
														
															<div class="">
																	<label class="form-control-label" for="l0">Logo to use in Reporting</label>
							     <div class="mt-radio-inline  padding-0">
                                                        <label class="mt-radio mt-radio-outline">Use Firm Logo 
                                                            <input type="radio" value="1" name="test3" checked>
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-radio mt-radio-outline"> Use Client Logo 
                                                            <input type="radio" value="1" name="test3">
                                                            <span></span>
                                                        </label>
                                                    </div>
																<!--<input type="file" id="input-file-now" class="dropify" />-->
															</div>
															</fieldset>
</div>

<div class="col-md-12 padding-0 margin-bottom-20">	
<fieldset class="fieldset-box">

											<legend>Set Client Subscriptions</legend>	
														<div class="form-group">
														<label class="form-control-label">Self Insured Reporting*</label>
							<div class="">
									 <label class="mt-checkbox mt-checkbox-outline">   Activate
										<input type="checkbox" value="1" name="" <?php if(!empty($client_id)){?>checked<?php }?>>
										<span></span>
									</label> 
											</div>
							<div class=" ">
							       <div class="mt-radio-inline  padding-0">
                                                        <label class="mt-radio mt-radio-outline">Basic
                                                            <input type="radio" value="1" checked name="test">
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-radio mt-radio-outline"> Full Service
                                                            <input type="radio" value="1" name="test">
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-radio mt-radio-outline"> Bulk
                                                            <input type="radio" value="1" name="test">
                                                            <span></span>
                                                        </label>
                                                    </div>
											</div>
														</div>
														
														<div class="form-group">
															<div class="row">
															<div class="col-md-12">
							<div class="pull-left">
							 <label class="margin-bottom-0 margin-right-2">Client#</label> 
							<button type="button" class="btn btn-primary cursor-default">4</button>
							</div>
							<div class="pull-left margin-left-10">
							 <label class="margin-bottom-0 margin-right-2">$/Mo</label> 
							<button type="button" class="btn btn-primary cursor-default">$54</button>
							</div>
							</div>
							</div>
							
														</div>
										</fieldset>		
											
								</div>  
								</div>
								</div>
								<div class="col-md-12 padding-0 bg-sky-blue border-ddd" align="right" style="border-top:none;">
								
								<div class="modal-footer-btn padding-15">
								
								<a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/design/user/clientuser?id=1&tab=2"  class="btn btn-modal-blue">
									Save
								</a> 
								 <a class="btn btn-default" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/design/search"  >Cancel</a>
							
								
								
								</div>
								</div>
							</div>
							
							 <div class="tab-pane col-md-12 padding-15 border-ddd" id="profile5" role="tabcard" aria-expanded="false" style="border-top:none;">
							
							<div class="">
							<div class="row padding-10" align="right">
							
																<a class="btn  btn-modal-blue"  href="#add_client_user" data-toggle="modal" >  
																		Add New User</a>
															</div>
															
													<?php 
															$gridColumns = [
															['class' => 'kartik\grid\SerialColumn'],
															[
																//'class' => 'kartik\grid\EditableColumn',
																'attribute' => 'first_name',
																//'pageSummary' => 'Page Total',
																'vAlign'=>'middle',
																'format'=>'raw',
																'headerOptions' => ['class' => 'blue-grid-head'],
																'value' => function ($model, $key, $index, $widget) {
																	$a_first_name = '';
																	if (! empty ( $model->first_name )) {
																		$a_first_name = '<a  href="#update_client_user" data-toggle="modal" class="color-blue"><u>'.$model->first_name.'</u></a>';
																	}
																	else
																	{
																		$a_first_name = 'NA';
																	}
																	return $a_first_name;
																},
																//'editableOptions'=>['header'=>'Name', 'size'=>'md']
															],
															[
																//'class' => 'kartik\grid\EditableColumn',
																'attribute' => 'last_name',
																'format'=>'raw',
																//'pageSummary' => 'Page Total',
																'vAlign'=>'middle',
																'headerOptions' => ['class' => 'blue-grid-head'],
																'value' => function ($model, $key, $index, $widget) {
																	$a_first_name = '';
																	if (! empty ( $model->last_name )) {
																		$a_first_name = '<a  href="#update_client_user" data-toggle="modal" class="color-blue"><u>'.$model->last_name.'</u></a>';
																	}
																	else
																	{
																		$a_first_name = 'NA';
																	}
																	return $a_first_name;
																},
																//'editableOptions'=>['header'=>'Name', 'size'=>'md']
															],
														   [
																//'class' => 'kartik\grid\EditableColumn',
																'attribute' => 'email',
																'headerOptions' => ['class' => 'blue-grid-head'],
																//'pageSummary' => 'Page Total',
																'vAlign'=>'middle',
																	//'editableOptions'=>['header'=>'Name', 'size'=>'md']
															],
															[
																//'class' => 'kartik\grid\EditableColumn',
																'attribute' => 'phone',
																'headerOptions' => ['class' => 'blue-grid-head'],
																//'pageSummary' => 'Page Total',
																'vAlign'=>'middle',
																	//'editableOptions'=>['header'=>'Name', 'size'=>'md']
															],
															 [
																//'class' => 'kartik\grid\EditableColumn',
																'attribute' => 'jobtitle',
																'label' => 'Job Title',
																'headerOptions' => ['class' => 'blue-grid-head'],
																//'pageSummary' => 'Page Total',
																'vAlign'=>'middle',
																	//'editableOptions'=>['header'=>'Name', 'size'=>'md']
															],
															[
																//'class'=>'kartik\grid\BooleanColumn',
																'attribute'=>'is_primary', 
																'format'=>'raw',
																'headerOptions' => ['class' => 'blue-grid-head'],
																'value' => function ($model, $key, $index, $widget) {
																	$a_first_name = '';
																	if (! empty ( $model->is_primary )) {
																		$a_first_name = 'Yes';
																	}
																	else
																	{
																		$a_first_name = 'No';
																	}
																	return $a_first_name;
																},
																'vAlign'=>'middle',
															],
															[
																//'class'=>'kartik\grid\BooleanColumn',
																'attribute'=>'is_billing', 
																'format'=>'raw',
																'headerOptions' => ['class' => 'blue-grid-head'],
																'value' => function ($model, $key, $index, $widget) {
																	$a_first_name = '';
																	if (! empty ( $model->is_billing )) {
																		$a_first_name = 'Yes';
																	}
																	else
																	{
																		$a_first_name = 'No';
																	}
																	return $a_first_name;
																},
																'vAlign'=>'middle',
															],
															/*[
																//'class'=>'kartik\grid\BooleanColumn',
																'attribute'=>'status', 
																'label'=>'User Status',
																'format'=>'raw',
																'headerOptions' => ['class' => 'blue-grid-head'],
																'value' => function ($model, $key, $index, $widget) {
																	$a_first_name = '';
																	if (! empty ( $model->status )) {
																		$a_first_name = '<a><u class="color-blue">Active</u></a>';
																	}
																	else
																	{
																		$a_first_name = '<a><u class="color-blue">Inactive</u></a>';
																	}
																	return $a_first_name;
																},
																'vAlign'=>'middle',
															],*/
															 [
																//'class' => 'kartik\grid\EditableColumn',
																'attribute' => 'actions',
																'attribute' => 'Actions',
																//'pageSummary' => 'Page Total',
																'width'=> '100px',
																'format'=>'raw',
																'headerOptions' => ['class' => 'blue-grid-head'],
																'value' => function ($model, $key, $index, $widget) {
																	$link = '<div class="col-md-6"><a class="display-block color-blue" href="#resend_activation_link" data-toggle="modal" ><i class="fa fa-repeat"  data-toggle="tooltip" data-placement="bottom" title="Resend Password"></i></a></div><div class="col-md-6"><a class="display-block color-blue" href="#alert_screen" data-toggle="modal"><i class="fa fa-thumbs-o-down "  data-toggle="tooltip" data-placement="bottom" title="Deactivate User"></i></a></div>';
																	return $link;
																},
																'vAlign'=>'middle',
																	//'editableOptions'=>['header'=>'Name', 'size'=>'md']
															],
															/*[
																'class' => 'kartik\grid\ActionColumn',
																'dropdown' => false,
																'vAlign'=>'middle',
																'urlCreator' => function($action, $model, $key, $index) { return '#'; },
																'viewOptions'=>['title'=>'title', 'data-toggle'=>'tooltip'],
																'updateOptions'=>['title'=>'title', 'data-toggle'=>'tooltip'],
																'deleteOptions'=>['title'=>'title', 'data-toggle'=>'tooltip'], 
															],
															['class' => 'kartik\grid\CheckboxColumn']*/
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
	

		<script>
	
 $(function () {

        $("[data-toggle=tooltip]").tooltip();

    });
	
	
	$(document).ready(function(){
		$('#new_link').addClass('page-active');
		<?php if(!empty($client_id) && !empty(\Yii::$app->request->get ('tab')) && Yii::$app->request->get ('tab')==2){?>
		enableClientusers();
			
			<?php }elseif(!empty($client_id)){?>
		enableClient();
		<?php }else{ ?>
		$('#anchor-pb-1').trigger('click');
		<?php }?>
		$('.dropify').dropify({
                messages: {
        'default': 'Please Upload Company Logo',
        'replace': 'Drag and drop or click to replace',
        'remove':  'Remove',
        'error':   'Ooops, something wrong happended.'
    }
            });

            // Used events
            var drEvent = $('#input-file-events').dropify();

            drEvent.on('dropify.beforeClear', function(event, element){
                return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
            });

            drEvent.on('dropify.afterClear', function(event, element){
                alert('File deleted');
            });

            drEvent.on('dropify.errors', function(event, element){
                console.log('Has Errors');
            });

            var drDestroy = $('#input-file-to-destroy').dropify();
            drDestroy = drDestroy.data('dropify')
            $('#toggleDropify').on('click', function(e){
                e.preventDefault();
                if (drDestroy.isDropified()) {
                    drDestroy.destroy();
                } else {
                    drDestroy.init();
                }
            })

		 
	});


	function enableClientusers(){

		$('#client_users').removeClass('cursor-nodrop');
		$('#anchor-pb-5').removeClass('pointer-disable');
		$('#anchor-pb-5').attr('data-toggle','tab');
		$('#main-anchor-1').trigger('click');
		$("#anchor-pb-5").trigger('click');
	}

	
	function enableClient(){

		$('#client_users').removeClass('cursor-nodrop');
		$('#anchor-pb-5').removeClass('pointer-disable');
		$('#anchor-pb-5').attr('data-toggle','tab');
		$('#anchor-pb-1').trigger('click');
	}
	
	function addnewTab(){
		$('#new_clienttab').removeClass('hide');
		$('#update_clienttab').addClass('hide');			
		$('#main-anchor-1').trigger('click');
		$("#anchor-pb-6").trigger('click');
	}
	function addupdateTab(){
		$('#update_clienttab').removeClass('hide');
		$('#new_clienttab').addClass('hide');
		$('#main-anchor-1').trigger('click');
		$("#anchor-pb-7").trigger('click');
	}
	</script>
	</div>
</section>


