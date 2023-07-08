<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Patient Record</title>
</head>
<body>
<h2>Delete Patient Record</h2>
<form action="" name="Delete Patient Record" method="POST">
Fill in the details below: <br>
    <label for="Patient_SSN">Patient SSN: </label> <br>
    <input type="text" id="Patient_SSN" name="Patient_SSN" required/> <br/>

    <label for="Patient_Name">Patient Name: </label> <br>
    <input type="text" id="Patient_Name" name="Patient_Name" required/> <br/>

    <button type="submit" name="Delete">Delete</button>

</form>
</body>
</html>

<?php 
require_once("mysqlconnect.php");

if(isset($_POST['Delete'])){
    $SSN = $_POST['Patient_SSN'];
    $Name = $_POST['Patient_Name'];

    $sql =  "DELETE FROM `patient` 
        WHERE `Patient_SSN`= $SSN";
  
$rs = mysqli_query($conn,$sql);
if($rs){
        echo "Record deleted successfully";
}

}


?>

