
<Nav class="bg-indigo-600 h-16 text-gray-100 flex justify-center items-center">
        <a href="home.php" class="px-6 font-semibold">Home</a>
        <a href="login.php" class="px-6 font-semibold">Login</a>
        <a href="adminlogin.php" class="px-6 font-semibold">Admin Login</a>
        <?php
            if(isset($_GET['session']))
{

?>

        <div>
               <button class="border border-indigo-600 rounded-lg bg-gray-200 absolute right-28 top-3 " onclick="myFunc()"> <img src="https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-ios7-bell-512.png"  alt="" width="38px" height="15px">
               </button>
               <div class="dropdown-content invisible flex flex-col absolute right-0 top-20 ">
               <?php
                include "db_conn.php";
                $sql1 = "select * from customers order by Id DESC LIMIT 6";
                $result  = mysqli_query($conn,$sql1);
                $fetched = mysqli_fetch_all($result);
                foreach($fetched as $row)
                {
                        
                ?>
                <p class="px-4 font-semibold border-b-2 border-gray-900 pt-2"><?php echo $row[1]?> Has Registered</p>
              <?php
                }
              ?>
  </div>
        </div>
        
        <?php
 }
?>
</Nav>

