<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctors Prescription Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Doctors Prescription</h2>

    <form action="drugstable.php" method="POST">
      <button type="submit" name="submit">View Drugs</button>
     </form>

     <br> 

<form action="" name="Doctors Prescription" method="POST">
    Fill in the details below: <br>
    <label for="Prescription_ID">Prescription ID: </label> <br>
    <input type="text" id="Prescription_ID" name="Prescription_ID" required/> <br>

    <label for="Patient_SSN">Patient SSN: </label> <br>
    <input type="text" id="Patient_SSN" name="Patient_SSN" required/> <br>

    <label for="Doctor_SSN">Doctor SSN: </label> <br>
    <input type="text" id="Doctor_SSN" name="Doctor_SSN" required/> <br>

    <label for="Drug_ID">Drug ID: </label> <br>
    <input type="text" id="Drug_ID" name="Drug_ID" required/> <br>

    <label for="Dosage">Dosage: </label> <br>
    <input type="text" id="Dosage" name="Dosage" required/> <br>

    <label for="Prescription_Date">Date of Prescription: </label>
    <input type="date" id="Prescription_Date" name="Prescription_Date" /> <br>

    <button type="submit" name="Submit">Submit</button>
     <br>

</form>
</body>
</html>

<?php

require_once("mysqlconnect.php");

if(isset($_POST['Submit'])){
    $Prescription_ID = $_POST['Prescription_ID'];
	$Patient_SSN = $_POST['Patient_SSN'];
	$Doctor_SSN = $_POST['Doctor_SSN'];
	$Drug_ID = $_POST['Drug_ID'];
	$Dosage = $_POST['Dosage'];
	$Prescription_Date = $_POST['Prescription_Date'];

	$sql = "INSERT INTO prescription_history (Prescription_ID, Patient_SSN, Doctor_SSN, Drug_ID, Dosage, Prescription_Date) 
VALUES ('$Prescription_ID', '$Patient_SSN', '$Doctor_SSN', '$Drug_ID', '$Dosage','$Prescription_Date')";

$rs = mysqli_query($conn,$sql);
if($rs){
	echo "New prescription entered successfully!";
}
else{
	echo "New record not submitted";
}


}



?>
