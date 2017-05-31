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


function shadowFirmlogin(){
	if(document.getElementById('example-firm-login').value == ''){
		toastr.error('Please Select A Firm to Login');
		document.getElementById("example-firm-login").style.borderColor = "red";
		document.getElementById("example-firm-login").focus();
	}else{
		url= staticurl + 'firm/dashboard'; 
		location = url;
	}
}

function shadowClientlogin(){
	if(document.getElementById('example-client-login').value == ''){
		toastr.error('Please Select A Client to Login');
		document.getElementById("example-client-login").style.borderColor = "red";
		document.getElementById("example-client-login").focus();
	}else{
		url= staticurl + 'client/dashboard'; 
		location = url;
	}
}


function showaddmodal()
{
	document.getElementById("systempricing-basic").style.borderColor = "";
	$('.field-systempricing-basic').find('div.help-block').html('');
	document.getElementById("systempricing-basic").value = '';
	document.getElementById("systempricing-full_service").style.borderColor = "";
	$('.field-systempricing-full_service').find('div.help-block').html('');
	document.getElementById("systempricing-full_service").value = '';
	document.getElementById("systempricing-bulk").style.borderColor = "";
	$('.field-systempricing-bulk').find('div.help-block').html('');
	document.getElementById("systempricing-bulk").value = '';
	
	$('#add_pricing_details').modal('show');
	
}



function validateaddpricing()
{
	
	if (document.getElementById("systempricing-basic").value == '') {
		document.getElementById("systempricing-basic").style.borderColor = "red";
		$('.field-systempricing-basic').find('div.help-block').html('Basic required');
		document.getElementById("systempricing-basic").focus();
		return false;
	} else {
		document.getElementById("systempricing-basic").style.borderColor = "";
		$('.field-systempricing-basic').find('div.help-block').html('');
		
	}
	
	if (document.getElementById("systempricing-full_service").value == '') {
		document.getElementById("systempricing-full_service").style.borderColor = "red";
		$('.field-systempricing-full_service').find('div.help-block').html('Full Service required');
		document.getElementById("systempricing-full_service").focus();
		return false;
	} else {
		document.getElementById("systempricing-full_service").style.borderColor = "";
		$('.field-systempricing-full_service').find('div.help-block').html('');
		
	}
	
	if (document.getElementById("systempricing-bulk").value == '') {
		document.getElementById("systempricing-bulk").style.borderColor = "red";
		$('.field-systempricing-bulk').find('div.help-block').html('Bulk required');
		document.getElementById("systempricing-bulk").focus();
		return false;
	} else {
		document.getElementById("systempricing-bulk").style.borderColor = "";
		$('.field-systempricing-bulk').find('div.help-block').html('');
		
	}
	
}


function validateupdatepricing()
{
	
	if (document.getElementById("systempricing-update-basic").value == '') {
		document.getElementById("systempricing-update-basic").style.borderColor = "red";
		$('.field-systempricing-update-basic').find('div.help-block').html('Basic required');
		document.getElementById("systempricing-update-basic").focus();
		return false;
	} else {
		document.getElementById("systempricing-update-basic").style.borderColor = "";
		$('.field-systempricing-update-basic').find('div.help-block').html('');
		
	}
	
	if (document.getElementById("systempricing-update-full_service").value == '') {
		document.getElementById("systempricing-update-full_service").style.borderColor = "red";
		$('.field-systempricing-update-full_service').find('div.help-block').html('Full Service required');
		document.getElementById("systempricing-update-full_service").focus();
		return false;
	} else {
		document.getElementById("systempricing-update-full_service").style.borderColor = "";
		$('.field-systempricing-update-full_service').find('div.help-block').html('');
		
	}
	
	if (document.getElementById("systempricing-update-bulk").value == '') {
		document.getElementById("systempricing-update-bulk").style.borderColor = "red";
		$('.field-systempricing-update-bulk').find('div.help-block').html('Bulk required');
		document.getElementById("systempricing-update-bulk").focus();
		return false;
	} else {
		document.getElementById("systempricing-update-bulk").style.borderColor = "";
		$('.field-systempricing-update-bulk').find('div.help-block').html('');
		
	}
	
}

function openFirmmodal(id){
	/*if(document.getElementById('firm_id').value == ''){
		toastr.error('Please Select A Firm to Login');
		document.getElementById("firm_id").style.borderColor = "red";
		document.getElementById("firm_id").focus();
	}else{
		//url= staticurl + 'firm/dashboard'; 
		//location = url;
		document.getElementById("firm_id").style.borderColor = "";
	}
	
	if(document.getElementById('client_id').value == ''){
		toastr.error('Please Select A Firm to Login');
		document.getElementById("client_id").style.borderColor = "red";
		document.getElementById("client_id").focus();
	}else{
		//url= staticurl + 'firm/dashboard'; 
		//location = url;
		document.getElementById("client_id").style.borderColor = "";
	}*/
	if(id== 1){
		$('a#modal_go_firmlist').attr('href', '/firm-list');
		$('#modal-firm-list').modal('show');
	}else{
		$('a#modal_go').attr('href', '/firm-plan/client-plan-years?id=1');
		$('#modal-firm-details').modal('show');
	}
	
}

function addNewplan(){
 
	var value = $('#selected_plan').val();
	if(value != ''){
		$('#add_new_plan').removeClass('cursor-nodrop');
	}else{
		$('#add_new_plan').addClass('cursor-nodrop');
	}
}

function cancelButton(id){
	/*	if(id== 1){
	    $('a#modal_go3').attr('href', '/search');
		$('#cancel_modal').modal('show');
		}else if(id == 2) {
	    $('a#modal_go3').attr('href', '/search');
		$('#cancel_modal').modal('show');
		}else{
		$('a#modal_go3').attr('href', '/search');
		$('#cancel_modal').modal('show');	
		}*/
	
}

function specificLasers(){
	var value = document.getElementById('specific_lasers').value
	
	if(value == 1){
		$('#laser_details').removeClass('hide');
	}else{
		$('#laser_details').addClass('hide');
	}
}

function specificContract(){
	var value = document.getElementById('specific_contract').value
	
	if(value == 1){
		$('#amount').removeClass('hide');
	}else{
		$('#amount').addClass('hide');
	}
}

