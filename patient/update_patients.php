<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Patient Record</title>
</head>
<body>
<h2>Update Patient Record</h2>
<form action="" name="Update Patient Record" method="POST">
Fill in the details below: <br>
    <label for="Patient_SSN">Patient SSN: </label> <br>
    <input type="text" id="Patient_SSN" name="Patient_SSN" required/> <br/>

    <label for="Phone_Number">Phone Number: </label> <br>
    <input type="tel" id="Phone_Number" name="Phone_Number" placeholder="07xxxxxxxx"/> <br>

    <label for="Email">Email: </label> <br>
    <input type="email" id="Email" name="Email"/> <br>

    <label for="Address">Address: </label> <br>
    <input type="text" id="Address" name="Address"/> <br>

    <br> <label for="Password">Password: </label> <br>
    <input type="password" name="Password" required/> <br>

    <button type="submit" name="Update">Update</button>

</form>
</body>
</html>

<?php 
require_once("mysqlconnect.php");

if(isset($_POST['Update'])){
    $SSN = $_POST['Patient_SSN'];
    $Phone_Number = $_POST['Phone_Number'];
	$Email = $_POST['Email'];
	$Address = $_POST['Address'];
    $Password = $_POST['Password'];

    $sql =  "UPDATE `patient` SET Phone_Number='$Phone_Number', Email='$Email', Address='$Address', Password='$Password'
        WHERE `Patient_SSN`= $SSN";
  
$rs = mysqli_query($conn,$sql);
if($rs){
        echo "Record updated successfully";
}

}


?>

