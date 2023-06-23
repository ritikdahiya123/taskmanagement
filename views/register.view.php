<?php
session_start();
// print_r($_SESSION['email']);
if (($_SESSION['email'] && $_SESSION['password'])) {
    require 'views/partials/header.php'; ?>
    <aside class="w-52 bg-gray-100  left-0 h-screen">
        <div class="bg-white px-12">
            <img src="https://media.istockphoto.com/id/1061061124/vector/discrete-maths-icon.jpg?s=612x612&w=0&k=20&c=Jq4SUkZDE2DU2etSGINj_TBWm5Bl0PS9q6Ar9Ah6sJk=" class="h-24 w-24" alt="">
        </div>
        <div class="px-4 flex flex-col gap-4">
            <h2 class="text-center">Task Management</h2>
            <a href="admin" class=" hover:bg-white rounded px-12 py-2">Dashboard</a>
        </div>

    </aside>
    <header class="absolute w-[1157px] h-12 top-0 ml-52 py-2 px-2 flex justify-between  bg-[#9dddcc] text-white ">
        <span>Home</span>
        <a href="logout" class="px-2 rounded py-1 bg-black">Log out</a>
    </header>
    <main class="ml-52 absolute w-[1157px] top-12 ">
        <a href="addmember" id="click">add member</a>
        <div class="px-4 py-6  mx-4 show shadow-2xl">
            <h1 class="font-bold text-purple-800 mt-4">Add Manager/employee</h1>
            <form action="addmember" method="post" class="grid grid-cols-3 gap-4 py-12">
                <div>
                    <label for="fname">fistname</label>
                    <br>
                    <input type="text" name="fname" id="" class="bg-gray-100 rounded">
                </div>
                <div>
                    <label for="lname">lastname</label>
                    <br>
                    <input type="text" name="lname" id="" class="bg-gray-100 rounded">
                </div>
                <div>
                    <label for="email">email</label>
                    <br>
                    <input type="email" name="email" id="" class="bg-gray-100 rounded">
                </div>
                <div>
                    <label for="role">role</label>
                    <br>
                    <!-- <select name="role" id="role" class="bg-gray-100 rounded w-44 h-6">
                <option value="manager">manager</option>
                <option value="employee">employee</option>
            </select> -->
                    <input type="radio" name="role" id="employee" value="employee" class="bg-gray-100 rounded">
                    <label for="employee">employee</label>
                    <input type="radio" name="role" id="manager" value="manager" class="bg-gray-100 rounded">
                    <label for="manager">manager</label>
                </div>
                <div>
                    <label for="password">password</label>
                    <br>
                    <input type="password" name="password" id="" class="bg-gray-100 rounded">
                </div>
                <div>
                    <input type="submit" value="Add Member" name="addmember" class="bg-[#1c9bc9] text-white px-2 rounded py-1 mt-3">
                </div>

            </form>
        </div>
    </main>

<?php require 'views/partials/footer.php';
} else {
    header('location:admin');
}
?>