function addPremiumtiers(){
	var value = document.getElementById('premium_tiers').value
	var rowCount = $('#editable_reinsurance_rate tr').length - 1;
	
	if(value > rowCount){
		$('.select_tiers').html('');
		addCount = value - rowCount ;
	//	var html =;
		switch (addCount){
		case 1:
		$('#editable_reinsurance_rate tr:last').after('<tr>'
                              +'<td id="reinsurance-left-header-'+ parseInt(rowCount+1) +'">'+ parseInt(rowCount+1) +'</td>'
								 +'  <td class="column-1">'
								 + '<select class="form-control reinsurance-rates-td" id="reinsurance-2-'+ parseInt(rowCount+1) +'">'
								 +' <option>Select</option>'
								+' <option>Employee</option>'
								+' <option>Employee + Spouse</option>'
								+' <option>Employee + Child</option>'
								 +'<option>Employee + Child(ren)</option>'
								+' <option>Family</option>'
								+'  <option>Employee + 1</option>'
								+ '  <option>Employee + 2</option>'
								+ '   <option>Employee + 3</option>'
								+'	</select>'
								+'	</td>'
								+ '<td><input type="text" id="reinsurance-3-'+ parseInt(rowCount+1) +'" class="form-control reinsurance-rates-td text-align-right" value="$290.00"></td>'
								 +' <td><input type="text" id="reinsurance-4-'+ parseInt(rowCount+1) +'" class="form-control reinsurance-rates-td text-align-right" value="$9.00"></td>'
								 + '<td><input type="text" id="reinsurance-5-'+ parseInt(rowCount+1) +'" class="form-control reinsurance-rates-td text-align-right" value="$925.00"></td>'
								 + '<td><input type="text" id="reinsurance-6-'+ parseInt(rowCount+1) +'" class="form-control reinsurance-rates-td text-align-right" value="$1156.00"></td>'
								+ '<td class="select_tiers"><select class="form-control" id="premium_tiers" onchange="addPremiumtiers();">'
								+' <option>Select</option>'
																	+	'<option value="1">1 tier</option>'
																	+	'<option value="2">2 tiers</option>'
																	+	'<option value="3">3 tiers</option>'
																	+	'<option value="4">4 tiers</option>'
																	+	'<option value="5">5 tiers</option>'
																	+	'<option value="6">6 tiers</option>'
																+'</select></td>'
																+'</tr>'
							);
		break;
		case 2:
		$('#editable_reinsurance_rate tr:last').after('<tr>'
                             +'<td id="reinsurance-left-header-'+ parseInt(rowCount+1) +'">'+ parseInt(rowCount+1) +'</td>'
								+ '  <td class="column-1">'
								 + '<select class="form-control reinsurance-rates-td" id="reinsurance-2-'+ parseInt(rowCount+1) +'">'
								 +' <option>Select</option>'
								+' <option>Employee</option>'
								+' <option>Employee + Spouse</option>'
								+' <option>Employee + Child</option>'
								 +'<option>Employee + Child(ren)</option>'
								+' <option>Family</option>'
								+'  <option>Employee + 1</option>'
								+ '  <option>Employee + 2</option>'
								+ '   <option>Employee + 3</option>'
								+'	</select>'
								+'	</td>'
								+ '<td><input type="text" id="reinsurance-3-'+ parseInt(rowCount+1) +'" class="form-control reinsurance-rates-td text-align-right" value="$290.00"></td>'
								 +' <td><input type="text" id="reinsurance-4-'+ parseInt(rowCount+1) +'" class="form-control reinsurance-rates-td text-align-right" value="$9.00"></td>'
								 + '<td><input type="text" id="reinsurance-5-'+ parseInt(rowCount+1) +'" class="form-control reinsurance-rates-td text-align-right" value="$925.00"></td>'
								 + '<td><input type="text" id="reinsurance-6-'+ parseInt(rowCount+1) +'" class="form-control reinsurance-rates-td text-align-right" value="$1156.00"></td>'
								+ '<td></td>'
								 + '</tr>'
						  + '<tr>'
                             +'<td id="reinsurance-left-header-'+ parseInt(rowCount+2) +'">'+ parseInt(rowCount+2) +'</td>'
								 +'  <td class="column-1" id="1">'
								 + '<select class="form-control reinsurance-rates-td" id="reinsurance-2-'+ parseInt(rowCount+2) +'">'
								 +' <option>Select</option>'
								+' <option>Employee</option>'
								+' <option>Employee + Spouse</option>'
								+' <option>Employee + Child</option>'
								 +'<option>Employee + Child(ren)</option>'
								+' <option>Family</option>'
								+'  <option>Employee + 1</option>'
								+ '  <option>Employee + 2</option>'
								+ '   <option>Employee + 3</option>'
								+'	</select>'
								+'	</td>'
								+ '<td><input type="text" id="reinsurance-3-'+ parseInt(rowCount+2) +'" class="form-control reinsurance-rates-td text-align-right" value="$290.00"></td>'
								 +' <td><input type="text" id="reinsurance-4-'+ parseInt(rowCount+2) +'" class="form-control reinsurance-rates-td text-align-right" value="$9.00"></td>'
								 + '<td><input type="text" id="reinsurance-5-'+ parseInt(rowCount+2) +'" class="form-control reinsurance-rates-td text-align-right" value="$925.00"></td>'
								 + '<td><input type="text" id="reinsurance-6-'+ parseInt(rowCount+2) +'" class="form-control reinsurance-rates-td text-align-right" value="$1156.00"></td>'
								+ '<td class="select_tiers"><select class="form-control" id="premium_tiers" onchange="addPremiumtiers();">'
								+' <option>Select</option>'
																	+	'<option value="1">1 tier</option>'
																	+	'<option  value="2">2 tiers</option>'
																	+	'<option value="3">3 tiers</option>'
																	+	'<option value="4">4 tiers</option>'
																	+	'<option value="5">5 tiers</option>'
																	+	'<option value="6">6 tiers</option>'
																+'</select></td>'
																+'</tr>'
						   );
		break;
		case 3:
		$('#editable_reinsurance_rate tr:last').after('<tr>'
                             +'<td id="reinsurance-left-header-'+ parseInt(rowCount+1) +'">'+ parseInt(rowCount+1) +'</td>'
								 +'  <td class="column-1">'
								 + '<select class="form-control reinsurance-rates-td" id="reinsurance-2-'+ parseInt(rowCount+1) +'">'
								 +' <option>Select</option>'
								+' <option>Employee</option>'
								+' <option>Employee + Spouse</option>'
								+' <option>Employee + Child</option>'
								 +'<option>Employee + Child(ren)</option>'
								+' <option>Family</option>'
								+'  <option>Employee + 1</option>'
								+ '  <option>Employee + 2</option>'
								+ '   <option>Employee + 3</option>'
								+'	</select>'
								+'	</td>'
								+ '<td><input type="text" id="reinsurance-3-'+ parseInt(rowCount+1) +'" class="form-control reinsurance-rates-td text-align-right" value="$290.00"></td>'
								 +' <td><input type="text" id="reinsurance-4-'+ parseInt(rowCount+1) +'" class="form-control reinsurance-rates-td text-align-right" value="$9.00"></td>'
								 + '<td><input type="text" id="reinsurance-5-'+ parseInt(rowCount+1) +'" class="form-control reinsurance-rates-td text-align-right" value="$925.00"></td>'
								 + '<td><input type="text" id="reinsurance-6-'+ parseInt(rowCount+1) +'" class="form-control reinsurance-rates-td text-align-right" value="$1156.00"></td>'
								+ '<td></td>'
								 + '</tr>'
						  + '<tr>'
                             +'<td id="reinsurance-left-header-'+ parseInt(rowCount+2) +'">'+ parseInt(rowCount+2) +'</td>'
								+ '  <td class="column-1" id="1">'
								 + '<select class="form-control reinsurance-rates-td" id="reinsurance-2-'+ parseInt(rowCount+2) +'">'
								 +' <option>Select</option>'
								+' <option>Employee</option>'
								+' <option>Employee + Spouse</option>'
								+' <option>Employee + Child</option>'
								 +'<option>Employee + Child(ren)</option>'
								+' <option>Family</option>'
								+'  <option>Employee + 1</option>'
								+ '  <option>Employee + 2</option>'
								+ '   <option>Employee + 3</option>'
								+'	</select>'
								+'	</td>'
								+ '<td><input type="text" id="reinsurance-3-'+ parseInt(rowCount+2) +'" class="form-control reinsurance-rates-td text-align-right" value="$290.00"></td>'
								 +' <td><input type="text" id="reinsurance-4-'+ parseInt(rowCount+2) +'" class="form-control reinsurance-rates-td text-align-right" value="$9.00"></td>'
								 + '<td><input type="text" id="reinsurance-5-'+ parseInt(rowCount+2) +'" class="form-control reinsurance-rates-td text-align-right" value="$925.00"></td>'
								 + '<td><input type="text" id="reinsurance-6-'+ parseInt(rowCount+2) +'" class="form-control reinsurance-rates-td text-align-right" value="$1156.00"></td>'
								+ '<td></td>'
								 + '</tr>'
						    + '<tr>'
                             +'<td id="reinsurance-left-header-'+ parseInt(rowCount+3) +'">'+ parseInt(rowCount+3) +'</td>'
								 +'  <td class="column-1" id="1">'
								+ '<select class="form-control reinsurance-rates-td" id="reinsurance-2-'+ parseInt(rowCount+3) +'">'
								 +' <option>Select</option>'
								+' <option>Employee</option>'
								+' <option>Employee + Spouse</option>'
								+' <option>Employee + Child</option>'
								 +'<option>Employee + Child(ren)</option>'
								+' <option>Family</option>'
								+'  <option>Employee + 1</option>'
								+ '  <option>Employee + 2</option>'
								+ '   <option>Employee + 3</option>'
								+'	</select>'
								+'	</td>'
								+ '<td><input type="text" id="reinsurance-3-'+ parseInt(rowCount+3) +'" class="form-control reinsurance-rates-td text-align-right" value="$290.00"></td>'
								 +' <td><input type="text" id="reinsurance-4-'+ parseInt(rowCount+3) +'" class="form-control reinsurance-rates-td text-align-right" value="$9.00"></td>'
								 + '<td><input type="text" id="reinsurance-5-'+ parseInt(rowCount+3) +'" class="form-control reinsurance-rates-td text-align-right" value="$925.00"></td>'
								 + '<td><input type="text" id="reinsurance-6-'+ parseInt(rowCount+3) +'" class="form-control reinsurance-rates-td text-align-right" value="$1156.00"></td>'
								+ '<td class="select_tiers"><select class="form-control" id="premium_tiers" onchange="addPremiumtiers();">'
								+' <option>Select</option>'
																	+	'<option value="1">1 tier</option>'
																	+	'<option value="2">2 tiers</option>'
																	+	'<option value="3">3 tiers</option>'
																	+	'<option value="4">4 tiers</option>'
																	+	'<option value="5">5 tiers</option>'
																	+	'<option value="6">6 tiers</option>'
																+'</select></td>'
																+'</tr>'
						   );
		break;
		case 4:
		$('#editable_reinsurance_rate tr:last').after('<tr>'
                             +'<td id="reinsurance-left-header-'+ parseInt(rowCount+1) +'">'+ parseInt(rowCount+1) +'</td>'
								+ '  <td class="column-1">'
								 + '<select class="form-control reinsurance-rates-td" id="reinsurance-2-'+ parseInt(rowCount+1) +'">'
								 +' <option>Select</option>'
								+' <option>Employee</option>'
								+' <option>Employee + Spouse</option>'
								+' <option>Employee + Child</option>'
								 +'<option>Employee + Child(ren)</option>'
								+' <option>Family</option>'
								+'  <option>Employee + 1</option>'
								+ '  <option>Employee + 2</option>'
								+ '   <option>Employee + 3</option>'
								+'	</select>'
								+'	</td>'
								+ '<td><input type="text" id="reinsurance-3-'+ parseInt(rowCount+1) +'" class="form-control reinsurance-rates-td text-align-right" value="$290.00"></td>'
								 +' <td><input type="text" id="reinsurance-4-'+ parseInt(rowCount+1) +'" class="form-control reinsurance-rates-td text-align-right" value="$9.00"></td>'
								 + '<td><input type="text" id="reinsurance-5-'+ parseInt(rowCount+1) +'" class="form-control reinsurance-rates-td text-align-right" value="$925.00"></td>'
								 + '<td><input type="text" id="reinsurance-6-'+ parseInt(rowCount+1) +'" class="form-control reinsurance-rates-td text-align-right" value="$1156.00"></td>'
								+ '<td></td>'
								 + '</tr>'
						  + '<tr>'
                             +'<td id="reinsurance-left-header-'+ parseInt(rowCount+2) +'">'+ parseInt(rowCount+2) +'</td>'
								+ '  <td class="column-1" id="1">'
								 + '<select class="form-control reinsurance-rates-td" id="reinsurance-2-'+ parseInt(rowCount+2) +'">'
								 +' <option>Select</option>'
								+' <option>Employee</option>'
								+' <option>Employee + Spouse</option>'
								+' <option>Employee + Child</option>'
								 +'<option>Employee + Child(ren)</option>'
								+' <option>Family</option>'
								+'  <option>Employee + 1</option>'
								+ '  <option>Employee + 2</option>'
								+ '   <option>Employee + 3</option>'
								+'	</select>'
								+'	</td>'
								+ '<td><input type="text" id="reinsurance-3-'+ parseInt(rowCount+2) +'" class="form-control reinsurance-rates-td text-align-right" value="$290.00"></td>'
								 +' <td><input type="text" id="reinsurance-4-'+ parseInt(rowCount+2) +'" class="form-control reinsurance-rates-td text-align-right" value="$9.00"></td>'
								 + '<td><input type="text" id="reinsurance-5-'+ parseInt(rowCount+2) +'" class="form-control reinsurance-rates-td text-align-right" value="$925.00"></td>'
								 + '<td><input type="text" id="reinsurance-6-'+ parseInt(rowCount+2) +'" class="form-control reinsurance-rates-td text-align-right" value="$1156.00"></td>'
								+ '<td></td>'
								 + '</tr>'
						    + '<tr>'
                             +'<td id="reinsurance-left-header-'+ parseInt(rowCount+3) +'">'+ parseInt(rowCount+3) +'</td>'
								+ '  <td class="column-1" id="1">'
								+ '<select class="form-control reinsurance-rates-td" id="reinsurance-2-'+ parseInt(rowCount+3) +'">'
								 +' <option>Select</option>'
								+' <option>Employee</option>'
								+' <option>Employee + Spouse</option>'
								+' <option>Employee + Child</option>'
								 +'<option>Employee + Child(ren)</option>'
								+' <option>Family</option>'
								+'  <option>Employee + 1</option>'
								+ '  <option>Employee + 2</option>'
								+ '   <option>Employee + 3</option>'
								+'	</select>'
								+'	</td>'
								+ '<td><input type="text" id="reinsurance-3-'+ parseInt(rowCount+3) +'" class="form-control reinsurance-rates-td text-align-right" value="$290.00"></td>'
								 +' <td><input type="text" id="reinsurance-4-'+ parseInt(rowCount+3) +'" class="form-control reinsurance-rates-td text-align-right" value="$9.00"></td>'
								 + '<td><input type="text" id="reinsurance-5-'+ parseInt(rowCount+3) +'" class="form-control reinsurance-rates-td text-align-right" value="$925.00"></td>'
								 + '<td><input type="text" id="reinsurance-6-'+ parseInt(rowCount+3) +'" class="form-control reinsurance-rates-td text-align-right" value="$1156.00"></td>'
								+ '<td></td>'
								 + '</tr>'
						    + '<tr>'
                             +'<td id="reinsurance-left-header-'+ parseInt(rowCount+4) +'">'+ parseInt(rowCount+4) +'</td>'
								 +'  <td class="column-1" id="1">'
								 + '<select class="form-control reinsurance-rates-td" id="reinsurance-2-'+ parseInt(rowCount+4) +'">'
								 +' <option>Select</option>'
								+' <option>Employee</option>'
								+' <option>Employee + Spouse</option>'
								+' <option>Employee + Child</option>'
								 +'<option>Employee + Child(ren)</option>'
								+' <option>Family</option>'
								+'  <option>Employee + 1</option>'
								+ '  <option>Employee + 2</option>'
								+ '   <option>Employee + 3</option>'
								+'	</select>'
								+'	</td>'
								+ '<td><input type="text" id="reinsurance-3-'+ parseInt(rowCount+4) +'" class="form-control reinsurance-rates-td text-align-right" value="$290.00"></td>'
								 +' <td><input type="text" id="reinsurance-4-'+ parseInt(rowCount+4) +'" class="form-control reinsurance-rates-td text-align-right" value="$9.00"></td>'
								 + '<td><input type="text" id="reinsurance-5-'+ parseInt(rowCount+4) +'" class="form-control reinsurance-rates-td text-align-right" value="$925.00"></td>'
								 + '<td><input type="text" id="reinsurance-6-'+ parseInt(rowCount+4) +'" class="form-control reinsurance-rates-td text-align-right" value="$1156.00"></td>'
								+ '<td class="select_tiers"><select class="form-control" id="premium_tiers" onchange="addPremiumtiers();">'
								+' <option>Select</option>'
																	+	'<option value="1">1 tier</option>'
																	+	'<option  value="2">2 tiers</option>'
																	+	'<option value="3">3 tiers</option>'
																	+	'<option value="4">4 tiers</option>'
																	+	'<option value="5">5 tiers</option>'
																	+	'<option value="6">6 tiers</option>'
																+'</select></td>'
																+'</tr>'
						   );
		break;
		
		case 5:
		$('#editable_reinsurance_rate tr:last').after('<tr>'
                             +'<td id="reinsurance-left-header-'+ parseInt(rowCount+1) +'">'+ parseInt(rowCount+1) +'</td>'
								+ '  <td class="column-1">'
								 + '<select class="form-control reinsurance-rates-td" id="reinsurance-2-'+ parseInt(rowCount+1) +'">'
								 +' <option>Select</option>'
								+' <option>Employee</option>'
								+' <option>Employee + Spouse</option>'
								+' <option>Employee + Child</option>'
								 +'<option>Employee + Child(ren)</option>'
								+' <option>Family</option>'
								+'  <option>Employee + 1</option>'
								+ '  <option>Employee + 2</option>'
								+ '   <option>Employee + 3</option>'
								+'	</select>'
								+'	</td>'
								+ '<td><input type="text" id="reinsurance-3-'+ parseInt(rowCount+1) +'" class="form-control reinsurance-rates-td text-align-right" value="$290.00"></td>'
								 +' <td><input type="text" id="reinsurance-4-'+ parseInt(rowCount+1) +'" class="form-control reinsurance-rates-td text-align-right" value="$9.00"></td>'
								 + '<td><input type="text" id="reinsurance-5-'+ parseInt(rowCount+1) +'" class="form-control reinsurance-rates-td text-align-right" value="$925.00"></td>'
								 + '<td><input type="text" id="reinsurance-6-'+ parseInt(rowCount+1) +'" class="form-control reinsurance-rates-td text-align-right" value="$1156.00"></td>'
								+ '<td></td>'
								 + '</tr>'
						  + '<tr>'
                             +'<td id="reinsurance-left-header-'+ parseInt(rowCount+2) +'">'+ parseInt(rowCount+2) +'</td>'
								+ '  <td class="column-1" id="1">'
								 + '<select class="form-control reinsurance-rates-td" id="reinsurance-2-'+ parseInt(rowCount+2) +'">'
								 +' <option>Select</option>'
								+' <option>Employee</option>'
								+' <option>Employee + Spouse</option>'
								+' <option>Employee + Child</option>'
								 +'<option>Employee + Child(ren)</option>'
								+' <option>Family</option>'
								+'  <option>Employee + 1</option>'
								+ '  <option>Employee + 2</option>'
								+ '   <option>Employee + 3</option>'
								+'	</select>'
								+'	</td>'
								+ '<td><input type="text" id="reinsurance-3-'+ parseInt(rowCount+2) +'" class="form-control reinsurance-rates-td text-align-right" value="$290.00"></td>'
								 +' <td><input type="text" id="reinsurance-4-'+ parseInt(rowCount+2) +'" class="form-control reinsurance-rates-td text-align-right" value="$9.00"></td>'
								 + '<td><input type="text" id="reinsurance-5-'+ parseInt(rowCount+2) +'" class="form-control reinsurance-rates-td text-align-right" value="$925.00"></td>'
								 + '<td><input type="text" id="reinsurance-6-'+ parseInt(rowCount+2) +'" class="form-control reinsurance-rates-td text-align-right" value="$1156.00"></td>'
								+ '<td></td>'
								 + '</tr>'
						    + '<tr>'
                             +'<td id="reinsurance-left-header-'+ parseInt(rowCount+3) +'">'+ parseInt(rowCount+3) +'</td>'
								+ '  <td class="column-1" id="1">'
								+ '<select class="form-control reinsurance-rates-td" id="reinsurance-2-'+ parseInt(rowCount+3) +'">'
								 +' <option>Select</option>'
								+' <option>Employee</option>'
								+' <option>Employee + Spouse</option>'
								+' <option>Employee + Child</option>'
								 +'<option>Employee + Child(ren)</option>'
								+' <option>Family</option>'
								+'  <option>Employee + 1</option>'
								+ '  <option>Employee + 2</option>'
								+ '   <option>Employee + 3</option>'
								+'	</select>'
								+'	</td>'
								+ '<td><input type="text" id="reinsurance-3-'+ parseInt(rowCount+3) +'" class="form-control reinsurance-rates-td text-align-right" value="$290.00"></td>'
								 +' <td><input type="text" id="reinsurance-4-'+ parseInt(rowCount+3) +'" class="form-control reinsurance-rates-td text-align-right" value="$9.00"></td>'
								 + '<td><input type="text" id="reinsurance-5-'+ parseInt(rowCount+3) +'" class="form-control reinsurance-rates-td text-align-right" value="$925.00"></td>'
								 + '<td><input type="text" id="reinsurance-6-'+ parseInt(rowCount+3) +'" class="form-control reinsurance-rates-td text-align-right" value="$1156.00"></td>'
								+ '<td></td>'
								 + '</tr>'
						    + '<tr>'
                             +'<td id="reinsurance-left-header-'+ parseInt(rowCount+4) +'">'+ parseInt(rowCount+4) +'</td>'
								+ '  <td class="column-1" id="1">'
								 + '<select class="form-control reinsurance-rates-td" id="reinsurance-2-'+ parseInt(rowCount+4) +'">'
								 +' <option>Select</option>'
								+' <option>Employee</option>'
								+' <option>Employee + Spouse</option>'
								+' <option>Employee + Child</option>'
								 +'<option>Employee + Child(ren)</option>'
								+' <option>Family</option>'
								+'  <option>Employee + 1</option>'
								+ '  <option>Employee + 2</option>'
								+ '   <option>Employee + 3</option>'
								+'	</select>'
								+'	</td>'
								+ '<td><input type="text" id="reinsurance-3-'+ parseInt(rowCount+4) +'" class="form-control reinsurance-rates-td text-align-right" value="$290.00"></td>'
								 +' <td><input type="text" id="reinsurance-4-'+ parseInt(rowCount+4) +'" class="form-control reinsurance-rates-td text-align-right" value="$9.00"></td>'
								 + '<td><input type="text" id="reinsurance-5-'+ parseInt(rowCount+4) +'" class="form-control reinsurance-rates-td text-align-right" value="$925.00"></td>'
								 + '<td><input type="text" id="reinsurance-6-'+ parseInt(rowCount+4) +'" class="form-control reinsurance-rates-td text-align-right" value="$1156.00"></td>'
								+ '<td></td>'
								 + '</tr>'
						     + '<tr>'
                             +'<td id="reinsurance-left-header-'+ parseInt(rowCount+5) +'">'+ parseInt(rowCount+5) +'</td>'
								+ '  <td class="column-1">'
								 + '<select class="form-control reinsurance-rates-td" id="reinsurance-2-'+ parseInt(rowCount+5) +'">'
								 +' <option>Select</option>'
								+' <option>Employee</option>'
								+' <option>Employee + Spouse</option>'
								+' <option>Employee + Child</option>'
								 +'<option>Employee + Child(ren)</option>'
								+' <option>Family</option>'
								+'  <option>Employee + 1</option>'
								+ '  <option>Employee + 2</option>'
								+ '   <option>Employee + 3</option>'
								+'	</select>'
								+'	</td>'
								+ '<td><input type="text" id="reinsurance-3-'+ parseInt(rowCount+5) +'" class="form-control reinsurance-rates-td text-align-right" value="$290.00"></td>'
								 +' <td><input type="text" id="reinsurance-4-'+ parseInt(rowCount+5) +'" class="form-control reinsurance-rates-td text-align-right" value="$9.00"></td>'
								 + '<td><input type="text" id="reinsurance-5-'+ parseInt(rowCount+5) +'" class="form-control reinsurance-rates-td text-align-right" value="$925.00"></td>'
								 + '<td><input type="text" id="reinsurance-6-'+ parseInt(rowCount+5) +'" class="form-control reinsurance-rates-td text-align-right" value="$1156.00"></td>'
								+ '<td class="select_tiers"><select class="form-control" id="premium_tiers" onchange="addPremiumtiers();">'
								+' <option>Select</option>'
																	+	'<option value="1">1 tier</option>'
																	+	'<option value="2">2 tiers</option>'
																	+	'<option value="3">3 tiers</option>'
																	+	'<option value="4">4 tiers</option>'
																	+	'<option value="5">5 tiers</option>'
																	+	'<option value="6">6 tiers</option>'
																+'</select></td>'
																+'</tr>'
						   );
		break;
		
		
	} 
	
/*	$('#editable_reinsurance_rates').editableTableWidget(
			
				  {editor: $('<input>')}
			
		);*/
	}
	
}

