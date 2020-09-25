<?php
include_once "../classes/Crud.php";
$crud = new Crud();

$name = $_POST['Name'];
$email = $_POST['Email'];
$phone = $_POST['Phone'];
$address = $_POST['Address'];
$description = $_POST['Description'];
$cost = $_POST['Cost'];
$image = $_POST['Image'];
$location = "image/".$image;
$sql = "INSERT into flat(name,email,phone,address,description,cost,image)
VALUES('$name','$email','$phone','$address','$description','$cost','$image')";


$result = $crud->execute($sql);

if($result){
  echo "success";
  }else{
    echo "Insertion problem";
  }

?>
  
