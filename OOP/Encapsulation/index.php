<?php 

    // Encapsulation using closures

    
    class student {
        protected $name;

        public function __construct($name){
            $this->name =$name;
        }

        public function __destruct(){
            echo " my name is $this->name. i am a student";
        }
    }

    class teacher extends student{
        public function getStudentName(){
            return "my name is $this->name. i am a teacher ";
        }
    }

    $std = new teacher("moni");
    echo $std->getStudentName()."<br>";

     
    
?>