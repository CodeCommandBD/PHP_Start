<?php
$cat =  'tomy';
$das = 'das';
$price = 500;
$admin = false;
$first_name = 'shnato kumar das';
$full_name = 'first_name'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        <?php
        echo "hello";
        ?>
    </h1>
    <?php
    echo "shanto $cat ";

    echo "kumar $das ";

    // easy use with double cote 
    echo "this is $price taka ";

    // SINGLE cote e text dhora hoy
    echo 'this is $price taka ';

    // concut korte dot use kora hoy
    echo 'this is ' . $price . ' taka ';

    echo $cat;

    echo $admin;
    ?>
    <br>
    <br>
    <!-- double dollar sign dile 1st dollar sign er modde thaka arekta dollar sign variable hoye jay -->
    <?php
    echo $$full_name

    ?>
    <br>
    <br>
    <!-- variable je kono jaygay set kora jay  -->
    <?php
    $data = 'mentos'
    ?>

    <h1><?php echo "this is $data" ?></h1>



    <br>
    <br>
    <!-- CLASS 5 -->
    <?php
    $first_price = 10000;
    $second_price = 5000;
    $total_price = $first_price + $second_price
    ?>
    <h2><?php echo "this is a big event so its total price is $total_price" ?></h2>

    <!-- class 6 constant -->

    <?php
    define("NAME", "Riday");
    define("AMOUNT", 500);



    echo NAME . "<br>";

    // or 
    echo constant("NAME");

    echo "<br>";
    echo "<br>";
    echo AMOUNT
    ?>
    <br>
    <br>
    <!-- part 2 -->
    <?php
    define("NAME2", "shna");
    $text = "constant";

    echo "your Name is " . $text("NAME2")
    ?>

    <br>
    <br>

    <!-- class 7  echo vs print -->

    <?php
    $test = print("helo");
    echo $test;
    echo "<h1>heaaaaaaai</h1>"
    ?>
    <!-- class 8 data type  -->

    $Total = 15 //int data type
    $Gpa = 15.5 //float data type
    $name = "shant" //string data type
    $isAdmin = true // boolean data type
    $nullData = ''; // null string
    $data = null //null data type


    <!-- class 9 var_dump  full details show kore like data type *************-->

    <br>
    <br>
    <br>
    <?php
    $names = 'hahas kumar 10';
    $num = 50;
    $isLog = true;
    var_dump($names);
    echo "<br>";
    echo "<br>";
    var_dump($num);
    echo "<br>";
    echo "<br>";
    var_dump($isLog);
    echo "<br>";
    echo "<br>";
    // or 
    var_dump($names, $num)

    ?>

    <!-- class 10 printf -->

    <?php
    $done = "shan";
    // echo $done;

    printf($done)
    ?>
    </br>
    </br>
    <!-- part 2  ucwords text capital word kore-->

    <?php
    $newName = "joy";
    $school = 'uth';
    echo "<br>";
    echo "hello" . ucwords($newName);
    echo "<br>";

    // alternative
    printf("hello %s my school name is %s", ucwords($newName), ucwords($school));
    ?>

    <!-- part 3 html  -->

    <?php
    $fname = "miral";
    $lname = "vogle";
    $html_block = "
        <div>
            <h1>%s</h1>
            <h2>%s</h2>
        </div>
    ";

    printf($html_block, ucwords($fname), ucwords($lname))
    ?>


    <!-- class 11 printf 2nd part -->

    <br>
    <?php

    // int number
    $amount = 100;
    printf("hello %d", $amount);


    echo "<br>";

    // floting type number 
    $gpa = 4.55;
    printf("my gpa is %.2f", $gpa);

    echo "<br>";
    // floting * int number
    $totalAmout = 10 * 5.5;

    printf("total amount: %.0f", $totalAmout);

    echo "<br>";

    // string type 10 character nibe jodi na thake character bydefualt left e ekta space hoy
    $leftname = "raja";
    printf("[%10s]", $leftname);

    echo "<br>";

    // right e space hobe jodi extra character na thake

    $rightname = "raja";
    printf("[%-10s]", $rightname);



    // jodi kono custom character amr mon moto chai 
    echo "<br>";
    $customname = "raja";
    printf("[%'#10s]", $customname);

    // 10 ta character er modde 5ta character nibe baki gulu # diye fill kore dibe
    echo "<br>";
    $customname = "rajas";
    printf("[%'#10.5s]", $customname);

    echo "<br>";

    // 
    echo "<br>";
    echo "<br>";

    $test_1 = 10;
    $test_2 = 50;

    printf("amount is %d and another amount is %d", $test_1, $test_2);
    echo "<br>";
    echo "<br>";

    // 2nd argument ke 1st value te set hobe 
    echo "<br>";
    echo "<br>";

    $test_3 = 10;
    $test_4 = 50;

    printf("amount is %2\$d and another amount is %1\$d", $test_3, $test_4);
    echo "<br>";
    echo "<br>";
    ?>

    <!-- class 12 arithmatic operator -->

    +
    -
    /
    *
    %
    <?php
    $num = 3 + 5;
    echo $num;
    // var_dump($num)

    ?>


    <!-- class 13 assignment operator -->

    <!-- = -->
    <!-- += -->
    <!-- -= -->
    <!-- *= -->
    <!-- /= -->
    <!-- %= -->

    <?php
    echo "<br>";
    echo "<br>";

    $priceNew = 10;

    $priceNew += 5;

    echo $priceNew

    ?>



    <!-- class 14 increment / decrement -->
    <!-- post ++ -->
    <!-- ++ pre-->
    <!-- post-- -->
    <!-- --pre -->

    <?php
    echo "<br>";
    echo "<br>";

    $newOne = 10;

    // post e old value return kore
    echo $newOne++;
    echo "<br>";
    echo $newOne;

    echo "<br>";
    echo "<br>";

    // pre te new value return kore 
    echo  ++$newOne;
    echo "<br>";
    echo $newOne
    ?>


    <!-- class 15 concatenation  -->

    <?php
    echo "<br>";
    echo "<br>";
    $F_name = "shan";
    $L_name = "kum";

    $FullName = $F_name . " " . $L_name;

    echo $FullName;

    ?>

    <!-- class 16 comparison operators -->

    <?php
    echo "<br>";
    echo "<br>";
    $opa = 50;
    $opa3 = 25;

    $Main_opa = $opa > $opa3;
    $Main_opa1 = $opa < $opa3;
    $Main_opa2 = $opa == $opa3;
    $Main_opa3 = $opa != $opa3;
    $Main_opa4 = $opa === $opa3;
    $Main_opa5 = $opa !== $opa3;

    // var_dump($Main_opa1) ;
    echo $Main_opa;
    echo "<br>";
    echo $Main_opa1;
    echo "<br>";
    echo $Main_opa2;
    echo "<br>";
    echo $Main_opa3;
    echo "<br>";
    echo $Main_opa4;
    echo "<br>";
    echo $Main_opa5;
    echo "<br>";

    ?>

    <!-- class 17 spaceship oparators -->
    <!-- jodi soman hoy 0 -->
    <!-- jodi left boro hoy 1 -->
    <!-- jodi right  boro hoy -1 -->

    <?php
    echo "<br>";
    $num1 = 30;
    $num2 = 40;
    $totalNum = $num1 <=> $num2;
    echo $totalNum
    ?>

    <!-- class 18 if Else -->

    <?php
    echo "<br>";
    echo "<br>";

    $condition = 10;

    if ($condition == 11) {
        echo "this is " . $condition;
    } else {
        echo "this is not" . $condition;
    }

    ?>

    <!-- class 19 if else else if -->
    <?php
    echo "<br>";
    echo "<br>";

    $condition = 10;

    if ($condition == 11) {
        echo "this is " . $condition;
    } else if ($condition == 10) {
        echo "this is not" . $condition;
    } else {
        echo "this is faild";
    };

    ?>

    <!-- class 20 ternary operator -->

    <?php
    echo "<br>";
    echo "<br>";

    $user = "";
    $age = 25;

    $user = ($age == 25) ? "admin" : "not found";

    echo $user;

    ?>

    <!-- class 22  Logical OR ||-->

    <?php
    echo "<br>";
    echo "<br>";


    $age = 10;

    $user = $age == 25 || $age == 26 ? "Logical OR admin": "Logical OR not found";

    echo $user;

    ?>

    <!-- class 23  Logical AND &&-->
    <?php
    echo "<br>";
    echo "<br>";


    $age = 10;

    $user = $age == 25 && $age == 10 ? "Logical AND": "Logical And not found";

    echo $user;

    ?>




















    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</body>

</html>