function addReimbursementtrack(){
	$('.add_icon_button').html('');
	var html = '<tr><td><input type="text" id="id-1-5" class="form-control reinsurance-rates-td text-align-right" value="Drug Debates"></td>'
								   +'<td> <select class="form-control reinsurance-rates-td" id="id-2-5">'
									+' <option>Medical Claims</option>'
								+' <option>Dental Claims</option>'
								+' <option>Vision Claims</option>'
								+'	</select></td>'
									+'<td class="add_icon_button"><div class="add-icon"><span class="button-add cursor-pointer" onclick="addReimbursementtrack();">+</span></div></td></tr>';
									
			
	$('#editable_reimbursementtrack tr:last').after(html
							);
}
/*
function addReimbursementtrack(){
	var value = document.getElementById('reimbursement_track').value
	var rowCount = $('#editable_reimbursement_track tr').length - 1;
	
	if(value >= rowCount){
		
		addCount = value - rowCount ;
		var html = '<tr>'
                                   +'<td>1</td>'
                                   +'<td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span" style="display: inline;">Stop Loss Reimbursement</span><input class="tabledit-input form-control input-sm" type="text" name="name" value="Stop Loss Reimbursement" style="display: none;" disabled=""></td>'
                                 +'<td class="tabledit-edit-mode" style="cursor: pointer;"><span class="tabledit-span" style="display: none;">Medical Claims</span><select class="tabledit-input form-control input-sm" name="claims" style=""><option value="1" selected="">Medical Claims</option><option value="2">Vision Claims</option><option value="3">Dental Claims</option></select></td>'
                                   +'</tr>';
		switch (addCount){
		case 1:
		$('#editable_reimbursementtrack tr:last').after(html
							);
		break;
		case 2:
		$('#editable_reimbursement_track tr:last').after(html+html
						   );
		break;
		case 3:
		$('#editable_reimbursement_track tr:last').after(html
								+html
								+html
						   );
		break;
		case 4:
		$('#editable_reimbursement_track tr:last').after(html
								+html
								+html
								+html
						   );
		break;
		
		case 5:
		$('#editable_reimbursement_track tr:last').after(html+html+html+html+html
						   );
		break;
		
		
	} 
	$('#editable_reimbursement_track').Tabledit({
		    url: 'client-medical-self.php',
		    editButton: false,
		    deleteButton: false,
		    hideIdentifier: true,
		
		    columns: {
		    	 identifier: [0, 'id'],
		    	    editable: []
			   
		    },
 
		});

	}
	
}
*/

