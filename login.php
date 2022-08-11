<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page </title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body >
   <?php
    include "nav.php";
   ?>
<div class="min-h-screen bg-gray-100 text-gray-800 antialiased px-4 py-6 flex flex-col justify-center sm:py-12">
    <div class="relative py-3 sm:max-w-xl mx-auto text-center">
      <span class="text-2xl font-light">Login to your account</span>
      <div class="relative mt-4 bg-white shadow-md sm:rounded-lg text-left">
        <div class="h-2 bg-indigo-400 rounded-t-md"></div>
        <div class="py-6 px-8">
          <form action="verifylogin.php" method="post">
          <label class="block font-semibold">Phone Number<label>
          <input type="number" required min="0000000000" max="9999999999" name="PhoneNum" placeholder="Enter Phone Number" class=" border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-1 focus:ring-indigo-600 rounded-md">
          <label class="block mt-3 font-semibold" >Password<label>
          <input type="text" required onfocus="(this.type='date')"
        onblur="(this.type='text')" name="Pass" placeholder="select date of birth" class=" border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-1 focus:ring-indigo-600 rounded-md">
          <div class="flex justify-between items-baseline">
            <button class="mt-4 bg-indigo-500 text-white py-2 px-6 rounded-lg">Login</button>
            <a href="register.php" class="text-sm hover:underline">Register Here</a>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>
  

</body>
</html>