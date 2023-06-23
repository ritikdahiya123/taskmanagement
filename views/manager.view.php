<?php
session_start();
// echo $_SESSION['id'];
// die();6+
// print_r($_SESSION['email']);
if(($_SESSION['email'] && $_SESSION['password']  && $_SESSION['role']=='manager')){
 require 'views/partials/header.php'; ?>
<aside class="w-52 bg-gray-100  left-0 h-screen">
    <div class="bg-white px-12">
        <img src="https://media.istockphoto.com/id/1061061124/vector/discrete-maths-icon.jpg?s=612x612&w=0&k=20&c=Jq4SUkZDE2DU2etSGINj_TBWm5Bl0PS9q6Ar9Ah6sJk=" class="h-24 w-24" alt="">
    </div>
    <div class="px-4 flex flex-col gap-4">
        <h2 class="text-center">Task Management</h2>
         
    </div>
    <nav>
            <ul class="px-4 flex flex-col gap-4">
                <li class="flex items-center justify-center gap-2 hover:bg-white rounded py-2">
                    <svg class="w-6 h-6 text-[#1c9bc9]" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--! Font Awesome Free 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM609.3 512H471.4c5.4-9.4 8.6-20.3 8.6-32v-8c0-60.7-27.1-115.2-69.8-151.8c2.4-.1 4.7-.2 7.1-.2h61.4C567.8 320 640 392.2 640 481.3c0 17-13.8 30.7-30.7 30.7zM432 256c-31 0-59-12.6-79.3-32.9C372.4 196.5 384 163.6 384 128c0-26.8-6.6-52.1-18.3-74.3C384.3 40.1 407.2 32 432 32c61.9 0 112 50.1 112 112s-50.1 112-112 112z"></path>
                    </svg>
                    <a href="assignusertask"  id="click">Assigntask</a>
                </li>
                
 
            </ul>
        </nav>

</aside>
<header class="absolute w-[1157px] h-12 top-0 ml-52 py-2 px-2 flex justify-between  bg-[#9dddcc] text-white ">
    <span>Home</span>
    <a href="logout" class="px-2 rounded py-1 bg-black">Log out</a>
</header>
<main class="ml-52 absolute w-[1157px] top-12 ">
    <div class="px-4 mt-4 mx-64 show" >
    <h1 class="font-bold text-purple-800">Manager Dashboard</h1>
    <h2>Task list</h2>
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
<table class="border-separate w-full   border  border-slate-900 overflow-auto shadow-2xl h-32">
    <tr class="bg-blue-400 ">
    <th class="px-2 py-4">id</th>
        <th class="px-2 py-4">message</th>
        <th class="px-2 py-4">task</th>
        <th class='px-2 py-4'>status</th>
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
            <td><form action="managerstatus" method="post">
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

<h2 class="font-bold my-4">all employee list </h2>
<?php
$config = require 'config.php';
// require "core/database/connection.php";
// // require 'core/router.php';
// // require "core/database/querybuilder.php";
$pdo = connection::make($config['database']);
$o1 = new querybuilder($pdo);
// require "../controllers/userscontroller.php";
$s1=$o1->select1('assignuser');
?>
<table class="border-separate w-full   border  border-slate-900 overflow-auto shadow-2xl h-32">
    <tr class="bg-blue-400 ">
        <th class="px-2 py-4">id</th>
        <th class="px-2 py-4">employee</th>
        <th>task</th>
        <th>task status</th>
    </tr>
    <?php
    foreach($s1 as $row){
        if($row['m_id']==$_SESSION['id']){
            $p=$o->select1('assigntask');
            foreach($p as $status){
                if($status['user_id']==$row['employee']){
        ?>
        <tbody class=" ">
        <tr class="bg-gray-100 text-center">
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['employee'] ?></td>
            <?php 
           
            ?>
            <td><?php echo $status['task'] ?></td>
            <td><?php echo $status['status'] ?></td>
            <?php
             $taskAssigned = true;
                }
               
                
                
                    
                
            }
            
          ?>
        </tr>
        </tbody>
        <?php
    }
}
    ?>


    
</table>
    </div>
</main>

<?php require 'views/partials/footer.php'; 
}
else{
    header('location:login');
}
?>