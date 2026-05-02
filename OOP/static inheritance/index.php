<?php

    class FatherStaticInheritence{
        public static $num1 = 10;
        public static $num2 = 20;

        public static function addnumbar(){
            $sum = self::$num1 + self::$num2;
            return $sum;
        }
    }

    class sonStaticInheritence extends FatherStaticInheritence{
        public $num3 = 30;

        
    }

    // echo FatherStaticInheritence::addnumbar();
    echo "<br>";
    echo sonStaticInheritence::addnumbar();

    

?>