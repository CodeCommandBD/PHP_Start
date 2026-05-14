<?php 


    if(isset($_GET['id'])){

        $id = $_GET['id'];

        require_once("../DB/config.php");


        $query = "DELETE FROM Authentication WHERE ID= $id";

        $result = $connect->query($query);

        if($result){
            header('location: show_data_with_table.php?msg=Record deleted successfully');
        }else{
            header('location: show_data_with_table.php?msg=Failed to delete record');
        }
        
    }




?>