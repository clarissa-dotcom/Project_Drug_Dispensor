<html>
    <head>
        <title>Pharmacy Home Page</title>
        <link rel="stylesheet" href="styles.css">
      </head>
    <body> 
        <h1>Welcome Pharmacist!</h1>
        <h2>Prescriptions Table</h2>
    <table border="1">
        <tr>
            <th>Prescription ID</th>
            <th>Patient SSN</th>
            <th>Doctor SSN</th>
            <th>Drug ID</th>
            <th>Dosage</th>
            <th>Prescription Date</th>
        </tr>

<?php 
require_once("mysqlconnect.php");

$sql="Select * from prescription_history";
$result=$conn->query($sql);  
if($result->num_rows>1){
    while($row=$result->fetch_assoc()){
        echo "<tr><td>".$row["Prescription_ID"]."</td><td>".$row["Patient_SSN"]."</td><td>".$row["Doctor_SSN"]."</td><td>".$row["Drug_ID"]."</td><td>".$row["Dosage"]."</td><td>".$row["Prescription_Date"]."</td></tr>";
    }
}echo"</table>"; 
?>
</table>
<br> <br>

<form action="drugstable.php" method="POST">
      <button type="submit" name="submit">View Drugs</button>
     </form>
     <br>

    <form action="form_drugs.php" method="POST">
      <button type="submit" name="submit">Add Drugs</button>
     </form>
     <br>

     <form action="update_drugs.php" method="POST">
      <button type="submit" name="submit">Update Drugs</button>
     </form>
     <br>

     <form action="deletedrugs.php" method="POST">
      <button type="submit" name="submit">Delete Drugs</button>
     </form>
     <br>

     <form action="homepage.html" method="POST">
      
        <button type="submit" name="Logout">Log Out</button>
     </form>
    </body>
  </html>