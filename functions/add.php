<?php
    include_once "../classes/Crud.php";
    $crud = new Crud();

 
        $name = $_POST['Name'];
        $email = $_POST['Email'];
        $phone = $_POST['Phone'];
        $present_address = $_POST['Present_address'];
        $permanent_address = $_POST['Permanent_address'];
        $position = $_POST['Position'];
        $password = md5($_POST['Password']);
        $sql = "INSERT into registration(name,email,phone,present_address,permanent_address,position,password)
        VALUES('$name','$email','$phone','$present_address','$permanent_address','$position','$password')";

        $result = $crud->execute($sql);

        if($result){
            echo "success";
        }else{
            echo "Insertion problem";
        }
    
?>