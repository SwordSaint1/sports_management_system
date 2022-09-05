<script type="text/javascript">
	
const load_equipments =()=>{
	$('#spinner').css('display','block');
	var equipment_name = document.getElementById('equipment_name').value;

	$.ajax({
      url: '../../process/admin/equipment.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'fetch_equipment',
                    equipment_name:equipment_name
                },success:function(response){
                   document.getElementById('list_of_equipments').innerHTML = response;
                   $('#spinner').fadeOut(function(){                       
                    });
                }
   });
}		


</script>