<?php

session_start();
// print_r($_SESSION['email']);
if(($_SESSION['email'] && $_SESSION['password'] && $_SESSION['role']=='admin')){
// print_r($_SESSION['password']);
 require 'views/partials/header.php';
 ?>
<aside class="w-52 bg-gray-100  left-0 h-screen">
    <div class="bg-white px-12">
        <img src="https://media.istockphoto.com/id/1061061124/vector/discrete-maths-icon.jpg?s=612x612&w=0&k=20&c=Jq4SUkZDE2DU2etSGINj_TBWm5Bl0PS9q6Ar9Ah6sJk=" class="h-24 w-24" alt="">
    </div>
    <div class="px-4 flex flex-col gap-4">
        <h2 class="text-center">Task Management</h2>
        <nav>
            <ul class="px-4 flex flex-col gap-4">
                <li class="flex items-center justify-center gap-2 hover:bg-white rounded py-2">
                    <svg class="w-6 h-6 text-[#1c9bc9]" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--! Font Awesome Free 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM609.3 512H471.4c5.4-9.4 8.6-20.3 8.6-32v-8c0-60.7-27.1-115.2-69.8-151.8c2.4-.1 4.7-.2 7.1-.2h61.4C567.8 320 640 392.2 640 481.3c0 17-13.8 30.7-30.7 30.7zM432 256c-31 0-59-12.6-79.3-32.9C372.4 196.5 384 163.6 384 128c0-26.8-6.6-52.1-18.3-74.3C384.3 40.1 407.2 32 432 32c61.9 0 112 50.1 112 112s-50.1 112-112 112z"></path>
                    </svg>
                    <a href="register"  id="click">add manager</a>
                </li>
                <li class="flex items-center justify-center gap-2  hover:bg-white rounded py-2">
                    <svg class="w-6 h-6 text-[#1c9bc9]" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--! Font Awesome Free 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM609.3 512H471.4c5.4-9.4 8.6-20.3 8.6-32v-8c0-60.7-27.1-115.2-69.8-151.8c2.4-.1 4.7-.2 7.1-.2h61.4C567.8 320 640 392.2 640 481.3c0 17-13.8 30.7-30.7 30.7zM432 256c-31 0-59-12.6-79.3-32.9C372.4 196.5 384 163.6 384 128c0-26.8-6.6-52.1-18.3-74.3C384.3 40.1 407.2 32 432 32c61.9 0 112 50.1 112 112s-50.1 112-112 112z"></path>
                    </svg>
                    <a href="register">add employee</a>
                </li>
                <li class="flex items-center justify-center gap-2 px-1 hover:bg-white rounded py-2">
                    <svg class="w-6 h-6 text-[#1c9bc9]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M0 4c0-1.1.9-2 2-2h15a1 1 0 0 1 1 1v1H2v1h17a1 1 0 0 1 1 1v10a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm16.5 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"></path>
                    </svg>
                    <a href="viewcustomer">Task&customer</a>
                </li>
                <li class="flex items-center justify-center gap-6  hover:bg-white rounded py-2">
                    <svg class="w-6 h-6 text-[#1c9bc9]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M0 4c0-1.1.9-2 2-2h15a1 1 0 0 1 1 1v1H2v1h17a1 1 0 0 1 1 1v10a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm16.5 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"></path>
                    </svg>
                    <a href="assign">Assign Task</a>
                </li>
                <li class="flex items-center justify-center gap-6  hover:bg-white rounded py-2">
                    <svg class="w-6 h-6 text-[#1c9bc9]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M0 4c0-1.1.9-2 2-2h15a1 1 0 0 1 1 1v1H2v1h17a1 1 0 0 1 1 1v10a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm16.5 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"></path>
                    </svg>
                    <a href="assignuser">Assign user</a>
                </li>

            </ul>
        </nav>
    </div>

</aside>
<header class="absolute w-[1157px] h-12 top-0 ml-52 py-2 px-2 flex justify-between  bg-[#9dddcc] text-white ">
    <span>Home/Dashboard</span>
    <a href="logout" class="px-2 rounded py-1 bg-black">Log out</a>
</header>
<main class="ml-52 absolute w-[1100px] px-5 top-12 ">
    <div class="px-4 mt-4 mx-4 show" >
    <h1 class="font-bold text-purple-800">Admin Dashboard</h1>
    <h2 class="font-bold ">All Users</h2>
    </div>
    <?php
$config = require 'config.php';
// require "core/database/connection.php";
// // require 'core/router.php';
// // require "core/database/querybuilder.php";
$pdo = connection::make($config['database']);
$o = new querybuilder($pdo);
// require "../controllers/userscontroller.php";
$s=$o->select1('users');
?>
<table class="border-separate w-full   border  border-slate-900 overflow-auto shadow-2xl h-32">
    <tr class="bg-blue-400 ">
        <th class="px-2 py-4">id</th>
        <th class="px-2 py-4">firstname</th>
        <th class="px-2 py-4">lastname</th>
        <th class="px-2 py-4">email</th>
        <th class="px-2 py-4">role</th>
        <th class="px-2 py-4">password</th>
        <th class="px-2 py-4">edit</th>
    </tr>
    <?php
    foreach($s as $row){
        if($row['id']!=1 && $row['role']!='customer'){
        ?>
        <tbody class=" ">
        <tr class="bg-gray-100 text-center">
            <?php $_SESSION['id']=$row['id'];?>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['firstname'] ?></td>
            <td><?php echo $row['lastname'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['role'] ?></td>
            <td><?php echo $row['password'] ?></td>
            <td><form action="update" method="post">
                <button type="submit" value="<?php echo  $_SESSION['id'] ?>" name="edit">edit</button>
            </form></td>

        </tr>
        </tbody>
        <?php
    }
}
    ?>


    
</table>

<h1 class="font-bold">Task list assigned to manager</h1>
<table class="border-separate w-full   border  border-slate-900 overflow-auto shadow-2xl h-32">
    <tr class="bg-blue-400 ">
        <th class="px-2 py-4">id</th>
        <th class="px-2 py-4">message</th>
        <th class="px-2 py-4">manager</th>
        <th class="px-2 py-4">task</th>
        <th class="px-2 py-4">status</th>
    </tr>
    <?php
    $pdo = connection::make($config['database']);
    $o = new querybuilder($pdo);
    $s=$o->select1('assigntask');
    foreach($s as $row){
        if($row['role']=="manager"){
        ?>
        <tbody class=" ">
        <tr class="bg-gray-100 text-center">
            <?php $_SESSION['id']=$row['id'];?>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['message'] ?></td>
            <td><?php echo $row['user_id'] ?></td>
            <td><?php echo $row['task'] ?></td>
            <td><?php echo $row['status'] ?></td>

        </tr>
        </tbody>
        <?php
    }
}
    ?>


    
</table>

</main>
<?php require 'views/partials/footer.php'; 
}
else{
    header('location:login');
}


