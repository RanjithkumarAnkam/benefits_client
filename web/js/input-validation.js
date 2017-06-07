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


		 $(document).on('keydown', '.no-cents', function (e) {
		 // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13]) !== -1 ||
             // Allow: Ctrl+A, Command+A
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
             // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105) ||  e.keyCode == 110 || e.keyCode == 190) {
            e.preventDefault();
        }
		
});
  $(document).on('blur', '.no-cents', function (e) {
  var $this = $(this);
      var num = $this.val().replace(/,/g, '');
      $this.val(num.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,"));
	});  
	  
  $(document).on('keydown', '.alphanumbers', function (e) {
        if (e.shiftKey || e.ctrlKey || e.altKey) {
           e.preventDefault();
        } 
        else {
            var key = e.keyCode;
            if (!((key == 8) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90) || (key >= 48 && key <= 57) || (key >= 96 && key <= 105))) {
               e.preventDefault();
            }
        }
    });
	/*
	$(document).on('keypress', '.firmname', function (e) {
	    if (e.shiftKey || e.ctrlKey || e.altKey) {
           e.preventDefault();
        } 
        else {
            var key = e.keyCode;
            if (!((key == 8) || (key == 46) ||(key == 190) ||(key == 188) ||(key == 32) || (key == 9) ||(key == 38) ||(key == 35) || (key >= 65 && key <= 90) || (key >= 48 && key <= 57) || (key >= 96 && key <= 105))) {
               e.preventDefault();
            }
        }
		});*/
	 
	
	  $(document).on('keydown', '.alpha', function (e) { 
		   		var key = e.keyCode;
				if (!((key == 8) || (key == 9) || (key == 46) || (key == 32) || (key == 14)  || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
		   		e.preventDefault();
		   		}
				
				
		   		});
				
	 $(document).on('keydown', '.alpha-name', function (e) { 
		   	  if (e.shiftKey || e.ctrlKey || e.altKey) {
           e.preventDefault();
        } 
        else {
            var key = e.keyCode;
            if (!((key == 8) || (key == 46) ||(key == 32) ||(key == 190) ||(key == 188) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90) || (key >= 48 && key <= 57) || (key >= 96 && key <= 105))) {
               e.preventDefault();
            }
        }
				
		   		});
				
	/*$(document).on('keydown', '.firmname', function (e) { 
				var key = e.keyCode;
				if (!((key == 8) ||(key == 32) ||(key == 190) ||(key == 188) || (key == 46) || (key >= 35 && key <= 40)   ||(key == 55) || (key >= 65 && key <= 90) || (key >= 96 && key <= 105))) {
				e.preventDefault();
				}
				console.log(key);
				
				});
	
	 });
	 */
	 });
	 
	 function firmname(e){
		        var k;
		        document.all ? k = e.keyCode : k = e.which;
// console.log(k);
		        return ((k > 64 && k < 91) || (k > 96 && k < 123) || (k > 47 && k <= 57) || k == 190||k == 188||k == 32||k == 9||k == 38||k == 35||k == 44||k == 46||k == 45);
		        }
				
	function username(e){
	var k;
	document.all ? k = e.keyCode : k = e.which;
	return ((k > 64 && k < 91) || (k > 96 && k < 123)  || k == 190||k == 188||k == 32||k == 9 ||k == 35||k == 44||k == 45  ||k == 46);
	}