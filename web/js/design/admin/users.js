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
	
	
	
	
	
	
	/***** client*******************/
	

 


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