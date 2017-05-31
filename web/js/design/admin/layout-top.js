$(function(){
				
	 var firmusers = [
 		                     "Ravi teja", "Praveen Singh", "Ranjith", "Mahesh", "Vinod", "Sainath",
 		                 ];

 		                 $.typeahead({
 		                     input: "#example-firm-login",
 		                     order: "asc",
 		                     minLength: 1,
 		                     source: {
 		                         data: firmusers
 		                     },
 		                     cancelButton: false
 		                 });
						 
	 var firmuser = [
 		                     "Ravi teja", "Praveen Singh", "Ranjith", "Mahesh", "Vinod", "Sainath",
 		                 ];

 		                 $.typeahead({
 		                     input: "#example-client-login",
 		                     order: "asc",
 		                     minLength: 1,
 		                     source: {
 		                         data: firmuser
 		                     },
 		                     cancelButton: false
 		                 });
						 
});
 		                 			
	