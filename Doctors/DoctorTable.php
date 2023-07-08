<!DOCTYPE html>
<html>
    <head>
        <title>Doctor Table</title>
</head>
<body>
    <h4>Doctor Table</h4>
    <table>
        <tr>
            <th>SSN </th>
            <th>Doctor's Name  </th>
            <th>Phone Number </th>
            <th>Email Address  </th>
            <th>Address  </th>
            <th>Years of experience</th>
            <th>Password</th>
        </tr>
<?php 
require_once("connect.php");

$sql="Select * from doctors ";
 $result=$conn->query($sql);    
        
 if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        echo "<tr><td>".$row["Doctor_SSN"]."</td><td>".$row["Doctor_Name"]."</td><td>".$row["Phone Number"]."</td><td>".$row["Doctor_Email"]."</td><td>".$row["Address"]."</td><td>".$row["Years_of_Experinece"]."</td><td>".$row["Password"]."</td></tr>";
    }
}echo"</table>";

?>
 </table>
</body>
</html>
