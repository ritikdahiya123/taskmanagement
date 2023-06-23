<?php
session_start();
$id=$_POST['edit'];
// echo $id;
$config = require 'config.php';
$pdo = connection::make($config['database']);
$o = new querybuilder($pdo);
$fetch=$o->select('users',$id,'*','id');
foreach($fetch as $row){
    if($row['id']=$id){
// echo $row['firstname'];
// print_r($row);
    }
}
// die();
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
            <h1 class="font-bold text-purple-800 mt-4">update Manager/employee</h1>
            <form action="updatemember" method="post" class="grid grid-cols-3 gap-4 py-12">
                <div>
                    <label for="fname">fistname</label>
                    <br>
                    <input type="text" name="firstname" id="" value="<?php echo $row['firstname'];?>" class="bg-gray-100 rounded">
                </div>
                <div>
                    <label for="lname">lastname</label>
                    <br>
                    <input type="text" name="lastname" id="" value="<?php echo $row['lastname'];?>" class="bg-gray-100 rounded">
                </div>
                <div>
                    <label for="email">email</label>
                    <br>
                    <input type="email" name="email" id="" value="<?php echo $row['email'];?>" class="bg-gray-100 rounded" readonly>
                </div>
               
                <div>
                    <label for="password">password</label>
                    <br>
                    <input type="password" name="password" id="" value="<?php echo $row['password'];?>" class="bg-gray-100 rounded">
                </div>
                <div>
                    <input type="submit" value="updatemember" name="updatemember" class="bg-[#1c9bc9] text-white px-2 rounded py-1 mt-3">
                </div>

            </form>
        </div>
    </main>

<?php require 'views/partials/footer.php';
} else {
    header('location:admin');
}
// ?>