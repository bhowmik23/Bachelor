<?php
    include_once "../classes/Crud.php";
    $crud = new Crud();

        $name = $_POST['Name'];
        $email = $_POST['Email'];
        $phone = $_POST['Phone'];
        $present_address = $_POST['Present_address'];
        $permanent_address = $_POST['Permanent_address'];
        $position = $_POST['Position'];
        $id = $_POST['param_id'];
        $sql = "Update registration SET name= '$name',email='$email', phone= '$phone', present_address= '$present_address', permanent_address= '$permanent_address', position= '$position' where id=$id";

        $result = $crud->execute($sql);

        if($result){
           echo "success";
            
        }else{
            echo "Update problem";
        }
  
?>