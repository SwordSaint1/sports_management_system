<script type="text/javascript">
	
const load_approved =()=>{
	$('#spinner').css('display','block');
	var facility_name = document.getElementById('facility_name_approved_req').value;
	var id_num = document.getElementById('id_num_approved').value;

	$.ajax({
      url: '../../process/requester/approved.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'fetch_approved',
                    facility_name:facility_name,
                    id_num:id_num
                },success:function(response){
                   document.getElementById('list_of_approved_req').innerHTML = response;
                   $('#spinner').fadeOut(function(){                       
                    });
                }
   });
}		
</script>