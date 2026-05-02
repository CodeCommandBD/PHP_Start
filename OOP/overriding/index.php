<?php

    class FatherOverriding{
        public $number1 = 10;
        public $number2 = 20;

        public function __construct() {
            $number3 = $this->number1 + $this->number2;
            echo $number3;
        }
    }

    class sonOverriding extends FatherOverriding{
        public $num1 = 100;
        public $num2 = 200;

        public function __construct() {
            $number3 = $this->num1 + $this->num2;
            echo $number3;
        }
    }

    $sonOBJ = new sonOverriding();
    // $fatherOBJ = new FatherOverriding();
?>