function addCosttrack(){
		$('.add_costtrack_button').html('');
	var html = ' <tr>'
                                   + '<td><input type="text" id="cost-1-2" class="form-control reinsurance-rates-td text-align-right" value="Wellness Credit"></td>'
									+'<td class="add_costtrack_button"><div class="add-icon"><span class="button-add cursor-pointer"  onclick="addCosttrack();">+</span></div></td>'
                                 +' </tr>';
									
	$('#editable_cost_track tr:last').after(html
							);
}

function addCostitems(){
	var rowCount = $('#editable_cost_items tr').length - 1;
		
		$('.add_costitems_button').html('');
		
								 
	var html = ' <tr>'
                                   + '<td><input type="text" id="costitems-1-'+parseInt(rowCount+1)+'" class="form-control reinsurance-rates-td text-align-right" value=""></td>'
								   + '<td><input type="text" id="costitems-2-'+parseInt(rowCount+1)+'" class="form-control reinsurance-rates-td text-align-right" value=""></td>'
								    + '<td><input type="text" id="costitems-3-'+parseInt(rowCount+1)+'" class="form-control reinsurance-rates-td text-align-right" value=""></td>'
									+'<td class="add_costitems_button" align="center"><div class="add-icon"><span onclick="addCostitems();">+</span></div></td>'
                                 +' </tr>';
									
	$('#editable_cost_items tr:last').after(html
							);
}
addCostitems
/*
function addCosttrack(){
	var value = document.getElementById('cost_track').value
	var rowCount = $('#editable_cost_track tr').length - 1;
	
	if(value >= rowCount){
		var html = '<tr>'
                                    +'<td>1</td>'
                                    +'<td>Adminstrative Fees</td>'
                                 +'</tr>';
		addCount = value - rowCount ;
		switch (addCount){
		case 1:
		$('#editable_cost_track tr:last').after(html
							);
		break;
		case 2:
		$('#editable_cost_track tr:last').after(html
		                                        +html
						   );
		break;
		case 3:
		$('#editable_cost_track tr:last').after(html
		                                        +html
												+html
						   );
		break;
		case 4:
		$('#editable_cost_track tr:last').after(html
		                                        +html
												+html
												+html
						   );
		break;
		
		case 5:
		$('#editable_cost_track tr:last').after(html
		                                        +html
												+html
												+html
												+html
						   );
		break;
		
		
	} 
	
		$('#editable_cost_track').Tabledit({
		    url: 'client-medical-self.php',
		    editButton: false,
		    deleteButton: false,
		    hideIdentifier: true,
		    columns: {
		    	  identifier: [0, 'id'],
		          editable: [[1, 'itemname']]
		    }
		});
	}
	
}
*/
/*
function addEmployeecontribution(){
	var value = document.getElementById('employee_contribution').value
	var rowCount = $('#editable_contributions_track tr').length - 1;
	
	if(value >= rowCount){
		var html = ' <tr id="1">'
                                  +'<td>1</td>'
                                  +'<td class="back-darkgray">tier 1</td>'
								   + '<td class="back-lightyellow tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span" style="display: inline;">Single</span><select class="tabledit-input form-control input-sm" name="tiername" style="display: none;" disabled=""><option value="1" selected="selected">Single</option><option value="2">Employee + Spouse</option><option value="3">Employee + Child</option><option value="4">Employee + Children</option><option value="5">Family</option></select></td>'
									+'<td class="back-lightyellow tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">$99.00</span><input class="tabledit-input form-control input-sm" type="text" name="monthlyrates" value="$99.00" style="display: none;" disabled=""></td>'
									+ '<td class="back-lightyellow tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">68</span><input class="tabledit-input form-control input-sm" type="text" name="mothlyenrollment" value="68" style="display: none;" disabled=""></td>'
                                   +'</tr>';
		addCount = value - rowCount ;
		switch (addCount){
		case 1:
		$('#editable_contributions_track tr:last').after(html
							);
		break;
		case 2:
		$('#editable_contributions_track tr:last').after(html
		                                        +html
						   );
		break;
		case 3:
		$('#editable_contributions_track tr:last').after(html
		                                        +html
												+html
						   );
		break;
		case 4:
		$('#editable_contributions_track tr:last').after(html
		                                        +html
												+html
												+html
						   );
		break;
		
		case 5:
		$('#editable_contributions_track tr:last').after(html
		                                        +html
												+html
												+html
												+html
						   );
		break;
		
		
	} 
	
		$('#editable_contributions_track').Tabledit({
		    url: 'client-medical-self.php',
		    editButton: false,
		    deleteButton: false,
		    hideIdentifier: true,
		    columns: {
		    	  identifier: [0, 'id'],
		          editable: []
		    }
		});
	}
	
}*/

