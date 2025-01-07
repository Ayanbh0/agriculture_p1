<?php

$hostName = "localhost:3307";
$dbUser = "root";
$passDB = "";
$dbName = "login_registration";

$conn = mysqli_connect($hostName, $dbUser, $passDB, $dbName) ;

if(!$conn){
    die("something went wrong....");
}

?>