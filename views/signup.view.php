<?php require 'views/partials/header.php';?>
<main class="flex gap-20">
    <img   class="h-[550px] w-[50%]" src="https://images.pexels.com/photos/2681319/pexels-photo-2681319.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
    <form action="addcustomer" method="post" class=" px-4 shadow-2xl">
        <h2 class="font-bold text-xl mb-5">customer Registration</h2>
        <div class="grid grid-cols-2 gap-5">
        <div>
            <label for="fname">firstname</label>
            <br>
            <input type="text" name="fname" id="" class="bg-gray-100 w-52 rounded">
        </div>
        <div>
            <label for="lname">lastname</label>
            <br>
            <input type="text" name="lname" id="" class="bg-gray-100 w-52 rounded">
        </div>
        <!-- <div>
            <label for="phone">phone</label>
            <br>
            <input type="phone" name="phone" id=""class="bg-gray-100 w-52 rounded">
        </div> -->
        <div>
            <label for="email">email</label>
            <br>
            <input type="email" name="email" id=""class="bg-gray-100 w-52 rounded">
        </div>
        <div>
            <label for="password">password</label>
            <br>
            <input type="password" name="password" id=""class="bg-gray-100 w-52 rounded">
        </div>
        <!-- <div>
            <label for="cpassword">confirm password</label>
            <br>
            <input type="password" name="cpassword" id=""class="bg-gray-100 w-52 rounded">
        </div>
        </div>
        <br>
        <input type="checkbox" name="agree" id="">
        <label for="agree">yes i agree with all terms and condtions</label> -->
        <br>
        <br>
        <input type="submit" value="Create Acccount" name="addcustomer" class="bg-[#1c9bc9] shadow-2xl text-white px-2 py-1 rounded">
        <br>
        <span>Already have account?</span><a href="login" class="text-[#1c9bc9]">Login</a>
    </form>
    
</main>

<?php require 'views/partials/footer.php';?>