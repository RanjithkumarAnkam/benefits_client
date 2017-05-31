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
				<a class="breadcrumb-back-btn" onclick="history.go(-1)">
				<i class="fa fa-angle-left" aria-hidden="true"></i>
				</a>
				<div class="breadcrumb-description">
					<span class="">New &#62; <?php if(!empty($firm_id)){?>Update Firm<?php }else{?>Create Firm<?php }?></span>

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
                                <a id="anchor-pb-1" class="nav-link  color-white" data-target="#home5" data-toggle="tab" href="javascript: void(0);" role="tab" aria-expanded="true">Firm Details</a>
                            </li>
                            <li class="nav-item  cursor-nodrop" id="firm_users">
                                <a id="anchor-pb-4" class="nav-link color-white pointer-disable" data-target="#profile5" data-toggle="tab" href="javascript: void(0);" role="tab" aria-expanded="false">Firm Users</a>
                            </li>
                          
                        </ul>
                        <div class="tab-content blue-main-nav-content ">
                            <div class="tab-pane" id="home5" role="tabcard" aria-expanded="true" >
							<div class="col-md-12 padding-15 border-ddd" style="border-top:none;border-bottom:none;">
							<div class="">
							
							<div class="col-md-8 padding-0">
							
							
							<div class="col-md-12 padding-0 margin-bottom-20">	
<fieldset class="fieldset-box">

											<legend>Firm Details</legend>	
							<div class="col-md-12 ">
							
								<div class="form-group ">
										<label class="form-control-label" for="l0">Firm Name *</label>
									
										<input type="text" class="form-control" value="<?php if(!empty($firm_id)){?>Raviteja<?php }?>" placeholder="Firm Name">
									</div>
									
							</div>
							
							
							
							<div class="col-md-6 ">
									<div class="form-group ">
										<label class="form-control-label" for="l0">Business Address 1*</label>
									
										<input type="text" class="form-control" value="<?php if(!empty($firm_id)){?>greenville<?php }?>" placeholder="Business Address 1">
									</div>
									
							</div>
							<div class="col-md-6 ">
							
									<div class="form-group ">
										<label class="form-control-label" for="l0">Business Address 2</label>
									
										<input type="text" class="form-control" value="<?php if(!empty($firm_id)){?>greenville<?php }?>" placeholder="Business Address 2">
									</div>
									
							</div>
							<div class="col-md-6  ">
									
									<div class="form-group ">
										<label class="form-control-label" for="l0">City</label>
									
										<input type="text" class="form-control" value="<?php if(!empty($firm_id)){?>Dallas<?php }?>" placeholder="City">
									</div>
									
							</div>
							<div class="col-md-6  ">
							
									<div class="form-group ">
										<label class="form-control-label" for="l0">State *</label>
									
										<select class="form-control edited" id="">
										<?php foreach($states as $key=>$value){?>
										
										<option  <?php if(!empty($firm_id)){?><?php if($value == 'Texas'){echo 'Selected'; }?><?php }?> ><?php echo $value;?></option>
										
										<?php }?>
									</select>
									</div>
								
										
							</div>
							<div class="col-md-6  ">
							
								<div class="form-group ">
										<label class="form-control-label" for="l0">Zip</label>
									
										<input type="text" class="form-control" value="<?php if(!empty($firm_id)){?>533323<?php }?>" placeholder="Zip">
									</div>
							
									
							</div>
							<div class="col-md-6 ">
							
								<div class="form-group ">
										<label class="form-control-label" for="l0">Website</label>
									
										<input type="text" class="form-control"  value="<?php if(!empty($firm_id)){?>www.sir.com<?php }?>"placeholder="Website">
									</div>
									
							</div>
							<div class="col-md-6 ">
								
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
														<input type="text" class="form-control us-phone-mask-input" value="<?php if(!empty($firm_id)){?>9999999999<?php }?>" maxlength="14">
														</div>
														<div class="col-xs-3 padding-right-0">
														<input type="text" class="form-control" placeholder="ext" value="<?php if(!empty($firm_id)){?>040<?php }?>">
														</div>
														</div>
														</div >
									</div>
									
										
							</div>
							<div class="col-md-6  ">
							
									<div class="form-group ">
										<label class="form-control-label" for="l0">Mobile #</label>
									
										<input type="text" class="form-control us-phone-mask-input" value="<?php if(!empty($firm_id)){?>9999999999<?php }?>"
																placeholder="Mobile #">
									</div>
								
										
							</div>
							<div class="col-md-6  ">
							
									
														<div class="form-group">
															<label class="form-control-label" for="l0">Firm
																Locations *</label>
														
															<input type="text" class="form-control" value="<?php if(!empty($firm_id)){?>Dallas<?php }?>"
																placeholder="Location">
															
														</div>
													



													<div class="row">
														<div class="form-group col-md-12 " align="right">
															<label><a onclick="addLocation();" class="color-blue"><u>Add Additional
																		Locations</u></a></label>
														</div>
													</div>

														<div class=" hide" id="add_location">
														<div class="form-group">
																<label class="form-control-label" for="l0">New Location</label>
														
															<input type="text" class="form-control" Placeholder="Add New Location">
														</div>
														<div class="col-md-12 padding-0" align="right">
															<button type="button" class="btn  btn-modal-blue"
																onclick="addLocation();">Add</button>
																<button class="btn btn-default" onclick="addLocation();">Cancel</button>
														</div>
													</div>
										</div>			
								


									</fieldset>

								</div>
								
							</div>
                              
								
								<div class="col-md-4 padding-right-0">
								<div class="col-md-12 padding-0 margin-bottom-20">	
