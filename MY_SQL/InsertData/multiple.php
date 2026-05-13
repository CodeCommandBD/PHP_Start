<!-- multiple single data insert one by one -->
<?php

require_once "../DB/config.php";

$insertData = "INSERT INTO Authentication(username, email, password)
               VALUES ('arif','arif@gmail.com','12345678'),
                      ('sona2','sona@yahoo.com','12345678'),
                      ('rabbil','rabbil@hotmail.com','12345678'),
                      ('kaboul','kaboul@gmail.com','12345678');";

$insertData = "INSERT INTO products(name,price,quantity)
               VALUES ('Keyboard',1200,10),
                      ('Mouse',2000,20),
                      ('Monitor',2330,30),
                      ('Loptop',2500,40),
                      ('Pendrive',350,100),
                      ('Headphone',2500,40);";

if ($connect->multi_query($insertData)) {
    echo "All data inserted successfully";
} else {
    echo "Error: " . $connect->error;
}
