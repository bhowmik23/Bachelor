<?php
	session_start();
	if(!isset($_SESSION['id'])){
		header('location:loginUser.php');
	}
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <!-- Custom fonts for this template -->
    <link href='vendor/fontawesome-free/css/all.min.css' rel='stylesheet' type='text/css'>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.0.8/css/all.css'>
    <link rel='stylesheet' href='css/style.css'>
    <title>Bachelor</title>
    <style>

    </style>

</head>

<body>

    <!-- navbar -->
    <div class='bs-example' id='add_data'>
        <nav class='navbar navbar-expand-md navbar-dark bg-dark'>
            <a href='index.html' class='navbar-brand'>Bachelor</a>
            <button type='button' class='navbar-toggler' data-toggle='collapse' data-target='#navbarCollapse'>
                <span class='navbar-toggler-icon'></span>
            </button>

            <div class='collapse navbar-collapse justify-content-between' id='navbarCollapse'>
                <div class='navbar-nav'>
                    <a href='index.html' class='nav-item nav-link active'>Home</a>
                    <div class='nav-item dropdown'>
                        <a href='#' class='nav-link dropdown-toggle' data-toggle='dropdown'>Student</a>
                        <div class='dropdown-menu'>
                            <a href='registration.html' class='dropdown-item'>Registration</a>
                            <a href='#' class='dropdown-item'>View Profile</a>
                            <a href='#' class='dropdown-item'>Update Profile</a>
                            <a href='#' class='dropdown-item'>Delete Profile</a>
                        </div>
                    </div>
                    <div class='nav-item dropdown'>
                        <a href='#' class='nav-link dropdown-toggle' data-toggle='dropdown'>Job Holder</a>
                        <div class='dropdown-menu'>
                            <a href='#' class='dropdown-item'>Registration</a>
                            <a href='#' class='dropdown-item'>View Profile</a>
                            <a href='#' class='dropdown-item'>Update Profile</a>
                            <a href='#' class='dropdown-item'>Delete Profile</a>
                        </div>
                    </div>
                    <div class='nav-item dropdown'>
                        <a href='#' class='nav-link dropdown-toggle' data-toggle='dropdown'>Furniture</a>
                        <div class='dropdown-menu'>
                            <a href='#' class='dropdown-item'>Buy</a>
                            <a href='#' class='dropdown-item'>Rent</a>
                        </div>
                    </div>
                    <div class='nav-item dropdown'>
                        <a href='#' class='nav-link dropdown-toggle' data-toggle='dropdown'>Flat</a>
                        <div class='dropdown-menu'>
                            <a href='#' class='dropdown-item'>Post</a>
                            <a href='#' class='dropdown-item'>Rent</a>
                        </div>
                    </div>
                    <div class='nav-item dropdown'>
                        <a href='#' class='nav-link dropdown-toggle' data-toggle='dropdown'>Admin</a>
                        <div class='dropdown-menu'>
                            <a href='#' class='dropdown-item'>Student</a>
                            <a href='#' class='dropdown-item'>jobholder</a>
                            <a href='#' class='dropdown-item'>Add Furniture</a>
                        </div>
                    </div>
                </div>
                <form class='form-inline'>
                    <div class='input-group'>
                        <input type='text' class='form-control' placeholder='Search'>
                        <div class='input-group-append'>
                            <button type='button' class='btn btn-secondary'><i class='fa fa-search'></i></button>
                        </div>
                    </div>
                </form>

            </div>
        </nav>
    </div>
    <!-- navbar -->

    <?php
    include_once "classes/Crud.php";
    $crud = new Crud();

    // $id = $_POST['param_id'];
    $id = $_SESSION['id'];
   
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
    <!-- registration form -->
    <div class='container text-center' class='editView'>
        <div class='card bg-light text-center'>
            <article class='card-body mx-auto' style='max-width: 400px;'>
                <h4 class='card-title mt-3 text-center'>Your Profile</h4>
                <form method="POST">
                    <div class='form-group input-group'>
                        <div class='input-group-prepend'>
                            <span class='input-group-text'> <i class='fa fa-user'></i> </span>
                        </div>
                        <input name='e_name' id='e_name' class='form-control' value='<?php echo $name; ?>' type='text' disabled >
                    </div>
                    <div class='form-group input-group'>
                        <div class='input-group-prepend'>
                            <span class='input-group-text'> <i class='fa fa-envelope'></i> </span>
                        </div>
                        <input name='e_email' id='e_email' class='form-control' value='<?php echo $email; ?>' type='email'disabled >
                    </div> 
                    <div class='form-group input-group'>
                        <div class='input-group-prepend'>
                            <span class='input-group-text'> <i class='fa fa-phone'></i> </span>
                        </div>
                        <div class='input-group-text'>+880</div>
                        <input name='e_phone' id='e_phone' class='form-control' value='<?php echo $phone; ?>' type='text' >
                    </div> 
                    <div class='form-group input-group'>
                        <div class='input-group-prepend'>
                            <span class='input-group-text'> <i class='fa fa-home'></i> </span>
                        </div>
                        <input name='e_present_address' id='e_present_address' class='form-control' value='<?php echo $present_address; ?>' type='text' >
                    </div>
                    <div class='form-group input-group'>
                        <div class='input-group-prepend'>
                            <span class='input-group-text'> <i class='fa fa-home'></i> </span>
                        </div>
                        <input name='e_permanent_address' id='e_permanent_address' class='form-control' value='<?php echo $permanent_address; ?>' type='text' disabled >
                    </div> 
                    <div class='form-group input-group'>
                        <div class='input-group-prepend'>
                            <span class='input-group-text'> <i class='fa fa-building'></i> </span>
                        </div>
                    <input name='e_position' id='e_position' class='form-control' value='<?php echo $position; ?>' type='text' >
                    </div> 
                    <div class="form-group">  
                        <button type="submit" name="update" id="update" class="btn btn-primary btn-block update"> Update Profile </button>
                    </div> 
                    </form>
            </article>
        </div> 
    </div>

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
		$.ajax({
			url:"functions/update.php",
			type:"POST",
			    //{param : value}
			data:{param_id:id,Name:name,Email:email,Phone:phone,Present_address:present_address,Permanent_address:permanent_address,Position:position },
			success: function(response){
				if(response == "success"){

					$('#name').val('');
					$('#email').val('');
					$('#phone').val('');
					$('#present_address').val('');
					$('#permanent_address').val('');
					$('#position').val('');
					$.get('functions/show.php',function(data){
						$('#show_data').html(data);
					})
				}
			}
		})
	})
	
	
})

