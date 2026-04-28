<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>overAll PHP Course</title>
</head>

<body>

    <!-- array  formula  -->


    <!-- indexed array   -->
    <!-- associative array   -->
    <!-- multidimensional array   -->




    <!-- indexed array   -->
    <!-- ====================================== -->
    <?php
    $person = ["sona", "mona", "kona"];
    echo $person[1];

    // array values counter =====================
    echo count($person);

    echo "<br>";
    echo "<br>";

    // data type with value show kore ===================
    var_dump($person);

    echo "<br>";
    echo "<br>";

    // array full details show kore =====================
    echo "<pre>";
    print_r($person);
    echo "</pre>";

    // foreach loop ==========================
    foreach ($person as $single_person) {
        echo $single_person . "<br>";
    }

    // for loop =============================
    for ($data = 0; $data < count($person); $data++) {
        echo $person[$data] . "<br>";
    }
    ?>


    <br>
    <br>
    <br>
    <br>


    <!-- single associative array   -->
    <?php
    $person = [
        "name" => "shn",
        "age" => 25,
        "skill" => "programmer"
    ];

    var_dump($person);

    echo "<br>";
    echo "<br>";

    foreach ($person as $key => $single_person) {
        echo $key . " => " . $single_person . "<br>";
    }
    ?>

    <br>
    <br>

    <!-- multidimensional array   -->
    <?php
    $person = [
        [
            "name" => "shanto",
            "age" => 25,
            "skill" => "javascript",
            "address" => [
                "house_no" => 12,
                "village" => "barisal",
                "post" => 2455,
                "hobbies" => [
                    "coding",
                    "reading",
                    "writing"
                ]
            ]
        ],
        [
            "name" => "umra",
            "age" => 22,
            "skill" => "java",
            "address" => [
                "house_no" => 12,
                "village" => "barisal",
                "post" => 2455,
                "hobbies" => [
                    "coding",
                    "reading",
                    "writing"
                ]
            ]
        ],
        [
            "name" => "jon",
            "age" => 21,
            "skill" => "react",
            "address" => [
                "house_no" => 12,
                "village" => "barisal",
                "post" => 2455,
                "hobbies" => [
                    "coding",
                    "reading",
                    "writing"
                ]
            ]
        ],
    ];




    // একটি ফাংশন বানাচ্ছি যা যেকোনো সাইজের/গভীরতার অ্যারে প্রিন্ট করতে পারবে
    function printArrayDynamically($array)
    {
        echo "<ul>";
        foreach ($array as $key => $value) {
            if (is_array($value)) {


                
                $displayKey = is_numeric($key) ? "" : "<strong>$key:</strong>";




                echo "<li>$displayKey";

                
                printArrayDynamically($value);

                echo "</li>";

                
            } else {
                
                $displayKey = is_numeric($key) ? "" : "<strong>$key:</strong> ";

                echo "<li>$displayKey $value</li>";
            }
        }
        echo "</ul>";
    }

  
    foreach ($person as $single_person) {
        printArrayDynamically($single_person);
        echo "<hr>";
    }

    ?>









</body>

</html>