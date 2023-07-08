<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacy Registration Form</title>
</head>
<body>
    <h2>Pharmacy Registration</h2>
<form action="" name="Pharmacy Registration" method="POST">
    Fill in the details below: <br>
    <label for="Pharmacy_ID">Pharmacy ID: </label> <br>
    <input type="text" id="Pharmacy_ID" name="Pharmacy_ID" required/> <br/>

    <label for="Pharmacy_Name">Pharmacy Name: </label> <br>
    <input type="text" id="Pharmacy_Name" name="Pharmacy_Name" required/> <br/>

    <label for="Pharmacy_Phone">Phone Number: </label> <br>
    <input type="tel" id="Pharmacy_Phone" name="Pharmacy_Phone" placeholder="07xxxxxxxx" required/> <br/>

    <label for="Email">Email: </label> <br>
    <input type="email" id="Email" name="Email" required/> <br/>

    <label for="Address">Address: </label> <br>
    <input type="text" id="Address" name="Address" required/> <br>

    <br> <label for="Password">Create password: (At least 8 characters long, must include a symbol or number)</label> <br/>
    Password: <input type="password" name="Password" required/> <br/>
    
    <button type="submit" name="Submit">Register</button>
</form>
</body>
</html>

<?php

require_once("mysqlconnect.php");

if(isset($_POST['Submit'])){
	$Pharmacy_ID = $_POST['Pharmacy_ID'];
	$Pharmacy_Name = $_POST['Pharmacy_Name'];
	$Pharmacy_Phone = $_POST['Pharmacy_Phone'];
    $Email = $_POST['Email'];
	$Address = $_POST['Address'];
    $Password = $_POST['Password'];

    $sql = "INSERT INTO `pharmacy` (`Pharmacy_ID`, `Pharmacy_Name`, `Pharmacy_Phone`, `Email`, `Address`, `Password`)
VALUES ('$Pharmacy_ID', '$Pharmacy_Name', '$Pharmacy_Phone', '$Email', '$Address', '$Password')";

$run = mysqli_query($conn,$sql);
if($run){
	echo "New pharmacy entered successfully!";
}
else{
	echo "New record not submitted";
}

}




?>