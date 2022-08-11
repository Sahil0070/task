<?php
include "db_conn.php";
$name = $_POST['Name'];
$phone= $_POST['phone'];
$dob= $_POST['dob'];
$age = $_POST['age'];
$gender = $_POST['Gender'];


$sql = "insert into customers (Name,DOB,Gender,Phone,Age) values('$name','$dob','$gender',$phone,$age)";
echo $sql;
$result = mysqli_query($conn,$sql);
if($result)
{
    $_SESSION['username'] = $result['Phone'];
    $_SESSION['id'] = $result['Id'];
    header('location:home.php');
    exit();
}

?>