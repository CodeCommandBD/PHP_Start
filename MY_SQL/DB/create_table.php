<?php
require_once "config.php";

$tableName1 = "products";
$tableName2 = "Authentication";


$createTable1 = "CREATE TABLE $tableName1(
    id INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    price INT(6) NOT NULL,
    quantity INT(6) NOT NULL
)";

$createTable2 = "CREATE TABLE $tableName2(
    id INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL
)";

if ($connect->query($createTable1)) {
    echo "Table '$tableName1' created successfully <br>";
} else {
    echo "Error creating table '$tableName1': " . $connect->error . "<br>";
}

if ($connect->query($createTable2)) {
    echo "Table '$tableName2' created successfully <br>";
} else {
    echo "Error creating table '$tableName2': " . $connect->error . "<br>";
}
?>