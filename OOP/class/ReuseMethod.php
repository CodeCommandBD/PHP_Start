<?php 
    require_once "class.php";
    $student = new Person();
    
    echo $student->getAddress("rakib","23","dhaka");
    echo "<br>";
    echo $student->getAddress("shanto","25","khulna");
    echo "<br>";
    echo $student->getAddress("rahim","21","rajshahi");

?>