</script>

<!-- 
    <div id="edit_data"></div></br>
	<div id="show_data"></div> -->

    
   
    
    <!--container end.//-->
  <!-- Footer -->
    <footer class='bg-dark'>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-8 col-md-10 mx-auto'>
                    <ul class='list-inline text-center'>
                        <li class='list-inline-item'>
                            <a href='#'>
                                <span class='fa-stack fa-lg'>
                                    <i class='fas fa-circle fa-stack-2x'></i>
                                    <i class='fab fa-twitter fa-stack-1x fa-inverse'></i>
                                </span>
                            </a>
                        </li>
                        <li class='list-inline-item'>
                            <a href='#'>
                                <span class='fa-stack fa-lg'>
                                    <i class='fas fa-circle fa-stack-2x'></i>
                                    <i class='fab fa-facebook-f fa-stack-1x fa-inverse'></i>
                                </span>
                            </a>
                        </li>
                        <li class='list-inline-item'>
                            <a href='#'>
                                <span class='fa-stack fa-lg'>
                                    <i class='fas fa-circle fa-stack-2x'></i>
                                    <i class='fab fa-instagram fa-stack-1x fa-inverse'></i>
                                </span>
                            </a>
                        </li>
                        <li class='list-inline-item'>
                            <a href='#'>
                                <span class='fa-stack fa-lg'>
                                    <i class='fas fa-circle fa-stack-2x'></i>
                                    <i class='fab fa-github fa-stack-1x fa-inverse'></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <p class='copyright text-muted text-center'>Copyright &copy; bachelor.com 2019</p>


                </div>
            </div>
        </div>
    </footer>
    <!-- Footer -->
</body>

</html>




