<script type="text/javascript">
	
const load_returned =()=>{
	$('#spinner').css('display','block');
	var facility_name = document.getElementById('facility_name_returned_req').value;
	var id_num = document.getElementById('id_num_returned').value;

	$.ajax({
      url: '../../process/requester/returned.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'fetch_returned',
                    facility_name:facility_name,
                    id_num:id_num
                },success:function(response){
                   document.getElementById('list_of_returned_req').innerHTML = response;
                   $('#spinner').fadeOut(function(){                       
                    });
                }
   });
}		
</script>