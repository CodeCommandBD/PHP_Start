<?php 

    $id = $_GET["id"];

    $username = $_POST["username"];
    $email = $_POST["email"];

    require_once("../DB/config.php");

    $query = "UPDATE Authentication 
                SET username='$username',
                    email='$email' 
                WHERE ID= $id";

    $result = $connect->query($query);

    if($result){
        header("location: show_data_with_table.php?msg=Updated Successfully");
    }else{
        header("location: show_data_with_table.php?msg=Failed to update");
    }

?>