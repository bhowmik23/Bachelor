<?php
    include_once "../classes/Crud.php";
    $crud = new Crud();

    $id = $_POST['param_id'];
   
    $result = $crud->getData("SELECT * from registration where id=$id");
    foreach($result as $res){
	  $name = $res['name'];
	  $email = $res['email'];
	  $phone = $res['phone'];
	  $present_address = $res['present_address'];
	  $permanent_address = $res['permanent_address'];
	  $position = $res['position'];
	  $password = md5($res['password']);  
    }
?>

    <input id='e_name' value="<?php echo $name; ?>" type="text"></br>
	<input id='e_email' value="<?php echo $email; ?>" type="email"></br>
	<input id='e_phone' value="<?php echo $phone; ?>" type="text"></br>
	<input id='e_present_address' value="<?php echo $present_address; ?>" type="text"></br>
	<input id='e_permanent_address' value="<?php echo $permanent_address; ?>" type="text"></br>
	<input id='e_position' value="<?php echo $position; ?>" type="text"></br>
	<input id='e_password' value="<?php echo $password; ?>" type="text"></br>
    <input type="button" name="update" class="update" value="Update Info"/>
   <input type="button" onclick="$('#edit_data').slideUp();" value="Cancel">

<script type="text/javascript">
$(document).ready(function(){
	
	$('.update').on('click',function(){
		var id = "<?php echo $id; ?>";
		var name= $('#e_name').val();
		var email = $('#e_email').val();
		var phone = $('#e_phone').val();
		var present_address = $('#e_present_address').val();
		var permanent_address = $('#e_permanent_address').val();
		var position = $('#e_position').val();
		var password = $('#e_password').val();
		$.ajax({
			url:"functions/update.php",
			type:"POST",
			    //{param : value}
			data:{param_id:id,Name:name,Email:email,Phone:phone,Present_address:present_address,Permanent_address:permanent_address,Position:position,Password:password },
			success: function(response){
				if(response == "success"){
					$('#name').val('');
					$('#email').val('');
					$('#phone').val('');
					$('#present_address').val('');
					$('#permanent_address').val('');
					$('#position').val('');
					$('#password').val('');
					$('#edit_data').slideUp();
					$.get('functions/show.php',function(data){
						$('#show_data').html(data);
					})
				}
			}
		})
	})
	
	
})

</script>