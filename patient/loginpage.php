<?php
session_start();

include_once "mysqlconnect.php";

if(isset($_POST["Patient_SSN"])&&isset($_POST["Password"])){

function validate($data){
$data=trim($data);
$data=stripslashes($data);
$data=htmlspecialchars($data);
return $data;
}    

$SSN=validate($_POST["Patient_SSN"]);
$Password=validate($_POST["Password"]);

if(empty($SSN)){
    header("Location: patientlogin.php?error=Username is required");
    exit();
}else if(empty($Password)){
    header("Location: patientlogin.php?error=Password is required");
    exit();
}else {
    $sql="Select * from patient where Patient_SSN ='$SSN' AND Password ='$Password'";

    $result=mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)===1){
       $row=mysqli_fetch_assoc($result);
       if($row['Patient_SSN']===$SSN && $row['Password']=== $Password)
       {
        $_SESSION['Patient_SSN']=$row['Patient_SSN'];
        $_SESSION['Password']=$row['Password'];
        header("Location: patienthome.html");
        
       }else{
        header("Location: patientlogin.php?error=Incorrect username or password");
        exit();
    }
    } else{
        header("Location: patientlogin.php?error=Incorrect username or password");
        exit();
    }
}

}else{
    header("Location: patientlogin.php");
    exit();

}

?>