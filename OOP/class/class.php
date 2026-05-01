<!-- class -->

<?php 
    class person {


        // properties 
        public $person_name;
        public $person_age;
        public $person_address;



        // constructor 
        public function __construct($person_name,$person_age,$person_address)
        {
            echo "this is constructor<br>";
            $this->person_name = $person_name;
            $this->person_age = $person_age;
            $this->person_address = $person_address;

        }


        // method
        public function getAddress() {
            return 
            $this->person_name . "," . 
            $this->person_age . "," . $this->person_address;


        }       
    }

    // $new_person = new person();
    // echo $new_person->getAddress("shanto","23","dhaka");

?>