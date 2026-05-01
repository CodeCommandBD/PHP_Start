<?php

    class Father{
        public $num1 = 10;
        public $num2 = 20;

        public function addnumbar(){
            $sum = $this->num1 + $this->num2;
            echo "this is father class";
            echo "<br>";
            return $sum;
        }
    }

    class son extends Father{
        public $num3 = 30;

        
    }

    $sonOBJ = new son();

    

?>