<?php

declare(strict_types=1);
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

    $user = $age == 25 || $age == 26 ? "Logical OR admin" : "Logical OR not found";

    echo $user;

    ?>

    <!-- class 23  Logical AND &&-->
    <?php
    echo "<br>";
    echo "<br>";


    $age = 10;

    $user = $age == 25 && $age == 10 ? "Logical AND" : "Logical And not found";

    echo $user;

    ?>

    <!-- class 24  Logical NOT ! -->
    <?php
    echo "<br>";
    echo "<br>";


    $age = 10;

    $user = !($age == 25) ? "Logical NOT is found" : "Logical NOT is not found";

    echo $user;

    ?>
    <!-- class 25  Nested if -->
    <?php
    echo "<br>";
    echo "<br>";


    $user = 'more';
    $pass = 'han';

    if ($user == 'more') {
        if ($pass == 'han') {
            echo "password right";
        } else {
            echo "password wrong";
        }
    } else {
        echo "invalid user";
    }


    ?>
    <!-- class 26  while loop -->
    <?php
    echo "<br>";
    echo "<br>";

    $count = 1;
    $number = 1;

    while ($count <= 5) {
        echo "hello <br>";
        $count++;
    }
    echo "<br>";
    while ($number <= 5) {
        echo "hello $number <br>";
        $number += 2;
    }
    ?>

    <form action="">
        <select name="" id="">
            <?php
            $year = 2000;
            while ($year <= 2030) {
                echo "<option value='$year'>$year</option>";
                $year++;
            }
            ?>
        </select>
    </form>



    <!-- class 28  for loop -->

    <?php
    echo "<br>";
    echo "<br>";

    for ($count = 1; $count <= 10; $count += 2) {
    ?>
        <h4>hello <br><?php echo "<br>"; ?></h4>


    <?php
    }
    ?>

    <!-- class 29  breck statement -->
    <?php
    echo "<br>";
    echo "<br>";



    for ($count = 1; $count <= 10; $count++) {
        echo $count . " hello <br>";
        if ($count == 5) {
            echo "5 is here <br>";
            break;
        }
    }
    ?>

    <!-- class 30 continue -->

    <?php
    echo "<br>";
    echo "<br>";



    for ($count = 1; $count <= 10; $count++) {
        echo $count . " hello <br>";
        if ($count == 5) {
            echo "5 is here <br>";
            continue;
        }
        echo "5 is not here that <br>";
    }

    ?>

    <!-- class 31 nested loop -->

    <?php
    echo "<br>";

    for ($outlist = 1; $outlist <= 3; $outlist++) {
        echo "list $outlist <br>";
        for ($inerlist = 1; $inerlist <= 3; $inerlist++) {
            echo "-------inner list $inerlist <br>";
        }
    }

    ?>

    <!-- class 32 goto statement and advance break -->
    <?php
    echo "<br>";
    echo "<br>";

    for ($outlist = 1; $outlist <= 3; $outlist++) {
        echo "list $outlist <br>";
        for ($inerlist = 1; $inerlist <= 3; $inerlist++) {
            echo "-------inner list $inerlist <br>";
            if ($outlist == 2 && $inerlist == 1) {
                break 2; //duita loop theke ber hoye jabe tai break 2 use kora hoy
            }
        }
    }

    echo "end <br>";
    ?>

    <!-- class 34 sprintf -->

    <?php

    $name = "shan";
    $age = 25;
    // sprintf er kaj holo string make kore but print kore na .. make kore variable e assign kore pare print kore 

    $addinvariable = sprintf("<p>name is %2\$d and age is %1\$s</p>", $name, $age);
    echo $addinvariable;

    ?>

    <!-- class 35 alternative syntax -->

    <?php

    $condition = 5;

    if ($condition == 10):
        echo "condition 10";
    elseif ($condition == 5):
        echo "condition 5";
    else:
        echo "condition faild";
    endif;

    ?>

    <!-- class 36 isset() -->

    <!-- isset hocce variable ta defined kina eita check korar jonno use kora hoy -->
    <?php
    echo "<br>";
    echo "<br>";

    $name = "shan";
    $age = 25;

    if (isset($name) && isset($age)) {
        echo "name is " . $name . " and age is " . $age;
    } else {
        echo "name and age is not found";
    }

    ?>

    <!-- class 37 null coalescing operator -->

    <!-- null coalesceing operator hocce variable ta defined kina ba null kina eita check korar jonno use kora hoy -->

    <?php
    echo "<br>";
    echo "<br>";

    $name = "shan";
    $age = null;

    $result = $age ?? "not found";

    echo $result;

    ?>

    <!-- class 38 Function -->

    <?php
    echo "<br>";
    echo "<br>";

    function nickName()
    {
        echo "shanon <br>";
        echo "saim <br>";
        echo "nabil <br>";
    }

    nickName();
    ?>

    <!-- class 39 Parameter Function -->

    <?php
    echo "<br>";
    echo "<br>";

    function nick($name1, $name2, $name3)
    {
        echo "$name1 <br>";
        echo "$name2 <br>";
        echo "$name3 <br>";
    };

    nick("shanon", "saim", "nabil");
    ?>



    <!-- class 40 strict type argument -->

    <?php
    echo "<br>";
    echo "<br>";

    function sum(int $a, int $b)
    {
        $c = $a + $b;
        echo "total: " . $c . "<br>";
    }
    sum(10, 5);

    ?>;


    <!-- class 41 Function Default Argument -->

    <?php
    echo "<br>";
    echo "<br>";

    function fullNames($firstName, $lastName, $another = " ")
    {
        echo "full Name: " . $firstName . $another . $lastName . "<br>";
    }

    fullNames("shan", "hanif");

    ?>



    <!-- class 43  named argument-->

    <?php
    echo "<br>";
    echo "<br>";

    function addName($firstName, $lastName)
    {
        echo "name is :" . $firstName . " " . $lastName;
    }

    addName(lastName: "hanif", firstName: "shan");


    ?>

    <!-- class 44  local variable scopes-->

    <?php

    function sumWithlocal()
    {
        $add = 10;
        $addtwo = 10;

        $total = $add + $addtwo;
        echo "total: " . $total;
    }
    sumWithlocal();

    ?>

    <!-- class 45  global variable scopes-->

    <?php
    echo "<br>";
    echo "<br>";
    $globalvar = 50;
    function sumWithglobal()
    {
        global $globalvar;
        global $myName;

        $myName = "han";
        echo $globalvar;
    }
    sumWithglobal();

    ?>


    <!-- class 46 static variable-->
    <?php
    echo "<br>";
    echo "<br>";

    function sumStatic()
    {
        static $count = 0;
        $count++;
        echo $count . "<br>";
    }
    sumStatic();
    sumStatic();
    sumStatic();
    sumStatic();
    ?>


    <!-- class 47 return  -->

    <?php
    echo "<br>";
    echo "<br>";

    function sumReturn(int $a, int $b)
    {
        $c = $a + $b;
        return $c;
    }
    $result = sumReturn(10, 50);
    echo $result;
    ?>


    <!-- class 48 union type -->
    <?php
    echo "<br>";
    echo "<br>";

    function sumUnionType(int | float $a, int | float $b): int | float
    {
        $c = $a + $b;
        return  $c;
    }
    $result = sumUnionType(10.5, 22);
    echo $result;

    echo "<br><br>";
    function test(): void
    {
        echo "Hello World";
    }

    $result = test();
    echo "test function";
    ?>
    <!--  -->



    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</body>

</html>