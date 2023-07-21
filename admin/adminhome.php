<!DOCTYPE html>
<html>
<head>
    <title>Admin Home Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Welcome, Admin!</h1>

    <h2>Patients Table</h2>
    <table border="1">
        <tr>
        <th>SSN</th>
            <th>Name</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Address</th>
            <th>Gender</th>
            <th>Date of Birth</th>
        </tr>
        <?php 
require_once("mysqlconnect.php");

$sql="Select * from patient";
$result=$conn->query($sql);  
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        echo "<tr><td>".$row["Patient_SSN"]."</td><td>".$row["Patient_Name"]."</td><td>".$row["Phone_Number"]."</td><td>".$row["Email"]."</td><td>".$row["Address"]."</td><td>".$row["Gender"]."</td><td>".$row["Date_of_Birth"]."</td></tr>";
    }
}echo"</table>";
?>


    <h2>Doctors Table</h2>
    <table border="1">
    <tr>
            <th>SSN</th>
            <th>Name</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Years of Experience</th>
        </tr>

<?php 
require_once("mysqlconnect.php");

$sql="Select * from doctor";
$result=$conn->query($sql);  
if($result->num_rows>1){
    while($row=$result->fetch_assoc()){
        echo "<tr><td>".$row["Doctor_SSN"]."</td><td>".$row["Doctor_Name"]."</td><td>".$row["Phone_Number"]."</td><td>".$row["Email"]."</td><td>".$row["Years_of_Experience"]."</td></tr>";
    }
}echo"</table>"; 
?>

    <h2>Pharmacy Table</h2>
    <table border="1">
    <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Address</th>
        </tr>
<?php 
require_once("mysqlconnect.php");

$sql="Select * from pharmacy";
$result=$conn->query($sql);  
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        echo "<tr><td>".$row["Pharmacy_ID"]."</td><td>".$row["Pharmacy_Name"]."</td><td>".$row["Pharmacy_Phone"]."</td><td>".$row["Email"]."</td><td>".$row["Address"]."</td></tr>";
    }
}echo"</table>";
?>
<br>
    <form action="adminlogin.php" method="POST">
        <button type="submit" name="Logout">Log Out</button>
     </form>

</body>
</html>