function addEmployeecontribution(){
	
	var rowCount = $('#editable_contributions_track tr').length - 1;
		$('.add_contribution_button').html('');
	var html = '  <tr>'
                               +  '   <td id="contribution-left-header-'+parseInt(rowCount+1)+'">tier '+parseInt(rowCount+1)+'</td>'
								+'	 <td><select class="form-control reinsurance-rates-td" id="contribution-2-'+parseInt(rowCount+1)+'" class="form-control reinsurance-rates-td text-align-right">'
								+' <option>Employee</option>'
								+' <option>Employee + Spouse</option>'
								+' <option>Employee + Child</option>'
								+' <option>Employee + Child(ren)</option>'
								+' <option>Family</option>'
								 +' <option>Employee + 1</option>'
								  + '<option>Employee + 2</option>'
								 +'   <option>Employee + 3</option>'
									+'</select>'
								+'	</td>'
								+	 '  <td><input type="text" id="contribution-3-'+parseInt(rowCount+1)+'" class="form-control reinsurance-rates-td text-align-right" value="99.00"></td>'
								+	 '  <td><input type="text" id="contribution-4-'+parseInt(rowCount+1)+'" class="form-control reinsurance-rates-td text-align-right" value="$68.00"></td>'
								+	'<td class="add_contribution_button"><div class="add-icon"><span class="button-add cursor-pointer" onclick="addEmployeecontribution();">+</span></div></td>'
                                +'  </tr>';
									
	$('#editable_contributions_track tr:last').after(html
							);
}


function addEmployeecontributiontwo(){
	
	var rowCount = $('#editable_contributions_track_two tr').length - 1;
		$('.add_contributiontwo_button').html('');
	var html = '  <tr>'
                               +  '   <td id="contributiontwo-left-header-'+parseInt(rowCount+1)+'">tier '+parseInt(rowCount+1)+'</td>'
								+'	 <td><select class="form-control reinsurance-rates-td" id="contributiontwo-2-'+parseInt(rowCount+1)+'" class="form-control reinsurance-rates-td text-align-right">'
								+' <option>Employee</option>'
								+' <option>Employee + Spouse</option>'
								+' <option>Employee + Child</option>'
								+' <option>Employee + Child(ren)</option>'
								+' <option>Family</option>'
								 +' <option>Employee + 1</option>'
								  + '<option>Employee + 2</option>'
								 +'   <option>Employee + 3</option>'
									+'</select>'
								+'	</td>'
								+	 '  <td><input type="text" id="contributiontwo-3-'+parseInt(rowCount+1)+'" class="form-control reinsurance-rates-td text-align-right" value="99.00"></td>'
								+	 '  <td><input type="text" id="contributiontwo-4-'+parseInt(rowCount+1)+'" class="form-control reinsurance-rates-td text-align-right" value="$68.00"></td>'
								+	'<td class="add_contributiontwo_button"><div class="add-icon"><span class="button-add cursor-pointer" onclick="addEmployeecontributiontwo();">+</span></div></td>'
                                +'  </tr>';
									
	$('#editable_contributions_track_two tr:last').after(html
							);
}


