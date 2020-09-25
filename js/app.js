$(document).ready(function(){
	
	// ----registration-----

	$.get('functions/show.php',function(data){
		$('#show_data').html(data);
	})
	
	$('#addData').click(function(){
		
		var name = $('#name').val();
		var email = $('#email').val();
		var phone = $('#phone').val();
		var present_address = $('#present_address').val();
		var permanent_address = $('#permanent_address').val();
		var position = $('#position option:selected').val();
		var password = $('#password').val();
		alert("Account Create Successffully");
		
		//console.log(student_id);
		$.ajax({
			url:"functions/add.php",
			type:"POST",
			data:{Name:name,Email:email,Phone:phone,Present_address:present_address,Permanent_address:permanent_address,Position:position,Password:password },
			success: function(response){
				// console.log(response);
				if(response == "success"){
					$('#name').val('');
					$('#email').val('');
					$('#phone').val('');
					$('#present_address').val('');
					$('#permanent_address').val('');
					$('#position option:selected').val('');
					$('#password').val('');	
					$.get('functions/show.php',function(data){
						$('#show_data').html(data);
					})
					
				}
				
			}
		})
	})

	// ----Flat post-----

	$.get('functions/showFlat.php',function(data){
		$('#show_flat').html(data);
	})

	$('#addFlat').click(function(){
		
		var name = $('#name').val();
		var email = $('#email').val();
		var phone = $('#phone').val();
		var address = $('#address').val();
		var description = $('#description').val();
		// var image = $('#image').val();
		var cost = $('#cost').val();
		var image = $('#image').val();
        // FormData.append('image',image);
		
		alert("Account Create Successffully");
		
		//console.log(student_id);
		$.ajax({
			url:"functions/addFlat.php",
			type:"POST",
			data:{Name:name,Email:email,Phone:phone,Address:address,Description:description,Cost:cost,Image:image},
			success: function(response){
				// console.log(response);
				if(response != 0){
					$('#name').val('');
					$('#email').val('');
					$('#phone').val('');
					$('#address').val('');
					$('#description').val('');
					$('#cost').val('');
					$('#image').val('');
					// $("#image").attr("src",response);	
					$.get('functions/showFlat.php',function(data){
						$('#show_flat').html(data);
					})
					
				}
				
			}
		})
	})

	// ----Furniture post----

	$.get('functions/showFurniture.php',function(data){
		$('#show_furniture').html(data);
	})

	$('#addFurniture').click(function(){
		
		var title = $('#title').val();
		var description = $('#description').val();
		var sale_price = $('#sale_price').val();
		var rent_price = $('#rent_price').val();
		var image = $('#image').val();
        // FormData.append('image',image);
		alert("Account Create Successffully");
		
		$.ajax({
			url:"functions/addFurniture.php",
			type:"POST",
			data:{Title:title,Description:description,Sale_price:sale_price,Rent_price:rent_price,Image:image},
			success: function(response){
				console.log(response);
				if(response != 0){
					$('#title').val('');
					$('#description').val('');
					$('#sale_price').val('');
					$('#rent_price').val('');
					$('#image').val('');
					// $("#image").attr("src",response);	
					$.get('functions/showFurniture.php',function(data){
						$('#show_furniture').html(data);
					})
					
				}
				
			}
		})
	})

	// -----Log in-------
	// $('#login_form').on('submit', function(event){
		$("#loginform").on("submit",function(e){
			$('#uemail').html('');
			$('#upass').html('');
			$('#message').html('');
				
				var email=$("#email").val();
				var password=$("#password").val();
				console.log(email);
				// alert('ok');
				if($("#email").val()==""){
					   $("#uemail").html("Please enter email.");
					   $("#uname").css("color", "red");
					   $("#email").css("border", "1px solid grey");
					   $("#email").focus();
					 }
				
				else if($("#password").val()==""){
					  $("#upass").html("Please enter password.");
					   $("#upass").css("color", "red");
					   $("#password").css("border", "1px solid grey");
					  $("#password").focus();
				}
			  else
			  {
				   $.ajax({
					type:"POST",
					url:"functions/Login.php",
					data:{"email":email,"password":password},
					success:function(result){
					  //alert(result);
					 if(result==1){
					   //alert("invalid");
						$("#message").html("Invalid Email-id/Password");
						 $("#message").css("color", "red");
						}
						else{
						$("#message").html("Successfully Login");
						window.location='admin.php';
				   }
				  }
		 
			});
		 
		}
		 
		e.preventDefault();
		 
	});
	
	
	$("#loginformUser").on("submitUser",function(e){
		$('#uemail').html('');
		$('#upass').html('');
		$('#message').html('');
			
			var email=$("#email").val();
			var password=$("#password").val();
			console.log(email);
			// alert('ok');
			if($("#email").val()==""){
				   $("#uemail").html("Please enter email.");
				   $("#uname").css("color", "red");
				   $("#email").css("border", "1px solid grey");
				   $("#email").focus();
				 }
			
			else if($("#password").val()==""){
				  $("#upass").html("Please enter password.");
				   $("#upass").css("color", "red");
				   $("#password").css("border", "1px solid grey");
				  $("#password").focus();
			}
		  else
		  {
			   $.ajax({
				type:"POST",
				url:"functions/Login.php",
				data:{"email":email,"password":password},
				success:function(result){
				  //alert(result);
				 if(result==1){
				   //alert("invalid");
					$("#message").html("Invalid Email-id/Password");
					 $("#message").css("color", "red");
					}
					else{
					$("#message").html("Successfully Login");
					window.location='index.php';
			   }
			  }
	 
		});
	 
	}
	 
	e.preventDefault();
	 
});	 
	 
});
