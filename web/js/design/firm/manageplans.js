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



		function changePlanyear(){
			var planyear = document.getElementById('plan_year_value').value;
			if(planyear == 1){
				url= staticurl + 'firm/clients/manageplans?id=1'; 
	              location = url ;
			}else if(planyear == 2){
				url= staticurl + 'firm/clients/manageplans?id=2'; 
		location = url ;
			}else{
				url= staticurl + 'firm/clients/manageplans?id=3'; 
		location = url ;
		
		}
		}