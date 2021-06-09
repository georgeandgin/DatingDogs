<?php

$current_page = explode('/', $_SERVER['REQUEST_URI']);
$current_page = end($current_page);

$host = "localhost";
$user = "root";
$password = "";
$database = "dogs";

if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

?>