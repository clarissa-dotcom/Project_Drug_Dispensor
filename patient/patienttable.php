<?php 
require_once("mysqlconnect.php");

$sql="Select * from patient";
$result=$conn->query($sql);  
$row= $result->fetch_assoc();  
print_r($row);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Patients Table</title>
</head>
<body>
    <h4>Patients Table</h4>
    <table>
        <?php
            while($row = $result->fetch_assoc()){
        ?>
        <tr>
            <th>SSN</th>
            <th>Name</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Address</th>
            <th>Gender</th>
            <th>Date of Birth</th>
            <th>Password</th>
        </tr>
        <tr>
            <td><?php echo $row['Patient_SSN'];?></td>
            <td><?php echo $row['Patient_Name'];?></td>
            <td><?php echo $row['Phone_Number'];?></td>
            <td><?php echo $row['Email'];?></td>
            <td><?php echo $row['Address'];?></td>
            <td><?php echo $row['Gender'];?></td>
            <td><?php echo $row['Date_of_Birth'];?></td>
            <td><?php echo $row['Password'];?></td>
        </tr>
        <?php
            }
        ?>
 </table>
</body>
</html>