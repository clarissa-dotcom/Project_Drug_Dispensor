<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Pharmacy Record</title>
</head>
<body>
<h2>Update Pharmacy Record</h2>
<form action="" name="Update Pharmacy Record" method="POST">
Fill in the details below: <br>
    <label for="Pharmacy_ID">ID: </label> <br>
    <input type="text" id="Pharmacy_ID" name="Pharmacy_ID"/> <br/>

    <label for="Pharmacy_Name">Pharmacy Name: </label> <br>
    <input type="text" id="Pharmacy_Name" name="Pharmacy_Name"/> <br/>

    <label for="Pharmacy_Phone">Phone Number: </label> <br>
    <input type="tel" id="Pharmacy_Phone" name="Pharmacy_Phone" placeholder="07xxxxxxxx"/> <br>

    <label for="Email">Email: </label> <br>
    <input type="email" id="Email" name="Email"/> <br>

    <label for="Address">Address: </label> <br>
    <input type="text" id="Address" name="Address"/> <br>

    <label for="Password">Password: </label> <br>
    <input type="password" name="Password"/> <br>

    <button type="submit" name="Update">Update</button>

</form>
</body>
</html>

<?php 
require_once("mysqlconnect.php");

if(isset($_POST['Update'])){
    $ID = $_POST['Pharmacy_ID'];
    $Name = $_POST['Pharmacy_Name'];
    $Phone_Number = $_POST['Pharmacy_Phone'];
	$Email = $_POST['Email'];
	$Address = $_POST['Address'];
    $Password = $_POST['Password'];

    $sql =  "UPDATE `pharmacy` SET Pharmacy_Name='$Name', Pharmacy_Phone='$Phone_Number', Email='$Email', Address='$Address', Password='$Password'
        WHERE `Pharmacy_ID`= $ID";
  
$rs = mysqli_query($conn,$sql);
if($rs){
        echo "Record updated successfully";
}

}
?>

