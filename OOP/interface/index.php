<?php
    interface myconfig{
        public function Data();
    }

    class DataOparation implements myconfig{
        public function Data(){
            echo "Hellow World!";
        }
    }

    $myconfig = new DataOparation();
    $myconfig->Data();

?>