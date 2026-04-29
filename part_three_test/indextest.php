<?php
    $title = $_POST['title'];
    $package = $_POST['package'];
    $plan = $_POST['plan'];
    $field_name = $_POST['field_name'];

    $field_count = count($field_name);
    echo "<br>";
    echo "<br>";
    echo "<br>";

    for($i=0; $i < $field_count; $i++){
        echo "Feature " .  $field_name[$i];
        echo "<br>";
    }


     

?>