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
    <!-- class 49 mixed type -->

    <?php
    echo "<br><br>";


    function sumMixedType(mixed $numbers, mixed $numbers2): mixed
    {
        return $numbers + $numbers2;
    }
    $result = sumMixedType(10, "20");
    echo $result;
    ?>

    <!-- class 50 nullable type-->
    <?php
    echo "<br><br>";

    function sumNullableType(?int $numbers, ?int $numbers2): ?int
    {
        return $numbers + $numbers2;
    }
    $result = sumNullableType(10, null);
    echo $result;
    ?>


    <!-- class 51 call by value and call by reference -->
    <?php
    echo "<br><br>";

    function sumCallByValue(string &$name): void
    {
        $name = "tomy";
        echo $name;
    }

    $newName = "mojo";

    sumCallByValue($newName);
    echo "<br>";
    echo $newName;

    ?>

    <!-- class 52 arrays -->

    <?php
    echo "<br><br>";

    $books = ["C programming", "PHP programming", "Python programming"];
    echo $books[0];

    ?>

    <!-- class 53 display arrays -->

    <?php
    echo "<br>";
    echo "<br>";

    $books = ["C programming", "PHP programming", 500, true, "hello"];

    print_arr($books);


    function print_arr(array $arr): void
    {
        echo "<pre>";
        print_r($arr);
        echo "</pre>";
    }
    ?>


    <!-- class 54 Array Manipulation -->



    <?php
    echo "<br>";
    echo "<br>";

    $names = ["C programming", "PHP programming", "Python programming"];


    // add value
    echo $names[3] = "C++";
    // or
    echo $names[] = "java";

    // change value 
    echo $names[1] = "java programming";

    // delete value 
    unset($names[1]);







    echo "<pre>";
    print_r($names);
    echo "</pre>";
    ?>



    <!-- class 55  array count -->


    <?php
    echo "<br><br>";
    $books = ["C programming", "PHP programming", "Python programming", "java"];
    echo count($books);

    ?>

    <!-- class 56 associative array -->
    <br>
    <br>
    <?php
    echo "<br><br>";
    $books = [
        'amount' => 20,
        "name" => "shanto",
        "isLoggedIn" => true,
        "message " => "hello "
    ];

    echo "<br>";


    function pri_arr($arr)
    {
        echo '<pre>';
        print_r($arr);
        echo '</pre>';
    }

    pri_arr($books);
    ?>
    <br>


    <!-- calss 57 forEach loop -->
    <?php
    echo "<br><br>";
    $books = [
        'amount' => 20,
        "name" => "shanto",
        "isLoggedIn" => true,
        "message " => "hello "
    ];

    echo "<br>";

    foreach ($books as $key => $value) {
        echo "<h2> 'key: $key ===> 'value: $value</h2>" . "<br>";
    }
    ?>

    <!-- class 58  multidimensional arrays-->

    <!-- single-dimensional index arrays -->

    <?php
    echo "<br>";
    echo "<br>";

    $books = [
        "C programming",
        "PHP programming",
        "Python programming",
        "java"
    ];

    echo $books[0];
    ?>

    <br><br>

    <!-- multidimensional index arrays -->
    <?php
    echo "<br>";
    echo "<br>";

    $students = [
        ["shanto", 25, 57],
        ["saim", 22, 65],
        ["nabil", 20, 45],
    ];

    echo $students[0][1];
    ?>

    <!-- single-dimensional associative array -->
    <?php
    echo "<br>";
    echo "<br>";

    $student_info = [
        "name" => "shanto",
        "age" => 25,
        "roll" => 57
    ];

    pri_arr($student_info);
    ?>

    <!-- multidimensional associative arrays -->
    <?php
    echo "<br>";
    echo "<br>";

    $users = [
        [
            'name' => "shanto",
            'age' => 25,
            'email' => "[EMAIL_ADDRESS]"
        ],
        [
            'name' => "saim",
            'age' => 22,
            'email' => "[EMAIL_ADDRESS]"
        ],
        [
            'name' => "nabil",
            'age' => 20,
            'email' => "[EMAIL_ADDRESS]"
        ]
    ];

    echo $users[0]['name'];

    ?>
    <br>

    <!-- class 59 Add New Data to PHP Multidimensional Arrays -->


    <br>
    <br>
    <!-- multidimensional index array add new data -->
    <?php
    echo "<br>";
    echo "<br>";

    $student_info = [
        ['shanto', 25, true, 15.5],
        ['saim', 22, false, 16.7],
    ];

    $student_info[] = ["garib", 25, false, 1.7];

    pri_arr($student_info);
    ?>
    <br>
    <br>


    <!-- multidimensional associative array add new data -->
    <?php
    echo "<br>";
    echo "<br>";

    $student_info = [
        [
            'name' => "shanto",
            'age' => 25,
            'isLogge' => true,
            'gpa' => 3.8
        ],
        [
            'name' => "saim",
            'age' => 22,
            'isLogge' => true,
            'gpa' => 3.7
        ],
        [
            'name' => "nabil",
            'age' => 20,
            'isLogge' => true,
            'gpa' => 3.9
        ]
    ];

    $student_info[] = [
        'name' => "arif",
        'age' => 20,
        'isLogge' => true,
        'gpa' => 3.9
    ];

    pri_arr($student_info);
    ?>


    <!-- class 60 Delete Multidimensional array  -->


    <br>
    <br>
    <!-- Delete Multidimensional index array  -->
    <?php
    echo "<br>";
    echo "<br>";

    $student_info = [
        ['shanto', 25, true, 15.5],
        ['saim', 22, false, 16.7],
    ];

    unset($student_info[1]);

    pri_arr($student_info);
    ?>
    <br>
    <br>


    <!-- Delete Multidimensional associative array  -->
    <?php
    echo "<br>";
    echo "<br>";

    $student_info = [
        [
            'name' => "shanto",
            'age' => 25,
            'isLogge' => true,
            'gpa' => 3.8
        ],
        [
            'name' => "saim",
            'age' => 22,
            'isLogge' => true,
            'gpa' => 3.7
        ],
        [
            'name' => "nabil",
            'age' => 20,
            'isLogge' => true,
            'gpa' => 3.9
        ]
    ];

    unset($student_info[1]);

    pri_arr($student_info);
    ?>

    <!-- class 61 string methods -->
    <?php
    echo "<br>";
    echo "<br>";

    $name5 = "shanto";
    $name2 = "shanto is a good man";
    echo strlen($name5);
    echo "<br><br>";
    echo strrev($name5);
    echo "<br><br>";
    echo strpos($name2, $name5);
    echo "<br><br>";

    echo str_replace("man", "human", $name2);

    ?>


    <!-- class  62 int methods-->

    <!-- PHP_INT_MAX() -->
    <!-- PHP_INT_MIN() -->
    <!-- PHP_INT_SIZE() -->
    <!-- is_int( ) -->
    <!-- is_integer() -->
    <!-- is_long() -->


    <?php
    echo "<br><br>";
    $product = 5000;


    var_dump(PHP_INT_MAX);

    echo "<br><br>";
    var_dump(PHP_INT_MIN);

    echo "<br><br>";
    var_dump(PHP_INT_SIZE);

    echo "<br><br>";
    var_dump(is_int($product));

    echo "<br><br>";
    var_dump(is_integer($product));

    echo "<br><br>";
    var_dump(is_long($product));
    ?>


    <!-- class 63 float methods -->

    <!-- filter_var() -->
    <!-- is_float() -->
    <!-- is_double() -->
    <!-- is_real() -->

    <?php
    echo "<br><br>";
    $weight = 70.5;

    echo "<br>";
    var_dump(is_float($weight));
    echo "<br>";
    var_dump(is_double($weight));
    echo "<br>";
    var_dump(filter_var($weight, FILTER_VALIDATE_FLOAT));

    ?>

    <!-- class 64 string to int # -->

    <?php
    echo "<br><br>";

    $age = "25";

    echo (int) $age + 10;
    echo "<br><br>";
    ?>


    <!-- class 65 float to int # -->

    <?php
    echo "<br><br>";

    $weight = "25.5";

    echo (int) $weight + 10;
    echo "<br><br>";
    ?>

    <!-- class 66 math methods -->

    <?php
    echo "<br><br>";

    echo max(2, 4, 52, 41, 30, 48, 62);
    echo "<br><br>";
    echo min(2, 4, 52, 41, 30, 48, 62);
    echo "<br><br>";
    echo abs(-10);
    echo "<br><br>";
    echo sqrt(16);
    echo "<br><br>";
    echo rand(10, 50);
    echo "<br><br>";
    echo round(10.50);
    echo "<br><br>";
    ?>

    <!-- class 67 array sort and rsort by value  -->

    <?php
    $list = ["f", "a", "d", "g", "e"];
    $list2 = ["f", "a", "d", "g", "e"];

    sort($list);
    echo "<br>";

    rsort($list2);
    echo "<br>";

    foreach ($list as $single_list) {
        echo $single_list . "<br>";
    }

    echo "<br>";

    foreach ($list2 as $single_list) {
        echo $single_list . "<br>";
    }
    ?>

    <!-- class 68 associative array sort and rsort by key -->

    <?php
    $personInfo = [
        'name' => "shanto",
        "age" => 25,
        "isLoggedIn" => true,
        "message " => "hello "
    ];

    // asort($personInfo);
    // arsort($personInfo);
    // ksort($personInfo);


    foreach ($personInfo as $key => $person) {
        echo $person . "<br>";
    }
    ?>

    <!-- class 69 array part 1  -->



    <?php
    echo "<br>";
    $product_info[0] = "potato";
    $product_info[1] = "tomato";
    $product_info[2] = "onion";
    $product_info[3] = "potato";

    for ($i = 0; $i < count($product_info); $i++) {
        echo $product_info[$i] . "<br>";
    }

    ?>

    <!-- class 70 array part 2 (key upper/lower case)-->

    <?php
    echo "<br>";
    echo "<br>";

    $student_mark = [
        "Maths" => 85,
        "English" => 95,
        "Chemistry" => 75,
        "Computer" => 85,
    ];

    $change_key_case = array_change_key_case($student_mark, CASE_UPPER);

    foreach ($change_key_case as $key => $value) {
        echo $key . " = " . $value . "<br>";
    }

    ?>

    <!-- class 71 array part 3 (array cunk)-->

    <!-- array cunk diye array ke tukra tukra kora hoy -->

    <?php
    $student_mark = [
        "Maths" => 85,
        "English" => 95,
        "Chemistry" => 75,
        "Computer" => 85,
        "Accounting" => 60
    ];

    $array_cunk = array_chunk($student_mark, 2, true);

    echo "<pre>";
    print_r($array_cunk);
    echo "</pre>";
    ?>


    <!-- class 71 array part 3 (array column)-->

    <!-- array column diye multidimensional array theke kono ekta key er value k alada kora hoy -->

    <?php
    $student_mark = [
        [
            "name" => "shanto",
            "age" => 25,
            "roll" => 57,
            "class" => "10th",
            "section" => "A"
        ],
        [
            "name" => "saim",
            "age" => 22,
            "roll" => 58,
            "class" => "10th",
            "section" => "A"
        ],
        [
            "name" => "nabil",
            "age" => 20,
            "roll" => 59,
            "class" => "10th",
            "section" => "A"
        ]
    ];

    $student = array_column($student_mark, "name");

    echo "<pre>";
    print_r($student);
    echo "</pre>";


    ?>


    <!-- class 72 (array combine) -->

    <!-- duita indexed array er value k key banano hoy, duita array er value soman thakte hobe -->
    <?php
    $student_names = ["shanto", "saim", "nabil"];
    $student_marks = [85, 95, 75];

    $student_mark = array_combine($student_names, $student_marks);

    echo "<pre>";
    print_r($student_mark);
    echo "</pre>";
    ?>




    <!-- class 73 (array count values)-->

    <!-- array count values diye array er moddhe koto gulo same value ache ta gona kora hoy -->

    <?php
    $student_names_1 = ["shanto", "saim", "nabil", "not available", "jonota", "shanto", "nabil"];


    $counter = array_count_values($student_names_1);

    var_dump($counter);
    ?>


    <!-- class 74 (array diff)-->

    <!-- duita array er moddhe koto gulo value onno ta te ache (badha) -->

    <?php
    echo "<br>";
    echo "<br>";
    $name = ["shanto", "saim", "nabil"];
    $name2 = ["shanto", "saim", "kabila", "jonota"];
    $name3 = ["shanto", "saim", "nabil", "monisa", "komotar"];

    $diff = array_diff($name3, $name2, $name);

    echo "<pre>";
    print_r($diff);
    echo "</pre>";
    ?>


    <!-- class 75 (array diff assosicative) -->

    <!-- key and value both  comparison korbe -->

    <?php

    $student_names_2 = [
        "name" => "shanto",
        "age" => 25,
        "roll" => 57,
        "class" => "10th",
        "section" => "A"
    ];
    $student_names_3 = [
        "name" => "shami",
        "age" => 25,
        "roll" => 58,
        "class" => "10th",
        "section" => "A"
    ];


    $diff = array_diff_assoc($student_names_2, $student_names_3);

    echo "<pre>";
    print_r($diff);
    echo "</pre>";
    ?>



    <!-- key theke value comparison korbe -->

    <?php

    $student_names_2 = [
        "name" => "shanto",
        "age" => 25,
        "roll" => 57,
        "class" => "10th",
        "section" => "A"
    ];
    $student_names_3 = [
        "name" => "shanto",
        // "age" => 22,
        "roll" => 57,
        "class" => "10th",
        "section" => "A"
    ];


    $diff = array_diff_key($student_names_2, $student_names_3);

    echo "<pre>";
    print_r($diff);
    echo "</pre>";
    ?>


    <!-- class 76 (array fill ) -->

    <!-- array_fill() diye array toiri kora hoy (koto Index theke shuru hobe, koto index porjonto, ki value dibo) -->

    <?php
    echo "<br>";
    echo "<br>";
    $create_array = array_fill(0, 3, "shanto");

    echo "<pre>";
    print_r($create_array);
    echo "</pre>";
    ?>

    <!-- class 77 (array fill keys) -->

    <!-- array_fill_keys() diye array toiri kora hoy (key, value) eita shudu matro associative array te use hoy -->

    <?php
    echo "<br>";
    echo "<br>";
    $work = ["name", "age", "roll", "class", "section"];

    $create_array = array_fill_keys($work, "jonota");

    echo "<pre>";
    print_r($create_array);
    echo "</pre>";
    ?>

    <!-- class 78 (array filter) -->

    <!-- array filter diye array filter kora hoy -->

    <?php
    echo "<br>";
    echo "<br>";
    $student_mark = [5, 2, 4, 5, 7, 45, 41, 21, 66, 81, 95];

    $filter = array_filter($student_mark, function ($value) {
        return $value >= 20;
    });

    echo "<pre>";
    print_r($filter);
    echo "</pre>";
    ?>


    <!-- class 79 (in array) -->

    <!-- in array diye array te specific value search kora hoy -->

    <?php
    echo "<br>";
    echo "<br>";

    $allow_file_ext = "pdf";
    $file_formates = ["jpg", "png", "jpeg"];


    $filter = in_array($allow_file_ext, $file_formates);

    if ($filter) {
        echo "Valid file formate";
    } else {
        echo "Invalid file formate";
    }
    ?>

    <!-- class 80 (array flip)-->

    <!-- array_flip() diye array er key and value swap kora hoy -->
    <?php
    echo "<br><br>";
    $student_mark = [
        "name" => "shanto",
        "age" => 25,
        "roll" => 57,
        "class" => "10th",
        "section" => "A"
    ];

    $flip = array_flip($student_mark);

    echo "<pre>";
    print_r($flip);
    echo "</pre>";
    ?>


    <!-- class 81 (array intersect and array intersect key ) -->

    <!-- array_intersect() and array_intersect_key() diye array er moddhe same value and same key show kora hoy -->
    <?php
    echo "<br><br>";
    $student_mark = [
        "name" => "shanto",
        "age" => 25,
        "roll" => 57,
        "class" => "10th",
        "section" => "A"
    ];
    $student_mark_2 = [
        "name" => "shanto",
        "age" => 25,
        "roll" => 57,
        "class" => "10th",
        "section" => "A"
    ];

    $intersect = array_intersect($student_mark, $student_mark_2);
    $intersect_key = array_intersect_key($student_mark, $student_mark_2);

    echo "<pre>";
    print_r($intersect);
    print_r($intersect_key);
    echo "</pre>";
    ?>


    <!-- class 82 serializtion and unserializtion -->

    <!-- serialization diye array ko string e convert kora hoy -->

    <?php
    $mylist = ['shanto', 'saim', 'nabil', 'jonota', 'monisa', 'komotar'];

    $serialize = serialize($mylist);

    echo "<pre>";
    print_r($serialize);
    echo "</pre>";

    // unserialization diye string ke array te convert kora hoy -->

    $unserialize = unserialize($serialize);

    echo "<pre>";
    print_r($unserialize);
    echo "</pre>";

    ?>

    <!-- class 83 (super global variable)-->

    <!--  
    $GLOBALS, 
    $_SERVER, 
    $_REQUEST, 
    $_GET, 
    $_POST, 
    $_COOKIE, 
    $_SESSION, 
    $_FILES, 
    $_ENV   
    -->

    <?php
    echo "<br>";
    echo "<br>";

    // GLOBAL() show kora hoy

    $person_name = "shanto";

    function show_person_name(){
      echo $GLOBALS['person_name'];
    }
    show_person_name();

    echo "<br>";
    echo "<br>";

    ?>





    <!-- server variable ($_SERVER) show kora hoy  -->
    <?php
    echo "<br>";
    echo "<br>";


    // echo $_SERVER["PHP_SELF"];

    // echo $_SERVER["SERVER_NAME"];

    // echo $_SERVER["SERVER_ADDR"];

    // echo $_SERVER["SERVER_PROTOCOL"];

    // echo $_SERVER["SERVER_SOFTWARE"];

    // echo $_SERVER["SERVER_PORT"];


    // echo $_SERVER["REQUEST_METHOD"];

    // echo $_SERVER["REMOTE_ADDR"];

    // echo $_SERVER["REMOTE_HOST"];

    // echo $_SERVER["HTTP_HOST"];

    // echo $_SERVER["SERVER_REQUEST_URI"];
    
    echo "<br>";
    ?>





    <!-- request variable ($_REQUEST) show kora hoy  -->
    <?php
    echo "<br>";
    echo "<br>";

    // echo $_REQUEST["name"];

    // echo $_REQUEST["age"];

    // echo $_REQUEST["roll"];

    // echo $_REQUEST["class"];

    // echo $_REQUEST["section"];

    echo "<br>";
    ?>



    <!-- get variable ($_GET) show kora hoy  -->
    <?php
    echo "<br>";
    echo "<br>";

    echo $_GET["name"];
    echo $_GET["age"];
    echo $_GET["roll"];
    echo $_GET["class"];
    echo $_GET["section"];

    echo "<br>";
    ?>



    <!-- post variable ($_POST) show kora hoy  -->
    <?php
    echo "<br>";
    echo "<br>";

    echo $_POST["name"];
    echo $_POST["age"];
    echo $_POST["roll"];
    echo $_POST["class"];
    echo $_POST["section"];

    echo "<br>";
    ?>


    <!-- cookie variable ($_COOKIE) show kora hoy  -->
    <?php
    echo "<br>";
    echo "<br>";

    echo $_COOKIE["name"];
    echo $_COOKIE["age"];
    echo $_COOKIE["roll"];
    echo $_COOKIE["class"];
    echo $_COOKIE["section"];

    echo "<br>";
    ?>


    <!-- session variable ($_SESSION) show kora hoy  -->
    <?php
    echo "<br>";
    echo "<br>";

    echo $_SESSION["name"];
    echo $_SESSION["age"];
    echo $_SESSION["roll"];
    echo $_SESSION["class"];
    echo $_SESSION["section"];

    echo "<br>";
    ?>


    <!-- file variable ($_FILES) show kora hoy  -->
    <?php
    echo "<br>";
    echo "<br>";

    echo $_FILES["name"];
    echo $_FILES["age"];
    echo $_FILES["roll"];
    echo $_FILES["class"];
    echo $_FILES["section"];

    echo "<br>";
    ?>


    <!-- env variable ($_ENV) show kora hoy  -->
    <?php
    echo "<br>";
    echo "<br>";

    echo $_ENV["name"];
    echo $_ENV["age"];
    echo $_ENV["roll"];
    echo $_ENV["class"];
    echo $_ENV["section"];

    echo "<br>";
    ?>


    <!-- class 84 (cookie)-->

    <!-- cookie diye browser e data store kora hoy -->

    <?php
    echo "<br>";
    echo "<br>";

    setcookie("name", "shanto", time() + 3600, "/");
    setcookie("age", "25", time() + 3600, "/");
    setcookie("roll", "57", time() + 3600, "/");
    setcookie("class", "10th", time() + 3600, "/");
    setcookie("section", "A", time() + 3600, "/");

    echo "<br>";
    ?>


    <!-- class 85 (session)-->

    <!-- session diye server e data store kora hoy -->

    <?php
    echo "<br>";
    echo "<br>";

    session_start();

    $_SESSION["name"] = "shanto";
    $_SESSION["age"] = "25";
    $_SESSION["roll"] = "57";
    $_SESSION["class"] = "10th";
    $_SESSION["section"] = "A";

    echo "<br>";
    ?>


    <!-- class 86 (file upload)-->

    <!-- file upload diye file upload kora hoy -->

    <?php
    echo "<br>";
    echo "<br>";

    $file_name = $_FILES["name"];
    $file_size = $_FILES["size"];
    $file_type = $_FILES["type"];
    $file_tmp = $_FILES["tmp_name"];

    echo "<br>";
    ?>








   


    <!-- class 92 (file upload and download with progress bar and encryption and decryption)-->
    <br>
    <br>
    <br>
</body>

</html>