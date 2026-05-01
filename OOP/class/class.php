<!-- class -->

<?php 
    class person {


        // properties 
        public $person_name;
        public $person_age;
        public $person_address;


        // method
        public function getAddress( $person_name , $person_age , $person_address) {
            return 
            $this->person_name = $person_name . "," . 
            $this->person_age = $person_age . "," . $this->person_address = $person_address;


        }       
    }

    // $new_person = new person();
    // echo $new_person->getAddress("shanto","23","dhaka");

?>