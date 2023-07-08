<?php 
require_once("mysqlconnect.php");

$sql="Select * from pharmacy";
$result=$conn->query($sql);  
$row= $result->fetch_assoc();  
print_r($row);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Pharmacy Table</title>
</head>
<body>
    <h4>Pharmacy Table</h4>
    <table>
        <?php
            while($row = $result->fetch_assoc()){
        ?>
        <tr>
            <td><?php echo $row['Pharmacy_ID'];?></td>
            <td><?php echo $row['Pharmacy_Name'];?></td>
            <td><?php echo $row['Pharmacy_Phone'];?></td>
            <td><?php echo $row['Email'];?></td>
            <td><?php echo $row['Address'];?></td>
            <td><?php echo $row['Password'];?></td>
        </tr>
        <?php
            }
        ?>
 </table>
</body>
</html>