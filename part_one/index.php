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
        echo 'this is ' . $price .' taka ';

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
    


        echo NAME ."<br>";
        
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

        echo "your Name is " .$text("NAME2")
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

$Total = 15  //int data type
$Gpa = 15.5  //float data type
$name = "shant"  //string data type
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
    echo "hello". ucwords($newName);
    echo "<br>";
    
    // alternative
    printf("hello %s my school name is %s", ucwords($newName), ucwords($school) );
?>

<!-- part 3 html  -->

<?php 
    $fname = "miral";
    $lname = "vogle";
    $html_block= "
        <div>
            <h1>%s</h1>
            <h2>%s</h2>
        </div>
    ";
    
    printf($html_block, ucwords($fname) , ucwords($lname) )
?>


<!-- class 11 printf 2nd part -->







</body>
</html>