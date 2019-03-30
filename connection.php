<?php
$host="localhost"; 
$db="tugas"; 
$user="root"; 
$pass=""; 

$connection = mysqli_connect($host, $user, $pass, $db);
if (!$connection){
        die("Connection Failed:".mysqli_connect_error());
    } 
?> 