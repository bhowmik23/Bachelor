<?php
session_start();
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"bachelor");
 
$email=$_POST["email"];
$password=md5($_POST["password"]);
 
$query=mysqli_query($conn,"select * from admin where email='".$email."' and password='".$password."'");
 
$numrows=mysqli_num_rows($query);
if($numrows>0)
{
	$data=mysqli_fetch_array($query);
        
        $_SESSION["name"]=$data["name"];
     
		echo 0;
}else{
	echo 1;					
	}						
	
?>