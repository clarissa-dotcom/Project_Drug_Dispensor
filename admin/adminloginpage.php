<?php
session_start();

include_once "mysqlconnect.php";

if(isset($_POST["Admin_ID"])&&isset($_POST["Password"])){

function validate($data){
$data=trim($data);
$data=stripslashes($data);
$data=htmlspecialchars($data);
return $data;
}    

$ID=validate($_POST["Admin_ID"]);
$Password=validate($_POST["Password"]);

if(empty($ID)){
    header("Location: adminlogin.php?error=Username is required");
    exit();
}else if(empty($Password)){
    header("Location: adminlogin.php?error=Password is required");
    exit();
}else {
    $sql="Select * from admin where Admin_ID ='$ID' AND Password ='$Password'";

    $result=mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)===1){
       $row=mysqli_fetch_assoc($result);
       if($row['Admin_ID']===$ID && $row['Password']=== $Password)
       {
        $_SESSION['Admin_ID']=$row['Admin_ID'];
        $_SESSION['Password']=$row['Password'];
        header("Location: adminhome.php");
        
       }else{
        header("Location: adminlogin.php?error=Incorrect username or password");
        exit();
    }
    } else{
        header("Location: adminlogin.php?error=Incorrect username or password");
        exit();
    }
}

}else{
    header("Location: adminlogin.php");
    exit();

}

?>