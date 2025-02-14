<?php
// intialize the connection variables
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "foodhub";


$db = mysqli_connect($servername, $username, $password, $dbname);
// validation
if (!$db) {    
    die("Connection failed: " . mysqli_connect_error());
}
