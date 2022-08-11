<?php
$sname = "localhost";
$username = "root";
$pass = "";
$db_name = "task";
$conn = mysqli_connect($sname, $username, $pass, $db_name);
if(!$conn)
{
    echo "connection failed";
}
