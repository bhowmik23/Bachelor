<?php
	header('Access-Control-Allow-Origin: *');  
    include_once "../classes/Crud.php";
    $crud = new Crud();
	$result = $crud->getData("SELECT * from flat order by id DESC");
		
	if($result){
		echo "<table border='1' id='show_table'><thead><tr><th>Name</th>
		<th>Email</th><th>Phone</th><th>Address</th><th>Description</th><th>Image</th>
		<th>cost</th></tr></thead><tbody>";
		foreach($result as $row){
			echo "<tr><td >".$row['name']."</td>";
			echo "<td>".$row['email']."</td>";
			echo "<td>".$row['phone']."</td>";
			echo "<td>".$row['address']."</td>";
			echo "<td>".$row['description']."</td>";
			echo "<td>".$row['cost']."</td>";
			echo "<td>".$row['image']."</td>";
			
			
			echo "<td><button id='".$row['id']."' class='delete'>Delete</button></td></tr> ";
		}
		echo "</table></tbody>";
	}else{
		echo "No Data Found! Please Add Data";
	}
?>
<script type="text/javascript">
$(document).ready(function(){
	
	$('#show_table').DataTable();
	
	$('.editView').on('click',function(){
		var id = $(this).attr(id);
		// alert(id);
		$.ajax({
			url:"functions/editFlat.php",
			type:"POST",
			data:{param_id:id},
			success: function(response){
				$('#edit_flat').slideDown();
				$('#edit_flat').html(response);
			}
		})
	})
	
	$('.delete').on('click',function(){
		var Delete= confirm("Do you want to delete??");
    	if (Delete == true){
        	var id = $(this).attr('id');
			$.ajax({
			url:"functions/delete.php",
			type:"POST",
			data:{param_id:id},
			success: function(response){
				if(response == "success"){
					$.get('functions/showFlat.php',function(data){
						$('#show_flat').html(data);
					})
				}
			}
		})
    	}else{
        	alert("cancel!!");
    	}			
	})	
})

</script>