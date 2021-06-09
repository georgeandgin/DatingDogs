<?php

$current_page = explode('/', $_SERVER['REQUEST_URI']);
$current_page = end($current_page);

$host = "localhost";
$user = "root";
$password = "";
$database = "dogs";

@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);

if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

?>