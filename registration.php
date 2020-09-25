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
    <title>Bachelor</title>
    
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
                            <a href="viewProfile.php" class="dropdown-item">View Profile</a>
                            <a href="updateprofile.php" class="dropdown-item">Update Profile</a>
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
                            <button type="button" class="btn btn-secondary"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>

            </div>
        </nav>
    </div>
    <!-- navbar -->
    <!-- registration form -->
    <div class="container text-center" id="add_data">
        <div class="card bg-light text-center">
            <article class="card-body mx-auto" style="max-width: 400px;">
                <h4 class="card-title mt-3 text-center">Create Account</h4>
                <p class="text-center">Get started with your free account</p>
                <p>
                    <a href="" class="btn btn-block btn-google"> <i class="fab fa-google"></i>   Login via Google</a>
                    <a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Login via
                        facebook</a>
                </p>
                <p class="divider-text">
                    <span class="bg-light">OR</span>
                </p>
                <form method="POST">
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        </div>
                        <input name="name" id="name" class="form-control" placeholder="Full name" type="text" onblur="enableDisable1()">
                    </div>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                        </div>
                        <input name="email" id="email" class="form-control" placeholder="Email address" type="email" onblur="enableDisable2()" disabled>
                    </div> 
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                        </div>
                        <div class="input-group-text">+880</div>
                        <input name="phone" id="phone" class="form-control" placeholder="Phone number" type="text" onblur="enableDisable3()" disabled>
                    </div> 
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-home"></i> </span>
                        </div>
                        <input name="present_address" id="present_address" class="form-control" placeholder="Present address" type="text" onblur="enableDisable4()" disabled>
                    </div>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-home"></i> </span>
                        </div>
                        <input name="permanent_address" id="permanent_address" class="form-control" placeholder="Permanent address" type="text" onblur="enableDisable5()" disabled>
                    </div> 
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-building"></i> </span>
                        </div>
                        <select class="form-control" name="position" id="position" onblur="enableDisable6()" disabled>
                            <option selected="selected" class="select"> Select type</option>
                            <option value="student">Student</option>
                            <option value="job holder">Job Holder</option>
                        </select>
                    </div> 
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input name="password" id="password" class="form-control" placeholder="Create password" type="password" onblur="enableDisable7()" minlength="8"
                        disabled>
                    </div>
                    <div class="form-group">  
                        <button type="submit" name="addData" id="addData" class="btn btn-primary btn-block" disabled> Create Account </button>
                    </div> 
                    <p class="text-center">Have an account? <a href="login.html">Log In</a> </p>
                </form>
            </article>
        </div> 
    </div>


    <script type="text/javascript">
        function enableDisable1(){

            var name = document.getElementById('name');
            if(name!= null && document.getElementById('email').disabled){
                document.getElementById('email').disabled = false;
            }else{
                document.getElementById('email').disabled = true;
            }
        }
        function enableDisable2(){

            var email = document.getElementById('email'); 
            if(email!= null && document.getElementById('phone').disabled){
                document.getElementById('phone').disabled = false;
            }else{
                document.getElementById('phone').disabled = true;
            }
        }
        function enableDisable3(){
            var phone = document.getElementById('phone');
            if(phone!= null && document.getElementById('present_address').disabled){
                document.getElementById('present_address').disabled = false;
            }else{
                document.getElementById('present_address').disabled = true;
            }
        }
        function enableDisable4(){

            var present_address = document.getElementById('present_address');
            if(present_address!= null && document.getElementById('permanent_address').disabled){
                document.getElementById('permanent_address').disabled = false;
            }else{
                document.getElementById('permanent_address').disabled = true;

            }
        }
        function enableDisable5(){

            var permanent_address = document.getElementById('permanent_address'); 
            if(permanent_address!= null && document.getElementById('position').disabled){
                document.getElementById('position').disabled = false;
            }else{
                document.getElementById('position').disabled = true;
            }
        }
        function enableDisable6(){

            var position = document.getElementById('position');
            if(position!= null && document.getElementById('password').disabled){
                document.getElementById('password').disabled = false;
            }else{
                document.getElementById('password').disabled = true;
            }
        }
        function enableDisable7(){

            var password = document.getElementById('password');  
            if(password!= null && document.getElementById('addData').disabled){
                document.getElementById('addData').disabled = false;
            }else{
                document.getElementById('addData').disabled = true;
            }
        }
 
    </script>
    
    <!--container end.//-->

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
    <script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
</body>

</html>