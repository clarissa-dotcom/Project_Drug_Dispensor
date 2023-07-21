<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drug Registration Form</title>
</head>
<body>
    <h2>Drug Registration</h2>
<form action="" name="Drug Registration" method="POST">
    Fill in the details below: <br>
    <label for="Drug_ID">Drug ID: </label> <br>
    <input type="text" id="Drug_ID" name="Drug_ID" required/> <br/>

    <label for="Drug_Name">Drug Name: </label> <br>
    <input type="text" id="Drug_Name" name="Drug_Name" required/> <br>

    <label for="Drug_Strength">Drug Strength: </label> <br>
    <input type="text" id="Drug_Strength" name="Drug_Strength" required/> <br>

    <label for="Price">Price: </label> <br>
    <input type="text" id="Price" name="Price" required/> <br>
    
    <button type="submit" name="Submit">Register</button>
    
</form>
</body>
</html>

<?php

require_once("mysqlconnect.php");

if(isset($_POST['Submit'])){
	$Drug_ID = $_POST['Drug_ID'];
	$Drug_Name = $_POST['Drug_Name'];
    $Drug_Strength = $_POST['Drug_Strength'];
    $Price = $_POST['Price'];

    $sql = "INSERT INTO `drugs` (`Drug_ID`, `Drug_Name`, `Drug_Strength`, `Price`)
VALUES ('$Drug_ID', '$Drug_Name', '$Drug_Strength', '$Price')";

$run = mysqli_query($conn,$sql);
if($run){
	echo "New drug entered successfully!";
}
else{
	echo "New record not submitted";
}

}




?>