function addEmployeecontributiondental(){
	
	var rowCount = $('#editable_contributions_track_dental tr').length - 1;
		$('.add_contributiondental_button').html('');
	var html = '  <tr>'
                               +  '   <td id="contributiondental-left-header-'+parseInt(rowCount+1)+'">tier '+parseInt(rowCount+1)+'</td>'
								+'	 <td><select class="form-control reinsurance-rates-td" id="contributiondental-2-'+parseInt(rowCount+1)+'" class="form-control reinsurance-rates-td text-align-right">'
								+' <option>Employee</option>'
								+' <option>Employee + Spouse</option>'
								+' <option>Employee + Child</option>'
								+' <option>Employee + Child(ren)</option>'
								+' <option>Family</option>'
								 +' <option>Employee + 1</option>'
								  + '<option>Employee + 2</option>'
								 +'   <option>Employee + 3</option>'
									+'</select>'
								+'	</td>'
								+	 '  <td><input type="text" id="contributiondental-3-'+parseInt(rowCount+1)+'" class="form-control reinsurance-rates-td text-align-right" value="99.00"></td>'
								+	 '  <td><input type="text" id="contributiondental-4-'+parseInt(rowCount+1)+'" class="form-control reinsurance-rates-td text-align-right" value="$68.00"></td>'
								+	'<td class="add_contributiondental_button"><div class="add-icon"><span class="button-add cursor-pointer" onclick="addEmployeecontributiondental();">+</span></div></td>'
                                +'  </tr>';
									
	$('#editable_contributions_track_dental tr:last').after(html
							);
}

function addEmployeecontributiondentaltwo(){
	
	var rowCount = $('#editable_contributions_track_two_dental tr').length - 1;
		$('.add_contributiondentaltwo_button').html('');
	var html = '  <tr>'
                               +  '   <td id="contributiondentaltwo-left-header-'+parseInt(rowCount+1)+'">tier '+parseInt(rowCount+1)+'</td>'
								+'	 <td><select class="form-control reinsurance-rates-td" id="contributiondentaltwo-2-'+parseInt(rowCount+1)+'" class="form-control reinsurance-rates-td text-align-right">'
								+' <option>Employee</option>'
								+' <option>Employee + Spouse</option>'
								+' <option>Employee + Child</option>'
								+' <option>Employee + Child(ren)</option>'
								+' <option>Family</option>'
								 +' <option>Employee + 1</option>'
								  + '<option>Employee + 2</option>'
								 +'   <option>Employee + 3</option>'
									+'</select>'
								+'	</td>'
								+	 '  <td><input type="text" id="contributiondentaltwo-3-'+parseInt(rowCount+1)+'" class="form-control reinsurance-rates-td text-align-right" value="99.00"></td>'
								+	 '  <td><input type="text" id="contributiondentaltwo-4-'+parseInt(rowCount+1)+'" class="form-control reinsurance-rates-td text-align-right" value="$68.00"></td>'
								+	'<td class="add_contributiondentaltwo_button"><div class="add-icon"><span class="button-add cursor-pointer" onclick="addEmployeecontributiondentaltwo();">+</span></div></td>'
                                +'  </tr>';
									
	$('#editable_contributions_track_two_dental tr:last').after(html
							);
}
function addEmployeecontributionvision(){
	
	var rowCount = $('#editable_contributions_track_vision tr').length - 1;
		$('.add_contributionvision_button').html('');
	var html = '  <tr>'
                               +  '   <td id="contributionvision-left-header-'+parseInt(rowCount+1)+'">tier '+parseInt(rowCount+1)+'</td>'
								+'	 <td><select class="form-control reinsurance-rates-td" id="contributionvision-2-'+parseInt(rowCount+1)+'" class="form-control reinsurance-rates-td text-align-right">'
								+' <option>Employee</option>'
								+' <option>Employee + Spouse</option>'
								+' <option>Employee + Child</option>'
								+' <option>Employee + Child(ren)</option>'
								+' <option>Family</option>'
								 +' <option>Employee + 1</option>'
								  + '<option>Employee + 2</option>'
								 +'   <option>Employee + 3</option>'
									+'</select>'
								+'	</td>'
								+	 '  <td><input type="text" id="contributionvision-3-'+parseInt(rowCount+1)+'" class="form-control reinsurance-rates-td text-align-right" value="99.00"></td>'
								+	 '  <td><input type="text" id="contributionvision-4-'+parseInt(rowCount+1)+'" class="form-control reinsurance-rates-td text-align-right" value="$68.00"></td>'
								+	'<td class="add_contributionvision_button"><div class="add-icon"><span class="button-add cursor-pointer" onclick="addEmployeecontributionvision();">+</span></div></td>'
                                +'  </tr>';
									
	$('#editable_contributions_track_vision tr:last').after(html
							);
}

function addEmployeecontributionvisiontwo(){
	
	var rowCount = $('#editable_contributions_track_two_vision tr').length - 1;
		$('.add_contributionvisiontwo_button').html('');
	var html = '  <tr>'
                               +  '   <td id="contributionvisiontwo-left-header-'+parseInt(rowCount+1)+'">tier '+parseInt(rowCount+1)+'</td>'
								+'	 <td><select class="form-control reinsurance-rates-td" id="contributionvisiontwo-2-'+parseInt(rowCount+1)+'" class="form-control reinsurance-rates-td text-align-right">'
								+' <option>Employee</option>'
								+' <option>Employee + Spouse</option>'
								+' <option>Employee + Child</option>'
								+' <option>Employee + Child(ren)</option>'
								+' <option>Family</option>'
								 +' <option>Employee + 1</option>'
								  + '<option>Employee + 2</option>'
								 +'   <option>Employee + 3</option>'
									+'</select>'
								+'	</td>'
								+	 '  <td><input type="text" id="contributionvisiontwo-3-'+parseInt(rowCount+1)+'" class="form-control reinsurance-rates-td text-align-right" value="99.00"></td>'
								+	 '  <td><input type="text" id="contributionvisiontwo-4-'+parseInt(rowCount+1)+'" class="form-control reinsurance-rates-td text-align-right" value="$68.00"></td>'
								+	'<td class="add_contributionvisiontwo_button"><div class="add-icon"><span class="button-add cursor-pointer" onclick="addEmployeecontributionvisiontwo();">+</span></div></td>'
                                +'  </tr>';
									
	$('#editable_contributions_track_two_vision tr:last').after(html
							);
}
/*
function addEmployeecontributiontwo(){
	var value = document.getElementById('employee_contribution_two').value
	var rowCount = $('#editable_contributions_track_two tr').length - 1;
	
	if(value >= rowCount){
		var html = ' <tr>'
                                  +'<td>1</td>'
                                   +'<td class="back-darkgray">tier 1</td>'
								    +'<td class="back-lightyellow tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span" style="display: inline;">Single</span><select class="tabledit-input form-control input-sm" name="name" style="display: none;" disabled=""><option value="1" selected="selected">Single</option><option value="2">Employee + Spouse</option><option value="3">Employee + Child</option><option value="4">Employee + Children</option><option value="5">Family</option></select></td>'
									+'<td class="back-lightyellow tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">$99.00</span><input class="tabledit-input form-control input-sm" type="text" name="rates" value="$99.00" style="display: none;" disabled=""></td>'
									  +'<td class="back-lightyellow tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">68</span><input class="tabledit-input form-control input-sm" type="text" name="enrollment" value="68" style="display: none;" disabled=""></td>'
                                   +'</tr>';
		addCount = value - rowCount ;
		switch (addCount){
		case 1:
		$('#editable_contributions_track_two tr:last').after(html
							);
		break;
		case 2:
		$('#editable_contributions_track_two tr:last').after(html
		                                        +html
						   );
		break;
		case 3:
		$('#editable_contributions_track_two tr:last').after(html
		                                        +html
												+html
						   );
		break;
		case 4:
		$('#editable_contributions_track_two tr:last').after(html
		                                        +html
												+html
												+html
						   );
		break;
		
		case 5:
		$('#editable_contributions_track_two tr:last').after(html
		                                        +html
												+html
												+html
												+html
						   );
		break;
		
		
	} 
	
		$('#editable_contributions_track_two').Tabledit({
		    url: 'client-medical-self.php',
		    editButton: false,
		    deleteButton: false,
		    hideIdentifier: true,
		    columns: {
		    	  identifier: [0, 'id'],
		          editable: []
		    }
		});
		
	}
	
}

*/


