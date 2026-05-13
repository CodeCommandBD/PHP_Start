<?php

// Connecting with server and database way number one :
// Connecting with server and database way number one:

$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "PHP_Learning";

// ১. সার্ভারে কানেক্ট করা (ডাটাবেসের নাম ছাড়া)
$connect = new mysqli($serverName, $userName, $password);

/// ২. ডাটাবেস তৈরি করা (যদি না থাকে)
$connect->query("CREATE DATABASE IF NOT EXISTS $databaseName");

// ৩. ডাটাবেসটি সিলেক্ট করা
$connect->select_db($databaseName);


// চেক করা কানেকশন ঠিক আছে কি না
if ($connect->connect_error) {
    die("Connection Failed: " . $connect->connect_error);
}








// Connecting way number two: 
// Connecting way number two:

// $connect = mysqli_connect("localhost","root","");

// if ($connect == false) {
//  echo "Database connection failed";
// }else{
//  echo "Database connection successful";
// }
