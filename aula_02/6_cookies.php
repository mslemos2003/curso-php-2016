<?php
header ('Content-type: text/html; charset=UTF-8');
$cookie_name = "user";
$cookie_value = "John Doe";

// setar Cookies
setcookie($cookie_name, $cookie_value, time() +3600); 

/*
//
// Apagar cookie
setcookie($cookie_name, $cookie_value, time()-3600);
var_dump($_COOKIE);
*/

?>