function addEmployeecontributioncopy(){
	
	var rowCount = $('#editable_contributions_track_copy tr').length - 1;
		$('.add_contributioncopy_button').html('');
	var html = '  <tr>'
                               +  '   <td id="contributioncopy-left-header-'+parseInt(rowCount+1)+'">tier '+parseInt(rowCount+1)+'</td>'
								+'	 <td><select class="form-control reinsurance-rates-td" id="contributioncopy-2-'+parseInt(rowCount+1)+'" class="form-control reinsurance-rates-td text-align-right">'
								+' <option>Employee</option>'
								+' <option>Employee + Spouse</option>'
								+' <option>Employee + Child</option>'
								+' <option>Employee + Child(ren)</option>'
								+' <option>Family</option>'
								 +' <option>Employee + 1</option>'
								  + '<option>Employee + 2</option>'
								 +'   <option>Employee + 3</option>'
									+'</select>'
								+'	</td>'
								+	 '  <td><input type="text" id="contributioncopy-3-'+parseInt(rowCount+1)+'" class="form-control reinsurance-rates-td text-align-right" value="99.00"></td>'
								+	 '  <td><input type="text" id="contributioncopy-4-'+parseInt(rowCount+1)+'" class="form-control reinsurance-rates-td text-align-right" value="$68.00"></td>'
								+	'<td class="add_contributioncopy_button"><div class="add-icon"><span class="button-add cursor-pointer" onclick="addEmployeecontributioncopy();">+</span></div></td>'
                                +'  </tr>';
									
	$('#editable_contributions_track_copy tr:last').after(html
							);
}


function addEmployeecontributiontwocopy(){
	
	var rowCount = $('#editable_contributions_track_two_copy tr').length - 1;
		$('.add_contributioncopytwo_button').html('');
	var html = '  <tr>'
                               +  '   <td id="contributiontwocopy-left-header-'+parseInt(rowCount+1)+'">tier '+parseInt(rowCount+1)+'</td>'
								+'	 <td><select class="form-control reinsurance-rates-td" id="contributiontwocopy-2-'+parseInt(rowCount+1)+'" class="form-control reinsurance-rates-td text-align-right">'
								+' <option>Employee</option>'
								+' <option>Employee + Spouse</option>'
								+' <option>Employee + Child</option>'
								+' <option>Employee + Child(ren)</option>'
								+' <option>Family</option>'
								 +' <option>Employee + 1</option>'
								  + '<option>Employee + 2</option>'
								 +'   <option>Employee + 3</option>'
									+'</select>'
								+'	</td>'
								+	 '  <td><input type="text" id="contributiontwocopy-3-'+parseInt(rowCount+1)+'" class="form-control reinsurance-rates-td text-align-right" value="99.00"></td>'
								+	 '  <td><input type="text" id="contributiontwocopy-4-'+parseInt(rowCount+1)+'" class="form-control reinsurance-rates-td text-align-right" value="$68.00"></td>'
								+	'<td class="add_contributioncopytwo_button"><div class="add-icon"><span class="button-add cursor-pointer" onclick="addEmployeecontributiontwocopy();">+</span></div></td>'
                                +'  </tr>';
									
	$('#editable_contributions_track_two_copy tr:last').after(html
							);
}
/*
function addEmployeecontributioncopy(){
	var value = document.getElementById('employee_contribution_copy').value
	var rowCount = $('#editable_contributions_track_copy tr').length - 1;
	
	if(value >= rowCount){
		var html = ' <tr id="1">'
                                  +'<td>1</td>'
                                  +'<td class="back-darkgray">tier 1</td>'
								   + '<td class="back-lightyellow tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span" style="display: inline;">Single</span><select class="tabledit-input form-control input-sm" name="tiername" style="display: none;" disabled=""><option value="1" selected="selected">Single</option><option value="2">Employee + Spouse</option><option value="3">Employee + Child</option><option value="4">Employee + Children</option><option value="5">Family</option></select></td>'
									+'<td class="back-lightyellow tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">$99.00</span><input class="tabledit-input form-control input-sm" type="text" name="monthlyrates" value="$99.00" style="display: none;" disabled=""></td>'
									+ '<td class="back-lightyellow tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">68</span><input class="tabledit-input form-control input-sm" type="text" name="mothlyenrollment" value="68" style="display: none;" disabled=""></td>'
                                   +'</tr>';
		addCount = value - rowCount ;
		switch (addCount){
		case 1:
		$('#editable_contributions_track_copy tr:last').after(html
							);
		break;
		case 2:
		$('#editable_contributions_track_copy tr:last').after(html
		                                        +html
						   );
		break;
		case 3:
		$('#editable_contributions_track_copy tr:last').after(html
		                                        +html
												+html
						   );
		break;
		case 4:
		$('#editable_contributions_track_copy tr:last').after(html
		                                        +html
												+html
												+html
						   );
		break;
		
		case 5:
		$('#editable_contributions_track_copy tr:last').after(html
		                                        +html
												+html
												+html
												+html
						   );
		break;
		
		
	} 
	
		$('#editable_contributions_track_copy').Tabledit({
		    url: 'client-medical-self.php',
		    editButton: false,
		    deleteButton: false,
		    hideIdentifier: true,
		    columns: {
		    	  identifier: [0, 'id'],
		          editable: []
		    }
		});
	}
	
}
*/
/*
function addEmployeecontributiontwocopy(){
	var value = document.getElementById('employee_contribution_two_copy').value
	var rowCount = $('#editable_contributions_track_two_copy tr').length - 1;
	
	if(value >= rowCount){
		var html = ' <tr>'
                                  +'<td>1</td>'
                                   +'<td class="back-darkgray">tier 1</td>'
								    +'<td class="back-lightyellow tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span" style="display: inline;">Single</span><select class="tabledit-input form-control input-sm" name="name" style="display: none;" disabled=""><option value="1" selected="selected">Single</option><option value="2">Employee + Spouse</option><option value="3">Employee + Child</option><option value="4">Employee + Children</option><option value="5">Family</option></select></td>'
									+'<td class="back-lightyellow tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">$99.00</span><input class="tabledit-input form-control input-sm" type="text" name="rates" value="$99.00" style="display: none;" disabled=""></td>'
									  +'<td class="back-lightyellow tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">68</span><input class="tabledit-input form-control input-sm" type="text" name="enrollment" value="68" style="display: none;" disabled=""></td>'
                                   +'</tr>';
		addCount = value - rowCount ;
		switch (addCount){
		case 1:
		$('#editable_contributions_track_two_copy tr:last').after(html
							);
		break;
		case 2:
		$('#editable_contributions_track_two_copy tr:last').after(html
		                                        +html
						   );
		break;
		case 3:
		$('#editable_contributions_track_two_copy tr:last').after(html
		                                        +html
												+html
						   );
		break;
		case 4:
		$('#editable_contributions_track_two_copy tr:last').after(html
		                                        +html
												+html
												+html
						   );
		break;
		
		case 5:
		$('#editable_contributions_track_two_copy tr:last').after(html
		                                        +html
												+html
												+html
												+html
						   );
		break;
		
		
	} 
	
		$('#editable_contributions_track_two_copy').Tabledit({
		    url: 'client-medical-self.php',
		    editButton: false,
		    deleteButton: false,
		    hideIdentifier: true,
		    columns: {
		    	  identifier: [0, 'id'],
		          editable: []
		    }
		});
		
	}
	
}
*/
function back(e){
	
	 if (e.rowType == 'data') {
			e.rowElement[0].addEventListener("mouseover", function () {
			  e.rowElement.find("td").css('background', '#ddd');
			  e.rowElement.css("transition", "background-color 0.5s");
			});
			e.rowElement[0].addEventListener("mouseleave", function () {
			  e.rowElement.find("td").css('background', "");
			});
		  }
}

function addLocation(){
		$('#add_location').toggleClass('hide');
		$('#input_add_location').val('');
}
function addLaser(){
		$('#add_laser').toggleClass('hide');
		$('#input_add_laser').val('');
}
function addHasttag(id){
	switch (id){
		case 1:
		window.location.hash = "#home2";
		break;
		case 2:
		window.location.hash = "#profile2";
		break;
		case 3:
		window.location.hash = "#messages2";
		break;
		case 4:
		window.location.hash = "#settings2";
		break;
	} 
}
function changeColor(){
		$('#body_color').toggleClass('blue');
}

/*************new design function **************/


