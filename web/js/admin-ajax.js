var url = document.URL;

var array = url.split("/");

var base = array[3];

if (array[2] == 'localhost') {
	var staticurl = '/' + base ;
	//var url_action = array[6].split("?")[0];
} else {
	var staticurl = '/';
	// var url_action = array[5].split("?")[0];
}

$(document).ready(function(){

$(".firm-user-modal-close").click(function(){
	
	$('#create_firm_user').find('.modal-content').html('');
	
});	



});



$(document).ready(function() {

	//you have to use keyup, because keydown will not catch the currently entered value
	$('#setpasswordform-password').keyup(function() {

		// set password variable
		var pswd = $(this).val();

		//validate the length
		if (pswd.length < 8) {
			$('#length').removeClass('valid').addClass('invalid');
		} else {
			$('#length').removeClass('invalid').addClass('valid');
		}

		//validate letter
		if (pswd.match(/[A-z]/)) {
			$('#letter').removeClass('invalid').addClass('valid');
		} else {
			$('#letter').removeClass('valid').addClass('invalid');
		}

		//validate uppercase letter
		if (pswd.match(/[A-Z]/)) {
			$('#capital').removeClass('invalid').addClass('valid');
		} else {
			$('#capital').removeClass('valid').addClass('invalid');
		}

		//validate special character
		if (pswd.match(/[@!#\$\^%&*()+=\-\[\]\\\';,\.\/\{\}\|\":<>\? ]/)) {
			$('#specialchar').removeClass('invalid').addClass('valid');
		} else {
			$('#specialchar').removeClass('valid').addClass('invalid');
		}

		//validate number
		if (pswd.match(/\d/)) {
			$('#number').removeClass('invalid').addClass('valid');
		} else {
			$('#number').removeClass('valid').addClass('invalid');
		}

	}).focus(function() {
		$('#pswd_info').show();
	}).blur(function() {
		$('#pswd_info').hide();
	});
	
	

});

function addLocationsOnebyOne(){
	
				var text = '';
				text = $('#input_add_location').val();
				if(text != '')
				{
					
					var newOption = "<option value='"+text+"' selected >"+text+"</option>"; 
					$("#firm_locations").append(newOption);
					$('#input_add_location').val('');
					
				}
}



function ChangeactivateText(firm_user_id){
	// to deactivate
	$('#mydeactivateModalLabel').html('Deactivate User');
	$('#mydeactivateModalBodyText').html('Do You Want to Deactivate the User?');	//
	$('#deactivate_modal_go1').attr("onclick", "ChangeFirmUserStatus('"+firm_user_id+"','D2');");
}
function ChangeDeactivateText(firm_user_id){
	// to Aactivate
	$('#mydeactivateModalLabel').html('Activate User');
	$('#mydeactivateModalBodyText').html('Do You Want to Activate the User?');	//
	$('#deactivate_modal_go1').attr("onclick", "ChangeFirmUserStatus('"+firm_user_id+"','A1');");
}

function ChangeFirmUserStatus(firm_user_id,type){
 
   var data= 'firm_user_id='+firm_user_id+'&status='+type;
   
  $.ajax({
	type: 'POST',
    url: staticurl + "user/changeuserstatus",
	data:data,
	processData:false,
	//dataType:'json',
	success:function(data){
		//alert(data);
		if (data) {
			if(type == 'A1'){		
				toastr.success('User Activated Successfully');
				$('#update_firm_change_status_text').html('Deactivate User');
				$('#update_firm_change_status_text').attr("onclick", "ChangeactivateText('"+firm_user_id+"');");
				if ( $( "#w1-pjax" ).length ) {
				$.pjax.reload({container:'#w1-pjax'});
				}
			}else if(type == 'D2'){
				toastr.success('User Deactivated Successfully');
				$('#update_firm_change_status_text').html('Activate User');
				$('#update_firm_change_status_text').attr("onclick", "ChangeDeactivateText('"+firm_user_id+"');");
				if ( $( "#w1-pjax" ).length ) {
				$.pjax.reload({container:'#w1-pjax'});
				}
			}
		}else
		{
			toastr.error('Some error occured');			
		}		
    },	
  
  });
 
}

function getFirmDetails(firm_user_id){
	
	var data = 'firm_user_id='+firm_user_id;

	 $.ajax({
			type: 'GET',
		    url: staticurl + "user/getfirmdetails",
			data:data,
			processData:false,
			dataType:'json',
			success:function(data){
				//console.log(data);
				$('#update_firm_first_name').val(data[0]['first_name']);
				$('#update_firm_last_name').val(data[0]['last_name']);
				$('#update_firm_job_title').val(data[0]['title']);
				$('#update_firm_email_id').val(data[0]['user']['username']);
				$('#update_firm_phone').val(data[0]['phone']);
				$('#update_firm_extension').val(data[0]['extension']);
				$('#update_firm_mobile').val(data[0]['cellular']);
				$('#update_firm_user_for_firm').val(data[0]['firm_user_id']);
				if(data[0]['is_primary'] == 1){
					$("#update_firm_primary_contact").attr('checked','checked');
				}
				if(data[0]['is_billing'] == 1){
					$("#update_firm_billing_contact").attr('checked','checked');
				}
				$('#update_firm_primary_contact').val(data[0]['is_primary']);
				$('#update_firm_billing_contact').val(data[0]['is_billing']);
				if(data[0]['is_active'] == 1){
					$('#update_firm_change_status_text').html('Deactivate User');
					$('#update_firm_change_status_text').attr("onclick", "ChangeactivateText('"+firm_user_id+"');");
				}
				else if(data[0]['is_active'] == 0){
					$('#update_firm_change_status_text').html('Activate User');
					$('#update_firm_change_status_text').attr("onclick", "ChangeDeactivateText('"+firm_user_id+"');");
				}
								
		    },	
		  
		  });
}