<!-- constructor inside only parent class no need to call  -->
<!-- constructor inside only parent class pass parameters  -->




<?php 
    class father{
        public function __construct($name){
            echo $name;
            echo "<br>";
        }
    }

    class son extends father{
        

    }

    $sonOBJ = new son("Ahmad");
    


?>