<?php
	header('Access-Control-Allow-Origin: *');  
    include_once "../classes/Crud.php";
	$crud = new Crud();
	$Position = "student";
	$result = $crud->getData("SELECT * from registration where position= '$Position'");
	if($result){
		echo "<table border='1' id='show_table'><thead><tr><th>Name</th>
		<th>Email</th><th>Phone</th><th>Present Address</th><th>Permanent Address</th><th>Position</th>
		<th>Action</th></tr></thead><tbody>";
		foreach($result as $row){
			echo "<tr><td >".$row['name']."</td>";
			echo "<td>".$row['email']."</td>";
			echo "<td>".$row['phone']."</td>";
			echo "<td>".$row['present_address']."</td>";
			echo "<td>".$row['permanent_address']."</td>";
			echo "<td>".$row['position']."</td>";
			
			
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
		var id = $(this).attr('id');
		// alert(id);
		$.ajax({
			url:"functions/edit.php",
			type:"POST",
			data:{param_id:id},
			success: function(response){
				$('#edit_data').slideDown();
				$('#edit_data').html(response);
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
					$.get('functions/show.php',function(data){
						$('#show_data').html(data);
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