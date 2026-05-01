<!-- constructor inside both class need to call parent constructor using parent keyword -->
<!-- constructor inside both class pass parameters to parent constructor using parent keyword -->


<?php 
    class father{
        public function __construct($name_father){
            echo $name_father;
            echo "<br>";
        }
    }

    class son extends father{
       
        public function __construct($name_son){
            parent::__construct($name_son);
            echo "<br>";
        }

    }


    // $fatherOBJ = new father("Abdullah");
    $sonOBJ = new son("Ahmad");
    


?>