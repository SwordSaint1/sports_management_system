<script type="text/javascript">
const load_players =()=>{
	$('#spinner').css('display','block');
	var id_number = document.getElementById('player_id_number').value;

	$.ajax({
      url: '../../process/admin/player.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'fetch_player',
                    id_number:id_number
                },success:function(response){
                   document.getElementById('list_of_players').innerHTML = response;
                   $('#spinner').fadeOut(function(){                       
                    });
                }
   });
}	

const register_player =()=>{
	var id_number = document.getElementById('id_num').value;
	var age = document.getElementById('age').value;
	var gender = document.getElementById('gender').value;
	var weight = document.getElementById('weight').value;
	var height = document.getElementById('height').value;
	var sports = document.getElementById('sports').value;
	var position = document.getElementById('position').value;
	var medical = document.getElementById('medical').value;
	var injury = document.getElementById('injury').value;
	var contact_no = document.getElementById('contact_no').value;
	var address = document.getElementById('address').value;
	var contact_p_name = document.getElementById('contact_p_name').value;
	var contact_p_no = document.getElementById('contact_p_no').value;

	if (id_number == '') {
		swal('Information','Please Input ID Number','info');
	}else if(age == ''){
		swal('Information','Please Input Age','info');
	}else if(gender == ''){
		swal('Information','Please Select Gender','info');
	}else if(weight == ''){
		swal('Information','Please Input Weight','info');
	}else if(height == ''){
		swal('Information','Please Input Height','info');
	}else if(sports == ''){
		swal('Information','Please Input Sports Playing / Intersted to play','info');
	}else if(position == ''){
		swal('Information','Please Input N/A if None','info');
	}else if(medical == ''){
		swal('Information','Please Input N/A if None','info');
	}else if(injury == ''){
		swal('Information','Please Input N/A if None','info');
	}else if(contact_no == ''){
		swal('Information','Please Input Contact No','info');
	}else if(address == ''){
		swal('Information','Please Input Address','info');
	}else if(contact_p_name == ''){
		swal('Information','Please Input Contact Person Name','info');
	}else if(contact_p_no == ''){
		swal('Information','Please Input Contact Person Contact No','info');
	}else{
	$.ajax({
		url: '../../process/admin/player.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'register_player',
                    id_number:id_number,
					age:age,
					gender:gender,
					weight:weight,
					height:height,
					sports:sports,
					position:position,
					medical:medical,
					injury:injury,
					contact_no:contact_no,
					address:address,
					contact_p_name:contact_p_name,
					contact_p_no:contact_p_no
                },success:function(response){

                   if (response == 'Already Exist') {
                   	swal('Information','Data Already Exist!','info');
                   	 $('#id_num').val('');
                     $('#age').val('');
                     $('#gender').val('');
                     $('#weight').val('');
                     $('#height').val('');
                     $('#sports').val('');
                     $('#position').val('');
                     $('#medical').val('');
                     $('#injury').val('');
                     $('#contact_no').val('');
                     $('#address').val('');
                     $('#contact_p_name').val('');
                     $('#contact_p_no').val('');
                   }
                   else if (response == 'success') {
                   	swal('Success','Successfully Registered!','success');
                    load_players();
                     $('#id_num').val('');
                     $('#age').val('');
                     $('#gender').val('');
                     $('#weight').val('');
                     $('#height').val('');
                     $('#sports').val('');
                     $('#position').val('');
                     $('#medical').val('');
                     $('#injury').val('');
                     $('#contact_no').val('');
                     $('#address').val('');
                     $('#contact_p_name').val('');
                     $('#contact_p_no').val('');
                   }else{
                   	swal('Error','Error!','error');      
                   }
                }
	});
}
}
	
</script>