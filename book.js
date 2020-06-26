$(document).ready(function(){
$count=0;
	$("i").on('click',function(){
    var id=$(this).data('id')
    $btn = $(this);
		if ($(this).hasClass('a')) {
  			action='unbook';
        $count=$count-1;
  		} else{
        if ($(this).hasClass('b')){
          alert("This Seat Is Already Booked");
        }
        else{
  			action = 'book';
        $count=$count+1;
        }
  		}
  		$.ajax({
  			method: "POST",
  			url: "tester.php",
  			data: { 
           'action':action,
           'id':id,
           'count':$count
        },
  			success: function(data){
          if(action=="unbook"){
            $btn.removeClass('a');
          }
          else{
            $btn.addClass('a');
          }
          $total=parseInt(data)*$count;
  				$('#hell').html("Total Fare:     "+data); 
          


  			}
		})
	});
});