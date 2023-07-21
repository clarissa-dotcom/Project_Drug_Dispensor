<!DOCTYPE html>
<html>
    <head>
        <title>Pharmacy Table</title>
</head>
<body>
    <h4>Pharmacy Table</h4>
    <table border="1">
    <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Address</th>
            <th>Password</th>
        </tr>
<?php 
require_once("mysqlconnect.php");

$sql="Select * from pharmacy";
$result=$conn->query($sql);  
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        echo "<tr><td>".$row["Pharmacy_ID"]."</td><td>".$row["Pharmacy_Name"]."</td><td>".$row["Pharmacy_Phone"]."</td><td>".$row["Email"]."</td><td>".$row["Address"]."</td><td>".$row["Password"]."</td></tr>";
    }
}echo"</table>";
?>
 </table>
</body>
</html>