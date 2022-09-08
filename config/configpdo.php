<?php 
$server = "localhost";
$user = "root";
$pass = "";
$db = "resepmakananku";






    $conn = new PDO("mysql:host=$server; dbname=$db", $user, $pass);
    // set the PDO error mode to exception
    
?>