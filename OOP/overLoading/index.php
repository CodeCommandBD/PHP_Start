<?php

use function PHPSTORM_META\argumentsSet;

    class FatherOverLoading{


        public function mymetod(...$args) {

            $count = count($args);

            if($count == 1 ){
                echo "Recived one argument ", $args[0];
                
            }elseif($count == 2 ){
                echo "Recived two argument ", $args[0],$args[1];
               
            }elseif($count == 3 ){
                echo "Recived three argument ", $args[0],$args[1],$args[2];
            
            }else{
                echo "Recived no argument";
            }
           
        }
    }

   $myObj = new FatherOverLoading();
   $myObj->mymetod("my first arg");
   echo "<br>";
   $myObj->mymetod("my first arg","my second arg");
   echo "<br>";
   $myObj->mymetod("my first arg","my second arg","my third arg");


?>
