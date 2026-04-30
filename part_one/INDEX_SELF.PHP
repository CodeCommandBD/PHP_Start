<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
        <input type="text" placeholder="Enter your name" name="name" id=""><br><br>
        <input type="number" placeholder="Enter your age" name="age" id=""><br><br>
        <input type="text" placeholder="Enter your roll" name="roll" id=""><br><br>

        <button type="submit">Submit</button>
    </form>


    <?php
    // isSet hocce oi page ta load hoyeche ki na sheta jante hoy . r REQUEST_METHOD hocce sheita GET na POST ta jante hoy

    
        if(isset($_SERVER['REQUEST_METHOD']) == "GET"){
            
            $name = $_GET['name'];
            $age = $_GET['age'];
            $roll = $_GET['roll'];

            if(!empty($name)){
                echo "user name is ";
                echo $name;
                echo "<br>";
            }
            else{
                echo "user name is empty";
                echo "<br>";
            }
           

        }
    
    ?>
</body>
</html>