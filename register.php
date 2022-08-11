<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page </title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-pink-400">
  <?php
   include "nav.php";
   ?>
<div class="min-h-screen bg-gray-100 text-gray-800 antialiased px-4 py-6 flex flex-col justify-center sm:py-12">
    <div class="relative py-3 sm:max-w-xl mx-auto text-center">
      <span class="text-2xl font-light">Register your account</span>
      <div class="relative mt-4 bg-white shadow-md sm:rounded-lg text-left">
        <div class="h-2 bg-indigo-400 rounded-t-md"></div>
        <div class="py-6 px-8">
          <form action="verifyregister.php" method="post">
          <label class="block font-semibold">Name<label>
          <input required type="text" name="Name" placeholder="Enter Your Name" class=" border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-1 focus:ring-indigo-600 rounded-md">
          <label class="block font-semibold my-3">Phone Number<label>
          <input required type="number" name="phone"  min="0000000000" max="9999999999" placeholder="Enter Phone Number" class=" border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-1 focus:ring-indigo-600 rounded-md">

          <label class="block mt-3 font-semibold">DOB<label>
          <input type="text" onfocus="(this.type='date')"
        onblur="(this.type='text')" required name="dob" placeholder="enter date of birth" class=" border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-1 focus:ring-indigo-600 rounded-md">
          <label class="block font-semibold my-3">Gender<label><br>
            <label  class=""><input type="radio" name="Gender" class="mt-4" value="male">Male</label>  
            <label class="pl-4"><input type="radio" name="Gender" class="mt-4" value="female">Female</label>  
            <label class="pl-4"><input type="radio" name="Gender" class="mt-4" value="other">Other</label>  
            <label class="block mt-4 font-semibold">Age<label>
              <input required  type="Number" name="age" placeholder="Enter Your Age" min="1" max="100" class=" border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-1 focus:ring-indigo-600 rounded-md">
          <div class="flex justify-between items-baseline mt-3">
            <button class="mt-4 bg-indigo-500 text-white py-2 px-6 rounded-lg">SignUp</button>
            <a href="login.php" class="text-sm hover:underline">Already have account?<span class="text-red-500 ml-1">Login Here</span></a>
          </div>
        </form>
        </div>

      </div>
    </div>
  </div>
  

</body>
</html>