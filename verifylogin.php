<?php
include "db_conn.php";
session_start();
$uname = $_POST['PhoneNum'];
$pass = $_POST['Pass'];
// echo $uname , $pass . "<br>";
if(!empty($uname) && !empty($pass))
{
    
  $sql ="select * from customers where Phone='$uname' AND DOB='$pass'";
  $result = mysqli_query($conn,$sql);

  if(mysqli_num_rows($result))
  {
    
    $row = mysqli_fetch_assoc($result);
    
    if($row['Phone'] ===$uname &&$row['DOB']===$pass)
    {
        $_SESSION['username'] = $row['Phone'];
        $_SESSION['id'] = $row['Id'];
        header('location:home.php');
        exit();
    }
    else{
    header('location:login.php');
    exit();
    }
  }
  else{
    header('location:login.php');
    exit();
  }
}
else{
    header('location:login.php');
    exit();
}
?>