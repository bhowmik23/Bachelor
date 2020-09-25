<?php
    include_once "../classes/Crud.php";
    $crud = new Crud();
    
    $id = $_POST['param_id'];
    $result = $crud->getData("SELECT * from registration where id=$id");
    if($crud->delete($id,'registration')){
        echo "success";
    }
?>
