<?php 
    // abstruct hocce ekta concept jekhane kono class ke nirdishto vabe toiri kora hoyna 
    
    // ai class gula theke amra onno class toiri kori 

    // abar kono abstruct class theke child class banate hole abstruct class er protita property and function ke child class e niye ashte hoy

    abstract class Student{
        public $name;
        public $age;

        public function __construct($name, $age){
            $this->name = $name;
            $this->age = $age;
        }

        abstract public function getStudentName();
    }

    class Teacher extends Student{
        public function getStudentName(){
            return $this->name;
        }
    }

    $std = new Teacher("Moni", 25);
    echo $std->getStudentName();
    

?>