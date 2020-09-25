<?php
include_once "../classes/Crud.php";
$crud = new Crud();

$title  = $_POST['Title'];
$description  = $_POST['Description'];
$sale_price  = $_POST['Sale_price'];
$rent_price  = $_POST['Rent_price'];
$image = $_POST['Image'];
$target = "image/".basename($image);
$sql = "INSERT into furniture(title ,description ,sale_price ,rent_price,image )
VALUES('$title','$description','$sale_price','$rent_price','$image')";
  	// execute query

$result = $crud->execute($sql);

if($result){
  echo "success";
  }else{
    echo "Insertion problem";
  }

?>