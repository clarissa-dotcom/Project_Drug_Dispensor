<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Pharmacy Record</title>
</head>
<body>
<h2>Delete Pharmacy Record</h2>
<form action="" name="Delete Pharmacy Record" method="POST">
Fill in the details below: <br>
    <label for="Pharmacy_ID">Pharmacy ID: </label> <br>
    <input type="text" id="Pharmacy_ID" name="Pharmacy_ID"/> <br/>

    <label for="Pharmacy_Name">Pharmacy Name: </label> <br>
    <input type="text" id="Pharmacy_Name" name="Pharmacy_Name"/> <br/>

    <button type="submit" name="Delete">Delete</button>

</form>
</body>
</html>

<?php 
require_once("mysqlconnect.php");

if(isset($_POST['Delete'])){
    $ID = $_POST['Pharmacy_ID'];
    $Name = $_POST['Pharmacy_Name'];

    $sql =  "DELETE FROM `pharmacy` 
        WHERE `Pharmacy_ID`= $ID";
  
$rs = mysqli_query($conn,$sql);
if($rs){
        echo "Record deleted successfully";
}

}


?>

