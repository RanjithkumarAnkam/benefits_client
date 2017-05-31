<?php 

$states = array(
    'AL'=>'Alabama',
    'AK'=>'Alaska',
    'AZ'=>'Arizona',
    'AR'=>'Arkansas',
    'CA'=>'California',
    'CO'=>'Colorado',
    'CT'=>'Connecticut',
    'DE'=>'Delaware',
    'DC'=>'District of Columbia',
    'FL'=>'Florida',
    'GA'=>'Georgia',
    'HI'=>'Hawaii',
    'ID'=>'Idaho',
    'IL'=>'Illinois',
    'IN'=>'Indiana',
    'IA'=>'Iowa',
    'KS'=>'Kansas',
    'KY'=>'Kentucky',
    'LA'=>'Louisiana',
    'ME'=>'Maine',
    'MD'=>'Maryland',
    'MA'=>'Massachusetts',
    'MI'=>'Michigan',
    'MN'=>'Minnesota',
    'MS'=>'Mississippi',
    'MO'=>'Missouri',
    'MT'=>'Montana',
    'NE'=>'Nebraska',
    'NV'=>'Nevada',
    'NH'=>'New Hampshire',
    'NJ'=>'New Jersey',
    'NM'=>'New Mexico',
    'NY'=>'New York',
    'NC'=>'North Carolina',
    'ND'=>'North Dakota',
    'OH'=>'Ohio',
    'OK'=>'Oklahoma',
    'OR'=>'Oregon',
    'PA'=>'Pennsylvania',
    'RI'=>'Rhode Island',
    'SC'=>'South Carolina',
    'SD'=>'South Dakota',
    'TN'=>'Tennessee',
    'TX'=>'Texas',
    'UT'=>'Utah',
    'VT'=>'Vermont',
    'VA'=>'Virginia',
    'WA'=>'Washington',
    'WV'=>'West Virginia',
    'WI'=>'Wisconsin',
    'WY'=>'Wyoming',
);
?>

<div class="container">

				<div class="row padding-bottom-20">
					<div class="col-lg-12">
						<section class="panel">
					
							<div class="panel-body row">
							

<div class="col-md-12">
<div class="col-md-6 action-coloumn padding-0">
 <?php if(!empty($firm_id)){?>
		<a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/search">&lt;&lt;Back</a>
		  <?php }else{?>
		  <a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl().Yii::$app->params['dashboard_url']; ?>">&lt;&lt;Back</a>
		   <?php }?>
		</div>
<div class="col-md-6 " align="right"> 
  <?php //if(!empty($firm_id)){?>
<a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl().''.\Yii::$app->params['save_changes']; ?>" class="btn btn-rounded btn-primary margin-inline">Save Changes</a>
  <?php //}else{?>
 <!-- <a href="<?php // echo Yii::$app->getUrlManager()->getBaseUrl().''.\Yii::$app->params['save_changes']; ?>" class="btn btn-rounded btn-primary margin-inline pointer-events">Save Changes</a>-->
  <?php //}?>
<a class="btn btn-rounded btn-default margin-inline" onclick="cancelButton(<?php echo Yii::$app->user->identity->usertype;?>);">Cancel</a>
</div>
</div>

<header class="pageTitle">
<div class="col-md-12"> 
<!--<span class="btn btn-primary-outline btn-sm btn-rounded user-detail">Firm</span>-->

<?php if(!empty($firm_id)){ ?>
<a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/dashboard/firms" class="btn btn-success btn-sm btn-rounded">Go to Firm Dashboard</a>
<?php } ?>

</div>

</header>


