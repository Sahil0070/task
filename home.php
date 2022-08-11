<?php
session_start();
// var_dump($_SESSION['admin']);
include "db_conn.php";
if(isset($_GET['session']))
{
?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="notification.js"></script>
    <style>
        .dropdown-content {
  /* display: none; */
  position: absolute;
  background-color: #f1f1f1;
  color:red;
  width:345px;
  /* min-width: 160px; */
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

    </style>
</head>
<body>
    <?php
    include "nav.php";
    ?>
   
<div class="min-h-screen bg-gray-100 text-gray-800 antialiased px-4 py-6 flex flex-col justify-center sm:py-12">
<!-- <div class="w-30 bg-gray-200  ">
        <ul>
            <li>item</li>
            <li>item</li>
            <li>item</li>
        </ul>
    </div> -->
    <div class="text-center  px-6 py-4  ">
        <h1>Hello, <?php echo $_GET['session'] ?>   Welcome to our website.</h1>
        <div class="my-4">

<a href="logout.php" class="mt-4 bg-indigo-500 text-white py-2 px-6 rounded-lg">logout here</a>
</div>
    </div>
</div>
</body>
</html>
<?php
}
elseif (isset($_SESSION['id']) && isset($_SESSION['username']))
{
    $id = $_SESSION['id'];
    $sql = "select * from customers where Id = $id ";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <?php
    include "nav.php";
    ?>
<div class="min-h-screen bg-gray-100 text-gray-800 antialiased px-4 py-6 flex flex-col justify-center sm:py-12">
    <div class="text-center  px-6 py-4  ">
        <h1>Hello, <?php echo $row['Name']; ?>Welcome to our website.</h1>
        <div class="my-4">

            <a href="logout.php" class="mt-4 bg-indigo-500 text-white py-2 px-6 rounded-lg">logout here</a>
        </div>
    </div>
</div>
</body>
</html>
<?php
}
else{
    header("location:login.php");
}
?>
