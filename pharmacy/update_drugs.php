<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Drugs Record</title>
</head>
<body>
<h2>Update Drugs Record</h2>
<form action="" name="Update Drugs Record" method="POST">
Fill in the details below: <br>
    <label for="Drug_ID">Drug ID: </label> <br>
    <input type="text" id="Drug_ID" name="Drug_ID"/> <br/>

    <label for="Drug_Name">Drug Name: </label> <br>
    <input type="text" id="Drug_Name" name="Drug_Name"/> <br/>

    <label for="Drug_Strength">Drug Strength: </label> <br>
    <input type="text" id="Drug_Strength" name="Drug_Strength"/> <br/>

    <label for="Price">Price: </label> <br>
    <input type="text" id="Price" name="Price"/> <br>

    <button type="submit" name="Update">Update</button>

</form>
</body>
</html>

<?php 
require_once("mysqlconnect.php");

if(isset($_POST['Update'])){
    $ID = $_POST['Drug_ID'];
    $Name = $_POST['Drug_Name'];
    $Drug_Strength = $_POST['Drug_Strength'];
    $Price = $_POST['Price'];

    $sql =  "UPDATE `drugs` SET Drug_ID='$ID', Drug_Name='$Name', Drug_Strength='$Drug_Strength', Price='$Price'
        WHERE `Drug_ID`= $ID";
  
$rs = mysqli_query($conn,$sql);
if($rs){
        echo "Record updated successfully";
}

}


?>

