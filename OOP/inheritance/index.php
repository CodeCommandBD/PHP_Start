<?php

    class FatherInharitence{
        public $num1 = 10;
        public $num2 = 20;

        public function addnumbar(){
            $sum = $this->num1 + $this->num2;
            echo "this is father class";
            echo "<br>";
            return $sum;
        }
    }

    class sonInharitence extends FatherInharitence{
        public $num3 = 30;

    }

    $newSon = new sonInharitence();
?>