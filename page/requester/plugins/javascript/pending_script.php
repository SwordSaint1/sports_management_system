<script type="text/javascript">
	
const load_pending =()=>{
	$('#spinner').css('display','block');
	var facility_name = document.getElementById('facility_name_pending_req').value;
	var id_num = document.getElementById('id_num_pending').value;

	$.ajax({
      url: '../../process/requester/pending.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'fetch_pending',
                    facility_name:facility_name,
                    id_num:id_num
                },success:function(response){
                   document.getElementById('list_of_pending_req').innerHTML = response;
                   $('#spinner').fadeOut(function(){                       
                    });
                }
   });
}		
</script>