<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Drug Record</title>
</head>
<body>
<h2>Delete Drug Record</h2>
<form action="" name="Delete Drug Record" method="POST">
Fill in the details below: <br>
    <label for="Drug_ID">Drug_ID: </label> <br>
    <input type="text" id="Drug_ID" name="Drug_ID" required/> <br/>

    <button type="submit" name="Delete">Delete</button>

</form>
</body>
</html>

<?php 
require_once("mysqlconnect.php");

if(isset($_POST['Delete'])){
    $ID = $_POST['Drug_ID'];

    $sql =  "DELETE FROM `drugs` 
        WHERE `Drug_ID`= $ID";
  
$rs = mysqli_query($conn,$sql);
if($rs){
        echo "Record deleted successfully";
}

}


?>

