<?php 
    // traits use hoy multiple class ar theke functionality nebar jonno 

    // inheritance er modde ekbar er besi extend kora jay na tai traits use kora hoy

    // traits use korle ekta class ar modde onek class ar functionality neya jay



    trait personinfo{
        public function GetName(){
            echo "name";
        }
    }
    trait personinfo2{
        public function GetName2(){
            echo "name2";
        }
    }


    class admin{
        use personinfo;
        use personinfo2;

        
    }


    class admin2{
        use personinfo;
        use personinfo2;
        

        
    }




    $res = new admin();
    $res = new admin2();
    $res->GetName();
    $res->GetName2();









    
?>