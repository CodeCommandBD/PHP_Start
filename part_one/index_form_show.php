<?php

    $student_list = $_POST["student"];

    $mylisting = serialize($student_list);

    echo $mylisting;

?>