<fieldset class="fieldset-box">

											<legend>Module and Settings</legend>	
								
								<?php if(!empty($firm_id)){ ?>
								
									<div class="form-group ">
															
														
															<p><a id="modal-alert" href="#alert_firm_screen" class="color-blue"
														data-toggle="modal"><u>Deactivate Firm</u></a></p>
															
														
														</div>
														<?php }?>
														
														<div class="form-group">
															<label class="form-control-label" for="l0"><b>Activate Modules</b></label>
														<p>
															<label class="mt-checkbox mt-checkbox-outline"> Plan
																Claims Reporting <input type="checkbox" value="1" checked
																name=""> <span></span>
															</label>
															</p>
														</div>
														
														
														
															<div class="form-group">
																<input type="file" id="input-file-now" class="dropify" />
															</div> 

														
													
								  
								  
								  </fieldset>
								  </div>
								</div>
								</div>
								</div>
								<div class="col-md-12 padding-0 bg-sky-blue border-ddd" align="right" style="border-top:none;">
								
								<div class="modal-footer-btn padding-15">
								
								<a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/design/user/firmuser?id=1&tab=2"  class="btn btn-modal-blue">
									Save
								</a> 
								 <a class="btn btn-default" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/design/search" >Cancel</a>
							
								
								
								</div>
								</div>
							 </div>
                            <div class="tab-pane col-md-12 padding-15 border-ddd" id="profile5" role="tabcard" aria-expanded="false" style="border-top:none;">
							<div class="">
							
							<div class="row padding-10" align="right">
							
																<a class="btn  btn-modal-blue" href="#create_firm_user" data-toggle="modal">  
																		Add New User</a>
															</div>
							<?php 
															$gridColumns = [
															['class' => 'kartik\grid\SerialColumn'],
															[
																//'class' => 'kartik\grid\EditableColumn',
																'attribute' => 'first_name',
																//'pageSummary' => 'Page Total',
																'headerOptions' => ['class' => 'blue-grid-head'],
																'vAlign'=>'middle',
																'format'=>'raw',
																'value' => function ($model, $key, $index, $widget) {
																	$a_first_name = '';
																	if (! empty ( $model->first_name )) {
																		$a_first_name = '<a  href="#update_firm_user" data-toggle="modal" class="color-blue"><u>'.$model->first_name.'</u></a>';
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
																'headerOptions' => ['class' => 'blue-grid-head'],
																'vAlign'=>'middle',
																'value' => function ($model, $key, $index, $widget) {
																	$a_first_name = '';
																	if (! empty ( $model->last_name )) {
																		$a_first_name = '<a  href="#update_firm_user" data-toggle="modal" class="color-blue"><u>'.$model->last_name.'</u></a>';
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
																'vAlign'=>'middle',
																	//'editableOptions'=>['header'=>'Name', 'size'=>'md']
															],
															[
																//'class' => 'kartik\grid\EditableColumn',
																'attribute' => 'phone',
																'headerOptions' => ['class' => 'blue-grid-head'],
																'vAlign'=>'middle',
																	//'editableOptions'=>['header'=>'Name', 'size'=>'md']
															],
															 [
																//'class' => 'kartik\grid\EditableColumn',
																'attribute' => 'jobtitle',
																'label' => 'Job Title',
																'headerOptions' => ['class' => 'blue-grid-head'],
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
														/*	[
																//'class'=>'kartik\grid\BooleanColumn',
																'attribute'=>'status', 
																'label'=>'User Status',
																'headerOptions' => ['class' => 'blue-grid-head'],
																'format'=>'raw',
																'value' => function ($model, $key, $index, $widget) {
																	$a_first_name = '';
																	if (! empty ( $model->status )) {
																		$a_first_name = '<a class="color-blue"><u>Active</u></a>';
																	}
																	else
																	{
																		$a_first_name = '<a class="color-blue"><u>Inactive</u></a>';
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
			
			</div>
			</div>
			</div>
			
			</div>
			</div>
				</section>		

<script>


		function addnewTab(){
			$('#new_firmtab').removeClass('hide');
			$('#update_firmtab').addClass('hide');			
			$('#main-anchor-1').trigger('click');
			$("#anchor-pb-5").trigger('click');
		}
		function addupdateTab(){
			$('#update_firmtab').removeClass('hide');
			$('#new_firmtab').addClass('hide');
			$('#main-anchor-1').trigger('click');
			$("#anchor-pb-6").trigger('click');
		}
		function enableFirm(){

			$('#firm_users').removeClass('cursor-nodrop');
			$('#anchor-pb-4').removeClass('pointer-disable');
			$('#anchor-pb-4').attr('data-toggle','tab');
			$('#anchor-pb-1').trigger('click');
			/*$("#anchor-pb-4").trigger('click');*/
		}
		
		function enableFirmusers(){

			$('#firm_users').removeClass('cursor-nodrop');
			$('#anchor-pb-4').removeClass('pointer-disable');
			$('#anchor-pb-4').attr('data-toggle','tab');
			$('#main-anchor-1').trigger('click');
			$("#anchor-pb-4").trigger('click');
		}
		
	$(document).ready(function(){
		$('#new_link').addClass('page-active');
		  $("[data-toggle=tooltip]").tooltip();
		<?php if(!empty($firm_id) && !empty(\Yii::$app->request->get ('tab')) && Yii::$app->request->get ('tab')==2){ ?>
		enableFirmusers();
		<?php }elseif(!empty($firm_id)){?>
		enableFirm();
		<?php }else{ ?>
		$('#anchor-pb-1').trigger('click');
		<?php }?>
		
		
		$('.dropify').dropify({
                messages: {
        'default': 'Please Upload Firm Logo',
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
</script>
