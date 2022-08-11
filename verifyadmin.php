<?php
include "db_conn.php";
// session_unset();
// session_destroy();
// session_start();
$uname = $_POST['uname'];
$pass = $_POST['Pass'];
echo $uname , $pass . "<br>";
if(!empty($uname) && !empty($pass))
{
    $sql ="select * from adminlogin where uname='$uname' AND password='$pass'";
    $result = mysqli_query($conn,$sql);
  
    if(mysqli_num_rows($result))
    {
      
      $row = mysqli_fetch_assoc($result);
      ECHO 'HERE 1';
      if($row['uname'] ===$uname &&$row['password']===$pass)
      {
            ECHO "HERE2";
          $_SESSION['admin'] = $uname;
          unset($_SESSION["username"]);
          unset($_SESSION["id"]);
          header("location:home.php?session=" . $_SESSION['admin'] );
          exit();
      }
    }
}

   