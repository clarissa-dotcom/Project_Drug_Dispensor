<?php

$servername = "localhost";
$username = "root";
$password = "IceBaby";
$dbname = "drug_dispensor";

$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}else echo "Connection Successful <br>";

?>
