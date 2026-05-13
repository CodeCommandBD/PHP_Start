<?php
require_once('../DB/config.php');

$query = "SELECT * FROM Authentication";

$result = $connect->query($query);

if ($result->num_rows > 0) {

    // fetch_assoc() hocce array te result return korar jonne (1ta row)
    while ($row = $result->fetch_assoc()) {
        echo
            "ID: " . $row["id"] . " " . "| " .
            "Name: " . $row["username"] . " " . "| " .
            "Email: " . $row["email"] . " " . "| " .
            "Password: " . $row["password"] . " " . "| " . "<br>";
    }
}
