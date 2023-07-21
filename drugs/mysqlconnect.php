<?php
$hostname = "127.0.0.1";
$username = "root";
$password = "";
$database = "drug dispensing tool";

//Create connection
$conn = new mysqli($hostname, $username, $password, $database);

//Check connection
if ($conn -> connect_error) {
	die("Connection failed: " . $conn -> connect_error);
}
echo "Connected successfully";
?>