function openDesignfirmmodal(id){
	/*if(document.getElementById('firm_id').value == ''){
		toastr.error('Please Select A Firm to Login');
		document.getElementById("firm_id").style.borderColor = "red";
		document.getElementById("firm_id").focus();
	}else{
		//url= staticurl + 'firm/dashboard'; 
		//location = url;
		document.getElementById("firm_id").style.borderColor = "";
	}
	
	if(document.getElementById('client_id').value == ''){
		toastr.error('Please Select A Firm to Login');
		document.getElementById("client_id").style.borderColor = "red";
		document.getElementById("client_id").focus();
	}else{
		//url= staticurl + 'firm/dashboard'; 
		//location = url;
		document.getElementById("client_id").style.borderColor = "";
	}*/
	if(id== 1){
		$('a#modal_go_firmlist').attr('href', '/design/firm-list');
		$('#modal-firm-list').modal('show');
	}else{
		$('a#modal_go').attr('href', '/firm-plan/client-plan-years?id=1');
		$('#modal-firm-details').modal('show');
	}
	
}




/************* end new disign *******************/





	$(document).ready(function() {
		
		
		 $(document).on('keydown', '.numbers', function (e) {
		 // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A, Command+A
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
             // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
});
	 
							
							$("#monthly_financials .dx-toolbar-before").html('<div class="form-group col-md-12 padding-0" style="min-width:402px;"><label class="font-16 col-xs-3 line-height-30 padding-0" style="color:black;">Plan Year: </label><label class=" col-xs-7 padding-0 font-16 line-height-30" style="color:black;">2016</label></div>');

		 $("#large_claims .dx-toolbar-before").html('<div class="form-group col-md-12 padding-0" style="min-width:402px;"><label class="font-16 col-xs-5 line-height-30 padding-0" style="color:black;">Plan Year Data As of: </label><span class=" col-xs-7 padding-0"><select class="form-control" id="plan_value">'
					+'<option value="Medical &amp; Rx">January 2017</option>'
					+'<option value="Dental">February 2017</option>'
					+'<option value="Vision">March 2017</option>'
					+'</select></span></div>');
	
		$("#pharmacy_performance .dx-toolbar-before").html('<div class="form-group col-md-12 padding-0" style="min-width:402px;"><label class="font-16 col-xs-5 line-height-30 padding-0" style="color:black;">Plan Year Data As of: </label><span class=" col-xs-7"><select class="form-control" id="plan_value">'
							+'<option value="Medical &amp; Rx">January 2017</option>'
							+'<option value="Dental">February 2017</option>'
							+'<option value="Vision">March 2017</option>'
							+'</select></span></div>');
					$("#network_performance .dx-toolbar-before").html('<div class="form-group col-md-12 padding-0" style="min-width:402px;"><label class="font-16 col-xs-6 line-height-30" style="color:black;">Plan Year Data As of: </label><span class=" col-xs-6"><select class="form-control" id="plan_value">'
							+'<option value="Medical &amp; Rx">January 2017</option>'
							+'<option value="Dental">February 2017</option>'
							+'<option value="Vision">March 2017</option>'
							+'</select></span></div>');			
		
		
			
			$('.dropify-firm').dropify({
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
            });
			
		$('#main_tab li[data-toggle="tab"]').on('shown.bs.tab', function (e) {
			
			
			
			
		  var target = $(e.target).attr("href") // activated tab
			switch (target){
				case '#account_setup_block':
						$(this).find( "img" ).attr("src","/images/design/account_setup_sel.png");
						$(this).next().children().attr("src","/images/design/cost_projectionsl.png");
						$(this).next().next().children().attr("src","/images/design/monthly_inputs.png");
						$(this).next().next().next().children().attr("src","/images/design/reports.png");
						break;
				case '#cost_projections_block':
						$(this).prev().children().attr("src","/images/design/account_setup_comp.png");
						$(this).find( "img" ).attr("src","/images/design/cost_projections_sel.png");
						$(this).next().children().attr("src","/images/design/monthly_inputs.png");
						$(this).next().next().children().attr("src","/images/design/reports.png");
						break;
				case '#input_monthly_block':
						$(this).prev().prev().children().attr("src","/images/design/account_setup_comp.png");
						$(this).prev().children().attr("src","/images/design/cost_projections_comp.png");
						$(this).find( "img" ).attr("src","/images/design/monthly_inputs_sel.png");
						$(this).next().children().attr("src","/images/design/reports.png");
						break;
				case '#generate_reports_block':
						$(this).prev().children().attr("src","/images/design/monthly_inputs_comp.png");
						$(this).prev().prev().children().attr("src","/images/design/cost_projections_comp.png");
						$(this).prev().prev().prev().children().attr("src","/images/design/account_setup_comp.png");
						$(this).find( "img" ).attr("src","/images/design/reports_sel.png");
						break;
				
			}
			
		});
		

		var hash = window.location.hash;
		switch (hash){
			case '#home2':
			$("#main-anchor-1").trigger('click');
			break;
			case '#profile2':
			$("#main-anchor-2").trigger('click');
			break;
			case '#messages2':
			$("#main-anchor-3").trigger('click');
			break;
			case '#settings2':
			$("#main-anchor-4").trigger('click');
			break;
		  default:
       $("#main-anchor-1").trigger('click');
	   break;
		}
$(".firm-check-all").change(function () {
							
							
						if($('.firm-check-all').is(':checked')){
							
							$(".firm-checkbox").prop("checked", true);
						}else{
							$(".firm-checkbox").attr("checked", false);
						}
							
						});
						
						 $(document).on('focus', '.reinsurance-rates-td', function () {
					//	$('.reinsurance-rates-td').on('focus', function () {
					//$( ".reinsurance-rates-td" ).focus(function() {
						
  var id = $(this).attr('id') ;
  var ret = id.split("-");
  var type = ret[0];
var columnid = ret[1];
var rowid = ret[2];

$("#"+type+"-column-"+columnid).addClass("font-weight-900");
$("#"+type+"-left-header-"+rowid).addClass("font-weight-900");
 
});
//$( ".reinsurance-rates-td" ).focusout(function() {
	 $(document).on('blur', '.reinsurance-rates-td', function () {
//	$('.reinsurance-rates-td').on('blur', function () {
  var id = $(this).attr('id') ;
   var ret = id.split("-");
   var type = ret[0];
var columnid = ret[1];
var rowid = ret[2];
   if ( $("#"+type+"-column-"+columnid).hasClass( "font-weight-900" ) ) {
	   $("#"+type+"-column-"+columnid).removeClass("font-weight-900");
   }
   if ( $("#"+type+"-left-header-"+rowid).hasClass( "font-weight-900" ) ) {
	   $("#"+type+"-left-header-"+rowid).removeClass("font-weight-900");
   }

});


							$(".tr-back").mouseover(function(){
   // $(this).css("background-color", "#40a9fc");
	 $(this).find(".td-back").css("background-color", "#ddd");
    });
	$(".tr-back").mouseleave(function(){
    //$(this).css("background-color", "transparent");
	 $(this).find(".td-back").css("background-color", "");
    });
	
	$(".tr-back-firm").mouseover(function(){
    $(this).css("background-color", "#ddd");
	// $(this).find(".td-back").css("background-color", "#40a9fc");
    });
	$(".tr-back-firm").mouseleave(function(){
    $(this).css("background-color", "transparent");
	// $(this).find(".td-back").css("background-color", "");
    });
	
	$(".column-td").hover(function () {
		var id= $(this).attr('id');
		hoverTable(id);
		});
		
		
		 $(".price").keypress(function (event) {


             var $this = $(this);
    if ((event.which != 46 || $this.val().indexOf('.') != -1) &&
       ((event.which < 48 || event.which > 57) &&
       (event.which != 0 && event.which != 8))) {
           event.preventDefault();
    }

    var text = $(this).val();
    if ((event.which == 46) && (text.indexOf('.') == -1)) {
        setTimeout(function() {
            if ($this.val().substring($this.val().indexOf('.')).length > 3) {
                $this.val($this.val().substring(0, $this.val().indexOf('.') + 3));
            }
        }, 1);
    }

    if ((text.indexOf('.') != -1) &&
        (text.substring(text.indexOf('.')).length > 2) &&
        (event.which != 0 && event.which != 8) &&
        ($(this)[0].selectionStart >= text.length - 2)) {
            event.preventDefault();
    }      

        });
						});
						
						
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
	
						function hoverTable(id){
							$(".column-"+id).mouseover(function(){
							    $(".column-"+id).css("background-color", "#ddd");
								// $(this).find(".td-back").css("background-color", "#40a9fc");
							    });
								$(".column-"+id).mouseleave(function(){
							    $(".column-"+id).css("background-color", "transparent");
								// $(this).find(".td-back").css("background-color", "");
							    });
						}
					
						