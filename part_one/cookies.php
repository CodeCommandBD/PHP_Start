<?php 
    // setcookie(name, value, expire, path, domain, secure, httponly)


    setcookie('model', 'tecnology', time()+20000, '/');

    if(isset($_COOKIE['model'])){
        echo $_COOKIE['model'];
    }
    else{
        echo "Cookie not found";
    }
    
    // Delete Cookie 
    // setcookie('cookieName', '', time()-20000, '/');

?>