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
    <link rel="stylesheet" href="css/style.css">
    <title>Bachelor</title>
    <style>
       
    </style>

</head>

<body>

    <!-- navbar -->
    <div class="bs-example">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="index.php" class="navbar-brand">Bachelor</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="home" link="index.php" class="nav-item nav-link active">Home</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Student</a>
                        <div class="dropdown-menu">
                            <a href="registration.php" class="dropdown-item">Registration</a>
                            <a href="viewprofile.php" class="dropdown-item">View Profile</a>
                            <a href="updateprofile.php" class="dropdown-item">Update Profile</a>
                            <a href="#" class="dropdown-item">Delete Profile</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Job Holder</a>
                        <div class="dropdown-menu">
                            <a href="registration.html" class="dropdown-item">Registration</a>
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
                            <a href="flatPost.html" class="dropdown-item">Post</a>
                            <a href="#" class="dropdown-item">Rent</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Admin</a>
                        <div class="dropdown-menu">
                            <a href="admin.html" class="dropdown-item">Student</a>
                            <a href="#" class="dropdown-item">jobholder</a>
                            <a href="furniturePost.html" class="dropdown-item">Add Furniture</a>
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


    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="10000">
                <img src="image/cover1.jpg" id="img" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-interval="2000">
                <img src="image/cover2.jpg" id="img" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="image/cover3.jpg" id="img" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
<hr>
    <div class="header" id="outer">
        <p class="h1" id="h1">Furniture</p>
    </div>
    <hr>

    <!-- Furniture card -->
<div class='card-deck'>

<div class='card-deck'>
                    <?php
                        // header('Access-Control-Allow-Origin: *');  
                        include_once "./classes/Crud.php";
                        $crud = new Crud();
                        $result = $crud->getData("SELECT * from furniture order by id DESC");
                        if($result){
                            foreach($result as $row){
                                $title = $row['title'];
                                $description = $row['description'];
                                $sale_price = $row['sale_price'];
                                $rent_price = $row['rent_price'];
                                $Image = $row['image'];
                              
    echo "  <div class='card'>
            <img src='image/cover1.jpg' class='card-img-top' alt='...'>
            <div class='card-body'>
                <h5 class='card-title'>$title</h5>
                <p class='card-text'>$description</p>
            </div>
            <div class='card-footer'>
                <a href='#' class='btn btn-dark'>Rent</a><b>BDT $rent_price</b>
                <a href='#' class='btn btn-primary'>buy</a><b>BDT $sale_price</b>
            </div>
        </div>
        ";
    }
}else{
    echo "No Data Found! Please Add Data";
}
?>
    </div>
     <!-- Furniture card -->

    <hr>
    <div class='header' id='outer'>
        <p class='h1' id='h1'>Flat</p>
    </div>
    <hr>


    <!-- <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="10000"> -->
                 <!-- Flat card -->
                <div class='card-deck'>
                    <?php
                        // header('Access-Control-Allow-Origin: *');  
                        include_once "./classes/Crud.php";
                        $crud = new Crud();
                        $result = $crud->getData("SELECT * from flat order by id DESC");
                        if($result){
                            foreach($result as $row){
                                $Name = $row['name'];
                                $Email = $row['email'];
                                $Phone = $row['phone'];
                                $Address = $row['address'];
                                $Description = $row['description'];
                                $Image = $row['image'];
                                $Cost = $row['cost'];
                                echo "
                                <div class='card'>
                                    <img src='image/cover1.jpg' class='card-img-top' alt='...'>
                                    <div class='card-body'>
                                        <h5 class='card-title'>BDT $Cost</h5>
                                        <p class='card-text'><b>Address:</b>$Address</p>
                                        <p class='card-text'>$Description</p>    
                                    </div>
                                    <div class='card-footer'>
                                        <a class='fa fa-phone btn btn-primary' href='tel:+$Phone'>Call</a><b>+88$Phone</b>
                                    </div>
                                </div>   
                            ";
                            }
                        }else{
                            echo "No Data Found! Please Add Data";
                        }
?>
</div>
            <!-- </div>
        </div> -->
        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


   
  

 

    <!-- Flat card -->

    <!-- Footer -->
    <hr>
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