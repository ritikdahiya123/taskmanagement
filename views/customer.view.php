<?php

session_start();
// echo $_SESSION['id'];
// print_r($_SESSION['email']);
if(($_SESSION['email'] && $_SESSION['password'] && $_SESSION['role']=='customer')){
// print_r($_SESSION['password']);
 require 'views/partials/header.php';
 ?>
<aside class="w-52 bg-gray-100  left-0 h-screen">
    <div class="bg-white px-12">
        <img src="https://media.istockphoto.com/id/1061061124/vector/discrete-maths-icon.jpg?s=612x612&w=0&k=20&c=Jq4SUkZDE2DU2etSGINj_TBWm5Bl0PS9q6Ar9Ah6sJk=" class="h-24 w-24" alt="">
    </div>
    <div class="px-4 flex flex-col gap-4">
        <h2 class="text-center">Task Management</h2>
        
    </div>

</aside>
<header class="absolute w-[1157px] h-12 top-0 ml-52 py-2 px-2 flex justify-between  bg-[#9dddcc] text-white ">
    <span>Home/Dashboard</span>
    <a href="logout" class="px-2 rounded py-1 bg-black">Log out</a>
</header>
<main class="ml-52 absolute w-[1157px] px-5 top-12 ">
    <div class="px-4 mt-4 mx-4 show" >
    <h1 class="font-bold text-purple-800">Customer Dashboard</h1>
    <h2 class="font-bold ">Work Order</h2>
    </div>
    <div class="flex items-center justify-center bg-white w-96 py-4 shadow-2xl">
  <form action="assigntask" method="post" class="">
    <label for="title">Title</label>
    <input type="text" name="title" id="title" class="bg-gray-100">
    <br>
    <br>
    <label for="note">Note
    </label>
    <input type="text" name="note" id="" class="bg-gray-100"><br>
    <br>
    <input type="text" name="c_id" id="" value="<?php echo $_SESSION['id']?>" class="hidden">
    <input type="submit" value="WorkOrder" name="workorder"class="px-3 bg-blue-400 text-white rounded py-1">
  </form>
    </div>
</main>
<?php require 'views/partials/footer.php'; 
}
else{
    header('location:login');
}