<div class="col-md-6">
<div class="col-md-6 padding-left-0">
				<p class="box-head">Step 1: Firm Details <a class="fa fa-info-circle information-icon"class="btn btn-default-outlined margin-inline" title="Firm Details" data-container="body" data-toggle="popover-hover" data-placement="right" data-content="Please enter the firm name and contact information.  Also, enter in all locations of the firm.  Locations will then be used to appropriately assign firm users to the appropriate location and privileges." ></a></p>
				</div>
				<div class="col-md-6 padding-right-0">
				<?php if(!empty($firm_id)){ ?>
				<label class="margin-top-10 pull-right">Firm ID:  1234566</label>
				<?php } ?>
				</div>
				<div class="">
				
				<div class="col-md-12 box-border box-padding">
				
					<form>
                            <div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Firm Name *</label>
                                </div>
                                <div class="col-md-8 form-group ">
                                    <input type="text" class="form-control" placeholder="Firm Name" >
                                </div>
                            </div>
							 <div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Business Address 1*</label>
                                </div>
                                <div class="col-md-8 form-group ">
                                    <input type="text" class="form-control" placeholder="Business Address 1" >
                                </div>
                            </div>
							 <div class="row">
                                <div class="col-md-4 form-group ">
                                    <label class="form-control-label" for="l0">Business Address 2</label>
                                </div>
                                <div class="col-md-8 form-group ">
                                    <input type="text" class="form-control" placeholder="Business Address 2" >
                                </div>
                            </div>
							 
							
							<div class="row">
                               <div class="col-md-4 form-group">
                                    <label class="form-control-label" for="l0">City </label>
                                </div>
                                  <div class="col-md-8 form-group ">
                                    <input type="text" class="form-control" placeholder="City">
                                </div>
                            </div>
							<div class="row">
                               <div class="col-md-4 form-group">
                                    <label class="form-control-label" for="l0">State *</label>
                                </div>
                                  <div class="col-md-8 form-group ">
                                    	<select
										class="form-control edited"
										id="">
										<?php foreach($states as $key=>$value){?>
										
										<option><?php echo $value;?></option>
										
										<?php }?>
									</select> 
                                </div>
                            </div>
							<div class="row">
                               <div class="col-md-4 form-group">
                                    <label class="form-control-label" for="l0">Zip *</label>
                                </div>
                                  <div class="col-md-8 form-group ">
                                    <input type="text" class="form-control" placeholder="Zip">
                                </div>
                            </div>
							<div class="row">
                                <div class="col-md-4 form-group">
                                    <label class="form-control-label" for="l0">Website</label>
                                </div>
                                   <div class="col-md-8 form-group ">
                                    <input type="text" class="form-control" placeholder="Website">
                                </div>
                            </div>
							<div class="row">
							 
                               <div class="col-md-4 form-group">
                                    <label class="form-control-label" for="l0">Phone *</label>
                                </div>
                                  <div class="col-md-8 form-group ">
                                   <input type="text" class="form-control" id="us-phone-mask-input">
                                </div> 
								    
                                 
								 
                            </div>
							<div class="row">
                                <div class="col-md-4 form-group">
                                    <label class="form-control-label" for="l0">Cellular</label>
                                </div>
                                   <div class="col-md-8 form-group ">
                                    <input type="text" class="form-control" placeholder="Cellular">
                                </div>
                            </div>
							
                      	 <div class="row">
						  <div class="col-md-4 form-group">
                                    <label class="form-control-label" for="l0">Select Locations *</label>
                                </div>
								 <div class="col-md-8 form-group "> 
									 <input type="text" class="form-control" placeholder="Location">
									 <!--<select class="form-control height-120 select2 select-border  locations" multiple>
										<option selected>Option 1</option>
										<option>Option 3</option>
										<option>Option 4</option>
										<option>Option 5</option>
										<option>Option 6</option>
										<option>Option 7</option>
										<option>Option 8</option>
									</select>-->
								</div>
								 </div>
								 
								
								 
								 <div class="row">
								<div class="form-group col-md-12 " align="right">
									<label><a onclick="addLocation();"><u>Add Additional Locations</u></a></label>
								</div>
								 </div>
								 
								   <div class="col-lg-12 hide padding-bottom-10" id="add_location">
							 <div class="col-md-3 form-group">
                                    <label class="form-control-label" for="l0">Add Location</label>
                                </div>
							<div class="col-md-6 form-group ">
							<input type="text" class="form-control">
							</div>
							<div class="col-md-2">
							<button type="button" class="btn btn-primary" onclick="addLocation();">Save</button>
							</div>
								 </div>
                           
                        </form>
			
				</div>
				</div>
				</div>
				
				
				
				
