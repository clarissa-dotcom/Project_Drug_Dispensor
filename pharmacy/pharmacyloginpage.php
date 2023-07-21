<?php
session_start();

include_once "mysqlconnect.php";

if(isset($_POST["Pharmacy_ID"])&&isset($_POST["Password"])){

function validate($data){
$data=trim($data);
$data=stripslashes($data);
$data=htmlspecialchars($data);
return $data;
}    

$ID=validate($_POST["Pharmacy_ID"]);
$Password=validate($_POST["Password"]);

if(empty($ID)){
    header("Location: pharmacylogin.php?error=Username is required");
    exit();
}else if(empty($Password)){
    header("Location: pharmacylogin.php?error=Password is required");
    exit();
}else {
    $sql="Select * from pharmacy where Pharmacy_ID ='$ID' AND Password ='$Password'";

    $result=mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)===1){
       $row=mysqli_fetch_assoc($result);
       if($row['Pharmacy_ID']===$ID && $row['Password']=== $Password)
       {
        $_SESSION['Pharmacy_ID']=$row['Pharmacy_ID'];
        $_SESSION['Password']=$row['Password'];
        header("Location: pharmacyhome.php");
        
       }else{
        header("Location: pharmacylogin.php?error=Incorrect username or password");
        exit();
    }
    } else{
        header("Location: pharmacylogin.php?error=Incorrect username or password");
        exit();
    }
}

}else{
    header("Location: pharmacylogin.php");
    exit();

}

?>