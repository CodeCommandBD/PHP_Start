<?php 
    // setcookie(name, value, expire, path, domain, secure, httponly)


    setcookie('cookieName', 'tecnology', time()+20000, '/');
    $cookie_value = $_COOKIE['cookieName'];
    echo $cookie_value;

    // Delete Cookie 
    // setcookie('cookieName', '', time()-20000, '/');

?>