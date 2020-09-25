<?php
	session_start();
	if(!isset($_SESSION['name'])){
		header('location:login.php');
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Bachelor</title>
    <style>

    </style>

</head>

<body>

    <!-- navbar -->
    <div class="bs-example">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="index.html" class="navbar-brand">Bachelor</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Student</a>
                        <div class="dropdown-menu">
                            <a href="registration.html" class="dropdown-item">Registration</a>
                            <a href="viewProfile.html" class="dropdown-item">View Profile</a>
                            <a href="#" class="dropdown-item">Update Profile</a>
                            <a href="#" class="dropdown-item">Delete Profile</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Job Holder</a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Registration</a>
                            <a href="#" class="dropdown-item">View Profile</a>
                            <a href="#" class="dropdown-item">Update Profile</a>
                            <a href="#" class="dropdown-item">Delete Profile</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Furniture</a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Buy</a>
                            <a href="#" class="dropdown-item">Rent</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Flat</a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Post</a>
                            <a href="#" class="dropdown-item">Rent</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Admin</a>
                        <div class="dropdown-menu">
                            <a href="admin.html" class="dropdown-item">Student</a>
                            <a href="admin.html" class="dropdown-item">jobholder</a>
                            <a href="#" class="dropdown-item">Add Furniture</a>
                            
                        </div>
                    </div>
                </div>
                <form class="form-inline">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <div class="input-group-append">
                            <button type="button" class="btn btn-secondary"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>

            </div>
        </nav>
    </div>
  
    
    <div style='background-color: beige;'><br>
        <h1 class='text-center'>Admin Pannel</h1>
	    <div id='show_data'></div><br><br>
    </div>
    <p ><a class="btn btn-primary" href='functions/logout.php'>Logout</a></p>

    <script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
    <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
    <!-- Footer -->
    <footer class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <ul class="list-inline text-center">
                        <li class="list-inline-item">
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-muted text-center">Copyright &copy; bachelor.com 2019</p>


                </div>
            </div>
        </div>
    </footer>
    <!-- Footer -->
</body>

</html>

<!-- Button trigger modal -->
<!-- Modal -->
<!-- <div class="modal fade" id="loginModal" role="dialog">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Session Expired Login Again</h4>
      </div>
      <div class="modal-body">
      <form method="post" id="login_form">
            <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email">
            <input type="password" class="form-control" name="password" id="password" Placeholder="Enter Password">
            <input type="submit" name="submit" id="submit" class="btn btn-primary">
        </form>
      </div>
    </div>
  </div>
</div>

    <script>
        $(document).ready(function(){
            var is_session_expired = 'no';
            function check_session(){
                $.ajax({
                    url:"functions/check_session.php",
                    method:"POST",
                    success:function(data){
                        if(data == '1'){
                           $('#loginModal').modal({
                               backdrop: 'static',
                               ketboard: false,
                           });
                           is_session_expired = 'yes'; 
                        }
                    }
                });
            }
        var count_interval = setInterval(function(){
            check_session();
            if(is_session_expired == 'yes'){
                clearInterval(count_interval);
            }
        }, 10000);
        $('#submit').click(function(event){
            event.preventDefault();
            $.ajax({
                url:"functions/Login.php",
                method: "POST",
                data:$(this).serialize(),
                success:function(data){
                    if(data != ''){
                        $('#error_ message').html(data);
                    }else{
                        location.reload();
                    }
                }
            });
        });
        });
    </script> -->

  
