<?php
require_once("connect.php");

if(isset($_POST['submit'])){
        $name = $_POST['Doc_Name'];
        $SSN = $_POST['Doc_SSN'];
        $phoneNo = $_POST['Phone_Number'];
        $email = $_POST['Email_Address'];
        $address = $_POST['address'];
        $YOE = $_POST['YOE'];
        $password = $_POST['password'];

    }
    $sql = "INSERT INTO `doctors` (`Doctor_SSN`, `Doctor_Name`, `Phone Number`, `Doctor_Email`, `Address`, `Years_of_Experinece`, `Password`)
    VALUES ('$SSN', '$name', '$phoneNo', '$email', '$address', '$YOE', '$password')";

    $run = mysqli_query($conn,$sql);
    if($run){
        echo "Form submitted successfully!";
    }
    else{
        echo "Form not submitted";
    }
    
?>