<div class="col-md-6">
				<p class="box-head">Step 2: Access and Settings <a class="fa fa-info-circle information-icon"class="btn btn-default-outlined margin-inline" title="Actions & Settings" data-container="body" data-toggle="popover-hover" data-placement="right" data-content="Activate modules for this firm and add primary and billing contact information.  Next, upload the firm logo which will be used for client reporting." ></a></p>
				<div class="">
				
				<div class="col-md-12 box-border box-padding">
				<?php if(!empty($firm_id)){ ?>
				<div class="action-coloumn">
				 <a id="modal-alert" href="#alert_screen" data-toggle="modal">Deactivate Company & Company Users</a>
				</div>
				<?php } ?>
				 <div class="row">
				 <div class="col-md-6">
				 <label>Activate Modules</label>
			<div class="md-checkbox-list">
									 <label class="mt-checkbox mt-checkbox-outline">   Plan Claims Reporting
										<input type="checkbox" value="1" name="">
										<span></span>
									</label> 
									<!--<div class="md-checkbox">
										<input type="checkbox" id="checkbox2_3" name="" value="1" class="md-check">
										<label for="checkbox2_3">
											<span></span>
											<span class="check"></span>
											<span class="box"></span>  Population Health Management </label>
									</div>-->
				 </div>
				 </div>
				 
                     	  <div class="col-md-6">
				 <div class="margin-bottom-10">
										<div class="">
							<input type="file" id="input-file-now" class="dropify" />
						</div>

							</div>
							</div>     
                             <div class="col-md-12">
                              <hr>
				</div>  
				 <div class="row">
                            <div class="action-coloumn col-md-12">
							 <div class="col-md-6 padding-0">
                           <div class="col-md-8">
                           Firm Primary Contact
                           </div>
                           <div class="col-md-4"> 
						   <?php if(!empty($firm_id)){?>
							   <a id="modal-primarycontact" href="#primary-contact" data-toggle="modal">Bill Smith</a>
						<?php   }else{?>
							   <a id="modal-primarycontact" href="#add-primary-contact" data-toggle="modal">Add</a>
						<?php   }?>
				
				</div>
				</div>
				</div>
				</div>
				
				
			
			
				    <div class="row">
                            <div class="action-coloumn col-md-12">
							<div class="col-md-6 padding-0">
                           <div class="col-md-8">
                           Firm Billing Contact
                           </div>
                           <div class="col-md-4"> 
						 
						   <?php if(!empty($firm_id)){?>
							   <a id="modal-primarycontact" href="#billing-contact" data-toggle="modal">View</a>
						<?php   }else{?>
							    <a id="modal-primarycontact" href="#add-billing-contact" data-toggle="modal">Add</a>
						<?php   }?>
				</div>
				</div>
				
					<div class="col-md-6 padding-0">
				<div  class="">
				  <div class="">
                                                    <label class="mt-checkbox mt-checkbox-outline">   Same as primary contact information
										<input type="checkbox" value="1" name="">
										<span></span>
									</label> 
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
<?php if(!empty($firm_id)){ ?>
<section class="panel">
					
							<div class="panel-body">
							
								
						<div class="row">
							<div class="col-md-12 padding-top-10 padding-bottom-10">
							<div class="col-md-2 padding-left-8"><label class="margin-top-10"><b> Select a Module :</b></label></div>
								<div class="col-md-4">
								<select class="form-control">
								<option value="Plan Claims Reporting">Plan Claims Reporting</option>
						         
								</select></div>
								</div>
								</div>
								
							
								<!-- div starting for Manage Clients grid -->
								<div class="">
									<div class="demo-container" ng-app="DemoApp" ng-controller="DemoController">
                  <div id="gridContainer" dx-data-grid="gridOptions" dx-item-alias="employee">
                	
        </div>
    </div>
								</div>

								<!-- div end for Manage Clients grid -->
							</div>
						</section>
<?php } ?>
</div>
				</div>
				</div>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.2/jszip.min.js"></script>
<script
	src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.16/angular.min.js"></script>
<script src="https://cdn3.devexpress.com/jslib/16.2.4/js/dx.all.js"></script>

<style>
.select-border .select2.select2-container--focus .select2-selection{
	border-color:#46be8a !important;
}
</style>
<script type="text/javascript"
	src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/firm/firm-new.js"></script>
				<script type="text/javascript">
				
					 $(function () {

        $("[data-toggle=popover]").popover();
        $("[data-toggle=popover-hover]").popover({
            trigger: 'hover'
        });

        $("[data-toggle=tooltip]").tooltip();

    });
		$(document).ready(function(){
		$('.phone_us').mask('(000) 000-0000');
		    // Basic
            $('.dropify').dropify({
                messages: {
                    default: 'Please Upload Firm Logo',
                    replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                    remove:  'Supprimer',
                    error:   'Désolé, le fichier trop volumineux'
                }
            });

            // Translated
            $('.dropify-fr').dropify({
                messages: {
                    default: 'Glissez-déposez un fichier ici ou cliquez',
                    replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                    remove:  'Supprimer',
                    error:   'Désolé, le fichier trop volumineux'
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
<script>
   $(function(){
 $('#us-phone-mask-input').mask('(000) 000-0000', {placeholder: "(___) ___-____"});
        $('.select2').select2();
        $('.select2-tags').select2({
            tags: true,
            tokenSeparators: [',', ' ']
        });

        $('.selectpicker').selectpicker();

    })

	
</script>