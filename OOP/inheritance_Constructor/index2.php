<!-- constructor inside only child class need to call parent constructor using parent keyword -->
<!-- constructor inside only child class pass parameters to parent constructor using parent keyword -->


<?php 
    class father{
        
    }

    class son extends father{
       
        public function __construct($name){
            echo $name;
            echo "<br>";
        }

    }

    $sonOBJ = new son("Ahmad");
    


?>