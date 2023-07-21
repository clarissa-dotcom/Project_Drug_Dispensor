<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration Form</title>
</head>
<body>
    <h2>Admin Registration</h2>
<form action="" name="Admin Registration" method="POST">
    Fill in the details below: <br>
    <label for="Admin_ID">Admin ID: </label> <br>
    <input type="text" id="Admin_ID" name="Admin_ID" required/> <br/>

    <label for="Admin_Name">Admin Name: </label> <br>
    <input type="text" id="Admin_Name" name="Admin_Name" required/> <br>

    <br> <label for="Password">Create password: (At least 8 characters long, must include a symbol or number)</label> <br/>
    Password: <input type="password" name="Password" required/> <br/>
    
    <button type="submit" name="Submit">Register</button>
</form>
</body>
</html>

<?php

require_once("mysqlconnect.php");

if(isset($_POST['Submit'])){
	$Admin_ID = $_POST['Admin_ID'];
	$Admin_Name = $_POST['Admin_Name'];
    $Password = $_POST['Password'];

    $sql = "INSERT INTO `admin` (`Admin_ID`, `Admin_Name`, `Password`)
VALUES ('$Admin_ID', '$Admin_Name', '$Password')";

$run = mysqli_query($conn,$sql);
if($run){
	echo "New admin entered successfully!";
}
else{
	echo "New record not submitted";
}

}




?>