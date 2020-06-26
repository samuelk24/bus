$(document).ready(function(){
	var t=0;
			var time=setTimeout(function() {
				$.ajax({
  				method: "POST",
	  			url: "confirm_tester.php",
	  			data: {},
				success: function(data){
					t=1;
					alert("Reservation Expired! Please Book Ticket Again!");
	}
		})
			}, 600000);
$("input").on('click',function(){
	if(t==1){

	}
		else{
    clearTimeout(time);
    }
  })
		})