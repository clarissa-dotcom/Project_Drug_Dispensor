<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Registration Form</title>
</head>
<body>
    <h2>Patient Registration</h2>

<form action="" name="Patient Registration" method="POST">
    Fill in the details below: <br>
    <label for="Patient_SSN">SSN: </label> <br>
    <input type="text" id="Patient_SSN" name="Patient_SSN" required/> <br>

    <label for="Patient_Name">Name: </label> <br>
    <input type="text" id="Patient_Name" name="Patient_Name" placeholder="Firstname Lastname" required/> <br>

    <label for="Phone_Number">Phone Number: </label> <br>
    <input type="tel" id="Phone_Number" name="Phone_Number" placeholder="07xxxxxxxx" required/> <br>

    <label for="Email">Email: </label> <br>
    <input type="email" id="Email" name="Email" required/> <br>

    <label for="Address">Address: </label> <br>
    <input type="text" id="Address" name="Address" required/> <br>

    <label for="Gender">Gender: </label> <br>
    <input type="radio" id="Gender" name="Gender" value="male"/> Male 
    <input type="radio" id="Gender" name="Gender" value="female"/> Female 
    <input type="radio" id="Gender" name="Gender" value="other"/> Other <br>

    <label for="Date_of_Birth">Date of Birth: </label>
    <input type="date" id="Date_of_Birth" name="Date_of_Birth" min="01-01-2001" max="01-01-2130"/> <br>

    <br> <label for="Password">Create password: (At least 8 characters long, must include a symbol or number)</label> <br>
    Password: <input type="password" name="Password" required/> <br>

    <button type="submit" name="Submit">Register</button>
</form>
</body>
</html>

<?php

require_once("mysqlconnect.php");

if(isset($_POST['Submit'])){
	$Patient_SSN = $_POST['Patient_SSN'];
	$Patient_Name = $_POST['Patient_Name'];
	$Phone_Number = $_POST['Phone_Number'];
	$Email = $_POST['Email'];
	$Address = $_POST['Address'];
	$Gender = $_POST['Gender'];
	$Date_of_Birth = $_POST['Date_of_Birth'];
	$Password = $_POST['Password'];

	$sql = "INSERT INTO patient (Patient_SSN, Patient_Name, Phone_Number, Email, Address, Gender, Date_of_Birth, Password) 
VALUES ('$Patient_SSN', '$Patient_Name', '$Phone_Number', '$Email', '$Address', '$Gender', '$Date_of_Birth', '$Password')";

$rs = mysqli_query($conn,$sql);
if($rs){
	echo "New patient entered successfully!";
}
else{
	echo "New record not submitted";
}


}



?>