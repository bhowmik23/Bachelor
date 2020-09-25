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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
        rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link href="css/main.css" rel="stylesheet" media="all">
    <title>Bachelor</title>
    <style type="text/css">
        body{
            color: #fff;
            background: #63738a;
            font-family: 'Roboto', sans-serif;
        }
        .form-control{
            height: 40px;
            box-shadow: none;
            color: #969fa4;
        }
        .form-control:focus{
            border-color: #5cb85c;
        }
        .form-control, .btn{        
            border-radius: 3px;
        }
        .signup-form{
            width: 400px;
            margin: 0 auto;
            padding: 30px 0;
        }
        .signup-form h2{
            color: #636363;
            margin: 0 0 15px;
            position: relative;
            text-align: center;
        }
        .signup-form h2:before, .signup-form h2:after{
            content: "";
            height: 2px;
            width: 30%;
            background: #d4d4d4;
            position: absolute;
            top: 50%;
            z-index: 2;
        }	
        .signup-form h2:before{
            left: 0;
        }
        .signup-form h2:after{
            right: 0;
        }
        .signup-form .hint-text{
            color: #999;
            margin-bottom: 30px;
            text-align: center;
        }
        .signup-form form{
            color: #999;
            border-radius: 3px;
            margin-bottom: 15px;
            background: #f2f3f7;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
        }
        .signup-form .form-group{
            margin-bottom: 20px;
        }
        .signup-form input[type="checkbox"]{
            margin-top: 3px;
        }
        .signup-form .btn{        
            font-size: 16px;
            font-weight: bold;		
            min-width: 140px;
            outline: none !important;
        }
        .signup-form .row div:first-child{
            padding-right: 10px;
        }
        .signup-form .row div:last-child{
            padding-left: 10px;
        }    	
        .signup-form a{
            color: #fff;
            text-decoration: underline;
        }
        .signup-form a:hover{
            text-decoration: none;
        }
        .signup-form form a{
            color: #5cb85c;
            text-decoration: none;
        }	
        .signup-form form a:hover{
            text-decoration: underline;
        }  
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
                            <a href="#" class="dropdown-item">jobholder</a>
                            <a href="#" class="dropdown-item">Add Furniture</a>
                        </div>
                    </div>
                </div>
                <form class="form-inline">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <div class="input-group-append">

                        </div>
                    </div>
                </form>

            </div>
        </nav>
    </div>
    <!-- navbar -->

<!-- furniture post -->
    <div class="signup-form">
        <form  method="Post">
            <h2>Register</h2>
            <p class="hint-text">Post Furniture For Sate or Rent</p>
            <div class="form-group">
                <input class="input--style-6" type="text" placeholder="Furniture Name/Title" id="title" name="title" onblur="enableDisable1()">       	
            </div>
            <div class="form-group">
                <input class="input--style-6" type="text" placeholder="Furniture Description" id="description" name="description" onblur="enableDisable2()" disabled>
            </div>
            <div class="form-group">
                <input class="input--style-6" type="text" placeholder="Sale Price" id="sale_price" name="sale_price" onblur="enableDisable3()" disabled>
            </div>
            <div class="form-group">
                <input class="input--style-6" type="text" placeholder="Rent Price" id="rent_price" name="rent_price" onblur="enableDisable4()" disabled>
            </div>        
            <div class="form-group">
                <div class="input-group js-input-file">
                    <input type="file" name="image" id="image" onblur="enableDisable5()" disabled>
                </div>
                <div class="label--desc">
                    Upload image max size 5 MB
                </div>
            </div>
            
            <div class="form-group">
                <button type="submit" name="addFurniture" id="addFurniture" class="btn btn-primary btn-block" > post </button>
            </div>
        </form>
        <div class="text-center"><a class="btn btn-primary" href='functions/logout.php'>Logout</a></div>
    </div>
    <!-- furniture post -->

    <script type="text/javascript" src="js/app.js"></script>

    <script type="text/javascript">
        function enableDisable1() {

            var name = document.getElementById('title');
            if (title != null && document.getElementById('description').disabled) {
                document.getElementById('description').disabled = false;
            } else {
                document.getElementById('description').disabled = true;
            }
        }
        function enableDisable2() {

            var description = document.getElementById('description');
            if (description != null && document.getElementById('sale_price').disabled) {
                document.getElementById('sale_price').disabled = false;
            } else {
                document.getElementById('sale_price').disabled = true;
            }
        }
        function enableDisable3() {
            var sale_price = document.getElementById('sale_price');
            if (sale_price != null && document.getElementById('rent_price').disabled) {
                document.getElementById('rent_price').disabled = false;
            } else {
                document.getElementById('rent_price').disabled = true;
            }
        }
        function enableDisable4() {

            var rent_price = document.getElementById('rent_price');
            if (rent_price != null && document.getElementById('image').disabled) {
                document.getElementById('image').disabled = false;
            } else {
                document.getElementById('image').disabled = true;

            }
        }
        function enableDisable5() {

            var image = document.getElementById('image');
            if (image != null && document.getElementById('addFurniture').disabled) {
                document.getElementById('addFurniture').disabled = false;
            } else {
                document.getElementById('addFurniture').disabled = true;
            }
        }
    </script>


     <!-- <form method="POST" id="add_furniture">
        <div class="card-body">
        <div class="page-wrapper bg-dark p-t-100 p-b-50">
            <div class="wrapper wrapper--w900">
                <div class="card card-6">
                    <div class="card-heading">
                        <h2 class="title">Post Furniture For Sate or Rent </h2>
                    </div>
                      <div class="form-row">
                            <div class="value">
                                <input class="input--style-6" type="text" placeholder="Furniture Name/Title" id="title"
                                    name="title" onblur="enableDisable1()">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" placeholder="Furniture Description"
                                        id="description" name="description" onblur="enableDisable2()" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="value">
                                <input class="input--style-6" type="text" placeholder="Sale Price" id="sale_price"
                                    name="sale_price" onblur="enableDisable3()" disabled>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="value">
                                <input class="input--style-6" type="text" placeholder="Rent Price" id="rent_price"
                                    name="rent_price" onblur="enableDisable4()" disabled>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Upload Furniture Photo</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input type="file" name="image" id="image" onblur="enableDisable5()" disabled>
                                </div>
                                <div class="label--desc">Upload image max size 5 MB</div>
                            </div>
                        </div>

                    </div>
                    <div class="form-row">
                        <button type="submit" name="addFurniture" id="addFurniture" class="btn btn-primary btn-block"
                            disabled> post </button>
                    </div>
                </div>
            </div>
        </div>
    </form> -->

    <!-- <script src="js/jquery.min.js"></script>
    <script src="js/global.js"></script> -->
    

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