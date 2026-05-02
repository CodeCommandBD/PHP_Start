<?php

    class FatherStatic{
        public static $num1 = 10;
        public static $num2 = 20;

        public static function addnumbar(){
            $sum = self::$num1 + self::$num2;
            echo "this is father class";
            echo "<br>";
            return $sum;
        }
    }

    class sonStatic extends FatherStatic{
        public $num3 = 30;

        
    }

    

    echo FatherStatic::$num1;
    echo "<br>";
    echo FatherStatic::$num2;
    echo "<br>";
    echo FatherStatic::addnumbar();

    

?>