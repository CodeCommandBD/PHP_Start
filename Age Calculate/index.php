<?php 
    $birthday = new DateTime("04/12/2000");

    $today = new DateTime();
    
    echo $today->format('d-m-Y');

    echo "<br>";

    echo $birthday->format('d-m-Y');
    echo "<br>";
    $diff = $today->diff($birthday);
    echo $age = $diff->format("%y years, %m months, and %d days old.");

    echo "<br>";

    
?>