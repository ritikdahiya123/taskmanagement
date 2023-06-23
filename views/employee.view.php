<?php 
session_start();
// print_r($_SESSION['email']);
if(($_SESSION['email'] && $_SESSION['password']  && $_SESSION['role']=='employee')){
require 'views/partials/header.php'; ?>
<aside class="w-52 bg-gray-100  left-0 h-screen">
    <div class="bg-white px-12">
        <img src="https://media.istockphoto.com/id/1061061124/vector/discrete-maths-icon.jpg?s=612x612&w=0&k=20&c=Jq4SUkZDE2DU2etSGINj_TBWm5Bl0PS9q6Ar9Ah6sJk=" class="h-24 w-24" alt="">
    </div>
    <div class="px-4 flex flex-col gap-4">
        <h2 class="text-center">Task Management</h2>
        
    </div>

</aside>
<header class="absolute w-[1157px] h-12 top-0 ml-52 py-2 px-2 flex justify-between  bg-[#9dddcc] text-white ">
    <span>Home</span>
    <a href="logout" class="px-2 rounded py-1 bg-black">Log out</a>
</header>
<main class="ml-52 absolute w-[1157px] top-12 ">
    <div class="px-4 mt-4 mx-64 show" >
    <h1 class="font-bold text-purple-800">Employee Dashboard</h1>
    <?php
$config = require 'config.php';
// require "core/database/connection.php";
// // require 'core/router.php';
// // require "core/database/querybuilder.php";
$pdo = connection::make($config['database']);
$o = new querybuilder($pdo);
// require "../controllers/userscontroller.php";
$s=$o->select1('assigntask');
?>
<table class="border-separate w-full   border  border-slate-900 overflow-auto shadow-2xl ">
    <tr class="bg-blue-400 ">
        <th>name</th>
        <th class=" ">message</th>
        <th class="px-2 ">task</th>
        <th>status</th>
    </tr>
    <?php
    foreach($s as $row){
        if($row['user_id']==$_SESSION['name']){
        ?>
        <tbody class=" ">
        <tr class="bg-gray-100 text-center">
            <td><?php echo $row['user_id'] ?></td>
            <td><?php echo $row['message'] ?></td>
            <td><?php echo $row['task'] ?></td>
            <td><form action="employeestatus" method="post">
                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                 <input type="radio" name="status" value="inprogresscess" id="inprocess"><label for="inprocess">in progress</label>
                <input type="radio" name="status"  value="resolved" id="done"><label for="done">resolve</label>
                <input type="submit" value="change status" name="changestatus" class="bg-blue-200 rounded px-2">
            </form></td>

        </tr>
        </tbody>
        <?php
    }
}
    ?>


    
</table>

<?php require 'views/partials/footer.php'; 
}
else{
    header('location:login');
}

?>