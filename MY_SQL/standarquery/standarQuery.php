<!-- secure way to insert data -->
<!-- best query method -->
<?php

    require_once('../DB/config.php');

    $username = 'rabbi';
    $email = 'rabbil@yahoo.com';
    $password = '12345678';
    
    // prepare method hocce query ti egiye rekhe deya ebong jeno porer jinis take execute kora hoy
    // bind_param er kaj hocce variable gulo "?" er jaygay basano, ekhane "sss" holo string type er variable


    $stmt = $connect->prepare("INSERT INTO Authentication(username,email,password)
                    VALUES(?,?,?)
    ");

    $stmt->bind_param("sss",$username,$email,$password);  // bind_param er kaj hocce variable gulo "?" er jaygay basano



    $stmt->execute();  // execute er kaj hocce "INSERT INTO" er baki data insert kora

    echo "Best query method and Data inserted successfully";

    $stmt->close();

    // close function hocce "INSERT INTO" query ti execute korar por "?" er jaygay value gulo deya shesh hoyeche
    // oi "?" er jaygay value gulo bar bar insert hobe na
    // tar mane Connection ta close hoye gelo.


    $connect->close(); // eita use korle connection ta off hoye jay.
    







?>