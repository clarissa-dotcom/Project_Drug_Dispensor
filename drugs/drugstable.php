<!DOCTYPE html>
<html>
    <head>
        <title>Drugs Table</title>
</head>
<body>
    <h4>Drugs Table</h4>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Drug Name</th>
            <th>Drug Strength</th>
            <th>Price(Ksh.)</th>
        </tr>

<?php 
require_once("mysqlconnect.php");

$sql="Select * from drugs";
$result=$conn->query($sql);  
if($result->num_rows>1){
    while($row=$result->fetch_assoc()){
        echo "<tr><td>".$row["Drug_ID"]."</td><td>".$row["Drug_Name"]."</td><td>".$row["Drug_Strength"]."</td><td>".$row["Price"]."</td></tr>";
    }
}echo"</table>"; 
?>
 </table>
</body>
</html>