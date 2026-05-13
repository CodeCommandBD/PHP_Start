<!-- single single data insert one by one -->
<?php

// isset hocche kono ekta variable er value asche ki na,
// sei ta check korar jonno use hoy.
// na ashle error dekhabe and thame jabe
// r ashle code ta run korbe

if (isset($_POST['username'])) {

    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    require_once "../DB/config.php";

    $createData = "INSERT INTO Authentication(username, email, password) 
                   VALUES('$name','$email','$password')";


    if ($connect->query($createData)) {
        echo "Data inserted successfully with id no $connect->insert_id";
    } else {
        echo "Error: " . $connect->error;
    }
} 
else {
    header("Location: form.php");
    exit();
}

?>