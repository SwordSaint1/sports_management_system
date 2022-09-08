<script type="text/javascript">
	
const load_disapproved =()=>{
	$('#spinner').css('display','block');
	var facility_name = document.getElementById('facility_name_disapproved_req').value;
	var id_num = document.getElementById('id_num_disapproved').value;

	$.ajax({
      url: '../../process/requester/disapproved.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'fetch_disapproved',
                    facility_name:facility_name,
                    id_num:id_num
                },success:function(response){
                   document.getElementById('list_of_disapproved_req').innerHTML = response;
                   $('#spinner').fadeOut(function(){                       
                    });
                }
   });
}		
</script>