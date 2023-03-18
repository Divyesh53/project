<?php

$servername = "sql946.main-hosting.eu";
$username = "u839608378_thinkhp";
$password = "ThinkDM001@";
$database = "u839608378_thinkhp_base";

// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "thinkhp_base";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die("Database is not connected".mysqli_connect_error());
}
?>