<?php
	header('Access-Control-Allow-Origin: *');  
    include_once "../classes/Crud.php";
    $crud = new Crud();
	$result = $crud->getData("SELECT * from furniture order by id DESC");
		
	if($result){
		echo "<table border='1' id='show_table'><thead><tr><th>Title</th>
		<th>Description</th><th>Sale Price</th><th>Rent Price</th<th>Image</th>
		</tr></thead><tbody>";
		foreach($result as $row){
			echo "<tr><td >".$row['title']."</td>";
			echo "<td>".$row['description']."</td>";
			echo "<td>".$row['sale_price']."</td>";
			echo "<td>".$row['rent_price']."</td>";
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
			url:"functions/editFurniture.php",
			type:"POST",
			data:{param_id:id},
			success: function(response){
				$('#edit_furniture').slideDown();
				$('#edit_furniture').html(response);
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
					$.get('functions/showFurniture.php',function(data){
						$('#show_furniture').html(data);
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